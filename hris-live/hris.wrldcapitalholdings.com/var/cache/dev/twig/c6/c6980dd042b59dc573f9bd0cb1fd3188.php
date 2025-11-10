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

/* auth-login-boxed.html.twig */
class __TwigTemplate_4e2abe3631f969dca2fa21013320fbbf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-login-boxed.html.twig"));

        $this->parent = $this->loadTemplate("partials/without-nav.html.twig", "auth-login-boxed.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Sign In";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "

<body class=\"flex items-center justify-center min-h-screen px-4 py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark dark:text-zink-100 font-public\">
    ";
        // line 8
        yield "    ";
        // line 11
        yield "    ";
        // line 14
        yield "    
    ";
        // line 16
        yield "    <div class=\"mb-0 border-none shadow-none xl:w-2/3 card bg-white/70 dark:bg-zink-500/70\">
        <div class=\"grid grid-cols-1 gap-0 lg:grid-cols-12\">
            <div class=\"mx-2 mt-2 mb-2 border-none shadow-none lg:col-span-7 card bg-white/60 dark:bg-zink-500/60\">
                <div class=\"!px-10 !pt-10 h-full !pb-0 card-body flex flex-col\">
                    <div class=\"flex items-center justify-between gap-3\">
                        <div class=\"grow\">
                            <a href=\"index\">
                                ";
        // line 25
        yield "                            </a>
                        </div>
                        ";
        // line 70
        yield "                    </div>
                    <div class=\"mt-auto block dark:hidden\">
                        <img src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/wrld-logo.png"), "html", null, true);
        yield "\" alt=\"\" class=\"md:max-w-[32rem] mx-auto\">
                        <h2 class=\"mb-2\" style=\"color: #002a45; text-align:center;\">Online Human Resource Information System</h2>
                    </div>
                    <div class=\"mt-auto hidden dark:block\">
                        <img src=\"assets/images/wrld-logo-white-2.png\" alt=\"\" class=\"md:max-w-[32rem] mx-auto\">
                        <h2 class=\"mb-2 \" style=\"color: #ffff; text-align:center;\">Online Human Resource Information System</h2>
                    </div>
                </div>
            </div>
            <div class=\"lg:col-span-5 d-flex justify-center my-auto\">
                <div class=\"!px-12 !py-12 card-body\">
                    
                    <div class=\"text-left\">
                        <h4 class=\"mb-2\">Welcome!</h4>
                    </div>
            
                    <form novalidate action=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validate_login");
        yield "\" method=\"post\">
                        <div class=\"hidden px-4 py-3 mb-3 text-sm text-green-500 border border-green-200 rounded-md bg-green-50 dark:bg-green-400/20 dark:border-green-500/50\" id=\"successAlert\">
                            You have <b>successfully</b> signed in.
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"useremail\" class=\"inline-block mb-2 text-base font-medium\">UserName / Email ID</label>
                            <input type=\"text\" id=\"identifier\" name=\"identifier\" class=\"form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter useremail \">
                            
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"password\" class=\"inline-block mb-2 text-base font-medium\">Password</label>
                            <input type=\"password\" id=\"password\" name=\"password\" class=\"form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter password\">
                            
                        </div>
                        <div>
                            <div class=\"flex items-center gap-2 justify-between\">
                                <div class=\"flex items-center gap-2\">
                                    <input id=\"checkboxDefault1\" class=\"size-4 border rounded-sm appearance-none bg-slate-100 border-slate-200 dark:bg-zink-600/50 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400\" type=\"checkbox\" value=\"\">
                                    <label for=\"checkboxDefault1\" class=\"inline-block text-base font-medium align-middle cursor-pointer\">Remember me</label>
                                </div>
                                <p class=\"mb-0\"><a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forget_password");
        yield "\" class=\"underline text-sm text-custom-500\">Forget Password?</a> </p>
                            </div>
                            <div id=\"remember-error\" class=\"hidden mt-1 text-sm text-red-500\">Please check the \"Remember me\" before submitting the form.</div>
                        </div>
                        <div class=\"mt-10\">
                            <button type=\"submit\" class=\"w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Sign In</button>
                        </div>
            
                        ";
        // line 119
        yield "            
                        ";
        // line 130
        yield "                    </form>
                </div>
            </div> 
        </div>
    </div>

   ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 138
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        yield "    <script src=\"assets/js/pages/auth-login.init.js\"></script>
    <script src=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
    ";
        // line 141
        yield ((array_key_exists("javascriptSnippet", $context)) ? (Twig\Extension\CoreExtension::default(($context["javascriptSnippet"] ?? null), "")) : (""));
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "auth-login-boxed.html.twig";
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
        return array (  189 => 141,  185 => 140,  182 => 139,  175 => 138,  161 => 130,  158 => 119,  147 => 108,  124 => 88,  105 => 72,  101 => 70,  97 => 25,  88 => 16,  85 => 14,  83 => 11,  81 => 8,  76 => 4,  69 => 3,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth-login-boxed.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\auth-login-boxed.html.twig");
    }
}
