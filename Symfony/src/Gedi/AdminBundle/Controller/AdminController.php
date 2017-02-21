<?php

namespace Gedi\AdminBundle\Controller;

use Exception;
use Gedi\BaseBundle\Entity\Document;
use Gedi\BaseBundle\Entity\Groupe;
use Gedi\BaseBundle\Entity\Projet;
use Gedi\BaseBundle\Entity\Utilisateur;
use Gedi\BaseBundle\Resources\Enum\BaseEnum;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class AdminController extends Controller
{
    /**
     * Page d'accueil du back office
     * @return Response
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
     * @param Request $request
     * @return JsonResponse|Response
     * @throws Exception
     */
    public function usersAction(Request $request)
    {
        $objet = new Utilisateur();
        $form = $this->createForm('Gedi\BaseBundle\Form\UtilisateurType', $objet);
        $form->handleRequest($request);

        if ($request->isMethod('POST') && isset($_POST['data']) && isset($_POST['typeaction'])) {
            $sel = $_POST['data'];

            if ($sel == null || $sel == "") {
                throw new Exception('La selection est nulle');
            }
            $rows = [];
            $response = new JsonResponse();

            switch ($_POST['typeaction']) {
                case BaseEnum::SUPPRESSION:
                    $rows = $this->get('utilisateur.service')->delete($sel);
                    break;
                case BaseEnum::ENREGISTREMENT:
                    $objet = $this->get('utilisateur.service')->create($sel);
                    break;
                case BaseEnum::MODIFICATION:
                    $objet = $this->get('utilisateur.service')->update($sel);
                    break;
                default:
                    throw new Exception('Typeaction n\'est pas reconnu');
            }

            if ($_POST['typeaction'] == BaseEnum::ENREGISTREMENT || $_POST['typeaction'] == BaseEnum::MODIFICATION) {
                $rows = [
                    "ck" => 'data-checkbox="true"',
                    "id" => $objet->getIdUtilisateur(),
                    "nom" => $objet->getNom(),
                    "prenom" => $objet->getPrenom(),
                    "login" => $objet->getUsername(),
                    "datec" => date_format($objet->getDateCreation(), 'Y-m-d H:i:s'),
                    "datem" => date_format($objet->getDateModification(), 'Y-m-d H:i:s'),
                    "actif" => (($objet->getActif() == false) ? "" : "1"),
                    "ctrl" => '<span data-toggle="tooltip" data-placement="bottom" title="Accéder à l\'espace utilisateur">' .
                        '<button type="button" class="btn btn-default btn-primary round-button">' .
                        '<span class="glyphicon glyphicon-dashboard"></span></button></span>' .
                        '<span data-toggle="tooltip" data-placement="bottom" title="Editer la fiche utilisateur">' .
                        '<button type="button" class="btn btn-default btn-warning round-button" data-toggle="modal"' .
                        'data-target="#popup-add" onclick="edit(\'{&quot;idUtilisateur&quot;:' . $objet->getIdUtilisateur() .
                        ',&quot;username&quot;:&quot;' . $objet->getUsername() .
                        '&quot;,&quot;password&quot;:&quot;' . $objet->getPassword() .
                        '&quot;,&quot;nom&quot;:&quot;' . $objet->getNom() .
                        '&quot;,&quot;prenom&quot;:&quot;' . $objet->getPrenom() .
                        '&quot;,&quot;actif&quot;:' . (($objet->getActif() == false) ? "false" : "true") . '}\');">' .
                        '<span class="glyphicon glyphicon-pencil"></span></button></span>',
                ];
            }
            $response->setData(array('reponse' => (array)$rows));
            return $response;
        }

        // importation de tous les utilisateurs
        $tab_objets = $this->get('utilisateur.service')->read();

        return $this->render('GediAdminBundle:Admin:users_admin.html.twig', array(
            'tab_objets' => $tab_objets,
            'utilisateur' => $objet,
            'utilisateurForm' => $form->createView(),
        ));
    }

    /**
     * Page d'administration des groupes de l'application
     * @param Request $request
     * @return JsonResponse|Response
     * @throws Exception
     */
    public function groupsAction(Request $request)
    {
        $objet = new Groupe();
        $form = $this->createForm('Gedi\BaseBundle\Form\GroupeType', $objet);
        $form->handleRequest($request);

        if ($request->isMethod('POST') && isset($_POST['data']) && isset($_POST['typeaction'])) {
            $sel = $_POST['data'];

            if ($sel == null || $sel == "") {
                throw new Exception('La selection est nulle');
            }
            $rows = [];
            $response = new JsonResponse();

            switch ($_POST['typeaction']) {
                case BaseEnum::SUPPRESSION:
                    $rows = $this->get('groupe.service')->delete($sel);
                    break;
                case BaseEnum::ENREGISTREMENT:
                    $objet = $this->get('groupe.service')->create($sel);
                    break;
                case BaseEnum::MODIFICATION:
                    $objet = $this->get('groupe.service')->update($sel);
                    break;
                case BaseEnum::UTILISATEUR:
                    $tmp = $this->get('groupe.service')->getChildren($sel, $_POST['typeaction']);

                    if (sizeof($tmp) > 0) {
                        foreach ($tmp as $child) {
                            array_push($rows, '<li class="list-group-item">' . $child->getNom() . " " .
                                $child->getPrenom() . " - " . $child->getUsername() . '</li>');
                        }
                    } else {
                        array_push($rows, '<li class="list-group-item">... vide</li>');
                    }
                    break;
                default:
                    throw new Exception('Typeaction n\'est pas reconnu');
            }

            if ($_POST['typeaction'] == BaseEnum::ENREGISTREMENT || $_POST['typeaction'] == BaseEnum::MODIFICATION) {
                $rows = [
                    "ck" => 'data-checkbox="true"',
                    "id" => $objet->getIdGroupe(),
                    "nom" => $objet->getNom(),
                    "datec" => date_format($objet->getDateCreation(), 'Y-m-d H:i:s'),
                    "datem" => date_format($objet->getDateModification(), 'Y-m-d H:i:s'),
                    "propio" => $objet->getIdUtilisateurFkGroupe()->getNom() . " " . $objet->getIdUtilisateurFkGroupe()->getPrenom(),
                    "ctrl" => '<button type="button" class="btn btn-default btn-primary round-button btn-view-entity"
                            data-toggle="popover" data-placement="auto left" title="Membres du groupe"
                            data-trigger="focus" data-content="<ul id=\'liste-membres\' class=\'list-group\'></ul>"
                            data-animation="true" data-container="body" data-html="true">' .
                        '<span class="glyphicon glyphicon-user"></span></button>' .
                        '<span data-toggle="tooltip" data-placement="bottom" title="Editer le groupe">' .
                        '<button type="button" class="btn btn-default btn-warning round-button" data-toggle="modal"' .
                        'data-target="#popup-add" onclick="edit(\'{&quot;idGroupe&quot;:' . $objet->getIdGroupe() .
                        ',&quot;nom&quot;:&quot;' . $objet->getNom() . '&quot;}\');">' .
                        '<span class="glyphicon glyphicon-pencil"></span></button></span>',
                ];
            }
            $response->setData(array('reponse' => (array)$rows));
            return $response;
        }

        // importation de tous les groupes
        $tab_objets = $this->get('groupe.service')->read();
        // importation de tous les utilisateurs
        $tab_users = $this->get('utilisateur.service')->read();

        return $this->render('GediAdminBundle:Admin:groups_admin.html.twig', array(
            'tab_objets' => $tab_objets,
            'groupe' => $objet,
            'groupeForm' => $form->createView(),
            'tab_users' => $tab_users,
        ));
    }

    /**
     * Page d'administration des projets de l'application
     * @param Request $request
     * @return JsonResponse|Response
     * @throws Exception
     */
    public function projectsAction(Request $request)
    {
        $objet = new Projet();
        $form = $this->createForm('Gedi\BaseBundle\Form\ProjetType', $objet);
        $form->handleRequest($request);

        if ($request->isMethod('POST') && isset($_POST['data']) && isset($_POST['typeaction'])) {
            $sel = $_POST['data'];

            if ($sel == null || $sel == "") {
                throw new Exception('La selection est nulle');
            }
            $rows = [];
            $response = new JsonResponse();

            switch ($_POST['typeaction']) {
                case BaseEnum::SUPPRESSION:
                    $rows = $this->get('projet.service')->delete($sel);
                    break;
                case BaseEnum::ENREGISTREMENT:
                    $objet = $this->get('projet.service')->create($sel);
                    break;
                case BaseEnum::MODIFICATION:
                    $objet = $this->get('projet.service')->update($sel);
                    break;
                case BaseEnum::DOCUMENT:
                    $tmp = $this->get('projet.service')->getChildren($sel, $_POST['typeaction']);

                    if (sizeof($tmp) > 0) {
                        foreach ($tmp as $child) {
                            array_push($rows, '<li class="list-group-item">' . $child->getNom() . " " .
                                $child->getTypeDoc() . " - " . $child->getTag() . '</li>');
                        }
                    } else {
                        array_push($rows, '<li class="list-group-item">... vide</li>');
                    }
                    break;
                case BaseEnum::PROJET:
                    $tmp = $this->get('utilisateur.service')->getChildren($sel, $_POST['typeaction']);

                    if (sizeof($tmp) > 0) {
                        foreach ($tmp as $child) {
                            array_push($rows, '<a id="list-activable-item-project-' . $child->getidProjet() .
                                '" href="#" onclick="addProject(' . $child->getidProjet() .
                                ')" class="list-group-item list-activable-item">' . $child->getNom() . '</a>');
                        }
                    } else {
                        array_push($rows, '<a href="#" class="list-group-item">... vide</a>');
                    }
                    break;
                default:
                    throw new Exception('Typeaction n\'est pas reconnu');
            }

            if ($_POST['typeaction'] == BaseEnum::ENREGISTREMENT || $_POST['typeaction'] == BaseEnum::MODIFICATION) {
                $rows = [
                    "ck" => 'data-checkbox="true"',
                    "id" => $objet->getIdProjet(),
                    "nom" => $objet->getNom(),
                    "datec" => date_format($objet->getDateCreation(), 'Y-m-d H:i:s'),
                    "datem" => date_format($objet->getDateModification(), 'Y-m-d H:i:s'),
                    "propio" => $objet->getIdUtilisateurFkProjet()->getNom() . " " . $objet->getIdUtilisateurFkProjet()->getPrenom(),
                    "ctrl" => '<button type="button" class="btn btn-default btn-primary round-button btn-view-entity"
                            data-toggle="popover" data-placement="auto left" title="Documents du projet"
                            data-trigger="focus" data-content="<ul id=\'liste-membres\' class=\'list-group\'></ul>"
                            data-animation="true" data-container="body" data-html="true">' .
                        '<span class="glyphicon glyphicon-file"></span></button>' .
                        '<span data-toggle="tooltip" data-placement="bottom" title="Editer le projet">' .
                        '<button type="button" class="btn btn-default btn-warning round-button" data-toggle="modal"' .
                        'data-target="#popup-add" onclick="edit(\'{&quot;idProjet   &quot;:' . $objet->getIdProjet() .
                        ',&quot;nom&quot;:&quot;' . $objet->getNom() . '&quot;}\');">' .
                        '<span class="glyphicon glyphicon-pencil"></span></button></span>',
                ];
            }
            $response->setData(array('reponse' => (array)$rows));
            return $response;
        }

        // importation de tous les projets
        $tab_objets = $this->get('projet.service')->read();
        // importation de tous les utilisateurs
        $tab_users = $this->get('utilisateur.service')->read();

        return $this->render('GediAdminBundle:Admin:projects_admin.html.twig', array(
            'tab_objets' => $tab_objets,
            'projet' => $objet,
            'projetForm' => $form->createView(),
            'tab_users' => $tab_users,
        ));
    }

    /**
     * Page d'administration des documents de l'application
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @throws Exception
     */
    public function documentsAction(Request $request)
    {
        $objet = new Document();
        $form = $this->createForm('Gedi\BaseBundle\Form\DocumentType', $objet);
        $form->handleRequest($request);

        if ($request->isMethod('POST')) {
            $rows = [];
            $response = new JsonResponse();
            $flag = false;

            if (isset($_POST['data']) && isset($_POST['typeaction'])) {
                $sel = $_POST['data'];

                if ($sel == null || $sel == "") {
                    throw new Exception('La selection est nulle');
                }

                switch ($_POST['typeaction']) {
                    case BaseEnum::SUPPRESSION:
                        $rows = $this->get('document.service')->delete($sel);
                        break;
                    case BaseEnum::MODIFICATION:
                        $objet = $this->get('document.service')->update($sel);
                        $flag = true;
                        break;
                    case BaseEnum::PROJET:
                        $tmp = $this->get('utilisateur.service')->getChildren($sel, $_POST['typeaction']);

                        if (sizeof($tmp) > 0) {
                            foreach ($tmp as $child) {
                                array_push($rows, '<a id="list-activable-item-project-' . $child->getidProjet() .
                                    '" href="#" onclick="addProject(' . $child->getidProjet() .
                                    ')" class="list-group-item list-activable-item">' . $child->getNom() . '</a>');
                            }
                        } else {
                            array_push($rows, '<a href="#" class="list-group-item">... vide</a>');
                        }
                        break;
                    default:
                        throw new Exception('Typeaction n\'est pas reconnu');
                }

            } else if (isset($_FILES['gedi_basebundle_document'])) {
                if (!isset($_POST['gedi_basebundle_document'])) {
                    throw new Exception('La selection est nulle');
                } else {
                    $sel = $_POST;
                }
//                $sel = $_FILES['gedi_basebundle_document'];

                if ($sel == null || $sel == "") {
                    throw new Exception('La selection est nulle');
                }

                $response->setData(array('reponse' => (array)$sel));
                return $response;

                switch ($sel[0]) {
                    case BaseEnum::UPLOAD:
                        $objet = $this->get('document.service')->create($sel);
                        $flag = true;
                        break;
                    default:
                        throw new Exception('Typeaction n\'est pas reconnu');
                }
            } else {
                throw new Exception('Erreur de selection');
            }

            if ($flag == true) {
                $rows = [
                    "ck" => 'data-checkbox="true"',
                    "id" => $objet->getIdDocument(),
                    "nom" => $objet->getNom(),
                    "type" => '<span class="label label-default">' . $objet->getTypeDoc() . '</span>',
                    "datec" => date_format($objet->getDateCreation(), 'Y-m-d H:i:s'),
                    "datem" => date_format($objet->getDateModification(), 'Y-m-d H:i:s'),
                    "projet" => $objet->getidProjetFkDocument()->getNom(),
                    "propio" => $objet->getIdUtilisateurFkDocument()->getNom() . " " . $objet->getIdUtilisateurFkDocument()->getPrenom(),
                    "ctrl" => '<span data-toggle="tooltip" data-placement="bottom" title="Editer le document">' .
                        '<button type="button" class="btn btn-default btn-warning round-button" data-toggle="modal"' .
                        'data-target="#popup-add" onclick="edit(\'{&quot;idDocument&quot;:' . $objet->getIdDocument() .
                        ',&quot;nom&quot;:&quot;' . $objet->getNom() .
                        '&quot;,&quot;typeDoc&quot;:&quot;' . $objet->getTypeDoc() .
                        '&quot;,&quot;tag&quot;:&quot;' . $objet->getTag() .
                        '&quot;,&quot;resume&quot;:&quot;' . $objet->getResume() . '&quot;}\');">' .
                        '<span class="glyphicon glyphicon-pencil"></span></button></span>',
                ];
            }
            $response->setData(array('reponse' => (array)$rows));
            return $response;
        }

        // importation de tous les documents
        $tab_objets = $this->get('document.service')->read();
        // importation de tous les utilisateurs
        $tab_users = $this->get('utilisateur.service')->read();

        return $this->render('GediAdminBundle:Admin:docs_admin.html.twig', array(
            'tab_objets' => $tab_objets,
            'document' => $objet,
            'documentForm' => $form->createView(),
            'tab_users' => $tab_users
        ));
    }
}
