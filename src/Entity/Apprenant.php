<?php

namespace App\Entity;

use App\Repository\ApprenantRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ApprenantRepository::class)]
class Apprenant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $niveau = null;

    #[ORM\Column(length: 255)]
    private ?string $progression = null;

    #[ORM\Column(length: 255)]
    private ?string $formationSuivies = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(string $niveau): static
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getProgression(): ?string
    {
        return $this->progression;
    }

    public function setProgression(string $progression): static
    {
        $this->progression = $progression;

        return $this;
    }

    public function getFormationSuivies(): ?string
    {
        return $this->formationSuivies;
    }

    public function setFormationSuivies(string $formationSuivies): static
    {
        $this->formationSuivies = $formationSuivies;

        return $this;
    }
}
