<?php

namespace App\Controller;

use App\Entity\EmployeeRecords;
use App\Entity\MainModules;
use App\Entity\User;
use App\Entity\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use App\Service\AuditLog;
use Symfony\Component\Serializer\SerializerInterface;

class LoginController extends AbstractController
{
    private $entityManager;
    private $jwtManager;
    private $auditlog;
    private $serializer;
    private $passwordHasher;

    public function __construct(EntityManagerInterface $entityManager, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, SerializerInterface $serializer, UserPasswordHasherInterface $passwordHasher)
    {
        $this->entityManager = $entityManager;
        $this->jwtManager = $jwtManager;
        $this->auditlog         = $auditLog;
        $this->serializer = $serializer;
        $this->passwordHasher = $passwordHasher;
    }

    // #[Route('/api/login', name: 'api_login', methods: ['POST'])]
    // public function login(Request $request, UserPasswordHasherInterface $passhasher): JsonResponse
    // {
    //     // Retrieve the email and password from the request JSON payload
    //     $data = json_decode($request->getContent(), true);
    //     $identifier = $data['identifier'] ?? null;
    //     $password = $data['password'] ?? null;

    //     if (!$identifier || !$password) {
    //         return $this->json(['error' => 'Invalid request. Email/Username/Contact No. and password are required.'], JsonResponse::HTTP_BAD_REQUEST);
    //     }

    //     // Retrieve the user from the database based on the email
    //     $userRepository = $this->entityManager->getRepository(User::class);
    //     $user = $userRepository->findOneByEmailOrUsernameOrPhone($identifier);

    //     if (!$user) {
    //         return $this->json(['error' => 'Invalid credentials.'], JsonResponse::HTTP_UNAUTHORIZED);
    //     }

    //     // Verify the provided password against the hashed password stored in the user entity
    //     if (!$passhasher->isPasswordValid($user, $password)) {
    //         return $this->json(['error' => 'Invalid credentials.'], JsonResponse::HTTP_UNAUTHORIZED);
    //     }

    //     // check if user is active
    //     if (!$user->isActive()) {
    //         return $this->json(['error' => 'User is disabled.'], JsonResponse::HTTP_UNAUTHORIZED);
    //     }

    //     // Debug: Check the user object before token creation
    //     // You can use Symfony's logger here or simply var_dump/print_r for quick debugging
    //     // $this->get('logger')->info('User data:', (array) $user);

    //     // Generate the JWT token
    //     $token = $this->jwtManager->create($user);
        
    //     // Debug: Check the generated token
    //     // $this->get('logger')->info('Generated token:', ['token' => $token]);
    //     $userTypeRepo = $this->entityManager->getRepository(UserType::class);
    //     $userType = $userTypeRepo->findOneBy(['id' => $user->getUserType()]);
    //     $this->auditlog->addAuditLog($request, json_encode($user), 'api/login', 'User Login');

    //     $fname = ""; 
    //     $lname = "";
    //     $empCode = "";
    //     if($user->getEmployeeRecords()){
    //         $fname = $user->getEmployeeRecords()->getFirstName() ?? ""; 
    //         $lname = $user->getEmployeeRecords()->getLastName() ?? "";
    //         $empCode = $user->getEmployeeRecords()->getEmployeeCode() ?? "";
    //     }        
    //     // Return a response with a success message or a JWT token if using JWT authentication
    //     return $this->json(['message' => 'Login successful.', 'token' => $token, 'username' => $user->getEmail(), 'user_type_code' => $userType->getUserCode(), 'user_type_name' => $userType->getName(), "first_name" => $fname, "last_name" => $lname, "empCode" => $empCode]);
    // }

    #[Route('/api/login', name: 'api_login', methods: ['POST'])]
    public function login(Request $request, UserPasswordHasherInterface $passhasher): JsonResponse
    {
        
        // Retrieve the email and password from the request JSON payload
        $data = json_decode($request->getContent(), true);
        $identifier = $data['identifier'] ?? null;
        $password = $data['password'] ?? null;
    
        if (!$identifier || !$password) {
            return $this->json(['error' => 'Invalid request. Email/Username/Contact No. and password are required.'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Retrieve the user from the database based on the email
        $userRepository = $this->entityManager->getRepository(User::class);
        $user = $userRepository->findOneByEmailOrUsernameOrPhone($identifier);
    
        if (!$user) {
            return $this->json(['error' => 'Invalid credentials. User not found.'], JsonResponse::HTTP_UNAUTHORIZED);
        }
    
        // Verify the provided password against the hashed password stored in the user entity
        if (!$passhasher->isPasswordValid($user, $password)) {
            return $this->json(['error' => 'Invalid credentials. Incorrect password.'], JsonResponse::HTTP_UNAUTHORIZED);
        }
    
        // Check if user is active
        if (!$user->isActive()) {
            return $this->json(['error' => 'User is disabled.'], JsonResponse::HTTP_UNAUTHORIZED);
        }
    
        // Generate the JWT token
        $token = $this->jwtManager->create($user);
    
        // Fetch UserType and associated MainModules
        $userType = $user->getUserType();
        if (!$userType) {
            return $this->json(['error' => 'User type not found.'], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    
        $mainModule = $userType->getMainModule();

        // Initialize MainModule data as an empty array
        $mainModuleData = [];
        if ($mainModule) {
            // Prepare MainModule data if available
            $mainModuleData = [
                'project'           => $mainModule->getProject(),
                'humanres'          => $mainModule->getHumanres(),
                'administration'    => $mainModule->getAdministration(),
                'payroll'           => $mainModule->getPayroll(),
                'emp_leaves'        => $mainModule->getEmpLeaves(),
            ];
        }
        
        // Initialize SubModule data as an empty array
        $subModuleData = [];
        $subModule = $mainModule ? $mainModule->getSubmodule() : null;
        if ($subModule) {
            // Prepare SubModule data if available
            $subModuleData = [
                'daily_time_record' => $subModule->getDailyTimeRecord(),
                'subdivision' => $subModule->getSubdivision(),
                'division' => $subModule->getDivision(),
                'department' => $subModule->getDepartment(),
                'phase' => $subModule->getPhase(),
                'owner' => $subModule->getOwner(),
                'models' => $subModule->getModels(),
                'model_types' => $subModule->getModelTypes(),
                'emp_settings' => $subModule->getEmpSettings(),
                'shifts' => $subModule->getShifts(),
                'projects' => $subModule->getProjects(),
                'emp_project' => $subModule->getEmpProject(),
                'emp_list' => $subModule->getEmpList(),

                'sss_config'            => $subModule->getSssConfig(),
                'pagibig_config'        => $subModule->getPagibigConfig(),
                'bir_config'            => $subModule->getBirConfig(),
                'philhealth_config'     => $subModule->getPhilhealthConfig(),
                'payroll'               => $subModule->getPayroll(),
                'payroll_reports'       => $subModule->getPayrollReports(),
                'leave_policy'          => $subModule->getLeavePolicy(),
                'emp_leaves'            => $subModule->getEmpLeaves(),
                'holiday_config'        => $subModule->getHolidayConfig(),
                'leave_request'         => $subModule->getLeaveRequest(),
                'leave_calendar'        => $subModule->getLeaveCalendar(),
            ];
        }
    
        // Add audit log
        $this->auditlog->addAuditLog($request, json_encode($user), 'api/login', 'User Login');
    
        // Get user employee records
        $fname = ""; 
        $lname = "";
        $empCode = "";
        $profileImagePath = "";
        if ($user->getEmployeeRecords()) {
            $fname = $user->getEmployeeRecords()->getFirstName() ?? ""; 
            $lname = $user->getEmployeeRecords()->getLastName() ?? "";
            $empCode = $user->getEmployeeRecords()->getEmployeeCode() ?? "";
            $profileImagePath = $user->getEmployeeRecords()->getProfilePhotoPath() ?? "";
        }        
    
        // Return a response with a success message and additional data
        return $this->json([
            'message' => 'Login successful.',
            'token' => $token,
            'user_id' => $user->getId(),
            'username' => $user->getEmail(),
            'user_type_code' => $userType->getUserCode(),
            'user_type_name' => $userType->getName(),
            'first_name' => $fname,
            'last_name' => $lname,
            'empCode' => $empCode,
            'main_module' => $mainModuleData,
            'sub_module' => $subModuleData,
            'profile_image' => $profileImagePath
        ], JsonResponse::HTTP_OK);
    }

    #[Route('/api/revalidate-session', name: 'api_revalidate_session', methods: ['POST'])]
    public function revalidateSession(Request $request): JsonResponse
    {
        // Retrieve the email and password from the request JSON payload
        $data = json_decode($request->getContent(), true);
        $user_id = $data['user_id'] ?? null;
        if (!$user_id) {
            return $this->json(['error' => 'Invalid request. User Id is not existing.'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Retrieve the user from the database based on the email
        $userRepository = $this->entityManager->getRepository(User::class);
        $user = $userRepository->findOneBy(['id' => $user_id]);
    
        if (!$user) {
            return $this->json(['error' => 'Invalid credentials.'], JsonResponse::HTTP_FAILED_DEPENDENCY);
        }
        
        // Check if user is active
        if (!$user->isActive()) {
            return $this->json(['error' => 'User is disabled.'], JsonResponse::HTTP_UNAUTHORIZED);
        }
    
        // Generate the JWT token
        $token = $this->jwtManager->create($user);
    
        // Fetch UserType and associated MainModules
        $userType = $user->getUserType();
        if (!$userType) {
            return $this->json(['error' => 'User type not found.'], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    
        $mainModule = $userType->getMainModule();

        // Initialize MainModule data as an empty array
        $mainModuleData = [];
        if ($mainModule) {
            // Prepare MainModule data if available
            $mainModuleData = [
                'project'           => $mainModule->getProject(),
                'humanres'          => $mainModule->getHumanres(),
                'administration'    => $mainModule->getAdministration(),
                'payroll'           => $mainModule->getPayroll(),
                'emp_leaves'        => $mainModule->getEmpLeaves(),
            ];
        }
        
        // Initialize SubModule data as an empty array
        $subModuleData = [];
        $subModule = $mainModule ? $mainModule->getSubmodule() : null;
        if ($subModule) {
            // Prepare SubModule data if available
            $subModuleData = [
                'daily_time_record' => $subModule->getDailyTimeRecord(),
                'subdivision' => $subModule->getSubdivision(),
                'division' => $subModule->getDivision(),
                'department' => $subModule->getDepartment(),
                'phase' => $subModule->getPhase(),
                'owner' => $subModule->getOwner(),
                'models' => $subModule->getModels(),
                'model_types' => $subModule->getModelTypes(),
                'emp_settings' => $subModule->getEmpSettings(),
                'shifts' => $subModule->getShifts(),
                'projects' => $subModule->getProjects(),
                'emp_project' => $subModule->getEmpProject(),
                'emp_list' => $subModule->getEmpList(),

                'sss_config'            => $subModule->getSssConfig(),
                'pagibig_config'        => $subModule->getPagibigConfig(),
                'bir_config'            => $subModule->getBirConfig(),
                'philhealth_config'     => $subModule->getPhilhealthConfig(),
                'payroll'               => $subModule->getPayroll(),
                'payroll_reports'       => $subModule->getPayrollReports(),
                'leave_policy'          => $subModule->getLeavePolicy(),
                'emp_leaves'            => $subModule->getEmpLeaves(),
                'holiday_config'        => $subModule->getHolidayConfig(),
                'leave_request'         => $subModule->getLeaveRequest(),
                'leave_calendar'        => $subModule->getLeaveCalendar(),
            ];
        }
    
        // Add audit log
        $this->auditlog->addAuditLog($request, json_encode($user), 'api/login', 'User Login');
    
        // Get user employee records
        $fname = ""; 
        $lname = "";
        $empCode = "";
        $profileImagePath = "";
        if ($user->getEmployeeRecords()) {
            $fname = $user->getEmployeeRecords()->getFirstName() ?? ""; 
            $lname = $user->getEmployeeRecords()->getLastName() ?? "";
            $empCode = $user->getEmployeeRecords()->getEmployeeCode() ?? "";
            $profileImagePath = $user->getEmployeeRecords()->getProfilePhotoPath() ?? "";
        }        
    
        // Return a response with a success message and additional data
        return $this->json([
            'message' => 'Login successful.',
            'token' => $token,
            'user_id' => $user->getId(),
            'username' => $user->getEmail(),
            'user_type_code' => $userType->getUserCode(),
            'user_type_name' => $userType->getName(),
            'first_name' => $fname,
            'last_name' => $lname,
            'empCode' => $empCode,
            'main_module' => $mainModuleData,
            'sub_module' => $subModuleData,
            'profile_image' => $profileImagePath
        ], JsonResponse::HTTP_OK);
    }
    

    #[Route('/signup', name: 'api_signup', methods:['POST','GET'])]
    public function signup(Request $request, UserPasswordHasherInterface $passwordHasher): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $email = $data['email'] ?? null;
        $username = $data['username'] ?? null;
        $contact_num = $data['contact_num'] ?? null;
        $password = $data['password'] ?? null;
        $role = $data['role'] ?? null;

        $user = new User();
        $user->setUserId('test');
        $user->setEmail($email);
        $user->setUsername($username);
        $user->setContactNum($contact_num);
        $user->setActive(true);

        //find role
        $userTypeRepository = $this->entityManager->getRepository(UserType::class);
        $userType = $userTypeRepository->findOneBy(['user_code' => $role]);
        $user->setUserType($userType);
        $hashedpass = $passwordHasher->hashPassword(
            $user,
            $password
        );
        $user->setPassword($hashedpass);
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return $this->json([
            'message'  => 'Successfully created',
        ]);
    }

    #[Route('api/usertype/create', name: 'create_usertype', methods: ['POST'])]
    public function createUsertype(Request $request): JsonResponse
    {
        //validate user
        $data                       = json_decode($request->getContent(), true);
        $email                      = $data['email'] ?? null;
        $password                   = $data['password'] ?? null;
        $newUsertypeName            = $data['name'] ?? null;
        $newUsertypeCode            = $data['code'] ?? null;

        //add owner
        $newUsertype = new UserType();
        $newUsertype->setName($newUsertypeName);
        $newUsertype->setUserCode($newUsertypeCode);
        $newUsertype->setRemoved(false);
        $this->entityManager->persist($newUsertype);
        $this->entityManager->flush();
        return $this->json(['message' => 'Usertype creation successful.'], JsonResponse::HTTP_CREATED);
    }

    #[Route('api/forget_password', name: 'forget_password', methods: ['POST'])]
    public function forgetPassword(Request $request): JsonResponse
    {
        //validate user
        $data = json_decode($request->getContent(), true);
        $email = $data['email'] ?? null;

        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        if (empty($email) || $email === null) {
            return $this->json(['message' => 'Email address cannot be empty!'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Retrieve the user from the database based on the email
        $userRepository = $this->entityManager->getRepository(User::class);
        $user = $userRepository->findOneByEmailOrUsernameOrPhone($email);

        if (!$user) {
            return $this->json(['error' => 'Invalid credentials.'], JsonResponse::HTTP_UNAUTHORIZED);
        }

        // Update or set token and expiry
        $this->entityManager->beginTransaction();

        // Generate token
        $token = $this->jwtManager->create($user);

        // Persist the entity
        $user->setResetToken($token);
        $timezone = new \DateTimeZone('Asia/Manila'); // set timezone
        $user->setTokenExpiry(new \DateTime('+24 hours', $timezone));

        $this->entityManager->persist($user);
        $this->entityManager->flush();
        $this->entityManager->commit();
        
        $employeeRepository = $this->entityManager->getRepository(EmployeeRecords::class);
        $employee = $employeeRepository->findOneBy(['user' => $user]);
        $employeeArray = $this->serializer->serialize($employee, 'json', ['groups' => 'employee']);

        //$this->auditlog->addAuditLog($request, json_encode([$email, $employee]), 'api/reset_password', 'Password Reset');

        return $this->json(['message' => 'Password reset successful', 'email' => $email, 'employee' => $employeeArray, 'token' => $token], JsonResponse::HTTP_OK);
    }

    #[Route('api/validate_reset_token', name: 'validate_reset_token', methods: ['POST'])]
    public function validateResetToken(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $requestToken = $data['token'] ?? null;
        $timezone = new \DateTimeZone('Asia/Manila'); // set timezone
        $status = 'Expired';

        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        if (empty($requestToken) || $requestToken === null) {
            return $this->json(['message' => 'Invalid Token!'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Retrieve the user from the database based on the token
        $userRepository = $this->entityManager->getRepository(User::class);
        $user = $userRepository->findOneBy(['reset_token' => $requestToken]);

        if (!$user) {
            return $this->json(['message' => 'Token Validation Passed', 'status' => $status], JsonResponse::HTTP_OK);
        }

        $resetToken = $user->getResetToken();
        $tokenExpiry = $user->getTokenExpiry();
        $dateToday = new \DateTime('now', $timezone);

        if ($dateToday <= $tokenExpiry) { // Check if reset token is not expired 
            $status = 'Valid';
        } else {
            $status = 'Expired';
        }
      
        return $this->json(['message' => 'Token Validation Passed', 'status' => $status], JsonResponse::HTTP_OK);
    }

    #[Route('api/reset_password', name: 'reset_password', methods: ['POST'])]
    public function resetPassword(Request $request): JsonResponse
    {
        //validate user
        $data = json_decode($request->getContent(), true);
        $pasword = $data['password'];
        $token = $data['token'];

        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        if (empty($token) || $token === null) {
            return $this->json(['message' => 'Invalid Token!'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        if (empty($pasword) || $pasword === null) {
            return $this->json(['message' => 'Password cannot be empty!'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Retrieve the user from the database based on the email
        $userRepository = $this->entityManager->getRepository(User::class);
        $user = $userRepository->findOneBy(['reset_token' => $token]);

        if (!$user) {
            return $this->json(['message' => 'Invalid credentials.', 'status' => 'Failed'], JsonResponse::HTTP_UNAUTHORIZED);
        }

        $hashedpass = $this->passwordHasher->hashPassword($user, $pasword);
        $user->setPassword($hashedpass);
        $user->setResetToken(null);
        $user->setTokenExpiry(null);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return $this->json(['message' => 'Password reset successful', 'status' => 'Success'], JsonResponse::HTTP_OK);
    }
}
