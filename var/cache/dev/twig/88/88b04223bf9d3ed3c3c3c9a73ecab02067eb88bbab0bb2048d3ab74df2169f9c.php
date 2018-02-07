<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_f6f59251201ebd0b9f9a494db109c790bc596bcbb3fca9ea19b77125de82ade6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de949732cf9aff1d1ac22db83290b846af5458ee6f48368cd7e84fc9e53171e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de949732cf9aff1d1ac22db83290b846af5458ee6f48368cd7e84fc9e53171e5->enter($__internal_de949732cf9aff1d1ac22db83290b846af5458ee6f48368cd7e84fc9e53171e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        $__internal_da7ed38cfca45cb5543ae136cec1bd4e5ecbfea60b8c9451a68b5a060eff871a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7ed38cfca45cb5543ae136cec1bd4e5ecbfea60b8c9451a68b5a060eff871a->enter($__internal_da7ed38cfca45cb5543ae136cec1bd4e5ecbfea60b8c9451a68b5a060eff871a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de949732cf9aff1d1ac22db83290b846af5458ee6f48368cd7e84fc9e53171e5->leave($__internal_de949732cf9aff1d1ac22db83290b846af5458ee6f48368cd7e84fc9e53171e5_prof);

        
        $__internal_da7ed38cfca45cb5543ae136cec1bd4e5ecbfea60b8c9451a68b5a060eff871a->leave($__internal_da7ed38cfca45cb5543ae136cec1bd4e5ecbfea60b8c9451a68b5a060eff871a_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_84a90d332f785e00dc6c93b28b460230c9230df210a7a79c15f2bcffec3608ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a90d332f785e00dc6c93b28b460230c9230df210a7a79c15f2bcffec3608ae->enter($__internal_84a90d332f785e00dc6c93b28b460230c9230df210a7a79c15f2bcffec3608ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_edbebf40db781e135534d8f5a6520bc841cefea234d88c0475d8b337f6beb95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbebf40db781e135534d8f5a6520bc841cefea234d88c0475d8b337f6beb95e->enter($__internal_edbebf40db781e135534d8f5a6520bc841cefea234d88c0475d8b337f6beb95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_edbebf40db781e135534d8f5a6520bc841cefea234d88c0475d8b337f6beb95e->leave($__internal_edbebf40db781e135534d8f5a6520bc841cefea234d88c0475d8b337f6beb95e_prof);

        
        $__internal_84a90d332f785e00dc6c93b28b460230c9230df210a7a79c15f2bcffec3608ae->leave($__internal_84a90d332f785e00dc6c93b28b460230c9230df210a7a79c15f2bcffec3608ae_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_b71f73d13111d5f0ba1f086f858e0562363da0a9d34993931d5a7105bb8ba600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b71f73d13111d5f0ba1f086f858e0562363da0a9d34993931d5a7105bb8ba600->enter($__internal_b71f73d13111d5f0ba1f086f858e0562363da0a9d34993931d5a7105bb8ba600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_812be89064e56784d51a040d8fd0a6e9e34636808a4fbd24104a092834b4bd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812be89064e56784d51a040d8fd0a6e9e34636808a4fbd24104a092834b4bd4f->enter($__internal_812be89064e56784d51a040d8fd0a6e9e34636808a4fbd24104a092834b4bd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_812be89064e56784d51a040d8fd0a6e9e34636808a4fbd24104a092834b4bd4f->leave($__internal_812be89064e56784d51a040d8fd0a6e9e34636808a4fbd24104a092834b4bd4f_prof);

        
        $__internal_b71f73d13111d5f0ba1f086f858e0562363da0a9d34993931d5a7105bb8ba600->leave($__internal_b71f73d13111d5f0ba1f086f858e0562363da0a9d34993931d5a7105bb8ba600_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_8aa0ac4acc9c388118ef0d8c92ad9be722e90750d65e3091f19e0ae2a27662b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa0ac4acc9c388118ef0d8c92ad9be722e90750d65e3091f19e0ae2a27662b6->enter($__internal_8aa0ac4acc9c388118ef0d8c92ad9be722e90750d65e3091f19e0ae2a27662b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        $__internal_e2c6d3b1738d3cf00fb99a785d4bc45466000160c071e1fc37a5c4a62879211f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c6d3b1738d3cf00fb99a785d4bc45466000160c071e1fc37a5c4a62879211f->enter($__internal_e2c6d3b1738d3cf00fb99a785d4bc45466000160c071e1fc37a5c4a62879211f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_e2c6d3b1738d3cf00fb99a785d4bc45466000160c071e1fc37a5c4a62879211f->leave($__internal_e2c6d3b1738d3cf00fb99a785d4bc45466000160c071e1fc37a5c4a62879211f_prof);

        
        $__internal_8aa0ac4acc9c388118ef0d8c92ad9be722e90750d65e3091f19e0ae2a27662b6->leave($__internal_8aa0ac4acc9c388118ef0d8c92ad9be722e90750d65e3091f19e0ae2a27662b6_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_99a221950a7626e5a0c873dacb8dbaaca1e18fd4fc665c9261b6c60ce438a040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a221950a7626e5a0c873dacb8dbaaca1e18fd4fc665c9261b6c60ce438a040->enter($__internal_99a221950a7626e5a0c873dacb8dbaaca1e18fd4fc665c9261b6c60ce438a040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        $__internal_2f2ba7dd471ef21642b8ae3d561cc278956934da3c2a05902751bb9c62c88242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2ba7dd471ef21642b8ae3d561cc278956934da3c2a05902751bb9c62c88242->enter($__internal_2f2ba7dd471ef21642b8ae3d561cc278956934da3c2a05902751bb9c62c88242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_2f2ba7dd471ef21642b8ae3d561cc278956934da3c2a05902751bb9c62c88242->leave($__internal_2f2ba7dd471ef21642b8ae3d561cc278956934da3c2a05902751bb9c62c88242_prof);

        
        $__internal_99a221950a7626e5a0c873dacb8dbaaca1e18fd4fc665c9261b6c60ce438a040->leave($__internal_99a221950a7626e5a0c873dacb8dbaaca1e18fd4fc665c9261b6c60ce438a040_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  109 => 24,  96 => 22,  87 => 21,  76 => 24,  73 => 21,  64 => 20,  54 => 15,  45 => 14,  35 => 12,  33 => 18,  21 => 12,);
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

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
