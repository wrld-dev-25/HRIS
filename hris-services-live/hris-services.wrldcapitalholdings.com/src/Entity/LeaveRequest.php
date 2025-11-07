<?php

namespace App\Entity;

use App\Repository\LeaveRequestRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LeaveRequestRepository::class)]
class LeaveRequest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'leaveRequests')]
    #[ORM\JoinColumn(nullable: false)]
    private ?EmployeeRecords $emp_record = null;

    #[ORM\ManyToOne(inversedBy: 'leaveRequests')]
    #[ORM\JoinColumn(nullable: false)]
    private ?LeavePolicy $leave_policies = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $reason = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTime $date_start = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTime $date_end = null;

    #[ORM\Column]
    private ?bool $is_half_day = null;

    #[ORM\Column(length: 255)]
    private ?string $document = null;

    #[ORM\Column(length: 255)]
    private ?string $year = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\ManyToOne(inversedBy: 'leaveRequests')]
    private ?EmployeeRecords $updated_by = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'leaveRequests')]
    private ?SelectedEmployeeLeaves $selected_leave = null;

    #[ORM\Column]
    private ?float $total_days_requested = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmpRecord(): ?EmployeeRecords
    {
        return $this->emp_record;
    }

    public function setEmpRecord(?EmployeeRecords $emp_record): static
    {
        $this->emp_record = $emp_record;

        return $this;
    }

    public function getLeavePolicies(): ?LeavePolicy
    {
        return $this->leave_policies;
    }

    public function setLeavePolicies(?LeavePolicy $leave_policies): static
    {
        $this->leave_policies = $leave_policies;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): static
    {
        $this->reason = $reason;

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

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->date_end;
    }

    public function setDateEnd(\DateTimeInterface $date_end): static
    {
        $this->date_end = $date_end;

        return $this;
    }

    public function isHalfDay(): ?bool
    {
        return $this->is_half_day;
    }

    public function setHalfDay(bool $is_half_day): static
    {
        $this->is_half_day = $is_half_day;

        return $this;
    }

    public function getDocument(): ?string
    {
        return $this->document;
    }

    public function setDocument(string $document): static
    {
        $this->document = $document;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getUpdatedBy(): ?EmployeeRecords
    {
        return $this->updated_by;
    }

    public function setUpdatedBy(?EmployeeRecords $updated_by): static
    {
        $this->updated_by = $updated_by;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getSelectedLeave(): ?SelectedEmployeeLeaves
    {
        return $this->selected_leave;
    }

    public function setSelectedLeave(?SelectedEmployeeLeaves $selected_leave): static
    {
        $this->selected_leave = $selected_leave;

        return $this;
    }

    public function getTotalDaysRequested(): ?float
    {
        return $this->total_days_requested;
    }

    public function setTotalDaysRequested(float $total_days_requested): static
    {
        $this->total_days_requested = $total_days_requested;

        return $this;
    }
}
