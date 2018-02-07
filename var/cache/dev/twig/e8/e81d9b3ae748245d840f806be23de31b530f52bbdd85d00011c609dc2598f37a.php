<?php

/* SonataAdminBundle:CRUD:base_history.html.twig */
class __TwigTemplate_9e241190c6562ab983d101f72cc498c7d8eea11f19ac92796696ff7d92ecc984 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_history.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47cca3169c1916ce24917ecd6eec7dd2953ef5725d19af47040b59f0552acf15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47cca3169c1916ce24917ecd6eec7dd2953ef5725d19af47040b59f0552acf15->enter($__internal_47cca3169c1916ce24917ecd6eec7dd2953ef5725d19af47040b59f0552acf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_history.html.twig"));

        $__internal_5d3e928d7cda53c15401688cb01799e7881fe4d1170c5cec06d0347c70c76174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3e928d7cda53c15401688cb01799e7881fe4d1170c5cec06d0347c70c76174->enter($__internal_5d3e928d7cda53c15401688cb01799e7881fe4d1170c5cec06d0347c70c76174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_history.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47cca3169c1916ce24917ecd6eec7dd2953ef5725d19af47040b59f0552acf15->leave($__internal_47cca3169c1916ce24917ecd6eec7dd2953ef5725d19af47040b59f0552acf15_prof);

        
        $__internal_5d3e928d7cda53c15401688cb01799e7881fe4d1170c5cec06d0347c70c76174->leave($__internal_5d3e928d7cda53c15401688cb01799e7881fe4d1170c5cec06d0347c70c76174_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_9f754c26a091a5251c801a5cc05bd161b24093112a6ab907672915b86968d458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f754c26a091a5251c801a5cc05bd161b24093112a6ab907672915b86968d458->enter($__internal_9f754c26a091a5251c801a5cc05bd161b24093112a6ab907672915b86968d458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_5fe213dea31568c2dcff6049f02d5c7f8a60ceffb9fbc7a8166428f6f0fd93c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe213dea31568c2dcff6049f02d5c7f8a60ceffb9fbc7a8166428f6f0fd93c3->enter($__internal_5fe213dea31568c2dcff6049f02d5c7f8a60ceffb9fbc7a8166428f6f0fd93c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_history.html.twig", 15)->display($context);
        
        $__internal_5fe213dea31568c2dcff6049f02d5c7f8a60ceffb9fbc7a8166428f6f0fd93c3->leave($__internal_5fe213dea31568c2dcff6049f02d5c7f8a60ceffb9fbc7a8166428f6f0fd93c3_prof);

        
        $__internal_9f754c26a091a5251c801a5cc05bd161b24093112a6ab907672915b86968d458->leave($__internal_9f754c26a091a5251c801a5cc05bd161b24093112a6ab907672915b86968d458_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_a09b2809d672aaf5fdfe2baf4c9396c7b642585d725ada9ea166633ae44f89b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a09b2809d672aaf5fdfe2baf4c9396c7b642585d725ada9ea166633ae44f89b1->enter($__internal_a09b2809d672aaf5fdfe2baf4c9396c7b642585d725ada9ea166633ae44f89b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_be7a454d361820622f51cc24dac955eb7cd23e59dec8b6de60746d916ceb2931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7a454d361820622f51cc24dac955eb7cd23e59dec8b6de60746d916ceb2931->enter($__internal_be7a454d361820622f51cc24dac955eb7cd23e59dec8b6de60746d916ceb2931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "
    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"box box-primary\">
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\" id=\"revisions\">
                        <thead>
                        <tr>
                            <th>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_revision", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_timestamp", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                            <th>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("td_compare", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 36
            echo "                            <tr class=\"";
            if ((((isset($context["currentRevision"]) ? $context["currentRevision"] : $this->getContext($context, "currentRevision")) != false) && ($this->getAttribute($context["revision"], "rev", array()) == $this->getAttribute((isset($context["currentRevision"]) ? $context["currentRevision"] : $this->getContext($context, "currentRevision")), "rev", array())))) {
                echo "current-revision";
            }
            echo "\">
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "rev", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "history_revision_timestamp"), "method"), "SonataAdminBundle:CRUD:base_history.html.twig", 38)->display($context);
            echo "</td>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, (($this->getAttribute($context["revision"], "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["revision"], "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_unknown_user", array(), "SonataAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_unknown_user", array(), "SonataAdminBundle"))), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history_view_revision", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => array("revision" => $this->getAttribute($context["revision"], "rev", array()))), "method"), "html", null, true);
            echo "\" class=\"revision-link\" rel=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "rev", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_view_revision", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a></td>
                                <td>
                                    ";
            // line 42
            if ((((isset($context["currentRevision"]) ? $context["currentRevision"] : $this->getContext($context, "currentRevision")) == false) || ($this->getAttribute($context["revision"], "rev", array()) == $this->getAttribute((isset($context["currentRevision"]) ? $context["currentRevision"] : $this->getContext($context, "currentRevision")), "rev", array())))) {
                // line 43
                echo "                                        /
                                    ";
            } else {
                // line 45
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history_compare_revisions", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => array("base_revision" => $this->getAttribute((isset($context["currentRevision"]) ? $context["currentRevision"] : $this->getContext($context, "currentRevision")), "rev", array()), "compare_revision" => $this->getAttribute($context["revision"], "rev", array()))), "method"), "html", null, true);
                echo "\" class=\"revision-compare-link\" rel=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["revision"], "rev", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_compare_revision", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
                                    ";
            }
            // line 47
            echo "                                </td>
                            </tr>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id=\"revision-detail\" class=\"col-md-7 revision-detail\">

        </div>
    </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('a.revision-link, a.revision-compare-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                action = jQuery(this).hasClass('revision-link')
                    ? 'show'
                    : 'compare';

                jQuery('#revision-detail').html('');

                if(action == 'show'){
                    jQuery('table#revisions tbody tr').removeClass('current');
                    jQuery(this).parent('').removeClass('current');
                }

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            });

        });
    </script>
";
        
        $__internal_be7a454d361820622f51cc24dac955eb7cd23e59dec8b6de60746d916ceb2931->leave($__internal_be7a454d361820622f51cc24dac955eb7cd23e59dec8b6de60746d916ceb2931_prof);

        
        $__internal_a09b2809d672aaf5fdfe2baf4c9396c7b642585d725ada9ea166633ae44f89b1->leave($__internal_a09b2809d672aaf5fdfe2baf4c9396c7b642585d725ada9ea166633ae44f89b1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 50,  162 => 47,  152 => 45,  148 => 43,  146 => 42,  137 => 40,  133 => 39,  129 => 38,  125 => 37,  118 => 36,  101 => 35,  94 => 31,  90 => 30,  86 => 29,  82 => 28,  78 => 27,  68 => 19,  59 => 18,  49 => 15,  40 => 14,  19 => 12,);
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

{% block content %}

    <div class=\"row\">
        <div class=\"col-md-5\">
            <div class=\"box box-primary\">
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\" id=\"revisions\">
                        <thead>
                        <tr>
                            <th>{{ 'td_revision'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_timestamp'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_username'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_action'|trans({}, 'SonataAdminBundle') }}</th>
                            <th>{{ 'td_compare'|trans({}, 'SonataAdminBundle') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for revision in revisions %}
                            <tr class=\"{% if (currentRevision != false and revision.rev == currentRevision.rev) %}current-revision{% endif %}\">
                                <td>{{ revision.rev }}</td>
                                <td>{% include admin.getTemplate('history_revision_timestamp') %}</td>
                                <td>{{ revision.username|default('label_unknown_user'|trans({}, 'SonataAdminBundle')) }}</td>
                                <td><a href=\"{{ admin.generateObjectUrl('history_view_revision', object, {'revision': revision.rev }) }}\" class=\"revision-link\" rel=\"{{ revision.rev }}\">{{ \"label_view_revision\"|trans({}, 'SonataAdminBundle') }}</a></td>
                                <td>
                                    {% if (currentRevision == false or revision.rev == currentRevision.rev) %}
                                        /
                                    {% else %}
                                        <a href=\"{{ admin.generateObjectUrl('history_compare_revisions', object, {'base_revision': currentRevision.rev, 'compare_revision': revision.rev }) }}\" class=\"revision-compare-link\" rel=\"{{ revision.rev }}\">{{ 'label_compare_revision'|trans({}, 'SonataAdminBundle') }}</a>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id=\"revision-detail\" class=\"col-md-7 revision-detail\">

        </div>
    </div>

    <script>
        jQuery(document).ready(function() {

            jQuery('a.revision-link, a.revision-compare-link').bind('click', function(event) {
                event.stopPropagation();
                event.preventDefault();

                action = jQuery(this).hasClass('revision-link')
                    ? 'show'
                    : 'compare';

                jQuery('#revision-detail').html('');

                if(action == 'show'){
                    jQuery('table#revisions tbody tr').removeClass('current');
                    jQuery(this).parent('').removeClass('current');
                }

                jQuery.ajax({
                    url: jQuery(this).attr('href'),
                    dataType: 'html',
                    success: function(data) {
                        jQuery('#revision-detail').html(data);
                    }
                });

                return false;
            });

        });
    </script>
{% endblock %}
", "SonataAdminBundle:CRUD:base_history.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_history.html.twig");
    }
}
