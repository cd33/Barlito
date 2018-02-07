<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ec92df9f1aa4f48bac1ee50fe2413a6ea4e950c6f4ed508b566a9346096a503e extends Twig_Template
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
        $__internal_4a28105b99a410d2632c9699345334babdcc0942cfca68ae1bc80dbb1eeaadcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a28105b99a410d2632c9699345334babdcc0942cfca68ae1bc80dbb1eeaadcb->enter($__internal_4a28105b99a410d2632c9699345334babdcc0942cfca68ae1bc80dbb1eeaadcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_ac8905177b39369881323a9a728589665d3146ad752ac8ce964b4081d5e3064b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8905177b39369881323a9a728589665d3146ad752ac8ce964b4081d5e3064b->enter($__internal_ac8905177b39369881323a9a728589665d3146ad752ac8ce964b4081d5e3064b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_4a28105b99a410d2632c9699345334babdcc0942cfca68ae1bc80dbb1eeaadcb->leave($__internal_4a28105b99a410d2632c9699345334babdcc0942cfca68ae1bc80dbb1eeaadcb_prof);

        
        $__internal_ac8905177b39369881323a9a728589665d3146ad752ac8ce964b4081d5e3064b->leave($__internal_ac8905177b39369881323a9a728589665d3146ad752ac8ce964b4081d5e3064b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
