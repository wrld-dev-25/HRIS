<?php

namespace App\Controller;

use App\Entity\Department;
use App\Entity\Division;
use App\Entity\EmployeeProjects;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\EmployeeRecords;
use App\Entity\Model;
use App\Entity\Owner;
use App\Entity\Project;
use App\Entity\Subdivision;
use App\Entity\User;
use App\Entity\WorkerLogs;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;

class DashboardController extends AbstractController
{
    private $entityManager;
    private $jwtManager;
    private $tokenStorage;
    private $passhasher;
    private $auditlog;
    private $validator;
    private $serializer;

    public function __construct(EntityManagerInterface $entityManager, SerializerInterface $serializer, JWTTokenManagerInterface $jwtManager, TokenStorageInterface $tokenStorage)
    {
        $this->entityManager    = $entityManager;
        $this->serializer       = $serializer;
        $this->jwtManager       = $jwtManager;
        $this->tokenStorage     = $tokenStorage;
    }

    #[Route('/api/dashboard', name: 'app_dashboard')]
    public function dashboardModulesCount(Request $request): JsonResponse
    {
        $employeeRecordsRepo = $this->entityManager->getRepository(EmployeeRecords::class);
        $workerLogsRepo = $this->entityManager->getRepository(WorkerLogs::class);
        $divisionRepo = $this->entityManager->getRepository(Division::class);
        $departmentRepo = $this->entityManager->getRepository(Department::class);
        $employeeProjectsRepo = $this->entityManager->getRepository(EmployeeProjects::class);
        $projectRepo = $this->entityManager->getRepository(Project::class);
        $subdivisionRepo = $this->entityManager->getRepository(Subdivision::class);
        $ownerRepo = $this->entityManager->getRepository(Owner::class);
        $modelRepo = $this->entityManager->getRepository(Model::class);

        // Get counts from repositories
        $empRecordsCount = $employeeRecordsRepo->countByNotArchived(); // Adjust if method name is different
        $dtrRecordsDailyCount = $workerLogsRepo->countTodayLogs(); 
        $divisionCount = $divisionRepo->countByNotArchived(); // Adjust if method name is different
        $departmentCount = $departmentRepo->countByNotArchived(); // Adjust if method name is different
        $manpowerAssignmentCount = $employeeProjectsRepo->countByNotArchived(); // Adjust if method name is different
        $projectCount = $projectRepo->countByNotArchived(); // Adjust if method name is different
        $subdivisionCount = $subdivisionRepo->countByNotArchived(); // Adjust if method name is different
        $ownersCount = $ownerRepo->countByNotArchived(); // Adjust if method name is different
        $facilitiesCount = $modelRepo->countByNotArchived(); // Adjust if method name is different

        // Return as JSON response
        return $this->json([
            'employeeRecordsCount' => $empRecordsCount,
            'dtrRecordsDailyCount' => $dtrRecordsDailyCount,
            'divisionCount' => $divisionCount,
            'departmentCount' => $departmentCount,
            'manpowerAssignmentCount' => $manpowerAssignmentCount,
            'projectCount' => $projectCount,
            'subdivisionCount' => $subdivisionCount,
            'ownersCount' => $ownersCount,
            'facilitiesCount' => $facilitiesCount,
        ], JsonResponse::HTTP_OK);
    }

}

