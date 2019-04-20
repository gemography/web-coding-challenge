<?php

/* ::field.html.twig */
class __TwigTemplate_1101f4873fc56915b05f886ed435a5a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'field_errors' => array($this, 'block_field_errors'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_field_row($context, array $blocks = array())
    {
        // line 5
        ob_start();
        // line 6
        echo "    <div  class=\"control-group";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            echo " error";
        }
        echo "\">
       ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter($this->getContext($context, "label"), null)) : (null))) ? array() : array("label" => $_label_)));
        echo "
       <div class=\"controls\"> 
         ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
         ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
       </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_field_errors($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 18
            echo "       <span class=\"help-inline\">
           ";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 20
                echo "               ";
                echo twig_escape_filter($this->env, ($this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators") . ". "), "html", null, true);
                echo "
           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 22
            echo "       </span>
    ";
        }
    }

    // line 26
    public function block_form_errors($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 28
            echo "       <ul>
           ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 30
                echo "               <li>";
                echo twig_escape_filter($this->env, ($this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators") . ". "), "html", null, true);
                echo "</li>
           ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 32
            echo "       </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "::field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 32,  95 => 29,  92 => 28,  89 => 27,  71 => 20,  61 => 17,  58 => 16,  49 => 10,  33 => 6,  40 => 7,  20 => 2,  199 => 7,  197 => 6,  193 => 4,  190 => 3,  172 => 88,  165 => 86,  162 => 85,  154 => 84,  147 => 80,  145 => 79,  128 => 72,  123 => 69,  121 => 68,  115 => 64,  111 => 58,  109 => 57,  103 => 53,  99 => 30,  97 => 46,  86 => 26,  80 => 22,  73 => 35,  45 => 9,  43 => 23,  35 => 19,  24 => 9,  18 => 1,  62 => 29,  53 => 16,  46 => 13,  36 => 9,  32 => 8,  27 => 7,  41 => 12,  34 => 8,  22 => 3,  17 => 1,  159 => 56,  156 => 55,  152 => 83,  149 => 51,  146 => 50,  140 => 34,  134 => 73,  104 => 65,  102 => 64,  93 => 57,  91 => 55,  87 => 53,  85 => 50,  76 => 43,  74 => 41,  66 => 35,  64 => 18,  60 => 33,  56 => 28,  52 => 30,  21 => 2,  81 => 30,  75 => 36,  67 => 19,  63 => 23,  59 => 22,  50 => 27,  44 => 13,  39 => 10,  37 => 3,  31 => 5,  28 => 4,  23 => 2,);
    }
}
