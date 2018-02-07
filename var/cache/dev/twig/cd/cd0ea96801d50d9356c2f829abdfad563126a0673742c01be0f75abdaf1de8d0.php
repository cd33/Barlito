<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_3cdb0d61ef523ddd095632f8cabd3a719ad5eb26836678e1812aa42364745ac5 extends Twig_Template
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
        $__internal_655b329133e2c8753536c3a568505945f9cf8dd3f20f8f81283a626a6415cd63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655b329133e2c8753536c3a568505945f9cf8dd3f20f8f81283a626a6415cd63->enter($__internal_655b329133e2c8753536c3a568505945f9cf8dd3f20f8f81283a626a6415cd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_8333e620aa730d16fdd274ea9a3ca6ea78f7fd219d48f13d82e8d7fe0758d71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8333e620aa730d16fdd274ea9a3ca6ea78f7fd219d48f13d82e8d7fe0758d71c->enter($__internal_8333e620aa730d16fdd274ea9a3ca6ea78f7fd219d48f13d82e8d7fe0758d71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_655b329133e2c8753536c3a568505945f9cf8dd3f20f8f81283a626a6415cd63->leave($__internal_655b329133e2c8753536c3a568505945f9cf8dd3f20f8f81283a626a6415cd63_prof);

        
        $__internal_8333e620aa730d16fdd274ea9a3ca6ea78f7fd219d48f13d82e8d7fe0758d71c->leave($__internal_8333e620aa730d16fdd274ea9a3ca6ea78f7fd219d48f13d82e8d7fe0758d71c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
