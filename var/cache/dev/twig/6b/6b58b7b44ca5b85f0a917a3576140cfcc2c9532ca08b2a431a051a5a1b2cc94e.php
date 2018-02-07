<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_6fd47f9daa53e58bc2184e66f3784cbf3e8f1f0410855d28b62994a6f136df25 extends Twig_Template
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
        $__internal_b4eb19fc455e82e4763fe2c0f7b3604293eb5c8134d0a8404584585648a8c5ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4eb19fc455e82e4763fe2c0f7b3604293eb5c8134d0a8404584585648a8c5ec->enter($__internal_b4eb19fc455e82e4763fe2c0f7b3604293eb5c8134d0a8404584585648a8c5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_e32e33a087f2b1773cb2f52daffcc72f1f504c7bbe3190f980889cafb3d343c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32e33a087f2b1773cb2f52daffcc72f1f504c7bbe3190f980889cafb3d343c5->enter($__internal_e32e33a087f2b1773cb2f52daffcc72f1f504c7bbe3190f980889cafb3d343c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_b4eb19fc455e82e4763fe2c0f7b3604293eb5c8134d0a8404584585648a8c5ec->leave($__internal_b4eb19fc455e82e4763fe2c0f7b3604293eb5c8134d0a8404584585648a8c5ec_prof);

        
        $__internal_e32e33a087f2b1773cb2f52daffcc72f1f504c7bbe3190f980889cafb3d343c5->leave($__internal_e32e33a087f2b1773cb2f52daffcc72f1f504c7bbe3190f980889cafb3d343c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
