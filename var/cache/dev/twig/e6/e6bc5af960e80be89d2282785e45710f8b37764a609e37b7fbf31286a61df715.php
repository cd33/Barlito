<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_cbb0b09b467d0ee644495f7a0bd352bb3d635aa2f02a3af7322836fc3a2dbd12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_b515f135b8bea5f2940616fd0fbdbeae8047bcf4675009cc8ef9e4eef366da82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b515f135b8bea5f2940616fd0fbdbeae8047bcf4675009cc8ef9e4eef366da82->enter($__internal_b515f135b8bea5f2940616fd0fbdbeae8047bcf4675009cc8ef9e4eef366da82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_53c1faf71076ee02c5fc2f17114032372a42dd9a5e2cb7c051bf822bdbdbda14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c1faf71076ee02c5fc2f17114032372a42dd9a5e2cb7c051bf822bdbdbda14->enter($__internal_53c1faf71076ee02c5fc2f17114032372a42dd9a5e2cb7c051bf822bdbdbda14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b515f135b8bea5f2940616fd0fbdbeae8047bcf4675009cc8ef9e4eef366da82->leave($__internal_b515f135b8bea5f2940616fd0fbdbeae8047bcf4675009cc8ef9e4eef366da82_prof);

        
        $__internal_53c1faf71076ee02c5fc2f17114032372a42dd9a5e2cb7c051bf822bdbdbda14->leave($__internal_53c1faf71076ee02c5fc2f17114032372a42dd9a5e2cb7c051bf822bdbdbda14_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_235ad90c19ff2db4cf1bb7898e47ac0b6527437e291bebc1f530d58c24ceeb4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_235ad90c19ff2db4cf1bb7898e47ac0b6527437e291bebc1f530d58c24ceeb4d->enter($__internal_235ad90c19ff2db4cf1bb7898e47ac0b6527437e291bebc1f530d58c24ceeb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9c927623c4f47e93ed1afcf5d782a8eeea37332054aeab8657ec1bfbdf465a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c927623c4f47e93ed1afcf5d782a8eeea37332054aeab8657ec1bfbdf465a24->enter($__internal_9c927623c4f47e93ed1afcf5d782a8eeea37332054aeab8657ec1bfbdf465a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_9c927623c4f47e93ed1afcf5d782a8eeea37332054aeab8657ec1bfbdf465a24->leave($__internal_9c927623c4f47e93ed1afcf5d782a8eeea37332054aeab8657ec1bfbdf465a24_prof);

        
        $__internal_235ad90c19ff2db4cf1bb7898e47ac0b6527437e291bebc1f530d58c24ceeb4d->leave($__internal_235ad90c19ff2db4cf1bb7898e47ac0b6527437e291bebc1f530d58c24ceeb4d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
