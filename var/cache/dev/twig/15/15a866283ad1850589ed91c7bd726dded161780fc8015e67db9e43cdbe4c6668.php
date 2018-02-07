<?php

/* SonataBlockBundle:Block:block_template.html.twig */
class __TwigTemplate_b889c872d91bc5c9bd8fa49b027aa3e5efb691432627209deddc6389459d835f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b39f2a2db71e0b0c454afdc886899ff04da2aeb0a16ae359da46929d5614f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b39f2a2db71e0b0c454afdc886899ff04da2aeb0a16ae359da46929d5614f31->enter($__internal_7b39f2a2db71e0b0c454afdc886899ff04da2aeb0a16ae359da46929d5614f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $__internal_1fde93f1aab01a3b8b2282504e4a49fee38c85f6dd78f0545c57af9b6ac57c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fde93f1aab01a3b8b2282504e4a49fee38c85f6dd78f0545c57af9b6ac57c8e->enter($__internal_1fde93f1aab01a3b8b2282504e4a49fee38c85f6dd78f0545c57af9b6ac57c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b39f2a2db71e0b0c454afdc886899ff04da2aeb0a16ae359da46929d5614f31->leave($__internal_7b39f2a2db71e0b0c454afdc886899ff04da2aeb0a16ae359da46929d5614f31_prof);

        
        $__internal_1fde93f1aab01a3b8b2282504e4a49fee38c85f6dd78f0545c57af9b6ac57c8e->leave($__internal_1fde93f1aab01a3b8b2282504e4a49fee38c85f6dd78f0545c57af9b6ac57c8e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_7025ce49f5e62ca00c435d5b82fae9cc4bcc1f708434832ba6cc4c3e879bbc5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7025ce49f5e62ca00c435d5b82fae9cc4bcc1f708434832ba6cc4c3e879bbc5d->enter($__internal_7025ce49f5e62ca00c435d5b82fae9cc4bcc1f708434832ba6cc4c3e879bbc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_a7f377b93b826b7c08da0711d7369818d31ec80ec639aa3aa53dba42bd733e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f377b93b826b7c08da0711d7369818d31ec80ec639aa3aa53dba42bd733e00->enter($__internal_a7f377b93b826b7c08da0711d7369818d31ec80ec639aa3aa53dba42bd733e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
        
        $__internal_a7f377b93b826b7c08da0711d7369818d31ec80ec639aa3aa53dba42bd733e00->leave($__internal_a7f377b93b826b7c08da0711d7369818d31ec80ec639aa3aa53dba42bd733e00_prof);

        
        $__internal_7025ce49f5e62ca00c435d5b82fae9cc4bcc1f708434832ba6cc4c3e879bbc5d->leave($__internal_7025ce49f5e62ca00c435d5b82fae9cc4bcc1f708434832ba6cc4c3e879bbc5d_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 43,  53 => 33,  48 => 15,  39 => 14,  18 => 12,);
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
    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>
        {%- verbatim -%}
{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}
        {%- endverbatim -%}
    </pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>
{%- verbatim -%}
{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}
{%- endverbatim -%}
    </pre>
{% endblock %}
", "SonataBlockBundle:Block:block_template.html.twig", "/var/www/html/Barlito/vendor/sonata-project/block-bundle/Resources/views/Block/block_template.html.twig");
    }
}
