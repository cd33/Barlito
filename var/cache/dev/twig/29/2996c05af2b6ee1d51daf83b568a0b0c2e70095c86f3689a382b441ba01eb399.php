<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_b7000b1f9ea17ac19a1d0fe1df1fa821aefb6433f67df5f2fb197fa07639afde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec7bd307d4346f487f600dc64cd150bcaa4dc1746f6eecfd3933e8d73a502146 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec7bd307d4346f487f600dc64cd150bcaa4dc1746f6eecfd3933e8d73a502146->enter($__internal_ec7bd307d4346f487f600dc64cd150bcaa4dc1746f6eecfd3933e8d73a502146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $__internal_ea90d386fa7df7be9eb4f7d00e495719ad6f49c7a2b3cc10d839fce9c200bd7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea90d386fa7df7be9eb4f7d00e495719ad6f49c7a2b3cc10d839fce9c200bd7d->enter($__internal_ea90d386fa7df7be9eb4f7d00e495719ad6f49c7a2b3cc10d839fce9c200bd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec7bd307d4346f487f600dc64cd150bcaa4dc1746f6eecfd3933e8d73a502146->leave($__internal_ec7bd307d4346f487f600dc64cd150bcaa4dc1746f6eecfd3933e8d73a502146_prof);

        
        $__internal_ea90d386fa7df7be9eb4f7d00e495719ad6f49c7a2b3cc10d839fce9c200bd7d->leave($__internal_ea90d386fa7df7be9eb4f7d00e495719ad6f49c7a2b3cc10d839fce9c200bd7d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
", "SonataAdminBundle:CRUD:history.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history.html.twig");
    }
}
