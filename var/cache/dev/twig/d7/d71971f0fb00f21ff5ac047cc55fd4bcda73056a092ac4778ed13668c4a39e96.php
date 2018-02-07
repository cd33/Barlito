<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1f15714f806fd7308c673a7f8dcfa42d3026ce365c7d356817caad90a26d0b20 extends Twig_Template
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
        $__internal_612741e49667819f5df2b50eee5d12dda123575bad659e2b830aa4472c863901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_612741e49667819f5df2b50eee5d12dda123575bad659e2b830aa4472c863901->enter($__internal_612741e49667819f5df2b50eee5d12dda123575bad659e2b830aa4472c863901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_b95d152dc0c2ab92a4dae89ba13dc0ae180060afb1061054c3ca7bf023307e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95d152dc0c2ab92a4dae89ba13dc0ae180060afb1061054c3ca7bf023307e22->enter($__internal_b95d152dc0c2ab92a4dae89ba13dc0ae180060afb1061054c3ca7bf023307e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_612741e49667819f5df2b50eee5d12dda123575bad659e2b830aa4472c863901->leave($__internal_612741e49667819f5df2b50eee5d12dda123575bad659e2b830aa4472c863901_prof);

        
        $__internal_b95d152dc0c2ab92a4dae89ba13dc0ae180060afb1061054c3ca7bf023307e22->leave($__internal_b95d152dc0c2ab92a4dae89ba13dc0ae180060afb1061054c3ca7bf023307e22_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
