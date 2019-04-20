<?php

/* CTRVPlaceBundle:Place:loadPlacesByType.html.twig */
class __TwigTemplate_76ad8fa652ea3c4a62955681862612ac extends Twig_Template
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
        if ((!twig_test_empty($this->getContext($context, "entities")))) {
            // line 2
            echo "<table class=\"table table-bordered table-condensed table-hover\">
    <thead>
        <tr>
        \t<th>";
            // line 5
            echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.table.title", array(), "messages");
            echo "</th>
            <th>";
            // line 6
            echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.table.description", array(), "messages");
            echo "</th>
            <th>";
            // line 7
            echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.table.adresse", array(), "messages");
            echo "</th>
            <th>";
            // line 8
            echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.table.addedDate", array(), "messages");
            echo "</th>
            <th>";
            // line 9
            echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.table.action", array(), "messages");
            echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 14
                echo "        <tr>
\t\t\t<td>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "title"), "html", null, true);
                echo "</td>
            <td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true);
                echo "</td>
            <td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "street"), "html", null, true);
                echo "</td>
            ";
                // line 18
                $context["format"] = constant("CTRV\\CommonBundle\\DependencyInjection\\Constants::DATE_FORMAT");
                // line 19
                echo "            <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "addedDate"), $this->getContext($context, "format")), "html", null, true);
                echo "</td>
            <td>
\t\t        <a class=\"place-to-delete btn btn-mini\" data-place-id=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.table.delete_action", array(), "messages");
                echo "</a>
\t\t        <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("update_place", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
                echo "\" class=\"place-to-update btn btn-mini\" data-place-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.table.update_action", array(), "messages");
                echo "</a>
            </td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 26
            echo "    </tbody>
</table>
\t\t
\t\t";
            // line 29
            echo $this->env->getExtension('actions')->renderAction("CTRVCommonBundle:Common:renderPagination", array("href_active" => "false", "nb_pages" => $this->getContext($context, "nb_pages"), "page" => $this->getContext($context, "page"), "url_path" => "place"), array());
            // line 30
            echo "
";
        } else {
            // line 32
            echo "\t<div class=\"center\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("place.list.table.no_result", array(), "messages");
            echo "</div>\t\t\t\t
";
        }
        // line 33
        echo "\t\t


<script>
\t\$(function() {

\t\tvar url_load_places_action = \"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("loadPlacesByType"), "html", null, true);
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
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("place_delete", array("id" => "place_id_to_delete")), "html", null, true);
        echo "\";
\t\t\$(\".place-to-delete\").click( function () {
\t\t\turl_delete_place_action = url_delete_place_action.replace('place_id_to_delete',\$(this).attr('data-place-id'));
\t\t\tdeletePlace (url_delete_place_action, \$(this).parent().parent());
\t\t});
\t\t
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "CTRVPlaceBundle:Place:loadPlacesByType.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 55,  119 => 39,  111 => 33,  105 => 32,  101 => 30,  99 => 29,  94 => 26,  80 => 22,  74 => 21,  68 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  51 => 14,  47 => 13,  40 => 9,  36 => 8,  32 => 7,  28 => 6,  24 => 5,  19 => 2,  17 => 1,);
    }
}
