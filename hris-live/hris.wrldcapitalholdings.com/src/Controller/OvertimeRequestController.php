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
        $this->apiService = $apiService;
        $this->apiFunctions = $apiFunctions;
        $this->getProvinces = $getProvinces;
        $this->getTownCity = $getTownCity;
        $this->logger = $logger;
        $this->exportxls = $exportxls;
        $this->cache = $cache;
    }

    #[Route('/overtime/request', name: 'app_overtime_request')]
    public function index(Request $request): Response
    {
        $overtimeAPI = $this->apiFunctions->getOvertimeRequest($request)->toArray();

        return $this->render('administration/overtime_request.html.twig', [
            'overtimeRequest' => $overtimeAPI,
        ]);
    }

    #[Route('/profile-update-overtime-request', name: 'update_overtime_request_v2')]
    public function updateOvertimeRequestV2(Request $request): Response
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

            return $this->redirectToRoute('app_overtime_request', [
                'status'        => $response['status'],
                'error'         => $errorMessage,
                'message'       => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('app_overtime_request', [
            'status'        => $response->getStatusCode(),
            'error'         => '',
            'message'       => '', 
        ]);
    }


    #[Route('/profile-update-overtime-request-status', name: 'update_overtime_request_status')]
    public function updateOvertimeRequest(Request $request): Response
    {
        $session        = $request->getSession();
        $token          = $session->get('token');
        $user_id        = $session->get('user_id');
        $status         = $request->request->get('status') ?? 0;
        $ot_request_id  = $request->request->get('ot_request_id');

        // Collect form data from the request, handling optional fields
        $formData = [
            'status'    => $status,
            'user_id'   => $user_id,
        ];

        $response = $this->apiService->apiRequest('PUT', 'api/overtime_requests/update-status/'.$ot_request_id, json_encode($formData), $token);
        // dd($response);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {

            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_overtime_request', [
                'status'        => $response['status'],
                'error'         => $errorMessage,
                'message'       => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('app_overtime_request', [
            'status'        => $response->getStatusCode(),
            'error'         => '',
            'message'       => '',
        ]);
    }
}
