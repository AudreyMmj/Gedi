<?php

namespace Gedi\AdminBundle\Controller;

use Doctrine\Common\Annotations\AnnotationException;
use Gedi\BaseBundle\Entity\Document;
use Gedi\BaseBundle\Entity\Groupe;
use Gedi\BaseBundle\Entity\Projet;
use Gedi\BaseBundle\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
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
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response|array
     */
    public function usersAction(Request $request)
    {
        // importation de tous les utilisateurs
        $em = $this->getDoctrine()->getManager();
        $tab_objets = $em->getRepository('GediBaseBundle:Utilisateur')->findAll();

        // création du formulaire pour créer ou modifier un utilisateur
        $utilisateur = new Utilisateur();
        $utilisateurForm = $this->createForm('Gedi\BaseBundle\Form\UtilisateurType', $utilisateur);
        $utilisateurForm->handleRequest($request);

        if ($utilisateurForm->isSubmitted() && $utilisateurForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->merge($utilisateur);
            $em->flush();
            return $this->redirectToRoute('users_admin');
        }

        // suppression d'utilisateur
        if ($request->isMethod('POST')) {
            $sel = $_POST["data"];

            if ($sel != null) {
                for ($i = 0; $i <= count($sel) - 1; $i++) {
                    $userToDel = $em->find('GediBaseBundle:Utilisateur', $sel[$i]);
                    $em->remove($userToDel);
                }
                $em->flush();
            }
        }

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
