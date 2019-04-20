<?php

/* ::flash_message.html.twig */
class __TwigTemplate_c7e41f4f1b4eedfb313a1aeaa76b85aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "hasFlash", array(0 => "success"), "method")) {
            // line 2
            echo "    <div class=\"alert alert-success\">
    \t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flash", array(0 => "success"), "method"), "html", null, true);
            echo "
    </div>
    
";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "hasFlash", array(0 => "error"), "method")) {
            // line 8
            echo "    <div class=\"alert alert-error\">
    \t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flash", array(0 => "error"), "method"), "html", null, true);
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "::flash_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 8,  23 => 4,  19 => 2,  131 => 4,  128 => 3,  115 => 61,  111 => 59,  107 => 53,  105 => 52,  99 => 48,  95 => 42,  93 => 41,  80 => 34,  62 => 24,  45 => 19,  43 => 18,  34 => 10,  24 => 6,  18 => 1,  53 => 16,  46 => 13,  41 => 12,  37 => 10,  33 => 9,  28 => 8,  22 => 3,  17 => 1,  167 => 55,  164 => 54,  160 => 51,  157 => 50,  154 => 49,  148 => 34,  142 => 33,  129 => 81,  116 => 71,  103 => 64,  101 => 63,  92 => 56,  90 => 54,  86 => 52,  84 => 35,  75 => 31,  73 => 30,  66 => 35,  64 => 34,  60 => 20,  56 => 23,  52 => 30,  50 => 22,  21 => 2,  29 => 5,  26 => 4,);
    }
}
