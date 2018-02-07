<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_49a8dc9d6b0778a94f7eacf16abf8c89de1450fb2d4edd248b6563454da7e739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4623cf5ea7dd0edbd1050a33f63c77709e42af4b7be96f16b72a38045dc4428e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4623cf5ea7dd0edbd1050a33f63c77709e42af4b7be96f16b72a38045dc4428e->enter($__internal_4623cf5ea7dd0edbd1050a33f63c77709e42af4b7be96f16b72a38045dc4428e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $__internal_2f2edc6c2d92d456d0d3c5384a19accda43c4ce4961a95995902d7ca2502322c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2edc6c2d92d456d0d3c5384a19accda43c4ce4961a95995902d7ca2502322c->enter($__internal_2f2edc6c2d92d456d0d3c5384a19accda43c4ce4961a95995902d7ca2502322c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4623cf5ea7dd0edbd1050a33f63c77709e42af4b7be96f16b72a38045dc4428e->leave($__internal_4623cf5ea7dd0edbd1050a33f63c77709e42af4b7be96f16b72a38045dc4428e_prof);

        
        $__internal_2f2edc6c2d92d456d0d3c5384a19accda43c4ce4961a95995902d7ca2502322c->leave($__internal_2f2edc6c2d92d456d0d3c5384a19accda43c4ce4961a95995902d7ca2502322c_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_b6d215b694fde9d7ac8bf4baeb9f2f6cdbd99f4a017c0b91bab3b1fff1803c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d215b694fde9d7ac8bf4baeb9f2f6cdbd99f4a017c0b91bab3b1fff1803c54->enter($__internal_b6d215b694fde9d7ac8bf4baeb9f2f6cdbd99f4a017c0b91bab3b1fff1803c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_1f156fb908614cbcfb2442e035c20f91e797c0ecf10ad892fbb9bc8fa42c6d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f156fb908614cbcfb2442e035c20f91e797c0ecf10ad892fbb9bc8fa42c6d9c->enter($__internal_1f156fb908614cbcfb2442e035c20f91e797c0ecf10ad892fbb9bc8fa42c6d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_1f156fb908614cbcfb2442e035c20f91e797c0ecf10ad892fbb9bc8fa42c6d9c->leave($__internal_1f156fb908614cbcfb2442e035c20f91e797c0ecf10ad892fbb9bc8fa42c6d9c_prof);

        
        $__internal_b6d215b694fde9d7ac8bf4baeb9f2f6cdbd99f4a017c0b91bab3b1fff1803c54->leave($__internal_b6d215b694fde9d7ac8bf4baeb9f2f6cdbd99f4a017c0b91bab3b1fff1803c54_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
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
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
