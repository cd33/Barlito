<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_223cd324a46efb69f82cc8fd7210805dfa6a0f3c6c014f94ec8ef561feea5d0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cea2ec4ccd81cb1be03e1eac725e1a1ac7ff8e46bab0f390f83076c9cadd0a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea2ec4ccd81cb1be03e1eac725e1a1ac7ff8e46bab0f390f83076c9cadd0a6a->enter($__internal_cea2ec4ccd81cb1be03e1eac725e1a1ac7ff8e46bab0f390f83076c9cadd0a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        $__internal_a1df9b732745703e7fb150e2e9ec1a098a668b9525dd7e0ffb6e8c4f9531d8bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1df9b732745703e7fb150e2e9ec1a098a668b9525dd7e0ffb6e8c4f9531d8bc->enter($__internal_a1df9b732745703e7fb150e2e9ec1a098a668b9525dd7e0ffb6e8c4f9531d8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_cea2ec4ccd81cb1be03e1eac725e1a1ac7ff8e46bab0f390f83076c9cadd0a6a->leave($__internal_cea2ec4ccd81cb1be03e1eac725e1a1ac7ff8e46bab0f390f83076c9cadd0a6a_prof);

        
        $__internal_a1df9b732745703e7fb150e2e9ec1a098a668b9525dd7e0ffb6e8c4f9531d8bc->leave($__internal_a1df9b732745703e7fb150e2e9ec1a098a668b9525dd7e0ffb6e8c4f9531d8bc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_feaf3cbd7af8266ec0337a58e29ecf8fc06ad9a89c9e3ce5a1297fbcd8a5f9f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feaf3cbd7af8266ec0337a58e29ecf8fc06ad9a89c9e3ce5a1297fbcd8a5f9f8->enter($__internal_feaf3cbd7af8266ec0337a58e29ecf8fc06ad9a89c9e3ce5a1297fbcd8a5f9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_df1e51a9788dfc6366d854e06d78cd80ba4ffa19259d531d933e54f0afe804a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1e51a9788dfc6366d854e06d78cd80ba4ffa19259d531d933e54f0afe804a1->enter($__internal_df1e51a9788dfc6366d854e06d78cd80ba4ffa19259d531d933e54f0afe804a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_df1e51a9788dfc6366d854e06d78cd80ba4ffa19259d531d933e54f0afe804a1->leave($__internal_df1e51a9788dfc6366d854e06d78cd80ba4ffa19259d531d933e54f0afe804a1_prof);

        
        $__internal_feaf3cbd7af8266ec0337a58e29ecf8fc06ad9a89c9e3ce5a1297fbcd8a5f9f8->leave($__internal_feaf3cbd7af8266ec0337a58e29ecf8fc06ad9a89c9e3ce5a1297fbcd8a5f9f8_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_e45ed6da4a8484e89317d7e20ed7b2ab26510a56a07f08ed5100bf3285fb6dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45ed6da4a8484e89317d7e20ed7b2ab26510a56a07f08ed5100bf3285fb6dda->enter($__internal_e45ed6da4a8484e89317d7e20ed7b2ab26510a56a07f08ed5100bf3285fb6dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_eff15d05995728ac945d4f7a127a79b5dc6a697ff8497bfbad0827a25c3188a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff15d05995728ac945d4f7a127a79b5dc6a697ff8497bfbad0827a25c3188a4->enter($__internal_eff15d05995728ac945d4f7a127a79b5dc6a697ff8497bfbad0827a25c3188a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_eff15d05995728ac945d4f7a127a79b5dc6a697ff8497bfbad0827a25c3188a4->leave($__internal_eff15d05995728ac945d4f7a127a79b5dc6a697ff8497bfbad0827a25c3188a4_prof);

        
        $__internal_e45ed6da4a8484e89317d7e20ed7b2ab26510a56a07f08ed5100bf3285fb6dda->leave($__internal_e45ed6da4a8484e89317d7e20ed7b2ab26510a56a07f08ed5100bf3285fb6dda_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_09d49bb3ab19d931c6f11bc57e0009e1dbd718f9d804bf10056e92d0465382e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09d49bb3ab19d931c6f11bc57e0009e1dbd718f9d804bf10056e92d0465382e5->enter($__internal_09d49bb3ab19d931c6f11bc57e0009e1dbd718f9d804bf10056e92d0465382e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_3bb0da1bc94e2942e6bcfc1c2c3dcba5f9f35c3f419207ae02fd1d779cea0ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb0da1bc94e2942e6bcfc1c2c3dcba5f9f35c3f419207ae02fd1d779cea0ec6->enter($__internal_3bb0da1bc94e2942e6bcfc1c2c3dcba5f9f35c3f419207ae02fd1d779cea0ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_3bb0da1bc94e2942e6bcfc1c2c3dcba5f9f35c3f419207ae02fd1d779cea0ec6->leave($__internal_3bb0da1bc94e2942e6bcfc1c2c3dcba5f9f35c3f419207ae02fd1d779cea0ec6_prof);

        
        $__internal_09d49bb3ab19d931c6f11bc57e0009e1dbd718f9d804bf10056e92d0465382e5->leave($__internal_09d49bb3ab19d931c6f11bc57e0009e1dbd718f9d804bf10056e92d0465382e5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  105 => 21,  99 => 19,  93 => 17,  90 => 16,  81 => 15,  63 => 14,  49 => 26,  47 => 25,  43 => 23,  40 => 15,  38 => 14,  32 => 13,  28 => 11,);
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
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
