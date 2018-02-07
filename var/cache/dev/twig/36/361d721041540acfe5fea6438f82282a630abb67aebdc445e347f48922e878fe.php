<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_6d1feaca5c734ef32f5fcb9c60bc6547eb6b6d179f0adf67e03d7eee3870e0ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e97d1007a1b22493a4bbd667399d1c658f3db4855f3fcb42f063dd79ae68c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e97d1007a1b22493a4bbd667399d1c658f3db4855f3fcb42f063dd79ae68c8b->enter($__internal_4e97d1007a1b22493a4bbd667399d1c658f3db4855f3fcb42f063dd79ae68c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_a07a261fabb1498daa1cb6106586d756b43bf633c21b6a6f412dd24e22d0d1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07a261fabb1498daa1cb6106586d756b43bf633c21b6a6f412dd24e22d0d1dc->enter($__internal_a07a261fabb1498daa1cb6106586d756b43bf633c21b6a6f412dd24e22d0d1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_4e97d1007a1b22493a4bbd667399d1c658f3db4855f3fcb42f063dd79ae68c8b->leave($__internal_4e97d1007a1b22493a4bbd667399d1c658f3db4855f3fcb42f063dd79ae68c8b_prof);

        
        $__internal_a07a261fabb1498daa1cb6106586d756b43bf633c21b6a6f412dd24e22d0d1dc->leave($__internal_a07a261fabb1498daa1cb6106586d756b43bf633c21b6a6f412dd24e22d0d1dc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
