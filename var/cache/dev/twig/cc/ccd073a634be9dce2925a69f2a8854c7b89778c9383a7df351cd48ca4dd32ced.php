<?php

/* SonataAdminBundle:CRUD/Association:edit_one_to_many_sortable_script_table.html.twig */
class __TwigTemplate_2c296053afe839d9b716e2a3ae19c967d3984b48e51faa06a5cd9d531238e81b extends Twig_Template
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
        $__internal_2c8a4c140af96f642dd233a48dc0be449540bcf72d82237782743e34aec58fd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8a4c140af96f642dd233a48dc0be449540bcf72d82237782743e34aec58fd9->enter($__internal_2c8a4c140af96f642dd233a48dc0be449540bcf72d82237782743e34aec58fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:edit_one_to_many_sortable_script_table.html.twig"));

        $__internal_3f18dcaf41ad0a7d0a3400518b1f02e73f526c6e509a9cc536a7a97a1bfd2aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f18dcaf41ad0a7d0a3400518b1f02e73f526c6e509a9cc536a7a97a1bfd2aee->enter($__internal_3f18dcaf41ad0a7d0a3400518b1f02e73f526c6e509a9cc536a7a97a1bfd2aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD/Association:edit_one_to_many_sortable_script_table.html.twig"));

        // line 11
        echo "<script type=\"text/javascript\">
    jQuery('div#field_container_";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " tbody.sonata-ba-tbody').first().sortable({
        axis: 'y',
        opacity: 0.6,
        items: '> tr',
        stop: apply_position_value_";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "
    });

    function apply_position_value_";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "() {
        // update the input value position
        jQuery('div#field_container_";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "sortable", array()), "html", null, true);
        echo "').each(function(index, element) {
            // remove the sortable handler and put it back
            jQuery('span.sonata-ba-sortable-handler', element).remove();
            jQuery(element).append('<span class=\"sonata-ba-sortable-handler ui-icon ui-icon-grip-solid-horizontal\"></span>');
            jQuery('input', element).hide();
        });

        jQuery('div#field_container_";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " tbody.sonata-ba-tbody td.sonata-ba-td-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "sortable", array()), "html", null, true);
        echo " input').each(function(index, value) {
            jQuery(value).val(index + 1);
        });
    }

    // refresh the sortable option when a new element is added
    jQuery('#sonata-ba-field-container-";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').bind('sonata.add_element', function() {
        apply_position_value_";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "();
        jQuery('div#field_container_";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " tbody.sonata-ba-tbody').sortable('refresh');
    });

    apply_position_value_";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "();
</script>
";
        
        $__internal_2c8a4c140af96f642dd233a48dc0be449540bcf72d82237782743e34aec58fd9->leave($__internal_2c8a4c140af96f642dd233a48dc0be449540bcf72d82237782743e34aec58fd9_prof);

        
        $__internal_3f18dcaf41ad0a7d0a3400518b1f02e73f526c6e509a9cc536a7a97a1bfd2aee->leave($__internal_3f18dcaf41ad0a7d0a3400518b1f02e73f526c6e509a9cc536a7a97a1bfd2aee_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD/Association:edit_one_to_many_sortable_script_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 39,  81 => 36,  77 => 35,  73 => 34,  60 => 28,  46 => 21,  41 => 19,  35 => 16,  28 => 12,  25 => 11,);
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
<script type=\"text/javascript\">
    jQuery('div#field_container_{{ id }} tbody.sonata-ba-tbody').first().sortable({
        axis: 'y',
        opacity: 0.6,
        items: '> tr',
        stop: apply_position_value_{{ id }}
    });

    function apply_position_value_{{ id }}() {
        // update the input value position
        jQuery('div#field_container_{{ id }} tbody.sonata-ba-tbody td.sonata-ba-td-{{ id }}-{{ sonata_admin.field_description.options.sortable }}').each(function(index, element) {
            // remove the sortable handler and put it back
            jQuery('span.sonata-ba-sortable-handler', element).remove();
            jQuery(element).append('<span class=\"sonata-ba-sortable-handler ui-icon ui-icon-grip-solid-horizontal\"></span>');
            jQuery('input', element).hide();
        });

        jQuery('div#field_container_{{ id }} tbody.sonata-ba-tbody td.sonata-ba-td-{{ id }}-{{ sonata_admin.field_description.options.sortable }} input').each(function(index, value) {
            jQuery(value).val(index + 1);
        });
    }

    // refresh the sortable option when a new element is added
    jQuery('#sonata-ba-field-container-{{ id }}').bind('sonata.add_element', function() {
        apply_position_value_{{ id }}();
        jQuery('div#field_container_{{ id }} tbody.sonata-ba-tbody').sortable('refresh');
    });

    apply_position_value_{{ id }}();
</script>
", "SonataAdminBundle:CRUD/Association:edit_one_to_many_sortable_script_table.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/Association/edit_one_to_many_sortable_script_table.html.twig");
    }
}
