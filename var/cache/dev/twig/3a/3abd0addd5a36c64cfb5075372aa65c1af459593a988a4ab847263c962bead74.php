<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_84744c8702d7872b3524a689359bed9dfba081a1caab9ede47265f1fa8efdd46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_base.html.twig", "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig", 11);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f32de32d96785846897366fd9d016f0d6a39860471e89e49b419fcb2494bc7a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f32de32d96785846897366fd9d016f0d6a39860471e89e49b419fcb2494bc7a3->enter($__internal_f32de32d96785846897366fd9d016f0d6a39860471e89e49b419fcb2494bc7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig"));

        $__internal_9670940813400bc22b4ab37a6d6c8effdd45f68c52e3b25ee5b6eefa286c95b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9670940813400bc22b4ab37a6d6c8effdd45f68c52e3b25ee5b6eefa286c95b1->enter($__internal_9670940813400bc22b4ab37a6d6c8effdd45f68c52e3b25ee5b6eefa286c95b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f32de32d96785846897366fd9d016f0d6a39860471e89e49b419fcb2494bc7a3->leave($__internal_f32de32d96785846897366fd9d016f0d6a39860471e89e49b419fcb2494bc7a3_prof);

        
        $__internal_9670940813400bc22b4ab37a6d6c8effdd45f68c52e3b25ee5b6eefa286c95b1->leave($__internal_9670940813400bc22b4ab37a6d6c8effdd45f68c52e3b25ee5b6eefa286c95b1_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_71b34b9b4d5411018a9e0c8b9b38a3e50e85af192fa9ff5232c543cbbdbcfbd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71b34b9b4d5411018a9e0c8b9b38a3e50e85af192fa9ff5232c543cbbdbcfbd2->enter($__internal_71b34b9b4d5411018a9e0c8b9b38a3e50e85af192fa9ff5232c543cbbdbcfbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_935c196b0ba3206310bf1d3da3d2e18c10c947f1a7dd6d5a93233cd5c71f4298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935c196b0ba3206310bf1d3da3d2e18c10c947f1a7dd6d5a93233cd5c71f4298->enter($__internal_935c196b0ba3206310bf1d3da3d2e18c10c947f1a7dd6d5a93233cd5c71f4298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">
                <i class=\"fa fa-history\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "
            </h3>
        </div>

        <div class=\"box-body\">
            <div class=\"panel-group\" id=\"accordion\">
                ";
        // line 23
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
            // line 24
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["revision"], "revision", array()), "rev", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["revision"], "revision", array()), "username", array()), "html", null, true);
            echo "
                                    - ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["revision"], "revision", array()), "timestamp", array())), "html", null, true);
            echo "
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapse";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse ";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("in") : (""));
            echo "\">
                            <div class=\"panel-body\">
                                <ul>
                                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["revision"], "entities", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 37
                echo "                                        <li>
                                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "entity", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "revisionType", array()), "html", null, true);
                echo "
                                            / ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "className", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["changedEntity"], "id", array()), "id", array()), "html", null, true);
                echo "
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
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
        // line 47
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_935c196b0ba3206310bf1d3da3d2e18c10c947f1a7dd6d5a93233cd5c71f4298->leave($__internal_935c196b0ba3206310bf1d3da3d2e18c10c947f1a7dd6d5a93233cd5c71f4298_prof);

        
        $__internal_71b34b9b4d5411018a9e0c8b9b38a3e50e85af192fa9ff5232c543cbbdbcfbd2->leave($__internal_71b34b9b4d5411018a9e0c8b9b38a3e50e85af192fa9ff5232c543cbbdbcfbd2_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 47,  134 => 42,  123 => 39,  117 => 38,  114 => 37,  110 => 36,  102 => 33,  95 => 29,  89 => 28,  85 => 27,  80 => 24,  63 => 23,  54 => 17,  49 => 14,  40 => 13,  11 => 11,);
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
{% extends 'SonataBlockBundle:Block:block_base.html.twig' %}

{% block block %}
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">
                <i class=\"fa fa-history\"></i> {{ 'title_audit_log'|trans({}, 'SonataAdminBundle') }}
            </h3>
        </div>

        <div class=\"box-body\">
            <div class=\"panel-group\" id=\"accordion\">
                {% for revision in revisions %}
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse{{ loop.index }}\">
                                    {{ revision.revision.rev }} - {{ revision.revision.username }}
                                    - {{ revision.revision.timestamp | date }}
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapse{{ loop.index }}\" class=\"panel-collapse collapse {{ loop.first ? \"in\" : \"\" }}\">
                            <div class=\"panel-body\">
                                <ul>
                                    {% for changedEntity in revision.entities %}
                                        <li>
                                            {{ changedEntity.entity }} / {{ changedEntity.revisionType }}
                                            / {{ changedEntity.className }} - {{ changedEntity.id.id }}
                                        </li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>

{% endblock %}
", "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig", "/var/www/html/Barlito/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/Block/block_audit.html.twig");
    }
}
