<?php

namespace App\Entity;

use App\Repository\SubdivisionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubdivisionRepository::class)]
class Subdivision
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $subdivision_code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;
    
    #[ORM\Column(nullable: true)]
    private ?bool $archived = null;

    /**
     * @var Collection<int, project>
     */
    #[ORM\OneToMany(targetEntity: Project::class, mappedBy: 'subdivision')]
    private Collection $project;

    #[ORM\Column(length: 255)]
    private ?string $location = null;

    /**
     * @var Collection<int, Phase>
     */
    #[ORM\OneToMany(targetEntity: Phase::class, mappedBy: 'subdivision')]
    private Collection $phases;

    #[ORM\Column]
    private ?int $total_lots = null;

    public function __construct()
    {
        $this->project = new ArrayCollection();
        $this->phases = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubdivisionCode(): ?string
    {
        return $this->subdivision_code;
    }

    public function setSubdivisionCode(string $subdivision_code): static
    {
        $this->subdivision_code = $subdivision_code;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

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

    /**
     * @return Collection<int, project>
     */
    public function getProject(): Collection
    {
        return $this->project;
    }

    public function addProject(project $project): static
    {
        if (!$this->project->contains($project)) {
            $this->project->add($project);
            $project->setSubdivision($this);
        }

        return $this;
    }

    public function removeProject(project $project): static
    {
        if ($this->project->removeElement($project)) {
            // set the owning side to null (unless already changed)
            if ($project->getSubdivision() === $this) {
                $project->setSubdivision(null);
            }
        }

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): static
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return Collection<int, Phase>
     */
    public function getPhases(): Collection
    {
        return $this->phases;
    }

    public function addPhase(Phase $phase): static
    {
        if (!$this->phases->contains($phase)) {
            $this->phases->add($phase);
            $phase->setSubdivision($this);
        }

        return $this;
    }

    public function removePhase(Phase $phase): static
    {
        if ($this->phases->removeElement($phase)) {
            // set the owning side to null (unless already changed)
            if ($phase->getSubdivision() === $this) {
                $phase->setSubdivision(null);
            }
        }

        return $this;
    }

    public function getTotalLots(): ?int
    {
        return $this->total_lots;
    }

    public function setTotalLots(int $total_lots): static
    {
        $this->total_lots = $total_lots;

        return $this;
    }

    public function getRemainingLots(): int
    {
        $totalUsedLots = 0;
        foreach ($this->getPhases() as $phase) {
            if (!$phase->isArchived()) {
                $totalUsedLots += $phase->getUsedLots();
            }
        }
        return ($this->getTotalLots() - $totalUsedLots);
    }

}
