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
     * @param $projet
     * @return string
     * @internal param $utilisateur
     */
    public function upload(UploadedFile $file, $projet)
    {
        $fileName = md5(uniqid()) . '.' . $file->guessExtension();
        $file->move($this->targetDir . '/' . $projet, $fileName);
        return $fileName;
    }

    /**
     * Retourne la taille de la mémoire occupée par le bankfile
     * @return float
     */
    public function memorySize()
    {
        return disk_total_space($this->targetDir);
    }

    /**
     * Fonction de suppression recursive, supprime un repertoire
     * avec tout son contenu
     * @param $dir
     */
    public function rmdir_recursive($dir)
    {
        foreach (scandir($dir) as $file) {
            if ('.' === $file || '..' === $file) continue;
            if (is_dir("$dir/$file")) $this->rmdir_recursive("$dir/$file");
            else unlink("$dir/$file");
        }
        rmdir($dir);
    }
}
