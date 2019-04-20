<?php

/* CTRVCommonBundle:Common:renderChooseCityForm.html.twig */
class __TwigTemplate_e050435eecc7295caac381914018da1e extends Twig_Template
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
        echo "<form class=\"form-horizontal\">
";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "CTRVCommonBundle:Common:renderChooseCityForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 2,  17 => 1,);
    }
}
