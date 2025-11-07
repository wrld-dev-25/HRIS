<?php

namespace App\Entity;

use App\Repository\PayrollCalculationConfigRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PayrollCalculationConfigRepository::class)]
class PayrollCalculationConfig
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $no_hours_per_week = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoHoursPerWeek(): ?float
    {
        return $this->no_hours_per_week;
    }

    public function setNoHoursPerWeek(float $no_hours_per_week): static
    {
        $this->no_hours_per_week = $no_hours_per_week;

        return $this;
    }
}
