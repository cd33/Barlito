<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_0b9e278c85a2e63ee5045c17ccec372e79bd02a13e3f772bd956d644128b8231 extends Twig_Template
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
        $__internal_e108a4f9089bcf8056af58154857e97c63e3d13b3b77772fb9174f53a1184564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e108a4f9089bcf8056af58154857e97c63e3d13b3b77772fb9174f53a1184564->enter($__internal_e108a4f9089bcf8056af58154857e97c63e3d13b3b77772fb9174f53a1184564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_8866cf0f317160d27eba7b16000e56fd6cf340456d3802b4315bb33bcdba5152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8866cf0f317160d27eba7b16000e56fd6cf340456d3802b4315bb33bcdba5152->enter($__internal_8866cf0f317160d27eba7b16000e56fd6cf340456d3802b4315bb33bcdba5152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e108a4f9089bcf8056af58154857e97c63e3d13b3b77772fb9174f53a1184564->leave($__internal_e108a4f9089bcf8056af58154857e97c63e3d13b3b77772fb9174f53a1184564_prof);

        
        $__internal_8866cf0f317160d27eba7b16000e56fd6cf340456d3802b4315bb33bcdba5152->leave($__internal_8866cf0f317160d27eba7b16000e56fd6cf340456d3802b4315bb33bcdba5152_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
