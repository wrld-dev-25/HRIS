<?php

namespace App\Controller;

use App\Service\AuditLog;
use App\Entity\AffiliatedCompany;
use App\Service\UserAccessValidation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class AffiliatedCompanyController extends AbstractController
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

    #[Route('/api/affiliated-companies/create', name: 'create_affiliated_company', methods: ['POST'])]
    public function createAffiliatedCompany(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        // Validate data (You can extend validation based on your needs)
        if (!isset($data['code'], $data['name'])) {
            return new JsonResponse(['message' => 'Missing required fields'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Create and populate AffiliatedCompany object
        $affiliatedCompany = new AffiliatedCompany();
        $affiliatedCompany->setCode($data['code']);
        $affiliatedCompany->setName($data['name']);

        // Save to database
        $this->entityManager->persist($affiliatedCompany);
        $this->entityManager->flush();

        // Return success response
        return new JsonResponse(['message' => 'Affiliated company created successfully'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/api/affiliated-companies/list', name: 'get_affiliated_companies', methods: ['GET'])]
    public function getAffiliatedCompanies(): JsonResponse
    {
        // Get all affiliated companies from the repository
        $affiliatedCompanies = $this->entityManager->getRepository(AffiliatedCompany::class)->findAll();
    
        // Format the response data
        $responseData = [];
        foreach ($affiliatedCompanies as $company) {
            $responseData[] = [
                'id' => $company->getId(),
                'code' => $company->getCode(),
                'name' => $company->getName(),
            ];
        }
    
        // Return data as JSON
        return new JsonResponse($responseData, JsonResponse::HTTP_OK);
    }

    #[Route('/api/affiliated-companies/find/{id}', name: 'get_affiliated_company', methods: ['GET'])]
    public function getAffiliatedCompany(int $id): JsonResponse
    {
        // Find the affiliated company by ID
        $affiliatedCompany = $this->entityManager->getRepository(AffiliatedCompany::class)->find($id);
    
        if (!$affiliatedCompany) {
            return new JsonResponse(['message' => 'Affiliated company not found'], JsonResponse::HTTP_NOT_FOUND);
        }
    
        // Return the company data as JSON
        $responseData = [
            'id' => $affiliatedCompany->getId(),
            'code' => $affiliatedCompany->getCode(),
            'name' => $affiliatedCompany->getName(),
        ];
    
        return new JsonResponse($responseData, JsonResponse::HTTP_OK);
    }

    #[Route('/api/affiliated-companies/update/{id}', name: 'update_affiliated_company', methods: ['PUT'])]
    public function updateAffiliatedCompany(int $id, Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
    
        // Find the affiliated company by ID
        $affiliatedCompany = $this->entityManager->getRepository(AffiliatedCompany::class)->find($id);
    
        if (!$affiliatedCompany) {
            return new JsonResponse(['message' => 'Affiliated company not found'], JsonResponse::HTTP_NOT_FOUND);
        }
    
        // Update the company details
        if (isset($data['code'])) {
            $affiliatedCompany->setCode($data['code']);
        }
        if (isset($data['name'])) {
            $affiliatedCompany->setName($data['name']);
        }
    
        // Save changes to the database
        $this->entityManager->flush();
    
        return new JsonResponse(['message' => 'Affiliated company updated successfully'], JsonResponse::HTTP_OK);
    }

    #[Route('/api/affiliated-companies/delete/{id}', name: 'delete_affiliated_company', methods: ['DELETE'])]
    public function deleteAffiliatedCompany(int $id): JsonResponse
    {
        // Find the affiliated company by ID
        $affiliatedCompany = $this->entityManager->getRepository(AffiliatedCompany::class)->find($id);
    
        if (!$affiliatedCompany) {
            return new JsonResponse(['message' => 'Affiliated company not found'], JsonResponse::HTTP_NOT_FOUND);
        }
    
        // Remove the company from the database
        $this->entityManager->remove($affiliatedCompany);
        $this->entityManager->flush();
    
        return new JsonResponse(['message' => 'Affiliated company deleted successfully'], JsonResponse::HTTP_OK);
    }
    
}
