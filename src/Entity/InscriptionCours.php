<?php

namespace App\Entity;

use App\Repository\InscriptionCoursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InscriptionCoursRepository::class)]
class InscriptionCours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateInscreption = null;

    #[ORM\Column]
    private ?float $montant = null;

    #[ORM\Column(length: 255)]
    private ?string $typePaiement = null;

    #[ORM\Column]
    private ?int $idApprenant = null;

    #[ORM\Column]
    private ?int $idFormation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getDateInscreption(): ?\DateTimeInterface
    {
        return $this->dateInscreption;
    }

    public function setDateInscreption(\DateTimeInterface $dateInscreption): static
    {
        $this->dateInscreption = $dateInscreption;

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

    public function getTypePaiement(): ?string
    {
        return $this->typePaiement;
    }

    public function setTypePaiement(string $typePaiement): static
    {
        $this->typePaiement = $typePaiement;

        return $this;
    }

    public function getIdApprenant(): ?int
    {
        return $this->idApprenant;
    }

    public function setIdApprenant(int $idApprenant): static
    {
        $this->idApprenant = $idApprenant;

        return $this;
    }

    public function getIdFormation(): ?int
    {
        return $this->idFormation;
    }

    public function setIdFormation(int $idFormation): static
    {
        $this->idFormation = $idFormation;

        return $this;
    }
}
