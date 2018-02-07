<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d42a964a0c86006146eab1483f5ccae3cf892393e3487dfd38e3baa6b15b1d3e extends Twig_Template
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
        $__internal_319262b2e13f955109afe3e8d16f9763275ad37f3c6d24ed05599f6e00588f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319262b2e13f955109afe3e8d16f9763275ad37f3c6d24ed05599f6e00588f48->enter($__internal_319262b2e13f955109afe3e8d16f9763275ad37f3c6d24ed05599f6e00588f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_558152cb0bae6b7a2f80af63775f083d524ef3b81265891b3e223c82237a6f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558152cb0bae6b7a2f80af63775f083d524ef3b81265891b3e223c82237a6f66->enter($__internal_558152cb0bae6b7a2f80af63775f083d524ef3b81265891b3e223c82237a6f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_319262b2e13f955109afe3e8d16f9763275ad37f3c6d24ed05599f6e00588f48->leave($__internal_319262b2e13f955109afe3e8d16f9763275ad37f3c6d24ed05599f6e00588f48_prof);

        
        $__internal_558152cb0bae6b7a2f80af63775f083d524ef3b81265891b3e223c82237a6f66->leave($__internal_558152cb0bae6b7a2f80af63775f083d524ef3b81265891b3e223c82237a6f66_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
