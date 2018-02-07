<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_85a38d47860377b0784e227d130357c909de970695726da2e9758e1c4ba69c17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28e055e954e6dbc08c8a1f079ff2d26a457c0176a9907afa0aa918d3b720ed3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28e055e954e6dbc08c8a1f079ff2d26a457c0176a9907afa0aa918d3b720ed3b->enter($__internal_28e055e954e6dbc08c8a1f079ff2d26a457c0176a9907afa0aa918d3b720ed3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $__internal_940033dd1c3841cddbb2feee1839c4a7ab8502c572315c8d61cf81679f46be19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940033dd1c3841cddbb2feee1839c4a7ab8502c572315c8d61cf81679f46be19->enter($__internal_940033dd1c3841cddbb2feee1839c4a7ab8502c572315c8d61cf81679f46be19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28e055e954e6dbc08c8a1f079ff2d26a457c0176a9907afa0aa918d3b720ed3b->leave($__internal_28e055e954e6dbc08c8a1f079ff2d26a457c0176a9907afa0aa918d3b720ed3b_prof);

        
        $__internal_940033dd1c3841cddbb2feee1839c4a7ab8502c572315c8d61cf81679f46be19->leave($__internal_940033dd1c3841cddbb2feee1839c4a7ab8502c572315c8d61cf81679f46be19_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "SonataAdminBundle:Pager:results.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
