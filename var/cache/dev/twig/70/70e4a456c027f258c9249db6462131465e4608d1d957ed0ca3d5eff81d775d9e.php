<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_33b5d5967dfad75d4968fb4d781c05fc9d02cab204ead56c68d1c51a517078d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_511de6ed60b1264ed4137d1638534b571cb0f0a0583736dd9745041cc5f5e850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_511de6ed60b1264ed4137d1638534b571cb0f0a0583736dd9745041cc5f5e850->enter($__internal_511de6ed60b1264ed4137d1638534b571cb0f0a0583736dd9745041cc5f5e850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_b5823dcb286efe5ee74961c492338890644ca4761ea4b4df7087a37d69ee8939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5823dcb286efe5ee74961c492338890644ca4761ea4b4df7087a37d69ee8939->enter($__internal_b5823dcb286efe5ee74961c492338890644ca4761ea4b4df7087a37d69ee8939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_511de6ed60b1264ed4137d1638534b571cb0f0a0583736dd9745041cc5f5e850->leave($__internal_511de6ed60b1264ed4137d1638534b571cb0f0a0583736dd9745041cc5f5e850_prof);

        
        $__internal_b5823dcb286efe5ee74961c492338890644ca4761ea4b4df7087a37d69ee8939->leave($__internal_b5823dcb286efe5ee74961c492338890644ca4761ea4b4df7087a37d69ee8939_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af3c8539a955ece820441dd82f958aeeb4d8a686147c7bd72478e17d791221d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3c8539a955ece820441dd82f958aeeb4d8a686147c7bd72478e17d791221d7->enter($__internal_af3c8539a955ece820441dd82f958aeeb4d8a686147c7bd72478e17d791221d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2b7f16f88596889f6682e73a5702b675298f0b7e1218b341de665524c684f67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b7f16f88596889f6682e73a5702b675298f0b7e1218b341de665524c684f67b->enter($__internal_2b7f16f88596889f6682e73a5702b675298f0b7e1218b341de665524c684f67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2b7f16f88596889f6682e73a5702b675298f0b7e1218b341de665524c684f67b->leave($__internal_2b7f16f88596889f6682e73a5702b675298f0b7e1218b341de665524c684f67b_prof);

        
        $__internal_af3c8539a955ece820441dd82f958aeeb4d8a686147c7bd72478e17d791221d7->leave($__internal_af3c8539a955ece820441dd82f958aeeb4d8a686147c7bd72478e17d791221d7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
