<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a504bb75bb3ea2e9b790702478d63dda7f1c38dfd48a2cb0dc778f7097458036 extends Twig_Template
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
        $__internal_f1bd1db0b35bf62f9fff49c45dc511ed6f089cf9705091b90f5769a55cf32620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1bd1db0b35bf62f9fff49c45dc511ed6f089cf9705091b90f5769a55cf32620->enter($__internal_f1bd1db0b35bf62f9fff49c45dc511ed6f089cf9705091b90f5769a55cf32620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_21c55b337b54b7e1fc4436b0d435384e1bbc64eb9590e8cae2f8f4ac00b36bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c55b337b54b7e1fc4436b0d435384e1bbc64eb9590e8cae2f8f4ac00b36bc9->enter($__internal_21c55b337b54b7e1fc4436b0d435384e1bbc64eb9590e8cae2f8f4ac00b36bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f1bd1db0b35bf62f9fff49c45dc511ed6f089cf9705091b90f5769a55cf32620->leave($__internal_f1bd1db0b35bf62f9fff49c45dc511ed6f089cf9705091b90f5769a55cf32620_prof);

        
        $__internal_21c55b337b54b7e1fc4436b0d435384e1bbc64eb9590e8cae2f8f4ac00b36bc9->leave($__internal_21c55b337b54b7e1fc4436b0d435384e1bbc64eb9590e8cae2f8f4ac00b36bc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
