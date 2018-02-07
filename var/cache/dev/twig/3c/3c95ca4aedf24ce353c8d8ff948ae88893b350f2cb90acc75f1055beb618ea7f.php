<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_7b1edc23030e70dc04c5595339dcdb4d68ed65df6830256cafe7c5d3b9cacbb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14b94f2c8f87bdafeff34c5f093ee16e45797b2d5034fe15c6228bf1de8964b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b94f2c8f87bdafeff34c5f093ee16e45797b2d5034fe15c6228bf1de8964b7->enter($__internal_14b94f2c8f87bdafeff34c5f093ee16e45797b2d5034fe15c6228bf1de8964b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $__internal_4b4e238360d086139f0f70d0ec2fc6c7aefd628e6b568126573428fe229e5e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4e238360d086139f0f70d0ec2fc6c7aefd628e6b568126573428fe229e5e3b->enter($__internal_4b4e238360d086139f0f70d0ec2fc6c7aefd628e6b568126573428fe229e5e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14b94f2c8f87bdafeff34c5f093ee16e45797b2d5034fe15c6228bf1de8964b7->leave($__internal_14b94f2c8f87bdafeff34c5f093ee16e45797b2d5034fe15c6228bf1de8964b7_prof);

        
        $__internal_4b4e238360d086139f0f70d0ec2fc6c7aefd628e6b568126573428fe229e5e3b->leave($__internal_4b4e238360d086139f0f70d0ec2fc6c7aefd628e6b568126573428fe229e5e3b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
", "SonataAdminBundle:Core:create_button.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/Core/create_button.html.twig");
    }
}
