<?php

/* SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig */
class __TwigTemplate_d66b3c88a57460adc77c6b8a516c48040590396cb2af137c20d013dd23f03163 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28bb746d971e6054ea7d5f17f08582f31ed9428c15611a05a9b237f9b9e86c61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28bb746d971e6054ea7d5f17f08582f31ed9428c15611a05a9b237f9b9e86c61->enter($__internal_28bb746d971e6054ea7d5f17f08582f31ed9428c15611a05a9b237f9b9e86c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig"));

        $__internal_a796a32cea2d461d38cd1c6ba598f7c7864d04e3b98c576eb41f78b452f7ee44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a796a32cea2d461d38cd1c6ba598f7c7864d04e3b98c576eb41f78b452f7ee44->enter($__internal_a796a32cea2d461d38cd1c6ba598f7c7864d04e3b98c576eb41f78b452f7ee44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28bb746d971e6054ea7d5f17f08582f31ed9428c15611a05a9b237f9b9e86c61->leave($__internal_28bb746d971e6054ea7d5f17f08582f31ed9428c15611a05a9b237f9b9e86c61_prof);

        
        $__internal_a796a32cea2d461d38cd1c6ba598f7c7864d04e3b98c576eb41f78b452f7ee44->leave($__internal_a796a32cea2d461d38cd1c6ba598f7c7864d04e3b98c576eb41f78b452f7ee44_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d5bbf81abda821fa108ebe988addddcbdd8555c748e2d664c1ff0015ae821729 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5bbf81abda821fa108ebe988addddcbdd8555c748e2d664c1ff0015ae821729->enter($__internal_d5bbf81abda821fa108ebe988addddcbdd8555c748e2d664c1ff0015ae821729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_7b15d82325bb11b737dd1de6ae07d3d8f951f1b4683986bfd76ddc7da1b37aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b15d82325bb11b737dd1de6ae07d3d8f951f1b4683986bfd76ddc7da1b37aab->enter($__internal_7b15d82325bb11b737dd1de6ae07d3d8f951f1b4683986bfd76ddc7da1b37aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_7b15d82325bb11b737dd1de6ae07d3d8f951f1b4683986bfd76ddc7da1b37aab->leave($__internal_7b15d82325bb11b737dd1de6ae07d3d8f951f1b4683986bfd76ddc7da1b37aab_prof);

        
        $__internal_d5bbf81abda821fa108ebe988addddcbdd8555c748e2d664c1ff0015ae821729->leave($__internal_d5bbf81abda821fa108ebe988addddcbdd8555c748e2d664c1ff0015ae821729_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_abf12b8a2c33adfa640b61b4b88f0c51e6c0c2ad94017743c54b4b522bf8e6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf12b8a2c33adfa640b61b4b88f0c51e6c0c2ad94017743c54b4b522bf8e6e0->enter($__internal_abf12b8a2c33adfa640b61b4b88f0c51e6c0c2ad94017743c54b4b522bf8e6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_2f76fffae380d1ee19a4d12211b5b62fd73da7c63a427cad1b26ab17f8410d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f76fffae380d1ee19a4d12211b5b62fd73da7c63a427cad1b26ab17f8410d42->enter($__internal_2f76fffae380d1ee19a4d12211b5b62fd73da7c63a427cad1b26ab17f8410d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        // line 35
        echo "</a>";
        
        $__internal_2f76fffae380d1ee19a4d12211b5b62fd73da7c63a427cad1b26ab17f8410d42->leave($__internal_2f76fffae380d1ee19a4d12211b5b62fd73da7c63a427cad1b26ab17f8410d42_prof);

        
        $__internal_abf12b8a2c33adfa640b61b4b88f0c51e6c0c2ad94017743c54b4b522bf8e6e0->leave($__internal_abf12b8a2c33adfa640b61b4b88f0c51e6c0c2ad94017743c54b4b522bf8e6e0_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_95ce9aa8a44e6e2dcfae17c781b40d76411b78461f7db756bcb7977f2a8da83e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ce9aa8a44e6e2dcfae17c781b40d76411b78461f7db756bcb7977f2a8da83e->enter($__internal_95ce9aa8a44e6e2dcfae17c781b40d76411b78461f7db756bcb7977f2a8da83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_bd1ed10179b36e35fdb8c3c4c294a4d60d0dd91b3487fc944e84d7fd72bd76fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1ed10179b36e35fdb8c3c4c294a4d60d0dd91b3487fc944e84d7fd72bd76fd->enter($__internal_bd1ed10179b36e35fdb8c3c4c294a4d60d0dd91b3487fc944e84d7fd72bd76fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_bd1ed10179b36e35fdb8c3c4c294a4d60d0dd91b3487fc944e84d7fd72bd76fd->leave($__internal_bd1ed10179b36e35fdb8c3c4c294a4d60d0dd91b3487fc944e84d7fd72bd76fd_prof);

        
        $__internal_95ce9aa8a44e6e2dcfae17c781b40d76411b78461f7db756bcb7977f2a8da83e->leave($__internal_95ce9aa8a44e6e2dcfae17c781b40d76411b78461f7db756bcb7977f2a8da83e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig";
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
", "SonataAdminBundle:CRUD/Association:list_one_to_many.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/Association/list_one_to_many.html.twig");
    }
}
