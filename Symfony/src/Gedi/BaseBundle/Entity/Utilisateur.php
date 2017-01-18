<?php

namespace Gedi\BaseBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="Utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="un_utilisateur", columns={"login"})})
 * @ORM\Entity
 */
class Utilisateur implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_utilisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=23, nullable=true)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", nullable=false)
     */
    private $role = 'ROLE_USER';

    /**
     * @var boolean
     *
     * @ORM\Column(name="actif", type="boolean", nullable=false)
     */
    private $actif = false;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Document", inversedBy="idUtilisateurDu")
     * @ORM\JoinTable(name="Document_Utilisateur",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_utilisateur_du", referencedColumnName="id_utilisateur")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_document_du", referencedColumnName="id_document")
     *   }
     * )
     */
    private $idDocumentDu;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Groupe", inversedBy="idUtilisateurUg")
     * @ORM\JoinTable(name="Utilisateur_Groupe",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_utilisateur_ug", referencedColumnName="id_utilisateur")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_groupe_ug", referencedColumnName="id_groupe")
     *   }
     * )
     */
    private $idGroupeUg;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idDocumentDu = new ArrayCollection();
        $this->idGroupeUg = new ArrayCollection();
        $this->dateCreation = new \DateTime();
        $this->dateModification = new \DateTime();
    }

    /**
     * Get idUtilisateur
     *
     * @return integer
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * @param int $idUtilisateur
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Utilisateur
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Utilisateur
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateur
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return Utilisateur
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Utilisateur
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     * @return array (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return array($this->getRole());
    }

    /**
     * Set actif
     *
     * @param boolean $actif
     *
     * @return Utilisateur
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return boolean
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Utilisateur
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
     * @return Utilisateur
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
     * Add idDocumentDu
     *
     * @param Document $idDocumentDu
     *
     * @return Utilisateur
     */
    public function addIdDocumentDu(Document $idDocumentDu)
    {
        $this->idDocumentDu[] = $idDocumentDu;

        return $this;
    }

    /**
     * Remove idDocumentDu
     *
     * @param Document $idDocumentDu
     */
    public function removeIdDocumentDu(Document $idDocumentDu)
    {
        $this->idDocumentDu->removeElement($idDocumentDu);
    }

    /**
     * Get idDocumentDu
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdDocumentDu()
    {
        return $this->idDocumentDu;
    }

    /**
     * Add idGroupeUg
     *
     * @param Groupe $idGroupeUg
     *
     * @return Utilisateur
     */
    public function addIdGroupeUg(Groupe $idGroupeUg)
    {
        $this->idGroupeUg[] = $idGroupeUg;

        return $this;
    }

    /**
     * Remove idGroupeUg
     *
     * @param Groupe $idGroupeUg
     */
    public function removeIdGroupeUg(Groupe $idGroupeUg)
    {
        $this->idGroupeUg->removeElement($idGroupeUg);
    }

    /**
     * Get idGroupeUg
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdGroupeUg()
    {
        return $this->idGroupeUg;
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * Transforme l'utilisateur en tableau associatif
     * @return array
     */
    public function toArray() {
        $array = array(
            "idUtilisateur" => $this->idUtilisateur,
            "username" => $this->username,
            "nom" => $this->nom,
            "prenom" => $this->prenom,
            "actif" => $this->actif
        );
        return $array;
    }
}
