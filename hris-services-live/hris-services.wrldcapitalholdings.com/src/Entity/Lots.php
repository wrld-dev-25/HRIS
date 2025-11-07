<?php

namespace App\Entity;

use App\Repository\LotsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
#[ORM\Entity(repositoryClass: LotsRepository::class)]
class Lots
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['blocks'])]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'lots')]
    private ?Blocks $blocks = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['blocks'])]
    private ?int $lot_num = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['blocks'])]
    private ?string $lot_name = null;

    #[ORM\OneToOne(mappedBy: 'lots', cascade: ['persist', 'remove'])]
    private ?Category $category = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLotNum(): ?int
    {
        return $this->lot_num;
    }

    public function setLotNum(?int $lot_num): static
    {
        $this->lot_num = $lot_num;

        return $this;
    }

    public function getLotName(): ?string
    {
        return $this->lot_name;
    }

    public function setLotName(?string $lot_name): static
    {
        $this->lot_name = $lot_name;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        // unset the owning side of the relation if necessary
        if ($category === null && $this->category !== null) {
            $this->category->setLots(null);
        }

        // set the owning side of the relation if necessary
        if ($category !== null && $category->getLots() !== $this) {
            $category->setLots($this);
        }

        $this->category = $category;

        return $this;
    }
}
