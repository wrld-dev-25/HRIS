<?php

namespace App\Service;

use PDO;

class ReportSqlService
{
    public function __construct(private PDO $pdo) {}

    private function companyClause(?string $companyId): string
    {
        return ($companyId !== null && $companyId !== '') ? ' AND ac.id = :cid' : '';
    }

    private function bindDateCompany(\PDOStatement $stmt, string $dateFrom, string $dateTo, ?string $companyId): void
    {
        $stmt->bindValue(':from', $dateFrom);
        $stmt->bindValue(':to', $dateTo);
        if ($companyId !== null && $companyId !== '') {
            $stmt->bindValue(':cid', $companyId, PDO::PARAM_INT);
        }
    }

    public function getTimesheet(string $dateFrom, string $dateTo, ?string $companyId): array
    {
        $sql = "
            SELECT t.*, er.id AS employee_record_id, ac.id AS company_id, ac.name AS company_name
            FROM timesheets t
            JOIN employee_records er ON er.id = t.employee_record_id
            LEFT JOIN affiliated_company ac ON ac.id = er.affiliated_company_id
            WHERE t.txn_date BETWEEN :from AND :to
            " . $this->companyClause($companyId) . "
        ";
        $stmt = $this->pdo->prepare($sql);
        $this->bindDateCompany($stmt, $dateFrom, $dateTo, $companyId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPayrollSheet(string $dateFrom, string $dateTo, ?string $companyId): array
    {
        $sql = "
            SELECT p.*, er.id AS employee_record_id, ac.id AS company_id, ac.name AS company_name
            FROM payrollsheet p
            JOIN employee_records er ON er.id = p.employee_record_id
            LEFT JOIN affiliated_company ac ON ac.id = er.affiliated_company_id
            WHERE p.txn_date BETWEEN :from AND :to
            " . $this->companyClause($companyId) . "
        ";
        $stmt = $this->pdo->prepare($sql);
        $this->bindDateCompany($stmt, $dateFrom, $dateTo, $companyId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPayrollWithTaxShield(string $dateFrom, string $dateTo, ?string $companyId): array
    {
        $sql = "
            SELECT p.*, er.id AS employee_record_id, ac.id AS company_id, ac.name AS company_name
            FROM payrollsheet_with_taxshield p
            JOIN employee_records er ON er.id = p.employee_record_id
            LEFT JOIN affiliated_company ac ON ac.id = er.affiliated_company_id
            WHERE p.txn_date BETWEEN :from AND :to
            " . $this->companyClause($companyId) . "
        ";
        $stmt = $this->pdo->prepare($sql);
        $this->bindDateCompany($stmt, $dateFrom, $dateTo, $companyId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPayrollWithCashAdvances(string $dateFrom, string $dateTo, ?string $companyId): array
    {
        $sql = "
            SELECT p.*, er.id AS employee_record_id, ac.id AS company_id, ac.name AS company_name
            FROM payrollsheet_with_cash_advances p
            JOIN employee_records er ON er.id = p.employee_record_id
            LEFT JOIN affiliated_company ac ON ac.id = er.affiliated_company_id
            WHERE p.txn_date BETWEEN :from AND :to
            " . $this->companyClause($companyId) . "
        ";
        $stmt = $this->pdo->prepare($sql);
        $this->bindDateCompany($stmt, $dateFrom, $dateTo, $companyId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPayrollWithSalaryAdjustments(string $dateFrom, string $dateTo, ?string $companyId): array
    {
        $sql = "
            SELECT p.*, er.id AS employee_record_id, ac.id AS company_id, ac.name AS company_name
            FROM payrollsheet_with_salary_adjustment p
            JOIN employee_records er ON er.id = p.employee_record_id
            LEFT JOIN affiliated_company ac ON ac.id = er.affiliated_company_id
            WHERE p.txn_date BETWEEN :from AND :to
            " . $this->companyClause($companyId) . "
        ";
        $stmt = $this->pdo->prepare($sql);
        $this->bindDateCompany($stmt, $dateFrom, $dateTo, $companyId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPayrollSummary(string $dateFrom, string $dateTo, ?string $companyId): array
    {
        $sql = "
            SELECT ac.id AS company_id, ac.name AS company_name,
                   SUM(p.gross_pay) AS total_gross,
                   SUM(p.net_pay)   AS total_net
            FROM payrollsheet p
            JOIN employee_records er ON er.id = p.employee_record_id
            LEFT JOIN affiliated_company ac ON ac.id = er.affiliated_company_id
            WHERE p.txn_date BETWEEN :from AND :to
            " . $this->companyClause($companyId) . "
            GROUP BY ac.id, ac.name
        ";
        $stmt = $this->pdo->prepare($sql);
        $this->bindDateCompany($stmt, $dateFrom, $dateTo, $companyId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getGovDuesTotal(string $dateFrom, string $dateTo, ?string $companyId): array
    {
        $sql = "
            SELECT ac.id AS company_id, ac.name AS company_name,
                   SUM(c.sss_employee + c.sss_employer)               AS total_sss,
                   SUM(c.philhealth_employee + c.philhealth_employer) AS total_philhealth,
                   SUM(c.pagibig_employee + c.pagibig_employer)       AS total_pagibig
            FROM contributions c
            JOIN employee_records er ON er.id = c.employee_record_id
            LEFT JOIN affiliated_company ac ON ac.id = er.affiliated_company_id
            WHERE c.txn_date BETWEEN :from AND :to
            " . $this->companyClause($companyId) . "
            GROUP BY ac.id, ac.name
        ";
        $stmt = $this->pdo->prepare($sql);
        $this->bindDateCompany($stmt, $dateFrom, $dateTo, $companyId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getGovDuesPerCompany(string $dateFrom, string $dateTo, string $companyId): array
    {
        $sql = "
            SELECT ac.id AS company_id, ac.name AS company_name,
                   SUM(c.sss_employee + c.sss_employer)               AS total_sss,
                   SUM(c.philhealth_employee + c.philhealth_employer) AS total_philhealth,
                   SUM(c.pagibig_employee + c.pagibig_employer)       AS total_pagibig
            FROM contributions c
            JOIN employee_records er ON er.id = c.employee_record_id
            LEFT JOIN affiliated_company ac ON ac.id = er.affiliated_company_id
            WHERE c.txn_date BETWEEN :from AND :to
              AND ac.id = :cid
            GROUP BY ac.id, ac.name
        ";
        $stmt = $this->pdo->prepare($sql);
        $this->bindDateCompany($stmt, $dateFrom, $dateTo, $companyId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
