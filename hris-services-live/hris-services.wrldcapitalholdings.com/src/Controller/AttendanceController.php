<?php

namespace App\Controller;

use App\Entity\AttendanceTypes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use App\Service\AuditLog;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Shifts;
use DateTime;


class AttendanceController extends AbstractController
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

    #[Route('/api/attendance-types', name: 'get_attendance_types', methods: ['GET'])]
    public function getAttendanceTypes(): JsonResponse
    {
        try {
            $attendanceTypes = $this->entityManager->getRepository(AttendanceTypes::class)->findAll();

            $data = $this->serializer->serialize($attendanceTypes, 'json', ['groups' => 'all_worker_logs']);

            return new JsonResponse([
                'message' => 'Attendance types retrieved successfully.',
                'attendance_types' => json_decode($data),
            ], JsonResponse::HTTP_OK);

        } catch (\Exception $e) {
            return new JsonResponse([
                'error' => 'Failed to retrieve attendance types.',
                'message' => 'Failed to retrieve attendance types.',
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/attendance-types/{id}', name: 'get_attendance_type', methods: ['GET'])]
    public function getAttendanceType(int $id): JsonResponse
    {
        try {
            $attendanceType = $this->entityManager->getRepository(AttendanceTypes::class)->find($id);

            if (!$attendanceType) {
                return new JsonResponse([
                    'error' => 'Attendance type not found.'
                ], JsonResponse::HTTP_NOT_FOUND);
            }

            $data = $this->serializer->serialize($attendanceType, 'json', ['groups' => 'all_worker_logs']);

            return new JsonResponse([
                'message' => 'Attendance type retrieved successfully.',
                'attendance_type' => json_decode($data),
            ], JsonResponse::HTTP_OK);

        } catch (\Exception $e) {
            return new JsonResponse([
                'error' => 'Failed to retrieve attendance type.',
                'message' => 'Failed to retrieve attendance type.',
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/attendance/update/{id}', name: 'update_attendance', methods: ['PUT'])]
    public function updateAttendance($id, Request $request): JsonResponse
    {
        $attendance = $this->entityManager->getRepository(AttendanceTypes::class)->find($id);

        if (!$attendance) {
            return new JsonResponse(['message' => 'Attendance type not found'], 404);
        }

        $data = json_decode($request->getContent(), true);

        if (isset($data['name'])) {
            $attendance->setName($data['name']);
        }

        if (isset($data['is_hours_rendered'])) {
            $attendance->setHoursRendered($data['is_hours_rendered']);
        }

        if (isset($data['hours_provided'])) {
            $attendance->setHoursProvided($data['hours_provided']);
        }

        if (isset($data['automated_attendance'])) {
            $attendance->setAutomatedAttendance($data['automated_attendance']);
        }

        $errors = $this->validator->validate($attendance);

        if (count($errors) > 0) {
            $errorsString = (string) $errors;

            return new JsonResponse(['message' => $errorsString], 400);
        }

        $this->entityManager->persist($attendance);
        $this->entityManager->flush();

        $responseData = $this->serializer->serialize($attendance, 'json', ['groups' => 'worker_logs']);
        return new JsonResponse($responseData, 200, [], true);
    }
}
