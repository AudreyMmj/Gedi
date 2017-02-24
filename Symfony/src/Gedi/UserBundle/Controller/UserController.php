<?php

namespace Gedi\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class UserController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER') or has_role('ROLE_ADMIN')")
     */
    public function homeAction(Request $request)
    {
//        $session = $request ->getSession();
//        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
//            $session->getFlashBag()->add('info', 'Authentification réussie\nBienvenue ' . $session->get('username'));
//        }
//
//        $content = $this->get('templating')->render('GediBaseBundle:Base:index.html.twig');
//        return new Response($content);
//        $response->setStatusCode(Response::HTTP_NOT_FOUND);
//        return $this->redirectToRoute('oc_platform_home');
//        $session->getFlashBag()->add('info', 'Annonce bien enregistrée');
        return $this->render('GediUserBundle:User:home_user.html.twig');

    }

    /**
     * @Security("has_role('ROLE_USER') or has_role('ROLE_ADMIN')")
     */
    public function accountAction()
    {
        return $this->render('GediUserBundle:User:account_user.html.twig');
    }

    /**
     * @Security("has_role('ROLE_USER') or has_role('ROLE_ADMIN')")
     */
    public function sharedAction()
    {
        return $this->render('GediUserBundle:User:shared_user.html.twig');
    }

    /**
     * @Security("has_role('ROLE_USER') or has_role('ROLE_ADMIN')")
     */
    public function recentAction()
    {
        return $this->render('GediUserBundle:User:recent_user.html.twig');
    }
}
