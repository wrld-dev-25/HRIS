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

/* auth-logout-boxed.html.twig */
class __TwigTemplate_f7241e3186d339635deebc1b1fb25a27 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-logout-boxed.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "auth-logout-boxed.html.twig"));

        $this->parent = $this->loadTemplate("partials/without-nav.html.twig", "auth-logout-boxed.html.twig", 1);
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

        yield "LogOut";
        
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

    <div class=\"mb-0 border-none shadow-none xl:w-2/3 card bg-white/70 dark:bg-zink-500/70\">
        <div class=\"grid grid-cols-1 gap-0 lg:grid-cols-12\">
            <div class=\"lg:col-span-5\">
                <div class=\"!px-12 !py-12 card-body h-full flex flex-col\">

                    <div class=\"my-auto\">
                        <div class=\"mt-8 text-center\">
                            <div class=\"mb-4 text-center\">
                                <i data-lucide=\"log-out\" class=\"size-6 mx-auto text-purple-500 fill-purple-100\"></i>
                            </div>
                                                    </div>
                        
                        <a href=\"auth-login-boxed\" class=\"w-full text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Sign In</a>
                    </div>
                </div>
            </div>
            <div class=\"mx-2 mt-2 mb-2 border-none shadow-none lg:col-span-7 card bg-white/60 dark:bg-zink-500/60\">
                <div class=\"!px-10 !pt-10 h-full !pb-0 card-body flex flex-col\">
                    <div class=\"flex items-center justify-between gap-3\">
                        <div class=\"grow\">
                            <a href=\"index\">
                                <img src=\"assets/images/logo-light.png\" alt=\"\" class=\"hidden h-6 dark:block\">
                                <img src=\"assets/images/logo-dark.png\" alt=\"\" class=\"block h-6 dark:hidden\">
                            </a>
                        </div>
                        <div class=\"shrink-0\">
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
                        </div>
                    </div>
                    <div class=\"mt-auto\">
                        <img src=\"assets/images/auth/img-01.png\" alt=\"\" class=\"md:max-w-[32rem] mx-auto\">
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 87
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        yield "    <script src=\"assets/js/pages/auth-two-steps.init.js\"></script>

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
        return "auth-logout-boxed.html.twig";
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
        return array (  191 => 88,  181 => 87,  91 => 4,  81 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/without-nav.html.twig' %}
{% block title %}LogOut{% endblock %}
{% block content %}

<body class=\"flex items-center justify-center min-h-screen px-4 py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark dark:text-zink-100 font-public\">

    <div class=\"mb-0 border-none shadow-none xl:w-2/3 card bg-white/70 dark:bg-zink-500/70\">
        <div class=\"grid grid-cols-1 gap-0 lg:grid-cols-12\">
            <div class=\"lg:col-span-5\">
                <div class=\"!px-12 !py-12 card-body h-full flex flex-col\">

                    <div class=\"my-auto\">
                        <div class=\"mt-8 text-center\">
                            <div class=\"mb-4 text-center\">
                                <i data-lucide=\"log-out\" class=\"size-6 mx-auto text-purple-500 fill-purple-100\"></i>
                            </div>
                            {# <h4 class=\"mb-2 text-custom-500 dark:text-custom-500\">You are Logged Out</h4>
                            <p class=\"mb-8 text-slate-500 dark:text-zink-200\">Thank you for using techrostrum admin template</p> #}
                        </div>
                        
                        <a href=\"auth-login-boxed\" class=\"w-full text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Sign In</a>
                    </div>
                </div>
            </div>
            <div class=\"mx-2 mt-2 mb-2 border-none shadow-none lg:col-span-7 card bg-white/60 dark:bg-zink-500/60\">
                <div class=\"!px-10 !pt-10 h-full !pb-0 card-body flex flex-col\">
                    <div class=\"flex items-center justify-between gap-3\">
                        <div class=\"grow\">
                            <a href=\"index\">
                                <img src=\"assets/images/logo-light.png\" alt=\"\" class=\"hidden h-6 dark:block\">
                                <img src=\"assets/images/logo-dark.png\" alt=\"\" class=\"block h-6 dark:hidden\">
                            </a>
                        </div>
                        <div class=\"shrink-0\">
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
                        </div>
                    </div>
                    <div class=\"mt-auto\">
                        <img src=\"assets/images/auth/img-01.png\" alt=\"\" class=\"md:max-w-[32rem] mx-auto\">
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
 
{% block javascripts %}
    <script src=\"assets/js/pages/auth-two-steps.init.js\"></script>

{% endblock %}", "auth-logout-boxed.html.twig", "C:\\Users\\SUNIT226\\Desktop\\Repos\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\auth-logout-boxed.html.twig");
    }
}
