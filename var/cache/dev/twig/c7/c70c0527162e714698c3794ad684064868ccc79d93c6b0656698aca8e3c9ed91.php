<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_1da3ee1ec141ce6dc0b3e8ff1acf65c0dd940b7a11bf4c1a03f6e45cf631c2af extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d9e5c8432d4c655ff93421869b464c5f6d89de3622fe544e464f6362519c5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9e5c8432d4c655ff93421869b464c5f6d89de3622fe544e464f6362519c5f0->enter($__internal_4d9e5c8432d4c655ff93421869b464c5f6d89de3622fe544e464f6362519c5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $__internal_e9d785fb4513d58283250cb19c9b3eee119614226ddbbb4a5170f1d8f257bde1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d785fb4513d58283250cb19c9b3eee119614226ddbbb4a5170f1d8f257bde1->enter($__internal_e9d785fb4513d58283250cb19c9b3eee119614226ddbbb4a5170f1d8f257bde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d9e5c8432d4c655ff93421869b464c5f6d89de3622fe544e464f6362519c5f0->leave($__internal_4d9e5c8432d4c655ff93421869b464c5f6d89de3622fe544e464f6362519c5f0_prof);

        
        $__internal_e9d785fb4513d58283250cb19c9b3eee119614226ddbbb4a5170f1d8f257bde1->leave($__internal_e9d785fb4513d58283250cb19c9b3eee119614226ddbbb4a5170f1d8f257bde1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7dc9df78e8aa0f5564af55e8e77ca9f50e97626aece361f6330da3df75cc5b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc9df78e8aa0f5564af55e8e77ca9f50e97626aece361f6330da3df75cc5b70->enter($__internal_7dc9df78e8aa0f5564af55e8e77ca9f50e97626aece361f6330da3df75cc5b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_de969479dbf57a027d970bdfd45f5d5a83b9f36c1b03feef2df7f6716d2fdc19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de969479dbf57a027d970bdfd45f5d5a83b9f36c1b03feef2df7f6716d2fdc19->enter($__internal_de969479dbf57a027d970bdfd45f5d5a83b9f36c1b03feef2df7f6716d2fdc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_de969479dbf57a027d970bdfd45f5d5a83b9f36c1b03feef2df7f6716d2fdc19->leave($__internal_de969479dbf57a027d970bdfd45f5d5a83b9f36c1b03feef2df7f6716d2fdc19_prof);

        
        $__internal_7dc9df78e8aa0f5564af55e8e77ca9f50e97626aece361f6330da3df75cc5b70->leave($__internal_7dc9df78e8aa0f5564af55e8e77ca9f50e97626aece361f6330da3df75cc5b70_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
