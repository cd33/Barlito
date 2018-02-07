<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_425fe14af46bdabd8631b031ab5645a7ab146ada8edddcbb7cb21a9bbb4b9aba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d5e917b965d1a03cedd631f44129d8a0c865378a1656e048a8917cd7d3bc671 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5e917b965d1a03cedd631f44129d8a0c865378a1656e048a8917cd7d3bc671->enter($__internal_6d5e917b965d1a03cedd631f44129d8a0c865378a1656e048a8917cd7d3bc671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $__internal_22cd379fda8965f112750c6f57a24298ac0bc7f5310cbff7d749641fc3a9df24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22cd379fda8965f112750c6f57a24298ac0bc7f5310cbff7d749641fc3a9df24->enter($__internal_22cd379fda8965f112750c6f57a24298ac0bc7f5310cbff7d749641fc3a9df24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d5e917b965d1a03cedd631f44129d8a0c865378a1656e048a8917cd7d3bc671->leave($__internal_6d5e917b965d1a03cedd631f44129d8a0c865378a1656e048a8917cd7d3bc671_prof);

        
        $__internal_22cd379fda8965f112750c6f57a24298ac0bc7f5310cbff7d749641fc3a9df24->leave($__internal_22cd379fda8965f112750c6f57a24298ac0bc7f5310cbff7d749641fc3a9df24_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
