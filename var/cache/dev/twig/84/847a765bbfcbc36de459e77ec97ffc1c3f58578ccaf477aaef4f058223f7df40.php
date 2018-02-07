<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_87e4f2cb2efa5bfe15864b9fc935989b722a572a789c694ad55f12f190a79d3b extends Twig_Template
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
        $__internal_2af1d880e281707389d3ba63fc05fd7199e7751313f691d832a4e90452de023f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af1d880e281707389d3ba63fc05fd7199e7751313f691d832a4e90452de023f->enter($__internal_2af1d880e281707389d3ba63fc05fd7199e7751313f691d832a4e90452de023f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_306fbfd11e94b3e888bf6b11d0ebd7926b5ff2302693b9b8f40dbca770c56214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306fbfd11e94b3e888bf6b11d0ebd7926b5ff2302693b9b8f40dbca770c56214->enter($__internal_306fbfd11e94b3e888bf6b11d0ebd7926b5ff2302693b9b8f40dbca770c56214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2af1d880e281707389d3ba63fc05fd7199e7751313f691d832a4e90452de023f->leave($__internal_2af1d880e281707389d3ba63fc05fd7199e7751313f691d832a4e90452de023f_prof);

        
        $__internal_306fbfd11e94b3e888bf6b11d0ebd7926b5ff2302693b9b8f40dbca770c56214->leave($__internal_306fbfd11e94b3e888bf6b11d0ebd7926b5ff2302693b9b8f40dbca770c56214_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
