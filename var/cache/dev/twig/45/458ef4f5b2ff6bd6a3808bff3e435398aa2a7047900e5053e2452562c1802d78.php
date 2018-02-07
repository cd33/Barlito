<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ec3c508479cdf5b1c68b851a3f4e4aff6c6f407d32e748c2e676f11b72460bb6 extends Twig_Template
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
        $__internal_6dd6d2aa1c124fd3629a201d2a881b5a33f6ff94117c655b3d94a112a71361f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd6d2aa1c124fd3629a201d2a881b5a33f6ff94117c655b3d94a112a71361f1->enter($__internal_6dd6d2aa1c124fd3629a201d2a881b5a33f6ff94117c655b3d94a112a71361f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_7d8a98fce72b4898ba1240304aa6962b481978fd3b6036c25efe9b2c780c830b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d8a98fce72b4898ba1240304aa6962b481978fd3b6036c25efe9b2c780c830b->enter($__internal_7d8a98fce72b4898ba1240304aa6962b481978fd3b6036c25efe9b2c780c830b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_6dd6d2aa1c124fd3629a201d2a881b5a33f6ff94117c655b3d94a112a71361f1->leave($__internal_6dd6d2aa1c124fd3629a201d2a881b5a33f6ff94117c655b3d94a112a71361f1_prof);

        
        $__internal_7d8a98fce72b4898ba1240304aa6962b481978fd3b6036c25efe9b2c780c830b->leave($__internal_7d8a98fce72b4898ba1240304aa6962b481978fd3b6036c25efe9b2c780c830b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
