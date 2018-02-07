<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_73b0e97b4e417be48e65526d35f29c7478396b20bd77622ccfe0341c1becc3ee extends Twig_Template
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
        // line 11
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_rss.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c34ccc1a26431c791dc7edcdd18d2f364e0bdbb8f345fedcfdf9388ea648c68e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34ccc1a26431c791dc7edcdd18d2f364e0bdbb8f345fedcfdf9388ea648c68e->enter($__internal_c34ccc1a26431c791dc7edcdd18d2f364e0bdbb8f345fedcfdf9388ea648c68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $__internal_b2c37ab9b52bf8ca4aaeac00f2f2736a41d06858a86532e5a8a1079e0f1996a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c37ab9b52bf8ca4aaeac00f2f2736a41d06858a86532e5a8a1079e0f1996a4->enter($__internal_b2c37ab9b52bf8ca4aaeac00f2f2736a41d06858a86532e5a8a1079e0f1996a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_rss.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c34ccc1a26431c791dc7edcdd18d2f364e0bdbb8f345fedcfdf9388ea648c68e->leave($__internal_c34ccc1a26431c791dc7edcdd18d2f364e0bdbb8f345fedcfdf9388ea648c68e_prof);

        
        $__internal_b2c37ab9b52bf8ca4aaeac00f2f2736a41d06858a86532e5a8a1079e0f1996a4->leave($__internal_b2c37ab9b52bf8ca4aaeac00f2f2736a41d06858a86532e5a8a1079e0f1996a4_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_1b540954a8c03c531c857695d73e9876d433ab1f4028f3737bb328f2f1079801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b540954a8c03c531c857695d73e9876d433ab1f4028f3737bb328f2f1079801->enter($__internal_1b540954a8c03c531c857695d73e9876d433ab1f4028f3737bb328f2f1079801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_cfdf5ef40cc5ed47f82f2d02252b53d6f674700783604a695f67647a705bb71f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdf5ef40cc5ed47f82f2d02252b53d6f674700783604a695f67647a705bb71f->enter($__internal_cfdf5ef40cc5ed47f82f2d02252b53d6f674700783604a695f67647a705bb71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <h3 class=\"sonata-feed-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>

    <div class=\"sonata-feeds-container\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 18
            echo "            <div>
                <strong><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</a></strong>
                <div>";
            // line 20
            echo $this->getAttribute($context["feed"], "description", array());
            echo "</div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                No feeds available.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
        
        $__internal_cfdf5ef40cc5ed47f82f2d02252b53d6f674700783604a695f67647a705bb71f->leave($__internal_cfdf5ef40cc5ed47f82f2d02252b53d6f674700783604a695f67647a705bb71f_prof);

        
        $__internal_1b540954a8c03c531c857695d73e9876d433ab1f4028f3737bb328f2f1079801->leave($__internal_1b540954a8c03c531c857695d73e9876d433ab1f4028f3737bb328f2f1079801_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  79 => 23,  71 => 20,  63 => 19,  60 => 18,  55 => 17,  48 => 14,  39 => 13,  18 => 11,);
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
    <h3 class=\"sonata-feed-title\">{{ settings.title }}</h3>

    <div class=\"sonata-feeds-container\">
        {% for feed in feeds %}
            <div>
                <strong><a href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">{{ feed.title }}</a></strong>
                <div>{{ feed.description|raw }}</div>
            </div>
        {% else %}
                No feeds available.
        {% endfor %}
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_core_rss.html.twig", "/var/www/html/Barlito/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_rss.html.twig");
    }
}
