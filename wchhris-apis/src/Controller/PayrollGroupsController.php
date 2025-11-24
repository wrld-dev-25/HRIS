<?php

namespace App\Controller;

use App\Entity\PayrollGroups;
use App\Repository\PayrollGroupsRepository;
use App\Service\AuditLog;
use App\Service\UserAccessValidation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class PayrollGroupsController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private JWTTokenManagerInterface $jwtManager;
    private UserPasswordHasherInterface $passhasher;
    private AuditLog $auditlog;
    private UserAccessValidation $validateAccess;

    public function __construct(
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passhasher,
        JWTTokenManagerInterface $jwtManager,
        AuditLog $auditLog,
        UserAccessValidation $validateAccess
    ) {
        $this->entityManager = $entityManager;
        $this->passhasher = $passhasher;
        $this->jwtManager = $jwtManager;
        $this->auditlog = $auditLog;
        $this->validateAccess = $validateAccess;
    }
    
    #[Route('/api/payroll-groups/list/{year}', name: 'payroll_groups_list', methods: ['GET'])]
    public function list(PayrollGroupsRepository $repository, int $year): JsonResponse
    {
        $payrollGroups = $repository->findByDateStartYear($year);
        $data = array_map(function ($group) {
            foreach($group->getEmployeePayrolls() as $employeePayroll){
                $empRecord = $employeePayroll->getPayrollProfile()->getEmployeeRecord();
                $empName = $empRecord->getLastName().', '. $empRecord->getFirstName().' '.$empRecord->getMiddleName();
                $payrolls[] = [
                    'id'                => $employeePayroll->getId() ?? '',
                    'emp_id'            => $empRecord->getId() ?? '',
                    'emp_code'          => $empRecord->getEmployeeCode() ?? '',
                    'emp_name'          => $empName ?? '',
                    'basic_salary'      => $employeePayroll->getBasicSalary() ?? '',
                    'overtime_salary'   => $employeePayroll->getOvertimeSalary() ?? '',
                    'total_salary'      => $employeePayroll->getTotalSalary() ?? '',
                    'total_deduction'   => $employeePayroll->getTotalDeduction() ?? '',
                    'net_salary'        => $employeePayroll->getNetSalary() ?? '',
                ];
            }
            return [
                'id' => $group->getId(),
                'date_start' => $group->getDateStart()?->format('Y-m-d'),
                'date_end' => $group->getDateEnd()?->format('Y-m-d'),
                'remarks' => $group->getRemarks(),
                'emp_payrolls' => $payrolls,
            ];

        }, $payrollGroups);
        return $this->json(['message' => 'Payroll groups retrieved successfully.', 'data' => $data], JsonResponse::HTTP_OK);
    }

    #[Route('/api/payroll-groups/find/{id}', name: 'payroll_groups_show', methods: ['GET'])]
    public function show(PayrollGroupsRepository $repository, int $id): JsonResponse
    {
        $payrollGroup = $repository->find($id);

        if (!$payrollGroup) {
            return $this->json(['message' => 'Payroll group not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = [
            'id' => $payrollGroup->getId(),
            'date_start' => $payrollGroup->getDateStart()?->format('Y-m-d'),
            'date_end' => $payrollGroup->getDateEnd()?->format('Y-m-d'),
            'remarks' => $payrollGroup->getRemarks(),
        ];

        return $this->json(['message' => 'Payroll group retrieved successfully.', 'data' => $data], JsonResponse::HTTP_OK);
    }

    #[Route('/api/payroll-groups/create', name: 'payroll_groups_create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $payrollGroup = new PayrollGroups();
        $payrollGroup->setDateStart(new \DateTime($data['date_start']))
            ->setDateEnd(new \DateTime($data['date_end']))
            ->setRemarks($data['remarks'] ?? null);

        $this->entityManager->persist($payrollGroup);
        $this->entityManager->flush();

        return $this->json(['message' => 'Payroll group created successfully.'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/api/payroll-groups/update/{id}', name: 'payroll_groups_update', methods: ['PUT'])]
    public function update(Request $request, PayrollGroupsRepository $repository, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $payrollGroup = $repository->find($id);

        if (!$payrollGroup) {
            return $this->json(['message' => 'Payroll group not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        if (isset($data['date_start'])) {
            $payrollGroup->setDateStart(new \DateTime($data['date_start']));
        }
        if (isset($data['date_end'])) {
            $payrollGroup->setDateEnd(new \DateTime($data['date_end']));
        }
        if (isset($data['remarks'])) {
            $payrollGroup->setRemarks($data['remarks']);
        }

        $this->entityManager->flush();

        return $this->json(['message' => 'Payroll group updated successfully.'], JsonResponse::HTTP_OK);
    }

    #[Route('/api/payroll-groups/delete/{id}', name: 'payroll_groups_delete', methods: ['DELETE'])]
    public function delete(PayrollGroupsRepository $repository, int $id): JsonResponse
    {
        $payrollGroup = $repository->find($id);

        if (!$payrollGroup) {
            return $this->json(['message' => 'Payroll group not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($payrollGroup);
        $this->entityManager->flush();

        return $this->json(['message' => 'Payroll group deleted successfully.'], JsonResponse::HTTP_OK);
    }
}
