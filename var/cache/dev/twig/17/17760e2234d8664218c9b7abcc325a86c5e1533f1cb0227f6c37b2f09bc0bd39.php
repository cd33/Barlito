<?php

/* SonataAdminBundle:Core:tab_menu_template.html.twig */
class __TwigTemplate_47701c09eed31ae517323d88acebb973e86cf85986a78789442a2c1bba614308 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1b2203e3a29ac29c77055dbf60efc4ddf7b521f96e5e9535f8bea69a6898978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b2203e3a29ac29c77055dbf60efc4ddf7b521f96e5e9535f8bea69a6898978->enter($__internal_d1b2203e3a29ac29c77055dbf60efc4ddf7b521f96e5e9535f8bea69a6898978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:tab_menu_template.html.twig"));

        $__internal_d5c5f8417159231412f32f47e65c8f6e62c77c1888a54a054d74a80b94e89e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c5f8417159231412f32f47e65c8f6e62c77c1888a54a054d74a80b94e89e85->enter($__internal_d5c5f8417159231412f32f47e65c8f6e62c77c1888a54a054d74a80b94e89e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:tab_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1b2203e3a29ac29c77055dbf60efc4ddf7b521f96e5e9535f8bea69a6898978->leave($__internal_d1b2203e3a29ac29c77055dbf60efc4ddf7b521f96e5e9535f8bea69a6898978_prof);

        
        $__internal_d5c5f8417159231412f32f47e65c8f6e62c77c1888a54a054d74a80b94e89e85->leave($__internal_d5c5f8417159231412f32f47e65c8f6e62c77c1888a54a054d74a80b94e89e85_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_581806f44fef86a71b5ed23a7c94aab0d032d8ee080a94e8e774432b8feb9650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_581806f44fef86a71b5ed23a7c94aab0d032d8ee080a94e8e774432b8feb9650->enter($__internal_581806f44fef86a71b5ed23a7c94aab0d032d8ee080a94e8e774432b8feb9650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_bda76d818a00694ab74cdbd1374ad41c1d7cddff072c5605c7b7dd4f05a0837a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda76d818a00694ab74cdbd1374ad41c1d7cddff072c5605c7b7dd4f05a0837a->enter($__internal_bda76d818a00694ab74cdbd1374ad41c1d7cddff072c5605c7b7dd4f05a0837a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 4);
        // line 5
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 6
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 7
            $context["is_dropdown"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "dropdown", array()), false)) : (false));
            // line 8
            $context["divider_prepend"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_prepend", array()), false)) : (false));
            // line 9
            $context["divider_append"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "divider_append", array()), false)) : (false));
            // line 10
            echo "
";
            // line 12
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if ((isset($context["divider_prepend"]) ? $context["divider_prepend"] : $this->getContext($context, "divider_prepend"))) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
";
            // line 19
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 21
            if (array_key_exists("matcher", $context)) {
                echo " ";
                // line 22
                if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                    // line 23
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 24
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array())), "method")) {
                    // line 25
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
                }
            } else {
                // line 27
                echo " ";
                // line 28
                if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array())) {
                    // line 29
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 30
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "currentAncestor", array())) {
                    // line 31
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
                }
            }
            // line 35
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 36
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 38
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 39
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 41
            echo "
";
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 44
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 45
            echo "
";
            // line 47
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                // line 48
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown"));
                // line 49
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
            }
            // line 51
            echo "
";
            // line 53
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 54
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 56
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 57
            echo "
";
            // line 59
            echo "    <li";
            echo $context["macros"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 60
            if ((isset($context["is_dropdown"]) ? $context["is_dropdown"] : $this->getContext($context, "is_dropdown"))) {
                // line 61
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 62
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "current", array()) || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 63
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if ((isset($context["divider_append"]) ? $context["divider_append"] : $this->getContext($context, "divider_append"))) {
                // line 72
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
        
        $__internal_bda76d818a00694ab74cdbd1374ad41c1d7cddff072c5605c7b7dd4f05a0837a->leave($__internal_bda76d818a00694ab74cdbd1374ad41c1d7cddff072c5605c7b7dd4f05a0837a_prof);

        
        $__internal_581806f44fef86a71b5ed23a7c94aab0d032d8ee080a94e8e774432b8feb9650->leave($__internal_581806f44fef86a71b5ed23a7c94aab0d032d8ee080a94e8e774432b8feb9650_prof);

    }

    // line 77
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_b1803d8e765479e76a07d54f24e894d7a3fa9903667fa109a8ec6a15bc25b989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1803d8e765479e76a07d54f24e894d7a3fa9903667fa109a8ec6a15bc25b989->enter($__internal_b1803d8e765479e76a07d54f24e894d7a3fa9903667fa109a8ec6a15bc25b989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        $__internal_548aa99dd60a72c059289c2a0c46b1c9a1def610f64deec7c50f6e4536d36b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548aa99dd60a72c059289c2a0c46b1c9a1def610f64deec7c50f6e4536d36b94->enter($__internal_548aa99dd60a72c059289c2a0c46b1c9a1def610f64deec7c50f6e4536d36b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 78
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>
";
        }
        
        $__internal_548aa99dd60a72c059289c2a0c46b1c9a1def610f64deec7c50f6e4536d36b94->leave($__internal_548aa99dd60a72c059289c2a0c46b1c9a1def610f64deec7c50f6e4536d36b94_prof);

        
        $__internal_b1803d8e765479e76a07d54f24e894d7a3fa9903667fa109a8ec6a15bc25b989->leave($__internal_b1803d8e765479e76a07d54f24e894d7a3fa9903667fa109a8ec6a15bc25b989_prof);

    }

    // line 85
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_1582db28acdc6dc576fc17c34fa3dc00b782fbae2e0bac515185d719307bb204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1582db28acdc6dc576fc17c34fa3dc00b782fbae2e0bac515185d719307bb204->enter($__internal_1582db28acdc6dc576fc17c34fa3dc00b782fbae2e0bac515185d719307bb204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_154f8ed552f617887450fdfc2fc0c040015aa2b15c0f70be4bc9657c81459390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154f8ed552f617887450fdfc2fc0c040015aa2b15c0f70be4bc9657c81459390->enter($__internal_154f8ed552f617887450fdfc2fc0c040015aa2b15c0f70be4bc9657c81459390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 86
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 86);
        // line 87
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["macros"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">
        ";
        // line 88
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 89
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 91
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_154f8ed552f617887450fdfc2fc0c040015aa2b15c0f70be4bc9657c81459390->leave($__internal_154f8ed552f617887450fdfc2fc0c040015aa2b15c0f70be4bc9657c81459390_prof);

        
        $__internal_1582db28acdc6dc576fc17c34fa3dc00b782fbae2e0bac515185d719307bb204->leave($__internal_1582db28acdc6dc576fc17c34fa3dc00b782fbae2e0bac515185d719307bb204_prof);

    }

    // line 95
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_3277ff8939a00652657397a3df1959abd002154d3a2ab7621ecc3edf4ae56528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3277ff8939a00652657397a3df1959abd002154d3a2ab7621ecc3edf4ae56528->enter($__internal_3277ff8939a00652657397a3df1959abd002154d3a2ab7621ecc3edf4ae56528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_04800de411e3a39541de90df26534dc9a2ee83b18def1f5e91b1928d8f0f845f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04800de411e3a39541de90df26534dc9a2ee83b18def1f5e91b1928d8f0f845f->enter($__internal_04800de411e3a39541de90df26534dc9a2ee83b18def1f5e91b1928d8f0f845f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 96
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 96);
        // line 97
        echo "    <span ";
        echo $context["macros"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">
        ";
        // line 98
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 99
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 101
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
        
        $__internal_04800de411e3a39541de90df26534dc9a2ee83b18def1f5e91b1928d8f0f845f->leave($__internal_04800de411e3a39541de90df26534dc9a2ee83b18def1f5e91b1928d8f0f845f_prof);

        
        $__internal_3277ff8939a00652657397a3df1959abd002154d3a2ab7621ecc3edf4ae56528->leave($__internal_3277ff8939a00652657397a3df1959abd002154d3a2ab7621ecc3edf4ae56528_prof);

    }

    // line 105
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_e4ed52bfb7439f577403f5b84e538ccd809ff8e3bee402574d6cdce9e9bc6cd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ed52bfb7439f577403f5b84e538ccd809ff8e3bee402574d6cdce9e9bc6cd2->enter($__internal_e4ed52bfb7439f577403f5b84e538ccd809ff8e3bee402574d6cdce9e9bc6cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        $__internal_1babf74a3fde9150db5312aad0c063ce8ec21602128e6836e59c1ca2382e8d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1babf74a3fde9150db5312aad0c063ce8ec21602128e6836e59c1ca2382e8d31->enter($__internal_1babf74a3fde9150db5312aad0c063ce8ec21602128e6836e59c1ca2382e8d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 106
        echo "    ";
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "SonataAdminBundle:Core:tab_menu_template.html.twig", 106);
        // line 107
        $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 108
        $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown-toggle"));
        // line 109
        $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array());
        // line 110
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
        // line 111
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("data-toggle" => "dropdown"));
        // line 112
        echo "    <a href=\"#\"";
        echo $context["macros"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
        echo ">
        ";
        // line 113
        if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 114
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 116
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
        
        $__internal_1babf74a3fde9150db5312aad0c063ce8ec21602128e6836e59c1ca2382e8d31->leave($__internal_1babf74a3fde9150db5312aad0c063ce8ec21602128e6836e59c1ca2382e8d31_prof);

        
        $__internal_e4ed52bfb7439f577403f5b84e538ccd809ff8e3bee402574d6cdce9e9bc6cd2->leave($__internal_e4ed52bfb7439f577403f5b84e538ccd809ff8e3bee402574d6cdce9e9bc6cd2_prof);

    }

    // line 121
    public function block_label($context, array $blocks = array())
    {
        $__internal_41b64bbdf4f97f95c218f9e8187d4c8fa3a2b672086dec7d7f2fc33ffb4266ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b64bbdf4f97f95c218f9e8187d4c8fa3a2b672086dec7d7f2fc33ffb4266ed->enter($__internal_41b64bbdf4f97f95c218f9e8187d4c8fa3a2b672086dec7d7f2fc33ffb4266ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_d8c356cba75ec270b0bd338eacbcc5b05c731c78f83ce3fb121aa93ce0e20730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c356cba75ec270b0bd338eacbcc5b05c731c78f83ce3fb121aa93ce0e20730->enter($__internal_d8c356cba75ec270b0bd338eacbcc5b05c731c78f83ce3fb121aa93ce0e20730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 123
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), $this->getAttribute(        // line 124
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute(        // line 125
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translation_domain", 1 => (($this->getAttribute(        // line 127
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getParent", array(), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getParent", array(), "method"), "getExtra", array(0 => "translation_domain"), "method")) : (null))), "method")), "html", null, true);
        
        $__internal_d8c356cba75ec270b0bd338eacbcc5b05c731c78f83ce3fb121aa93ce0e20730->leave($__internal_d8c356cba75ec270b0bd338eacbcc5b05c731c78f83ce3fb121aa93ce0e20730_prof);

        
        $__internal_41b64bbdf4f97f95c218f9e8187d4c8fa3a2b672086dec7d7f2fc33ffb4266ed->leave($__internal_41b64bbdf4f97f95c218f9e8187d4c8fa3a2b672086dec7d7f2fc33ffb4266ed_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 127,  355 => 125,  354 => 124,  353 => 123,  352 => 122,  343 => 121,  328 => 116,  322 => 114,  320 => 113,  315 => 112,  313 => 111,  311 => 110,  309 => 109,  307 => 108,  305 => 107,  302 => 106,  293 => 105,  279 => 101,  273 => 99,  271 => 98,  266 => 97,  263 => 96,  254 => 95,  240 => 91,  234 => 89,  232 => 88,  225 => 87,  222 => 86,  213 => 85,  201 => 81,  197 => 79,  195 => 78,  186 => 77,  173 => 72,  171 => 71,  166 => 68,  162 => 65,  158 => 63,  156 => 62,  153 => 61,  151 => 60,  147 => 59,  144 => 57,  142 => 56,  139 => 54,  137 => 53,  134 => 51,  131 => 49,  129 => 48,  127 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  114 => 39,  112 => 38,  109 => 36,  107 => 35,  103 => 31,  101 => 30,  99 => 29,  97 => 28,  95 => 27,  91 => 25,  89 => 24,  87 => 23,  85 => 22,  82 => 21,  80 => 19,  77 => 17,  73 => 15,  71 => 14,  69 => 12,  66 => 10,  64 => 9,  62 => 8,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  45 => 3,  11 => 1,);
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

{% block item %}
{% import \"knp_menu.html.twig\" as macros %}
{% if item.displayed %}
    {%- set attributes = item.attributes %}
    {%- set is_dropdown = attributes.dropdown|default(false) %}
    {%- set divider_prepend = attributes.divider_prepend|default(false) %}
    {%- set divider_append = attributes.divider_append|default(false) %}

{# unset bootstrap specific attributes #}
    {%- set attributes = attributes|merge({'dropdown': null, 'divider_prepend': null, 'divider_append': null }) %}

    {%- if divider_prepend %}
        {{ block('dividerElement') }}
    {%- endif %}

{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}

    {%- if matcher is defined %} {# KnpMenu 2.0#}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- else %} {# KnpMenu 1.X #}
        {%- if item.current %}
        {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif item.currentAncestor %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- endif %}

    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

{# building the class of the children #}
    {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
    {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}

{# adding classes for dropdown #}
    {%- if is_dropdown %}
        {%- set classes = classes|merge(['dropdown']) %}
        {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}
    {%- endif %}

{# putting classes together #}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}

{# displaying the item #}
    <li{{ macros.attributes(attributes) }}>
        {%- if is_dropdown %}
            {{ block('dropdownElement') }}
        {%- elseif item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {{ block('list') }}
    </li>

    {%- if divider_append %}
        {{ block('dividerElement') }}
    {%- endif %}
{% endif %}
{% endblock %}

{% block dividerElement %}
{% if item.level == 1 %}
    <li class=\"divider-vertical\"></li>
{% else %}
    <li class=\"divider\"></li>
{% endif %}
{% endblock %}

{% block linkElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    <a href=\"{{ item.uri }}\"{{ macros.attributes(item.linkAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </a>
{% endblock %}

{% block spanElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    <span {{ macros.attributes(item.labelAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </span>
{% endblock %}

{% block dropdownElement %}
    {% import \"knp_menu.html.twig\" as macros %}
    {%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}
    {%- set classes = classes|merge(['dropdown-toggle']) %}
    {%- set attributes = item.linkAttributes %}
    {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- set attributes = attributes|merge({'data-toggle': 'dropdown'}) %}
    <a href=\"#\"{{ macros.attributes(attributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
        <b class=\"caret\"></b>
    </a>
{% endblock %}

{% block label %}
{{-
    item.label|trans(
        item.getExtra('translation_params', {}),
        item.getExtra(
            'translation_domain',
            item.getParent() ? item.getParent().getExtra('translation_domain') : null
        )
    )
-}}
{% endblock %}
", "SonataAdminBundle:Core:tab_menu_template.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/Core/tab_menu_template.html.twig");
    }
}
