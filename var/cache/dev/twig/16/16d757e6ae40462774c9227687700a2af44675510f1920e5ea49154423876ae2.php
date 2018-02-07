<?php

/* SonataAdminBundle:CRUD/Association:show_many_to_many.html.twig */
class __TwigTemplate_986e9c507f6ee7778b95e1257d4f353d30606952a9ec5aad5ee52d092db2c5cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD/Association:show_many_to_many.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fbb53b639ccaed091ec45d29a203faaaebb5699ac956f7bb7a158a14123fc3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fbb53b639ccaed091ec45d29a203faaaebb5699ac956f7bb7a158a14123fc3e->enter($__internal_6fbb53b639ccaed091ec45d29a203faaaebb5699ac956f7bb7a158a14123fc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:show_many_to_many.html.twig"));

        $__internal_d3673bad077f503947f853b1f1048d48eb6b88df8b9fb2ddc49910abba7efb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3673bad077f503947f853b1f1048d48eb6b88df8b9fb2ddc49910abba7efb3e->enter($__internal_d3673bad077f503947f853b1f1048d48eb6b88df8b9fb2ddc49910abba7efb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:show_many_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fbb53b639ccaed091ec45d29a203faaaebb5699ac956f7bb7a158a14123fc3e->leave($__internal_6fbb53b639ccaed091ec45d29a203faaaebb5699ac956f7bb7a158a14123fc3e_prof);

        
        $__internal_d3673bad077f503947f853b1f1048d48eb6b88df8b9fb2ddc49910abba7efb3e->leave($__internal_d3673bad077f503947f853b1f1048d48eb6b88df8b9fb2ddc49910abba7efb3e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_12cc791c9117092bb14ce3404ee0eb5e1ac65ee86a77e8df698b766af48c06c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12cc791c9117092bb14ce3404ee0eb5e1ac65ee86a77e8df698b766af48c06c4->enter($__internal_12cc791c9117092bb14ce3404ee0eb5e1ac65ee86a77e8df698b766af48c06c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_495129cc0e550a9f4998b6c062979aae041e33aab83325d5b76d0940c31449c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495129cc0e550a9f4998b6c062979aae041e33aab83325d5b76d0940c31449c9->enter($__internal_495129cc0e550a9f4998b6c062979aae041e33aab83325d5b76d0940c31449c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 18
            echo "            <li>
                ";
            // line 19
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute(            // line 20
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(            // line 21
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"]), "method"))) {
                // line 22
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                        ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 26
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                ";
            }
            // line 28
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ul>
";
        
        $__internal_495129cc0e550a9f4998b6c062979aae041e33aab83325d5b76d0940c31449c9->leave($__internal_495129cc0e550a9f4998b6c062979aae041e33aab83325d5b76d0940c31449c9_prof);

        
        $__internal_12cc791c9117092bb14ce3404ee0eb5e1ac65ee86a77e8df698b766af48c06c4->leave($__internal_12cc791c9117092bb14ce3404ee0eb5e1ac65ee86a77e8df698b766af48c06c4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:show_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  83 => 28,  77 => 26,  71 => 23,  66 => 22,  64 => 21,  63 => 20,  62 => 19,  59 => 18,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    <ul class=\"sonata-ba-show-many-to-many\">
    {% set route_name = field_description.options.route.name %}
        {% for element in value %}
            <li>
                {% if field_description.hasassociationadmin
                and field_description.associationadmin.hasRoute(route_name)
                and field_description.associationadmin.hasAccess(route_name, element) %}
                    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
                        {{ element|render_relation_element(field_description) }}
                    </a>
                {% else %}
                    {{ element|render_relation_element(field_description) }}
                {% endif %}
            </li>
        {% endfor %}
    </ul>
{% endblock %}
", "SonataAdminBundle:CRUD/Association:show_many_to_many.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/Association/show_many_to_many.html.twig");
    }
}
