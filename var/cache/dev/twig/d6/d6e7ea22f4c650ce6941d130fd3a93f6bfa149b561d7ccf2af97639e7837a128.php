<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8a504744469fad494491444111256066e3a08f8fc28e3a0030abc2ff8a32fd36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_eb5999be7bb787601f410ee8b1891bb897b45ea078844f0500635edb6542b507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5999be7bb787601f410ee8b1891bb897b45ea078844f0500635edb6542b507->enter($__internal_eb5999be7bb787601f410ee8b1891bb897b45ea078844f0500635edb6542b507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_3b914156a7618de965ad6ddf9054db8c19249175089f1c5236f918e3314b31c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b914156a7618de965ad6ddf9054db8c19249175089f1c5236f918e3314b31c3->enter($__internal_3b914156a7618de965ad6ddf9054db8c19249175089f1c5236f918e3314b31c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb5999be7bb787601f410ee8b1891bb897b45ea078844f0500635edb6542b507->leave($__internal_eb5999be7bb787601f410ee8b1891bb897b45ea078844f0500635edb6542b507_prof);

        
        $__internal_3b914156a7618de965ad6ddf9054db8c19249175089f1c5236f918e3314b31c3->leave($__internal_3b914156a7618de965ad6ddf9054db8c19249175089f1c5236f918e3314b31c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b1664a606633e859c49c90a1a3bfdbc3c363e5eb2a71dbbdf02486484af7b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1664a606633e859c49c90a1a3bfdbc3c363e5eb2a71dbbdf02486484af7b25->enter($__internal_2b1664a606633e859c49c90a1a3bfdbc3c363e5eb2a71dbbdf02486484af7b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dcab0de9bc6042a73e3e7435a76f733b0cb8ae2790771c1b059b25b37f444d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcab0de9bc6042a73e3e7435a76f733b0cb8ae2790771c1b059b25b37f444d00->enter($__internal_dcab0de9bc6042a73e3e7435a76f733b0cb8ae2790771c1b059b25b37f444d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_dcab0de9bc6042a73e3e7435a76f733b0cb8ae2790771c1b059b25b37f444d00->leave($__internal_dcab0de9bc6042a73e3e7435a76f733b0cb8ae2790771c1b059b25b37f444d00_prof);

        
        $__internal_2b1664a606633e859c49c90a1a3bfdbc3c363e5eb2a71dbbdf02486484af7b25->leave($__internal_2b1664a606633e859c49c90a1a3bfdbc3c363e5eb2a71dbbdf02486484af7b25_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
