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

/* charts-apex-pie.html.twig */
class __TwigTemplate_5b7de136b082d9b9a2d5278e1ada049d extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "charts-apex-pie.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Pie / Donut Charts";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Apexcharts", "title" => "Pie / Donut Charts"]);
        yield "


                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Simple Pie</h6>
                            <div id=\"simplePie\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-orange-500\", \"bg-green-500\", \"bg-yellow-500\", \"bg-purple-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Simple Donut</h6>
                            <div id=\"simpleDonut\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-orange-500\", \"bg-green-500\", \"bg-sky-500\", \"bg-yellow-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Donut Update</h6>
                            <div>
                                <div id=\"updatingDonutChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-400\", \"bg-orange-400\", \"bg-green-400\", \"bg-yellow-400\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                            
                                <div class=\"flex flex-wrap items-start justify-center gap-2 mt-4\">
                                    <button id=\"add\" class=\"px-2 py-1.5 text-xs bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20\">
                                        + ADD
                                    </button>
                            
                                    <button id=\"remove\" class=\"px-2 py-1.5 text-xs bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20\">
                                        - REMOVE
                                    </button>
                            
                                    <button id=\"randomize\" class=\"px-2 py-1.5 text-xs bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20\">
                                        RANDOMIZE
                                    </button>
                            
                                    <button id=\"reset\" class=\"px-2 py-1.5 text-xs bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20\">
                                        RESET
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Monochrome Pie</h6>
                            <div id=\"monochromePieChart\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Gradient Donut</h6>
                            <div id=\"gradientDonut\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-orange-500\", \"bg-green-500\", \"bg-yellow-500\", \"bg-purple-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Semi Donut</h6>
                            <div id=\"semiDonut\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-orange-500\", \"bg-green-500\", \"bg-yellow-500\", \"bg-purple-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Donut with Pattern</h6>
                            <div id=\"donutWithPattern\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-orange-500\", \"bg-green-500\", \"bg-yellow-500\", \"bg-purple-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Pie with Image</h6>
                            <div id=\"pieWithImage\" class=\"apex-charts\" data-chart-colors='[\"bg-custom-500\", \"bg-orange-500\", \"bg-green-500\", \"bg-yellow-500\", \"bg-purple-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

";
        return; yield '';
    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        yield "
<!-- apexcharts js -->
<script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>

<!-- pie init js-->
<script src=\"assets/js/pages/apexcharts-pie.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 93
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "charts-apex-pie.html.twig";
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
        return array (  162 => 93,  158 => 91,  148 => 83,  144 => 82,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "charts-apex-pie.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\charts-apex-pie.html.twig");
    }
}
