<?php

/* SonataAdminBundle:Pager:simple_pager_results.html.twig */
class __TwigTemplate_eee4c5a4e3d727c0ca898d989a462d5392bd72e40ecac9348ca36dd2158253c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee968716348afda76eeab161900ef406134208ad0921aaff78309d6f0052316e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee968716348afda76eeab161900ef406134208ad0921aaff78309d6f0052316e->enter($__internal_ee968716348afda76eeab161900ef406134208ad0921aaff78309d6f0052316e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $__internal_e0ae3ef118c02ec666160a3d984d48938e9a0e90682e260ae085f2a28fa6d03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ae3ef118c02ec666160a3d984d48938e9a0e90682e260ae085f2a28fa6d03c->enter($__internal_e0ae3ef118c02ec666160a3d984d48938e9a0e90682e260ae085f2a28fa6d03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee968716348afda76eeab161900ef406134208ad0921aaff78309d6f0052316e->leave($__internal_ee968716348afda76eeab161900ef406134208ad0921aaff78309d6f0052316e_prof);

        
        $__internal_e0ae3ef118c02ec666160a3d984d48938e9a0e90682e260ae085f2a28fa6d03c->leave($__internal_e0ae3ef118c02ec666160a3d984d48938e9a0e90682e260ae085f2a28fa6d03c_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_4349d61c058da27ba823d0dfcd7b5425fa453829c9294113418c392a1b9ddca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4349d61c058da27ba823d0dfcd7b5425fa453829c9294113418c392a1b9ddca9->enter($__internal_4349d61c058da27ba823d0dfcd7b5425fa453829c9294113418c392a1b9ddca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_adfd921193b089347974f18b87fd17b9480f263907e499c4cfa86cb8903587d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adfd921193b089347974f18b87fd17b9480f263907e499c4cfa86cb8903587d0->enter($__internal_adfd921193b089347974f18b87fd17b9480f263907e499c4cfa86cb8903587d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_adfd921193b089347974f18b87fd17b9480f263907e499c4cfa86cb8903587d0->leave($__internal_adfd921193b089347974f18b87fd17b9480f263907e499c4cfa86cb8903587d0_prof);

        
        $__internal_4349d61c058da27ba823d0dfcd7b5425fa453829c9294113418c392a1b9ddca9->leave($__internal_4349d61c058da27ba823d0dfcd7b5425fa453829c9294113418c392a1b9ddca9_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_e8e53d84efdea3a08e062e756d2666f737dded7e76627e3f9702efcc90924403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e53d84efdea3a08e062e756d2666f737dded7e76627e3f9702efcc90924403->enter($__internal_e8e53d84efdea3a08e062e756d2666f737dded7e76627e3f9702efcc90924403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_0316a75ad68d7ae805aaf425216b3064c54e3c06a2de85fc1e79ab7349c2047c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0316a75ad68d7ae805aaf425216b3064c54e3c06a2de85fc1e79ab7349c2047c->enter($__internal_0316a75ad68d7ae805aaf425216b3064c54e3c06a2de85fc1e79ab7349c2047c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_0316a75ad68d7ae805aaf425216b3064c54e3c06a2de85fc1e79ab7349c2047c->leave($__internal_0316a75ad68d7ae805aaf425216b3064c54e3c06a2de85fc1e79ab7349c2047c_prof);

        
        $__internal_e8e53d84efdea3a08e062e756d2666f737dded7e76627e3f9702efcc90924403->leave($__internal_e8e53d84efdea3a08e062e756d2666f737dded7e76627e3f9702efcc90924403_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  94 => 28,  90 => 26,  88 => 25,  82 => 23,  73 => 22,  62 => 19,  59 => 18,  53 => 16,  50 => 15,  41 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}

{% block num_results %}
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}
    {% endif %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_pages %}
    {{ admin.datagrid.pager.page }}
    /
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        ?
    {% else %}
        {{ admin.datagrid.pager.lastpage }}
    {% endif %}
    &nbsp;-&nbsp;
{% endblock %}
", "SonataAdminBundle:Pager:simple_pager_results.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/Pager/simple_pager_results.html.twig");
    }
}
