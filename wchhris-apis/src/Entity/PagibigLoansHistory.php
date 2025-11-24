<?php

namespace App\Entity;

use App\Repository\PagibigLoansHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PagibigLoansHistoryRepository::class)]
class PagibigLoansHistory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $remark = null;

    #[ORM\Column]
    private ?float $previous_amount = null;

    #[ORM\Column]
    private ?float $current_amount = null;

    #[ORM\Column]
    private ?float $deduction = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne(inversedBy: 'pagibigLoansHistories')]
    private ?EmployeePayrollProfile $payroll_profile = null;

    #[ORM\ManyToOne(inversedBy: 'pagibigLoansHistories')]
    private ?PagibigLoans $pagibig_loans_history = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(string $remark): static
    {
        $this->remark = $remark;

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

    public function getCurrentAmount(): ?float
    {
        return $this->current_amount;
    }

    public function setCurrentAmount(float $current_amount): static
    {
        $this->current_amount = $current_amount;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

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

    public function getPagibigLoansHistory(): ?PagibigLoans
    {
        return $this->pagibig_loans_history;
    }

    public function setPagibigLoansHistory(?PagibigLoans $pagibig_loans_history): static
    {
        $this->pagibig_loans_history = $pagibig_loans_history;

        return $this;
    }
}
