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
    public function setName ($name) {
        $this->name = $name;
    }

    public function getEmail () {
        return $this->email;
    }
    public function setEmail ($email) {
        $this->email = $email;
    }

    public function getObject () {
        return $this->object;
    }
    public function setObject ($object) {
        $this->object = $object;
    }

    public function getText ()
    {
        return $this->text;
    }
    public function setText ($text) {
        $this->text = $text;
    }
}