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

/* manpower/apps-attendance.html.twig */
class __TwigTemplate_61c90ca412bfe5f48f18b6efded6703b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manpower/apps-attendance.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manpower/apps-attendance.html.twig"));

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

        yield "Daily Time Records";
        
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

    // line 6
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

        // line 7
        yield "
            ";
        // line 8
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Daily Time Records", "title" => "Daily Time Records"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5\">
                    ";
        // line 12
        yield "                    <div class=\"xl:col-span-9 lg:col-span-12\">
                        <div class=\"card\" id=\"manpowerTable\">
                            <div class=\"card-body\">
                                <div class=\"grid grid-cols-1 gap-4 mb-5 lg:grid-cols-2 xl:grid-cols-12\">
                                    <div class=\"xl:col-span-3\">
                                        <div class=\"relative\">
                                            <input type=\"text\" id=\"searchInput\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search for ...\" autocomplete=\"off\">
                                            <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                        </div>
                                    </div><!--end col-->
                                    <div class=\"xl:col-span-3\">
                                        <div>
                                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\" id=\"worker_log_date\">
                                        </div>
                                    </div><!--end col-->
                                    <div class=\"flex justify-end gap-2 text-right lg:col-span-2 xl:col-span-4 xl:col-start-10\">
                                        <button type=\"button\" class=\"add-daily_time_record bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20\" data-modal-target=\"importCSV\"><i data-lucide=\"upload\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Import DTR</span></button>
                                        <button type=\"button\" class=\"add-daily_time_record text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\" data-modal-target=\"exportCSV\"><i data-lucide=\"download\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Export Manpower Monitoring</span></button>
                                    </div>
                                </div><!--end grid-->
                                <div class=\"overflow-x-auto\">
                                    <table class=\"w-full whitespace-nowrap\">
                                        <thead class=\"ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600\">
                                            <tr>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Employee Code</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Employee Name</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Date</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Check In</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Check Out</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Rendered Hours</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"tbody_worker_logs\" class=\"list\">
                                            ";
        // line 46
        yield "                                        </tbody>
                                    </table>
                                    <div class=\"noresult\" id=\"noresult\" style=\"display:none;\">
                                        <div class=\"py-6 text-center\">
                                            <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                            <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                            <p class=\"mb-0 text-slate-500 dark:text-zink-200\">Try a different keyword or date.</p>
                                        </div>
                                    </div>
                                </div>
                        <div class=\"flex flex-col items-center gap-4 px-4 mt-4 md:flex-row\" id=\"pagination-element\">
                            <div class=\"grow\">
                                <p class=\"text-slate-500 dark:text-zink-200\">Showing <b class=\"showing\">0</b> of <b class=\"total-records\">0</b> Results</p>
                            </div>
                            <div class=\"col-sm-auto mt-sm-0 flex flex-cols flex-wrap gap-2 pagination-container items-center\">
                                <a id=\"pagination-first\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500\"> 
                                    <i class=\"size-4 mr-1 rtl:rotate-180\" data-lucide=\"chevrons-left\"></i> First
                                </a>
                                <ul class=\"listjs-pagination flex flex-wrap items-center gap-2\"></ul>
                                <a id=\"pagination-last\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500\">
                                    Last <i class=\"size-4 ml-1 rtl:rotate-180\" data-lucide=\"chevrons-right\"></i>
                                </a>
                            </div>
                        </div>

                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->

<div id=\"importCSV\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Import CSV</h5>
            <button data-modal-close=\"importCSV\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("import_dtr");
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
                <div>
                    <input type=\"file\" class=\"cursor-pointer form-file form-file-sm border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500\" placeholder=\"Employee CSV\" name=\"csv_file\" accept=\".csv\">
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" data-modal-close=\"importCSV\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                    <button type=\"submit\" class=\"add-daily_time_record text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id=\"exportCSV\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[40rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\">Export Manpower Monitoring</h5>
            <button data-modal-close=\"exportCSV\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form id=\"export-form\" action=\"#\" method=\"post\">
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\" id=\"export-form-container\">
                    <div class=\"xl:col-span-12\">
                        <label for=\"filter\" class=\"inline-block mb-2 text-base font-medium\">Filter By</label>
                        <select name=\"filter\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"filter\">
                            <option value=\"project\">Project</option>
                            <option value=\"task_activity\">Task/Activity</option>
                            <option value=\"employee\">Employee</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-12 active\" id=\"project-container\">
                        <label for=\"project\" class=\"inline-block mb-2 text-base font-medium\">Projects</label>
                        <select name=\"project\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"project\">
                            <option value=\"all\">All Projects</option>
                            ";
        // line 116
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 116, $this->source); })())) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 116, $this->source); })())) > 0))) {
            // line 117
            yield "                               ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 117, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 118
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 118), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 118), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield " 
                            ";
        }
        // line 121
        yield "                        </select>
                    </div>
                    <div class=\"xl:col-span-12 hidden\" id=\"task-activity-container\">
                        <label for=\"task_activity\" class=\"inline-block mb-2 text-base font-medium\">Tasks/Activities</label>
                        <select name=\"task_activity\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"task_activity\">
                            <option value=\"all\">All Tasks/Activities</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-12 hidden\" id=\"employee-container\">
                        <label for=\"employee\" class=\"inline-block mb-2 text-base font-medium\">Employees</label>
                        <select name=\"employee\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"employee\">
                            ";
        // line 132
        if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["employee_list"]) || array_key_exists("employee_list", $context) ? $context["employee_list"] : (function () { throw new RuntimeError('Variable "employee_list" does not exist.', 132, $this->source); })())) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["employee_list"]) || array_key_exists("employee_list", $context) ? $context["employee_list"] : (function () { throw new RuntimeError('Variable "employee_list" does not exist.', 132, $this->source); })())) > 0))) {
            // line 133
            yield "                               ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["employee_list"]) || array_key_exists("employee_list", $context) ? $context["employee_list"] : (function () { throw new RuntimeError('Variable "employee_list" does not exist.', 133, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["emp_item"]) {
                // line 134
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_item"], "id", [], "any", false, false, false, 134), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_item"], "last_name", [], "any", false, false, false, 134), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_item"], "first_name", [], "any", false, false, false, 134), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['emp_item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            yield " 
                            ";
        }
        // line 137
        yield "                        </select>
                    </div>
                    <div class=\"xl:col-span-12\" id=\"date-container\">
                        <label for=\"date\" class=\"inline-block mb-2 text-base font-medium\">Date Selection</label>
                        <input type=\"text\" id=\"date\" name=\"date\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\">
                    </div>
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"button\" id=\"close-modal\" data-modal-close=\"exportCSV\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"delete-daily_time_record text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 154
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

        // line 155
        yield "
<!-- App js -->
<script src=\"";
        // line 157
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 158
        yield ((array_key_exists("javascriptSnippet", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["javascriptSnippet"]) || array_key_exists("javascriptSnippet", $context) ? $context["javascriptSnippet"] : (function () { throw new RuntimeError('Variable "javascriptSnippet" does not exist.', 158, $this->source); })()), "")) : (""));
        yield "

<!-- Your List.js build (already includes pagination module) -->
<script src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>

<script>
  // === List.js setup (global) ===
  // We initialize early so populateTable() can call reIndex()/update()
  window.employeeTable = new List('manpowerTable', {
    valueNames: [
      'employee_code',
      'employee_name',
      'date',
      'check_in',
      'check_out',
      'work_hours',
    ],
    // Provide a template so List.js can initialize even when tbody is empty
    item: `
      <tr>
        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 employee_code\"></td>
        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 employee_name\"></td>
        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 date\"></td>
        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 check_in\"></td>
        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 check_out\"></td>
        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 work_hours\"></td>
      </tr>
    `,
    page: 10,
    pagination: [{
      paginationClass: 'listjs-pagination',
      item: \"<li><a class='page' href='javascript:void(0)'></a></li>\"
    }]
  });

  // Counters + no-result toggle each update
  employeeTable.on('updated', function (list) {
    var total = list.items.length;
    var showing = list.visibleItems.length;
    document.querySelector('.showing').textContent = showing;
    document.querySelector('.total-records').textContent = total;

    var nores = document.getElementById('noresult');
    nores.style.display = (showing === 0) ? 'block' : 'none';

    if (window.lucide && lucide.createIcons) lucide.createIcons();
  });

  // First / Last button handlers
  function goFirst(){ employeeTable.show(1, employeeTable.page); }
  function goLast(){
    var perPage = employeeTable.page;
    var count = employeeTable.matchingItems.length;
    if (!count) return;
    var start = (Math.floor((count - 1) / perPage) * perPage) + 1; // 1-based index
    employeeTable.show(start, perPage);
  }
  document.addEventListener('DOMContentLoaded', function(){
    var firstBtn = document.getElementById('pagination-first');
    var lastBtn  = document.getElementById('pagination-last');
    if (firstBtn) firstBtn.addEventListener('click', function(e){ e.preventDefault(); goFirst(); });
    if (lastBtn)  lastBtn.addEventListener('click',  function(e){ e.preventDefault(); goLast();  });
  });
</script>

<script>
    // Removed: manual search/filter handler — List.js handles .search input automatically

    \$(document).ready(function() {
        const attendanceUrl = \"/manpower/attendance/\";
        var selectedWorker = \$('#select_worker');
        var today = new Date();
        var fullname = '';
        var position = '';
        var year = today.getFullYear();
        var month = String(today.getMonth() + 1).padStart(2, '0');
        var day = String(today.getDate()).padStart(2, '0');
        var formattedDate = year + '-' + month + '-' + day;
        var jsonObject = {
            \"start_date\": formattedDate,
            \"end_date\": formattedDate
        };
        var dateWorker = \$('#worker_log_date').val(formattedDate);

        selectedWorker.on('change', async function() {
            dateWorker.val('');
            var selectedWorkerId = \$(this).val();
            if(!selectedWorkerId){
                const tableBody = \$(\"#tbody_worker_logs\");
                tableBody.empty();
                \$('#emp_profile').hide();
                \$('#default_card').show();
                \$('#noresult').show();
                employeeTable.reIndex();
                employeeTable.update();
            }
            else{
                \$('#emp_profile').show();
                \$('#default_card').hide();

                var worker_log_reposnse = await apiCall('POST', 'api/worker/' + selectedWorkerId, jsonObject);
                if (!worker_log_reposnse || Object.keys(worker_log_reposnse).length === 0) {
                    \$('#noresult').show();
                    \$(\"#tbody_worker_logs\").empty();
                    employeeTable.reIndex();
                    employeeTable.update();
                } else {
                    \$('#noresult').hide();
                    populateTable(worker_log_reposnse.worker_logs);
                }

                var worker_profile = await apiCall('GET', 'api/worker_logs', '');
                fullname = worker_profile.workers[0].emp_record.first_name + \" \" + worker_profile.workers[0].emp_record.last_name
                position = worker_profile.workers[0].position;
                updateWorkerDetails(worker_profile.workers[0].empcode, '5 years', '2020-01-01', '5', '218.4 Hrs', '172 Hrs', '24 Hrs', '22.40 Hrs', fullname, position);
            }
        });

        dateWorker.on('change', async function() {
            var selectDate = \$(this).val();
            var dates = selectDate.split(' to ');
            var startDate, endDate;
            if (dates.length === 2) {
                startDate = dates[0].trim();
                endDate = dates[1].trim();
            } else {
                startDate = dates[0].trim();
                endDate = startDate;
            }
            var jsonObject = {
                \"start_date\": startDate,
                \"end_date\": endDate
            };
            var worker_log_reposnse = await apiCall('POST', 'api/worker_logs', jsonObject);
            if (!worker_log_reposnse || Object.keys(worker_log_reposnse.worker_logs).length === 0) {
                \$('#noresult').show();
                \$(\"#tbody_worker_logs\").empty();
                employeeTable.reIndex();
                employeeTable.update();
            } else {
                \$('#noresult').hide();
                populateTable(worker_log_reposnse.worker_logs);
            }
        });

        /* Exporting of DTR CSV Handler */
        const firstOption = \$('#project option:first').clone();        

        \$('#filter').on('change', function () {
            var filter = \$(this).val();
            const formContainer = \$('#export-form-container');

            \$('#project-container, #task-activity-container, #employee-container').removeClass('active').addClass('hidden');

            switch (filter) {
                case 'task_activity':
                    \$('#project-container').removeClass('hidden').addClass('active');
                    \$('#task-activity-container').removeClass('hidden').addClass('active');
                    \$('#project option:first').remove();
                    break;
                case 'employee':
                    \$('#employee-container').removeClass('hidden').addClass('active');
                    \$('#project').prepend(firstOption);
                    break;
                default:
                    \$('#project-container').removeClass('hidden').addClass('active');
                    \$('#project').prepend(firstOption);
                    break;
            }
        });

        \$('#export-form').on('submit', function (e) {
            e.preventDefault();
            var filter = \$('#filter').val();
            var project = \$('#project').val();
            var task_activity = \$('#task_activity').val();
            var employee = \$('#employee').val();
            var date = \$('#date').val();

            \$.ajax({
                url: '/manpower/export_xls',
                method: 'POST',
                data: {
                    filter: filter,
                    project: project,
                    task_activity: task_activity,
                    employee: employee,
                    date: date
                },
                xhrFields: { responseType: 'blob' },
                success: function(data) {
                    var a = document.createElement('a');
                    var url = window.URL.createObjectURL(data);
                    a.href = url;
                    a.download = 'timesheet.xlsx';
                    document.body.append(a);
                    a.click();
                    a.remove();
                    window.URL.revokeObjectURL(url);
                },
                error: function(xhr, status, error) {
                    console.error('Error exporting timesheet:', status, error);
                }
            });
        })
        /* Exporting of DTR CSV Handler End */

        function updateWorkerDetails(employeeId, experience, joiningDate, totalHoursYears, totalHours, regularHours, overtime, holiday, fullname, position) {
            \$('#employeeId').text(employeeId);
            \$('#emp_name').text(fullname);
            \$('#emp_position').text(position);
        }

        // Function to populate the table
        function populateTable(data) {
            // Map API rows to List.js values objects
            var rows = [];
            var total_hours_month = 0;

            data.forEach(item => {
                var loginDate = null;
                var logoutDate = null;
                var empLink = attendanceUrl + item.user.id + \"/\" + item.user.emp_record.employee_code;
                var fullname = item.user.emp_record.last_name + ', ' + item.user.emp_record.first_name;

                if(item.loginDate){
                    loginDate = new Date(item.loginDate.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                    loginDate = new Date(loginDate.toLocaleString(\"en-US\", {timeZone: \"Asia/Manila\"}));
                }
                if(item.logoutDate){
                    logoutDate = new Date(item.logoutDate.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                    logoutDate = new Date(logoutDate.toLocaleString(\"en-US\", {timeZone: \"Asia/Manila\"}));
                }

                function formatTime(date) {
                    if (!date || isNaN(date)) return '';
                    const hours = date.getHours();
                    const minutes = date.getMinutes();
                    const ampm = hours >= 12 ? 'PM' : 'AM';
                    const formattedHours = hours % 12 || 12;
                    const formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
                    return formattedHours + ':' + formattedMinutes + ' ' + ampm;
                }
                function formatDate(dateString) {
                    var d = new Date(dateString.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                    d = new Date(d.toLocaleString(\"en-US\", {timeZone: \"Asia/Manila\"}));
                    const options = { day: 'numeric', month: 'short', year: 'numeric', timeZone: \"Asia/Manila\" };
                    return d.toLocaleDateString('en-US', options);
                }

                const dForDay = new Date(item.loginDate);
                const days = [\"Sun\", \"Mon\", \"Tue\", \"Wed\", \"Thu\", \"Fri\", \"Sat\"];
                const day = days[dForDay.getUTCDay()] || '';

                var loginTime = loginDate ? formatTime(loginDate) : '';
                var logoutTime = logoutDate ? formatTime(logoutDate) : '';

                var diffHours = 0;
                if(logoutDate && loginDate){
                    var diffMilliseconds = Math.abs(logoutDate - loginDate);
                    diffHours = diffMilliseconds / (1000 * 60 * 60);
                }
                total_hours_month += parseFloat(diffHours.toFixed(2));

                rows.push({
                    employee_code: `<a class=\"text-custom-500\" href=\"\${empLink}\">\${item.user.emp_record.employee_code}</a>`,
                    employee_name: fullname,
                    date: `\${formatDate(item.loginDate)} <span class=\\\"px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-slate-400 text-slate-500 dark:bg-zink-700 dark:border-zink-400 dark:text-zink-200 ltr:ml-1 rtl:mr-1 align-middle\\\">\${day}</span>`,
                    check_in: loginTime,
                    check_out: logoutTime,
                    work_hours: diffHours.toFixed(2)
                });
            });

            \$('#total_hours_per_month').text(total_hours_month.toFixed(2));

            // Use List.js API instead of manual DOM to keep pagination state consistent
            employeeTable.clear();
            if (rows.length) {
                employeeTable.add(rows);
            }
            employeeTable.show(1, employeeTable.page); // reset to first page after new data
            employeeTable.update();
        }

        // Project → Task chaining
        \$('#project').on('change', async function () {
            var project_id = \$(this).val();
            var jsonObject = { \"project_id\": project_id };
            var response = await apiCall('POST', 'api/dtr-filter-by-task', jsonObject);
            var \$taskSelect = \$('#task_activity');
            \$taskSelect.empty();
            \$taskSelect.append('<option value=\"all\">All Tasks/Activities</option>');
            if (Array.isArray(response) && response.length) {
                response.forEach(task => {
                    \$taskSelect.append(`<option value=\"\${task.description}\">\${task.description}</option>`);
                });
            } else {
                \$taskSelect.append('<option value=\"\">No tasks available</option>');
            }
        });

        // Initial load
        dateWorker.trigger('change');
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
        return "manpower/apps-attendance.html.twig";
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
        return array (  355 => 161,  349 => 158,  345 => 157,  341 => 155,  328 => 154,  302 => 137,  298 => 135,  285 => 134,  280 => 133,  278 => 132,  265 => 121,  261 => 119,  250 => 118,  245 => 117,  243 => 116,  207 => 83,  168 => 46,  133 => 12,  127 => 8,  124 => 7,  111 => 6,  89 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Daily Time Records{% endblock %}
{% block stylesheets %}
{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Daily Time Records', title: 'Daily Time Records' }) }}

                <div class=\"grid grid-cols-1 gap-x-5\">
                    {# Metrics cards omitted for brevity #}
                    <div class=\"xl:col-span-9 lg:col-span-12\">
                        <div class=\"card\" id=\"manpowerTable\">
                            <div class=\"card-body\">
                                <div class=\"grid grid-cols-1 gap-4 mb-5 lg:grid-cols-2 xl:grid-cols-12\">
                                    <div class=\"xl:col-span-3\">
                                        <div class=\"relative\">
                                            <input type=\"text\" id=\"searchInput\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search for ...\" autocomplete=\"off\">
                                            <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                        </div>
                                    </div><!--end col-->
                                    <div class=\"xl:col-span-3\">
                                        <div>
                                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\" id=\"worker_log_date\">
                                        </div>
                                    </div><!--end col-->
                                    <div class=\"flex justify-end gap-2 text-right lg:col-span-2 xl:col-span-4 xl:col-start-10\">
                                        <button type=\"button\" class=\"add-daily_time_record bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20\" data-modal-target=\"importCSV\"><i data-lucide=\"upload\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Import DTR</span></button>
                                        <button type=\"button\" class=\"add-daily_time_record text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\" data-modal-target=\"exportCSV\"><i data-lucide=\"download\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Export Manpower Monitoring</span></button>
                                    </div>
                                </div><!--end grid-->
                                <div class=\"overflow-x-auto\">
                                    <table class=\"w-full whitespace-nowrap\">
                                        <thead class=\"ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600\">
                                            <tr>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Employee Code</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Employee Name</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Date</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Check In</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Check Out</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Rendered Hours</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"tbody_worker_logs\" class=\"list\">
                                            {# Rows injected via JS #}
                                        </tbody>
                                    </table>
                                    <div class=\"noresult\" id=\"noresult\" style=\"display:none;\">
                                        <div class=\"py-6 text-center\">
                                            <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                            <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                            <p class=\"mb-0 text-slate-500 dark:text-zink-200\">Try a different keyword or date.</p>
                                        </div>
                                    </div>
                                </div>
                        <div class=\"flex flex-col items-center gap-4 px-4 mt-4 md:flex-row\" id=\"pagination-element\">
                            <div class=\"grow\">
                                <p class=\"text-slate-500 dark:text-zink-200\">Showing <b class=\"showing\">0</b> of <b class=\"total-records\">0</b> Results</p>
                            </div>
                            <div class=\"col-sm-auto mt-sm-0 flex flex-cols flex-wrap gap-2 pagination-container items-center\">
                                <a id=\"pagination-first\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500\"> 
                                    <i class=\"size-4 mr-1 rtl:rotate-180\" data-lucide=\"chevrons-left\"></i> First
                                </a>
                                <ul class=\"listjs-pagination flex flex-wrap items-center gap-2\"></ul>
                                <a id=\"pagination-last\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500\">
                                    Last <i class=\"size-4 ml-1 rtl:rotate-180\" data-lucide=\"chevrons-right\"></i>
                                </a>
                            </div>
                        </div>

                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->

<div id=\"importCSV\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Import CSV</h5>
            <button data-modal-close=\"importCSV\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"{{path('import_dtr')}}\" method=\"post\" enctype=\"multipart/form-data\">
                <div>
                    <input type=\"file\" class=\"cursor-pointer form-file form-file-sm border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500\" placeholder=\"Employee CSV\" name=\"csv_file\" accept=\".csv\">
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" data-modal-close=\"importCSV\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                    <button type=\"submit\" class=\"add-daily_time_record text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id=\"exportCSV\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[40rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\">Export Manpower Monitoring</h5>
            <button data-modal-close=\"exportCSV\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form id=\"export-form\" action=\"#\" method=\"post\">
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\" id=\"export-form-container\">
                    <div class=\"xl:col-span-12\">
                        <label for=\"filter\" class=\"inline-block mb-2 text-base font-medium\">Filter By</label>
                        <select name=\"filter\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"filter\">
                            <option value=\"project\">Project</option>
                            <option value=\"task_activity\">Task/Activity</option>
                            <option value=\"employee\">Employee</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-12 active\" id=\"project-container\">
                        <label for=\"project\" class=\"inline-block mb-2 text-base font-medium\">Projects</label>
                        <select name=\"project\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"project\">
                            <option value=\"all\">All Projects</option>
                            {% if projects is not empty and projects|length > 0 %}
                               {% for project in projects %}
                                    <option value=\"{{ project.id }}\">{{ project.name }}</option>
                                {% endfor %} 
                            {% endif %}
                        </select>
                    </div>
                    <div class=\"xl:col-span-12 hidden\" id=\"task-activity-container\">
                        <label for=\"task_activity\" class=\"inline-block mb-2 text-base font-medium\">Tasks/Activities</label>
                        <select name=\"task_activity\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"task_activity\">
                            <option value=\"all\">All Tasks/Activities</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-12 hidden\" id=\"employee-container\">
                        <label for=\"employee\" class=\"inline-block mb-2 text-base font-medium\">Employees</label>
                        <select name=\"employee\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"employee\">
                            {% if employee_list is not empty and employee_list|length > 0 %}
                               {% for emp_item in employee_list %}
                                    <option value=\"{{ emp_item.id }}\">{{ emp_item.last_name }}, {{ emp_item.first_name }}</option>
                                {% endfor %} 
                            {% endif %}
                        </select>
                    </div>
                    <div class=\"xl:col-span-12\" id=\"date-container\">
                        <label for=\"date\" class=\"inline-block mb-2 text-base font-medium\">Date Selection</label>
                        <input type=\"text\" id=\"date\" name=\"date\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\">
                    </div>
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"button\" id=\"close-modal\" data-modal-close=\"exportCSV\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"delete-daily_time_record text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}
    
{% block javascripts %}

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{{ javascriptSnippet|default('')|raw }}

<!-- Your List.js build (already includes pagination module) -->
<script src=\"{{ asset('assets/libs/list.js/list.min.js') }}\"></script>

<script>
  // === List.js setup (global) ===
  // We initialize early so populateTable() can call reIndex()/update()
  window.employeeTable = new List('manpowerTable', {
    valueNames: [
      'employee_code',
      'employee_name',
      'date',
      'check_in',
      'check_out',
      'work_hours',
    ],
    // Provide a template so List.js can initialize even when tbody is empty
    item: `
      <tr>
        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 employee_code\"></td>
        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 employee_name\"></td>
        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 date\"></td>
        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 check_in\"></td>
        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 check_out\"></td>
        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 work_hours\"></td>
      </tr>
    `,
    page: 10,
    pagination: [{
      paginationClass: 'listjs-pagination',
      item: \"<li><a class='page' href='javascript:void(0)'></a></li>\"
    }]
  });

  // Counters + no-result toggle each update
  employeeTable.on('updated', function (list) {
    var total = list.items.length;
    var showing = list.visibleItems.length;
    document.querySelector('.showing').textContent = showing;
    document.querySelector('.total-records').textContent = total;

    var nores = document.getElementById('noresult');
    nores.style.display = (showing === 0) ? 'block' : 'none';

    if (window.lucide && lucide.createIcons) lucide.createIcons();
  });

  // First / Last button handlers
  function goFirst(){ employeeTable.show(1, employeeTable.page); }
  function goLast(){
    var perPage = employeeTable.page;
    var count = employeeTable.matchingItems.length;
    if (!count) return;
    var start = (Math.floor((count - 1) / perPage) * perPage) + 1; // 1-based index
    employeeTable.show(start, perPage);
  }
  document.addEventListener('DOMContentLoaded', function(){
    var firstBtn = document.getElementById('pagination-first');
    var lastBtn  = document.getElementById('pagination-last');
    if (firstBtn) firstBtn.addEventListener('click', function(e){ e.preventDefault(); goFirst(); });
    if (lastBtn)  lastBtn.addEventListener('click',  function(e){ e.preventDefault(); goLast();  });
  });
</script>

<script>
    // Removed: manual search/filter handler — List.js handles .search input automatically

    \$(document).ready(function() {
        const attendanceUrl = \"/manpower/attendance/\";
        var selectedWorker = \$('#select_worker');
        var today = new Date();
        var fullname = '';
        var position = '';
        var year = today.getFullYear();
        var month = String(today.getMonth() + 1).padStart(2, '0');
        var day = String(today.getDate()).padStart(2, '0');
        var formattedDate = year + '-' + month + '-' + day;
        var jsonObject = {
            \"start_date\": formattedDate,
            \"end_date\": formattedDate
        };
        var dateWorker = \$('#worker_log_date').val(formattedDate);

        selectedWorker.on('change', async function() {
            dateWorker.val('');
            var selectedWorkerId = \$(this).val();
            if(!selectedWorkerId){
                const tableBody = \$(\"#tbody_worker_logs\");
                tableBody.empty();
                \$('#emp_profile').hide();
                \$('#default_card').show();
                \$('#noresult').show();
                employeeTable.reIndex();
                employeeTable.update();
            }
            else{
                \$('#emp_profile').show();
                \$('#default_card').hide();

                var worker_log_reposnse = await apiCall('POST', 'api/worker/' + selectedWorkerId, jsonObject);
                if (!worker_log_reposnse || Object.keys(worker_log_reposnse).length === 0) {
                    \$('#noresult').show();
                    \$(\"#tbody_worker_logs\").empty();
                    employeeTable.reIndex();
                    employeeTable.update();
                } else {
                    \$('#noresult').hide();
                    populateTable(worker_log_reposnse.worker_logs);
                }

                var worker_profile = await apiCall('GET', 'api/worker_logs', '');
                fullname = worker_profile.workers[0].emp_record.first_name + \" \" + worker_profile.workers[0].emp_record.last_name
                position = worker_profile.workers[0].position;
                updateWorkerDetails(worker_profile.workers[0].empcode, '5 years', '2020-01-01', '5', '218.4 Hrs', '172 Hrs', '24 Hrs', '22.40 Hrs', fullname, position);
            }
        });

        dateWorker.on('change', async function() {
            var selectDate = \$(this).val();
            var dates = selectDate.split(' to ');
            var startDate, endDate;
            if (dates.length === 2) {
                startDate = dates[0].trim();
                endDate = dates[1].trim();
            } else {
                startDate = dates[0].trim();
                endDate = startDate;
            }
            var jsonObject = {
                \"start_date\": startDate,
                \"end_date\": endDate
            };
            var worker_log_reposnse = await apiCall('POST', 'api/worker_logs', jsonObject);
            if (!worker_log_reposnse || Object.keys(worker_log_reposnse.worker_logs).length === 0) {
                \$('#noresult').show();
                \$(\"#tbody_worker_logs\").empty();
                employeeTable.reIndex();
                employeeTable.update();
            } else {
                \$('#noresult').hide();
                populateTable(worker_log_reposnse.worker_logs);
            }
        });

        /* Exporting of DTR CSV Handler */
        const firstOption = \$('#project option:first').clone();        

        \$('#filter').on('change', function () {
            var filter = \$(this).val();
            const formContainer = \$('#export-form-container');

            \$('#project-container, #task-activity-container, #employee-container').removeClass('active').addClass('hidden');

            switch (filter) {
                case 'task_activity':
                    \$('#project-container').removeClass('hidden').addClass('active');
                    \$('#task-activity-container').removeClass('hidden').addClass('active');
                    \$('#project option:first').remove();
                    break;
                case 'employee':
                    \$('#employee-container').removeClass('hidden').addClass('active');
                    \$('#project').prepend(firstOption);
                    break;
                default:
                    \$('#project-container').removeClass('hidden').addClass('active');
                    \$('#project').prepend(firstOption);
                    break;
            }
        });

        \$('#export-form').on('submit', function (e) {
            e.preventDefault();
            var filter = \$('#filter').val();
            var project = \$('#project').val();
            var task_activity = \$('#task_activity').val();
            var employee = \$('#employee').val();
            var date = \$('#date').val();

            \$.ajax({
                url: '/manpower/export_xls',
                method: 'POST',
                data: {
                    filter: filter,
                    project: project,
                    task_activity: task_activity,
                    employee: employee,
                    date: date
                },
                xhrFields: { responseType: 'blob' },
                success: function(data) {
                    var a = document.createElement('a');
                    var url = window.URL.createObjectURL(data);
                    a.href = url;
                    a.download = 'timesheet.xlsx';
                    document.body.append(a);
                    a.click();
                    a.remove();
                    window.URL.revokeObjectURL(url);
                },
                error: function(xhr, status, error) {
                    console.error('Error exporting timesheet:', status, error);
                }
            });
        })
        /* Exporting of DTR CSV Handler End */

        function updateWorkerDetails(employeeId, experience, joiningDate, totalHoursYears, totalHours, regularHours, overtime, holiday, fullname, position) {
            \$('#employeeId').text(employeeId);
            \$('#emp_name').text(fullname);
            \$('#emp_position').text(position);
        }

        // Function to populate the table
        function populateTable(data) {
            // Map API rows to List.js values objects
            var rows = [];
            var total_hours_month = 0;

            data.forEach(item => {
                var loginDate = null;
                var logoutDate = null;
                var empLink = attendanceUrl + item.user.id + \"/\" + item.user.emp_record.employee_code;
                var fullname = item.user.emp_record.last_name + ', ' + item.user.emp_record.first_name;

                if(item.loginDate){
                    loginDate = new Date(item.loginDate.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                    loginDate = new Date(loginDate.toLocaleString(\"en-US\", {timeZone: \"Asia/Manila\"}));
                }
                if(item.logoutDate){
                    logoutDate = new Date(item.logoutDate.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                    logoutDate = new Date(logoutDate.toLocaleString(\"en-US\", {timeZone: \"Asia/Manila\"}));
                }

                function formatTime(date) {
                    if (!date || isNaN(date)) return '';
                    const hours = date.getHours();
                    const minutes = date.getMinutes();
                    const ampm = hours >= 12 ? 'PM' : 'AM';
                    const formattedHours = hours % 12 || 12;
                    const formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
                    return formattedHours + ':' + formattedMinutes + ' ' + ampm;
                }
                function formatDate(dateString) {
                    var d = new Date(dateString.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                    d = new Date(d.toLocaleString(\"en-US\", {timeZone: \"Asia/Manila\"}));
                    const options = { day: 'numeric', month: 'short', year: 'numeric', timeZone: \"Asia/Manila\" };
                    return d.toLocaleDateString('en-US', options);
                }

                const dForDay = new Date(item.loginDate);
                const days = [\"Sun\", \"Mon\", \"Tue\", \"Wed\", \"Thu\", \"Fri\", \"Sat\"];
                const day = days[dForDay.getUTCDay()] || '';

                var loginTime = loginDate ? formatTime(loginDate) : '';
                var logoutTime = logoutDate ? formatTime(logoutDate) : '';

                var diffHours = 0;
                if(logoutDate && loginDate){
                    var diffMilliseconds = Math.abs(logoutDate - loginDate);
                    diffHours = diffMilliseconds / (1000 * 60 * 60);
                }
                total_hours_month += parseFloat(diffHours.toFixed(2));

                rows.push({
                    employee_code: `<a class=\"text-custom-500\" href=\"\${empLink}\">\${item.user.emp_record.employee_code}</a>`,
                    employee_name: fullname,
                    date: `\${formatDate(item.loginDate)} <span class=\\\"px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-slate-400 text-slate-500 dark:bg-zink-700 dark:border-zink-400 dark:text-zink-200 ltr:ml-1 rtl:mr-1 align-middle\\\">\${day}</span>`,
                    check_in: loginTime,
                    check_out: logoutTime,
                    work_hours: diffHours.toFixed(2)
                });
            });

            \$('#total_hours_per_month').text(total_hours_month.toFixed(2));

            // Use List.js API instead of manual DOM to keep pagination state consistent
            employeeTable.clear();
            if (rows.length) {
                employeeTable.add(rows);
            }
            employeeTable.show(1, employeeTable.page); // reset to first page after new data
            employeeTable.update();
        }

        // Project → Task chaining
        \$('#project').on('change', async function () {
            var project_id = \$(this).val();
            var jsonObject = { \"project_id\": project_id };
            var response = await apiCall('POST', 'api/dtr-filter-by-task', jsonObject);
            var \$taskSelect = \$('#task_activity');
            \$taskSelect.empty();
            \$taskSelect.append('<option value=\"all\">All Tasks/Activities</option>');
            if (Array.isArray(response) && response.length) {
                response.forEach(task => {
                    \$taskSelect.append(`<option value=\"\${task.description}\">\${task.description}</option>`);
                });
            } else {
                \$taskSelect.append('<option value=\"\">No tasks available</option>');
            }
        });

        // Initial load
        dateWorker.trigger('change');
    });
</script>

{% endblock %}
", "manpower/apps-attendance.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\manpower\\apps-attendance.html.twig");
    }
}
