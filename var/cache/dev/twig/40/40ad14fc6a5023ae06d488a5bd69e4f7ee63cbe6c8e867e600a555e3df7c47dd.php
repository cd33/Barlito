<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_08460cb6f6307b980a45bb2cf1f95ad6d24105ffe51aad618c2c8f9b6839f302 extends Twig_Template
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
        $__internal_66a92b603b1a3772c122cf73cae05634ee9495cea59cefe728e4bf011ac08a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66a92b603b1a3772c122cf73cae05634ee9495cea59cefe728e4bf011ac08a13->enter($__internal_66a92b603b1a3772c122cf73cae05634ee9495cea59cefe728e4bf011ac08a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_15485b35bc0df5e55937a595c792fa582b2678a87e2dd44fef2db11fcb1ab70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15485b35bc0df5e55937a595c792fa582b2678a87e2dd44fef2db11fcb1ab70b->enter($__internal_15485b35bc0df5e55937a595c792fa582b2678a87e2dd44fef2db11fcb1ab70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_66a92b603b1a3772c122cf73cae05634ee9495cea59cefe728e4bf011ac08a13->leave($__internal_66a92b603b1a3772c122cf73cae05634ee9495cea59cefe728e4bf011ac08a13_prof);

        
        $__internal_15485b35bc0df5e55937a595c792fa582b2678a87e2dd44fef2db11fcb1ab70b->leave($__internal_15485b35bc0df5e55937a595c792fa582b2678a87e2dd44fef2db11fcb1ab70b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
