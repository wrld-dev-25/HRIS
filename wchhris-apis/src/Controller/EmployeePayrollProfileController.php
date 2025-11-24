<?php

namespace App\Controller;

use DateTime;
use App\Entity\Worker;
use App\Entity\SSSLoans;
use App\Entity\SSSConfig;
use App\Entity\TaxConfig;
use App\Service\AuditLog;
use App\Entity\Department;
use App\Entity\CashAdvance;
use App\Entity\LoanHistory;
use App\Entity\PagibigLoans;
use App\Entity\PagibigConfig;
use App\Entity\EmployeeRecords;
use App\Entity\PhilHealthConfig;
use App\Service\NotificationService;
use App\Service\UserAccessValidation;
use App\Entity\EmployeePayrollProfile;
use App\Repository\SSSLoansRepository;
use App\Repository\SSSConfigRepository;
use App\Repository\TaxConfigRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CashAdvanceRepository;
use App\Repository\LoanHistoryRepository;
use App\Repository\PagibigLoansRepository;
use App\Repository\PagibigConfigRepository;
use App\Repository\EmployeePayrollRepository;
use App\Repository\EmployeeRecordsRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\PhilHealthConfigRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\EmployeePayrollProfileRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class EmployeePayrollProfileController extends AbstractController
{
    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $validateAccess;
    private $notification;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, UserAccessValidation $validateAccess, NotificationService $notification)
    {
        $this->entityManager = $entityManager;
        $this->passhasher = $passhasher;
        $this->jwtManager = $jwtManager;
        $this->auditlog = $auditLog;
        $this->validateAccess = $validateAccess;
        $this->notification = $notification;
    }

    #[Route('/api/employee-payroll-profile/save', name: 'save_employee_payroll_profile', methods: ['POST', 'PUT'])]
    public function saveEmployeePayrollProfile(
        Request $request,
        EmployeePayrollProfileRepository $payrollProfileRepo,
        SSSConfigRepository $sssRepo,
        TaxConfigRepository $taxRepo,
        PagibigConfigRepository $pagibigRepo,
        PhilHealthConfigRepository $philhealthRepo,
        EmployeeRecordsRepository $employeeRecordsRepo
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);
    
        // Validate input
        if (!$data || !isset($data['monthly_salary'], $data['allowance'], $data['cash_advance_array'], $data['daily_rate'],  $data['overtime_rate'], $data['late_rate'], $data['employee_record_id'])) {
            return $this->json(['error' => 'Invalid input data.'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Fetch the employee record
        $employeeRecord = $employeeRecordsRepo->find($data['employee_record_id']);
        if (!$employeeRecord) {
            return $this->json(['error' => 'EmployeeRecord not found.'], JsonResponse::HTTP_NOT_FOUND);
        }
    
        // Fetch the worker
        $worker = $this->entityManager->getRepository(Worker::class)->findOneBy(['emp_record' => $data['employee_record_id']]);
        if (!$worker) {
            return $this->json(['message' => 'Worker not found'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Get Employee Shift
        $user = $employeeRecord->getUser();
        if (!$user || !$shift = $user->getEmpShift()) {
            return $this->json(['message' => 'User or Shift not found'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Check if payroll profile exists for the given employee record
        $payrollProfile = $payrollProfileRepo->findOneBy(['employee_record' => $employeeRecord]);
    
        // If profile does not exist, create a new one
        if (!$payrollProfile) {
            $payrollProfile = new EmployeePayrollProfile();
            $payrollProfile->setEmployeeRecord($employeeRecord);
        }

        // Save Cash Advances
        $cashAdvanceResult = $this->saveCashAdvance($data, $payrollProfile);
        if ($cashAdvanceResult['status'] !== 'success') {
            return $this->json(['error' => 'Failed to save Cash Advances.'], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        // Save SSS Loans
        $SSSResult = $this->saveSSSLoans($data, $payrollProfile);
        if ($SSSResult['status'] !== 'success') {
            return $this->json(['error' => 'Failed to save SSS Loans.'], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }

        // Save Pagibig Loans
        $PagibigResult = $this->savePagibigLoans($data, $payrollProfile);
        if ($PagibigResult['status'] !== 'success') {
            return $this->json(['error' => 'Failed to save Pagibig Loans.'], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    
        // Calculate working metrics
        $working_days_per_week = count($shift->getDaysOfWeek());
        $working_hours_per_day = $shift->getTotalHoursMinusLunch() / 60;
        $working_hours_per_month = ($working_days_per_week * $working_hours_per_day) * 4;
        $minutesPerDay = 8 * 60; // Standard working hours per day (480 minutes)
    
        // Fetch the latest SSS, Tax, Pagibig, and Philhealth configurations
        $latestSSSConfig = $sssRepo->findOneBy([], ['id' => 'DESC']);
        $latestTaxConfig = $taxRepo->findOneBy([], ['id' => 'DESC']);
        $latestPagibigConfig = $pagibigRepo->findOneBy([], ['id' => 'DESC']);
        $latestPhilhealthConfig = $philhealthRepo->findOneBy([], ['id' => 'DESC']);
        
        // Calculate total salary
        $basic_salary = $data['monthly_salary'] + $data['allowance'];
        $hourly_rate = round($basic_salary / $working_hours_per_month, 2);
        $daily_rate = round($hourly_rate * $working_hours_per_day, 2);

        $sss_contribution = $this->entityManager->getRepository(SSSConfig::class)->findAll();
        $pagibig_contribution = $payrollProfile->getPagibigContribution();
        $philhealth_contribution = $payrollProfile->getPhilhealthContribution();

        $employer_sss_deduction = $this->calculateEmployerSSSDeductions($basic_salary, $sss_contribution);
        $employer_philhealth_deduction = $this->calculateEmployerPhilHealthDeduction($basic_salary, $philhealth_contribution);
        $employer_pagibig_deduction = $this->calculateEmployerPagIbigDeduction($basic_salary, $pagibig_contribution);
    
        // Set payroll profile data, including latest configurations
        $payrollProfile->setMonthlySalary($data['monthly_salary'])
            ->setAllowance($data['allowance'])
            ->setAllowanceNonTax($data['tax_shield'])
            ->setOvertimeRate($data['overtime_rate'])
            ->setDailyRate($data['daily_rate'])
            ->setDailyRateNonTax($data['daily_tax_shield'])
            ->setHourlyRate($hourly_rate)
            ->setLateRate($data['late_rate'])
            ->setSssContribution($latestSSSConfig)
            ->setTaxContribution($latestTaxConfig)
            ->setPagibigContribution($latestPagibigConfig)
            ->setPhilhealthContribution($latestPhilhealthConfig)
            ->setEmployeeRecord($employeeRecord)
            ->setSssLoan(0)
            ->setSssLoanDeduction(0)
            ->setHdmfLoan(0)
            ->setHdmfLoanDeduction(0)
            ->setCashAdvance(0)
            ->setCashAdvanceDeduction(0)
            ->setOtherLoans(0)
            ->setOtherLoansDeduction(0)
            // ->setEmployerSssContribution($data['employer_sss_contribution'])
            // ->setEmployerPagibigContribution($data['employer_pagibig_contribution'])
            // ->setEmployerPhilhealthContribution($data['employer_philhealth_contribution'])
            ->setEmployerSssContribution($employer_sss_deduction)
            ->setEmployerPagibigContribution($employer_pagibig_deduction)
            ->setEmployerPhilhealthContribution($employer_philhealth_deduction)
            ->setAccidentInsurance($data['accident_insurance'])
            ->setIncludeSalaryAdjustmentForThirteenthMonth($data['include_sal_adjustment'] ?? false)
            ->setIncludeSalaryForThirteenthMonth($data['include_salary'] ?? false)
            ->setIncludeTaxshieldForThirteenthMonth($data['include_taxshield'] ?? false)
            ->setThirteenthMonthPay($data['thirteenth_month_pay']);
            
        try {
            $this->entityManager->persist($payrollProfile);
            $this->entityManager->flush();
    
            $action = $payrollProfile->getId() ? 'Update' : 'Create';
    
            // Audit log
            $this->auditlog->addAuditLog($request, $data, '/api/employee-payroll-profile', $action);
            return $this->json([
                'message'   => 'Employee Payroll Profile ' . strtolower($action) . 'd successfully.',
                'error'     => ''
            ], $action === 'Create' ? JsonResponse::HTTP_CREATED : JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return $this->json([
                'message' => 'Failed to save EmployeePayrollProfile.',
                'error' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    
    #[Route('/api/employee-payroll-profile/create', name: 'create_employee_payroll_profile', methods: ['POST'])]
    public function createEmployeePayrollProfile(
        Request $request, 
        SSSConfigRepository $sssRepo, 
        TaxConfigRepository $taxRepo, 
        PagibigConfigRepository $pagibigRepo, 
        PhilHealthConfigRepository $philhealthRepo, 
        EmployeeRecordsRepository $employeeRecordsRepo
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);

        // Validate input
        if (!$data || !isset($data['monthly_salary'], $data['allowance'], $data['overtime_rate'], $data['late_rate'])) {
            return $this->json(['error' => 'Invalid input data.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Fetch related entities if available
        $sssConfig = isset($data['sss_contribution_id']) ? $sssRepo->find($data['sss_contribution_id']) : null;
        $taxConfig = isset($data['tax_contribution_id']) ? $taxRepo->find($data['tax_contribution_id']) : null;
        $pagibigConfig = isset($data['pagibig_contribution_id']) ? $pagibigRepo->find($data['pagibig_contribution_id']) : null;
        $philhealthConfig = isset($data['philhealth_contribution_id']) ? $philhealthRepo->find($data['philhealth_contribution_id']) : null;
        $employeeRecord = isset($data['employee_record_id']) ? $employeeRecordsRepo->find($data['employee_record_id']) : null;

        $payrollProfile = new EmployeePayrollProfile();
        $payrollProfile->setMonthlySalary($data['monthly_salary'])
                       ->setAllowance($data['allowance'])
                       ->setOvertimeRate($data['overtime_rate'])
                       ->setLateRate($data['late_rate'])
                       ->setSssContribution($sssConfig)
                       ->setTaxContribution($taxConfig)
                       ->setPagibigContribution($pagibigConfig)
                       ->setPhilhealthContribution($philhealthConfig)
                       ->setEmployeeRecord($employeeRecord);

        try {
            $this->entityManager->persist($payrollProfile);
            $this->entityManager->flush();

            // Audit log
            $this->auditlog->addAuditLog($request, $data, '/api/employee-payroll-profile', 'Create');

            return $this->json(['message' => 'EmployeePayrollProfile created successfully.'], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to create EmployeePayrollProfile.', 'message' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/employee-payroll-profile/update/{id}', name: 'update_employee_payroll_profile', methods: ['PUT'])]
    public function updateEmployeePayrollProfile(
        int $id, 
        Request $request, 
        EmployeePayrollProfileRepository $repository, 
        SSSConfigRepository $sssRepo, 
        TaxConfigRepository $taxRepo, 
        PagibigConfigRepository $pagibigRepo, 
        PhilHealthConfigRepository $philhealthRepo, 
        EmployeeRecordsRepository $employeeRecordsRepo
    ): JsonResponse {
        $payrollProfile = $repository->find($id);

        if (!$payrollProfile) {
            return $this->json(['error' => 'EmployeePayrollProfile not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);

        // Validate input
        if (!$data) {
            return $this->json(['error' => 'Invalid input data.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Fetch related entities if available
        $sssConfig = isset($data['sss_contribution_id']) ? $sssRepo->find($data['sss_contribution_id']) : $payrollProfile->getSssContribution();
        $taxConfig = isset($data['tax_contribution_id']) ? $taxRepo->find($data['tax_contribution_id']) : $payrollProfile->getTaxContribution();
        $pagibigConfig = isset($data['pagibig_contribution_id']) ? $pagibigRepo->find($data['pagibig_contribution_id']) : $payrollProfile->getPagibigContribution();
        $philhealthConfig = isset($data['philhealth_contribution_id']) ? $philhealthRepo->find($data['philhealth_contribution_id']) : $payrollProfile->getPhilhealthContribution();
        $employeeRecord = isset($data['employee_record_id']) ? $employeeRecordsRepo->find($data['employee_record_id']) : $payrollProfile->getEmployeeRecord();

        $payrollProfile->setMonthlySalary($data['monthly_salary'] ?? $payrollProfile->getMonthlySalary())
                       ->setAllowance($data['allowance'] ?? $payrollProfile->getAllowance())
                       ->setOvertimeRate($data['overtime_rate'] ?? $payrollProfile->getOvertimeRate())
                       ->setLateRate($data['late_rate'] ?? $payrollProfile->getLateRate())
                       ->setSssContribution($sssConfig)
                       ->setTaxContribution($taxConfig)
                       ->setPagibigContribution($pagibigConfig)
                       ->setPhilhealthContribution($philhealthConfig)
                       ->setEmployeeRecord($employeeRecord);

        try {
            $this->entityManager->flush();
            // Audit log
            $this->auditlog->addAuditLog($request, $data, '/api/employee-payroll-profile/'.$id, 'Update');
            return $this->json(['message' => 'EmployeePayrollProfile updated successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to update EmployeePayrollProfile.', 'message' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/employee-payroll-profile/find/{id}', name: 'get_employee_payroll_profile', methods: ['GET'])]
    public function getEmployeePayrollProfile(
        int $id, 
        EmployeePayrollProfileRepository $repository, 
        LoanHistoryRepository $loanHistoryRepository,
        CashAdvanceRepository $cashAdvanceRepository, 
        SSSLoansRepository $sssLoanRepository,
        PagibigLoansRepository $pagibigLoanRepository,
        EmployeePayrollRepository $employeePayrollRepository, // Include EmployeePayrollRepository
        Request $request
    ): JsonResponse {
        $payrollProfile = $repository->findOneBy(['employee_record' => $id]);
    
        if (!$payrollProfile) {
            return $this->json(['error' => 'EmployeePayrollProfile not found.'], JsonResponse::HTTP_NOT_FOUND);
        }
    
        // Retrieve loan history for the employee
        $loanHistory = $loanHistoryRepository->findBy(['employee_record' => $id]);
    
        // Loan history data processing
        $loanHistoryArray = [];
        foreach ($loanHistory as $loan) {
            $loanHistoryArray[] = [
                'id' => $loan->getId(),
                'created_at' => $loan->getCreatedAt(),
                'sss_loan' => $loan->getSssLoan(),
                'sss_loan_deduction' => $loan->getSssLoanDeduction(),
                'hdmf_loan' => $loan->getHdmfLoan(),
                'hdmf_loan_deduction' => $loan->getHdmfLoanDeduction(),
                'cash_advance' => $loan->getCashAdvance(),
                'cash_advance_deduction' => $loan->getCashAdvanceDeduction(),
                'other_loans' => $loan->getOtherLoans(),
                'other_loans_deduction' => $loan->getOtherLoansDeduction(),
            ];
        }
    
        // Retrieve EmployeePayroll records
        $employeePayrolls = $employeePayrollRepository->findBy(['payroll_profile' => $payrollProfile]);
    
        // EmployeePayroll data processing
        $employeePayrollArray = [];
        foreach ($employeePayrolls as $payroll) {
            $employeePayrollArray[] = [
                'id' => $payroll->getId(),
                'basic_salary' => $payroll->getBasicSalary(),
                'total_rendered_days' => $payroll->getRenderedDays(),
                'overtime_salary' => $payroll->getOvertimeSalary(),
                'undertime_deduction' => $payroll->getUndertimeDeduction(),
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
                'date_start' => $payroll->getDateStart(),
                'date_end' => $payroll->getDateEnd(),
            ];
        }
    
        $sssLoanHistoryArray = [];
        $pagibigLoanHistoryArray = [];
        $cashAdvanceHistoryArray = [];

        // Get SSS Loan History
        $sssLoanHistories = $payrollProfile->getSssLoansHistories();
        foreach ($sssLoanHistories as $sssLoanHistory) {
            $sssLoanHistoryArray[] = [
                'id' => $sssLoanHistory->getId(),
                'remark' => $sssLoanHistory->getRemark(),
                'previous_amount' => $sssLoanHistory->getPreviousAmount(),
                'deduction' => $sssLoanHistory->getDeduction(),
                'current_amount' => $sssLoanHistory->getCurrentAmount(),
                'date' => $sssLoanHistory->getDate()->format('Y-m-d'),
            ];
        }

        // Get Pag-IBIG Loan History
        $pagibigLoanHistories = $payrollProfile->getPagibigLoansHistories();
        foreach ($pagibigLoanHistories as $pagibigLoanHistory) {
            $pagibigLoanHistoryArray[] = [
                'id' => $pagibigLoanHistory->getId(),
                'remark' => $pagibigLoanHistory->getRemark(),
                'previous_amount' => $pagibigLoanHistory->getPreviousAmount(),
                'deduction' => $pagibigLoanHistory->getDeduction(),
                'current_amount' => $pagibigLoanHistory->getCurrentAmount(),
                'date' => $pagibigLoanHistory->getDate()->format('Y-m-d'),
            ];
        }

        // Get Cash Advance History
        $cashAdvanceHistories = $payrollProfile->getCashAdvanceHistories();
        foreach ($cashAdvanceHistories as $cashAdvanceHistory) {
            $cashAdvanceHistoryArray[] = [
                'id' => $cashAdvanceHistory->getId(),
                'remarks' => $cashAdvanceHistory->getRemarks(),
                'previous_amount' => $cashAdvanceHistory->getPreviousAmount(),
                'deduction' => $cashAdvanceHistory->getDeduction(),
                'current_amount' => $cashAdvanceHistory->getCurrentAmount(),
            ];
        }

        // Retrieve loan history for the employee
        $sssLoan = $sssLoanRepository->findBy(['payroll_profile' => $payrollProfile]);
    
        // SSS history data processing
        // $sssItems = [];
        // foreach ($sssLoan as $sss_item) {
        //     $sssItems[] = [
        //         'id' => $sss_item->getId(),
        //         'amount' => $sss_item->getAmount(),
        //         'deduction' => $sss_item->getDeduction(),
        //         'date' => $sss_item->getDate(),
        //         'remarks' => $sss_item->getRemark(),
        //     ];
        // }

        // // Retrieve loan history for the employee
        // $pagibigLoan = $pagibigLoanRepository->findBy(['payroll_profile' => $payrollProfile]);

        // // Pagibig history data processing
        // $pagibigItems = [];
        // foreach ($pagibigLoan as $pagibig_item) {
        //     $pagibigItems[] = [
        //         'id' => $pagibig_item->getId(),
        //         'amount' => $pagibig_item->getAmount(),
        //         'deduction' => $pagibig_item->getDeduction(),
        //         'date' => $pagibig_item->getDate(),
        //         'remarks' => $pagibig_item->getRemark(),
        //     ];
        // }

        // // Retrieve loan history for the employee
        // $cashAdvance = $cashAdvanceRepository->findBy(['payroll_profile' => $payrollProfile]);

        // // Loan history data processing
        // $cashAdvanceItems = [];
        // foreach ($cashAdvance as $cash_advance_item) {
        //     $cashAdvanceItems[] = [
        //         'id' => $cash_advance_item->getId(),
        //         'cash_advance_amount' => $cash_advance_item->getCashAdvanceAmount(),
        //         'cash_advance_deduction' => $cash_advance_item->getCashAdvanceDeduction(),
        //         'date_start' => $cash_advance_item->getDateStart(),
        //         'remarks' => $cash_advance_item->getRemarks(),
        //     ];
        // }

        // SSS history data processing
        $sssItems = [];
        foreach ($sssLoan as $sss_item) {
            // Check if the amount is zero
            if ($sss_item->getAmount() == 0) {
                continue; // Skip this item
            }
            
            $sssItems[] = [
                'id' => $sss_item->getId(),
                'amount' => $sss_item->getAmount(),
                'deduction' => $sss_item->getDeduction(),
                'date' => $sss_item->getDate(),
                'remarks' => $sss_item->getRemark(),
                'enabled' => $sss_item->isEnabled(),
            ];
        }

        // Retrieve loan history for the employee
        $pagibigLoan = $pagibigLoanRepository->findBy(['payroll_profile' => $payrollProfile]);

        // Pagibig history data processing
        $pagibigItems = [];
        foreach ($pagibigLoan as $pagibig_item) {
            // Check if the amount is zero
            if ($pagibig_item->getAmount() == 0) {
                continue; // Skip this item
            }

            $pagibigItems[] = [
                'id' => $pagibig_item->getId(),
                'amount' => $pagibig_item->getAmount(),
                'deduction' => $pagibig_item->getDeduction(),
                'date' => $pagibig_item->getDate(),
                'remarks' => $pagibig_item->getRemark(),
                'enabled' => $pagibig_item->isEnabled(),
            ];
        }

        // Retrieve loan history for the employee
        $cashAdvance = $cashAdvanceRepository->findBy(['payroll_profile' => $payrollProfile]);

        // Loan history data processing
        $cashAdvanceItems = [];
        foreach ($cashAdvance as $cash_advance_item) {
            // Check if the cash advance amount is zero
            if ($cash_advance_item->getCashAdvanceAmount() == 0) {
                continue; // Skip this item
            }

            $cashAdvanceItems[] = [
                'id' => $cash_advance_item->getId(),
                'cash_advance_amount' => $cash_advance_item->getCashAdvanceAmount(),
                'cash_advance_deduction' => $cash_advance_item->getCashAdvanceDeduction(),
                'date_start' => $cash_advance_item->getDateStart(),
                'remarks' => $cash_advance_item->getRemarks(),
                'enabled' => $cash_advance_item->isEnabled(),
            ];
        }

    
        // Retrieve necessary values for deduction calculations
        $basic_salary = ($payrollProfile->getMonthlySalary() + $payrollProfile->getAllowance()); // get semi monthly
        $sss_contribution = $this->entityManager->getRepository(SSSConfig::class)->findAll();
        $pagibig_contribution = $payrollProfile->getPagibigContribution();
        $philhealth_contribution = $payrollProfile->getPhilhealthContribution();
    
        // Calculate the deductions
        $sss_deduction = $this->calculateSSSDeductions($basic_salary, $sss_contribution);
        $philhealth_deduction = $this->calculatePhilHealthDeduction($basic_salary, $philhealth_contribution);
        $pagibig_deduction = $this->calculatePagIbigDeduction($basic_salary, $pagibig_contribution);
        $employer_sss_deduction = $this->calculateEmployerSSSDeductions($basic_salary, $sss_contribution);
        $employer_philhealth_deduction = $this->calculateEmployerPhilHealthDeduction($basic_salary, $philhealth_contribution);
        $employer_pagibig_deduction = $this->calculateEmployerPagIbigDeduction($basic_salary, $pagibig_contribution);
        $total_mandatory_deduction = $sss_deduction + $philhealth_deduction + $pagibig_deduction;
        $salary_minus_deduction = ($basic_salary - $total_mandatory_deduction);
        $tax_deduction = $this->calculateTaxDeduction($salary_minus_deduction);
    
        // Audit log
        $this->auditlog->addAuditLog($request, ['id' => $id], '/api/employee-payroll-profile/'.$id, 'View');
    
        // Return the payroll profile along with the calculated deductions, loan history, and employee payroll data
        return $this->json([
            'id' => $payrollProfile->getId(),
            'monthly_salary' => $payrollProfile->getMonthlySalary(),
            'allowance' => $payrollProfile->getAllowance(),
            'tax_shield' => $payrollProfile->getAllowanceNonTax(),
            'daily_rate' => $payrollProfile->getDailyRate(),
            'daily_tax_shield' => $payrollProfile->getDailyRateNonTax(),
            'hourly_rate' => $payrollProfile->getHourlyRate(),
            'overtime_rate' => $payrollProfile->getOvertimeRate(),
            'late_rate' => $payrollProfile->getLateRate(),
            'sss_contribution' => $payrollProfile->getSssContribution() ? $payrollProfile->getSssContribution()->getId() : null,
            'tax_contribution' => $payrollProfile->getTaxContribution() ? $payrollProfile->getTaxContribution()->getId() : null,
            'pagibig_contribution' => $payrollProfile->getPagibigContribution() ? $payrollProfile->getPagibigContribution()->getId() : null,
            'philhealth_contribution' => $payrollProfile->getPhilhealthContribution() ? $payrollProfile->getPhilhealthContribution()->getId() : null,
            'employee_record' => $payrollProfile->getEmployeeRecord() ? $payrollProfile->getEmployeeRecord()->getId() : null,
            'sss_loan' => $payrollProfile->getSssLoan(),
            'sss_loan_deduction' => $payrollProfile->getSssLoanDeduction(),
            'hdmf_loan' => $payrollProfile->getHdmfLoan(),
            'hdmf_loan_deduction' => $payrollProfile->getHdmfLoanDeduction(),
            'cash_advance' => $payrollProfile->getCashAdvance(),
            'cash_advance_deduction' => $payrollProfile->getCashAdvanceDeduction(),
            'other_loans' => $payrollProfile->getOtherLoans(),
            'other_loans_deduction' => $payrollProfile->getOtherLoansDeduction(),
            'loan_history' => $loanHistoryArray,
            'sss_loan_history' => $sssLoanHistoryArray,
            'pagibig_loan_history' => $pagibigLoanHistoryArray,
            'cash_advance_history' => $cashAdvanceHistoryArray,
            'employee_payrolls' => $employeePayrollArray, // Employee Payroll Data
            'basic_salary' => $basic_salary,
            'sss_deduction' => $sss_deduction,
            'philhealth_deduction' => $philhealth_deduction,
            'pagibig_deduction' => $pagibig_deduction,
            'employer_sss_contribution' => $employer_sss_deduction,
            'employer_philhealth_contribution' => $employer_philhealth_deduction,
            'employer_pagibig_contribution' => $employer_pagibig_deduction,
            'tax_deduction' => $tax_deduction,
            'total_mandatory_deduction' => $total_mandatory_deduction,
            'salary_minus_deduction' => $salary_minus_deduction,
            'cash_advance_array' => $cashAdvanceItems,  // Cash advance data
            'sss_loan_array' => $sssItems,  // Cash advance data
            'pagibig_loan_array' => $pagibigItems,  // Cash advance data
            'included_sal_adjustment' => $payrollProfile->isIncludeSalaryAdjustmentForThirteenthMonth(),
            'included_salary' => $payrollProfile->isIncludeSalaryForThirteenthMonth(),
            'included_taxshield' => $payrollProfile->isIncludeTaxshieldForThirteenthMonth()
        ]);
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
        $philhealth_contribution = $this->entityManager
            ->getRepository(PhilHealthConfig::class)
            ->findOneBy([], ['id' => 'DESC']);

        if($philhealth_contribution == null){
            $philhealth_rate = 0;
        }
        else{
            $philhealth_rate = $philhealth_contribution->getEmployeeShare() / 100;
        }

        if ($basic_salary > $philhealth_contribution->getMinimumCap()) {
            return min($basic_salary, $philhealth_contribution->getMaximumCap()) * $philhealth_rate;
        }
        return $philhealth_contribution->getMinimumCap() * $philhealth_rate;
    }

    private function calculatePagIbigDeduction(float $basic_salary, $pagibig_contribution): float
    {
        $pagibig_contribution = $this->entityManager
            ->getRepository(PagibigConfig::class)
            ->findOneBy([], ['id' => 'DESC']);

        if($pagibig_contribution == null){
            $hdmf_rate = 0;
        }
        else{
            $hdmf_rate = $pagibig_contribution->getEmployeeShare() / 100;
        }
        
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
        $philhealth_contribution = $this->entityManager
            ->getRepository(PhilHealthConfig::class)
            ->findOneBy([], ['id' => 'DESC']);

        if (!$philhealth_contribution) {
            $philhealth_rate = 0;
        }
        else{
            $philhealth_rate = $philhealth_contribution->getEmployerShare() ? $philhealth_contribution->getEmployerShare() / 100 : 0;
        }
    
        
        if ($basic_salary > $philhealth_contribution->getMinimumCap()) {
            return min($basic_salary, $philhealth_contribution->getMaximumCap()) * $philhealth_rate;
        }

        return $philhealth_contribution->getMinimumCap() * $philhealth_rate;
    }

    private function calculateEmployerPagIbigDeduction(float $basic_salary, $pagibig_contribution): float
    {
        $pagibigConfig = $this->entityManager
            ->getRepository(PagibigConfig::class)
            ->findOneBy([], ['id' => 'DESC']);

        if(!$pagibigConfig){
            $hdmf_rate = 0;
        }
        else{
            $hdmf_rate = $pagibigConfig->getEmployerShare() ? $pagibigConfig->getEmployerShare() / 100 : 0;
        } 
        
        if ($basic_salary > 1500) {
            return min($basic_salary, $pagibigConfig->getMonthlyCompensationCap()) * $hdmf_rate;
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
                $cashAdvance->setStartingAmount($cashAdvanceData['cash_advance_amount'] ?? 0);
            }
    
            // Set fields from provided cash advance data
            $cashAdvance->setPayrollProfile($payrollProfile);
            $cashAdvance->setCashAdvanceAmount($cashAdvanceData['cash_advance_amount'] ?? 0);
            $cashAdvance->setCashAdvanceDeduction($cashAdvanceData['cash_advance_deduction'] ?? 0);
            $cashAdvance->setDateStart(new \DateTime($cashAdvanceData['date_start'] ?? 'now'));
            $cashAdvance->setRemarks($cashAdvanceData['cash_remarks'] ?? '');
            $cashAdvance->setEnabled($cashAdvanceData['cash_status'] ?? false);

            // Get Human Resource
            $humanresDepartment = $this->entityManager->getRepository(Department::class)->findOneBy(['code' => 'HRS']);
            $employee = $payrollProfile->getEmployeeRecord();
            if($cashAdvanceData['cash_status']){
                //Create Notification
                $this->notification->createNotification( $humanresDepartment->getDivision(), $humanresDepartment, $employee->getLastName()." ".$employee->getFirstName()." CA is turned on" , "The CA of ".$employee->getLastName()." ".$employee->getFirstName()." is turned on", new DateTime() , "DEP_ONLY");
            }
            else{
                //Create Notification
                $this->notification->createNotification( $humanresDepartment->getDivision(), $humanresDepartment, $employee->getLastName()." ".$employee->getFirstName()." CA is turned off" , "The CA of ".$employee->getLastName()." ".$employee->getFirstName()." is turned off", new DateTime() , "DEP_ONLY");
            }

        // Persist the entity (but don't flush yet)cashAdvance
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
            $sssLoan->setEnabled($sssLoanData['sss_status'] ?? false);
            // Get Human Resource
            $humanresDepartment = $this->entityManager->getRepository(Department::class)->findOneBy(['code' => 'HRS']);
            $employee = $payrollProfile->getEmployeeRecord();
            if($sssLoanData['sss_status']){
                //Create Notification
                $this->notification->createNotification( $humanresDepartment->getDivision(), $humanresDepartment, $employee->getLastName()." ".$employee->getFirstName()." SSS Loans is turned on" , "The SSS Loans of ".$employee->getLastName()." ".$employee->getFirstName()." is turned on", new DateTime() , "DEP_ONLY");
            }
            else{
                //Create Notification
                $this->notification->createNotification( $humanresDepartment->getDivision(), $humanresDepartment, $employee->getLastName()." ".$employee->getFirstName()." SSS Loans is turned off" , "The SSS Loans of ".$employee->getLastName()." ".$employee->getFirstName()." is turned off", new DateTime() , "DEP_ONLY");
            }
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
            $pagibigLoan->setEnabled($pagibigData['pagibig_status'] ?? false);

            $humanresDepartment = $this->entityManager->getRepository(Department::class)->findOneBy(['code' => 'HRS']);
            $employee = $payrollProfile->getEmployeeRecord();
            if($pagibigData['pagibig_status']){
                //Create Notification
                $this->notification->createNotification( $humanresDepartment->getDivision(), $humanresDepartment, $employee->getLastName()." ".$employee->getFirstName()." Pagibig Loans is turned on" , "The SSS Loans of ".$employee->getLastName()." ".$employee->getFirstName()." is turned on", new DateTime() , "DEP_ONLY");
            }
            else{
                //Create Notification
                $this->notification->createNotification( $humanresDepartment->getDivision(), $humanresDepartment, $employee->getLastName()." ".$employee->getFirstName()." Pagibig Loans is turned off" , "The SSS Loans of ".$employee->getLastName()." ".$employee->getFirstName()." is turned off", new DateTime() , "DEP_ONLY");
            }

            // Persist the entity (but don't flush yet)
            $this->entityManager->persist($pagibigLoan);
        }
        return ['status' => 'success'];
    }
    
}
