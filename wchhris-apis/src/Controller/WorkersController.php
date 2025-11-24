<?php

namespace App\Controller;

use App\Entity\AttendanceTypes;
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
use App\Entity\Worker;
use App\Entity\WorkerLogs;
use App\Repository\EmployeeProjectsRepository;
use App\Repository\EmployeeRecordsRepository;
use App\Repository\EmpTaskRepository;
use App\Repository\ProjectRepository;
use App\Repository\WorkerLogsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\SerializerInterface;

class WorkersController extends AbstractController
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


    #[Route('/api/worker-overtime/approve/{id}', name: 'approve_worker_ot', methods: ['PATCH'])]
    public function approveWorkerOvertime($id, Request $request, EntityManagerInterface $entityManager, WorkerLogsRepository $repository): JsonResponse
    {
        $workerLog = $repository->find(intval($id));
        if (!$workerLog) {
            return $this->json(['message' => 'Worker log not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $workerLog->setOvertimeApproved(true);
        $entityManager->persist($workerLog);
        $entityManager->flush();

        return $this->json(['message' => 'Overtime approved.'], JsonResponse::HTTP_OK);
    }

    #[Route('/api/worker-overtime/deny/{id}', name: 'deny_worker_ot', methods: ['PATCH'])]
    public function denyWorkerOvertime($id, Request $request, EntityManagerInterface $entityManager, WorkerLogsRepository $repository): JsonResponse
    {
        $workerLog = $repository->find(intval($id));
        if (!$workerLog) {
            return $this->json(['message' => 'Worker log not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $workerLog->setOvertimeApproved(false);
        $entityManager->persist($workerLog);
        $entityManager->flush();

        return $this->json(['message' => 'Overtime denied.'], JsonResponse::HTTP_OK);
    }

    #[Route('/api/worker-overtime/update_attendance/{id}', name: 'update_worker_attendance', methods: ['POST'])]
    public function updateWorkerLogsByAttendance($id, Request $request, EntityManagerInterface $entityManager, WorkerLogsRepository $repository): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $attendance_id = $data['attendance_id'] ?? null;
        $attendanceType = $this->entityManager->getRepository(AttendanceTypes::class)->find($attendance_id);
        if (!$attendanceType) {
            return $this->json(['message' => 'Attendance not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $workerLog = $repository->find(intval($id));
        if (!$workerLog) {
            return $this->json(['message' => 'Worker log not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $adjusted_rendered_hours = 0;
        if($attendanceType->isHoursRendered()){
            $adjusted_rendered_hours = $workerLog->getUser()->getEmpRecord()->getUser()->getEmpShift()->getTotalHoursMinusLunch();
            if($workerLog->getUser()->getEmpRecord() && $workerLog->getUser()->getEmpRecord()->getUser() && $workerLog->getUser()->getEmpRecord()->getUser()->isStraightTime() && $workerLog->getUser()->getEmpRecord()->getUser()->getEmpShift()){
                if($workerLog->getUser()->getEmpRecord()->getUser()->getEmpShift()->getLunchBreakDuration() > 60){
                    $adjusted_rendered_hours += ($workerLog->getUser()->getEmpRecord()->getUser()->getEmpShift()->getLunchBreakDuration() / 100);
                }
                else{
                    $adjusted_rendered_hours += ($workerLog->getUser()->getEmpRecord()->getUser()->getEmpShift()->getLunchBreakDuration() / 60);
                }
            }
            $workerLog->setRenderedHours($adjusted_rendered_hours);
            $workerLog->getEmpTasks();
            $empTasks = $workerLog->getEmpTasks();

            // Example: Update rendered_hours for each EmpTask
            foreach ($empTasks as $empTask) {
                // Example logic to update rendered_hours
                $renderedHours = $empTask->getRenderedHours() ?? 0; // Fetch existing rendered hours or default to 0
                $newRenderedHours = $renderedHours + 1; // Example: Increment rendered_hours by 1

                // Update EmpTask's rendered_hours
                $empTask->setRenderedHours($empTask->getAssignedHours());
                $empTask->setApproved(true);
                // Persist EmpTask if necessary (depends on your application flow)
                // $entityManager->persist($empTask);
            }
        }
        else{
            $workerLog->setRenderedHours(0);
            $empTasks = $workerLog->getEmpTasks();

            // Example: Update rendered_hours for each EmpTask
            foreach ($empTasks as $empTask) {
                // Example logic to update rendered_hours
                $renderedHours = $empTask->getRenderedHours() ?? 0; // Fetch existing rendered hours or default to 0
                $newRenderedHours = $renderedHours + 1; // Example: Increment rendered_hours by 1

                // Update EmpTask's rendered_hours
                $empTask->setRenderedHours(0);
                $empTask->setApproved(false);

                // Persist EmpTask if necessary (depends on your application flow)
                // $entityManager->persist($empTask);
            }
        }

        $workerLog->setAttendanceStatus($attendanceType);

        $entityManager->persist($workerLog);
        $entityManager->flush();

        return $this->json(['message' => 'Rendered hours adjusted.'], JsonResponse::HTTP_OK);
    }

    #[Route('/api/straight_time/{id}', name: 'straight_time', methods: ['PATCH'])]
    public function addLunchBreakTimeToRendered($id, Request $request, EntityManagerInterface $entityManager, WorkerLogsRepository $repository): JsonResponse
    {
        
        $workerLog = $repository->find(intval($id));
        if (!$workerLog) {
            return $this->json(['message' => 'Worker log not found'], JsonResponse::HTTP_NOT_FOUND);
        }

        $lunch_duration = $workerLog->getUser()->getEmpRecord()->getUser()->getEmpShift()->getLunchBreakDuration();
        $empShiftwithLunch = $workerLog->getUser()->getEmpRecord()->getUser()->getEmpShift()->getTotalHoursMinusLunch();
        $timezone = new \DateTimeZone('Asia/Manila');
        $newLogIn = $workerLog->getLoginDate();
        $newLogOut = $workerLog->getLogoutDate();
        $newLogIn->setTime($newLogIn->format('H'), $newLogIn->format('i'), 0);
        $newLogOut->setTime($newLogOut->format('H'), $newLogOut->format('i'), 0);
        $interval = $newLogIn->diff($newLogOut, true);
        $totalMinutesDifference = (($interval->days * 24 * 60) + ($interval->h * 60) + $interval->i) - 60;

        $workerLog->setUndertime($this->calcUndertime($totalMinutesDifference + $lunch_duration, $empShiftwithLunch));
        $workerLog->setOvertime($this->calcOvertime($totalMinutesDifference, $empShiftwithLunch));
        $workerLog->setRenderedHours($totalMinutesDifference + $lunch_duration);

        $entityManager->persist($workerLog);
        $entityManager->flush();

        return $this->json(['message' => 'Straight Time applied.'], JsonResponse::HTTP_OK);
    }

    private function calcOvertime($totalMinutesDifference, $empShiftHours) {
    
        if ($totalMinutesDifference > $empShiftHours) {
            $exceedingMinutes = $totalMinutesDifference - $empShiftHours;
        } else {
            $exceedingMinutes = 0;
        }
    
        // Format exceeding hours to 2 decimal places
        $exceedingMinutesFormatted = number_format($exceedingMinutes, 2);
    
        return floatval($exceedingMinutesFormatted);
    }
    
    private function calcUndertime($totalMinutesDifference, $empShiftHours) {
        if ($totalMinutesDifference < $empShiftHours) {
            $undertimeMinutes = $empShiftHours - $totalMinutesDifference;
        } else {
            $undertimeMinutes = 0;
        }
    
        // Format exceeding hours to 2 decimal places
        $undertimeMinutesFormatted = number_format($undertimeMinutes, 2);
    
        return floatval($undertimeMinutesFormatted);
    }
}
