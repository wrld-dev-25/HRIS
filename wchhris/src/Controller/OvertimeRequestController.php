<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\APIRequest;
use App\Service\APIFunctions;
use App\Service\PSGCService;
use Psr\Log\LoggerInterface;
use App\Service\ExportXLSService;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Contracts\HttpClient\ResponseInterface;

class OvertimeRequestController extends AbstractController
{
    private $apiService;
    private $apiFunctions;
    private $getProvinces;
    private $getTownCity;
    private $logger;
    private $exportxls;
    private $cache;

    public function __construct(
        APIRequest $apiService,
        APIFunctions $apiFunctions,
        PSGCService $getProvinces,
        PSGCService $getTownCity,
        LoggerInterface $logger,
        ExportXLSService $exportxls,
        #[Autowire(service: 'cache.my_redis')] AdapterInterface $cache
    ) {
        $this->apiService   = $apiService;
        $this->apiFunctions = $apiFunctions;
        $this->getProvinces = $getProvinces;
        $this->getTownCity  = $getTownCity;
        $this->logger       = $logger;
        $this->exportxls    = $exportxls;
        $this->cache        = $cache;
    }

    #[Route('/overtime/request', name: 'app_overtime_request')]
    public function index(Request $request): Response
    {
        $session       = $request->getSession();
        $token         = $session->get('token');
        $sessionUserId = $session->get('user_id');

        // 1) Overtime Requests
        $overtimeAPI = $this->decodeApiPayload(
            $this->apiFunctions->getOvertimeRequest($request)
        );
        if (!is_array($overtimeAPI)) {
            $overtimeAPI = [];
        }

        // 2) Employees (para sa Employee Name column)
        $employeesPayload = $this->decodeApiPayload(
            $this->apiFunctions->getEmployees($request)
        );
        $employees = $employeesPayload['employees'] ?? [];
        $employeeNamesById = $this->buildEmployeeLookup($employees);

        // 3) Users (para sa Updated By, gamit user_id sa overtimeRequest)
        // ⚠️ Palitan 'api/users' kung iba talaga endpoint ninyo sa backend.
        $usersResponse = $this->apiService->apiRequest(
            'GET',
            'api/users',
            null,
            $token
        );
        $usersPayload = $this->decodeApiPayload($usersResponse);

        if (isset($usersPayload['users']) && is_array($usersPayload['users'])) {
            $users = $usersPayload['users'];
        } elseif (is_array($usersPayload)) {
            $users = $usersPayload;
        } else {
            $users = [];
        }

        $currentUser = null;
        foreach ($users as $user) {
            if (!is_array($user) || !isset($user['id'])) {
                continue;
            }
            if ((string) $user['id'] === (string) $sessionUserId) {
                $currentUser = $user;
                break;
            }
        }

        $currentUserTypeId = null;
        if (isset($currentUser['user_type']) && is_array($currentUser['user_type'])) {
            $currentUserTypeId = $currentUser['user_type']['id'] ?? null;
        }
        $currentUserTypeId = $currentUserTypeId ?? ($currentUser['user_type_id'] ?? null);

        $isStandardUser = $currentUserTypeId !== null && (int) $currentUserTypeId === 14;

        $currentEmployeeId = null;
        foreach ($employees as $employee) {
            if (!is_array($employee) || empty($employee['id'])) {
                continue;
            }

            $employeeUserId = null;
            if (isset($employee['user']) && is_array($employee['user'])) {
                $employeeUserId = $employee['user']['id'] ?? null;
            }
            $employeeUserId = $employeeUserId ?? ($employee['user_id'] ?? null);

            if ($employeeUserId !== null && (string) $employeeUserId === (string) $sessionUserId) {
                $currentEmployeeId = $employee['id'];
                break;
            }
        }

        if ($isStandardUser) {
            if ($currentEmployeeId !== null) {
                $overtimeAPI = array_values(array_filter($overtimeAPI, static function ($otRequest) use ($currentEmployeeId) {
                    if (!is_array($otRequest)) {
                        return false;
                    }
                    return isset($otRequest['emp_id']) && (string) $otRequest['emp_id'] === (string) $currentEmployeeId;
                }));
            } else {
                $overtimeAPI = [];
            }
        }

        $userFullNamesById = $this->buildUserFullNameLookup($users);

        return $this->render('administration/overtime_request.html.twig', [
            'overtimeRequest'    => $overtimeAPI,
            'employees'          => $employees,
            'employeeNamesById'  => $employeeNamesById,
            'userFullNamesById'  => $userFullNamesById, // gagamitin sa "Updated By"
            'is_standard_user'   => $isStandardUser,
        ]);
    }

    #[Route('/profile-update-overtime-request', name: 'update_overtime_request_v2')]
    public function updateOvertimeRequestV2(Request $request): Response
    {
        $session = $request->getSession();
        $token   = $session->get('token');

        $ot_request_id = $request->request->get('ot_request_id');
        $reason        = $request->request->get('reason') ?? "";
        $otHours       = $request->request->get('ot_hours'); // "H:mm" or "1"
        $otDate        = $request->request->get('ot_date') ?? null;

        $formData = [
            'ot_hours'      => $otHours,
            'ot_reason'     => $reason,
            'overtime_date' => $otDate,
        ];

        $this->apiService->apiRequest(
            'PUT',
            'api/overtime_requests/update/' . $ot_request_id,
            json_encode($formData),
            $token
        );

        return $this->redirectToRoute('app_overtime_request');
    }

    #[Route('/profile-update-overtime-request-status', name: 'update_overtime_request_status')]
    public function updateOvertimeRequestStatus(Request $request): Response
    {
        $session = $request->getSession();
        $token   = $session->get('token');
        $user_id = $session->get('user_id'); // ID sa users table

        $status        = (int) ($request->request->get('status') ?? 0);
        $ot_request_id = $request->request->get('ot_request_id');

        // Backend niyo na bahala mag-set ng approved_by at updated_at based sa user_id
        $formData = [
            'status'  => $status,
            'user_id' => $user_id,
        ];

        $this->apiService->apiRequest(
            'PUT',
            'api/overtime_requests/update-status/' . $ot_request_id,
            json_encode($formData),
            $token
        );

        return $this->redirectToRoute('app_overtime_request');
    }

    private function decodeApiPayload(ResponseInterface|array|null $response): array
    {
        $payload = [];

        if ($response instanceof ResponseInterface) {
            try {
                $payload = $response->toArray();
            } catch (\Throwable $exception) {
                $this->logger->error('Failed to decode overtime API response', [
                    'exception' => $exception->getMessage(),
                ]);
            }
        } elseif (is_array($response)) {
            $payload = $response;
        }

        if (($payload['error'] ?? false) === true) {
            $this->logger->error('Overtime API returned an error payload.', [
                'status' => $payload['status'] ?? null,
            ]);
            return [];
        }

        return $payload ?? [];
    }

    /**
     * emp_id (employees.id) -> Full Name
     */
    private function buildEmployeeLookup(array $employees): array
    {
        $lookup = [];

        foreach ($employees as $employee) {
            if (!is_array($employee) || empty($employee['id'])) {
                continue;
            }

            $fullName = trim(implode(' ', array_filter([
                $employee['first_name']  ?? '',
                $employee['middle_name'] ?? '',
                $employee['last_name']   ?? '',
                $employee['extension']   ?? '',
            ])));

            $lookup[$employee['id']] = $fullName !== ''
                ? $fullName
                : ($employee['employee_code'] ?? 'Unknown Employee');
        }

        return $lookup;
    }

    /**
     * users.id -> "first_name last_name" (o fallback sa name/email)
     */
    private function buildUserFullNameLookup(array $users): array
    {
        $lookup = [];

        foreach ($users as $user) {
            if (!is_array($user) || empty($user['id'])) {
                continue;
            }

            $fullName = trim(implode(' ', array_filter([
                $user['first_name'] ?? '',
                $user['last_name']  ?? '',
            ])));

            if ($fullName === '') {
                $fullName = $user['name']
                    ?? $user['email']
                    ?? 'Unknown User';
            }

            $lookup[$user['id']] = $fullName;
        }

        return $lookup;
    }
}
