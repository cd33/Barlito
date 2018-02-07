<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_ef3bf18660f7d288356aa082ce121efc848f076f923a3398ec1371ab72425a79 extends Twig_Template
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
        $__internal_24263aeca05b1856a4fd94d679cac4867ac6232486f1a8120eb9e2e087b1a5c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24263aeca05b1856a4fd94d679cac4867ac6232486f1a8120eb9e2e087b1a5c0->enter($__internal_24263aeca05b1856a4fd94d679cac4867ac6232486f1a8120eb9e2e087b1a5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_0fc47004e15f4ed4d5a626035ab497a0a8f8c1860584939a01188399258a060b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc47004e15f4ed4d5a626035ab497a0a8f8c1860584939a01188399258a060b->enter($__internal_0fc47004e15f4ed4d5a626035ab497a0a8f8c1860584939a01188399258a060b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_24263aeca05b1856a4fd94d679cac4867ac6232486f1a8120eb9e2e087b1a5c0->leave($__internal_24263aeca05b1856a4fd94d679cac4867ac6232486f1a8120eb9e2e087b1a5c0_prof);

        
        $__internal_0fc47004e15f4ed4d5a626035ab497a0a8f8c1860584939a01188399258a060b->leave($__internal_0fc47004e15f4ed4d5a626035ab497a0a8f8c1860584939a01188399258a060b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
