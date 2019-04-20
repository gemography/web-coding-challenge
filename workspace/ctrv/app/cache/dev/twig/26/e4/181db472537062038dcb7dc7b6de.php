<?php

/* CTRVPlaceBundle:Place:import.html.twig */
class __TwigTemplate_26e4181db472537062038dcb7dc7b6de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["forms"] = $this->env->loadTemplate("::macro.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "

<div class=\"row\">

\t";
        // line 9
        $this->env->loadTemplate("CTRVPlaceBundle::menuPlace.html.twig")->display($context);
        // line 10
        echo "\t
\t<div class=\"span90\">
\t
\t\t<h3>";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("place.import.title", array(), "messages");
        echo "</h3>
\t
\t\t<div>
\t\t\t<span class=\"label label-info\">";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("place.import.help", array(), "messages");
        echo "</span>
\t\t</div>
\t
\t\t<br/>
\t
\t\t<div>
\t\t\t<form class=\"form-horizontal\" method=\"post\" ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
\t\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
\t\t\t\t";
        // line 24
        echo $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "place.import.form.submit", 1 => "place"), "method");
        echo "
\t\t\t</form>
\t\t</div>
\t\t
\t\t<br/>
\t\tIl y a ";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "notLocalizedPlacesNumber"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getContext($context, "allPlaceNumber"), "html", null, true);
        echo " places non localisées 
\t\t<a class=\"btn\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("calculate_Lat_Lng"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("place.import.calculate_coordinate", array(), "messages");
        echo "</a>
\t\t
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "CTRVPlaceBundle:Place:import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 30,  75 => 29,  67 => 24,  63 => 23,  59 => 22,  50 => 16,  44 => 13,  39 => 10,  37 => 9,  31 => 5,  28 => 4,  23 => 2,);
    }
}
