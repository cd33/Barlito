<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_397050615b3ea50874711756815ac1cdd962d8e77e52438803c4f03a8efd2035 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'title' => array($this, 'block_title'),
            'navbar_title' => array($this, 'block_navbar_title'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'no_result_content' => array($this, 'block_no_result_content'),
            'list_footer' => array($this, 'block_list_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
            'sonata_list_filter_group_class' => array($this, 'block_sonata_list_filter_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d05574aae4204dea2076095758d472b683e744f0e5a208b6d1ef363157b79fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05574aae4204dea2076095758d472b683e744f0e5a208b6d1ef363157b79fe4->enter($__internal_d05574aae4204dea2076095758d472b683e744f0e5a208b6d1ef363157b79fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $__internal_47f9dbfeca70a153b66c1855a28ec7ea1659cdd86c8a961f15dc22d7e2e75c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47f9dbfeca70a153b66c1855a28ec7ea1659cdd86c8a961f15dc22d7e2e75c30->enter($__internal_47f9dbfeca70a153b66c1855a28ec7ea1659cdd86c8a961f15dc22d7e2e75c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d05574aae4204dea2076095758d472b683e744f0e5a208b6d1ef363157b79fe4->leave($__internal_d05574aae4204dea2076095758d472b683e744f0e5a208b6d1ef363157b79fe4_prof);

        
        $__internal_47f9dbfeca70a153b66c1855a28ec7ea1659cdd86c8a961f15dc22d7e2e75c30->leave($__internal_47f9dbfeca70a153b66c1855a28ec7ea1659cdd86c8a961f15dc22d7e2e75c30_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c02552dd4fe3dd93e7137711d28402f3bbddda00315500d99c9ecb0d40801fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02552dd4fe3dd93e7137711d28402f3bbddda00315500d99c9ecb0d40801fd1->enter($__internal_c02552dd4fe3dd93e7137711d28402f3bbddda00315500d99c9ecb0d40801fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_a3399abc097907c0408e2b595e5032ce5340206a3d63e28a7675b2359f0fd126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3399abc097907c0408e2b595e5032ce5340206a3d63e28a7675b2359f0fd126->enter($__internal_a3399abc097907c0408e2b595e5032ce5340206a3d63e28a7675b2359f0fd126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 15)->display($context);
        
        $__internal_a3399abc097907c0408e2b595e5032ce5340206a3d63e28a7675b2359f0fd126->leave($__internal_a3399abc097907c0408e2b595e5032ce5340206a3d63e28a7675b2359f0fd126_prof);

        
        $__internal_c02552dd4fe3dd93e7137711d28402f3bbddda00315500d99c9ecb0d40801fd1->leave($__internal_c02552dd4fe3dd93e7137711d28402f3bbddda00315500d99c9ecb0d40801fd1_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_8b9dc316ebadd2a0256d589087ed08cf60554816cfde4a8a4709903884a30d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9dc316ebadd2a0256d589087ed08cf60554816cfde4a8a4709903884a30d13->enter($__internal_8b9dc316ebadd2a0256d589087ed08cf60554816cfde4a8a4709903884a30d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_d873ae735a3fcd63c6a45907169970cdb694b1eee762c51f3cac0a2a52074000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d873ae735a3fcd63c6a45907169970cdb694b1eee762c51f3cac0a2a52074000->enter($__internal_d873ae735a3fcd63c6a45907169970cdb694b1eee762c51f3cac0a2a52074000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_d873ae735a3fcd63c6a45907169970cdb694b1eee762c51f3cac0a2a52074000->leave($__internal_d873ae735a3fcd63c6a45907169970cdb694b1eee762c51f3cac0a2a52074000_prof);

        
        $__internal_8b9dc316ebadd2a0256d589087ed08cf60554816cfde4a8a4709903884a30d13->leave($__internal_8b9dc316ebadd2a0256d589087ed08cf60554816cfde4a8a4709903884a30d13_prof);

    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a047159a82b1f40c57c78b248e4b3c5b52181daf633ffc07a3ff548196b1596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a047159a82b1f40c57c78b248e4b3c5b52181daf633ffc07a3ff548196b1596->enter($__internal_5a047159a82b1f40c57c78b248e4b3c5b52181daf633ffc07a3ff548196b1596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d46ab55aadb589a4ebdb09bdae97e31adbf6be32e7d383e5298f62cb2558a659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46ab55aadb589a4ebdb09bdae97e31adbf6be32e7d383e5298f62cb2558a659->enter($__internal_d46ab55aadb589a4ebdb09bdae97e31adbf6be32e7d383e5298f62cb2558a659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 21
        echo "    ";
        // line 25
        echo "
    ";
        // line 26
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "parent", array()), "subject", array()))) {
            // line 27
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "parent", array()), "toString", array(0 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "parent", array()), "subject", array())), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_d46ab55aadb589a4ebdb09bdae97e31adbf6be32e7d383e5298f62cb2558a659->leave($__internal_d46ab55aadb589a4ebdb09bdae97e31adbf6be32e7d383e5298f62cb2558a659_prof);

        
        $__internal_5a047159a82b1f40c57c78b248e4b3c5b52181daf633ffc07a3ff548196b1596->leave($__internal_5a047159a82b1f40c57c78b248e4b3c5b52181daf633ffc07a3ff548196b1596_prof);

    }

    // line 31
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_d9ba0fb6371b9e1f54bdbdf55d46d2756446c4ea2cdaa4b53fcb6f1c677e8d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ba0fb6371b9e1f54bdbdf55d46d2756446c4ea2cdaa4b53fcb6f1c677e8d5f->enter($__internal_d9ba0fb6371b9e1f54bdbdf55d46d2756446c4ea2cdaa4b53fcb6f1c677e8d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_6d2065f59279a47a646c4dc7167bf7de682209cd14a802e548e9a542ab5cadc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2065f59279a47a646c4dc7167bf7de682209cd14a802e548e9a542ab5cadc4->enter($__internal_6d2065f59279a47a646c4dc7167bf7de682209cd14a802e548e9a542ab5cadc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 32
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6d2065f59279a47a646c4dc7167bf7de682209cd14a802e548e9a542ab5cadc4->leave($__internal_6d2065f59279a47a646c4dc7167bf7de682209cd14a802e548e9a542ab5cadc4_prof);

        
        $__internal_d9ba0fb6371b9e1f54bdbdf55d46d2756446c4ea2cdaa4b53fcb6f1c677e8d5f->leave($__internal_d9ba0fb6371b9e1f54bdbdf55d46d2756446c4ea2cdaa4b53fcb6f1c677e8d5f_prof);

    }

    // line 35
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_cb3b3f60d0a255a8bcc02cced150f6f3ba8077b8d1ddbc859c5134fcc200ef3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb3b3f60d0a255a8bcc02cced150f6f3ba8077b8d1ddbc859c5134fcc200ef3c->enter($__internal_cb3b3f60d0a255a8bcc02cced150f6f3ba8077b8d1ddbc859c5134fcc200ef3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        $__internal_971454e0afa9f6913c864d676f36602926280ab99b2972119ad21f74f7205eec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971454e0afa9f6913c864d676f36602926280ab99b2972119ad21f74f7205eec->enter($__internal_971454e0afa9f6913c864d676f36602926280ab99b2972119ad21f74f7205eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 36
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 37
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 38
        echo "        ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))))) {
            // line 39
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\">
        ";
        }
        // line 42
        echo "
        ";
        // line 44
        echo "        <div class=\"box box-primary\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 45
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 46
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "

                ";
        // line 48
        $this->displayBlock('list_header', $context, $blocks);
        // line 49
        echo "
                ";
        // line 50
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 51
            echo "                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        ";
            // line 52
            $this->displayBlock('table_header', $context, $blocks);
            // line 91
            echo "
                        ";
            // line 92
            $this->displayBlock('table_body', $context, $blocks);
            // line 97
            echo "
                        ";
            // line 98
            $this->displayBlock('table_footer', $context, $blocks);
            // line 100
            echo "                    </table>
                ";
        } else {
            // line 102
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 120
            echo "                ";
        }
        // line 121
        echo "
                ";
        // line 122
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "
            </div>
            ";
        // line 124
        $this->displayBlock('list_footer', $context, $blocks);
        // line 224
        echo "        </div>
        ";
        // line 225
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))))) {
            // line 226
            echo "            </form>
        ";
        }
        // line 228
        echo "    </div>
";
        
        $__internal_971454e0afa9f6913c864d676f36602926280ab99b2972119ad21f74f7205eec->leave($__internal_971454e0afa9f6913c864d676f36602926280ab99b2972119ad21f74f7205eec_prof);

        
        $__internal_cb3b3f60d0a255a8bcc02cced150f6f3ba8077b8d1ddbc859c5134fcc200ef3c->leave($__internal_cb3b3f60d0a255a8bcc02cced150f6f3ba8077b8d1ddbc859c5134fcc200ef3c_prof);

    }

    // line 48
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_808f925ddf478af3bfcce93e110be66ce3ff99c4f6f15b28af707fca79c63e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808f925ddf478af3bfcce93e110be66ce3ff99c4f6f15b28af707fca79c63e8d->enter($__internal_808f925ddf478af3bfcce93e110be66ce3ff99c4f6f15b28af707fca79c63e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        $__internal_869962193a314f041b904204c8d2cf416c33b4d03f283db530b874b879eb4b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869962193a314f041b904204c8d2cf416c33b4d03f283db530b874b879eb4b2c->enter($__internal_869962193a314f041b904204c8d2cf416c33b4d03f283db530b874b879eb4b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_869962193a314f041b904204c8d2cf416c33b4d03f283db530b874b879eb4b2c->leave($__internal_869962193a314f041b904204c8d2cf416c33b4d03f283db530b874b879eb4b2c_prof);

        
        $__internal_808f925ddf478af3bfcce93e110be66ce3ff99c4f6f15b28af707fca79c63e8d->leave($__internal_808f925ddf478af3bfcce93e110be66ce3ff99c4f6f15b28af707fca79c63e8d_prof);

    }

    // line 52
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_53eec1e2ade5f706e2752ff82836d89ff9b69ed7742fd76ce54a2e442679ae72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53eec1e2ade5f706e2752ff82836d89ff9b69ed7742fd76ce54a2e442679ae72->enter($__internal_53eec1e2ade5f706e2752ff82836d89ff9b69ed7742fd76ce54a2e442679ae72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        $__internal_a86642e1c7134674ba365c8ffe0bb7aba0dda3959ef0b8dead4a545c588a9ab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86642e1c7134674ba365c8ffe0bb7aba0dda3959ef0b8dead4a545c588a9ab0->enter($__internal_a86642e1c7134674ba365c8ffe0bb7aba0dda3959ef0b8dead4a545c588a9ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 53
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 56
            echo "                                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 57
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute(            // line 60
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 61
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute(            // line 62
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 63
                echo "                                            ";
                // line 64
                echo "                                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 65
                echo "                                            ";
                // line 66
                echo "                                        ";
            } else {
                // line 67
                echo "                                            ";
                $context["sortable"] = false;
                // line 68
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 69
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 70
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 71
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 72
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 73
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 74
                    echo "                                            ";
                }
                // line 75
                echo "
                                            ";
                // line 76
                ob_start();
                // line 77
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_class", array()), "html", null, true);
                }
                echo "\"";
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_style", array(), "any", true, true)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_style", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 78
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 79
                echo "                                                    ";
                if ($this->getAttribute($context["field_description"], "getOption", array(0 => "label_icon"), "method")) {
                    // line 80
                    echo "                                                        <i class=\"sonata-ba-list-field-header-label-icon ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "getOption", array(0 => "label_icon"), "method"), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i>
                                                    ";
                }
                // line 82
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["field_description"], "label", array()), array(), $this->getAttribute($context["field_description"], "translationDomain", array())), "html", null, true);
                echo "
                                                    ";
                // line 83
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 84
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 86
                echo "                                        ";
            }
            // line 87
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_a86642e1c7134674ba365c8ffe0bb7aba0dda3959ef0b8dead4a545c588a9ab0->leave($__internal_a86642e1c7134674ba365c8ffe0bb7aba0dda3959ef0b8dead4a545c588a9ab0_prof);

        
        $__internal_53eec1e2ade5f706e2752ff82836d89ff9b69ed7742fd76ce54a2e442679ae72->leave($__internal_53eec1e2ade5f706e2752ff82836d89ff9b69ed7742fd76ce54a2e442679ae72_prof);

    }

    // line 92
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_ea110ec3ef40de68fd430b6d8a778c955b0738f9318f47d567a6f186ee4109c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea110ec3ef40de68fd430b6d8a778c955b0738f9318f47d567a6f186ee4109c1->enter($__internal_ea110ec3ef40de68fd430b6d8a778c955b0738f9318f47d567a6f186ee4109c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_e1a98a3e64dc1e159720d62f201ad11f075bb4ac27017f215002fe7a2b36808d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a98a3e64dc1e159720d62f201ad11f075bb4ac27017f215002fe7a2b36808d->enter($__internal_e1a98a3e64dc1e159720d62f201ad11f075bb4ac27017f215002fe7a2b36808d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 93
        echo "                            <tbody>
                                ";
        // line 94
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => ("outer_list_rows_" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method"))), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 94)->display($context);
        // line 95
        echo "                            </tbody>
                        ";
        
        $__internal_e1a98a3e64dc1e159720d62f201ad11f075bb4ac27017f215002fe7a2b36808d->leave($__internal_e1a98a3e64dc1e159720d62f201ad11f075bb4ac27017f215002fe7a2b36808d_prof);

        
        $__internal_ea110ec3ef40de68fd430b6d8a778c955b0738f9318f47d567a6f186ee4109c1->leave($__internal_ea110ec3ef40de68fd430b6d8a778c955b0738f9318f47d567a6f186ee4109c1_prof);

    }

    // line 98
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_248976f0f0c8b3e47d8008ab176ba09c1025721ede9862b461656667f5ca8236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248976f0f0c8b3e47d8008ab176ba09c1025721ede9862b461656667f5ca8236->enter($__internal_248976f0f0c8b3e47d8008ab176ba09c1025721ede9862b461656667f5ca8236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_41f5d92d8c7a84104a2c7c2285b247af5fc91071f4066c5656177a98fbe9653e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f5d92d8c7a84104a2c7c2285b247af5fc91071f4066c5656177a98fbe9653e->enter($__internal_41f5d92d8c7a84104a2c7c2285b247af5fc91071f4066c5656177a98fbe9653e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 99
        echo "                        ";
        
        $__internal_41f5d92d8c7a84104a2c7c2285b247af5fc91071f4066c5656177a98fbe9653e->leave($__internal_41f5d92d8c7a84104a2c7c2285b247af5fc91071f4066c5656177a98fbe9653e_prof);

        
        $__internal_248976f0f0c8b3e47d8008ab176ba09c1025721ede9862b461656667f5ca8236->leave($__internal_248976f0f0c8b3e47d8008ab176ba09c1025721ede9862b461656667f5ca8236_prof);

    }

    // line 102
    public function block_no_result_content($context, array $blocks = array())
    {
        $__internal_4127d13ce86a82b31c4589ead3a8cdac55d58d3ee4bbb70f34a3dfc68c677716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4127d13ce86a82b31c4589ead3a8cdac55d58d3ee4bbb70f34a3dfc68c677716->enter($__internal_4127d13ce86a82b31c4589ead3a8cdac55d58d3ee4bbb70f34a3dfc68c677716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        $__internal_cb60e8fe4cfb9e65b83a4b66a4fdb4880b8af40559c246197e89edd719cfd57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb60e8fe4cfb9e65b83a4b66a4fdb4880b8af40559c246197e89edd719cfd57f->enter($__internal_cb60e8fe4cfb9e65b83a4b66a4fdb4880b8af40559c246197e89edd719cfd57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        // line 103
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    ";
        // line 111
        if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "xmlHttpRequest", array())) {
            // line 112
            echo "                                    <ul class=\"list-unstyled\">
                                        ";
            // line 113
            $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 113)->display($context);
            // line 114
            echo "                                    </ul>
                                    ";
        }
        // line 116
        echo "                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
        
        $__internal_cb60e8fe4cfb9e65b83a4b66a4fdb4880b8af40559c246197e89edd719cfd57f->leave($__internal_cb60e8fe4cfb9e65b83a4b66a4fdb4880b8af40559c246197e89edd719cfd57f_prof);

        
        $__internal_4127d13ce86a82b31c4589ead3a8cdac55d58d3ee4bbb70f34a3dfc68c677716->leave($__internal_4127d13ce86a82b31c4589ead3a8cdac55d58d3ee4bbb70f34a3dfc68c677716_prof);

    }

    // line 124
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_9657bee34fcb2eef01a75b084a94056707b2b96cb4d4e6bb7ca4ce295690df7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9657bee34fcb2eef01a75b084a94056707b2b96cb4d4e6bb7ca4ce295690df7f->enter($__internal_9657bee34fcb2eef01a75b084a94056707b2b96cb4d4e6bb7ca4ce295690df7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        $__internal_44d9514c149a9a549bbef0763ca8bb91b075b5b81ce18fbe89518e7a7739d462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d9514c149a9a549bbef0763ca8bb91b075b5b81ce18fbe89518e7a7739d462->enter($__internal_44d9514c149a9a549bbef0763ca8bb91b075b5b81ce18fbe89518e7a7739d462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        // line 125
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 126
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 128
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
                // line 129
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 130
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                    // line 131
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 178
                    echo "                                    ";
                }
                // line 179
                echo "                                </div>


                                ";
                // line 183
                echo "                                ";
                $context["export_formats"] = ((array_key_exists("export_formats", $context)) ? (_twig_default_filter((isset($context["export_formats"]) ? $context["export_formats"] : $this->getContext($context, "export_formats")), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "exportFormats", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "exportFormats", array())));
                // line 184
                echo "
                                <div class=\"pull-right\">
                                    ";
                // line 186
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "export"), "method")) && twig_length_filter($this->env, (isset($context["export_formats"]) ? $context["export_formats"] : $this->getContext($context, "export_formats"))))) {
                    // line 187
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                ";
                    // line 190
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 194
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["export_formats"]) ? $context["export_formats"] : $this->getContext($context, "export_formats")));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 195
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 196
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 198
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("export_format_" . $context["format"]), array(), "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                <li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 202
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 207
                echo "
                                    ";
                // line 208
                $this->displayBlock('pager_results', $context, $blocks);
                // line 211
                echo "                                </div>
                            ";
            }
            // line 213
            echo "                        </div>

                        ";
            // line 215
            $this->displayBlock('pager_links', $context, $blocks);
            // line 221
            echo "                    </div>
                ";
        }
        // line 223
        echo "            ";
        
        $__internal_44d9514c149a9a549bbef0763ca8bb91b075b5b81ce18fbe89518e7a7739d462->leave($__internal_44d9514c149a9a549bbef0763ca8bb91b075b5b81ce18fbe89518e7a7739d462_prof);

        
        $__internal_9657bee34fcb2eef01a75b084a94056707b2b96cb4d4e6bb7ca4ce295690df7f->leave($__internal_9657bee34fcb2eef01a75b084a94056707b2b96cb4d4e6bb7ca4ce295690df7f_prof);

    }

    // line 131
    public function block_batch($context, array $blocks = array())
    {
        $__internal_54898fd6ec9c04c601f433c391cd9f731103e2537d766c4168505e83abd1bfa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54898fd6ec9c04c601f433c391cd9f731103e2537d766c4168505e83abd1bfa4->enter($__internal_54898fd6ec9c04c601f433c391cd9f731103e2537d766c4168505e83abd1bfa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        $__internal_53c321bd199c22cf6a6899d3c4de0027dd5b752a941c0f913513cc1d4beb31ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c321bd199c22cf6a6899d3c4de0027dd5b752a941c0f913513cc1d4beb31ff->enter($__internal_53c321bd199c22cf6a6899d3c4de0027dd5b752a941c0f913513cc1d4beb31ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        // line 132
        echo "                                            <script>
                                                ";
        // line 133
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 160
        echo "                                            </script>

                                        ";
        // line 162
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 175
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_53c321bd199c22cf6a6899d3c4de0027dd5b752a941c0f913513cc1d4beb31ff->leave($__internal_53c321bd199c22cf6a6899d3c4de0027dd5b752a941c0f913513cc1d4beb31ff_prof);

        
        $__internal_54898fd6ec9c04c601f433c391cd9f731103e2537d766c4168505e83abd1bfa4->leave($__internal_54898fd6ec9c04c601f433c391cd9f731103e2537d766c4168505e83abd1bfa4_prof);

    }

    // line 133
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_27ead7c122e5976da0126c7f9bf5159648e68a73d367d934667f4114f4d997b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ead7c122e5976da0126c7f9bf5159648e68a73d367d934667f4114f4d997b8->enter($__internal_27ead7c122e5976da0126c7f9bf5159648e68a73d367d934667f4114f4d997b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        $__internal_19ddf80dc64941236d1a5825d9ea1eea62093cd8c752edd5c3511911af90d5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ddf80dc64941236d1a5825d9ea1eea62093cd8c752edd5c3511911af90d5af->enter($__internal_19ddf80dc64941236d1a5825d9ea1eea62093cd8c752edd5c3511911af90d5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 134
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
        
        $__internal_19ddf80dc64941236d1a5825d9ea1eea62093cd8c752edd5c3511911af90d5af->leave($__internal_19ddf80dc64941236d1a5825d9ea1eea62093cd8c752edd5c3511911af90d5af_prof);

        
        $__internal_27ead7c122e5976da0126c7f9bf5159648e68a73d367d934667f4114f4d997b8->leave($__internal_27ead7c122e5976da0126c7f9bf5159648e68a73d367d934667f4114f4d997b8_prof);

    }

    // line 162
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_3fdca0a2e73d26f078bdf2f87ac54338b2a148e4632dd0f735d0f43115f1c4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fdca0a2e73d26f078bdf2f87ac54338b2a148e4632dd0f735d0f43115f1c4cb->enter($__internal_3fdca0a2e73d26f078bdf2f87ac54338b2a148e4632dd0f735d0f43115f1c4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_7d09cb76b4f7bcc1fa48eb60951446caad30124a7db556f32fb82d868092f47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d09cb76b4f7bcc1fa48eb60951446caad30124a7db556f32fb82d868092f47f->enter($__internal_7d09cb76b4f7bcc1fa48eb60951446caad30124a7db556f32fb82d868092f47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 163
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 171
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["options"], "label", array()), array(), (($this->getAttribute($context["options"], "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["options"], "translation_domain", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "                                            </select>
                                        ";
        
        $__internal_7d09cb76b4f7bcc1fa48eb60951446caad30124a7db556f32fb82d868092f47f->leave($__internal_7d09cb76b4f7bcc1fa48eb60951446caad30124a7db556f32fb82d868092f47f_prof);

        
        $__internal_3fdca0a2e73d26f078bdf2f87ac54338b2a148e4632dd0f735d0f43115f1c4cb->leave($__internal_3fdca0a2e73d26f078bdf2f87ac54338b2a148e4632dd0f735d0f43115f1c4cb_prof);

    }

    // line 208
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_fd8739f60eb0c974458e25f6e552052a30f0264fbda3bee77b741f0c7d8a3165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8739f60eb0c974458e25f6e552052a30f0264fbda3bee77b741f0c7d8a3165->enter($__internal_fd8739f60eb0c974458e25f6e552052a30f0264fbda3bee77b741f0c7d8a3165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        $__internal_f69101b02b656511d792983f265d60d83824115272c5cefc583d4e1adc7e0fda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69101b02b656511d792983f265d60d83824115272c5cefc583d4e1adc7e0fda->enter($__internal_f69101b02b656511d792983f265d60d83824115272c5cefc583d4e1adc7e0fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 209
        echo "                                        ";
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 209)->display($context);
        // line 210
        echo "                                    ";
        
        $__internal_f69101b02b656511d792983f265d60d83824115272c5cefc583d4e1adc7e0fda->leave($__internal_f69101b02b656511d792983f265d60d83824115272c5cefc583d4e1adc7e0fda_prof);

        
        $__internal_fd8739f60eb0c974458e25f6e552052a30f0264fbda3bee77b741f0c7d8a3165->leave($__internal_fd8739f60eb0c974458e25f6e552052a30f0264fbda3bee77b741f0c7d8a3165_prof);

    }

    // line 215
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_89679698a51d69c81b578b710d038d5ef3e8a003b91eff3bd028cc63af7693b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89679698a51d69c81b578b710d038d5ef3e8a003b91eff3bd028cc63af7693b3->enter($__internal_89679698a51d69c81b578b710d038d5ef3e8a003b91eff3bd028cc63af7693b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        $__internal_be5a8c53aa5264da6bd249c4f085c34fdbe8d9b9e391c6a493fbe3f9a5e2c77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5a8c53aa5264da6bd249c4f085c34fdbe8d9b9e391c6a493fbe3f9a5e2c77b->enter($__internal_be5a8c53aa5264da6bd249c4f085c34fdbe8d9b9e391c6a493fbe3f9a5e2c77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 216
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 217
            echo "                                <hr/>
                                ";
            // line 218
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 218)->display($context);
            // line 219
            echo "                            ";
        }
        // line 220
        echo "                        ";
        
        $__internal_be5a8c53aa5264da6bd249c4f085c34fdbe8d9b9e391c6a493fbe3f9a5e2c77b->leave($__internal_be5a8c53aa5264da6bd249c4f085c34fdbe8d9b9e391c6a493fbe3f9a5e2c77b_prof);

        
        $__internal_89679698a51d69c81b578b710d038d5ef3e8a003b91eff3bd028cc63af7693b3->leave($__internal_89679698a51d69c81b578b710d038d5ef3e8a003b91eff3bd028cc63af7693b3_prof);

    }

    // line 231
    public function block_list_filters_actions($context, array $blocks = array())
    {
        $__internal_14fb613c50b8995ed28170c806f9595a45d6aece51e2427532f4c6899e99ef94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14fb613c50b8995ed28170c806f9595a45d6aece51e2427532f4c6899e99ef94->enter($__internal_14fb613c50b8995ed28170c806f9595a45d6aece51e2427532f4c6899e99ef94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        $__internal_604a95d26f91d89c0ef5c32616ce7b9312b5b697867cb5eae94a76597ca8352d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604a95d26f91d89c0ef5c32616ce7b9312b5b697867cb5eae94a76597ca8352d->enter($__internal_604a95d26f91d89c0ef5c32616ce7b9312b5b697867cb5eae94a76597ca8352d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        // line 232
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))) {
            // line 233
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 238
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 242
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) {
                    // line 243
                    echo "                        ";
                    $context["filterActive"] = (($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")) &&  !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                    // line 244
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 245
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 246
                    echo ((($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        
        $__internal_604a95d26f91d89c0ef5c32616ce7b9312b5b697867cb5eae94a76597ca8352d->leave($__internal_604a95d26f91d89c0ef5c32616ce7b9312b5b697867cb5eae94a76597ca8352d_prof);

        
        $__internal_14fb613c50b8995ed28170c806f9595a45d6aece51e2427532f4c6899e99ef94->leave($__internal_14fb613c50b8995ed28170c806f9595a45d6aece51e2427532f4c6899e99ef94_prof);

    }

    // line 256
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_6351fcdb44e2e85e1b4f9123fda5761a35e28186a92d09fb6d9b3355e20a3df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6351fcdb44e2e85e1b4f9123fda5761a35e28186a92d09fb6d9b3355e20a3df7->enter($__internal_6351fcdb44e2e85e1b4f9123fda5761a35e28186a92d09fb6d9b3355e20a3df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        $__internal_2374ce4c39cff1dd169d3577f27e741edc69f7df601b8caf232dc4b1b666647c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2374ce4c39cff1dd169d3577f27e741edc69f7df601b8caf232dc4b1b666647c->enter($__internal_2374ce4c39cff1dd169d3577f27e741edc69f7df601b8caf232dc4b1b666647c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 257
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 258
            echo "        ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "filter"), "method")));
            // line 259
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 260
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 263
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 264
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 268
            $context["withAdvancedFilter"] = false;
            // line 269
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 270
                echo "                                    ";
                $context["filterActive"] = ((($this->getAttribute($context["filter"], "isActive", array(), "method") && (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) || ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true)) &&  !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                // line 271
                echo "                                    ";
                $context["filterVisible"] = (($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")));
                // line 272
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (((isset($context["filterVisible"]) ? $context["filterVisible"] : $this->getContext($context, "filterVisible"))) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if ((isset($context["filterActive"]) ? $context["filterActive"] : $this->getContext($context, "filterActive"))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 273
                if ( !($this->getAttribute($context["filter"], "label", array()) === false)) {
                    // line 274
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 276
                echo "                                        ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 277
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 279
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr"))));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 283
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 288
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 295
                if ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "advanced_filter", array(), "array")) {
                    // line 296
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 297
                    echo "                                    ";
                }
                // line 298
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 299
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 303
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 304
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> ";
            // line 308
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 311
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 312
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 316
            if ((isset($context["withAdvancedFilter"]) ? $context["withAdvancedFilter"] : $this->getContext($context, "withAdvancedFilter"))) {
                // line 317
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 320
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 324
            echo "                            </div>
                        </div>

                        ";
            // line 327
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 328
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_2374ce4c39cff1dd169d3577f27e741edc69f7df601b8caf232dc4b1b666647c->leave($__internal_2374ce4c39cff1dd169d3577f27e741edc69f7df601b8caf232dc4b1b666647c_prof);

        
        $__internal_6351fcdb44e2e85e1b4f9123fda5761a35e28186a92d09fb6d9b3355e20a3df7->leave($__internal_6351fcdb44e2e85e1b4f9123fda5761a35e28186a92d09fb6d9b3355e20a3df7_prof);

    }

    // line 272
    public function block_sonata_list_filter_group_class($context, array $blocks = array())
    {
        $__internal_19186b3b8b91fb6fc1cecf7612a0b8285e59bf1d513756bbcced509e9f99e66b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19186b3b8b91fb6fc1cecf7612a0b8285e59bf1d513756bbcced509e9f99e66b->enter($__internal_19186b3b8b91fb6fc1cecf7612a0b8285e59bf1d513756bbcced509e9f99e66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        $__internal_bf90233e4e1f792a64002532b030cc1fd58611015a55ad8e6bbeef651b04c3fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf90233e4e1f792a64002532b030cc1fd58611015a55ad8e6bbeef651b04c3fa->enter($__internal_bf90233e4e1f792a64002532b030cc1fd58611015a55ad8e6bbeef651b04c3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        
        $__internal_bf90233e4e1f792a64002532b030cc1fd58611015a55ad8e6bbeef651b04c3fa->leave($__internal_bf90233e4e1f792a64002532b030cc1fd58611015a55ad8e6bbeef651b04c3fa_prof);

        
        $__internal_19186b3b8b91fb6fc1cecf7612a0b8285e59bf1d513756bbcced509e9f99e66b->leave($__internal_19186b3b8b91fb6fc1cecf7612a0b8285e59bf1d513756bbcced509e9f99e66b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1107 => 272,  1092 => 330,  1081 => 328,  1077 => 327,  1072 => 324,  1065 => 320,  1060 => 317,  1058 => 316,  1051 => 312,  1047 => 311,  1041 => 308,  1033 => 304,  1031 => 303,  1025 => 299,  1011 => 298,  1008 => 297,  1005 => 296,  1003 => 295,  989 => 288,  981 => 283,  974 => 279,  970 => 277,  967 => 276,  959 => 274,  957 => 273,  940 => 272,  937 => 271,  934 => 270,  916 => 269,  914 => 268,  907 => 264,  901 => 263,  893 => 260,  890 => 259,  887 => 258,  884 => 257,  875 => 256,  861 => 250,  848 => 246,  840 => 245,  837 => 244,  834 => 243,  829 => 242,  822 => 238,  815 => 233,  813 => 232,  804 => 231,  794 => 220,  791 => 219,  789 => 218,  786 => 217,  783 => 216,  774 => 215,  764 => 210,  761 => 209,  752 => 208,  741 => 173,  730 => 171,  726 => 170,  719 => 166,  715 => 165,  711 => 164,  706 => 163,  697 => 162,  662 => 134,  653 => 133,  641 => 176,  638 => 175,  636 => 162,  632 => 160,  630 => 133,  627 => 132,  618 => 131,  608 => 223,  604 => 221,  602 => 215,  598 => 213,  594 => 211,  592 => 208,  589 => 207,  582 => 202,  572 => 198,  567 => 196,  564 => 195,  560 => 194,  553 => 190,  548 => 187,  546 => 186,  542 => 184,  539 => 183,  534 => 179,  531 => 178,  528 => 131,  526 => 130,  523 => 129,  521 => 128,  517 => 126,  514 => 125,  505 => 124,  492 => 116,  488 => 114,  486 => 113,  483 => 112,  481 => 111,  473 => 106,  468 => 103,  459 => 102,  449 => 99,  440 => 98,  429 => 95,  427 => 94,  424 => 93,  415 => 92,  403 => 88,  397 => 87,  394 => 86,  390 => 84,  386 => 83,  381 => 82,  375 => 80,  372 => 79,  366 => 78,  344 => 77,  342 => 76,  339 => 75,  336 => 74,  333 => 73,  330 => 72,  327 => 71,  324 => 70,  321 => 69,  318 => 68,  315 => 67,  312 => 66,  310 => 65,  307 => 64,  305 => 63,  303 => 62,  300 => 61,  298 => 60,  293 => 57,  290 => 56,  286 => 55,  282 => 53,  273 => 52,  256 => 48,  245 => 228,  241 => 226,  239 => 225,  236 => 224,  234 => 124,  229 => 122,  226 => 121,  223 => 120,  220 => 102,  216 => 100,  214 => 98,  211 => 97,  209 => 92,  206 => 91,  204 => 52,  201 => 51,  199 => 50,  196 => 49,  194 => 48,  189 => 46,  183 => 45,  176 => 44,  173 => 42,  168 => 40,  163 => 39,  160 => 38,  158 => 37,  155 => 36,  146 => 35,  133 => 32,  124 => 31,  110 => 27,  108 => 26,  105 => 25,  103 => 21,  94 => 20,  76 => 18,  66 => 15,  57 => 14,  36 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block title %}
    {#
        The list template can be used in nested mode,
        so we define the title corresponding to the parent's admin.
    #}

    {% if admin.isChild and admin.parent.subject %}
        {{ \"title_edit\"|trans({'%name%': admin.parent.toString(admin.parent.subject)|truncate(15) }, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{% block list_table %}
    <div class=\"col-xs-12 col-md-12\">
        {% set batchactions = admin.batchactions %}
        {% if admin.hasRoute('batch') and batchactions|length %}
            <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">
        {% endif %}

        {# Add a margin if no pager to prevent dropdown cropping on window #}
        <div class=\"box box-primary\" {% if admin.datagrid.pager.lastPage == 1 %}style=\"margin-bottom: 100px;\"{% endif %}>
            <div class=\"box-body {% if admin.datagrid.results|length > 0 %}table-responsive no-padding{% endif %}\">
                {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}

                {% block list_header %}{% endblock %}

                {% if admin.datagrid.results|length > 0 %}
                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        {% block table_header %}
                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    {% for field_description in admin.list.elements %}
                                        {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        {% elseif field_description.getOption('code') == '_select' %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}
                                            {# Action buttons disabled in ajax view! #}
                                        {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}
                                            {# Disable fields with 'ajax_hidden' option set to true #}
                                        {% else %}
                                            {% set sortable = false %}
                                            {% if field_description.options.sortable is defined and field_description.options.sortable %}
                                                {% set sortable             = true %}
                                                {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}
                                                {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}
                                                {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}
                                                {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}
                                            {% endif %}

                                            {% spaceless %}
                                                <th class=\"sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}{% if field_description.options.header_class is defined %} {{ field_description.options.header_class }}{% endif %}\"{% if field_description.options.header_style is defined %} style=\"{{ field_description.options.header_style }}\"{% endif %}>
                                                    {% if sortable %}<a href=\"{{ admin.generateUrl('list', sort_parameters) }}\">{% endif %}
                                                    {% if field_description.getOption('label_icon') %}
                                                        <i class=\"sonata-ba-list-field-header-label-icon {{ field_description.getOption('label_icon') }}\" aria-hidden=\"true\"></i>
                                                    {% endif %}
                                                    {{ field_description.label|trans({}, field_description.translationDomain) }}
                                                    {% if sortable %}</a>{% endif %}
                                                </th>
                                            {% endspaceless %}
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </thead>
                        {% endblock %}

                        {% block table_body %}
                            <tbody>
                                {% include admin.getTemplate('outer_list_rows_' ~ admin.getListMode()) %}
                            </tbody>
                        {% endblock %}

                        {% block table_footer %}
                        {% endblock %}
                    </table>
                {% else %}
                    {% block no_result_content %}
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    {% if not app.request.xmlHttpRequest %}
                                    <ul class=\"list-unstyled\">
                                        {% include 'SonataAdminBundle:Button:create_button.html.twig' %}
                                    </ul>
                                    {% endif %}
                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    {% endblock %}
                {% endif %}

                {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}
            </div>
            {% block list_footer %}
                {% if admin.datagrid.results|length > 0 %}
                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            {% if not app.request.isXmlHttpRequest %}
                                <div class=\"pull-left\">
                                    {% if admin.hasRoute('batch') and batchactions|length > 0  %}
                                        {% block batch %}
                                            <script>
                                                {% block batch_javascript %}
                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                {% endblock %}
                                            </script>

                                        {% block batch_actions %}
                                            <label class=\"checkbox\" for=\"{{ admin.uniqid }}_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"{{ admin.uniqid }}_all_elements\">
                                                {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}
                                                ({{ admin.datagrid.pager.nbresults }})
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                {% for action, options in batchactions %}
                                                    <option value=\"{{ action }}\">{{ options.label|trans({}, options.translation_domain|default(admin.translationDomain)) }}</option>
                                                {% endfor %}
                                            </select>
                                        {% endblock %}

                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}\">
                                        {% endblock %}
                                    {% endif %}
                                </div>


                                {# NEXT_MAJOR : remove this assignment #}
                                {% set export_formats = export_formats|default(admin.exportFormats) %}

                                <div class=\"pull-right\">
                                    {% if admin.hasRoute('export') and admin.hasAccess('export') and export_formats|length %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                {{ \"label_export_download\"|trans({}, \"SonataAdminBundle\") }}
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                {% for format in export_formats %}
                                                <li>
                                                    <a href=\"{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        {{ (\"export_format_\" ~ format)|trans({}, 'SonataAdminBundle') }}
                                                    </a>
                                                <li>
                                                {% endfor %}
                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    {% endif %}

                                    {% block pager_results %}
                                        {% include admin.getTemplate('pager_results') %}
                                    {% endblock %}
                                </div>
                            {% endif %}
                        </div>

                        {% block pager_links %}
                            {% if admin.datagrid.pager.haveToPaginate() %}
                                <hr/>
                                {% include admin.getTemplate('pager_links') %}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
        {% if admin.hasRoute('batch') and batchactions|length %}
            </form>
        {% endif %}
    </div>
{% endblock %}

{% block list_filters_actions %}
    {%- if admin.datagrid.filters|length %}
        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    {{ 'link_filters'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    {% for filter in admin.datagrid.filters if (filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null) %}
                        {% set filterActive = ((filter.isActive() or filter.options['show_filter']) and not admin.isDefaultFilter(filter.formName)) %}
                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                <i class=\"fa {{ (filter.isActive() or filter.options['show_filter']) ? 'fa-check-square-o' : 'fa-square-o' }}\"></i>{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </li>
        </ul>
    {% endif -%}
{% endblock %}

{% block list_filters %}
    {% if admin.datagrid.filters %}
        {% form_theme form admin.getTemplate('filter') %}

        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: {{ admin.datagrid.hasDisplayableFilters ? 'block' : 'none' }}\" id=\"filter-container-{{ admin.uniqid() }}\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}\" action=\"{{ admin.generateUrl('list') }}\" method=\"GET\" role=\"form\">
                        {{ form_errors(form) }}

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                {% set withAdvancedFilter = false %}
                                {% for filter in admin.datagrid.filters %}
                                    {% set filterActive = ((filter.isActive() and filter.options['show_filter'] is null) or (filter.options['show_filter'] is same as(true))) and not admin.isDefaultFilter(filter.formName) %}
                                    {% set filterVisible = filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null %}
                                    <div class=\"form-group {% block sonata_list_filter_group_class %}{% endblock %}\" id=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" sonata-filter=\"{{ filterVisible ? 'true' : 'false' }}\" style=\"display: {% if filterActive %}block{% else %}none{% endif %}\">
                                        {% if filter.label is not same as(false) %}
                                            <label for=\"{{ form.children[filter.formName].children['value'].vars.id }}\" class=\"col-sm-3 control-label\">{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}</label>
                                        {% endif %}
                                        {% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}

                                        <div class=\"col-sm-4 advanced-filter\">
                                            {{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}
                                        </div>

                                        <div class=\"col-sm-4\">
                                            {{ form_widget(form.children[filter.formName].children['value']) }}
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    {% if filter.options['advanced_filter'] %}
                                        {% set withAdvancedFilter = true %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                {% set foo = form.children['_page'].setRendered() %}
                                {{ form_rest(form) }}

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}
                                    </button>

                                    <a class=\"btn btn-default\" href=\"{{ admin.generateUrl('list', {filters: 'reset'}) }}\">
                                        {{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}
                                    </a>
                                </div>

                                {% if withAdvancedFilter %}
                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            {{ 'btn_advanced_filters'|trans({}, 'SonataAdminBundle') }}
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        {% for paramKey, paramValue in admin.persistentParameters %}
                            <input type=\"hidden\" name=\"{{ paramKey }}\" value=\"{{ paramValue }}\">
                        {% endfor %}
                    </form>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_list.html.twig", "/var/www/html/Barlito/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list.html.twig");
    }
}
