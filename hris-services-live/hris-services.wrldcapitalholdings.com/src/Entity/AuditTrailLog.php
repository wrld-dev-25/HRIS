<?php

namespace App\Entity;

use App\Repository\AuditTrailLogRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuditTrailLogRepository::class)]
class AuditTrailLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ip_address = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $transactions = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[ORM\JoinColumn(nullable:true)]
    private ?\DateTimeInterface $datetime = null;

    #[ORM\ManyToOne(inversedBy: 'auditTrailLogs')]
    private ?user $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIpAddress(): ?string
    {
        return $this->ip_address;
    }

    public function setIpAddress(?string $ip_address): static
    {
        $this->ip_address = $ip_address;

        return $this;
    }

    public function getTransactions(): ?string
    {
        return $this->transactions;
    }

    public function setTransactions(?string $transactions): static
    {
        $this->transactions = $transactions;

        return $this;
    }

    public function getDatetime(): ?\DateTimeInterface
    {
        return $this->datetime;
    }

    public function setDatetime(\DateTimeInterface $datetime): static
    {
        $this->datetime = $datetime;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): static
    {
        $this->user = $user;

        return $this;
    }
}
