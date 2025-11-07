<?php

namespace App\Controller;

use App\Entity\Shifts;
use App\Entity\Worker;
use App\Entity\SSSConfig;
use App\Entity\TaxConfig;
use App\Entity\TaxShield;
use App\Service\AuditLog;
use App\Entity\WorkerLogs;
use App\Entity\LoanHistory;
use App\Entity\PagibigConfig;
use App\Entity\EmployeePayroll;
use App\Entity\EmployeeRecords;
use App\Entity\SSSLoansHistory;
use App\Entity\PhilHealthConfig;
use App\Entity\SalaryAdjustment;
use App\Entity\CashAdvanceHistory;
use App\Entity\Department;
use App\Entity\DTRAdjutments;
use App\Entity\PagibigLoansHistory;
use App\Service\UserAccessValidation;
use App\Entity\EmployeePayrollProfile;
use App\Entity\Notifications;
use App\Entity\PayrollCalculationConfig;
use App\Entity\PayrollGroups;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use App\Service\NotificationService;
use DateTime;

class PayrollGenerationController extends AbstractController
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

    #[Route('/api/generate-payroll', name: 'generate_payroll', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        // Get the request data (assuming it's in JSON format)
        $data = json_decode($request->getContent(), true);

        // Basic validation to check for required fields
        if (empty($data['employee_id']) || empty($data['date_start']) || empty($data['date_end'])) {
            return $this->json(['message' => 'Missing required fields'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Fetch the worker
        $worker = $this->entityManager->getRepository(Worker::class)->findOneBy(['emp_record' => $data['employee_id']]);
        if (!$worker) {
            return $this->json(['message' => 'Worker not found'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Get Employee Shift
        $user = $worker->getEmpRecord()->getUser();
        if (!$user || !$shift = $user->getEmpShift()) {
            return $this->json(['message' => 'User or Shift not found'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Fetch the payroll profile
        $payrollProfile = $this->entityManager->getRepository(EmployeePayrollProfile::class)
            ->findOneBy(['employee_record' => $data['employee_id']]);
        if (!$payrollProfile) {
            return $this->json(['message' => 'Payroll profile not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        // Calculate working metrics
        $working_days_per_week = count($shift->getDaysOfWeek());
        $working_hours_per_day = $shift->getTotalHoursMinusLunch() / 60;
        $working_hours_per_month = ($working_days_per_week * $working_hours_per_day) * 4;
        $minutesPerDay = 8 * 60; // Standard working hours per day (480 minutes)

        // Convert date_end to DateTime object and set time to end of the day
        $dateStart = new \DateTime($data['date_start']);
        $dateEnd = new \DateTime($data['date_end']);
        $dateEnd->setTime(23, 59, 59);

        $workerLogs = $this->entityManager->getRepository(WorkerLogs::class)
            ->findByDateRangeWithWorkerId($dateStart, $dateEnd, $worker->getId());


        // Initialize totals
        $totalRenderedMinutes = 0;
        $totalOvertime = 0;
        $totalApprovedOvertime = 0;
        $totalUndertime = 0;

        // Calculate rendered minutes, overtime, and undertime
        foreach ($workerLogs as $log) {
            $totalRenderedMinutes += $log->getRenderedHours() ?? 0;
            $totalApprovedOvertime += ($log->getOvertime() ?? 0) * ($log->isOvertimeApproved() ? 1 : 0);
            $totalOvertime += ($log->getOvertime() ?? 0);
            $totalUndertime += $log->getUndertime() ?? 0;
        }

        // Minus the Overtime to the Rendered Minutes
        // The reason is Total rendered minutes includes the Overtime 
        $totalRenderedMinutes -= $totalOvertime;

        //Calcaulate Approved Overtime Amount
        $total_calculated_overtime = ($totalApprovedOvertime / 60) * $payrollProfile->getOvertimeRate();

        //Calculate Undertime Amount
        $total_calculated_undertime = ($totalUndertime / 60) * $payrollProfile->getLateRate();

        // Get contributions
        $sss_contribution = $this->entityManager->getRepository(SSSConfig::class)->findAll();
        $pagibig_contribution = $payrollProfile->getPagibigContribution();
        $philhealth_contribution = $payrollProfile->getPhilhealthContribution();

        // Calculate total salary
        $basic_salary = $payrollProfile->getMonthlySalary() + $payrollProfile->getAllowance();
        $hourly_rate = round($basic_salary / $working_hours_per_month, 2);
        $bi_weekly_salary = $basic_salary / 2;

        // Check Salary adjustment
        $salary_adjustment = 0;
        $salary_adjustment_nontax = 0;
        $salary_adjustment_taxable = 0;
        if($data['salary_adjustment'] && $data['salary_adjustment'] == true){
            $salary_adjustment = $data['sal_adj_total_salary'];
            $salary_adjustment_nontax = $data['sal_adj_total_nontax_salary'];
            $salary_adjustment_taxable = $data['sal_adj_total_tax_salary'];
        }

        // Calculate Total rendered days
        $totalRenderedDays = round($totalRenderedMinutes / $minutesPerDay, 2);
        $salaryPerDay = $payrollProfile->getDailyRate();
        $salaryPerDayNonTax = $payrollProfile->getDailyRate() + $payrollProfile->getDailyRateNonTax();
        $salaryForRenderedDays = ($salaryPerDay * $totalRenderedDays) + ($payrollProfile->getAllowance() / 2) + $total_calculated_overtime - $total_calculated_undertime + $salary_adjustment_taxable;
        $salaryForRenderedDaysNonTax = ($salaryPerDayNonTax * $totalRenderedDays) + ($payrollProfile->getAllowance() / 2) + $total_calculated_overtime - $total_calculated_undertime + $salary_adjustment_nontax;
        $total_tax_shield = ($payrollProfile->getDailyRateNonTax() * $totalRenderedDays);

        // Calculate Mandatory deductions semi monthly
        $sss_deduction = $this->calculateSSSDeductions($basic_salary, $sss_contribution) / 2;
        $philhealth_deduction = $this->calculatePhilHealthDeduction($basic_salary, $philhealth_contribution) / 2;
        $hdmf_deduction = $this->calculatePagIbigDeduction($basic_salary, $pagibig_contribution) / 2;
        $total_mandatory_deduction = $sss_deduction + $philhealth_deduction + $hdmf_deduction;

        // Calculate Loans Deduction semi monthly    
        $total_loan_deduction = $this->calculateLoanDeduction($payrollProfile);

        // Calculate tax deduction semi monthly
        $tax_deduction = $this->calculateTaxDeduction($salaryForRenderedDays - $total_mandatory_deduction);

        // Total deductions
        $total_deduction = $total_mandatory_deduction + $tax_deduction + $total_loan_deduction;
        $net_salary = round(($salaryForRenderedDaysNonTax - $total_deduction), 2);

        // Prepare response data
        $responseData = [
            'basic_salary' => $basic_salary,
            'total_rendered_minutes' => $totalRenderedMinutes,
            'worker_logs_count' => count($workerLogs),
            'minutes_per_day' => $minutesPerDay,
            'total_rendered_days' => $totalRenderedDays,
            'daily_rate' => $salaryPerDay,
            'hourly_rate' => $hourly_rate,
            'overtime_salary' => $total_calculated_overtime,
            'undertime_salary' => $total_calculated_undertime,
            'total_salary' => $salaryForRenderedDaysNonTax,
            'bi_weekly_salary' => $bi_weekly_salary,
            'sss_deduction' => $sss_deduction,
            'philhealth_deduction' => $philhealth_deduction,
            'hdmf_deduction' => $hdmf_deduction,
            'total_mandatories_deduction' => $total_mandatory_deduction,
            'tax_deduction' => round($tax_deduction, 2),
            'total_deduction' => round($total_deduction, 2),
            'net_salary' => $net_salary,
            'total_tax_shield' => $total_tax_shield,
            'salaryForRenderedDays' => round($salaryForRenderedDays, 2),
            'totalOvertime' => $totalOvertime,
            'totalUndertime' => $totalUndertime,
            'totalOvertimeAmount' => $total_calculated_overtime,
            'totalUndertimeAmount' => $total_calculated_undertime,
        ];

        // Create new EmployeePayroll entity
        $employeePayroll = new EmployeePayroll();
        $employeePayroll->setDateGenerated(new \DateTimeImmutable());
        $employeePayroll->setRenderedDays($responseData['total_rendered_days']);
        $employeePayroll->setPayrollProfile($payrollProfile);
        $employeePayroll->setBasicSalary($basic_salary);
        $employeePayroll->setOvertimeSalary($responseData['overtime_salary']);
        $employeePayroll->setUndertimeDeduction($responseData['undertime_salary']);
        $employeePayroll->setTotalSalary($responseData['total_salary']);
        $employeePayroll->setThirteenthMonthPay(0);
        $employeePayroll->setSssShare($sss_deduction);
        $employeePayroll->setPhilhealthShare($philhealth_deduction); // New field added
        $employeePayroll->setHdmfContribution($hdmf_deduction); // New field added
        $employeePayroll->setInsuranceContribution(0); // New field added
        $employeePayroll->setTaxContribution($responseData['tax_deduction']); // New field added
        $employeePayroll->setCashAdvanceDeduction(0); // New field added
        $employeePayroll->setTotalDeduction($total_deduction);
        $employeePayroll->setNetSalary($net_salary);
        $employeePayroll->setTotalTaxShield($total_tax_shield);
        $employeePayroll->setDateStart($dateStart);
        $employeePayroll->setDateEnd($dateEnd);
        //
        $thirteenthMonthPay = 0;
        if($payrollProfile->isIncludeSalaryAdjustmentForThirteenthMonth()){
            $thirteenthMonthPay += $salary_adjustment;
        }
        if($payrollProfile->isIncludeSalaryForThirteenthMonth()){
            $thirteenthMonthPay += ($salaryPerDay * $totalRenderedDays);
        }
        if($payrollProfile->isIncludeTaxshieldForThirteenthMonth()){
            $thirteenthMonthPay += $total_tax_shield;
        }
        $employeePayroll->setThirteenthMonthPay($thirteenthMonthPay);

        //Create new Tax Shield 
        $newTaxShield = new TaxShield();
        $newTaxShield->setMonthlyTaxShield($payrollProfile->getAllowanceNonTax());
        $newTaxShield->setDailyTaxShield($payrollProfile->getDailyRateNonTax());
        $newTaxShield->setPayroll($employeePayroll);

        // Persist the payroll data
        $this->entityManager->persist($newTaxShield);
        $this->deductLoans($payrollProfile, $payrollProfile->getEmployeeRecord(), $employeePayroll);
        $this->entityManager->persist($employeePayroll);
        $this->createSalaryAdjustment($employeePayroll, $data);
        $this->entityManager->flush();

        // Log the payroll creation event
        // $this->auditlog->log('Created new payroll entry for profile ID: ' . $payrollProfile->getId());

        return $this->json(['message' => 'Payroll created successfully', 'data' => $responseData], JsonResponse::HTTP_CREATED);
    }

    #[Route('/api/generate-payroll-for-all-employees', name: 'generate_all_payroll', methods: ['POST'])]
    public function createPayrollPerEmployee(Request $request): JsonResponse
    {
        // Get the request data (assuming it's in JSON format)
        $data = json_decode($request->getContent(), true);
        $employee_record_list = $this->entityManager->getRepository(EmployeeRecords::class)->findBy(['employee_status' => 'Active']);
        // Basic validation to check for required fields
        if (empty($data['date_start']) || empty($data['date_end'])) {
            return $this->json(['message' => 'Missing required fields'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Convert date_end to DateTime object and set time to end of the day
        $dateStart = new \DateTime($data['date_start']);
        $dateEnd = new \DateTime($data['date_end']);
        $dateEnd->setTime(23, 59, 59);

        $findPayrollGroup = $this->entityManager->getRepository(PayrollGroups::class)->findByDateRange($dateStart,
        $dateEnd);

        if($findPayrollGroup){
            return $this->json(['message' => 'Payroll already exist'], JsonResponse::HTTP_BAD_REQUEST);
        }
        else{
            $newPayrollGroup = new PayrollGroups();
            $newPayrollGroup->setDateStart($dateStart);
            $newPayrollGroup->setDateEnd($dateEnd);
            $newPayrollGroup->setRemarks($data['remarks'] ?? '');
            $this->entityManager->persist($newPayrollGroup);
        }

        $payroll_config = $this->entityManager->getRepository(PayrollCalculationConfig::class)->findOneBy([], ['id' => 'ASC']);
        if(!$payroll_config){
            return $this->json(['message' => 'Payroll Config not set.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $no_of_hours_week = $payroll_config->getNoHoursPerWeek();

        // echo count($employee_record_list);
        foreach($employee_record_list as $employee){

            //Get Employee Id
            $employee_id = $employee->getId();
            // Fetch the worker
            $worker = $this->entityManager->getRepository(Worker::class)->findOneBy(['emp_record' => $employee_id]);
            if (!$worker) {
                continue;
            }

            // Get Employee Shift
            $user = $worker->getEmpRecord()->getUser();
            if (!$user) { //|| !$shift = $user->getEmpShift()
                continue;
            }

            // Fetch the payroll profile
            $payrollProfile = $this->entityManager->getRepository(EmployeePayrollProfile::class)
                ->findOneBy(['employee_record' => $employee_id]);
            if (!$payrollProfile) {
                continue;
            }

            // Calculate working metrics
            // $working_days_per_week = count($shift->getDaysOfWeek());
            // $working_hours_per_day = $shift->getTotalHoursMinusLunch() / 60;
            $working_hours_per_month = $no_of_hours_week * 4;
            $minutesPerDay = 8 * 60; // Standard working hours per day (480 minutes)

            $workerLogs = $this->entityManager->getRepository(WorkerLogs::class)
                ->findByDateRangeWithWorkerId($dateStart, $dateEnd, $worker->getId());


            // Initialize totals
            $totalRenderedMinutes       = 0;
            $totalOvertime              = 0;
            $totalApprovedOvertime      = 0;
            $totalUndertime             = 0;

            // Calculate rendered minutes, overtime, and undertime
            foreach ($workerLogs as $log) {
                $totalRenderedMinutes += $log->getRenderedHours() ?? 0;
                $totalApprovedOvertime += ($log->getOvertime() ?? 0) * ($log->isOvertimeApproved() ? 1 : 0);
                $totalOvertime += ($log->getOvertime() ?? 0);
                $totalUndertime += $log->getUndertime() ?? 0;
            }

            // Minus the Overtime to the Rendered Minutes
            // The reason is Total rendered minutes includes the Overtime 
            $totalRenderedMinutes -= $totalOvertime;

            //Calcaulate Approved Overtime Amount
            $total_calculated_overtime = ($totalApprovedOvertime / 60) * $payrollProfile->getOvertimeRate();

            //Calculate Undertime Amount
            $total_calculated_undertime = ($totalUndertime / 60) * $payrollProfile->getLateRate();

            // Get contributions
            $sss_contribution = $this->entityManager->getRepository(SSSConfig::class)->findAll();
            $pagibig_contribution = $payrollProfile->getPagibigContribution();
            $philhealth_contribution = $payrollProfile->getPhilhealthContribution();

            // Calculate total salary
            $basic_salary = $payrollProfile->getMonthlySalary() + $payrollProfile->getAllowance();
            $hourly_rate = round($basic_salary / $working_hours_per_month, 2);
            $bi_weekly_salary = $basic_salary / 2;

            // Check Salary adjustment
            $salary_adjustment = 0;
            $salary_adjustment_nontax = 0;
            $salary_adjustment_taxable = 0;
            // if($data['salary_adjustment'] && $data['salary_adjustment'] == true){
            //     $salary_adjustment = $data['sal_adj_total_salary'];
            //     $salary_adjustment_nontax = $data['sal_adj_total_nontax_salary'];
            //     $salary_adjustment_taxable = $data['sal_adj_total_tax_salary'];
            // }

            // Calculate Total rendered days
            $totalRenderedDays = round($totalRenderedMinutes / $minutesPerDay, 2);
            $salaryPerDay = $payrollProfile->getDailyRate();
            $salaryPerDayNonTax = $payrollProfile->getDailyRate() + $payrollProfile->getDailyRateNonTax();
            $salaryForRenderedDays = ($salaryPerDay * $totalRenderedDays) + ($payrollProfile->getAllowance() / 2) + $total_calculated_overtime - $total_calculated_undertime + $salary_adjustment_taxable;
            $salaryForRenderedDaysNonTax = ($salaryPerDayNonTax * $totalRenderedDays) + ($payrollProfile->getAllowance() / 2) + $total_calculated_overtime - $total_calculated_undertime + $salary_adjustment_nontax;
            $total_tax_shield = ($payrollProfile->getDailyRateNonTax() * $totalRenderedDays);

            // Calculate Mandatory deductions semi monthly
            $sss_deduction = $this->calculateSSSDeductions($basic_salary, $sss_contribution) / 2;
            $philhealth_deduction = $this->calculatePhilHealthDeduction($basic_salary, $philhealth_contribution) / 2;
            $hdmf_deduction = $this->calculatePagIbigDeduction($basic_salary, $pagibig_contribution) / 2;
            $total_mandatory_deduction = $sss_deduction + $philhealth_deduction + $hdmf_deduction;

            if($total_mandatory_deduction >= $salaryForRenderedDays){
                $total_mandatory_deduction = 0;
            }

            // Calculate Loans Deduction
            $total_loan_deduction = $this->calculateLoanDeduction($payrollProfile);

            // Calculate tax
            $tax_deduction = $this->calculateTaxDeduction($salaryForRenderedDays - $total_mandatory_deduction);

            // Total deductions
            $total_deduction = $total_mandatory_deduction + $tax_deduction + $total_loan_deduction;
            $net_salary = round(($salaryForRenderedDaysNonTax - $total_deduction), 2);

            // Prepare response data
            $responseData = [
                'basic_salary' => $basic_salary,
                'total_rendered_minutes' => $totalRenderedMinutes,
                'worker_logs_count' => count($workerLogs),
                'minutes_per_day' => $minutesPerDay,
                'total_rendered_days' => $totalRenderedDays,
                'daily_rate' => $salaryPerDay,
                'hourly_rate' => $hourly_rate,
                'overtime_salary' => $total_calculated_overtime,
                'undertime_salary' => $total_calculated_undertime,
                'total_salary' => $salaryForRenderedDaysNonTax,
                'bi_weekly_salary' => $bi_weekly_salary,
                'sss_deduction' => $sss_deduction,
                'philhealth_deduction' => $philhealth_deduction,
                'hdmf_deduction' => $hdmf_deduction,
                'total_mandatories_deduction' => $total_mandatory_deduction,
                'tax_deduction' => round($tax_deduction, 2),
                'total_deduction' => round($total_deduction, 2),
                'net_salary' => $net_salary,
                'total_tax_shield' => $total_tax_shield,
                'salaryForRenderedDays' => round($salaryForRenderedDays, 2),
                'totalOvertime' => $totalOvertime,
                'totalUndertime' => $totalUndertime,
                'totalOvertimeAmount' => $total_calculated_overtime,
                'totalUndertimeAmount' => $total_calculated_undertime,
            ];

            // Create new EmployeePayroll entity
            $employeePayroll = new EmployeePayroll();
            $employeePayroll->setPayrollGroup($newPayrollGroup);
            $employeePayroll->setDateGenerated(new \DateTimeImmutable());
            $employeePayroll->setRenderedDays($responseData['total_rendered_days']);
            $employeePayroll->setPayrollProfile($payrollProfile);
            $employeePayroll->setBasicSalary($basic_salary);
            $employeePayroll->setOvertimeSalary($responseData['overtime_salary']);
            $employeePayroll->setUndertimeDeduction($responseData['undertime_salary']);
            $employeePayroll->setTotalSalary($responseData['total_salary']);
            $employeePayroll->setThirteenthMonthPay(0);
            $employeePayroll->setSssShare($sss_deduction);
            $employeePayroll->setPhilhealthShare($philhealth_deduction); // New field added
            $employeePayroll->setHdmfContribution($hdmf_deduction); // New field added
            $employeePayroll->setInsuranceContribution(0); // New field added
            $employeePayroll->setTaxContribution($responseData['tax_deduction']); // New field added
            $employeePayroll->setCashAdvanceDeduction(0); // New field added
            $employeePayroll->setTotalDeduction($total_deduction);
            $employeePayroll->setNetSalary($net_salary);
            $employeePayroll->setTotalTaxShield($total_tax_shield);
            $employeePayroll->setDateStart($dateStart);
            $employeePayroll->setDateEnd($dateEnd);
            // 
            $thirteenthMonthPay = 0;
            if($payrollProfile->isIncludeSalaryAdjustmentForThirteenthMonth()){
                $thirteenthMonthPay += $salary_adjustment;
            }
            if($payrollProfile->isIncludeSalaryForThirteenthMonth()){
                $thirteenthMonthPay += ($salaryPerDay * $totalRenderedDays);
            }
            if($payrollProfile->isIncludeTaxshieldForThirteenthMonth()){
                $thirteenthMonthPay += $total_tax_shield;
            }
            $employeePayroll->setThirteenthMonthPay($thirteenthMonthPay);

            //Create new Tax Shield 
            $newTaxShield = new TaxShield();
            $newTaxShield->setMonthlyTaxShield($payrollProfile->getAllowanceNonTax());
            $newTaxShield->setDailyTaxShield($payrollProfile->getDailyRateNonTax());
            $newTaxShield->setPayroll($employeePayroll);

            // Persist the payroll data
            $this->entityManager->persist($newTaxShield);
            $this->deductLoans($payrollProfile, $payrollProfile->getEmployeeRecord(), $employeePayroll);
            $this->entityManager->persist($employeePayroll);
            // $this->createSalaryAdjustment($employeePayroll, $data);
            $this->entityManager->flush();

            // Get Human Resource
            $humanresDepartment = $this->entityManager->getRepository(Department::class)->findOneBy(['code' => 'HRS']);
            //Create Notification
            $this->notification->createNotification( $humanresDepartment->getDivision(), $humanresDepartment, $employee->Firstname()." ".$employee->Firstname()." payroll created" , "The Payroll for".$employee->Firstname()." ".$employee->Firstname()." is been created", new DateTime() , "DEP_ONLY");

        }
        // Log the payroll creation event
        // $this->auditlog->log('Created new payroll entry for profile ID: ' . $payrollProfile->getId());

        // return $this->json(['message' => 'Payroll created successfully', 'data' => $responseData], JsonResponse::HTTP_CREATED);
        return $this->json(['message' => 'Payroll created successfully'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/api/update-payroll-deduction', name: 'update_payroll_deduction', methods: ['POST'])]
    public function createSalaryAdjustmentAndUpdatePayroll(Request $request): JsonResponse
    {
        // Get the request data (assuming it's in JSON format)
        $data = json_decode($request->getContent(), true);

        // Basic validation to check for required fields
        if (empty($data['employee_id']) || empty($data['payroll_id'])) {
            return $this->json(['message' => 'Missing required fields'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $employeePayroll = $this->entityManager->getRepository(EmployeePayroll::class)->find($data['payroll_id']);

        // Fetch the worker
        $worker = $this->entityManager->getRepository(Worker::class)->findOneBy(['emp_record' => $data['employee_id']]);
        if (!$worker) {
            return $this->json(['message' => 'Worker not found'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Get Employee Shift
        $user = $worker->getEmpRecord()->getUser();
        if (!$user || !$shift = $user->getEmpShift()) {
            return $this->json(['message' => 'User or Shift not found'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Fetch the payroll profile
        $payrollProfile = $this->entityManager->getRepository(EmployeePayrollProfile::class)
            ->findOneBy(['employee_record' => $data['employee_id']]);
        if (!$payrollProfile) {
            return $this->json(['message' => 'Payroll profile not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        // Calculate working metrics
        $working_days_per_week = count($shift->getDaysOfWeek());
        $working_hours_per_day = $shift->getTotalHoursMinusLunch() / 60;
        $working_hours_per_month = ($working_days_per_week * $working_hours_per_day) * 4;
        $minutesPerDay = 8 * 60; // Standard working hours per day (480 minutes)

        // Convert date_end to DateTime object and set time to end of the day
        $dateStart = $employeePayroll->getDateStart();
        $dateEnd = $employeePayroll->getDateEnd();
        $dateEnd->setTime(23, 59, 59);

        $workerLogs = $this->entityManager->getRepository(WorkerLogs::class)
            ->findByDateRangeWithWorkerId($dateStart, $dateEnd, $worker->getId());


        // Initialize totals
        $totalRenderedMinutes = 0;
        $totalOvertime = 0;
        $totalApprovedOvertime = 0;
        $totalUndertime = 0;

        // Calculate rendered minutes, overtime, and undertime
        foreach ($workerLogs as $log) {
            $totalRenderedMinutes += $log->getRenderedHours() ?? 0;
            $totalApprovedOvertime += ($log->getOvertime() ?? 0) * ($log->isOvertimeApproved() ? 1 : 0);
            $totalOvertime += ($log->getOvertime() ?? 0);
            $totalUndertime += $log->getUndertime() ?? 0;
        }

        // Minus the Overtime to the Rendered Minutes
        // The reason is Total rendered minutes includes the Overtime 
        $totalRenderedMinutes -= $totalOvertime;

        //Calcaulate Approved Overtime Amount and in DTR Adjustment
        $total_calculated_overtime = ($totalApprovedOvertime / 60) * $payrollProfile->getOvertimeRate();
        $to_next_payroll_ot = $this->getOvertimeInDTRAdjustments($data['employee_id'], $dateStart, $dateEnd);
        // compute overtime from dtr adjustment table and add it tot total_calculated_overtime
        $total_calculated_overtime += ($to_next_payroll_ot / 60) * $payrollProfile->getOvertimeRate();

        //Calculate Undertime Amount
        $total_calculated_undertime = ($totalUndertime / 60) * $payrollProfile->getLateRate();

        // Get contributions
        $sss_contribution = $this->entityManager->getRepository(SSSConfig::class)->findAll();
        $pagibig_contribution = $payrollProfile->getPagibigContribution();
        $philhealth_contribution = $payrollProfile->getPhilhealthContribution();

        // Calculate total salary
        $basic_salary = $payrollProfile->getMonthlySalary() + $payrollProfile->getAllowance();
        $hourly_rate = round($basic_salary / $working_hours_per_month, 2);
        $bi_weekly_salary = $basic_salary / 2;

        // Check Salary adjustment
        $salary_adjustment = 0;
        $salary_adjustment_nontax = 0;
        $salary_adjustment_taxable = 0;
        if($data['salary_adjustment'] && $data['salary_adjustment'] == true){
            $salary_adjustment = $data['sal_adj_total_salary'];
            $salary_adjustment_nontax = $data['sal_adj_total_nontax_salary'];
            $salary_adjustment_taxable = $data['sal_adj_total_tax_salary'];
        }
        // echo $salary_adjustment;
        // Calculate Total rendered days
        $totalRenderedDays = round($totalRenderedMinutes / $minutesPerDay, 2);
        $salaryPerDay = $payrollProfile->getDailyRate();
        $salaryPerDayNonTax = $payrollProfile->getDailyRate() + $payrollProfile->getDailyRateNonTax();
        $salaryForRenderedDays = ($salaryPerDay * $totalRenderedDays) + ($payrollProfile->getAllowance() / 2) + $total_calculated_overtime - $total_calculated_undertime + $salary_adjustment_taxable;
        $salaryForRenderedDaysNonTax = ($salaryPerDayNonTax * $totalRenderedDays) + ($payrollProfile->getAllowance() / 2) + $total_calculated_overtime - $total_calculated_undertime + $salary_adjustment;
        $total_tax_shield = ($payrollProfile->getDailyRateNonTax() * $totalRenderedDays);

        // Calculate Mandatory deductions semi monthly
        $sss_deduction = $this->calculateSSSDeductions($basic_salary, $sss_contribution) / 2;
        $philhealth_deduction = $this->calculatePhilHealthDeduction($basic_salary, $philhealth_contribution) / 2;
        $hdmf_deduction = $this->calculatePagIbigDeduction($basic_salary, $pagibig_contribution) / 2;
        $total_mandatory_deduction = $sss_deduction + $philhealth_deduction + $hdmf_deduction;

        // Calculate Loans Deduction semi monthly    
        $total_loan_deduction = $this->calculateLoanDeduction($payrollProfile);

        // Calculate tax deduction semi monthly
        $tax_deduction = $this->calculateTaxDeduction($salaryForRenderedDays - $total_mandatory_deduction);

        // Total deductions
        $total_deduction = $total_mandatory_deduction + $tax_deduction + $total_loan_deduction;
        $net_salary = round(($salaryForRenderedDaysNonTax - $total_deduction), 2);

        // Prepare response data
        $responseData = [
            'basic_salary' => $basic_salary,
            'total_rendered_minutes' => $totalRenderedMinutes,
            'worker_logs_count' => count($workerLogs),
            'minutes_per_day' => $minutesPerDay,
            'total_rendered_days' => $totalRenderedDays,
            'daily_rate' => $salaryPerDay,
            'hourly_rate' => $hourly_rate,
            'overtime_salary' => $total_calculated_overtime,
            'undertime_salary' => $total_calculated_undertime,
            'total_salary' => $salaryForRenderedDaysNonTax,
            'bi_weekly_salary' => $bi_weekly_salary,
            'sss_deduction' => $sss_deduction,
            'philhealth_deduction' => $philhealth_deduction,
            'hdmf_deduction' => $hdmf_deduction,
            'total_mandatories_deduction' => $total_mandatory_deduction,
            'tax_deduction' => round($tax_deduction, 2),
            'total_deduction' => round($total_deduction, 2),
            'net_salary' => $net_salary,
            'total_tax_shield' => $total_tax_shield,
            'salaryForRenderedDays' => round($salaryForRenderedDays, 2),
            'totalOvertime' => $totalOvertime,
            'totalUndertime' => $totalUndertime,
            'totalOvertimeAmount' => $total_calculated_overtime,
            'totalUndertimeAmount' => $total_calculated_undertime,
        ];

        // Create new EmployeePayroll entity
        $employeePayroll->setRenderedDays($responseData['total_rendered_days']);
        // $employeePayroll->setPayrollProfile($payrollProfile);
        $employeePayroll->setBasicSalary($basic_salary);
        $employeePayroll->setOvertimeSalary($responseData['overtime_salary']);
        $employeePayroll->setUndertimeDeduction($responseData['undertime_salary']);
        $employeePayroll->setTotalSalary($responseData['total_salary']);
        $employeePayroll->setSssShare($sss_deduction);
        $employeePayroll->setPhilhealthShare($philhealth_deduction); // New field added
        $employeePayroll->setHdmfContribution($hdmf_deduction); // New field added
        $employeePayroll->setInsuranceContribution(0); // New field added
        $employeePayroll->setTaxContribution($responseData['tax_deduction']); // New field added
        $employeePayroll->setCashAdvanceDeduction(0); // New field added
        $employeePayroll->setTotalDeduction($total_deduction);
        $employeePayroll->setNetSalary($net_salary);
        $employeePayroll->setTotalTaxShield($total_tax_shield);
        //Set 13th month pay
        $thirteenthMonthPay = 0;
        if($payrollProfile->isIncludeSalaryAdjustmentForThirteenthMonth()){
            $thirteenthMonthPay += $salary_adjustment;
        }
        if($payrollProfile->isIncludeSalaryForThirteenthMonth()){
            $thirteenthMonthPay += ($salaryPerDay * $totalRenderedDays);
        }
        if($payrollProfile->isIncludeTaxshieldForThirteenthMonth()){
            $thirteenthMonthPay += $total_tax_shield;
        }
        $employeePayroll->setThirteenthMonthPay($thirteenthMonthPay);

        //Create new Tax Shield 
        // $newTaxShield = new TaxShield();
        // $newTaxShield->setMonthlyTaxShield($payrollProfile->getAllowanceNonTax());
        // $newTaxShield->setDailyTaxShield($payrollProfile->getDailyRateNonTax());
        // $newTaxShield->setPayroll($employeePayroll);

        // Persist the payroll data
        $this->entityManager->persist($employeePayroll);
        // $this->entityManager->persist($newTaxShield);
        // $this->deductLoans($payrollProfile, $payrollProfile->getEmployeeRecord(), $employeePayroll);
        $this->createSalaryAdjustment($employeePayroll, $data);
        $this->entityManager->flush();

        
        // Get Human Resource Division and Department for notification
        $humanresDepartment = $this->entityManager->getRepository(Department::class)->findOneBy(['code' => 'HRS']);
        // Create Notification
        $this->notification->createNotification( $humanresDepartment->getDivision(), $humanresDepartment, $worker->getEmpRecord()->Firstname()." ".$worker->getEmpRecord()->Firstname()." payroll adjusted" , "The Payroll for".$worker->getEmpRecord()->Firstname()." ".$worker->getEmpRecord()->Firstname()." is been adjusted", new DateTime() , "DEP_ONLY" );

        // Log the payroll creation event
        // $this->auditlog->log('Created new payroll entry for profile ID: ' . $payrollProfile->getId());

        return $this->json(['message' => 'Payroll created successfully', 'data' => $responseData], JsonResponse::HTTP_CREATED);
    }

    #[Route('/api/view-salary-adjustment', name: 'view_salary_adjustment', methods: ['POST'])]
    public function viewSalaryAdjustmentAndPayroll(Request $request): JsonResponse
    {
        // Get the request data (assuming it's in JSON format)
        $data = json_decode($request->getContent(), true);

        // Basic validation to check for required fields
        if (empty($data['employee_id']) || empty($data['payroll_id'])) {
            return $this->json(['message' => 'Missing required fields'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $employeePayroll = $this->entityManager->getRepository(EmployeePayroll::class)->find($data['payroll_id']);

        // Fetch the worker
        $worker = $this->entityManager->getRepository(Worker::class)->findOneBy(['emp_record' => $data['employee_id']]);
        if (!$worker) {
            return $this->json(['message' => 'Worker not found'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Get Employee Shift
        $user = $worker->getEmpRecord()->getUser();
        if (!$user || !$shift = $user->getEmpShift()) {
            return $this->json(['message' => 'User or Shift not found'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Fetch the payroll profile
        $payrollProfile = $this->entityManager->getRepository(EmployeePayrollProfile::class)
            ->findOneBy(['employee_record' => $data['employee_id']]);
        if (!$payrollProfile) {
            return $this->json(['message' => 'Payroll profile not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        // Calculate working metrics
        $working_days_per_week = count($shift->getDaysOfWeek());
        $working_hours_per_day = $shift->getTotalHoursMinusLunch() / 60;
        $working_hours_per_month = ($working_days_per_week * $working_hours_per_day) * 4;
        $minutesPerDay = 8 * 60; // Standard working hours per day (480 minutes)

        // Convert date_end to DateTime object and set time to end of the day
        $dateStart = $employeePayroll->getDateStart();
        $dateEnd = $employeePayroll->getDateEnd();
        $dateEnd->setTime(23, 59, 59);

        $workerLogs = $this->entityManager->getRepository(WorkerLogs::class)
            ->findByDateRangeWithWorkerId($dateStart, $dateEnd, $worker->getId());


        // Initialize totals
        $totalRenderedMinutes = 0;
        $totalOvertime = 0;
        $totalApprovedOvertime = 0;
        $totalUndertime = 0;

        // Calculate rendered minutes, overtime, and undertime
        foreach ($workerLogs as $log) {
            $totalRenderedMinutes += $log->getRenderedHours() ?? 0;
            $totalApprovedOvertime += ($log->getOvertime() ?? 0) * ($log->isOvertimeApproved() ? 1 : 0);
            $totalOvertime += ($log->getOvertime() ?? 0);
            $totalUndertime += $log->getUndertime() ?? 0;
        }

        // Minus the Overtime to the Rendered Minutes
        // The reason is Total rendered minutes includes the Overtime 
        $totalRenderedMinutes -= $totalOvertime;

        //Calcaulate Approved Overtime Amount and in DTR Adjustment
        $total_calculated_overtime = ($totalApprovedOvertime / 60) * $payrollProfile->getOvertimeRate();
        $to_next_payroll_ot = $this->getOvertimeInDTRAdjustments($data['employee_id'], $dateStart, $dateEnd);
        // compute overtime from dtr adjustment table and add it tot total_calculated_overtime
        $total_calculated_overtime += ($to_next_payroll_ot / 60) * $payrollProfile->getOvertimeRate();

        //Calculate Undertime Amount
        $total_calculated_undertime = ($totalUndertime / 60) * $payrollProfile->getLateRate();

        // Get contributions
        $sss_contribution = $this->entityManager->getRepository(SSSConfig::class)->findAll();
        $pagibig_contribution = $payrollProfile->getPagibigContribution();
        $philhealth_contribution = $payrollProfile->getPhilhealthContribution();

        // Calculate total salary
        $basic_salary = $payrollProfile->getMonthlySalary() + $payrollProfile->getAllowance();
        $hourly_rate = round($basic_salary / $working_hours_per_month, 2);
        $bi_weekly_salary = $basic_salary / 2;

        // Check Salary adjustment
        $salary_adjustment = 0;
        $salary_adjustment_nontax = 0;
        $salary_adjustment_taxable = 0;
        if($data['salary_adjustment'] && $data['salary_adjustment'] == true){
            $salary_adjustment = $data['sal_adj_total_salary'];
            $salary_adjustment_nontax = $data['sal_adj_total_nontax_salary'];
            $salary_adjustment_taxable = $data['sal_adj_total_tax_salary'];
        }
        // echo $salary_adjustment;
        // Calculate Total rendered days
        $totalRenderedDays = round($totalRenderedMinutes / $minutesPerDay, 2);
        $salaryPerDay = $payrollProfile->getDailyRate();
        $salaryPerDayNonTax = $payrollProfile->getDailyRate() + $payrollProfile->getDailyRateNonTax();
        $salaryForRenderedDays = ($salaryPerDay * $totalRenderedDays) + ($payrollProfile->getAllowance() / 2) + $total_calculated_overtime - $total_calculated_undertime + $salary_adjustment_taxable;
        $salaryForRenderedDaysNonTax = ($salaryPerDayNonTax * $totalRenderedDays) + ($payrollProfile->getAllowance() / 2) + $total_calculated_overtime - $total_calculated_undertime + $salary_adjustment;
        $total_tax_shield = ($payrollProfile->getDailyRateNonTax() * $totalRenderedDays);

        // Calculate Mandatory deductions semi monthly
        $sss_deduction = $this->calculateSSSDeductions($basic_salary, $sss_contribution) / 2;
        $philhealth_deduction = $this->calculatePhilHealthDeduction($basic_salary, $philhealth_contribution) / 2;
        $hdmf_deduction = $this->calculatePagIbigDeduction($basic_salary, $pagibig_contribution) / 2;
        $total_mandatory_deduction = $sss_deduction + $philhealth_deduction + $hdmf_deduction;

        // Calculate Loans Deduction semi monthly    
        $total_loan_deduction = $this->calculateLoanDeduction($payrollProfile);

        // Calculate tax deduction semi monthly
        $tax_deduction = $this->calculateTaxDeduction($salaryForRenderedDays - $total_mandatory_deduction);

        // Total deductions
        $total_deduction = $total_mandatory_deduction + $tax_deduction + $total_loan_deduction;
        $net_salary = round(($salaryForRenderedDaysNonTax - $total_deduction), 2);

        // Prepare response data
        $responseData = [
            'basic_salary' => $basic_salary,
            'total_rendered_minutes' => $totalRenderedMinutes,
            'worker_logs_count' => count($workerLogs),
            'minutes_per_day' => $minutesPerDay,
            'total_rendered_days' => $totalRenderedDays,
            'daily_rate' => $salaryPerDay,
            'hourly_rate' => $hourly_rate,
            'overtime_salary' => $total_calculated_overtime,
            'undertime_salary' => $total_calculated_undertime,
            'total_salary' => $salaryForRenderedDaysNonTax,
            'bi_weekly_salary' => $bi_weekly_salary,
            'sss_deduction' => $sss_deduction,
            'philhealth_deduction' => $philhealth_deduction,
            'hdmf_deduction' => $hdmf_deduction,
            'total_mandatories_deduction' => $total_mandatory_deduction,
            'tax_deduction' => round($tax_deduction, 2),
            'total_deduction' => round($total_deduction, 2),
            'net_salary' => $net_salary,
            'total_tax_shield' => $total_tax_shield,
            'salaryForRenderedDays' => round($salaryForRenderedDays, 2),
            'totalOvertime' => $totalOvertime,
            'totalUndertime' => $totalUndertime,
            'totalOvertimeAmount' => $total_calculated_overtime,
            'totalUndertimeAmount' => $total_calculated_undertime,
        ];

        // Create new EmployeePayroll entity
        $employeePayroll->setRenderedDays($responseData['total_rendered_days']);
        // $employeePayroll->setPayrollProfile($payrollProfile);
        $employeePayroll->setBasicSalary($basic_salary);
        $employeePayroll->setOvertimeSalary($responseData['overtime_salary']);
        $employeePayroll->setUndertimeDeduction($responseData['undertime_salary']);
        $employeePayroll->setTotalSalary($responseData['total_salary']);
        $employeePayroll->setSssShare($sss_deduction);
        $employeePayroll->setPhilhealthShare($philhealth_deduction); // New field added
        $employeePayroll->setHdmfContribution($hdmf_deduction); // New field added
        $employeePayroll->setInsuranceContribution(0); // New field added
        $employeePayroll->setTaxContribution($responseData['tax_deduction']); // New field added
        $employeePayroll->setCashAdvanceDeduction(0); // New field added
        $employeePayroll->setTotalDeduction($total_deduction);
        $employeePayroll->setNetSalary($net_salary);
        $employeePayroll->setTotalTaxShield($total_tax_shield);
        //Set 13th month pay
        $thirteenthMonthPay = 0;
        if($payrollProfile->isIncludeSalaryAdjustmentForThirteenthMonth()){
            $thirteenthMonthPay += $salary_adjustment;
        }
        if($payrollProfile->isIncludeSalaryForThirteenthMonth()){
            $thirteenthMonthPay += ($salaryPerDay * $totalRenderedDays);
        }
        if($payrollProfile->isIncludeTaxshieldForThirteenthMonth()){
            $thirteenthMonthPay += $total_tax_shield;
        }
        $employeePayroll->setThirteenthMonthPay($thirteenthMonthPay);

        //Create new Tax Shield 
        // $newTaxShield = new TaxShield();
        // $newTaxShield->setMonthlyTaxShield($payrollProfile->getAllowanceNonTax());
        // $newTaxShield->setDailyTaxShield($payrollProfile->getDailyRateNonTax());
        // $newTaxShield->setPayroll($employeePayroll);

        // Persist the payroll data
        $this->entityManager->persist($employeePayroll);
        // $this->entityManager->persist($newTaxShield);
        // $this->deductLoans($payrollProfile, $payrollProfile->getEmployeeRecord(), $employeePayroll);
        $this->createSalaryAdjustment($employeePayroll, $data);
        $this->entityManager->flush();

        // Log the payroll creation event
        // $this->auditlog->log('Created new payroll entry for profile ID: ' . $payrollProfile->getId());

        return $this->json(['message' => 'Payroll created successfully', 'data' => $responseData], JsonResponse::HTTP_CREATED);
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
            
        $philhealth_rate = $philhealth_contribution->getEmployeeShare() / 100;

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
            $tax_range_start = $taxConfig->getTaxBracketRange() / 2;
            $tax_range_end = $taxConfig->getTaxBracketRangeEnd() / 2;

            if ($totalSalary > $tax_range_start && $totalSalary <= $tax_range_end) {
                $excess_income = $totalSalary - $tax_range_start;
                return round(($taxConfig->getTaxDeductionAmount() / 2) + ($excess_income * ($taxConfig->getTaxDeductionPercent() / 100) ), 2);
            }
        }
        return 0;
    }

    private function calculateLoanDeduction(EmployeePayrollProfile $payrollProfile): float
    {
        $total_loan_deductions = 0;
    
        // Calculate the SSS loan deduction
        $sssLoans = $payrollProfile->getSssLoans();
        foreach ($sssLoans as $sssLoan) {
            if ($sssLoan->getAmount() > 0) {
                $sss_deduction = min($sssLoan->getDeduction(), $sssLoan->getAmount());
                $total_loan_deductions += $sss_deduction;
            }
        }
    
        // Calculate the HDMF loan deduction
        $pagibigLoans = $payrollProfile->getPagibigLoans();
        foreach ($pagibigLoans as $pagibigLoan) {
            if ($pagibigLoan->getAmount() > 0) {
                $hdmf_deduction = min($pagibigLoan->getDeduction(), $pagibigLoan->getAmount());
                $total_loan_deductions += $hdmf_deduction;
            }
        }
    
        // Calculate the Cash Advance deduction
        $cashAdvances = $payrollProfile->getCashAdvances();
        foreach ($cashAdvances as $cashAdvance) {
            if ($cashAdvance->getCashAdvanceAmount() > 0 || $cashAdvance->isEnabled()) {
                $cash_advance_deduction = min($cashAdvance->getCashAdvanceDeduction(), $cashAdvance->getCashAdvanceAmount());
                $total_loan_deductions += $cash_advance_deduction;
            }
        }

        return $total_loan_deductions;
    }
    
    
    private function deductLoans(EmployeePayrollProfile $payrollProfile, EmployeeRecords $empRecord, $newPayroll)
    {
        // Handle SSS Loans
        $sssLoans = $payrollProfile->getSssLoans();
        $sss_calamity_loan = 0;
        $sss_loan = 0;
        foreach ($sssLoans as $sssLoan) {
            $original_sss_loan = $sssLoan->getAmount();
            $deduction = $sssLoan->getDeduction();
    
            // If the original amount is zero, skip this loan
            if ($original_sss_loan <= 0) {
                continue;
            }
    
            // Ensure deduction does not exceed the remaining amount
            if ($deduction > $original_sss_loan) {
                $deduction = $original_sss_loan;
            }
    
            $total_sss_loan = $original_sss_loan - $deduction;
            $remark = $sssLoan->getRemark();

            if($remark == 'sss_calamity'){
                $sss_calamity_loan += $deduction;
                
            }
            if($remark == 'sss_loan'){
                $sss_loan += $deduction;
            }
    
            // Update SSS loan history
            $sssLoanHistory = new SSSLoansHistory();
            $sssLoanHistory->setPreviousAmount($original_sss_loan);
            $sssLoanHistory->setDeduction($deduction);
            $sssLoanHistory->setCurrentAmount($total_sss_loan);
            $sssLoanHistory->setRemark($remark);
            $sssLoanHistory->setSssLoan($sssLoan);
            $sssLoanHistory->setPayrollProfile($payrollProfile);
            $sssLoanHistory->setDate(new \DateTimeImmutable());
            // $sssLoanHistory->setPayroll($newPayroll);
    
            $this->entityManager->persist($sssLoanHistory);
    
            // Update SSS loan
            $sssLoan->setAmount($total_sss_loan);
            $this->entityManager->persist($sssLoan);
        }

        $newPayroll->setSssCalamityLoan($sss_calamity_loan);
        $newPayroll->setSssLoan($sss_loan);
    
        // Handle Pagibig Loans
        $pagibigLoans = $payrollProfile->getPagibigLoans();
        $hdmf_loan = 0;
        $hdmf_calamity = 0;
        $hdmf_mp2 = 0;
        foreach ($pagibigLoans as $pagibigLoan) {
            $original_hdmf_loan = $pagibigLoan->getAmount();
            $deduction = $pagibigLoan->getDeduction();
    
            // If the original amount is zero, skip this loan
            if ($original_hdmf_loan <= 0) {
                continue;
            }
    
            // Ensure deduction does not exceed the remaining amount
            if ($deduction > $original_hdmf_loan) {
                $deduction = $original_hdmf_loan;
            }
            if($remark == 'hdmf_loan'){
                $hdmf_loan += $deduction;
            }
            if($remark == 'hdmf_calamity'){
                $hdmf_calamity += $deduction;
            }
            if($remark == 'hdmf_mp2'){
                $hdmf_mp2 += $deduction;
            }
    
            $total_hdmf_loan = $original_hdmf_loan - $deduction;
            $remark = $pagibigLoan->getRemark();
    
            // Update Pagibig loan history
            $pagibigLoanHistory = new PagibigLoansHistory();
            $pagibigLoanHistory->setPreviousAmount($original_hdmf_loan);
            $pagibigLoanHistory->setDeduction($deduction);
            $pagibigLoanHistory->setCurrentAmount($total_hdmf_loan);
            $pagibigLoanHistory->setRemark($remark);
            $pagibigLoanHistory->setPagibigLoansHistory($pagibigLoan);
            $pagibigLoanHistory->setPayrollProfile($payrollProfile);
            $pagibigLoanHistory->setDate(new \DateTimeImmutable());
            // $pagibigLoanHistory->setPayroll($newPayroll);
    
            $this->entityManager->persist($pagibigLoanHistory);
    
            // Update Pagibig loan
            $pagibigLoan->setAmount($total_hdmf_loan);
            $this->entityManager->persist($pagibigLoan);
        }

        $newPayroll->setHdmfLoan($hdmf_loan);
        $newPayroll->setHdmfCalamityLoan($hdmf_calamity);
        $newPayroll->setHdmfMp2($hdmf_mp2);
    
        // Handle Cash Advances
        $cashAdvances = $payrollProfile->getCashAdvances();
        $total_ca = 0;
        foreach ($cashAdvances as $cashAdvance) {
            $original_cash_advance = $cashAdvance->getCashAdvanceAmount();
            $deduction = $cashAdvance->getCashAdvanceDeduction();
    
            // If the original amount is zero, skip this cash advance
            if ($original_cash_advance <= 0) {
                continue;
            }
    
            // Ensure deduction does not exceed the remaining amount
            if ($deduction > $original_cash_advance) {
                $deduction = $original_cash_advance;
            }

            $total_ca += $deduction;
    
            $total_cash_advance = $original_cash_advance - $deduction;
            $remark = $cashAdvance->getRemarks();
    
            // Update Cash Advance history
            $cashAdvanceHistory = new CashAdvanceHistory();
            $cashAdvanceHistory->setPreviousAmount($original_cash_advance);
            $cashAdvanceHistory->setDeduction($deduction);
            $cashAdvanceHistory->setCurrentAmount($total_cash_advance);
            $cashAdvanceHistory->setRemarks($remark);
            $cashAdvanceHistory->setCashAdvance($cashAdvance);
            $cashAdvanceHistory->setPayrollProfile($payrollProfile);
            $cashAdvanceHistory->setPayroll($newPayroll);
    
            $this->entityManager->persist($cashAdvanceHistory);
    
            // Update Cash Advance
            $cashAdvance->setCashAdvanceAmount($total_cash_advance);
            $this->entityManager->persist($cashAdvance);
        }

        $newPayroll->setTotalCa($total_ca);
    
        // Persist changes to payroll profile
        $this->entityManager->persist($payrollProfile);
        $this->entityManager->flush();
    }

    private function createSalaryAdjustment(EmployeePayroll $employeePayroll, $data)
    {
        if($employeePayroll->getSalaryAdjustment()) {
            $newSalaryAdjustment = $employeePayroll->getSalaryAdjustment();
        }
        else {
            $newSalaryAdjustment = new SalaryAdjustment();
        }
        
        $newSalaryAdjustment->setPayroll($employeePayroll);
        $newSalaryAdjustment->setDailyRate($employeePayroll->getPayrollProfile()->getDailyRate());
        $newSalaryAdjustment->setRegularDays($employeePayroll->getRenderedDays());
        $newSalaryAdjustment->setRegularDaysPay($employeePayroll->getTotalSalary());
        $newSalaryAdjustment->setRegularNdotHours($data['sal_adj_regular_ndot_hours']);
        $newSalaryAdjustment->setRegularNdotAmount($data['sal_adj_regular_ndot_pay']);
        $newSalaryAdjustment->setOtMealSubsidy($data['sal_adj_ot_meal_subsidy_days']);
        $newSalaryAdjustment->setOtMealSubsidyAmount($data['sal_adj_ot_meal_subsidy_amount']);
        $newSalaryAdjustment->setAboveFourHours($data['sal_adj_4hrs_more_weekend_holiday']);
        $newSalaryAdjustment->setAboveFourHoursAmount($data['sal_adj_amount']);
        $newSalaryAdjustment->setTempAllowanceAmount($data['sal_adj_temp_allowance']);
        $newSalaryAdjustment->setWellness($data['sal_adj_wellness']);
        $newSalaryAdjustment->setSalaryAdjustment($data['sal_adj_amount']);
        $newSalaryAdjustment->setTotalNontaxSalAdjustment($data['sal_adj_total_nontax_salary']);
        $newSalaryAdjustment->setTotalTaxableSalAdjustment($data['sal_adj_total_tax_salary']);
        $newSalaryAdjustment->setTotalSalaryAdjustment($data['sal_adj_total_salary']);
        $this->entityManager->persist($newSalaryAdjustment);
    }

    private function getOvertimeInDTRAdjustments($emp_record_id, $date_start, $date_end) : float
    {
        $dtr_adjustments        = $this->entityManager->getRepository(DTRAdjutments::class)->findByEmpRecordAndDateRange($emp_record_id, $date_start, $date_end);
        $total_overtime         = 0;

        foreach($dtr_adjustments as $adj_items){
            $worker_logs        = $adj_items->getWorkerLogs();
            $overtime           = $worker_logs->getOvertime() ?? 0;
            $total_overtime     += $overtime;
        }

        return $total_overtime;
    }
}
