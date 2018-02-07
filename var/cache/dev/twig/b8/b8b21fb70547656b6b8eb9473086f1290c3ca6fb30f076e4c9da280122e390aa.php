<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_c1150478469e5e24d4ce7451124939a9e5a4800da93c1916dc3f8833e4855448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72eece8ef176973686604977869cf17a98f0c2a38e2446b539304e0a2ceccb69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72eece8ef176973686604977869cf17a98f0c2a38e2446b539304e0a2ceccb69->enter($__internal_72eece8ef176973686604977869cf17a98f0c2a38e2446b539304e0a2ceccb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $__internal_4cdca36f189add35e7b68132d22d5f303abf2a4b6366fcdff8393ec9aab09b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdca36f189add35e7b68132d22d5f303abf2a4b6366fcdff8393ec9aab09b92->enter($__internal_4cdca36f189add35e7b68132d22d5f303abf2a4b6366fcdff8393ec9aab09b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72eece8ef176973686604977869cf17a98f0c2a38e2446b539304e0a2ceccb69->leave($__internal_72eece8ef176973686604977869cf17a98f0c2a38e2446b539304e0a2ceccb69_prof);

        
        $__internal_4cdca36f189add35e7b68132d22d5f303abf2a4b6366fcdff8393ec9aab09b92->leave($__internal_4cdca36f189add35e7b68132d22d5f303abf2a4b6366fcdff8393ec9aab09b92_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8a7262bf10089287bb892f86393ee94d2e7769d08c90046c63ac1fc011d9b44c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a7262bf10089287bb892f86393ee94d2e7769d08c90046c63ac1fc011d9b44c->enter($__internal_8a7262bf10089287bb892f86393ee94d2e7769d08c90046c63ac1fc011d9b44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_3d53d8130fc1376fc4cb3469ffb0a31450b843b1ac0e2934dcee814d224c398b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d53d8130fc1376fc4cb3469ffb0a31450b843b1ac0e2934dcee814d224c398b->enter($__internal_3d53d8130fc1376fc4cb3469ffb0a31450b843b1ac0e2934dcee814d224c398b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_3d53d8130fc1376fc4cb3469ffb0a31450b843b1ac0e2934dcee814d224c398b->leave($__internal_3d53d8130fc1376fc4cb3469ffb0a31450b843b1ac0e2934dcee814d224c398b_prof);

        
        $__internal_8a7262bf10089287bb892f86393ee94d2e7769d08c90046c63ac1fc011d9b44c->leave($__internal_8a7262bf10089287bb892f86393ee94d2e7769d08c90046c63ac1fc011d9b44c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "SonataAdminBundle:CRUD:list__select.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__select.html.twig");
    }
}
