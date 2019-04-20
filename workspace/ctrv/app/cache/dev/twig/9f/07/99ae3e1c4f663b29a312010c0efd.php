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
        // line 9
        echo "\t
\t<div class=\"row\">
\t<div class=\"span120\">
\t
\t<div class=\"navbar\" >
\t\t<div class=\"navbar-inner\">
\t\t\t<div class=\"container\">
\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t
";
        // line 19
        echo "\t\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home"), "html", null, true);
        echo "\"><i class=\"icon-home\"></i></a></li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\" id=\"menuAttraction\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#menuAttraction\">
\t\t\t\t\t\t\t</i>&nbsp";
        // line 23
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.attraction", array(), "messages");
        // line 24
        echo "\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("import_place"), "html", null, true);
        echo "\"><i class=\"icon-map-marker\"></i>&nbsp";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.place", array(), "messages");
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agenda"), "html", null, true);
        echo "\"><i class=\"icon-time\"></i>&nbsp";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.agenda", array(), "messages");
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event"), "html", null, true);
        echo "\"><i class=\"icon-time\"></i>&nbsp";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.evenement", array(), "messages");
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\" id=\"menuFlow\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#menuFlow\">
\t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.flow", array(), "messages");
        // line 36
        echo "\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publicMessage"), "html", null, true);
        echo "\"><i class=\"icon-envelope\"></i>&nbsp";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.publicMessage", array(), "messages");
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abuse"), "html", null, true);
        echo "\"><i class=\"icon-thumbs-down\"></i>&nbsp";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.abuse", array(), "messages");
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\" id=\"menuTracker\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#menuTracker\">
\t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.tracker", array(), "messages");
        // line 47
        echo "\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t</a>
";
        // line 53
        echo "\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\" id=\"menuMyStore\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#menuMyStore\">
\t\t\t\t\t\t\t";
        // line 57
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.myStore", array(), "messages");
        // line 58
        echo "\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t</a>
";
        // line 64
        echo "\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\" id=\"menuOption\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#menuOption\">
\t\t\t\t\t\t\t";
        // line 68
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.option", array(), "messages");
        // line 69
        echo "\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mail"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.mail", array(), "messages");
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("city"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.city", array(), "messages");
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t
\t\t\t\t\t<li class=\"dropdown\" id=\"menuUser\">
\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"menuUser\">
\t\t\t\t\t\t\t";
        // line 79
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.user", array(), "messages");
        // line 80
        echo "\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t";
        // line 83
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 84
            echo "\t\t\t\t\t\t\t\t<li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_logout"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("menu.logout", array(), "messages");
            echo "</a></li>
\t\t\t\t\t\t\t";
        } else {
            // line 85
            echo "\t
\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_security_login"), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("menu.login", array(), "messages");
            echo "</a></li>
\t\t\t\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("userAll"), "html", null, true);
        echo "\"\"><i class=\"icon-user\"></i>&nbsp";
        echo $this->env->getExtension('translator')->getTranslator()->trans("menu.utilisateur", array(), "messages");
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
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
        echo "\t\t<div class=\"header-img center\">
\t\t\t<h1 class=\"header-title\">Administration Cityrovers</h1>
\t\t\t";
        // line 6
        echo $this->env->getExtension('actions')->renderAction("CTRVCommonBundle:Common:renderChooseCityForm", array(), array());
        // line 7
        echo "\t\t</div>
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
        return array (  199 => 7,  197 => 6,  193 => 4,  190 => 3,  172 => 88,  165 => 86,  162 => 85,  154 => 84,  147 => 80,  145 => 79,  128 => 72,  123 => 69,  121 => 68,  115 => 64,  111 => 58,  109 => 57,  103 => 53,  99 => 47,  97 => 46,  86 => 40,  80 => 39,  73 => 35,  45 => 24,  43 => 23,  35 => 19,  24 => 9,  18 => 1,  62 => 29,  53 => 16,  46 => 13,  36 => 9,  32 => 8,  27 => 7,  41 => 12,  34 => 2,  22 => 3,  17 => 3,  159 => 56,  156 => 55,  152 => 83,  149 => 51,  146 => 50,  140 => 34,  134 => 73,  104 => 65,  102 => 64,  93 => 57,  91 => 55,  87 => 53,  85 => 50,  76 => 43,  74 => 41,  66 => 35,  64 => 34,  60 => 33,  56 => 28,  52 => 30,  21 => 2,  81 => 30,  75 => 36,  67 => 24,  63 => 23,  59 => 22,  50 => 27,  44 => 13,  39 => 10,  37 => 3,  31 => 5,  28 => 4,  23 => 2,);
    }
}
