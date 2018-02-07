<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_b9a3badf24fed62abfeabd1e0f0ac6bd91e410e985ef5a874ed7a8c4088b6701 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e3ed679d6f9493a5002d865c845574e9bd453448af0279fe734fcdd54a34f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e3ed679d6f9493a5002d865c845574e9bd453448af0279fe734fcdd54a34f50->enter($__internal_5e3ed679d6f9493a5002d865c845574e9bd453448af0279fe734fcdd54a34f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $__internal_895b3923df5eb75cba75552e3159fee9ae96a60478e3e98d673c9a4911b6aac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_895b3923df5eb75cba75552e3159fee9ae96a60478e3e98d673c9a4911b6aac1->enter($__internal_895b3923df5eb75cba75552e3159fee9ae96a60478e3e98d673c9a4911b6aac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e3ed679d6f9493a5002d865c845574e9bd453448af0279fe734fcdd54a34f50->leave($__internal_5e3ed679d6f9493a5002d865c845574e9bd453448af0279fe734fcdd54a34f50_prof);

        
        $__internal_895b3923df5eb75cba75552e3159fee9ae96a60478e3e98d673c9a4911b6aac1->leave($__internal_895b3923df5eb75cba75552e3159fee9ae96a60478e3e98d673c9a4911b6aac1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_09205f2791b686d49390de0a13e0a74b76dd7f0f4de45cf5111b03018ed178a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09205f2791b686d49390de0a13e0a74b76dd7f0f4de45cf5111b03018ed178a8->enter($__internal_09205f2791b686d49390de0a13e0a74b76dd7f0f4de45cf5111b03018ed178a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_bde3655d68384e88c02fd54d4dba55eea148b11d0adfce6ab853c093137c5ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde3655d68384e88c02fd54d4dba55eea148b11d0adfce6ab853c093137c5ff3->enter($__internal_bde3655d68384e88c02fd54d4dba55eea148b11d0adfce6ab853c093137c5ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_bde3655d68384e88c02fd54d4dba55eea148b11d0adfce6ab853c093137c5ff3->leave($__internal_bde3655d68384e88c02fd54d4dba55eea148b11d0adfce6ab853c093137c5ff3_prof);

        
        $__internal_09205f2791b686d49390de0a13e0a74b76dd7f0f4de45cf5111b03018ed178a8->leave($__internal_09205f2791b686d49390de0a13e0a74b76dd7f0f4de45cf5111b03018ed178a8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
