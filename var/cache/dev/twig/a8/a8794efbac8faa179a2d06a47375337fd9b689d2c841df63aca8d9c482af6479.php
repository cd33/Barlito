<?php

/* SonataAdminBundle:Block:block_stats.html.twig */
class __TwigTemplate_0456c3f8e45e122810c826b1a7fb4cae3038d920006270d6c44c51468852da17 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_stats.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d90dfbd97de2e202546d183b174999be141a2cba9cd239a6c2bbc1d3a71e8f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d90dfbd97de2e202546d183b174999be141a2cba9cd239a6c2bbc1d3a71e8f5d->enter($__internal_d90dfbd97de2e202546d183b174999be141a2cba9cd239a6c2bbc1d3a71e8f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        $__internal_c662100a2c3376377c73e17f87d50bbee32d06268990c08453191a059d96fffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c662100a2c3376377c73e17f87d50bbee32d06268990c08453191a059d96fffe->enter($__internal_c662100a2c3376377c73e17f87d50bbee32d06268990c08453191a059d96fffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_stats.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d90dfbd97de2e202546d183b174999be141a2cba9cd239a6c2bbc1d3a71e8f5d->leave($__internal_d90dfbd97de2e202546d183b174999be141a2cba9cd239a6c2bbc1d3a71e8f5d_prof);

        
        $__internal_c662100a2c3376377c73e17f87d50bbee32d06268990c08453191a059d96fffe->leave($__internal_c662100a2c3376377c73e17f87d50bbee32d06268990c08453191a059d96fffe_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_ec5397758da7a1f9d9c461fa07384e04c1ce89d46d859db99fda7a04f03f47fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5397758da7a1f9d9c461fa07384e04c1ce89d46d859db99fda7a04f03f47fa->enter($__internal_ec5397758da7a1f9d9c461fa07384e04c1ce89d46d859db99fda7a04f03f47fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_775207cd156e8463c55c647a2e0c560821bae1ff32ed1a3eac1824f5fc824587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775207cd156e8463c55c647a2e0c560821bae1ff32ed1a3eac1824f5fc824587->enter($__internal_775207cd156e8463c55c647a2e0c560821bae1ff32ed1a3eac1824f5fc824587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <!-- small box -->
    <div class=\"small-box ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "color", array()), "html", null, true);
        echo "\">
        <div class=\"inner\">
            <h3>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "count", array(), "method"), "html", null, true);
        echo "</h3>

            <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "text", array()), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())), "html", null, true);
        echo "</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "icon", array()), "html", null, true);
        echo "\"></i>
        </div>
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "filters", array()))), "method"), "html", null, true);
        echo "\" class=\"small-box-footer\">
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("stats_view_more", array(), "SonataAdminBundle"), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
";
        
        $__internal_775207cd156e8463c55c647a2e0c560821bae1ff32ed1a3eac1824f5fc824587->leave($__internal_775207cd156e8463c55c647a2e0c560821bae1ff32ed1a3eac1824f5fc824587_prof);

        
        $__internal_ec5397758da7a1f9d9c461fa07384e04c1ce89d46d859db99fda7a04f03f47fa->leave($__internal_ec5397758da7a1f9d9c461fa07384e04c1ce89d46d859db99fda7a04f03f47fa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  72 => 25,  67 => 23,  61 => 20,  56 => 18,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <!-- small box -->
    <div class=\"small-box {{ settings.color }}\">
        <div class=\"inner\">
            <h3>{{ pager.count() }}</h3>

            <p>{{ settings.text|trans({}, admin.translationDomain) }}</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa {{ settings.icon }}\"></i>
        </div>
        <a href=\"{{ admin.generateUrl('list', {filter: settings.filters}) }}\" class=\"small-box-footer\">
            {{ 'stats_view_more'|trans({}, 'SonataAdminBundle') }} <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
{% endblock %}
", "SonataAdminBundle:Block:block_stats.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/Block/block_stats.html.twig");
    }
}
