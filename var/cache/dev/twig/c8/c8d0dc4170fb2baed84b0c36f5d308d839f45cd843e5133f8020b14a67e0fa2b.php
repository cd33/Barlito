<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_0d7905847c47bb4b7ddbd9efdf6f7995145c1bacab36c653cb633a11176974dd extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1808e657833364072c46a9bbfa783f2fc2b115f37fe4b8c8f36ed352cfc7bd68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1808e657833364072c46a9bbfa783f2fc2b115f37fe4b8c8f36ed352cfc7bd68->enter($__internal_1808e657833364072c46a9bbfa783f2fc2b115f37fe4b8c8f36ed352cfc7bd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $__internal_fa36db9a79829df648c051639f621abdee926c97c0b289aed47aaa84e18d1acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa36db9a79829df648c051639f621abdee926c97c0b289aed47aaa84e18d1acd->enter($__internal_fa36db9a79829df648c051639f621abdee926c97c0b289aed47aaa84e18d1acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1808e657833364072c46a9bbfa783f2fc2b115f37fe4b8c8f36ed352cfc7bd68->leave($__internal_1808e657833364072c46a9bbfa783f2fc2b115f37fe4b8c8f36ed352cfc7bd68_prof);

        
        $__internal_fa36db9a79829df648c051639f621abdee926c97c0b289aed47aaa84e18d1acd->leave($__internal_fa36db9a79829df648c051639f621abdee926c97c0b289aed47aaa84e18d1acd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6bd862d5a59ef6074028c19213c8e473a601bf2b99bc5770f4b3c2bf45b78d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bd862d5a59ef6074028c19213c8e473a601bf2b99bc5770f4b3c2bf45b78d32->enter($__internal_6bd862d5a59ef6074028c19213c8e473a601bf2b99bc5770f4b3c2bf45b78d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_3477c99db58dd1dc368c9df3b726f464a9703d487a295bd85d697f16994a6818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3477c99db58dd1dc368c9df3b726f464a9703d487a295bd85d697f16994a6818->enter($__internal_3477c99db58dd1dc368c9df3b726f464a9703d487a295bd85d697f16994a6818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "SonataAdminBundle:CRUD:list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_3477c99db58dd1dc368c9df3b726f464a9703d487a295bd85d697f16994a6818->leave($__internal_3477c99db58dd1dc368c9df3b726f464a9703d487a295bd85d697f16994a6818_prof);

        
        $__internal_6bd862d5a59ef6074028c19213c8e473a601bf2b99bc5770f4b3c2bf45b78d32->leave($__internal_6bd862d5a59ef6074028c19213c8e473a601bf2b99bc5770f4b3c2bf45b78d32_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  71 => 18,  68 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"btn-group\">
        {% for actions in field_description.options.actions %}
            {% include actions.template %}
        {% endfor %}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:list__action.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__action.html.twig");
    }
}
