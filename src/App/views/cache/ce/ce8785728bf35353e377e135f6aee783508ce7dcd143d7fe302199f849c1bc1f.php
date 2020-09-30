<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html */
class __TwigTemplate_5b89b50bd21e9f8e9a14d93a6c86dab22354789a7f5c7eb6ecbf0e7e5c54989c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 8
        echo "</head>
<body>
    <header>";
        // line 10
        $this->displayBlock('header', $context, $blocks);
        echo "</header>
    <main>";
        // line 11
        $this->displayBlock('main', $context, $blocks);
        echo "</main>
    <footer>";
        // line 12
        $this->displayBlock('footer', $context, $blocks);
        echo "</footer>
</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "        <meta charset=\"utf-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - PAW 2018</title>
    ";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 12
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  99 => 12,  93 => 11,  87 => 10,  76 => 6,  73 => 5,  69 => 4,  61 => 12,  57 => 11,  53 => 10,  49 => 8,  47 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    {% block head %}
        <meta charset=\"utf-8\">
        <title>{% block title %}{% endblock %} - PAW 2018</title>
    {% endblock %}
</head>
<body>
    <header>{% block header %}{% endblock %}</header>
    <main>{% block main %}{% endblock %}</main>
    <footer>{% block footer %}{% endblock %}</footer>
</body>
</html>
", "base.html", "/home/data/workspace/paw/paw-framework/src/App/views/base.html");
    }
}
