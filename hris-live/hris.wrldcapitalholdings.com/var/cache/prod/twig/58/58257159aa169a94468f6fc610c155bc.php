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

/* charts-apex-column.html.twig */
class __TwigTemplate_b641a97c81cd5c48ed2328a837190912 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "charts-apex-column.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Column Charts";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Apexcharts", "title" => "Column Charts"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Basic</h6>
                            <div id=\"basicColumnChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-yellow-500\", \"bg-purple-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Column with Data Labels</h6>
                            <div id=\"columnWithDatalabelChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Stacked Columns</h6>
                            <div id=\"stackedColumnChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-orange-500\", \"bg-green-500\", \"bg-yellow-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Stacked Columns 100</h6>
                            <div id=\"stackedColumn100Chart\" class=\"apex-charts\" data-chart-colors='[\"bg-sky-500\", \"bg-orange-500\", \"bg-yellow-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Grouped Stacked Columns</h6>
                            <div id=\"groupedStackedColumnChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-green-500\", \"bg-custom-300\", \"bg-green-300\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Dumbbell Chart</h6>
                            <div id=\"dumbbellChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-green-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Column with Markers</h6>
                            <div id=\"columnMarkersChart\" class=\"apex-charts\" data-chart-colors='[\"bg-sky-500\", \"bg-purple-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Column with Group Label</h6>
                            <div id=\"columnGroupLabelChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Column with Rotated Labels</h6>
                            <div id=\"columnRotatedLabelChart\" class=\"apex-charts\" data-chart-colors='[\"bg-red-500\", \"bg-custom-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Column with Negative Values</h6>
                            <div id=\"columnNegativeValueChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-yellow-500\", \"bg-orange-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Distributed Columns</h6>
                            <div id=\"columnDistributedChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-yellow-500\", \"bg-green-500\", \"bg-orange-500\", \"bg-sky-500\", \"bg-purple-500\", \"bg-red-500\", \"bg-emerald-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

       

";
        return; yield '';
    }

    // line 81
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        yield "
<!-- apexcharts js -->
<script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/dayjs.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.11.0/plugin/quarterOfYear.min.js\"></script>

<!-- column init js-->
<script src=\"assets/js/pages/apexcharts-column.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 95
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "charts-apex-column.html.twig";
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
        return array (  164 => 95,  160 => 93,  147 => 82,  143 => 81,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "charts-apex-column.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/charts-apex-column.html.twig");
    }
}
