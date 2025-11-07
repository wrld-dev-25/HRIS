<?php
// src/EventListener/ExceptionListener.php

namespace App\EventListener;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\Paginator\Paginator;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use App\Service\APIRequest;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class SessionListener
{
    private $requestStack;
    private $logger;
    private $router;
    private $apiService;
    private $twig;

    public function __construct(RequestStack $requestStack, LoggerInterface $logger, RouterInterface $router, APIRequest $apiService, Environment $twig)
    {
        $this->requestStack = $requestStack;
        $this->logger = $logger;
        $this->router = $router;
        $this->apiService = $apiService;
        $this->twig = $twig;
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();
        $session = $request->getSession();
        $currentRoute = $request->attributes->get('_route');
        $allowedRoutes = ['login','validate_login', 'forget_password', 'reset_password', 'email_forget_password', 'form_reset_password'];
        if (!in_array($currentRoute, $allowedRoutes) && $session && !$session->has('token')) {
            // Access session data

            $sessionId = $session->getId();
            $token = $session->get('token');
            
            // Log session data
            $this->logger->info('session id: ' . $sessionId);
            $this->logger->info('token: ' . ($token ?: 'No token in session'));

            // Render login template instead of redirecting
            $javascriptSnippet = ''; // Add any JavaScript snippet if needed
            $content = $this->twig->render('auth-login-boxed.html.twig', [
                'javascriptSnippet' => $javascriptSnippet,
            ]);
            $event->setResponse(new Response($content));
            return; // Ensure no further processing
        }

        if ($session->has('user_id') && $session->has('token') && !in_array($currentRoute, $allowedRoutes)) {
            $userId = $session->get('user_id');
            $token = $session->get('token');

            $response = $this->apiService->apiRequest('POST', 'api/revalidate-session', json_encode(['user_id' => $userId]), $token);
            if(!is_array($response)){
                $responseData = $response->toArray();
                $this->setSessionVariables($request, $responseData);
            }
            else{
                // Log invalid response
                $this->logger->info('Invalid session revalidation response');

                // Render login template instead of redirecting
                $javascriptSnippet = ''; // Add any JavaScript snippet if needed
                $content = $this->twig->render('auth-login-boxed.html.twig', [
                    'javascriptSnippet' => $javascriptSnippet,
                ]);
                $event->setResponse(new Response($content));
                return; // Ensure no further processing
            }
        }
    }

    private function setSessionVariables($request, $data)
    {
        $session = $request->getSession();
        $session->set('user_id', $data['user_id']);
        $session->set('username', $data['username']);
        $session->set('token', $data['token']);
        $session->set('userTypeCode', $data['user_type_code']);
        $session->set('userTypeName', $data['user_type_name']);
        $fullname = $data['first_name']. ' ' .$data['last_name'];
        $session->set('fullname', $fullname);
        $session->set('empCode', $data['empCode']);
        $session->set('main_module_access', $data['main_module']);
        $session->set('sub_module_access', $data['sub_module']);
        $session->set('profile_image_path', $data['profile_image']);
    }
}
