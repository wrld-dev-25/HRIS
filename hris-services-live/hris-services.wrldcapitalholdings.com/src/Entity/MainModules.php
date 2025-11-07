<?php

namespace App\Entity;

use App\Repository\MainModulesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: MainModulesRepository::class)]
class MainModules
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['user_permissions'])]
    private ?int $id = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $project = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $humanres = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private ?array $administration = null;

    #[ORM\OneToOne(inversedBy: 'mainModules', cascade: ['persist', 'remove'])]
    #[Groups(['user_permissions'])]
    private ?SubModules $submodule = null;

    #[ORM\OneToOne(mappedBy: 'main_module', cascade: ['persist', 'remove'])]
    private ?UserType $userType = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private array $payroll = [];

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    #[Groups(['user_permissions'])]
    private array $emp_leaves = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProject(): ?array
    {
        return $this->project;
    }

    public function setProject(?array $project): static
    {
        $this->project = $project;

        return $this;
    }

    public function getHumanres(): ?array
    {
        return $this->humanres;
    }

    public function setHumanres(?array $humanres): static
    {
        $this->humanres = $humanres;

        return $this;
    }

    public function getAdministration(): ?array
    {
        return $this->administration;
    }

    public function setAdministration(?array $administration): static
    {
        $this->administration = $administration;

        return $this;
    }

    public function getSubmodule(): ?SubModules
    {
        return $this->submodule;
    }

    public function setSubmodule(?SubModules $submodule): static
    {
        $this->submodule = $submodule;

        return $this;
    }

    public function setPermissions(array $project = null, array $humanres = null, array $administration = null, array $payroll = null, array $emp_leaves = null): static
    {
        $defaultPermissions = [
            'can_view' => false,
            'can_add' => false,
            'can_edit' => false,
            'can_delete' => false,
        ];
    
        $this->project          = !empty($project) ? $project : $defaultPermissions;
        $this->humanres         = !empty($humanres) ? $humanres : $defaultPermissions;
        $this->administration   = !empty($administration) ? $administration : $defaultPermissions;
        $this->payroll          = !empty($payroll) ? $payroll : $defaultPermissions;
        $this->emp_leaves       = !empty($emp_leaves) ? $emp_leaves : $defaultPermissions;
    
        return $this;
    }
    

    public function getUserType(): ?UserType
    {
        return $this->userType;
    }

    public function setUserType(?UserType $userType): static
    {
        // unset the owning side of the relation if necessary
        if ($userType === null && $this->userType !== null) {
            $this->userType->setMainModule(null);
        }

        // set the owning side of the relation if necessary
        if ($userType !== null && $userType->getMainModule() !== $this) {
            $userType->setMainModule($this);
        }

        $this->userType = $userType;

        return $this;
    }

    public function getPayroll(): array
    {
        return $this->payroll;
    }

    public function setPayroll(array $payroll): static
    {
        $this->payroll = $payroll;

        return $this;
    }

    public function getEmpLeaves(): array
    {
        return $this->emp_leaves;
    }

    public function setEmpLeaves(array $emp_leaves): static
    {
        $this->emp_leaves = $emp_leaves;

        return $this;
    }
}
