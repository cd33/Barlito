<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a7dfbbaa418a23e3c9f7de6be1d0c96d9a6628417ee5764008f34f6518a78c98 extends Twig_Template
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
        $__internal_dcd0a48fe1d7681a9a6a692cd03d62391e73d60da1c3d2dedb3f7d5b35c327da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd0a48fe1d7681a9a6a692cd03d62391e73d60da1c3d2dedb3f7d5b35c327da->enter($__internal_dcd0a48fe1d7681a9a6a692cd03d62391e73d60da1c3d2dedb3f7d5b35c327da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_9e40f70d56455e2194ccfbeba966c56b7c729cd86544689abaf7f7158bb53319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e40f70d56455e2194ccfbeba966c56b7c729cd86544689abaf7f7158bb53319->enter($__internal_9e40f70d56455e2194ccfbeba966c56b7c729cd86544689abaf7f7158bb53319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_dcd0a48fe1d7681a9a6a692cd03d62391e73d60da1c3d2dedb3f7d5b35c327da->leave($__internal_dcd0a48fe1d7681a9a6a692cd03d62391e73d60da1c3d2dedb3f7d5b35c327da_prof);

        
        $__internal_9e40f70d56455e2194ccfbeba966c56b7c729cd86544689abaf7f7158bb53319->leave($__internal_9e40f70d56455e2194ccfbeba966c56b7c729cd86544689abaf7f7158bb53319_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
