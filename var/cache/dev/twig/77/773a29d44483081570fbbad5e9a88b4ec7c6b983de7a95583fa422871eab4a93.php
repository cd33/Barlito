<?php

/* SonataAdminBundle:CRUD:display_boolean.html.twig */
class __TwigTemplate_c89619339f7403018824be54cf4b77755f4ab99ea2e7b335c3bdd2257f32c0ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2ce17075b4620e0edaf4759d6ffee8513eb21cef5d98a9e4a78ceaf657940dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ce17075b4620e0edaf4759d6ffee8513eb21cef5d98a9e4a78ceaf657940dd->enter($__internal_b2ce17075b4620e0edaf4759d6ffee8513eb21cef5d98a9e4a78ceaf657940dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:display_boolean.html.twig"));

        $__internal_b662c45fbd0ad3e6f2fd089b16cd52386f2e0c557d20a6fbe977ee2d9732d45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b662c45fbd0ad3e6f2fd089b16cd52386f2e0c557d20a6fbe977ee2d9732d45b->enter($__internal_b662c45fbd0ad3e6f2fd089b16cd52386f2e0c557d20a6fbe977ee2d9732d45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:display_boolean.html.twig"));

        // line 12
        ob_start();
        // line 13
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 14
            echo "        ";
            $context["text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_type_yes", array(), "SonataAdminBundle");
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "        ";
            $context["text"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_type_no", array(), "SonataAdminBundle");
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ((((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inverse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inverse", array()), false)) : (false))) ? ( !(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) : ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            // line 20
            echo "        ";
            $context["class"] = "label-success";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "        ";
            $context["class"] = "label-danger";
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    <span class=\"label ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "html", null, true);
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b2ce17075b4620e0edaf4759d6ffee8513eb21cef5d98a9e4a78ceaf657940dd->leave($__internal_b2ce17075b4620e0edaf4759d6ffee8513eb21cef5d98a9e4a78ceaf657940dd_prof);

        
        $__internal_b662c45fbd0ad3e6f2fd089b16cd52386f2e0c557d20a6fbe977ee2d9732d45b->leave($__internal_b662c45fbd0ad3e6f2fd089b16cd52386f2e0c557d20a6fbe977ee2d9732d45b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:display_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  59 => 24,  56 => 23,  53 => 22,  50 => 21,  47 => 20,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 15,  30 => 14,  27 => 13,  25 => 12,);
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

{%- spaceless %}
    {% if value %}
        {% set text = 'label_type_yes'|trans({}, 'SonataAdminBundle') %}
    {% else %}
        {% set text = 'label_type_no'|trans({}, 'SonataAdminBundle') %}
    {% endif %}

    {% if field_description.options.inverse|default(false) ? not value : value %}
        {% set class = 'label-success' %}
    {% else %}
        {% set class = 'label-danger' %}
    {% endif %}

    <span class=\"label {{ class }}\">{{ text }}</span>
{% endspaceless -%}
", "SonataAdminBundle:CRUD:display_boolean.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/display_boolean.html.twig");
    }
}
