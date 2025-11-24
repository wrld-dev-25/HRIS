<?php

namespace App\Entity;

use App\Repository\WorkerLogsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: WorkerLogsRepository::class)]
class WorkerLogs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['worker_logs','all_worker_logs','emp_proj_list'])]
    private ?int $id = null;
    
    #[ORM\ManyToOne(inversedBy: 'workerLog')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['worker_logs','all_worker_logs','emp_proj_list'])]
    private ?Worker $user = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['worker_logs','all_worker_logs','emp_proj_list'])]
    private ?string $type = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Groups(['worker_logs','all_worker_logs','emp_proj_list'])]
    private ?\DateTimeInterface $loginDate = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Groups(['worker_logs','all_worker_logs','emp_proj_list'])]
    private ?\DateTimeInterface $logoutDate = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['worker_logs','all_worker_logs','emp_proj_list'])]
    private ?string $worker_log_id = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['worker_logs','all_worker_logs','emp_proj_list'])]
    private ?float $overtime = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['worker_logs','all_worker_logs','emp_proj_list'])]
    private ?bool $overtime_approved = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['worker_logs','all_worker_logs','emp_proj_list'])]
    private ?float $undertime = null;

    #[ORM\ManyToOne(inversedBy: 'yes')]
    #[Groups(['worker_logs','all_worker_logs','emp_proj_list'])]
    private ?AttendanceTypes $attendance_status = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['worker_logs','all_worker_logs','emp_proj_list'])]
    private ?float $rendered_hours = null;

    /**
     * @var Collection<int, EmpTask>
     */
    #[ORM\OneToMany(targetEntity: EmpTask::class, mappedBy: 'worker_logs')]
    private Collection $empTasks;

    #[ORM\Column]
    #[Groups(['worker_logs','all_worker_logs','emp_proj_list'])]
    private ?bool $is_time_calculated = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['worker_logs','all_worker_logs','emp_proj_list'])]
    private ?\DateTimeImmutable $created_at = null;

    /**
     * @var Collection<int, EmployeeOvertimeRequest>
     */
    #[ORM\OneToMany(targetEntity: EmployeeOvertimeRequest::class, mappedBy: 'worker_logs')]
    private Collection $employeeOvertimeRequests;

    /**
     * @var Collection<int, DTRAdjutments>
     */
    #[Groups(['worker_logs'])]
    #[ORM\OneToMany(targetEntity: DTRAdjutments::class, mappedBy: 'worker_logs')]
    private Collection $dTRAdjutments;

    public function __construct()
    {
        $this->empTasks = new ArrayCollection();
        $this->employeeOvertimeRequests = new ArrayCollection();
        $this->dTRAdjutments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?Worker
    {
        return $this->user;
    }

    public function setUser(?Worker $user): static
    {
        $this->user = $user;

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

    public function getLoginDate(): ?\DateTimeInterface
    {
        return $this->loginDate;
    }

    public function setLoginDate(?\DateTimeInterface $loginDate): static
    {
        $this->loginDate = $loginDate;

        return $this;
    }

    public function getLogoutDate(): ?\DateTimeInterface
    {
        return $this->logoutDate;
    }

    public function setLogoutDate(?\DateTimeInterface $logoutDate): static
    {
        $this->logoutDate = $logoutDate;

        return $this;
    }

    public function getWorkerLogId(): ?string
    {
        return $this->worker_log_id;
    }

    public function setWorkerLogId(?string $worker_log_id): static
    {
        $this->worker_log_id = $worker_log_id;

        return $this;
    }

    public function getOvertime(): ?float
    {
        return $this->overtime;
    }

    public function setOvertime(?float $overtime): static
    {
        $this->overtime = $overtime;

        return $this;
    }

    public function isOvertimeApproved(): ?bool
    {
        return $this->overtime_approved;
    }

    public function setOvertimeApproved(?bool $overtime_approved): static
    {
        $this->overtime_approved = $overtime_approved;

        return $this;
    }

    public function getUndertime(): ?float
    {
        return $this->undertime;
    }

    public function setUndertime(?float $undertime): static
    {
        $this->undertime = $undertime;

        return $this;
    }

    public function getAttendanceStatus(): ?AttendanceTypes
    {
        return $this->attendance_status;
    }

    public function setAttendanceStatus(?AttendanceTypes $attendance_status): static
    {
        $this->attendance_status = $attendance_status;

        return $this;
    }

    public function getRenderedHours(): ?float
    {
        return $this->rendered_hours;
    }

    public function setRenderedHours(?float $rendered_hours): static
    {
        $this->rendered_hours = $rendered_hours;

        return $this;
    }

    /**
     * @return Collection<int, EmpTask>
     */
    public function getEmpTasks(): Collection
    {
        return $this->empTasks;
    }

    public function addEmpTask(EmpTask $empTask): static
    {
        if (!$this->empTasks->contains($empTask)) {
            $this->empTasks->add($empTask);
            $empTask->setWorkerLogs($this);
        }

        return $this;
    }

    public function removeEmpTask(EmpTask $empTask): static
    {
        if ($this->empTasks->removeElement($empTask)) {
            // set the owning side to null (unless already changed)
            if ($empTask->getWorkerLogs() === $this) {
                $empTask->setWorkerLogs(null);
            }
        }

        return $this;
    }

    public function isTimeCalculated(): ?bool
    {
        return $this->is_time_calculated;
    }

    public function setTimeCalculated(bool $is_time_calculated): static
    {
        $this->is_time_calculated = $is_time_calculated;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return Collection<int, EmployeeOvertimeRequest>
     */
    public function getEmployeeOvertimeRequests(): Collection
    {
        return $this->employeeOvertimeRequests;
    }

    public function addEmployeeOvertimeRequest(EmployeeOvertimeRequest $employeeOvertimeRequest): static
    {
        if (!$this->employeeOvertimeRequests->contains($employeeOvertimeRequest)) {
            $this->employeeOvertimeRequests->add($employeeOvertimeRequest);
            $employeeOvertimeRequest->setWorkerLogs($this);
        }

        return $this;
    }

    public function removeEmployeeOvertimeRequest(EmployeeOvertimeRequest $employeeOvertimeRequest): static
    {
        if ($this->employeeOvertimeRequests->removeElement($employeeOvertimeRequest)) {
            // set the owning side to null (unless already changed)
            if ($employeeOvertimeRequest->getWorkerLogs() === $this) {
                $employeeOvertimeRequest->setWorkerLogs(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, DTRAdjutments>
     */
    public function getDTRAdjutments(): Collection
    {
        return $this->dTRAdjutments;
    }

    public function addDTRAdjutment(DTRAdjutments $dTRAdjutment): static
    {
        if (!$this->dTRAdjutments->contains($dTRAdjutment)) {
            $this->dTRAdjutments->add($dTRAdjutment);
            $dTRAdjutment->setWorkerLogs($this);
        }

        return $this;
    }

    public function removeDTRAdjutment(DTRAdjutments $dTRAdjutment): static
    {
        if ($this->dTRAdjutments->removeElement($dTRAdjutment)) {
            // set the owning side to null (unless already changed)
            if ($dTRAdjutment->getWorkerLogs() === $this) {
                $dTRAdjutment->setWorkerLogs(null);
            }
        }

        return $this;
    }
}
