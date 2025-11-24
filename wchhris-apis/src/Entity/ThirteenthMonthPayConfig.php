<?php

namespace App\Entity;

use App\Repository\ThirteenthMonthPayConfigRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ThirteenthMonthPayConfigRepository::class)]
class ThirteenthMonthPayConfig
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $include_salary_adjustment = null;

    #[ORM\Column]
    private ?bool $include_salary = null;

    #[ORM\Column]
    private ?bool $include_tax_shield_pay = null;

    #[ORM\OneToOne(inversedBy: 'thirteenthMonthPayConfig', cascade: ['persist', 'remove'])]
    private ?EmployeePayrollProfile $employee_payroll_profile = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isIncludeSalaryAdjustment(): ?bool
    {
        return $this->include_salary_adjustment;
    }

    public function setIncludeSalaryAdjustment(bool $include_salary_adjustment): static
    {
        $this->include_salary_adjustment = $include_salary_adjustment;

        return $this;
    }

    public function isIncludeSalary(): ?bool
    {
        return $this->include_salary;
    }

    public function setIncludeSalary(bool $include_salary): static
    {
        $this->include_salary = $include_salary;

        return $this;
    }

    public function isIncludeTaxShieldPay(): ?bool
    {
        return $this->include_tax_shield_pay;
    }

    public function setIncludeTaxShieldPay(bool $include_tax_shield_pay): static
    {
        $this->include_tax_shield_pay = $include_tax_shield_pay;

        return $this;
    }

    public function getEmployeePayrollProfile(): ?EmployeePayrollProfile
    {
        return $this->employee_payroll_profile;
    }

    public function setEmployeePayrollProfile(?EmployeePayrollProfile $employee_payroll_profile): static
    {
        $this->employee_payroll_profile = $employee_payroll_profile;

        return $this;
    }
}
