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

/* forget_password/auth-reset-password-success.html.twig */
class __TwigTemplate_149eafe69ddefb04a160f3d2045e3e64 extends Template
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
        return "partials/without-nav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("partials/without-nav.html.twig", "forget_password/auth-reset-password-success.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Two Steps";
        return; yield '';
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return; yield '';
    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        yield "
<!-- App js -->
";
        // line 71
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "forget_password/auth-reset-password-success.html.twig";
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
        return array (  137 => 71,  133 => 68,  129 => 67,  114 => 57,  109 => 54,  61 => 4,  57 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forget_password/auth-reset-password-success.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/forget_password/auth-reset-password-success.html.twig");
    }
}
