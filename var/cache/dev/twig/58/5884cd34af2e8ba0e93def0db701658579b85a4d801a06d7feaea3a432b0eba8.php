<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_56226533a18817dd2ea10be196909bc7c17c1ec037b7a858957fb04f1fc4c381 extends Twig_Template
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
        $__internal_bbba23ddb00360a4189fe041ec4b259c112b1b085b54edd6050b235f2b2ca478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbba23ddb00360a4189fe041ec4b259c112b1b085b54edd6050b235f2b2ca478->enter($__internal_bbba23ddb00360a4189fe041ec4b259c112b1b085b54edd6050b235f2b2ca478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_825107d9b3d3140a28ba964df89c103b4db4feb5d88c27c13ef100487f833114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_825107d9b3d3140a28ba964df89c103b4db4feb5d88c27c13ef100487f833114->enter($__internal_825107d9b3d3140a28ba964df89c103b4db4feb5d88c27c13ef100487f833114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_bbba23ddb00360a4189fe041ec4b259c112b1b085b54edd6050b235f2b2ca478->leave($__internal_bbba23ddb00360a4189fe041ec4b259c112b1b085b54edd6050b235f2b2ca478_prof);

        
        $__internal_825107d9b3d3140a28ba964df89c103b4db4feb5d88c27c13ef100487f833114->leave($__internal_825107d9b3d3140a28ba964df89c103b4db4feb5d88c27c13ef100487f833114_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
