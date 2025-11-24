<?php

namespace App\Controller;

use App\Entity\LeavePolicy;
use App\Entity\YearlyEmployeeLeave;
use App\Entity\SelectedEmployeeLeaves;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\SelectedEmployeeLeavesRepository;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api/selected-employee-leaves', name: 'selected_employee_leaves_')]
class SelectedEmployeeLeavesController extends AbstractController
{
    private $em;
    private $repository;

    public function __construct(EntityManagerInterface $em, SelectedEmployeeLeavesRepository $repository)
    {
        $this->em = $em;
        $this->repository = $repository;
    }

    #[Route('/create', name: 'create', methods: ['POST'])]
    public function create(Request $request, ValidatorInterface $validator): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (!$data) {
            return new JsonResponse(['error' => 'Invalid JSON data'], Response::HTTP_BAD_REQUEST);
        }

        $leave = new SelectedEmployeeLeaves();
        
        // Manually set each field from the JSON data
        $leave->setNoOfDays($data['no_of_days'] ?? null);
        $leave->setUsedDays($data['used_days'] ?? null);
        $leave->setCarriedOverDays($data['carried_over_days'] ?? null);
        $leave->setCarryOverPolicy($data['carry_over_policy'] ?? null);
        $leave->setStatus($data['status'] ?? null);

        // Additional fields like `leave_policy` and `employee_leave` require their respective entities
        // Assuming `leave_policy_id` and `employee_leave_id` are passed in JSON data
        if (isset($data['leave_policy_id'])) {
            $leavePolicy = $this->repository->getEntityManager()->find(LeavePolicy::class, $data['leave_policy_id']);
            $leave->setLeavePolicy($leavePolicy);
        }
        if (isset($data['employee_leave_id'])) {
            $employeeLeave = $this->repository->getEntityManager()->find(YearlyEmployeeLeave::class, $data['employee_leave_id']);
            $leave->setEmployeeLeave($employeeLeave);
        }

        $errors = $validator->validate($leave);
        if (count($errors) > 0) {
            return new JsonResponse($errors, Response::HTTP_BAD_REQUEST);
        }
        
        $this->em->persist($leave);
        $this->em->flush();

        return new JsonResponse(['id' => $leave->getId()], Response::HTTP_CREATED);
    }

    #[Route('/list', name: 'list', methods: ['GET'])]
    public function list(SerializerInterface $serializer): JsonResponse
    {
        $leaves = $this->repository->findAll();
        return new JsonResponse($serializer->serialize($leaves, 'json'), Response::HTTP_OK, [], true);
    }

    #[Route('/find/{id}', name: 'read', methods: ['GET'])]
    public function read(int $id, SerializerInterface $serializer): JsonResponse
    {
        $leave = $this->repository->find($id);
        if (!$leave) {
            return new JsonResponse(['error' => 'SelectedEmployeeLeave not found'], Response::HTTP_NOT_FOUND);
        }
        return new JsonResponse($serializer->serialize($leave, 'json'), Response::HTTP_OK, [], true);
    }

    #[Route('/update/{id}', name: 'update', methods: ['PUT'])]
    public function update(int $id, Request $request, ValidatorInterface $validator): JsonResponse
    {
        $leave = $this->repository->find($id);
        if (!$leave) {
            return new JsonResponse(['message' => 'SelectedEmployeeLeave not found'], Response::HTTP_NOT_FOUND);
        }
    
        // Decode JSON data from the request
        $data = json_decode($request->getContent(), true);
        if (!$data) {
            return new JsonResponse(['message' => 'Invalid JSON data'], Response::HTTP_BAD_REQUEST);
        }
    
        // Manually set each field from the JSON data
        $leave->setNoOfDays($data['no_of_days'] ?? $leave->getNoOfDays());
        $leave->setUsedDays($data['used_days'] ?? $leave->getUsedDays());
        $leave->setCarriedOverDays($data['carried_over_days'] ?? $leave->getCarriedOverDays());
        $leave->setCarryOverPolicy($data['carry_over_policy'] ?? $leave->getCarryOverPolicy());
        $leave->setStatus($data['status'] ?? $leave->getStatus());
    
        // Validate the updated entity
        $errors = $validator->validate($leave);
        if (count($errors) > 0) {
            return new JsonResponse($errors, Response::HTTP_BAD_REQUEST);
        }
    
        // Persist changes to the database
        $this->em->flush();
    
        return new JsonResponse(['id' => $leave->getId()], Response::HTTP_OK);
    }
    

    #[Route('/delete/{id}', name: 'delete', methods: ['DELETE'])]
    public function delete(int $id): JsonResponse
    {
        $leave = $this->repository->find($id);
        if (!$leave) {
            return new JsonResponse(['message' => ''], Response::HTTP_NOT_FOUND);
        }

        $this->em->remove($leave);
        $this->em->flush();

        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }
}
