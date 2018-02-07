<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_25c6eb20aac2bfb0eff5d20153eef03d9e415e3b527fbe0d19243a811b506224 extends Twig_Template
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
        $__internal_1d6b2a67b4f957ba422c3b9e6686c31c7d5faad100998ea9f18b52d108f3cb53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6b2a67b4f957ba422c3b9e6686c31c7d5faad100998ea9f18b52d108f3cb53->enter($__internal_1d6b2a67b4f957ba422c3b9e6686c31c7d5faad100998ea9f18b52d108f3cb53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_054cd0500d971f8c77ef4d8fac29bffea464a4b1934ca2efa4dbbcb1d58fe99b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054cd0500d971f8c77ef4d8fac29bffea464a4b1934ca2efa4dbbcb1d58fe99b->enter($__internal_054cd0500d971f8c77ef4d8fac29bffea464a4b1934ca2efa4dbbcb1d58fe99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_1d6b2a67b4f957ba422c3b9e6686c31c7d5faad100998ea9f18b52d108f3cb53->leave($__internal_1d6b2a67b4f957ba422c3b9e6686c31c7d5faad100998ea9f18b52d108f3cb53_prof);

        
        $__internal_054cd0500d971f8c77ef4d8fac29bffea464a4b1934ca2efa4dbbcb1d58fe99b->leave($__internal_054cd0500d971f8c77ef4d8fac29bffea464a4b1934ca2efa4dbbcb1d58fe99b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
