<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_073c5090b66396f8e39d1c504d23c4941f8c8269080fd5aabef1dd01ce216f1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88e4e84b6fd2bb1a1d48803c63e4dfae472454612c523e0344aa66aa08334ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88e4e84b6fd2bb1a1d48803c63e4dfae472454612c523e0344aa66aa08334ff1->enter($__internal_88e4e84b6fd2bb1a1d48803c63e4dfae472454612c523e0344aa66aa08334ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_d2a247358603b9647dd10134ae3eb21b62fa7a027f25fb7d338b61e81b7a95cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a247358603b9647dd10134ae3eb21b62fa7a027f25fb7d338b61e81b7a95cf->enter($__internal_d2a247358603b9647dd10134ae3eb21b62fa7a027f25fb7d338b61e81b7a95cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_88e4e84b6fd2bb1a1d48803c63e4dfae472454612c523e0344aa66aa08334ff1->leave($__internal_88e4e84b6fd2bb1a1d48803c63e4dfae472454612c523e0344aa66aa08334ff1_prof);

        
        $__internal_d2a247358603b9647dd10134ae3eb21b62fa7a027f25fb7d338b61e81b7a95cf->leave($__internal_d2a247358603b9647dd10134ae3eb21b62fa7a027f25fb7d338b61e81b7a95cf_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a3b4b494d32675dd195ba9f00417794b7ebd93e2a4b85c57b2b425ac2ece401a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b4b494d32675dd195ba9f00417794b7ebd93e2a4b85c57b2b425ac2ece401a->enter($__internal_a3b4b494d32675dd195ba9f00417794b7ebd93e2a4b85c57b2b425ac2ece401a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9b0b84cd1baba2f32116c4a77bb75defb7643b9e21d37f510a6207bb6b848c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b0b84cd1baba2f32116c4a77bb75defb7643b9e21d37f510a6207bb6b848c84->enter($__internal_9b0b84cd1baba2f32116c4a77bb75defb7643b9e21d37f510a6207bb6b848c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_9b0b84cd1baba2f32116c4a77bb75defb7643b9e21d37f510a6207bb6b848c84->leave($__internal_9b0b84cd1baba2f32116c4a77bb75defb7643b9e21d37f510a6207bb6b848c84_prof);

        
        $__internal_a3b4b494d32675dd195ba9f00417794b7ebd93e2a4b85c57b2b425ac2ece401a->leave($__internal_a3b4b494d32675dd195ba9f00417794b7ebd93e2a4b85c57b2b425ac2ece401a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c7731894b8c9e9fac8fac697ae2197856d342e3764aa0e3b68c777b2baa4e8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7731894b8c9e9fac8fac697ae2197856d342e3764aa0e3b68c777b2baa4e8ce->enter($__internal_c7731894b8c9e9fac8fac697ae2197856d342e3764aa0e3b68c777b2baa4e8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ad002b4e3e698f6f83e9979e6f29d868ad558fc99dbc34753b9580356ccc608a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad002b4e3e698f6f83e9979e6f29d868ad558fc99dbc34753b9580356ccc608a->enter($__internal_ad002b4e3e698f6f83e9979e6f29d868ad558fc99dbc34753b9580356ccc608a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ad002b4e3e698f6f83e9979e6f29d868ad558fc99dbc34753b9580356ccc608a->leave($__internal_ad002b4e3e698f6f83e9979e6f29d868ad558fc99dbc34753b9580356ccc608a_prof);

        
        $__internal_c7731894b8c9e9fac8fac697ae2197856d342e3764aa0e3b68c777b2baa4e8ce->leave($__internal_c7731894b8c9e9fac8fac697ae2197856d342e3764aa0e3b68c777b2baa4e8ce_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bfd4c0255db5389bce29b57eb06a371f27267e55243ebe3a2deae59f5bf5505a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd4c0255db5389bce29b57eb06a371f27267e55243ebe3a2deae59f5bf5505a->enter($__internal_bfd4c0255db5389bce29b57eb06a371f27267e55243ebe3a2deae59f5bf5505a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_263fff664d1d03296a47b053cbefc3674b9a56b452813d8e7f2da906c69511a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263fff664d1d03296a47b053cbefc3674b9a56b452813d8e7f2da906c69511a9->enter($__internal_263fff664d1d03296a47b053cbefc3674b9a56b452813d8e7f2da906c69511a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_263fff664d1d03296a47b053cbefc3674b9a56b452813d8e7f2da906c69511a9->leave($__internal_263fff664d1d03296a47b053cbefc3674b9a56b452813d8e7f2da906c69511a9_prof);

        
        $__internal_bfd4c0255db5389bce29b57eb06a371f27267e55243ebe3a2deae59f5bf5505a->leave($__internal_bfd4c0255db5389bce29b57eb06a371f27267e55243ebe3a2deae59f5bf5505a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
