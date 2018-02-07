<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_483d69b35b902b59f177757cf1f889624ac65ddcb55915c55b5d148b80ba5b3a extends Twig_Template
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
        $__internal_1f9fbaff675af3c9d764878b904b53e99784b9f87842f9b6c9fa281892ffc1e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9fbaff675af3c9d764878b904b53e99784b9f87842f9b6c9fa281892ffc1e3->enter($__internal_1f9fbaff675af3c9d764878b904b53e99784b9f87842f9b6c9fa281892ffc1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_bea66c2b49a4bb36356b9dfe1396364b369d6b8b38cdcd4f89b3913a3c78cd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea66c2b49a4bb36356b9dfe1396364b369d6b8b38cdcd4f89b3913a3c78cd2c->enter($__internal_bea66c2b49a4bb36356b9dfe1396364b369d6b8b38cdcd4f89b3913a3c78cd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1f9fbaff675af3c9d764878b904b53e99784b9f87842f9b6c9fa281892ffc1e3->leave($__internal_1f9fbaff675af3c9d764878b904b53e99784b9f87842f9b6c9fa281892ffc1e3_prof);

        
        $__internal_bea66c2b49a4bb36356b9dfe1396364b369d6b8b38cdcd4f89b3913a3c78cd2c->leave($__internal_bea66c2b49a4bb36356b9dfe1396364b369d6b8b38cdcd4f89b3913a3c78cd2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
