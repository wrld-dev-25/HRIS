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
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/holidays')]
class HolidayController extends AbstractController
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

    #[Route('/', name: 'app_holiday')]
    public function viewHolidays(Request $request): Response
    {
        $holidays = $this->apiFunctions->getHolidayConfig($request)->toArray();
        $yearlyHolidays = $this->apiFunctions->getYearlyHoliday($request)->toArray();
        // dd($yearlyHolidays);
        return $this->render('holiday/apps-holiday.html.twig', [
            'standardHolidays' => $holidays,
            'yearlyConfiguration' => $yearlyHolidays
        ]);
    }

    #[Route('/create', name: 'create_holidays_config', methods: ['POST'])]
    public function createHolidaysConfig(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');

        // Collect form data from the request, handling optional fields
        $formData = [
            'name'                  => $request->request->get('holiday_name'),
            'date'                  => $request->request->get('holiday_date'), // Optional
            'multiplier_regular'    => $request->request->get('multiplier_regular') ?? 0,
            'multiplier_overtime'   => $request->request->get('multiplier_ot') ?? 0,
        ];
        // Send POST request to create the LeavePolicy via ApiService
        $response = $this->apiService->apiRequest('POST', 'api/holiday-config/create-holidays', json_encode($formData), $token);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_holiday', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('app_holiday', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/update', name: 'update_holidays_config', methods: ['POST'])]
    public function updateHolidaysConfig(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $holiday_id = $request->request->get('holiday_id');
        // Collect form data from the request, handling optional fields
        $formData = [
            'name'                  => $request->request->get('holiday_name'),
            'date'                  => $request->request->get('holiday_date'), // Optional
            'multiplier_regular'    => $request->request->get('multiplier_regular') ?? 0,
            'multiplier_overtime'   => $request->request->get('multiplier_ot') ?? 0,
        ];

        // Send POST request to create the LeavePolicy via ApiService
        $response = $this->apiService->apiRequest('PUT', 'api/holiday/config/update/'.$holiday_id, json_encode($formData), $token);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_holiday', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('app_holiday', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/delete', name: 'delete_holidays_config', methods: ['POST'])]
    public function deleteHolidaysConfig(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $holiday_id = $request->request->get('holiday_id');
        // Collect form data from the request, handling optional fields
        $formData = [];
        // Send POST request to create the LeavePolicy via ApiService
        $response = $this->apiService->apiRequest('DELETE', 'api/holiday/config/delete/'.$holiday_id, json_encode($formData), $token);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_holiday', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('app_holiday', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/bulk-add-holidays', name: 'bulk_add_holidays', methods: ['POST'])]
    public function bulkCreateHolidays(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        // Collect form data from the request, handling optional fields
        $formData = [
            'year'      => $request->request->get('year'),
        ];

        // Send POST request to create the LeavePolicy via ApiService
        $response = $this->apiService->apiRequest('POST', 'api/yearly-holiday/create-list', json_encode($formData), $token);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_holiday', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('app_holiday', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/yearly-holiday/update', name: 'update_yearly_holidays_config', methods: ['POST'])]
    public function yearlyUpdateHolidaysConfig(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $yearly_holiday_id = $request->request->get('yearly_holiday_id');
        // Collect form data from the request, handling optional fields
        $formData = [
            'holiday_config_id'     => $request->request->get('holiday_config_id'),
        ];

        // Send POST request to create the LeavePolicy via ApiService
        $response = $this->apiService->apiRequest('PUT', 'api/yearly-holiday/update/'.$yearly_holiday_id, json_encode($formData), $token);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_holiday', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('app_holiday', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/yearly-holiday/delete', name: 'delete_yearly_holidays_config', methods: ['POST'])]
    public function yearlyDeleteHolidaysConfig(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $yearly_holiday_id = $request->request->get('yearly_holiday_id');
        // Collect form data from the request, handling optional fields
        $formData = [];
        // Send POST request to create the LeavePolicy via ApiService
        $response = $this->apiService->apiRequest('DELETE', 'api/yearly-holiday/delete/'.$yearly_holiday_id, json_encode($formData), $token);
        // Handle potential error response from API
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_holiday', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        // Redirect to success route if creation is successful
        return $this->redirectToRoute('app_holiday', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }
}
