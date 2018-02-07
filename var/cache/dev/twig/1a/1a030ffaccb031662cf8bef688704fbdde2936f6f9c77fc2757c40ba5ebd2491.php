<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a2255e889f444a4b352154d12b8e05bcad98b9d4e6de3a45f1293932edefd611 extends Twig_Template
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
        $__internal_6ec6616c9f9c81ce6c478a5450b096c3aade1852e7abe90154657e04c004ddf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ec6616c9f9c81ce6c478a5450b096c3aade1852e7abe90154657e04c004ddf6->enter($__internal_6ec6616c9f9c81ce6c478a5450b096c3aade1852e7abe90154657e04c004ddf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_1f455673d5d5bc49854cffda5456f37dcbf0a92f793bbe09469b704872896338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f455673d5d5bc49854cffda5456f37dcbf0a92f793bbe09469b704872896338->enter($__internal_1f455673d5d5bc49854cffda5456f37dcbf0a92f793bbe09469b704872896338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6ec6616c9f9c81ce6c478a5450b096c3aade1852e7abe90154657e04c004ddf6->leave($__internal_6ec6616c9f9c81ce6c478a5450b096c3aade1852e7abe90154657e04c004ddf6_prof);

        
        $__internal_1f455673d5d5bc49854cffda5456f37dcbf0a92f793bbe09469b704872896338->leave($__internal_1f455673d5d5bc49854cffda5456f37dcbf0a92f793bbe09469b704872896338_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
