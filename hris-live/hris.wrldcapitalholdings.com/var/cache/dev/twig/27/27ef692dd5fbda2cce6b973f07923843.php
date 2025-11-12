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

/* icons-remix.html.twig */
class __TwigTemplate_4dadb432ec959aa68f407c9f99e1d822 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icons-remix.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "icons-remix.html.twig"));

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

        yield "Remix Icons";
        
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
        yield "
            ";
        // line 6
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Icons", "title" => "Remix Icons"]);
        yield "

                <div class=\"px-4 py-3 mb-4 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-400/20\">
                    <a href=\"https://remixicon.com\" class=\"font-semibold underline\" target=\"_blank\">https://remixicon.com</a> Open-source neutral-style system symbols elaborately crafted for designers and developers. All of the icons are free for both personal and commercial use.
                </div>

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Simple Icons (2500+)</h6>
                        <div class=\"flex flex-wrap justify-center gap-4 mb-5\">
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"home-4-line\">
                                <i class=\"ri-home-4-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"home-4-fill\">
                                <i class=\"ri-home-4-fill\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"arrow-right-line\">
                                <i class=\"ri-arrow-right-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"arrow-left-line\">
                                <i class=\"ri-arrow-left-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"building-line\">
                                <i class=\"ri-building-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"bank-line\">
                                <i class=\"ri-bank-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"mail-line\">
                                <i class=\"ri-mail-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"mail-fill\">
                                <i class=\"ri-mail-fill\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"cloud-line\">
                                <i class=\"ri-cloud-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"award-line\">
                                <i class=\"ri-award-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"pie-chart-line\">
                                <i class=\"ri-pie-chart-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"briefcase-2-line\">
                                <i class=\"ri-briefcase-2-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"calendar-line\">
                                <i class=\"ri-calendar-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"bookmark-line\">
                                <i class=\"ri-bookmark-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"global-line\">
                                <i class=\"ri-global-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"customer-service-2-line\">
                                <i class=\"ri-customer-service-2-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"printer-line\">
                                <i class=\"ri-printer-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"stack-line\">
                                <i class=\"ri-stack-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"question-answer-line\">
                                <i class=\"ri-question-answer-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"ball-pen-line\">
                                <i class=\"ri-ball-pen-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"brush-2-line\">
                                <i class=\"ri-brush-2-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"scissors-line\">
                                <i class=\"ri-scissors-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"eraser-line\">
                                <i class=\"ri-eraser-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"pencil-ruler-2-line\">
                                <i class=\"ri-pencil-ruler-2-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"tools-line\">
                                <i class=\"ri-tools-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"layout-line\">
                                <i class=\"ri-layout-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"braces-line\">
                                <i class=\"ri-braces-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"phone-line\">
                                <i class=\"ri-phone-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"database-2-line\">
                                <i class=\"ri-database-2-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"save-line\">
                                <i class=\"ri-save-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"airplay-line\">
                                <i class=\"ri-airplay-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"shut-down-line\">
                                <i class=\"ri-shut-down-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"gps-line\">
                                <i class=\"ri-gps-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"file-copy-line\">
                                <i class=\"ri-file-copy-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"file-line\">
                                <i class=\"ri-file-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"file-zip-line\">
                                <i class=\"ri-file-zip-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"folder-2-line\">
                                <i class=\"ri-folder-2-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"wallet-line\">
                                <i class=\"ri-wallet-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"vip-crown-line\">
                                <i class=\"ri-vip-crown-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"trophy-line\">
                                <i class=\"ri-trophy-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"coupon-line\">
                                <i class=\"ri-coupon-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"shopping-bag-line\">
                                <i class=\"ri-shopping-bag-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"gift-line\">
                                <i class=\"ri-gift-line\"></i>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <a href=\"https://remixicon.com/\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100\">Remix Icons Library</a>
                        </div>
                    </div>
                </div><!--end card-->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 154
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

        // line 155
        yield "
<!-- App js -->
<script src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 159
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
        return "icons-remix.html.twig";
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
        return array (  283 => 159,  279 => 157,  275 => 155,  262 => 154,  104 => 6,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Remix Icons{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Icons', title: 'Remix Icons' }) }}

                <div class=\"px-4 py-3 mb-4 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-400/20\">
                    <a href=\"https://remixicon.com\" class=\"font-semibold underline\" target=\"_blank\">https://remixicon.com</a> Open-source neutral-style system symbols elaborately crafted for designers and developers. All of the icons are free for both personal and commercial use.
                </div>

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Simple Icons (2500+)</h6>
                        <div class=\"flex flex-wrap justify-center gap-4 mb-5\">
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"home-4-line\">
                                <i class=\"ri-home-4-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"home-4-fill\">
                                <i class=\"ri-home-4-fill\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"arrow-right-line\">
                                <i class=\"ri-arrow-right-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"arrow-left-line\">
                                <i class=\"ri-arrow-left-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"building-line\">
                                <i class=\"ri-building-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"bank-line\">
                                <i class=\"ri-bank-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"mail-line\">
                                <i class=\"ri-mail-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"mail-fill\">
                                <i class=\"ri-mail-fill\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"cloud-line\">
                                <i class=\"ri-cloud-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"award-line\">
                                <i class=\"ri-award-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"pie-chart-line\">
                                <i class=\"ri-pie-chart-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"briefcase-2-line\">
                                <i class=\"ri-briefcase-2-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"calendar-line\">
                                <i class=\"ri-calendar-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"bookmark-line\">
                                <i class=\"ri-bookmark-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"global-line\">
                                <i class=\"ri-global-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"customer-service-2-line\">
                                <i class=\"ri-customer-service-2-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"printer-line\">
                                <i class=\"ri-printer-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"stack-line\">
                                <i class=\"ri-stack-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"question-answer-line\">
                                <i class=\"ri-question-answer-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"ball-pen-line\">
                                <i class=\"ri-ball-pen-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"brush-2-line\">
                                <i class=\"ri-brush-2-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"scissors-line\">
                                <i class=\"ri-scissors-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"eraser-line\">
                                <i class=\"ri-eraser-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"pencil-ruler-2-line\">
                                <i class=\"ri-pencil-ruler-2-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"tools-line\">
                                <i class=\"ri-tools-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"layout-line\">
                                <i class=\"ri-layout-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"braces-line\">
                                <i class=\"ri-braces-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"phone-line\">
                                <i class=\"ri-phone-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"database-2-line\">
                                <i class=\"ri-database-2-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"save-line\">
                                <i class=\"ri-save-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"airplay-line\">
                                <i class=\"ri-airplay-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"shut-down-line\">
                                <i class=\"ri-shut-down-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"gps-line\">
                                <i class=\"ri-gps-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"file-copy-line\">
                                <i class=\"ri-file-copy-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"file-line\">
                                <i class=\"ri-file-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"file-zip-line\">
                                <i class=\"ri-file-zip-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"folder-2-line\">
                                <i class=\"ri-folder-2-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"wallet-line\">
                                <i class=\"ri-wallet-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"vip-crown-line\">
                                <i class=\"ri-vip-crown-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"trophy-line\">
                                <i class=\"ri-trophy-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"coupon-line\">
                                <i class=\"ri-coupon-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"shopping-bag-line\">
                                <i class=\"ri-shopping-bag-line\"></i>
                            </div>
                            <div class=\"flex items-center justify-center size-12 text-lg border rounded-md border-slate-200 text-slate-500 dark:border-zink-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"gift-line\">
                                <i class=\"ri-gift-line\"></i>
                            </div>
                        </div>
                        <div class=\"text-center\">
                            <a href=\"https://remixicon.com/\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100\">Remix Icons Library</a>
                        </div>
                    </div>
                </div><!--end card-->

{% endblock %}
    
{% block javascripts %}

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

{% endblock %}", "icons-remix.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\icons-remix.html.twig");
    }
}
