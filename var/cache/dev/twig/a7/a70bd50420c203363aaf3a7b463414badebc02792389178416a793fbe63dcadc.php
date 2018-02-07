<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_6d10b5db70a1b2c2d5337b2f7769a2f467f3bd58106d734e0ff232958d0faef3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_value' => array($this, 'block_field_value'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2368c6dea1c475ac832eaef7bba588f2ec66cd63d110533efd5511b2d1246648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2368c6dea1c475ac832eaef7bba588f2ec66cd63d110533efd5511b2d1246648->enter($__internal_2368c6dea1c475ac832eaef7bba588f2ec66cd63d110533efd5511b2d1246648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        $__internal_79c2df00f8bb00e1b0d7ab230cbb24f451bb69ea57e4c1b8608bb1e6d532eec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c2df00f8bb00e1b0d7ab230cbb24f451bb69ea57e4c1b8608bb1e6d532eec4->enter($__internal_79c2df00f8bb00e1b0d7ab230cbb24f451bb69ea57e4c1b8608bb1e6d532eec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 31
        echo "</td>

";
        // line 33
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_2368c6dea1c475ac832eaef7bba588f2ec66cd63d110533efd5511b2d1246648->leave($__internal_2368c6dea1c475ac832eaef7bba588f2ec66cd63d110533efd5511b2d1246648_prof);

        
        $__internal_79c2df00f8bb00e1b0d7ab230cbb24f451bb69ea57e4c1b8608bb1e6d532eec4->leave($__internal_79c2df00f8bb00e1b0d7ab230cbb24f451bb69ea57e4c1b8608bb1e6d532eec4_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_57b96c4e380d331efe0f79bfc058b1f5e027f5a0afa1618c363e65704d4dd663 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b96c4e380d331efe0f79bfc058b1f5e027f5a0afa1618c363e65704d4dd663->enter($__internal_57b96c4e380d331efe0f79bfc058b1f5e027f5a0afa1618c363e65704d4dd663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        $__internal_db32dac00a6041ef7b5d63690125057b90161390adce33a96bb67bc39730673c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db32dac00a6041ef7b5d63690125057b90161390adce33a96bb67bc39730673c->enter($__internal_db32dac00a6041ef7b5d63690125057b90161390adce33a96bb67bc39730673c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_db32dac00a6041ef7b5d63690125057b90161390adce33a96bb67bc39730673c->leave($__internal_db32dac00a6041ef7b5d63690125057b90161390adce33a96bb67bc39730673c_prof);

        
        $__internal_57b96c4e380d331efe0f79bfc058b1f5e027f5a0afa1618c363e65704d4dd663->leave($__internal_57b96c4e380d331efe0f79bfc058b1f5e027f5a0afa1618c363e65704d4dd663_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_de62e2e0ac682259ab80a00a5a0d87b718bd7117dc5e84defdc137da94eb18e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de62e2e0ac682259ab80a00a5a0d87b718bd7117dc5e84defdc137da94eb18e3->enter($__internal_de62e2e0ac682259ab80a00a5a0d87b718bd7117dc5e84defdc137da94eb18e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a6c60a98f17225ba08743c0a12a10dbc719812d2eddff9d53daec02522a306e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c60a98f17225ba08743c0a12a10dbc719812d2eddff9d53daec02522a306e3->enter($__internal_a6c60a98f17225ba08743c0a12a10dbc719812d2eddff9d53daec02522a306e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "            ";
        $context["collapse"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "collapse", array()), false)) : (false));
        // line 17
        echo "            ";
        if ((isset($context["collapse"]) ? $context["collapse"] : $this->getContext($context, "collapse"))) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                    ";
            // line 22
            $this->displayBlock('field_value', $context, $blocks);
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                ";
            $this->displayBlock("field_value", $context, $blocks);
            echo "
            ";
        }
        // line 29
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a6c60a98f17225ba08743c0a12a10dbc719812d2eddff9d53daec02522a306e3->leave($__internal_a6c60a98f17225ba08743c0a12a10dbc719812d2eddff9d53daec02522a306e3_prof);

        
        $__internal_de62e2e0ac682259ab80a00a5a0d87b718bd7117dc5e84defdc137da94eb18e3->leave($__internal_de62e2e0ac682259ab80a00a5a0d87b718bd7117dc5e84defdc137da94eb18e3_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_cb2ab267892a80520ab86ee3d30932e7f087f395a4681cda53ec425bb0db9113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2ab267892a80520ab86ee3d30932e7f087f395a4681cda53ec425bb0db9113->enter($__internal_cb2ab267892a80520ab86ee3d30932e7f087f395a4681cda53ec425bb0db9113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        $__internal_89396f42fbb7069926100d047837de9685368a06175db8e6d0892e9747f087a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89396f42fbb7069926100d047837de9685368a06175db8e6d0892e9747f087a9->enter($__internal_89396f42fbb7069926100d047837de9685368a06175db8e6d0892e9747f087a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_89396f42fbb7069926100d047837de9685368a06175db8e6d0892e9747f087a9->leave($__internal_89396f42fbb7069926100d047837de9685368a06175db8e6d0892e9747f087a9_prof);

        
        $__internal_cb2ab267892a80520ab86ee3d30932e7f087f395a4681cda53ec425bb0db9113->leave($__internal_cb2ab267892a80520ab86ee3d30932e7f087f395a4681cda53ec425bb0db9113_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_1272a10c78b913cbea48a76078322dff9a464efa48fb7e9ba111f6324391e32a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1272a10c78b913cbea48a76078322dff9a464efa48fb7e9ba111f6324391e32a->enter($__internal_1272a10c78b913cbea48a76078322dff9a464efa48fb7e9ba111f6324391e32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        $__internal_d4229f5e3878e0d6d2b13b2c1b298001efa6d37e82d7143e4c70c5065ef150dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4229f5e3878e0d6d2b13b2c1b298001efa6d37e82d7143e4c70c5065ef150dd->enter($__internal_d4229f5e3878e0d6d2b13b2c1b298001efa6d37e82d7143e4c70c5065ef150dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 34
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_d4229f5e3878e0d6d2b13b2c1b298001efa6d37e82d7143e4c70c5065ef150dd->leave($__internal_d4229f5e3878e0d6d2b13b2c1b298001efa6d37e82d7143e4c70c5065ef150dd_prof);

        
        $__internal_1272a10c78b913cbea48a76078322dff9a464efa48fb7e9ba111f6324391e32a->leave($__internal_1272a10c78b913cbea48a76078322dff9a464efa48fb7e9ba111f6324391e32a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 37,  170 => 36,  167 => 35,  164 => 34,  155 => 33,  145 => 24,  138 => 23,  129 => 22,  118 => 29,  112 => 27,  108 => 25,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  83 => 15,  74 => 14,  56 => 12,  46 => 33,  42 => 31,  40 => 14,  32 => 12,  29 => 11,);
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

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>
    {%- block field -%}
        {% spaceless %}
            {% set collapse = field_description.options.collapse|default(false) %}
            {% if collapse %}
                <div class=\"sonata-readmore\"
                      data-readmore-height=\"{{ collapse.height|default(40) }}\"
                      data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                      data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">
                    {% block field_value %}
                        {% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}
                    {% endblock %}
                </div>
            {% else %}
                {{ block('field_value') }}
            {% endif %}
        {% endspaceless %}
    {%- endblock -%}
</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_field.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_field.html.twig");
    }
}
