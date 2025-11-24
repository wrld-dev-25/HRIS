<?php

namespace App\Entity;

use App\Repository\NotificationsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NotificationsRepository::class)]
class Notifications
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'recipient_division')]
    private ?Department $recipient_department = null;

    #[ORM\ManyToOne(inversedBy: 'notifications')]
    private ?Division $recipient_division = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $action = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $datetime = null;

    #[ORM\Column(nullable: true)]
    private ?int $notification_type = null;

    #[ORM\ManyToOne(inversedBy: 'notifications')]
    private ?EmployeeRecords $recipient_employee_record = null;

    #[ORM\ManyToOne(inversedBy: 'sender_notifications')]
    private ?EmployeeRecords $sender_employee_record = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRecipientDepartment(): ?Department
    {
        return $this->recipient_department;
    }

    public function setRecipientDepartment(?Department $recipient_department): static
    {
        $this->recipient_department = $recipient_department;

        return $this;
    }

    public function getRecipientDivision(): ?Division
    {
        return $this->recipient_division;
    }

    public function setRecipientDivision(?Division $recipient_division): static
    {
        $this->recipient_division = $recipient_division;

        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): static
    {
        $this->action = $action;

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

    public function getDatetime(): ?\DateTimeInterface
    {
        return $this->datetime;
    }

    public function setDatetime(?\DateTimeInterface $datetime): static
    {
        $this->datetime = $datetime;

        return $this;
    }

    public function getNotificationType(): ?int
    {
        return $this->notification_type;
    }

    public function setNotificationType(?int $notification_type): static
    {
        $this->notification_type = $notification_type;

        return $this;
    }

    public function getRecipientEmployeeRecord(): ?EmployeeRecords
    {
        return $this->recipient_employee_record;
    }

    public function setRecipientEmployeeRecord(?EmployeeRecords $recipient_employee_record): static
    {
        $this->recipient_employee_record = $recipient_employee_record;

        return $this;
    }

    public function getSenderEmployeeRecord(): ?EmployeeRecords
    {
        return $this->sender_employee_record;
    }

    public function setSenderEmployeeRecord(?EmployeeRecords $sender_employee_record): static
    {
        $this->sender_employee_record = $sender_employee_record;

        return $this;
    }
}
