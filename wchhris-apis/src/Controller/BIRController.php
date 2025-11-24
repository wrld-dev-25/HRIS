<?php

namespace App\Controller;

use App\Entity\TaxConfig;
use App\Service\AuditLog;
use App\Service\UserAccessValidation;
use App\Repository\TaxConfigRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class BIRController extends AbstractController
{
    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $validateAccess;

    public function __construct(EntityManagerInterface $entityManager,  UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, UserAccessValidation $validateAccess)
    {
        $this->entityManager    = $entityManager;
        $this->passhasher       = $passhasher;
        $this->jwtManager       = $jwtManager;
        $this->auditlog         = $auditLog;
        $this->validateAccess   = $validateAccess;
    }
    
    #[Route('/api/taxconfig/create', name: 'create_taxconfig', methods: ['POST'])]
    public function createTaxConfig(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $taxConfig = new TaxConfig();
        $taxConfig->setTaxBracketName($data['tax_bracket_name'])
                  ->setTaxBracketRange($data['tax_bracket_range'])
                  ->setTaxBracketRangeEnd($data['tax_bracket_range_end'])
                  ->setTaxDeductionPercent($data['tax_deduction_percent'])
                  ->setTaxDeductionAmount($data['tax_deduction_amount']);

        try {
            $this->entityManager->persist($taxConfig);
            $this->entityManager->flush();

            return $this->json(['message' => 'TaxConfig created successfully.'], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            return $this->json(['message' => 'Failed to create TaxConfig.', 'error' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/get-taxconfig/{id}', name: 'get_taxconfig', methods: ['GET'])]
    public function getTaxConfig(int $id, TaxConfigRepository $taxConfigRepository): JsonResponse
    {
        $taxConfig = $taxConfigRepository->find($id);

        if (!$taxConfig) {
            return $this->json(['error' => 'TaxConfig not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        return $this->json([
            'id' => $taxConfig->getId(),
            'tax_bracket_name' => $taxConfig->getTaxBracketName(),
            'tax_bracket_range' => $taxConfig->getTaxBracketRange(),
            'tax_bracket_range_end' => $taxConfig->getTaxBracketRangeEnd(),
            'tax_deduction_percent' => $taxConfig->getTaxDeductionPercent(),
            'tax_deduction_amount' => $taxConfig->getTaxDeductionAmount(),
        ], JsonResponse::HTTP_OK);
    }

    #[Route('/api/taxconfig/list', name: 'list_taxconfig', methods: ['GET'])]
    public function listTaxConfig(TaxConfigRepository $taxConfigRepository): JsonResponse
    {
        $taxConfigs = $taxConfigRepository->findAll();

        $taxConfigArray = array_map(function (TaxConfig $taxConfig) {
            return [
                'id' => $taxConfig->getId(),
                'tax_bracket_name' => $taxConfig->getTaxBracketName(),
                'tax_bracket_range' => $taxConfig->getTaxBracketRange(),
                'tax_bracket_range_end' => $taxConfig->getTaxBracketRangeEnd(),
                'tax_deduction_percent' => $taxConfig->getTaxDeductionPercent(),
                'tax_deduction_amount' => $taxConfig->getTaxDeductionAmount(),
            ];
        }, $taxConfigs);

        return $this->json($taxConfigArray, JsonResponse::HTTP_OK);
    }

    #[Route('/api/taxconfig/update/{id}', name: 'update_taxconfig', methods: ['PUT'])]
    public function updateTaxConfig(int $id, Request $request, TaxConfigRepository $taxConfigRepository): JsonResponse
    {
        $taxConfig = $taxConfigRepository->find($id);

        if (!$taxConfig) {
            return $this->json(['error' => 'TaxConfig not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);

        $taxConfig->setTaxBracketName($data['tax_bracket_name'] ?? $taxConfig->getTaxBracketName())
                  ->setTaxBracketRange($data['tax_bracket_range'] ?? $taxConfig->getTaxBracketRange())
                  ->setTaxBracketRangeEnd($data['tax_bracket_range_end'] ?? $taxConfig->getTaxBracketRangeEnd())
                  ->setTaxDeductionPercent($data['tax_deduction_percent'] ?? $taxConfig->getTaxDeductionPercent())
                  ->setTaxDeductionAmount($data['tax_deduction_amount'] ?? $taxConfig->getTaxDeductionAmount());

        try {
            $this->entityManager->flush();

            return $this->json(['message' => 'TaxConfig updated successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return $this->json(['message' => 'Failed to update TaxConfig.', 'error' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/taxconfig/delete/{id}', name: 'delete_taxconfig', methods: ['DELETE'])]
    public function deleteTaxConfig(int $id, TaxConfigRepository $taxConfigRepository, Request $request): JsonResponse
    {
        try {
            // Find the TaxConfig entity by ID
            $taxConfig = $taxConfigRepository->find($id);

            if (!$taxConfig) {
                return $this->json(['error' => 'TaxConfig not found.'], JsonResponse::HTTP_NOT_FOUND);
            }

            // Remove the reference to TaxConfig from related EmployeePayrollProfile entities
            foreach ($taxConfig->getEmployeePayrollProfiles() as $employeePayrollProfile) {
                $employeePayrollProfile->setTaxContribution(null);
                $this->entityManager->persist($employeePayrollProfile);
            }

            // Remove the TaxConfig entity
            $this->entityManager->remove($taxConfig);
            $this->entityManager->flush();

            // Log the deletion
            $this->auditlog->addAuditLog($request, json_encode(['deleted id' => $id], JSON_UNESCAPED_SLASHES), 'api/taxconfig/delete', 'Delete');

            // Return success response
            return $this->json(['message' => 'TaxConfig and related items deleted successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error
            $this->auditlog->addAuditLog($request, json_encode(['error' => $e->getMessage()], JSON_UNESCAPED_SLASHES), 'api/taxconfig/delete', 'Delete');

            // Handle and return error response
            return $this->json(['message' => 'Failed to delete TaxConfig.', 'error' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    #[Route('/api/taxconfig/import', name: 'import_taxconfig', methods: ['POST'])]
    public function importTaxConfig(Request $request): JsonResponse
    {
        // Get the JSON data from the request
        $taxData = json_decode($request->getContent(), true) ?? null;
    
        if (!$taxData) {
            return new JsonResponse(['error' => 'No CSV data received'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        $entityManager = $this->entityManager;
    
        try {
            foreach ($taxData as $row) {
                // Validate the required fields
                if (!isset($row[0], $row[1], $row[2], $row[3], $row[4])) {
                    throw new \Exception('Invalid data format.');
                }
    
                // Create a new TaxConfig entity and set its properties
                $taxConfig = new TaxConfig();
                $taxConfig->setTaxBracketName($row[0]); // Tax name
                $taxConfig->setTaxBracketRange((float)$row[1]); // Range Start
                $taxConfig->setTaxBracketRangeEnd((float)$row[2]); // Range End
                $taxConfig->setTaxDeductionPercent((float)$row[3]); // Tax Deduction Percent
                $taxConfig->setTaxDeductionAmount((float)$row[4]); // Tax Deduction Amount
    
                // Persist the TaxConfig entity
                $entityManager->persist($taxConfig);
            }
    
            // Flush data to the database
            $entityManager->flush();
    
            // Return success response
            return new JsonResponse(['success' => 'Tax configuration imported successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return new JsonResponse(['message' => 'An error occurred: ' . $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    

}
