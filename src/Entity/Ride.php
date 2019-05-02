<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RideRepository")
 */
class Ride
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="rides")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Car", inversedBy="ride", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $car;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pickUp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dropOff;

    /**
     * @ORM\Column(type="text", nullable=true, length=500)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $pickUpDate;

    /**
     * @ORM\Column(type="time")
     */
    private $pickUpTime;

    /**
     * @ORM\Column(type="time")
     */
    private $dropOffTime;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dropOffDate;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCar(): ?Car
    {
        return $this->car;
    }

    public function setCar(Car $car): self
    {
        $this->car = $car;

        return $this;
    }

    public function getPickUp(): ?string
    {
        return $this->pickUp;
    }

    public function setPickUp(string $pickUp): self
    {
        $this->pickUp = $pickUp;

        return $this;
    }

    public function getDropOff(): ?string
    {
        return $this->dropOff;
    }

    public function setDropOff(string $dropOff): self
    {
        $this->dropOff = $dropOff;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPickUpDate(): ?\DateTimeInterface
    {
        return $this->pickUpDate;
    }

    public function setPickUpDate(\DateTimeInterface $pickUpDate): self
    {
        $this->pickUpDate = $pickUpDate;

        return $this;
    }

    public function getPickUpTime(): ?\DateTimeInterface
    {
        return $this->pickUpTime;
    }

    public function setPickUpTime(\DateTimeInterface $pickUpTime): self
    {
        $this->pickUpTime = $pickUpTime;

        return $this;
    }

    public function getDropOffTime(): ?\DateTimeInterface
    {
        return $this->dropOffTime;
    }

    public function setDropOffTime(\DateTimeInterface $dropOffTime): self
    {
        $this->dropOffTime = $dropOffTime;

        return $this;
    }

    public function getDropOffDate(): ?\DateTimeInterface
    {
        return $this->dropOffDate;
    }

    public function setDropOffDate(\DateTimeInterface $dropOffDate): self
    {
        $this->dropOffDate = $dropOffDate;

        return $this;
    }
}
