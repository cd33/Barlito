<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_4be73f62534ec9ec7f54920c6da031ef053eeecbb95540f2410f4a87e31d23f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77e02e54dd9d525cd5a0d6bd54a1b6de0c99f4e81448bb6e56dac1c54c37a8d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e02e54dd9d525cd5a0d6bd54a1b6de0c99f4e81448bb6e56dac1c54c37a8d0->enter($__internal_77e02e54dd9d525cd5a0d6bd54a1b6de0c99f4e81448bb6e56dac1c54c37a8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $__internal_836caab79636fc3939dbb7f9cae429d3a87ab19f787530ca6a6afca24eef091e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836caab79636fc3939dbb7f9cae429d3a87ab19f787530ca6a6afca24eef091e->enter($__internal_836caab79636fc3939dbb7f9cae429d3a87ab19f787530ca6a6afca24eef091e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77e02e54dd9d525cd5a0d6bd54a1b6de0c99f4e81448bb6e56dac1c54c37a8d0->leave($__internal_77e02e54dd9d525cd5a0d6bd54a1b6de0c99f4e81448bb6e56dac1c54c37a8d0_prof);

        
        $__internal_836caab79636fc3939dbb7f9cae429d3a87ab19f787530ca6a6afca24eef091e->leave($__internal_836caab79636fc3939dbb7f9cae429d3a87ab19f787530ca6a6afca24eef091e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
", "SonataAdminBundle:CRUD:list_inner_row.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_inner_row.html.twig");
    }
}
