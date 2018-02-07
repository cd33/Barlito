<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_9c4dcc2fd7b3e5d9b9d0aabdd9bfd45a814b7b80e693c6dfffc434fe5c7693b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ae8d8655ad8dfed0fc6ecc33f10a51e168f527b0118b152b928de59d0d5246f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae8d8655ad8dfed0fc6ecc33f10a51e168f527b0118b152b928de59d0d5246f->enter($__internal_9ae8d8655ad8dfed0fc6ecc33f10a51e168f527b0118b152b928de59d0d5246f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $__internal_25ae2bb9e136f99ff5f7191b2fd0b115dd6eb3197e6c3b123cbc8e0c9c452165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ae2bb9e136f99ff5f7191b2fd0b115dd6eb3197e6c3b123cbc8e0c9c452165->enter($__internal_25ae2bb9e136f99ff5f7191b2fd0b115dd6eb3197e6c3b123cbc8e0c9c452165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ae8d8655ad8dfed0fc6ecc33f10a51e168f527b0118b152b928de59d0d5246f->leave($__internal_9ae8d8655ad8dfed0fc6ecc33f10a51e168f527b0118b152b928de59d0d5246f_prof);

        
        $__internal_25ae2bb9e136f99ff5f7191b2fd0b115dd6eb3197e6c3b123cbc8e0c9c452165->leave($__internal_25ae2bb9e136f99ff5f7191b2fd0b115dd6eb3197e6c3b123cbc8e0c9c452165_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
", "SonataAdminBundle:CRUD:show.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show.html.twig");
    }
}
