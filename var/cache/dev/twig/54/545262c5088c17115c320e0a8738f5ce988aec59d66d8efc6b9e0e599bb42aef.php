<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_853d9fb06ad8765848464fa2f2a449f7d266c3afb836cce5aff481a6ba9666ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f4c03217c2e3b9994786374b66020e4495ea236e1aef37e2a1d6f0e4ccfbe19d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c03217c2e3b9994786374b66020e4495ea236e1aef37e2a1d6f0e4ccfbe19d->enter($__internal_f4c03217c2e3b9994786374b66020e4495ea236e1aef37e2a1d6f0e4ccfbe19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e0958d1e722e571dabb4c7cde46a844b2158e3942a52aa5d3f1982a97cadccc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0958d1e722e571dabb4c7cde46a844b2158e3942a52aa5d3f1982a97cadccc6->enter($__internal_e0958d1e722e571dabb4c7cde46a844b2158e3942a52aa5d3f1982a97cadccc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4c03217c2e3b9994786374b66020e4495ea236e1aef37e2a1d6f0e4ccfbe19d->leave($__internal_f4c03217c2e3b9994786374b66020e4495ea236e1aef37e2a1d6f0e4ccfbe19d_prof);

        
        $__internal_e0958d1e722e571dabb4c7cde46a844b2158e3942a52aa5d3f1982a97cadccc6->leave($__internal_e0958d1e722e571dabb4c7cde46a844b2158e3942a52aa5d3f1982a97cadccc6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_70c1f7031caee7d8ff2bbc6b9e86f1944db7f696e0dfc4385d4937d72cacbcfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c1f7031caee7d8ff2bbc6b9e86f1944db7f696e0dfc4385d4937d72cacbcfc->enter($__internal_70c1f7031caee7d8ff2bbc6b9e86f1944db7f696e0dfc4385d4937d72cacbcfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c11782c0d43e445a6acd5b452d2fe7781216e859618be1334578d52741964135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11782c0d43e445a6acd5b452d2fe7781216e859618be1334578d52741964135->enter($__internal_c11782c0d43e445a6acd5b452d2fe7781216e859618be1334578d52741964135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c11782c0d43e445a6acd5b452d2fe7781216e859618be1334578d52741964135->leave($__internal_c11782c0d43e445a6acd5b452d2fe7781216e859618be1334578d52741964135_prof);

        
        $__internal_70c1f7031caee7d8ff2bbc6b9e86f1944db7f696e0dfc4385d4937d72cacbcfc->leave($__internal_70c1f7031caee7d8ff2bbc6b9e86f1944db7f696e0dfc4385d4937d72cacbcfc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e2d8425bb09007cb6603f31cb52c4975662a79622923673388e9f3feb4553f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2d8425bb09007cb6603f31cb52c4975662a79622923673388e9f3feb4553f4->enter($__internal_3e2d8425bb09007cb6603f31cb52c4975662a79622923673388e9f3feb4553f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_348b5cf43a7c085f9c52495ecbfcb31e328a0cf6f43be61bb92dc926568dcfcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_348b5cf43a7c085f9c52495ecbfcb31e328a0cf6f43be61bb92dc926568dcfcf->enter($__internal_348b5cf43a7c085f9c52495ecbfcb31e328a0cf6f43be61bb92dc926568dcfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_348b5cf43a7c085f9c52495ecbfcb31e328a0cf6f43be61bb92dc926568dcfcf->leave($__internal_348b5cf43a7c085f9c52495ecbfcb31e328a0cf6f43be61bb92dc926568dcfcf_prof);

        
        $__internal_3e2d8425bb09007cb6603f31cb52c4975662a79622923673388e9f3feb4553f4->leave($__internal_3e2d8425bb09007cb6603f31cb52c4975662a79622923673388e9f3feb4553f4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c430130fc4d29d7e7769f866823e52ce7c9fd232afeb56dec592c19de7db42b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c430130fc4d29d7e7769f866823e52ce7c9fd232afeb56dec592c19de7db42b7->enter($__internal_c430130fc4d29d7e7769f866823e52ce7c9fd232afeb56dec592c19de7db42b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_237d8ca154a33d6e42fb0463f11a9b72b03fe07a77b6fcea8918471921194339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237d8ca154a33d6e42fb0463f11a9b72b03fe07a77b6fcea8918471921194339->enter($__internal_237d8ca154a33d6e42fb0463f11a9b72b03fe07a77b6fcea8918471921194339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_237d8ca154a33d6e42fb0463f11a9b72b03fe07a77b6fcea8918471921194339->leave($__internal_237d8ca154a33d6e42fb0463f11a9b72b03fe07a77b6fcea8918471921194339_prof);

        
        $__internal_c430130fc4d29d7e7769f866823e52ce7c9fd232afeb56dec592c19de7db42b7->leave($__internal_c430130fc4d29d7e7769f866823e52ce7c9fd232afeb56dec592c19de7db42b7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
