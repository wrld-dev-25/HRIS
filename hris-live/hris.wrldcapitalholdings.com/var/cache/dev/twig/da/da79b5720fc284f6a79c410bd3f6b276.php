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

/* dashboards-hr.html.twig */
class __TwigTemplate_463018fa401079d0e0bce22dec86b1ad extends Template
{
    private $source;
    private $macros = [];

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

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboards-hr.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "dashboards-hr.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "HR";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "
            ";
        // line 7
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Dashboard", "title" => "Dashboard", "pageLink" => "/dashboards-hr"]);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["employees"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["dtr_count"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["divisions"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["departments"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["manpower_count"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["projects"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subdivisions"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["owners"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["employees"] ?? null), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["models"] ?? null), "html", null, true);
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 240
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        yield ((array_key_exists("javascriptSnippet", $context)) ? (Twig\Extension\CoreExtension::default(($context["javascriptSnippet"] ?? null), "")) : (""));
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "dashboards-hr.html.twig";
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
        return array (  341 => 253,  337 => 251,  333 => 250,  326 => 247,  319 => 242,  314 => 241,  307 => 240,  275 => 214,  273 => 208,  264 => 118,  255 => 112,  248 => 108,  239 => 102,  232 => 98,  223 => 92,  211 => 83,  202 => 77,  195 => 73,  186 => 67,  179 => 63,  170 => 57,  158 => 48,  149 => 42,  142 => 38,  133 => 32,  126 => 28,  117 => 22,  110 => 18,  101 => 12,  93 => 7,  90 => 6,  83 => 5,  70 => 3,  56 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboards-hr.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\dashboards-hr.html.twig");
    }
}
