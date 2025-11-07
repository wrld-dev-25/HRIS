<?php

namespace App\Entity;

use App\Repository\CashAdvanceHistoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CashAdvanceHistoryRepository::class)]
class CashAdvanceHistory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $remarks = null;

    #[ORM\Column]
    private ?float $previous_amount = null;

    #[ORM\Column]
    private ?float $deduction = null;

    #[ORM\Column]
    private ?float $current_amount = null;

    #[ORM\ManyToOne(inversedBy: 'cashAdvanceHistories')]
    private ?EmployeePayrollProfile $payroll_profile = null;

    #[ORM\ManyToOne(inversedBy: 'cashAdvanceHistories')]
    private ?CashAdvance $cash_advance = null;

    #[ORM\ManyToOne(inversedBy: 'cashAdvanceHistories')]
    private ?EmployeePayroll $payroll = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    public function setRemarks(string $remarks): static
    {
        $this->remarks = $remarks;

        return $this;
    }

    public function getPreviousAmount(): ?float
    {
        return $this->previous_amount;
    }

    public function setPreviousAmount(float $previous_amount): static
    {
        $this->previous_amount = $previous_amount;

        return $this;
    }

    public function getDeduction(): ?float
    {
        return $this->deduction;
    }

    public function setDeduction(float $deduction): static
    {
        $this->deduction = $deduction;

        return $this;
    }

    public function getCurrentAmount(): ?float
    {
        return $this->current_amount;
    }

    public function setCurrentAmount(float $current_amount): static
    {
        $this->current_amount = $current_amount;

        return $this;
    }

    public function getPayrollProfile(): ?EmployeePayrollProfile
    {
        return $this->payroll_profile;
    }

    public function setPayrollProfile(?EmployeePayrollProfile $payroll_profile): static
    {
        $this->payroll_profile = $payroll_profile;

        return $this;
    }

    public function getCashAdvance(): ?CashAdvance
    {
        return $this->cash_advance;
    }

    public function setCashAdvance(?CashAdvance $cash_advance): static
    {
        $this->cash_advance = $cash_advance;

        return $this;
    }

    public function getPayroll(): ?EmployeePayroll
    {
        return $this->payroll;
    }

    public function setPayroll(?EmployeePayroll $payroll): static
    {
        $this->payroll = $payroll;

        return $this;
    }
}
