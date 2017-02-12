<?php

namespace Gedi\BaseBundle\Services;

use Doctrine\ORM\EntityManager;
use Exception;
use Gedi\BaseBundle\Entity\Groupe;
use Gedi\BaseBundle\Resources\Enum\BaseEnum;

/**
 * Service permettant de manipuler les groupes
 * Class GroupeService
 * @package Gedi\BaseBundle\Services
 */
class GroupeService
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * GroupeService constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * Enregistre un groupe dans la BDD
     * @param $sel
     * @return Groupe
     */
    public function create($sel)
    {
        $objet = new Groupe();
        $objet->setNom($sel[1]['value']);
        $utilisateur = $this->em->find('GediBaseBundle:Utilisateur', $sel[2]['value']);
        $utilisateur->addIdGroupeUg($objet);
        $objet->addIdUtilisateurUg($utilisateur);
        $objet->setIdUtilisateurFkGroupe($utilisateur);
        $this->em->persist($objet);
        $this->em->flush();
        return $objet;
    }

    /**
     * Retourne tous les groupes en BDD
     * @return array
     */
    public function read()
    {
        return $this->em->getRepository('GediBaseBundle:Groupe')->findAll();
    }

    /**
     * Met à jour un groupe
     * @param $sel
     * @return null|object
     */
    public function update($sel)
    {
        $objet = $this->em->find('GediBaseBundle:Groupe', $sel[0]['value']);
        $objet->setNom($sel[1]['value']);
        $this->em->merge($objet);
        $this->em->flush();
        return $objet;
    }

    /**
     * Supprime un ou plusieurs groupes
     * @param $sel
     * @return string
     */
    public function delete($sel)
    {
        for ($i = 0; $i <= count($sel) - 1; $i++) {
            $toDel = $this->em->find('GediBaseBundle:Groupe', $sel[$i]['id']);
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
        $objet = $this->em->find('GediBaseBundle:Groupe', $sel);
        $rows = [];
        switch ($childType) {
            case BaseEnum::UTILISATEUR:
                foreach ($objet->getIdUtilisateurUg() as $child) {
                    array_push($rows, $child->getNom() . " " . $child->getPrenom() . " - " . $child->getUsername());
                }
                break;
            default:
                throw new Exception('ChildType n\'est pas défini');
        }
        return $rows;
    }
}
