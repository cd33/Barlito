<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_fdfc095b00cfc0eef28b7eb7e71266935829c7caa678d5ceb87b76de12adbc87 extends Twig_Template
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
        $__internal_9e9520421126148fd60e05fb866a04e4b3812f6e4ae4d669f054f3e02ac449ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e9520421126148fd60e05fb866a04e4b3812f6e4ae4d669f054f3e02ac449ca->enter($__internal_9e9520421126148fd60e05fb866a04e4b3812f6e4ae4d669f054f3e02ac449ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_dbc3d0515ba287967995923fdafac08292667424ed2d419e71197581225cdda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc3d0515ba287967995923fdafac08292667424ed2d419e71197581225cdda4->enter($__internal_dbc3d0515ba287967995923fdafac08292667424ed2d419e71197581225cdda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_9e9520421126148fd60e05fb866a04e4b3812f6e4ae4d669f054f3e02ac449ca->leave($__internal_9e9520421126148fd60e05fb866a04e4b3812f6e4ae4d669f054f3e02ac449ca_prof);

        
        $__internal_dbc3d0515ba287967995923fdafac08292667424ed2d419e71197581225cdda4->leave($__internal_dbc3d0515ba287967995923fdafac08292667424ed2d419e71197581225cdda4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
