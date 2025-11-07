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

/* maps-leaflet.html.twig */
class __TwigTemplate_e977f8ac57bc89eca95791dbc08c8fff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "maps-leaflet.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Leaflet";
        return; yield '';
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <!-- leaflet Css -->
    <link href=\"assets/libs/leaflet/leaflet.css\" rel=\"stylesheet\" type=\"text/css\">
";
        return; yield '';
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "                ";
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Maps", "title" => "Leaflet"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Example</h6>
                            <div id=\"leaflet-map\" class=\"leaflet-map\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Markers, Circles and Polygons</h6>
                            <div id=\"leaflet-map-marker\" class=\"leaflet-map\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Working with Popups</h6>
                            <div id=\"leaflet-map-popup\" class=\"leaflet-map\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Markers with Custom Icons</h6>
                            <div id=\"leaflet-map-custom-icons\" class=\"leaflet-map\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Interactive Choropleth Map</h6>
                            <div id=\"leaflet-map-interactive-map\" class=\"leaflet-map\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Layer Groups and Layers Control</h6>
                            <div id=\"leaflet-map-group-control\" class=\"leaflet-map\"></div>
                        </div>
                    </div><!--end card-->
                </div>

";
        return; yield '';
    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        yield "
<!-- leaflet plugin -->
<script src=\"assets/libs/leaflet/leaflet.js\"></script>

<!-- leaflet map.init -->
<script src=\"assets/js/pages/leaflet-us-states.js\"></script>
<script src=\"assets/js/pages/leaflet-map.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 63
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "maps-leaflet.html.twig";
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
        return array (  139 => 63,  135 => 61,  124 => 52,  120 => 51,  72 => 8,  68 => 7,  58 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "maps-leaflet.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/maps-leaflet.html.twig");
    }
}
