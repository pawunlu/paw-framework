<?php

/* base.html */
class __TwigTemplate_60d8bf3ebb25b6d866dc6e84a570322d3bf9ff07c8563d3457eac657c067b5fd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>";
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
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - PAW 2018</title>";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
    }

    // line 12
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  79 => 12,  74 => 11,  69 => 10,  60 => 6,  57 => 5,  54 => 4,  46 => 12,  42 => 11,  38 => 10,  34 => 8,  32 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
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
", "base.html", "/home/data/workspace/paw/paw-framework/app/views/base.html");
    }
}
