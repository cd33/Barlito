<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_4c09b9634ebf6173f1c35d841826c1f3877e3e78c9f7ad6493d185da69ad54e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef38354dd23e9a9f4402958af6a30ba927409276d05052aae5f2cd39929e855c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef38354dd23e9a9f4402958af6a30ba927409276d05052aae5f2cd39929e855c->enter($__internal_ef38354dd23e9a9f4402958af6a30ba927409276d05052aae5f2cd39929e855c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $__internal_13bf71f1b41de443a96ffcf7940fc86847d997a0d29eda16b2a1b7221f75d0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bf71f1b41de443a96ffcf7940fc86847d997a0d29eda16b2a1b7221f75d0cb->enter($__internal_13bf71f1b41de443a96ffcf7940fc86847d997a0d29eda16b2a1b7221f75d0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef38354dd23e9a9f4402958af6a30ba927409276d05052aae5f2cd39929e855c->leave($__internal_ef38354dd23e9a9f4402958af6a30ba927409276d05052aae5f2cd39929e855c_prof);

        
        $__internal_13bf71f1b41de443a96ffcf7940fc86847d997a0d29eda16b2a1b7221f75d0cb->leave($__internal_13bf71f1b41de443a96ffcf7940fc86847d997a0d29eda16b2a1b7221f75d0cb_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7ea05db17db2642d0c2208d44eaf90aed487d7b436ed4ee9ded0dd3b2d0f6a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea05db17db2642d0c2208d44eaf90aed487d7b436ed4ee9ded0dd3b2d0f6a4b->enter($__internal_7ea05db17db2642d0c2208d44eaf90aed487d7b436ed4ee9ded0dd3b2d0f6a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_1c775e37a81805ab4d9aefd82e033342576f9a3b3fcbfa1b652175a92ad8d25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c775e37a81805ab4d9aefd82e033342576f9a3b3fcbfa1b652175a92ad8d25e->enter($__internal_1c775e37a81805ab4d9aefd82e033342576f9a3b3fcbfa1b652175a92ad8d25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_1c775e37a81805ab4d9aefd82e033342576f9a3b3fcbfa1b652175a92ad8d25e->leave($__internal_1c775e37a81805ab4d9aefd82e033342576f9a3b3fcbfa1b652175a92ad8d25e_prof);

        
        $__internal_7ea05db17db2642d0c2208d44eaf90aed487d7b436ed4ee9ded0dd3b2d0f6a4b->leave($__internal_7ea05db17db2642d0c2208d44eaf90aed487d7b436ed4ee9ded0dd3b2d0f6a4b_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_798bd0390c9eb16f78351c8ee101e603c94483c410aa529a965425603072ec50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798bd0390c9eb16f78351c8ee101e603c94483c410aa529a965425603072ec50->enter($__internal_798bd0390c9eb16f78351c8ee101e603c94483c410aa529a965425603072ec50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_5e915d4999d0a276163a8e3124ea72e04e8362276047b7621f18d6dcc1318ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e915d4999d0a276163a8e3124ea72e04e8362276047b7621f18d6dcc1318ea5->enter($__internal_5e915d4999d0a276163a8e3124ea72e04e8362276047b7621f18d6dcc1318ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_5e915d4999d0a276163a8e3124ea72e04e8362276047b7621f18d6dcc1318ea5->leave($__internal_5e915d4999d0a276163a8e3124ea72e04e8362276047b7621f18d6dcc1318ea5_prof);

        
        $__internal_798bd0390c9eb16f78351c8ee101e603c94483c410aa529a965425603072ec50->leave($__internal_798bd0390c9eb16f78351c8ee101e603c94483c410aa529a965425603072ec50_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_0e286f40032a8d770092553e5240785947f1828e5da60b5e643fa0b0f2e964b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e286f40032a8d770092553e5240785947f1828e5da60b5e643fa0b0f2e964b6->enter($__internal_0e286f40032a8d770092553e5240785947f1828e5da60b5e643fa0b0f2e964b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d8a4aa73d38069b59c7fa1893c64aff88a566f3bf722b5a50a8b2f165901817a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a4aa73d38069b59c7fa1893c64aff88a566f3bf722b5a50a8b2f165901817a->enter($__internal_d8a4aa73d38069b59c7fa1893c64aff88a566f3bf722b5a50a8b2f165901817a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_d8a4aa73d38069b59c7fa1893c64aff88a566f3bf722b5a50a8b2f165901817a->leave($__internal_d8a4aa73d38069b59c7fa1893c64aff88a566f3bf722b5a50a8b2f165901817a_prof);

        
        $__internal_0e286f40032a8d770092553e5240785947f1828e5da60b5e643fa0b0f2e964b6->leave($__internal_0e286f40032a8d770092553e5240785947f1828e5da60b5e643fa0b0f2e964b6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  86 => 24,  72 => 20,  69 => 19,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
