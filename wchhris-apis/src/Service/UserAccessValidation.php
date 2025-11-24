<?php
namespace App\Service;
use App\Entity\AuditTrailLog;
use DateTimeImmutable;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use DateTimeZone;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\User;

class UserAccessValidation
{
    private $tokenStorage;
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager, TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
        $this->entityManager    = $entityManager;
    }

    public function validateUserAccess($request, $submodule, $access_type)
    {
        $token = $this->tokenStorage->getToken();
    
        // Check if the token is valid and the user is authenticated
        if ($token === null || $token->getUser() === 'anon.') {
            return [
                'status' => 'error',
                'error' => 'Unauthorized',
                'message' => 'User is not authenticated.',
                'code' => JsonResponse::HTTP_UNAUTHORIZED
            ];
        }
    
        $user = $token->getUser();
        $user_role = $user->getUserType();
    
        // Ensure the user has a role with associated modules
        if (!$user_role || !$user_role->getMainModule()) {
            return [
                'status' => 'error',
                'error' => 'Access Denied',
                'message' => 'User role does not have the required modules.',
                'code' => JsonResponse::HTTP_FORBIDDEN
            ];
        }
    
        // Get main module and submodule access
        $main_module_access = $user_role->getMainModule();
        $sub_module_access = $main_module_access->getSubmodule();
    
        if ($sub_module_access) {
            switch ($submodule) {
                case 'subdivision':
                    $access = $sub_module_access->getSubdivision();
                    break;
                case 'division':
                    $access = $sub_module_access->getDivision();
                    break;
                case 'department':
                    $access = $sub_module_access->getDepartment();
                    break;
                case 'daily_time_record':
                    $access = $sub_module_access->getDailyTimeRecord();
                    break;
                case 'phase':
                    $access = $sub_module_access->getPhase();
                    break;
                case 'owner':
                    $access = $sub_module_access->getOwner();
                    break;
                case 'models':
                    $access = $sub_module_access->getModels();
                    break;
                case 'model_types':
                    $access = $sub_module_access->getModelTypes();
                    break;
                case 'emp_settings':
                    $access = $sub_module_access->getEmpSettings();
                    break;
                case 'shifts':
                    $access = $sub_module_access->getShifts();
                    break;
                case 'employee_projects':
                    $access = $sub_module_access->getEmployeeProjects();
                    break;
                default:
                    return [
                        'status' => 'error',
                        'error' => 'Invalid Submodule',
                        'message' => 'Submodule not recognized.',
                        'code' => JsonResponse::HTTP_BAD_REQUEST
                    ];
            }
        
            if (is_array($access)) {
                $permission_key = 'can_' . $access_type;
    
                // Check if the user has the required access
                if (!empty($access[$permission_key])) {
                    return ['status' => 'success']; // Access granted
                } else {
                    return [
                        'status' => 'error',
                        'error' => 'Access Denied',
                        'message' => 'User does not have the required access to perform this action.',
                        'code' => JsonResponse::HTTP_FORBIDDEN
                    ];
                }
            }
        }
    
        return [
            'status' => 'error',
            'error' => 'Access Denied',
            'message' => 'Submodule access is not configured for this user role.',
            'code' => JsonResponse::HTTP_FORBIDDEN
        ];
    }
    
    
    
}