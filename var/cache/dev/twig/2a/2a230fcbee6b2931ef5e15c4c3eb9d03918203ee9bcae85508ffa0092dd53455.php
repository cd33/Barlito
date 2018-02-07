<?php

/* SonataAdminBundle:Button:edit_button.html.twig */
class __TwigTemplate_ef83596dd70873073d73828a05771fd1f8b514549f06c0df024ed7e5ed929d41 extends Twig_Template
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
        $__internal_67fc6d97e8a8b1898be4f7d11eaf1afcc4aad66403ce2feb2162b4741db7086f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67fc6d97e8a8b1898be4f7d11eaf1afcc4aad66403ce2feb2162b4741db7086f->enter($__internal_67fc6d97e8a8b1898be4f7d11eaf1afcc4aad66403ce2feb2162b4741db7086f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:edit_button.html.twig"));

        $__internal_7bde1f28d3c9ab58c65c835d9345bf45ae3ec5cc61e18c41bfe176e70bf4d0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bde1f28d3c9ab58c65c835d9345bf45ae3ec5cc61e18c41bfe176e70bf4d0a9->enter($__internal_7bde1f28d3c9ab58c65c835d9345bf45ae3ec5cc61e18c41bfe176e70bf4d0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:edit_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "canAccessObject", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_67fc6d97e8a8b1898be4f7d11eaf1afcc4aad66403ce2feb2162b4741db7086f->leave($__internal_67fc6d97e8a8b1898be4f7d11eaf1afcc4aad66403ce2feb2162b4741db7086f_prof);

        
        $__internal_7bde1f28d3c9ab58c65c835d9345bf45ae3ec5cc61e18c41bfe176e70bf4d0a9->leave($__internal_7bde1f28d3c9ab58c65c835d9345bf45ae3ec5cc61e18c41bfe176e70bf4d0a9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:edit_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 16,  33 => 14,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.canAccessObject('edit', object) and admin.hasRoute('edit') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
            <i class=\"fa fa-edit\" aria-hidden=\"true\"></i>
            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:edit_button.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/Button/edit_button.html.twig");
    }
}
