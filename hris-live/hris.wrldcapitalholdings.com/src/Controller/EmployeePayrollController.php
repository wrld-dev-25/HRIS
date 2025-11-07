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

class EmployeePayrollController extends AbstractController
{
    private $apiService;
    private $apiFunctions;
    private $logger;
    private $getProvinces;
    private $getTownCity;
    private $exportXLSService;

    public function __construct(APIRequest $apiService, APIFunctions $apiFunctions, LoggerInterface $logger, PSGCService $getProvinces, PSGCService $getTownCity, ExportXLSService $exportXLSService)
    {
        $this->apiService = $apiService;
        $this->apiFunctions = $apiFunctions;
        $this->logger = $logger;
        $this->getProvinces = $getProvinces;
        $this->getTownCity = $getTownCity;
        $this->exportXLSService = $exportXLSService;
    }

    #[Route('/employee-payroll', name: 'view_employee_payroll')]
    public function viewEmployeePayroll(Request $request)
    {
        $currentYear = date('Y');
        $selectedYear = $request->request->get('yearPicker', $currentYear);
        //dd($selectedYear);
        if(empty($selectedYear)){
            $selectedYear = $currentYear;
        }

        $empPayrolls = $this->apiFunctions->getEmployeeListPayrollProfiles($request)->toArray();
        // Get the current year
        
        $payrollGroups = $this->apiFunctions->getPayrollGroups($request, $selectedYear)->toArray();
        return $this->render('payroll/apps-hr-payroll-employee.html.twig', [
            'emp_list_payroll'  => $empPayrolls['emp_list'] ?? [],
            'salary_totals'     => $empPayrolls['salary_totals'] ?? [],
            'payroll_groups'    => $payrollGroups['data'] ?? [],
            'selectedYear'      => $selectedYear,
        ]);
    }

    #[Route('/generate-employee-payslip', name: 'generate_payslip')]
    public function viewEmployeePayrollPaySlip(Request $request)
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $payroll_id = $request->request->get('payroll_id');
        // $empPayrolls = $this->apiFunctions->getEmployeeListPayrollProfiles($request)->toArray();
        // Split the date range into start and end dates
        // $date_range = $request->request->get('payroll_date_range');
        // list($start_date, $end_date) = explode(' to ', $date_range);
        // $start_date = trim($start_date);
        // $end_date = trim($end_date);

        $formData = [
            "payroll_id"     => $payroll_id,
        ];

        // Determine whether to use POST (create) or PUT (update)
        $method = 'POST';
        $apiUrl = 'api/payslip';

        // Send request to the API
        $response = $this->apiService->apiRequest($method, $apiUrl, json_encode($formData), $token);
        // dd($response);
        // Check for errors in the API response
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->render('payroll/apps-hr-employee-payslip.html.twig', [
                'payroll' => [],
            ]);
        }
        
        return $this->render('payroll/apps-hr-employee-payslip.html.twig', [
            'payroll' => $response->toArray() ?? [],
        ]);
    }

    
    #[Route('/generate-payroll', name: 'generate_payroll')]
    public function generatePayroll(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $employee_code = $request->request->get('employee_code');
        $employee_id = $request->request->get('employee_id');
        $date_range = $request->request->get('payroll_date_range');
        
        // Split the date range into start and end dates
        list($start_date, $end_date) = explode(' to ', $date_range);
        $start_date = trim($start_date);
        $end_date = trim($end_date);
        // dd($start_date, $start_date);
        if ($request->isMethod('POST')) {
            // Collect form data
            $formData = [
                "employee_id"                       => $employee_id,
                "date_start"                        => $start_date,
                "date_end"                          => $end_date,
                "salary_adjustment"                 => $request->request->get('salary_adjustment') ? true : false,
                "sal_adj_regular_ndot_hours"        => $request->request->get('sal_adj_regular_ndot_hours'),
                "sal_adj_regular_ndot_pay"          => $request->request->get('sal_adj_regular_ndot_pay'),
                "sal_adj_ot_meal_subsidy_days"      => $request->request->get('sal_adj_ot_meal_subsidy_days'),
                "sal_adj_ot_meal_subsidy_amount"    => $request->request->get('sal_adj_ot_meal_subsidy_amount'),
                "sal_adj_4hrs_more_weekend_holiday" => $request->request->get('sal_adj_4hrs_more_weekend_holiday'),
                "sal_adj_amount"                    => $request->request->get('sal_adj_amount'),
                "sal_adj_temp_allowance"            => $request->request->get('sal_adj_temp_allowance'),
                "sal_adj_wellness"                  => $request->request->get('sal_adj_wellness'),
                "sal_adj_total_nontax_salary"       => $request->request->get('sal_adj_total_nontax_salary'),
                "sal_adj_total_tax_salary"          => $request->request->get('sal_adj_total_tax_salary'),
                "sal_adj_total_salary"              => $request->request->get('sal_adj_total_salary'),
            ];

            // Determine whether to use POST (create) or PUT (update)
            $method = 'POST';
            $apiUrl = 'api/generate-payroll';

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
        
        return $this->redirectToRoute('employee_profile', [
            'employee_code' => $employee_code,
            'status' => '',
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/update-salary-adjustment', name: 'update_salary_adjustment')]
    public function updateSalaryAdjustment(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $employee_code = $request->request->get('employee_code');
        $employee_id = $request->request->get('employee_id');
        $payroll_id = $request->request->get('payroll_id');
        $date_range = $request->request->get('payroll_date_range');
        
        // Split the date range into start and end dates
        // list($start_date, $end_date) = explode(' to ', $date_range);
        // $start_date = trim($start_date);
        // $end_date = trim($end_date);

        if ($request->isMethod('POST')) {
            // Collect form data
            $formData = [
                "employee_id"                       => $employee_id,
                "payroll_id"                        => $payroll_id,
                // "date_start"                        => $start_date,
                // "date_end"                          => $end_date,
                "salary_adjustment"                 =>  true,
                "sal_adj_regular_ndot_hours"        => $request->request->get('sal_adj_regular_ndot_hours'),
                "sal_adj_regular_ndot_pay"          => $request->request->get('sal_adj_regular_ndot_pay'),
                "sal_adj_ot_meal_subsidy_days"      => $request->request->get('sal_adj_ot_meal_subsidy_days'),
                "sal_adj_ot_meal_subsidy_amount"    => $request->request->get('sal_adj_ot_meal_subsidy_amount'),
                "sal_adj_4hrs_more_weekend_holiday" => $request->request->get('sal_adj_4hrs_more_weekend_holiday'),
                "sal_adj_amount"                    => $request->request->get('sal_adj_amount'),
                "sal_adj_temp_allowance"            => $request->request->get('sal_adj_temp_allowance'),
                "sal_adj_wellness"                  => $request->request->get('sal_adj_wellness'),
                "sal_adj_total_nontax_salary"       => $request->request->get('sal_adj_total_nontax_salary'),
                "sal_adj_total_tax_salary"          => $request->request->get('sal_adj_total_tax_salary'),
                "sal_adj_total_salary"              => $request->request->get('sal_adj_total_salary'),
            ];

            // Determine whether to use POST (create) or PUT (update)
            $method = 'POST';
            $apiUrl = 'api/update-payroll-deduction';

            // Send request to the API
            $response = $this->apiService->apiRequest($method, $apiUrl, json_encode($formData), $token);
            // dd($response);
            // Check for errors in the API response
            //dd(json_encode($formData));
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
        
        return $this->redirectToRoute('employee_profile', [
            'employee_code' => $employee_code,
            'status' => '',
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/update-salary-adjustment-v2', name: 'update_salary_adjustment_v2')]
    public function updateSalaryAdjustmentV2(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $employee_code = $request->request->get('employee_code');
        $employee_id = $request->request->get('employee_id');
        $payroll_id = $request->request->get('payroll_id');
        $date_range = $request->request->get('payroll_date_range');
        
        // Split the date range into start and end dates
        // list($start_date, $end_date) = explode(' to ', $date_range);
        // $start_date = trim($start_date);
        // $end_date = trim($end_date);

        if ($request->isMethod('POST')) {
            // Collect form data
            $formData = [
                "employee_id"                       => $employee_id,
                "payroll_id"                        => $payroll_id,
                // "date_start"                        => $start_date,
                // "date_end"                          => $end_date,
                "salary_adjustment"                 =>  true,
                "sal_adj_regular_ndot_hours"        => $request->request->get('sal_adj_regular_ndot_hours'),
                "sal_adj_regular_ndot_pay"          => $request->request->get('sal_adj_regular_ndot_pay'),
                "sal_adj_ot_meal_subsidy_days"      => $request->request->get('sal_adj_ot_meal_subsidy_days'),
                "sal_adj_ot_meal_subsidy_amount"    => $request->request->get('sal_adj_ot_meal_subsidy_amount'),
                "sal_adj_4hrs_more_weekend_holiday" => $request->request->get('sal_adj_4hrs_more_weekend_holiday'),
                "sal_adj_amount"                    => $request->request->get('sal_adj_amount'),
                "sal_adj_temp_allowance"            => $request->request->get('sal_adj_temp_allowance'),
                "sal_adj_wellness"                  => $request->request->get('sal_adj_wellness'),
                "sal_adj_total_nontax_salary"       => $request->request->get('sal_adj_total_nontax_salary'),
                "sal_adj_total_tax_salary"          => $request->request->get('sal_adj_total_tax_salary'),
                "sal_adj_total_salary"              => $request->request->get('sal_adj_total_salary'),
            ];

            // Determine whether to use POST (create) or PUT (update)
            $method = 'POST';
            $apiUrl = 'api/update-payroll-deduction';

            // Send request to the API
            $response = $this->apiService->apiRequest($method, $apiUrl, json_encode($formData), $token);
            // dd($response);
            // Check for errors in the API response
            //dd(json_encode($formData));
            if (is_array($response) && isset($response['error']) && $response['error'] === true) {
                $errorMessage = 'Error: Status code ' . $response['status'];
                $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

                return $this->redirectToRoute('view_employee_payroll', [
                    'status' => $response['status'],
                    'error' => $errorMessage,
                    'message' => $responseMessage,
                ]);
            }

            return $this->redirectToRoute('view_employee_payroll', [
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
        
        return $this->redirectToRoute('view_employee_payroll', [
            'status' => '',
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/generate-all-payroll', name: 'generate_all_employees_payroll')]
    public function generateAllPayroll(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        // $employee_code = $request->request->get('employee_code');
        // $employee_id = $request->request->get('employee_id');
        $date_range = $request->request->get('payroll_date_range', "2024-10-01 to 2024-10-31");
        // Split the date range into start and end dates
        
        if(empty($date_range)){
            $start_date   = '2024-10-01';
            $end_date     = '2024-10-31';
        }
        else{
            list($start_date, $end_date) = explode(' to ', $date_range);
        }
        $start_date = trim($start_date);
        $end_date = trim($end_date);

        if ($request->isMethod('POST')) {
            // Collect form data
            $formData = [
                // "employee_id"                       => $employee_id,
                "date_start"                        => $start_date,
                "date_end"                          => $end_date,
                // "salary_adjustment"                 => $request->request->get('salary_adjustment') ? true : false,
                // "sal_adj_regular_ndot_hours"        => $request->request->get('sal_adj_regular_ndot_hours'),
                // "sal_adj_regular_ndot_pay"          => $request->request->get('sal_adj_regular_ndot_pay'),
                // "sal_adj_ot_meal_subsidy_days"      => $request->request->get('sal_adj_ot_meal_subsidy_days'),
                // "sal_adj_ot_meal_subsidy_amount"    => $request->request->get('sal_adj_ot_meal_subsidy_amount'),
                // "sal_adj_4hrs_more_weekend_holiday" => $request->request->get('sal_adj_4hrs_more_weekend_holiday'),
                // "sal_adj_amount"                    => $request->request->get('sal_adj_amount'),
                // "sal_adj_temp_allowance"            => $request->request->get('sal_adj_temp_allowance'),
                // "sal_adj_wellness"                  => $request->request->get('sal_adj_wellness'),
                // "sal_adj_total_nontax_salary"       => $request->request->get('sal_adj_total_nontax_salary'),
                // "sal_adj_total_tax_salary"          => $request->request->get('sal_adj_total_tax_salary'),
                // "sal_adj_total_salary"              => $request->request->get('sal_adj_total_salary'),
            ];

            // Determine whether to use POST (create) or PUT (update)
            $method = 'POST';
            $apiUrl = 'api/generate-payroll-for-all-employees';

            // Send request to the API
            $response = $this->apiService->apiRequest($method, $apiUrl, json_encode($formData), $token);
            //dd($response);
            // Check for errors in the API response
            if (is_array($response) && isset($response['error']) && $response['error'] === true) {
                $errorMessage = 'Error: Status code ' . $response['status'];
                $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

                return $this->redirectToRoute('view_employee_payroll', [
                    // 'employee_code' => $employee_code,
                    'status' => $response['status'],
                    'error' => $errorMessage,
                    'message' => $responseMessage,
                ]);
            }

            return $this->redirectToRoute('view_employee_payroll', [
                // 'employee_code' => $employee_code,
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
        
        return $this->redirectToRoute('view_employee_payroll', [
            // 'employee_code' => $employee_code,
            'status' => '',
            'error' => '',
            'message' => '',
        ]);
    }


    // #[Route('/generate-payroll-report', name: 'generate_payroll_report')]
    // public function exportManpowerReport(Request $request): Response
    // {
    //     // Retrieve parameters from the request
    //     // $dateFrom = $request->request->get('date_from');
    //     // $dateTo = $request->request->get('date_to');
    //     // $project = $request->request->get('project');
    //     $dateFrom = '2024-10-01'; // Replace with your actual variable for Date From
    //     $dateTo = '2024-10-31';   // Replace with your actual variable for Date To
    //     $project = 'Project Name'; // Replace with your actual variable for Project Name

    //     // Validate input
    //     if (!$dateFrom || !$dateTo || !$project) {
    //         return $this->json(['error' => 'Invalid parameters'], Response::HTTP_BAD_REQUEST);
    //     }

    //     // Call the report generation function from the service
    //     $reportMessage = $this->exportXLSService->generateManpowerMonitoringReport($dateFrom, $dateTo, $project);

    //     // Return response
    //     return $this->json(['message' => $reportMessage], Response::HTTP_OK);
    // }
}
