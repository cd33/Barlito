<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2565deb6014ba34aa69730b09c75d533d6e219df96a4893b8ac7c09a96c8d785 extends Twig_Template
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
        $__internal_2946c81bc240544196cbe4ac752fabb5cb7f351db9348d40b2e3ed9b89297df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2946c81bc240544196cbe4ac752fabb5cb7f351db9348d40b2e3ed9b89297df4->enter($__internal_2946c81bc240544196cbe4ac752fabb5cb7f351db9348d40b2e3ed9b89297df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b0a310c543170c8da5eec2f461800313c468ceb8be83541e1e17c0cb33d6d757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a310c543170c8da5eec2f461800313c468ceb8be83541e1e17c0cb33d6d757->enter($__internal_b0a310c543170c8da5eec2f461800313c468ceb8be83541e1e17c0cb33d6d757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2946c81bc240544196cbe4ac752fabb5cb7f351db9348d40b2e3ed9b89297df4->leave($__internal_2946c81bc240544196cbe4ac752fabb5cb7f351db9348d40b2e3ed9b89297df4_prof);

        
        $__internal_b0a310c543170c8da5eec2f461800313c468ceb8be83541e1e17c0cb33d6d757->leave($__internal_b0a310c543170c8da5eec2f461800313c468ceb8be83541e1e17c0cb33d6d757_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
