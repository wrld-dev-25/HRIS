<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['blocks'])]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['blocks'])]
    private ?string $code = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['blocks'])]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['blocks'])]
    private ?string $location = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['blocks'])]
    private ?int $block = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['blocks'])]
    private ?int $lot = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['blocks'])]
    private ?bool $archived = null;

    #[ORM\ManyToOne(inversedBy: 'categories')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Project $project = null;

    #[ORM\ManyToOne(inversedBy: 'categories')]
    private ?Model $model = null;

    #[ORM\ManyToOne(inversedBy: 'categories')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Phase $phase = null;

    #[ORM\ManyToOne(inversedBy: 'categories')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Blocks $blocks = null;

    #[ORM\ManyToOne(inversedBy: 'categories')]
    private ?Owner $owner = null;

    #[ORM\OneToOne(inversedBy: 'category', cascade: ['persist', 'remove'])]
    private ?Lots $lots = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isOverhead = null;

    public function __construct()
    {
        
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

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

    public function getBlock(): ?string
    {
        return $this->block;
    }

    public function setBlock(?string $block): static
    {
        $this->block = $block;

        return $this;
    }

    public function getLot(): ?string
    {
        return $this->lot;
    }

    public function setLot(?string $lot): static
    {
        $this->lot = $lot;

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

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): static
    {
        $this->project = $project;

        return $this;
    }

    public function getModel(): ?Model
    {
        return $this->model;
    }

    public function setModel(?Model $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getPhase(): ?Phase
    {
        return $this->phase;
    }

    public function setPhase(?Phase $phase): static
    {
        $this->phase = $phase;

        return $this;
    }

    public function getBlocks(): ?Blocks
    {
        return $this->blocks;
    }

    public function setBlocks(?Blocks $blocks): static
    {
        $this->blocks = $blocks;

        return $this;
    }

    public function getOwner(): ?Owner
    {
        return $this->owner;
    }

    public function setOwner(?Owner $owner): static
    {
        $this->owner = $owner;

        return $this;
    }

    public function getLots(): ?Lots
    {
        return $this->lots;
    }

    public function setLots(?Lots $lots): static
    {
        $this->lots = $lots;

        return $this;
    }

    public function isOverhead(): ?bool
    {
        return $this->isOverhead;
    }

    public function setOverhead(?bool $isOverhead): static
    {
        $this->isOverhead = $isOverhead;

        return $this;
    }

}
