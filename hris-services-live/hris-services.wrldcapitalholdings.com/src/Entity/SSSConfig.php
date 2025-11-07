<?php

namespace App\Entity;

use App\Repository\SSSConfigRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SSSConfigRepository::class)]
class SSSConfig
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, EmployeePayrollProfile>
     */
    #[ORM\OneToMany(targetEntity: EmployeePayrollProfile::class, mappedBy: 'sss_contribution')]
    private Collection $employeePayrollProfiles;

    #[ORM\Column]
    private ?float $range_start = null;

    #[ORM\Column]
    private ?float $range_end = null;

    #[ORM\Column]
    private ?float $msc_ec = null;

    #[ORM\Column]
    private ?float $msc_wisp = null;

    #[ORM\Column]
    private ?float $msc_total = null;

    #[ORM\Column]
    private ?float $contribution_regular_er = null;

    #[ORM\Column]
    private ?float $contribution_regular_ee = null;

    #[ORM\Column]
    private ?float $contribution_ec_er = null;

    #[ORM\Column]
    private ?float $contribution_ec_ee = null;

    #[ORM\Column]
    private ?float $contribution_wisp_er = null;

    #[ORM\Column]
    private ?float $contribution_wisp_ee = null;

    #[ORM\Column]
    private ?float $contribution_total_er = null;

    #[ORM\Column]
    private ?float $contribution_total_ee = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isArchived = null;

    public function __construct()
    {
        $this->employeePayrollProfiles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
            $employeePayrollProfile->setSssContribution($this);
        }

        return $this;
    }

    public function removeEmployeePayrollProfile(EmployeePayrollProfile $employeePayrollProfile): static
    {
        if ($this->employeePayrollProfiles->removeElement($employeePayrollProfile)) {
            // set the owning side to null (unless already changed)
            if ($employeePayrollProfile->getSssContribution() === $this) {
                $employeePayrollProfile->setSssContribution(null);
            }
        }

        return $this;
    }

    public function getRangeStart(): ?float
    {
        return $this->range_start;
    }

    public function setRangeStart(float $range_start): static
    {
        $this->range_start = $range_start;

        return $this;
    }

    public function getRangeEnd(): ?float
    {
        return $this->range_end;
    }

    public function setRangeEnd(float $range_end): static
    {
        $this->range_end = $range_end;

        return $this;
    }

    public function getMscEc(): ?float
    {
        return $this->msc_ec;
    }

    public function setMscEc(float $msc_ec): static
    {
        $this->msc_ec = $msc_ec;

        return $this;
    }

    public function getMscWisp(): ?float
    {
        return $this->msc_wisp;
    }

    public function setMscWisp(float $msc_wisp): static
    {
        $this->msc_wisp = $msc_wisp;

        return $this;
    }

    public function getMscTotal(): ?float
    {
        return $this->msc_total;
    }

    public function setMscTotal(float $msc_total): static
    {
        $this->msc_total = $msc_total;

        return $this;
    }

    public function getContributionRegularEr(): ?float
    {
        return $this->contribution_regular_er;
    }

    public function setContributionRegularEr(float $contribution_regular_er): static
    {
        $this->contribution_regular_er = $contribution_regular_er;

        return $this;
    }

    public function getContributionRegularEe(): ?float
    {
        return $this->contribution_regular_ee;
    }

    public function setContributionRegularEe(float $contribution_regular_ee): static
    {
        $this->contribution_regular_ee = $contribution_regular_ee;

        return $this;
    }

    public function getContributionEcEr(): ?float
    {
        return $this->contribution_ec_er;
    }

    public function setContributionEcEr(float $contribution_ec_er): static
    {
        $this->contribution_ec_er = $contribution_ec_er;

        return $this;
    }

    public function getContributionEcEe(): ?float
    {
        return $this->contribution_ec_ee;
    }

    public function setContributionEcEe(float $contribution_ec_ee): static
    {
        $this->contribution_ec_ee = $contribution_ec_ee;

        return $this;
    }

    public function getContributionWispEr(): ?float
    {
        return $this->contribution_wisp_er;
    }

    public function setContributionWispEr(float $contribution_wisp_er): static
    {
        $this->contribution_wisp_er = $contribution_wisp_er;

        return $this;
    }

    public function getContributionWispEe(): ?float
    {
        return $this->contribution_wisp_ee;
    }

    public function setContributionWispEe(float $contribution_wisp_ee): static
    {
        $this->contribution_wisp_ee = $contribution_wisp_ee;

        return $this;
    }

    public function getContributionTotalEr(): ?float
    {
        return $this->contribution_total_er;
    }

    public function setContributionTotalEr(float $contribution_total_er): static
    {
        $this->contribution_total_er = $contribution_total_er;

        return $this;
    }

    public function getContributionTotalEe(): ?float
    {
        return $this->contribution_total_ee;
    }

    public function setContributionTotalEe(float $contribution_total_ee): static
    {
        $this->contribution_total_ee = $contribution_total_ee;

        return $this;
    }

    public function isArchived(): ?bool
    {
        return $this->isArchived;
    }

    public function setArchived(?bool $isArchived): static
    {
        $this->isArchived = $isArchived;

        return $this;
    }
}
