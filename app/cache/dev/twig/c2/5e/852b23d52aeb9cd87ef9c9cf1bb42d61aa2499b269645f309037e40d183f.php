<?php

/* DMResourceBundle::layout.html.twig */
class __TwigTemplate_c25e852b23d52aeb9cd87ef9c9cf1bb42d61aa2499b269645f309037e40d183f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dmresource/images/favicon.png"), "html", null, true);
        echo "\" />
    ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
    
  </head>
  <body>
   <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">D.M</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"#\">About</a>
                    </li>
                    <li>
                        <a href=\"#\">Services</a>
                    </li>
                    <li>
                        <a href=\"#\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

     <!-- Page Content -->
    <div class=\"container\">

        <div class=\"row\">

            <div class=\"col-md-3\">
                <p class=\"lead\">Document Manager</p>
                <div class=\"list-group\">
                    <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("post_new_document");
        echo "\" class=\"list-group-item active\">add new doc</a>
                    <a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("list_documents");
        echo "\" class=\"list-group-item\">list Docs</a>
                    <a href=\"#\" class=\"list-group-item\">Docs Logs</a>
                </div>
            </div>

            <div class=\"col-md-9\">

               

                <div class=\"well\">                 
       

                   

                </div>

                 ";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "
            </div>

        </div>



    ";
        // line 85
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
    
</body>
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        ";
        $this->loadTemplate("DMResourceBundle:Partial:_stylesheets.html.twig", "DMResourceBundle::layout.html.twig", 12)->display($context);
        echo "     
    ";
    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        // line 76
        echo "          
        ";
    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        // line 86
        echo "     ";
        $this->loadTemplate("DMResourceBundle:Partial:_javascripts.html.twig", "DMResourceBundle::layout.html.twig", 86)->display($context);
        // line 87
        echo "    ";
    }

    public function getTemplateName()
    {
        return "DMResourceBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 87,  159 => 86,  156 => 85,  151 => 76,  148 => 75,  141 => 12,  138 => 11,  133 => 8,  125 => 88,  123 => 85,  114 => 78,  112 => 75,  93 => 59,  89 => 58,  43 => 14,  41 => 11,  37 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }
}
