<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscription
 *
 * @ORM\Table(name="inscription", indexes={@ORM\Index(name="Id_Cour", columns={"Id_Cour"}), @ORM\Index(name="fk2", columns={"id"})})
 * @ORM\Entity
 */
class Inscription
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Inscription", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInscription;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    /**
     * @var \Cours
     *
     * @ORM\ManyToOne(targetEntity="Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Cour", referencedColumnName="Id_Cour")
     * })
     */
    private $idCour;

    public function getIdInscription(): ?int
    {
        return $this->idInscription;
    }

    public function getId(): ?User
    {
        return $this->id;
    }

    public function setId(?User $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getIdCour(): ?Cours
    {
        return $this->idCour;
    }

    public function setIdCour(?Cours $idCour): self
    {
        $this->idCour = $idCour;

        return $this;
    }


}
