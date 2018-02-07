<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_9ad9a01d165ecaf33d6dd597b20041a5f2dfa9b2f374c0b2185a98a912524fbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_trans.html.twig", 11);
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
        $__internal_34aa3bbac9b2e7529f85c23f22090044cac251da06e93fbb521b4af31974a8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34aa3bbac9b2e7529f85c23f22090044cac251da06e93fbb521b4af31974a8a2->enter($__internal_34aa3bbac9b2e7529f85c23f22090044cac251da06e93fbb521b4af31974a8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $__internal_afbe7fa07a5f21fd60448428134677c3ab8edfe819d12e1c3dd220a81023b8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afbe7fa07a5f21fd60448428134677c3ab8edfe819d12e1c3dd220a81023b8eb->enter($__internal_afbe7fa07a5f21fd60448428134677c3ab8edfe819d12e1c3dd220a81023b8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34aa3bbac9b2e7529f85c23f22090044cac251da06e93fbb521b4af31974a8a2->leave($__internal_34aa3bbac9b2e7529f85c23f22090044cac251da06e93fbb521b4af31974a8a2_prof);

        
        $__internal_afbe7fa07a5f21fd60448428134677c3ab8edfe819d12e1c3dd220a81023b8eb->leave($__internal_afbe7fa07a5f21fd60448428134677c3ab8edfe819d12e1c3dd220a81023b8eb_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_1fdd96b8f3219b68aa428dc2db05b93d8b61dede61abe165bdd8992b6d9f9ff4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fdd96b8f3219b68aa428dc2db05b93d8b61dede61abe165bdd8992b6d9f9ff4->enter($__internal_1fdd96b8f3219b68aa428dc2db05b93d8b61dede61abe165bdd8992b6d9f9ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6c3260f08f372a74c41f5404e20cbc3f050876b356b76f244c9ce3ae90896d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3260f08f372a74c41f5404e20cbc3f050876b356b76f244c9ce3ae90896d96->enter($__internal_6c3260f08f372a74c41f5404e20cbc3f050876b356b76f244c9ce3ae90896d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_6c3260f08f372a74c41f5404e20cbc3f050876b356b76f244c9ce3ae90896d96->leave($__internal_6c3260f08f372a74c41f5404e20cbc3f050876b356b76f244c9ce3ae90896d96_prof);

        
        $__internal_1fdd96b8f3219b68aa428dc2db05b93d8b61dede61abe165bdd8992b6d9f9ff4->leave($__internal_1fdd96b8f3219b68aa428dc2db05b93d8b61dede61abe165bdd8992b6d9f9ff4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  69 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  40 => 13,  11 => 11,);
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

{% block field%}
    {% if field_description.options.catalogue is not defined %}
        {% set value = value|trans %}
    {% else %}
        {% set value = value|trans({}, field_description.options.catalogue) %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_trans.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_trans.html.twig");
    }
}
