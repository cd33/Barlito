<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_c3f51931c380c8ec7bd29774b9bf1c4934b277e83d91cd04764a1d2b25640ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 33
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89ed671b3a7158012028fe70b1059fb859a72d19a6be4df90d15a9df2c7baff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ed671b3a7158012028fe70b1059fb859a72d19a6be4df90d15a9df2c7baff0->enter($__internal_89ed671b3a7158012028fe70b1059fb859a72d19a6be4df90d15a9df2c7baff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_57cb9c4c9fa1c179ef721572efe6cd0c902d59b62d5bab3c9d5be60572ec2cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57cb9c4c9fa1c179ef721572efe6cd0c902d59b62d5bab3c9d5be60572ec2cac->enter($__internal_57cb9c4c9fa1c179ef721572efe6cd0c902d59b62d5bab3c9d5be60572ec2cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89ed671b3a7158012028fe70b1059fb859a72d19a6be4df90d15a9df2c7baff0->leave($__internal_89ed671b3a7158012028fe70b1059fb859a72d19a6be4df90d15a9df2c7baff0_prof);

        
        $__internal_57cb9c4c9fa1c179ef721572efe6cd0c902d59b62d5bab3c9d5be60572ec2cac->leave($__internal_57cb9c4c9fa1c179ef721572efe6cd0c902d59b62d5bab3c9d5be60572ec2cac_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_af78276fd7e8af4403a7ae55b2f99b14ad428b775389ae13c39c6b2e268ef5bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af78276fd7e8af4403a7ae55b2f99b14ad428b775389ae13c39c6b2e268ef5bd->enter($__internal_af78276fd7e8af4403a7ae55b2f99b14ad428b775389ae13c39c6b2e268ef5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9e705ba241cfd7f24fbee4617ab2f93ca8a034109a9ad71983cb3a9eeacd1e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e705ba241cfd7f24fbee4617ab2f93ca8a034109a9ad71983cb3a9eeacd1e8->enter($__internal_a9e705ba241cfd7f24fbee4617ab2f93ca8a034109a9ad71983cb3a9eeacd1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        // line 16
        echo "    ";
        if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : $this->getContext($context, "objectId")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))))) {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_a9e705ba241cfd7f24fbee4617ab2f93ca8a034109a9ad71983cb3a9eeacd1e8->leave($__internal_a9e705ba241cfd7f24fbee4617ab2f93ca8a034109a9ad71983cb3a9eeacd1e8_prof);

        
        $__internal_af78276fd7e8af4403a7ae55b2f99b14ad428b775389ae13c39c6b2e268ef5bd->leave($__internal_af78276fd7e8af4403a7ae55b2f99b14ad428b775389ae13c39c6b2e268ef5bd_prof);

    }

    // line 23
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_d5eee54d1b5b587caae7b68797a2d7a189ada9725f0ed96e84e2345c29f42405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5eee54d1b5b587caae7b68797a2d7a189ada9725f0ed96e84e2345c29f42405->enter($__internal_d5eee54d1b5b587caae7b68797a2d7a189ada9725f0ed96e84e2345c29f42405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_f48f19e264ab208b65d93f0c234f41698157033b96ac9daf64fb2d22e6e35bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48f19e264ab208b65d93f0c234f41698157033b96ac9daf64fb2d22e6e35bda->enter($__internal_f48f19e264ab208b65d93f0c234f41698157033b96ac9daf64fb2d22e6e35bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 24
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f48f19e264ab208b65d93f0c234f41698157033b96ac9daf64fb2d22e6e35bda->leave($__internal_f48f19e264ab208b65d93f0c234f41698157033b96ac9daf64fb2d22e6e35bda_prof);

        
        $__internal_d5eee54d1b5b587caae7b68797a2d7a189ada9725f0ed96e84e2345c29f42405->leave($__internal_d5eee54d1b5b587caae7b68797a2d7a189ada9725f0ed96e84e2345c29f42405_prof);

    }

    // line 27
    public function block_actions($context, array $blocks = array())
    {
        $__internal_e5b89cf4c7d928e8d17d928ba970ec294eb11fa9f40a2e331c973ab2756449f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5b89cf4c7d928e8d17d928ba970ec294eb11fa9f40a2e331c973ab2756449f5->enter($__internal_e5b89cf4c7d928e8d17d928ba970ec294eb11fa9f40a2e331c973ab2756449f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_4ba230580d19ec4b21b8ad6ea31a5a90de008551b7693a1381b13b7cbb209751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba230580d19ec4b21b8ad6ea31a5a90de008551b7693a1381b13b7cbb209751->enter($__internal_4ba230580d19ec4b21b8ad6ea31a5a90de008551b7693a1381b13b7cbb209751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 28
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 28)->display($context);
        
        $__internal_4ba230580d19ec4b21b8ad6ea31a5a90de008551b7693a1381b13b7cbb209751->leave($__internal_4ba230580d19ec4b21b8ad6ea31a5a90de008551b7693a1381b13b7cbb209751_prof);

        
        $__internal_e5b89cf4c7d928e8d17d928ba970ec294eb11fa9f40a2e331c973ab2756449f5->leave($__internal_e5b89cf4c7d928e8d17d928ba970ec294eb11fa9f40a2e331c973ab2756449f5_prof);

    }

    // line 31
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_e5cb153b235bc4a9a3a40ffc83c4f68e237bfc65473ee448733504ada3f95a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cb153b235bc4a9a3a40ffc83c4f68e237bfc65473ee448733504ada3f95a9d->enter($__internal_e5cb153b235bc4a9a3a40ffc83c4f68e237bfc65473ee448733504ada3f95a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_ef093f03b5ec225cb708e81c643fcaede13d2ee00a90fab757ac66ca2d46793d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef093f03b5ec225cb708e81c643fcaede13d2ee00a90fab757ac66ca2d46793d->enter($__internal_ef093f03b5ec225cb708e81c643fcaede13d2ee00a90fab757ac66ca2d46793d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_ef093f03b5ec225cb708e81c643fcaede13d2ee00a90fab757ac66ca2d46793d->leave($__internal_ef093f03b5ec225cb708e81c643fcaede13d2ee00a90fab757ac66ca2d46793d_prof);

        
        $__internal_e5cb153b235bc4a9a3a40ffc83c4f68e237bfc65473ee448733504ada3f95a9d->leave($__internal_e5cb153b235bc4a9a3a40ffc83c4f68e237bfc65473ee448733504ada3f95a9d_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_866533e6a134b39154f6528b858afc9294e4c7b4e2c0933a8abd194667781632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866533e6a134b39154f6528b858afc9294e4c7b4e2c0933a8abd194667781632->enter($__internal_866533e6a134b39154f6528b858afc9294e4c7b4e2c0933a8abd194667781632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_8e3fef163554da2b547196b4d5189e2d70a639f5e0a188f98697129de21e645c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3fef163554da2b547196b4d5189e2d70a639f5e0a188f98697129de21e645c->enter($__internal_8e3fef163554da2b547196b4d5189e2d70a639f5e0a188f98697129de21e645c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_8e3fef163554da2b547196b4d5189e2d70a639f5e0a188f98697129de21e645c->leave($__internal_8e3fef163554da2b547196b4d5189e2d70a639f5e0a188f98697129de21e645c_prof);

        
        $__internal_866533e6a134b39154f6528b858afc9294e4c7b4e2c0933a8abd194667781632->leave($__internal_866533e6a134b39154f6528b858afc9294e4c7b4e2c0933a8abd194667781632_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 36,  154 => 35,  136 => 31,  126 => 28,  117 => 27,  104 => 24,  95 => 23,  81 => 19,  75 => 17,  72 => 16,  70 => 15,  61 => 14,  40 => 12,  12 => 33,);
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

{% block title %}
    {# NEXT_MAJOR: remove default filter #}
    {% if objectId|default(admin.id(object)) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
