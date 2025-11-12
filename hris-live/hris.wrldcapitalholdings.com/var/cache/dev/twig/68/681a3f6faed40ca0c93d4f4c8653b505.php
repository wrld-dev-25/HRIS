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

/* plugins-scroll-hint.html.twig */
class __TwigTemplate_08586d43f1cd607249f29cdf76bf2d4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plugins-scroll-hint.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plugins-scroll-hint.html.twig"));

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

        yield "Scroll Hint";
        
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

        // line 4
        yield "    <link rel=\"stylesheet\" href=\"https://unpkg.com/scroll-hint@latest/css/scroll-hint.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "
            ";
        // line 8
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Plugins", "title" => "Scroll Hint"]);
        yield "


                <div>
                    <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Simple Scroll Hint</h6>
                                <div class=\"overflow-x-auto js-scrollable\">
                                    <table class=\"w-full flex-nowrap\">
                                        <thead class=\"ltr:text-left rtl:text-right\">
                                            <tr>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">ID</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Name</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Position</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Office</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Age</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Start date</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">1</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Tiger Nixon</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">System Architect</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Edinburgh</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">61</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2011-04-25</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$320,800</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Garrett Winters</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Accountant</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Tokyo</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">63</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2011-07-25</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$170,750</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">3</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Ashton Cox</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Junior Technical Author</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">San Francisco</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">66</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2009-01-12</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$86,000</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">4</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Cedric Kelly</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Senior Javascript Developer</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Edinburgh</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">22</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2012-03-29</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$433,060</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">5</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Airi Satou</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Accountant</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Tokyo</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">33</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2008-11-28</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$162,700</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">6</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Brielle Williamson</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Integration Specialist</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">New York</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">61</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2012-12-02</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$372,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end grid-->
                </div>
            

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 95
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

        // line 96
        yield "<script src=\"assets/libs/scroll-hint/js/scroll-hint.min.js\"></script>
<script src=\"assets/js/pages/plugins-scroll-hint.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 102
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
        return "plugins-scroll-hint.html.twig";
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
        return array (  250 => 102,  246 => 100,  240 => 96,  227 => 95,  130 => 8,  127 => 7,  114 => 6,  102 => 4,  89 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Scroll Hint{% endblock %}
{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"https://unpkg.com/scroll-hint@latest/css/scroll-hint.css\">
{% endblock %}
{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Plugins', title: 'Scroll Hint' }) }}


                <div>
                    <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Simple Scroll Hint</h6>
                                <div class=\"overflow-x-auto js-scrollable\">
                                    <table class=\"w-full flex-nowrap\">
                                        <thead class=\"ltr:text-left rtl:text-right\">
                                            <tr>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">ID</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Name</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Position</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Office</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Age</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Start date</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">1</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Tiger Nixon</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">System Architect</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Edinburgh</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">61</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2011-04-25</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$320,800</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Garrett Winters</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Accountant</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Tokyo</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">63</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2011-07-25</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$170,750</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">3</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Ashton Cox</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Junior Technical Author</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">San Francisco</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">66</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2009-01-12</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$86,000</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">4</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Cedric Kelly</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Senior Javascript Developer</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Edinburgh</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">22</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2012-03-29</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$433,060</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">5</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Airi Satou</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Accountant</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Tokyo</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">33</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2008-11-28</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$162,700</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">6</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Brielle Williamson</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Integration Specialist</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">New York</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">61</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2012-12-02</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$372,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end grid-->
                </div>
            

{% endblock %}
    
{% block javascripts %}
<script src=\"assets/libs/scroll-hint/js/scroll-hint.min.js\"></script>
<script src=\"assets/js/pages/plugins-scroll-hint.init.js\"></script>

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}
    
{% endblock %}", "plugins-scroll-hint.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\plugins-scroll-hint.html.twig");
    }
}
