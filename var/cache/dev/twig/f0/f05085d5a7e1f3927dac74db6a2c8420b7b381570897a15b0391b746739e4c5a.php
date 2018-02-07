<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_0b74eaef23e58b508aa5504a9f9d9a014e81af5cccc3bd621736ac9a7f063962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4de82ae2f673bf3b67f22dd711ca192193c03a5c58e02b3f116b5500838ecea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4de82ae2f673bf3b67f22dd711ca192193c03a5c58e02b3f116b5500838ecea->enter($__internal_c4de82ae2f673bf3b67f22dd711ca192193c03a5c58e02b3f116b5500838ecea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $__internal_ce82577fc1691dc447d2144ac150b35f90f6ea2d0c6f589879bb4187b9300127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce82577fc1691dc447d2144ac150b35f90f6ea2d0c6f589879bb4187b9300127->enter($__internal_ce82577fc1691dc447d2144ac150b35f90f6ea2d0c6f589879bb4187b9300127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4de82ae2f673bf3b67f22dd711ca192193c03a5c58e02b3f116b5500838ecea->leave($__internal_c4de82ae2f673bf3b67f22dd711ca192193c03a5c58e02b3f116b5500838ecea_prof);

        
        $__internal_ce82577fc1691dc447d2144ac150b35f90f6ea2d0c6f589879bb4187b9300127->leave($__internal_ce82577fc1691dc447d2144ac150b35f90f6ea2d0c6f589879bb4187b9300127_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_670f4e1d29c2ca7583732efc1ab2eb5df26a06178c9cae136213efee9224ab45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670f4e1d29c2ca7583732efc1ab2eb5df26a06178c9cae136213efee9224ab45->enter($__internal_670f4e1d29c2ca7583732efc1ab2eb5df26a06178c9cae136213efee9224ab45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_bb685a804b724deba90c84918767a4b9ef0f3aed474a33d84c3a1510acc125fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb685a804b724deba90c84918767a4b9ef0f3aed474a33d84c3a1510acc125fa->enter($__internal_bb685a804b724deba90c84918767a4b9ef0f3aed474a33d84c3a1510acc125fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_bb685a804b724deba90c84918767a4b9ef0f3aed474a33d84c3a1510acc125fa->leave($__internal_bb685a804b724deba90c84918767a4b9ef0f3aed474a33d84c3a1510acc125fa_prof);

        
        $__internal_670f4e1d29c2ca7583732efc1ab2eb5df26a06178c9cae136213efee9224ab45->leave($__internal_670f4e1d29c2ca7583732efc1ab2eb5df26a06178c9cae136213efee9224ab45_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "KnpMenuBundle::menu.html.twig", "/var/www/html/Barlito/vendor/knplabs/knp-menu-bundle/Resources/views/menu.html.twig");
    }
}
