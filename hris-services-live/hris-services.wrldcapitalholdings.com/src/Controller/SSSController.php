<?php

namespace App\Controller;

use App\Entity\SSSConfig;
use App\Entity\EmployeePayrollProfile;
use App\Service\AuditLog;
use App\Service\UserAccessValidation;
use App\Repository\SSSConfigRepository;
use App\Repository\EmployeePayrollProfileRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class SSSController extends AbstractController
{
    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $validateAccess;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, UserAccessValidation $validateAccess)
    {
        $this->entityManager    = $entityManager;
        $this->passhasher       = $passhasher;
        $this->jwtManager       = $jwtManager;
        $this->auditlog         = $auditLog;
        $this->validateAccess   = $validateAccess;
    }

    #[Route('/api/sssconfig/create', name: 'create_sssconfig', methods: ['POST'])]
    public function createSSSConfig(Request $request, EmployeePayrollProfileRepository $payrollProfileRepo): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $sssConfig = new SSSConfig();
        $sssConfig->setRangeStart($data['range_start'])
                  ->setRangeEnd($data['range_end'])
                  ->setMscEc($data['msc_ec'])
                  ->setMscWisp($data['msc_wisp'])
                  ->setMscTotal($data['msc_total'])
                  ->setContributionRegularEr($data['contribution_regular_er'])
                  ->setContributionRegularEe($data['contribution_regular_ee'])
                  ->setContributionEcEr($data['contribution_ec_er'])
                  ->setContributionEcEe($data['contribution_ec_ee'])
                  ->setContributionWispEr($data['contribution_wisp_er'])
                  ->setContributionWispEe($data['contribution_wisp_ee'])
                  ->setContributionTotalEr($data['contribution_total_er'])
                  ->setContributionTotalEe($data['contribution_total_ee']);
        try {
            $this->entityManager->persist($sssConfig);
            $this->entityManager->flush();

            return $this->json(['message' => 'SSSConfig created successfully.'], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to create SSSConfig.', 'message' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/sssconfig/find/{id}', name: 'get_sssconfig', methods: ['GET'])]
    public function getSSSConfig(int $id, SSSConfigRepository $sssConfigRepository): JsonResponse
    {
        $sssConfig = $sssConfigRepository->findOneByIdAndNotArchived($id);

        if (!$sssConfig) {
            return $this->json(['error' => 'SSSConfig not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        return $this->json([
            'id' => $sssConfig->getId(),
            'range_start' => $sssConfig->getRangeStart(),
            'range_end' => $sssConfig->getRangeEnd(),
            'msc_ec' => $sssConfig->getMscEc(),
            'msc_wisp' => $sssConfig->getMscWisp(),
            'msc_total' => $sssConfig->getMscTotal(),
            'contribution_regular_er' => $sssConfig->getContributionRegularEr(),
            'contribution_regular_ee' => $sssConfig->getContributionRegularEe(),
            'contribution_ec_er' => $sssConfig->getContributionEcEr(),
            'contribution_ec_ee' => $sssConfig->getContributionEcEe(),
            'contribution_wisp_er' => $sssConfig->getContributionWispEr(),
            'contribution_wisp_ee' => $sssConfig->getContributionWispEe(),
            'contribution_total_er' => $sssConfig->getContributionTotalEr(),
            'contribution_total_ee' => $sssConfig->getContributionTotalEe(),
        ], JsonResponse::HTTP_OK);
    }

    #[Route('/api/sssconfig/list', name: 'list_sssconfig', methods: ['GET'])]
    public function listSSSConfig(SSSConfigRepository $sssConfigRepository): JsonResponse
    {
        $sssConfigs = $sssConfigRepository->findNotArchived();

        $sssConfigArray = array_map(function (SSSConfig $sssConfig) {
            return [
                'id' => $sssConfig->getId(),
                'range_start' => $sssConfig->getRangeStart(),
                'range_end' => $sssConfig->getRangeEnd(),
                'msc_ec' => $sssConfig->getMscEc(),
                'msc_wisp' => $sssConfig->getMscWisp(),
                'msc_total' => $sssConfig->getMscTotal(),
                'contribution_regular_er' => $sssConfig->getContributionRegularEr(),
                'contribution_regular_ee' => $sssConfig->getContributionRegularEe(),
                'contribution_ec_er' => $sssConfig->getContributionEcEr(),
                'contribution_ec_ee' => $sssConfig->getContributionEcEe(),
                'contribution_wisp_er' => $sssConfig->getContributionWispEr(),
                'contribution_wisp_ee' => $sssConfig->getContributionWispEe(),
                'contribution_total_er' => $sssConfig->getContributionTotalEr(),
                'contribution_total_ee' => $sssConfig->getContributionTotalEe(),
            ];
        }, $sssConfigs);

        return $this->json($sssConfigArray, JsonResponse::HTTP_OK);
    }

    #[Route('/api/sssconfig/update/{id}', name: 'update_sssconfig', methods: ['PUT'])]
    public function updateSSSConfig(int $id, Request $request, SSSConfigRepository $sssConfigRepository, EmployeePayrollProfileRepository $payrollProfileRepo): JsonResponse
    {
        $sssConfig = $sssConfigRepository->find($id);

        if (!$sssConfig) {
            return $this->json(['error' => 'SSSConfig not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);

        $sssConfig->setRangeStart($data['range_start'] ?? $sssConfig->getRangeStart())
                  ->setRangeEnd($data['range_end'] ?? $sssConfig->getRangeEnd())
                  ->setMscEc($data['msc_ec'] ?? $sssConfig->getMscEc())
                  ->setMscWisp($data['msc_wisp'] ?? $sssConfig->getMscWisp())
                  ->setMscTotal($data['msc_total'] ?? $sssConfig->getMscTotal())
                  ->setContributionRegularEr($data['contribution_regular_er'] ?? $sssConfig->getContributionRegularEr())
                  ->setContributionRegularEe($data['contribution_regular_ee'] ?? $sssConfig->getContributionRegularEe())
                  ->setContributionEcEr($data['contribution_ec_er'] ?? $sssConfig->getContributionEcEr())
                  ->setContributionEcEe($data['contribution_ec_ee'] ?? $sssConfig->getContributionEcEe())
                  ->setContributionWispEr($data['contribution_wisp_er'] ?? $sssConfig->getContributionWispEr())
                  ->setContributionWispEe($data['contribution_wisp_ee'] ?? $sssConfig->getContributionWispEe())
                  ->setContributionTotalEr($data['contribution_total_er'] ?? $sssConfig->getContributionTotalEr())
                  ->setContributionTotalEe($data['contribution_total_ee'] ?? $sssConfig->getContributionTotalEe());

        try {
            $this->entityManager->flush();

            return $this->json(['message' => 'SSSConfig updated successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to update SSSConfig.', 'message' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    // #[Route('/api/sssconfig/import', name: 'import_sssconfig', methods: ['POST'])]
    // public function importSSSConfig(Request $request): JsonResponse
    // {
    //     // Check if a file is uploaded
    //     /** @var UploadedFile|null $file */
    //     $file = $request->files->get('file');
    //     print_r($request->files);
    
    //     if (!$file) {
    //         return new JsonResponse(['error' => 'No file uploaded'], JsonResponse::HTTP_BAD_REQUEST);
    //     }
    
    //     // Check file extension
    //     if ($file->getClientOriginalExtension() !== 'csv') {
    //         return new JsonResponse(['error' => 'Invalid file type. Only CSV is allowed.'], JsonResponse::HTTP_BAD_REQUEST);
    //     }
    
    //     // Move the file to a temporary directory
    //     $uploadsDir = $this->getParameter('kernel.project_dir') . '/uploads';
    //     $filePath = $file->move($uploadsDir, $file->getClientOriginalName());
    
    //     try {
    //         // Open the file and parse CSV
    //         $csvFile = fopen($filePath, 'r');
    //         if (!$csvFile) {
    //             throw new \Exception('Failed to open the CSV file.');
    //         }
    
    //         // Skip the header row
    //         fgetcsv($csvFile);
    
    //         $entityManager = $this->entityManager;
    
    //         while (($data = fgetcsv($csvFile)) !== false) {
    //             // Ensure correct number of columns
    //             if (count($data) < 12) {
    //                 throw new \Exception('Invalid CSV format.');
    //             }
    
    //             // Parse data from CSV
    //             $sssConfig = new SSSConfig();
    //             $sssConfig->setRangeStart((float)$data[0]);
    //             $sssConfig->setRangeEnd((float)$data[1]);
    //             $sssConfig->setMscEc((float)$data[2]);
    //             $sssConfig->setMscWisp((float)$data[3]);
    //             $sssConfig->setMscTotal((float)$data[4]);
    //             $sssConfig->setContributionRegularEr((float)$data[5]);
    //             $sssConfig->setContributionRegularEe((float)$data[6]);
    //             $sssConfig->setContributionEcEr((float)$data[7]);
    //             $sssConfig->setContributionEcEe((float)$data[8]);
    //             $sssConfig->setContributionWispEr((float)$data[9]);
    //             $sssConfig->setContributionWispEe((float)$data[10]);
    //             $sssConfig->setContributionTotalEr((float)$data[11]);
    //             $sssConfig->setContributionTotalEe((float)$data[12]);
    
    //             // Persist the SSSConfig entity
    //             $entityManager->persist($sssConfig);
    //         }
    
    //         // Close CSV file
    //         fclose($csvFile);
    
    //         // Flush data to the database
    //         $entityManager->flush();
    
    //         // Return success response
    //         return new JsonResponse(['success' => 'File imported successfully.'], JsonResponse::HTTP_OK);
    //     } catch (\Exception $e) {
    //         return new JsonResponse(['error' => 'An error occurred: ' . $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    //     }
    // }
    #[Route('/api/sssconfig/import', name: 'import_sssconfig', methods: ['POST'])]
    public function importSSSConfig(Request $request): JsonResponse
    {
        // Get the CSV data from the request
        $csvData = json_decode($request->getContent(), true)['csv_data'] ?? null;

        if (!$csvData) {
            return new JsonResponse(['error' => 'No CSV data received'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $entityManager = $this->entityManager;

        try {
            foreach ($csvData as $row) {
                // Validate the number of columns
                if (count($row) < 12) {
                    throw new \Exception('Invalid CSV format.');
                }

                // Create a new SSSConfig entity and set its properties
                $sssConfig = new SSSConfig();
                $sssConfig->setRangeStart((float)$row[0]);
                $sssConfig->setRangeEnd((float)$row[1]);
                $sssConfig->setMscEc((float)$row[2]);
                $sssConfig->setMscWisp((float)$row[3]);
                $sssConfig->setMscTotal((float)$row[4]);
                $sssConfig->setContributionRegularEr((float)$row[5]);
                $sssConfig->setContributionRegularEe((float)$row[6]);
                $sssConfig->setContributionEcEr((float)$row[7]);
                $sssConfig->setContributionEcEe((float)$row[8]);
                $sssConfig->setContributionWispEr((float)$row[9]);
                $sssConfig->setContributionWispEe((float)$row[10]);
                $sssConfig->setContributionTotalEr((float)$row[11]);
                $sssConfig->setContributionTotalEe((float)$row[12]);

                // Persist the SSSConfig entity
                $entityManager->persist($sssConfig);
            }

            // Flush data to the database
            $entityManager->flush();

            // Return success response
            return new JsonResponse(['success' => 'File imported successfully.'], JsonResponse::HTTP_OK);
            $this->auditlog->addAuditLog($request, json_encode($sssConfig, JSON_UNESCAPED_SLASHES), 'api/emp201/create', 'Create');
        } catch (\Exception $e) {
            return new JsonResponse(['error' => 'An error occurred: ' . $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/sssconfig/delete/{id}', name: 'delete_sssconfig', methods: ['DELETE'])]
    public function deleteSSSConfig(int $id, SSSConfigRepository $sssConfigRepository): JsonResponse
    {
        $entityManager = $this->entityManager;

        try {
            // Find the SSSConfig entity by ID
            $sssConfig = $sssConfigRepository->find($id);

            if (!$sssConfig) {
                return $this->json(['error' => 'SSSConfig not found.'], JsonResponse::HTTP_NOT_FOUND);
            }

            // Remove the SSSConfig entity
            $sssConfig->setArchived(true);
            $entityManager->persist($sssConfig);
            $entityManager->flush();

            // Return success response
            return $this->json(['message' => 'SSSConfig deleted successfully.'], JsonResponse::HTTP_OK);
            // Move audit logging to a separate service or event listener
            $this->auditlog->addAuditLog($request, json_encode(['deleted id: '.$id], JSON_UNESCAPED_SLASHES), 'api/sssconfig/delete', 'Delete');
        } catch (\Exception $e) {
            // Handle and return error response
            return $this->json(['error' => 'Failed to delete SSSConfig.', 'message' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}
