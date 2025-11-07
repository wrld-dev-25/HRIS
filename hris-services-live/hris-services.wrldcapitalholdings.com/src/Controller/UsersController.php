<?php

namespace App\Controller;

use App\Entity\Blocks;
use App\Entity\Category;
use App\Entity\Lots;
use App\Entity\Model;
use App\Entity\ModelTypes;
use App\Entity\Owner;
use App\Entity\Phase;
use App\Entity\Project;
use App\Entity\Shifts;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Subdivision;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use App\Service\AuditLog;
use App\Entity\UserType;

class UsersController extends AbstractController
{

    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $validator;
    private $serializer;
    private $passwordHasher;

    public function __construct(EntityManagerInterface $entityManager,  UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, ValidatorInterface $validator, SerializerInterface $serializer, UserPasswordHasherInterface $passwordHasher,)
    {
        $this->entityManager    = $entityManager;
        $this->passhasher       = $passhasher;
        $this->jwtManager       = $jwtManager;
        $this->auditlog         = $auditLog;
        $this->validator        = $validator;
        $this->serializer       = $serializer;
        $this->passwordHasher = $passwordHasher;
    }

    #[Route('/api/user/update/{id}', name: 'update_user')]
    public function updateUser(Request $request, int $id): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);
    
            $userRepo = $this->entityManager->getRepository(User::class);
            $user = $userRepo->find($id);
    
            if (!$user) {
                return $this->json([
                    'error' => 'User not found'
                ], JsonResponse::HTTP_NOT_FOUND);
            }

            // update user is_active
            if (isset($data['is_active']) && $data['is_active'] !== '') {
                $user->setActive($data['is_active']);
            }
    
            if (isset($data['username']) && $data['username'] !== '') {
                $user->setUsername($data['username']);
            }

            if (isset($data['password']) && $data['password'] !== '') {
                $hashedpass = $this->passwordHasher->hashPassword(
                    $user,
                    $data['password']
                );
                $user->setPassword($hashedpass);
            }
            
            if (isset($data['email']) && $data['email'] !== '') {
                $user->setEmail($data['email']);
            }

            if (isset($data['contact_no']) && $data['contact_no'] !== '') {
                $user->setContactNum($data['contact_no']);
            }

            if (isset($data['user_type']) && $data['user_type'] !== '') {
                $userTypeRepo = $this->entityManager->getRepository(UserType::class)->find($data['user_type']);
                $user->setUserType($userTypeRepo);
            }

            // if (isset($data['is_straight_time']) && $data['is_straight_time'] !== '') {
            //     $user->setStraightTime($data['is_straight_time']);
            // }

            if (isset($data['is_assignable_proj']) && $data['is_assignable_proj'] !== '') {
                $user->setAssignableProj($data['is_assignable_proj']);
            }

            if (isset($data['emp_shift']) && $data['emp_shift'] !== '') {
                $shiftRepo = $this->entityManager->getRepository(Shifts::class);
                $shift = $shiftRepo->find($data['emp_shift']);
                if ($shift) {
                    $user->setEmpShift($shift);
                } else {
                    return $this->json([
                        'error' => 'Shift not found'
                    ], JsonResponse::HTTP_BAD_REQUEST);
                }
            }
    
            $this->entityManager->persist($user);
            $this->entityManager->flush();
    
            $userArray = [
                'id' => $user->getId(),
                'username' => $user->getUsername(),
                'email' => $user->getEmail(),
                'contact_no' => $user->getContactNum(),
                'archived' => $user->isArchived(),
                'is_straight_time' => $user->isStraightTime(),
                'is_assignable_proj' => $user->isAssignableProj(),
                'emp_shift' => $user->getEmpShift() ? $user->getEmpShift()->getId() : null,
                'user_type' => $user->getUserType() ? $user->getUserType()->getId() : null,
            ];
    
            // Assuming auditlog is available as a service
            $this->auditlog->addAuditLog($request, json_encode($userArray), 'api/user/' . $id, 'Update User');
    
            return $this->json([
                'message' => 'User updated successfully.',
                'user' => $userArray
            ], JsonResponse::HTTP_OK);
    
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to update user.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    

    #[Route('/api/user-types', name: 'view_user_types', methods: ['GET'])]
    public function viewUserTypes(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        try {
            $userTypeRepo = $entityManager->getRepository(UserType::class);
            $userTypes = $userTypeRepo->findAll();

            $userTypesArray = array_map(function (UserType $userType) {
                return [
                    'id' => $userType->getId(),
                    'name' => $userType->getName(),
                    'user_code' => $userType->getUserCode(),
                    'removed' => $userType->getRemoved(),
                ];
            }, $userTypes);

            return $this->json([
                'message' => 'User types retrieved successfully.',
                'user_types' => $userTypesArray
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return $this->json([
                'error' => 'Failed to retrieve user types.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    // #[Route('/api/user-types', name: 'create_user_type', methods: ['POST'])]
    // public function createUserType(Request $request, EntityManagerInterface $entityManager): JsonResponse
    // {
    //     try {
    //         $data = json_decode($request->getContent(), true);

    //         if (!isset($data['name']) || !isset($data['user_code'])) {
    //             return $this->json([
    //                 'error' => 'Invalid input data.'
    //             ], JsonResponse::HTTP_BAD_REQUEST);
    //         }

    //         $userType = new UserType();
    //         $userType->setName($data['name']);
    //         $userType->setUserCode($data['user_code']);
    //         $userType->setRemoved(0);

    //         $entityManager->persist($userType);
    //         $entityManager->flush();

    //         return $this->json([
    //             'message' => 'User type created successfully.',
    //             'user_type' => [
    //                 'id' => $userType->getId(),
    //                 'name' => $userType->getName(),
    //                 'user_code' => $userType->getUserCode(),
    //                 'removed' => $userType->getRemoved(),
    //             ]
    //         ], JsonResponse::HTTP_CREATED);
    //     } catch (\Exception $e) {
    //         return $this->json([
    //             'error' => 'Failed to create user type.',
    //             'message' => $e->getMessage()
    //         ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    //     }
    // }

    #[Route('/api/user-types/{id}', name: 'update_user_type', methods: ['PUT'])]
    public function updateUserType(Request $request, int $id, EntityManagerInterface $entityManager): JsonResponse
    {
        try {
            $userTypeRepo = $entityManager->getRepository(UserType::class);
            $userType = $userTypeRepo->find($id);

            if (!$userType) {
                return $this->json([
                    'error' => 'User type not found.'
                ], JsonResponse::HTTP_NOT_FOUND);
            }

            $data = json_decode($request->getContent(), true);

            if (isset($data['name'])) {
                $userType->setName($data['name']);
            }
            if (isset($data['user_code'])) {
                $userType->setUserCode($data['user_code']);
            }
            if (isset($data['removed'])) {
                $userType->setRemoved($data['removed']);
            }

            $entityManager->flush();

            return $this->json([
                'message' => 'User type updated successfully.',
                'user_type' => [
                    'id' => $userType->getId(),
                    'name' => $userType->getName(),
                    'user_code' => $userType->getUserCode(),
                    'removed' => $userType->getRemoved(),
                ]
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return $this->json([
                'error' => 'Failed to update user type.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/user-types/{id}/archive', name: 'archive_user_type', methods: ['PATCH'])]
    public function archiveUserType(Request $request, int $id, EntityManagerInterface $entityManager): JsonResponse
    {
        try {
            $userTypeRepo = $entityManager->getRepository(UserType::class);
            $userType = $userTypeRepo->find($id);

            if (!$userType) {
                return $this->json([
                    'error' => 'User type not found.'
                ], JsonResponse::HTTP_NOT_FOUND);
            }

            $userType->setRemoved(1);
            $entityManager->flush();

            return $this->json([
                'message' => 'User type archived successfully.'
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return $this->json([
                'error' => 'Failed to archive user type.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
