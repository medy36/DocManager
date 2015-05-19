<?php

/* DMDocumentBundle:Partial:details.html.twig */
class __TwigTemplate_2b7228d8e2ec701fb7bba0c475e51e9a2dd0339fe63a21e173a2af3772e2a847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DMResourceBundle::layout.html.twig", "DMDocumentBundle:Partial:details.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    <title>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "titre", array()), "html", null, true);
        echo " - New application</title>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
 <div class=\"col-md-9\">

    <div class=\"thumbnail\">
        <a id=\"single_1\" class=\"fancybox\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "file"), "html", null, true);
        echo "\" ><img  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('vich_uploader')->asset((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "file"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "imageName", array()), "html", null, true);
        echo "\" /></a>
         
             <div class=\"caption-full\">
            \t<h4 class=\"pull-right\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "createdOrigineAt", array()), "Y-m-d"), "html", null, true);
        echo "</h4>
\t            <h4><a href=\"#\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "titre", array()), "html", null, true);
        echo "</a></h4>
\t            
\t            <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "description", array()), "html", null, true);
        echo "</p>

\t            <h4 class=\"pull-left\">  Posted at:";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")), "createdAt", array()), "Y-m-d"), "html", null, true);
        echo "</h4>
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  67 => 18,  62 => 16,  58 => 15,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
