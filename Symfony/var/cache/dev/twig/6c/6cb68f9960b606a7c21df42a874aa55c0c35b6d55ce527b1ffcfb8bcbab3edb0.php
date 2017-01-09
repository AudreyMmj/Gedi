<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6baf843bb98cedd7578fc82474abc59c2b43b1313c009fa82fbc8e19e6d5c298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_382f1f912346ae4cda57f5fefa9a78baa1bc506d836166217500f8d29f7d3e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382f1f912346ae4cda57f5fefa9a78baa1bc506d836166217500f8d29f7d3e9a->enter($__internal_382f1f912346ae4cda57f5fefa9a78baa1bc506d836166217500f8d29f7d3e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fe27976294b742a254696cb27ba02f2fe985bad73bec963532f02cfed1a0acd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe27976294b742a254696cb27ba02f2fe985bad73bec963532f02cfed1a0acd9->enter($__internal_fe27976294b742a254696cb27ba02f2fe985bad73bec963532f02cfed1a0acd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382f1f912346ae4cda57f5fefa9a78baa1bc506d836166217500f8d29f7d3e9a->leave($__internal_382f1f912346ae4cda57f5fefa9a78baa1bc506d836166217500f8d29f7d3e9a_prof);

        
        $__internal_fe27976294b742a254696cb27ba02f2fe985bad73bec963532f02cfed1a0acd9->leave($__internal_fe27976294b742a254696cb27ba02f2fe985bad73bec963532f02cfed1a0acd9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37fe6f830d0e52259bb071200400077b1b781b9d346b6dee8cff3dd0fc1eaf38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37fe6f830d0e52259bb071200400077b1b781b9d346b6dee8cff3dd0fc1eaf38->enter($__internal_37fe6f830d0e52259bb071200400077b1b781b9d346b6dee8cff3dd0fc1eaf38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c69c4caf99ead75eaebd43a49e9122aada395e2f45c435b62c523f989e06fece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69c4caf99ead75eaebd43a49e9122aada395e2f45c435b62c523f989e06fece->enter($__internal_c69c4caf99ead75eaebd43a49e9122aada395e2f45c435b62c523f989e06fece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c69c4caf99ead75eaebd43a49e9122aada395e2f45c435b62c523f989e06fece->leave($__internal_c69c4caf99ead75eaebd43a49e9122aada395e2f45c435b62c523f989e06fece_prof);

        
        $__internal_37fe6f830d0e52259bb071200400077b1b781b9d346b6dee8cff3dd0fc1eaf38->leave($__internal_37fe6f830d0e52259bb071200400077b1b781b9d346b6dee8cff3dd0fc1eaf38_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_38a6fa90d65986baa658e5f11d28300ce8ef1fd7a1588f4e66d8d5935dd23244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a6fa90d65986baa658e5f11d28300ce8ef1fd7a1588f4e66d8d5935dd23244->enter($__internal_38a6fa90d65986baa658e5f11d28300ce8ef1fd7a1588f4e66d8d5935dd23244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5df2625de3ea4d2e8acc27ea1b07aad900d17f4b20e80b9b763e456edc38cc0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df2625de3ea4d2e8acc27ea1b07aad900d17f4b20e80b9b763e456edc38cc0c->enter($__internal_5df2625de3ea4d2e8acc27ea1b07aad900d17f4b20e80b9b763e456edc38cc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5df2625de3ea4d2e8acc27ea1b07aad900d17f4b20e80b9b763e456edc38cc0c->leave($__internal_5df2625de3ea4d2e8acc27ea1b07aad900d17f4b20e80b9b763e456edc38cc0c_prof);

        
        $__internal_38a6fa90d65986baa658e5f11d28300ce8ef1fd7a1588f4e66d8d5935dd23244->leave($__internal_38a6fa90d65986baa658e5f11d28300ce8ef1fd7a1588f4e66d8d5935dd23244_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_558617d5cc86bcefdb286107474f091a495f52a61198e054ce701a9ad2b6fde1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558617d5cc86bcefdb286107474f091a495f52a61198e054ce701a9ad2b6fde1->enter($__internal_558617d5cc86bcefdb286107474f091a495f52a61198e054ce701a9ad2b6fde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_635c741b63a16fdf0147d7be744d6478b10848d8ba4fab8452613cb25f6346c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635c741b63a16fdf0147d7be744d6478b10848d8ba4fab8452613cb25f6346c6->enter($__internal_635c741b63a16fdf0147d7be744d6478b10848d8ba4fab8452613cb25f6346c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_635c741b63a16fdf0147d7be744d6478b10848d8ba4fab8452613cb25f6346c6->leave($__internal_635c741b63a16fdf0147d7be744d6478b10848d8ba4fab8452613cb25f6346c6_prof);

        
        $__internal_558617d5cc86bcefdb286107474f091a495f52a61198e054ce701a9ad2b6fde1->leave($__internal_558617d5cc86bcefdb286107474f091a495f52a61198e054ce701a9ad2b6fde1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Gedi/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
