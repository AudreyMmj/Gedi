<?php

namespace Gedi\BaseBundle\Controller;

use Gedi\BaseBundle\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BaseController extends Controller
{
    /**
     * @Route("/")
     */
    public function startAction()
    {
        return $this->render('GediBaseBundle:Base:start.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/home")
     */
    public function homeAction()
    {
        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->render('GediAdminBundle:Admin:home_admin.html.twig');
        } elseif ($this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
            return $this->render('GediUserBundle:User:home_user.html.twig');
        }
//        return $this->render('GediBaseBundle:Base:home.html.twig', array(
//            // ...
//        ));
    }

    /**
     * Page d'enregistrement des nouveaux utilisateurs
     * Les utilisateurs enregistrés ici ne sont pas activés
     * @Route("/register")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function registerAction(Request $request)
    {
        // crée un nouvel utilisateur non activé et
        // renvoie un formulaire de création d'utilisateur
        $utilisateur = new Utilisateur();
        $utilisateurForm = $this->createForm('Gedi\BaseBundle\Form\UtilisateurType', $utilisateur);
        $utilisateurForm->handleRequest($request);

        // enregistre l'utilisateur lorsque le formulaire est soumis
        if ($utilisateurForm->isSubmitted() && $utilisateurForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($utilisateur);
            $em->flush($utilisateur);

            return $this->redirectToRoute('start');
        }

        return $this->render('GediBaseBundle:Base:register.html.twig', array(
            'utilisateur' => $utilisateur,
            'utilisateurForm' => $utilisateurForm->createView(),
        ));
    }

    /**
     * @Route("/contact")
     */
    public function contactAction()
    {
        return $this->render('GediBaseBundle:Base:contact.html.twig', array(
            // ...
        ));
    }
}
