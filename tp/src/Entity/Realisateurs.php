<?php

namespace App\Entity;

use App\Repository\RealisateursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RealisateursRepository::class)]
class Realisateurs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $id_real = null;

    #[ORM\Column(length: 155)]
    private ?string $nom = null;

    #[ORM\Column(length: 155)]
    private ?string $prenom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdReal(): ?string
    {
        return $this->id_real;
    }

    public function setIdReal(string $id_real): static
    {
        $this->id_real = $id_real;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }
}
