<?php

namespace App\Entity;

use App\Repository\EmployeePayrollProfileRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeePayrollProfileRepository::class)]
class EmployeePayrollProfile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $monthly_salary = null;

    #[ORM\Column]
    private ?float $allowance = null;

    #[ORM\Column]
    private ?float $overtime_rate = null;

    #[ORM\Column]
    private ?float $late_rate = null;

    #[ORM\ManyToOne(inversedBy: 'employeePayrollProfiles')]
    private ?SSSConfig $sss_contribution = null;

    #[ORM\ManyToOne(inversedBy: 'employeePayrollProfiles')]
    private ?TaxConfig $tax_contribution = null;

    #[ORM\ManyToOne(inversedBy: 'employeePayrollProfiles')]
    private ?PagibigConfig $pagibig_contribution = null;

    #[ORM\ManyToOne(inversedBy: 'employeePayrollProfiles')]
    private ?PhilHealthConfig $philhealth_contribution = null;

    /**
     * @var Collection<int, EmployeePayroll>
     */
    #[ORM\OneToMany(targetEntity: EmployeePayroll::class, mappedBy: 'payroll_profile')]
    private Collection $employeePayrolls;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?EmployeeRecords $employee_record = null;

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

    #[ORM\Column]
    private ?float $employer_sss_contribution = null;

    #[ORM\Column]
    private ?float $employer_pagibig_contribution = null;

    #[ORM\Column]
    private ?float $employer_philhealth_contribution = null;

    #[ORM\Column]
    private ?float $accident_insurance = null;

    #[ORM\Column]
    private ?float $thirteenth_month_pay = null;

    #[ORM\Column]
    private ?float $daily_rate = null;

    #[ORM\Column]
    private ?float $hourly_rate = null;

    /**
     * @var Collection<int, CashAdvance>
     */
    #[ORM\OneToMany(targetEntity: CashAdvance::class, mappedBy: 'payroll_profile')]
    private Collection $cashAdvances;

    /**
     * @var Collection<int, PagibigLoans>
     */
    #[ORM\OneToMany(targetEntity: PagibigLoans::class, mappedBy: 'payroll_profile')]
    private Collection $pagibigLoans;

    /**
     * @var Collection<int, SSSLoans>
     */
    #[ORM\OneToMany(targetEntity: SSSLoans::class, mappedBy: 'payroll_profile')]
    private Collection $sss_loans;

    #[ORM\Column]
    private ?float $daily_rate_non_tax = null;

    #[ORM\Column]
    private ?float $allowance_non_tax = null;

    /**
     * @var Collection<int, SSSLoansHistory>
     */
    #[ORM\OneToMany(targetEntity: SSSLoansHistory::class, mappedBy: 'payroll_profile')]
    private Collection $sSSLoansHistories;

    /**
     * @var Collection<int, PagibigLoansHistory>
     */
    #[ORM\OneToMany(targetEntity: PagibigLoansHistory::class, mappedBy: 'payroll_profile')]
    private Collection $pagibigLoansHistories;

    /**
     * @var Collection<int, CashAdvanceHistory>
     */
    #[ORM\OneToMany(targetEntity: CashAdvanceHistory::class, mappedBy: 'payroll_profile')]
    private Collection $cashAdvanceHistories;

    #[ORM\OneToOne(mappedBy: 'employee_payroll_profile', cascade: ['persist', 'remove'])]
    private ?ThirteenthMonthPayConfig $thirteenthMonthPayConfig = null;

    #[ORM\Column]
    private ?bool $include_salary_adjustment_for_thirteenth_month = null;

    #[ORM\Column]
    private ?bool $include_salary_for_thirteenth_month = null;

    #[ORM\Column]
    private ?bool $include_taxshield__for_thirteenth_month = null;

    public function __construct()
    {
        $this->employeePayrolls = new ArrayCollection();
        $this->cashAdvances = new ArrayCollection();
        $this->pagibigLoans = new ArrayCollection();
        $this->sss_loans = new ArrayCollection();
        $this->sSSLoansHistories = new ArrayCollection();
        $this->pagibigLoansHistories = new ArrayCollection();
        $this->cashAdvanceHistories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMonthlySalary(): ?float
    {
        return $this->monthly_salary;
    }

    public function setMonthlySalary(float $monthly_salary): static
    {
        $this->monthly_salary = $monthly_salary;
        return $this;
    }

    public function getAllowance(): ?float
    {
        return $this->allowance;
    }

    public function setAllowance(float $allowance): static
    {
        $this->allowance = $allowance;

        return $this;
    }

    public function getOvertimeRate(): ?float
    {
        return $this->overtime_rate;
    }

    public function setOvertimeRate(float $overtime_rate): static
    {
        $this->overtime_rate = $overtime_rate;

        return $this;
    }

    public function getLateRate(): ?float
    {
        return $this->late_rate;
    }

    public function setLateRate(float $late_rate): static
    {
        $this->late_rate = $late_rate;

        return $this;
    }

    public function getSssContribution(): ?SSSConfig
    {
        return $this->sss_contribution;
    }

    public function setSssContribution(?SSSConfig $sss_contribution): static
    {
        $this->sss_contribution = $sss_contribution;

        return $this;
    }

    public function getTaxContribution(): ?TaxConfig
    {
        return $this->tax_contribution;
    }

    public function setTaxContribution(?TaxConfig $tax_contribution): static
    {
        $this->tax_contribution = $tax_contribution;

        return $this;
    }

    public function getPagibigContribution(): ?PagibigConfig
    {
        return $this->pagibig_contribution;
    }

    public function setPagibigContribution(?PagibigConfig $pagibig_contribution): static
    {
        $this->pagibig_contribution = $pagibig_contribution;

        return $this;
    }

    public function getPhilhealthContribution(): ?PhilHealthConfig
    {
        return $this->philhealth_contribution;
    }

    public function setPhilhealthContribution(?PhilHealthConfig $philhealth_contribution): static
    {
        $this->philhealth_contribution = $philhealth_contribution;

        return $this;
    }

    /**
     * @return Collection<int, EmployeePayroll>
     */
    public function getEmployeePayrolls(): Collection
    {
        return $this->employeePayrolls;
    }

    public function addEmployeePayroll(EmployeePayroll $employeePayroll): static
    {
        if (!$this->employeePayrolls->contains($employeePayroll)) {
            $this->employeePayrolls->add($employeePayroll);
            $employeePayroll->setPayrollProfile($this);
        }

        return $this;
    }

    public function removeEmployeePayroll(EmployeePayroll $employeePayroll): static
    {
        if ($this->employeePayrolls->removeElement($employeePayroll)) {
            // set the owning side to null (unless already changed)
            if ($employeePayroll->getPayrollProfile() === $this) {
                $employeePayroll->setPayrollProfile(null);
            }
        }

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

    public function getEmployerSssContribution(): ?float
    {
        return $this->employer_sss_contribution;
    }

    public function setEmployerSssContribution(float $employer_sss_contribution): static
    {
        $this->employer_sss_contribution = $employer_sss_contribution;

        return $this;
    }

    public function getEmployerPagibigContribution(): ?float
    {
        return $this->employer_pagibig_contribution;
    }

    public function setEmployerPagibigContribution(float $employer_pagibig_contribution): static
    {
        $this->employer_pagibig_contribution = $employer_pagibig_contribution;

        return $this;
    }

    public function getEmployerPhilhealthContribution(): ?float
    {
        return $this->employer_philhealth_contribution;
    }

    public function setEmployerPhilhealthContribution(float $employer_philhealth_contribution): static
    {
        $this->employer_philhealth_contribution = $employer_philhealth_contribution;

        return $this;
    }

    public function getAccidentInsurance(): ?float
    {
        return $this->accident_insurance;
    }

    public function setAccidentInsurance(float $accident_insurance): static
    {
        $this->accident_insurance = $accident_insurance;

        return $this;
    }

    public function getThirteenthMonthPay(): ?float
    {
        return $this->thirteenth_month_pay;
    }

    public function setThirteenthMonthPay(float $thirteenth_month_pay): static
    {
        $this->thirteenth_month_pay = $thirteenth_month_pay;

        return $this;
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

    public function getHourlyRate(): ?float
    {
        return $this->hourly_rate;
    }

    public function setHourlyRate(float $hourly_rate): static
    {
        $this->hourly_rate = $hourly_rate;

        return $this;
    }

    /**
     * @return Collection<int, CashAdvance>
     */
    public function getCashAdvances(): Collection
    {
        return $this->cashAdvances;
    }

    public function addCashAdvance(CashAdvance $cashAdvance): static
    {
        if (!$this->cashAdvances->contains($cashAdvance)) {
            $this->cashAdvances->add($cashAdvance);
            $cashAdvance->setPayrollProfile($this);
        }

        return $this;
    }

    public function removeCashAdvance(CashAdvance $cashAdvance): static
    {
        if ($this->cashAdvances->removeElement($cashAdvance)) {
            // set the owning side to null (unless already changed)
            if ($cashAdvance->getPayrollProfile() === $this) {
                $cashAdvance->setPayrollProfile(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PagibigLoans>
     */
    public function getPagibigLoans(): Collection
    {
        return $this->pagibigLoans;
    }

    public function addPagibigLoan(PagibigLoans $pagibigLoan): static
    {
        if (!$this->pagibigLoans->contains($pagibigLoan)) {
            $this->pagibigLoans->add($pagibigLoan);
            $pagibigLoan->setPayrollProfile($this);
        }

        return $this;
    }

    public function removePagibigLoan(PagibigLoans $pagibigLoan): static
    {
        if ($this->pagibigLoans->removeElement($pagibigLoan)) {
            // set the owning side to null (unless already changed)
            if ($pagibigLoan->getPayrollProfile() === $this) {
                $pagibigLoan->setPayrollProfile(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, SSSLoans>
     */
    public function getSssLoans(): Collection
    {
        return $this->sss_loans;
    }

    public function addSssLoan(SSSLoans $sssLoan): static
    {
        if (!$this->sss_loans->contains($sssLoan)) {
            $this->sss_loans->add($sssLoan);
            $sssLoan->setPayrollProfile($this);
        }

        return $this;
    }

    public function removeSssLoan(SSSLoans $sssLoan): static
    {
        if ($this->sss_loans->removeElement($sssLoan)) {
            // set the owning side to null (unless already changed)
            if ($sssLoan->getPayrollProfile() === $this) {
                $sssLoan->setPayrollProfile(null);
            }
        }

        return $this;
    }

    public function getDailyRateNonTax(): ?float
    {
        return $this->daily_rate_non_tax;
    }

    public function setDailyRateNonTax(float $daily_rate_non_tax): static
    {
        $this->daily_rate_non_tax = $daily_rate_non_tax;

        return $this;
    }

    public function getAllowanceNonTax(): ?float
    {
        return $this->allowance_non_tax;
    }

    public function setAllowanceNonTax(float $allowance_non_tax): static
    {
        $this->allowance_non_tax = $allowance_non_tax;

        return $this;
    }

    /**
     * @return Collection<int, SSSLoansHistory>
     */
    public function getSSSLoansHistories(): Collection
    {
        return $this->sSSLoansHistories;
    }

    public function addSSSLoansHistory(SSSLoansHistory $sSSLoansHistory): static
    {
        if (!$this->sSSLoansHistories->contains($sSSLoansHistory)) {
            $this->sSSLoansHistories->add($sSSLoansHistory);
            $sSSLoansHistory->setPayrollProfile($this);
        }

        return $this;
    }

    public function removeSSSLoansHistory(SSSLoansHistory $sSSLoansHistory): static
    {
        if ($this->sSSLoansHistories->removeElement($sSSLoansHistory)) {
            // set the owning side to null (unless already changed)
            if ($sSSLoansHistory->getPayrollProfile() === $this) {
                $sSSLoansHistory->setPayrollProfile(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PagibigLoansHistory>
     */
    public function getPagibigLoansHistories(): Collection
    {
        return $this->pagibigLoansHistories;
    }

    public function addPagibigLoansHistory(PagibigLoansHistory $pagibigLoansHistory): static
    {
        if (!$this->pagibigLoansHistories->contains($pagibigLoansHistory)) {
            $this->pagibigLoansHistories->add($pagibigLoansHistory);
            $pagibigLoansHistory->setPayrollProfile($this);
        }

        return $this;
    }

    public function removePagibigLoansHistory(PagibigLoansHistory $pagibigLoansHistory): static
    {
        if ($this->pagibigLoansHistories->removeElement($pagibigLoansHistory)) {
            // set the owning side to null (unless already changed)
            if ($pagibigLoansHistory->getPayrollProfile() === $this) {
                $pagibigLoansHistory->setPayrollProfile(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CashAdvanceHistory>
     */
    public function getCashAdvanceHistories(): Collection
    {
        return $this->cashAdvanceHistories;
    }

    public function addCashAdvanceHistory(CashAdvanceHistory $cashAdvanceHistory): static
    {
        if (!$this->cashAdvanceHistories->contains($cashAdvanceHistory)) {
            $this->cashAdvanceHistories->add($cashAdvanceHistory);
            $cashAdvanceHistory->setPayrollProfile($this);
        }

        return $this;
    }

    public function removeCashAdvanceHistory(CashAdvanceHistory $cashAdvanceHistory): static
    {
        if ($this->cashAdvanceHistories->removeElement($cashAdvanceHistory)) {
            // set the owning side to null (unless already changed)
            if ($cashAdvanceHistory->getPayrollProfile() === $this) {
                $cashAdvanceHistory->setPayrollProfile(null);
            }
        }

        return $this;
    }

    public function getThirteenthMonthPayConfig(): ?ThirteenthMonthPayConfig
    {
        return $this->thirteenthMonthPayConfig;
    }

    public function setThirteenthMonthPayConfig(?ThirteenthMonthPayConfig $thirteenthMonthPayConfig): static
    {
        // unset the owning side of the relation if necessary
        if ($thirteenthMonthPayConfig === null && $this->thirteenthMonthPayConfig !== null) {
            $this->thirteenthMonthPayConfig->setEmployeePayrollProfile(null);
        }

        // set the owning side of the relation if necessary
        if ($thirteenthMonthPayConfig !== null && $thirteenthMonthPayConfig->getEmployeePayrollProfile() !== $this) {
            $thirteenthMonthPayConfig->setEmployeePayrollProfile($this);
        }

        $this->thirteenthMonthPayConfig = $thirteenthMonthPayConfig;

        return $this;
    }

    public function isIncludeSalaryAdjustmentForThirteenthMonth(): ?bool
    {
        return $this->include_salary_adjustment_for_thirteenth_month;
    }

    public function setIncludeSalaryAdjustmentForThirteenthMonth(bool $include_salary_adjustment_for_thirteenth_month): static
    {
        $this->include_salary_adjustment_for_thirteenth_month = $include_salary_adjustment_for_thirteenth_month;

        return $this;
    }

    public function isIncludeSalaryForThirteenthMonth(): ?bool
    {
        return $this->include_salary_for_thirteenth_month;
    }

    public function setIncludeSalaryForThirteenthMonth(bool $include_salary_for_thirteenth_month): static
    {
        $this->include_salary_for_thirteenth_month = $include_salary_for_thirteenth_month;

        return $this;
    }

    public function isIncludeTaxshieldForThirteenthMonth(): ?bool
    {
        return $this->include_taxshield__for_thirteenth_month;
    }

    public function setIncludeTaxshieldForThirteenthMonth(bool $include_taxshield__for_thirteenth_month): static
    {
        $this->include_taxshield__for_thirteenth_month = $include_taxshield__for_thirteenth_month;

        return $this;
    }
}
