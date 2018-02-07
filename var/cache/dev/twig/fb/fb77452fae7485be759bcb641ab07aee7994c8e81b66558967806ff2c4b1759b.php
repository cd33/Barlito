<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_755229d9c5ac4eb91455460eeb32dae82c63494a3aa77144144fcdb60e407020 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:Core:search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e23bbfc18cd04c9d999fe463f511658cc84a9fba067c7f2dec7ba5763706b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e23bbfc18cd04c9d999fe463f511658cc84a9fba067c7f2dec7ba5763706b36->enter($__internal_4e23bbfc18cd04c9d999fe463f511658cc84a9fba067c7f2dec7ba5763706b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $__internal_ee8b427573f87d593828a22ba9792f4fabc1944171f903061759d71bda3b25e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee8b427573f87d593828a22ba9792f4fabc1944171f903061759d71bda3b25e5->enter($__internal_ee8b427573f87d593828a22ba9792f4fabc1944171f903061759d71bda3b25e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e23bbfc18cd04c9d999fe463f511658cc84a9fba067c7f2dec7ba5763706b36->leave($__internal_4e23bbfc18cd04c9d999fe463f511658cc84a9fba067c7f2dec7ba5763706b36_prof);

        
        $__internal_ee8b427573f87d593828a22ba9792f4fabc1944171f903061759d71bda3b25e5->leave($__internal_ee8b427573f87d593828a22ba9792f4fabc1944171f903061759d71bda3b25e5_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_b57b6b80a472a8bc834a85a5a70f22f40578c061ce148ef70e36ef20726748e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b57b6b80a472a8bc834a85a5a70f22f40578c061ce148ef70e36ef20726748e0->enter($__internal_b57b6b80a472a8bc834a85a5a70f22f40578c061ce148ef70e36ef20726748e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_371e830a98013072464bd783065a08eae9ce302019a2821b7bed56406e7fb8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371e830a98013072464bd783065a08eae9ce302019a2821b7bed56406e7fb8db->enter($__internal_371e830a98013072464bd783065a08eae9ce302019a2821b7bed56406e7fb8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        
        $__internal_371e830a98013072464bd783065a08eae9ce302019a2821b7bed56406e7fb8db->leave($__internal_371e830a98013072464bd783065a08eae9ce302019a2821b7bed56406e7fb8db_prof);

        
        $__internal_b57b6b80a472a8bc834a85a5a70f22f40578c061ce148ef70e36ef20726748e0->leave($__internal_b57b6b80a472a8bc834a85a5a70f22f40578c061ce148ef70e36ef20726748e0_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_1cbb1af4e4c68f65e18f48d8246a7fa1d86bee88c80a78a23f7a33c4ea9b37ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cbb1af4e4c68f65e18f48d8246a7fa1d86bee88c80a78a23f7a33c4ea9b37ab->enter($__internal_1cbb1af4e4c68f65e18f48d8246a7fa1d86bee88c80a78a23f7a33c4ea9b37ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_cb75bcc373a082586eb084b9234904d4a25651b575936d28a9b99c94874fb23a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb75bcc373a082586eb084b9234904d4a25651b575936d28a9b99c94874fb23a->enter($__internal_cb75bcc373a082586eb084b9234904d4a25651b575936d28a9b99c94874fb23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_cb75bcc373a082586eb084b9234904d4a25651b575936d28a9b99c94874fb23a->leave($__internal_cb75bcc373a082586eb084b9234904d4a25651b575936d28a9b99c94874fb23a_prof);

        
        $__internal_1cbb1af4e4c68f65e18f48d8246a7fa1d86bee88c80a78a23f7a33c4ea9b37ab->leave($__internal_1cbb1af4e4c68f65e18f48d8246a7fa1d86bee88c80a78a23f7a33c4ea9b37ab_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_e03d351e3370a026702384c8807f9baee0fcd6c2527622fd0be3d679b90368ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e03d351e3370a026702384c8807f9baee0fcd6c2527622fd0be3d679b90368ed->enter($__internal_e03d351e3370a026702384c8807f9baee0fcd6c2527622fd0be3d679b90368ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3495953c1388e07496d0d23edc2a7e13f8202d0033df2107bd8fc91f2eaa9d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3495953c1388e07496d0d23edc2a7e13f8202d0033df2107bd8fc91f2eaa9d0e->enter($__internal_3495953c1388e07496d0d23edc2a7e13f8202d0033df2107bd8fc91f2eaa9d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if ((array_key_exists("query", $context) &&  !((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 23
                echo "            ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                        // line 25
                        echo "                ";
                        $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                        // line 26
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "
            ";
                // line 28
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 29
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 30
                        echo "                    ";
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
                        // line 31
                        echo "                    ";
                        if ((($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "hasAccess", array(0 => "create"), "method")) || ($this->getAttribute($context["admin"], "hasRoute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "hasAccess", array(0 => "list"), "method")))) {
                            // line 32
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 35
(isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "admin_code" => $this->getAttribute(                            // line 36
$context["admin"], "code", array()), "page" => 0, "per_page" => 10, "icon" => $this->getAttribute(                            // line 39
$context["group"], "icon", array()))));
                            // line 40
                            echo "
                    ";
                        }
                        // line 42
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "            ";
                }
                // line 44
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        </div>
    ";
        }
        // line 47
        echo "
";
        
        $__internal_3495953c1388e07496d0d23edc2a7e13f8202d0033df2107bd8fc91f2eaa9d0e->leave($__internal_3495953c1388e07496d0d23edc2a7e13f8202d0033df2107bd8fc91f2eaa9d0e_prof);

        
        $__internal_e03d351e3370a026702384c8807f9baee0fcd6c2527622fd0be3d679b90368ed->leave($__internal_e03d351e3370a026702384c8807f9baee0fcd6c2527622fd0be3d679b90368ed_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 47,  163 => 45,  157 => 44,  154 => 43,  148 => 42,  144 => 40,  142 => 39,  141 => 36,  140 => 35,  138 => 32,  135 => 31,  132 => 30,  127 => 29,  125 => 28,  122 => 27,  115 => 26,  112 => 25,  106 => 24,  103 => 23,  99 => 22,  96 => 21,  93 => 20,  91 => 19,  85 => 17,  76 => 16,  59 => 15,  41 => 14,  20 => 12,);
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

{% block title %}{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}{% endblock %}
{% block breadcrumb %}{% endblock %}
{% block content %}
    <h2 class=\"page-header\">{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}</h2>

    {% if query is defined and query is not same as(false) %}
        {% set count = 0 %}
        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        {% for group in groups %}
            {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if display %}
                {% for admin in group.items %}
                    {% set count = count + 1 %}
                    {% if admin.hasRoute('create') and admin.hasAccess('create') or admin.hasRoute('list') and admin.hasAccess('list') %}
                        {{ sonata_block_render({
                            'type': 'sonata.admin.block.search_result'
                        }, {
                            'query': query,
                            'admin_code': admin.code,
                            'page': 0,
                            'per_page': 10,
                            'icon': group.icon
                        }) }}
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endblock %}
", "SonataAdminBundle:Core:search.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/Core/search.html.twig");
    }
}
