<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_3e6460834f8ced8db789d28f17792b0c687b3f55ec9bb0dfd038f9373f637445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c686a6a5a136277b79b7cb69385622b26e908a35e36052a7e8a45d22e3e942d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c686a6a5a136277b79b7cb69385622b26e908a35e36052a7e8a45d22e3e942d->enter($__internal_4c686a6a5a136277b79b7cb69385622b26e908a35e36052a7e8a45d22e3e942d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $__internal_7457316b9d3dd90b1d56655b76d0a539111c68221f22dc385d849a1388cc3a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7457316b9d3dd90b1d56655b76d0a539111c68221f22dc385d849a1388cc3a51->enter($__internal_7457316b9d3dd90b1d56655b76d0a539111c68221f22dc385d849a1388cc3a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c686a6a5a136277b79b7cb69385622b26e908a35e36052a7e8a45d22e3e942d->leave($__internal_4c686a6a5a136277b79b7cb69385622b26e908a35e36052a7e8a45d22e3e942d_prof);

        
        $__internal_7457316b9d3dd90b1d56655b76d0a539111c68221f22dc385d849a1388cc3a51->leave($__internal_7457316b9d3dd90b1d56655b76d0a539111c68221f22dc385d849a1388cc3a51_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0cb39753f6c50d9b2da8d00e385d223cc7ec2316926054fdb65db8cab4b2d8e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb39753f6c50d9b2da8d00e385d223cc7ec2316926054fdb65db8cab4b2d8e6->enter($__internal_0cb39753f6c50d9b2da8d00e385d223cc7ec2316926054fdb65db8cab4b2d8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d8f6227a2cb229a1a08472348f8636e1bb47a6e75bdcf68420c48b28c65ad090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f6227a2cb229a1a08472348f8636e1bb47a6e75bdcf68420c48b28c65ad090->enter($__internal_d8f6227a2cb229a1a08472348f8636e1bb47a6e75bdcf68420c48b28c65ad090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_d8f6227a2cb229a1a08472348f8636e1bb47a6e75bdcf68420c48b28c65ad090->leave($__internal_d8f6227a2cb229a1a08472348f8636e1bb47a6e75bdcf68420c48b28c65ad090_prof);

        
        $__internal_0cb39753f6c50d9b2da8d00e385d223cc7ec2316926054fdb65db8cab4b2d8e6->leave($__internal_0cb39753f6c50d9b2da8d00e385d223cc7ec2316926054fdb65db8cab4b2d8e6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
