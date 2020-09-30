<?php

/* not-found.html */
class __TwigTemplate_79b4c2ae4d2be0b2ed90122309c0ee4899014ba582017fa7e41e67f15c6433ea extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>400 - Page not found</h1>
";
    }

    public function getTemplateName()
    {
        return "not-found.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>400 - Page not found</h1>
", "not-found.html", "/home/data/workspace/paw/paw-framework/app/views/not-found.html");
    }
}
