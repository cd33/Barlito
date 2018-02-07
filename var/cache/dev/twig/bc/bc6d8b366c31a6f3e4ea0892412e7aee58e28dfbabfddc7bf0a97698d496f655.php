<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_5e8ec145d422a1f73ee605211fab42b497aea9c5960317d4ca4fd44c29b7bcd4 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da6784deef7d8001c44b4569314119a2fa7af65e7db706158f17d073938cf7e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6784deef7d8001c44b4569314119a2fa7af65e7db706158f17d073938cf7e9->enter($__internal_da6784deef7d8001c44b4569314119a2fa7af65e7db706158f17d073938cf7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $__internal_78813216d14cd7ed243dfa6f3229371d1ae294ad698852bf9d1dca57dad8d657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78813216d14cd7ed243dfa6f3229371d1ae294ad698852bf9d1dca57dad8d657->enter($__internal_78813216d14cd7ed243dfa6f3229371d1ae294ad698852bf9d1dca57dad8d657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da6784deef7d8001c44b4569314119a2fa7af65e7db706158f17d073938cf7e9->leave($__internal_da6784deef7d8001c44b4569314119a2fa7af65e7db706158f17d073938cf7e9_prof);

        
        $__internal_78813216d14cd7ed243dfa6f3229371d1ae294ad698852bf9d1dca57dad8d657->leave($__internal_78813216d14cd7ed243dfa6f3229371d1ae294ad698852bf9d1dca57dad8d657_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_39fdc2aa4b8b9658c68c3b80333f8d0c116b4f3e404fb485e6f508782cd23e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39fdc2aa4b8b9658c68c3b80333f8d0c116b4f3e404fb485e6f508782cd23e81->enter($__internal_39fdc2aa4b8b9658c68c3b80333f8d0c116b4f3e404fb485e6f508782cd23e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_cefc79567b6d79915ea5a8f32d4c4160847f3bb8b294989f13a89d342b8443fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cefc79567b6d79915ea5a8f32d4c4160847f3bb8b294989f13a89d342b8443fc->enter($__internal_cefc79567b6d79915ea5a8f32d4c4160847f3bb8b294989f13a89d342b8443fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_cefc79567b6d79915ea5a8f32d4c4160847f3bb8b294989f13a89d342b8443fc->leave($__internal_cefc79567b6d79915ea5a8f32d4c4160847f3bb8b294989f13a89d342b8443fc_prof);

        
        $__internal_39fdc2aa4b8b9658c68c3b80333f8d0c116b4f3e404fb485e6f508782cd23e81->leave($__internal_39fdc2aa4b8b9658c68c3b80333f8d0c116b4f3e404fb485e6f508782cd23e81_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
