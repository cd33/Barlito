<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0e803cf288906bdd60f17b89c0c9e78e011743566bf2d643392608fcd1521d23 extends Twig_Template
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
        $__internal_3db799a1554fbba6112ca1d0e3acd0837fca3c717bae45554eb9cb22de0854f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db799a1554fbba6112ca1d0e3acd0837fca3c717bae45554eb9cb22de0854f9->enter($__internal_3db799a1554fbba6112ca1d0e3acd0837fca3c717bae45554eb9cb22de0854f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_81603daa94be7e5d42ff25667042906a88b163ce05e0d91a2f55b31a48fa1b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81603daa94be7e5d42ff25667042906a88b163ce05e0d91a2f55b31a48fa1b0e->enter($__internal_81603daa94be7e5d42ff25667042906a88b163ce05e0d91a2f55b31a48fa1b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_3db799a1554fbba6112ca1d0e3acd0837fca3c717bae45554eb9cb22de0854f9->leave($__internal_3db799a1554fbba6112ca1d0e3acd0837fca3c717bae45554eb9cb22de0854f9_prof);

        
        $__internal_81603daa94be7e5d42ff25667042906a88b163ce05e0d91a2f55b31a48fa1b0e->leave($__internal_81603daa94be7e5d42ff25667042906a88b163ce05e0d91a2f55b31a48fa1b0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
