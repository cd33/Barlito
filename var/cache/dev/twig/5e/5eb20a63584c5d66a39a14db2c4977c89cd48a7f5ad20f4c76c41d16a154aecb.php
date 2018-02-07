<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_a7699743a52e250eb317fae4f71248b51f4fc82e14cf209f28804db754544368 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c2869097eaae7d9c7006b916170b122419c8b4a7838497ab640c35acb58d2c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c2869097eaae7d9c7006b916170b122419c8b4a7838497ab640c35acb58d2c3->enter($__internal_4c2869097eaae7d9c7006b916170b122419c8b4a7838497ab640c35acb58d2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $__internal_1dcd3648ccd9bcb8483eb1982f468c601b7d42de2094277f36d1fc1d549dfad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dcd3648ccd9bcb8483eb1982f468c601b7d42de2094277f36d1fc1d549dfad6->enter($__internal_1dcd3648ccd9bcb8483eb1982f468c601b7d42de2094277f36d1fc1d549dfad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c2869097eaae7d9c7006b916170b122419c8b4a7838497ab640c35acb58d2c3->leave($__internal_4c2869097eaae7d9c7006b916170b122419c8b4a7838497ab640c35acb58d2c3_prof);

        
        $__internal_1dcd3648ccd9bcb8483eb1982f468c601b7d42de2094277f36d1fc1d549dfad6->leave($__internal_1dcd3648ccd9bcb8483eb1982f468c601b7d42de2094277f36d1fc1d549dfad6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_483904b0034a3fd779dff8451d60ae2e2f02ce60208d8c6fff92b2f6fda84328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483904b0034a3fd779dff8451d60ae2e2f02ce60208d8c6fff92b2f6fda84328->enter($__internal_483904b0034a3fd779dff8451d60ae2e2f02ce60208d8c6fff92b2f6fda84328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d61f2264defc578f633645eed1837cf6c47acc6679bfe209630ce9de205bb426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61f2264defc578f633645eed1837cf6c47acc6679bfe209630ce9de205bb426->enter($__internal_d61f2264defc578f633645eed1837cf6c47acc6679bfe209630ce9de205bb426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_d61f2264defc578f633645eed1837cf6c47acc6679bfe209630ce9de205bb426->leave($__internal_d61f2264defc578f633645eed1837cf6c47acc6679bfe209630ce9de205bb426_prof);

        
        $__internal_483904b0034a3fd779dff8451d60ae2e2f02ce60208d8c6fff92b2f6fda84328->leave($__internal_483904b0034a3fd779dff8451d60ae2e2f02ce60208d8c6fff92b2f6fda84328_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
