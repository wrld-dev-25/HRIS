<?php

namespace App\Entity;

use App\Repository\BlocksRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BlocksRepository::class)]
class Blocks
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'blocks')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['blocks'])]
    private ?Phase $phase = null;

    #[ORM\Column(length: 255)]
    #[Groups(['blocks'])]
    private ?string $block_name = null;

    #[ORM\Column]
    #[Groups(['blocks'])]
    private ?int $total_lots = null;

    /**
     * @var Collection<int, Category>
     */
    #[ORM\OneToMany(targetEntity: Category::class, mappedBy: 'blocks')]
    #[Groups(['blocks'])]
    private Collection $categories;

    /**
     * @var Collection<int, Lots>
     */
    #[ORM\OneToMany(targetEntity: Lots::class, mappedBy: 'blocks')]
    #[Groups(['blocks'])]
    private Collection $lots;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->lots = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getBlockName(): ?string
    {
        return $this->block_name;
    }

    public function setBlockName(string $block_name): static
    {
        $this->block_name = $block_name;

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
            $category->setBlocks($this);
        }

        return $this;
    }

    public function removeCategory(Category $category): static
    {
        if ($this->categories->removeElement($category)) {
            // set the owning side to null (unless already changed)
            if ($category->getBlocks() === $this) {
                $category->setBlocks(null);
            }
        }
        return $this;
    }
    
    // src/Entity/Block.php

    public function getUsedLots(): int
    {
        return count($this->getLots()); // Counting the actual lots in this block
    }

    public function getRemainingLots() : int
    {
        $usedLots = $this->getUsedLots();
        $remainingLots = $this->getTotalLots() - $usedLots;
        return $remainingLots ;
    }

    /**
     * @return Collection<int, Lots>
     */
    public function getLots(): Collection
    {
        return $this->lots;
    }

    public function addLot(Lots $lot): static
    {
        if (!$this->lots->contains($lot)) {
            $this->lots->add($lot);
            $lot->setBlocks($this);
        }

        return $this;
    }

    public function removeLot(Lots $lot): static
    {
        if ($this->lots->removeElement($lot)) {
            // set the owning side to null (unless already changed)
            if ($lot->getBlocks() === $this) {
                $lot->setBlocks(null);
            }
        }

        return $this;
    }

}
