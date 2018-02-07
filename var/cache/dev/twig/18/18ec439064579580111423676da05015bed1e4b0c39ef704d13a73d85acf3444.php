<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_6ee420516b968033560b8b723f507c6fbb93341d4363619d47a4f45c7f90d48f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_634f2d7f891b846583355f9c43b42ebb8b2b530f3cd2b8062eecede2a6fc99cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634f2d7f891b846583355f9c43b42ebb8b2b530f3cd2b8062eecede2a6fc99cf->enter($__internal_634f2d7f891b846583355f9c43b42ebb8b2b530f3cd2b8062eecede2a6fc99cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        $__internal_79d6421a7d529107a829f09cd005253618f7890d6cf784e6fad2cad8ef8ff97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d6421a7d529107a829f09cd005253618f7890d6cf784e6fad2cad8ef8ff97d->enter($__internal_79d6421a7d529107a829f09cd005253618f7890d6cf784e6fad2cad8ef8ff97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
        
        $__internal_634f2d7f891b846583355f9c43b42ebb8b2b530f3cd2b8062eecede2a6fc99cf->leave($__internal_634f2d7f891b846583355f9c43b42ebb8b2b530f3cd2b8062eecede2a6fc99cf_prof);

        
        $__internal_79d6421a7d529107a829f09cd005253618f7890d6cf784e6fad2cad8ef8ff97d->leave($__internal_79d6421a7d529107a829f09cd005253618f7890d6cf784e6fad2cad8ef8ff97d_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_056679ea3ba408af46a12378d1fd7bdf7282285a74712967cec9738adaf22e38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_056679ea3ba408af46a12378d1fd7bdf7282285a74712967cec9738adaf22e38->enter($__internal_056679ea3ba408af46a12378d1fd7bdf7282285a74712967cec9738adaf22e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_deb6da548581dda23564ca57782db0a136be371ba46e63cdbb4549a7b20a447b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_deb6da548581dda23564ca57782db0a136be371ba46e63cdbb4549a7b20a447b->enter($__internal_deb6da548581dda23564ca57782db0a136be371ba46e63cdbb4549a7b20a447b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
        
        $__internal_deb6da548581dda23564ca57782db0a136be371ba46e63cdbb4549a7b20a447b->leave($__internal_deb6da548581dda23564ca57782db0a136be371ba46e63cdbb4549a7b20a447b_prof);

        
        $__internal_056679ea3ba408af46a12378d1fd7bdf7282285a74712967cec9738adaf22e38->leave($__internal_056679ea3ba408af46a12378d1fd7bdf7282285a74712967cec9738adaf22e38_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_e75bd4f89986f432a4a0825f16870cfbaf71e8abbd6a4e89c3366d11f6882218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75bd4f89986f432a4a0825f16870cfbaf71e8abbd6a4e89c3366d11f6882218->enter($__internal_e75bd4f89986f432a4a0825f16870cfbaf71e8abbd6a4e89c3366d11f6882218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f05caf9518d407e95a21bb6ef015b068f289efa9433bf454a1a3cd50757e395b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05caf9518d407e95a21bb6ef015b068f289efa9433bf454a1a3cd50757e395b->enter($__internal_f05caf9518d407e95a21bb6ef015b068f289efa9433bf454a1a3cd50757e395b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_f05caf9518d407e95a21bb6ef015b068f289efa9433bf454a1a3cd50757e395b->leave($__internal_f05caf9518d407e95a21bb6ef015b068f289efa9433bf454a1a3cd50757e395b_prof);

        
        $__internal_e75bd4f89986f432a4a0825f16870cfbaf71e8abbd6a4e89c3366d11f6882218->leave($__internal_e75bd4f89986f432a4a0825f16870cfbaf71e8abbd6a4e89c3366d11f6882218_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_3df7628fd422af9e2b5edcbc0ce89774db992e46f9d1a88e25bcec54b0f7bc9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df7628fd422af9e2b5edcbc0ce89774db992e46f9d1a88e25bcec54b0f7bc9d->enter($__internal_3df7628fd422af9e2b5edcbc0ce89774db992e46f9d1a88e25bcec54b0f7bc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_3bc9ccd7b85f63c27358d1defc0c56456a9748fed863d6590ac8d977d9649ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc9ccd7b85f63c27358d1defc0c56456a9748fed863d6590ac8d977d9649ed2->enter($__internal_3bc9ccd7b85f63c27358d1defc0c56456a9748fed863d6590ac8d977d9649ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_3bc9ccd7b85f63c27358d1defc0c56456a9748fed863d6590ac8d977d9649ed2->leave($__internal_3bc9ccd7b85f63c27358d1defc0c56456a9748fed863d6590ac8d977d9649ed2_prof);

        
        $__internal_3df7628fd422af9e2b5edcbc0ce89774db992e46f9d1a88e25bcec54b0f7bc9d->leave($__internal_3df7628fd422af9e2b5edcbc0ce89774db992e46f9d1a88e25bcec54b0f7bc9d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 28,  110 => 25,  100 => 23,  96 => 21,  90 => 19,  84 => 17,  81 => 16,  78 => 15,  69 => 14,  57 => 29,  55 => 28,  51 => 26,  49 => 25,  46 => 24,  44 => 14,  31 => 12,  28 => 11,);
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

<div id=\"sonata-ba-field-container-{{ field_element.vars.id }}\" class=\"sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length %}sonata-ba-field-error{% endif %}\">

    {% block label %}
        {% if inline == 'natural' %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endif %}
    {% endblock %}

    {% block field %}{{ form_widget(field_element) }}{% endblock %}

    <div class=\"sonata-ba-field-error-messages\">
        {% block errors %}{{ form_errors(field_element) }}{% endblock %}
    </div>
</div>
", "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_inline_edit_field.html.twig");
    }
}
