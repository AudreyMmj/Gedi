<?php

namespace Gedi\BaseBundle\Services;

use Doctrine\ORM\EntityManager;
use Gedi\BaseBundle\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;

/**
 * Service permettant de manipuler les utilisateurs
 * Class UtilisateurService
 * @package Gedi\BaseBundle\Service
 */
class UtilisateurService extends Controller
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @var EncoderFactory
     */
    private $ef;

    /**
     * UtilisateurService constructor.
     * @param EntityManager $entityManager
     * @param EncoderFactory $encoderFactory
     */
    public function __construct(EntityManager $entityManager, EncoderFactory $encoderFactory)
    {
        $this->em = $entityManager;
        $this->ef = $encoderFactory;
    }

    /**
     * Enregistre un utilisateur dans la BDD
     * @param $sel
     * @return Utilisateur
     */
    public function create($sel)
    {
        $objet = new Utilisateur();
        $objet->setUsername($sel[1]['value']);
        $objet->setSalt(substr(md5(time()), 0, 23));
        $encoder = $this->ef->getEncoder($objet);
        $password = $encoder->encodePassword($sel[2]['value'], $objet->getSalt());
        $objet->setPassword($password);
        $objet->setNom($sel[4]['value']);
        $objet->setPrenom($sel[5]['value']);
        $objet->setActif(($sel[6]['value'] == "false") ? false : true);
        $this->em->persist($objet);
        $this->em->flush();
        return $objet;
    }

    /**
     * Retourne tous les utilisateurs en BDD
     * @return array
     */
    public function read()
    {
        return $this->em->getRepository('GediBaseBundle:Utilisateur')->findAll();
    }

    /**
     * Met à jour un utilisateur
     * @param $sel
     * @return null|object
     */
    public function update($sel)
    {
        $objet = $this->em->find('GediBaseBundle:Utilisateur', $sel[0]['value']);
        $objet->setUsername($sel[1]['value']);
        $objet->setSalt(substr(md5(time()), 0, 23));
        $encoder = $this->ef->getEncoder($objet);
        $password = $encoder->encodePassword($sel[2]['value'], $objet->getSalt());
        $objet->setPassword($password);
        $objet->setNom($sel[4]['value']);
        $objet->setPrenom($sel[5]['value']);
        $objet->setActif(($sel[6]['value'] == "false") ? false : true);
        $this->em->merge($objet);
        $this->em->flush();
        return $objet;
    }

    /**
     * Supprime un ou plusieurs utilisateurs
     * @param $sel
     * @return JsonResponse
     */
    public function delete($sel)
    {
        for ($i = 0; $i <= count($sel) - 1; $i++) {
            $toDel = $this->em->find('GediBaseBundle:Utilisateur', $sel[$i]['id']);
            $this->em->remove($toDel);
        }
        $this->em->flush();
        $response = new JsonResponse();
        $response->setData(array('reponse' => "OK"));
        return $response;
    }
}