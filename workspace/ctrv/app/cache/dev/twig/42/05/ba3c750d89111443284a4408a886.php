<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4205ba3c750d89111443284a4408a886 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($this->getContext($context, "collector"), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  69 => 21,  66 => 20,  60 => 16,  56 => 14,  54 => 13,  42 => 8,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  328 => 140,  325 => 139,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  299 => 125,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  278 => 114,  273 => 111,  271 => 110,  266 => 107,  262 => 105,  256 => 103,  252 => 101,  245 => 97,  238 => 93,  232 => 89,  229 => 88,  224 => 86,  219 => 83,  213 => 79,  210 => 78,  207 => 77,  205 => 76,  200 => 73,  194 => 69,  191 => 68,  188 => 67,  186 => 66,  181 => 63,  175 => 59,  172 => 58,  169 => 57,  167 => 56,  160 => 53,  141 => 43,  128 => 39,  105 => 27,  101 => 25,  95 => 23,  86 => 20,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  65 => 14,  59 => 12,  45 => 9,  34 => 5,  68 => 15,  61 => 9,  44 => 14,  37 => 6,  20 => 1,  161 => 32,  153 => 50,  150 => 49,  147 => 48,  143 => 46,  137 => 45,  121 => 35,  118 => 40,  113 => 39,  109 => 38,  106 => 37,  104 => 36,  99 => 33,  96 => 32,  94 => 31,  90 => 21,  78 => 24,  72 => 22,  62 => 19,  53 => 9,  50 => 15,  48 => 10,  41 => 9,  39 => 8,  35 => 8,  30 => 4,  27 => 6,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  331 => 141,  323 => 138,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  293 => 121,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 100,  243 => 96,  236 => 97,  226 => 87,  223 => 88,  215 => 83,  212 => 82,  209 => 81,  204 => 78,  201 => 77,  196 => 74,  190 => 72,  182 => 70,  180 => 69,  170 => 64,  163 => 54,  156 => 56,  152 => 48,  149 => 47,  146 => 46,  138 => 42,  133 => 47,  129 => 42,  126 => 45,  123 => 44,  117 => 43,  114 => 31,  111 => 40,  108 => 39,  102 => 36,  98 => 24,  91 => 31,  87 => 29,  84 => 29,  81 => 28,  73 => 23,  70 => 22,  67 => 20,  64 => 20,  58 => 8,  52 => 6,  49 => 12,  46 => 15,  40 => 7,  36 => 5,  33 => 5,  31 => 4,  28 => 3,);
    }
}
