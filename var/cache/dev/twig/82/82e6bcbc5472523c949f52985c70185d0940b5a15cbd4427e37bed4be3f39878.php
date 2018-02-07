<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_db572479c58dc8ddfa21f50e704fb2c9aa96fa0febbe6811dbc16d5e29cf20c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d46c4e66f4e83a7f47bab992a0e713b665aa8cff0128ec46c3eb470210b37c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46c4e66f4e83a7f47bab992a0e713b665aa8cff0128ec46c3eb470210b37c24->enter($__internal_d46c4e66f4e83a7f47bab992a0e713b665aa8cff0128ec46c3eb470210b37c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b32372d0b194389bad054b3df266a2c55780781acadceccf548317eaf4655e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b32372d0b194389bad054b3df266a2c55780781acadceccf548317eaf4655e9e->enter($__internal_b32372d0b194389bad054b3df266a2c55780781acadceccf548317eaf4655e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d46c4e66f4e83a7f47bab992a0e713b665aa8cff0128ec46c3eb470210b37c24->leave($__internal_d46c4e66f4e83a7f47bab992a0e713b665aa8cff0128ec46c3eb470210b37c24_prof);

        
        $__internal_b32372d0b194389bad054b3df266a2c55780781acadceccf548317eaf4655e9e->leave($__internal_b32372d0b194389bad054b3df266a2c55780781acadceccf548317eaf4655e9e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3e0a34344bbdcf08883ab848b959bdad20563ac68356b1df9401aedf4c45cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e0a34344bbdcf08883ab848b959bdad20563ac68356b1df9401aedf4c45cd2->enter($__internal_e3e0a34344bbdcf08883ab848b959bdad20563ac68356b1df9401aedf4c45cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9acc3c6cc5081f1ac934ecedb0d162702843ecbb88f97859e47a2a5572615c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9acc3c6cc5081f1ac934ecedb0d162702843ecbb88f97859e47a2a5572615c54->enter($__internal_9acc3c6cc5081f1ac934ecedb0d162702843ecbb88f97859e47a2a5572615c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9acc3c6cc5081f1ac934ecedb0d162702843ecbb88f97859e47a2a5572615c54->leave($__internal_9acc3c6cc5081f1ac934ecedb0d162702843ecbb88f97859e47a2a5572615c54_prof);

        
        $__internal_e3e0a34344bbdcf08883ab848b959bdad20563ac68356b1df9401aedf4c45cd2->leave($__internal_e3e0a34344bbdcf08883ab848b959bdad20563ac68356b1df9401aedf4c45cd2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b94bed5f832a7fa9fb010935f66f396d07bee0e8aca268e802898f741f3885ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b94bed5f832a7fa9fb010935f66f396d07bee0e8aca268e802898f741f3885ba->enter($__internal_b94bed5f832a7fa9fb010935f66f396d07bee0e8aca268e802898f741f3885ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d4900f4cac21826afb04f6ea8df8fac475656f0ee666e438025ef7697191756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4900f4cac21826afb04f6ea8df8fac475656f0ee666e438025ef7697191756->enter($__internal_6d4900f4cac21826afb04f6ea8df8fac475656f0ee666e438025ef7697191756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6d4900f4cac21826afb04f6ea8df8fac475656f0ee666e438025ef7697191756->leave($__internal_6d4900f4cac21826afb04f6ea8df8fac475656f0ee666e438025ef7697191756_prof);

        
        $__internal_b94bed5f832a7fa9fb010935f66f396d07bee0e8aca268e802898f741f3885ba->leave($__internal_b94bed5f832a7fa9fb010935f66f396d07bee0e8aca268e802898f741f3885ba_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_978e62737b2e682e72cff5303a72db39f68a348e2263b1a6308366c281ceaf87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978e62737b2e682e72cff5303a72db39f68a348e2263b1a6308366c281ceaf87->enter($__internal_978e62737b2e682e72cff5303a72db39f68a348e2263b1a6308366c281ceaf87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_254954468fa4b5faa1242e3093987d7a3b109b0c3633e733cfbaa3062ec6ef37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254954468fa4b5faa1242e3093987d7a3b109b0c3633e733cfbaa3062ec6ef37->enter($__internal_254954468fa4b5faa1242e3093987d7a3b109b0c3633e733cfbaa3062ec6ef37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_254954468fa4b5faa1242e3093987d7a3b109b0c3633e733cfbaa3062ec6ef37->leave($__internal_254954468fa4b5faa1242e3093987d7a3b109b0c3633e733cfbaa3062ec6ef37_prof);

        
        $__internal_978e62737b2e682e72cff5303a72db39f68a348e2263b1a6308366c281ceaf87->leave($__internal_978e62737b2e682e72cff5303a72db39f68a348e2263b1a6308366c281ceaf87_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
