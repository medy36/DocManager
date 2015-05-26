<?php

/* DMDocumentBundle:Partial:list.html.twig */
class __TwigTemplate_39d547c1ecdc9ad5d417548ee50e9d19e2c577050c67fe01ec85190cdd3f83a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DMResourceBundle::layout.html.twig", "DMDocumentBundle:Partial:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DMResourceBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["ActivePage"] = "listArchives";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    <title>List - New application</title>
";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
\t<!-- Page Content -->
    <div id=\"page-content-wrapper\">       

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div ng-controller=\"docList\" class=\"col-md-10 col-md-offset-1\">
                \t<h1>Welcome to the Post:index page</h1>
                \t";
        // line 23
        echo "
                \t\t<div ng-repeat=\"document in documents\">
                \t\t\thello:
\t                \t  <h1>{{ document.titre }}<h1>
\t                \t</div>
                \t\t
                \t";
        echo "
                \t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "DMDocumentBundle:Partial:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 23,  43 => 9,  40 => 8,  35 => 5,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }
}
