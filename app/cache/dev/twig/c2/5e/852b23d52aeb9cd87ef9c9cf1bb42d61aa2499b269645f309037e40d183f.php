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
        // line 13
        echo " 
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js\"></script>  


  </head>
  <body ng-app=\"docManager\">
   <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\" ng-controller=\"menuCtrl\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">D.M ";
        // line 30
        echo " {{ firstName }} ";
        echo " </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a class=\"btn\" ng-click=\"setRoute('about')\">About</a>
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
        // line 60
        echo $this->env->getExtension('routing')->getPath("post_new_document");
        echo "\" class=\"list-group-item ";
        if (((isset($context["ActivePage"]) ? $context["ActivePage"] : $this->getContext($context, "ActivePage")) == "newArchive")) {
            echo " active ";
        }
        echo "\">add new doc</a>
                    <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("list_documents");
        echo "\" class=\"list-group-item ";
        if (((isset($context["ActivePage"]) ? $context["ActivePage"] : $this->getContext($context, "ActivePage")) == "listArchives")) {
            echo " active ";
        }
        echo "\">list Docs</a>
                    <a href=\"#\" class=\"list-group-item ";
        // line 62
        if (((isset($context["ActivePage"]) ? $context["ActivePage"] : $this->getContext($context, "ActivePage")) == "logArchive")) {
            echo " active ";
        }
        echo "\">Docs Logs</a>
                </div>
            </div>

            <div class=\"col-md-9\">

               

                <div class=\"well\">         
       
                This is a simple document manager!
                   

                </div>

                 ";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 80
        echo "
            </div>

        </div>



    ";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 90
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

    // line 77
    public function block_content($context, array $blocks = array())
    {
        // line 78
        echo "          
        ";
    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        // line 88
        echo "     ";
        $this->loadTemplate("DMResourceBundle:Partial:_javascripts.html.twig", "DMResourceBundle::layout.html.twig", 88)->display($context);
        // line 89
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
        return array (  181 => 89,  178 => 88,  175 => 87,  170 => 78,  167 => 77,  160 => 12,  157 => 11,  152 => 8,  144 => 90,  142 => 87,  133 => 80,  131 => 77,  111 => 62,  103 => 61,  95 => 60,  62 => 30,  43 => 13,  41 => 11,  37 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }
}
