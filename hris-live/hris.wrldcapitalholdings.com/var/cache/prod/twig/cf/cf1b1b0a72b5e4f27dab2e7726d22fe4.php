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

/* auth-create-password-cover.html.twig */
class __TwigTemplate_683ccf8ff6eadedff0fdd46b0175d97c extends Template
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
        $this->parent = $this->loadTemplate("partials/without-nav.html.twig", "auth-create-password-cover.html.twig", 1);
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
        yield "
<body class=\"flex items-center justify-center min-h-screen py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark dark:text-zink-100 font-public\">

    <div class=\"mb-0 border-none lg:w-[500px] card bg-white/70 shadow-none dark:bg-zink-500/70\">
        <div class=\"!px-10 !py-12 card-body\">
            <a href=\"index\">
                <img src=\"assets/images/logo-light.png\" alt=\"\" class=\"hidden h-6 mx-auto dark:block\">
                <img src=\"assets/images/logo-dark.png\" alt=\"\" class=\"block h-6 mx-auto dark:hidden\">
            </a>

            <div class=\"mt-8 text-center\">
                <h4 class=\"mb-2 text-custom-500 dark:text-custom-500\">Set a New Password</h4>
                <p class=\"mb-8 text-slate-500 dark:text-zink-200\">Your new password should be distinct from any of your prior passwords</p>
            </div>
            
            <form autocomplete=\"off\" action=\"index\">
                <div class=\"mb-3\">
                    <label for=\"passwordInput\" class=\"inline-block mb-2 text-base font-medium\">Password</label>
                    <input type=\"password\" class=\"form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required placeholder=\"Password\" id=\"passwordInput\">
                </div>
                <div class=\"mb-3\">
                    <label for=\"passwordConfirmInput\" class=\"inline-block mb-2 text-base font-medium\">Confirm Password</label>
                    <input type=\"password\" class=\"form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required placeholder=\"Confirm password\" id=\"passwordConfirmInput\">
                </div>
                <div class=\"flex items-center gap-2\">
                    <input id=\"checkboxDefault1\" class=\"size-4 border rounded-sm appearance-none bg-slate-100 border-slate-200 dark:bg-zink-600/50 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400\" type=\"checkbox\" value=\"\">
                    <label for=\"checkboxDefault1\" class=\"inline-block text-base font-medium align-middle cursor-pointer\">Remember me</label>
                </div>
                <div class=\"mt-8\">
                    <button type=\"submit\" class=\"w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Reset Password</button>
                </div>
                <div class=\"mt-4 text-center\">
                    <p class=\"mb-0\">Hold on, I've got my password... <a href=\"auth-login-basic\" class=\"underline fw-medium text-custom-500\"> Click here </a> </p>
                </div>
            </form>
        </div>
    </div>
    
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "auth-create-password-cover.html.twig";
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
        return array (  56 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth-create-password-cover.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\auth-create-password-cover.html.twig");
    }
}
