<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_0f988d332a20229679d472e21cd4d6c79673c82dc89825b472e42598a352daca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f232d291f8724bd5e02092b3eb36b5caaf239924c0f5610b7473af424263f80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f232d291f8724bd5e02092b3eb36b5caaf239924c0f5610b7473af424263f80f->enter($__internal_f232d291f8724bd5e02092b3eb36b5caaf239924c0f5610b7473af424263f80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        $__internal_a407174ef75d81ca06c4bec67ab39cb0b792c395afc04c06573aa3b7799c27d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a407174ef75d81ca06c4bec67ab39cb0b792c395afc04c06573aa3b7799c27d4->enter($__internal_a407174ef75d81ca06c4bec67ab39cb0b792c395afc04c06573aa3b7799c27d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_f232d291f8724bd5e02092b3eb36b5caaf239924c0f5610b7473af424263f80f->leave($__internal_f232d291f8724bd5e02092b3eb36b5caaf239924c0f5610b7473af424263f80f_prof);

        
        $__internal_a407174ef75d81ca06c4bec67ab39cb0b792c395afc04c06573aa3b7799c27d4->leave($__internal_a407174ef75d81ca06c4bec67ab39cb0b792c395afc04c06573aa3b7799c27d4_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_cbdb61cf5baa0a105179e604659c7fcc46a58c26a261603c8159e450f2b67cee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbdb61cf5baa0a105179e604659c7fcc46a58c26a261603c8159e450f2b67cee->enter($__internal_cbdb61cf5baa0a105179e604659c7fcc46a58c26a261603c8159e450f2b67cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_3234d506107888d17675f9e53e7fd2f6979b4d2077ea161fca0ea21d32871044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3234d506107888d17675f9e53e7fd2f6979b4d2077ea161fca0ea21d32871044->enter($__internal_3234d506107888d17675f9e53e7fd2f6979b4d2077ea161fca0ea21d32871044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_3234d506107888d17675f9e53e7fd2f6979b4d2077ea161fca0ea21d32871044->leave($__internal_3234d506107888d17675f9e53e7fd2f6979b4d2077ea161fca0ea21d32871044_prof);

        
        $__internal_cbdb61cf5baa0a105179e604659c7fcc46a58c26a261603c8159e450f2b67cee->leave($__internal_cbdb61cf5baa0a105179e604659c7fcc46a58c26a261603c8159e450f2b67cee_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_18467c0c7d0298cc5e64ae5343bae972678ed1373d8ab2630868f60b491947b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18467c0c7d0298cc5e64ae5343bae972678ed1373d8ab2630868f60b491947b2->enter($__internal_18467c0c7d0298cc5e64ae5343bae972678ed1373d8ab2630868f60b491947b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e0226ab7ae2cc8d22bf5a48dc6e9f4fe9746d2c828fd9dc009770ea71fe902ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0226ab7ae2cc8d22bf5a48dc6e9f4fe9746d2c828fd9dc009770ea71fe902ed->enter($__internal_e0226ab7ae2cc8d22bf5a48dc6e9f4fe9746d2c828fd9dc009770ea71fe902ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_e0226ab7ae2cc8d22bf5a48dc6e9f4fe9746d2c828fd9dc009770ea71fe902ed->leave($__internal_e0226ab7ae2cc8d22bf5a48dc6e9f4fe9746d2c828fd9dc009770ea71fe902ed_prof);

        
        $__internal_18467c0c7d0298cc5e64ae5343bae972678ed1373d8ab2630868f60b491947b2->leave($__internal_18467c0c7d0298cc5e64ae5343bae972678ed1373d8ab2630868f60b491947b2_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_b8851ed0053d1dc30ee743dca3647084817e0f906e6d808b8fb6c32dc30ed1da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8851ed0053d1dc30ee743dca3647084817e0f906e6d808b8fb6c32dc30ed1da->enter($__internal_b8851ed0053d1dc30ee743dca3647084817e0f906e6d808b8fb6c32dc30ed1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        $__internal_9bf9284c11a1d22f09536963a843bba31f8ff5376917158b6815cf2b289a478a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf9284c11a1d22f09536963a843bba31f8ff5376917158b6815cf2b289a478a->enter($__internal_9bf9284c11a1d22f09536963a843bba31f8ff5376917158b6815cf2b289a478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "help", array());
        
        $__internal_9bf9284c11a1d22f09536963a843bba31f8ff5376917158b6815cf2b289a478a->leave($__internal_9bf9284c11a1d22f09536963a843bba31f8ff5376917158b6815cf2b289a478a_prof);

        
        $__internal_b8851ed0053d1dc30ee743dca3647084817e0f906e6d808b8fb6c32dc30ed1da->leave($__internal_b8851ed0053d1dc30ee743dca3647084817e0f906e6d808b8fb6c32dc30ed1da_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_90926d69294d09c24740b59059a72cc7c6a9f41eeb6ebe534a05cfd27bad3fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90926d69294d09c24740b59059a72cc7c6a9f41eeb6ebe534a05cfd27bad3fff->enter($__internal_90926d69294d09c24740b59059a72cc7c6a9f41eeb6ebe534a05cfd27bad3fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_bc6c379d9f76e01af898132ec92fde779b990c0757ed95da32e5093a3a1d9309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6c379d9f76e01af898132ec92fde779b990c0757ed95da32e5093a3a1d9309->enter($__internal_bc6c379d9f76e01af898132ec92fde779b990c0757ed95da32e5093a3a1d9309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_bc6c379d9f76e01af898132ec92fde779b990c0757ed95da32e5093a3a1d9309->leave($__internal_bc6c379d9f76e01af898132ec92fde779b990c0757ed95da32e5093a3a1d9309_prof);

        
        $__internal_90926d69294d09c24740b59059a72cc7c6a9f41eeb6ebe534a05cfd27bad3fff->leave($__internal_90926d69294d09c24740b59059a72cc7c6a9f41eeb6ebe534a05cfd27bad3fff_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 30,  141 => 26,  123 => 23,  113 => 19,  107 => 17,  101 => 15,  98 => 14,  89 => 13,  75 => 31,  73 => 30,  69 => 28,  63 => 26,  61 => 25,  58 => 24,  56 => 23,  45 => 21,  42 => 20,  40 => 13,  32 => 12,  29 => 11,);
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

<div class=\"form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ field_element.vars.id }}\">
    {% block label %}
        {% if field_description.options.name is defined %}
            {{ form_label(field_element, field_description.options.name) }}
        {% else %}
            {{ form_label(field_element) }}
        {% endif %}
    {% endblock %}

    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">

        {% block field %}{{ form_widget(field_element) }}{% endblock %}

        {% if field_description.help %}
            <span class=\"help-block\">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>
        {% endif %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_standard_edit_field.html.twig");
    }
}
