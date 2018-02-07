<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_cd9003596d274ca6809b781fb710ed395249381877af41c6a6793d5393868de0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cae277bfa5d807583cbb3d5351227a3eb4d4fbf17344cd2d7059d83cc59d542a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae277bfa5d807583cbb3d5351227a3eb4d4fbf17344cd2d7059d83cc59d542a->enter($__internal_cae277bfa5d807583cbb3d5351227a3eb4d4fbf17344cd2d7059d83cc59d542a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_d2852faca853e75d00a098eafd0bc9b7c97add6b0825018f8e77303adff4a714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2852faca853e75d00a098eafd0bc9b7c97add6b0825018f8e77303adff4a714->enter($__internal_d2852faca853e75d00a098eafd0bc9b7c97add6b0825018f8e77303adff4a714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cae277bfa5d807583cbb3d5351227a3eb4d4fbf17344cd2d7059d83cc59d542a->leave($__internal_cae277bfa5d807583cbb3d5351227a3eb4d4fbf17344cd2d7059d83cc59d542a_prof);

        
        $__internal_d2852faca853e75d00a098eafd0bc9b7c97add6b0825018f8e77303adff4a714->leave($__internal_d2852faca853e75d00a098eafd0bc9b7c97add6b0825018f8e77303adff4a714_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c79afc311118fde5405ebd1163d92f070ef006ec5f36b030d2156fba6ad26017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c79afc311118fde5405ebd1163d92f070ef006ec5f36b030d2156fba6ad26017->enter($__internal_c79afc311118fde5405ebd1163d92f070ef006ec5f36b030d2156fba6ad26017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5c51e8bb6c1816174b81394cd6244f66c00a3f6fbee5a585c6bf4cb547c52956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c51e8bb6c1816174b81394cd6244f66c00a3f6fbee5a585c6bf4cb547c52956->enter($__internal_5c51e8bb6c1816174b81394cd6244f66c00a3f6fbee5a585c6bf4cb547c52956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5c51e8bb6c1816174b81394cd6244f66c00a3f6fbee5a585c6bf4cb547c52956->leave($__internal_5c51e8bb6c1816174b81394cd6244f66c00a3f6fbee5a585c6bf4cb547c52956_prof);

        
        $__internal_c79afc311118fde5405ebd1163d92f070ef006ec5f36b030d2156fba6ad26017->leave($__internal_c79afc311118fde5405ebd1163d92f070ef006ec5f36b030d2156fba6ad26017_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
