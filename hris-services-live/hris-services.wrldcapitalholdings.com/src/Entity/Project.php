<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['emp_projects','emp_proj_list','dtr_filter_project'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['emp_projects','emp_proj_list'])]
    private ?string $code = null;

    #[ORM\Column(length: 255)]
    #[Groups(['emp_projects','emp_proj_list','dtr_filter_project'])]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['emp_projects','emp_proj_list'])]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?bool $archived = null;

    #[ORM\ManyToOne(inversedBy: 'project')]
    private ?Subdivision $subdivision = null;

    /**
     * @var Collection<int, Category>
     */
    #[ORM\OneToMany(targetEntity: Category::class, mappedBy: 'project')]
    private Collection $categories;

    #[ORM\ManyToOne(inversedBy: 'projects')]
    private ?ProjectType $project_type = null;

    /**
     * @var Collection<int, EmployeeProjects>
     */
    #[ORM\OneToMany(targetEntity: EmployeeProjects::class, mappedBy: 'project')]
    #[Groups(['emp_projects'])]
    private Collection $employeeProjects;


    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->employeeProjects = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

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

    public function getSubdivision(): ?Subdivision
    {
        return $this->subdivision;
    }

    public function setSubdivision(?Subdivision $subdivision): static
    {
        $this->subdivision = $subdivision;

        return $this;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Category $category): static
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
            $category->setProject($this);
        }

        return $this;
    }

    public function removeCategory(Category $category): static
    {
        if ($this->categories->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getProject() === $this) {
                $category->setProject(null);
            }
        }

        return $this;
    }

    public function getProjectType(): ?ProjectType
    {
        return $this->project_type;
    }

    public function setProjectType(?ProjectType $project_type): static
    {
        $this->project_type = $project_type;

        return $this;
    }

    /**
     * @return Collection<int, EmployeeProjects>
     */
    public function getEmployeeProjects(): Collection
    {
        return $this->employeeProjects;
    }

    public function addEmployeeProject(EmployeeProjects $employeeProject): static
    {
        if (!$this->employeeProjects->contains($employeeProject)) {
            $this->employeeProjects->add($employeeProject);
            $employeeProject->setProject($this);
        }

        return $this;
    }

    public function removeEmployeeProject(EmployeeProjects $employeeProject): static
    {
        if ($this->employeeProjects->removeElement($employeeProject)) {
            // set the owning side to null (unless already changed)
            if ($employeeProject->getProject() === $this) {
                $employeeProject->setProject(null);
            }
        }

        return $this;
    }

}
