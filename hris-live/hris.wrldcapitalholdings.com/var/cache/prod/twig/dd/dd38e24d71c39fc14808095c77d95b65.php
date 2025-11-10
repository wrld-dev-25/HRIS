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

/* auth-register-cover.html.twig */
class __TwigTemplate_30897523350560c7193ba56510947233 extends Template
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
        $this->parent = $this->loadTemplate("partials/without-nav.html.twig", "auth-register-cover.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Register";
        return; yield '';
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "

<body class=\"flex items-center justify-center min-h-screen py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark dark:text-zink-100 font-public\">

    <div class=\"mb-0 border-none lg:w-[500px] card bg-white/70 shadow-none dark:bg-zink-500/70\">
        <div class=\"!px-10 !py-12 card-body\">
            <a href=\"index\">
                <img src=\"assets/images/logo-light.png\" alt=\"\" class=\"hidden h-6 mx-auto dark:block\">
                <img src=\"assets/images/logo-dark.png\" alt=\"\" class=\"block h-6 mx-auto dark:hidden\">
            </a>

            <div class=\"mt-8 text-center\">
                <h4 class=\"mb-1 text-custom-500 dark:text-custom-500\">Create your free account</h4>
                <p class=\"text-slate-500 dark:text-zink-200\">Get your free Tailwick account now</p>
            </div>
            
            <form action=\"#!\" class=\"mt-10\" id=\"registerForm\">
                <div class=\"mb-3\">
                    <label for=\"email-field\" class=\"inline-block mb-2 text-base font-medium\">Email</label>
                    <input type=\"text\" id=\"email-field\" class=\"form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter email\">
                    <div id=\"email-error\" class=\"hidden mt-1 text-sm text-red-500\">Please enter a valid email address.</div>
                </div>
                <div class=\"mb-3\">
                    <label for=\"username-field\" class=\"inline-block mb-2 text-base font-medium\">UserName</label>
                    <input type=\"text\" id=\"username-field\" class=\"form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter username\">
                    <div id=\"username-error\" class=\"hidden mt-1 text-sm text-red-500\">Please enter a username.</div>
                </div>
                <div class=\"mb-3\">
                    <label for=\"password\" class=\"inline-block mb-2 text-base font-medium\">Password</label>
                    <input type=\"password\" id=\"password\" class=\"form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter password\">
                    <div id=\"password-error\" class=\"hidden mt-1 text-sm text-red-500\">Password must be at least 8 characters long and contain both letters and numbers.</div>
                </div>
                <p class=\"italic text-15 text-slate-500 dark:text-zink-200\">By registering you agree to the Tailwick <a href=\"#!\" class=\"underline\">Terms of Use</a></p>
                <div class=\"mt-10\">
                    <button type=\"submit\" class=\"w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Sign In</button>
                </div>
            
                <div class=\"relative text-center my-9 before:absolute before:top-3 before:left-0 before:right-0 before:border-t before:border-t-slate-200 dark:before:border-t-zink-500\">
                    <h5 class=\"inline-block px-2 py-0.5 text-sm bg-white text-slate-500 dark:bg-zink-600 dark:text-zink-200 rounded relative\">Create account with</h5>
                </div>
            
                <div class=\"flex flex-wrap justify-center gap-2\">
                    <button type=\"button\" class=\"flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 active:text-white active:bg-custom-600 active:border-custom-600\"><i data-lucide=\"facebook\" class=\"size-4\"></i></button>
                    <button type=\"button\" class=\"flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-white btn bg-orange-500 border-orange-500 hover:text-white hover:bg-orange-600 hover:border-orange-600 focus:text-white focus:bg-orange-600 focus:border-orange-600 active:text-white active:bg-orange-600 active:border-orange-600\"><i data-lucide=\"mail\" class=\"size-4\"></i></button>
                    <button type=\"button\" class=\"flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-white btn bg-sky-500 border-sky-500 hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 active:text-white active:bg-sky-600 active:border-sky-600\"><i data-lucide=\"twitter\" class=\"size-4\"></i></button>
                    <button type=\"button\" class=\"flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 active:text-white active:bg-slate-600 active:border-slate-600\"><i data-lucide=\"github\" class=\"size-4\"></i></button>
                </div>
            
                <div class=\"mt-10 text-center\">
                    <p class=\"mb-0 text-slate-500 dark:text-zink-200\">Already have an account ? <a href=\"auth-login-basic\" class=\"font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500\">Login</a> </p>
                </div>
            </form>
        </div>
    </div>
";
        return; yield '';
    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "
    <script src=\"assets/js/pages/auth-register.init.js\"></script>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "auth-register-cover.html.twig";
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
        return array (  119 => 60,  57 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth-register-cover.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\auth-register-cover.html.twig");
    }
}
