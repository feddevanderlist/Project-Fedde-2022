<?php

namespace App\Entity;

use App\Repository\CarRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarRepository::class)]
class Car
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $kleur = null;

    #[ORM\Column]
    private ?int $gewicht = null;

    #[ORM\Column(length: 255)]
    private ?string $brandstof = null;

    #[ORM\Column]
    private ?int $topSnelHeid = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $bouwjaar = null;

    #[ORM\Column]
    private ?bool $automaat = null;

    #[ORM\Column]
    private ?int $aantalVersnellingen = null;

    #[ORM\Column]
    private ?int $aantalDeuren = null;

    #[ORM\ManyToOne(inversedBy: 'autos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Merk $merk = null;

    #[ORM\Column]
    private ?int $prijs = null;

    #[ORM\ManyToOne(inversedBy: 'Car')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Motor $motor = null;

    #[ORM\Column(length: 255)]
    private ?string $naam = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKleur(): ?string
    {
        return $this->kleur;
    }

    public function setKleur(string $kleur): self
    {
        $this->kleur = $kleur;

        return $this;
    }

    public function getGewicht(): ?int
    {
        return $this->gewicht;
    }

    public function setGewicht(int $gewicht): self
    {
        $this->gewicht = $gewicht;

        return $this;
    }

    public function getBrandstof(): ?string
    {
        return $this->brandstof;
    }

    public function setBrandstof(string $brandstof): self
    {
        $this->brandstof = $brandstof;

        return $this;
    }

    public function getTopSnelHeid(): ?int
    {
        return $this->topSnelHeid;
    }

    public function setTopSnelHeid(int $topSnelHeid): self
    {
        $this->topSnelHeid = $topSnelHeid;

        return $this;
    }

    public function getBouwjaar(): ?\DateTimeInterface
    {
        return $this->bouwjaar;
    }

    public function setBouwjaar(\DateTimeInterface $bouwjaar): self
    {
        $this->bouwjaar = $bouwjaar;

        return $this;
    }

    public function isAutomaat(): ?bool
    {
        return $this->automaat;
    }

    public function setAutomaat(bool $automaat): self
    {
        $this->automaat = $automaat;

        return $this;
    }

    public function getAantalVersnellingen(): ?int
    {
        return $this->aantalVersnellingen;
    }

    public function setAantalVersnellingen(int $aantalVersnellingen): self
    {
        $this->aantalVersnellingen = $aantalVersnellingen;

        return $this;
    }

    public function getAantalDeuren(): ?int
    {
        return $this->aantalDeuren;
    }

    public function setAantalDeuren(int $aantalDeuren): self
    {
        $this->aantalDeuren = $aantalDeuren;

        return $this;
    }

    public function getMerk(): ?Merk
    {
        return $this->merk;
    }

    public function setMerk(?Merk $merk): self
    {
        $this->merk = $merk;

        return $this;
    }

    public function getPrijs(): ?int
    {
        return $this->prijs;
    }

    public function setPrijs(int $prijs): self
    {
        $this->prijs = $prijs;

        return $this;
    }

    public function getMotor(): ?Motor
    {
        return $this->motor;
    }

    public function setMotor(?Motor $motor): self
    {
        $this->motor = $motor;

        return $this;
    }

    public function getNaam(): ?string
    {
        return $this->naam;
    }

    public function setNaam(string $naam): self
    {
        $this->naam = $naam;

        return $this;
    }
}
