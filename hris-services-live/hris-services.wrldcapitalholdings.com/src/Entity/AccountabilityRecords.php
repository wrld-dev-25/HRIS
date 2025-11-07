<?php

namespace App\Entity;

use App\Repository\AccountabilityRecordsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AccountabilityRecordsRepository::class)]
class AccountabilityRecords
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'accountabilityRecords')]
    private ?EmployeeRecords $employee_record = null;

    #[ORM\Column(length: 255)]
    private ?string $item_name = null;

    #[ORM\Column]
    private ?float $item_count = null;

    #[ORM\Column]
    private ?int $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmpId(): ?EmployeeRecords
    {
        return $this->employee_record;
    }

    public function setEmpId(?EmployeeRecords $employee_record): static
    {
        $this->employee_record = $employee_record;

        return $this;
    }

    public function getItemName(): ?string
    {
        return $this->item_name;
    }

    public function setItemName(string $item_name): static
    {
        $this->item_name = $item_name;

        return $this;
    }

    public function getItemCount(): ?float
    {
        return $this->item_count;
    }

    public function setItemCount(float $item_count): static
    {
        $this->item_count = $item_count;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): static
    {
        $this->status = $status;

        return $this;
    }
}
