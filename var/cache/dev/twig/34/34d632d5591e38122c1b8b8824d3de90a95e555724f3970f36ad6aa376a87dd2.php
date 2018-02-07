<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_758b0858e7f39ead436cb40fdbf4c6c42b41f2cc5773d6b7d74c926e9dd89609 extends Twig_Template
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
        $__internal_693ce10eaf5b4df81cfbad423a26c356dd50e8f6111acbc23f41d89ab1c8b88b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_693ce10eaf5b4df81cfbad423a26c356dd50e8f6111acbc23f41d89ab1c8b88b->enter($__internal_693ce10eaf5b4df81cfbad423a26c356dd50e8f6111acbc23f41d89ab1c8b88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8c01e08c3440a4defd5aa53e62b4d1f5b34d76df8373450f83bc6fd16c55c1bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c01e08c3440a4defd5aa53e62b4d1f5b34d76df8373450f83bc6fd16c55c1bc->enter($__internal_8c01e08c3440a4defd5aa53e62b4d1f5b34d76df8373450f83bc6fd16c55c1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_693ce10eaf5b4df81cfbad423a26c356dd50e8f6111acbc23f41d89ab1c8b88b->leave($__internal_693ce10eaf5b4df81cfbad423a26c356dd50e8f6111acbc23f41d89ab1c8b88b_prof);

        
        $__internal_8c01e08c3440a4defd5aa53e62b4d1f5b34d76df8373450f83bc6fd16c55c1bc->leave($__internal_8c01e08c3440a4defd5aa53e62b4d1f5b34d76df8373450f83bc6fd16c55c1bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
