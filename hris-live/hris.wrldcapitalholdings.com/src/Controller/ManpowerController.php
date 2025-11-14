<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\APIRequest;
use App\Service\PSGCService;
use PhpParser\Node\Expr\Cast\String_;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpClient\Exception\ClientException;
use DateTime;
use App\Service\APIFunctions;
use App\Service\ExportXLSService;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

class ManpowerController extends AbstractController
{
    private $apiService;
    private $apiFunctions;
    private $getProvinces;
    private $getTownCity;
    private $logger;
    private $exportxls;
    private $cache;

    public function __construct( APIRequest $apiService, APIFunctions $apiFunctions, PSGCService $getProvinces, PSGCService $getTownCity, LoggerInterface $logger, ExportXLSService $exportxls, #[Autowire(service: 'cache.my_redis')]
    AdapterInterface $cache)
    {
        $this->apiService = $apiService;
        $this->apiFunctions = $apiFunctions;
        $this->getProvinces = $getProvinces;
        $this->getTownCity = $getTownCity;
        $this->logger = $logger;
        $this->exportxls = $exportxls;
        $this->cache = $cache;
    }

    #[Route('manpower/employee', name: 'app_employee')]
    public function viewEmployees(Request $request)
    {

        if($this->apiFunctions->getDivisionList($request)->getStatusCode() === 200){ // Get Divisions list
            $response = $this->apiFunctions->getDivisionList($request)->toArray();
            $divisions = $response['division'];
        } else {
            $divisions = [];
        }

        if($this->apiFunctions->getAffiliatedCompany($request)->getStatusCode() === 200){ // Get Company list
            $response = $this->apiFunctions->getAffiliatedCompany($request)->toArray();
            $affiliated_companies = $response;
        } else {
            $affiliated_companies = [];
        }

        $page = $request->query->getInt('p', 1);
        $limit = $request->query->getInt('l', 50);

        $employeeAPI = $this->apiFunctions->getEmployeesPaginated($request, $page, $limit);

        if($employeeAPI->getStatusCode() === 200){
            $response = $employeeAPI->toArray();
            $employees = $response['employees'] ?? [];
            $totalEmployees = isset($response['totalEmployees']) ? (int) $response['totalEmployees'] : 0;
        } else {
            $employees = [];
            $totalEmployees = 0;
        }

        $provinces = $this->getProvinces->getProvinces();
        $getTownCity = $this->getTownCity->getTownCity();
        
        return $this->render('manpower/apps-employees.html.twig', [
            'employees' => $employees ? $employees : [],
            'currentPage' => $page,
            'limit' => $limit,
            'totalPages' =>  $totalEmployees ? ceil($totalEmployees / $limit) : 0,
            'totalEmployees' => $totalEmployees,
            'provinces' => $provinces,
            'townCities' => $getTownCity,
            'divisions' => $divisions,
            'affiliated_companies' => $affiliated_companies,
            //'javascriptSnippet' => $javascriptSnippet,
        ]);
    }

    // #[Route('manpower/subdivisions', name: 'app_subdivision')]
    // public function viewSubdivision(Request $request)
    // {
    //     // $session = $request->getSession();
    //     // if(!$session->has('token')){
    //     //     $session->invalidate();
    //     //     return $this->redirectToRoute('login');
    //     // }
    //     if($this->getSubdivision($request)->getStatusCode() === 200){
    //         $responseData = $this->getSubdivision($request)->toArray();
    //         return $this->render('manpower/apps-subdivision.html.twig',[
    //             'subdivisions' => $responseData['subdivisions'],
    //         ]);
    //     }
    // }

    #[Route('manpower/attendance/{id}/{emp_code}', name: 'app_manpower')]
    public function viewManpower(Request $request, string $id, string $emp_code)
    {
        //$workerData = $this->getWorker($request)->toArray();
        $token = $request->getSession()->get('token');
        $projects = $this->apiFunctions->getProject($request)->toArray();

        $formData = [
            "employee_code" => $emp_code,
        ];

        $employee = $this->apiService->apiRequest('GET', 'api/employee/profile', json_encode($formData), $token)->toArray();
        return $this->render('manpower/apps-manpower.html.twig', [
            //'workers' => $workerData['workers'],
            'employee' => $employee['employeeData'],
            'projects' => $projects['project']
        ]);
    }

#[Route('manpower/daily-time-records', name: 'app_attendance')]
public function viewAttendance(Request $request)
{
    $workerDataResponse = $this->apiFunctions->getWorker($request);
    $workerData = is_array($workerDataResponse) ? $workerDataResponse : $workerDataResponse->toArray();
    
    $projectDataResponse = $this->apiFunctions->getProject($request);
    $projectData = is_array($projectDataResponse) ? $projectDataResponse : $projectDataResponse->toArray();
    
    $empProjectsResponse = $this->apiFunctions->getEmpProjects($request);
    $empProjects = is_array($empProjectsResponse) ? $empProjectsResponse : $empProjectsResponse->toArray();
    
    $page = $request->query->getInt('p', 1);
    $limit = $request->query->getInt('l', 50);

    // Paginated Employees
    $employeeAPI = $this->apiFunctions->getEmployeesPaginated($request, $page, $limit);

    if ($employeeAPI->getStatusCode() === 200) {
        $response = $employeeAPI->toArray();
        $employees = $response['employees'];
        $totalEmployees = $response['totalEmployees'];
    } else {
        $employees = [];
        $totalEmployees = 0;
    }

    return $this->render('manpower/apps-attendance.html.twig', [
        'workers' => $workerData['workers'] ?? [],
        'projects' => $projectData['project'] ?? [],
        'tasks' => $empProjects['employee_projects'] ?? [],
        'employee_list' => $employees ?? [],
        'currentPage' => $page,
        'limit' => $limit,
        'totalPages' => ceil($totalEmployees / $limit),
        'totalEmployees' => $totalEmployees,
    ]);
}

    
    #[Route('manpower/employee-projects', name: 'app_emp_projects')]
    public function viewEmpProjects(Request $request)
    {
        $phaseData = $this->apiFunctions->getPhase($request)->toArray();
        $subdivisionData = $this->apiFunctions->getSubdivision($request)->toArray();
        // $project = $this->apiFunctions->getProject($request)->toArray();
        $empProjects = $this->apiFunctions->getEmpProjects($request)->toArray();
        return $this->render('manpower/apps-emp-project.html.twig',[
            'phase' => $phaseData['phase'],
            'subdivisions' => $subdivisionData['subdivisions'],
            'employee_projects' => $empProjects['employee_projects'],
        ]);
    }

    // #[Route('manpower/employee-project/{id}', name: 'app_emp_project_id')]
    // public function viewEmpProjectsId(Request $request, string $id)
    // {
    //     $getEmpProjectsId = $this->apiFunctions->getEmpProjectsId($request, $id)->toArray();
        
    //     if($id){
    //         $getEmployees = $this->apiFunctions->getFilteredEmployees($request, $id)->toArray();
    //     }

    //     if(empty($getEmployees)){
    //         $getEmployees = $this->apiFunctions->getEmployees($request)->toArray();
    //     }

    //     if(!empty($getEmpProjectsId)){
    //         return $this->render('manpower/apps-emp-project.html.twig',[
    //             'employee_project_id' => $getEmpProjectsId['employee_projects'],
    //             'employees_list' => $getEmployees['employees'],
    //         ]);
    //     }
    //     else{
    //         return $this->render('manpower/apps-emp-project.html.twig',[
    //             'employee_project_id' => [],
    //             'employees_list' => [],
    //         ]);
    //     }
    // }

    #[Route('manpower/employee-project/{id}', name: 'app_emp_project_id')]
    public function viewEmpProjectsId(Request $request, string $id): Response
    {
        $getEmpProjectsId = $this->apiFunctions->getEmpProjectsId($request, $id)->toArray();

        if ($id) {
            $getEmployees = $this->apiFunctions->getFilteredEmployees($request, $id)->toArray();
        }

        if (empty($getEmployees)) {
            $getEmployees = $this->apiFunctions->getEmployees($request)->toArray();
        }

        return $this->render('manpower/apps-emp-project.html.twig', [
            'employee_project_id' => $getEmpProjectsId['employee_projects'] ?? [],
            'employees_list' => $getEmployees['employees'] ?? [],
        ]);
    }

    #[Route('manpower/employee-project-json/{id}', name: 'app_emp_project_json', methods: ['GET'])]
    public function viewEmpProjectsJson(Request $request, string $id): Response
    {
        try {
            // Fetch project data
            $getEmpProjectsId = $this->apiFunctions->getEmpProjectsId($request, $id)->toArray();

            // Fetch employees filtered by project ID
            $getEmployees = $this->apiFunctions->getFilteredEmployees($request, $id)->toArray();

            // If no filtered employees, fetch all employees
            if (empty($getEmployees)) {
                $getEmployees = $this->apiFunctions->getEmployees($request)->toArray();
            }

            // Prepare the response data
            $responseData = [
                'status' => 'success',
                'message' => 'Data retrieved successfully.',
                'employee_project_id' => $getEmpProjectsId['employee_projects'] ?? [],
                'employees_list' => $getEmployees['employees'] ?? [],
            ];

            return $this->json($responseData, Response::HTTP_OK);
        } catch (\Exception $e) {
            // Handle errors and return a JSON response
            return $this->json([
                'status' => 'error',
                'message' => 'An error occurred while fetching data.',
                'error' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('form/submit_employee', name: 'submit_employee')]
    public function submitEmployeeForm(Request $request)/* : JsonResponse */
    {
        $token = $request->getSession()->get('token');

        $employeeData = [
            "first_name" => $request->request->get('firstName'),
            "middle_name" => $request->request->get('middleName'),
            "last_name" => $request->request->get('lastName'),
            "extension" => $request->request->get('extension'),
            "employee_code" => $request->request->get('employeeCode'),
            "birthdate" => $request->request->get('birthDate'),
            "birth_place" => $request->request->get('birthPlace'),
            "age" => $request->request->get('age'),
            "gender" => $request->request->get('gender'),
            "civil_status" => $request->request->get('civilStatus'),
            "email" => $request->request->get('emailAddress'),
            "zip_code" => $request->request->get('zipCode'),
            "area" => $request->request->get('province'),
            "telephone" => $request->request->get('telephoneNumber'),
            "cellphone" => $request->request->get('cellphoneNumber'),
            "present_barangay" => $request->request->get('presentBarangay'),
            "present_city" => $request->request->get('presentCity'),
            "same_address" => $request->request->get('sameAddress') === 'true' ? true : false,
            "permanent_barangay" => $request->request->get('sameAddress') === 'true' ? $request->request->get('presentBarangay') : $request->request->get('permanentBarangay'),
            "permanent_city" => $request->request->get('sameAddress') === 'true' ? $request->request->get('presentCity') : $request->request->get('permanentCity'),
            "date_hired" => $request->request->get('dateHired') != "" ? $request->request->get('dateHired') : null,
            "employee_status" => $request->request->get('employeeStatus'),
            "division" => $request->request->get('division'),
            "department" => $request->request->get('department'),
            "position" => $request->request->get('position'),
            "employment_type" => $request->request->get('employmentType'),
            "contract_expiry_date" => $request->request->get('contractExpiryDate') != "" ? $request->request->get('contractExpiryDate') : null,
            "date_separated" => $request->request->get('dateSeparated') != "" ? $request->request->get('dateSeparated') : null,
            "probationary_date" => $request->request->get('probationaryDate') != "" ? $request->request->get('probationaryDate') : null,
            "regularization_date" => $request->request->get('regularizationDate') != "" ? $request->request->get('regularizationDate') : null,
            "is_assignable" => $request->request->get('is_assignable') != "" ? $request->request->get('is_assignable') : false,
            "is_worker" => $request->request->get('is_worker') != "" ? $request->request->get('is_worker') : false,
        ];
        //dd($this->apiService->apiRequest('POST', 'api/employee201/create', json_encode($employeeData), $token));
        //dd($employeeData);
        try {
            $response = $this->apiService->apiRequest('POST', 'api/employee201/create', json_encode($employeeData), $token);
            //dd($response->getStatusCode());
            if ($response->getStatusCode() === 200 || $response->getStatusCode() === 201) {
                $this->addFlash('status', 'success');
                return $this->redirectToRoute('app_employee');
            } else {
                //$this->logger->info(json_encode($response['message']));
                $this->addFlash('status', 'failed');
                return $this->redirectToRoute('app_employee');
            }

        } catch (\Throwable $e) {
            $this->addFlash('data', 'failed');
            return $this->redirectToRoute('app_employee');
        }
    }

    #[Route('form/update/employee', name: 'update_employee')]
    public function updateEmployeeForm(Request $request)/* : JsonResponse */
    {
        $token = $request->getSession()->get('token');

        $action = $request->request->get('action') ?? null;
        $empCode = $request->request->get('employeeCode');

        $employeeData = [
            "id" => $request->request->get('employeeId'),
            "first_name" => $request->request->get('firstName'),
            "middle_name" => $request->request->get('middleName'),
            "last_name" => $request->request->get('lastName'),
            "extension" => $request->request->get('extension'),
            "employee_code" => $request->request->get('employeeCode'),
            "birthdate" => $request->request->get('birthDate'),
            "birth_place" => $request->request->get('birthPlace'),
            "age" => $request->request->get('age'),
            "gender" => $request->request->get('gender'),
            "civil_status" => $request->request->get('civilStatus'),
            "email" => $request->request->get('emailAddress'),
            "zip_code" => $request->request->get('zipCode'),
            "area" => $request->request->get('province'),
            "telephone" => $request->request->get('telephoneNumber'),
            "cellphone" => $request->request->get('cellphoneNumber'),
            "present_barangay" => $request->request->get('presentBarangay'),
            "present_city" => $request->request->get('presentCity'),
            "same_address" => $request->request->get('sameAddress') === 'true' ? true : false,
            "permanent_barangay" => $request->request->get('sameAddress') === 'true' ? $request->request->get('presentBarangay') : $request->request->get('permanentBarangay'),
            "permanent_city" => $request->request->get('sameAddress') === 'true' ? $request->request->get('presentCity') : $request->request->get('permanentCity'),
            "date_hired" => $request->request->get('dateHired') != "" ? $request->request->get('dateHired') : null,
            "employee_status" => $request->request->get('employeeStatus'),
            "division" => $request->request->get('division2'),
            "department" => $request->request->get('department2'),
            "company" => $request->request->get('company2'),
            "position" => $request->request->get('position'),
            "employment_type" => $request->request->get('employmentType'),
            "contract_expiry_date" => $request->request->get('contractExpiryDate') != "" ? $request->request->get('contractExpiryDate') : null,
            "date_separated" => $request->request->get('dateSeparated') != "" ? $request->request->get('dateSeparated') : null,
            "probationary_date" => $request->request->has('probationaryDate') && $request->request->get('probationaryDate') != "" ? $request->request->get('probationaryDate') : null,
            "regularization_date" => $request->request->get('regularizationDate') != "" ? $request->request->get('regularizationDate') : null,
            "is_assignable" => $request->request->get('is_assignable') != "" ? $request->request->get('is_assignable') : false,
            "is_worker" => $request->request->get('is_worker') != "" ? $request->request->get('is_worker') : false,

        ];
        //dd($this->apiService->apiRequest('PUT', 'api/employee201/update', json_encode($employeeData), $token));
        //dd(json_encode($employeeData));
        try {
            $response = $this->apiService->apiRequest('PUT', 'api/employee201/update', json_encode($employeeData), $token);
            if (is_array($response) && isset($response['error']) && $response['error'] === true) {
                $errorMessage = 'Error: Status code ' . $response['status'];
                $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

                return $this->redirectToRoute('app_employee', [
                    // 'employee_code' => $employee_code,
                    'status' => $response['status'],
                    'error' => $errorMessage,
                    'message' => $responseMessage,
                ]);
            }

            return $this->redirectToRoute('app_employee', [
                // 'employee_code' => $employee_code,
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
            
            // $content = $response->getContent(false);
            // $status_code = $response->getStatusCode();
            // // /dd($response->getStatusCode());
            // if ($status_code  == 200 || $status_code  == 201) {
            //     //$this->addFlash('status', 'success');
            //     //dd('here');
            //     if ($action && $action === 'update_employee') {
            //         return $this->redirectToRoute('employee_profile', ['employee_code' => $request->request->get('employeeCode'), 'status' => $status_code ]);
            //     } else {
            //         return $this->redirectToRoute('app_employee', ['status' => $status_code ]);
            //     }
            // } else {
            //     //$this->logger->info(json_encode($response['message']));
            //     //$this->addFlash('status', 'failed');
            //     //dd($response->getContent(false));
            //     $response->getHeaders(false);
            //     if ($action && $action === 'update_employee') {
            //         return $this->redirectToRoute('employee_profile', ['status' => $status_code, 'employee_code' => $request->request->get('employeeCode') ]);
            //     } else {
            //         return $this->redirectToRoute('app_employee', [
            //             'status' => $status_code,
            //             'content' => $content,
            //         ]);
            //     }
            // }

        } catch (ClientException  $e) {
            $this->addFlash('data', 'failed');
            $status_code = $e->getResponse()->getStatusCode();
            $content = $e->getResponse()->getContent(false);
            /* return $this->redirectToRoute('app_employee', [
                'status' => $status_code,
                'content' => $content,
            ]); */
            if ($action && $action === 'update_employee') {
                return $this->redirectToRoute('employee_profile', ['status' => $status_code, 'content' => $content, 'employee_code' => $request->request->get('employeeCode') ]);
            } else {
                return $this->redirectToRoute('app_employee', [
                    'status' => $status_code,
                    'content' => $content,
                ]);
            }
        }
    }

    #[Route('/import/employee201', name: 'import_emp201')]
    public function uploadCsv(Request $request): Response
    {
        $token = $request->getSession()->get('token');
        // Handle file upload
        $csvFile = $request->files->get('csv_file');
        //dd($request->files);
        if (!$csvFile) {
            return new Response('No file uploaded.', Response::HTTP_BAD_REQUEST);
        }

        // Check if the file is a CSV file
        if ('csv' !== $csvFile->getClientOriginalExtension()) {
            return new Response('Only CSV files are allowed.', Response::HTTP_BAD_REQUEST);
        }

        // Move the uploaded file to a temporary location
        try {
            $csvFile->move($this->getParameter('csv_upload_directory'), 'temp.csv');
        } catch (FileException $e) {
            return new Response('Error uploading file.', Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        // Parse CSV file
        $csvData = array_map('str_getcsv', file($this->getParameter('csv_upload_directory') . '/temp.csv'));

        // Remove temporary file
        unlink($this->getParameter('csv_upload_directory') . '/temp.csv');
        // Check for null or empty values
        foreach ($csvData as $rowIndex => $row) {
            foreach ($row as $colIndex => $value) {
                if ($value === null || $value === '') {
                    return new Response(sprintf('Null or empty value found in row %d, column %d.', $rowIndex + 1, $colIndex + 1), Response::HTTP_BAD_REQUEST);
                }
            }
        }

        // Prepare JSON data
        $jsonData = [];
        foreach ($csvData as $row) {
            $employee = [
                "first_name" => $row[0],
                "middle_name" => $row[1],
                "last_name" => $row[2],
                "extension" => $row[3],
                "employee_code" => $row[4],
                "birthdate" => $row[5],
                "birth_place" => $row[6],
                "age" => $row[7],
                "gender" => $row[8],
                "civil_status" => $row[9],
                "email" => $row[10],
                "telephone" => $row[11],
                "cellphone" => $row[12],
                "zip_code" => $row[13],
                "area" => $row[14],
                "present_barangay" => $row[15],
                "present_city" => $row[16],
                "same_address" => $row[17] === 'true' ? true : false,
                "permanent_barangay" => $row[18],
                "permanent_city" => $row[19],
                "date_hired" => $row[20],
                "employee_status" => $row[21],
                "department" => $row[22],
                "position" => $row[23],
                "employment_type" => $row[24],
                "division" => $row[25],
                "contract_expiry_date" => $row[26],
                "date_separated" => $row[27] === 'null' ? null : $row[27],
                "probationary_date" => $row[28],
                "regularization_date" => $row[29]
            ];
            $jsonData[] = $employee;
        }

        // Send data to API
        try {
            $response = $this->apiService->apiRequest('GET', 'api/subdivision', $jsonData, $token);
            return $this->render('manpower/apps-employees.html.twig', [
                "content" => $response->getContent(), 
                "status_code" => $response->getStatusCode(),
            ]);
        } catch (\Exception $e) {
            return $this->render('manpower/apps-employees.html.twig', [
                "content" => $e->getMessage(), 
                "status_code" => Response::HTTP_INTERNAL_SERVER_ERROR,
            ]);
        }
    }

    #[Route('/import-csv', name: 'import_csv')]
    public function importCsv(Request $request): Response
    {
        //dd($request->files);
        ini_set('default_socket_timeout', 600);
        if ($request->isMethod('POST')) {
            $csvFile = $request->files->get('csv_file');
            if ($csvFile && $csvFile->getClientOriginalExtension() === 'csv') {
                
                $filePath = $csvFile->getPathname();
                
                // Check if the file exists and is readable
                if (file_exists($filePath) && is_readable($filePath)) {
                    $data = $this->parseCsv($filePath); 
                } else {
                    // Log an error or handle the issue
                    return $this->redirectToRoute('app_employee', ['status' => 'failed']);
                }
                //$data = $this->parseCsv($csvFile->getPathname());
                $token = $request->getSession()->get('token');

                // Send data to your API using custom ApiService
                $data = mb_convert_encoding($data, 'UTF-8', 'auto');
                $response = $this->apiService->apiRequest('POST', 'api/employee201/create_list', json_encode($data), $token);
                
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('app_employee', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('app_employee', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
            } else {
                /* $this->addFlash('error', 'Please upload a valid CSV file.'); */
                $status = 'failed';
            }
        }
        return $this->redirectToRoute('app_employee');
    }

    private function parseCsv(string $filePath): array
    {
        $data = [];
        
        if (($handle = fopen($filePath, 'r')) !== false) {
            
            $header = fgetcsv($handle, 2000, ',');

            // Remove BOM from the first header key if it exists
            if (isset($header[0]) && substr($header[0], 0, 3) === "\xEF\xBB\xBF") {
                $header[0] = substr($header[0], 3);
            }
            
            // Remove spaces in header keys
            $header = array_map(function($key) {
                return str_replace(' ', '', $key);
            }, $header);

            while (($row = fgetcsv($handle, 2000, ',')) !== false) {
                $employeeData = array_combine($header, $row);
                // Convert 'same address' to boolean
                $employeeData['same_address'] = filter_var($employeeData['same_address'], FILTER_VALIDATE_BOOLEAN);
    
                // Map fields to backend keys
                //dd($employeeData);
                $mappedData = $this->mapFields($employeeData);
    
                // Format dates
                $mappedData['birthdate'] = isset($mappedData['birthdate']) ? date('Y-m-d', strtotime($mappedData['birthdate'])) : null;
                $mappedData['date_hired'] = isset($mappedData['date_hired']) ? date('Y-m-d', strtotime($mappedData['date_hired'])) : null;
                $mappedData['contract_expiry_date'] = isset($mappedData['contract_expiry_date']) ? date('Y-m-d', strtotime($mappedData['contract_expiry_date'])) : null;
                $mappedData['date_separated'] = isset($mappedData['date_separated']) ? date('Y-m-d', strtotime($mappedData['date_separated'])) : null;
                $mappedData['probationary_date'] = isset($mappedData['probationary_date']) ? date('Y-m-d', strtotime($mappedData['probationary_date'])) : null;
                $mappedData['regularization_date'] = isset($mappedData['regularization_date']) ? date('Y-m-d', strtotime($mappedData['regularization_date'])) : null;
                $data[] = $mappedData;
            }
            fclose($handle);
        }
        return $data;
    }

    private function mapFields(array $employeeData): array
    {
        /* Mapping for Employee Additional Records */
        $employeeArray = $employeeData;
        // Dependents
        $dependentArray = [];
        $dependentArray['spouse_name'] = $employeeData['dependent_spouse_name'];
        $dependentArray['spouse_occupation'] = $employeeData['dependent_spouse_occupation'];
        $dependentArray['spouse_company'] = $employeeData['dependent_spouse_company'];
        $dependentArray['father_name'] = $employeeData['dependent_father_name'];
        $dependentArray['father_occupation'] = $employeeData['dependent_father_occupation'];
        $dependentArray['father_deceased'] = strtolower($employeeData['dependent_father_deceased']);
        $dependentArray['mother_name'] = $employeeData['dependent_mother_name'];
        $dependentArray['mother_occupation'] = $employeeData['dependent_mother_occupation'];
        $dependentArray['mother_maiden_name'] = $employeeData['dependent_mother_maiden'];
        $dependentArray['mother_deceased'] = strtolower($employeeData['dependent_mother_deceased']);
        $dependentArray['dependents'] = $this->parseData('dependents', $employeeData['dependents']);
        $dependentArray['other_dependent_name'] = $employeeData['other_dependent_name'];
        $dependentArray['other_dependent_birthdate'] = $employeeData['other_dependent_birthdate'];
        $dependentArray['other_dependent_relationship'] = $employeeData['other_dependent_relationship'];
        $dependentArray['emergency_contact_name'] = $employeeData['emergency_name'];
        $dependentArray['emergency_address'] = $employeeData['emergency_address'];
        $dependentArray['emergency_telephone'] = $employeeData['emergency_telephone'];

        // Past Employment Records
        $pastEmploymentArray = $this->parseData('past_employment', $employeeData['past_employment_record']);

        // Educational Background
        $educationalArray = $this->parseData('educational_background', $employeeData['educational_background']);

        // Seminars and Trainings
        $seminarArray = $this->parseData('seminars_trainings', $employeeData['seminar_training']);

        // Seminars and Trainings
        $assessmentArray = $this->parseData('assessments_exams', $employeeData['assessment_exam']);

        // Seminars and Trainings
        $skillArray = $this->parseData('skills', $employeeData['skill']);

        // Seminars and Trainings
        $awardArray = $this->parseData('awards', $employeeData['award']);

        // Seminars and Trainings
        $licenseArray = $this->parseData('licenses', $employeeData['license']);

        // Seminars and Trainings
        $violationArray = $this->parseData('violations', $employeeData['violation']);

        // Seminars and Trainings
        $medicalArray = $this->parseData('medical_drug_tests', $employeeData['medical_drug_test']);
        return [
            'is_assignable' => $employeeData['is_assignable'] ?? false,
            'first_name' => $employeeData['first_name'] ?? null,
            'middle_name' => $employeeData['middle_name'] ?? null,
            'last_name' => $employeeData['last_name'] ?? null,
            'extension' => $employeeData['extension'] ?? null,
            'employee_code' => $employeeData['employee_code'] ?? null,
            'birthdate' => $employeeData['birthdate'] ?? null,
            'birth_place' => $employeeData['birth_place'] ?? null,
            'age' => !empty($employeeData['age']) ? $employeeData['age'] : 0,
            'gender' => $employeeData['gender'] ?? null,
            'civil_status' => $employeeData['civil_status'] ?? null,
            'email' => $employeeData['email'] ?? null,
            'telephone' => $employeeData['telephone'] ?? null,
            'cellphone' => $employeeData['cellphone'] ?? null,
            'zip_code' => $employeeData['zip_code'] ?? null,
            'area' => $employeeData['area'] ?? null,
            'present_barangay' => $employeeData['present_barangay'] ?? null,
            'present_city' => $employeeData['present_city'] ?? null,
            'same_address' => $employeeData['same_address'] ?? null,
            'permanent_barangay' => $employeeData['permanent_barangay'] ?? null,
            'permanent_city' => $employeeData['permanent_city'] ?? null,
            'date_hired' => $employeeData['date_hired'] ?? null,
            'employee_status' => $employeeData['employee_status'] ?? null,
            'position' => $employeeData['position'] ?? null,
            'employment_type' => $employeeData['employment_type'] ?? null,
            'contract_expiry_date' => $employeeData['contract_expiry_date'] ?? null,
            'date_separated' => $employeeData['date_separated'] ?? null,
            'probationary_date' => $employeeData['probationary_date'] ?? null,
            'regularization_date' => $employeeData['regularization_date'] ?? null,
            'division' => $employeeData['division'] ?? null,
            'department' => $employeeData['department'] ?? null,
            'school_graduated' => $employeeData['school_graduated'] ?? null,
            'course' => $employeeData['course'] ?? null,
            'career_band_level' => $employeeData['career_band_level'] ?? null,
            'career_global_grade' => $employeeData['career_global_grade'] ?? null,
            'cash_card_number' => $employeeData['cash_card_number'] ?? null,
            'hmo_account' => $employeeData['hmo_account'] ?? null,
            'sss_number' => $employeeData['sss_number'] ?? null,
            'philhealth_number' => $employeeData['philhealth_number'] ?? null,
            'pagibig_number' => $employeeData['pagibig_number'] ?? null,
            'tin_number' => $employeeData['tin_number'] ?? null,
            'dependents' => $dependentArray ?? [],
            'past_employment_record' => $pastEmploymentArray ?? [],
            'educational_background' => $educationalArray ?? [],
            'seminars_trainings' => $seminarArray ?? [],
            'assessments_exams' => $assessmentArray ?? [],
            'skills' => $skillArray ?? [],
            'awards' => $awardArray ?? [],
            'licenses' => $licenseArray ?? [],
            'violations' => $violationArray ?? [],
            'medical_drug_tests' => $medicalArray ?? [],
        ];
    }

    private function parseData($header, $data) {
        if (empty($data) || $data === null) {
            return [];
        }
        // Split the data by semi-colon
        $entries = explode(';', $data);
        
        // Initialize an array to hold the final result
        $result = array();

        foreach ($entries as $entry) {
            // Split each entry by pipe
            $values = explode('|', $entry);

            //dd($values);
            switch ($header) {
                case 'dependents':
                    // Add the values to the result array
                    $result[] = array(
                        'name' => $values[0],
                        'birthdate' => $this->formatDate($values[1]) ?? '',
                    );
                    break;
                case 'past_employment':
                    // Add the values to the result array
                    $result[] = array(
                        'company_name' => $values[0],
                        'date_hired' => $this->formatDate($values[1]) ?? '',
                        'first_position' => $values[2],
                        'last_position' => $values[3],
                        'reason' => $values[4],
                        'salary' => $values[5],
                        'length_stay' => $values[6],
                        'date_terminated' =>$this->formatDate($values[7]) ?? '',
                    );
                    break;
                case 'educational_background':
                    // Add the values to the result array
                    $result[] = array(
                        'level' => $values[0],
                        'school' => $values[1],
                        'course' => $values[2],
                        'year' => $values[3],
                    );
                    break;
                case 'seminars_trainings':
                    // Add the values to the result array
                    $result[] = array(
                        'seminar' => $values[0],
                        'serminar_date' => $this->formatDate($values[1]),
                    );
                    break;
                case 'assessments_exams':
                    // Add the values to the result array
                    $result[] = array(
                        'exam' => $values[0],
                        'score' => $values[1],
                        'notes' => $values[2],
                    );
                    break;
                case 'skills':
                    // Add the values to the result array
                    $result[] = array(
                        'skill_code' => $values[0],
                        'skill_description' => $values[1],
                        'skill_priority' => $values[2],
                    );
                    break;
                case 'awards':
                    // Add the values to the result array
                    $result[] = array(
                        'award_date' => $this->formatDate($values[0]),
                        'award_code' => $values[1],
                        'award_description' => $values[2],
                    );
                    break;
                case 'licenses':
                    // Add the values to the result array
                    $result[] = array(
                        'license_date' => $this->formatDate($values[0]),
                        'license' => $values[1],
                        'license_remarks' => $values[2],
                    );
                    break;
                case 'violations':
                    // Add the values to the result array
                    $result[] = array(
                        'violation_date' => $this->formatDate($values[0]),
                        'violation_code' => $values[1],
                        'violation_day_suspension' => $values[2],
                        'violation_remark' => $values[3],
                    );
                    break;
                case 'medical_drug_tests':
                    // Add the values to the result array
                    $result[] = array(
                        'medical_date' => $this->formatDate($values[0]),
                        'medical_result' => $values[1],
                        'medical_center' => $values[2],
                        'medical_remark' => $values[3],
                    );
                    break;
                                
                default:
                    $result = [];
                    break;
            }  
        }      
        
        return $result;
    }

    private function formatDate($date) {
        if (empty($date) || $date === null) {
            return null;
        }
        // Convert the date string to a DateTime object
        $dateObj = DateTime::createFromFormat('m/d/Y', $date);
        
        // Format the date to "d M, Y"
        return $dateObj->format('d M, Y');
    }

    #[Route('/employee_project/create', name: 'create_employee_project', methods: ['POST'])]
    public function createEmployeeProject(Request $request)
    {
        $token = $request->getSession()->get('token');

        $data = [
            'project_id' => $request->request->get('project_id'),
            'employee_id' => $request->request->get('employee_id'),
            'date' => $request->request->get('date'),
            'assigned_hours' => $this->convertHoursToMinutes($request->request->get('assigned_hours')) ,
        ];

        try {
            $jsonBody = [
                "project_id" => $data['project_id'],
                "employee_id" => $data['employee_id'],
                "date" => $data['date'],
                "assigned_hours" => $data['assigned_hours'],
            ];

            // Assuming apiService is a service that makes an API request
            $response = $this->apiService->apiRequest('POST', 'api/employee_project/create', json_encode($jsonBody), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('app_emp_projects', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
            return $this->redirectToRoute('app_emp_projects', [
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        } catch (\Throwable $e) {
            return $this->redirectToRoute('app_emp_projects',['status' => $e]);
        }
    }

    #[Route('/form/submit_task', name: 'submit_emp_task')]
    public function submitEmpTask(Request $request, HttpClientInterface $httpClient): Response
    {
        $token = $request->getSession()->get('token');
        $proj_id = $request->request->get("proj_id");
        try {
            $taskDate = $request->request->get("task_date");
            //dd($taskDate);
            if (strpos($taskDate, ' to ') !== false) {
                // If the task_date contains 'to', it is a date range
                list($start_date, $end_date) = explode(' to ', $taskDate);
            } else {
                // Otherwise, it is a single date
                $start_date = $taskDate;
                $end_date = $taskDate;
            }
    
            $jsonBody = [
                "emp_project" => $request->request->get("emp_project"),
                "task_desc" => $request->request->get("task_desc"),
                "assigned_hours" => $this->convertHoursToMinutesV2($request->request->get('assigned_hours')),
                "start_date" => $start_date,
                "end_date" => isset($end_date) ? $end_date : $start_date,
            ];
    
            //dd(json_encode($jsonBody)); // This will dump the JSON body for debugging purposes
    
            // Assuming apiService is a service that makes an API request
            $response = $this->apiService->apiRequest('POST', 'api/emp-tasks/create', json_encode($jsonBody), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('app_emp_project_id', [
                        'id' => $proj_id,
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
            return $this->redirectToRoute('app_emp_project_id', [
                'id' => $proj_id,
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        } catch (\Throwable $e) {
            return $this->redirectToRoute('app_emp_project_id', ['id' => $proj_id]);
        }
    }

    #[Route('/form/submit-dtr-task', name: 'submit_emp_dtr_task')]
    public function submitDTREmpTask(Request $request, HttpClientInterface $httpClient): Response
    {
        $token = $request->getSession()->get('token');
        $proj_id = $request->request->get("proj_id");
        $emp_code = $request->request->get("emp_code");
        $emp_worker_id = $request->request->get("emp_worker_id");
        try {
            $taskDate = $request->request->get("task_date");
            //dd($taskDate);
            if (strpos($taskDate, ' to ') !== false) {
                // If the task_date contains 'to', it is a date range
                list($start_date, $end_date) = explode(' to ', $taskDate);
            } else {
                // Otherwise, it is a single date
                $start_date = $taskDate;
                $end_date = $taskDate;
            }
    
            $jsonBody = [
                "project_id" => $request->request->get("project_id"),
                "employee_id" => $request->request->get("employee_id"),
                "task_desc" => $request->request->get("task_desc"),
                "assigned_hours" => $this->convertHoursToMinutesV2($request->request->get('assigned_hours')),
                "start_date" => $start_date,
                "end_date" => isset($end_date) ? $end_date : $start_date,
            ]; 
            //dd(json_encode($jsonBody)); // This will dump the JSON body for debugging purposes
            // Assuming apiService is a service that makes an API request
            
            $response = $this->apiService->apiRequest('POST', 'api/emp-tasks-dtr/create', json_encode($jsonBody), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('app_manpower', [
                        'id' => $emp_worker_id,
                        'emp_code' => $emp_code,
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
            return $this->redirectToRoute('app_manpower', ['id' => $emp_worker_id, 'emp_code' => $emp_code,
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',]);
        } catch (\Throwable $e) {
            return $this->redirectToRoute('app_manpower', ['id' => $emp_worker_id, 'emp_code' => $emp_code]);
        }
    }
    
    #[Route('/form/archive-employee-project', name: 'archive_emp_proj')]
    public function deleteEmpProj(Request $request, HttpClientInterface $httpClient): Response
    {
        $token = $request->getSession()->get('token');
        $emp_proj_id = $request->request->get("emp_proj_id");
        $proj_id = $request->request->get("proj_id");
        try {
            //dd(json_encode($jsonBody));
            // Assuming apiService is a service that makes an API request
            $response = $this->apiService->apiRequest('DELETE', 'api/employee-projects/archive/'.$emp_proj_id, [], $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('app_emp_project_id', [
                        'id' => $proj_id,
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
            return $this->redirectToRoute('app_emp_project_id', ['id' => $proj_id,'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',]);

            // Here we assume the API response contains the created employee project data
            //return $this->redirectToRoute('app_emp_project_id',['id' => $proj_id, 'status' => $responseData->getStatusCode()]);
        } catch (\Throwable $e) {
            // /$response->getHeaders(false);
            return $this->redirectToRoute('app_emp_project_id', ['id' => $proj_id]);
        }
    }

    #[Route('/form/add-employee', name: 'add_emp_proj')]
    public function addNewEmpProj(Request $request, HttpClientInterface $httpClient): Response
    {
        $token = $request->getSession()->get('token');
        $proj_id = $request->request->get("proj_id");
        $employeeIds = $request->request->all("employee_id");
    
        // To see if you are receiving the correct data
        // dd($employeeIds);
    
        try {
            foreach ($employeeIds as $empId) {
                $jsonBody = [
                    "project_id" => $proj_id,
                    "employee_id" => $empId,
                ];
    
                // Assuming apiService is a service that makes an API request
                $responseData = $this->apiService->apiRequest('POST', 'api/employee-projects/create', json_encode($jsonBody), $token);
                $response = $responseData->toArray();
                $status_code = $responseData->getStatusCode();
    
                if ($status_code != 200 && $status_code != 201) {
                    // Log error or add flash message if needed
                    // $this->logger->info(json_encode($response['message']));
                    // $this->addFlash('status', 'failed');
                    // If needed, break or handle specific error scenario
                    $responseData->getHeaders(false);
                }
            }
    
            // Assuming successful completion of all API requests
            return $this->redirectToRoute('app_emp_project_id', ['id' => $proj_id, 'status' => 200]);
        } catch (\Throwable $e) {
            // Handle exception, log error if needed
            // $this->logger->error($e->getMessage());
            return $this->redirectToRoute('app_emp_project_id', ['id' => $proj_id, 'status' => 500]);
        }
    }

    #[Route('/form/unassign-employee', name: 'unassign_emp_proj')]
    public function unassignEmpProj(Request $request, HttpClientInterface $httpClient): Response
    {
        $token = $request->getSession()->get('token');
        $proj_id = $request->request->get("proj_id");
        $employeeIds = $request->request->all("employee_id");
    
        // To see if you are receiving the correct data
        // dd($employeeIds);
    
        try {
            foreach ($employeeIds as $empId) {
                $jsonBody = [
                    "project_id" => $proj_id,
                    "employee_id" => $empId,
                ];
    
                // Assuming apiService is a service that makes an API request
                $responseData = $this->apiService->apiRequest('POST', 'api/employee-projects/unassign', json_encode($jsonBody), $token);
                $response = $responseData->toArray();
                $status_code = $responseData->getStatusCode();
    
                if ($status_code != 200 && $status_code != 201) {
                    // Log error or add flash message if needed
                    // $this->logger->info(json_encode($response['message']));
                    // $this->addFlash('status', 'failed');
                    // If needed, break or handle specific error scenario
                    $responseData->getHeaders(false);
                }
            }
    
            // Assuming successful completion of all API requests
            return $this->redirectToRoute('app_emp_project_id', ['id' => $proj_id, 'status' => 200]);
        } catch (\Throwable $e) {
            // Handle exception, log error if needed
            // $this->logger->error($e->getMessage());
            return $this->redirectToRoute('app_emp_project_id', ['id' => $proj_id, 'status' => 500]);
        }
    }
    

    #[Route('/manpower/export_xls', name: 'export_xls')]
    public function exportXls(Request $request, HttpClientInterface $httpClient): Response
    {
        $token = $request->getSession()->get('token');
        $filter = $request->request->get("filter");
        $projectFilter = $request->request->get("project");
        $taskFilter = $request->request->get("task_activity") ?? null;
        $employeeFilter = $request->request->get("employee") ?? null;
        $dateFilter = $request->request->get("date");
        $filterArray = [];
        $data = [];

        if ($filter == 'task_activity') {

            $filterArray = [
                'filter' => $filter,
                'project_id' => $projectFilter,
                'task_desc' => $taskFilter,
                'date_range' => $dateFilter
            ];
            // fetch data from API 
            $apiResponse = $this->apiService->apiRequest('POST', 'api/dtr-filter-by-activity', json_encode($filterArray), $token);
            $data = $apiResponse->toArray();
            // get downloadable xls file from Export Service
            //dd($data);
            $response = $this->exportxls->exportTasks($filterArray, $data);

        } elseif ($filter == 'employee') {

            $filterArray = [
                'filter' => $filter,
                'employee_id' => $employeeFilter,
                'date_range' => $dateFilter
            ];

            // fetch data from API 
            $apiResponse = $this->apiService->apiRequest('POST', 'api/dtr-filter-by-emp', json_encode($filterArray), $token);
            $data = $apiResponse->toArray();
            // get downloadable xls file from Export Service
            //dd($data);
            $response = $this->exportxls->exportEmployeeTasks($filterArray, $data);

        } else {

            $filterArray = [
                'filter' => $filter,
                'project_id' => $projectFilter,
                'date_range' => $dateFilter
            ];
            // fetch data from API 
            $apiResponse = $this->apiService->apiRequest('POST', 'api/dtr-filter-by-project', json_encode($filterArray), $token);
            $data = $apiResponse->toArray();
            //return dd($data);
            // get downloadable xls file from Export Service
            $response = $this->exportxls->exportProjects($filterArray, $data);
        }
        return $response;
    }

    #[Route('/import-dtr', name: 'import_dtr')]
    public function importDTR(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $csvFile = $request->files->get('csv_file');
            if ($csvFile && $csvFile->getClientOriginalExtension() === 'csv') {
                $data = $this->parseCsvDtr($csvFile->getPathname());
                $token = $request->getSession()->get('token');
                //dd(json_encode($data));
                // Send data to your API using custom ApiService
                $response = $this->apiService->apiRequest('POST', 'api/worker_logs/create', json_encode($data), $token);
                
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('app_attendance', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('app_attendance',[
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
            } else {
                // Add a flash message to notify the user about the invalid CSV file upload
                $this->addFlash('error', 'Please upload a valid CSV file.');
            }
        }
        return $this->redirectToRoute('app_attendance');
    }

    private function parseCsvDtr($filePath)
    {
        $data = [];
        if (($handle = fopen($filePath, 'r')) !== false) {
            // Get the headers
            $headers = fgetcsv($handle, 1000, ',');

            // Parse rows
            while (($row = fgetcsv($handle, 1000, ',')) !== false) {
                $data[] = array_combine($headers, $row);
            }
            fclose($handle);
        }
        // Convert data to the desired format
        $formattedData = [];
        foreach ($data as $row) {
            $formattedData[] = [
                'empcode' => $row['employee_code'],
                'firstname' => $row['firstname'],
                'middlename' => $row['middlename'],
                'lastname' => $row['lastname'],
                'date' => $row['date'],
                'timein' => $row['timein'],
                'timeout' => $row['timeout'],
            ];
        }

        return $formattedData;
    }

    private function mapDivision($code)
    {
        $divisions = [
            'DIV001' => 'Administration Services Group',
            'ND001' => 'New Division',
        ];
        return $divisions[$code] ?? null;
    }

    private function mapDepartment($code)
    {
        $departments = [
            'DEP001' => 'Administration',
            'ND001' => 'New Department',
        ];
        return $departments[$code] ?? null;
    }

    //private functions

    /* private function getSubdivision($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/subdivision', $jsonBody, $token);
        return $response;
    } */
    
    private function convertHoursToMinutes($time){
        if($time){
            return ($time * 60);
        }
        else{
            return 0;
        }
    }

    private function convertHoursToMinutesV2($time){
        if ($time) {
            // Split the time string into hours and minutes
            list($hours, $minutes) = explode(':', $time);
            
            // Ensure hours and minutes are integers
            $hours = (int) $hours;
            $minutes = (int) $minutes;
    
            // Convert to total minutes
            return ($hours * 60) + $minutes;
        } else {
            return 0;
        }
    }
}
