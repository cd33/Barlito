<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c26bac794fd324316937d6df041bbc958e6bdadb8a2d4e3357854f2af12a8fe6 extends Twig_Template
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
        $__internal_9b74cd77f83427fc8e65332e62c1c2a5cbe1a2c224be4c978ed12ebd9eef669f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b74cd77f83427fc8e65332e62c1c2a5cbe1a2c224be4c978ed12ebd9eef669f->enter($__internal_9b74cd77f83427fc8e65332e62c1c2a5cbe1a2c224be4c978ed12ebd9eef669f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_b7d08e97397c8adebb3c3028e9827a7676d319193e0186c020c0b836868291e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d08e97397c8adebb3c3028e9827a7676d319193e0186c020c0b836868291e5->enter($__internal_b7d08e97397c8adebb3c3028e9827a7676d319193e0186c020c0b836868291e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9b74cd77f83427fc8e65332e62c1c2a5cbe1a2c224be4c978ed12ebd9eef669f->leave($__internal_9b74cd77f83427fc8e65332e62c1c2a5cbe1a2c224be4c978ed12ebd9eef669f_prof);

        
        $__internal_b7d08e97397c8adebb3c3028e9827a7676d319193e0186c020c0b836868291e5->leave($__internal_b7d08e97397c8adebb3c3028e9827a7676d319193e0186c020c0b836868291e5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
