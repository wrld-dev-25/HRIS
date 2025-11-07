<?php

namespace App\Entity;

use App\Repository\PagibigConfigRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PagibigConfigRepository::class)]
class PagibigConfig
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $employer_share = null;

    #[ORM\Column]
    private ?float $employee_share = null;

    /**
     * @var Collection<int, EmployeePayrollProfile>
     */
    #[ORM\OneToMany(targetEntity: EmployeePayrollProfile::class, mappedBy: 'pagibig_contribution')]
    private Collection $employeePayrollProfiles;

    #[ORM\Column]
    private ?float $monthly_compensation_cap = null;

    public function __construct()
    {
        $this->employeePayrollProfiles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployerShare(): ?float
    {
        return $this->employer_share;
    }

    public function setEmployerShare(float $employer_share): static
    {
        $this->employer_share = $employer_share;

        return $this;
    }

    public function getEmployeeShare(): ?float
    {
        return $this->employee_share;
    }

    public function setEmployeeShare(float $employee_share): static
    {
        $this->employee_share = $employee_share;

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
            $employeePayrollProfile->setPagibigContribution($this);
        }

        return $this;
    }

    public function removeEmployeePayrollProfile(EmployeePayrollProfile $employeePayrollProfile): static
    {
        if ($this->employeePayrollProfiles->removeElement($employeePayrollProfile)) {
            // set the owning side to null (unless already changed)
            if ($employeePayrollProfile->getPagibigContribution() === $this) {
                $employeePayrollProfile->setPagibigContribution(null);
            }
        }

        return $this;
    }

    public function getMonthlyCompensationCap(): ?float
    {
        return $this->monthly_compensation_cap;
    }

    public function setMonthlyCompensationCap(float $monthly_compensation_cap): static
    {
        $this->monthly_compensation_cap = $monthly_compensation_cap;

        return $this;
    }
}
