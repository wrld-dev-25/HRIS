<?php

namespace App\Entity;

use App\Repository\DivisionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
#[ORM\Entity(repositoryClass: DivisionRepository::class)]
class Division
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
    // #[Groups(['employee'])]
    private ?EmployeeRecords $director = null;

    /**
     * @var Collection<int, EmployeeRecords>
     */
    #[ORM\OneToMany(targetEntity: EmployeeRecords::class, mappedBy: 'division')]
    private Collection $employeeRecords;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    /**
     * @var Collection<int, Department>
     */
    #[ORM\OneToMany(targetEntity: Department::class, mappedBy: 'division')]
    private Collection $departments;

    #[ORM\Column(nullable: true)]
    private ?bool $isArchived = null;

    /**
     * @var Collection<int, Notifications>
     */
    #[ORM\OneToMany(targetEntity: Notifications::class, mappedBy: 'recipient_division')]
    private Collection $notifications;

    public function __construct()
    {
        $this->employeeRecords = new ArrayCollection();
        $this->departments = new ArrayCollection();
        $this->notifications = new ArrayCollection();
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

    public function getDirector(): ?EmployeeRecords
    {
        return $this->director;
    }

    public function setDirector(?EmployeeRecords $director): static
    {
        $this->director = $director;

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
            $employeeRecord->setDivision($this);
        }

        return $this;
    }

    public function removeEmployeeRecord(EmployeeRecords $employeeRecord): static
    {
        if ($this->employeeRecords->removeElement($employeeRecord)) {
            // set the owning side to null (unless already changed)
            if ($employeeRecord->getDivision() === $this) {
                $employeeRecord->setDivision(null);
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

    /**
     * @return Collection<int, Department>
     */
    public function getDepartments(): Collection
    {
        return $this->departments;
    }

    public function addDepartment(Department $department): static
    {
        if (!$this->departments->contains($department)) {
            $this->departments->add($department);
            $department->setDivision($this);
        }

        return $this;
    }

    public function removeDepartment(Department $department): static
    {
        if ($this->departments->removeElement($department)) {
            // set the owning side to null (unless already changed)
            if ($department->getDivision() === $this) {
                $department->setDivision(null);
            }
        }

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
     * @return Collection<int, Notifications>
     */
    public function getNotifications(): Collection
    {
        return $this->notifications;
    }

    public function addNotification(Notifications $notification): static
    {
        if (!$this->notifications->contains($notification)) {
            $this->notifications->add($notification);
            $notification->setRecipientDivision($this);
        }

        return $this;
    }

    public function removeNotification(Notifications $notification): static
    {
        if ($this->notifications->removeElement($notification)) {
            // set the owning side to null (unless already changed)
            if ($notification->getRecipientDivision() === $this) {
                $notification->setRecipientDivision(null);
            }
        }

        return $this;
    }
}
