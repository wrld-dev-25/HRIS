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

/* partials/base.html.twig */
class __TwigTemplate_e550b4fad62449548603dc4bc6bf6328 extends Template
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
        yield from         $this->loadTemplate("partials/_main.html.twig", "partials/base.html.twig", 1)->unwrap()->yield($context);
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
        // line 13
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 25
        yield "        ";
        yield from         $this->loadTemplate("partials/_head-css.html.twig", "partials/base.html.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "
    </head>
";
        // line 28
        yield from         $this->loadTemplate("partials/_body.html.twig", "partials/base.html.twig", 28)->unwrap()->yield($context);
        // line 29
        yield "        ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 68
        yield "        
    </body>
    ";
        // line 70
        yield ((array_key_exists("errorScript", $context)) ? (Twig\Extension\CoreExtension::default(($context["errorScript"] ?? null), "")) : (""));
        yield "
</html>

";
        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Welcome";
        return; yield '';
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "            <style>
                /* Example inline CSS */
                .hidden {
                    display: none;
                }
                .disabled {
                    pointer-events: none;
                    opacity: 0.5;
                }
            </style>
        ";
        return; yield '';
    }

    // line 29
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "
        <div class=\"group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative\">

            ";
        // line 33
        yield from         $this->loadTemplate("partials/_menu.html.twig", "partials/base.html.twig", 33)->unwrap()->yield($context);
        // line 34
        yield "
            <div id=\"page-loader\" class=\"flex min-h-screen group-data-[sidebar-size=sm]:min-h-sm bg-white-500\">
                <div class=\"pw-loader\"></div>
            </div>

            <div id=\"content-wrapper\" class=\"relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm hidden\">

                ";
        // line 41
        yield from         $this->loadTemplate("partials/_page-wrapper.html.twig", "partials/base.html.twig", 41)->unwrap()->yield($context);
        // line 42
        yield "
                    <div class=\"container-fluid group-data-[content=boxed]:max-w-boxed mx-auto\">

                        ";
        // line 45
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 47
        yield "
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                ";
        // line 53
        yield from         $this->loadTemplate("partials/_footer.html.twig", "partials/base.html.twig", 53)->unwrap()->yield($context);
        // line 54
        yield "
            </div>

        </div>
        <!-- end main content -->


        ";
        // line 61
        yield from         $this->loadTemplate("partials/_customizer.html.twig", "partials/base.html.twig", 61)->unwrap()->yield($context);
        // line 62
        yield "
        ";
        // line 63
        yield from         $this->loadTemplate("partials/_vendor-scripts.html.twig", "partials/base.html.twig", 63)->unwrap()->yield($context);
        // line 64
        yield "        ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 66
        yield "
        ";
        return; yield '';
    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "                        ";
        return; yield '';
    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/base.html.twig";
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
        return array (  189 => 64,  181 => 45,  175 => 66,  172 => 64,  170 => 63,  167 => 62,  165 => 61,  156 => 54,  154 => 53,  146 => 47,  144 => 45,  139 => 42,  137 => 41,  128 => 34,  126 => 33,  121 => 30,  117 => 29,  99 => 13,  91 => 5,  82 => 70,  78 => 68,  75 => 29,  73 => 28,  69 => 26,  66 => 25,  64 => 13,  58 => 11,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/base.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\partials\\base.html.twig");
    }
}
