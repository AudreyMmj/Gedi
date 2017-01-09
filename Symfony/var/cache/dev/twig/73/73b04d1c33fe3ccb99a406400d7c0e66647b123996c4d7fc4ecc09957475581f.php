<?php

/* GediAdminBundle::layout_admin.html.twig */
class __TwigTemplate_3761f30fb8a216e55c3dd4e628b12265db79a942b7c548c32823d392cd82b0b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "GediAdminBundle::layout_admin.html.twig", 1);
        $this->blocks = array(
            'app_titre' => array($this, 'block_app_titre'),
            'titre_admin' => array($this, 'block_titre_admin'),
            'app_contenu' => array($this, 'block_app_contenu'),
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
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7155f3f81fc72d21c86017ebec2fc060f6a2f47bad0421304f7416097d368d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7155f3f81fc72d21c86017ebec2fc060f6a2f47bad0421304f7416097d368d5->enter($__internal_d7155f3f81fc72d21c86017ebec2fc060f6a2f47bad0421304f7416097d368d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediAdminBundle::layout_admin.html.twig"));

        $__internal_7dff6da9da3f3f5c4ecf614b4293e0f5c2e41d76716780b2aed2902b863e01a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dff6da9da3f3f5c4ecf614b4293e0f5c2e41d76716780b2aed2902b863e01a4->enter($__internal_7dff6da9da3f3f5c4ecf614b4293e0f5c2e41d76716780b2aed2902b863e01a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediAdminBundle::layout_admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7155f3f81fc72d21c86017ebec2fc060f6a2f47bad0421304f7416097d368d5->leave($__internal_d7155f3f81fc72d21c86017ebec2fc060f6a2f47bad0421304f7416097d368d5_prof);

        
        $__internal_7dff6da9da3f3f5c4ecf614b4293e0f5c2e41d76716780b2aed2902b863e01a4->leave($__internal_7dff6da9da3f3f5c4ecf614b4293e0f5c2e41d76716780b2aed2902b863e01a4_prof);

    }

    // line 3
    public function block_app_titre($context, array $blocks = array())
    {
        $__internal_ad8fa634b3e7967d9b019bed1b8b557b8817977ce8172062e946fbb668fae09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8fa634b3e7967d9b019bed1b8b557b8817977ce8172062e946fbb668fae09d->enter($__internal_ad8fa634b3e7967d9b019bed1b8b557b8817977ce8172062e946fbb668fae09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_titre"));

        $__internal_47aa10a1a5b3c041f59f896bda50311e5ba40697fd467c6948adacf3f8c276dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47aa10a1a5b3c041f59f896bda50311e5ba40697fd467c6948adacf3f8c276dd->enter($__internal_47aa10a1a5b3c041f59f896bda50311e5ba40697fd467c6948adacf3f8c276dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_titre"));

        // line 4
        echo "    Administration - ";
        $this->displayBlock('titre_admin', $context, $blocks);
        
        $__internal_47aa10a1a5b3c041f59f896bda50311e5ba40697fd467c6948adacf3f8c276dd->leave($__internal_47aa10a1a5b3c041f59f896bda50311e5ba40697fd467c6948adacf3f8c276dd_prof);

        
        $__internal_ad8fa634b3e7967d9b019bed1b8b557b8817977ce8172062e946fbb668fae09d->leave($__internal_ad8fa634b3e7967d9b019bed1b8b557b8817977ce8172062e946fbb668fae09d_prof);

    }

    public function block_titre_admin($context, array $blocks = array())
    {
        $__internal_ea28a8f9c5fba35fa37627a55a27134ba1ade7fbd2b860d1361c58ee5461236a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea28a8f9c5fba35fa37627a55a27134ba1ade7fbd2b860d1361c58ee5461236a->enter($__internal_ea28a8f9c5fba35fa37627a55a27134ba1ade7fbd2b860d1361c58ee5461236a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin"));

        $__internal_e7e2528d49f1b26ea5526556dac47f40de120955e0bda221b27da67fc967ad57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e2528d49f1b26ea5526556dac47f40de120955e0bda221b27da67fc967ad57->enter($__internal_e7e2528d49f1b26ea5526556dac47f40de120955e0bda221b27da67fc967ad57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin"));

        
        $__internal_e7e2528d49f1b26ea5526556dac47f40de120955e0bda221b27da67fc967ad57->leave($__internal_e7e2528d49f1b26ea5526556dac47f40de120955e0bda221b27da67fc967ad57_prof);

        
        $__internal_ea28a8f9c5fba35fa37627a55a27134ba1ade7fbd2b860d1361c58ee5461236a->leave($__internal_ea28a8f9c5fba35fa37627a55a27134ba1ade7fbd2b860d1361c58ee5461236a_prof);

    }

    // line 7
    public function block_app_contenu($context, array $blocks = array())
    {
        $__internal_a5a1dabddd8ec181f708a9b3acda4ce799df51c392d47e834f76f61f752af739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5a1dabddd8ec181f708a9b3acda4ce799df51c392d47e834f76f61f752af739->enter($__internal_a5a1dabddd8ec181f708a9b3acda4ce799df51c392d47e834f76f61f752af739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_contenu"));

        $__internal_27dfd5a08d62b24bd46f338d1ba6c328499291d33c5cc7f35775f4263bc428b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27dfd5a08d62b24bd46f338d1ba6c328499291d33c5cc7f35775f4263bc428b3->enter($__internal_27dfd5a08d62b24bd46f338d1ba6c328499291d33c5cc7f35775f4263bc428b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_contenu"));

        // line 8
        echo "    <div class=\"panel panel-default\">
        <!-- Header du panel -->
        <div class=\"panel-heading\">
            <div class=\"row\">
                <div class=\"col-md-11\">
                    <h2>Liste des ";
        // line 13
        $this->displayBlock('titre_admin_2', $context, $blocks);
        echo "</h2>
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 15
            echo "                        <script type=\"text/javascript\">
                            showNotifyUser(\"";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "\");
                        </script>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </div>
                <div class=\"col-md-1\">
                    <h2><span class=\"label label-default\" data-toggle=\"tooltip\" data-placement=\"bottom\"
                              title=\"Nombre ";
        // line 22
        $this->displayBlock('tooltip_admin', $context, $blocks);
        echo "\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["tab_objets"]) ? $context["tab_objets"] : $this->getContext($context, "tab_objets"))), "html", null, true);
        echo "</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class=\"panel-body\">
            <div class=\"btn-group\" role=\"group\" aria-label=\"...\">
                ";
        // line 29
        $this->displayBlock('boutons_admin', $context, $blocks);
        // line 30
        echo "            </div>
            <div class=\"table-responsive\">
                <table class=\"table\" data-toggle=\"table\" data-search=\"true\" data-striped=\"true\" data-pagination=\"true\"
                       data-classes=\"table-no-bordered table-hover\" data-page-list=\"[5, 10, 15, 20, 50]\"
                       id=\"table_admin\">
                    ";
        // line 35
        $this->displayBlock('tableau_admin', $context, $blocks);
        // line 36
        echo "                </table>
            </div>
        </div>
    </div>
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("start");
        echo "\">Home</a></li>
        <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_admin");
        echo "\">Administration</a></li>
        <li class=\"active\">";
        // line 43
        $this->displayBlock('breadcrumb_admin', $context, $blocks);
        echo "</li>
    </ol>

    <!-- Popup fenetre de suppression d'entité -->
    <div class=\"modal fade\" id=\"popup-delete\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- contenu -->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Suppression ";
        // line 53
        $this->displayBlock('popup_admin_del_titre', $context, $blocks);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    <p id=\"nbSel\">
                        <!-- contenu mis à jour dans majPopupDelete de gedi.js -->
                    </p>
                    <p>Valider la suppression ?</p>
                </div>
                <div class=\"modal-footer\">
                    <div class=\"form-group\">
                        ";
        // line 63
        $this->displayBlock('popup_admin_del_contenu', $context, $blocks);
        // line 64
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup fenetre d'ajout d'entité -->
    <div class=\"modal fade\" id=\"popup-add\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- contenu-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Créer un ";
        // line 77
        $this->displayBlock('popup_admin_add_titre', $context, $blocks);
        echo "</h4>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 80
        $this->displayBlock('popup_admin_add_contenu', $context, $blocks);
        // line 81
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_27dfd5a08d62b24bd46f338d1ba6c328499291d33c5cc7f35775f4263bc428b3->leave($__internal_27dfd5a08d62b24bd46f338d1ba6c328499291d33c5cc7f35775f4263bc428b3_prof);

        
        $__internal_a5a1dabddd8ec181f708a9b3acda4ce799df51c392d47e834f76f61f752af739->leave($__internal_a5a1dabddd8ec181f708a9b3acda4ce799df51c392d47e834f76f61f752af739_prof);

    }

    // line 13
    public function block_titre_admin_2($context, array $blocks = array())
    {
        $__internal_3c5081a2db82765c86e207de931545970451a504766f6fdd57b18dc1e81d4fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c5081a2db82765c86e207de931545970451a504766f6fdd57b18dc1e81d4fa1->enter($__internal_3c5081a2db82765c86e207de931545970451a504766f6fdd57b18dc1e81d4fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin_2"));

        $__internal_7935d950e97ce867dfdc31b6ea9bc4efa9187ead16bef079091ead43ecab668c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7935d950e97ce867dfdc31b6ea9bc4efa9187ead16bef079091ead43ecab668c->enter($__internal_7935d950e97ce867dfdc31b6ea9bc4efa9187ead16bef079091ead43ecab668c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin_2"));

        
        $__internal_7935d950e97ce867dfdc31b6ea9bc4efa9187ead16bef079091ead43ecab668c->leave($__internal_7935d950e97ce867dfdc31b6ea9bc4efa9187ead16bef079091ead43ecab668c_prof);

        
        $__internal_3c5081a2db82765c86e207de931545970451a504766f6fdd57b18dc1e81d4fa1->leave($__internal_3c5081a2db82765c86e207de931545970451a504766f6fdd57b18dc1e81d4fa1_prof);

    }

    // line 22
    public function block_tooltip_admin($context, array $blocks = array())
    {
        $__internal_adfc480a228d632bae902df7b081b6a6258a7ca5763893958c49321773e4aec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adfc480a228d632bae902df7b081b6a6258a7ca5763893958c49321773e4aec2->enter($__internal_adfc480a228d632bae902df7b081b6a6258a7ca5763893958c49321773e4aec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tooltip_admin"));

        $__internal_4df265ceeba620960326687ad2389c80d18f0bfc1fb3b20eac3e940d77060bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df265ceeba620960326687ad2389c80d18f0bfc1fb3b20eac3e940d77060bd7->enter($__internal_4df265ceeba620960326687ad2389c80d18f0bfc1fb3b20eac3e940d77060bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tooltip_admin"));

        
        $__internal_4df265ceeba620960326687ad2389c80d18f0bfc1fb3b20eac3e940d77060bd7->leave($__internal_4df265ceeba620960326687ad2389c80d18f0bfc1fb3b20eac3e940d77060bd7_prof);

        
        $__internal_adfc480a228d632bae902df7b081b6a6258a7ca5763893958c49321773e4aec2->leave($__internal_adfc480a228d632bae902df7b081b6a6258a7ca5763893958c49321773e4aec2_prof);

    }

    // line 29
    public function block_boutons_admin($context, array $blocks = array())
    {
        $__internal_9638acaed8706716cd8253dbfb4e83a27532914476d3317210b624ebe8203815 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9638acaed8706716cd8253dbfb4e83a27532914476d3317210b624ebe8203815->enter($__internal_9638acaed8706716cd8253dbfb4e83a27532914476d3317210b624ebe8203815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boutons_admin"));

        $__internal_abaa2ff91bf9109c89bf153a73a2551c0f4254de5649555a0a8adb0e0f0b43ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abaa2ff91bf9109c89bf153a73a2551c0f4254de5649555a0a8adb0e0f0b43ad->enter($__internal_abaa2ff91bf9109c89bf153a73a2551c0f4254de5649555a0a8adb0e0f0b43ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boutons_admin"));

        
        $__internal_abaa2ff91bf9109c89bf153a73a2551c0f4254de5649555a0a8adb0e0f0b43ad->leave($__internal_abaa2ff91bf9109c89bf153a73a2551c0f4254de5649555a0a8adb0e0f0b43ad_prof);

        
        $__internal_9638acaed8706716cd8253dbfb4e83a27532914476d3317210b624ebe8203815->leave($__internal_9638acaed8706716cd8253dbfb4e83a27532914476d3317210b624ebe8203815_prof);

    }

    // line 35
    public function block_tableau_admin($context, array $blocks = array())
    {
        $__internal_91cb891986a62f61e04c648ffd5cf8a5ec1b15261b46c655ce86e8b5ea2d9444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91cb891986a62f61e04c648ffd5cf8a5ec1b15261b46c655ce86e8b5ea2d9444->enter($__internal_91cb891986a62f61e04c648ffd5cf8a5ec1b15261b46c655ce86e8b5ea2d9444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableau_admin"));

        $__internal_3a368268208219dbcb72b6994a70b0c316ae8d2b717f4cf21008873ac609560a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a368268208219dbcb72b6994a70b0c316ae8d2b717f4cf21008873ac609560a->enter($__internal_3a368268208219dbcb72b6994a70b0c316ae8d2b717f4cf21008873ac609560a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableau_admin"));

        
        $__internal_3a368268208219dbcb72b6994a70b0c316ae8d2b717f4cf21008873ac609560a->leave($__internal_3a368268208219dbcb72b6994a70b0c316ae8d2b717f4cf21008873ac609560a_prof);

        
        $__internal_91cb891986a62f61e04c648ffd5cf8a5ec1b15261b46c655ce86e8b5ea2d9444->leave($__internal_91cb891986a62f61e04c648ffd5cf8a5ec1b15261b46c655ce86e8b5ea2d9444_prof);

    }

    // line 43
    public function block_breadcrumb_admin($context, array $blocks = array())
    {
        $__internal_6017ff25bfe6ac5038cfe98cbf34cf101b8b219b766e8d7ab3f2b14231c222d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6017ff25bfe6ac5038cfe98cbf34cf101b8b219b766e8d7ab3f2b14231c222d3->enter($__internal_6017ff25bfe6ac5038cfe98cbf34cf101b8b219b766e8d7ab3f2b14231c222d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_admin"));

        $__internal_16b9236f35086817a6a9ee3759fa549567ec82143c55caa9c28661422c97e51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b9236f35086817a6a9ee3759fa549567ec82143c55caa9c28661422c97e51d->enter($__internal_16b9236f35086817a6a9ee3759fa549567ec82143c55caa9c28661422c97e51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_admin"));

        
        $__internal_16b9236f35086817a6a9ee3759fa549567ec82143c55caa9c28661422c97e51d->leave($__internal_16b9236f35086817a6a9ee3759fa549567ec82143c55caa9c28661422c97e51d_prof);

        
        $__internal_6017ff25bfe6ac5038cfe98cbf34cf101b8b219b766e8d7ab3f2b14231c222d3->leave($__internal_6017ff25bfe6ac5038cfe98cbf34cf101b8b219b766e8d7ab3f2b14231c222d3_prof);

    }

    // line 53
    public function block_popup_admin_del_titre($context, array $blocks = array())
    {
        $__internal_63c3e3056d9e7e4abba644d794d7cc02cfa8ac150a65e53fc91a0dd5a4fafee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c3e3056d9e7e4abba644d794d7cc02cfa8ac150a65e53fc91a0dd5a4fafee4->enter($__internal_63c3e3056d9e7e4abba644d794d7cc02cfa8ac150a65e53fc91a0dd5a4fafee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_titre"));

        $__internal_e18576507407174fcc9f76e7a6559d05215a43862572470fa2ba0595e66f8492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e18576507407174fcc9f76e7a6559d05215a43862572470fa2ba0595e66f8492->enter($__internal_e18576507407174fcc9f76e7a6559d05215a43862572470fa2ba0595e66f8492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_titre"));

        
        $__internal_e18576507407174fcc9f76e7a6559d05215a43862572470fa2ba0595e66f8492->leave($__internal_e18576507407174fcc9f76e7a6559d05215a43862572470fa2ba0595e66f8492_prof);

        
        $__internal_63c3e3056d9e7e4abba644d794d7cc02cfa8ac150a65e53fc91a0dd5a4fafee4->leave($__internal_63c3e3056d9e7e4abba644d794d7cc02cfa8ac150a65e53fc91a0dd5a4fafee4_prof);

    }

    // line 63
    public function block_popup_admin_del_contenu($context, array $blocks = array())
    {
        $__internal_b99474780ffc2c30e0cfcb4026c7765dfdb08cf32fca381438b8dd25f8b1ec2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b99474780ffc2c30e0cfcb4026c7765dfdb08cf32fca381438b8dd25f8b1ec2a->enter($__internal_b99474780ffc2c30e0cfcb4026c7765dfdb08cf32fca381438b8dd25f8b1ec2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_contenu"));

        $__internal_f84ad9ae10a272203e5dd42ff9f2def2d41ee8992df00dcf502cf6230573c7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84ad9ae10a272203e5dd42ff9f2def2d41ee8992df00dcf502cf6230573c7a6->enter($__internal_f84ad9ae10a272203e5dd42ff9f2def2d41ee8992df00dcf502cf6230573c7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_contenu"));

        
        $__internal_f84ad9ae10a272203e5dd42ff9f2def2d41ee8992df00dcf502cf6230573c7a6->leave($__internal_f84ad9ae10a272203e5dd42ff9f2def2d41ee8992df00dcf502cf6230573c7a6_prof);

        
        $__internal_b99474780ffc2c30e0cfcb4026c7765dfdb08cf32fca381438b8dd25f8b1ec2a->leave($__internal_b99474780ffc2c30e0cfcb4026c7765dfdb08cf32fca381438b8dd25f8b1ec2a_prof);

    }

    // line 77
    public function block_popup_admin_add_titre($context, array $blocks = array())
    {
        $__internal_50eea1dc95a4237b8d5c10058433cd83f1f381795e264e4a2eeecee3db1f317b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50eea1dc95a4237b8d5c10058433cd83f1f381795e264e4a2eeecee3db1f317b->enter($__internal_50eea1dc95a4237b8d5c10058433cd83f1f381795e264e4a2eeecee3db1f317b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_titre"));

        $__internal_75e8b8f9d3a29fec1000d541054302386c8be7a0f278ea01d3cc7868bd25f3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e8b8f9d3a29fec1000d541054302386c8be7a0f278ea01d3cc7868bd25f3a7->enter($__internal_75e8b8f9d3a29fec1000d541054302386c8be7a0f278ea01d3cc7868bd25f3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_titre"));

        
        $__internal_75e8b8f9d3a29fec1000d541054302386c8be7a0f278ea01d3cc7868bd25f3a7->leave($__internal_75e8b8f9d3a29fec1000d541054302386c8be7a0f278ea01d3cc7868bd25f3a7_prof);

        
        $__internal_50eea1dc95a4237b8d5c10058433cd83f1f381795e264e4a2eeecee3db1f317b->leave($__internal_50eea1dc95a4237b8d5c10058433cd83f1f381795e264e4a2eeecee3db1f317b_prof);

    }

    // line 80
    public function block_popup_admin_add_contenu($context, array $blocks = array())
    {
        $__internal_f72ef4a65e372cfc17e8f58bb7f0ade84a6456b571cc2994c883fff73b2116e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72ef4a65e372cfc17e8f58bb7f0ade84a6456b571cc2994c883fff73b2116e4->enter($__internal_f72ef4a65e372cfc17e8f58bb7f0ade84a6456b571cc2994c883fff73b2116e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_contenu"));

        $__internal_7c330b6fe408640f622c536ef0a9d0e18e9a26106e79272999b3e1c262231466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c330b6fe408640f622c536ef0a9d0e18e9a26106e79272999b3e1c262231466->enter($__internal_7c330b6fe408640f622c536ef0a9d0e18e9a26106e79272999b3e1c262231466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_contenu"));

        
        $__internal_7c330b6fe408640f622c536ef0a9d0e18e9a26106e79272999b3e1c262231466->leave($__internal_7c330b6fe408640f622c536ef0a9d0e18e9a26106e79272999b3e1c262231466_prof);

        
        $__internal_f72ef4a65e372cfc17e8f58bb7f0ade84a6456b571cc2994c883fff73b2116e4->leave($__internal_f72ef4a65e372cfc17e8f58bb7f0ade84a6456b571cc2994c883fff73b2116e4_prof);

    }

    public function getTemplateName()
    {
        return "GediAdminBundle::layout_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 80,  350 => 77,  333 => 63,  316 => 53,  299 => 43,  282 => 35,  265 => 29,  248 => 22,  231 => 13,  217 => 81,  215 => 80,  209 => 77,  194 => 64,  192 => 63,  179 => 53,  166 => 43,  162 => 42,  158 => 41,  151 => 36,  149 => 35,  142 => 30,  140 => 29,  128 => 22,  123 => 19,  114 => 16,  111 => 15,  107 => 14,  103 => 13,  96 => 8,  87 => 7,  60 => 4,  51 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block app_titre %}
    Administration - {% block titre_admin %}{% endblock %}
{% endblock %}

{% block app_contenu %}
    <div class=\"panel panel-default\">
        <!-- Header du panel -->
        <div class=\"panel-heading\">
            <div class=\"row\">
                <div class=\"col-md-11\">
                    <h2>Liste des {% block titre_admin_2 %}{% endblock %}</h2>
                    {% for flashMessage in app.session.flashbag.get('success') %}
                        <script type=\"text/javascript\">
                            showNotifyUser(\"{{ flashMessage }}\");
                        </script>
                    {% endfor %}
                </div>
                <div class=\"col-md-1\">
                    <h2><span class=\"label label-default\" data-toggle=\"tooltip\" data-placement=\"bottom\"
                              title=\"Nombre {% block tooltip_admin %}{% endblock %}\">{{ tab_objets|length }}</span>
                    </h2>
                </div>
            </div>
        </div>
        <div class=\"panel-body\">
            <div class=\"btn-group\" role=\"group\" aria-label=\"...\">
                {% block boutons_admin %}{% endblock %}
            </div>
            <div class=\"table-responsive\">
                <table class=\"table\" data-toggle=\"table\" data-search=\"true\" data-striped=\"true\" data-pagination=\"true\"
                       data-classes=\"table-no-bordered table-hover\" data-page-list=\"[5, 10, 15, 20, 50]\"
                       id=\"table_admin\">
                    {% block tableau_admin %}{% endblock %}
                </table>
            </div>
        </div>
    </div>
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('start') }}\">Home</a></li>
        <li><a href=\"{{ path('home_admin') }}\">Administration</a></li>
        <li class=\"active\">{% block breadcrumb_admin %}{% endblock %}</li>
    </ol>

    <!-- Popup fenetre de suppression d'entité -->
    <div class=\"modal fade\" id=\"popup-delete\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- contenu -->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Suppression {% block popup_admin_del_titre %}{% endblock %}</h4>
                </div>
                <div class=\"modal-body\">
                    <p id=\"nbSel\">
                        <!-- contenu mis à jour dans majPopupDelete de gedi.js -->
                    </p>
                    <p>Valider la suppression ?</p>
                </div>
                <div class=\"modal-footer\">
                    <div class=\"form-group\">
                        {% block popup_admin_del_contenu %}{% endblock %}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup fenetre d'ajout d'entité -->
    <div class=\"modal fade\" id=\"popup-add\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- contenu-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Créer un {% block popup_admin_add_titre %}{% endblock %}</h4>
                </div>
                <div class=\"modal-body\">
                    {% block popup_admin_add_contenu %}{% endblock %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "GediAdminBundle::layout_admin.html.twig", "/var/www/html/Gedi/Symfony/src/Gedi/AdminBundle/Resources/views/layout_admin.html.twig");
    }
}
