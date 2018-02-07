<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_ee00a5d1e1679440b082083143190671dd3c8661e80bc2315da9e9b8cd99839f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02847670f1a42c8ccb569eebe9ed8f793218055fd850bb291708571bca56cff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02847670f1a42c8ccb569eebe9ed8f793218055fd850bb291708571bca56cff6->enter($__internal_02847670f1a42c8ccb569eebe9ed8f793218055fd850bb291708571bca56cff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $__internal_37cc9dc52b74cc3d1da2e4350de096c41d1e8b5b4a701a86de7f6a16615c445a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37cc9dc52b74cc3d1da2e4350de096c41d1e8b5b4a701a86de7f6a16615c445a->enter($__internal_37cc9dc52b74cc3d1da2e4350de096c41d1e8b5b4a701a86de7f6a16615c445a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02847670f1a42c8ccb569eebe9ed8f793218055fd850bb291708571bca56cff6->leave($__internal_02847670f1a42c8ccb569eebe9ed8f793218055fd850bb291708571bca56cff6_prof);

        
        $__internal_37cc9dc52b74cc3d1da2e4350de096c41d1e8b5b4a701a86de7f6a16615c445a->leave($__internal_37cc9dc52b74cc3d1da2e4350de096c41d1e8b5b4a701a86de7f6a16615c445a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e3f2a044b98d763fd109a5abfcdeee482ede3658c972e2a017f6e56dffcd7b98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3f2a044b98d763fd109a5abfcdeee482ede3658c972e2a017f6e56dffcd7b98->enter($__internal_e3f2a044b98d763fd109a5abfcdeee482ede3658c972e2a017f6e56dffcd7b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f22fe67fa24a7626817622a249c863a083ba8bc45ac4669957d27a91b4b798d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f22fe67fa24a7626817622a249c863a083ba8bc45ac4669957d27a91b4b798d9->enter($__internal_f22fe67fa24a7626817622a249c863a083ba8bc45ac4669957d27a91b4b798d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f22fe67fa24a7626817622a249c863a083ba8bc45ac4669957d27a91b4b798d9->leave($__internal_f22fe67fa24a7626817622a249c863a083ba8bc45ac4669957d27a91b4b798d9_prof);

        
        $__internal_e3f2a044b98d763fd109a5abfcdeee482ede3658c972e2a017f6e56dffcd7b98->leave($__internal_e3f2a044b98d763fd109a5abfcdeee482ede3658c972e2a017f6e56dffcd7b98_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
