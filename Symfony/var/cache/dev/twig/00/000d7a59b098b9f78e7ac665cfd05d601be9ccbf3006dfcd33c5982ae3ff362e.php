<?php

/* GediAdminBundle:Admin:home_admin.html.twig */
class __TwigTemplate_63682f084353c6fe0a8a8923158d3407c921cd321cdf757efbe88b6dd0969564 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "GediAdminBundle:Admin:home_admin.html.twig", 1);
        $this->blocks = array(
            'app_titre' => array($this, 'block_app_titre'),
            'app_contenu' => array($this, 'block_app_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a30cedf8965c3fda536603cefbe16ebcae9f07602d76a0948e8c1805ab8147a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a30cedf8965c3fda536603cefbe16ebcae9f07602d76a0948e8c1805ab8147a->enter($__internal_2a30cedf8965c3fda536603cefbe16ebcae9f07602d76a0948e8c1805ab8147a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediAdminBundle:Admin:home_admin.html.twig"));

        $__internal_6aa04e491a51ec9a5b0088c52d1ea4baa2dc9b1be97a951243c35f7990adf63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa04e491a51ec9a5b0088c52d1ea4baa2dc9b1be97a951243c35f7990adf63b->enter($__internal_6aa04e491a51ec9a5b0088c52d1ea4baa2dc9b1be97a951243c35f7990adf63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediAdminBundle:Admin:home_admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a30cedf8965c3fda536603cefbe16ebcae9f07602d76a0948e8c1805ab8147a->leave($__internal_2a30cedf8965c3fda536603cefbe16ebcae9f07602d76a0948e8c1805ab8147a_prof);

        
        $__internal_6aa04e491a51ec9a5b0088c52d1ea4baa2dc9b1be97a951243c35f7990adf63b->leave($__internal_6aa04e491a51ec9a5b0088c52d1ea4baa2dc9b1be97a951243c35f7990adf63b_prof);

    }

    // line 3
    public function block_app_titre($context, array $blocks = array())
    {
        $__internal_db899b02884330cbeb6b7c49eb29e05f0f0fe5a1f0d59f6df4aa4111e3ad0f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db899b02884330cbeb6b7c49eb29e05f0f0fe5a1f0d59f6df4aa4111e3ad0f97->enter($__internal_db899b02884330cbeb6b7c49eb29e05f0f0fe5a1f0d59f6df4aa4111e3ad0f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_titre"));

        $__internal_db01d5a0dc7ebf355822ec9eaf79f3925f211d4046d55a2c2a70a857128eb262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db01d5a0dc7ebf355822ec9eaf79f3925f211d4046d55a2c2a70a857128eb262->enter($__internal_db01d5a0dc7ebf355822ec9eaf79f3925f211d4046d55a2c2a70a857128eb262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_titre"));

        // line 4
        echo "    Administration - Home
";
        
        $__internal_db01d5a0dc7ebf355822ec9eaf79f3925f211d4046d55a2c2a70a857128eb262->leave($__internal_db01d5a0dc7ebf355822ec9eaf79f3925f211d4046d55a2c2a70a857128eb262_prof);

        
        $__internal_db899b02884330cbeb6b7c49eb29e05f0f0fe5a1f0d59f6df4aa4111e3ad0f97->leave($__internal_db899b02884330cbeb6b7c49eb29e05f0f0fe5a1f0d59f6df4aa4111e3ad0f97_prof);

    }

    // line 7
    public function block_app_contenu($context, array $blocks = array())
    {
        $__internal_a73a83cbc5459c5b94f19cb23845de725c2f20dd3f35761e62950a619504fd76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73a83cbc5459c5b94f19cb23845de725c2f20dd3f35761e62950a619504fd76->enter($__internal_a73a83cbc5459c5b94f19cb23845de725c2f20dd3f35761e62950a619504fd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_contenu"));

        $__internal_7187cd7fb18988db37e01c109efefb63173925d3be2f7a6a5f9fac5521e0d2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7187cd7fb18988db37e01c109efefb63173925d3be2f7a6a5f9fac5521e0d2c6->enter($__internal_7187cd7fb18988db37e01c109efefb63173925d3be2f7a6a5f9fac5521e0d2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_contenu"));

        // line 8
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groups_admin");
        echo " \">Gestion des groupes</a>
    <br>
    <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("docs_admin");
        echo " \">Gestion des documents</a>
    <br>
    <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("users_admin");
        echo " \">Gestion des utilisateurs</a>
    <br>
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("projects_admin");
        echo " \">Gestion des projets</a>
";
        
        $__internal_7187cd7fb18988db37e01c109efefb63173925d3be2f7a6a5f9fac5521e0d2c6->leave($__internal_7187cd7fb18988db37e01c109efefb63173925d3be2f7a6a5f9fac5521e0d2c6_prof);

        
        $__internal_a73a83cbc5459c5b94f19cb23845de725c2f20dd3f35761e62950a619504fd76->leave($__internal_a73a83cbc5459c5b94f19cb23845de725c2f20dd3f35761e62950a619504fd76_prof);

    }

    public function getTemplateName()
    {
        return "GediAdminBundle:Admin:home_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 14,  81 => 12,  76 => 10,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    Administration - Home
{% endblock %}

{% block app_contenu %}
    <a href=\"{{ path('groups_admin') }} \">Gestion des groupes</a>
    <br>
    <a href=\"{{ path('docs_admin') }} \">Gestion des documents</a>
    <br>
    <a href=\"{{ path('users_admin') }} \">Gestion des utilisateurs</a>
    <br>
    <a href=\"{{ path('projects_admin') }} \">Gestion des projets</a>
{% endblock %}


", "GediAdminBundle:Admin:home_admin.html.twig", "/var/www/html/Gedi/Symfony/src/Gedi/AdminBundle/Resources/views/Admin/home_admin.html.twig");
    }
}
