<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_aac7dcca129ecfde71b5e4f922bc7ea04c6a272a1ec4508478689f2024be1ff0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baf3ff9ef0ac69f418e88bd6444fcdb461f5391bafadfdb532d8d3c499fb6127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baf3ff9ef0ac69f418e88bd6444fcdb461f5391bafadfdb532d8d3c499fb6127->enter($__internal_baf3ff9ef0ac69f418e88bd6444fcdb461f5391bafadfdb532d8d3c499fb6127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        $__internal_5e5b21560a75a6bbca5f8fa7decf7c1aacfb6f7f942c50c10f8c9131ff4a2931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5b21560a75a6bbca5f8fa7decf7c1aacfb6f7f942c50c10f8c9131ff4a2931->enter($__internal_5e5b21560a75a6bbca5f8fa7decf7c1aacfb6f7f942c50c10f8c9131ff4a2931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_baf3ff9ef0ac69f418e88bd6444fcdb461f5391bafadfdb532d8d3c499fb6127->leave($__internal_baf3ff9ef0ac69f418e88bd6444fcdb461f5391bafadfdb532d8d3c499fb6127_prof);

        
        $__internal_5e5b21560a75a6bbca5f8fa7decf7c1aacfb6f7f942c50c10f8c9131ff4a2931->leave($__internal_5e5b21560a75a6bbca5f8fa7decf7c1aacfb6f7f942c50c10f8c9131ff4a2931_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_a0c003780236c94e077d3fa786fa3b24ed2aca2d84ab395afee74dd3950a6826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c003780236c94e077d3fa786fa3b24ed2aca2d84ab395afee74dd3950a6826->enter($__internal_a0c003780236c94e077d3fa786fa3b24ed2aca2d84ab395afee74dd3950a6826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cbd5296e4b12fc41e2a0b60f447d568d46f246c9d0fd32d267cf24dc64832bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd5296e4b12fc41e2a0b60f447d568d46f246c9d0fd32d267cf24dc64832bc3->enter($__internal_cbd5296e4b12fc41e2a0b60f447d568d46f246c9d0fd32d267cf24dc64832bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 14
        echo "    ";
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 23
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 28
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 29
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 31
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "                            </div>
                        ";
            }
            // line 35
            echo "
                        ";
            // line 36
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 37
                echo "                            ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                        ";
            }
            // line 39
            echo "                    </div>
                </div>
            </div>
        </div>

        ";
            // line 44
            if (twig_trim_filter((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 45
                echo "            <div class=\"row\">
                ";
                // line 46
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
            </div>
        ";
            }
            // line 49
            echo "
        <div class=\"row\">
            ";
            // line 51
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
        </div>
    </div>
    ";
        }
        
        $__internal_cbd5296e4b12fc41e2a0b60f447d568d46f246c9d0fd32d267cf24dc64832bc3->leave($__internal_cbd5296e4b12fc41e2a0b60f447d568d46f246c9d0fd32d267cf24dc64832bc3_prof);

        
        $__internal_a0c003780236c94e077d3fa786fa3b24ed2aca2d84ab395afee74dd3950a6826->leave($__internal_a0c003780236c94e077d3fa786fa3b24ed2aca2d84ab395afee74dd3950a6826_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_f7355282f804ca5a317a6b44ae513977be8f721b3500957fad7010f74ff39645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7355282f804ca5a317a6b44ae513977be8f721b3500957fad7010f74ff39645->enter($__internal_f7355282f804ca5a317a6b44ae513977be8f721b3500957fad7010f74ff39645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_8dd6d5c43556791498115dcbf21ac721da250ab4daec84af09b934380c4e62d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd6d5c43556791498115dcbf21ac721da250ab4daec84af09b934380c4e62d5->enter($__internal_8dd6d5c43556791498115dcbf21ac721da250ab4daec84af09b934380c4e62d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_8dd6d5c43556791498115dcbf21ac721da250ab4daec84af09b934380c4e62d5->leave($__internal_8dd6d5c43556791498115dcbf21ac721da250ab4daec84af09b934380c4e62d5_prof);

        
        $__internal_f7355282f804ca5a317a6b44ae513977be8f721b3500957fad7010f74ff39645->leave($__internal_f7355282f804ca5a317a6b44ae513977be8f721b3500957fad7010f74ff39645_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_2c47192764e1be6fac5e86bccc84a9e86839455987fa1721bbf67ceb7928dcb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c47192764e1be6fac5e86bccc84a9e86839455987fa1721bbf67ceb7928dcb4->enter($__internal_2c47192764e1be6fac5e86bccc84a9e86839455987fa1721bbf67ceb7928dcb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_07d29b796e4772f73dbd70fe24d03bb769b2e8024cd0d98d2e178002a96b9247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d29b796e4772f73dbd70fe24d03bb769b2e8024cd0d98d2e178002a96b9247->enter($__internal_07d29b796e4772f73dbd70fe24d03bb769b2e8024cd0d98d2e178002a96b9247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_07d29b796e4772f73dbd70fe24d03bb769b2e8024cd0d98d2e178002a96b9247->leave($__internal_07d29b796e4772f73dbd70fe24d03bb769b2e8024cd0d98d2e178002a96b9247_prof);

        
        $__internal_2c47192764e1be6fac5e86bccc84a9e86839455987fa1721bbf67ceb7928dcb4->leave($__internal_2c47192764e1be6fac5e86bccc84a9e86839455987fa1721bbf67ceb7928dcb4_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_9bf531a40de780ee2419f8909ecd2b249ed672b35082e55db322ebffb3ed081a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf531a40de780ee2419f8909ecd2b249ed672b35082e55db322ebffb3ed081a->enter($__internal_9bf531a40de780ee2419f8909ecd2b249ed672b35082e55db322ebffb3ed081a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_f03cb84da1f5e7e5f53b7832c1bf67b814ab0f06c3dfe1b2003484363d809179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03cb84da1f5e7e5f53b7832c1bf67b814ab0f06c3dfe1b2003484363d809179->enter($__internal_f03cb84da1f5e7e5f53b7832c1bf67b814ab0f06c3dfe1b2003484363d809179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_f03cb84da1f5e7e5f53b7832c1bf67b814ab0f06c3dfe1b2003484363d809179->leave($__internal_f03cb84da1f5e7e5f53b7832c1bf67b814ab0f06c3dfe1b2003484363d809179_prof);

        
        $__internal_9bf531a40de780ee2419f8909ecd2b249ed672b35082e55db322ebffb3ed081a->leave($__internal_9bf531a40de780ee2419f8909ecd2b249ed672b35082e55db322ebffb3ed081a_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_6a588d3092b7448c6cbf3abc13a6c6f5d6367bf265538d509e2db4a1e3a260a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a588d3092b7448c6cbf3abc13a6c6f5d6367bf265538d509e2db4a1e3a260a4->enter($__internal_6a588d3092b7448c6cbf3abc13a6c6f5d6367bf265538d509e2db4a1e3a260a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_eb14a085f6d3b66dbd68603699f8ad9d8c0341f2ef51be808c65af4be5218527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb14a085f6d3b66dbd68603699f8ad9d8c0341f2ef51be808c65af4be5218527->enter($__internal_eb14a085f6d3b66dbd68603699f8ad9d8c0341f2ef51be808c65af4be5218527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_eb14a085f6d3b66dbd68603699f8ad9d8c0341f2ef51be808c65af4be5218527->leave($__internal_eb14a085f6d3b66dbd68603699f8ad9d8c0341f2ef51be808c65af4be5218527_prof);

        
        $__internal_6a588d3092b7448c6cbf3abc13a6c6f5d6367bf265538d509e2db4a1e3a260a4->leave($__internal_6a588d3092b7448c6cbf3abc13a6c6f5d6367bf265538d509e2db4a1e3a260a4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 20,  196 => 19,  179 => 18,  162 => 17,  147 => 51,  143 => 49,  137 => 46,  134 => 45,  132 => 44,  125 => 39,  119 => 37,  117 => 36,  114 => 35,  110 => 33,  95 => 31,  91 => 30,  88 => 29,  86 => 28,  79 => 23,  77 => 22,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  33 => 12,  30 => 11,);
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

{% block content %}
    {% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
    {% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
    {% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}

    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
            <div class=\"row\">
                {{ _list_filters|raw }}
            </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle::ajax_layout.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/ajax_layout.html.twig");
    }
}
