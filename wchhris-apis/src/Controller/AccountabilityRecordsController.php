<?php

namespace App\Controller;

use App\Entity\EmployeeRecords;
use App\Entity\AccountabilityRecords;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\AccountabilityRecordsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api/accountability_records', name: 'delete_accountability_record', methods: ['DELETE'])]
class AccountabilityRecordsController extends AbstractController
{
    private $entityManager;
    private $repository;

    public function __construct(EntityManagerInterface $entityManager, AccountabilityRecordsRepository $repository)
    {
        $this->entityManager = $entityManager;
        $this->repository = $repository;
    }

    #[Route('/list', name: 'list_accountability_records', methods: ['GET'])]
    public function list(): JsonResponse
    {
        $records = $this->repository->findAll();
        $data = [];

        foreach ($records as $record) {
            $data[] = [
                'id' => $record->getId(),
                'emp_id' => $record->getEmpId() ? $record->getEmpId()->getId() : null,
                'item_name' => $record->getItemName(),
                'item_count' => $record->getItemCount(),
                'status' => $record->getStatus(),
            ];
        }

        return new JsonResponse($data);
    }

    #[Route('/create', name: 'create_accountability_record', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (!$data) {
            return new JsonResponse(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $empId = $data['emp_id'] ?? null;
        $itemName = $data['item_name'] ?? null;
        $itemCount = $data['item_count'] ?? null;
        $status = $data['status'] ?? null;

        if (!$itemName || $itemCount === null || $status === null || !$empId ) {
            return new JsonResponse(['message' => 'Missing required fields'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $record = new AccountabilityRecords();

        if ($empId) {
            $employee = $this->entityManager->getRepository(EmployeeRecords::class)->find($empId);
            if (!$employee) {
                return new JsonResponse(['message' => 'Employee not found'], JsonResponse::HTTP_NOT_FOUND);
            }
            $record->setEmpId($employee);
        }

        $record->setItemName($itemName);
        $record->setItemCount((float) $itemCount);
        $record->setStatus((int) $status);

        $this->entityManager->persist($record);
        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Accountability record created'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/find/{id}', name: 'show_accountability_record', methods: ['GET'])]
    public function show(int $id): JsonResponse
    {
        $record = $this->repository->find($id);

        if (!$record) {
            return new JsonResponse(['message' => 'Record not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = [
            'id' => $record->getId(),
            'emp_id' => $record->getEmpId() ? $record->getEmpId()->getId() : null,
            'item_name' => $record->getItemName(),
            'item_count' => $record->getItemCount(),
            'status' => $record->getStatus(),
        ];

        return new JsonResponse($data);
    }

    #[Route('/find-by-emp/{id}', name: 'show_accountability_record', methods: ['GET'])]
    public function showByEmpId(int $id): JsonResponse
    {
        $records = $this->repository->findBy(['employee_record' => $id]);
    
        $data = array_map(function ($record) {
            return [
                'id' => $record->getId(),
                'emp_id' => $record->getEmpId() ? $record->getEmpId()->getId() : null,
                'item_name' => $record->getItemName(),
                'item_count' => $record->getItemCount(),
                'status' => $record->getStatus(),
            ];
        }, $records ?? []);
    
        return new JsonResponse($data);
    }
    

    #[Route('/update/{id}', name: 'update_accountability_record', methods: ['PUT'])]
    public function update(Request $request, int $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $record = $this->repository->find($id);

        if (!$record) {
            return new JsonResponse(['message' => 'Record not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $empId = $data['emp_id'] ?? null;
        $itemName = $data['item_name'] ?? null;
        $itemCount = $data['item_count'] ?? null;
        $status = $data['status'] ?? null;

        if ($empId) {
            $employee = $this->entityManager->getRepository(EmployeeRecords::class)->find($empId);
            if (!$employee) {
                return new JsonResponse(['message' => 'Employee not found'], JsonResponse::HTTP_NOT_FOUND);
            }
            $record->setEmpId($employee);
        }

        if ($itemName !== null) {
            $record->setItemName($itemName);
        }

        if ($itemCount !== null) {
            $record->setItemCount((float) $itemCount);
        }

        if ($status !== null) {
            $record->setStatus((int) $status);
        }

        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Accountability record updated']);
    }

    #[Route('/archive/{id}', name: 'delete_accountability_record', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $record = $this->repository->find($id);

        if (!$record) {
            return new JsonResponse(['message' => 'Record not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($record);
        $this->entityManager->flush();

        return new JsonResponse(['status' => 'Accountability record deleted']);
    }
}
