<?php

namespace App\Controller;

use App\Service\APIRequest;
use App\Service\APIFunctions;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SSSConfigController extends AbstractController
{
    private $apiService;
    private $apiFunctions;
    private $logger;

    public function __construct(APIRequest $apiService, APIFunctions $apiFunctions, LoggerInterface $logger)
    {
        $this->apiService = $apiService;
        $this->apiFunctions = $apiFunctions;
        $this->logger = $logger;
    }

    #[Route('/sss/config', name: 'app_sss_config')]
    public function viewSSSConfig(Request $request): Response
    {
        $sssConfig = $this->apiFunctions->getSSSConfig($request)->toArray();
        return $this->render('sss_config/sss_config.html.twig', [
            'sss_config' => $sssConfig ?? [],
        ]);
    }

    #[Route('/create-sss/config', name: 'app_sss_create_config')]
    public function createSSSConfig(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');

        if ($request->isMethod('POST')) {
            $formData = [
                'range_start'                   => $request->request->get('range_start'),
                'range_end'                     => $request->request->get('range_end'),
                'msc_ec'                        => $request->request->get('msc_ec'),
                'msc_wisp'                      => $request->request->get('msc_wisp'),
                'msc_total'                     => $request->request->get('msc_total'),
                'contribution_regular_er'       => $request->request->get('contribution_regular_er'),
                'contribution_regular_ee'       => $request->request->get('contribution_regular_ee'),
                'contribution_ec_er'            => $request->request->get('contribution_ec_er'),
                'contribution_ec_ee'            => $request->request->get('contribution_ec_ee'),
                'contribution_wisp_er'          => $request->request->get('contribution_wisp_er'),
                'contribution_wisp_ee'          => $request->request->get('contribution_wisp_ee'),
                'contribution_total_er'         => $request->request->get('contribution_total_er'),
                'contribution_total_ee'         => $request->request->get('contribution_total_ee'),
            ];

            $response = $this->apiService->apiRequest('POST', 'api/sssconfig/create', json_encode($formData), $token);

            if (is_array($response) && isset($response['error']) && $response['error'] === true) {
                $errorMessage = 'Error: Status code ' . $response['status'];
                $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

                return $this->redirectToRoute('app_sss_config', [
                    'status' => $response['status'],
                    'error' => $errorMessage,
                    'message' => $responseMessage,
                ]);
            }

            return $this->redirectToRoute('app_sss_config', [
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }

        return $this->redirectToRoute('app_sss_config', [
            'status' => 400,
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/update-sss/config', name: 'app_sss_update_config')]
    public function updateSSSConfig(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $id = $request->request->get('sss_config_id');

        if ($request->isMethod('POST')) {
            $formData = [
                'range_start'                   => $request->request->get('range_start'),
                'range_end'                     => $request->request->get('range_end'),
                'msc_ec'                        => $request->request->get('msc_ec'),
                'msc_wisp'                      => $request->request->get('msc_wisp'),
                'msc_total'                     => $request->request->get('msc_total'),
                'contribution_regular_er'       => $request->request->get('contribution_regular_er'),
                'contribution_regular_ee'       => $request->request->get('contribution_regular_ee'),
                'contribution_ec_er'            => $request->request->get('contribution_ec_er'),
                'contribution_ec_ee'            => $request->request->get('contribution_ec_ee'),
                'contribution_wisp_er'          => $request->request->get('contribution_wisp_er'),
                'contribution_wisp_ee'          => $request->request->get('contribution_wisp_ee'),
                'contribution_total_er'         => $request->request->get('contribution_total_er'),
                'contribution_total_ee'         => $request->request->get('contribution_total_ee'),
            ];

            $response = $this->apiService->apiRequest('PUT', "api/sssconfig/update/{$id}", json_encode($formData), $token);

            if (is_array($response) && isset($response['error']) && $response['error'] === true) {
                $errorMessage = 'Error: Status code ' . $response['status'];
                $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

                return $this->redirectToRoute('app_sss_config', [
                    'status' => $response['status'],
                    'error' => $errorMessage,
                    'message' => $responseMessage,
                ]);
            }

            return $this->redirectToRoute('app_sss_config', [
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        }

        return $this->redirectToRoute('app_sss_config', [
            'status' => 400,
            'error' => '',
            'message' => '',
        ]);
    }

    #[Route('/delete-sss/config', name: 'app_sss_delete_config')]
    public function deleteSSSConfig(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $id = $request->request->get('sss_config_id');

        $response = $this->apiService->apiRequest('DELETE', "api/sssconfig/delete/".$id, null, $token);

        if (is_array($response) && isset($response['error']) && $response['error'] === true) {
            $errorMessage = 'Error: Status code ' . $response['status'];
            $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;

            return $this->redirectToRoute('app_sss_config', [
                'status' => $response['status'],
                'error' => $errorMessage,
                'message' => $responseMessage,
            ]);
        }

        return $this->redirectToRoute('app_sss_config', [
            'status' => $response->getStatusCode(),
            'error' => '',
            'message' => '',
        ]);
    }

    // New function for handling the CSV import
    #[Route('/import-sss/config', name: 'app_sss_import_config', methods: ['POST'])]
    public function importSSSConfigFile(Request $request): Response
    {
        $session = $request->getSession();
        $token = $session->get('token');
        $file = $request->files->get('csv_file');
    
        if (!$file) {
            return $this->redirectToRoute('app_sss_config', [
                'status' => '404',
                'error' => '',
                'message' => 'No file uploaded',
            ]);
        }
    
        if ($file->getClientOriginalExtension() !== 'csv') {
            return $this->redirectToRoute('app_sss_config', [
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
                if (count($row) < 12) {
                    throw new \Exception('Invalid CSV format.');
                }
                $data[] = $row; // Add the row to the data array
            }
            fclose($csvFile);
            // Send the parsed data to the backend API
            $response = $this->apiService->apiRequest('POST', 'api/sssconfig/import', json_encode([
                'csv_data' => $data, // Send the parsed data as an array
            ]), $token);
    
            // Handle the response as before
            if (is_array($response) && isset($response['error']) && $response['error'] === true) {
                $errorMessage = 'Error: Status code ' . $response['status'];
                $responseMessage = json_decode($response['message'], true)['message'] ?? $errorMessage;
    
                return $this->redirectToRoute('app_sss_config', [
                    'status' => $response['status'],
                    'error' => $errorMessage,
                    'message' => $responseMessage,
                ]);
            }
    
            return $this->redirectToRoute('app_sss_config', [
                'status' => $response->getStatusCode(),
                'error' => '',
                'message' => '',
            ]);
        } catch (\Exception $e) {
            return $this->redirectToRoute('app_sss_config', [
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
