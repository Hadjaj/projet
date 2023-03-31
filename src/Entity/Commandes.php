<?php

namespace App\Entity;

use App\Repository\CommandesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandesRepository::class)
 */
class Commandes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Facture::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Id_facture;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Produit_id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $Quantite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdFacture(): ?Facture
    {
        return $this->Id_facture;
    }

    public function setIdFacture(?Facture $Id_facture): self
    {
        $this->Id_facture = $Id_facture;

        return $this;
    }

    public function getProduitId(): ?Produit
    {
        return $this->Produit_id;
    }

    public function setProduitId(?Produit $Produit_id): self
    {
        $this->Produit_id = $Produit_id;

        return $this;
    }

    public function getQuantite(): ?string
    {
        return $this->Quantite;
    }

    public function setQuantite(string $Quantite): self
    {
        $this->Quantite = $Quantite;

        return $this;
    }
}
