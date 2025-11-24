<?php

namespace App\Entity;

use App\Repository\HolidayConfigRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HolidayConfigRepository::class)]
class HolidayConfig
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?float $multiplier_regular = null;

    #[ORM\Column]
    private ?float $multiplier_overtime = null;

    /**
     * @var Collection<int, YearlyHoliday>
     */
    #[ORM\OneToMany(targetEntity: YearlyHoliday::class, mappedBy: 'holiday_config')]
    private Collection $yearlyHolidays;

    #[ORM\Column(nullable: true)]
    private ?bool $archived = null;

    public function __construct()
    {
        $this->yearlyHolidays = new ArrayCollection();
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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getMultiplierRegular(): ?float
    {
        return $this->multiplier_regular;
    }

    public function setMultiplierRegular(float $multiplier_regular): static
    {
        $this->multiplier_regular = $multiplier_regular;

        return $this;
    }

    public function getMultiplierOvertime(): ?float
    {
        return $this->multiplier_overtime;
    }

    public function setMultiplierOvertime(float $multiplier_overtime): static
    {
        $this->multiplier_overtime = $multiplier_overtime;

        return $this;
    }

    /**
     * @return Collection<int, YearlyHoliday>
     */
    public function getYearlyHolidays(): Collection
    {
        return $this->yearlyHolidays;
    }

    public function addYearlyHoliday(YearlyHoliday $yearlyHoliday): static
    {
        if (!$this->yearlyHolidays->contains($yearlyHoliday)) {
            $this->yearlyHolidays->add($yearlyHoliday);
            $yearlyHoliday->setHolidayConfig($this);
        }

        return $this;
    }

    public function removeYearlyHoliday(YearlyHoliday $yearlyHoliday): static
    {
        if ($this->yearlyHolidays->removeElement($yearlyHoliday)) {
            // set the owning side to null (unless already changed)
            if ($yearlyHoliday->getHolidayConfig() === $this) {
                $yearlyHoliday->setHolidayConfig(null);
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
}
