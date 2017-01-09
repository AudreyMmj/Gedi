<?php

/* GediAdminBundle:Admin:users_admin.html.twig */
class __TwigTemplate_4e3688289a6dbdb319ce12482376d95fdbe59d8c0682ac4d0f14a7dcb8efcdc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GediAdminBundle::layout_admin.html.twig", "GediAdminBundle:Admin:users_admin.html.twig", 1);
        $this->blocks = array(
            'titre_admin' => array($this, 'block_titre_admin'),
            'titre_admin_2' => array($this, 'block_titre_admin_2'),
            'tooltip_admin' => array($this, 'block_tooltip_admin'),
            'boutons_admin' => array($this, 'block_boutons_admin'),
            'tableau_admin' => array($this, 'block_tableau_admin'),
            'breadcrumb_admin' => array($this, 'block_breadcrumb_admin'),
            'popup_admin_del_titre' => array($this, 'block_popup_admin_del_titre'),
            'popup_admin_del_contenu' => array($this, 'block_popup_admin_del_contenu'),
            'popup_admin_add_titre' => array($this, 'block_popup_admin_add_titre'),
            'popup_admin_add_contenu' => array($this, 'block_popup_admin_add_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GediAdminBundle::layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3205ce1cf29799cf2693d90cac90c35e022f218243e05f3263e75671aebd153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3205ce1cf29799cf2693d90cac90c35e022f218243e05f3263e75671aebd153->enter($__internal_f3205ce1cf29799cf2693d90cac90c35e022f218243e05f3263e75671aebd153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediAdminBundle:Admin:users_admin.html.twig"));

        $__internal_e54e9c35f459c2b3e40bb2597c8e87ecc1b5e1e44df14038bc1b253e427c5f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54e9c35f459c2b3e40bb2597c8e87ecc1b5e1e44df14038bc1b253e427c5f98->enter($__internal_e54e9c35f459c2b3e40bb2597c8e87ecc1b5e1e44df14038bc1b253e427c5f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediAdminBundle:Admin:users_admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3205ce1cf29799cf2693d90cac90c35e022f218243e05f3263e75671aebd153->leave($__internal_f3205ce1cf29799cf2693d90cac90c35e022f218243e05f3263e75671aebd153_prof);

        
        $__internal_e54e9c35f459c2b3e40bb2597c8e87ecc1b5e1e44df14038bc1b253e427c5f98->leave($__internal_e54e9c35f459c2b3e40bb2597c8e87ecc1b5e1e44df14038bc1b253e427c5f98_prof);

    }

    // line 3
    public function block_titre_admin($context, array $blocks = array())
    {
        $__internal_65e331ea26e641a0b3f6f0b1a86948a1e4ac16e1436da36643d79a92f305636d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e331ea26e641a0b3f6f0b1a86948a1e4ac16e1436da36643d79a92f305636d->enter($__internal_65e331ea26e641a0b3f6f0b1a86948a1e4ac16e1436da36643d79a92f305636d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin"));

        $__internal_63c2483f76baa9b9e6cf9221715ff2de8d50cccc5b8e2c786220834267670c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c2483f76baa9b9e6cf9221715ff2de8d50cccc5b8e2c786220834267670c42->enter($__internal_63c2483f76baa9b9e6cf9221715ff2de8d50cccc5b8e2c786220834267670c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin"));

        echo "Utilisateurs";
        
        $__internal_63c2483f76baa9b9e6cf9221715ff2de8d50cccc5b8e2c786220834267670c42->leave($__internal_63c2483f76baa9b9e6cf9221715ff2de8d50cccc5b8e2c786220834267670c42_prof);

        
        $__internal_65e331ea26e641a0b3f6f0b1a86948a1e4ac16e1436da36643d79a92f305636d->leave($__internal_65e331ea26e641a0b3f6f0b1a86948a1e4ac16e1436da36643d79a92f305636d_prof);

    }

    // line 4
    public function block_titre_admin_2($context, array $blocks = array())
    {
        $__internal_9f56f93945a4722b755ffa4fa8eb92000ae314adbfcc290b0ccceb1d462e6442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f56f93945a4722b755ffa4fa8eb92000ae314adbfcc290b0ccceb1d462e6442->enter($__internal_9f56f93945a4722b755ffa4fa8eb92000ae314adbfcc290b0ccceb1d462e6442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin_2"));

        $__internal_b72f8665a12b1548c28c2c50abbb6988cb588a73579cff323d85ea673507f14d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72f8665a12b1548c28c2c50abbb6988cb588a73579cff323d85ea673507f14d->enter($__internal_b72f8665a12b1548c28c2c50abbb6988cb588a73579cff323d85ea673507f14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin_2"));

        echo "utilisateurs";
        
        $__internal_b72f8665a12b1548c28c2c50abbb6988cb588a73579cff323d85ea673507f14d->leave($__internal_b72f8665a12b1548c28c2c50abbb6988cb588a73579cff323d85ea673507f14d_prof);

        
        $__internal_9f56f93945a4722b755ffa4fa8eb92000ae314adbfcc290b0ccceb1d462e6442->leave($__internal_9f56f93945a4722b755ffa4fa8eb92000ae314adbfcc290b0ccceb1d462e6442_prof);

    }

    // line 5
    public function block_tooltip_admin($context, array $blocks = array())
    {
        $__internal_ab8a7c083a047ccfd312a2f6da1ab8f81665f6973a25055fbb8342128e62d095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab8a7c083a047ccfd312a2f6da1ab8f81665f6973a25055fbb8342128e62d095->enter($__internal_ab8a7c083a047ccfd312a2f6da1ab8f81665f6973a25055fbb8342128e62d095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tooltip_admin"));

        $__internal_a33b0305a13a57b38663e2009879ce179594c0e2b2362365e9b52d0753bccc49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33b0305a13a57b38663e2009879ce179594c0e2b2362365e9b52d0753bccc49->enter($__internal_a33b0305a13a57b38663e2009879ce179594c0e2b2362365e9b52d0753bccc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tooltip_admin"));

        echo "d'utilisateur";
        
        $__internal_a33b0305a13a57b38663e2009879ce179594c0e2b2362365e9b52d0753bccc49->leave($__internal_a33b0305a13a57b38663e2009879ce179594c0e2b2362365e9b52d0753bccc49_prof);

        
        $__internal_ab8a7c083a047ccfd312a2f6da1ab8f81665f6973a25055fbb8342128e62d095->leave($__internal_ab8a7c083a047ccfd312a2f6da1ab8f81665f6973a25055fbb8342128e62d095_prof);

    }

    // line 7
    public function block_boutons_admin($context, array $blocks = array())
    {
        $__internal_accfb77961fe08f9b329c9d010ea4ec30938f5c21ba546fb3f39e8399a48cc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_accfb77961fe08f9b329c9d010ea4ec30938f5c21ba546fb3f39e8399a48cc19->enter($__internal_accfb77961fe08f9b329c9d010ea4ec30938f5c21ba546fb3f39e8399a48cc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boutons_admin"));

        $__internal_6f2176eb7d808320e1fc7a05a6232083fa73bff6bd08d276a2d13db078bafe3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2176eb7d808320e1fc7a05a6232083fa73bff6bd08d276a2d13db078bafe3d->enter($__internal_6f2176eb7d808320e1fc7a05a6232083fa73bff6bd08d276a2d13db078bafe3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boutons_admin"));

        // line 8
        echo "    <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#popup-add\">Ajouter</button>
    <button type=\"button\" class=\"btn btn-danger boutonDesactive\" data-toggle=\"modal\" data-target=\"#popup-delete\"
            onclick=\"majPopupDelete()\">
        Supprimer <span class=\"badge spanNbSel\"></span>
    </button>
    <button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#popup-add\">Demandes d'ajout <span
                class=\"badge\">3</span>
    </button>
";
        
        $__internal_6f2176eb7d808320e1fc7a05a6232083fa73bff6bd08d276a2d13db078bafe3d->leave($__internal_6f2176eb7d808320e1fc7a05a6232083fa73bff6bd08d276a2d13db078bafe3d_prof);

        
        $__internal_accfb77961fe08f9b329c9d010ea4ec30938f5c21ba546fb3f39e8399a48cc19->leave($__internal_accfb77961fe08f9b329c9d010ea4ec30938f5c21ba546fb3f39e8399a48cc19_prof);

    }

    // line 18
    public function block_tableau_admin($context, array $blocks = array())
    {
        $__internal_a02249710460b073907ad22fec26e411bc4f49c9bdf7d520ce63adcb160c9a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a02249710460b073907ad22fec26e411bc4f49c9bdf7d520ce63adcb160c9a50->enter($__internal_a02249710460b073907ad22fec26e411bc4f49c9bdf7d520ce63adcb160c9a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableau_admin"));

        $__internal_b44870fe6f6f66f8a9c60bacb212fda78335b30e48934e64a3ed45f12b5e936d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44870fe6f6f66f8a9c60bacb212fda78335b30e48934e64a3ed45f12b5e936d->enter($__internal_b44870fe6f6f66f8a9c60bacb212fda78335b30e48934e64a3ed45f12b5e936d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableau_admin"));

        // line 19
        echo "    <thead>
    <tr>
        <th data-checkbox=\"true\"></th>
        <th>Id</th>
        <th data-sortable=\"true\">Nom</th>
        <th data-sortable=\"true\">Prenom</th>
        <th data-sortable=\"true\">Login</th>
        <th data-sortable=\"true\">Date de création</th>
        <th data-sortable=\"true\">Date de modification</th>
        <th data-align=\"center\">Actions</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab_objets"]) ? $context["tab_objets"] : $this->getContext($context, "tab_objets")));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 33
            echo "        <article>
            ";
            // line 34
            if (($this->getAttribute($context["utilisateur"], "role", array()) == "ROLE_ADMIN")) {
                // line 35
                echo "            <tr class=\"info\">
                ";
            } else {
                // line 37
                echo "            <tr>
                ";
            }
            // line 39
            echo "                <td></td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "idUtilisateur", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["utilisateur"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["utilisateur"], "dateModification", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td data-align=\"center\">
    <span data-toggle=\"tooltip\" data-placement=\"bottom\"
          title=\"Accéder à l'espace utilisateur\">
    <button type=\"button\"
            class=\"btn btn-default btn-primary round-button\"><span
                class=\"glyphicon glyphicon-dashboard\"></span>
    </button>
    </span>
                    <span data-toggle=\"tooltip\" data-placement=\"bottom\"
                          title=\"Editer la fiche utilisateur\">
    <button type=\"button\"
            class=\"btn btn-default btn-warning round-button\" data-toggle=\"modal\" data-target=\"#popup-add\"><span
                class=\"glyphicon glyphicon-pencil\"></span>
    </button>
    </span>
                </td>
            </tr>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </tbody>
";
        
        $__internal_b44870fe6f6f66f8a9c60bacb212fda78335b30e48934e64a3ed45f12b5e936d->leave($__internal_b44870fe6f6f66f8a9c60bacb212fda78335b30e48934e64a3ed45f12b5e936d_prof);

        
        $__internal_a02249710460b073907ad22fec26e411bc4f49c9bdf7d520ce63adcb160c9a50->leave($__internal_a02249710460b073907ad22fec26e411bc4f49c9bdf7d520ce63adcb160c9a50_prof);

    }

    // line 68
    public function block_breadcrumb_admin($context, array $blocks = array())
    {
        $__internal_407c7fc4b4a203ebfd371432774a0d0f24a834b404a8d3cf3e495560c4114a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407c7fc4b4a203ebfd371432774a0d0f24a834b404a8d3cf3e495560c4114a45->enter($__internal_407c7fc4b4a203ebfd371432774a0d0f24a834b404a8d3cf3e495560c4114a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_admin"));

        $__internal_40f2d3894b0fe94dcf9b42942265e3415289f36bfaa5480b15f08335ff9f9302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f2d3894b0fe94dcf9b42942265e3415289f36bfaa5480b15f08335ff9f9302->enter($__internal_40f2d3894b0fe94dcf9b42942265e3415289f36bfaa5480b15f08335ff9f9302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_admin"));

        echo "Utilisateurs";
        
        $__internal_40f2d3894b0fe94dcf9b42942265e3415289f36bfaa5480b15f08335ff9f9302->leave($__internal_40f2d3894b0fe94dcf9b42942265e3415289f36bfaa5480b15f08335ff9f9302_prof);

        
        $__internal_407c7fc4b4a203ebfd371432774a0d0f24a834b404a8d3cf3e495560c4114a45->leave($__internal_407c7fc4b4a203ebfd371432774a0d0f24a834b404a8d3cf3e495560c4114a45_prof);

    }

    // line 70
    public function block_popup_admin_del_titre($context, array $blocks = array())
    {
        $__internal_982c591136329c77039fc379a20aa01ea942e78be39d480b88a5a523f4dd1035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982c591136329c77039fc379a20aa01ea942e78be39d480b88a5a523f4dd1035->enter($__internal_982c591136329c77039fc379a20aa01ea942e78be39d480b88a5a523f4dd1035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_titre"));

        $__internal_aeab8b45f335526744cc874f48fd46aa5bcc5bb15565a07c1fb0429ddcf28bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeab8b45f335526744cc874f48fd46aa5bcc5bb15565a07c1fb0429ddcf28bc6->enter($__internal_aeab8b45f335526744cc874f48fd46aa5bcc5bb15565a07c1fb0429ddcf28bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_titre"));

        echo "d'utilisateurs";
        
        $__internal_aeab8b45f335526744cc874f48fd46aa5bcc5bb15565a07c1fb0429ddcf28bc6->leave($__internal_aeab8b45f335526744cc874f48fd46aa5bcc5bb15565a07c1fb0429ddcf28bc6_prof);

        
        $__internal_982c591136329c77039fc379a20aa01ea942e78be39d480b88a5a523f4dd1035->leave($__internal_982c591136329c77039fc379a20aa01ea942e78be39d480b88a5a523f4dd1035_prof);

    }

    // line 71
    public function block_popup_admin_del_contenu($context, array $blocks = array())
    {
        $__internal_c3f77d3f05d6d9f02548fdc9d6297b80eb77139f1d589024cc33179e6d03519e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f77d3f05d6d9f02548fdc9d6297b80eb77139f1d589024cc33179e6d03519e->enter($__internal_c3f77d3f05d6d9f02548fdc9d6297b80eb77139f1d589024cc33179e6d03519e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_contenu"));

        $__internal_f9cd397045c886c347abe19eb459e338e95ab252bffc391bc31a45c4c96ac5c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9cd397045c886c347abe19eb459e338e95ab252bffc391bc31a45c4c96ac5c0->enter($__internal_f9cd397045c886c347abe19eb459e338e95ab252bffc391bc31a45c4c96ac5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_contenu"));

        // line 72
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["deleteForm"]) ? $context["deleteForm"] : $this->getContext($context, "deleteForm")), 'form_start');
        echo "
    <input id=\"sel\" type=\"hidden\" name=\"sel\"/>
    ";
        // line 75
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("del_user");
        echo "\" class=\"btn btn-danger\">
    Supprimer
    </a>
    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
    ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["deleteForm"]) ? $context["deleteForm"] : $this->getContext($context, "deleteForm")), 'form_end');
        echo "
    ";
        // line 81
        echo "    ";
        // line 82
        echo "    ";
        
        $__internal_f9cd397045c886c347abe19eb459e338e95ab252bffc391bc31a45c4c96ac5c0->leave($__internal_f9cd397045c886c347abe19eb459e338e95ab252bffc391bc31a45c4c96ac5c0_prof);

        
        $__internal_c3f77d3f05d6d9f02548fdc9d6297b80eb77139f1d589024cc33179e6d03519e->leave($__internal_c3f77d3f05d6d9f02548fdc9d6297b80eb77139f1d589024cc33179e6d03519e_prof);

    }

    // line 85
    public function block_popup_admin_add_titre($context, array $blocks = array())
    {
        $__internal_a712a9e768b530407264e9bf3d363cfa33b5d06d7c53f76a9c64aefec3bc895d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a712a9e768b530407264e9bf3d363cfa33b5d06d7c53f76a9c64aefec3bc895d->enter($__internal_a712a9e768b530407264e9bf3d363cfa33b5d06d7c53f76a9c64aefec3bc895d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_titre"));

        $__internal_207b2812f20b95ae9d16681dfb7a1ef93cb6f8bae49240893cc0fb6f895bbe20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207b2812f20b95ae9d16681dfb7a1ef93cb6f8bae49240893cc0fb6f895bbe20->enter($__internal_207b2812f20b95ae9d16681dfb7a1ef93cb6f8bae49240893cc0fb6f895bbe20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_titre"));

        echo "utilisateur";
        
        $__internal_207b2812f20b95ae9d16681dfb7a1ef93cb6f8bae49240893cc0fb6f895bbe20->leave($__internal_207b2812f20b95ae9d16681dfb7a1ef93cb6f8bae49240893cc0fb6f895bbe20_prof);

        
        $__internal_a712a9e768b530407264e9bf3d363cfa33b5d06d7c53f76a9c64aefec3bc895d->leave($__internal_a712a9e768b530407264e9bf3d363cfa33b5d06d7c53f76a9c64aefec3bc895d_prof);

    }

    // line 86
    public function block_popup_admin_add_contenu($context, array $blocks = array())
    {
        $__internal_80fa67de317d0c7cacba88f7957cb2e51f1eea09ba6cf7b9a020f2f2291b8869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80fa67de317d0c7cacba88f7957cb2e51f1eea09ba6cf7b9a020f2f2291b8869->enter($__internal_80fa67de317d0c7cacba88f7957cb2e51f1eea09ba6cf7b9a020f2f2291b8869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_contenu"));

        $__internal_4ecbf3e30ac84a6fa07e9ef1ccf0cbb1a7749ab11848323be36976fabcbdf9f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecbf3e30ac84a6fa07e9ef1ccf0cbb1a7749ab11848323be36976fabcbdf9f5->enter($__internal_4ecbf3e30ac84a6fa07e9ef1ccf0cbb1a7749ab11848323be36976fabcbdf9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_contenu"));

        // line 87
        echo "    ";
        if ((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm"))) {
            // line 88
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), 'form_start');
            echo "
        <div class=\"form-group\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\" id=\"basic-addon1\">1</span>
                ";
            // line 92
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "username", array()), 'errors');
            echo "
                ";
            // line 93
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "username", array()), 'widget', array("attr" => array("rows" => "1", "class" => "form-control", "placeholder" => "Login")));
            // line 97
            echo "
            </div>
            <br>
            <div class=\"input-group\">
                <span class=\"input-group-addon\" id=\"basic-addon1\">2</span>
                ";
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "password", array()), "first", array()), 'errors');
            echo "
                ";
            // line 103
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "password", array()), "first", array()), 'widget', array("attr" => array("rows" => "1", "class" => "form-control", "placeholder" => "Mot de passe")));
            // line 107
            echo "
            </div>
            <br>
            <div class=\"input-group\">
                <span class=\"input-group-addon\" id=\"basic-addon1\">3</span>
                ";
            // line 112
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "password", array()), "second", array()), 'errors');
            echo "
                ";
            // line 113
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "password", array()), "second", array()), 'widget', array("attr" => array("rows" => "1", "class" => "form-control", "placeholder" => "Confirmation")));
            // line 117
            echo "
            </div>
            <br>
            <div class=\"input-group\">
                <span class=\"input-group-addon\" id=\"basic-addon1\">4</span>
                ";
            // line 122
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "nom", array()), 'errors');
            echo "
                ";
            // line 123
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "nom", array()), 'widget', array("attr" => array("rows" => "1", "class" => "form-control", "placeholder" => "Nom")));
            // line 127
            echo "
            </div>
            <br>
            <div class=\"input-group\">
                <span class=\"input-group-addon\" id=\"basic-addon1\">5</span>
                ";
            // line 132
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "prenom", array()), 'errors');
            echo "
                ";
            // line 133
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "prenom", array()), 'widget', array("attr" => array("rows" => "1", "class" => "form-control", "placeholder" => "Prenom")));
            // line 137
            echo "
            </div>
        </div>
        <div class=\"modal-footer\">
            <div class=\"form-group\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Créer\"/>
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
        ";
            // line 146
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), 'form_end');
            echo "
    ";
        } else {
            // line 148
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo " \">Connectez-vous</a> pour créer un utilisateur.
    ";
        }
        
        $__internal_4ecbf3e30ac84a6fa07e9ef1ccf0cbb1a7749ab11848323be36976fabcbdf9f5->leave($__internal_4ecbf3e30ac84a6fa07e9ef1ccf0cbb1a7749ab11848323be36976fabcbdf9f5_prof);

        
        $__internal_80fa67de317d0c7cacba88f7957cb2e51f1eea09ba6cf7b9a020f2f2291b8869->leave($__internal_80fa67de317d0c7cacba88f7957cb2e51f1eea09ba6cf7b9a020f2f2291b8869_prof);

    }

    public function getTemplateName()
    {
        return "GediAdminBundle:Admin:users_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  418 => 148,  413 => 146,  402 => 137,  400 => 133,  396 => 132,  389 => 127,  387 => 123,  383 => 122,  376 => 117,  374 => 113,  370 => 112,  363 => 107,  361 => 103,  357 => 102,  350 => 97,  348 => 93,  344 => 92,  336 => 88,  333 => 87,  324 => 86,  306 => 85,  296 => 82,  294 => 81,  290 => 79,  282 => 75,  276 => 72,  267 => 71,  249 => 70,  231 => 68,  220 => 65,  194 => 45,  190 => 44,  186 => 43,  182 => 42,  178 => 41,  174 => 40,  171 => 39,  167 => 37,  163 => 35,  161 => 34,  158 => 33,  154 => 32,  139 => 19,  130 => 18,  112 => 8,  103 => 7,  85 => 5,  67 => 4,  49 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"GediAdminBundle::layout_admin.html.twig\" %}

{% block titre_admin %}Utilisateurs{% endblock %}
{% block titre_admin_2 %}utilisateurs{% endblock %}
{% block tooltip_admin %}d'utilisateur{% endblock %}

{% block boutons_admin %}
    <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#popup-add\">Ajouter</button>
    <button type=\"button\" class=\"btn btn-danger boutonDesactive\" data-toggle=\"modal\" data-target=\"#popup-delete\"
            onclick=\"majPopupDelete()\">
        Supprimer <span class=\"badge spanNbSel\"></span>
    </button>
    <button type=\"button\" class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#popup-add\">Demandes d'ajout <span
                class=\"badge\">3</span>
    </button>
{% endblock %}

{% block tableau_admin %}
    <thead>
    <tr>
        <th data-checkbox=\"true\"></th>
        <th>Id</th>
        <th data-sortable=\"true\">Nom</th>
        <th data-sortable=\"true\">Prenom</th>
        <th data-sortable=\"true\">Login</th>
        <th data-sortable=\"true\">Date de création</th>
        <th data-sortable=\"true\">Date de modification</th>
        <th data-align=\"center\">Actions</th>
    </tr>
    </thead>
    <tbody>
    {% for utilisateur in tab_objets %}
        <article>
            {% if (utilisateur.role == 'ROLE_ADMIN') %}
            <tr class=\"info\">
                {% else %}
            <tr>
                {% endif %}
                <td></td>
                <td>{{ utilisateur.idUtilisateur }}</td>
                <td>{{ utilisateur.nom }}</td>
                <td>{{ utilisateur.prenom }}</td>
                <td>{{ utilisateur.username }}</td>
                <td>{{ utilisateur.dateCreation|date('Y-m-d H:i:s') }}</td>
                <td>{{ utilisateur.dateModification|date('Y-m-d H:i:s') }}</td>
                <td data-align=\"center\">
    <span data-toggle=\"tooltip\" data-placement=\"bottom\"
          title=\"Accéder à l'espace utilisateur\">
    <button type=\"button\"
            class=\"btn btn-default btn-primary round-button\"><span
                class=\"glyphicon glyphicon-dashboard\"></span>
    </button>
    </span>
                    <span data-toggle=\"tooltip\" data-placement=\"bottom\"
                          title=\"Editer la fiche utilisateur\">
    <button type=\"button\"
            class=\"btn btn-default btn-warning round-button\" data-toggle=\"modal\" data-target=\"#popup-add\"><span
                class=\"glyphicon glyphicon-pencil\"></span>
    </button>
    </span>
                </td>
            </tr>
        </article>
    {% endfor %}
    </tbody>
{% endblock %}

{% block breadcrumb_admin %}Utilisateurs{% endblock %}

{% block popup_admin_del_titre %}d'utilisateurs{% endblock %}
{% block popup_admin_del_contenu %}
    {{ form_start(deleteForm) }}
    <input id=\"sel\" type=\"hidden\" name=\"sel\"/>
    {#<input type=\"submit\" class=\"btn btn-danger\" value=\"Supprimer\">#}
    <a href=\"{{ path('del_user') }}\" class=\"btn btn-danger\">
    Supprimer
    </a>
    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Annuler</button>
    {{ form_end(deleteForm) }}
    {#<button type=\"button\" href=\"{{ path('delete_user') }}\"#}
    {#onclick=\"location.href=this.href+'?key='+sel;return false;\" class=\"btn btn-danger\">Supprimer#}
    {#</button>#}
{% endblock %}

{% block popup_admin_add_titre %}utilisateur{% endblock %}
{% block popup_admin_add_contenu %}
    {% if utilisateurForm %}
        {{ form_start(utilisateurForm) }}
        <div class=\"form-group\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\" id=\"basic-addon1\">1</span>
                {{ form_errors(utilisateurForm.username) }}
                {{ form_widget(utilisateurForm.username, { 'attr':  {
                    'rows': '1',
                    'class': 'form-control',
                    'placeholder': 'Login'
                }}) }}
            </div>
            <br>
            <div class=\"input-group\">
                <span class=\"input-group-addon\" id=\"basic-addon1\">2</span>
                {{ form_errors(utilisateurForm.password.first) }}
                {{ form_widget(utilisateurForm.password.first, { 'attr':  {
                    'rows': '1',
                    'class': 'form-control',
                    'placeholder': 'Mot de passe'
                }}) }}
            </div>
            <br>
            <div class=\"input-group\">
                <span class=\"input-group-addon\" id=\"basic-addon1\">3</span>
                {{ form_errors(utilisateurForm.password.second) }}
                {{ form_widget(utilisateurForm.password.second, { 'attr':  {
                    'rows': '1',
                    'class': 'form-control',
                    'placeholder': 'Confirmation'
                }}) }}
            </div>
            <br>
            <div class=\"input-group\">
                <span class=\"input-group-addon\" id=\"basic-addon1\">4</span>
                {{ form_errors(utilisateurForm.nom) }}
                {{ form_widget(utilisateurForm.nom, { 'attr':  {
                    'rows': '1',
                    'class': 'form-control',
                    'placeholder': 'Nom'
                }}) }}
            </div>
            <br>
            <div class=\"input-group\">
                <span class=\"input-group-addon\" id=\"basic-addon1\">5</span>
                {{ form_errors(utilisateurForm.prenom) }}
                {{ form_widget(utilisateurForm.prenom, { 'attr':  {
                    'rows': '1',
                    'class': 'form-control',
                    'placeholder': 'Prenom'
                }}) }}
            </div>
        </div>
        <div class=\"modal-footer\">
            <div class=\"form-group\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Créer\"/>
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
        {{ form_end(utilisateurForm) }}
    {% else %}
        <a href=\"{{ path('login') }} \">Connectez-vous</a> pour créer un utilisateur.
    {% endif %}
{% endblock %}
", "GediAdminBundle:Admin:users_admin.html.twig", "/var/www/html/Gedi/Symfony/src/Gedi/AdminBundle/Resources/views/Admin/users_admin.html.twig");
    }
}
