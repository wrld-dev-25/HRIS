<?php

namespace App\Entity;

use App\Repository\YearlyEmployeeLeaveRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: YearlyEmployeeLeaveRepository::class)]
class YearlyEmployeeLeave
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $year = null;

    #[ORM\ManyToOne(inversedBy: 'yearlyEmployeeLeaves')]
    #[ORM\JoinColumn(nullable: false)]
    private ?EmployeeRecords $emp_record = null;

    #[ORM\ManyToOne(targetEntity: LeavePolicy::class, inversedBy: 'yearlyEmployeeLeaves')]
    private ?LeavePolicy $leavePolicy = null;
    /**
     * @var Collection<int, SelectedEmployeeLeaves>
     */
    #[ORM\OneToMany(targetEntity: SelectedEmployeeLeaves::class, mappedBy: 'employee_leave')]
    private Collection $selectedEmployeeLeaves;

    public function __construct()
    {
        $this->selectedEmployeeLeaves = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(string $year): static
    {
        $this->year = $year;

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

    /**
     * @return Collection<int, SelectedEmployeeLeaves>
     */
    public function getSelectedEmployeeLeaves(): Collection
    {
        return $this->selectedEmployeeLeaves;
    }

    public function addSelectedEmployeeLeaf(SelectedEmployeeLeaves $selectedEmployeeLeaf): static
    {
        if (!$this->selectedEmployeeLeaves->contains($selectedEmployeeLeaf)) {
            $this->selectedEmployeeLeaves->add($selectedEmployeeLeaf);
            $selectedEmployeeLeaf->setEmployeeLeave($this);
        }

        return $this;
    }

    public function removeSelectedEmployeeLeaf(SelectedEmployeeLeaves $selectedEmployeeLeaf): static
    {
        if ($this->selectedEmployeeLeaves->removeElement($selectedEmployeeLeaf)) {
            // set the owning side to null (unless already changed)
            if ($selectedEmployeeLeaf->getEmployeeLeave() === $this) {
                $selectedEmployeeLeaf->setEmployeeLeave(null);
            }
        }

        return $this;
    }
}
