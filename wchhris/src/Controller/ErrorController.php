<?php

// src/Controller/ErrorController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;

class ErrorController extends AbstractController
{
    /**
     * @Route("/error/{statusCode}", name="error")
     */
    #[Route('/error/{statusCode}', name: 'error')]
    public function error(Request $request, int $statusCode): Response
    {
        // You can get the previous URL from the request or session
        $referer = $request->headers->get('referer') ?: $this->generateUrl('home'); // Change 'home' to your default route

        // For HTTP 500 errors, you might want to log the error or send additional information

        return $this->redirect($referer);
    }
}

