<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_e5f8c49848a16fef55ef2221a6bbe5678b54007e9f1ce9e834ff225b0116b6fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80466552031e7f4ae19bf7152490b2960d60d55c24c88165fea3922dd61a8cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80466552031e7f4ae19bf7152490b2960d60d55c24c88165fea3922dd61a8cd2->enter($__internal_80466552031e7f4ae19bf7152490b2960d60d55c24c88165fea3922dd61a8cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $__internal_ecf6452cf70075cbdf54bf2dbada03c9c291785dc41dcf4be7e5e160768fcd2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf6452cf70075cbdf54bf2dbada03c9c291785dc41dcf4be7e5e160768fcd2b->enter($__internal_ecf6452cf70075cbdf54bf2dbada03c9c291785dc41dcf4be7e5e160768fcd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80466552031e7f4ae19bf7152490b2960d60d55c24c88165fea3922dd61a8cd2->leave($__internal_80466552031e7f4ae19bf7152490b2960d60d55c24c88165fea3922dd61a8cd2_prof);

        
        $__internal_ecf6452cf70075cbdf54bf2dbada03c9c291785dc41dcf4be7e5e160768fcd2b->leave($__internal_ecf6452cf70075cbdf54bf2dbada03c9c291785dc41dcf4be7e5e160768fcd2b_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_68818471aea68e1b53e8ad0ea136d7750ff4b532d1345c1ea16d3110bc740126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68818471aea68e1b53e8ad0ea136d7750ff4b532d1345c1ea16d3110bc740126->enter($__internal_68818471aea68e1b53e8ad0ea136d7750ff4b532d1345c1ea16d3110bc740126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_406346973c3aaacf4efe59ddd72180bd100a4869167cfe85912ca5c6e9b349df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406346973c3aaacf4efe59ddd72180bd100a4869167cfe85912ca5c6e9b349df->enter($__internal_406346973c3aaacf4efe59ddd72180bd100a4869167cfe85912ca5c6e9b349df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "SonataBlockBundle:Block:block_exception_debug.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
";
        
        $__internal_406346973c3aaacf4efe59ddd72180bd100a4869167cfe85912ca5c6e9b349df->leave($__internal_406346973c3aaacf4efe59ddd72180bd100a4869167cfe85912ca5c6e9b349df_prof);

        
        $__internal_68818471aea68e1b53e8ad0ea136d7750ff4b532d1345c1ea16d3110bc740126->leave($__internal_68818471aea68e1b53e8ad0ea136d7750ff4b532d1345c1ea16d3110bc740126_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  69 => 22,  64 => 20,  59 => 19,  56 => 18,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"cms-block-exception\" {% if forceStyle %}style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"{% endif %}>

        {# this is dirty but the alternative would require a new block-optimized exception css #}
        {% if forceStyle %}
            <link href=\"{{ asset('bundles/framework/css/exception_layout.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"{{ asset('bundles/framework/css/exception.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        {% endif %}
        {% include 'TwigBundle:Exception:exception.html.twig' %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception_debug.html.twig", "/var/www/html/Barlito/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception_debug.html.twig");
    }
}
