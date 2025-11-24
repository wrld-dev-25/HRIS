<?php

namespace App\Controller;

use DateTime;
use App\Service\AuditLog;
use App\Entity\LeavePolicy;
use App\Entity\LeaveRequest;
use App\Entity\EmployeeRecords;
use App\Entity\User;
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
use App\Service\NotificationService;
use App\Entity\Department;

class LeaveRequestController extends AbstractController
{
    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $validateAccess;
    private $leaveRequestRepository;
    private $notification;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, UserAccessValidation $validateAccess, LeaveRequestRepository $leaveRequestRepository, NotificationService $notification)
    {
        $this->entityManager = $entityManager;
        $this->passhasher = $passhasher;
        $this->jwtManager = $jwtManager;
        $this->auditlog = $auditLog;
        $this->validateAccess = $validateAccess;
        $this->leaveRequestRepository = $leaveRequestRepository;
        $this->notification = $notification;
    }

    /**
     * Determine the user responsible for the latest update on a leave request.
     * Prefers the direct user relation (user_id) and falls back to the employee record's user.
     */
    private function resolveUpdaterUser(LeaveRequest $leaveRequest): ?User
    {
        if ($leaveRequest->getUpdatedByUser() instanceof User) {
            return $leaveRequest->getUpdatedByUser();
        }

        if ($leaveRequest->getUser() instanceof User) {
            return $leaveRequest->getUser();
        }

        $employee = $leaveRequest->getUpdatedBy();
        return $employee?->getUser();
    }

    /**
     * Prefer names from the User table when resolving the updater; fall back to
     * employee record names if the user relation is missing.
     */
    private function formatUpdatedByName(LeaveRequest $leaveRequest): string
    {
        $user = $this->resolveUpdaterUser($leaveRequest);
        $updatedBy = $leaveRequest->getUpdatedBy();

        // Use User name when available (joined via user_id)
        if ($user instanceof User) {
            $firstName = $user->getFirstName();
            $middleName = $user->getMiddleName();
            $lastName = $user->getLastName();
        } elseif ($updatedBy !== null) {
            $firstName = $updatedBy->getFirstName();
            $middleName = $updatedBy->getMiddleName();
            $lastName = $updatedBy->getLastName();
        } else {
            return '';
        }

        $firstMiddle = trim(implode(' ', array_filter([
            $firstName ?? '',
            $middleName ?? '',
        ])));

        $parts = array_filter([
            $firstMiddle,
            trim((string) $lastName),
        ], static fn (string $part) => $part !== '');

        return implode(' ', $parts);
    }

    /**
     * Standard users (user_type id 14) should only see their own leave requests.
     */
    private function getVisibleLeaveRequests(?string $status = null): array
    {
        $qb = $this->leaveRequestRepository->createQueryBuilder('lr')
            ->leftJoin('lr.emp_record', 'er')
            ->leftJoin('lr.user', 'requestUser')
            ->leftJoin('er.user', 'empUser')
            ->leftJoin('lr.updated_by_user', 'updaterUser')
            ->addSelect('er', 'requestUser', 'empUser', 'updaterUser');

        if ($status !== null) {
            $qb->andWhere('lr.status = :status')
                ->setParameter('status', $status);
        }

        $currentUser = $this->getUser();
        if ($currentUser instanceof User) {
            $userTypeId = $currentUser->getUserType()?->getId();
            if ($userTypeId === 14) {
                $qb->andWhere('requestUser = :currentUser OR empUser = :currentUser')
                    ->setParameter('currentUser', $currentUser);
            }
        }

        return $qb->getQuery()->getResult();
    }
    
    #[Route('/api/leave/request/list', name: 'app_leave_request_list', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $leaveRequests = $this->getVisibleLeaveRequests();
        $data = [];

        foreach ($leaveRequests as $leaveRequest) {
            $updaterUser = $this->resolveUpdaterUser($leaveRequest);
            $updaterId = $updaterUser?->getId() ?? ($leaveRequest->getUpdatedBy()?->getId() ?? '');
            $data[] = [
                'id' => $leaveRequest->getId(),
                'emp_record'                    => $leaveRequest->getEmpRecord()->getId(),
                'emp_name'                      =>  $leaveRequest->getEmpRecord()->getLastName().", ". $leaveRequest->getEmpRecord()->getFirstName()." ". $leaveRequest->getEmpRecord()->getLastName(),
                'selected_leave_id'             => $leaveRequest->getSelectedLeave()->getId(),
                'selected_leave_policy_name'    => $leaveRequest->getSelectedLeave()->getLeavePolicy()->getName(),
                'reason'                        => $leaveRequest->getReason(),
                'date_start'                    => $leaveRequest->getDateStart()->format('Y-m-d H:i:s'),
                'date_end'                      => $leaveRequest->getDateEnd()->format('Y-m-d H:i:s'),
                'is_half_day'                   => $leaveRequest->isHalfDay(),
                'total_days_requested'          => $leaveRequest->getTotalDaysRequested(),
                'document'                      => $leaveRequest->getDocument(),
                'year'                          => $leaveRequest->getYear(),
                'status'                        => $leaveRequest->getStatus(),
                'updated_by'                    => $updaterId,
                'updated_by_name'               => $this->formatUpdatedByName($leaveRequest),
                'updated_at'                    => $leaveRequest->getUpdatedAt()?->format('Y-m-d H:i:s'),
                'created_at'                    => $leaveRequest->getCreatedAt()->format('Y-m-d H:i:s'),
                'total_days'                    => $leaveRequest->getTotalDaysRequested()
            ];
        }
        return new JsonResponse($data);
    }

    #[Route('/api/leave/request/list-approved', name: 'app_leave_request_list_approved', methods: ['GET'])]
    public function approvedList(): JsonResponse
    {
        $leaveRequests = $this->getVisibleLeaveRequests('1');
        $data = [];

        foreach ($leaveRequests as $leaveRequest) {
            $updaterUser = $this->resolveUpdaterUser($leaveRequest);
            $updaterId = $updaterUser?->getId() ?? ($leaveRequest->getUpdatedBy()?->getId() ?? '');
            $data[] = [
                'id' => $leaveRequest->getId(),
                'emp_record'                    => $leaveRequest->getEmpRecord()->getId(),
                'emp_name'                      =>  $leaveRequest->getEmpRecord()->getLastName().", ". $leaveRequest->getEmpRecord()->getFirstName()." ". $leaveRequest->getEmpRecord()->getLastName(),
                'selected_leave_id'             => $leaveRequest->getSelectedLeave()->getId(),
                'selected_leave_policy_name'    => $leaveRequest->getSelectedLeave()->getLeavePolicy()->getName(),
                'reason'                        => $leaveRequest->getReason(),
                'date_start'                    => $leaveRequest->getDateStart()->format('Y-m-d H:i:s'),
                'date_end'                      => $leaveRequest->getDateEnd()->format('Y-m-d H:i:s'),
                'is_half_day'                   => $leaveRequest->isHalfDay(),
                'total_days_requested'          => $leaveRequest->getTotalDaysRequested(),
                'document'                      => $leaveRequest->getDocument(),
                'year'                          => $leaveRequest->getYear(),
                'status'                        => $leaveRequest->getStatus(),
                'updated_by'                    => $updaterId,
                'updated_by_name'               => $this->formatUpdatedByName($leaveRequest),
                'updated_at'                    => $leaveRequest->getUpdatedAt()?->format('Y-m-d H:i:s'),
                'created_at'                    => $leaveRequest->getCreatedAt()->format('Y-m-d H:i:s'),
                'total_days'                    => $leaveRequest->getTotalDaysRequested()
            ];
        }
        return new JsonResponse($data);
    }

    #[Route('/api/leave/request/find/{id}', name: 'find_emp_leave_request', methods: ['GET'])]
    public function findEmployeeLeave(Request $request, string $id): JsonResponse
    {
        $leaveRequests = $this->leaveRequestRepository->findBy(['emp_record' => $id]);
        $data = [];
        foreach ($leaveRequests as $leaveRequest) {
            $updaterUser = $this->resolveUpdaterUser($leaveRequest);
            $updaterId = $updaterUser?->getId() ?? ($leaveRequest->getUpdatedBy()?->getId() ?? '');
            $data[] = [
                'id'                            => $leaveRequest->getId(),
                'emp_record'                    => $leaveRequest->getEmpRecord()->getId(),
                'emp_name'                      =>  $leaveRequest->getEmpRecord()->getLastName().", ". $leaveRequest->getEmpRecord()->getFirstName()." ". $leaveRequest->getEmpRecord()->getLastName(),
                'selected_leave_id'             => $leaveRequest->getSelectedLeave()->getId(),
                'selected_leave_policy_name'    => $leaveRequest->getSelectedLeave()->getLeavePolicy()->getName(),
                'reason'                        => $leaveRequest->getReason(),
                'date_start'                    => $leaveRequest->getDateStart()->format('Y-m-d H:i:s'),
                'date_end'                      => $leaveRequest->getDateEnd()->format('Y-m-d H:i:s'),
                'is_half_day'                   => $leaveRequest->isHalfDay(),
                'total_days_requested'          => $leaveRequest->getTotalDaysRequested(),
                'document'                      => $leaveRequest->getDocument(),
                'year'                          => $leaveRequest->getYear(),
                'status'                        => $leaveRequest->getStatus(),
                'updated_by'                    => $updaterId,
                'updated_by_name'               => $this->formatUpdatedByName($leaveRequest),
                'updated_at'                    => $leaveRequest->getUpdatedAt()?->format('Y-m-d H:i:s'),
                'created_at'                    => $leaveRequest->getCreatedAt()->format('Y-m-d H:i:s'),
                'total_days'                    => $leaveRequest->getTotalDaysRequested(),
                'count'                         => count($leaveRequests)
            ];
        }
        return new JsonResponse($data);
    }

    #[Route('/api/leave/request/create', name: 'app_leave_request_create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $selected_leave_id = "";
        if(!$data['emp_record_id']){
            return new JsonResponse(['message' => 'Employee not found!'], JsonResponse::HTTP_NOT_FOUND);
        }

        if(!$data['year']){
            return new JsonResponse(['message' => 'Year not found!'], JsonResponse::HTTP_NOT_FOUND);
        }

        $emp_yearly_leave = $this->entityManager->getRepository(YearlyEmployeeLeave::class)->findOneBy(['year' => $data['year'], 'emp_record' => $data['emp_record_id']]);
        if(!$emp_yearly_leave){
            return new JsonResponse(['message' => "Employee doesn't have leaves for this year."], JsonResponse::HTTP_NOT_FOUND);
        }

        $selected_leave_id = $this->entityManager->getRepository(SelectedEmployeeLeaves::class)->findOneBy(['employee_leave' => $emp_yearly_leave, 'leave_policy' => $data['leave_policies']]);

        if(!$selected_leave_id){
            return new JsonResponse(['message' => 'Employee Leave policy not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        //get day difference
        $dateStart = new \DateTime($data['date_start']);
        $dateEnd = new \DateTime($data['date_end']);

        // Normalize time to 00:00:00
        $dateStart->setTime(0, 0, 0);
        $dateEnd->setTime(0, 0, 0);

        // Calculate the difference in days
        $interval = $dateStart->diff($dateEnd);
        if($data['is_half_day']){
            $totalDays = 0.5;
        }
        else{
            $totalDays = $interval->days + 1; // Add 1 to include both start and end dates
        }
        
        $leaveRequest = new LeaveRequest();
        $leaveRequest->setEmpRecord($this->entityManager->getRepository(EmployeeRecords::class)->find($data['emp_record_id']));
        $leaveRequest->setLeavePolicies($this->entityManager->getRepository(LeavePolicy::class)->find($data['leave_policies']));
        $requestUser = $this->entityManager->getRepository(User::class)->find($data['user_id'] ?? null);
        $leaveRequest->setUser($requestUser);
        $leaveRequest->setReason($data['reason']);
        $leaveRequest->setDateStart(new \DateTime($data['date_start']));
        $leaveRequest->setDateEnd(new \DateTime($data['date_end']));
        $leaveRequest->setHalfDay((int)$data['is_half_day']);
        $leaveRequest->setDocument($data['document']);
        $leaveRequest->setYear($data['year']);
        $leaveRequest->setStatus(0);
        $leaveRequest->setCreatedAt(new \DateTimeImmutable());
        $leaveRequest->setSelectedLeave($selected_leave_id);
        $leaveRequest->setTotalDaysRequested($totalDays);

        $this->entityManager->persist($leaveRequest);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Leave request created!'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/api/leave/request/find/{id}', name: 'app_leave_request_show', methods: ['GET'])]
    public function show(int $id): JsonResponse
    {
        $leaveRequest = $this->leaveRequestRepository->find($id);

        if (!$leaveRequest) {
            return new JsonResponse(['message' => 'Leave request not found!'], JsonResponse::HTTP_NOT_FOUND);
        }

        $updaterUser = $this->resolveUpdaterUser($leaveRequest);
        $updaterId = $updaterUser?->getId() ?? ($leaveRequest->getUpdatedBy()?->getId() ?? '');
        $data = [
            'id' => $leaveRequest->getId(),
            'emp_record' => $leaveRequest->getEmpRecord()->getId(),
            'leave_policies' => $leaveRequest->getLeavePolicies()->getId(),
            'reason' => $leaveRequest->getReason(),
            'date_start' => $leaveRequest->getDateStart()->format('Y-m-d H:i:s'),
            'date_end' => $leaveRequest->getDateEnd()->format('Y-m-d H:i:s'),
            'is_half_day' => $leaveRequest->isHalfDay(),
            'document' => $leaveRequest->getDocument(),
            'year' => $leaveRequest->getYear(),
            'status' => $leaveRequest->getStatus(),
            'updated_by' => $updaterId,
            'updated_by_name' => $this->formatUpdatedByName($leaveRequest),
            'updated_at' => $leaveRequest->getUpdatedAt()?->format('Y-m-d H:i:s'),
            'created_at' => $leaveRequest->getCreatedAt()->format('Y-m-d H:i:s')
        ];

        return new JsonResponse($data);
    }

    #[Route('/api/leave/request/update/{id}', name: 'app_leave_request_update', methods: ['PUT'])]
    public function update(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $leaveRequest = $this->leaveRequestRepository->find($id);
        if (!$leaveRequest) {
            return new JsonResponse(['message' => 'Leave request not found!'], JsonResponse::HTTP_NOT_FOUND);
        }

        $leaveRequest->setEmpRecord($this->entityManager->getRepository(EmployeeRecords::class)->find($data['emp_record']));
        $leaveRequest->setLeavePolicies($this->entityManager->getRepository(LeavePolicy::class)->find($data['leave_policies']));
        $leaveRequest->setReason($data['reason']);
        $leaveRequest->setDateStart(new \DateTime($data['date_start']));
        $leaveRequest->setDateEnd(new \DateTime($data['date_end']));
        $leaveRequest->setHalfDay((bool) $data['is_half_day']);
        $leaveRequest->setDocument($data['document']);
        $leaveRequest->setYear($data['year']);
        $leaveRequest->setStatus($data['status']);
        $updaterUser = $this->entityManager->getRepository(User::class)->find($data['user_id'] ?? null);
        $leaveRequest->setUpdatedByUser($updaterUser);
        if ($updaterUser !== null) {
            $updater = $this->entityManager->getRepository(EmployeeRecords::class)->findOneBy(['user' => $updaterUser]);
            $leaveRequest->setUpdatedBy($updater);
        }
        $leaveRequest->setUpdatedAt(new DateTime());
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Leave request updated!']);
    }

    // #[Route('/api/leave/request/approve/{id}', name: 'app_leave_request_update', methods: ['PUT'])]
    // public function approveLeaveRequest(Request $request, int $id): JsonResponse
    // {
    //     $data = json_decode($request->getContent(), true);

    //     $leaveRequest = $this->leaveRequestRepository->find($id);
    //     if (!$leaveRequest) {
    //         return new JsonResponse(['message' => 'Leave request not found!'], JsonResponse::HTTP_NOT_FOUND);
    //     }

    //     $emp_record = $this->entityManager->getRepository(EmployeeRecords::class)->find($data['emp_record']);
    //     if(!$emp_record){
    //         return new JsonResponse(['message' => 'Employee Record not found!'], JsonResponse::HTTP_NOT_FOUND);
    //     }

    //     //validate leave policy
    //     $leave_policy = $this->entityManager->getRepository(LeavePolicy::class)->find($data['leave_policies']);

    //     if(!$leave_policy){
    //         return new JsonResponse(['message' => 'Leave request not found!'], JsonResponse::HTTP_NOT_FOUND);
    //     }

    //     $employee_leave = $this->entityManager->getRepository(YearlyEmployeeLeave::class)->findOneBy(['emp_record ' => $data['emp_record'], 'year' => $leaveRequest->getYear()]);
    //     if(!$employee_leave){
    //         return new JsonResponse(['message' => 'Employee Leaves not found!'], JsonResponse::HTTP_NOT_FOUND);
    //     }

    //     if($data['status'] == "approved"){
    //         $emp_leave_policies = $employee_leave->getLeavePoliciesJson();
    //         $policy_id = $leave_policy->getId();
    //         //calculate days
    //         $dateStart = new \DateTime($leaveRequest->getDateStart());
    //         $dateEnd = new \DateTime($leaveRequest->getDateEnd());

    //         if($leaveRequest->isHalfDay()){
    //             $total_request_days = 0.5;
    //         }
    //         else{
    //             $total_request_days = $dateStart->diff($dateEnd)->days;
    //         }
            
    //         if(!empty($emp_leave_policies)){
    //             foreach ($emp_leave_policies as $policy) {

    //                 $leavePoliciesId = $policy['leave_policies_id'];
    //                 $noOfDays = $policy['no_of_days'];
    //                 $usedDays = $policy['used_days'];
    //                 $carriedOverDays = $policy['carried_over_days'];
    //                 $totalDays = $policy['total_days'];

    //                 if($policy_id == $leavePoliciesId && $totalDays >= $total_request_days){
    //                     $usedDays += $total_request_days;
    //                     $totalDays += $total_request_days;
    //                     break;
    //                 }
    //                 else{
    //                     return new JsonResponse(['message' => 'Employee Leaves data is empty.'], JsonResponse::HTTP_NOT_FOUND);
    //                     break;
    //                 }
    //             }
    //         }
    //         else{
    //             return new JsonResponse(['message' => 'Employee Leaves data is empty.'], JsonResponse::HTTP_NOT_FOUND);
    //         }
    //     }

    //     $leaveRequest->setStatus($data['status']);
    //     $leaveRequest->setUpdatedBy($this->entityManager->getRepository(EmployeeRecords::class)->find($data['updated_by']));

    //     $this->entityManager->flush();

    //     return new JsonResponse(['message' => 'Leave request updated!']);
    // }

    #[Route('/api/leave/request/approve/{id}', name: 'app_leave_request_update', methods: ['PUT'])]
    public function approveLeaveRequest(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $leaveRequest = $this->leaveRequestRepository->find($id);
        if (!$leaveRequest) {
            return new JsonResponse(['message' => 'Leave request not found!'], JsonResponse::HTTP_NOT_FOUND);
        }

        // Check if the status is approved
        if ($data['status'] == "1") {
            $days_leaved = $leaveRequest->getTotalDaysRequested();
            $remaining_days = ($leaveRequest->getSelectedLeave()->getNoOfDays() + $leaveRequest->getSelectedLeave()->getCarriedOverDays()) - $leaveRequest->getSelectedLeave()->getUsedDays();
            if($remaining_days < $days_leaved){
                return new JsonResponse(['message' => 'Not Enough Leaves.'], JsonResponse::HTTP_BAD_REQUEST);
            }
            $used_days = $leaveRequest->getSelectedLeave()->getUsedDays() + $days_leaved;

            //Create notification
            $employee = $leaveRequest->getEmpRecord();
            $humanresDepartment = $this->entityManager->getRepository(Department::class)->findOneBy(['code' => 'HRS']);
            $this->notification->createNotification($humanresDepartment->getDivision(), $humanresDepartment, $employee->getLastName()." ".$employee->getFirstName()." Leave Request has been approved" , "Leave Request of ".$employee->getLastName()." ".$employee->getFirstName()." is approved", new DateTime() , "DEP_ONLY");

            $this->notification->createNotificationForSpecificUser( $employee, $employee->getLastName()." ".$employee->getFirstName()." Leave Request has been approved" , "Leave Request of ".$employee->getLastName()." ".$employee->getFirstName()." is approved", new DateTime());

            $leaveRequest->getSelectedLeave()->setUsedDays($used_days);
            $this->entityManager->persist($leaveRequest);
        }

        // Update the leave request status
        $leaveRequest->setStatus($data['status']);
        $user = $this->entityManager->getRepository(User::class)->find($data['user_id'] ?? null);
        $leaveRequest->setUpdatedByUser($user);
        if ($user !== null) {
            $updater = $this->entityManager->getRepository(EmployeeRecords::class)->findOneBy(['user' => $user]);
            if ($updater !== null) {
                $leaveRequest->setUpdatedBy($updater);
            }
        }
        $leaveRequest->setUpdatedAt(new DateTime());
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Leave request updated!']);
    }


    #[Route('/api/leave/request/delete/{id}', name: 'app_leave_request_delete', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $leaveRequest = $this->leaveRequestRepository->find($id);

        if (!$leaveRequest) {
            return new JsonResponse(['message' => 'Leave request not found!'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($leaveRequest);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'Leave request deleted!']);
    }
}
