<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_e4bf08a29dc80e403ff9fbdbbc135be9d3e951bd72610f2476cc3783df8ab300 extends Twig_Template
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
        $__internal_c652cc75e24503a277bacf18fcdae3bcdacb38cd6a4d60d13703408a06b3f62e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c652cc75e24503a277bacf18fcdae3bcdacb38cd6a4d60d13703408a06b3f62e->enter($__internal_c652cc75e24503a277bacf18fcdae3bcdacb38cd6a4d60d13703408a06b3f62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_8240db180f9321e0947b4d306fa64666dbd2acb2c5a764f5d67159c46bfaa0a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8240db180f9321e0947b4d306fa64666dbd2acb2c5a764f5d67159c46bfaa0a3->enter($__internal_8240db180f9321e0947b4d306fa64666dbd2acb2c5a764f5d67159c46bfaa0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_c652cc75e24503a277bacf18fcdae3bcdacb38cd6a4d60d13703408a06b3f62e->leave($__internal_c652cc75e24503a277bacf18fcdae3bcdacb38cd6a4d60d13703408a06b3f62e_prof);

        
        $__internal_8240db180f9321e0947b4d306fa64666dbd2acb2c5a764f5d67159c46bfaa0a3->leave($__internal_8240db180f9321e0947b4d306fa64666dbd2acb2c5a764f5d67159c46bfaa0a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/Gedi/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
