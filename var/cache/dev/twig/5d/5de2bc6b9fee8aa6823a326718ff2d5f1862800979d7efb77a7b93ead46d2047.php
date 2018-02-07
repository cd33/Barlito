<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_19125f12f31b5f6a7691848bc357cc45c0749a32588198fa3be63ba26b56728b extends Twig_Template
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
        $__internal_3c0a7aa691f0cb70758ac3cc82fd26347d746aa7acaffb023db140c3a42bf044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0a7aa691f0cb70758ac3cc82fd26347d746aa7acaffb023db140c3a42bf044->enter($__internal_3c0a7aa691f0cb70758ac3cc82fd26347d746aa7acaffb023db140c3a42bf044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_adcbeac7fbb30ddb2f7c4ce1e9a6bd5948e7539b7a3f53b44197d06f0054744a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adcbeac7fbb30ddb2f7c4ce1e9a6bd5948e7539b7a3f53b44197d06f0054744a->enter($__internal_adcbeac7fbb30ddb2f7c4ce1e9a6bd5948e7539b7a3f53b44197d06f0054744a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_3c0a7aa691f0cb70758ac3cc82fd26347d746aa7acaffb023db140c3a42bf044->leave($__internal_3c0a7aa691f0cb70758ac3cc82fd26347d746aa7acaffb023db140c3a42bf044_prof);

        
        $__internal_adcbeac7fbb30ddb2f7c4ce1e9a6bd5948e7539b7a3f53b44197d06f0054744a->leave($__internal_adcbeac7fbb30ddb2f7c4ce1e9a6bd5948e7539b7a3f53b44197d06f0054744a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
