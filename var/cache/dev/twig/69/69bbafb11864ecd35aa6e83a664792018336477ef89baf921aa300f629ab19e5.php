<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_38ec5fe931d72649e67ed5d65d37e4c7f4bd857359040de6f8e0cb1957b6bc36 extends Twig_Template
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
        $__internal_8ac464fbf008735de503c02892ff3246116e973ab5673ba086d485dbce6e98a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac464fbf008735de503c02892ff3246116e973ab5673ba086d485dbce6e98a1->enter($__internal_8ac464fbf008735de503c02892ff3246116e973ab5673ba086d485dbce6e98a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

        $__internal_cb43528c8c18965c6156bce6f246d4e38e28ae6e2946ce9ae06f09ed8df72d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb43528c8c18965c6156bce6f246d4e38e28ae6e2946ce9ae06f09ed8df72d67->enter($__internal_cb43528c8c18965c6156bce6f246d4e38e28ae6e2946ce9ae06f09ed8df72d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method"))) {
            // line 13
            echo "    <li>
        <a class=\"sonata-action-element\" href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
            ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </a>
    </li>
";
        }
        
        $__internal_8ac464fbf008735de503c02892ff3246116e973ab5673ba086d485dbce6e98a1->leave($__internal_8ac464fbf008735de503c02892ff3246116e973ab5673ba086d485dbce6e98a1_prof);

        
        $__internal_cb43528c8c18965c6156bce6f246d4e38e28ae6e2946ce9ae06f09ed8df72d67->leave($__internal_cb43528c8c18965c6156bce6f246d4e38e28ae6e2946ce9ae06f09ed8df72d67_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
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

{% if admin.hasAccess('list') and admin.hasRoute('list') %}
    <li>
        <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('list') }}\">
            <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
            {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}
        </a>
    </li>
{% endif %}
", "SonataAdminBundle:Button:list_button.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/Button/list_button.html.twig");
    }
}
