<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_9d8f37b660173686f7a6a87364231a72c8a104021922e993144401b98d3b0020 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5efd87593e4bae18d7e14add5428a9293c54910ffc4e765cd06f177f5f251dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5efd87593e4bae18d7e14add5428a9293c54910ffc4e765cd06f177f5f251dc->enter($__internal_f5efd87593e4bae18d7e14add5428a9293c54910ffc4e765cd06f177f5f251dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        $__internal_1df80581a7ee0eb11c142833c553136782d91c5d1c17fdaf56acdb3049bef9ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df80581a7ee0eb11c142833c553136782d91c5d1c17fdaf56acdb3049bef9ea->enter($__internal_1df80581a7ee0eb11c142833c553136782d91c5d1c17fdaf56acdb3049bef9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_f5efd87593e4bae18d7e14add5428a9293c54910ffc4e765cd06f177f5f251dc->leave($__internal_f5efd87593e4bae18d7e14add5428a9293c54910ffc4e765cd06f177f5f251dc_prof);

        
        $__internal_1df80581a7ee0eb11c142833c553136782d91c5d1c17fdaf56acdb3049bef9ea->leave($__internal_1df80581a7ee0eb11c142833c553136782d91c5d1c17fdaf56acdb3049bef9ea_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_4db937fa59a8515a78e7a0041faca97b9b6fa2f74584ca1ef9817a680a82463b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db937fa59a8515a78e7a0041faca97b9b6fa2f74584ca1ef9817a680a82463b->enter($__internal_4db937fa59a8515a78e7a0041faca97b9b6fa2f74584ca1ef9817a680a82463b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        $__internal_d0200a5b58aacf240eecd22d36428a84c2c29d137b5c5a1085bbfe4e35e81f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0200a5b58aacf240eecd22d36428a84c2c29d137b5c5a1085bbfe4e35e81f1c->enter($__internal_d0200a5b58aacf240eecd22d36428a84c2c29d137b5c5a1085bbfe4e35e81f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d0200a5b58aacf240eecd22d36428a84c2c29d137b5c5a1085bbfe4e35e81f1c->leave($__internal_d0200a5b58aacf240eecd22d36428a84c2c29d137b5c5a1085bbfe4e35e81f1c_prof);

        
        $__internal_4db937fa59a8515a78e7a0041faca97b9b6fa2f74584ca1ef9817a680a82463b->leave($__internal_4db937fa59a8515a78e7a0041faca97b9b6fa2f74584ca1ef9817a680a82463b_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  51 => 14,  49 => 13,  44 => 12,  26 => 11,);
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
{% block sonata_type_color_selector_widget %}
    {{ block('choice_widget') }}
    {% spaceless %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#{{ id }}').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_color_selector_widget %}
", "SonataCoreBundle:Form:colorpicker.html.twig", "/var/www/html/Barlito/vendor/sonata-project/core-bundle/Resources/views/Form/colorpicker.html.twig");
    }
}
