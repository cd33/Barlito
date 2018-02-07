<?php

/* SonataAdminBundle:CRUD:show_array.html.twig */
class __TwigTemplate_142627068a60a9d7bad4da320860b97ef8faeacb0f0071c2f787a367fcaa282e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 13
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 13);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad90b76189a0ad79b5fdeff3854b2896bebf7ed40e1ccf562923f013d8ff8796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad90b76189a0ad79b5fdeff3854b2896bebf7ed40e1ccf562923f013d8ff8796->enter($__internal_ad90b76189a0ad79b5fdeff3854b2896bebf7ed40e1ccf562923f013d8ff8796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        $__internal_23c9640d5032848bf678e4b0062d3a2146bc284d504567d7cf11e2a544717eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c9640d5032848bf678e4b0062d3a2146bc284d504567d7cf11e2a544717eac->enter($__internal_23c9640d5032848bf678e4b0062d3a2146bc284d504567d7cf11e2a544717eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_array.html.twig"));

        // line 11
        $context["show"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "SonataAdminBundle:CRUD:show_array.html.twig", 11);
        // line 13
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad90b76189a0ad79b5fdeff3854b2896bebf7ed40e1ccf562923f013d8ff8796->leave($__internal_ad90b76189a0ad79b5fdeff3854b2896bebf7ed40e1ccf562923f013d8ff8796_prof);

        
        $__internal_23c9640d5032848bf678e4b0062d3a2146bc284d504567d7cf11e2a544717eac->leave($__internal_23c9640d5032848bf678e4b0062d3a2146bc284d504567d7cf11e2a544717eac_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_0751a7ff319cc04117be2e97ecb13bf8ec3426837e9a869fa7c4b42d26eb03f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0751a7ff319cc04117be2e97ecb13bf8ec3426837e9a869fa7c4b42d26eb03f4->enter($__internal_0751a7ff319cc04117be2e97ecb13bf8ec3426837e9a869fa7c4b42d26eb03f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_7022ca342822f2f90c9f2615eecbb86234318d50f2199401d83ef56dc62c6511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7022ca342822f2f90c9f2615eecbb86234318d50f2199401d83ef56dc62c6511->enter($__internal_7022ca342822f2f90c9f2615eecbb86234318d50f2199401d83ef56dc62c6511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["show"]->getrender_array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array()), false)) : (false)));
        echo "
";
        
        $__internal_7022ca342822f2f90c9f2615eecbb86234318d50f2199401d83ef56dc62c6511->leave($__internal_7022ca342822f2f90c9f2615eecbb86234318d50f2199401d83ef56dc62c6511_prof);

        
        $__internal_0751a7ff319cc04117be2e97ecb13bf8ec3426837e9a869fa7c4b42d26eb03f4->leave($__internal_0751a7ff319cc04117be2e97ecb13bf8ec3426837e9a869fa7c4b42d26eb03f4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  43 => 15,  33 => 13,  31 => 11,  11 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% import 'SonataAdminBundle:CRUD:base_array_macro.html.twig' as show %}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {{ show.render_array(value, field_description.options.inline|default(false)) }}
{% endblock %}
", "SonataAdminBundle:CRUD:show_array.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_array.html.twig");
    }
}
