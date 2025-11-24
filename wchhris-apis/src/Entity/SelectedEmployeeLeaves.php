<?php

namespace App\Entity;

use App\Repository\SelectedEmployeeLeavesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SelectedEmployeeLeavesRepository::class)]
class SelectedEmployeeLeaves
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'selectedEmployeeLeaves')]
    private ?LeavePolicy $leave_policy = null;

    #[ORM\ManyToOne(inversedBy: 'selectedEmployeeLeaves')]
    private ?YearlyEmployeeLeave $employee_leave = null;

    #[ORM\Column]
    private ?float $no_of_days = null;

    #[ORM\Column]
    private ?float $used_days = null;

    #[ORM\Column]
    private ?float $carried_over_days = null;

    #[ORM\Column]
    private ?int $carry_over_policy = null;

    #[ORM\Column]
    private ?int $status = null;

    /**
     * @var Collection<int, LeaveRequest>
     */
    #[ORM\OneToMany(targetEntity: LeaveRequest::class, mappedBy: 'selected_leave')]
    private Collection $leaveRequests;

    public function __construct()
    {
        $this->leaveRequests = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLeavePolicy(): ?LeavePolicy
    {
        return $this->leave_policy;
    }

    public function setLeavePolicy(?LeavePolicy $leave_policy): static
    {
        $this->leave_policy = $leave_policy;

        return $this;
    }

    public function getEmployeeLeave(): ?YearlyEmployeeLeave
    {
        return $this->employee_leave;
    }

    public function setEmployeeLeave(?YearlyEmployeeLeave $employee_leave): static
    {
        $this->employee_leave = $employee_leave;

        return $this;
    }

    public function getNoOfDays(): ?float
    {
        return $this->no_of_days;
    }

    public function setNoOfDays(float $no_of_days): static
    {
        $this->no_of_days = $no_of_days;

        return $this;
    }

    public function getUsedDays(): ?float
    {
        return $this->used_days;
    }

    public function setUsedDays(float $used_days): static
    {
        $this->used_days = $used_days;

        return $this;
    }

    public function getCarriedOverDays(): ?float
    {
        return $this->carried_over_days;
    }

    public function setCarriedOverDays(float $carried_over_days): static
    {
        $this->carried_over_days = $carried_over_days;

        return $this;
    }

    public function getCarryOverPolicy(): ?int
    {
        return $this->carry_over_policy;
    }

    public function setCarryOverPolicy(int $carry_over_policy): static
    {
        $this->carry_over_policy = $carry_over_policy;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): static
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Collection<int, LeaveRequest>
     */
    public function getLeaveRequests(): Collection
    {
        return $this->leaveRequests;
    }

    public function addLeaveRequest(LeaveRequest $leaveRequest): static
    {
        if (!$this->leaveRequests->contains($leaveRequest)) {
            $this->leaveRequests->add($leaveRequest);
            $leaveRequest->setSelectedLeave($this);
        }

        return $this;
    }

    public function removeLeaveRequest(LeaveRequest $leaveRequest): static
    {
        if ($this->leaveRequests->removeElement($leaveRequest)) {
            // set the owning side to null (unless already changed)
            if ($leaveRequest->getSelectedLeave() === $this) {
                $leaveRequest->setSelectedLeave(null);
            }
        }

        return $this;
    }
}
