<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2f32ac3d5f7fdac68378b1f1f5b291f37f601ffd89f9e07d78ce540cea1070d7 extends Twig_Template
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
        $__internal_f5b3e5ddd23334d5e8870d9951dc1e1ae1d312fadfa0f906fe47596db292620e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b3e5ddd23334d5e8870d9951dc1e1ae1d312fadfa0f906fe47596db292620e->enter($__internal_f5b3e5ddd23334d5e8870d9951dc1e1ae1d312fadfa0f906fe47596db292620e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_a4efa9ee00be5cbea94614a0090b144bee043dacf3ebef889b58278d0058c535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4efa9ee00be5cbea94614a0090b144bee043dacf3ebef889b58278d0058c535->enter($__internal_a4efa9ee00be5cbea94614a0090b144bee043dacf3ebef889b58278d0058c535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f5b3e5ddd23334d5e8870d9951dc1e1ae1d312fadfa0f906fe47596db292620e->leave($__internal_f5b3e5ddd23334d5e8870d9951dc1e1ae1d312fadfa0f906fe47596db292620e_prof);

        
        $__internal_a4efa9ee00be5cbea94614a0090b144bee043dacf3ebef889b58278d0058c535->leave($__internal_a4efa9ee00be5cbea94614a0090b144bee043dacf3ebef889b58278d0058c535_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
