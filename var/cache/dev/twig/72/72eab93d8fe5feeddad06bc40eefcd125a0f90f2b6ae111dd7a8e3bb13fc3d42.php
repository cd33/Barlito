<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5b095dfc08a9c508203276f0430c62c719225471d8a4aa354767cf06669cea1b extends Twig_Template
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
        $__internal_503293b6597c2801e736debab119446969d7bc0936b1327799f6af9989a01599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_503293b6597c2801e736debab119446969d7bc0936b1327799f6af9989a01599->enter($__internal_503293b6597c2801e736debab119446969d7bc0936b1327799f6af9989a01599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_3aff359abd2f62bedd1d98e8552abdf4521563cb598f394fec0049e790689a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aff359abd2f62bedd1d98e8552abdf4521563cb598f394fec0049e790689a53->enter($__internal_3aff359abd2f62bedd1d98e8552abdf4521563cb598f394fec0049e790689a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_503293b6597c2801e736debab119446969d7bc0936b1327799f6af9989a01599->leave($__internal_503293b6597c2801e736debab119446969d7bc0936b1327799f6af9989a01599_prof);

        
        $__internal_3aff359abd2f62bedd1d98e8552abdf4521563cb598f394fec0049e790689a53->leave($__internal_3aff359abd2f62bedd1d98e8552abdf4521563cb598f394fec0049e790689a53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
