<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6e418ce45dbdbc446a05ff07edd1fe24802e4b4dd9d689d0b14cf7cbeaa0ab32 extends Twig_Template
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
        $__internal_0c59b8f202f89255cf7b758c127fe03bc9cc652bc26e13d66c8fb560163ffc64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c59b8f202f89255cf7b758c127fe03bc9cc652bc26e13d66c8fb560163ffc64->enter($__internal_0c59b8f202f89255cf7b758c127fe03bc9cc652bc26e13d66c8fb560163ffc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_12adf01a7d783a9674ca9b71f3ff487d98e14d3d365ee81ed9fc9614669e5cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12adf01a7d783a9674ca9b71f3ff487d98e14d3d365ee81ed9fc9614669e5cfd->enter($__internal_12adf01a7d783a9674ca9b71f3ff487d98e14d3d365ee81ed9fc9614669e5cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0c59b8f202f89255cf7b758c127fe03bc9cc652bc26e13d66c8fb560163ffc64->leave($__internal_0c59b8f202f89255cf7b758c127fe03bc9cc652bc26e13d66c8fb560163ffc64_prof);

        
        $__internal_12adf01a7d783a9674ca9b71f3ff487d98e14d3d365ee81ed9fc9614669e5cfd->leave($__internal_12adf01a7d783a9674ca9b71f3ff487d98e14d3d365ee81ed9fc9614669e5cfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
