<?php

/* SonataAdminBundle:CRUD:list_date.html.twig */
class __TwigTemplate_5bdc4f5491001b81eb5c6cd64ab6be250f42948f40cf2390bebe44eeaf731506 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ed846ac500034cf312f8199e16aed77a70363073cb365cc97b88e7ae694c8cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ed846ac500034cf312f8199e16aed77a70363073cb365cc97b88e7ae694c8cc->enter($__internal_9ed846ac500034cf312f8199e16aed77a70363073cb365cc97b88e7ae694c8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $__internal_e7cda7f8e6fcd323d99b4d31eb782918df345f52428405817f0cc3399fbcf2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cda7f8e6fcd323d99b4d31eb782918df345f52428405817f0cc3399fbcf2d3->enter($__internal_e7cda7f8e6fcd323d99b4d31eb782918df345f52428405817f0cc3399fbcf2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ed846ac500034cf312f8199e16aed77a70363073cb365cc97b88e7ae694c8cc->leave($__internal_9ed846ac500034cf312f8199e16aed77a70363073cb365cc97b88e7ae694c8cc_prof);

        
        $__internal_e7cda7f8e6fcd323d99b4d31eb782918df345f52428405817f0cc3399fbcf2d3->leave($__internal_e7cda7f8e6fcd323d99b4d31eb782918df345f52428405817f0cc3399fbcf2d3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c6592249c2fe6122e451d9f77611820e294a4dc8e58ab527bffd089bb0bcaaf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6592249c2fe6122e451d9f77611820e294a4dc8e58ab527bffd089bb0bcaaf2->enter($__internal_c6592249c2fe6122e451d9f77611820e294a4dc8e58ab527bffd089bb0bcaaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6f63b05ad8f6ea784129ec7f148204365f10db8aba1825ebe085657a00b62126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f63b05ad8f6ea784129ec7f148204365f10db8aba1825ebe085657a00b62126->enter($__internal_6f63b05ad8f6ea784129ec7f148204365f10db8aba1825ebe085657a00b62126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_6f63b05ad8f6ea784129ec7f148204365f10db8aba1825ebe085657a00b62126->leave($__internal_6f63b05ad8f6ea784129ec7f148204365f10db8aba1825ebe085657a00b62126_prof);

        
        $__internal_c6592249c2fe6122e451d9f77611820e294a4dc8e58ab527bffd089bb0bcaaf2->leave($__internal_c6592249c2fe6122e451d9f77611820e294a4dc8e58ab527bffd089bb0bcaaf2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_date.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_date.html.twig");
    }
}
