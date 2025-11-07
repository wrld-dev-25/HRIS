<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\DTRAdjutmentsRepository;
use Symfony\Component\Serializer\Attribute\Groups;

#[ORM\Entity(repositoryClass: DTRAdjutmentsRepository::class)]
class DTRAdjutments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['worker_logs'])]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'dTRAdjutments')]
    private ?WorkerLogs $worker_logs = null;

    #[ORM\ManyToOne(inversedBy: 'dTRAdjutments')]
    private ?EmployeeRecords $emp_record = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups(['worker_logs'])]
    private ?\DateTimeInterface $adjusted_date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWorkerLogs(): ?WorkerLogs
    {
        return $this->worker_logs;
    }

    public function setWorkerLogs(?WorkerLogs $worker_logs): static
    {
        $this->worker_logs = $worker_logs;

        return $this;
    }

    public function getEmpRecord(): ?EmployeeRecords
    {
        return $this->emp_record;
    }

    public function setEmpRecord(?EmployeeRecords $emp_record): static
    {
        $this->emp_record = $emp_record;

        return $this;
    }

    public function getAdjustedDate(): ?\DateTimeInterface
    {
        return $this->adjusted_date;
    }

    public function setAdjustedDate(\DateTimeInterface $adjusted_date): static
    {
        $this->adjusted_date = $adjusted_date;

        return $this;
    }
}
