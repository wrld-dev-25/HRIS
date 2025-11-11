<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\APIRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;
use App\Service\PSGCService;
use App\Service\APIFunctions;

class AdministrationController extends AbstractController
{
    private $apiService;
    private $getProvinces;
    private $getTownCity;
    private $logger;
    private $apiFunctions;
    

    public function __construct( APIRequest $apiService, APIFunctions $apiFunctions, PSGCService $getProvinces, PSGCService $getTownCity, LoggerInterface $logger)
    {
        $this->apiService = $apiService;
        $this->getProvinces = $getProvinces;
        $this->getTownCity = $getTownCity;
        $this->logger = $logger;
        $this->apiFunctions = $apiFunctions;
    }

    #[Route('management/division', name: 'division')]
    public function viewDivision(Request $request): Response
    {
        // Get employees response and normalize to array
        $employeesResponse = $this->apiFunctions->getEmployees($request);
        if (is_array($employeesResponse)) {
            $employeesList = $employeesResponse['employees'] ?? [];
        } elseif (method_exists($employeesResponse, 'getStatusCode') && $employeesResponse->getStatusCode() === 200) {
            $employeesArr = $employeesResponse->toArray();
            $employeesList = $employeesArr['employees'] ?? [];
        } else {
            $employeesList = [];
        }

        // Get divisions response and normalize to array
        $divisionResponse = $this->apiFunctions->getDivision($request);
        if (is_array($divisionResponse)) {
            $divisions = $divisionResponse['division'] ?? [];
        } elseif (method_exists($divisionResponse, 'getStatusCode') && $divisionResponse->getStatusCode() === 200) {
            $divisionsArr = $divisionResponse->toArray();
            $divisions = $divisionsArr['division'] ?? [];
        } else {
            $divisions = [];
        }

        return $this->render('administration/division.html.twig', [
            'controller_name' => 'AdministrationController',
            'divisions' => $divisions,
            'employees_list' => $employeesList,
        ]);
    }

    #[Route('management/department', name: 'department')]
    public function viewDepartment(Request $request): Response
    {
        if(!is_array($this->apiFunctions->getDepartment($request))){
            $departments = $this->apiFunctions->getDepartment($request)->toArray();
            $divisions = $this->apiFunctions->getDivision($request)->toArray();
            return $this->render('administration/department.html.twig', [
                'controller_name' => 'AdministrationController',
                'departments' => $departments['department'],
                'divisions' => $divisions['division'],
            ]);
        } else {
            return $this->render('administration/department.html.twig', [
                'controller_name' => 'AdministrationController',
                'departments' => [],
                'divisions' => [],
            ]);
        }
    }

    #[Route('management/position', name: 'position')]
    public function viewPosition(): Response
    {
        return $this->render('administration/position.html.twig', [
            'controller_name' => 'AdministrationController',
        ]);
    }

    #[Route('/form/submit_division', name: 'submit_division')]
    public function submitSubdivisionForm(Request $request, HttpClientInterface $httpClient)
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            try {
                // Retrieve form data from request
                $formData = [
                    'code' => $request->request->get('divisionCode'),
                    'name' => $request->request->get('divisionName'),
                    'description' => $request->request->get('description'),
                    'director_id' => $request->request->get('divisionHead'),
                ];
                //dd($formData);
                $response = $this->apiService->apiRequest('POST', 'api/division/create', json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('division', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('division',[
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
            } catch (\Throwable $e) {
                $this->addFlash('status', 'failed');
                return $this->redirectToRoute('division', );
            }
        }
        $this->addFlash('status', 'failed');
        return $this->redirectToRoute('division');
    }

    #[Route('/form/update_division', name: 'update_division')]
    public function updateDivisionForm(Request $request, HttpClientInterface $httpClient)
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            try {
                // Retrieve form data from request
                $division_id = $request->request->get('div_id');
                $formData = [
                    'code' => $request->request->get('divisionCode'),
                    'name' => $request->request->get('divisionName'),
                    'description' => $request->request->get('description'),
                    'director_id' => $request->request->get('divisionHead'),
                ];
                //dd($formData);
                $response = $this->apiService->apiRequest('PUT', 'api/division/update/'.$division_id, json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('division', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('division',[
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
            } catch (\Throwable $e) {
                $this->addFlash('status', 'failed');
                return $this->redirectToRoute('division', );
            }
        }
        $this->addFlash('status', 'failed');
        return $this->redirectToRoute('division');
    }

    #[Route('/form/archive_division', name: 'archive_division')]
    public function archiveDivisionForm(Request $request, HttpClientInterface $httpClient)
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            try {
                // Retrieve form data from request
                $division_id = $request->request->get('div_id');
                $response = $this->apiService->apiRequest('PATCH', 'api/division/archive/'.$division_id, [], $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('division', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('division',[
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
            } catch (\Throwable $e) {
                //$this->addFlash('status', 'failed');
                return $this->redirectToRoute('division', );
            }
        }
        $this->addFlash('status', 'failed');
        return $this->redirectToRoute('division');
    }

    #[Route('/form/submit_department', name: 'submit_department')]
    public function submitDepartmentForm(Request $request, HttpClientInterface $httpClient)
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            try {
                // Retrieve form data from request
                $formData = [
                    'code' => $request->request->get('departmentCode'),
                    'name' => $request->request->get('departmentName'),
                    'description' => $request->request->get('description'),
                    'departmentHead' => $request->request->get('departmentHead'),
                    'division_id' => $request->request->get('division'),
                ];
                //dd($formData);
                $response = $this->apiService->apiRequest('POST', 'api/department/create', json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('department', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('department',[
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
            } catch (\Throwable $e) {
                $this->addFlash('status', 'failed');
                return $this->redirectToRoute('department');
            }
        }
        $this->addFlash('status', 'failed');
        return $this->redirectToRoute('department');
    }

    #[Route('/form/update_department', name: 'update_department')]
    public function updateDepartmentForm(Request $request, HttpClientInterface $httpClient)
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            try {
                // Retrieve form data from request
                $dept_id = $request->request->get('department_id');
                $formData = [
                    'code' => $request->request->get('departmentCode'),
                    'name' => $request->request->get('departmentName'),
                    'description' => $request->request->get('description'),
                    'departmentHead' => $request->request->get('departmentHead'),
                    'division_id' => $request->request->get('division'),
                ];
                //dd($formData);
                $response = $this->apiService->apiRequest('PUT', 'api/department/update/'.$dept_id, json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('department', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('department',[
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
            } catch (\Throwable $e) {
                //$this->addFlash('status', 'failed');
                return $this->redirectToRoute('department', );
            }
        }
        $this->addFlash('status', 'failed');
        return $this->redirectToRoute('division');
    }

    #[Route('/form/archive_department', name: 'archive_department')]
    public function archiveDepartmentForm(Request $request, HttpClientInterface $httpClient)
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            try {
                // Retrieve form data from request
                $dept_id = $request->request->get('department_id');
                $response = $this->apiService->apiRequest('PATCH', 'api/department/archive/'.$dept_id, [], $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('department', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('department',[
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
            } catch (\Throwable $e) {
                //$this->addFlash('status', 'failed');
                return $this->redirectToRoute('department', );
            }
        }
        $this->addFlash('status', 'failed');
        return $this->redirectToRoute('division');
    }

    #[Route('administration/owner', name: 'view_owner')]
    public function viewOwner(Request $request): Response
    {
        if($this->apiFunctions->getOwner($request)->getStatusCode() === 200){
            
            $owners = $this->apiFunctions->getOwner($request)->toArray();
            return $this->render('administration/owner.html.twig', [
                'controller_name' => 'AdministrationController',
                'owners' => $owners['owner'],
            ]);
        } else {
            return $this->render('administration/owner.html.twig', [
                'controller_name' => 'AdministrationController',
                'owners' => [],
            ]);
        }
    }

    #[Route('/form/submit_owner', name: 'submit_owner')]
    public function updateCategoryForm(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            
            $formData = [
                'firstname' => $request->request->get('owner_fname'),
                'lastname' => $request->request->get('owner_lname'),
                'lot' => $request->request->get('owner_lot'),
                'block' => $request->request->get('owner_block'),
                'email' => $request->request->get('owner_email'),
                'contact' => $request->request->get('owner_contact'),
            ];
            //dd($formData);
            $response = $this->apiService->apiRequest('POST', 'api/owner/create', json_encode($formData), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('view_owner', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
            return $this->redirectToRoute('view_owner',[
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
        return $this->redirectToRoute('view_owner');
    }

    #[Route('/form/update_owner', name: 'update_owner')]
    public function updateOwner(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            $owner_id = $request->request->get('owner_id');
            $formData = [
                'firstname' => $request->request->get('owner_fname'),
                'lastname' => $request->request->get('owner_lname'),
                'lot' => $request->request->get('owner_lot'),
                'block' => $request->request->get('owner_block'),
                'email' => $request->request->get('owner_email'),
                'contact' => $request->request->get('owner_contact'),
            ];
            //dd($formData);
            $response = $this->apiService->apiRequest('PUT', 'api/owner/update/'.$owner_id, json_encode($formData), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('view_owner', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
            return $this->redirectToRoute('view_owner',[
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
        return $this->redirectToRoute('view_owner');
    }

    #[Route('/form/delete_owner', name: 'delete_owner')]
    public function deleteOwner(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            $owner_id = $request->request->get('owner_id');
            $formData = [];
            //dd($formData);
            $response = $this->apiService->apiRequest('DELETE', 'api/owner/archive/'.$owner_id, json_encode($formData), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('view_owner', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
            return $this->redirectToRoute('view_owner',[
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
        return $this->redirectToRoute('view_owner');
    }

    #[Route('administration/models', name: 'view_models')]
    public function viewModels(Request $request): Response
    {
        if($this->apiFunctions->getModel($request)->getStatusCode() === 200){
            
            $models         = $this->apiFunctions->getModel($request)->toArray();
            $model_types    = $this->apiFunctions->getModelTypes($request)->toArray();
            return $this->render('administration/models.html.twig', [
                'controller_name' => 'AdministrationController',
                'models' => $models['models'],
                'model_types' => $model_types['model_types'],
            ]);
        } else {
            return $this->render('administration/models.html.twig', [
                'controller_name' => 'AdministrationController',
                'models' => [],
            ]);
        }
    }

    #[Route('/form/submit_model', name: 'submit_model')]
    public function submitModel(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            
            $formData = [
                'name' => $request->request->get('model_name'),
                'model_type' => $request->request->get('model_type_id'),
            ];
            //dd($formData);
            $response = $this->apiService->apiRequest('POST', 'api/model/create', json_encode($formData), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('view_models', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
            return $this->redirectToRoute('view_models',[
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
        return $this->redirectToRoute('view_models');
    }

    #[Route('/form/update_model', name: 'update_model')]
    public function updateModel(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            $model_id = $request->request->get('model_id');
            $formData = [
                'name' => $request->request->get('model_name'),
                'model_type' => $request->request->get('model_type_id'),
            ];
            //dd($formData);
            $response = $this->apiService->apiRequest('POST', 'api/model/update/'.$model_id, json_encode($formData), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('view_models', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
            return $this->redirectToRoute('view_models',[
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
        return $this->redirectToRoute('view_models');
    }

    #[Route('/form/archive_model', name: 'archive_model')]
    public function archiveModel(Request $request, HttpClientInterface $httpClient): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            $model_id = $request->request->get('model_id');
            $formData = [
                'name' => $request->request->get('model_name'),
                'model_type' => $request->request->get('model_type_id'),
            ];
            //dd($formData);
            $response = $this->apiService->apiRequest('POST', 'api/model/delete/'.$model_id, json_encode($formData), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('view_models', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
            return $this->redirectToRoute('view_models',[
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
        return $this->redirectToRoute('view_models');
    }

    #[Route('administration/model-types', name: 'adm_model_types')]
    public function viewModelTypes(Request $request): Response
    {
        $model_types = $this->apiFunctions->getModelTypes($request)->toArray();
        return $this->render('administration/model_types.html.twig', [
            'model_types' => $model_types['model_types'],
        ]);
    }

    #[Route('/form/submit_model_types', name: 'submit_model_types')]
    public function createModelTypes(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            
            $formData = [
                'name' => $request->request->get('model_type_name'),
                'code' => $request->request->get('model_type_code'),
                'add_option' => $request->request->get('is_assignable') === 'on',
            ];
            //dd($formData);
            $response = $this->apiService->apiRequest('POST', 'api/model-types', json_encode($formData), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('adm_model_types', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
        }
        return $this->redirectToRoute('adm_model_types',[
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/form/update_model_types', name: 'update_model_types')]
    public function updateModelTypes(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $model_id = $request->request->get('modal_type_id');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            
            $formData = [
                'name' => $request->request->get('model_type_name'),
                'code' => $request->request->get('model_type_code'),
                'add_option' => $request->request->get('add_option') === 'on',
            ];
            //dd($formData);
            $response = $this->apiService->apiRequest('PUT', 'api/model-types/'.$model_id, json_encode($formData), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('adm_model_types', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
        }
        return $this->redirectToRoute('adm_model_types',[
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/form/archive_model_types', name: 'archive_model_types')]
    public function archiveModelTypes(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $model_id = $request->request->get('modal_type_id');
        //dd($model_id);
        if ($request->isMethod('POST')) {
            //dd($formData);
            $response = $this->apiService->apiRequest('PATCH', 'api/model-types/archive/'.$model_id, [], $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('adm_model_types', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
        }
        return $this->redirectToRoute('adm_model_types',[
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('administration/user-settings', name: 'adm_user_settings')]
    public function viewUserSettings(Request $request): Response
    {
        // $session = $request->getSession();
        // if(!$session->has('token')){
        //     $session->invalidate();
        //     return $this->redirectToRoute('login');
        // }

        if($this->apiFunctions->getDivisionList($request)->getStatusCode() === 200){ // Get Divisions list
            $response = $this->apiFunctions->getDivisionList($request)->toArray();
            $divisions = $response['division'];
        } else {
            $divisions = [];
        }

        $page = $request->query->getInt('p', 1);
        $limit = $request->query->getInt('l', 50);

        $employeeAPI    = $this->apiFunctions->getEmployeesPaginated($request, $page, $limit);
        $userTypes      = $this->apiFunctions->getUserTypes($request)->toArray();
        $shiftList      = $this->apiFunctions->getShifts($request)->toArray();
        
        if($employeeAPI->getStatusCode() === 200){
            $response = $employeeAPI->toArray();
            $employees = $response['employees'];
            $totalEmployees = $response['totalEmployees'];
        } else {
            $employees = [];
            $totalEmployees = [];
        }
        
        $provinces = $this->getProvinces->getProvinces();
        $getTownCity = $this->getTownCity->getTownCity();

        $javascriptSnippet = "<script></script>";
        $statusCode = $request->query->get('status');
        $content = json_decode($request->query->get('content'));
        if($statusCode == 200 || $statusCode == 201){
            $javascriptSnippet = "<script>
                showToast('Employee Updated Successfully','bg-green-500')
            </script>";
        }
        else if($statusCode >= 300) {
            $javascriptSnippet = "<script>
                showToast('Employee Not Updated. ".$content->message.".', 'bg-red-500');
            </script>";
        }
        
        return $this->render('administration/user_settings.html.twig', [
            'employees' => $employees,
            'currentPage' => $page,
            'limit' => $totalEmployees ? $limit : 0,
            'totalPages' =>  $totalEmployees ? ceil($totalEmployees / $limit) : 0,
            'totalEmployees' => $totalEmployees,
            'provinces' => $provinces,
            'townCities' => $getTownCity,
            'divisions' => $divisions,
            'javascriptSnippet' => $javascriptSnippet,
            'user_types' => $userTypes['user_types'],
            'shift_list' => $shiftList['shifts']
        ]);
    }

    #[Route('/form/update_emp_settings', name: 'update_emp_setting')]
    public function updateEmpSettings(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            $user_id = $request->request->get('userId');
            $employeeId = $request->request->get('employeeId');
            //dd($request->request->get('user_type_id'));
            $formData = [
                'username'      => '',
                'email'         => '',
                'contact_no'    => '',
                'archived'      => '',
                'is_active'     => $request->request->get('is_active') === 'on',
                'password'      => $request->request->get('emp_password'),
                'user_type'     => $request->request->get('user_type_id'),
                //"is_straight_time" => $request->request->get("is_straight_time") === 'on',
                "is_assignable_proj" => $request->request->get("is_assignable") === 'on',
                'emp_shift'      => $request->request->get('shift_id'),
            ];
            //dd($formData);
            $response = $this->apiService->apiRequest('POST', 'api/user/update/'.$user_id, json_encode($formData), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('adm_user_settings', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
        }
        
        return $this->redirectToRoute('adm_user_settings',[
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('administration/shifts', name: 'adm_shifts')]
    public function viewShifts(Request $request): Response
    {
        $shiftList = $this->apiFunctions->getShifts($request)->toArray();
        return $this->render('administration/empShifts.html.twig', [
            'shiftList' => $shiftList['shifts'],
        ]);
    }

    #[Route('/form/submit_shifts', name: 'submit_shifts')]
    public function createShifts(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            $formData = [
                'name' => $request->request->get('shift_name'),
                'start_time' => $request->request->get('shift_start'),
                'end_time' => $request->request->get('shift_end'),
                'lunch_duration' => $request->request->get('shift_lunch_duration'),
                'week_sched' => $request->request->all('week_sched'),
            ];

            $response = $this->apiService->apiRequest('POST', 'api/create/shifts', json_encode($formData), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('adm_shifts', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
            return $this->redirectToRoute('adm_shifts',[
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
        return $this->redirectToRoute('adm_shifts');
    }

    #[Route('/form/update_shifts', name: 'update_shifts')]
    public function updateShifts(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $shift_id = $request->request->get('shift_id');
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            
            $formData = [
                'name' => $request->request->get('shift_name'),
                'start_time' => $request->request->get('shift_start'),
                'end_time' => $request->request->get('shift_end'),
                'lunch_duration' => $request->request->get('shift_lunch_duration'),
                'week_sched' => $request->request->all('week_sched')
            ];
            //dd(json_encode($formData));
            $response = $this->apiService->apiRequest('PUT', 'api/shifts/'.$shift_id, json_encode($formData), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('adm_shifts', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
        }
        return $this->redirectToRoute('adm_shifts',[
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/form/archive_shifts', name: 'archive_shifts')]
    public function archiveShifts(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $shift_id = $request->request->get('shift_id');
        //dd($model_id);
        if ($request->isMethod('POST')) {
            //dd($formData);
            $response = $this->apiService->apiRequest('PATCH', 'api/shifts/archive/'.$shift_id, [], $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('adm_shifts', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
        }
        return $this->redirectToRoute('adm_shifts',[
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    // API Request function
    private function getDivision($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/division', $jsonBody, $token);
        return $response;
    }

    private function getDepartment($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/department', $jsonBody, $token);
        return $response;
    }

    private function getOwner($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/owner', $jsonBody, $token);
        return $response;
    }

    private function getModel($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/model', $jsonBody, $token);
        return $response;
    }

    private function getModelTypes($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/model-types', $jsonBody, $token);
        return $response;
    }

    private function getEmployees($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/employee201', $jsonBody, $token);
        return $response;
    }
    private function getEmployeesPaginated($request, $page, $limit){
        $jsonBody = [
            'page' => $page,
            'limit' => $limit,
        ];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('POST', 'api/emp_paginated', json_encode($jsonBody), $token);
        return $response;
    }

    private function getDivisionList($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/division/list', $jsonBody, $token);
        return $response;
    }

    private function getWorker($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/worker', $jsonBody, $token);
        return $response;
    }

    private function getSubdivision($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/subdivision', $jsonBody, $token);
        return $response;
    }

    private function getPhase($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/phase', $jsonBody, $token);
        return $response;
    }

    private function getProject($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/project', $jsonBody, $token);
        return $response;
    }

    private function getEmpProjects($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/employee-projects', $jsonBody, $token);
        return $response;
    }

    private function getEmpProjectsId($request, $id){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/employee-projects/'.$id, $jsonBody, $token);
        return $response;
    }

    private function getUserTypes($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/user-types', $jsonBody, $token);
        return $response;
    }

    private function getShifts($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/shifts', $jsonBody, $token);
        return $response;
    }    
}
