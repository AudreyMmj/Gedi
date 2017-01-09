<?php

/* GediBaseBundle:Base:start.html.twig */
class __TwigTemplate_d45a778898871592a04e04a63ee1f8dc6a35df7f3294226336932a85834da78d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GediBaseBundle::layout_base.html.twig", "GediBaseBundle:Base:start.html.twig", 1);
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
        $__internal_e66acf93224dfd54f174de7dcc2b985d87a597c20134dc77c9469dda03ca41fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66acf93224dfd54f174de7dcc2b985d87a597c20134dc77c9469dda03ca41fc->enter($__internal_e66acf93224dfd54f174de7dcc2b985d87a597c20134dc77c9469dda03ca41fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediBaseBundle:Base:start.html.twig"));

        $__internal_9d9774037cd6d24328814e99d23b56942a0b3dfa4940d79b6a0f88c8d66fe388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d9774037cd6d24328814e99d23b56942a0b3dfa4940d79b6a0f88c8d66fe388->enter($__internal_9d9774037cd6d24328814e99d23b56942a0b3dfa4940d79b6a0f88c8d66fe388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediBaseBundle:Base:start.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e66acf93224dfd54f174de7dcc2b985d87a597c20134dc77c9469dda03ca41fc->leave($__internal_e66acf93224dfd54f174de7dcc2b985d87a597c20134dc77c9469dda03ca41fc_prof);

        
        $__internal_9d9774037cd6d24328814e99d23b56942a0b3dfa4940d79b6a0f88c8d66fe388->leave($__internal_9d9774037cd6d24328814e99d23b56942a0b3dfa4940d79b6a0f88c8d66fe388_prof);

    }

    // line 3
    public function block_base_titre($context, array $blocks = array())
    {
        $__internal_b1d1c9addd2a4f53089baf97b17ab3d84f79e092f667a77a6b8399aba052984a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d1c9addd2a4f53089baf97b17ab3d84f79e092f667a77a6b8399aba052984a->enter($__internal_b1d1c9addd2a4f53089baf97b17ab3d84f79e092f667a77a6b8399aba052984a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_titre"));

        $__internal_daf691b7d727e1fcf8897c310f104c6185e89909d56656ecd7b2e8fc31b31d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf691b7d727e1fcf8897c310f104c6185e89909d56656ecd7b2e8fc31b31d3a->enter($__internal_daf691b7d727e1fcf8897c310f104c6185e89909d56656ecd7b2e8fc31b31d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_titre"));

        echo "Start";
        
        $__internal_daf691b7d727e1fcf8897c310f104c6185e89909d56656ecd7b2e8fc31b31d3a->leave($__internal_daf691b7d727e1fcf8897c310f104c6185e89909d56656ecd7b2e8fc31b31d3a_prof);

        
        $__internal_b1d1c9addd2a4f53089baf97b17ab3d84f79e092f667a77a6b8399aba052984a->leave($__internal_b1d1c9addd2a4f53089baf97b17ab3d84f79e092f667a77a6b8399aba052984a_prof);

    }

    // line 5
    public function block_base_contenu($context, array $blocks = array())
    {
        $__internal_9c2cbc4c6a4936f5786f9599e066d464c236d3f87a71b932c4ab7e4dff4ea9e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2cbc4c6a4936f5786f9599e066d464c236d3f87a71b932c4ab7e4dff4ea9e6->enter($__internal_9c2cbc4c6a4936f5786f9599e066d464c236d3f87a71b932c4ab7e4dff4ea9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_contenu"));

        $__internal_9631a5828accded977e610f187023463588e727bd5a0da9866208049871bfd6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9631a5828accded977e610f187023463588e727bd5a0da9866208049871bfd6c->enter($__internal_9631a5828accded977e610f187023463588e727bd5a0da9866208049871bfd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_contenu"));

        // line 6
        echo "    <div class=\"jumbotron pad-space down-decale effect-transparent\">
        <h1 class=\"up-decale\">Bienvenue sur Gedi !</h1>
        <p>Gedi est un Gestionnaire Electronique de Documents Interractif qui<br>
            vous permet de stocker vos documents en ligne et de collaborer <br>
            avec d'autres personnes. </p>

        ";
        // line 12
        if ( !$this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 13
            echo "            <!-- le bouton de connexion n'apparait que lorqu'on est deconnecté -->
            <p><a class=\"btn btn-primary btn-lg\" href=\"";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\" role=\"button\">Connexion</a></p>
        ";
        }
        // line 16
        echo "    </div>
    <p class=\"text-white\">Pas encore de compte ? <a class=\"text-white\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register");
        echo " \">Incrivez-vous
            !</a></p>
";
        
        $__internal_9631a5828accded977e610f187023463588e727bd5a0da9866208049871bfd6c->leave($__internal_9631a5828accded977e610f187023463588e727bd5a0da9866208049871bfd6c_prof);

        
        $__internal_9c2cbc4c6a4936f5786f9599e066d464c236d3f87a71b932c4ab7e4dff4ea9e6->leave($__internal_9c2cbc4c6a4936f5786f9599e066d464c236d3f87a71b932c4ab7e4dff4ea9e6_prof);

    }

    public function getTemplateName()
    {
        return "GediBaseBundle:Base:start.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 17,  86 => 16,  81 => 14,  78 => 13,  76 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block base_titre %}Start{% endblock %}

{% block base_contenu %}
    <div class=\"jumbotron pad-space down-decale effect-transparent\">
        <h1 class=\"up-decale\">Bienvenue sur Gedi !</h1>
        <p>Gedi est un Gestionnaire Electronique de Documents Interractif qui<br>
            vous permet de stocker vos documents en ligne et de collaborer <br>
            avec d'autres personnes. </p>

        {% if not is_granted('IS_AUTHENTICATED_FULLY') %}
            <!-- le bouton de connexion n'apparait que lorqu'on est deconnecté -->
            <p><a class=\"btn btn-primary btn-lg\" href=\"{{ path('login') }}\" role=\"button\">Connexion</a></p>
        {% endif %}
    </div>
    <p class=\"text-white\">Pas encore de compte ? <a class=\"text-white\" href=\"{{ path('register') }} \">Incrivez-vous
            !</a></p>
{% endblock %}", "GediBaseBundle:Base:start.html.twig", "/var/www/html/Gedi/Symfony/src/Gedi/BaseBundle/Resources/views/Base/start.html.twig");
    }
}
