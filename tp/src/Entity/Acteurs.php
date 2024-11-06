<?php

namespace App\Entity;

use App\Repository\ActeursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActeursRepository::class)]
class Acteurs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $id_acteur = null;

    #[ORM\Column(length: 50)]
    private ?string $id_film = null;

    #[ORM\Column(length: 155)]
    private ?string $nom = null;

    #[ORM\Column(length: 155)]
    private ?string $prenom = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $role = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDeNaissance = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdActeur(): ?string
    {
        return $this->id_acteur;
    }

    public function setIdActeur(string $id_acteur): static
    {
        $this->id_acteur = $id_acteur;

        return $this;
    }

    public function getIdFilm(): ?string
    {
        return $this->id_film;
    }

    public function setIdFilm(string $id_film): static
    {
        $this->id_film = $id_film;

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

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->dateDeNaissance;
    }

    public function setDateDeNaissance(?\DateTimeInterface $dateDeNaissance): static
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }
}
