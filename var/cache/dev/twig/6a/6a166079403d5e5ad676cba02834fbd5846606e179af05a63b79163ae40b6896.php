<?php

/* SonataBlockBundle:Block:block_container.html.twig */
class __TwigTemplate_ccdd490bcf88968ef39da3870f359f02006f658aaa41813eb725667267d2462a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8fadad8dcab660294c753e9a45f134b71370e5df5d55bc91d8777c7127be03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8fadad8dcab660294c753e9a45f134b71370e5df5d55bc91d8777c7127be03a->enter($__internal_e8fadad8dcab660294c753e9a45f134b71370e5df5d55bc91d8777c7127be03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $__internal_0e06b6d35280c04756d12fc6405091bb34caf21afbf3625882b945a90bc409c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e06b6d35280c04756d12fc6405091bb34caf21afbf3625882b945a90bc409c4->enter($__internal_0e06b6d35280c04756d12fc6405091bb34caf21afbf3625882b945a90bc409c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8fadad8dcab660294c753e9a45f134b71370e5df5d55bc91d8777c7127be03a->leave($__internal_e8fadad8dcab660294c753e9a45f134b71370e5df5d55bc91d8777c7127be03a_prof);

        
        $__internal_0e06b6d35280c04756d12fc6405091bb34caf21afbf3625882b945a90bc409c4->leave($__internal_0e06b6d35280c04756d12fc6405091bb34caf21afbf3625882b945a90bc409c4_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_e50c40ac740a09c351243a075a23dd2c68a77a66d16cbdda77137def80e03597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e50c40ac740a09c351243a075a23dd2c68a77a66d16cbdda77137def80e03597->enter($__internal_e50c40ac740a09c351243a075a23dd2c68a77a66d16cbdda77137def80e03597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_01cb74cc70971c270316731f863effe491d4219a5030505aa77278842cac71cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01cb74cc70971c270316731f863effe491d4219a5030505aa77278842cac71cd->enter($__internal_01cb74cc70971c270316731f863effe491d4219a5030505aa77278842cac71cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_01cb74cc70971c270316731f863effe491d4219a5030505aa77278842cac71cd->leave($__internal_01cb74cc70971c270316731f863effe491d4219a5030505aa77278842cac71cd_prof);

        
        $__internal_e50c40ac740a09c351243a075a23dd2c68a77a66d16cbdda77137def80e03597->leave($__internal_e50c40ac740a09c351243a075a23dd2c68a77a66d16cbdda77137def80e03597_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_159143022ede8ad29f552b8d65aa9178e0bed4af07cc1583822bdccbeef42e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159143022ede8ad29f552b8d65aa9178e0bed4af07cc1583822bdccbeef42e2c->enter($__internal_159143022ede8ad29f552b8d65aa9178e0bed4af07cc1583822bdccbeef42e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_c454fa0f22d44a83d61ec543d8494f4613d8c734c76708ed56209c654dee2afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c454fa0f22d44a83d61ec543d8494f4613d8c734c76708ed56209c654dee2afc->enter($__internal_c454fa0f22d44a83d61ec543d8494f4613d8c734c76708ed56209c654dee2afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_c454fa0f22d44a83d61ec543d8494f4613d8c734c76708ed56209c654dee2afc->leave($__internal_c454fa0f22d44a83d61ec543d8494f4613d8c734c76708ed56209c654dee2afc_prof);

        
        $__internal_159143022ede8ad29f552b8d65aa9178e0bed4af07cc1583822bdccbeef42e2c->leave($__internal_159143022ede8ad29f552b8d65aa9178e0bed4af07cc1583822bdccbeef42e2c_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_b1eb501bf1766fbd6b1f50f9ab095ceaedd20d2ccd0a188066180750eef8adac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1eb501bf1766fbd6b1f50f9ab095ceaedd20d2ccd0a188066180750eef8adac->enter($__internal_b1eb501bf1766fbd6b1f50f9ab095ceaedd20d2ccd0a188066180750eef8adac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_6943a1314250f951bae5fe264e6a99211588801b1a1412221d34a2189d1afa77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6943a1314250f951bae5fe264e6a99211588801b1a1412221d34a2189d1afa77->enter($__internal_6943a1314250f951bae5fe264e6a99211588801b1a1412221d34a2189d1afa77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if ((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator"))) {
            echo $this->getAttribute((isset($context["decorator"]) ? $context["decorator"] : $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_6943a1314250f951bae5fe264e6a99211588801b1a1412221d34a2189d1afa77->leave($__internal_6943a1314250f951bae5fe264e6a99211588801b1a1412221d34a2189d1afa77_prof);

        
        $__internal_b1eb501bf1766fbd6b1f50f9ab095ceaedd20d2ccd0a188066180750eef8adac->leave($__internal_b1eb501bf1766fbd6b1f50f9ab095ceaedd20d2ccd0a188066180750eef8adac_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_098a189e628e6a5e42070b097d950f927abcd5c55e4ead50b72f331ae2343c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098a189e628e6a5e42070b097d950f927abcd5c55e4ead50b72f331ae2343c97->enter($__internal_098a189e628e6a5e42070b097d950f927abcd5c55e4ead50b72f331ae2343c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_3ba65cea64aca36df189d276cd9f877d6dca207c90ce1e35f1e28d39f1eb0a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba65cea64aca36df189d276cd9f877d6dca207c90ce1e35f1e28d39f1eb0a37->enter($__internal_3ba65cea64aca36df189d276cd9f877d6dca207c90ce1e35f1e28d39f1eb0a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_3ba65cea64aca36df189d276cd9f877d6dca207c90ce1e35f1e28d39f1eb0a37->leave($__internal_3ba65cea64aca36df189d276cd9f877d6dca207c90ce1e35f1e28d39f1eb0a37_prof);

        
        $__internal_098a189e628e6a5e42070b097d950f927abcd5c55e4ead50b72f331ae2343c97->leave($__internal_098a189e628e6a5e42070b097d950f927abcd5c55e4ead50b72f331ae2343c97_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 25,  147 => 24,  134 => 28,  120 => 27,  117 => 24,  99 => 23,  94 => 22,  85 => 21,  67 => 18,  42 => 15,  21 => 12,);
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

{% extends sonata_block.templates.block_base %}

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "SonataBlockBundle:Block:block_container.html.twig", "/var/www/html/Barlito/vendor/sonata-project/block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
