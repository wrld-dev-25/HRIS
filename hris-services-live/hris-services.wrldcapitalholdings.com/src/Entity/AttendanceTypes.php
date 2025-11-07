<?php

namespace App\Entity;

use App\Repository\AttendanceTypesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: AttendanceTypesRepository::class)]
class AttendanceTypes
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['worker_logs','all_worker_logs'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['worker_logs','all_worker_logs'])]
    private ?string $name = null;

    /**
     * @var Collection<int, WorkerLogs>
     */
    #[ORM\OneToMany(targetEntity: WorkerLogs::class, mappedBy: 'attendance_status')]
    private Collection $yes;

    #[ORM\Column]
    #[Groups(['worker_logs','all_worker_logs'])]
    private ?bool $is_hours_rendered = false;

    #[ORM\Column(nullable: true)]
    #[Groups(['worker_logs','all_worker_logs'])]
    private ?float $hours_provided = null;

    #[ORM\Column(nullable: true)]
    private ?bool $automated_attendance = null;

    public function __construct()
    {
        $this->yes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection<int, WorkerLogs>
     */
    public function getYes(): Collection
    {
        return $this->yes;
    }

    public function addYe(WorkerLogs $ye): static
    {
        if (!$this->yes->contains($ye)) {
            $this->yes->add($ye);
            $ye->setAttendanceStatus($this);
        }

        return $this;
    }

    public function removeYe(WorkerLogs $ye): static
    {
        if ($this->yes->removeElement($ye)) {
            // set the owning side to null (unless already changed)
            if ($ye->getAttendanceStatus() === $this) {
                $ye->setAttendanceStatus(null);
            }
        }

        return $this;
    }

    public function isHoursRendered(): ?bool
    {
        return $this->is_hours_rendered;
    }

    public function setHoursRendered(bool $is_hours_rendered): static
    {
        $this->is_hours_rendered = $is_hours_rendered;

        return $this;
    }

    public function getHoursProvided(): ?float
    {
        return $this->hours_provided;
    }

    public function setHoursProvided(?float $hours_provided): static
    {
        $this->hours_provided = $hours_provided;

        return $this;
    }

    public function isAutomatedAttendance(): ?bool
    {
        return $this->automated_attendance;
    }

    public function setAutomatedAttendance(?bool $automated_attendance): static
    {
        $this->automated_attendance = $automated_attendance;

        return $this;
    }
}
