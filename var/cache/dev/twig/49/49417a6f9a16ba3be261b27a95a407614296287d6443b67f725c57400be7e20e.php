<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_5646f324f0aee7d489c643c8eb995ff7115f982d143b6ffa74a149116737f664 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d20dad88bfcf78b7a74bf80b9232025219791767b82e7100302dacee0f7d1e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d20dad88bfcf78b7a74bf80b9232025219791767b82e7100302dacee0f7d1e2->enter($__internal_0d20dad88bfcf78b7a74bf80b9232025219791767b82e7100302dacee0f7d1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $__internal_e704fc51c1f338eb5932309c3d1942c1f0673daad6670b7acc4b44a63bcc5a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e704fc51c1f338eb5932309c3d1942c1f0673daad6670b7acc4b44a63bcc5a4c->enter($__internal_e704fc51c1f338eb5932309c3d1942c1f0673daad6670b7acc4b44a63bcc5a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d20dad88bfcf78b7a74bf80b9232025219791767b82e7100302dacee0f7d1e2->leave($__internal_0d20dad88bfcf78b7a74bf80b9232025219791767b82e7100302dacee0f7d1e2_prof);

        
        $__internal_e704fc51c1f338eb5932309c3d1942c1f0673daad6670b7acc4b44a63bcc5a4c->leave($__internal_e704fc51c1f338eb5932309c3d1942c1f0673daad6670b7acc4b44a63bcc5a4c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fa5bf14ef0969ab440df8b11c418ffae1e0949ea63e218e7fe6fa3007b7fa793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5bf14ef0969ab440df8b11c418ffae1e0949ea63e218e7fe6fa3007b7fa793->enter($__internal_fa5bf14ef0969ab440df8b11c418ffae1e0949ea63e218e7fe6fa3007b7fa793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_322e358f28feae6b6982b13eed2daf2dcd193fbacbf8f1c9ae866ad8f4f299bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_322e358f28feae6b6982b13eed2daf2dcd193fbacbf8f1c9ae866ad8f4f299bb->enter($__internal_322e358f28feae6b6982b13eed2daf2dcd193fbacbf8f1c9ae866ad8f4f299bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_322e358f28feae6b6982b13eed2daf2dcd193fbacbf8f1c9ae866ad8f4f299bb->leave($__internal_322e358f28feae6b6982b13eed2daf2dcd193fbacbf8f1c9ae866ad8f4f299bb_prof);

        
        $__internal_fa5bf14ef0969ab440df8b11c418ffae1e0949ea63e218e7fe6fa3007b7fa793->leave($__internal_fa5bf14ef0969ab440df8b11c418ffae1e0949ea63e218e7fe6fa3007b7fa793_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
