<?php

namespace App\Controller;


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
use App\Service\UserAccessValidation;

class ShiftsController extends AbstractController
{

    private $entityManager;
    private $jwtManager;
    private $passhasher;
    private $auditlog;
    private $validator;
    private $serializer;
    private $validateAccess;

    public function __construct(EntityManagerInterface $entityManager,  UserPasswordHasherInterface $passhasher, JWTTokenManagerInterface $jwtManager, AuditLog $auditLog, ValidatorInterface $validator, SerializerInterface $serializer,UserAccessValidation $validateAccess)
    {
        $this->entityManager    = $entityManager;
        $this->passhasher       = $passhasher;
        $this->jwtManager       = $jwtManager;
        $this->auditlog         = $auditLog;
        $this->validator        = $validator;
        $this->serializer       = $serializer;
        $this->validateAccess   = $validateAccess;
    }

    #[Route('/api/shifts', name: 'view_shifts', methods: ['GET'])]
    public function viewShifts(Request $request): JsonResponse
    {
        $validationResult = $this->validateAccess->validateUserAccess($request, 'shifts', 'view');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        try {
            $shiftRepo = $this->entityManager->getRepository(Shifts::class);
            $shifts = $shiftRepo->findByNotArchived();

            $shiftsArray = array_map(function (Shifts $shift) {
                return [
                    'id' => $shift->getId(),
                    'name' => $shift->getName() ? $shift->getName() : null,
                    'start_time' => $shift->getStartTime() ? $shift->getStartTime()->format('H:i:s') : null,
                    'end_time' => $shift->getEndTime() ? $shift->getEndTime()->format('H:i:s') : null,
                    'lunch_duration' => $shift->getLunchBreakDuration() ? $shift->getLunchBreakDuration() : null,
                    'days_of_week' => $shift->getDaysOfWeek() ? $shift->getDaysOfWeek() : null,
                    'total_hours' => $shift->getTotalHoursMinusLunch() ? $shift->getTotalHoursMinusLunch() : null,
                ];
            }, $shifts);

            $this->auditlog->addAuditLog($request, $this->serializer->serialize($shiftsArray, 'json'), 'api/shifts', 'View Shifts');

            return new JsonResponse([
                'message' => 'Shifts retrieved successfully.',
                'shifts' => $shiftsArray
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return new JsonResponse([
                'error' => 'Failed to retrieve shifts.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/create/shifts', name: 'add_shift', methods: ['POST'])]
    public function addShift(Request $request): JsonResponse
    {
        $validationResult = $this->validateAccess->validateUserAccess($request, 'shifts', 'add');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        try {
            $data = json_decode($request->getContent(), true);
    
            $name = isset($data['name']) ? $data['name'] : null;
            $startTime = isset($data['start_time']) ? new \DateTime($data['start_time']) : null;
            $endTime = isset($data['end_time']) ? new \DateTime($data['end_time']) : null;
            $lunch_duration = isset($data['lunch_duration']) ? $data['lunch_duration'] : null;
            $week_sched = isset($data['week_sched']) ? $data['week_sched'] : null;

            //validate starttime endtime and week_sched
            if (!$startTime || !$endTime || !$week_sched) {
                return new JsonResponse([
                    'error' => 'Invalid data.',
                    'message' => 'Start time, end time and week schedule are required.'
                ], JsonResponse::HTTP_BAD_REQUEST);
            }
    
            // Calculate total hours worked minus lunch break
            $totalMinutesWorked = $this->calculateTotalMinutesWorked($startTime, $endTime, $lunch_duration);
    
            // Create new Shifts entity
            $shift = new Shifts();
            $shift->setName($name);
            $shift->setStartTime($startTime);
            $shift->setEndTime($endTime);
            $shift->setLunchBreakDuration($lunch_duration);
            $shift->setTotalHoursMinusLunch($totalMinutesWorked); // Store total hours worked minus lunch break
            $shift->setDaysOfWeek($week_sched);
    
            // Validate the entity
            $errors = $this->validator->validate($shift);
            if (count($errors) > 0) {
                return new JsonResponse([
                    'error' => 'Validation failed.',
                    'messages' => (string) $errors
                ], JsonResponse::HTTP_BAD_REQUEST);
            }
    
            // Persist and flush the entity
            $this->entityManager->persist($shift);
            $this->entityManager->flush();
    
            // Log the audit
            $this->auditlog->addAuditLog($request, [], 'api/shifts', 'Add Shift');
    
            // Return success response
            return new JsonResponse([
                'message' => 'Shift added successfully.',
                'shift' => [
                    'id' => $shift->getId(),
                    'name' => $shift->getName(),
                    'start_time' => $shift->getStartTime() ? $shift->getStartTime()->format('H:i:s') : null,
                    'end_time' => $shift->getEndTime() ? $shift->getEndTime()->format('H:i:s') : null,
                    'total_hours_worked' => $shift->getTotalHoursMinusLunch(), // Include total hours worked in the response
                ]
            ], JsonResponse::HTTP_CREATED);
        } catch (\Exception $e) {
            return new JsonResponse([
                'error' => 'Failed to add shift.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/shifts/{id}', name: 'update_shift', methods: ['PUT'])]
    public function updateShift(Request $request, int $id): JsonResponse
    {

        $start_time = 0;
        $end_time   = 0;
        $lunch_time = 0;

        $validationResult = $this->validateAccess->validateUserAccess($request, 'shifts', 'edit');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }

        try {
            $shiftRepo = $this->entityManager->getRepository(Shifts::class);
            $shift = $shiftRepo->find($id);

            if (!$shift) {
                return new JsonResponse([
                    'error' => 'Shift not found.'
                ], JsonResponse::HTTP_NOT_FOUND);
            }
           
            $data = json_decode($request->getContent(), true);

            if (isset($data['name']) && $data['name']) {
                $shift->setName($data['name']);
            }

            if (isset($data['week_sched']) && $data['week_sched']) {
                $shift->setDaysOfWeek($data['week_sched']);
            }

            if (isset($data['start_time']) && $data['start_time']) {
                $shift->setStartTime(new \DateTime($data['start_time']));
                $start_time = new \DateTime($data['start_time']);
            }
            else{
                $start_time = $shift->getStartTime();
            }

            if (isset($data['end_time']) && $data['end_time']) {
                $shift->setEndTime(new \DateTime($data['end_time']));
                $end_time = new \DateTime($data['end_time']);
            }
            else{
                $end_time = $shift->getStartTime();
            }

            if (isset($data['lunch_duration']) && $data['lunch_duration']) {
                $shift->setLunchBreakDuration($data['lunch_duration']);
                $lunch_time = $data['lunch_duration'];
            }
            else{
                $lunch_time = $shift->getLunchBreakDuration();
            }
            
            // Calculate total hours worked minus lunch break
            $totalMinutesWorked = $this->calculateTotalMinutesWorked($start_time, $end_time, $lunch_time);
            $shift->setTotalHoursMinusLunch($totalMinutesWorked);

            $errors = $this->validator->validate($shift);
            if (count($errors) > 0) {
                return new JsonResponse([
                    'error' => 'Validation failed.',
                    'messages' => (string) $errors
                ], JsonResponse::HTTP_BAD_REQUEST);
            }

            $this->entityManager->flush();

            $this->auditlog->addAuditLog($request, [], 'api/shifts/'.$id, 'Update Shift');

            return new JsonResponse([
                'message' => 'Shift updated successfully.',
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return new JsonResponse([
                'error' => 'Failed to update shift.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/api/shifts/archive/{id}', name: 'archive_shift', methods: ['PATCH'])]
    public function archiveShift(Request $request, int $id): JsonResponse
    {
        $validationResult = $this->validateAccess->validateUserAccess($request, 'shifts', 'delete');
        if ($validationResult['status'] === 'error') {
            return new JsonResponse([
                'error' => $validationResult['error'],
                'message' => $validationResult['message']
            ], $validationResult['code']);
        }
        try {
            $shiftRepo = $this->entityManager->getRepository(Shifts::class);
            $shift = $shiftRepo->find($id);

            if (!$shift) {
                return new JsonResponse([
                    'error' => 'Shift not found.'
                ], JsonResponse::HTTP_NOT_FOUND);
            }
            $shift->setArchived(true);
            $this->entityManager->flush();

            $this->auditlog->addAuditLog($request, $this->serializer->serialize($shift, 'json'), 'api/shifts/'.$id.'/archive', 'Archive Shift');

            return new JsonResponse([
                'message' => 'Shift archived successfully.'
            ], JsonResponse::HTTP_OK);
        } catch (\Exception $e) {
            return new JsonResponse([
                'error' => 'Failed to archive shift.',
                'message' => $e->getMessage()
            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    //private functions
    private function calculateTotalMinutesWorked(DateTime $startTime = null, DateTime $endTime = null, ?float $lunchDuration = null): float
    {
        if ($startTime && $endTime && $lunchDuration !== null) {
            // Calculate total minutes worked
            $interval = $startTime->diff($endTime);
            $totalMinutes = ($interval->days * 24 * 60) + ($interval->h * 60) + $interval->i;

            // Subtract lunch break duration in minutes
            $totalMinutes -= $lunchDuration;

            return $totalMinutes;
        } else {
            return 0;
        }
    }
}
