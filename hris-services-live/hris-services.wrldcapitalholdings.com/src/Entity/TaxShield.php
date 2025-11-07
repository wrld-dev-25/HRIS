<?php

namespace App\Entity;

use App\Repository\TaxShieldRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaxShieldRepository::class)]
class TaxShield
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $monthly_tax_shield = null;

    #[ORM\Column]
    private ?float $daily_tax_shield = null;

    #[ORM\OneToOne(inversedBy: 'taxShield', cascade: ['persist', 'remove'])]
    private ?EmployeePayroll $payroll = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Remarks = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMonthlyTaxShield(): ?float
    {
        return $this->monthly_tax_shield;
    }

    public function setMonthlyTaxShield(float $monthly_tax_shield): static
    {
        $this->monthly_tax_shield = $monthly_tax_shield;

        return $this;
    }

    public function getDailyTaxShield(): ?float
    {
        return $this->daily_tax_shield;
    }

    public function setDailyTaxShield(float $daily_tax_shield): static
    {
        $this->daily_tax_shield = $daily_tax_shield;

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

    public function getRemarks(): ?string
    {
        return $this->Remarks;
    }

    public function setRemarks(string $Remarks): static
    {
        $this->Remarks = $Remarks;

        return $this;
    }
}
