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
use Twig\TemplateWrapper;

/* tables-gridjs.html.twig */
class __TwigTemplate_6e984890c86ef51b612c11ba0ed0b8c1 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

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

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tables-gridjs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tables-gridjs.html.twig"));

        $this->parent = $this->load("partials/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Grid JS";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Tables", "title" => "Grid JS"]);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 82
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tables-gridjs.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  237 => 91,  233 => 89,  225 => 83,  212 => 82,  127 => 7,  124 => 6,  111 => 5,  89 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Grid JS{% endblock %}
{% block stylesheets %}
{% endblock %}
{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Tables', title: 'Grid JS' }) }}

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

{% endblock %}
    
{% block javascripts %}

<script src=\"assets/libs/gridjs/gridjs.umd.js\"></script>

<script src=\"assets/js/pages/tables-grid.init.js\"></script>

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

{% endblock %}", "tables-gridjs.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\tables-gridjs.html.twig");
    }
}
