<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_91c78ddd37ab2bf684b1b106688a21c2b64d30bd266686593c5a06766e78ed5b extends Twig_Template
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
        $__internal_f2c207908d1c4c377ee97c18a575dd263d2b8a8fb37b3f473bcc19b32d90864c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c207908d1c4c377ee97c18a575dd263d2b8a8fb37b3f473bcc19b32d90864c->enter($__internal_f2c207908d1c4c377ee97c18a575dd263d2b8a8fb37b3f473bcc19b32d90864c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_fab2735e8781787b82fa03493fa08e46f9953b47647d5f89266a81d3021b83da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab2735e8781787b82fa03493fa08e46f9953b47647d5f89266a81d3021b83da->enter($__internal_fab2735e8781787b82fa03493fa08e46f9953b47647d5f89266a81d3021b83da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_f2c207908d1c4c377ee97c18a575dd263d2b8a8fb37b3f473bcc19b32d90864c->leave($__internal_f2c207908d1c4c377ee97c18a575dd263d2b8a8fb37b3f473bcc19b32d90864c_prof);

        
        $__internal_fab2735e8781787b82fa03493fa08e46f9953b47647d5f89266a81d3021b83da->leave($__internal_fab2735e8781787b82fa03493fa08e46f9953b47647d5f89266a81d3021b83da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
