<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_245fc9ab2eeea14323b478ea4d038dce5621076f0a705b486b5137902fd0c4f3 extends Twig_Template
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
        $__internal_8c01b5ebef363a2f4083deaa894bbef5756cce2c6f19a22edf12e511c0ea97c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c01b5ebef363a2f4083deaa894bbef5756cce2c6f19a22edf12e511c0ea97c2->enter($__internal_8c01b5ebef363a2f4083deaa894bbef5756cce2c6f19a22edf12e511c0ea97c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_643155304b7040dfa919fecc6076c7209017a4da244e50108c9b0bda1fd76ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643155304b7040dfa919fecc6076c7209017a4da244e50108c9b0bda1fd76ad7->enter($__internal_643155304b7040dfa919fecc6076c7209017a4da244e50108c9b0bda1fd76ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_8c01b5ebef363a2f4083deaa894bbef5756cce2c6f19a22edf12e511c0ea97c2->leave($__internal_8c01b5ebef363a2f4083deaa894bbef5756cce2c6f19a22edf12e511c0ea97c2_prof);

        
        $__internal_643155304b7040dfa919fecc6076c7209017a4da244e50108c9b0bda1fd76ad7->leave($__internal_643155304b7040dfa919fecc6076c7209017a4da244e50108c9b0bda1fd76ad7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
