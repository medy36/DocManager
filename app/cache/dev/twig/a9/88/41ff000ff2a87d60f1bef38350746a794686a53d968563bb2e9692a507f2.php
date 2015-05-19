<?php

/* DMResourceBundle:Partial:_javascripts.html.twig */
class __TwigTemplate_a98841ff000ff2a87d60f1bef38350746a794686a53d968563bb2e9692a507f2 extends Twig_Template
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
        // asset "f4634a1_0"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f4634a1_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f4634a1_custom_1.js");
        // line 7
        echo "     <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
       <script type=\"text/javascript\" src=\"/bundles/genemuform/tinymce/jscripts/tiny_mce/tiny_mce.js\"></script>
            ";
        // line 9
        if (array_key_exists("form", $context)) {
            // line 10
            echo "                ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            echo "
            ";
        }
        // line 12
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\"></script>
 

   <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uran1980fancybox/js/fancybox/source/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>



";
        unset($context["asset_url"]);
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "DMResourceBundle:Partial:_javascripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 22,  43 => 17,  34 => 12,  28 => 10,  26 => 9,  22 => 7,  19 => 1,);
    }
}
