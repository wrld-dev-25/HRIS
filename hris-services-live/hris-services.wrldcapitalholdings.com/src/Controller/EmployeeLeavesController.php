<?php

namespace App\Controller;

use App\Service\AuditLog;
use App\Entity\LeavePolicy;
use App\Entity\EmployeeRecords;
use App\Entity\YearlyEmployeeLeave;
use App\Service\UserAccessValidation;
use App\Entity\SelectedEmployeeLeaves;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\LeaveRequestRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

#[Route('/api/employee-leaves')]
class EmployeeLeavesController extends AbstractController
{
    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $validateAccess;
    private $leaveRequestRepository;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, UserAccessValidation $validateAccess, LeaveRequestRepository $leaveRequestRepository)
    {
        $this->entityManager = $entityManager;
        $this->passhasher = $passhasher;
        $this->jwtManager = $jwtManager;
        $this->auditlog = $auditLog;
        $this->validateAccess = $validateAccess;
        $this->leaveRequestRepository = $leaveRequestRepository;
    }
    
    #[Route('/list', name: 'app_employee_leaves')]
    public function view_employee_leaves_list(Request $request): JsonResponse
    {
        $employeeList = $this->entityManager->getRepository(EmployeeRecords::class)->findAll();
        $selectedYear = "2024";
        foreach($employeeList as $employee){
            $employeeLeaveData= [];
            $employeeLeaveList = $this->entityManager->getRepository(YearlyEmployeeLeave::class)->findOneBy(['emp_record' => $employee->getId(), 'year' => $selectedYear]);
            if($employeeLeaveList){
                $selectedLeaves = $this->entityManager->getRepository(SelectedEmployeeLeaves::class)->findBy(['employee_leave' => $employeeLeaveList->getId()]);
                //Loop Selected Leaves per Year
                foreach($selectedLeaves as $leaveItem){
                    $employeeLeaveData[] = [
                        'emp_leave_id'          => $employeeLeaveList->getId(),
                        'year'                  => $employeeLeaveList->getYear(),
                        'selected_leave_id'     => $leaveItem->getId(),
                        'leave_policy_id'       => $leaveItem->getLeavePolicy()->getId(),
                        'leave_policy_name'     => $leaveItem->getLeavePolicy()->getName(),
                        'no_of_days'            => $leaveItem->getNoOfDays(),
                        'used_days'             => $leaveItem->getUsedDays(),
                        'carried_over_days'     => $leaveItem->getCarriedOverDays(),
                        'carry_over_policy'     => $leaveItem->getCarryOverPolicy(),
                        'status'                => $leaveItem->getStatus(),
                    ];
                }
            }

            $data[] = [
                'emp_id'            => $employee->getId(),
                'year'              => $selectedYear,
                'emp_fullname'      => $employee->getLastName().", ".$employee->getFirstName()." ".$employee->getMiddleName(),
                'employee_leaves'   => $employeeLeaveData, 
                'emp_code'          => $employee->getEmployeeCode(),
            ];
        }

        return $this->json([
            'message' => 'Success',
            'emp_with_leave_list' => $data,
        ], JsonResponse::HTTP_OK);
    }

    #[Route('/find/{id}', name: 'find_employee_leaves')]
    public function view_employee_leaves(Request $request, string $id): JsonResponse
    {
        $employee = $this->entityManager->getRepository(EmployeeRecords::class)->findOneBy(['id' => $id]);
        $selectedYear = "2024";
        $data = [];
        
        $employeeLeaveData= [];
        // $employeeLeaveList = $this->entityManager->getRepository(YearlyEmployeeLeave::class)->findOneBy(['emp_record' => $employee->getId(), 'year' => $selectedYear]);
        $employeeLeaveList = $this->entityManager->getRepository(YearlyEmployeeLeave::class)->findOneBy(['emp_record' => $employee->getId()]);
        if($employeeLeaveList){
            $selectedLeaves = $this->entityManager->getRepository(SelectedEmployeeLeaves::class)->findBy(['employee_leave' => $employeeLeaveList->getId()]);
            //Loop Selected Leaves per Year
            foreach($selectedLeaves as $leaveItem){
                $employeeLeaveData[] = [
                    'emp_leave_id'          => $employeeLeaveList->getId(),
                    'year'                  => $employeeLeaveList->getYear(),
                    'selected_leave_id'     => $leaveItem->getId(),
                    'leave_policy_id'       => $leaveItem->getLeavePolicy()->getId(),
                    'leave_policy_name'     => $leaveItem->getLeavePolicy()->getName(),
                    'no_of_days'            => $leaveItem->getNoOfDays(),
                    'used_days'             => $leaveItem->getUsedDays(),
                    'carried_over_days'     => $leaveItem->getCarriedOverDays(),
                    'carry_over_policy'     => $leaveItem->getCarryOverPolicy(),
                    'status'                => $leaveItem->getStatus(),
                ];
            }
        }

        $data = [
            'emp_id'            => $employee->getId(),
            'year'              => $selectedYear,
            'emp_fullname'      => $employee->getLastName().", ".$employee->getFirstName()." ".$employee->getLastName(),
            'employee_leaves'   => $employeeLeaveData, 
        ];

        return $this->json([
            'message' => 'Success',
            'emp_with_leave_list' => $data,
        ], JsonResponse::HTTP_OK);
    }

    #[Route('/create', name: 'app_create_employee_leaves')]
    public function create_employee_leaves(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (!$data) {
            return new JsonResponse(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $emp_record = $this->entityManager->getRepository(EmployeeRecords::class)->find($data['emp_id']);

        if(!$emp_record){
            return new JsonResponse(['message' => 'Employee Record is missing.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $findExistingYearLeave = $this->entityManager->getRepository(YearlyEmployeeLeave::class)->findOneBy(['year' => $data['year'], 'year' => $emp_record->getId()]);
        if($findExistingYearLeave){
            return new JsonResponse(['message' => 'Employee Leave is existing.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $new_emp_leave = new YearlyEmployeeLeave();
        $new_emp_leave->setEmpRecord($emp_record);
        $new_emp_leave->setYear($data['year']);

        foreach ($data['selected_leaves'] as $leaveData) {
            $newSelectedLeave = new SelectedEmployeeLeaves();
            
            // Manually set each field from the data
            $newSelectedLeave->setNoOfDays($leaveData['no_of_days'] ?? 0.0);
            $newSelectedLeave->setUsedDays($leaveData['used_days'] ?? 0.0);
            $newSelectedLeave->setCarriedOverDays($leaveData['carried_over_days'] ?? 0.0);
            $newSelectedLeave->setCarryOverPolicy($leaveData['carry_over_policy'] ?? 0);
            $newSelectedLeave->setStatus($leaveData['status'] ?? 0);
        
            // Assuming `leave_policy_id` and `employee_leave_id` are provided in the data
            if (isset($leaveData['leave_policy_id'])) {
                $leavePolicy = $this->entityManager->find(LeavePolicy::class, $leaveData['leave_policy_id']);
                $newSelectedLeave->setLeavePolicy($leavePolicy);
            }
        
            $newSelectedLeave->setEmployeeLeave($new_emp_leave);
            // Persist the new leave record to prepare for saving
            $this->entityManager->persist($newSelectedLeave);
        }

        $this->entityManager->persist($new_emp_leave);
        $this->entityManager->flush();

        return $this->json([
            'message' => 'Success',
        ], JsonResponse::HTTP_OK);
    }

    #[Route('/update', name: 'app_update_employee_leaves', methods: ['PUT'])]
    public function update_employee_leaves(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (!$data) {
            return new JsonResponse(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $emp_record = $this->entityManager->getRepository(EmployeeRecords::class)->find($data['emp_id']);

        if(!$emp_record){
            return new JsonResponse(['message' => 'Employee Record is missing.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $findExistingYearLeave = $this->entityManager->getRepository(YearlyEmployeeLeave::class)->findOneBy(['year' => $data['year'], 'emp_record' => $emp_record->getId()]);
        if(!$findExistingYearLeave){
            $emp_leave = new YearlyEmployeeLeave();
            $emp_leave->setEmpRecord($emp_record);
            $emp_leave->setYear($data['year']);
            $this->entityManager->persist($emp_leave);
        }
        else{
            $emp_leave = $findExistingYearLeave;
        }

        foreach ($data['selected_leaves'] as $leave_policy_id) {
            $existingSelectedLeaves = $this->entityManager->getRepository(SelectedEmployeeLeaves::class)->findOneBy(['employee_leave' => $emp_leave, 'leave_policy' => $leave_policy_id]);

            if($existingSelectedLeaves){
                continue;
            }

            $selected_policy = $this->entityManager->find(LeavePolicy::class, $leave_policy_id);

            $newSelectedLeave = new SelectedEmployeeLeaves();
            // Manually set each field from the data
            $newSelectedLeave->setNoOfDays($selected_policy->getDays() ?? 0);
            $newSelectedLeave->setUsedDays(0);
            $newSelectedLeave->setCarriedOverDays(0);
            $newSelectedLeave->setCarryOverPolicy(0);
            $newSelectedLeave->setStatus(0);
            $newSelectedLeave->setLeavePolicy($selected_policy);
        
            $newSelectedLeave->setEmployeeLeave($emp_leave);
            // Persist the new leave record to prepare for saving
            $this->entityManager->persist($newSelectedLeave);
        }

        $this->entityManager->flush();

        return $this->json([
            'message' => 'Success',
        ], JsonResponse::HTTP_OK);
    }
}
