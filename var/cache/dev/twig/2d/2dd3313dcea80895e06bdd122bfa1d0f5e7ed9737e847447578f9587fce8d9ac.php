<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a7866c949fa37190d015e7e96a0ca52beb18934e720399bea48779025855a8b4 extends Twig_Template
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
        $__internal_2fde10eeea184f05c18e71dad425024e7262270421c2fb2e6867bf0fec50eed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fde10eeea184f05c18e71dad425024e7262270421c2fb2e6867bf0fec50eed0->enter($__internal_2fde10eeea184f05c18e71dad425024e7262270421c2fb2e6867bf0fec50eed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_34f8dcf09f563db2b377a03957bb4c5e33d58ca0478ae2012ef7ed3bacce012b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f8dcf09f563db2b377a03957bb4c5e33d58ca0478ae2012ef7ed3bacce012b->enter($__internal_34f8dcf09f563db2b377a03957bb4c5e33d58ca0478ae2012ef7ed3bacce012b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2fde10eeea184f05c18e71dad425024e7262270421c2fb2e6867bf0fec50eed0->leave($__internal_2fde10eeea184f05c18e71dad425024e7262270421c2fb2e6867bf0fec50eed0_prof);

        
        $__internal_34f8dcf09f563db2b377a03957bb4c5e33d58ca0478ae2012ef7ed3bacce012b->leave($__internal_34f8dcf09f563db2b377a03957bb4c5e33d58ca0478ae2012ef7ed3bacce012b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
