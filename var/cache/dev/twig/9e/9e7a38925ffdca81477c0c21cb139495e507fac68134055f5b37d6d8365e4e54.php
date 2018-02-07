<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_f2546026fa8576d960b27de98ec0a517c02761587244a414992d72bb40357a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_964c8ea9b00ac242410b4b2e2a2f2703a7c226ce7269712244d4d4b6252b0106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_964c8ea9b00ac242410b4b2e2a2f2703a7c226ce7269712244d4d4b6252b0106->enter($__internal_964c8ea9b00ac242410b4b2e2a2f2703a7c226ce7269712244d4d4b6252b0106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $__internal_87ac10231bb925a3bfa872885d1affb4e73f4b99f09e69b875f544db73718535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ac10231bb925a3bfa872885d1affb4e73f4b99f09e69b875f544db73718535->enter($__internal_87ac10231bb925a3bfa872885d1affb4e73f4b99f09e69b875f544db73718535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_964c8ea9b00ac242410b4b2e2a2f2703a7c226ce7269712244d4d4b6252b0106->leave($__internal_964c8ea9b00ac242410b4b2e2a2f2703a7c226ce7269712244d4d4b6252b0106_prof);

        
        $__internal_87ac10231bb925a3bfa872885d1affb4e73f4b99f09e69b875f544db73718535->leave($__internal_87ac10231bb925a3bfa872885d1affb4e73f4b99f09e69b875f544db73718535_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_add92f4ecdea0318abb098f7ee1de8dc4ea507839b0e7fe4bc180fd62879019e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add92f4ecdea0318abb098f7ee1de8dc4ea507839b0e7fe4bc180fd62879019e->enter($__internal_add92f4ecdea0318abb098f7ee1de8dc4ea507839b0e7fe4bc180fd62879019e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_5babef978649318d8c00be3fd5793b431b3a7af3a24c32ebbed0b1df3000456d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5babef978649318d8c00be3fd5793b431b3a7af3a24c32ebbed0b1df3000456d->enter($__internal_5babef978649318d8c00be3fd5793b431b3a7af3a24c32ebbed0b1df3000456d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 16
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 19
        echo "    </tr>
";
        
        $__internal_5babef978649318d8c00be3fd5793b431b3a7af3a24c32ebbed0b1df3000456d->leave($__internal_5babef978649318d8c00be3fd5793b431b3a7af3a24c32ebbed0b1df3000456d_prof);

        
        $__internal_add92f4ecdea0318abb098f7ee1de8dc4ea507839b0e7fe4bc180fd62879019e->leave($__internal_add92f4ecdea0318abb098f7ee1de8dc4ea507839b0e7fe4bc180fd62879019e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_compare.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_compare.html.twig");
    }
}
