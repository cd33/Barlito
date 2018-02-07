<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_01d177c9faaea53d1f0a27bea4a32c5d27c81565d6dd70f6351c9d6b39056f4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
            'show_groups' => array($this, 'block_show_groups'),
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58ee3665534f95601f438b5c1339c1555c561cc7a94c956442dd945b6666f9ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ee3665534f95601f438b5c1339c1555c561cc7a94c956442dd945b6666f9ca->enter($__internal_58ee3665534f95601f438b5c1339c1555c561cc7a94c956442dd945b6666f9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $__internal_56c3b4c353749f2db5e867680439fa4cc82ab37105728bb7818c24dbeda6b6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c3b4c353749f2db5e867680439fa4cc82ab37105728bb7818c24dbeda6b6f1->enter($__internal_56c3b4c353749f2db5e867680439fa4cc82ab37105728bb7818c24dbeda6b6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58ee3665534f95601f438b5c1339c1555c561cc7a94c956442dd945b6666f9ca->leave($__internal_58ee3665534f95601f438b5c1339c1555c561cc7a94c956442dd945b6666f9ca_prof);

        
        $__internal_56c3b4c353749f2db5e867680439fa4cc82ab37105728bb7818c24dbeda6b6f1->leave($__internal_56c3b4c353749f2db5e867680439fa4cc82ab37105728bb7818c24dbeda6b6f1_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5727fd95768fa162a12eb30e6f7ccade6272372a35cb230e77fbce0d555f76f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5727fd95768fa162a12eb30e6f7ccade6272372a35cb230e77fbce0d555f76f->enter($__internal_f5727fd95768fa162a12eb30e6f7ccade6272372a35cb230e77fbce0d555f76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b1c825a810ff0513ac869dcfae793099925ab998d5bf9995b7c85546e19f825f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c825a810ff0513ac869dcfae793099925ab998d5bf9995b7c85546e19f825f->enter($__internal_b1c825a810ff0513ac869dcfae793099925ab998d5bf9995b7c85546e19f825f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_show", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
        echo "
";
        
        $__internal_b1c825a810ff0513ac869dcfae793099925ab998d5bf9995b7c85546e19f825f->leave($__internal_b1c825a810ff0513ac869dcfae793099925ab998d5bf9995b7c85546e19f825f_prof);

        
        $__internal_f5727fd95768fa162a12eb30e6f7ccade6272372a35cb230e77fbce0d555f76f->leave($__internal_f5727fd95768fa162a12eb30e6f7ccade6272372a35cb230e77fbce0d555f76f_prof);

    }

    // line 18
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_1df0190688548f1813f382a5abac40a0d2dd04bd5949115d6166a49ccd927b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df0190688548f1813f382a5abac40a0d2dd04bd5949115d6166a49ccd927b18->enter($__internal_1df0190688548f1813f382a5abac40a0d2dd04bd5949115d6166a49ccd927b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_405da19921491df81b2a21b978b216b02400c7a9add998e39efe01b45c32dab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405da19921491df81b2a21b978b216b02400c7a9add998e39efe01b45c32dab6->enter($__internal_405da19921491df81b2a21b978b216b02400c7a9add998e39efe01b45c32dab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 19
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_405da19921491df81b2a21b978b216b02400c7a9add998e39efe01b45c32dab6->leave($__internal_405da19921491df81b2a21b978b216b02400c7a9add998e39efe01b45c32dab6_prof);

        
        $__internal_1df0190688548f1813f382a5abac40a0d2dd04bd5949115d6166a49ccd927b18->leave($__internal_1df0190688548f1813f382a5abac40a0d2dd04bd5949115d6166a49ccd927b18_prof);

    }

    // line 22
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a24f4bddf379122c28ed91a1fadabb502df5d348b8ba6ce56edbcb2911705656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24f4bddf379122c28ed91a1fadabb502df5d348b8ba6ce56edbcb2911705656->enter($__internal_a24f4bddf379122c28ed91a1fadabb502df5d348b8ba6ce56edbcb2911705656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_49ab8bce75916d18f9fa402ae5f5613f99779487e42433166fddb5ff4dd85a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ab8bce75916d18f9fa402ae5f5613f99779487e42433166fddb5ff4dd85a06->enter($__internal_49ab8bce75916d18f9fa402ae5f5613f99779487e42433166fddb5ff4dd85a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 23
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 23)->display($context);
        
        $__internal_49ab8bce75916d18f9fa402ae5f5613f99779487e42433166fddb5ff4dd85a06->leave($__internal_49ab8bce75916d18f9fa402ae5f5613f99779487e42433166fddb5ff4dd85a06_prof);

        
        $__internal_a24f4bddf379122c28ed91a1fadabb502df5d348b8ba6ce56edbcb2911705656->leave($__internal_a24f4bddf379122c28ed91a1fadabb502df5d348b8ba6ce56edbcb2911705656_prof);

    }

    // line 26
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_a23bd8e888133e06522161dd3d164abe829a98caf9c8d07b0276b04e54eaeb3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23bd8e888133e06522161dd3d164abe829a98caf9c8d07b0276b04e54eaeb3c->enter($__internal_a23bd8e888133e06522161dd3d164abe829a98caf9c8d07b0276b04e54eaeb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_b61d415c3594f5795872dd726ba40168e5646186fc25c0b8e4e5101222b3dce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61d415c3594f5795872dd726ba40168e5646186fc25c0b8e4e5101222b3dce0->enter($__internal_b61d415c3594f5795872dd726ba40168e5646186fc25c0b8e4e5101222b3dce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 27
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(        // line 29
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        // line 30
        echo "
";
        
        $__internal_b61d415c3594f5795872dd726ba40168e5646186fc25c0b8e4e5101222b3dce0->leave($__internal_b61d415c3594f5795872dd726ba40168e5646186fc25c0b8e4e5101222b3dce0_prof);

        
        $__internal_a23bd8e888133e06522161dd3d164abe829a98caf9c8d07b0276b04e54eaeb3c->leave($__internal_a23bd8e888133e06522161dd3d164abe829a98caf9c8d07b0276b04e54eaeb3c_prof);

    }

    // line 33
    public function block_show($context, array $blocks = array())
    {
        $__internal_4e06cfb3e4fa188515999ce007e7e5c9ac08ceebd230af25a363d925a6f068c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e06cfb3e4fa188515999ce007e7e5c9ac08ceebd230af25a363d925a6f068c0->enter($__internal_4e06cfb3e4fa188515999ce007e7e5c9ac08ceebd230af25a363d925a6f068c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_4e75e8fe6f812c190c728ecdd099f54c64e1a62d8c51dd3f2a277b6cdb649947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e75e8fe6f812c190c728ecdd099f54c64e1a62d8c51dd3f2a277b6cdb649947->enter($__internal_4e75e8fe6f812c190c728ecdd099f54c64e1a62d8c51dd3f2a277b6cdb649947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 34
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 36
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

        ";
        // line 38
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) > 1));
        // line 39
        echo "
        ";
        // line 40
        if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
            // line 41
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 44
                echo "                        <li";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#tab_";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                ";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["show_tab"], "label", array()), array(), (($this->getAttribute($context["show_tab"], "translation_domain", array())) ? ($this->getAttribute($context["show_tab"], "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "
                            </a>
                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 55
                echo "                        <div
                                class=\"tab-pane fade";
                // line 56
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\"
                                id=\"tab_";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 61
                if (($this->getAttribute($context["show_tab"], "description", array()) != false)) {
                    // line 62
                    echo "                                        <p>";
                    echo $this->getAttribute($context["show_tab"], "description", array());
                    echo "</p>
                                    ";
                }
                // line 64
                echo "
                                    ";
                // line 65
                $context["groups"] = $this->getAttribute($context["show_tab"], "groups", array());
                // line 66
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable($this->getAttribute(        // line 73
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()))) {
            // line 74
            echo "            ";
            $context["groups"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()), "default", array()), "groups", array());
            // line 75
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 77
        echo "
    </div>

    ";
        // line 80
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "
";
        
        $__internal_4e75e8fe6f812c190c728ecdd099f54c64e1a62d8c51dd3f2a277b6cdb649947->leave($__internal_4e75e8fe6f812c190c728ecdd099f54c64e1a62d8c51dd3f2a277b6cdb649947_prof);

        
        $__internal_4e06cfb3e4fa188515999ce007e7e5c9ac08ceebd230af25a363d925a6f068c0->leave($__internal_4e06cfb3e4fa188515999ce007e7e5c9ac08ceebd230af25a363d925a6f068c0_prof);

    }

    // line 83
    public function block_show_groups($context, array $blocks = array())
    {
        $__internal_df2d762efc37d61669f5aff543eacbaabb1ac3f25281e895c81f3ff7207c75ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2d762efc37d61669f5aff543eacbaabb1ac3f25281e895c81f3ff7207c75ec->enter($__internal_df2d762efc37d61669f5aff543eacbaabb1ac3f25281e895c81f3ff7207c75ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        $__internal_e172050f4ecab70f75b24b08e5e522915645798ad6d61eaa98b03ccfbaef03d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e172050f4ecab70f75b24b08e5e522915645798ad6d61eaa98b03ccfbaef03d4->enter($__internal_e172050f4ecab70f75b24b08e5e522915645798ad6d61eaa98b03ccfbaef03d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        // line 84
        echo "    <div class=\"row\">
        ";
        // line 85
        $this->displayBlock('field_row', $context, $blocks);
        // line 117
        echo "
    </div>
";
        
        $__internal_e172050f4ecab70f75b24b08e5e522915645798ad6d61eaa98b03ccfbaef03d4->leave($__internal_e172050f4ecab70f75b24b08e5e522915645798ad6d61eaa98b03ccfbaef03d4_prof);

        
        $__internal_df2d762efc37d61669f5aff543eacbaabb1ac3f25281e895c81f3ff7207c75ec->leave($__internal_df2d762efc37d61669f5aff543eacbaabb1ac3f25281e895c81f3ff7207c75ec_prof);

    }

    // line 85
    public function block_field_row($context, array $blocks = array())
    {
        $__internal_551b61ce19dbcc8986c36eef58018fb3cc244a50a079f247d1797d67d0ad434c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_551b61ce19dbcc8986c36eef58018fb3cc244a50a079f247d1797d67d0ad434c->enter($__internal_551b61ce19dbcc8986c36eef58018fb3cc244a50a079f247d1797d67d0ad434c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_8ba8a1ea4674a4b3c35b36df808b6fef032eb5c5ee36397eab654199223d525f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba8a1ea4674a4b3c35b36df808b6fef032eb5c5ee36397eab654199223d525f->enter($__internal_8ba8a1ea4674a4b3c35b36df808b6fef032eb5c5ee36397eab654199223d525f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 86
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 87
            echo "                ";
            $context["show_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 88
            echo "
                <div class=\"";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((((array_key_exists("no_padding", $context)) ? (_twig_default_filter((isset($context["no_padding"]) ? $context["no_padding"] : $this->getContext($context, "no_padding")), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 93
            $this->displayBlock('show_title', $context, $blocks);
            // line 96
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 102
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 109
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                </tbody>
                            </table>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        ";
        
        $__internal_8ba8a1ea4674a4b3c35b36df808b6fef032eb5c5ee36397eab654199223d525f->leave($__internal_8ba8a1ea4674a4b3c35b36df808b6fef032eb5c5ee36397eab654199223d525f_prof);

        
        $__internal_551b61ce19dbcc8986c36eef58018fb3cc244a50a079f247d1797d67d0ad434c->leave($__internal_551b61ce19dbcc8986c36eef58018fb3cc244a50a079f247d1797d67d0ad434c_prof);

    }

    // line 93
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_fb6d3eb2f3e55434a09becb144545c7c04a7614432921cf0293e44fb502339e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6d3eb2f3e55434a09becb144545c7c04a7614432921cf0293e44fb502339e1->enter($__internal_fb6d3eb2f3e55434a09becb144545c7c04a7614432921cf0293e44fb502339e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_d50fe677d977aff993076d6d6d3d5a1244b9618d39e71bfba188af0767f9208d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50fe677d977aff993076d6d6d3d5a1244b9618d39e71bfba188af0767f9208d->enter($__internal_d50fe677d977aff993076d6d6d3d5a1244b9618d39e71bfba188af0767f9208d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 94
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "label", array()), array(), (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "translation_domain", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                                ";
        
        $__internal_d50fe677d977aff993076d6d6d3d5a1244b9618d39e71bfba188af0767f9208d->leave($__internal_d50fe677d977aff993076d6d6d3d5a1244b9618d39e71bfba188af0767f9208d_prof);

        
        $__internal_fb6d3eb2f3e55434a09becb144545c7c04a7614432921cf0293e44fb502339e1->leave($__internal_fb6d3eb2f3e55434a09becb144545c7c04a7614432921cf0293e44fb502339e1_prof);

    }

    // line 102
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_106b9d704772b85b8abb69693965746af2f453f4347e77d31a5fab00a0c91bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_106b9d704772b85b8abb69693965746af2f453f4347e77d31a5fab00a0c91bd1->enter($__internal_106b9d704772b85b8abb69693965746af2f453f4347e77d31a5fab00a0c91bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_f1d6cfaa869e79625ccfb57d6e2d659c6e53a7f330d2e0cb38b61f9ba5662e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1d6cfaa869e79625ccfb57d6e2d659c6e53a7f330d2e0cb38b61f9ba5662e5c->enter($__internal_f1d6cfaa869e79625ccfb57d6e2d659c6e53a7f330d2e0cb38b61f9ba5662e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 103
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 104
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 105
            echo "                                                ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                            ";
        }
        // line 107
        echo "                                        </tr>
                                    ";
        
        $__internal_f1d6cfaa869e79625ccfb57d6e2d659c6e53a7f330d2e0cb38b61f9ba5662e5c->leave($__internal_f1d6cfaa869e79625ccfb57d6e2d659c6e53a7f330d2e0cb38b61f9ba5662e5c_prof);

        
        $__internal_106b9d704772b85b8abb69693965746af2f453f4347e77d31a5fab00a0c91bd1->leave($__internal_106b9d704772b85b8abb69693965746af2f453f4347e77d31a5fab00a0c91bd1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 107,  496 => 105,  494 => 104,  491 => 103,  482 => 102,  469 => 94,  460 => 93,  450 => 116,  431 => 110,  417 => 109,  414 => 102,  397 => 101,  390 => 96,  388 => 93,  382 => 90,  376 => 89,  373 => 88,  370 => 87,  352 => 86,  343 => 85,  331 => 117,  329 => 85,  326 => 84,  317 => 83,  305 => 80,  300 => 77,  294 => 75,  291 => 74,  289 => 73,  285 => 71,  265 => 66,  263 => 65,  260 => 64,  254 => 62,  252 => 61,  243 => 57,  237 => 56,  234 => 55,  217 => 54,  212 => 51,  194 => 47,  187 => 45,  180 => 44,  163 => 43,  159 => 41,  157 => 40,  154 => 39,  152 => 38,  147 => 36,  143 => 34,  134 => 33,  123 => 30,  121 => 29,  119 => 27,  110 => 26,  100 => 23,  91 => 22,  78 => 19,  69 => 18,  56 => 15,  47 => 14,  26 => 12,);
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

{% extends base_template %}

{% block title %}
    {{ \"title_show\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass' : 'active',
        'template': sonata_admin.adminPool.getTemplate('tab_menu_template')
    }, 'twig') }}
{% endblock %}

{% block show %}
    <div class=\"sonata-ba-view\">

        {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}

        {% set has_tab = (admin.showtabs|length == 1 and admin.showtabs|keys[0] != 'default') or admin.showtabs|length > 1 %}

        {% if has_tab %}
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    {% for name, show_tab in admin.showtabs %}
                        <li{% if loop.first %} class=\"active\"{% endif %}>
                            <a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                {{ show_tab.label|trans({}, show_tab.translation_domain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for code, show_tab in admin.showtabs %}
                        <div
                                class=\"tab-pane fade{% if loop.first %} in active{% endif %}\"
                                id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% if show_tab.description != false %}
                                        <p>{{ show_tab.description|raw }}</p>
                                    {% endif %}

                                    {% set groups = show_tab.groups %}
                                    {{ block('show_groups') }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% elseif admin.showtabs is iterable %}
            {% set groups = admin.showtabs.default.groups %}
            {{ block('show_groups') }}
        {% endif %}

    </div>

    {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}
{% endblock %}

{% block show_groups %}
    <div class=\"row\">
        {% block field_row %}
            {% for code in groups %}
                {% set show_group = admin.showgroups[code] %}

                <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding|default(false) ? 'nopadding' }}\">
                    <div class=\"{{ show_group.box_class }}\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                {% block show_title %}
                                    {{ show_group.label|trans({}, show_group.translation_domain|default(admin.translationDomain)) }}
                                {% endblock %}
                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                {% for field_name in show_group.fields %}
                                    {% block show_field %}
                                        <tr class=\"sonata-ba-view-container\">
                                            {% if elements[field_name] is defined %}
                                                {{ elements[field_name]|render_view_element(object)}}
                                            {% endif %}
                                        </tr>
                                    {% endblock %}
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endblock %}

    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show.html.twig");
    }
}
