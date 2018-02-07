<?php

/* AppBundle::test.html.twig */
class __TwigTemplate_d1ebf43e8cedf12a30e521229a2fee074c3cb6691b2cbc547bae021af50835ff extends Twig_Template
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
        $__internal_164ab0d1ce719f031cf651fa76c4c0833d79b5e2091337d648363c1c21d01a81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164ab0d1ce719f031cf651fa76c4c0833d79b5e2091337d648363c1c21d01a81->enter($__internal_164ab0d1ce719f031cf651fa76c4c0833d79b5e2091337d648363c1c21d01a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::test.html.twig"));

        $__internal_42c6572ddb5640b5638bc45441c0dec5eba36c657e2bb67e2e50aa17806c98d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c6572ddb5640b5638bc45441c0dec5eba36c657e2bb67e2e50aa17806c98d7->enter($__internal_42c6572ddb5640b5638bc45441c0dec5eba36c657e2bb67e2e50aa17806c98d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::test.html.twig"));

        // line 1
        echo "<p>Salut</p>";
        
        $__internal_164ab0d1ce719f031cf651fa76c4c0833d79b5e2091337d648363c1c21d01a81->leave($__internal_164ab0d1ce719f031cf651fa76c4c0833d79b5e2091337d648363c1c21d01a81_prof);

        
        $__internal_42c6572ddb5640b5638bc45441c0dec5eba36c657e2bb67e2e50aa17806c98d7->leave($__internal_42c6572ddb5640b5638bc45441c0dec5eba36c657e2bb67e2e50aa17806c98d7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::test.html.twig";
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
        return new Twig_Source("<p>Salut</p>", "AppBundle::test.html.twig", "/var/www/html/Barlito/src/AppBundle/Resources/views/test.html.twig");
    }
}
