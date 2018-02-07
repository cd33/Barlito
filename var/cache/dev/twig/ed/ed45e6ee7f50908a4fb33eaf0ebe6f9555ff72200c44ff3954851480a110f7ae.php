<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3004f40df621b6ed570fc2bd462217145cf638ce726b8b79227a97d7f3832352 extends Twig_Template
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
        $__internal_2b2c14120ddd6d9bebad16e89548ff5b293bbc0e14123a4830701998c0d3ba04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b2c14120ddd6d9bebad16e89548ff5b293bbc0e14123a4830701998c0d3ba04->enter($__internal_2b2c14120ddd6d9bebad16e89548ff5b293bbc0e14123a4830701998c0d3ba04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e86e1e163f343f97f8eedf2a3ac952f5b03c8c7e672930b39e7836eb5ca32bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86e1e163f343f97f8eedf2a3ac952f5b03c8c7e672930b39e7836eb5ca32bb6->enter($__internal_e86e1e163f343f97f8eedf2a3ac952f5b03c8c7e672930b39e7836eb5ca32bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2b2c14120ddd6d9bebad16e89548ff5b293bbc0e14123a4830701998c0d3ba04->leave($__internal_2b2c14120ddd6d9bebad16e89548ff5b293bbc0e14123a4830701998c0d3ba04_prof);

        
        $__internal_e86e1e163f343f97f8eedf2a3ac952f5b03c8c7e672930b39e7836eb5ca32bb6->leave($__internal_e86e1e163f343f97f8eedf2a3ac952f5b03c8c7e672930b39e7836eb5ca32bb6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
