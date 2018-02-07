<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_c071faef74c8d6381de84bf0701931ea3272d75376157cd07129afc4bbb6f239 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_aced936279240be8f693ae2d4fc4f2228878134fa89bee22d87c2b0157bcc8b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aced936279240be8f693ae2d4fc4f2228878134fa89bee22d87c2b0157bcc8b0->enter($__internal_aced936279240be8f693ae2d4fc4f2228878134fa89bee22d87c2b0157bcc8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_87b2bc2dcae648b2b5c6eca770f02904dffbe169fb5311171173dbaea89e1846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b2bc2dcae648b2b5c6eca770f02904dffbe169fb5311171173dbaea89e1846->enter($__internal_87b2bc2dcae648b2b5c6eca770f02904dffbe169fb5311171173dbaea89e1846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aced936279240be8f693ae2d4fc4f2228878134fa89bee22d87c2b0157bcc8b0->leave($__internal_aced936279240be8f693ae2d4fc4f2228878134fa89bee22d87c2b0157bcc8b0_prof);

        
        $__internal_87b2bc2dcae648b2b5c6eca770f02904dffbe169fb5311171173dbaea89e1846->leave($__internal_87b2bc2dcae648b2b5c6eca770f02904dffbe169fb5311171173dbaea89e1846_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e6a4e8f885cbcf01b1092fa2e89c928a2a92afa1ea8819e20f645998076d73fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6a4e8f885cbcf01b1092fa2e89c928a2a92afa1ea8819e20f645998076d73fe->enter($__internal_e6a4e8f885cbcf01b1092fa2e89c928a2a92afa1ea8819e20f645998076d73fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ad303bb74a959fb7c124700b8a33b26722c24e8267e6c18e5fa7ca7a5c1e719b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad303bb74a959fb7c124700b8a33b26722c24e8267e6c18e5fa7ca7a5c1e719b->enter($__internal_ad303bb74a959fb7c124700b8a33b26722c24e8267e6c18e5fa7ca7a5c1e719b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ad303bb74a959fb7c124700b8a33b26722c24e8267e6c18e5fa7ca7a5c1e719b->leave($__internal_ad303bb74a959fb7c124700b8a33b26722c24e8267e6c18e5fa7ca7a5c1e719b_prof);

        
        $__internal_e6a4e8f885cbcf01b1092fa2e89c928a2a92afa1ea8819e20f645998076d73fe->leave($__internal_e6a4e8f885cbcf01b1092fa2e89c928a2a92afa1ea8819e20f645998076d73fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
