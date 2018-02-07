<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6ecb5ca2d02edb9068bc171359d537d3261022933e5d101c31c761f9f5d8a24b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67d193278e7782cc156026b5c9a8547200bbe916e2cf1670d8b85ea81b6b4d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d193278e7782cc156026b5c9a8547200bbe916e2cf1670d8b85ea81b6b4d6e->enter($__internal_67d193278e7782cc156026b5c9a8547200bbe916e2cf1670d8b85ea81b6b4d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_8c33c5702519550bb85a49428bf6213a887fc972c94e535223fbf8a8cf29409e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c33c5702519550bb85a49428bf6213a887fc972c94e535223fbf8a8cf29409e->enter($__internal_8c33c5702519550bb85a49428bf6213a887fc972c94e535223fbf8a8cf29409e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67d193278e7782cc156026b5c9a8547200bbe916e2cf1670d8b85ea81b6b4d6e->leave($__internal_67d193278e7782cc156026b5c9a8547200bbe916e2cf1670d8b85ea81b6b4d6e_prof);

        
        $__internal_8c33c5702519550bb85a49428bf6213a887fc972c94e535223fbf8a8cf29409e->leave($__internal_8c33c5702519550bb85a49428bf6213a887fc972c94e535223fbf8a8cf29409e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_782155aa7a302e614fe71c83ec51cc519ce0f0b91f2bd0589bf89e480c1bee86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782155aa7a302e614fe71c83ec51cc519ce0f0b91f2bd0589bf89e480c1bee86->enter($__internal_782155aa7a302e614fe71c83ec51cc519ce0f0b91f2bd0589bf89e480c1bee86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3d11d3845999c93ec5d795bbce0d5901e0f736b152708fb5ba240a74f8bec004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d11d3845999c93ec5d795bbce0d5901e0f736b152708fb5ba240a74f8bec004->enter($__internal_3d11d3845999c93ec5d795bbce0d5901e0f736b152708fb5ba240a74f8bec004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3d11d3845999c93ec5d795bbce0d5901e0f736b152708fb5ba240a74f8bec004->leave($__internal_3d11d3845999c93ec5d795bbce0d5901e0f736b152708fb5ba240a74f8bec004_prof);

        
        $__internal_782155aa7a302e614fe71c83ec51cc519ce0f0b91f2bd0589bf89e480c1bee86->leave($__internal_782155aa7a302e614fe71c83ec51cc519ce0f0b91f2bd0589bf89e480c1bee86_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
