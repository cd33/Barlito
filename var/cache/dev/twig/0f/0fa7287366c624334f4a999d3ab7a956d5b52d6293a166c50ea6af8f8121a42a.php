<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_96a5aa2b84e75100a7196eb07a7090c94a5d194836d468b9c0ab977f8fea40e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9412a44d67bff4a98d99a313facb6424c1e2e8135655f21b391cc7fb9536fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9412a44d67bff4a98d99a313facb6424c1e2e8135655f21b391cc7fb9536fb0->enter($__internal_b9412a44d67bff4a98d99a313facb6424c1e2e8135655f21b391cc7fb9536fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $__internal_7d8f6eb4839744679bd85c1a4fda9df4df405977e30a11a0fa097145bc9fe2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8f6eb4839744679bd85c1a4fda9df4df405977e30a11a0fa097145bc9fe2a1->enter($__internal_7d8f6eb4839744679bd85c1a4fda9df4df405977e30a11a0fa097145bc9fe2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9412a44d67bff4a98d99a313facb6424c1e2e8135655f21b391cc7fb9536fb0->leave($__internal_b9412a44d67bff4a98d99a313facb6424c1e2e8135655f21b391cc7fb9536fb0_prof);

        
        $__internal_7d8f6eb4839744679bd85c1a4fda9df4df405977e30a11a0fa097145bc9fe2a1->leave($__internal_7d8f6eb4839744679bd85c1a4fda9df4df405977e30a11a0fa097145bc9fe2a1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
", "SonataAdminBundle:CRUD:acl.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/acl.html.twig");
    }
}
