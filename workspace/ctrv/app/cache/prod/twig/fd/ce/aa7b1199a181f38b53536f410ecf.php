<?php

/* CTRVPlaceBundle:Place:menuPlace.html.twig */
class __TwigTemplate_fdceaa7b1199a181f38b53536f410ecf extends Twig_Template
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
<div class=\"span30\">
\t<ul class=\" unstyled btn-group\">
\t\t<li><a class=\"btn btn-block\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("place"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("place.menu.moderate", array(), "messages");
        echo "</a></li><br>
\t\t<li><a class=\"btn btn-block\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("import_place"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("place.menu.import", array(), "messages");
        echo "</a></li><br>
\t\t<li><a class=\"btn btn-block\" href=\"\">";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("place.menu.setLatLng", array(), "messages");
        echo "</a></li><br>
\t\t<li><a class=\"btn btn-block\" href=\"\">";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("place.menu.setPlaceDescription", array(), "messages");
        echo "</a></li>
\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "CTRVPlaceBundle:Place:menuPlace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  34 => 6,  22 => 4,  17 => 1,  30 => 2,  19 => 1,  69 => 29,  62 => 25,  50 => 16,  44 => 13,  39 => 10,  37 => 9,  31 => 5,  28 => 5,  23 => 2,);
    }
}
