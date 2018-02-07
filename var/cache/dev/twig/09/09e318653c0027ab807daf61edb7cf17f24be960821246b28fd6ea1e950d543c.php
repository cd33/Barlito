<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_2af7b5f25d8c72d12c827bec2503cd257b86a6b9a840a5a8be5338d5a7bd40a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb688f859b64ae32a0903d85645159b5cbf5c7fe5544ee4a1ebaf153bf235959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb688f859b64ae32a0903d85645159b5cbf5c7fe5544ee4a1ebaf153bf235959->enter($__internal_cb688f859b64ae32a0903d85645159b5cbf5c7fe5544ee4a1ebaf153bf235959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $__internal_67f4ae564442640df02a1e14a790d42e79e5c9ac8ecffe10fc9af11a4e32a353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f4ae564442640df02a1e14a790d42e79e5c9ac8ecffe10fc9af11a4e32a353->enter($__internal_67f4ae564442640df02a1e14a790d42e79e5c9ac8ecffe10fc9af11a4e32a353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb688f859b64ae32a0903d85645159b5cbf5c7fe5544ee4a1ebaf153bf235959->leave($__internal_cb688f859b64ae32a0903d85645159b5cbf5c7fe5544ee4a1ebaf153bf235959_prof);

        
        $__internal_67f4ae564442640df02a1e14a790d42e79e5c9ac8ecffe10fc9af11a4e32a353->leave($__internal_67f4ae564442640df02a1e14a790d42e79e5c9ac8ecffe10fc9af11a4e32a353_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
