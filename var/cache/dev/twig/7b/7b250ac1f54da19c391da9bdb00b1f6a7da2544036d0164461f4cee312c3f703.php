<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_7a787e7111e87d921c3ac3e15024ad360869eea3223e46c270346e48c483111d extends Twig_Template
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
        $__internal_f2282c5b3e243065f1c06bc618d3924dc18639bcffc6854319ba6fab2aa30575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2282c5b3e243065f1c06bc618d3924dc18639bcffc6854319ba6fab2aa30575->enter($__internal_f2282c5b3e243065f1c06bc618d3924dc18639bcffc6854319ba6fab2aa30575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_7199c98cd2ed774b99b8fedb93e35820966307b5f481f96e324cb856e776d504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7199c98cd2ed774b99b8fedb93e35820966307b5f481f96e324cb856e776d504->enter($__internal_7199c98cd2ed774b99b8fedb93e35820966307b5f481f96e324cb856e776d504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f2282c5b3e243065f1c06bc618d3924dc18639bcffc6854319ba6fab2aa30575->leave($__internal_f2282c5b3e243065f1c06bc618d3924dc18639bcffc6854319ba6fab2aa30575_prof);

        
        $__internal_7199c98cd2ed774b99b8fedb93e35820966307b5f481f96e324cb856e776d504->leave($__internal_7199c98cd2ed774b99b8fedb93e35820966307b5f481f96e324cb856e776d504_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
