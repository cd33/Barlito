<?php

/* base.html.twig */
class __TwigTemplate_f71cb753335b1024cf2a55c3c7f8313562de416a5ac59375ad239acdd8852614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e08ea6bea72e025252c18e8f13ebf100246f3e09cf390556aae7d57150adb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e08ea6bea72e025252c18e8f13ebf100246f3e09cf390556aae7d57150adb63->enter($__internal_1e08ea6bea72e025252c18e8f13ebf100246f3e09cf390556aae7d57150adb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8abeaf6df583649202243e93ddea4eb94b3d8e49898e213e6711f06c96c736fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abeaf6df583649202243e93ddea4eb94b3d8e49898e213e6711f06c96c736fb->enter($__internal_8abeaf6df583649202243e93ddea4eb94b3d8e49898e213e6711f06c96c736fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1e08ea6bea72e025252c18e8f13ebf100246f3e09cf390556aae7d57150adb63->leave($__internal_1e08ea6bea72e025252c18e8f13ebf100246f3e09cf390556aae7d57150adb63_prof);

        
        $__internal_8abeaf6df583649202243e93ddea4eb94b3d8e49898e213e6711f06c96c736fb->leave($__internal_8abeaf6df583649202243e93ddea4eb94b3d8e49898e213e6711f06c96c736fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce8fd483dbdda8de7bb2d61804a338c38be640e5be151920877956b97c271995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8fd483dbdda8de7bb2d61804a338c38be640e5be151920877956b97c271995->enter($__internal_ce8fd483dbdda8de7bb2d61804a338c38be640e5be151920877956b97c271995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d37cecc71e9e1ba9496375e897d36aee2889fa4dc58a6235d8d5da4fc7ccfe45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37cecc71e9e1ba9496375e897d36aee2889fa4dc58a6235d8d5da4fc7ccfe45->enter($__internal_d37cecc71e9e1ba9496375e897d36aee2889fa4dc58a6235d8d5da4fc7ccfe45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d37cecc71e9e1ba9496375e897d36aee2889fa4dc58a6235d8d5da4fc7ccfe45->leave($__internal_d37cecc71e9e1ba9496375e897d36aee2889fa4dc58a6235d8d5da4fc7ccfe45_prof);

        
        $__internal_ce8fd483dbdda8de7bb2d61804a338c38be640e5be151920877956b97c271995->leave($__internal_ce8fd483dbdda8de7bb2d61804a338c38be640e5be151920877956b97c271995_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d68e9c3ac656fdc94874fe9f594a58fbff8f76a90a1335042b969c565ab7b639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d68e9c3ac656fdc94874fe9f594a58fbff8f76a90a1335042b969c565ab7b639->enter($__internal_d68e9c3ac656fdc94874fe9f594a58fbff8f76a90a1335042b969c565ab7b639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_82dfce76d0dbec30750c8e1c6631a95d1e897b66d00458829f7907aba033b491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82dfce76d0dbec30750c8e1c6631a95d1e897b66d00458829f7907aba033b491->enter($__internal_82dfce76d0dbec30750c8e1c6631a95d1e897b66d00458829f7907aba033b491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_82dfce76d0dbec30750c8e1c6631a95d1e897b66d00458829f7907aba033b491->leave($__internal_82dfce76d0dbec30750c8e1c6631a95d1e897b66d00458829f7907aba033b491_prof);

        
        $__internal_d68e9c3ac656fdc94874fe9f594a58fbff8f76a90a1335042b969c565ab7b639->leave($__internal_d68e9c3ac656fdc94874fe9f594a58fbff8f76a90a1335042b969c565ab7b639_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_730291454e61c687af935a982810205acf46695f7bd378d54cd4bb75ca45904e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_730291454e61c687af935a982810205acf46695f7bd378d54cd4bb75ca45904e->enter($__internal_730291454e61c687af935a982810205acf46695f7bd378d54cd4bb75ca45904e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_409525223bf9cdd537aa8a50d6690727a22a1e7f5c40d447b42544cf303e8f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409525223bf9cdd537aa8a50d6690727a22a1e7f5c40d447b42544cf303e8f92->enter($__internal_409525223bf9cdd537aa8a50d6690727a22a1e7f5c40d447b42544cf303e8f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_409525223bf9cdd537aa8a50d6690727a22a1e7f5c40d447b42544cf303e8f92->leave($__internal_409525223bf9cdd537aa8a50d6690727a22a1e7f5c40d447b42544cf303e8f92_prof);

        
        $__internal_730291454e61c687af935a982810205acf46695f7bd378d54cd4bb75ca45904e->leave($__internal_730291454e61c687af935a982810205acf46695f7bd378d54cd4bb75ca45904e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ebf7069f920993f0a0333cfc3a7479c59b74bb2be0972c8b237b883054fccba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf7069f920993f0a0333cfc3a7479c59b74bb2be0972c8b237b883054fccba5->enter($__internal_ebf7069f920993f0a0333cfc3a7479c59b74bb2be0972c8b237b883054fccba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2a3fb2e7538ad3abfe0966beb320dac495f2c82e8683364f524d427e5a569415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3fb2e7538ad3abfe0966beb320dac495f2c82e8683364f524d427e5a569415->enter($__internal_2a3fb2e7538ad3abfe0966beb320dac495f2c82e8683364f524d427e5a569415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2a3fb2e7538ad3abfe0966beb320dac495f2c82e8683364f524d427e5a569415->leave($__internal_2a3fb2e7538ad3abfe0966beb320dac495f2c82e8683364f524d427e5a569415_prof);

        
        $__internal_ebf7069f920993f0a0333cfc3a7479c59b74bb2be0972c8b237b883054fccba5->leave($__internal_ebf7069f920993f0a0333cfc3a7479c59b74bb2be0972c8b237b883054fccba5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/Barlito/app/Resources/views/base.html.twig");
    }
}
