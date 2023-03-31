<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactureRepository::class)
 */
class Facture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datecrea;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatecrea(): ?\DateTimeInterface
    {
        return $this->datecrea;
    }

    public function setDatecrea(\DateTimeInterface $datecrea): self
    {
        $this->datecrea = $datecrea;

        return $this;
    }
}
