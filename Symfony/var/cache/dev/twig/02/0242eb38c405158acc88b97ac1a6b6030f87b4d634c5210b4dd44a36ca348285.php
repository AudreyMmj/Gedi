<?php

/* GediAdminBundle:Admin:groups_admin.html.twig */
class __TwigTemplate_6bcafd5fd880b1051da8d41bb49eaf828dd3a8b75384ac6ed13d354f6d6bbe6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GediAdminBundle::layout_admin.html.twig", "GediAdminBundle:Admin:groups_admin.html.twig", 1);
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
        $__internal_8fe5940acfbb52474078181f495a12d62b8d84e21e050f8cc49fc2bd254ced28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe5940acfbb52474078181f495a12d62b8d84e21e050f8cc49fc2bd254ced28->enter($__internal_8fe5940acfbb52474078181f495a12d62b8d84e21e050f8cc49fc2bd254ced28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediAdminBundle:Admin:groups_admin.html.twig"));

        $__internal_5393b1462cf1d1293537c3097233439620d8ebfe1e99d0eb9bb52808e0e0ef28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5393b1462cf1d1293537c3097233439620d8ebfe1e99d0eb9bb52808e0e0ef28->enter($__internal_5393b1462cf1d1293537c3097233439620d8ebfe1e99d0eb9bb52808e0e0ef28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediAdminBundle:Admin:groups_admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fe5940acfbb52474078181f495a12d62b8d84e21e050f8cc49fc2bd254ced28->leave($__internal_8fe5940acfbb52474078181f495a12d62b8d84e21e050f8cc49fc2bd254ced28_prof);

        
        $__internal_5393b1462cf1d1293537c3097233439620d8ebfe1e99d0eb9bb52808e0e0ef28->leave($__internal_5393b1462cf1d1293537c3097233439620d8ebfe1e99d0eb9bb52808e0e0ef28_prof);

    }

    // line 3
    public function block_titre_admin($context, array $blocks = array())
    {
        $__internal_b71a9df293bc4a5f0a23103515ebd2dd78f170145e0ea7e88f219ab6a7f88afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b71a9df293bc4a5f0a23103515ebd2dd78f170145e0ea7e88f219ab6a7f88afc->enter($__internal_b71a9df293bc4a5f0a23103515ebd2dd78f170145e0ea7e88f219ab6a7f88afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin"));

        $__internal_d53542a7f6589c8e7ae77e75138c1960ecfc4e95c9c6459614ece76672afdbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53542a7f6589c8e7ae77e75138c1960ecfc4e95c9c6459614ece76672afdbf1->enter($__internal_d53542a7f6589c8e7ae77e75138c1960ecfc4e95c9c6459614ece76672afdbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin"));

        echo "Groupes";
        
        $__internal_d53542a7f6589c8e7ae77e75138c1960ecfc4e95c9c6459614ece76672afdbf1->leave($__internal_d53542a7f6589c8e7ae77e75138c1960ecfc4e95c9c6459614ece76672afdbf1_prof);

        
        $__internal_b71a9df293bc4a5f0a23103515ebd2dd78f170145e0ea7e88f219ab6a7f88afc->leave($__internal_b71a9df293bc4a5f0a23103515ebd2dd78f170145e0ea7e88f219ab6a7f88afc_prof);

    }

    // line 4
    public function block_titre_admin_2($context, array $blocks = array())
    {
        $__internal_2168b514a89842694ad8bfd98646302d76c29ca4c57b082407b2ebdd7649556f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2168b514a89842694ad8bfd98646302d76c29ca4c57b082407b2ebdd7649556f->enter($__internal_2168b514a89842694ad8bfd98646302d76c29ca4c57b082407b2ebdd7649556f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin_2"));

        $__internal_e9073d05229275aff11465022ab83c0fefb7ce9d0ae05572dbd751a08b45a5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9073d05229275aff11465022ab83c0fefb7ce9d0ae05572dbd751a08b45a5c4->enter($__internal_e9073d05229275aff11465022ab83c0fefb7ce9d0ae05572dbd751a08b45a5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin_2"));

        echo "groupes";
        
        $__internal_e9073d05229275aff11465022ab83c0fefb7ce9d0ae05572dbd751a08b45a5c4->leave($__internal_e9073d05229275aff11465022ab83c0fefb7ce9d0ae05572dbd751a08b45a5c4_prof);

        
        $__internal_2168b514a89842694ad8bfd98646302d76c29ca4c57b082407b2ebdd7649556f->leave($__internal_2168b514a89842694ad8bfd98646302d76c29ca4c57b082407b2ebdd7649556f_prof);

    }

    // line 5
    public function block_tooltip_admin($context, array $blocks = array())
    {
        $__internal_6fcd371a342ba2bede88150de13f068c86e695e8d8664d3b9c7d1ba01e87ff13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fcd371a342ba2bede88150de13f068c86e695e8d8664d3b9c7d1ba01e87ff13->enter($__internal_6fcd371a342ba2bede88150de13f068c86e695e8d8664d3b9c7d1ba01e87ff13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tooltip_admin"));

        $__internal_0d8123c1319ce43836daae41d4d720870eca6c0bcda14154418a77b3edc322d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8123c1319ce43836daae41d4d720870eca6c0bcda14154418a77b3edc322d6->enter($__internal_0d8123c1319ce43836daae41d4d720870eca6c0bcda14154418a77b3edc322d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tooltip_admin"));

        echo "des groupes";
        
        $__internal_0d8123c1319ce43836daae41d4d720870eca6c0bcda14154418a77b3edc322d6->leave($__internal_0d8123c1319ce43836daae41d4d720870eca6c0bcda14154418a77b3edc322d6_prof);

        
        $__internal_6fcd371a342ba2bede88150de13f068c86e695e8d8664d3b9c7d1ba01e87ff13->leave($__internal_6fcd371a342ba2bede88150de13f068c86e695e8d8664d3b9c7d1ba01e87ff13_prof);

    }

    // line 7
    public function block_boutons_admin($context, array $blocks = array())
    {
        $__internal_0524bc41bee61cc7af27b13017b7a38b32d31e84bbf7eba036f63301df39dc46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0524bc41bee61cc7af27b13017b7a38b32d31e84bbf7eba036f63301df39dc46->enter($__internal_0524bc41bee61cc7af27b13017b7a38b32d31e84bbf7eba036f63301df39dc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boutons_admin"));

        $__internal_de4f812b0bc4c1d033054fbcbbff3389e6f6abf2ea96d907f31b57a01a106851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4f812b0bc4c1d033054fbcbbff3389e6f6abf2ea96d907f31b57a01a106851->enter($__internal_de4f812b0bc4c1d033054fbcbbff3389e6f6abf2ea96d907f31b57a01a106851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boutons_admin"));

        // line 8
        echo "    <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#popup-add\">Créer</button>
    <button type=\"button\" class=\"btn btn-danger boutonDesactive\" data-toggle=\"modal\" data-target=\"#popup-delete\"
            onclick=\"majPopupDelete()\">
        Supprimer <span class=\"badge spanNbSel\"></span>
    </button>
";
        
        $__internal_de4f812b0bc4c1d033054fbcbbff3389e6f6abf2ea96d907f31b57a01a106851->leave($__internal_de4f812b0bc4c1d033054fbcbbff3389e6f6abf2ea96d907f31b57a01a106851_prof);

        
        $__internal_0524bc41bee61cc7af27b13017b7a38b32d31e84bbf7eba036f63301df39dc46->leave($__internal_0524bc41bee61cc7af27b13017b7a38b32d31e84bbf7eba036f63301df39dc46_prof);

    }

    // line 15
    public function block_tableau_admin($context, array $blocks = array())
    {
        $__internal_f2723394340be032f5c80f3198e4c95b1675f6b2e5be271bfaa13fa47fd7714f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2723394340be032f5c80f3198e4c95b1675f6b2e5be271bfaa13fa47fd7714f->enter($__internal_f2723394340be032f5c80f3198e4c95b1675f6b2e5be271bfaa13fa47fd7714f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableau_admin"));

        $__internal_c0b931f27db51e4348a6221db64bfc53bd89dcc1557383b98cf39357bee734c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b931f27db51e4348a6221db64bfc53bd89dcc1557383b98cf39357bee734c5->enter($__internal_c0b931f27db51e4348a6221db64bfc53bd89dcc1557383b98cf39357bee734c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableau_admin"));

        // line 16
        echo "    <thead>
    <tr>
        <th data-checkbox=\"true\"></th>
        <th>Id</th>
        <th data-sortable=\"true\">Nom du groupe</th>
        <th data-sortable=\"true\">Date de création</th>
        <th data-sortable=\"true\">Date de modification</th>
        <th data-sortable=\"true\">Propriétaire</th>
        <th data-align=\"center\">Actions</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab_objets"]) ? $context["tab_objets"] : $this->getContext($context, "tab_objets")));
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 29
            echo "        <article>
            <tr>
                <td></td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "idGroupe", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupe"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["groupe"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["groupe"], "dateModification", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["groupe"], "idUtilisateurFkGroupe", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["groupe"], "idUtilisateurFkGroupe", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td data-align=\"center\">
    <span data-toggle=\"tooltip\" data-placement=\"bottom\"
          title=\"Voir les membres\">
    <button type=\"button\"
            class=\"btn btn-default btn-primary round-button\"><span
                class=\"glyphicon glyphicon-user\"></span>
    </button>
    </span>
                    <span data-toggle=\"tooltip\" data-placement=\"bottom\"
                          title=\"Editer le groupe\">
    <button type=\"button\"
            class=\"btn btn-default btn-warning round-button\"  data-toggle=\"modal\" data-target=\"#popup-add\"><span
                class=\"glyphicon glyphicon-pencil\"></span>
    </button>
    </span>
                </td>
            </tr>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </tbody>
";
        
        $__internal_c0b931f27db51e4348a6221db64bfc53bd89dcc1557383b98cf39357bee734c5->leave($__internal_c0b931f27db51e4348a6221db64bfc53bd89dcc1557383b98cf39357bee734c5_prof);

        
        $__internal_f2723394340be032f5c80f3198e4c95b1675f6b2e5be271bfaa13fa47fd7714f->leave($__internal_f2723394340be032f5c80f3198e4c95b1675f6b2e5be271bfaa13fa47fd7714f_prof);

    }

    // line 59
    public function block_breadcrumb_admin($context, array $blocks = array())
    {
        $__internal_9c060208355035b610d374d4a71ab7356b317bf852f1a27f60fe4d5d689ce2a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c060208355035b610d374d4a71ab7356b317bf852f1a27f60fe4d5d689ce2a0->enter($__internal_9c060208355035b610d374d4a71ab7356b317bf852f1a27f60fe4d5d689ce2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_admin"));

        $__internal_1cf71fc2cf54ec2bc4e6ab9e13c2adea55a087afb1573777691f2102b1826c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf71fc2cf54ec2bc4e6ab9e13c2adea55a087afb1573777691f2102b1826c85->enter($__internal_1cf71fc2cf54ec2bc4e6ab9e13c2adea55a087afb1573777691f2102b1826c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_admin"));

        echo "Groupes";
        
        $__internal_1cf71fc2cf54ec2bc4e6ab9e13c2adea55a087afb1573777691f2102b1826c85->leave($__internal_1cf71fc2cf54ec2bc4e6ab9e13c2adea55a087afb1573777691f2102b1826c85_prof);

        
        $__internal_9c060208355035b610d374d4a71ab7356b317bf852f1a27f60fe4d5d689ce2a0->leave($__internal_9c060208355035b610d374d4a71ab7356b317bf852f1a27f60fe4d5d689ce2a0_prof);

    }

    // line 60
    public function block_popup_admin_del_titre($context, array $blocks = array())
    {
        $__internal_84171286014fdf32c3410c4784c72b916165a58c86dbe914d6736d27dd1e274f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84171286014fdf32c3410c4784c72b916165a58c86dbe914d6736d27dd1e274f->enter($__internal_84171286014fdf32c3410c4784c72b916165a58c86dbe914d6736d27dd1e274f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_titre"));

        $__internal_daa7510c83ca03f27aa4249079f2274f10f8cd7e828ca08972c024c496919204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa7510c83ca03f27aa4249079f2274f10f8cd7e828ca08972c024c496919204->enter($__internal_daa7510c83ca03f27aa4249079f2274f10f8cd7e828ca08972c024c496919204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_titre"));

        echo "de groupes";
        
        $__internal_daa7510c83ca03f27aa4249079f2274f10f8cd7e828ca08972c024c496919204->leave($__internal_daa7510c83ca03f27aa4249079f2274f10f8cd7e828ca08972c024c496919204_prof);

        
        $__internal_84171286014fdf32c3410c4784c72b916165a58c86dbe914d6736d27dd1e274f->leave($__internal_84171286014fdf32c3410c4784c72b916165a58c86dbe914d6736d27dd1e274f_prof);

    }

    // line 61
    public function block_popup_admin_del_contenu($context, array $blocks = array())
    {
        $__internal_7f4aa126cea9167250acfb0d1f1719fa4deb3af75052d4bedbdaafc2fab2d8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4aa126cea9167250acfb0d1f1719fa4deb3af75052d4bedbdaafc2fab2d8a2->enter($__internal_7f4aa126cea9167250acfb0d1f1719fa4deb3af75052d4bedbdaafc2fab2d8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_contenu"));

        $__internal_c45d4666d9a090b672864dc337922e95d7eb7e986eefe31aa545e2e40ec9ccc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c45d4666d9a090b672864dc337922e95d7eb7e986eefe31aa545e2e40ec9ccc7->enter($__internal_c45d4666d9a090b672864dc337922e95d7eb7e986eefe31aa545e2e40ec9ccc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_contenu"));

        echo "groupes";
        
        $__internal_c45d4666d9a090b672864dc337922e95d7eb7e986eefe31aa545e2e40ec9ccc7->leave($__internal_c45d4666d9a090b672864dc337922e95d7eb7e986eefe31aa545e2e40ec9ccc7_prof);

        
        $__internal_7f4aa126cea9167250acfb0d1f1719fa4deb3af75052d4bedbdaafc2fab2d8a2->leave($__internal_7f4aa126cea9167250acfb0d1f1719fa4deb3af75052d4bedbdaafc2fab2d8a2_prof);

    }

    // line 62
    public function block_popup_admin_add_titre($context, array $blocks = array())
    {
        $__internal_8940f1a4de52d2ba493e0b7a15531f2ea5a146d2c5df6a0d8fcd27b95450e261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8940f1a4de52d2ba493e0b7a15531f2ea5a146d2c5df6a0d8fcd27b95450e261->enter($__internal_8940f1a4de52d2ba493e0b7a15531f2ea5a146d2c5df6a0d8fcd27b95450e261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_titre"));

        $__internal_b4a87f1078d489000188727cdc639e2dad3ddec86d2d08f2ded3a63984aec8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a87f1078d489000188727cdc639e2dad3ddec86d2d08f2ded3a63984aec8a9->enter($__internal_b4a87f1078d489000188727cdc639e2dad3ddec86d2d08f2ded3a63984aec8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_titre"));

        echo "groupe";
        
        $__internal_b4a87f1078d489000188727cdc639e2dad3ddec86d2d08f2ded3a63984aec8a9->leave($__internal_b4a87f1078d489000188727cdc639e2dad3ddec86d2d08f2ded3a63984aec8a9_prof);

        
        $__internal_8940f1a4de52d2ba493e0b7a15531f2ea5a146d2c5df6a0d8fcd27b95450e261->leave($__internal_8940f1a4de52d2ba493e0b7a15531f2ea5a146d2c5df6a0d8fcd27b95450e261_prof);

    }

    // line 64
    public function block_popup_admin_add_contenu($context, array $blocks = array())
    {
        $__internal_d905f780577ab74999a308e8999326aba7b2415c93df73d85bbafec5252b39ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d905f780577ab74999a308e8999326aba7b2415c93df73d85bbafec5252b39ba->enter($__internal_d905f780577ab74999a308e8999326aba7b2415c93df73d85bbafec5252b39ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_contenu"));

        $__internal_517baeadfaf45d029b180139d836e8adbbdbacfd6be8016a1be56ad7cd67923d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_517baeadfaf45d029b180139d836e8adbbdbacfd6be8016a1be56ad7cd67923d->enter($__internal_517baeadfaf45d029b180139d836e8adbbdbacfd6be8016a1be56ad7cd67923d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_contenu"));

        // line 65
        echo "    ";
        if ((isset($context["groupeForm"]) ? $context["groupeForm"] : $this->getContext($context, "groupeForm"))) {
            // line 66
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["groupeForm"]) ? $context["groupeForm"] : $this->getContext($context, "groupeForm")), 'form_start');
            echo "
        <div class=\"form-group\">
            <br>
            ";
            // line 69
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["groupeForm"]) ? $context["groupeForm"] : $this->getContext($context, "groupeForm")), "nom", array()), 'errors');
            echo "
            ";
            // line 70
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["groupeForm"]) ? $context["groupeForm"] : $this->getContext($context, "groupeForm")), "nom", array()), 'widget', array("attr" => array("rows" => "1", "class" => "form-control", "placeholder" => "Nom du groupe")));
            // line 74
            echo "
            <br>
        </div>
        <div class=\"modal-footer\">
            <div class=\"form-group\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Créer\"/>
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
        ";
            // line 83
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["groupeForm"]) ? $context["groupeForm"] : $this->getContext($context, "groupeForm")), 'form_end');
            echo "
    ";
        } else {
            // line 85
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo " \">Connectez-vous</a> pour créer un groupe.
    ";
        }
        
        $__internal_517baeadfaf45d029b180139d836e8adbbdbacfd6be8016a1be56ad7cd67923d->leave($__internal_517baeadfaf45d029b180139d836e8adbbdbacfd6be8016a1be56ad7cd67923d_prof);

        
        $__internal_d905f780577ab74999a308e8999326aba7b2415c93df73d85bbafec5252b39ba->leave($__internal_d905f780577ab74999a308e8999326aba7b2415c93df73d85bbafec5252b39ba_prof);

    }

    public function getTemplateName()
    {
        return "GediAdminBundle:Admin:groups_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 85,  322 => 83,  311 => 74,  309 => 70,  305 => 69,  298 => 66,  295 => 65,  286 => 64,  268 => 62,  250 => 61,  232 => 60,  214 => 59,  203 => 56,  175 => 36,  171 => 35,  167 => 34,  163 => 33,  159 => 32,  154 => 29,  150 => 28,  136 => 16,  127 => 15,  112 => 8,  103 => 7,  85 => 5,  67 => 4,  49 => 3,  11 => 1,);
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

{% block titre_admin %}Groupes{% endblock %}
{% block titre_admin_2 %}groupes{% endblock %}
{% block tooltip_admin %}des groupes{% endblock %}

{% block boutons_admin %}
    <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#popup-add\">Créer</button>
    <button type=\"button\" class=\"btn btn-danger boutonDesactive\" data-toggle=\"modal\" data-target=\"#popup-delete\"
            onclick=\"majPopupDelete()\">
        Supprimer <span class=\"badge spanNbSel\"></span>
    </button>
{% endblock %}

{% block tableau_admin %}
    <thead>
    <tr>
        <th data-checkbox=\"true\"></th>
        <th>Id</th>
        <th data-sortable=\"true\">Nom du groupe</th>
        <th data-sortable=\"true\">Date de création</th>
        <th data-sortable=\"true\">Date de modification</th>
        <th data-sortable=\"true\">Propriétaire</th>
        <th data-align=\"center\">Actions</th>
    </tr>
    </thead>
    <tbody>
    {% for groupe in tab_objets %}
        <article>
            <tr>
                <td></td>
                <td>{{ groupe.idGroupe }}</td>
                <td>{{ groupe.nom }}</td>
                <td>{{ groupe.dateCreation|date('Y-m-d H:i:s') }}</td>
                <td>{{ groupe.dateModification|date('Y-m-d H:i:s') }}</td>
                <td>{{ groupe.idUtilisateurFkGroupe.nom }} {{ groupe.idUtilisateurFkGroupe.prenom }}</td>
                <td data-align=\"center\">
    <span data-toggle=\"tooltip\" data-placement=\"bottom\"
          title=\"Voir les membres\">
    <button type=\"button\"
            class=\"btn btn-default btn-primary round-button\"><span
                class=\"glyphicon glyphicon-user\"></span>
    </button>
    </span>
                    <span data-toggle=\"tooltip\" data-placement=\"bottom\"
                          title=\"Editer le groupe\">
    <button type=\"button\"
            class=\"btn btn-default btn-warning round-button\"  data-toggle=\"modal\" data-target=\"#popup-add\"><span
                class=\"glyphicon glyphicon-pencil\"></span>
    </button>
    </span>
                </td>
            </tr>
        </article>
    {% endfor %}
    </tbody>
{% endblock %}

{% block breadcrumb_admin %}Groupes{% endblock %}
{% block popup_admin_del_titre %}de groupes{% endblock %}
{% block popup_admin_del_contenu %}groupes{% endblock %}
{% block popup_admin_add_titre %}groupe{% endblock %}

{% block popup_admin_add_contenu %}
    {% if groupeForm %}
        {{ form_start(groupeForm) }}
        <div class=\"form-group\">
            <br>
            {{ form_errors(groupeForm.nom) }}
            {{ form_widget(groupeForm.nom, { 'attr':  {
                'rows': '1',
                'class': 'form-control',
                'placeholder': 'Nom du groupe'
            }}) }}
            <br>
        </div>
        <div class=\"modal-footer\">
            <div class=\"form-group\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Créer\"/>
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
        {{ form_end(groupeForm) }}
    {% else %}
        <a href=\"{{ path('login') }} \">Connectez-vous</a> pour créer un groupe.
    {% endif %}
{% endblock %}
", "GediAdminBundle:Admin:groups_admin.html.twig", "/var/www/html/Gedi/Symfony/src/Gedi/AdminBundle/Resources/views/Admin/groups_admin.html.twig");
    }
}
