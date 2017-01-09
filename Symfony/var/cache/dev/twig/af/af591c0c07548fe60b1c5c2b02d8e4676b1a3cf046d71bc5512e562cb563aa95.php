<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_44d596c3d58ff2ee7a49025487d9703c3856c9b8b701dd2742c8b9b51b81d40a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7086067e8b933dd3926bfc8728882f59e2ad29b69bd78dd115d298b2ce49cc43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7086067e8b933dd3926bfc8728882f59e2ad29b69bd78dd115d298b2ce49cc43->enter($__internal_7086067e8b933dd3926bfc8728882f59e2ad29b69bd78dd115d298b2ce49cc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_8e9d1f319d0ec044260411146641e65a5529a537923abdbea009b4d42a1378f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e9d1f319d0ec044260411146641e65a5529a537923abdbea009b4d42a1378f7->enter($__internal_8e9d1f319d0ec044260411146641e65a5529a537923abdbea009b4d42a1378f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7086067e8b933dd3926bfc8728882f59e2ad29b69bd78dd115d298b2ce49cc43->leave($__internal_7086067e8b933dd3926bfc8728882f59e2ad29b69bd78dd115d298b2ce49cc43_prof);

        
        $__internal_8e9d1f319d0ec044260411146641e65a5529a537923abdbea009b4d42a1378f7->leave($__internal_8e9d1f319d0ec044260411146641e65a5529a537923abdbea009b4d42a1378f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24ccef9d01b92b2d2412c125a162e4250a871994523a98915e3f532c44e27237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ccef9d01b92b2d2412c125a162e4250a871994523a98915e3f532c44e27237->enter($__internal_24ccef9d01b92b2d2412c125a162e4250a871994523a98915e3f532c44e27237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e1a8ce2426cbe57aa37648e8856c0185f9cc8e668f31372ac3ae5afa38851448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a8ce2426cbe57aa37648e8856c0185f9cc8e668f31372ac3ae5afa38851448->enter($__internal_e1a8ce2426cbe57aa37648e8856c0185f9cc8e668f31372ac3ae5afa38851448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e1a8ce2426cbe57aa37648e8856c0185f9cc8e668f31372ac3ae5afa38851448->leave($__internal_e1a8ce2426cbe57aa37648e8856c0185f9cc8e668f31372ac3ae5afa38851448_prof);

        
        $__internal_24ccef9d01b92b2d2412c125a162e4250a871994523a98915e3f532c44e27237->leave($__internal_24ccef9d01b92b2d2412c125a162e4250a871994523a98915e3f532c44e27237_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e60f27506b72722d53edcbf6b3719b15d7b85486c3a1a06cbd0d707edb6a3b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e60f27506b72722d53edcbf6b3719b15d7b85486c3a1a06cbd0d707edb6a3b9->enter($__internal_3e60f27506b72722d53edcbf6b3719b15d7b85486c3a1a06cbd0d707edb6a3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c0f78fb91cd9b203133d3a10ddd88e9ddd6ffe1bce42008083b107dbd964ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c0f78fb91cd9b203133d3a10ddd88e9ddd6ffe1bce42008083b107dbd964ad6->enter($__internal_1c0f78fb91cd9b203133d3a10ddd88e9ddd6ffe1bce42008083b107dbd964ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c0f78fb91cd9b203133d3a10ddd88e9ddd6ffe1bce42008083b107dbd964ad6->leave($__internal_1c0f78fb91cd9b203133d3a10ddd88e9ddd6ffe1bce42008083b107dbd964ad6_prof);

        
        $__internal_3e60f27506b72722d53edcbf6b3719b15d7b85486c3a1a06cbd0d707edb6a3b9->leave($__internal_3e60f27506b72722d53edcbf6b3719b15d7b85486c3a1a06cbd0d707edb6a3b9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e029d4aadb65af1218afe61e1e53d0be8d51b8b4943ab9a613c3a44de91b220e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e029d4aadb65af1218afe61e1e53d0be8d51b8b4943ab9a613c3a44de91b220e->enter($__internal_e029d4aadb65af1218afe61e1e53d0be8d51b8b4943ab9a613c3a44de91b220e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73ba9c3b42c6ca2e308181f176d01c616d9b9ed04a2fca35daa51590d0f2e3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ba9c3b42c6ca2e308181f176d01c616d9b9ed04a2fca35daa51590d0f2e3f4->enter($__internal_73ba9c3b42c6ca2e308181f176d01c616d9b9ed04a2fca35daa51590d0f2e3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_73ba9c3b42c6ca2e308181f176d01c616d9b9ed04a2fca35daa51590d0f2e3f4->leave($__internal_73ba9c3b42c6ca2e308181f176d01c616d9b9ed04a2fca35daa51590d0f2e3f4_prof);

        
        $__internal_e029d4aadb65af1218afe61e1e53d0be8d51b8b4943ab9a613c3a44de91b220e->leave($__internal_e029d4aadb65af1218afe61e1e53d0be8d51b8b4943ab9a613c3a44de91b220e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Gedi/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
