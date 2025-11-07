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

/* forget_password/auth-create-password-basic.html.twig */
class __TwigTemplate_4de139a834a9bbeed13559a09b15bf1f extends Template
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
        $this->parent = $this->loadTemplate("partials/without-nav.html.twig", "forget_password/auth-create-password-basic.html.twig", 1);
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
                ";
        // line 55
        if (((($context["isValid"] ?? null) == false) || (($context["status"] ?? null) != "Valid"))) {
            // line 56
            yield "
                    <div class=\"mt-8 text-center\">
                        <h4 class=\"mb-2 text-orange-500 dark:text-orange-500\">Access Denied</h4>
                        <p class=\"mb-2 text-slate-500 dark:text-zink-200\">This link has already expired or the token is not valid.</p>
                        <a href=\"";
            // line 60
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            yield "\" class=\"mb-8 text-custom-500 underline\">Go back to Login</a>
                    </div>

                ";
            // line 69
            yield "
                ";
        } else {
            // line 71
            yield "                    <div class=\"mt-8 text-center\">
                        <h4 class=\"mb-2 text-custom-500 dark:text-custom-500\">Set a New Password</h4>
                        <p class=\"mb-8 text-slate-500 dark:text-zink-200\">Your new password should be distinct from any of your prior passwords</p>
                    </div>

                    <form id=\"reset-form\" autocomplete=\"off\" action=\"";
            // line 76
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("form_reset_password");
            yield "\" method=\"POST\">
                        <div class=\"mb-3\">
                            <label for=\"passwordInput\" class=\"inline-block mb-2 text-base font-medium\">Password</label>
                            <div class=\"relative\">
                                <i data-lucide=\"eye\" id=\"showPassword\" class=\"absolute size-4 ltr:right-3 rtl:left-3 top-3 text-slate-500 dark:text-zink-200 cursor-pointer\"></i>
                                <i data-lucide=\"eye-off\" id=\"hidePassword\" class=\"absolute size-4 ltr:right-3 rtl:left-3 top-3 text-slate-500 dark:text-zink-200 cursor-pointer hidden\"></i>
                                <input type=\"password\" id=\"passwordInput\" name=\"passwordInput\" class=\"ltr:pr-10 rtl:pl-10 form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required placeholder=\"Password\">
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"passwordConfirmInput\" class=\"inline-block mb-2 text-base font-medium\">Confirm Password</label>
                            <div class=\"relative\">
                                <i data-lucide=\"eye\" id=\"showConfirmPassword\" class=\"absolute size-4 ltr:right-3 rtl:left-3 top-3 text-slate-500 dark:text-zink-200 cursor-pointer\"></i>
                                <i data-lucide=\"eye-off\" id=\"hideConfirmPassword\" class=\"absolute size-4 ltr:right-3 rtl:left-3 top-3 text-slate-500 dark:text-zink-200 cursor-pointer hidden\"></i>
                                <input type=\"password\" id=\"passwordConfirmInput\" name=\"passwordConfirmInput\" class=\"ltr:pr-10 rtl:pl-10 form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required placeholder=\"Confirm Password\">
                            </div>
                            <p id=\"error-message\" class=\"text-center mt-2 px-4 py-3 mb-6 text-sm text-red-500 border-transparent rounded-md bg-red-50 dark:bg-red-400/20 hidden\"></p>
                        </div>
                        <input type=\"hidden\" id=\"token\" name=\"token\" class=\"hidden\" value=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
            yield "\">
                        <div class=\"mt-8\">
                            <button type=\"button\" id=\"submit-form\" class=\"w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Reset Password</button>
                        </div>
                        <div class=\"mt-4 text-center\">
                            <p class=\"mb-0\">Hold on, I've got my password... <a href=\"";
            // line 99
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            yield "\" class=\"underline fw-medium text-custom-500\"> Click here </a> </p>
                        </div>
                    </form>
                ";
        }
        // line 103
        yield "
            </div>
        </div>
    </div>

";
        return; yield '';
    }

    // line 109
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        yield "
<!-- App js -->
";
        // line 113
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>

<script>
\$(document).ready(function () {

    var resetForm = \$('#reset-form');
    const password = \$('#passwordInput');
    const confirmPassword = \$('#passwordConfirmInput');
    const error = \$('#error-message');

    \$('#showPassword').on('click', function () {
        \$(this).toggleClass('hidden');
        \$('#hidePassword').toggleClass('hidden');
        password.attr('type', 'text');
    });
    \$('#hidePassword').on('click', function () {
        \$(this).toggleClass('hidden');
        \$('#showPassword').toggleClass('hidden');
        password.attr('type', 'password');
    });
    \$('#showConfirmPassword').on('click', function () {
        \$(this).toggleClass('hidden');
        \$('#hideConfirmPassword').toggleClass('hidden');
        confirmPassword.attr('type', 'text');
    });
    \$('#hideConfirmPassword').on('click', function () {
        \$(this).toggleClass('hidden');
        \$('#showConfirmPassword').toggleClass('hidden');
        confirmPassword.attr('type', 'password');
    });

    \$('#submit-form').on('click', function () {

        if (password.val() === confirmPassword.val()) {
            if (password.val().length <= 4) {
                error.text('Password must be at least 5 characters or greater');
                error.removeClass('hidden');
            } else {
                console.log('submitted');
                error.addClass('hidden');
                console.log(resetForm[0]);
                
                // Submit the form programmatically
                \$('#reset-form')[0].submit(); // Use [0] to access the raw DOM element
            }
        } else {
            error.text('Passwords do not match!');
            error.removeClass('hidden');
        }
    });

});
</script>

";
        // line 167
        yield ((array_key_exists("javascriptSnippet", $context)) ? (Twig\Extension\CoreExtension::default(($context["javascriptSnippet"] ?? null), "")) : (""));
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "forget_password/auth-create-password-basic.html.twig";
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
        return array (  249 => 167,  191 => 113,  187 => 110,  183 => 109,  173 => 103,  166 => 99,  158 => 94,  137 => 76,  130 => 71,  126 => 69,  120 => 60,  114 => 56,  112 => 55,  109 => 54,  61 => 4,  57 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forget_password/auth-create-password-basic.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/forget_password/auth-create-password-basic.html.twig");
    }
}
