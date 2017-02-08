<?php

namespace Gedi\BaseBundle\Services;

use Doctrine\ORM\EntityManager;
use Gedi\BaseBundle\Entity\Document;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Service permettant de manipuler les documents
 * Class DocumentService
 * @package Gedi\BaseBundle\Services
 */
class DocumentService
{
    /**
     * @var EntityManager
     */
    private $em;

    /**
     * @var FileService
     */
    private $fs;

    /**
     * DocumentService constructor.
     * @param EntityManager $entityManager
     * @param FileService $fileService
     */
    public function __construct(EntityManager $entityManager, FileService $fileService)
    {
        $this->em = $entityManager;
        $this->fs = $fileService;
    }

    /**
     * Enregistre un document dans la BDD
     * @param $sel
     * @return Document
     */
    public function create($sel)
    {
        $objet = new Document();
        $objet->setNom($sel[1]['value']);
        $objet->setTypeDoc($sel[2]['value']);
        $objet->setTag($sel[3]['value']);
        $objet->setResume($sel[4]['value']);
        $utilisateur = $this->em->find('GediBaseBundle:Utilisateur', $sel[5]['value']);
        $objet->setIdUtilisateurFkDocument($utilisateur);
        $fileName = $this->fs->upload($sel[6]['value']);
        $objet->setFichier($fileName);
        $this->em->persist($objet);
        $this->em->flush();
        return $objet;
    }

    /**
     * Retourne tous les documents en BDD
     * @return array
     */
    public function read()
    {
        return $this->em->getRepository('GediBaseBundle:Document')->findAll();
    }

    /**
     * Met à jour un document
     * @param $sel
     * @return null|object
     */
    public function update($sel)
    {//MAJ
        $objet = $this->em->find('GediBaseBundle:Document', $sel[0]['value']);
        $objet->setNom($sel[1]['value']);
        $objet->setTypeDoc($sel[2]['value']);
        $objet->setTag($sel[3]['value']);
        $objet->setResume($sel[4]['value']);
        $this->em->merge($objet);
        $this->em->flush();
        return $objet;
    }

    /**
     * Supprime un ou plusieurs documents
     * @param $sel
     * @return JsonResponse
     */
    public function delete($sel)
    {
        for ($i = 0; $i <= count($sel) - 1; $i++) {
            $toDel = $this->em->find('GediBaseBundle:Document', $sel[$i]['id']);
            $this->em->remove($toDel);
        }
        $this->em->flush();
        $response = new JsonResponse();
        $response->setData(array('reponse' => "OK"));
        return $response;
    }
}
