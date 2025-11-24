<?php

namespace App\Entity;

use App\Repository\UserTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: UserTypeRepository::class)]
class UserType
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['employee','user_permissions'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['employee','user_permissions'])]
    private ?string $name = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $removed = null;

    #[ORM\Column(length: 255)]
    #[Groups(['employee','user_permissions'])]
    private ?string $user_code = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\OneToMany(targetEntity: User::class, mappedBy: 'user_type')]
    private Collection $users;

    #[ORM\OneToOne(inversedBy: 'userType', cascade: ['persist', 'remove'])]
    #[Groups(['user_permissions'])]
    private ?MainModules $main_module = null;

    public function __construct()
    {
        $this->users = new ArrayCollection();
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

    public function getRemoved(): ?int
    {
        return $this->removed;
    }

    public function setRemoved(int $removed): static
    {
        $this->removed = $removed;

        return $this;
    }

    public function getUserCode(): ?string
    {
        return $this->user_code;
    }

    public function setUserCode(string $user_code): static
    {
        $this->user_code = $user_code;

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
            $user->setUserType($this);
        }

        return $this;
    }

    public function removeUser(User $user): static
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getUserType() === $this) {
                $user->setUserType(null);
            }
        }

        return $this;
    }

    public function getMainModule(): ?MainModules
    {
        return $this->main_module;
    }

    public function setMainModule(?MainModules $main_module): static
    {
        $this->main_module = $main_module;

        return $this;
    }
}
