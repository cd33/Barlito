<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_6fe37775999675ffac9dc5040fb61368e2461365f78a64690854b5cd2c98fa0e extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e037ec2e631396117ca12650fc58ce9206a805e6d3003570bf5acc5c102876ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e037ec2e631396117ca12650fc58ce9206a805e6d3003570bf5acc5c102876ce->enter($__internal_e037ec2e631396117ca12650fc58ce9206a805e6d3003570bf5acc5c102876ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $__internal_a3c60071adb56f37750c26b8a3ddf0b7faabec4d58a49cda4fc7a1197e3426ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3c60071adb56f37750c26b8a3ddf0b7faabec4d58a49cda4fc7a1197e3426ae->enter($__internal_a3c60071adb56f37750c26b8a3ddf0b7faabec4d58a49cda4fc7a1197e3426ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e037ec2e631396117ca12650fc58ce9206a805e6d3003570bf5acc5c102876ce->leave($__internal_e037ec2e631396117ca12650fc58ce9206a805e6d3003570bf5acc5c102876ce_prof);

        
        $__internal_a3c60071adb56f37750c26b8a3ddf0b7faabec4d58a49cda4fc7a1197e3426ae->leave($__internal_a3c60071adb56f37750c26b8a3ddf0b7faabec4d58a49cda4fc7a1197e3426ae_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
", "SonataAdminBundle:CRUD:list_string.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
