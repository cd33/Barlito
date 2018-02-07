<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_afe259d5580ff59828b56589d4fd5cf6860d30bd3f86a6f117e7e968dc46fb7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c21ea69737fd898f7e708e3397663600d514563c08166a93d007b6a94eea96f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21ea69737fd898f7e708e3397663600d514563c08166a93d007b6a94eea96f5->enter($__internal_c21ea69737fd898f7e708e3397663600d514563c08166a93d007b6a94eea96f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $__internal_d7275908adbaf710a69e471123a8b8bfc79397585e1970ce15ccc3b7d9b79938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7275908adbaf710a69e471123a8b8bfc79397585e1970ce15ccc3b7d9b79938->enter($__internal_d7275908adbaf710a69e471123a8b8bfc79397585e1970ce15ccc3b7d9b79938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c21ea69737fd898f7e708e3397663600d514563c08166a93d007b6a94eea96f5->leave($__internal_c21ea69737fd898f7e708e3397663600d514563c08166a93d007b6a94eea96f5_prof);

        
        $__internal_d7275908adbaf710a69e471123a8b8bfc79397585e1970ce15ccc3b7d9b79938->leave($__internal_d7275908adbaf710a69e471123a8b8bfc79397585e1970ce15ccc3b7d9b79938_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_764eb0d929ce29c6191b3aeb279349d5d97cff54a4785f6dbde5168e5a55d701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764eb0d929ce29c6191b3aeb279349d5d97cff54a4785f6dbde5168e5a55d701->enter($__internal_764eb0d929ce29c6191b3aeb279349d5d97cff54a4785f6dbde5168e5a55d701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_78087670682a06c3a33ed5a7427ad844c5e2972aa273f8a758f911297f7f06a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78087670682a06c3a33ed5a7427ad844c5e2972aa273f8a758f911297f7f06a0->enter($__internal_78087670682a06c3a33ed5a7427ad844c5e2972aa273f8a758f911297f7f06a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_78087670682a06c3a33ed5a7427ad844c5e2972aa273f8a758f911297f7f06a0->leave($__internal_78087670682a06c3a33ed5a7427ad844c5e2972aa273f8a758f911297f7f06a0_prof);

        
        $__internal_764eb0d929ce29c6191b3aeb279349d5d97cff54a4785f6dbde5168e5a55d701->leave($__internal_764eb0d929ce29c6191b3aeb279349d5d97cff54a4785f6dbde5168e5a55d701_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
