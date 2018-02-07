<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_4adbc0c979fd3c8cea370f1c86dc18093838a97f1572604631b352ec45616e41 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae5d0cbc4fc1ae2832bc810903960d2af0c0e0b7c183470422ad335c13ca701c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae5d0cbc4fc1ae2832bc810903960d2af0c0e0b7c183470422ad335c13ca701c->enter($__internal_ae5d0cbc4fc1ae2832bc810903960d2af0c0e0b7c183470422ad335c13ca701c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $__internal_19ed41ca0894a0b23b6884ddbd84d371f362d5078d378fe4b96197a2dc165f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ed41ca0894a0b23b6884ddbd84d371f362d5078d378fe4b96197a2dc165f45->enter($__internal_19ed41ca0894a0b23b6884ddbd84d371f362d5078d378fe4b96197a2dc165f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae5d0cbc4fc1ae2832bc810903960d2af0c0e0b7c183470422ad335c13ca701c->leave($__internal_ae5d0cbc4fc1ae2832bc810903960d2af0c0e0b7c183470422ad335c13ca701c_prof);

        
        $__internal_19ed41ca0894a0b23b6884ddbd84d371f362d5078d378fe4b96197a2dc165f45->leave($__internal_19ed41ca0894a0b23b6884ddbd84d371f362d5078d378fe4b96197a2dc165f45_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_5d2a40f98ad4cb8d5f606fe638b1c884c700f05386faabbf409a33c6b1786851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2a40f98ad4cb8d5f606fe638b1c884c700f05386faabbf409a33c6b1786851->enter($__internal_5d2a40f98ad4cb8d5f606fe638b1c884c700f05386faabbf409a33c6b1786851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_832b5fef9951c9bd1a277f3a8eada1fdd5a403cb53f7a5eb15f611b65cdf8881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832b5fef9951c9bd1a277f3a8eada1fdd5a403cb53f7a5eb15f611b65cdf8881->enter($__internal_832b5fef9951c9bd1a277f3a8eada1fdd5a403cb53f7a5eb15f611b65cdf8881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_832b5fef9951c9bd1a277f3a8eada1fdd5a403cb53f7a5eb15f611b65cdf8881->leave($__internal_832b5fef9951c9bd1a277f3a8eada1fdd5a403cb53f7a5eb15f611b65cdf8881_prof);

        
        $__internal_5d2a40f98ad4cb8d5f606fe638b1c884c700f05386faabbf409a33c6b1786851->leave($__internal_5d2a40f98ad4cb8d5f606fe638b1c884c700f05386faabbf409a33c6b1786851_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "/var/www/html/Barlito/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
