<?php

namespace App\Entity;

use App\Repository\SalaryAdjustmentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SalaryAdjustmentRepository::class)]
class SalaryAdjustment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $daily_rate = null;

    #[ORM\Column]
    private ?float $regular_days = null;

    #[ORM\Column]
    private ?float $regular_days_pay = null;

    #[ORM\Column]
    private ?float $regular_ndot_hours = null;

    #[ORM\Column]
    private ?float $ot_meal_subsidy = null;

    #[ORM\Column]
    private ?float $ot_meal_subsidy_amount = null;

    #[ORM\Column]
    private ?float $above_four_hours = null;

    #[ORM\Column]
    private ?float $above_four_hours_amount = null;

    #[ORM\Column]
    private ?float $temp_allowance_amount = null;

    #[ORM\Column]
    private ?float $wellness = null;

    #[ORM\Column]
    private ?float $salary_adjustment = null;

    #[ORM\Column]
    private ?float $total_salary_adjustment = null;

    #[ORM\Column(nullable: true)]
    private ?float $regular_ndot_amount = null;

    #[ORM\OneToOne(inversedBy: 'salaryAdjustment', cascade: ['persist', 'remove'])]
    private ?EmployeePayroll $payroll = null;

    #[ORM\Column]
    private ?float $total_nontax_sal_adjustment = null;

    #[ORM\Column]
    private ?float $total_taxable_sal_adjustment = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDailyRate(): ?float
    {
        return $this->daily_rate;
    }

    public function setDailyRate(float $daily_rate): static
    {
        $this->daily_rate = $daily_rate;

        return $this;
    }

    public function getRegularDays(): ?float
    {
        return $this->regular_days;
    }

    public function setRegularDays(float $regular_days): static
    {
        $this->regular_days = $regular_days;

        return $this;
    }

    public function getRegularDaysPay(): ?float
    {
        return $this->regular_days_pay;
    }

    public function setRegularDaysPay(float $regular_days_pay): static
    {
        $this->regular_days_pay = $regular_days_pay;

        return $this;
    }

    public function getRegularNdotHours(): ?float
    {
        return $this->regular_ndot_hours;
    }

    public function setRegularNdotHours(float $regular_ndot_hours): static
    {
        $this->regular_ndot_hours = $regular_ndot_hours;

        return $this;
    }

    public function getOtMealSubsidy(): ?float
    {
        return $this->ot_meal_subsidy;
    }

    public function setOtMealSubsidy(float $ot_meal_subsidy): static
    {
        $this->ot_meal_subsidy = $ot_meal_subsidy;

        return $this;
    }

    public function getOtMealSubsidyAmount(): ?float
    {
        return $this->ot_meal_subsidy_amount;
    }

    public function setOtMealSubsidyAmount(float $ot_meal_subsidy_amount): static
    {
        $this->ot_meal_subsidy_amount = $ot_meal_subsidy_amount;

        return $this;
    }

    public function getAboveFourHours(): ?float
    {
        return $this->above_four_hours;
    }

    public function setAboveFourHours(float $above_four_hours): static
    {
        $this->above_four_hours = $above_four_hours;

        return $this;
    }

    public function getAboveFourHoursAmount(): ?float
    {
        return $this->above_four_hours_amount;
    }

    public function setAboveFourHoursAmount(float $above_four_hours_amount): static
    {
        $this->above_four_hours_amount = $above_four_hours_amount;

        return $this;
    }

    public function getTempAllowanceAmount(): ?float
    {
        return $this->temp_allowance_amount;
    }

    public function setTempAllowanceAmount(float $temp_allowance_amount): static
    {
        $this->temp_allowance_amount = $temp_allowance_amount;

        return $this;
    }

    public function getWellness(): ?float
    {
        return $this->wellness;
    }

    public function setWellness(float $wellness): static
    {
        $this->wellness = $wellness;

        return $this;
    }

    public function getSalaryAdjustment(): ?float
    {
        return $this->salary_adjustment;
    }

    public function setSalaryAdjustment(float $salary_adjustment): static
    {
        $this->salary_adjustment = $salary_adjustment;

        return $this;
    }

    public function getTotalSalaryAdjustment(): ?float
    {
        return $this->total_salary_adjustment;
    }

    public function setTotalSalaryAdjustment(float $total_salary_adjustment): static
    {
        $this->total_salary_adjustment = $total_salary_adjustment;

        return $this;
    }

    public function getRegularNdotAmount(): ?float
    {
        return $this->regular_ndot_amount;
    }

    public function setRegularNdotAmount(?float $regular_ndot_amount): static
    {
        $this->regular_ndot_amount = $regular_ndot_amount;

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

    public function getTotalNontaxSalAdjustment(): ?float
    {
        return $this->total_nontax_sal_adjustment;
    }

    public function setTotalNontaxSalAdjustment(float $total_nontax_sal_adjustment): static
    {
        $this->total_nontax_sal_adjustment = $total_nontax_sal_adjustment;

        return $this;
    }

    public function getTotalTaxableSalAdjustment(): ?float
    {
        return $this->total_taxable_sal_adjustment;
    }

    public function setTotalTaxableSalAdjustment(float $total_taxable_sal_adjustment): static
    {
        $this->total_taxable_sal_adjustment = $total_taxable_sal_adjustment;

        return $this;
    }
}
