<?php

/* GediBaseBundle:Base:home.html.twig */
class __TwigTemplate_7ea435257ea9bbd8f8759b542b173e3a7a70335f25c35ed007c028f9210f01af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GediBaseBundle::layout_base.html.twig", "GediBaseBundle:Base:home.html.twig", 1);
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
        $__internal_368e5d5832570ee0433e7930bfaab2d1c4a6a53a035cc6c0fc7364102924a47f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368e5d5832570ee0433e7930bfaab2d1c4a6a53a035cc6c0fc7364102924a47f->enter($__internal_368e5d5832570ee0433e7930bfaab2d1c4a6a53a035cc6c0fc7364102924a47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediBaseBundle:Base:home.html.twig"));

        $__internal_2c112705f7d2613d48e242698ae1c46f0bdefbafc4c916f2640f530609cb5115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c112705f7d2613d48e242698ae1c46f0bdefbafc4c916f2640f530609cb5115->enter($__internal_2c112705f7d2613d48e242698ae1c46f0bdefbafc4c916f2640f530609cb5115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediBaseBundle:Base:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_368e5d5832570ee0433e7930bfaab2d1c4a6a53a035cc6c0fc7364102924a47f->leave($__internal_368e5d5832570ee0433e7930bfaab2d1c4a6a53a035cc6c0fc7364102924a47f_prof);

        
        $__internal_2c112705f7d2613d48e242698ae1c46f0bdefbafc4c916f2640f530609cb5115->leave($__internal_2c112705f7d2613d48e242698ae1c46f0bdefbafc4c916f2640f530609cb5115_prof);

    }

    // line 3
    public function block_base_titre($context, array $blocks = array())
    {
        $__internal_d28a76191ab9385e70e8de8306c64265949ec4f6681ebb998172984de6126a3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28a76191ab9385e70e8de8306c64265949ec4f6681ebb998172984de6126a3b->enter($__internal_d28a76191ab9385e70e8de8306c64265949ec4f6681ebb998172984de6126a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_titre"));

        $__internal_2716b1c2878c7910700d2a4b3868b9a9592e3e9b02f329e93d199eea9a6100c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2716b1c2878c7910700d2a4b3868b9a9592e3e9b02f329e93d199eea9a6100c5->enter($__internal_2716b1c2878c7910700d2a4b3868b9a9592e3e9b02f329e93d199eea9a6100c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_titre"));

        // line 4
        echo "    Accueil
    ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 6
            echo "        ";
            // line 7
            echo "        Administration
    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 9
            echo "        ";
            // line 10
            echo "        Utilisateur
    ";
        }
        
        $__internal_2716b1c2878c7910700d2a4b3868b9a9592e3e9b02f329e93d199eea9a6100c5->leave($__internal_2716b1c2878c7910700d2a4b3868b9a9592e3e9b02f329e93d199eea9a6100c5_prof);

        
        $__internal_d28a76191ab9385e70e8de8306c64265949ec4f6681ebb998172984de6126a3b->leave($__internal_d28a76191ab9385e70e8de8306c64265949ec4f6681ebb998172984de6126a3b_prof);

    }

    // line 14
    public function block_base_contenu($context, array $blocks = array())
    {
        $__internal_b817e986f066828076eaf0a65f9fe897dc521e45ba276467e1bd909d05ec0b1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b817e986f066828076eaf0a65f9fe897dc521e45ba276467e1bd909d05ec0b1a->enter($__internal_b817e986f066828076eaf0a65f9fe897dc521e45ba276467e1bd909d05ec0b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_contenu"));

        $__internal_db6e660ebe5cb024ab877af1470bada3edca3febc7451b9aeac4a25fb8141c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db6e660ebe5cb024ab877af1470bada3edca3febc7451b9aeac4a25fb8141c1a->enter($__internal_db6e660ebe5cb024ab877af1470bada3edca3febc7451b9aeac4a25fb8141c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_contenu"));

        // line 15
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "        <!-- affichage de l'espace admin si l'utilisateur est admin -->
        ";
            // line 17
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GediAdminBundle:Admin:home"));
            echo "
    ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 19
            echo "        <!-- affichage de l'espace user si l'utilisateur est user -->
        ";
            // line 20
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("GediUserBundle:User:home"));
            echo "
    ";
        }
        
        $__internal_db6e660ebe5cb024ab877af1470bada3edca3febc7451b9aeac4a25fb8141c1a->leave($__internal_db6e660ebe5cb024ab877af1470bada3edca3febc7451b9aeac4a25fb8141c1a_prof);

        
        $__internal_b817e986f066828076eaf0a65f9fe897dc521e45ba276467e1bd909d05ec0b1a->leave($__internal_b817e986f066828076eaf0a65f9fe897dc521e45ba276467e1bd909d05ec0b1a_prof);

    }

    public function getTemplateName()
    {
        return "GediBaseBundle:Base:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 20,  95 => 19,  90 => 17,  87 => 16,  84 => 15,  75 => 14,  63 => 10,  61 => 9,  57 => 7,  55 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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

{% block base_titre %}
    Accueil
    {% if is_granted('ROLE_ADMIN') %}
        {# affichage de l'espace admin si l'utilisateur est admin #}
        Administration
    {% elseif is_granted('ROLE_USER') %}
        {# affichage de l'espace user si l'utilisateur est user #}
        Utilisateur
    {% endif %}
{% endblock %}

{% block base_contenu %}
    {% if is_granted('ROLE_ADMIN') %}
        <!-- affichage de l'espace admin si l'utilisateur est admin -->
        {{ render(controller(\"GediAdminBundle:Admin:home\")) }}
    {% elseif is_granted('ROLE_USER') %}
        <!-- affichage de l'espace user si l'utilisateur est user -->
        {{ render(controller(\"GediUserBundle:User:home\")) }}
    {% endif %}
{% endblock %}


", "GediBaseBundle:Base:home.html.twig", "/var/www/html/Gedi/Symfony/src/Gedi/BaseBundle/Resources/views/Base/home.html.twig");
    }
}
