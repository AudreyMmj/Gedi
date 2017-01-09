<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_77c421da8ebf6dbd8993e82d3651e86aa412980a185d57b38c0048dd2b6ed5cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c9b29f945e13045b0f6645dbb4b8087f8beb35feb7432102f594fb100d801f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9b29f945e13045b0f6645dbb4b8087f8beb35feb7432102f594fb100d801f5->enter($__internal_4c9b29f945e13045b0f6645dbb4b8087f8beb35feb7432102f594fb100d801f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d5253b535328f87420ff2099c8194ab50625f39cf4d4ced7db6e5644f209bda1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5253b535328f87420ff2099c8194ab50625f39cf4d4ced7db6e5644f209bda1->enter($__internal_d5253b535328f87420ff2099c8194ab50625f39cf4d4ced7db6e5644f209bda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c9b29f945e13045b0f6645dbb4b8087f8beb35feb7432102f594fb100d801f5->leave($__internal_4c9b29f945e13045b0f6645dbb4b8087f8beb35feb7432102f594fb100d801f5_prof);

        
        $__internal_d5253b535328f87420ff2099c8194ab50625f39cf4d4ced7db6e5644f209bda1->leave($__internal_d5253b535328f87420ff2099c8194ab50625f39cf4d4ced7db6e5644f209bda1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0cf85ba4694a3ea9d367622e4fcd2ee6ff3cb5646c6e12420f73714026c56685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf85ba4694a3ea9d367622e4fcd2ee6ff3cb5646c6e12420f73714026c56685->enter($__internal_0cf85ba4694a3ea9d367622e4fcd2ee6ff3cb5646c6e12420f73714026c56685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e4f7cb94d44868de5baf36f9986e307f3b0cb095a39ebc4dfcbe0d8166432c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f7cb94d44868de5baf36f9986e307f3b0cb095a39ebc4dfcbe0d8166432c6f->enter($__internal_e4f7cb94d44868de5baf36f9986e307f3b0cb095a39ebc4dfcbe0d8166432c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4f7cb94d44868de5baf36f9986e307f3b0cb095a39ebc4dfcbe0d8166432c6f->leave($__internal_e4f7cb94d44868de5baf36f9986e307f3b0cb095a39ebc4dfcbe0d8166432c6f_prof);

        
        $__internal_0cf85ba4694a3ea9d367622e4fcd2ee6ff3cb5646c6e12420f73714026c56685->leave($__internal_0cf85ba4694a3ea9d367622e4fcd2ee6ff3cb5646c6e12420f73714026c56685_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_926f766ecbadb6fb62d0108d2daa8397c165f3e433b6d8dda718462e2bf8cd22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_926f766ecbadb6fb62d0108d2daa8397c165f3e433b6d8dda718462e2bf8cd22->enter($__internal_926f766ecbadb6fb62d0108d2daa8397c165f3e433b6d8dda718462e2bf8cd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1a6bd93300abff9d21a382259c204570c4d0fbe7cf09e5d5af0b6976a4ae3cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6bd93300abff9d21a382259c204570c4d0fbe7cf09e5d5af0b6976a4ae3cb5->enter($__internal_1a6bd93300abff9d21a382259c204570c4d0fbe7cf09e5d5af0b6976a4ae3cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a6bd93300abff9d21a382259c204570c4d0fbe7cf09e5d5af0b6976a4ae3cb5->leave($__internal_1a6bd93300abff9d21a382259c204570c4d0fbe7cf09e5d5af0b6976a4ae3cb5_prof);

        
        $__internal_926f766ecbadb6fb62d0108d2daa8397c165f3e433b6d8dda718462e2bf8cd22->leave($__internal_926f766ecbadb6fb62d0108d2daa8397c165f3e433b6d8dda718462e2bf8cd22_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5486c4429e405f73c64a67aa38ced19f17bb2c4639ed442faec09a59dc604aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5486c4429e405f73c64a67aa38ced19f17bb2c4639ed442faec09a59dc604aaa->enter($__internal_5486c4429e405f73c64a67aa38ced19f17bb2c4639ed442faec09a59dc604aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e226571176252db35dc46ade7a47b6ad0fa95c7c4189cbf781db6b3ab13411fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e226571176252db35dc46ade7a47b6ad0fa95c7c4189cbf781db6b3ab13411fc->enter($__internal_e226571176252db35dc46ade7a47b6ad0fa95c7c4189cbf781db6b3ab13411fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e226571176252db35dc46ade7a47b6ad0fa95c7c4189cbf781db6b3ab13411fc->leave($__internal_e226571176252db35dc46ade7a47b6ad0fa95c7c4189cbf781db6b3ab13411fc_prof);

        
        $__internal_5486c4429e405f73c64a67aa38ced19f17bb2c4639ed442faec09a59dc604aaa->leave($__internal_5486c4429e405f73c64a67aa38ced19f17bb2c4639ed442faec09a59dc604aaa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Gedi/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
