<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_11a1c4194d59c678bd1de56c80a2f005c87e78d3eabb296b4a8f2da956571c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29c08396ed50ae76c6aa60741d7bebe2890aeccc505bdbe0d7dae27df958de11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c08396ed50ae76c6aa60741d7bebe2890aeccc505bdbe0d7dae27df958de11->enter($__internal_29c08396ed50ae76c6aa60741d7bebe2890aeccc505bdbe0d7dae27df958de11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        $__internal_8cbdc548ce8095c97ba3441bc62c6bca934df19eef882481559cb8faa65c3aa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cbdc548ce8095c97ba3441bc62c6bca934df19eef882481559cb8faa65c3aa1->enter($__internal_8cbdc548ce8095c97ba3441bc62c6bca934df19eef882481559cb8faa65c3aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $context["_preview"] = ((        $this->hasBlock("preview", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("preview", $context, $blocks))) : (null));
        // line 13
        $context["_form"] = ((        $this->hasBlock("form", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("form", $context, $blocks))) : (null));
        // line 14
        $context["_show"] = ((        $this->hasBlock("show", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("show", $context, $blocks))) : (null));
        // line 15
        $context["_list_table"] = ((        $this->hasBlock("list_table", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_table", $context, $blocks))) : (null));
        // line 16
        $context["_list_filters"] = ((        $this->hasBlock("list_filters", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters", $context, $blocks))) : (null));
        // line 17
        $context["_tab_menu"] = ((        $this->hasBlock("tab_menu", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("tab_menu", $context, $blocks))) : (null));
        // line 18
        $context["_content"] = ((        $this->hasBlock("content", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("content", $context, $blocks))) : (null));
        // line 19
        $context["_title"] = ((        $this->hasBlock("title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("title", $context, $blocks))) : (null));
        // line 20
        $context["_breadcrumb"] = ((        $this->hasBlock("breadcrumb", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("breadcrumb", $context, $blocks))) : (null));
        // line 21
        $context["_actions"] = ((        $this->hasBlock("actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("actions", $context, $blocks))) : (null));
        // line 22
        $context["_navbar_title"] = ((        $this->hasBlock("navbar_title", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("navbar_title", $context, $blocks))) : (null));
        // line 23
        $context["_list_filters_actions"] = ((        $this->hasBlock("list_filters_actions", $context, $blocks)) ? (twig_trim_filter(        $this->renderBlock("list_filters_actions", $context, $blocks))) : (null));
        // line 24
        echo "
<!DOCTYPE html>
<html ";
        // line 26
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 28
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
        <title>
        ";
        // line 90
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 116
        echo "        </title>
    </head>
    <body ";
        // line 118
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 122
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 221
        echo "
        ";
        // line 222
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 355
        echo "    </div>

    ";
        // line 357
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 358
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 364
            echo "    ";
        }
        // line 365
        echo "
    </body>
</html>
";
        
        $__internal_29c08396ed50ae76c6aa60741d7bebe2890aeccc505bdbe0d7dae27df958de11->leave($__internal_29c08396ed50ae76c6aa60741d7bebe2890aeccc505bdbe0d7dae27df958de11_prof);

        
        $__internal_8cbdc548ce8095c97ba3441bc62c6bca934df19eef882481559cb8faa65c3aa1->leave($__internal_8cbdc548ce8095c97ba3441bc62c6bca934df19eef882481559cb8faa65c3aa1_prof);

    }

    // line 26
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_82c4a6d179a7acff9da7714d202fcd78b83c03bd9f62c3b0d35c56562d96cf7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c4a6d179a7acff9da7714d202fcd78b83c03bd9f62c3b0d35c56562d96cf7e->enter($__internal_82c4a6d179a7acff9da7714d202fcd78b83c03bd9f62c3b0d35c56562d96cf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        $__internal_e239fd17d396ae2e6a9d48b7d93b245d8ca697a69ac061df07cba91ef7674e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e239fd17d396ae2e6a9d48b7d93b245d8ca697a69ac061df07cba91ef7674e3b->enter($__internal_e239fd17d396ae2e6a9d48b7d93b245d8ca697a69ac061df07cba91ef7674e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_attributes"));

        echo "class=\"no-js\"";
        
        $__internal_e239fd17d396ae2e6a9d48b7d93b245d8ca697a69ac061df07cba91ef7674e3b->leave($__internal_e239fd17d396ae2e6a9d48b7d93b245d8ca697a69ac061df07cba91ef7674e3b_prof);

        
        $__internal_82c4a6d179a7acff9da7714d202fcd78b83c03bd9f62c3b0d35c56562d96cf7e->leave($__internal_82c4a6d179a7acff9da7714d202fcd78b83c03bd9f62c3b0d35c56562d96cf7e_prof);

    }

    // line 28
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_815f54d6fc222551293cbe26b221ed2eb452347f50e98a6202449f7e6fd140e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_815f54d6fc222551293cbe26b221ed2eb452347f50e98a6202449f7e6fd140e3->enter($__internal_815f54d6fc222551293cbe26b221ed2eb452347f50e98a6202449f7e6fd140e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        $__internal_57175f8793a7b85d758126e6436c85d2bf6afcd28eeb9c7a9c8a7b68e462f86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57175f8793a7b85d758126e6436c85d2bf6afcd28eeb9c7a9c8a7b68e462f86e->enter($__internal_57175f8793a7b85d758126e6436c85d2bf6afcd28eeb9c7a9c8a7b68e462f86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta_tags"));

        // line 29
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_57175f8793a7b85d758126e6436c85d2bf6afcd28eeb9c7a9c8a7b68e462f86e->leave($__internal_57175f8793a7b85d758126e6436c85d2bf6afcd28eeb9c7a9c8a7b68e462f86e_prof);

        
        $__internal_815f54d6fc222551293cbe26b221ed2eb452347f50e98a6202449f7e6fd140e3->leave($__internal_815f54d6fc222551293cbe26b221ed2eb452347f50e98a6202449f7e6fd140e3_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d816e32b0e23b227a9451ff166264018983e1c6f2fd98ebe89f5e235b6d4511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d816e32b0e23b227a9451ff166264018983e1c6f2fd98ebe89f5e235b6d4511->enter($__internal_2d816e32b0e23b227a9451ff166264018983e1c6f2fd98ebe89f5e235b6d4511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5816c834e2ec91094754799897ad4020dc95267c60b30f6b4ac06205fd7ffb60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5816c834e2ec91094754799897ad4020dc95267c60b30f6b4ac06205fd7ffb60->enter($__internal_5816c834e2ec91094754799897ad4020dc95267c60b30f6b4ac06205fd7ffb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 36
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        
        $__internal_5816c834e2ec91094754799897ad4020dc95267c60b30f6b4ac06205fd7ffb60->leave($__internal_5816c834e2ec91094754799897ad4020dc95267c60b30f6b4ac06205fd7ffb60_prof);

        
        $__internal_2d816e32b0e23b227a9451ff166264018983e1c6f2fd98ebe89f5e235b6d4511->leave($__internal_2d816e32b0e23b227a9451ff166264018983e1c6f2fd98ebe89f5e235b6d4511_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_33d6cd9863476e84eecb647e83c6e321145719628e8ed35499dc5cd6efdb0e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d6cd9863476e84eecb647e83c6e321145719628e8ed35499dc5cd6efdb0e13->enter($__internal_33d6cd9863476e84eecb647e83c6e321145719628e8ed35499dc5cd6efdb0e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4b693b72af2e7e8abd90d00c277665c70e7a55e5f2f1622c6e6b0d2966965316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b693b72af2e7e8abd90d00c277665c70e7a55e5f2f1622c6e6b0d2966965316->enter($__internal_4b693b72af2e7e8abd90d00c277665c70e7a55e5f2f1622c6e6b0d2966965316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 61
        echo "
            ";
        // line 62
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 67
        echo "
            ";
        // line 68
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 69
        echo "            ";
        // line 70
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 71
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter(twig_lower_filter($this->env,             // line 73
(isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), array("_" => "-"))) . ".js")), "html", null, true);
            // line 75
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            ";
        // line 79
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 80
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 81
            echo "
                ";
            // line 83
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 84
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 86
            echo "            ";
        }
        // line 87
        echo "        ";
        
        $__internal_4b693b72af2e7e8abd90d00c277665c70e7a55e5f2f1622c6e6b0d2966965316->leave($__internal_4b693b72af2e7e8abd90d00c277665c70e7a55e5f2f1622c6e6b0d2966965316_prof);

        
        $__internal_33d6cd9863476e84eecb647e83c6e321145719628e8ed35499dc5cd6efdb0e13->leave($__internal_33d6cd9863476e84eecb647e83c6e321145719628e8ed35499dc5cd6efdb0e13_prof);

    }

    // line 41
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_5d316c1e0a3124aef5677364874f43eb2b2a7299614adcf21a9a37a59eb063ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d316c1e0a3124aef5677364874f43eb2b2a7299614adcf21a9a37a59eb063ad->enter($__internal_5d316c1e0a3124aef5677364874f43eb2b2a7299614adcf21a9a37a59eb063ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        $__internal_fa20a45b1483918eb26232a129053b955aa94c27a018978cc68f629832533a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa20a45b1483918eb26232a129053b955aa94c27a018978cc68f629832533a08->enter($__internal_fa20a45b1483918eb26232a129053b955aa94c27a018978cc68f629832533a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_config"));

        // line 42
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 46
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 47
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 48
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '";
        // line 50
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_fa20a45b1483918eb26232a129053b955aa94c27a018978cc68f629832533a08->leave($__internal_fa20a45b1483918eb26232a129053b955aa94c27a018978cc68f629832533a08_prof);

        
        $__internal_5d316c1e0a3124aef5677364874f43eb2b2a7299614adcf21a9a37a59eb063ad->leave($__internal_5d316c1e0a3124aef5677364874f43eb2b2a7299614adcf21a9a37a59eb063ad_prof);

    }

    // line 62
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_005537a7cf93638b3ed79ac4157bcc6c350e230fe8fd911d5e8fe24f24e2c1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_005537a7cf93638b3ed79ac4157bcc6c350e230fe8fd911d5e8fe24f24e2c1b4->enter($__internal_005537a7cf93638b3ed79ac4157bcc6c350e230fe8fd911d5e8fe24f24e2c1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        $__internal_a5a0bd9acf203ad6b6eee8067033189dfd7a9573fcc7d946c3843196d5f7fac2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a0bd9acf203ad6b6eee8067033189dfd7a9573fcc7d946c3843196d5f7fac2->enter($__internal_a5a0bd9acf203ad6b6eee8067033189dfd7a9573fcc7d946c3843196d5f7fac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_javascript_pool"));

        // line 63
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
        
        $__internal_a5a0bd9acf203ad6b6eee8067033189dfd7a9573fcc7d946c3843196d5f7fac2->leave($__internal_a5a0bd9acf203ad6b6eee8067033189dfd7a9573fcc7d946c3843196d5f7fac2_prof);

        
        $__internal_005537a7cf93638b3ed79ac4157bcc6c350e230fe8fd911d5e8fe24f24e2c1b4->leave($__internal_005537a7cf93638b3ed79ac4157bcc6c350e230fe8fd911d5e8fe24f24e2c1b4_prof);

    }

    // line 90
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_4fbbdd80780e2a6e11997f2e7827de554625857bb8b20015b93e7bf4fc39dcda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fbbdd80780e2a6e11997f2e7827de554625857bb8b20015b93e7bf4fc39dcda->enter($__internal_4fbbdd80780e2a6e11997f2e7827de554625857bb8b20015b93e7bf4fc39dcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        $__internal_e84f8851827596aaee2236db2d31d4f1412efbaf2a3d57849f3898f255062ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84f8851827596aaee2236db2d31d4f1412efbaf2a3d57849f3898f255062ba6->enter($__internal_e84f8851827596aaee2236db2d31d4f1412efbaf2a3d57849f3898f255062ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_head_title"));

        // line 91
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 93
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 94
            echo "                ";
            echo strip_tags((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")));
            echo "
            ";
        } else {
            // line 96
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 97
                echo "                    -
                    ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 99
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 100
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 101
                            echo "                                &gt;
                            ";
                        }
                        // line 104
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 105
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 106
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 107
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 110
                        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 112
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                ";
            }
            // line 114
            echo "            ";
        }
        // line 115
        echo "        ";
        
        $__internal_e84f8851827596aaee2236db2d31d4f1412efbaf2a3d57849f3898f255062ba6->leave($__internal_e84f8851827596aaee2236db2d31d4f1412efbaf2a3d57849f3898f255062ba6_prof);

        
        $__internal_4fbbdd80780e2a6e11997f2e7827de554625857bb8b20015b93e7bf4fc39dcda->leave($__internal_4fbbdd80780e2a6e11997f2e7827de554625857bb8b20015b93e7bf4fc39dcda_prof);

    }

    // line 118
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_664cc4c3b11862a364ceb26299139235f1cc62a9312abe9dadf40af4243db7e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664cc4c3b11862a364ceb26299139235f1cc62a9312abe9dadf40af4243db7e3->enter($__internal_664cc4c3b11862a364ceb26299139235f1cc62a9312abe9dadf40af4243db7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        $__internal_ef7c78164be1ec0d8ae2004e4e56a152f8d299d02bbf2c1a298d83ca9a88f05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7c78164be1ec0d8ae2004e4e56a152f8d299d02bbf2c1a298d83ca9a88f05e->enter($__internal_ef7c78164be1ec0d8ae2004e4e56a152f8d299d02bbf2c1a298d83ca9a88f05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_ef7c78164be1ec0d8ae2004e4e56a152f8d299d02bbf2c1a298d83ca9a88f05e->leave($__internal_ef7c78164be1ec0d8ae2004e4e56a152f8d299d02bbf2c1a298d83ca9a88f05e_prof);

        
        $__internal_664cc4c3b11862a364ceb26299139235f1cc62a9312abe9dadf40af4243db7e3->leave($__internal_664cc4c3b11862a364ceb26299139235f1cc62a9312abe9dadf40af4243db7e3_prof);

    }

    // line 122
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_3b3a7f676949d43191b17bd17c16cdc01a03ec773d2a68a503a5d1461f6657f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3a7f676949d43191b17bd17c16cdc01a03ec773d2a68a503a5d1461f6657f2->enter($__internal_3b3a7f676949d43191b17bd17c16cdc01a03ec773d2a68a503a5d1461f6657f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_ef9ac0c1dc7db11f3aa47517a082255961bb198ae65ee29cac11f16ffe8e9137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9ac0c1dc7db11f3aa47517a082255961bb198ae65ee29cac11f16ffe8e9137->enter($__internal_ef9ac0c1dc7db11f3aa47517a082255961bb198ae65ee29cac11f16ffe8e9137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        // line 123
        echo "            <header class=\"main-header\">
                ";
        // line 124
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 131
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 143
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 219
        echo "            </header>
        ";
        
        $__internal_ef9ac0c1dc7db11f3aa47517a082255961bb198ae65ee29cac11f16ffe8e9137->leave($__internal_ef9ac0c1dc7db11f3aa47517a082255961bb198ae65ee29cac11f16ffe8e9137_prof);

        
        $__internal_3b3a7f676949d43191b17bd17c16cdc01a03ec773d2a68a503a5d1461f6657f2->leave($__internal_3b3a7f676949d43191b17bd17c16cdc01a03ec773d2a68a503a5d1461f6657f2_prof);

    }

    // line 124
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_95856c8519c8acf4f4b2ee31db6176e90ce5c821a2b9d7514dd4bdfe2e18b15a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95856c8519c8acf4f4b2ee31db6176e90ce5c821a2b9d7514dd4bdfe2e18b15a->enter($__internal_95856c8519c8acf4f4b2ee31db6176e90ce5c821a2b9d7514dd4bdfe2e18b15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        $__internal_3f8f38f896f4cb5c3c0f4a681030f007553686def548cea0133ada4c454d623a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f8f38f896f4cb5c3c0f4a681030f007553686def548cea0133ada4c454d623a->enter($__internal_3f8f38f896f4cb5c3c0f4a681030f007553686def548cea0133ada4c454d623a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header_noscript_warning"));

        // line 125
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_3f8f38f896f4cb5c3c0f4a681030f007553686def548cea0133ada4c454d623a->leave($__internal_3f8f38f896f4cb5c3c0f4a681030f007553686def548cea0133ada4c454d623a_prof);

        
        $__internal_95856c8519c8acf4f4b2ee31db6176e90ce5c821a2b9d7514dd4bdfe2e18b15a->leave($__internal_95856c8519c8acf4f4b2ee31db6176e90ce5c821a2b9d7514dd4bdfe2e18b15a_prof);

    }

    // line 131
    public function block_logo($context, array $blocks = array())
    {
        $__internal_aeb0d93eaf6d28a86869f6822cf1e29a019324d609370b60b3eb5c9115b5fd22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeb0d93eaf6d28a86869f6822cf1e29a019324d609370b60b3eb5c9115b5fd22->enter($__internal_aeb0d93eaf6d28a86869f6822cf1e29a019324d609370b60b3eb5c9115b5fd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_ef08463aa59aec60e2f4d714aca60a1fd43e10f4a3c2cbcff8d36ce70fc273b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef08463aa59aec60e2f4d714aca60a1fd43e10f4a3c2cbcff8d36ce70fc273b2->enter($__internal_ef08463aa59aec60e2f4d714aca60a1fd43e10f4a3c2cbcff8d36ce70fc273b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 132
        echo "                    ";
        ob_start();
        // line 133
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 134
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 135
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 137
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 138
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 140
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 142
        echo "                ";
        
        $__internal_ef08463aa59aec60e2f4d714aca60a1fd43e10f4a3c2cbcff8d36ce70fc273b2->leave($__internal_ef08463aa59aec60e2f4d714aca60a1fd43e10f4a3c2cbcff8d36ce70fc273b2_prof);

        
        $__internal_aeb0d93eaf6d28a86869f6822cf1e29a019324d609370b60b3eb5c9115b5fd22->leave($__internal_aeb0d93eaf6d28a86869f6822cf1e29a019324d609370b60b3eb5c9115b5fd22_prof);

    }

    // line 143
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_837571873676eaf3c6a5223bda486adccaf181cab44ffe86fc8a50b92a274e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837571873676eaf3c6a5223bda486adccaf181cab44ffe86fc8a50b92a274e82->enter($__internal_837571873676eaf3c6a5223bda486adccaf181cab44ffe86fc8a50b92a274e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_0b0df90920de85261f79c37fde13c67ada84c67db724f9ddb394bc21cb92f7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0df90920de85261f79c37fde13c67ada84c67db724f9ddb394bc21cb92f7b5->enter($__internal_0b0df90920de85261f79c37fde13c67ada84c67db724f9ddb394bc21cb92f7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        // line 144
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 150
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 189
        echo "                        </div>

                        ";
        // line 191
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 217
        echo "                    </nav>
                ";
        
        $__internal_0b0df90920de85261f79c37fde13c67ada84c67db724f9ddb394bc21cb92f7b5->leave($__internal_0b0df90920de85261f79c37fde13c67ada84c67db724f9ddb394bc21cb92f7b5_prof);

        
        $__internal_837571873676eaf3c6a5223bda486adccaf181cab44ffe86fc8a50b92a274e82->leave($__internal_837571873676eaf3c6a5223bda486adccaf181cab44ffe86fc8a50b92a274e82_prof);

    }

    // line 150
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_4ed87a4c92586f36b7a23dd3faef72d1fef88e9493677ca86db465c3ea401900 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed87a4c92586f36b7a23dd3faef72d1fef88e9493677ca86db465c3ea401900->enter($__internal_4ed87a4c92586f36b7a23dd3faef72d1fef88e9493677ca86db465c3ea401900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_fc63d7d65390ec12222493d4369366e41206c04120a58de92140a17e9f9ae990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc63d7d65390ec12222493d4369366e41206c04120a58de92140a17e9f9ae990->enter($__internal_fc63d7d65390ec12222493d4369366e41206c04120a58de92140a17e9f9ae990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        // line 151
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 152
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 153
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 154
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 155
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 156
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 157
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 158
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 159
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 160
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 163
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 164
                            echo "                                                            <li>
                                                                ";
                            // line 165
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 166
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 167
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 168
                                    echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                                } else {
                                    // line 170
                                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 172
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 174
                                echo "                                                                    <span>";
                                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                echo "</span>
                                                                ";
                            }
                            // line 176
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 178
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 180
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 181
                    echo "                                                ";
                }
                // line 182
                echo "                                            ";
            } else {
                // line 183
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 185
            echo "                                        </ol>
                                    ";
        }
        // line 187
        echo "                                </div>
                            ";
        
        $__internal_fc63d7d65390ec12222493d4369366e41206c04120a58de92140a17e9f9ae990->leave($__internal_fc63d7d65390ec12222493d4369366e41206c04120a58de92140a17e9f9ae990_prof);

        
        $__internal_4ed87a4c92586f36b7a23dd3faef72d1fef88e9493677ca86db465c3ea401900->leave($__internal_4ed87a4c92586f36b7a23dd3faef72d1fef88e9493677ca86db465c3ea401900_prof);

    }

    // line 191
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_e18eca0fbf4b9197a83b37803f9656560a2e3ab25af171d245fc34e321ced697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18eca0fbf4b9197a83b37803f9656560a2e3ab25af171d245fc34e321ced697->enter($__internal_e18eca0fbf4b9197a83b37803f9656560a2e3ab25af171d245fc34e321ced697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        $__internal_a693f20918547b4beaad975287bb1a5d061aabcd7d3f0b266b722dfe57c35df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a693f20918547b4beaad975287bb1a5d061aabcd7d3f0b266b722dfe57c35df0->enter($__internal_a693f20918547b4beaad975287bb1a5d061aabcd7d3f0b266b722dfe57c35df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu"));

        // line 192
        echo "                            ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 193
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 195
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 203
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 213
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 216
        echo "                        ";
        
        $__internal_a693f20918547b4beaad975287bb1a5d061aabcd7d3f0b266b722dfe57c35df0->leave($__internal_a693f20918547b4beaad975287bb1a5d061aabcd7d3f0b266b722dfe57c35df0_prof);

        
        $__internal_e18eca0fbf4b9197a83b37803f9656560a2e3ab25af171d245fc34e321ced697->leave($__internal_e18eca0fbf4b9197a83b37803f9656560a2e3ab25af171d245fc34e321ced697_prof);

    }

    // line 195
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_60b2fbc7cc50cbedaab2b780afd9d83f2f347d53cc45db59529c2ab6b1c60c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b2fbc7cc50cbedaab2b780afd9d83f2f347d53cc45db59529c2ab6b1c60c53->enter($__internal_60b2fbc7cc50cbedaab2b780afd9d83f2f347d53cc45db59529c2ab6b1c60c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        $__internal_25ca98743fa888285d04721f0374b9520da81308a8f642f9866730b18c351ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ca98743fa888285d04721f0374b9520da81308a8f642f9866730b18c351ec5->enter($__internal_25ca98743fa888285d04721f0374b9520da81308a8f642f9866730b18c351ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_add_block"));

        // line 196
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 200
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 200)->display($context);
        // line 201
        echo "                                            </li>
                                        ";
        
        $__internal_25ca98743fa888285d04721f0374b9520da81308a8f642f9866730b18c351ec5->leave($__internal_25ca98743fa888285d04721f0374b9520da81308a8f642f9866730b18c351ec5_prof);

        
        $__internal_60b2fbc7cc50cbedaab2b780afd9d83f2f347d53cc45db59529c2ab6b1c60c53->leave($__internal_60b2fbc7cc50cbedaab2b780afd9d83f2f347d53cc45db59529c2ab6b1c60c53_prof);

    }

    // line 203
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_7cfa76f5c72e775740cb3981edd935479c658de1cf410aac21556e921f478449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cfa76f5c72e775740cb3981edd935479c658de1cf410aac21556e921f478449->enter($__internal_7cfa76f5c72e775740cb3981edd935479c658de1cf410aac21556e921f478449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        $__internal_4246009e94c76728e91a30c6ea9f7aeeaea12e7cb62d08bf77a1d4672293fcaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4246009e94c76728e91a30c6ea9f7aeeaea12e7cb62d08bf77a1d4672293fcaf->enter($__internal_4246009e94c76728e91a30c6ea9f7aeeaea12e7cb62d08bf77a1d4672293fcaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_top_nav_menu_user_block"));

        // line 204
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 209
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 209)->display($context);
        // line 210
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_4246009e94c76728e91a30c6ea9f7aeeaea12e7cb62d08bf77a1d4672293fcaf->leave($__internal_4246009e94c76728e91a30c6ea9f7aeeaea12e7cb62d08bf77a1d4672293fcaf_prof);

        
        $__internal_7cfa76f5c72e775740cb3981edd935479c658de1cf410aac21556e921f478449->leave($__internal_7cfa76f5c72e775740cb3981edd935479c658de1cf410aac21556e921f478449_prof);

    }

    // line 222
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_0a6f11f12db76d6c776fba56c7b0244b5700f62791546f76e291587cd7a7e9b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6f11f12db76d6c776fba56c7b0244b5700f62791546f76e291587cd7a7e9b2->enter($__internal_0a6f11f12db76d6c776fba56c7b0244b5700f62791546f76e291587cd7a7e9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_b92bad99ffa003b0de906745c3c6de463741e5cf96afb3d86d5d4110d8795d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92bad99ffa003b0de906745c3c6de463741e5cf96afb3d86d5d4110d8795d93->enter($__internal_b92bad99ffa003b0de906745c3c6de463741e5cf96afb3d86d5d4110d8795d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 223
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 255
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 257
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 353
        echo "            </div>
        ";
        
        $__internal_b92bad99ffa003b0de906745c3c6de463741e5cf96afb3d86d5d4110d8795d93->leave($__internal_b92bad99ffa003b0de906745c3c6de463741e5cf96afb3d86d5d4110d8795d93_prof);

        
        $__internal_0a6f11f12db76d6c776fba56c7b0244b5700f62791546f76e291587cd7a7e9b2->leave($__internal_0a6f11f12db76d6c776fba56c7b0244b5700f62791546f76e291587cd7a7e9b2_prof);

    }

    // line 223
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_0f148ae12bd35d911b938b608462a58aa1c95c6bafe8c38b42eaa1e16e09ffa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f148ae12bd35d911b938b608462a58aa1c95c6bafe8c38b42eaa1e16e09ffa3->enter($__internal_0f148ae12bd35d911b938b608462a58aa1c95c6bafe8c38b42eaa1e16e09ffa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_a4c9e8add0e9a9986223d40a78a0563a9f95f2b430b2b9e287cc606c557b411f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c9e8add0e9a9986223d40a78a0563a9f95f2b430b2b9e287cc606c557b411f->enter($__internal_a4c9e8add0e9a9986223d40a78a0563a9f95f2b430b2b9e287cc606c557b411f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        // line 224
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 226
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 252
        echo "                    </section>
                </aside>
            ";
        
        $__internal_a4c9e8add0e9a9986223d40a78a0563a9f95f2b430b2b9e287cc606c557b411f->leave($__internal_a4c9e8add0e9a9986223d40a78a0563a9f95f2b430b2b9e287cc606c557b411f_prof);

        
        $__internal_0f148ae12bd35d911b938b608462a58aa1c95c6bafe8c38b42eaa1e16e09ffa3->leave($__internal_0f148ae12bd35d911b938b608462a58aa1c95c6bafe8c38b42eaa1e16e09ffa3_prof);

    }

    // line 226
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_9b0a331c76209d46b4fd8f3ce83daa7a0c8b2f173942fff71afd18c512823325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0a331c76209d46b4fd8f3ce83daa7a0c8b2f173942fff71afd18c512823325->enter($__internal_9b0a331c76209d46b4fd8f3ce83daa7a0c8b2f173942fff71afd18c512823325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        $__internal_27ec0b225115fdd881a5679ea7da1620bd41ece33a20161bdcb3868e50e99fe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ec0b225115fdd881a5679ea7da1620bd41ece33a20161bdcb3868e50e99fe2->enter($__internal_27ec0b225115fdd881a5679ea7da1620bd41ece33a20161bdcb3868e50e99fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_side_nav"));

        // line 227
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 239
        echo "
                            ";
        // line 240
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 241
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 244
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 251
        echo "                        ";
        
        $__internal_27ec0b225115fdd881a5679ea7da1620bd41ece33a20161bdcb3868e50e99fe2->leave($__internal_27ec0b225115fdd881a5679ea7da1620bd41ece33a20161bdcb3868e50e99fe2_prof);

        
        $__internal_9b0a331c76209d46b4fd8f3ce83daa7a0c8b2f173942fff71afd18c512823325->leave($__internal_9b0a331c76209d46b4fd8f3ce83daa7a0c8b2f173942fff71afd18c512823325_prof);

    }

    // line 227
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_94858f867ed69124468a5632f409b234d49b2a81f3d791b024abd09edc4303cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94858f867ed69124468a5632f409b234d49b2a81f3d791b024abd09edc4303cd->enter($__internal_94858f867ed69124468a5632f409b234d49b2a81f3d791b024abd09edc4303cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        $__internal_4cc89d926916bcd5ffcb9ac26d2a2009688aa119bb8d47357c5ea832e5ed5412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc89d926916bcd5ffcb9ac26d2a2009688aa119bb8d47357c5ea832e5ed5412->enter($__internal_4cc89d926916bcd5ffcb9ac26d2a2009688aa119bb8d47357c5ea832e5ed5412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_sidebar_search"));

        // line 228
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_4cc89d926916bcd5ffcb9ac26d2a2009688aa119bb8d47357c5ea832e5ed5412->leave($__internal_4cc89d926916bcd5ffcb9ac26d2a2009688aa119bb8d47357c5ea832e5ed5412_prof);

        
        $__internal_94858f867ed69124468a5632f409b234d49b2a81f3d791b024abd09edc4303cd->leave($__internal_94858f867ed69124468a5632f409b234d49b2a81f3d791b024abd09edc4303cd_prof);

    }

    // line 240
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_55ab6592157bb654c3f0eb89d2c31d74df5c8e705dd34751c652c3ab97613267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ab6592157bb654c3f0eb89d2c31d74df5c8e705dd34751c652c3ab97613267->enter($__internal_55ab6592157bb654c3f0eb89d2c31d74df5c8e705dd34751c652c3ab97613267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        $__internal_ef6c97836c97e958c28d08a0cf6ea21eacf6733a4f7feee559473adb1282e339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6c97836c97e958c28d08a0cf6ea21eacf6733a4f7feee559473adb1282e339->enter($__internal_ef6c97836c97e958c28d08a0cf6ea21eacf6733a4f7feee559473adb1282e339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_before_nav"));

        echo " ";
        
        $__internal_ef6c97836c97e958c28d08a0cf6ea21eacf6733a4f7feee559473adb1282e339->leave($__internal_ef6c97836c97e958c28d08a0cf6ea21eacf6733a4f7feee559473adb1282e339_prof);

        
        $__internal_55ab6592157bb654c3f0eb89d2c31d74df5c8e705dd34751c652c3ab97613267->leave($__internal_55ab6592157bb654c3f0eb89d2c31d74df5c8e705dd34751c652c3ab97613267_prof);

    }

    // line 241
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_48ba2bcc0b339d6a700bc3b4c6ed965c1f3274af334d6db7804a433da34d16d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ba2bcc0b339d6a700bc3b4c6ed965c1f3274af334d6db7804a433da34d16d0->enter($__internal_48ba2bcc0b339d6a700bc3b4c6ed965c1f3274af334d6db7804a433da34d16d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        $__internal_4e0d10cef9a43a9cdd9ede031d895ededb861d2f7398fe7bddcfca1798ce84fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0d10cef9a43a9cdd9ede031d895ededb861d2f7398fe7bddcfca1798ce84fb->enter($__internal_4e0d10cef9a43a9cdd9ede031d895ededb861d2f7398fe7bddcfca1798ce84fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_nav"));

        // line 242
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_4e0d10cef9a43a9cdd9ede031d895ededb861d2f7398fe7bddcfca1798ce84fb->leave($__internal_4e0d10cef9a43a9cdd9ede031d895ededb861d2f7398fe7bddcfca1798ce84fb_prof);

        
        $__internal_48ba2bcc0b339d6a700bc3b4c6ed965c1f3274af334d6db7804a433da34d16d0->leave($__internal_48ba2bcc0b339d6a700bc3b4c6ed965c1f3274af334d6db7804a433da34d16d0_prof);

    }

    // line 244
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_0239e8fc784ac1b54c38e80f7e103b8e19071ecf6f0fe57996b766e1d548d79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0239e8fc784ac1b54c38e80f7e103b8e19071ecf6f0fe57996b766e1d548d79b->enter($__internal_0239e8fc784ac1b54c38e80f7e103b8e19071ecf6f0fe57996b766e1d548d79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        $__internal_74d3b9cf14fff57d94dcb72d1188f595cea158b32ded213739e6152856f3d5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d3b9cf14fff57d94dcb72d1188f595cea158b32ded213739e6152856f3d5a8->enter($__internal_74d3b9cf14fff57d94dcb72d1188f595cea158b32ded213739e6152856f3d5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav"));

        // line 245
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 246
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 249
        echo "                                </p>
                            ";
        
        $__internal_74d3b9cf14fff57d94dcb72d1188f595cea158b32ded213739e6152856f3d5a8->leave($__internal_74d3b9cf14fff57d94dcb72d1188f595cea158b32ded213739e6152856f3d5a8_prof);

        
        $__internal_0239e8fc784ac1b54c38e80f7e103b8e19071ecf6f0fe57996b766e1d548d79b->leave($__internal_0239e8fc784ac1b54c38e80f7e103b8e19071ecf6f0fe57996b766e1d548d79b_prof);

    }

    // line 246
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_7035e2a9fe049cdef523405b41db3f516caee8cb364cb82c69e200111a4886b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7035e2a9fe049cdef523405b41db3f516caee8cb364cb82c69e200111a4886b0->enter($__internal_7035e2a9fe049cdef523405b41db3f516caee8cb364cb82c69e200111a4886b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        $__internal_ffea780d9d5f229e6d09e62ddf78983b7ee0ce5bf4f30146692cd733d62a2ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffea780d9d5f229e6d09e62ddf78983b7ee0ce5bf4f30146692cd733d62a2ba0->enter($__internal_ffea780d9d5f229e6d09e62ddf78983b7ee0ce5bf4f30146692cd733d62a2ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_bar_after_nav_content"));

        // line 247
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_ffea780d9d5f229e6d09e62ddf78983b7ee0ce5bf4f30146692cd733d62a2ba0->leave($__internal_ffea780d9d5f229e6d09e62ddf78983b7ee0ce5bf4f30146692cd733d62a2ba0_prof);

        
        $__internal_7035e2a9fe049cdef523405b41db3f516caee8cb364cb82c69e200111a4886b0->leave($__internal_7035e2a9fe049cdef523405b41db3f516caee8cb364cb82c69e200111a4886b0_prof);

    }

    // line 257
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_edfff861dfa7e2d5627cd332bf843ee35ee22316aaa47f68d5e4cb1a817ec3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edfff861dfa7e2d5627cd332bf843ee35ee22316aaa47f68d5e4cb1a817ec3c4->enter($__internal_edfff861dfa7e2d5627cd332bf843ee35ee22316aaa47f68d5e4cb1a817ec3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_d20b64903bf26bd3e7a6fb44fc287230f33042238fc7de1b503285f1f14dc103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20b64903bf26bd3e7a6fb44fc287230f33042238fc7de1b503285f1f14dc103->enter($__internal_d20b64903bf26bd3e7a6fb44fc287230f33042238fc7de1b503285f1f14dc103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 258
        echo "                    <section class=\"content-header\">

                        ";
        // line 260
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 314
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 317
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 351
        echo "                    </section>
                ";
        
        $__internal_d20b64903bf26bd3e7a6fb44fc287230f33042238fc7de1b503285f1f14dc103->leave($__internal_d20b64903bf26bd3e7a6fb44fc287230f33042238fc7de1b503285f1f14dc103_prof);

        
        $__internal_edfff861dfa7e2d5627cd332bf843ee35ee22316aaa47f68d5e4cb1a817ec3c4->leave($__internal_edfff861dfa7e2d5627cd332bf843ee35ee22316aaa47f68d5e4cb1a817ec3c4_prof);

    }

    // line 260
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_ae56c916cbf56d924d3be8f95361e4e38b77d215fffaa784fb92280a2f4ac156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae56c916cbf56d924d3be8f95361e4e38b77d215fffaa784fb92280a2f4ac156->enter($__internal_ae56c916cbf56d924d3be8f95361e4e38b77d215fffaa784fb92280a2f4ac156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        $__internal_fd91f65c88948e814b3608bd25e53b018a40d362d3a22a8f814a9d148b9be318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd91f65c88948e814b3608bd25e53b018a40d362d3a22a8f814a9d148b9be318->enter($__internal_fd91f65c88948e814b3608bd25e53b018a40d362d3a22a8f814a9d148b9be318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_header"));

        // line 261
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 313
        echo "                        ";
        
        $__internal_fd91f65c88948e814b3608bd25e53b018a40d362d3a22a8f814a9d148b9be318->leave($__internal_fd91f65c88948e814b3608bd25e53b018a40d362d3a22a8f814a9d148b9be318_prof);

        
        $__internal_ae56c916cbf56d924d3be8f95361e4e38b77d215fffaa784fb92280a2f4ac156->leave($__internal_ae56c916cbf56d924d3be8f95361e4e38b77d215fffaa784fb92280a2f4ac156_prof);

    }

    // line 261
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_095b8ba0a06ff85eaa1be2d8c101984ec7898c4a745cd5531d58054580955d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_095b8ba0a06ff85eaa1be2d8c101984ec7898c4a745cd5531d58054580955d4e->enter($__internal_095b8ba0a06ff85eaa1be2d8c101984ec7898c4a745cd5531d58054580955d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        $__internal_3f335790cead6c73b0ec7416f7afb670adc77efbef63b7c6a00dbd459d53acd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f335790cead6c73b0ec7416f7afb670adc77efbef63b7c6a00dbd459d53acd5->enter($__internal_3f335790cead6c73b0ec7416f7afb670adc77efbef63b7c6a00dbd459d53acd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content_nav"));

        // line 262
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
            // line 263
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 265
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 272
            echo "
                                            <div class=\"navbar-collapse\">
                                                ";
            // line 274
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 275
                echo "                                                    <div class=\"navbar-left\">
                                                        ";
                // line 276
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    </div>
                                                ";
            }
            // line 279
            echo "
                                                ";
            // line 280
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 281
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 282
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 283
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 285
                echo "                                                    </div>
                                                ";
            }
            // line 287
            echo "
                                                ";
            // line 288
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 304
            echo "
                                                ";
            // line 305
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 306
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 308
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 312
        echo "                            ";
        
        $__internal_3f335790cead6c73b0ec7416f7afb670adc77efbef63b7c6a00dbd459d53acd5->leave($__internal_3f335790cead6c73b0ec7416f7afb670adc77efbef63b7c6a00dbd459d53acd5_prof);

        
        $__internal_095b8ba0a06ff85eaa1be2d8c101984ec7898c4a745cd5531d58054580955d4e->leave($__internal_095b8ba0a06ff85eaa1be2d8c101984ec7898c4a745cd5531d58054580955d4e_prof);

    }

    // line 265
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_d83455eacaee527472fa0948c40ac92099afc619f47fe2e37d47c70773d7aca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d83455eacaee527472fa0948c40ac92099afc619f47fe2e37d47c70773d7aca7->enter($__internal_d83455eacaee527472fa0948c40ac92099afc619f47fe2e37d47c70773d7aca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        $__internal_97122a3d0a4e3efdca51415ebafa0abaf48f9f72176746003a051ec89637606f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97122a3d0a4e3efdca51415ebafa0abaf48f9f72176746003a051ec89637606f->enter($__internal_97122a3d0a4e3efdca51415ebafa0abaf48f9f72176746003a051ec89637606f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu_navbar_header"));

        // line 266
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 267
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 268
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 271
        echo "                                            ";
        
        $__internal_97122a3d0a4e3efdca51415ebafa0abaf48f9f72176746003a051ec89637606f->leave($__internal_97122a3d0a4e3efdca51415ebafa0abaf48f9f72176746003a051ec89637606f_prof);

        
        $__internal_d83455eacaee527472fa0948c40ac92099afc619f47fe2e37d47c70773d7aca7->leave($__internal_d83455eacaee527472fa0948c40ac92099afc619f47fe2e37d47c70773d7aca7_prof);

    }

    // line 288
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_60db122a01059573e9bedd2f41ed9fe52521af8e63baec27f7f5fe6b73f0dbd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60db122a01059573e9bedd2f41ed9fe52521af8e63baec27f7f5fe6b73f0dbd4->enter($__internal_60db122a01059573e9bedd2f41ed9fe52521af8e63baec27f7f5fe6b73f0dbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        $__internal_526ae2383768a1e45cac5e881ef0a50962326a5b218be4a459df9e1697212835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526ae2383768a1e45cac5e881ef0a50962326a5b218be4a459df9e1697212835->enter($__internal_526ae2383768a1e45cac5e881ef0a50962326a5b218be4a459df9e1697212835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content_actions_wrappers"));

        // line 289
        echo "                                                    ";
        if ( !twig_test_empty(twig_trim_filter(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 290
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 291
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 292
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 295
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 299
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 301
            echo "                                                        </ul>
                                                    ";
        }
        // line 303
        echo "                                                ";
        
        $__internal_526ae2383768a1e45cac5e881ef0a50962326a5b218be4a459df9e1697212835->leave($__internal_526ae2383768a1e45cac5e881ef0a50962326a5b218be4a459df9e1697212835_prof);

        
        $__internal_60db122a01059573e9bedd2f41ed9fe52521af8e63baec27f7f5fe6b73f0dbd4->leave($__internal_60db122a01059573e9bedd2f41ed9fe52521af8e63baec27f7f5fe6b73f0dbd4_prof);

    }

    // line 317
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_863f48e2948e6a9f142aec0206708441350aa8ee02e23e75ac3312e739c59c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_863f48e2948e6a9f142aec0206708441350aa8ee02e23e75ac3312e739c59c71->enter($__internal_863f48e2948e6a9f142aec0206708441350aa8ee02e23e75ac3312e739c59c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        $__internal_17a2d0631b0e18fc110922beeabb983c2fabdafc2f93e8ca9ef58014c37f1f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a2d0631b0e18fc110922beeabb983c2fabdafc2f93e8ca9ef58014c37f1f6a->enter($__internal_17a2d0631b0e18fc110922beeabb983c2fabdafc2f93e8ca9ef58014c37f1f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_content"));

        // line 318
        echo "
                            ";
        // line 319
        $this->displayBlock('notice', $context, $blocks);
        // line 322
        echo "
                            ";
        // line 323
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 324
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 326
        echo "
                            ";
        // line 327
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 328
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 330
        echo "
                            ";
        // line 331
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 332
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 334
        echo "
                            ";
        // line 335
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 336
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 338
        echo "
                            ";
        // line 339
        if ( !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
            // line 340
            echo "                                <div class=\"row\">
                                    ";
            // line 341
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
            echo "
                                </div>
                            ";
        }
        // line 344
        echo "
                            ";
        // line 345
        if ( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table")))) {
            // line 346
            echo "                                <div class=\"row\">
                                    ";
            // line 347
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>
                            ";
        }
        // line 350
        echo "                        ";
        
        $__internal_17a2d0631b0e18fc110922beeabb983c2fabdafc2f93e8ca9ef58014c37f1f6a->leave($__internal_17a2d0631b0e18fc110922beeabb983c2fabdafc2f93e8ca9ef58014c37f1f6a_prof);

        
        $__internal_863f48e2948e6a9f142aec0206708441350aa8ee02e23e75ac3312e739c59c71->leave($__internal_863f48e2948e6a9f142aec0206708441350aa8ee02e23e75ac3312e739c59c71_prof);

    }

    // line 319
    public function block_notice($context, array $blocks = array())
    {
        $__internal_ba2928a989dcf9de9e1e97ac48bafd5dc83bfb5688bdf5b9326ab7d7bb93220d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2928a989dcf9de9e1e97ac48bafd5dc83bfb5688bdf5b9326ab7d7bb93220d->enter($__internal_ba2928a989dcf9de9e1e97ac48bafd5dc83bfb5688bdf5b9326ab7d7bb93220d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        $__internal_c96a47923cd6f748a4c4585459adfee35da244caccebd52589c2993175646d72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96a47923cd6f748a4c4585459adfee35da244caccebd52589c2993175646d72->enter($__internal_c96a47923cd6f748a4c4585459adfee35da244caccebd52589c2993175646d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "notice"));

        // line 320
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 320)->display($context);
        // line 321
        echo "                            ";
        
        $__internal_c96a47923cd6f748a4c4585459adfee35da244caccebd52589c2993175646d72->leave($__internal_c96a47923cd6f748a4c4585459adfee35da244caccebd52589c2993175646d72_prof);

        
        $__internal_ba2928a989dcf9de9e1e97ac48bafd5dc83bfb5688bdf5b9326ab7d7bb93220d->leave($__internal_ba2928a989dcf9de9e1e97ac48bafd5dc83bfb5688bdf5b9326ab7d7bb93220d_prof);

    }

    // line 358
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_398e100d8366dc4f45886d371cf2288b340d06c70c37ad1f681b924bf7d86d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_398e100d8366dc4f45886d371cf2288b340d06c70c37ad1f681b924bf7d86d15->enter($__internal_398e100d8366dc4f45886d371cf2288b340d06c70c37ad1f681b924bf7d86d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        $__internal_df578ade746bb2ea9ea9aa7d9da39a26226aa42e5cc35ccfcbd4977471689a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df578ade746bb2ea9ea9aa7d9da39a26226aa42e5cc35ccfcbd4977471689a0f->enter($__internal_df578ade746bb2ea9ea9aa7d9da39a26226aa42e5cc35ccfcbd4977471689a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bootlint"));

        // line 359
        echo "            ";
        // line 360
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_df578ade746bb2ea9ea9aa7d9da39a26226aa42e5cc35ccfcbd4977471689a0f->leave($__internal_df578ade746bb2ea9ea9aa7d9da39a26226aa42e5cc35ccfcbd4977471689a0f_prof);

        
        $__internal_398e100d8366dc4f45886d371cf2288b340d06c70c37ad1f681b924bf7d86d15->leave($__internal_398e100d8366dc4f45886d371cf2288b340d06c70c37ad1f681b924bf7d86d15_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1458 => 360,  1456 => 359,  1447 => 358,  1437 => 321,  1434 => 320,  1425 => 319,  1415 => 350,  1409 => 347,  1406 => 346,  1404 => 345,  1401 => 344,  1395 => 341,  1392 => 340,  1390 => 339,  1387 => 338,  1381 => 336,  1379 => 335,  1376 => 334,  1370 => 332,  1368 => 331,  1365 => 330,  1359 => 328,  1357 => 327,  1354 => 326,  1348 => 324,  1346 => 323,  1343 => 322,  1341 => 319,  1338 => 318,  1329 => 317,  1319 => 303,  1315 => 301,  1309 => 299,  1302 => 295,  1297 => 293,  1294 => 292,  1292 => 291,  1289 => 290,  1286 => 289,  1277 => 288,  1267 => 271,  1261 => 268,  1258 => 267,  1255 => 266,  1246 => 265,  1236 => 312,  1230 => 308,  1224 => 306,  1222 => 305,  1219 => 304,  1217 => 288,  1214 => 287,  1210 => 285,  1195 => 283,  1191 => 282,  1188 => 281,  1186 => 280,  1183 => 279,  1177 => 276,  1174 => 275,  1172 => 274,  1168 => 272,  1166 => 265,  1162 => 263,  1159 => 262,  1150 => 261,  1140 => 313,  1137 => 261,  1128 => 260,  1117 => 351,  1115 => 317,  1110 => 314,  1108 => 260,  1104 => 258,  1095 => 257,  1084 => 247,  1075 => 246,  1064 => 249,  1062 => 246,  1059 => 245,  1050 => 244,  1037 => 242,  1028 => 241,  1010 => 240,  989 => 230,  983 => 228,  974 => 227,  964 => 251,  961 => 244,  958 => 241,  956 => 240,  953 => 239,  950 => 227,  941 => 226,  929 => 252,  927 => 226,  923 => 224,  914 => 223,  903 => 353,  901 => 257,  897 => 255,  894 => 223,  885 => 222,  873 => 210,  871 => 209,  864 => 204,  855 => 203,  844 => 201,  842 => 200,  836 => 196,  827 => 195,  817 => 216,  812 => 213,  809 => 203,  807 => 195,  803 => 193,  800 => 192,  791 => 191,  780 => 187,  776 => 185,  770 => 183,  767 => 182,  764 => 181,  750 => 180,  744 => 178,  740 => 176,  734 => 174,  730 => 172,  727 => 170,  724 => 168,  722 => 167,  717 => 166,  715 => 165,  712 => 164,  710 => 163,  707 => 160,  705 => 159,  703 => 158,  701 => 157,  683 => 156,  680 => 155,  678 => 154,  675 => 153,  673 => 152,  670 => 151,  661 => 150,  650 => 217,  648 => 191,  644 => 189,  642 => 150,  634 => 144,  625 => 143,  615 => 142,  611 => 140,  605 => 138,  602 => 137,  594 => 135,  592 => 134,  587 => 133,  584 => 132,  575 => 131,  561 => 127,  557 => 125,  548 => 124,  537 => 219,  534 => 143,  531 => 131,  529 => 124,  526 => 123,  517 => 122,  499 => 118,  489 => 115,  486 => 114,  483 => 113,  469 => 112,  464 => 110,  461 => 107,  459 => 106,  457 => 105,  455 => 104,  451 => 101,  448 => 100,  445 => 99,  428 => 98,  425 => 97,  422 => 96,  416 => 94,  414 => 93,  408 => 91,  399 => 90,  389 => 66,  380 => 64,  375 => 63,  366 => 62,  345 => 50,  341 => 48,  335 => 47,  327 => 46,  319 => 45,  311 => 44,  307 => 42,  298 => 41,  288 => 87,  285 => 86,  279 => 84,  276 => 83,  273 => 81,  268 => 80,  265 => 79,  262 => 77,  258 => 75,  256 => 73,  254 => 71,  251 => 70,  249 => 69,  247 => 68,  244 => 67,  242 => 62,  239 => 61,  236 => 41,  227 => 40,  217 => 38,  208 => 36,  203 => 35,  194 => 34,  181 => 29,  172 => 28,  154 => 26,  141 => 365,  138 => 364,  135 => 358,  133 => 357,  129 => 355,  127 => 222,  124 => 221,  122 => 122,  115 => 118,  111 => 116,  109 => 90,  105 => 88,  103 => 40,  100 => 39,  98 => 34,  95 => 33,  93 => 28,  88 => 26,  84 => 24,  82 => 23,  80 => 22,  78 => 21,  76 => 20,  74 => 19,  72 => 18,  70 => 17,  68 => 16,  66 => 15,  64 => 14,  62 => 13,  60 => 12,  57 => 11,);
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

{% set _preview = block('preview') is defined ? block('preview')|trim : null %}
{% set _form = block('form') is defined ? block('form')|trim : null %}
{% set _show = block('show') is defined ? block('show')|trim : null %}
{% set _list_table = block('list_table') is defined ? block('list_table')|trim : null %}
{% set _list_filters = block('list_filters') is defined ? block('list_filters')|trim : null %}
{% set _tab_menu = block('tab_menu') is defined ? block('tab_menu')|trim : null %}
{% set _content = block('content') is defined ? block('content')|trim : null %}
{% set _title = block('title') is defined ? block('title')|trim : null %}
{% set _breadcrumb = block('breadcrumb') is defined ? block('breadcrumb')|trim : null %}
{% set _actions = block('actions') is defined ? block('actions')|trim : null %}
{% set _navbar_title = block('navbar_title') is defined ? block('navbar_title')|trim : null %}
{% set _list_filters_actions = block('list_filters_actions') is defined ? block('list_filters_actions')|trim : null %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT: '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset(
                    'bundles/sonatacore/vendor/moment/locale/' ~
                    locale|lower|replace({'_':'-'}) ~
                    '.js'
                ) }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|striptags|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {% if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif %}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    <span>{{ label }}</span>
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-flat\" type=\"submit\">
                                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                {% if _tab_menu is not empty %}
                                                    <div class=\"navbar-left\">
                                                        {{ _tab_menu|raw }}
                                                    </div>
                                                {% endif %}

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_filters is not empty %}
                                <div class=\"row\">
                                    {{ _list_filters|raw }}
                                </div>
                            {% endif %}

                            {% if _list_table is not empty %}
                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>
                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
