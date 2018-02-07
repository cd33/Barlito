<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_931286bd2d5e1309626f5d9403657c964823a737fbd13bb1365d4d96cb6404f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd700c623b513542c05f23eae6e059c1ee53b6a81493f1605384a85b629aa3a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd700c623b513542c05f23eae6e059c1ee53b6a81493f1605384a85b629aa3a1->enter($__internal_cd700c623b513542c05f23eae6e059c1ee53b6a81493f1605384a85b629aa3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $__internal_71fe91c45c4bcb223a3f205684f337a7a3fbb5bfefdbf709143c72c2416e1064 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fe91c45c4bcb223a3f205684f337a7a3fbb5bfefdbf709143c72c2416e1064->enter($__internal_71fe91c45c4bcb223a3f205684f337a7a3fbb5bfefdbf709143c72c2416e1064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd700c623b513542c05f23eae6e059c1ee53b6a81493f1605384a85b629aa3a1->leave($__internal_cd700c623b513542c05f23eae6e059c1ee53b6a81493f1605384a85b629aa3a1_prof);

        
        $__internal_71fe91c45c4bcb223a3f205684f337a7a3fbb5bfefdbf709143c72c2416e1064->leave($__internal_71fe91c45c4bcb223a3f205684f337a7a3fbb5bfefdbf709143c72c2416e1064_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_310023f6cc89e5736e92a98d10bcaca707d3ba6568913b4a3a1ffc1a55b900be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_310023f6cc89e5736e92a98d10bcaca707d3ba6568913b4a3a1ffc1a55b900be->enter($__internal_310023f6cc89e5736e92a98d10bcaca707d3ba6568913b4a3a1ffc1a55b900be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_300fac00cc94d5d6207afa33ddf0564460aedcf0b72d01cd7ab1079d78231861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300fac00cc94d5d6207afa33ddf0564460aedcf0b72d01cd7ab1079d78231861->enter($__internal_300fac00cc94d5d6207afa33ddf0564460aedcf0b72d01cd7ab1079d78231861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_300fac00cc94d5d6207afa33ddf0564460aedcf0b72d01cd7ab1079d78231861->leave($__internal_300fac00cc94d5d6207afa33ddf0564460aedcf0b72d01cd7ab1079d78231861_prof);

        
        $__internal_310023f6cc89e5736e92a98d10bcaca707d3ba6568913b4a3a1ffc1a55b900be->leave($__internal_310023f6cc89e5736e92a98d10bcaca707d3ba6568913b4a3a1ffc1a55b900be_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_814f329a813c17a2af034dddb3d517f37e6c2052fa71e6dc64c1e1438aa1e106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814f329a813c17a2af034dddb3d517f37e6c2052fa71e6dc64c1e1438aa1e106->enter($__internal_814f329a813c17a2af034dddb3d517f37e6c2052fa71e6dc64c1e1438aa1e106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_838bff0e527aecbb47b2d86876b756fb243e6edcc0e8ef55908d5917fc279881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_838bff0e527aecbb47b2d86876b756fb243e6edcc0e8ef55908d5917fc279881->enter($__internal_838bff0e527aecbb47b2d86876b756fb243e6edcc0e8ef55908d5917fc279881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_838bff0e527aecbb47b2d86876b756fb243e6edcc0e8ef55908d5917fc279881->leave($__internal_838bff0e527aecbb47b2d86876b756fb243e6edcc0e8ef55908d5917fc279881_prof);

        
        $__internal_814f329a813c17a2af034dddb3d517f37e6c2052fa71e6dc64c1e1438aa1e106->leave($__internal_814f329a813c17a2af034dddb3d517f37e6c2052fa71e6dc64c1e1438aa1e106_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_477bb70b368b3757dc8b59b1e734352153d237c646038e4941dfac6bdc56bd7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477bb70b368b3757dc8b59b1e734352153d237c646038e4941dfac6bdc56bd7c->enter($__internal_477bb70b368b3757dc8b59b1e734352153d237c646038e4941dfac6bdc56bd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_e9eb34dcd3174fd2c21fd878c3fe36c6f4f939c477002b29e633a60dd6dbf784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9eb34dcd3174fd2c21fd878c3fe36c6f4f939c477002b29e633a60dd6dbf784->enter($__internal_e9eb34dcd3174fd2c21fd878c3fe36c6f4f939c477002b29e633a60dd6dbf784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_e9eb34dcd3174fd2c21fd878c3fe36c6f4f939c477002b29e633a60dd6dbf784->leave($__internal_e9eb34dcd3174fd2c21fd878c3fe36c6f4f939c477002b29e633a60dd6dbf784_prof);

        
        $__internal_477bb70b368b3757dc8b59b1e734352153d237c646038e4941dfac6bdc56bd7c->leave($__internal_477bb70b368b3757dc8b59b1e734352153d237c646038e4941dfac6bdc56bd7c_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_c6837d1dde2f25684d270463913b9c6671f971dc3ce0b385bd3dbabd7328048c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6837d1dde2f25684d270463913b9c6671f971dc3ce0b385bd3dbabd7328048c->enter($__internal_c6837d1dde2f25684d270463913b9c6671f971dc3ce0b385bd3dbabd7328048c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_a7d4d3f5d147cddd4715382fe7209ae3ef40b12e63ba3c2492fb3bac74d525ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d4d3f5d147cddd4715382fe7209ae3ef40b12e63ba3c2492fb3bac74d525ca->enter($__internal_a7d4d3f5d147cddd4715382fe7209ae3ef40b12e63ba3c2492fb3bac74d525ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_a7d4d3f5d147cddd4715382fe7209ae3ef40b12e63ba3c2492fb3bac74d525ca->leave($__internal_a7d4d3f5d147cddd4715382fe7209ae3ef40b12e63ba3c2492fb3bac74d525ca_prof);

        
        $__internal_c6837d1dde2f25684d270463913b9c6671f971dc3ce0b385bd3dbabd7328048c->leave($__internal_c6837d1dde2f25684d270463913b9c6671f971dc3ce0b385bd3dbabd7328048c_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c5056716283471e8f95fd7b898aa04d7d5dae7907ea594dcc228d291974209eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5056716283471e8f95fd7b898aa04d7d5dae7907ea594dcc228d291974209eb->enter($__internal_c5056716283471e8f95fd7b898aa04d7d5dae7907ea594dcc228d291974209eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_84172298e95e8e1dedc42553e79528606cb1afd1653e227a29aa587988230582 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84172298e95e8e1dedc42553e79528606cb1afd1653e227a29aa587988230582->enter($__internal_84172298e95e8e1dedc42553e79528606cb1afd1653e227a29aa587988230582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
        
        $__internal_84172298e95e8e1dedc42553e79528606cb1afd1653e227a29aa587988230582->leave($__internal_84172298e95e8e1dedc42553e79528606cb1afd1653e227a29aa587988230582_prof);

        
        $__internal_c5056716283471e8f95fd7b898aa04d7d5dae7907ea594dcc228d291974209eb->leave($__internal_c5056716283471e8f95fd7b898aa04d7d5dae7907ea594dcc228d291974209eb_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_9c030ac17fa3189ec86b4ba602546d7973e9a42bb00943d31ad6ed75bc6c1e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c030ac17fa3189ec86b4ba602546d7973e9a42bb00943d31ad6ed75bc6c1e88->enter($__internal_9c030ac17fa3189ec86b4ba602546d7973e9a42bb00943d31ad6ed75bc6c1e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_c6bab4850fe460bab818066e0ac2adab09f965875963c88133c10cad9796bc98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6bab4850fe460bab818066e0ac2adab09f965875963c88133c10cad9796bc98->enter($__internal_c6bab4850fe460bab818066e0ac2adab09f965875963c88133c10cad9796bc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_c6bab4850fe460bab818066e0ac2adab09f965875963c88133c10cad9796bc98->leave($__internal_c6bab4850fe460bab818066e0ac2adab09f965875963c88133c10cad9796bc98_prof);

        
        $__internal_9c030ac17fa3189ec86b4ba602546d7973e9a42bb00943d31ad6ed75bc6c1e88->leave($__internal_9c030ac17fa3189ec86b4ba602546d7973e9a42bb00943d31ad6ed75bc6c1e88_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_f081ec0b9c34e4d8c0940f69beb55ce4d7286fb1134f06c50046fca8ad5d7e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f081ec0b9c34e4d8c0940f69beb55ce4d7286fb1134f06c50046fca8ad5d7e98->enter($__internal_f081ec0b9c34e4d8c0940f69beb55ce4d7286fb1134f06c50046fca8ad5d7e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_42f449380311755d5c4e38a7da2929b101f570a7c370d7f52dbd75caac802398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f449380311755d5c4e38a7da2929b101f570a7c370d7f52dbd75caac802398->enter($__internal_42f449380311755d5c4e38a7da2929b101f570a7c370d7f52dbd75caac802398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_42f449380311755d5c4e38a7da2929b101f570a7c370d7f52dbd75caac802398->leave($__internal_42f449380311755d5c4e38a7da2929b101f570a7c370d7f52dbd75caac802398_prof);

        
        $__internal_f081ec0b9c34e4d8c0940f69beb55ce4d7286fb1134f06c50046fca8ad5d7e98->leave($__internal_f081ec0b9c34e4d8c0940f69beb55ce4d7286fb1134f06c50046fca8ad5d7e98_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 32,  151 => 31,  142 => 30,  122 => 20,  113 => 19,  96 => 17,  79 => 16,  62 => 15,  45 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
