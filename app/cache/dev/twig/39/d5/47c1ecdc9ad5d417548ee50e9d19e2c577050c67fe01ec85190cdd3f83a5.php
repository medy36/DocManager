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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\t<title>List - New application</title>
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "\t<!-- Page Content -->
\t<div id=\"page-content-wrapper\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div ng-controller=\"docList\" class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t<h1></h1>
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<!-- Default panel contents -->
\t\t\t\t\t\t<div class=\"panel-heading\"><h1>Document list</h1></div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<p>This is the list of documents :</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Table  -->
\t\t\t\t\t\t";
        // line 21
        echo "
\t\t\t\t\t\t\t<!-- Modal -->
\t\t\t\t\t\t\t<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
\t\t\t\t\t\t\t  <div class=\"modal-dialog\">

\t\t\t\t\t\t\t    <!-- Modal content-->
\t\t\t\t\t\t\t    <div class=\"modal-content\">
\t\t\t\t\t\t\t      <div class=\"modal-header\">
\t\t\t\t\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t\t\t        <h4 class=\"modal-title\">Modal Header</h4>
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t      <div class=\"modal-body\">
\t\t\t\t\t\t\t      \t<div ng-view > </div>
\t\t\t\t\t\t\t        <p>Some text in the modal.</p>
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t      <div class=\"modal-footer\">
\t\t\t\t\t\t\t        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t\t      </div>
\t\t\t\t\t\t\t    </div>

\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<tbody>\t\t\t
\t\t\t\t\t\t\t\t<tr ng-repeat=\"document in documents\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<th><a href=\"#docDetails/[[document.id]]\" ng-click=\"open()\" data-toggle=\"modal\" data-target=\"#myModal\">
\t\t\t\t\t\t\t\t\t\t[[document.titre]] </a></th>\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</table>
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
</div>
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
        return array (  58 => 21,  43 => 7,  40 => 6,  35 => 4,  32 => 3,  28 => 1,  26 => 2,  11 => 1,);
    }
}
