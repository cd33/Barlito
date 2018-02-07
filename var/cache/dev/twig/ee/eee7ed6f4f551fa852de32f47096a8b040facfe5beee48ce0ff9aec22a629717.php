<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_3aa3a8e2c7de78087740b1aabcb9b10670cfdf6ba20acb947b4fcc1a63190554 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83c3e98db8a8637c0ce109be97ab48e657afabfd91f665264aea4d381eb3de24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83c3e98db8a8637c0ce109be97ab48e657afabfd91f665264aea4d381eb3de24->enter($__internal_83c3e98db8a8637c0ce109be97ab48e657afabfd91f665264aea4d381eb3de24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $__internal_d8236abaffd4e92286a70718e80468b63ccf02faef8a74b458c0c69500ada244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8236abaffd4e92286a70718e80468b63ccf02faef8a74b458c0c69500ada244->enter($__internal_d8236abaffd4e92286a70718e80468b63ccf02faef8a74b458c0c69500ada244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83c3e98db8a8637c0ce109be97ab48e657afabfd91f665264aea4d381eb3de24->leave($__internal_83c3e98db8a8637c0ce109be97ab48e657afabfd91f665264aea4d381eb3de24_prof);

        
        $__internal_d8236abaffd4e92286a70718e80468b63ccf02faef8a74b458c0c69500ada244->leave($__internal_d8236abaffd4e92286a70718e80468b63ccf02faef8a74b458c0c69500ada244_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b729edc849c70ee00ec8febe42b704174b14730c9a1406107a19a68b7e9924b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b729edc849c70ee00ec8febe42b704174b14730c9a1406107a19a68b7e9924b0->enter($__internal_b729edc849c70ee00ec8febe42b704174b14730c9a1406107a19a68b7e9924b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ac5aa7bc0fe48ea701a67c1a8b850fa782559410e9f1361d2dae077d05d695b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac5aa7bc0fe48ea701a67c1a8b850fa782559410e9f1361d2dae077d05d695b8->enter($__internal_ac5aa7bc0fe48ea701a67c1a8b850fa782559410e9f1361d2dae077d05d695b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_ac5aa7bc0fe48ea701a67c1a8b850fa782559410e9f1361d2dae077d05d695b8->leave($__internal_ac5aa7bc0fe48ea701a67c1a8b850fa782559410e9f1361d2dae077d05d695b8_prof);

        
        $__internal_b729edc849c70ee00ec8febe42b704174b14730c9a1406107a19a68b7e9924b0->leave($__internal_b729edc849c70ee00ec8febe42b704174b14730c9a1406107a19a68b7e9924b0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
