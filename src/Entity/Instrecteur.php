<?php

namespace App\Entity;

use App\Repository\InstrecteurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InstrecteurRepository::class)]
class Instrecteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $CV = null;

    #[ORM\Column(length: 255)]
    private ?string $niveau = null;

    #[ORM\Column(nullable: true)]
    private ?int $score_evaluation = null;

    #[ORM\Column(nullable: true)]
    private ?float $score_avis = null;

    #[ORM\Column]
    private ?bool $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCV(): ?string
    {
        return $this->CV;
    }

    public function setCV(string $CV): static
    {
        $this->CV = $CV;

        return $this;
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

    public function getScoreEvaluation(): ?int
    {
        return $this->score_evaluation;
    }

    public function setScoreEvaluation(?int $score_evaluation): static
    {
        $this->score_evaluation = $score_evaluation;

        return $this;
    }

    public function getScoreAvis(): ?float
    {
        return $this->score_avis;
    }

    public function setScoreAvis(?float $score_avis): static
    {
        $this->score_avis = $score_avis;

        return $this;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): static
    {
        $this->status = $status;

        return $this;
    }
}
