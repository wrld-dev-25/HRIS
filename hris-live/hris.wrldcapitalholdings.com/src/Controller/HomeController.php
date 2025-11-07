<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\APIRequest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use App\Service\EmailService;


class HomeController extends AbstractController
{
    protected $apiService;
    protected $loader;
    protected $requestStack;
    private $cache;

    protected $emailService;

    public function __construct(Environment $twig, APIRequest $apiService, RequestStack $requestStack, #[Autowire(service: 'cache.my_redis')]
    AdapterInterface $cache, EmailService $emailService)
    {
        $this->loader = $twig->getLoader();
        $this->apiService = $apiService;
        $this->requestStack = $requestStack;
        $this->cache = $cache;
        $this->emailService = $emailService;    
    }

    #[Route('/', name: 'home')]
    public function index(Request $request): Response
    {
        $session = $request->getSession();
        if($session->get('username')){
            $token = $request->getSession()->get('token');
            $dashboard_count = $this->apiService->apiRequest('GET', 'api/dashboard', [], $token)->toArray();
            // $divisions = $this->apiService->apiRequest('GET', 'api/division/', [], $token)->toArray();
            // $departments = $this->apiService->apiRequest('GET', 'api/department/', [], $token)->toArray();
            // $projects = $this->apiService->apiRequest('GET', 'api/project', [], $token)->toArray();
            // $employees = $this->apiService->apiRequest('GET', 'api/employee201', [], $token)->toArray();
            // $subdivisions = $this->apiService->apiRequest('GET', 'api/subdivision', [], $token)->toArray();
            // $owners = $this->apiService->apiRequest('GET', 'api/owner', [], $token)->toArray();
            // $models = $this->apiService->apiRequest('GET', 'api/model', [], $token)->toArray();

            $fromLogin = $request->query->has('fromLogin') ? $request->query->get('fromLogin') : false;
            $javascriptSnippet = "<script></script>";
            if($fromLogin == true){
                $javascriptSnippet = "<script>
                    showToast('Successfully logged in','bg-green-500')
                </script>";
            }
            return $this->render('dashboards-hr.html.twig', [
                'divisions' => $dashboard_count['divisionCount'],
                'departments' => $dashboard_count['departmentCount'],
                'projects' => $dashboard_count['projectCount'],
                'employees' => $dashboard_count['employeeRecordsCount'],
                'subdivisions' => $dashboard_count['subdivisionCount'],
                'owners' => $dashboard_count['ownersCount'],
                'models' => $dashboard_count['facilitiesCount'],
                'dtr_count' => $dashboard_count['dtrRecordsDailyCount'],
                'manpower_count' => $dashboard_count['manpowerAssignmentCount'],
                'javascriptSnippet' => $javascriptSnippet,
            ]);
            //return $this->render('dashboards-hr.html.twig');
        }
        else{   
            return $this->render('auth-login-boxed.html.twig');
        }
    }

    #[Route('/validate_login', name: 'validate_login')]
    public function validateLogin(Request $request): Response
    {
        $identifier = $request->request->get('identifier');
        $password = $request->request->get('password');
        // Make API request
        $response = $this->apiService->apiRequest('POST', 'api/login', json_encode(['identifier' => $identifier, 'password' => $password]), '');
        //dd($response);
        // Handle API response
        // $allowedUserTypes = ["SADM", "ADM", "HR"];
        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
            return $this->redirectToRoute('login', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => 'Login failed. Please check your credentials and try again.',
                'fromLogin' => true
            ]);
        }
        else{
            $responseData = $response->toArray();
            // if (in_array($responseData['user_type_code'], $allowedUserTypes)) {
                // Set session variables
                $this->setSessionVariables($request, $responseData);
                // Redirect to dashboard route
                return $this->redirectToRoute('dashboard', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => 'Welcome!',
                    'fromLogin' => true
                ]);
            // } else {
                // Handle unauthorized access (redirect or render error page)
                // /return $this->renderErrorPageWithToast("Unauthorized access"); // Example method to render an error page
                return $this->redirectToRoute('login', [
                    'status' => $response->getStatusCode(),
                    'error' => '',
                    'message' => 'Incorrect password, username or denied access',
                    'fromLogin' => true
                ]);
            // }
        }
    }

    #[Route('/revalidate-session', name: 'revalidate_session')]
    public function revalidateSession(Request $request): Response
    {
        // Make API request
        $session = $request->getSession();
        $user_id = $session->get('user_id');
        $token = $session->get('token');
        $response = $this->apiService->apiRequest('POST', 'api/revalidate-session', json_encode(['user_id' => $user_id]), $token);
        // Handle API response
        $allowedUserTypes = ["SADM", "ADM", "HR"];
        if ($response->getStatusCode() === 200) {
            $responseData = $response->toArray();

            if (in_array($responseData['user_type_code'], $allowedUserTypes)) {
                // Set session variables
                $this->setSessionVariables($request, $responseData);
                
                // Redirect to dashboard route
                return $this->redirectToRoute('dashboard', ['fromLogin' => false]);
            } else {
                // Handle unauthorized access (redirect or render error page)
                // /return $this->renderErrorPageWithToast("Unauthorized access"); // Example method to render an error page
                return $this->redirectToRoute('login', ['fromLogin' => false]); 
            }
        }
        else{
            return $this->redirectToRoute('login', ['fromLogin' => false]);
        }
    }

    #[Route('/login', name: 'login')]
    public function login(Request $request): Response
    {
        // /$fromLogin = $request->query->has('fromLogin') ? $request->query->get('fromLogin') : false;
        $fromLogin = $request->query->get('fromLogin');
        $javascriptSnippet = "<script></script>";

        //dd($fromLogin);
        // if($fromLogin == 1){
        //     $javascriptSnippet = "<script>
        //         showToast('Login failed. Please check your credentials and try again.','bg-red-500')
        //     </script>";
        //     //dd($fromLogin);
        // }

        return $this->render('auth-login-boxed.html.twig',[
            'javascriptSnippet' => $javascriptSnippet,
        ]);
    }

    #[Route('/auth-logout-boxed', name: 'logout')]
    public function logout(Request $request): Response
    {
        $session = $request->getSession();
        $session->invalidate();
        return $this->render('auth-login-boxed.html.twig');
    }

    #[Route('/dashboards-hr', name: 'dashboard')]
    public function viewDashboard(Request $request): Response
    {
        $token = $request->getSession()->get('token');
        $dashboard_count = $this->apiService->apiRequest('GET', 'api/dashboard', [], $token)->toArray();
        // $divisions = $this->apiService->apiRequest('GET', 'api/division/', [], $token)->toArray();
        // $departments = $this->apiService->apiRequest('GET', 'api/department/', [], $token)->toArray();
        // $projects = $this->apiService->apiRequest('GET', 'api/project', [], $token)->toArray();
        // $employees = $this->apiService->apiRequest('GET', 'api/employee201', [], $token)->toArray();
        // $subdivisions = $this->apiService->apiRequest('GET', 'api/subdivision', [], $token)->toArray();
        // $owners = $this->apiService->apiRequest('GET', 'api/owner', [], $token)->toArray();
        // $models = $this->apiService->apiRequest('GET', 'api/model', [], $token)->toArray();

        $fromLogin = $request->query->has('fromLogin') ? $request->query->get('fromLogin') : false;
        $javascriptSnippet = "<script></script>";
        // if($fromLogin == true){
        //     $javascriptSnippet = "<script>
        //         showToast('Successfully logged in','bg-green-500')
        //     </script>";
        // }
        //dd($dashboard_count);
        return $this->render('dashboards-hr.html.twig', [
            'divisions' => $dashboard_count['divisionCount'],
            'departments' => $dashboard_count['departmentCount'],
            'projects' => $dashboard_count['projectCount'],
            'employees' => $dashboard_count['employeeRecordsCount'],
            'subdivisions' => $dashboard_count['subdivisionCount'],
            'owners' => $dashboard_count['ownersCount'],
            'models' => $dashboard_count['facilitiesCount'],
            'dtr_count' => $dashboard_count['dtrRecordsDailyCount'],
            'manpower_count' => $dashboard_count['manpowerAssignmentCount'],
            'javascriptSnippet' => $javascriptSnippet,
        ]);
    }

    // #[Route('/{path}')]
    // public function root($path, Request $request)
    // {
    //     $session = $request->getSession();
    //     if ($this->loader->exists($path.'.html.twig')) {
    //         if ($path == '/' || $path == 'home' || $path == 'index') {
    //             return $this->render('apps-hr-employee.html.twig');
    //         }
    //         if ($path == '/' || $path == 'auth-logout-boxed' || $path == 'auth-logout-boxed') {
    //             $session->invalidate();
    //             return $this->render('auth-login-boxed.html.twig');
    //         }
    //         //return $this->render($path.'.html.twig');
    //     }
    //     throw $this->createNotFoundException();
    // }

    #[Route('/validate_call', name: 'get_token')]
    public function getToken(Request $request): JsonResponse
    {
        // Retrieve the token from the session
        $token = $token = $request->getSession()->get('token');
        // $baseUrl = $this->requestStack->getCurrentRequest();
        // If token doesn't exist, return an error
        if (!$token) {
            return $this->json([
                'error' => 'Token not found in session.'
            ], JsonResponse::HTTP_NOT_FOUND);
        }

        // Return the token as a JSON response
        return $this->json([
            'token' => $token,
            // 'baseURL' => $baseUrl
        ], JsonResponse::HTTP_OK);
    }

    #[Route('/forget_password', name: 'forget_password')]
    public function forgetPassword(Request $request): Response
    {
        return $this->render('forget_password/auth-reset-password-basic.html.twig', [
            'javascriptSnippet' => '',
        ]);
    }

    #[Route('/email_forget_password', name: 'email_forget_password')]
    public function emailForgetPasswordEmail(Request $request): Response
    {
        $email = $request->request->get('email');

        try {
            $response = $this->apiService->apiRequest('POST', 'api/forget_password', json_encode(['email' => $email]), '');
            $response->getHeaders(false);
            $responseData = $response->toArray();

        } catch (\Throwable $e) {
            $response->getHeaders(false);

            if ($e->getCode() === 401) {
                $javascriptSnippet = "<script>
                    showToast('Email not found','bg-red-500')
                </script>";
            } else {
                $javascriptSnippet = "<script>
                    showToast('Email address is required','bg-red-500')
                </script>";
            }
            
            return $this->render('forget_password/auth-reset-password-basic.html.twig', [
                'javascriptSnippet' => $javascriptSnippet,
            ]);
        }

        //dd($responseData['message']);
        $javascriptSnippet = "<script></script>";

        if ($response->getStatusCode() === 200) {
            
            // Get response data 
            $employee = json_decode($responseData['employee']);
            $firstName = $employee->first_name ?? 'Admin';
            $token = $responseData['token'];

            $emailResponse = $this->emailService->sendPasswordResetEmail($responseData['email'], $firstName, $token);

            if ($emailResponse->getContent() == 'success') {
                $javascriptSnippet = "<script>
                    showToast('Email Sent!','bg-green-500')
                </script>";       
            } else {
                $javascriptSnippet = "<script>
                    showToast('An error occured, failed to send email','bg-red-500')
                </script>";
            }
            
        } else {
            $response->getHeaders(false);
            $javascriptSnippet = "<script>
                showToast('". $responseData['message'] ."', failed to send email','bg-red-500')
            </script>";
        }

        return $this->render('forget_password/auth-reset-password-basic.html.twig', [
            'javascriptSnippet' => $javascriptSnippet,
        ]);
    }

    #[Route('/reset_password/{token}', name: 'reset_password')]
    public function resetPassword(Request $request, String $token): Response
    {
        $isValid = $request->get('isValid', null);
        $status = $request->get('status', null);
        
        if ($isValid != null && $status != null) {
            return $this->render('forget_password/auth-create-password-basic.html.twig', [
                'isValid' => $isValid,
                'status' => $status,
                'javascriptSnippet' => ''
            ]);
        }

        if (!$token || $token === null || strlen($token) <= 0) {
            return $this->render('forget_password/auth-create-password-basic.html.twig', [
                'isValid' => false,
                'javascriptSnippet' => ''
            ]);
        }

        $response = $this->apiService->apiRequest('POST', 'api/validate_reset_token', json_encode(['token' => $token]), '');
        $checkToken = $response->toArray();
        $status = $checkToken['status'];
        $messege = $checkToken['message'];

        return $this->render('forget_password/auth-create-password-basic.html.twig', [
            'isValid' => true,
            'status' => $status,
            'token' => $token,
            'javascriptSnippet' => ''
        ]);
    }

    #[Route('/form/submit/reset_password', name: 'form_reset_password')]
    public function formSubmitResetPassword(Request $request): Response
    {
        $password = $request->request->get('passwordInput');
        $confirmPassword = $request->request->get('passwordConfirmInput');
        $token = $request->request->get('token');
        $jsonData = [
            'password' => $password,
            'token' => $token
        ];
        //dd($jsonData);

        $response = $this->apiService->apiRequest('POST', 'api/validate_reset_token', json_encode($jsonData), '');
        $responseData = $response->toArray();
        //dd($responseData);

        $checkStatus = $responseData['status'];

        if ($checkStatus === 'Valid') {

            try {
                $changePasswordResponse = $this->apiService->apiRequest('POST', 'api/reset_password', json_encode($jsonData), '');
                $changePasswordData = $changePasswordResponse->toArray();

                $status = $changePasswordData['status'];
                $messege = $changePasswordData['message'];

                return $this->render('forget_password/auth-reset-password-success.html.twig');

            } catch (\Throwable $e) {
                $changePasswordResponse->getHeaders(false);

                if ($e->getCode() === 401) {
                    $javascriptSnippet = "<script>
                        showToast('Invalid Credentials, failed reset password','bg-red-500')
                    </script>";
                } else {
                    $javascriptSnippet = "<script>
                        showToast('An error occured, failed reset password','bg-red-500')
                    </script>";
                }

                return $this->redirectToRoute('reset_password', [
                    'isValid' => true,
                    'status' => 'Valid',
                    'token' => $token,
                    'javascriptSnippet' => $javascriptSnippet,
                ]);
            }

        } else {
            return $this->redirectToRoute('reset_password', [
                'isValid' => true,
                'status' => 'Failed',
                'token' => $token,
                'javascriptSnippet' => "<script>showToast('Invalid Credentials, failed reset password','bg-red-500')</script>",
            ]);
        }

        return $this->redirectToRoute('reset_password', [
            'isValid' => true,
            'status' => 'Failed',
            'token' => $token,
            'javascriptSnippet' => ''
        ]);
    }

    private function setSessionVariables(Request $request, array $data): void
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

    private function renderErrorPageWithToast(): Response
    {
        $toastScript = <<<SCRIPT
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/toastify-js'></script>

        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });

            Toast.fire({
                type: 'error',
                title: 'Incorrect username or password'
            });
        </script>
        SCRIPT;

        return $this->render('auth-login-boxed.html.twig', [
            'toast_script' => $toastScript,
        ]);
    }
}
