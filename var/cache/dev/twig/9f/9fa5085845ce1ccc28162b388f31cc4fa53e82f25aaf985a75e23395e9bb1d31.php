<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_64f88ce7d2cf0c847f88a05da23abbc252d0ff22434f6d862919649f01cfb49e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89abefb8e7f20e0c2bceb60be8a14a87ad265260219b2e92275798bf8d129064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89abefb8e7f20e0c2bceb60be8a14a87ad265260219b2e92275798bf8d129064->enter($__internal_89abefb8e7f20e0c2bceb60be8a14a87ad265260219b2e92275798bf8d129064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        $__internal_5a2b06a998ce62ce2033699946ead3b9a7e3f8e49e1671e5a64378fc22363bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a2b06a998ce62ce2033699946ead3b9a7e3f8e49e1671e5a64378fc22363bfc->enter($__internal_5a2b06a998ce62ce2033699946ead3b9a7e3f8e49e1671e5a64378fc22363bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_89abefb8e7f20e0c2bceb60be8a14a87ad265260219b2e92275798bf8d129064->leave($__internal_89abefb8e7f20e0c2bceb60be8a14a87ad265260219b2e92275798bf8d129064_prof);

        
        $__internal_5a2b06a998ce62ce2033699946ead3b9a7e3f8e49e1671e5a64378fc22363bfc->leave($__internal_5a2b06a998ce62ce2033699946ead3b9a7e3f8e49e1671e5a64378fc22363bfc_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_6ac4f3e5004ed902a80d68a6a066e6295cb2a33b7d8d6c039604d50b4354dbb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac4f3e5004ed902a80d68a6a066e6295cb2a33b7d8d6c039604d50b4354dbb0->enter($__internal_6ac4f3e5004ed902a80d68a6a066e6295cb2a33b7d8d6c039604d50b4354dbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_21d88456193dbbcef851a51f4bc7ed76dd6aaebe1231bf7413ed139a521fd6e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d88456193dbbcef851a51f4bc7ed76dd6aaebe1231bf7413ed139a521fd6e8->enter($__internal_21d88456193dbbcef851a51f4bc7ed76dd6aaebe1231bf7413ed139a521fd6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_21d88456193dbbcef851a51f4bc7ed76dd6aaebe1231bf7413ed139a521fd6e8->leave($__internal_21d88456193dbbcef851a51f4bc7ed76dd6aaebe1231bf7413ed139a521fd6e8_prof);

        
        $__internal_6ac4f3e5004ed902a80d68a6a066e6295cb2a33b7d8d6c039604d50b4354dbb0->leave($__internal_6ac4f3e5004ed902a80d68a6a066e6295cb2a33b7d8d6c039604d50b4354dbb0_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  33 => 13,  31 => 12,  26 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/var/www/html/Barlito/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
