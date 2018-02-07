<?php

/* knp_menu.html.twig */
class __TwigTemplate_e8c9bd5d8a3f374aa8d2591c03e4fe6ff1beae91518d90733ddc408e7cb59f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b524c7448df0ee2713ad3c3fb0f16b0be509de3e8dfe5e842881a6949ee9ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b524c7448df0ee2713ad3c3fb0f16b0be509de3e8dfe5e842881a6949ee9ce7->enter($__internal_3b524c7448df0ee2713ad3c3fb0f16b0be509de3e8dfe5e842881a6949ee9ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_fe6aced94e9a78c83cb36e933a1d48688bb67b0a44c7921ebb31b4486c1eed40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6aced94e9a78c83cb36e933a1d48688bb67b0a44c7921ebb31b4486c1eed40->enter($__internal_fe6aced94e9a78c83cb36e933a1d48688bb67b0a44c7921ebb31b4486c1eed40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b524c7448df0ee2713ad3c3fb0f16b0be509de3e8dfe5e842881a6949ee9ce7->leave($__internal_3b524c7448df0ee2713ad3c3fb0f16b0be509de3e8dfe5e842881a6949ee9ce7_prof);

        
        $__internal_fe6aced94e9a78c83cb36e933a1d48688bb67b0a44c7921ebb31b4486c1eed40->leave($__internal_fe6aced94e9a78c83cb36e933a1d48688bb67b0a44c7921ebb31b4486c1eed40_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_b6aeb8971a24f7e707c1acbd54b811219404ac59e749b820cfb4fe5371ef4fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6aeb8971a24f7e707c1acbd54b811219404ac59e749b820cfb4fe5371ef4fff->enter($__internal_b6aeb8971a24f7e707c1acbd54b811219404ac59e749b820cfb4fe5371ef4fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_55bf9bd613bdebce3127deebd503fa7b6c4cd81b881cf64e17aa2634f17204ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55bf9bd613bdebce3127deebd503fa7b6c4cd81b881cf64e17aa2634f17204ee->enter($__internal_55bf9bd613bdebce3127deebd503fa7b6c4cd81b881cf64e17aa2634f17204ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_55bf9bd613bdebce3127deebd503fa7b6c4cd81b881cf64e17aa2634f17204ee->leave($__internal_55bf9bd613bdebce3127deebd503fa7b6c4cd81b881cf64e17aa2634f17204ee_prof);

        
        $__internal_b6aeb8971a24f7e707c1acbd54b811219404ac59e749b820cfb4fe5371ef4fff->leave($__internal_b6aeb8971a24f7e707c1acbd54b811219404ac59e749b820cfb4fe5371ef4fff_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_7d92293a8202bf4dcf14dcfe0c2e40308b4643d268d242260e3ab093e7b3085f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d92293a8202bf4dcf14dcfe0c2e40308b4643d268d242260e3ab093e7b3085f->enter($__internal_7d92293a8202bf4dcf14dcfe0c2e40308b4643d268d242260e3ab093e7b3085f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_f25a2e8c9a7339866e0ed237864cd282f1703cdd74d63085114d8edca12368c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f25a2e8c9a7339866e0ed237864cd282f1703cdd74d63085114d8edca12368c5->enter($__internal_f25a2e8c9a7339866e0ed237864cd282f1703cdd74d63085114d8edca12368c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_f25a2e8c9a7339866e0ed237864cd282f1703cdd74d63085114d8edca12368c5->leave($__internal_f25a2e8c9a7339866e0ed237864cd282f1703cdd74d63085114d8edca12368c5_prof);

        
        $__internal_7d92293a8202bf4dcf14dcfe0c2e40308b4643d268d242260e3ab093e7b3085f->leave($__internal_7d92293a8202bf4dcf14dcfe0c2e40308b4643d268d242260e3ab093e7b3085f_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_31c2f6caf261bc4c6ef2d12f5a6e1c20d8949c2627930a9651b90688ba6d9c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31c2f6caf261bc4c6ef2d12f5a6e1c20d8949c2627930a9651b90688ba6d9c2f->enter($__internal_31c2f6caf261bc4c6ef2d12f5a6e1c20d8949c2627930a9651b90688ba6d9c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_6057bb12d498a385133f4f2ff87dd142a9da6605dbc46e1471bd9c65ebe0733d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6057bb12d498a385133f4f2ff87dd142a9da6605dbc46e1471bd9c65ebe0733d->enter($__internal_6057bb12d498a385133f4f2ff87dd142a9da6605dbc46e1471bd9c65ebe0733d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_6057bb12d498a385133f4f2ff87dd142a9da6605dbc46e1471bd9c65ebe0733d->leave($__internal_6057bb12d498a385133f4f2ff87dd142a9da6605dbc46e1471bd9c65ebe0733d_prof);

        
        $__internal_31c2f6caf261bc4c6ef2d12f5a6e1c20d8949c2627930a9651b90688ba6d9c2f->leave($__internal_31c2f6caf261bc4c6ef2d12f5a6e1c20d8949c2627930a9651b90688ba6d9c2f_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_02a2dabc674bd8ad0eecfff1d8919f33534acf7fd7f616195e1fbfbb1fabbbff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a2dabc674bd8ad0eecfff1d8919f33534acf7fd7f616195e1fbfbb1fabbbff->enter($__internal_02a2dabc674bd8ad0eecfff1d8919f33534acf7fd7f616195e1fbfbb1fabbbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_6741c0b1dd999dab3f23be3325037889fea88d09b9e3425422c2616b95418c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6741c0b1dd999dab3f23be3325037889fea88d09b9e3425422c2616b95418c13->enter($__internal_6741c0b1dd999dab3f23be3325037889fea88d09b9e3425422c2616b95418c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 34
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 36
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())) && ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("matchingDepth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 48
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
        
        $__internal_6741c0b1dd999dab3f23be3325037889fea88d09b9e3425422c2616b95418c13->leave($__internal_6741c0b1dd999dab3f23be3325037889fea88d09b9e3425422c2616b95418c13_prof);

        
        $__internal_02a2dabc674bd8ad0eecfff1d8919f33534acf7fd7f616195e1fbfbb1fabbbff->leave($__internal_02a2dabc674bd8ad0eecfff1d8919f33534acf7fd7f616195e1fbfbb1fabbbff_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_507d4273d35d4224b3295cfbba44e044a2ae42091c91f12a7942453932ea5c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_507d4273d35d4224b3295cfbba44e044a2ae42091c91f12a7942453932ea5c2d->enter($__internal_507d4273d35d4224b3295cfbba44e044a2ae42091c91f12a7942453932ea5c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_05134de3e028a0534ef2244e5555084c2bede8f2eab2641fc8cf85aac9e314ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05134de3e028a0534ef2244e5555084c2bede8f2eab2641fc8cf85aac9e314ae->enter($__internal_05134de3e028a0534ef2244e5555084c2bede8f2eab2641fc8cf85aac9e314ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 57
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 60
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 63
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "attributes", array());
            // line 77
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->getattributes((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            echo ">";
            // line 83
            if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method") || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_05134de3e028a0534ef2244e5555084c2bede8f2eab2641fc8cf85aac9e314ae->leave($__internal_05134de3e028a0534ef2244e5555084c2bede8f2eab2641fc8cf85aac9e314ae_prof);

        
        $__internal_507d4273d35d4224b3295cfbba44e044a2ae42091c91f12a7942453932ea5c2d->leave($__internal_507d4273d35d4224b3295cfbba44e044a2ae42091c91f12a7942453932ea5c2d_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_4d822647e27a514bdb66389c6e1e879d1cbb8cba82aceda380eeb00d334d43fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d822647e27a514bdb66389c6e1e879d1cbb8cba82aceda380eeb00d334d43fb->enter($__internal_4d822647e27a514bdb66389c6e1e879d1cbb8cba82aceda380eeb00d334d43fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_c2472e149ad820c4a219f2141b6537316ed7742d633d958f71d15052359f6c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2472e149ad820c4a219f2141b6537316ed7742d633d958f71d15052359f6c87->enter($__internal_c2472e149ad820c4a219f2141b6537316ed7742d633d958f71d15052359f6c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_c2472e149ad820c4a219f2141b6537316ed7742d633d958f71d15052359f6c87->leave($__internal_c2472e149ad820c4a219f2141b6537316ed7742d633d958f71d15052359f6c87_prof);

        
        $__internal_4d822647e27a514bdb66389c6e1e879d1cbb8cba82aceda380eeb00d334d43fb->leave($__internal_4d822647e27a514bdb66389c6e1e879d1cbb8cba82aceda380eeb00d334d43fb_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_21630adafb361a5ceec8b37c8b9909211dbce9f0f292002a15a2424533e2dd2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21630adafb361a5ceec8b37c8b9909211dbce9f0f292002a15a2424533e2dd2c->enter($__internal_21630adafb361a5ceec8b37c8b9909211dbce9f0f292002a15a2424533e2dd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_b9fdd28e68a523ddb0c476028fc788303b20805413ad1ba6a87aea8373b46593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9fdd28e68a523ddb0c476028fc788303b20805413ad1ba6a87aea8373b46593->enter($__internal_b9fdd28e68a523ddb0c476028fc788303b20805413ad1ba6a87aea8373b46593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_b9fdd28e68a523ddb0c476028fc788303b20805413ad1ba6a87aea8373b46593->leave($__internal_b9fdd28e68a523ddb0c476028fc788303b20805413ad1ba6a87aea8373b46593_prof);

        
        $__internal_21630adafb361a5ceec8b37c8b9909211dbce9f0f292002a15a2424533e2dd2c->leave($__internal_21630adafb361a5ceec8b37c8b9909211dbce9f0f292002a15a2424533e2dd2c_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_b8ec64276e8a4c131d2e110f14a0aa8a126f8ccd3f2f0eb56c050e30854ee996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ec64276e8a4c131d2e110f14a0aa8a126f8ccd3f2f0eb56c050e30854ee996->enter($__internal_b8ec64276e8a4c131d2e110f14a0aa8a126f8ccd3f2f0eb56c050e30854ee996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_506e590bd1ea15564abf1ef35386451712171a00749cf9dd21e33e71d3817b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506e590bd1ea15564abf1ef35386451712171a00749cf9dd21e33e71d3817b40->enter($__internal_506e590bd1ea15564abf1ef35386451712171a00749cf9dd21e33e71d3817b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), "html", null, true);
        }
        
        $__internal_506e590bd1ea15564abf1ef35386451712171a00749cf9dd21e33e71d3817b40->leave($__internal_506e590bd1ea15564abf1ef35386451712171a00749cf9dd21e33e71d3817b40_prof);

        
        $__internal_b8ec64276e8a4c131d2e110f14a0aa8a126f8ccd3f2f0eb56c050e30854ee996->leave($__internal_b8ec64276e8a4c131d2e110f14a0aa8a126f8ccd3f2f0eb56c050e30854ee996_prof);

    }

    // line 3
    public function getattributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a8b4573c854b81b25df1df94265e5b63352f932663bb1ec885326ef14286ece7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a8b4573c854b81b25df1df94265e5b63352f932663bb1ec885326ef14286ece7->enter($__internal_a8b4573c854b81b25df1df94265e5b63352f932663bb1ec885326ef14286ece7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_cf356f22f5445ef13362713374cb73b13b1387d39d7d538ca11164e821fc4cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_cf356f22f5445ef13362713374cb73b13b1387d39d7d538ca11164e821fc4cec->enter($__internal_cf356f22f5445ef13362713374cb73b13b1387d39d7d538ca11164e821fc4cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_cf356f22f5445ef13362713374cb73b13b1387d39d7d538ca11164e821fc4cec->leave($__internal_cf356f22f5445ef13362713374cb73b13b1387d39d7d538ca11164e821fc4cec_prof);

            
            $__internal_a8b4573c854b81b25df1df94265e5b63352f932663bb1ec885326ef14286ece7->leave($__internal_a8b4573c854b81b25df1df94265e5b63352f932663bb1ec885326ef14286ece7_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "/var/www/html/Barlito/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu.html.twig");
    }
}
