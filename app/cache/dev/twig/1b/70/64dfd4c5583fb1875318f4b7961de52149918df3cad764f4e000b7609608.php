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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    <title>Document Manager</title>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
\t<h1> insert a new Archive</h1>


\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("post_new_document"), "method" => "POST", "class" => "form-horizontal"));
        echo "
\t<fieldset>
\t ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


\t";
        // line 17
        ob_start();
        // line 18
        echo "
\t  <div class=\"form-group\">
\t    <label for=\"\">";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'label');
        echo "</label>
\t       ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t         <span class=\"text-danger\">  ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titre", array()), 'errors');
        echo " </span>  
\t  </div>\t\t
\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 25
        echo "
\t";
        // line 26
        ob_start();
        // line 27
        echo "\t\t <div class=\"form-group\">
\t\t    <label for=\"\"> ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</label>
\t\t ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t   <span class=\"text-danger\">  ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo " </span>  
\t\t  </div>\t\t
\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 33
        echo "
\t";
        // line 34
        ob_start();
        // line 35
        echo "\t\t <div class=\"form-group\">
\t\t    <label for=\"\"> ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createdOrigineAt", array()), 'label');
        echo "</label>
\t\t\t ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createdOrigineAt", array()), 'widget', array("attr" => array("class" => "form-control datepicker")));
        echo " 
\t\t\t   <span class=\"text-danger\">  ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "createdOrigineAt", array()), 'errors');
        echo " </span>  
\t\t\t </div>\t\t
\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 41
        echo "
\t";
        // line 42
        ob_start();
        // line 43
        echo "\t\t <div class=\"form-group\">\t 
\t\t\t ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo " 
\t\t\t   <span class=\"text-danger\">  ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo " </span> 
\t\t  </div>\t\t
\t";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 48
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
\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
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



\t<!-- <form role=\"form\">
\t  <div class=\"form-group\">
\t    <label for=\"email\">Email address:</label>
\t    <input type=\"email\" class=\"form-control\" id=\"email\">
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"pwd\">Password:</label>
\t    <input type=\"password\" class=\"form-control\" id=\"pwd\">
\t  </div>
\t  <div class=\"checkbox\">
\t    <label><input type=\"checkbox\"> Remember me</label>
\t  </div>
\t  <button type=\"submit\" class=\"btn btn-default\">Submit</button>
</form>
 -->
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
        return array (  163 => 62,  159 => 60,  151 => 54,  149 => 53,  145 => 52,  139 => 48,  133 => 45,  129 => 44,  126 => 43,  124 => 42,  121 => 41,  115 => 38,  111 => 37,  107 => 36,  104 => 35,  102 => 34,  99 => 33,  93 => 30,  89 => 29,  85 => 28,  82 => 27,  80 => 26,  77 => 25,  71 => 22,  67 => 21,  63 => 20,  59 => 18,  57 => 17,  51 => 14,  46 => 12,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
