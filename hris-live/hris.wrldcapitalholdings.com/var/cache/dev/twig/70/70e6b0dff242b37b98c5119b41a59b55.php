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

/* manpower/apps-manpower.html.twig */
class __TwigTemplate_dcdf6551cd34e8840abe4beab375f1e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manpower/apps-manpower.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manpower/apps-manpower.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "manpower/apps-manpower.html.twig", 1);
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

        yield "Attendance";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_content($context, array $blocks = [])
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Attendance", "title" => "Attendance"]);
        yield "

                <div class=\"grid grid-cols-12 gap-x-5 flex flex-col items-center mb-2\">
                    <div class=\"col-span-12 md:col-span-12 xl:col-span-3\">
                        ";
        // line 21
        yield "                        ";
        $context["workerId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "get", ["id"], "method", false, false, false, 21);
        // line 22
        yield "                        <div id=\"workerIdParams\" class=\"hidden\" data-worker-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["workerId"]) || array_key_exists("workerId", $context) ? $context["workerId"] : (function () { throw new RuntimeError('Variable "workerId" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "\"></div>
                        <div class=\"card\" id=\"worker_logs\">
                            <div class=\"card-body\">
                                <div id=\"emp_profile\">
                                    <div class=\"flex flex-row gap-5\">
                                        <div class=\"\">
                                            <div class=\"mb-1 size-20 rounded-md\">
                                                <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 29, $this->source); })()), "profile_photo_path", [], "any", false, false, false, 29)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 29, $this->source); })()), "profile_photo_path", [], "any", false, false, false, 29))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/user-dummy-img.jpg"))), "html", null, true);
        yield "\" alt=\"\" class=\"h-20 w-40 rounded-md\">
                                            </div>
                                            <h5 id=\"employeeId\" class=\"border-transparent text-16 font-semibold\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 31, $this->source); })()), "employee_code", [], "any", false, false, false, 31), "html", null, true);
        yield "</h5>
                                        </div>
                                        <div class=\"\">
                                            <h6 class=\"text-16\"><a href=\"#!\" id=\"emp_name\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 34, $this->source); })()), "last_name", [], "any", false, false, false, 34), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 34, $this->source); })()), "first_name", [], "any", false, false, false, 34), "html", null, true);
        yield "</a></h6>
                                            <p class=\"text-slate-500 dark:text-zink-200\" id=\"emp_position\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 35, $this->source); })()), "position", [], "any", false, false, false, 35), "html", null, true);
        yield "</p>
                                            <div class=\"mt-1\">
                                                <p class=\"text-slate-500 dark:text-zink-200\" id=\"emp_cellphone\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 37, $this->source); })()), "cellphone", [], "any", false, false, false, 37), "html", null, true);
        yield "</p>
                                                <p class=\"text-slate-500 dark:text-zink-200\" id=\"emp_email\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), "html", null, true);
        yield "</p>
                                            </div>
                                        </div>
                                    </div>
                                    ";
        // line 80
        yield "                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div id=\"man-hours-container\" class=\"grid grid-cols-12 col-span-12 md:col-span-12 xl:col-span-9 gap-x-2\">
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 rounded-md text-sky-500 bg-sky-100 text-15 dark:bg-sky-500/20 shrink-0\"><i data-lucide=\"clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_hours_per_month\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Total Hours Rendered</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 text-yellow-500 bg-yellow-100 rounded-md text-15 dark:bg-yellow-500/20 shrink-0\"><i data-lucide=\"calendar-clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_remaining_hours_per_cutoff\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\" id=\"pending_hour_cutoff\">Total Hours for the Cut-Off</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-2 card-body\">
                                    <div class=\"flex items-center justify-center size-12 rounded-md text-green-500 bg-green-100 text-15 dark:bg-green-500/20 shrink-0\"><i data-lucide=\"clock9\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"approved_hours_per_cutoff\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Approved Overtime Hours</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-2 card-body\">
                                    <div class=\"flex items-center justify-center size-12 rounded-md text-sky-500 bg-sky-100 text-15 dark:bg-sky-500/20 shrink-0\"><i data-lucide=\"clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"approved_hours\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Project Hours Rendered</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 text-yellow-500 bg-yellow-100 rounded-md text-15 dark:bg-yellow-500/20 shrink-0\"><i data-lucide=\"folder-clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_remaining_hours_per_project\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\" id=\"pending_hour\">Remaining Alloted Project Hours</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 text-red-500 bg-red-100 rounded-md text-15 dark:bg-red-500/20 shrink-0\"><i data-lucide=\"clock10\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_undertime_hours_per_cutoff\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\" id=\"pending_hour_cutoff\">Unrendered Assigned Hours</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 text-right\">
                            <a href=\"javascript:void(0)\" id=\"toggle-manDays\" class=\"toggle-widget text-custom-500 underline cursor-pointer\">Show Widgets in Man Days</a>
                        </div>
                    </div>
                    <div id=\"man-days-container\" class=\"grid grid-cols-12 col-span-12 md:col-span-12 xl:col-span-9 gap-x-2 hidden\">
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 rounded-md text-sky-500 bg-sky-100 text-15 dark:bg-sky-500/20 shrink-0\"><i data-lucide=\"clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_mandays_per_month\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Total Mandays Rendered</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 text-yellow-500 bg-yellow-100 rounded-md text-15 dark:bg-yellow-500/20 shrink-0\"><i data-lucide=\"calendar-clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_remaining_mandays_per_cutoff\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\" id=\"pending_hour_cutoff\">Total Mandays for the Cut-Off</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-2 card-body\">
                                    <div class=\"flex items-center justify-center size-12 rounded-md text-green-500 bg-green-100 text-15 dark:bg-green-500/20 shrink-0\"><i data-lucide=\"clock9\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"approved_mandays_per_cutoff\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Approved Overtime Hours</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-2 card-body\">
                                    <div class=\"flex items-center justify-center size-12 rounded-md text-sky-500 bg-sky-100 text-15 dark:bg-sky-500/20 shrink-0\"><i data-lucide=\"clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"approved_mandays\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Project Mandays Rendered</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 text-yellow-500 bg-yellow-100 rounded-md text-15 dark:bg-yellow-500/20 shrink-0\"><i data-lucide=\"folder-clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_remaining_mandays_per_project\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\" id=\"pending_hour\">Remaining Alloted Project Mandays</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 text-red-500 bg-red-100 rounded-md text-15 dark:bg-red-500/20 shrink-0\"><i data-lucide=\"clock10\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_undertime_mandays_per_cutoff\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\" id=\"pending_mandays_cutoff\">Unrendered Assigned Hours</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 text-right\">
                            <a href=\"javascript:void(0)\" id=\"toggle-manHours\" class=\"toggle-widget text-custom-500 underline cursor-pointer\">Show Widgets in Man Hours</a>
                        </div>
                    </div>
                </div><!--end grid-->
                <div class=\"col-span-10 grid grid-cols-12 gap-5\">
                    <div class=\"card col-span-12 lg:col-span-6\" id=\"empAssignments\">
                        <div class=\"card-body\">
                        <div class=\"flex justify-between items-center mb-2\">
                            <!-- Left Element -->
                            <div class=\"flex-shrink-0\">
                                <div class=\"flex items-center gap-2\">
                                    <p class=\"text-slate-500 dark:text-zink-200 text-balance\">Employee Task Sheet by Project</p>
                                </div>
                            </div>
                            <div class=\"\">
                                <button type=\"button\" data-modal-target=\"addEmpTask\" onclick=\"\" class=\"add-daily_time_record text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">
                                    Bulk Add Task
                                </button>
                            </div>
                        </div>
                        <!-- Right Element -->
                        <div class=\"col-span-10 mb-2 flex flex-row items-center gap-2\">
                            <div>
                                <p class=\"text-slate-500 dark:text-zink-200\">As of</p>
                            </div>
                            <div>
                                <select id=\"year_selector\" class=\"py-1 w-40 pl-3 text-xs pr-7 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                    ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(2024, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y")));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 254
            yield "                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
            yield "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        yield "                                </select>
                            </div>
                            <div>
                                <select id=\"cut_off_dd\" class=\"py-1 w-45 pl-3 text-xs pr-7 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 ml-2\">
                                    <!-- Options for cut off dates -->
                                </select>
                            </div>
                        </div>
                            
                            <div class=\"overflow-x-auto overflow-y-auto\" style=\"height:500px !important\">
                                <table class=\"w-full whitespace-nowrap\">
                                    <thead class=\"sticky top-0 z-9999 ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600\">
                                        <tr>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Date</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Note</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id=\"tbody_emp_taks\">
                                    </tbody>
                                </table>
                                ";
        // line 284
        yield "                            </div>
                            ";
        // line 302
        yield "                        </div>
                    </div>
                    <div class=\"card col-span-12 lg:col-span-6\" id=\"manpowerTable\">
                        <div class=\"card-body\">
                            <div class=\"flex justify-between mb-2\">
                                <div class=\"xl:col-span-3 mb-2\">
                                    <div class=\"flex items-center gap-2\">
                                        <p class=\"text-slate-500 dark:text-zink-200\">Employee Daily Time Record Sheet</p>
                                    </div>
                                    <div class=\"add-daily_time_record mt-2 flex items-center justify-between\">
                                        <div class=\"w-39\">
                                            <select id=\"actionSelect\" class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                                <option value=\"1\">Straight Time</option>
                                                <option value=\"2\">Approve OT</option>
                                                <option value=\"3\">Deny OT</option>
                                            </select>
                                        </div>
                                        <div class=\"\">
                                            <button type=\"button\" onclick=\"\" class=\"apply-bulk text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">
                                                Apply
                                            </button>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class=\"xl:col-span-3  mb-2\">
                                    <div class=\"flex items-center gap-2\">
                                        <p id=\"latest_update\" class=\"text-slate-500 dark:text-zink-200\">Last updated: </p>
                                    </div>
                                </div>
                            </div><!--end grid-->
                            <div class=\"overflow-x-auto overflow-y-auto\" style=\"height:500px !important\">
                                <table class=\"w-full whitespace-nowrap h-5\">
                                    <thead class=\"sticky top-0 ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600\">
                                        <tr>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">
                                                <input id=\"chk_all_chkbox\" data-item-id=\"\" class=\"chk_all_chkbox clickable-adjustment size-4 border rounded-sm appearance-none cursor-pointer bg-white bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-red-500 checked:border-red-500 dark:checked:bg-red-500 dark:checked:border-red-500 checked:disabled:bg-red-400 checked:disabled:border-red-400\" type=\"checkbox\">
                                            </th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Date</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Time-In</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Time-Out</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Rendered Hours</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Undertime</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Overtime</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Overtime Status</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">For Next Payroll</th>
                                            ";
        // line 348
        yield "                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Actions</th>
                                            ";
        // line 350
        yield "                                        </tr>
                                    </thead>
                                    <tbody id=\"tbody_worker_logs\">
                                    </tbody>
                                </table>
                                <div class=\"noresult\" id=\"noresult\">
                                    <div class=\"py-6 text-center\">
                                        <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                        <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                        <p class=\"mb-0 text-slate-500 dark:text-zink-200\"</p>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 380
        yield "                        </div>
                    </div>
                </div>

                <div id=\"addEmpTask\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
                    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
                        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
                            <h5 class=\"text-16\">Create New Task</h5>
                            <button data-modal-close=\"addEmpTask\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                        </div>
                        
                        <form action=\"";
        // line 391
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_emp_dtr_task");
        yield "\" method=\"post\">
                            <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                <input type=\"hidden\" name=\"employee_id\" value=";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 393, $this->source); })()), "id", [], "any", false, false, false, 393), "html", null, true);
        yield ">
                                <input type=\"hidden\" name=\"emp_code\" value=";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee"]) || array_key_exists("employee", $context) ? $context["employee"] : (function () { throw new RuntimeError('Variable "employee" does not exist.', 394, $this->source); })()), "employee_code", [], "any", false, false, false, 394), "html", null, true);
        yield ">
                                <input type=\"hidden\" name=\"emp_worker_id\" value=";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["workerId"]) || array_key_exists("workerId", $context) ? $context["workerId"] : (function () { throw new RuntimeError('Variable "workerId" does not exist.', 395, $this->source); })()), "html", null, true);
        yield ">
                                <div class=\"mb-3\">
                                    <label for=\"project\" class=\"inline-block mb-2 text-base font-medium\">Project</label>
                                    <select class=\" z-999 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"project_id\" name=\"project_id\">
                                        ";
        // line 399
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 399, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project_item"]) {
            // line 400
            yield "                                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project_item"], "id", [], "any", false, false, false, 400), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project_item"], "name", [], "any", false, false, false, 400), "html", null, true);
            yield "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        yield "                                    </select>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"task_desc\" class=\"inline-block mb-2 text-base font-medium\">Task Description</label>
                                    <input type=\"text\" id=\"task_desc\" name=\"task_desc\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter task description\" value=\"\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"task_date\" class=\"inline-block mb-2 text-base font-medium\">Task Date</label>
                                    <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\" id=\"task_date\" name=\"task_date\" placeholder=\"\" value=\"\">
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"assigned_hours\" class=\"inline-block mb-2 text-base font-medium\">Assigned Time (in hours)</label>
                                    <input type=\"number\" id=\"assigned_hours\" data-provider=\"timepickr\" data-time-hrs=\"true\" name=\"assigned_hours\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 flatpickr-input active\" placeholder=\"Enter rendered hours\" value=\"\" required>
                                </div>
                            </div>
                            <div class=\"flex justify-end gap-2 mt-4 p-4\">
                                <button type=\"button\" data-modal-close=\"addEmpTask\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                                <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end col-->
                <!--end col-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 428
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 429
        yield "
<script src=\"";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 431
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 432
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<!-- App js -->
<script src=\"";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>

";
        // line 437
        yield "<script>
    \$(document).ready(function() {
        var selectedWorker = \$('#select_worker');
        const selectedWorkerId = \$('#workerIdParams').data('worker-id');
        var dateWorker = \$('#cut_off_dd');
        var today = new Date();
        var fullname = '';
        var position = '';
        // Get the year, month, and day
        var year = today.getFullYear();
        var month = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-based, so add 1
        var day = String(today.getDate()).padStart(2, '0');
        var formattedDate = year + '-' + month + '-' + day;

        //get currenthalf of the month
        populateCutOffOptions()
        let currentHalf = getCurrentHalfRange();
        var startDate = new Date(currentHalf.range.start);
        var endDate = new Date(currentHalf.range.end);
        
        // Format the dates as per your requirement (e.g., 'YYYY-MM-DD')
        var formattedStartDate = startDate.toLocaleDateString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit' });
        var formattedEndDate = endDate.toLocaleDateString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit' });

        var jsonObject = {
            \"start_date\": currentHalf.range.start,
            \"end_date\": currentHalf.range.end
        };

        //Trigger populateCutoffOptions when this value change
        \$('#year_selector').change(function() {
            populateCutOffOptions();
        });

        // console.log('json object '+ JSON.stringify(jsonObject))
        // console.log(jsonObject)

        async function getWorkerLogs(selectedWorkerId) {
            updateCutoffDate() //update cutoff date <p> tag

            //update pending hours per cut-off
            let currentHalf = getCurrentHalfRange();
            var start_date = new Date(currentHalf.range.start);
            var end_date = new Date(currentHalf.range.end);
            var totalWorkingHours = calculateWorkingHours(start_date, end_date);

            var jsonObjectDate = {
                \"start_date\": currentHalf.range.start,
                \"end_date\": currentHalf.range.end
            };

            //updateDatepicker(startDate,endDate) // update
            //var selectedWorkerId = \$(this).val();
            ////console.log(selectedWorkerId);
            if(!selectedWorkerId){
                const tableBody = \$(\"#tbody_worker_logs\");
                tableBody.empty(); // Clear existing rows
                \$('#emp_profile').hide();
                \$('#default_card').show();
                \$('#noresult').show();
                
            }
            else{
                
                \$('#emp_profile').show();
                \$('#default_card').hide();

                var worker_log_reposnse = await apiCall('POST', 'api/worker/' + selectedWorkerId, jsonObjectDate);
                //console.log('API Call Response:', worker_log_reposnse);

                if (!worker_log_reposnse || Object.keys(worker_log_reposnse).length === 0) {
                    // Check if response is falsy or an empty object
                    \$('#noresult').show(); // Show your element indicating no data or error
                } else {
                    console.log('worker logs '+worker_log_reposnse.worker_logs)
                    \$('#noresult').hide(); // Show your element
                    await populateTable(worker_log_reposnse) // Populate table with received data
                    //tableBody = \$(\"#tbody_worker_logs\")
                    
                }

                var worker_profile = await apiCall('GET', 'api/worker_id/' + selectedWorkerId, '');

                fullname = worker_profile.workers[0].emp_record.last_name + \", \" + worker_profile.workers[0].emp_record.first_name 
                position = worker_profile.workers[0].position;

                updateWorkerDetails(worker_profile.workers[0].empcode, '5 years', '2020-01-01', '5', '218.4 Hrs', '172 Hrs', '24 Hrs', '22.40 Hrs', fullname, position);

                //update approved hour
                var empRecordId = worker_profile.workers[0].emp_record.id
                await getEmpTask(empRecordId, selectedWorkerId)

                //update employee project table
                var emp_projects = await apiCall('POST', 'api/employee-projects-list/' + selectedWorkerId, jsonObject); 
                populateEmpAssignmentsTable(emp_projects.employee_projects);
                //refreshCallBack();
            }
        }

        function convertMinutesToHoursMinutes(totalMinutes) {
            // Calculate hours and minutes
            var hours = Math.floor(totalMinutes / 60);
            var minutes = totalMinutes % 60;

            // Return formatted string
            if(hours > 1){
                return hours + ' hours ' + minutes + ' min';
            }
            else if(hours <= 1){
                return hours + ' hour ' + minutes + ' min';
            }
            else{
                console.log('minutes: ' + hours + \".\" +minutes)
                return '-';
            }
        }

        function updateDatepicker(startDate, endDate){
            \$(\"#worker_log_date\").flatpickr({
                mode: \"range\",
                dateFormat: \"Y-m-d\",
                defaultDate: [startDate, endDate],
                onClose: function(selectedDates, dateStr, instance) {
                    //console.log(\"Selected Dates:\", selectedDates);
                    //console.log(\"Formatted Date String:\", dateStr);
                }
            });
        }

        async function getEmpTask(empRecordId, selectedWorkerId){
            let currentHalf = getCurrentHalfRange();
            ////console.log(`Current half: \${currentHalf.half}`);
            ////console.log(\"Date range:\", currentHalf.range);
            var empTaskJson = {
                \"employee_id\":empRecordId,
                \"date_start\": currentHalf.range.start,
                \"date_end\": currentHalf.range.end
            };
            var workerJson = {
                \"start_date\": currentHalf.range.start,
                \"end_date\": currentHalf.range.end
            };
            //get employee task
            var emp_task_items = await apiCall('POST', 'api/emp-tasks-emp-id', empTaskJson);
           // console.log('emp task items', emp_task_items)
            calcRenderedHours(emp_task_items)
            calcRemainingHours(emp_task_items)

            //get worker logs
            var worker_log_reposnse = await apiCall('POST', 'api/worker/' + selectedWorkerId, workerJson);
            //console.log('worker logs ' + worker_log_reposnse.worker_logs)
           // console.log('worker logs ' + worker_log_reposnse);

            
            total_rendered_hours = calculateTotalHours(worker_log_reposnse.worker_logs);
            // console.log('rendered hours '+ total_rendered_hours)
            \$('#total_hours_per_month').text(convertMinutesToHoursMinutes(total_rendered_hours));
            \$('#total_mandays_per_month').text(calculateMandays(total_rendered_hours));        
            
        }

        function getSemiMonthlyRanges(year, month) {
            // Create a date object for the first day of the month
            let startDate = new Date(year, month - 1, 1);
            
            // Create a date object for the 15th day of the month
            let midDate = new Date(year, month - 1, 15);
            
            // Create a date object for the 16th day of the month
            let secondHalfStartDate = new Date(year, month - 1, 16);
            
            // Create a date object for the last day of the month
            let endDate = new Date(year, month, 0);

            // Format the dates as yyyy-mm-dd
            let formatDate = (date) => {
                let d = date.getDate();
                let m = date.getMonth() + 1; // Months are zero indexed
                let y = date.getFullYear();
                return `\${y}-\${m.toString().padStart(2, '0')}-\${d.toString().padStart(2, '0')}`;
            };

            // Return the date ranges
            return {
                firstHalf: {
                    start: formatDate(startDate),
                    end: formatDate(midDate)
                },
                secondHalf: {
                    start: formatDate(secondHalfStartDate),
                    end: formatDate(endDate)
                }
            };
        }

        function formatDateText(date) {
            const options = { year: 'numeric', month: 'short', day: 'numeric' };
            const formattedDate = new Intl.DateTimeFormat('en-US', options).format(date);
            return formattedDate;
        }

        // Function to generate the options for the select element
        function populateCutOffOptions() {
            let select = document.getElementById('cut_off_dd');
            let today = new Date();
            let year = \$('#year_selector').val();
            let currentMonth = today.getMonth() + 1;
            let currentDay = today.getDate();

            // Clear existing options
            select.innerHTML = '';

            // Determine the limit for the month loop based on the selected year
            let monthLimit = (year == today.getFullYear()) ? currentMonth : 12;

            // Loop through each month of the selected year
            for (let month = 1; month <= monthLimit; month++) {
            let ranges = getSemiMonthlyRanges(year, month);

            // Create options for the first half of the month
            let firstHalfOption = document.createElement('option');
            let firstHalfStart = new Date(ranges.firstHalf.start);
            let firstHalfEnd = new Date(ranges.firstHalf.end);
            firstHalfOption.value = `\${formatDateText(firstHalfStart)} - \${formatDateText(firstHalfEnd)}`;
            firstHalfOption.text = `\${formatDateText(firstHalfStart)} - \${formatDateText(firstHalfEnd)}`;
            select.appendChild(firstHalfOption);

            // Create options for the second half of the month
            let secondHalfOption = document.createElement('option');
            let secondHalfStart = new Date(ranges.secondHalf.start);
            let secondHalfEnd = new Date(ranges.secondHalf.end);
            secondHalfOption.value = `\${formatDateText(secondHalfStart)} - \${formatDateText(secondHalfEnd)}`;
            secondHalfOption.text = `\${formatDateText(secondHalfStart)} - \${formatDateText(secondHalfEnd)}`;
            select.appendChild(secondHalfOption);

            // Check if current date falls within the range of this option
            if (year == today.getFullYear()) {
                if (today >= firstHalfStart && today <= firstHalfEnd && currentDay <= 15) {
                firstHalfOption.selected = true;
                } else if (today >= secondHalfStart && today <= secondHalfEnd && currentDay > 15) {
                secondHalfOption.selected = true;
                }
            }
            }
        }

        /*function getCurrentHalfRange() {
            //let today = new Date();
            let today = new Date('2024-07-14');
            let year = today.getFullYear();
            let month = today.getMonth() + 1; // Months are zero indexed, so +1 to get the current month

            let ranges = getSemiMonthlyRanges(year, month);
            let day = today.getDate();

            if (day <= 15) {
                return { half: 'firstHalf', range: ranges.firstHalf };
            } else {
                return { half: 'secondHalf', range: ranges.secondHalf };
            }
        }*/

        function getCurrentHalfRange() {
            // Get the selected value from the dropdown
            let selectDate = \$('#cut_off_dd').val();
            console.log('selected date '+ selectDate)
            // Split the selected date range into start and end dates
            let dates = selectDate.split(' - ');
            let startDate = new Date(dates[0].trim());
            let endDate = new Date(dates[1].trim());

            // Extract year and month from the start date
            let year = startDate.getFullYear();
            let month = startDate.getMonth() + 1; // Months are zero indexed, so +1 to get the current month

            // Get semi-monthly ranges for the selected month
            let ranges = getSemiMonthlyRanges(year, month);

            // Determine the current half based on the end date of the selected range
            let day = endDate.getDate();
            if (day <= 15) {
                return { half: 'firstHalf', range: ranges.firstHalf };
            } else {
                return { half: 'secondHalf', range: ranges.secondHalf };
            }
        }


        function calculateTotalHours(workerLogs) {
            let totalHours = 0;
            var rendered_hours = 0;
            if (workerLogs && workerLogs.length > 0) {
                
                workerLogs.forEach(log => {
                    console.log(log);
                    if(log.rendered_hours){
                        totalHours += parseFloat(log.rendered_hours);
                    }
                    else{
                        totalHours += 0;
                    }
                });
            } else {
               // console.log(\"No worker logs found.\");
            }

            console.log(\"Total Hours Worked:\", totalHours);
            return totalHours;
        }

        function calculateMandays(minutes) {
            // Initialize totalMandays to zero
            let totalMandays = 0;

            // Check if minutes is a valid number
            if (typeof minutes === 'number' && minutes >= 0) {
                // Calculate total mandays based on the number of minutes
                totalMandays = (minutes / 60) / 8;
            }

            // Log and return the result
            console.log(\"Total Mandays Worked:\", totalMandays);
            return totalMandays.toFixed(3) + ' Mandays';
        }

        function formatDateDateworker(dateString) {
            // Parse the date string into a Date object
            let dateObj = new Date(dateString);
            
            // Check if the dateObj is valid
            if (!(dateObj instanceof Date) || isNaN(dateObj.getTime())) {
                console.error('Invalid date:', dateString);
                return ''; // Return empty string or handle error as per your requirement
            }

            // Format the date as yyyy-mm-dd
            let year = dateObj.getFullYear();
            let month = (dateObj.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-indexed
            let day = dateObj.getDate().toString().padStart(2, '0');

            return `\${year}-\${month}-\${day}`;
        }


        dateWorker.on('change', async function() {
            var selectDate = \$(this).val();
            var dates = selectDate.split(' - '); // Adjust split based on your dropdown format

            var startDate, endDate;

            if (dates.length === 2) {
                // If both start and end dates are provided
                startDate = new Date(dates[0].trim());
                endDate = new Date(dates[1].trim());
            } else {
                // If only one date is provided or invalid format
                startDate = new Date(dates[0].trim());
                endDate = startDate; // Set end date to start date for single day selection
            }

            // Log the start and end dates (optional)
            // console.log('Start Date:', startDate);
            // console.log('End Date:', endDate);

            var selectedWorkerId = \$('#workerIdParams').data('worker-id');
            var jsonObject = {
                \"start_date\": formatDateDateworker(startDate), // Format date if needed before sending
                \"end_date\": formatDateDateworker(endDate) // Format date if needed before sending
            };
            console.log('json date' + formatDateDateworker(startDate) + \" \" + formatDateDateworker(endDate))
            // Perform API call to fetch worker logs
            if (!selectedWorkerId) {
                const tableBody = \$(\"#tbody_worker_logs\");
                tableBody.empty(); // Clear existing rows
                \$('#noresult').show();
            } else {
                var worker_log_response = await apiCall('POST', 'api/worker/' + selectedWorkerId, jsonObject);

                if (!worker_log_response || Object.keys(worker_log_response).length === 0) {
                    // Check if response is falsy or an empty object
                    \$('#noresult').show(); // Show your element indicating no data or error
                } else {
                    \$('#noresult').hide(); // Hide no result element if data is present
                    populateTable(worker_log_response); // Populate table with received data
                }
            }

            // Update employee project table
            var emp_projects = await apiCall('POST', 'api/employee-projects-list/' + selectedWorkerId, jsonObject);
            populateEmpAssignmentsTable(emp_projects.employee_projects);
        });

        // Function to format date to yyyy-mm-dd format (if needed)
        function formatDate(date) {
            return date.toISOString().split('T')[0];
        }



        function updateWorkerDetails(employeeId, experience, joiningDate, totalHoursYears, totalHours, regularHours, overtime, holiday, fullname, position) {
            // Update each <td> element with the provided values
            \$('#employeeId').text(employeeId);
            \$('#emp_name').text(fullname);
            \$('#emp_position').text(position);
        }

        // Function to populate the table
        // Note dont ever refactor this this is pretty sensitive because of async nature
        // The dropdown is not working if refractored
        async function populateTable2(data) {
            const tableBody = \$(\"#tbody_worker_logs\");
            tableBody.empty(); // Clear existing rows
            var total_hours_month = 0;
            var total_approved_overtime = 0.00;
            var total_undertime = 0.00;
            var ot_formatted_time = 0;
            var ut_formatted_time = 0;
            var table_rows = [];

            //get current half date
            let currentHalf = getCurrentHalfRange();
            var startDate = new Date(currentHalf.range.start).setHours(0, 0, 0, 0);
            var endDate = new Date(currentHalf.range.end).setHours(23, 59, 59, 999);
            
            const promises = data.map(async item => {
                //refreshCallBack();
                var loginDate = '';
                var logoutDate = '';
                // Parse login and logout dates
                if (item.loginDate) {
                    loginDate = new Date(item.loginDate.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                    loginDate = new Date(loginDate.toLocaleString(\"en-US\", { timeZone: \"Asia/Manila\" }));
                }
                if (item.logoutDate) {
                    logoutDate = new Date(item.logoutDate.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                    logoutDate = new Date(logoutDate.toLocaleString(\"en-US\", { timeZone: \"Asia/Manila\" }));
                }

                // Function to format time in 12-hour format with AM/PM
                function formatTime(date) {
                    const hours = date.getHours();
                    const minutes = date.getMinutes();
                    const ampm = hours >= 12 ? 'PM' : 'AM';
                    const formattedHours = hours % 12 || 12; // Convert 24-hour to 12-hour format
                    const formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
                    return formattedHours + ':' + formattedMinutes + ' ' + ampm;
                }

                function formatDate(dateString) {
                    dateString = new Date(dateString.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                    dateString = new Date(dateString.toLocaleString(\"en-US\", { timeZone: \"Asia/Manila\" }));
                    const options = { day: 'numeric', month: 'short', year: 'numeric', timeZone: \"Asia/Manila\" };
                    return dateString.toLocaleDateString('en-US', options);
                }
                //format day
                const date = new Date(item.loginDate);
                const days = [\"Sun\", \"Mon\", \"Tue\", \"Wed\", \"Thu\", \"Fri\", \"Sat\"];
                const day = days[date.getUTCDay()];

                // Format login and logout times
                var loginTime = '';
                var logoutTime = '';
                if (loginDate) {
                    loginTime = formatTime(loginDate);
                }
                if (logoutDate) {
                    logoutTime = formatTime(logoutDate);
                }

                // Calculate difference in hours
                var diffMilliseconds = Math.abs(logoutDate - loginDate);
                var diffHours = 0;
                var formattedTime = 0;

                //get drowdown option
                var attendance_dropdown = await generateAttendanceDropdown(item);
                
                // Example row construction (adjust as per your table structure)
                const row = `
                    <tr>
                        <td class=\"px-3.5 py-2.5 border-y border-transparent items-center\">
                            <input id=\"checkboxDefault6\" data-item-id=\"\${item.id}\" class=\"bulk_chkbox clickable-adjustment size-4 border rounded-sm appearance-none cursor-pointer bg-white bg-slate-100 border-black border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-red-500 checked:border-red-500 dark:checked:bg-red-500 dark:checked:border-red-500 checked:disabled:bg-red-400 checked:disabled:border-red-400\" type=\"checkbox\" value=\"\">
                        </td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">
                            \${formatDate(item.loginDate)} <span class=\"px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-slate-400 text-slate-500 dark:bg-zink-700 dark:border-zink-400 dark:text-zink-200 ltr:ml-1 rtl:mr-1 align-middle\">\${day}</span>
                        </td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${loginTime}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${logoutTime}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${item.rendered_hours !== null ? convertMinutesToHoursMinutes(item.rendered_hours) : '-'}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${item.undertime !== null ? convertMinutesToHoursMinutes(item.undertime) : '-'}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${item.overtime !== null ? convertMinutesToHoursMinutes(item.overtime) : '-'}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${getOvertimeStatus(item.overtime_approved)}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${attendance_dropdown}</td>
                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action\" \${!currentDateData || currentDateData.overtime_approved === false || currentDateData.overtime_approved === null ? 'hidden' : ''}>
                            <div class=\"edit-daily_time_record relative dropdown\">
                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                    <li>
                                        <a data-edit=\"\${item.id}\" class=\"straight-time block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Straight Time</span></a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                `;
                /*
                    <li>
                        <a data-edit=\"\${item.id}\" class=\"approve block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Approve OT</span></a>
                    </li>
                    <li>
                        <a data-edit=\"\${item.id}\" class=\"deny block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" style=\"position: relative; z-index: 10;\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Deny OT</span></a>
                    </li>
                */

                tableBody.append(row);
                console.log('login data '+loginTime)
                //refreshCallBack();
                if (item.overtime_approved == true) {
                    total_approved_overtime += item.overtime;
                }
                //compute undertime
                if(item.undertime){
                    total_undertime += item.undertime
                }
                else{
                    total_undertime += 0
                }
                //total_undertime += item.undertime !== null ? item.undertime : 0;
                console.log('current undertime'+item.undertime)
                lucide.createIcons();
                console.log('total approved OT' + total_approved_overtime / 60)
                \$('#approved_hours_per_cutoff').text('');
                \$('#approved_hours_per_cutoff').text(convertMinutesToHoursMinutes(total_approved_overtime));
                \$('#approved_mandays_per_cutoff').text(convertMinutesToHoursMinutes(total_approved_overtime));

                \$('#total_undertime_hours_per_cutoff').text('');
                \$('#total_undertime_hours_per_cutoff').text(convertMinutesToHoursMinutes(total_undertime));
                \$('#total_undertime_mandays_per_cutoff').text(convertMinutesToHoursMinutes(total_undertime));
            });

            await Promise.all(promises);
            refreshCallBack();
            // Function to execute after forEach and all async operations complete
            console.log('All operations completed');
        }

        async function populateTable(data) {
            console.log('called here');
            const tableBody = \$(\"#tbody_worker_logs\");
            tableBody.empty(); // Clear existing rows

            let total_approved_overtime = 0.00;
            let total_undertime = 0.00;

            // Get current half of the month range
            let currentHalf = getCurrentHalfRange();
            const startDate = new Date(currentHalf.range.start).setHours(0, 0, 0, 0);
            const endDate = new Date(currentHalf.range.end).setHours(23, 59, 59, 999);

            function formatTime(date) {
                const hours = date.getHours();
                const minutes = date.getMinutes();
                const ampm = hours >= 12 ? 'PM' : 'AM';
                const formattedHours = hours % 12 || 12; // Convert 24-hour to 12-hour format
                const formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
                return formattedHours + ':' + formattedMinutes + ' ' + ampm;
            }

            async function processDate(date) {
                const formattedDate = formatDate(date);
                const day = date.toLocaleString('en-US', { weekday: 'short', timeZone: 'Asia/Manila' });
                let loginTime = '';
                let logoutTime = '';
                let renderedHours = '-';
                let undertime = '-';
                let overtime = '-';
                let overtimeApproved = '-';
                let attendanceDropdown = '';
                let for_the_next_payroll = 'No';

                // Filter all entries for the current date
                const currentDateEntries = data.worker_logs.filter(item => {
                    const loginDate = new Date(item.loginDate).setHours(0, 0, 0, 0);
                    return loginDate === date.getTime();
                });

                // Find the entry with the earliest login time
                const currentDateData = currentDateEntries.reduce((earliest, current) => {
                    const earliestLogin = new Date(earliest.loginDate).getTime();
                    const currentLogin = new Date(current.loginDate).getTime();
                    return currentLogin < earliestLogin ? current : earliest;
                }, currentDateEntries[0]);

                if (currentDateData) {
                    if(currentDateData.loginDate && currentDateData.attendance_status && currentDateData.attendance_status.name !== 'Absent'){
                        const loginDate = new Date(currentDateData.loginDate.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                        loginTime = formatTime(new Date(loginDate.toLocaleString(\"en-US\", { timeZone: \"Asia/Manila\" })));
                    } else {
                        loginTime = '-';
                    }

                    if(currentDateData.logoutDate && currentDateData.attendance_status && currentDateData.attendance_status.name !== 'Absent'){
                        const logoutDate = new Date(currentDateData.logoutDate.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                        logoutTime = formatTime(new Date(logoutDate.toLocaleString(\"en-US\", { timeZone: \"Asia/Manila\" })));
                    } else {
                        logoutTime = '-';
                    }

                    renderedHours = currentDateData.rendered_hours !== null ? convertMinutesToHoursMinutes(currentDateData.rendered_hours) : '-';
                    undertime = currentDateData.undertime !== null ? convertMinutesToHoursMinutes(currentDateData.undertime) : '-';
                    overtime = currentDateData.overtime !== null ? convertMinutesToHoursMinutes(currentDateData.overtime) : '-';
                    overtimeApproved = getOvertimeStatus(currentDateData.overtime_approved);

                    // set for the next payroll

                    if (currentDateData.dTRAdjutments.length > 0) {
                        // Extract and format the adjusted date
                        const date = new Date(currentDateData.dTRAdjutments[0].adjusted_date);
                        
                        // Set the time to midnight (00:00:00) in the local time zone
                        date.setHours(0, 0, 0, 0);
                        
                        // Format the date as YYYY-MM-DD in the local time zone
                        const formattedDate = date.toLocaleDateString('en-CA'); // 'en-CA' format is YYYY-MM-DD
                        
                        console.log('adjusted date', date);
                        console.log('formatted date', formattedDate);
                        
                        for_the_next_payroll = formattedDate;
                    }
                    // attendanceDropdown = await generateAttendanceDropdown(currentDateData);

                    if (currentDateData.overtime_approved) {
                        total_approved_overtime += currentDateData.overtime;
                    }

                    total_undertime += currentDateData.undertime !== null ? currentDateData.undertime : 0;
                }

                return `
                    <tr>
                        <td class=\"px-3.5 py-2.5 border-y border-transparent items-center\">
                            <input id=\"checkboxDefault6\" data-item-id=\"\${currentDateData ? currentDateData.id : ''}\" class=\"bulk_chkbox clickable-adjustment size-4 border rounded-sm appearance-none cursor-pointer bg-white bg-slate-100 border-black border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-red-500 checked:border-red-500 dark:checked:bg-red-500 dark:checked:border-red-500 checked:disabled:bg-red-400 checked:disabled:border-red-400\" type=\"checkbox\" value=\"\" \${currentDateData ? '' : 'hidden'}>
                        </td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">
                            \${formattedDate} <span class=\"px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-slate-400 text-slate-500 dark:bg-zink-700 dark:border-zink-400 dark:text-zink-200 ltr:ml-1 rtl:mr-1 align-middle\">\${day}</span>
                        </td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${loginTime}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${logoutTime}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${renderedHours}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${undertime}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${overtime}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${overtimeApproved}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${for_the_next_payroll}</td>
                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action\" \${currentDateData ? '' : 'hidden'} \${!currentDateData || currentDateData.overtime_approved === false || currentDateData.overtime_approved === null ? 'hidden' : ''}>
                            <div class=\"edit-daily_time_record relative dropdown\">
                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                    <li>
                                        <a data-edit=\"\${currentDateData ? currentDateData.id : ''}\" class=\"straight-time block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Straight Time</span></a>
                                    </li>
                                    <li \${!currentDateData || currentDateData.dTRAdjutments.length > 0 ? 'hidden' : ''}>
                                        <a data-edit=\"\${currentDateData ? currentDateData.id : ''}\" data-emp-record=\"\${data ? data.emp_record_id : ''}\" class=\"next-payroll block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Apply To Next Payroll</span></a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                `;
                refreshCallBack();
            }
            /*
                <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${attendanceDropdown}</td>
                <li>
                    <a data-edit=\"\${currentDateData ? currentDateData.id : ''}\" class=\"approve-input block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Approve OT</span></a>
                </li>
                <li>
                    <a data-edit=\"\${currentDateData ? currentDateData.id : ''}\" class=\"deny-input block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" style=\"position: relative; z-index: 10;\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Deny OT</span></a>
                </li>
            */

            const promises = [];
            for (let date = new Date(startDate); date <= endDate; date.setDate(date.getDate() + 1)) {
                promises.push(processDate(new Date(date)));
            }

            try {
                const rows = await Promise.all(promises);
                rows.forEach(row => {
                    tableBody.append(row);
                });

                // Update the UI with total approved overtime and undertime
                \$(\"#approved_hours_per_cutoff\").text(convertMinutesToHoursMinutes(total_approved_overtime));
                \$(\"#total_undertime_hours_per_cutoff\").text(convertMinutesToHoursMinutes(total_undertime));

                // Update mandays view
                \$(\"#approved_mandays_per_cutoff\").text(convertMinutesToHoursMinutes(total_approved_overtime));
                \$(\"#total_undertime_mandays_per_cutoff\").text(convertMinutesToHoursMinutes(total_undertime));

                lucide.createIcons();
                refreshCallBack();
                applyPermissionsToDOM();
            } catch (error) {
                console.error('Error processing dates:', error);
            }
            // refreshCallBack();
            applyPermissionsToDOM();
        }


        async function generateAttendanceDropdown(item) {
            const attendanceStatus = item.attendance_status !== null ? item.attendance_status.name : 'Pending';

            try {
                // Call the attendance API
                var response = await apiCall('GET', 'api/attendance-types', null);
                var attendanceTypes = response.attendance_types;
                
                var dropdownHtml = '';
                // Ensure the response is parsed correctly
                if (!Array.isArray(attendanceTypes)) {
                    attendanceTypes = [];
                }

                // Build the dropdown options dynamically
                let options = attendanceTypes.map(type => `
                    <option value=\"\${type.id}\" \${attendanceStatus === type.name ? 'selected' : ''}>\${type.name}</option>
                `).join('');
                
                if (attendanceStatus == 'Present') {
                    dropdownHtml = `
                        <select class=\"edit-daily_time_record attendance-dropdown-\${item.id}\" data-id=\"\${item.id}\">
                            <option value=\"Pending\" \${attendanceStatus === 'Pending' ? 'selected' : ''}>Pending</option>
                            \${options}
                        </select>
                    `;
                } else {
                    dropdownHtml = `
                        <select class=\"edit-daily_time_record attendance-dropdown-\${item.id}\" data-id=\"\${item.id}\">
                            <option value=\"Pending\" \${attendanceStatus === 'Pending' ? 'selected' : ''}>Pending</option>
                            \${options}
                        </select>
                    `;
                }

                // Attach change event handler to the dropdown using delegated event handling
                \$(document).on('change', `.attendance-dropdown-\${item.id}`, function() {
                    const selectedValue = \$(this).val();
                    const itemId = \$(this).data('id');
                    console.log('Dropdown value changed:', itemId);
                    updateAttendanceStatus(itemId, selectedValue);
                });
                return dropdownHtml;

                
            } catch (error) {
                console.error('Error fetching attendance types:', error);
                return `
                    <select class=\"edit-daily_time_record attendance-dropdown\${item.id}\" data-id=\"\${item.id}\" disabled>
                        <option value=\"Pending\" \${attendanceStatus === 'Pending' ? 'selected' : ''}>Pending</option>
                    </select>
                `;
            }
        }

        // Function to update attendance status via API call
        async function updateAttendanceStatus(itemId, selectedValue) {
            const selectedWorkerId = \$('#workerIdParams').data('worker-id');
            try {
                const apiUrl = `api/worker-overtime/update_attendance/\${itemId}`;
                
                // Prepare data for POST request
                const requestData = {
                    attendance_id: selectedValue
                };
                console.log('attendace updated')
                const response = await apiCall('POST', apiUrl, requestData);

                // Optionally handle success response
                \$('#dateWorker').trigger('change');
                console.log('Attendance status updated successfully:', response);
            } catch (error) {
                console.error('Error updating attendance status:', error);
                // Optionally handle error scenario
            }
        }

        // Function to generate attendance dropdown and handle change event
        /*async function generateAttendanceDropdown(item) {
            const attendanceStatus = item.attendance_status !== null ? item.attendance_status.name : 'Pending';

            try {
                // Call the attendance API to fetch types
                const response = await apiCall('GET', 'api/attendance-types', null);
                let attendanceTypes = response.attendance_types || [];

                // Build dropdown options dynamically
                let options = attendanceTypes.map(type => `
                    <option value=\"\${type.id}\" \${attendanceStatus === type.name ? 'selected' : ''}>\${type.name}</option>
                `).join('');

                // Determine if dropdown should be disabled
                const disabledAttr = attendanceStatus === 'Present' ? 'disabled' : '';

                // Construct the dropdown HTML
                const dropdownHtml = `
                    <select class=\"attendance-dropdown\" data-id=\"\${item.id}\" \${disabledAttr}>
                        <option value=\"Pending\" \${attendanceStatus === 'Pending' ? 'selected' : ''}>Pending</option>
                        \${options}
                    </select>
                `;

                

            } catch (error) {
                console.error('Error fetching attendance types:', error);
                // Handle error scenario by providing a fallback dropdown
                const fallbackHtml = `
                    <select class=\"attendance-dropdown\" data-id=\"\${item.id}\">
                        <option value=\"Pending\" \${attendanceStatus === 'Pending' ? 'selected' : ''}>Pending</option>
                    </select>
                `;
                \$(`#attendance-dropdown-cell-\${item.id}`).html(fallbackHtml);
            }
        }*/
 
        // Function to determine attendance status
        function getOvertimeStatus(approvedStatus) {
            if (approvedStatus === true) {
                return 'Approved';
            } else if (approvedStatus === false) {
                return 'Not applicable';
            } else {
                return 'Pending';
            }
        }

        function updateApprovedHours(hours){
            \$('#approved_hours').text('');
            \$('#approved_hours').text(convertMinutesToHoursMinutes(hours));
            \$('#approved_mandays').text(calculateMandays(hours));
        }

        function updateHoursLeft(hours){
            \$('#total_remaining_hours_per_project').text('');
            \$('#total_remaining_hours_per_project').text(convertMinutesToHoursMinutes(hours));
            \$('#total_remaining_mandays_per_project').text(calculateMandays(hours));
        }

        function calcRenderedHours(emp_task_items){
            if (emp_task_items && emp_task_items.emp_tasks) {
                var totalRenderedHours = emp_task_items.emp_tasks.reduce(function (total, task) {
                    // Check if the task is approved before adding its rendered hours
                    ////console.log('approved '+task.approved)
                    if (task.approved) {
                        return total + task.rendered_hours;
                    } else {
                        return total;
                    }
                }, 0);

                ////console.log(\"Total Approved Rendered Hours:\", totalRenderedHours);
                updateApprovedHours(totalRenderedHours);
            } else {
                //console.log(\"No tasks found.\");
            }
        }

        function calcRemainingHours(emp_task_items){
            //console.log(emp_task_items)
            if (emp_task_items && emp_task_items.emp_tasks) {
                var totalRemainingHours = emp_task_items.emp_tasks.reduce(function (total, task) {
                    // Check if the task is approved before adding its rendered hours
                    //console.log('approved '+task.approved)
                    if (task.approved === null || task.approved === undefined || task.approved === false) {
                        return total + task.assigned_hours;
                    } else {
                        return total;
                    }
                }, 0);

                console.log(\"Total Approved Remaining Hours:\", totalRemainingHours);
                updateHoursLeft(totalRemainingHours);
            } else {
                //console.log(\"No tasks found.\");
            }
        }

        //function formatDate(dateString) {
        //    dateString = new Date(dateString.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
        //    dateString = new Date(dateString.toLocaleString(\"en-US\", {timeZone: \"Asia/Manila\"}));
        //    const options = { day: 'numeric', month: 'short', year: 'numeric', timeZone: \"Asia/Manila\" };
        //    return dateString.toLocaleDateString('en-US', options);
        //}

        function formatDate(date) {
            // Ensure date is a valid Date object
            if (!(date instanceof Date) || isNaN(date.getTime())) {
                console.error('Invalid date object:', date);
                return ''; // or throw an error, depending on your error handling strategy
            }

            // Adjust the date to the desired timezone, if needed
            const options = { day: 'numeric', month: 'short', year: 'numeric', timeZone: \"Asia/Manila\" };

            // Return the formatted date string
            return date.toLocaleDateString('en-US', options);
        }

        function formatDateAsNumber(date) {
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0'); // Months are zero-indexed
            const day = String(date.getDate()).padStart(2, '0');
            return `\${year}\${month}\${day}`;
        }

        function formatDateToYYYYMMDD(date) {
            var year = date.getFullYear();
            var month = ('0' + (date.getMonth() + 1)).slice(-2); // Months are zero-based
            var day = ('0' + date.getDate()).slice(-2);
            return `\${year}-\${month}-\${day}`;
        }

        function populateEmpAssignmentsTable(data) {
            const tableBody = \$(\"#tbody_emp_taks\");
            tableBody.empty(); // Clear existing rows

            // Get current half of the month range
            let currentHalf = getCurrentHalfRange();
            var startDate = new Date(currentHalf.range.start).setHours(0, 0, 0, 0);
            var endDate = new Date(currentHalf.range.end).setHours(23, 59, 59, 999);

            for (let date = new Date(startDate); date <= endDate; date.setDate(date.getDate() + 1)) {
                let formattedDate = formatDate(date);
                var inputFormatDate = formatDateToYYYYMMDD(date);
                let dateId = formatDateAsNumber(date);
                var mainRow = `
                    <tr>
                        <td style=\"cursor: pointer;\" class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-custom-500 clickable-project-name\" data-item-id=\"\${dateId}\">
                            \${formattedDate}
                        </td>
                    `;
                var taskRows = '';
                var undertime = 0;
                data.forEach(item => {
                    let filteredEmpTasks = item.empTasks.filter(task => {
                        let taskDate = new Date(task.date).setHours(0, 0, 0, 0);
                        return taskDate === date.getTime() && !task.archived;
                    });
                    
                    if (filteredEmpTasks.length > 0) {
                        filteredEmpTasks.forEach(task => {
                            let taskDate = new Date(task.date).setHours(0, 0, 0, 0);
                            if(task.worker_logs && task.worker_logs.undertime && taskDate === date.getTime() && !task.archived){
                                //console.log('worker logs ' + task.worker_logs.undertime)
                                undertime = task.worker_logs.undertime
                                console.log('undertime ' + undertime);
                            }
                            else{
                                console.log('worker logs ' + 0)
                            }
                            console.log('is adjusted'+ task.is_adjusted)
                        })
                        
                        var taskTable = `                   
                            \${filteredEmpTasks.map(task => `
                                <tr>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">\${item.project.name}</td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">\${task.task_desc}</td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">\${convertMinutesToHoursMinutes(task.assigned_hours)}</td>
                                    <td id=\"rendered_time\${task.id}\" class=\"px-3.5 py-2.5 border-y border-transparent\">\${task.rendered_hours ? convertMinutesToHoursMinutes(task.rendered_hours) : 0}</td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">
                                        <input id=\"checkboxDefault6\" data-item-id=\"\${task.id}\" class=\"emp_chkbox clickable-adjustment size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-red-500 checked:border-red-500 dark:checked:bg-red-500 dark:checked:border-red-500 checked:disabled:bg-red-400 checked:disabled:border-red-400\" type=\"checkbox\" value=\"\" \${task.is_adjusted ? 'checked' : ''} \${undertime <= 0 ? 'hidden' : ''}>
                                    </td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">\${getAttendanceStatus(task.approved, task.is_adjusted)}</td>
                                </tr>
                            `).join('')}
                        `;
                        taskRows += taskTable;
                    }
                });

                var project_table = `
                    <tr id=\"empTaskTable\${dateId}\" class=\"hidden-emp-task-table\" hidden>
                            <td colspan=\"3\">
                                <div>
                                    <table class=\"w-full mx-5 mb-5\">
                                        <thead class=\"ltr:text-left rtl:text-right\">
                                            <tr>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Project</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Task</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Assigned Hours</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Rendered Hours</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Adjustments</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"empTaskBody\${dateId}\">
                `;
                var project_table_end = `
                    </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                `;
                var note_column = '';
                if(undertime > 0){
                    var note_column =
                    `   <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-red-500\">
                            There is \${convertMinutesToHoursMinutes(undertime)} Undertime
                        </td>
                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action\">
                            <div class=\"add-daily_time_record relative dropdown\">
                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                    <li>
                                        <a data-date=\"\${inputFormatDate}\" data-modal-target=\"addEmpTask\" class=\"add-task block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Add Task</span></a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>`
                }
                else{
                    var note_column =
                    `   <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">
                        </td>
                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action\">
                            <div class=\"add-daily_time_record relative dropdown\">
                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                    <li>
                                        <a data-date=\"\${inputFormatDate}\" data-modal-target=\"addEmpTask\" class=\"add-task block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Add Task</span></a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>`
                }
                //console.log('undertime ' + undertime);
                //console.log(mainRow + note_column + project_table + taskRows)
                tableBody.append(mainRow + note_column + project_table + taskRows + project_table_end);
            }

            // Attach click event handler to the clickable project name
            \$(\".clickable-project-name\").on(\"click\", function() {
                const itemId = \$(this).data(\"item-id\");
                toggleTaskTable(itemId);
            });

            \$(\".emp_chkbox\").on(\"click\", function() {
                const itemId = \$(this).data(\"item-id\");
                const isChecked = \$(this).is(\":checked\");
                adjustRenderedHour(itemId, isChecked);
            });

            //call lucide and refresh callback to load action menus
            lucide.createIcons();
            refreshCallBack();
            applyPermissionsToDOM();
        }

        //adjust rendered hour when checkbox is clicked
        async function adjustRenderedHour(taskId, isAdjusted) {
            console.log('Checkbox clicked! ' + isAdjusted);
            try {
                const apiUrl = `api/emp-tasks/adjust/\${taskId}`;
                
                // Prepare data for POST request
                const requestData = {
                    is_adjusted: isAdjusted
                };
            
                const response = await apiCall('POST', apiUrl, requestData);
                \$('#rendered_time'+taskId).text(convertMinutesToHoursMinutes(response.total_time));
                console.log('Task Adjusted:', response.total_time);
                //getWorkerLogs(selectedWorkerId);
            } catch (error) {
                console.error('Error adjusting task:', error);
                // Optionally handle error scenario
            }
        }

        // Function to toggle the visibility of task tables
        function toggleTaskTable(itemId) {
           // console.log('toggled')
            \$(`#empTaskTable\${itemId}`).toggle();
        }

        // Function to determine attendance status
        function getAttendanceStatus(approvedStatus, adjustments) {
            if (approvedStatus === true && !adjustments) {
                return 'Rendered';
            } else if (approvedStatus === true && adjustments) {
                return 'Missing';
            } else if (approvedStatus === false) {
                return 'No attendance';
            } else {
                return 'Pending';
            }
        }

        function updateCutoffDate() {
            var start_date = new Date(currentHalf.range.start);
            var end_date = new Date(currentHalf.range.end);

            // Format options
            var options = { year: 'numeric', month: 'long', day: 'numeric' };

            // Convert to formatted strings
            var formattedStartDate = start_date.toLocaleDateString('en-US', options);
            var formattedEndDate = end_date.toLocaleDateString('en-US', options);

           // console.log(`Start Date: \${formattedStartDate}`);
           // console.log(`End Date: \${formattedEndDate}`);
            \$(`#cutoff_date`).text('As of '+ formattedStartDate + ' - ' + formattedEndDate);
            \$(`#cutoff_date_sheet`).text('As of '+ formattedStartDate + ' - ' + formattedEndDate);
        }

        function calculateWorkingHours(start_date, end_date) {
            // Create Date objects from the provided dates
            let startDate = new Date(start_date);
            let endDate = new Date(end_date);
            
            // Initialize total hours
            let totalHours = 0;
            
            // Iterate over the date range
            while (startDate <= endDate) {
                // Check if the current day is not Sunday (0 is Sunday in getDay())
                if (startDate.getDay() !== 0) {
                    // Add 8 hours for each working day
                    totalHours += 8;
                }
                // Move to the next day
                startDate.setDate(startDate.getDate() + 1);
            }
            \$(`#total_remaining_hours_per_cutoff`).text(totalHours+' Hours');
            \$(`#total_remaining_mandays_per_cutoff`).text((totalHours/8).toFixed(3) + ' Mandays');
        }

        \$(document).on('click', '.approve-input', async function() {
            var workerId = \$(this).data('edit');
           // console.log(workerId);

            // Perform the API call
            var approve_overtime = await apiCall('PATCH', 'api/worker-overtime/approve/' + workerId, []);
           // console.log('API Call Response:', approve_overtime.status);

            // Check if the response status indicates success
            const selectedWorkerId = \$('#workerIdParams').data('worker-id');
            if (approve_overtime) {
                // Remove the closest parent <tr> element
                //\$(this).closest('tr').remove();
                getWorkerLogs(selectedWorkerId)

            } else {
                console.error('Failed to approve overtime. Status:', save_task_rendered_hours.status);
            }
        });

        \$(document).on('click', '.next-payroll', async function() {
            var workerId = \$(this).data('edit');
            var emp_record_id = \$(this).data('emp-record');
            // console.log(workerId);
            json_object = {
                \"emp_record_id\" : emp_record_id,
                \"workerlogs_id\" : workerId,
            };
            // Perform the API call
            var create_dtr_adjustment = await apiCall('POST', 'api/dtr-adjustments/create', json_object);
            // console.log('API Call Response:', approve_overtime.status);

            // Check if the response status indicates success
            const selectedWorkerId = \$('#workerIdParams').data('worker-id');
            if (create_dtr_adjustment) {
                getWorkerLogs(selectedWorkerId)
            } else {
                console.error('Failed to approve overtime. Status:', save_task_rendered_hours.status);
            }
        });

        \$(document).on('click', '.deny-input', async function() {
            var workerLogId = \$(this).data('edit');
            // console.log(workerLogId);

            // Perform the API call
            var deny_overtime = await apiCall('PATCH', 'api/worker-overtime/deny/' + workerLogId, []);
            // console.log('API Call Response:', deny_overtime.status);
            const selectedWorkerId = \$('#workerIdParams').data('worker-id');
            if (deny_overtime) {
                // Remove the closest parent <tr> element
                //\$(this).closest('tr').remove();
                getWorkerLogs(selectedWorkerId)
            } else {
                console.error('Failed to deny overtime. Status:', save_task_rendered_hours.status);
            }
        });

        \$(document).on('click', '.straight-time', async function() {
            var workerLogId = \$(this).data('edit');
           // console.log(workerLogId);

            // Perform the API call
            var straight_time = await apiCall('PATCH', 'api/straight_time/' + workerLogId, []);
           // console.log('API Call Response:', deny_overtime.status);
            const selectedWorkerId = \$('#workerIdParams').data('worker-id');
            if (straight_time) {
                // Remove the closest parent <tr> element
                //\$(this).closest('tr').remove();
                getWorkerLogs(selectedWorkerId)
            } else {
                console.error('Failed to deny overtime. Status:', save_task_rendered_hours.status);
            }
        });

        \$(document).on('click', '.chk_all_chkbox', function() {
            var isChecked = \$(this).is(':checked');
            \$('.bulk_chkbox').prop('checked', isChecked);
        });

        \$(document).on('click', '.apply-bulk', async function() {
            
            // Get the selected action from the dropdown
            var selectedAction = \$('#actionSelect').val();
            
            // Loop through each checked checkbox
            \$('.bulk_chkbox:checked').each(async function() {
                
                var workerLogId = \$(this).data('item-id');
                console.log(workerLogId)
                console.log(selectedAction)
                const selectedWorkerId = \$('#workerIdParams').data('worker-id');

                if (selectedAction == '1') {
                    // Call straight time function
                    var straight_time = await apiCall('PATCH', 'api/straight_time/' + workerLogId, []);
                    if (straight_time) {
                        //getWorkerLogs(selectedWorkerId);
                    } else {
                        console.error('Failed to apply straight time. Status:', straight_time.status);
                    }
                } else if (selectedAction == '2') {
                    // Call approve OT function
                    var approve_overtime = await apiCall('PATCH', 'api/worker-overtime/approve/' + workerLogId, []);
                    if (approve_overtime) {
                        //getWorkerLogs(selectedWorkerId);
                    } else {
                        console.error('Failed to approve overtime. Status:', approve_overtime.status);
                    }
                } else if (selectedAction == '3') {
                    // Call deny OT function
                    var deny_overtime = await apiCall('PATCH', 'api/worker-overtime/deny/' + workerLogId, []);
                    if (deny_overtime) {
                        //getWorkerLogs(selectedWorkerId);
                    } else {
                        console.error('Failed to deny overtime. Status:', deny_overtime.status);
                    }
                }
            });
            var emp_projects = await apiCall('POST', 'api/employee-projects-list/' + selectedWorkerId, jsonObject); 
            populateEmpAssignmentsTable(emp_projects.employee_projects);
            getWorkerLogs(selectedWorkerId)
        });

        //adjust rendered hour when checkbox is clicked
        async function getLatestLogTime() {
            const selectedWorkerId = \$('#workerIdParams').data('worker-id');
            try {
                const apiUrl = `api/workerlogs/get-latest-time/\${selectedWorkerId}`;            
                const response = await apiCall('GET', apiUrl,'');
                
                console.log('Task Adjusted:', response.latest_time);
                \$('#latest_update').text('');
                \$('#latest_update').text('Last updated: '+response.latest_time);
                //getWorkerLogs(selectedWorkerId);
            } catch (error) {
                console.error('Error adjusting task:', error);
                // Optionally handle error scenario
            }
        }

        \$(document).on('click', '.add-task', async function() {
            var workerLogId = \$(this).data('edit');
            // console.log(workerLogId);
            var selectedDate = \$(this).data('date')
            console.log('selected date' + selectedDate)
            // console.log('API Call Response:', deny_overtime.status);
            const modalAddTask = \$('#addEmpTask')
            if (modalAddTask) {
               \$('#task_date').val(selectedDate); 
            }
        });

        \$('form').on('submit', async function(event) {
            event.preventDefault(); // Prevent the default form submission
            
            var \$form = \$(this);
            var formData = \$form.serialize(); // Serialize form data
            
            \$.ajax({
                type: 'POST',
                url: \$form.attr('action'), // URL to send the data to
                data: formData, // Form data
                success: async function(response) {
                    // Handle success (e.g., show a success message or update the UI)
                    console.log('Form submitted successfully');
                    // Optionally close the modal
                    \$('[data-modal-close=\"addEmpTask\"]').click(); 
                    // You might also want to update the UI or redirect
                    // For example, you can manually redirect if needed
                    var emp_projects = await apiCall('POST', 'api/employee-projects-list/' + selectedWorkerId, jsonObject); 
                    populateEmpAssignmentsTable(emp_projects.employee_projects);
                },
                error: function(xhr, status, error) {
                    // Handle error (e.g., show an error message)
                    console.error('Form submission failed:', error);
                }
            });
        });

        // Attach click event handler to the clickable project name        
        getWorkerLogs(selectedWorkerId); //Initialize worker logs on page load
        getLatestLogTime();

        /* Toggle Man Days / Computed Rendered Hours */
        \$('.toggle-widget').click(function() {
            let \$manDays = \$('#man-days-container');
            let \$manHours = \$('#man-hours-container');

            if (\$manDays.hasClass('hidden')) {
                \$manDays.removeClass('hidden');
            } else {
                \$manDays.addClass('hidden');
            }

            if (\$manHours.hasClass('hidden')) {
                \$manHours.removeClass('hidden');
            } else {
                \$manHours.addClass('hidden');
            }
        });
        /* Toggle Man Days / Computed Rendered Hours End */
        
        function refreshCallBack() {
            //console.log('refresh')
            var dropdownElem = document.querySelectorAll('.dropdown');
            var dropupElem = document.querySelectorAll('.dropup');
            var dropStartElem = document.querySelectorAll('.dropstart');
            var dropendElem = document.querySelectorAll('.dropend');
            var isShowDropMenu = false;
            var isMenuInside = false;
            // dropdown event
            dropdownEvent(dropdownElem, 'bottom-start');
            // dropup event
            dropdownEvent(dropupElem, 'top-start');
            // dropstart event
            dropdownEvent(dropStartElem, 'left-start');
            // dropend event
            dropdownEvent(dropendElem, 'right-start');

            function dropdownEvent(elem, place) {
                Array.from(elem).forEach(function (item) {
                    item.querySelectorAll(\".dropdown-toggle\").forEach(function (subitem) {
                        subitem.addEventListener(\"click\", function (event) {
                            subitem.classList.toggle(\"show\");
                            var popper = Popper.createPopper(subitem, item.querySelector(\".dropdown-menu\"), {
                                placement: place
                            });

                            if (subitem.classList.contains(\"show\") != true) {
                                item.querySelector(\".dropdown-menu\").classList.remove(\"block\")
                                item.querySelector(\".dropdown-menu\").classList.add(\"hidden\")
                            } else {
                                dismissDropdownMenu()
                                item.querySelector(\".dropdown-menu\").classList.add(\"block\")
                                item.querySelector(\".dropdown-menu\").classList.remove(\"hidden\")
                                if (item.querySelector(\".dropdown-menu\").classList.contains(\"block\")) {
                                    subitem.classList.add(\"show\")
                                } else {
                                    subitem.classList.remove(\"show\")
                                }
                                event.stopPropagation();
                            }

                            isMenuInside = false;
                        });
                    });
                });
            }

            function dismissDropdownMenu() {
                Array.from(document.querySelectorAll(\".dropdown-menu\")).forEach(function (item) {
                    item.classList.remove(\"block\")
                    item.classList.add(\"hidden\")
                });
                Array.from(document.querySelectorAll(\".dropdown-toggle\")).forEach(function (item) {
                    item.classList.remove(\"show\")
                });
                isShowDropMenu = false;
            }

            // dropdown form
            Array.from(document.querySelectorAll(\".dropdown-menu\")).forEach(function (item) {
                if (item.querySelectorAll(\"form\")) {
                    Array.from(item.querySelectorAll(\"form\")).forEach(function (subitem) {
                        subitem.addEventListener(\"click\", function (event) {
                            if (!isShowDropMenu) {
                                isShowDropMenu = true;
                            }
                        })
                    });
                }
            });

            // data-tw-auto-close
            Array.from(document.querySelectorAll(\".dropdown-toggle\")).forEach(function (item) {
                var elem = item.parentElement
                if (item.getAttribute('data-tw-auto-close') == 'outside') {
                    elem.querySelector(\".dropdown-menu\").addEventListener(\"click\", function () {
                        if (!isShowDropMenu) {
                            isShowDropMenu = true;
                        }
                    });
                } else if (item.getAttribute('data-tw-auto-close') == 'inside') {
                    item.addEventListener(\"click\", function () {
                        isShowDropMenu = true;
                        isMenuInside = true;
                    });
                    elem.querySelector(\".dropdown-menu\").addEventListener(\"click\", function () {
                        isShowDropMenu = false;
                        isMenuInside = false;
                    });
                }
            });

            window.addEventListener('click', function (e) {
                if (!isShowDropMenu && !isMenuInside) {
                    if (!e.target.closest('.dropdown-menu')) {
                        dismissDropdownMenu();
                    }
                }
                isShowDropMenu = false;
            });

            const allDrawerButtons = document.querySelectorAll('[data-drawer-target]');
            const allDrawerCloseButtons = document.querySelectorAll('[data-drawer-close]');
            const allModalButtons = document.querySelectorAll('[data-modal-target]');
            const allModalCloseButtons = document.querySelectorAll('[data-modal-close]');
            const bodyElement = document.body;       
            
            let openDrawerId = null;
            let openModalId = null;
            if(document.getElementById(\"backDropDiv\")) {
                var backDropOverlay = document.getElementById(\"backDropDiv\");
            } else {
                var backDropOverlay = document.createElement('div');
                backDropOverlay.className = 'fixed inset-0 bg-slate-900/40 dark:bg-zink-800/70 z-[1049] backdrop-overlay hidden';
                backDropOverlay.id = 'backDropDiv';
            }
            if (allModalButtons.length > 0 || allDrawerButtons.length > 0)
                document.body.appendChild(backDropOverlay);

            // Function to toggle the state of drawers and modals
            function toggleElementState(elementId, show, delay) {
                const element = document.getElementById(elementId);
                if (element) {
                    if (!show) {
                        element.classList.add('show');
                        backDropOverlay.classList.add('hidden');
                        setTimeout(() => {
                            element.classList.add(\"hidden\");
                        }, 350);
                    } else {
                        element.classList.remove(\"hidden\");
                        setTimeout(() => {
                            element.classList.remove('show');
                            backDropOverlay.classList.remove('hidden');
                        }, delay);
                    }
                    bodyElement.classList.toggle('overflow-hidden', show);
                    if (show) {
                        openDrawerId = elementId;
                        openModalId = elementId;
                    } else {
                        openDrawerId = null;
                        openModalId = null;
                    }
                }
            }

            // Attach click event listeners to drawer buttons
            allDrawerButtons.forEach(element => {
                const drawerId = element.getAttribute('data-drawer-target');
                if (drawerId) {
                    element.addEventListener('click', function () {
                        toggleElementState(drawerId, true, 0);
                    });
                }
            });

            // Attach click event listeners to drawer close buttons
            allDrawerCloseButtons.forEach(element => {
                const drawerId = element.getAttribute('data-drawer-close');
                if (drawerId) {
                    element.addEventListener('click', function () {
                        toggleElementState(drawerId, false, 0);
                    });
                }
            });

            // Attach click event listeners to modal buttons
            allModalButtons.forEach(element => {
                const modalId = element.getAttribute('data-modal-target');
                if (modalId) {
                    element.addEventListener('click', function () {
                        toggleElementState(modalId, true, 200);
                    });
                }
            });

            // Attach click event listeners to modal close buttons
            allModalCloseButtons.forEach(element => {
                const modalId = element.getAttribute('data-modal-close');
                if (modalId) {
                    element.addEventListener('click', function () {
                        toggleElementState(modalId, false, 200);
                    });
                }
            });

            // Attach click event listener to backdrop-overlay
            backDropOverlay?.addEventListener('click', function () {
                if (openDrawerId) {
                    toggleElementState(openDrawerId, false, 0);
                }
                if (openModalId) {
                    toggleElementState(openModalId, false, 200);
                }
            });
        }
    });


    
</script>

";
        // line 1987
        yield "<script>
var options = {
    valueNames: [
        'date',
        'check_in',
        'check_out',
        'work_hours',
    ],
    page: 10,
    pagination: true,
    plugins: [
        ListPagination({
            left: 2,
            right: 2,
        }),
    ],
};

var employeeTable = new List(\"manpowerTable\", options).on(\"updated\", function (list) {
    // noresult show or hidden
   // console.log('here')
    if (document.getElementsByClassName(\"noresult\") && document.getElementsByClassName(\"noresult\")[0]) {
        list.matchingItems.length == 0 ?
            (document.getElementsByClassName(\"noresult\")[0].style.display = \"block\") :
            (document.getElementsByClassName(\"noresult\")[0].style.display = \"none\");

        if (list.matchingItems.length > 0) {
            document.getElementsByClassName(\"noresult\")[0].style.display = \"none\";
        } else {
            document.getElementsByClassName(\"noresult\")[0].style.display = \"block\";
        }
    }

    // length get of list
    var isFirst = list.i == 1;
    var isLast = list.i > list.matchingItems.length - list.page;

    // make the Prev and Nex buttons disabled on first and last pages accordingly
    document.querySelector(\".pagination-prev.disabled\") ?
        document.querySelector(\".pagination-prev.disabled\").classList.remove(\"disabled\") : \"\";
    document.querySelector(\".pagination-next.disabled\") ?
        document.querySelector(\".pagination-next.disabled\").classList.remove(\"disabled\") : \"\";
    // pagination code
    if (isFirst) {
        document.querySelector(\".pagination-prev\").classList.add(\"disabled\");
    }
    if (isLast) {
        document.querySelector(\".pagination-next\").classList.add(\"disabled\");
    }
    // show total numbers of records
    const totalEmploysElement = document.querySelector(\".total-Employs\");
    const totalRecordsElement = employeeTable.listContainer.querySelector(\".total-records\");
    const showingElement = employeeTable.listContainer.querySelector(\".showing\");

    if (totalEmploysElement) totalEmploysElement.innerHTML = employeeTable.items.length;
    if (totalRecordsElement) totalRecordsElement.innerHTML = employeeTable.items.length;

    if (showingElement) showingElement.innerHTML = employeeTable.visibleItems.length;
    document.querySelector(\".pagination-next\").addEventListener(\"click\", function () {
        document.querySelector(\".pagination.listjs-pagination\") ?
            document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\") && document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\").nextElementSibling != null ?
                document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\").nextElementSibling.children[0].click() : \"\" : \"\";
    });

    document.querySelector(\".pagination-prev\").addEventListener(\"click\", function () {
        document.querySelector(\".pagination.listjs-pagination\") ?
            document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\") && document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\").previousSibling != null ?
                document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\").previousSibling.children[0].click() : \"\" : \"\";
    });
    // end pagination code

    //lode js in package
    lucide.createIcons();
    
    //collapseComponent();
    
});

var options2 = {
    valueNames: [
        'project',
        'total_assigned_hours',
    ],
    page: 10,
    pagination: true,
    plugins: [
        ListPagination({
            left: 2,
            right: 2,
        }),
    ],
};

var projectTable = new List(\"empAssignments\", options2).on(\"updated\", function (list) {
    // noresult show or hidden
   // console.log('here')
    if (document.getElementsByClassName(\"noresult2\") && document.getElementsByClassName(\"noresult2\")[0]) {
        list.matchingItems.length == 0 ?
            (document.getElementsByClassName(\"noresult2\")[0].style.display = \"block\") :
            (document.getElementsByClassName(\"noresult2\")[0].style.display = \"none\");

        if (list.matchingItems.length > 0) {
            document.getElementsByClassName(\"noresult2\")[0].style.display = \"none\";
        } else {
            document.getElementsByClassName(\"noresult2\")[0].style.display = \"block\";
        }
    }

    // length get of list
    var isFirst = list.i == 1;
    var isLast = list.i > list.matchingItems.length - list.page;

    // make the Prev and Nex buttons disabled on first and last pages accordingly
    document.querySelector(\".pagination-prev.disabled\") ?
        document.querySelector(\".pagination-prev.disabled\").classList.remove(\"disabled\") : \"\";
    document.querySelector(\".pagination-next.disabled\") ?
        document.querySelector(\".pagination-next.disabled\").classList.remove(\"disabled\") : \"\";
    // pagination code
    if (isFirst) {
        document.querySelector(\".pagination-prev\").classList.add(\"disabled\");
    }
    if (isLast) {
        document.querySelector(\".pagination-next\").classList.add(\"disabled\");
    }
    // show total numbers of records
    const totalEmploysElement = document.querySelector(\".total-Employs\");
    const totalRecordsElement = projectTable.listContainer.querySelector(\".total-records\");
    const showingElement = projectTable.listContainer.querySelector(\".showing\");

    if (totalEmploysElement) totalEmploysElement.innerHTML = projectTable.items.length;
    if (totalRecordsElement) totalRecordsElement.innerHTML = projectTable.items.length;

    if (showingElement) showingElement.innerHTML = projectTable.visibleItems.length;
    document.querySelector(\".pagination-next\").addEventListener(\"click\", function () {
        document.querySelector(\".pagination.listjs-pagination2\") ?
            document.querySelector(\".pagination.listjs-pagination2\").querySelector(\".active\") && document.querySelector(\".pagination.listjs-pagination2\").querySelector(\".active\").nextElementSibling != null ?
                document.querySelector(\".pagination.listjs-pagination2\").querySelector(\".active\").nextElementSibling.children[0].click() : \"\" : \"\";
    });

    document.querySelector(\".pagination-prev\").addEventListener(\"click\", function () {
        document.querySelector(\".pagination.listjs-pagination2\") ?
            document.querySelector(\".pagination.listjs-pagination2\").querySelector(\".active\") && document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\").previousSibling != null ?
                document.querySelector(\".pagination.listjs-pagination2\").querySelector(\".active\").previousSibling.children[0].click() : \"\" : \"\";
    });
    // end pagination code

    //lode js in package
    lucide.createIcons();
    
    //collapseComponent();
    //refreshCallbacks();
});
</script>
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
        return "manpower/apps-manpower.html.twig";
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
        return array (  2114 => 1987,  563 => 437,  558 => 434,  553 => 432,  549 => 431,  545 => 430,  542 => 429,  532 => 428,  497 => 402,  486 => 400,  482 => 399,  475 => 395,  471 => 394,  467 => 393,  462 => 391,  449 => 380,  434 => 350,  431 => 348,  384 => 302,  381 => 284,  358 => 256,  347 => 254,  343 => 253,  168 => 80,  161 => 38,  157 => 37,  152 => 35,  146 => 34,  140 => 31,  135 => 29,  124 => 22,  121 => 21,  114 => 8,  111 => 7,  101 => 6,  82 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Attendance{% endblock %}
{% block stylesheets %}
{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Attendance', title: 'Attendance' }) }}

                <div class=\"grid grid-cols-12 gap-x-5 flex flex-col items-center mb-2\">
                    <div class=\"col-span-12 md:col-span-12 xl:col-span-3\">
                        {# <div class=\"mb-5 hidden\">
                            <label for=\"selectEmployee\" class=\"inline-block mb-2 text-base font-medium\">Select Employee</label>
                            <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"select_worker\">
                                <option value=\"\"></option>
                                {% for worker_item in workers %}
                                    <option value=\"{{worker_item.id}}\">{{worker_item.firstname}} {{worker_item.lastname}}</option>
                                {% endfor %}
                            </select>
                        </div> #}
                        {% set workerId = app.request.get('id') %}
                        <div id=\"workerIdParams\" class=\"hidden\" data-worker-id=\"{{ workerId }}\"></div>
                        <div class=\"card\" id=\"worker_logs\">
                            <div class=\"card-body\">
                                <div id=\"emp_profile\">
                                    <div class=\"flex flex-row gap-5\">
                                        <div class=\"\">
                                            <div class=\"mb-1 size-20 rounded-md\">
                                                <img src=\"{{ employee.profile_photo_path ? asset(employee.profile_photo_path) : asset('assets/images/users/user-dummy-img.jpg') }}\" alt=\"\" class=\"h-20 w-40 rounded-md\">
                                            </div>
                                            <h5 id=\"employeeId\" class=\"border-transparent text-16 font-semibold\">{{ employee.employee_code }}</h5>
                                        </div>
                                        <div class=\"\">
                                            <h6 class=\"text-16\"><a href=\"#!\" id=\"emp_name\">{{ employee.last_name }}, {{ employee.first_name }}</a></h6>
                                            <p class=\"text-slate-500 dark:text-zink-200\" id=\"emp_position\">{{ employee.position }}</p>
                                            <div class=\"mt-1\">
                                                <p class=\"text-slate-500 dark:text-zink-200\" id=\"emp_cellphone\">{{ employee.cellphone }}</p>
                                                <p class=\"text-slate-500 dark:text-zink-200\" id=\"emp_email\">{{ employee.email }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    {# <div class=\"mt-5 overflow-x-auto\">
                                        <table class=\"w-full mb-0\" id=\"tb_worker_logs\">
                                            <tbody>
                                                <tr>
                                                    <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent text-slate-500 dark:text-zink-200\">Employee ID</td>
                                                    <td id=\"employeeId\" class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent font-semibold\">EMP001</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent text-slate-500 dark:text-zink-200\">Experience</td>
                                                    <td id=\"experience\" class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent font-semibold\"></td>
                                                </tr>
                                                <tr>
                                                    <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent text-slate-500 dark:text-zink-200\">Joining Date</td>
                                                    <td id=\"joiningDate\" class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent font-semibold\"></td>
                                                </tr>
                                                <tr>
                                                    <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent text-slate-500 dark:text-zink-200\">Total Hours (Years)</td>
                                                    <td id=\"totalHoursYears\" class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent font-semibold\"></td>
                                                </tr>
                                                <tr>
                                                    <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent text-slate-500 dark:text-zink-200\">Total Hours</td>
                                                    <td id=\"totalHours\" class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent font-semibold\">218.4 Hrs</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent text-slate-500 dark:text-zink-200\">Regular Hours</td>
                                                    <td id=\"regularHours\" class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent font-semibold\">172 Hrs</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent text-slate-500 dark:text-zink-200\">Overtime</td>
                                                    <td id=\"overtime\" class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent font-semibold\">24 Hrs</td>
                                                </tr>
                                                <tr>
                                                    <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent text-slate-500 dark:text-zink-200\">Holiday</td>
                                                    <td id=\"holiday\" class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent font-semibold\">22.40 Hrs</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> #}
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div id=\"man-hours-container\" class=\"grid grid-cols-12 col-span-12 md:col-span-12 xl:col-span-9 gap-x-2\">
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 rounded-md text-sky-500 bg-sky-100 text-15 dark:bg-sky-500/20 shrink-0\"><i data-lucide=\"clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_hours_per_month\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Total Hours Rendered</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 text-yellow-500 bg-yellow-100 rounded-md text-15 dark:bg-yellow-500/20 shrink-0\"><i data-lucide=\"calendar-clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_remaining_hours_per_cutoff\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\" id=\"pending_hour_cutoff\">Total Hours for the Cut-Off</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-2 card-body\">
                                    <div class=\"flex items-center justify-center size-12 rounded-md text-green-500 bg-green-100 text-15 dark:bg-green-500/20 shrink-0\"><i data-lucide=\"clock9\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"approved_hours_per_cutoff\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Approved Overtime Hours</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-2 card-body\">
                                    <div class=\"flex items-center justify-center size-12 rounded-md text-sky-500 bg-sky-100 text-15 dark:bg-sky-500/20 shrink-0\"><i data-lucide=\"clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"approved_hours\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Project Hours Rendered</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 text-yellow-500 bg-yellow-100 rounded-md text-15 dark:bg-yellow-500/20 shrink-0\"><i data-lucide=\"folder-clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_remaining_hours_per_project\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\" id=\"pending_hour\">Remaining Alloted Project Hours</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 text-red-500 bg-red-100 rounded-md text-15 dark:bg-red-500/20 shrink-0\"><i data-lucide=\"clock10\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_undertime_hours_per_cutoff\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\" id=\"pending_hour_cutoff\">Unrendered Assigned Hours</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 text-right\">
                            <a href=\"javascript:void(0)\" id=\"toggle-manDays\" class=\"toggle-widget text-custom-500 underline cursor-pointer\">Show Widgets in Man Days</a>
                        </div>
                    </div>
                    <div id=\"man-days-container\" class=\"grid grid-cols-12 col-span-12 md:col-span-12 xl:col-span-9 gap-x-2 hidden\">
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 rounded-md text-sky-500 bg-sky-100 text-15 dark:bg-sky-500/20 shrink-0\"><i data-lucide=\"clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_mandays_per_month\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Total Mandays Rendered</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 text-yellow-500 bg-yellow-100 rounded-md text-15 dark:bg-yellow-500/20 shrink-0\"><i data-lucide=\"calendar-clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_remaining_mandays_per_cutoff\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\" id=\"pending_hour_cutoff\">Total Mandays for the Cut-Off</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-2 card-body\">
                                    <div class=\"flex items-center justify-center size-12 rounded-md text-green-500 bg-green-100 text-15 dark:bg-green-500/20 shrink-0\"><i data-lucide=\"clock9\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"approved_mandays_per_cutoff\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Approved Overtime Hours</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->

                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-2 card-body\">
                                    <div class=\"flex items-center justify-center size-12 rounded-md text-sky-500 bg-sky-100 text-15 dark:bg-sky-500/20 shrink-0\"><i data-lucide=\"clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"approved_mandays\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Project Mandays Rendered</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 text-yellow-500 bg-yellow-100 rounded-md text-15 dark:bg-yellow-500/20 shrink-0\"><i data-lucide=\"folder-clock\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_remaining_mandays_per_project\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\" id=\"pending_hour\">Remaining Alloted Project Mandays</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 lg:col-span-4\">
                            <div class=\"card\">
                                <div class=\"flex items-center gap-4 card-body\">
                                    <div class=\"flex items-center justify-center size-12 text-red-500 bg-red-100 rounded-md text-15 dark:bg-red-500/20 shrink-0\"><i data-lucide=\"clock10\"></i></div>
                                    <div class=\"grow\">
                                        <h5 class=\"mb-1 text-16\"><span class=\"counter-value\" data-target=\"\" id=\"total_undertime_mandays_per_cutoff\">0</span></h5>
                                        <p class=\"text-slate-500 dark:text-zink-200\" id=\"pending_mandays_cutoff\">Unrendered Assigned Hours</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class=\"col-span-12 text-right\">
                            <a href=\"javascript:void(0)\" id=\"toggle-manHours\" class=\"toggle-widget text-custom-500 underline cursor-pointer\">Show Widgets in Man Hours</a>
                        </div>
                    </div>
                </div><!--end grid-->
                <div class=\"col-span-10 grid grid-cols-12 gap-5\">
                    <div class=\"card col-span-12 lg:col-span-6\" id=\"empAssignments\">
                        <div class=\"card-body\">
                        <div class=\"flex justify-between items-center mb-2\">
                            <!-- Left Element -->
                            <div class=\"flex-shrink-0\">
                                <div class=\"flex items-center gap-2\">
                                    <p class=\"text-slate-500 dark:text-zink-200 text-balance\">Employee Task Sheet by Project</p>
                                </div>
                            </div>
                            <div class=\"\">
                                <button type=\"button\" data-modal-target=\"addEmpTask\" onclick=\"\" class=\"add-daily_time_record text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">
                                    Bulk Add Task
                                </button>
                            </div>
                        </div>
                        <!-- Right Element -->
                        <div class=\"col-span-10 mb-2 flex flex-row items-center gap-2\">
                            <div>
                                <p class=\"text-slate-500 dark:text-zink-200\">As of</p>
                            </div>
                            <div>
                                <select id=\"year_selector\" class=\"py-1 w-40 pl-3 text-xs pr-7 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                    {% for year in range(2024, \"now\"|date(\"Y\")) %}
                                        <option value=\"{{ year }}\">{{ year }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <div>
                                <select id=\"cut_off_dd\" class=\"py-1 w-45 pl-3 text-xs pr-7 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 ml-2\">
                                    <!-- Options for cut off dates -->
                                </select>
                            </div>
                        </div>
                            
                            <div class=\"overflow-x-auto overflow-y-auto\" style=\"height:500px !important\">
                                <table class=\"w-full whitespace-nowrap\">
                                    <thead class=\"sticky top-0 z-9999 ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600\">
                                        <tr>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Date</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Note</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id=\"tbody_emp_taks\">
                                    </tbody>
                                </table>
                                {# <div class=\"noresult2\" id=\"noresult2\">
                                    <div class=\"py-6 text-center\">
                                        <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                        <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                        <p class=\"mb-0 text-slate-500 dark:text-zink-200\"</p>
                                    </div>
                                </div> #}
                            </div>
                            {# <div class=\"flex flex-col items-center mt-5 md:flex-row\">
                                <div class=\"mb-4 grow md:mb-0\" >
                                    <p class=\"text-slate-500 dark:text-zink-200\">Showing <b>10</b> of <b>15</b> Results</p>
                                </div>
                                <div class=\"col-sm-auto mt-sm-0\">
                                    <div class=\"flex gap-2 pagination-wrap justify-content-center\">
                                        <a class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-prev \" href=\"javascript:void(0)\">
                                            <i class=\"size-4 mr-1 rtl:rotate-180\" data-lucide=\"chevron-left\"></i> Prev
                                        </a>
                                        <ul class=\"flex flex-wrap items-center gap-2 pagination listjs-pagination2\">
                                        </ul>
                                        <a class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-next\" href=\"javascript:void(0)\">
                                            Next <i class=\"size-4 ml-1 rtl:rotate-180\" data-lucide=\"chevron-right\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> #}
                        </div>
                    </div>
                    <div class=\"card col-span-12 lg:col-span-6\" id=\"manpowerTable\">
                        <div class=\"card-body\">
                            <div class=\"flex justify-between mb-2\">
                                <div class=\"xl:col-span-3 mb-2\">
                                    <div class=\"flex items-center gap-2\">
                                        <p class=\"text-slate-500 dark:text-zink-200\">Employee Daily Time Record Sheet</p>
                                    </div>
                                    <div class=\"add-daily_time_record mt-2 flex items-center justify-between\">
                                        <div class=\"w-39\">
                                            <select id=\"actionSelect\" class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                                <option value=\"1\">Straight Time</option>
                                                <option value=\"2\">Approve OT</option>
                                                <option value=\"3\">Deny OT</option>
                                            </select>
                                        </div>
                                        <div class=\"\">
                                            <button type=\"button\" onclick=\"\" class=\"apply-bulk text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">
                                                Apply
                                            </button>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class=\"xl:col-span-3  mb-2\">
                                    <div class=\"flex items-center gap-2\">
                                        <p id=\"latest_update\" class=\"text-slate-500 dark:text-zink-200\">Last updated: </p>
                                    </div>
                                </div>
                            </div><!--end grid-->
                            <div class=\"overflow-x-auto overflow-y-auto\" style=\"height:500px !important\">
                                <table class=\"w-full whitespace-nowrap h-5\">
                                    <thead class=\"sticky top-0 ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600\">
                                        <tr>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">
                                                <input id=\"chk_all_chkbox\" data-item-id=\"\" class=\"chk_all_chkbox clickable-adjustment size-4 border rounded-sm appearance-none cursor-pointer bg-white bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-red-500 checked:border-red-500 dark:checked:bg-red-500 dark:checked:border-red-500 checked:disabled:bg-red-400 checked:disabled:border-red-400\" type=\"checkbox\">
                                            </th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Date</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Time-In</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Time-Out</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Rendered Hours</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Undertime</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Overtime</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Overtime Status</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">For Next Payroll</th>
                                            {# <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Attendace Status</th> #}
                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Actions</th>
                                            {# <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Action</th> #}
                                        </tr>
                                    </thead>
                                    <tbody id=\"tbody_worker_logs\">
                                    </tbody>
                                </table>
                                <div class=\"noresult\" id=\"noresult\">
                                    <div class=\"py-6 text-center\">
                                        <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                        <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                        <p class=\"mb-0 text-slate-500 dark:text-zink-200\"</p>
                                    </div>
                                </div>
                            </div>
                            {# <div class=\"flex flex-col items-center mt-5 md:flex-row\">
                                <div class=\"mb-4 grow md:mb-0\" >
                                    <p class=\"text-slate-500 dark:text-zink-200\">Showing <b>10</b> of <b>15</b> Results</p>
                                </div>
                                <div class=\"col-sm-auto mt-sm-0\">
                                    <div class=\"flex gap-2 pagination-wrap justify-content-center\">
                                        <a class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-prev \" href=\"javascript:void(0)\">
                                            <i class=\"size-4 mr-1 rtl:rotate-180\" data-lucide=\"chevron-left\"></i> Prev
                                        </a>
                                        <ul class=\"flex flex-wrap items-center gap-2 pagination listjs-pagination\">
                                        </ul>
                                        <a class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-next\" href=\"javascript:void(0)\">
                                            Next <i class=\"size-4 ml-1 rtl:rotate-180\" data-lucide=\"chevron-right\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div> #}
                        </div>
                    </div>
                </div>

                <div id=\"addEmpTask\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
                    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
                        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
                            <h5 class=\"text-16\">Create New Task</h5>
                            <button data-modal-close=\"addEmpTask\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                        </div>
                        
                        <form action=\"{{ path('submit_emp_dtr_task') }}\" method=\"post\">
                            <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                <input type=\"hidden\" name=\"employee_id\" value={{employee.id}}>
                                <input type=\"hidden\" name=\"emp_code\" value={{employee.employee_code}}>
                                <input type=\"hidden\" name=\"emp_worker_id\" value={{workerId}}>
                                <div class=\"mb-3\">
                                    <label for=\"project\" class=\"inline-block mb-2 text-base font-medium\">Project</label>
                                    <select class=\" z-999 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"project_id\" name=\"project_id\">
                                        {% for project_item in projects %}
                                            <option value=\"{{project_item.id}}\">{{project_item.name}}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"task_desc\" class=\"inline-block mb-2 text-base font-medium\">Task Description</label>
                                    <input type=\"text\" id=\"task_desc\" name=\"task_desc\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter task description\" value=\"\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"task_date\" class=\"inline-block mb-2 text-base font-medium\">Task Date</label>
                                    <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\" id=\"task_date\" name=\"task_date\" placeholder=\"\" value=\"\">
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"assigned_hours\" class=\"inline-block mb-2 text-base font-medium\">Assigned Time (in hours)</label>
                                    <input type=\"number\" id=\"assigned_hours\" data-provider=\"timepickr\" data-time-hrs=\"true\" name=\"assigned_hours\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 flatpickr-input active\" placeholder=\"Enter rendered hours\" value=\"\" required>
                                </div>
                            </div>
                            <div class=\"flex justify-end gap-2 mt-4 p-4\">
                                <button type=\"button\" data-modal-close=\"addEmpTask\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                                <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end col-->
                <!--end col-->
{% endblock %}
    
{% block javascripts %}

<script src=\"{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/list.js/list.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/list.pagination.js/list.pagination.min.js') }}\"></script>
<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>

{# <script src=\"assets/js/app.js\"></script> #}
<script>
    \$(document).ready(function() {
        var selectedWorker = \$('#select_worker');
        const selectedWorkerId = \$('#workerIdParams').data('worker-id');
        var dateWorker = \$('#cut_off_dd');
        var today = new Date();
        var fullname = '';
        var position = '';
        // Get the year, month, and day
        var year = today.getFullYear();
        var month = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-based, so add 1
        var day = String(today.getDate()).padStart(2, '0');
        var formattedDate = year + '-' + month + '-' + day;

        //get currenthalf of the month
        populateCutOffOptions()
        let currentHalf = getCurrentHalfRange();
        var startDate = new Date(currentHalf.range.start);
        var endDate = new Date(currentHalf.range.end);
        
        // Format the dates as per your requirement (e.g., 'YYYY-MM-DD')
        var formattedStartDate = startDate.toLocaleDateString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit' });
        var formattedEndDate = endDate.toLocaleDateString('en-US', { year: 'numeric', month: '2-digit', day: '2-digit' });

        var jsonObject = {
            \"start_date\": currentHalf.range.start,
            \"end_date\": currentHalf.range.end
        };

        //Trigger populateCutoffOptions when this value change
        \$('#year_selector').change(function() {
            populateCutOffOptions();
        });

        // console.log('json object '+ JSON.stringify(jsonObject))
        // console.log(jsonObject)

        async function getWorkerLogs(selectedWorkerId) {
            updateCutoffDate() //update cutoff date <p> tag

            //update pending hours per cut-off
            let currentHalf = getCurrentHalfRange();
            var start_date = new Date(currentHalf.range.start);
            var end_date = new Date(currentHalf.range.end);
            var totalWorkingHours = calculateWorkingHours(start_date, end_date);

            var jsonObjectDate = {
                \"start_date\": currentHalf.range.start,
                \"end_date\": currentHalf.range.end
            };

            //updateDatepicker(startDate,endDate) // update
            //var selectedWorkerId = \$(this).val();
            ////console.log(selectedWorkerId);
            if(!selectedWorkerId){
                const tableBody = \$(\"#tbody_worker_logs\");
                tableBody.empty(); // Clear existing rows
                \$('#emp_profile').hide();
                \$('#default_card').show();
                \$('#noresult').show();
                
            }
            else{
                
                \$('#emp_profile').show();
                \$('#default_card').hide();

                var worker_log_reposnse = await apiCall('POST', 'api/worker/' + selectedWorkerId, jsonObjectDate);
                //console.log('API Call Response:', worker_log_reposnse);

                if (!worker_log_reposnse || Object.keys(worker_log_reposnse).length === 0) {
                    // Check if response is falsy or an empty object
                    \$('#noresult').show(); // Show your element indicating no data or error
                } else {
                    console.log('worker logs '+worker_log_reposnse.worker_logs)
                    \$('#noresult').hide(); // Show your element
                    await populateTable(worker_log_reposnse) // Populate table with received data
                    //tableBody = \$(\"#tbody_worker_logs\")
                    
                }

                var worker_profile = await apiCall('GET', 'api/worker_id/' + selectedWorkerId, '');

                fullname = worker_profile.workers[0].emp_record.last_name + \", \" + worker_profile.workers[0].emp_record.first_name 
                position = worker_profile.workers[0].position;

                updateWorkerDetails(worker_profile.workers[0].empcode, '5 years', '2020-01-01', '5', '218.4 Hrs', '172 Hrs', '24 Hrs', '22.40 Hrs', fullname, position);

                //update approved hour
                var empRecordId = worker_profile.workers[0].emp_record.id
                await getEmpTask(empRecordId, selectedWorkerId)

                //update employee project table
                var emp_projects = await apiCall('POST', 'api/employee-projects-list/' + selectedWorkerId, jsonObject); 
                populateEmpAssignmentsTable(emp_projects.employee_projects);
                //refreshCallBack();
            }
        }

        function convertMinutesToHoursMinutes(totalMinutes) {
            // Calculate hours and minutes
            var hours = Math.floor(totalMinutes / 60);
            var minutes = totalMinutes % 60;

            // Return formatted string
            if(hours > 1){
                return hours + ' hours ' + minutes + ' min';
            }
            else if(hours <= 1){
                return hours + ' hour ' + minutes + ' min';
            }
            else{
                console.log('minutes: ' + hours + \".\" +minutes)
                return '-';
            }
        }

        function updateDatepicker(startDate, endDate){
            \$(\"#worker_log_date\").flatpickr({
                mode: \"range\",
                dateFormat: \"Y-m-d\",
                defaultDate: [startDate, endDate],
                onClose: function(selectedDates, dateStr, instance) {
                    //console.log(\"Selected Dates:\", selectedDates);
                    //console.log(\"Formatted Date String:\", dateStr);
                }
            });
        }

        async function getEmpTask(empRecordId, selectedWorkerId){
            let currentHalf = getCurrentHalfRange();
            ////console.log(`Current half: \${currentHalf.half}`);
            ////console.log(\"Date range:\", currentHalf.range);
            var empTaskJson = {
                \"employee_id\":empRecordId,
                \"date_start\": currentHalf.range.start,
                \"date_end\": currentHalf.range.end
            };
            var workerJson = {
                \"start_date\": currentHalf.range.start,
                \"end_date\": currentHalf.range.end
            };
            //get employee task
            var emp_task_items = await apiCall('POST', 'api/emp-tasks-emp-id', empTaskJson);
           // console.log('emp task items', emp_task_items)
            calcRenderedHours(emp_task_items)
            calcRemainingHours(emp_task_items)

            //get worker logs
            var worker_log_reposnse = await apiCall('POST', 'api/worker/' + selectedWorkerId, workerJson);
            //console.log('worker logs ' + worker_log_reposnse.worker_logs)
           // console.log('worker logs ' + worker_log_reposnse);

            
            total_rendered_hours = calculateTotalHours(worker_log_reposnse.worker_logs);
            // console.log('rendered hours '+ total_rendered_hours)
            \$('#total_hours_per_month').text(convertMinutesToHoursMinutes(total_rendered_hours));
            \$('#total_mandays_per_month').text(calculateMandays(total_rendered_hours));        
            
        }

        function getSemiMonthlyRanges(year, month) {
            // Create a date object for the first day of the month
            let startDate = new Date(year, month - 1, 1);
            
            // Create a date object for the 15th day of the month
            let midDate = new Date(year, month - 1, 15);
            
            // Create a date object for the 16th day of the month
            let secondHalfStartDate = new Date(year, month - 1, 16);
            
            // Create a date object for the last day of the month
            let endDate = new Date(year, month, 0);

            // Format the dates as yyyy-mm-dd
            let formatDate = (date) => {
                let d = date.getDate();
                let m = date.getMonth() + 1; // Months are zero indexed
                let y = date.getFullYear();
                return `\${y}-\${m.toString().padStart(2, '0')}-\${d.toString().padStart(2, '0')}`;
            };

            // Return the date ranges
            return {
                firstHalf: {
                    start: formatDate(startDate),
                    end: formatDate(midDate)
                },
                secondHalf: {
                    start: formatDate(secondHalfStartDate),
                    end: formatDate(endDate)
                }
            };
        }

        function formatDateText(date) {
            const options = { year: 'numeric', month: 'short', day: 'numeric' };
            const formattedDate = new Intl.DateTimeFormat('en-US', options).format(date);
            return formattedDate;
        }

        // Function to generate the options for the select element
        function populateCutOffOptions() {
            let select = document.getElementById('cut_off_dd');
            let today = new Date();
            let year = \$('#year_selector').val();
            let currentMonth = today.getMonth() + 1;
            let currentDay = today.getDate();

            // Clear existing options
            select.innerHTML = '';

            // Determine the limit for the month loop based on the selected year
            let monthLimit = (year == today.getFullYear()) ? currentMonth : 12;

            // Loop through each month of the selected year
            for (let month = 1; month <= monthLimit; month++) {
            let ranges = getSemiMonthlyRanges(year, month);

            // Create options for the first half of the month
            let firstHalfOption = document.createElement('option');
            let firstHalfStart = new Date(ranges.firstHalf.start);
            let firstHalfEnd = new Date(ranges.firstHalf.end);
            firstHalfOption.value = `\${formatDateText(firstHalfStart)} - \${formatDateText(firstHalfEnd)}`;
            firstHalfOption.text = `\${formatDateText(firstHalfStart)} - \${formatDateText(firstHalfEnd)}`;
            select.appendChild(firstHalfOption);

            // Create options for the second half of the month
            let secondHalfOption = document.createElement('option');
            let secondHalfStart = new Date(ranges.secondHalf.start);
            let secondHalfEnd = new Date(ranges.secondHalf.end);
            secondHalfOption.value = `\${formatDateText(secondHalfStart)} - \${formatDateText(secondHalfEnd)}`;
            secondHalfOption.text = `\${formatDateText(secondHalfStart)} - \${formatDateText(secondHalfEnd)}`;
            select.appendChild(secondHalfOption);

            // Check if current date falls within the range of this option
            if (year == today.getFullYear()) {
                if (today >= firstHalfStart && today <= firstHalfEnd && currentDay <= 15) {
                firstHalfOption.selected = true;
                } else if (today >= secondHalfStart && today <= secondHalfEnd && currentDay > 15) {
                secondHalfOption.selected = true;
                }
            }
            }
        }

        /*function getCurrentHalfRange() {
            //let today = new Date();
            let today = new Date('2024-07-14');
            let year = today.getFullYear();
            let month = today.getMonth() + 1; // Months are zero indexed, so +1 to get the current month

            let ranges = getSemiMonthlyRanges(year, month);
            let day = today.getDate();

            if (day <= 15) {
                return { half: 'firstHalf', range: ranges.firstHalf };
            } else {
                return { half: 'secondHalf', range: ranges.secondHalf };
            }
        }*/

        function getCurrentHalfRange() {
            // Get the selected value from the dropdown
            let selectDate = \$('#cut_off_dd').val();
            console.log('selected date '+ selectDate)
            // Split the selected date range into start and end dates
            let dates = selectDate.split(' - ');
            let startDate = new Date(dates[0].trim());
            let endDate = new Date(dates[1].trim());

            // Extract year and month from the start date
            let year = startDate.getFullYear();
            let month = startDate.getMonth() + 1; // Months are zero indexed, so +1 to get the current month

            // Get semi-monthly ranges for the selected month
            let ranges = getSemiMonthlyRanges(year, month);

            // Determine the current half based on the end date of the selected range
            let day = endDate.getDate();
            if (day <= 15) {
                return { half: 'firstHalf', range: ranges.firstHalf };
            } else {
                return { half: 'secondHalf', range: ranges.secondHalf };
            }
        }


        function calculateTotalHours(workerLogs) {
            let totalHours = 0;
            var rendered_hours = 0;
            if (workerLogs && workerLogs.length > 0) {
                
                workerLogs.forEach(log => {
                    console.log(log);
                    if(log.rendered_hours){
                        totalHours += parseFloat(log.rendered_hours);
                    }
                    else{
                        totalHours += 0;
                    }
                });
            } else {
               // console.log(\"No worker logs found.\");
            }

            console.log(\"Total Hours Worked:\", totalHours);
            return totalHours;
        }

        function calculateMandays(minutes) {
            // Initialize totalMandays to zero
            let totalMandays = 0;

            // Check if minutes is a valid number
            if (typeof minutes === 'number' && minutes >= 0) {
                // Calculate total mandays based on the number of minutes
                totalMandays = (minutes / 60) / 8;
            }

            // Log and return the result
            console.log(\"Total Mandays Worked:\", totalMandays);
            return totalMandays.toFixed(3) + ' Mandays';
        }

        function formatDateDateworker(dateString) {
            // Parse the date string into a Date object
            let dateObj = new Date(dateString);
            
            // Check if the dateObj is valid
            if (!(dateObj instanceof Date) || isNaN(dateObj.getTime())) {
                console.error('Invalid date:', dateString);
                return ''; // Return empty string or handle error as per your requirement
            }

            // Format the date as yyyy-mm-dd
            let year = dateObj.getFullYear();
            let month = (dateObj.getMonth() + 1).toString().padStart(2, '0'); // Months are zero-indexed
            let day = dateObj.getDate().toString().padStart(2, '0');

            return `\${year}-\${month}-\${day}`;
        }


        dateWorker.on('change', async function() {
            var selectDate = \$(this).val();
            var dates = selectDate.split(' - '); // Adjust split based on your dropdown format

            var startDate, endDate;

            if (dates.length === 2) {
                // If both start and end dates are provided
                startDate = new Date(dates[0].trim());
                endDate = new Date(dates[1].trim());
            } else {
                // If only one date is provided or invalid format
                startDate = new Date(dates[0].trim());
                endDate = startDate; // Set end date to start date for single day selection
            }

            // Log the start and end dates (optional)
            // console.log('Start Date:', startDate);
            // console.log('End Date:', endDate);

            var selectedWorkerId = \$('#workerIdParams').data('worker-id');
            var jsonObject = {
                \"start_date\": formatDateDateworker(startDate), // Format date if needed before sending
                \"end_date\": formatDateDateworker(endDate) // Format date if needed before sending
            };
            console.log('json date' + formatDateDateworker(startDate) + \" \" + formatDateDateworker(endDate))
            // Perform API call to fetch worker logs
            if (!selectedWorkerId) {
                const tableBody = \$(\"#tbody_worker_logs\");
                tableBody.empty(); // Clear existing rows
                \$('#noresult').show();
            } else {
                var worker_log_response = await apiCall('POST', 'api/worker/' + selectedWorkerId, jsonObject);

                if (!worker_log_response || Object.keys(worker_log_response).length === 0) {
                    // Check if response is falsy or an empty object
                    \$('#noresult').show(); // Show your element indicating no data or error
                } else {
                    \$('#noresult').hide(); // Hide no result element if data is present
                    populateTable(worker_log_response); // Populate table with received data
                }
            }

            // Update employee project table
            var emp_projects = await apiCall('POST', 'api/employee-projects-list/' + selectedWorkerId, jsonObject);
            populateEmpAssignmentsTable(emp_projects.employee_projects);
        });

        // Function to format date to yyyy-mm-dd format (if needed)
        function formatDate(date) {
            return date.toISOString().split('T')[0];
        }



        function updateWorkerDetails(employeeId, experience, joiningDate, totalHoursYears, totalHours, regularHours, overtime, holiday, fullname, position) {
            // Update each <td> element with the provided values
            \$('#employeeId').text(employeeId);
            \$('#emp_name').text(fullname);
            \$('#emp_position').text(position);
        }

        // Function to populate the table
        // Note dont ever refactor this this is pretty sensitive because of async nature
        // The dropdown is not working if refractored
        async function populateTable2(data) {
            const tableBody = \$(\"#tbody_worker_logs\");
            tableBody.empty(); // Clear existing rows
            var total_hours_month = 0;
            var total_approved_overtime = 0.00;
            var total_undertime = 0.00;
            var ot_formatted_time = 0;
            var ut_formatted_time = 0;
            var table_rows = [];

            //get current half date
            let currentHalf = getCurrentHalfRange();
            var startDate = new Date(currentHalf.range.start).setHours(0, 0, 0, 0);
            var endDate = new Date(currentHalf.range.end).setHours(23, 59, 59, 999);
            
            const promises = data.map(async item => {
                //refreshCallBack();
                var loginDate = '';
                var logoutDate = '';
                // Parse login and logout dates
                if (item.loginDate) {
                    loginDate = new Date(item.loginDate.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                    loginDate = new Date(loginDate.toLocaleString(\"en-US\", { timeZone: \"Asia/Manila\" }));
                }
                if (item.logoutDate) {
                    logoutDate = new Date(item.logoutDate.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                    logoutDate = new Date(logoutDate.toLocaleString(\"en-US\", { timeZone: \"Asia/Manila\" }));
                }

                // Function to format time in 12-hour format with AM/PM
                function formatTime(date) {
                    const hours = date.getHours();
                    const minutes = date.getMinutes();
                    const ampm = hours >= 12 ? 'PM' : 'AM';
                    const formattedHours = hours % 12 || 12; // Convert 24-hour to 12-hour format
                    const formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
                    return formattedHours + ':' + formattedMinutes + ' ' + ampm;
                }

                function formatDate(dateString) {
                    dateString = new Date(dateString.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                    dateString = new Date(dateString.toLocaleString(\"en-US\", { timeZone: \"Asia/Manila\" }));
                    const options = { day: 'numeric', month: 'short', year: 'numeric', timeZone: \"Asia/Manila\" };
                    return dateString.toLocaleDateString('en-US', options);
                }
                //format day
                const date = new Date(item.loginDate);
                const days = [\"Sun\", \"Mon\", \"Tue\", \"Wed\", \"Thu\", \"Fri\", \"Sat\"];
                const day = days[date.getUTCDay()];

                // Format login and logout times
                var loginTime = '';
                var logoutTime = '';
                if (loginDate) {
                    loginTime = formatTime(loginDate);
                }
                if (logoutDate) {
                    logoutTime = formatTime(logoutDate);
                }

                // Calculate difference in hours
                var diffMilliseconds = Math.abs(logoutDate - loginDate);
                var diffHours = 0;
                var formattedTime = 0;

                //get drowdown option
                var attendance_dropdown = await generateAttendanceDropdown(item);
                
                // Example row construction (adjust as per your table structure)
                const row = `
                    <tr>
                        <td class=\"px-3.5 py-2.5 border-y border-transparent items-center\">
                            <input id=\"checkboxDefault6\" data-item-id=\"\${item.id}\" class=\"bulk_chkbox clickable-adjustment size-4 border rounded-sm appearance-none cursor-pointer bg-white bg-slate-100 border-black border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-red-500 checked:border-red-500 dark:checked:bg-red-500 dark:checked:border-red-500 checked:disabled:bg-red-400 checked:disabled:border-red-400\" type=\"checkbox\" value=\"\">
                        </td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">
                            \${formatDate(item.loginDate)} <span class=\"px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-slate-400 text-slate-500 dark:bg-zink-700 dark:border-zink-400 dark:text-zink-200 ltr:ml-1 rtl:mr-1 align-middle\">\${day}</span>
                        </td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${loginTime}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${logoutTime}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${item.rendered_hours !== null ? convertMinutesToHoursMinutes(item.rendered_hours) : '-'}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${item.undertime !== null ? convertMinutesToHoursMinutes(item.undertime) : '-'}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${item.overtime !== null ? convertMinutesToHoursMinutes(item.overtime) : '-'}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${getOvertimeStatus(item.overtime_approved)}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${attendance_dropdown}</td>
                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action\" \${!currentDateData || currentDateData.overtime_approved === false || currentDateData.overtime_approved === null ? 'hidden' : ''}>
                            <div class=\"edit-daily_time_record relative dropdown\">
                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                    <li>
                                        <a data-edit=\"\${item.id}\" class=\"straight-time block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Straight Time</span></a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                `;
                /*
                    <li>
                        <a data-edit=\"\${item.id}\" class=\"approve block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Approve OT</span></a>
                    </li>
                    <li>
                        <a data-edit=\"\${item.id}\" class=\"deny block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" style=\"position: relative; z-index: 10;\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Deny OT</span></a>
                    </li>
                */

                tableBody.append(row);
                console.log('login data '+loginTime)
                //refreshCallBack();
                if (item.overtime_approved == true) {
                    total_approved_overtime += item.overtime;
                }
                //compute undertime
                if(item.undertime){
                    total_undertime += item.undertime
                }
                else{
                    total_undertime += 0
                }
                //total_undertime += item.undertime !== null ? item.undertime : 0;
                console.log('current undertime'+item.undertime)
                lucide.createIcons();
                console.log('total approved OT' + total_approved_overtime / 60)
                \$('#approved_hours_per_cutoff').text('');
                \$('#approved_hours_per_cutoff').text(convertMinutesToHoursMinutes(total_approved_overtime));
                \$('#approved_mandays_per_cutoff').text(convertMinutesToHoursMinutes(total_approved_overtime));

                \$('#total_undertime_hours_per_cutoff').text('');
                \$('#total_undertime_hours_per_cutoff').text(convertMinutesToHoursMinutes(total_undertime));
                \$('#total_undertime_mandays_per_cutoff').text(convertMinutesToHoursMinutes(total_undertime));
            });

            await Promise.all(promises);
            refreshCallBack();
            // Function to execute after forEach and all async operations complete
            console.log('All operations completed');
        }

        async function populateTable(data) {
            console.log('called here');
            const tableBody = \$(\"#tbody_worker_logs\");
            tableBody.empty(); // Clear existing rows

            let total_approved_overtime = 0.00;
            let total_undertime = 0.00;

            // Get current half of the month range
            let currentHalf = getCurrentHalfRange();
            const startDate = new Date(currentHalf.range.start).setHours(0, 0, 0, 0);
            const endDate = new Date(currentHalf.range.end).setHours(23, 59, 59, 999);

            function formatTime(date) {
                const hours = date.getHours();
                const minutes = date.getMinutes();
                const ampm = hours >= 12 ? 'PM' : 'AM';
                const formattedHours = hours % 12 || 12; // Convert 24-hour to 12-hour format
                const formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
                return formattedHours + ':' + formattedMinutes + ' ' + ampm;
            }

            async function processDate(date) {
                const formattedDate = formatDate(date);
                const day = date.toLocaleString('en-US', { weekday: 'short', timeZone: 'Asia/Manila' });
                let loginTime = '';
                let logoutTime = '';
                let renderedHours = '-';
                let undertime = '-';
                let overtime = '-';
                let overtimeApproved = '-';
                let attendanceDropdown = '';
                let for_the_next_payroll = 'No';

                // Filter all entries for the current date
                const currentDateEntries = data.worker_logs.filter(item => {
                    const loginDate = new Date(item.loginDate).setHours(0, 0, 0, 0);
                    return loginDate === date.getTime();
                });

                // Find the entry with the earliest login time
                const currentDateData = currentDateEntries.reduce((earliest, current) => {
                    const earliestLogin = new Date(earliest.loginDate).getTime();
                    const currentLogin = new Date(current.loginDate).getTime();
                    return currentLogin < earliestLogin ? current : earliest;
                }, currentDateEntries[0]);

                if (currentDateData) {
                    if(currentDateData.loginDate && currentDateData.attendance_status && currentDateData.attendance_status.name !== 'Absent'){
                        const loginDate = new Date(currentDateData.loginDate.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                        loginTime = formatTime(new Date(loginDate.toLocaleString(\"en-US\", { timeZone: \"Asia/Manila\" })));
                    } else {
                        loginTime = '-';
                    }

                    if(currentDateData.logoutDate && currentDateData.attendance_status && currentDateData.attendance_status.name !== 'Absent'){
                        const logoutDate = new Date(currentDateData.logoutDate.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                        logoutTime = formatTime(new Date(logoutDate.toLocaleString(\"en-US\", { timeZone: \"Asia/Manila\" })));
                    } else {
                        logoutTime = '-';
                    }

                    renderedHours = currentDateData.rendered_hours !== null ? convertMinutesToHoursMinutes(currentDateData.rendered_hours) : '-';
                    undertime = currentDateData.undertime !== null ? convertMinutesToHoursMinutes(currentDateData.undertime) : '-';
                    overtime = currentDateData.overtime !== null ? convertMinutesToHoursMinutes(currentDateData.overtime) : '-';
                    overtimeApproved = getOvertimeStatus(currentDateData.overtime_approved);

                    // set for the next payroll

                    if (currentDateData.dTRAdjutments.length > 0) {
                        // Extract and format the adjusted date
                        const date = new Date(currentDateData.dTRAdjutments[0].adjusted_date);
                        
                        // Set the time to midnight (00:00:00) in the local time zone
                        date.setHours(0, 0, 0, 0);
                        
                        // Format the date as YYYY-MM-DD in the local time zone
                        const formattedDate = date.toLocaleDateString('en-CA'); // 'en-CA' format is YYYY-MM-DD
                        
                        console.log('adjusted date', date);
                        console.log('formatted date', formattedDate);
                        
                        for_the_next_payroll = formattedDate;
                    }
                    // attendanceDropdown = await generateAttendanceDropdown(currentDateData);

                    if (currentDateData.overtime_approved) {
                        total_approved_overtime += currentDateData.overtime;
                    }

                    total_undertime += currentDateData.undertime !== null ? currentDateData.undertime : 0;
                }

                return `
                    <tr>
                        <td class=\"px-3.5 py-2.5 border-y border-transparent items-center\">
                            <input id=\"checkboxDefault6\" data-item-id=\"\${currentDateData ? currentDateData.id : ''}\" class=\"bulk_chkbox clickable-adjustment size-4 border rounded-sm appearance-none cursor-pointer bg-white bg-slate-100 border-black border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-red-500 checked:border-red-500 dark:checked:bg-red-500 dark:checked:border-red-500 checked:disabled:bg-red-400 checked:disabled:border-red-400\" type=\"checkbox\" value=\"\" \${currentDateData ? '' : 'hidden'}>
                        </td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">
                            \${formattedDate} <span class=\"px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-slate-400 text-slate-500 dark:bg-zink-700 dark:border-zink-400 dark:text-zink-200 ltr:ml-1 rtl:mr-1 align-middle\">\${day}</span>
                        </td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${loginTime}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${logoutTime}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${renderedHours}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${undertime}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${overtime}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${overtimeApproved}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${for_the_next_payroll}</td>
                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action\" \${currentDateData ? '' : 'hidden'} \${!currentDateData || currentDateData.overtime_approved === false || currentDateData.overtime_approved === null ? 'hidden' : ''}>
                            <div class=\"edit-daily_time_record relative dropdown\">
                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                    <li>
                                        <a data-edit=\"\${currentDateData ? currentDateData.id : ''}\" class=\"straight-time block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Straight Time</span></a>
                                    </li>
                                    <li \${!currentDateData || currentDateData.dTRAdjutments.length > 0 ? 'hidden' : ''}>
                                        <a data-edit=\"\${currentDateData ? currentDateData.id : ''}\" data-emp-record=\"\${data ? data.emp_record_id : ''}\" class=\"next-payroll block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Apply To Next Payroll</span></a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                `;
                refreshCallBack();
            }
            /*
                <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${attendanceDropdown}</td>
                <li>
                    <a data-edit=\"\${currentDateData ? currentDateData.id : ''}\" class=\"approve-input block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Approve OT</span></a>
                </li>
                <li>
                    <a data-edit=\"\${currentDateData ? currentDateData.id : ''}\" class=\"deny-input block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" style=\"position: relative; z-index: 10;\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Deny OT</span></a>
                </li>
            */

            const promises = [];
            for (let date = new Date(startDate); date <= endDate; date.setDate(date.getDate() + 1)) {
                promises.push(processDate(new Date(date)));
            }

            try {
                const rows = await Promise.all(promises);
                rows.forEach(row => {
                    tableBody.append(row);
                });

                // Update the UI with total approved overtime and undertime
                \$(\"#approved_hours_per_cutoff\").text(convertMinutesToHoursMinutes(total_approved_overtime));
                \$(\"#total_undertime_hours_per_cutoff\").text(convertMinutesToHoursMinutes(total_undertime));

                // Update mandays view
                \$(\"#approved_mandays_per_cutoff\").text(convertMinutesToHoursMinutes(total_approved_overtime));
                \$(\"#total_undertime_mandays_per_cutoff\").text(convertMinutesToHoursMinutes(total_undertime));

                lucide.createIcons();
                refreshCallBack();
                applyPermissionsToDOM();
            } catch (error) {
                console.error('Error processing dates:', error);
            }
            // refreshCallBack();
            applyPermissionsToDOM();
        }


        async function generateAttendanceDropdown(item) {
            const attendanceStatus = item.attendance_status !== null ? item.attendance_status.name : 'Pending';

            try {
                // Call the attendance API
                var response = await apiCall('GET', 'api/attendance-types', null);
                var attendanceTypes = response.attendance_types;
                
                var dropdownHtml = '';
                // Ensure the response is parsed correctly
                if (!Array.isArray(attendanceTypes)) {
                    attendanceTypes = [];
                }

                // Build the dropdown options dynamically
                let options = attendanceTypes.map(type => `
                    <option value=\"\${type.id}\" \${attendanceStatus === type.name ? 'selected' : ''}>\${type.name}</option>
                `).join('');
                
                if (attendanceStatus == 'Present') {
                    dropdownHtml = `
                        <select class=\"edit-daily_time_record attendance-dropdown-\${item.id}\" data-id=\"\${item.id}\">
                            <option value=\"Pending\" \${attendanceStatus === 'Pending' ? 'selected' : ''}>Pending</option>
                            \${options}
                        </select>
                    `;
                } else {
                    dropdownHtml = `
                        <select class=\"edit-daily_time_record attendance-dropdown-\${item.id}\" data-id=\"\${item.id}\">
                            <option value=\"Pending\" \${attendanceStatus === 'Pending' ? 'selected' : ''}>Pending</option>
                            \${options}
                        </select>
                    `;
                }

                // Attach change event handler to the dropdown using delegated event handling
                \$(document).on('change', `.attendance-dropdown-\${item.id}`, function() {
                    const selectedValue = \$(this).val();
                    const itemId = \$(this).data('id');
                    console.log('Dropdown value changed:', itemId);
                    updateAttendanceStatus(itemId, selectedValue);
                });
                return dropdownHtml;

                
            } catch (error) {
                console.error('Error fetching attendance types:', error);
                return `
                    <select class=\"edit-daily_time_record attendance-dropdown\${item.id}\" data-id=\"\${item.id}\" disabled>
                        <option value=\"Pending\" \${attendanceStatus === 'Pending' ? 'selected' : ''}>Pending</option>
                    </select>
                `;
            }
        }

        // Function to update attendance status via API call
        async function updateAttendanceStatus(itemId, selectedValue) {
            const selectedWorkerId = \$('#workerIdParams').data('worker-id');
            try {
                const apiUrl = `api/worker-overtime/update_attendance/\${itemId}`;
                
                // Prepare data for POST request
                const requestData = {
                    attendance_id: selectedValue
                };
                console.log('attendace updated')
                const response = await apiCall('POST', apiUrl, requestData);

                // Optionally handle success response
                \$('#dateWorker').trigger('change');
                console.log('Attendance status updated successfully:', response);
            } catch (error) {
                console.error('Error updating attendance status:', error);
                // Optionally handle error scenario
            }
        }

        // Function to generate attendance dropdown and handle change event
        /*async function generateAttendanceDropdown(item) {
            const attendanceStatus = item.attendance_status !== null ? item.attendance_status.name : 'Pending';

            try {
                // Call the attendance API to fetch types
                const response = await apiCall('GET', 'api/attendance-types', null);
                let attendanceTypes = response.attendance_types || [];

                // Build dropdown options dynamically
                let options = attendanceTypes.map(type => `
                    <option value=\"\${type.id}\" \${attendanceStatus === type.name ? 'selected' : ''}>\${type.name}</option>
                `).join('');

                // Determine if dropdown should be disabled
                const disabledAttr = attendanceStatus === 'Present' ? 'disabled' : '';

                // Construct the dropdown HTML
                const dropdownHtml = `
                    <select class=\"attendance-dropdown\" data-id=\"\${item.id}\" \${disabledAttr}>
                        <option value=\"Pending\" \${attendanceStatus === 'Pending' ? 'selected' : ''}>Pending</option>
                        \${options}
                    </select>
                `;

                

            } catch (error) {
                console.error('Error fetching attendance types:', error);
                // Handle error scenario by providing a fallback dropdown
                const fallbackHtml = `
                    <select class=\"attendance-dropdown\" data-id=\"\${item.id}\">
                        <option value=\"Pending\" \${attendanceStatus === 'Pending' ? 'selected' : ''}>Pending</option>
                    </select>
                `;
                \$(`#attendance-dropdown-cell-\${item.id}`).html(fallbackHtml);
            }
        }*/
 
        // Function to determine attendance status
        function getOvertimeStatus(approvedStatus) {
            if (approvedStatus === true) {
                return 'Approved';
            } else if (approvedStatus === false) {
                return 'Not applicable';
            } else {
                return 'Pending';
            }
        }

        function updateApprovedHours(hours){
            \$('#approved_hours').text('');
            \$('#approved_hours').text(convertMinutesToHoursMinutes(hours));
            \$('#approved_mandays').text(calculateMandays(hours));
        }

        function updateHoursLeft(hours){
            \$('#total_remaining_hours_per_project').text('');
            \$('#total_remaining_hours_per_project').text(convertMinutesToHoursMinutes(hours));
            \$('#total_remaining_mandays_per_project').text(calculateMandays(hours));
        }

        function calcRenderedHours(emp_task_items){
            if (emp_task_items && emp_task_items.emp_tasks) {
                var totalRenderedHours = emp_task_items.emp_tasks.reduce(function (total, task) {
                    // Check if the task is approved before adding its rendered hours
                    ////console.log('approved '+task.approved)
                    if (task.approved) {
                        return total + task.rendered_hours;
                    } else {
                        return total;
                    }
                }, 0);

                ////console.log(\"Total Approved Rendered Hours:\", totalRenderedHours);
                updateApprovedHours(totalRenderedHours);
            } else {
                //console.log(\"No tasks found.\");
            }
        }

        function calcRemainingHours(emp_task_items){
            //console.log(emp_task_items)
            if (emp_task_items && emp_task_items.emp_tasks) {
                var totalRemainingHours = emp_task_items.emp_tasks.reduce(function (total, task) {
                    // Check if the task is approved before adding its rendered hours
                    //console.log('approved '+task.approved)
                    if (task.approved === null || task.approved === undefined || task.approved === false) {
                        return total + task.assigned_hours;
                    } else {
                        return total;
                    }
                }, 0);

                console.log(\"Total Approved Remaining Hours:\", totalRemainingHours);
                updateHoursLeft(totalRemainingHours);
            } else {
                //console.log(\"No tasks found.\");
            }
        }

        //function formatDate(dateString) {
        //    dateString = new Date(dateString.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
        //    dateString = new Date(dateString.toLocaleString(\"en-US\", {timeZone: \"Asia/Manila\"}));
        //    const options = { day: 'numeric', month: 'short', year: 'numeric', timeZone: \"Asia/Manila\" };
        //    return dateString.toLocaleDateString('en-US', options);
        //}

        function formatDate(date) {
            // Ensure date is a valid Date object
            if (!(date instanceof Date) || isNaN(date.getTime())) {
                console.error('Invalid date object:', date);
                return ''; // or throw an error, depending on your error handling strategy
            }

            // Adjust the date to the desired timezone, if needed
            const options = { day: 'numeric', month: 'short', year: 'numeric', timeZone: \"Asia/Manila\" };

            // Return the formatted date string
            return date.toLocaleDateString('en-US', options);
        }

        function formatDateAsNumber(date) {
            const year = date.getFullYear();
            const month = String(date.getMonth() + 1).padStart(2, '0'); // Months are zero-indexed
            const day = String(date.getDate()).padStart(2, '0');
            return `\${year}\${month}\${day}`;
        }

        function formatDateToYYYYMMDD(date) {
            var year = date.getFullYear();
            var month = ('0' + (date.getMonth() + 1)).slice(-2); // Months are zero-based
            var day = ('0' + date.getDate()).slice(-2);
            return `\${year}-\${month}-\${day}`;
        }

        function populateEmpAssignmentsTable(data) {
            const tableBody = \$(\"#tbody_emp_taks\");
            tableBody.empty(); // Clear existing rows

            // Get current half of the month range
            let currentHalf = getCurrentHalfRange();
            var startDate = new Date(currentHalf.range.start).setHours(0, 0, 0, 0);
            var endDate = new Date(currentHalf.range.end).setHours(23, 59, 59, 999);

            for (let date = new Date(startDate); date <= endDate; date.setDate(date.getDate() + 1)) {
                let formattedDate = formatDate(date);
                var inputFormatDate = formatDateToYYYYMMDD(date);
                let dateId = formatDateAsNumber(date);
                var mainRow = `
                    <tr>
                        <td style=\"cursor: pointer;\" class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-custom-500 clickable-project-name\" data-item-id=\"\${dateId}\">
                            \${formattedDate}
                        </td>
                    `;
                var taskRows = '';
                var undertime = 0;
                data.forEach(item => {
                    let filteredEmpTasks = item.empTasks.filter(task => {
                        let taskDate = new Date(task.date).setHours(0, 0, 0, 0);
                        return taskDate === date.getTime() && !task.archived;
                    });
                    
                    if (filteredEmpTasks.length > 0) {
                        filteredEmpTasks.forEach(task => {
                            let taskDate = new Date(task.date).setHours(0, 0, 0, 0);
                            if(task.worker_logs && task.worker_logs.undertime && taskDate === date.getTime() && !task.archived){
                                //console.log('worker logs ' + task.worker_logs.undertime)
                                undertime = task.worker_logs.undertime
                                console.log('undertime ' + undertime);
                            }
                            else{
                                console.log('worker logs ' + 0)
                            }
                            console.log('is adjusted'+ task.is_adjusted)
                        })
                        
                        var taskTable = `                   
                            \${filteredEmpTasks.map(task => `
                                <tr>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">\${item.project.name}</td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">\${task.task_desc}</td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">\${convertMinutesToHoursMinutes(task.assigned_hours)}</td>
                                    <td id=\"rendered_time\${task.id}\" class=\"px-3.5 py-2.5 border-y border-transparent\">\${task.rendered_hours ? convertMinutesToHoursMinutes(task.rendered_hours) : 0}</td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">
                                        <input id=\"checkboxDefault6\" data-item-id=\"\${task.id}\" class=\"emp_chkbox clickable-adjustment size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-red-500 checked:border-red-500 dark:checked:bg-red-500 dark:checked:border-red-500 checked:disabled:bg-red-400 checked:disabled:border-red-400\" type=\"checkbox\" value=\"\" \${task.is_adjusted ? 'checked' : ''} \${undertime <= 0 ? 'hidden' : ''}>
                                    </td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">\${getAttendanceStatus(task.approved, task.is_adjusted)}</td>
                                </tr>
                            `).join('')}
                        `;
                        taskRows += taskTable;
                    }
                });

                var project_table = `
                    <tr id=\"empTaskTable\${dateId}\" class=\"hidden-emp-task-table\" hidden>
                            <td colspan=\"3\">
                                <div>
                                    <table class=\"w-full mx-5 mb-5\">
                                        <thead class=\"ltr:text-left rtl:text-right\">
                                            <tr>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Project</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Task</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Assigned Hours</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Rendered Hours</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Adjustments</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"empTaskBody\${dateId}\">
                `;
                var project_table_end = `
                    </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                `;
                var note_column = '';
                if(undertime > 0){
                    var note_column =
                    `   <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-red-500\">
                            There is \${convertMinutesToHoursMinutes(undertime)} Undertime
                        </td>
                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action\">
                            <div class=\"add-daily_time_record relative dropdown\">
                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                    <li>
                                        <a data-date=\"\${inputFormatDate}\" data-modal-target=\"addEmpTask\" class=\"add-task block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Add Task</span></a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>`
                }
                else{
                    var note_column =
                    `   <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">
                        </td>
                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action\">
                            <div class=\"add-daily_time_record relative dropdown\">
                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                    <li>
                                        <a data-date=\"\${inputFormatDate}\" data-modal-target=\"addEmpTask\" class=\"add-task block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Add Task</span></a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>`
                }
                //console.log('undertime ' + undertime);
                //console.log(mainRow + note_column + project_table + taskRows)
                tableBody.append(mainRow + note_column + project_table + taskRows + project_table_end);
            }

            // Attach click event handler to the clickable project name
            \$(\".clickable-project-name\").on(\"click\", function() {
                const itemId = \$(this).data(\"item-id\");
                toggleTaskTable(itemId);
            });

            \$(\".emp_chkbox\").on(\"click\", function() {
                const itemId = \$(this).data(\"item-id\");
                const isChecked = \$(this).is(\":checked\");
                adjustRenderedHour(itemId, isChecked);
            });

            //call lucide and refresh callback to load action menus
            lucide.createIcons();
            refreshCallBack();
            applyPermissionsToDOM();
        }

        //adjust rendered hour when checkbox is clicked
        async function adjustRenderedHour(taskId, isAdjusted) {
            console.log('Checkbox clicked! ' + isAdjusted);
            try {
                const apiUrl = `api/emp-tasks/adjust/\${taskId}`;
                
                // Prepare data for POST request
                const requestData = {
                    is_adjusted: isAdjusted
                };
            
                const response = await apiCall('POST', apiUrl, requestData);
                \$('#rendered_time'+taskId).text(convertMinutesToHoursMinutes(response.total_time));
                console.log('Task Adjusted:', response.total_time);
                //getWorkerLogs(selectedWorkerId);
            } catch (error) {
                console.error('Error adjusting task:', error);
                // Optionally handle error scenario
            }
        }

        // Function to toggle the visibility of task tables
        function toggleTaskTable(itemId) {
           // console.log('toggled')
            \$(`#empTaskTable\${itemId}`).toggle();
        }

        // Function to determine attendance status
        function getAttendanceStatus(approvedStatus, adjustments) {
            if (approvedStatus === true && !adjustments) {
                return 'Rendered';
            } else if (approvedStatus === true && adjustments) {
                return 'Missing';
            } else if (approvedStatus === false) {
                return 'No attendance';
            } else {
                return 'Pending';
            }
        }

        function updateCutoffDate() {
            var start_date = new Date(currentHalf.range.start);
            var end_date = new Date(currentHalf.range.end);

            // Format options
            var options = { year: 'numeric', month: 'long', day: 'numeric' };

            // Convert to formatted strings
            var formattedStartDate = start_date.toLocaleDateString('en-US', options);
            var formattedEndDate = end_date.toLocaleDateString('en-US', options);

           // console.log(`Start Date: \${formattedStartDate}`);
           // console.log(`End Date: \${formattedEndDate}`);
            \$(`#cutoff_date`).text('As of '+ formattedStartDate + ' - ' + formattedEndDate);
            \$(`#cutoff_date_sheet`).text('As of '+ formattedStartDate + ' - ' + formattedEndDate);
        }

        function calculateWorkingHours(start_date, end_date) {
            // Create Date objects from the provided dates
            let startDate = new Date(start_date);
            let endDate = new Date(end_date);
            
            // Initialize total hours
            let totalHours = 0;
            
            // Iterate over the date range
            while (startDate <= endDate) {
                // Check if the current day is not Sunday (0 is Sunday in getDay())
                if (startDate.getDay() !== 0) {
                    // Add 8 hours for each working day
                    totalHours += 8;
                }
                // Move to the next day
                startDate.setDate(startDate.getDate() + 1);
            }
            \$(`#total_remaining_hours_per_cutoff`).text(totalHours+' Hours');
            \$(`#total_remaining_mandays_per_cutoff`).text((totalHours/8).toFixed(3) + ' Mandays');
        }

        \$(document).on('click', '.approve-input', async function() {
            var workerId = \$(this).data('edit');
           // console.log(workerId);

            // Perform the API call
            var approve_overtime = await apiCall('PATCH', 'api/worker-overtime/approve/' + workerId, []);
           // console.log('API Call Response:', approve_overtime.status);

            // Check if the response status indicates success
            const selectedWorkerId = \$('#workerIdParams').data('worker-id');
            if (approve_overtime) {
                // Remove the closest parent <tr> element
                //\$(this).closest('tr').remove();
                getWorkerLogs(selectedWorkerId)

            } else {
                console.error('Failed to approve overtime. Status:', save_task_rendered_hours.status);
            }
        });

        \$(document).on('click', '.next-payroll', async function() {
            var workerId = \$(this).data('edit');
            var emp_record_id = \$(this).data('emp-record');
            // console.log(workerId);
            json_object = {
                \"emp_record_id\" : emp_record_id,
                \"workerlogs_id\" : workerId,
            };
            // Perform the API call
            var create_dtr_adjustment = await apiCall('POST', 'api/dtr-adjustments/create', json_object);
            // console.log('API Call Response:', approve_overtime.status);

            // Check if the response status indicates success
            const selectedWorkerId = \$('#workerIdParams').data('worker-id');
            if (create_dtr_adjustment) {
                getWorkerLogs(selectedWorkerId)
            } else {
                console.error('Failed to approve overtime. Status:', save_task_rendered_hours.status);
            }
        });

        \$(document).on('click', '.deny-input', async function() {
            var workerLogId = \$(this).data('edit');
            // console.log(workerLogId);

            // Perform the API call
            var deny_overtime = await apiCall('PATCH', 'api/worker-overtime/deny/' + workerLogId, []);
            // console.log('API Call Response:', deny_overtime.status);
            const selectedWorkerId = \$('#workerIdParams').data('worker-id');
            if (deny_overtime) {
                // Remove the closest parent <tr> element
                //\$(this).closest('tr').remove();
                getWorkerLogs(selectedWorkerId)
            } else {
                console.error('Failed to deny overtime. Status:', save_task_rendered_hours.status);
            }
        });

        \$(document).on('click', '.straight-time', async function() {
            var workerLogId = \$(this).data('edit');
           // console.log(workerLogId);

            // Perform the API call
            var straight_time = await apiCall('PATCH', 'api/straight_time/' + workerLogId, []);
           // console.log('API Call Response:', deny_overtime.status);
            const selectedWorkerId = \$('#workerIdParams').data('worker-id');
            if (straight_time) {
                // Remove the closest parent <tr> element
                //\$(this).closest('tr').remove();
                getWorkerLogs(selectedWorkerId)
            } else {
                console.error('Failed to deny overtime. Status:', save_task_rendered_hours.status);
            }
        });

        \$(document).on('click', '.chk_all_chkbox', function() {
            var isChecked = \$(this).is(':checked');
            \$('.bulk_chkbox').prop('checked', isChecked);
        });

        \$(document).on('click', '.apply-bulk', async function() {
            
            // Get the selected action from the dropdown
            var selectedAction = \$('#actionSelect').val();
            
            // Loop through each checked checkbox
            \$('.bulk_chkbox:checked').each(async function() {
                
                var workerLogId = \$(this).data('item-id');
                console.log(workerLogId)
                console.log(selectedAction)
                const selectedWorkerId = \$('#workerIdParams').data('worker-id');

                if (selectedAction == '1') {
                    // Call straight time function
                    var straight_time = await apiCall('PATCH', 'api/straight_time/' + workerLogId, []);
                    if (straight_time) {
                        //getWorkerLogs(selectedWorkerId);
                    } else {
                        console.error('Failed to apply straight time. Status:', straight_time.status);
                    }
                } else if (selectedAction == '2') {
                    // Call approve OT function
                    var approve_overtime = await apiCall('PATCH', 'api/worker-overtime/approve/' + workerLogId, []);
                    if (approve_overtime) {
                        //getWorkerLogs(selectedWorkerId);
                    } else {
                        console.error('Failed to approve overtime. Status:', approve_overtime.status);
                    }
                } else if (selectedAction == '3') {
                    // Call deny OT function
                    var deny_overtime = await apiCall('PATCH', 'api/worker-overtime/deny/' + workerLogId, []);
                    if (deny_overtime) {
                        //getWorkerLogs(selectedWorkerId);
                    } else {
                        console.error('Failed to deny overtime. Status:', deny_overtime.status);
                    }
                }
            });
            var emp_projects = await apiCall('POST', 'api/employee-projects-list/' + selectedWorkerId, jsonObject); 
            populateEmpAssignmentsTable(emp_projects.employee_projects);
            getWorkerLogs(selectedWorkerId)
        });

        //adjust rendered hour when checkbox is clicked
        async function getLatestLogTime() {
            const selectedWorkerId = \$('#workerIdParams').data('worker-id');
            try {
                const apiUrl = `api/workerlogs/get-latest-time/\${selectedWorkerId}`;            
                const response = await apiCall('GET', apiUrl,'');
                
                console.log('Task Adjusted:', response.latest_time);
                \$('#latest_update').text('');
                \$('#latest_update').text('Last updated: '+response.latest_time);
                //getWorkerLogs(selectedWorkerId);
            } catch (error) {
                console.error('Error adjusting task:', error);
                // Optionally handle error scenario
            }
        }

        \$(document).on('click', '.add-task', async function() {
            var workerLogId = \$(this).data('edit');
            // console.log(workerLogId);
            var selectedDate = \$(this).data('date')
            console.log('selected date' + selectedDate)
            // console.log('API Call Response:', deny_overtime.status);
            const modalAddTask = \$('#addEmpTask')
            if (modalAddTask) {
               \$('#task_date').val(selectedDate); 
            }
        });

        \$('form').on('submit', async function(event) {
            event.preventDefault(); // Prevent the default form submission
            
            var \$form = \$(this);
            var formData = \$form.serialize(); // Serialize form data
            
            \$.ajax({
                type: 'POST',
                url: \$form.attr('action'), // URL to send the data to
                data: formData, // Form data
                success: async function(response) {
                    // Handle success (e.g., show a success message or update the UI)
                    console.log('Form submitted successfully');
                    // Optionally close the modal
                    \$('[data-modal-close=\"addEmpTask\"]').click(); 
                    // You might also want to update the UI or redirect
                    // For example, you can manually redirect if needed
                    var emp_projects = await apiCall('POST', 'api/employee-projects-list/' + selectedWorkerId, jsonObject); 
                    populateEmpAssignmentsTable(emp_projects.employee_projects);
                },
                error: function(xhr, status, error) {
                    // Handle error (e.g., show an error message)
                    console.error('Form submission failed:', error);
                }
            });
        });

        // Attach click event handler to the clickable project name        
        getWorkerLogs(selectedWorkerId); //Initialize worker logs on page load
        getLatestLogTime();

        /* Toggle Man Days / Computed Rendered Hours */
        \$('.toggle-widget').click(function() {
            let \$manDays = \$('#man-days-container');
            let \$manHours = \$('#man-hours-container');

            if (\$manDays.hasClass('hidden')) {
                \$manDays.removeClass('hidden');
            } else {
                \$manDays.addClass('hidden');
            }

            if (\$manHours.hasClass('hidden')) {
                \$manHours.removeClass('hidden');
            } else {
                \$manHours.addClass('hidden');
            }
        });
        /* Toggle Man Days / Computed Rendered Hours End */
        
        function refreshCallBack() {
            //console.log('refresh')
            var dropdownElem = document.querySelectorAll('.dropdown');
            var dropupElem = document.querySelectorAll('.dropup');
            var dropStartElem = document.querySelectorAll('.dropstart');
            var dropendElem = document.querySelectorAll('.dropend');
            var isShowDropMenu = false;
            var isMenuInside = false;
            // dropdown event
            dropdownEvent(dropdownElem, 'bottom-start');
            // dropup event
            dropdownEvent(dropupElem, 'top-start');
            // dropstart event
            dropdownEvent(dropStartElem, 'left-start');
            // dropend event
            dropdownEvent(dropendElem, 'right-start');

            function dropdownEvent(elem, place) {
                Array.from(elem).forEach(function (item) {
                    item.querySelectorAll(\".dropdown-toggle\").forEach(function (subitem) {
                        subitem.addEventListener(\"click\", function (event) {
                            subitem.classList.toggle(\"show\");
                            var popper = Popper.createPopper(subitem, item.querySelector(\".dropdown-menu\"), {
                                placement: place
                            });

                            if (subitem.classList.contains(\"show\") != true) {
                                item.querySelector(\".dropdown-menu\").classList.remove(\"block\")
                                item.querySelector(\".dropdown-menu\").classList.add(\"hidden\")
                            } else {
                                dismissDropdownMenu()
                                item.querySelector(\".dropdown-menu\").classList.add(\"block\")
                                item.querySelector(\".dropdown-menu\").classList.remove(\"hidden\")
                                if (item.querySelector(\".dropdown-menu\").classList.contains(\"block\")) {
                                    subitem.classList.add(\"show\")
                                } else {
                                    subitem.classList.remove(\"show\")
                                }
                                event.stopPropagation();
                            }

                            isMenuInside = false;
                        });
                    });
                });
            }

            function dismissDropdownMenu() {
                Array.from(document.querySelectorAll(\".dropdown-menu\")).forEach(function (item) {
                    item.classList.remove(\"block\")
                    item.classList.add(\"hidden\")
                });
                Array.from(document.querySelectorAll(\".dropdown-toggle\")).forEach(function (item) {
                    item.classList.remove(\"show\")
                });
                isShowDropMenu = false;
            }

            // dropdown form
            Array.from(document.querySelectorAll(\".dropdown-menu\")).forEach(function (item) {
                if (item.querySelectorAll(\"form\")) {
                    Array.from(item.querySelectorAll(\"form\")).forEach(function (subitem) {
                        subitem.addEventListener(\"click\", function (event) {
                            if (!isShowDropMenu) {
                                isShowDropMenu = true;
                            }
                        })
                    });
                }
            });

            // data-tw-auto-close
            Array.from(document.querySelectorAll(\".dropdown-toggle\")).forEach(function (item) {
                var elem = item.parentElement
                if (item.getAttribute('data-tw-auto-close') == 'outside') {
                    elem.querySelector(\".dropdown-menu\").addEventListener(\"click\", function () {
                        if (!isShowDropMenu) {
                            isShowDropMenu = true;
                        }
                    });
                } else if (item.getAttribute('data-tw-auto-close') == 'inside') {
                    item.addEventListener(\"click\", function () {
                        isShowDropMenu = true;
                        isMenuInside = true;
                    });
                    elem.querySelector(\".dropdown-menu\").addEventListener(\"click\", function () {
                        isShowDropMenu = false;
                        isMenuInside = false;
                    });
                }
            });

            window.addEventListener('click', function (e) {
                if (!isShowDropMenu && !isMenuInside) {
                    if (!e.target.closest('.dropdown-menu')) {
                        dismissDropdownMenu();
                    }
                }
                isShowDropMenu = false;
            });

            const allDrawerButtons = document.querySelectorAll('[data-drawer-target]');
            const allDrawerCloseButtons = document.querySelectorAll('[data-drawer-close]');
            const allModalButtons = document.querySelectorAll('[data-modal-target]');
            const allModalCloseButtons = document.querySelectorAll('[data-modal-close]');
            const bodyElement = document.body;       
            
            let openDrawerId = null;
            let openModalId = null;
            if(document.getElementById(\"backDropDiv\")) {
                var backDropOverlay = document.getElementById(\"backDropDiv\");
            } else {
                var backDropOverlay = document.createElement('div');
                backDropOverlay.className = 'fixed inset-0 bg-slate-900/40 dark:bg-zink-800/70 z-[1049] backdrop-overlay hidden';
                backDropOverlay.id = 'backDropDiv';
            }
            if (allModalButtons.length > 0 || allDrawerButtons.length > 0)
                document.body.appendChild(backDropOverlay);

            // Function to toggle the state of drawers and modals
            function toggleElementState(elementId, show, delay) {
                const element = document.getElementById(elementId);
                if (element) {
                    if (!show) {
                        element.classList.add('show');
                        backDropOverlay.classList.add('hidden');
                        setTimeout(() => {
                            element.classList.add(\"hidden\");
                        }, 350);
                    } else {
                        element.classList.remove(\"hidden\");
                        setTimeout(() => {
                            element.classList.remove('show');
                            backDropOverlay.classList.remove('hidden');
                        }, delay);
                    }
                    bodyElement.classList.toggle('overflow-hidden', show);
                    if (show) {
                        openDrawerId = elementId;
                        openModalId = elementId;
                    } else {
                        openDrawerId = null;
                        openModalId = null;
                    }
                }
            }

            // Attach click event listeners to drawer buttons
            allDrawerButtons.forEach(element => {
                const drawerId = element.getAttribute('data-drawer-target');
                if (drawerId) {
                    element.addEventListener('click', function () {
                        toggleElementState(drawerId, true, 0);
                    });
                }
            });

            // Attach click event listeners to drawer close buttons
            allDrawerCloseButtons.forEach(element => {
                const drawerId = element.getAttribute('data-drawer-close');
                if (drawerId) {
                    element.addEventListener('click', function () {
                        toggleElementState(drawerId, false, 0);
                    });
                }
            });

            // Attach click event listeners to modal buttons
            allModalButtons.forEach(element => {
                const modalId = element.getAttribute('data-modal-target');
                if (modalId) {
                    element.addEventListener('click', function () {
                        toggleElementState(modalId, true, 200);
                    });
                }
            });

            // Attach click event listeners to modal close buttons
            allModalCloseButtons.forEach(element => {
                const modalId = element.getAttribute('data-modal-close');
                if (modalId) {
                    element.addEventListener('click', function () {
                        toggleElementState(modalId, false, 200);
                    });
                }
            });

            // Attach click event listener to backdrop-overlay
            backDropOverlay?.addEventListener('click', function () {
                if (openDrawerId) {
                    toggleElementState(openDrawerId, false, 0);
                }
                if (openModalId) {
                    toggleElementState(openModalId, false, 200);
                }
            });
        }
    });


    
</script>

{# table pagination #}
<script>
var options = {
    valueNames: [
        'date',
        'check_in',
        'check_out',
        'work_hours',
    ],
    page: 10,
    pagination: true,
    plugins: [
        ListPagination({
            left: 2,
            right: 2,
        }),
    ],
};

var employeeTable = new List(\"manpowerTable\", options).on(\"updated\", function (list) {
    // noresult show or hidden
   // console.log('here')
    if (document.getElementsByClassName(\"noresult\") && document.getElementsByClassName(\"noresult\")[0]) {
        list.matchingItems.length == 0 ?
            (document.getElementsByClassName(\"noresult\")[0].style.display = \"block\") :
            (document.getElementsByClassName(\"noresult\")[0].style.display = \"none\");

        if (list.matchingItems.length > 0) {
            document.getElementsByClassName(\"noresult\")[0].style.display = \"none\";
        } else {
            document.getElementsByClassName(\"noresult\")[0].style.display = \"block\";
        }
    }

    // length get of list
    var isFirst = list.i == 1;
    var isLast = list.i > list.matchingItems.length - list.page;

    // make the Prev and Nex buttons disabled on first and last pages accordingly
    document.querySelector(\".pagination-prev.disabled\") ?
        document.querySelector(\".pagination-prev.disabled\").classList.remove(\"disabled\") : \"\";
    document.querySelector(\".pagination-next.disabled\") ?
        document.querySelector(\".pagination-next.disabled\").classList.remove(\"disabled\") : \"\";
    // pagination code
    if (isFirst) {
        document.querySelector(\".pagination-prev\").classList.add(\"disabled\");
    }
    if (isLast) {
        document.querySelector(\".pagination-next\").classList.add(\"disabled\");
    }
    // show total numbers of records
    const totalEmploysElement = document.querySelector(\".total-Employs\");
    const totalRecordsElement = employeeTable.listContainer.querySelector(\".total-records\");
    const showingElement = employeeTable.listContainer.querySelector(\".showing\");

    if (totalEmploysElement) totalEmploysElement.innerHTML = employeeTable.items.length;
    if (totalRecordsElement) totalRecordsElement.innerHTML = employeeTable.items.length;

    if (showingElement) showingElement.innerHTML = employeeTable.visibleItems.length;
    document.querySelector(\".pagination-next\").addEventListener(\"click\", function () {
        document.querySelector(\".pagination.listjs-pagination\") ?
            document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\") && document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\").nextElementSibling != null ?
                document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\").nextElementSibling.children[0].click() : \"\" : \"\";
    });

    document.querySelector(\".pagination-prev\").addEventListener(\"click\", function () {
        document.querySelector(\".pagination.listjs-pagination\") ?
            document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\") && document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\").previousSibling != null ?
                document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\").previousSibling.children[0].click() : \"\" : \"\";
    });
    // end pagination code

    //lode js in package
    lucide.createIcons();
    
    //collapseComponent();
    
});

var options2 = {
    valueNames: [
        'project',
        'total_assigned_hours',
    ],
    page: 10,
    pagination: true,
    plugins: [
        ListPagination({
            left: 2,
            right: 2,
        }),
    ],
};

var projectTable = new List(\"empAssignments\", options2).on(\"updated\", function (list) {
    // noresult show or hidden
   // console.log('here')
    if (document.getElementsByClassName(\"noresult2\") && document.getElementsByClassName(\"noresult2\")[0]) {
        list.matchingItems.length == 0 ?
            (document.getElementsByClassName(\"noresult2\")[0].style.display = \"block\") :
            (document.getElementsByClassName(\"noresult2\")[0].style.display = \"none\");

        if (list.matchingItems.length > 0) {
            document.getElementsByClassName(\"noresult2\")[0].style.display = \"none\";
        } else {
            document.getElementsByClassName(\"noresult2\")[0].style.display = \"block\";
        }
    }

    // length get of list
    var isFirst = list.i == 1;
    var isLast = list.i > list.matchingItems.length - list.page;

    // make the Prev and Nex buttons disabled on first and last pages accordingly
    document.querySelector(\".pagination-prev.disabled\") ?
        document.querySelector(\".pagination-prev.disabled\").classList.remove(\"disabled\") : \"\";
    document.querySelector(\".pagination-next.disabled\") ?
        document.querySelector(\".pagination-next.disabled\").classList.remove(\"disabled\") : \"\";
    // pagination code
    if (isFirst) {
        document.querySelector(\".pagination-prev\").classList.add(\"disabled\");
    }
    if (isLast) {
        document.querySelector(\".pagination-next\").classList.add(\"disabled\");
    }
    // show total numbers of records
    const totalEmploysElement = document.querySelector(\".total-Employs\");
    const totalRecordsElement = projectTable.listContainer.querySelector(\".total-records\");
    const showingElement = projectTable.listContainer.querySelector(\".showing\");

    if (totalEmploysElement) totalEmploysElement.innerHTML = projectTable.items.length;
    if (totalRecordsElement) totalRecordsElement.innerHTML = projectTable.items.length;

    if (showingElement) showingElement.innerHTML = projectTable.visibleItems.length;
    document.querySelector(\".pagination-next\").addEventListener(\"click\", function () {
        document.querySelector(\".pagination.listjs-pagination2\") ?
            document.querySelector(\".pagination.listjs-pagination2\").querySelector(\".active\") && document.querySelector(\".pagination.listjs-pagination2\").querySelector(\".active\").nextElementSibling != null ?
                document.querySelector(\".pagination.listjs-pagination2\").querySelector(\".active\").nextElementSibling.children[0].click() : \"\" : \"\";
    });

    document.querySelector(\".pagination-prev\").addEventListener(\"click\", function () {
        document.querySelector(\".pagination.listjs-pagination2\") ?
            document.querySelector(\".pagination.listjs-pagination2\").querySelector(\".active\") && document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\").previousSibling != null ?
                document.querySelector(\".pagination.listjs-pagination2\").querySelector(\".active\").previousSibling.children[0].click() : \"\" : \"\";
    });
    // end pagination code

    //lode js in package
    lucide.createIcons();
    
    //collapseComponent();
    //refreshCallbacks();
});
</script>
{% endblock %}", "manpower/apps-manpower.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\manpower\\apps-manpower.html.twig");
    }
}
