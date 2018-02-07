<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_0d7dcd5fc91f120642c3ab1324687e7602208a53db60254337fc94019b3272db extends Twig_Template
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
        $__internal_e39624e38267f0b2eeeebd209ab8ba0a527ee38e76a22f75542a15aab1663a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e39624e38267f0b2eeeebd209ab8ba0a527ee38e76a22f75542a15aab1663a91->enter($__internal_e39624e38267f0b2eeeebd209ab8ba0a527ee38e76a22f75542a15aab1663a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_60f547d15c910d8333083f8b7297d5243992e90e3f92fb39934f3114df5de9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f547d15c910d8333083f8b7297d5243992e90e3f92fb39934f3114df5de9d0->enter($__internal_60f547d15c910d8333083f8b7297d5243992e90e3f92fb39934f3114df5de9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_e39624e38267f0b2eeeebd209ab8ba0a527ee38e76a22f75542a15aab1663a91->leave($__internal_e39624e38267f0b2eeeebd209ab8ba0a527ee38e76a22f75542a15aab1663a91_prof);

        
        $__internal_60f547d15c910d8333083f8b7297d5243992e90e3f92fb39934f3114df5de9d0->leave($__internal_60f547d15c910d8333083f8b7297d5243992e90e3f92fb39934f3114df5de9d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
