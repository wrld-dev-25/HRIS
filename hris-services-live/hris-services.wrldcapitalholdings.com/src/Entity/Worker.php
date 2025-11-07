<?php

namespace App\Entity;

use App\Repository\WorkerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: WorkerRepository::class)]
class Worker
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['worker', 'all_worker_logs'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['worker'])]
    private ?string $workerId = null;

    #[ORM\Column(length: 255)]
    #[Groups(['worker'])]
    private ?string $firstname = null;

    #[ORM\Column(length: 255)]
    #[Groups(['worker'])]
    private ?string $lastname = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['worker'])]
    private ?string $position = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['worker'])]
    private ?string $workerDocs = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['worker'])]
    private ?string $photo = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['worker'])]
    private ?string $erName = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['worker'])]
    private ?string $erContact = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['worker'])]
    private ?string $status = null;

    /**
     * @var Collection<int, WorkerLogs>
     */
    #[ORM\OneToMany(targetEntity: WorkerLogs::class, mappedBy: 'user')]
    private Collection $workerLog;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['worker'])]
    private ?string $empcode = null;

    #[ORM\ManyToOne(inversedBy: 'workers')]
    #[Groups(['worker','all_worker_logs'])]
    private ?EmployeeRecords $emp_record = null;

    public function __construct()
    {
        $this->workerLog = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWorkerId(): ?string
    {
        return $this->workerId;
    }

    public function setWorkerId(string $workerId): static
    {
        $this->workerId = $workerId;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

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

    public function getWorkerDocs(): ?string
    {
        return $this->workerDocs;
    }

    public function setWorkerDocs(?string $workerDocs): static
    {
        $this->workerDocs = $workerDocs;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getErName(): ?string
    {
        return $this->erName;
    }

    public function setErName(?string $erName): static
    {
        $this->erName = $erName;

        return $this;
    }

    public function getErContact(): ?string
    {
        return $this->erContact;
    }

    public function setErContact(?string $erContact): static
    {
        $this->erContact = $erContact;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return Collection<int, WorkerLogs>
     */
    public function getWorkerLog(): Collection
    {
        return $this->workerLog;
    }

    public function addWorkerLog(WorkerLogs $workerLog): static
    {
        if (!$this->workerLog->contains($workerLog)) {
            $this->workerLog->add($workerLog);
            $workerLog->setUser($this);
        }

        return $this;
    }

    public function removeWorkerLog(WorkerLogs $workerLog): static
    {
        if ($this->workerLog->removeElement($workerLog)) {
            // set the owning side to null (unless already changed)
            if ($workerLog->getUser() === $this) {
                $workerLog->setUser(null);
            }
        }

        return $this;
    }

    public function getEmpcode(): ?string
    {
        return $this->empcode;
    }

    public function setEmpcode(?string $empcode): static
    {
        $this->empcode = $empcode;

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
}
