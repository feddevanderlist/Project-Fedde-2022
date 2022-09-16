<?php

namespace App\Entity;

use App\Repository\MotorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MotorRepository::class)]
class Motor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $naam = null;

    #[ORM\Column]
    private ?int $vermogen = null;

    #[ORM\Column]
    private ?int $aantalCylinders = null;

    #[ORM\OneToMany(mappedBy: 'motor', targetEntity: Car::class)]
    private Collection $Car;

    public function __construct()
    {
        $this->Car = new ArrayCollection();
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

    public function getVermogen(): ?int
    {
        return $this->vermogen;
    }

    public function setVermogen(int $vermogen): self
    {
        $this->vermogen = $vermogen;

        return $this;
    }

    public function getAantalCylinders(): ?int
    {
        return $this->aantalCylinders;
    }

    public function setAantalCylinders(int $aantalCylinders): self
    {
        $this->aantalCylinders = $aantalCylinders;

        return $this;
    }

    /**
     * @return Collection<int, Car>
     */
    public function getCar(): Collection
    {
        return $this->Car;
    }

    public function addCar(Car $car): self
    {
        if (!$this->Car->contains($car)) {
            $this->Car->add($car);
            $car->setMotor($this);
        }

        return $this;
    }

    public function removeCar(Car $car): self
    {
        if ($this->Car->removeElement($car)) {
            // set the owning side to null (unless already changed)
            if ($car->getMotor() === $this) {
                $car->setMotor(null);
            }
        }

        return $this;
    }
}
