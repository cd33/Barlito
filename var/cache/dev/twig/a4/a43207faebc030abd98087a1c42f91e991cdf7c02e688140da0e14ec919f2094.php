<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d37d2c3a01467db6c699688d152d7d1139ebf9105187e48717b5c62fd79def27 extends Twig_Template
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
        $__internal_d3f3872d4c58abdd87e60bb95010129704d2f2fa4818b5df70563433bdb79ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3f3872d4c58abdd87e60bb95010129704d2f2fa4818b5df70563433bdb79ea6->enter($__internal_d3f3872d4c58abdd87e60bb95010129704d2f2fa4818b5df70563433bdb79ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_1353d26aa6412189487fe97e6b3f80f4622b35a1669b579aee8f62d0cdfad9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1353d26aa6412189487fe97e6b3f80f4622b35a1669b579aee8f62d0cdfad9a1->enter($__internal_1353d26aa6412189487fe97e6b3f80f4622b35a1669b579aee8f62d0cdfad9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d3f3872d4c58abdd87e60bb95010129704d2f2fa4818b5df70563433bdb79ea6->leave($__internal_d3f3872d4c58abdd87e60bb95010129704d2f2fa4818b5df70563433bdb79ea6_prof);

        
        $__internal_1353d26aa6412189487fe97e6b3f80f4622b35a1669b579aee8f62d0cdfad9a1->leave($__internal_1353d26aa6412189487fe97e6b3f80f4622b35a1669b579aee8f62d0cdfad9a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
