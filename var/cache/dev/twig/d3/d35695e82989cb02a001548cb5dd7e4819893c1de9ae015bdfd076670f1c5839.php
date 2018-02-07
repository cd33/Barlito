<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_661ab18235e7f1e994733e6976c716f1fe79debf3d2b78d33f83172793baf799 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23ed58b4cb3eb00bde467f9dcdfff8d959b2d0fcddec44860aae64c5ca45fc9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ed58b4cb3eb00bde467f9dcdfff8d959b2d0fcddec44860aae64c5ca45fc9f->enter($__internal_23ed58b4cb3eb00bde467f9dcdfff8d959b2d0fcddec44860aae64c5ca45fc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_8a379cb1df34856897005473fd86d84735c390b679b8b8cfc4b8f4a4782adb32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a379cb1df34856897005473fd86d84735c390b679b8b8cfc4b8f4a4782adb32->enter($__internal_8a379cb1df34856897005473fd86d84735c390b679b8b8cfc4b8f4a4782adb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('date_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('time_widget', $context, $blocks);
        // line 95
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 133
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 179
        echo "
";
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('form_label', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('choice_label', $context, $blocks);
        // line 192
        echo "
";
        // line 193
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('radio_label', $context, $blocks);
        // line 204
        echo "
";
        // line 205
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 229
        echo "
";
        // line 231
        echo "
";
        // line 232
        $this->displayBlock('form_row', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('button_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('choice_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('date_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('time_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 265
        echo "
";
        // line 266
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('radio_row', $context, $blocks);
        // line 279
        echo "
";
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_23ed58b4cb3eb00bde467f9dcdfff8d959b2d0fcddec44860aae64c5ca45fc9f->leave($__internal_23ed58b4cb3eb00bde467f9dcdfff8d959b2d0fcddec44860aae64c5ca45fc9f_prof);

        
        $__internal_8a379cb1df34856897005473fd86d84735c390b679b8b8cfc4b8f4a4782adb32->leave($__internal_8a379cb1df34856897005473fd86d84735c390b679b8b8cfc4b8f4a4782adb32_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_67dbe8c617e8889a6d1e310c9ad9255abba90b4170ca31849d81bc46705947dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67dbe8c617e8889a6d1e310c9ad9255abba90b4170ca31849d81bc46705947dc->enter($__internal_67dbe8c617e8889a6d1e310c9ad9255abba90b4170ca31849d81bc46705947dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_643b10b8a1e32a666ec356e51c104fe77115035d002f70775a45d36e51bce1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643b10b8a1e32a666ec356e51c104fe77115035d002f70775a45d36e51bce1fa->enter($__internal_643b10b8a1e32a666ec356e51c104fe77115035d002f70775a45d36e51bce1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_643b10b8a1e32a666ec356e51c104fe77115035d002f70775a45d36e51bce1fa->leave($__internal_643b10b8a1e32a666ec356e51c104fe77115035d002f70775a45d36e51bce1fa_prof);

        
        $__internal_67dbe8c617e8889a6d1e310c9ad9255abba90b4170ca31849d81bc46705947dc->leave($__internal_67dbe8c617e8889a6d1e310c9ad9255abba90b4170ca31849d81bc46705947dc_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_0eb6ce4831f37df4b6407aa0f860de2a18f772512cacecd5188d19dadb615895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb6ce4831f37df4b6407aa0f860de2a18f772512cacecd5188d19dadb615895->enter($__internal_0eb6ce4831f37df4b6407aa0f860de2a18f772512cacecd5188d19dadb615895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6495a1ff7c4e196176160a625880e0d3844d3f3277e32c30311d72ece207864c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6495a1ff7c4e196176160a625880e0d3844d3f3277e32c30311d72ece207864c->enter($__internal_6495a1ff7c4e196176160a625880e0d3844d3f3277e32c30311d72ece207864c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_6495a1ff7c4e196176160a625880e0d3844d3f3277e32c30311d72ece207864c->leave($__internal_6495a1ff7c4e196176160a625880e0d3844d3f3277e32c30311d72ece207864c_prof);

        
        $__internal_0eb6ce4831f37df4b6407aa0f860de2a18f772512cacecd5188d19dadb615895->leave($__internal_0eb6ce4831f37df4b6407aa0f860de2a18f772512cacecd5188d19dadb615895_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e2ccb65a68ee710571c6f627709049abf0e5533f98f89a4361ecef32b7cf574f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ccb65a68ee710571c6f627709049abf0e5533f98f89a4361ecef32b7cf574f->enter($__internal_e2ccb65a68ee710571c6f627709049abf0e5533f98f89a4361ecef32b7cf574f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_321decc5137d237a0d63024660a962a3f55605ea159c4c076592993f576fe209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321decc5137d237a0d63024660a962a3f55605ea159c4c076592993f576fe209->enter($__internal_321decc5137d237a0d63024660a962a3f55605ea159c4c076592993f576fe209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_321decc5137d237a0d63024660a962a3f55605ea159c4c076592993f576fe209->leave($__internal_321decc5137d237a0d63024660a962a3f55605ea159c4c076592993f576fe209_prof);

        
        $__internal_e2ccb65a68ee710571c6f627709049abf0e5533f98f89a4361ecef32b7cf574f->leave($__internal_e2ccb65a68ee710571c6f627709049abf0e5533f98f89a4361ecef32b7cf574f_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_6fbe72e6f69b01361fdc64b74004c9b1ae529885b8c500e09e2bfd3ba9147243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fbe72e6f69b01361fdc64b74004c9b1ae529885b8c500e09e2bfd3ba9147243->enter($__internal_6fbe72e6f69b01361fdc64b74004c9b1ae529885b8c500e09e2bfd3ba9147243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_b797669259e6c5105eb70461820fc4b32e2324f187355261fbcaf4bfa386b3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b797669259e6c5105eb70461820fc4b32e2324f187355261fbcaf4bfa386b3e3->enter($__internal_b797669259e6c5105eb70461820fc4b32e2324f187355261fbcaf4bfa386b3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        $context["prepend"] =  !(is_string($__internal_640eafdc2deaa8695e7b52b6c0d587df9690f7a56de112a6b7b9fae180a14ece = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_15890022c5871e78823d6c77ce2480f1f310e3723cf1413b7ac9224123ec795f = "{{") && ('' === $__internal_15890022c5871e78823d6c77ce2480f1f310e3723cf1413b7ac9224123ec795f || 0 === strpos($__internal_640eafdc2deaa8695e7b52b6c0d587df9690f7a56de112a6b7b9fae180a14ece, $__internal_15890022c5871e78823d6c77ce2480f1f310e3723cf1413b7ac9224123ec795f)));
        // line 24
        echo "    ";
        $context["append"] =  !(is_string($__internal_92759e095193554b3222d924866dc4eb65272e6c18a708460909cf5141a41bb0 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_b860985d69af9afbe8ce51a365b7ea73f1c1d8cec6b3e0051c5c4544ae0dc0c4 = "}}") && ('' === $__internal_b860985d69af9afbe8ce51a365b7ea73f1c1d8cec6b3e0051c5c4544ae0dc0c4 || $__internal_b860985d69af9afbe8ce51a365b7ea73f1c1d8cec6b3e0051c5c4544ae0dc0c4 === substr($__internal_92759e095193554b3222d924866dc4eb65272e6c18a708460909cf5141a41bb0, -strlen($__internal_b860985d69af9afbe8ce51a365b7ea73f1c1d8cec6b3e0051c5c4544ae0dc0c4))));
        // line 25
        echo "    ";
        if (((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend")) || (isset($context["append"]) ? $context["append"] : $this->getContext($context, "append")))) {
            // line 26
            echo "        <div class=\"input-group\">
            ";
            // line 27
            if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
                // line 28
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 30
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 31
            if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
                // line 32
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 34
            echo "        </div>
    ";
        } else {
            // line 36
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_b797669259e6c5105eb70461820fc4b32e2324f187355261fbcaf4bfa386b3e3->leave($__internal_b797669259e6c5105eb70461820fc4b32e2324f187355261fbcaf4bfa386b3e3_prof);

        
        $__internal_6fbe72e6f69b01361fdc64b74004c9b1ae529885b8c500e09e2bfd3ba9147243->leave($__internal_6fbe72e6f69b01361fdc64b74004c9b1ae529885b8c500e09e2bfd3ba9147243_prof);

    }

    // line 40
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_5f7f5d7946e7cc5eef2aae6686b668140d881b40347ccadc802976e1a263a755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f7f5d7946e7cc5eef2aae6686b668140d881b40347ccadc802976e1a263a755->enter($__internal_5f7f5d7946e7cc5eef2aae6686b668140d881b40347ccadc802976e1a263a755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_75484d3666f42f34d63b3dc92b83ac4c61fd3ec3a4819c1b7fae87d245701008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75484d3666f42f34d63b3dc92b83ac4c61fd3ec3a4819c1b7fae87d245701008->enter($__internal_75484d3666f42f34d63b3dc92b83ac4c61fd3ec3a4819c1b7fae87d245701008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 41
        echo "<div class=\"input-group\">";
        // line 42
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 43
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_75484d3666f42f34d63b3dc92b83ac4c61fd3ec3a4819c1b7fae87d245701008->leave($__internal_75484d3666f42f34d63b3dc92b83ac4c61fd3ec3a4819c1b7fae87d245701008_prof);

        
        $__internal_5f7f5d7946e7cc5eef2aae6686b668140d881b40347ccadc802976e1a263a755->leave($__internal_5f7f5d7946e7cc5eef2aae6686b668140d881b40347ccadc802976e1a263a755_prof);

    }

    // line 47
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_51f662252380929f0e5d8d2e50c28b9446312a9f03254aaa0628354aa32a4fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f662252380929f0e5d8d2e50c28b9446312a9f03254aaa0628354aa32a4fa7->enter($__internal_51f662252380929f0e5d8d2e50c28b9446312a9f03254aaa0628354aa32a4fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_8edc7995e6720a94ef70b91c1023ace610e8219445b7102f5e09d24dde9ee6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8edc7995e6720a94ef70b91c1023ace610e8219445b7102f5e09d24dde9ee6a7->enter($__internal_8edc7995e6720a94ef70b91c1023ace610e8219445b7102f5e09d24dde9ee6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 48
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 49
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 51
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 52
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 53
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 54
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 55
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 56
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 57
            echo "</div>";
        }
        
        $__internal_8edc7995e6720a94ef70b91c1023ace610e8219445b7102f5e09d24dde9ee6a7->leave($__internal_8edc7995e6720a94ef70b91c1023ace610e8219445b7102f5e09d24dde9ee6a7_prof);

        
        $__internal_51f662252380929f0e5d8d2e50c28b9446312a9f03254aaa0628354aa32a4fa7->leave($__internal_51f662252380929f0e5d8d2e50c28b9446312a9f03254aaa0628354aa32a4fa7_prof);

    }

    // line 61
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_caea7a0e45a82724a79275f228f84ad6c35e26ccf5da1fb32077d6d645405156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caea7a0e45a82724a79275f228f84ad6c35e26ccf5da1fb32077d6d645405156->enter($__internal_caea7a0e45a82724a79275f228f84ad6c35e26ccf5da1fb32077d6d645405156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_c159be67bfe3b6d077ddee06ff5b6f559668858fb3cd857cdb30ef2dee7763e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c159be67bfe3b6d077ddee06ff5b6f559668858fb3cd857cdb30ef2dee7763e6->enter($__internal_c159be67bfe3b6d077ddee06ff5b6f559668858fb3cd857cdb30ef2dee7763e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 62
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 63
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 65
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 66
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 67
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 69
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 70
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 71
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 72
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 74
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 75
                echo "</div>";
            }
        }
        
        $__internal_c159be67bfe3b6d077ddee06ff5b6f559668858fb3cd857cdb30ef2dee7763e6->leave($__internal_c159be67bfe3b6d077ddee06ff5b6f559668858fb3cd857cdb30ef2dee7763e6_prof);

        
        $__internal_caea7a0e45a82724a79275f228f84ad6c35e26ccf5da1fb32077d6d645405156->leave($__internal_caea7a0e45a82724a79275f228f84ad6c35e26ccf5da1fb32077d6d645405156_prof);

    }

    // line 80
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_aa9985381a3431d4c1edfac71c0165e20df0f00c9f7fe98b8c631e2e8dfbb5ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9985381a3431d4c1edfac71c0165e20df0f00c9f7fe98b8c631e2e8dfbb5ad->enter($__internal_aa9985381a3431d4c1edfac71c0165e20df0f00c9f7fe98b8c631e2e8dfbb5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_564928672f21b5da774c5be04a402385991acc10f0269064620c523136e3cb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_564928672f21b5da774c5be04a402385991acc10f0269064620c523136e3cb6a->enter($__internal_564928672f21b5da774c5be04a402385991acc10f0269064620c523136e3cb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 81
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 82
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 84
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 85
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 86
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 89
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 90
                echo "</div>";
            }
        }
        
        $__internal_564928672f21b5da774c5be04a402385991acc10f0269064620c523136e3cb6a->leave($__internal_564928672f21b5da774c5be04a402385991acc10f0269064620c523136e3cb6a_prof);

        
        $__internal_aa9985381a3431d4c1edfac71c0165e20df0f00c9f7fe98b8c631e2e8dfbb5ad->leave($__internal_aa9985381a3431d4c1edfac71c0165e20df0f00c9f7fe98b8c631e2e8dfbb5ad_prof);

    }

    // line 95
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_392bc7e107a248e165d25f2e9039994df9dc130b166f1f0642bd0fb0e9fa8725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392bc7e107a248e165d25f2e9039994df9dc130b166f1f0642bd0fb0e9fa8725->enter($__internal_392bc7e107a248e165d25f2e9039994df9dc130b166f1f0642bd0fb0e9fa8725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_9fd2210780f49afbb8f5f22ae6772343aecc430eb0a56f3141ecc059dcb398ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd2210780f49afbb8f5f22ae6772343aecc430eb0a56f3141ecc059dcb398ab->enter($__internal_9fd2210780f49afbb8f5f22ae6772343aecc430eb0a56f3141ecc059dcb398ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 102
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 103
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 106
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 108
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 109
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 110
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 111
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 112
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 113
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 117
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 119
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 120
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 121
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 122
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 123
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 124
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 128
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 129
            echo "</div>";
        }
        
        $__internal_9fd2210780f49afbb8f5f22ae6772343aecc430eb0a56f3141ecc059dcb398ab->leave($__internal_9fd2210780f49afbb8f5f22ae6772343aecc430eb0a56f3141ecc059dcb398ab_prof);

        
        $__internal_392bc7e107a248e165d25f2e9039994df9dc130b166f1f0642bd0fb0e9fa8725->leave($__internal_392bc7e107a248e165d25f2e9039994df9dc130b166f1f0642bd0fb0e9fa8725_prof);

    }

    // line 133
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b9821145744e92ad24d1e623f08fec78c766820d2cdce0a2fbf273acdeb00d85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9821145744e92ad24d1e623f08fec78c766820d2cdce0a2fbf273acdeb00d85->enter($__internal_b9821145744e92ad24d1e623f08fec78c766820d2cdce0a2fbf273acdeb00d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_99273bf22a5343dcfa742802f8cb603abdfbde96e0edce183d44f744d51f76a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99273bf22a5343dcfa742802f8cb603abdfbde96e0edce183d44f744d51f76a0->enter($__internal_99273bf22a5343dcfa742802f8cb603abdfbde96e0edce183d44f744d51f76a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 134
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 135
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_99273bf22a5343dcfa742802f8cb603abdfbde96e0edce183d44f744d51f76a0->leave($__internal_99273bf22a5343dcfa742802f8cb603abdfbde96e0edce183d44f744d51f76a0_prof);

        
        $__internal_b9821145744e92ad24d1e623f08fec78c766820d2cdce0a2fbf273acdeb00d85->leave($__internal_b9821145744e92ad24d1e623f08fec78c766820d2cdce0a2fbf273acdeb00d85_prof);

    }

    // line 138
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7ca5832ca2d0438f6e65ef02486e91a12cd05fd743394a03e60f532e13bacbd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca5832ca2d0438f6e65ef02486e91a12cd05fd743394a03e60f532e13bacbd4->enter($__internal_7ca5832ca2d0438f6e65ef02486e91a12cd05fd743394a03e60f532e13bacbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_66afc34152336c195f5dcf402438f7ad46b39f6b9707dd186e39aae2446c3cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66afc34152336c195f5dcf402438f7ad46b39f6b9707dd186e39aae2446c3cec->enter($__internal_66afc34152336c195f5dcf402438f7ad46b39f6b9707dd186e39aae2446c3cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 139
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 141
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 142
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 143
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 147
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 149
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 150
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 151
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "</div>";
        }
        
        $__internal_66afc34152336c195f5dcf402438f7ad46b39f6b9707dd186e39aae2446c3cec->leave($__internal_66afc34152336c195f5dcf402438f7ad46b39f6b9707dd186e39aae2446c3cec_prof);

        
        $__internal_7ca5832ca2d0438f6e65ef02486e91a12cd05fd743394a03e60f532e13bacbd4->leave($__internal_7ca5832ca2d0438f6e65ef02486e91a12cd05fd743394a03e60f532e13bacbd4_prof);

    }

    // line 158
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a9b5e4acd9f351eb84e08669378f560fb179c95a6607f1edc9f5462bfefc8c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b5e4acd9f351eb84e08669378f560fb179c95a6607f1edc9f5462bfefc8c63->enter($__internal_a9b5e4acd9f351eb84e08669378f560fb179c95a6607f1edc9f5462bfefc8c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_0bcb9dee45d66ff5ed71e0b151961aa3d9c3c2853509d55f18c821b4f6b6d499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bcb9dee45d66ff5ed71e0b151961aa3d9c3c2853509d55f18c821b4f6b6d499->enter($__internal_0bcb9dee45d66ff5ed71e0b151961aa3d9c3c2853509d55f18c821b4f6b6d499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 159
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 160
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 161
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 163
            echo "<div class=\"checkbox\">";
            // line 164
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 165
            echo "</div>";
        }
        
        $__internal_0bcb9dee45d66ff5ed71e0b151961aa3d9c3c2853509d55f18c821b4f6b6d499->leave($__internal_0bcb9dee45d66ff5ed71e0b151961aa3d9c3c2853509d55f18c821b4f6b6d499_prof);

        
        $__internal_a9b5e4acd9f351eb84e08669378f560fb179c95a6607f1edc9f5462bfefc8c63->leave($__internal_a9b5e4acd9f351eb84e08669378f560fb179c95a6607f1edc9f5462bfefc8c63_prof);

    }

    // line 169
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_37b0ea6a883d7528928c5a88d8b588bd768e348331fd0d0611135ec459da4bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b0ea6a883d7528928c5a88d8b588bd768e348331fd0d0611135ec459da4bd4->enter($__internal_37b0ea6a883d7528928c5a88d8b588bd768e348331fd0d0611135ec459da4bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_05e9afecc51f628fc8f3477fd3339b9b47fff6554454b9a7e721049bc8dd6971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e9afecc51f628fc8f3477fd3339b9b47fff6554454b9a7e721049bc8dd6971->enter($__internal_05e9afecc51f628fc8f3477fd3339b9b47fff6554454b9a7e721049bc8dd6971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 170
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 171
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 172
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 174
            echo "<div class=\"radio\">";
            // line 175
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 176
            echo "</div>";
        }
        
        $__internal_05e9afecc51f628fc8f3477fd3339b9b47fff6554454b9a7e721049bc8dd6971->leave($__internal_05e9afecc51f628fc8f3477fd3339b9b47fff6554454b9a7e721049bc8dd6971_prof);

        
        $__internal_37b0ea6a883d7528928c5a88d8b588bd768e348331fd0d0611135ec459da4bd4->leave($__internal_37b0ea6a883d7528928c5a88d8b588bd768e348331fd0d0611135ec459da4bd4_prof);

    }

    // line 182
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_12d6ea01fb7300f2b1f25a523c3713883fc77e534dc40558428a641d2af8686d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12d6ea01fb7300f2b1f25a523c3713883fc77e534dc40558428a641d2af8686d->enter($__internal_12d6ea01fb7300f2b1f25a523c3713883fc77e534dc40558428a641d2af8686d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_81e09c0e41e06e959bb03a687a3bd415c4107bc668cff304ef4c3893c481cf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e09c0e41e06e959bb03a687a3bd415c4107bc668cff304ef4c3893c481cf47->enter($__internal_81e09c0e41e06e959bb03a687a3bd415c4107bc668cff304ef4c3893c481cf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 183
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 184
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_81e09c0e41e06e959bb03a687a3bd415c4107bc668cff304ef4c3893c481cf47->leave($__internal_81e09c0e41e06e959bb03a687a3bd415c4107bc668cff304ef4c3893c481cf47_prof);

        
        $__internal_12d6ea01fb7300f2b1f25a523c3713883fc77e534dc40558428a641d2af8686d->leave($__internal_12d6ea01fb7300f2b1f25a523c3713883fc77e534dc40558428a641d2af8686d_prof);

    }

    // line 187
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_69c69240af6b7b5905969b7c18d57733331ebb09fcce1ea53d4705704d92af06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c69240af6b7b5905969b7c18d57733331ebb09fcce1ea53d4705704d92af06->enter($__internal_69c69240af6b7b5905969b7c18d57733331ebb09fcce1ea53d4705704d92af06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f337177daef3a33b0fd0469b84a7cdaa4c9907989e9ec3d83f50fd934f270653 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f337177daef3a33b0fd0469b84a7cdaa4c9907989e9ec3d83f50fd934f270653->enter($__internal_f337177daef3a33b0fd0469b84a7cdaa4c9907989e9ec3d83f50fd934f270653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 190
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f337177daef3a33b0fd0469b84a7cdaa4c9907989e9ec3d83f50fd934f270653->leave($__internal_f337177daef3a33b0fd0469b84a7cdaa4c9907989e9ec3d83f50fd934f270653_prof);

        
        $__internal_69c69240af6b7b5905969b7c18d57733331ebb09fcce1ea53d4705704d92af06->leave($__internal_69c69240af6b7b5905969b7c18d57733331ebb09fcce1ea53d4705704d92af06_prof);

    }

    // line 193
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ef0e846ef60913346055761e70feff050681b9cfd339dab2da65846b7c6279fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0e846ef60913346055761e70feff050681b9cfd339dab2da65846b7c6279fa->enter($__internal_ef0e846ef60913346055761e70feff050681b9cfd339dab2da65846b7c6279fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_977e26abddba7176cad5c9fe7c9add4e60b14a853566e5963d011005bc63dbb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977e26abddba7176cad5c9fe7c9add4e60b14a853566e5963d011005bc63dbb8->enter($__internal_977e26abddba7176cad5c9fe7c9add4e60b14a853566e5963d011005bc63dbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 194
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_977e26abddba7176cad5c9fe7c9add4e60b14a853566e5963d011005bc63dbb8->leave($__internal_977e26abddba7176cad5c9fe7c9add4e60b14a853566e5963d011005bc63dbb8_prof);

        
        $__internal_ef0e846ef60913346055761e70feff050681b9cfd339dab2da65846b7c6279fa->leave($__internal_ef0e846ef60913346055761e70feff050681b9cfd339dab2da65846b7c6279fa_prof);

    }

    // line 199
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_8ad2061bc641ff462b400a454423f71ea085ad9df994b195cce7e3b7c4a81db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad2061bc641ff462b400a454423f71ea085ad9df994b195cce7e3b7c4a81db3->enter($__internal_8ad2061bc641ff462b400a454423f71ea085ad9df994b195cce7e3b7c4a81db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_04eadf85ad6946add55960fccc1f957921b5958e403eb1b9cfd6ccee6365e434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04eadf85ad6946add55960fccc1f957921b5958e403eb1b9cfd6ccee6365e434->enter($__internal_04eadf85ad6946add55960fccc1f957921b5958e403eb1b9cfd6ccee6365e434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 200
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 202
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_04eadf85ad6946add55960fccc1f957921b5958e403eb1b9cfd6ccee6365e434->leave($__internal_04eadf85ad6946add55960fccc1f957921b5958e403eb1b9cfd6ccee6365e434_prof);

        
        $__internal_8ad2061bc641ff462b400a454423f71ea085ad9df994b195cce7e3b7c4a81db3->leave($__internal_8ad2061bc641ff462b400a454423f71ea085ad9df994b195cce7e3b7c4a81db3_prof);

    }

    // line 205
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_ed5c157360883eaf17de5b00456480990ceded6c6aaff847c3b83a720186a1c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed5c157360883eaf17de5b00456480990ceded6c6aaff847c3b83a720186a1c3->enter($__internal_ed5c157360883eaf17de5b00456480990ceded6c6aaff847c3b83a720186a1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_31e182d741be6de2b91aa2078a051d5979a4281159c4112e95da7e48d8d3f4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e182d741be6de2b91aa2078a051d5979a4281159c4112e95da7e48d8d3f4f4->enter($__internal_31e182d741be6de2b91aa2078a051d5979a4281159c4112e95da7e48d8d3f4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 206
        echo "    ";
        // line 207
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 208
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 209
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 212
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 213
                echo "        ";
            }
            // line 214
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 215
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 216
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 217
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 218
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 221
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 224
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 225
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 226
            echo "</label>
    ";
        }
        
        $__internal_31e182d741be6de2b91aa2078a051d5979a4281159c4112e95da7e48d8d3f4f4->leave($__internal_31e182d741be6de2b91aa2078a051d5979a4281159c4112e95da7e48d8d3f4f4_prof);

        
        $__internal_ed5c157360883eaf17de5b00456480990ceded6c6aaff847c3b83a720186a1c3->leave($__internal_ed5c157360883eaf17de5b00456480990ceded6c6aaff847c3b83a720186a1c3_prof);

    }

    // line 232
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c75c65351382f496fed2ec4714a5c423424cd280b9310d6ea018fd7d1a4e213a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c75c65351382f496fed2ec4714a5c423424cd280b9310d6ea018fd7d1a4e213a->enter($__internal_c75c65351382f496fed2ec4714a5c423424cd280b9310d6ea018fd7d1a4e213a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f7619d64619bb7de20e0acbfc8ead86016e181fd25a76fc593c9dc79aa12d5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7619d64619bb7de20e0acbfc8ead86016e181fd25a76fc593c9dc79aa12d5e8->enter($__internal_f7619d64619bb7de20e0acbfc8ead86016e181fd25a76fc593c9dc79aa12d5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 233
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 236
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 237
        echo "</div>";
        
        $__internal_f7619d64619bb7de20e0acbfc8ead86016e181fd25a76fc593c9dc79aa12d5e8->leave($__internal_f7619d64619bb7de20e0acbfc8ead86016e181fd25a76fc593c9dc79aa12d5e8_prof);

        
        $__internal_c75c65351382f496fed2ec4714a5c423424cd280b9310d6ea018fd7d1a4e213a->leave($__internal_c75c65351382f496fed2ec4714a5c423424cd280b9310d6ea018fd7d1a4e213a_prof);

    }

    // line 240
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_12ded0c48772203222858960a2c04d5d65d3af07318d3272c597e91c1cb01a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ded0c48772203222858960a2c04d5d65d3af07318d3272c597e91c1cb01a9f->enter($__internal_12ded0c48772203222858960a2c04d5d65d3af07318d3272c597e91c1cb01a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_dbf1c431e8e759ada0b114b515177a8a0695010b588920ad57006f3df6001ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf1c431e8e759ada0b114b515177a8a0695010b588920ad57006f3df6001ee8->enter($__internal_dbf1c431e8e759ada0b114b515177a8a0695010b588920ad57006f3df6001ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 241
        echo "<div class=\"form-group\">";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_dbf1c431e8e759ada0b114b515177a8a0695010b588920ad57006f3df6001ee8->leave($__internal_dbf1c431e8e759ada0b114b515177a8a0695010b588920ad57006f3df6001ee8_prof);

        
        $__internal_12ded0c48772203222858960a2c04d5d65d3af07318d3272c597e91c1cb01a9f->leave($__internal_12ded0c48772203222858960a2c04d5d65d3af07318d3272c597e91c1cb01a9f_prof);

    }

    // line 246
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_c8dd8bb3594a47affde58beb37a76f5ccf9397def076cafc79e8d237965a885d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8dd8bb3594a47affde58beb37a76f5ccf9397def076cafc79e8d237965a885d->enter($__internal_c8dd8bb3594a47affde58beb37a76f5ccf9397def076cafc79e8d237965a885d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_5923da3942d33fbac65cd0e86cddbe0595c3af436a49a56411346ff7f485b612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5923da3942d33fbac65cd0e86cddbe0595c3af436a49a56411346ff7f485b612->enter($__internal_5923da3942d33fbac65cd0e86cddbe0595c3af436a49a56411346ff7f485b612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5923da3942d33fbac65cd0e86cddbe0595c3af436a49a56411346ff7f485b612->leave($__internal_5923da3942d33fbac65cd0e86cddbe0595c3af436a49a56411346ff7f485b612_prof);

        
        $__internal_c8dd8bb3594a47affde58beb37a76f5ccf9397def076cafc79e8d237965a885d->leave($__internal_c8dd8bb3594a47affde58beb37a76f5ccf9397def076cafc79e8d237965a885d_prof);

    }

    // line 251
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_5764c76863de3af5146e063da86e9da5f899756e48e081074d2ac4a9fc0f81c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5764c76863de3af5146e063da86e9da5f899756e48e081074d2ac4a9fc0f81c9->enter($__internal_5764c76863de3af5146e063da86e9da5f899756e48e081074d2ac4a9fc0f81c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_04aa074d926dfb6b0ba5ae39279a6cb97508453a4c1d48c2531e0c231a86e3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04aa074d926dfb6b0ba5ae39279a6cb97508453a4c1d48c2531e0c231a86e3a8->enter($__internal_04aa074d926dfb6b0ba5ae39279a6cb97508453a4c1d48c2531e0c231a86e3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_04aa074d926dfb6b0ba5ae39279a6cb97508453a4c1d48c2531e0c231a86e3a8->leave($__internal_04aa074d926dfb6b0ba5ae39279a6cb97508453a4c1d48c2531e0c231a86e3a8_prof);

        
        $__internal_5764c76863de3af5146e063da86e9da5f899756e48e081074d2ac4a9fc0f81c9->leave($__internal_5764c76863de3af5146e063da86e9da5f899756e48e081074d2ac4a9fc0f81c9_prof);

    }

    // line 256
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_57360fadf13b4935b9e08b6b55a31246b225b3b24e6239337d3701e704b0941c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57360fadf13b4935b9e08b6b55a31246b225b3b24e6239337d3701e704b0941c->enter($__internal_57360fadf13b4935b9e08b6b55a31246b225b3b24e6239337d3701e704b0941c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_390893eb3caf650a393408b21d177be04cbc03b8a30011129141cb6aad2546fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390893eb3caf650a393408b21d177be04cbc03b8a30011129141cb6aad2546fd->enter($__internal_390893eb3caf650a393408b21d177be04cbc03b8a30011129141cb6aad2546fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_390893eb3caf650a393408b21d177be04cbc03b8a30011129141cb6aad2546fd->leave($__internal_390893eb3caf650a393408b21d177be04cbc03b8a30011129141cb6aad2546fd_prof);

        
        $__internal_57360fadf13b4935b9e08b6b55a31246b225b3b24e6239337d3701e704b0941c->leave($__internal_57360fadf13b4935b9e08b6b55a31246b225b3b24e6239337d3701e704b0941c_prof);

    }

    // line 261
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_bdee2c6706dc1171b661b1ed37c83aa3bc7849018980a6cf45179c884d4ac004 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdee2c6706dc1171b661b1ed37c83aa3bc7849018980a6cf45179c884d4ac004->enter($__internal_bdee2c6706dc1171b661b1ed37c83aa3bc7849018980a6cf45179c884d4ac004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_4e67c41b9676c9cb13ebc22c4d1da83d451254e5f699d52dbbbb6d94817ab849 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e67c41b9676c9cb13ebc22c4d1da83d451254e5f699d52dbbbb6d94817ab849->enter($__internal_4e67c41b9676c9cb13ebc22c4d1da83d451254e5f699d52dbbbb6d94817ab849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 262
        $context["force_error"] = true;
        // line 263
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4e67c41b9676c9cb13ebc22c4d1da83d451254e5f699d52dbbbb6d94817ab849->leave($__internal_4e67c41b9676c9cb13ebc22c4d1da83d451254e5f699d52dbbbb6d94817ab849_prof);

        
        $__internal_bdee2c6706dc1171b661b1ed37c83aa3bc7849018980a6cf45179c884d4ac004->leave($__internal_bdee2c6706dc1171b661b1ed37c83aa3bc7849018980a6cf45179c884d4ac004_prof);

    }

    // line 266
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_35052e531e277fe59e1106f10f0d444138fc539e80b48628fa1f0ee0946e7560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35052e531e277fe59e1106f10f0d444138fc539e80b48628fa1f0ee0946e7560->enter($__internal_35052e531e277fe59e1106f10f0d444138fc539e80b48628fa1f0ee0946e7560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_83acea507d97c4245a585eca05554fdb7175a9b816e8b45c2a1eaf52ebf0b298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83acea507d97c4245a585eca05554fdb7175a9b816e8b45c2a1eaf52ebf0b298->enter($__internal_83acea507d97c4245a585eca05554fdb7175a9b816e8b45c2a1eaf52ebf0b298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 267
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 270
        echo "</div>";
        
        $__internal_83acea507d97c4245a585eca05554fdb7175a9b816e8b45c2a1eaf52ebf0b298->leave($__internal_83acea507d97c4245a585eca05554fdb7175a9b816e8b45c2a1eaf52ebf0b298_prof);

        
        $__internal_35052e531e277fe59e1106f10f0d444138fc539e80b48628fa1f0ee0946e7560->leave($__internal_35052e531e277fe59e1106f10f0d444138fc539e80b48628fa1f0ee0946e7560_prof);

    }

    // line 273
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ad12ef7e4e3a37aed51d72f9cee5e98fdd7ee25ee22dab45ed3552ec4c8870b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad12ef7e4e3a37aed51d72f9cee5e98fdd7ee25ee22dab45ed3552ec4c8870b6->enter($__internal_ad12ef7e4e3a37aed51d72f9cee5e98fdd7ee25ee22dab45ed3552ec4c8870b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_96f609b4b79851b58a343e851ed1e6848ba35455503722dd4659490d1871180c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f609b4b79851b58a343e851ed1e6848ba35455503722dd4659490d1871180c->enter($__internal_96f609b4b79851b58a343e851ed1e6848ba35455503722dd4659490d1871180c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 274
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 277
        echo "</div>";
        
        $__internal_96f609b4b79851b58a343e851ed1e6848ba35455503722dd4659490d1871180c->leave($__internal_96f609b4b79851b58a343e851ed1e6848ba35455503722dd4659490d1871180c_prof);

        
        $__internal_ad12ef7e4e3a37aed51d72f9cee5e98fdd7ee25ee22dab45ed3552ec4c8870b6->leave($__internal_ad12ef7e4e3a37aed51d72f9cee5e98fdd7ee25ee22dab45ed3552ec4c8870b6_prof);

    }

    // line 282
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_7840de11d231912666abf71d506350bc8e949a5bfafc13d8946754fa48b5f217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7840de11d231912666abf71d506350bc8e949a5bfafc13d8946754fa48b5f217->enter($__internal_7840de11d231912666abf71d506350bc8e949a5bfafc13d8946754fa48b5f217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_4bd9d0d99c49066ea52d76c052539ce4674ca4f1c86875f8f00cd242031e0317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd9d0d99c49066ea52d76c052539ce4674ca4f1c86875f8f00cd242031e0317->enter($__internal_4bd9d0d99c49066ea52d76c052539ce4674ca4f1c86875f8f00cd242031e0317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 283
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 284
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 285
            echo "    <ul class=\"list-unstyled\">";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 287
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            echo "</ul>
    ";
            // line 290
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_4bd9d0d99c49066ea52d76c052539ce4674ca4f1c86875f8f00cd242031e0317->leave($__internal_4bd9d0d99c49066ea52d76c052539ce4674ca4f1c86875f8f00cd242031e0317_prof);

        
        $__internal_7840de11d231912666abf71d506350bc8e949a5bfafc13d8946754fa48b5f217->leave($__internal_7840de11d231912666abf71d506350bc8e949a5bfafc13d8946754fa48b5f217_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1149 => 290,  1146 => 289,  1138 => 287,  1134 => 286,  1132 => 285,  1126 => 284,  1124 => 283,  1115 => 282,  1105 => 277,  1103 => 276,  1101 => 275,  1095 => 274,  1086 => 273,  1076 => 270,  1074 => 269,  1072 => 268,  1066 => 267,  1057 => 266,  1047 => 263,  1045 => 262,  1036 => 261,  1026 => 258,  1024 => 257,  1015 => 256,  1005 => 253,  1003 => 252,  994 => 251,  984 => 248,  982 => 247,  973 => 246,  963 => 243,  961 => 242,  959 => 241,  950 => 240,  940 => 237,  938 => 236,  936 => 235,  934 => 234,  928 => 233,  919 => 232,  907 => 226,  903 => 225,  888 => 224,  884 => 221,  881 => 218,  880 => 217,  879 => 216,  877 => 215,  874 => 214,  871 => 213,  868 => 212,  865 => 211,  862 => 210,  859 => 209,  856 => 208,  853 => 207,  851 => 206,  842 => 205,  832 => 202,  830 => 200,  821 => 199,  811 => 196,  809 => 194,  800 => 193,  790 => 190,  788 => 189,  779 => 187,  769 => 184,  767 => 183,  758 => 182,  747 => 176,  745 => 175,  743 => 174,  740 => 172,  738 => 171,  736 => 170,  727 => 169,  716 => 165,  714 => 164,  712 => 163,  709 => 161,  707 => 160,  705 => 159,  696 => 158,  685 => 154,  679 => 151,  678 => 150,  677 => 149,  673 => 148,  669 => 147,  662 => 143,  661 => 142,  660 => 141,  656 => 140,  654 => 139,  645 => 138,  635 => 135,  633 => 134,  624 => 133,  613 => 129,  609 => 128,  604 => 124,  598 => 123,  592 => 122,  586 => 121,  580 => 120,  574 => 119,  568 => 118,  562 => 117,  557 => 113,  551 => 112,  545 => 111,  539 => 110,  533 => 109,  527 => 108,  521 => 107,  515 => 106,  510 => 103,  507 => 102,  505 => 101,  501 => 100,  499 => 99,  496 => 97,  494 => 96,  485 => 95,  473 => 90,  470 => 89,  460 => 88,  455 => 86,  453 => 85,  451 => 84,  448 => 82,  446 => 81,  437 => 80,  425 => 75,  423 => 74,  421 => 72,  420 => 71,  419 => 70,  418 => 69,  413 => 67,  411 => 66,  409 => 65,  406 => 63,  404 => 62,  395 => 61,  384 => 57,  382 => 56,  380 => 55,  378 => 54,  376 => 53,  372 => 52,  370 => 51,  367 => 49,  365 => 48,  356 => 47,  345 => 43,  343 => 42,  341 => 41,  332 => 40,  321 => 36,  317 => 34,  311 => 32,  309 => 31,  307 => 30,  301 => 28,  299 => 27,  296 => 26,  293 => 25,  290 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 282,  200 => 281,  197 => 279,  195 => 273,  192 => 272,  190 => 266,  187 => 265,  185 => 261,  182 => 260,  180 => 256,  177 => 255,  175 => 251,  172 => 250,  170 => 246,  167 => 245,  165 => 240,  162 => 239,  160 => 232,  157 => 231,  154 => 229,  152 => 205,  149 => 204,  147 => 199,  144 => 198,  142 => 193,  139 => 192,  137 => 187,  134 => 186,  132 => 182,  129 => 181,  126 => 179,  124 => 169,  121 => 168,  119 => 158,  116 => 157,  114 => 138,  111 => 137,  109 => 133,  107 => 95,  105 => 80,  102 => 79,  100 => 61,  97 => 60,  95 => 47,  92 => 46,  90 => 40,  87 => 39,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
