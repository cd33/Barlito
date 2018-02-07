<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_121f632bd894f177dc9446a89882574bc3d8de057fee5314e43bf6353ee6c9b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_7732161bfec42b3ab73c5e07ff73ed04c4fd96bc1dedecfd5d5b6b9a5bc52fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7732161bfec42b3ab73c5e07ff73ed04c4fd96bc1dedecfd5d5b6b9a5bc52fc9->enter($__internal_7732161bfec42b3ab73c5e07ff73ed04c4fd96bc1dedecfd5d5b6b9a5bc52fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_61c93b1928ecf6e1fbfb11bfa9a9d6c7b30651b9a48a86d15dfd7df211f1924d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c93b1928ecf6e1fbfb11bfa9a9d6c7b30651b9a48a86d15dfd7df211f1924d->enter($__internal_61c93b1928ecf6e1fbfb11bfa9a9d6c7b30651b9a48a86d15dfd7df211f1924d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7732161bfec42b3ab73c5e07ff73ed04c4fd96bc1dedecfd5d5b6b9a5bc52fc9->leave($__internal_7732161bfec42b3ab73c5e07ff73ed04c4fd96bc1dedecfd5d5b6b9a5bc52fc9_prof);

        
        $__internal_61c93b1928ecf6e1fbfb11bfa9a9d6c7b30651b9a48a86d15dfd7df211f1924d->leave($__internal_61c93b1928ecf6e1fbfb11bfa9a9d6c7b30651b9a48a86d15dfd7df211f1924d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_428636d1098c2bb44da400cfc282934a02e5b6e18bd777dbb99634a2ab5d122c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428636d1098c2bb44da400cfc282934a02e5b6e18bd777dbb99634a2ab5d122c->enter($__internal_428636d1098c2bb44da400cfc282934a02e5b6e18bd777dbb99634a2ab5d122c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f47bf8216a8584a82ce3c935030feae411a45e3f08e06ff52dd5796321206837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47bf8216a8584a82ce3c935030feae411a45e3f08e06ff52dd5796321206837->enter($__internal_f47bf8216a8584a82ce3c935030feae411a45e3f08e06ff52dd5796321206837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f47bf8216a8584a82ce3c935030feae411a45e3f08e06ff52dd5796321206837->leave($__internal_f47bf8216a8584a82ce3c935030feae411a45e3f08e06ff52dd5796321206837_prof);

        
        $__internal_428636d1098c2bb44da400cfc282934a02e5b6e18bd777dbb99634a2ab5d122c->leave($__internal_428636d1098c2bb44da400cfc282934a02e5b6e18bd777dbb99634a2ab5d122c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
