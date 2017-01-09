<?php

/* GediBaseBundle::layout_base.html.twig */
class __TwigTemplate_66b5c7c3a5d7fe30cd98eb4523d7604bb25c3ec568900064e940cb94d602a483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "GediBaseBundle::layout_base.html.twig", 1);
        $this->blocks = array(
            'app_titre' => array($this, 'block_app_titre'),
            'base_titre' => array($this, 'block_base_titre'),
            'app_contenu' => array($this, 'block_app_contenu'),
            'base_contenu' => array($this, 'block_base_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_182c15f7bc123c20165e6b51eba158068c1524261b00e6d6a5819bb9ed585873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182c15f7bc123c20165e6b51eba158068c1524261b00e6d6a5819bb9ed585873->enter($__internal_182c15f7bc123c20165e6b51eba158068c1524261b00e6d6a5819bb9ed585873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediBaseBundle::layout_base.html.twig"));

        $__internal_a9eff6ca1d8480464c3490edce41e27dfb63eef421d242b6dc3898a902581e71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9eff6ca1d8480464c3490edce41e27dfb63eef421d242b6dc3898a902581e71->enter($__internal_a9eff6ca1d8480464c3490edce41e27dfb63eef421d242b6dc3898a902581e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediBaseBundle::layout_base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_182c15f7bc123c20165e6b51eba158068c1524261b00e6d6a5819bb9ed585873->leave($__internal_182c15f7bc123c20165e6b51eba158068c1524261b00e6d6a5819bb9ed585873_prof);

        
        $__internal_a9eff6ca1d8480464c3490edce41e27dfb63eef421d242b6dc3898a902581e71->leave($__internal_a9eff6ca1d8480464c3490edce41e27dfb63eef421d242b6dc3898a902581e71_prof);

    }

    // line 3
    public function block_app_titre($context, array $blocks = array())
    {
        $__internal_420681c13663f9fa7fead9ee47f47c1aca87be3c474b7d8bf99c95f997f1433d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420681c13663f9fa7fead9ee47f47c1aca87be3c474b7d8bf99c95f997f1433d->enter($__internal_420681c13663f9fa7fead9ee47f47c1aca87be3c474b7d8bf99c95f997f1433d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_titre"));

        $__internal_62f6d8b9042bd6ff3b2d92e893c4bda5f2434c031445c725394d455c5095247a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f6d8b9042bd6ff3b2d92e893c4bda5f2434c031445c725394d455c5095247a->enter($__internal_62f6d8b9042bd6ff3b2d92e893c4bda5f2434c031445c725394d455c5095247a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_titre"));

        // line 4
        echo "    ";
        $this->displayBlock('base_titre', $context, $blocks);
        
        $__internal_62f6d8b9042bd6ff3b2d92e893c4bda5f2434c031445c725394d455c5095247a->leave($__internal_62f6d8b9042bd6ff3b2d92e893c4bda5f2434c031445c725394d455c5095247a_prof);

        
        $__internal_420681c13663f9fa7fead9ee47f47c1aca87be3c474b7d8bf99c95f997f1433d->leave($__internal_420681c13663f9fa7fead9ee47f47c1aca87be3c474b7d8bf99c95f997f1433d_prof);

    }

    public function block_base_titre($context, array $blocks = array())
    {
        $__internal_93b9d468cf4cf3b71b09f44e2da7044ab5087a354f31339b4083cc45f55596e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b9d468cf4cf3b71b09f44e2da7044ab5087a354f31339b4083cc45f55596e5->enter($__internal_93b9d468cf4cf3b71b09f44e2da7044ab5087a354f31339b4083cc45f55596e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_titre"));

        $__internal_ae60cef2d62c4d34a1c49cb22b1233e3fcf07c9a65135b36a12138399a9dbb95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae60cef2d62c4d34a1c49cb22b1233e3fcf07c9a65135b36a12138399a9dbb95->enter($__internal_ae60cef2d62c4d34a1c49cb22b1233e3fcf07c9a65135b36a12138399a9dbb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_titre"));

        // line 5
        echo "    ";
        
        $__internal_ae60cef2d62c4d34a1c49cb22b1233e3fcf07c9a65135b36a12138399a9dbb95->leave($__internal_ae60cef2d62c4d34a1c49cb22b1233e3fcf07c9a65135b36a12138399a9dbb95_prof);

        
        $__internal_93b9d468cf4cf3b71b09f44e2da7044ab5087a354f31339b4083cc45f55596e5->leave($__internal_93b9d468cf4cf3b71b09f44e2da7044ab5087a354f31339b4083cc45f55596e5_prof);

    }

    // line 8
    public function block_app_contenu($context, array $blocks = array())
    {
        $__internal_ba20629ccf9ad13776a6fadd1275d6871727956f8d836f8ed476513dda06f4d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba20629ccf9ad13776a6fadd1275d6871727956f8d836f8ed476513dda06f4d3->enter($__internal_ba20629ccf9ad13776a6fadd1275d6871727956f8d836f8ed476513dda06f4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_contenu"));

        $__internal_9baeb634d3f39fcb660ac8904e21f5cc80f4c1a0f4eda01375244864f182f867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9baeb634d3f39fcb660ac8904e21f5cc80f4c1a0f4eda01375244864f182f867->enter($__internal_9baeb634d3f39fcb660ac8904e21f5cc80f4c1a0f4eda01375244864f182f867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_contenu"));

        // line 9
        echo "    ";
        $this->displayBlock('base_contenu', $context, $blocks);
        // line 11
        echo "    <footer class=\"footer text-white\">
        <p>Une question ? <a class=\"text-white\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo " \">Contact</a></p>
    </footer>
";
        
        $__internal_9baeb634d3f39fcb660ac8904e21f5cc80f4c1a0f4eda01375244864f182f867->leave($__internal_9baeb634d3f39fcb660ac8904e21f5cc80f4c1a0f4eda01375244864f182f867_prof);

        
        $__internal_ba20629ccf9ad13776a6fadd1275d6871727956f8d836f8ed476513dda06f4d3->leave($__internal_ba20629ccf9ad13776a6fadd1275d6871727956f8d836f8ed476513dda06f4d3_prof);

    }

    // line 9
    public function block_base_contenu($context, array $blocks = array())
    {
        $__internal_75050e41ddaa10f4815ac2edd8b708e6c067fad1fc8bcccf20ec8470ec4d786b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75050e41ddaa10f4815ac2edd8b708e6c067fad1fc8bcccf20ec8470ec4d786b->enter($__internal_75050e41ddaa10f4815ac2edd8b708e6c067fad1fc8bcccf20ec8470ec4d786b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_contenu"));

        $__internal_89d7dedd86b4aadff889e5186822b309f8f0526b8479a489284a21d8c37b9954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d7dedd86b4aadff889e5186822b309f8f0526b8479a489284a21d8c37b9954->enter($__internal_89d7dedd86b4aadff889e5186822b309f8f0526b8479a489284a21d8c37b9954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_contenu"));

        // line 10
        echo "    ";
        
        $__internal_89d7dedd86b4aadff889e5186822b309f8f0526b8479a489284a21d8c37b9954->leave($__internal_89d7dedd86b4aadff889e5186822b309f8f0526b8479a489284a21d8c37b9954_prof);

        
        $__internal_75050e41ddaa10f4815ac2edd8b708e6c067fad1fc8bcccf20ec8470ec4d786b->leave($__internal_75050e41ddaa10f4815ac2edd8b708e6c067fad1fc8bcccf20ec8470ec4d786b_prof);

    }

    public function getTemplateName()
    {
        return "GediBaseBundle::layout_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 10,  109 => 9,  96 => 12,  93 => 11,  90 => 9,  81 => 8,  71 => 5,  52 => 4,  43 => 3,  11 => 1,);
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
    {% block base_titre %}
    {% endblock %}
{% endblock %}

{% block app_contenu %}
    {% block base_contenu %}
    {% endblock %}
    <footer class=\"footer text-white\">
        <p>Une question ? <a class=\"text-white\" href=\"{{ path('contact') }} \">Contact</a></p>
    </footer>
{% endblock %}
", "GediBaseBundle::layout_base.html.twig", "/var/www/html/Gedi/Symfony/src/Gedi/BaseBundle/Resources/views/layout_base.html.twig");
    }
}
