<?php

/* AseagleBundle::product_layout.html.twig */
class __TwigTemplate_ba89a5bb0bb7435813a8cd70a25326ce779cf43852d72c3ac49871c1929bbe86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "
";
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "    <!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
    <!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
    <!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title></title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/bootstrap/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/bootstrap/shop-item.css"), "html", null, true);
        echo "\">

        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery Version 1.11.0 -->
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/js/vendor/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"#\">About</a>
                    </li>
                    <li>
                        <a href=\"#\">Services</a>
                    </li>
                    <li>
                        <a href=\"#\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "    <!-- /.container -->

";
    }

    // line 56
    public function block_content($context, array $blocks = array())
    {
        // line 57
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "AseagleBundle::product_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 57,  23 => 1,  338 => 224,  330 => 244,  326 => 242,  324 => 241,  319 => 239,  315 => 238,  308 => 234,  304 => 233,  300 => 232,  291 => 225,  289 => 224,  81 => 26,  77 => 25,  70 => 21,  65 => 27,  34 => 2,  113 => 56,  100 => 47,  53 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 16,  38 => 6,  94 => 31,  89 => 33,  85 => 27,  75 => 22,  68 => 14,  56 => 24,  87 => 25,  21 => 2,  26 => 62,  93 => 28,  88 => 6,  78 => 23,  46 => 12,  27 => 30,  44 => 11,  31 => 1,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 56,  117 => 44,  105 => 49,  91 => 59,  62 => 23,  49 => 19,  24 => 22,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 20,  47 => 12,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 59,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 46,  83 => 25,  74 => 30,  66 => 15,  55 => 15,  52 => 23,  50 => 13,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 50,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 18,  60 => 6,  57 => 13,  54 => 14,  51 => 14,  48 => 9,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 6,  30 => 3,);
    }
}
