<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_5f944091b340a03b5ed1372e586b85dbb3ab3f2099ed98820704a9bf36c6439c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6063d45b9088d1312bc7ce39cf7b89f08036b68fff31d96268d5f5a2a7d95a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6063d45b9088d1312bc7ce39cf7b89f08036b68fff31d96268d5f5a2a7d95a6a->enter($__internal_6063d45b9088d1312bc7ce39cf7b89f08036b68fff31d96268d5f5a2a7d95a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $__internal_ec28e830fb874abd4df324abfbc54b927327512e59553c1e134c6c39b815039e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec28e830fb874abd4df324abfbc54b927327512e59553c1e134c6c39b815039e->enter($__internal_ec28e830fb874abd4df324abfbc54b927327512e59553c1e134c6c39b815039e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6063d45b9088d1312bc7ce39cf7b89f08036b68fff31d96268d5f5a2a7d95a6a->leave($__internal_6063d45b9088d1312bc7ce39cf7b89f08036b68fff31d96268d5f5a2a7d95a6a_prof);

        
        $__internal_ec28e830fb874abd4df324abfbc54b927327512e59553c1e134c6c39b815039e->leave($__internal_ec28e830fb874abd4df324abfbc54b927327512e59553c1e134c6c39b815039e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_64290414edcca7978012786d0130235a7b40834e015feda5994262a23ba300f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64290414edcca7978012786d0130235a7b40834e015feda5994262a23ba300f7->enter($__internal_64290414edcca7978012786d0130235a7b40834e015feda5994262a23ba300f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8d59a36273a3c5d978f961d850c38f0c92eb8211c0e3d3949f1015bae5a14715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d59a36273a3c5d978f961d850c38f0c92eb8211c0e3d3949f1015bae5a14715->enter($__internal_8d59a36273a3c5d978f961d850c38f0c92eb8211c0e3d3949f1015bae5a14715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
                echo "
            ";
                // line 28
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 29
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
            // line 30
            echo "    ";
        }
        
        $__internal_8d59a36273a3c5d978f961d850c38f0c92eb8211c0e3d3949f1015bae5a14715->leave($__internal_8d59a36273a3c5d978f961d850c38f0c92eb8211c0e3d3949f1015bae5a14715_prof);

        
        $__internal_64290414edcca7978012786d0130235a7b40834e015feda5994262a23ba300f7->leave($__internal_64290414edcca7978012786d0130235a7b40834e015feda5994262a23ba300f7_prof);

    }

    // line 33
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_f8d84178cb76f9dae8aaf4b563106c4374c4d54633b18207200c063a2256b7a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d84178cb76f9dae8aaf4b563106c4374c4d54633b18207200c063a2256b7a9->enter($__internal_f8d84178cb76f9dae8aaf4b563106c4374c4d54633b18207200c063a2256b7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_b8ae36a9674e4b436c0830b00a8bb09c41d8cc00ed24dbb9e92e7b1e7b8c08ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ae36a9674e4b436c0830b00a8bb09c41d8cc00ed24dbb9e92e7b1e7b8c08ad->enter($__internal_b8ae36a9674e4b436c0830b00a8bb09c41d8cc00ed24dbb9e92e7b1e7b8c08ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 34
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        // line 36
        echo "</a>";
        
        $__internal_b8ae36a9674e4b436c0830b00a8bb09c41d8cc00ed24dbb9e92e7b1e7b8c08ad->leave($__internal_b8ae36a9674e4b436c0830b00a8bb09c41d8cc00ed24dbb9e92e7b1e7b8c08ad_prof);

        
        $__internal_f8d84178cb76f9dae8aaf4b563106c4374c4d54633b18207200c063a2256b7a9->leave($__internal_f8d84178cb76f9dae8aaf4b563106c4374c4d54633b18207200c063a2256b7a9_prof);

    }

    // line 39
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_ebbd74380e41b382369195ccc1a68e1ec23c329a429eec066863d0a843d2873f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebbd74380e41b382369195ccc1a68e1ec23c329a429eec066863d0a843d2873f->enter($__internal_ebbd74380e41b382369195ccc1a68e1ec23c329a429eec066863d0a843d2873f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_fc863fb5fc686c121e452f57bdea5b76a887117b8dbbe5a66b44d91fa31329dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc863fb5fc686c121e452f57bdea5b76a887117b8dbbe5a66b44d91fa31329dd->enter($__internal_fc863fb5fc686c121e452f57bdea5b76a887117b8dbbe5a66b44d91fa31329dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_fc863fb5fc686c121e452f57bdea5b76a887117b8dbbe5a66b44d91fa31329dd->leave($__internal_fc863fb5fc686c121e452f57bdea5b76a887117b8dbbe5a66b44d91fa31329dd_prof);

        
        $__internal_ebbd74380e41b382369195ccc1a68e1ec23c329a429eec066863d0a843d2873f->leave($__internal_ebbd74380e41b382369195ccc1a68e1ec23c329a429eec066863d0a843d2873f_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 40,  180 => 39,  170 => 36,  168 => 35,  164 => 34,  155 => 33,  144 => 30,  130 => 29,  126 => 28,  121 => 27,  103 => 26,  100 => 25,  86 => 24,  82 => 23,  79 => 21,  76 => 19,  74 => 18,  56 => 17,  53 => 16,  50 => 15,  41 => 14,  20 => 12,);
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
        {% for element in value%}
            {{ block('relation_value') }}
            {% if not loop.last %}, {% endif %}
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
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", "/var/www/html/Barlito/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_many_to_many.html.twig");
    }
}
