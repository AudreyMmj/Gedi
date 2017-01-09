<?php

/* GediBaseBundle:Base:register.html.twig */
class __TwigTemplate_881876982d23835661857c97c16d6c56c45a0e3fb1673728efd314fb81086102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GediBaseBundle::layout_base.html.twig", "GediBaseBundle:Base:register.html.twig", 1);
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
        $__internal_a746bfabfaed5f76bbb99bcb797bf0688cc341ec34a498ccb252f6dee6ad3ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a746bfabfaed5f76bbb99bcb797bf0688cc341ec34a498ccb252f6dee6ad3ec0->enter($__internal_a746bfabfaed5f76bbb99bcb797bf0688cc341ec34a498ccb252f6dee6ad3ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediBaseBundle:Base:register.html.twig"));

        $__internal_e7dfa04c9ef3adef8f91d0bd4319a45e066480e3a2273689a8b52880dae08540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7dfa04c9ef3adef8f91d0bd4319a45e066480e3a2273689a8b52880dae08540->enter($__internal_e7dfa04c9ef3adef8f91d0bd4319a45e066480e3a2273689a8b52880dae08540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediBaseBundle:Base:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a746bfabfaed5f76bbb99bcb797bf0688cc341ec34a498ccb252f6dee6ad3ec0->leave($__internal_a746bfabfaed5f76bbb99bcb797bf0688cc341ec34a498ccb252f6dee6ad3ec0_prof);

        
        $__internal_e7dfa04c9ef3adef8f91d0bd4319a45e066480e3a2273689a8b52880dae08540->leave($__internal_e7dfa04c9ef3adef8f91d0bd4319a45e066480e3a2273689a8b52880dae08540_prof);

    }

    // line 3
    public function block_base_titre($context, array $blocks = array())
    {
        $__internal_4b15f50ec22d160b4e522ae824eae89b1087ccb78ce0472ee68431cf75a0a5b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b15f50ec22d160b4e522ae824eae89b1087ccb78ce0472ee68431cf75a0a5b5->enter($__internal_4b15f50ec22d160b4e522ae824eae89b1087ccb78ce0472ee68431cf75a0a5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_titre"));

        $__internal_acbaa24e92bcf8c89c8c5fefc25ab88750018f79d507362ffa5840a2e3605d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbaa24e92bcf8c89c8c5fefc25ab88750018f79d507362ffa5840a2e3605d6d->enter($__internal_acbaa24e92bcf8c89c8c5fefc25ab88750018f79d507362ffa5840a2e3605d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_titre"));

        echo "Demande d'inscription";
        
        $__internal_acbaa24e92bcf8c89c8c5fefc25ab88750018f79d507362ffa5840a2e3605d6d->leave($__internal_acbaa24e92bcf8c89c8c5fefc25ab88750018f79d507362ffa5840a2e3605d6d_prof);

        
        $__internal_4b15f50ec22d160b4e522ae824eae89b1087ccb78ce0472ee68431cf75a0a5b5->leave($__internal_4b15f50ec22d160b4e522ae824eae89b1087ccb78ce0472ee68431cf75a0a5b5_prof);

    }

    // line 5
    public function block_base_contenu($context, array $blocks = array())
    {
        $__internal_431f7a91641dab6a4003a1fc3ceb8773e647cff1923887d029f66b31ec54911f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431f7a91641dab6a4003a1fc3ceb8773e647cff1923887d029f66b31ec54911f->enter($__internal_431f7a91641dab6a4003a1fc3ceb8773e647cff1923887d029f66b31ec54911f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_contenu"));

        $__internal_6956ca4aa7f279602bf34c9589da28b48bd172c36e8508103e92c0858caa5346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6956ca4aa7f279602bf34c9589da28b48bd172c36e8508103e92c0858caa5346->enter($__internal_6956ca4aa7f279602bf34c9589da28b48bd172c36e8508103e92c0858caa5346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base_contenu"));

        // line 6
        echo "    <div class=\"center-pad\">
        <div class=\"panel panel-default effect-transparent\">
            ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), 'form_start');
        echo "
            <div class=\"panel-heading full-transparent\">
                <h2>Demande d'inscription</h2>
                <p>Remplissez le formulaire d'inscription, tous les champs sont obligatoires.
                    <br>Votre compte sera activé sous réserve de l'administrateur</p>
            </div>
            <div class=\"panel-body full-transparent\">
                <div class=\"form-group full-transparent\">
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "username", array()), 'errors');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "username", array()), 'widget', array("attr" => array("rows" => "1", "class" => "form-control", "placeholder" => "Email")));
        // line 21
        echo "
                    <br>
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "password", array()), "first", array()), 'errors');
        echo "
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "password", array()), "first", array()), 'widget', array("attr" => array("rows" => "1", "class" => "form-control", "placeholder" => "Mot de passe")));
        // line 28
        echo "
                    <br>
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "password", array()), "second", array()), 'errors');
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "password", array()), "second", array()), 'widget', array("attr" => array("rows" => "1", "class" => "form-control", "placeholder" => "Confirmation de mot de passe")));
        // line 35
        echo "
                    <br>
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "nom", array()), 'errors');
        echo "
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "nom", array()), 'widget', array("attr" => array("rows" => "1", "class" => "form-control", "placeholder" => "Nom")));
        // line 42
        echo "
                    <br>
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "prenom", array()), 'errors');
        echo "
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), "prenom", array()), 'widget', array("attr" => array("rows" => "1", "class" => "form-control", "placeholder" => "Prenom")));
        // line 49
        echo "
                    <br>
                    ";
        // line 52
        echo "                </div>
            </div>
            <div class=\"panel-footer full-transparent\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Envoyer\"/>
            </div>
            ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["utilisateurForm"]) ? $context["utilisateurForm"] : $this->getContext($context, "utilisateurForm")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_6956ca4aa7f279602bf34c9589da28b48bd172c36e8508103e92c0858caa5346->leave($__internal_6956ca4aa7f279602bf34c9589da28b48bd172c36e8508103e92c0858caa5346_prof);

        
        $__internal_431f7a91641dab6a4003a1fc3ceb8773e647cff1923887d029f66b31ec54911f->leave($__internal_431f7a91641dab6a4003a1fc3ceb8773e647cff1923887d029f66b31ec54911f_prof);

    }

    public function getTemplateName()
    {
        return "GediBaseBundle:Base:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 57,  133 => 52,  129 => 49,  127 => 45,  123 => 44,  119 => 42,  117 => 38,  113 => 37,  109 => 35,  107 => 31,  103 => 30,  99 => 28,  97 => 24,  93 => 23,  89 => 21,  87 => 17,  83 => 16,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block base_titre %}Demande d'inscription{% endblock %}

{% block base_contenu %}
    <div class=\"center-pad\">
        <div class=\"panel panel-default effect-transparent\">
            {{ form_start(utilisateurForm) }}
            <div class=\"panel-heading full-transparent\">
                <h2>Demande d'inscription</h2>
                <p>Remplissez le formulaire d'inscription, tous les champs sont obligatoires.
                    <br>Votre compte sera activé sous réserve de l'administrateur</p>
            </div>
            <div class=\"panel-body full-transparent\">
                <div class=\"form-group full-transparent\">
                    {{ form_errors(utilisateurForm.username) }}
                    {{ form_widget(utilisateurForm.username, { 'attr':  {
                        'rows': '1',
                        'class': 'form-control',
                        'placeholder': 'Email'
                    }}) }}
                    <br>
                    {{ form_errors(utilisateurForm.password.first) }}
                    {{ form_widget(utilisateurForm.password.first, { 'attr':  {
                        'rows': '1',
                        'class': 'form-control',
                        'placeholder': 'Mot de passe'
                    }}) }}
                    <br>
                    {{ form_errors(utilisateurForm.password.second) }}
                    {{ form_widget(utilisateurForm.password.second, { 'attr':  {
                        'rows': '1',
                        'class': 'form-control',
                        'placeholder': 'Confirmation de mot de passe'
                    }}) }}
                    <br>
                    {{ form_errors(utilisateurForm.nom) }}
                    {{ form_widget(utilisateurForm.nom, { 'attr':  {
                        'rows': '1',
                        'class': 'form-control',
                        'placeholder': 'Nom'
                    }}) }}
                    <br>
                    {{ form_errors(utilisateurForm.prenom) }}
                    {{ form_widget(utilisateurForm.prenom, { 'attr':  {
                        'rows': '1',
                        'class': 'form-control',
                        'placeholder': 'Prenom'
                    }}) }}
                    <br>
                    {#<input type=\"submit\" class=\"btn btn-success\" value=\"Envoyer\"/>#}
                </div>
            </div>
            <div class=\"panel-footer full-transparent\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Envoyer\"/>
            </div>
            {{ form_end(utilisateurForm) }}
        </div>
    </div>
{% endblock %}
", "GediBaseBundle:Base:register.html.twig", "/var/www/html/Gedi/Symfony/src/Gedi/BaseBundle/Resources/views/Base/register.html.twig");
    }
}
