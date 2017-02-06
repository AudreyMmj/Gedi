<?php

namespace Gedi\BaseBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="Document", uniqueConstraints={@ORM\UniqueConstraint(name="un_path_titre_type_doc", columns={"path", "nom", "type_doc"}), @ORM\UniqueConstraint(name="un_projet", columns={"id_projet_fk_document"})}, indexes={@ORM\Index(name="fk_utilisateur_document", columns={"id_utilisateur_fk_document"})})
 * @ORM\Entity
 */
class Document
{
    /**
     * Id du document
     * @var integer
     *
     * @ORM\Column(name="id_document", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDocument;

    /**
     * Nom du document
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * Type du document
     * @var string
     *
     * @ORM\Column(name="type_doc", type="string", nullable=false)
     */
    private $typeDoc;

    /**
     * Date de création du document
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation = 'CURRENT_TIMESTAMP';

    /**
     * Date de modification du document
     * @var \DateTime
     *
     * @ORM\Column(name="date_modification", type="datetime", nullable=true)
     */
    private $dateModification;

    /**
     * Tag du document
     * @var string
     *
     * @ORM\Column(name="tag", type="string", length=255, nullable=true)
     */
    private $tag;

    /**
     * Resumé du document
     * @var string
     *
     * @ORM\Column(name="resume", type="text", length=65535, nullable=true)
     */
    private $resume;

    /**
     * Chemin du document
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path = '/var/www/html/gedi/';

    /**
     * Projet du document
     * @var Projet
     *
     * @ORM\ManyToOne(targetEntity="Projet", inversedBy="idProjetFkDocument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_projet_fk_document", referencedColumnName="id_projet")
     * })
     */
    private $idProjetFkDocument;

    /**
     * Propriétaire du document
     * @var Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="idUtilisateurFkDocument")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utilisateur_fk_document", referencedColumnName="id_utilisateur")
     * })
     */
    private $idUtilisateurFkDocument;

    /**
     * Utilisateurs étants habilités à voir le document
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Utilisateur", mappedBy="idDocumentDu")
     */
    private $idUtilisateurDu;

    /**
     * Groupes étants habilités à voir le document
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Groupe", mappedBy="idDocumentGd")
     */
    private $idGroupeGd;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUtilisateurDu = new ArrayCollection();
        $this->idGroupeGd = new ArrayCollection();
        $this->dateCreation = new \DateTime();
        $this->dateModification = new \DateTime();
    }

    /**
     * Get idDocument
     *
     * @return integer
     */
    public function getIdDocument()
    {
        return $this->idDocument;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Document
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
     * Set typeDoc
     *
     * @param string $typeDoc
     *
     * @return Document
     */
    public function setTypeDoc($typeDoc)
    {
        $this->typeDoc = $typeDoc;

        return $this;
    }

    /**
     * Get typeDoc
     *
     * @return string
     */
    public function getTypeDoc()
    {
        return $this->typeDoc;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Document
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
     * @return Document
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
     * Set tag
     *
     * @param string $tag
     *
     * @return Document
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set resume
     *
     * @param string $resume
     *
     * @return Document
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Document
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
     * Set idProjetFkDocument
     *
     * @param $idProjetFkDocument
     *
     * @return Document
     */
    public function setIdProjetFkDocument($idProjetFkDocument = null)
    {
        $this->idProjetFkDocument = $idProjetFkDocument;

        return $this;
    }

    /**
     * Get idProjetFkDocument
     *
     * @return Projet
     */
    public function getIdProjetFkDocument()
    {
        return $this->idProjetFkDocument;
    }

    /**
     * Set idUtilisateurFkDocument
     *
     * @param $idUtilisateurFkDocument
     *
     * @return Document
     */
    public function setIdUtilisateurFkDocument($idUtilisateurFkDocument = null)
    {
        $this->idUtilisateurFkDocument = $idUtilisateurFkDocument;

        return $this;
    }

    /**
     * Get idUtilisateurFkDocument
     *
     * @return Utilisateur
     */
    public function getIdUtilisateurFkDocument()
    {
        return $this->idUtilisateurFkDocument;
    }

    /**
     * Add idUtilisateurDu
     *
     * @param $idUtilisateurDu
     *
     * @return Document
     */
    public function addIdUtilisateurDu($idUtilisateurDu)
    {
        $this->idUtilisateurDu[] = $idUtilisateurDu;

        return $this;
    }

    /**
     * Remove idUtilisateurDu
     *
     * @param $idUtilisateurDu
     */
    public function removeIdUtilisateurDu($idUtilisateurDu)
    {
        $this->idUtilisateurDu->removeElement($idUtilisateurDu);
    }

    /**
     * Get idUtilisateurDu
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdUtilisateurDu()
    {
        return $this->idUtilisateurDu;
    }

    /**
     * Add idGroupeGd
     *
     * @param $idGroupeGd
     *
     * @return Document
     */
    public function addIdGroupeGd($idGroupeGd)
    {
        $this->idGroupeGd[] = $idGroupeGd;

        return $this;
    }

    /**
     * Remove idGroupeGd
     *
     * @param $idGroupeGd
     */
    public function removeIdGroupeGd($idGroupeGd)
    {
        $this->idGroupeGd->removeElement($idGroupeGd);
    }

    /**
     * Get idGroupeGd
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdGroupeGd()
    {
        return $this->idGroupeGd;
    }
}
