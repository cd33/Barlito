<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_5110ee4dbc38af95af12c89991198150b3893b0e09a0af149c0111a57b6cbf6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b7b22f231395a7978fc0cbe256f33a2833d03cfb6e471775b7504bb72c82435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b7b22f231395a7978fc0cbe256f33a2833d03cfb6e471775b7504bb72c82435->enter($__internal_5b7b22f231395a7978fc0cbe256f33a2833d03cfb6e471775b7504bb72c82435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_15bcaff6377eb897d363dfa7d48c348c28b7edefe06f39fdb0ea054f93642793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15bcaff6377eb897d363dfa7d48c348c28b7edefe06f39fdb0ea054f93642793->enter($__internal_15bcaff6377eb897d363dfa7d48c348c28b7edefe06f39fdb0ea054f93642793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b7b22f231395a7978fc0cbe256f33a2833d03cfb6e471775b7504bb72c82435->leave($__internal_5b7b22f231395a7978fc0cbe256f33a2833d03cfb6e471775b7504bb72c82435_prof);

        
        $__internal_15bcaff6377eb897d363dfa7d48c348c28b7edefe06f39fdb0ea054f93642793->leave($__internal_15bcaff6377eb897d363dfa7d48c348c28b7edefe06f39fdb0ea054f93642793_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f141c17527ceb844ca0551115adc4829dd00b2d9d65799e610bf417406a27918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f141c17527ceb844ca0551115adc4829dd00b2d9d65799e610bf417406a27918->enter($__internal_f141c17527ceb844ca0551115adc4829dd00b2d9d65799e610bf417406a27918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_7fd2069b828ca87ce1e6354a8c00ac1651573564c7195a15e68affd58cc8f015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd2069b828ca87ce1e6354a8c00ac1651573564c7195a15e68affd58cc8f015->enter($__internal_7fd2069b828ca87ce1e6354a8c00ac1651573564c7195a15e68affd58cc8f015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_7fd2069b828ca87ce1e6354a8c00ac1651573564c7195a15e68affd58cc8f015->leave($__internal_7fd2069b828ca87ce1e6354a8c00ac1651573564c7195a15e68affd58cc8f015_prof);

        
        $__internal_f141c17527ceb844ca0551115adc4829dd00b2d9d65799e610bf417406a27918->leave($__internal_f141c17527ceb844ca0551115adc4829dd00b2d9d65799e610bf417406a27918_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d64e54c6cb902bfaf9b5c9a60a2da45435fc81e6c3bbeead06bc5b17eefaca1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d64e54c6cb902bfaf9b5c9a60a2da45435fc81e6c3bbeead06bc5b17eefaca1->enter($__internal_0d64e54c6cb902bfaf9b5c9a60a2da45435fc81e6c3bbeead06bc5b17eefaca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c4bb9ddb091b21d329df8d768a285f4da5f9cee37bc035b504539e28e10abd0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4bb9ddb091b21d329df8d768a285f4da5f9cee37bc035b504539e28e10abd0c->enter($__internal_c4bb9ddb091b21d329df8d768a285f4da5f9cee37bc035b504539e28e10abd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c4bb9ddb091b21d329df8d768a285f4da5f9cee37bc035b504539e28e10abd0c->leave($__internal_c4bb9ddb091b21d329df8d768a285f4da5f9cee37bc035b504539e28e10abd0c_prof);

        
        $__internal_0d64e54c6cb902bfaf9b5c9a60a2da45435fc81e6c3bbeead06bc5b17eefaca1->leave($__internal_0d64e54c6cb902bfaf9b5c9a60a2da45435fc81e6c3bbeead06bc5b17eefaca1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
