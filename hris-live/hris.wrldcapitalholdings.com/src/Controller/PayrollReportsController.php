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
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PayrollReportsController extends AbstractController
{
    public function __construct(
        private APIRequest $apiService,
        private APIFunctions $apiFunctions,
        private LoggerInterface $logger,
        private PSGCService $getProvinces,
        private PSGCService $getTownCity,
        private ExportXLSService $exportXLSService
    ) {}

    // ============== UTILITIES ==============

    private function parseRange(string $range, string $fallbackFrom = '2024-10-01', string $fallbackTo = '2024-10-31'): array
    {
        $range = trim(preg_replace('/\s+/', ' ', $range));
        if (!str_contains($range, ' to ')) {
            return [$fallbackFrom, $fallbackTo];
        }
        [$from, $to] = array_map('trim', explode(' to ', $range, 2));
        if (!$from || !$to) {
            return [$fallbackFrom, $fallbackTo];
        }
        return [$from, $to];
    }

    private function normalizeCompanyId(?string $companyId): ?string
    {
        $companyId = $companyId !== null ? trim((string)$companyId) : null;
        return $companyId === '' ? null : $companyId;
    }

    private function extractCompanyIdFromRow(array $row): ?int
    {
        foreach (['company_id', 'affiliated_company_id'] as $k) {
            if (isset($row[$k]) && $row[$k] !== '' && $row[$k] !== null) {
                return (int)$row[$k];
            }
        }
        foreach (['employee', 'employee_record', 'employeeRecord', 'profile', 'worker'] as $nest) {
            if (isset($row[$nest]) && is_array($row[$nest])) {
                $obj = $row[$nest];
                foreach (['company_id', 'affiliated_company_id'] as $k) {
                    if (isset($obj[$k]) && $obj[$k] !== '' && $obj[$k] !== null) {
                        return (int)$obj[$k];
                    }
                }
                if (isset($obj['company']) && is_array($obj['company'])) {
                    foreach (['id','company_id','affiliated_company_id'] as $k) {
                        if (isset($obj['company'][$k]) && $obj['company'][$k] !== '') {
                            return (int)$obj['company'][$k];
                        }
                    }
                }
            }
        }
        return null;
    }

    private function filterByCompany(array $rows, ?string $companyId): array
    {
        $companyId = $this->normalizeCompanyId($companyId);
        if ($companyId === null) return $rows;
        $cid = (int)$companyId;

        $out = [];
        foreach ($rows as $row) {
            if (!is_array($row)) continue;
            $rowCid = $this->extractCompanyIdFromRow($row);
            if ($rowCid !== null && $rowCid === $cid) $out[] = $row;
        }
        return $out;
    }

    private function getDatesAndCompany(Request $request): array
    {
        $date_start = $request->request->get('payroll_date_range', '2024-10-01 to 2024-10-31');
        [$dateFrom, $dateTo] = $this->parseRange($date_start);
        $companyId = $this->normalizeCompanyId($request->request->get('company_id'));
        return [$dateFrom, $dateTo, $companyId];
    }

    private function handleApiError($response): ?Response
    {
        if (is_array($response) && ($response['error'] ?? false) === true) {
            $raw = $response['message'] ?? '';
            $msg = '';

            $decoded = json_decode($raw, true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                $msg = $decoded['message'] ?? $decoded['error'] ?? $raw;
            } else {
                $decoded2 = json_decode(trim((string)$raw, "\"'"), true);
                if (json_last_error() === JSON_ERROR_NONE && is_array($decoded2)) {
                    $msg = $decoded2['message'] ?? $decoded2['error'] ?? $raw;
                }
            }
            return $this->json(['error' => $msg ?: ('HTTP ' . ($response['status'] ?? 400))], Response::HTTP_BAD_REQUEST);
        }
        return null;
    }

    private function logOutgoing(string $endpoint, array $query, ?string $companyId, string $dateFrom, string $dateTo, string $variant): void
    {
        $this->logger->info('REPORTS: outgoing GET', [
            'endpoint'   => $endpoint,
            'variant'    => $variant,
            'query'      => $query,
            'company_id' => $companyId,
            'range'      => $dateFrom . ' to ' . $dateTo,
        ]);
    }
    private function logResponseOK($response, string $endpoint, string $variant): void
    {
        try {
            $this->logger->info('REPORTS: response OK', [
                'endpoint'     => $endpoint,
                'variant'      => $variant,
                'status'       => $response->getStatusCode(),
                'body_preview' => mb_substr($response->getContent(false), 0, 300),
            ]);
        } catch (\Throwable $e) {}
    }
    private function logResponseErr(array $err, string $endpoint, string $variant): void
    {
        $this->logger->error('REPORTS: response ERROR', [
            'endpoint' => $endpoint,
            'variant'  => $variant,
            'status'   => $err['status'] ?? null,
            'message'  => $err['message'] ?? null,
        ]);
    }

    /**
     * 🔁 Master helper: Subukan ang iba’t ibang param name permutations hanggang mag-200 OK.
     * - $companyParamNames: alin sa mga pangalan ang pwedeng gamitin kung kailangan ng company
     * - $includeCompany: true = laging isasama; false = uunahin na HINDI isama, kapag 4xx saka lang isasama.
     */
    private function requestWithPermutations(
        string $endpoint,
        string $token,
        string $dateFrom,
        string $dateTo,
        ?string $companyId,
        array $companyParamNames = ['company_id','affiliated_company_id','companyId'],
        bool $includeCompany = false
    ) {
        // Permutations ng date param names
        $dateKeyVariants = [
            ['dateFrom','dateTo'],
            ['date_from','date_to'],
            ['start','end'],
            ['from','to'],
        ];

        // Order ng pagsubok: (1) walang company (kung $includeCompany === false), (2) may company
        $rounds = [];
        if (!$includeCompany) $rounds[] = false;
        $rounds[] = true;

        foreach ($dateKeyVariants as [$kFrom, $kTo]) {
            foreach ($rounds as $withCompany) {
                $payload = [
                    $kFrom => $dateFrom,
                    $kTo   => $dateTo,
                ];

                $variant = "{$kFrom}/{$kTo}";
                if ($withCompany) {
                    $variant .= '|withCompany';

                    // idagdag lang kung may laman
                    if ($companyId !== null && $companyId !== '') {
                        foreach ($companyParamNames as $ckey) {
                            $payloadWithCompany = $payload;
                            $payloadWithCompany[$ckey] = (int)$companyId;

                            $this->logOutgoing($endpoint, $payloadWithCompany, $companyId, $dateFrom, $dateTo, $variant . "($ckey)");
                            $resp = $this->apiService->apiRequest('GET', $endpoint, $payloadWithCompany, $token);

                            if (is_array($resp) && isset($resp['error'])) {
                                // keep searching variants for 4xx/5xx
                                $this->logResponseErr($resp, $endpoint, $variant . "($ckey)");
                                continue;
                            }
                            // success
                            $this->logResponseOK($resp, $endpoint, $variant . "($ckey)");
                            return $resp;
                        }
                        // kung walang tumama sa lahat ng company keys, tuloy sa next variant
                        continue;
                    } else {
                        // wala talagang company id — skip
                        $this->logOutgoing($endpoint, $payload, $companyId, $dateFrom, $dateTo, $variant . "(no-company-available)");
                        $resp = $this->apiService->apiRequest('GET', $endpoint, $payload, $token);
                        if (is_array($resp) && isset($resp['error'])) {
                            $this->logResponseErr($resp, $endpoint, $variant . "(no-company-available)");
                            continue;
                        }
                        $this->logResponseOK($resp, $endpoint, $variant . "(no-company-available)");
                        return $resp;
                    }
                } else {
                    // no company param
                    $this->logOutgoing($endpoint, $payload, $companyId, $dateFrom, $dateTo, $variant);
                    $resp = $this->apiService->apiRequest('GET', $endpoint, $payload, $token);

                    if (is_array($resp) && isset($resp['error'])) {
                        $this->logResponseErr($resp, $endpoint, $variant);
                        continue;
                    }
                    $this->logResponseOK($resp, $endpoint, $variant);
                    return $resp;
                }
            }
        }

        // Kapag walang tumama, ibalik ang huling error (para makita mo raw backend message)
        return ['error' => true, 'status' => 400, 'message' => json_encode(['error' => 'Invalid input data. (All variants tried)'])];
    }

    // ============== PAGE ==============

    #[Route('/payroll-reports', name: 'app_payroll_reports')]
    public function viewPhilHealthConfig(Request $request)
    {
        $companyList = $this->apiFunctions->getCompanyList($request)->toArray();
        return $this->render('payroll_reports/payroll_reports_generation.html.twig', [
            'companyList' => $companyList,
        ]);
    }

    // ============== ACTIONS ==============

    #[Route('/generate-mandatories-report', name: 'generate_mandatories_report')]
    public function exportManpowerReport(Request $request): Response
    {
        $session = $request->getSession(); $token = $session->get('token');
        [$dateFrom, $dateTo, $companyId] = $this->getDatesAndCompany($request);

        $endpoint = 'api/timesheet';
        // karamihan ng timesheet ay ayaw ng company param; includeCompany = false
        $response = $this->requestWithPermutations($endpoint, $token, $dateFrom, $dateTo, $companyId, includeCompany:false);

        if ($err = $this->handleApiError($response)) return $err;
        $rows = $response->toArray();
        $rows = $this->filterByCompany($rows, $companyId);
        return $this->exportXLSService->generateTimeSheetReport($dateFrom, $dateTo, $rows);
    }

    #[Route('/generate-payrollsheet-report', name: 'generate_payroll_sheet')]
    public function exportPayrolls(Request $request): Response
    {
        $session = $request->getSession(); $token = $session->get('token');
        [$dateFrom, $dateTo, $companyId] = $this->getDatesAndCompany($request);

        $endpoint = 'api/payrollsheet';
        $response = $this->requestWithPermutations($endpoint, $token, $dateFrom, $dateTo, $companyId, includeCompany:false);

        if ($err = $this->handleApiError($response)) return $err;
        $data = $response->toArray();
        $data = $this->filterByCompany($data, $companyId);
        return $this->exportXLSService->generatePayrollSheetReport($dateFrom, $dateTo, $data);
    }

    #[Route('/generate-payrollregister-report', name: 'generate_payroll_register')]
    public function exportPayrollsRegister(Request $request): Response
    {
        $session = $request->getSession(); $token = $session->get('token');
        [$dateFrom, $dateTo, $companyId] = $this->getDatesAndCompany($request);

        $endpoint = 'api/payrollsheet';
        $response = $this->requestWithPermutations($endpoint, $token, $dateFrom, $dateTo, $companyId, includeCompany:false);

        if ($err = $this->handleApiError($response)) return $err;
        $data = $response->toArray();
        $data = $this->filterByCompany($data, $companyId);
        return $this->exportXLSService->generatePayrollRegisterReport($dateFrom, $dateTo, $data);
    }

    #[Route('/generate-taxshield-report', name: 'generate_taxshield_report')]
    public function exportTaxShield(Request $request): Response
    {
        $session = $request->getSession(); $token = $session->get('token');
        [$dateFrom, $dateTo, $companyId] = $this->getDatesAndCompany($request);

        $endpoint = 'api/payrollsheet-with-taxshield';
        $response = $this->requestWithPermutations($endpoint, $token, $dateFrom, $dateTo, $companyId, includeCompany:false);

        if ($err = $this->handleApiError($response)) return $err;
        $data = $response->toArray();
        $data = $this->filterByCompany($data, $companyId);
        return $this->exportXLSService->generateTaxShieldReport($dateFrom, $dateTo, $data);
    }

    #[Route('/generate-cashadvance-report', name: 'generate_cashadvance_report')]
    public function exportCashAdvance(Request $request): Response
    {
        $session = $request->getSession(); $token = $session->get('token');
        [$dateFrom, $dateTo, $companyId] = $this->getDatesAndCompany($request);

        $endpoint = 'api/payrollsheet-with-cash-advances';
        $response = $this->requestWithPermutations($endpoint, $token, $dateFrom, $dateTo, $companyId, includeCompany:false);

        if ($err = $this->handleApiError($response)) return $err;
        $data = $response->toArray();
        $data = $this->filterByCompany($data, $companyId);
        return $this->exportXLSService->generateCashAdvanceReport($dateFrom, $dateTo, $data);
    }

    #[Route('/generate-salaryadjustment-report', name: 'generate_salaryadjustment_report')]
    public function exportSalaryAdjustment(Request $request): Response
    {
        $session = $request->getSession(); $token = $session->get('token');
        [$dateFrom, $dateTo, $companyId] = $this->getDatesAndCompany($request);

        $endpoint = 'api/payrollsheet-with-salary-adjustment';
        $response = $this->requestWithPermutations($endpoint, $token, $dateFrom, $dateTo, $companyId, includeCompany:false);

        if ($err = $this->handleApiError($response)) return $err;
        $data = $response->toArray();
        $data = $this->filterByCompany($data, $companyId);
        return $this->exportXLSService->generateSalaryAdjustmentsReport($dateFrom, $dateTo, $data);
    }

    #[Route('/generate-govdues-report', name: 'generate_govdues')]
    public function exportGovDues(Request $request): Response
    {
        $session = $request->getSession(); $token = $session->get('token');
        [$dateFrom, $dateTo, $companyId] = $this->getDatesAndCompany($request);

        $endpoint = 'api/gov-total-dues';
        // karamihan ng “total dues” ay ayaw ng company param — kaya includeCompany=false
        $response = $this->requestWithPermutations($endpoint, $token, $dateFrom, $dateTo, $companyId, includeCompany:false);

        if ($err = $this->handleApiError($response)) return $err;
        $data = $response->toArray();
        // optional client-side filter kung may ibinalik na lahat
        $data = $this->filterByCompany($data, $companyId);
        return $this->exportXLSService->generateTotalContributionReport($dateFrom, $dateTo, $data);
    }

    #[Route('/generate-company-govdues-report', name: 'generate_company_govdues')]
    public function exportCompanyGovDues(Request $request): Response
    {
        $session = $request->getSession(); $token = $session->get('token');
        [$dateFrom, $dateTo, $companyId] = $this->getDatesAndCompany($request);

        if ($companyId === null) {
            return $this->json(['error' => 'Please select a Company/Agency.'], Response::HTTP_BAD_REQUEST);
        }

        $endpoint = 'api/company-gov-total-dues';
        // dito required ang company — includeCompany=true para agad isama
        $response = $this->requestWithPermutations($endpoint, $token, $dateFrom, $dateTo, $companyId, includeCompany:true);

        if ($err = $this->handleApiError($response)) return $err;
        $data = $response->toArray();
        // redundant but safe
        $data = $this->filterByCompany($data, $companyId);
        return $this->exportXLSService->generateContributionReport($dateFrom, $dateTo, $data);
    }

    #[Route('/generate-payrollsummary-report', name: 'generate_payrollsummary')]
    public function exportPayrollSummary(Request $request): Response
    {
        $session = $request->getSession(); $token = $session->get('token');
        [$dateFrom, $dateTo, $companyId] = $this->getDatesAndCompany($request);

        $endpoint = 'api/get-payroll-summary';
        $response = $this->requestWithPermutations($endpoint, $token, $dateFrom, $dateTo, $companyId, includeCompany:false);

        if ($err = $this->handleApiError($response)) return $err;
        $data = $response->toArray();
        $data = $this->filterByCompany($data, $companyId);
        return $this->exportXLSService->generatePayrollSummaryReport($dateFrom, $dateTo, $data);
    }
}
