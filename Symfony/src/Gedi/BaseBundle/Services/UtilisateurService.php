<?php

namespace Gedi\BaseBundle\Services;

use Doctrine\ORM\EntityManager;
use Exception;
use Gedi\BaseBundle\Entity\Utilisateur;
use Gedi\BaseBundle\Resources\Enum\BaseEnum;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;

/**
 * Service permettant de manipuler les utilisateurs
 * Class UtilisateurService
 * @package Gedi\BaseBundle\Service
 */
class UtilisateurService
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
     * @var Filesystem
     */
    private $fs;

    /**
     * @var string
     */
    private $targetDir;

    /**
     * UtilisateurService constructor.
     * @param EntityManager $entityManager
     * @param EncoderFactory $encoderFactory
     * @param $targetDir
     */
    public function __construct(EntityManager $entityManager, EncoderFactory $encoderFactory, $targetDir)
    {
        $this->em = $entityManager;
        $this->ef = $encoderFactory;
        $this->fs = new Filesystem();
        $this->targetDir = $targetDir;
    }

    /**
     * Enregistre un utilisateur dans la BDD
     * et crée son répertoire de sauvegarde
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
        if ($objet->getActif() == true) {
            $this->fs->mkdir($this->targetDir . $objet->getIdUtilisateur(), 0777);
        }
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
     * Met à jour un utilisateur et crée son repertoire de sauvegarde
     * si il n'était pas actif
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
        if ($objet->getActif() == true) {
            $this->fs->mkdir($this->targetDir . $objet->getIdUtilisateur(), 0777);
        }
        return $objet;
    }

    /**
     * Supprime un ou plusieurs utilisateurs avec
     * leurs repertoires de sauvegarde
     * @param $sel
     * @return string
     */
    public function delete($sel)
    {
        for ($i = 0; $i <= count($sel) - 1; $i++) {
            $this->fs->remove($this->targetDir . $sel[$i]['id']);
            $toDel = $this->em->find('GediBaseBundle:Utilisateur', $sel[$i]['id']);
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
        $objet = $this->em->find('GediBaseBundle:Utilisateur', $sel);
        switch ($childType) {
            case BaseEnum::PROJET:
                return $objet->getIdUtilisateurFkProjet();
                break;
            default:
                throw new Exception('ChildType n\'est pas défini');
        }
    }
}
