<?php

/* WebProfilerBundle:Profiler:base.html.twig */
class __TwigTemplate_ec2beaa6eaa3dc5d426304933929306b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" sizes=\"16x16\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/favicon.ico"), "html", null, true);
        echo "\" />
        ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "        ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_style.html.twig")->display(array_merge($context, array("position" => "top", "floatable" => false)));
        // line 12
        echo "    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Profiler";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/css/profiler.css"), "html", null, true);
        echo "\" />
        ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  61 => 9,  44 => 14,  37 => 11,  20 => 1,  161 => 32,  153 => 50,  150 => 49,  147 => 48,  143 => 46,  137 => 45,  121 => 41,  118 => 40,  113 => 39,  109 => 38,  106 => 37,  104 => 36,  99 => 33,  96 => 32,  94 => 31,  90 => 29,  78 => 24,  72 => 22,  62 => 19,  53 => 16,  50 => 15,  48 => 14,  41 => 9,  39 => 8,  35 => 8,  30 => 4,  27 => 6,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  331 => 156,  323 => 150,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  293 => 133,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  250 => 105,  243 => 101,  236 => 97,  226 => 89,  223 => 88,  215 => 83,  212 => 82,  209 => 81,  204 => 78,  201 => 77,  196 => 74,  190 => 72,  182 => 70,  180 => 69,  170 => 64,  163 => 60,  156 => 56,  152 => 54,  149 => 53,  146 => 52,  138 => 49,  133 => 47,  129 => 42,  126 => 45,  123 => 44,  117 => 43,  114 => 41,  111 => 40,  108 => 39,  102 => 36,  98 => 35,  91 => 31,  87 => 29,  84 => 28,  81 => 25,  73 => 23,  70 => 22,  67 => 20,  64 => 20,  58 => 8,  52 => 6,  49 => 12,  46 => 15,  40 => 12,  36 => 6,  33 => 5,  31 => 7,  28 => 3,);
    }
}
