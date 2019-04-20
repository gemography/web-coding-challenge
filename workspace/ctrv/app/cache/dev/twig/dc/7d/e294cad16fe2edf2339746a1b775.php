<?php

/* ::macro.html.twig */
class __TwigTemplate_dc7de294cad16fe2edf2339746a1b775 extends Twig_Template
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
        // line 7
        echo "
";
    }

    // line 1
    public function getinput($value = null, $url_name = null)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $value,
            "url_name" => $url_name,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t<div class=\"form-actions\">
    \t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "value")));
            echo "\" />
    \t<a class=\"btn btn-secondary\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "url_name")), "html", null, true);
            echo "\" />";
            echo $this->env->getExtension('translator')->getTranslator()->trans("general.form.cancel", array(), "messages");
            echo "</a>
    </div>
";
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  34 => 2,  22 => 1,  17 => 7,  159 => 56,  156 => 55,  152 => 52,  149 => 51,  146 => 50,  140 => 34,  134 => 33,  104 => 65,  102 => 64,  93 => 57,  91 => 55,  87 => 53,  85 => 50,  76 => 43,  74 => 41,  66 => 35,  64 => 34,  60 => 33,  56 => 32,  52 => 30,  21 => 2,  81 => 30,  75 => 29,  67 => 24,  63 => 23,  59 => 22,  50 => 29,  44 => 13,  39 => 10,  37 => 3,  31 => 5,  28 => 4,  23 => 2,);
    }
}
