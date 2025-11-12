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

/* forget_password/auth-reset-password-success.html.twig */
class __TwigTemplate_61964dd772ab720f07cf00034a507926 extends Template
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
        return "partials/without-nav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forget_password/auth-reset-password-success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forget_password/auth-reset-password-success.html.twig"));

        $this->parent = $this->load("partials/without-nav.html.twig", 1);
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

        yield "Two Steps";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        // line 4
        yield "
<body class=\"flex items-center justify-center min-h-screen py-16 lg:py-10 bg-slate-50 dark:bg-zink-800 dark:text-zink-100 font-public\">

    <div class=\"relative\">
        <div class=\"absolute hidden opacity-50 ltr:-left-16 rtl:-right-16 -top-10 md:block\">
            <svg version=\"1.2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 125 316\" width=\"125\" height=\"316\">
                <title>&lt;Group&gt;</title>
                <g id=\"&lt;Group&gt;\">
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-100/50 dark:fill-custom-950/50\" d=\"m23.4 221.8l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-100 dark:fill-custom-950\" d=\"m31.2 229.6l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-200/50 dark:fill-custom-900/50\" d=\"m39 237.4l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-200/75 dark:fill-custom-900/75\" d=\"m46.8 245.2l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-200 dark:fill-custom-900\" d=\"m54.6 253.1l-1.3-3.1v-315.4l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-300/50 dark:fill-custom-800/50\" d=\"m62.4 260.9l-1.2-3.1v-315.4l1.2 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-300/75 dark:fill-custom-800/75\" d=\"m70.3 268.7l-1.3-3.1v-315.4l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-300 dark:fill-custom-800\" d=\"m78.1 276.5l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-400/50 dark:fill-custom-700/50\" d=\"m85.9 284.3l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-400/75 dark:fill-custom-700/75\" d=\"m93.7 292.1l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-400 dark:fill-custom-700\" d=\"m101.5 299.9l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-500/50 dark:fill-custom-600/50\" d=\"m109.3 307.8l-1.3-3.1v-315.4l1.3 3.1z\" />
                </g>
            </svg>
        </div>
        
        <div class=\"absolute hidden -rotate-180 opacity-50 ltr:-right-16 rtl:-left-16 -bottom-10 md:block\">
            <svg version=\"1.2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 125 316\" width=\"125\" height=\"316\">
                <title>&lt;Group&gt;</title>
                <g id=\"&lt;Group&gt;\">
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-100/50 dark:fill-custom-950/50\" d=\"m23.4 221.8l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-100 dark:fill-custom-950\" d=\"m31.2 229.6l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-200/50 dark:fill-custom-900/50\" d=\"m39 237.4l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-200/75 dark:fill-custom-900/75\" d=\"m46.8 245.2l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-200 dark:fill-custom-900\" d=\"m54.6 253.1l-1.3-3.1v-315.4l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-300/50 dark:fill-custom-800/50\" d=\"m62.4 260.9l-1.2-3.1v-315.4l1.2 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-300/75 dark:fill-custom-800/75\" d=\"m70.3 268.7l-1.3-3.1v-315.4l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-300 dark:fill-custom-800\" d=\"m78.1 276.5l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-400/50 dark:fill-custom-700/50\" d=\"m85.9 284.3l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-400/75 dark:fill-custom-700/75\" d=\"m93.7 292.1l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-400 dark:fill-custom-700\" d=\"m101.5 299.9l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-500/50 dark:fill-custom-600/50\" d=\"m109.3 307.8l-1.3-3.1v-315.4l1.3 3.1z\" />
                </g>
            </svg>
        </div>

        <div class=\"mb-0 w-screen lg:w-[500px] card shadow-lg border-none shadow-slate-100 relative\">
            <div class=\"!px-10 !py-12 card-body\">
                ";
        // line 54
        yield "
                <div class=\"mt-8 text-center\">
                    <h4 class=\"mb-2 text-green-500 dark:text-green-500\">Password Reset Successful</h4>
                    <p class=\"mb-8 text-slate-500 dark:text-zink-200\">You're all set, get back to <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        yield "\" class=\"text-custom-500 underline\">login</a></p>
                </div>

                

            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
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

        // line 68
        yield "
<!-- App js -->
";
        // line 71
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>

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
        return "forget_password/auth-reset-password-success.html.twig";
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
        return array (  192 => 71,  188 => 68,  175 => 67,  154 => 57,  149 => 54,  101 => 4,  88 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/without-nav.html.twig' %}
{% block title %}Two Steps{% endblock %}
{% block content %}

<body class=\"flex items-center justify-center min-h-screen py-16 lg:py-10 bg-slate-50 dark:bg-zink-800 dark:text-zink-100 font-public\">

    <div class=\"relative\">
        <div class=\"absolute hidden opacity-50 ltr:-left-16 rtl:-right-16 -top-10 md:block\">
            <svg version=\"1.2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 125 316\" width=\"125\" height=\"316\">
                <title>&lt;Group&gt;</title>
                <g id=\"&lt;Group&gt;\">
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-100/50 dark:fill-custom-950/50\" d=\"m23.4 221.8l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-100 dark:fill-custom-950\" d=\"m31.2 229.6l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-200/50 dark:fill-custom-900/50\" d=\"m39 237.4l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-200/75 dark:fill-custom-900/75\" d=\"m46.8 245.2l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-200 dark:fill-custom-900\" d=\"m54.6 253.1l-1.3-3.1v-315.4l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-300/50 dark:fill-custom-800/50\" d=\"m62.4 260.9l-1.2-3.1v-315.4l1.2 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-300/75 dark:fill-custom-800/75\" d=\"m70.3 268.7l-1.3-3.1v-315.4l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-300 dark:fill-custom-800\" d=\"m78.1 276.5l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-400/50 dark:fill-custom-700/50\" d=\"m85.9 284.3l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-400/75 dark:fill-custom-700/75\" d=\"m93.7 292.1l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-400 dark:fill-custom-700\" d=\"m101.5 299.9l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-500/50 dark:fill-custom-600/50\" d=\"m109.3 307.8l-1.3-3.1v-315.4l1.3 3.1z\" />
                </g>
            </svg>
        </div>
        
        <div class=\"absolute hidden -rotate-180 opacity-50 ltr:-right-16 rtl:-left-16 -bottom-10 md:block\">
            <svg version=\"1.2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 125 316\" width=\"125\" height=\"316\">
                <title>&lt;Group&gt;</title>
                <g id=\"&lt;Group&gt;\">
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-100/50 dark:fill-custom-950/50\" d=\"m23.4 221.8l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-100 dark:fill-custom-950\" d=\"m31.2 229.6l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-200/50 dark:fill-custom-900/50\" d=\"m39 237.4l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-200/75 dark:fill-custom-900/75\" d=\"m46.8 245.2l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-200 dark:fill-custom-900\" d=\"m54.6 253.1l-1.3-3.1v-315.4l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-300/50 dark:fill-custom-800/50\" d=\"m62.4 260.9l-1.2-3.1v-315.4l1.2 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-300/75 dark:fill-custom-800/75\" d=\"m70.3 268.7l-1.3-3.1v-315.4l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-300 dark:fill-custom-800\" d=\"m78.1 276.5l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-400/50 dark:fill-custom-700/50\" d=\"m85.9 284.3l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-400/75 dark:fill-custom-700/75\" d=\"m93.7 292.1l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-400 dark:fill-custom-700\" d=\"m101.5 299.9l-1.3-3.1v-315.3l1.3 3.1z\" />
                    <path id=\"&lt;Path&gt;\" class=\"fill-custom-500/50 dark:fill-custom-600/50\" d=\"m109.3 307.8l-1.3-3.1v-315.4l1.3 3.1z\" />
                </g>
            </svg>
        </div>

        <div class=\"mb-0 w-screen lg:w-[500px] card shadow-lg border-none shadow-slate-100 relative\">
            <div class=\"!px-10 !py-12 card-body\">
                {# <a href=\"#!\">
                    <img src=\"assets/images/logo-light.png\" alt=\"\" class=\"hidden h-6 mx-auto dark:block\">
                    <img src=\"assets/images/logo-dark.png\" alt=\"\" class=\"block h-6 mx-auto dark:hidden\">
                </a> #}

                <div class=\"mt-8 text-center\">
                    <h4 class=\"mb-2 text-green-500 dark:text-green-500\">Password Reset Successful</h4>
                    <p class=\"mb-8 text-slate-500 dark:text-zink-200\">You're all set, get back to <a href=\"{{ path('login') }}\" class=\"text-custom-500 underline\">login</a></p>
                </div>

                

            </div>
        </div>
    </div>

{% endblock %}
{% block javascripts %}

<!-- App js -->
{# <script src=\"assets/js/app.js\"></script> #}
<script src=\"{{ asset('assets/js/app.js') }}\"></script>

{% endblock %}", "forget_password/auth-reset-password-success.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\forget_password\\auth-reset-password-success.html.twig");
    }
}
