<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_0446c1c3f892de6ff6d170831239e93f1460918dddab603c0fd5b77de08c849e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_8a692a967987024d240279c5f2766e1e689a9b5dd3d6d614216f2b7b9f338c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a692a967987024d240279c5f2766e1e689a9b5dd3d6d614216f2b7b9f338c62->enter($__internal_8a692a967987024d240279c5f2766e1e689a9b5dd3d6d614216f2b7b9f338c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $__internal_e2e0e405f12f143b0da386e6ab0d1a8d54a0703cba283b0f8f6053ae68bb5405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e0e405f12f143b0da386e6ab0d1a8d54a0703cba283b0f8f6053ae68bb5405->enter($__internal_e2e0e405f12f143b0da386e6ab0d1a8d54a0703cba283b0f8f6053ae68bb5405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a692a967987024d240279c5f2766e1e689a9b5dd3d6d614216f2b7b9f338c62->leave($__internal_8a692a967987024d240279c5f2766e1e689a9b5dd3d6d614216f2b7b9f338c62_prof);

        
        $__internal_e2e0e405f12f143b0da386e6ab0d1a8d54a0703cba283b0f8f6053ae68bb5405->leave($__internal_e2e0e405f12f143b0da386e6ab0d1a8d54a0703cba283b0f8f6053ae68bb5405_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d3655aff8693d65b861b544bc97d003103fac48de08e64f3547ec7cb6672d743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3655aff8693d65b861b544bc97d003103fac48de08e64f3547ec7cb6672d743->enter($__internal_d3655aff8693d65b861b544bc97d003103fac48de08e64f3547ec7cb6672d743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ae43c00c9bdea847b702a78ca9225e47e5d811b6b1909a913865302193ccbfd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae43c00c9bdea847b702a78ca9225e47e5d811b6b1909a913865302193ccbfd4->enter($__internal_ae43c00c9bdea847b702a78ca9225e47e5d811b6b1909a913865302193ccbfd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_ae43c00c9bdea847b702a78ca9225e47e5d811b6b1909a913865302193ccbfd4->leave($__internal_ae43c00c9bdea847b702a78ca9225e47e5d811b6b1909a913865302193ccbfd4_prof);

        
        $__internal_d3655aff8693d65b861b544bc97d003103fac48de08e64f3547ec7cb6672d743->leave($__internal_d3655aff8693d65b861b544bc97d003103fac48de08e64f3547ec7cb6672d743_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_time.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_time.html.twig");
    }
}
