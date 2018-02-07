<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_9c3858ea4035fcf8117412be2da7d59892cdbc2e18fcdd3016a6a6e568e2594c extends Twig_Template
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
        $__internal_dc0387521f4844224791a13c415ae2332af5cb9243f4bd8b89290d3237d19e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0387521f4844224791a13c415ae2332af5cb9243f4bd8b89290d3237d19e3c->enter($__internal_dc0387521f4844224791a13c415ae2332af5cb9243f4bd8b89290d3237d19e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_4d1d9126c648d3c5b62108681209b605e9d60ece55f89c5231db83e921cc68e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1d9126c648d3c5b62108681209b605e9d60ece55f89c5231db83e921cc68e8->enter($__internal_4d1d9126c648d3c5b62108681209b605e9d60ece55f89c5231db83e921cc68e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_dc0387521f4844224791a13c415ae2332af5cb9243f4bd8b89290d3237d19e3c->leave($__internal_dc0387521f4844224791a13c415ae2332af5cb9243f4bd8b89290d3237d19e3c_prof);

        
        $__internal_4d1d9126c648d3c5b62108681209b605e9d60ece55f89c5231db83e921cc68e8->leave($__internal_4d1d9126c648d3c5b62108681209b605e9d60ece55f89c5231db83e921cc68e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
