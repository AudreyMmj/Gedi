<?php

/* ::layout.html.twig */
class __TwigTemplate_f151ae8716713ae675ca189a072edd2d32fcb1fd2e73fe88ec0b62de2bdfb882 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'app_titre' => array($this, 'block_app_titre'),
            'app_contenu' => array($this, 'block_app_contenu'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79415d7e68e4fc333e38e66790d1249767f5534b56e7b9412030afc2fc4b639e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79415d7e68e4fc333e38e66790d1249767f5534b56e7b9412030afc2fc4b639e->enter($__internal_79415d7e68e4fc333e38e66790d1249767f5534b56e7b9412030afc2fc4b639e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_ff80b8de369a682277b60cbcf0e5718d74fd4812e37b26e1f75e0142989b4374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff80b8de369a682277b60cbcf0e5718d74fd4812e37b26e1f75e0142989b4374->enter($__internal_ff80b8de369a682277b60cbcf0e5718d74fd4812e37b26e1f75e0142989b4374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    <!-- bloc de titre, contient les titres des autres pages -->
    <title>GEDI - ";
        // line 18
        $this->displayBlock('app_titre', $context, $blocks);
        echo "</title>
</head>
<body class=\"full\">
<div class=\"container\">
    <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                        data-target=\"#navbar-collapse-target\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("start");
        echo "\"><strong>GEDI</strong></a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-target\">
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 35
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 36
            echo "                        <!-- la barre de recherche, elle n'apparait que lorsque quelqu'un est connecté -->
                        <form class=\"navbar-form navbar-left\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\"><span
                                        class=\"glyphicon glyphicon-search\"></span></button>
                        </form>
                        ";
            // line 44
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 45
                echo "                            <!-- le menu déroulant, apparait lorsqu'un ADMIN est connecté -->
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <span class=\"glyphicon glyphicon-menu-hamburger\"></span>
                                    Bienvenue, ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
                echo " <b
                                            class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
                // line 52
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_admin");
                echo "\"><span
                                                    class=\"glyphicon glyphicon-home\"></span> Accueil</a></li>
                                    <li><a href=\"";
                // line 54
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_admin");
                echo "\"><span
                                                    class=\"glyphicon glyphicon-user\"></span> Utilisateurs</a></li>
                                    <li><a href=\"";
                // line 56
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groups_admin");
                echo "\"><span
                                                    class=\"glyphicon glyphicon-th\"></span> Groupes</a></li>
                                    <li><a href=\"";
                // line 58
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projects_admin");
                echo "\"><span
                                                    class=\"glyphicon glyphicon-folder-close\"></span> Projets</a></li>
                                    <li><a href=\"";
                // line 60
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("docs_admin");
                echo "\"><span
                                                    class=\"glyphicon glyphicon-file\"></span> Documents</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-cog\"></span> Paramètres</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
                // line 65
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
                echo "\"><span class=\"glyphicon glyphicon-log-out\"></span>
                                            Deconnexion</a></li>
                                </ul>
                            </li>
                        ";
            } else {
                // line 70
                echo "                            <!-- le menu déroulant, apparait lorsqu'un USER est connecté -->
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <span class=\"glyphicon glyphicon-user\"></span> Bienvenue, ";
                // line 74
                echo "                                    <b
                                            class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
                // line 77
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_user");
                echo "\"><span class=\"glyphicon glyphicon-home\"></span>
                                            Accueil</a></li>
                                    <li><a href=\"";
                // line 79
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shared_user");
                echo "\"><span
                                                    class=\"glyphicon glyphicon-globe\"></span> Partagé</a></li>
                                    <li><a href=\"";
                // line 81
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recent_user");
                echo "\"><span
                                                    class=\"glyphicon glyphicon-time\"></span> Recent</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
                // line 84
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_user");
                echo "\"><span
                                                    class=\"glyphicon glyphicon-user\"></span> Mon compte</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
                // line 87
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
                echo "\"> <span
                                                    class=\"glyphicon glyphicon-log-out\"></span>Deconnexion</a></li>
                                </ul>
                            </li>
                        ";
            }
            // line 92
            echo "                    ";
        } else {
            // line 93
            echo "                        <!-- le menu déroulant, apparait lorsqu'un personne n'est connecté -->
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-lock\"></span> Non connecté <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 98
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\"><span
                                                class=\"glyphicon glyphicon-log-in\"></span> Connexion</a>
                                </li>
                            </ul>
                        </li>
                    ";
        }
        // line 104
        echo "                </ul>
            </div>
        </div>
    </nav>
    <!-- bloc contenu, contient le code des autres pages -->
    <div id=\"content\">";
        // line 109
        $this->displayBlock('app_contenu', $context, $blocks);
        echo "</div>
</div>

";
        // line 112
        $this->displayBlock('javascripts', $context, $blocks);
        // line 126
        echo "
</body>
</html>
";
        
        $__internal_79415d7e68e4fc333e38e66790d1249767f5534b56e7b9412030afc2fc4b639e->leave($__internal_79415d7e68e4fc333e38e66790d1249767f5534b56e7b9412030afc2fc4b639e_prof);

        
        $__internal_ff80b8de369a682277b60cbcf0e5718d74fd4812e37b26e1f75e0142989b4374->leave($__internal_ff80b8de369a682277b60cbcf0e5718d74fd4812e37b26e1f75e0142989b4374_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0be302003f620703042f7f41b0f8c74b9aa1db6a3a1fcf29001c441249298240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be302003f620703042f7f41b0f8c74b9aa1db6a3a1fcf29001c441249298240->enter($__internal_0be302003f620703042f7f41b0f8c74b9aa1db6a3a1fcf29001c441249298240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_76e8b988fd6912d5b7c91eee0721470bf25bc1a8a5bc4f6603909812a0c71155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76e8b988fd6912d5b7c91eee0721470bf25bc1a8a5bc4f6603909812a0c71155->enter($__internal_76e8b988fd6912d5b7c91eee0721470bf25bc1a8a5bc4f6603909812a0c71155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <!-- bootstrap css -->
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- bootstrap-table css -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap-table/dist/bootstrap-table.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- animate css -->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/animate.css"), "html", null, true);
        echo "\"/>
        <!-- gedi css -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/gedi.css"), "html", null, true);
        echo "\"/>
    ";
        
        $__internal_76e8b988fd6912d5b7c91eee0721470bf25bc1a8a5bc4f6603909812a0c71155->leave($__internal_76e8b988fd6912d5b7c91eee0721470bf25bc1a8a5bc4f6603909812a0c71155_prof);

        
        $__internal_0be302003f620703042f7f41b0f8c74b9aa1db6a3a1fcf29001c441249298240->leave($__internal_0be302003f620703042f7f41b0f8c74b9aa1db6a3a1fcf29001c441249298240_prof);

    }

    // line 18
    public function block_app_titre($context, array $blocks = array())
    {
        $__internal_d314e5775e72b41b0d17b40a11c2b432340a0eb1a74172a3b323aabf9b0735f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d314e5775e72b41b0d17b40a11c2b432340a0eb1a74172a3b323aabf9b0735f5->enter($__internal_d314e5775e72b41b0d17b40a11c2b432340a0eb1a74172a3b323aabf9b0735f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_titre"));

        $__internal_8eb54dcb60d2308e2e92c04d50e7191262cc9073625f35444b3e0647eef151ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb54dcb60d2308e2e92c04d50e7191262cc9073625f35444b3e0647eef151ef->enter($__internal_8eb54dcb60d2308e2e92c04d50e7191262cc9073625f35444b3e0647eef151ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_titre"));

        
        $__internal_8eb54dcb60d2308e2e92c04d50e7191262cc9073625f35444b3e0647eef151ef->leave($__internal_8eb54dcb60d2308e2e92c04d50e7191262cc9073625f35444b3e0647eef151ef_prof);

        
        $__internal_d314e5775e72b41b0d17b40a11c2b432340a0eb1a74172a3b323aabf9b0735f5->leave($__internal_d314e5775e72b41b0d17b40a11c2b432340a0eb1a74172a3b323aabf9b0735f5_prof);

    }

    // line 109
    public function block_app_contenu($context, array $blocks = array())
    {
        $__internal_0b4d1a64268ab92319940f32268209287f5b597bce00336dd8652f2298972c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b4d1a64268ab92319940f32268209287f5b597bce00336dd8652f2298972c96->enter($__internal_0b4d1a64268ab92319940f32268209287f5b597bce00336dd8652f2298972c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_contenu"));

        $__internal_6b0c92242620d69070485141b7a8ff5c73e5ecd142d5a7a3048f5783720e7eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b0c92242620d69070485141b7a8ff5c73e5ecd142d5a7a3048f5783720e7eeb->enter($__internal_6b0c92242620d69070485141b7a8ff5c73e5ecd142d5a7a3048f5783720e7eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_contenu"));

        
        $__internal_6b0c92242620d69070485141b7a8ff5c73e5ecd142d5a7a3048f5783720e7eeb->leave($__internal_6b0c92242620d69070485141b7a8ff5c73e5ecd142d5a7a3048f5783720e7eeb_prof);

        
        $__internal_0b4d1a64268ab92319940f32268209287f5b597bce00336dd8652f2298972c96->leave($__internal_0b4d1a64268ab92319940f32268209287f5b597bce00336dd8652f2298972c96_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32f7ab889cdec3707bdb485c5831053aab4a6d5e6fe93728e2ef0d41cdb1f602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32f7ab889cdec3707bdb485c5831053aab4a6d5e6fe93728e2ef0d41cdb1f602->enter($__internal_32f7ab889cdec3707bdb485c5831053aab4a6d5e6fe93728e2ef0d41cdb1f602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ede9aa723be72e3cb1b72017cc6251487bfb8b4a56a6ab4e185f5314d3946c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede9aa723be72e3cb1b72017cc6251487bfb8b4a56a6ab4e185f5314d3946c04->enter($__internal_ede9aa723be72e3cb1b72017cc6251487bfb8b4a56a6ab4e185f5314d3946c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- JavaScript Boostrap plugin -->
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap-table/dist/bootstrap-table.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Latest compiled and minified Locales -->
    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap-table/dist/locale/bootstrap-table-fr-FR.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-notify js -->
    <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap-notify-master/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
    <!-- gedi js -->
    <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/js/gedi.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ede9aa723be72e3cb1b72017cc6251487bfb8b4a56a6ab4e185f5314d3946c04->leave($__internal_ede9aa723be72e3cb1b72017cc6251487bfb8b4a56a6ab4e185f5314d3946c04_prof);

        
        $__internal_32f7ab889cdec3707bdb485c5831053aab4a6d5e6fe93728e2ef0d41cdb1f602->leave($__internal_32f7ab889cdec3707bdb485c5831053aab4a6d5e6fe93728e2ef0d41cdb1f602_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 124,  319 => 122,  314 => 120,  309 => 118,  304 => 116,  299 => 114,  296 => 113,  287 => 112,  270 => 109,  253 => 18,  241 => 15,  236 => 13,  231 => 11,  226 => 9,  223 => 8,  214 => 7,  201 => 126,  199 => 112,  193 => 109,  186 => 104,  177 => 98,  170 => 93,  167 => 92,  159 => 87,  153 => 84,  147 => 81,  142 => 79,  137 => 77,  132 => 74,  127 => 70,  119 => 65,  111 => 60,  106 => 58,  101 => 56,  96 => 54,  91 => 52,  85 => 49,  79 => 45,  77 => 44,  67 => 36,  65 => 35,  58 => 31,  42 => 18,  39 => 17,  37 => 7,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block stylesheets %}
        <!-- bootstrap css -->
        <link href=\"{{ asset('lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <!-- bootstrap-table css -->
        <link href=\"{{ asset('lib/bootstrap-table/dist/bootstrap-table.min.css') }}\" rel=\"stylesheet\">
        <!-- animate css -->
        <link rel=\"stylesheet\" href=\"{{ asset('lib/animate.css') }}\"/>
        <!-- gedi css -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/gedi.css') }}\"/>
    {% endblock %}
    <!-- bloc de titre, contient les titres des autres pages -->
    <title>GEDI - {% block app_titre %}{% endblock %}</title>
</head>
<body class=\"full\">
<div class=\"container\">
    <nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                        data-target=\"#navbar-collapse-target\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ path('start') }}\"><strong>GEDI</strong></a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbar-collapse-target\">
                <ul class=\"nav navbar-nav navbar-right\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <!-- la barre de recherche, elle n'apparait que lorsque quelqu'un est connecté -->
                        <form class=\"navbar-form navbar-left\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\"><span
                                        class=\"glyphicon glyphicon-search\"></span></button>
                        </form>
                        {% if is_granted('ROLE_ADMIN') %}
                            <!-- le menu déroulant, apparait lorsqu'un ADMIN est connecté -->
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <span class=\"glyphicon glyphicon-menu-hamburger\"></span>
                                    Bienvenue, {{ app.user.prenom }} <b
                                            class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{ path('home_admin') }}\"><span
                                                    class=\"glyphicon glyphicon-home\"></span> Accueil</a></li>
                                    <li><a href=\"{{ path('users_admin') }}\"><span
                                                    class=\"glyphicon glyphicon-user\"></span> Utilisateurs</a></li>
                                    <li><a href=\"{{ path('groups_admin') }}\"><span
                                                    class=\"glyphicon glyphicon-th\"></span> Groupes</a></li>
                                    <li><a href=\"{{ path('projects_admin') }}\"><span
                                                    class=\"glyphicon glyphicon-folder-close\"></span> Projets</a></li>
                                    <li><a href=\"{{ path('docs_admin') }}\"><span
                                                    class=\"glyphicon glyphicon-file\"></span> Documents</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-cog\"></span> Paramètres</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"{{ path('logout') }}\"><span class=\"glyphicon glyphicon-log-out\"></span>
                                            Deconnexion</a></li>
                                </ul>
                            </li>
                        {% else %}
                            <!-- le menu déroulant, apparait lorsqu'un USER est connecté -->
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <span class=\"glyphicon glyphicon-user\"></span> Bienvenue, {#{{ app.user.prenom }}#}
                                    <b
                                            class=\"caret\"></b></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{ path('home_user') }}\"><span class=\"glyphicon glyphicon-home\"></span>
                                            Accueil</a></li>
                                    <li><a href=\"{{ path('shared_user') }}\"><span
                                                    class=\"glyphicon glyphicon-globe\"></span> Partagé</a></li>
                                    <li><a href=\"{{ path('recent_user') }}\"><span
                                                    class=\"glyphicon glyphicon-time\"></span> Recent</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"{{ path('account_user') }}\"><span
                                                    class=\"glyphicon glyphicon-user\"></span> Mon compte</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"{{ path('logout') }}\"> <span
                                                    class=\"glyphicon glyphicon-log-out\"></span>Deconnexion</a></li>
                                </ul>
                            </li>
                        {% endif %}
                    {% else %}
                        <!-- le menu déroulant, apparait lorsqu'un personne n'est connecté -->
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                <span class=\"glyphicon glyphicon-lock\"></span> Non connecté <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{ path('login') }}\"><span
                                                class=\"glyphicon glyphicon-log-in\"></span> Connexion</a>
                                </li>
                            </ul>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>
    <!-- bloc contenu, contient le code des autres pages -->
    <div id=\"content\">{% block app_contenu %}{% endblock %}</div>
</div>

{% block javascripts %}
    <!-- jQuery -->
    <script src=\"{{ asset('lib/jquery/jquery.min.js') }}\"></script>
    <!-- JavaScript Boostrap plugin -->
    <script src=\"{{ asset('lib/bootstrap/js/bootstrap.min.js') }}\"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src=\"{{ asset('lib/bootstrap-table/dist/bootstrap-table.min.js') }}\"></script>
    <!-- Latest compiled and minified Locales -->
    <script src=\"{{ asset('lib/bootstrap-table/dist/locale/bootstrap-table-fr-FR.min.js') }}\"></script>
    <!-- bootstrap-notify js -->
    <script src=\"{{ asset('lib/bootstrap-notify-master/bootstrap-notify.js') }}\"></script>
    <!-- gedi js -->
    <script src=\"{{ asset('lib/js/gedi.js') }}\"></script>
{% endblock %}

</body>
</html>
", "::layout.html.twig", "/var/www/html/Gedi/Symfony/app/Resources/views/layout.html.twig");
    }
}
