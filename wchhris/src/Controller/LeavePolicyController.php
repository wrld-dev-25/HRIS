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

#[Route('/leave-policy')]
class LeavePolicyController extends AbstractController
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
    
    #[Route('/', name: 'app_leave_policy')]
    public function view_leave_policy(Request $request): Response
    {
        $departments = $this->apiFunctions->getDepartment($request)->toArray();
        $leavePolicies = $this->apiFunctions->getLeavePolicy($request)->toArray();
        // dd($leavePolicies);
        return $this->render('leave_policy/leave_policy.html.twig', [
            'leave_policies'    => $leavePolicies,
            'departments'       => $departments['department'],
        ]);
    }

    // #[Route('/create', name: 'app_leave_policy_create', methods: ['POST'])]
    // public function createLeavePolicy(Request $request): Response
    // {
    //     $session = $request->getSession();
    //     $token = $session->get('token');
    //     // Get form data from the request
    //     $formData = [
    //         'employer_share' => $request->request->get('employer_share'),
    //         'employee_share' => $request->request->get('employee_share'),
    //         'monthly_compensation_cap' => $request->request->get('monthly_compensation_cap'),
    //     ];

    //     // Send POST request to create the PagibigConfig via ApiService
    //     $response = $this->apiService->apiRequest('POST', 'api/pagibigconfig/create', json_encode($formData), $token);
    //     if (is_array($response) && isset($response['error']) && $response['error'] === true) {
    //         $errorMessage = 'Error: Status code ' . $response['status'];
    //         $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

    //         return $this->redirectToRoute('app_pagibig_config', [
    //             'status' => $response['status'],
    //             'error' => $errorMessage,
    //             'message' => $responseMessage,
    //         ]);
    //     }

    //     return $this->redirectToRoute('app_pagibig_config', [
    //         'status' => $response->getStatusCode(),
    //         'error' => '',
    //         'message' => '',
    //     ]);
    // }

    #[Route('/create', name: 'app_leave_policy_create', methods: ['POST'])]
    public function createLeavePolicy(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');

        // Collect form data from the request, handling optional fields
        $formData = [
            'name' => $request->request->get('name'),
            'year' => $request->request->get('year'),
            'description' => $request->request->get('description', null), // Optional
            'days' => $request->request->get('days'),
            'calendar_color' => "",
            'type' => "", // Optional
            'gender' => $request->request->get('gender'),
            'marital' => $request->request->get('marital'),
            'increment_amount' => 0,
            'years_before_increment' => 0,
            'is_carried_over' => $request->request->get('is_carried_over'),
        ];

        // Check and set the department if provided
        if ($request->request->has('department')) {
            $formData['department'] = $request->request->get('department');
        }

        // Send POST request to create the LeavePolicy via ApiService
        $response = $this->apiService->apiRequest('POST', 'api/leave-policy/create', json_encode($formData), $token);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_leave_policy', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('app_leave_policy', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/update', name: 'app_leave_policy_update', methods: ['POST'])]
    public function updateLeavePolicy(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $leave_policy_id = $request->request->get('leave_policy_id');

        if(empty($leave_policy_id)){
            return $this->redirectToRoute('app_leave_policy', [
                'status' => '404',
                'error' => '',
                'message' => 'Leave policy not found.',
            ]);
        }


        // Collect form data from the request, handling optional fields
        $formData = [
            'name' => $request->request->get('name'),
            'year' => $request->request->get('year'),
            'description' => $request->request->get('description', null), // Optional
            'days' => $request->request->get('days'),
            'calendar_color' => "",
            'type' => "", // Optional
            'gender' => $request->request->get('gender'),
            'marital' => $request->request->get('marital'),
            'increment_amount' => 0,
            'years_before_increment' => 0,
            'is_carried_over' => $request->request->get('is_carried_over', false),
        ];

        // Check and set the department if provided
        if ($request->request->has('department')) {
            $formData['department'] = $request->request->get('department');
        }

        // Send POST request to create the LeavePolicy via ApiService
        $response = $this->apiService->apiRequest('PUT', 'api/leave-policy/update/'.$leave_policy_id, json_encode($formData), $token);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_leave_policy', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('app_leave_policy', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }


}
