<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_9c0b8a10ff5ee75802a5865e8e870630c1375fb546bc2f1b82756908beea3263 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_91898caddbed92252652f5835a0a6c0ef94b6dc5ebb4880f2674d04962e9add8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91898caddbed92252652f5835a0a6c0ef94b6dc5ebb4880f2674d04962e9add8->enter($__internal_91898caddbed92252652f5835a0a6c0ef94b6dc5ebb4880f2674d04962e9add8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_476075cdead67761a411dda092305c3417ba282e4990237a34e83174a6cb2096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476075cdead67761a411dda092305c3417ba282e4990237a34e83174a6cb2096->enter($__internal_476075cdead67761a411dda092305c3417ba282e4990237a34e83174a6cb2096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91898caddbed92252652f5835a0a6c0ef94b6dc5ebb4880f2674d04962e9add8->leave($__internal_91898caddbed92252652f5835a0a6c0ef94b6dc5ebb4880f2674d04962e9add8_prof);

        
        $__internal_476075cdead67761a411dda092305c3417ba282e4990237a34e83174a6cb2096->leave($__internal_476075cdead67761a411dda092305c3417ba282e4990237a34e83174a6cb2096_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a8287990cb60427f19ecbaffac5e396530f2f0ab60a8a25b16d4ea3e5656227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8287990cb60427f19ecbaffac5e396530f2f0ab60a8a25b16d4ea3e5656227->enter($__internal_9a8287990cb60427f19ecbaffac5e396530f2f0ab60a8a25b16d4ea3e5656227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_35075002e4c835972210fd7654d8d5ec5b1965c8064170319ff9f5e3d19ff255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35075002e4c835972210fd7654d8d5ec5b1965c8064170319ff9f5e3d19ff255->enter($__internal_35075002e4c835972210fd7654d8d5ec5b1965c8064170319ff9f5e3d19ff255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_35075002e4c835972210fd7654d8d5ec5b1965c8064170319ff9f5e3d19ff255->leave($__internal_35075002e4c835972210fd7654d8d5ec5b1965c8064170319ff9f5e3d19ff255_prof);

        
        $__internal_9a8287990cb60427f19ecbaffac5e396530f2f0ab60a8a25b16d4ea3e5656227->leave($__internal_9a8287990cb60427f19ecbaffac5e396530f2f0ab60a8a25b16d4ea3e5656227_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
