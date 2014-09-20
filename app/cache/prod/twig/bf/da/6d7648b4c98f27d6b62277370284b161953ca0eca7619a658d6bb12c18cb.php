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
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/style.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Aseagle";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"top-bar\">
        <div class=\"div-logo float-left\"></div>
        <div class=\"div_search float-left\">
            <form id=\"masthead-search\" class=\"search-form consolidated-form\">
                <div id=\"masthead-search-scope\" class=\"yt-uix-button yt-uix-button-size-default yt-uix-button-default\">
                    <label>All</label>
                </div>
                <button id=\"sarch-btn\" class=\"yt-uix-button yt-uix-button-size-default yt-uix-button-default search-btn-component search-button\" tabindex=\"2\" dir=\"ltr\" type=\"submit\">
                    <span class=\"yt-uix-button-content\">Tìm kiếm </span>
                </button>
                <div id=\"masthead-search-terms\" class=\"masthead-search-terms-border\" dir=\"ltr\">
                    <label>
                        <input id=\"masthead-search-term\" class=\"search-term yt-uix-form-input-bidi\" type=\"text\" title=\"Tìm kiếm\" tabindex=\"1\" value=\"\" name=\"search_query\" autofocus=\"\" autocomplete=\"off\">
                    </label>
                </div>

            </form>
        </div>
        <div class=\"div-post-request float-left\">
            <label>Post Buying Request</label>
        </div>
        <div class=\"div-nav-header float-left\">
            <ul>
                <li class=\"li-main\">
                    <a>For Supplier</a>
                    <ul>
                        <li><a>Supplier Memberships</a>
                        </li><li><a>Add/Manage Products</a>
                        </li><li><a>New RFQs</a>
                        </li><li><a>Learning Center</a>
                        </li><li><a>Training Center</a>
                        </li>
                    </ul>
                </li><li class=\"li-main\">
                    <a>For Buyer</a>
                    <ul>
                        <li><a>How to buy</a>
                        </li><li><a>Post buying Requests</a>
                        </li><li><a>Payment Methods</a>
                        </li>
                    </ul>
                </li><li class=\"li-main\">
                    <a>My Aseagle</a>
                    <ul>
                        <li><a>My Page</a>
                        </li><li><a>Message Center</a>
                        </li><li><a>Display New Products</a>
                        </li><li><a>Manage Products</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class=\"div-account float-left\">
            <a>Login</a> | <a>Register</a>
        </div>
    </div>
    ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 67
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : null), "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
    ";
        // line 72
        $this->displayBlock('content_header', $context, $blocks);
        // line 81
        echo "
    <div class=\"block\">
        ";
        // line 83
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "    </div>

    ";
        // line 86
        if (array_key_exists("code", $context)) {
            // line 87
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 89
            echo (isset($context["code"]) ? $context["code"] : null);
            echo "</div>
        </div>
    ";
        }
    }

    // line 72
    public function block_content_header($context, array $blocks = array())
    {
        // line 73
        echo "        <ul id=\"menu\">
            ";
        // line 74
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 77
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 74
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 75
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AseagleBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  191 => 83,  184 => 75,  181 => 74,  174 => 77,  172 => 74,  152 => 86,  148 => 84,  146 => 83,  137 => 71,  53 => 6,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 73,  140 => 72,  132 => 51,  128 => 68,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 8,  47 => 3,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 15,  21 => 2,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 5,  40 => 8,  44 => 12,  35 => 8,  31 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 72,  163 => 62,  158 => 89,  156 => 66,  151 => 63,  142 => 81,  138 => 54,  136 => 56,  123 => 47,  121 => 66,  117 => 44,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 9,  49 => 19,  24 => 4,  32 => 7,  25 => 1,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 87,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 67,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 14,  48 => 9,  45 => 8,  42 => 2,  39 => 1,  36 => 5,  33 => 4,  30 => 6,);
    }
}
