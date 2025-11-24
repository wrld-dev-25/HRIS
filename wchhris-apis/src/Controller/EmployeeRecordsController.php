<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use App\Service\AuditLog;
use Symfony\Component\Serializer\SerializerInterface;
use App\Entity\EmployeeRecords;
use App\Entity\EmployeeAdditionalRecords;
use App\Repository\EmployeeAdditionalRecordsRepository;
use App\Repository\EmployeeRecordsRepository;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use App\Entity\EmployeeAttachments;
use DateTime;

class EmployeeRecordsController extends AbstractController
{

    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $validator;
    private $serializer;

    public function __construct(EntityManagerInterface $entityManager,  UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, ValidatorInterface $validator, SerializerInterface $serializer)
    {
        $this->entityManager    = $entityManager;
        $this->passhasher       = $passhasher;
        $this->jwtManager       = $jwtManager;
        $this->auditlog         = $auditLog;
        $this->validator        = $validator;
        $this->serializer       = $serializer;
    }

    #[Route('/api/employee/records', name: 'app_employee_records'  , methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $entityManager, EmployeeAdditionalRecordsRepository $repository): JsonResponse
    {
        // Deserialize JSON data from the request body
        $data = json_decode($request->getContent(), true);

        // Validate and handle data
        $employeeCode = $data['employee_code'] ?? null;
        $action = $data['action'];
        $schoolGraduated = $data['school_graduated'] ?? null;
        $course = $data['course'] ?? null;
        $careerBandLevel = $data['career_band_level'] ?? null;
        $careerGlobalGrade = $data['career_global_grade'] ?? null;
        $cashCardNumber = $data['cash_card_number'] ?? null;
        $hmoAccount = $data['hmo_account'] ?? null;
        $sssNumber = $data['sss_number'] ?? null;
        $philhealthNumber = $data['philhealth_number'] ?? null;
        $pagibigNumber = $data['pagibig_number'] ?? null;
        $tinNumber = $data['tin_number'] ?? null;
        $pastEmploymentRecord = $data['past_employment_record'] ?? null;
        $educationalBackground = $data['educational_background'] ?? null;
        $seminarsTrainings = $data['seminars_trainings'] ?? null;
        $assessmentsExams = $data['assessments_exams'] ?? null;
        $skills = $data['skills'] ?? null;
        $awards = $data['awards'] ?? null;
        $licenses = $data['licenses'] ?? null;
        $dependents = $data['dependents'] ?? null;
        $violations = $data['violations'] ?? null;
        $medicaDrugTests = $data['medical_drug_tests'] ?? null;
        $employmentHistory = $data['employment_history'] ?? null;

        // Check if employee_code is supplied from the request
        if (!$employeeCode) {
            return $this->json(['error' => 'Employee code is required.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Find the associated EmployeeRecords entity
        $employeeRecordsRepository = $entityManager->getRepository(EmployeeRecords::class);
        $employeeRecords = $employeeRecordsRepository->findOneBy(['employee_code' => $employeeCode]);

        if (!$employeeRecords) {
            return $this->json(['error' => 'Employee not found', JsonResponse::HTTP_NOT_FOUND]);
        }

        // Find or create the EmployeeAdditionalRecords entity
        $employeeAdditionalRecordsRepository = $entityManager->getRepository(EmployeeAdditionalRecords::class);
        $employeeAdditionalRecords = $employeeAdditionalRecordsRepository->findOneBy(['employee_code' => $employeeRecords]);

        if (!$employeeAdditionalRecords) { // Create new record if there's no existing additional records 
            $employeeAdditionalRecords = new EmployeeAdditionalRecords();
            $employeeAdditionalRecords->setEmployeeCode($employeeRecords);
            //$employeeAdditionalRecords->setEmployeeRecords($employeeRecords);
        }

        // Update or set the additional data
        $this->entityManager->beginTransaction();

        try {
            switch ($action) {
                case 'update_additional':
                    $employeeAdditionalRecords->setSchoolGraduated($schoolGraduated);
                    $employeeAdditionalRecords->setCourse($course);
                    $employeeAdditionalRecords->setCareerBandLevel($careerBandLevel);
                    $employeeAdditionalRecords->setCareerGlobalGrade($careerGlobalGrade);
                    $employeeAdditionalRecords->setCashCardNumber($cashCardNumber);
                    $employeeAdditionalRecords->setHmoAccount($hmoAccount);
                    $employeeAdditionalRecords->setSssNumber($sssNumber);
                    $employeeAdditionalRecords->setPhilhealthNumber($philhealthNumber);
                    $employeeAdditionalRecords->setPagibigNumber($pagibigNumber);
                    $employeeAdditionalRecords->setTinNumber($tinNumber);
                    break;

                case 'update_dependent':
                    $employeeAdditionalRecords->setDependents($dependents);
                    break;

                case 'update_past_employment':
                    $employeeAdditionalRecords->setPastEmploymentRecord($pastEmploymentRecord);
                    break;
                
                case 'update_education':
                    $employeeAdditionalRecords->setEducationalBackground($educationalBackground);
                    $employeeAdditionalRecords->setSeminarsTrainings($seminarsTrainings);
                    $employeeAdditionalRecords->setAssessmentsExams($assessmentsExams);
                    break;
                
                case 'update_sal':
                    $employeeAdditionalRecords->setSkills($skills);
                    $employeeAdditionalRecords->setAwards($awards);
                    $employeeAdditionalRecords->setLicenses($licenses);
                    break;
                
                case 'update_violation':
                    $employeeAdditionalRecords->setViolations($violations);
                    break;

                case 'update_medical':
                    $employeeAdditionalRecords->setMedicalDrugTests($medicaDrugTests);
                    break;

                case 'update_employment_history':
                    $employeeAdditionalRecords->setEmploymentHistory($employmentHistory);
                    break;

                default:
                    # code...
                    break;
            }

            // Validate the entity
            $errors = $this->validator->validate($employeeAdditionalRecords);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return new JsonResponse(['errors' => $errorMessages, 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
            }

            // Persist the entity
            $entityManager->persist($employeeAdditionalRecords);
            $entityManager->flush();
            $entityManager->commit();

            $employeeAdditionalRecords = $repository->findOneBy(['employee_code' => $employeeRecords]);
            $employeeAdditionalRecordsArray = $this->serializer->serialize($employeeAdditionalRecords, 'json', ['groups' => 'employee_additional_records']);

            // Move audit logging to a separate service or event listener
            $this->auditlog->addAuditLog($request, json_encode($employeeAdditionalRecords, JSON_UNESCAPED_SLASHES), 'api/employee/records', 'Update');

        } catch (\Throwable $e) {
            $this->entityManager->rollback();
            return $this->json(['message' => "There's an error in code: ".$e, 'status' => 'failed', 'action' => $action, 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Return a success response
        return $this->json(['message' => 'Employee Additional Records Updated!', 'action' => $action, 'status' => 'updated', 'employeeAdditionalRecords' => json_decode($employeeAdditionalRecordsArray)]);
    }

    #[Route('/api/employee/additional_record', name: 'view_employee_additional_records'  , methods: ['GET'])]
    public function view(Request $request, EntityManagerInterface $entityManager, EmployeeAdditionalRecordsRepository $repository): JsonResponse
    {
        // Deserialize JSON data from the request body
        $data = json_decode($request->getContent(), true);

        // Validate and handle data
        $employeeCode = $data['employee_code'] ?? null;
        $type = $data['type'] ?? null;
        $attachmentName = $data['attachment_name'] ?? null;
        $file = $data['file'] ?? null;

        // Check if employee_code is supplied from the request
        if (!$employeeCode) {
            return $this->json(['error' => 'Employee code is required.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Find the associated EmployeeRecords entity
        $employeeRecordsRepository = $entityManager->getRepository(EmployeeRecords::class);
        $employeeRecords = $employeeRecordsRepository->findOneBy(['employee_code' => $employeeCode]);

        if (!$employeeRecords) {
            return $this->json(['error' => 'Employee not found', JsonResponse::HTTP_NOT_FOUND]);
        }

        $employeeAdditionalRecords = $repository->findOneBy(['employee_code' => $employeeRecords->getId()]);
        $employeeAdditionalRecordsArray = $this->serializer->serialize($employeeAdditionalRecords, 'json', ['groups' => 'employee_additional_records']);

        // Return a success response
        return $this->json(['message' => 'View Employee Addtional Records Success!', 'employeeAdditionalRecord' => json_decode($employeeAdditionalRecordsArray)]);
    }

    #[Route('/api/employee/upload_attachment', name: 'upload_attachment' , methods: ['POST'])]
    public function uploadAttachment(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        // Deserialize JSON data from the request body
        $data = json_decode($request->getContent(), true);

        // Validate and handle data
        $employeeCode = $data['employee_code'] ?? null;
        $type = $data['type'] ?? null;
        $attachmentName = $data['attachment_name'] ?? null;
        $attachmentSize = $data['attachment_size'] ?? null;
        //$dateUploaded = $data['date_uploaded'] ?? null;
        $file = $data['file'] ?? null;
        $originalFileName = $data['original_file_name'] ?? null;

        $timezone = new \DateTimeZone('Asia/Manila'); // set timezone
        $dateUploaded = new \DateTime('now', $timezone); // get date today

        // Check if employee_code is supplied from the request
        if (!$employeeCode) {
            return $this->json(['error' => 'Employee code is required.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Find the associated EmployeeRecords entity
        $employeeRecordsRepository = $entityManager->getRepository(EmployeeRecords::class);
        $employeeRecords = $employeeRecordsRepository->findOneBy(['employee_code' => $employeeCode]);

        if (!$employeeRecords) {
            return $this->json(['error' => 'Employee not found', JsonResponse::HTTP_NOT_FOUND]);
        }

        // Find or create the Attachment entity
        $employeeAttachmentRepository = $entityManager->getRepository(EmployeeAttachments::class);
        $employeeAttachment = $employeeAttachmentRepository->findOneBy(['employee' => $employeeRecords]);

        $employeeAttachment = new EmployeeAttachments();
        $employeeAttachment->setEmployee($employeeRecords);

        // Update or set the additional data
        $this->entityManager->beginTransaction();

        try {
            
            $employeeAttachment->setType($type);
            $employeeAttachment->setAttachmentName($attachmentName);
            $employeeAttachment->setAttachmentSize($attachmentSize);
            $employeeAttachment->setDateUploaded($dateUploaded);
            $employeeAttachment->setFile($file);
            $employeeAttachment->setOriginalFileName($originalFileName);

            // Validate the entity
            $errors = $this->validator->validate($employeeAttachment);
            if (count($errors) > 0) {
                $errorMessages = [];
                foreach ($errors as $error) {
                    $errorMessages[] = $error->getMessage();
                }
                return new JsonResponse(['errors' => $errorMessages, 'status' => 'failed'], JsonResponse::HTTP_CONFLICT);
            }

            // Persist the entity
            $entityManager->persist($employeeAttachment);
            $entityManager->flush();
            $entityManager->commit();

            // Move audit logging to a separate service or event listener
            $this->auditlog->addAuditLog($request, json_encode($employeeAttachment, JSON_UNESCAPED_SLASHES), 'api/employee/upload_attachment', 'Upload');

        } catch (\Throwable $e) {
            $this->entityManager->rollback();
            return $this->json(['message' => "There's an error in code: ".$e, 'status' => 'failed'], JsonResponse::HTTP_EXPECTATION_FAILED);
        }

        return $this->json(['message' => 'Attachment Upload Success!', 'status' => 'success']);
    }

    #[Route('/api/employee/view_attachment', name: 'view_attachment' , methods: ['GET'])]
    public function viewAttachment(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        // Deserialize JSON data from the request body
        $data = json_decode($request->getContent(), true);

        // Validate and handle data
        $employeeCode = $data['employee_code'] ?? null;

        // Check if employee_code is supplied from the request
        if (!$employeeCode) {
            return $this->json(['error' => 'Employee code is required.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Find the associated EmployeeRecords entity
        $employeeRecordsRepository = $entityManager->getRepository(EmployeeRecords::class);
        $employeeRecords = $employeeRecordsRepository->findOneBy(['employee_code' => $employeeCode]);

        if (!$employeeRecords) {
            return $this->json(['error' => 'Employee not found', JsonResponse::HTTP_NOT_FOUND]);
        }

        // Update or set the additional data
        $this->entityManager->beginTransaction();

        try {
            // Find or create the Attachment entity
            $employeeAttachmentRepository = $entityManager->getRepository(EmployeeAttachments::class);
            $employeeAttachment = $employeeAttachmentRepository->findBy(['employee' => $employeeRecords]);
            $employeeAttachmentArray = $this->serializer->serialize($employeeAttachment, 'json', ['groups' => 'employee_attachments']);

            return $this->json(['message' => 'View Attachment Success!', 'employeeAttachments' => json_decode($employeeAttachmentArray)]);

        } catch (\Throwable $e) {
            return $this->json(['message' => "There's an error in code: ".$e, 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/api/employee/delete_attachment', name: 'delete_attachment' , methods: ['POST'])]
    public function deleteAttachment(Request $request, EntityManagerInterface $entityManager): JsonResponse
    {
        // Deserialize JSON data from the request body
        $data = json_decode($request->getContent(), true);

        // Validate and handle data
        $attachmentId = $data['id'] ?? null;

        // Check if employee_code is supplied from the request
        if (!$attachmentId) {
            return $this->json(['error' => 'Employee Attachment ID required.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Find the associated EmployeeRecords entity
        $employeeAttachmentRepository = $entityManager->getRepository(EmployeeAttachments::class);
        $employeeAttachment = $employeeAttachmentRepository->findOneBy(['id' => $attachmentId]);
        $employeeAttachmentArray = $this->serializer->serialize($employeeAttachment, 'json', ['groups' => 'employee_attachments']);

        if (!$employeeAttachment) {
            return $this->json(['error' => 'Employee not found', JsonResponse::HTTP_NOT_FOUND]);
        }

        // Begin transaction
        $this->entityManager->beginTransaction();

        try {
            // Delete attachment entity
            $this->entityManager->remove($employeeAttachment);
            $this->entityManager->flush();
            $this->entityManager->commit();

            // Move audit logging to a separate service or event listener
            $this->auditlog->addAuditLog($request, json_encode($employeeAttachment, JSON_UNESCAPED_SLASHES), 'api/employee/delete_attachment', 'Delete');

            return $this->json(['message' => 'Attachment Deleted!', 'status' => 'success', 'employeeAttachment' => json_decode($employeeAttachmentArray)]);

        } catch (\Throwable $e) {
            $this->entityManager->rollback();
            return $this->json(['message' => "There's an error in code: ".$e, 'status' => 'failed'], JsonResponse::HTTP_BAD_REQUEST);
        }
    }

    #[Route('/api/employee/profile_photo_add/{empId}', name: 'profile_photo_add', methods: ['POST'])]
    public function addProfilePhoto(Request $request, $empId): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        // Validate and handle data
        $profilePhotoPath = $data['profile_photo_path'] ?? null;

        if (!$empId || !$profilePhotoPath) {
            return $this->json(['error' => 'Employee Id and profile photo path are required.'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Find the associated EmployeeRecords entity
        $employeeRecordsRepository = $this->entityManager->getRepository(EmployeeRecords::class);
        $employeeRecords = $employeeRecordsRepository->find($empId);

        if (!$employeeRecords) {
            return $this->json(['error' => 'Employee not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        // Update the profile photo path
        $employeeRecords->setProfilePhotoPath($profilePhotoPath);

        try {
            $this->entityManager->persist($employeeRecords);
            $this->entityManager->flush();

            // Audit log
            $this->auditlog->addAuditLog($request, json_encode($data, JSON_UNESCAPED_SLASHES), 'api/employee/profile_photo_add', 'Update');

            return $this->json(['message' => 'Profile photo path updated successfully.']);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Failed to update profile photo path.', 'details' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
