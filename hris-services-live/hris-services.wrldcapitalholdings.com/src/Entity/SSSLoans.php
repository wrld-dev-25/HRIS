<?php

namespace App\Entity;

use App\Repository\SSSLoansRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SSSLoansRepository::class)]
class SSSLoans
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $remark = null;

    #[ORM\Column]
    private ?float $amount = null;

    #[ORM\Column]
    private ?float $deduction = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne(inversedBy: 'sss_loans')]
    private ?EmployeePayrollProfile $payroll_profile = null;

    /**
     * @var Collection<int, SSSLoansHistory>
     */
    #[ORM\OneToMany(targetEntity: SSSLoansHistory::class, mappedBy: 'sss_loan')]
    private Collection $sSSLoansHistories;

    #[ORM\Column(nullable: true)]
    private ?bool $enabled = null;

    public function __construct()
    {
        $this->sSSLoansHistories = new ArrayCollection();
    }

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

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): static
    {
        $this->amount = $amount;

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
            $sSSLoansHistory->setSssLoan($this);
        }

        return $this;
    }

    public function removeSSSLoansHistory(SSSLoansHistory $sSSLoansHistory): static
    {
        if ($this->sSSLoansHistories->removeElement($sSSLoansHistory)) {
            // set the owning side to null (unless already changed)
            if ($sSSLoansHistory->getSssLoan() === $this) {
                $sSSLoansHistory->setSssLoan(null);
            }
        }

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
