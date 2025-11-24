<?php

namespace App\Entity;

use App\Repository\PhilHealthConfigRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhilHealthConfigRepository::class)]
class PhilHealthConfig
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $base_rate = null;

    #[ORM\Column]
    private ?float $employee_share = null;

    #[ORM\Column]
    private ?float $employer_share = null;

    /**
     * @var Collection<int, EmployeePayrollProfile>
     */
    #[ORM\OneToMany(targetEntity: EmployeePayrollProfile::class, mappedBy: 'philhealth_contribution')]
    private Collection $employeePayrollProfiles;

    #[ORM\Column]
    private ?float $minimum_cap = null;

    #[ORM\Column]
    private ?float $maximum_cap = null;

    public function __construct()
    {
        $this->employeePayrollProfiles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBaseRate(): ?float
    {
        return $this->base_rate;
    }

    public function setBaseRate(float $base_rate): static
    {
        $this->base_rate = $base_rate;

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

    public function getEmployerShare(): ?float
    {
        return $this->employer_share;
    }

    public function setEmployerShare(float $employer_share): static
    {
        $this->employer_share = $employer_share;

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
            $employeePayrollProfile->setPhilhealthContribution($this);
        }

        return $this;
    }

    public function removeEmployeePayrollProfile(EmployeePayrollProfile $employeePayrollProfile): static
    {
        if ($this->employeePayrollProfiles->removeElement($employeePayrollProfile)) {
            // set the owning side to null (unless already changed)
            if ($employeePayrollProfile->getPhilhealthContribution() === $this) {
                $employeePayrollProfile->setPhilhealthContribution(null);
            }
        }

        return $this;
    }

    public function getMinimumCap(): ?float
    {
        return $this->minimum_cap;
    }

    public function setMinimumCap(float $minimum_cap): static
    {
        $this->minimum_cap = $minimum_cap;

        return $this;
    }

    public function getMaximumCap(): ?float
    {
        return $this->maximum_cap;
    }

    public function setMaximumCap(float $maximum_cap): static
    {
        $this->maximum_cap = $maximum_cap;

        return $this;
    }
}
