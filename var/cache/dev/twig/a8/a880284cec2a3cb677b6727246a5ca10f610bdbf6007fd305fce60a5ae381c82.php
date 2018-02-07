<?php

/* AppBundle::login.html.twig */
class __TwigTemplate_4b22d00de9d52e4c15e2cc956327df77c3d27c02bd150167ffab8cdf0be51961 extends Twig_Template
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
        $__internal_d5ddbcd21a54627d4884a5d6e8820058210e7edbb7d4ba15892cce90348b4f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5ddbcd21a54627d4884a5d6e8820058210e7edbb7d4ba15892cce90348b4f32->enter($__internal_d5ddbcd21a54627d4884a5d6e8820058210e7edbb7d4ba15892cce90348b4f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::login.html.twig"));

        $__internal_84fa30550d91da0d8020a5e2d22833fc9c2a9c571fe0502d96f4b6cdceb06e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fa30550d91da0d8020a5e2d22833fc9c2a9c571fe0502d96f4b6cdceb06e8a->enter($__internal_84fa30550d91da0d8020a5e2d22833fc9c2a9c571fe0502d96f4b6cdceb06e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::login.html.twig"));

        // line 1
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 17
        echo "
    <button type=\"submit\">login</button>
</form>";
        
        $__internal_d5ddbcd21a54627d4884a5d6e8820058210e7edbb7d4ba15892cce90348b4f32->leave($__internal_d5ddbcd21a54627d4884a5d6e8820058210e7edbb7d4ba15892cce90348b4f32_prof);

        
        $__internal_84fa30550d91da0d8020a5e2d22833fc9c2a9c571fe0502d96f4b6cdceb06e8a->leave($__internal_84fa30550d91da0d8020a5e2d22833fc9c2a9c571fe0502d96f4b6cdceb06e8a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  41 => 7,  36 => 5,  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path('login') }}\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}

    <button type=\"submit\">login</button>
</form>", "AppBundle::login.html.twig", "/var/www/html/Barlito/src/AppBundle/Resources/views/login.html.twig");
    }
}
