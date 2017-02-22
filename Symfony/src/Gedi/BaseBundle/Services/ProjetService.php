<?php

namespace Gedi\BaseBundle\Services;

use Doctrine\ORM\EntityManager;
use Exception;
use Gedi\BaseBundle\Entity\Projet;
use Gedi\BaseBundle\Resources\Enum\BaseEnum;

/**
 * Service permettant de manipuler les projets
 * Class ProjetService
 * @package Gedi\BaseBundle\Services
 */
class ProjetService
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @var string
     */
    private $targetDir;

    /**
     * ProjetService constructor.
     * @param EntityManager $entityManager
     * @param $targetDir
     */
    public function __construct(EntityManager $entityManager, $targetDir)
    {
        $this->em = $entityManager;
        $this->targetDir = $targetDir;
    }

    /**
     * Enregistre un projet dans la BDD
     * @param $sel
     * @return Projet
     */
    public function create($sel)
    {
        $objet = new Projet();
        $objet->setNom($sel[1]['value']);
        $utilisateur = $this->em->find('GediBaseBundle:Utilisateur', $sel[2]['value']);
        $objet->setIdUtilisateurFkProjet($utilisateur);
        if ($sel[3]['value'] != null && $sel[3]['value'] != "") {
            $parent = $this->em->find('GediBaseBundle:Projet', $sel[3]['value']);
            $parent->addChildren($objet);
            $objet->setParent($parent);
            $objet->setPath($parent->getPath() . "/" . $objet->getNom());
        } else {
            $objet->setPath($objet->getIdUtilisateurFkProjet()->getIdUtilisateur() . "/" . $objet->getNom());
        }
        $this->em->persist($objet);
        $this->em->flush();
        mkdir($this->targetDir . $objet->getPath(), 0777);
        return $objet;
    }

    /**
     * Retourne tous les projets en BDD
     * @return array
     */
    public function read()
    {
        return $this->em->getRepository('GediBaseBundle:Projet')->findAll();
    }

    /**
     * Met à jour un projet
     * @param $sel
     * @return null|object
     */
    public function update($sel)
    {
        $objet = $this->em->find('GediBaseBundle:Projet', $sel[0]['value']);
        $objet->setNom($sel[1]['value']);
        $oldPath = $objet->getPath();
        $newPath = substr($oldPath, 0, strrpos($oldPath, "/") + 1) . $objet->getNom();
        $objet->setPath($newPath);
        rename($this->targetDir . $oldPath, $this->targetDir . $newPath);
        $this->em->merge($objet);
        $this->em->flush();
        return $objet;
    }

    /**
     * Supprime un ou plusieurs projets
     * @param $sel
     * @return string
     */
    public function delete($sel)
    {
        for ($i = 0; $i <= count($sel) - 1; $i++) {
            $toDel = $this->em->find('GediBaseBundle:Projet', $sel[$i]['id']);
            rmdir($this->targetDir . $toDel->getPath());
            $this->em->remove($toDel);
        }
        $this->em->flush();
        return "OK";
    }

    /**
     * Permet de récupérer les entités enfants d'un objet
     * @param $sel
     * @param $childType
     * @return array
     * @throws Exception
     */
    public function getChildren($sel, $childType)
    {
        $objet = $this->em->find('GediBaseBundle:Projet', $sel);
        switch ($childType) {
            case BaseEnum::DOCUMENT:
                return $objet->getIdProjetFkDocument();
                break;
            default:
                throw new Exception('ChildType n\'est pas défini');
        }
    }
}
