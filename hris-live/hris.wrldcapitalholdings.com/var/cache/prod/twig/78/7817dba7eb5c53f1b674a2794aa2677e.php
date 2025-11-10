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

/* @TwigComponent/Collector/chevron-down.svg */
class __TwigTemplate_b8cc1ab39de53328b19859ece831113e extends Template
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
        yield "<svg xmlns=\"http://www.w3.org/2000/svg\" data-icon-name=\"icon-tabler-chevron-down\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
    <path d=\"M6 9l6 6l6 -6\"></path>
</svg>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@TwigComponent/Collector/chevron-down.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("", "@TwigComponent/Collector/chevron-down.svg", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\vendor\\symfony\\ux-twig-component\\templates\\Collector\\chevron-down.svg");
    }
}
