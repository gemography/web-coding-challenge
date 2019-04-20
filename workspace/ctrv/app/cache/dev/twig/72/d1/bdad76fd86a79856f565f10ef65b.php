<?php

/* CTRVCommonBundle:Common:pagination.html.twig */
class __TwigTemplate_72d1bdad76fd86a79856f565f10ef65b extends Twig_Template
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
        $context["number_page_before_and_after"] = 5;
        // line 2
        echo "
";
        // line 3
        if (($this->getContext($context, "nb_pages") > 1)) {
            // line 4
            echo "\t<div class=\"pagination center\">
    \t<ul>
\t\t\t";
            // line 7
            echo "\t\t\t";
            if (($this->getContext($context, "page") > 1)) {
                echo " ";
                // line 8
                echo "\t\t\t\t<li data-page=\"";
                echo twig_escape_filter($this->env, ($this->getContext($context, "page") - 1), "html", null, true);
                echo "\">
    \t\t\t\t";
                // line 9
                if (($this->getContext($context, "href_active") == "true")) {
                    // line 10
                    echo "    \t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "url_path"), array("page" => ($this->getContext($context, "page") - 1))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_precedent.png"), "html", null, true);
                    echo "\"></a>
    \t\t\t\t";
                } else {
                    // line 12
                    echo "    \t\t\t\t\t<a><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_precedent.png"), "html", null, true);
                    echo "\"></a>
    \t\t\t\t";
                }
                // line 14
                echo "\t    \t\t</li>
\t    \t\t";
                // line 15
                if ((($this->getContext($context, "page") - $this->getContext($context, "number_page_before_and_after")) > 1)) {
                    // line 16
                    echo "\t\t\t\t\t<li>
\t    \t\t\t\t<a>...</a>
\t\t    \t\t</li>
\t    \t\t";
                }
                // line 20
                echo "\t\t\t";
            }
            // line 21
            echo "\t\t\t
\t\t\t";
            // line 23
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(($this->getContext($context, "page") - $this->getContext($context, "number_page_before_and_after")), $this->getContext($context, "nb_pages")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 24
                echo "\t\t\t\t";
                if ((($this->getContext($context, "p") < $this->getContext($context, "page")) && ($this->getContext($context, "p") > 0))) {
                    // line 25
                    echo "    \t\t\t<li data-page=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                    echo "\">
    \t\t\t\t";
                    // line 26
                    if (($this->getContext($context, "href_active") == "true")) {
                        // line 27
                        echo "    \t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "url_path"), array("page" => $this->getContext($context, "p"))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                        echo "</a>
    \t\t\t\t";
                    } else {
                        // line 29
                        echo "    \t\t\t\t\t<a>";
                        echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                        echo "</a>
    \t\t\t\t";
                    }
                    // line 31
                    echo "    \t\t\t</li>
    \t\t\t";
                }
                // line 33
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 34
            echo "\t\t\t
\t\t\t";
            // line 36
            echo "\t\t\t<li data-page=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
            echo "\" class=\"active\">
    \t\t\t";
            // line 37
            if (($this->getContext($context, "href_active") == "true")) {
                // line 38
                echo "    \t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "url_path"), array("page" => $this->getContext($context, "page"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "</a>
    \t\t\t";
            } else {
                // line 40
                echo "    \t\t\t\t<a>";
                echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
                echo "</a>
    \t\t\t";
            }
            // line 42
            echo "    \t\t</li>
\t\t\t
\t\t\t";
            // line 45
            echo "\t\t\t";
            if (($this->getContext($context, "page") < $this->getContext($context, "nb_pages"))) {
                // line 46
                echo "\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(($this->getContext($context, "page") + 1), $this->getContext($context, "nb_pages")));
                foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                    // line 47
                    echo "\t\t\t\t\t";
                    if (($this->getContext($context, "p") < (($this->getContext($context, "number_page_before_and_after") + $this->getContext($context, "page")) + 1))) {
                        // line 48
                        echo "\t\t    \t\t\t<li data-page=\"";
                        echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                        echo "\">
\t\t    \t\t\t\t";
                        // line 49
                        if (($this->getContext($context, "href_active") == "true")) {
                            // line 50
                            echo "\t\t    \t\t\t\t\t<a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "url_path"), array("page" => $this->getContext($context, "p"))), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                            echo "</a>
\t\t    \t\t\t\t";
                        } else {
                            // line 52
                            echo "\t\t    \t\t\t\t\t<a>";
                            echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                            echo "</a>
\t\t    \t\t\t\t";
                        }
                        // line 54
                        echo "\t\t    \t\t\t</li>
\t    \t\t\t";
                    }
                    // line 56
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 57
                echo "\t\t\t";
            }
            // line 58
            echo "\t\t\t
\t\t\t";
            // line 60
            echo "\t\t\t";
            if (($this->getContext($context, "page") < $this->getContext($context, "nb_pages"))) {
                echo " ";
                // line 61
                echo "\t\t\t\t
\t\t\t\t";
                // line 62
                if ((($this->getContext($context, "page") + $this->getContext($context, "number_page_before_and_after")) < $this->getContext($context, "nb_pages"))) {
                    // line 63
                    echo "\t\t\t\t\t<li>
\t    \t\t\t\t<a>...</a>
\t\t    \t\t</li>
\t    \t\t";
                }
                // line 67
                echo "\t    \t\t
\t\t\t\t<li data-page=\"";
                // line 68
                echo twig_escape_filter($this->env, ($this->getContext($context, "page") + 1), "html", null, true);
                echo "\">
    \t\t\t\t";
                // line 69
                if (($this->getContext($context, "href_active") == "true")) {
                    // line 70
                    echo "    \t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getContext($context, "url_path"), array("page" => ($this->getContext($context, "page") + 1))), "html", null, true);
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_suivant.png"), "html", null, true);
                    echo "\"></a>
    \t\t\t\t";
                } else {
                    // line 72
                    echo "    \t\t\t\t\t<a><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/icon_suivant.png"), "html", null, true);
                    echo "\"></a>
    \t\t\t\t";
                }
                // line 74
                echo "\t    \t\t</li>
\t\t\t";
            }
            // line 76
            echo "\t\t\t
\t\t\t";
            // line 78
            echo "\t\t\t<select class=\"pagination-select\" id=\"choose_page\">
\t    \t\t";
            // line 79
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "nb_pages")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 80
                echo "\t    \t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                echo "\" path-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getContext($context, "url_path"), array("page" => "page_to_replace")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                echo "</option>
\t    \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 82
            echo "    \t\t</select>
    \t</ul>
\t</div>
";
        }
        // line 86
        echo "

<script>
\t\$(function() {

\t\t\$(\"#choose_page\").val(\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getContext($context, "page"), "html", null, true);
        echo "\");

\t\tvar  href_active = \"";
        // line 93
        echo twig_escape_filter($this->env, $this->getContext($context, "href_active"), "html", null, true);
        echo "\";
\t\t
\t\t\$(\"#choose_page\").change( function () {
\t\t\t
\t\t\tvar selectedPage = \$(this).val();

\t\t\tif (href_active == \"true\") {
\t\t\t\tvar path_url = \"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getContext($context, "url_path"), array("page" => "selectedPage")), "html", null, true);
        echo "\";
\t\t\t\tpath_url = path_url.replace('selectedPage',selectedPage);
\t\t\t\t\$(location).attr('href',path_url);

\t\t\t} else {
\t\t\t\t//a gérer sur la page appelante ajax

\t\t\t}
\t\t});
\t\t\t\t
\t\t
\t\t
\t});
</script>";
    }

    public function getTemplateName()
    {
        return "CTRVCommonBundle:Common:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 100,  268 => 93,  263 => 91,  256 => 86,  250 => 82,  237 => 80,  233 => 79,  230 => 78,  227 => 76,  223 => 74,  217 => 72,  209 => 70,  207 => 69,  203 => 68,  200 => 67,  194 => 63,  192 => 62,  189 => 61,  185 => 60,  182 => 58,  179 => 57,  173 => 56,  169 => 54,  163 => 52,  155 => 50,  153 => 49,  148 => 48,  145 => 47,  140 => 46,  137 => 45,  133 => 42,  127 => 40,  117 => 37,  112 => 36,  109 => 34,  103 => 33,  93 => 29,  85 => 27,  83 => 26,  78 => 25,  75 => 24,  70 => 23,  67 => 21,  64 => 20,  56 => 15,  53 => 14,  39 => 10,  37 => 9,  22 => 3,  138 => 55,  119 => 38,  111 => 33,  105 => 32,  101 => 30,  99 => 31,  94 => 26,  80 => 22,  74 => 21,  68 => 19,  66 => 18,  62 => 17,  58 => 16,  54 => 15,  51 => 14,  47 => 12,  40 => 9,  36 => 8,  32 => 8,  28 => 7,  24 => 4,  19 => 2,  17 => 1,);
    }
}
