<?php

namespace App\Controller;

use App\Entity\EmployeeRecords;
use App\Entity\User;
use DateTimeImmutable;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/overtime_requests')]
class EmployeeOvertimeRequestController extends AbstractController
{
    private Connection $connection;

    public function __construct(private EntityManagerInterface $entityManager)
    {
        $this->connection = $entityManager->getConnection();
    }

#[Route('/list', name: 'list_overtime_requests', methods: ['GET'])]
public function list(): JsonResponse
{
    // Start from the base query
    $qb = $this->baseQuery();

    // Get current logged-in user
    $currentUser = $this->getUser();
    if ($currentUser instanceof User) {
        $userType     = $currentUser->getUserType();
        $userTypeId   = $userType ? $userType->getId() : null;
        $currentUserId = $currentUser->getId();

        // Standard User (user_type_id = 14) should only see his/her own overtime requests
        if ($userTypeId === 14 && $currentUserId !== null) {
            $qb
                ->andWhere('o.user_id = :currentUserId')
                ->setParameter('currentUserId', $currentUserId);
        }
    }

    $rows = $qb
        ->orderBy('o.created_at', 'DESC')
        ->executeQuery()
        ->fetchAllAssociative();

    $data = array_map(fn (array $row) => $this->transformRow($row), $rows);

    return new JsonResponse($data);
}


    #[Route('/create', name: 'create_overtime_request', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $payload = json_decode($request->getContent(), true);
        if (!is_array($payload)) {
            return new JsonResponse(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $empId = $payload['emp_id'] ?? null;
        $otHours = $payload['ot_hours'] ?? $payload['hours_requested'] ?? null;
        $otDate = $payload['ot_date'] ?? $payload['overtime_date'] ?? null;
        $reason = $payload['ot_reason'] ?? $payload['reason'] ?? '';

        if (!$empId || !$otHours || !$otDate) {
            return new JsonResponse(['message' => 'Missing required fields'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $validatedDate = DateTimeImmutable::createFromFormat('Y-m-d', $otDate);
        if (!$validatedDate) {
            return new JsonResponse(['message' => 'Invalid overtime date format'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $employee = $this->entityManager->getRepository(EmployeeRecords::class)->find($empId);
        if (!$employee || !$employee->getUser()) {
            return new JsonResponse(['message' => 'Employee not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $currentUser = $this->getUser();
        $currentUserId = $currentUser instanceof User ? $currentUser->getId() : null;

        $now = new DateTimeImmutable('now');
        $this->connection->insert('overtime_request', [
            'user_id' => $employee->getUser()->getId(),
            'overtime_date' => $validatedDate->format('Y-m-d'),
            'ot_hours' => $otHours,
            'ot_reason' => $reason,
            'status' => 0,
            'deleted' => 0,
            'created_at' => $now->format('Y-m-d H:i:s'),
            'created_by' => $currentUserId,
        ]);

        $id = (int) $this->connection->lastInsertId();
        $row = $this->fetchRow($id);

        return new JsonResponse($row ?? ['status' => 'Overtime request created'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/find/{id}', name: 'show_overtime_request', methods: ['GET'])]
    public function show(int $id): JsonResponse
    {
        $row = $this->fetchRow($id);
        if (!$row) {
            return new JsonResponse(['message' => 'Overtime request not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        return new JsonResponse($row);
    }

    #[Route('/find-by-emp/{id}', name: 'show_overtime_request_by_emp', methods: ['GET'])]
    public function showByEmpId(int $id): JsonResponse
    {
        $rows = $this->baseQuery()
            ->andWhere('er.id = :empId')
            ->setParameter('empId', $id)
            ->orderBy('o.created_at', 'DESC')
            ->executeQuery()
            ->fetchAllAssociative();

        $data = array_map(fn (array $row) => $this->transformRow($row), $rows);

        return new JsonResponse($data);
    }

    #[Route('/update/{id}', name: 'update_overtime_request', methods: ['PUT'])]
    public function update(Request $request, int $id): JsonResponse
    {
        $existing = $this->fetchRow($id);
        if (!$existing) {
            return new JsonResponse(['message' => 'Overtime request not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $payload = json_decode($request->getContent(), true);
        if (!is_array($payload)) {
            return new JsonResponse(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $fields = [];
        if (isset($payload['ot_hours']) || isset($payload['hours_requested'])) {
            $fields['ot_hours'] = $payload['ot_hours'] ?? $payload['hours_requested'];
        }
        if (array_key_exists('ot_reason', $payload) || array_key_exists('reason', $payload)) {
            $fields['ot_reason'] = $payload['ot_reason'] ?? $payload['reason'];
        }
        if (isset($payload['ot_date']) || isset($payload['overtime_date'])) {
            $date = $payload['ot_date'] ?? $payload['overtime_date'];
            $validatedDate = DateTimeImmutable::createFromFormat('Y-m-d', $date);
            if (!$validatedDate) {
                return new JsonResponse(['message' => 'Invalid overtime date format'], JsonResponse::HTTP_BAD_REQUEST);
            }
            $fields['overtime_date'] = $validatedDate->format('Y-m-d');
        }

        if (empty($fields)) {
            return new JsonResponse(['message' => 'No fields to update'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $currentUser = $this->getUser();
        $currentUserId = $currentUser instanceof User ? $currentUser->getId() : null;
        $now = new DateTimeImmutable('now');

        $fields['updated_at'] = $now->format('Y-m-d H:i:s');
        $fields['updated_by'] = $currentUserId;

        $this->connection->update('overtime_request', $fields, ['id' => $id]);

        return new JsonResponse(['status' => 'Overtime request updated']);
    }

#[Route('/update-status/{id}', name: 'update_overtime_request_status', methods: ['PUT'])]
public function updateStatus(Request $request, int $id): JsonResponse
{
    // Standard User (user_type_id = 14) is not allowed to give actions (approve / reject)
    $currentUser = $this->getUser();
    if ($currentUser instanceof User) {
        $userType   = $currentUser->getUserType();
        $userTypeId = $userType ? $userType->getId() : null;

        if ($userTypeId === 14) {
            return new JsonResponse(['message' => 'Forbidden'], JsonResponse::HTTP_FORBIDDEN);
        }
    }

    $existing = $this->fetchRow($id);
    if (!$existing) {
        return new JsonResponse(['message' => 'Overtime request not found'], JsonResponse::HTTP_NOT_FOUND);
    }

    $payload = json_decode($request->getContent(), true);
    if (!is_array($payload)) {
        return new JsonResponse(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
    }

    $status = isset($payload['status']) ? (int) $payload['status'] : null;
    if ($status === null) {
        return new JsonResponse(['message' => 'Status is required'], JsonResponse::HTTP_BAD_REQUEST);
    }

    $currentUserId = $currentUser instanceof User ? $currentUser->getId() : null;
    $now = new DateTimeImmutable('now');

    $this->connection->update('overtime_request', [
        'status'     => $status,
        'updated_at' => $now->format('Y-m-d H:i:s'),
        'updated_by' => $currentUserId,
    ], ['id' => $id]);

    return new JsonResponse(['status' => 'Overtime request status updated']);
}


#[Route('/delete/{id}', name: 'delete_overtime_request', methods: ['DELETE'])]
public function delete(int $id): JsonResponse
{
    // Standard User (user_type_id = 14) is not allowed to delete overtime requests
    $currentUser = $this->getUser();
    if ($currentUser instanceof User) {
        $userType   = $currentUser->getUserType();
        $userTypeId = $userType ? $userType->getId() : null;

        if ($userTypeId === 14) {
            return new JsonResponse(['message' => 'Forbidden'], JsonResponse::HTTP_FORBIDDEN);
        }
    }

    $existing = $this->fetchRow($id);
    if (!$existing) {
        return new JsonResponse(['message' => 'Overtime request not found'], JsonResponse::HTTP_NOT_FOUND);
    }

    $currentUserId = $currentUser instanceof User ? $currentUser->getId() : null;
    $now = new DateTimeImmutable('now');

    $this->connection->update('overtime_request', [
        'deleted'    => 1,
        'updated_at' => $now->format('Y-m-d H:i:s'),
        'updated_by' => $currentUserId,
    ], ['id' => $id]);

    return new JsonResponse(['status' => 'Overtime request deleted']);
}


    private function fetchRow(int $id): ?array
    {
        $row = $this->baseQuery()
            ->andWhere('o.id = :id')
            ->setParameter('id', $id)
            ->executeQuery()
            ->fetchAssociative();

        return $row ? $this->transformRow($row) : null;
    }

    private function baseQuery(): QueryBuilder
    {
        $qb = $this->connection->createQueryBuilder();
        $qb->select('o.*')
            ->addSelect('er.id AS emp_id')
            ->addSelect("CONCAT_WS(' ', COALESCE(er.first_name, ''), COALESCE(er.last_name, '')) AS employee_name")
            ->addSelect("CONCAT_WS(' ', COALESCE(updater.first_name, ''), COALESCE(updater.last_name, '')) AS updated_by_name")
            ->from('overtime_request', 'o')
            ->leftJoin('o', '`user`', 'u', 'u.id = o.user_id')
            ->leftJoin('u', 'employee_records', 'er', 'er.user_id = u.id')
            ->leftJoin('o', '`user`', 'updater', 'updater.id = o.updated_by')
            ->where('o.deleted = 0');

        return $qb;
    }

    private function transformRow(array $row): array
    {
        return [
            'id' => isset($row['id']) ? (int) $row['id'] : null,
            'user_id' => isset($row['user_id']) ? (int) $row['user_id'] : null,
            'emp_id' => isset($row['emp_id']) ? (int) $row['emp_id'] : null,
            'overtime_date' => $row['overtime_date'] ?? null,
            'ot_hours' => $row['ot_hours'] ?? null,
            'ot_reason' => $row['ot_reason'] ?? null,
            'status' => isset($row['status']) ? (int) $row['status'] : 0,
            'approved_by' => $row['updated_by_name'] ?: null,
            'employee_name' => $row['employee_name'] ?: null,
            'created_at' => $row['created_at'] ?? null,
            'updated_at' => $row['updated_at'] ?? null,
        ];
    }
}
