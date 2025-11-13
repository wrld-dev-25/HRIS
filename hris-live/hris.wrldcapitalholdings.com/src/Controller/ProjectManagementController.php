<?php

namespace App\Controller;

use App\Service\APIRequest;
use Psr\Log\LoggerInterface;
use App\Service\APIFunctions;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\Exception\ClientException;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjectManagementController extends AbstractController
{
    private $apiService;
    private $logger;
    private $apiFunctions;
    private $cache;

    public function __construct( APIRequest $apiService, APIFunctions $apiFunctions, LoggerInterface $logger, #[Autowire(service: 'cache.my_redis')]
    AdapterInterface $cache)
    {
        $this->apiService = $apiService;
        $this->logger = $logger;
        $this->apiFunctions = $apiFunctions;
        $this->cache = $cache;
    }

    #[Route('project/subdivisions', name: 'subdivision')]
    public function viewSubdivision(Request $request)
    {
        $subdivisionResponse = $this->apiFunctions->getSubdivision($request);
        if (is_array($subdivisionResponse) && isset($subdivisionResponse['status']) && $subdivisionResponse['status'] === 200) {
            $responseData = $subdivisionResponse;
            $responseData2 = $this->apiFunctions->getPhase($request)->toArray();
            return $this->render('project_management/apps-subdivision.html.twig',[
                'subdivisions' => $responseData['subdivisions'],
                'phase' => $responseData2['phase'],
            ]);
        } else {
            return $this->render('project_management/apps-subdivision.html.twig',[
                'subdivisions' => [],
                'phase' => [],
            ]);
        }
    }

    #[Route('project/project', name: 'project')]
    public function viewProject(Request $request)
    {
        // Retrieve project response safely (apiFunctions may return an array or an object with toArray())
        $rawProjectResponse = $this->apiFunctions->getProject($request);
        if (is_array($rawProjectResponse)) {
            $projectResponse = $rawProjectResponse;
        } elseif (is_object($rawProjectResponse) && method_exists($rawProjectResponse, 'toArray')) {
            $projectResponse = $rawProjectResponse->toArray();
        } else {
            $projectResponse = [];
        }

        // Retrieve subdivision response safely
        $rawSubdivisionResponse = $this->apiFunctions->getSubdivision($request);
        if (is_array($rawSubdivisionResponse)) {
            $responseData = $rawSubdivisionResponse;
        } elseif (is_object($rawSubdivisionResponse) && method_exists($rawSubdivisionResponse, 'toArray')) {
            $responseData = $rawSubdivisionResponse->toArray();
        } else {
            $responseData = [];
        }

        // Build a safe subdivision profile (handle missing indices/keys)
        $subs = $responseData['subdivisions'] ?? [];
        $firstSub = $subs[0] ?? null;
        $subdivisionProfile = [
            [
                'id'            => $firstSub['id'] ?? '',
                'code'          => $firstSub['subdivisionCode'] ?? '',
                'name'          => $firstSub['name'] ?? '',
                'location'      => $firstSub['location'] ?? '',
                'total_phases'  => $firstSub['total_phases'] ?? 0,
                'total_lots'    => $firstSub['total_lots'] ?? 0,
                'phases'        => $firstSub['phases'] ?? [],
            ]
        ];
        // Initialize the cache keys
        $projectsKey = 'projectList';

        // Try to get the cache item
        // $projectsCache = $this->cache->getItem($projectsKey);
        // if($projectsCache->isHit()){
        //     $projectResponse = $projectsCache->get();
        // }
        // else{
        //     $projectResponse = $this->apiFunctions->getProject($request)->toArray();
        //     $projectsCache->set($projectResponse);
        //     $this->cache->save($projectsCache);
        //     $projectsCache->expiresAfter(86400); // Cache for 24 hour
        // }
        
        return $this->render('project_management/apps-project.html.twig',[
            'subdivisions' => $responseData['subdivisions'] ?? [],
            'projects' => $projectResponse['project'] ?? [],
            'subProfile' => $subdivisionProfile,
        ]);
    }

    #[Route('project/category', name: 'category')]
    public function viewCategory(Request $request)
    {
        $responseData = $this->apiFunctions->getCategory($request)->toArray();
        $responseData2 = $this->apiFunctions->getProject($request)->toArray();
        $responseData3 = $this->apiFunctions->getModel($request)->toArray();
        $phase = $this->apiFunctions->getPhase($request)->toArray();
        return $this->render('project_management/apps-category.html.twig',[
            'categories' => $responseData['category'],
            'projects' => $responseData2['project'],
            'models' => $responseData3['models'],
            'phase' => $phase['phase'],
        ]);
    }

    #[Route('project/phase', name: 'phase')]
    public function viewPhase(Request $request)
    {
        $responseData = $this->apiFunctions->getPhase($request)->toArray();
        $responseData2 = $this->apiFunctions->getSubdivision($request)->toArray();
        return $this->render('project_management/apps-phase.html.twig',[
            'phase' => $responseData['phase'],
            'subdivisions' => $responseData2['subdivisions'],
        ]);
    }

    #[Route('project/subwizard', name: 'subwizard')]
    public function subdivisionWizard(Request $request)
    {
        $responseData = $this->apiFunctions->getPhase($request)->toArray();
        $responseData2 = $this->apiFunctions->getSubdivision($request)->toArray();
        $responseData3 = $this->apiFunctions->getModel($request)->toArray();
        $responseData4 = $this->apiFunctions->getCategory($request)->toArray();
        $responseData5 = $this->apiFunctions->getOwner($request)->toArray();
        $javascriptSnippet = "<script>
            var subdivision = " . json_encode($responseData2) . ";
            var phase = " . json_encode($responseData) . ";
        </script>";
        return $this->render('project_management/subdivision-wizard.html.twig', [
            'phase' => $responseData['phase'],
            'subdivisions' => $responseData2['subdivisions'],
            'models' => $responseData3['models'],
            'category' => $responseData4['category'],
            'owner' => $responseData5['owner'],
            'javascriptSnippet' => $javascriptSnippet, // Pass the JavaScript snippet to the template
        ]);
    }

    #[Route('/form/submit_subdivision', name: 'submit_form')]
    public function submitSubdivisionForm(Request $request, HttpClientInterface $httpClient)
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            $formData = [
                'name' => $request->request->get('name'),
                'code' => $request->request->get('code'),
                'desc' => $request->request->get('description'),
                'total_lots' => $request->request->get('total_lots'),
                'location' => $request->request->get('location'),
            ];
            //dd($formData);
            try {
                $response = $this->apiService->apiRequest('POST', 'api/subdivision/create', json_encode($formData), $token);
                // /dd($response->getStatusCode());
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('subdivision', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('subdivision', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
            } catch (ClientException  $e) {
                $this->addFlash('data', 'failed');
                return $this->redirectToRoute('subdivision');
            } 
        }
        return $this->redirectToRoute('subdivision');
    }

    #[Route('/form/submit_project', name: 'submit_project_form')]
    public function submitProjectForm(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            $formData = [
                'name' => $request->request->get('name'),
                'code' => $request->request->get('code'),
                'desc' => $request->request->get('desc'),
                'subdivision_id' => $request->request->get('subdivision'),
            ];
            try {
                $response = $this->apiService->apiRequest('POST', 'api/project/create', json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('project', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('project', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
    
            } catch (ClientException  $e) {
                $this->addFlash('data', 'failed');
                return $this->redirectToRoute('project');
            } 
        }
        return $this->redirectToRoute('project');
    }

    #[Route('/form/update_project', name: 'update_project_form')]
    public function updateProjectForm(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            
            $formData = [
                'id'   => $request->request->get('proj_id'), 
                'name' => $request->request->get('name'),
                'code' => $request->request->get('code'),
                'desc' => $request->request->get('desc'),
                'subdivision_id' => $request->request->get('subdivision'),
            ];
            try {
                $response = $this->apiService->apiRequest('POST', 'api/project/update', json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('project', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('project', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
    
            } catch (ClientException  $e) {
                $this->addFlash('data', 'failed');
                return $this->redirectToRoute('project');
            }
        }
        return $this->redirectToRoute('project');
    }

    #[Route('/form/delete_project', name: 'delete_project_form')]
    public function deleteProjectForm(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            
            $formData = [
                'id'   => $request->request->get('proj_id'), 
            ];
            //dd($formData);
            try {
                $response = $this->apiService->apiRequest('POST', 'api/project/delete', json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('project', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('project', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
    
            } catch (ClientException  $e) {
                $this->addFlash('data', 'failed');
                return $this->redirectToRoute('project');
            }
        }
        return $this->redirectToRoute('project');
    }

    #[Route('/form/submit_phase', name: 'submit_phase_form')]
    public function submitPhaseForm(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            
            $formData = [
                'name' => $request->request->get('name'),
                'code' => $request->request->get('code'),
                'block' => intval($request->request->get('total_blocks')),
                'lot' => intval($request->request->get('total_lots')),
                'subdivision_id' => $request->request->get('subdivision'),
            ];
            //dd($formData);
            //push data
            
            //dd($response);
            try {
                $response = $this->apiService->apiRequest('POST', 'api/phase/create', json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('phase', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('phase', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
    
            } catch (ClientException  $e) {
                $this->addFlash('data', 'failed');
                return $this->redirectToRoute('phase');
            }
            // if ($response->getStatusCode() == 201 || $response->getStatusCode() == 200) {
            //     $this->addFlash('success', 'Employee records created successfully.');
                
            // } else {
            //     $this->addFlash('error', 'Failed to create employee records.');
            // }
            //dd($response->getStatusCode());
            // return $this->redirectToRoute('phase');
        }
        return $this->redirectToRoute('phase');
    }

    #[Route('/form/update_phase', name: 'update_phase_form')]
    public function updatePhaseForm(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            
            $formData = [
                'id' => $request->request->get('phase_id'),
                'name' => $request->request->get('name'),
                'code' => $request->request->get('code'),
                'block' => intval($request->request->get('total_blocks')),
                'lot' => intval($request->request->get('total_lots')),
                'subdivision_id' => intval($request->request->get('sub_id')),
            ];
            //dd(json_encode($formData));
            //push data
            
            try {
                $response = $this->apiService->apiRequest('POST', 'api/phase/update', json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('phase', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('phase', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
    
            } catch (ClientException  $e) {
                $this->addFlash('data', 'failed');
                return $this->redirectToRoute('phase');
            }
        }
        return $this->redirectToRoute('phase');
    }

    #[Route('/form/delete_phase', name: 'delete_phase_form')]
    public function deletePhaseForm(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            
            $formData = [
                'id' => $request->request->get('phase_id'),
            ];
            try {
                $response = $this->apiService->apiRequest('POST', 'api/phase/delete', json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('phase', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('phase', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
    
            } catch (ClientException  $e) {
                $this->addFlash('data', 'failed');
                return $this->redirectToRoute('phase');
            }
        }
        return $this->redirectToRoute('phase');
    }

    #[Route('/form/update_subdivision', name: 'update_subdivision_form')]
    public function updateSubdivision(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        // if(!$session->has('token')){
        //     $session->invalidate();
        //     return $this->redirectToRoute('login');
        // }
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            $formData = [
                'id' => $request->request->get('subdivision_id'),
                'name' => $request->request->get('name'),
                'code' => $request->request->get('code'),
                'desc' => $request->request->get('description'),
                'total_lots' => $request->request->get('total_lots'),
                'location' => $request->request->get('location'),
            ];
            //dd($formData);
            $this->addFlash('info', 'updated');
            $response = $this->apiService->apiRequest('POST', 'api/subdivision/update', json_encode($formData), $token);
            // $responseData =  $response->toArray();
            // if($response->getStatusCode() === 200 || $response->getStatusCode() === 201){
            //     $this->addFlash('status', 'success');
            // }
            // else{
            //     $this->addFlash('status',$responseData['message'] ?? 'failed');
            // }
            // return $this->redirectToRoute('subdivision');
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('subdivision', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
            return $this->redirectToRoute('subdivision', [
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
        return $this->redirectToRoute('subdivision');
    }

    #[Route('/project/update_subdivision', name: 'project_update_subdivision_form')]
    public function projectUpdateSubdivision(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        // if(!$session->has('token')){
        //     $session->invalidate();
        //     return $this->redirectToRoute('login');
        // }
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            $formData = [
                'id' => $request->request->get('subdivision_id'),
                'name' => $request->request->get('name'),
                'code' => $request->request->get('code'),
                'desc' => $request->request->get('description'),
                'location' => $request->request->get('location'),
            ];
            //dd($formData);
            try {
                $response = $this->apiService->apiRequest('POST', 'api/project/subdivision/update', json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('project', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('project', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
    
            } catch (ClientException  $e) {
                $this->addFlash('data', 'failed');
                return $this->redirectToRoute('project');
            }
            // $this->addFlash('info', 'updated');
            // $response = $this->apiService->apiRequest('POST', 'api/project/subdivision/update', json_encode($formData), $token);
            // $responseData =  $response->toArray();

            // if($response->getStatusCode() === 200 || $response->getStatusCode() === 201){
            //     $this->addFlash('status', 'success');
            // }
            // else{
            //     $this->addFlash('status',$responseData['message'] ?? 'failed');
            // }
            // return $this->redirectToRoute('project');
        }
        return $this->redirectToRoute('project');
    }

    #[Route('/form/delete_subdivision', name: 'delete_subdivision_form')]
    public function deleteSubdivision(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            $formData = [
                'id' => $request->request->get('subdivision_id'),
            ];
            //dd($formData);
            $response = $this->apiService->apiRequest('POST', 'api/subdivision/delete', json_encode($formData), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('subdivision', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
            return $this->redirectToRoute('subdivision', [
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
        return $this->redirectToRoute('subdivision');
    }

    #[Route('/project/delete_subdivision', name: 'project_delete_subdivision_form')]
    public function projectDeleteSubdivision(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            $formData = [
                'id' => $request->request->get('subdivision_id'),
            ];
            //dd($formData);          
            try {
                $response = $this->apiService->apiRequest('POST', 'api/subdivision/delete', json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('project', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('project', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
    
            } catch (ClientException  $e) {
                $this->addFlash('data', 'failed');
                return $this->redirectToRoute('project');
            }
            return $this->redirectToRoute('project');
        }
        return $this->redirectToRoute('project');
    }

    #[Route('/form/submit_category', name: 'submit_category_form')]
    public function submitCategoryForm(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            
            $formData = [
                'code' => $request->request->get('code'),
                'desc' => $request->request->get('desc'),
                'block' => $request->request->get('block'),
                'lot' => $request->request->get('lot'),
                'model_id' => $request->request->get('model'),
                'proj_id' => $request->request->get('project'),
            ];
            //dd($formData);
            
            try {
                $response = $this->apiService->apiRequest('POST', 'api/category/create', json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('project', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('project', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
    
            } catch (ClientException  $e) {
                $this->addFlash('data', 'failed');
                return $this->redirectToRoute('category');
            }
            //return $this->redirectToRoute('category');
        }
        return $this->redirectToRoute('category');
    }

    #[Route('/form/update_category', name: 'update_category_form')]
    public function updateCategoryForm(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            
            $formData = [
                'id' => $request->request->get('category_id'),
                'code' => $request->request->get('code'),
                'desc' => $request->request->get('desc'),
                'block' => $request->request->get('block'),
                'lot' => $request->request->get('lot'),
                'model_id' => $request->request->get('model'),
                'proj_id' => $request->request->get('project'),
            ];
            //dd($formData);
            try {
                $response = $this->apiService->apiRequest('POST', 'api/category/update', json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('category', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('category');
    
            } catch (ClientException  $e) {
                $this->addFlash('data', 'failed');
                return $this->redirectToRoute('category');
            }
        }
        return $this->redirectToRoute('category');
    }

    #[Route('/form/delete_category', name: 'delete_category_form')]
    public function deleteCategoryForm(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            
            $formData = [
                'id' => $request->request->get('category_id'),
            ];
            try {
                $response = $this->apiService->apiRequest('POST', 'api/category/delete', json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('category', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('category', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
    
            } catch (ClientException  $e) {
                $this->addFlash('data', 'failed');
                return $this->redirectToRoute('category');
            }
        }
        return $this->redirectToRoute('category');
    }

    #[Route('/wizard/create_project', name: 'wizard_project')]
    public function createWizardProject(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');

        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            $formData = [
                "sub_id"             => $request->request->get("subid_code"),
                "archived"           => false, // Adjust if this comes from the form or needs to be a static value
                "phase_id"           => $request->request->get("subphase"),
                "project" => [
                    "code"           => $request->request->get("projectcode"),
                    "name"           => $request->request->get("projectname"),
                    "desc"           => $request->request->get("projectdesc"), // Add projectdesc field to your form
                ],
                "category" => [
                    "code"          => $request->request->get("categorycode") ?? "",
                    "desc"          => $request->request->get("categorydesc"),
                    "block"         => intval($request->request->get("categoryblock")),
                    // "lot"           => intval($request->request->get("categorylot")),
                    "lot"           => 0,
                    "blocks_id"     => $request->request->get("categoryblock"),
                    "owner_id"      => $request->request->get("category_owner"),
                    "model_id"      => $request->request->get("categorymodel"), // Assuming model_id is same as categorymodel
                    "lots_id"       => intval($request->request->get("categorylot")),
                    //"overhead"      => $request->request->get("categoryoverhead"),
                    "overhead" => $request->request->get("category_overhead") === 'on',
                ]
            ];

            //dd(json_encode($formData));
            // /dd($formData);
            // Send request to the API
            
            try {
                $response = $this->apiService->apiRequest('POST', 'api/wizard/create', json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('project', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                $this->cache->deleteItem('projectList');
                return $this->redirectToRoute('project', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
    
            } catch (ClientException  $e) {
                $this->addFlash('data', 'failed');
                return $this->redirectToRoute('project');
            }
            // Handle API response
            // $statusCode = $response->getStatusCode();
            // //dd($statusCode);
            // if ($statusCode === 200) {
            //     return $this->redirectToRoute('project', ['status' => $statusCode]);
            // } else {
            //     // Handle error response
            //     $error = $response->getContent();
            //     $responseData = $this->getSubdivision($request)->toArray();
            //     $responseData2 = $this->getPhase($request)->toArray();

            //     // return $this->render('project_management/apps-project.html.twig', [
            //     //     'subdivisions' => $responseData['subdivisions'],
            //     //     'phase' => $responseData2['phase'],
            //     //     'error' => $error,
            //     //     'status_code' => $statusCode
            //     // ]);
            //     return $this->redirectToRoute('project',['status' => $statusCode]);
            // }
        }

        // If not POST, render the form with subdivisions and phases
        return $this->redirectToRoute('project');
    }

    #[Route('/blocks/update_blocks', name: 'update_blocks', methods: ['POST'])]
    public function updateBlocks(Request $request): JsonResponse
    {
        // Validate the session token
        $session = $request->getSession();
        $token = $session->get('token');
        if (!$token) {
            return $this->json(['message' => 'Token not found', 'token_expired' => true], JsonResponse::HTTP_UNAUTHORIZED);
        }
    
        // Validate the request method
        if (!$request->isMethod('POST')) {
            return $this->json(['message' => 'Method not allowed'], JsonResponse::HTTP_METHOD_NOT_ALLOWED);
        }
    
        // Retrieve form data from request
        $phaseId = $request->request->get('phase_id');
        $blockId = $request->request->get('block_id');
        $totalLots = $request->request->get('total_lots');
    
        // Validate input data
        if (!$phaseId || !$blockId || !$totalLots) {
            return $this->json(['message' => 'Missing required data'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Perform additional validation if necessary
    
        // Construct the data array
        $formData = [
            'phase_id' => intval($phaseId),
            'block_id' => intval($blockId),
            'total_lots' => intval($totalLots),
        ];
        $this->logger->info(json_encode($formData));
        // Make API request
        $response = $this->apiService->apiRequest('POST', 'api/blocks/update', json_encode($formData), $token);
        
        // Return response
        return $this->json(['message' => 'Action completed successfully']);
    }

    #[Route('/subdivision_profile/select', name: 'select_subdivision_profile', methods: ['POST'])]
    public function getSubdivisionProfile(Request $request): JsonResponse
    {
        $token = $request->getSession()->get('token');

        $subCode = $request->request->get('subdivisionCode');
        try {
            $jsonBody = [
                "subdivisionCode" => $subCode,
            ];
            $responseData = $this->apiService->apiRequest('POST', 'api/subdivision_profile/select', json_encode($jsonBody), $token);
    
            $subdivisionProfile = [];
            $subs = $responseData->toArray();
            /* $subdivisionProfile[] = [
                'id' => $subs[0]['subdivisions']['id'], 
                'code' => $subs[0]['subdivisions']['subdivisionCode'], 
                'name' => $subs[0]['subdivisions']['name'], 
                'description' => $subs[0]['subdivisions']['location'],
                'total_phases' => $subs[0]['subdivisions']['total_phases'],
                'total_lots' => $subs[0]['subdivisions']['total_lots'],
                'phases' => $subs[0]['subdivisions']['phases'],
            ]; */
    
            return $this->json(['subProfile' => $subs]);
        } catch (\Throwable $e) {
            return $this->json(['message' => "There's an error in code: " . $e->getMessage()]);
        }
    }

    #[Route('/form/assign-workers-to-projects', name: 'assign_workers_to_projects')]
    public function assignWorkersToProjectsWithTask(Request $request): JsonResponse
    {
        // Validate the session token
        $session = $request->getSession();
        $token = $session->get('token');
        if (!$token) {
            return $this->json(['message' => 'Token not found', 'token_expired' => true], JsonResponse::HTTP_UNAUTHORIZED);
        }
    
        // Retrieve the submitted form data
        $requestData = $request->request->all();
    
        // Initialize the result array
        $result = [
            'projects' => []
        ];
    
        if ($request->isMethod('POST')) {
            // Loop through the projects
            if (isset($requestData['assignments']['projects'])) {
                foreach ($requestData['assignments']['projects'] as $projectId => $projectData) {
                    $projectEntry = [
                        'project_id' => $projectId,
                        'added_employee' => []
                    ];
    
                    // Loop through the workers for this project
                    if (isset($projectData['workers'])) {
                        foreach ($projectData['workers'] as $workerId => $workerData) {
                            $workerEntry = [
                                'emp_id' => $workerId,
                                'added_task' => []
                            ];
    
                            // Loop through the tasks for this worker
                            if (isset($workerData['tasks'])) {
                                foreach ($workerData['tasks'] as $task) {
                                    // Convert assigned_time from hh:mm to minutes
                                    $time = $task['time'] ?? '00:00';
                                    [$hours, $minutes] = explode(':', $time);
                                    $totalMinutes = ((int)$hours * 60) + (int)$minutes;
    
                                    $workerEntry['added_task'][] = [
                                        'task_name' => $task['task'] ?? '',
                                        'date' => $task['date'] ?? '',
                                        'assigned_time' => $totalMinutes // Converted to minutes
                                    ];
                                }
                            }
    
                            // Add the worker entry to the project
                            $projectEntry['added_employee'][] = $workerEntry;
                        }
                    }
    
                    // Add the project entry to the result
                    $result['projects'][] = $projectEntry;
                }
            }
    
            // Send the result to the API
            $response = $this->apiService->apiRequest('POST', 'api/project/assign-workers', json_encode($result), $token);
    
            if (is_array($response) && isset($response['error']) && $response['error'] === true) {
                $errorMessage = 'Error: Status code ' . $response['status'];
                $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
    
                return $this->json([
                    'status' => 'error',
                    'message' => $responseMessage
                ], JsonResponse::HTTP_BAD_REQUEST);
            }
        }
    
        // Return the result as JSON
        return $this->json([
            'status' => 'success',
            'message' => 'Workers assigned to projects successfully!',
            'data' => $result
        ]);
    }

    #[Route('/form/update-selected-project', name: 'update_selected_project_workers')]
    public function updateSelectedProjectWorkers(Request $request): JsonResponse
    {
        // Validate the session token
        $session = $request->getSession();
        $token = $session->get('token');
        if (!$token) {
            return $this->json(['message' => 'Token not found', 'token_expired' => true], JsonResponse::HTTP_UNAUTHORIZED);
        }
    
        // Retrieve the submitted form data
        $requestData = $request->request->all();
    
        // Initialize the result array
        $result = [
            'projects' => []
        ];
    
        if ($request->isMethod('POST')) {
            // Loop through the projects
            if (isset($requestData['assignments']['projects'])) {
                foreach ($requestData['assignments']['projects'] as $projectId => $projectData) {
                    $projectEntry = [
                        'project_id' => $projectId,
                        'added_employee' => []
                    ];
    
                    // Loop through the workers for this project
                    if (isset($projectData['workers'])) {
                        foreach ($projectData['workers'] as $workerId => $workerData) {
                            $workerEntry = [
                                'emp_id' => $workerId,
                                // 'emp_action' -> $workerData['action'] ?? 'update',
                                'added_task' => []
                            ];
    
                            // Loop through the tasks for this worker
                            if (isset($workerData['tasks'])) {
                                foreach ($workerData['tasks'] as $task) {
                                    // Convert assigned_time from hh:mm to minutes
                                    $time = $task['time'] ?? '00:00';
                                    [$hours, $minutes] = explode(':', $time);
                                    $totalMinutes = ((int)$hours * 60) + (int)$minutes;
    
                                    $workerEntry['added_task'][] = [
                                        'task_id' => $task['task_id'] ?? '',
                                        'task_name' => $task['task'] ?? '',
                                        'date' => $task['date'] ?? '',
                                        'assigned_time' => $totalMinutes, // Converted to minutes
                                        'status' => $task['status'] ?? 'new' // Include the status field
                                    ];
                                }
                            }
    
                            // Add the worker entry to the project
                            $projectEntry['added_employee'][] = $workerEntry;
                        }
                    }
    
                    // Add the project entry to the result
                    $result['projects'][] = $projectEntry;
                }
            }

            // Send the result to the API
            $response = $this->apiService->apiRequest('POST', 'api/project/assign-workers-with-status', json_encode($result), $token);
    
            if (is_array($response) && isset($response['error']) && $response['error'] === true) {
                $errorMessage = 'Error: Status code ' . $response['status'];
                $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
    
                return $this->json([
                    'status' => 'error',
                    'message' => $responseMessage
                ], JsonResponse::HTTP_BAD_REQUEST);
            }
            else{
                // Return the result as JSON
                return $this->json([
                    'status' => 'success',
                    'message' => 'Workers assigned to projects successfully!',
                    'data' => $result
                ]);
            }
        }
    
        return $this->json([
            'status' => 'error',
            'message' => 'Invalid request method.'
        ], JsonResponse::HTTP_BAD_REQUEST);
    }
}
