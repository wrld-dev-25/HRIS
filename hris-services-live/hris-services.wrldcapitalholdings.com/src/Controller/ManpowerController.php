<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Entity\Model;
use App\Entity\Owner;
use App\Entity\Phase;
use App\Entity\Worker;
use App\Entity\EmpTask;
use App\Entity\Project;
use App\Entity\Category;
use App\Entity\Division;
use App\Entity\UserType;
use App\Service\AuditLog;
use App\Entity\Department;
use App\Entity\WorkerLogs;
use App\Entity\Subdivision;
use App\Entity\AttendanceTypes;
use App\Entity\EmployeeRecords;
use App\Entity\EmployeeProjects;
use App\Entity\AffiliatedCompany;
use App\Repository\EmpTaskRepository;
use App\Repository\ProjectRepository;
use App\Service\UserAccessValidation;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\EmployeeAdditionalRecords;
use App\Repository\EmployeeRecordsRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\EmployeeProjectsRepository;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use App\Service\NotificationService;

class ManpowerController extends AbstractController
{

    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $validator;
    private $serializer;
    private $validateAccess;
    private $notification;

    public function __construct(EntityManagerInterface $entityManager,  UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, ValidatorInterface $validator, SerializerInterface $serializer, UserAccessValidation $validateAccess, NotificationService $notification)
    {
        $this->entityManager    = $entityManager;
        $this->passhasher       = $passhasher;
        $this->jwtManager       = $jwtManager;
        $this->auditlog         = $auditLog;
        $this->validator        = $validator;
        $this->serializer       = $serializer;
        $this->validateAccess   = $validateAccess;
        $this->notification     = $notification;
    }

    #[Route('/api/employee201/create', name: 'create_emp201', methods: ['POST'])]
    public function createEmp201(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $divisionRepo = $this->entityManager->getRepository(Division::class);
        $divisionItem = $divisionRepo->findOneBy(["code" => $data['division']]);
    
        if (!$divisionItem) {
            return $this->json(['message' => 'Division not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $departmentRepo = $this->entityManager->getRepository(Department::class);
        $departmentItem = $departmentRepo->findOneBy(["code" => $data['department']]);
    
        if (!$departmentItem) {
            return $this->json(['message' => 'Department not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        //validate empcode

        if(!$data['employee_code']){
            return $this->json(['message' => 'Employee Code is missing'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $employeeRepository = $this->entityManager->getRepository(EmployeeRecords::class);
        $employeeItem = $employeeRepository->findOneBy(['employee_code' => $data['employee_code']]);

        if($employeeItem){
            return $this->json(['message' => 'Employee Code is existing'], JsonResponse::HTTP_CONFLICT);
        }

        //validate email

        if($data['email']){
            $employeeRepository = $this->entityManager->getRepository(EmployeeRecords::class);
            $employeeItem = $employeeRepository->findOneBy(['email' => $data['email']]);

            if($employeeItem){
                return $this->json(['message' => 'Email is existing'], JsonResponse::HTTP_CONFLICT);
            }
        }

        try {
            $this->entityManager->beginTransaction();
            $employee = new EmployeeRecords();
            $employee->setFirstName($data['first_name']);
            $employee->setMiddleName($data['middle_name'] ?? null);
            $employee->setLastName($data['last_name']);
            $employee->setExtension($data['extension'] ?? null);
            $employee->setEmployeeCode($data['employee_code']);
            $employee->setBirthdate(new \DateTime($data['birthdate']));
            $employee->setBirthPlace($data['birth_place'] ?? null);
            $employee->setAge($data['age']);
            $employee->setGender($data['gender']);
            $employee->setCivilStatus($data['civil_status']);
            $employee->setEmail($data['email']);
            $employee->setTelephone($data['telephone'] ?? null);
            $employee->setCellphone($data['cellphone'] ?? null);
            $employee->setZipCode($data['zip_code'] ?? null);
            $employee->setArea($data['area'] ?? null);
            $employee->setPresentBarangay($data['present_barangay'] ?? null);
            $employee->setPresentCity($data['present_city'] ?? null);
            $employee->setSameAddress($data['same_address'] ?? false);
            $employee->setPermanentBarangay($data['permanent_barangay'] ?? null);
            $employee->setPermanentCity($data['permanent_city'] ?? null);
            // check if date_hired is set and valid
            if (isset($data['date_hired'])) {
                $employee->setDateHired(\DateTime::createFromFormat('d M, Y', $data['date_hired']));
            }
            $employee->setEmployeeStatus($data['employee_status']);
            $employee->setDepartment($departmentItem);
            $employee->setPosition($data['position'] ?? null);
            $employee->setEmploymentType($data['employment_type'] ?? null);
            $employee->setDivision($divisionItem);
            $employee->setContractExpiryDate(isset($data['contract_expiry_date']) ? new \DateTime($data['contract_expiry_date']) : null);
            $employee->setDateSeparated(isset($data['date_separated']) ? new \DateTime($data['date_separated']) : null);
            $employee->setProbationaryDate(isset($data['probationary_date']) ? new \DateTime($data['probationary_date']) : null);
            $employee->setRegularizationDate(isset($data['regularization_date']) ? new \DateTime($data['regularization_date']) : null);
    
            // Validate the entity
            $errors = $this->validator->validate($employee);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return new JsonResponse(['errors' => $errorMessages], JsonResponse::HTTP_BAD_REQUEST);
            }
            // Persist the entity
            $this->entityManager->persist($employee);

            //create account
            $password = $employee->getEmail() ? $employee->getEmail() : '';
            $user = new User();
            $user->setEmail($employee->getEmail());
            $user->setUsername($employee->getEmployeeCode());
            $user->setContactNum($employee->getCellphone());
            $user->setActive(true);
            $user->setAssignableProj($data['is_assignable'] ?? true);
            $user->setWorker($data['is_worker'] ?? false);

            //find role
            $userTypeRepository = $this->entityManager->getRepository(UserType::class);
            $userType = $userTypeRepository->findOneBy(['user_code' => "SUR"]);
            $user->setUserType($userType);
            $hashedpass = $this->passhasher->hashPassword(
                $user,
                $password
            );
            $user->setPassword($hashedpass);
            $this->entityManager->persist($user);
            //link user to emp201
            $employee->setUser($user);
            $this->entityManager->persist($employee);
            $this->entityManager->flush();
            $this->entityManager->commit();

            // Move audit logging to a separate service or event listener
            $this->auditlog->addAuditLog($request, json_encode($employee, JSON_UNESCAPED_SLASHES), 'api/emp201/create', 'Create');

            return $this->json(['message' => 'Employee record creation successful.'], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            $this->entityManager->rollback();
            return $this->json(['message' => "There's an error in code".$e], JsonResponse::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/api/employee201/create_list', name: 'create_emp201_list', methods: ['POST'])]
    public function createEmp201List(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        set_time_limit(300);
        //dd($data);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        if (!is_array($data) || empty($data)) {
            return $this->json(['message' => 'Data must be a non-empty array of employees'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        $createdEmployees = [];
        foreach ($data as $employeeData) {
            try {
                $this->entityManager->beginTransaction();
    
                // Find Division
                $divisionRepo = $this->entityManager->getRepository(Division::class);
                $divisionItem = $divisionRepo->findOneBy(["code" => $employeeData['division']]);
            
                // if (!$divisionItem) {
                //     $this->entityManager->rollback();
                //     continue; // Skip current row if division not found
                // }
    
                // Find Department
                $departmentRepo = $this->entityManager->getRepository(Department::class);
                $departmentItem = $departmentRepo->findOneBy(["code" => $employeeData['department']]);
            
                // if (!$departmentItem) {
                //     $this->entityManager->rollback();
                //     continue; // Skip current row if department not found
                // }

                //validate empcode

                if(!$employeeData['employee_code']){
                    $this->entityManager->rollback();
                    continue;
                }

                $employeeRepository = $this->entityManager->getRepository(EmployeeRecords::class);
                $employeeItem = $employeeRepository->findOneBy(['employee_code' => $employeeData['employee_code']]);

                if($employeeItem){
                    $this->entityManager->rollback();
                    continue;
                }

                //validate email

                if($employeeData['email']){
                    $employeeRepository = $this->entityManager->getRepository(EmployeeRecords::class);
                    $employeeItem = $employeeRepository->findOneBy(['email' => $employeeData['email']]);

                    if($employeeItem){
                        $this->entityManager->rollback();
                        continue;
                    }
                }
    
                // Create User entity
                $user = new User();
                $user->setEmail($employeeData['email'] ?? null);
                $user->setUsername($employeeData['employee_code']); // Adjust as necessary
                $user->setContactNum($employeeData['cellphone'] ?? null); // Adjust as necessary
                $user->setActive(true);
                $user->setAssignableProj($employeeData['is_assignable'] ?? false);
    
                // Find and set UserType
                $userTypeRepository = $this->entityManager->getRepository(UserType::class);
                $userType = $userTypeRepository->findOneBy(['user_code' => "SUR"]);
                if (!$userType) {
                    $this->entityManager->rollback();
                    continue; // Skip current row if user type not found
                }
                $user->setUserType($userType);
    
                // Hash and set password
                $hashedPassword = $passwordHasher->hashPassword($user, $employeeData['email']); // Adjust as necessary
                $user->setPassword($hashedPassword);
    
                // Persist User entity
                $entityManager->persist($user);
    
                // Create EmployeeRecords entity
                $employee = new EmployeeRecords();
                $employee->setFirstName($employeeData['first_name']);
                $employee->setMiddleName($employeeData['middle_name'] ?? null);
                $employee->setLastName($employeeData['last_name']);
                $employee->setExtension($employeeData['extension'] ?? null);
                $employee->setEmployeeCode($employeeData['employee_code']);
                $employee->setBirthdate(new \DateTime($employeeData['birthdate']));
                $employee->setBirthPlace($employeeData['birth_place'] ?? null);
                $employee->setAge($employeeData['age']);
                $employee->setGender($employeeData['gender']);
                $employee->setCivilStatus($employeeData['civil_status']);
                $employee->setEmail($employeeData['email'] ?? null);
                $employee->setTelephone($employeeData['telephone'] ?? null);
                $employee->setCellphone($employeeData['cellphone'] ?? null);
                $employee->setZipCode(intval($employeeData['zip_code']) ?? 0);
                $employee->setArea($employeeData['area'] ?? null);
                $employee->setPresentBarangay($employeeData['present_barangay'] ?? null);
                $employee->setPresentCity($employeeData['present_city'] ?? null);
                $employee->setSameAddress($employeeData['same_address'] ?? false);
                $employee->setPermanentBarangay($employeeData['permanent_barangay'] ?? null);
                $employee->setPermanentCity($employeeData['permanent_city'] ?? null);
                $employee->setDateHired(new \DateTime($employeeData['date_hired']));
                $employee->setEmployeeStatus($employeeData['employee_status']);
                $employee->setPosition($employeeData['position'] ?? null);
                $employee->setEmploymentType($employeeData['employment_type'] ?? null);
                $employee->setDivision($divisionItem ?? null);
                $employee->setDepartment($departmentItem ?? null);
                $employee->setContractExpiryDate(isset($employeeData['contract_expiry_date']) ? new \DateTime($employeeData['contract_expiry_date']) : null);
                $employee->setDateSeparated(isset($employeeData['date_separated']) ? new \DateTime($employeeData['date_separated']) : null);
                $employee->setProbationaryDate(isset($employeeData['probationary_date']) ? new \DateTime($employeeData['probationary_date']) : null);
                $employee->setRegularizationDate(isset($employeeData['regularization_date']) ? new \DateTime($employeeData['regularization_date']) : null);
    
                // Validate the entity
                $errors = $this->validator->validate($employee);
                if (count($errors) > 0) {
                    $this->entityManager->rollback();
                    continue; // Skip current row if validation errors
                }

                $employeeAdditional = new EmployeeAdditionalRecords();
                $employeeAdditional->setEmployeeCode($employee);
                $employeeAdditional->setPastEmploymentRecord(count($employeeData['past_employment_record']) > 0 ? $employeeData['past_employment_record'] : null);
                $employeeAdditional->setEducationalBackground(count($employeeData['educational_background']) > 0 ? $employeeData['educational_background'] : null);
                $employeeAdditional->setSeminarsTrainings(count($employeeData['seminars_trainings']) > 0 ? $employeeData['seminars_trainings'] : null);
                $employeeAdditional->setAssessmentsExams(count($employeeData['assessments_exams']) > 0 ? $employeeData['assessments_exams'] : null);
                $employeeAdditional->setSkills(count($employeeData['skills']) > 0 ? $employeeData['skills'] : null);
                $employeeAdditional->setAwards(count($employeeData['awards']) > 0 ? $employeeData['awards'] : null);
                $employeeAdditional->setLicenses(count($employeeData['licenses']) > 0 ? $employeeData['licenses'] : null);
                $employeeAdditional->setDependents(count($employeeData['dependents']) > 0 ? $employeeData['dependents'] : null);
                $employeeAdditional->setViolations(count($employeeData['violations']) > 0 ? $employeeData['violations'] : null);
                $employeeAdditional->setMedicalDrugTests(count($employeeData['medical_drug_tests']) > 0 ? $employeeData['medical_drug_tests'] : null);
                $employeeAdditional->setSchoolGraduated(isset($employeeData['school_graduated']) ? $employeeData['school_graduated'] : null);
                $employeeAdditional->setCourse(isset($employeeData['course']) ? $employeeData['course'] : null);
                $employeeAdditional->setCareerBandLevel(isset($employeeData['career_band_level']) ? $employeeData['career_band_level'] : null);
                $employeeAdditional->setCareerGlobalGrade(isset($employeeData['career_global_grade']) ? $employeeData['career_global_grade'] : null);
                $employeeAdditional->setCashCardNumber(isset($employeeData['cash_card_number']) ? $employeeData['cash_card_number'] : null);
                $employeeAdditional->setHmoAccount(isset($employeeData['hmo_account']) ? $employeeData['hmo_account'] : null);
                $employeeAdditional->setSssNumber(isset($employeeData['sss_number']) ? $employeeData['sss_number'] : null);
                $employeeAdditional->setPhilhealthNumber(isset($employeeData['philhealth_number']) ? $employeeData['philhealth_number'] : null);
                $employeeAdditional->setPagibigNumber(isset($employeeData['pagibig_number']) ? $employeeData['pagibig_number'] : null);
                $employeeAdditional->setTinNumber(isset($employeeData['tin_number']) ? $employeeData['tin_number'] : null);

                // Validate the entity
                $errors = $this->validator->validate($employeeAdditional);
                if (count($errors) > 0) {
                    $this->entityManager->rollback();
                    continue; // Skip current row if validation errors
                }
    
                // Set User entity to EmployeeRecords
                $employee->setUser($user);
    
                // Persist EmployeeRecords entity
                $entityManager->persist($employee);
                // Persist EmployeeAdditionalRecords entity
                $entityManager->persist($employeeAdditional);
                $entityManager->flush();
    
                // Commit transaction
                $entityManager->commit();
                $createdEmployees[] = $employee->getEmployeeCode();
            } catch (\Exception $e) {
                $this->entityManager->rollback();
                return $this->json(['message' => "There's an error in code: " . $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
            }
        }
        
        // Move audit logging to a separate service or event listener
        $this->auditlog->addAuditLog($request, json_encode($createdEmployees, JSON_UNESCAPED_SLASHES), 'api/emp201/create', 'Create');
    
        return $this->json(['message' => 'Employee records created successfully.'], JsonResponse::HTTP_CREATED);
    }

    #[Route('/api/employee201/update', name: 'update_emp201', methods: ['PUT'])]
    public function updateEmp201(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $employeeRepository = $this->entityManager->getRepository(EmployeeRecords::class);
        $employee = $employeeRepository->find($data['id']);

        if (!$employee) {
            return $this->json(['message' => 'Employee not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $divisionRepo = $this->entityManager->getRepository(Division::class);
        $divisionItem = $divisionRepo->findOneBy(["code" => $data['division']]);

        if (!$divisionItem) {
            return $this->json(['message' => 'Division not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $departmentRepo = $this->entityManager->getRepository(Department::class);
        $departmentItem = $departmentRepo->findOneBy(["code" => $data['department']]);

        if (!$departmentItem) {
            return $this->json(['message' => 'Department not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        //Company
        $companyRepo = $this->entityManager->getRepository(AffiliatedCompany::class);
        $companyItem = $companyRepo->findOneBy(["code" => $data['company']]);

        // Check if new employee_code or email already exists for a different employee
        $existingEmployeeCode = $employeeRepository->findOneBy(['employee_code' => $data['employee_code']]);
        if ($existingEmployeeCode && $existingEmployeeCode->getId() !== $employee->getId()) {
            return $this->json(['message' => 'Employee code already exists for another employee'], JsonResponse::HTTP_CONFLICT);
        }

        $existingEmail = $employeeRepository->findOneBy(['email' => $data['email']]);
        if ($existingEmail && $existingEmail->getId() !== $employee->getId()) {
            return $this->json(['message' => 'Email already exists for another employee'], JsonResponse::HTTP_CONFLICT);
        }

        if($employee->getEmail() !== $data['email']){
            // change user email
            $user = $employee->getUser();
            $user->setEmail($data['email']);
            $this->entityManager->persist($user);
        }

        try {
            $this->entityManager->beginTransaction();
            // Update EmployeeRecords entity
            $employee->setFirstName($data['first_name']);
            $employee->setMiddleName($data['middle_name'] ?? null);
            $employee->setLastName($data['last_name']);
            $employee->setExtension($data['extension'] ?? null);
            $employee->setEmployeeCode($data['employee_code']);
            $employee->setBirthdate(new \DateTime($data['birthdate']));
            $employee->setBirthPlace($data['birth_place'] ?? null);
            $employee->setAge($data['age']);
            $employee->setGender($data['gender']);
            $employee->setCivilStatus($data['civil_status']);
            $employee->setEmail($data['email']);
            $employee->setTelephone($data['telephone'] ?? null);
            $employee->setCellphone($data['cellphone'] ?? null);
            $employee->setZipCode($data['zip_code'] ?? null);
            $employee->setArea($data['area'] ?? null);
            $employee->setPresentBarangay($data['present_barangay'] ?? null);
            $employee->setPresentCity($data['present_city'] ?? null);
            $employee->setSameAddress($data['same_address'] ?? false);
            $employee->setPermanentBarangay($data['permanent_barangay'] ?? null);
            $employee->setPermanentCity($data['permanent_city'] ?? null);
            // check if date_hired is set and valid
            if (isset($data['date_hired'])) {
                $employee->setDateHired(\DateTime::createFromFormat('d M, Y', $data['date_hired']));
            }
            else {
                // Set date_hired to null if it already has a value
                $employee->setDateHired(null);
            }
            $employee->setEmployeeStatus($data['employee_status']);
            $employee->setDepartment($departmentItem);
            $employee->setAffiliatedCompany($companyItem);
            $employee->setPosition($data['position'] ?? null);
            $employee->setEmploymentType($data['employment_type'] ?? null);
            $employee->setDivision($divisionItem);
            $employee->setContractExpiryDate(isset($data['contract_expiry_date']) ? new \DateTime($data['contract_expiry_date']) : null);
            $employee->setDateSeparated(isset($data['date_separated']) ? new \DateTime($data['date_separated']) : null);
            $employee->setProbationaryDate(isset($data['probationary_date']) ? new \DateTime($data['probationary_date']) : null);
            $employee->setRegularizationDate(isset($data['regularization_date']) ? new \DateTime($data['regularization_date']) : null);
            $employee->getUser()->setAssignableProj($data['is_assignable'] ?? false);
            $employee->getUser()->setWorker($data['is_worker'] ?? false);

            // Validate the entity
            $errors = $this->validator->validate($employee);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return new JsonResponse(['errors' => $errorMessages], JsonResponse::HTTP_BAD_REQUEST);
            }

            

            // Update the entity in database
            $this->entityManager->persist($employee);
            $this->entityManager->flush();

            // Commit transaction
            $this->entityManager->commit();

            // Move audit logging to a separate service or event listener
            $this->auditlog->addAuditLog($request, json_encode($employee, JSON_UNESCAPED_SLASHES), 'api/emp201/update/'.$data['id'], 'Update');

            return $this->json(['message' => 'Employee record updated successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            $this->entityManager->rollback();
            return $this->json(['message' => "There's an error in code: " . $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/employee/bulk_update', name: 'bulk_update', methods: ['POST'])]
    public function bulkUpdateEmployee(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data', 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $action = $data['action'];
        $employeeUserIds = $data['employeeUserIds'];

        if (empty($employeeUserIds) || $employeeUserIds === null) {
            return $this->json(['message' => 'Employee IDs cannot be empty', 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
        }

        switch ($action) {
            case 'is_project':
                if (!empty($employeeUserIds)) {
                    // Build the query to update the employees
                    $query = $this->entityManager->createQuery(
                        'UPDATE App\Entity\User e
                         SET e.is_assignable_proj = :newStatus
                         WHERE e.id IN (:employeeUserIds)'
                    )->setParameter('newStatus', true) //set assignable to project to true
                     ->setParameter('employeeUserIds', $employeeUserIds);
        
                    $query->execute();

                } else {
                    return $this->json(['message' => 'Employee IDs cannot be empty', 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
                }

                break;

            case 'remove_project':
                if (!empty($employeeUserIds)) {
                    // Build the query to update the employees
                    $query = $this->entityManager->createQuery(
                        'UPDATE App\Entity\User e
                         SET e.is_assignable_proj = :newStatus
                         WHERE e.id IN (:employeeUserIds)'
                    )->setParameter('newStatus', false) //set assignable to project to false
                     ->setParameter('employeeUserIds', $employeeUserIds);
        
                    $query->execute();

                } else {
                    return $this->json(['message' => 'Employee IDs cannot be empty', 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
                }

                break;

            case 'is_worker':
                if (!empty($employeeUserIds)) {
                    // Build the query to update the employees
                    $query = $this->entityManager->createQuery(
                        'UPDATE App\Entity\User e
                         SET e.is_worker = :newStatus
                         WHERE e.id IN (:employeeUserIds)'
                    )->setParameter('newStatus', true) //set employee as worker to true
                     ->setParameter('employeeUserIds', $employeeUserIds);
        
                    $query->execute();

                } else {
                    return $this->json(['message' => 'Employee IDs cannot be empty', 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
                }

                break;

            case 'remove_worker':
                if (!empty($employeeUserIds)) {
                    // Build the query to update the employees
                    $query = $this->entityManager->createQuery(
                        'UPDATE App\Entity\User e
                         SET e.is_worker = :newStatus
                         WHERE e.id IN (:employeeUserIds)'
                    )->setParameter('newStatus', false) //set employee as worker to false
                     ->setParameter('employeeUserIds', $employeeUserIds);
        
                    $query->execute();

                } else {
                    return $this->json(['message' => 'Employee IDs cannot be empty', 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
                }

                break;
            
            default:
                return $this->json(['message' => 'Action cannot be empty', 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
                break;
        }

        return $this->json(['message' => 'Employee records updated successfully', 'status' => 'success'], JsonResponse::HTTP_OK);
    }

    #[Route('/api/employee/bulk_update_v2', name: 'bulk_update_v2', methods: ['POST'])]
    public function bulkUpdateEmployeeV2(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data', 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $action = $data['action'];
        $employeeUserIds = $data['employeeUserIds'];

        if (empty($employeeUserIds) || $employeeUserIds === null) {
            return $this->json(['message' => 'Employee IDs cannot be empty', 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
        }

        switch ($action) {
            case 'is_project':
                if (!empty($employeeUserIds)) {
                    // Build the query to update the employees
                    $query = $this->entityManager->createQuery(
                        'UPDATE App\Entity\User e
                         SET e.is_assignable_proj = :newStatus
                         WHERE e.id IN (:employeeUserIds)'
                    )->setParameter('newStatus', true) //set assignable to project to true
                     ->setParameter('employeeUserIds', $employeeUserIds);
        
                    $query->execute();

                } else {
                    return $this->json(['message' => 'Employee IDs cannot be empty', 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
                }

                break;

            case 'remove_project':
                if (!empty($employeeUserIds)) {
                    // Build the query to update the employees
                    $query = $this->entityManager->createQuery(
                        'UPDATE App\Entity\User e
                         SET e.is_assignable_proj = :newStatus
                         WHERE e.id IN (:employeeUserIds)'
                    )->setParameter('newStatus', false) //set assignable to project to false
                     ->setParameter('employeeUserIds', $employeeUserIds);
        
                    $query->execute();

                } else {
                    return $this->json(['message' => 'Employee IDs cannot be empty', 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
                }

                break;

            case 'activate_acc':
                if (!empty($employeeUserIds)) {
                    // Build the query to update the employees
                    $query = $this->entityManager->createQuery(
                        'UPDATE App\Entity\User e
                         SET e.is_active = :newStatus
                         WHERE e.id IN (:employeeUserIds)'
                    )->setParameter('newStatus', true) //set employee active to true
                     ->setParameter('employeeUserIds', $employeeUserIds);
        
                    $query->execute();

                } else {
                    return $this->json(['message' => 'Employee IDs cannot be empty', 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
                }

                break;

            case 'deactivate_acc':
                if (!empty($employeeUserIds)) {
                    // Build the query to update the employees
                    $query = $this->entityManager->createQuery(
                        'UPDATE App\Entity\User e
                         SET e.is_active = :newStatus
                         WHERE e.id IN (:employeeUserIds)'
                    )->setParameter('newStatus', false) //set employee active to false
                     ->setParameter('employeeUserIds', $employeeUserIds);
        
                    $query->execute();

                } else {
                    return $this->json(['message' => 'Employee IDs cannot be empty', 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
                }

                break;
            
            default:
                return $this->json(['message' => 'Action cannot be empty', 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
                break;
        }

        return $this->json(['message' => 'Employee records updated successfully', 'status' => 'success'], JsonResponse::HTTP_OK);
    }

    #[Route('api/employee/archive', name: 'archive_employee', methods: ['POST'])]
    public function archiveEmployee(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $employeeId = $data['employee_id'] ?? null;
        if ($employeeId === null) {
            return $this->json(['message' => 'Employee ID is required'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $employeeRepo = $this->entityManager->getRepository(EmployeeRecords::class);
        $employee = $employeeRepo->find($employeeId);

        if (!$employee) {
            return $this->json(['message' => 'Employee not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $employee->setArchived(true);

        try {
            $this->entityManager->persist($employee);
            $this->entityManager->flush();

            $this->auditlog->addAuditLog($request, json_encode($employee, JSON_UNESCAPED_SLASHES), 'api/employee/archive', 'Archive Employee');

            return $this->json(['message' => 'Employee archive successful.'], JsonResponse::HTTP_OK);
        } catch (\Throwable $e) {
            $this->auditlog->addAuditLog($request, json_encode($e, JSON_UNESCAPED_SLASHES), 'api/employee/archive', 'Archive error Employee');
            return $this->json(['message' => "There's an error in code: " . $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    #[Route('/api/division', name: 'view_division', methods: ['GET'])]
    public function viewDivision(Request $request): JsonResponse
    {
        $validationResult = $this->validateAccess->validateUserAccess($request, 'division', 'view');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }
    
        try {
            $divisionRepo = $this->entityManager->getRepository(Division::class);
            $divisionItems = $divisionRepo->findByNotArchived();
            $divisionArray = array_map(function(Division $division) {
                //validate if director is null
                if($division->getDirector()){
                    $director = $division->getDirector();
                    $directorName = $director ? $director->getLastName() . ', ' . $director->getFirstName() . ' ' . $director->getMiddleName() : null;
                    $directorId = $director ? $director->getId() : null;
                }
                else{
                    $directorName = '';
                    $directorId = null;
                }
    
                return [
                    'id'                => $division->getId(),
                    'name'              => $division->getName(),
                    'code'              => $division->getCode(),
                    'description'       => $division->getDescription(),
                    'director'          => [
                        'name' => $directorName,
                        'id' => $directorId
                    ],
                ];
            }, $divisionItems);
    
            $this->auditlog->addAuditLog($request, json_encode($divisionArray), 'api/phase', 'View Division');
            return $this->json([
                'message' => 'Division retrieved successfully.',
                'division' => $divisionArray
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to retrieve Division.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/department', name: 'view_department', methods: ['GET'])]
    public function viewDepartment(Request $request): JsonResponse
    {
        $validationResult = $this->validateAccess->validateUserAccess($request, 'department', 'view');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }
        try {
            $departmentRepo = $this->entityManager->getRepository(Department::class);
            //$paginator = $departmentRepo->findAllPaginated(1,100);
            $departmentItem = $departmentRepo->findByNotArchived();
            $departmentArray = array_map(function(Department $department) {
                return [
                    'id'                => $department->getId(),
                    'name'              => $department->getName(),
                    'code'              => $department->getCode(),
                    'division_name'     => $department->getDivision() ? $department->getDivision()->getName() : '',
                    'division_id'     => $department->getDivision() ? $department->getDivision()->getId() : '',
                    'description'       => $department->getDescription(),
                    //'manager'          => $department->getManager()->getEmployeeRecords()->getFirstName(),
                ];
            }, $departmentItem);
            $this->auditlog->addAuditLog($request, json_encode($departmentArray), 'api/phase', 'View Division');
            return $this->json([
                'message' => 'Division retrieved successfully.',
                'department' => $departmentArray
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to retrieve Division.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/department/create', name: 'create_department', methods: ['POST'])]
    public function createDepartment(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $validationResult = $this->validateAccess->validateUserAccess($request, 'department', 'add');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        $divisionId = $data['division_id'] ?? null;
        if ($divisionId === null) {
            return $this->json(['message' => 'Division ID is required'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $divisionRepo = $this->entityManager->getRepository(Division::class);
        $division = $divisionRepo->find($divisionId);

        if (!$division) {
            return $this->json(['message' => 'Division not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        //validate division if code is existing
        $departmentRepo = $this->entityManager->getRepository(Department::class);
        $departmentItem = $departmentRepo->findOneBy(['code' => $data['code']]);
        if ($departmentItem) {
            return $this->json(['message' => 'Department code already exists'], JsonResponse::HTTP_CONFLICT);
        }
    
        try {
            $this->entityManager->beginTransaction();
    
            $department = new Department();
            $department->setName($data['name']);
            $department->setCode($data['code']);
            $department->setDescription($data['description']);
            $department->setDivision($division);
    
            if (isset($data['manager_id'])) {
                $managerRepo = $this->entityManager->getRepository(EmployeeRecords::class);
                $manager = $managerRepo->find($data['manager_id']);
                if (!$manager) {
                    return $this->json(['message' => 'Manager not found'], JsonResponse::HTTP_NOT_FOUND);
                }
                $department->setManager($manager);
            } else {
                $department->setManager(null);
            }
    
            // Validate the entity
            $errors = $this->validator->validate($department);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return new JsonResponse(['errors' => $errorMessages], JsonResponse::HTTP_BAD_REQUEST);
            }
    
            // Persist the entity
            $this->entityManager->persist($department);
            $this->entityManager->flush();
            $this->entityManager->commit();
    
            // Move audit logging to a separate service or event listener
            $this->auditlog->addAuditLog($request, json_encode($department, JSON_UNESCAPED_SLASHES), 'api/department/create', 'Create');
    
            return $this->json(['message' => 'Department created successfully.'], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            $this->entityManager->rollback();
            return $this->json(['message' => "There's an error in code: ".$e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/department/update/{id}', name: 'update_department', methods: ['PUT'])]
    public function updateDepartment(int $id, Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $validationResult = $this->validateAccess->validateUserAccess($request, 'department', 'edit');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        $department = $this->entityManager->getRepository(Department::class)->find($id);
        if (!$department) {
            return $this->json(['message' => 'Department not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        try {
            $this->entityManager->beginTransaction();

            $department->setName($data['name'] ?? $department->getName());
            $department->setCode($data['code'] ?? $department->getCode());
            $department->setDescription($data['description'] ?? $department->getDescription());

            if (isset($data['manager_id'])) {
                $managerRepo = $this->entityManager->getRepository(EmployeeRecords::class);
                $manager = $managerRepo->find($data['manager_id']);
                if ($manager) {
                    $department->setManager($manager);
                }
               
            }

            if (isset($data['division_id'])) {
                $divisionRepo = $this->entityManager->getRepository(Division::class);
                $division = $divisionRepo->find($data['division_id']);
                if (!$division) {
                    return $this->json(['message' => 'Division not found'], JsonResponse::HTTP_NOT_FOUND);
                }
                $department->setDivision($division);
            }

            // Validate the entity
            $errors = $this->validator->validate($department);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return new JsonResponse(['errors' => $errorMessages], JsonResponse::HTTP_BAD_REQUEST);
            }

            // Persist the entity
            $this->entityManager->flush();
            $this->entityManager->commit();

            // Move audit logging to a separate service or event listener
            $this->auditlog->addAuditLog($request, json_encode($department, JSON_UNESCAPED_SLASHES), 'api/department/update', 'Update');

            return $this->json(['message' => 'Department updated successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            $this->entityManager->rollback();
            return $this->json(['message' => "There's an error in code: ".$e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/department/archive/{id}', name: 'archive_department', methods: ['PATCH'])]
    public function archiveDepartment(int $id, Request $request): JsonResponse
    {
        $department = $this->entityManager->getRepository(Department::class)->find($id);
        if (!$department) {
            return $this->json(['message' => 'Department not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $validationResult = $this->validateAccess->validateUserAccess($request, 'department', 'delete');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        try {
            $this->entityManager->beginTransaction();

            $department->setArchived(true);

            // Validate the entity
            $errors = $this->validator->validate($department);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return new JsonResponse(['errors' => $errorMessages], JsonResponse::HTTP_BAD_REQUEST);
            }

            // Persist the entity
            $this->entityManager->flush();
            $this->entityManager->commit();

            // Move audit logging to a separate service or event listener
            $this->auditlog->addAuditLog($request, json_encode($department, JSON_UNESCAPED_SLASHES), 'api/department/archive', 'Archive');

            return $this->json(['message' => 'Department archived successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            $this->entityManager->rollback();
            return $this->json(['message' => "There's an error in code: ".$e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }



    #[Route('/api/division/create', name: 'create_division', methods: ['POST'])]
    public function createDivision(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $validationResult = $this->validateAccess->validateUserAccess($request, 'division', 'add');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        // validate Division Code if existing
        $divisionRepo = $this->entityManager->getRepository(Division::class);
        $divisionItem = $divisionRepo->findOneBy(['code' => $data['code']]);
        if ($divisionItem) {
            return $this->json(['message' => 'Division code already exists'], JsonResponse::HTTP_CONFLICT);
        }

        try {
            $this->entityManager->beginTransaction();

            $division = new Division();
            $division->setName($data['name']);
            $division->setCode($data['code']);
            $division->setDescription($data['description']);

            if (isset($data['director_id'])) {
                $directorRepo = $this->entityManager->getRepository(EmployeeRecords::class);
                $director = $directorRepo->find($data['director_id']);
                if (!$director) {
                    return $this->json(['message' => 'Director not found'], JsonResponse::HTTP_NOT_FOUND);
                }
                $division->setDirector($director);
            } else {
                $division->setDirector(null);
            }

            // Validate the entity
            $errors = $this->validator->validate($division);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return new JsonResponse(['errors' => $errorMessages], JsonResponse::HTTP_BAD_REQUEST);
            }

            // Persist the entity
            $this->entityManager->persist($division);
            $this->entityManager->flush();
            $this->entityManager->commit();

            // Move audit logging to a separate service or event listener
            $this->auditlog->addAuditLog($request, json_encode($division, JSON_UNESCAPED_SLASHES), 'api/division/create', 'Create');

            return $this->json(['message' => 'Division created successfully.'], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            $this->entityManager->rollback();
            return $this->json(['message' => "There's an error in code: ".$e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/division/list', name: 'get_division_list', methods: ['GET'])]
    public function getDivision(Request $request): JsonResponse
    {
        $validationResult = $this->validateAccess->validateUserAccess($request, 'division', 'view');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        try {
            $divisionRepo = $this->entityManager->getRepository(Division::class);
            $divisions = $divisionRepo->findByNotArchived();
            $divisionArray = array_map(function(Division $division) {
                $departments = array_map(function(Department $department) {
                    return [
                        'id' => $department->getId(),
                        'code' => $department->getCode(),
                        'name' => $department->getName(),
                        'description' => $department->getDescription(),
                    ];
                }, $division->getDepartments()->toArray());
                return [
                    'id'                => $division->getId(),
                    'name'              => $division->getName(),
                    'code'              => $division->getCode(),
                    'description'       => $division->getDescription(),
                    'departments'       => $departments,
                    //'director'          => $division->getDirector()->getEmployeeRecords()->getFirstName(),
                ];
            }, $divisions);
            $this->auditlog->addAuditLog($request, json_encode($divisionArray), 'api/division/list', 'Get Division with Departments');
            return $this->json([
                'message' => 'Division retrieved successfully.',
                'division' => $divisionArray
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return $this->json([
                'error' => 'Failed to retrieve Division.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }   
    } 
    
    #[Route('/api/division/update/{id}', name: 'update_division', methods: ['PUT'])]
    public function updateDivision(int $id, Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $validationResult = $this->validateAccess->validateUserAccess($request, 'division', 'edit');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        $division = $this->entityManager->getRepository(Division::class)->find($id);
        if (!$division) {
            return $this->json(['message' => 'Division not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        // validate if division code is existing but not the same as the current one
        $divisionRepo = $this->entityManager->getRepository(Division::class);
        $existingDivision = $divisionRepo->findOneBy(['code' => $data['code']]);
        if ($existingDivision && $existingDivision->getId() !== $division->getId()) {
            return $this->json(['message' => 'Division code already exists'], JsonResponse::HTTP_CONFLICT);
        }

        try {
            $this->entityManager->beginTransaction();

            $division->setName($data['name'] ?? $division->getName());
            $division->setCode($data['code'] ?? $division->getCode());
            $division->setDescription($data['description'] ?? $division->getDescription());

            if (isset($data['director_id'])) {
                $directorRepo = $this->entityManager->getRepository(EmployeeRecords::class);
                $director = $directorRepo->find($data['director_id']);
                if (!$director) {
                    return $this->json(['message' => 'Director not found'], JsonResponse::HTTP_NOT_FOUND);
                }
                $division->setDirector($director);
            } else {
                $division->setDirector(null);
            }

            // Validate the entity
            $errors = $this->validator->validate($division);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return new JsonResponse(['errors' => $errorMessages], JsonResponse::HTTP_BAD_REQUEST);
            }

            // Persist the entity
            $this->entityManager->flush();
            $this->entityManager->commit();

            // Move audit logging to a separate service or event listener
            $this->auditlog->addAuditLog($request, json_encode($division, JSON_UNESCAPED_SLASHES), 'api/division/update', 'Update');

            return $this->json(['message' => 'Division updated successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            $this->entityManager->rollback();
            return $this->json(['message' => "There's an error in code: ".$e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/division/archive/{id}', name: 'archive_division', methods: ['PATCH'])]
    public function archiveDivision(int $id, Request $request): JsonResponse
    {
        $division = $this->entityManager->getRepository(Division::class)->find($id);
        if (!$division) {
            return $this->json(['message' => 'Division not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $validationResult = $this->validateAccess->validateUserAccess($request, 'division', 'delete');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        try {
            $this->entityManager->beginTransaction();

            $division->setArchived(true);

            // Validate the entity
            $errors = $this->validator->validate($division);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return new JsonResponse(['errors' => $errorMessages], JsonResponse::HTTP_BAD_REQUEST);
            }

            // Persist the entity
            $this->entityManager->flush();
            $this->entityManager->commit();

            // Move audit logging to a separate service or event listener
            $this->auditlog->addAuditLog($request, json_encode($division, JSON_UNESCAPED_SLASHES), 'api/division/archive', 'Archive');

            return $this->json(['message' => 'Division archived successfully.'], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            $this->entityManager->rollback();
            return $this->json(['message' => "There's an error in code: ".$e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/employee201', name: 'list_emp201', methods: ['GET'])]
    public function listEmp201(Request $request, EntityManagerInterface $entityManager, SerializerInterface $serializer): JsonResponse
    {        
        try {
            $employeeRepo = $entityManager->getRepository(EmployeeRecords::class);
            //$paginator = $employeeRepo->findAllPaginated($page, 5);
            // Get the items from the Paginator
            //$employeeArray = $serializer->serialize($paginator->getIterator()->getArrayCopy(), 'json', ['groups' => 'employee']);
            $employees = $employeeRepo->findByNotArchived();
            $employeeArray = $serializer->serialize($employees, 'json', ['groups' => 'employee']);

            // Add audit log
            $this->auditlog->addAuditLog($request, $employeeArray, 'api/employee201/list', 'View Employees');

            return new JsonResponse([
                'message' => 'Employees retrieved successfully.',
                'employees' => json_decode($employeeArray)
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return new JsonResponse([
                'error' => 'Failed to retrieve employees.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/employee201/assignable', name: 'list_assignable_emp201', methods: ['GET'])]
    public function listAssignableEmp201(Request $request, EntityManagerInterface $entityManager, SerializerInterface $serializer): JsonResponse
    {
        try {
            $employeeRepo = $entityManager->getRepository(EmployeeRecords::class);

            // Fetch employees that are not archived
            $employees = $employeeRepo->findByNotArchived();

            // Filter employees where isAssignableProj is true
            $assignableEmployees = array_filter($employees, function ($employee) {
                return $employee->getUser() && $employee->getUser()->isAssignableProj();
            });

            // Serialize the filtered employees
            $employeeArray = $serializer->serialize($assignableEmployees, 'json', ['groups' => 'employee']);

            // Add audit log
            $this->auditlog->addAuditLog($request, $employeeArray, 'api/employee201/assignable', 'View Assignable Employees');

            return new JsonResponse([
                'message' => 'Assignable employees retrieved successfully.',
                'employees' => json_decode($employeeArray),
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return new JsonResponse([
                'error' => 'Failed to retrieve assignable employees.',
                'message' => $e->getMessage(),
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/employee201/emp_proj/{id}', name: 'list_emp201_filtered', methods: ['GET'])]
    public function listEmp201Filtered(Request $request, string $id, EntityManagerInterface $entityManager, SerializerInterface $serializer): JsonResponse
    {    
        $emp_in_proj = $entityManager->getRepository(EmployeeProjects::class)->findBy(['project' => $id]);
        // if (!$emp_in_proj) {
        //     return $this->json(['message' => 'Employee Project not found', 'employees' => []], JsonResponse::HTTP_OK);
        // }
    
        try {
            $employeeRepo = $entityManager->getRepository(EmployeeRecords::class);
            $employees = $employeeRepo->findByNotArchived();
    
            // Get employees in the project
            $projectEmployeeIds = array_map(function ($ep) {
                return $ep->getEmployee()->getId();
            }, $emp_in_proj);
    
            // Filter employees to exclude those in the project and ensure they are assignable
            $filteredEmployees = array_filter($employees, function ($employee) use ($projectEmployeeIds) {
                return !in_array($employee->getId(), $projectEmployeeIds) && $employee->getUser()->isAssignableProj();
            });
    
            $employeeArray = $serializer->serialize($filteredEmployees, 'json', ['groups' => 'employee']);
    
            // Add audit log
            $this->auditlog->addAuditLog($request, $employeeArray, 'api/employee201/list', 'View Employees');
    
            return new JsonResponse([
                'message' => 'Employees retrieved successfully.',
                'employees' => json_decode($employeeArray)
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return new JsonResponse([
                'error' => 'Failed to retrieve employees.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    

    #[Route('/api/emp_paginated', name: 'list_emp_paginated', methods: ['POST'])]
    public function empPaginated(Request $request, EntityManagerInterface $entityManager, SerializerInterface $serializer): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $page = $data['page'];
        $limit = $data['limit'] ?? 50;
        $search = $data['search'] ?? null;
        $filter_status = $data['filter_status'] ?? [];
        
        try {
            $employeeRepo = $entityManager->getRepository(EmployeeRecords::class);
            
            // Get paginated results for the current page
            $paginator = $employeeRepo->findBySearchPaginatedWithFilter($search, $page, $limit, $filter_status);
            $employeeArray = $serializer->serialize($paginator->getIterator()->getArrayCopy(), 'json', ['groups' => 'employee']);
            
            // Get the total count with the same search and filter criteria but without pagination
            $totalEmployees = $employeeRepo->countFilteredEmployees($search, $filter_status);
    
            return new JsonResponse([
                'message' => 'Employees retrieved successfully.',
                'employees' => json_decode($employeeArray),
                'totalEmployees' => $totalEmployees
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return new JsonResponse([
                'error' => 'Failed to retrieve employees.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    

    #[Route('/api/worker', name: 'view_worker_list' , methods: ['GET'])]
    public function viewWorker(Request $request): JsonResponse
    {
        try {
            // Fetch workers with pagination
            $page = $request->query->getInt('page', 1);
            $limit = $request->query->getInt('limit', 3000); // Adjust limit as needed

            $workerRepo = $this->entityManager->getRepository(Worker::class);
            // $query = $workerRepo->createQueryBuilder('w')
            //     ->setFirstResult(($page - 1) * $limit)
            //     ->setMaxResults($limit)
            //     ->getQuery();

            $workers = $workerRepo->findAllWithEmpRecordAndLogs();

            $workerArray = $this->serializer->serialize($workers, 'json', ['groups' => 'worker']);
            $this->auditlog->addAuditLog($request, $workerArray, '/api/worker', 'View Worker');

            return new JsonResponse([
                'message' => 'Workers retrieved successfully.',
                'workers' => json_decode($workerArray),
                'total_workers' => count($workers),
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            //$this->logger->error('An unexpected error occurred: ' . $e->getMessage(), ['exception' => $e]);
            return new JsonResponse([
                'error' => 'Failed to retrieve workers.',
                'message' => 'An unexpected error occurred. Please try again later '.$e
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/worker_id/{id}', name: 'view_worker_id' , methods: ['GET'])]
    public function viewWorkerId(Request $request, string $id): JsonResponse
    {
        try {
            // Fetch workers with pagination
            $page = $request->query->getInt('page', 1);
            $limit = $request->query->getInt('limit', 3000); // Adjust limit as needed

            $workerRepo = $this->entityManager->getRepository(Worker::class);
            // $query = $workerRepo->createQueryBuilder('w')
            //     ->setFirstResult(($page - 1) * $limit)
            //     ->setMaxResults($limit)
            //     ->getQuery();

            $workers = $workerRepo->findOneWithEmpRecordAndLogs($id);

            $workerArray = $this->serializer->serialize($workers, 'json', ['groups' => 'worker']);
            $this->auditlog->addAuditLog($request, $workerArray, '/api/worker', 'View Worker');

            return new JsonResponse([
                'message' => 'Workers retrieved successfully.',
                'workers' => json_decode($workerArray),
                'total_workers' => count($workers),
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            //$this->logger->error('An unexpected error occurred: ' . $e->getMessage(), ['exception' => $e]);
            return new JsonResponse([
                'error' => 'Failed to retrieve workers.',
                'message' => 'An unexpected error occurred. Please try again later '.$e
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/worker/{id}', name: 'view_worker_logs_id' , methods: ['POST'])]
    public function viewWorkerLogs(Request $request, string $id): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        try {
            // Fetch workers with pagination
            $workerRepo = $this->entityManager->getRepository(Worker::class);
            $workerLogsRepo = $this->entityManager->getRepository(WorkerLogs::class);
            $startDate = $data['start_date'];
            $endDate = $data['end_date'];
            
            $startDate = $startDate ? \DateTime::createFromFormat('Y-m-d', $startDate) : null;
            if ($startDate) {
                $startDate->setTime(0, 0, 0); // Set start time to 00:00:00
            }

            $endDate = $endDate ? \DateTime::createFromFormat('Y-m-d', $endDate) : null;
            if ($endDate) {
                $endDate->setTime(23, 59, 59); // Set end time to 23:59:59
            }
            else{
                $endDate = $startDate;
                $endDate->setTime(23, 59, 59);
            }
            //$endDate = $endDateStr ? \DateTime::createFromFormat('Y-m-d', $endDateStr) : null;
            //$loginDate = $loginDateStr ? \DateTime::createFromFormat('Y-m-d', $loginDateStr) : null;
            //var_dump($loginDate);
            $worker = $workerRepo->findOneBy(['id'=> $id]);
            $emp_record_id = $worker->getEmpRecord()->getId();
            $workerLogs = $workerLogsRepo->findByUserAndDateRange($worker->getId(), $startDate,$endDate);
            $workerLogsArray = $this->serializer->serialize($workerLogs, 'json', ['groups' => 'worker_logs']);
            $this->auditlog->addAuditLog($request, $workerLogsArray, '/api/worker/'.$id, 'View Worker');

            return new JsonResponse([
                'message'           => 'Worker Logs retrieved successfully.',
                'worker_logs'       => json_decode($workerLogsArray),
                'emp_record_id'     => $emp_record_id,
                'total_workers'     => count($workerLogs),
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            //$this->logger->error('An unexpected error occurred: ' . $e->getMessage(), ['exception' => $e]);
            return new JsonResponse([
                'error' => 'Failed to retrieve worker logs.',
                'message' => 'An unexpected error occurred. Please try again later '.$e
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/employee/profile', name: 'employee_profile', methods: ['GET'])]
    public function getEmployee(Request $request, EntityManagerInterface $entityManager, SerializerInterface $serializer): JsonResponse
    {

        $data = json_decode($request->getContent(), true);
        //dd($data);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $employeeCode = $data['employee_code'] ?? null;
        if ($employeeCode === null) {
            return $this->json(['message' => 'Employee Code is required'], JsonResponse::HTTP_BAD_REQUEST);
        }

        try {
            $employeeRepo = $entityManager->getRepository(EmployeeRecords::class);
            $employees = $employeeRepo->findByCode($employeeCode);
            $employeeArray = $serializer->serialize($employees, 'json', ['groups' => 'employee']);
            $emp_workers = $employees->getWorkers();
            $worker_id = '';
            $data = [];
            foreach($emp_workers as $worker){
                $worker_id = $worker->getId();
                $data[] = [
                    "worker_id" => $worker->getId(),
                ];
            }
            // Add audit log
            $this->auditlog->addAuditLog($request, $employeeArray, 'api/employee/profile', 'Get Employee');

            return new JsonResponse([
                'message' => 'Employees retrieved successfully.',
                'employeeData' => json_decode($employeeArray),
                'emp_workers' => $data,
                'worker_id' => $worker_id,
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            // Log the error or handle it appropriately
            return new JsonResponse([
                'error' => 'Failed to retrieve employees.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/worker_logs', name: 'view_worker_logs' , methods: ['POST'])]
    public function viewAllWorkerLogs(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        try {
            $workerLogsRepo = $this->entityManager->getRepository(WorkerLogs::class);
            // $query = $workerRepo->createQueryBuilder('w')
            //     ->setFirstResult(($page - 1) * $limit)
            //     ->setMaxResults($limit)
            //     ->getQuery();

            //$loginDate = $data['date'];
            $startDate = $data['start_date'];
            $endDate = $data['end_date'];
            $startDate = $startDate ? \DateTime::createFromFormat('Y-m-d', $startDate) : null;
            if ($startDate) {
                $startDate->setTime(0, 0, 0); // Set start time to 00:00:00
            }

            $endDate = $endDate ? \DateTime::createFromFormat('Y-m-d', $endDate) : null;
            if ($endDate) {
                $endDate->setTime(23, 59, 59); // Set end time to 23:59:59
            }
            else{
                $endDate = $startDate;
                $endDate->setTime(23, 59, 59);
            }
            //$endDate = $endDateStr ? \DateTime::createFromFormat('Y-m-d', $endDateStr) : null;
            //$loginDate = $loginDateStr ? \DateTime::createFromFormat('Y-m-d', $loginDateStr) : null;
            //var_dump($loginDate);
            $workerLogs = $workerLogsRepo->findByDateRange($startDate,$endDate);

            $workerLogsArray = $this->serializer->serialize($workerLogs, 'json', ['groups' => 'all_worker_logs']);
            $this->auditlog->addAuditLog($request, $workerLogsArray, '/api/worker_logs', 'View Worker');

            return new JsonResponse([
                'message' => 'Worker Logs retrieved successfully.',
                'worker_logs' => json_decode($workerLogsArray),
                'total_workers' => count($workerLogs),
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            //$this->logger->error('An unexpected error occurred: ' . $e->getMessage(), ['exception' => $e]);
            return new JsonResponse([
                'error' => 'Failed to retrieve worker logs.',
                'message' => 'An unexpected error occurred. Please try again later '.$e
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/employee-projects', name: 'view_employee_projects', methods: ['GET'])]
    public function viewEmployeeProjects(ProjectRepository $repository): JsonResponse
    {
        $employeeProjects = $repository->findByNotArchived();
        $employeeProjectsArray = $this->serializer->serialize($employeeProjects, 'json', ['groups' => 'emp_projects']);

        return $this->json([
            'message' => 'Employee projects retrieved successfully.',
            'employee_projects' => json_decode($employeeProjectsArray),
        ], JsonResponse::HTTP_OK);
    }
    
    //New API for calling task
    #[Route('/api/employee-projects/filter', name: 'view_filter_employee_projects', methods: ['POST'])]
    public function viewFilterEmployeeProjects(
        Request $request,
        ProjectRepository $projectRepo,
        EmployeeRecordsRepository $employeeRepo,
        EmpTaskRepository $emptask,
        SerializerInterface $serializer,
        EmployeeProjectsRepository $empproject
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);
    
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        $startDate = isset($data['start_date']) ? new \DateTime($data['start_date']) : null;
        $endDate = isset($data['end_date']) ? new \DateTime($data['end_date']) : null;
    
        if (!$startDate || !$endDate) {
            return $this->json(['message' => 'Start date and end date are required'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        $project = $projectRepo->find($data['project_id']);
        $employee = $employeeRepo->find($data['employee_id']);
    
        if (!$project || !$employee) {
            return $this->json(['message' => 'Invalid project or employee ID'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        $employeeProjects = $empproject->findOneBy(['project' => $project, 'employee' => $employee]);
    
        if (!$employeeProjects) {
            return $this->json(['message' => 'No employee projects found'], JsonResponse::HTTP_NOT_FOUND);
        }
    
        $empTasks = $emptask->findOneByNotArchivedWithDate($employeeProjects->getId(), $startDate, $endDate);
    
        if (!$empTasks) {
            return $this->json([
                'message' => 'Employee projects retrieved successfully.',
                'tasks' => []
            ], JsonResponse::HTTP_OK);
        }
    
        $empTasksArray = $serializer->serialize($empTasks, 'json', ['groups' => 'emp_task']);
    
        return $this->json([
            'message' => 'Employee projects retrieved successfully.',
            'tasks' => json_decode($empTasksArray)
        ], JsonResponse::HTTP_OK);
    }
    

    #[Route('/api/employee-projects/{id}', name: 'view_employee_projects_id', methods: ['GET'])]
    public function viewEmployeeProjectsId(ProjectRepository $repository, string $id): JsonResponse
    {
        $employeeProjects = $repository->find(intval($id));
        $employeeProjectsArray = $this->serializer->serialize($employeeProjects, 'json', ['groups' => 'emp_projects']);
        return $this->json([
            'message' => 'Employee projects retrieved successfully.',
            'employee_projects' => json_decode($employeeProjectsArray),
        ], JsonResponse::HTTP_OK);
    }

    #[Route('/api/employee-projects-list/{id}', name: 'view_employee_projects_list_id', methods: ['POST'])]
    public function viewEmployeeProjectsList(EmployeeProjectsRepository $repository, string $id, Request $request): JsonResponse
    {
        $workerRepo = $this->entityManager->getRepository(Worker::class);
        $workerItem = $workerRepo->find($id);
    
        $startDate = $request->query->get('start_date');
        $endDate = $request->query->get('end_date');
    
        $startDate = $startDate ? \DateTime::createFromFormat('Y-m-d', $startDate) : null;
        $endDate = $endDate ? \DateTime::createFromFormat('Y-m-d', $endDate) : null;
    
        $employeeProjectsList = $repository->findBy(['employee' => $workerItem->getEmpRecord()->getId()]);

        $employeeProjectsArray = $this->serializer->serialize($employeeProjectsList, 'json', ['groups' => 'emp_proj_list']);
        return $this->json([
            'message' => 'Employee projects retrieved successfully.',
            'employee_projects' => json_decode($employeeProjectsArray),
        ], JsonResponse::HTTP_OK);
    }
    

    #[Route('/api/employee-projects/create', name: 'create_employee_projects', methods: ['POST'])]
    public function createEmployeeProjects(Request $request, EntityManagerInterface $entityManager, ProjectRepository $projectRepo, EmployeeRecordsRepository $employeeRepo): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $project = $projectRepo->find($data['project_id']);
        $employee = $employeeRepo->find($data['employee_id']);

        if (!$project || !$employee) {
            return $this->json(['message' => 'Invalid project or employee ID'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $exsitingEmpProject = $this->entityManager->getRepository(EmployeeProjects::class)->findOneBy(['project' => $project, 'employee' => $employee]);

        if(!$exsitingEmpProject){
            $employeeProject = new EmployeeProjects();
            $employeeProject->setProject($project);
            $employeeProject->setEmployee($employee);
            $employeeProject->setAssigned(true);
            // $employeeProject->setDate(new \DateTime($data['date']));
            // $employeeProject->setAssignedHours($data['assigned_hours']);
            // $employeeProject->setTask($data['task']);

            $entityManager->persist($employeeProject);
            $entityManager->flush();
            return $this->json(['message' => 'Employee project created successfully.'], JsonResponse::HTTP_CREATED);
        }
        else{
            $exsitingEmpProject->setAssigned(true);
            $entityManager->persist($exsitingEmpProject);
            $entityManager->flush();
            return $this->json(['message' => 'Employee project updated successfully.'], JsonResponse::HTTP_CREATED);
        }        
    }

    #[Route('/api/employee-projects/update', name: 'update_employee_projects', methods: ['POST'])]
    public function updateEmployeeProjects(Request $request, EntityManagerInterface $entityManager, EmployeeProjectsRepository $repository, ProjectRepository $projectRepo, EmployeeRecordsRepository $employeeRepo): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $employeeProject = $repository->find($data['id']);
        if (!$employeeProject) {
            return $this->json(['message' => 'Employee project not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $project = $projectRepo->find($data['project_id']);
        $employee = $employeeRepo->find($data['employee_id']);

        if (!$project || !$employee) {
            return $this->json(['message' => 'Invalid project or employee ID'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $employeeProject->setProject($project);
        $employeeProject->setEmployee($employee);
        $employeeProject->setDate(new \DateTime($data['date']));
        $employeeProject->setAssignedHours($data['assigned_hours']);
        $employeeProject->setTask($data['task']);

        $entityManager->persist($employeeProject);
        $entityManager->flush();

        return $this->json(['message' => 'Employee project updated successfully.'], JsonResponse::HTTP_OK);
    }

    #[Route('/api/employee-projects/archive/{id}', name: 'archive_employee_projects', methods: ['DELETE'])]
    public function archiveEmployeeProjects(EntityManagerInterface $entityManager, EmployeeProjectsRepository $repository, int $id): JsonResponse
    {
        $employeeProject = $repository->find($id);
        if (!$employeeProject) {
            return $this->json(['message' => 'Employee project not found'], JsonResponse::HTTP_NOT_FOUND);
        }
        
        $employeeProject->setArchived(true);
        $employeeProject->setAssigned(false);
        $entityManager->persist($employeeProject);
        $entityManager->flush();

        return $this->json(['message' => 'Employee project archived successfully.'], JsonResponse::HTTP_OK);
    }

    #[Route('/api/employee-projects/unassign', name: 'unassign_employee_projects', methods: ['POST'])]
    public function unassignEmployeeProjects(Request $request, EntityManagerInterface $entityManager, EmployeeProjectsRepository $repository): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $emp_id = $data['employee_id'];
        if(empty($emp_id)){
            return $this->json(['message' => 'Employee ID must not be emopty'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $proj_id = $data['project_id'];
        if(empty($proj_id)){
            return $this->json(['message' => 'Project ID must not be emopty'], JsonResponse::HTTP_BAD_REQUEST);
        }


        $employeeProject = $repository->findOneBy(['project' => $proj_id, 'employee' => $emp_id]);
        if (!$employeeProject) {
            return $this->json(['message' => 'Employee project not found'], JsonResponse::HTTP_NOT_FOUND);
        }
        
        $employeeProject->setAssigned(false);
        $entityManager->persist($employeeProject);
        $entityManager->flush();

        return $this->json(['message' => 'Employee project unassigned successfully.'], JsonResponse::HTTP_OK);
    }

    #[Route('/api/emp-tasks-list', name: 'view_emp_tasks_list', methods: ['GET'])]
    public function viewListEmpTasks(EmpTaskRepository $repository): JsonResponse
    {
        $empTasks = $repository->findByNotArchived();
        $empTasksArray = $this->serializer->serialize($empTasks, 'json', ['groups' => 'emp_task_list']);

        return $this->json([
            'message' => 'Employee tasks retrieved successfully.',
            'emp_tasks' => json_decode($empTasksArray),
        ], JsonResponse::HTTP_OK);
    }

    #[Route('/api/emp-tasks/{emp_proj_id}', name: 'view_emp_tasks', methods: ['GET'])]
    public function viewEmpTasks(EmpTaskRepository $repository, string $emp_proj_id): JsonResponse
    {
        $empTasks = $repository->findOneByNotArchived(intval($emp_proj_id));
        $empTasksArray = $this->serializer->serialize($empTasks, 'json', ['groups' => 'emp_task_list']);

        return $this->json([
            'message' => 'Employee tasks retrieved successfully.',
            'emp_tasks' => json_decode($empTasksArray),
        ], JsonResponse::HTTP_OK);
    }

    #[Route('/api/emp-tasks-emp-id', name: 'view_emp_tasks_emp_id', methods: ['POST'])]
    public function viewEmpTasksUsingEmpId(EmpTaskRepository $repository, Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $employee_id = $data['employee_id'];

        // Ensure the parameters are valid
        if ($employee_id === null) {
            return $this->json([
                'message' => 'Invalid parameters.',
            ], JsonResponse::HTTP_BAD_REQUEST);
        }

        $startDate = $data['date_start'] ? \DateTime::createFromFormat('Y-m-d', $data['date_start']) : null;
        $endDate = $data['date_end'] ? \DateTime::createFromFormat('Y-m-d', $data['date_end']) : null;

        if ($startDate) {
            $startDate->setTime(0, 0, 0); // Set start time to 00:00:00
        }
        
        if ($endDate) {
            $endDate->setTime(23, 59, 59); // Set end time to 23:59:59
        } else if ($startDate) {
            $endDate = clone $startDate;
            $endDate->setTime(23, 59, 59);
        }

        $empProjectRepository = $this->entityManager->getRepository(EmployeeProjects::class);
        $empProjItems = $empProjectRepository->findBy(["employee" => $employee_id]);

        if (empty($empProjItems)) {
            return $this->json([
                'message' => 'No employee tasks found.',
                'emp_tasks' => [],
            ], JsonResponse::HTTP_OK);
        }

        $allEmpTasks = [];
        foreach ($empProjItems as $empProjItem) {
            if ($startDate || $endDate) {
                $empTasks = $repository->findOneByNotArchivedWithDate($empProjItem->getId(), $startDate, $endDate);
            } else {
                $empTasks = $repository->findOneByNotArchived($empProjItem->getId());
            }

            foreach ($empTasks as $task) {
                $allEmpTasks[] = $task;
            }
        }

        $empTasksArray = $this->serializer->serialize($allEmpTasks, 'json', ['groups' => 'emp_task_list']);

        return $this->json([
            'message' => 'Employee tasks retrieved successfully.',
            'emp_tasks' => json_decode($empTasksArray),
        ], JsonResponse::HTTP_OK);
    }


    // #[Route('/api/emp-tasks/create', name: 'create_emp_task', methods: ['POST'])]
    // public function createEmpTask(Request $request, EntityManagerInterface $entityManager): JsonResponse
    // {
    //     $data = json_decode($request->getContent(), true);

    //     if (json_last_error() !== JSON_ERROR_NONE) {
    //         return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
    //     }

    //     $empProject = $this->entityManager->getRepository(EmployeeProjects::class)->find($data['emp_project']);
    //     if (!$empProject) {
    //         return $this->json(['message' => 'Employee Project task not found'], JsonResponse::HTTP_NOT_FOUND);
    //     }

    //     $empTask = new EmpTask();
    //     $empTask->setEmpProject($empProject);
    //     $empTask->setTaskDesc($data['task_desc']);
    //     $empTask->setAssignedHours($data['assigned_hours']);
    //     $empTask->setDate(new \DateTime($data['task_date']));

    //     $entityManager->persist($empTask);
    //     $entityManager->flush();

    //     return $this->json(['message' => 'Employee task created successfully.'], JsonResponse::HTTP_CREATED);
    // }

    #[Route('/api/emp-tasks/create', name: 'create_emp_task', methods: ['POST'])]
    public function createEmpTask(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $empProject = $this->entityManager->getRepository(EmployeeProjects::class)->find($data['emp_project']);
        if (!$empProject) {
            return $this->json(['message' => 'Employee Project task not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        try {
            $startDate = new \DateTime($data['start_date']);
            $endDate = new \DateTime($data['end_date']);

            if ($startDate > $endDate) {
                return $this->json(['message' => 'Start date cannot be greater than end date'], JsonResponse::HTTP_BAD_REQUEST);
            }

            $interval = new \DateInterval('P1D');
            $dateRange = new \DatePeriod($startDate, $interval, $endDate->modify('+1 day')); // End date is inclusive

            foreach ($dateRange as $date) {
                $empTask = new EmpTask();
                $empTask->setEmpProject($empProject);
                $empTask->setTaskDesc($data['task_desc']);
                $empTask->setAssignedHours($data['assigned_hours']);
                $empTask->setDate($date);

                $entityManager->persist($empTask);
            }

            $entityManager->flush();

            return $this->json(['message' => 'Employee tasks created successfully.'], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            return $this->json(['message' => 'An error occurred while creating tasks.', 'error' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/emp-tasks-dtr/create', name: 'create_emp_dtr_task', methods: ['POST'])]
    public function createDTREmpTask(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $currentEmpProject = '';

        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        if($data['project_id'] == ''){
            return $this->json(['message' => 'Project must not be empty'], JsonResponse::HTTP_BAD_REQUEST);
        }

        if($data['employee_id'] == ''){
            return $this->json(['message' => 'Employee must not be empty'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $projectId = $data['project_id'];
        $employeeId = $data['employee_id'];
        //print_r($projectId);
        //get emp projects repo
        $empProjectRepo = $this->entityManager->getRepository(EmployeeProjects::class);
        //get projects repo
        $projectRepo = $this->entityManager->getRepository(Project::class);
        $selectedProject = $projectRepo->find($projectId);
        //validate if project is existing
        if(!$selectedProject){
            return $this->json(['message' => 'Project is not existing'], JsonResponse::HTTP_BAD_REQUEST);
        }

        //get employee id
        $empRepo = $this->entityManager->getRepository(EmployeeRecords::class);
        $selectedEmp = $empRepo->find($employeeId);
        //validate if employee is existing
        if(!$selectedEmp){
            return $this->json(['message' => 'Employee is not existing'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $empProject = $empProjectRepo->findOneBy(['project' => $projectId,'employee' => $employeeId]);
        
        if (!$empProject) {
            $newEmpProject = new EmployeeProjects();
            $newEmpProject->setProject($selectedProject);
            $newEmpProject->setEmployee($selectedEmp);
            $entityManager->persist($newEmpProject);
            $currentEmpProject =  $newEmpProject;
        }
        else{
            $currentEmpProject =  $empProject;
        }

        try {
            $startDate = new \DateTime($data['start_date']);
            $endDate = new \DateTime($data['end_date']);

            if ($startDate > $endDate) {
                return $this->json(['message' => 'Start date cannot be greater than end date'], JsonResponse::HTTP_BAD_REQUEST);
            }

            $interval = new \DateInterval('P1D');
            $dateRange = new \DatePeriod($startDate, $interval, $endDate->modify('+1 day')); // End date is inclusive

            foreach ($dateRange as $date) {
                $empTask = new EmpTask();
                $empTask->setEmpProject($currentEmpProject);
                $empTask->setTaskDesc($data['task_desc']);
                $empTask->setAssignedHours($data['assigned_hours']);
                $empTask->setDate($date);

                $entityManager->persist($empTask);
            }

            $entityManager->flush();

            return $this->json(['message' => 'Employee tasks created successfully.'], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            return $this->json(['message' => 'An error occurred while creating tasks.', 'error' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    #[Route('/api/emp-tasks/update/{id}', name: 'update_emp_task', methods: ['POST'])]
    public function updateEmpTask($id, Request $request, EntityManagerInterface $entityManager, EmpTaskRepository $repository): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $empTask = $repository->find(intval($id));
        if (!$empTask) {
            return $this->json(['message' => 'Employee task not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        if(isset($data['task_desc'])){
            $empTask->setTaskDesc($data['task_desc']);
        }
        
        $empTask->setAssignedHours(intval($data['assigned_hours']));

        $entityManager->persist($empTask);
        $entityManager->flush();

        return $this->json(['message' => 'Employee task updated successfully.'], JsonResponse::HTTP_OK);
    }

    #[Route('/api/emp-tasks/adjust/{id}', name: 'adjust_emp_task', methods: ['POST'])]
    public function adjustEmpTaskHours($id, Request $request, EntityManagerInterface $entityManager, EmpTaskRepository $repository): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $empTask = $repository->find(intval($id));
        if (!$empTask) {
            return $this->json(['message' => 'Employee task not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $workerLog = $empTask->getWorkerLogs();
        $undertime = 0;
        if($workerLog && $workerLog->getUndertime()){
            $undertime = $workerLog->getUndertime();
        }
        
        if($data['is_adjusted']){
            $totalHours = floatval(floatval($empTask->getAssignedHours()) - $undertime);
            $empTask->setRenderedHours($totalHours >= 0 ? $totalHours : 0);
        }
        else{
            $totalHours = $empTask->getAssignedHours();
            $empTask->setRenderedHours($empTask->getAssignedHours());
        }

        $empTask->setAdjusted($data['is_adjusted']);
        
        $entityManager->persist($empTask);
        $entityManager->flush();

        return $this->json(['message' => 'Employee task adjusted successfully.', 'total_time' => $totalHours], JsonResponse::HTTP_OK);
    }

    #[Route('/api/emp-tasks/archive/{id}', name: 'archive_emp_task', methods: ['DELETE'])]
    public function archiveEmpTask($id, Request $request, EntityManagerInterface $entityManager, EmpTaskRepository $repository): JsonResponse
    {
        $empTask = $repository->find(intval($id));
        if (!$empTask) {
            return $this->json(['message' => 'Employee task not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $empTask->setArchived(true);

        $entityManager->persist($empTask);
        $entityManager->flush();

        return $this->json(['message' => 'Employee task archived successfully.'], JsonResponse::HTTP_OK);
    }

    #[Route('/api/emp-tasks/approve/{id}', name: 'approve_emp_task', methods: ['POST'])]
    public function approveEmpTask($id, Request $request, EntityManagerInterface $entityManager, EmpTaskRepository $repository): JsonResponse
    {
        $empTask = $repository->find(intval($id));
        if (!$empTask) {
            return $this->json(['message' => 'Employee task not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $empTask->setApproved(true);

        $entityManager->persist($empTask);
        $entityManager->flush();

        return $this->json(['message' => 'Employee task approved.'], JsonResponse::HTTP_OK);
    }

    #[Route('/api/emp-tasks/deny/{id}', name: 'deny_emp_task', methods: ['POST'])]
    public function denyEmpTask($id, Request $request, EntityManagerInterface $entityManager, EmpTaskRepository $repository): JsonResponse
    {
        $empTask = $repository->find(intval($id));
        if (!$empTask) {
            return $this->json(['message' => 'Employee task not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $empTask->setApproved(false);

        $entityManager->persist($empTask);
        $entityManager->flush();

        return $this->json(['message' => 'Employee task denied.'], JsonResponse::HTTP_OK);
    }

    // #[Route('/api/worker_logs/create', name: 'create_worker_logs', methods: ['POST'])]
    // public function createWorkerLogs(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): JsonResponse
    // {
    //     $data = json_decode($request->getContent(), true);
    
    //     if (json_last_error() !== JSON_ERROR_NONE) {
    //         return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
    //     }
    
    //     if (!is_array($data) || empty($data)) {
    //         return $this->json(['message' => 'Data must be a non-empty array of worker logs'], JsonResponse::HTTP_BAD_REQUEST);
    //     }
    
    //     $createdLogs = [];
    //     foreach ($data as $logData) {
    //         try {
    //             $entityManager->beginTransaction();
    
    //             // Validate empcode
    //             if (!isset($logData['empcode'])) {
    //                 $entityManager->rollback();
    //                 continue; // Skip current row if empcode not found
    //             }
    
    //             // Find Worker by empcode
    //             $workerRepository = $entityManager->getRepository(Worker::class);
    //             $worker = $workerRepository->findOneBy(['empcode' => $logData['empcode']]);
    
    //             if (!$worker) {
    //                 $entityManager->rollback();
    //                 continue; // Skip current row if worker not found
    //             }
    
    //             // Validate loginDate, logoutDate, and date
    //             if (empty($logData['timein']) || empty($logData['timeout']) || empty($logData['date'])) {
    //                 $entityManager->rollback();
    //                 continue; // Skip current row if any of the required fields are missing
    //             }
    
    //             // Combine date with timein and timeout
    //             $loginDateTime = \DateTime::createFromFormat('m/d/Y h:i:s A', $logData['date'] . ' ' . $logData['timein']);
    //             $logoutDateTime = \DateTime::createFromFormat('m/d/Y h:i:s A', $logData['date'] . ' ' . $logData['timeout']);
    
    //             if (!$loginDateTime || !$logoutDateTime) {
    //                 $entityManager->rollback();
    //                 continue; // Skip current row if date and time combination fails
    //             }
    
    //             // Check if a WorkerLogs entry already exists for this worker with the same login date
    //             $existingLog = $entityManager->getRepository(WorkerLogs::class)->findOneBy([
    //                 'user' => $worker,
    //                 'loginDate' => $loginDateTime,
    //             ]);
    
    //             if ($existingLog) {
    //                 $entityManager->rollback();
    //                 continue; // Skip current row if an existing log is found
    //             }
    
    //             // Set User Settings
    //             if ($worker->getEmpRecord() && $worker->getEmpRecord()->getUser() && $worker->getEmpRecord()->getUser()->getEmpShift()) {
    //                 $empShiftHours = $worker->getEmpRecord()->getUser()->getEmpShift()->getTotalHoursMinusLunch();
    //             } else {
    //                 $empShiftHours = 480; // Default to 8 hours shift in minutes
    //             }
    
    //             // Create WorkerLogs entity
    //             $workerLog = new WorkerLogs();
    //             $workerLog->setUser($worker);
    //             $workerLog->setType($logData['type'] ?? 'IN');
    //             $workerLog->setLoginDate($loginDateTime);
    //             $workerLog->setLogoutDate($logoutDateTime);
    //             $workerLog->setTimeCalculated($logData['is_time_calculated'] ?? false);
    //             $workerLog->setCreatedAt(new \DateTimeImmutable());
    
    //             // Calculate rendered hours, OT, and undertime if time in/out is not empty
    //             if ($workerLog->getLoginDate() && $workerLog->getLogoutDate() && !$workerLog->isTimeCalculated()) {
    //                 $loginDate = $workerLog->getLoginDate();
    //                 $logoutDate = $workerLog->getLogoutDate();
    
    //                 $interval = $loginDate->diff($logoutDate);
    //                 $totalMinutesDifference = (($interval->days * 24 * 60) + ($interval->h * 60) + $interval->i) - 60;
    
    //                 // Set Rendered Hours
    //                 $workerLog->setRenderedHours($totalMinutesDifference );
    
    //                 // Set Undertime
    //                 $workerLog->setUndertime($this->calcUndertime($totalMinutesDifference, $empShiftHours));
    
    //                 // Set overtime on the WorkerLogs entity
    //                 $workerLog->setOvertime($this->calcOvertime($totalMinutesDifference, $empShiftHours));
    
    //                 $workerLog->setTimeCalculated(true);
    //             }

    //             // Validate the entity
    //             $errors = $validator->validate($workerLog);
    //             if (count($errors) > 0) {
    //                 $entityManager->rollback();
    //                 continue; // Skip current row if validation errors
    //             }
                
    //             // Persist WorkerLogs entity
    //             $entityManager->persist($workerLog);
    //             $entityManager->flush();
                
    //             // Commit transaction
    //             // $entityManager->commit();
    //             // check Absences
    //             $this->updateWorkerLogEmpTask($worker, $loginDate, $workerLog);
    //             $this->checkAbsences($worker);
    //             $createdLogs[] = $workerLog;
    //             $entityManager->commit();
    //         } catch (\Exception $e) {
    //             $entityManager->rollback();
    //             return $this->json(['message' => "Error: " . $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    //         }
    //     }
    
    //     // Move audit logging to a separate service or event listener
    //     $this->auditlog->addAuditLog($request, json_encode($createdLogs, JSON_UNESCAPED_SLASHES), 'api/worker_logs/create', 'Create');
    
    //     return $this->json(['message' => 'Worker logs created successfully.'], JsonResponse::HTTP_CREATED);
    // }

    #[Route('/api/worker_logs/create', name: 'create_worker_logs', methods: ['POST'])]
    public function createWorkerLogs(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        if (!is_array($data) || empty($data)) {
            return $this->json(['message' => 'Data must be a non-empty array of worker logs'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $createdLogs = [];
        $workers = [];
        foreach ($data as $logData) {
            try {
                $entityManager->beginTransaction();

                if (!isset($logData['empcode'])) {
                    $entityManager->rollback();
                    continue;
                }

                $workerRepository = $entityManager->getRepository(Worker::class);
                $worker = $workerRepository->findOneBy(['empcode' => $logData['empcode']]);

                if (!$worker) {
                    $empRecord = $entityManager->getRepository(EmployeeRecords::class)->findOneBy(['employee_code' => $logData['empcode']]);
                    if(!$empRecord){
                        $entityManager->rollback();
                        continue;
                    }
                    $newWorker = new Worker();
                    $newWorker->setWorkerId(hash('sha256', $logData['empcode']));
                    $newWorker->setFirstname($empRecord->getFirstname());
                    $newWorker->setLastname($empRecord->getLastname());
                    $newWorker->setEmpcode($empRecord->getEmployeeCode());
                    $newWorker->setEmpRecord($empRecord);
                    $entityManager->persist($newWorker);
                    $entityManager->flush();
                    $worker = $newWorker;
                }

                $workers[$worker->getEmpcode()] = $worker;

                if (empty($logData['timein']) || empty($logData['timeout']) || empty($logData['date'])) {
                    $entityManager->rollback();
                    continue;
                }

                $loginDateTime = \DateTime::createFromFormat('m/d/Y h:i:s A', $logData['date'] . ' ' . $logData['timein']);
                $logoutDateTime = \DateTime::createFromFormat('m/d/Y h:i:s A', $logData['date'] . ' ' . $logData['timeout']);

                if (!$loginDateTime || !$logoutDateTime) {
                    $entityManager->rollback();
                    continue;
                }

                $existingLog = $entityManager->getRepository(WorkerLogs::class)->findOneBy([
                    'user' => $worker,
                    'loginDate' => $loginDateTime,
                ]);

                if ($existingLog) {
                    $entityManager->rollback();
                    continue;
                }

                if ($worker->getEmpRecord() && $worker->getEmpRecord()->getUser() && $worker->getEmpRecord()->getUser()->getEmpShift()) {
                    $empShiftHours = $worker->getEmpRecord()->getUser()->getEmpShift()->getTotalHoursMinusLunch();
                } else {
                    $empShiftHours = 480;
                }

                $workerLog = new WorkerLogs();
                $workerLog->setUser($worker);
                $workerLog->setType($logData['type'] ?? 'IN');
                $workerLog->setLoginDate($loginDateTime);
                $workerLog->setLogoutDate($logoutDateTime);
                $workerLog->setTimeCalculated($logData['is_time_calculated'] ?? false);
                $workerLog->setCreatedAt(new \DateTimeImmutable());

                if ($workerLog->getLoginDate() && $workerLog->getLogoutDate() && !$workerLog->isTimeCalculated()) {
                    $loginDate = $workerLog->getLoginDate();
                    $logoutDate = $workerLog->getLogoutDate();

                    $interval = $loginDate->diff($logoutDate);
                    $totalMinutesDifference = (($interval->days * 24 * 60) + ($interval->h * 60) + $interval->i) - 60;
                    //get present attendance
                    $attendance = $this->entityManager->getRepository(AttendanceTypes::class)->findOneBy(['automated_attendance' => true]);

                    $workerLog->setRenderedHours($totalMinutesDifference);
                    $workerLog->setUndertime($this->calcUndertime($totalMinutesDifference, $empShiftHours));
                    $workerLog->setOvertime($this->calcOvertime($totalMinutesDifference, $empShiftHours));
                    $workerLog->setAttendanceStatus($attendance);
                    $workerLog->setTimeCalculated(true);
                }

                $errors = $validator->validate($workerLog);
                if (count($errors) > 0) {
                    $entityManager->rollback();
                    continue;
                }

                $entityManager->persist($workerLog);
                $entityManager->flush();
                $entityManager->commit();
                // Commit the transaction here
                $this->updateWorkerLogEmpTask($worker, $loginDateTime, $workerLog);
                //$this->checkAbsences($worker);
                $createdLogs[] = $workerLog;

                //Create Notification
                $this->notification->createNotificationUsingToken(" uploaded DTR" , " uploaded DTR", new DateTime() , "DEP_ONLY");
                
            } catch (\Exception $e) {
                $entityManager->rollback();
                return $this->json(['message' => "Error: " . $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
            }
        }

        foreach ($workers as $worker) {
            $this->checkAbsences($worker);
            //print_r($worker->getId());
        }

        $this->auditlog->addAuditLog($request, json_encode($createdLogs, JSON_UNESCAPED_SLASHES), 'api/worker_logs/create', 'Create');

        return $this->json(['message' => 'Worker logs created successfully.'], JsonResponse::HTTP_CREATED);
    }


    private function checkAbsences($worker){
        $workerLogsItem = $this->entityManager->getRepository(WorkerLogs::class)->findOneBy(['user' => $worker->getId()], ['loginDate' => 'DESC']);
        //print_r($workerLogsItem->getId());
        $cutoffRange = $this->getCurrentCutoffDateRange($workerLogsItem->getLoginDate());
    
        //$workers = $this->entityManager->getRepository(Worker::class)->findAllWithEmpRecord();
        $workerId = $worker->getId();
        $shift = $worker->getEmpRecord()->getUser()->getEmpShift();
        $shiftDays = $shift ? $shift->getDaysOfWeek() : [];
        // Fetch logs for the worker within the cutoff range
        $logs = $this->entityManager->getRepository(WorkerLogs::class)
            ->findByDateRangeWithWorkerId(
                new \DateTime($cutoffRange['dateRange']['start']),
                new \DateTime($cutoffRange['dateRange']['end']),
                $workerId
            ) ?? [];

        // Convert logs to array of dates
        $loggedDates = array_map(function ($log) {
            return $log->getLoginDate()->format('Y-m-d');
        }, $logs);

        // Determine the absence days
        $absenceDays = [];
        $currentDate = new \DateTime($cutoffRange['dateRange']['start']);
        $endDate = new \DateTime($cutoffRange['dateRange']['end']);
        
        while ($currentDate <= $endDate) {
            if (in_array($currentDate->format('Y-m-d'), $loggedDates)) {
                // If logged, no action needed
                // print_r($loggedDates);
            } else {
                // If not logged, add to absenceDays
                $dayOfWeek = $currentDate->format('N'); // 1 (for Monday) through 7 (for Sunday)
                if (in_array($dayOfWeek, $shiftDays)) {
                    $this->createNewAbsentWorkerLogs($worker, $currentDate);
                    //print_r($currentDate->format('Y-m-d'));
                    $absenceDays[] = $currentDate->format('Y-m-d');
                }
            }
            $currentDate->modify('+1 day');
        }
    }

    private static function getCurrentCutoffDateRange($start_date): array
    {
        // Ensure $start_date is a DateTime object
        $currentDate = $start_date instanceof \DateTime ? $start_date : new \DateTime($start_date);
        
        // Extract year and month from the current date
        $year = $currentDate->format('Y');
        $month = $currentDate->format('m');
        
        // Define semi-monthly ranges
        $firstHalfStart = new \DateTime("$year-$month-01");
        $firstHalfEnd = new \DateTime("$year-$month-15");
        $secondHalfStart = new \DateTime("$year-$month-16");
        $secondHalfEnd = new \DateTime("$year-$month-01");
        $secondHalfEnd->modify('last day of this month');
        
        // Determine the current half
        $currentDay = $currentDate->format('d');
        if ($currentDay <= 15) {
            return [
                'currentHalf' => 'firstHalf',
                'dateRange' => [
                    'start' => $firstHalfStart->format('Y-m-d'),
                    'end' => $currentDate->format('Y-m-d') . ' 23:59:59' // Current date as end date
                ]
            ];
        } else {
            return [
                'currentHalf' => 'secondHalf',
                'dateRange' => [
                    'start' => $secondHalfStart->format('Y-m-d'),
                    'end' => $currentDate->format('Y-m-d') . ' 23:59:59' // Current date as end date
                ]
            ];
        }
    }

    private function createNewAbsentWorkerLogs($worker, $loginDate){
        $attendance = $this->entityManager->getRepository(AttendanceTypes::class)->findOneBy(['name' => 'Absent']);
        $newWorkerLog = new WorkerLogs();
        $newWorkerLog->setUser($worker);
        $newWorkerLog->setType('');
        $newWorkerLog->setWorkerLogId('');
        $newWorkerLog->setLoginDate($loginDate);
        $newWorkerLog->setLogoutDate(null);
        $newWorkerLog->setTimeCalculated(true);
        $newWorkerLog->setCreatedAt(new \DateTimeImmutable());
        $newWorkerLog->setAttendanceStatus($attendance);
        $newWorkerLog->setUndertime(0);
        $newWorkerLog->setOvertime(0);
        $newWorkerLog->setRenderedHours(0);
        $this->entityManager->persist($newWorkerLog);
        $this->updateEmpTaskAbsence($worker, $loginDate, $newWorkerLog);
        $this->entityManager->flush();
    }

    private function updateEmpTaskAbsence($worker, $loginDate, $newWorkerLog){
        
        $empProjectItem = $this->entityManager->getRepository(EmployeeProjects::class)->findBy(['employee' => $worker->getEmpRecord()]);
        $attendance = $this->entityManager->getRepository(AttendanceTypes::class)->findOneBy(['name' => 'Absent']);
        foreach($empProjectItem as $emp_proj_item){
            
            $emp_task = $emp_proj_item->getEmpTasks();
            foreach($emp_task as $emp_task_item){
                // print_r('here');
                if($emp_task_item->getDate()->setTime(0, 0, 0) == $loginDate->setTime(0, 0, 0) && $emp_task_item->isApproved() == null){
                    //print_r($emp_task_item->getId());
                    $emp_task_item->setApproved(false);
                    $emp_task_item->setRenderedHours(0);
                    $emp_task_item->setWorkerLogs($newWorkerLog);
                    $newWorkerLog->setAttendanceStatus($attendance);
                    $this->entityManager->persist($newWorkerLog);
                    $this->entityManager->persist($emp_task_item);
                    //$this->entityManager->flush(); // Flush each batch of logs
                }
            }
        }
        $this->entityManager->flush();
        //$this->entityManager->clear(); // Detaches all objects from Doctrine   
    }

    //ginagamit ito para lagyan ng workerlogs yung emp task at lagyan ng rendered hours 
    private function updateWorkerLogEmpTask($worker, $loginDate, $workerLogs){
        $empProjectItem = $this->entityManager->getRepository(EmployeeProjects::class)->findBy(['employee' => $worker->getEmpRecord()]);
        $attendance = $this->entityManager->getRepository(AttendanceTypes::class)->findOneBy(['name' => 'Absent']);
        foreach($empProjectItem as $emp_proj_item){
            $emp_task = $emp_proj_item->getEmpTasks();
            foreach($emp_task as $emp_task_item){
                if($emp_task_item->getDate()->setTime(0, 0, 0) == $loginDate->setTime(0, 0, 0) && $emp_task_item->isApproved() == null){
                    //print_r('here');
                    $emp_task_item->setApproved(true);
                    $emp_task_item->setWorkerLogs($workerLogs);
                    if($workerLogs->isTimeCalculated()){
                        $emp_task_item->setRenderedHours($emp_task_item->getAssignedHours());
                    }
                    $this->entityManager->persist($emp_task_item);
                    //$this->entityManager->flush(); // Flush each batch of logs
                }
            }
        }
        $this->entityManager->flush();
    }

    #[Route('/api/workerlogs/get-latest-time/{id}', name: 'get_latest_log_time', methods: ['GET'])]
    public function getLatestLogTime($id, Request $request, EntityManagerInterface $entityManager, EmpTaskRepository $repository): JsonResponse
    {
        $workerLogsRepo = $entityManager->getRepository(WorkerLogs::class);
        $latest_time = $workerLogsRepo->findOneBy(['user' => $id], ['created_at' => 'DESC']);

        return $this->json(['message' => 'Latest Log Time', 'latest_time' => $latest_time->getCreatedAt()->format('F j, Y, g:i A')], JsonResponse::HTTP_OK);
    }
    

    private function calcOvertime($totalMinutesDifference, $empShiftHours)
    {
        if ($totalMinutesDifference > $empShiftHours) {
            $exceedingMinutes = $totalMinutesDifference - $empShiftHours;
        } else {
            $exceedingMinutes = 0;
        }

        // Format exceeding hours to 2 decimal places
        $exceedingMinutesFormatted = $exceedingMinutes;

        return floatval($exceedingMinutesFormatted);
    }

    private function calcUndertime($totalMinutesDifference, $empShiftHours)
    {
        if ($totalMinutesDifference < $empShiftHours) {
            $undertimeMinutes = $empShiftHours - $totalMinutesDifference;
        } else {
            $undertimeMinutes = 0;
        }

        // Format exceeding hours to 2 decimal places
        $undertimeMinutesFormatted = $undertimeMinutes;

        return floatval($undertimeMinutesFormatted);
    }

}
