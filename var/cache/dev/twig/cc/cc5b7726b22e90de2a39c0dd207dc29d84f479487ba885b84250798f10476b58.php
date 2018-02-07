<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_658dff922366e841a839252816414f74fb601d0f801356275c277cb11ac4bfce extends Twig_Template
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
        $__internal_23b38a25aeca67fab7aed781634f83df617afebeaca75adefcdf631320ce5cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b38a25aeca67fab7aed781634f83df617afebeaca75adefcdf631320ce5cbe->enter($__internal_23b38a25aeca67fab7aed781634f83df617afebeaca75adefcdf631320ce5cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_4116b1a0d6fc53b6c1f716b35b8111ce8a218ea503e40d2b5252a11b97f8961a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4116b1a0d6fc53b6c1f716b35b8111ce8a218ea503e40d2b5252a11b97f8961a->enter($__internal_4116b1a0d6fc53b6c1f716b35b8111ce8a218ea503e40d2b5252a11b97f8961a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_23b38a25aeca67fab7aed781634f83df617afebeaca75adefcdf631320ce5cbe->leave($__internal_23b38a25aeca67fab7aed781634f83df617afebeaca75adefcdf631320ce5cbe_prof);

        
        $__internal_4116b1a0d6fc53b6c1f716b35b8111ce8a218ea503e40d2b5252a11b97f8961a->leave($__internal_4116b1a0d6fc53b6c1f716b35b8111ce8a218ea503e40d2b5252a11b97f8961a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
