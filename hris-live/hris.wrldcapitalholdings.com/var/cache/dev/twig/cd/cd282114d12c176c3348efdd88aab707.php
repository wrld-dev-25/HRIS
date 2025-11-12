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

/* navigation-breadcrumb.html.twig */
class __TwigTemplate_34bbf2fc4ce19cdc20af7a1e4c91c4d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navigation-breadcrumb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navigation-breadcrumb.html.twig"));

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

        yield "Breadcrumb";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "                ";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Navigation", "title" => "Breadcrumb"]);
        yield "

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Basic Breadcrumb</h6>

                        <ul class=\"flex flex-wrap items-center gap-2 mb-3 text-sm font-normal\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Settings</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Personal Information
                            </li>
                        </ul>

                        <ul class=\"flex flex-wrap items-center gap-2 mb-3 text-sm font-normal\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"flex items-center gap-1 text-slate-500 dark:text-zink-200\"><i data-lucide=\"home\" class=\"size-3\"></i> Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"flex items-center gap-1 text-slate-500 dark:text-zink-200\"><i data-lucide=\"settings\" class=\"size-3\"></i> Settings</a>
                            </li>
                            <li class=\"flex items-center gap-1 text-slate-700 dark:text-zink-100\">
                                <i data-lucide=\"user-2\" class=\"size-3\"></i> Personal Information
                            </li>
                        </ul>

                        <ul class=\"flex flex-wrap items-center gap-2 mb-3 text-sm font-normal\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Cooking</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Banking</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Bread Shape
                            </li>
                        </ul>

                        <ul class=\"flex flex-wrap items-center gap-2 text-sm font-normal\">
                            <li class=\"relative before:content-['\\ea6d'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea6d'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Settings</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Personal Information
                            </li>
                        </ul>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Sizes</h6>

                        <ul class=\"flex flex-wrap items-center gap-2 mb-3 text-sm font-normal\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:-right-1 before:absolute before:text-[18px] before:top-0 pr-4 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:-right-1 before:absolute before:text-[18px] before:top-0 pr-4 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Cooking</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:-right-1 before:absolute before:text-[18px] before:top-0 pr-4 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Banking</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Bread Shape
                            </li>
                        </ul>

                        <ul class=\"flex flex-wrap items-center gap-2 mb-3 text-sm font-normal\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Cooking</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Banking</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Bread Shape
                            </li>
                        </ul>

                        <ul class=\"flex flex-wrap items-center gap-2 mb-3 font-normal text-15\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Cooking</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Banking</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Bread Shape
                            </li>
                        </ul>
                        <ul class=\"flex flex-wrap items-center gap-2 mb-3 font-normal text-16\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-lg before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-lg before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Cooking</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-lg before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Banking</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Bread Shape
                            </li>
                        </ul>
                        <ul class=\"flex flex-wrap items-center gap-2 text-lg font-normal\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text- before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text- before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Cooking</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text- before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Banking</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Bread Shape
                            </li>
                        </ul>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Boxed Breadcrumb</h6>

                        <ul class=\"inline-flex flex-wrap items-center gap-2 p-3 mb-3 text-sm font-normal rounded bg-slate-100 dark:bg-zink-600\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Settings</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Personal Information
                            </li>
                        </ul>

                        <div class=\"mb-3\">
                            <ul class=\"inline-flex flex-wrap items-center gap-2 p-3 text-sm font-normal rounded bg-slate-100 dark:bg-zink-600\">
                                <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                    <a href=\"#!\" class=\"flex items-center gap-1 text-slate-500 dark:text-zink-200\"><i data-lucide=\"home\" class=\"size-3\"></i> Home</a>
                                </li>
                                <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                    <a href=\"#!\" class=\"flex items-center gap-1 text-slate-500 dark:text-zink-200\"><i data-lucide=\"settings\" class=\"size-3\"></i> Settings</a>
                                </li>
                                <li class=\"flex items-center gap-1 text-slate-700 dark:text-zink-100\">
                                    <i data-lucide=\"user-2\" class=\"size-3\"></i> Personal Information
                                </li>
                            </ul>
                        </div>

                        <ul class=\"flex flex-wrap items-center gap-2 text-sm font-normal rounded\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-5 before:rtl:-left-5 before:absolute before:text-xl before:top-1.5 ltr:mr-4 rtl:ml-4 before:text-slate-500 dark:before:text-zink-200 px-3 py-2 bg-slate-100 dark:bg-zink-600 rounded  before:rtl:rotate-180\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-5 before:rtl:-left-5 before:absolute before:text-xl before:top-1.5 ltr:mr-4 rtl:ml-4 before:text-slate-500 dark:before:text-zink-200 px-3 py-2 bg-slate-100 dark:bg-zink-600 rounded  before:rtl:rotate-180\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Settings</a>
                            </li>
                            <li class=\"px-3 py-2 rounded text-custom-500 bg-custom-100 dark:bg-zink-600\">
                                Personal Information
                            </li>
                        </ul>
                    </div>
                </div><!--end card-->


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 190
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

        // line 191
        yield "
<!-- App js -->
<script src=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 195
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
        return "navigation-breadcrumb.html.twig";
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
        return array (  318 => 195,  314 => 193,  310 => 191,  297 => 190,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Breadcrumb{% endblock %}

{% block content %}
                {{ component('breadcrumb', { pagetitle: 'Navigation', title: 'Breadcrumb' }) }}

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Basic Breadcrumb</h6>

                        <ul class=\"flex flex-wrap items-center gap-2 mb-3 text-sm font-normal\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Settings</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Personal Information
                            </li>
                        </ul>

                        <ul class=\"flex flex-wrap items-center gap-2 mb-3 text-sm font-normal\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"flex items-center gap-1 text-slate-500 dark:text-zink-200\"><i data-lucide=\"home\" class=\"size-3\"></i> Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"flex items-center gap-1 text-slate-500 dark:text-zink-200\"><i data-lucide=\"settings\" class=\"size-3\"></i> Settings</a>
                            </li>
                            <li class=\"flex items-center gap-1 text-slate-700 dark:text-zink-100\">
                                <i data-lucide=\"user-2\" class=\"size-3\"></i> Personal Information
                            </li>
                        </ul>

                        <ul class=\"flex flex-wrap items-center gap-2 mb-3 text-sm font-normal\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Cooking</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Banking</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Bread Shape
                            </li>
                        </ul>

                        <ul class=\"flex flex-wrap items-center gap-2 text-sm font-normal\">
                            <li class=\"relative before:content-['\\ea6d'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea6d'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Settings</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Personal Information
                            </li>
                        </ul>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Sizes</h6>

                        <ul class=\"flex flex-wrap items-center gap-2 mb-3 text-sm font-normal\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:-right-1 before:absolute before:text-[18px] before:top-0 pr-4 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:-right-1 before:absolute before:text-[18px] before:top-0 pr-4 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Cooking</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:-right-1 before:absolute before:text-[18px] before:top-0 pr-4 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Banking</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Bread Shape
                            </li>
                        </ul>

                        <ul class=\"flex flex-wrap items-center gap-2 mb-3 text-sm font-normal\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Cooking</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Banking</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Bread Shape
                            </li>
                        </ul>

                        <ul class=\"flex flex-wrap items-center gap-2 mb-3 font-normal text-15\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Cooking</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Banking</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Bread Shape
                            </li>
                        </ul>
                        <ul class=\"flex flex-wrap items-center gap-2 mb-3 font-normal text-16\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-lg before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-lg before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Cooking</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-lg before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Banking</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Bread Shape
                            </li>
                        </ul>
                        <ul class=\"flex flex-wrap items-center gap-2 text-lg font-normal\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text- before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text- before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Cooking</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text- before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Banking</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Bread Shape
                            </li>
                        </ul>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Boxed Breadcrumb</h6>

                        <ul class=\"inline-flex flex-wrap items-center gap-2 p-3 mb-3 text-sm font-normal rounded bg-slate-100 dark:bg-zink-600\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Settings</a>
                            </li>
                            <li class=\"text-slate-700 dark:text-zink-100\">
                                Personal Information
                            </li>
                        </ul>

                        <div class=\"mb-3\">
                            <ul class=\"inline-flex flex-wrap items-center gap-2 p-3 text-sm font-normal rounded bg-slate-100 dark:bg-zink-600\">
                                <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                    <a href=\"#!\" class=\"flex items-center gap-1 text-slate-500 dark:text-zink-200\"><i data-lucide=\"home\" class=\"size-3\"></i> Home</a>
                                </li>
                                <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-1 before:rtl:-left-1 before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:rtl:rotate-180 before:text-slate-500 dark:before:text-zink-200\">
                                    <a href=\"#!\" class=\"flex items-center gap-1 text-slate-500 dark:text-zink-200\"><i data-lucide=\"settings\" class=\"size-3\"></i> Settings</a>
                                </li>
                                <li class=\"flex items-center gap-1 text-slate-700 dark:text-zink-100\">
                                    <i data-lucide=\"user-2\" class=\"size-3\"></i> Personal Information
                                </li>
                            </ul>
                        </div>

                        <ul class=\"flex flex-wrap items-center gap-2 text-sm font-normal rounded\">
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-5 before:rtl:-left-5 before:absolute before:text-xl before:top-1.5 ltr:mr-4 rtl:ml-4 before:text-slate-500 dark:before:text-zink-200 px-3 py-2 bg-slate-100 dark:bg-zink-600 rounded  before:rtl:rotate-180\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Home</a>
                            </li>
                            <li class=\"relative before:content-['\\ea54'] before:font-remix before:ltr:-right-5 before:rtl:-left-5 before:absolute before:text-xl before:top-1.5 ltr:mr-4 rtl:ml-4 before:text-slate-500 dark:before:text-zink-200 px-3 py-2 bg-slate-100 dark:bg-zink-600 rounded  before:rtl:rotate-180\">
                                <a href=\"#!\" class=\"text-slate-500 dark:text-zink-200\">Settings</a>
                            </li>
                            <li class=\"px-3 py-2 rounded text-custom-500 bg-custom-100 dark:bg-zink-600\">
                                Personal Information
                            </li>
                        </ul>
                    </div>
                </div><!--end card-->


{% endblock %}
    
{% block javascripts %}

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

{% endblock %}", "navigation-breadcrumb.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\navigation-breadcrumb.html.twig");
    }
}
