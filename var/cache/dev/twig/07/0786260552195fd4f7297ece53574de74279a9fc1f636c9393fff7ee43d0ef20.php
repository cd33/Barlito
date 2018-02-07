<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_c6eb741c2edd150e2c0186d200f9859b53cbb6e199dc37056eec036ba7b104dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_d3473f209267b3c159f2465eedaf79a09d0048d5a66ffd56e2a3f9b16dca09ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3473f209267b3c159f2465eedaf79a09d0048d5a66ffd56e2a3f9b16dca09ac->enter($__internal_d3473f209267b3c159f2465eedaf79a09d0048d5a66ffd56e2a3f9b16dca09ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_f4fff24bfeb9642bb8743ce97c099952c0403cfd6e521601293a52c71437b431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4fff24bfeb9642bb8743ce97c099952c0403cfd6e521601293a52c71437b431->enter($__internal_f4fff24bfeb9642bb8743ce97c099952c0403cfd6e521601293a52c71437b431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3473f209267b3c159f2465eedaf79a09d0048d5a66ffd56e2a3f9b16dca09ac->leave($__internal_d3473f209267b3c159f2465eedaf79a09d0048d5a66ffd56e2a3f9b16dca09ac_prof);

        
        $__internal_f4fff24bfeb9642bb8743ce97c099952c0403cfd6e521601293a52c71437b431->leave($__internal_f4fff24bfeb9642bb8743ce97c099952c0403cfd6e521601293a52c71437b431_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e10f885e278d9dc3516b2a13149e493aa32aa943a99e3a1091275f8aa6a5f890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10f885e278d9dc3516b2a13149e493aa32aa943a99e3a1091275f8aa6a5f890->enter($__internal_e10f885e278d9dc3516b2a13149e493aa32aa943a99e3a1091275f8aa6a5f890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1ae6bddd3120249b5dd8d54f2a13ebba364b661e3ec324543c403bf3833b4cdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae6bddd3120249b5dd8d54f2a13ebba364b661e3ec324543c403bf3833b4cdd->enter($__internal_1ae6bddd3120249b5dd8d54f2a13ebba364b661e3ec324543c403bf3833b4cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_1ae6bddd3120249b5dd8d54f2a13ebba364b661e3ec324543c403bf3833b4cdd->leave($__internal_1ae6bddd3120249b5dd8d54f2a13ebba364b661e3ec324543c403bf3833b4cdd_prof);

        
        $__internal_e10f885e278d9dc3516b2a13149e493aa32aa943a99e3a1091275f8aa6a5f890->leave($__internal_e10f885e278d9dc3516b2a13149e493aa32aa943a99e3a1091275f8aa6a5f890_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
