<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_509003bce82dc6cb782b2f34b185488c05a0805153d52255e16a41570c691256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9a012e895bc6ffd918e956451cd6b633cd06a30027061730008a7e5f2863367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a012e895bc6ffd918e956451cd6b633cd06a30027061730008a7e5f2863367->enter($__internal_a9a012e895bc6ffd918e956451cd6b633cd06a30027061730008a7e5f2863367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_317607af86127b3dd4685defc5351af4ba731612dfde275b141bf0e1de0870ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317607af86127b3dd4685defc5351af4ba731612dfde275b141bf0e1de0870ec->enter($__internal_317607af86127b3dd4685defc5351af4ba731612dfde275b141bf0e1de0870ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_a9a012e895bc6ffd918e956451cd6b633cd06a30027061730008a7e5f2863367->leave($__internal_a9a012e895bc6ffd918e956451cd6b633cd06a30027061730008a7e5f2863367_prof);

        
        $__internal_317607af86127b3dd4685defc5351af4ba731612dfde275b141bf0e1de0870ec->leave($__internal_317607af86127b3dd4685defc5351af4ba731612dfde275b141bf0e1de0870ec_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_ed1f314fb054e669d880c10a227e83bededfc2936a93ef7878cde59b0ca59697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1f314fb054e669d880c10a227e83bededfc2936a93ef7878cde59b0ca59697->enter($__internal_ed1f314fb054e669d880c10a227e83bededfc2936a93ef7878cde59b0ca59697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_6321fc7608b7cf49549a6d8890e069f28da980a14386524d26200fbae0275c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6321fc7608b7cf49549a6d8890e069f28da980a14386524d26200fbae0275c69->enter($__internal_6321fc7608b7cf49549a6d8890e069f28da980a14386524d26200fbae0275c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_6321fc7608b7cf49549a6d8890e069f28da980a14386524d26200fbae0275c69->leave($__internal_6321fc7608b7cf49549a6d8890e069f28da980a14386524d26200fbae0275c69_prof);

        
        $__internal_ed1f314fb054e669d880c10a227e83bededfc2936a93ef7878cde59b0ca59697->leave($__internal_ed1f314fb054e669d880c10a227e83bededfc2936a93ef7878cde59b0ca59697_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_ad007aab3641fd4edb01d61e2f3f93a2c43aa72dd8ec4d2fb02078d0148fa1bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad007aab3641fd4edb01d61e2f3f93a2c43aa72dd8ec4d2fb02078d0148fa1bf->enter($__internal_ad007aab3641fd4edb01d61e2f3f93a2c43aa72dd8ec4d2fb02078d0148fa1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_f1b3f00ca744dc6ede8af15f3b47aaff587e949d1f9c714032b816069c493018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b3f00ca744dc6ede8af15f3b47aaff587e949d1f9c714032b816069c493018->enter($__internal_f1b3f00ca744dc6ede8af15f3b47aaff587e949d1f9c714032b816069c493018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_f1b3f00ca744dc6ede8af15f3b47aaff587e949d1f9c714032b816069c493018->leave($__internal_f1b3f00ca744dc6ede8af15f3b47aaff587e949d1f9c714032b816069c493018_prof);

        
        $__internal_ad007aab3641fd4edb01d61e2f3f93a2c43aa72dd8ec4d2fb02078d0148fa1bf->leave($__internal_ad007aab3641fd4edb01d61e2f3f93a2c43aa72dd8ec4d2fb02078d0148fa1bf_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_067ff61024e60c40902ef1de2d6bb5d8746a188a5ebe5074171bfedf96c25bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067ff61024e60c40902ef1de2d6bb5d8746a188a5ebe5074171bfedf96c25bec->enter($__internal_067ff61024e60c40902ef1de2d6bb5d8746a188a5ebe5074171bfedf96c25bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_431400adb59be3ff7c3fb7ab882acfd9c02da668717fc224e748c319e29396cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431400adb59be3ff7c3fb7ab882acfd9c02da668717fc224e748c319e29396cf->enter($__internal_431400adb59be3ff7c3fb7ab882acfd9c02da668717fc224e748c319e29396cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            // line 28
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_431400adb59be3ff7c3fb7ab882acfd9c02da668717fc224e748c319e29396cf->leave($__internal_431400adb59be3ff7c3fb7ab882acfd9c02da668717fc224e748c319e29396cf_prof);

        
        $__internal_067ff61024e60c40902ef1de2d6bb5d8746a188a5ebe5074171bfedf96c25bec->leave($__internal_067ff61024e60c40902ef1de2d6bb5d8746a188a5ebe5074171bfedf96c25bec_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  133 => 28,  131 => 27,  123 => 26,  119 => 25,  115 => 24,  108 => 23,  99 => 22,  88 => 19,  85 => 18,  76 => 17,  60 => 13,  51 => 12,  41 => 22,  38 => 21,  36 => 17,  33 => 16,  31 => 12,  28 => 11,);
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

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{- per_page -}}
            </option>
        {% endfor %}
    </select>
{% endblock %}
", "SonataAdminBundle:Pager:base_results.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}
