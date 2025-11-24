<?php

namespace App\Controller;

use App\Service\AuditLog;
use App\Entity\PagibigConfig;
use App\Service\UserAccessValidation;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PagibigConfigRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class PagibigController extends AbstractController
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

    #[Route('/api/pagibigconfig/create', name: 'create_pagibigconfig', methods: ['POST'])]
    public function createPagibigConfig(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $pagibigConfig = new PagibigConfig();
        $pagibigConfig->setEmployerShare($data['employer_share'])
                      ->setEmployeeShare($data['employee_share'])
                      ->setMonthlyCompensationCap($data['monthly_compensation_cap']);

        try {
            $this->entityManager->persist($pagibigConfig);
            $this->entityManager->flush();

            return $this->json(['message' => 'PagibigConfig created successfully.'], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to create PagibigConfig.', 'message' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/pagibigconfig/find/{id}', name: 'get_pagibigconfig', methods: ['GET'])]
    public function getPagibigConfig(int $id, PagibigConfigRepository $pagibigConfigRepository): JsonResponse
    {
        $pagibigConfig = $pagibigConfigRepository->find($id);

        if (!$pagibigConfig) {
            return $this->json(['error' => 'PagibigConfig not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        return $this->json([
            'id' => $pagibigConfig->getId(),
            'employer_share' => $pagibigConfig->getEmployerShare(),
            'employee_share' => $pagibigConfig->getEmployeeShare(),
            'monthly_compensation_cap' => $pagibigConfig->getMonthlyCompensationCap(),
        ], JsonResponse::HTTP_OK);
    }

    #[Route('/api/pagibigconfig/list', name: 'list_pagibigconfig', methods: ['GET'])]
    public function listPagibigConfig(PagibigConfigRepository $pagibigConfigRepository): JsonResponse
    {
        $pagibigConfigs = $pagibigConfigRepository->findAll();

        $pagibigConfigArray = array_map(function (PagibigConfig $pagibigConfig) {
            return [
                'id' => $pagibigConfig->getId(),
                'employer_share' => $pagibigConfig->getEmployerShare(),
                'employee_share' => $pagibigConfig->getEmployeeShare(),
                'monthly_compensation_cap' => $pagibigConfig->getMonthlyCompensationCap(),
            ];
        }, $pagibigConfigs);

        return $this->json($pagibigConfigArray, JsonResponse::HTTP_OK);
    }

    #[Route('/api/pagibigconfig/update/{id}', name: 'update_pagibigconfig', methods: ['PUT'])]
    public function updatePagibigConfig(int $id, Request $request, PagibigConfigRepository $pagibigConfigRepository): JsonResponse
    {
        $pagibigConfig = $pagibigConfigRepository->find($id);

        if (!$pagibigConfig) {
            return $this->json(['error' => 'PagibigConfig not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);

        $pagibigConfig->setEmployerShare($data['employer_share'] ?? $pagibigConfig->getEmployerShare())
                      ->setEmployeeShare($data['employee_share'] ?? $pagibigConfig->getEmployeeShare())
                      ->setMonthlyCompensationCap($data['monthly_compensation_cap'] ?? $pagibigConfig->getMonthlyCompensationCap());

        try {
            $this->entityManager->flush();

            return $this->json(['message' => 'PagibigConfig updated successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to update PagibigConfig.', 'message' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/pagibigconfig/delete/{id}', name: 'delete_pagibigconfig', methods: ['DELETE'])]
    public function deletePagibigConfig(int $id, PagibigConfigRepository $pagibigConfigRepository): JsonResponse
    {
        $pagibigConfig = $pagibigConfigRepository->find($id);

        if (!$pagibigConfig) {
            return $this->json(['error' => 'PagibigConfig not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        try {
            $this->entityManager->remove($pagibigConfig);
            $this->entityManager->flush();

            return $this->json(['message' => 'PagibigConfig deleted successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to delete PagibigConfig.', 'message' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
