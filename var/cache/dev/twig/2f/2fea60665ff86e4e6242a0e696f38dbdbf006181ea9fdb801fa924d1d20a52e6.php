<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_36155fee48550bc9b17263ebc01fd55dbd741690759764aabba91f85753bc459 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0dfdd9a694d400a57966ef401bcc98d689fe6cc256daa7dc9028e1b3140638e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0dfdd9a694d400a57966ef401bcc98d689fe6cc256daa7dc9028e1b3140638e->enter($__internal_d0dfdd9a694d400a57966ef401bcc98d689fe6cc256daa7dc9028e1b3140638e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_09ad6b182389efe847fbd3747fdfe691c7f575a90cf4e73db1e0e9762604508a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ad6b182389efe847fbd3747fdfe691c7f575a90cf4e73db1e0e9762604508a->enter($__internal_09ad6b182389efe847fbd3747fdfe691c7f575a90cf4e73db1e0e9762604508a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_d0dfdd9a694d400a57966ef401bcc98d689fe6cc256daa7dc9028e1b3140638e->leave($__internal_d0dfdd9a694d400a57966ef401bcc98d689fe6cc256daa7dc9028e1b3140638e_prof);

        
        $__internal_09ad6b182389efe847fbd3747fdfe691c7f575a90cf4e73db1e0e9762604508a->leave($__internal_09ad6b182389efe847fbd3747fdfe691c7f575a90cf4e73db1e0e9762604508a_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_c670f76f9d6f6ebbf330ac6b998d78028d4f4b6ad4f81bc77c9627cac1f6b6b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c670f76f9d6f6ebbf330ac6b998d78028d4f4b6ad4f81bc77c9627cac1f6b6b6->enter($__internal_c670f76f9d6f6ebbf330ac6b998d78028d4f4b6ad4f81bc77c9627cac1f6b6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_cc9a6aae4696c9c3575a2c96a9681c891a12245a8d3b2673c6d4491ba9ac1327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9a6aae4696c9c3575a2c96a9681c891a12245a8d3b2673c6d4491ba9ac1327->enter($__internal_cc9a6aae4696c9c3575a2c96a9681c891a12245a8d3b2673c6d4491ba9ac1327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_cc9a6aae4696c9c3575a2c96a9681c891a12245a8d3b2673c6d4491ba9ac1327->leave($__internal_cc9a6aae4696c9c3575a2c96a9681c891a12245a8d3b2673c6d4491ba9ac1327_prof);

        
        $__internal_c670f76f9d6f6ebbf330ac6b998d78028d4f4b6ad4f81bc77c9627cac1f6b6b6->leave($__internal_c670f76f9d6f6ebbf330ac6b998d78028d4f4b6ad4f81bc77c9627cac1f6b6b6_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_2529b98d3f0a74f81a3e521c91fec23029c21b9d3c6a7f7de5e016f385e7c9c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2529b98d3f0a74f81a3e521c91fec23029c21b9d3c6a7f7de5e016f385e7c9c9->enter($__internal_2529b98d3f0a74f81a3e521c91fec23029c21b9d3c6a7f7de5e016f385e7c9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a5f667499f25ecf104dac7ba5aea4e1e15a29a1173d377d8e804ec37178e459a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f667499f25ecf104dac7ba5aea4e1e15a29a1173d377d8e804ec37178e459a->enter($__internal_a5f667499f25ecf104dac7ba5aea4e1e15a29a1173d377d8e804ec37178e459a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a5f667499f25ecf104dac7ba5aea4e1e15a29a1173d377d8e804ec37178e459a->leave($__internal_a5f667499f25ecf104dac7ba5aea4e1e15a29a1173d377d8e804ec37178e459a_prof);

        
        $__internal_2529b98d3f0a74f81a3e521c91fec23029c21b9d3c6a7f7de5e016f385e7c9c9->leave($__internal_2529b98d3f0a74f81a3e521c91fec23029c21b9d3c6a7f7de5e016f385e7c9c9_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f3e346580191af1db3e57838593a6483e902889987c3cbedd0042724b2356774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e346580191af1db3e57838593a6483e902889987c3cbedd0042724b2356774->enter($__internal_f3e346580191af1db3e57838593a6483e902889987c3cbedd0042724b2356774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_0127b0bed381b89cf0cabacf1ec8072c2ad93b1205eac7f3ce022f557752d1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0127b0bed381b89cf0cabacf1ec8072c2ad93b1205eac7f3ce022f557752d1dc->enter($__internal_0127b0bed381b89cf0cabacf1ec8072c2ad93b1205eac7f3ce022f557752d1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_0127b0bed381b89cf0cabacf1ec8072c2ad93b1205eac7f3ce022f557752d1dc->leave($__internal_0127b0bed381b89cf0cabacf1ec8072c2ad93b1205eac7f3ce022f557752d1dc_prof);

        
        $__internal_f3e346580191af1db3e57838593a6483e902889987c3cbedd0042724b2356774->leave($__internal_f3e346580191af1db3e57838593a6483e902889987c3cbedd0042724b2356774_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_81cb391c18a97008b01d44b41f1cf85489e93b8ff2fd3842fa470e5b760ee30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cb391c18a97008b01d44b41f1cf85489e93b8ff2fd3842fa470e5b760ee30e->enter($__internal_81cb391c18a97008b01d44b41f1cf85489e93b8ff2fd3842fa470e5b760ee30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7baaba9915bb1bc0c2432ce0cdfa6b14558e672cfcb6e566b5374d413dc64005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7baaba9915bb1bc0c2432ce0cdfa6b14558e672cfcb6e566b5374d413dc64005->enter($__internal_7baaba9915bb1bc0c2432ce0cdfa6b14558e672cfcb6e566b5374d413dc64005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_7baaba9915bb1bc0c2432ce0cdfa6b14558e672cfcb6e566b5374d413dc64005->leave($__internal_7baaba9915bb1bc0c2432ce0cdfa6b14558e672cfcb6e566b5374d413dc64005_prof);

        
        $__internal_81cb391c18a97008b01d44b41f1cf85489e93b8ff2fd3842fa470e5b760ee30e->leave($__internal_81cb391c18a97008b01d44b41f1cf85489e93b8ff2fd3842fa470e5b760ee30e_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a7c5a10ec874bda0c42c72845ae39ef95e35c3942e3b0aec31eae11ade13adb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c5a10ec874bda0c42c72845ae39ef95e35c3942e3b0aec31eae11ade13adb9->enter($__internal_a7c5a10ec874bda0c42c72845ae39ef95e35c3942e3b0aec31eae11ade13adb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_e32153c6178d11aa6b49a0c8213ea54e3d02ee95b138beb8b4819bf067372479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32153c6178d11aa6b49a0c8213ea54e3d02ee95b138beb8b4819bf067372479->enter($__internal_e32153c6178d11aa6b49a0c8213ea54e3d02ee95b138beb8b4819bf067372479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_e32153c6178d11aa6b49a0c8213ea54e3d02ee95b138beb8b4819bf067372479->leave($__internal_e32153c6178d11aa6b49a0c8213ea54e3d02ee95b138beb8b4819bf067372479_prof);

        
        $__internal_a7c5a10ec874bda0c42c72845ae39ef95e35c3942e3b0aec31eae11ade13adb9->leave($__internal_a7c5a10ec874bda0c42c72845ae39ef95e35c3942e3b0aec31eae11ade13adb9_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_ebc58903f0ede44adc8b36cba6fdda8b4d7ca2cf443d43f2ee85f46047f5ab28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebc58903f0ede44adc8b36cba6fdda8b4d7ca2cf443d43f2ee85f46047f5ab28->enter($__internal_ebc58903f0ede44adc8b36cba6fdda8b4d7ca2cf443d43f2ee85f46047f5ab28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7f0c06c2b607a22a108b9b7ac88b1a5b21fd7e0ef7074b03c0d2d0584a946afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0c06c2b607a22a108b9b7ac88b1a5b21fd7e0ef7074b03c0d2d0584a946afb->enter($__internal_7f0c06c2b607a22a108b9b7ac88b1a5b21fd7e0ef7074b03c0d2d0584a946afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_7f0c06c2b607a22a108b9b7ac88b1a5b21fd7e0ef7074b03c0d2d0584a946afb->leave($__internal_7f0c06c2b607a22a108b9b7ac88b1a5b21fd7e0ef7074b03c0d2d0584a946afb_prof);

        
        $__internal_ebc58903f0ede44adc8b36cba6fdda8b4d7ca2cf443d43f2ee85f46047f5ab28->leave($__internal_ebc58903f0ede44adc8b36cba6fdda8b4d7ca2cf443d43f2ee85f46047f5ab28_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_b7bd19e44a92ecf03b6114ce4b80ac806e228518733126f10a4674cffc8eb60d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7bd19e44a92ecf03b6114ce4b80ac806e228518733126f10a4674cffc8eb60d->enter($__internal_b7bd19e44a92ecf03b6114ce4b80ac806e228518733126f10a4674cffc8eb60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_400570aaeb8a1a38d29ad3ff79d19e3b067b867a9c7e9489dcc7672ca71ba393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400570aaeb8a1a38d29ad3ff79d19e3b067b867a9c7e9489dcc7672ca71ba393->enter($__internal_400570aaeb8a1a38d29ad3ff79d19e3b067b867a9c7e9489dcc7672ca71ba393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_400570aaeb8a1a38d29ad3ff79d19e3b067b867a9c7e9489dcc7672ca71ba393->leave($__internal_400570aaeb8a1a38d29ad3ff79d19e3b067b867a9c7e9489dcc7672ca71ba393_prof);

        
        $__internal_b7bd19e44a92ecf03b6114ce4b80ac806e228518733126f10a4674cffc8eb60d->leave($__internal_b7bd19e44a92ecf03b6114ce4b80ac806e228518733126f10a4674cffc8eb60d_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_2f687c972e97117cc1a8abf14e4a8a2e2147009918ced1b52bd3c438f1df8204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f687c972e97117cc1a8abf14e4a8a2e2147009918ced1b52bd3c438f1df8204->enter($__internal_2f687c972e97117cc1a8abf14e4a8a2e2147009918ced1b52bd3c438f1df8204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_5f9eabcd61c723776f8cf980742ca1a6081e8b2461687609885ea9de2f869f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9eabcd61c723776f8cf980742ca1a6081e8b2461687609885ea9de2f869f3b->enter($__internal_5f9eabcd61c723776f8cf980742ca1a6081e8b2461687609885ea9de2f869f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5f9eabcd61c723776f8cf980742ca1a6081e8b2461687609885ea9de2f869f3b->leave($__internal_5f9eabcd61c723776f8cf980742ca1a6081e8b2461687609885ea9de2f869f3b_prof);

        
        $__internal_2f687c972e97117cc1a8abf14e4a8a2e2147009918ced1b52bd3c438f1df8204->leave($__internal_2f687c972e97117cc1a8abf14e4a8a2e2147009918ced1b52bd3c438f1df8204_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_18e8c9d93f1a95084fbd952b625bea9da897db2823504e1a56699d3bd7ad6c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e8c9d93f1a95084fbd952b625bea9da897db2823504e1a56699d3bd7ad6c69->enter($__internal_18e8c9d93f1a95084fbd952b625bea9da897db2823504e1a56699d3bd7ad6c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_0cf992d330631f3668ef77567e8155908571b9f5ead9d6777110d919507aac64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf992d330631f3668ef77567e8155908571b9f5ead9d6777110d919507aac64->enter($__internal_0cf992d330631f3668ef77567e8155908571b9f5ead9d6777110d919507aac64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0cf992d330631f3668ef77567e8155908571b9f5ead9d6777110d919507aac64->leave($__internal_0cf992d330631f3668ef77567e8155908571b9f5ead9d6777110d919507aac64_prof);

        
        $__internal_18e8c9d93f1a95084fbd952b625bea9da897db2823504e1a56699d3bd7ad6c69->leave($__internal_18e8c9d93f1a95084fbd952b625bea9da897db2823504e1a56699d3bd7ad6c69_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_4fdcc882695b4d3b567cdb779dc4af03d0103f1b2cb44efd28f0289059163c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fdcc882695b4d3b567cdb779dc4af03d0103f1b2cb44efd28f0289059163c1b->enter($__internal_4fdcc882695b4d3b567cdb779dc4af03d0103f1b2cb44efd28f0289059163c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_d25004d29a707c32de6c9f7643471dc7123b9b617b8116a5d28a3b23c2d0db6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25004d29a707c32de6c9f7643471dc7123b9b617b8116a5d28a3b23c2d0db6e->enter($__internal_d25004d29a707c32de6c9f7643471dc7123b9b617b8116a5d28a3b23c2d0db6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_d25004d29a707c32de6c9f7643471dc7123b9b617b8116a5d28a3b23c2d0db6e->leave($__internal_d25004d29a707c32de6c9f7643471dc7123b9b617b8116a5d28a3b23c2d0db6e_prof);

        
        $__internal_4fdcc882695b4d3b567cdb779dc4af03d0103f1b2cb44efd28f0289059163c1b->leave($__internal_4fdcc882695b4d3b567cdb779dc4af03d0103f1b2cb44efd28f0289059163c1b_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/Barlito/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
