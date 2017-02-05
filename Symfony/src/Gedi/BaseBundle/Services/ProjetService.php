<?php

namespace Gedi\BaseBundle\Services;

use Doctrine\ORM\EntityManager;
use Gedi\BaseBundle\Entity\Projet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Service permettant de manipuler les projets
 * Class ProjetService
 * @package Gedi\BaseBundle\Services
 */
class ProjetService extends Controller
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * ProjetService constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
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
        $this->em->persist($objet);
        $this->em->flush();
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
