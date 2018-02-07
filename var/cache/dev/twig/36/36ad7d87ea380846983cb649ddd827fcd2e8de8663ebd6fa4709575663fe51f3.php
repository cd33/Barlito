<?php

/* SonataAdminBundle:CRUD:base_show_macro.html.twig */
class __TwigTemplate_7ec635c92c023f21f0d001ffadfad37be67f02ac9fedc260d358745145856fe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d67e923bb3914d2acca5a17a5ac1cebd2925342bf7b4bfe5b5083d7f0ac775a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d67e923bb3914d2acca5a17a5ac1cebd2925342bf7b4bfe5b5083d7f0ac775a->enter($__internal_5d67e923bb3914d2acca5a17a5ac1cebd2925342bf7b4bfe5b5083d7f0ac775a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        $__internal_8fe9d766f742a6496f4ed455142c7268a1463e89b2c182ad0ae46004d528291a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fe9d766f742a6496f4ed455142c7268a1463e89b2c182ad0ae46004d528291a->enter($__internal_8fe9d766f742a6496f4ed455142c7268a1463e89b2c182ad0ae46004d528291a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        // line 2
        echo "
";
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_row', $context, $blocks);
        
        $__internal_5d67e923bb3914d2acca5a17a5ac1cebd2925342bf7b4bfe5b5083d7f0ac775a->leave($__internal_5d67e923bb3914d2acca5a17a5ac1cebd2925342bf7b4bfe5b5083d7f0ac775a_prof);

        
        $__internal_8fe9d766f742a6496f4ed455142c7268a1463e89b2c182ad0ae46004d528291a->leave($__internal_8fe9d766f742a6496f4ed455142c7268a1463e89b2c182ad0ae46004d528291a_prof);

    }

    public function block_field_row($context, array $blocks = array())
    {
        $__internal_6cc4518cbc5a6672c429724b80b536d92230a3f97fe2a7649068cf587c100c46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc4518cbc5a6672c429724b80b536d92230a3f97fe2a7649068cf587c100c46->enter($__internal_6cc4518cbc5a6672c429724b80b536d92230a3f97fe2a7649068cf587c100c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_f433d9283497ca006a58b3252de49723bd5a125aa53ba3423815a28545c66f88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f433d9283497ca006a58b3252de49723bd5a125aa53ba3423815a28545c66f88->enter($__internal_f433d9283497ca006a58b3252de49723bd5a125aa53ba3423815a28545c66f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 10
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 11
            echo "        ";
            $context["show_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 12
            echo "
        <div class=\"";
            // line 13
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo (((isset($context["no_padding"]) ? $context["no_padding"] : $this->getContext($context, "no_padding"))) ? ("nopadding") : (""));
            echo "\">
            <div class=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
            // line 17
            $this->displayBlock('show_title', $context, $blocks);
            // line 20
            echo "                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 26
                echo "                            ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 33
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f433d9283497ca006a58b3252de49723bd5a125aa53ba3423815a28545c66f88->leave($__internal_f433d9283497ca006a58b3252de49723bd5a125aa53ba3423815a28545c66f88_prof);

        
        $__internal_6cc4518cbc5a6672c429724b80b536d92230a3f97fe2a7649068cf587c100c46->leave($__internal_6cc4518cbc5a6672c429724b80b536d92230a3f97fe2a7649068cf587c100c46_prof);

    }

    // line 17
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_faa4746d2a9015eecac98a53318bc77cd049c7f637e346f25dbceb486fdfa09d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faa4746d2a9015eecac98a53318bc77cd049c7f637e346f25dbceb486fdfa09d->enter($__internal_faa4746d2a9015eecac98a53318bc77cd049c7f637e346f25dbceb486fdfa09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_c3bc792a0f10aa0ad9338602ba3285e4c40eb9db100e9e005673fc4bc56d09db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3bc792a0f10aa0ad9338602ba3285e4c40eb9db100e9e005673fc4bc56d09db->enter($__internal_c3bc792a0f10aa0ad9338602ba3285e4c40eb9db100e9e005673fc4bc56d09db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 18
        echo "                            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "label", array()), array(), (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "translation_domain", array())) ? ($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                        ";
        
        $__internal_c3bc792a0f10aa0ad9338602ba3285e4c40eb9db100e9e005673fc4bc56d09db->leave($__internal_c3bc792a0f10aa0ad9338602ba3285e4c40eb9db100e9e005673fc4bc56d09db_prof);

        
        $__internal_faa4746d2a9015eecac98a53318bc77cd049c7f637e346f25dbceb486fdfa09d->leave($__internal_faa4746d2a9015eecac98a53318bc77cd049c7f637e346f25dbceb486fdfa09d_prof);

    }

    // line 26
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_984820a1a4dae146929b5bf3ffd7bd00a8ce5fae1c71a14398aa8a24912dcbae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984820a1a4dae146929b5bf3ffd7bd00a8ce5fae1c71a14398aa8a24912dcbae->enter($__internal_984820a1a4dae146929b5bf3ffd7bd00a8ce5fae1c71a14398aa8a24912dcbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_45c97a74eee5f7bcd3430ac2bcba18125ec15cf32abc87966906cd72ae0b05d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c97a74eee5f7bcd3430ac2bcba18125ec15cf32abc87966906cd72ae0b05d3->enter($__internal_45c97a74eee5f7bcd3430ac2bcba18125ec15cf32abc87966906cd72ae0b05d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 27
        echo "                                <tr class=\"sonata-ba-view-container\">
                                    ";
        // line 28
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 29
            echo "                                        ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                    ";
        }
        // line 31
        echo "                                </tr>
                            ";
        
        $__internal_45c97a74eee5f7bcd3430ac2bcba18125ec15cf32abc87966906cd72ae0b05d3->leave($__internal_45c97a74eee5f7bcd3430ac2bcba18125ec15cf32abc87966906cd72ae0b05d3_prof);

        
        $__internal_984820a1a4dae146929b5bf3ffd7bd00a8ce5fae1c71a14398aa8a24912dcbae->leave($__internal_984820a1a4dae146929b5bf3ffd7bd00a8ce5fae1c71a14398aa8a24912dcbae_prof);

    }

    // line 3
    public function getrender_groups($__admin__ = null, $__object__ = null, $__elements__ = null, $__groups__ = null, $__has_tab__ = null, $__no_padding__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "object" => $__object__,
            "elements" => $__elements__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "no_padding" => $__no_padding__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_03fdd271b078ab2c6c7b672a5b70c55acdc714f0188b58e5385e494725baa6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_03fdd271b078ab2c6c7b672a5b70c55acdc714f0188b58e5385e494725baa6c7->enter($__internal_03fdd271b078ab2c6c7b672a5b70c55acdc714f0188b58e5385e494725baa6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            $__internal_aaf6cbc73da47d6aec28e4beb74b76b65cbb1535d44e4227130a2ca9c7b62a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_aaf6cbc73da47d6aec28e4beb74b76b65cbb1535d44e4227130a2ca9c7b62a9b->enter($__internal_aaf6cbc73da47d6aec28e4beb74b76b65cbb1535d44e4227130a2ca9c7b62a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 4
            echo "    <div class=\"row\">
        ";
            // line 5
            $this->displayBlock("field_row", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_aaf6cbc73da47d6aec28e4beb74b76b65cbb1535d44e4227130a2ca9c7b62a9b->leave($__internal_aaf6cbc73da47d6aec28e4beb74b76b65cbb1535d44e4227130a2ca9c7b62a9b_prof);

            
            $__internal_03fdd271b078ab2c6c7b672a5b70c55acdc714f0188b58e5385e494725baa6c7->leave($__internal_03fdd271b078ab2c6c7b672a5b70c55acdc714f0188b58e5385e494725baa6c7_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 5,  234 => 4,  211 => 3,  200 => 31,  194 => 29,  192 => 28,  189 => 27,  180 => 26,  167 => 18,  158 => 17,  131 => 34,  117 => 33,  114 => 26,  97 => 25,  90 => 20,  88 => 17,  82 => 14,  76 => 13,  73 => 12,  70 => 11,  52 => 10,  34 => 9,  31 => 8,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# NEXT_MAJOR: remove this template #}

{% macro render_groups(admin, object, elements, groups, has_tab, no_padding = false) %}
    <div class=\"row\">
        {{ block('field_row') }}
    </div>
{% endmacro %}

{% block field_row %}
    {% for code in groups %}
        {% set show_group = admin.showgroups[code] %}

        <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding ? 'nopadding' }}\">
            <div class=\"{{ show_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {% block show_title %}
                            {{ show_group.label|trans({}, show_group.translation_domain ?: admin.translationDomain) }}
                        {% endblock %}
                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        {% for field_name in show_group.fields %}
                            {% block show_field %}
                                <tr class=\"sonata-ba-view-container\">
                                    {% if elements[field_name] is defined %}
                                        {{ elements[field_name]|render_view_element(object)}}
                                    {% endif %}
                                </tr>
                            {% endblock %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_macro.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_macro.html.twig");
    }
}
