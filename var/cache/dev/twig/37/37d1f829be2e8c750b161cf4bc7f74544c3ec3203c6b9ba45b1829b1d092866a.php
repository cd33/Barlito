<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_4e45d2b2c06f1ee324ac87a8eb45709580615b022b394c35f065eaeaccceb500 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a35da88abed85104d5db5036bb3f80fee609f11262aee74fea2603c497f2b700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a35da88abed85104d5db5036bb3f80fee609f11262aee74fea2603c497f2b700->enter($__internal_a35da88abed85104d5db5036bb3f80fee609f11262aee74fea2603c497f2b700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $__internal_dbba9e05a3c0cc0ffd4bef4708da1dab18d1f1e71727527b30929f7c60933574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbba9e05a3c0cc0ffd4bef4708da1dab18d1f1e71727527b30929f7c60933574->enter($__internal_dbba9e05a3c0cc0ffd4bef4708da1dab18d1f1e71727527b30929f7c60933574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a35da88abed85104d5db5036bb3f80fee609f11262aee74fea2603c497f2b700->leave($__internal_a35da88abed85104d5db5036bb3f80fee609f11262aee74fea2603c497f2b700_prof);

        
        $__internal_dbba9e05a3c0cc0ffd4bef4708da1dab18d1f1e71727527b30929f7c60933574->leave($__internal_dbba9e05a3c0cc0ffd4bef4708da1dab18d1f1e71727527b30929f7c60933574_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ac46f709e3c1f237fe21eb9d2a8abc9ce6555ba5830410acb2b8f0e89424e38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac46f709e3c1f237fe21eb9d2a8abc9ce6555ba5830410acb2b8f0e89424e38e->enter($__internal_ac46f709e3c1f237fe21eb9d2a8abc9ce6555ba5830410acb2b8f0e89424e38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_688ef2322aca4762c3d4c2753598833c15fb4423c1329bce53d2e2a93f78150c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688ef2322aca4762c3d4c2753598833c15fb4423c1329bce53d2e2a93f78150c->enter($__internal_688ef2322aca4762c3d4c2753598833c15fb4423c1329bce53d2e2a93f78150c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf((isset($context["valueFormat"]) ? $context["valueFormat"] : $this->getContext($context, "valueFormat")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), array(), (isset($context["translationDomain"]) ? $context["translationDomain"] : $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
";
        
        $__internal_688ef2322aca4762c3d4c2753598833c15fb4423c1329bce53d2e2a93f78150c->leave($__internal_688ef2322aca4762c3d4c2753598833c15fb4423c1329bce53d2e2a93f78150c_prof);

        
        $__internal_ac46f709e3c1f237fe21eb9d2a8abc9ce6555ba5830410acb2b8f0e89424e38e->leave($__internal_ac46f709e3c1f237fe21eb9d2a8abc9ce6555ba5830410acb2b8f0e89424e38e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  54 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field%}
    {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}
    {% set valueFormat = field_description.options.format|default('%s') %}

    {{valueFormat|format(value)|trans({}, translationDomain)}}
{% endblock %}
", "SonataAdminBundle:CRUD:list_trans.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_trans.html.twig");
    }
}
