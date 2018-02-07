<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_01973be040d20f44198dfeeb5ab608a46ef74091cde2bb70f930b6d49821a88f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5c32a4c715886299905e991660767114fae86e60357fec0d685dad187297c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c32a4c715886299905e991660767114fae86e60357fec0d685dad187297c73->enter($__internal_a5c32a4c715886299905e991660767114fae86e60357fec0d685dad187297c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $__internal_1522cde08f1c22ca5f3ab4b11f3c6e77d457f668c2588d94b50989649dfb5f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1522cde08f1c22ca5f3ab4b11f3c6e77d457f668c2588d94b50989649dfb5f5f->enter($__internal_1522cde08f1c22ca5f3ab4b11f3c6e77d457f668c2588d94b50989649dfb5f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5c32a4c715886299905e991660767114fae86e60357fec0d685dad187297c73->leave($__internal_a5c32a4c715886299905e991660767114fae86e60357fec0d685dad187297c73_prof);

        
        $__internal_1522cde08f1c22ca5f3ab4b11f3c6e77d457f668c2588d94b50989649dfb5f5f->leave($__internal_1522cde08f1c22ca5f3ab4b11f3c6e77d457f668c2588d94b50989649dfb5f5f_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_915732b38074d21ceeb40d6a7adaa18d831cfe00fdbd20b40e479dd90afc15b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915732b38074d21ceeb40d6a7adaa18d831cfe00fdbd20b40e479dd90afc15b3->enter($__internal_915732b38074d21ceeb40d6a7adaa18d831cfe00fdbd20b40e479dd90afc15b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_b3c0f62752026612f1c3c0596849e45e3cb6442373d0d5ec35b59b665b32aaec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c0f62752026612f1c3c0596849e45e3cb6442373d0d5ec35b59b665b32aaec->enter($__internal_b3c0f62752026612f1c3c0596849e45e3cb6442373d0d5ec35b59b665b32aaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_b3c0f62752026612f1c3c0596849e45e3cb6442373d0d5ec35b59b665b32aaec->leave($__internal_b3c0f62752026612f1c3c0596849e45e3cb6442373d0d5ec35b59b665b32aaec_prof);

        
        $__internal_915732b38074d21ceeb40d6a7adaa18d831cfe00fdbd20b40e479dd90afc15b3->leave($__internal_915732b38074d21ceeb40d6a7adaa18d831cfe00fdbd20b40e479dd90afc15b3_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "/var/www/html/Barlito/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
