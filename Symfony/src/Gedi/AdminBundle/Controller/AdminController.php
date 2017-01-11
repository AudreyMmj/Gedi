<?php

namespace Gedi\AdminBundle\Controller;

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
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     */
    public function usersAction(Request $request)
    {
        // importation de tous les utilisateurs
        $em = $this->getDoctrine()->getManager();
        $tab_objets = $em->getRepository('GediBaseBundle:Utilisateur')->findAll();

        // création du formulaire pour créer un nouvel utilisateur
        $utilisateur = new Utilisateur();
        $utilisateur->setActif(1);
        $utilisateurForm = $this->createForm('Gedi\BaseBundle\Form\UtilisateurType', $utilisateur);
        $utilisateurForm->handleRequest($request);
        if ($utilisateurForm->isSubmitted() && $utilisateurForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateur);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success', 'Utilisateur bien enregistré');
            return $this->redirectToRoute('users_admin');
        }

        // création du formulaire de suppression d'utilisateur
        $deleteForm = $this->createDeleteForm();
        $deleteForm->handleRequest($request);
        if ($deleteForm->isSubmitted() && $deleteForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if(isset($_POST["data"]))
            {
                $data = json_decode($_POST["data"]);
                $sel = $data->sel;
                for ($i = 0; $i <= count($sel); $i++) {
                    $temp = $sel[$i];
                    $userToDel = $em->find('Gedi\BaseBundle\Entity\Utilisateur',  $temp[0]);
                    $em->remove($userToDel);
                }
            }



//            $sel = $_POST['sel'];
//            for ($i = 1; $i <= count($sel); $i++) {
//                $temp = $sel[$i];
//                $userToDel = $em->find('Gedi\BaseBundle\Entity\Utilisateur',  $temp[0]);
//                $em->remove($userToDel);
//            }

            $em->flush();
            return $this->redirectToRoute('users_admin');
        }

        return $this->render('GediAdminBundle:Admin:users_admin.html.twig', array(
            'tab_objets' => $tab_objets,
            'utilisateur' => $utilisateur,
            'utilisateurForm' => $utilisateurForm->createView(),
            'deleteForm' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a utilisateur entity.
     *
     * @Route("/users_admin/del_user", name="del_user")
     * @Method("DELETE")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, $sel)
    {
            $em = $this->getDoctrine()->getManager();
//            $sel = $_POST['sel'];
//            $sel = $request->get('sel');
            for ($i = 1; $i <= count($sel); $i++) {
                $temp = $sel[$i];
                $userToDel = $em->find('Utilisateur',  $temp[0]);
                $em->remove($userToDel);
            }

            $em->flush();
            return $this->redirectToRoute('users_admin');

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
            $this->get('session')->getFlashBag()->add('success', 'Groupe bien enregistré');
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
            $this->get('session')->getFlashBag()->add('success', 'Projet bien enregistré');
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
            $this->get('session')->getFlashBag()->add('success', 'Document bien enregistré');
            return $this->redirectToRoute('docs_admin');
        }

        return $this->render('GediAdminBundle:Admin:docs_admin.html.twig', array(
            'tab_objets' => $tab_objets,
            'document' => $document,
            'documentForm' => $documentForm->createView(),
        ));
    }

    /**
     * Creates a form to delete a utilisateur entity.
     *
     * @param Utilisateur $utilisateur The utilisateur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm()
    {
        return $this->createFormBuilder()
//            ->setAction($this->generateUrl('users_admin_delete'))
            ->setMethod('DELETE')
            ->getForm();
    }
}
