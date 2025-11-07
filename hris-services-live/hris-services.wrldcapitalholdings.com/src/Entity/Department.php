<?php

namespace App\Entity;

use App\Repository\DepartmentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
#[ORM\Entity(repositoryClass: DepartmentRepository::class)]
class Department
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['employee'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['employee'])]
    private ?string $code = null;

    #[ORM\Column(length: 255)]
    #[Groups(['employee'])]
    private ?string $name = null;

    #[ORM\ManyToOne]
    #[Groups(['employee'])]
    private ?user $manager = null;

    /**
     * @var Collection<int, EmployeeRecords>
     */
    #[ORM\OneToMany(targetEntity: EmployeeRecords::class, mappedBy: 'department')]
    private Collection $employeeRecords;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'departments')]
    private ?Division $division = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isArchived = null;

    /**
     * @var Collection<int, LeavePolicy>
     */
    #[ORM\OneToMany(targetEntity: LeavePolicy::class, mappedBy: 'department')]
    private Collection $leavePolicies;

    /**
     * @var Collection<int, Notifications>
     */
    #[ORM\OneToMany(targetEntity: Notifications::class, mappedBy: 'recipient_department')]
    private Collection $recipient_division;

    public function __construct()
    {
        $this->employeeRecords = new ArrayCollection();
        $this->leavePolicies = new ArrayCollection();
        $this->recipient_division = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
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

    public function getManager(): ?user
    {
        return $this->manager;
    }

    public function setManager(?user $manager): static
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * @return Collection<int, EmployeeRecords>
     */
    public function getEmployeeRecords(): Collection
    {
        return $this->employeeRecords;
    }

    public function addEmployeeRecord(EmployeeRecords $employeeRecord): static
    {
        if (!$this->employeeRecords->contains($employeeRecord)) {
            $this->employeeRecords->add($employeeRecord);
            $employeeRecord->setDepartment($this);
        }

        return $this;
    }

    public function removeEmployeeRecord(EmployeeRecords $employeeRecord): static
    {
        if ($this->employeeRecords->removeElement($employeeRecord)) {
            // set the owning side to null (unless already changed)
            if ($employeeRecord->getDepartment() === $this) {
                $employeeRecord->setDepartment(null);
            }
        }

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

    public function getDivision(): ?Division
    {
        return $this->division;
    }

    public function setDivision(?Division $division): static
    {
        $this->division = $division;

        return $this;
    }

    public function isArchived(): ?bool
    {
        return $this->isArchived;
    }

    public function setArchived(?bool $isArchived): static
    {
        $this->isArchived = $isArchived;

        return $this;
    }

    /**
     * @return Collection<int, LeavePolicy>
     */
    public function getLeavePolicies(): Collection
    {
        return $this->leavePolicies;
    }

    public function addLeavePolicy(LeavePolicy $leavePolicy): static
    {
        if (!$this->leavePolicies->contains($leavePolicy)) {
            $this->leavePolicies->add($leavePolicy);
            $leavePolicy->setDepartment($this);
        }

        return $this;
    }

    public function removeLeavePolicy(LeavePolicy $leavePolicy): static
    {
        if ($this->leavePolicies->removeElement($leavePolicy)) {
            // set the owning side to null (unless already changed)
            if ($leavePolicy->getDepartment() === $this) {
                $leavePolicy->setDepartment(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Notifications>
     */
    public function getRecipientDivision(): Collection
    {
        return $this->recipient_division;
    }

    public function addRecipientDivision(Notifications $recipientDivision): static
    {
        if (!$this->recipient_division->contains($recipientDivision)) {
            $this->recipient_division->add($recipientDivision);
            $recipientDivision->setRecipientDepartment($this);
        }

        return $this;
    }

    public function removeRecipientDivision(Notifications $recipientDivision): static
    {
        if ($this->recipient_division->removeElement($recipientDivision)) {
            // set the owning side to null (unless already changed)
            if ($recipientDivision->getRecipientDepartment() === $this) {
                $recipientDivision->setRecipientDepartment(null);
            }
        }

        return $this;
    }
}
