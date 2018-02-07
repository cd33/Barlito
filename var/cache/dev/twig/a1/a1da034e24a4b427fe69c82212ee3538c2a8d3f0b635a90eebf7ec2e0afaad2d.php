<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_5230501f25c3279476e5c77360b31014bbfac868d312c6be4af1edab818ffd77 extends Twig_Template
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
        $__internal_aefb7f250e446bc559cd71730014fb320060a52512c02d61de984bdff4915cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aefb7f250e446bc559cd71730014fb320060a52512c02d61de984bdff4915cff->enter($__internal_aefb7f250e446bc559cd71730014fb320060a52512c02d61de984bdff4915cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_cd58c2515fccf9fbe9009001fdfa49b5865f53623211fab68b62ac8af3894e3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd58c2515fccf9fbe9009001fdfa49b5865f53623211fab68b62ac8af3894e3d->enter($__internal_cd58c2515fccf9fbe9009001fdfa49b5865f53623211fab68b62ac8af3894e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_aefb7f250e446bc559cd71730014fb320060a52512c02d61de984bdff4915cff->leave($__internal_aefb7f250e446bc559cd71730014fb320060a52512c02d61de984bdff4915cff_prof);

        
        $__internal_cd58c2515fccf9fbe9009001fdfa49b5865f53623211fab68b62ac8af3894e3d->leave($__internal_cd58c2515fccf9fbe9009001fdfa49b5865f53623211fab68b62ac8af3894e3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
