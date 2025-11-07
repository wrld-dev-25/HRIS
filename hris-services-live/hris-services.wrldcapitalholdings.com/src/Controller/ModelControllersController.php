<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Division;
use App\Entity\EmployeeRecords;
use App\Entity\Model;
use App\Entity\Owner;
use App\Entity\Phase;
use App\Entity\Project;
use App\Entity\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Subdivision;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use App\Service\AuditLog;
use App\Entity\Department;
use App\Entity\EmployeeProjects;
use App\Entity\EmpTask;
use App\Entity\ModelTypes;
use App\Entity\Worker;
use App\Entity\WorkerLogs;
use App\Repository\EmployeeProjectsRepository;
use App\Repository\EmployeeRecordsRepository;
use App\Repository\EmpTaskRepository;
use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\SerializerInterface;
use App\Service\UserAccessValidation;
class ModelControllersController extends AbstractController
{

    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $validator;
    private $serializer;
    private $validateAccess;

    public function __construct(EntityManagerInterface $entityManager,  UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, ValidatorInterface $validator, SerializerInterface $serializer, UserAccessValidation $validateAccess)
    {
        $this->entityManager    = $entityManager;
        $this->passhasher       = $passhasher;
        $this->jwtManager       = $jwtManager;
        $this->auditlog         = $auditLog;
        $this->validator        = $validator;
        $this->serializer       = $serializer;
        $this->validateAccess   = $validateAccess;

    }

    #[Route('/api/model-types', name: 'view_model_types', methods: ['GET'])]
    public function viewModelTypes(Request $request): JsonResponse
    {
        $validationResult = $this->validateAccess->validateUserAccess($request, 'model_types', 'view');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        try {
            $modelTypesRepo = $this->entityManager->getRepository(ModelTypes::class);
            $modelTypesItems = $modelTypesRepo->findByNotArchived();
    
            $modelTypesArray = array_map(function (ModelTypes $modelTypes) {
                return [
                    'id' => $modelTypes->getId(),
                    'name' => $modelTypes->getName(),
                    'code' => $modelTypes->getCode(),
                    'add_option' => $modelTypes->isAdditionalOptions(),
                ];
            }, $modelTypesItems);
    
            $this->auditlog->addAuditLog($request, json_encode($modelTypesArray), 'api/model-types/', 'View Model Types');
    
            return $this->json([
                'message' => 'Model types retrieved successfully.',
                'model_types' => $modelTypesArray
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to retrieve model types.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/model-types', name: 'create_model_types', methods: ['POST'])]
    public function createModelTypes(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $validationResult = $this->validateAccess->validateUserAccess($request, 'model_types', 'add');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        try {
            $data = json_decode($request->getContent(), true);

            if (!isset($data['name']) || !isset($data['code'])) {
                return $this->json([
                    'error' => 'Invalid input data.'
                ], JsonResponse::HTTP_BAD_REQUEST);
            }

            // check if model code already exists
            $modelTypesRepo = $entityManager->getRepository(ModelTypes::class);
            $modelTypes = $modelTypesRepo->findOneBy(['code' => $data['code']]);
            if ($modelTypes) {
                return $this->json([
                    'message' => 'Model type with code ' . $data['code'] . ' already exists.'
                ], JsonResponse::HTTP_CONFLICT);
            }

            $modelTypes = new ModelTypes();
            $modelTypes->setName($data['name']);
            $modelTypes->setCode($data['code']);
            $modelTypes->setAdditionalOptions($data['add_option']);

            $entityManager->persist($modelTypes);
            $entityManager->flush();

            $this->auditlog->addAuditLog($request, json_encode($data), 'api/model-types/', 'Create Model Types');

            return $this->json([
                'message' => 'Model type created successfully.',
            ], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to create model type.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/model-types/{id}', name: 'update_model_types', methods: ['PUT'])]
    public function updateModelTypes(Request $request, int $id): JsonResponse
    {
        $validationResult = $this->validateAccess->validateUserAccess($request, 'model_types', 'edit');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }
        try {
            $modelTypesRepo = $this->entityManager->getRepository(ModelTypes::class);
            $modelTypes = $modelTypesRepo->find($id);

            if (!$modelTypes) {
                return $this->json([
                    'error' => 'Model type not found.'
                ], JsonResponse::HTTP_NOT_FOUND);
            }

            $data = json_decode($request->getContent(), true);
            if (isset($data['name'])) {
                $modelTypes->setName($data['name']);
            }
            if (isset($data['code'])) {
                // validate code if existing and not same as the current one
                $modelTypesRepo = $this->entityManager->getRepository(ModelTypes::class);
                $modelTypesItem = $modelTypesRepo->findOneBy(["code" => $data['code']]);
                if ($modelTypesItem && $modelTypesItem->getId() != $id) {
                    return $this->json(['message' => 'Code already exists.'], JsonResponse::HTTP_BAD_REQUEST);
                }
                $modelTypes->setCode($data['code']);
            }
            if (isset($data['add_option'])) {
                $modelTypes->setAdditionalOptions($data['add_option']);
            }

            $this->entityManager->flush();

            $this->auditlog->addAuditLog($request, json_encode($data), 'api/model-types/' . $id, 'Update Model Types');

            return $this->json([
                'message' => 'Model type updated successfully.',
                'model_type' => [
                    'id' => $modelTypes->getId(),
                    'name' => $modelTypes->getName(),
                    'code' => $modelTypes->getCode()
                ]
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to update model type.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/model-types/archive/{id}', name: 'archive_model_types', methods: ['PATCH'])]
    public function archiveModelTypes(Request $request, int $id): JsonResponse
    {
        $validationResult = $this->validateAccess->validateUserAccess($request, 'model_types', 'delete');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }
        try {
            $modelTypesRepo = $this->entityManager->getRepository(ModelTypes::class);
            $modelTypes = $modelTypesRepo->find($id);

            if (!$modelTypes) {
                return $this->json([
                    'error' => 'Model type not found.'
                ], JsonResponse::HTTP_NOT_FOUND);
            }

            $modelTypes->setArchived(true);
            $this->entityManager->flush();

            $this->auditlog->addAuditLog($request, json_encode(['archived' => true]), 'api/model-types/' . $id . '/archive', 'Archive Model Types');

            return $this->json([
                'message' => 'Model type archived successfully.'
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to archive model type.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
