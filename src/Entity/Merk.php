<?php

namespace App\Entity;

use App\Repository\MerkRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MerkRepository::class)]
class Merk
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $naam = null;

    #[ORM\Column(length: 255)]
    private ?string $landOpgericht = null;

    #[ORM\OneToMany(mappedBy: 'merk', targetEntity: Car::class)]
    private Collection $autos;

    public function __construct()
    {
        $this->autos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLandOpgericht(): ?string
    {
        return $this->landOpgericht;
    }

    public function setLandOpgericht(string $landOpgericht): self
    {
        $this->landOpgericht = $landOpgericht;

        return $this;
    }

    /**
     * @return Collection<int, Car>
     */
    public function getAutos(): Collection
    {
        return $this->autos;
    }

    public function addAuto(Car $auto): self
    {
        if (!$this->autos->contains($auto)) {
            $this->autos->add($auto);
            $auto->setMerk($this);
        }

        return $this;
    }

    public function removeAuto(Car $auto): self
    {
        if ($this->autos->removeElement($auto)) {
            // set the owning side to null (unless already changed)
            if ($auto->getMerk() === $this) {
                $auto->setMerk(null);
            }
        }

        return $this;
    }
}
