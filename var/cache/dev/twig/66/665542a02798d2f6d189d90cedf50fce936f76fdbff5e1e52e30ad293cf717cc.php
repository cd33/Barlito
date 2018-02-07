<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_26c52fc0ed6dd1d25663796cb4c19bcd4bb1ab6a7d16260e1eedb09212e9a824 extends Twig_Template
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
        $__internal_a111d964017d17db1605b8061d1261a7ec35db7e6c8b3bd59bbc3a1228cdea7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a111d964017d17db1605b8061d1261a7ec35db7e6c8b3bd59bbc3a1228cdea7b->enter($__internal_a111d964017d17db1605b8061d1261a7ec35db7e6c8b3bd59bbc3a1228cdea7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_0093467f9eb7f0bb70d684a529b9be744d0b7619677938bcc1f4e3e4a3273ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0093467f9eb7f0bb70d684a529b9be744d0b7619677938bcc1f4e3e4a3273ca3->enter($__internal_0093467f9eb7f0bb70d684a529b9be744d0b7619677938bcc1f4e3e4a3273ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a111d964017d17db1605b8061d1261a7ec35db7e6c8b3bd59bbc3a1228cdea7b->leave($__internal_a111d964017d17db1605b8061d1261a7ec35db7e6c8b3bd59bbc3a1228cdea7b_prof);

        
        $__internal_0093467f9eb7f0bb70d684a529b9be744d0b7619677938bcc1f4e3e4a3273ca3->leave($__internal_0093467f9eb7f0bb70d684a529b9be744d0b7619677938bcc1f4e3e4a3273ca3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
