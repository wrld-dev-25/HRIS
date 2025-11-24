<?php

namespace App\Controller;

use App\Entity\AttendanceTypes;
use App\Entity\EmployeeProjects;
use App\Entity\EmployeeRecords;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;
use PDO;
use App\Entity\Worker;
use App\Entity\WorkerLogs;
use App\Repository\WorkerRepository;
use App\Repository\WorkerLogsRepository;
use App\Entity\SyncConnection;
use App\Service\CsvReader;

class CheckEmpDtrController extends AbstractController
{

    private EntityManagerInterface $entityManager;
    private UserPasswordHasherInterface $passhasher;
    
    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passhasher)
    {
        $this->entityManager = $entityManager;
        $this->passhasher = $passhasher;
        date_default_timezone_set('Asia/Manila');
    }

    #[Route('/check/emp/dtr', name: 'app_check_emp_dtr')]
    public function check_dtr(): JsonResponse
    {
        $workerLogsItem = $this->entityManager->getRepository(WorkerLogs::class)->findOneBy([], ['loginDate' => 'DESC']);
        $cutoffRange = $this->getCurrentCutoffDateRange($workerLogsItem->getLoginDate());
    
        $workers = $this->entityManager->getRepository(Worker::class)->findAllWithEmpRecord();
    
        $workersData = array_map(function ($worker) use ($cutoffRange) {
            $workerId = $worker->getId();
            $shift = $worker->getEmpRecord()->getUser()->getEmpShift();
            $shiftDays = $shift ? $shift->getDaysOfWeek() : [];
            
            $undertime = 480;
            if($worker->getEmpRecord()->getUser()->getEmpShift()){
                $undertime = $worker->getEmpRecord()->getUser()->getEmpShift()->getTotalHoursMinusLunch();
            }
    
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
                } else {
                    // If not logged, add to absenceDays
                    $dayOfWeek = $currentDate->format('N'); // 1 (for Monday) through 7 (for Sunday)
                    if (in_array($dayOfWeek, $shiftDays)) {
                        $this->updateEmpTask($worker, $currentDate);
                        //print_r($currentDate->format('Y-m-d'));
                        $absenceDays[] = $currentDate->format('Y-m-d');
                    }
                }
                $currentDate->modify('+1 day');
            }
            //print_r($workerId);
            //print_r($absenceDays);
            // return [
            //     'id' => $worker->getId(),
            //     'workerId' => $worker->getWorkerId(),
            //     'firstname' => $worker->getFirstname(),
            //     'lastname' => $worker->getLastname(),
            //     'position' => $worker->getPosition(),
            //     'absenceDays' => $absenceDays, // Include absence days in the response
            // ];
        }, $workers);
    
        return $this->json([
            'message' => 'Worker absence data',
            'data' => $workersData,
        ]);
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

    private function createNewAbsentWorkerLogs($worker, $loginDate, $undertime){
        // Create and persist a new WorkerLogs entry
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
        $newWorkerLog->setUndertime($undertime);
        $this->entityManager->persist($newWorkerLog);
        $this->entityManager->flush();
        $this->updateEmpTask($worker, $loginDate, $newWorkerLog);
    }

    private function updateEmpTask($worker, $loginDate){
        
        $empProjectItem = $this->entityManager->getRepository(EmployeeProjects::class)->findBy(['employee' => $worker->getEmpRecord()]);
        $attendance = $this->entityManager->getRepository(AttendanceTypes::class)->findOneBy(['name' => 'Absent']);
        foreach($empProjectItem as $emp_proj_item){
            
            $emp_task = $emp_proj_item->getEmpTasks();
            foreach($emp_task as $emp_task_item){
                //print_r('here');
                if($emp_task_item->getDate()->setTime(0, 0, 0) == $loginDate->setTime(0, 0, 0) && $emp_task_item->isApproved() == null){
                    //print_r($emp_task_item->getId());
                    print_r('here');
                    $emp_task_item->setApproved(false);
                    $emp_task_item->setRenderedHours(0);
                    $this->entityManager->flush(); // Flush each batch of logs
                }
            }
        }
        $this->entityManager->clear();// Detaches all objects from Doctrine   
    }
}
