<?php

namespace App\Controller;

use App\Entity\Department;
use App\Entity\LeavePolicy;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\LeavePolicyRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api/leave-policy')]
class LeavePolicyController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private SerializerInterface $serializer;
    private ValidatorInterface $validator;

    public function __construct(
        EntityManagerInterface $entityManager,
        SerializerInterface $serializer,
        ValidatorInterface $validator
    ) {
        $this->entityManager = $entityManager;
        $this->serializer = $serializer;
        $this->validator = $validator;
    }

    #[Route('/list', methods: ['GET'])]
    public function index(LeavePolicyRepository $repository): JsonResponse
    {
        $leavePolicies = $repository->findAll();
        
        // Manually build the response array
        $data = [];
        foreach ($leavePolicies as $leavePolicy) {
            $data[] = [
                'id' => $leavePolicy->getId(),
                'name' => $leavePolicy->getName(),
                'year' => $leavePolicy->getYear(),
                'description' => $leavePolicy->getDescription(),
                'days' => $leavePolicy->getDays(),
                'calendar_color' => $leavePolicy->getCalendarColor(),
                'type' => $leavePolicy->getType(),
                'gender' => $leavePolicy->getGender(),
                'marital' => $leavePolicy->getMarital(),
                'increment_amount' => $leavePolicy->getIncrementAmount(),
                'years_before_increment' => $leavePolicy->getYearsBeforeIncrement(),
                'is_carried_over' => $leavePolicy->isCarriedOver(),
                'department' => $leavePolicy->getDepartment() ? $leavePolicy->getDepartment()->getName() : null, // Example if Department has a getName() method
            ];
        }
        return $this->json($data);
    }
    

    #[Route('/find/{id}', methods: ['GET'])]
    public function show(LeavePolicyRepository $repository, int $id): JsonResponse
    {
        $leavePolicy = $repository->find($id);

        if (!$leavePolicy) {
            return $this->json(['message' => 'Leave Policy not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        return $this->json($leavePolicy);
    }

    #[Route('/create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        // Decode the JSON request body into an associative array
        $data = json_decode($request->getContent(), true);
    
        // Create a new LeavePolicy object
        $leavePolicy = new LeavePolicy();
    
        // Set the values from the incoming data array
        $leavePolicy->setName($data['name'] ?? ""); // Optional field
        $leavePolicy->setYear($data['year'] ?? ""); // Optional field
        $leavePolicy->setDescription($data['description'] ?? null); // Optional field
        $leavePolicy->setDays($data['days'] ?? 0); // Optional field
        $leavePolicy->setCalendarColor($data['calendar_color']);
        $leavePolicy->setType($data['type'] ?? null); // Optional field
        $leavePolicy->setGender($data['gender']);
        $leavePolicy->setMarital($data['marital']);
        $leavePolicy->setIncrementAmount($data['increment_amount']);
        $leavePolicy->setYearsBeforeIncrement($data['years_before_increment']);
        $leavePolicy->setCarriedOver(false);
    
        if (isset($data['department'])) {
            if ($data['department'] == 0) {
                // Set a special "all departments" indicator, or leave the department null based on your logic
                $leavePolicy->setDepartment(null); // Assuming null represents all departments
            } else {
                // Look up the specific department if department ID is non-zero
                $department = $this->entityManager->getRepository(Department::class)->find($data['department']);
                $leavePolicy->setDepartment($department);
            }
        }
    
        // Validate the LeavePolicy object
        $errors = $this->validator->validate($leavePolicy);
        if (count($errors) > 0) {
            return $this->json($errors, JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Persist the LeavePolicy object to the database
        $this->entityManager->persist($leavePolicy);
        $this->entityManager->flush();
    
        // Return the created LeavePolicy object as JSON
        return $this->json(['message' => 'Leave Policy creation successfull'], JsonResponse::HTTP_CREATED);
    }
    

    #[Route('/update/{id}', methods: ['PUT'])]
    public function update(Request $request, LeavePolicyRepository $repository, int $id): JsonResponse
    {
        // Find the existing LeavePolicy by ID
        $leavePolicy = $repository->find($id);
        if (!$leavePolicy) {
            return $this->json(['message' => 'Leave Policy not found'], JsonResponse::HTTP_NOT_FOUND);
        }
    
        // Decode the JSON request body into an associative array
        $data = json_decode($request->getContent(), true);
    
        // Update the LeavePolicy object with the new data
        $leavePolicy->setName($data['name']);
        $leavePolicy->setYear($data['year']);
        $leavePolicy->setDescription($data['description'] ?? null); // Optional field
        $leavePolicy->setDays($data['days']);
        $leavePolicy->setCalendarColor($data['calendar_color']);
        $leavePolicy->setType($data['type'] ?? null); // Optional field
        $leavePolicy->setGender($data['gender']);
        $leavePolicy->setMarital($data['marital']);
        $leavePolicy->setIncrementAmount($data['increment_amount']);
        $leavePolicy->setYearsBeforeIncrement($data['years_before_increment']);
        $leavePolicy->setCarriedOver($data['is_carried_over']);
    
        // Optionally, update the related Department if provided
        if (isset($data['department'])) {
            $department = $this->entityManager->getRepository(Department::class)->find($data['department']);
            $leavePolicy->setDepartment($department);
        }
    
        // Validate the updated LeavePolicy object
        $errors = $this->validator->validate($leavePolicy);
        if (count($errors) > 0) {
            return $this->json($errors, JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Persist the updated LeavePolicy object (no need to call persist since it is already tracked)
        $this->entityManager->flush();
    
        // Return the updated LeavePolicy object as JSON
        return $this->json(['message' => 'Leave Policy update successfull'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/update-list', methods: ['PUT'])]
    public function updateList(Request $request, LeavePolicyRepository $repository, int $id): JsonResponse
    {
        // Find the existing LeavePolicy by ID
        $leavePolicy = $repository->find($id);
        if (!$leavePolicy) {
            return $this->json(['message' => 'Leave Policy not found'], JsonResponse::HTTP_NOT_FOUND);
        }
    
        // Decode the JSON request body into an associative array
        $data = json_decode($request->getContent(), true);
        $year = $data['year'];
    
        // Update the LeavePolicy object with the new data
        $leavePolicy->setName($data['name']);
        $leavePolicy->setYear($data['year']);
        $leavePolicy->setDescription($data['description'] ?? null); // Optional field
        $leavePolicy->setDays($data['days']);
        $leavePolicy->setCalendarColor($data['calendar_color']);
        $leavePolicy->setType($data['type'] ?? null); // Optional field
        $leavePolicy->setGender($data['gender']);
        $leavePolicy->setMarital($data['marital']);
        $leavePolicy->setIncrementAmount($data['increment_amount']);
        $leavePolicy->setYearsBeforeIncrement($data['years_before_increment']);
        $leavePolicy->setCarriedOver($data['is_carried_over']);
    
        // Optionally, update the related Department if provided
        if (isset($data['department'])) {
            $department = $this->entityManager->getRepository(Department::class)->find($data['department']);
            $leavePolicy->setDepartment($department);
        }
    
        // Validate the updated LeavePolicy object
        $errors = $this->validator->validate($leavePolicy);
        if (count($errors) > 0) {
            return $this->json($errors, JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Persist the updated LeavePolicy object (no need to call persist since it is already tracked)
        $this->entityManager->flush();
    
        // Return the updated LeavePolicy object as JSON
        return $this->json($leavePolicy);
    }
    

    #[Route('/delete/{id}', methods: ['DELETE'])]
    public function delete(LeavePolicyRepository $repository, int $id): JsonResponse
    {
        $leavePolicy = $repository->find($id);

        if (!$leavePolicy) {
            return $this->json(['message' => 'Leave Policy not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $this->entityManager->remove($leavePolicy);
        $this->entityManager->flush();

        return $this->json(['message' => 'Leave Policy deleted successfully'], JsonResponse::HTTP_NO_CONTENT);
    }
}
