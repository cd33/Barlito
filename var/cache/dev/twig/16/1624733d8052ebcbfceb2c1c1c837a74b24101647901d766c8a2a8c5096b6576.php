<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_c7f19299638a91415e1c19dcb8d09d39a929ab69c14b41f944e788899b84cb72 extends Twig_Template
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
        $__internal_82c92ca1bab630f5ec8618f33cd971bfcd1db2f5f57b2d62e3000a7a3e99bf15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c92ca1bab630f5ec8618f33cd971bfcd1db2f5f57b2d62e3000a7a3e99bf15->enter($__internal_82c92ca1bab630f5ec8618f33cd971bfcd1db2f5f57b2d62e3000a7a3e99bf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_f8c25e7ad83e0bd65fab8a6d39c74615a396925076981db9f2c123d9a076a337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8c25e7ad83e0bd65fab8a6d39c74615a396925076981db9f2c123d9a076a337->enter($__internal_f8c25e7ad83e0bd65fab8a6d39c74615a396925076981db9f2c123d9a076a337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_82c92ca1bab630f5ec8618f33cd971bfcd1db2f5f57b2d62e3000a7a3e99bf15->leave($__internal_82c92ca1bab630f5ec8618f33cd971bfcd1db2f5f57b2d62e3000a7a3e99bf15_prof);

        
        $__internal_f8c25e7ad83e0bd65fab8a6d39c74615a396925076981db9f2c123d9a076a337->leave($__internal_f8c25e7ad83e0bd65fab8a6d39c74615a396925076981db9f2c123d9a076a337_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
