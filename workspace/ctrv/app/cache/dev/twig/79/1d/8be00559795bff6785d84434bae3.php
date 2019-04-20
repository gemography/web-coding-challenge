<?php

/* CTRVPlaceBundle:Place:index.html.twig */
class __TwigTemplate_791d8be00559795bff6785d84434bae3 extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.title", array(), "messages");
        echo "</h3>
\t\t
\t\t<form id=\"choose_place_type\" action=\"\" method=\"post\">
\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
\t\t</form>
\t\t<div align=\"right\"><a class=\"btn btn-mini\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("addNew_place"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("place.menu.add", array(), "messages");
        echo "</a></div><br>
\t\t<div id=\"places-list\"> <!-- le tableau sera affiché ici en js --></div>
\t\t
\t</div>

</div>

<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ctrvplace/js/place.js"), "html", null, true);
        echo "\"></script>
<script>
\t\$(function() { //à la fin du  chargement du DOM

\t\tvar urlAction = \"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("loadPlacesByType"), "html", null, true);
        echo "\";
\t\tvar page = 1;
\t\tvar placeTypeId = \$(\"#choose_place_type_placeType\").val();
\t\tloadPlacesByType (urlAction,placeTypeId,page,\$(\"#places-list\"));

\t\t//si on change de type de place
\t\t\$(\"#choose_place_type\").change(function() {
\t\t\tpage = 1;
\t\t\tplaceTypeId = \$(\"#choose_place_type_placeType\").val();
\t\t\tloadPlacesByType (urlAction,placeTypeId,page,\$(\"#places-list\"));
\t\t});
\t\t
\t\t//si on change de page
\t\t/*\$(\".pagination li a\").click (function () {
\t\t\tplaceTypeId = \$(\"#choose_place_type_placeType\").val();
\t\t\tpage = \$(this).parent().attr(\"data-page\");
\t\t\tloadPlacesByType (urlAction,placeTypeId,page,\$(\"#places-list\"));
\t\t\treturn false;
\t\t});*/
\t});
</script>

";
    }

    public function getTemplateName()
    {
        return "CTRVPlaceBundle:Place:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 29,  67 => 25,  55 => 18,  50 => 16,  44 => 13,  39 => 10,  37 => 9,  31 => 5,  28 => 4,  23 => 2,);
    }
}
