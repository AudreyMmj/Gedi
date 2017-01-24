<?php

namespace Gedi\BaseBundle\Entity;


class Contact
{
    private $name;
    private $email;
    private $object;
    private $text;

    public function getName () {
        return $this->name;
    }

    public function getEmail () {
        return $this->email;
    }

    public function getObject () {
        return $this->object;
    }

    public function getText ()
    {
        return $this->text;
    }
}