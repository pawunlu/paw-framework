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

/* partials/nav.html */
class __TwigTemplate_04430c8426cd1dc8f36d5a1f41859ef376660a7e3a690556673cb5bc7265f4b6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav>
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
", "partials/nav.html", "/home/data/workspace/paw/paw-framework/src/App/views/partials/nav.html");
    }
}
