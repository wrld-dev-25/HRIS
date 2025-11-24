<?php

namespace App\Controller;

use App\Service\AuditLog;
use App\Entity\EmployeePayroll;
use App\Entity\EmployeePayrollProfile;
use App\Repository\EmployeePayrollProfileRepository;
use App\Service\UserAccessValidation;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\EmployeePayrollRepository;
use App\Repository\EmployeeRecordsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class EmployeePayrollController extends AbstractController
{
    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $validateAccess;

    public function __construct(EntityManagerInterface $entityManager,  UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, UserAccessValidation $validateAccess)
    {
        $this->entityManager    = $entityManager;
        $this->passhasher       = $passhasher;
        $this->jwtManager       = $jwtManager;
        $this->auditlog         = $auditLog;
        $this->validateAccess   = $validateAccess;
    }
    
    #[Route('/api/employee-payroll', name: 'create_employee_payroll', methods: ['POST'])]
    public function createEmployeePayroll(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $employeePayroll = new EmployeePayroll();
        $employeePayroll->setBasicSalary($data['basic_salary'])
                        ->setOvertimeSalary($data['overtime_salary'])
                        ->setTotalSalary($data['total_salary'])
                        ->setTotalDeduction($data['total_deduction'])
                        ->setNetSalary($data['net_salary'])
                        ->setThirteenthMonthPay($data['thirteenth_month_pay'])
                        ->setSssShare($data['sss_share'])
                        ->setPhilhealthShare($data['philhealth_share'])
                        ->setHdmfContribution($data['hdmf_contribution'])
                        ->setInsuranceContribution($data['insurance_contribution'])
                        ->setTaxContribution($data['tax_contribution'])
                        ->setCashAdvanceDeduction($data['cash_advance_deduction']);

        try {
            $this->entityManager->persist($employeePayroll);
            $this->entityManager->flush();

            return $this->json(['message' => 'EmployeePayroll created successfully.'], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to create EmployeePayroll.', 'message' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/employee-payroll/{id}', name: 'get_employee_payroll', methods: ['GET'])]
    public function getEmployeePayroll(int $id, EmployeePayrollRepository $repository): JsonResponse
    {
        $employeePayroll = $repository->find($id);

        if (!$employeePayroll) {
            return $this->json(['error' => 'EmployeePayroll not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        return $this->json([
            'id' => $employeePayroll->getId(),
            'basic_salary' => $employeePayroll->getBasicSalary(),
            'overtime_salary' => $employeePayroll->getOvertimeSalary(),
            'total_salary' => $employeePayroll->getTotalSalary(),
            'total_deduction' => $employeePayroll->getTotalDeduction(),
            'net_salary' => $employeePayroll->getNetSalary(),
            'thirteenth_month_pay' => $employeePayroll->getThirteenthMonthPay(),
            'sss_share' => $employeePayroll->getSssShare(),
            'philhealth_share' => $employeePayroll->getPhilhealthShare(),
            'hdmf_contribution' => $employeePayroll->getHdmfContribution(),
            'insurance_contribution' => $employeePayroll->getInsuranceContribution(),
            'tax_contribution' => $employeePayroll->getTaxContribution(),
            'cash_advance_deduction' => $employeePayroll->getCashAdvanceDeduction(),
        ], JsonResponse::HTTP_OK);
    }

    #[Route('/api/employee-payroll', name: 'list_employee_payrolls', methods: ['GET'])]
    public function listEmployeePayrolls(EmployeePayrollRepository $repository): JsonResponse
    {
        $employeePayrolls = $repository->findAll();

        $payrollsArray = array_map(function (EmployeePayroll $payroll) {
            return [
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
            ];
        }, $employeePayrolls);

        return $this->json($payrollsArray, JsonResponse::HTTP_OK);
    }

    #[Route('/api/employee-payroll/{id}', name: 'update_employee_payroll', methods: ['PUT'])]
    public function updateEmployeePayroll(int $id, Request $request, EmployeePayrollRepository $repository): JsonResponse
    {
        $employeePayroll = $repository->find($id);

        if (!$employeePayroll) {
            return $this->json(['error' => 'EmployeePayroll not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);

        $employeePayroll->setBasicSalary($data['basic_salary'] ?? $employeePayroll->getBasicSalary())
                        ->setOvertimeSalary($data['overtime_salary'] ?? $employeePayroll->getOvertimeSalary())
                        ->setTotalSalary($data['total_salary'] ?? $employeePayroll->getTotalSalary())
                        ->setTotalDeduction($data['total_deduction'] ?? $employeePayroll->getTotalDeduction())
                        ->setNetSalary($data['net_salary'] ?? $employeePayroll->getNetSalary())
                        ->setThirteenthMonthPay($data['thirteenth_month_pay'] ?? $employeePayroll->getThirteenthMonthPay())
                        ->setSssShare($data['sss_share'] ?? $employeePayroll->getSssShare())
                        ->setPhilhealthShare($data['philhealth_share'] ?? $employeePayroll->getPhilhealthShare())
                        ->setHdmfContribution($data['hdmf_contribution'] ?? $employeePayroll->getHdmfContribution())
                        ->setInsuranceContribution($data['insurance_contribution'] ?? $employeePayroll->getInsuranceContribution())
                        ->setTaxContribution($data['tax_contribution'] ?? $employeePayroll->getTaxContribution())
                        ->setCashAdvanceDeduction($data['cash_advance_deduction'] ?? $employeePayroll->getCashAdvanceDeduction());

        try {
            $this->entityManager->flush();

            return $this->json(['message' => 'EmployeePayroll updated successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to update EmployeePayroll.', 'message' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/employee-payroll/{id}', name: 'delete_employee_payroll', methods: ['DELETE'])]
    public function deleteEmployeePayroll(int $id, EmployeePayrollRepository $repository): JsonResponse
    {
        $employeePayroll = $repository->find($id);

        if (!$employeePayroll) {
            return $this->json(['error' => 'EmployeePayroll not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        try {
            $this->entityManager->remove($employeePayroll);
            $this->entityManager->flush();

            return $this->json(['message' => 'EmployeePayroll deleted successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to delete EmployeePayroll.', 'message' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/employees-payroll', name: 'api_employees_payroll_list', methods: ['GET'])]
    public function listEmployeesPayroll(EmployeeRecordsRepository $employeeRecordsRepository, EmployeePayrollProfileRepository $empPayrollProfile): JsonResponse
    {
        // Fetch all EmployeeRecords
        $employees = $employeeRecordsRepository->findAll();
    
        // Create an array to hold the structured employee data
        $employeeData = [];
        $salaryTotals = [];
        $totalBasicSalaryPerMonth = 0;
        $totalTaxShieldSalaryPerMonth = 0;
        $totalBasicSalaryPerYear = 0;
        $totalTaxShieldSalaryPerYear = 0;
        $totalPayPerYear = 0;
        // Loop through each employee and retrieve their payroll profile
        foreach ($employees as $employee) {
            // Access the associated EmployeePayrollProfile, if any
            $payrollProfile = $empPayrollProfile->findOneBy(['employee_record' => $employee->getId()]);
    
            // Structure the employee data with payroll profile information
            $employeeData[] = [
                'id' => $employee->getId(),
                'first_name' => $employee->getFirstName(),
                'middle_name' => $employee->getMiddleName(),
                'last_name' => $employee->getLastName(),
                'extension' => $employee->getExtension(),
                'employee_code' => $employee->getEmployeeCode(),
                'payroll_profile' => $payrollProfile ? [
                    'id' => $payrollProfile->getId(),
                    'monthly_salary' => $payrollProfile->getMonthlySalary(),
                    'allowance' => $payrollProfile->getAllowance(),
                    'overtime_rate' => $payrollProfile->getOvertimeRate(),
                    'late_rate' => $payrollProfile->getLateRate(),
                    'daily_rate' => $payrollProfile->getDailyRate(),
                    'hourly_rate' => $payrollProfile->getHourlyRate(),
                    'daily_rate_non_tax' => $payrollProfile->getDailyRateNonTax(),
                    'allowance_non_tax' => $payrollProfile->getAllowanceNonTax(),
                    // Add any other associations or fields here
                ] : null
            ];
            if($payrollProfile){
                $totalBasicSalaryPerMonth       += $payrollProfile->getMonthlySalary() ?? 0;
                $totalTaxShieldSalaryPerMonth   += $payrollProfile->getAllowanceNonTax() ?? 0;
                $totalBasicSalaryPerYear        += $totalBasicSalaryPerMonth * 12 ?? 0;
                $totalTaxShieldSalaryPerYear    += $totalTaxShieldSalaryPerMonth * 12 ?? 0;
                $totalPayPerYear                += $totalBasicSalaryPerYear + $totalTaxShieldSalaryPerYear ?? 0;
            }
            else{
                $totalBasicSalaryPerMonth       += 0;
                $totalTaxShieldSalaryPerMonth   += 0;
                $totalBasicSalaryPerYear        += 0;
                $totalTaxShieldSalaryPerYear    += 0;
                $totalPayPerYear                += 0;
            }
            
        }

        $salaryTotals = [
            'total_basic_salary_per_month'      => $totalBasicSalaryPerMonth,    
            'total_taxshield_per_month'         => $totalTaxShieldSalaryPerMonth,
            'total_basic_salary_per_year'       => $totalBasicSalaryPerYear,
            'total_taxshield_per_year'          => $totalTaxShieldSalaryPerYear, 
            'total_pay_per_year'                => $totalPayPerYear,
        ];
    
        // Return as JSON response
        return $this->json(['message' => 'Payroll created successfully', 'emp_list' => $employeeData, 'salary_totals' => $salaryTotals], JsonResponse::HTTP_OK);
    }
    
    
    
}
