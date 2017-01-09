<?php

/* GediAdminBundle:Admin:projects_admin.html.twig */
class __TwigTemplate_5d86938f3598de987a8ec7f61f87c18eb6f85aa385a33594cba8b045aa19f318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GediAdminBundle::layout_admin.html.twig", "GediAdminBundle:Admin:projects_admin.html.twig", 1);
        $this->blocks = array(
            'titre_admin' => array($this, 'block_titre_admin'),
            'titre_admin_2' => array($this, 'block_titre_admin_2'),
            'tooltip_admin' => array($this, 'block_tooltip_admin'),
            'boutons_admin' => array($this, 'block_boutons_admin'),
            'tableau_admin' => array($this, 'block_tableau_admin'),
            'breadcrumb_admin' => array($this, 'block_breadcrumb_admin'),
            'popup_admin_del_titre' => array($this, 'block_popup_admin_del_titre'),
            'popup_admin_del_contenu' => array($this, 'block_popup_admin_del_contenu'),
            'popup_admin_add_titre' => array($this, 'block_popup_admin_add_titre'),
            'popup_admin_add_contenu' => array($this, 'block_popup_admin_add_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GediAdminBundle::layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d8e0f30dcdcd2083ccd2903b1f3ded7fbc88d36bbf4f08a4e65129a4142ec62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8e0f30dcdcd2083ccd2903b1f3ded7fbc88d36bbf4f08a4e65129a4142ec62->enter($__internal_7d8e0f30dcdcd2083ccd2903b1f3ded7fbc88d36bbf4f08a4e65129a4142ec62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediAdminBundle:Admin:projects_admin.html.twig"));

        $__internal_00e598416f4fb19d084b08ce92a4ccdf270f7f4ef9b1b2e67319e027e63b1228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e598416f4fb19d084b08ce92a4ccdf270f7f4ef9b1b2e67319e027e63b1228->enter($__internal_00e598416f4fb19d084b08ce92a4ccdf270f7f4ef9b1b2e67319e027e63b1228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GediAdminBundle:Admin:projects_admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d8e0f30dcdcd2083ccd2903b1f3ded7fbc88d36bbf4f08a4e65129a4142ec62->leave($__internal_7d8e0f30dcdcd2083ccd2903b1f3ded7fbc88d36bbf4f08a4e65129a4142ec62_prof);

        
        $__internal_00e598416f4fb19d084b08ce92a4ccdf270f7f4ef9b1b2e67319e027e63b1228->leave($__internal_00e598416f4fb19d084b08ce92a4ccdf270f7f4ef9b1b2e67319e027e63b1228_prof);

    }

    // line 3
    public function block_titre_admin($context, array $blocks = array())
    {
        $__internal_6e9c1a8403e1fba6ca8a7aedb1fa6c89ca5240b1ff0f371d28b5fb781ac1330f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9c1a8403e1fba6ca8a7aedb1fa6c89ca5240b1ff0f371d28b5fb781ac1330f->enter($__internal_6e9c1a8403e1fba6ca8a7aedb1fa6c89ca5240b1ff0f371d28b5fb781ac1330f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin"));

        $__internal_3edc7e8f53d750c5db0176a8a95d5895904d4849079944cc4704b8e7b7c25553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3edc7e8f53d750c5db0176a8a95d5895904d4849079944cc4704b8e7b7c25553->enter($__internal_3edc7e8f53d750c5db0176a8a95d5895904d4849079944cc4704b8e7b7c25553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin"));

        echo "Projets";
        
        $__internal_3edc7e8f53d750c5db0176a8a95d5895904d4849079944cc4704b8e7b7c25553->leave($__internal_3edc7e8f53d750c5db0176a8a95d5895904d4849079944cc4704b8e7b7c25553_prof);

        
        $__internal_6e9c1a8403e1fba6ca8a7aedb1fa6c89ca5240b1ff0f371d28b5fb781ac1330f->leave($__internal_6e9c1a8403e1fba6ca8a7aedb1fa6c89ca5240b1ff0f371d28b5fb781ac1330f_prof);

    }

    // line 4
    public function block_titre_admin_2($context, array $blocks = array())
    {
        $__internal_ed92e573186e496930b338abc0bdb348b838986cf59c587fefff486ef7e05e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed92e573186e496930b338abc0bdb348b838986cf59c587fefff486ef7e05e2e->enter($__internal_ed92e573186e496930b338abc0bdb348b838986cf59c587fefff486ef7e05e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin_2"));

        $__internal_fca1a3b262ebeab380005925764a677f51fefd64c0871d23901f5759d5520865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca1a3b262ebeab380005925764a677f51fefd64c0871d23901f5759d5520865->enter($__internal_fca1a3b262ebeab380005925764a677f51fefd64c0871d23901f5759d5520865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_admin_2"));

        echo "projets";
        
        $__internal_fca1a3b262ebeab380005925764a677f51fefd64c0871d23901f5759d5520865->leave($__internal_fca1a3b262ebeab380005925764a677f51fefd64c0871d23901f5759d5520865_prof);

        
        $__internal_ed92e573186e496930b338abc0bdb348b838986cf59c587fefff486ef7e05e2e->leave($__internal_ed92e573186e496930b338abc0bdb348b838986cf59c587fefff486ef7e05e2e_prof);

    }

    // line 5
    public function block_tooltip_admin($context, array $blocks = array())
    {
        $__internal_190669f4b5ff9560c6363073367ecc41c2484b97f9ee01db95e98b3af703d332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190669f4b5ff9560c6363073367ecc41c2484b97f9ee01db95e98b3af703d332->enter($__internal_190669f4b5ff9560c6363073367ecc41c2484b97f9ee01db95e98b3af703d332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tooltip_admin"));

        $__internal_7f6e916fd40680a1f98488d2eaaa84fe1cf42631eca2b8114734a09febad483c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6e916fd40680a1f98488d2eaaa84fe1cf42631eca2b8114734a09febad483c->enter($__internal_7f6e916fd40680a1f98488d2eaaa84fe1cf42631eca2b8114734a09febad483c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tooltip_admin"));

        echo "des projets";
        
        $__internal_7f6e916fd40680a1f98488d2eaaa84fe1cf42631eca2b8114734a09febad483c->leave($__internal_7f6e916fd40680a1f98488d2eaaa84fe1cf42631eca2b8114734a09febad483c_prof);

        
        $__internal_190669f4b5ff9560c6363073367ecc41c2484b97f9ee01db95e98b3af703d332->leave($__internal_190669f4b5ff9560c6363073367ecc41c2484b97f9ee01db95e98b3af703d332_prof);

    }

    // line 7
    public function block_boutons_admin($context, array $blocks = array())
    {
        $__internal_8ea2f5560f855d507c7e64e0a22032c470870a75fd9cc85b50a79880e13e2525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea2f5560f855d507c7e64e0a22032c470870a75fd9cc85b50a79880e13e2525->enter($__internal_8ea2f5560f855d507c7e64e0a22032c470870a75fd9cc85b50a79880e13e2525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boutons_admin"));

        $__internal_33ea20f67aad0bbacf22e6c71e5fe8ccbbada11d1d9ba0f656794ad7ab830f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ea20f67aad0bbacf22e6c71e5fe8ccbbada11d1d9ba0f656794ad7ab830f59->enter($__internal_33ea20f67aad0bbacf22e6c71e5fe8ccbbada11d1d9ba0f656794ad7ab830f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boutons_admin"));

        // line 8
        echo "    <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#popup-add\">Créer</button>
    <button type=\"button\" class=\"btn btn-danger boutonDesactive\" data-toggle=\"modal\" data-target=\"#popup-delete\"
            onclick=\"majPopupDelete()\">Supprimer <span class=\"badge spanNbSel\"></span>
    </button>
";
        
        $__internal_33ea20f67aad0bbacf22e6c71e5fe8ccbbada11d1d9ba0f656794ad7ab830f59->leave($__internal_33ea20f67aad0bbacf22e6c71e5fe8ccbbada11d1d9ba0f656794ad7ab830f59_prof);

        
        $__internal_8ea2f5560f855d507c7e64e0a22032c470870a75fd9cc85b50a79880e13e2525->leave($__internal_8ea2f5560f855d507c7e64e0a22032c470870a75fd9cc85b50a79880e13e2525_prof);

    }

    // line 14
    public function block_tableau_admin($context, array $blocks = array())
    {
        $__internal_c7439646767f756003c37ab1f409d54e4231fb7c3d1901fd1a33958913788098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7439646767f756003c37ab1f409d54e4231fb7c3d1901fd1a33958913788098->enter($__internal_c7439646767f756003c37ab1f409d54e4231fb7c3d1901fd1a33958913788098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableau_admin"));

        $__internal_6b8735168c93183998fc5d9a700dc950f890eb80f5b339313cc485a52e64de14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8735168c93183998fc5d9a700dc950f890eb80f5b339313cc485a52e64de14->enter($__internal_6b8735168c93183998fc5d9a700dc950f890eb80f5b339313cc485a52e64de14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableau_admin"));

        // line 15
        echo "    <thead>
    <tr>
        <th data-checkbox=\"true\"></th>
        <th>Id</th>
        <th data-sortable=\"true\">Nom du projet</th>
        <th data-sortable=\"true\">Date de création</th>
        <th data-sortable=\"true\">Date de modification</th>
        <th data-sortable=\"true\">Propriétaire</th>
        <th data-align=\"center\">Actions</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab_objets"]) ? $context["tab_objets"] : $this->getContext($context, "tab_objets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 28
            echo "        <article>
            <tr>
                <td></td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "idProjet", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateCreation", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "dateModification", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "idUtilisateurFkProjet", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["projet"], "idUtilisateurFkProjet", array()), "prenom", array()), "html", null, true);
            echo "</td>
                <td data-align=\"center\">
    <span data-toggle=\"tooltip\" data-placement=\"bottom\"
          title=\"Voir les documents\">
    <button type=\"button\"
            class=\"btn btn-default btn-primary round-button\"><span
                class=\"glyphicon glyphicon-file\"></span>
    </button>
    </span>
                    <span data-toggle=\"tooltip\" data-placement=\"bottom\"
                          title=\"Editer le projet\">
    <button type=\"button\"
            class=\"btn btn-default btn-warning round-button\" data-toggle=\"modal\" data-target=\"#popup-add\"><span
                class=\"glyphicon glyphicon-pencil\"></span>
    </button>
    </span>
                </td>
            </tr>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "    </tbody>
";
        
        $__internal_6b8735168c93183998fc5d9a700dc950f890eb80f5b339313cc485a52e64de14->leave($__internal_6b8735168c93183998fc5d9a700dc950f890eb80f5b339313cc485a52e64de14_prof);

        
        $__internal_c7439646767f756003c37ab1f409d54e4231fb7c3d1901fd1a33958913788098->leave($__internal_c7439646767f756003c37ab1f409d54e4231fb7c3d1901fd1a33958913788098_prof);

    }

    // line 58
    public function block_breadcrumb_admin($context, array $blocks = array())
    {
        $__internal_3debeca91772216a6fdbd27211dab6e91b162a73214b18f56a637ad259e30a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3debeca91772216a6fdbd27211dab6e91b162a73214b18f56a637ad259e30a50->enter($__internal_3debeca91772216a6fdbd27211dab6e91b162a73214b18f56a637ad259e30a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_admin"));

        $__internal_404ed83f1553a9205b5bcf69307f81341f4192ac9658b91b3cb42834ba6b3970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404ed83f1553a9205b5bcf69307f81341f4192ac9658b91b3cb42834ba6b3970->enter($__internal_404ed83f1553a9205b5bcf69307f81341f4192ac9658b91b3cb42834ba6b3970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb_admin"));

        echo "Projets";
        
        $__internal_404ed83f1553a9205b5bcf69307f81341f4192ac9658b91b3cb42834ba6b3970->leave($__internal_404ed83f1553a9205b5bcf69307f81341f4192ac9658b91b3cb42834ba6b3970_prof);

        
        $__internal_3debeca91772216a6fdbd27211dab6e91b162a73214b18f56a637ad259e30a50->leave($__internal_3debeca91772216a6fdbd27211dab6e91b162a73214b18f56a637ad259e30a50_prof);

    }

    // line 59
    public function block_popup_admin_del_titre($context, array $blocks = array())
    {
        $__internal_6ee1fd41507f263193918eeae3f6277598fd97d71112052d508b19aa40363494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee1fd41507f263193918eeae3f6277598fd97d71112052d508b19aa40363494->enter($__internal_6ee1fd41507f263193918eeae3f6277598fd97d71112052d508b19aa40363494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_titre"));

        $__internal_d091e0d433d09d8b0d87b7818c076added4054f0c48c8f69d46c8b9fb91ccc7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d091e0d433d09d8b0d87b7818c076added4054f0c48c8f69d46c8b9fb91ccc7b->enter($__internal_d091e0d433d09d8b0d87b7818c076added4054f0c48c8f69d46c8b9fb91ccc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_titre"));

        echo "de projets";
        
        $__internal_d091e0d433d09d8b0d87b7818c076added4054f0c48c8f69d46c8b9fb91ccc7b->leave($__internal_d091e0d433d09d8b0d87b7818c076added4054f0c48c8f69d46c8b9fb91ccc7b_prof);

        
        $__internal_6ee1fd41507f263193918eeae3f6277598fd97d71112052d508b19aa40363494->leave($__internal_6ee1fd41507f263193918eeae3f6277598fd97d71112052d508b19aa40363494_prof);

    }

    // line 60
    public function block_popup_admin_del_contenu($context, array $blocks = array())
    {
        $__internal_22e4e323677b8c8bb437568ed4e9dd4bbbd4b7f03eb19b8a6e356bb845b2e38f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e4e323677b8c8bb437568ed4e9dd4bbbd4b7f03eb19b8a6e356bb845b2e38f->enter($__internal_22e4e323677b8c8bb437568ed4e9dd4bbbd4b7f03eb19b8a6e356bb845b2e38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_contenu"));

        $__internal_72b3775862f4f955e35257930e3ceededb467d3a4496196b7781a0d700533c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b3775862f4f955e35257930e3ceededb467d3a4496196b7781a0d700533c7e->enter($__internal_72b3775862f4f955e35257930e3ceededb467d3a4496196b7781a0d700533c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_del_contenu"));

        echo "projets";
        
        $__internal_72b3775862f4f955e35257930e3ceededb467d3a4496196b7781a0d700533c7e->leave($__internal_72b3775862f4f955e35257930e3ceededb467d3a4496196b7781a0d700533c7e_prof);

        
        $__internal_22e4e323677b8c8bb437568ed4e9dd4bbbd4b7f03eb19b8a6e356bb845b2e38f->leave($__internal_22e4e323677b8c8bb437568ed4e9dd4bbbd4b7f03eb19b8a6e356bb845b2e38f_prof);

    }

    // line 61
    public function block_popup_admin_add_titre($context, array $blocks = array())
    {
        $__internal_a4814803fe01be034d657029348ece846ee3d17d3ca270c0ec0f4cf87009b2f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4814803fe01be034d657029348ece846ee3d17d3ca270c0ec0f4cf87009b2f8->enter($__internal_a4814803fe01be034d657029348ece846ee3d17d3ca270c0ec0f4cf87009b2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_titre"));

        $__internal_cd39ab8297a51fe2a6e36e9f9593564c6159c0357d355987608a02460bd2a440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd39ab8297a51fe2a6e36e9f9593564c6159c0357d355987608a02460bd2a440->enter($__internal_cd39ab8297a51fe2a6e36e9f9593564c6159c0357d355987608a02460bd2a440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_titre"));

        echo "projet";
        
        $__internal_cd39ab8297a51fe2a6e36e9f9593564c6159c0357d355987608a02460bd2a440->leave($__internal_cd39ab8297a51fe2a6e36e9f9593564c6159c0357d355987608a02460bd2a440_prof);

        
        $__internal_a4814803fe01be034d657029348ece846ee3d17d3ca270c0ec0f4cf87009b2f8->leave($__internal_a4814803fe01be034d657029348ece846ee3d17d3ca270c0ec0f4cf87009b2f8_prof);

    }

    // line 63
    public function block_popup_admin_add_contenu($context, array $blocks = array())
    {
        $__internal_363e0f5e334e443a332048511a015edf553d81731007d21c4b140da132713da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363e0f5e334e443a332048511a015edf553d81731007d21c4b140da132713da7->enter($__internal_363e0f5e334e443a332048511a015edf553d81731007d21c4b140da132713da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_contenu"));

        $__internal_6eca83a9c3568c0b5a476a3af6c6ba09444dcbdf49d3f5e7a72ce9155085464c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eca83a9c3568c0b5a476a3af6c6ba09444dcbdf49d3f5e7a72ce9155085464c->enter($__internal_6eca83a9c3568c0b5a476a3af6c6ba09444dcbdf49d3f5e7a72ce9155085464c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "popup_admin_add_contenu"));

        // line 64
        echo "    ";
        if ((isset($context["projetForm"]) ? $context["projetForm"] : $this->getContext($context, "projetForm"))) {
            // line 65
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["projetForm"]) ? $context["projetForm"] : $this->getContext($context, "projetForm")), 'form_start');
            echo "
        <div class=\"form-group\">
            <br>
            ";
            // line 68
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["projetForm"]) ? $context["projetForm"] : $this->getContext($context, "projetForm")), "nom", array()), 'errors');
            echo "
            ";
            // line 69
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["projetForm"]) ? $context["projetForm"] : $this->getContext($context, "projetForm")), "nom", array()), 'widget', array("attr" => array("rows" => "1", "class" => "form-control", "placeholder" => "Nom du projet")));
            // line 73
            echo "
            <br>
        </div>
        <div class=\"modal-footer\">
            <div class=\"form-group\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Créer\"/>
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
        ";
            // line 82
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["projetForm"]) ? $context["projetForm"] : $this->getContext($context, "projetForm")), 'form_end');
            echo "
    ";
        } else {
            // line 84
            echo "        <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo " \">Connectez-vous</a> pour créer un projet.
    ";
        }
        
        $__internal_6eca83a9c3568c0b5a476a3af6c6ba09444dcbdf49d3f5e7a72ce9155085464c->leave($__internal_6eca83a9c3568c0b5a476a3af6c6ba09444dcbdf49d3f5e7a72ce9155085464c_prof);

        
        $__internal_363e0f5e334e443a332048511a015edf553d81731007d21c4b140da132713da7->leave($__internal_363e0f5e334e443a332048511a015edf553d81731007d21c4b140da132713da7_prof);

    }

    public function getTemplateName()
    {
        return "GediAdminBundle:Admin:projects_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 84,  321 => 82,  310 => 73,  308 => 69,  304 => 68,  297 => 65,  294 => 64,  285 => 63,  267 => 61,  249 => 60,  231 => 59,  213 => 58,  202 => 55,  174 => 35,  170 => 34,  166 => 33,  162 => 32,  158 => 31,  153 => 28,  149 => 27,  135 => 15,  126 => 14,  112 => 8,  103 => 7,  85 => 5,  67 => 4,  49 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"GediAdminBundle::layout_admin.html.twig\" %}

{% block titre_admin %}Projets{% endblock %}
{% block titre_admin_2 %}projets{% endblock %}
{% block tooltip_admin %}des projets{% endblock %}

{% block boutons_admin %}
    <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#popup-add\">Créer</button>
    <button type=\"button\" class=\"btn btn-danger boutonDesactive\" data-toggle=\"modal\" data-target=\"#popup-delete\"
            onclick=\"majPopupDelete()\">Supprimer <span class=\"badge spanNbSel\"></span>
    </button>
{% endblock %}

{% block tableau_admin %}
    <thead>
    <tr>
        <th data-checkbox=\"true\"></th>
        <th>Id</th>
        <th data-sortable=\"true\">Nom du projet</th>
        <th data-sortable=\"true\">Date de création</th>
        <th data-sortable=\"true\">Date de modification</th>
        <th data-sortable=\"true\">Propriétaire</th>
        <th data-align=\"center\">Actions</th>
    </tr>
    </thead>
    <tbody>
    {% for projet in tab_objets %}
        <article>
            <tr>
                <td></td>
                <td>{{ projet.idProjet }}</td>
                <td>{{ projet.nom }}</td>
                <td>{{ projet.dateCreation|date('Y-m-d H:i:s') }}</td>
                <td>{{ projet.dateModification|date('Y-m-d H:i:s') }}</td>
                <td>{{ projet.idUtilisateurFkProjet.nom }} {{ projet.idUtilisateurFkProjet.prenom }}</td>
                <td data-align=\"center\">
    <span data-toggle=\"tooltip\" data-placement=\"bottom\"
          title=\"Voir les documents\">
    <button type=\"button\"
            class=\"btn btn-default btn-primary round-button\"><span
                class=\"glyphicon glyphicon-file\"></span>
    </button>
    </span>
                    <span data-toggle=\"tooltip\" data-placement=\"bottom\"
                          title=\"Editer le projet\">
    <button type=\"button\"
            class=\"btn btn-default btn-warning round-button\" data-toggle=\"modal\" data-target=\"#popup-add\"><span
                class=\"glyphicon glyphicon-pencil\"></span>
    </button>
    </span>
                </td>
            </tr>
        </article>
    {% endfor %}
    </tbody>
{% endblock %}

{% block breadcrumb_admin %}Projets{% endblock %}
{% block popup_admin_del_titre %}de projets{% endblock %}
{% block popup_admin_del_contenu %}projets{% endblock %}
{% block popup_admin_add_titre %}projet{% endblock %}

{% block popup_admin_add_contenu %}
    {% if projetForm %}
        {{ form_start(projetForm) }}
        <div class=\"form-group\">
            <br>
            {{ form_errors(projetForm.nom) }}
            {{ form_widget(projetForm.nom, { 'attr':  {
                'rows': '1',
                'class': 'form-control',
                'placeholder': 'Nom du projet'
            }}) }}
            <br>
        </div>
        <div class=\"modal-footer\">
            <div class=\"form-group\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Créer\"/>
                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>
            </div>
        </div>
        {{ form_end(projetForm) }}
    {% else %}
        <a href=\"{{ path('login') }} \">Connectez-vous</a> pour créer un projet.
    {% endif %}
{% endblock %}
", "GediAdminBundle:Admin:projects_admin.html.twig", "/var/www/html/Gedi/Symfony/src/Gedi/AdminBundle/Resources/views/Admin/projects_admin.html.twig");
    }
}
