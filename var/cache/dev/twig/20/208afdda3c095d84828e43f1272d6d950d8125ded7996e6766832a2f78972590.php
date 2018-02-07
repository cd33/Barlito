<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_bfb64ba63500a9e3121645a8b7d6b7b5a9b49c7eb555b4b6e3d772c987758151 extends Twig_Template
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
        $__internal_35699a04baf102097c0c1acc6cf331f72ae2d9aa28c9f7a2792f07f1ea00171e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35699a04baf102097c0c1acc6cf331f72ae2d9aa28c9f7a2792f07f1ea00171e->enter($__internal_35699a04baf102097c0c1acc6cf331f72ae2d9aa28c9f7a2792f07f1ea00171e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_c27a51725973a18c488961e3e65976e57dc51b881983f79153adec92af358df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c27a51725973a18c488961e3e65976e57dc51b881983f79153adec92af358df1->enter($__internal_c27a51725973a18c488961e3e65976e57dc51b881983f79153adec92af358df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_35699a04baf102097c0c1acc6cf331f72ae2d9aa28c9f7a2792f07f1ea00171e->leave($__internal_35699a04baf102097c0c1acc6cf331f72ae2d9aa28c9f7a2792f07f1ea00171e_prof);

        
        $__internal_c27a51725973a18c488961e3e65976e57dc51b881983f79153adec92af358df1->leave($__internal_c27a51725973a18c488961e3e65976e57dc51b881983f79153adec92af358df1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
