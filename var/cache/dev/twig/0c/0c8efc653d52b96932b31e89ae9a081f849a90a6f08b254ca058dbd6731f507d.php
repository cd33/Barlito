<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig */
class __TwigTemplate_cb34048f7a32a437387f1cf076c395216b17c9cb81f12712ef8af41d00c3c124 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea22b7f8f1c68ae567c0c7e12a0a894261174c8e0df755b9d2f003355d53e184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea22b7f8f1c68ae567c0c7e12a0a894261174c8e0df755b9d2f003355d53e184->enter($__internal_ea22b7f8f1c68ae567c0c7e12a0a894261174c8e0df755b9d2f003355d53e184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig"));

        $__internal_45af448f1b6f7b1c43c8b3a2ca3b5611a5d71455bb0a050a7555e62a1fe4c349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45af448f1b6f7b1c43c8b3a2ca3b5611a5d71455bb0a050a7555e62a1fe4c349->enter($__internal_45af448f1b6f7b1c43c8b3a2ca3b5611a5d71455bb0a050a7555e62a1fe4c349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea22b7f8f1c68ae567c0c7e12a0a894261174c8e0df755b9d2f003355d53e184->leave($__internal_ea22b7f8f1c68ae567c0c7e12a0a894261174c8e0df755b9d2f003355d53e184_prof);

        
        $__internal_45af448f1b6f7b1c43c8b3a2ca3b5611a5d71455bb0a050a7555e62a1fe4c349->leave($__internal_45af448f1b6f7b1c43c8b3a2ca3b5611a5d71455bb0a050a7555e62a1fe4c349_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2f192ac34be8d8abd9251291e0a64a832f52c887795c159df8e652bf534c45c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f192ac34be8d8abd9251291e0a64a832f52c887795c159df8e652bf534c45c7->enter($__internal_2f192ac34be8d8abd9251291e0a64a832f52c887795c159df8e652bf534c45c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4e014b45d9875765867c402d52b0d37ff047ebfdaf81384eae0acd136949faaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e014b45d9875765867c402d52b0d37ff047ebfdaf81384eae0acd136949faaf->enter($__internal_4e014b45d9875765867c402d52b0d37ff047ebfdaf81384eae0acd136949faaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_4e014b45d9875765867c402d52b0d37ff047ebfdaf81384eae0acd136949faaf->leave($__internal_4e014b45d9875765867c402d52b0d37ff047ebfdaf81384eae0acd136949faaf_prof);

        
        $__internal_2f192ac34be8d8abd9251291e0a64a832f52c887795c159df8e652bf534c45c7->leave($__internal_2f192ac34be8d8abd9251291e0a64a832f52c887795c159df8e652bf534c45c7_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig";
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
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_one.html.twig", "/var/www/html/Barlito/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_one_to_one.html.twig");
    }
}
