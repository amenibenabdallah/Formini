<?php

namespace App\Entity;

use App\Repository\AdministrateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdministrateurRepository::class)]
class Administrateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $permissions = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPermissions(): ?string
    {
        return $this->permissions;
    }

    public function setPermissions(?string $permissions): static
    {
        $this->permissions = $permissions;

        return $this;
    }
}
