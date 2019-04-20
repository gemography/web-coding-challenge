<?php

/* SecurityBundle:Collector:security.html.twig */
class __TwigTemplate_d861776ad8ed14191e05a3848e0d1df9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "collector"), "user")) {
            // line 5
            echo "        ";
            $context["color_code"] = ((($this->getAttribute($this->getContext($context, "collector"), "enabled") && $this->getAttribute($this->getContext($context, "collector"), "authenticated"))) ? ("green") : ("yellow"));
            // line 6
            echo "        ";
            $context["authentication_color_code"] = ((($this->getAttribute($this->getContext($context, "collector"), "enabled") && $this->getAttribute($this->getContext($context, "collector"), "authenticated"))) ? ("green") : ("red"));
            // line 7
            echo "        ";
            $context["authentication_color_text"] = ((($this->getAttribute($this->getContext($context, "collector"), "enabled") && $this->getAttribute($this->getContext($context, "collector"), "authenticated"))) ? ("Yes") : ("No"));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context["color_code"] = (($this->getAttribute($this->getContext($context, "collector"), "enabled")) ? ("red") : ("black"));
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        ";
        if ($this->getAttribute($this->getContext($context, "collector"), "user")) {
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Logged in as</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 15
            echo twig_escape_filter($this->env, $this->getContext($context, "color_code"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "user"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Authenticated</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 19
            echo twig_escape_filter($this->env, $this->getContext($context, "authentication_color_code"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "authentication_color_text"), "html", null, true);
            echo "</span>
            </div>
        ";
        } elseif ($this->getAttribute($this->getContext($context, "collector"), "enabled")) {
            // line 22
            echo "            You are not authenticated.
        ";
        } else {
            // line 24
            echo "            The security is disabled.
        ";
        }
        // line 26
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        <img width=\"24\" height=\"28\" alt=\"Security\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAcCAYAAAB75n/uAAAC70lEQVR42u2V3UtTYRzHu+mFwCwK+gO6CEryPlg7yiYx50vDqUwjFIZDSYUk2ZTmCysHvg9ZVggOQZiRScsR4VwXTjEwdKZWk8o6gd5UOt0mbev7g/PAkLONIOkiBx+25/v89vuc85zn2Q5Fo9F95UDwnwhS5HK5TyqVRv8m1JN6k+AiC+fn54cwbgFNIrTQ/J9IqDcJJDGBHsgDgYBSq9W6ysvLPf39/SSUUU7zsQ1yc3MjmN90OBzfRkZG1umzQqGIxPSTkIBjgdDkaGNjoza2kcFgUCE/QvMsq6io2PV6vQu1tbV8Xl7etkql2qqvr/+MbDE/Pz8s9OP2Cjhwwmw29+4R3Kec1WZnZ4fn5uamc3Jyttra2qbH8ero6JgdHh5+CvFHq9X6JZHgzODgoCVW0NPTY0N+ltU2Nzdv4GqXsYSrPp+vDw80aLFYxru6uhyQ/rDb7a8TCVJDodB1jUazTVlxcXGQ5/mbyE+z2u7u7veY38BVT3Z2djopm5qa6isrK/tQWVn5qb29fSGR4DC4PDAwMEsZHuArjGnyGKutq6v7ajQaF6urq9/MzMz0QuSemJiwQDwGkR0POhhXgILjNTU1TaWlpTxlOp1uyWQyaUjMajMzM8Nut/tJQUHBOpZppbCwkM/KytrBznuL9xDVxBMo8KXHYnu6qKjIivmrbIy67x6Px4Yd58W672ApfzY0NCyNjo7OZmRkiAv8fr+O47iwmABXtoXaG3uykF6vX7bZbF6cgZWqqiqezYkKcNtmjO+CF2AyhufgjsvlMiU7vXEF+4C4ALf9CwdrlVAqlcFkTdRqdQSHLUDgBEeSCrArAsiGwENs0XfJBE6ncxm1D8Aj/B6tigkkJSUlmxSwLYhMDeRsyyUCd+lHrWxtbe2aTCbbZTn1ZD92F0Cr8GBfgnsgDZwDt8EzMBmHMXBLqD0PDMAh9Gql3iRIESQSIAXp4CRIBZeEjIvDFZAm1J4C6UK9ROiZcvCn/+8FvwHtDdJEaRY+oQAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "color_code"), "html", null, true);
        echo "\"></span>
        ";
        // line 30
        if ($this->getAttribute($this->getContext($context, "collector"), "user")) {
            echo "<div class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "user"), "html", null, true);
            echo "</div>";
        }
        // line 31
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        // line 36
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/security.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
    <strong>Security</strong>
</span>
";
    }

    // line 42
    public function block_panel($context, array $blocks = array())
    {
        // line 43
        echo "    <h2>Security</h2>
    ";
        // line 44
        if ($this->getAttribute($this->getContext($context, "collector"), "user")) {
            // line 45
            echo "        <table>
            <tr>
                <th>Username</th>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "user"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Authenticated?</th>
                <td>
                    ";
            // line 53
            if ($this->getAttribute($this->getContext($context, "collector"), "authenticated")) {
                // line 54
                echo "                        yes
                    ";
            } else {
                // line 56
                echo "                        no ";
                if ((!twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "roles")))) {
                    echo "<em>(probably because the user has no roles)</em>";
                }
                // line 57
                echo "                    ";
            }
            // line 58
            echo "                </td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($this->getContext($context, "collector"), "roles")), "html", null, true);
            echo "</td>
            </tr>
        </table>
    ";
        } elseif ($this->getAttribute($this->getContext($context, "collector"), "enabled")) {
            // line 66
            echo "        <p>
            <em>No token</em>
        </p>
    ";
        } else {
            // line 70
            echo "        <p>
            <em>The security component is disabled</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SecurityBundle:Collector:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 56,  134 => 44,  131 => 43,  55 => 12,  32 => 5,  29 => 4,  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  192 => 90,  177 => 85,  159 => 79,  157 => 78,  144 => 72,  140 => 71,  135 => 69,  122 => 59,  115 => 55,  97 => 43,  83 => 24,  51 => 22,  43 => 8,  26 => 3,  203 => 93,  176 => 66,  174 => 84,  168 => 60,  158 => 59,  130 => 47,  100 => 30,  88 => 28,  79 => 22,  202 => 71,  189 => 70,  183 => 68,  165 => 64,  162 => 80,  151 => 54,  145 => 58,  136 => 45,  132 => 54,  125 => 52,  120 => 37,  93 => 28,  89 => 40,  85 => 34,  82 => 25,  47 => 13,  25 => 3,  75 => 33,  69 => 31,  66 => 19,  60 => 16,  56 => 16,  54 => 23,  42 => 10,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  328 => 140,  325 => 139,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  299 => 125,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  278 => 114,  273 => 111,  271 => 110,  266 => 107,  262 => 105,  256 => 103,  252 => 101,  245 => 97,  238 => 93,  232 => 89,  229 => 88,  224 => 86,  219 => 83,  213 => 79,  210 => 78,  207 => 73,  205 => 76,  200 => 92,  194 => 69,  191 => 68,  188 => 67,  186 => 87,  181 => 63,  175 => 59,  172 => 67,  169 => 62,  167 => 82,  160 => 57,  141 => 48,  128 => 42,  105 => 49,  101 => 25,  95 => 23,  86 => 39,  80 => 19,  77 => 23,  74 => 17,  71 => 19,  65 => 23,  59 => 12,  45 => 11,  34 => 5,  68 => 24,  61 => 16,  44 => 12,  37 => 6,  20 => 1,  161 => 32,  153 => 50,  150 => 49,  147 => 48,  143 => 57,  137 => 45,  121 => 35,  118 => 50,  113 => 44,  109 => 32,  106 => 31,  104 => 36,  99 => 33,  96 => 29,  94 => 31,  90 => 27,  78 => 32,  72 => 32,  62 => 15,  53 => 9,  50 => 14,  48 => 10,  41 => 9,  39 => 8,  35 => 8,  30 => 5,  27 => 6,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  331 => 141,  323 => 138,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  293 => 121,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 100,  243 => 96,  236 => 97,  226 => 87,  223 => 88,  215 => 83,  212 => 82,  209 => 81,  204 => 78,  201 => 77,  196 => 69,  190 => 72,  182 => 70,  180 => 86,  170 => 64,  163 => 58,  156 => 56,  152 => 75,  149 => 53,  146 => 73,  138 => 42,  133 => 47,  129 => 42,  126 => 45,  123 => 44,  117 => 36,  114 => 35,  111 => 40,  108 => 50,  102 => 35,  98 => 24,  91 => 41,  87 => 26,  84 => 29,  81 => 28,  73 => 23,  70 => 22,  67 => 20,  64 => 28,  58 => 13,  52 => 11,  49 => 10,  46 => 9,  40 => 7,  36 => 7,  33 => 6,  31 => 4,  28 => 3,);
    }
}
