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

/* charts-apex-range-area.html.twig */
class __TwigTemplate_d512130d3c1ded1c3d886b5c5fac41f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("partials/base.html.twig", "charts-apex-range-area.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Range Area Charts";
        return; yield '';
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "
            ";
        // line 6
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Apexcharts", "title" => "Range Area Charts"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Basic Range Area</h6>
                            <div id=\"basicRangeArea\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Combo Range Area</h6>
                            <div id=\"comboRangeAreaChart\" class=\"apex-charts\" data-chart-colors='[\"bg-sky-100\", \"bg-orange-100\", \"bg-sky-500\", \"bg-orange-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

";
        return; yield '';
    }

    // line 25
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        yield "
<!-- apexcharts js -->
<script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>

<!-- range-area init js-->
<script src=\"assets/js/pages/apexcharts-range-area.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 36
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "charts-apex-range-area.html.twig";
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
        return array (  105 => 36,  101 => 34,  91 => 26,  87 => 25,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "charts-apex-range-area.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\charts-apex-range-area.html.twig");
    }
}
