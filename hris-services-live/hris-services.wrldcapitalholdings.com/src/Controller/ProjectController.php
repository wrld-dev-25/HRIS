<?php

namespace App\Controller;

use App\Entity\Lots;
use App\Entity\User;
use App\Entity\Model;
use App\Entity\Owner;
use App\Entity\Phase;
use App\Entity\Blocks;
use App\Entity\Worker;
use App\Entity\Project;
use App\Entity\Category;
use App\Entity\EmployeeProjects;
use App\Entity\EmployeeRecords;
use App\Entity\EmpTask;
use App\Entity\UserType;
use App\Service\AuditLog;
use App\Entity\ModelTypes;
use App\Entity\Subdivision;
use App\Service\UserAccessValidation;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class ProjectController extends AbstractController
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
    
    #[Route('api/wizard/create', name: 'create_wizard', methods: ['POST'])]
    public function createWizard(Request $request): JsonResponse
    {
        //validate user
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }
        $sub_id                = $data["sub_id"] ?? null;
        $subdivisionRepo = $this->entityManager->getRepository(Subdivision::class);
        $subdivisionItem = $subdivisionRepo->findOneBy(["id" => $sub_id]);
        //var_dump($subdivisionItem);
        if($subdivisionItem){
            $newproject = $this->createProjectWizard($request);
            if(!$newproject){ //create new project
                return $this->json(['message' => 'Project creation failed', 'existing' => true, JsonResponse::HTTP_BAD_REQUEST]);
            }
            if(!$this->createCategoryWizard($request, $newproject)){
                return $this->json(['message' => 'Category creation failed', 'existing' => true, JsonResponse::HTTP_BAD_REQUEST]);
            }
            return $this->json(['message' => 'Wizard creation successful.'], JsonResponse::HTTP_CREATED);
        }
        else{
            return $this->json(['message' => 'Subdivision code or name is existing.', 'existing' => true, JsonResponse::HTTP_CONFLICT]);
        }
    }

    #[Route('/api/subdivision', name: 'view_subdivision', methods: ['GET'])]
    public function viewSubdivision(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $page                  = $data['page'] ?? 1;
        $limit                 = $data['limit'] ?? 300;

        $validationResult = $this->validateAccess->validateUserAccess($request, 'subdivision', 'view');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        try {
            $subdivisionRepo = $this->entityManager->getRepository(Subdivision::class);
            //$paginator = $subdivisionRepo->findByNotArchived();
            // Get the items from the Paginator
            //$subdivisions = $paginator->getIterator()->getArrayCopy();
            $subdivisions = $subdivisionRepo->findByNotArchived();
            $subdivisionArray = array_map(function (Subdivision $subdivision) {
                $phases = array_values(array_map(function (Phase $phase) {
                    $blocks = array_map(function (Blocks $blocks) {
                        return [
                            'id' => $blocks->getId(),
                            'block_name' => $blocks->getBlockName(),
                            'total_lots' => $blocks->getTotalLots(),
                        ];
                    }, $phase->getBlocks()->toArray());
            
                    return [
                        'id' => $phase->getId(),
                        'name' => $phase->getName(),
                        'code' => $phase->getCode(),
                        'totalBlocks' => $phase->getTotalBlocks(),
                        'totalLots' => $phase->getTotalLots(),
                        'remaining_lots' => $phase->getRemainingLots(),
                        'blocks_list' => $blocks,
                    ];
                }, array_filter($subdivision->getPhases()->toArray(), function (Phase $phase) {
                    return !$phase->isArchived();
                })));
            
                return [
                    'id' => $subdivision->getId(),
                    'subdivisionCode' => $subdivision->getSubdivisionCode(),
                    'description' => $subdivision->getDescription(),
                    'name' => $subdivision->getName(),
                    'location' => $subdivision->getLocation(),
                    'total_phases' => count($phases),
                    'total_lots' => $subdivision->getTotalLots(),
                    'remaining_lots' => $subdivision->getRemainingLots(),
                    'total_consumed_lots' => intval($subdivision->getTotalLots()) - intval($subdivision->getRemainingLots()),
                    'archived' => $subdivision->isArchived(),
                    'phases' => $phases,
                ];
            }, $subdivisions);
            
            // Get the total number of pages
            // $totalItems = $paginator->count();
            // $totalPages = ceil($totalItems / 300);
            $totalItems = 0;
            $totalPages = 0;
            $nonArchivedCount = count($subdivisionRepo->findBy(['archived' => false]));
            //audit trail
            $this->auditlog->addAuditLog($request, $subdivisionArray, 'api/subdivision', 'View');
            return $this->json([
                'message' => 'Subdivisions retrieved successfully.',
                'subdivisions' => $subdivisionArray,
                'total_pages' => $totalPages,
                'total_page_items' => $totalItems,
                'total_items' => $nonArchivedCount,
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to retrieve subdivisions.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('api/subdivision/create', name: 'create_subdivision', methods: ['POST'])]
    public function createSubdivision(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $validationResult = $this->validateAccess->validateUserAccess($request, 'subdivision', 'add');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        $subdivisionRepo = $entityManager->getRepository(Subdivision::class);
        $existingSubdivision = $subdivisionRepo->findOneByCodeOrName($data['code'], $data['name']);

        if (!$existingSubdivision) {
            $entityManager->beginTransaction();

            try {
                $new_subdivision = new Subdivision();
                $new_subdivision->setSubdivisionCode($data['code']);
                $new_subdivision->setName($data['name']);
                $new_subdivision->setDescription($data['desc']);
                $new_subdivision->setLocation($data['location']);
                $new_subdivision->setTotalLots($data['total_lots'] ?? 0);
                $new_subdivision->setArchived(false);
                // $phases = $data['phase'] ?? [];

                // foreach ($phases as $phaseData) {
                //     $newPhase = new Phase();
                //     $newPhase->setName($phaseData['name']);
                //     $newPhase->setCode($phaseData['code']);
                //     $newPhase->setTotalBlocks($phaseData['total_blocks']);
                //     $newPhase->setTotalLots($phaseData['total_lots']);
                //     $newPhase->setSubdivision($new_subdivision);
                //     $entityManager->persist($newPhase);
                // }

                $entityManager->persist($new_subdivision);
                $entityManager->flush();
                $entityManager->commit();

                // Move audit logging to a separate service or event listener
                $this->auditlog->addAuditLog($request, json_encode($new_subdivision, JSON_UNESCAPED_SLASHES), 'api/subdivision/create', 'Create Subdivision');

                return $this->json(['message' => 'Subdivision creation successful.'], JsonResponse::HTTP_CREATED);
            } catch (\Exception $e) {
                $entityManager->rollback();
                return $this->json(['message' => "There's an error in code".$e], JsonResponse::HTTP_CREATED);
            }
        } else {
            return $this->json(['message' => 'Subdivision code or name is existing.', 'existing' => true], JsonResponse::HTTP_CONFLICT);
        }
    }

    #[Route('api/subdivision/update', name: 'update_subdivision', methods: ['POST'])]
    public function updateSubdivision(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $validationResult = $this->validateAccess->validateUserAccess($request, 'subdivision', 'edit');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        $subdivisionId = $data['id'] ?? null;
        if ($subdivisionId === null) {
            return $this->json(['message' => 'Subdivision ID is required'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $subdivisionRepo = $this->entityManager->getRepository(Subdivision::class);
        $subdivision = $subdivisionRepo->find($subdivisionId);

        if (!$subdivision) {
            return $this->json(['message' => 'Subdivision not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        // Validate the new subdivision code
        $newCode = $data['code'] ?? null;
        if (!$newCode) {
            return $this->json(['message' => 'Subdivision code is required'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Check if the subdivision code is unique
        $existingSubdivision = $subdivisionRepo->findOneBy(['subdivision_code' => $newCode]);
        if ($existingSubdivision && $existingSubdivision->getId() !== $subdivision->getId()) {
            return $this->json(['message' => 'Subdivision code must be unique'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $phases = $subdivision->getPhases();
        $totalLotsSum = array_reduce($phases->toArray(), function($carry, $phase) {
            return $carry + $phase->getTotalLots();
        }, 0);

        if($totalLotsSum > $data['total_lots']){
            return $this->json(['message' => 'Total Lots must not be lower than the total lots of all phases of this subdivision'], JsonResponse::HTTP_BAD_REQUEST);
        }

        try {
            $this->entityManager->beginTransaction();
            $subdivision->setSubdivisionCode($data['code'] ?? $subdivision->getSubdivisionCode());
            $subdivision->setName($data['name'] ?? $subdivision->getName());
            $subdivision->setDescription($data['desc'] ?? $subdivision->getDescription());
            $subdivision->setTotalLots($data['total_lots'] ?? $subdivision->getTotalLots());
            $subdivision->setLocation($data['location'] ?? $subdivision->getLocation());

            $this->entityManager->persist($subdivision);
            $this->entityManager->flush();
            $this->entityManager->commit();

            $this->auditlog->addAuditLog($request, json_encode($subdivision, JSON_UNESCAPED_SLASHES), 'api/subdivision/update', 'Update Subdivision');

            return $this->json(['message' => 'Subdivision update successful.'], JsonResponse::HTTP_OK);
        } catch (\Throwable $e) {
            $this->entityManager->rollback();
            $this->auditlog->addAuditLog($request, json_encode($e, JSON_UNESCAPED_SLASHES), 'api/subdivision/update', 'Update error Subdivision');
            return $this->json(['message' => "There's an error in code: " . $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('api/project/subdivision/update', name: 'project_update_subdivision', methods: ['POST'])]
    public function projectUpdateSubdivision(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $validationResult = $this->validateAccess->validateUserAccess($request, 'subdivision', 'edit');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        $subdivisionId = $data['id'] ?? null;
        if ($subdivisionId === null) {
            return $this->json(['message' => 'Subdivision ID is required'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $subdivisionRepo = $this->entityManager->getRepository(Subdivision::class);
        $subdivision = $subdivisionRepo->find($subdivisionId);

        if (!$subdivision) {
            return $this->json(['message' => 'Subdivision not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        // Validate the new subdivision code
        $newCode = $data['code'] ?? null;
        if (!$newCode) {
            return $this->json(['message' => 'Subdivision code is required'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Check if the subdivision code is unique
        $existingSubdivision = $subdivisionRepo->findOneBy(['subdivision_code' => $newCode]);
        if ($existingSubdivision && $existingSubdivision->getId() !== $subdivision->getId()) {
            return $this->json(['message' => 'Subdivision code must be unique'], JsonResponse::HTTP_BAD_REQUEST);
        }

        try {
            $this->entityManager->beginTransaction();
            $subdivision->setSubdivisionCode($data['code'] ?? $subdivision->getSubdivisionCode());
            $subdivision->setName($data['name'] ?? $subdivision->getName());
            $subdivision->setDescription($data['desc'] ?? $subdivision->getDescription());
            $subdivision->setLocation($data['location'] ?? $subdivision->getLocation());

            $this->entityManager->persist($subdivision);
            $this->entityManager->flush();
            $this->entityManager->commit();

            $this->auditlog->addAuditLog($request, json_encode($subdivision, JSON_UNESCAPED_SLASHES), 'api/project/subdivision/update', 'Update Subdivision');

            return $this->json(['message' => 'Subdivision update successful.'], JsonResponse::HTTP_OK);
        } catch (\Throwable $e) {
            $this->entityManager->rollback();
            $this->auditlog->addAuditLog($request, json_encode($e, JSON_UNESCAPED_SLASHES), 'api/project/subdivision/update', 'Update error Subdivision');
            return $this->json(['message' => "There's an error in code: " . $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('api/subdivision/delete', name: 'delete_subdivision', methods: ['POST'])]
    public function deleteSubdivision(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $validationResult = $this->validateAccess->validateUserAccess($request, 'subdivision', 'delete');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        $subdivisionId = $data['id'] ?? null;
        if ($subdivisionId === null) {
            return $this->json(['message' => 'Subdivision ID is required'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $subdivisionRepo = $this->entityManager->getRepository(Subdivision::class);
        $subdivision = $subdivisionRepo->find($subdivisionId);

        if (!$subdivision) {
            return $this->json(['message' => 'Subdivision not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        try {
            // Archive the subdivision
            $subdivision->setArchived(true);

            // Check if Phases exist before trying to archive them
            $phases = $subdivision->getPhases();
            if ($phases !== null && !$phases->isEmpty()) {
                foreach ($phases as $phase) {
                    $phase->setArchived(true); // Archive each phase individually
                    $this->entityManager->persist($phase); // Persist changes to each phase
                }
            }

            // Check if the Project exists before working with it
            $project = $subdivision->getProject();
            if ($project !== null && !$project->isEmpty()) {
                // Check if Categories exist before archiving them
                $categories = $project->getCategories(); // Ensure this is a valid method on the Project entity
                if ($categories !== null && !$categories->isEmpty()) {
                    foreach ($categories as $category) {
                        $category->setArchived(true); // Archive each category individually
                        $this->entityManager->persist($category); // Persist changes to each category
                    }
                }

                // Archive the project itself
                $project->setArchived(true);
                $this->entityManager->persist($project);
            }

            // Persist the Subdivision
            $this->entityManager->persist($subdivision);
            $this->entityManager->flush();



            $this->auditlog->addAuditLog($request, json_encode($subdivision, JSON_UNESCAPED_SLASHES), 'api/subdivision/delete', 'Delete Subdivision');

            return $this->json(['message' => 'Subdivision deletion successful.'], JsonResponse::HTTP_OK);
        } catch (\Throwable $e) {
            $this->auditlog->addAuditLog($request, json_encode($e, JSON_UNESCAPED_SLASHES), 'api/subdivision/delete', 'Delete error Subdivision');
            return $this->json(['message' => "There's an error in code: " . $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    // #[Route('/api/project', name: 'view_project', methods: ['GET'])]
    // public function viewProject(Request $request): JsonResponse
    // {
    //     // $validationResult = $this->validateAccess->validateUserAccess($request, 'subdivision', 'edit');
    //     // if ($validationResult['status'] === 'error') {
    //     //     return new JsonResponse([
    //     //         'error' => $validationResult['error'],
    //     //         'message' => $validationResult['message']
    //     //     ], $validationResult['code']);
    //     // }
    //     try {
    //         $projectRepo = $this->entityManager->getRepository(Project::class);
    //         //$paginator = $projectRepo->findAllPaginated(1,300);
    //         // Get the items from the Paginator
    //         //$projectItems = $paginator->getIterator()->getArrayCopy();
    //         $projectItems = $projectRepo->findByNotArchived();
    //         $projectArray = array_map(function(Project $project) {
    //             $phases = array_values(array_map(function (Phase $phase) {
    //                 $blocks = array_map(function (Blocks $blocks) {
    //                     return [
    //                         'id' => $blocks->getId(),
    //                         'block_name' => $blocks->getBlockName(),
    //                         'total_lots' => $blocks->getTotalLots(),
    //                     ];
    //                 }, $phase->getBlocks()->toArray());
    //                 return [
    //                     'id' => $phase->getId(),
    //                     'name' => $phase->getName(),
    //                     'code' => $phase->getCode(),
    //                     'totalBlocks' => $phase->getTotalBlocks(),
    //                     'totalLots' => $phase->getTotalLots(),
    //                     'blocks_list' => $blocks,
    //                 ];
    //             }, array_filter($project->getSubdivision()->getPhases()->toArray(), function (Phase $phase) {
    //                 return !$phase->isArchived();
    //             })));

    //             $category = array_values(array_map(function (Category $category) {
    //                 return [
    //                     'id' => $category->getId(),
    //                     'code' => $category->getCode(),
    //                     'block_name' => $category->getLocation(),
    //                     'blocks' => $category->getblocks() ? [
    //                         'id' => $category->getblocks()->getId(),
    //                         'name' => $category->getblocks()->getBlockName(),
    //                         'code' => $category->getblocks()->getTotalLots(),
    //                     ] : null,
    //                     'lot' => $category->getLot(),
    //                     'lots' => $category->getLots() ? [
    //                         'id' => $category->getLots()->getId(),
    //                         'name' => $category->getLots()->getLotName(),
    //                         'code' => $category->getLots()->getLotNum(),
    //                     ] : null,
    //                     'model' => [
    //                         'id' => $category->getModel()->getId(),
    //                         'name' => $category->getModel()->getName(),
    //                     ]
    //                 ];
    //             }, array_filter($project->getCategories()->toArray(), function (Category $category) {
    //                 return !$category->isArchived();
    //             })));

    //             return [
    //                 'id' => $project->getId(),
    //                 'code' => $project->getCode(),
    //                 'name' => $project->getName(),
    //                 'description' => $project->getDescription(),
    //                 'subdivision' => $project->getSubdivision() && $project->getSubdivision()->isArchived() != true ? [
    //                     'id' => $project->getSubdivision()->getId(),
    //                     'name' => $project->getSubdivision()->getName(),
    //                     'code' => $project->getSubdivision()->getSubdivisionCode(),
    //                     'phase' => $phases,
    //                 ] : null,
    //                 'category' => $category,
    //                 'archived' => $project->isArchived(),
    //             ];
    //         },array_filter($projectItems, function (Project $project) {
    //             return !$project->getSubdivision()->isArchived();
    //         }));

    //         $this->auditlog->addAuditLog($request, json_encode($projectArray), 'api/project/', 'View project');
            
    //         return $this->json([
    //             'message' => 'Project retrieved successfully.',
    //             'project' => $projectArray
    //         ], JsonResponse::HTTP_OK);
    //     } catch (\Exception $e) {
    //         // Log the error or handle it appropriately
    //         return $this->json([
    //             'error' => 'Failed to retrieve project.',
    //             'message' => $e->getMessage()
    //         ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    //     }
    // }

    #[Route('/api/project', name: 'view_project', methods: ['GET'])]
    public function viewProject(Request $request): JsonResponse
    {
        try {
            $projectRepo = $this->entityManager->getRepository(Project::class);
            $projectItems = $projectRepo->findByNotArchived();

            $projectArray = [];
            foreach ($projectItems as $project) {
                if ($project->getSubdivision()->isArchived()) {
                    continue;
                }

                $phases = [];
                foreach ($project->getSubdivision()->getPhases() as $phase) {
                    if ($phase->isArchived()) {
                        continue;
                    }

                    // $blocks = [];
                    // foreach ($phase->getBlocks() as $block) {
                    //     $blocks[] = [
                    //         'id' => $block->getId(),
                    //         'block_name' => $block->getBlockName(),
                    //         'total_lots' => $block->getTotalLots(),
                    //     ];
                    // }

                    $phases[] = [
                        'id' => $phase->getId(),
                        'name' => $phase->getName(),
                        'code' => $phase->getCode(),
                        'totalBlocks' => $phase->getTotalBlocks(),
                        'totalLots' => $phase->getTotalLots(),
                        // 'blocks_list' => $blocks,
                    ];
                }

                $categories = [];
                // foreach ($project->getCategories() as $category) {
                //     if ($category->isArchived()) {
                //         continue;
                //     }

                //     $categories[] = [
                //         'id' => $category->getId(),
                //         'code' => $category->getCode(),
                //         'block_name' => $category->getLocation(),
                //         'blocks' => $category->getblocks() ? [
                //             'id' => $category->getblocks()->getId(),
                //             'name' => $category->getblocks()->getBlockName(),
                //             'code' => $category->getblocks()->getTotalLots(),
                //         ] : null,
                //         'lot' => $category->getLot(),
                //         'lots' => $category->getLots() ? [
                //             'id' => $category->getLots()->getId(),
                //             'name' => $category->getLots()->getLotName(),
                //             'code' => $category->getLots()->getLotNum(),
                //         ] : null,
                //         'model' => [
                //             'id' => $category->getModel()->getId(),
                //             'name' => $category->getModel()->getName(),
                //         ],
                //     ];
                // }

                $projectArray[] = [
                    'id' => $project->getId(),
                    'code' => $project->getCode(),
                    'name' => $project->getName(),
                    'description' => $project->getDescription(),
                    'subdivision' => $project->getSubdivision() && !$project->getSubdivision()->isArchived() ? [
                        'id' => $project->getSubdivision()->getId(),
                        'name' => $project->getSubdivision()->getName(),
                        'code' => $project->getSubdivision()->getSubdivisionCode(),
                        'phase' => $phases,
                    ] : null,
                    'category' => $categories,
                    'archived' => $project->isArchived(),
                ];
            }

            $this->auditlog->addAuditLog($request, json_encode(''), 'api/project/', 'View project');

            return $this->json([
                'message' => 'Project retrieved successfully.',
                'project' => $projectArray
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to retrieve project.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    // #[Route('/api/project', name: 'view_project', methods: ['GET'])]
    // public function viewProject(Request $request): JsonResponse
    // {
    //     try {
    //         $page = max(1, (int)$request->query->get('page', 1));
    //         $limit = 50;
    //         $offset = ($page - 1) * $limit;
    
    //         $projectRepo = $this->entityManager->getRepository(Project::class);
    //         $projectItems = $projectRepo->findNotArchivedWithRelations($limit, $offset);
    
    //         $projectArray = [];
    
    //         foreach ($projectItems as $project) {
    //             $phases = [];
    //             foreach ($project->getSubdivision()->getPhases() as $phase) {
    //                 $blocks = [];
    //                 foreach ($phase->getBlocks() as $block) {
    //                     $blocks[] = [
    //                         'id' => $block->getId(),
    //                         'block_name' => $block->getBlockName(),
    //                         'total_lots' => $block->getTotalLots(),
    //                     ];
    //                 }
    
    //                 $phases[] = [
    //                     'id' => $phase->getId(),
    //                     'name' => $phase->getName(),
    //                     'code' => $phase->getCode(),
    //                     'totalBlocks' => $phase->getTotalBlocks(),
    //                     'totalLots' => $phase->getTotalLots(),
    //                     'blocks_list' => $blocks,
    //                 ];
    //             }
    
    //             $categories = [];
    //             foreach ($project->getCategories() as $category) {
    //                 $categories[] = [
    //                     'id' => $category->getId(),
    //                     'code' => $category->getCode(),
    //                     'block_name' => $category->getLocation(),
    //                     'blocks' => $category->getBlocks() ? [
    //                         'id' => $category->getBlocks()->getId(),
    //                         'name' => $category->getBlocks()->getBlockName(),
    //                         'code' => $category->getBlocks()->getTotalLots(),
    //                     ] : null,
    //                     'lot' => $category->getLot(),
    //                     'lots' => $category->getLots() ? [
    //                         'id' => $category->getLots()->getId(),
    //                         'name' => $category->getLots()->getLotName(),
    //                         'code' => $category->getLots()->getLotNum(),
    //                     ] : null,
    //                     'model' => [
    //                         'id' => $category->getModel()->getId(),
    //                         'name' => $category->getModel()->getName(),
    //                     ],
    //                 ];
    //             }
    
    //             $projectArray[] = [
    //                 'id' => $project->getId(),
    //                 'code' => $project->getCode(),
    //                 'name' => $project->getName(),
    //                 'description' => $project->getDescription(),
    //                 'subdivision' => [
    //                     'id' => $project->getSubdivision()->getId(),
    //                     'name' => $project->getSubdivision()->getName(),
    //                     'code' => $project->getSubdivision()->getSubdivisionCode(),
    //                     'phase' => $phases,
    //                 ],
    //                 'category' => $categories,
    //                 'archived' => $project->isArchived(),
    //             ];
    //         }
    
    //         $this->auditlog->addAuditLog(
    //             $request,
    //             'Viewed projects (page ' . $page . ', limit ' . $limit . ')',
    //             'api/project/',
    //             'View project'
    //         );
    
    //         return $this->json([
    //             'message' => 'Projects retrieved successfully.',
    //             'project' => $projectArray,
    //             'pagination' => [
    //                 'page' => $page,
    //                 'limit' => $limit
    //             ]
    //         ], JsonResponse::HTTP_OK);
    //     } catch (\Exception $e) {
    //         return $this->json([
    //             'error' => 'Failed to retrieve projects.',
    //             'message' => $e->getMessage()
    //         ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    //     }
    // }
    
    #[Route('/api/project/summary', name: 'view_project_summary', methods: ['GET'])]
    public function viewProjectSummary(Request $request): JsonResponse
    {
        try {
            // Fetch only non-archived projects
            $projectRepo = $this->entityManager->getRepository(Project::class);
            $projectItems = $projectRepo->findByNotArchived();

            // Map only the required fields
            $projectArray = array_map(function (Project $project) {
                return [
                    'id' => $project->getId(),
                    'code' => $project->getCode(),
                    'name' => $project->getName(),
                ];
            }, $projectItems);

            return $this->json([
                'message' => 'Project summary retrieved successfully.',
                'projects' => $projectArray,
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return $this->json([
                'error' => 'Failed to retrieve project summary.',
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/project-emp/{id}', name: 'view_project-emp', methods: ['GET'])]
    public function viewProjectwithEmpRecord(Request $request, string $id): JsonResponse
    {
        $employeeId = $id;
        try {
            $projectRepo = $this->entityManager->getRepository(Project::class);
            $projectItems = $projectRepo->findByNotArchived();
            $projectArray = array_map(function(Project $project) use ($employeeId) {
                // Check if the specified employee is assigned to the project
                $employeeProjects = $project->getEmployeeProjects();
                $assigned = false;
                foreach ($employeeProjects as $empProj) {
                    if ($empProj->getEmployee()->getId() == (int) $employeeId && $empProj->isAssigned()) {       
                        $assigned = true;
                        break;
                    }
                }

                return [
                    'id' => $project->getId(),
                    'code' => $project->getCode(),
                    'name' => $project->getName(),
                    'description' => $project->getDescription(),
                    'subdivision' => $project->getSubdivision() && $project->getSubdivision()->isArchived() != true ? [
                        'id' => $project->getSubdivision()->getId(),
                        'name' => $project->getSubdivision()->getName(),
                        'code' => $project->getSubdivision()->getSubdivisionCode(),
                    ] : null,
                    'archived' => $project->isArchived(),
                    'employee_assigned' => $assigned, // Indicates if the employee is assigned to the project
                ];
            }, array_filter($projectItems, function (Project $project) {
                return !$project->getSubdivision()->isArchived();
            }));

            $this->auditlog->addAuditLog($request, json_encode($projectArray), 'api/project/', 'View project');
            
            return $this->json([
                'message' => 'Project retrieved successfully.',
                'project' => $projectArray
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to retrieve project.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    #[Route('api/project/create', name: 'create_project', methods: ['POST'])]
    public function createProject(Request $request): JsonResponse
    {
        //validate user
        $data                   = json_decode($request->getContent(), true);
        $email                  = $data['email'] ?? null;
        $password               = $data['password'] ?? null;
        $new_proj_code          = $data['code'] ?? null;
        $new_proj_name          = $data['name'] ?? null;
        $new_proj_desc          = $data['desc'] ?? null;
        $new_subdivision_id     = $data['subdivision_id'] ?? null;

        // if(!$this->validateUser($email, $password)){
        //     return $this->json(['message' => 'Authorization failed', 'authorized' => false, JsonResponse::HTTP_UNAUTHORIZED]); 
        // }

        //validate duplicate
        //check for duplicate
        $projectRepo = $this->entityManager->getRepository(Project::class);
        $projectItem = $projectRepo->findOneByCodeOrName($new_proj_code);
        $subdivisionRepo = $this->entityManager->getRepository(Subdivision::class);
        $subdivisionItem = $subdivisionRepo->findOneBy(['id'=>$new_subdivision_id]);
        if(!$projectItem){
            //add project
            $new_project = new Project();
            $new_project->setCode($new_proj_code);
            $new_project->setName($new_proj_name);
            $new_project->setDescription($new_proj_desc);
            $new_project->setSubdivision($subdivisionItem);
            $this->entityManager->persist($new_project);
            $this->entityManager->flush();

            $this->auditlog->addAuditLog($request, json_encode($new_project), 'api/project/create', 'Create project');

            return $this->json(['message' => 'Project creation successful.']);
        }
        else{
            return $this->json(['message' => 'Project code or name is existing.', 'existing' => true]);
        }
    }

    #[Route('api/project/update', name: 'update_project', methods: ['POST'])]
    public function updateProject(Request $request): JsonResponse
    {
        //validate user
        $data                   = json_decode($request->getContent(), true);
        $new_proj_id            = $data['id'] ?? null;
        $new_proj_code          = $data['code'] ?? null;
        $new_proj_name          = $data['name'] ?? null;
        $new_proj_desc          = $data['desc'] ?? null;
        $new_subdivision_id     = $data['subdivision_id'] ?? null;

        // if(!$this->validateUser($email, $password)){
        //     return $this->json(['message' => 'Authorization failed', 'authorized' => false, JsonResponse::HTTP_UNAUTHORIZED]); 
        // }

        //validate duplicate
        //check for duplicate
        $projectRepo = $this->entityManager->getRepository(Project::class);
        $projectItem = $projectRepo->findOneBy(['id' => $new_proj_id]);
        //check for duplicate
        $subdivisionRepo = $this->entityManager->getRepository(Subdivision::class);
        $subdivisionItem = $subdivisionRepo->findOneBy(['id'=>$new_subdivision_id]);
        $projectItem->setCode($new_proj_code);
        $projectItem->setName($new_proj_name);
        $projectItem->setDescription($new_proj_desc);
        $projectItem->setSubdivision($subdivisionItem);
        $this->entityManager->persist($projectItem);
        $this->entityManager->flush();
        
        $this->auditlog->addAuditLog($request, json_encode($projectItem), 'api/project/update', 'Update project');
        return $this->json(['message' => 'Project update successful.']);
    }

    #[Route('api/project/delete', name: 'delete_project', methods: ['POST'])]
    public function deleteProject(Request $request): JsonResponse
    {
        //validate user
        $data                   = json_decode($request->getContent(), true);
        $email                  = $data['email'] ?? null;
        $password               = $data['password'] ?? null;
        $new_proj_id            = $data['id'] ?? null;
        $new_proj_code          = $data['code'] ?? null;
        $new_proj_name          = $data['name'] ?? null;
        $new_proj_desc          = $data['desc'] ?? null;

        // if(!$this->validateUser($email, $password)){
        //     return $this->json(['message' => 'Authorization failed', 'authorized' => false, JsonResponse::HTTP_UNAUTHORIZED]); 
        // }

        //validate duplicate
        //check for duplicate
        $projectRepo = $this->entityManager->getRepository(Project::class);
        $projectItem = $projectRepo->findOneBy(['id' => $new_proj_id]);
        $projectItem->setArchived(true);
        $this->auditlog->addAuditLog($request, json_encode($projectItem), 'api/project/delete', 'Delete project');
        //$this->entityManager->remove($projectItem);
        $this->entityManager->persist($projectItem);
        $this->entityManager->flush();
        return $this->json(['message' => 'Subdivision deletion successful.']);
    }

    #[Route('/api/category', name: 'view_category', methods: ['GET'])]
    public function viewCategory(Request $request): JsonResponse
    {
        try {
            $categoryRepo = $this->entityManager->getRepository(Category::class);
            //$paginator = $categoryRepo->findAllPaginated(1,300);
            // Get the items from the Paginator
            //$categoryItem = $paginator->getIterator()->getArrayCopy();
            $categoryItem = $categoryRepo->findByNotArchived();
            $categoryArray = array_map(function(Category $category) {
                return [
                    'id'            => $category->getId(),
                    'code'          => $category->getCode(),
                    'location'      => $category->getLocation(),
                    'block'         => $category->getBlock(),
                    'lot'           => $category->getLot(),
                    'description'   => $category->getDescription(),
                    'owner'         => $category->getOwner() ? [
                        'id' => $category->getOwner()->getId(),
                        'fname' => $category->getOwner()->getFirstname(), // Assuming getName() method exists
                        'lname' => $category->getOwner()->getLastname(), // Assuming getName() method exists
                    ] : null,
                    'phase' => $category->getPhase() && $category->getPhase()->isArchived() != true  ? [
                        'id' => $category->getPhase()->getId(),
                        'code' => $category->getPhase()->getCode(),
                        'name' => $category->getPhase()->getName(),
                    ] : null,
                    'project' => $category->getProject() && $category->getProject()->isArchived() != true ? [
                        'id' => $category->getProject()->getId(),
                        'code' => $category->getProject()->getCode(),
                        'name' => $category->getProject()->getName(),
                    ] : null,
                    'blocks' => $category->getBlocks() ? [
                        'id' => $category->getBlocks()->getId(),
                        'block_name' => $category->getBlocks()->getBlockName(),
                        'total_lots' => $category->getBlocks()->getTotalLots(),
                    ] : null,
                    'archived'      => $category->isArchived(),
                ];
            }, $categoryItem);

            $this->auditlog->addAuditLog($request, json_encode($categoryArray), 'api/category', 'View Category');

            return $this->json([
                'message' => 'Category retrieved successfully.',
                'category' => $categoryArray
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to retrieve category.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/category/subdivision/{subdivision_id}', name: 'filter_view_category', methods: ['GET'])]
    public function filterViewCategory(Request $request): JsonResponse
    {
        try {
            $categoryRepo = $this->entityManager->getRepository(Category::class);
            //$paginator = $categoryRepo->findAllPaginated(1,300);
            // Get the items from the Paginator
            //$categoryItem = $paginator->getIterator()->getArrayCopy();findByNotArchived
            $categoryItem = $categoryRepo->findByNotArchived();
            $categoryArray = array_map(function(Category $category) {
                return [
                    'id'            => $category->getId(),
                    'code'          => $category->getCode(),
                    'location'      => $category->getLocation(),
                    'block'         => $category->getBlock(),
                    'lot'           => $category->getLot(),
                    'description'   => $category->getDescription(),
                    'owner'         => $category->getOwner(),
                    'project' => $category->getProject() ? [
                        'id' => $category->getProject()->getId(),
                        'code' => $category->getProject()->getCode(),
                        'name' => $category->getProject()->getName(),
                    ] : null,
                    'blocks' => $category->getBlocks() ? [
                        'id' => $category->getBlocks()->getId(),
                        'block_name' => $category->getBlocks()->getBlockName(),
                        'total_lots' => $category->getBlocks()->getTotalLots(),
                    ] : null,
                    'archived'      => $category->isArchived(),
                ];
            }, $categoryItem);

            $this->auditlog->addAuditLog($request, json_encode($categoryArray), 'api/category', 'View Category');

            return $this->json([
                'message' => 'Category retrieved successfully.',
                'category' => $categoryArray
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to retrieve category.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('api/category/create', name: 'create_category', methods: ['POST'])]
    public function createCategory(Request $request): JsonResponse
    {
        //validate user
        $data                       = json_decode($request->getContent(), true);
        $email                      = $data['email'] ?? null;
        $password                   = $data['password'] ?? null;
        $new_category_code          = $data['code'] ?? null;
        $new_category_desc          = $data['desc'] ?? null;
        $new_category_block         = $data['block'] ?? null;
        $new_category_lot           = $data['lot'] ?? null;
        $model                      = $data['model_id'] ?? null;
        $project_id                 = $data['proj_id'] ?? null;
        $blocks_id                  = $data['blocks_id'] ?? null;
        $owner_id                   = $data['owner_id'] ?? null;

        // if(!$this->validateUser($email, $password)){
        //     return $this->json(['message' => 'Authorization failed', 'authorized' => false, JsonResponse::HTTP_UNAUTHORIZED]); 
        // }

        //validate duplicate
        $categoryRepo = $this->entityManager->getRepository(Category::class);
        $categoryItem = $categoryRepo->findOneByCodeOrName($new_category_code);
        $modelRepo = $this->entityManager->getRepository(Model::class);
        $modelItem = $modelRepo->findOneBy(['id'=>$model]);
        $projectRepo = $this->entityManager->getRepository(Project::class);
        $projectItem = $projectRepo->findOneBy(['id' => $project_id]);

        $blocksRepo = $this->entityManager->getRepository(Blocks::class);
        $blocksItem = $blocksRepo->findOneBy(['id' => $blocks_id]);

        $ownerRepo = $this->entityManager->getRepository(Owner::class);
        $ownerItem = $ownerRepo->findOneBy(['id' => $owner_id]);

        if(!$categoryItem){
            //add category
            $new_category = new Category();
            $new_category->setCode($new_category_code);
            $new_category->setBlock($new_category_block);
            $new_category->setLot($new_category_lot);
            $new_category->setLocation("Block ".$new_category_block." Lot ".$new_category_lot);
            $new_category->setDescription($new_category_desc);
            $new_category->setModel($modelItem);
            $new_category->setProject($projectItem);
            $new_category->setBlocks($blocksItem);
            $new_category->setOwner($ownerItem);
            $this->entityManager->persist($new_category);
            $this->entityManager->flush();
            $this->auditlog->addAuditLog($request, json_encode($new_category), 'api/category/create', 'Create Category');
            return $this->json(['message' => 'Category creation successful.']);
        }
        else{
            return $this->json(['message' => 'Category code or name is existing.', 'existing' => true]);
        }
    }

    #[Route('api/category/update', name: 'update_category', methods: ['POST'])]
    public function updateCategory(Request $request): JsonResponse
    {
        //validate user
        $data                       = json_decode($request->getContent(), true);
        $email                      = $data['email'] ?? null;
        $password                   = $data['password'] ?? null;
        $category_id                = $data['id'] ?? null;
        $new_category_code          = $data['code'] ?? null;
        $new_category_desc          = $data['desc'] ?? null;
        $new_category_block         = $data['block'] ?? null;
        $new_category_lot           = $data['lot'] ?? null;
        $model                      = $data['model_id'] ?? null;
        $project_id                 = $data['proj_id'] ?? null;
        $blocks_id                  = $data['blocks_id'] ?? null;
        $owner_id                   = $data['owner_id'] ?? null;

        //validate duplicate
        $categoryRepo = $this->entityManager->getRepository(Category::class);
        $categoryItem = $categoryRepo->findOneBy(['id' => $category_id]);

        $modelRepo = $this->entityManager->getRepository(Model::class);
        $modelItem = $modelRepo->findOneBy(['id'=>$model]);

        $projectRepo = $this->entityManager->getRepository(Project::class);
        $projectItem = $projectRepo->findOneBy(['id' => $project_id]);

        $blocksRepo = $this->entityManager->getRepository(Blocks::class);
        $blocksItem = $blocksRepo->findOneBy(['id' => $blocks_id]);

        $ownerRepo = $this->entityManager->getRepository(Owner::class);
        $ownerItem = $ownerRepo->findOneBy(['id' => $owner_id]);

        //check for duplicate
        $categoryItem->setCode($new_category_code);
        $categoryItem->setBlock($new_category_block);
        $categoryItem->setLot($new_category_lot);
        $categoryItem->setLocation($new_category_block." ".$new_category_lot);
        $categoryItem->setDescription($new_category_desc);
        $categoryItem->setmodel($modelItem);
        $categoryItem->setProject($projectItem);
        $categoryItem->setBlocks($blocksItem);
        $categoryItem->setOwner($ownerItem);
        $this->entityManager->persist($categoryItem);
        $this->entityManager->flush();
        $this->auditlog->addAuditLog($request, json_encode($categoryItem), 'api/category/update', 'Update Category');
        return $this->json(['message' => 'Category update successful.']);
    }

    #[Route('api/category/delete', name: 'delete_category', methods: ['POST'])]
    public function deleteCategory(Request $request): JsonResponse
    {
        //validate user
        $data                   = json_decode($request->getContent(), true);
        $category_id            = $data['id'] ?? null;
        //validate duplicate
        $categoryRepo = $this->entityManager->getRepository(Category::class);
        $categoryItem = $categoryRepo->findOneBy(['id' => $category_id]);
        $categoryItem->setArchived(true);
        //archive item
        $this->entityManager->persist($categoryItem);
        $this->entityManager->flush();
        $this->auditlog->addAuditLog($request, json_encode($categoryItem), 'api/category/delete', 'Delete Category');
        return $this->json(['message' => 'Category deletion successful.']);
    }

    #[Route('/api/owner', name: 'view_owner', methods: ['GET'])]
    public function viewOwner(Request $request): JsonResponse
    {
        $validationResult = $this->validateAccess->validateUserAccess($request, 'owner', 'view');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }
        try {
            $ownerRepo = $this->entityManager->getRepository(Owner::class);
            // Get the items from the Paginator
            $ownerItem = $ownerRepo->findByNotArchived();
            $ownerArray = array_map(function(Owner $owner) {
                return [
                    'id'            => $owner->getId(),
                    'firstname'      => $owner->getFirstname(),
                    'lastname'      => $owner->getLastname(),
                    'lot_no'      => $owner->getLotNo(),
                    'block'      => $owner->getBlock(),
                    'email'      => $owner->getEmail(),
                    'contact_no'      => $owner->getContactNo(),
                ];
            }, $ownerItem);

            $this->auditlog->addAuditLog($request, json_encode($ownerArray), 'api/owner', 'View Owner');

            return $this->json([
                'message' => 'Owner retrieved successfully.',
                'owner' => $ownerArray
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to retrieve category.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('api/owner/create', name: 'create_owner', methods: ['POST'])]
    public function createOwner(Request $request): JsonResponse
    {
        // Decode the JSON request data
        $data = json_decode($request->getContent(), true);

        $validationResult = $this->validateAccess->validateUserAccess($request, 'owner', 'add');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }
    
        // Extract the fields from the request data
        $new_owner_fname   = $data['firstname'] ?? null;
        $new_owner_lname   = $data['lastname'] ?? null;
        $new_owner_lot     = $data['lot'] ?? null;
        $new_owner_block   = $data['block'] ?? null;
        $new_owner_email   = $data['email'] ?? null;
        $new_owner_contact = $data['contact'] ?? null;
    
        // Validate required fields (adjust as necessary)
        if (is_null($new_owner_fname) || is_null($new_owner_lname)) {
            return $this->json(['message' => 'Firstname and lastname are required.'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Create a new Owner entity
        $new_owner = new Owner();
        $new_owner->setFirstname($new_owner_fname);
        $new_owner->setLastname($new_owner_lname);
        $new_owner->setLotNo($new_owner_lot);
        $new_owner->setBlock($new_owner_block);
        $new_owner->setEmail($new_owner_email);
        $new_owner->setContactNo($new_owner_contact);
    
        // Persist the new owner to the database
        $this->entityManager->persist($new_owner);
        $this->entityManager->flush();
    
        // Log the creation
        $this->auditlog->addAuditLog($request, json_encode($new_owner), 'api/owner/', 'Create Owner');
    
        // Return a success response
        return $this->json(['message' => 'Owner creation successful.']);
    }
    

    #[Route('/api/owner/update/{id}', name: 'update_owner', methods: ['PUT'])]
    public function updateOwner(Request $request, int $id): JsonResponse
    {
        // Fetch existing owner by ID
        $owner = $this->entityManager->getRepository(Owner::class)->find($id);

        // If owner not found, return error
        if (!$owner) {
            return $this->json(['message' => 'Owner not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        $validationResult = $this->validateAccess->validateUserAccess($request, 'owner', 'edit');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        // Parse request data
        $data = json_decode($request->getContent(), true);

        // Update owner details if provided in the request
        if (isset($data['firstname'])) {
            $owner->setFirstname($data['firstname']);
        }
        if (isset($data['lastname'])) {
            $owner->setLastname($data['lastname']);
        }
        if (isset($data['lot'])) {
            $owner->setLotNo($data['lot']);
        }
        if (isset($data['block'])) {
            $owner->setBlock($data['block']);
        }
        if (isset($data['email'])) {
            $owner->setEmail($data['email']);
        }
        if (isset($data['contact'])) {
            $owner->setContactNo($data['contact']);
        }

        // Persist changes to the database
        $this->entityManager->persist($owner);
        $this->entityManager->flush();

        // Log the update action (if you have an audit log service)
        $this->auditlog->addAuditLog($request, json_encode($owner), 'api/owner/update/'.$id, 'Update Owner');

        // Respond with success message
        return $this->json(['message' => 'Owner updated successfully.']);
    }

    #[Route('/api/owner/archive/{id}', name: 'archive_owner', methods: ['DELETE'])]
    public function archiveOwner(Request $request, int $id): JsonResponse
    {
        // Fetch existing owner by ID
        $owner = $this->entityManager->getRepository(Owner::class)->find($id);

        // If owner not found, return error
        if (!$owner) {
            return $this->json(['message' => 'Owner not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        $validationResult = $this->validateAccess->validateUserAccess($request, 'owner', 'delete');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        // Parse request data
        $data = json_decode($request->getContent(), true);
        // Persist changes to the database
        $owner->setArchived(true);
        $this->entityManager->persist($owner);
        $this->entityManager->flush();

        // Log the update action (if you have an audit log service)
        $this->auditlog->addAuditLog($request, json_encode($owner), 'api/owner/update/'.$id, 'Update Owner');

        // Respond with success message
        return $this->json(['message' => 'Owner updated successfully.']);
    }

    #[Route('/api/model', name: 'view_model', methods: ['GET'])]
    public function viewModel(Request $request): JsonResponse
    {
        $validationResult = $this->validateAccess->validateUserAccess($request, 'models', 'view');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        try {
            $modelRepo = $this->entityManager->getRepository(Model::class);
            $modelItem = $modelRepo->findAll();
            $modelArray = array_map(function(Model $model) {
                return [
                    'id'            => $model->getId(),
                    'name'          => $model->getName(),
                    'model_type' => $model->getType() ? [
                        'id' => $model->getType()->getId(),
                        'name' => $model->getType()->getName(),
                        'code' => $model->getType()->getcode(),
                        'add_option' => $model->getType()->isAdditionalOptions(),
                    ] : null,
                ];
            }, $modelItem);
            $this->auditlog->addAuditLog($request, json_encode($modelArray), 'api/model/', 'View Model');
            return $this->json([
                'message' => 'Model retrieved successfully.',
                'models' => $modelArray
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to retrieve Model.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('api/model/create', name: 'create_model', methods: ['POST'])]
    public function createModel(Request $request): JsonResponse
    {
        //validate user
        $data                       = json_decode($request->getContent(), true);
        $new_model_name             = $data['name'] ?? null;
        $model_type                 = $data['model_type'] ?? null;
        // if(!$this->validateUser($email, $password)){
        //     return $this->json(['message' => 'Authorization failed', 'authorized' => false, JsonResponse::HTTP_UNAUTHORIZED]); 
        // }

        $validationResult = $this->validateAccess->validateUserAccess($request, 'models', 'add');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        $modelRepo = $this->entityManager->getRepository(Model::class);
        $modelItem = $modelRepo->findOneByCodeOrName($new_model_name);

        $modelTypeRepo = $this->entityManager->getRepository(ModelTypes::class);
        $modelTypeItem = $modelTypeRepo->findOneBy(['id' => $model_type]);

        if (!$modelTypeItem) {
            return $this->json(['message' => 'Model Type not found.'], JsonResponse::HTTP_NOT_FOUND);
        }

        if (!$modelItem) {
            //add subdivision
            $new_model = new Model();
            $new_model->setName($new_model_name);
            $new_model->setType($modelTypeItem);
            $this->entityManager->persist($new_model);
            $this->entityManager->flush();
            $this->auditlog->addAuditLog($request, json_encode($new_model), 'api/model/create', 'Create Model');
            return $this->json(['message' => 'Model creation successful.'], JsonResponse::HTTP_CREATED);
        } else {
            return $this->json(['message' => 'Model code or name is existing.', 'existing' => true],JsonResponse::HTTP_CONFLICT);
        }
    }

    #[Route('api/model/update/{model_id}', name: 'update_model', methods: ['POST'])]
    public function updateModel(Request $request, int $model_id): JsonResponse
    {
        //validate user
        $data                   = json_decode($request->getContent(), true);
        $new_model_name         = $data['name'] ?? null;
        $model_type             = $data['model_type'] ?? null;

        $validationResult = $this->validateAccess->validateUserAccess($request, 'models', 'edit');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        $modelRepo = $this->entityManager->getRepository(Model::class);
        $modelItem = $modelRepo->find($model_id);

        $modelTypeRepo = $this->entityManager->getRepository(ModelTypes::class);
        $modelTypeItem = $modelTypeRepo->find($model_type);

        //validate ModelType if exist
        if ($modelTypeItem) {
            $modelItem->setType($modelTypeItem);
        }

        //check for duplicate
        $modelItem->setName($new_model_name);
        
        $this->entityManager->persist($modelItem);
        $this->entityManager->flush();
        $this->auditlog->addAuditLog($request, json_encode($modelItem), 'api/model/update', 'Update Model');
        return $this->json(['message' => 'Model update successful.']);
    }

    #[Route('api/model/delete/{model_id}', name: 'delete_model', methods: ['POST'])]
    public function deleteModel(Request $request, int $model_id): JsonResponse
    {
        //validate user
        $data                   = json_decode($request->getContent(), true);

        $validationResult = $this->validateAccess->validateUserAccess($request, 'models', 'delete');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        $modelRepo = $this->entityManager->getRepository(Model::class);
        $modelItem = $modelRepo->find($model_id);

        //delete item
        $this->entityManager->remove($modelItem);
        $this->entityManager->flush();
        $this->auditlog->addAuditLog($request, json_encode($modelItem), 'api/model/delete', 'Delete Model');
        return $this->json(['message' => 'Model deletion successful.']);
    }

    #[Route('/api/phase', name: 'view_phase', methods: ['GET'])]
    public function viewPhase(Request $request): JsonResponse
    {
        $validationResult = $this->validateAccess->validateUserAccess($request, 'phase', 'view');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        try {
            $phaseRepo = $this->entityManager->getRepository(Phase::class);
            //$paginator = $phaseRepo->findAllPaginated(1,300);
            // Get the items from the Paginator
            $phaseItem = $phaseRepo->findByNotArchived();
            $phaseArray = array_map(function(Phase $phase) {
                $blocks = array_map(function (Blocks $blocks) {
                    return [
                        'id' => $blocks->getId(),
                        'block_name' => $blocks->getBlockName(),
                        'total_lots' => $blocks->getTotalLots(),
                    ];
                }, $phase->getBlocks()->toArray());
                return [
                    'id'                => $phase->getId(),
                    'name'              => $phase->getName(),
                    'code'              => $phase->getCode(),
                    'total_blocks'      => $phase->getTotalBlocks(),
                    'total_lots'        => $phase->getTotalLots(),
                    'remaining_lots'    => $phase->getRemainingLots(),
                    'subdivision_name'  => $phase->getSubdivision()->getName(),
                    'subdivision_id'    => $phase->getSubdivision()->getId(),
                    'blocks'            => $blocks,
                ];
            }, $phaseItem);
            $this->auditlog->addAuditLog($request, json_encode($phaseArray), 'api/phase', 'View Phase');
            return $this->json([
                'message' => 'Phase retrieved successfully.',
                'phase' => $phaseArray
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to retrieve Model.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/phase/subdivision/{subdivision_id}', name: 'filtered_view_phase', methods: ['GET'])]
    public function filterViewPhase(Request $request, int $subdivision_id): JsonResponse
    {

        $validationResult = $this->validateAccess->validateUserAccess($request, 'phase', 'view');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        try {
            $phaseRepo = $this->entityManager->getRepository(Phase::class);
            $phaseItems = $phaseRepo->findBy(['subdivision' => $subdivision_id]);
            $phaseArray = array_map(function(Phase $phase) {
                return [
                    'id' => $phase->getId(),
                    'name' => $phase->getName(),
                    'code' => $phase->getCode(),
                    'total_blocks' => $phase->getTotalBlocks(),
                    'total_lots' => $phase->getTotalLots(),
                    'subdivision_name' => $phase->getSubdivision()->getName(),
                ];
            }, $phaseItems);
    
            $this->auditlog->addAuditLog($request, json_encode($phaseArray), 'api/phase', 'View Phase');
    
            return $this->json([
                'message' => 'Phase retrieved successfully.',
                'phase' => $phaseArray
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to retrieve phases.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    


    #[Route('api/phase/create', name: 'create_phase', methods: ['POST'])]
    public function createPhase(Request $request): JsonResponse
    {
        //validate user
        $data                       = json_decode($request->getContent(), true);
        $new_phase_name             = $data['name'] ?? null;
        $new_phase_code             = $data['code'] ?? null;
        $new_phase_block            = $data['block'] ?? null;
        $new_phase_lot              = $data['lot'] ?? null;
        $subdivision_id             = $data['subdivision_id'] ?? null;

        $validationResult = $this->validateAccess->validateUserAccess($request, 'phase', 'add');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        // if(!$this->validateUser($email, $password)){
        //     return $this->json(['message' => 'Authorization failed', 'authorized' => false, JsonResponse::HTTP_UNAUTHORIZED]); 
        // }

        //validate duplicates
        $subRepo = $this->entityManager->getRepository(Subdivision::class);
        $subdivisionItem = $subRepo->findOneBy(['id'=>$subdivision_id]);
        if (!$subdivisionItem) {
            return $this->json(['message' => 'Subdivision not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $phases = $subdivisionItem->getPhases();
        $blockLotsSum = array_reduce($phases->toArray(), function($carry, $phase) {
            return $carry + $phase->getTotalLots();
        }, 0);
        $totalLots = $subdivisionItem->getTotalLots() - $blockLotsSum;
        $phaseRepo = $this->entityManager->getRepository(Phase::class);
        $phaseItem = $phaseRepo->findOneByCodeOrName($new_phase_code, $new_phase_name, $subdivisionItem->getId());
        // /var_dump($totalLots,$new_phase_lot);
        if(intval($totalLots) < intval($new_phase_lot)){
            return $this->json(['message' => 'New total lots is greater than the remaining lots in subdivision', JsonResponse::HTTP_BAD_REQUEST]);
        }

        //validate phase code if exist in all records
        $existingPhase = $phaseRepo->findOneBy(['code' => $new_phase_code]);
        if ($existingPhase) {
            return $this->json(['message' => 'Phase code is already in use.', 'existing' => true], JsonResponse::HTTP_CONFLICT);
        }

        try{
            //add subdivision
            $new_phase = new Phase();
            $new_phase->setName($new_phase_name);
            $new_phase->setCode($new_phase_code);
            $new_phase->setTotalBlocks($new_phase_block);
            $new_phase->setTotalLots($new_phase_lot);
            $new_phase->setSubdivision($subdivisionItem);
            $new_phase->setArchived(false);
            $this->entityManager->persist($new_phase);

            // Calculate lots per block and remainder
            $lots_per_block = intdiv($new_phase_lot, $new_phase_block);
            $remainder_lots = $new_phase_lot % $new_phase_block;

            for ($i = 1; $i <= $new_phase_block; $i++) {
                $new_block = new Blocks();
                $new_block->setPhase($new_phase);
                $new_block->setBlockName("Block " . $i);

                // Set total lots for each block
                $lots_for_this_block = $lots_per_block;
                if ($remainder_lots > 0) {
                    $lots_for_this_block += 1;
                    $remainder_lots -= 1;
                }
                $new_block->setTotalLots($lots_for_this_block);
                //create lots
                for ($x = 1; $x <= $lots_for_this_block; $x++){
                    $new_lots = new Lots();
                    $new_lots->setBlocks($new_block);
                    $new_lots->setLotNum($x);
                    $new_lots->setLotName("Lot ".$x);
                    $this->entityManager->persist($new_lots);
                }
                
                $this->entityManager->persist($new_block);
            }

            $this->entityManager->flush();
            $this->auditlog->addAuditLog($request, json_encode($new_phase), 'api/phase/create', 'Create Phase');
            return $this->json(['message' => 'Phase item creation successful.', JsonResponse::HTTP_CREATED]);
        }
        catch(\Exception $e){
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to create phase.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    // #[Route('api/phase/update', name: 'update_phase', methods: ['POST'])]
    // public function updatePhase(Request $request): JsonResponse
    // {
    //     $data = json_decode($request->getContent(), true);
    //     if (json_last_error() !== JSON_ERROR_NONE) {
    //         return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
    //     }
    
    //     $phaseId = $data['id'] ?? null;
    //     if ($phaseId === null) {
    //         return $this->json(['message' => 'Phase ID is required'], JsonResponse::HTTP_BAD_REQUEST);
    //     }
    
    //     $phaseRepo = $this->entityManager->getRepository(Phase::class);
    //     $phase = $phaseRepo->find($phaseId);
    
    //     if (!$phase) {
    //         return $this->json(['message' => 'Phase not found'], JsonResponse::HTTP_NOT_FOUND);
    //     }
    
    //     // Validate user (move this to a separate service or method)
    //     // if (!$this->validateUser($data['email'], $data['password'])) {
    //     //     return $this->json(['message' => 'Authorization failed', 'authorized' => false], JsonResponse::HTTP_UNAUTHORIZED);
    //     // }
    
    //     $phase->setName($data['name'] ?? $phase->getName());
    //     $phase->setCode($data['code'] ?? $phase->getCode());
    //     $phase->setTotalBlocks($data['block'] ?? $phase->getTotalBlocks());
    //     $phase->setTotalLots($data['lot'] ?? $phase->getTotalLots());
    
    //     try {
    //         $this->entityManager->persist($phase);
    //         $this->entityManager->flush();
    
    //         $this->auditlog->addAuditLog($request, json_encode($phase, JSON_UNESCAPED_SLASHES), 'api/phase/update', 'Update Phase');
    
    //         return $this->json(['message' => 'Phase update successful.'], JsonResponse::HTTP_OK);
    //     } catch (\Throwable $e) {
    //         $this->auditlog->addAuditLog($request, json_encode($e, JSON_UNESCAPED_SLASHES), 'api/phase/update', 'Update error Phase');
    //         return $this->json(['message' => "There's an error in code: " . $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    //     }
    // }

    #[Route('api/phase/update', name: 'update_phase', methods: ['POST'])]
    public function updatePhase(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $phaseId = $data['id'] ?? null;
        $new_phase_name = $data['name'] ?? null;
        $new_phase_code = $data['code'] ?? null;
        $new_phase_block = $data['block'] ?? null;
        $new_phase_lot = $data['lot'] ?? null;
        $subdivision_id = $data['subdivision_id'] ?? null;

        $validationResult = $this->validateAccess->validateUserAccess($request, 'phase', 'edit');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        $phaseRepo = $this->entityManager->getRepository(Phase::class);
        $subRepo = $this->entityManager->getRepository(Subdivision::class);

        $phaseItem = $phaseRepo->find($phaseId);
        if (!$phaseItem) {
            return $this->json(['message' => 'Phase not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $subdivisionItem = $subRepo->find($subdivision_id);
        if (!$subdivisionItem) {
            return $this->json(['message' => 'Subdivision not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $phases = $subdivisionItem->getPhases();
        $blockLotsSum = array_reduce($phases->toArray(), function($carry, $phase) use ($phaseItem) {
            return $carry + ($phase->getId() !== $phaseItem->getId() ? $phase->getTotalLots() : 0);
        }, 0);
        $totalLots = $subdivisionItem->getTotalLots() - $blockLotsSum;

        if (intval($totalLots) < intval($new_phase_lot)) {
            return $this->json(['message' => 'New total lots is greater than the remaining lots in subdivision', JsonResponse::HTTP_BAD_REQUEST]);
        }

        //validate phase code if exist in all records
        $existingPhase = $phaseRepo->findOneBy(['code' => $new_phase_code]);
        if ($existingPhase && $existingPhase->getId() !== $phaseItem->getId()) {
            return $this->json(['message' => 'Phase code is already in use.', 'existing' => true], JsonResponse::HTTP_CONFLICT);
        }

        try {
            // Update phase details
            $phaseItem->setName($new_phase_name);
            $phaseItem->setCode($new_phase_code);
            $phaseItem->setTotalBlocks($new_phase_block);
            $phaseItem->setTotalLots($new_phase_lot);

            // Calculate lots per block and remainder
            $lots_per_block = intdiv($new_phase_lot, $new_phase_block);
            $remainder_lots = $new_phase_lot % $new_phase_block;

            $currentBlocks = $phaseItem->getBlocks();

            // Add or remove blocks as needed
            if ($currentBlocks->count() < $new_phase_block) {
                // Add new blocks
                for ($i = $currentBlocks->count() + 1; $i <= $new_phase_block; $i++) {
                    $new_block = new Blocks();
                    $new_block->setPhase($phaseItem);
                    $new_block->setBlockName("Block " . $i);
                    $new_block->setTotalLots(0);
                    $this->entityManager->persist($new_block);
                    $phaseItem->addBlock($new_block);
                }
            } elseif ($currentBlocks->count() > $new_phase_block) {
                // Remove blocks
                for ($i = $currentBlocks->count(); $i > $new_phase_block; $i--) {
                    $blockToRemove = $phaseItem->getBlocks()->last();

                    // Remove associated lots
                    foreach ($blockToRemove->getLots() as $lotToRemove) {
                        $blockToRemove->removeLot($lotToRemove);
                        $this->entityManager->remove($lotToRemove);
                    }

                    $phaseItem->removeBlock($blockToRemove);
                    $this->entityManager->remove($blockToRemove);
                }
            }

            // Adjust lots in each block
            $blockIndex = 1;
            $remainder_lots = $new_phase_lot % $new_phase_block;
            foreach ($phaseItem->getBlocks() as $block) {
                $lots_for_this_block = $lots_per_block;
                if ($remainder_lots > 0) {
                    $lots_for_this_block += 1;
                    $remainder_lots -= 1;
                }

                $currentLots = $block->getLots();

                // Add or remove lots as needed
                if ($currentLots->count() < $lots_for_this_block) {
                    // Add new lots
                    // for ($j = $currentLots->count() + 1; $j <= $lots_for_this_block; $j++) {
                    //     $new_lot = new Lots();
                    //     $new_lot->setBlocks($block);
                    //     $new_lot->setLotNum($j);
                    //     $new_lot->setLotName("Lot " . $j);
                    //     $this->entityManager->persist($new_lot);
                    // }
                } elseif ($currentLots->count() > $lots_for_this_block) {
                    // Remove lots
                    // for ($j = $currentLots->count(); $j > $lots_for_this_block; $j--) {
                    //     $lotToRemove = $block->getLots()->last();
                    //     $block->removeLot($lotToRemove);
                    //     $this->entityManager->remove($lotToRemove);
                    // }
                }

                //$block->setTotalLots($lots_for_this_block);
                //$block->setTotalLots();
                $blockIndex++;
            }

            $this->entityManager->flush();
            return $this->json(['message' => 'Phase item updated successfully.', JsonResponse::HTTP_OK]);

        } catch (\Exception $e) {
            return $this->json([
                'error' => 'Failed to update phase.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('api/phase/delete', name: 'delete_phase', methods: ['POST'])]
    public function deletePhase(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $validationResult = $this->validateAccess->validateUserAccess($request, 'phase', 'delete');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }
    
        $phaseId = $data['id'] ?? null;
        if ($phaseId === null) {
            return $this->json(['message' => 'Phase ID is required'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        $phaseRepo = $this->entityManager->getRepository(Phase::class);
        $phase = $phaseRepo->find($phaseId);
    
        if (!$phase) {
            return $this->json(['message' => 'Phase not found'], JsonResponse::HTTP_NOT_FOUND);
        }
    
        // Validate user (move this to a separate service or method)
        // if (!$this->validateUser($data['email'], $data['password'])) {
        //     return $this->json(['message' => 'Authorization failed', 'authorized' => false], JsonResponse::HTTP_UNAUTHORIZED);
        // }
    
        try {
            $phase->setArchived(true);
            $this->entityManager->persist($phase);
            $this->entityManager->flush();
    
            $this->auditlog->addAuditLog($request, json_encode($phase, JSON_UNESCAPED_SLASHES), 'api/phase/delete', 'Delete Phase');
    
            return $this->json(['message' => 'Phase deletion successful.'], JsonResponse::HTTP_OK);
        } catch (\Throwable $e) {
            $this->auditlog->addAuditLog($request, json_encode($e, JSON_UNESCAPED_SLASHES), 'api/phase/delete', 'Delete error Phase');
            return $this->json(['message' => "There's an error in code: " . $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('api/blocks/update', name: 'update_blocks', methods: ['POST'])]
    public function updateBlocks(Request $request): JsonResponse
    {

        $validationResult = $this->validateAccess->validateUserAccess($request, 'phase', 'edit');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        $phaseId = $data['phase_id'] ?? null;
        if ($phaseId === null) {
            return $this->json(['message' => 'Phase ID is required'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        $phaseRepo = $this->entityManager->getRepository(Phase::class);
        $phase = $phaseRepo->find($phaseId);
    
        if (!$phase) {
            return $this->json(['message' => 'Phase not found'], JsonResponse::HTTP_NOT_FOUND);
        }
    
        $blockId = $data['block_id'] ?? null;
        $blocksRepo = $this->entityManager->getRepository(Blocks::class);
        $blocks = $blocksRepo->find($blockId);
    
        if (!$blocks) {
            return $this->json(['message' => 'Block not found'], JsonResponse::HTTP_NOT_FOUND);
        }
    
        $newTotalLots = $data['total_lots'] ?? $blocks->getTotalLots();
    
        // Get the total lots of blocks where the category is not empty
        $lotsWithCategory = $blocks->getLots()->filter(function (Lots $lot) {
            return $lot->getCategory() !== null;
        });
    
        $totalLotsWithCategory = count($lotsWithCategory);
    
        if ($newTotalLots >= $totalLotsWithCategory) {
            $lotsWithoutCategory = $blocks->getLots()->filter(function (Lots $lot) {
                return $lot->getCategory() === null;
            });
    
            $lotsToRemoveCount = min(count($lotsWithoutCategory), $newTotalLots - $totalLotsWithCategory);
    
            foreach ($lotsWithoutCategory as $index => $lot) {
                if ($index >= $lotsToRemoveCount) {
                    break;
                }
                $blocks->removeLot($lot);
                $this->entityManager->remove($lot);
            }
    
            // Add new lots if total lots is greater than the sum of lots with categories and lots without categories
            $currentLotsCount = $totalLotsWithCategory + count($lotsWithoutCategory) - $lotsToRemoveCount;
            $lotsToAddCount = $newTotalLots - $currentLotsCount;
    
            for ($i = 0; $i < $lotsToAddCount; $i++) {
                $newLot = new Lots();
                $newLot->setBlocks($blocks);
                $newLot->setLotName('Lot '.$i+1 );
                $newLot->setLotNum($i+1);
                // Set other properties of the new lot as needed
                $blocks->addLot($newLot);
                $this->entityManager->persist($newLot);
            }
        }
    
        $blocks->setTotalLots($newTotalLots);
    
        try {
            $this->entityManager->persist($blocks);
            $this->entityManager->flush();
    
            $this->auditlog->addAuditLog($request, json_encode($blocks, JSON_UNESCAPED_SLASHES), 'api/blocks/update', 'Update Blocks');
            return $this->json(['message' => 'Block update successful.'], JsonResponse::HTTP_OK);
        } catch (\Throwable $e) {
            $this->auditlog->addAuditLog($request, json_encode($e, JSON_UNESCAPED_SLASHES), 'api/phase/update', 'Update error Phase');
            return $this->json(['message' => "There's an error in code: " . $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    
    

    #[Route('/api/subdivision_profile/select', name: 'select_subdivision_profile', methods: ['POST'])]
    public function getSubdivisionProfile(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        /* if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        } */

        $subCode = $data['subdivisionCode'] ?? null;
        if ($subCode === null) {
            return $this->json(['message' => 'Subdivision Code is required'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // $validationResult = $this->validateAccess->validateUserAccess($request, 'phase', 'edit');
        // if ($validationResult['status'] === 'error') {
        //     return new JsonResponse([
        //         'error' => $validationResult['error'],
        //         'message' => $validationResult['message']
        //     ], $validationResult['code']);
        // }

        try {
            $subdivisionRepo = $this->entityManager->getRepository(Subdivision::class);
            $subdivisions = $subdivisionRepo->findByCode($subCode);
            $subdivisionArray = array_map(function(Subdivision $subdivision) {

                $phases = array_map(function (Phase $phase) {
                    $blocks = array_map(function (Blocks $blocks) {
                        return [
                            'id' => $blocks->getId(),
                            'block_name' => $blocks->getBlockName(),
                            'total_lots' => $blocks->getTotalLots(),
                        ];
                    }, $phase->getBlocks()->toArray());
                    return [
                        'id' => $phase->getId(),
                        'name' => $phase->getName(),
                        'code' => $phase->getCode(),
                        'totalBlocks' => $phase->getTotalBlocks(),
                        'totalLots' => $phase->getTotalLots(),
                        'blocks_list' => $blocks,
                    ];
                }, $subdivision->getPhases()->toArray());

                $total_lots = array_reduce($phases, function ($carry, $phase) {
                    return $carry + $phase['totalLots'];
                }, 0);

                return [
                    'id' => $subdivision->getId(),
                    'subdivisionCode' => $subdivision->getSubdivisionCode(),
                    'description' => $subdivision->getDescription(),
                    'name' => $subdivision->getName(),
                    'location' => $subdivision->getLocation(),
                    'total_phases' => count($phases),
                    'total_lots' => $total_lots,
                    'archived' => $subdivision->isArchived(),
                    'phases' => $phases
                ];
            }, $subdivisions);
            // Get the total number of pages
            $nonArchivedCount = count($subdivisionRepo->findBy(['archived' => false]));
            //audit trail
            $this->auditlog->addAuditLog($request, $subdivisionArray, 'api/subdivision_profile/select', 'Select');
            return $this->json([
                'message' => 'Subdivisions retrieved successfully.',
                'subdivisions' => $subdivisionArray,
                'total_items' => $nonArchivedCount,
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to retrieve subdivisions.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/project/assign-workers', name: 'assign_workers', methods: ['POST'])]
    public function assignWorkersToProjects(Request $request): JsonResponse
    {
        // Validate and decode the request data
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Check if `projects` exists and is an array
        if (!isset($data['projects']) || !is_array($data['projects'])) {
            return $this->json(['message' => 'No projects found in the request'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        try {
            foreach ($data['projects'] as $projectData) {
                $projectId = $projectData['project_id'] ?? null;
                $addedEmployees = $projectData['added_employee'] ?? [];
    
                // Validate project existence
                $projectRepo = $this->entityManager->getRepository(Project::class);
                $projectItem = $projectRepo->findOneBy(['id' => $projectId]);
                if (!$projectItem) {
                    continue; // Skip if project does not exist
                }
    
                // Process each employee for the project
                foreach ($addedEmployees as $worker) {
                    $employeeId = $worker['emp_id'] ?? null;
                    $addedTasks = $worker['added_task'] ?? [];
    
                    // Validate employee existence
                    $employeeRepo = $this->entityManager->getRepository(EmployeeRecords::class);
                    $employeeItem = $employeeRepo->findOneBy(['id' => $employeeId]);
                    if (!$employeeId || !$employeeItem) {
                        continue; // Skip if employee ID is not provided or does not exist
                    }
    
                    // Check if the employee is already assigned to the project
                    $employeeProjectRepo = $this->entityManager->getRepository(EmployeeProjects::class);
                    $employeeProject = $employeeProjectRepo->findOneBy(['employee' => $employeeItem, 'project' => $projectItem]);
    
                    if (!$employeeProject) {
                        // Create a new EmployeeProject if not already assigned
                        $employeeProject = new EmployeeProjects();
                        $employeeProject->setEmployee($employeeItem);
                        $employeeProject->setProject($projectItem);
                        $employeeProject->setAssigned(true);
                        $this->entityManager->persist($employeeProject);
                    }
    
                    // Process tasks for the employee
                    foreach ($addedTasks as $task) {
                        $newTask = new EmpTask();
                        $newTask->setEmpProject($employeeProject);
                        $newTask->setTaskDesc($task['task_name'] ?? 'No description');
                        $newTask->setDate(new DateTime($task['date'] ?? 'now'));
                        $newTask->setAssignedHours($task['assigned_time'] ?? 0); // Default to 0 if not provided
                        $this->entityManager->persist($newTask);
                    }
                }
            }
    
            // Save all changes to the database
            $this->entityManager->flush();
    
            return $this->json(['message' => 'Workers assigned to projects successfully'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Handle exceptions and log errors
            return $this->json([
                'error' => 'Failed to assign workers to projects.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    // #[Route('/api/project/assign-workers-with-status', name: 'assign_workers_with_status', methods: ['POST'])]
    // public function assignWorkersWithTaskStatus(Request $request): JsonResponse
    // {
    //     // Validate and decode the request data
    //     $data = json_decode($request->getContent(), true);
    //     if (json_last_error() !== JSON_ERROR_NONE) {
    //         return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
    //     }

    //     // Check if `projects` exists and is an array
    //     if (!isset($data['projects']) || !is_array($data['projects'])) {
    //         return $this->json(['message' => 'No projects found in the request'], JsonResponse::HTTP_BAD_REQUEST);
    //     }

    //     try {
    //         foreach ($data['projects'] as $projectData) {
    //             $projectId = $projectData['project_id'] ?? null;
    //             $addedEmployees = $projectData['added_employee'] ?? [];

    //             // Validate project existence
    //             $projectRepo = $this->entityManager->getRepository(Project::class);
    //             $projectItem = $projectRepo->findOneBy(['id' => $projectId]);
    //             if (!$projectItem) {
    //                 continue; // Skip if project does not exist
    //             }

    //             // Process each employee for the project
    //             foreach ($addedEmployees as $worker) {
    //                 $employeeId = $worker['emp_id'] ?? null;
    //                 $addedTasks = $worker['added_task'] ?? [];

    //                 // Validate employee existence
    //                 $employeeRepo = $this->entityManager->getRepository(EmployeeRecords::class);
    //                 $employeeItem = $employeeRepo->findOneBy(['id' => $employeeId]);
    //                 if (!$employeeId || !$employeeItem) {
    //                     continue; // Skip if employee ID is not provided or does not exist
    //                 }

    //                 // Check if the employee is already assigned to the project
    //                 $employeeProjectRepo = $this->entityManager->getRepository(EmployeeProjects::class);
    //                 $employeeProject = $employeeProjectRepo->findOneBy(['employee' => $employeeItem, 'project' => $projectItem]);

    //                 if (!$employeeProject) {
    //                     // Create a new EmployeeProject if not already assigned
    //                     $employeeProject = new EmployeeProjects();
    //                     $employeeProject->setEmployee($employeeItem);
    //                     $employeeProject->setProject($projectItem);
    //                     $employeeProject->setAssigned(true);
    //                     $this->entityManager->persist($employeeProject);
    //                 }

    //                 // Process tasks for the employee
    //                 foreach ($addedTasks as $task) {
    //                     $status = $task['status'] ?? null;
    //                     $taskId = $task['task_id'] ?? null;

    //                     if ($status === 'add') {
    //                         // Create a new task
    //                         $newTask = new EmpTask();
    //                         $newTask->setEmpProject($employeeProject);
    //                         $newTask->setTaskDesc($task['task_name'] ?? 'No description');
    //                         $newTask->setDate(new DateTime($task['date'] ?? 'now'));
    //                         $newTask->setAssignedHours($task['assigned_time'] ?? 0); // Default to 0 if not provided
    //                         $this->entityManager->persist($newTask);
    //                     } elseif ($status === 'update' && $taskId) {
    //                         // Update an existing task
    //                         $taskRepo = $this->entityManager->getRepository(EmpTask::class);
    //                         $existingTask = $taskRepo->find(intval($taskId));
    //                         if ($existingTask) {
    //                             $existingTask->setTaskDesc($task['task_name'] ?? $existingTask->getTaskDesc());
    //                             $existingTask->setDate(new DateTime($task['date'] ?? $existingTask->getDate()->format('Y-m-d')));
    //                             $existingTask->setAssignedHours($task['assigned_time'] ?? $existingTask->getRenderedHours());
    //                             $this->entityManager->persist($existingTask);
    //                         }
    //                     } elseif ($status === 'delete' && $taskId) {
    //                         // Archive the task
    //                         $taskRepo = $this->entityManager->getRepository(EmpTask::class);
    //                         $existingTask = $taskRepo->find(intval($taskId));
    //                         if ($existingTask) {
    //                             $existingTask->setArchived(true);
    //                             $this->entityManager->persist($existingTask);
    //                         }
    //                     }
    //                 }
    //             }
    //         }

    //         // Save all changes to the database
    //         $this->entityManager->flush();

    //         return $this->json(['message' => 'Workers and tasks processed successfully'], JsonResponse::HTTP_OK);
    //     } catch (\Exception $e) {
    //         // Handle exceptions and log errors
    //         return $this->json([
    //             'error' => 'Failed to process workers and tasks.',
    //             'message' => $e->getMessage()
    //         ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    //     }
    // }

    #[Route('/api/project/assign-workers-with-status', name: 'assign_workers_with_status', methods: ['POST'])]
    public function assignWorkersWithTaskStatus(Request $request): JsonResponse
    {
        // Validate and decode the request data
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Check if `projects` exists and is an array
        if (!isset($data['projects']) || !is_array($data['projects'])) {
            return $this->json(['message' => 'No projects found in the request'], JsonResponse::HTTP_BAD_REQUEST);
        }

        try {
            foreach ($data['projects'] as $projectData) {
                $projectId = $projectData['project_id'] ?? null;
                $addedEmployees = $projectData['added_employee'] ?? [];

                // Validate project existence
                $projectRepo = $this->entityManager->getRepository(Project::class);
                $projectItem = $projectRepo->findOneBy(['id' => $projectId]);
                if (!$projectItem) {
                    continue; // Skip if project does not exist
                }

                // Get all currently assigned employees for the project
                $employeeProjectRepo = $this->entityManager->getRepository(EmployeeProjects::class);
                $existingEmployeeProjects = $employeeProjectRepo->findBy(['project' => $projectItem]);

                // Track employee IDs from the request data
                $currentEmployeeIds = array_map(fn($worker) => $worker['emp_id'] ?? null, $addedEmployees);

                // Archive EmployeeProjects and their tasks if the employee is missing in the request data
                foreach ($existingEmployeeProjects as $employeeProject) {
                    $employeeId = $employeeProject->getEmployee()->getId();
                    if (!in_array($employeeId, $currentEmployeeIds)) {
                        // Archive the EmployeeProject
                        $employeeProject->setAssigned(false);
                        $this->entityManager->persist($employeeProject);

                        // Archive all tasks under this EmployeeProject
                        $taskRepo = $this->entityManager->getRepository(EmpTask::class);
                        $tasks = $taskRepo->findBy(['emp_project' => $employeeProject]);
                        foreach ($tasks as $task) {
                            $task->setArchived(true);
                            $this->entityManager->persist($task);
                        }
                    }
                }

                // Process each employee from the request data
                foreach ($addedEmployees as $worker) {
                    $employeeId = $worker['emp_id'] ?? null;
                    $addedTasks = $worker['added_task'] ?? [];

                    // Validate employee existence
                    $employeeRepo = $this->entityManager->getRepository(EmployeeRecords::class);
                    $employeeItem = $employeeRepo->findOneBy(['id' => $employeeId]);
                    if (!$employeeId || !$employeeItem) {
                        continue; // Skip if employee ID is not provided or does not exist
                    }

                    // Check if the employee is already assigned to the project
                    $employeeProject = $employeeProjectRepo->findOneBy(['employee' => $employeeItem, 'project' => $projectItem]);

                    if (!$employeeProject) {
                        // Create a new EmployeeProject if not already assigned
                        $employeeProject = new EmployeeProjects();
                        $employeeProject->setEmployee($employeeItem);
                        $employeeProject->setProject($projectItem);
                        $employeeProject->setAssigned(true);
                        $this->entityManager->persist($employeeProject);
                    }

                    // Process tasks for the employee
                    foreach ($addedTasks as $task) {
                        $status = $task['status'] ?? null;
                        $taskId = $task['task_id'] ?? null;

                        if ($status === 'add') {
                            // Create a new task
                            $newTask = new EmpTask();
                            $newTask->setEmpProject($employeeProject);
                            $newTask->setTaskDesc($task['task_name'] ?? 'No description');
                            $newTask->setDate(new DateTime($task['date'] ?? 'now'));
                            $newTask->setAssignedHours($task['assigned_time'] ?? 0); // Default to 0 if not provided
                            $this->entityManager->persist($newTask);
                        } elseif ($status === 'update' && $taskId) {
                            // Update an existing task
                            $taskRepo = $this->entityManager->getRepository(EmpTask::class);
                            $existingTask = $taskRepo->find(intval($taskId));
                            if ($existingTask) {
                                $existingTask->setTaskDesc($task['task_name'] ?? $existingTask->getTaskDesc());
                                $existingTask->setDate(new DateTime($task['date'] ?? $existingTask->getDate()->format('Y-m-d')));
                                $existingTask->setAssignedHours($task['assigned_time'] ?? $existingTask->getRenderedHours());
                                $this->entityManager->persist($existingTask);
                            }
                        } elseif ($status === 'delete' && $taskId) {
                            // Archive the task
                            $taskRepo = $this->entityManager->getRepository(EmpTask::class);
                            $existingTask = $taskRepo->find(intval($taskId));
                            if ($existingTask) {
                                $existingTask->setArchived(true);
                                $this->entityManager->persist($existingTask);
                            }
                        }
                    }
                }
            }

            // Save all changes to the database
            $this->entityManager->flush();

            return $this->json(['message' => 'Workers and tasks processed successfully'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Handle exceptions and log errors
            return $this->json([
                'error' => 'Failed to process workers and tasks.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    private function validateEmployeeHaveProject($employeeId, $projectId){
        $employeeRepo = $this->entityManager->getRepository(EmployeeRecords::class);
        $employeeItem = $employeeRepo->findOneBy(['id'=>$employeeId]);
        if($employeeItem){
            //check if project exist
            $projectRepo = $this->entityManager->getRepository(Project::class);
            $projectItem = $projectRepo->findOneBy(['id'=>$projectId]);
            if($projectItem){
                // validate if employee has project
                $employeeProjectRepo = $this->entityManager->getRepository(EmployeeProjects::class);
                $employeeProjectItem = $employeeProjectRepo->findOneBy(['employee'=>$employeeItem, 'project'=>$projectItem]);
                if($employeeProjectItem){
                    return true;
                }
                else{
                    return false;
                }
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

    private function createProjectWizard(Request $request)
    {
        //validate user
        $data                   = json_decode($request->getContent(), true);
        $new_proj_code          = $data['project']['code'] ?? null;
        $new_proj_name          = $data['project']['name'] ?? null;
        $new_proj_desc          = $data['project']['desc'] ?? null;
        $new_subdivision_id     = $data['sub_id'] ?? null;

        // if(!$this->validateUser($email, $password)){
        //     return $this->json(['message' => 'Authorization failed', 'authorized' => false, JsonResponse::HTTP_UNAUTHORIZED]); 
        // }

        //validate duplicate
        // check for duplicate
        // $projectRepo = $this->entityManager->getRepository(Project::class);
        // $projectItem = $projectRepo->findOneByCodeOrName($new_proj_code);
        $subdivisionRepo = $this->entityManager->getRepository(Subdivision::class);
        $subdivisionItem = $subdivisionRepo->findOneBy(['id'=>$new_subdivision_id]);
        if($subdivisionItem){
            //add project
            $new_project = new Project();
            $new_project->setCode($new_proj_code);
            $new_project->setName($new_proj_name);
            $new_project->setDescription($new_proj_desc);
            $new_project->setSubdivision($subdivisionItem);
            $this->entityManager->persist($new_project);
            $this->entityManager->flush();

            $this->auditlog->addAuditLog($request, json_encode($new_project), 'api/project/create', 'Create project');

            return $new_project;
        }
        else{
            return null;
        }
    }

    private function createCategoryWizard(Request $request, $project)
    {
        //validate user
        $data                       = json_decode($request->getContent(), true);
        $new_category_code          = $data['category']['code'] ?? null;
        $new_category_desc          = $data['category']['desc'] ?? null;
        $new_category_block         = $data['category']['block'] ?? null;
        $new_category_lot           = $data['category']['lot'] ?? null;
        $model                      = $data['category']['model_id'] ?? null;
        $phaseId                    = $data['phase_id'] ?? null;
        $blocks_id                  = $data['category']['blocks_id'] ?? null;
        $owner_id                   = $data['category']['owner_id'] ?? null;
        $lots_id                    = $data['category']['lots_id'] ?? null;
        $overhead                   = $data['category']['overhead'] ?? false;
        // if(!$this->validateUser($email, $password)){
        //     return $this->json(['message' => 'Authorization failed', 'authorized' => false, JsonResponse::HTTP_UNAUTHORIZED]); 
        // }

        //validate duplicate
        $categoryRepo = $this->entityManager->getRepository(Category::class);
        // /$categoryItem = $categoryRepo->findOneByCodeOrName($new_category_code);

        $modelRepo = $this->entityManager->getRepository(Model::class);
        $modelItem = $modelRepo->findOneBy(['id'=>$model]);

        $blocksRepo = $this->entityManager->getRepository(Blocks::class);
        $blocksItem = $blocksRepo->findOneBy(['id' => $blocks_id]);

        $ownerRepo = $this->entityManager->getRepository(Owner::class);
        $ownerItem = $ownerRepo->findOneBy(['id' => $owner_id]);

        $lotsRepo = $this->entityManager->getRepository(Lots::class);
        $lotsItem = $lotsRepo->findOneBy(['id' => $lots_id]);

        
        if ($phaseId === null) {
            return $this->json(['message' => 'Phase ID is required'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        $phaseRepo = $this->entityManager->getRepository(Phase::class);
        $phase = $phaseRepo->find($phaseId);
    
        if (!$phase) {
            return $this->json(['message' => 'Phase not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        if($phase){
            //add category
            $new_category = new Category();
            $new_category->setCode($new_category_code);
            $new_category->setBlock($new_category_block);
            $new_category->setLot($new_category_lot);
            $new_category->setLocation($new_category_block." ".$new_category_lot);
            $new_category->setDescription($new_category_desc);
            $new_category->setModel($modelItem);
            $new_category->setProject($project);
            $new_category->setPhase($phase);
            $new_category->setBlocks($blocksItem);
            $new_category->setOwner($ownerItem);
            $new_category->setOverhead($overhead);
            if($lotsItem != ""){
                $new_category->setLots($lotsItem);
            }
            $this->entityManager->persist($new_category);
            $this->entityManager->flush();
            $this->auditlog->addAuditLog($request, json_encode($new_category), 'api/category/create', 'Create Category');
            return $this->json(['message' => 'Category creation successful.']);
        }
        else{
            return $this->json(['message' => 'Category code or name is existing.', 'existing' => true]);
        }

    }
}
