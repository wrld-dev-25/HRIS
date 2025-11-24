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
            // Normalize checkbox values: treat '1', 'on', true as true
            $cb = static function(string $key) use ($formData): bool {
                $val = $formData[$key] ?? '0';
                return $val === '1' || $val === 'on' || $val === true || $val === 1;
            };
            $sb = static function(string $base, string $action) use ($cb): bool {
                return $cb("sub_{$base}_{$action}");
            };
            
            // Prepare data for API request
            $data = [
                'project' => [
                    'can_view' => $cb('project_can_view'),
                    'can_add' => $cb('project_can_add'),
                    'can_edit' => $cb('project_can_edit'),
                    'can_delete' => $cb('project_can_delete'),
                ],
                'humanres' => [
                    'can_view' => $cb('humanres_can_view'),
                    'can_add' => $cb('humanres_can_add'),
                    'can_edit' => $cb('humanres_can_edit'),
                    'can_delete' => $cb('humanres_can_delete'),
                ],
                'administration' => [
                    'can_view' => $cb('administration_can_view'),
                    'can_add' => $cb('administration_can_add'),
                    'can_edit' => $cb('administration_can_edit'),
                    'can_delete' => $cb('administration_can_delete'),
                ],
                'payroll' => [
                    'can_view' => $cb('payroll_can_view'),
                    'can_add' => $cb('payroll_can_add'),
                    'can_edit' => $cb('payroll_can_edit'),
                    'can_delete' => $cb('payroll_can_delete'),
                ],
                'emp_leaves' => [
                    'can_view' => $cb('emp_leaves_can_view'),
                    'can_add' => $cb('emp_leaves_can_add'),
                    'can_edit' => $cb('emp_leaves_can_edit'),
                    'can_delete' => $cb('emp_leaves_can_delete'),
                ],

                'submodule' => [
                    'daily_time_record' => [
                        'can_view' => $sb('daily_time_record','can_view'),
                        'can_add' => $sb('daily_time_record','can_add'),
                        'can_edit' => $sb('daily_time_record','can_edit'),
                        'can_delete' => $sb('daily_time_record','can_delete'),
                    ],
                    'subdivision' => [
                        'can_view' => $sb('subdivision','can_view'),
                        'can_add' => $sb('subdivision','can_add'),
                        'can_edit' => $sb('subdivision','can_edit'),
                        'can_delete' => $sb('subdivision','can_delete'),
                    ],
                    'division' => [
                        'can_view' => $sb('division','can_view'),
                        'can_add' => $sb('division','can_add'),
                        'can_edit' => $sb('division','can_edit'),
                        'can_delete' => $sb('division','can_delete'),
                    ],
                    'department' => [
                        'can_view' => $sb('department','can_view'),
                        'can_add' => $sb('department','can_add'),
                        'can_edit' => $sb('department','can_edit'),
                        'can_delete' => $sb('department','can_delete'),
                    ],
                    'phase' => [
                        'can_view' => $sb('phase','can_view'),
                        'can_add' => $sb('phase','can_add'),
                        'can_edit' => $sb('phase','can_edit'),
                        'can_delete' => $sb('phase','can_delete'),
                    ],
                    'owner' => [
                        'can_view' => $sb('owner','can_view'),
                        'can_add' => $sb('owner','can_add'),
                        'can_edit' => $sb('owner','can_edit'),
                        'can_delete' => $sb('owner','can_delete'),
                    ],
                    'models' => [
                        'can_view' => $sb('models','can_view'),
                        'can_add' => $sb('models','can_add'),
                        'can_edit' => $sb('models','can_edit'),
                        'can_delete' => $sb('models','can_delete'),
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
                        'can_view' => $sb('emp_project','can_view'),
                        'can_add' => $sb('emp_project','can_add'),
                        'can_edit' => $sb('emp_project','can_edit'),
                        'can_delete' => $sb('emp_project','can_delete'),
                    ],
                    'emp_list' => [
                        'can_view' => $sb('emp_list','can_view'),
                        'can_add' => $sb('emp_list','can_add'),
                        'can_edit' => $sb('emp_list','can_edit'),
                        'can_delete' => $sb('emp_list','can_delete'),
                    ],

                    'sss_config' => [
                        'can_view' => $sb('sss_config','can_view'),
                        'can_add' => $sb('sss_config','can_add'),
                        'can_edit' => $sb('sss_config','can_edit'),
                        'can_delete' => $sb('sss_config','can_delete'),
                    ],
                    'pagibig_config' => [
                        'can_view' => $sb('pagibig_config','can_view'),
                        'can_add' => $sb('pagibig_config','can_add'),
                        'can_edit' => $sb('pagibig_config','can_edit'),
                        'can_delete' => $sb('pagibig_config','can_delete'),
                    ],
                    'bir_config' => [
                        'can_view' => $sb('bir_config','can_view'),
                        'can_add' => $sb('bir_config','can_add'),
                        'can_edit' => $sb('bir_config','can_edit'),
                        'can_delete' => $sb('bir_config','can_delete'),
                    ],
                    'philhealth_config' => [
                        'can_view' => $sb('philhealth_config','can_view'),
                        'can_add' => $sb('philhealth_config','can_add'),
                        'can_edit' => $sb('philhealth_config','can_edit'),
                        'can_delete' => $sb('philhealth_config','can_delete'),
                    ],
                    'payroll' => [
                        'can_view'      => $sb('payroll','can_view'),
                        'can_add'       => $sb('payroll','can_add'),
                        'can_edit'      => $sb('payroll','can_edit'),
                        'can_delete'    => $sb('payroll','can_delete'),
                    ],
                    'payroll_reports' => [
                        'can_view' => $sb('payroll_reports','can_view'),
                        'can_add' => $sb('payroll_reports','can_add'),
                        'can_edit' => $sb('payroll_reports','can_edit'),
                        'can_delete' => $sb('payroll_reports','can_delete'),
                    ],
                    'leave_policy' => [
                        'can_view' => $sb('leave_policy','can_view'),
                        'can_add' => $sb('leave_policy','can_add'),
                        'can_edit' => $sb('leave_policy','can_edit'),
                        'can_delete' => $sb('leave_policy','can_delete'),
                    ],
                    'emp_leaves' => [
                        'can_view' => $sb('emp_leaves','can_view'),
                        'can_add' => $sb('emp_leaves','can_add'),
                        'can_edit' => $sb('emp_leaves','can_edit'),
                        'can_delete' => $sb('emp_leaves','can_delete'),
                    ],
                    'holiday_config' => [
                        'can_view' => $sb('holiday_config','can_view'),
                        'can_add' => $sb('holiday_config','can_add'),
                        'can_edit' => $sb('holiday_config','can_edit'),
                        'can_delete' => $sb('holiday_config','can_delete'),
                    ],
                    'leave_request' => [
                        'can_view' => $sb('leave_request','can_view'),
                        'can_add' => $sb('leave_request','can_add'),
                        'can_edit' => $sb('leave_request','can_edit'),
                        'can_delete' => $sb('leave_request','can_delete'),
                    ],
                    'leave_calendar' => [
                        'can_view' => $sb('leave_calendar','can_view'),
                        'can_add' => $sb('leave_calendar','can_add'),
                        'can_edit' => $sb('leave_calendar','can_edit'),
                        'can_delete' => $sb('leave_calendar','can_delete'),
                    ],
                    'overtime_request' => [
                        'can_view' => $sb('overtime_request','can_view'),
                        'can_add' => $sb('overtime_request','can_add'),
                        'can_edit' => $sb('overtime_request','can_edit'),
                        'can_delete' => $sb('overtime_request','can_delete'),
                    ],
                ]
            ];

            // Keep Filing Management parent checked if any filing submodule has permissions
            $filingKeys = ['leave_policy','emp_leaves','holiday_config','leave_request','leave_calendar','overtime_request'];
            $filingHasPermission = false;
            foreach ($filingKeys as $fk) {
                $sub = $data['submodule'][$fk];
                if ($sub['can_view'] || $sub['can_add'] || $sub['can_edit'] || $sub['can_delete']) {
                    $filingHasPermission = true;
                    break;
                }
            }
            if ($filingHasPermission) {
                $data['emp_leaves'] = [
                    'can_view' => true,
                    'can_add' => true,
                    'can_edit' => true,
                    'can_delete' => true,
                ];
            }
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

