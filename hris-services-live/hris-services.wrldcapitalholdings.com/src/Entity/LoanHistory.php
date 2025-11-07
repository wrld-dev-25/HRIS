<?php

namespace App\Entity;

use App\Repository\LoanHistoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LoanHistoryRepository::class)]
class LoanHistory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $sss_loan = null;

    #[ORM\Column]
    private ?float $sss_loan_deduction = null;

    #[ORM\Column]
    private ?float $hdmf_loan = null;

    #[ORM\Column]
    private ?float $hdmf_loan_deduction = null;

    #[ORM\Column]
    private ?float $cash_advance = null;

    #[ORM\Column]
    private ?float $cash_advance_deduction = null;

    #[ORM\Column]
    private ?float $other_loans = null;

    #[ORM\Column]
    private ?float $other_loans_deduction = null;

    #[ORM\ManyToOne(inversedBy: 'loanHistories')]
    private ?EmployeeRecords $employee_record = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSssLoan(): ?float
    {
        return $this->sss_loan;
    }

    public function setSssLoan(float $sss_loan): static
    {
        $this->sss_loan = $sss_loan;

        return $this;
    }

    public function getSssLoanDeduction(): ?float
    {
        return $this->sss_loan_deduction;
    }

    public function setSssLoanDeduction(float $sss_loan_deduction): static
    {
        $this->sss_loan_deduction = $sss_loan_deduction;

        return $this;
    }

    public function getHdmfLoan(): ?float
    {
        return $this->hdmf_loan;
    }

    public function setHdmfLoan(float $hdmf_loan): static
    {
        $this->hdmf_loan = $hdmf_loan;

        return $this;
    }

    public function getHdmfLoanDeduction(): ?float
    {
        return $this->hdmf_loan_deduction;
    }

    public function setHdmfLoanDeduction(float $hdmf_loan_deduction): static
    {
        $this->hdmf_loan_deduction = $hdmf_loan_deduction;

        return $this;
    }

    public function getCashAdvance(): ?float
    {
        return $this->cash_advance;
    }

    public function setCashAdvance(float $cash_advance): static
    {
        $this->cash_advance = $cash_advance;

        return $this;
    }

    public function getCashAdvanceDeduction(): ?float
    {
        return $this->cash_advance_deduction;
    }

    public function setCashAdvanceDeduction(float $cash_advance_deduction): static
    {
        $this->cash_advance_deduction = $cash_advance_deduction;

        return $this;
    }

    public function getOtherLoans(): ?float
    {
        return $this->other_loans;
    }

    public function setOtherLoans(float $other_loans): static
    {
        $this->other_loans = $other_loans;

        return $this;
    }

    public function getOtherLoansDeduction(): ?float
    {
        return $this->other_loans_deduction;
    }

    public function setOtherLoansDeduction(float $other_loans_deduction): static
    {
        $this->other_loans_deduction = $other_loans_deduction;

        return $this;
    }

    public function getEmployeeRecord(): ?EmployeeRecords
    {
        return $this->employee_record;
    }

    public function setEmployeeRecord(?EmployeeRecords $employee_record): static
    {
        $this->employee_record = $employee_record;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
