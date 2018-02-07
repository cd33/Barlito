<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_80b8b447fbba44485225367867d341a371c24b71920bcc155e24fbc200d13dcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3663142e87960eb8b23023dfc4c99ef19fe1b4490ac74ab8fb840e0366438f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3663142e87960eb8b23023dfc4c99ef19fe1b4490ac74ab8fb840e0366438f6f->enter($__internal_3663142e87960eb8b23023dfc4c99ef19fe1b4490ac74ab8fb840e0366438f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_2c55ff7bb5084b4e10aa375bcbdffd8390f9c7eb22f7ead64088868860885658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c55ff7bb5084b4e10aa375bcbdffd8390f9c7eb22f7ead64088868860885658->enter($__internal_2c55ff7bb5084b4e10aa375bcbdffd8390f9c7eb22f7ead64088868860885658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3663142e87960eb8b23023dfc4c99ef19fe1b4490ac74ab8fb840e0366438f6f->leave($__internal_3663142e87960eb8b23023dfc4c99ef19fe1b4490ac74ab8fb840e0366438f6f_prof);

        
        $__internal_2c55ff7bb5084b4e10aa375bcbdffd8390f9c7eb22f7ead64088868860885658->leave($__internal_2c55ff7bb5084b4e10aa375bcbdffd8390f9c7eb22f7ead64088868860885658_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a738fe544ba6cc17929aa015730f8c367ca78102e6c498acd7d5dfefa6c9aeca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a738fe544ba6cc17929aa015730f8c367ca78102e6c498acd7d5dfefa6c9aeca->enter($__internal_a738fe544ba6cc17929aa015730f8c367ca78102e6c498acd7d5dfefa6c9aeca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fe140645156ed80e3a3e33856a601162a0aedac85d979d864662f15f04c0c4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe140645156ed80e3a3e33856a601162a0aedac85d979d864662f15f04c0c4bc->enter($__internal_fe140645156ed80e3a3e33856a601162a0aedac85d979d864662f15f04c0c4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_fe140645156ed80e3a3e33856a601162a0aedac85d979d864662f15f04c0c4bc->leave($__internal_fe140645156ed80e3a3e33856a601162a0aedac85d979d864662f15f04c0c4bc_prof);

        
        $__internal_a738fe544ba6cc17929aa015730f8c367ca78102e6c498acd7d5dfefa6c9aeca->leave($__internal_a738fe544ba6cc17929aa015730f8c367ca78102e6c498acd7d5dfefa6c9aeca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
