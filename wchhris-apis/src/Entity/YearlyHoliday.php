<?php

namespace App\Entity;

use App\Repository\YearlyHolidayRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: YearlyHolidayRepository::class)]
class YearlyHoliday
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'yearlyHolidays')]
    #[ORM\JoinColumn(nullable: false)]
    private ?HolidayConfig $holiday_config = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $year = null;

    #[ORM\Column(nullable: true)]
    private ?bool $archived = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHolidayConfig(): ?HolidayConfig
    {
        return $this->holiday_config;
    }

    public function setHolidayConfig(?HolidayConfig $holiday_config): static
    {
        $this->holiday_config = $holiday_config;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(string $year): static
    {
        $this->year = $year;

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
