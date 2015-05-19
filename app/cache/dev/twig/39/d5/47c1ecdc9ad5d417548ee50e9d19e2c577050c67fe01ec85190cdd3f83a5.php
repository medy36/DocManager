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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    <title>List - New application</title>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
\t<!-- Page Content -->
    <div id=\"page-content-wrapper\">       

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t<h1>Welcome to the Post:index page</h1>
\t\t\t\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 17
            echo "\t\t\t\t\t\t<h1><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("document_details", array("slug" => $this->getAttribute($context["document"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "titre", array()), "html", null, true);
            echo "</a><h1>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t\t</div>
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
        return array (  65 => 19,  54 => 17,  50 => 16,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
