<?php

namespace App\Controller;

use App\Service\AuditLog;
use App\Entity\PhilHealthConfig;
use App\Service\UserAccessValidation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\PhilHealthConfigRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class PhilHealthController extends AbstractController
{
    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $validateAccess;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, UserAccessValidation $validateAccess)
    {
        $this->entityManager = $entityManager;
        $this->passhasher = $passhasher;
        $this->jwtManager = $jwtManager;
        $this->auditlog = $auditLog;
        $this->validateAccess = $validateAccess;
    }

    #[Route('/api/philhealthconfig/create', name: 'create_philhealthconfig', methods: ['POST'])]
    public function createPhilHealthConfig(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $philHealthConfig = new PhilHealthConfig();
        $philHealthConfig->setBaseRate($data['base_rate'])
                         ->setEmployeeShare($data['employee_share'])
                         ->setEmployerShare($data['employer_share'])
                         ->setMinimumCap($data['minimum_cap'])
                         ->setMaximumCap($data['maximum_cap']);

        try {
            $this->entityManager->persist($philHealthConfig);
            $this->entityManager->flush();

            return $this->json(['message' => 'PhilHealthConfig created successfully.'], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to create PhilHealthConfig.', 'message' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/philhealthconfig/find/{id}', name: 'get_philhealthconfig', methods: ['GET'])]
    public function getPhilHealthConfig(int $id, PhilHealthConfigRepository $philHealthConfigRepository): JsonResponse
    {
        $philHealthConfig = $philHealthConfigRepository->find($id);

        if (!$philHealthConfig) {
            return $this->json(['error' => 'PhilHealthConfig not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        return $this->json([
            'id' => $philHealthConfig->getId(),
            'base_rate' => $philHealthConfig->getBaseRate(),
            'employee_share' => $philHealthConfig->getEmployeeShare(),
            'employer_share' => $philHealthConfig->getEmployerShare(),
            'minimum_cap' => $philHealthConfig->getMinimumCap(),
            'maximum_cap' => $philHealthConfig->getMaximumCap(),
        ], JsonResponse::HTTP_OK);
    }

    #[Route('/api/philhealthconfig/list', name: 'list_philhealthconfig', methods: ['GET'])]
    public function listPhilHealthConfig(PhilHealthConfigRepository $philHealthConfigRepository): JsonResponse
    {
        $philHealthConfigs = $philHealthConfigRepository->findAll();

        $philHealthConfigArray = array_map(function (PhilHealthConfig $philHealthConfig) {
            return [
                'id' => $philHealthConfig->getId(),
                'base_rate' => $philHealthConfig->getBaseRate(),
                'employee_share' => $philHealthConfig->getEmployeeShare(),
                'employer_share' => $philHealthConfig->getEmployerShare(),
                'minimum_cap' => $philHealthConfig->getMinimumCap(),
                'maximum_cap' => $philHealthConfig->getMaximumCap(),
            ];
        }, $philHealthConfigs);

        return $this->json($philHealthConfigArray, JsonResponse::HTTP_OK);
    }

    #[Route('/api/philhealthconfig/update/{id}', name: 'update_philhealthconfig', methods: ['PUT'])]
    public function updatePhilHealthConfig(int $id, Request $request, PhilHealthConfigRepository $philHealthConfigRepository): JsonResponse
    {
        $philHealthConfig = $philHealthConfigRepository->find($id);

        if (!$philHealthConfig) {
            return $this->json(['error' => 'PhilHealthConfig not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);

        $philHealthConfig->setBaseRate($data['base_rate'] ?? $philHealthConfig->getBaseRate())
                         ->setEmployeeShare($data['employee_share'] ?? $philHealthConfig->getEmployeeShare())
                         ->setEmployerShare($data['employer_share'] ?? $philHealthConfig->getEmployerShare())
                         ->setMinimumCap($data['minimum_cap'] ?? $philHealthConfig->getMinimumCap())
                         ->setMaximumCap($data['maximum_cap'] ?? $philHealthConfig->getMaximumCap());

        try {
            $this->entityManager->flush();

            return $this->json(['message' => 'PhilHealthConfig updated successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return $this->json(['message' => 'Failed to update PhilHealthConfig.', 'error' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/philhealthconfig/delete/{id}', name: 'delete_philhealthconfig', methods: ['DELETE'])]
    public function deletePhilHealthConfig(int $id, PhilHealthConfigRepository $philHealthConfigRepository): JsonResponse
    {
        $philHealthConfig = $philHealthConfigRepository->find($id);

        if (!$philHealthConfig) {
            return $this->json(['error' => 'PhilHealthConfig not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        try {
            $this->entityManager->remove($philHealthConfig);
            $this->entityManager->flush();

            return $this->json(['message' => 'PhilHealthConfig deleted successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return $this->json(['message' => 'Failed to delete PhilHealthConfig.', 'error' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
