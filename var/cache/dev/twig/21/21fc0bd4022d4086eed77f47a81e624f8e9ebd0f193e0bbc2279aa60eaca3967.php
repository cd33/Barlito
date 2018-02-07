<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_4d8e0435dbc9c18cdbc3975b434e536f6e73f152615f0be103cc72ad43f6c199 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0456c8d1b1a757a37d55c8be245d44433492a8696e7342fb3abce0d0fd2b2321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0456c8d1b1a757a37d55c8be245d44433492a8696e7342fb3abce0d0fd2b2321->enter($__internal_0456c8d1b1a757a37d55c8be245d44433492a8696e7342fb3abce0d0fd2b2321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_487cabab04b61c129a25b4c475a141453dd3a8ceea047b8f31c7cf38618adcc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_487cabab04b61c129a25b4c475a141453dd3a8ceea047b8f31c7cf38618adcc2->enter($__internal_487cabab04b61c129a25b4c475a141453dd3a8ceea047b8f31c7cf38618adcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0456c8d1b1a757a37d55c8be245d44433492a8696e7342fb3abce0d0fd2b2321->leave($__internal_0456c8d1b1a757a37d55c8be245d44433492a8696e7342fb3abce0d0fd2b2321_prof);

        
        $__internal_487cabab04b61c129a25b4c475a141453dd3a8ceea047b8f31c7cf38618adcc2->leave($__internal_487cabab04b61c129a25b4c475a141453dd3a8ceea047b8f31c7cf38618adcc2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec572738abc10257166a9f391540c43bfafa8c35fa4c1e5ad08965db1b88d1c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec572738abc10257166a9f391540c43bfafa8c35fa4c1e5ad08965db1b88d1c1->enter($__internal_ec572738abc10257166a9f391540c43bfafa8c35fa4c1e5ad08965db1b88d1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_05c2569911e8a64aab06ba9d0b39c67e71ff847a5942b8d4631c74cbd132be6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c2569911e8a64aab06ba9d0b39c67e71ff847a5942b8d4631c74cbd132be6d->enter($__internal_05c2569911e8a64aab06ba9d0b39c67e71ff847a5942b8d4631c74cbd132be6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_05c2569911e8a64aab06ba9d0b39c67e71ff847a5942b8d4631c74cbd132be6d->leave($__internal_05c2569911e8a64aab06ba9d0b39c67e71ff847a5942b8d4631c74cbd132be6d_prof);

        
        $__internal_ec572738abc10257166a9f391540c43bfafa8c35fa4c1e5ad08965db1b88d1c1->leave($__internal_ec572738abc10257166a9f391540c43bfafa8c35fa4c1e5ad08965db1b88d1c1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b29e39ded9d05540b57cddcb495d87999b85db9ef79bbf02c13f6fb22fc56df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29e39ded9d05540b57cddcb495d87999b85db9ef79bbf02c13f6fb22fc56df8->enter($__internal_b29e39ded9d05540b57cddcb495d87999b85db9ef79bbf02c13f6fb22fc56df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7fc2ce0f64aa97677ff28615065f0ed9bd47a492405fa7f13859759066d2ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fc2ce0f64aa97677ff28615065f0ed9bd47a492405fa7f13859759066d2ae8->enter($__internal_d7fc2ce0f64aa97677ff28615065f0ed9bd47a492405fa7f13859759066d2ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d7fc2ce0f64aa97677ff28615065f0ed9bd47a492405fa7f13859759066d2ae8->leave($__internal_d7fc2ce0f64aa97677ff28615065f0ed9bd47a492405fa7f13859759066d2ae8_prof);

        
        $__internal_b29e39ded9d05540b57cddcb495d87999b85db9ef79bbf02c13f6fb22fc56df8->leave($__internal_b29e39ded9d05540b57cddcb495d87999b85db9ef79bbf02c13f6fb22fc56df8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
