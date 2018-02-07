<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_ca532409125514fa3c83a85015de0c09a9b79cee9576cb75dd132e023303c24a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_date.html.twig", 12);
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
        $__internal_6c8ef52e5ddd0b4f5c821097544cf54ae7e298c5ae12f4c2a472e9ae80ddaf46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8ef52e5ddd0b4f5c821097544cf54ae7e298c5ae12f4c2a472e9ae80ddaf46->enter($__internal_6c8ef52e5ddd0b4f5c821097544cf54ae7e298c5ae12f4c2a472e9ae80ddaf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $__internal_088e9ae64378f27ad751c64b0bec4ce2a589732e4b17cf61ade3c72ca780bb2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088e9ae64378f27ad751c64b0bec4ce2a589732e4b17cf61ade3c72ca780bb2c->enter($__internal_088e9ae64378f27ad751c64b0bec4ce2a589732e4b17cf61ade3c72ca780bb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c8ef52e5ddd0b4f5c821097544cf54ae7e298c5ae12f4c2a472e9ae80ddaf46->leave($__internal_6c8ef52e5ddd0b4f5c821097544cf54ae7e298c5ae12f4c2a472e9ae80ddaf46_prof);

        
        $__internal_088e9ae64378f27ad751c64b0bec4ce2a589732e4b17cf61ade3c72ca780bb2c->leave($__internal_088e9ae64378f27ad751c64b0bec4ce2a589732e4b17cf61ade3c72ca780bb2c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f54e4387fc0b91fbd41082d92871fe4820ed70c3cd41861b7532188280796751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54e4387fc0b91fbd41082d92871fe4820ed70c3cd41861b7532188280796751->enter($__internal_f54e4387fc0b91fbd41082d92871fe4820ed70c3cd41861b7532188280796751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6ef49217a6717529663c9bf2fb8ae133a3e3a978268bc13540b6ec3b54656aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef49217a6717529663c9bf2fb8ae133a3e3a978268bc13540b6ec3b54656aff->enter($__internal_6ef49217a6717529663c9bf2fb8ae133a3e3a978268bc13540b6ec3b54656aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_6ef49217a6717529663c9bf2fb8ae133a3e3a978268bc13540b6ec3b54656aff->leave($__internal_6ef49217a6717529663c9bf2fb8ae133a3e3a978268bc13540b6ec3b54656aff_prof);

        
        $__internal_f54e4387fc0b91fbd41082d92871fe4820ed70c3cd41861b7532188280796751->leave($__internal_f54e4387fc0b91fbd41082d92871fe4820ed70c3cd41861b7532188280796751_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  55 => 18,  53 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_date.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_date.html.twig");
    }
}
