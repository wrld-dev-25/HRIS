<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: UserRepository::class)]
// #[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['employee'])]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    #[Groups(['employee'])]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    /**
     * @var string|null
     */
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $firstName = null;

    /**
     * @var string|null
     */
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $middleName = null;

    /**
     * @var string|null
     */
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $lastName = null;

    /**
     * @var \DateTimeInterface|null
     */
    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $birthdate = null;

    /**
     * @var string|null
     */
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $gender = null;

    /**
     * @var string|null
     */
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $address = null;

    /**
     * @var string|null
     */
    #[ORM\Column(type: 'string', length: 50, nullable: true)]
    #[Groups(['employee'])]
    private ?string $contactNum = null;

    /**
     * @var string|null
     */
    #[ORM\Column(type: 'string', length: 999, nullable: true)]
    private ?string $biometricData = null;

    /**
     * @var int|null
     */
    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $status = null;

    /**
     * @var string
     */
    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private string $userId;

    #[ORM\Column(type: 'integer')]
    private int $removed = 0;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $profilePhoto = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $block = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $lot = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $phase = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $street = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $city = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $province = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $country = null;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $zip = null;

    // #[ORM\OneToMany(targetEntity: Projects::class, mappedBy: 'createdBy')]
    // private $projects;

    // #[ORM\OneToMany(targetEntity: ProjectDocs::class, mappedBy: 'owner')]
    // private $projectDocs;

    // #[ORM\OneToMany(targetEntity: ProjectComments::class, mappedBy: 'createdBy')]
    // private $projectComments;

    // #[ORM\OneToMany(targetEntity: FacilitiesRepair::class, mappedBy: 'requestedBy')]
    // private $facilitiesRepairs;

    // #[ORM\OneToMany(targetEntity: IncidentReports::class, mappedBy: 'reportedBy')]
    // private $incidentReports;

    // #[ORM\OneToMany(targetEntity: IncidentReportDocs::class, mappedBy: 'owner')]
    // private $incidentReportDocs;

    // #[ORM\OneToMany(targetEntity: FacilitiesRepairComments::class, mappedBy: 'createdBy')]
    // private $FacilitiesRepairComments;

    // #[ORM\OneToMany(targetEntity: Tickets::class, mappedBy: 'requester')]
    // private $ticketsRequested;

    // #[ORM\OneToMany(targetEntity: Tickets::class, mappedBy: 'assignee')]
    // private $ticketsAssigned;

    // #[ORM\OneToMany(targetEntity: TicketComments::class, mappedBy: 'createdBy')]
    // private $ticketComments;

    // #[ORM\OneToMany(targetEntity: TicketsAssigneeHistory::class, mappedBy: 'assignee')]
    // private $ticketsAssigneeHistories;

    // #[ORM\OneToMany(targetEntity: Tickets::class, mappedBy: 'endorsedTo')]
    // private $endorsedTickets;

    // #[ORM\OneToMany(targetEntity: Logs::class, mappedBy: 'userId')]
    // private $logs;

    // #[ORM\OneToMany(targetEntity: Vehicles::class, mappedBy: 'user')]
    // private $vehicles;

    // #[ORM\OneToMany(targetEntity: MonthlyDues::class, mappedBy: 'user')]
    // private $monthlyDues;

    // #[ORM\OneToMany(targetEntity: PropertyDocs::class, mappedBy: 'uploadedBy')]
    // private $propertyDocs;

    #[ORM\Column(type: 'integer', nullable: true)]
    private ?int $loginCount = 0;

    #[ORM\ManyToOne(inversedBy: 'users')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['employee'])]
    private ?UserType $user_type = null;

    /**
     * @var Collection<int, AuditTrailLog>
     */
    #[ORM\OneToMany(targetEntity: AuditTrailLog::class, mappedBy: 'user')]
    private Collection $auditTrailLogs;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee'])]
    private ?string $username = null;

    #[ORM\OneToOne(mappedBy: 'user', cascade: ['persist', 'remove'])]
    #[Groups(['employee_user'])]
    private ?EmployeeRecords $employeeRecords = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee'])]
    private ?bool $archived = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee'])]
    private ?bool $is_straight_time = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee'])]
    private ?bool $is_assignable_proj = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    #[Groups(['employee','emp_projects'])]
    private ?Shifts $emp_shift = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee'])]
    public ?bool $is_active = true;

    #[ORM\Column(length: 1000, nullable: true)]
    private ?string $reset_token = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $token_expiry = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee'])]
    private ?bool $is_worker = null;

    public function __construct()
    {
        $this->auditTrailLogs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getBirthdate(): ?\DateTimeInterface
    {
        return $this->birthdate;
    }

    public function setBirthdate(?\DateTimeInterface $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getContactNum(): ?string
    {
        return $this->contactNum;
    }

    public function setContactNum(?string $contactNum): self
    {
        $this->contactNum = $contactNum;

        return $this;
    }

    public function getBiometricData(): ?string
    {
        return $this->biometricData;
    }

    public function setBiometricData(?string $biometricData): self
    {
        $this->biometricData = $biometricData;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getRemoved(): int
    {
        return $this->removed;
    }

    public function setRemoved(int $removed): self
    {
        $this->removed = $removed;

        return $this;
    }

    public function getProfilePhoto(): ?string
    {
        return $this->profilePhoto;
    }

    public function setProfilePhoto(?string $profilePhoto): self
    {
        $this->profilePhoto = $profilePhoto;

        return $this;
    }

    public function getLoginCount(): ?int
    {
        return $this->loginCount;
    }

    public function setLoginCount(?int $loginCount): self
    {
        $this->loginCount = $loginCount;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getUserType(): ?UserType
    {
        return $this->user_type;
    }

    public function setUserType(?UserType $user_type): static
    {
        $this->user_type = $user_type;

        return $this;
    }

    /**
     * @return Collection<int, AuditTrailLog>
     */
    public function getAuditTrailLogs(): Collection
    {
        return $this->auditTrailLogs;
    }

    public function addAuditTrailLog(AuditTrailLog $auditTrailLog): static
    {
        if (!$this->auditTrailLogs->contains($auditTrailLog)) {
            $this->auditTrailLogs->add($auditTrailLog);
            $auditTrailLog->setUser($this);
        }

        return $this;
    }

    public function removeAuditTrailLog(AuditTrailLog $auditTrailLog): static
    {
        if ($this->auditTrailLogs->removeElement($auditTrailLog)) {
            // set the owning side to null (unless already changed)
            if ($auditTrailLog->getUser() === $this) {
                $auditTrailLog->setUser(null);
            }
        }

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getEmployeeRecords(): ?EmployeeRecords
    {
        return $this->employeeRecords;
    }

    public function setEmployeeRecords(EmployeeRecords $employeeRecords): static
    {
        // set the owning side of the relation if necessary
        if ($employeeRecords->getUser() !== $this) {
            $employeeRecords->setUser($this);
        }

        $this->employeeRecords = $employeeRecords;

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

    public function isStraightTime(): ?bool
    {
        return $this->is_straight_time;
    }

    public function setStraightTime(?bool $is_straight_time): static
    {
        $this->is_straight_time = $is_straight_time;

        return $this;
    }

    public function isAssignableProj(): ?bool
    {
        return $this->is_assignable_proj;
    }

    public function setAssignableProj(?bool $is_assignable_proj): static
    {
        $this->is_assignable_proj = $is_assignable_proj;

        return $this;
    }

    public function getEmpShift(): ?Shifts
    {
        return $this->emp_shift;
    }

    public function setEmpShift(?Shifts $emp_shift): static
    {
        $this->emp_shift = $emp_shift;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->is_active;
    }

    public function setActive(?bool $is_active): static
    {
        $this->is_active = $is_active;

        return $this;
    }

    public function getResetToken(): ?string
    {
        return $this->reset_token;
    }

    public function setResetToken(?string $reset_token): static
    {
        $this->reset_token = $reset_token;

        return $this;
    }

    public function getTokenExpiry(): ?\DateTimeInterface
    {
        return $this->token_expiry;
    }

    public function setTokenExpiry(?\DateTimeInterface $token_expiry): static
    {
        $this->token_expiry = $token_expiry;

        return $this;
    }

    public function isWorker(): ?bool
    {
        return $this->is_worker;
    }

    public function setWorker(?bool $is_worker): static
    {
        $this->is_worker = $is_worker;

        return $this;
    }
}
