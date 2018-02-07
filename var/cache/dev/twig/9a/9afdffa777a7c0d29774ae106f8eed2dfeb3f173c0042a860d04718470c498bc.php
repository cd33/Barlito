<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_89bcc6b31dccb0f8ad564e2cca65e34ec4a266916ba20c80a25e5ceadcb1ad07 extends Twig_Template
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
        $__internal_33c6fcb2aa0b357b87d0fd8591334fcd9e01b6270e69d06071901de96c53614c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33c6fcb2aa0b357b87d0fd8591334fcd9e01b6270e69d06071901de96c53614c->enter($__internal_33c6fcb2aa0b357b87d0fd8591334fcd9e01b6270e69d06071901de96c53614c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        $__internal_89fc0f622c6cee6fbf7de23410f6ee02437ee5cab257999c74ff922660c38cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fc0f622c6cee6fbf7de23410f6ee02437ee5cab257999c74ff922660c38cdf->enter($__internal_89fc0f622c6cee6fbf7de23410f6ee02437ee5cab257999c74ff922660c38cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_33c6fcb2aa0b357b87d0fd8591334fcd9e01b6270e69d06071901de96c53614c->leave($__internal_33c6fcb2aa0b357b87d0fd8591334fcd9e01b6270e69d06071901de96c53614c_prof);

        
        $__internal_89fc0f622c6cee6fbf7de23410f6ee02437ee5cab257999c74ff922660c38cdf->leave($__internal_89fc0f622c6cee6fbf7de23410f6ee02437ee5cab257999c74ff922660c38cdf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
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

{{ revision.timestamp|date }}
", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}
