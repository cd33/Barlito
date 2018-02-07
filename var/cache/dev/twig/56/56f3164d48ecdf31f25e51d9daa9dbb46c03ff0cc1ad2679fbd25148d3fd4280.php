<?php

/* SonataAdminBundle:CRUD:preview.html.twig */
class __TwigTemplate_e1390be53954d72ab3d0d3d326942694ade8c3ad10eaaed935052bb84eca64f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "SonataAdminBundle:CRUD:preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be3b956e9943d93165e4297e0c4b55724b1d388ad4c72235a09f77f38ac1494d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3b956e9943d93165e4297e0c4b55724b1d388ad4c72235a09f77f38ac1494d->enter($__internal_be3b956e9943d93165e4297e0c4b55724b1d388ad4c72235a09f77f38ac1494d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $__internal_6cf4a5a74fb95a51c87b60b51c395fd3707ecb60010d641cce9917c32aa9814c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf4a5a74fb95a51c87b60b51c395fd3707ecb60010d641cce9917c32aa9814c->enter($__internal_6cf4a5a74fb95a51c87b60b51c395fd3707ecb60010d641cce9917c32aa9814c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be3b956e9943d93165e4297e0c4b55724b1d388ad4c72235a09f77f38ac1494d->leave($__internal_be3b956e9943d93165e4297e0c4b55724b1d388ad4c72235a09f77f38ac1494d_prof);

        
        $__internal_6cf4a5a74fb95a51c87b60b51c395fd3707ecb60010d641cce9917c32aa9814c->leave($__internal_6cf4a5a74fb95a51c87b60b51c395fd3707ecb60010d641cce9917c32aa9814c_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_2e126205fa885a1d39fbc85fa6e1eafa66c428a13df50a1f4c177a311e3cf04b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e126205fa885a1d39fbc85fa6e1eafa66c428a13df50a1f4c177a311e3cf04b->enter($__internal_2e126205fa885a1d39fbc85fa6e1eafa66c428a13df50a1f4c177a311e3cf04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_aa056636a6a54e7921885e5d2242b1fa39b353232df33b73e3b34e94d2d66857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa056636a6a54e7921885e5d2242b1fa39b353232df33b73e3b34e94d2d66857->enter($__internal_aa056636a6a54e7921885e5d2242b1fa39b353232df33b73e3b34e94d2d66857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_aa056636a6a54e7921885e5d2242b1fa39b353232df33b73e3b34e94d2d66857->leave($__internal_aa056636a6a54e7921885e5d2242b1fa39b353232df33b73e3b34e94d2d66857_prof);

        
        $__internal_2e126205fa885a1d39fbc85fa6e1eafa66c428a13df50a1f4c177a311e3cf04b->leave($__internal_2e126205fa885a1d39fbc85fa6e1eafa66c428a13df50a1f4c177a311e3cf04b_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_6a65fe5f2b4c47a08e2b580b2026caae1d93dc8125c4da6513eb45a8560b02d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a65fe5f2b4c47a08e2b580b2026caae1d93dc8125c4da6513eb45a8560b02d1->enter($__internal_6a65fe5f2b4c47a08e2b580b2026caae1d93dc8125c4da6513eb45a8560b02d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        $__internal_1bfa3a46d232a38ee9895b29bd81bd91ab835bd42f07724662a5ee0d05fab822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfa3a46d232a38ee9895b29bd81bd91ab835bd42f07724662a5ee0d05fab822->enter($__internal_1bfa3a46d232a38ee9895b29bd81bd91ab835bd42f07724662a5ee0d05fab822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_1bfa3a46d232a38ee9895b29bd81bd91ab835bd42f07724662a5ee0d05fab822->leave($__internal_1bfa3a46d232a38ee9895b29bd81bd91ab835bd42f07724662a5ee0d05fab822_prof);

        
        $__internal_6a65fe5f2b4c47a08e2b580b2026caae1d93dc8125c4da6513eb45a8560b02d1->leave($__internal_6a65fe5f2b4c47a08e2b580b2026caae1d93dc8125c4da6513eb45a8560b02d1_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_f6710b259c343b10135e43f8656bdbc42814e9cc0c43b669df19fd81031c6533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6710b259c343b10135e43f8656bdbc42814e9cc0c43b669df19fd81031c6533->enter($__internal_f6710b259c343b10135e43f8656bdbc42814e9cc0c43b669df19fd81031c6533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_8664395ebafe1ffc3e4acb176f35c950db585cd3bf962a677ec23df75009b3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8664395ebafe1ffc3e4acb176f35c950db585cd3bf962a677ec23df75009b3f9->enter($__internal_8664395ebafe1ffc3e4acb176f35c950db585cd3bf962a677ec23df75009b3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_8664395ebafe1ffc3e4acb176f35c950db585cd3bf962a677ec23df75009b3f9->leave($__internal_8664395ebafe1ffc3e4acb176f35c950db585cd3bf962a677ec23df75009b3f9_prof);

        
        $__internal_f6710b259c343b10135e43f8656bdbc42814e9cc0c43b669df19fd81031c6533->leave($__internal_f6710b259c343b10135e43f8656bdbc42814e9cc0c43b669df19fd81031c6533_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_2e4a367ea17d01d4848e70c9dcc2170f891896211e0bae37670c07870489f916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4a367ea17d01d4848e70c9dcc2170f891896211e0bae37670c07870489f916->enter($__internal_2e4a367ea17d01d4848e70c9dcc2170f891896211e0bae37670c07870489f916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_ceb1ff20a3b048a64219e275ad78062dba73d5f434dfb3885e64350f06ca7bd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb1ff20a3b048a64219e275ad78062dba73d5f434dfb3885e64350f06ca7bd9->enter($__internal_ceb1ff20a3b048a64219e275ad78062dba73d5f434dfb3885e64350f06ca7bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_ceb1ff20a3b048a64219e275ad78062dba73d5f434dfb3885e64350f06ca7bd9->leave($__internal_ceb1ff20a3b048a64219e275ad78062dba73d5f434dfb3885e64350f06ca7bd9_prof);

        
        $__internal_2e4a367ea17d01d4848e70c9dcc2170f891896211e0bae37670c07870489f916->leave($__internal_2e4a367ea17d01d4848e70c9dcc2170f891896211e0bae37670c07870489f916_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_9834b89b8cf752bc081aa9d350809d3f6bbadbc9b8e344ad7aec97c06b1f9b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9834b89b8cf752bc081aa9d350809d3f6bbadbc9b8e344ad7aec97c06b1f9b07->enter($__internal_9834b89b8cf752bc081aa9d350809d3f6bbadbc9b8e344ad7aec97c06b1f9b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_5aad0dbc0155995da36503d9805143089878e8382d9b64881d1ff4aa261230ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aad0dbc0155995da36503d9805143089878e8382d9b64881d1ff4aa261230ea->enter($__internal_5aad0dbc0155995da36503d9805143089878e8382d9b64881d1ff4aa261230ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_5aad0dbc0155995da36503d9805143089878e8382d9b64881d1ff4aa261230ea->leave($__internal_5aad0dbc0155995da36503d9805143089878e8382d9b64881d1ff4aa261230ea_prof);

        
        $__internal_9834b89b8cf752bc081aa9d350809d3f6bbadbc9b8e344ad7aec97c06b1f9b07->leave($__internal_9834b89b8cf752bc081aa9d350809d3f6bbadbc9b8e344ad7aec97c06b1f9b07_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 57,  195 => 56,  186 => 55,  175 => 52,  168 => 50,  161 => 48,  155 => 46,  153 => 45,  150 => 44,  146 => 43,  143 => 42,  136 => 38,  132 => 36,  130 => 35,  127 => 34,  123 => 33,  120 => 32,  111 => 31,  98 => 27,  91 => 23,  87 => 21,  78 => 20,  61 => 17,  44 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:preview.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/preview.html.twig");
    }
}
