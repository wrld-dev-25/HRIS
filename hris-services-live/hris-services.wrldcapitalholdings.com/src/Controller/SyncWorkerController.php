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
class SyncWorkerController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private UserPasswordHasherInterface $passhasher;
    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passhasher)
    {
        $this->entityManager = $entityManager;
        $this->passhasher = $passhasher;
    }

    #[Route('/sync/worker', name: 'app_sync_worker')]
    public function syncLogs(CsvReader $csvReader): JsonResponse
    {
        $connection = $this->fetchConnectionParameters();

        if (!$connection) {
            return $this->json(['error' => 'Unable to fetch connection parameters'], JsonResponse::HTTP_BAD_REQUEST);
        }

        $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8mb4', $connection['host'], $connection['dbname']);
        $username = $connection['username'];
        $password = $connection['password'];

        try {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $this->syncWorkers($pdo,$csvReader);
            $this->syncWorkerLogsPerday($pdo);
            
            return $this->json(['status' => 'success'], JsonResponse::HTTP_ACCEPTED);
        } catch (\PDOException $e) {
            return $this->json(['error' => $e->getMessage()], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    private function syncWorkers(PDO $pdo, CsvReader $csvReader): void
    {
        $workerRepository = $this->entityManager->getRepository(Worker::class);
        $stmt = $pdo->query('SELECT * FROM worker');

        $batchSize = 10;
        $count = 0;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $workerItem = $workerRepository->findOneBy(["workerId" => $row['worker_id']]);
            if (!$workerItem) {
                $newWorker = new Worker();
                $newWorker->setWorkerId($row['worker_id']);
                $newWorker->setFirstname($row['first_name']);
                $newWorker->setLastname($row['last_name']);
                $newWorker->setPosition($row['position']);
                $newWorker->setPhoto($row['photo']);
                $newWorker->setErName($row['er_name']);
                $newWorker->setErContact($row['er_contact']);
                $newWorker->setStatus($row['status']);

                $this->entityManager->persist($newWorker);
                $count++;

                if ($count % $batchSize === 0) {
                    $this->entityManager->flush();
                    $this->entityManager->clear(); // Detaches all objects from Doctrine
                }
            }
            else{
                //print_r('here');
                $fullname =  $workerItem->getLastName(). " " .$workerItem->getFirstName();
                
                if($this->processCsv($csvReader,$fullname,$workerItem)){
                    //$workerItem->setEmpcode();
                    //print_r($fullname);
                }
            }
        }

        $this->entityManager->flush(); // Flush remaining entities
    }

    private function syncWorkerLogsPerday(PDO $pdo): void
    {
        date_default_timezone_set('Asia/Manila');
        //$stmt = $pdo->prepare('SELECT * FROM worker_logs WHERE login_date >= "2024-05-01" ORDER BY login_date ASC LIMIT 1');
        $stmt = $pdo->prepare('SELECT * FROM worker_logs ORDER BY login_date DESC LIMIT 1');
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $latest_date = date('Y-m-d', strtotime($result['login_date']));
        //print_r($latest_date);
        $totallogs = 0;

        $stmt2 = $pdo->prepare('SELECT * FROM worker_logs WHERE login_date > :latestDate ORDER BY login_date ASC');
        $stmt2->bindParam(':latestDate', $latest_date, PDO::PARAM_STR);
        $stmt2->execute();
        $logs = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        
        $userIds = array_column($logs, 'user_id');
        $workerLogIds = array_column($logs, 'id');
        $workers = $this->entityManager->getRepository(Worker::class)->findBy(['workerId' => $userIds]);
        $workerMap = [];
        foreach ($workers as $worker) {
            $workerMap[$worker->getWorkerId()] = $worker;
        }

        // $workerLogId = [];
        // $workerLogsItem = $this->entityManager->getRepository(WorkerLogs::class)->findBy(['worker_log_id' => $workerLogIds]);
        // foreach ($workerLogsItem as $workerLog) {
        //     $workerLogId[$workerLog->getWorkerLogId()] = $workerLog;
        // }

        $totallogs += intval(count($logs));

        foreach ($logs as $row) {
            if (!isset($workerMap[$row['user_id']])) {
                continue; // Skip if worker not found
            }
            $convert_login = \DateTime::createFromFormat('Y-m-d', $row['login_date']);
            $workerLogsItem = $this->entityManager->getRepository(WorkerLogs::class)->findOneBy(['worker_log_id' => $row['id']]);
            
            if($workerLogsItem){
                // this attendance will get types based if true so that it will be flexible if it will add to the dashboard
                $attendance = $this->entityManager->getRepository(AttendanceTypes::class)->findOneBy(['automated_attendance' => true]);
                $worker = $workerMap[$row['user_id']];
                $timezone = new \DateTimeZone('Asia/Manila');
                $loginDate = \DateTime::createFromFormat('Y-m-d H:i:s', $row['login_date']) ?: null;
                $logoutDate = \DateTime::createFromFormat('Y-m-d H:i:s', $row['logout_date']) ?: null;
                $is_calculated = $workerLogsItem->isTimeCalculated();
                // if($worker->getId() == "795"){
                //     print_r($worker->getId());
                //     print_r($loginDate);
                //     print_r($row['login_date']);
                //     echo "\n";
                // }
                
                $exceedingHours = 0;

                //Set User Settings
                if($worker->getEmpRecord() && $worker->getEmpRecord()->getUser() && $worker->getEmpRecord()->getUser()->getEmpShift()){
                    $empShiftHours = $worker->getEmpRecord()->getUser()->getEmpShift()->getTotalHoursMinusLunch();
                }
                else{
                    $empShiftHours = 480; // in minutes
                }

                //Set if Straight Time
                // if($worker->getEmpRecord() && $worker->getEmpRecord()->getUser() && $worker->getEmpRecord()->getUser()->isStraightTime() && $worker->getEmpRecord()->getUser()->getEmpShift()){
                //     if($worker->getEmpRecord()->getUser()->getEmpShift()->getLunchBreakDuration() > 60){
                //         $empShiftHours += ($worker->getEmpRecord()->getUser()->getEmpShift()->getLunchBreakDuration() / 100);
                //     }
                //     else{
                //         $empShiftHours += ($worker->getEmpRecord()->getUser()->getEmpShift()->getLunchBreakDuration() / 60);
                //     }
                // }
                
                // calculate rendered hours, OT and undertime if time in/out is not empty
                if ($loginDate && $logoutDate && !$is_calculated) {
                    $newLogIn = \DateTime::createFromFormat('Y-m-d H:i:s', $row['login_date']);
                    $newLogOut = \DateTime::createFromFormat('Y-m-d H:i:s', $row['logout_date']);
                    $newLogIn->setTime($loginDate->format('H'), $loginDate->format('i'), 0);
                    $newLogOut->setTime($logoutDate->format('H'), $logoutDate->format('i'), 0);
                    $interval = $newLogIn->diff($newLogOut, true);
                    $totalMinutesDifference = (($interval->days * 24 * 60) + ($interval->h * 60) + $interval->i) - 60;

                    // Set Rendered Hours
                    $workerLogsItem->setRenderedHours($totalMinutesDifference);

                    // Set Undertime
                    $workerLogsItem->setUndertime($this->calcUndertime($totalMinutesDifference, $empShiftHours));

                    // Set Overtime on the WorkerLogs entity
                    $workerLogsItem->setOvertime($this->calcOvertime($totalMinutesDifference, $empShiftHours));

                    // Set Assigned Attendace Type
                    $workerLogsItem->setAttendanceStatus($attendance);
                    $is_calculated = true;
                }

                $workerLogsItem->setUser($worker);
                $workerLogsItem->setType($row['type']);
                $workerLogsItem->setWorkerLogId($row['id']);
                $workerLogsItem->setLoginDate(\DateTime::createFromFormat('Y-m-d H:i:s', $row['login_date']));
                //$workerLogsItem->setLoginDate($loginDate);
                $workerLogsItem->setLogoutDate($logoutDate);
                $workerLogsItem->setTimeCalculated($is_calculated);
                $this->entityManager->persist($workerLogsItem);
                $this->updateEmpTask($worker, $loginDate, $workerLogsItem);
            }
            else {
                
                $loginDate = \DateTime::createFromFormat('Y-m-d H:i:s', $row['login_date']) ?: null;
                $logoutDate = \DateTime::createFromFormat('Y-m-d H:i:s', $row['logout_date']) ?: null;
                $worker = $workerMap[$row['user_id']];
                $ifExistingLogs = $this->entityManager->getRepository(WorkerLogs::class)->searchIfExisitingDate($loginDate->format('Y-m-d'), $worker->getId());
                //print_r($ifExistingLogs->getLoginDate());
                // Check if $ifExistingLogs is an array and if it is empty
                if (!$ifExistingLogs) { 
                    //print_r($row['login_date']);
                    // Create and persist a new WorkerLogs entry
                    $newWorkerLog = new WorkerLogs();
                    $newWorkerLog->setUser($worker);
                    $newWorkerLog->setType($row['type']);
                    $newWorkerLog->setWorkerLogId($row['id']);
                    $newWorkerLog->setLoginDate(\DateTime::createFromFormat('Y-m-d H:i:s', $row['login_date']));
                    $newWorkerLog->setLogoutDate($logoutDate);
                    $newWorkerLog->setTimeCalculated(false);
                    $newWorkerLog->setCreatedAt(new \DateTimeImmutable());
                    $this->entityManager->persist($newWorkerLog);
                    $this->updateEmpTask($worker, $loginDate, $newWorkerLog);
                    $this->entityManager->flush(); 
                }
                
            }
            
        }
        
        $this->entityManager->flush(); // Flush each batch of logs
        $this->entityManager->clear();// Detaches all objects from Doctrine   
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


    private function syncWorkerLogs(PDO $pdo): void
    {
        $workerLogsRepository = $this->entityManager->getRepository(WorkerLogs::class);
        $batchSize = 1000; // Adjust batch size as needed

        $lastId = 0;
        $continue = true;

        while ($continue) {
            $stmt = $pdo->prepare('SELECT * FROM worker_logs WHERE id > :lastId ORDER BY id LIMIT :limit');
            $stmt->bindValue(':lastId', $lastId, PDO::PARAM_INT);
            $stmt->bindValue(':limit', $batchSize, PDO::PARAM_INT);
            $stmt->execute();
            $logs = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (empty($logs)) {
                $continue = false; // No more logs to process, break the loop
                break;
            }

            // Collect user IDs for batch fetching
            $userIds = array_column($logs, 'user_id');
            $workers = $this->entityManager->getRepository(Worker::class)->findBy(['workerId' => $userIds]);
            $workerMap = [];
            foreach ($workers as $worker) {
                $workerMap[$worker->getWorkerId()] = $worker;
            }

            foreach ($logs as $row) {
                if (!isset($workerMap[$row['user_id']])) {
                    continue; // Skip if worker not found
                }
                $worker = $workerMap[$row['user_id']];

                $loginDate = \DateTime::createFromFormat('Y-m-d H:i:s', $row['login_date']) ?: null;
                $logoutDate = \DateTime::createFromFormat('Y-m-d H:i:s', $row['logout_date']) ?: null;

                $newWorkerLog = new WorkerLogs();
                $newWorkerLog->setUser($worker);
                $newWorkerLog->setType($row['type']);
                $newWorkerLog->setLoginDate($loginDate);
                $newWorkerLog->setLogoutDate($logoutDate);

                $this->entityManager->persist($newWorkerLog);
            }

            $this->entityManager->flush(); // Flush each batch of logs
            $this->entityManager->clear(); // Detaches all objects from Doctrine

            $lastId = end($logs)['id']; // Update lastId for next batch
        }

        $this->entityManager->flush(); // Flush remaining entities
    }

    private function updateEmpTask($worker, $loginDate, $workerLogs){
        $empProjectItem = $this->entityManager->getRepository(EmployeeProjects::class)->findBy(['employee' => $worker->getEmpRecord()]);
        $attendance = $this->entityManager->getRepository(AttendanceTypes::class)->findOneBy(['name' => 'Absent']);
        foreach($empProjectItem as $emp_proj_item){
            $emp_task = $emp_proj_item->getEmpTasks();
            foreach($emp_task as $emp_task_item){
                //print_r($emp_task_item->getDate()->setTime(0, 0, 0));
                //print_r($loginDate->setTime(0, 0, 0));
                if($emp_task_item->getDate()->setTime(0, 0, 0) < $loginDate->setTime(0, 0, 0) && $emp_task_item->isApproved() == null){
                    $emp_task_item->setApproved(false);
                    if($emp_task_item->getWorkerLogs()){
                        $emp_task_item->getWorkerLogs()->setAttendanceStatus($attendance);
                    }
                }
                else if($emp_task_item->getDate()->setTime(0, 0, 0) == $loginDate->setTime(0, 0, 0) && $emp_task_item->isApproved() == null){
                    //print_r('here');
                    $emp_task_item->setApproved(true);
                    $emp_task_item->setWorkerLogs($workerLogs);
                    if($workerLogs->isTimeCalculated()){
                        $emp_task_item->setRenderedHours($emp_task_item->getAssignedHours());
                    }
                }
            }
        }
    }

    private function processCsv($csvReader, $dbNames, Worker $worker)
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/excel_files/empfiles.csv';
        $csvData = $csvReader->readCsv($filePath);
        $matchingDbName = '';
        // Example processing: Output the CSV data
        foreach ($csvData as $row) {
            // Process each row as needed
            $csvFname = $row[5];
            $csvLname = $row[6];
            $csvName = $csvLname.' '.$csvFname;
            //$csvNameParts = $this->normalizeName($csvName);
            //$dbNameParts = $this->normalizeName($dbNames);
            //print_r($dbNameParts);
            //print_r($csvNameParts." ".$dbNameParts);
            //print_r($this->compareNames($csvNameParts, $dbNameParts));
            if($this->compareNames($csvName, $dbNames)){
                $empRecordItem = $this->entityManager->getRepository(EmployeeRecords::class)->findOneBy(["employee_code" => $row[1]]);
                //print_r("Match found");
                $matchingDbName = "Match found";        
                $worker->setEmpcode($row[1]); 
                $worker->setEmpRecord($empRecordItem);
            }
        }
        return $matchingDbName;
    }

    private function fetchConnectionParameters(): ?array
    {
        $connectionRepository = $this->entityManager->getRepository(SyncConnection::class);
        $connection = $connectionRepository->findOneBy(['id' => 1]);

        if (!$connection) {
            return null;
        }

        return [
            'dbname' => $connection->getDbname(),
            'username' => $connection->getUsername(),
            'password' => $connection->getPassword(),
            'host' => $connection->getHost(),
        ];
    }

    private function normalizeName(string $name): string {
        return strtolower(trim(preg_replace('/\s+/', ' ', str_replace(',', '', $name))));
    }
    
    private function splitName(string $name): array {
        return explode(' ', $this->normalizeName($name));
    }
    
    private function compareNames(string $csvName, string $dbName): bool {
        $csvNameParts = $this->splitName($csvName);
        $dbNameParts = $this->splitName($dbName);
        $filteredCsvName = strtolower(trim(preg_replace('/\s+/', ' ', str_replace(',', '', $csvName))));
        $filteredDbName = strtolower(trim(preg_replace('/\s+/', ' ', str_replace(',', '', $dbName))));
        // Calculate similarity score based on intersection of name parts
        $intersection = array_intersect($csvNameParts, $dbNameParts);
        $percent = 0;
        $score = similar_text($filteredCsvName, $filteredDbName, $percent);
        $similarity = count($intersection) / max(count($csvNameParts), count($dbNameParts));
        //print_r($csvName.' AND '.$dbName);
        // Determine a threshold for similarity (adjust as needed)
        $threshold = 0.7; // Example threshold
        
        // if($score >= $threshold){
        //     //echo $dbName;
        //     //echo $csvName;
        //     //echo $csvName. ' and '.$dbName."Score:".$similarity."\n";
        //     //echo "\n";
        // }
        return $similarity >= $threshold;
    }

}
