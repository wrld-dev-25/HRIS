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

/* charts-apex-line.html.twig */
class __TwigTemplate_c80d2abe49e4e91216710cc59ffc7b4c extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "charts-apex-line.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Calendar";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Apexcharts", "title" => "Calendar"]);
        yield "

    <?php includeFileWithVariables('partials/title-meta', array('title' => 'Apexcharts')); ?>

    <?php include 'partials/head-css'; ?>

</head>


                <?php includeFileWithVariables('partials/page-title', array('pagetitle' => 'Apexcharts', 'title' => 'Apexcharts')); ?>

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Basic</h6>
                            <div id=\"chartLine\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Line with Data Labels</h6>
                            <div id=\"lineWithDataLabel\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-green-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Zoomable Timeseries</h6>
                            <div id=\"zoomableTimeseries\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Line Chart with Annotations</h6>
                            <div id=\"lineWithAnnotations\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Brush Chart</h6>
                            <div>
                                <div id=\"brushChartLine\" class=\"apex-charts\" data-chart-colors='[\"bg-slate-600\"]' dir=\"ltr\"></div>
                                <div id=\"brushChartLine2\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\"]' dir=\"ltr\"></div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Stepline</h6>
                            <div id=\"chartStepline\" class=\"apex-charts\" data-chart-colors='[\"bg-yellow-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Gradient Charts</h6>
                            <div id=\"gradientCharts\" class=\"apex-charts\" data-chart-colors='[\"bg-purple-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Missing / Null Values</h6>
                            <div id=\"missingCharts\" class=\"apex-charts\" data-chart-colors='[\"bg-green-500\", \"bg-sky-500\", \"bg-yellow-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Dashed Charts</h6>
                            <div id=\"dashedCharts\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-orange-500\", \"bg-green-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Realtime Charts</h6>
                            <div id=\"realtimeCharts\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-wrapper -->

        <?php include 'partials/footer'; ?>

    </div>

</div>
<!-- end main content -->

";
        return; yield '';
    }

    // line 97
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        yield "
<script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>

<script src=\"https://apexcharts.com/samples/assets/stock-prices.js\"></script>

<script src=\"assets/js/pages/apexcharts-line.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 108
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "charts-apex-line.html.twig";
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
        return array (  177 => 108,  173 => 106,  163 => 98,  159 => 97,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "charts-apex-line.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\charts-apex-line.html.twig");
    }
}
