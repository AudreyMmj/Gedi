<?php

namespace Gedi\BaseBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="Projet", uniqueConstraints={@ORM\UniqueConstraint(name="un_path_titre_type_doc", columns={"path", "nom"})}, indexes={@ORM\Index(name="fk_utilisateur_projet", columns={"id_utilisateur_fk_projet"})})
 * @ORM\Entity
 */
class Projet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_projet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path = '/var/www/html/gedi/';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modification", type="datetime", nullable=true)
     */
    private $dateModification;

    /**
     * @var Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur_fk_projet", referencedColumnName="id_utilisateur")
     * })
     */
    private $idUtilisateurFkProjet;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Groupe", mappedBy="idProjetGp")
     */
    private $idGroupeGp;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idGroupeGp = new ArrayCollection();
        $this->dateCreation = new \DateTime();
        $this->dateModification = new \DateTime();
    }

    /**
     * Get idProjet
     *
     * @return integer
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Projet
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Projet
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Projet
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateModification
     *
     * @param \DateTime $dateModification
     *
     * @return Projet
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;

        return $this;
    }

    /**
     * Get dateModification
     *
     * @return \DateTime
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }

    /**
     * Set idUtilisateurFkProjet
     *
     * @param $idUtilisateurFkProjet
     *
     * @return Projet
     */
    public function setIdUtilisateurFkProjet($idUtilisateurFkProjet = null)
    {
        $this->idUtilisateurFkProjet = $idUtilisateurFkProjet;

        return $this;
    }

    /**
     * Get idUtilisateurFkProjet
     *
     * @return Utilisateur
     */
    public function getIdUtilisateurFkProjet()
    {
        return $this->idUtilisateurFkProjet;
    }

    /**
     * Add idGroupeGp
     *
     * @param $idGroupeGp
     *
     * @return Projet
     */
    public function addIdGroupeGp($idGroupeGp)
    {
        $this->idGroupeGp[] = $idGroupeGp;

        return $this;
    }

    /**
     * Remove idGroupeGp
     *
     * @param $idGroupeGp
     */
    public function removeIdGroupeGp($idGroupeGp)
    {
        $this->idGroupeGp->removeElement($idGroupeGp);
    }

    /**
     * Get idGroupeGp
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdGroupeGp()
    {
        return $this->idGroupeGp;
    }
}
