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
use App\Entity\EmployeeAdditionalRecords;
use App\Entity\EmployeeProjects;
use App\Entity\EmpTask;
use App\Entity\Worker;
use App\Entity\WorkerLogs;
use App\Repository\EmployeeProjectsRepository;
use App\Repository\EmployeeRecordsRepository;
use App\Repository\EmpTaskRepository;
use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\SerializerInterface;

class DTRReportController extends AbstractController
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

    //project, emp-project, task
    // all task if project filter 
    // project (project, date range)
    // task/activity (projects, date range, task)
    // employee (employee, date range)

    #[Route('/api/dtr-filter-by-task', name: 'dtr_filter_by_task', methods: ['POST'])]
    public function getRequiredData(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }

        // Retrieve EmployeeProjects based on project_id
        $employee_projects = $this->entityManager->getRepository(EmployeeProjects::class)->findBy(['project' => $data['project_id']]);

        if (!$employee_projects) {
            return $this->json(['message' => 'Employee Project not found'], JsonResponse::HTTP_NOT_FOUND);
        }
        
        $allTasks = [];
        $taskDescriptions = [];

        foreach ($employee_projects as $emp_proj_item) {
            $tasks = $emp_proj_item->getEmpTasks();

            foreach ($tasks as $task) {
                $taskDesc = $task->getTaskDesc();
                
                // Check if the description is already added
                if (!in_array($taskDesc, $taskDescriptions)) {
                    $taskDescriptions[] = $taskDesc; // Add description to the list
                    $allTasks[] = [
                        'id' => $task->getId(),
                        'description' => $taskDesc,
                        // Add other relevant fields as needed
                    ];
                }
            }
        }

        // Return unique tasks as JSON response
        return $this->json($allTasks, JsonResponse::HTTP_OK);
    }

    #[Route('/api/dtr-filter-by-project', name: 'dtr_filter_by_project', methods: ['POST'])]
    public function filterDTRByProject(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        if (empty($data['project_id'])) {
            return $this->json(['message' => 'Project ID not found'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        $projects = $data['project_id'];
        $dateRange = $data['date_range'] ?? '';
    
        // Handle date range parsing
        $dateRangeParts = explode(' to ', $dateRange);
        if (count($dateRangeParts) !== 2) {
            return $this->json(['message' => 'Invalid date range format'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        $startDate = \DateTime::createFromFormat('Y-m-d', trim($dateRangeParts[0]))->setTime(0, 0, 0);
        $endDate = \DateTime::createFromFormat('Y-m-d', trim($dateRangeParts[1]))->setTime(0, 0, 0);

        if (!$startDate || !$endDate) {
            return $this->json(['message' => 'Invalid date format'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Handle project fetching
        if ($projects === 'all') {
            $projectList = $this->entityManager->getRepository(Project::class)->findAll();
        } else {
            $projectList = $this->entityManager->getRepository(Project::class)->findBy(['id' => $projects]);
        }
    
        // Initialize the array to store the response data
        $projectArray = [];
    
        foreach ($projectList as $project) {
            $taskAggregation = [];
    
            // Fetch EmployeeProjects related to the current Project
            foreach ($project->getEmployeeProjects() as $employeeProject) {
                // Fetch EmpTasks related to the EmployeeProject
                foreach ($employeeProject->getEmpTasks() as $task) {
                    $taskDate = $task->getDate();
                    
                    // Check if the task date is within the specified date range
                    if ($taskDate >= $startDate && $taskDate <= $endDate) {
                        $description = $task->getTaskDesc();
                        $renderedTime = $task->getRenderedHours() ?? 0;
    
                        if (!isset($taskAggregation[$description])) {
                            $taskAggregation[$description] = 0;
                        }
    
                        $taskAggregation[$description] += $renderedTime;
                    }
                }
            }
    
            // Format the aggregated tasks
            $formattedTasks = [];
            foreach ($taskAggregation as $description => $totalTime) {
                $formattedTasks[] = [
                    'description' => $description,
                    'total_rendered_time' => $this->convertMinuteToMandays($totalTime),
                ];
            }
    
            // Add project data to the response array
            $projectArray[] = [
                'name' => $project->getName(),
                'tasks' => $formattedTasks
            ];
        }
        return $this->json($projectArray, JsonResponse::HTTP_OK);
    }

    #[Route('/api/dtr-filter-by-activity', name: 'dtr_filter_by_activity', methods: ['POST'])]
    public function filterDTRByTask(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        if (empty($data['project_id'])) {
            return $this->json(['message' => 'Project ID not found'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        $projects = $data['project_id'];
        $dateRange = $data['date_range'] ?? '';
        $taskDescFilter = $data['task_desc'] ?? '';
    
        // Handle date range parsing
        $dateRangeParts = explode(' to ', $dateRange);
        if (count($dateRangeParts) !== 2) {
            return $this->json(['message' => 'Invalid date range format'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        $startDate = \DateTime::createFromFormat('Y-m-d', trim($dateRangeParts[0]))->setTime(0, 0, 0);
        $endDate = \DateTime::createFromFormat('Y-m-d', trim($dateRangeParts[1]))->setTime(23, 59, 59); // Adjust end date to include end of day
    
        if (!$startDate || !$endDate) {
            return $this->json(['message' => 'Invalid date format'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Handle project fetching
        if ($projects === 'all') {
            $projectList = $this->entityManager->getRepository(Project::class)->findAll();
        } else {
            $projectList = $this->entityManager->getRepository(Project::class)->findBy(['id' => $projects]);
        }
    
        // Initialize the array to store the response data
        $projectArray = [];
    
        foreach ($projectList as $project) {
            $taskAggregation = [];
    
            // Fetch EmployeeProjects related to the current Project
            foreach ($project->getEmployeeProjects() as $employeeProject) {
                // Fetch EmpTasks related to the EmployeeProject
                foreach ($employeeProject->getEmpTasks() as $task) {
                    $taskDate = $task->getDate();
                    $employeeName = $employeeProject->getEmployee()->getLastName() . ', ' . $employeeProject->getEmployee()->getFirstName(); // Assuming getEmployee() returns an Employee object with getName()
    
                    // Check if the task date is within the specified date range
                    if ($taskDate >= $startDate && $taskDate <= $endDate) {
                        $description = $task->getTaskDesc();
                        $renderedTime = $task->getRenderedHours() ?? 0;

                        // Apply task description filter
                        if ($taskDescFilter != $description && $taskDescFilter != 'all') {
                            continue; // Skip this task if it doesn't match the filter
                        }
    
                        // Apply task description filter
                        if ($taskDescFilter != $description && $taskDescFilter != 'all') {
                            continue; // Skip this task if it doesn't match the filter
                        }
                        
                        // Initialize the task aggregation array
                        if (!isset($taskAggregation[$description])) {
                            $taskAggregation[$description] = [];
                        }
    
                        // Initialize the employee data array within each task description
                        if (!isset($taskAggregation[$description][$employeeName])) {
                            $taskAggregation[$description][$employeeName] = [];
                        }
    
                        // Initialize the date array within each employee
                        if (!isset($taskAggregation[$description][$employeeName][$taskDate->format('Y-m-d')])) {
                            $taskAggregation[$description][$employeeName][$taskDate->format('Y-m-d')] = [
                                'rendered_time' => 0,
                                'overtime' => 0,
                            ];
                        }
    
                        // Add rendered time
                        $taskAggregation[$description][$employeeName][$taskDate->format('Y-m-d')]['rendered_time'] += $renderedTime;
    
                        // Check for overtime and add it separately
                        $workerLog = $task->getWorkerLogs();
                        if ($workerLog !== null && $workerLog->isOvertimeApproved()) {
                            $overtime = $workerLog->getOvertime() ?? 0;
                            $taskAggregation[$description][$employeeName][$taskDate->format('Y-m-d')]['overtime'] += $overtime;
                        }
                    }
                }
            }
    
            // Format the aggregated tasks
            $formattedTasks = [];
            foreach ($taskAggregation as $description => $employeesData) {
                $employeeList = [];
                foreach ($employeesData as $employeeName => $dates) {
                    foreach ($dates as $date => $times) {
                        $employeeList[] = [
                            'employee' => $employeeName,
                            'date' => $date,
                            'total_rendered_time' => $this->convertMinuteToMandays($times['rendered_time']),
                            'total_overtime' => $this->convertMinuteToMandays($times['overtime']),
                        ];
                    }
                }
    
                $formattedTasks[] = [
                    'description' => $description,
                    'employees' => $employeeList,
                ];
            }
    
            // Add project data to the response array
            $projectArray[] = [
                'name' => $project->getName(),
                'tasks' => $formattedTasks
            ];
        }
    
        return $this->json($projectArray, JsonResponse::HTTP_OK);
    }
    
    #[Route('/api/dtr-filter-by-emp', name: 'dtr_filter_by_emp', methods: ['POST'])]
    public function filterDTRByEmployee(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return $this->json(['message' => 'Invalid JSON data'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        $dateRange = $data['date_range'] ?? '';
        $taskDescFilter = $data['task_desc'] ?? '';
        $employeeId = $data['employee_id'] ?? null; // Single employee ID
    
        if ($employeeId === null) {
            return $this->json(['message' => 'Employee ID is required'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Handle date range parsing
        $dateRangeParts = explode(' to ', $dateRange);
        if (count($dateRangeParts) !== 2) {
            return $this->json(['message' => 'Invalid date range format'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        $startDate = \DateTime::createFromFormat('Y-m-d', trim($dateRangeParts[0]))->setTime(0, 0, 0);
        $endDate = \DateTime::createFromFormat('Y-m-d', trim($dateRangeParts[1]))->setTime(23, 59, 59); // Adjust end date to include end of day
    
        if (!$startDate || !$endDate) {
            return $this->json(['message' => 'Invalid date format'], JsonResponse::HTTP_BAD_REQUEST);
        }
    
        // Retrieve EmployeeProjects directly using the employee ID
        $employeeProjects = $this->entityManager->getRepository(EmployeeProjects::class)
            ->findBy(['employee' => $employeeId]);
    
        if (!$employeeProjects) {
            return $this->json(['message' => 'No projects found for this employee'], JsonResponse::HTTP_NOT_FOUND);
        }
    
        // Initialize the array to store the response data
        $projectArray = [];
    
        foreach ($employeeProjects as $employeeProject) {
            $project = $employeeProject->getProject();
            $taskAggregation = [];
    
            // Fetch EmpTasks related to the EmployeeProject
            foreach ($employeeProject->getEmpTasks() as $task) {
                $taskDate = $task->getDate();
                $employeeName = $employeeProject->getEmployee()->getLastName() . ', ' . $employeeProject->getEmployee()->getFirstName(); // Get employee name
    
                // Check if the task date is within the specified date range
                if ($taskDate >= $startDate && $taskDate <= $endDate) {
                    $description = $task->getTaskDesc();
                    $renderedTime = $task->getRenderedHours() ?? 0;
    
                    // Check for overtime and add it separately
                    $overtime = 0;
                    $workerLog = $task->getWorkerLogs();
                    if ($workerLog !== null && $workerLog->isOvertimeApproved()) {
                        $overtime = $workerLog->getOvertime() ?? 0;
                    }
    
                    // Apply task description filter
                    if ($taskDescFilter && stripos($description, $taskDescFilter) === false) {
                        continue; // Skip this task if it doesn't match the filter
                    }
    
                    // Initialize the task aggregation array
                    if (!isset($taskAggregation[$description])) {
                        $taskAggregation[$description] = [];
                    }
    
                    // Initialize the employee data array within each task description
                    if (!isset($taskAggregation[$description][$employeeName])) {
                        $taskAggregation[$description][$employeeName] = [];
                    }
    
                    // Initialize the date array within each employee
                    if (!isset($taskAggregation[$description][$employeeName][$taskDate->format('Y-m-d')])) {
                        $taskAggregation[$description][$employeeName][$taskDate->format('Y-m-d')] = [
                            'rendered_time' => 0,
                            'overtime' => 0,
                        ];
                    }
    
                    // Add rendered time and overtime
                    $taskAggregation[$description][$employeeName][$taskDate->format('Y-m-d')]['rendered_time'] += $renderedTime;
                    $taskAggregation[$description][$employeeName][$taskDate->format('Y-m-d')]['overtime'] += $overtime;
                }
            }
    
            // Format the aggregated tasks
            $formattedTasks = [];
            foreach ($taskAggregation as $description => $employeesData) {
                $employeeList = [];
                foreach ($employeesData as $employeeName => $dates) {
                    foreach ($dates as $date => $times) {
                        $employeeList[] = [
                            'employee' => $employeeName,
                            'date' => $date,
                            'total_rendered_time' => $this->convertMinuteToMandays($times['rendered_time']),
                            'total_overtime' => $this->convertMinuteToMandays($times['overtime']),
                        ];
                    }
                }
    
                $formattedTasks[] = [
                    'description' => $description,
                    'employees' => $employeeList,
                ];
            }
    
            // Add project data to the response array
            $projectArray[] = [
                'name' => $project->getName(),
                'tasks' => $formattedTasks
            ];
        }
    
        return $this->json($projectArray, JsonResponse::HTTP_OK);
    }

    private function convertMinuteToMandays($minutes){

        $totalMandays = 0;

        if($minutes){
            $totalMandays = $minutes/480;
        }

        return $totalMandays;
    }
}
