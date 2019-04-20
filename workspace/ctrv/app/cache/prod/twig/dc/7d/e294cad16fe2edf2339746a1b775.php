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
    }

    // line 1
    public function getinput($value = null)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $value,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <input class=\"btn\" type=\"submit\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : null)));
            echo "\" />
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
        return array (  30 => 2,  19 => 1,  69 => 29,  62 => 25,  50 => 16,  44 => 13,  39 => 10,  37 => 9,  31 => 5,  28 => 4,  23 => 2,);
    }
}
