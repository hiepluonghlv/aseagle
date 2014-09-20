<?php

/* AseagleBundle:Main:index.html.twig */
class __TwigTemplate_ffcad2734941bf8f59ff5420f09be7afb2cac55ba86147c7915cd731fc0c0bf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AseagleBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AseagleBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/main.css"), "html", null, true);
        echo "\" />

        <!-- Page Content -->
        <div class=\"container\">

        <div class=\"row row-offcanvas row-offcanvas-left\">
        <div class=\"left-side-bar col-xs-6 col-sm-3 col-md-2 sidebar-offcanvas\" id=\"sidebar\" role=\"navigation\">

        </div>

        <div class=\"main-area col-xs-12 col-sm-9 col-md-8\">
        <p class=\"pull-left visible-xs\">
            <button type=\"button\" class=\"btn btn-primary btn-xs btn-sm\" data-toggle=\"offcanvas\">Toggle nav</button>
        </p>


        </div><!--/main area-->

        <div class=\"hidden-xs hidden-sm col-md-2\">
            <div class=\"list-group\">
                <a href=\"#\" class=\"list-group-item active\">Link</a>
                <a href=\"#\" class=\"list-group-item\">Link</a>
                <a href=\"#\" class=\"list-group-item\">Link</a>
                <a href=\"#\" class=\"list-group-item\">Link</a>
                <a href=\"#\" class=\"list-group-item\">Link</a>
                <a href=\"#\" class=\"list-group-item\">Link</a>
                <a href=\"#\" class=\"list-group-item\">Link</a>
                <a href=\"#\" class=\"list-group-item\">Link</a>
                <a href=\"#\" class=\"list-group-item\">Link</a>
                <a href=\"#\" class=\"list-group-item\">Link</a>
            </div>
        </div><!--/span-->
        </div><!--/row-->

        <hr>

        <footer>
            <p>© Company 2014</p>
        </footer>

        </div>

        <script>
             \$(document).ready(function() {
                \$.ajax({url:\"main/left_side_bar/1\", async: false, type: \"GET\",success:function(result){
                    console.log(JSON.stringify(result));
                    _ajax_cat_filter_json = result;
                }});

                \$.ajax({url:\"main/filter/3?page=1&search_string=rice&country=3&21=2,3&22=4\",async:false, type: \"GET\",success:function(result){
                    console.log(JSON.stringify(result));
                    _ajax_product_list_json = result;
                }});

            });
        </script>
        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/js/main/main.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "AseagleBundle:Main:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,  338 => 224,  330 => 244,  326 => 242,  324 => 241,  319 => 239,  315 => 238,  308 => 234,  304 => 233,  300 => 232,  291 => 225,  289 => 224,  81 => 26,  77 => 25,  70 => 21,  65 => 19,  34 => 2,  113 => 51,  100 => 47,  53 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 6,  38 => 6,  94 => 31,  89 => 20,  85 => 27,  75 => 17,  68 => 14,  56 => 16,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 30,  44 => 11,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 49,  91 => 59,  62 => 23,  49 => 19,  24 => 29,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 11,  47 => 12,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 46,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 8,  41 => 7,  35 => 7,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 50,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 10,  60 => 6,  57 => 13,  54 => 10,  51 => 14,  48 => 9,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 6,  30 => 3,);
    }
}
