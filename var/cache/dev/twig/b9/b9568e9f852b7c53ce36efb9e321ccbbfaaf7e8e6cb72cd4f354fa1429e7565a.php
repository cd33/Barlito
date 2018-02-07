<?php

/* SonataAdminBundle:Menu:sonata_menu.html.twig */
class __TwigTemplate_426ad164d8c4dd703515bcf6e803f66f04b634a78cb3c6f4bf11f64866d58463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Menu:sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c4b037ee65cd5ab730a30ffbd7da7abf061b4cb4525ede6ed640ac17ae0bca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4b037ee65cd5ab730a30ffbd7da7abf061b4cb4525ede6ed640ac17ae0bca7->enter($__internal_6c4b037ee65cd5ab730a30ffbd7da7abf061b4cb4525ede6ed640ac17ae0bca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $__internal_ca16e5c36724ddc448506c8f99dc8cd78beff814455976039c89139739ac9b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca16e5c36724ddc448506c8f99dc8cd78beff814455976039c89139739ac9b1a->enter($__internal_ca16e5c36724ddc448506c8f99dc8cd78beff814455976039c89139739ac9b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Menu:sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c4b037ee65cd5ab730a30ffbd7da7abf061b4cb4525ede6ed640ac17ae0bca7->leave($__internal_6c4b037ee65cd5ab730a30ffbd7da7abf061b4cb4525ede6ed640ac17ae0bca7_prof);

        
        $__internal_ca16e5c36724ddc448506c8f99dc8cd78beff814455976039c89139739ac9b1a->leave($__internal_ca16e5c36724ddc448506c8f99dc8cd78beff814455976039c89139739ac9b1a_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_9c53c5c40a26a0bb76effcc636a5f21b8a151454acd434188efcfba02cf36b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c53c5c40a26a0bb76effcc636a5f21b8a151454acd434188efcfba02cf36b42->enter($__internal_9c53c5c40a26a0bb76effcc636a5f21b8a151454acd434188efcfba02cf36b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_7a964487e01560b38e48ea56e755e1902220be248bb7789a507aaf68b23299cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a964487e01560b38e48ea56e755e1902220be248bb7789a507aaf68b23299cd->enter($__internal_7a964487e01560b38e48ea56e755e1902220be248bb7789a507aaf68b23299cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_7a964487e01560b38e48ea56e755e1902220be248bb7789a507aaf68b23299cd->leave($__internal_7a964487e01560b38e48ea56e755e1902220be248bb7789a507aaf68b23299cd_prof);

        
        $__internal_9c53c5c40a26a0bb76effcc636a5f21b8a151454acd434188efcfba02cf36b42->leave($__internal_9c53c5c40a26a0bb76effcc636a5f21b8a151454acd434188efcfba02cf36b42_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_7581e7dfe758b41b7293bd81cc0d006c8a0cf6af57fedbf63da27ce522567edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7581e7dfe758b41b7293bd81cc0d006c8a0cf6af57fedbf63da27ce522567edc->enter($__internal_7581e7dfe758b41b7293bd81cc0d006c8a0cf6af57fedbf63da27ce522567edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_f2d1800762afa67d4bfce8237967f7b1aa63cdc38e17dcff3ec66db4dae3c492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d1800762afa67d4bfce8237967f7b1aa63cdc38e17dcff3ec66db4dae3c492->enter($__internal_f2d1800762afa67d4bfce8237967f7b1aa63cdc38e17dcff3ec66db4dae3c492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => twig_trim_filter(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_f2d1800762afa67d4bfce8237967f7b1aa63cdc38e17dcff3ec66db4dae3c492->leave($__internal_f2d1800762afa67d4bfce8237967f7b1aa63cdc38e17dcff3ec66db4dae3c492_prof);

        
        $__internal_7581e7dfe758b41b7293bd81cc0d006c8a0cf6af57fedbf63da27ce522567edc->leave($__internal_7581e7dfe758b41b7293bd81cc0d006c8a0cf6af57fedbf63da27ce522567edc_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_b0aedc214c71aa4bbb24fb11b8e3928b182910603f1aa517e16a143e4d8666fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0aedc214c71aa4bbb24fb11b8e3928b182910603f1aa517e16a143e4d8666fb->enter($__internal_b0aedc214c71aa4bbb24fb11b8e3928b182910603f1aa517e16a143e4d8666fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_baf513b14ade0e1b635091ab61fae6a8d551f55dd4e3e442305ab0125f2b1cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf513b14ade0e1b635091ab61fae6a8d551f55dd4e3e442305ab0125f2b1cfa->enter($__internal_baf513b14ade0e1b635091ab61fae6a8d551f55dd4e3e442305ab0125f2b1cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "label_catalogue", 1 => "messages"), "method");
        // line 29
        echo "        ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method"), ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_baf513b14ade0e1b635091ab61fae6a8d551f55dd4e3e442305ab0125f2b1cfa->leave($__internal_baf513b14ade0e1b635091ab61fae6a8d551f55dd4e3e442305ab0125f2b1cfa_prof);

        
        $__internal_b0aedc214c71aa4bbb24fb11b8e3928b182910603f1aa517e16a143e4d8666fb->leave($__internal_b0aedc214c71aa4bbb24fb11b8e3928b182910603f1aa517e16a143e4d8666fb_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_c5c12170f036a243a36b5ee1538c292c51c49dd3ace75e4e3c108eeda48a5a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c12170f036a243a36b5ee1538c292c51c49dd3ace75e4e3c108eeda48a5a1d->enter($__internal_c5c12170f036a243a36b5ee1538c292c51c49dd3ace75e4e3c108eeda48a5a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_eb2028a6e7d5459828a94b04db90834b49f23f9cd0e24170f5b8c3f6d6b50e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2028a6e7d5459828a94b04db90834b49f23f9cd0e24170f5b8c3f6d6b50e8d->enter($__internal_eb2028a6e7d5459828a94b04db90834b49f23f9cd0e24170f5b8c3f6d6b50e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        // line 46
        if (( !$this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "keep_open"), "method", true, true) ||  !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "keep_open"), "method"))) {
            // line 47
            echo "<span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>";
        }
        // line 49
        echo "</a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_eb2028a6e7d5459828a94b04db90834b49f23f9cd0e24170f5b8c3f6d6b50e8d->leave($__internal_eb2028a6e7d5459828a94b04db90834b49f23f9cd0e24170f5b8c3f6d6b50e8d_prof);

        
        $__internal_c5c12170f036a243a36b5ee1538c292c51c49dd3ace75e4e3c108eeda48a5a1d->leave($__internal_c5c12170f036a243a36b5ee1538c292c51c49dd3ace75e4e3c108eeda48a5a1d_prof);

    }

    // line 53
    public function block_label($context, array $blocks = array())
    {
        $__internal_a8951d6bc60175fd8369269865aa040435af523e2c10530bbdd83aef9c52f025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8951d6bc60175fd8369269865aa040435af523e2c10530bbdd83aef9c52f025->enter($__internal_a8951d6bc60175fd8369269865aa040435af523e2c10530bbdd83aef9c52f025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_f462e3b912576ed874149398780f7855435754a29457bea0242da89e050fe7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f462e3b912576ed874149398780f7855435754a29457bea0242da89e050fe7dd->enter($__internal_f462e3b912576ed874149398780f7855435754a29457bea0242da89e050fe7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && (isset($context["is_link"]) ? $context["is_link"] : $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_f462e3b912576ed874149398780f7855435754a29457bea0242da89e050fe7dd->leave($__internal_f462e3b912576ed874149398780f7855435754a29457bea0242da89e050fe7dd_prof);

        
        $__internal_a8951d6bc60175fd8369269865aa040435af523e2c10530bbdd83aef9c52f025->leave($__internal_a8951d6bc60175fd8369269865aa040435af523e2c10530bbdd83aef9c52f025_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Menu:sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 53,  196 => 49,  193 => 47,  191 => 46,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% set translation_domain = item.extra('label_catalogue', 'messages') %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set icon = item.extra('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            {%- if item.extra('keep_open') is not defined or not item.extra('keep_open') -%}
                <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
            {%- endif -%}
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "SonataAdminBundle:Menu:sonata_menu.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
