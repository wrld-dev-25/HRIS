<?php

namespace App\Entity;

use App\Repository\CashAdvanceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CashAdvanceRepository::class)]
class CashAdvance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'cashAdvances')]
    private ?EmployeePayrollProfile $payroll_profile = null;

    #[ORM\Column]
    private ?float $cash_advance_amount = null;

    #[ORM\Column]
    private ?float $cash_advance_deduction = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_start = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $remarks = null;

    /**
     * @var Collection<int, CashAdvanceHistory>
     */
    #[ORM\OneToMany(targetEntity: CashAdvanceHistory::class, mappedBy: 'cash_advance')]
    private Collection $cashAdvanceHistories;

    #[ORM\Column]
    private ?float $starting_amount = null;

    #[ORM\Column(nullable: true)]
    private ?bool $enabled = null;

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

    public function getCashAdvanceAmount(): ?float
    {
        return $this->cash_advance_amount;
    }

    public function setCashAdvanceAmount(float $cash_advance_amount): static
    {
        $this->cash_advance_amount = $cash_advance_amount;

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

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->date_start;
    }

    public function setDateStart(\DateTimeInterface $date_start): static
    {
        $this->date_start = $date_start;

        return $this;
    }

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    public function setRemarks(?string $remarks): static
    {
        $this->remarks = $remarks;

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
            $cashAdvanceHistory->setCashAdvance($this);
        }

        return $this;
    }

    public function removeCashAdvanceHistory(CashAdvanceHistory $cashAdvanceHistory): static
    {
        if ($this->cashAdvanceHistories->removeElement($cashAdvanceHistory)) {
            // set the owning side to null (unless already changed)
            if ($cashAdvanceHistory->getCashAdvance() === $this) {
                $cashAdvanceHistory->setCashAdvance(null);
            }
        }

        return $this;
    }

    public function getStartingAmount(): ?float
    {
        return $this->starting_amount;
    }

    public function setStartingAmount(float $starting_amount): static
    {
        $this->starting_amount = $starting_amount;

        return $this;
    }

    public function isEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): static
    {
        $this->enabled = $enabled;

        return $this;
    }
}
