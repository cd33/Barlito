<?php

/* SonataAdminBundle:CRUD:base_array_macro.html.twig */
class __TwigTemplate_24a096599cee79bf20210bc2951052d48dbbf9c52c304711765e70650b269b62 extends Twig_Template
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
        $__internal_5dae09293940d6047278d0007be312eba26c7f7fd01920b631126dcf5df42c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dae09293940d6047278d0007be312eba26c7f7fd01920b631126dcf5df42c05->enter($__internal_5dae09293940d6047278d0007be312eba26c7f7fd01920b631126dcf5df42c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_array_macro.html.twig"));

        $__internal_3de2954b28e2519b713f1b28c49c1ec6ae55c616da079452874635f893d57a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de2954b28e2519b713f1b28c49c1ec6ae55c616da079452874635f893d57a0f->enter($__internal_3de2954b28e2519b713f1b28c49c1ec6ae55c616da079452874635f893d57a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_array_macro.html.twig"));

        
        $__internal_5dae09293940d6047278d0007be312eba26c7f7fd01920b631126dcf5df42c05->leave($__internal_5dae09293940d6047278d0007be312eba26c7f7fd01920b631126dcf5df42c05_prof);

        
        $__internal_3de2954b28e2519b713f1b28c49c1ec6ae55c616da079452874635f893d57a0f->leave($__internal_3de2954b28e2519b713f1b28c49c1ec6ae55c616da079452874635f893d57a0f_prof);

    }

    // line 11
    public function getrender_array($__value__ = null, $__inline__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "inline" => $__inline__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c96dd47072c1dfc5772732dc336f26a72b78291d96050b013a546c316e83557b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c96dd47072c1dfc5772732dc336f26a72b78291d96050b013a546c316e83557b->enter($__internal_c96dd47072c1dfc5772732dc336f26a72b78291d96050b013a546c316e83557b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_6c98df8cd4c7fbad6ef1ca0e25d75ba41f4b61d3edcc1c6d06364baa3cb6069e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6c98df8cd4c7fbad6ef1ca0e25d75ba41f4b61d3edcc1c6d06364baa3cb6069e->enter($__internal_6c98df8cd4c7fbad6ef1ca0e25d75ba41f4b61d3edcc1c6d06364baa3cb6069e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
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
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 13
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 14
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $this->getAttribute($this, "render_array", array(0 => $context["val"], 1 => (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline"))), "method");
                    echo "]
        ";
                } else {
                    // line 16
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 18
                echo "
        ";
                // line 19
                if (( !$this->getAttribute($context["loop"], "last", array()) &&  !(isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
                    // line 20
                    echo "            <br>
        ";
                }
                // line 22
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6c98df8cd4c7fbad6ef1ca0e25d75ba41f4b61d3edcc1c6d06364baa3cb6069e->leave($__internal_6c98df8cd4c7fbad6ef1ca0e25d75ba41f4b61d3edcc1c6d06364baa3cb6069e_prof);

            
            $__internal_c96dd47072c1dfc5772732dc336f26a72b78291d96050b013a546c316e83557b->leave($__internal_c96dd47072c1dfc5772732dc336f26a72b78291d96050b013a546c316e83557b_prof);

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
        return "SonataAdminBundle:CRUD:base_array_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 22,  94 => 20,  92 => 19,  89 => 18,  81 => 16,  73 => 14,  70 => 13,  52 => 12,  33 => 11,);
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
{% macro render_array(value, inline) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ _self.render_array(val, inline) }}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}

        {% if not loop.last and not inline %}
            <br>
        {% endif %}
    {% endfor %}
{% endmacro %}
", "SonataAdminBundle:CRUD:base_array_macro.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_array_macro.html.twig");
    }
}
