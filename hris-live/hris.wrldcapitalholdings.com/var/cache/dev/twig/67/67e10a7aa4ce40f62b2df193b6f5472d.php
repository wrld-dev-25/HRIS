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
class __TwigTemplate_b7b93aac95d004d544cfd02e714083b8 extends Template
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

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-login-boxed.html.twig"));

        $this->parent = $this->loadTemplate("partials/without-nav.html.twig", "auth-login-boxed.html.twig", 1);
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

        yield "Sign In";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 138
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        yield "    <script src=\"assets/js/pages/auth-login.init.js\"></script>
    <script src=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
    ";
        // line 141
        yield ((array_key_exists("javascriptSnippet", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["javascriptSnippet"]) || array_key_exists("javascriptSnippet", $context) ? $context["javascriptSnippet"] : (function () { throw new RuntimeError('Variable "javascriptSnippet" does not exist.', 141, $this->source); })()), "")) : (""));
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
        return array (  210 => 141,  206 => 140,  203 => 139,  193 => 138,  176 => 130,  173 => 119,  162 => 108,  139 => 88,  120 => 72,  116 => 70,  112 => 25,  103 => 16,  100 => 14,  98 => 11,  96 => 8,  91 => 4,  81 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/without-nav.html.twig' %}
{% block title %}Sign In{% endblock %}
{% block content %}


<body class=\"flex items-center justify-center min-h-screen px-4 py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark dark:text-zink-100 font-public\">
    {# failed login #}
    {# {% for message in app.flashes('toast_warning') %}
        <div data-toast data-toast-text=\"{{ message }}\" data-toast-gravity=\"top\" data-toast-position=\"center\" data-toast-className=\"yellow\" data-toast-duration=\"3000\"></div>
    {% endfor %} #}
    {# {% block toast_message_script %}
        {{ toast_script|raw }}
    {% endblock %} #}
    
    {# <button type=\"button\" data-toast data-toast-text=\"Warning ! Something went wrong try again\" data-toast-gravity=\"top\" data-toast-position=\"right\" data-toast-className=\"yellow\" data-toast-duration=\"3000\" class=\"text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50\">Warning</button> #}
    <div class=\"mb-0 border-none shadow-none xl:w-2/3 card bg-white/70 dark:bg-zink-500/70\">
        <div class=\"grid grid-cols-1 gap-0 lg:grid-cols-12\">
            <div class=\"mx-2 mt-2 mb-2 border-none shadow-none lg:col-span-7 card bg-white/60 dark:bg-zink-500/60\">
                <div class=\"!px-10 !pt-10 h-full !pb-0 card-body flex flex-col\">
                    <div class=\"flex items-center justify-between gap-3\">
                        <div class=\"grow\">
                            <a href=\"index\">
                                {# <img src=\"assets/images/wrld-logo.png\" alt=\"\" class=\"hidden h-6 dark:block\">
                                <img src=\"assets/images/wrld-logo-white-2.png\" alt=\"\" class=\"block h-6 dark:hidden\"> #}
                            </a>
                        </div>
                        {# <div class=\"shrink-0\">
                            <div class=\"relative dropdown text-end\">
                                <button type=\"button\" class=\"inline-flex items-center gap-3 transition-all duration-200 ease-linear dropdown-toggle btn border-slate-200 dark:border-zink-400/60 group/items focus:border-custom-500 dark:focus:border-custom-500\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\">
                                    <img src=\"assets/images/flags/us.svg\" alt=\"\" class=\"object-cover h-5 rounded-full\">
                                    <h6 class=\"text-base font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500\">English</h6>
                                </button>
            
                                <div class=\"absolute z-50 hidden p-3 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[9rem] flex flex-col gap-3 dark:bg-zink-600\" aria-labelledby=\"dropdownMenuButton\">
                                    <a href=\"#!\" class=\"flex items-center gap-3 group/items\">
                                        <img src=\"assets/images/flags/us.svg\" alt=\"\" class=\"object-cover h-4 rounded-full\">
                                        <h6 class=\"text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500\">English</h6>
                                    </a>
                                    <a href=\"#!\" class=\"flex items-center gap-3 group/items\">
                                        <img src=\"assets/images/flags/es.svg\" alt=\"\" class=\"object-cover h-4 rounded-full\">
                                        <h6 class=\"text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500\">Spanish</h6>
                                    </a>
                                    <a href=\"#!\" class=\"flex items-center gap-3 group/items\">
                                        <img src=\"assets/images/flags/de.svg\" alt=\"\" class=\"object-cover h-4 rounded-full\">
                                        <h6 class=\"text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500\">German</h6>
                                    </a>
                                    <a href=\"#!\" class=\"flex items-center gap-3 group/items\">
                                        <img src=\"assets/images/flags/fr.svg\" alt=\"\" class=\"object-cover h-4 rounded-full\">
                                        <h6 class=\"text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500\">French</h6>
                                    </a>
                                    <a href=\"#!\" class=\"flex items-center gap-3 group/items\">
                                        <img src=\"assets/images/flags/jp.svg\" alt=\"\" class=\"object-cover h-4 rounded-full\">
                                        <h6 class=\"text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500\">Japanese</h6>
                                    </a>
                                    <a href=\"#!\" class=\"flex items-center gap-3 group/items\">
                                        <img src=\"assets/images/flags/it.svg\" alt=\"\" class=\"object-cover h-4 rounded-full\">
                                        <h6 class=\"text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500\">Italian</h6>
                                    </a>
                                    <a href=\"#!\" class=\"flex items-center gap-3 group/items\">
                                        <img src=\"assets/images/flags/ru.svg\" alt=\"\" class=\"object-cover h-4 rounded-full\">
                                        <h6 class=\"text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500\">Russian</h6>
                                    </a>
                                    <a href=\"#!\" class=\"flex items-center gap-3 group/items\">
                                        <img src=\"assets/images/flags/ae.svg\" alt=\"\" class=\"object-cover h-4 rounded-full\">
                                        <h6 class=\"text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500\">Arabic</h6>
                                    </a>
                                </div>
                            </div>
                        </div> #}
                    </div>
                    <div class=\"mt-auto block dark:hidden\">
                        <img src=\"{{asset('assets/images/wrld-logo.png')}}\" alt=\"\" class=\"md:max-w-[32rem] mx-auto\">
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
            
                    <form novalidate action=\"{{ path('validate_login')}}\" method=\"post\">
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
                                <p class=\"mb-0\"><a href=\"{{ path('forget_password') }}\" class=\"underline text-sm text-custom-500\">Forget Password?</a> </p>
                            </div>
                            <div id=\"remember-error\" class=\"hidden mt-1 text-sm text-red-500\">Please check the \"Remember me\" before submitting the form.</div>
                        </div>
                        <div class=\"mt-10\">
                            <button type=\"submit\" class=\"w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Sign In</button>
                        </div>
            
                        {# <div class=\"relative text-center my-9 before:absolute before:top-3 before:left-0 before:right-0 before:border-t before:border-t-slate-200 dark:before:border-t-zink-500\">
                            <h5 class=\"inline-block px-2 py-0.5 text-sm bg-white text-slate-500 dark:bg-zink-600 dark:text-zink-200 rounded relative\">Sign In with</h5>
                        </div> #}
            
                        {# <div class=\"flex flex-wrap justify-center gap-2\">
                            <button type=\"button\" class=\"flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 active:text-white active:bg-custom-600 active:border-custom-600\"><i data-lucide=\"facebook\" class=\"size-4\"></i></button>
                            <button type=\"button\" class=\"flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-white btn bg-orange-500 border-orange-500 hover:text-white hover:bg-orange-600 hover:border-orange-600 focus:text-white focus:bg-orange-600 focus:border-orange-600 active:text-white active:bg-orange-600 active:border-orange-600\"><i data-lucide=\"mail\" class=\"size-4\"></i></button>
                            <button type=\"button\" class=\"flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-white btn bg-sky-500 border-sky-500 hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 active:text-white active:bg-sky-600 active:border-sky-600\"><i data-lucide=\"twitter\" class=\"size-4\"></i></button>
                            <button type=\"button\" class=\"flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 active:text-white active:bg-slate-600 active:border-slate-600\"><i data-lucide=\"github\" class=\"size-4\"></i></button>
                        </div>
            
                        <div class=\"mt-10 text-center\">
                            <p class=\"mb-0 text-slate-500 dark:text-zink-200\">Don't have an account ? <a href=\"auth-register-boxed\" class=\"font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500\"> SignUp</a> </p>
                        </div> #}
                    </form>
                </div>
            </div> 
        </div>
    </div>

   {% endblock %}

{% block javascripts %}
    <script src=\"assets/js/pages/auth-login.init.js\"></script>
    <script src=\"{{ asset('assets/js/app.js') }}\"></script>
    {{ javascriptSnippet|default('')|raw }}
{% endblock %}", "auth-login-boxed.html.twig", "C:\\Users\\SUNIT226\\Desktop\\Repos\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\auth-login-boxed.html.twig");
    }
}
