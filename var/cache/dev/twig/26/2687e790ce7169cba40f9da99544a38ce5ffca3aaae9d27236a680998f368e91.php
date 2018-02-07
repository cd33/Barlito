<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_27d89d3b5e05968bfe1ebda6184c4226d48d7115c98ae0b4c7f211051bd3cbed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_67fe09141c6d5b6df06f8d7312b70697a58a5f46da99804151af922fab35d901 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67fe09141c6d5b6df06f8d7312b70697a58a5f46da99804151af922fab35d901->enter($__internal_67fe09141c6d5b6df06f8d7312b70697a58a5f46da99804151af922fab35d901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_27e5de88fb97ce25bd3d37140a77d7377a23256112ed802fc737536a31e5bc5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e5de88fb97ce25bd3d37140a77d7377a23256112ed802fc737536a31e5bc5e->enter($__internal_27e5de88fb97ce25bd3d37140a77d7377a23256112ed802fc737536a31e5bc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67fe09141c6d5b6df06f8d7312b70697a58a5f46da99804151af922fab35d901->leave($__internal_67fe09141c6d5b6df06f8d7312b70697a58a5f46da99804151af922fab35d901_prof);

        
        $__internal_27e5de88fb97ce25bd3d37140a77d7377a23256112ed802fc737536a31e5bc5e->leave($__internal_27e5de88fb97ce25bd3d37140a77d7377a23256112ed802fc737536a31e5bc5e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbd3874b8b833275f181773161fa012f5dba7e68ea451f098dead55fa104cb20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbd3874b8b833275f181773161fa012f5dba7e68ea451f098dead55fa104cb20->enter($__internal_dbd3874b8b833275f181773161fa012f5dba7e68ea451f098dead55fa104cb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0b2acab2fc1b68c945bf58bcb15cb8c9199b0f92e73aa826caf5da2cb64e9f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2acab2fc1b68c945bf58bcb15cb8c9199b0f92e73aa826caf5da2cb64e9f33->enter($__internal_0b2acab2fc1b68c945bf58bcb15cb8c9199b0f92e73aa826caf5da2cb64e9f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_0b2acab2fc1b68c945bf58bcb15cb8c9199b0f92e73aa826caf5da2cb64e9f33->leave($__internal_0b2acab2fc1b68c945bf58bcb15cb8c9199b0f92e73aa826caf5da2cb64e9f33_prof);

        
        $__internal_dbd3874b8b833275f181773161fa012f5dba7e68ea451f098dead55fa104cb20->leave($__internal_dbd3874b8b833275f181773161fa012f5dba7e68ea451f098dead55fa104cb20_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
