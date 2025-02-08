<?php

namespace App\Entity;

use App\Repository\AvisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idInstrecteur = null;

    #[ORM\Column]
    private ?int $idForamation = null;

    #[ORM\Column]
    private ?int $idApprenant = null;

    #[ORM\Column]
    private ?float $note = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $commantaire = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $updateDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdInstrecteur(): ?int
    {
        return $this->idInstrecteur;
    }

    public function setIdInstrecteur(int $idInstrecteur): static
    {
        $this->idInstrecteur = $idInstrecteur;

        return $this;
    }

    public function getIdForamation(): ?int
    {
        return $this->idForamation;
    }

    public function setIdForamation(int $idForamation): static
    {
        $this->idForamation = $idForamation;

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

    public function getNote(): ?float
    {
        return $this->note;
    }

    public function setNote(float $note): static
    {
        $this->note = $note;

        return $this;
    }

    public function getCommantaire(): ?string
    {
        return $this->commantaire;
    }

    public function setCommantaire(?string $commantaire): static
    {
        $this->commantaire = $commantaire;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getUpdateDate(): ?\DateTimeInterface
    {
        return $this->updateDate;
    }

    public function setUpdateDate(?\DateTimeInterface $updateDate): static
    {
        $this->updateDate = $updateDate;

        return $this;
    }
}
