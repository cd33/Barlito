<?php

/* SonataAdminBundle:Block:block_rss_dashboard.html.twig */
class __TwigTemplate_cf06d10979985b1639ac542a7693812f3b3c7de64964766766e5c2314b92c5d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_core_rss.html.twig", "SonataAdminBundle:Block:block_rss_dashboard.html.twig", 12);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_511f477d06a1beea5c4aff0827f9a36b62cfe8aa1855650536ec5a86f1adef52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511f477d06a1beea5c4aff0827f9a36b62cfe8aa1855650536ec5a86f1adef52->enter($__internal_511f477d06a1beea5c4aff0827f9a36b62cfe8aa1855650536ec5a86f1adef52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $__internal_f6c9ea1480a84731ca27e93ac70159c8b62a9bcd45a43ca39624b3f49a81224b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c9ea1480a84731ca27e93ac70159c8b62a9bcd45a43ca39624b3f49a81224b->enter($__internal_f6c9ea1480a84731ca27e93ac70159c8b62a9bcd45a43ca39624b3f49a81224b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_rss_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_511f477d06a1beea5c4aff0827f9a36b62cfe8aa1855650536ec5a86f1adef52->leave($__internal_511f477d06a1beea5c4aff0827f9a36b62cfe8aa1855650536ec5a86f1adef52_prof);

        
        $__internal_f6c9ea1480a84731ca27e93ac70159c8b62a9bcd45a43ca39624b3f49a81224b->leave($__internal_f6c9ea1480a84731ca27e93ac70159c8b62a9bcd45a43ca39624b3f49a81224b_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_0895361ee37a07aeb13be055aaf074634c42d21b623c7ed51679634dc422bcdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0895361ee37a07aeb13be055aaf074634c42d21b623c7ed51679634dc422bcdb->enter($__internal_0895361ee37a07aeb13be055aaf074634c42d21b623c7ed51679634dc422bcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_0eff41724e160faf40718295cf48cb1cdb8c77ab12b7d3988815449004a5809f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eff41724e160faf40718295cf48cb1cdb8c77ab12b7d3988815449004a5809f->enter($__internal_0eff41724e160faf40718295cf48cb1cdb8c77ab12b7d3988815449004a5809f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 22
            echo "                <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</strong>
                    <div>";
            // line 24
            echo $this->getAttribute($context["feed"], "description", array());
            echo "</div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                <div class=\"list-group-item\">No feeds available.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
";
        
        $__internal_0eff41724e160faf40718295cf48cb1cdb8c77ab12b7d3988815449004a5809f->leave($__internal_0eff41724e160faf40718295cf48cb1cdb8c77ab12b7d3988815449004a5809f_prof);

        
        $__internal_0895361ee37a07aeb13be055aaf074634c42d21b623c7ed51679634dc422bcdb->leave($__internal_0895361ee37a07aeb13be055aaf074634c42d21b623c7ed51679634dc422bcdb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_rss_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  84 => 27,  76 => 24,  72 => 23,  65 => 22,  60 => 21,  53 => 17,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends \"SonataBlockBundle:Block:block_core_rss.html.twig\" %}

{% block block %}
    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> {{ settings.title }}</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            {% for feed in feeds %}
                <a class=\"list-group-item\" href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">
                    <strong>{{ feed.title }}</strong>
                    <div>{{ feed.description|raw }}</div>
                </a>
            {% else %}
                <div class=\"list-group-item\">No feeds available.</div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "SonataAdminBundle:Block:block_rss_dashboard.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/Block/block_rss_dashboard.html.twig");
    }
}
