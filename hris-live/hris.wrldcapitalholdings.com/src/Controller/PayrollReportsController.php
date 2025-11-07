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

class PayrollReportsController extends AbstractController
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

    #[Route('/payroll-reports', name: 'app_payroll_reports')]
    public function viewPhilHealthConfig(Request $request)
    {
        // Fetch the list of PhilHealthConfig from the API using ApiService
        $companyList = $this->apiFunctions->getCompanyList($request)->toArray();
        return $this->render('payroll_reports/payroll_reports_generation.html.twig', [
            'companyList' => $companyList,
        ]);
    }

    #[Route('/generate-mandatories-report', name: 'generate_mandatories_report')]
    public function exportManpowerReport(Request $request): Response
    {
        // Retrieve parameters from the request or use defaults for testing
        $dateFrom = $request->request->get('date_from', '2024-10-01');
        $dateTo = $request->request->get('date_to', '2024-10-31');
        $project = $request->request->get('project', 'Project Name');

        $session = $request->getSession();
        $token = $session->get('token');
        $date_start = $request->request->get('payroll_date_range', "2024-10-01 to 2024-10-31");
        if(empty($date_start)){
            $dateFrom   = '2024-10-01';
            $dateTo     = '2024-10-31';
        }
        else{
            list($dateFrom, $dateTo) = explode(' to ', $date_start);
        }
        // Create DateTime objects for dateFrom and dateTo
        $formData = [
            'dateFrom' => $dateFrom, // Convert to DateTime object
            'dateTo' => $dateTo, // Convert to DateTime object
        ];

        // Send POST request to the API
        $response = $this->apiService->apiRequest('GET', 'api/timesheet', json_encode($formData), $token);
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
            return $this->json(['error' => 'Invalid parameters'], Response::HTTP_BAD_REQUEST);
        }

        $timesheet = $response->toArray();
        //dd($timesheet);
    
        // Validate input
        if (!$dateFrom || !$dateTo || !$project) {
            return $this->json(['error' => 'Invalid parameters'], Response::HTTP_BAD_REQUEST);
        }
    
        // Call the report generation function from the service and return file download response
        return $this->exportXLSService->generateTimeSheetReport($dateFrom, $dateTo, $timesheet);
    }

    #[Route('/generate-payrollsheet-report', name: 'generate_payroll_sheet')]
    public function exportPayrolls(Request $request): Response
    {
        // Retrieve parameters from the request or use defaults for testing
        $dateFrom = $request->request->get('date_from', '2024-10-01');
        $dateTo = $request->request->get('date_to', '2024-10-31');
        $project = $request->request->get('project', 'Project Name');

        $session = $request->getSession();
        $token = $session->get('token');
        $date_start = $request->request->get('payroll_date_range', "2024-10-01 to  2024-10-31");
        if(empty($date_start)){
            $dateFrom   = '2024-10-01';
            $dateTo     = '2024-10-31';
        }
        else{
            list($dateFrom, $dateTo) = explode(' to ', $date_start);
        }
        // dd($date_start);
        // Create DateTime objects for dateFrom and dateTo
        $formData = [
            'dateFrom' => $dateFrom, // Convert to DateTime object
            'dateTo' => $dateTo, // Convert to DateTime object
        ];

        // Send POST request to the API
        $response = $this->apiService->apiRequest('GET', 'api/payrollsheet', json_encode($formData), $token);
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
            return $this->json(['error' => 'Invalid parameters'], Response::HTTP_BAD_REQUEST);
        }

        $payrollsheet = $response->toArray();
        // dd($payrollsheet);
    
        // Validate input
        if (!$dateFrom || !$dateTo || !$project) {
            return $this->json(['error' => 'Invalid parameters'], Response::HTTP_BAD_REQUEST);
        }
    
        // Call the report generation function from the service and return file download response
        return $this->exportXLSService->generatePayrollSheetReport($dateFrom, $dateTo, $payrollsheet);
    }

    #[Route('/generate-payrollregister-report', name: 'generate_payroll_register')]
    public function exportPayrollsRegister(Request $request): Response
    {
        // Retrieve parameters from the request or use defaults for testing
        $dateFrom = $request->request->get('date_from', '2024-10-01');
        $dateTo = $request->request->get('date_to', '2024-10-31');
        $project = $request->request->get('project', 'Project Name');

        $session = $request->getSession();
        $token = $session->get('token');
        $date_start = $request->request->get('payroll_date_range', "2024-10-01 to  2024-10-31");
        if(empty($date_start)){
            $dateFrom   = '2024-10-01';
            $dateTo     = '2024-10-31';
        }
        else{
            list($dateFrom, $dateTo) = explode(' to ', $date_start);
        }
        // dd($date_start);
        // Create DateTime objects for dateFrom and dateTo
        $formData = [
            'dateFrom' => $dateFrom, // Convert to DateTime object
            'dateTo' => $dateTo, // Convert to DateTime object
        ];

        // Send POST request to the API
        $response = $this->apiService->apiRequest('GET', 'api/payrollsheet', json_encode($formData), $token);
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
            return $this->json(['error' => 'Invalid parameters'], Response::HTTP_BAD_REQUEST);
        }

        $payrollsheet = $response->toArray();
        // dd($payrollsheet);
    
        // Validate input
        if (!$dateFrom || !$dateTo || !$project) {
            return $this->json(['error' => 'Invalid parameters'], Response::HTTP_BAD_REQUEST);
        }
    
        // Call the report generation function from the service and return file download response
        return $this->exportXLSService->generatePayrollRegisterReport($dateFrom, $dateTo, $payrollsheet);
    }

    #[Route('/generate-taxshield-report', name: 'generate_taxshield_report')]
    public function exportTaxShield(Request $request): Response
    {
        // Retrieve parameters from the request or use defaults for testing
        $dateFrom = $request->request->get('date_from', '2024-10-01');
        $dateTo = $request->request->get('date_to', '2024-10-31');
        $project = $request->request->get('project', 'Project Name');

        $session = $request->getSession();
        $token = $session->get('token');
        $date_start = $request->request->get('payroll_date_range', "2024-10-01 to  2024-10-31");
        if(empty($date_start)){
            $dateFrom   = '2024-10-01';
            $dateTo     = '2024-10-31';
        }
        else{
            list($dateFrom, $dateTo) = explode(' to ', $date_start);
        }
    
        // Create DateTime objects for dateFrom and dateTo
        $formData = [
            'dateFrom' => $dateFrom, // Convert to DateTime object
            'dateTo' => $dateTo, // Convert to DateTime object
        ];

        // Send POST request to the API
        $response = $this->apiService->apiRequest('GET', 'api/payrollsheet-with-taxshield', json_encode($formData), $token);
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
            return $this->json(['error' => $errorMessage], Response::HTTP_BAD_REQUEST);
        }

        $data = $response->toArray();
    
        // Validate input
        if (!$dateFrom || !$dateTo || !$data) {
            return $this->json(['error' => 'Invalid parameters'], Response::HTTP_BAD_REQUEST);
        }
    
        // Call the report generation function from the service and return file download response
        return $this->exportXLSService->generateTaxShieldReport($dateFrom, $dateTo, $data);
    }

    #[Route('/generate-cashadvance-report', name: 'generate_cashadvance_report')]
    public function exportCashAdvance(Request $request): Response
    {
        // Retrieve parameters from the request or use defaults for testing
        $dateFrom = $request->request->get('date_from', '2024-10-01');
        $dateTo = $request->request->get('date_to', '2024-10-31');
        $project = $request->request->get('project', 'Project Name');

        $session = $request->getSession();
        $token = $session->get('token');
        $date_start = $request->request->get('payroll_date_range', "2024-10-01 to  2024-10-31");
        if(empty($date_start)){
            $dateFrom   = '2024-10-01';
            $dateTo     = '2024-10-31';
        }
        else{
            list($dateFrom, $dateTo) = explode(' to ', $date_start);
        }
    
        // Create DateTime objects for dateFrom and dateTo
        $formData = [
            'dateFrom' => $dateFrom, // Convert to DateTime object
            'dateTo' => $dateTo, // Convert to DateTime object
        ];

        // Send POST request to the API
        $response = $this->apiService->apiRequest('GET', 'api/payrollsheet-with-cash-advances', json_encode($formData), $token);
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
            return $this->json(['error' => $errorMessage], Response::HTTP_BAD_REQUEST);
        }

        $data = $response->toArray();
    
        // Validate input
        if (!$dateFrom || !$dateTo || !$data) {
            return $this->json(['error' => 'Invalid parameters'], Response::HTTP_BAD_REQUEST);
        }
    
        // Call the report generation function from the service and return file download response
        return $this->exportXLSService->generateCashAdvanceReport($dateFrom, $dateTo, $data);
    }

    #[Route('/generate-salaryadjustment-report', name: 'generate_salaryadjustment_report')]
    public function exportSalaryAdjustment(Request $request): Response
    {
        // Retrieve parameters from the request or use defaults for testing
        $dateFrom = $request->request->get('date_from', '2024-10-01');
        $dateTo = $request->request->get('date_to', '2024-10-31');
        $project = $request->request->get('project', 'Project Name');

        $session = $request->getSession();
        $token = $session->get('token');
        $date_start = $request->request->get('payroll_date_range', "2024-10-01 to  2024-10-31");
        if(empty($date_start)){
            $dateFrom   = '2024-10-01';
            $dateTo     = '2024-10-31';
        }
        else{
            list($dateFrom, $dateTo) = explode(' to ', $date_start);
        }
    
        // Create DateTime objects for dateFrom and dateTo
        $formData = [
            'dateFrom' => $dateFrom, // Convert to DateTime object
            'dateTo' => $dateTo, // Convert to DateTime object
        ];

        // Send POST request to the API
        $response = $this->apiService->apiRequest('GET', 'api/payrollsheet-with-salary-adjustment', json_encode($formData), $token);
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
            return $this->json(['error' => $errorMessage], Response::HTTP_BAD_REQUEST);
        }

        $data = $response->toArray();
        //dd($data);
        // Validate input
        if (!$dateFrom || !$dateTo || !$data) {
            return $this->json(['error' => 'Invalid parameters'], Response::HTTP_BAD_REQUEST);
        }
    
        // Call the report generation function from the service and return file download response
        return $this->exportXLSService->generateSalaryAdjustmentsReport($dateFrom, $dateTo, $data);
    }

    #[Route('/generate-govdues-report', name: 'generate_govdues')]
    public function exportGovDues(Request $request): Response
    {
        // Retrieve parameters from the request or use defaults for testing
        $dateFrom = $request->request->get('date_from', '2024-10-01');
        $dateTo = $request->request->get('date_to', '2024-10-31');
        $project = $request->request->get('project', 'Project Name');

        $session = $request->getSession();
        $token = $session->get('token');
        $date_start = $request->request->get('payroll_date_range', "2024-10-01 to  2024-10-31");
        if(empty($date_start)){
            $dateFrom   = '2024-10-01';
            $dateTo     = '2024-10-31';
        }
        else{
            list($dateFrom, $dateTo) = explode(' to ', $date_start);
        }
    
        // Create DateTime objects for dateFrom and dateTo
        $formData = [
            'dateFrom' => $dateFrom, // Convert to DateTime object
            'dateTo' => $dateTo, // Convert to DateTime object
        ];

        // Send POST request to the API
        // $response = $this->apiService->apiRequest('GET', 'api/payrollsheet', json_encode($formData), $token);
        $response = $this->apiService->apiRequest('GET', 'api/gov-total-dues', json_encode($formData), $token);
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
            return $this->json(['error' => 'Invalid parameters'], Response::HTTP_BAD_REQUEST);
        }

        $payrollsheet = $response->toArray();
        //dd($payrollsheet);
    
        // Validate input
        if (!$dateFrom || !$dateTo || !$project) {
            return $this->json(['error' => 'Invalid parameters'], Response::HTTP_BAD_REQUEST);
        }

        // Call the report generation function from the service and return file download response
        return $this->exportXLSService->generateTotalContributionReport($dateFrom, $dateTo, $payrollsheet);
    }
    
    #[Route('/generate-company-govdues-report', name: 'generate_company_govdues')]
    public function exportCompanyGovDues(Request $request): Response
    {
        // Retrieve parameters from the request or use defaults for testing
        $dateFrom = $request->request->get('date_from', '2024-10-01');
        $dateTo = $request->request->get('date_to', '2024-10-31');
        $project = $request->request->get('project', 'Project Name');
        $company_id = $request->request->get('company_id', '');

        $session = $request->getSession();
        $token = $session->get('token');
        $date_start = $request->request->get('payroll_date_range', "2024-10-01 to  2024-10-31");

        if(empty($date_start)){
            $dateFrom   = '2024-10-01';
            $dateTo     = '2024-10-31';
        }
        else{
            list($dateFrom, $dateTo) = explode(' to ', $date_start);
        }
        
        // Create DateTime objects for dateFrom and dateTo
        $formData = [
            'dateFrom' => $dateFrom, // Convert to DateTime object
            'dateTo' => $dateTo, // Convert to DateTime object
            'company_id' => $company_id
        ];
        // Send POST request to the API
        // $response = $this->apiService->apiRequest('GET', 'api/payrollsheet', json_encode($formData), $token);
        $response = $this->apiService->apiRequest('GET', 'api/company-gov-total-dues', json_encode($formData), $token);
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
            return $this->json(['error' => $responseMessage], Response::HTTP_BAD_REQUEST);
        }

        $payrollsheet = $response->toArray();
        //dd($payrollsheet);
    
        // Validate input
        if (!$dateFrom || !$dateTo || !$project) {
            return $this->json(['error' => 'Invalid parameters'], Response::HTTP_BAD_REQUEST);
        }

        // Call the report generation function from the service and return file download response
        return $this->exportXLSService->generateContributionReport($dateFrom, $dateTo, $payrollsheet);
    }    

    #[Route('/generate-payrollsummary-report', name: 'generate_payrollsummary')]
    public function exportPayrollSummary(Request $request): Response
    {
        // Retrieve parameters from the request or use defaults for testing
        $dateFrom = $request->request->get('date_from', '2024-10-01');
        $dateTo = $request->request->get('date_to', '2024-10-31');
        $project = $request->request->get('project', 'Project Name');
        $company_id = $request->request->get('company_id', '');

        $session = $request->getSession();
        $token = $session->get('token');
        $date_start = $request->request->get('payroll_date_range', "2024-10-01 to  2024-10-31");

        if(empty($date_start)){
            $dateFrom   = '2024-10-01';
            $dateTo     = '2024-10-31';
        }
        else{
            list($dateFrom, $dateTo) = explode(' to ', $date_start);
        }
        
        // Create DateTime objects for dateFrom and dateTo
        $formData = [
            'dateFrom' => $dateFrom, // Convert to DateTime object
            'dateTo' => $dateTo, // Convert to DateTime object
        ];
        // Send POST request to the API
        // $response = $this->apiService->apiRequest('GET', 'api/payrollsheet', json_encode($formData), $token);
        $response = $this->apiService->apiRequest('GET', 'api/get-payroll-summary', json_encode($formData), $token);
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
            return $this->json(['error' => $responseMessage], Response::HTTP_BAD_REQUEST);
        }

        $payrollsheet = $response->toArray();
        //dd($payrollsheet);
    
        // Validate input
        if (!$dateFrom || !$dateTo || !$project) {
            return $this->json(['error' => 'Invalid parameters'], Response::HTTP_BAD_REQUEST);
        }

        // Call the report generation function from the service and return file download response
        return $this->exportXLSService->generatePayrollSummaryReport($dateFrom, $dateTo, $payrollsheet);
    }  
}
