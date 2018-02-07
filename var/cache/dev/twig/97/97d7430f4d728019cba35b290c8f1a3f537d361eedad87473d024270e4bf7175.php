<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_3733cc86550d6c4ec5e199085bf0d38db9da1ded7711d4998e4ce56a1ccdfe57 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_453b0cb35b07563ffe157929e3b2d8d530a46f80f4274e76af7c02fa4c17f30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_453b0cb35b07563ffe157929e3b2d8d530a46f80f4274e76af7c02fa4c17f30e->enter($__internal_453b0cb35b07563ffe157929e3b2d8d530a46f80f4274e76af7c02fa4c17f30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $__internal_417b6731c0fad67492c2a57c0716b27e372e3dba4d737296869e8d2eb1393a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_417b6731c0fad67492c2a57c0716b27e372e3dba4d737296869e8d2eb1393a30->enter($__internal_417b6731c0fad67492c2a57c0716b27e372e3dba4d737296869e8d2eb1393a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_453b0cb35b07563ffe157929e3b2d8d530a46f80f4274e76af7c02fa4c17f30e->leave($__internal_453b0cb35b07563ffe157929e3b2d8d530a46f80f4274e76af7c02fa4c17f30e_prof);

        
        $__internal_417b6731c0fad67492c2a57c0716b27e372e3dba4d737296869e8d2eb1393a30->leave($__internal_417b6731c0fad67492c2a57c0716b27e372e3dba4d737296869e8d2eb1393a30_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_df83aab7cf1d729e44b709d278033c93a6ca58e2deda55073c7dcb58e30b8605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df83aab7cf1d729e44b709d278033c93a6ca58e2deda55073c7dcb58e30b8605->enter($__internal_df83aab7cf1d729e44b709d278033c93a6ca58e2deda55073c7dcb58e30b8605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_483b11d3c418f0eff12157eee30248f77438001e62ec042e4a620c23cf71e011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_483b11d3c418f0eff12157eee30248f77438001e62ec042e4a620c23cf71e011->enter($__internal_483b11d3c418f0eff12157eee30248f77438001e62ec042e4a620c23cf71e011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_483b11d3c418f0eff12157eee30248f77438001e62ec042e4a620c23cf71e011->leave($__internal_483b11d3c418f0eff12157eee30248f77438001e62ec042e4a620c23cf71e011_prof);

        
        $__internal_df83aab7cf1d729e44b709d278033c93a6ca58e2deda55073c7dcb58e30b8605->leave($__internal_df83aab7cf1d729e44b709d278033c93a6ca58e2deda55073c7dcb58e30b8605_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
