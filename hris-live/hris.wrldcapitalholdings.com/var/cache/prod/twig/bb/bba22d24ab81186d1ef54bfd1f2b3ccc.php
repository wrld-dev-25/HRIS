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

/* tables-gridjs.html.twig */
class __TwigTemplate_1236ee4dada12d77b1f184c459a23724 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "tables-gridjs.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Grid JS";
        return; yield '';
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
            ";
        // line 7
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Tables", "title" => "Grid JS"]);
        yield "

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Basic Table</h6>
                        <div id=\"basic_tables\"></div>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Pagination</h6>
                        <p class=\"mb-4 text-slate-400\">Pagination can be enabled by setting <code class=\"text-xs text-pink-500 select-all\">pagination: true</code>.</p>
                        <div id=\"pagination_tables\"></div>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Search</h6>
                        <p class=\"mb-4 text-slate-400\">Grid.js supports global search on all rows and columns. Set <code class=\"text-xs text-pink-500 select-all\">search: true</code> to enable the search plugin:</p>
                        <div id=\"search_tables\"></div>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Sorting</h6>
                        <p class=\"mb-4 text-slate-400\">To enable sorting, simply add <code class=\"text-xs text-pink-500 select-all\">sort: true</code> to your config:</p>
                        <div id=\"table_sorting\"></div>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Resizable Columns</h6>
                        <p class=\"mb-4 text-slate-400\">Simply add <code class=\"text-xs text-pink-500 select-all\">resizable: true</code> to your config to enable resizable columns:</p>
                        <div id=\"resizable_columns\"></div>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Loading State</h6>
                        <p class=\"mb-4 text-slate-400\">Grid.js renders a loading bar automatically while it waits for the data to be fetched. Here we are using an async function to demonstrate this behaviour (e.g. an async function can be a XHR call to a server backend)</p>
                        <div id=\"table_loading_state\"></div>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Fixed Header</h6>
                        <p class=\"mb-4 text-slate-400\">Simply add <code class=\"text-xs text-pink-500 select-all\">height</code> and <code class=\"text-xs text-pink-500 select-all\">fixedHeader</code> to your Grid.js config object to enable fixed header feature:</p>
                        <div id=\"table_fixed_header\"></div>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Hidden Columns</h6>
                        <p class=\"mb-4 text-slate-400\">Add <code class=\"text-xs text-pink-500 select-all\">hidden: true</code> to the columns definition to hide them.</p>
                        <div id=\"table_hidden_column\"></div>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Cell formatting</h6>
                        <p class=\"mb-4 text-slate-400\">You can customize cells and format them at runtime using <code class=\"text-xs text-pink-500 select-all\">formatter</code> property:</p>
                        <div id=\"cell_formatting\"></div>
                    </div>
                </div><!--end card-->

";
        return; yield '';
    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        yield "
<script src=\"assets/libs/gridjs/gridjs.umd.js\"></script>

<script src=\"assets/js/pages/tables-grid.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 91
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "tables-gridjs.html.twig";
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
        return array (  167 => 91,  163 => 89,  155 => 83,  151 => 82,  72 => 7,  69 => 6,  65 => 5,  58 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "tables-gridjs.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\tables-gridjs.html.twig");
    }
}
