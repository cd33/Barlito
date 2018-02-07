<?php

/* SonataAdminBundle:Helper:short-object-description.html.twig */
class __TwigTemplate_ff32a0c34e53f02b0b712ce35d76e0f8850b26c4b2fd89418154889935a33f04 extends Twig_Template
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
        $__internal_0bf37045e342449fdc90de33da28c7a30612a354e63f8c5f58187b436425c957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf37045e342449fdc90de33da28c7a30612a354e63f8c5f58187b436425c957->enter($__internal_0bf37045e342449fdc90de33da28c7a30612a354e63f8c5f58187b436425c957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:short-object-description.html.twig"));

        $__internal_41d4f3f6f44595c9fa1a2400fcb84e728ed4ec3b8a3b9911b6f4cae377c7ec50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d4f3f6f44595c9fa1a2400fcb84e728ed4ec3b8a3b9911b6f4cae377c7ec50->enter($__internal_41d4f3f6f44595c9fa1a2400fcb84e728ed4ec3b8a3b9911b6f4cae377c7ec50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:short-object-description.html.twig"));

        // line 1
        echo "<span class=\"inner-field-short-description\">
    ";
        // line 2
        if ((((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit"), "method"))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => (isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters"))), "method"), "html", null, true);
            echo "\" target=\"new\">";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</span>
";
        
        $__internal_0bf37045e342449fdc90de33da28c7a30612a354e63f8c5f58187b436425c957->leave($__internal_0bf37045e342449fdc90de33da28c7a30612a354e63f8c5f58187b436425c957_prof);

        
        $__internal_41d4f3f6f44595c9fa1a2400fcb84e728ed4ec3b8a3b9911b6f4cae377c7ec50->leave($__internal_41d4f3f6f44595c9fa1a2400fcb84e728ed4ec3b8a3b9911b6f4cae377c7ec50_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:short-object-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  38 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"inner-field-short-description\">
    {% if object and admin.hasRoute('edit') and admin.hasAccess('edit') %}
        <a href=\"{{ admin.generateObjectUrl('edit', object, link_parameters) }}\" target=\"new\">{{ description }}</a>
    {% else %}
        {{ description }}
    {% endif %}
</span>
", "SonataAdminBundle:Helper:short-object-description.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/Helper/short-object-description.html.twig");
    }
}
