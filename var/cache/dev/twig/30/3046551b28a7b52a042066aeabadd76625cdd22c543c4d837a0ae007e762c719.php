<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ca48c39d7b91946938f1f21ff1c75f66c5444a5be7a7d1393853d44b034c9d62 extends Twig_Template
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
        $__internal_fe1fed18722a142295409e64c6725f6a86f412b6da00b4e12b57644d4f634f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe1fed18722a142295409e64c6725f6a86f412b6da00b4e12b57644d4f634f6f->enter($__internal_fe1fed18722a142295409e64c6725f6a86f412b6da00b4e12b57644d4f634f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2da89c7d9c83bf7b585d14d2e2045b93c508fa2e65472b35a176013c999da6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da89c7d9c83bf7b585d14d2e2045b93c508fa2e65472b35a176013c999da6db->enter($__internal_2da89c7d9c83bf7b585d14d2e2045b93c508fa2e65472b35a176013c999da6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fe1fed18722a142295409e64c6725f6a86f412b6da00b4e12b57644d4f634f6f->leave($__internal_fe1fed18722a142295409e64c6725f6a86f412b6da00b4e12b57644d4f634f6f_prof);

        
        $__internal_2da89c7d9c83bf7b585d14d2e2045b93c508fa2e65472b35a176013c999da6db->leave($__internal_2da89c7d9c83bf7b585d14d2e2045b93c508fa2e65472b35a176013c999da6db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
