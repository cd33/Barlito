<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d03bb6eb0b369cca56d2b88ec96c01359b763914cd5db1da67bf35592dbbd2ab extends Twig_Template
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
        $__internal_e0e70f3836f30c40691bba72490be04d7e32b2c9eb9f820c9ce23e90cdd8ca74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e70f3836f30c40691bba72490be04d7e32b2c9eb9f820c9ce23e90cdd8ca74->enter($__internal_e0e70f3836f30c40691bba72490be04d7e32b2c9eb9f820c9ce23e90cdd8ca74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_80581327dfdaaffa091d1cb018f82b0c0b7853d83ee019d676942c95faf57dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80581327dfdaaffa091d1cb018f82b0c0b7853d83ee019d676942c95faf57dd2->enter($__internal_80581327dfdaaffa091d1cb018f82b0c0b7853d83ee019d676942c95faf57dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e0e70f3836f30c40691bba72490be04d7e32b2c9eb9f820c9ce23e90cdd8ca74->leave($__internal_e0e70f3836f30c40691bba72490be04d7e32b2c9eb9f820c9ce23e90cdd8ca74_prof);

        
        $__internal_80581327dfdaaffa091d1cb018f82b0c0b7853d83ee019d676942c95faf57dd2->leave($__internal_80581327dfdaaffa091d1cb018f82b0c0b7853d83ee019d676942c95faf57dd2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
