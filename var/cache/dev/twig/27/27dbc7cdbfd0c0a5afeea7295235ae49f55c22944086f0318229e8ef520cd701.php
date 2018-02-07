<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_a174c106af22ca2b1fae774891a4132b7c250b27dd2d1181f6bfecca169c9a10 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fad476f3ec4aaabd3f85923d453e6957ee28ea26bf008f324f4c9084196d226e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad476f3ec4aaabd3f85923d453e6957ee28ea26bf008f324f4c9084196d226e->enter($__internal_fad476f3ec4aaabd3f85923d453e6957ee28ea26bf008f324f4c9084196d226e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $__internal_1144daef1676fd80d6648f1725c8d5c0b59a8326e73db91793fc1933b866c338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1144daef1676fd80d6648f1725c8d5c0b59a8326e73db91793fc1933b866c338->enter($__internal_1144daef1676fd80d6648f1725c8d5c0b59a8326e73db91793fc1933b866c338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fad476f3ec4aaabd3f85923d453e6957ee28ea26bf008f324f4c9084196d226e->leave($__internal_fad476f3ec4aaabd3f85923d453e6957ee28ea26bf008f324f4c9084196d226e_prof);

        
        $__internal_1144daef1676fd80d6648f1725c8d5c0b59a8326e73db91793fc1933b866c338->leave($__internal_1144daef1676fd80d6648f1725c8d5c0b59a8326e73db91793fc1933b866c338_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4130527d1a6b629dd13767799782de9b0e77552b6df8347ea82ff710adc8085e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4130527d1a6b629dd13767799782de9b0e77552b6df8347ea82ff710adc8085e->enter($__internal_4130527d1a6b629dd13767799782de9b0e77552b6df8347ea82ff710adc8085e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_934c6dfd983dc2e50c1f9851aec4a807d64a23fae96efb4f338b0707cc035389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934c6dfd983dc2e50c1f9851aec4a807d64a23fae96efb4f338b0707cc035389->enter($__internal_934c6dfd983dc2e50c1f9851aec4a807d64a23fae96efb4f338b0707cc035389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_934c6dfd983dc2e50c1f9851aec4a807d64a23fae96efb4f338b0707cc035389->leave($__internal_934c6dfd983dc2e50c1f9851aec4a807d64a23fae96efb4f338b0707cc035389_prof);

        
        $__internal_4130527d1a6b629dd13767799782de9b0e77552b6df8347ea82ff710adc8085e->leave($__internal_4130527d1a6b629dd13767799782de9b0e77552b6df8347ea82ff710adc8085e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
", "SonataAdminBundle:CRUD:edit_file.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
