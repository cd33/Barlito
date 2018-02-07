<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_26595f99400509e131a014779a4716e63d002f096826333537357dfd577f5514 extends Twig_Template
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
        $__internal_f45c93a5032b4a7a82ec8e1c59f3e939adbd9b70191e59c39911e172678c8ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45c93a5032b4a7a82ec8e1c59f3e939adbd9b70191e59c39911e172678c8ead->enter($__internal_f45c93a5032b4a7a82ec8e1c59f3e939adbd9b70191e59c39911e172678c8ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_8bc6093efbfe9671be6bd688c6b1a525d959cd5c866b6bf7615dc0b497cd04b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc6093efbfe9671be6bd688c6b1a525d959cd5c866b6bf7615dc0b497cd04b2->enter($__internal_8bc6093efbfe9671be6bd688c6b1a525d959cd5c866b6bf7615dc0b497cd04b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_f45c93a5032b4a7a82ec8e1c59f3e939adbd9b70191e59c39911e172678c8ead->leave($__internal_f45c93a5032b4a7a82ec8e1c59f3e939adbd9b70191e59c39911e172678c8ead_prof);

        
        $__internal_8bc6093efbfe9671be6bd688c6b1a525d959cd5c866b6bf7615dc0b497cd04b2->leave($__internal_8bc6093efbfe9671be6bd688c6b1a525d959cd5c866b6bf7615dc0b497cd04b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
