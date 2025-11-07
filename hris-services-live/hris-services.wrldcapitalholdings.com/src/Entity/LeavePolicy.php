<?php

namespace App\Entity;

use App\Repository\LeavePolicyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LeavePolicyRepository::class)]
class LeavePolicy
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $year = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?float $days = null;

    #[ORM\Column(length: 255)]
    private ?string $calendar_color = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\ManyToOne(inversedBy: 'leavePolicies')]
    private ?Department $department = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $gender = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $marital = null;

    #[ORM\Column]
    private ?int $increment_amount = null;

    #[ORM\Column]
    private ?int $years_before_increment = null;

    #[ORM\Column]
    private ?bool $is_carried_over = null;

    /**
     * @var Collection<int, LeaveRequest>
     */
    #[ORM\OneToMany(targetEntity: LeaveRequest::class, mappedBy: 'leave_policies')]
    private Collection $leaveRequests;

    /**
     * @var Collection<int, YearlyEmployeeLeave>
     */
    #[ORM\ManyToMany(targetEntity: YearlyEmployeeLeave::class, mappedBy: 'selected_leave_policies')]
    private Collection $yearlyEmployeeLeaves;

    /**
     * @var Collection<int, SelectedEmployeeLeaves>
     */
    #[ORM\OneToMany(targetEntity: SelectedEmployeeLeaves::class, mappedBy: 'leave_policy')]
    private Collection $selectedEmployeeLeaves;

    public function __construct()
    {
        $this->leaveRequests = new ArrayCollection();
        $this->yearlyEmployeeLeaves = new ArrayCollection();
        $this->selectedEmployeeLeaves = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(string $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDays(): ?float
    {
        return $this->days;
    }

    public function setDays(float $days): static
    {
        $this->days = $days;

        return $this;
    }

    public function getCalendarColor(): ?string
    {
        return $this->calendar_color;
    }

    public function setCalendarColor(string $calendar_color): static
    {
        $this->calendar_color = $calendar_color;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getDepartment(): ?Department
    {
        return $this->department;
    }

    public function setDepartment(?Department $department): static
    {
        $this->department = $department;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getMarital(): ?int
    {
        return $this->marital;
    }

    public function setMarital(int $marital): static
    {
        $this->marital = $marital;

        return $this;
    }

    public function getIncrementAmount(): ?int
    {
        return $this->increment_amount;
    }

    public function setIncrementAmount(int $increment_amount): static
    {
        $this->increment_amount = $increment_amount;

        return $this;
    }

    public function getYearsBeforeIncrement(): ?int
    {
        return $this->years_before_increment;
    }

    public function setYearsBeforeIncrement(int $years_before_increment): static
    {
        $this->years_before_increment = $years_before_increment;

        return $this;
    }

    public function isCarriedOver(): ?bool
    {
        return $this->is_carried_over;
    }

    public function setCarriedOver(bool $is_carried_over): static
    {
        $this->is_carried_over = $is_carried_over;

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
            $leaveRequest->setLeavePolicies($this);
        }

        return $this;
    }

    public function removeLeaveRequest(LeaveRequest $leaveRequest): static
    {
        if ($this->leaveRequests->removeElement($leaveRequest)) {
            // set the owning side to null (unless already changed)
            if ($leaveRequest->getLeavePolicies() === $this) {
                $leaveRequest->setLeavePolicies(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, YearlyEmployeeLeave>
     */
    public function getYearlyEmployeeLeaves(): Collection
    {
        return $this->yearlyEmployeeLeaves;
    }

    // public function addYearlyEmployeeLeaf(YearlyEmployeeLeave $yearlyEmployeeLeaf): static
    // {
    //     if (!$this->yearlyEmployeeLeaves->contains($yearlyEmployeeLeaf)) {
    //         $this->yearlyEmployeeLeaves->add($yearlyEmployeeLeaf);
    //         $yearlyEmployeeLeaf->addSelectedLeavePolicy($this);
    //     }

    //     return $this;
    // }

    // public function removeYearlyEmployeeLeaf(YearlyEmployeeLeave $yearlyEmployeeLeaf): static
    // {
    //     if ($this->yearlyEmployeeLeaves->removeElement($yearlyEmployeeLeaf)) {
    //         $yearlyEmployeeLeaf->removeSelectedLeavePolicy($this);
    //     }

    //     return $this;
    // }

    /**
     * @return Collection<int, SelectedEmployeeLeaves>
     */
    public function getSelectedEmployeeLeaves(): Collection
    {
        return $this->selectedEmployeeLeaves;
    }

    public function addSelectedEmployeeLeaf(SelectedEmployeeLeaves $selectedEmployeeLeaf): static
    {
        if (!$this->selectedEmployeeLeaves->contains($selectedEmployeeLeaf)) {
            $this->selectedEmployeeLeaves->add($selectedEmployeeLeaf);
            $selectedEmployeeLeaf->setLeavePolicy($this);
        }

        return $this;
    }

    public function removeSelectedEmployeeLeaf(SelectedEmployeeLeaves $selectedEmployeeLeaf): static
    {
        if ($this->selectedEmployeeLeaves->removeElement($selectedEmployeeLeaf)) {
            // set the owning side to null (unless already changed)
            if ($selectedEmployeeLeaf->getLeavePolicy() === $this) {
                $selectedEmployeeLeaf->setLeavePolicy(null);
            }
        }

        return $this;
    }
}
