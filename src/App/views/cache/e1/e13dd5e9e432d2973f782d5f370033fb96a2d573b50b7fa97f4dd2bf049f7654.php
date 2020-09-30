<?php

/* partials/nav.html */
class __TwigTemplate_41a2072f9521355bb01e84ac17412425632fb4dc5ec6d5508aab9ff4d9222e90 extends Twig_Template
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
        echo "<nav>
    <ul>
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/about\">About</a></li>
        <li><a href=\"/contact\">Contact</a></li>
        <li><a href=\"/users\">Manage Users</a></li>
        <li><a href=\"/tasks\">Show Tasks</a></li>
        <ul>
            <li><a href=\"/tasks/create\">Create Tasks</a></li>
        </ul>
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/nav.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav>
    <ul>
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/about\">About</a></li>
        <li><a href=\"/contact\">Contact</a></li>
        <li><a href=\"/users\">Manage Users</a></li>
        <li><a href=\"/tasks\">Show Tasks</a></li>
        <ul>
            <li><a href=\"/tasks/create\">Create Tasks</a></li>
        </ul>
    </ul>
</nav>
", "partials/nav.html", "/home/data/workspace/paw/paw-framework/app/views/partials/nav.html");
    }
}
