<?php

namespace App\Controller;

use App\Service\APIFunctions;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\APIRequest;
use App\Utility\SessionManager;
use Symfony\Component\HttpFoundation\JsonResponse;
use Psr\Log\LoggerInterface;


class SuperAdminController extends AbstractController
{
    private $apiService;
    private $logger;
    private $apiFunctions;

    public function __construct( APIRequest $apiService, APIFunctions $apiFunctions, LoggerInterface $logger)
    {
        $this->apiService = $apiService;
        $this->logger = $logger;
        $this->apiFunctions = $apiFunctions;
    }

    #[Route('/super/admin', name: 'super_sync')]
    public function viewSyncConn(Request $request): Response
    {
        $syncConn = $this->getConnection($request)->toArray();
        return $this->render('super_admin/workers_sync.html.twig', [
            'controller_name' => 'SuperAdminController',
            'sync_connections' => $syncConn['connections']
        ]);
    }

    #[Route('/super/user-roles', name: 'super_roles')]
    public function viewRolesAndPermission(Request $request): Response
    {
        $userType = $this->apiFunctions->getUserTypesAndPermission($request)->toArray();
        return $this->render('super_admin/roles_permission.html.twig', [
            'user_types' => $userType
        ]);
    }

    #[Route('/form/update_role_access', name: 'update_role_access')]
    public function updateModelTypes(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $model_id = $request->request->get('module_id');

        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            $formData = $request->request->all();
            
            // Prepare data for API request
            $data = [
                'project' => [
                    'can_view' => isset($formData['project_can_view']) ? true : false,
                    'can_add' => isset($formData['project_can_add']) ? true : false,
                    'can_edit' => isset($formData['project_can_edit']) ? true : false,
                    'can_delete' => isset($formData['project_can_delete']) ? true : false,
                ],
                'humanres' => [
                    'can_view' => isset($formData['humanres_can_view']) ? true : false,
                    'can_add' => isset($formData['humanres_can_add']) ? true : false,
                    'can_edit' => isset($formData['humanres_can_edit']) ? true : false,
                    'can_delete' => isset($formData['humanres_can_delete']) ? true : false,
                ],
                'administration' => [
                    'can_view' => isset($formData['administration_can_view']) ? true : false,
                    'can_add' => isset($formData['administration_can_add']) ? true : false,
                    'can_edit' => isset($formData['administration_can_edit']) ? true : false,
                    'can_delete' => isset($formData['administration_can_delete']) ? true : false,
                ],
                'payroll' => [
                    'can_view' => isset($formData['payroll_can_view']) ? true : false,
                    'can_add' => isset($formData['payroll_can_add']) ? true : false,
                    'can_edit' => isset($formData['payroll_can_edit']) ? true : false,
                    'can_delete' => isset($formData['payroll_can_delete']) ? true : false,
                ],
                'emp_leaves' => [
                    'can_view' => isset($formData['emp_leaves_can_view']) ? true : false,
                    'can_add' => isset($formData['emp_leaves_can_add']) ? true : false,
                    'can_edit' => isset($formData['emp_leaves_can_edit']) ? true : false,
                    'can_delete' => isset($formData['emp_leaves_can_delete']) ? true : false,
                ],

                'submodule' => [
                    'daily_time_record' => [
                        'can_view' => isset($formData['daily_time_record_can_view']) ? true : false,
                        'can_add' => isset($formData['daily_time_record_can_add']) ? true : false,
                        'can_edit' => isset($formData['daily_time_record_can_edit']) ? true : false,
                        'can_delete' => isset($formData['daily_time_record_can_delete']) ? true : false,
                    ],
                    'subdivision' => [
                        'can_view' => isset($formData['subdivision_can_view']) ? true : false,
                        'can_add' => isset($formData['subdivision_can_add']) ? true : false,
                        'can_edit' => isset($formData['subdivision_can_edit']) ? true : false,
                        'can_delete' => isset($formData['subdivision_can_delete']) ? true : false,
                    ],
                    'division' => [
                        'can_view' => isset($formData['division_can_view']) ? true : false,
                        'can_add' => isset($formData['division_can_add']) ? true : false,
                        'can_edit' => isset($formData['division_can_edit']) ? true : false,
                        'can_delete' => isset($formData['division_can_delete']) ? true : false,
                    ],
                    'department' => [
                        'can_view' => isset($formData['department_can_view']) ? true : false,
                        'can_add' => isset($formData['department_can_add']) ? true : false,
                        'can_edit' => isset($formData['department_can_edit']) ? true : false,
                        'can_delete' => isset($formData['department_can_delete']) ? true : false,
                    ],
                    'phase' => [
                        'can_view' => isset($formData['phase_can_view']) ? true : false,
                        'can_add' => isset($formData['phase_can_add']) ? true : false,
                        'can_edit' => isset($formData['phase_can_edit']) ? true : false,
                        'can_delete' => isset($formData['phase_can_delete']) ? true : false,
                    ],
                    'owner' => [
                        'can_view' => isset($formData['owner_can_view']) ? true : false,
                        'can_add' => isset($formData['owner_can_add']) ? true : false,
                        'can_edit' => isset($formData['owner_can_edit']) ? true : false,
                        'can_delete' => isset($formData['owner_can_delete']) ? true : false,
                    ],
                    'models' => [
                        'can_view' => isset($formData['models_can_view']) ? true : false,
                        'can_add' => isset($formData['models_can_add']) ? true : false,
                        'can_edit' => isset($formData['models_can_edit']) ? true : false,
                        'can_delete' => isset($formData['models_can_delete']) ? true : false,
                    ],
                    'model_types' => [
                        'can_view' => isset($formData['model_types_can_view']) ? true : false,
                        'can_add' => isset($formData['model_types_can_add']) ? true : false,
                        'can_edit' => isset($formData['model_types_can_edit']) ? true : false,
                        'can_delete' => isset($formData['model_types_can_delete']) ? true : false,
                    ],
                    'emp_settings' => [
                        'can_view' => isset($formData['emp_settings_can_view']) ? true : false,
                        'can_add' => isset($formData['emp_settings_can_add']) ? true : false,
                        'can_edit' => isset($formData['emp_settings_can_edit']) ? true : false,
                        'can_delete' => isset($formData['emp_settings_can_delete']) ? true : false,
                    ],
                    'shifts' => [
                        'can_view' => isset($formData['shifts_can_view']) ? true : false,
                        'can_add' => isset($formData['shifts_can_add']) ? true : false,
                        'can_edit' => isset($formData['shifts_can_edit']) ? true : false,
                        'can_delete' => isset($formData['shifts_can_delete']) ? true : false,
                    ],
                    'projects' => [
                        'can_view' => isset($formData['projects_can_view']) ? true : false,
                        'can_add' => isset($formData['projects_can_add']) ? true : false,
                        'can_edit' => isset($formData['projects_can_edit']) ? true : false,
                        'can_delete' => isset($formData['projects_can_delete']) ? true : false,
                    ],
                    'emp_project' => [
                        'can_view' => isset($formData['emp_project_can_view']) ? true : false,
                        'can_add' => isset($formData['emp_project_can_add']) ? true : false,
                        'can_edit' => isset($formData['emp_project_can_edit']) ? true : false,
                        'can_delete' => isset($formData['emp_project_can_delete']) ? true : false,
                    ],
                    'emp_list' => [
                        'can_view' => isset($formData['emp_list_can_view']) ? true : false,
                        'can_add' => isset($formData['emp_list_can_add']) ? true : false,
                        'can_edit' => isset($formData['emp_list_can_edit']) ? true : false,
                        'can_delete' => isset($formData['emp_list_can_delete']) ? true : false,
                    ],

                    'sss_config' => [
                        'can_view' => isset($formData['sss_config_can_view']) ? true : false,
                        'can_add' => isset($formData['sss_config_can_add']) ? true : false,
                        'can_edit' => isset($formData['sss_config_can_edit']) ? true : false,
                        'can_delete' => isset($formData['sss_config_can_delete']) ? true : false,
                    ],
                    'pagibig_config' => [
                        'can_view' => isset($formData['pagibig_config_can_view']) ? true : false,
                        'can_add' => isset($formData['pagibig_config_can_add']) ? true : false,
                        'can_edit' => isset($formData['pagibig_config_can_edit']) ? true : false,
                        'can_delete' => isset($formData['pagibig_config_can_delete']) ? true : false,
                    ],
                    'bir_config' => [
                        'can_view' => isset($formData['bir_config_can_view']) ? true : false,
                        'can_add' => isset($formData['bir_config_can_add']) ? true : false,
                        'can_edit' => isset($formData['bir_config_can_edit']) ? true : false,
                        'can_delete' => isset($formData['bir_config_can_delete']) ? true : false,
                    ],
                    'philhealth_config' => [
                        'can_view' => isset($formData['philhealth_config_can_view']) ? true : false,
                        'can_add' => isset($formData['philhealth_config_can_add']) ? true : false,
                        'can_edit' => isset($formData['philhealth_config_can_edit']) ? true : false,
                        'can_delete' => isset($formData['philhealth_config_can_delete']) ? true : false,
                    ],
                    'payroll' => [
                        'can_view'      => isset($formData['payroll_can_view']) ? true : false,
                        'can_add'       => isset($formData['payroll_can_add']) ? true : false,
                        'can_edit'      => isset($formData['payroll_can_edit']) ? true : false,
                        'can_delete'    => isset($formData['payroll_can_delete']) ? true : false,
                    ],
                    'payroll_reports' => [
                        'can_view' => isset($formData['payroll_reports_can_view']) ? true : false,
                        'can_add' => isset($formData['payroll_reports_can_add']) ? true : false,
                        'can_edit' => isset($formData['payroll_reports_can_edit']) ? true : false,
                        'can_delete' => isset($formData['payroll_reports_can_delete']) ? true : false,
                    ],
                    'leave_policy' => [
                        'can_view' => isset($formData['leave_policy_can_view']) ? true : false,
                        'can_add' => isset($formData['leave_policy_can_add']) ? true : false,
                        'can_edit' => isset($formData['leave_policy_can_edit']) ? true : false,
                        'can_delete' => isset($formData['leave_policy_can_delete']) ? true : false,
                    ],
                    'emp_leaves' => [
                        'can_view' => isset($formData['emp_leaves_can_view']) ? true : false,
                        'can_add' => isset($formData['emp_leaves_can_add']) ? true : false,
                        'can_edit' => isset($formData['emp_leaves_can_edit']) ? true : false,
                        'can_delete' => isset($formData['emp_leaves_can_delete']) ? true : false,
                    ],
                    'holiday_config' => [
                        'can_view' => isset($formData['holiday_config_can_view']) ? true : false,
                        'can_add' => isset($formData['holiday_config_can_add']) ? true : false,
                        'can_edit' => isset($formData['holiday_config_can_edit']) ? true : false,
                        'can_delete' => isset($formData['holiday_config_can_delete']) ? true : false,
                    ],
                    'leave_request' => [
                        'can_view' => isset($formData['leave_request_can_view']) ? true : false,
                        'can_add' => isset($formData['leave_request_can_add']) ? true : false,
                        'can_edit' => isset($formData['leave_request_can_edit']) ? true : false,
                        'can_delete' => isset($formData['leave_request_can_delete']) ? true : false,
                    ],
                    'leave_calendar' => [
                        'can_view' => isset($formData['leave_calendar_can_view']) ? true : false,
                        'can_add' => isset($formData['leave_calendar_can_add']) ? true : false,
                        'can_edit' => isset($formData['leave_calendar_can_edit']) ? true : false,
                        'can_delete' => isset($formData['leave_calendar_can_delete']) ? true : false,
                    ],
                ]
            ];
            //dd(json_encode($data));
            // Send data to the API
            $response = $this->apiService->apiRequest('PUT', 'api/main-modules/'.$model_id, json_encode($data), $token);
            if(is_array($response)){
                if (isset($response['error']) && $response['error'] === true) {
                    // Handle the error
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    // If there is a message in the response, include it in the output
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                    return $this->redirectToRoute('super_roles', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
            return $this->redirectToRoute('super_roles', [
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
        // $sessionSavePath = ini_get('session.save_path');
        // $sessionManager = new SessionManager($sessionSavePath);
        // $sessionManager->invalidateSessionsByUserType('SADM');
        //return $this->redirectToRoute('super_roles');
    }

    #[Route('/form/delete/user-roles', name: 'delete_user_roles')]
    public function deleteUserRole(Request $request, HttpClientInterface $httpClient)
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $user_type_id = $request->request->get('user_types_item_id');
        if ($request->isMethod('POST')) {
            try {
                // Retrieve form data from request
                $formData = [];
                //dd($formData);
                $response = $this->apiService->apiRequest('DELETE', 'api/user-types/delete/'.$user_type_id, json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('super_roles', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('super_roles', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
                
            } catch (\Throwable $e) {
                return $this->redirectToRoute('super_roles', );
            }
        }
        return $this->redirectToRoute('super_roles');
    }

    #[Route('/form/create/user-roles', name: 'submit_user_roles')]
    public function submitSubdivisionForm(Request $request, HttpClientInterface $httpClient)
    {
        $session = $request->getSession();
        $token = $session->get('token');
        if ($request->isMethod('POST')) {
            try {
                // Retrieve form data from request
                $formData = [
                    'name' => $request->request->get('name'),
                    'user_code' => $request->request->get('code'),
                ];
                //dd($formData);
                $response = $this->apiService->apiRequest('POST', 'api/user-types', json_encode($formData), $token);
                if(is_array($response)){
                    if (isset($response['error']) && $response['error'] === true) {
                        // Handle the error
                        $errorMessage = 'Error: Status code ' . $response['status'];
                        // If there is a message in the response, include it in the output
                        $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
                        return $this->redirectToRoute('super_roles', [
                            'status' => $response['status'],
                            'error' => $errorMessage,
                            'message' => $responseMessage,
                        ]);
                    }
                }
                return $this->redirectToRoute('super_roles', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => '',
                ]);
                
            } catch (\Throwable $e) {
                return $this->redirectToRoute('super_roles', );
            }
        }
        return $this->redirectToRoute('super_roles');
    }

    private function getConnection($request){
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $response = $this->apiService->apiRequest('GET', 'api/super_admin/connections', $jsonBody, $token);
        return $response;
    }
}
