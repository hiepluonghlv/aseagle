<?php

/* AseagleBundle::layout.html.twig */
class __TwigTemplate_bfda6d7648b4c98f27d6b62277370284b161953ca0eca7619a658d6bb12c18cb extends Twig_Template
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
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title></title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/vendor/bootstrap/css/offcanvas.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/vendor/bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/vendor/bootplus/css/bootplus.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/vendor/yamm/yamm.css"), "html", null, true);
        echo "\">

    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/js/vendor/bootstrap/js/modernizr-2.6.2-respond-1.1.0.min.js"), "html", null, true);
        echo "\"></script>


    <!--original css-->
    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/vendor/bootstrap/js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "    <!--[if lt IE 7]>
    <p class=\"browsehappy\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Navigation -->
    <div class=\"navbar yamm navbar-default navbar-fixed-top\">
        <!--div class=\"container\"-->
        <div class=\"navbar-header\">
            <button type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" class=\"navbar-toggle collapsed\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button><a href=\"#\" class=\"navbar-brand\">Aseagle</a>
        </div>
        <div id=\"navbar-collapse-1\" class=\"navbar-collapse collapse\" style=\"height: 1px;\">
            <ul class=\"nav navbar-nav\">
                <!-- Grid 12 Menu -->
                <li class=\"dropdown yamm-fw\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Grid<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"grid-demo\">
                            <div class=\"row\">
                                <div class=\"col-sm-12\">.col-sm-12</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-6\">.col-sm-6</div>
                                <div class=\"col-sm-6\">.col-sm-6</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-4\">.col-sm-4</div>
                                <div class=\"col-sm-4\">.col-sm-4</div>
                                <div class=\"col-sm-4\">.col-sm-4</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">.col-sm-3</div>
                                <div class=\"col-sm-3\">.col-sm-3</div>
                                <div class=\"col-sm-3\">.col-sm-3</div>
                                <div class=\"col-sm-3\">.col-sm-3</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-2\">.col-sm-2</div>
                                <div class=\"col-sm-2\">.col-sm-2</div>
                                <div class=\"col-sm-2\">.col-sm-2</div>
                                <div class=\"col-sm-2\">.col-sm-2</div>
                                <div class=\"col-sm-2\">.col-sm-2</div>
                                <div class=\"col-sm-2\">.col-sm-2</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-1\">.col-sm-1</div>
                                <div class=\"col-sm-1\">.col-sm-1</div>
                                <div class=\"col-sm-1\">.col-sm-1</div>
                                <div class=\"col-sm-1\">.col-sm-1</div>
                                <div class=\"col-sm-1\">.col-sm-1</div>
                                <div class=\"col-sm-1\">.col-sm-1</div>
                                <div class=\"col-sm-1\">.col-sm-1</div>
                                <div class=\"col-sm-1\">.col-sm-1</div>
                                <div class=\"col-sm-1\">.col-sm-1</div>
                                <div class=\"col-sm-1\">.col-sm-1</div>
                                <div class=\"col-sm-1\">.col-sm-1</div>
                                <div class=\"col-sm-1\">.col-sm-1</div>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Classic list -->
                <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">List<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <!-- Content container to add padding -->
                            <div class=\"yamm-content\">
                                <div class=\"row\">
                                    <ul class=\"col-sm-2 list-unstyled\">
                                        <li>
                                            <p><strong>Section Title</strong></p>
                                        </li>
                                        <li>List Item</li>
                                        <li>List Item</li>
                                        <li>List Item</li>
                                        <li>List Item</li>
                                        <li>List Item</li>
                                        <li>List Item</li>
                                    </ul>
                                    <ul class=\"col-sm-2 list-unstyled\">
                                        <li>
                                            <p><strong>Links Title</strong></p>
                                        </li>
                                        <li><a href=\"#\"> Link Item </a></li>
                                        <li><a href=\"#\"> Link Item </a></li>
                                        <li><a href=\"#\"> Link Item </a></li>
                                        <li><a href=\"#\"> Link Item </a></li>
                                        <li><a href=\"#\"> Link Item </a></li>
                                        <li><a href=\"#\"> Link Item </a></li>
                                    </ul>
                                    <ul class=\"col-sm-2 list-unstyled\">
                                        <li>
                                            <p><strong>Section Title</strong></p>
                                        </li>
                                        <li>List Item</li>
                                        <li>List Item</li>
                                        <li>List Item</li>
                                        <li>List Item</li>
                                        <li>List Item</li>
                                        <li>List Item</li>
                                    </ul>
                                    <ul class=\"col-sm-2 list-unstyled\">
                                        <li>
                                            <p><strong>Section Title</strong></p>
                                        </li>
                                        <li>List Item</li>
                                        <li>List Item</li>
                                        <li>
                                            <ul>
                                                <li><a href=\"#\"> Link Item </a></li>
                                                <li><a href=\"#\"> Link Item </a></li>
                                                <li><a href=\"#\"> Link Item </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Accordion demo -->
                <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Accordion<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"yamm-content\">
                                <div class=\"row\">
                                    <div id=\"accordion\" class=\"panel-group\">
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\">
                                                <h4 class=\"panel-title\"><a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">Collapsible Group Item #1</a></h4>
                                            </div>
                                            <div id=\"collapseOne\" class=\"panel-collapse collapse in\">
                                                <div class=\"panel-body\">Ut consectetur ullamcorper purus a rutrum. Etiam dui nisi, hendrerit feugiat scelerisque et, cursus eu magna. </div>
                                            </div>
                                        </div>
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\">
                                                <h4 class=\"panel-title\"><a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">Collapsible Group Item #2</a></h4>
                                            </div>
                                            <div id=\"collapseTwo\" class=\"panel-collapse collapse\">
                                                <div class=\"panel-body\">Nullam pretium fermentum sapien ut convallis. Suspendisse vehicula, magna non tristique tincidunt, massa nisi luctus tellus, vel laoreet sem lectus ut nibh. </div>
                                            </div>
                                        </div>
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\">
                                                <h4 class=\"panel-title\"><a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\">Collapsible Group Item #3</a></h4>
                                            </div>
                                            <div id=\"collapseThree\" class=\"panel-collapse collapse\">
                                                <div class=\"panel-body\">Praesent leo quam, faucibus at facilisis id, rhoncus sit amet metus. Sed vitae ipsum non nibh mattis congue eget id augue. </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Classic dropdown -->
                <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Classic<b class=\"caret\"></b></a>
                    <ul role=\"menu\" class=\"dropdown-menu\">
                        <li><a tabindex=\"-1\" href=\"#\"> Action </a></li>
                        <li><a tabindex=\"-1\" href=\"#\"> Another action </a></li>
                        <li><a tabindex=\"-1\" href=\"#\"> Something else here </a></li>
                        <li class=\"divider\"></li>
                        <li><a tabindex=\"-1\" href=\"#\"> Separated link </a></li>
                    </ul>
                </li>
                <!-- Pictures -->
                <li class=\"dropdown yamm-fw\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Pictures<b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"yamm-content\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6 col-sm-2\"><a href=\"#\" class=\"thumbnail\"><img alt=\"150x190\" src=\"http://placekitten.com/150/190/\"></a></div>
                                    <div class=\"col-xs-6 col-sm-2\"><a href=\"#\" class=\"thumbnail\"><img alt=\"150x190\" src=\"http://placekitten.com/150/190/\"></a></div>
                                    <div class=\"col-xs-6 col-sm-2\"><a href=\"#\" class=\"thumbnail\"><img alt=\"150x190\" src=\"http://placekitten.com/150/190/\"></a></div>
                                    <div class=\"col-xs-6 col-sm-2\"><a href=\"#\" class=\"thumbnail\"><img alt=\"150x190\" src=\"http://placekitten.com/150/190/\"></a></div>
                                    <div class=\"col-xs-6 col-sm-2\"><a href=\"#\" class=\"thumbnail\"><img alt=\"150x190\" src=\"http://placekitten.com/150/190/\"></a></div>
                                    <div class=\"col-xs-6 col-sm-2\"><a href=\"#\" class=\"thumbnail\"><img alt=\"150x190\" src=\"http://placekitten.com/150/190/\"></a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/div-->
    </div>



    <div class=\"block\">
        ";
        // line 224
        $this->displayBlock('content', $context, $blocks);
        // line 225
        echo "    </div>

    <footer>
        <p>© Company 2014</p>
    </footer>


    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/vendor/bootstrap/js/offcanvas.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/js/require.js"), "html", null, true);
        echo "\"></script>



    <script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/js/_util/util.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/js/_util/mapping_en.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 241
        if (array_key_exists("code", $context)) {
            // line 242
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 244
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
    }

    // line 224
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AseagleBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  338 => 224,  330 => 244,  326 => 242,  324 => 241,  319 => 239,  315 => 238,  308 => 234,  304 => 233,  300 => 232,  291 => 225,  289 => 224,  81 => 26,  77 => 25,  70 => 21,  65 => 19,  34 => 2,  113 => 51,  100 => 47,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 31,  89 => 20,  85 => 27,  75 => 17,  68 => 14,  56 => 16,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 30,  44 => 12,  31 => 1,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 49,  91 => 30,  62 => 23,  49 => 19,  24 => 29,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 46,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 50,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 13,  54 => 10,  51 => 14,  48 => 9,  45 => 8,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
