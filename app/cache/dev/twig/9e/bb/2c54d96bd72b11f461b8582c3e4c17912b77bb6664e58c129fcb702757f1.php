<?php

/* DMResourceBundle:Partial:_stylesheets.html.twig */
class __TwigTemplate_9ebb2c54d96bd72b11f461b8582c3e4c17912b77bb6664e58c129fcb702757f1 extends Twig_Template
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
        // asset "a2438c7_0"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_a2438c7_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/a2438c7_shop-item_1.css");
        // line 9
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css\">
\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\" media=\"screen, projection\" rel=\"stylesheet\" type=\"text/css\" />


";
        unset($context["asset_url"]);
        // line 14
        echo "

";
    }

    public function getTemplateName()
    {
        return "DMResourceBundle:Partial:_stylesheets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 14,  25 => 10,  22 => 9,  19 => 1,);
    }
}
