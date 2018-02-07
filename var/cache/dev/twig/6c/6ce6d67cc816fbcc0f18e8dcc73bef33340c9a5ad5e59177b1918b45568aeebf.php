<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_83527b867c7e640bb6335b5442b70002c15d0e6164e7d19c1a152c06674f9870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_022838dbe07c124b1d439cea6ec7849574dbd9173c53b8f65447f5493e13f937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022838dbe07c124b1d439cea6ec7849574dbd9173c53b8f65447f5493e13f937->enter($__internal_022838dbe07c124b1d439cea6ec7849574dbd9173c53b8f65447f5493e13f937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_062941cad821633b2e96921f59b5a3a5b537109c528ee40c0048da6dfb11badb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062941cad821633b2e96921f59b5a3a5b537109c528ee40c0048da6dfb11badb->enter($__internal_062941cad821633b2e96921f59b5a3a5b537109c528ee40c0048da6dfb11badb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_022838dbe07c124b1d439cea6ec7849574dbd9173c53b8f65447f5493e13f937->leave($__internal_022838dbe07c124b1d439cea6ec7849574dbd9173c53b8f65447f5493e13f937_prof);

        
        $__internal_062941cad821633b2e96921f59b5a3a5b537109c528ee40c0048da6dfb11badb->leave($__internal_062941cad821633b2e96921f59b5a3a5b537109c528ee40c0048da6dfb11badb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7914c6eb5a8da6b8e206df513342f3642b608fc994d6b1bc4f3db95375dbcca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7914c6eb5a8da6b8e206df513342f3642b608fc994d6b1bc4f3db95375dbcca0->enter($__internal_7914c6eb5a8da6b8e206df513342f3642b608fc994d6b1bc4f3db95375dbcca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bf774c3e5892d66cc096cf24884d69ecea92cd5fe437bb47c97562c40c32433d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf774c3e5892d66cc096cf24884d69ecea92cd5fe437bb47c97562c40c32433d->enter($__internal_bf774c3e5892d66cc096cf24884d69ecea92cd5fe437bb47c97562c40c32433d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bf774c3e5892d66cc096cf24884d69ecea92cd5fe437bb47c97562c40c32433d->leave($__internal_bf774c3e5892d66cc096cf24884d69ecea92cd5fe437bb47c97562c40c32433d_prof);

        
        $__internal_7914c6eb5a8da6b8e206df513342f3642b608fc994d6b1bc4f3db95375dbcca0->leave($__internal_7914c6eb5a8da6b8e206df513342f3642b608fc994d6b1bc4f3db95375dbcca0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fac29599dd22bc8b35fb7ff89eab3cae94158af208bc0aea241761225ea7825c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac29599dd22bc8b35fb7ff89eab3cae94158af208bc0aea241761225ea7825c->enter($__internal_fac29599dd22bc8b35fb7ff89eab3cae94158af208bc0aea241761225ea7825c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ff3ecf0b3f838446e4492492944d1b8d478344c2bc7872907f9a63268dc30526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3ecf0b3f838446e4492492944d1b8d478344c2bc7872907f9a63268dc30526->enter($__internal_ff3ecf0b3f838446e4492492944d1b8d478344c2bc7872907f9a63268dc30526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff3ecf0b3f838446e4492492944d1b8d478344c2bc7872907f9a63268dc30526->leave($__internal_ff3ecf0b3f838446e4492492944d1b8d478344c2bc7872907f9a63268dc30526_prof);

        
        $__internal_fac29599dd22bc8b35fb7ff89eab3cae94158af208bc0aea241761225ea7825c->leave($__internal_fac29599dd22bc8b35fb7ff89eab3cae94158af208bc0aea241761225ea7825c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff327b346685b1a15393c129a4982bdd1414ba3a260a48e745ec4f59bf01cc9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff327b346685b1a15393c129a4982bdd1414ba3a260a48e745ec4f59bf01cc9a->enter($__internal_ff327b346685b1a15393c129a4982bdd1414ba3a260a48e745ec4f59bf01cc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7ced91f5fdde99c63c977a21eda8a6c3083fb692fa14d70982652d2367a671a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7ced91f5fdde99c63c977a21eda8a6c3083fb692fa14d70982652d2367a671a->enter($__internal_c7ced91f5fdde99c63c977a21eda8a6c3083fb692fa14d70982652d2367a671a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c7ced91f5fdde99c63c977a21eda8a6c3083fb692fa14d70982652d2367a671a->leave($__internal_c7ced91f5fdde99c63c977a21eda8a6c3083fb692fa14d70982652d2367a671a_prof);

        
        $__internal_ff327b346685b1a15393c129a4982bdd1414ba3a260a48e745ec4f59bf01cc9a->leave($__internal_ff327b346685b1a15393c129a4982bdd1414ba3a260a48e745ec4f59bf01cc9a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
