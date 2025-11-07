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

/* charts-apex-heatmap.html.twig */
class __TwigTemplate_72f97290a1a51d41fd18f632ae1002bc extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "charts-apex-heatmap.html.twig", 1);
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

    <?php includeFileWithVariables('partials/title-meta', array('title' => 'Heatmap Chart')); ?>

    <?php include 'partials/head-css'; ?>

</head>


                <?php includeFileWithVariables('partials/page-title', array('pagetitle' => 'Apexcharts', 'title' => 'Heatmap Chart')); ?>

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Basic</h6>
                            <div id=\"basicHeatmap\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Multiple Colors</h6>
                            <div id=\"multipleColorsHeatmap\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-purple-500\", \"bg-orange-500\", \"bg-yellow-500\", \"bg-green-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Color Range</h6>
                            <div id=\"ColorsRangeHeatmap\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-purple-500\", \"bg-orange-500\", \"bg-yellow-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Rounded (Range without Shades)</h6>
                            <div id=\"RoundedRangeHeatmap\" class=\"apex-charts\" data-chart-colors='[\"bg-sky-500\", \"bg-green-500\"]' dir=\"ltr\"></div>
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

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        yield "
<!-- apexcharts js -->
<script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>

<!-- heatmap init js-->
<script src=\"assets/js/pages/apexcharts-heatmap.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 69
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "charts-apex-heatmap.html.twig";
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
        return array (  138 => 69,  134 => 67,  124 => 59,  120 => 58,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "charts-apex-heatmap.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/charts-apex-heatmap.html.twig");
    }
}
