<?php

namespace App\Entity;

use App\Repository\PagibigLoansRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PagibigLoansRepository::class)]
class PagibigLoans
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

    #[ORM\ManyToOne(inversedBy: 'pagibigLoans')]
    private ?EmployeePayrollProfile $payroll_profile = null;

    /**
     * @var Collection<int, PagibigLoansHistory>
     */
    #[ORM\OneToMany(targetEntity: PagibigLoansHistory::class, mappedBy: 'pagibig_loans_history')]
    private Collection $pagibigLoansHistories;

    #[ORM\Column(nullable: true)]
    private ?bool $enabled = null;

    public function __construct()
    {
        $this->pagibigLoansHistories = new ArrayCollection();
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
            $pagibigLoansHistory->setPagibigLoansHistory($this);
        }

        return $this;
    }

    public function removePagibigLoansHistory(PagibigLoansHistory $pagibigLoansHistory): static
    {
        if ($this->pagibigLoansHistories->removeElement($pagibigLoansHistory)) {
            // set the owning side to null (unless already changed)
            if ($pagibigLoansHistory->getPagibigLoansHistory() === $this) {
                $pagibigLoansHistory->setPagibigLoansHistory(null);
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
