<?php

namespace App\Controller;

use App\Entity\TaxShield;
use App\Service\AuditLog;
use App\Service\UserAccessValidation;
use App\Repository\TaxShieldRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class TaxShieldController extends AbstractController
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
    
    #[Route('/tax_shield', name: 'app_tax_shield_create', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $monthlyTaxShield = $data['monthly_tax_shield'] ?? 0.0;
        $dailyTaxShield = $data['daily_tax_shield'] ?? 0.0;
        $remarks = $data['remarks'] ?? null;

        $taxShield = new TaxShield();
        $taxShield->setMonthlyTaxShield($monthlyTaxShield)
                  ->setDailyTaxShield($dailyTaxShield)
                  ->setRemarks($remarks);

        $entityManager->persist($taxShield);
        $entityManager->flush();

        return new JsonResponse(['status' => 'Tax shield created'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/tax_shield/{id}', name: 'app_tax_shield_read', methods: ['GET'])]
    public function read(int $id, TaxShieldRepository $taxShieldRepository): JsonResponse
    {
        $taxShield = $taxShieldRepository->find($id);

        if (!$taxShield) {
            return new JsonResponse(['status' => 'Tax shield not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = [
            'id' => $taxShield->getId(),
            'monthly_tax_shield' => $taxShield->getMonthlyTaxShield(),
            'daily_tax_shield' => $taxShield->getDailyTaxShield(),
            'remarks' => $taxShield->getRemarks(),
        ];

        return new JsonResponse($data, JsonResponse::HTTP_OK);
    }

    #[Route('/tax_shield/{id}', name: 'app_tax_shield_update', methods: ['PUT'])]
    public function update(int $id, Request $request, EntityManagerInterface $entityManager, TaxShieldRepository $taxShieldRepository): JsonResponse
    {
        $taxShield = $taxShieldRepository->find($id);

        if (!$taxShield) {
            return new JsonResponse(['status' => 'Tax shield not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);

        $monthlyTaxShield = $data['monthly_tax_shield'] ?? $taxShield->getMonthlyTaxShield();
        $dailyTaxShield = $data['daily_tax_shield'] ?? $taxShield->getDailyTaxShield();
        $remarks = $data['remarks'] ?? $taxShield->getRemarks();

        $taxShield->setMonthlyTaxShield($monthlyTaxShield)
                  ->setDailyTaxShield($dailyTaxShield)
                  ->setRemarks($remarks);

        $entityManager->flush();

        return new JsonResponse(['status' => 'Tax shield updated'], JsonResponse::HTTP_OK);
    }

    #[Route('/tax_shield/{id}', name: 'app_tax_shield_delete', methods: ['DELETE'])]
    public function delete(int $id, EntityManagerInterface $entityManager, TaxShieldRepository $taxShieldRepository): JsonResponse
    {
        $taxShield = $taxShieldRepository->find($id);

        if (!$taxShield) {
            return new JsonResponse(['status' => 'Tax shield not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $entityManager->remove($taxShield);
        $entityManager->flush();

        return new JsonResponse(['status' => 'Tax shield deleted'], JsonResponse::HTTP_NO_CONTENT);
    }
}
