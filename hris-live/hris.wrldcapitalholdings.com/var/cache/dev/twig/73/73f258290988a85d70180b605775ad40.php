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

/* forms-datepicker.html.twig */
class __TwigTemplate_67205e0742f097921bc7819cb9f51f6f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-datepicker.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-datepicker.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "forms-datepicker.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Date Picker";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        yield "
            ";
        // line 6
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Forms", "title" => "Date Picker"]);
        yield "


                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Basic Example</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d M, Y\"</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" readonly=\"readonly\" placeholder=\"Select Date\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">DateTime</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d.m.y\" data-enable-time</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d.m.y\" data-enable-time readonly=\"readonly\" placeholder=\"Select date-time\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Human-Friendly Dates</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-altFormat=\"F j, Y\"</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-altFormat=\"F j, Y\" readonly=\"readonly\" placeholder=\"Select Date\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">MinDate and MaxDate</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-minDate=\"Your Min. Date\" data-maxDate=\"Your Max. date\"</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-mindate=\"09 Dec, 2023\" data-maxdate=\"20 Dec,2023\" readonly=\"readonly\" placeholder=\"Select Date\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Default Date</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-default-date=\"Your Default Date\"</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-default-date=\"16 Oct, 2023\" readonly=\"readonly\" placeholder=\"Select Date\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Selecting Multiple Dates</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-multiple-date=\"true\"</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-multiple-date=\"true\" readonly=\"readonly\" placeholder=\"Select Date\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Range</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-range-date=\"true\"</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-range-date=\"true\" readonly=\"readonly\" placeholder=\"Select Date\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Week Numbers</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-week-number</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-week-number readonly=\"readonly\" placeholder=\"Select Date\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Inline</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-default-date=\"today\" data-inline-date=\"true\"</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-default-date=\"19 Nov,2021\" data-inline-date=\"true\">
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 77
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        yield "
<!-- App js -->
<script src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 82
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "forms-datepicker.html.twig";
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
        return array (  193 => 82,  189 => 80,  185 => 78,  175 => 77,  94 => 6,  91 => 5,  81 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Date Picker{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Forms', title: 'Date Picker' }) }}


                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Basic Example</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d M, Y\"</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" readonly=\"readonly\" placeholder=\"Select Date\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">DateTime</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d.m.y\" data-enable-time</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d.m.y\" data-enable-time readonly=\"readonly\" placeholder=\"Select date-time\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Human-Friendly Dates</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-altFormat=\"F j, Y\"</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-altFormat=\"F j, Y\" readonly=\"readonly\" placeholder=\"Select Date\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">MinDate and MaxDate</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-minDate=\"Your Min. Date\" data-maxDate=\"Your Max. date\"</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-mindate=\"09 Dec, 2023\" data-maxdate=\"20 Dec,2023\" readonly=\"readonly\" placeholder=\"Select Date\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Default Date</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-default-date=\"Your Default Date\"</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-default-date=\"16 Oct, 2023\" readonly=\"readonly\" placeholder=\"Select Date\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Selecting Multiple Dates</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-multiple-date=\"true\"</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-multiple-date=\"true\" readonly=\"readonly\" placeholder=\"Select Date\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Range</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-range-date=\"true\"</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-range-date=\"true\" readonly=\"readonly\" placeholder=\"Select Date\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Week Numbers</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-week-number</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-week-number readonly=\"readonly\" placeholder=\"Select Date\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Inline</h6>
                            <p class=\"mb-4\">Set <code class=\"text-xs text-pink-500 select-all\">data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-default-date=\"today\" data-inline-date=\"true\"</code> attribute.</p>
                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-default-date=\"19 Nov,2021\" data-inline-date=\"true\">
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

{% endblock %}
    
{% block javascripts %}

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

{% endblock %}", "forms-datepicker.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\forms-datepicker.html.twig");
    }
}
