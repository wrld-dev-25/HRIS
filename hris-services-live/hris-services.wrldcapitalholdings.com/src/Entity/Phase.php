<?php

namespace App\Entity;

use App\Repository\PhaseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhaseRepository::class)]
class Phase
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['blocks'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['blocks'])]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    #[Groups(['blocks'])]
    private ?string $code = null;

    #[ORM\Column]
    #[Groups(['blocks'])]
    private ?int $total_blocks = null;

    #[ORM\Column]
    #[Groups(['blocks'])]
    private ?int $total_lots = null;

    #[ORM\ManyToOne(inversedBy: 'phases')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Subdivision $subdivision = null;

    /**
     * @var Collection<int, Category>
     */
    #[ORM\OneToMany(targetEntity: Category::class, mappedBy: 'phase')]
    private Collection $categories;

    #[ORM\Column(nullable: true)]
    #[Groups(['blocks'])]
    private ?bool $archived = null;

    /**
     * @var Collection<int, Blocks>
     */
    #[ORM\OneToMany(targetEntity: Blocks::class, mappedBy: 'phase')]
    private Collection $blocks;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->blocks = new ArrayCollection();
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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getTotalBlocks(): ?int
    {
        return $this->total_blocks;
    }

    public function setTotalBlocks(int $total_blocks): static
    {
        $this->total_blocks = $total_blocks;

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
            $category->setPhase($this);
        }

        return $this;
    }

    public function removeCategory(Category $category): static
    {
        if ($this->categories->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getPhase() === $this) {
                $category->setPhase(null);
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

    /**
     * @return Collection<int, Blocks>
     */
    public function getBlocks(): Collection
    {
        return $this->blocks;
    }

    public function addBlock(Blocks $block): static
    {
        if (!$this->blocks->contains($block)) {
            $this->blocks->add($block);
            $block->setPhase($this);
        }

        return $this;
    }

    public function removeBlock(Blocks $block): static
    {
        if ($this->blocks->removeElement($block)) {
            // set the owning side to null (unless already changed)
            if ($block->getPhase() === $this) {
                $block->setPhase(null);
            }
        }

        return $this;
    }

    public function getUsedLots(): int
    {
        $usedLots = 0;
        foreach ($this->getBlocks() as $block) {
            $usedLots += $block->getTotalLots(); // Summing total lots used in blocks
        }
        return $usedLots; // Return the accumulated total lots used
    }

    // src/Entity/Phase.php

    public function getRemainingLots(): int
    {
        $usedLots = $this->getUsedLots();
        // $remainingLots = $this->getTotalLots() - $usedLots;
        $remainingLots = $this->getTotalLots();
        return $remainingLots; // Return the calculated remaining lots
    }

}
