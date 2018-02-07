<?php

/* SonataAdminBundle:CRUD/Association:edit_modal.html.twig */
class __TwigTemplate_f8146e49cd7048e17b640e59c194f63cda1a1e4cc49a3dbc7018fbd33fce0dac extends Twig_Template
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
        $__internal_e1efd037a8e50b1eeff4f3f6c7d0a408495c84933344f1477470e28774c31327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1efd037a8e50b1eeff4f3f6c7d0a408495c84933344f1477470e28774c31327->enter($__internal_e1efd037a8e50b1eeff4f3f6c7d0a408495c84933344f1477470e28774c31327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:edit_modal.html.twig"));

        $__internal_acab6bba2976f0c51eb381954c0126d4e2a66ddc52a2f83045b1fe25a26777c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acab6bba2976f0c51eb381954c0126d4e2a66ddc52a2f83045b1fe25a26777c6->enter($__internal_acab6bba2976f0c51eb381954c0126d4e2a66ddc52a2f83045b1fe25a26777c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:edit_modal.html.twig"));

        // line 11
        echo "
<div class=\"modal fade\" id=\"field_dialog_";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_e1efd037a8e50b1eeff4f3f6c7d0a408495c84933344f1477470e28774c31327->leave($__internal_e1efd037a8e50b1eeff4f3f6c7d0a408495c84933344f1477470e28774c31327_prof);

        
        $__internal_acab6bba2976f0c51eb381954c0126d4e2a66ddc52a2f83045b1fe25a26777c6->leave($__internal_acab6bba2976f0c51eb381954c0126d4e2a66ddc52a2f83045b1fe25a26777c6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:edit_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

<div class=\"modal fade\" id=\"field_dialog_{{ id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
", "SonataAdminBundle:CRUD/Association:edit_modal.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/Association/edit_modal.html.twig");
    }
}
