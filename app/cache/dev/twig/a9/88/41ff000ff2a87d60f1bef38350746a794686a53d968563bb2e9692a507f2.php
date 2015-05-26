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
        // asset "47fc26e_0"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_47fc26e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/47fc26e_custom_1.js");
        // line 8
        echo "     <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
     <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
     ";
        // line 10
        if (array_key_exists("form", $context)) {
            // line 11
            echo "     ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            echo "
     ";
        }
        // line 13
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\"></script>
 

   <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uran1980fancybox/js/fancybox/source/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
 
 

";
        // asset "47fc26e_1"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_47fc26e_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/47fc26e_angularCtrls_2.js");
        // line 8
        echo "     <script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
     <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
     ";
        // line 10
        if (array_key_exists("form", $context)) {
            // line 11
            echo "     ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            echo "
     ";
        }
        // line 13
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\"></script>
 

   <!-- Latest compiled and minified JavaScript -->
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/uran1980fancybox/js/fancybox/source/jquery.fancybox.pack.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
 
 

";
        unset($context["asset_url"]);
        // line 27
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
        return array (  109 => 27,  101 => 22,  97 => 21,  92 => 19,  84 => 14,  81 => 13,  75 => 11,  73 => 10,  69 => 9,  66 => 8,  57 => 22,  53 => 21,  48 => 19,  40 => 14,  37 => 13,  31 => 11,  29 => 10,  25 => 9,  22 => 8,  19 => 1,);
    }
}
