<?php

/* GediBaseBundle:Base:login.html.twig */
class __TwigTemplate_af7fd3bfee5ebc4f5228dceafba25b7de19ae3e3f0dd2b2f2de01a951ded31e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GediBaseBundle::layout_base.html.twig", "GediBaseBundle:Base:login.html.twig", 1);
        $this->blocks = array(
            'base_titre' => array($this, 'block_base_titre'),
            'base_contenu' => array($this, 'block_base_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GediBaseBundle::layout_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5cc05e2c162bee5904a761893b7f6d04b5b5248ecb750bb1132d80d2055c9f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc05e2c162bee5904a761893b7f6d04b5b5248ecb750bb1132d80d2055c9f2c->enter($__internal_5cc05e2c162bee5904a761893b7f6d04b5b5248ecb750bb1132d80d2055c9f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediBaseBundle:Base:login.html.twig"));

        $__internal_7e836ec5fb9d0186b76a05e13c3f0a731bea3ace524f83a4461e4c41e14d644c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e836ec5fb9d0186b76a05e13c3f0a731bea3ace524f83a4461e4c41e14d644c->enter($__internal_7e836ec5fb9d0186b76a05e13c3f0a731bea3ace524f83a4461e4c41e14d644c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediBaseBundle:Base:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cc05e2c162bee5904a761893b7f6d04b5b5248ecb750bb1132d80d2055c9f2c->leave($__internal_5cc05e2c162bee5904a761893b7f6d04b5b5248ecb750bb1132d80d2055c9f2c_prof);

        
        $__internal_7e836ec5fb9d0186b76a05e13c3f0a731bea3ace524f83a4461e4c41e14d644c->leave($__internal_7e836ec5fb9d0186b76a05e13c3f0a731bea3ace524f83a4461e4c41e14d644c_prof);

    }

    // line 3
    public function block_base_titre($context, array $blocks = array())
    {
        $__internal_924760b1da7ccac55c8c381df74a0606c339557876d09e8948d3c2205a9e26ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_924760b1da7ccac55c8c381df74a0606c339557876d09e8948d3c2205a9e26ec->enter($__internal_924760b1da7ccac55c8c381df74a0606c339557876d09e8948d3c2205a9e26ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_titre"));

        $__internal_3d7bf082e2d30ed78c77026dcc8ba4274b0548486c8a1ec06d1a213a0d38611f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7bf082e2d30ed78c77026dcc8ba4274b0548486c8a1ec06d1a213a0d38611f->enter($__internal_3d7bf082e2d30ed78c77026dcc8ba4274b0548486c8a1ec06d1a213a0d38611f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_titre"));

        echo "Authentication";
        
        $__internal_3d7bf082e2d30ed78c77026dcc8ba4274b0548486c8a1ec06d1a213a0d38611f->leave($__internal_3d7bf082e2d30ed78c77026dcc8ba4274b0548486c8a1ec06d1a213a0d38611f_prof);

        
        $__internal_924760b1da7ccac55c8c381df74a0606c339557876d09e8948d3c2205a9e26ec->leave($__internal_924760b1da7ccac55c8c381df74a0606c339557876d09e8948d3c2205a9e26ec_prof);

    }

    // line 5
    public function block_base_contenu($context, array $blocks = array())
    {
        $__internal_0d60e9d81ad32faa7839c93cb4eba1e5f0b7b53807e25090865e0952a0311529 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d60e9d81ad32faa7839c93cb4eba1e5f0b7b53807e25090865e0952a0311529->enter($__internal_0d60e9d81ad32faa7839c93cb4eba1e5f0b7b53807e25090865e0952a0311529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_contenu"));

        $__internal_f47055907f90dd8ceae4b26af22fd77232dcc1d796ad33ea86b359f5527648ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47055907f90dd8ceae4b26af22fd77232dcc1d796ad33ea86b359f5527648ff->enter($__internal_f47055907f90dd8ceae4b26af22fd77232dcc1d796ad33ea86b359f5527648ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_contenu"));

        // line 6
        echo "    <h2 class=\"text-center text-white\">";
        $this->displayBlock("base_titre", $context, $blocks);
        echo "</h2>
    ";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "        <div class=\"alert alert-danger\">
            <strong>Echec de login!</strong>
        </div>
    ";
        }
        // line 12
        echo "    <div class=\"well down-decale effect-transparent\">
        <form class=\"form-signin form-horizontal\" role=\"form\" action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"post\">
            <div class=\"form-group\">
                <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
                    <input type=\"text\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"
                           placeholder=\"Login\" required autofocus>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
                    <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Mot de passe\"
                           required>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
                    <button type=\"submit\" class=\"btn btn-default btn-primary btn-lg\">Connexion
                    </button>
                </div>
            </div>
        </form>
    </div>
    <p class=\"text-white\">Pas encore de compte ? <a class=\"text-white\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo " \">Incrivez-vous
            !</a></p>
";
        
        $__internal_f47055907f90dd8ceae4b26af22fd77232dcc1d796ad33ea86b359f5527648ff->leave($__internal_f47055907f90dd8ceae4b26af22fd77232dcc1d796ad33ea86b359f5527648ff_prof);

        
        $__internal_0d60e9d81ad32faa7839c93cb4eba1e5f0b7b53807e25090865e0952a0311529->leave($__internal_0d60e9d81ad32faa7839c93cb4eba1e5f0b7b53807e25090865e0952a0311529_prof);

    }

    public function getTemplateName()
    {
        return "GediBaseBundle:Base:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 34,  90 => 16,  84 => 13,  81 => 12,  75 => 8,  73 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"GediBaseBundle::layout_base.html.twig\" %}

{% block base_titre %}Authentication{% endblock %}

{% block base_contenu %}
    <h2 class=\"text-center text-white\">{{ block('base_titre') }}</h2>
    {% if error %}
        <div class=\"alert alert-danger\">
            <strong>Echec de login!</strong>
        </div>
    {% endif %}
    <div class=\"well down-decale effect-transparent\">
        <form class=\"form-signin form-horizontal\" role=\"form\" action=\"{{ path('login_check') }}\" method=\"post\">
            <div class=\"form-group\">
                <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
                    <input type=\"text\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\"
                           placeholder=\"Login\" required autofocus>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
                    <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Mot de passe\"
                           required>
                </div>
            </div>
            <div class=\"form-group\">
                <div class=\"col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4\">
                    <button type=\"submit\" class=\"btn btn-default btn-primary btn-lg\">Connexion
                    </button>
                </div>
            </div>
        </form>
    </div>
    <p class=\"text-white\">Pas encore de compte ? <a class=\"text-white\" href=\"{{ path('register') }} \">Incrivez-vous
            !</a></p>
{% endblock %}
", "GediBaseBundle:Base:login.html.twig", "/var/www/html/Gedi/Symfony/src/Gedi/BaseBundle/Resources/views/Base/login.html.twig");
    }
}
