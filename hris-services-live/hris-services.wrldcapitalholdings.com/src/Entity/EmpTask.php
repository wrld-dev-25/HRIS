<?php

namespace App\Entity;

use App\Repository\EmpTaskRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: EmpTaskRepository::class)]
class EmpTask
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['emp_projects','emp_task_list','emp_task','emp_proj_list'])]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'empTasks')]
    private ?EmployeeProjects $emp_project = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['emp_projects','emp_task_list','emp_task','emp_proj_list'])]
    private ?string $task_desc = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['emp_projects','emp_task_list','emp_task','emp_proj_list'])]
    private ?int $rendered_hours = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Groups(['emp_projects','emp_task_list','emp_task','emp_proj_list'])]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['emp_projects','emp_task_list','emp_task','emp_proj_list'])]
    private ?bool $archived = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['emp_projects','emp_task_list','emp_task','emp_proj_list'])]
    private ?bool $approved = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['emp_projects','emp_task_list','emp_task','emp_proj_list'])]
    private ?float $assigned_hours = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['emp_projects','emp_task_list','emp_task','emp_proj_list'])]
    public ?bool $is_adjusted = null;

    #[ORM\ManyToOne(inversedBy: 'empTasks')]
    #[Groups(['emp_proj_list'])]
    private ?WorkerLogs $worker_logs = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmpProject(): ?EmployeeProjects
    {
        return $this->emp_project;
    }

    public function setEmpProject(?EmployeeProjects $emp_project): static
    {
        $this->emp_project = $emp_project;

        return $this;
    }

    public function getTaskDesc(): ?string
    {
        return $this->task_desc;
    }

    public function setTaskDesc(?string $task_desc): static
    {
        $this->task_desc = $task_desc;

        return $this;
    }

    public function getRenderedHours(): ?int
    {
        return $this->rendered_hours;
    }

    public function setRenderedHours(?int $rendered_hours): static
    {
        $this->rendered_hours = $rendered_hours;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function isArchived(): ?bool
    {
        return $this->archived;
    }

    public function setArchived(?bool $archived): static
    {
        $this->archived = $archived;

        return $this;
    }

    public function isApproved(): ?bool
    {
        return $this->approved;
    }

    public function setApproved(?bool $approved): static
    {
        $this->approved = $approved;

        return $this;
    }

    public function getAssignedHours(): ?float
    {
        return $this->assigned_hours;
    }

    public function setAssignedHours(?float $assigned_hours): static
    {
        $this->assigned_hours = $assigned_hours;

        return $this;
    }

    public function isAdjusted(): ?bool
    {
        return $this->is_adjusted;
    }

    public function setAdjusted(?bool $is_adjusted): static
    {
        $this->is_adjusted = $is_adjusted;

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
}
