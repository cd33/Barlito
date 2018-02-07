<?php

/* SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig */
class __TwigTemplate_5a18ecef2ff18cd94e5c42a0ac093f066e4e9224cc636bd4610630d848c98b34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_mosaic_background' => array($this, 'block_sonata_mosaic_background'),
            'sonata_mosaic_default_view' => array($this, 'block_sonata_mosaic_default_view'),
            'sonata_mosaic_hover_view' => array($this, 'block_sonata_mosaic_hover_view'),
            'sonata_mosaic_description' => array($this, 'block_sonata_mosaic_description'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b9db0fcab4b3b6e6129ce08b55ab6d6f0503c5b5a3dad18341e7f578edee32e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9db0fcab4b3b6e6129ce08b55ab6d6f0503c5b5a3dad18341e7f578edee32e->enter($__internal_5b9db0fcab4b3b6e6129ce08b55ab6d6f0503c5b5a3dad18341e7f578edee32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig"));

        $__internal_6a2df49e9bbaa0f87f34cc980ad81c3bcfc7c0263eb55d8caa6bbd9dc1c141d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2df49e9bbaa0f87f34cc980ad81c3bcfc7c0263eb55d8caa6bbd9dc1c141d4->enter($__internal_6a2df49e9bbaa0f87f34cc980ad81c3bcfc7c0263eb55d8caa6bbd9dc1c141d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig"));

        // line 11
        echo "
<!--
This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    <td colspan=\"";
        // line 20
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "_action"), "method") + $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "has", array(0 => "batch"), "method"))) : (0))), "html", null, true);
        echo "\">
        <div class=\"row\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 23
            echo "                ";
            $context["meta"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getObjectMetadata", array(0 => $context["object"]), "method");
            // line 24
            echo "
                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\" objectId=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => $context["object"]), "method"), "html", null, true);
            echo "\">

                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            ";
            // line 32
            echo "
                            <div class=\"mosaic-inner-box-default\">
                                ";
            // line 34
            $this->displayBlock('sonata_mosaic_background', $context, $blocks);
            // line 37
            echo "                                ";
            $this->displayBlock('sonata_mosaic_default_view', $context, $blocks);
            // line 40
            echo "                            </div>

                            ";
            // line 46
            echo "                            <div class=\"mosaic-inner-box-hover\">
                                ";
            // line 47
            $this->displayBlock('sonata_mosaic_hover_view', $context, $blocks);
            // line 51
            echo "                            </div>
                        </div>

                        ";
            // line 55
            echo "                        ";
            $context["export_formats"] = ((array_key_exists("export_formats", $context)) ? (_twig_default_filter((isset($context["export_formats"]) ? $context["export_formats"] : $this->getContext($context, "export_formats")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array())));
            // line 56
            echo "
                        <div class=\"mosaic-inner-text\">
                            ";
            // line 58
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0)) || (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "export"), "method")) && twig_length_filter($this->env, (isset($context["export_formats"]) ? $context["export_formats"] : $this->getContext($context, "export_formats")))))) {
                // line 59
                echo "                                <input type=\"checkbox\" name=\"idx[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => $context["object"]), "method"), "html", null, true);
                echo "\">
                            ";
            } else {
                // line 61
                echo "                                &nbsp;
                            ";
            }
            // line 63
            echo "
                            ";
            // line 64
            $this->displayBlock('sonata_mosaic_description', $context, $blocks);
            // line 73
            echo "                        </div>
                    </div>
                </div>

                ";
            // line 77
            if ((($this->getAttribute($context["loop"], "index", array()) % 4) == 0)) {
                // line 78
                echo "                    <div class=\"clearfix hidden-xs\"></div>
                ";
            }
            // line 80
            echo "                ";
            if ((($this->getAttribute($context["loop"], "index", array()) % 2) == 0)) {
                // line 81
                echo "                    <div class=\"clearfix visible-xs\"></div>
                ";
            }
            // line 83
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </div>
    </td>
</tr>
";
        
        $__internal_5b9db0fcab4b3b6e6129ce08b55ab6d6f0503c5b5a3dad18341e7f578edee32e->leave($__internal_5b9db0fcab4b3b6e6129ce08b55ab6d6f0503c5b5a3dad18341e7f578edee32e_prof);

        
        $__internal_6a2df49e9bbaa0f87f34cc980ad81c3bcfc7c0263eb55d8caa6bbd9dc1c141d4->leave($__internal_6a2df49e9bbaa0f87f34cc980ad81c3bcfc7c0263eb55d8caa6bbd9dc1c141d4_prof);

    }

    // line 34
    public function block_sonata_mosaic_background($context, array $blocks = array())
    {
        $__internal_adad77f64730050910b504e95a9fd1f01f9f07287c631ce0dc8ec413e0cefa9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adad77f64730050910b504e95a9fd1f01f9f07287c631ce0dc8ec413e0cefa9a->enter($__internal_adad77f64730050910b504e95a9fd1f01f9f07287c631ce0dc8ec413e0cefa9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_background"));

        $__internal_bdffab074729ab1ef2cb337c476a70ce0a9cbff8512be19d5030112f2bf019ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdffab074729ab1ef2cb337c476a70ce0a9cbff8512be19d5030112f2bf019ba->enter($__internal_bdffab074729ab1ef2cb337c476a70ce0a9cbff8512be19d5030112f2bf019ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_background"));

        // line 35
        echo "                                    <img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "image", array()), "html", null, true);
        echo "\" alt=\"\" />
                                ";
        
        $__internal_bdffab074729ab1ef2cb337c476a70ce0a9cbff8512be19d5030112f2bf019ba->leave($__internal_bdffab074729ab1ef2cb337c476a70ce0a9cbff8512be19d5030112f2bf019ba_prof);

        
        $__internal_adad77f64730050910b504e95a9fd1f01f9f07287c631ce0dc8ec413e0cefa9a->leave($__internal_adad77f64730050910b504e95a9fd1f01f9f07287c631ce0dc8ec413e0cefa9a_prof);

    }

    // line 37
    public function block_sonata_mosaic_default_view($context, array $blocks = array())
    {
        $__internal_c110f9faf2cb2ce0c08ca88a4bb2f77fb79c8b89808d1664ef84c1a45a4c30b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c110f9faf2cb2ce0c08ca88a4bb2f77fb79c8b89808d1664ef84c1a45a4c30b2->enter($__internal_c110f9faf2cb2ce0c08ca88a4bb2f77fb79c8b89808d1664ef84c1a45a4c30b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        $__internal_d99cf22bfb18b65bbbb068895e356df4bd215fd7344f8f72064a66174dd68e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99cf22bfb18b65bbbb068895e356df4bd215fd7344f8f72064a66174dd68e3b->enter($__internal_d99cf22bfb18b65bbbb068895e356df4bd215fd7344f8f72064a66174dd68e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_default_view"));

        // line 38
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "</span>
                                ";
        
        $__internal_d99cf22bfb18b65bbbb068895e356df4bd215fd7344f8f72064a66174dd68e3b->leave($__internal_d99cf22bfb18b65bbbb068895e356df4bd215fd7344f8f72064a66174dd68e3b_prof);

        
        $__internal_c110f9faf2cb2ce0c08ca88a4bb2f77fb79c8b89808d1664ef84c1a45a4c30b2->leave($__internal_c110f9faf2cb2ce0c08ca88a4bb2f77fb79c8b89808d1664ef84c1a45a4c30b2_prof);

    }

    // line 47
    public function block_sonata_mosaic_hover_view($context, array $blocks = array())
    {
        $__internal_374cc518587b6cbafa09efa4ec633d745f113429e5b418f86c135f39e4aff090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374cc518587b6cbafa09efa4ec633d745f113429e5b418f86c135f39e4aff090->enter($__internal_374cc518587b6cbafa09efa4ec633d745f113429e5b418f86c135f39e4aff090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        $__internal_9afe62980ee3b1aa8db47696fdef04d6ee343a60bbe3731d24b8114118d42286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9afe62980ee3b1aa8db47696fdef04d6ee343a60bbe3731d24b8114118d42286->enter($__internal_9afe62980ee3b1aa8db47696fdef04d6ee343a60bbe3731d24b8114118d42286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_hover_view"));

        // line 48
        echo "                                    <span class=\"mosaic-box-label label label-primary pull-right\">#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "</span>
                                    ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "description", array()), "html", null, true);
        echo "
                                ";
        
        $__internal_9afe62980ee3b1aa8db47696fdef04d6ee343a60bbe3731d24b8114118d42286->leave($__internal_9afe62980ee3b1aa8db47696fdef04d6ee343a60bbe3731d24b8114118d42286_prof);

        
        $__internal_374cc518587b6cbafa09efa4ec633d745f113429e5b418f86c135f39e4aff090->leave($__internal_374cc518587b6cbafa09efa4ec633d745f113429e5b418f86c135f39e4aff090_prof);

    }

    // line 64
    public function block_sonata_mosaic_description($context, array $blocks = array())
    {
        $__internal_e7c53e01181beff048a499b7946745b7856b750012c7adea911d719a57f55399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c53e01181beff048a499b7946745b7856b750012c7adea911d719a57f55399->enter($__internal_e7c53e01181beff048a499b7946745b7856b750012c7adea911d719a57f55399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        $__internal_843070e3b9a594f4da2800e260a9fb18b57a78b2a9cc74b1a0983341c2877e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843070e3b9a594f4da2800e260a9fb18b57a78b2a9cc74b1a0983341c2877e9c->enter($__internal_843070e3b9a594f4da2800e260a9fb18b57a78b2a9cc74b1a0983341c2877e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_mosaic_description"));

        // line 65
        echo "                                ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method"))) {
            // line 66
            echo "                                    <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "edit", 1 => array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "</a>
                                ";
        } elseif (($this->getAttribute(        // line 67
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "show", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "show"), "method"))) {
            // line 68
            echo "                                    <a class=\"mosaic-inner-link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "show", 1 => array("id" => $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getUrlsafeIdentifier((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "</a>
                                ";
        } else {
            // line 70
            echo "                                    ";
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array()), 40), "html", null, true);
            echo "
                                ";
        }
        // line 72
        echo "                            ";
        
        $__internal_843070e3b9a594f4da2800e260a9fb18b57a78b2a9cc74b1a0983341c2877e9c->leave($__internal_843070e3b9a594f4da2800e260a9fb18b57a78b2a9cc74b1a0983341c2877e9c_prof);

        
        $__internal_e7c53e01181beff048a499b7946745b7856b750012c7adea911d719a57f55399->leave($__internal_e7c53e01181beff048a499b7946745b7856b750012c7adea911d719a57f55399_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 72,  267 => 70,  259 => 68,  257 => 67,  250 => 66,  247 => 65,  238 => 64,  226 => 49,  221 => 48,  212 => 47,  199 => 38,  190 => 37,  177 => 35,  168 => 34,  155 => 84,  141 => 83,  137 => 81,  134 => 80,  130 => 78,  128 => 77,  122 => 73,  120 => 64,  117 => 63,  113 => 61,  107 => 59,  105 => 58,  101 => 56,  98 => 55,  93 => 51,  91 => 47,  88 => 46,  84 => 40,  81 => 37,  79 => 34,  75 => 32,  68 => 25,  65 => 24,  62 => 23,  45 => 22,  40 => 20,  29 => 11,);
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

<!--
This template can be customized to match your needs. You should only extends the template and used the differents block to customize the view:
    - sonata_mosaic_default_view
    - sonata_mosaic_hover_view
    - sonata_mosaic_description
-->

<tr>
    <td colspan=\"{{ admin.list.elements|length - (app.request.isXmlHttpRequest ? (admin.list.has('_action') + admin.list.has('batch')) : 0) }}\">
        <div class=\"row\">
            {% for object in admin.datagrid.results %}
                {% set meta = admin.getObjectMetadata(object) %}

                <div class=\"col-xs-6 col-sm-3 mosaic-box sonata-ba-list-field-batch sonata-ba-list-field\" objectId=\"{{ admin.id(object) }}\">

                    <div class=\"mosaic-box-outter\">
                        <div class=\"mosaic-inner-box\">
                            {#
                                This box will be display when the mouse is not on the box
                            #}

                            <div class=\"mosaic-inner-box-default\">
                                {% block sonata_mosaic_background %}
                                    <img src=\"{{ meta.image }}\" alt=\"\" />
                                {% endblock %}
                                {% block sonata_mosaic_default_view %}
                                    <span class=\"mosaic-box-label label label-primary pull-right\">#{{ admin.id(object) }}</span>
                                {% endblock %}
                            </div>

                            {#
                                This box will be display when the mouse is on the box
                                You can add more description
                            #}
                            <div class=\"mosaic-inner-box-hover\">
                                {% block sonata_mosaic_hover_view %}
                                    <span class=\"mosaic-box-label label label-primary pull-right\">#{{ admin.id(object) }}</span>
                                    {{ meta.description }}
                                {% endblock %}
                            </div>
                        </div>

                        {# NEXT_MAJOR : remove this assignment #}
                        {% set export_formats = export_formats|default(admin.getExportFormats) %}

                        <div class=\"mosaic-inner-text\">
                            {% if (admin.hasRoute('batch') and batchactions|length > 0) or (admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length) %}
                                <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
                            {% else %}
                                &nbsp;
                            {% endif %}

                            {% block sonata_mosaic_description %}
                                {% if admin.hasAccess('edit', object) and admin.hasRoute('edit') %}
                                    <a class=\"mosaic-inner-link\" href=\"{{ admin.generateUrl('edit', {'id' : object|sonata_urlsafeid(admin) }) }}\">{{ meta.title|truncate(40) }}</a>
                                {% elseif admin.hasAccess('show', object) and admin.hasRoute('show') %}
                                    <a class=\"mosaic-inner-link\" href=\"{{ admin.generateUrl('show', {'id' : object|sonata_urlsafeid(admin) }) }}\">{{ meta.title|truncate(40) }}</a>
                                {% else %}
                                    {{ meta.title|truncate(40) }}
                                {% endif %}
                            {% endblock %}
                        </div>
                    </div>
                </div>

                {% if loop.index % 4 == 0 %}
                    <div class=\"clearfix hidden-xs\"></div>
                {% endif %}
                {% if loop.index % 2 == 0 %}
                    <div class=\"clearfix visible-xs\"></div>
                {% endif %}
            {% endfor %}
        </div>
    </td>
</tr>
", "SonataAdminBundle:CRUD:list_outer_rows_mosaic.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_outer_rows_mosaic.html.twig");
    }
}
