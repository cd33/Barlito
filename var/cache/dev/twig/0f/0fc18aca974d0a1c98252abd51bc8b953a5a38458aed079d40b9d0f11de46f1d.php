<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_75aa82310ad5ecce93ac1e034f1d5276539aab505ea3658c2b071f95e9ffcb3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb461195734dc586383b9b424afbf573d13dc8d7764d06f00a91c66a9a13f836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb461195734dc586383b9b424afbf573d13dc8d7764d06f00a91c66a9a13f836->enter($__internal_fb461195734dc586383b9b424afbf573d13dc8d7764d06f00a91c66a9a13f836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e00bc4f60fabe3b22b88b728ed346f3600d1b5b2056abd98d556b734318c4bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00bc4f60fabe3b22b88b728ed346f3600d1b5b2056abd98d556b734318c4bab->enter($__internal_e00bc4f60fabe3b22b88b728ed346f3600d1b5b2056abd98d556b734318c4bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb461195734dc586383b9b424afbf573d13dc8d7764d06f00a91c66a9a13f836->leave($__internal_fb461195734dc586383b9b424afbf573d13dc8d7764d06f00a91c66a9a13f836_prof);

        
        $__internal_e00bc4f60fabe3b22b88b728ed346f3600d1b5b2056abd98d556b734318c4bab->leave($__internal_e00bc4f60fabe3b22b88b728ed346f3600d1b5b2056abd98d556b734318c4bab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4e8ed3aba4b469622b5d2b19d9193302d73bdc79fcc5565b94c6466f39d1bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e8ed3aba4b469622b5d2b19d9193302d73bdc79fcc5565b94c6466f39d1bf6->enter($__internal_a4e8ed3aba4b469622b5d2b19d9193302d73bdc79fcc5565b94c6466f39d1bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_536a60a79eb3a82f279e9b92eac8623e366a13c57a0a134849301fc6dd659fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536a60a79eb3a82f279e9b92eac8623e366a13c57a0a134849301fc6dd659fa0->enter($__internal_536a60a79eb3a82f279e9b92eac8623e366a13c57a0a134849301fc6dd659fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_536a60a79eb3a82f279e9b92eac8623e366a13c57a0a134849301fc6dd659fa0->leave($__internal_536a60a79eb3a82f279e9b92eac8623e366a13c57a0a134849301fc6dd659fa0_prof);

        
        $__internal_a4e8ed3aba4b469622b5d2b19d9193302d73bdc79fcc5565b94c6466f39d1bf6->leave($__internal_a4e8ed3aba4b469622b5d2b19d9193302d73bdc79fcc5565b94c6466f39d1bf6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d770c0a258e16c66841845803c631dd5be13e8e7e9a26c5d08d0fd21e169edfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d770c0a258e16c66841845803c631dd5be13e8e7e9a26c5d08d0fd21e169edfd->enter($__internal_d770c0a258e16c66841845803c631dd5be13e8e7e9a26c5d08d0fd21e169edfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da0d2d690ce058d3f5912098e5ed604e1d69f8158a0fcd3af8f365caf1506966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0d2d690ce058d3f5912098e5ed604e1d69f8158a0fcd3af8f365caf1506966->enter($__internal_da0d2d690ce058d3f5912098e5ed604e1d69f8158a0fcd3af8f365caf1506966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_da0d2d690ce058d3f5912098e5ed604e1d69f8158a0fcd3af8f365caf1506966->leave($__internal_da0d2d690ce058d3f5912098e5ed604e1d69f8158a0fcd3af8f365caf1506966_prof);

        
        $__internal_d770c0a258e16c66841845803c631dd5be13e8e7e9a26c5d08d0fd21e169edfd->leave($__internal_d770c0a258e16c66841845803c631dd5be13e8e7e9a26c5d08d0fd21e169edfd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
