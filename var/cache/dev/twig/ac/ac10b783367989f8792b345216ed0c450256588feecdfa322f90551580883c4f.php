<?php

/* SonataAdminBundle:CRUD:show_datetime.html.twig */
class __TwigTemplate_506da48481d6e1c994a600f695d62423118d313d10a4fc9be48bfb405eed4945 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_datetime.html.twig", 12);
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
        $__internal_0c220d74cf8e7caccdb9081edb80930d2bef40473ce8d2ddfd6593096d75fc50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c220d74cf8e7caccdb9081edb80930d2bef40473ce8d2ddfd6593096d75fc50->enter($__internal_0c220d74cf8e7caccdb9081edb80930d2bef40473ce8d2ddfd6593096d75fc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $__internal_eb30ea0f82dbc150ca91a0ef1d4b70c0d025ba04d862e223566ca747974cb8e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb30ea0f82dbc150ca91a0ef1d4b70c0d025ba04d862e223566ca747974cb8e4->enter($__internal_eb30ea0f82dbc150ca91a0ef1d4b70c0d025ba04d862e223566ca747974cb8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c220d74cf8e7caccdb9081edb80930d2bef40473ce8d2ddfd6593096d75fc50->leave($__internal_0c220d74cf8e7caccdb9081edb80930d2bef40473ce8d2ddfd6593096d75fc50_prof);

        
        $__internal_eb30ea0f82dbc150ca91a0ef1d4b70c0d025ba04d862e223566ca747974cb8e4->leave($__internal_eb30ea0f82dbc150ca91a0ef1d4b70c0d025ba04d862e223566ca747974cb8e4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f8e77ca3545cfb0fa402dc6e6f1ecd6fdb1f2917ecbb1c2e540b97f15d074df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e77ca3545cfb0fa402dc6e6f1ecd6fdb1f2917ecbb1c2e540b97f15d074df2->enter($__internal_f8e77ca3545cfb0fa402dc6e6f1ecd6fdb1f2917ecbb1c2e540b97f15d074df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_68e0ac4ed6b67259c035b074d50b563e7c429483da868d89350f76bafde2d42d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e0ac4ed6b67259c035b074d50b563e7c429483da868d89350f76bafde2d42d->enter($__internal_68e0ac4ed6b67259c035b074d50b563e7c429483da868d89350f76bafde2d42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_68e0ac4ed6b67259c035b074d50b563e7c429483da868d89350f76bafde2d42d->leave($__internal_68e0ac4ed6b67259c035b074d50b563e7c429483da868d89350f76bafde2d42d_prof);

        
        $__internal_f8e77ca3545cfb0fa402dc6e6f1ecd6fdb1f2917ecbb1c2e540b97f15d074df2->leave($__internal_f8e77ca3545cfb0fa402dc6e6f1ecd6fdb1f2917ecbb1c2e540b97f15d074df2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_datetime.html.twig";
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

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_datetime.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_datetime.html.twig");
    }
}
