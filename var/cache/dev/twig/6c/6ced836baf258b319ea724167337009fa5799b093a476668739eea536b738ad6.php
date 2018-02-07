<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a6c2a1b47f6cc2d59eeac13a9a73d9ceb0e0ca57863f9e69f0ccb8255a0f8d47 extends Twig_Template
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
        $__internal_9c75c64ad5e835cdf45a8a68a9e389370bf9fb861d4c10c54330d6581dc98642 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c75c64ad5e835cdf45a8a68a9e389370bf9fb861d4c10c54330d6581dc98642->enter($__internal_9c75c64ad5e835cdf45a8a68a9e389370bf9fb861d4c10c54330d6581dc98642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_3d07d3409bd0b019ac2cc3fd948c6aa426771a7c90e100345c12824c8661b946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d07d3409bd0b019ac2cc3fd948c6aa426771a7c90e100345c12824c8661b946->enter($__internal_3d07d3409bd0b019ac2cc3fd948c6aa426771a7c90e100345c12824c8661b946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9c75c64ad5e835cdf45a8a68a9e389370bf9fb861d4c10c54330d6581dc98642->leave($__internal_9c75c64ad5e835cdf45a8a68a9e389370bf9fb861d4c10c54330d6581dc98642_prof);

        
        $__internal_3d07d3409bd0b019ac2cc3fd948c6aa426771a7c90e100345c12824c8661b946->leave($__internal_3d07d3409bd0b019ac2cc3fd948c6aa426771a7c90e100345c12824c8661b946_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
