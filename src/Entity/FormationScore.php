<?php

namespace App\Entity;

use App\Repository\FormationScoreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormationScoreRepository::class)]
class FormationScore
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $nombreAvis = null;

    #[ORM\Column(nullable: true)]
    private ?float $noteMoyenne = null;

    #[ORM\Column]
    private ?int $classement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreAvis(): ?int
    {
        return $this->nombreAvis;
    }

    public function setNombreAvis(?int $nombreAvis): static
    {
        $this->nombreAvis = $nombreAvis;

        return $this;
    }

    public function getNoteMoyenne(): ?float
    {
        return $this->noteMoyenne;
    }

    public function setNoteMoyenne(?float $noteMoyenne): static
    {
        $this->noteMoyenne = $noteMoyenne;

        return $this;
    }

    public function getClassement(): ?int
    {
        return $this->classement;
    }

    public function setClassement(int $classement): static
    {
        $this->classement = $classement;

        return $this;
    }
}
