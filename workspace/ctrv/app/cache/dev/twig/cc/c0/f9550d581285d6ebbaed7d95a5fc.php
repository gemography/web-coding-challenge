<?php

/* DoctrineBundle:Collector:db.html.twig */
class __TwigTemplate_ccc0f9550d581285d6ebbaed7d95a5fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'queries' => array($this, 'block_queries'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "isXmlHttpRequest")) ? ("WebProfilerBundle:Profiler:ajax_layout.html.twig") : ("WebProfilerBundle:Profiler:layout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <img width=\"20\" height=\"28\" alt=\"Database\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\"/>
        <span class=\"sf-toolbar-status";
        // line 6
        if ((50 < $this->getAttribute($this->getContext($context, "collector"), "querycount"))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "querycount"), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getContext($context, "collector"), "time") * 1000)), "html", null, true);
        echo " ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>DB Queries</b>
            <span>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "querycount"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Query time</b>
            <span>";
        // line 16
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getContext($context, "collector"), "time") * 1000)), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        // line 23
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/db.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
    <strong>Doctrine</strong>
    <span class=\"count\">
        <span>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "querycount"), "html", null, true);
        echo "</span>
        <span>";
        // line 28
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute($this->getContext($context, "collector"), "time") * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
    }

    // line 33
    public function block_panel($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if (("explain" == $this->getContext($context, "page"))) {
            // line 35
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("DoctrineBundle:Profiler:explain", array("token" => $this->getContext($context, "token"), "panel" => "db", "connectionName" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "query"), "get", array(0 => "connection"), "method"), "query" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "query"), "get", array(0 => "query"), "method")), array());
            // line 41
            echo "    ";
        } else {
            // line 42
            echo "        ";
            $this->displayBlock("queries", $context, $blocks);
            echo "
    ";
        }
    }

    // line 46
    public function block_queries($context, array $blocks = array())
    {
        // line 47
        echo "    <h2>Queries</h2>

    ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "collector"), "queries"));
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
        foreach ($context['_seq'] as $context["connection"] => $context["queries"]) {
            // line 50
            echo "        <h3>Connection <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "connection"), "html", null, true);
            echo "</em></h3>
        ";
            // line 51
            if (twig_test_empty($this->getContext($context, "queries"))) {
                // line 52
                echo "            <p>
                <em>No queries.</em>
            </p>
        ";
            } else {
                // line 56
                echo "            <ul class=\"alt\">
                ";
                // line 57
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "queries"));
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
                foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                    // line 58
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getContext($context, "i")), "html", null, true);
                    echo "\">
                        <div>
                            ";
                    // line 60
                    if ($this->getAttribute($this->getContext($context, "query"), "explainable")) {
                        // line 61
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("panel" => "db", "token" => $this->getContext($context, "token"), "page" => "explain", "connection" => $this->getContext($context, "connection"), "query" => $this->getContext($context, "i"))), "html", null, true);
                        echo "\" onclick=\"return explain(this);\" style=\"text-decoration: none;\" title=\"Explains\" data-target-id=\"explain-";
                        echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"), "html", null, true);
                        echo "\" >
                                <img alt=\"+\" src=\"";
                        // line 62
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_more.gif"), "html", null, true);
                        echo "\" style=\"display: inline;\" />
                                <img alt=\"-\" src=\"";
                        // line 63
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/images/blue_picto_less.gif"), "html", null, true);
                        echo "\" style=\"display: none;\" />
                            </a>
                            ";
                    }
                    // line 66
                    echo "                            <code>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "query"), "sql"), "html", null, true);
                    echo "</code>
                        </div>
                        <small>
                            <strong>Parameters</strong>: ";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($this->getContext($context, "query"), "params")), "html", null, true);
                    echo "<br />
                            <strong>Time</strong>: ";
                    // line 70
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getContext($context, "query"), "executionMS") * 1000)), "html", null, true);
                    echo " ms
                        </small>
                        ";
                    // line 72
                    if ($this->getAttribute($this->getContext($context, "query"), "explainable")) {
                        // line 73
                        echo "                        <div id=\"explain-";
                        echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "loop"), "parent"), "loop"), "index"), "html", null, true);
                        echo "\" class=\"loading\"></div>
                        ";
                    }
                    // line 75
                    echo "                    </li>
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
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 77
                echo "            </ul>
        ";
            }
            // line 79
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['connection'], $context['queries'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 80
        echo "
    <h2>Database Connections</h2>

    ";
        // line 83
        if ($this->getAttribute($this->getContext($context, "collector"), "connections")) {
            // line 84
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "collector"), "connections")));
            // line 85
            echo "    ";
        } else {
            // line 86
            echo "        <p>
            <em>No connections.</em>
        </p>
    ";
        }
        // line 90
        echo "
    <h2>Entity Managers</h2>

    ";
        // line 93
        if ($this->getAttribute($this->getContext($context, "collector"), "managers")) {
            // line 94
            echo "        ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "collector"), "managers")));
            // line 95
            echo "    ";
        } else {
            // line 96
            echo "        <p>
            <em>No entity managers.</em>
        </p>
    ";
        }
        // line 100
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function explain(link) {
            \"use strict\";

            var imgs = link.children,
                target = link.getAttribute('data-target-id');

            Sfjs.toggle(target, imgs[0], imgs[1])
                .load(
                    target,
                    link.href,
                    null,
                    function(xhr, el) {
                        el.innerHTML = 'An error occurred while loading the details';
                        Sfjs.removeClass(el, 'loading');
                    }
                );

            return false;
        }
    //]]></script>
";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:db.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 86,  268 => 84,  261 => 80,  247 => 79,  228 => 75,  220 => 73,  218 => 72,  107 => 41,  63 => 16,  148 => 55,  142 => 50,  127 => 45,  110 => 42,  76 => 24,  155 => 56,  134 => 44,  131 => 43,  55 => 12,  32 => 5,  29 => 4,  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  192 => 62,  177 => 85,  159 => 79,  157 => 78,  144 => 72,  140 => 50,  135 => 69,  122 => 59,  115 => 42,  97 => 43,  83 => 24,  51 => 22,  43 => 8,  26 => 3,  203 => 93,  176 => 66,  174 => 84,  168 => 60,  158 => 57,  130 => 47,  100 => 30,  88 => 28,  79 => 25,  202 => 66,  189 => 70,  183 => 61,  165 => 64,  162 => 80,  151 => 54,  145 => 53,  136 => 47,  132 => 54,  125 => 49,  120 => 37,  93 => 33,  89 => 40,  85 => 28,  82 => 25,  47 => 13,  25 => 3,  75 => 33,  69 => 19,  66 => 19,  60 => 16,  56 => 12,  54 => 23,  42 => 10,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  328 => 140,  325 => 139,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  299 => 100,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  278 => 114,  273 => 111,  271 => 85,  266 => 83,  262 => 105,  256 => 103,  252 => 101,  245 => 97,  238 => 93,  232 => 89,  229 => 88,  224 => 86,  219 => 83,  213 => 70,  210 => 78,  207 => 73,  205 => 76,  200 => 92,  194 => 69,  191 => 68,  188 => 67,  186 => 87,  181 => 60,  175 => 58,  172 => 67,  169 => 62,  167 => 82,  160 => 57,  141 => 48,  128 => 42,  105 => 49,  101 => 34,  95 => 23,  86 => 27,  80 => 24,  77 => 23,  74 => 22,  71 => 19,  65 => 19,  59 => 16,  45 => 9,  34 => 5,  68 => 20,  61 => 16,  44 => 7,  37 => 6,  20 => 1,  161 => 32,  153 => 50,  150 => 49,  147 => 51,  143 => 57,  137 => 45,  121 => 47,  118 => 46,  113 => 44,  109 => 32,  106 => 31,  104 => 35,  99 => 33,  96 => 34,  94 => 31,  90 => 28,  78 => 32,  72 => 32,  62 => 15,  53 => 9,  50 => 14,  48 => 10,  41 => 9,  39 => 8,  35 => 8,  30 => 4,  27 => 3,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  331 => 141,  323 => 138,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  293 => 96,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 100,  243 => 77,  236 => 97,  226 => 87,  223 => 88,  215 => 83,  212 => 82,  209 => 69,  204 => 78,  201 => 77,  196 => 63,  190 => 72,  182 => 70,  180 => 86,  170 => 64,  163 => 58,  156 => 58,  152 => 75,  149 => 52,  146 => 73,  138 => 42,  133 => 47,  129 => 42,  126 => 45,  123 => 44,  117 => 36,  114 => 35,  111 => 40,  108 => 50,  102 => 36,  98 => 33,  91 => 41,  87 => 26,  84 => 29,  81 => 28,  73 => 23,  70 => 22,  67 => 20,  64 => 28,  58 => 13,  52 => 10,  49 => 9,  46 => 9,  40 => 7,  36 => 6,  33 => 5,  31 => 4,  28 => 3,);
    }
}
