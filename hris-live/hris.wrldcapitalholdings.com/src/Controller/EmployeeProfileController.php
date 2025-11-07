<?php

namespace App\Controller;

use DateTime;
use App\Service\APIRequest;
use App\Service\PSGCService;
use Psr\Log\LoggerInterface;
use App\Service\APIFunctions;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\HeaderUtils;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EmployeeProfileController extends AbstractController
{
    private $apiFunctions;
    private $apiService;
    private $getProvinces;
    private $getTownCity;
    private $logger;
    private $cache;

    public function __construct( APIFunctions $apiFunctions, APIRequest $apiService, LoggerInterface $logger, PSGCService $getProvinces, PSGCService $getTownCity, #[Autowire(service: 'cache.my_redis')]
    AdapterInterface $cache)
    {
        $this->apiFunctions = $apiFunctions;
        $this->apiService = $apiService;
        $this->getProvinces = $getProvinces;
        $this->getTownCity = $getTownCity;
        $this->logger = $logger;
        $this->cache = $cache;
    }
    
    #[Route('/employee/profile/{employee_code}', name: 'employee_profile')]
    public function viewProfile(Request $request, String $employee_code, LoggerInterface $logger): Response
    {
        $token = $request->getSession()->get('token');

        $formData = [
            "employee_code" => $employee_code,
        ];

        $provinces = $this->getProvinces->getProvinces();
        $getTownCity = $this->getTownCity->getTownCity();

        if($this->apiFunctions->getDivisionList($request)->getStatusCode() === 200){ // Get Divisions list
            $response = $this->apiFunctions->getDivisionList($request)->toArray();
            $divisions = $response['division'];
        } else {
            $divisions = [];
        }

        $javascriptSnippet = "<script></script>";
        $statusCode = $request->query->get('status');
        $action = $request->query->get('a'); // get action paramenter value
        $content = json_decode($request->query->get('content'));
        // if($statusCode == 200 || $statusCode == 201){
        //     switch ($action) {
        //         case 'fus':
        //             $javascriptSnippet = "<script>
        //                 showToast('Attachment Uploaded Successfully','bg-green-500')
        //             </script>";
        //             break;
                    
        //         case 'das':
        //             $javascriptSnippet = "<script>
        //                 showToast('Attachment Deleted Successfully','bg-green-500')
        //             </script>";
        //             break;

        //         default:
        //             $javascriptSnippet = "<script>
        //                 showToast('Employee Updated Successfully','bg-green-500')
        //             </script>";
        //             break;
        //     }
        // }
        // else if($statusCode >= 300) {
        //     switch ($action) {
        //         case 'fuf':
        //             $javascriptSnippet = "<script>
        //                 showToast('An Error Occured, Uploading of Attachment Failed','bg-green-500')
        //             </script>";
        //             break;
                    
        //         case 'daf':
        //             $javascriptSnippet = "<script>
        //                 showToast('An Error Occured, Deletion of Attachment Failed','bg-green-500')
        //             </script>";
        //             break;

        //         default:
        //             $javascriptSnippet = "<script>
        //                 showToast('An Error Occured, Employee Not Updated', 'bg-red-500');
        //             </script>";
        //     }
        // }

        // Define a cache key
        $empKey = 'employee_' . $employee_code;
        $empAdditionalKey = 'additional_record_' . $employee_code;
        $empAttachmentKey = 'attachment_' . $employee_code;

        // Try to get the cache item
        $employeeCache = $this->cache->getItem($empKey);
        $employeeAdditionalCache = $this->cache->getItem($empAdditionalKey);
        $employeeAttachmentsCache = $this->cache->getItem($empAttachmentKey);
        if (!$employeeCache->isHit()) {
            $logger->info('Employee Cache miss. Fetching data from API.');
            // Make an API request        
            $employeeResponse = $this->apiService->apiRequest('GET', 'api/employee/profile', json_encode($formData), $token);
            // Get the response content
            $employee = $employeeResponse->toArray();
            // Save data to the cache
            $employeeCache->set($employee);
            $employeeCache->expiresAfter(86400); // Cache for 24 hour
            $this->cache->save($employeeCache); // save API response to cache
        } else {
            // Get data from the cache
            $employeeResponse = $this->apiService->apiRequest('GET', 'api/employee/profile', json_encode($formData), $token);
            // Get the response content
            $employee = $employeeResponse->toArray();
            // $employee = $employeeCache->get();
            $logger->info('Employee Cache hit. Using cached data.');
        }

        // Make an API request        
        $employeeAdditionalResponse = $this->apiService->apiRequest('GET', 'api/employee/additional_record', json_encode($formData), $token);
        // Get the response content
        $employeeAdditionalRecord = $employeeAdditionalResponse->toArray();

        // Louiel: Removed caching not updating because it update through the Javascript code

        // if (!$employeeAdditionalCache->isHit()) {
        //     // Make an API request        
        //     $employeeAdditionalResponse = $this->apiService->apiRequest('GET', 'api/employee/additional_record', json_encode($formData), $token);
        //     // Get the response content
        //     $employeeAdditionalRecord = $employeeAdditionalResponse->toArray();
        //     // Save data to the cache
        //     $employeeAdditionalCache->set($employeeAdditionalRecord);
        //     $employeeAdditionalCache->expiresAfter(86400); // Cache for 24 hour
        //     $this->cache->save($employeeAdditionalCache); // save API response to cache
        // } else {
        //     // Get data from the cache
        //     $employeeAdditionalRecord = $employeeAdditionalCache->get();
        //     $logger->info('Employee Additional hit. Using cached data.');
        // }
        
        if (!$employeeAttachmentsCache->isHit()) {
            $logger->info('Employee Attachment Cache miss. Fetching data from API.');
            // Make an API request        
            $employeeAttachmentResponse = $this->apiService->apiRequest('GET', 'api/employee/view_attachment', json_encode($formData), $token);
            // Get the response content
            $employeeAttachments = $employeeAttachmentResponse->toArray();
            // Save data to the cache
            $employeeAttachmentsCache->set($employeeAttachments);
            $employeeAttachmentsCache->expiresAfter(86400); // Cache for 24 hour
            $this->cache->save($employeeAttachmentsCache); // save API response to cache
        } else {
            // Get data from the cache
            $employeeAttachments = $employeeAttachmentsCache->get();
            $logger->info('Employee Attachment Cache hit. Using cached data.');
        }

        $id = 0;
        if($employee['employeeData']['id']){
            $id = $employee['employeeData']['id'];   
        }

        $worker_id = $employee['worker_id'] ?? "";

        $projects                   = $this->apiFunctions->getProjectUsingEmpRecord($request,$id)->toArray();
        $leave_request              = $this->apiFunctions->getEmpLeaveRequest($request,$id)->toArray();
        $leave_entitlements         = $this->apiFunctions->getEmpLeaveEntitlements($request,$id)->toArray();
        $leavePolicies              = $this->apiFunctions->getLeavePolicy($request)->toArray();
        // $employeeOvertimeRequest    = $this->apiFunctions->getOvertimeRequestByEmp($request,$id)->toArray();
        $employeeOvertimeRequest    = $this->apiFunctions->getOvertimeRequest($request)->toArray();
        // dd($leave_request);

        $payrollProfile = $this->apiFunctions->getEmployeePayrollProfiles($request, $id);
        $accountabilityRecords = $this->apiFunctions->getAccountabilityRecordsByEmployee($request, $id)->toArray();

        if(is_array($payrollProfile)){
            $payrollProfile = [
                'id' => null,
                'monthly_salary' => 0,
                'allowance' => 0,
                'tax_shield' => 0,
                'daily_rate' => 0,
                'daily_tax_shield' => 0,
                'hourly_rate' => 0,
                'overtime_rate' => 0,
                'late_rate' => 0,
                'sss_contribution' => 0,
                'tax_contribution' => 0,
                'pagibig_contribution' => 0,
                'philhealth_contribution' => 0,
                'employee_record' => 0,
                'sss_loan' => 0,
                'sss_loan_deduction' => 0,
                'hdmf_loan' => 0,
                'hdmf_loan_deduction' => 0,
                'cash_advance' => 0,
                'cash_advance_deduction' => 0,
                'other_loans' => 0,
                'other_loans_deduction' => 0,
                'employer_sss_contribution' => 0,
                'employer_pagibig_contribution' => 0,
                'employer_philhealth_contribution' => 0,
                'accident_insurance' => 0,
                'thirteenth_month_pay' => 0,
                'sss_deduction' => 0,
                'philhealth_deduction' => 0,
                'pagibig_deduction' => 0,
                'tax_deduction' => [],  // Assuming an array of tax deductions
                'loan_history' => [],  // Loan history data
                'employee_payrolls' => [],  // EmployeePayroll data
                'cash_advance_array' => [],  // Cash advance details
                'sss_loan_history' => [],  // SSS loan history data
                'pagibig_loan_history' => [],  // Pagibig loan history data
                'cash_advance_history' => [],  // Cash advance history data
                
                // Additional keys
                'basic_salary' => 0,
                'total_mandatory_deduction' => 0,
                'salary_minus_deduction' => 0,
                'cash_advance_array' => [],  // Cash advance array
                'sss_loan_array' => [],  // SSS loan array
                'pagibig_loan_array' => [],  // Pagibig loan array
                'included_sal_adjustment' => false,  // For thirteenth-month calculation inclusion
                'included_salary' => false,  // For thirteenth-month calculation inclusion
                'included_taxshield' => false,  // For thirteenth-month calculation inclusion
            ];
            
        }
        else{
            $payrollProfile = $payrollProfile->toArray();
        }
        //dd($payrollProfile);
        return $this->render('employee_profile/apps-employee-profile.html.twig', [
            'controller_name'                       => 'EmployeeProfileController',
            'worker_id'                             => $worker_id,
            'employee_code'                         => $employee_code,
            'employeeData'                          => $employee['employeeData'],
            'provinces'                             => $provinces,
            'townCities'                            => $getTownCity,
            'divisions'                             => $divisions,
            'employeeAdditionalRecord'              => $employeeAdditionalRecord['employeeAdditionalRecord'] ?? [],
            'employeeAttachment'                    => $employeeAttachments['employeeAttachments'] ?? [],
            'javascriptSnippet'                     => $javascriptSnippet,
            'projects'                              => $projects['project'],
            'payrollProfile'                        => $payrollProfile ?? [],
            'leaveEntitlements'                     => [],
            'leaveHistory'                          => [],
            'leave_entitlements'                    => $leave_entitlements['emp_with_leave_list'] ?? [],
            'leave_request'                         => $leave_request ?? [],
            'employee_id'                           => $id ?? '',
            'leave_policies'                        => $leavePolicies ?? [],
            'emp_overtime_request'                  => $employeeOvertimeRequest ?? [],
            'accountability_records'                => $accountabilityRecords ?? [],
        ]);
    }
    
    // #[Route('/form/submit/upload_attachment', name: 'upload_attachment')]
    // public function uploadAtachment(Request $request): Response
    // {
    //     $token = $request->getSession()->get('token');
        
    //     $empCode = $request->request->get('empCode') ?? null;
    //     $type = $request->request->get('documentType') ?? null;
    //     $name = $request->request->get('documentName') ?? null;
    //     $uploadSize = intval($request->request->get('fileSize')) ?? 25; // 25MB in bytes by default

    //     $file = $request->files->get('attachment');
    //     if (!$file) {
    //         return new JsonResponse(['status' => 'error', 'message' => 'No file provided!']);
    //     }

    //     $fileSize = $file->getSize();
    //     $originalFileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

    //     // handles cache items
    //     $empAttachmentKey = 'attachment_' . $empCode;

    //     /* $timezone = new \DateTimeZone('Asia/Manila'); // set timezone
    //     $dateUploaded = new \DateTime('now', $timezone); // get date today */

    //     //dd($file->getSize() <= $uploadSize * 1024 * 1024);

    //     if ($request->isMethod('POST')) {

    //         if ($file instanceof UploadedFile) {
    //             if (in_array($file->getClientOriginalExtension(), ['csv', 'pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png'])) {
    //                 if ($fileSize <= $uploadSize * 1024 * 1024) { // 25MB in bytes by default

    //                     // Create directory for employee if not exists
    //                     $employeeUploadDir = $this->getParameter('uploads_directory') . '/' . $empCode;
    //                     if (!file_exists($employeeUploadDir)) {
    //                         mkdir($employeeUploadDir, 0755, true);
    //                     }

    //                     $fileName = $name;
    //                     $originalFileName = $originalFileName.'.'.$file->guessExtension();
    //                     $filePath = $employeeUploadDir . '/' . $originalFileName;

    //                     // Move the file to the directory where uploads are stored
    //                     try {
    //                         $file->move(
    //                             $employeeUploadDir,
    //                             $originalFileName
    //                         );

    //                         $employeeData = [
    //                             "employee_code" => $empCode,
    //                             "type" => $type,
    //                             "attachment_name" => $fileName,
    //                             "attachment_size" => $fileSize,
    //                             //"date_uploaded" => $dateUploaded,
    //                             "file" => $filePath,
    //                             "original_file_name" => $originalFileName
    //                         ];

    //                         //dd($employeeData);
    //                         $response = $this->apiService->apiRequest('POST', 'api/employee/upload_attachment', json_encode($employeeData), $token);
    //                         $status_code = $response->getStatusCode();
    //                         //dd($response->getContent(true));

    //                         if ($status_code  == 200 || $status_code  == 201) {
    //                             $this->cache->deleteItem($empAttachmentKey); // delete cache for attachments
    //                             return $this->redirectToRoute('employee_profile', ['employee_code' => $empCode, 'status' => $status_code, 'a' => 'fus']); // "action" => "file upload success"
    //                         } else {
    //                             return $this->redirectToRoute('employee_profile', ['employee_code' => $empCode, 'status' => $status_code, 'a' => 'fuf']); // "action" => file upload fail
    //                         }

    //                         return new JsonResponse(['status' => 'success', 'message' => 'File uploaded successfully!']);
    //                     } catch (IOExceptionInterface $e) {
    //                         return new JsonResponse(['status' => 'error', 'message' => 'File upload failed, '. $e]);
    //                     }
    //                 } else {
    //                     return new JsonResponse(['status' => 'error', 'message' => 'File size exceeds 25MB limit!']);
    //                 }
    //             } else {
    //                 return new JsonResponse(['status' => 'error', 'message' => 'Invalid file type!']);
    //             }
    //         }

    //         return new JsonResponse(['status' => 'error', 'message' => 'Invalid file!']);
    //     }

    // }

    #[Route('/form/submit/upload_attachment', name: 'upload_attachment')]
    public function uploadAttachment(Request $request): Response
    {
        $token = $request->getSession()->get('token');
        
        $empCode = $request->request->get('empCode') ?? null;
        $type = $request->request->get('documentType') ?? null;
        $name = $request->request->get('documentName') ?? null;
        $uploadSize = intval($request->request->get('fileSize')) ?? 25; // 25MB in bytes by default

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

        if ($request->isMethod('POST')) {
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

                        $fileName = $name;
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
                                $this->cache->deleteItem($empAttachmentKey); // delete cache for attachments
                                return $this->redirectToRoute('employee_profile', ['employee_code' => $empCode, 'status' => $status_code, 'a' => 'fus']); // "action" => "file upload success"
                            } else {
                                return $this->redirectToRoute('employee_profile', ['employee_code' => $empCode, 'status' => $status_code, 'a' => 'fuf']); // "action" => file upload fail
                            }
                        } catch (IOExceptionInterface $e) {
                            return new JsonResponse(['status' => 'error', 'message' => 'File upload failed, '. $e]);
                            return $this->redirectToRoute('employee_profile', ['employee_code' => $empCode, 'status' => '404', 'a' => 'fuf']);
                        }
                    } else {
                        return $this->redirectToRoute('employee_profile', [
                            'employee_code' => $empCode,
                            'status' => '404',
                            'error' => 'File size exceeds 25MB limit!',
                            'message' => 'File size exceeds 25MB limit!',
                        ]);
                    }
                } else {
                    return $this->redirectToRoute('employee_profile', [
                        'employee_code' => $empCode,
                        'status' => '404',
                        'error' => 'Invalid file type for the selected document type!',
                        'message' => 'Invalid file type for the selected document type!',
                    ]);
                }
            }
            return $this->redirectToRoute('employee_profile', [
                'employee_code' => $empCode,
                'status' => '404',
                'error' => 'Invalid file!',
                'message' => 'Invalid file!',
            ]);
        }
    }

    #[Route('/download/attachment/{employee_code}/{file}', name: 'download_attachment')]
    public function downloadAttachment(string $employee_code, string $file): Response
    {
        $filePath = $this->getParameter('kernel.project_dir') . '/public/uploads/'. $employee_code . '/' . $file;
    
        if (!file_exists($filePath)) {
            throw $this->createNotFoundException('The file does not exist');
        }
    
        // Use file() function to get file contents
        $fileContent = file_get_contents($filePath);
        
        // Create a regular Response with file contents
        $response = new Response($fileContent);
        
        // Set appropriate headers
        $response->headers->set('Content-Type', mime_content_type($filePath));
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $file . '"');
        
        return $response;
    }

    #[Route('/delete/attachment/{employee_code}/{id}', name: 'delete_attachment')]
    public function deleteAttachment(Request $request, string $employee_code, string $id): Response
    {
        $token = $request->getSession()->get('token');
        
        $formData = [
            "id" => $id
        ];

        $attachmentResponse = $this->apiService->apiRequest('POST', 'api/employee/delete_attachment', json_encode($formData), $token);
        $status = $attachmentResponse->toArray()['status'];
        $filePath = $attachmentResponse->toArray()['employeeAttachment']['file'];

        // handles cache items
        $empAttachmentKey = 'attachment_' . $employee_code;

        //dd($attachmentResponse->toArray());

        //$filePath = $this->getParameter('kernel.project_dir') . '/public/uploads/'. $employee_code . '/' . $file;

        if ($status === 'success') {
            if (!file_exists($filePath)) {
                return $this->redirectToRoute('employee_profile', ['employee_code' => $employee_code, 'status' => 404, 'a' => 'daf']); // "action" => "delete attachment fail"
            } else {
                unlink($filePath);
                $this->cache->deleteItem($empAttachmentKey);
                return $this->redirectToRoute('employee_profile', ['employee_code' => $employee_code, 'status' => 200, 'a' => 'das']); // "action" => "delete attachment success"
            }
        } else {
            return $this->redirectToRoute('employee_profile', ['employee_code' => $employee_code, 'status' => 404, 'a' => 'daf']); // "action" => "delete attachment fail"
        }
    }

    #[Route('/profile-create-leave', name: 'create_leave_request_profile')]
    public function updateEmployeeLeavesProfile(Request $request): Response
    {
        $session        = $request->getSession();
        $token          = $session->get('token');
        $user_id        = $session->get('user_id');
        $empCode        = $request->request->get('empCode') ?? null;
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

            return $this->redirectToRoute('employee_profile', [
                'employee_code' => $empCode,
                'status'    => $response['status'],
                'error'     => $errorMessage,
                'message'   => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('employee_profile', [
            'employee_code' => $empCode,
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/profile-update-overtime-request', name: 'update_overtime_request')]
    public function updateOvertimeRequest(Request $request): Response
    {
        $session        = $request->getSession();
        $token          = $session->get('token');
        $user_id        = $session->get('user_id');
        $reason         = $request->request->get('reason') ?? "";
        $empCode        = $request->request->get('empCode') ?? null;
        $ot_request_id  = $request->request->get('ot_request_id');
        $otHours = $request->request->get('ot_hours'); // e.g., "1:30"

        if (strpos($otHours, ':') !== false) {
            list($hours, $minutes) = explode(':', $otHours);
            $totalMinutes = ((int)$hours * 60) + (int)$minutes;
        } else {
            // Handle cases where the input is not in H:mm format (e.g., fallback to 0)
            $totalMinutes = 0;
        }

        // Collect form data from the request, handling optional fields
        $formData = [
            'hours_requested'       => $totalMinutes,
            'reason'                => $reason,
        ];

        $response = $this->apiService->apiRequest('PUT', 'api/overtime_requests/update/'.$ot_request_id, json_encode($formData), $token);
        // dd($response);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {

            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('employee_profile', [
                'employee_code' => $empCode,
                'status'        => $response['status'],
                'error'         => $errorMessage,
                'message'       => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('employee_profile', [
            'employee_code' => $empCode,
            'status'        => $response->getStatusCode(),
            'error'         => '',
            'message'       => '', 
        ]);
    }

    #[Route('/profile-create-overtime-request', name: 'create_overtime_request')]
    public function createOvertimeRequest(Request $request): Response
    {
        $session        = $request->getSession();
        $token          = $session->get('token');
        $user_id        = $session->get('user_id');
        $reason         = $session->get('reason');
        $empCode        = $request->request->get('empCode') ?? null;
        $emp_id         = $request->request->get('emp_record_id') ?? null;
        $worker_logs_id = $request->request->get('worker_logs_id') ?? null;
        $ot_request_id  = $request->request->get('ot_request_id');
        $otHours = $request->request->get('ot_hours'); // e.g., "1:30"

        if (strpos($otHours, ':') !== false) {
            list($hours, $minutes) = explode(':', $otHours);
            $totalMinutes = ((int)$hours * 60) + (int)$minutes;
        } else {
            // Handle cases where the input is not in H:mm format (e.g., fallback to 0)
            $totalMinutes = 0;
        }

        // Collect form data from the request, handling optional fields
        $formData = [
            'hours_requested'       => $totalMinutes,
            'reason'                => $reason,
            'worker_logs'           => $worker_logs_id,
            'emp_id'                => $emp_id,
        ];

        $response = $this->apiService->apiRequest('POST', 'api/overtime_requests/create', json_encode($formData), $token);
        // dd($response);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {

            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('employee_profile', [
                'employee_code' => $empCode,
                'status'        => $response['status'],
                'error'         => $errorMessage,
                'message'       => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('employee_profile', [
            'employee_code' => $empCode,
            'status'        => $response->getStatusCode(),
            'error'         => '',
            'message'       => '', 
        ]);
    }

    #[Route('/accountability-record-create', name: 'create_new_accountability_record')]
    public function createAccountabilityRecord(Request $request): Response
    {
        $session        = $request->getSession();
        $token          = $session->get('token');
        $user_id        = $session->get('user_id');
        $empCode        = $request->request->get('empCode') ?? null;

        // Collect form data from the request, handling optional fields
        $formData = [
            'emp_id'                => $request->request->get('emp_record_id'),
            'item_name'             => $request->request->get('item_name'),
            'item_count'            => $request->request->get('item_count'),
            'status'                => $request->request->get('acc_records_status'),
        ];

        $response = $this->apiService->apiRequest('POST', 'api/accountability_records/create', json_encode($formData), $token);
        // dd($response);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('employee_profile', [
                'employee_code' => $empCode,
                'status'    => $response['status'],
                'error'     => $errorMessage,
                'message'   => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('employee_profile', [
            'employee_code' => $empCode,
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/update-accountability-record', name: 'update_accountability_record')]
    public function updateAccountabilityRecord(Request $request): Response
    {
        $session        = $request->getSession();
        $token          = $session->get('token');
        $empCode        = $request->request->get('empCode') ?? null;
        $accRecordId    = $request->request->get('acc_record_id') ?? null;
        // Collect form data from the request, handling optional fields
        $formData = [
            'emp_id'                => $request->request->get('emp_record_id'),
            'item_name'             => $request->request->get('item_name'),
            'item_count'            => $request->request->get('item_count'),
            'status'                => $request->request->get('acc_records_status'),
        ];

        $response = $this->apiService->apiRequest('PUT', 'api/accountability_records/update/'.$accRecordId, json_encode($formData), $token);
        // dd($response);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('employee_profile', [
                'employee_code' => $empCode,
                'status'    => $response['status'],
                'error'     => $errorMessage,
                'message'   => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('employee_profile', [
            'employee_code' => $empCode,
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/upload-profile-picture', name: 'upload_profile_picture')]
    public function uploadProfilePicture(Request $request): JsonResponse
    {
        $empCode = $request->request->get('empCode') ?? null;
        $uploadSize = intval($request->request->get('fileSize')) ?? 25; // 25MB in bytes by default
    
        $file = $request->files->get('attachment');
        if (!$file) {
            return new JsonResponse(['status' => 'error', 'message' => 'No file uploaded']);
        }
    
        $fileSize = $file->getSize();
        $originalFileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
    
        if ($request->isMethod('POST')) {
            if ($file instanceof UploadedFile) {
                if (in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png'])) {
                    if ($fileSize <= $uploadSize * 1024 * 1024) { // 25MB in bytes by default
                        // Create directory for employee if not exists
                        $employeeUploadDir = $this->getParameter('uploads_directory') . '/' . $empCode;
                        if (!file_exists($employeeUploadDir)) {
                            mkdir($employeeUploadDir, 0755, true);
                        }
    
                        $originalFileName = $originalFileName . '.' . $file->guessExtension();
                        $filePath = $employeeUploadDir . '/' . $originalFileName;
    
                        // Move the file to the directory where uploads are stored
                        try {
                            $file->move($employeeUploadDir, $originalFileName);
                            $relativeFilePath = str_replace($this->getParameter('kernel.project_dir') . '/public', '', $filePath);
                            return new JsonResponse(['status' => 'success', 'message' => 'File uploaded successfully!', 'filePath' => $relativeFilePath]);
                        } catch (IOExceptionInterface $e) {
                            return new JsonResponse(['status' => 'error', 'message' => 'File upload failed, ' . $e->getMessage()]);
                        }
                    } else {
                        return new JsonResponse(['status' => 'error', 'message' => 'File size exceeds 25MB limit!']);
                    }
                } else {
                    return new JsonResponse(['status' => 'error', 'message' => 'Invalid file type!']);
                }
            }
            return new JsonResponse(['status' => 'error', 'message' => 'Invalid file!']);
        }
        return new JsonResponse(['status' => 'error', 'message' => 'Invalid Request!']);
    }
}
