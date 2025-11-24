<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use App\Repository\AffiliatedCompanyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: AffiliatedCompanyRepository::class)]
class AffiliatedCompany
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['employee'])]
    private ?int $id = null;

    #[Groups(['employee'])]
    #[ORM\Column(length: 255)]
    private ?string $code = null;

    #[Groups(['employee'])]
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @var Collection<int, EmployeeRecords>
     */
    #[ORM\OneToMany(targetEntity: EmployeeRecords::class, mappedBy: 'affiliated_company')]
    private Collection $employeeRecords;

    public function __construct()
    {
        $this->employeeRecords = new ArrayCollection();
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
            $employeeRecord->setAffiliatedCompany($this);
        }

        return $this;
    }

    public function removeEmployeeRecord(EmployeeRecords $employeeRecord): static
    {
        if ($this->employeeRecords->removeElement($employeeRecord)) {
            // set the owning side to null (unless already changed)
            if ($employeeRecord->getAffiliatedCompany() === $this) {
                $employeeRecord->setAffiliatedCompany(null);
            }
        }

        return $this;
    }
}
