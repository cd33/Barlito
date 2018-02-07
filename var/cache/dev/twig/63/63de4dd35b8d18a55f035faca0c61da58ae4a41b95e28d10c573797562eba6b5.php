<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d00fc0b4e0ce5c16227fe495e7e44a5e365a4729e80c36524537b27c142e18ef extends Twig_Template
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
        $__internal_990448bce1fe450201d8fccc21927fa8ae41416162a4529629f2d99caec1fa5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990448bce1fe450201d8fccc21927fa8ae41416162a4529629f2d99caec1fa5c->enter($__internal_990448bce1fe450201d8fccc21927fa8ae41416162a4529629f2d99caec1fa5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_404f6ced2489a9f2ce9331a21c0c5bafc38129cfc47d10a7a11678f7418f47d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404f6ced2489a9f2ce9331a21c0c5bafc38129cfc47d10a7a11678f7418f47d2->enter($__internal_404f6ced2489a9f2ce9331a21c0c5bafc38129cfc47d10a7a11678f7418f47d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_990448bce1fe450201d8fccc21927fa8ae41416162a4529629f2d99caec1fa5c->leave($__internal_990448bce1fe450201d8fccc21927fa8ae41416162a4529629f2d99caec1fa5c_prof);

        
        $__internal_404f6ced2489a9f2ce9331a21c0c5bafc38129cfc47d10a7a11678f7418f47d2->leave($__internal_404f6ced2489a9f2ce9331a21c0c5bafc38129cfc47d10a7a11678f7418f47d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
