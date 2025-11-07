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

#[Route('/employee-leaves')]
class EmployeeLeavesController extends AbstractController
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
    
    #[Route('/', name: 'app_employee_leaves')]
    public function view_employee_leaves(Request $request): Response
    {
        $employeeLeaves = $this->apiFunctions->getEmployeeLeaves($request)->toArray();
        $leavePolicies = $this->apiFunctions->getLeavePolicy($request)->toArray();
        // dd($leavePolicies);
        return $this->render('leave_policy/employee_leave.html.twig', [
            'emp_leaves'        => $employeeLeaves['emp_with_leave_list'],
            'leave_policies'    => $leavePolicies,
        ]);
    }

    #[Route('/update', name: 'employee_leave_update', methods: ['POST'])]
    public function updateEmployeeLeaves(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        // Collect form data from the request, handling optional fields
        $formData = [
            'selected_leaves'       => $request->request->all('selected_leave_policy'),
            'year'                  => $request->request->get('yearPicker'),
            'emp_id'                => $request->request->get('employee_record_id'),
        ];
        // dd($formData);
        // Send POST request to create the LeavePolicy via ApiService
        $response = $this->apiService->apiRequest('PUT', 'api/employee-leaves/update', json_encode($formData), $token);
        // dd($response);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_employee_leaves', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('app_employee_leaves', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/update-selected-leaves', name: 'update_selected_leave', methods: ['POST'])]
    public function updateSelectedLeave(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $selected_leave_id = $request->request->get('selected_leave_id');
        // Collect form data from the request, handling optional fields
        $formData = [
            'no_of_days'            => $request->request->get('no_of_days'),
            'used_days'             => $request->request->get('used_days'),
            'carried_over_days'     => $request->request->get('carried_over_days'),
            'carry_over_policy'     => $request->request->get('carry_over_policy'),
            'status'                => $request->request->get('status'),
        ];
        // dd($formData);
        // Send POST request to create the LeavePolicy via ApiService
        $response = $this->apiService->apiRequest('PUT', 'api/selected-employee-leaves/update/'.$selected_leave_id, json_encode($formData), $token);
        // dd($response);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_employee_leaves', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('app_employee_leaves', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }
}
