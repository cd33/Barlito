<?php

/* form_table_layout.html.twig */
class __TwigTemplate_f6625bdb9ac195ed335950684aa90317239914ee1e3a958eb766c4f4e72807b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1c4ca14ce1108c45545dea973bbc05ae6adf3976b412a229f5015b63dcc8c7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c4ca14ce1108c45545dea973bbc05ae6adf3976b412a229f5015b63dcc8c7f->enter($__internal_f1c4ca14ce1108c45545dea973bbc05ae6adf3976b412a229f5015b63dcc8c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_8a43fb4ec171e5939ca1256551219a93fc24f933b1d7008cf3483396f1aa3e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a43fb4ec171e5939ca1256551219a93fc24f933b1d7008cf3483396f1aa3e62->enter($__internal_8a43fb4ec171e5939ca1256551219a93fc24f933b1d7008cf3483396f1aa3e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_f1c4ca14ce1108c45545dea973bbc05ae6adf3976b412a229f5015b63dcc8c7f->leave($__internal_f1c4ca14ce1108c45545dea973bbc05ae6adf3976b412a229f5015b63dcc8c7f_prof);

        
        $__internal_8a43fb4ec171e5939ca1256551219a93fc24f933b1d7008cf3483396f1aa3e62->leave($__internal_8a43fb4ec171e5939ca1256551219a93fc24f933b1d7008cf3483396f1aa3e62_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_6cac307b443c4bba2d444aa7fd716fc4c18d67612b1694fb31eaa25e6a543881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cac307b443c4bba2d444aa7fd716fc4c18d67612b1694fb31eaa25e6a543881->enter($__internal_6cac307b443c4bba2d444aa7fd716fc4c18d67612b1694fb31eaa25e6a543881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7077ad59b0ca7be3690a543e5575248c55ff5a5618060cfba45a2a7ddd97c1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7077ad59b0ca7be3690a543e5575248c55ff5a5618060cfba45a2a7ddd97c1ce->enter($__internal_7077ad59b0ca7be3690a543e5575248c55ff5a5618060cfba45a2a7ddd97c1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_7077ad59b0ca7be3690a543e5575248c55ff5a5618060cfba45a2a7ddd97c1ce->leave($__internal_7077ad59b0ca7be3690a543e5575248c55ff5a5618060cfba45a2a7ddd97c1ce_prof);

        
        $__internal_6cac307b443c4bba2d444aa7fd716fc4c18d67612b1694fb31eaa25e6a543881->leave($__internal_6cac307b443c4bba2d444aa7fd716fc4c18d67612b1694fb31eaa25e6a543881_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_aa149328ca1ee51cc84f74640c8b6d63ac1776bdb5af5c6299b9f8fd35032af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa149328ca1ee51cc84f74640c8b6d63ac1776bdb5af5c6299b9f8fd35032af6->enter($__internal_aa149328ca1ee51cc84f74640c8b6d63ac1776bdb5af5c6299b9f8fd35032af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_9123d02c072bb868d4971ad6aa011bc71ca00c0c43b79a019eda60eb2d1d9f8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9123d02c072bb868d4971ad6aa011bc71ca00c0c43b79a019eda60eb2d1d9f8a->enter($__internal_9123d02c072bb868d4971ad6aa011bc71ca00c0c43b79a019eda60eb2d1d9f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_9123d02c072bb868d4971ad6aa011bc71ca00c0c43b79a019eda60eb2d1d9f8a->leave($__internal_9123d02c072bb868d4971ad6aa011bc71ca00c0c43b79a019eda60eb2d1d9f8a_prof);

        
        $__internal_aa149328ca1ee51cc84f74640c8b6d63ac1776bdb5af5c6299b9f8fd35032af6->leave($__internal_aa149328ca1ee51cc84f74640c8b6d63ac1776bdb5af5c6299b9f8fd35032af6_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_5d8ccae068c4d1d00256d878cd72b7f6ef93015e96219522ec544e200ce00986 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d8ccae068c4d1d00256d878cd72b7f6ef93015e96219522ec544e200ce00986->enter($__internal_5d8ccae068c4d1d00256d878cd72b7f6ef93015e96219522ec544e200ce00986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_ff40ccbaa29a85d60f99a657df9c9411fd40cb0addbb14ac814bd179363e4a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff40ccbaa29a85d60f99a657df9c9411fd40cb0addbb14ac814bd179363e4a1f->enter($__internal_ff40ccbaa29a85d60f99a657df9c9411fd40cb0addbb14ac814bd179363e4a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_ff40ccbaa29a85d60f99a657df9c9411fd40cb0addbb14ac814bd179363e4a1f->leave($__internal_ff40ccbaa29a85d60f99a657df9c9411fd40cb0addbb14ac814bd179363e4a1f_prof);

        
        $__internal_5d8ccae068c4d1d00256d878cd72b7f6ef93015e96219522ec544e200ce00986->leave($__internal_5d8ccae068c4d1d00256d878cd72b7f6ef93015e96219522ec544e200ce00986_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_4042f4855d4eb0b079cbaa65e2846c56e48719503163a457fa4fa4add7fef43d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4042f4855d4eb0b079cbaa65e2846c56e48719503163a457fa4fa4add7fef43d->enter($__internal_4042f4855d4eb0b079cbaa65e2846c56e48719503163a457fa4fa4add7fef43d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_ca6af4ef5b806d70042c460bc7edcaca7130b2dc2028e9c157492c53e998e2fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6af4ef5b806d70042c460bc7edcaca7130b2dc2028e9c157492c53e998e2fe->enter($__internal_ca6af4ef5b806d70042c460bc7edcaca7130b2dc2028e9c157492c53e998e2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_ca6af4ef5b806d70042c460bc7edcaca7130b2dc2028e9c157492c53e998e2fe->leave($__internal_ca6af4ef5b806d70042c460bc7edcaca7130b2dc2028e9c157492c53e998e2fe_prof);

        
        $__internal_4042f4855d4eb0b079cbaa65e2846c56e48719503163a457fa4fa4add7fef43d->leave($__internal_4042f4855d4eb0b079cbaa65e2846c56e48719503163a457fa4fa4add7fef43d_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
