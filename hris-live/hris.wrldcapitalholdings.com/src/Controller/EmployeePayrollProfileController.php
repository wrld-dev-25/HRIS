<?php

namespace App\Controller;

use App\Service\APIRequest;
use App\Service\PSGCService;
use Psr\Log\LoggerInterface;
use App\Service\APIFunctions;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EmployeePayrollProfileController extends AbstractController
{
    private $apiService;
    private $apiFunctions;
    private $logger;
    private $getProvinces;
    private $getTownCity;

    public function __construct(APIRequest $apiService, APIFunctions $apiFunctions, LoggerInterface $logger, PSGCService $getProvinces, PSGCService $getTownCity,)
    {
        $this->apiService = $apiService;
        $this->apiFunctions = $apiFunctions;
        $this->logger = $logger;
        $this->getProvinces = $getProvinces;
        $this->getTownCity = $getTownCity;
    }

    // #[Route('/employee/payroll/profile', name: 'app_employee_payroll_profile')]
    // public function index(Request $request): Response
    // {
    //     // Fetch employee payroll profiles from the API
    //     $payrollProfiles = $this->apiFunctions->getEmployeePayrollProfiles($request)->toArray();
    //     if($this->apiFunctions->getDivisionList($request)->getStatusCode() === 200){ // Get Divisions list
    //         $response = $this->apiFunctions->getDivisionList($request)->toArray();
    //         $divisions = $response['division'];
    //     } else {
    //         $divisions = [];
    //     }

    //     $page = $request->query->getInt('p', 1);
    //     $limit = $request->query->getInt('l', 50);

    //     $employeeAPI = $this->apiFunctions->getEmployeesPaginated($request, $page, $limit);

    //     if($employeeAPI->getStatusCode() === 200){
    //         $response = $employeeAPI->toArray();
    //         $employees = $response['employees'];
    //         $totalEmployees = $response['totalEmployees'];
    //     } else {
    //         $employees = [];
    //         $totalEmployees = [];
    //     }
        
    //     $provinces = $this->getProvinces->getProvinces();
    //     $getTownCity = $this->getTownCity->getTownCity();
        
    //     return $this->render('employee_payroll_profile/employees-payroll-profile.html.twig', [
    //         'payrollProfiles' => $payrollProfiles,
    //         'employees' => $employees ? $employees : [],
    //         'currentPage' => $page,
    //         'limit' => $totalEmployees ? $limit : 0,
    //         'totalPages' =>  $totalEmployees ? ceil($totalEmployees / $limit) : 0,
    //         'totalEmployees' => $totalEmployees,
    //         'provinces' => $provinces,
    //         'townCities' => $getTownCity,
    //         'divisions' => $divisions,
    //     ]);
    // }

    #[Route('/employee/payroll/profile/save', name: 'app_employee_payroll_profile_save')]
    public function saveEmployeePayrollProfile(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $employee_code = $request->request->get('employee_code');
        if ($request->isMethod('POST')) {
            // Collect form data
            $formData = [
                'monthly_salary' => $request->request->get('monthly_salary'),
                'allowance' => $request->request->get('allowance'),
                'overtime_rate' => $request->request->get('overtime_rate'),
                'late_rate' => $request->request->get('late_rate'),
                'employee_record_id' => $request->request->get('employee_record_id'), // Include the employee record ID
                // 'sss_contribution_id' => $request->request->get('sss_contribution_id'), // Example additional fields
                // 'tax_contribution_id' => $request->request->get('tax_contribution_id'),
                // 'pagibig_contribution_id' => $request->request->get('pagibig_contribution_id'),
                // 'philhealth_contribution_id' => $request->request->get('philhealth_contribution_id'),
            ];
    
            // Determine whether to use POST (create) or PUT (update)
            $method = isset($formData['employee_record_id']) ? 'PUT' : 'POST';
            $apiUrl = 'api/employee-payroll-profile/save';
    
            // Send request to the API
            $response = $this->apiService->apiRequest($method, $apiUrl, json_encode($formData), $token);
            // Check for errors in the API response
            if (is_array($response) && isset($response['error']) && $response['error'] === true) {
                $errorMessage = 'Error: Status code ' . $response['status'];
                $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
    
                return $this->redirectToRoute('employee_profile', [
                    'employee_code' => $employee_code,
                    'status' => $response['status'],
                    'error' => $errorMessage,
                    'message' => $responseMessage,
                ]);
            }
    
            return $this->redirectToRoute('employee_profile', [
                'employee_code' => $employee_code,
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
        return $this->render('employee_payroll_profile/save.html.twig');
    }
    
    #[Route('/employee/payroll/profile/update/{id}', name: 'app_employee_payroll_profile_update')]
    public function updateEmployeePayrollProfile(Request $request, int $id): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');

        if ($request->isMethod('POST')) {
            // Collect form data
            $formData = [
                'monthly_salary' => $request->request->get('monthly_salary'),
                'allowance' => $request->request->get('allowance'),
                'overtime_rate' => $request->request->get('overtime_rate'),
                'late_rate' => $request->request->get('late_rate'),
            ];

            // Send PUT request to the API
            $response = $this->apiService->apiRequest('PUT', "api/employee-payroll-profile/update/$id", json_encode($formData), $token);

            if (is_array($response) && isset($response['error']) && $response['error'] === true) {
                $errorMessage = 'Error: Status code ' . $response['status'];
                $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

                return $this->redirectToRoute('app_employee_payroll_profile', [
                    'status' => $response['status'],
                    'error' => $errorMessage,
                    'message' => $responseMessage,
                ]);
            }

            return $this->redirectToRoute('app_employee_payroll_profile', [
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
    }

    #[Route('/employee/payroll/profile/delete/{id}', name: 'app_employee_payroll_profile_delete')]
    public function deleteEmployeePayrollProfile(Request $request, int $id): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');

        // Send DELETE request to the API
        $response = $this->apiService->apiRequest('DELETE', "api/employee-payroll-profile/delete/$id", null, $token);

        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_employee_payroll_profile', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        return $this->redirectToRoute('app_employee_payroll_profile', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }
}
