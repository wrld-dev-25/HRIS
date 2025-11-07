<?php

namespace App\Controller;

use App\Entity\WorkerLogs;
use App\Entity\EmployeeRecords;
use App\Entity\EmployeeOvertimeRequest;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\EmployeeOvertimeRequestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api/overtime_requests')]
class EmployeeOvertimeRequestController extends AbstractController
{
    private $entityManager;
    private $repository;

    public function __construct(EntityManagerInterface $entityManager, EmployeeOvertimeRequestRepository $repository)
    {
        $this->entityManager = $entityManager;
        $this->repository = $repository;
    }

    #[Route('/list', name: 'list_overtime_requests', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $overtimeRequests = $this->repository->findAll();
        $data = [];

        foreach ($overtimeRequests as $request) {

            // Assuming $request->getTimeRequested() returns the total minutes
            $totalMinutes = $request->getTimeRequested();
            $hours = intdiv($totalMinutes, 60); // Get the hour part
            $minutes = $totalMinutes % 60; // Get the remaining minutes

            $hoursRequested = sprintf('%d:%02d', $hours, $minutes); // Format as hours:minutes

            $data[] = [
                'id'                    => $request->getId(),
                'emp_id'                => $request->getEmpId() ? $request->getEmpId()->getId() : null,
                'hours_requested'       => $hoursRequested,
                'reason'                => $request->getReason(),
                'worker_logs'           => $request->getWorkerLogs() ? $request->getWorkerLogs()->getId() : null,
                'worker_logs_date'      => $request->getWorkerLogs() ? $request->getWorkerLogs()->getLoginDate()->format('Y-m-d') : null,
                'worker_logs_overtime'  => $request->getWorkerLogs() ? $request->getWorkerLogs()->getOvertime() : 0,
                'status'                => $request->getStatus(),
                'approved_by'           => $request->getApprovedBy() ? $request->getApprovedBy()->getLastname().', '.$request->getApprovedBy()->getFirstName() : null,
            ];
        }

        return new JsonResponse($data);
    }

    #[Route('/create', name: 'create_overtime_request', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return new JsonResponse(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $empId              = $data['emp_id'] ?? null;
        $reason             = $data['reason'] ?? "";
        $hours_requested    = $data['hours_requested'] ?? 0;
        $workerLogsId       = $data['worker_logs'] ?? null;
        // $status             = $data['status'] ?? null;
        // $approvedById       = $data['approved_by'] ?? null;

        if ($empId === null || $workerLogsId === null) {
            return new JsonResponse(['message' => 'Missing required fields'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $overtimeRequest = new EmployeeOvertimeRequest();

        $employee = $this->entityManager->getRepository(EmployeeRecords::class)->find($empId);
        if (!$employee) {
            return new JsonResponse(['message' => 'Employee not found'], JsonResponse::HTTP_NOT_FOUND);
        }
        
        $overtimeRequest->setEmpId($employee);

        $workerLogs = $this->entityManager->getRepository(WorkerLogs::class)->find($workerLogsId);
        if (!$workerLogs) {
            return new JsonResponse(['message' => 'Worker log not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $overtimeRequest->setWorkerLogs($workerLogs);

        $overtimeRequest->setTimeRequested($hours_requested);
        $overtimeRequest->setReason($reason);
        $overtimeRequest->setStatus(0);

        $this->entityManager->persist($overtimeRequest);
        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Overtime request created'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/find/{id}', name: 'show_overtime_request', methods: ['GET'])]
    public function show(int $id): JsonResponse
    {
        $overtimeRequest = $this->repository->find($id);

        if (!$overtimeRequest) {
            return new JsonResponse(['message' => 'Overtime request not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        // Assuming $request->getTimeRequested() returns the total minutes
        $totalMinutes = $overtimeRequest->getTimeRequested();
        $hours = intdiv($totalMinutes, 60); // Get the hour part
        $minutes = $totalMinutes % 60; // Get the remaining minutes

        $hoursRequested = sprintf('%d:%02d', $hours, $minutes); // Format as hours:minutes

        $data = [
            'id'                => $overtimeRequest->getId(),
            'emp_id'            => $overtimeRequest->getEmpId() ? $overtimeRequest->getEmpId()->getId() : null,
            'hours_requested'   => $hoursRequested,
            'reason'            => $overtimeRequest->getReason(),
            'worker_logs'       => $overtimeRequest->getWorkerLogs() ? $overtimeRequest->getWorkerLogs()->getId() : null,
            'status'            => $overtimeRequest->getStatus(),
            'approved_by'       => $overtimeRequest->getApprovedBy() ? $overtimeRequest->getApprovedBy()->getLastname().', '.$overtimeRequest->getApprovedBy()->getFirstName() : null,
        ];

        return new JsonResponse($data);
    }

    #[Route('/find-by-emp/{id}', name: 'show_overtime_request', methods: ['GET'])]
    public function showByEmpId(int $id): JsonResponse
    {
        $overtimeRequest = $this->repository->findBy(['emp_id' => $id]);

        if (!$overtimeRequest) {
            $data = [];
            return new JsonResponse($data);
        }

        foreach($overtimeRequest as $request){
            // Assuming $request->getTimeRequested() returns the total minutes
            $totalMinutes = $request->getTimeRequested();
            $hours = intdiv($totalMinutes, 60); // Get the hour part
            $minutes = $totalMinutes % 60; // Get the remaining minutes

            $hoursRequested = sprintf('%d:%02d', $hours, $minutes); // Format as hours:minutes

            $data[] = [
                'id'                => $request->getId(),
                'emp_id'            => $request->getEmpId() ? $request->getEmpId()->getId() : null,
                'hours_requested'   => $hoursRequested,
                'reason'            => $request->getReason(),
                'worker_logs'       => $request->getWorkerLogs() ? $request->getWorkerLogs()->getId() : null,
                'status'            => $request->getStatus(),
                'approved_by'       => $request->getApprovedBy() ? $request->getApprovedBy()->getLastname().' ,'.$request->getApprovedBy()->getFirstName() : null,
            ];
        }

        return new JsonResponse($data);
    }

    #[Route('/update/{id}', name: 'update_overtime_request', methods: ['PUT'])]
    public function update(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $overtimeRequest = $this->repository->find($id);

        if (!$overtimeRequest) {
            return new JsonResponse(['message' => 'Overtime request not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $hours_requested        = $data['hours_requested'];
        $reason                 = $data['reason'];

        $overtimeRequest->setTimeRequested($hours_requested);
        $overtimeRequest->setReason($reason);

        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Overtime request updated']);
    }

    #[Route('/update-status/{id}', name: 'update_overtime_request_status', methods: ['PUT'])]
    public function updateStatus(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $overtimeRequest = $this->repository->find($id);

        if (!$overtimeRequest) {
            return new JsonResponse(['message' => 'Overtime request not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $workerLogsId = $overtimeRequest->getWorkerLogs();
        $status = $data['status'] ?? null;
        $user = $this->entityManager->getRepository(User::class)->find($data['user_id']) ?? null;

        if (!$user) {
            return new JsonResponse(['message' => 'User not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $workerLogs = $this->entityManager->getRepository(WorkerLogs::class)->find($workerLogsId);
        if (!$workerLogs) {
            return new JsonResponse(['message' => 'Worker log not found'], JsonResponse::HTTP_NOT_FOUND);
        }
        
        if($status == 1){
            $workerLogs->setOvertimeApproved(true); 
        }
        elseif($status == 2){
            $workerLogs->setOvertimeApproved(false); 
        }

        $approverEmpId = $this->entityManager->getRepository(EmployeeRecords::class)->findOneBy(['user' => $user->getId()]);
        if (!$approverEmpId) {
            return new JsonResponse(['message' => 'Employee record not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $overtimeRequest->setApprovedBy($approverEmpId);

        if ($status !== null) {
            $overtimeRequest->setStatus((int) $status);
        }

        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Overtime request updated']);
    }

    #[Route('/delete/{id}', name: 'delete_overtime_request', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $overtimeRequest = $this->repository->find($id);

        if (!$overtimeRequest) {
            return new JsonResponse(['message' => 'Overtime request not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($overtimeRequest);
        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Overtime request deleted']);
    }
}
