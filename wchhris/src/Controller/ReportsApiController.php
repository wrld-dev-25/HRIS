<?php

namespace App\Controller;

use App\Service\ReportSqlService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
class ReportsApiController
{
    public function __construct(private ReportSqlService $reports) {}

    private function readParams(Request $request): array
    {
        $query = $request->query->all();
        $raw   = $request->getContent();
        $json  = [];
        if ($raw) {
            $decoded = json_decode($raw, true);
            if (is_array($decoded)) $json = $decoded;
        }
        $data = array_merge($query, $json);

        $dateFrom   = isset($data['dateFrom']) ? trim((string)$data['dateFrom']) : null;
        $dateTo     = isset($data['dateTo'])   ? trim((string)$data['dateTo'])   : null;
        $company_id = isset($data['company_id']) ? trim((string)$data['company_id']) : null;
        $company_id = ($company_id === '') ? null : $company_id;

        if (!$dateFrom || !$dateTo) {
            return ['error' => 'dateFrom and dateTo are required'];
        }

        return compact('dateFrom', 'dateTo', 'company_id');
    }

    #[Route('/timesheet', methods: ['GET','POST'])]
    public function timesheet(Request $request): JsonResponse
    {
        $p = $this->readParams($request);
        if (isset($p['error'])) return new JsonResponse(['message' => $p['error']], 400);

        return new JsonResponse($this->reports->getTimesheet($p['dateFrom'], $p['dateTo'], $p['company_id']));
    }

    #[Route('/payrollsheet', methods: ['GET','POST'])]
    public function payrollsheet(Request $request): JsonResponse
    {
        $p = $this->readParams($request);
        if (isset($p['error'])) return new JsonResponse(['message' => $p['error']], 400);

        return new JsonResponse($this->reports->getPayrollSheet($p['dateFrom'], $p['dateTo'], $p['company_id']));
    }

    #[Route('/payrollsheet-with-taxshield', methods: ['GET','POST'])]
    public function payrollWithTaxshield(Request $request): JsonResponse
    {
        $p = $this->readParams($request);
        if (isset($p['error'])) return new JsonResponse(['message' => $p['error']], 400);

        return new JsonResponse($this->reports->getPayrollWithTaxShield($p['dateFrom'], $p['dateTo'], $p['company_id']));
    }

    #[Route('/payrollsheet-with-cash-advances', methods: ['GET','POST'])]
    public function payrollWithCashAdv(Request $request): JsonResponse
    {
        $p = $this->readParams($request);
        if (isset($p['error'])) return new JsonResponse(['message' => $p['error']], 400);

        return new JsonResponse($this->reports->getPayrollWithCashAdvances($p['dateFrom'], $p['dateTo'], $p['company_id']));
    }

    #[Route('/payrollsheet-with-salary-adjustment', methods: ['GET','POST'])]
    public function payrollWithSalaryAdj(Request $request): JsonResponse
    {
        $p = $this->readParams($request);
        if (isset($p['error'])) return new JsonResponse(['message' => $p['error']], 400);

        return new JsonResponse($this->reports->getPayrollWithSalaryAdjustments($p['dateFrom'], $p['dateTo'], $p['company_id']));
    }

    #[Route('/get-payroll-summary', methods: ['GET','POST'])]
    public function payrollSummary(Request $request): JsonResponse
    {
        $p = $this->readParams($request);
        if (isset($p['error'])) return new JsonResponse(['message' => $p['error']], 400);

        return new JsonResponse($this->reports->getPayrollSummary($p['dateFrom'], $p['dateTo'], $p['company_id']));
    }

    #[Route('/gov-total-dues', methods: ['GET','POST'])]
    public function govDuesTotal(Request $request): JsonResponse
    {
        $p = $this->readParams($request);
        if (isset($p['error'])) return new JsonResponse(['message' => $p['error']], 400);

        return new JsonResponse($this->reports->getGovDuesTotal($p['dateFrom'], $p['dateTo'], $p['company_id']));
    }

    #[Route('/company-gov-total-dues', methods: ['GET','POST'])]
    public function govDuesPerCompany(Request $request): JsonResponse
    {
        $p = $this->readParams($request);
        if (isset($p['error'])) return new JsonResponse(['message' => $p['error']], 400);
        if (!$p['company_id']) return new JsonResponse(['message' => 'company_id is required'], 400);

        return new JsonResponse($this->reports->getGovDuesPerCompany($p['dateFrom'], $p['dateTo'], $p['company_id']));
    }
}
