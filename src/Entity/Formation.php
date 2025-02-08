<?php

namespace App\Entity;

use App\Repository\FormationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormationRepository::class)]
class Formation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column]
    private ?float $montant = null;

    #[ORM\Column]
    private ?int $solde = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $creatAt = null;

    #[ORM\Column]
    private ?int $idInstructeur = null;

    #[ORM\Column]
    private ?int $idCategorie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getSolde(): ?int
    {
        return $this->solde;
    }

    public function setSolde(int $solde): static
    {
        $this->solde = $solde;

        return $this;
    }

    public function getCreatAt(): ?\DateTimeImmutable
    {
        return $this->creatAt;
    }

    public function setCreatAt(\DateTimeImmutable $creatAt): static
    {
        $this->creatAt = $creatAt;

        return $this;
    }

    public function getIdInstructeur(): ?int
    {
        return $this->idInstructeur;
    }

    public function setIdInstructeur(int $idInstructeur): static
    {
        $this->idInstructeur = $idInstructeur;

        return $this;
    }

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(int $idCategorie): static
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }
}
