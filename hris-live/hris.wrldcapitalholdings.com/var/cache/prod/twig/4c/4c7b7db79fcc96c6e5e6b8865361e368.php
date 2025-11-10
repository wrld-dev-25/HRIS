<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/_menu.html.twig */
class __TwigTemplate_4aaefeea335b0b74ba92602e62f35903 extends Template
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
        yield from         $this->loadTemplate("partials/_topbar.html.twig", "partials/_menu.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield from         $this->loadTemplate("partials/_sidebar.html.twig", "partials/_menu.html.twig", 2)->unwrap()->yield($context);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_menu.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/_menu.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\partials\\_menu.html.twig");
    }
}
