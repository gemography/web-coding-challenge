<?php

/* ::include.html.twig */
class __TwigTemplate_a73b320cd5c618fcc8610c61a898cc6c extends Twig_Template
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
        // line 3
        echo "<link rel=\"stylesheet/less\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ctrvcommon/css/bootstrap/bootstrap.less"), "html", null, true);
        echo "\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ctrvcommon/css/common.css"), "html", null, true);
        echo "\" type=\"text/css\" />


";
        // line 8
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/less.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tinymce/jscripts/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
";
        // line 12
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "c477fb1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c477fb1") : $this->env->getExtension('assets')->getAssetUrl("js/c477fb1.js");
            // line 13
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 16
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ctrvcommon/js/common.js"), "html", null, true);
        echo "\"></script>


";
        // line 20
        echo "<script type=\"text/javascript\">
\ttinyMCE.init({
\t        //mode : \"textareas\",
\t        mode : \"exact\",
\t        language : \"fr\",
\t        elements : \"myid1\",
\t        theme : \"advanced\",
\t        plugins : \"jbimages,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template\",
\t        skin : \"o2k7\",
\t        skin_variant : \"silver\",
\t        // Theme options - button# indicated the row# only
\t        theme_advanced_buttons1 : \"preview,undo,redo,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect\",
\t        theme_advanced_buttons2 : \"forecolor,backcolor,|,bullist,numlist,|,outdent,indent,blockquote,|,sub,sup,|,charmap,iespell,|,link,unlink,code,|,insertdate,inserttime\",
\t        theme_advanced_buttons3 : \"jbimages,tablecontrols,|,hr,removeformat,visualaid\",
\t        theme_advanced_toolbar_location : \"top\",
\t        theme_advanced_toolbar_align : \"left\",
\t        theme_advanced_statusbar_location : \"bottom\",
\t        theme_advanced_resizing : false,
\t        theme_advanced_path : false,
\t        height : \"450\",
\t\t    width : \"100%\",
\t    \tcontent_css : \"/new/css/tiny_mce_default.css\",
\t    \ttheme_advanced_font_sizes: \"10px,12px,13px,14px,16px,18px,20px,22px,24px\",
\t    \tfont_size_style_values : \"10px,12px,13px,14px,16px,18px,20px,22px,24px\"
\t    \t//relative_urls : false //a activer en prod

\t});
</script>";
    }

    public function getTemplateName()
    {
        return "::include.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  46 => 13,  41 => 12,  37 => 10,  33 => 9,  28 => 8,  22 => 4,  17 => 3,  167 => 55,  164 => 54,  160 => 51,  157 => 50,  154 => 49,  148 => 34,  142 => 33,  129 => 81,  116 => 71,  103 => 64,  101 => 63,  92 => 56,  90 => 54,  86 => 52,  84 => 49,  75 => 42,  73 => 40,  66 => 35,  64 => 34,  60 => 20,  56 => 32,  52 => 30,  50 => 29,  21 => 2,  29 => 5,  26 => 4,);
    }
}
