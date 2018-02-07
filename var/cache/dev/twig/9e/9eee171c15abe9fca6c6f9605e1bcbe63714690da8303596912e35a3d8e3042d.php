<?php

/* SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig */
class __TwigTemplate_9e094106dfeda10a9d901399ff47ef934f1b8b7ad38d2277f06b6d590ce2f9aa extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e94679521cc116e85f8d44bb2e95e591713fd184dceda50f234d58b3cf15018e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e94679521cc116e85f8d44bb2e95e591713fd184dceda50f234d58b3cf15018e->enter($__internal_e94679521cc116e85f8d44bb2e95e591713fd184dceda50f234d58b3cf15018e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig"));

        $__internal_cc5f17b65959f8145c59f6cf3ce3d2449c443569cbcc7a347496211eea009dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5f17b65959f8145c59f6cf3ce3d2449c443569cbcc7a347496211eea009dd0->enter($__internal_cc5f17b65959f8145c59f6cf3ce3d2449c443569cbcc7a347496211eea009dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e94679521cc116e85f8d44bb2e95e591713fd184dceda50f234d58b3cf15018e->leave($__internal_e94679521cc116e85f8d44bb2e95e591713fd184dceda50f234d58b3cf15018e_prof);

        
        $__internal_cc5f17b65959f8145c59f6cf3ce3d2449c443569cbcc7a347496211eea009dd0->leave($__internal_cc5f17b65959f8145c59f6cf3ce3d2449c443569cbcc7a347496211eea009dd0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4fe61fab9e9acf4a460a2cd656119613d3d7e3d6ea9104eabdacb461e1027966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe61fab9e9acf4a460a2cd656119613d3d7e3d6ea9104eabdacb461e1027966->enter($__internal_4fe61fab9e9acf4a460a2cd656119613d3d7e3d6ea9104eabdacb461e1027966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d2c7119b23045a8559904f06a2b39fed7f95f1fc021882640ac6b7760988ccf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c7119b23045a8559904f06a2b39fed7f95f1fc021882640ac6b7760988ccf4->enter($__internal_d2c7119b23045a8559904f06a2b39fed7f95f1fc021882640ac6b7760988ccf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "id", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute(        // line 18
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(        // line 19
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"))) {
            // line 20
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_d2c7119b23045a8559904f06a2b39fed7f95f1fc021882640ac6b7760988ccf4->leave($__internal_d2c7119b23045a8559904f06a2b39fed7f95f1fc021882640ac6b7760988ccf4_prof);

        
        $__internal_4fe61fab9e9acf4a460a2cd656119613d3d7e3d6ea9104eabdacb461e1027966->leave($__internal_4fe61fab9e9acf4a460a2cd656119613d3d7e3d6ea9104eabdacb461e1027966_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  57 => 20,  55 => 19,  54 => 18,  53 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasAssociationAdmin
    and field_description.associationadmin.id(value)
    and field_description.associationadmin.hasRoute(route_name)
    and field_description.associationadmin.hasAccess(route_name, value) %}
        <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">{{ value|render_relation_element(field_description) }}</a>
    {% else %}
        {{ value|render_relation_element(field_description) }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD/Association:list_one_to_one.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/Association/list_one_to_one.html.twig");
    }
}
