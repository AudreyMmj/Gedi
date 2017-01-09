<?php

/* GediUserBundle:User:home_user.html.twig */
class __TwigTemplate_ace0a3da357bfb182ccc0eebc4d0727e8c82ece19636291f821bf780520a90fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de54fc8e0b7f44f4b8de63f7a6ce3b2e00010fe13664ecf262ba89f021f96fc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de54fc8e0b7f44f4b8de63f7a6ce3b2e00010fe13664ecf262ba89f021f96fc7->enter($__internal_de54fc8e0b7f44f4b8de63f7a6ce3b2e00010fe13664ecf262ba89f021f96fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediUserBundle:User:home_user.html.twig"));

        $__internal_929c84d372cf06483922ea3678df59aaea49a111f0aa30b2fe426fff9acceeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_929c84d372cf06483922ea3678df59aaea49a111f0aa30b2fe426fff9acceeb3->enter($__internal_929c84d372cf06483922ea3678df59aaea49a111f0aa30b2fe426fff9acceeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediUserBundle:User:home_user.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 6
        echo "    ";
        // line 7
        echo "        ";
        // line 8
        echo "            ";
        // line 9
        echo "            ";
        // line 10
        echo "        ";
        // line 11
        echo "    ";
        // line 12
        echo "

    ";
        // line 15
        echo "    ";
        // line 16
        echo "        ";
        // line 17
        echo "    ";
        // line 18
        echo "        ";
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        // line 21
        echo "
";
        // line 23
        echo "
    <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shared_user");
        echo " \">Documents partagés</a>
    <br>
    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_user");
        echo " \">Mon compte</a>
    <br>
    <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("recent_user");
        echo " \">Recent</a>
";
        
        $__internal_de54fc8e0b7f44f4b8de63f7a6ce3b2e00010fe13664ecf262ba89f021f96fc7->leave($__internal_de54fc8e0b7f44f4b8de63f7a6ce3b2e00010fe13664ecf262ba89f021f96fc7_prof);

        
        $__internal_929c84d372cf06483922ea3678df59aaea49a111f0aa30b2fe426fff9acceeb3->leave($__internal_929c84d372cf06483922ea3678df59aaea49a111f0aa30b2fe426fff9acceeb3_prof);

    }

    public function getTemplateName()
    {
        return "GediUserBundle:User:home_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  70 => 26,  65 => 24,  62 => 23,  59 => 21,  57 => 20,  55 => 19,  53 => 18,  51 => 17,  49 => 16,  47 => 15,  43 => 12,  41 => 11,  39 => 10,  37 => 9,  35 => 8,  33 => 7,  31 => 6,  28 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#{% extends \"layout.html.twig\" %}#}

{#{% block title %}Mon espace{% endblock %}#}

{#{% block content %}#}
    {#{% for utilisateur in tab_objets %}#}
        {#<article>#}
            {#<h2><a class=\"descGroupe\">{{ utilisateur.nom }}</a>#}
            {#</h2>#}
        {#</article>#}
    {#{% endfor %}#}


    {#<h3>Add a comment</h3>#}
    {#{% if is_granted('IS_AUTHENTICATED_FULLY') %}#}
        {#Soon!#}
    {#{% else %}#}
        {#<a href=\"{{ path('login') }} \">Log in</a> to add comments.#}
    {#{% endif %}#}
    {#</p>#}

{#{% block body %}{% endblock %}#}

    <a href=\"{{ path('shared_user') }} \">Documents partagés</a>
    <br>
    <a href=\"{{ path('account_user') }} \">Mon compte</a>
    <br>
    <a href=\"{{ path('recent_user') }} \">Recent</a>
{#{% endblock %}#}
", "GediUserBundle:User:home_user.html.twig", "/var/www/html/Gedi/Symfony/src/Gedi/UserBundle/Resources/views/User/home_user.html.twig");
    }
}
