<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_1ab0443206cb3eaa97ab172957930b62ad6978073c81c3fc9ac5a26978f95a3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74103fbcbaf2537bf1c0ac89ba08ef1859a7168280b279c4bd12f2432f95b9ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74103fbcbaf2537bf1c0ac89ba08ef1859a7168280b279c4bd12f2432f95b9ea->enter($__internal_74103fbcbaf2537bf1c0ac89ba08ef1859a7168280b279c4bd12f2432f95b9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        $__internal_71d3157690bd6ebfc7328fc832dd9cc584dbed1671bf650c8438b97927a7e610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d3157690bd6ebfc7328fc832dd9cc584dbed1671bf650c8438b97927a7e610->enter($__internal_71d3157690bd6ebfc7328fc832dd9cc584dbed1671bf650c8438b97927a7e610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74103fbcbaf2537bf1c0ac89ba08ef1859a7168280b279c4bd12f2432f95b9ea->leave($__internal_74103fbcbaf2537bf1c0ac89ba08ef1859a7168280b279c4bd12f2432f95b9ea_prof);

        
        $__internal_71d3157690bd6ebfc7328fc832dd9cc584dbed1671bf650c8438b97927a7e610->leave($__internal_71d3157690bd6ebfc7328fc832dd9cc584dbed1671bf650c8438b97927a7e610_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_b070933ec2b4a77b948b2000658e4a7cec64fa2473ac9458411141ebf5e197db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b070933ec2b4a77b948b2000658e4a7cec64fa2473ac9458411141ebf5e197db->enter($__internal_b070933ec2b4a77b948b2000658e4a7cec64fa2473ac9458411141ebf5e197db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_3a4327804e8065315a757f6edee4004181d76e0d097766fcfc1126d7afb01caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a4327804e8065315a757f6edee4004181d76e0d097766fcfc1126d7afb01caa->enter($__internal_3a4327804e8065315a757f6edee4004181d76e0d097766fcfc1126d7afb01caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
        
        $__internal_3a4327804e8065315a757f6edee4004181d76e0d097766fcfc1126d7afb01caa->leave($__internal_3a4327804e8065315a757f6edee4004181d76e0d097766fcfc1126d7afb01caa_prof);

        
        $__internal_b070933ec2b4a77b948b2000658e4a7cec64fa2473ac9458411141ebf5e197db->leave($__internal_b070933ec2b4a77b948b2000658e4a7cec64fa2473ac9458411141ebf5e197db_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_3a1512833f91bb33a0181bba6b896b7b54cb8b3b6a1669d7f0f3fdc21aee082e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1512833f91bb33a0181bba6b896b7b54cb8b3b6a1669d7f0f3fdc21aee082e->enter($__internal_3a1512833f91bb33a0181bba6b896b7b54cb8b3b6a1669d7f0f3fdc21aee082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_176c3a4e213f307dbf37b86b5b55a7d1d27f64ad1556523153105e79b69f6adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_176c3a4e213f307dbf37b86b5b55a7d1d27f64ad1556523153105e79b69f6adf->enter($__internal_176c3a4e213f307dbf37b86b5b55a7d1d27f64ad1556523153105e79b69f6adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:display_boolean.html.twig", "SonataAdminBundle:CRUD:list_boolean.html.twig", 27)->display($context);
        
        $__internal_176c3a4e213f307dbf37b86b5b55a7d1d27f64ad1556523153105e79b69f6adf->leave($__internal_176c3a4e213f307dbf37b86b5b55a7d1d27f64ad1556523153105e79b69f6adf_prof);

        
        $__internal_3a1512833f91bb33a0181bba6b896b7b54cb8b3b6a1669d7f0f3fdc21aee082e->leave($__internal_3a1512833f91bb33a0181bba6b896b7b54cb8b3b6a1669d7f0f3fdc21aee082e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  82 => 26,  72 => 23,  65 => 21,  60 => 20,  57 => 19,  48 => 18,  38 => 12,  35 => 17,  33 => 15,  31 => 14,  19 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.hasAccess('edit', object) %}
{% set xEditableType = field_description.type|sonata_xeditable_type %}

{% if isEditable and xEditableType %}
    {% block field_span_attributes %}
        {% spaceless %}
            {{ parent() }}
            data-source=\"[{value: 0, text: '{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}'},{value: 1, text: '{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}'}]\"
        {% endspaceless %}
    {% endblock %}
{% endif %}

{% block field %}
    {%- include 'SonataAdminBundle:CRUD:display_boolean.html.twig' -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_boolean.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_boolean.html.twig");
    }
}
