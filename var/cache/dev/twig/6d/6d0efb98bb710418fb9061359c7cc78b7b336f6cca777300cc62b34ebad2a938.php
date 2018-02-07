<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_684926bff1a9239f73330ed0e6d4862e9280421f7d2b65bbc9d5ee768093abf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_fd811bdf26b9d1137d6aa5ebf16be2e1b57a748ba2721c3084f729aa6de39d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd811bdf26b9d1137d6aa5ebf16be2e1b57a748ba2721c3084f729aa6de39d32->enter($__internal_fd811bdf26b9d1137d6aa5ebf16be2e1b57a748ba2721c3084f729aa6de39d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $__internal_6bc31abdd70d3f2f6f156daf86d2e65ea1eda73a4b48ba4ee636cbe19679f1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc31abdd70d3f2f6f156daf86d2e65ea1eda73a4b48ba4ee636cbe19679f1f7->enter($__internal_6bc31abdd70d3f2f6f156daf86d2e65ea1eda73a4b48ba4ee636cbe19679f1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd811bdf26b9d1137d6aa5ebf16be2e1b57a748ba2721c3084f729aa6de39d32->leave($__internal_fd811bdf26b9d1137d6aa5ebf16be2e1b57a748ba2721c3084f729aa6de39d32_prof);

        
        $__internal_6bc31abdd70d3f2f6f156daf86d2e65ea1eda73a4b48ba4ee636cbe19679f1f7->leave($__internal_6bc31abdd70d3f2f6f156daf86d2e65ea1eda73a4b48ba4ee636cbe19679f1f7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ed07e156990b2cae7f9e1a131c72152d670dc43dc863d653ee249ececa577e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed07e156990b2cae7f9e1a131c72152d670dc43dc863d653ee249ececa577e2c->enter($__internal_ed07e156990b2cae7f9e1a131c72152d670dc43dc863d653ee249ececa577e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_cd297cff848f62ede57c44ba9f52d5bc1a288cddbeb531849a9d2e164a58c502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd297cff848f62ede57c44ba9f52d5bc1a288cddbeb531849a9d2e164a58c502->enter($__internal_cd297cff848f62ede57c44ba9f52d5bc1a288cddbeb531849a9d2e164a58c502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_cd297cff848f62ede57c44ba9f52d5bc1a288cddbeb531849a9d2e164a58c502->leave($__internal_cd297cff848f62ede57c44ba9f52d5bc1a288cddbeb531849a9d2e164a58c502_prof);

        
        $__internal_ed07e156990b2cae7f9e1a131c72152d670dc43dc863d653ee249ececa577e2c->leave($__internal_ed07e156990b2cae7f9e1a131c72152d670dc43dc863d653ee249ececa577e2c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
