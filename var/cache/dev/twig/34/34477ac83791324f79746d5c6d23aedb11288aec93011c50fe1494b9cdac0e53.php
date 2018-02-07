<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5ee976e1d436c3b3cb8e6d36af3f193234c138a4cbcad03c3a2a254eae0b0b6c extends Twig_Template
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
        $__internal_76deb5438d0955fcf6074dc80b86f355f29663db709733af0b6dd858a224eb78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76deb5438d0955fcf6074dc80b86f355f29663db709733af0b6dd858a224eb78->enter($__internal_76deb5438d0955fcf6074dc80b86f355f29663db709733af0b6dd858a224eb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d066e4d965f17e90c236ca6569a3fd7da9fdef58d1af4862e1dfd6ffeff792c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d066e4d965f17e90c236ca6569a3fd7da9fdef58d1af4862e1dfd6ffeff792c3->enter($__internal_d066e4d965f17e90c236ca6569a3fd7da9fdef58d1af4862e1dfd6ffeff792c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_76deb5438d0955fcf6074dc80b86f355f29663db709733af0b6dd858a224eb78->leave($__internal_76deb5438d0955fcf6074dc80b86f355f29663db709733af0b6dd858a224eb78_prof);

        
        $__internal_d066e4d965f17e90c236ca6569a3fd7da9fdef58d1af4862e1dfd6ffeff792c3->leave($__internal_d066e4d965f17e90c236ca6569a3fd7da9fdef58d1af4862e1dfd6ffeff792c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
