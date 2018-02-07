<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c681055459251d6c0c40c48605727ffe6b8384a97f8aa421d8e3f650318aed9d extends Twig_Template
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
        $__internal_1f13ea927496d0f2125f8e75d0347c4a7feb8cccc29eb59ba68eed4f1c0b2885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f13ea927496d0f2125f8e75d0347c4a7feb8cccc29eb59ba68eed4f1c0b2885->enter($__internal_1f13ea927496d0f2125f8e75d0347c4a7feb8cccc29eb59ba68eed4f1c0b2885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_094f852d7aafa1961079ddafc957ee88606c47cadf8b2e9e786179fc557b3711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_094f852d7aafa1961079ddafc957ee88606c47cadf8b2e9e786179fc557b3711->enter($__internal_094f852d7aafa1961079ddafc957ee88606c47cadf8b2e9e786179fc557b3711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_1f13ea927496d0f2125f8e75d0347c4a7feb8cccc29eb59ba68eed4f1c0b2885->leave($__internal_1f13ea927496d0f2125f8e75d0347c4a7feb8cccc29eb59ba68eed4f1c0b2885_prof);

        
        $__internal_094f852d7aafa1961079ddafc957ee88606c47cadf8b2e9e786179fc557b3711->leave($__internal_094f852d7aafa1961079ddafc957ee88606c47cadf8b2e9e786179fc557b3711_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
