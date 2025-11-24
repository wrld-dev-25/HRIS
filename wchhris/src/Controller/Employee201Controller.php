<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Employee201Controller extends AbstractController
{
    #[Route('/employee201/forms', name: 'employee201_form')]
    public function index(Request $request): Response
    {
        return $this->render('employee201/forms-validation.html.twig');
    }
}
