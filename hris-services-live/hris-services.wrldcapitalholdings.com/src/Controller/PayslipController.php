<?php

namespace App\Controller;

use App\Service\AuditLog;
use App\Entity\EmployeePayroll;
use App\Service\UserAccessValidation;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\EmployeePayrollRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class PayslipController extends AbstractController
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
    
    #[Route('api/payslip', name: 'app_payslip', methods: ['POST'])]
    public function getPayroll(Request $request, EmployeePayrollRepository $payrollRepository): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
    
        // Validate input
        if (!$data || !isset($data['payroll_id'])) {
            return $this->json(['error' => 'Invalid input data.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Fetch optional dateFrom and dateTo query parameters
        // $dateFrom = $data['dateFrom'] ? new \DateTime($data['dateFrom']) : null;
        // $dateTo = $data['dateTo'] ? new \DateTime($data['dateTo']) : null;

        // Fetch the payroll record based on the provided payroll_id
        $payroll = $payrollRepository->find($data['payroll_id']);
    
        // If payroll not found, return an error message
        if (!$payroll) {
            return $this->json([
                'error' => 'Payroll record not found',
            ], JsonResponse::HTTP_NOT_FOUND);
        }
    
        // Fetch the payroll profile associated with the employee (if exists)
        $payrollProfile = $payroll->getPayrollProfile();
    
        // Prepare response data
        $payrollData = [
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
            'date_generated' => $payroll->getDateGenerated()?->format('Y-m-d H:i:s'),
            'date_start' => $payroll->getDateStart()?->format('Y-m-d'),
            'date_end' => $payroll->getDateEnd()?->format('Y-m-d'),
            'total_tax_shield' => $payroll->getTotalTaxShield(),
            'cash_advance' => $payroll->getTotalCa(),
            'sss_calamity_loan' => $payroll->getSssCalamityLoan(),
            'sss_loan' => $payroll->getSssLoan(),
            'hdmf_loan' => $payroll->getHdmfLoan(),
        ];
    
        if ($payrollProfile) {
            $employeeRecord = $payrollProfile->getEmployeeRecord();
            $additionalRecords = $employeeRecord ? $employeeRecord->getEmployeeAdditionalRecords() : null;
        
            $payrollData['employee_payroll_profile'] = [
                'emp_name' => $employeeRecord ? $employeeRecord->getLastName() . ', ' . $employeeRecord->getFirstName() . ' ' . $employeeRecord->getMiddleName() : '',
                'emp_code' => $employeeRecord ? $employeeRecord->getEmployeeCode() : '',
                'sss_num' => $additionalRecords ? $additionalRecords->getSssNumber() ?? '' : '',
                'philhealth_num' => $additionalRecords ? $additionalRecords->getPhilhealthNumber() ?? '' : '',
                'pagibig_num' => $additionalRecords ? $additionalRecords->getPagibigNumber() ?? '' : '',
                'tax_num' => $additionalRecords ? $additionalRecords->getTinNumber() ?? '' : '',
                'monthly_salary' => $payrollProfile->getMonthlySalary(),
                'allowance' => $payrollProfile->getAllowance(),
                'overtime_rate' => $payrollProfile->getOvertimeRate(),
                'late_rate' => $payrollProfile->getLateRate(),
                'sss_loan' => $payrollProfile->getSssLoan(),
                'sss_loan_deduction' => $payrollProfile->getSssLoanDeduction(),
                'hdmf_loan' => $payrollProfile->getHdmfLoan(),
                'hdmf_loan_deduction' => $payrollProfile->getHdmfLoanDeduction(),
                'cash_advance' => $payrollProfile->getCashAdvance(),
                'cash_advance_deduction' => $payrollProfile->getCashAdvanceDeduction(),
                'other_loans' => $payrollProfile->getOtherLoans(),
                'other_loans_deduction' => $payrollProfile->getOtherLoansDeduction(),
                'employer_sss_contribution' => $payrollProfile->getEmployerSssContribution(),
                'employer_pagibig_contribution' => $payrollProfile->getEmployerPagibigContribution(),
                'employer_philhealth_contribution' => $payrollProfile->getEmployerPhilhealthContribution(),
                'accident_insurance' => $payrollProfile->getAccidentInsurance(),
                'thirteenth_month_pay' => $payrollProfile->getThirteenthMonthPay(),
                'daily_rate' => $payrollProfile->getDailyRate(),
                'hourly_rate' => $payrollProfile->getHourlyRate(),
                'daily_rate_non_tax' => $payrollProfile->getDailyRateNonTax(),
                'allowance_non_tax' => $payrollProfile->getAllowanceNonTax(),
            ];

            $dateGenerated = $payroll->getDateGenerated();
            $year = $dateGenerated->format('Y');

            // Set dateFrom to January 1 of the extracted year
            $dateFrom = new \DateTime("$year-01-01");

            // Set dateTo to December 31 of the extracted year
            $dateTo = new \DateTime("$year-12-31");

            // Optionally, ensure dateTo is at the end of the day
            $dateTo->setTime(23, 59, 59);

            // Call the repository method to fetch the latest payroll record based on the profile and date range
            $payrollRecords  = $this->entityManager->getRepository(EmployeePayroll::class)
            ->findByPayrollProfileAndDateRangeList($payrollProfile->getId(), $dateFrom, $dateTo);

            $ytdGrossIncome = 0;
            $ytdSSS         = 0;
            $ytdPhilHealth  = 0;
            $ytdPagIbig     = 0;
            $ytdTax         = 0;
            $ytdNetPay      = 0;

            // Iterate through each payroll record and accumulate totals
            foreach ($payrollRecords as $record) {
                $ytdGrossIncome += $record->getTotalSalary();      // Total salary includes basic and overtime
                $ytdSSS += $record->getSssShare();
                $ytdPhilHealth += $record->getPhilhealthShare();
                $ytdPagIbig += $record->getHdmfContribution();     // HDMF is for PagIbig
                $ytdTax += $record->getTaxContribution();
                $ytdNetPay += $record->getNetSalary();
            }

            // // Output results or pass to the view
            // echo "YTD Gross Income: " . $ytdGrossIncome . "\n";
            // echo "YTD SSS: " . $ytdSSS . "\n";
            // echo "YTD PhilHealth: " . $ytdPhilHealth . "\n";
            // echo "YTD PagIbig: " . $ytdPagIbig . "\n";
            // echo "YTD Tax: " . $ytdTax . "\n";
            // echo "YTD Net Pay: " . $ytdNetPay . "\n";

            $payrollData['year_to_date'] = [
                'ytdGrossIncome' => $ytdGrossIncome,
                'ytdSSS' => $ytdSSS,
                'ytdPagIbig' => $ytdPagIbig,
                'ytdPhilHealth' => $ytdPhilHealth,
                'ytdTax' => $ytdTax,
                'ytdNetPay' => $ytdNetPay,
            ];
        }
        
        // Return the payroll data as a JSON response
        return $this->json($payrollData);
    }
    
}
