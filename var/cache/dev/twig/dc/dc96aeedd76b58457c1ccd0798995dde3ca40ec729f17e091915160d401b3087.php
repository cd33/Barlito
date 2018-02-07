<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4f8c2bd3a59e88d5f3e6daab04676c0d052ccf9d5fb1966fba51e95bad631912 extends Twig_Template
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
        $__internal_bd647f5bfe462f59dc21779b4cc4314a474388dd68ba929ae9a42d31ef44142a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd647f5bfe462f59dc21779b4cc4314a474388dd68ba929ae9a42d31ef44142a->enter($__internal_bd647f5bfe462f59dc21779b4cc4314a474388dd68ba929ae9a42d31ef44142a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c7da783452ae37ba8276e97706a01c068e6bb8d86139aaadefbf42d64fef5b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7da783452ae37ba8276e97706a01c068e6bb8d86139aaadefbf42d64fef5b0e->enter($__internal_c7da783452ae37ba8276e97706a01c068e6bb8d86139aaadefbf42d64fef5b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_bd647f5bfe462f59dc21779b4cc4314a474388dd68ba929ae9a42d31ef44142a->leave($__internal_bd647f5bfe462f59dc21779b4cc4314a474388dd68ba929ae9a42d31ef44142a_prof);

        
        $__internal_c7da783452ae37ba8276e97706a01c068e6bb8d86139aaadefbf42d64fef5b0e->leave($__internal_c7da783452ae37ba8276e97706a01c068e6bb8d86139aaadefbf42d64fef5b0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
