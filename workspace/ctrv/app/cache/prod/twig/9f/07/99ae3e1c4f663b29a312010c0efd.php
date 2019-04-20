<?php

/* ::menu.html.twig */
class __TwigTemplate_9f0799ae3e1c4f663b29a312010c0efd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"container\">
\t
\t";
        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 6
        echo "\t
\t<div class=\"row\">
\t<div class=\"span120\">
\t<div class=\"navbar\" >
\t\t<div class=\"navbar-inner\">
\t\t\t<div class=\"container\">
\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t
\t\t\t\t\t<li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home"), "html", null, true);
        echo "\"><i class=\"icon-home\"></i>&nbsp";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.home", array(), "messages");
        echo "</a></li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\" id=\"menuAttraction\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#menuAttraction\">
\t\t\t\t\t\t\t<i class=\"icon-map-marker\"></i>&nbsp";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.attraction", array(), "messages");
        // line 19
        echo "\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("place"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.place", array(), "messages");
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agenda"), "html", null, true);
        echo "\"><i class=\"icon-time\"></i>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.agenda", array(), "messages");
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event"), "html", null, true);
        echo "\"><i class=\"icon-time\"></i>&nbsp";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.evenement", array(), "messages");
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\" id=\"menuFlow\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#menuFlow\">
\t\t\t\t\t\t\t<i class=\"icon-envelope\"></i>&nbsp";
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.flow", array(), "messages");
        // line 31
        echo "\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"#\">";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.groupe", array(), "messages");
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.utilisateur", array(), "messages");
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\" id=\"menuTracker\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#menuTracker\">
\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.tracker", array(), "messages");
        // line 42
        echo "\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t</a>
";
        // line 48
        echo "\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\" id=\"menuMyStore\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#menuMyStore\">
\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.myStore", array(), "messages");
        // line 53
        echo "\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t</a>
";
        // line 59
        echo "\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"unstyled pull-right\">";
        // line 61
        echo $this->env->getExtension('actions')->renderAction("CTRVCommonBundle:Common:renderChooseCityForm", array(), array());
        echo "</li>
\t\t\t\t\t
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
\t</div>
</div>";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "\t\t<h1>Administration Cityrovers</h1>
\t";
    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 4,  128 => 3,  115 => 61,  111 => 59,  107 => 53,  105 => 52,  99 => 48,  95 => 42,  93 => 41,  80 => 34,  62 => 24,  45 => 19,  43 => 18,  34 => 14,  24 => 6,  18 => 1,  53 => 16,  46 => 13,  41 => 12,  37 => 10,  33 => 9,  28 => 8,  22 => 3,  17 => 3,  167 => 55,  164 => 54,  160 => 51,  157 => 50,  154 => 49,  148 => 34,  142 => 33,  129 => 81,  116 => 71,  103 => 64,  101 => 63,  92 => 56,  90 => 54,  86 => 52,  84 => 35,  75 => 31,  73 => 30,  66 => 35,  64 => 34,  60 => 20,  56 => 23,  52 => 30,  50 => 22,  21 => 2,  29 => 5,  26 => 4,);
    }
}
