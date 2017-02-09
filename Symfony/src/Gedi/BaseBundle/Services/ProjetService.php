<?php

namespace Gedi\BaseBundle\Services;

use Doctrine\ORM\EntityManager;
use Gedi\BaseBundle\Entity\Projet;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\JsonResponse;

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
     * @var Filesystem
     */
    private $fs;

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
        $this->fs = new Filesystem();
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
        $objet->setPath($objet->getIdUtilisateurFkProjet()->getIdUtilisateur() . "/" . $objet->getNom());
        $this->em->persist($objet);
        $this->em->flush();
        $this->fs->mkdir($this->targetDir . $objet->getPath(), 0777);
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
        $this->em->merge($objet);
        $this->em->flush();
        return $objet;
    }

    /**
     * Supprime un ou plusieurs projets
     * @param $sel
     * @return JsonResponse
     */
    public function delete($sel)
    {
        for ($i = 0; $i <= count($sel) - 1; $i++) {
            $toDel = $this->em->find('GediBaseBundle:Projet', $sel[$i]['id']);
            $this->fs->remove($this->targetDir . $toDel->getPath());
            $this->em->remove($toDel);
        }
        $this->em->flush();
        $response = new JsonResponse();
        $response->setData(array('reponse' => "OK"));
        return $response;
    }

    /**
     * Permet de récupérer les entités enfants d'un objet
     * @param $sel
     * @param $childType
     * @return array
     */
    public function getChildren($sel, $childType)
    {
        $objet = $this->em->find('GediBaseBundle:Projet', $sel);
        $rows = [];
        if ($childType == "documents") {
            foreach ($objet->getIdProjetFkDocument() as $child) {
                array_push($rows, $child->getNom() . " " . $child->getTypeDoc() . " - " . $child->getTag());
            }
        }
        return $rows;
    }
}
