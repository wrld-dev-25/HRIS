<?php

namespace App\Controller;

use App\Service\APIRequest;
use App\Service\APIFunctions;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PhilHealthConfigController extends AbstractController
{
    private $apiService;
    private $apiFunctions;
    private $logger;

    public function __construct(APIRequest $apiService, APIFunctions $apiFunctions, LoggerInterface $logger)
    {
        $this->apiService = $apiService;
        $this->apiFunctions = $apiFunctions;
        $this->logger = $logger;
    }

    #[Route('/philhealth/config', name: 'app_phil_health_config')]
    public function viewPhilHealthConfig(Request $request)
    {
        // Fetch the list of PhilHealthConfig from the API using ApiService
        $philhealthConfigs = $this->apiFunctions->getPhilhealthConfig($request)->toArray();
        return $this->render('phil_health_config/philhealth_config.html.twig', [
            'philhealthConfigs' => $philhealthConfigs,
        ]);
    }

    #[Route('/create-philhealth/config', name: 'app_phil_create_health_config')]
    public function createPhilHealthConfig(Request $request)
    {
        $session = $request->getSession();
        $token = $session->get('token');

        if ($request->isMethod('POST')) {
            // Collect form data
            $formData = [
                'base_rate' => $request->request->get('base_rate'),
                'employee_share' => $request->request->get('employee_share'),
                'employer_share' => $request->request->get('employer_share'),
                'minimum_cap' => $request->request->get('minimum_cap'),
                'maximum_cap' => $request->request->get('maximum_cap'),
            ];

            // Send POST request to the API
            $response = $this->apiService->apiRequest('POST', 'api/philhealthconfig/create', json_encode($formData), $token);
            if (is_array($response) && isset($response['error']) && $response['error'] === true) {
                $errorMessage = 'Error: Status code ' . $response['status'];
                $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

                return $this->redirectToRoute('app_phil_health_config', [
                    'status' => $response['status'],
                    'error' => $errorMessage,
                    'message' => $responseMessage,
                ]);
            }

            return $this->redirectToRoute('app_phil_health_config', [
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }

        return $this->render('phil_health_config/create.html.twig');
    }

    #[Route('/update-philhealth/config', name: 'app_phil_update_health_config')]
    public function updatePhilHealthConfig(Request $request)
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $id = $request->request->get('philhealth_config_id');

        if ($request->isMethod('POST')) {
            // Collect form data
            $formData = [
                'base_rate' => $request->request->get('base_rate'),
                'employee_share' => $request->request->get('employee_share'),
                'employer_share' => $request->request->get('employer_share'),
                'minimum_cap' => $request->request->get('minimum_cap'),
                'maximum_cap' => $request->request->get('maximum_cap'),
            ];

            // Send PUT request to the API
            $response = $this->apiService->apiRequest('PUT', "api/philhealthconfig/update/{$id}", json_encode($formData), $token);

            if (is_array($response) && isset($response['error']) && $response['error'] === true) {
                $errorMessage = 'Error: Status code ' . $response['status'];
                $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

                return $this->redirectToRoute('app_phil_health_config', [
                    'status' => $response['status'],
                    'error' => $errorMessage,
                    'message' => $responseMessage,
                ]);
            }

            return $this->redirectToRoute('app_phil_health_config', [
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
    }

    #[Route('/delete-philhealth/config', name: 'app_phil_delete_health_config')]
    public function deletePhilHealthConfig(Request $request)
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $id = $request->request->get('philhealth_config_id');
        
        // Send DELETE request to the API
        $response = $this->apiService->apiRequest('DELETE', "api/philhealthconfig/delete/{$id}", null, $token);

        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_phil_health_config', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        return $this->redirectToRoute('app_phil_health_config', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }
}
