<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_62e5ed146be9a4fe41d9133f2cdd8bef4c8910cf0fe35784c7bddb1a079994cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c405224effc6d626a28e8b44583a40d052e7664fd6e16eacc9f0e90c733a22b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c405224effc6d626a28e8b44583a40d052e7664fd6e16eacc9f0e90c733a22b->enter($__internal_7c405224effc6d626a28e8b44583a40d052e7664fd6e16eacc9f0e90c733a22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        $__internal_b161dae505cecadee8a29cc60ef82fd05fe5755731b5e51287ff6c4c3fb53719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b161dae505cecadee8a29cc60ef82fd05fe5755731b5e51287ff6c4c3fb53719->enter($__internal_b161dae505cecadee8a29cc60ef82fd05fe5755731b5e51287ff6c4c3fb53719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_7c405224effc6d626a28e8b44583a40d052e7664fd6e16eacc9f0e90c733a22b->leave($__internal_7c405224effc6d626a28e8b44583a40d052e7664fd6e16eacc9f0e90c733a22b_prof);

        
        $__internal_b161dae505cecadee8a29cc60ef82fd05fe5755731b5e51287ff6c4c3fb53719->leave($__internal_b161dae505cecadee8a29cc60ef82fd05fe5755731b5e51287ff6c4c3fb53719_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_1f5d946e11580522d42fdb35b9906f7ac873519f40993e38832789f6d54bcc22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5d946e11580522d42fdb35b9906f7ac873519f40993e38832789f6d54bcc22->enter($__internal_1f5d946e11580522d42fdb35b9906f7ac873519f40993e38832789f6d54bcc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_8d3bfb22ba527941976d3a87d2b1030b6ec84ed92b294a20cfb9232c7aae06eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3bfb22ba527941976d3a87d2b1030b6ec84ed92b294a20cfb9232c7aae06eb->enter($__internal_8d3bfb22ba527941976d3a87d2b1030b6ec84ed92b294a20cfb9232c7aae06eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_8d3bfb22ba527941976d3a87d2b1030b6ec84ed92b294a20cfb9232c7aae06eb->leave($__internal_8d3bfb22ba527941976d3a87d2b1030b6ec84ed92b294a20cfb9232c7aae06eb_prof);

        
        $__internal_1f5d946e11580522d42fdb35b9906f7ac873519f40993e38832789f6d54bcc22->leave($__internal_1f5d946e11580522d42fdb35b9906f7ac873519f40993e38832789f6d54bcc22_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
