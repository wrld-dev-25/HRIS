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

/* dashboards-hr.html.twig */
class __TwigTemplate_f37af7f3112c0fd3fe4356f0dbfd31fc extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboards-hr.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboards-hr.html.twig"));

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

        yield "HR";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Dashboard", "title" => "Dashboard", "pageLink" => "/dashboards-hr"]);
        yield "
                <div class=\"view-humanres grow mb-2\">
                    <h5 class=\"text-16\">Human Resource</h5>
                </div>
                <div class=\"view-humanres grid grid-cols-12 2xl:grid-cols-12 gap-x-5\">
                    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee");
        yield "\" class=\"h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-green-100 dark:bg-green-500/20 card group-data-[skin=bordered]:border-green-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"kanban\" class=\"absolute top-0 size-32 stroke-1 text-green-200 dark:text-green-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center size-12 bg-green-500 rounded-md text-15 text-green-50\">
                                <i data-lucide=\"users-round\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Employee List</p>
                        </div>
                    </a>
                    <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_attendance");
        yield "\" class=\"view-daily_time_record h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-sky-100 dark:bg-sky-500/20 card group-data-[skin=bordered]:bg-sky-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"list-filter\" class=\"absolute top-0 size-32 stroke-1 text-sky-200 dark:text-sky-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center size-12 bg-sky-500 rounded-md text-15 text-sky-50\">
                                <i data-lucide=\"calendar-clock\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dtr_count"]) || array_key_exists("dtr_count", $context) ? $context["dtr_count"] : (function () { throw new RuntimeError('Variable "dtr_count" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Daily Time Records</p>
                        </div>
                    </a>
                    <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("division");
        yield "\" class=\"view-division h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-orange-100 dark:bg-orange-500/20 card group-data-[skin=bordered]:bg-orange-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"kanban\" class=\"lucide lucide-kanban absolute top-0 stroke-1 size-32 text-orange-200 dark:text-orange-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center bg-orange-500 rounded-md size-12 text-15 text-orange-50\">
                                <i data-lucide=\"building\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["divisions"]) || array_key_exists("divisions", $context) ? $context["divisions"] : (function () { throw new RuntimeError('Variable "divisions" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Divisions</p>
                        </div>
                    </a>
                    <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("department");
        yield "\" class=\"view-department h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-red-100 dark:bg-red-500/20 card group-data-[skin=bordered]:bg-red-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"list-filter\" class=\"absolute top-0 stroke-1 size-32 text-red-200 dark:text-red-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center bg-red-500 rounded-md size-12 text-15 text-red-50\">
                                <i data-lucide=\"building-2\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["departments"]) || array_key_exists("departments", $context) ? $context["departments"] : (function () { throw new RuntimeError('Variable "departments" does not exist.', 48, $this->source); })()), "html", null, true);
        yield "\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Departments</p>
                        </div>
                    </a>
                </div>
                <div class=\"view-project grow mb-2\">
                    <h5 class=\"text-16\">Project Management</h5>
                </div>
                <div class=\"view-project grid grid-cols-12 2xl:grid-cols-12 gap-x-5\">
                    <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project", ["t" => "pl"]);
        yield "#onGoingProjectsTable\" class=\"h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-green-100 dark:bg-green-500/20 card group-data-[skin=bordered]:border-green-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"kanban\" class=\"absolute top-0 size-32 stroke-1 text-green-200 dark:text-green-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center size-12 bg-green-500 rounded-md text-15 text-green-50\">
                                <i data-lucide=\"user-round-check\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["manpower_count"]) || array_key_exists("manpower_count", $context) ? $context["manpower_count"] : (function () { throw new RuntimeError('Variable "manpower_count" does not exist.', 63, $this->source); })()), "html", null, true);
        yield "\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Manpower Assignment</p>
                        </div>
                    </a>
                    <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project");
        yield "\" class=\"h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-sky-100 dark:bg-sky-500/20 card group-data-[skin=bordered]:bg-sky-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"list-filter\" class=\"absolute top-0 size-32 stroke-1 text-sky-200 dark:text-sky-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center size-12 bg-sky-500 rounded-md text-15 text-sky-50\">
                                <i data-lucide=\"cog\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 73, $this->source); })()), "html", null, true);
        yield "\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">On-Going Projects</p>
                        </div>
                    </a>
                    <a href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subdivision");
        yield "\" class=\"view-subdivision h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-orange-100 dark:bg-orange-500/20 card group-data-[skin=bordered]:bg-orange-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"kanban\" class=\"lucide lucide-kanban absolute top-0 stroke-1 size-32 text-orange-200 dark:text-orange-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center bg-orange-500 rounded-md size-12 text-15 text-orange-50\">
                                <i data-lucide=\"land-plot\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["subdivisions"]) || array_key_exists("subdivisions", $context) ? $context["subdivisions"] : (function () { throw new RuntimeError('Variable "subdivisions" does not exist.', 83, $this->source); })()), "html", null, true);
        yield "\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Subdivisions</p>
                        </div>
                    </a>
                </div>
                <div class=\"view-administration grow mb-2\">
                    <h5 class=\"text-16\">Administration</h5>
                </div>
                <div class=\" view-administration grid grid-cols-12 2xl:grid-cols-12 gap-x-5\">
                    <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_owner");
        yield "\" class=\"view-owner h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-green-100 dark:bg-green-500/20 card group-data-[skin=bordered]:border-green-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"kanban\" class=\"absolute top-0 size-32 stroke-1 text-green-200 dark:text-green-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center size-12 bg-green-500 rounded-md text-15 text-green-50\">
                                <i data-lucide=\"book-user\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["owners"]) || array_key_exists("owners", $context) ? $context["owners"] : (function () { throw new RuntimeError('Variable "owners" does not exist.', 98, $this->source); })()), "html", null, true);
        yield "\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Property Owners</p>
                        </div>
                    </a>
                    <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adm_user_settings");
        yield "\" class=\"view-emp_settings h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-sky-100 dark:bg-sky-500/20 card group-data-[skin=bordered]:bg-sky-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"list-filter\" class=\"absolute top-0 size-32 stroke-1 text-sky-200 dark:text-sky-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center size-12 bg-sky-500 rounded-md text-15 text-sky-50\">
                                <i data-lucide=\"user-round-cog\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 108, $this->source); })()), "html", null, true);
        yield "\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">User Administration</p>
                        </div>
                    </a>
                    <a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_models");
        yield "\" class=\"view-models h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-orange-100 dark:bg-orange-500/20 card group-data-[skin=bordered]:bg-orange-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"kanban\" class=\"lucide lucide-kanban absolute top-0 stroke-1 size-32 text-orange-200 dark:text-orange-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center bg-orange-500 rounded-md size-12 text-15 text-orange-50\">
                                <i data-lucide=\"boxes\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["models"]) || array_key_exists("models", $context) ? $context["models"] : (function () { throw new RuntimeError('Variable "models" does not exist.', 118, $this->source); })()), "html", null, true);
        yield "\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Facilities & Home Models</p>
                        </div>
                    </a>
                </div>

                ";
        // line 208
        yield "                    ";
        // line 214
        yield "                <div id=\"contactDetailsModal\" modal-top class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 show\">
                    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col\">
                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                            <h5 class=\"text-16\">Contact Details</h5>
                            <button data-modal-close=\"contactDetailsModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                        </div>
                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                            <div class=\"flex flex-col gap-2 items-center justify-center\">
                                <h5 class=\"text-16\">Email Address</h5>
                                <span class=\"flex gap-2\">
                                    <i data-lucide=\"mail\" class=\"inline-block size-5 text-custom-500 fill-custom-100 dark:fill-custom-500/20\"></i>
                                    <p class=\"text-slate-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"Click to send email\" data-tooltip-placement=\"right\"><a href=\"\" id=\"modalEmail\" class=\"text-blue-500 hover:underline-offset-4\"></a></p>
                                </span>
                                <h5 class=\"text-16\">Cellphone Number</h5>
                                <span class=\"flex gap-2\">
                                    <i data-lucide=\"phone\" class=\"inline-block size-5 text-custom-500 fill-custom-100 dark:fill-custom-500/20\"></i>
                                    <p class=\"text-slate-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"Click to call\" data-tooltip-placement=\"right\"><a href=\"\" id=\"modalCellphone\" class=\"text-blue-500 hover:underline-offset-4\"></a></p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
           

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 240
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

        // line 241
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<!-- vanila calendar -->
<script src=\"assets/libs/vanilla-calendar-pro/build/vanilla-calendar.min.js\"></script>

";
        // line 247
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-list-init.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
<script src=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 251
        yield ((array_key_exists("javascriptSnippet", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["javascriptSnippet"]) || array_key_exists("javascriptSnippet", $context) ? $context["javascriptSnippet"] : (function () { throw new RuntimeError('Variable "javascriptSnippet" does not exist.', 251, $this->source); })()), "")) : (""));
        yield "
";
        // line 253
        yield "
<script>
\$(document).ready(function() {
    \$('#employeeTable').on('click', '#contactButton', function () {
        var \$row = \$(this).closest('tr');
        var email = \$row.find('td:eq(5)').data('email');
        var cellphone = \$row.find('td:eq(6)').data('cellphone');
        
        // Empty fields
        \$('#modalEmail').attr('href', 'javascript:void(0)').text('');
        \$('#modalCellphone').attr('href', 'javascript:void(0)').text('');

        email === \"\" ? \$('#modalEmail').text('No email address provided.') : \$('#modalEmail').attr('href', 'mailto:' + email).text(email);
        cellphone === \"\" ? \$('#modalCellphone').text('No cellphone number provided.') : \$('#modalCellphone').attr('href', 'tel:' + cellphone).text(cellphone);
    });
});
</script>
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
        return "dashboards-hr.html.twig";
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
        return array (  384 => 253,  380 => 251,  376 => 250,  369 => 247,  362 => 242,  357 => 241,  344 => 240,  309 => 214,  307 => 208,  298 => 118,  289 => 112,  282 => 108,  273 => 102,  266 => 98,  257 => 92,  245 => 83,  236 => 77,  229 => 73,  220 => 67,  213 => 63,  204 => 57,  192 => 48,  183 => 42,  176 => 38,  167 => 32,  160 => 28,  151 => 22,  144 => 18,  135 => 12,  127 => 7,  124 => 6,  111 => 5,  89 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}HR{% endblock %}
{% block stylesheets %}
{% endblock %}
{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Dashboard', title: 'Dashboard', pageLink: '/dashboards-hr' }) }}
                <div class=\"view-humanres grow mb-2\">
                    <h5 class=\"text-16\">Human Resource</h5>
                </div>
                <div class=\"view-humanres grid grid-cols-12 2xl:grid-cols-12 gap-x-5\">
                    <a href=\"{{path('app_employee')}}\" class=\"h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-green-100 dark:bg-green-500/20 card group-data-[skin=bordered]:border-green-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"kanban\" class=\"absolute top-0 size-32 stroke-1 text-green-200 dark:text-green-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center size-12 bg-green-500 rounded-md text-15 text-green-50\">
                                <i data-lucide=\"users-round\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"{{ employees }}\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Employee List</p>
                        </div>
                    </a>
                    <a href=\"{{path('app_attendance')}}\" class=\"view-daily_time_record h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-sky-100 dark:bg-sky-500/20 card group-data-[skin=bordered]:bg-sky-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"list-filter\" class=\"absolute top-0 size-32 stroke-1 text-sky-200 dark:text-sky-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center size-12 bg-sky-500 rounded-md text-15 text-sky-50\">
                                <i data-lucide=\"calendar-clock\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"{{ dtr_count }}\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Daily Time Records</p>
                        </div>
                    </a>
                    <a href=\"{{path('division')}}\" class=\"view-division h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-orange-100 dark:bg-orange-500/20 card group-data-[skin=bordered]:bg-orange-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"kanban\" class=\"lucide lucide-kanban absolute top-0 stroke-1 size-32 text-orange-200 dark:text-orange-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center bg-orange-500 rounded-md size-12 text-15 text-orange-50\">
                                <i data-lucide=\"building\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"{{ divisions }}\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Divisions</p>
                        </div>
                    </a>
                    <a href=\"{{path('department')}}\" class=\"view-department h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-red-100 dark:bg-red-500/20 card group-data-[skin=bordered]:bg-red-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"list-filter\" class=\"absolute top-0 stroke-1 size-32 text-red-200 dark:text-red-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center bg-red-500 rounded-md size-12 text-15 text-red-50\">
                                <i data-lucide=\"building-2\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"{{ departments }}\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Departments</p>
                        </div>
                    </a>
                </div>
                <div class=\"view-project grow mb-2\">
                    <h5 class=\"text-16\">Project Management</h5>
                </div>
                <div class=\"view-project grid grid-cols-12 2xl:grid-cols-12 gap-x-5\">
                    <a href=\"{{path('project', {'t' : 'pl'})}}#onGoingProjectsTable\" class=\"h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-green-100 dark:bg-green-500/20 card group-data-[skin=bordered]:border-green-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"kanban\" class=\"absolute top-0 size-32 stroke-1 text-green-200 dark:text-green-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center size-12 bg-green-500 rounded-md text-15 text-green-50\">
                                <i data-lucide=\"user-round-check\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"{{  manpower_count }}\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Manpower Assignment</p>
                        </div>
                    </a>
                    <a href=\"{{path('project')}}\" class=\"h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-sky-100 dark:bg-sky-500/20 card group-data-[skin=bordered]:bg-sky-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"list-filter\" class=\"absolute top-0 size-32 stroke-1 text-sky-200 dark:text-sky-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center size-12 bg-sky-500 rounded-md text-15 text-sky-50\">
                                <i data-lucide=\"cog\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"{{  projects }}\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">On-Going Projects</p>
                        </div>
                    </a>
                    <a href=\"{{path('subdivision')}}\" class=\"view-subdivision h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-orange-100 dark:bg-orange-500/20 card group-data-[skin=bordered]:bg-orange-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"kanban\" class=\"lucide lucide-kanban absolute top-0 stroke-1 size-32 text-orange-200 dark:text-orange-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center bg-orange-500 rounded-md size-12 text-15 text-orange-50\">
                                <i data-lucide=\"land-plot\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"{{ subdivisions }}\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Subdivisions</p>
                        </div>
                    </a>
                </div>
                <div class=\"view-administration grow mb-2\">
                    <h5 class=\"text-16\">Administration</h5>
                </div>
                <div class=\" view-administration grid grid-cols-12 2xl:grid-cols-12 gap-x-5\">
                    <a href=\"{{path('view_owner')}}\" class=\"view-owner h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-green-100 dark:bg-green-500/20 card group-data-[skin=bordered]:border-green-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"kanban\" class=\"absolute top-0 size-32 stroke-1 text-green-200 dark:text-green-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center size-12 bg-green-500 rounded-md text-15 text-green-50\">
                                <i data-lucide=\"book-user\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"{{ owners }}\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Property Owners</p>
                        </div>
                    </a>
                    <a href=\"{{path('adm_user_settings')}}\" class=\"view-emp_settings h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-sky-100 dark:bg-sky-500/20 card group-data-[skin=bordered]:bg-sky-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"list-filter\" class=\"absolute top-0 size-32 stroke-1 text-sky-200 dark:text-sky-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center size-12 bg-sky-500 rounded-md text-15 text-sky-50\">
                                <i data-lucide=\"user-round-cog\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"{{ employees }}\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">User Administration</p>
                        </div>
                    </a>
                    <a href=\"{{path('view_models')}}\" class=\"view-models h-40 col-span-12 md:order-4 sm:col-span-6 lg:col-span-3 bg-orange-100 dark:bg-orange-500/20 card group-data-[skin=bordered]:bg-orange-500/20 relative overflow-hidden group/menu-link\">
                        <div class=\"card-body px-5\">
                            <i data-lucide=\"kanban\" class=\"lucide lucide-kanban absolute top-0 stroke-1 size-32 text-orange-200 dark:text-orange-500 ltr:-right-10 rtl:-left-10 group-hover/menu-link:animate-icons\"></i>
                            <div class=\"flex items-center justify-center bg-orange-500 rounded-md size-12 text-15 text-orange-50\">
                                <i data-lucide=\"boxes\" class=\"group-hover/menu-link:animate-icons\"></i>
                            </div>
                            <h5 class=\"mt-5\"><span class=\"text-xl counter-value\" data-target=\"{{ models }}\">0</span></h5>
                            <p class=\"text-lg text-slate-500 dark:text-slate-200\">Facilities & Home Models</p>
                        </div>
                    </a>
                </div>

                {# <div class=\"col-span-12 md:order-8 2xl:col-span-9 card\" id=\"dashboardEmployee\">
                        <div class=\"card-body\">
                            <div class=\"grid items-center grid-cols-1 gap-3 mb-5 xl:grid-cols-12\">
                                <div class=\"xl:col-span-3\">
                                    <h6 class=\"text-15\">Overall Employees</h6>
                                </div><!--end col-->
                                <div class=\"xl:col-span-4 xl:col-start-10\">
                                    <div class=\"flex gap-3\">
                                        <div class=\"relative grow\">
                                            <input type=\"text\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search for ...\" autocomplete=\"off\">
                                            <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </div><!--end col-->
                            </div><!--end grid-->
                            <div class=\"-mx-5 overflow-x-auto\">
                                <table class=\"w-full whitespace-nowrap\" id=\"employeeTable\">
                                    <thead class=\"ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600\">
                                        <tr>
                                            <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500 code\" data-sort=\"code\">Employee Code</th>
                                            <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500 name\" data-sort=\"name\">Name</th>
                                            <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500 division\" data-sort=\"division\">Division</th>
                                            <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500 department\" data-sort=\"department\">Department</th>
                                            <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500 position\" data-sort=\"position\">Position</th>
                                            <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-y border-slate-200 dark:border-zink-500\">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class=\"list\">
                                        {% for employee in employees %}
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 code\"><a href=\"javascript:void(0)\">{{ employee.employee_code }}</a></td>
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 name\">
                                                    <div class=\"flex gap-2\">
                                                        <div class=\"grow\">
                                                            <h6>{{ employee.first_name }} {{ employee.last_name }}</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 division\">{{ employee.division.name }}</td>
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 department\">{{ employee.department.name }}</td>
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 position\">{{ employee.position }}</td>
                                                <td class=\"hidden\" id=\"email\" data-email=\"{{ employee.email }}\"></td>
                                                <td class=\"hidden\" id=\"cellphone\" data-cellphone=\"{{ employee.cellphone }}\"></td>
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 contact\">
                                                    <div class=\"flex gap-2\">
                                                        <button data-modal-target=\"contactDetailsModal\" id=\"contactButton\" type=\"button\" class=\"text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50\">Contact Details</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                                <div class=\"noresult\" style=\"display: none\">
                                    <div class=\"py-6 text-center\">
                                        <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                        <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                        <p class=\"mb-0 text-slate-500 dark:text-zink-200\">We've searched more than 199+ users We did not find any users for you search.</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"flex flex-col items-center mt-5 md:flex-row\">
                                <div class=\"mb-4 grow md:mb-0\">
                                    <p class=\"text-slate-500 dark:text-zink-200\">Showing <b>20</b> of <b>29</b> Results</p>
                                </div>
                                <ul class=\"flex flex-wrap items-center gap-2 shrink-0\">
                                    <li>
                                        <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\"><i class=\"size-4 mr-1 rtl:rotate-180\" data-lucide=\"chevron-left\"></i> Prev</a>
                                    </li>
                                    <li>
                                        <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\">1</a>
                                    </li>
                                    <li>
                                        <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active\">2</a>
                                    </li>
                                    <li>
                                        <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\">3</a>
                                    </li>
                                    <li>
                                        <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\">Next <i class=\"size-4 ml-1 rtl:rotate-180\" data-lucide=\"chevron-right\"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> #}
                    {# <div class=\"col-span-12 md:order-9 lg:col-span-6 lg:row-span-2 xl:col-span-4 xl:row-span-2 2xl:row-span-2 2xl:col-span-3 card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-3 text-15 grow\">Upcoming Scheduled</h6>
                            <div id=\"calendar\" class=\"w-auto p-1\"></div>
                        </div>
                    </div> #}
                <div id=\"contactDetailsModal\" modal-top class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 show\">
                    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col\">
                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                            <h5 class=\"text-16\">Contact Details</h5>
                            <button data-modal-close=\"contactDetailsModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                        </div>
                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                            <div class=\"flex flex-col gap-2 items-center justify-center\">
                                <h5 class=\"text-16\">Email Address</h5>
                                <span class=\"flex gap-2\">
                                    <i data-lucide=\"mail\" class=\"inline-block size-5 text-custom-500 fill-custom-100 dark:fill-custom-500/20\"></i>
                                    <p class=\"text-slate-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"Click to send email\" data-tooltip-placement=\"right\"><a href=\"\" id=\"modalEmail\" class=\"text-blue-500 hover:underline-offset-4\"></a></p>
                                </span>
                                <h5 class=\"text-16\">Cellphone Number</h5>
                                <span class=\"flex gap-2\">
                                    <i data-lucide=\"phone\" class=\"inline-block size-5 text-custom-500 fill-custom-100 dark:fill-custom-500/20\"></i>
                                    <p class=\"text-slate-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"Click to call\" data-tooltip-placement=\"right\"><a href=\"\" id=\"modalCellphone\" class=\"text-blue-500 hover:underline-offset-4\"></a></p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
           

{% endblock %}
    
{% block javascripts %}
<script src=\"{{ asset('assets/libs/list.js/list.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/list.pagination.js/list.pagination.min.js') }}\"></script>
<!-- vanila calendar -->
<script src=\"assets/libs/vanilla-calendar-pro/build/vanilla-calendar.min.js\"></script>

{# <script src=\"{{ asset('assets/js/pages/dashboards-hr.init.js') }}\"></script> #}
<script src=\"{{ asset('assets/js/pages/apps-list-init.js') }}\"></script>

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{{ javascriptSnippet|default('')|raw }}
{# <script src=\"assets/js/app.js\"></script> #}

<script>
\$(document).ready(function() {
    \$('#employeeTable').on('click', '#contactButton', function () {
        var \$row = \$(this).closest('tr');
        var email = \$row.find('td:eq(5)').data('email');
        var cellphone = \$row.find('td:eq(6)').data('cellphone');
        
        // Empty fields
        \$('#modalEmail').attr('href', 'javascript:void(0)').text('');
        \$('#modalCellphone').attr('href', 'javascript:void(0)').text('');

        email === \"\" ? \$('#modalEmail').text('No email address provided.') : \$('#modalEmail').attr('href', 'mailto:' + email).text(email);
        cellphone === \"\" ? \$('#modalCellphone').text('No cellphone number provided.') : \$('#modalCellphone').attr('href', 'tel:' + cellphone).text(cellphone);
    });
});
</script>
{% endblock %}", "dashboards-hr.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\dashboards-hr.html.twig");
    }
}
