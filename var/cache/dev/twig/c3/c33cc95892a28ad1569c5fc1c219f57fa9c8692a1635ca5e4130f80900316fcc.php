<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_3bedff2a572a21ce05b760fb1443603d661108244e724777278e7d74f16002e6 extends Twig_Template
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
        $__internal_47705abfd4340ecd45cd9e4d44ac36196b0e50823f3dcdb754f4c9a28d8bf022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47705abfd4340ecd45cd9e4d44ac36196b0e50823f3dcdb754f4c9a28d8bf022->enter($__internal_47705abfd4340ecd45cd9e4d44ac36196b0e50823f3dcdb754f4c9a28d8bf022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_028df3ccd177885cd97aaaff859be98592324171892a22ecee32b478ccef0a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028df3ccd177885cd97aaaff859be98592324171892a22ecee32b478ccef0a52->enter($__internal_028df3ccd177885cd97aaaff859be98592324171892a22ecee32b478ccef0a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_47705abfd4340ecd45cd9e4d44ac36196b0e50823f3dcdb754f4c9a28d8bf022->leave($__internal_47705abfd4340ecd45cd9e4d44ac36196b0e50823f3dcdb754f4c9a28d8bf022_prof);

        
        $__internal_028df3ccd177885cd97aaaff859be98592324171892a22ecee32b478ccef0a52->leave($__internal_028df3ccd177885cd97aaaff859be98592324171892a22ecee32b478ccef0a52_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
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
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/var/www/html/Barlito/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
