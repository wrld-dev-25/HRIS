<?php

namespace App\Entity;

use App\Repository\EmployeeProjectsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: EmployeeProjectsRepository::class)]
class EmployeeProjects
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['emp_projects','emp_projects_list','emp_proj_list'])]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'employeeProjects')]
    #[Groups(['emp_proj_list'])]
    private ?Project $project = null;

    #[ORM\ManyToOne(inversedBy: 'employeeProjects')]
    #[Groups(['emp_projects','emp_projects_list','emp_proj_list'])]
    private ?EmployeeRecords $employee = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Groups(['emp_projects','emp_projects_list','emp_proj_list'])]
    private ?\DateTimeInterface $Date = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['emp_projects','emp_projects_list','emp_proj_list'])]
    private ?int $rendered_hours = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['emp_projects','emp_projects_list','emp_proj_list'])]
    private ?string $task = null;

    /**
     * @var Collection<int, EmpTask>
     */
    #[ORM\OneToMany(targetEntity: EmpTask::class, mappedBy: 'emp_project')]
    #[Groups(['emp_projects','emp_proj_list'])]
    private Collection $empTasks;

    #[ORM\Column(nullable: true)]
    #[Groups(['emp_projects','emp_projects_list','emp_proj_list'])]
    private ?bool $archived = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['emp_projects','emp_projects_list','emp_proj_list'])]
    public ?bool $is_assigned = null;


    public function __construct()
    {
        $this->empTasks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): static
    {
        $this->project = $project;

        return $this;
    }

    public function getEmployee(): ?EmployeeRecords
    {
        return $this->employee;
    }

    public function setEmployee(?EmployeeRecords $employee): static
    {
        $this->employee = $employee;
        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(?\DateTimeInterface $Date): static
    {
        $this->Date = $Date;
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

    public function getTask(): ?string
    {
        return $this->task;
    }

    public function setTask(?string $task): static
    {
        $this->task = $task;

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
            $empTask->setEmpProject($this);
        }

        return $this;
    }

    public function removeEmpTask(EmpTask $empTask): static
    {
        if ($this->empTasks->removeElement($empTask)) {
            // set the owning side to null (unless already changed)
            if ($empTask->getEmpProject() === $this) {
                $empTask->setEmpProject(null);
            }
        }

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

    public function isAssigned(): ?bool
    {
        return $this->is_assigned;
    }

    public function setAssigned(?bool $is_assigned): static
    {
        $this->is_assigned = $is_assigned;

        return $this;
    }
}
