<?php

namespace App\Entity;

use App\Repository\ShiftsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: ShiftsRepository::class)]
class Shifts
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['employee'])]
    private ?int $id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    #[Groups(['employee'])]
    private ?\DateTimeInterface $start_time = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    #[Groups(['employee'])]
    private ?\DateTimeInterface $end_time = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee'])]
    private ?bool $archived = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups(['employee'])]
    private ?string $name = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\OneToMany(targetEntity: User::class, mappedBy: 'emp_shift')]
    private Collection $users;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee'])]
    private ?float $lunch_break_duration = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['employee','emp_projects'])]
    private ?float $total_hours_minus_lunch = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['employee'])]
    private ?array $days_of_week = null;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartTime(): ?\DateTimeInterface
    {
        return $this->start_time;
    }

    public function setStartTime(?\DateTimeInterface $start_time): static
    {
        $this->start_time = $start_time;

        return $this;
    }

    public function getEndTime(): ?\DateTimeInterface
    {
        return $this->end_time;
    }

    public function setEndTime(?\DateTimeInterface $end_time): static
    {
        $this->end_time = $end_time;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): static
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setEmpShift($this);
        }

        return $this;
    }

    public function removeUser(User $user): static
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getEmpShift() === $this) {
                $user->setEmpShift(null);
            }
        }

        return $this;
    }

    public function getLunchBreakDuration(): ?float
    {
        return $this->lunch_break_duration;
    }

    public function setLunchBreakDuration(?float $lunch_break_duration): static
    {
        $this->lunch_break_duration = $lunch_break_duration;

        return $this;
    }

    public function getTotalHoursMinusLunch(): ?float
    {
        return $this->total_hours_minus_lunch;
    }

    public function setTotalHoursMinusLunch(?float $total_hours_minus_lunch): static
    {
        $this->total_hours_minus_lunch = $total_hours_minus_lunch;

        return $this;
    }

    public function getDaysOfWeek(): ?array
    {
        return $this->days_of_week;
    }

    public function setDaysOfWeek(?array $days_of_week): static
    {
        $this->days_of_week = $days_of_week;

        return $this;
    }
}
