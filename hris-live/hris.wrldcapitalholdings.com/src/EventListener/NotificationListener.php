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
    }

    public function onKernelResponse(ResponseEvent $event)
    {
        $response = $event->getResponse();
        $statusCode = $response->getStatusCode();
    
        $request = $this->requestStack->getCurrentRequest();
        $message = $request->query->get('message') ?? '';
        $statusCode = $request->query->get('status');
    
        $session = $request->getSession();
        $token = $session->get('token');
        $userId = $session->get('user_id');
    
        // Collect form data
        $formData = [];
    
        // Send POST request to the API
        $apiResponse = $this->apiService->apiRequest('GET', 'api/notifications/find-by-employee/'.$userId, json_encode($formData), $token);
        if (is_array($apiResponse) && isset($apiResponse['error']) && $apiResponse['error'] === true) {
            $errorMessage = 'Error: Status code ' . $apiResponse['status'];
            $responseMessage = $apiResponse['message']['message'] ?? $errorMessage;
        } else {
            $responseMessage = $apiResponse->toArray();
        }
    
        // Store the response message in the session
        $session->set('notification_message', $responseMessage);
    }
}
