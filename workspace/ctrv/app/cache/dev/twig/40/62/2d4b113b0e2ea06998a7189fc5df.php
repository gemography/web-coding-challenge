<?php

/* ::base.html.twig */
class __TwigTemplate_40622d4b113b0e2ea06998a7189fc5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'flash_container' => array($this, 'block_flash_container'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
\t\t
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=8\" />
\t\t
\t\t<META NAME=\"description\" CONTENT=\"admin city rovers\">
\t\t<META NAME=\"keywords\" CONTENT=\"city rovers cityrovers
\t\t\">
\t\t<META NAME=\"subject\" CONTENT=\"\">
\t\t<LINK REL=\"Generateur-meta\" href=\"http://www.cityrovers.com/\" />
\t\t<META NAME=\"author\" CONTENT=\"Faye Amady Diouf, Ousmane seck\">
\t\t<META NAME=\"copyright\" CONTENT=\"2012\">
\t\t<META NAME=\"revisit-after\" CONTENT=\"1\">
\t\t<META NAME=\"identifier-url\" CONTENT=\"cityrovers.com\">
\t\t<META NAME=\"reply-to\" CONTENT=\"\">
\t\t<META NAME=\"date-creation-ddmmyyyy\" CONTENT=\"01/01/2013\">
\t\t<META NAME=\"Robots\" CONTENT=\"all\">
\t\t<META NAME=\"Rating\" CONTENT=\"general\">
\t\t<META NAME=\"organization\" CONTENT=\"\">
\t\t<META http-equiv=\"Content-Language\" CONTENT=\"Fr\">
\t\t<META NAME=\"expires\" CONTENT=\"never\">
\t\t<META NAME=\"Distribution\" CONTENT=\"Global\">
\t\t<META NAME=\"Audience\" CONTENT=\"general\">\t
\t\t
\t\t";
        // line 29
        $this->env->loadTemplate("::include.html.twig")->display($context);
        // line 30
        echo "\t\t
\t
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" />
\t\t<title>";
        // line 33
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "\t\t
\t\t\t\t
\t</head>

\t<body>
<!-- **************************************MENU******************************************** -->
\t\t";
        // line 41
        $this->env->loadTemplate("::menu.html.twig")->display($context);
        // line 43
        echo "\t\t
<!-- **************************************BODY******************************************** -->
\t
\t\t<div id=\"general-container\" class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<div  class=\"span120\">
\t\t\t\t\t";
        // line 50
        $this->displayBlock('flash_container', $context, $blocks);
        // line 53
        echo "\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t
<!-- **************************************FIN BODY ******************************************** -->

\t";
        // line 64
        $context["city"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "city"), "method");
        // line 65
        echo "\t<span id=\"city_session\" data-city-id=\"";
        if ((!(null === $this->getContext($context, "city")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "city"), "id"), "html", null, true);
        }
        echo "\"></span>
\t
\t<script>
\t\t\$(function() {
\t
\t\t\t//on met la valeur en session dans le select du choix de la ville
\t\t\t\$(\"#choose_city_type_choose_city\").val(\$(\"#city_session\").attr(\"data-city-id\"));
\t
\t\t\t//si on change de ville
\t\t\t\$(\"#choose_city_type_choose_city\").change(function() {
\t\t\t\t\$(\"#general-container\").html('<div class=\"ctrv-loader\"></div>');
\t\t\t\tsetTimeout(function() {
\t\t\t\t\t//on met en session la nouvelle ville
\t\t\t\t\t\$(\"#choose_city_form\").submit();
\t\t\t\t}, 1);//en ms
\t\t\t\t
\t\t\t});
\t\t});
\t</script>

\t</body>
</html>
";
    }

    // line 33
    public function block_title($context, array $blocks = array())
    {
        echo "admin.cityrovers.com";
    }

    // line 34
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "\t";
    }

    // line 50
    public function block_flash_container($context, array $blocks = array())
    {
        // line 51
        echo "\t\t\t\t\t\t";
        $this->env->loadTemplate("::flash_message.html.twig")->display($context);
        // line 52
        echo "\t\t\t\t\t";
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 56,  156 => 55,  152 => 52,  149 => 51,  146 => 50,  140 => 34,  134 => 33,  104 => 65,  102 => 64,  93 => 57,  91 => 55,  87 => 53,  85 => 50,  76 => 43,  74 => 41,  66 => 35,  64 => 34,  60 => 33,  56 => 32,  52 => 30,  21 => 2,  81 => 30,  75 => 29,  67 => 24,  63 => 23,  59 => 22,  50 => 29,  44 => 13,  39 => 10,  37 => 9,  31 => 5,  28 => 4,  23 => 2,);
    }
}
