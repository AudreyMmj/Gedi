<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_37bcbea2e76fc12033f94b1d7ae575aaac7c48e57f5fe241aa3c0d881d67ec84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc964f40e50c5adef966e39cefaf2e005c5bd82a99669895ce4c775c63a2fedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc964f40e50c5adef966e39cefaf2e005c5bd82a99669895ce4c775c63a2fedd->enter($__internal_fc964f40e50c5adef966e39cefaf2e005c5bd82a99669895ce4c775c63a2fedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f61fff0d5ad6b4cb06855e1d644104f42eac7a040debce8760c86c67e513a4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61fff0d5ad6b4cb06855e1d644104f42eac7a040debce8760c86c67e513a4de->enter($__internal_f61fff0d5ad6b4cb06855e1d644104f42eac7a040debce8760c86c67e513a4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc964f40e50c5adef966e39cefaf2e005c5bd82a99669895ce4c775c63a2fedd->leave($__internal_fc964f40e50c5adef966e39cefaf2e005c5bd82a99669895ce4c775c63a2fedd_prof);

        
        $__internal_f61fff0d5ad6b4cb06855e1d644104f42eac7a040debce8760c86c67e513a4de->leave($__internal_f61fff0d5ad6b4cb06855e1d644104f42eac7a040debce8760c86c67e513a4de_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b70f4f1946b07ac1ba57db8ea409353717f0574046a43237f73e38c1c1cd042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b70f4f1946b07ac1ba57db8ea409353717f0574046a43237f73e38c1c1cd042->enter($__internal_3b70f4f1946b07ac1ba57db8ea409353717f0574046a43237f73e38c1c1cd042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bf967e9999b5375717f1ee1e2ca8c2d5d626c10af2463824211721835b62e52b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf967e9999b5375717f1ee1e2ca8c2d5d626c10af2463824211721835b62e52b->enter($__internal_bf967e9999b5375717f1ee1e2ca8c2d5d626c10af2463824211721835b62e52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bf967e9999b5375717f1ee1e2ca8c2d5d626c10af2463824211721835b62e52b->leave($__internal_bf967e9999b5375717f1ee1e2ca8c2d5d626c10af2463824211721835b62e52b_prof);

        
        $__internal_3b70f4f1946b07ac1ba57db8ea409353717f0574046a43237f73e38c1c1cd042->leave($__internal_3b70f4f1946b07ac1ba57db8ea409353717f0574046a43237f73e38c1c1cd042_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/Gedi/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
