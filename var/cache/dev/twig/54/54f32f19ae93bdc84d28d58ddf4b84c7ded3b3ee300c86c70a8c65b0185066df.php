<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_217c78cd96565e20ab8d2e1a0ca287930083614fcee15f23997f2a61971efe8b extends Twig_Template
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
        $__internal_1d6ac1cc7ac5120a73912d562e5cf0fc9267c08b51bd636891812c2c282f8f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6ac1cc7ac5120a73912d562e5cf0fc9267c08b51bd636891812c2c282f8f7c->enter($__internal_1d6ac1cc7ac5120a73912d562e5cf0fc9267c08b51bd636891812c2c282f8f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_08768232dc98ffa2d85f26601e8759660782d553617384872d95a43c291554df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08768232dc98ffa2d85f26601e8759660782d553617384872d95a43c291554df->enter($__internal_08768232dc98ffa2d85f26601e8759660782d553617384872d95a43c291554df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1d6ac1cc7ac5120a73912d562e5cf0fc9267c08b51bd636891812c2c282f8f7c->leave($__internal_1d6ac1cc7ac5120a73912d562e5cf0fc9267c08b51bd636891812c2c282f8f7c_prof);

        
        $__internal_08768232dc98ffa2d85f26601e8759660782d553617384872d95a43c291554df->leave($__internal_08768232dc98ffa2d85f26601e8759660782d553617384872d95a43c291554df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
