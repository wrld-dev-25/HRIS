<?php

namespace App\Entity;

use App\Repository\EmployeePayrollRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeePayrollRepository::class)]
class EmployeePayroll
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'employeePayrolls')]
    private ?EmployeePayrollProfile $payroll_profile = null;

    #[ORM\Column]
    private ?float $basic_salary = null;

    #[ORM\Column]
    private ?float $overtime_salary = null;

    #[ORM\Column]
    private ?float $total_salary = null;

    #[ORM\Column]
    private ?float $total_deduction = null;

    #[ORM\Column]
    private ?float $net_salary = null;

    #[ORM\Column]
    private ?float $thirteenth_month_pay = null;

    #[ORM\Column]
    private ?float $sss_share = null;

    #[ORM\Column]
    private ?float $philhealth_share = null;

    #[ORM\Column]
    private ?float $hdmf_contribution = null;

    #[ORM\Column]
    private ?float $insurance_contribution = null;

    #[ORM\Column]
    private ?float $tax_contribution = null;

    #[ORM\Column]
    private ?float $cash_advance_deduction = null;

    #[ORM\Column]
    private ?float $undertime_deduction = null;

    #[ORM\Column]
    private ?float $rendered_days = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_generated = null;

    #[ORM\OneToOne(mappedBy: 'payroll', cascade: ['persist', 'remove'])]
    private ?TaxShield $taxShield = null;

    #[ORM\Column(nullable: true)]
    private ?float $total_tax_shield = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_start = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_end = null;

    /**
     * @var Collection<int, CashAdvanceHistory>
     */
    #[ORM\OneToMany(targetEntity: CashAdvanceHistory::class, mappedBy: 'payroll')]
    private Collection $cashAdvanceHistories;

    #[ORM\OneToOne(mappedBy: 'payroll', cascade: ['persist', 'remove'])]
    private ?SalaryAdjustment $salaryAdjustment = null;

    #[ORM\Column(nullable: true)]
    private ?float $sss_calamity_loan = null;

    #[ORM\Column(nullable: true)]
    private ?float $sss_loan = null;

    #[ORM\Column(nullable: true)]
    private ?float $hdmf_loan = null;

    #[ORM\Column(nullable: true)]
    private ?float $hdmf_calamity_loan = null;

    #[ORM\Column(nullable: true)]
    private ?float $hdmf_mp2 = null;

    #[ORM\Column(nullable: true)]
    private ?float $total_ca = null;

    #[ORM\ManyToOne(inversedBy: 'employeePayrolls')]
    private ?PayrollGroups $payroll_group = null;

    public function __construct()
    {
        $this->cashAdvanceHistories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getBasicSalary(): ?float
    {
        return $this->basic_salary;
    }

    public function setBasicSalary(float $basic_salary): static
    {
        $this->basic_salary = $basic_salary;

        return $this;
    }

    public function getOvertimeSalary(): ?float
    {
        return $this->overtime_salary;
    }

    public function setOvertimeSalary(float $overtime_salary): static
    {
        $this->overtime_salary = $overtime_salary;

        return $this;
    }

    public function getTotalSalary(): ?float
    {
        return $this->total_salary;
    }

    public function setTotalSalary(float $total_salary): static
    {
        $this->total_salary = $total_salary;

        return $this;
    }

    public function getTotalDeduction(): ?float
    {
        return $this->total_deduction;
    }

    public function setTotalDeduction(float $total_deduction): static
    {
        $this->total_deduction = $total_deduction;

        return $this;
    }

    public function getNetSalary(): ?float
    {
        return $this->net_salary;
    }

    public function setNetSalary(float $net_salary): static
    {
        $this->net_salary = $net_salary;

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

    public function getSssShare(): ?float
    {
        return $this->sss_share;
    }

    public function setSssShare(float $sss_share): static
    {
        $this->sss_share = $sss_share;

        return $this;
    }

    public function getPhilhealthShare(): ?float
    {
        return $this->philhealth_share;
    }

    public function setPhilhealthShare(float $philhealth_share): static
    {
        $this->philhealth_share = $philhealth_share;

        return $this;
    }

    public function getHdmfContribution(): ?float
    {
        return $this->hdmf_contribution;
    }

    public function setHdmfContribution(float $hdmf_contribution): static
    {
        $this->hdmf_contribution = $hdmf_contribution;

        return $this;
    }

    public function getInsuranceContribution(): ?float
    {
        return $this->insurance_contribution;
    }

    public function setInsuranceContribution(float $insurance_contribution): static
    {
        $this->insurance_contribution = $insurance_contribution;

        return $this;
    }

    public function getTaxContribution(): ?float
    {
        return $this->tax_contribution;
    }

    public function setTaxContribution(float $tax_contribution): static
    {
        $this->tax_contribution = $tax_contribution;

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

    public function getUndertimeDeduction(): ?float
    {
        return $this->undertime_deduction;
    }

    public function setUndertimeDeduction(float $undertime_deduction): static
    {
        $this->undertime_deduction = $undertime_deduction;

        return $this;
    }

    public function getRenderedDays(): ?float
    {
        return $this->rendered_days;
    }

    public function setRenderedDays(float $rendered_days): static
    {
        $this->rendered_days = $rendered_days;

        return $this;
    }

    public function getDateGenerated(): ?\DateTimeInterface
    {
        return $this->date_generated;
    }

    public function setDateGenerated(\DateTimeInterface $date_generated): static
    {
        $this->date_generated = $date_generated;

        return $this;
    }

    public function getTaxShield(): ?TaxShield
    {
        return $this->taxShield;
    }

    public function setTaxShield(?TaxShield $taxShield): static
    {
        // unset the owning side of the relation if necessary
        if ($taxShield === null && $this->taxShield !== null) {
            $this->taxShield->setPayroll(null);
        }

        // set the owning side of the relation if necessary
        if ($taxShield !== null && $taxShield->getPayroll() !== $this) {
            $taxShield->setPayroll($this);
        }

        $this->taxShield = $taxShield;

        return $this;
    }

    public function getTotalTaxShield(): ?float
    {
        return $this->total_tax_shield;
    }

    public function setTotalTaxShield(?float $total_tax_shield): static
    {
        $this->total_tax_shield = $total_tax_shield;

        return $this;
    }

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->date_start;
    }

    public function setDateStart(\DateTimeInterface $date_start): static
    {
        $this->date_start = $date_start;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->date_end;
    }

    public function setDateEnd(\DateTimeInterface $date_end): static
    {
        $this->date_end = $date_end;

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
            $cashAdvanceHistory->setPayroll($this);
        }

        return $this;
    }

    public function removeCashAdvanceHistory(CashAdvanceHistory $cashAdvanceHistory): static
    {
        if ($this->cashAdvanceHistories->removeElement($cashAdvanceHistory)) {
            // set the owning side to null (unless already changed)
            if ($cashAdvanceHistory->getPayroll() === $this) {
                $cashAdvanceHistory->setPayroll(null);
            }
        }

        return $this;
    }

    public function getSalaryAdjustment(): ?SalaryAdjustment
    {
        return $this->salaryAdjustment;
    }

    public function setSalaryAdjustment(?SalaryAdjustment $salaryAdjustment): static
    {
        // unset the owning side of the relation if necessary
        if ($salaryAdjustment === null && $this->salaryAdjustment !== null) {
            $this->salaryAdjustment->setPayroll(null);
        }

        // set the owning side of the relation if necessary
        if ($salaryAdjustment !== null && $salaryAdjustment->getPayroll() !== $this) {
            $salaryAdjustment->setPayroll($this);
        }

        $this->salaryAdjustment = $salaryAdjustment;

        return $this;
    }

    public function getSssCalamityLoan(): ?float
    {
        return $this->sss_calamity_loan;
    }

    public function setSssCalamityLoan(?float $sss_calamity_loan): static
    {
        $this->sss_calamity_loan = $sss_calamity_loan;

        return $this;
    }

    public function getSssLoan(): ?float
    {
        return $this->sss_loan;
    }

    public function setSssLoan(?float $sss_loan): static
    {
        $this->sss_loan = $sss_loan;

        return $this;
    }

    public function getHdmfLoan(): ?float
    {
        return $this->hdmf_loan;
    }

    public function setHdmfLoan(?float $hdmf_loan): static
    {
        $this->hdmf_loan = $hdmf_loan;

        return $this;
    }

    public function getHdmfCalamityLoan(): ?float
    {
        return $this->hdmf_calamity_loan;
    }

    public function setHdmfCalamityLoan(?float $hdmf_calamity_loan): static
    {
        $this->hdmf_calamity_loan = $hdmf_calamity_loan;

        return $this;
    }

    public function getHdmfMp2(): ?float
    {
        return $this->hdmf_mp2;
    }

    public function setHdmfMp2(?float $hdmf_mp2): static
    {
        $this->hdmf_mp2 = $hdmf_mp2;

        return $this;
    }

    public function getTotalCa(): ?float
    {
        return $this->total_ca;
    }

    public function setTotalCa(?float $total_ca): static
    {
        $this->total_ca = $total_ca;

        return $this;
    }

    public function getPayrollGroup(): ?PayrollGroups
    {
        return $this->payroll_group;
    }

    public function setPayrollGroup(?PayrollGroups $payroll_group): static
    {
        $this->payroll_group = $payroll_group;

        return $this;
    }
}
