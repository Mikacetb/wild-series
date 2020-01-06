<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SeasonRepository")
 */
class Season
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $number;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $year;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

        /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Program", inversedBy="seasons")
     */
    private $program;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Episode", mappedBy="season")
     */
    private $episodes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProgram()
    {
        return $this->program;
    }

    public function setProgram(int $program)
    {
        $this->program = $program;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

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

    public function getEpisodes()
    {
        return $this->episodes;
    }

    public function setEpisodes(?int $episodes)
    {
        $this->episodes = $episodes;

        return $this;
    }
}