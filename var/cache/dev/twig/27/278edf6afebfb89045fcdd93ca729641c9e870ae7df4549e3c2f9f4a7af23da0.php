<?php

/* SonataAdminBundle:CRUD:delete.html.twig */
class __TwigTemplate_f1416349e0abb68948b0917d99a980aebfc594292761dbea527bc5d32053ad94 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:delete.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_334e86a597baaa43ff0718978a963e2a0bf68cee3b4851999804d9552fb27df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_334e86a597baaa43ff0718978a963e2a0bf68cee3b4851999804d9552fb27df4->enter($__internal_334e86a597baaa43ff0718978a963e2a0bf68cee3b4851999804d9552fb27df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $__internal_63727a1075539a3cdfab86abf095b5a5d1e93ac4cb2d75072bb2c425e84427fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63727a1075539a3cdfab86abf095b5a5d1e93ac4cb2d75072bb2c425e84427fa->enter($__internal_63727a1075539a3cdfab86abf095b5a5d1e93ac4cb2d75072bb2c425e84427fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_334e86a597baaa43ff0718978a963e2a0bf68cee3b4851999804d9552fb27df4->leave($__internal_334e86a597baaa43ff0718978a963e2a0bf68cee3b4851999804d9552fb27df4_prof);

        
        $__internal_63727a1075539a3cdfab86abf095b5a5d1e93ac4cb2d75072bb2c425e84427fa->leave($__internal_63727a1075539a3cdfab86abf095b5a5d1e93ac4cb2d75072bb2c425e84427fa_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6fe626fbd65dfd10149902a8fd4b57a6618ff8ffea102cec4a3307d1c164a6e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe626fbd65dfd10149902a8fd4b57a6618ff8ffea102cec4a3307d1c164a6e5->enter($__internal_6fe626fbd65dfd10149902a8fd4b57a6618ff8ffea102cec4a3307d1c164a6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_b5c5bd8d945b2c2a4d7db3f765a47e23996e12a3e57415e8defa43f3dde9acc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c5bd8d945b2c2a4d7db3f765a47e23996e12a3e57415e8defa43f3dde9acc6->enter($__internal_b5c5bd8d945b2c2a4d7db3f765a47e23996e12a3e57415e8defa43f3dde9acc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:delete.html.twig", 15)->display($context);
        
        $__internal_b5c5bd8d945b2c2a4d7db3f765a47e23996e12a3e57415e8defa43f3dde9acc6->leave($__internal_b5c5bd8d945b2c2a4d7db3f765a47e23996e12a3e57415e8defa43f3dde9acc6_prof);

        
        $__internal_6fe626fbd65dfd10149902a8fd4b57a6618ff8ffea102cec4a3307d1c164a6e5->leave($__internal_6fe626fbd65dfd10149902a8fd4b57a6618ff8ffea102cec4a3307d1c164a6e5_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_0cada76aeae3e75caa0f808910b07ae8094785d44f6326cb5ba12782b4da5525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cada76aeae3e75caa0f808910b07ae8094785d44f6326cb5ba12782b4da5525->enter($__internal_0cada76aeae3e75caa0f808910b07ae8094785d44f6326cb5ba12782b4da5525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_18513b9672e3ee52598f2f586e821ce54efe9b643d6686344d7522518f4fb1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18513b9672e3ee52598f2f586e821ce54efe9b643d6686344d7522518f4fb1fa->enter($__internal_18513b9672e3ee52598f2f586e821ce54efe9b643d6686344d7522518f4fb1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_18513b9672e3ee52598f2f586e821ce54efe9b643d6686344d7522518f4fb1fa->leave($__internal_18513b9672e3ee52598f2f586e821ce54efe9b643d6686344d7522518f4fb1fa_prof);

        
        $__internal_0cada76aeae3e75caa0f808910b07ae8094785d44f6326cb5ba12782b4da5525->leave($__internal_0cada76aeae3e75caa0f808910b07ae8094785d44f6326cb5ba12782b4da5525_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_03db3d0a42ea48697ba11bd500971dcb52430c18fa8a51a47edd6119faac3ec9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03db3d0a42ea48697ba11bd500971dcb52430c18fa8a51a47edd6119faac3ec9->enter($__internal_03db3d0a42ea48697ba11bd500971dcb52430c18fa8a51a47edd6119faac3ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5781e7cdb89dea2bb7a89875dec9c08595855f1d3bf89027bfa20aa7f573fa10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5781e7cdb89dea2bb7a89875dec9c08595855f1d3bf89027bfa20aa7f573fa10->enter($__internal_5781e7cdb89dea2bb7a89875dec9c08595855f1d3bf89027bfa20aa7f573fa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_delete_confirmation", array("%object%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 36
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 43
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_5781e7cdb89dea2bb7a89875dec9c08595855f1d3bf89027bfa20aa7f573fa10->leave($__internal_5781e7cdb89dea2bb7a89875dec9c08595855f1d3bf89027bfa20aa7f573fa10_prof);

        
        $__internal_03db3d0a42ea48697ba11bd500971dcb52430c18fa8a51a47edd6119faac3ec9->leave($__internal_03db3d0a42ea48697ba11bd500971dcb52430c18fa8a51a47edd6119faac3ec9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  132 => 41,  127 => 39,  121 => 37,  119 => 36,  115 => 35,  110 => 33,  105 => 31,  99 => 28,  93 => 25,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">{{ 'title_delete'|trans({}, 'SonataAdminBundle') }}</h3>
            </div>
            <div class=\"box-body\">
                {{ 'message_delete_confirmation'|trans({'%object%': admin.toString(object)}, 'SonataAdminBundle') }}
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"{{ admin.generateObjectUrl('delete', object) }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {{ 'btn_delete'|trans({}, 'SonataAdminBundle') }}</button>
                    {% if admin.hasRoute('edit') and admin.hasAccess('edit', object) %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:delete.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/delete.html.twig");
    }
}
