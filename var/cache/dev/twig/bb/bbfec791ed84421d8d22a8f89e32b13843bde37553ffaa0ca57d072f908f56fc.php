<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_4759c7a5480528c837c54d04f5efe11387f356a95c60615880669bccb128f2ee extends Twig_Template
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
        $__internal_50aab095b8b013f0bf4c207aaa3dad94bc4d3744e9fd50990cbb98f04e23ea28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50aab095b8b013f0bf4c207aaa3dad94bc4d3744e9fd50990cbb98f04e23ea28->enter($__internal_50aab095b8b013f0bf4c207aaa3dad94bc4d3744e9fd50990cbb98f04e23ea28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_6c275d8c68a680723444c2f4eb0bf320b1a9952ddea90114f2d7f37f6d8208ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c275d8c68a680723444c2f4eb0bf320b1a9952ddea90114f2d7f37f6d8208ef->enter($__internal_6c275d8c68a680723444c2f4eb0bf320b1a9952ddea90114f2d7f37f6d8208ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_50aab095b8b013f0bf4c207aaa3dad94bc4d3744e9fd50990cbb98f04e23ea28->leave($__internal_50aab095b8b013f0bf4c207aaa3dad94bc4d3744e9fd50990cbb98f04e23ea28_prof);

        
        $__internal_6c275d8c68a680723444c2f4eb0bf320b1a9952ddea90114f2d7f37f6d8208ef->leave($__internal_6c275d8c68a680723444c2f4eb0bf320b1a9952ddea90114f2d7f37f6d8208ef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/var/www/html/Barlito/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
