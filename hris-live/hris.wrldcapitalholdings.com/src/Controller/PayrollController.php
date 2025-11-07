<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpClient\HttpClient;

class PayrollController extends AbstractController
{
    #[Route('payroll/payslip/create', name: 'app_create_payslip')]
    public function createPayslip(Request $request)
    {
        // $session = $request->getSession();
        // if(!$session->has('token')){
        //     $session->invalidate();
        //     return $this->redirectToRoute('login');
        // }
        return $this->render('payroll/apps-hr-payroll-create-payslip.html.twig', []);
    }

    #[Route('payroll/payslip', name: 'app_view_payslip')]
    public function viewPayslip(Request $request)
    {
        // $session = $request->getSession();
        // if(!$session->has('token')){
        //     $session->invalidate();
        //     return $this->redirectToRoute('login');
        // }
        return $this->render('payroll/apps-hr-payroll-employee-salary.html.twig', []);
    }

    #[Route('payroll/empPayroll', name: 'app_emp_payroll')]
    public function viewEmployeePayroll(Request $request)
    {
        // $session = $request->getSession();
        // if(!$session->has('token')){
        //     $session->invalidate();
        //     return $this->redirectToRoute('login');
        // }
        $jsonBody = [];
        $jsonBody = [];
        $token = $request->getSession()->get('token');
        $authorizationToken = 'Bearer '.$token;
        $httpClient = HttpClient::create();
        $response = $httpClient->request('GET', 'http://127.0.0.1:8000/api/subdivision',[
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => $authorizationToken,
            ],
            'body' => $jsonBody
        ]);
        if($response->getStatusCode() === 200){
            $responseData = $response->toArray();
            return $this->render('payroll/apps-hr-payroll-payslip.html.twig',[
                'subdivisions' => $responseData['subdivisions'],
            ]);
        }
    }
}
