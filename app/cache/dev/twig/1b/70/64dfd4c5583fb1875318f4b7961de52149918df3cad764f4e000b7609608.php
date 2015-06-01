<?php

/* DMDocumentBundle:Partial:new.html.twig */
class __TwigTemplate_1b7064dfd4c5583fb1875318f4b7961de52149918df3cad764f4e000b7609608 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DMResourceBundle::layout.html.twig", "DMDocumentBundle:Partial:new.html.twig", 1);
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
        $context["ActivePage"] = "newArchive";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    <title>Document Manager</title>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "

\t<h1> insert a new Archive</h1>


\t";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("post_new_document"), "method" => "POST", "class" => "form-horizontal"));
        echo "
\t<fieldset>
\t ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


\t";
        // line 20
        ob_start();
        // line 21
        echo "
\t  <div class=\"form-group\">
\t    <label for=\"\">";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label');
        echo "</label>
\t       ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t         <span class=\"text-danger\">  ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo " </span>  
\t  </div>\t\t
\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 28
        echo "
\t";
        // line 29
        ob_start();
        // line 30
        echo "\t\t <div class=\"form-group\">
\t\t    <label for=\"\"> ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</label>
\t\t ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t   <span class=\"text-danger\">  ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo " </span>  
\t\t  </div>\t\t
\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 36
        echo "
\t";
        // line 37
        ob_start();
        // line 38
        echo "\t\t <div class=\"form-group\">
\t\t    <label for=\"\"> ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createdOrigineAt", array()), 'label');
        echo "</label>
\t\t\t ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createdOrigineAt", array()), 'widget', array("attr" => array("class" => "form-control datepicker")));
        echo " 
\t\t\t   <span class=\"text-danger\">  ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createdOrigineAt", array()), 'errors');
        echo " </span>  
\t\t\t </div>\t\t
\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 44
        echo "
\t";
        // line 45
        ob_start();
        // line 46
        echo "\t\t <div class=\"form-group\">\t 
\t\t\t ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo " 
\t\t\t   <span class=\"text-danger\">  ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo " </span> 
\t\t  </div>\t\t
\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 51
        echo "
 \t";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo " 
\t\t";
        // line 53
        ob_start();
        // line 54
        echo "\t     <div class=\"form-group\">\t\t   
\t\t    <div class=\"col-md-4\">
\t\t\t<button type=\"submit\" formnovalidate = \"true\" class=\"btn btn-primary\">Submit</button>
\t\t\t </div>
\t\t </div>\t
\t\t  \t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 60
        echo "\t  
\t</fieldset>
\t";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "DMDocumentBundle:Partial:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 62,  160 => 60,  152 => 54,  150 => 53,  146 => 52,  143 => 51,  137 => 48,  133 => 47,  130 => 46,  128 => 45,  125 => 44,  119 => 41,  115 => 40,  111 => 39,  108 => 38,  106 => 37,  103 => 36,  97 => 33,  93 => 32,  89 => 31,  86 => 30,  84 => 29,  81 => 28,  75 => 25,  71 => 24,  67 => 23,  63 => 21,  61 => 20,  55 => 17,  50 => 15,  43 => 10,  40 => 9,  35 => 5,  32 => 4,  28 => 1,  26 => 2,  11 => 1,);
    }
}
