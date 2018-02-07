<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_11d3e2def66c24abb4ea29540f2a8bc777acb06a77495fa889caa5029a4d7ac7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1824ed444a765fb49016e2ee7dc6d3d230e2dd32822e41f462bbb83453ba9049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1824ed444a765fb49016e2ee7dc6d3d230e2dd32822e41f462bbb83453ba9049->enter($__internal_1824ed444a765fb49016e2ee7dc6d3d230e2dd32822e41f462bbb83453ba9049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_213965e482e74ed049b2d2fb406358e5e222450465373aed4750cab3a9732c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_213965e482e74ed049b2d2fb406358e5e222450465373aed4750cab3a9732c53->enter($__internal_213965e482e74ed049b2d2fb406358e5e222450465373aed4750cab3a9732c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1824ed444a765fb49016e2ee7dc6d3d230e2dd32822e41f462bbb83453ba9049->leave($__internal_1824ed444a765fb49016e2ee7dc6d3d230e2dd32822e41f462bbb83453ba9049_prof);

        
        $__internal_213965e482e74ed049b2d2fb406358e5e222450465373aed4750cab3a9732c53->leave($__internal_213965e482e74ed049b2d2fb406358e5e222450465373aed4750cab3a9732c53_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8da47489e9aabcf5b3bf4d48ce2f89d62e44f6402d6c6bbdca5bb4fef5e9043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8da47489e9aabcf5b3bf4d48ce2f89d62e44f6402d6c6bbdca5bb4fef5e9043->enter($__internal_b8da47489e9aabcf5b3bf4d48ce2f89d62e44f6402d6c6bbdca5bb4fef5e9043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3c3d92c530d04633185088e0997210e99455143ff0fef749d338c42416db4a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3d92c530d04633185088e0997210e99455143ff0fef749d338c42416db4a63->enter($__internal_3c3d92c530d04633185088e0997210e99455143ff0fef749d338c42416db4a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3c3d92c530d04633185088e0997210e99455143ff0fef749d338c42416db4a63->leave($__internal_3c3d92c530d04633185088e0997210e99455143ff0fef749d338c42416db4a63_prof);

        
        $__internal_b8da47489e9aabcf5b3bf4d48ce2f89d62e44f6402d6c6bbdca5bb4fef5e9043->leave($__internal_b8da47489e9aabcf5b3bf4d48ce2f89d62e44f6402d6c6bbdca5bb4fef5e9043_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
