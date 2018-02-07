<?php

/* SonataAdminBundle:CRUD:select_subclass.html.twig */
class __TwigTemplate_b92ca767b7eca8fe16a595098007cd749fac17cf6c62644cd1af08a49a6d27b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:select_subclass.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ded4314c161ca7dbff3627b9c0ddb1a7ea59df4be6a30fed966f8f7e05de1d10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded4314c161ca7dbff3627b9c0ddb1a7ea59df4be6a30fed966f8f7e05de1d10->enter($__internal_ded4314c161ca7dbff3627b9c0ddb1a7ea59df4be6a30fed966f8f7e05de1d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $__internal_034048b204a0e456a043da5c606bc09b719671b22b5d1634ddf014d00b5a85d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034048b204a0e456a043da5c606bc09b719671b22b5d1634ddf014d00b5a85d4->enter($__internal_034048b204a0e456a043da5c606bc09b719671b22b5d1634ddf014d00b5a85d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ded4314c161ca7dbff3627b9c0ddb1a7ea59df4be6a30fed966f8f7e05de1d10->leave($__internal_ded4314c161ca7dbff3627b9c0ddb1a7ea59df4be6a30fed966f8f7e05de1d10_prof);

        
        $__internal_034048b204a0e456a043da5c606bc09b719671b22b5d1634ddf014d00b5a85d4->leave($__internal_034048b204a0e456a043da5c606bc09b719671b22b5d1634ddf014d00b5a85d4_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_0861b4bfedbea5ccf7f495583a8439d0095c2995cdac3e9c68400d0c538f1af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0861b4bfedbea5ccf7f495583a8439d0095c2995cdac3e9c68400d0c538f1af2->enter($__internal_0861b4bfedbea5ccf7f495583a8439d0095c2995cdac3e9c68400d0c538f1af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8a697ff2980623ad3546df7c0661d59ea6fd58e6d146f704af874827b8aea5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a697ff2980623ad3546df7c0661d59ea6fd58e6d146f704af874827b8aea5c->enter($__internal_b8a697ff2980623ad3546df7c0661d59ea6fd58e6d146f704af874827b8aea5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_subclass", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_b8a697ff2980623ad3546df7c0661d59ea6fd58e6d146f704af874827b8aea5c->leave($__internal_b8a697ff2980623ad3546df7c0661d59ea6fd58e6d146f704af874827b8aea5c_prof);

        
        $__internal_0861b4bfedbea5ccf7f495583a8439d0095c2995cdac3e9c68400d0c538f1af2->leave($__internal_0861b4bfedbea5ccf7f495583a8439d0095c2995cdac3e9c68400d0c538f1af2_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_a9a22892b6f1a4aa8badde84a18470b95ba98d7566dbed9abbd799c730206a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a22892b6f1a4aa8badde84a18470b95ba98d7566dbed9abbd799c730206a11->enter($__internal_a9a22892b6f1a4aa8badde84a18470b95ba98d7566dbed9abbd799c730206a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7a1d81f5ff0204a39234e26af23fdf2e8feb34695d8abe43247a9d1dff4df1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1d81f5ff0204a39234e26af23fdf2e8feb34695d8abe43247a9d1dff4df1b1->enter($__internal_7a1d81f5ff0204a39234e26af23fdf2e8feb34695d8abe43247a9d1dff4df1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                ";
        // line 19
        $this->displayBlock("title", $context, $blocks);
        echo "
            </h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
            // line 24
            echo "                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
            echo "\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                <span class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_subclass_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_7a1d81f5ff0204a39234e26af23fdf2e8feb34695d8abe43247a9d1dff4df1b1->leave($__internal_7a1d81f5ff0204a39234e26af23fdf2e8feb34695d8abe43247a9d1dff4df1b1_prof);

        
        $__internal_a9a22892b6f1a4aa8badde84a18470b95ba98d7566dbed9abbd799c730206a11->leave($__internal_a9a22892b6f1a4aa8badde84a18470b95ba98d7566dbed9abbd799c730206a11_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:select_subclass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  103 => 33,  94 => 29,  87 => 25,  84 => 24,  79 => 23,  72 => 19,  67 => 16,  58 => 15,  40 => 13,  19 => 11,);
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

{% block title %}{{ 'title_select_subclass'|trans({}, 'SonataAdminBundle') }}{% endblock %}

{% block content %}
    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                {{ block('title') }}
            </h3>
        </div>
        <div class=\"box-body\">
            {% for subclass in admin.subclasses|keys %}
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"{{ admin.generateUrl(action, {'subclass': subclass }) }}\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        {{ subclass|trans({}, admin.translationdomain|default('SonataAdminBundle')) }}
                    </a>
                </div>
            {% else %}
                <span class=\"alert alert-info\">{{ 'no_subclass_available'|trans({}, 'SonataAdminBundle') }}</span>
            {% endfor %}
            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:select_subclass.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/select_subclass.html.twig");
    }
}
