<?php

namespace App\Controller;

use App\Service\APIRequest;
use App\Service\PSGCService;
use Psr\Log\LoggerInterface;
use App\Service\APIFunctions;
use App\Service\ExportXLSService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/leave-request')]
class LeaveRequestController extends AbstractController
{
    private $apiService;
    private $apiFunctions;
    private $getProvinces;
    private $getTownCity;
    private $logger;
    private $exportxls;

    public function __construct( APIRequest $apiService, APIFunctions $apiFunctions, PSGCService $getProvinces, PSGCService $getTownCity, LoggerInterface $logger, ExportXLSService $exportxls)
    {
        $this->apiService = $apiService;
        $this->apiFunctions = $apiFunctions;
        $this->getProvinces = $getProvinces;
        $this->getTownCity = $getTownCity;
        $this->logger = $logger;
        $this->exportxls = $exportxls;
    }

    #[Route('/', name: 'app_leave_request')]
    public function viewLeaveRequests(Request $request): Response
    {
        $allLeaveRequest = $this->apiFunctions->getAllLeaveRequest($request)->toArray();
        $leavePolicies = $this->apiFunctions->getLeavePolicy($request)->toArray();
        $employeeLeaves = $this->apiFunctions->getEmployeeLeaves($request)->toArray();
        // dd($employeeLeaves);
        return $this->render('leave_request/apps-leave-request.html.twig', [
            'leaveRequests'     => $allLeaveRequest ?? [],
            'leave_policies'    => $leavePolicies ?? [],
            'employees'         => $employeeLeaves['emp_with_leave_list'] ?? [],
        ]);
    }

    #[Route('/calendar', name: 'app_leave_calendar')]
    public function viewLeaveCalendar(Request $request): Response
    {
        $yearlyHolidays = $this->apiFunctions->getYearlyHoliday($request)->toArray();
        $allLeaveRequest = $this->apiFunctions->getAllLeaveRequest($request)->toArray();
        // dd($allLeaveRequest);
        return $this->render('leave_request/apps-leave-calendar.html.twig', [
            'leaveRequests'     => [],
            'holidays'          => $yearlyHolidays,
            'employeeLeaves'   => $allLeaveRequest,
        ]);
    }

    #[Route('/create', name: 'create_leave_request', methods: ['POST'])]
    public function updateEmployeeLeaves(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $user_id = $session->get('user_id');
        // Collect form data from the request, handling optional fields
        $formData = [
            'emp_record_id'         => $request->request->get('emp_record_id'),
            'user_id'               => $user_id,
            'year'                  => (string) $request->request->get('year'),
            'leave_policies'        => $request->request->get('leave_policy'),
            'select_leave_id'       => $request->request->get('selected_leave_policy'),
            'reason'                => $request->request->get('reason'),
            'date_start'            => $request->request->get('date_start'),
            'date_end'              => $request->request->get('date_end'),
            'is_half_day'           => filter_var($request->request->get('is_half_day'), FILTER_VALIDATE_BOOLEAN),
            'document'              => '',
        ];
        // dd(json_encode($formData));
        // Send POST request to create the LeavePolicy via ApiService
        $response = $this->apiService->apiRequest('POST', 'api/leave/request/create', json_encode($formData), $token);
        // dd($response);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_leave_request', [
                'status'    => $response['status'],
                'error'     => $errorMessage,
                'message'   => $responseMessage,
            ]);
        }


        $empCode = $request->request->get('empCode') ?? null;
        $uploadSize = intval($request->request->get('fileSize')) ?? 25;
        $type = 'pdf';
        

        $file = $request->files->get('attachment');
        if (!$file) {
            return new JsonResponse(['status' => 'error', 'message' => 'No file provided!']);
        }

        $fileSize = $file->getSize();
        $originalFileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);



        // handles cache items
        $empAttachmentKey = 'attachment_' . $empCode;

        // Define allowed file extensions for each type
        $allowedExtensions = [
            'doc' => ['doc', 'docx'],
            'csv' => ['csv'],
            'pdf' => ['pdf'],
            'jpg' => ['jpg', 'jpeg', 'png']
        ];

        // if ($request->isMethod('POST')) {
            if ($file instanceof UploadedFile) {
                // Check if the file extension is allowed for the given type
                $fileExtension = $file->getClientOriginalExtension();
                if (isset($allowedExtensions[$type]) && in_array($fileExtension, $allowedExtensions[$type])) {
                    if ($fileSize <= $uploadSize * 1024 * 1024) { // 25MB in bytes by default

                        // Create directory for employee if not exists
                        $employeeUploadDir = $this->getParameter('uploads_directory') . '/' . $empCode;
                        if (!file_exists($employeeUploadDir)) {
                            mkdir($employeeUploadDir, 0755, true);
                        }

                        $fileName = $originalFileName;
                        $originalFileName = $originalFileName.'.'.$file->guessExtension();
                        $filePath = $employeeUploadDir . '/' . $originalFileName;

                        // Move the file to the directory where uploads are stored
                        try {
                            $file->move(
                                $employeeUploadDir,
                                $originalFileName
                            );

                            $employeeData = [
                                "employee_code" => $empCode,
                                "type" => $type,
                                "attachment_name" => $fileName,
                                "attachment_size" => $fileSize,
                                //"date_uploaded" => $dateUploaded,
                                "file" => $filePath,
                                "original_file_name" => $originalFileName
                            ];

                            //dd($employeeData);
                            $response = $this->apiService->apiRequest('POST', 'api/employee/upload_attachment', json_encode($employeeData), $token);
                            $status_code = $response->getStatusCode();
                            //dd($response->getContent(true));

                            if ($status_code  == 200 || $status_code  == 201) {
                                //$this->cache->deleteItem($empAttachmentKey); // delete cache for attachments
                                return $this->redirectToRoute('app_leave_request', ['employee_code' => $empCode, 'status' => $status_code, 'a' => 'fus']); // "action" => "file upload success"
                            } else {
                                return $this->redirectToRoute('app_leave_request', ['employee_code' => $empCode, 'status' => $status_code, 'a' => 'fuf']); // "action" => file upload fail
                            }
                        } catch (IOExceptionInterface $e) {
                            return new JsonResponse(['status' => 'error', 'message' => 'File upload failed, '. $e]);
                            return $this->redirectToRoute('app_leave_request', ['employee_code' => $empCode, 'status' => '404', 'a' => 'fuf']);
                        }
                    } else {
                        return $this->redirectToRoute('app_leave_request', [
                            'employee_code' => $empCode,
                            'status' => '404',
                            'error' => 'File size exceeds 25MB limit!',
                            'message' => 'File size exceeds 25MB limit!',
                        ]);
                    }
                } else {
                    return $this->redirectToRoute('app_leave_request', [
                        'employee_code' => $empCode,
                        'status' => '404',
                        'error' => 'Invalid file type for the selected document type!',
                        'message' => 'Invalid file type for the selected document type!',
                    ]);
                }
            }
            return $this->redirectToRoute('app_leave_request', [
                'employee_code' => $empCode,
                'status' => '404',
                'error' => 'Invalid file!',
                'message' => 'Invalid file!',
            ]);
        // }





        // Redirect to success route if creation is successful
        // return $this->redirectToRoute('app_leave_request', [
        //     'status' => $response->getStatusCode(),
        //     'error' => '',
        //     'message' => '',
        // ]);
    }

    #[Route('/approve', name: 'approve_leave_request', methods: ['POST'])]
    public function approveEmployeeLeaves(Request $request): Response
    {
        $session            = $request->getSession();
        $token              = $session->get('token');
        $user_id            = $session->get('user_id');
        $leave_request_id   = $request->request->get('leave_request_id');
        // Collect form data from the request, handling optional fields
        $formData = [
            'status'         => $request->request->get('status'),
            'user_id'        => $user_id,
        ];
        // dd(json_encode($formData));
        // Send POST request to create the LeavePolicy via ApiService
        $response = $this->apiService->apiRequest('PUT', 'api/leave/request/approve/'.$leave_request_id, json_encode($formData), $token);
        // dd($response);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_leave_request', [
                'status'    => $response['status'],
                'error'     => $errorMessage,
                'message'   => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('app_leave_request', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }
}
