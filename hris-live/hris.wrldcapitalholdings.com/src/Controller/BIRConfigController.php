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
use Symfony\Component\HttpClient\Exception\ClientException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BIRConfigController extends AbstractController
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
    
    #[Route('/bir/config', name: 'app_bir_config')]
    public function viewBIRConfig(Request $request)
    {
        $birConfig = $this->apiFunctions->getBIRConfig($request)->toArray();
        return $this->render('bir_config/bir_config.html.twig', [
            'bir_config' => $birConfig ?? [],
        ]);
    }

    #[Route('/create-bir/config', name: 'app_bir_create_config')]
    public function createBIRConfig(Request $request)
    {
        $session = $request->getSession();
        $token = $session->get('token');
        
        if ($request->isMethod('POST')) {
            // Retrieve form data from request
            $formData = [
                'tax_bracket_name' => $request->request->get('tax_bracket_name'), 
                'tax_bracket_range' => $request->request->get('tax_bracket_range_start'),
                'tax_bracket_range_end' => $request->request->get('tax_bracket_range_end'),
                'tax_deduction_percent' => $request->request->get('tax_deduction_percent'),
                'tax_deduction_amount' => $request->request->get('tax_deduction_amount'),
            ];

            $response = $this->apiService->apiRequest('POST', 'api/taxconfig/create', json_encode($formData), $token);
            if (is_array($response)) {
                // If there's an error, handle the response
                if (isset($response['error']) && $response['error'] === true) {
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

                    return $this->redirectToRoute('app_bir_config', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }
            
            return $this->redirectToRoute('app_bir_config', [
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
        return $this->redirectToRoute('app_bir_config', [
            'status' => 400,
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/update-bir/config', name: 'app_bir_update_config')]
    public function updateBIRConfig(Request $request)
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $id = $request->request->get('bir_config_id');

        if ($request->isMethod('POST')) {
            $formData = [
                'tax_bracket_name' => $request->request->get('tax_bracket_name'),
                'tax_bracket_range' => $request->request->get('tax_bracket_range_start'),
                'tax_bracket_range_end' => $request->request->get('tax_bracket_range_end'),
                'tax_deduction_percent' => $request->request->get('tax_deduction_percent'),
                'tax_deduction_amount' => $request->request->get('tax_deduction_amount'),
            ];
            $response = $this->apiService->apiRequest('PUT', "api/taxconfig/update/{$id}", json_encode($formData), $token);
            if (is_array($response)) {
                if (isset($response['error']) && $response['error'] === true) {
                    $errorMessage = 'Error: Status code ' . $response['status'];
                    $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

                    return $this->redirectToRoute('app_bir_config', [
                        'status' => $response['status'],
                        'error' => $errorMessage,
                        'message' => $responseMessage,
                    ]);
                }
            }

            return $this->redirectToRoute('app_bir_config', [
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }
        return $this->redirectToRoute('app_bir_config', [
            'status' => 400,
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/delete-bir/config', name: 'app_bir_delete_config')]
    public function deleteBIRConfig(Request $request)
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $id = $request->request->get('bir_config_id');

        $response = $this->apiService->apiRequest('DELETE', "api/taxconfig/delete/{$id}", null, $token);
        if (is_array($response)) {
            if (isset($response['error']) && $response['error'] === true) {
                $errorMessage = 'Error: Status code ' . $response['status'];
                $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

                return $this->redirectToRoute('app_bir_config', [
                    'status' => $response['status'],
                    'error' => $errorMessage,
                    'message' => $responseMessage,
                ]);
            }
        }

        return $this->redirectToRoute('app_bir_config', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    // New function for handling the CSV import for TaxConfig
    #[Route('/import-tax/config', name: 'app_tax_import_config', methods: ['POST'])]
    public function importTaxConfigFile(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $file = $request->files->get('csv_file');

        if (!$file) {
            return $this->redirectToRoute('app_bir_config', [
                'status' => '404',
                'error' => '',
                'message' => 'No file uploaded',
            ]);
        }

        if ($file->getClientOriginalExtension() !== 'csv') {
            return $this->redirectToRoute('app_bir_config', [
                'status' => '404',
                'error' => '',
                'message' => 'File extension is invalid',
            ]);
        }

        // Move the uploaded file to a temporary location
        $tempPath = tempnam(sys_get_temp_dir(), 'csv_');
        $file->move(dirname($tempPath), basename($tempPath));

        try {
            // Open and read the CSV file
            $csvFile = fopen($tempPath, 'r');
            if (!$csvFile) {
                throw new \Exception('Failed to open the CSV file.');
            }

            // Skip the header row
            fgetcsv($csvFile);

            $data = [];
            while (($row = fgetcsv($csvFile)) !== false) {
                // Ensure the correct number of columns
                if (count($row) < 5) { // Assuming TaxConfig has 5 columns based on the entity properties
                    throw new \Exception('Invalid CSV format.');
                }
                $data[] = $row; // Add the row to the data array
            }
            fclose($csvFile);
            //dd(json_encode($data));
            // Send the parsed data to the backend API
            $response = $this->apiService->apiRequest('POST', 'api/taxconfig/import', json_encode($data), $token);

            // Handle the response as before
            if (is_array($response) && isset($response['error']) && $response['error'] === true) {
                $errorMessage = 'Error: Status code ' . $response['status'];
                $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

                return $this->redirectToRoute('app_bir_config', [
                    'status' => $response['status'],
                    'error' => $errorMessage,
                    'message' => $responseMessage,
                ]);
            }

            return $this->redirectToRoute('app_bir_config', [
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        } catch (\Exception $e) {
            return $this->redirectToRoute('app_bir_config', [
                'status' => '500',
                'error' => 'Internal Server Error',
                'message' => 'An error occurred: ' . $e->getMessage(),
            ]);
        } finally {
            // Clean up the temporary file
            if (file_exists($tempPath)) {
                unlink($tempPath);
            }
        }
    }

}
