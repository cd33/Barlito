<?php

/* SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig */
class __TwigTemplate_3bdbe0194a08632c52eccb185adb3ffd4b132234042fd46d66b27965229b6c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efcde63acc673f97a4632c6fe29665eace95e78a55984603519f7892059cd8b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efcde63acc673f97a4632c6fe29665eace95e78a55984603519f7892059cd8b5->enter($__internal_efcde63acc673f97a4632c6fe29665eace95e78a55984603519f7892059cd8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig"));

        $__internal_6d6a257a59b2759d460bd40cfe6009ad7d98f449b7bce7632a43752b04538f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6a257a59b2759d460bd40cfe6009ad7d98f449b7bce7632a43752b04538f16->enter($__internal_6d6a257a59b2759d460bd40cfe6009ad7d98f449b7bce7632a43752b04538f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method") &&  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 13
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        ";
            // line 14
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "batch", array(), "array"));
            echo "
    </td>
";
        }
        // line 17
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"";
        // line 18
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
    ";
        // line 19
        $this->displayBlock('row', $context, $blocks);
        // line 20
        echo "</td>

";
        // line 22
        if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") &&  !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
            // line 23
            echo "    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        ";
            // line 24
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderListElement($this->env, (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "_action", array(), "array"));
            echo "
    </td>
";
        }
        
        $__internal_efcde63acc673f97a4632c6fe29665eace95e78a55984603519f7892059cd8b5->leave($__internal_efcde63acc673f97a4632c6fe29665eace95e78a55984603519f7892059cd8b5_prof);

        
        $__internal_6d6a257a59b2759d460bd40cfe6009ad7d98f449b7bce7632a43752b04538f16->leave($__internal_6d6a257a59b2759d460bd40cfe6009ad7d98f449b7bce7632a43752b04538f16_prof);

    }

    // line 19
    public function block_row($context, array $blocks = array())
    {
        $__internal_9f640f9ff44992058b1ee878dedf80414142a5957b33b723977fa06a7dd20b5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f640f9ff44992058b1ee878dedf80414142a5957b33b723977fa06a7dd20b5c->enter($__internal_9f640f9ff44992058b1ee878dedf80414142a5957b33b723977fa06a7dd20b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row"));

        $__internal_01e2e43961c6e63cd398084b3432c3c63270b4de7964fb925e6f2d945e038053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e2e43961c6e63cd398084b3432c3c63270b4de7964fb925e6f2d945e038053->enter($__internal_01e2e43961c6e63cd398084b3432c3c63270b4de7964fb925e6f2d945e038053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "row"));

        
        $__internal_01e2e43961c6e63cd398084b3432c3c63270b4de7964fb925e6f2d945e038053->leave($__internal_01e2e43961c6e63cd398084b3432c3c63270b4de7964fb925e6f2d945e038053_prof);

        
        $__internal_9f640f9ff44992058b1ee878dedf80414142a5957b33b723977fa06a7dd20b5c->leave($__internal_9f640f9ff44992058b1ee878dedf80414142a5957b33b723977fa06a7dd20b5c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  62 => 24,  57 => 23,  55 => 22,  51 => 20,  49 => 19,  43 => 18,  40 => 17,  34 => 14,  31 => 13,  29 => 12,  26 => 11,);
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

{% if admin.list.has('batch') and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-batch\">
        {{ object|render_list_element(admin.list['batch']) }}
    </td>
{% endif %}

<td class=\"sonata-ba-list-field sonata-ba-list-field-inline-fields\" colspan=\"{{ admin.list.elements|length - (admin.list.has('_action') + admin.list.has('batch')) }}\" objectId=\"{{ admin.id(object) }}\">
    {% block row %}{% endblock %}
</td>

{% if admin.list.has('_action') and not app.request.isXmlHttpRequest %}
    <td class=\"sonata-ba-list-field sonata-ba-list-field-_action\" objectId=\"{{ admin.id(object) }}\">
        {{ object|render_list_element(admin.list['_action']) }}
    </td>
{% endif %}
", "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list_flat_inner_row.html.twig");
    }
}
