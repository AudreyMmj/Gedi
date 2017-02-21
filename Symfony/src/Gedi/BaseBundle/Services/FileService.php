<?php

namespace Gedi\BaseBundle\Services;


use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileService
{
    private $targetDir;

    /**
     * FileService constructor.
     * @param $targetDir
     */
    public function __construct($targetDir)
    {
        $this->targetDir = $targetDir;
    }

    /**
     * Fonction pour écrire le fichier sur le serveur
     * @param UploadedFile $file
     * @param $utilisateur
     * @param $projet
     * @return string
     */
    public function upload(UploadedFile $file, $utilisateur, $projet)
    {
        $fileName = md5(uniqid()) . '.' . $file->guessExtension();
        $file->move($this->targetDir . '/' . $utilisateur . '/' . $projet, $fileName);
        return $fileName;
    }
}
