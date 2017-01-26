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
        return $this->render('GediAdminBundle:Admin:home_admin.html.twig', array(// ...
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

            if ($sel != null) {
                if ($_POST['typeaction'] == "supprimé") {
                    // suppression d'utilisateur
                    for ($i = 0; $i <= count($sel) - 1; $i++) {
                        $userToDel = $em->find('GediBaseBundle:Utilisateur', $sel[$i]);
                        $em->remove($userToDel);
                    }
                } else if ($_POST['typeaction'] == "enregistré") {
                    // création ou modification d'utilisateur
                    $utilisateur->setUsername($sel[0]['value']);
                    $utilisateur->setPassword($sel[1]['value']);
                    $utilisateur->setNom($sel[3]['value']);
                    $utilisateur->setPrenom($sel[4]['value']);
                    $utilisateur->setActif(($sel[5]['value'] == "false") ? false : true);
                    $utilisateur->setIdUtilisateur(($sel[6]['value'] != "") ? $sel[6]['value'] : null);
                    $em->merge($utilisateur);
                } else {
                    throw new Exception('typeaction n\'est pas défini');
                }
            } else {
                throw new Exception('La selection est nulle');
            }
            $em->flush();
            $tab_objets = $em->getRepository('GediBaseBundle:Utilisateur')->findAll();
//            $tab = [];
//            foreach ($tab_objets as $item) {
//                array_push($tab,(array) $item);
//            }
            $response = new JsonResponse();
            $response->setData(array('tab_objets' => $tab_objets));
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
     */
    public function groupsAction(Request $request)
    {
        // importation de tous les groupes
        $em = $this->getDoctrine()->getManager();
        $tab_objets = $em->getRepository('GediBaseBundle:Groupe')->findAll();

        // création du formulaire pour créer un nouveau groupe
        $groupe = new Groupe();
        $groupeForm = $this->createForm('Gedi\BaseBundle\Form\GroupeType', $groupe);
        $groupeForm->handleRequest($request);

        if ($groupeForm->isSubmitted() && $groupeForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($groupe);
            $em->flush();
            return $this->redirectToRoute('groups_admin');
        }

        return $this->render('GediAdminBundle:Admin:groups_admin.html.twig', array(
            'tab_objets' => $tab_objets,
            'groupe' => $groupe,
            'groupeForm' => $groupeForm->createView(),
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
