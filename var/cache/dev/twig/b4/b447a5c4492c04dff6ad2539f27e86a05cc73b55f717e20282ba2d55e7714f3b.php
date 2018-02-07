<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_8e2a4e4084bed7cc12acbc6bb86a7e4850c324d31b51a3dcd053af58882a0c2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_edeb8a0715f8ed4234c6c3b589aa3dee32fea09ed342e3a907eb369dec8412bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edeb8a0715f8ed4234c6c3b589aa3dee32fea09ed342e3a907eb369dec8412bc->enter($__internal_edeb8a0715f8ed4234c6c3b589aa3dee32fea09ed342e3a907eb369dec8412bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_8e6a34d85f8cf4eea5da36d00042910f740f60593b32b5007557c516748a6726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6a34d85f8cf4eea5da36d00042910f740f60593b32b5007557c516748a6726->enter($__internal_8e6a34d85f8cf4eea5da36d00042910f740f60593b32b5007557c516748a6726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edeb8a0715f8ed4234c6c3b589aa3dee32fea09ed342e3a907eb369dec8412bc->leave($__internal_edeb8a0715f8ed4234c6c3b589aa3dee32fea09ed342e3a907eb369dec8412bc_prof);

        
        $__internal_8e6a34d85f8cf4eea5da36d00042910f740f60593b32b5007557c516748a6726->leave($__internal_8e6a34d85f8cf4eea5da36d00042910f740f60593b32b5007557c516748a6726_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a25204b63ba0e0d6dba7feccafdca516cdb084c0953318039bd6166e1c49bdb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25204b63ba0e0d6dba7feccafdca516cdb084c0953318039bd6166e1c49bdb4->enter($__internal_a25204b63ba0e0d6dba7feccafdca516cdb084c0953318039bd6166e1c49bdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4154a73d191bdf832e4144454e6fba72104daf3968538eb3fbd99d1b01523ed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4154a73d191bdf832e4144454e6fba72104daf3968538eb3fbd99d1b01523ed0->enter($__internal_4154a73d191bdf832e4144454e6fba72104daf3968538eb3fbd99d1b01523ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_4154a73d191bdf832e4144454e6fba72104daf3968538eb3fbd99d1b01523ed0->leave($__internal_4154a73d191bdf832e4144454e6fba72104daf3968538eb3fbd99d1b01523ed0_prof);

        
        $__internal_a25204b63ba0e0d6dba7feccafdca516cdb084c0953318039bd6166e1c49bdb4->leave($__internal_a25204b63ba0e0d6dba7feccafdca516cdb084c0953318039bd6166e1c49bdb4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
