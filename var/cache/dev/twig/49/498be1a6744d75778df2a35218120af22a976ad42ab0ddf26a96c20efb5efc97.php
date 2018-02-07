<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0b4cce6106faf05d12a765607805d8a216a9c9604a0e1de5275d4fe8bd9ca234 extends Twig_Template
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
        $__internal_527e639c6855a5b2e7f5318e1c57c6e5a83d7803eb4dfd04b9bacf762b25c392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527e639c6855a5b2e7f5318e1c57c6e5a83d7803eb4dfd04b9bacf762b25c392->enter($__internal_527e639c6855a5b2e7f5318e1c57c6e5a83d7803eb4dfd04b9bacf762b25c392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a6a29a2728c05a754888bebb554d834a776d8ff93e3be65df3fb78703eb8d60b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a29a2728c05a754888bebb554d834a776d8ff93e3be65df3fb78703eb8d60b->enter($__internal_a6a29a2728c05a754888bebb554d834a776d8ff93e3be65df3fb78703eb8d60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_527e639c6855a5b2e7f5318e1c57c6e5a83d7803eb4dfd04b9bacf762b25c392->leave($__internal_527e639c6855a5b2e7f5318e1c57c6e5a83d7803eb4dfd04b9bacf762b25c392_prof);

        
        $__internal_a6a29a2728c05a754888bebb554d834a776d8ff93e3be65df3fb78703eb8d60b->leave($__internal_a6a29a2728c05a754888bebb554d834a776d8ff93e3be65df3fb78703eb8d60b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
