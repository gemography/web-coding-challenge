<?php

/* CTRVPlaceBundle:Place:loadAllPlacesByTypeOrNot.html.twig */
class __TwigTemplate_95de6321d7ec7ca9e66069c173873b74 extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.titleAll", array(), "messages");
        echo "</h3>
\t\t
\t\t<form id=\"choose_place_type\" action=\"\" method=\"post\">
\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
\t\t</form>
\t\t<div id=\"places-list\"> <!-- le tableau sera affiché ici en js -->
\t\t";
        // line 19
        if ((!twig_test_empty($this->getContext($context, "entities")))) {
            // line 20
            echo "<table class=\"table table-bordered table-condensed table-hover\">
    <thead>
        <tr>
        \t<th>";
            // line 23
            echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.table.title", array(), "messages");
            echo "</th>
            <th>";
            // line 24
            echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.table.description", array(), "messages");
            echo "</th>
            <th>";
            // line 25
            echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.table.adresse", array(), "messages");
            echo "</th>
            <th>";
            // line 26
            echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.table.addedDate", array(), "messages");
            echo "</th>
            <th>";
            // line 27
            echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.table.action", array(), "messages");
            echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 32
                echo "        <tr>
\t\t\t<td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title"), "html", null, true);
                echo "</td>
            <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true);
                echo "</td>
            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "street"), "html", null, true);
                echo "</td>
            ";
                // line 36
                $context["format"] = constant("CTRV\\CommonBundle\\DependencyInjection\\Constants::DATE_FORMAT");
                // line 37
                echo "            <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "addedDate"), $this->getContext($context, "format")), "html", null, true);
                echo "</td>
            <td>
\t\t        <a class=\"place-to-delete btn btn-mini\" data-place-id=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.table.delete_action", array(), "messages");
                echo "</a>
            </td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 43
            echo "    </tbody>
</table>
\t\t
\t\t";
            // line 46
            echo $this->env->getExtension('actions')->renderAction("CTRVCommonBundle:Common:renderPagination", array("href_active" => "false", "nb_pages" => $this->getContext($context, "nb_pages"), "page" => $this->getContext($context, "page"), "url_path" => "place"), array());
            // line 47
            echo "
";
        } else {
            // line 49
            echo "\t<div class=\"center\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.table.no_result", array(), "messages");
            echo "</div>\t\t\t\t
";
        }
        // line 51
        echo "\t\t</div>
\t\t
\t</div>

</div>
\t\t

<script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ctrvplace/js/place.js"), "html", null, true);
        echo "\"></script>
<script>
\t\$(function() {

\t\tvar urlAction = \"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("loadAllPlacesByTypeOrNot"), "html", null, true);
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

\t\tvar url_load_places_action = \"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("loadAllPlacesByTypeOrNot"), "html", null, true);
        echo "\";

\t\t//si on change de page
\t\t\$(\".pagination li a\").click (function () {
\t\t\tplaceTypeId = \$(\"#choose_place_type_placeType\").val();
\t\t\tpage = \$(this).parent().attr(\"data-page\");
\t\t\tloadPlacesByType (url_load_places_action,placeTypeId,page,\$(\"#places-list\"));
\t\t});
\t\t
\t\t//si on chnage de page avec la select boxe
\t\t\$(\"#choose_page\").change( function () {
\t\t\tplaceTypeId = \$(\"#choose_place_type_placeType\").val();
\t\t\tvar selectedPage = \$(this).val();
\t\t\tloadPlacesByType (url_load_places_action,placeTypeId,selectedPage,\$(\"#places-list\"));
\t\t});

\t\tvar url_delete_place_action = \"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("place_delete", array("id" => "place_id_to_delete")), "html", null, true);
        echo "\";
\t\t\$(\".place-to-delete\").click( function () {
\t\t\turl_delete_place_action = url_delete_place_action.replace('place_id_to_delete',\$(this).attr('data-place-id'));
\t\t\tdeletePlace (url_delete_place_action, \$(this).parent().parent());
\t\t});
\t\t
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "CTRVPlaceBundle:Place:loadAllPlacesByTypeOrNot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 90,  173 => 74,  158 => 62,  151 => 58,  142 => 51,  136 => 49,  132 => 47,  130 => 46,  125 => 43,  113 => 39,  107 => 37,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  90 => 32,  86 => 31,  79 => 27,  75 => 26,  71 => 25,  67 => 24,  63 => 23,  58 => 20,  56 => 19,  50 => 16,  44 => 13,  39 => 10,  37 => 9,  31 => 5,  28 => 4,  23 => 2,);
    }
}
