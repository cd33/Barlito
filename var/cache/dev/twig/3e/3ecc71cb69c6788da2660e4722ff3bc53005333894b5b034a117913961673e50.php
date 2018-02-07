<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_4707a7668cfe71604b67aa4c35794c1bbcb1451ceece7a82899d2060ed6ccb31 extends Twig_Template
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
        $__internal_c34307b8f15dd23e1d032221c2f2a2a91a2e7b06af2aa0c072ead6c808b9cd8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34307b8f15dd23e1d032221c2f2a2a91a2e7b06af2aa0c072ead6c808b9cd8b->enter($__internal_c34307b8f15dd23e1d032221c2f2a2a91a2e7b06af2aa0c072ead6c808b9cd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_960f332bc50439338a6779e7dc295038833f5b696bad9f62aef8534ca1f2f392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960f332bc50439338a6779e7dc295038833f5b696bad9f62aef8534ca1f2f392->enter($__internal_960f332bc50439338a6779e7dc295038833f5b696bad9f62aef8534ca1f2f392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_c34307b8f15dd23e1d032221c2f2a2a91a2e7b06af2aa0c072ead6c808b9cd8b->leave($__internal_c34307b8f15dd23e1d032221c2f2a2a91a2e7b06af2aa0c072ead6c808b9cd8b_prof);

        
        $__internal_960f332bc50439338a6779e7dc295038833f5b696bad9f62aef8534ca1f2f392->leave($__internal_960f332bc50439338a6779e7dc295038833f5b696bad9f62aef8534ca1f2f392_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
