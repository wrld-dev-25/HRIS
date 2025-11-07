<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Category;
use App\Entity\Division;
use App\Entity\EmployeeRecords;
use App\Entity\Model;
use App\Entity\Owner;
use App\Entity\Phase;
use App\Entity\Project;
use App\Entity\UserType;
use App\Entity\Subdivision;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use App\Service\AuditLog;
use App\Entity\Department;
use App\Entity\MainModules;
use App\Entity\SubModules;
use App\Entity\SyncConnection;
use Symfony\Component\Serializer\SerializerInterface;


class SuperAdminController extends AbstractController
{
    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $serializer;
    private ValidatorInterface $validator;
    

    public function __construct(EntityManagerInterface $entityManager,  UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, SerializerInterface $serializer,  ValidatorInterface $validator)
    {
        $this->entityManager    = $entityManager;
        $this->passhasher       = $passhasher;
        $this->jwtManager       = $jwtManager;
        $this->auditlog         = $auditLog;
        $this->serializer       = $serializer;
        $this->validator        = $validator;
    }

    #[Route('/api/super_admin/connections', name: 'app_super_admin' , methods: ['GET'])]
    public function viewConnections(Request $request): JsonResponse
    {
        try {
            $syncConnRepo = $this->entityManager->getRepository(SyncConnection::class);
            //$paginator = $phaseRepo->findAllPaginated(1,300);
            // Get the items from the Paginator
            $syncConnItem = $syncConnRepo->findAll();
            $syncConnArray = $this->serializer->serialize($syncConnItem, 'json', ['groups' => 'sync_conn']);
            $this->auditlog->addAuditLog($request, json_encode($syncConnArray), 'api/super_admin/connections', 'View Connection');
            return new JsonResponse([
                'message' => 'Connections retrieved successfully.',
                'connections' => json_decode($syncConnArray)
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return new JsonResponse([
                'message' => 'Failed to retrieve connections.',
                'error' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/user-types-permission', name: 'api_user_types', methods: ['GET'])]
    public function getAllUserTypes(): JsonResponse
    {
        // Fetch all UserType entities
        $userTypes = $this->entityManager->getRepository(UserType::class)->findAll();

        // Serialize the data
        $data = $this->serializer->serialize($userTypes, 'json', ['groups' => 'user_permissions']);

        // Return JSON response
        return new JsonResponse($data, JsonResponse::HTTP_OK, [], true);
    }

    #[Route('/api/user-types', name: 'create_user_type', methods: ['POST'])]
    public function createUserType(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        try {
            // Decode JSON request content
            $data = json_decode($request->getContent(), true);
    
            // Validate input data
            if (!isset($data['name']) || !isset($data['user_code'])) {
                return $this->json([
                    'message' => 'Invalid input data.'
                ], JsonResponse::HTTP_BAD_REQUEST);
            }

            // Validate user code
            $userType = $entityManager->getRepository(UserType::class)->findOneBy(['user_code' => $data['user_code']]);
            if ($userType) {
                return $this->json([
                    'message' => 'User code already exists.'
                ], JsonResponse::HTTP_BAD_REQUEST);
            }

            // Create and populate UserType entity
            $userType = new UserType();
            $userType->setName($data['name']);
            $userType->setUserCode($data['user_code']);
            $userType->setRemoved(0); // Default value
    
            // Default permissions array
            $defaultPermissions = [
                'can_view' => false,
                'can_add' => false,
                'can_edit' => false,
                'can_delete' => false,
            ];
    
            // Create and populate MainModules entity with default permissions
            $mainModules = new MainModules();
            $mainModules->setPermissions(
                $data['project'] ?? $defaultPermissions, 
                $data['humanres'] ?? $defaultPermissions, 
                $data['administration'] ?? $defaultPermissions
            );

            $submodules = new SubModules();
            $submodules->setPermissions();
    
            // Set MainModules in UserType
            $userType->setMainModule($mainModules);
            // Set SubModules in UserType
            $mainModules->setSubmodule($submodules);
    
            // Persist both entities
            $entityManager->persist($mainModules);
            $entityManager->persist($submodules);
            $entityManager->persist($userType);
            $entityManager->flush();
    
            // Return success response
            return $this->json([
                'message' => 'User type created successfully.',
                'user_type' => [
                    'id' => $userType->getId(),
                    'name' => $userType->getName(),
                    'user_code' => $userType->getUserCode(),
                    'removed' => $userType->getRemoved(),
                    'main_module' => [
                        'project' => $mainModules->getProject(),
                        'humanres' => $mainModules->getHumanres(),
                        'administration' => $mainModules->getAdministration(),
                        'submodule' => $mainModules->getSubmodule() ? [
                            'id' => $mainModules->getSubmodule()->getId(),
                            'daily_time_record' => $mainModules->getSubmodule()->getDailyTimeRecord(),
                            'subdivision' => $mainModules->getSubmodule()->getSubdivision(),
                            'division' => $mainModules->getSubmodule()->getDivision(),
                            'department' => $mainModules->getSubmodule()->getDepartment(),
                            'phase' => $mainModules->getSubmodule()->getPhase(),
                            'owner' => $mainModules->getSubmodule()->getOwner(),
                            'models' => $mainModules->getSubmodule()->getModels(),
                            'model_types' => $mainModules->getSubmodule()->getModelTypes(),
                            'emp_settings' => $mainModules->getSubmodule()->getEmpSettings(),
                            'shifts' => $mainModules->getSubmodule()->getShifts(),
                            'emp_project' => $mainModules->getSubmodule()->getEmpProject(),
                            'projects' => $mainModules->getSubmodule()->getProjects(),
                            'emp_list' => $mainModules->getSubmodule()->getEmpList(),
                        ] : null,
                    ],
                ]
            ], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            // Handle and return error response
            return $this->json([
                'message' => 'Failed to create user type.',
                'error' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/main-modules', name: 'create_main_modules', methods: ['POST'])]
    public function createMainModules(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        try {
            // Decode JSON request content
            $data = json_decode($request->getContent(), true);

            // Validate required fields
            if (!isset($data['project']) || !isset($data['humanres']) || !isset($data['administration'])) {
                return $this->json([
                    'message' => 'Invalid input data. Missing required fields.'
                ], JsonResponse::HTTP_BAD_REQUEST);
            }

            // Validate permissions arrays
            $permissionsFields = ['project', 'humanres', 'administration'];
            foreach ($permissionsFields as $field) {
                foreach ($data[$field] as $key => $value) {
                    if (!in_array($key, ['can_edit', 'can_add', 'can_delete', 'can_view'])) {
                        return $this->json([
                            'message' => 'Invalid permission key: ' . $key
                        ], JsonResponse::HTTP_BAD_REQUEST);
                    }
                    if (!is_bool($value)) {
                        return $this->json([
                            'message' => 'Permission value must be a boolean.'
                        ], JsonResponse::HTTP_BAD_REQUEST);
                    }
                }
            }

            // Create and populate MainModules entity
            $mainModules = new MainModules();
            $mainModules->setPermissions($data['project'], $data['humanres'], $data['administration']);
            
            // Persist the entity
            $entityManager->persist($mainModules);
            $entityManager->flush();

            // Return success response
            return $this->json([
                'message' => 'MainModules created successfully.',
                'main_modules' => [
                    'id' => $mainModules->getId(),
                    'project' => $mainModules->getProject(),
                    'humanres' => $mainModules->getHumanres(),
                    'administration' => $mainModules->getAdministration(),
                ]
            ], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            // Handle and return error response
            return $this->json([
                'message' => 'Failed to create MainModules.',
                'error' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/sub-modules', name: 'create_sub_modules', methods: ['POST'])]
    public function createSubModules(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        try {
            // Decode JSON request content
            $data = json_decode($request->getContent(), true);

            // Validate required fields
            if (!isset($data['daily_time_record']) || !isset($data['subdivision'])) {
                return $this->json([
                    'message' => 'Invalid input data. Missing required fields.'
                ], JsonResponse::HTTP_BAD_REQUEST);
            }

            // Validate permissions arrays
            $permissionsFields = ['daily_time_record', 'subdivision'];
            foreach ($permissionsFields as $field) {
                foreach ($data[$field] as $key => $value) {
                    if (!in_array($key, ['can_edit', 'can_add', 'can_delete', 'can_view'])) {
                        return $this->json([
                            'message' => 'Invalid permission key: ' . $key
                        ], JsonResponse::HTTP_BAD_REQUEST);
                    }
                    if (!is_bool($value)) {
                        return $this->json([
                            'message' => 'Permission value must be a boolean.'
                        ], JsonResponse::HTTP_BAD_REQUEST);
                    }
                }
            }

            // Create and populate SubModules entity
            $subModules = new SubModules();
            $subModules->setPermissions($data['daily_time_record'], $data['subdivision']);

            // Persist the entity
            $entityManager->persist($subModules);
            $entityManager->flush();

            // Return success response
            return $this->json([
                'message' => 'SubModules created successfully.',
                'sub_modules' => [
                    'id' => $subModules->getId(),
                    'daily_time_record' => $subModules->getDailyTimeRecord(),
                    'subdivision' => $subModules->getSubdivision(),
                ]
            ], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            // Handle and return error response
            return $this->json([
                'message' => 'Failed to create SubModules.',
                'error' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/main-modules/{id}', name: 'update_main_modules', methods: ['PUT'])]
    public function updateMainModules(Request $request, EntityManagerInterface $entityManager, int $id): JsonResponse
    {
        try {
            // Decode JSON request content
            $data = json_decode($request->getContent(), true);

            // Validate required fields for MainModules
            if (!isset($data['project']) || !isset($data['humanres']) || !isset($data['administration'])) {
                return $this->json([
                    'message' => 'Invalid input data. Missing required fields for MainModules.'
                ], JsonResponse::HTTP_BAD_REQUEST);
            }

            // Validate permissions arrays
            $permissionsFields = ['project', 'humanres', 'administration', 'payroll', 'emp_leaves'];
            foreach ($permissionsFields as $field) {
                foreach ($data[$field] as $key => $value) {
                    if (!in_array($key, ['can_view', 'can_add', 'can_edit', 'can_delete'])) {
                        return $this->json([
                            'message' => 'Invalid permission key: ' . $key
                        ], JsonResponse::HTTP_BAD_REQUEST);
                    }
                    if (!is_bool($value)) {
                        return $this->json([
                            'message' => 'Permission value must be a boolean.'
                        ], JsonResponse::HTTP_BAD_REQUEST);
                    }
                }
            }

            // Find the MainModules entity
            $mainModules = $entityManager->getRepository(MainModules::class)->find($id);
            if (!$mainModules) {
                return $this->json([
                    'message' => 'MainModules entity not found.'
                ], JsonResponse::HTTP_NOT_FOUND);
            }

            // Update MainModules entity
            //print_r($data['administration']);
            $mainModules->setPermissions($data['project'], $data['humanres'], $data['administration'], $data['payroll'], $data['emp_leaves']);

            // Update SubModules if provided
            if (isset($data['submodule'])) {
                $subModuleData = $data['submodule'];

                // Validate SubModules fields
                $requiredSubModules = ['daily_time_record', 'subdivision', 'division', 'department', 'phase', 'owner', 'models', 'model_types', 'emp_settings', 'shifts', 'projects','emp_project','emp_list','sss_config', 'pagibig_config', 'bir_config', 'philhealth_config', 'payroll', 'payroll_reports', 'leave_policy', 'emp_leaves', 'holiday_config', 'leave_request', 'leave_calendar'];
                foreach ($requiredSubModules as $field) {
                    if (!isset($subModuleData[$field])) {
                        return $this->json([
                            'message' => 'Invalid input data. Missing required fields for SubModules.'
                        ], JsonResponse::HTTP_BAD_REQUEST);
                    }
                }

                // Validate SubModules permissions arrays
                foreach ($requiredSubModules as $field) {
                    foreach ($subModuleData[$field] as $key => $value) {
                        if (!in_array($key, ['can_view', 'can_add', 'can_edit', 'can_delete'])) {
                            return $this->json([
                                'message' => 'Invalid permission key: ' . $key
                            ], JsonResponse::HTTP_BAD_REQUEST);
                        }
                        if (!is_bool($value)) {
                            return $this->json([
                                'message' => 'Permission value must be a boolean.'
                            ], JsonResponse::HTTP_BAD_REQUEST);
                        }
                    }
                }

                // Check if the SubModules entity exists, create if not
                $subModules = $mainModules->getSubmodule();
                if (!$subModules) {
                    $subModules = new SubModules();
                    $mainModules->setSubmodule($subModules);
                }

                // Update SubModules entity
                $subModules->setPermissions(
                    $subModuleData['daily_time_record'],
                    $subModuleData['subdivision'],
                    $subModuleData['division'],
                    $subModuleData['department'],
                    $subModuleData['phase'],
                    $subModuleData['owner'],
                    $subModuleData['models'],
                    $subModuleData['model_types'],
                    $subModuleData['emp_settings'],
                    $subModuleData['shifts'],
                    $subModuleData['emp_project'],
                    $subModuleData['projects'],
                    $subModuleData['emp_list'],

                    $subModuleData['sss_config'],
                    $subModuleData['pagibig_config'],
                    $subModuleData['bir_config'],
                    $subModuleData['philhealth_config'],
                    $subModuleData['payroll'],
                    $subModuleData['payroll_reports'],
                    $subModuleData['leave_policy'],
                    $subModuleData['emp_leaves'],
                    $subModuleData['holiday_config'],
                    $subModuleData['leave_request'],
                    $subModuleData['leave_calendar'],
                    
                );
                $entityManager->persist($subModules);
            }

            // Persist the MainModules entity and related SubModules
            $entityManager->flush();
            // Return success response
            return $this->json([
                'message' => 'MainModules and related SubModules updated successfully.',
                'main_modules' => [
                    'id' => $mainModules->getId(),
                    'project' => $mainModules->getProject(),
                    'humanres' => $mainModules->getHumanres(),
                    'administration' => $mainModules->getAdministration(),
                    'submodule' => $mainModules->getSubmodule() ? [
                        'id' => $mainModules->getSubmodule()->getId(),
                        'daily_time_record' => $mainModules->getSubmodule()->getDailyTimeRecord(),
                        'subdivision' => $mainModules->getSubmodule()->getSubdivision(),
                        'division' => $mainModules->getSubmodule()->getDivision(),
                        'department' => $mainModules->getSubmodule()->getDepartment(),
                        'phase' => $mainModules->getSubmodule()->getPhase(),
                        'owner' => $mainModules->getSubmodule()->getOwner(),
                        'models' => $mainModules->getSubmodule()->getModels(),
                        'model_types' => $mainModules->getSubmodule()->getModelTypes(),
                        'emp_settings' => $mainModules->getSubmodule()->getEmpSettings(),
                        'shifts' => $mainModules->getSubmodule()->getShifts(),
                        'emp_project' => $mainModules->getSubmodule()->getEmpProject(),
                        'projects' => $mainModules->getSubmodule()->getProjects(),
                        'emp_list' => $mainModules->getSubmodule()->getEmpList(),
                    ] : null,
                ]
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Handle and return error response
            return $this->json([
                'message' => 'Failed to update MainModules.',
                'error' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/user-types/delete/{id}', name: 'delete_user_type', methods: ['DELETE'])]
    public function deleteUserType(int $id): JsonResponse
    {
        try {
            $entityManager = $this->entityManager;

            // Find the UserType entity
            $userType = $entityManager->getRepository(UserType::class)->find($id);
            if (!$userType) {
                return $this->json([
                    'message' => 'UserType entity not found.'
                ], JsonResponse::HTTP_NOT_FOUND);
            }

            // Nullify the user_type field in related User entities
            $users = $userType->getUsers();
            foreach ($users as $user) {
                $user->setUserType(null);
                $entityManager->persist($user);
            }

            // Remove the UserType entity
            $entityManager->remove($userType);
            $entityManager->flush();

            // Return success response
            return $this->json([
                'message' => 'UserType deleted successfully and related User entities updated.'
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Handle and return error response
            return $this->json([
                'message' => 'Failed to delete UserType.',
                'error' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


}
