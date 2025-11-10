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

/* partials/without-nav.html.twig */
class __TwigTemplate_d440aa35d3ba01ab14024b7839a92ecc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield from         $this->loadTemplate("partials/_main.html.twig", "partials/without-nav.html.twig", 1)->unwrap()->yield($context);
        // line 2
        yield "
    <head>
        <meta charset=\"utf-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield " | Online Human Resource Information System</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
        <meta content=\"Minimal Admin & Dashboard Template\" name=\"description\">
        <meta content=\"Themesdesign\" name=\"author\">
        <!-- App favicon -->
        ";
        // line 11
        yield "        <link rel=\"shortcut icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wrld_icon_2-removebg.png"), "html", null, true);
        yield "\">



        ";
        // line 15
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 16
        yield "        ";
        yield from         $this->loadTemplate("partials/_head-css.html.twig", "partials/without-nav.html.twig", 16)->unwrap()->yield($context);
        // line 17
        yield "
    </head>

    <body>
        ";
        // line 21
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 30
        yield "    </body>
</html>";
        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Welcome";
        return; yield '';
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        yield "
            ";
        // line 23
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 24
        yield "
        ";
        // line 25
        yield from         $this->loadTemplate("partials/_vendor-scripts.html.twig", "partials/without-nav.html.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "
        ";
        // line 27
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 28
        yield "
        ";
        return; yield '';
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/without-nav.html.twig";
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
        return array (  132 => 27,  125 => 23,  119 => 28,  117 => 27,  114 => 26,  112 => 25,  109 => 24,  107 => 23,  104 => 22,  100 => 21,  93 => 15,  85 => 5,  79 => 30,  77 => 21,  71 => 17,  68 => 16,  66 => 15,  58 => 11,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/without-nav.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\partials\\without-nav.html.twig");
    }
}
