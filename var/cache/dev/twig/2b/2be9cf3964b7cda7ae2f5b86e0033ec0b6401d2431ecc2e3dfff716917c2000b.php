<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_5d84f9eee454885c73f5f65e6f360a1f61e0c66f3151b83c495b2a33e074397a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_form_action_url' => array($this, 'block_sonata_form_action_url'),
            'sonata_form_attributes' => array($this, 'block_sonata_form_attributes'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
            'sonata_form_actions' => array($this, 'block_sonata_form_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b29823d1c9132f297ebfcb38a67738ae9c0bf9c547008c5505e71a8b1ccd9189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b29823d1c9132f297ebfcb38a67738ae9c0bf9c547008c5505e71a8b1ccd9189->enter($__internal_b29823d1c9132f297ebfcb38a67738ae9c0bf9c547008c5505e71a8b1ccd9189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        $__internal_36dcaedf5dc93d83ceae0cab63a14529bbd2d902c0e6d5fd3502b897b242bb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36dcaedf5dc93d83ceae0cab63a14529bbd2d902c0e6d5fd3502b897b242bb5f->enter($__internal_36dcaedf5dc93d83ceae0cab63a14529bbd2d902c0e6d5fd3502b897b242bb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        // line 1
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_b29823d1c9132f297ebfcb38a67738ae9c0bf9c547008c5505e71a8b1ccd9189->leave($__internal_b29823d1c9132f297ebfcb38a67738ae9c0bf9c547008c5505e71a8b1ccd9189_prof);

        
        $__internal_36dcaedf5dc93d83ceae0cab63a14529bbd2d902c0e6d5fd3502b897b242bb5f->leave($__internal_36dcaedf5dc93d83ceae0cab63a14529bbd2d902c0e6d5fd3502b897b242bb5f_prof);

    }

    public function block_form($context, array $blocks = array())
    {
        $__internal_afcb475521178064ba9ecb84688fadf9adc7a0a6778c7f926a709dcb6fab920c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afcb475521178064ba9ecb84688fadf9adc7a0a6778c7f926a709dcb6fab920c->enter($__internal_afcb475521178064ba9ecb84688fadf9adc7a0a6778c7f926a709dcb6fab920c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_156c2ac97679f6c11a54bcbf23aa79adbd52a0a8eefc470561e4c92a04bc4e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156c2ac97679f6c11a54bcbf23aa79adbd52a0a8eefc470561e4c92a04bc4e08->enter($__internal_156c2ac97679f6c11a54bcbf23aa79adbd52a0a8eefc470561e4c92a04bc4e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 2
        echo "    ";
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit_form.html.twig", 2);
        // line 3
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

    ";
        // line 6
        echo "    ";
        $context["url"] = (( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : $this->getContext($context, "objectId")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))))) ? ("edit") : ("create"));
        // line 7
        echo "
    ";
        // line 8
        if ( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))), "method")) {
            // line 9
            echo "        <div>
            ";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 13
            echo "        <form
              ";
            // line 14
            if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 15
            echo "              role=\"form\"
              ";
            // line 17
            echo "              action=\"";
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 18
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 19
            echo "              method=\"POST\"
              ";
            // line 20
            if ( !$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 21
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 22
            echo "              >

            ";
            // line 24
            echo twig_include($this->env, $context, "SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig");
            echo "

            ";
            // line 26
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 29
            echo "
            ";
            // line 30
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 62
            echo "
            ";
            // line 63
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 66
            echo "
            ";
            // line 67
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

            ";
            // line 69
            $this->displayBlock('formactions', $context, $blocks);
            // line 115
            echo "        </form>
    ";
        }
        // line 117
        echo "
    ";
        // line 118
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

";
        
        $__internal_156c2ac97679f6c11a54bcbf23aa79adbd52a0a8eefc470561e4c92a04bc4e08->leave($__internal_156c2ac97679f6c11a54bcbf23aa79adbd52a0a8eefc470561e4c92a04bc4e08_prof);

        
        $__internal_afcb475521178064ba9ecb84688fadf9adc7a0a6778c7f926a709dcb6fab920c->leave($__internal_afcb475521178064ba9ecb84688fadf9adc7a0a6778c7f926a709dcb6fab920c_prof);

    }

    // line 17
    public function block_sonata_form_action_url($context, array $blocks = array())
    {
        $__internal_0336fac91faf01f9256db185fd57f8f4bb1314b6d6613882b88f6273ad9ecf55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0336fac91faf01f9256db185fd57f8f4bb1314b6d6613882b88f6273ad9ecf55->enter($__internal_0336fac91faf01f9256db185fd57f8f4bb1314b6d6613882b88f6273ad9ecf55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        $__internal_fb7542c747e81becb35b69bbe9135ca6af866650bd44ed1fc4878ea5dc0669b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7542c747e81becb35b69bbe9135ca6af866650bd44ed1fc4878ea5dc0669b5->enter($__internal_fb7542c747e81becb35b69bbe9135ca6af866650bd44ed1fc4878ea5dc0669b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), 1 => array("id" => ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : $this->getContext($context, "objectId")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        
        $__internal_fb7542c747e81becb35b69bbe9135ca6af866650bd44ed1fc4878ea5dc0669b5->leave($__internal_fb7542c747e81becb35b69bbe9135ca6af866650bd44ed1fc4878ea5dc0669b5_prof);

        
        $__internal_0336fac91faf01f9256db185fd57f8f4bb1314b6d6613882b88f6273ad9ecf55->leave($__internal_0336fac91faf01f9256db185fd57f8f4bb1314b6d6613882b88f6273ad9ecf55_prof);

    }

    // line 21
    public function block_sonata_form_attributes($context, array $blocks = array())
    {
        $__internal_40a3925be4444634300895c183c0cb7e3f2eab77f48a645b8773da374283dbf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a3925be4444634300895c183c0cb7e3f2eab77f48a645b8773da374283dbf0->enter($__internal_40a3925be4444634300895c183c0cb7e3f2eab77f48a645b8773da374283dbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        $__internal_566769fcd9efaab05eb9c27f0e94aa10e0a0150616ea7a06b9da42430eb3a9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566769fcd9efaab05eb9c27f0e94aa10e0a0150616ea7a06b9da42430eb3a9d2->enter($__internal_566769fcd9efaab05eb9c27f0e94aa10e0a0150616ea7a06b9da42430eb3a9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        
        $__internal_566769fcd9efaab05eb9c27f0e94aa10e0a0150616ea7a06b9da42430eb3a9d2->leave($__internal_566769fcd9efaab05eb9c27f0e94aa10e0a0150616ea7a06b9da42430eb3a9d2_prof);

        
        $__internal_40a3925be4444634300895c183c0cb7e3f2eab77f48a645b8773da374283dbf0->leave($__internal_40a3925be4444634300895c183c0cb7e3f2eab77f48a645b8773da374283dbf0_prof);

    }

    // line 26
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        $__internal_7777fb459347a08f522aff73cc8b60d24af888ca57f23809e59075da90d0870e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7777fb459347a08f522aff73cc8b60d24af888ca57f23809e59075da90d0870e->enter($__internal_7777fb459347a08f522aff73cc8b60d24af888ca57f23809e59075da90d0870e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        $__internal_dea19e47cef480d521cd1c9e0089dfc2a5f4cfdba62f02eadb5586060352bc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea19e47cef480d521cd1c9e0089dfc2a5f4cfdba62f02eadb5586060352bc0f->enter($__internal_dea19e47cef480d521cd1c9e0089dfc2a5f4cfdba62f02eadb5586060352bc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 27
        echo "                <div class=\"row\">
            ";
        
        $__internal_dea19e47cef480d521cd1c9e0089dfc2a5f4cfdba62f02eadb5586060352bc0f->leave($__internal_dea19e47cef480d521cd1c9e0089dfc2a5f4cfdba62f02eadb5586060352bc0f_prof);

        
        $__internal_7777fb459347a08f522aff73cc8b60d24af888ca57f23809e59075da90d0870e->leave($__internal_7777fb459347a08f522aff73cc8b60d24af888ca57f23809e59075da90d0870e_prof);

    }

    // line 30
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        $__internal_448abafeef09e7b31091e83c2d86d9fc85775f610f0927d89e10a5ee73215e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448abafeef09e7b31091e83c2d86d9fc85775f610f0927d89e10a5ee73215e2f->enter($__internal_448abafeef09e7b31091e83c2d86d9fc85775f610f0927d89e10a5ee73215e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        $__internal_96cf79bd0d01687c05067b231e40242289b8dac6602925c76f3256261daed843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cf79bd0d01687c05067b231e40242289b8dac6602925c76f3256261daed843->enter($__internal_96cf79bd0d01687c05067b231e40242289b8dac6602925c76f3256261daed843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 31
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())) > 1));
        // line 32
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 34
        if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
            // line 35
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 38
                echo "                                    <li";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#tab_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["form_tab"], "label", array()), array(), (($this->getAttribute($context["form_tab"], "translation_domain", array())) ? ($this->getAttribute($context["form_tab"], "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "</a></li>
                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 43
                echo "                                    <div class=\"tab-pane fade";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\" id=\"tab_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 46
                if (($this->getAttribute($context["form_tab"], "description", array()) != false)) {
                    // line 47
                    echo "                                                    <p>";
                    echo $this->getAttribute($context["form_tab"], "description", array());
                    echo "</p>
                                                ";
                }
                // line 49
                echo "
                                                ";
                // line 50
                echo $context["form_helper"]->getrender_groups((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($context["form_tab"], "groups", array(), "array"), (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab")));
                echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 58
            echo "                        ";
            echo $context["form_helper"]->getrender_groups((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()), "default", array(), "array"), "groups", array()), (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab")));
            echo "
                    ";
        }
        // line 60
        echo "                </div>
            ";
        
        $__internal_96cf79bd0d01687c05067b231e40242289b8dac6602925c76f3256261daed843->leave($__internal_96cf79bd0d01687c05067b231e40242289b8dac6602925c76f3256261daed843_prof);

        
        $__internal_448abafeef09e7b31091e83c2d86d9fc85775f610f0927d89e10a5ee73215e2f->leave($__internal_448abafeef09e7b31091e83c2d86d9fc85775f610f0927d89e10a5ee73215e2f_prof);

    }

    // line 63
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        $__internal_6d78151453bea9df15853520843278e425f1d8ad735a3e5fbc15adf864a0954c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d78151453bea9df15853520843278e425f1d8ad735a3e5fbc15adf864a0954c->enter($__internal_6d78151453bea9df15853520843278e425f1d8ad735a3e5fbc15adf864a0954c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        $__internal_d674e362fa974cebdbafce0a65a77794cf7f36d65d0242201792fc606ff667a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d674e362fa974cebdbafce0a65a77794cf7f36d65d0242201792fc606ff667a0->enter($__internal_d674e362fa974cebdbafce0a65a77794cf7f36d65d0242201792fc606ff667a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 64
        echo "                </div>
            ";
        
        $__internal_d674e362fa974cebdbafce0a65a77794cf7f36d65d0242201792fc606ff667a0->leave($__internal_d674e362fa974cebdbafce0a65a77794cf7f36d65d0242201792fc606ff667a0_prof);

        
        $__internal_6d78151453bea9df15853520843278e425f1d8ad735a3e5fbc15adf864a0954c->leave($__internal_6d78151453bea9df15853520843278e425f1d8ad735a3e5fbc15adf864a0954c_prof);

    }

    // line 69
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_4cae452118310c4a7baf22a71f12ae441a3c7185234d36257869b95940a52b72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cae452118310c4a7baf22a71f12ae441a3c7185234d36257869b95940a52b72->enter($__internal_4cae452118310c4a7baf22a71f12ae441a3c7185234d36257869b95940a52b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_5de55180fc5b98403a9b9c2da74b790b998b166c702fea1858399e8ec74c8f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de55180fc5b98403a9b9c2da74b790b998b166c702fea1858399e8ec74c8f09->enter($__internal_5de55180fc5b98403a9b9c2da74b790b998b166c702fea1858399e8ec74c8f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 70
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 71
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 113
        echo "                </div>
            ";
        
        $__internal_5de55180fc5b98403a9b9c2da74b790b998b166c702fea1858399e8ec74c8f09->leave($__internal_5de55180fc5b98403a9b9c2da74b790b998b166c702fea1858399e8ec74c8f09_prof);

        
        $__internal_4cae452118310c4a7baf22a71f12ae441a3c7185234d36257869b95940a52b72->leave($__internal_4cae452118310c4a7baf22a71f12ae441a3c7185234d36257869b95940a52b72_prof);

    }

    // line 71
    public function block_sonata_form_actions($context, array $blocks = array())
    {
        $__internal_982b6a3a9dcf426c70bd679319299da94813190a7ff2db0db0ceb20005735200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982b6a3a9dcf426c70bd679319299da94813190a7ff2db0db0ceb20005735200->enter($__internal_982b6a3a9dcf426c70bd679319299da94813190a7ff2db0db0ceb20005735200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        $__internal_a13a1942dc21296e309c9ac0faeb4a8f93ade393d15e16d5e2a4184528e7d034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13a1942dc21296e309c9ac0faeb4a8f93ade393d15e16d5e2a4184528e7d034->enter($__internal_a13a1942dc21296e309c9ac0faeb4a8f93ade393d15e16d5e2a4184528e7d034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        // line 72
        echo "                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isxmlhttprequest", array())) {
            // line 73
            echo "                        ";
            // line 74
            echo "                        ";
            if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : $this->getContext($context, "objectId")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))))) {
                // line 75
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 77
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 79
            echo "                    ";
        } else {
            // line 80
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "supportsPreviewMode", array())) {
                // line 81
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                ";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 86
            echo "                        ";
            // line 87
            echo "                        ";
            if ( !(null === ((array_key_exists("objectId", $context)) ? (_twig_default_filter((isset($context["objectId"]) ? $context["objectId"] : $this->getContext($context, "objectId")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))))) {
                // line 88
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 90
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
                    // line 91
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 93
                echo "
                            ";
                // line 94
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 95
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 98
                echo "
                            ";
                // line 99
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 100
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 102
                echo "                        ";
            } else {
                // line 103
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "edit"), "method"))) {
                    // line 104
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 106
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method"))) {
                    // line 107
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 109
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 111
            echo "                    ";
        }
        // line 112
        echo "                ";
        
        $__internal_a13a1942dc21296e309c9ac0faeb4a8f93ade393d15e16d5e2a4184528e7d034->leave($__internal_a13a1942dc21296e309c9ac0faeb4a8f93ade393d15e16d5e2a4184528e7d034_prof);

        
        $__internal_982b6a3a9dcf426c70bd679319299da94813190a7ff2db0db0ceb20005735200->leave($__internal_982b6a3a9dcf426c70bd679319299da94813190a7ff2db0db0ceb20005735200_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  531 => 112,  528 => 111,  522 => 109,  516 => 107,  513 => 106,  507 => 104,  504 => 103,  501 => 102,  493 => 100,  491 => 99,  488 => 98,  481 => 96,  476 => 95,  474 => 94,  471 => 93,  465 => 91,  463 => 90,  457 => 88,  454 => 87,  452 => 86,  446 => 83,  442 => 81,  439 => 80,  436 => 79,  430 => 77,  424 => 75,  421 => 74,  419 => 73,  416 => 72,  407 => 71,  396 => 113,  394 => 71,  391 => 70,  382 => 69,  371 => 64,  362 => 63,  351 => 60,  345 => 58,  340 => 55,  321 => 50,  318 => 49,  312 => 47,  310 => 46,  297 => 43,  280 => 42,  276 => 40,  251 => 38,  234 => 37,  230 => 35,  228 => 34,  224 => 32,  221 => 31,  212 => 30,  201 => 27,  192 => 26,  175 => 21,  157 => 17,  144 => 118,  141 => 117,  137 => 115,  135 => 69,  130 => 67,  127 => 66,  125 => 63,  122 => 62,  120 => 30,  117 => 29,  115 => 26,  110 => 24,  106 => 22,  103 => 21,  99 => 20,  96 => 19,  92 => 18,  87 => 17,  84 => 15,  80 => 14,  77 => 13,  71 => 10,  68 => 9,  66 => 8,  63 => 7,  60 => 6,  54 => 3,  51 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block form %}
    {% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}
    {{ sonata_block_render_event('sonata.admin.edit.form.top', { 'admin': admin, 'object': object }) }}

    {# NEXT_MAJOR: remove default filter #}
    {% set url = objectId|default(admin.id(object)) is not null ? 'edit' : 'create' %}

    {% if not admin.hasRoute(url)%}
        <div>
            {{ \"form_not_available\"|trans({}, \"SonataAdminBundle\") }}
        </div>
    {% else %}
        <form
              {% if sonata_admin.adminPool.getOption('form_type') == 'horizontal' %}class=\"form-horizontal\"{% endif %}
              role=\"form\"
              {# NEXT_MAJOR: remove default filter #}
              action=\"{% block sonata_form_action_url %}{{ admin.generateUrl(url, {'id': objectId|default(admin.id(object)), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}{% endblock %}\"
              {% if form.vars.multipart %} enctype=\"multipart/form-data\"{% endif %}
              method=\"POST\"
              {% if not sonata_admin.adminPool.getOption('html5_validate') %}novalidate=\"novalidate\"{% endif %}
              {% block sonata_form_attributes %}{% endblock %}
              >

            {{ include('SonataAdminBundle:Helper:render_form_dismissable_errors.html.twig') }}

            {% block sonata_pre_fieldsets %}
                <div class=\"row\">
            {% endblock %}

            {% block sonata_tab_content %}
                {% set has_tab = ((admin.formtabs|length == 1 and admin.formtabs|keys[0] != 'default') or admin.formtabs|length > 1 ) %}

                <div class=\"col-md-12\">
                    {% if has_tab %}
                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                {% for name, form_tab in admin.formtabs %}
                                    <li{% if loop.index == 1 %} class=\"active\"{% endif %}><a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> {{ form_tab.label|trans({}, form_tab.translation_domain ?: admin.translationDomain) }}</a></li>
                                {% endfor %}
                            </ul>
                            <div class=\"tab-content\">
                                {% for code, form_tab in admin.formtabs %}
                                    <div class=\"tab-pane fade{% if loop.first %} in active{% endif %}\" id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                {% if form_tab.description != false %}
                                                    <p>{{ form_tab.description|raw }}</p>
                                                {% endif %}

                                                {{ form_helper.render_groups(admin, form, form_tab['groups'], has_tab) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                        </div>
                    {% else %}
                        {{ form_helper.render_groups(admin, form, admin.formtabs['default'].groups, has_tab) }}
                    {% endif %}
                </div>
            {% endblock %}

            {% block sonata_post_fieldsets %}
                </div>
            {% endblock %}

            {{ form_rest(form) }}

            {% block formactions %}
                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                {% block sonata_form_actions %}
                    {% if app.request.isxmlhttprequest %}
                        {# NEXT_MAJOR: remove default filter #}
                        {% if objectId|default(admin.id(object)) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update'|trans({}, 'SonataAdminBundle') }}</button>
                        {% else %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% else %}
                        {% if admin.supportsPreviewMode %}
                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                {{ 'btn_preview'|trans({}, 'SonataAdminBundle') }}
                            </button>
                        {% endif %}
                        {# NEXT_MAJOR: remove default filter #}
                        {% if objectId|default(admin.id(object)) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>

                            {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_update_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}

                            {% if admin.hasRoute('delete') and admin.hasAccess('delete', object) %}
                                {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}
                                <a class=\"btn btn-danger\" href=\"{{ admin.generateObjectUrl('delete', object) }}\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}

                            {% if admin.isAclEnabled() and admin.hasRoute('acl') and admin.hasAccess('acl', object) %}
                                <a class=\"btn btn-info\" href=\"{{ admin.generateObjectUrl('acl', object) }}\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}
                        {% else %}
                            {% if admin.hasroute('edit') and admin.hasAccess('edit') %}
                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            {% if admin.hasroute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_create_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create_and_create_a_new_one'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% endif %}
                {% endblock %}
                </div>
            {% endblock formactions %}
        </form>
    {% endif%}

    {{ sonata_block_render_event('sonata.admin.edit.form.bottom', { 'admin': admin, 'object': object }) }}

{% endblock %}
", "SonataAdminBundle:CRUD:base_edit_form.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit_form.html.twig");
    }
}
