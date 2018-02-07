<?php

/* SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig */
class __TwigTemplate_9067d48dc6a9255d858cb453b053fc237c6c2e6c9bdce08e4e20406a848bf2a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig", 12);
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
        $__internal_03ffced252cfe412207666d05ba60cb8b22da20ca7f5c6da74bac247be65d0a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ffced252cfe412207666d05ba60cb8b22da20ca7f5c6da74bac247be65d0a0->enter($__internal_03ffced252cfe412207666d05ba60cb8b22da20ca7f5c6da74bac247be65d0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig"));

        $__internal_17b8d49e1dde740bee2576b535aa32c8a3278c5d3baeee99bdad9553c6542f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b8d49e1dde740bee2576b535aa32c8a3278c5d3baeee99bdad9553c6542f79->enter($__internal_17b8d49e1dde740bee2576b535aa32c8a3278c5d3baeee99bdad9553c6542f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03ffced252cfe412207666d05ba60cb8b22da20ca7f5c6da74bac247be65d0a0->leave($__internal_03ffced252cfe412207666d05ba60cb8b22da20ca7f5c6da74bac247be65d0a0_prof);

        
        $__internal_17b8d49e1dde740bee2576b535aa32c8a3278c5d3baeee99bdad9553c6542f79->leave($__internal_17b8d49e1dde740bee2576b535aa32c8a3278c5d3baeee99bdad9553c6542f79_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_df5b69cabcf430b6020218efb33e1738f7f557836c165ee07c53600332de7b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df5b69cabcf430b6020218efb33e1738f7f557836c165ee07c53600332de7b74->enter($__internal_df5b69cabcf430b6020218efb33e1738f7f557836c165ee07c53600332de7b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_16d9c7c2f0cafe9e605848df6d1de667bb6ee1f8e627c94626ea7bc506ff9c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16d9c7c2f0cafe9e605848df6d1de667bb6ee1f8e627c94626ea7bc506ff9c1b->enter($__internal_16d9c7c2f0cafe9e605848df6d1de667bb6ee1f8e627c94626ea7bc506ff9c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 18
            echo "        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute(            // line 19
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(            // line 20
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"]), "method"))) {
                // line 21
                echo "            <li>
                <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                    ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                </a>
            </li>
        ";
            } else {
                // line 27
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "</li>
        ";
            }
            // line 29
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ul>
";
        
        $__internal_16d9c7c2f0cafe9e605848df6d1de667bb6ee1f8e627c94626ea7bc506ff9c1b->leave($__internal_16d9c7c2f0cafe9e605848df6d1de667bb6ee1f8e627c94626ea7bc506ff9c1b_prof);

        
        $__internal_df5b69cabcf430b6020218efb33e1738f7f557836c165ee07c53600332de7b74->leave($__internal_df5b69cabcf430b6020218efb33e1738f7f557836c165ee07c53600332de7b74_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  84 => 29,  78 => 27,  71 => 23,  67 => 22,  64 => 21,  62 => 20,  61 => 19,  59 => 18,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    <ul class=\"sonata-ba-show-one-to-many\">
    {% set route_name = field_description.options.route.name %}
    {% for element in value%}
        {% if field_description.hasassociationadmin
        and field_description.associationadmin.hasRoute(route_name)
        and field_description.associationadmin.hasAccess(route_name, element) %}
            <li>
                <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
                    {{ element|render_relation_element(field_description) }}
                </a>
            </li>
        {% else %}
            <li>{{ element|render_relation_element(field_description) }}</li>
        {% endif %}
    {% endfor %}
    </ul>
{% endblock %}
", "SonataAdminBundle:CRUD/Association:show_one_to_many.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/Association/show_one_to_many.html.twig");
    }
}
