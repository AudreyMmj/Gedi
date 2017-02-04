<?php

namespace Gedi\AdminBundle\Controller;

use Doctrine\Common\Annotations\AnnotationException;
use Exception;
use Gedi\BaseBundle\Entity\Document;
use Gedi\BaseBundle\Entity\Groupe;
use Gedi\BaseBundle\Entity\Projet;
use Gedi\BaseBundle\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;


class AdminController extends Controller
{
    /**
     * @Route("/home_admin")
     */
    public function homeAction()
    {
        $em = $this->getDoctrine()->getManager();
        // importation de tous les utilisateurs
        $tab_users = $em->getRepository('GediBaseBundle:Utilisateur')->findAll();
        // importation de tous les projets
        $tab_projects = $em->getRepository('GediBaseBundle:Projet')->findAll();
        // importation de tous les groupes
        $tab_groups = $em->getRepository('GediBaseBundle:Groupe')->findAll();
        // importation de tous les documents
        $tab_docs = $em->getRepository('GediBaseBundle:Document')->findAll();

        return $this->render('GediAdminBundle:Admin:home_admin.html.twig', array(
            'tab_users' => $tab_users,
            'tab_projects' => $tab_projects,
            'tab_groups' => $tab_groups,
            'tab_docs' => $tab_docs,
        ));
    }

    /**
     * Page d'administration des utilisateurs de l'application
     * @Route("/users_admin")
     * @param Request $request
     * @return array|\Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @throws Exception
     */
    public function usersAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateur = new Utilisateur();
        $utilisateurForm = $this->createForm('Gedi\BaseBundle\Form\UtilisateurType', $utilisateur);
        $utilisateurForm->handleRequest($request);

        if ($request->isMethod('POST') && isset($_POST['data']) && isset($_POST['typeaction'])) {
            $sel = $_POST['data'];

            if ($sel == null || $sel == "") {
                throw new Exception('La selection est nulle');
            }

            if ($_POST['typeaction'] == "supprimé") {
                // suppression d'utilisateur
                for ($i = 0; $i <= count($sel) - 1; $i++) {
                    $userToDel = $em->find('GediBaseBundle:Utilisateur', $sel[$i]['id']);
                    $em->remove($userToDel);
                }
                $em->flush();
                $response = new JsonResponse();
                $response->setData(array('reponse' => "OK"));

            } else if ($_POST['typeaction'] == "enregistré" || $_POST['typeaction'] == "modifié") {
                // création ou modification d'utilisateur
                $utilisateur->setUsername($sel[1]['value']);
                $utilisateur->setSalt(substr(md5(time()), 0, 23));
                $encoderFactory = $this->get('security.encoder_factory');
                $encoder = $encoderFactory->getEncoder($utilisateur);
                $password = $encoder->encodePassword($sel[2]['value'], $utilisateur->getSalt());
                $utilisateur->setPassword($password);
                $utilisateur->setNom($sel[4]['value']);
                $utilisateur->setPrenom($sel[5]['value']);
                $utilisateur->setActif(($sel[6]['value'] == "false") ? false : true);
                if ($sel[0]['value'] != "") {
                    $utilisateur->setIdUtilisateur($sel[0]['value']);
                    $em->merge($utilisateur);
                } else {
                    $em->persist($utilisateur);
                }
                $em->flush();

                $rows = [
                    "ck" => 'data-checkbox="true"',
                    "id" => $utilisateur->getIdUtilisateur(),
                    "nom" => $utilisateur->getNom(),
                    "prenom" => $utilisateur->getPrenom(),
                    "login" => $utilisateur->getUsername(),
                    "datec" => date_format($utilisateur->getDateCreation(), 'Y-m-d H:i:s'),
                    "datem" => date_format($utilisateur->getDateModification(), 'Y-m-d H:i:s'),
                    "actif" => (($utilisateur->getActif() == false) ? "" : "1"),
                    "ctrl" => '<span data-toggle="tooltip" data-placement="bottom" title="Accéder à l\'espace utilisateur">' .
                        '<button type="button" class="btn btn-default btn-primary round-button">' .
                        '<span class="glyphicon glyphicon-dashboard"></span></button></span>' .
                        '<span data-toggle="tooltip" data-placement="bottom" title="Editer la fiche utilisateur">' .
                        '<button type="button" class="btn btn-default btn-warning round-button" data-toggle="modal"' .
                        'data-target="#popup-add" onclick="edit(\'{&quot;idUtilisateur&quot;:' . $utilisateur->getIdUtilisateur() .
                        ',&quot;username&quot;:&quot;' . $utilisateur->getUsername() .
                        '&quot;,&quot;password&quot;:&quot;' . $utilisateur->getPassword() .
                        '&quot;,&quot;nom&quot;:&quot;' . $utilisateur->getNom() .
                        '&quot;,&quot;prenom&quot;:&quot;' . $utilisateur->getPrenom() .
                        '&quot;,&quot;actif&quot;:' . (($utilisateur->getActif() == false) ? "false" : "true") . '}\');">' .
                        '<span class="glyphicon glyphicon-pencil"></span></button></span>',
                ];

                $response = new JsonResponse();
                $response->setData(array('reponse' => (array)$rows));
            } else {
                throw new Exception('typeaction n\'est pas défini');
            }
            return $response;
        }

        // importation de tous les utilisateurs
        $tab_objets = $em->getRepository('GediBaseBundle:Utilisateur')->findAll();

        return $this->render('GediAdminBundle:Admin:users_admin.html.twig', array(
            'tab_objets' => $tab_objets,
            'utilisateur' => $utilisateur,
            'utilisateurForm' => $utilisateurForm->createView(),
        ));
    }

    /**
     * Page d'administration des groupes de l'application
     * @Route("/groups_admin")
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function groupsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $groupe = new Groupe();
        $groupeForm = $this->createForm('Gedi\BaseBundle\Form\GroupeType', $groupe);
        $groupeForm->handleRequest($request);

        if ($request->isMethod('POST') && isset($_POST['data']) && isset($_POST['typeaction'])) {
            $sel = $_POST['data'];

            if ($sel == null || $sel == "") {
                throw new Exception('La selection est nulle');
            }

            $rows = null;
            $response = new JsonResponse();

            if ($_POST['typeaction'] == "supprimé") {
                // suppression de groupes
                for ($i = 0; $i <= count($sel) - 1; $i++) {
                    $groupToDel = $em->find('GediBaseBundle:Groupe', $sel[$i]['id']);
                    $em->remove($groupToDel);
                }
                $em->flush();
                $response->setData(array('reponse' => "OK"));
            } else if ($_POST['typeaction'] == "enregistré" || $_POST['typeaction'] == "modifié") {
                if ($_POST['typeaction'] == "enregistré") {
                    // création de groupes
                    $groupe->setNom($sel[1]['value']);
                    $utilisateur = $em->find('GediBaseBundle:Utilisateur', $sel[2]['value']);
                    $utilisateur->addIdGroupeUg($groupe);
                    $groupe->addIdUtilisateurUg($utilisateur);
                    $groupe->setIdUtilisateurFkGroupe($utilisateur);
                    $em->persist($groupe);

                } else if ($_POST['typeaction'] == "modifié") {
                    // modification de groupes
                    $groupe = $em->find('GediBaseBundle:Groupe', $sel[0]['value']);
                    $groupe->setNom($sel[1]['value']);
                    $em->merge($groupe);

                }

                $em->flush();
                $rows = [
                    "ck" => 'data-checkbox="true"',
                    "id" => $groupe->getIdGroupe(),
                    "nom" => $groupe->getNom(),
                    "datec" => date_format($groupe->getDateCreation(), 'Y-m-d H:i:s'),
                    "datem" => date_format($groupe->getDateModification(), 'Y-m-d H:i:s'),
                    "propio" => $groupe->getIdUtilisateurFkGroupe()->getNom() . " " . $groupe->getIdUtilisateurFkGroupe()->getPrenom(),
                    "ctrl" => '<span data-toggle="tooltip" data-placement="bottom" title="Voir les membres">' .
                        '<button type="button" class="btn btn-default btn-primary round-button">' .
                        '<span class="glyphicon glyphicon-user"></span></button></span>' .
                        '<span data-toggle="tooltip" data-placement="bottom" title="Editer le groupe">' .
                        '<button type="button" class="btn btn-default btn-warning round-button" data-toggle="modal"' .
                        'data-target="#popup-add" onclick="edit(\'{&quot;idGroupe&quot;:' . $groupe->getIdGroupe() .
                        ',&quot;nom&quot;:&quot;' . $groupe->getNom() . '&quot;}\');">' .
                        '<span class="glyphicon glyphicon-pencil"></span></button></span>',
                ];

                $response->setData(array('reponse' => (array)$rows));

            } else if ($_POST['typeaction'] == "children") {
                $groupe = $em->find('GediBaseBundle:Groupe', $sel);
                $rows = [];
                foreach ($groupe->getIdUtilisateurUg() as $membre) {
                    array_push($rows, $membre->getNom() . " " . $membre->getPrenom() . " - " . $membre->getUsername());
                }
                $response->setData(array('reponse' => (array)$rows));

            } else {
                throw new Exception('typeaction n\'est pas défini');
            }
            return $response;
        }

        // importation de tous les groupes
        $tab_objets = $em->getRepository('GediBaseBundle:Groupe')->findAll();
        // importation de tous les utilisateurs
        $tab_users = $em->getRepository('GediBaseBundle:Utilisateur')->findAll();

        return $this->render('GediAdminBundle:Admin:groups_admin.html.twig', array(
            'tab_objets' => $tab_objets,
            'groupe' => $groupe,
            'groupeForm' => $groupeForm->createView(),
            'tab_users' => $tab_users,
        ));
    }

    /**
     * Page d'administration des projets de l'application
     * @Route("/projects_admin")
     * @param Request $request
     * @return Response
     */
    public function projectsAction(Request $request)
    {
        // importation de tous les projets
        $em = $this->getDoctrine()->getManager();
        $tab_objets = $em->getRepository('GediBaseBundle:Projet')->findAll();

        // création du formulaire pour créer un nouveau projet
        $projet = new Projet();
        $projetForm = $this->createForm('Gedi\BaseBundle\Form\ProjetType', $projet);
        $projetForm->handleRequest($request);

        if ($projetForm->isSubmitted() && $projetForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($projet);
            $em->flush();
            return $this->redirectToRoute('projects_admin');
        }

        return $this->render('GediAdminBundle:Admin:projects_admin.html.twig', array(
            'tab_objets' => $tab_objets,
            'projet' => $projet,
            'projetForm' => $projetForm->createView(),
        ));
    }

    /**
     * Page d'administration des documents de l'application
     * @Route("/docs_admin")
     * @param Request $request
     * @return Response
     */
    public function documentsAction(Request $request)
    {
        // importation de tous les documents
        $em = $this->getDoctrine()->getManager();
        $tab_objets = $em->getRepository('GediBaseBundle:Document')->findAll();

        // création du formulaire pour créer un nouveau document
        $document = new Document();
        $documentForm = $this->createForm('Gedi\BaseBundle\Form\DocumentType', $document);
        $documentForm->handleRequest($request);

        if ($documentForm->isSubmitted() && $documentForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($document);
            $em->flush();
            return $this->redirectToRoute('docs_admin');
        }

        return $this->render('GediAdminBundle:Admin:docs_admin.html.twig', array(
            'tab_objets' => $tab_objets,
            'document' => $document,
            'documentForm' => $documentForm->createView(),
        ));
    }
}
