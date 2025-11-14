<?php

namespace App\Controller;

use App\Entity\AffiliatedCompany;
use App\Entity\SSSLoans;
use App\Entity\SSSConfig;
use App\Entity\TaxConfig;
use App\Entity\TaxShield;
use App\Service\AuditLog;
use App\Entity\CashAdvance;
use App\Entity\LoanHistory;
use App\Entity\PagibigLoans;
use App\Entity\EmployeePayroll;
use App\Entity\EmployeeRecords;
use App\Entity\CashAdvanceHistory;
use App\Service\UserAccessValidation;
use App\Entity\EmployeePayrollProfile;
use App\Entity\SalaryAdjustment;
use App\Repository\SSSLoansRepository;
use App\Repository\WorkerLogsRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CashAdvanceRepository;
use App\Repository\LoanHistoryRepository;
use App\Repository\PagibigLoansRepository;
use App\Repository\EmployeePayrollRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\EmployeePayrollProfileRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class PayrollReportsController extends AbstractController
{
    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $validateAccess;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, UserAccessValidation $validateAccess)
    {
        $this->entityManager = $entityManager;
        $this->passhasher = $passhasher;
        $this->jwtManager = $jwtManager;
        $this->auditlog = $auditLog;
        $this->validateAccess = $validateAccess;
    }

    /**
     * Most GET endpoints expect JSON when called internally, but callers (e.g. Postman/browsers)
     * may only send query parameters. This helper gracefully falls back to $_GET data when the
     * request body is empty or invalid JSON so inputs are honored in both cases.
     */
    private function getRequestPayload(Request $request): array
    {
        $rawContent = trim((string)$request->getContent());
        if ($rawContent !== '') {
            $decoded = json_decode($rawContent, true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                return $decoded;
            }
        }

        $queryParams = $request->query->all();
        return is_array($queryParams) ? $queryParams : [];
    }
    
    #[Route('/api/all-employee-payroll', name: 'api_employee_payroll_data', methods: ['GET'])]
    public function getEmployeePayrollProfiles(): JsonResponse
    {
        

        // Fetch all EmployeePayrollProfiles from the repository
        $profiles = $this->entityManager->getRepository(EmployeePayrollProfile::class)->findAll();
    
        // Manually map and structure the data
        $data = [];
        foreach ($profiles as $profile) {
            $employeeRecord = $profile->getEmployeeRecord();
            
            // Retrieve loan histories
            $sssLoanHistory = $profile->getSssLoansHistories(); // Assuming a method that fetches SSS loan history
            $pagibigLoanHistory = $profile->getPagibigLoansHistories(); // Assuming a method that fetches Pag-IBIG loan history
            
            // Assuming you have a method to get the associated payroll
            $payrolls = $profile->getEmployeePayrolls(); // Retrieve employee payrolls
            
            $payrollData = [];
            $dateFrom = new \DateTime('2023-10-01'); // Example starting date
            $dateTo = new \DateTime('2023-10-15');   // Example ending date
            
            foreach ($payrolls as $payroll) {
                $dateGenerated = $payroll->getDateGenerated(); // Get the payroll date
                // Check if date_generated is within the range of dateFrom and dateTo
                if ($dateGenerated >= $dateFrom && $dateGenerated <= $dateTo) {
                    $payrollData[] = [
                        'id' => $payroll->getId(),
                        'basic_salary' => $payroll->getBasicSalary(),
                        'overtime_salary' => $payroll->getOvertimeSalary(),
                        'total_salary' => $payroll->getTotalSalary(),
                        'total_deduction' => $payroll->getTotalDeduction(),
                        'net_salary' => $payroll->getNetSalary(),
                        'thirteenth_month_pay' => $payroll->getThirteenthMonthPay(),
                        'sss_share' => $payroll->getSssShare(),
                        'philhealth_share' => $payroll->getPhilhealthShare(),
                        'hdmf_contribution' => $payroll->getHdmfContribution(),
                        'insurance_contribution' => $payroll->getInsuranceContribution(),
                        'tax_contribution' => $payroll->getTaxContribution(),
                        'cash_advance_deduction' => $payroll->getCashAdvanceDeduction(),
                        'undertime_deduction' => $payroll->getUndertimeDeduction(),
                        'rendered_days' => $payroll->getRenderedDays(),
                        'date_generated' => $dateGenerated ? $dateGenerated->format('Y-m-d H:i:s') : null, // Formatting date
                    ];
                }
            }
        
            $data[] = [
                'id' => $profile->getId(),
                'monthly_salary' => $profile->getMonthlySalary(),
                'allowance' => $profile->getAllowance(),
                'overtime_rate' => $profile->getOvertimeRate(),
                'late_rate' => $profile->getLateRate(),
                'sss_contribution' => $profile->getSssContribution() ? $profile->getSssContribution()->getId() : null,
                'tax_contribution' => $profile->getTaxContribution() ? $profile->getTaxContribution()->getId() : null,
                'pagibig_contribution' => $profile->getPagibigContribution() ? $profile->getPagibigContribution()->getId() : null,
                'philhealth_contribution' => $profile->getPhilhealthContribution() ? $profile->getPhilhealthContribution()->getId() : null,
                'employee_record' => $employeeRecord ? [
                    'id' => $employeeRecord->getId(),
                    'name' => $employeeRecord->getLastName().', '. $employeeRecord->getFirstName().' '.$employeeRecord->getMiddleName(),
                    'position' => $employeeRecord->getPosition(),
                ] : null,
                'sss_loan' => $profile->getSssLoan(),
                'sss_loan_deduction' => $profile->getSssLoanDeduction(),
                'hdmf_loan' => $profile->getHdmfLoan(),
                'hdmf_loan_deduction' => $profile->getHdmfLoanDeduction(),
                'cash_advance' => $profile->getCashAdvance(),
                'cash_advance_deduction' => $profile->getCashAdvanceDeduction(),
                'other_loans' => $profile->getOtherLoans(),
                'other_loans_deduction' => $profile->getOtherLoansDeduction(),
                'employer_sss_contribution' => $profile->getEmployerSssContribution(),
                'employer_pagibig_contribution' => $profile->getEmployerPagibigContribution(),
                'employer_philhealth_contribution' => $profile->getEmployerPhilhealthContribution(),
                'accident_insurance' => $profile->getAccidentInsurance(),
                'thirteenth_month_pay' => $profile->getThirteenthMonthPay(),
                'daily_rate' => $profile->getDailyRate(),
                'hourly_rate' => $profile->getHourlyRate(),
        
                // Include SSS Loan History
                'sss_loan_history' => $sssLoanHistory ? array_map(function($loan) {
                    return [
                        'id' => $loan->getId(),
                        'remark' => $loan->getRemark(),
                        'previous_amount' => $loan->getPreviousAmount(),
                        'deduction' => $loan->getDeduction(),
                        'current_amount' => $loan->getCurrentAmount(),
                        'date' => $loan->getDate()->format('Y-m-d'),
                    ];
                }, $sssLoanHistory->toArray()) : [],
        
                // Include Pag-IBIG Loan History
                'pagibig_loan_history' => $pagibigLoanHistory ? array_map(function($loan) {
                    return [
                        'id' => $loan->getId(),
                        'remark' => $loan->getRemark(),
                        'previous_amount' => $loan->getPreviousAmount(),
                        'deduction' => $loan->getDeduction(),
                        'current_amount' => $loan->getCurrentAmount(),
                        'date' => $loan->getDate()->format('Y-m-d'),
                    ];
                }, $pagibigLoanHistory->toArray()) : [],
                
                // Include Payroll Information
                'payrolls' => $payrollData,
            ];
        }
        
        // Return the data as a JSON response
        return new JsonResponse($data);
    }

    #[Route('/api/timesheet', name: 'get_timesheet_data', methods: ['GET'])]
    public function getAllWorkerLogs(Request $request, WorkerLogsRepository $workerLogsRepository): JsonResponse
    {
        $data = $this->getRequestPayload($request);
    
        // Validate input
        if (!$data || !isset($data['dateFrom'], $data['dateTo'])) {
            return $this->json(['error' => 'Invalid input data.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Fetch optional dateFrom and dateTo query parameters
        $dateFrom = $data['dateFrom'] ? new \DateTime($data['dateFrom']) : null;
        $dateTo = $data['dateTo'] ? new \DateTime($data['dateTo']) : null;

        // Fetch worker logs for all active employees within the date range
        $workerLogs = $workerLogsRepository->findAllLogsForActiveEmployees('Active', $dateFrom, $dateTo);

        // var_dump($dateFrom, $dateTo);
        // Combine logs into the employee object
        $responseData = [];
        foreach ($workerLogs as $log) {
            $employeeId = $log->getUser()->getId();
            $employeeRecord = $log->getUser()->getEmpRecord();
            $company = $employeeRecord?->getAffiliatedCompany();
            $companyId = $company?->getId();
            $companyName = $company?->getName();

            // Initialize employee entry if not yet present
            if (!isset($responseData[$employeeId])) {
                $responseData[$employeeId] = [
                    'id' => $log->getUser()->getId(),
                    'firstname' => $log->getUser()->getFirstname(),
                    'lastname' => $log->getUser()->getLastname(),
                    'position' => $log->getUser()->getPosition(),
                    'workerId' => $log->getUser()->getWorkerId(),
                    'company_id' => $companyId,
                    'affiliated_company_id' => $companyId,
                    'company_name' => $companyName,
                    'logs' => [] // Initialize empty logs array
                ];
            }

            // Add the worker log to the employee's logs
            $responseData[$employeeId]['logs'][] = [
                'id' => $log->getId(),
                'type' => $log->getType(),
                'loginDate' => $log->getLoginDate()?->format('Y-m-d H:i:s'),
                'logoutDate' => $log->getLogoutDate()?->format('Y-m-d H:i:s'),
                'overtime' => $log->getOvertime(),
                'undertime' => $log->getUndertime(),
                'rendered_hours' => $log->getRenderedHours(),
                'overtime_approved' => $log->isOvertimeApproved(),
                'is_time_calculated' => $log->isTimeCalculated(),
                'worker_log_id' => $log->getWorkerLogId(),
                'attendance_status' => $log->getAttendanceStatus()?->getName()
            ];
        }

        // Reindex the array by removing the employee ID as the key
        $result = array_values($responseData);

        // Return the response as JSON
        return new JsonResponse($result, JsonResponse::HTTP_OK);
    }

    #[Route('/api/payrollsheet', name: 'get_all_employee_payroll_profiles', methods: ['GET'])]
    public function getEmployeePayrolls(Request $request): JsonResponse
    {
        $data = $this->getRequestPayload($request);
        
        // Validate input
        if (!$data || !isset($data['dateFrom'], $data['dateTo'])) {
            return $this->json(['error' => 'Invalid input data.'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Fetch optional dateFrom and dateTo query parameters
        $dateFrom = new \DateTime($data['dateFrom']);
        $dateTo = new \DateTime($data['dateTo']);
    
        // Fetch all active employee records
        $activeEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active']);
        
        if (!$activeEmployees) {
            return new JsonResponse(['message' => 'No active employees found.'], JsonResponse::HTTP_OK);
        }
        
        $payrollProfiles = [];
        
        // Loop through active employees to get their payroll profiles
        foreach ($activeEmployees as $employee) {
            $company = $employee->getAffiliatedCompany();
            $companyId = $company?->getId();
            $companyName = $company?->getName();
            $payrollProfile = $this->entityManager->getRepository(EmployeePayrollProfile::class)->findOneBy(['employee_record' => $employee]);
    
            // Initialize default payroll details
            $payrollDetails = [
                'basic_salary' => 0,
                'overtime_salary' => 0,
                'total_salary' => 0,
                'total_deduction' => 0,
                'net_salary' => 0,
                'thirteenth_month_pay' => 0,
                'sss_share' => 0,
                'philhealth_share' => 0,
                'hdmf_contribution' => 0,
                'insurance_contribution' => 0,
                'tax_contribution' => 0,
                'cash_advance_deduction' => 0,
                'undertime_deduction' => 0,
                'rendered_days' => 0,
                'date_generated' => null, // or use '0000-00-00 00:00:00' if preferred
                'date_start' => null, // or use '0000-00-00 00:00:00' if preferred
                'date_end' => null, // or use '0000-00-00 00:00:00' if preferred
                'hdmf_loan' => 0,
                'hdmf_calamity_loan' => 0,
                'hdmf_mp2' => 0,
                'sss_loan' => 0,
                'sss_calamity_loan' => 0,
                'cash_advance_total' => 0,
            ];
    
            if ($payrollProfile) {
                $fullname = sprintf('%s %s %s',
                    $employee->getLastName().',',
                    $employee->getFirstName(),
                    $employee->getMiddleName() ? $employee->getMiddleName() : ''
                );
    
                // Call the repository method to fetch the latest payroll record based on the profile and date range
                $payrollRecords  = $this->entityManager->getRepository(EmployeePayroll::class)
                    ->findByPayrollProfileAndDateRange($payrollProfile->getId(), $dateFrom, $dateTo);
    
                // If payroll records are found, update the payroll details
                if ($payrollRecords ) {
                    $payroll = $payrollRecords; // Assuming you get a collection and want the first record
                    
                    $payrollDetails = [
                        'basic_salary' => $payroll->getBasicSalary(),
                        'overtime_salary' => $payroll->getOvertimeSalary(),
                        'total_salary' => $payroll->getTotalSalary(),
                        'total_deduction' => $payroll->getTotalDeduction(),
                        'net_salary' => $payroll->getNetSalary(),
                        'thirteenth_month_pay' => $payroll->getThirteenthMonthPay(),
                        'sss_share' => $payroll->getSssShare(),
                        'philhealth_share' => $payroll->getPhilhealthShare(),
                        'hdmf_contribution' => $payroll->getHdmfContribution(),
                        'insurance_contribution' => $payroll->getInsuranceContribution(),
                        'tax_contribution' => $payroll->getTaxContribution(),
                        'cash_advance_deduction' => $payroll->getCashAdvanceDeduction(),
                        'undertime_deduction' => $payroll->getUndertimeDeduction(),
                        'rendered_days' => $payroll->getRenderedDays(),
                        'date_generated' => $payroll->getDateGenerated() ? $payroll->getDateGenerated()->format('Y-m-d H:i:s') : null,
                        'date_start' => $payroll->getDateStart() ? $payroll->getDateStart()->format('Y-m-d') : null,
                        'date_end' => $payroll->getDateEnd() ? $payroll->getDateEnd()->format('Y-m-d') : null,
                        'hdmf_loan' => $payroll->getHdmfLoan(),
                        'hdmf_calamity_loan' => $payroll->getHdmfCalamityLoan(),
                        'hdmf_mp2' => $payroll->getHdmfMp2(),
                        'sss_loan' => $payroll->getSssLoan(),
                        'sss_calamity_loan' => $payroll->getSssCalamityLoan(),
                        'cash_advance_total' => $payroll->getTotalCa(),
                    ];
                }
    
                // Add the payroll profile to the response
                $payrollProfiles[] = [
                    'employee_id' => $employee->getId(),
                    'employee_code' => $employee->getEmployeeCode(),
                    'fullname' => trim($fullname), // Trim any extra spaces if middle name is empty
                    'monthly_salary' => $payrollProfile->getMonthlySalary(),
                    'allowance' => $payrollProfile->getAllowance(),
                    'overtime_rate' => $payrollProfile->getOvertimeRate(),
                    'late_rate' => $payrollProfile->getLateRate(),
                    'payroll_details' => $payrollDetails,
                    'daily_rate' => $payrollProfile->getDailyRate(),
                    'company_id' => $companyId,
                    'affiliated_company_id' => $companyId,
                    'company_name' => $companyName,
                ];
            } else {
                // If no payroll profile is found, still add the employee with default values
                $payrollProfiles[] = [
                    'employee_id' => $employee->getId(),
                    'fullname' => trim(sprintf('%s %s %s',
                        $employee->getLastName().',',
                        $employee->getFirstName(),
                        $employee->getMiddleName() ? $employee->getMiddleName() : ''
                    )),
                    'employee_code' => $employee->getEmployeeCode(),
                    'monthly_salary' => 0,
                    'allowance' => 0,
                    'overtime_rate' => 0,
                    'late_rate' => 0,
                    'payroll_details' => $payrollDetails,
                    'daily_rate' => 0,
                    'company_id' => $companyId,
                    'affiliated_company_id' => $companyId,
                    'company_name' => $companyName,
                ];
            }
        }
    
        return new JsonResponse($payrollProfiles, JsonResponse::HTTP_OK);
    }

    #[Route('/api/payrollsheet-with-taxshield', name: 'get_all_employee_payroll_profiles_with_taxshield', methods: ['GET'])]
    public function getEmployeePayrollsWithTaxShield(Request $request): JsonResponse
    {
        $data = $this->getRequestPayload($request);
        
        // Validate input
        if (!$data || !isset($data['dateFrom'], $data['dateTo'])) {
            return $this->json(['error' => 'Invalid input data.'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Fetch optional dateFrom and dateTo query parameters
        $dateFrom = new \DateTime($data['dateFrom']);
        $dateTo = new \DateTime($data['dateTo']);
    
        // Fetch all active employee records
        $activeEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active']);
        
        if (!$activeEmployees) {
            return new JsonResponse(['message' => 'No active employees found.'], JsonResponse::HTTP_OK);
        }
    
        $payrollProfiles = [];
    
        // Loop through active employees to get their payroll profiles and tax shield data
        foreach ($activeEmployees as $employee) {
            $company = $employee->getAffiliatedCompany();
            $companyId = $company?->getId();
            $companyName = $company?->getName();
            $payrollProfile = $this->entityManager->getRepository(EmployeePayrollProfile::class)->findOneBy(['employee_record' => $employee]);
    
            // Initialize default payroll details
            $payrollDetails = [
                'basic_salary' => 0,
                'overtime_salary' => 0,
                'total_salary' => 0,
                'total_deduction' => 0,
                'net_salary' => 0,
                'thirteenth_month_pay' => 0,
                'sss_share' => 0,
                'philhealth_share' => 0,
                'hdmf_contribution' => 0,
                'insurance_contribution' => 0,
                'tax_contribution' => 0,
                'cash_advance_deduction' => 0,
                'undertime_deduction' => 0,
                'rendered_days' => 0,
                'date_generated' => null,
                'total_tax_shield' => 0, // New field for total_tax_shield
                'date_start' => null, // or use '0000-00-00 00:00:00' if preferred
                'date_end' => null, // or use '0000-00-00 00:00:00' if preferred
            ];
    
            if ($payrollProfile) {
                $fullname = sprintf('%s %s %s',
                    $employee->getLastName().',',
                    $employee->getFirstName(),
                    $employee->getMiddleName() ? $employee->getMiddleName() : ''
                );
    
                // Fetch the latest payroll record based on the profile and date range
                $payrollRecords = $this->entityManager->getRepository(EmployeePayroll::class)
                    ->findByPayrollProfileAndDateRange($payrollProfile->getId(), $dateFrom, $dateTo);
    
                // If payroll records are found, update the payroll details
                if ($payrollRecords) {
                    $payroll = $payrollRecords; // Assuming you get a collection and want the first record
    
                    $payrollDetails = [
                        'basic_salary' => $payroll->getBasicSalary(),
                        'overtime_salary' => $payroll->getOvertimeSalary(),
                        'total_salary' => $payroll->getTotalSalary(),
                        'total_deduction' => $payroll->getTotalDeduction(),
                        'net_salary' => $payroll->getNetSalary(),
                        'thirteenth_month_pay' => $payroll->getThirteenthMonthPay(),
                        'sss_share' => $payroll->getSssShare(),
                        'philhealth_share' => $payroll->getPhilhealthShare(),
                        'hdmf_contribution' => $payroll->getHdmfContribution(),
                        'insurance_contribution' => $payroll->getInsuranceContribution(),
                        'tax_contribution' => $payroll->getTaxContribution(),
                        'cash_advance_deduction' => $payroll->getCashAdvanceDeduction(),
                        'undertime_deduction' => $payroll->getUndertimeDeduction(),
                        'rendered_days' => $payroll->getRenderedDays(),
                        'date_generated' => $payroll->getDateGenerated() ? $payroll->getDateGenerated()->format('Y-m-d H:i:s') : null,
                        'total_tax_shield' => $payroll->getTotalTaxShield(), // Fetching the total_tax_shield field
                        'date_start' => $payroll->getDateStart() ? $payroll->getDateStart()->format('Y-m-d') : null,
                        'date_end' => $payroll->getDateEnd() ? $payroll->getDateEnd()->format('Y-m-d') : null,
                    ];
                    // Fetch the related TaxShield data
                    $taxShield = $this->entityManager->getRepository(TaxShield::class)
                    ->findOneBy(['payroll' => $payroll]);

                    $taxShieldData = [
                        'monthly_tax_shield' => $taxShield ? $taxShield->getMonthlyTaxShield() : 0,
                        'daily_tax_shield' => $taxShield ? $taxShield->getDailyTaxShield() : 0,
                        'remarks' => $taxShield ? $taxShield->getRemarks() : '',
                    ];
                    // Add the payroll profile with tax shield data to the response
                    $payrollProfiles[] = [
                        'employee_id' => $employee->getId(),
                        'fullname' => trim($fullname), // Trim any extra spaces if middle name is empty
                        'monthly_salary' => $payrollProfile->getMonthlySalary(),
                        'allowance' => $payrollProfile->getAllowance(),
                        'overtime_rate' => $payrollProfile->getOvertimeRate(),
                        'late_rate' => $payrollProfile->getLateRate(),
                        'payroll_details' => $payrollDetails,
                        'daily_rate' => $payrollProfile->getDailyRate(),
                        'tax_shield' => $taxShieldData,
                        'company_id' => $companyId,
                        'affiliated_company_id' => $companyId,
                        'company_name' => $companyName,
                    ];
                }
   
            } else {
                // If no payroll profile is found, still add the employee with default values
                $payrollProfiles[] = [
                    'employee_id' => $employee->getId(),
                    'fullname' => trim(sprintf('%s %s %s',
                        $employee->getLastName().',',
                        $employee->getFirstName(),
                        $employee->getMiddleName() ? $employee->getMiddleName() : ''
                    )), 
                    'monthly_salary' => 0,
                    'allowance' => 0,
                    'overtime_rate' => 0,
                    'late_rate' => 0,
                    'payroll_details' => $payrollDetails,
                    'daily_rate' => 0,
                    'tax_shield' => [
                        'monthly_tax_shield' => 0,
                        'daily_tax_shield' => 0,
                        'remarks' => '',
                    ],
                    'company_id' => $companyId,
                    'affiliated_company_id' => $companyId,
                    'company_name' => $companyName,
                ];
            }
        }
        
        return new JsonResponse($payrollProfiles, JsonResponse::HTTP_OK);
    }

    // #[Route('/api/payrollsheet-with-cash-advances', name: 'get_all_employee_payroll_profiles_with_cash_advances', methods: ['GET'])]
    // public function getEmployeePayrollsWithCashAdvances(Request $request): JsonResponse
    // {
    //     $data = json_decode($request->getContent(), true);
        
    //     // Validate input
    //     if (!$data || !isset($data['dateFrom'], $data['dateTo'])) {
    //         return $this->json(['error' => 'Invalid input data.'], JsonResponse::HTTP_BAD_REQUEST);
    //     }
    
    //     // Fetch optional dateFrom and dateTo query parameters
    //     $dateFrom = new \DateTime($data['dateFrom']);
    //     $dateTo = new \DateTime($data['dateTo']);
    
    //     // Fetch all active employee records
    //     $activeEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active']);
        
    //     if (!$activeEmployees) {
    //         return new JsonResponse(['message' => 'No active employees found.'], JsonResponse::HTTP_OK);
    //     }
    
    //     $payrollProfiles = [];
    
    //     // Loop through active employees to get their payroll profiles and cash advance history data
    //     foreach ($activeEmployees as $employee) {
    //         $payrollProfile = $this->entityManager->getRepository(EmployeePayrollProfile::class)->findOneBy(['employee_record' => $employee]);
    
    //         // Initialize default payroll details
    //         $payrollDetails = [
    //             'basic_salary' => 0,
    //             'overtime_salary' => 0,
    //             'total_salary' => 0,
    //             'total_deduction' => 0,
    //             'net_salary' => 0,
    //             'thirteenth_month_pay' => 0,
    //             'sss_share' => 0,
    //             'philhealth_share' => 0,
    //             'hdmf_contribution' => 0,
    //             'insurance_contribution' => 0,
    //             'tax_contribution' => 0,
    //             'cash_advance_deduction' => 0,
    //             'undertime_deduction' => 0,
    //             'rendered_days' => 0,
    //             'date_generated' => null,
    //             'date_start' => null,
    //             'date_end' => null,
    //         ];
    
    //         if ($payrollProfile) {
    //             $fullname = sprintf('%s %s %s',
    //                 $employee->getLastName() . ',',
    //                 $employee->getFirstName(),
    //                 $employee->getMiddleName() ? $employee->getMiddleName() : ''
    //             );
    
    //             // Fetch the latest payroll record based on the profile and date range
    //             $payrollRecords = $this->entityManager->getRepository(EmployeePayroll::class)
    //                 ->findByPayrollProfileAndDateRange($payrollProfile->getId(), $dateFrom, $dateTo);
    
    //             // If payroll records are found, update the payroll details
    //             if ($payrollRecords) {
    //                 $payroll = $payrollRecords; // Assuming you get a collection and want the first record
    
    //                 $payrollDetails = [
    //                     'basic_salary' => $payroll->getBasicSalary(),
    //                     'overtime_salary' => $payroll->getOvertimeSalary(),
    //                     'total_salary' => $payroll->getTotalSalary(),
    //                     'total_deduction' => $payroll->getTotalDeduction(),
    //                     'net_salary' => $payroll->getNetSalary(),
    //                     'thirteenth_month_pay' => $payroll->getThirteenthMonthPay(),
    //                     'sss_share' => $payroll->getSssShare(),
    //                     'philhealth_share' => $payroll->getPhilhealthShare(),
    //                     'hdmf_contribution' => $payroll->getHdmfContribution(),
    //                     'insurance_contribution' => $payroll->getInsuranceContribution(),
    //                     'tax_contribution' => $payroll->getTaxContribution(),
    //                     'cash_advance_deduction' => $payroll->getCashAdvanceDeduction(),
    //                     'undertime_deduction' => $payroll->getUndertimeDeduction(),
    //                     'rendered_days' => $payroll->getRenderedDays(),
    //                     'date_generated' => $payroll->getDateGenerated() ? $payroll->getDateGenerated()->format('Y-m-d H:i:s') : null,
    //                     'date_start' => $payroll->getDateStart() ? $payroll->getDateStart()->format('Y-m-d') : null,
    //                     'date_end' => $payroll->getDateEnd() ? $payroll->getDateEnd()->format('Y-m-d') : null,
    //                 ];
    
    //                 // Fetch related cash advance histories based on the payroll
    //                 $cashAdvanceHistories = $this->entityManager->getRepository(CashAdvanceHistory::class)
    //                     ->findBy(['payroll' => $payroll]);
    
    //                 $cashAdvanceHistoryData = [];
    //                 foreach ($cashAdvanceHistories as $history) {
    //                     $cashAdvanceHistoryData[] = [
    //                         'remarks' => $history->getRemarks(),
    //                         'previous_amount' => $history->getPreviousAmount(),
    //                         'deduction' => $history->getDeduction(),
    //                         'current_amount' => $history->getCurrentAmount(),
    //                         // Optionally, you can include cash advance details if necessary
    //                         'cash_advance_date_start' => $history->getCashAdvance() ? $history->getCashAdvance()->getDateStart()->format('Y-m-d') : null,
    //                     ];
    //                 }
    
    //                 // Add the payroll profile with cash advance history data to the response
    //                 $payrollProfiles[] = [
    //                     'employee_id' => $employee->getId(),
    //                     'fullname' => trim($fullname), // Trim any extra spaces if middle name is empty
    //                     'monthly_salary' => $payrollProfile->getMonthlySalary(),
    //                     'allowance' => $payrollProfile->getAllowance(),
    //                     'overtime_rate' => $payrollProfile->getOvertimeRate(),
    //                     'late_rate' => $payrollProfile->getLateRate(),
    //                     'payroll_details' => $payrollDetails,
    //                     'daily_rate' => $payrollProfile->getDailyRate(),
    //                     'cash_advances' => $cashAdvanceHistoryData, // Only get cash advance histories
    //                 ];
    //             }
    //         } else {
    //             // If no payroll profile is found, still add the employee with default values
    //             $payrollProfiles[] = [
    //                 'employee_id' => $employee->getId(),
    //                 'fullname' => trim(sprintf('%s %s %s',
    //                     $employee->getLastName() . ',',
    //                     $employee->getFirstName(),
    //                     $employee->getMiddleName() ? $employee->getMiddleName() : ''
    //                 )),
    //                 'monthly_salary' => 0,
    //                 'allowance' => 0,
    //                 'overtime_rate' => 0,
    //                 'late_rate' => 0,
    //                 'payroll_details' => $payrollDetails,
    //                 'daily_rate' => 0,
    //                 'cash_advances' => [], // No cash advances
    //             ];
    //         }
    //     }
        
    //     return new JsonResponse($payrollProfiles, JsonResponse::HTTP_OK);
    // }

    #[Route('/api/payrollsheet-with-cash-advances', name: 'get_all_employee_payroll_profiles_with_cash_advances', methods: ['GET'])]
    public function getEmployeePayrollsWithCashAdvances(Request $request): JsonResponse
    {
        $data = $this->getRequestPayload($request);
        
        // Validate input
        if (!$data || !isset($data['dateFrom'], $data['dateTo'])) {
            return $this->json(['error' => 'Invalid input data.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Fetch optional dateFrom and dateTo query parameters
        $dateFrom = new \DateTime($data['dateFrom']);
        $dateTo = new \DateTime($data['dateTo']);

        // Fetch all active employee records
        $activeEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active']);
        
        if (!$activeEmployees) {
            return new JsonResponse(['message' => 'No active employees found.'], JsonResponse::HTTP_OK);
        }

        $payrollProfiles = [];

        // Loop through active employees to get their payroll profiles and cash advance data
        foreach ($activeEmployees as $employee) {
            $company = $employee->getAffiliatedCompany();
            $companyId = $company?->getId();
            $companyName = $company?->getName();
            $payrollProfile = $this->entityManager->getRepository(EmployeePayrollProfile::class)->findOneBy(['employee_record' => $employee]);

            // Initialize default payroll details
            $payrollDetails = [
                'basic_salary' => 0,
                'overtime_salary' => 0,
                'total_salary' => 0,
                'total_deduction' => 0,
                'net_salary' => 0,
                'thirteenth_month_pay' => 0,
                'sss_share' => 0,
                'philhealth_share' => 0,
                'hdmf_contribution' => 0,
                'insurance_contribution' => 0,
                'tax_contribution' => 0,
                'cash_advance_deduction' => 0,
                'undertime_deduction' => 0,
                'rendered_days' => 0,
                'date_generated' => null,
                'date_start' => null,
                'date_end' => null,
            ];

            if ($payrollProfile) {
                $fullname = sprintf('%s %s %s',
                    $employee->getLastName() . ',',
                    $employee->getFirstName(),
                    $employee->getMiddleName() ? $employee->getMiddleName() : ''
                );

                // Fetch the latest payroll record based on the profile and date range
                $payrollRecords = $this->entityManager->getRepository(EmployeePayroll::class)
                    ->findByPayrollProfileAndDateRange($payrollProfile->getId(), $dateFrom, $dateTo);

                // If payroll records are found, update the payroll details
                if ($payrollRecords) {
                    $payroll = $payrollRecords; // Assuming you get a collection and want the first record

                    $payrollDetails = [
                        'basic_salary' => $payroll->getBasicSalary(),
                        'overtime_salary' => $payroll->getOvertimeSalary(),
                        'total_salary' => $payroll->getTotalSalary(),
                        'total_deduction' => $payroll->getTotalDeduction(),
                        'net_salary' => $payroll->getNetSalary(),
                        'thirteenth_month_pay' => $payroll->getThirteenthMonthPay(),
                        'sss_share' => $payroll->getSssShare(),
                        'philhealth_share' => $payroll->getPhilhealthShare(),
                        'hdmf_contribution' => $payroll->getHdmfContribution(),
                        'insurance_contribution' => $payroll->getInsuranceContribution(),
                        'tax_contribution' => $payroll->getTaxContribution(),
                        'cash_advance_deduction' => $payroll->getCashAdvanceDeduction(),
                        'undertime_deduction' => $payroll->getUndertimeDeduction(),
                        'rendered_days' => $payroll->getRenderedDays(),
                        'date_generated' => $payroll->getDateGenerated() ? $payroll->getDateGenerated()->format('Y-m-d H:i:s') : null,
                        'date_start' => $payroll->getDateStart() ? $payroll->getDateStart()->format('Y-m-d') : null,
                        'date_end' => $payroll->getDateEnd() ? $payroll->getDateEnd()->format('Y-m-d') : null,
                    ];

                    // Fetch the related Cash Advances using the payroll record
                    $cashAdvances = $this->entityManager->getRepository(CashAdvance::class)
                        ->findBy(['payroll_profile' => $payrollProfile]);

                    $cashAdvanceHistories = [];
                    foreach ($cashAdvances as $cashAdvance) {
                        $cashAdvanceHistories[] = [
                            'starting_amount' => $cashAdvance->getStartingAmount(),
                            'date_start' => $cashAdvance->getDateStart()->format('Y-m-d'),
                            'cash_advance_amount' => $cashAdvance->getCashAdvanceAmount(),
                            'cash_advance_deduction' => $cashAdvance->getCashAdvanceDeduction(),
                            'remarks' => $cashAdvance->getRemarks(),
                            'history' => [] // Initialize empty history array
                        ];

                        // Fetch related cash advance histories using the payroll record
                        $cashAdvanceHistoryRecords = $this->entityManager->getRepository(CashAdvanceHistory::class)
                            ->findBy(['cash_advance' => $cashAdvance]); // Filter by payroll instead of cash advance

                        foreach ($cashAdvanceHistoryRecords as $history) {
                            $cashAdvanceHistories[count($cashAdvanceHistories) - 1]['history'][] = [
                                'deduction_date' => $history->getPayroll()->getDateEnd() ? $history->getPayroll()->getDateEnd()->format('Y-m-d') : null,
                                'remarks' => $history->getRemarks(),
                                'previous_amount' => $history->getPreviousAmount(),
                                'deduction' => $history->getDeduction(),
                                'current_amount' => $history->getCurrentAmount(),
                            ];
                        }
                    }

                    // Add the payroll profile with cash advance data to the response
                    $payrollProfiles[] = [
                        'employee_id' => $employee->getId(),
                        'fullname' => trim($fullname), // Trim any extra spaces if middle name is empty
                        'monthly_salary' => $payrollProfile->getMonthlySalary(),
                        'allowance' => $payrollProfile->getAllowance(),
                        'overtime_rate' => $payrollProfile->getOvertimeRate(),
                        'late_rate' => $payrollProfile->getLateRate(),
                        'payroll_details' => $payrollDetails,
                        'daily_rate' => $payrollProfile->getDailyRate(),
                        'cash_advances' => $cashAdvanceHistories,
                        'company_id' => $companyId,
                        'affiliated_company_id' => $companyId,
                        'company_name' => $companyName,
                    ];
                }
            } else {
                // If no payroll profile is found, still add the employee with default values
                $payrollProfiles[] = [
                    'employee_id' => $employee->getId(),
                    'fullname' => trim(sprintf('%s %s %s',
                        $employee->getLastName() . ',',
                        $employee->getFirstName(),
                        $employee->getMiddleName() ? $employee->getMiddleName() : ''
                    )),
                    'monthly_salary' => 0,
                    'allowance' => 0,
                    'overtime_rate' => 0,
                    'late_rate' => 0,
                    'payroll_details' => $payrollDetails,
                    'daily_rate' => 0,
                    'cash_advances' => [], // No cash advances
                    'company_id' => $companyId,
                    'affiliated_company_id' => $companyId,
                    'company_name' => $companyName,
                ];
            }
        }
        
        return new JsonResponse($payrollProfiles, JsonResponse::HTTP_OK);
    }

    #[Route('/api/payrollsheet-with-salary-adjustment', name: 'get_all_employee_payroll_profiles_with_salary_adjustment', methods: ['GET'])]
    public function getEmployeewithSalaryAdjustment(Request $request): JsonResponse
    {
        $data = $this->getRequestPayload($request);
        
        // Validate input
        if (!$data || !isset($data['dateFrom'], $data['dateTo'])) {
            return $this->json(['error' => 'Invalid input data.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Fetch optional dateFrom and dateTo query parameters
        $dateFrom = new \DateTime($data['dateFrom']);
        $dateTo = new \DateTime($data['dateTo']);

        // Fetch all active employee records
        $activeEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active']);
        
        if (!$activeEmployees) {
            return new JsonResponse(['message' => 'No active employees found.'], JsonResponse::HTTP_OK);
        }

        $payrollProfiles = [];

        // Loop through active employees to get their payroll profiles and cash advance data
        foreach ($activeEmployees as $employee) {
            $company = $employee->getAffiliatedCompany();
            $companyId = $company?->getId();
            $companyName = $company?->getName();
            $payrollProfile = $this->entityManager->getRepository(EmployeePayrollProfile::class)->findOneBy(['employee_record' => $employee]);

            // Initialize default payroll details
            $payrollDetails = [
                'basic_salary' => 0,
                'overtime_salary' => 0,
                'total_salary' => 0,
                'total_deduction' => 0,
                'net_salary' => 0,
                'thirteenth_month_pay' => 0,
                'sss_share' => 0,
                'philhealth_share' => 0,
                'hdmf_contribution' => 0,
                'insurance_contribution' => 0,
                'tax_contribution' => 0,
                'cash_advance_deduction' => 0,
                'undertime_deduction' => 0,
                'rendered_days' => 0,
                'date_generated' => null,
                'date_start' => null,
                'date_end' => null,
            ];

            if ($payrollProfile) {
                $fullname = sprintf('%s %s %s',
                    $employee->getLastName() . ',',
                    $employee->getFirstName(),
                    $employee->getMiddleName() ? $employee->getMiddleName() : ''
                );

                // Fetch the latest payroll record based on the profile and date range
                $payrollRecords = $this->entityManager->getRepository(EmployeePayroll::class)
                    ->findByPayrollProfileAndDateRange($payrollProfile->getId(), $dateFrom, $dateTo);

                // If payroll records are found, update the payroll details
                if ($payrollRecords) {
                    $payroll = $payrollRecords; // Assuming you get a collection and want the first record

                    $payrollDetails = [
                        'basic_salary' => $payroll->getBasicSalary(),
                        'overtime_salary' => $payroll->getOvertimeSalary(),
                        'total_salary' => $payroll->getTotalSalary(),
                        'total_deduction' => $payroll->getTotalDeduction(),
                        'net_salary' => $payroll->getNetSalary(),
                        'rendered_days' => $payroll->getRenderedDays(),
                        'date_generated' => $payroll->getDateGenerated() ? $payroll->getDateGenerated()->format('Y-m-d H:i:s') : null,
                        'date_start' => $payroll->getDateStart() ? $payroll->getDateStart()->format('Y-m-d') : null,
                        'date_end' => $payroll->getDateEnd() ? $payroll->getDateEnd()->format('Y-m-d') : null,
                    ];

                    $salaryAdjustment = $this->entityManager->getRepository(SalaryAdjustment::class)
                    ->findOneBy(['payroll' => $payroll->getId()]);

                    $employeeSalaryAdjustment = [
                        'daily_rate' => $salaryAdjustment ? $salaryAdjustment->getDailyRate() : 0.0,
                        'regular_days' => $salaryAdjustment ? $salaryAdjustment->getRegularDays() : 0.0,
                        'regular_days_pay' => $salaryAdjustment ? $salaryAdjustment->getRegularDaysPay() : 0.0,
                        'regular_ndot_hours' => $salaryAdjustment ? $salaryAdjustment->getRegularNdotHours() : 0.0,
                        'ot_meal_subsidy' => $salaryAdjustment ? $salaryAdjustment->getOtMealSubsidy() : 0.0,
                        'ot_meal_subsidy_amount' => $salaryAdjustment ? $salaryAdjustment->getOtMealSubsidyAmount() : 0.0,
                        'above_four_hours' => $salaryAdjustment ? $salaryAdjustment->getAboveFourHours() : 0.0,
                        'above_four_hours_amount' => $salaryAdjustment ? $salaryAdjustment->getAboveFourHoursAmount() : 0.0,
                        'temp_allowance_amount' => $salaryAdjustment ? $salaryAdjustment->getTempAllowanceAmount() : 0.0,
                        'wellness' => $salaryAdjustment ? $salaryAdjustment->getWellness() : 0.0,
                        'salary_adjustment' => $salaryAdjustment ? $salaryAdjustment->getSalaryAdjustment() : 0.0,
                        'total_salary_adjustment' => $salaryAdjustment ? $salaryAdjustment->getTotalSalaryAdjustment() : 0.0,
                        'regular_ndot_amount' => $salaryAdjustment ? $salaryAdjustment->getRegularNdotAmount() : 0.0,
                        'total_nontax_sal_adjustment' => $salaryAdjustment ? $salaryAdjustment->getTotalNontaxSalAdjustment() : 0.0,
                        'total_taxable_sal_adjustment' => $salaryAdjustment ? $salaryAdjustment->getTotalTaxableSalAdjustment() : 0.0,
                    ];


                    // Add the payroll profile with cash advance data to the response
                    $payrollProfiles[] = [
                        'employee_id' => $employee->getId(),
                        'fullname' => trim($fullname), // Trim any extra spaces if middle name is empty
                        'monthly_salary' => $payrollProfile->getMonthlySalary(),
                        'allowance' => $payrollProfile->getAllowance(),
                        'overtime_rate' => $payrollProfile->getOvertimeRate(),
                        'late_rate' => $payrollProfile->getLateRate(),
                        'payroll_details' => $payrollDetails,
                        'daily_rate' => $payrollProfile->getDailyRate(),
                        'salary_adjustment' => $employeeSalaryAdjustment,
                        'company_id' => $companyId,
                        'affiliated_company_id' => $companyId,
                        'company_name' => $companyName,
                    ];
                }
            } else {
                // If no payroll profile is found, still add the employee with default values
                $payrollProfiles[] = [
                    'employee_id' => $employee->getId(),
                    'fullname' => trim(sprintf('%s %s %s',
                        $employee->getLastName() . ',',
                        $employee->getFirstName(),
                        $employee->getMiddleName() ? $employee->getMiddleName() : ''
                    )),
                    'monthly_salary' => 0,
                    'allowance' => 0,
                    'overtime_rate' => 0,
                    'late_rate' => 0,
                    'payroll_details' => $payrollDetails,
                    'daily_rate' => 0,
                    'salary_adjustment' => [], // No salary adjustments
                    'company_id' => $companyId,
                    'affiliated_company_id' => $companyId,
                    'company_name' => $companyName,
                ];
            }
        }
        
        return new JsonResponse($payrollProfiles, JsonResponse::HTTP_OK);
    }

    #[Route('/api/gov-dues', name: 'get_gov_dues', methods: ['GET'])]
    public function getEmployeePayrollsGovDues(Request $request): JsonResponse
    {
        $data = $this->getRequestPayload($request);
        
        // Validate input
        if (!$data || !isset($data['dateFrom'], $data['dateTo'])) {
            return $this->json(['error' => 'Invalid input data.'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Fetch optional dateFrom and dateTo query parameters
        $dateFrom = new \DateTime($data['dateFrom']);
        $dateTo = new \DateTime($data['dateTo']);
    
        // Fetch all active employee records
        $activeEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active']);
        
        if (!$activeEmployees) {
            return new JsonResponse(['message' => 'No active employees found.'], JsonResponse::HTTP_OK);
        }
        
        $payrollProfiles = [];
        
        // Loop through active employees to get their payroll profiles
        foreach ($activeEmployees as $employee) {
            $company = $employee->getAffiliatedCompany();
            $companyId = $company?->getId();
            $companyName = $company?->getName();
            $payrollProfile = $this->entityManager->getRepository(EmployeePayrollProfile::class)->findOneBy(['employee_record' => $employee]);
    
            // Initialize default payroll details
            $payrollDetails = [
                'basic_salary' => 0,
                'overtime_salary' => 0,
                'total_salary' => 0,
                'total_deduction' => 0,
                'net_salary' => 0,
                'thirteenth_month_pay' => 0,
                'sss_share' => 0,
                'sss_employer_share' => 0,
                'sss_total' => 0,
                'philhealth_share' => 0,
                'philhealth_employer_share' => 0,
                'philhealth_total_share' => 0,
                'hdmf_contribution' => 0,
                'hdmf_employer_contribution' => 0,
                'hdmf_total_contribution' => 0,
                'insurance_contribution' => 0,
                'tax_contribution' => 0,
                'cash_advance_deduction' => 0,
                'undertime_deduction' => 0,
                'rendered_days' => 0,
                'date_generated' => null, // or use '0000-00-00 00:00:00' if preferred
                'date_start' => null, // or use '0000-00-00 00:00:00' if preferred
                'date_end' => null, // or use '0000-00-00 00:00:00' if preferred
                'hdmf_loan' => 0,
                'hdmf_calamity_loan' => 0,
                'hdmf_mp2' => 0,
                'sss_loan' => 0,
                'sss_calamity_loan' => 0,
                'cash_advance_total' => 0,
                
            ];
    
            if ($payrollProfile) {
                $fullname = sprintf('%s %s %s',
                    $employee->getLastName().',',
                    $employee->getFirstName(),
                    $employee->getMiddleName() ? $employee->getMiddleName() : ''
                );
    
                // Call the repository method to fetch the latest payroll record based on the profile and date range
                $payrollRecords  = $this->entityManager->getRepository(EmployeePayroll::class)
                    ->findByPayrollProfileAndDateRange($payrollProfile->getId(), $dateFrom, $dateTo);
    
                // If payroll records are found, update the payroll details
                if ($payrollRecords ) {
                    $payroll = $payrollRecords; // Assuming you get a collection and want the first record
                    
                    $payrollDetails = [
                        'basic_salary' => $payroll->getBasicSalary(),
                        'overtime_salary' => $payroll->getOvertimeSalary(),
                        'total_salary' => $payroll->getTotalSalary(),
                        'total_deduction' => $payroll->getTotalDeduction(),
                        'net_salary' => $payroll->getNetSalary(),
                        'thirteenth_month_pay' => $payroll->getThirteenthMonthPay(),
                        'sss_share' => $payroll->getSssShare(),
                        'sss_employer_share' => $payrollProfile->getEmployerSssContribution(),
                        'sss_total' => $payroll->getSssShare() + $payrollProfile->getEmployerSssContribution(),
                        'philhealth_share' => $payroll->getPhilhealthShare(),
                        'philhealth_employer_share' => $payrollProfile->getEmployerPhilhealthContribution(),
                        'philhealth_total_share' =>  $payroll->getPhilhealthShare() + $payrollProfile->getEmployerPhilhealthContribution(),
                        'hdmf_contribution' => $payroll->getHdmfContribution(),
                        'hdmf_employer_contribution' => $payrollProfile->getEmployerPagibigContribution(),
                        'hdmf_total_contribution' => $payroll->getHdmfContribution() + $payrollProfile->getEmployerPagibigContribution(),
                        'insurance_contribution' => $payroll->getInsuranceContribution(),
                        'tax_contribution' => $payroll->getTaxContribution(),
                        'cash_advance_deduction' => $payroll->getCashAdvanceDeduction(),
                        'undertime_deduction' => $payroll->getUndertimeDeduction(),
                        'rendered_days' => $payroll->getRenderedDays(),
                        'date_generated' => $payroll->getDateGenerated() ? $payroll->getDateGenerated()->format('Y-m-d H:i:s') : null,
                        'date_start' => $payroll->getDateStart() ? $payroll->getDateStart()->format('Y-m-d') : null,
                        'date_end' => $payroll->getDateEnd() ? $payroll->getDateEnd()->format('Y-m-d') : null,
                        'hdmf_loan' => $payroll->getHdmfLoan(),
                        'hdmf_calamity_loan' => $payroll->getHdmfCalamityLoan(),
                        'hdmf_mp2' => $payroll->getHdmfMp2(),
                        'sss_loan' => $payroll->getSssLoan(),
                        'sss_calamity_loan' => $payroll->getSssCalamityLoan(),
                        'cash_advance_total' => $payroll->getTotalCa(),
                    ];
                }
    
                // Add the payroll profile to the response
                $payrollProfiles[] = [
                    'employee_id' => $employee->getId(),
                    'fullname' => trim($fullname), // Trim any extra spaces if middle name is empty
                    'monthly_salary' => $payrollProfile->getMonthlySalary(),
                    'allowance' => $payrollProfile->getAllowance(),
                    'overtime_rate' => $payrollProfile->getOvertimeRate(),
                    'late_rate' => $payrollProfile->getLateRate(),
                    'payroll_details' => $payrollDetails,
                    'daily_rate' => $payrollProfile->getDailyRate(),
                ];
            } else {
                // If no payroll profile is found, still add the employee with default values
                $payrollProfiles[] = [
                    'employee_id' => $employee->getId(),
                    'fullname' => trim(sprintf('%s %s %s',
                        $employee->getLastName().',',
                        $employee->getFirstName(),
                        $employee->getMiddleName() ? $employee->getMiddleName() : ''
                    )), 
                    'monthly_salary' => 0,
                    'allowance' => 0,
                    'overtime_rate' => 0,
                    'late_rate' => 0,
                    'payroll_details' => $payrollDetails,
                    'daily_rate' => 0,
                ];
            }
        }
    
        return new JsonResponse($payrollProfiles, JsonResponse::HTTP_OK);
    }

    #[Route('/api/gov-total-dues', name: 'get_gov_dues', methods: ['GET'])]
    public function getEmployeePayrollsTotalGovDues(Request $request): JsonResponse
    {
        $data = $this->getRequestPayload($request);
        
        // Validate input
        if (!$data || !isset($data['dateFrom'], $data['dateTo'])) {
            return $this->json(['error' => 'Invalid input data.'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Fetch optional dateFrom and dateTo query parameters
        $dateFrom = new \DateTime($data['dateFrom']);
        $dateTo = new \DateTime($data['dateTo']);
    
        // Fetch all active employee records
        $activeEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active']);
        
        if (!$activeEmployees) {
            return new JsonResponse(['message' => 'No active employees found.'], JsonResponse::HTTP_OK);
        }
        
        $payrollProfiles = [];
        
        // Loop through active employees to get their payroll profiles
        foreach ($activeEmployees as $employee) {
            $payrollProfile = $this->entityManager->getRepository(EmployeePayrollProfile::class)->findOneBy(['employee_record' => $employee]);
    
            // Initialize default payroll details
            $payrollDetails = [
                'basic_salary' => 0,
                'overtime_salary' => 0,
                'total_salary' => 0,
                'total_deduction' => 0,
                'net_salary' => 0,
                'thirteenth_month_pay' => 0,
                'sss_share' => 0,
                'sss_employer_share' => 0,
                'sss_total' => 0,
                'philhealth_share' => 0,
                'philhealth_employer_share' => 0,
                'philhealth_total_share' => 0,
                'hdmf_contribution' => 0,
                'hdmf_employer_contribution' => 0,
                'hdmf_total_contribution' => 0,
                'insurance_contribution' => 0,
                'tax_contribution' => 0,
                'cash_advance_deduction' => 0,
                'undertime_deduction' => 0,
                'rendered_days' => 0,
                'date_generated' => null, // or use '0000-00-00 00:00:00' if preferred
                'date_start' => null, // or use '0000-00-00 00:00:00' if preferred
                'date_end' => null, // or use '0000-00-00 00:00:00' if preferred
                'hdmf_loan' => 0,
                'hdmf_calamity_loan' => 0,
                'hdmf_mp2' => 0,
                'sss_loan' => 0,
                'sss_calamity_loan' => 0,
                'cash_advance_total' => 0,
                
            ];

            $sss_no         = '';
            $pagibig_no     = '';
            $philhealth_no  = '';
            $tin_no         = '';

            if($employee->getEmployeeAdditionalRecords()){
                $addtional_records = $employee->getEmployeeAdditionalRecords();
                $sss_no         = $addtional_records->getSssNumber() ?? '';
                $pagibig_no     = $addtional_records->getPagibigNumber() ?? '';
                $philhealth_no  = $addtional_records->getPhilhealthNumber() ?? '';
                $tin_no         = $addtional_records->getTinNumber() ?? '';
            }
    
            if ($payrollProfile) {
                $fullname = sprintf('%s %s %s',
                    $employee->getLastName().',',
                    $employee->getFirstName(),
                    $employee->getMiddleName() ? $employee->getMiddleName() : ''
                );


    
                // Call the repository method to fetch the latest payroll record based on the profile and date range
                $payrollRecords  = $this->entityManager->getRepository(EmployeePayroll::class)
                    ->findByPayrollProfileAndDateRange($payrollProfile->getId(), $dateFrom, $dateTo);
    
                // If payroll records are found, update the payroll details
                if ($payrollRecords ) {
                    $payroll = $payrollRecords; // Assuming you get a collection and want the first record
                    
                    $payrollDetails = [
                        'basic_salary' => $payroll->getBasicSalary(),
                        'overtime_salary' => $payroll->getOvertimeSalary(),
                        'total_salary' => $payroll->getTotalSalary(),
                        'total_deduction' => $payroll->getTotalDeduction(),
                        'net_salary' => $payroll->getNetSalary(),
                        'thirteenth_month_pay' => $payroll->getThirteenthMonthPay(),
                        'sss_share' => $payroll->getSssShare(),
                        'sss_employer_share' => $payrollProfile->getEmployerSssContribution(),
                        'sss_total' => $payroll->getSssShare() + $payrollProfile->getEmployerSssContribution(),
                        'philhealth_share' => $payroll->getPhilhealthShare(),
                        'philhealth_employer_share' => $payrollProfile->getEmployerPhilhealthContribution(),
                        'philhealth_total_share' =>  $payroll->getPhilhealthShare() + $payrollProfile->getEmployerPhilhealthContribution(),
                        'hdmf_contribution' => $payroll->getHdmfContribution(),
                        'hdmf_employer_contribution' => $payrollProfile->getEmployerPagibigContribution(),
                        'hdmf_total_contribution' => $payroll->getHdmfContribution() + $payrollProfile->getEmployerPagibigContribution(),
                        'insurance_contribution' => $payroll->getInsuranceContribution(),
                        'tax_contribution' => $payroll->getTaxContribution(),
                        'cash_advance_deduction' => $payroll->getCashAdvanceDeduction(),
                        'undertime_deduction' => $payroll->getUndertimeDeduction(),
                        'rendered_days' => $payroll->getRenderedDays(),
                        'date_generated' => $payroll->getDateGenerated() ? $payroll->getDateGenerated()->format('Y-m-d H:i:s') : null,
                        'date_start' => $payroll->getDateStart() ? $payroll->getDateStart()->format('Y-m-d') : null,
                        'date_end' => $payroll->getDateEnd() ? $payroll->getDateEnd()->format('Y-m-d') : null,
                        'hdmf_loan' => $payroll->getHdmfLoan(),
                        'hdmf_calamity_loan' => $payroll->getHdmfCalamityLoan(),
                        'hdmf_mp2' => $payroll->getHdmfMp2(),
                        'sss_loan' => $payroll->getSssLoan(),
                        'sss_calamity_loan' => $payroll->getSssCalamityLoan(),
                        'cash_advance_total' => $payroll->getTotalCa(),
                    ];
                }
    
                // Add the payroll profile to the response
                $payrollProfiles[] = [
                    'employee_id' => $employee->getId(),
                    'fullname' => trim($fullname), // Trim any extra spaces if middle name is empty
                    'monthly_salary' => $payrollProfile->getMonthlySalary(),
                    'allowance' => $payrollProfile->getAllowance(),
                    'overtime_rate' => $payrollProfile->getOvertimeRate(),
                    'late_rate' => $payrollProfile->getLateRate(),
                    'payroll_details' => $payrollDetails,
                    'daily_rate' => $payrollProfile->getDailyRate(),
                    'sss_no'        => $sss_no,
                    'pagibig_no'    => $pagibig_no,
                    'philhealth_no' => $philhealth_no,
                    'tin_no'        => $tin_no,
                    'company_id' => $companyId,
                    'affiliated_company_id' => $companyId,
                    'company_name' => $companyName,
                ];
            } 
            else {
                // If no payroll profile is found, still add the employee with default values
                $payrollProfiles[] = [
                    'employee_id' => $employee->getId(),
                    'fullname' => trim(sprintf('%s %s %s',
                        $employee->getLastName().',',
                        $employee->getFirstName(),
                        $employee->getMiddleName() ? $employee->getMiddleName() : ''
                    )), 
                    'monthly_salary' => 0,
                    'allowance' => 0,
                    'overtime_rate' => 0,
                    'late_rate' => 0,
                    'payroll_details' => $payrollDetails,
                    'daily_rate' => 0,
                    'sss_no'        => $sss_no,
                    'pagibig_no'    => $pagibig_no,
                    'philhealth_no' => $philhealth_no,
                    'tin_no'        => $tin_no,
                    'company_id' => $companyId,
                    'affiliated_company_id' => $companyId,
                    'company_name' => $companyName,
                ];
            }
        }
    
        return new JsonResponse($payrollProfiles, JsonResponse::HTTP_OK);
    }

    #[Route('/api/company-gov-total-dues', name: 'get_company_gov_dues', methods: ['GET'])] 
    public function getCompanyEmployeePayrollsTotalGovDues(Request $request): JsonResponse
    {
        $data = $this->getRequestPayload($request);
        
        // Validate input
        if (!$data || !isset($data['dateFrom'], $data['dateTo'], $data['company_id'])) {
            return $this->json(['error' => 'Invalid input data.'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Fetch date range parameters
        $dateFrom = new \DateTime($data['dateFrom']);
        $dateTo = new \DateTime($data['dateTo']);
    
        // Fetch all active employee records for the given company
        $activeEmployees = $this->entityManager->getRepository(EmployeeRecords::class)->findBy([
            'employee_status' => 'Active', 
            'affiliated_company' => $data['company_id']
        ]);

        $selectedCompany = $this->entityManager->getRepository(AffiliatedCompany::class)->find($data['company_id']);
    
        if (!$activeEmployees) {
            return new JsonResponse(['message' => 'No active employees found.'], JsonResponse::HTTP_OK);
        }

        $basic_salary                   = 0;
        $overtime_salary                = 0;
        $total_salary                   = 0;
        $total_deduction                = 0;
        $net_salary                     = 0;
        $thirteenth_month_pay           = 0;
        $sss_share                      = 0;
        $sss_employer_share             = 0;
        $sss_total                      = 0;
        $philhealth_share               = 0;
        $philhealth_employer_share      = 0;
        $philhealth_total_share         = 0;
        $hdmf_contribution              = 0;
        $hdmf_employer_contribution     = 0;
        $hdmf_total_contribution        = 0;
        $insurance_contribution         = 0;
        $tax_contribution               = 0;
        $cash_advance_deduction         = 0;
        $undertime_deduction            = 0;
        $rendered_days                  = 0;
        $hdmf_loan                      = 0;
        $hdmf_calamity_loan             = 0;
        $hdmf_mp2                       = 0;
        $sss_loan                       = 0;
        $sss_calamity_loan              = 0;
        $cash_advance_total             = 0;

    
        // Loop through active employees to accumulate payroll data
        foreach ($activeEmployees as $employee) {
            $payrollProfile = $this->entityManager->getRepository(EmployeePayrollProfile::class)->findOneBy(['employee_record' => $employee]);
            
            if ($payrollProfile) {
                // Fetch payroll records for the profile within the date range
                $payrollRecords = $this->entityManager->getRepository(EmployeePayroll::class)
                    ->findByPayrollProfileAndDateRange($payrollProfile->getId(), $dateFrom, $dateTo);
                // Accumulate totals from each payroll record
                if($payrollRecords){
                    $basic_salary                    += $payrollRecords->getBasicSalary();
                    $overtime_salary                 += $payrollRecords->getOvertimeSalary();
                    $total_salary                    += $payrollRecords->getTotalSalary();
                    $total_deduction                 += $payrollRecords->getTotalDeduction();
                    $net_salary                      += $payrollRecords->getNetSalary();
                    $thirteenth_month_pay            += $payrollRecords->getThirteenthMonthPay();
                    $sss_share                       += $payrollRecords->getSssShare();
                    $sss_employer_share              += $payrollProfile->getEmployerSssContribution();
                    $sss_total                       += $payrollRecords->getSssShare() + $payrollProfile->getEmployerSssContribution();
                    $philhealth_share                += $payrollRecords->getPhilhealthShare();
                    $philhealth_employer_share       += $payrollProfile->getEmployerPhilhealthContribution();
                    $philhealth_total_share          += $payrollRecords->getPhilhealthShare() + $payrollProfile->getEmployerPhilhealthContribution();
                    $hdmf_contribution               += $payrollRecords->getHdmfContribution();
                    $hdmf_employer_contribution      += $payrollProfile->getEmployerPagibigContribution();
                    $hdmf_total_contribution         += $payrollRecords->getHdmfContribution() + $payrollProfile->getEmployerPagibigContribution();
                    $insurance_contribution          += $payrollRecords->getInsuranceContribution();
                    $tax_contribution                += $payrollRecords->getTaxContribution();
                    $cash_advance_deduction          += $payrollRecords->getCashAdvanceDeduction();
                    $undertime_deduction             += $payrollRecords->getUndertimeDeduction();
                    $rendered_days                   += $payrollRecords->getRenderedDays();
                    $hdmf_loan                       += $payrollRecords->getHdmfLoan();
                    $hdmf_calamity_loan              += $payrollRecords->getHdmfCalamityLoan();
                    $hdmf_mp2                        += $payrollRecords->getHdmfMp2();
                    $sss_loan                        += $payrollRecords->getSssLoan();
                    $sss_calamity_loan               += $payrollRecords->getSssCalamityLoan();
                    $cash_advance_total              += $payrollRecords->getTotalCa();
                }
            }
        }
    
        // Return totals as JSON response
        return new JsonResponse([
            'company_id' => $selectedCompany?->getId(),
            'affiliated_company_id' => $selectedCompany?->getId(),
            'company_name' => $selectedCompany->getName() ?? '',
            'basic_salary' => $basic_salary,
            'overtime_salary' => $overtime_salary,
            'total_salary' => $total_salary,
            'total_deduction' => $total_deduction,
            'net_salary' => $net_salary,
            'thirteenth_month_pay' => $thirteenth_month_pay,
            'sss_share' => $sss_share,
            'sss_employer_share' => $sss_employer_share,
            'sss_total' => $sss_total,
            'philhealth_share' => $philhealth_share,
            'philhealth_employer_share' => $philhealth_employer_share,
            'philhealth_total_share' => $philhealth_total_share,
            'hdmf_contribution' => $hdmf_contribution,
            'hdmf_employer_contribution' => $hdmf_employer_contribution,
            'hdmf_total_contribution' => $hdmf_total_contribution,
            'insurance_contribution' => $insurance_contribution,
            'tax_contribution' => $tax_contribution,
            'cash_advance_deduction' => $cash_advance_deduction,
            'undertime_deduction' => $undertime_deduction,
            'rendered_days' => $rendered_days,
            'hdmf_loan' => $hdmf_loan,
            'hdmf_calamity_loan' => $hdmf_calamity_loan,
            'hdmf_mp2' => $hdmf_mp2,
            'sss_loan' => $sss_loan,
            'sss_calamity_loan' => $sss_calamity_loan,
            'cash_advance_total' => $cash_advance_total,
        ], JsonResponse::HTTP_OK);
    }

    #[Route('/api/get-payroll-summary', name: 'get_payroll_summary', methods: ['GET'])] 
    public function getPayrollSummaryData(Request $request): JsonResponse
    {

        $data = $this->getRequestPayload($request);
        
        // Validate input
        if (!$data || !isset($data['dateFrom'], $data['dateTo'])) {
            return $this->json(['error' => 'Invalid input data.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Fetch date range parameters
        $dateFrom = new \DateTime($data['dateFrom']);
        $dateTo = new \DateTime($data['dateTo']);

        $companyPayrollSummary = [];
        $allCompanies = $this->entityManager->getRepository(AffiliatedCompany::class)->findAll();
        foreach ($allCompanies as $company) {
            // Process each $company object here
            $companyGrossSalary         = 0;
            $companyTotalSSS            = 0;
            $companyTotalPhilHealth     = 0;
            $companyTotalTax            = 0;
            $companyTotalHDMF           = 0;
            $companyTotalMP2            = 0;
            $companyTotalHDMFLoan       = 0;
            $companyTotalHDMFCalamity   = 0;
            $companyTotalSSSLoan        = 0;
            $companyTotalCashAdvance    = 0;
            $companyTotal13thMonthPay   = 0;
            $companyTotalNetSalary      = 0;
            $companyTotalTaxShield      = 0;

            $count = 0;
            $employeeListWithCompany = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['affiliated_company' => $company->getId()]);
            foreach($employeeListWithCompany as $employee){
                //find payroll profile
                $payrollProfile = $this->entityManager->getRepository(EmployeePayrollProfile::class)->findOneBy(['employee_record' => $employee]);
                if($payrollProfile){
                    $payrollRecords = $this->entityManager->getRepository(EmployeePayroll::class)
                    ->findByPayrollProfileAndDateRange($payrollProfile->getId(), $dateFrom, $dateTo);

                    if($payrollRecords){

                        $companyGrossSalary         += $payrollRecords->getTotalSalary() ?? 0;
                        $companyTotalSSS            += $payrollRecords->getSssShare() ?? 0;
                        $companyTotalPhilHealth     += $payrollRecords->getPhilhealthShare() ?? 0;
                        $companyTotalTax            += $payrollRecords->getTaxContribution() ?? 0;
                        $companyTotalHDMF           += $payrollRecords->getHdmfContribution() ?? 0;
                        $companyTotalMP2            += $payrollRecords->getHdmfMp2() ?? 0;
                        $companyTotalHDMFLoan       += $payrollRecords->getHdmfLoan() ?? 0;
                        $companyTotalHDMFCalamity   += $payrollRecords->getHdmfCalamityLoan() ?? 0;
                        $companyTotalSSSLoan        += $payrollRecords->getSssLoan() ?? 0;
                        $companyTotalCashAdvance    += $payrollRecords->getTotalCa() ?? 0;
                        $companyTotal13thMonthPay   += $payrollRecords->getThirteenthMonthPay() ?? 0;
                        $companyTotalNetSalary      += $payrollRecords->getNetSalary() ?? 0;
                        $companyTotalTaxShield      += $payrollRecords->getTotalTaxShield() ?? 0;
                    }
                    else{
                        $companyGrossSalary         += 0;
                        $companyTotalSSS            += 0;
                        $companyTotalPhilHealth     += 0;
                        $companyTotalTax            += 0;
                        $companyTotalHDMF           += 0;
                        $companyTotalMP2            += 0;
                        $companyTotalHDMFLoan       += 0;
                        $companyTotalHDMFCalamity   += 0;
                        $companyTotalSSSLoan        += 0;
                        $companyTotalCashAdvance    += 0;
                        $companyTotal13thMonthPay   += 0;
                        $companyTotalNetSalary      += 0;
                        $companyTotalTaxShield      += 0;
                    }
                }
            }

            $companyPayrollSummary[] = [
                'company_id'               => $company->getId(),
                'affiliated_company_id'    => $company->getId(),
                'company_code'              =>  $company->getCode(),
                'company_name'              =>  $company->getName(),
                'companyGrossSalary'        =>  $companyGrossSalary,
                'companyTotalSSS'           =>  $companyTotalSSS,
                'companyTotalPhilHealth'    =>  $companyTotalPhilHealth,
                'companyTotalTax'           =>  $companyTotalTax,
                'companyTotalHDMF'          =>  $companyTotalHDMF,
                'companyTotalMP2'           =>  $companyTotalMP2,
                'companyTotalHDMFLoan'      =>  $companyTotalHDMFLoan,
                'companyTotalHDMFCalamity'  =>  $companyTotalHDMFCalamity,
                'companyTotalSSSLoan'       =>  $companyTotalSSSLoan,
                'companyTotalCashAdvance'   =>  $companyTotalCashAdvance,
                'companyTotal13thMonthPay'  =>  $companyTotal13thMonthPay,
                'companyTotalNetSalary'     =>  $companyTotalNetSalary,
                'companyTotalTaxShield'     =>  $companyTotalTaxShield,
            ];
        }
        // print_r(json_encode());
        return new JsonResponse($companyPayrollSummary, JsonResponse::HTTP_OK);
    }


    // Separate methods for calculations to enhance readability
    private function calculateSSSDeductions(float $basic_salary, array $sss_contribution): float
    {
        foreach ($sss_contribution as $sss_row) {
            if ($basic_salary > round($sss_row->getRangeStart(), 2) && $basic_salary <= round($sss_row->getRangeEnd(), 2)) {
                return $sss_row->getContributionTotalEe();
            }
        }
        return 0;
    }

    private function calculatePhilHealthDeduction(float $basic_salary, $philhealth_contribution): float
    {
        $philhealth_rate = $philhealth_contribution->getEmployeeShare() / 100;

        if ($basic_salary > $philhealth_contribution->getMinimumCap()) {
            return min($basic_salary, $philhealth_contribution->getMaximumCap()) * $philhealth_rate;
        }
        return $philhealth_contribution->getMinimumCap() * $philhealth_rate;
    }

    private function calculatePagIbigDeduction(float $basic_salary, $pagibig_contribution): float
    {
        $hdmf_rate = $pagibig_contribution->getEmployeeShare() / 100;
        
        if ($basic_salary > 1500) {
            return min($basic_salary, $pagibig_contribution->getMonthlyCompensationCap()) * $hdmf_rate;
        }
        return $basic_salary * 0.01; // Assuming 1% deduction if below 1500
    }

    private function calculateTaxDeduction(float $totalSalary): float
    {
        $taxRepo = $this->entityManager->getRepository(TaxConfig::class);
        $taxConfigs = $taxRepo->findAll();
        foreach ($taxConfigs as $taxConfig) {
            $totalSalary = ($totalSalary); // You might want to multiply by 12 for monthly to annual conversion
            $tax_range_start = $taxConfig->getTaxBracketRange();
            $tax_range_end = $taxConfig->getTaxBracketRangeEnd();

            if ($totalSalary > $tax_range_start && $totalSalary <= $tax_range_end) {
                $excess_income = $totalSalary - $tax_range_start;
                return round(($taxConfig->getTaxDeductionAmount()) + ($excess_income * ($taxConfig->getTaxDeductionPercent() / 100) ), 2);
            }
        }
        return 0;
    }

    private function calculateLoanDeduction(EmployeePayrollProfile $payrollProfile): float
    {
        $total_loan_deductions = 0;
        $total_loan_deductions = $payrollProfile->getSssLoanDeduction() + $payrollProfile->getHdmfLoanDeduction() + $payrollProfile->getCashAdvanceDeduction() + $payrollProfile->getOtherLoansDeduction();
        return $total_loan_deductions;
    }

    private function deductLoans(EmployeePayrollProfile $payrollProfile, EmployeeRecords $empRecord)
    {
        $total_sss_loan = $payrollProfile->getSssLoan() - $payrollProfile->getSssLoanDeduction();
        $total_hdmf_loan = $payrollProfile->getHdmfLoan() - $payrollProfile->getHdmfLoanDeduction();
        $total_cashadvance_loan = $payrollProfile->getCashAdvance() - $payrollProfile->getCashAdvanceDeduction();
        $total_other_loan = $payrollProfile->getOtherLoans() - $payrollProfile->getOtherLoansDeduction();

        //Generate Loan History
        $newLoanHistoryRepo = new LoanHistory();
        $newLoanHistoryRepo->setSssLoan($payrollProfile->getSssLoan());
        $newLoanHistoryRepo->setSssLoanDeduction($total_sss_loan);
        $newLoanHistoryRepo->setHdmfLoan($payrollProfile->getHdmfLoan());
        $newLoanHistoryRepo->setHdmfLoanDeduction($total_hdmf_loan);
        $newLoanHistoryRepo->setCashAdvance($payrollProfile->getCashAdvance());
        $newLoanHistoryRepo->setCashAdvanceDeduction($total_cashadvance_loan);
        $newLoanHistoryRepo->setOtherLoans($payrollProfile->getOtherLoans());
        $newLoanHistoryRepo->setOtherLoansDeduction($total_other_loan);
        $newLoanHistoryRepo->setEmployeeRecord($empRecord);
        $newLoanHistoryRepo->setCreatedAt(new \DateTimeImmutable());
        $this->entityManager->persist($newLoanHistoryRepo);

        //Update Payroll Profile
        $payrollProfile->setSssLoan($total_sss_loan);
        $payrollProfile->setHdmfLoan($total_hdmf_loan);
        $payrollProfile->setCashAdvance($total_cashadvance_loan);
        $payrollProfile->setOtherLoans($total_other_loan);
        $this->entityManager->persist($payrollProfile);
    }

    // Separate methods for calculations to enhance readability
    private function calculateEmployerSSSDeductions(float $basic_salary, array $sss_contribution): float
    {
        foreach ($sss_contribution as $sss_row) {
            if ($basic_salary > round($sss_row->getRangeStart(), 2) && $basic_salary <= round($sss_row->getRangeEnd(), 2)) {
                return $sss_row->getContributionTotalEr();
            }
        }
        return 0;
    }

    private function calculateEmployerPhilHealthDeduction(float $basic_salary, $philhealth_contribution): float
    {
        $philhealth_rate = $philhealth_contribution->getEmployerShare() / 100;

        if ($basic_salary > $philhealth_contribution->getMinimumCap()) {
            return min($basic_salary, $philhealth_contribution->getMaximumCap()) * $philhealth_rate;
        }
        return $philhealth_contribution->getMinimumCap() * $philhealth_rate;
    }

    private function calculateEmployerPagIbigDeduction(float $basic_salary, $pagibig_contribution): float
    {
        $hdmf_rate = $pagibig_contribution->getEmployerShare() / 100;
        
        if ($basic_salary > 1500) {
            return min($basic_salary, $pagibig_contribution->getMonthlyCompensationCap()) * $hdmf_rate;
        }
        return $basic_salary * 0.01; // Assuming 1% deduction if below 1500
    }

    // Function to create or update CashAdvance entity
    private function saveCashAdvance(array $data, EmployeePayrollProfile $payrollProfile): array
    {
        // Check if there is a cash_advance_array in the provided data
        if (!isset($data['cash_advance_array'])) {
            return ['status' => 'error', 'message' => 'No cash advance data provided'];
        }
    
        // Iterate over each cash advance entry in the array
        foreach ($data['cash_advance_array'] as $cashAdvanceData) {
            // If an ID is provided in the cash advance data, find the existing entity for updating
            $cashAdvance = null;
            if (!empty($cashAdvanceData['id'])) {
                $cashAdvance = $this->entityManager->getRepository(CashAdvance::class)->find($cashAdvanceData['id']);
            }
    
            // If no entity was found (ID provided but no matching record), create a new one
            if (!$cashAdvance) {
                $cashAdvance = new CashAdvance();
            }
    
            // Set fields from provided cash advance data
            $cashAdvance->setPayrollProfile($payrollProfile);
            $cashAdvance->setCashAdvanceAmount($cashAdvanceData['cash_advance_amount'] ?? 0);
            $cashAdvance->setCashAdvanceDeduction($cashAdvanceData['cash_advance_deduction'] ?? 0);
            $cashAdvance->setDateStart(new \DateTime($cashAdvanceData['date_start'] ?? 'now'));
            $cashAdvance->setRemarks($cashAdvanceData['cash_remarks'] ?? '');
    
            // Persist the entity (but don't flush yet)
            $this->entityManager->persist($cashAdvance);
        }

        return ['status' => 'success'];
    }

    // Function to create or update SSS Loans entity
    private function saveSSSLoans(array $data, EmployeePayrollProfile $payrollProfile): array
    {
        // Check if there is a cash_advance_array in the provided data
        if (!isset($data['sss_loan_array'])) {
            return ['status' => 'error', 'message' => 'No cash advance data provided'];
        }
    
        // Iterate over each cash advance entry in the array
        foreach ($data['sss_loan_array'] as $sssLoanData) {
            // If an ID is provided in the cash advance data, find the existing entity for updating
            $sssLoan = null;
            if (!empty($sssLoanData['id'])) {
                $sssLoan = $this->entityManager->getRepository(SSSLoans::class)->find($sssLoanData['id']);
            }
    
            // If no entity was found (ID provided but no matching record), create a new one
            if (!$sssLoan) {
                $sssLoan = new SSSLoans();
            }
    
            // Set fields from provided cash advance data
            $sssLoan->setPayrollProfile($payrollProfile);
            $sssLoan->setAmount($sssLoanData['sss_amount'] ?? 0);
            $sssLoan->setDeduction($sssLoanData['sss_deduction'] ?? 0);
            $sssLoan->setDate(new \DateTime($sssLoanData['date_start'] ?? 'now'));
            $sssLoan->setRemark($sssLoanData['remarks'] ?? '');
    
            // Persist the entity (but don't flush yet)
            $this->entityManager->persist($sssLoan);
        }

        return ['status' => 'success'];
    }

    // Function to create or update Pagibig Loans entity
    private function savePagibigLoans(array $data, EmployeePayrollProfile $payrollProfile): array
    {
        // Check if there is a cash_advance_array in the provided data
        if (!isset($data['pagibig_loan_array'])) {
            return ['status' => 'error', 'message' => 'No cash advance data provided'];
        }
    
        // Iterate over each cash advance entry in the array
        foreach ($data['pagibig_loan_array'] as $pagibigData) {
            // If an ID is provided in the cash advance data, find the existing entity for updating
            $pagibigLoan = null;
            if (!empty($pagibigData['id'])) {
                $pagibigLoan = $this->entityManager->getRepository(PagibigLoans::class)->find($pagibigData['id']);
            }
    
            // If no entity was found (ID provided but no matching record), create a new one
            if (!$pagibigLoan) {
                $pagibigLoan = new PagibigLoans();
            }
    
            // Set fields from provided cash advance data
            $pagibigLoan->setPayrollProfile($payrollProfile);
            $pagibigLoan->setAmount($pagibigData['pagibig_amount'] ?? 0);
            $pagibigLoan->setDeduction($pagibigData['pagibig_deduction'] ?? 0);
            $pagibigLoan->setDate(new \DateTime($pagibigData['date_start'] ?? 'now'));
            $pagibigLoan->setRemark($pagibigData['remarks'] ?? '');
    
            // Persist the entity (but don't flush yet)
            $this->entityManager->persist($pagibigLoan);
        }
        return ['status' => 'success'];
    }
}
