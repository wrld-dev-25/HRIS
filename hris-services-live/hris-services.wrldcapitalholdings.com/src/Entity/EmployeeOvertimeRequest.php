<?php

namespace App\Entity;

use App\Repository\EmployeeOvertimeRequestRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeeOvertimeRequestRepository::class)]
class EmployeeOvertimeRequest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'employeeOvertimeRequests')]
    private ?EmployeeRecords $emp_id = null;

    #[ORM\ManyToOne(inversedBy: 'employeeOvertimeRequests')]
    private ?WorkerLogs $worker_logs = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $status = null;

    #[ORM\ManyToOne(inversedBy: 'employeeOvertimeRequests')]
    private ?EmployeeRecords $approved_by = null;

    #[ORM\Column]
    private ?float $time_requested = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $reason = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmpId(): ?EmployeeRecords
    {
        return $this->emp_id;
    }

    public function setEmpId(?EmployeeRecords $emp_id): static
    {
        $this->emp_id = $emp_id;

        return $this;
    }

    public function getWorkerLogs(): ?WorkerLogs
    {
        return $this->worker_logs;
    }

    public function setWorkerLogs(?WorkerLogs $worker_logs): static
    {
        $this->worker_logs = $worker_logs;

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

    public function getApprovedBy(): ?EmployeeRecords
    {
        return $this->approved_by;
    }

    public function setApprovedBy(?EmployeeRecords $approved_by): static
    {
        $this->approved_by = $approved_by;

        return $this;
    }

    public function getTimeRequested(): ?float
    {
        return $this->time_requested;
    }

    public function setTimeRequested(float $time_requested): static
    {
        $this->time_requested = $time_requested;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): static
    {
        $this->reason = $reason;

        return $this;
    }
}
