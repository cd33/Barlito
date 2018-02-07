<?php

/* SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig */
class __TwigTemplate_c0c12437f7ae07970fae78862860831d0fef0440d1497f994ea199ac7898e7db extends Twig_Template
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
        $__internal_4cbb1340deb075cd44c6fcf2abbe3e1366794c002e2acce687c71c01bccadbfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cbb1340deb075cd44c6fcf2abbe3e1366794c002e2acce687c71c01bccadbfc->enter($__internal_4cbb1340deb075cd44c6fcf2abbe3e1366794c002e2acce687c71c01bccadbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig"));

        $__internal_2d0632e73a32b9714bc16baa926fc1dbbf0ddb6815d3d64455baf824ce81614c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0632e73a32b9714bc16baa926fc1dbbf0ddb6815d3d64455baf824ce81614c->enter($__internal_2d0632e73a32b9714bc16baa926fc1dbbf0ddb6815d3d64455baf824ce81614c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 2
            echo "    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4cbb1340deb075cd44c6fcf2abbe3e1366794c002e2acce687c71c01bccadbfc->leave($__internal_4cbb1340deb075cd44c6fcf2abbe3e1366794c002e2acce687c71c01bccadbfc_prof);

        
        $__internal_2d0632e73a32b9714bc16baa926fc1dbbf0ddb6815d3d64455baf824ce81614c->leave($__internal_2d0632e73a32b9714bc16baa926fc1dbbf0ddb6815d3d64455baf824ce81614c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for error in form.vars.errors %}
    <div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
        {{ error.message }}
    </div>
{% endfor %}
", "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/Helper/render_form_dismissable_errors.html.twig");
    }
}
