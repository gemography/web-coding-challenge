<?php

/* CTRVCommonBundle:Common:renderChooseCityForm.html.twig */
class __TwigTemplate_e050435eecc7295caac381914018da1e extends Twig_Template
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
        echo "
<form id=\"choose_city_form\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("set_city_session"), "html", null, true);
        echo "\" class=\"chooseCity form-horizontal\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t<div class=\"row\">
\t\t<div class=\"span30 offset30\">
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "choose_city"), 'label');
        echo "
\t    </div>
\t    <div class=\"span30\">
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "choose_city"), 'widget');
        echo "
\t    </div>
\t\t<div class=\"span27\">
\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "choose_city"), 'errors');
        echo "
\t    </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "CTRVCommonBundle:Common:renderChooseCityForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  20 => 2,  199 => 7,  197 => 6,  193 => 4,  190 => 3,  172 => 88,  165 => 86,  162 => 85,  154 => 84,  147 => 80,  145 => 79,  128 => 72,  123 => 69,  121 => 68,  115 => 64,  111 => 58,  109 => 57,  103 => 53,  99 => 47,  97 => 46,  86 => 40,  80 => 39,  73 => 35,  45 => 24,  43 => 23,  35 => 19,  24 => 9,  18 => 1,  62 => 29,  53 => 16,  46 => 13,  36 => 9,  32 => 8,  27 => 7,  41 => 12,  34 => 8,  22 => 3,  17 => 1,  159 => 56,  156 => 55,  152 => 83,  149 => 51,  146 => 50,  140 => 34,  134 => 73,  104 => 65,  102 => 64,  93 => 57,  91 => 55,  87 => 53,  85 => 50,  76 => 43,  74 => 41,  66 => 35,  64 => 34,  60 => 33,  56 => 28,  52 => 30,  21 => 2,  81 => 30,  75 => 36,  67 => 24,  63 => 23,  59 => 22,  50 => 27,  44 => 13,  39 => 10,  37 => 3,  31 => 5,  28 => 5,  23 => 2,);
    }
}
