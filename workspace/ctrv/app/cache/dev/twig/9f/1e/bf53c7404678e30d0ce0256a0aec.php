<?php

/* CTRVCommonBundle:Common:index.html.twig */
class __TwigTemplate_9f1ebf53c7404678e30d0ce0256a0aec extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "

Welcome to cityrovers ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "getToken", array(), "method"), "getUser", array(), "method"), "html", null, true);
        echo " 


";
    }

    public function getTemplateName()
    {
        return "CTRVCommonBundle:Common:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  29 => 5,  26 => 4,);
    }
}
