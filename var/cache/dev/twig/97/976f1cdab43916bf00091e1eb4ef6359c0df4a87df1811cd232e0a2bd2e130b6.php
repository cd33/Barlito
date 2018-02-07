<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_38437d1151cf3ece66fcb65ac7b93460b0dd4b6f3da8e2eb188acc29c18ca384 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4327fcf9fb9e27644500f43bdf92d4553f7061676ed9053ab79fbe6d28b0c5ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4327fcf9fb9e27644500f43bdf92d4553f7061676ed9053ab79fbe6d28b0c5ad->enter($__internal_4327fcf9fb9e27644500f43bdf92d4553f7061676ed9053ab79fbe6d28b0c5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $__internal_8e75485b959e8ffc0df0ce4185ddab12f4b201c7b07f5e523917d92bf104732c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e75485b959e8ffc0df0ce4185ddab12f4b201c7b07f5e523917d92bf104732c->enter($__internal_8e75485b959e8ffc0df0ce4185ddab12f4b201c7b07f5e523917d92bf104732c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4327fcf9fb9e27644500f43bdf92d4553f7061676ed9053ab79fbe6d28b0c5ad->leave($__internal_4327fcf9fb9e27644500f43bdf92d4553f7061676ed9053ab79fbe6d28b0c5ad_prof);

        
        $__internal_8e75485b959e8ffc0df0ce4185ddab12f4b201c7b07f5e523917d92bf104732c->leave($__internal_8e75485b959e8ffc0df0ce4185ddab12f4b201c7b07f5e523917d92bf104732c_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a8ae7c2579b67d31560f8cf3e75b9eb94a3147e46f785b94f39cb2cc92bca725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8ae7c2579b67d31560f8cf3e75b9eb94a3147e46f785b94f39cb2cc92bca725->enter($__internal_a8ae7c2579b67d31560f8cf3e75b9eb94a3147e46f785b94f39cb2cc92bca725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_3a218b4fe85bbd92ebd2a4f4d87537eb62a8b9e89c95a4e6b5cacfb5bbf50d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a218b4fe85bbd92ebd2a4f4d87537eb62a8b9e89c95a4e6b5cacfb5bbf50d5a->enter($__internal_3a218b4fe85bbd92ebd2a4f4d87537eb62a8b9e89c95a4e6b5cacfb5bbf50d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 15)->display($context);
        
        $__internal_3a218b4fe85bbd92ebd2a4f4d87537eb62a8b9e89c95a4e6b5cacfb5bbf50d5a->leave($__internal_3a218b4fe85bbd92ebd2a4f4d87537eb62a8b9e89c95a4e6b5cacfb5bbf50d5a_prof);

        
        $__internal_a8ae7c2579b67d31560f8cf3e75b9eb94a3147e46f785b94f39cb2cc92bca725->leave($__internal_a8ae7c2579b67d31560f8cf3e75b9eb94a3147e46f785b94f39cb2cc92bca725_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_3545df57f48292d3a3cc3b91ad8fca4983c84f96027c2702d7083f609017aa95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3545df57f48292d3a3cc3b91ad8fca4983c84f96027c2702d7083f609017aa95->enter($__internal_3545df57f48292d3a3cc3b91ad8fca4983c84f96027c2702d7083f609017aa95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_56d8faaace87281d9a0d79c7c7dcda76169e3b8808bc5baac3f13d933717c78f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d8faaace87281d9a0d79c7c7dcda76169e3b8808bc5baac3f13d933717c78f->enter($__internal_56d8faaace87281d9a0d79c7c7dcda76169e3b8808bc5baac3f13d933717c78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_56d8faaace87281d9a0d79c7c7dcda76169e3b8808bc5baac3f13d933717c78f->leave($__internal_56d8faaace87281d9a0d79c7c7dcda76169e3b8808bc5baac3f13d933717c78f_prof);

        
        $__internal_3545df57f48292d3a3cc3b91ad8fca4983c84f96027c2702d7083f609017aa95->leave($__internal_3545df57f48292d3a3cc3b91ad8fca4983c84f96027c2702d7083f609017aa95_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_297b860ffdc8cb76c62d5cfa377a1eb3b799c3cd26e2a89c5d3e69ecb812e450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_297b860ffdc8cb76c62d5cfa377a1eb3b799c3cd26e2a89c5d3e69ecb812e450->enter($__internal_297b860ffdc8cb76c62d5cfa377a1eb3b799c3cd26e2a89c5d3e69ecb812e450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e59fa8ff421a65a2e8a4c812282dc36659166f95f0dade0937f32dc9ddc9523d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e59fa8ff421a65a2e8a4c812282dc36659166f95f0dade0937f32dc9ddc9523d->enter($__internal_e59fa8ff421a65a2e8a4c812282dc36659166f95f0dade0937f32dc9ddc9523d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                ";
        // line 24
        if ( !((isset($context["batch_translation_domain"]) ? $context["batch_translation_domain"] : $this->getContext($context, "batch_translation_domain")) === false)) {
            // line 25
            echo "                    ";
            $context["action_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["action_label"]) ? $context["action_label"] : $this->getContext($context, "action_label")), array(), (isset($context["batch_translation_domain"]) ? $context["batch_translation_domain"] : $this->getContext($context, "batch_translation_domain")));
            // line 26
            echo "                ";
        }
        // line 27
        echo "                <h4 class=\"box-title\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("title_batch_confirmation", array("%action%" => (isset($context["action_label"]) ? $context["action_label"] : $this->getContext($context, "action_label"))), "SonataAdminBundle");
        echo "</h4>
            </div>
            <div class=\"box-body\">
                ";
        // line 30
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "all_elements", array())) {
            // line 31
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                ";
        } else {
            // line 33
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx", array())), array("%count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx", array()))), "SonataAdminBundle");
            // line 34
            echo "                ";
        }
        // line 35
        echo "            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
        echo "\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <div style=\"display: none\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                    ";
        // line 48
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
            // line 49
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 55
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_e59fa8ff421a65a2e8a4c812282dc36659166f95f0dade0937f32dc9ddc9523d->leave($__internal_e59fa8ff421a65a2e8a4c812282dc36659166f95f0dade0937f32dc9ddc9523d_prof);

        
        $__internal_297b860ffdc8cb76c62d5cfa377a1eb3b799c3cd26e2a89c5d3e69ecb812e450->leave($__internal_297b860ffdc8cb76c62d5cfa377a1eb3b799c3cd26e2a89c5d3e69ecb812e450_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 55,  163 => 52,  159 => 51,  153 => 49,  151 => 48,  146 => 46,  140 => 43,  134 => 40,  130 => 39,  125 => 37,  121 => 35,  118 => 34,  115 => 33,  109 => 31,  107 => 30,  100 => 27,  97 => 26,  94 => 25,  92 => 24,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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
                {% if batch_translation_domain is not same as(false) %}
                    {% set action_label = action_label|trans({}, batch_translation_domain) %}
                {% endif %}
                <h4 class=\"box-title\">{% trans with {'%action%': action_label} from 'SonataAdminBundle' %}title_batch_confirmation{% endtrans %}</h4>
            </div>
            <div class=\"box-body\">
                {% if data.all_elements %}
                    {{ 'message_batch_all_confirmation'|trans({}, 'SonataAdminBundle') }}
                {% else %}
                    {% transchoice data.idx|length with {'%count%': data.idx|length} from 'SonataAdminBundle' %}message_batch_confirmation{% endtranschoice %}
                {% endif %}
            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"{{ data|json_encode }}\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <div style=\"display: none\">
                        {{ form_rest(form) }}
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">{{ 'btn_execute_batch_action'|trans({}, 'SonataAdminBundle') }}</button>

                    {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateUrl('list') }}\">
                            <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}
                        </a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/batch_confirmation.html.twig");
    }
}
