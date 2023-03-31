<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;
use Assert\NotNull;

/**
 * @ORM\Entity(repositoryClass=CommentaireRepository::class)
 */
class Commentaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="commentaires")
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class, inversedBy="commentaires")
     */
    private $produits;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getUsers(): ?User
    {
        return $this->users;
    }

    public function setUsers(?User $users): self
    {
        $this->users = $users;

        return $this;
    }

    public function getProduits(): ?Produit
    {
        return $this->produits;
    }

    public function setProduits(?Produit $produits): self
    {
        $this->produits = $produits;

        return $this;
    }
}
