<?php

namespace App\Entity;

use App\Repository\EmployeeAttachmentsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: EmployeeAttachmentsRepository::class)]
class EmployeeAttachments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['employee_attachments'])]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee_attachments'])]
    private ?string $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee_attachments'])]
    private ?string $attachment_name = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee_attachments'])]
    private ?string $attachment_size = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Groups(['employee_attachments'])]
    private ?\DateTimeInterface $date_uploaded = null;

    #[ORM\ManyToOne(inversedBy: 'employeeAttachments')]
    #[Groups(['employee_attachments'])]
    private ?EmployeeRecords $employee = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee_attachments'])]
    private ?string $file = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee_attachments'])]
    private ?string $original_file_name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getAttachmentName(): ?string
    {
        return $this->attachment_name;
    }

    public function setAttachmentName(?string $attachment_name): static
    {
        $this->attachment_name = $attachment_name;

        return $this;
    }

    public function getAttachmentSize(): ?string
    {
        return $this->attachment_size;
    }

    public function setAttachmentSize(?string $attachment_size): static
    {
        $this->attachment_size = $attachment_size;

        return $this;
    }

    public function getDateUploaded(): ?\DateTimeInterface
    {
        return $this->date_uploaded;
    }

    public function setDateUploaded(?\DateTimeInterface $date_uploaded): static
    {
        $this->date_uploaded = $date_uploaded;

        return $this;
    }

    public function getEmployee(): ?EmployeeRecords
    {
        return $this->employee;
    }

    public function setEmployee(?EmployeeRecords $employee): static
    {
        $this->employee = $employee;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(?string $file): static
    {
        $this->file = $file;

        return $this;
    }

    public function getOriginalFileName(): ?string
    {
        return $this->original_file_name;
    }

    public function setOriginalFileName(?string $original_file_name): static
    {
        $this->original_file_name = $original_file_name;

        return $this;
    }
}
