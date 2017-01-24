<?php

namespace Gedi\BaseBundle\Controller;

use Gedi\BaseBundle\Entity\Utilisateur;
use Gedi\BaseBundle\Entity\Contact;
use Gedi\BaseBundle\Form\ContactType;
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
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $contactForm = $this->createForm('Gedi\BaseBundle\Form\ContactType', $contact);
        $contactForm->handleRequest($request);
        $object=$contact->getObject();
        $email=$contact->getEmail();
        $text=$contact->getText();
        $nom=$contact->getName();
        if ($contactForm->isValid() && $contactForm->isSubmitted()) {
            //Envoi du mail à l'admin
            $message = \Swift_Message::newInstance()
                ->setSubject($object)
                ->setFrom($contact->getEmail())
                ->setTo('gedi.l3imiage@gmail.com')
                ->setBody('envoi de l\'adresse : '.$email.'
'.'nom : '.$nom.'
'.'objet du mail : '.$object.'

'.$text)
            ;
            $this->get('mailer')->send($message);

            // Envoyer un e-mail de confirmation
            $message2 = \Swift_Message::newInstance()
                ->setSubject('Confirmation d\'envoi mail GEDI')
                ->setFrom('gedi.l3imiage@gmail.com')
                ->setTo($email)
                ->setBody('Bonjour, votre mail à l\'administrateur de notre gestionnaire de documents GEDI a bien été envoyé, il vous répondra dès que possible !
                 
Cordialement, l\'équipe Gedi.' )
            ;
            $this->get('mailer')->send($message2);


            // the form if they refresh the page
            return $this->redirectToRoute ('start');
        }

        return $this->render('GediBaseBundle:Base:contact.html.twig', array(
            'contact' => $contact,
            'contactForm' => $contactForm->createView(),
        ));
    }
}
