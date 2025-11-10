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

/* auth-two-steps-cover.html.twig */
class __TwigTemplate_ff4035b1bbfec8ba5a091b1f924acfdd extends Template
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
        $this->parent = $this->loadTemplate("partials/without-nav.html.twig", "auth-two-steps-cover.html.twig", 1);
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
                <h4 class=\"mb-2 text-custom-500 dark:text-custom-500\">Verify Email</h4>
                <p class=\"mb-8 text-slate-500 dark:text-zink-200\">Please enter the <b class=\"font-medium\">4</b> digit code sent to <b class=\"font-medium\">tailwick@themesdesign.com</b></p>
            </div>
            
            <form autocomplete=\"off\" action=\"index\">
                <div class=\"grid grid-cols-1 gap-2 xl:grid-cols-4\">
                    <div>
                        <label for=\"digit1-input\" class=\"hidden\">Digit 1</label>
                        <input type=\"text\" class=\"text-lg text-center form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required placeholder=\"0\" onkeyup=\"moveToNext(1, event)\" maxlength=\"1\" id=\"digit1-input\">
                    </div>
                    <div>
                        <label for=\"digit2-input\" class=\"hidden\">Digit 2</label>
                        <input type=\"text\" class=\"text-lg text-center form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required placeholder=\"0\" onkeyup=\"moveToNext(2, event)\" maxlength=\"1\" id=\"digit2-input\">
                    </div>
            
                    <div>
                        <label for=\"digit3-input\" class=\"hidden\">Digit 3</label>
                        <input type=\"text\" class=\"text-lg text-center form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required placeholder=\"0\" onkeyup=\"moveToNext(3, event)\" maxlength=\"1\" id=\"digit3-input\">
                    </div>
            
                    <div>
                        <label for=\"digit4-input\" class=\"hidden\">Digit 4</label>
                        <input type=\"text\" class=\"text-lg text-center form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required placeholder=\"0\" onkeyup=\"moveToNext(4, event)\" maxlength=\"1\" id=\"digit4-input\">
                    </div>
                </div>
                <div class=\"mt-10\">
                    <button type=\"submit\" class=\"w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Confirm</button>
                </div>
            </form>
        </div>
    </div>
";
        return; yield '';
    }

    // line 48
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <script src=\"assets/js/pages/auth-two-steps.init.js\"></script>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "auth-two-steps-cover.html.twig";
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
        return array (  107 => 48,  57 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth-two-steps-cover.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\auth-two-steps-cover.html.twig");
    }
}
