<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_222994b5bb9503dc1926a7cc5f94de412cd39e572528120e7ad83ea2ad1c3ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 12);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3d28bdde5b6994d47f7532b81d4975f64b37f4d62a3b7b70e1f5f18609b218f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d28bdde5b6994d47f7532b81d4975f64b37f4d62a3b7b70e1f5f18609b218f->enter($__internal_d3d28bdde5b6994d47f7532b81d4975f64b37f4d62a3b7b70e1f5f18609b218f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_side_menu_template.html.twig"));

        $__internal_6fd726397abb38ef417c6009229613c0c671ba2c7765dfe4d143e979f71a3d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd726397abb38ef417c6009229613c0c671ba2c7765dfe4d143e979f71a3d91->enter($__internal_6fd726397abb38ef417c6009229613c0c671ba2c7765dfe4d143e979f71a3d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_side_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3d28bdde5b6994d47f7532b81d4975f64b37f4d62a3b7b70e1f5f18609b218f->leave($__internal_d3d28bdde5b6994d47f7532b81d4975f64b37f4d62a3b7b70e1f5f18609b218f_prof);

        
        $__internal_6fd726397abb38ef417c6009229613c0c671ba2c7765dfe4d143e979f71a3d91->leave($__internal_6fd726397abb38ef417c6009229613c0c671ba2c7765dfe4d143e979f71a3d91_prof);

    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        $__internal_d9e70904f1a9dff363605ce5bbf54ade6db28b2f81c5b3860efeedcfe5a227df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e70904f1a9dff363605ce5bbf54ade6db28b2f81c5b3860efeedcfe5a227df->enter($__internal_d9e70904f1a9dff363605ce5bbf54ade6db28b2f81c5b3860efeedcfe5a227df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_f83f5369de76cffe4037e3d62cc7a39a8f1f00b4475ff9b6d0b2b8bfb324e550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f83f5369de76cffe4037e3d62cc7a39a8f1f00b4475ff9b6d0b2b8bfb324e550->enter($__internal_f83f5369de76cffe4037e3d62cc7a39a8f1f00b4475ff9b6d0b2b8bfb324e550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 15
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 15);
        // line 16
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
        
        $__internal_f83f5369de76cffe4037e3d62cc7a39a8f1f00b4475ff9b6d0b2b8bfb324e550->leave($__internal_f83f5369de76cffe4037e3d62cc7a39a8f1f00b4475ff9b6d0b2b8bfb324e550_prof);

        
        $__internal_d9e70904f1a9dff363605ce5bbf54ade6db28b2f81c5b3860efeedcfe5a227df->leave($__internal_d9e70904f1a9dff363605ce5bbf54ade6db28b2f81c5b3860efeedcfe5a227df_prof);

    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        $__internal_c7dcba72050481efd0bee08a993177f50b4c74d867b093a4717e046e2c9bed6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7dcba72050481efd0bee08a993177f50b4c74d867b093a4717e046e2c9bed6f->enter($__internal_c7dcba72050481efd0bee08a993177f50b4c74d867b093a4717e046e2c9bed6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_c724cd35922bf7d17e6b8b8c3286c73201066bf5ddaf2d7754a16cad14fa9df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c724cd35922bf7d17e6b8b8c3286c73201066bf5ddaf2d7754a16cad14fa9df0->enter($__internal_c724cd35922bf7d17e6b8b8c3286c73201066bf5ddaf2d7754a16cad14fa9df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 24
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataBlockBundle:Block:block_side_menu_template.html.twig", 24);
        // line 25
        echo "    ";
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 29
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 30
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array())), "method")) {
                // line 31
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 33
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 34
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 36
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 37
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 39
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 40
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 41
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array()) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_c724cd35922bf7d17e6b8b8c3286c73201066bf5ddaf2d7754a16cad14fa9df0->leave($__internal_c724cd35922bf7d17e6b8b8c3286c73201066bf5ddaf2d7754a16cad14fa9df0_prof);

        
        $__internal_c7dcba72050481efd0bee08a993177f50b4c74d867b093a4717e046e2c9bed6f->leave($__internal_c7dcba72050481efd0bee08a993177f50b4c74d867b093a4717e046e2c9bed6f_prof);

    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_594c79b6fe3a064b46b7ee9a905473f1932c7ebe7d4b0b458acf3ef1c5621f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_594c79b6fe3a064b46b7ee9a905473f1932c7ebe7d4b0b458acf3ef1c5621f2b->enter($__internal_594c79b6fe3a064b46b7ee9a905473f1932c7ebe7d4b0b458acf3ef1c5621f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_ffbea394a0def3bdbb4234d0ddb92b8506352928c33a5cc586b46d893f550cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffbea394a0def3bdbb4234d0ddb92b8506352928c33a5cc586b46d893f550cc7->enter($__internal_ffbea394a0def3bdbb4234d0ddb92b8506352928c33a5cc586b46d893f550cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array())), (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_ffbea394a0def3bdbb4234d0ddb92b8506352928c33a5cc586b46d893f550cc7->leave($__internal_ffbea394a0def3bdbb4234d0ddb92b8506352928c33a5cc586b46d893f550cc7_prof);

        
        $__internal_594c79b6fe3a064b46b7ee9a905473f1932c7ebe7d4b0b458acf3ef1c5621f2b->leave($__internal_594c79b6fe3a064b46b7ee9a905473f1932c7ebe7d4b0b458acf3ef1c5621f2b_prof);

    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_d8cebcac5f47eb9070d9375471b3f974d3e5743e3bf16d08620520beba18c8b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8cebcac5f47eb9070d9375471b3f974d3e5743e3bf16d08620520beba18c8b5->enter($__internal_d8cebcac5f47eb9070d9375471b3f974d3e5743e3bf16d08620520beba18c8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_e7cbe069e14b71c04a3bcabc850bcdf310fc05f3e9d47387a9c51f527885d041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cbe069e14b71c04a3bcabc850bcdf310fc05f3e9d47387a9c51f527885d041->enter($__internal_e7cbe069e14b71c04a3bcabc850bcdf310fc05f3e9d47387a9c51f527885d041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        echo "<div";
        echo $this->getAttribute((isset($context["macros"]) ? $context["macros"] : $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array())), (isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
        
        $__internal_e7cbe069e14b71c04a3bcabc850bcdf310fc05f3e9d47387a9c51f527885d041->leave($__internal_e7cbe069e14b71c04a3bcabc850bcdf310fc05f3e9d47387a9c51f527885d041_prof);

        
        $__internal_d8cebcac5f47eb9070d9375471b3f974d3e5743e3bf16d08620520beba18c8b5->leave($__internal_d8cebcac5f47eb9070d9375471b3f974d3e5743e3bf16d08620520beba18c8b5_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  154 => 57,  140 => 53,  138 => 52,  136 => 51,  134 => 50,  132 => 49,  128 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  115 => 40,  113 => 39,  110 => 37,  108 => 36,  105 => 34,  103 => 33,  100 => 31,  98 => 30,  96 => 29,  94 => 28,  92 => 27,  90 => 26,  87 => 25,  85 => 24,  76 => 23,  62 => 18,  57 => 17,  54 => 16,  52 => 15,  43 => 14,  11 => 12,);
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

{% extends 'knp_menu.html.twig' %}

{% block list %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
        <div{{ macros.attributes(listAttributes) }}>
            {{ block('children') }}
        </div>
    {% endif %}
{% endblock %}

{% block item %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.displayed %}
        {# building the class of the item #}
        {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
        {%- if item.actsLikeFirst %}
            {%- set classes = classes|merge([options.firstClass]) %}
        {%- endif %}
        {%- if item.actsLikeLast %}
            {%- set classes = classes|merge([options.lastClass]) %}
        {%- endif %}
        {%- set attributes = item.attributes %}
        {%- if classes is not empty %}
            {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
        {%- endif %}
        {# displaying the item #}
        {%- if item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
        {# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    {% endif %}
{% endblock %}

{% block linkElement %}<a href=\"{{ item.uri }}\"{{ macros.attributes(item.attributes|merge(item.linkAttributes)|merge(attributes)) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}<div{{ macros.attributes(item.attributes|merge(item.labelAttributes)|merge(attributes)) }}><h4 class=\"list-group-item-heading\">{{ block('label') }}</h4></div>{% endblock %}
", "SonataBlockBundle:Block:block_side_menu_template.html.twig", "/var/www/html/Barlito/vendor/sonata-project/block-bundle/Resources/views/Block/block_side_menu_template.html.twig");
    }
}
