<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f87f66c747d9a6118d3b48e0cfbfdcd86d5b76c7d65ee31323697b7259046e57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_7c8c612445108a1ba383fb080c1e63ed4c52b25743f1b0a9b3f251cc407f0daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8c612445108a1ba383fb080c1e63ed4c52b25743f1b0a9b3f251cc407f0daa->enter($__internal_7c8c612445108a1ba383fb080c1e63ed4c52b25743f1b0a9b3f251cc407f0daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_c944ec2a9cf0bbc225e5026f47ac33cfc14ea244f4a5fc66aa34da9f168641bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c944ec2a9cf0bbc225e5026f47ac33cfc14ea244f4a5fc66aa34da9f168641bb->enter($__internal_c944ec2a9cf0bbc225e5026f47ac33cfc14ea244f4a5fc66aa34da9f168641bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c8c612445108a1ba383fb080c1e63ed4c52b25743f1b0a9b3f251cc407f0daa->leave($__internal_7c8c612445108a1ba383fb080c1e63ed4c52b25743f1b0a9b3f251cc407f0daa_prof);

        
        $__internal_c944ec2a9cf0bbc225e5026f47ac33cfc14ea244f4a5fc66aa34da9f168641bb->leave($__internal_c944ec2a9cf0bbc225e5026f47ac33cfc14ea244f4a5fc66aa34da9f168641bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80ffd4d4e162a17345c1219070d3b3371c2c6f3103cfe1241c9c4bb3d662cc9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80ffd4d4e162a17345c1219070d3b3371c2c6f3103cfe1241c9c4bb3d662cc9e->enter($__internal_80ffd4d4e162a17345c1219070d3b3371c2c6f3103cfe1241c9c4bb3d662cc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3f4204bc1789700756b4fb459f286fcfe5bae0abaf936a7f8c661904d097924a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f4204bc1789700756b4fb459f286fcfe5bae0abaf936a7f8c661904d097924a->enter($__internal_3f4204bc1789700756b4fb459f286fcfe5bae0abaf936a7f8c661904d097924a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3f4204bc1789700756b4fb459f286fcfe5bae0abaf936a7f8c661904d097924a->leave($__internal_3f4204bc1789700756b4fb459f286fcfe5bae0abaf936a7f8c661904d097924a_prof);

        
        $__internal_80ffd4d4e162a17345c1219070d3b3371c2c6f3103cfe1241c9c4bb3d662cc9e->leave($__internal_80ffd4d4e162a17345c1219070d3b3371c2c6f3103cfe1241c9c4bb3d662cc9e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
