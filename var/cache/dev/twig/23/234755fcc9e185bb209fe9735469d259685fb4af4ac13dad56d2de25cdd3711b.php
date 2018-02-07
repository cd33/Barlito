<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_544fadf0665c3e59fb614b1d1f40b8670e4010af2103850fa0bcbf9a1f194edd extends Twig_Template
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
        $__internal_62665617c3cd054be6f85b536739ea3e7ea9dc052afc1753bca38b28e5828454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62665617c3cd054be6f85b536739ea3e7ea9dc052afc1753bca38b28e5828454->enter($__internal_62665617c3cd054be6f85b536739ea3e7ea9dc052afc1753bca38b28e5828454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_0a8457cbf9d6eb898c60bc947831746c145a30fddfb74a404ba00676e55da379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8457cbf9d6eb898c60bc947831746c145a30fddfb74a404ba00676e55da379->enter($__internal_0a8457cbf9d6eb898c60bc947831746c145a30fddfb74a404ba00676e55da379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_62665617c3cd054be6f85b536739ea3e7ea9dc052afc1753bca38b28e5828454->leave($__internal_62665617c3cd054be6f85b536739ea3e7ea9dc052afc1753bca38b28e5828454_prof);

        
        $__internal_0a8457cbf9d6eb898c60bc947831746c145a30fddfb74a404ba00676e55da379->leave($__internal_0a8457cbf9d6eb898c60bc947831746c145a30fddfb74a404ba00676e55da379_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
