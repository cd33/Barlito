<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_6260742e49ab7f22d7721290e2e97dfc5d0ee47c06ac6edb3c7086018b3fc517 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69c48e6733c40c55e40ee990d466927e31ec39c383f1ebc4c9f35f158324043f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c48e6733c40c55e40ee990d466927e31ec39c383f1ebc4c9f35f158324043f->enter($__internal_69c48e6733c40c55e40ee990d466927e31ec39c383f1ebc4c9f35f158324043f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $__internal_2e7b62657ebd43994937f8205be13caf8b0a330804da7cf822b6d2bb572b1e94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7b62657ebd43994937f8205be13caf8b0a330804da7cf822b6d2bb572b1e94->enter($__internal_2e7b62657ebd43994937f8205be13caf8b0a330804da7cf822b6d2bb572b1e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69c48e6733c40c55e40ee990d466927e31ec39c383f1ebc4c9f35f158324043f->leave($__internal_69c48e6733c40c55e40ee990d466927e31ec39c383f1ebc4c9f35f158324043f_prof);

        
        $__internal_2e7b62657ebd43994937f8205be13caf8b0a330804da7cf822b6d2bb572b1e94->leave($__internal_2e7b62657ebd43994937f8205be13caf8b0a330804da7cf822b6d2bb572b1e94_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_826e1f2f7e02aa50b5bb96983df8bfbd36896121d162ed84d929ceb67bf4160d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_826e1f2f7e02aa50b5bb96983df8bfbd36896121d162ed84d929ceb67bf4160d->enter($__internal_826e1f2f7e02aa50b5bb96983df8bfbd36896121d162ed84d929ceb67bf4160d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_8f65f2c3338520ee8c7d8a253d31f2572df1ab3b3d07528abc76e23bbf5fd9ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f65f2c3338520ee8c7d8a253d31f2572df1ab3b3d07528abc76e23bbf5fd9ca->enter($__internal_8f65f2c3338520ee8c7d8a253d31f2572df1ab3b3d07528abc76e23bbf5fd9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_8f65f2c3338520ee8c7d8a253d31f2572df1ab3b3d07528abc76e23bbf5fd9ca->leave($__internal_8f65f2c3338520ee8c7d8a253d31f2572df1ab3b3d07528abc76e23bbf5fd9ca_prof);

        
        $__internal_826e1f2f7e02aa50b5bb96983df8bfbd36896121d162ed84d929ceb67bf4160d->leave($__internal_826e1f2f7e02aa50b5bb96983df8bfbd36896121d162ed84d929ceb67bf4160d_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "/var/www/html/Barlito/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
