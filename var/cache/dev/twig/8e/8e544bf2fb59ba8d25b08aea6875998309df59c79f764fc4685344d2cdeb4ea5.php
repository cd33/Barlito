<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f628ba1a27d2893d73f08c89b151b7323e361d31a4b264f2233d966486bf3aff extends Twig_Template
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
        $__internal_99f0e34ec066b5947f54f112e8ade11b52a821169318f6a700076e4bd16f00a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f0e34ec066b5947f54f112e8ade11b52a821169318f6a700076e4bd16f00a2->enter($__internal_99f0e34ec066b5947f54f112e8ade11b52a821169318f6a700076e4bd16f00a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_64866621c6444630d8bfb71bb1cc89902c917b3785a77612fa9e90a2e536adab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64866621c6444630d8bfb71bb1cc89902c917b3785a77612fa9e90a2e536adab->enter($__internal_64866621c6444630d8bfb71bb1cc89902c917b3785a77612fa9e90a2e536adab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_99f0e34ec066b5947f54f112e8ade11b52a821169318f6a700076e4bd16f00a2->leave($__internal_99f0e34ec066b5947f54f112e8ade11b52a821169318f6a700076e4bd16f00a2_prof);

        
        $__internal_64866621c6444630d8bfb71bb1cc89902c917b3785a77612fa9e90a2e536adab->leave($__internal_64866621c6444630d8bfb71bb1cc89902c917b3785a77612fa9e90a2e536adab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
