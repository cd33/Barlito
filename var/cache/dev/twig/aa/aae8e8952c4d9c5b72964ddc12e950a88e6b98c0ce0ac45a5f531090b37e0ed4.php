<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_774d82ef91d1e0ab4e5b10e937c0a6b6d55641cc029b4674436b92efe3253caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38fc93a48bb137a3def04d5b6a22d14cf5c9db25d264114ee7ee3a8017d76fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38fc93a48bb137a3def04d5b6a22d14cf5c9db25d264114ee7ee3a8017d76fc3->enter($__internal_38fc93a48bb137a3def04d5b6a22d14cf5c9db25d264114ee7ee3a8017d76fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $__internal_e07fd62d1a0941e5c076a2ab5d8a01c6a6ee61177b40a3515b02b4bdbceb1a13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07fd62d1a0941e5c076a2ab5d8a01c6a6ee61177b40a3515b02b4bdbceb1a13->enter($__internal_e07fd62d1a0941e5c076a2ab5d8a01c6a6ee61177b40a3515b02b4bdbceb1a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38fc93a48bb137a3def04d5b6a22d14cf5c9db25d264114ee7ee3a8017d76fc3->leave($__internal_38fc93a48bb137a3def04d5b6a22d14cf5c9db25d264114ee7ee3a8017d76fc3_prof);

        
        $__internal_e07fd62d1a0941e5c076a2ab5d8a01c6a6ee61177b40a3515b02b4bdbceb1a13->leave($__internal_e07fd62d1a0941e5c076a2ab5d8a01c6a6ee61177b40a3515b02b4bdbceb1a13_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
", "SonataAdminBundle:Pager:links.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/Pager/links.html.twig");
    }
}
