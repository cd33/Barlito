<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_89961eb2477b0ab51268874fe6abc04936428e1fb20c8f59ae6c1659592d499a extends Twig_Template
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
        $__internal_6d61677afddcc20cf301fe44e67e5410a117a9ebf4649b49a2b495d667efb9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d61677afddcc20cf301fe44e67e5410a117a9ebf4649b49a2b495d667efb9e7->enter($__internal_6d61677afddcc20cf301fe44e67e5410a117a9ebf4649b49a2b495d667efb9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_0a7614616c828af1e218b2fca46f8ff6d3ad74ba02048d399d7f8654522707c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a7614616c828af1e218b2fca46f8ff6d3ad74ba02048d399d7f8654522707c1->enter($__internal_0a7614616c828af1e218b2fca46f8ff6d3ad74ba02048d399d7f8654522707c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6d61677afddcc20cf301fe44e67e5410a117a9ebf4649b49a2b495d667efb9e7->leave($__internal_6d61677afddcc20cf301fe44e67e5410a117a9ebf4649b49a2b495d667efb9e7_prof);

        
        $__internal_0a7614616c828af1e218b2fca46f8ff6d3ad74ba02048d399d7f8654522707c1->leave($__internal_0a7614616c828af1e218b2fca46f8ff6d3ad74ba02048d399d7f8654522707c1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fe4375cb1a20e67c3fc8e8a7bb4bbf0dd3a8266deb596d3bc31d103ade9dfc6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4375cb1a20e67c3fc8e8a7bb4bbf0dd3a8266deb596d3bc31d103ade9dfc6a->enter($__internal_fe4375cb1a20e67c3fc8e8a7bb4bbf0dd3a8266deb596d3bc31d103ade9dfc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_4c26d33ac7ba5c1e1e875489fc71247f2521e34d1656bc7e7d1783247526fe93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c26d33ac7ba5c1e1e875489fc71247f2521e34d1656bc7e7d1783247526fe93->enter($__internal_4c26d33ac7ba5c1e1e875489fc71247f2521e34d1656bc7e7d1783247526fe93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_4c26d33ac7ba5c1e1e875489fc71247f2521e34d1656bc7e7d1783247526fe93->leave($__internal_4c26d33ac7ba5c1e1e875489fc71247f2521e34d1656bc7e7d1783247526fe93_prof);

        
        $__internal_fe4375cb1a20e67c3fc8e8a7bb4bbf0dd3a8266deb596d3bc31d103ade9dfc6a->leave($__internal_fe4375cb1a20e67c3fc8e8a7bb4bbf0dd3a8266deb596d3bc31d103ade9dfc6a_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5cbb6f12d940676595a22b8103002098b4345775ca4bec0c46916c398106ec32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cbb6f12d940676595a22b8103002098b4345775ca4bec0c46916c398106ec32->enter($__internal_5cbb6f12d940676595a22b8103002098b4345775ca4bec0c46916c398106ec32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_0c381c52fab49680660aa3745e8892d2b1ebe3e0cfd41830e5b644b8e4704f12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c381c52fab49680660aa3745e8892d2b1ebe3e0cfd41830e5b644b8e4704f12->enter($__internal_0c381c52fab49680660aa3745e8892d2b1ebe3e0cfd41830e5b644b8e4704f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0c381c52fab49680660aa3745e8892d2b1ebe3e0cfd41830e5b644b8e4704f12->leave($__internal_0c381c52fab49680660aa3745e8892d2b1ebe3e0cfd41830e5b644b8e4704f12_prof);

        
        $__internal_5cbb6f12d940676595a22b8103002098b4345775ca4bec0c46916c398106ec32->leave($__internal_5cbb6f12d940676595a22b8103002098b4345775ca4bec0c46916c398106ec32_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2921f4da315cfbf4dfcf85cc45bd7527adc38333d3decd3574f02a2486c071be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2921f4da315cfbf4dfcf85cc45bd7527adc38333d3decd3574f02a2486c071be->enter($__internal_2921f4da315cfbf4dfcf85cc45bd7527adc38333d3decd3574f02a2486c071be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_fe770608fafba68f3036f8e77b32c784a100d89c6758d2eb8e0cebe4bb901507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe770608fafba68f3036f8e77b32c784a100d89c6758d2eb8e0cebe4bb901507->enter($__internal_fe770608fafba68f3036f8e77b32c784a100d89c6758d2eb8e0cebe4bb901507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fe770608fafba68f3036f8e77b32c784a100d89c6758d2eb8e0cebe4bb901507->leave($__internal_fe770608fafba68f3036f8e77b32c784a100d89c6758d2eb8e0cebe4bb901507_prof);

        
        $__internal_2921f4da315cfbf4dfcf85cc45bd7527adc38333d3decd3574f02a2486c071be->leave($__internal_2921f4da315cfbf4dfcf85cc45bd7527adc38333d3decd3574f02a2486c071be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
