<?php

/* SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_d671d32982a0f654e677463f9b33bab1441fb745a826e5fcd42a7775000222cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30c3c5981494c3118103c2802f4d32c038ddad18b3020b07086b1aedceaae7dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30c3c5981494c3118103c2802f4d32c038ddad18b3020b07086b1aedceaae7dc->enter($__internal_30c3c5981494c3118103c2802f4d32c038ddad18b3020b07086b1aedceaae7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $__internal_0e5ed732b29e77c4879711d1e4ce50ec9cf2b2a421fb2660c2473800977a2e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5ed732b29e77c4879711d1e4ce50ec9cf2b2a421fb2660c2473800977a2e5b->enter($__internal_0e5ed732b29e77c4879711d1e4ce50ec9cf2b2a421fb2660c2473800977a2e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30c3c5981494c3118103c2802f4d32c038ddad18b3020b07086b1aedceaae7dc->leave($__internal_30c3c5981494c3118103c2802f4d32c038ddad18b3020b07086b1aedceaae7dc_prof);

        
        $__internal_0e5ed732b29e77c4879711d1e4ce50ec9cf2b2a421fb2660c2473800977a2e5b->leave($__internal_0e5ed732b29e77c4879711d1e4ce50ec9cf2b2a421fb2660c2473800977a2e5b_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig";
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", "/var/www/html/Barlito/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
