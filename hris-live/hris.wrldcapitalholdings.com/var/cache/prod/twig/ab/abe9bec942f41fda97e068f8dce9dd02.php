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

/* charts-apex-candlstick.html.twig */
class __TwigTemplate_a19fde7f106a2ae063e6de1859f75561 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "charts-apex-candlstick.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Candlstick Charts";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Apexcharts", "title" => "Candlstick Charts"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Simple</h6>
                            <div id=\"basicChart\" class=\"apex-charts\" data-chart-colors='[\"bg-green-500\", \"bg-red-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Candlestick Synced with Brush Chart (Combo)</h6>
                            <div>
                                <div id=\"combo_candlestick\" data-chart-colors='[\"bg-sky-500\", \"bg-orange-500\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                                <div id=\"combo_candlestick_chart\" data-chart-colors='[\"bg-yellow-500\", \"bg-red-500\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Category x-axis</h6>
                            <div id=\"categoryCandlestick\" class=\"apex-charts\" data-chart-colors='[\"bg-green-500\", \"bg-red-500\", \"bg-sky-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Candlestick with Line</h6>
                            <div id=\"candlestickWithLine\" class=\"apex-charts\" data-chart-colors='[\"bg-green-500\", \"bg-red-500\"]' dir=\"ltr\"></div>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

";
        return; yield '';
    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "
<!-- apexcharts js -->
<script src=\"assets/libs/apexcharts/apexcharts.min.js\"></script>

<script src=\"https://apexcharts.com/samples/assets/ohlc.js\"></script>
<!-- for Category x-axis chart -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.8.17/dayjs.min.js\"></script>

<!-- candlstick init js-->
<script src=\"assets/js/pages/apexcharts-candlstick.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 55
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "charts-apex-candlstick.html.twig";
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
        return array (  124 => 55,  120 => 53,  106 => 41,  102 => 40,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "charts-apex-candlstick.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/charts-apex-candlstick.html.twig");
    }
}
