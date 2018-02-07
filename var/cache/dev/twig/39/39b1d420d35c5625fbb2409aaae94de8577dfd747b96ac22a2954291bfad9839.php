<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_3fdc8721c4db2e206b4d86a4eb5df68156f09196f7460b7ab75bf25aabbfcb04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_653915179ca9af79e794856f4698df050ac8196db5570f4a19e2cda410948734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_653915179ca9af79e794856f4698df050ac8196db5570f4a19e2cda410948734->enter($__internal_653915179ca9af79e794856f4698df050ac8196db5570f4a19e2cda410948734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_dc4c29b8746b3e85328f6446ad276e6fdf53e58d591af6e7afd8f7ef1c277427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4c29b8746b3e85328f6446ad276e6fdf53e58d591af6e7afd8f7ef1c277427->enter($__internal_dc4c29b8746b3e85328f6446ad276e6fdf53e58d591af6e7afd8f7ef1c277427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_653915179ca9af79e794856f4698df050ac8196db5570f4a19e2cda410948734->leave($__internal_653915179ca9af79e794856f4698df050ac8196db5570f4a19e2cda410948734_prof);

        
        $__internal_dc4c29b8746b3e85328f6446ad276e6fdf53e58d591af6e7afd8f7ef1c277427->leave($__internal_dc4c29b8746b3e85328f6446ad276e6fdf53e58d591af6e7afd8f7ef1c277427_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e742d3300686ddca822deaedfa7e1dd10664caa2bbd15e4fe2ffbd4053a59ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e742d3300686ddca822deaedfa7e1dd10664caa2bbd15e4fe2ffbd4053a59ec7->enter($__internal_e742d3300686ddca822deaedfa7e1dd10664caa2bbd15e4fe2ffbd4053a59ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f843362acad3e05a32a92a0b3076acd244db7d00e7dbb554186c7c3142203b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f843362acad3e05a32a92a0b3076acd244db7d00e7dbb554186c7c3142203b2a->enter($__internal_f843362acad3e05a32a92a0b3076acd244db7d00e7dbb554186c7c3142203b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f843362acad3e05a32a92a0b3076acd244db7d00e7dbb554186c7c3142203b2a->leave($__internal_f843362acad3e05a32a92a0b3076acd244db7d00e7dbb554186c7c3142203b2a_prof);

        
        $__internal_e742d3300686ddca822deaedfa7e1dd10664caa2bbd15e4fe2ffbd4053a59ec7->leave($__internal_e742d3300686ddca822deaedfa7e1dd10664caa2bbd15e4fe2ffbd4053a59ec7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
