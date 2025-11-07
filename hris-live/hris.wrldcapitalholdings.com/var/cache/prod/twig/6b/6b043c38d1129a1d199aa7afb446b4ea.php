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

/* charts-apex-bar.html.twig */
class __TwigTemplate_31a2983531241e7fe704da46ab6d4561 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "charts-apex-bar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Bar Charts";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Apexcharts", "title" => "Bar Charts"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Basic</h6>
                            <div id=\"basicBar\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Grouped Chart</h6>
                            <div id=\"GroupedChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-green-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Stacked Bar</h6>
                            <div id=\"stackedChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-green-500\", \"bg-orange-500\", \"bg-yellow-500\", \"bg-purple-500\", \"bg-red-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Stacked Bars 100</h6>
                            <div id=\"stackedBar100Chart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-green-500\", \"bg-orange-500\", \"bg-yellow-500\", \"bg-purple-500\", \"bg-red-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Grouped Stacked Bars</h6>
                            <div id=\"groupedStackedChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-green-500\", \"bg-custom-300\", \"bg-green-300\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Bar with Negative Values</h6>
                            <div id=\"negativeValuesChart\" class=\"apex-charts\" data-chart-colors='[\"bg-red-500\", \"bg-sky-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Bar with Markers</h6>
                            <div id=\"markersChart\" class=\"apex-charts\" data-chart-colors='[\"bg-green-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Reversed Bar Chart</h6>
                            <div id=\"reversedChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Custom DataLabels Bar</h6>
                            <div id=\"customDataLabelsChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-orange-500\", \"bg-green-500\", \"bg-sky-500\", \"bg-yellow-500\", \"bg-red-500\", \"bg-purple-500\", \"bg-slate-300\", \"bg-slate-800\", \"bg-emerald-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Patterned Bar</h6>
                            <div id=\"patternedChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-green-500\", \"bg-orange-500\", \"bg-yellow-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Bar with Images</h6>
                            <div id=\"barWithImagesChart\" class=\"apex-charts\" dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

";
        return; yield '';
    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 80
        yield "
<!-- apexcharts js -->
<script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>

<!-- barcharts init js-->
<script src=\"assets/js/pages/apexcharts-bar.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 90
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "charts-apex-bar.html.twig";
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
        return array (  159 => 90,  155 => 88,  145 => 80,  141 => 79,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "charts-apex-bar.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/charts-apex-bar.html.twig");
    }
}
