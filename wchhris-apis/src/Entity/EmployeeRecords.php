<?php

namespace App\Entity;

use App\Repository\EmployeeRecordsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: EmployeeRecordsRepository::class)]
class EmployeeRecords
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['employee','worker','worker_logs','all_worker_logs','emp_projects', 'employee_additional_records', 'employee_attachments'])]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'emp_id', targetEntity: EmployeeOvertimeRequest::class)]
    private Collection $overtimeRequestsMade;

        #[ORM\OneToMany(mappedBy: 'updated_by', targetEntity: LeaveRequest::class)]
    private Collection $leaveRequestsUpdated;


    #[ORM\OneToMany(mappedBy: 'approved_by', targetEntity: EmployeeOvertimeRequest::class)]
    private Collection $overtimeRequestsApproved;

    #[ORM\Column(length: 255)]
    #[Groups(['employee','worker','worker_logs','all_worker_logs','emp_projects'])]
    private ?string $first_name = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee','worker','worker_logs','all_worker_logs','emp_projects'])]
    private ?string $middle_name = null;

    #[ORM\Column(length: 255)]
    #[Groups(['employee','worker','worker_logs','all_worker_logs','emp_projects'])]
    private ?string $last_name = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee','worker','worker_logs','all_worker_logs','emp_projects'])]
    private ?string $extension = null;

    #[ORM\Column(length: 255)]
    #[Groups(['employee','worker','worker_logs','all_worker_logs','emp_projects', 'employee_attachments'])]
    private ?string $employee_code = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups(['employee'])]
    private ?\DateTimeInterface $birthdate = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee'])]
    private ?string $birth_place = null;

    #[ORM\Column(type: Types::SMALLINT)]
    #[Groups(['employee'])]
    private ?int $age = null;

    #[ORM\Column(length: 255)]
    #[Groups(['employee'])]
    private ?string $gender = null;

    #[ORM\Column(length: 255)]
    #[Groups(['employee'])]
    private ?string $civil_status = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee'])]
    private ?string $email = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    #[Groups(['employee'])]
    private ?int $zip_code = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee'])]
    private ?string $area = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee'])]
    private ?string $present_barangay = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee'])]
    private ?string $present_city = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee'])]
    private ?bool $same_address = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee'])]
    private ?string $permanent_barangay = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee'])]
    private ?string $permanent_city = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Groups(['employee','worker'])]
    private ?\DateTimeInterface $date_hired = null;

    #[ORM\Column(length: 255)]
    #[Groups(['employee','worker'])]
    private ?string $employee_status = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee'])]
    private ?string $position = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee'])]
    private ?string $employment_type = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Groups(['employee'])]
    private ?\DateTimeInterface $contract_expiry_date = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Groups(['employee'])]
    private ?\DateTimeInterface $date_separated = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Groups(['employee'])]
    private ?\DateTimeInterface $probationary_date = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    #[Groups(['employee'])]
    private ?\DateTimeInterface $regularization_date = null;

    #[ORM\ManyToOne(inversedBy: 'employeeRecords')]
    #[Groups(['employee'])]
    private ?Division $division = null;

    #[ORM\ManyToOne(inversedBy: 'employeeRecords')]
    #[Groups(['employee'])]
    private ?Department $department = null;

    #[ORM\OneToOne(inversedBy: 'employeeRecords', cascade: ['persist', 'remove'])]
    #[Groups(['employee','emp_projects'])]
    private ?User $user = null;

    #[ORM\Column(nullable: true)]
    private ?bool $archived = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee'])]
    private ?string $telephone = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee'])]
    private ?string $cellphone = null;

    /**
     * @var Collection<int, Worker>
     */
    #[ORM\OneToMany(targetEntity: Worker::class, mappedBy: 'emp_record')]
    private Collection $workers;

    /**
     * @var Collection<int, EmployeeProjects>
     */
    #[ORM\OneToMany(targetEntity: EmployeeProjects::class, mappedBy: 'employee')]
    private Collection $employeeProjects;

    #[ORM\OneToOne(mappedBy: 'employee_code', cascade: ['persist', 'remove'])]
    private ?EmployeeAdditionalRecords $employeeAdditionalRecords = null;

    /**
     * @var Collection<int, EmployeeAttachments>
     */
    #[ORM\OneToMany(targetEntity: EmployeeAttachments::class, mappedBy: 'employee')]
    private Collection $employeeAttachments;

    /**
     * @var Collection<int, LoanHistory>
     */
    #[ORM\OneToMany(targetEntity: LoanHistory::class, mappedBy: 'employee_record')]
    private Collection $loanHistories;
    
    #[Groups(['employee'])]
    #[ORM\ManyToOne(inversedBy: 'employeeRecords')]
    private ?AffiliatedCompany $affiliated_company = null;

    /**
     * @var Collection<int, LeaveRequest>
     */
    #[ORM\OneToMany(targetEntity: LeaveRequest::class, mappedBy: 'emp_record')]
    private Collection $leaveRequests;

    /**
     * @var Collection<int, YearlyEmployeeLeave>
     */
    #[ORM\OneToMany(targetEntity: YearlyEmployeeLeave::class, mappedBy: 'emp_record')]
    private Collection $yearlyEmployeeLeaves;

    /**
     * @var Collection<int, AccountabilityRecords>
     */
    #[ORM\OneToMany(targetEntity: AccountabilityRecords::class, mappedBy: 'employee_record')]
    private Collection $accountabilityRecords;

    /**
     * @var Collection<int, EmployeeOvertimeRequest>
     */
    #[ORM\OneToMany(targetEntity: EmployeeOvertimeRequest::class, mappedBy: 'emp_record')]
    private Collection $employeeOvertimeRequests;


    /**
     * @var Collection<int, DTRAdjutments>
     */
    #[ORM\OneToMany(targetEntity: DTRAdjutments::class, mappedBy: 'emp_record')]
    private Collection $dTRAdjutments;

    /**
     * @var Collection<int, Notifications>
     */
    #[ORM\OneToMany(targetEntity: Notifications::class, mappedBy: 'recipient_employee_record')]
    private Collection $notifications;

    /**
     * @var Collection<int, Notifications>
     */
    #[ORM\OneToMany(targetEntity: Notifications::class, mappedBy: 'sender_employee_record')]
    private Collection $sender_notifications;

    #[Groups(['employee','worker','worker_logs','all_worker_logs','emp_projects'])]
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $profile_photo_path = null;

    public function __construct()
    {
        $this->workers = new ArrayCollection();
        $this->employeeProjects = new ArrayCollection();
        $this->employeeAttachments = new ArrayCollection();
        $this->loanHistories = new ArrayCollection();
        $this->leaveRequests = new ArrayCollection();
        $this->yearlyEmployeeLeaves = new ArrayCollection();
        $this->accountabilityRecords = new ArrayCollection();
        $this->employeeOvertimeRequests = new ArrayCollection();
        $this->dTRAdjutments = new ArrayCollection();
        $this->notifications = new ArrayCollection();
        $this->sender_notifications = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): static
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->middle_name;
    }

    public function setMiddleName(?string $middle_name): static
    {
        $this->middle_name = $middle_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): static
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getExtension(): ?string
    {
        return $this->extension;
    }

    public function setExtension(?string $extension): static
    {
        $this->extension = $extension;

        return $this;
    }

    public function getEmployeeCode(): ?string
    {
        return $this->employee_code;
    }

    public function setEmployeeCode(string $employee_code): static
    {
        $this->employee_code = $employee_code;

        return $this;
    }

    public function getBirthdate(): ?\DateTimeInterface
    {
        return $this->birthdate;
    }

    public function setBirthdate(\DateTimeInterface $birthdate): static
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    public function getBirthPlace(): ?string
    {
        return $this->birth_place;
    }

    public function setBirthPlace(?string $birth_place): static
    {
        $this->birth_place = $birth_place;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getCivilStatus(): ?string
    {
        return $this->civil_status;
    }

    public function setCivilStatus(string $civil_status): static
    {
        $this->civil_status = $civil_status;

        return $this;
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

    public function getZipCode(): ?int
    {
        return $this->zip_code;
    }

    public function setZipCode(?int $zip_code): static
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(?string $area): static
    {
        $this->area = $area;

        return $this;
    }

    public function getPresentBarangay(): ?string
    {
        return $this->present_barangay;
    }

    public function setPresentBarangay(?string $present_barangay): static
    {
        $this->present_barangay = $present_barangay;

        return $this;
    }

    public function getPresentCity(): ?string
    {
        return $this->present_city;
    }

    public function setPresentCity(?string $present_city): static
    {
        $this->present_city = $present_city;

        return $this;
    }

    public function isSameAddress(): ?bool
    {
        return $this->same_address;
    }

    public function setSameAddress(?bool $same_address): static
    {
        $this->same_address = $same_address;

        return $this;
    }

    public function getPermanentBarangay(): ?string
    {
        return $this->permanent_barangay;
    }

    public function setPermanentBarangay(?string $permanent_barangay): static
    {
        $this->permanent_barangay = $permanent_barangay;

        return $this;
    }

    public function getPermanentCity(): ?string
    {
        return $this->permanent_city;
    }

    public function setPermanentCity(?string $permanent_city): static
    {
        $this->permanent_city = $permanent_city;

        return $this;
    }

    public function getDateHired(): ?\DateTimeInterface
    {
        return $this->date_hired;
    }

    public function setDateHired(?\DateTimeInterface $date_hired): self
    {
        $this->date_hired = $date_hired;
    
        return $this;
    }

    public function getEmployeeStatus(): ?string
    {
        return $this->employee_status;
    }

    public function setEmployeeStatus(string $employee_status): static
    {
        $this->employee_status = $employee_status;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(?string $position): static
    {
        $this->position = $position;

        return $this;
    }

    public function getEmploymentType(): ?string
    {
        return $this->employment_type;
    }

    public function setEmploymentType(?string $employment_type): static
    {
        $this->employment_type = $employment_type;

        return $this;
    }

    public function getContractExpiryDate(): ?\DateTimeInterface
    {
        return $this->contract_expiry_date;
    }

    public function setContractExpiryDate(?\DateTimeInterface $contract_expiry_date): static
    {
        $this->contract_expiry_date = $contract_expiry_date;

        return $this;
    }

    public function getDateSeparated(): ?\DateTimeInterface
    {
        return $this->date_separated;
    }

    public function setDateSeparated(?\DateTimeInterface $date_separated): static
    {
        $this->date_separated = $date_separated;

        return $this;
    }

    public function getProbationaryDate(): ?\DateTimeInterface
    {
        return $this->probationary_date;
    }

    public function setProbationaryDate(?\DateTimeInterface $probationary_date): static
    {
        $this->probationary_date = $probationary_date;

        return $this;
    }

    public function getRegularizationDate(): ?\DateTimeInterface
    {
        return $this->regularization_date;
    }

    public function setRegularizationDate(?\DateTimeInterface $regularization_date): static
    {
        $this->regularization_date = $regularization_date;

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

    public function getDepartment(): ?Department
    {
        return $this->department;
    }

    public function setDepartment(?Department $department): static
    {
        $this->department = $department;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;
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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getCellphone(): ?string
    {
        return $this->cellphone;
    }

    public function setCellphone(string $cellphone): static
    {
        $this->cellphone = $cellphone;

        return $this;
    }

    /**
     * @return Collection<int, Worker>
     */
    public function getWorkers(): Collection
    {
        return $this->workers;
    }

    public function addWorker(Worker $worker): static
    {
        if (!$this->workers->contains($worker)) {
            $this->workers->add($worker);
            $worker->setEmpRecord($this);
        }

        return $this;
    }

    public function removeWorker(Worker $worker): static
    {
        if ($this->workers->removeElement($worker)) {
            // set the owning side to null (unless already changed)
            if ($worker->getEmpRecord() === $this) {
                $worker->setEmpRecord(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, EmployeeProjects>
     */
    public function getEmployeeProjects(): Collection
    {
        return $this->employeeProjects;
    }

    public function addEmployeeProject(EmployeeProjects $employeeProject): static
    {
        if (!$this->employeeProjects->contains($employeeProject)) {
            $this->employeeProjects->add($employeeProject);
            $employeeProject->setEmployee($this);
        }

        return $this;
    }

    public function removeEmployeeProject(EmployeeProjects $employeeProject): static
    {
        if ($this->employeeProjects->removeElement($employeeProject)) {
            // set the owning side to null (unless already changed)
            if ($employeeProject->getEmployee() === $this) {
                $employeeProject->setEmployee(null);
            }
        }

        return $this;
    }

    public function getEmployeeAdditionalRecords(): ?EmployeeAdditionalRecords
    {
        return $this->employeeAdditionalRecords;
    }

    public function setEmployeeAdditionalRecords(?EmployeeAdditionalRecords $employeeAdditionalRecords): static
    {
        // unset the owning side of the relation if necessary
        if ($employeeAdditionalRecords === null && $this->employeeAdditionalRecords !== null) {
            $this->employeeAdditionalRecords->setEmployeeCode(null);
        }

        // set the owning side of the relation if necessary
        if ($employeeAdditionalRecords !== null && $employeeAdditionalRecords->getEmployeeCode() !== $this) {
            $employeeAdditionalRecords->setEmployeeCode($this);
        }

        $this->employeeAdditionalRecords = $employeeAdditionalRecords;

        return $this;
    }

    /**
     * @return Collection<int, EmployeeAttachments>
     */
    public function getEmployeeAttachments(): Collection
    {
        return $this->employeeAttachments;
    }

    public function addEmployeeAttachment(EmployeeAttachments $employeeAttachment): static
    {
        if (!$this->employeeAttachments->contains($employeeAttachment)) {
            $this->employeeAttachments->add($employeeAttachment);
            $employeeAttachment->setEmployee($this);
        }

        return $this;
    }

    public function removeEmployeeAttachment(EmployeeAttachments $employeeAttachment): static
    {
        if ($this->employeeAttachments->removeElement($employeeAttachment)) {
            // set the owning side to null (unless already changed)
            if ($employeeAttachment->getEmployee() === $this) {
                $employeeAttachment->setEmployee(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, LoanHistory>
     */
    public function getLoanHistories(): Collection
    {
        return $this->loanHistories;
    }

    public function addLoanHistory(LoanHistory $loanHistory): static
    {
        if (!$this->loanHistories->contains($loanHistory)) {
            $this->loanHistories->add($loanHistory);
            $loanHistory->setEmployeeRecord($this);
        }

        return $this;
    }

    public function removeLoanHistory(LoanHistory $loanHistory): static
    {
        if ($this->loanHistories->removeElement($loanHistory)) {
            // set the owning side to null (unless already changed)
            if ($loanHistory->getEmployeeRecord() === $this) {
                $loanHistory->setEmployeeRecord(null);
            }
        }

        return $this;
    }

    public function getAffiliatedCompany(): ?AffiliatedCompany
    {
        return $this->affiliated_company;
    }

    public function setAffiliatedCompany(?AffiliatedCompany $affiliated_company): static
    {
        $this->affiliated_company = $affiliated_company;

        return $this;
    }

    /**
     * @return Collection<int, LeaveRequest>
     */
    public function getLeaveRequests(): Collection
    {
        return $this->leaveRequests;
    }

    public function addLeaveRequest(LeaveRequest $leaveRequest): static
    {
        if (!$this->leaveRequests->contains($leaveRequest)) {
            $this->leaveRequests->add($leaveRequest);
            $leaveRequest->setEmpRecord($this);
        }

        return $this;
    }

    public function removeLeaveRequest(LeaveRequest $leaveRequest): static
    {
        if ($this->leaveRequests->removeElement($leaveRequest)) {
            // set the owning side to null (unless already changed)
            if ($leaveRequest->getEmpRecord() === $this) {
                $leaveRequest->setEmpRecord(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, YearlyEmployeeLeave>
     */
    public function getYearlyEmployeeLeaves(): Collection
    {
        return $this->yearlyEmployeeLeaves;
    }

    public function addYearlyEmployeeLeaf(YearlyEmployeeLeave $yearlyEmployeeLeaf): static
    {
        if (!$this->yearlyEmployeeLeaves->contains($yearlyEmployeeLeaf)) {
            $this->yearlyEmployeeLeaves->add($yearlyEmployeeLeaf);
            $yearlyEmployeeLeaf->setEmpRecord($this);
        }

        return $this;
    }

    public function removeYearlyEmployeeLeaf(YearlyEmployeeLeave $yearlyEmployeeLeaf): static
    {
        if ($this->yearlyEmployeeLeaves->removeElement($yearlyEmployeeLeaf)) {
            // set the owning side to null (unless already changed)
            if ($yearlyEmployeeLeaf->getEmpRecord() === $this) {
                $yearlyEmployeeLeaf->setEmpRecord(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AccountabilityRecords>
     */
    public function getAccountabilityRecords(): Collection
    {
        return $this->accountabilityRecords;
    }

    public function addAccountabilityRecord(AccountabilityRecords $accountabilityRecord): static
    {
        if (!$this->accountabilityRecords->contains($accountabilityRecord)) {
            $this->accountabilityRecords->add($accountabilityRecord);
            $accountabilityRecord->setEmpId($this);
        }

        return $this;
    }

    public function removeAccountabilityRecord(AccountabilityRecords $accountabilityRecord): static
    {
        if ($this->accountabilityRecords->removeElement($accountabilityRecord)) {
            // set the owning side to null (unless already changed)
            if ($accountabilityRecord->getEmpId() === $this) {
                $accountabilityRecord->setEmpId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, EmployeeOvertimeRequest>
     */
    public function getEmployeeOvertimeRequests(): Collection
    {
        return $this->employeeOvertimeRequests;
    }

    public function addEmployeeOvertimeRequest(EmployeeOvertimeRequest $employeeOvertimeRequest): static
    {
        if (!$this->employeeOvertimeRequests->contains($employeeOvertimeRequest)) {
            $this->employeeOvertimeRequests->add($employeeOvertimeRequest);
            $employeeOvertimeRequest->setEmpId($this);
        }

        return $this;
    }

    public function removeEmployeeOvertimeRequest(EmployeeOvertimeRequest $employeeOvertimeRequest): static
    {
        if ($this->employeeOvertimeRequests->removeElement($employeeOvertimeRequest)) {
            // set the owning side to null (unless already changed)
            if ($employeeOvertimeRequest->getEmpId() === $this) {
                $employeeOvertimeRequest->setEmpId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, DTRAdjutments>
     */
    public function getDTRAdjutments(): Collection
    {
        return $this->dTRAdjutments;
    }

    public function addDTRAdjutment(DTRAdjutments $dTRAdjutment): static
    {
        if (!$this->dTRAdjutments->contains($dTRAdjutment)) {
            $this->dTRAdjutments->add($dTRAdjutment);
            $dTRAdjutment->setEmpRecord($this);
        }

        return $this;
    }

    public function removeDTRAdjutment(DTRAdjutments $dTRAdjutment): static
    {
        if ($this->dTRAdjutments->removeElement($dTRAdjutment)) {
            // set the owning side to null (unless already changed)
            if ($dTRAdjutment->getEmpRecord() === $this) {
                $dTRAdjutment->setEmpRecord(null);
            }
        }

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
            $notification->setRecipientEmployeeRecord($this);
        }

        return $this;
    }

    public function removeNotification(Notifications $notification): static
    {
        if ($this->notifications->removeElement($notification)) {
            // set the owning side to null (unless already changed)
            if ($notification->getRecipientEmployeeRecord() === $this) {
                $notification->setRecipientEmployeeRecord(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Notifications>
     */
    public function getSenderNotifications(): Collection
    {
        return $this->sender_notifications;
    }

    public function addSenderNotification(Notifications $senderNotification): static
    {
        if (!$this->sender_notifications->contains($senderNotification)) {
            $this->sender_notifications->add($senderNotification);
            $senderNotification->setSenderEmployeeRecord($this);
        }

        return $this;
    }

    public function removeSenderNotification(Notifications $senderNotification): static
    {
        if ($this->sender_notifications->removeElement($senderNotification)) {
            // set the owning side to null (unless already changed)
            if ($senderNotification->getSenderEmployeeRecord() === $this) {
                $senderNotification->setSenderEmployeeRecord(null);
            }
        }

        return $this;
    }

    public function getProfilePhotoPath(): ?string
    {
        return $this->profile_photo_path;
    }

    public function setProfilePhotoPath(string $profile_photo_path): static
    {
        $this->profile_photo_path = $profile_photo_path;

        return $this;
    }
}
