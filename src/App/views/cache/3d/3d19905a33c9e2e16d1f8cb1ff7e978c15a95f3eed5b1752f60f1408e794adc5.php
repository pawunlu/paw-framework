<?php

/* internal-error.html */
class __TwigTemplate_75f04c2e662dee2a27c45dfa01f99018bed8e24f1faea194ca6fd2dc801a8a48 extends Twig_Template
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
        echo "<h1>500 - Internal Server Error</h1>
";
    }

    public function getTemplateName()
    {
        return "internal-error.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>500 - Internal Server Error</h1>
", "internal-error.html", "/home/data/workspace/paw/paw-framework/app/views/internal-error.html");
    }
}
