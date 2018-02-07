<?php

/* SonataCoreBundle:Form:color.html.twig */
class __TwigTemplate_4249910b6c0f9bd219158ec3b03568b5a95f52523f0ce13ad8594d0e6a00def2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_widget' => array($this, 'block_sonata_type_color_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6b681f9d50976dfea1f6907e7d22b772543992f32c04adfcd5b3a0a84fa91ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6b681f9d50976dfea1f6907e7d22b772543992f32c04adfcd5b3a0a84fa91ce->enter($__internal_e6b681f9d50976dfea1f6907e7d22b772543992f32c04adfcd5b3a0a84fa91ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:color.html.twig"));

        $__internal_504b52bf7133da9d5fe4b040fe560bd3a6ab58a8e9bdbe973e242351f51506fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504b52bf7133da9d5fe4b040fe560bd3a6ab58a8e9bdbe973e242351f51506fd->enter($__internal_504b52bf7133da9d5fe4b040fe560bd3a6ab58a8e9bdbe973e242351f51506fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:color.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_widget', $context, $blocks);
        
        $__internal_e6b681f9d50976dfea1f6907e7d22b772543992f32c04adfcd5b3a0a84fa91ce->leave($__internal_e6b681f9d50976dfea1f6907e7d22b772543992f32c04adfcd5b3a0a84fa91ce_prof);

        
        $__internal_504b52bf7133da9d5fe4b040fe560bd3a6ab58a8e9bdbe973e242351f51506fd->leave($__internal_504b52bf7133da9d5fe4b040fe560bd3a6ab58a8e9bdbe973e242351f51506fd_prof);

    }

    public function block_sonata_type_color_widget($context, array $blocks = array())
    {
        $__internal_3adf8ec81a92e0edf26bd38e3a26eca8af2fb929d149c890de5d2ebee8538937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3adf8ec81a92e0edf26bd38e3a26eca8af2fb929d149c890de5d2ebee8538937->enter($__internal_3adf8ec81a92e0edf26bd38e3a26eca8af2fb929d149c890de5d2ebee8538937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_widget"));

        $__internal_ef87fc91afc63b120b83ccd4af0360adb4648e60fcbbfb881e7fcb8da0474609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef87fc91afc63b120b83ccd4af0360adb4648e60fcbbfb881e7fcb8da0474609->enter($__internal_ef87fc91afc63b120b83ccd4af0360adb4648e60fcbbfb881e7fcb8da0474609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_widget"));

        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <input type=\"color\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ef87fc91afc63b120b83ccd4af0360adb4648e60fcbbfb881e7fcb8da0474609->leave($__internal_ef87fc91afc63b120b83ccd4af0360adb4648e60fcbbfb881e7fcb8da0474609_prof);

        
        $__internal_3adf8ec81a92e0edf26bd38e3a26eca8af2fb929d149c890de5d2ebee8538937->leave($__internal_3adf8ec81a92e0edf26bd38e3a26eca8af2fb929d149c890de5d2ebee8538937_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:color.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  44 => 12,  26 => 11,);
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
{% block sonata_type_color_widget %}
    {% spaceless %}
        <input type=\"color\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
    {% endspaceless %}
{% endblock sonata_type_color_widget %}
", "SonataCoreBundle:Form:color.html.twig", "/var/www/html/Barlito/vendor/sonata-project/core-bundle/Resources/views/Form/color.html.twig");
    }
}
