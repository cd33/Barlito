<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_5cb142c12f370e5d4e31d9241073316f7c15770979b8de13a09d0b9cccd71cf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9943650ad64654525e632bf09b40faec8b7762d010a5765d128b9de9ffc22ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9943650ad64654525e632bf09b40faec8b7762d010a5765d128b9de9ffc22ec->enter($__internal_e9943650ad64654525e632bf09b40faec8b7762d010a5765d128b9de9ffc22ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        $__internal_8af61edcefe346224fa43b9f4fe73efd216eaf2993fe767d0c258a3312327ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af61edcefe346224fa43b9f4fe73efd216eaf2993fe767d0c258a3312327ecc->enter($__internal_8af61edcefe346224fa43b9f4fe73efd216eaf2993fe767d0c258a3312327ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_e9943650ad64654525e632bf09b40faec8b7762d010a5765d128b9de9ffc22ec->leave($__internal_e9943650ad64654525e632bf09b40faec8b7762d010a5765d128b9de9ffc22ec_prof);

        
        $__internal_8af61edcefe346224fa43b9f4fe73efd216eaf2993fe767d0c258a3312327ecc->leave($__internal_8af61edcefe346224fa43b9f4fe73efd216eaf2993fe767d0c258a3312327ecc_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_04314bbef27afd7be7f23730b00c28756155205b1b43e181ed4ccc4f810c9086 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04314bbef27afd7be7f23730b00c28756155205b1b43e181ed4ccc4f810c9086->enter($__internal_04314bbef27afd7be7f23730b00c28756155205b1b43e181ed4ccc4f810c9086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_51a9315e1d10d3d79b825e234cab7851cbf77abc83d2ca9750071837a802c58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a9315e1d10d3d79b825e234cab7851cbf77abc83d2ca9750071837a802c58f->enter($__internal_51a9315e1d10d3d79b825e234cab7851cbf77abc83d2ca9750071837a802c58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_51a9315e1d10d3d79b825e234cab7851cbf77abc83d2ca9750071837a802c58f->leave($__internal_51a9315e1d10d3d79b825e234cab7851cbf77abc83d2ca9750071837a802c58f_prof);

        
        $__internal_04314bbef27afd7be7f23730b00c28756155205b1b43e181ed4ccc4f810c9086->leave($__internal_04314bbef27afd7be7f23730b00c28756155205b1b43e181ed4ccc4f810c9086_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_fe942f17362d406c721faf51ea0f23b7f1d821c506a7b0a8b85b800142c80415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe942f17362d406c721faf51ea0f23b7f1d821c506a7b0a8b85b800142c80415->enter($__internal_fe942f17362d406c721faf51ea0f23b7f1d821c506a7b0a8b85b800142c80415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ac6c90e127c50c60f0964fc92324a956b3e8845aab5d0a9d517f7a4cd302e1a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6c90e127c50c60f0964fc92324a956b3e8845aab5d0a9d517f7a4cd302e1a2->enter($__internal_ac6c90e127c50c60f0964fc92324a956b3e8845aab5d0a9d517f7a4cd302e1a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_ac6c90e127c50c60f0964fc92324a956b3e8845aab5d0a9d517f7a4cd302e1a2->leave($__internal_ac6c90e127c50c60f0964fc92324a956b3e8845aab5d0a9d517f7a4cd302e1a2_prof);

        
        $__internal_fe942f17362d406c721faf51ea0f23b7f1d821c506a7b0a8b85b800142c80415->leave($__internal_fe942f17362d406c721faf51ea0f23b7f1d821c506a7b0a8b85b800142c80415_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  81 => 20,  75 => 18,  69 => 16,  66 => 15,  57 => 14,  45 => 25,  43 => 24,  37 => 23,  34 => 22,  32 => 14,  27 => 11,);
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


<div>
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_filter_field.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_filter_field.html.twig");
    }
}
