<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_059568f2f9a8706c5fd09e714362eef6a5ac0553615c4d66f65de284177ffa21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6677f583ecf2d5266c2e47db59523c027a501d05b8d6b79dd852857342fa8f18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6677f583ecf2d5266c2e47db59523c027a501d05b8d6b79dd852857342fa8f18->enter($__internal_6677f583ecf2d5266c2e47db59523c027a501d05b8d6b79dd852857342fa8f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $__internal_ef36f3bda114e5d7b849bf4651ee630cd7d417208aa94d5902785e87475c170e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef36f3bda114e5d7b849bf4651ee630cd7d417208aa94d5902785e87475c170e->enter($__internal_ef36f3bda114e5d7b849bf4651ee630cd7d417208aa94d5902785e87475c170e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6677f583ecf2d5266c2e47db59523c027a501d05b8d6b79dd852857342fa8f18->leave($__internal_6677f583ecf2d5266c2e47db59523c027a501d05b8d6b79dd852857342fa8f18_prof);

        
        $__internal_ef36f3bda114e5d7b849bf4651ee630cd7d417208aa94d5902785e87475c170e->leave($__internal_ef36f3bda114e5d7b849bf4651ee630cd7d417208aa94d5902785e87475c170e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
", "SonataAdminBundle:CRUD:show_compare.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_compare.html.twig");
    }
}
