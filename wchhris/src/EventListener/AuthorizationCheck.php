<?php
// src/EventListener/ExceptionListener.php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class AuthorizationCheck
{
    private $requestStack;
    private $logger;
    private $router;

    public function onKernelException(ExceptionEvent $event)
    {
        $exception = $event->getThrowable();

        // Check if the exception is an AccessDeniedException
        if ($exception instanceof AccessDeniedException) {
            // Customize your response object to display the custom 403 error
            $response = new JsonResponse([
                'error' => 'Access Denied',
                'message' => 'You do not have permission to access this resource.',
            ], JsonResponse::HTTP_FORBIDDEN);

            // Set the response to the event
            $event->setResponse($response);
        }
    }
}

