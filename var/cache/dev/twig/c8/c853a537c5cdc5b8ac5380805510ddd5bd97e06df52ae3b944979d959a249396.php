<?php

/* SonataAdminBundle:CRUD:show_boolean.html.twig */
class __TwigTemplate_882fc21346cededefd6f476c2230ec3f745a4a8ad99cb10838336ce18b6737f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 12);
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
        $__internal_9e04a3ddfd8acea6f1488ed0ef124c4726318c2276e2f4ba81fee9dbfe1aabae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e04a3ddfd8acea6f1488ed0ef124c4726318c2276e2f4ba81fee9dbfe1aabae->enter($__internal_9e04a3ddfd8acea6f1488ed0ef124c4726318c2276e2f4ba81fee9dbfe1aabae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $__internal_a7a89afd48090ee7c68d77c10380912a2c8472a72b0cdf421cedee4c99d7a9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a89afd48090ee7c68d77c10380912a2c8472a72b0cdf421cedee4c99d7a9a6->enter($__internal_a7a89afd48090ee7c68d77c10380912a2c8472a72b0cdf421cedee4c99d7a9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e04a3ddfd8acea6f1488ed0ef124c4726318c2276e2f4ba81fee9dbfe1aabae->leave($__internal_9e04a3ddfd8acea6f1488ed0ef124c4726318c2276e2f4ba81fee9dbfe1aabae_prof);

        
        $__internal_a7a89afd48090ee7c68d77c10380912a2c8472a72b0cdf421cedee4c99d7a9a6->leave($__internal_a7a89afd48090ee7c68d77c10380912a2c8472a72b0cdf421cedee4c99d7a9a6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a6b48e6641837f35e2d46f14f567567459b51232550a23acb1e5aa839789dcf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b48e6641837f35e2d46f14f567567459b51232550a23acb1e5aa839789dcf6->enter($__internal_a6b48e6641837f35e2d46f14f567567459b51232550a23acb1e5aa839789dcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8faabb14608c2f00042cb4c9c5b1acbccf88879a63589d58f2cb999695866a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8faabb14608c2f00042cb4c9c5b1acbccf88879a63589d58f2cb999695866a47->enter($__internal_8faabb14608c2f00042cb4c9c5b1acbccf88879a63589d58f2cb999695866a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:display_boolean.html.twig", "SonataAdminBundle:CRUD:show_boolean.html.twig", 15)->display($context);
        
        $__internal_8faabb14608c2f00042cb4c9c5b1acbccf88879a63589d58f2cb999695866a47->leave($__internal_8faabb14608c2f00042cb4c9c5b1acbccf88879a63589d58f2cb999695866a47_prof);

        
        $__internal_a6b48e6641837f35e2d46f14f567567459b51232550a23acb1e5aa839789dcf6->leave($__internal_a6b48e6641837f35e2d46f14f567567459b51232550a23acb1e5aa839789dcf6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  40 => 14,  11 => 12,);
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
    {%- include 'SonataAdminBundle:CRUD:display_boolean.html.twig' -%}
{% endblock %}
", "SonataAdminBundle:CRUD:show_boolean.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_boolean.html.twig");
    }
}
