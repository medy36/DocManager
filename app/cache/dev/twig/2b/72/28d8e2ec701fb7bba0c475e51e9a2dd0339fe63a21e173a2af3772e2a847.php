<?php

/* DMDocumentBundle:Partial:details.html.twig */
class __TwigTemplate_2b7228d8e2ec701fb7bba0c475e51e9a2dd0339fe63a21e173a2af3772e2a847 extends Twig_Template
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
        echo "<div class=\"col-md-9\" ng-controller=\"docDetails\">

    <div class=\"thumbnail\">     
         
             <div class=\"caption-full\">
            \t<h4 class=\"pull-right\">[[ documentt.createdOrigineAt | myfilter:date ]] </h4>
\t            <h4><a href=\"#\">[[ documentt.titre ]] </a></h4>
\t            
\t            <p> [[ documentt.description]] </p>

\t            <h4 class=\"pull-left\">  Posted at:[[ documentt.createdAt | myfilter:date ]] </h4>
\t           
\t        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "DMDocumentBundle:Partial:details.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
