<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f1ef0dbd2c1ee722f6980f3913fb3d60e9b766ee63700673d74d6c5f5bd2f158 extends Twig_Template
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
        $__internal_0aedcb43b733756954e224fb8fc167491741df4434cd383eab7801a0c6105797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aedcb43b733756954e224fb8fc167491741df4434cd383eab7801a0c6105797->enter($__internal_0aedcb43b733756954e224fb8fc167491741df4434cd383eab7801a0c6105797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_6d503713381ad2aa690f78eb88bb9465d5ed929dbf49b1466abb0f12127b7558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d503713381ad2aa690f78eb88bb9465d5ed929dbf49b1466abb0f12127b7558->enter($__internal_6d503713381ad2aa690f78eb88bb9465d5ed929dbf49b1466abb0f12127b7558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0aedcb43b733756954e224fb8fc167491741df4434cd383eab7801a0c6105797->leave($__internal_0aedcb43b733756954e224fb8fc167491741df4434cd383eab7801a0c6105797_prof);

        
        $__internal_6d503713381ad2aa690f78eb88bb9465d5ed929dbf49b1466abb0f12127b7558->leave($__internal_6d503713381ad2aa690f78eb88bb9465d5ed929dbf49b1466abb0f12127b7558_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
