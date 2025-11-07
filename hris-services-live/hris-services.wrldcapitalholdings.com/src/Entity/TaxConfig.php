<?php

namespace App\Entity;

use App\Repository\TaxConfigRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaxConfigRepository::class)]
class TaxConfig
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $tax_bracket_name = null;

    #[ORM\Column]
    private ?float $tax_bracket_range = null;

    #[ORM\Column]
    private ?float $tax_bracket_range_end = null;

    #[ORM\Column]
    private ?float $tax_deduction_percent = null;

    #[ORM\Column]
    private ?float $tax_deduction_amount = null;

    /**
     * @var Collection<int, EmployeePayrollProfile>
     */
    #[ORM\OneToMany(targetEntity: EmployeePayrollProfile::class, mappedBy: 'tax_contribution')]
    private Collection $employeePayrollProfiles;

    public function __construct()
    {
        $this->employeePayrollProfiles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaxBracketName(): ?string
    {
        return $this->tax_bracket_name;
    }

    public function setTaxBracketName(string $tax_bracket_name): static
    {
        $this->tax_bracket_name = $tax_bracket_name;

        return $this;
    }

    public function getTaxBracketRange(): ?float
    {
        return $this->tax_bracket_range;
    }

    public function setTaxBracketRange(float $tax_bracket_range): static
    {
        $this->tax_bracket_range = $tax_bracket_range;

        return $this;
    }

    public function getTaxBracketRangeEnd(): ?float
    {
        return $this->tax_bracket_range_end;
    }

    public function setTaxBracketRangeEnd(float $tax_bracket_range_end): static
    {
        $this->tax_bracket_range_end = $tax_bracket_range_end;

        return $this;
    }

    public function getTaxDeductionPercent(): ?float
    {
        return $this->tax_deduction_percent;
    }

    public function setTaxDeductionPercent(float $tax_deduction_percent): static
    {
        $this->tax_deduction_percent = $tax_deduction_percent;

        return $this;
    }

    public function getTaxDeductionAmount(): ?float
    {
        return $this->tax_deduction_amount;
    }

    public function setTaxDeductionAmount(float $tax_deduction_amount): static
    {
        $this->tax_deduction_amount = $tax_deduction_amount;

        return $this;
    }

    /**
     * @return Collection<int, EmployeePayrollProfile>
     */
    public function getEmployeePayrollProfiles(): Collection
    {
        return $this->employeePayrollProfiles;
    }

    public function addEmployeePayrollProfile(EmployeePayrollProfile $employeePayrollProfile): static
    {
        if (!$this->employeePayrollProfiles->contains($employeePayrollProfile)) {
            $this->employeePayrollProfiles->add($employeePayrollProfile);
            $employeePayrollProfile->setTaxContribution($this);
        }

        return $this;
    }

    public function removeEmployeePayrollProfile(EmployeePayrollProfile $employeePayrollProfile): static
    {
        if ($this->employeePayrollProfiles->removeElement($employeePayrollProfile)) {
            // set the owning side to null (unless already changed)
            if ($employeePayrollProfile->getTaxContribution() === $this) {
                $employeePayrollProfile->setTaxContribution(null);
            }
        }

        return $this;
    }
}
