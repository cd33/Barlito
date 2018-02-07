<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig */
class __TwigTemplate_16158eb715c76f2870a6327d48a09c3a0318ac81ec3f27a6e3ce9df71233c229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e4e2855944a34ed2740e27992100529afdffd4aba544cdbda6ca519349ce0f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4e2855944a34ed2740e27992100529afdffd4aba544cdbda6ca519349ce0f2->enter($__internal_6e4e2855944a34ed2740e27992100529afdffd4aba544cdbda6ca519349ce0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $__internal_733722e7ade8bb70928a2be81c2ca4e1f479bb0930def756152e1dba84133f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733722e7ade8bb70928a2be81c2ca4e1f479bb0930def756152e1dba84133f64->enter($__internal_733722e7ade8bb70928a2be81c2ca4e1f479bb0930def756152e1dba84133f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e4e2855944a34ed2740e27992100529afdffd4aba544cdbda6ca519349ce0f2->leave($__internal_6e4e2855944a34ed2740e27992100529afdffd4aba544cdbda6ca519349ce0f2_prof);

        
        $__internal_733722e7ade8bb70928a2be81c2ca4e1f479bb0930def756152e1dba84133f64->leave($__internal_733722e7ade8bb70928a2be81c2ca4e1f479bb0930def756152e1dba84133f64_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d71f96120c9e038cb627333513908f79f33b22f6b85bc64486e7f0c28adecb3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d71f96120c9e038cb627333513908f79f33b22f6b85bc64486e7f0c28adecb3e->enter($__internal_d71f96120c9e038cb627333513908f79f33b22f6b85bc64486e7f0c28adecb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6095367b6ab6f4ae7f9aefe1812abe85ec9372243a46345002381b66aacf5bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6095367b6ab6f4ae7f9aefe1812abe85ec9372243a46345002381b66aacf5bbf->enter($__internal_6095367b6ab6f4ae7f9aefe1812abe85ec9372243a46345002381b66aacf5bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"]), "method")) {
                    // line 19
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 21
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 23
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 24
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 27
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 28
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        
        $__internal_6095367b6ab6f4ae7f9aefe1812abe85ec9372243a46345002381b66aacf5bbf->leave($__internal_6095367b6ab6f4ae7f9aefe1812abe85ec9372243a46345002381b66aacf5bbf_prof);

        
        $__internal_d71f96120c9e038cb627333513908f79f33b22f6b85bc64486e7f0c28adecb3e->leave($__internal_d71f96120c9e038cb627333513908f79f33b22f6b85bc64486e7f0c28adecb3e_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_f5ac58f8b78e4b191876d860861a4a28209a4a94181d62ea924c3836eef74bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ac58f8b78e4b191876d860861a4a28209a4a94181d62ea924c3836eef74bc3->enter($__internal_f5ac58f8b78e4b191876d860861a4a28209a4a94181d62ea924c3836eef74bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_22d4f42750078e9792169ff130d8b5e0d302ac023a6fc6ceedb99f9b678b0a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d4f42750078e9792169ff130d8b5e0d302ac023a6fc6ceedb99f9b678b0a39->enter($__internal_22d4f42750078e9792169ff130d8b5e0d302ac023a6fc6ceedb99f9b678b0a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        // line 35
        echo "</a>";
        
        $__internal_22d4f42750078e9792169ff130d8b5e0d302ac023a6fc6ceedb99f9b678b0a39->leave($__internal_22d4f42750078e9792169ff130d8b5e0d302ac023a6fc6ceedb99f9b678b0a39_prof);

        
        $__internal_f5ac58f8b78e4b191876d860861a4a28209a4a94181d62ea924c3836eef74bc3->leave($__internal_f5ac58f8b78e4b191876d860861a4a28209a4a94181d62ea924c3836eef74bc3_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_1e04a5afb15e14bbc4b8a936b8e0bc63f2ee5bcf411e81637dafa3344cb5119d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e04a5afb15e14bbc4b8a936b8e0bc63f2ee5bcf411e81637dafa3344cb5119d->enter($__internal_1e04a5afb15e14bbc4b8a936b8e0bc63f2ee5bcf411e81637dafa3344cb5119d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_d01778ffd7fc3c64cf126d047cbc21743b0436756fe0199d5b499f00d2c64700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01778ffd7fc3c64cf126d047cbc21743b0436756fe0199d5b499f00d2c64700->enter($__internal_d01778ffd7fc3c64cf126d047cbc21743b0436756fe0199d5b499f00d2c64700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_d01778ffd7fc3c64cf126d047cbc21743b0436756fe0199d5b499f00d2c64700->leave($__internal_d01778ffd7fc3c64cf126d047cbc21743b0436756fe0199d5b499f00d2c64700_prof);

        
        $__internal_1e04a5afb15e14bbc4b8a936b8e0bc63f2ee5bcf411e81637dafa3344cb5119d->leave($__internal_1e04a5afb15e14bbc4b8a936b8e0bc63f2ee5bcf411e81637dafa3344cb5119d_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 39,  177 => 38,  167 => 35,  165 => 34,  161 => 33,  152 => 32,  141 => 29,  127 => 28,  121 => 27,  103 => 26,  100 => 25,  86 => 24,  82 => 23,  79 => 21,  76 => 19,  74 => 18,  56 => 17,  53 => 16,  50 => 15,  41 => 14,  20 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) %}
        {% for element in value %}
            {%- if field_description.associationadmin.hasAccess(route_name, element) -%}
                {{ block('relation_link') }}
            {%- else -%}
                {{ block('relation_value') }}
            {%- endif -%}
            {% if not loop.last %}, {% endif %}
        {% endfor %}
    {% else %}
        {% for element in value %}
            {{ block('relation_value') }}{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
{% endblock %}

{%- block relation_link -%}
    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
        {{- element|render_relation_element(field_description) -}}
    </a>
{%- endblock -%}

{%- block relation_value -%}
    {{- element|render_relation_element(field_description) -}}
{%- endblock -%}
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", "/var/www/html/Barlito/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_one_to_many.html.twig");
    }
}
