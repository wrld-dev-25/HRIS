<?php

namespace App\Controller;

use App\Service\APIRequest;
use App\Service\PSGCService;
use Psr\Log\LoggerInterface;
use App\Service\APIFunctions;
use App\Service\ExportXLSService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PagibigConfigController extends AbstractController
{
    private $apiService;
    private $apiFunctions;
    private $getProvinces;
    private $getTownCity;
    private $logger;
    private $exportxls;

    public function __construct( APIRequest $apiService, APIFunctions $apiFunctions, PSGCService $getProvinces, PSGCService $getTownCity, LoggerInterface $logger, ExportXLSService $exportxls)
    {
        $this->apiService = $apiService;
        $this->apiFunctions = $apiFunctions;
        $this->getProvinces = $getProvinces;
        $this->getTownCity = $getTownCity;
        $this->logger = $logger;
        $this->exportxls = $exportxls;
    }

    #[Route('/pagibig/config', name: 'app_pagibig_config')]
    public function index(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');

        // Fetch the list of PagibigConfig from the API using ApiService
        $pagibigConfigs = $this->apiFunctions->getPagibigConfig($request)->toArray();
        return $this->render('pagibig_config/pagibig_config.html.twig', [
            'pagibigConfigs' => $pagibigConfigs,
        ]);
    }

    #[Route('/pagibig/config/create', name: 'app_pagibig_config_create', methods: ['POST'])]
    public function create(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        // Get form data from the request
        $formData = [
            'employer_share' => $request->request->get('employer_share'),
            'employee_share' => $request->request->get('employee_share'),
            'monthly_compensation_cap' => $request->request->get('monthly_compensation_cap'),
        ];

        // Send POST request to create the PagibigConfig via ApiService
        $response = $this->apiService->apiRequest('POST', 'api/pagibigconfig/create', json_encode($formData), $token);
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_pagibig_config', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        return $this->redirectToRoute('app_pagibig_config', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/pagibig/config/update', name: 'app_pagibig_config_edit', methods: ['POST'])]
    public function edit(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $id = $request->request->get('pagibig_config_id');
        // Get updated data from the form
        $formData = [
            'employer_share' => $request->request->get('employer_share'),
            'employee_share' => $request->request->get('employee_share'),
            'monthly_compensation_cap' => $request->request->get('monthly_compensation_cap'),
        ];

        // Send PUT request to update the PagibigConfig via ApiService
        $response = $this->apiService->apiRequest('PUT', "api/pagibigconfig/update/{$id}", json_encode($formData), $token);

        // Check for success or failure and redirect accordingly
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_pagibig_config', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        return $this->redirectToRoute('app_pagibig_config', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/pagibig/config/delete', name: 'app_pagibig_config_delete', methods: ['POST'])]
    public function delete(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $id = $request->request->get('pagibig_config_id');
        // Send DELETE request to remove the PagibigConfig via ApiService
        $response = $this->apiService->apiRequest('DELETE', "api/pagibigconfig/delete/{$id}", null, $token);

        // Check for success or failure and redirect accordingly
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_pagibig_config', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        return $this->redirectToRoute('app_pagibig_config', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }
}
