<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_59e91c9f709290dd0d82a393eaaa31689c4880ebffc389514fe9de0a6b219699 extends Twig_Template
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
        // line 13
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 13);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9639e46d535bb56e0f5bd7d441ce61db932302353ccc4aa45a4134ea0dc93175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9639e46d535bb56e0f5bd7d441ce61db932302353ccc4aa45a4134ea0dc93175->enter($__internal_9639e46d535bb56e0f5bd7d441ce61db932302353ccc4aa45a4134ea0dc93175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $__internal_c88406fce9837f90d973572befe5ca25f11878d211b19cd518b78e88449e7159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88406fce9837f90d973572befe5ca25f11878d211b19cd518b78e88449e7159->enter($__internal_c88406fce9837f90d973572befe5ca25f11878d211b19cd518b78e88449e7159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 11
        $context["list"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_array_macro.html.twig", "SonataAdminBundle:CRUD:list_array.html.twig", 11);
        // line 13
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9639e46d535bb56e0f5bd7d441ce61db932302353ccc4aa45a4134ea0dc93175->leave($__internal_9639e46d535bb56e0f5bd7d441ce61db932302353ccc4aa45a4134ea0dc93175_prof);

        
        $__internal_c88406fce9837f90d973572befe5ca25f11878d211b19cd518b78e88449e7159->leave($__internal_c88406fce9837f90d973572befe5ca25f11878d211b19cd518b78e88449e7159_prof);

    }

    // line 15
    public function block_field($context, array $blocks = array())
    {
        $__internal_0d1d110b6319604745067964aa2d2afd48b0661d2af379245ba3e0c18a87b3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1d110b6319604745067964aa2d2afd48b0661d2af379245ba3e0c18a87b3b2->enter($__internal_0d1d110b6319604745067964aa2d2afd48b0661d2af379245ba3e0c18a87b3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_214baaac9463d303cdb2d682d7569d1a1eec82fd701d0f7713dcd709e839b5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214baaac9463d303cdb2d682d7569d1a1eec82fd701d0f7713dcd709e839b5ea->enter($__internal_214baaac9463d303cdb2d682d7569d1a1eec82fd701d0f7713dcd709e839b5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 16
        echo "    ";
        echo $context["list"]->getrender_array((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "inline", array())));
        echo "
";
        
        $__internal_214baaac9463d303cdb2d682d7569d1a1eec82fd701d0f7713dcd709e839b5ea->leave($__internal_214baaac9463d303cdb2d682d7569d1a1eec82fd701d0f7713dcd709e839b5ea_prof);

        
        $__internal_0d1d110b6319604745067964aa2d2afd48b0661d2af379245ba3e0c18a87b3b2->leave($__internal_0d1d110b6319604745067964aa2d2afd48b0661d2af379245ba3e0c18a87b3b2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  42 => 15,  32 => 13,  30 => 11,  18 => 13,);
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
{% import 'SonataAdminBundle:CRUD:base_array_macro.html.twig' as list %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ list.render_array(value, field_description.options.inline is not defined or field_description.options.inline) }}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
