<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_bd9845c9dc16c456107e789fd190c912ec3860b5dd60800ea8adf332285a5743 extends Twig_Template
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
        $__internal_eec3e5565a20efe56fec55d07dfee463c699c8d3dba4cad9747da0b5d1abd6c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec3e5565a20efe56fec55d07dfee463c699c8d3dba4cad9747da0b5d1abd6c8->enter($__internal_eec3e5565a20efe56fec55d07dfee463c699c8d3dba4cad9747da0b5d1abd6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_4398624dbf10f816486d878b034eca88deb881cf8d8bb3d68933a9230a3feea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4398624dbf10f816486d878b034eca88deb881cf8d8bb3d68933a9230a3feea6->enter($__internal_4398624dbf10f816486d878b034eca88deb881cf8d8bb3d68933a9230a3feea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_eec3e5565a20efe56fec55d07dfee463c699c8d3dba4cad9747da0b5d1abd6c8->leave($__internal_eec3e5565a20efe56fec55d07dfee463c699c8d3dba4cad9747da0b5d1abd6c8_prof);

        
        $__internal_4398624dbf10f816486d878b034eca88deb881cf8d8bb3d68933a9230a3feea6->leave($__internal_4398624dbf10f816486d878b034eca88deb881cf8d8bb3d68933a9230a3feea6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
