<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_2b3dd8c7e3c297fbd91a8cbf6c7035af2fe2bd83fcd215242bea42d9191aeb19 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_376c00bc0103e30662fcf41ee2283c6f6ec09a3ab4922b2ab5f8141ac637b19e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376c00bc0103e30662fcf41ee2283c6f6ec09a3ab4922b2ab5f8141ac637b19e->enter($__internal_376c00bc0103e30662fcf41ee2283c6f6ec09a3ab4922b2ab5f8141ac637b19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $__internal_5b77d3a2189c3fd21062ed1d0fe3090ded332c4bea11f10a61e60099f2a9cf8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b77d3a2189c3fd21062ed1d0fe3090ded332c4bea11f10a61e60099f2a9cf8e->enter($__internal_5b77d3a2189c3fd21062ed1d0fe3090ded332c4bea11f10a61e60099f2a9cf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_376c00bc0103e30662fcf41ee2283c6f6ec09a3ab4922b2ab5f8141ac637b19e->leave($__internal_376c00bc0103e30662fcf41ee2283c6f6ec09a3ab4922b2ab5f8141ac637b19e_prof);

        
        $__internal_5b77d3a2189c3fd21062ed1d0fe3090ded332c4bea11f10a61e60099f2a9cf8e->leave($__internal_5b77d3a2189c3fd21062ed1d0fe3090ded332c4bea11f10a61e60099f2a9cf8e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
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

{% extends base_template %}
", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_sonata_type_immutable_array.html.twig");
    }
}
