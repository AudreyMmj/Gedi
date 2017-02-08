<?php

namespace Gedi\BaseBundle\Entity;

/**
 * Class Contact
 * @package Gedi\BaseBundle\Entity
 */
class Contact
{
    /**
     * Nom du demandeur
     * @var
     */
    private $name;

    /**
     * Adresse email du demandeur
     * @var
     */
    private $email;

    /**
     * Objet de la demande
     * @var
     */
    private $object;

    /**
     * Contenu de la demande
     * @var
     */
    private $text;

    /**
     * Getter du nom du demandeur
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter du nom du demandeur
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Getter de l'email du demandeur
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Setter de l'email du demandeur
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Getter de l'objet de l'email
     * @return mixed
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Setter de l'objet de l'email
     * @param $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }

    /**
     * Getter du contenu de l'email
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Setter du contenu de l'email
     * @param $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }
}