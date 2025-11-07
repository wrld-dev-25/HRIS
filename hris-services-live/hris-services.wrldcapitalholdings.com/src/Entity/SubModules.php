<?php

namespace App\Entity;

use App\Repository\SubModulesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: SubModulesRepository::class)]
class SubModules
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['user_permissions'])]
    private ?int $id = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $daily_time_record = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $subdivision = null;

    #[ORM\OneToOne(mappedBy: 'submodule', cascade: ['persist', 'remove'])]
    private ?MainModules $mainModules = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $division = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $department = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $phase = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $owner = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $models = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $model_types = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $emp_settings = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $shifts = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $projects = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $emp_project = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $emp_list = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $sss_config = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $pagibig_config = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $bir_config = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $philhealth_config = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $payroll = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $payroll_reports = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $leave_policy = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $emp_leaves = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $holiday_config = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $leave_request = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $leave_calendar = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDailyTimeRecord(): ?array
    {
        return $this->daily_time_record;
    }

    public function setDailyTimeRecord(?array $daily_time_record): static
    {
        $this->daily_time_record = $daily_time_record;

        return $this;
    }

    public function getSubdivision(): ?array
    {
        return $this->subdivision;
    }

    public function setSubdivision(?array $subdivision): static
    {
        $this->subdivision = $subdivision;

        return $this;
    }

    public function getMainModules(): ?MainModules
    {
        return $this->mainModules;
    }

    public function setMainModules(?MainModules $mainModules): static
    {
        // unset the owning side of the relation if necessary
        if ($mainModules === null && $this->mainModules !== null) {
            $this->mainModules->setSubmodule(null);
        }

        // set the owning side of the relation if necessary
        if ($mainModules !== null && $mainModules->getSubmodule() !== $this) {
            $mainModules->setSubmodule($this);
        }

        $this->mainModules = $mainModules;

        return $this;
    }

    public function setPermissions(
        array $daily_time_record = null, 
        array $subdivision = null, 
        array $division = null, 
        array $department = null, 
        array $phase = null, 
        array $owner = null, 
        array $models = null, 
        array $model_types = null, 
        array $emp_settings = null, 
        array $shifts = null, 
        array $projects = null, 
        array $emp_project = null,
        array $emp_list = null,

        array $sss_config           = null, 
        array $pagibig_config       = null, 
        array $bir_config           = null, 
        array $philhealth_config    = null, 
        array $payroll              = null, 
        array $payroll_reports      = null, 
        array $leave_policy         = null, 
        array $emp_leaves           = null, 
        array $holiday_config       = null, 
        array $leave_request        = null, 
        array $leave_calendar       = null, 

    ): static {
        $defaultPermissions = [
            'can_view' => false,
            'can_add' => false,
            'can_edit' => false,
            'can_delete' => false,
        ];
    
        $this->daily_time_record             = $daily_time_record ?? $defaultPermissions;
        $this->subdivision                   = $subdivision ?? $defaultPermissions;
        $this->division                      = $division ?? $defaultPermissions;
        $this->department                    = $department ?? $defaultPermissions;
        $this->phase                         = $phase ?? $defaultPermissions;
        $this->owner                         = $owner ?? $defaultPermissions;
        $this->models                        = $models ?? $defaultPermissions;
        $this->model_types                   = $model_types ?? $defaultPermissions;
        $this->emp_settings                  = $emp_settings ?? $defaultPermissions;
        $this->shifts                        = $shifts ?? $defaultPermissions;
        $this->projects                      = $projects ?? $defaultPermissions;
        $this->emp_project                   = $emp_project ?? $defaultPermissions;
        $this->emp_list                      = $emp_list ?? $defaultPermissions;

        $this->sss_config                    = $sss_config           ?? $defaultPermissions;
        $this->pagibig_config                = $pagibig_config       ?? $defaultPermissions;
        $this->bir_config                    = $bir_config           ?? $defaultPermissions;
        $this->philhealth_config             = $philhealth_config    ?? $defaultPermissions;
        $this->payroll                       = $payroll              ?? $defaultPermissions;
        $this->payroll_reports               = $payroll_reports      ?? $defaultPermissions;
        $this->leave_policy                  = $leave_policy         ?? $defaultPermissions;
        $this->emp_leaves                    = $emp_leaves           ?? $defaultPermissions;
        $this->holiday_config                = $holiday_config       ?? $defaultPermissions;
        $this->leave_request                 = $leave_request        ?? $defaultPermissions;
        $this->leave_calendar                = $leave_calendar       ?? $defaultPermissions;
    
        return $this;
    }
    

    public function getDivision(): ?array
    {
        return $this->division;
    }

    public function setDivision(?array $division): static
    {
        $this->division = $division;

        return $this;
    }

    public function getDepartment(): ?array
    {
        return $this->department;
    }

    public function setDepartment(?array $department): static
    {
        $this->department = $department;

        return $this;
    }

    public function getPhase(): ?array
    {
        return $this->phase;
    }

    public function setPhase(?array $phase): static
    {
        $this->phase = $phase;

        return $this;
    }

    public function getOwner(): ?array
    {
        return $this->owner;
    }

    public function setOwner(?array $owner): static
    {
        $this->owner = $owner;

        return $this;
    }

    public function getModels(): ?array
    {
        return $this->models;
    }

    public function setModels(?array $models): static
    {
        $this->models = $models;

        return $this;
    }

    public function getModelTypes(): ?array
    {
        return $this->model_types;
    }

    public function setModelTypes(?array $model_types): static
    {
        $this->model_types = $model_types;

        return $this;
    }

    public function getEmpSettings(): ?array
    {
        return $this->emp_settings;
    }

    public function setEmpSettings(?array $emp_settings): static
    {
        $this->emp_settings = $emp_settings;

        return $this;
    }

    public function getShifts(): ?array
    {
        return $this->shifts;
    }

    public function setShifts(?array $shifts): static
    {
        $this->shifts = $shifts;

        return $this;
    }

    public function getProjects(): ?array
    {
        return $this->projects;
    }

    public function setProjects(?array $projects): static
    {
        $this->projects = $projects;

        return $this;
    }

    public function getEmpProject(): ?array
    {
        return $this->emp_project;
    }

    public function setEmpProject(?array $emp_project): static
    {
        $this->emp_project = $emp_project;

        return $this;
    }

    public function getEmpList(): ?array
    {
        return $this->emp_list;
    }

    public function setEmpList(?array $emp_list): static
    {
        $this->emp_list = $emp_list;

        return $this;
    }

    public function getSssConfig(): ?array
    {
        return $this->sss_config;
    }

    public function setSssConfig(?array $sss_config): static
    {
        $this->sss_config = $sss_config;

        return $this;
    }

    public function getPagibigConfig(): ?array
    {
        return $this->pagibig_config;
    }

    public function setPagibigConfig(?array $pagibig_config): static
    {
        $this->pagibig_config = $pagibig_config;

        return $this;
    }

    public function getBirConfig(): ?array
    {
        return $this->bir_config;
    }

    public function setBirConfig(?array $bir_config): static
    {
        $this->bir_config = $bir_config;

        return $this;
    }

    public function getPhilhealthConfig(): ?array
    {
        return $this->philhealth_config;
    }

    public function setPhilhealthConfig(?array $philhealth_config): static
    {
        $this->philhealth_config = $philhealth_config;

        return $this;
    }

    public function getPayroll(): ?array
    {
        return $this->payroll;
    }

    public function setPayroll(?array $payroll): static
    {
        $this->payroll = $payroll;

        return $this;
    }

    public function getPayrollReports(): ?array
    {
        return $this->payroll_reports;
    }

    public function setPayrollReports(?array $payroll_reports): static
    {
        $this->payroll_reports = $payroll_reports;

        return $this;
    }

    public function getLeavePolicy(): ?array
    {
        return $this->leave_policy;
    }

    public function setLeavePolicy(?array $leave_policy): static
    {
        $this->leave_policy = $leave_policy;

        return $this;
    }

    public function getEmpLeaves(): ?array
    {
        return $this->emp_leaves;
    }

    public function setEmpLeaves(?array $emp_leaves): static
    {
        $this->emp_leaves = $emp_leaves;

        return $this;
    }

    public function getHolidayConfig(): ?array
    {
        return $this->holiday_config;
    }

    public function setHolidayConfig(?array $holiday_config): static
    {
        $this->holiday_config = $holiday_config;

        return $this;
    }

    public function getLeaveRequest(): ?array
    {
        return $this->leave_request;
    }

    public function setLeaveRequest(?array $leave_request): static
    {
        $this->leave_request = $leave_request;

        return $this;
    }

    public function getLeaveCalendar(): ?array
    {
        return $this->leave_calendar;
    }

    public function setLeaveCalendar(?array $leave_calendar): static
    {
        $this->leave_calendar = $leave_calendar;

        return $this;
    }
}
