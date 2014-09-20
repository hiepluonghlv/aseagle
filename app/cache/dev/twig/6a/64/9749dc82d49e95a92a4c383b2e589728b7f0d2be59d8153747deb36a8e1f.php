<?php

/* AseagleBundle:Product:show.html.twig */
class __TwigTemplate_6a649749dc82d49e95a92a4c383b2e589728b7f0d2be59d8153747deb36a8e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AseagleBundle::product_layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AseagleBundle::product_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-md-3\">
                <p class=\"lead\">Shop Name</p>
                <div class=\"list-group\">
                    <a href=\"#\" class=\"list-group-item active\">Category 1</a>
                    <a href=\"#\" class=\"list-group-item\">Category 2</a>
                    <a href=\"#\" class=\"list-group-item\">Category 3</a>
                </div>
            </div>

            <div class=\"col-md-9\">

                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/800x300\" alt=\"\">
                    <div class=\"caption-full\">
                        <h4 class=\"pull-right\">";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["pr"]) ? $context["pr"] : $this->getContext($context, "pr")), "html", null, true);
        echo "\$</h4>
                        <h4><a href=\"#\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["n"]) ? $context["n"] : $this->getContext($context, "n")), "html", null, true);
        echo "</a>
                        </h4>
                        <p><strong>Min. Order Quantity :</strong> ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["m_o"]) ? $context["m_o"] : $this->getContext($context, "m_o")), "html", null, true);
        echo "</p>
                        <p><strong>Port :</strong> ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["port"]) ? $context["port"] : $this->getContext($context, "port")), "html", null, true);
        echo "</p>
                        <p><strong>Payment Terms :</strong>: ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["pay"]) ? $context["pay"] : $this->getContext($context, "pay")), "html", null, true);
        echo "</p>
                        <p>More details:</p>
                        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["d"]) ? $context["d"] : $this->getContext($context, "d")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 31
            echo "                            <p>";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    </div>
                    <div class=\"ratings\">
                        <p class=\"pull-right\">3 reviews</p>
                        <p>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>

                <div class=\"well\">

                    <div class=\"text-right\">
                        <a class=\"btn btn-success\">Leave a Review</a>
                    </div>

                    <hr>

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                            Anonymous
                            <span class=\"pull-right\">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div>

                    <hr>

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                            Anonymous
                            <span class=\"pull-right\">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div>

                    <hr>

                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star\"></span>
                            <span class=\"glyphicon glyphicon-star-empty\"></span>
                            Anonymous
                            <span class=\"pull-right\">15 days ago</span>
                            <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class=\"container\">

        <hr>

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
";
    }

    public function getTemplateName()
    {
        return "AseagleBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,  338 => 224,  330 => 244,  326 => 242,  324 => 241,  319 => 239,  315 => 238,  308 => 234,  304 => 233,  300 => 232,  291 => 225,  289 => 224,  81 => 26,  77 => 25,  70 => 21,  65 => 27,  34 => 2,  113 => 51,  100 => 47,  53 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 26,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 6,  38 => 6,  94 => 31,  89 => 33,  85 => 27,  75 => 17,  68 => 14,  56 => 24,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 31,  46 => 7,  27 => 30,  44 => 11,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 49,  91 => 59,  62 => 23,  49 => 19,  24 => 29,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 28,  47 => 12,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 46,  83 => 25,  74 => 30,  66 => 15,  55 => 15,  52 => 23,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 50,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 10,  60 => 6,  57 => 13,  54 => 10,  51 => 14,  48 => 9,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 6,  30 => 3,);
    }
}
