<?php

/* SonataAdminBundle:CRUD/Association:show_one_to_one.html.twig */
class __TwigTemplate_98c308ecefdedc74f3802708da1f7eee2912c5eda25aa939470dfa4094dfcb20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD/Association:show_one_to_one.html.twig", 12);
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
        $__internal_e7f23394bf3e5dc560f1ca531a759f2646362edc94d1cb149e4c775a088dcd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f23394bf3e5dc560f1ca531a759f2646362edc94d1cb149e4c775a088dcd2c->enter($__internal_e7f23394bf3e5dc560f1ca531a759f2646362edc94d1cb149e4c775a088dcd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:show_one_to_one.html.twig"));

        $__internal_95e473fd628ab9d99c1034e0fb8abe04cc9339a63050e95d591bc7f7331faac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e473fd628ab9d99c1034e0fb8abe04cc9339a63050e95d591bc7f7331faac5->enter($__internal_95e473fd628ab9d99c1034e0fb8abe04cc9339a63050e95d591bc7f7331faac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:show_one_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7f23394bf3e5dc560f1ca531a759f2646362edc94d1cb149e4c775a088dcd2c->leave($__internal_e7f23394bf3e5dc560f1ca531a759f2646362edc94d1cb149e4c775a088dcd2c_prof);

        
        $__internal_95e473fd628ab9d99c1034e0fb8abe04cc9339a63050e95d591bc7f7331faac5->leave($__internal_95e473fd628ab9d99c1034e0fb8abe04cc9339a63050e95d591bc7f7331faac5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_19705b0b2520bf2138cbfc72e21c3ede266efa20fc8a54d9682af235d9c42997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19705b0b2520bf2138cbfc72e21c3ede266efa20fc8a54d9682af235d9c42997->enter($__internal_19705b0b2520bf2138cbfc72e21c3ede266efa20fc8a54d9682af235d9c42997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_295c88f6c67bb192c3f7ea28217bd9397c3fdad0a2fc262456401ff03a4e4883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295c88f6c67bb192c3f7ea28217bd9397c3fdad0a2fc262456401ff03a4e4883->enter($__internal_295c88f6c67bb192c3f7ea28217bd9397c3fdad0a2fc262456401ff03a4e4883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo "\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 24
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_295c88f6c67bb192c3f7ea28217bd9397c3fdad0a2fc262456401ff03a4e4883->leave($__internal_295c88f6c67bb192c3f7ea28217bd9397c3fdad0a2fc262456401ff03a4e4883_prof);

        
        $__internal_19705b0b2520bf2138cbfc72e21c3ede266efa20fc8a54d9682af235d9c42997->leave($__internal_19705b0b2520bf2138cbfc72e21c3ede266efa20fc8a54d9682af235d9c42997_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:show_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  63 => 21,  58 => 20,  56 => 19,  55 => 18,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasAssociationAdmin
    and field_description.associationadmin.id(value)
    and field_description.associationadmin.hasRoute(route_name)
    and field_description.associationadmin.hasAccess(route_name, value) %}
        <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
            {{ value|render_relation_element(field_description) }}
        </a>
    {% else %}
        {{ value|render_relation_element(field_description) }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD/Association:show_one_to_one.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/Association/show_one_to_one.html.twig");
    }
}
