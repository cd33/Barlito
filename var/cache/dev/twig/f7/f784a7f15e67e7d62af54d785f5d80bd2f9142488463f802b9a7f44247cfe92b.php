<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_1bb33c7d4c5f90b75a86dd5e864e8624ab6708200fb8a190192fb76f968e0e8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
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
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5d0b09b074c6b139ab6c1e4676fc16d9a22d4b1a84a17ab4e61cfeb42ce4863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d0b09b074c6b139ab6c1e4676fc16d9a22d4b1a84a17ab4e61cfeb42ce4863->enter($__internal_a5d0b09b074c6b139ab6c1e4676fc16d9a22d4b1a84a17ab4e61cfeb42ce4863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_cd72462dff24139e1959cd07738f5dec79040e2ded5bdc9b3f2890cb9891433d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd72462dff24139e1959cd07738f5dec79040e2ded5bdc9b3f2890cb9891433d->enter($__internal_cd72462dff24139e1959cd07738f5dec79040e2ded5bdc9b3f2890cb9891433d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5d0b09b074c6b139ab6c1e4676fc16d9a22d4b1a84a17ab4e61cfeb42ce4863->leave($__internal_a5d0b09b074c6b139ab6c1e4676fc16d9a22d4b1a84a17ab4e61cfeb42ce4863_prof);

        
        $__internal_cd72462dff24139e1959cd07738f5dec79040e2ded5bdc9b3f2890cb9891433d->leave($__internal_cd72462dff24139e1959cd07738f5dec79040e2ded5bdc9b3f2890cb9891433d_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_85e33769030c700a7b5b0bf74eaf4731c22897648b11a81a34338dda5bdae03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e33769030c700a7b5b0bf74eaf4731c22897648b11a81a34338dda5bdae03a->enter($__internal_85e33769030c700a7b5b0bf74eaf4731c22897648b11a81a34338dda5bdae03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_46500b7c3604cb454e1a7965ef4d5fa6bca23aa79dbead318dedd85d24f760ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46500b7c3604cb454e1a7965ef4d5fa6bca23aa79dbead318dedd85d24f760ea->enter($__internal_46500b7c3604cb454e1a7965ef4d5fa6bca23aa79dbead318dedd85d24f760ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_46500b7c3604cb454e1a7965ef4d5fa6bca23aa79dbead318dedd85d24f760ea->leave($__internal_46500b7c3604cb454e1a7965ef4d5fa6bca23aa79dbead318dedd85d24f760ea_prof);

        
        $__internal_85e33769030c700a7b5b0bf74eaf4731c22897648b11a81a34338dda5bdae03a->leave($__internal_85e33769030c700a7b5b0bf74eaf4731c22897648b11a81a34338dda5bdae03a_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_8c6481d32f177e94218bb597c7f1232f46478b7a1757de296ea9c049373d1b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6481d32f177e94218bb597c7f1232f46478b7a1757de296ea9c049373d1b02->enter($__internal_8c6481d32f177e94218bb597c7f1232f46478b7a1757de296ea9c049373d1b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_8d03fcd3fb8516a301dc392c284c8d14c6108eb7d0c93e0abbcd27ca62ffaa7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d03fcd3fb8516a301dc392c284c8d14c6108eb7d0c93e0abbcd27ca62ffaa7d->enter($__internal_8d03fcd3fb8516a301dc392c284c8d14c6108eb7d0c93e0abbcd27ca62ffaa7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_8d03fcd3fb8516a301dc392c284c8d14c6108eb7d0c93e0abbcd27ca62ffaa7d->leave($__internal_8d03fcd3fb8516a301dc392c284c8d14c6108eb7d0c93e0abbcd27ca62ffaa7d_prof);

        
        $__internal_8c6481d32f177e94218bb597c7f1232f46478b7a1757de296ea9c049373d1b02->leave($__internal_8c6481d32f177e94218bb597c7f1232f46478b7a1757de296ea9c049373d1b02_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1e881f30d182462589cc73eff4b6c8237e5ae48084c10a4f14c9d5f1eb482860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e881f30d182462589cc73eff4b6c8237e5ae48084c10a4f14c9d5f1eb482860->enter($__internal_1e881f30d182462589cc73eff4b6c8237e5ae48084c10a4f14c9d5f1eb482860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_bcdab99fa5ca0dcf27c64dd37dba3aec02f497b80010bffd3e09a7aaed196a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdab99fa5ca0dcf27c64dd37dba3aec02f497b80010bffd3e09a7aaed196a07->enter($__internal_bcdab99fa5ca0dcf27c64dd37dba3aec02f497b80010bffd3e09a7aaed196a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_bcdab99fa5ca0dcf27c64dd37dba3aec02f497b80010bffd3e09a7aaed196a07->leave($__internal_bcdab99fa5ca0dcf27c64dd37dba3aec02f497b80010bffd3e09a7aaed196a07_prof);

        
        $__internal_1e881f30d182462589cc73eff4b6c8237e5ae48084c10a4f14c9d5f1eb482860->leave($__internal_1e881f30d182462589cc73eff4b6c8237e5ae48084c10a4f14c9d5f1eb482860_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_2f9033aa0947a4885f79c10c8a4c56f8996d497eb31ff618edce2d41c2696158 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9033aa0947a4885f79c10c8a4c56f8996d497eb31ff618edce2d41c2696158->enter($__internal_2f9033aa0947a4885f79c10c8a4c56f8996d497eb31ff618edce2d41c2696158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_01f8769c7fe99f9314058e0e9780ca4b16ca48a33aac33fd8e082e269556017a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f8769c7fe99f9314058e0e9780ca4b16ca48a33aac33fd8e082e269556017a->enter($__internal_01f8769c7fe99f9314058e0e9780ca4b16ca48a33aac33fd8e082e269556017a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_01f8769c7fe99f9314058e0e9780ca4b16ca48a33aac33fd8e082e269556017a->leave($__internal_01f8769c7fe99f9314058e0e9780ca4b16ca48a33aac33fd8e082e269556017a_prof);

        
        $__internal_2f9033aa0947a4885f79c10c8a4c56f8996d497eb31ff618edce2d41c2696158->leave($__internal_2f9033aa0947a4885f79c10c8a4c56f8996d497eb31ff618edce2d41c2696158_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_03757f00e844153302338428a01e375709dc665c6b9184b4bfba1bc01e927ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03757f00e844153302338428a01e375709dc665c6b9184b4bfba1bc01e927ee7->enter($__internal_03757f00e844153302338428a01e375709dc665c6b9184b4bfba1bc01e927ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_3be8b54e78f8256929c921982ee3def3af44ee879ec9738f6b0950b1c5d25fb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be8b54e78f8256929c921982ee3def3af44ee879ec9738f6b0950b1c5d25fb8->enter($__internal_3be8b54e78f8256929c921982ee3def3af44ee879ec9738f6b0950b1c5d25fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_3be8b54e78f8256929c921982ee3def3af44ee879ec9738f6b0950b1c5d25fb8->leave($__internal_3be8b54e78f8256929c921982ee3def3af44ee879ec9738f6b0950b1c5d25fb8_prof);

        
        $__internal_03757f00e844153302338428a01e375709dc665c6b9184b4bfba1bc01e927ee7->leave($__internal_03757f00e844153302338428a01e375709dc665c6b9184b4bfba1bc01e927ee7_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_27276c09c462d2834b44ded868a78b37fcb8b857840a2aa846025bd2749a933d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27276c09c462d2834b44ded868a78b37fcb8b857840a2aa846025bd2749a933d->enter($__internal_27276c09c462d2834b44ded868a78b37fcb8b857840a2aa846025bd2749a933d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_8d892e111c3430edd383706f9323c9aec5895e1270c4831e666b2791770b8422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d892e111c3430edd383706f9323c9aec5895e1270c4831e666b2791770b8422->enter($__internal_8d892e111c3430edd383706f9323c9aec5895e1270c4831e666b2791770b8422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_8d892e111c3430edd383706f9323c9aec5895e1270c4831e666b2791770b8422->leave($__internal_8d892e111c3430edd383706f9323c9aec5895e1270c4831e666b2791770b8422_prof);

        
        $__internal_27276c09c462d2834b44ded868a78b37fcb8b857840a2aa846025bd2749a933d->leave($__internal_27276c09c462d2834b44ded868a78b37fcb8b857840a2aa846025bd2749a933d_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_6e40d7d0f88756c44b51178d30ab1f05081bc3dd6611333bd95fb742af5c3c92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e40d7d0f88756c44b51178d30ab1f05081bc3dd6611333bd95fb742af5c3c92->enter($__internal_6e40d7d0f88756c44b51178d30ab1f05081bc3dd6611333bd95fb742af5c3c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5ee0e6b414814cc5f953e1ba24e89275fc5fd4f716694d33ca24b08a55dd4641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee0e6b414814cc5f953e1ba24e89275fc5fd4f716694d33ca24b08a55dd4641->enter($__internal_5ee0e6b414814cc5f953e1ba24e89275fc5fd4f716694d33ca24b08a55dd4641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_5ee0e6b414814cc5f953e1ba24e89275fc5fd4f716694d33ca24b08a55dd4641->leave($__internal_5ee0e6b414814cc5f953e1ba24e89275fc5fd4f716694d33ca24b08a55dd4641_prof);

        
        $__internal_6e40d7d0f88756c44b51178d30ab1f05081bc3dd6611333bd95fb742af5c3c92->leave($__internal_6e40d7d0f88756c44b51178d30ab1f05081bc3dd6611333bd95fb742af5c3c92_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d48d94d8520089fcbdd8e958a8cf77271bf1c0903a36fc913ee30315d59d4234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d48d94d8520089fcbdd8e958a8cf77271bf1c0903a36fc913ee30315d59d4234->enter($__internal_d48d94d8520089fcbdd8e958a8cf77271bf1c0903a36fc913ee30315d59d4234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_87a00ee323089301794a510eaab010dca575718bb217ca3b1ce2ce19db84f3c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a00ee323089301794a510eaab010dca575718bb217ca3b1ce2ce19db84f3c2->enter($__internal_87a00ee323089301794a510eaab010dca575718bb217ca3b1ce2ce19db84f3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_87a00ee323089301794a510eaab010dca575718bb217ca3b1ce2ce19db84f3c2->leave($__internal_87a00ee323089301794a510eaab010dca575718bb217ca3b1ce2ce19db84f3c2_prof);

        
        $__internal_d48d94d8520089fcbdd8e958a8cf77271bf1c0903a36fc913ee30315d59d4234->leave($__internal_d48d94d8520089fcbdd8e958a8cf77271bf1c0903a36fc913ee30315d59d4234_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3775e67c1a888c33cd057d17e73657e8b0b72b3da0c66ef82253ff4bdcbd65a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3775e67c1a888c33cd057d17e73657e8b0b72b3da0c66ef82253ff4bdcbd65a1->enter($__internal_3775e67c1a888c33cd057d17e73657e8b0b72b3da0c66ef82253ff4bdcbd65a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_c1b8715f9ae1135c0f7db7101bdf851ddf42999d0c002c4a9f85d35eaa8eaced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b8715f9ae1135c0f7db7101bdf851ddf42999d0c002c4a9f85d35eaa8eaced->enter($__internal_c1b8715f9ae1135c0f7db7101bdf851ddf42999d0c002c4a9f85d35eaa8eaced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_c1b8715f9ae1135c0f7db7101bdf851ddf42999d0c002c4a9f85d35eaa8eaced->leave($__internal_c1b8715f9ae1135c0f7db7101bdf851ddf42999d0c002c4a9f85d35eaa8eaced_prof);

        
        $__internal_3775e67c1a888c33cd057d17e73657e8b0b72b3da0c66ef82253ff4bdcbd65a1->leave($__internal_3775e67c1a888c33cd057d17e73657e8b0b72b3da0c66ef82253ff4bdcbd65a1_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_155150dde96bb958e2f689f353a9f601e234ef10e329b68848ab65de04574c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155150dde96bb958e2f689f353a9f601e234ef10e329b68848ab65de04574c9a->enter($__internal_155150dde96bb958e2f689f353a9f601e234ef10e329b68848ab65de04574c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_a846dce10d8bab27a0c4df5dee425b991ca0d8c82692fd6455d98ea84c34fea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a846dce10d8bab27a0c4df5dee425b991ca0d8c82692fd6455d98ea84c34fea0->enter($__internal_a846dce10d8bab27a0c4df5dee425b991ca0d8c82692fd6455d98ea84c34fea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_a846dce10d8bab27a0c4df5dee425b991ca0d8c82692fd6455d98ea84c34fea0->leave($__internal_a846dce10d8bab27a0c4df5dee425b991ca0d8c82692fd6455d98ea84c34fea0_prof);

        
        $__internal_155150dde96bb958e2f689f353a9f601e234ef10e329b68848ab65de04574c9a->leave($__internal_155150dde96bb958e2f689f353a9f601e234ef10e329b68848ab65de04574c9a_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_fa58c9f32e1fc2e6d6a514362a1b3b6bfe9f87ddced58c19d106f9198ce5b483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa58c9f32e1fc2e6d6a514362a1b3b6bfe9f87ddced58c19d106f9198ce5b483->enter($__internal_fa58c9f32e1fc2e6d6a514362a1b3b6bfe9f87ddced58c19d106f9198ce5b483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6fdc65e80a85219ac030ae5314aeec14a5c7a0baf927fb84feb9737cd99ca254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fdc65e80a85219ac030ae5314aeec14a5c7a0baf927fb84feb9737cd99ca254->enter($__internal_6fdc65e80a85219ac030ae5314aeec14a5c7a0baf927fb84feb9737cd99ca254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_6fdc65e80a85219ac030ae5314aeec14a5c7a0baf927fb84feb9737cd99ca254->leave($__internal_6fdc65e80a85219ac030ae5314aeec14a5c7a0baf927fb84feb9737cd99ca254_prof);

        
        $__internal_fa58c9f32e1fc2e6d6a514362a1b3b6bfe9f87ddced58c19d106f9198ce5b483->leave($__internal_fa58c9f32e1fc2e6d6a514362a1b3b6bfe9f87ddced58c19d106f9198ce5b483_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_efb5b5b18e7880a8a7debc8ee96aeaf66f16859c9b2d599d725e409677eea1bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efb5b5b18e7880a8a7debc8ee96aeaf66f16859c9b2d599d725e409677eea1bb->enter($__internal_efb5b5b18e7880a8a7debc8ee96aeaf66f16859c9b2d599d725e409677eea1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_562f50c17ff7e7a21817b0ae5b8defe0ca32e5f69ea39aba3230e28d60104ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562f50c17ff7e7a21817b0ae5b8defe0ca32e5f69ea39aba3230e28d60104ba6->enter($__internal_562f50c17ff7e7a21817b0ae5b8defe0ca32e5f69ea39aba3230e28d60104ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_562f50c17ff7e7a21817b0ae5b8defe0ca32e5f69ea39aba3230e28d60104ba6->leave($__internal_562f50c17ff7e7a21817b0ae5b8defe0ca32e5f69ea39aba3230e28d60104ba6_prof);

        
        $__internal_efb5b5b18e7880a8a7debc8ee96aeaf66f16859c9b2d599d725e409677eea1bb->leave($__internal_efb5b5b18e7880a8a7debc8ee96aeaf66f16859c9b2d599d725e409677eea1bb_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6da4a7f44b5a82cfd6e6267b638c0feb1685efee2a4e77e4cb4182dcda1f71a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da4a7f44b5a82cfd6e6267b638c0feb1685efee2a4e77e4cb4182dcda1f71a5->enter($__internal_6da4a7f44b5a82cfd6e6267b638c0feb1685efee2a4e77e4cb4182dcda1f71a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a673d5d6f814dfdffe5c729988b028cc8a0c5a688eaf911154f207096cf1257d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a673d5d6f814dfdffe5c729988b028cc8a0c5a688eaf911154f207096cf1257d->enter($__internal_a673d5d6f814dfdffe5c729988b028cc8a0c5a688eaf911154f207096cf1257d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_a673d5d6f814dfdffe5c729988b028cc8a0c5a688eaf911154f207096cf1257d->leave($__internal_a673d5d6f814dfdffe5c729988b028cc8a0c5a688eaf911154f207096cf1257d_prof);

        
        $__internal_6da4a7f44b5a82cfd6e6267b638c0feb1685efee2a4e77e4cb4182dcda1f71a5->leave($__internal_6da4a7f44b5a82cfd6e6267b638c0feb1685efee2a4e77e4cb4182dcda1f71a5_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_bbc3626e3f4cb7fff93c9450c43e9b0994099e394f2ba132bfc84f25fbc18e21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbc3626e3f4cb7fff93c9450c43e9b0994099e394f2ba132bfc84f25fbc18e21->enter($__internal_bbc3626e3f4cb7fff93c9450c43e9b0994099e394f2ba132bfc84f25fbc18e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f534723ea2d360dc3ad5d8a3aa3708492f3673b1eda2684884fa13d97f99faca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f534723ea2d360dc3ad5d8a3aa3708492f3673b1eda2684884fa13d97f99faca->enter($__internal_f534723ea2d360dc3ad5d8a3aa3708492f3673b1eda2684884fa13d97f99faca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f534723ea2d360dc3ad5d8a3aa3708492f3673b1eda2684884fa13d97f99faca->leave($__internal_f534723ea2d360dc3ad5d8a3aa3708492f3673b1eda2684884fa13d97f99faca_prof);

        
        $__internal_bbc3626e3f4cb7fff93c9450c43e9b0994099e394f2ba132bfc84f25fbc18e21->leave($__internal_bbc3626e3f4cb7fff93c9450c43e9b0994099e394f2ba132bfc84f25fbc18e21_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_acf22d84d0840a87ed2427296b1d8f3692db79a0f9ed90d74d12693157a8bf5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acf22d84d0840a87ed2427296b1d8f3692db79a0f9ed90d74d12693157a8bf5c->enter($__internal_acf22d84d0840a87ed2427296b1d8f3692db79a0f9ed90d74d12693157a8bf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_7fe3beb228dcfc6c6efa0751e7812056b34fafbc1513c7839c61939955a685f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe3beb228dcfc6c6efa0751e7812056b34fafbc1513c7839c61939955a685f8->enter($__internal_7fe3beb228dcfc6c6efa0751e7812056b34fafbc1513c7839c61939955a685f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7fe3beb228dcfc6c6efa0751e7812056b34fafbc1513c7839c61939955a685f8->leave($__internal_7fe3beb228dcfc6c6efa0751e7812056b34fafbc1513c7839c61939955a685f8_prof);

        
        $__internal_acf22d84d0840a87ed2427296b1d8f3692db79a0f9ed90d74d12693157a8bf5c->leave($__internal_acf22d84d0840a87ed2427296b1d8f3692db79a0f9ed90d74d12693157a8bf5c_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_5021c3723e8511968e3e719c558973ed468a0d37a638a9acf8cdf090440454b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5021c3723e8511968e3e719c558973ed468a0d37a638a9acf8cdf090440454b3->enter($__internal_5021c3723e8511968e3e719c558973ed468a0d37a638a9acf8cdf090440454b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_df84081998413283addde4050a41070c81da3dcf7fc03af86eed4d24f8b1ae41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df84081998413283addde4050a41070c81da3dcf7fc03af86eed4d24f8b1ae41->enter($__internal_df84081998413283addde4050a41070c81da3dcf7fc03af86eed4d24f8b1ae41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_df84081998413283addde4050a41070c81da3dcf7fc03af86eed4d24f8b1ae41->leave($__internal_df84081998413283addde4050a41070c81da3dcf7fc03af86eed4d24f8b1ae41_prof);

        
        $__internal_5021c3723e8511968e3e719c558973ed468a0d37a638a9acf8cdf090440454b3->leave($__internal_5021c3723e8511968e3e719c558973ed468a0d37a638a9acf8cdf090440454b3_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_b491b241ffca68be2c6e12b7171234c32e303b54a7145dde94df56ee15940008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b491b241ffca68be2c6e12b7171234c32e303b54a7145dde94df56ee15940008->enter($__internal_b491b241ffca68be2c6e12b7171234c32e303b54a7145dde94df56ee15940008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_aa7f5bb7452581b31ed07e3374d3b85140e134579b76f9d17d3b7698c79089e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7f5bb7452581b31ed07e3374d3b85140e134579b76f9d17d3b7698c79089e3->enter($__internal_aa7f5bb7452581b31ed07e3374d3b85140e134579b76f9d17d3b7698c79089e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 255
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_aa7f5bb7452581b31ed07e3374d3b85140e134579b76f9d17d3b7698c79089e3->leave($__internal_aa7f5bb7452581b31ed07e3374d3b85140e134579b76f9d17d3b7698c79089e3_prof);

        
        $__internal_b491b241ffca68be2c6e12b7171234c32e303b54a7145dde94df56ee15940008->leave($__internal_b491b241ffca68be2c6e12b7171234c32e303b54a7145dde94df56ee15940008_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_eb710db6877526d36ccbdf1d91ab814e6e26f4dbe7b3e29b7bc2daf0c81ffea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb710db6877526d36ccbdf1d91ab814e6e26f4dbe7b3e29b7bc2daf0c81ffea3->enter($__internal_eb710db6877526d36ccbdf1d91ab814e6e26f4dbe7b3e29b7bc2daf0c81ffea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0b5f0dcf9198647ab4e7db16cf0461a802560e3bd0537502a27b0150e6fa2757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5f0dcf9198647ab4e7db16cf0461a802560e3bd0537502a27b0150e6fa2757->enter($__internal_0b5f0dcf9198647ab4e7db16cf0461a802560e3bd0537502a27b0150e6fa2757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_0b5f0dcf9198647ab4e7db16cf0461a802560e3bd0537502a27b0150e6fa2757->leave($__internal_0b5f0dcf9198647ab4e7db16cf0461a802560e3bd0537502a27b0150e6fa2757_prof);

        
        $__internal_eb710db6877526d36ccbdf1d91ab814e6e26f4dbe7b3e29b7bc2daf0c81ffea3->leave($__internal_eb710db6877526d36ccbdf1d91ab814e6e26f4dbe7b3e29b7bc2daf0c81ffea3_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_148b212e6d72892686dc5532aac6326dd1f258b9ed3d95c5ca038eb0df2729ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_148b212e6d72892686dc5532aac6326dd1f258b9ed3d95c5ca038eb0df2729ca->enter($__internal_148b212e6d72892686dc5532aac6326dd1f258b9ed3d95c5ca038eb0df2729ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_87f3b4df5a67881e5a7fd29384cbbeac73d5f326540e4814afe8cd7bc3f9c06c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f3b4df5a67881e5a7fd29384cbbeac73d5f326540e4814afe8cd7bc3f9c06c->enter($__internal_87f3b4df5a67881e5a7fd29384cbbeac73d5f326540e4814afe8cd7bc3f9c06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_87f3b4df5a67881e5a7fd29384cbbeac73d5f326540e4814afe8cd7bc3f9c06c->leave($__internal_87f3b4df5a67881e5a7fd29384cbbeac73d5f326540e4814afe8cd7bc3f9c06c_prof);

        
        $__internal_148b212e6d72892686dc5532aac6326dd1f258b9ed3d95c5ca038eb0df2729ca->leave($__internal_148b212e6d72892686dc5532aac6326dd1f258b9ed3d95c5ca038eb0df2729ca_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_034bbfbb8c4700d04fa31c46882cee6e67654720cfa36a1c15bfbb69e5a86534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034bbfbb8c4700d04fa31c46882cee6e67654720cfa36a1c15bfbb69e5a86534->enter($__internal_034bbfbb8c4700d04fa31c46882cee6e67654720cfa36a1c15bfbb69e5a86534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_4188621f693dbbcd59b379b8d1be2a42b14584f3dc28d55fbca4646ba8ccc24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4188621f693dbbcd59b379b8d1be2a42b14584f3dc28d55fbca4646ba8ccc24d->enter($__internal_4188621f693dbbcd59b379b8d1be2a42b14584f3dc28d55fbca4646ba8ccc24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4188621f693dbbcd59b379b8d1be2a42b14584f3dc28d55fbca4646ba8ccc24d->leave($__internal_4188621f693dbbcd59b379b8d1be2a42b14584f3dc28d55fbca4646ba8ccc24d_prof);

        
        $__internal_034bbfbb8c4700d04fa31c46882cee6e67654720cfa36a1c15bfbb69e5a86534->leave($__internal_034bbfbb8c4700d04fa31c46882cee6e67654720cfa36a1c15bfbb69e5a86534_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_1b04fea7cb0cd64793fc0aa2d84a22bdfbe3ac1992351699dcc1641bfd817094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b04fea7cb0cd64793fc0aa2d84a22bdfbe3ac1992351699dcc1641bfd817094->enter($__internal_1b04fea7cb0cd64793fc0aa2d84a22bdfbe3ac1992351699dcc1641bfd817094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_3d2d89ecc4f71f8b676e3963f4eda6d18100dc4a535816fba493101bb70ed4f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2d89ecc4f71f8b676e3963f4eda6d18100dc4a535816fba493101bb70ed4f6->enter($__internal_3d2d89ecc4f71f8b676e3963f4eda6d18100dc4a535816fba493101bb70ed4f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3d2d89ecc4f71f8b676e3963f4eda6d18100dc4a535816fba493101bb70ed4f6->leave($__internal_3d2d89ecc4f71f8b676e3963f4eda6d18100dc4a535816fba493101bb70ed4f6_prof);

        
        $__internal_1b04fea7cb0cd64793fc0aa2d84a22bdfbe3ac1992351699dcc1641bfd817094->leave($__internal_1b04fea7cb0cd64793fc0aa2d84a22bdfbe3ac1992351699dcc1641bfd817094_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_f1cbf178a5156fcd7f84ed0a18996b1dc58fb0da240cc859e0863049eeaadc58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1cbf178a5156fcd7f84ed0a18996b1dc58fb0da240cc859e0863049eeaadc58->enter($__internal_f1cbf178a5156fcd7f84ed0a18996b1dc58fb0da240cc859e0863049eeaadc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_542c9abd8228e7161608dfbba4595c3cb170f5b4fbeaaf2e19a69219e70cf385 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542c9abd8228e7161608dfbba4595c3cb170f5b4fbeaaf2e19a69219e70cf385->enter($__internal_542c9abd8228e7161608dfbba4595c3cb170f5b4fbeaaf2e19a69219e70cf385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_542c9abd8228e7161608dfbba4595c3cb170f5b4fbeaaf2e19a69219e70cf385->leave($__internal_542c9abd8228e7161608dfbba4595c3cb170f5b4fbeaaf2e19a69219e70cf385_prof);

        
        $__internal_f1cbf178a5156fcd7f84ed0a18996b1dc58fb0da240cc859e0863049eeaadc58->leave($__internal_f1cbf178a5156fcd7f84ed0a18996b1dc58fb0da240cc859e0863049eeaadc58_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_edb120067fd50d9848853e9abb3e8b986cb7ec0d28fecc5a100e6e1bda6060c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb120067fd50d9848853e9abb3e8b986cb7ec0d28fecc5a100e6e1bda6060c4->enter($__internal_edb120067fd50d9848853e9abb3e8b986cb7ec0d28fecc5a100e6e1bda6060c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0dd5a4fb7cea0984d2a61fb105eeef4088beb8f2f4b360c1cf6b3fbb0f0d323c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd5a4fb7cea0984d2a61fb105eeef4088beb8f2f4b360c1cf6b3fbb0f0d323c->enter($__internal_0dd5a4fb7cea0984d2a61fb105eeef4088beb8f2f4b360c1cf6b3fbb0f0d323c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_0dd5a4fb7cea0984d2a61fb105eeef4088beb8f2f4b360c1cf6b3fbb0f0d323c->leave($__internal_0dd5a4fb7cea0984d2a61fb105eeef4088beb8f2f4b360c1cf6b3fbb0f0d323c_prof);

        
        $__internal_edb120067fd50d9848853e9abb3e8b986cb7ec0d28fecc5a100e6e1bda6060c4->leave($__internal_edb120067fd50d9848853e9abb3e8b986cb7ec0d28fecc5a100e6e1bda6060c4_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_8c2c8bc313b37ed07cca2323964c1d56a3066128e76379b1b193616b1f90b141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2c8bc313b37ed07cca2323964c1d56a3066128e76379b1b193616b1f90b141->enter($__internal_8c2c8bc313b37ed07cca2323964c1d56a3066128e76379b1b193616b1f90b141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_778aed65f17cec6f0249618c979cc5c990305111c706c37b4b5b23ed3f92096d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778aed65f17cec6f0249618c979cc5c990305111c706c37b4b5b23ed3f92096d->enter($__internal_778aed65f17cec6f0249618c979cc5c990305111c706c37b4b5b23ed3f92096d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_778aed65f17cec6f0249618c979cc5c990305111c706c37b4b5b23ed3f92096d->leave($__internal_778aed65f17cec6f0249618c979cc5c990305111c706c37b4b5b23ed3f92096d_prof);

        
        $__internal_8c2c8bc313b37ed07cca2323964c1d56a3066128e76379b1b193616b1f90b141->leave($__internal_8c2c8bc313b37ed07cca2323964c1d56a3066128e76379b1b193616b1f90b141_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_e596f9f97d4149e18e838aff9cd12581dba2ebd27b1aa0bfe7b4f82b3f3ca680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e596f9f97d4149e18e838aff9cd12581dba2ebd27b1aa0bfe7b4f82b3f3ca680->enter($__internal_e596f9f97d4149e18e838aff9cd12581dba2ebd27b1aa0bfe7b4f82b3f3ca680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_05439b65c7a29ace22f38fd63b75faa8de82f8a91f79cc71b1286d45e87049ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05439b65c7a29ace22f38fd63b75faa8de82f8a91f79cc71b1286d45e87049ae->enter($__internal_05439b65c7a29ace22f38fd63b75faa8de82f8a91f79cc71b1286d45e87049ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_05439b65c7a29ace22f38fd63b75faa8de82f8a91f79cc71b1286d45e87049ae->leave($__internal_05439b65c7a29ace22f38fd63b75faa8de82f8a91f79cc71b1286d45e87049ae_prof);

        
        $__internal_e596f9f97d4149e18e838aff9cd12581dba2ebd27b1aa0bfe7b4f82b3f3ca680->leave($__internal_e596f9f97d4149e18e838aff9cd12581dba2ebd27b1aa0bfe7b4f82b3f3ca680_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
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
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
