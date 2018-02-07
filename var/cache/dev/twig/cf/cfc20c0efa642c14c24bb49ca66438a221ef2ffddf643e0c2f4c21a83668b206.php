<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_c3b7b95ef1e5ac4a2a7fdd79fcb0e536600fe8b18386ba5e793a187177ebbb62 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_974f1421ecd47a85631621691c8a1327dc97af71d50f35770a4194c971f9db83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974f1421ecd47a85631621691c8a1327dc97af71d50f35770a4194c971f9db83->enter($__internal_974f1421ecd47a85631621691c8a1327dc97af71d50f35770a4194c971f9db83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $__internal_270e5a9b6de02c96c3eb8e907ca10bae19341bc935e115af8a1f4d7da971ef20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270e5a9b6de02c96c3eb8e907ca10bae19341bc935e115af8a1f4d7da971ef20->enter($__internal_270e5a9b6de02c96c3eb8e907ca10bae19341bc935e115af8a1f4d7da971ef20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_974f1421ecd47a85631621691c8a1327dc97af71d50f35770a4194c971f9db83->leave($__internal_974f1421ecd47a85631621691c8a1327dc97af71d50f35770a4194c971f9db83_prof);

        
        $__internal_270e5a9b6de02c96c3eb8e907ca10bae19341bc935e115af8a1f4d7da971ef20->leave($__internal_270e5a9b6de02c96c3eb8e907ca10bae19341bc935e115af8a1f4d7da971ef20_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_0fc57ee2e6f2d41a5ce73b9d9064964140393d52f0e4a206076704ecc3615461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc57ee2e6f2d41a5ce73b9d9064964140393d52f0e4a206076704ecc3615461->enter($__internal_0fc57ee2e6f2d41a5ce73b9d9064964140393d52f0e4a206076704ecc3615461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_c84853d1094200192361fe411636e5a2d5c581ceacdf3bd6dc0f5521fd08c8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84853d1094200192361fe411636e5a2d5c581ceacdf3bd6dc0f5521fd08c8a7->enter($__internal_c84853d1094200192361fe411636e5a2d5c581ceacdf3bd6dc0f5521fd08c8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_c84853d1094200192361fe411636e5a2d5c581ceacdf3bd6dc0f5521fd08c8a7->leave($__internal_c84853d1094200192361fe411636e5a2d5c581ceacdf3bd6dc0f5521fd08c8a7_prof);

        
        $__internal_0fc57ee2e6f2d41a5ce73b9d9064964140393d52f0e4a206076704ecc3615461->leave($__internal_0fc57ee2e6f2d41a5ce73b9d9064964140393d52f0e4a206076704ecc3615461_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "/var/www/html/Barlito/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}
