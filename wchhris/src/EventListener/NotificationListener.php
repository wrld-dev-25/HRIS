<?php
// src/EventListener/NotificationListener.php
namespace App\EventListener;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Twig\Environment as Twig;
use App\Service\APIRequest;
use App\Service\APIFunctions;

class NotificationListener
{
    private RequestStack $requestStack;
    private Twig $twig;
    private APIRequest $apiService;
    private APIFunctions $apiFunctions;

    public function __construct(RequestStack $requestStack, Twig $twig, APIRequest $apiService, APIFunctions $apiFunctions)
    {
        $this->requestStack = $requestStack;
        $this->twig = $twig;
        $this->apiService = $apiService;
        $this->apiFunctions = $apiFunctions;
    }

    public function onKernelResponse(ResponseEvent $event)
    {
        $request = $this->requestStack->getCurrentRequest();
        if (!$request) {
            return;
        }

        $response = $event->getResponse();
        $statusCode = $response ? $response->getStatusCode() : null;

        $message = $request->query->get('message') ?? '';
        $statusCode = $request->query->get('status');

        $session = $request->getSession();
        if (!$session || !$session->has('token') || !$session->has('user_id')) {
            return;
        }
        $token = $session->get('token');
        $userId = $session->get('user_id');

        // Collect form data
        $formData = [];

        // Send POST request to the API
        $apiResponse = $this->apiService->apiRequest('GET', 'api/notifications/find-by-employee/'.$userId, json_encode($formData), $token);
        if (is_array($apiResponse) && isset($apiResponse['error']) && $apiResponse['error'] === true) {
            $errorMessage = 'Error: Status code ' . ($apiResponse['status'] ?? 'unknown');
            $responseMessage = $apiResponse['message']['message'] ?? $apiResponse['message'] ?? $errorMessage;
        } elseif ($apiResponse) {
            try {
                $responseMessage = $apiResponse->toArray(false);
            } catch (\Throwable $e) {
                $responseMessage = [
                    'error' => true,
                    'message' => 'Unable to decode notifications response.',
                ];
            }
        } else {
            $responseMessage = [
                'error' => true,
                'message' => 'No notification response received.',
            ];
        }

        // Store the response message in the session
        $session->set('notification_message', $responseMessage);
    }
}
