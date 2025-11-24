<?php

namespace App\Entity;

use App\Repository\PayrollGroupsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PayrollGroupsRepository::class)]
class PayrollGroups
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_start = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_end = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $remarks = null;

    /**
     * @var Collection<int, EmployeePayroll>
     */
    #[ORM\OneToMany(targetEntity: EmployeePayroll::class, mappedBy: 'payroll_group')]
    private Collection $employeePayrolls;

    public function __construct()
    {
        $this->employeePayrolls = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->date_start;
    }

    public function setDateStart(\DateTimeInterface $date_start): static
    {
        $this->date_start = $date_start;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->date_end;
    }

    public function setDateEnd(\DateTimeInterface $date_end): static
    {
        $this->date_end = $date_end;

        return $this;
    }

    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

    public function setRemarks(?string $remarks): static
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * @return Collection<int, EmployeePayroll>
     */
    public function getEmployeePayrolls(): Collection
    {
        return $this->employeePayrolls;
    }

    public function addEmployeePayroll(EmployeePayroll $employeePayroll): static
    {
        if (!$this->employeePayrolls->contains($employeePayroll)) {
            $this->employeePayrolls->add($employeePayroll);
            $employeePayroll->setPayrollGroup($this);
        }

        return $this;
    }

    public function removeEmployeePayroll(EmployeePayroll $employeePayroll): static
    {
        if ($this->employeePayrolls->removeElement($employeePayroll)) {
            // set the owning side to null (unless already changed)
            if ($employeePayroll->getPayrollGroup() === $this) {
                $employeePayroll->setPayrollGroup(null);
            }
        }

        return $this;
    }
}
