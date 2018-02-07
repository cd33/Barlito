<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_076f4c870c69e8daa6e8bdd202b3eb2b3240456c24c428b89e49b13642950968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ea6d82c290117dde88d0f5af06f9eb6cfb5e37d34bb69c991356afa1a1e2dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ea6d82c290117dde88d0f5af06f9eb6cfb5e37d34bb69c991356afa1a1e2dc9->enter($__internal_2ea6d82c290117dde88d0f5af06f9eb6cfb5e37d34bb69c991356afa1a1e2dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_452b3e9e441a2af2a47731aec3c978f74428e3210c6ee52083449dda5ab69ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452b3e9e441a2af2a47731aec3c978f74428e3210c6ee52083449dda5ab69ffd->enter($__internal_452b3e9e441a2af2a47731aec3c978f74428e3210c6ee52083449dda5ab69ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2ea6d82c290117dde88d0f5af06f9eb6cfb5e37d34bb69c991356afa1a1e2dc9->leave($__internal_2ea6d82c290117dde88d0f5af06f9eb6cfb5e37d34bb69c991356afa1a1e2dc9_prof);

        
        $__internal_452b3e9e441a2af2a47731aec3c978f74428e3210c6ee52083449dda5ab69ffd->leave($__internal_452b3e9e441a2af2a47731aec3c978f74428e3210c6ee52083449dda5ab69ffd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_617ab139c12edcf480f731955722d33d1f6469a32f67a1bc4a99467febdace39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617ab139c12edcf480f731955722d33d1f6469a32f67a1bc4a99467febdace39->enter($__internal_617ab139c12edcf480f731955722d33d1f6469a32f67a1bc4a99467febdace39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4307cf2347576012c56f34a4527d8aa96f9cd6eb16a7c5c3bf2e8fbdfa7b957c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4307cf2347576012c56f34a4527d8aa96f9cd6eb16a7c5c3bf2e8fbdfa7b957c->enter($__internal_4307cf2347576012c56f34a4527d8aa96f9cd6eb16a7c5c3bf2e8fbdfa7b957c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4307cf2347576012c56f34a4527d8aa96f9cd6eb16a7c5c3bf2e8fbdfa7b957c->leave($__internal_4307cf2347576012c56f34a4527d8aa96f9cd6eb16a7c5c3bf2e8fbdfa7b957c_prof);

        
        $__internal_617ab139c12edcf480f731955722d33d1f6469a32f67a1bc4a99467febdace39->leave($__internal_617ab139c12edcf480f731955722d33d1f6469a32f67a1bc4a99467febdace39_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
