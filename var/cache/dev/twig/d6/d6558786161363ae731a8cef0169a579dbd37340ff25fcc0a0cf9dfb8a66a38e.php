<?php

/* SonataAdminBundle:CRUD:base_acl_macro.html.twig */
class __TwigTemplate_68dd35d97c2e296bea91ec4452d03efeab3d02ff4bd5d612a4c1b7169e94e2ed extends Twig_Template
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
        $__internal_c512ff941c38eca360f67d3763cef55a95ec0f6b1b6c951da4ccea3e6ae7d672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c512ff941c38eca360f67d3763cef55a95ec0f6b1b6c951da4ccea3e6ae7d672->enter($__internal_c512ff941c38eca360f67d3763cef55a95ec0f6b1b6c951da4ccea3e6ae7d672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl_macro.html.twig"));

        $__internal_6569497b482bdacbe95e661b6dd4150490abdf84282b445cf87595f6571401c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6569497b482bdacbe95e661b6dd4150490abdf84282b445cf87595f6571401c3->enter($__internal_6569497b482bdacbe95e661b6dd4150490abdf84282b445cf87595f6571401c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl_macro.html.twig"));

        // line 11
        echo "
";
        
        $__internal_c512ff941c38eca360f67d3763cef55a95ec0f6b1b6c951da4ccea3e6ae7d672->leave($__internal_c512ff941c38eca360f67d3763cef55a95ec0f6b1b6c951da4ccea3e6ae7d672_prof);

        
        $__internal_6569497b482bdacbe95e661b6dd4150490abdf84282b445cf87595f6571401c3->leave($__internal_6569497b482bdacbe95e661b6dd4150490abdf84282b445cf87595f6571401c3_prof);

    }

    // line 12
    public function getrender_form($__form__ = null, $__permissions__ = null, $__td_type__ = null, $__admin__ = null, $__admin_pool__ = null, $__object__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "permissions" => $__permissions__,
            "td_type" => $__td_type__,
            "admin" => $__admin__,
            "admin_pool" => $__admin_pool__,
            "object" => $__object__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4c3afce6c80e9204a5fa2474b5b83fa9c79d6a685e2e2b9990fc47e9531c35b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_4c3afce6c80e9204a5fa2474b5b83fa9c79d6a685e2e2b9990fc47e9531c35b3->enter($__internal_4c3afce6c80e9204a5fa2474b5b83fa9c79d6a685e2e2b9990fc47e9531c35b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_form"));

            $__internal_95e8e6e8c20e602cb7e2e6b27c5e6133fb993d7f71970d98aaeaee225147e087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_95e8e6e8c20e602cb7e2e6b27c5e6133fb993d7f71970d98aaeaee225147e087->enter($__internal_95e8e6e8c20e602cb7e2e6b27c5e6133fb993d7f71970d98aaeaee225147e087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_form"));

            // line 13
            echo "    <form class=\"form-horizontal\"
          action=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "acl", 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\"
          ";
            // line 15
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 16
            echo "          method=\"POST\"
            ";
            // line 17
            if ( !$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 18
            echo "            >

        ";
            // line 20
            echo twig_include($this->env, $context, "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig");
            echo "

        <div class=\"box box-success\">
            <div class=\"body table-responsive no-padding\">
                <table class=\"table\">
                    <colgroup>
                        <col style=\"width: 100%;\"/>
                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 28
                echo "                            <col/>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    </colgroup>

                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                if (($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "name", array()) != "_token")) {
                    // line 33
                    echo "                        ";
                    if ((($this->getAttribute($context["loop"], "index0", array()) == 0) || (($this->getAttribute($context["loop"], "index0", array()) % 10) == 0))) {
                        // line 34
                        echo "                            <tr>
                                <th>";
                        // line 35
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["td_type"]) ? $context["td_type"] : $this->getContext($context, "td_type")), array(), "SonataAdminBundle"), "html", null, true);
                        echo "</th>
                                ";
                        // line 36
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
                        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                            // line 37
                            echo "                                    <th class=\"text-right\">";
                            echo twig_escape_filter($this->env, $context["permission"], "html", null, true);
                            echo "</th>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "                            </tr>
                        ";
                    }
                    // line 41
                    echo "
                        <tr>
                            <td>
                                ";
                    // line 44
                    $context["typeChild"] = (($this->getAttribute($context["child"], "role", array(), "array", true, true)) ? ($this->getAttribute($context["child"], "role", array(), "array")) : ($this->getAttribute($context["child"], "user", array(), "array")));
                    // line 45
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typeChild"]) ? $context["typeChild"] : $this->getContext($context, "typeChild")), "vars", array()), "value", array()), "html", null, true);
                    echo "
                                ";
                    // line 46
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["typeChild"]) ? $context["typeChild"] : $this->getContext($context, "typeChild")), 'widget');
                    echo "
                            </td>
                            ";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
                    foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                        // line 49
                        echo "                                <td class=\"text-right\">";
                        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["child"], $context["permission"], array(), "array"), 'widget', array("label" => false));
                        echo "</td>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                        </tr>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                </table>
            </div>
        </div>

        ";
            // line 57
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
            echo "

        <div class=\"well well-small form-actions\">
            <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        </div>
    </form>
";
            
            $__internal_95e8e6e8c20e602cb7e2e6b27c5e6133fb993d7f71970d98aaeaee225147e087->leave($__internal_95e8e6e8c20e602cb7e2e6b27c5e6133fb993d7f71970d98aaeaee225147e087_prof);

            
            $__internal_4c3afce6c80e9204a5fa2474b5b83fa9c79d6a685e2e2b9990fc47e9531c35b3->leave($__internal_4c3afce6c80e9204a5fa2474b5b83fa9c79d6a685e2e2b9990fc47e9531c35b3_prof);

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
        return "SonataAdminBundle:CRUD:base_acl_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 60,  191 => 57,  185 => 53,  174 => 51,  165 => 49,  161 => 48,  156 => 46,  151 => 45,  149 => 44,  144 => 41,  140 => 39,  131 => 37,  127 => 36,  123 => 35,  120 => 34,  117 => 33,  106 => 32,  102 => 30,  95 => 28,  91 => 27,  81 => 20,  77 => 18,  73 => 17,  70 => 16,  66 => 15,  62 => 14,  59 => 13,  36 => 12,  25 => 11,);
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

{% macro render_form(form, permissions, td_type, admin, admin_pool, object) %}
    <form class=\"form-horizontal\"
          action=\"{{ admin.generateUrl('acl', {'id': admin.id(object), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}\"
          {% if form.vars.multipart %} enctype=\"multipart/form-data\"{% endif %}
          method=\"POST\"
            {% if not admin_pool.getOption('html5_validate') %}novalidate=\"novalidate\"{% endif %}
            >

        {{ include('SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig') }}

        <div class=\"box box-success\">
            <div class=\"body table-responsive no-padding\">
                <table class=\"table\">
                    <colgroup>
                        <col style=\"width: 100%;\"/>
                        {% for permission in permissions %}
                            <col/>
                        {% endfor %}
                    </colgroup>

                    {% for child in form.children if child.vars.name != '_token' %}
                        {% if loop.index0 == 0 or loop.index0 % 10 == 0 %}
                            <tr>
                                <th>{{ td_type|trans({}, 'SonataAdminBundle') }}</th>
                                {% for permission in permissions %}
                                    <th class=\"text-right\">{{ permission }}</th>
                                {% endfor %}
                            </tr>
                        {% endif %}

                        <tr>
                            <td>
                                {% set typeChild = child['role'] is defined ? child['role'] : child['user'] %}
                                {{ typeChild.vars.value }}
                                {{ form_widget(typeChild) }}
                            </td>
                            {% for permission in permissions %}
                                <td class=\"text-right\">{{ form_widget(child[permission], { label: false }) }}</td>
                            {% endfor %}
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>

        {{ form_row(form._token) }}

        <div class=\"well well-small form-actions\">
            <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"{{ 'btn_update_acl'|trans({}, 'SonataAdminBundle') }}\">
        </div>
    </form>
{% endmacro %}
", "SonataAdminBundle:CRUD:base_acl_macro.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_acl_macro.html.twig");
    }
}
