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

/* payroll/apps-hr-payroll-employee.html.twig */
class __TwigTemplate_32918b4ac29808912f5922072c627adb extends Template
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
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payroll/apps-hr-payroll-employee.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "payroll/apps-hr-payroll-employee.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Payroll";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        yield "
            ";
        // line 6
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Payroll Administration", "title" => "Payroll"]);
        yield "

                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"grid grid-cols-1 gap-5 2xl:grid-cols-12\">
                            <div class=\"2xl:col-span-5\">
                                <h5 class=\"mb-1\">₱";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($__internal_compile_0 = ($context["salary_totals"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["total_pay_per_year"] ?? null) : null), 2, ".", ","), "html", null, true);
        yield "<small class=\"font-normal text-slate-500 dark:text-zink-200\">/ year</small></h5>
                                <p class=\"text-slate-500 dark:text-zink-200\">Excluding mandatories and other deductions</p>
                                ";
        // line 22
        yield "                                <p>The salary for all employees is ₱";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($__internal_compile_1 = ($context["salary_totals"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["total_pay_per_year"] ?? null) : null), 2, ".", ","), "html", null, true);
        yield " per year.</p>
                            </div><!--end col-->
                            <div class=\"2xl:col-span-5 2xl:col-start-8\">
                                <div class=\"overflow-x-auto\">
                                    <table class=\"w-full\">
                                        <tbody>
                                            <tr>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent\">Overall Basic Salary per Month</td>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent font-semibold\">₱";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($__internal_compile_2 = ($context["salary_totals"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["total_basic_salary_per_month"] ?? null) : null), 2, ".", ","), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent\">Overall Tax Shield per Month</td>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent font-semibold\">₱";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($__internal_compile_3 = ($context["salary_totals"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["total_taxshield_per_month"] ?? null) : null), 2, ".", ","), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent\">Overall Basic Salary per Year</td>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent font-semibold\">₱";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($__internal_compile_4 = ($context["salary_totals"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["total_basic_salary_per_year"] ?? null) : null), 2, ".", ","), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent\">Overall Tax Shield per Year</td>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent font-semibold\">₱";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($__internal_compile_5 = ($context["salary_totals"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["total_taxshield_per_year"] ?? null) : null), 2, ".", ","), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent\">Total Pay</td>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent font-semibold\">₱";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($__internal_compile_6 = ($context["salary_totals"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["total_pay_per_year"] ?? null) : null), 2, ".", ","), "html", null, true);
        yield "</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end col-->
                        </div><!--end grid-->
                    </div>
                </div><!--end card-->
                ";
        // line 56
        yield "                <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_employee_payroll");
        yield "\" method=\"post\">
                <div class=\"card\" id=\"employeeTable\">
                    <div class=\"card-body\">
                        <div class=\"grid grid-cols-1 gap-4 mb-5 lg:grid-cols-12 xl:grid-cols-12\">
                            ";
        // line 66
        yield "                            
                                <div class=\"lg:col-span-3 xl:col-span-2\">
                                    <select id=\"yearPicker\" name=\"yearPicker\" data-selected-year=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedYear"] ?? null), "html", null, true);
        yield "\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                        <!-- Add more options as needed -->
                                    </select>
                                </div><!--end col-->
                                <div class=\"relative\">
                                    <button href=\"#!\" id=\"searchButton\" type=\"submit\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 add-employee\"><span class=\"align-middle\">Search</span></button>
                                </div><!--end col-->
                            </form>
                            <div class=\"lg:col-start-10 lg:col-span-3 xl:col-span-2 xl:col-start-11\">
                                <div class=\"lg:ltr:text-right lg:rtl:text-left\">
                                    ";
        // line 79
        yield "                                    <button data-modal-target=\"generatePayroll\" type=\"button\" class=\"add-philhealth_config text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Generate Payroll</button>
                                </div>
                            </div>
                        </div><!--col grid-->
                        <div class=\"-mx-5 overflow-x-auto\">
                            <table class=\"w-full whitespace-nowrap\">
                                <thead class=\"ltr:text-left rtl:text-right\">
                                    <tr class=\"bg-slate-100 dark:bg-zink-600\">
                                        ";
        // line 92
        yield "                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Payroll Date Range</th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Remarks</th>
                                        ";
        // line 95
        yield "                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["payroll_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payroll_group"]) {
            // line 99
            yield "                                        <tr onclick=\"collapseComponentV2('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_group"], "id", [], "any", false, false, false, 99), "html", null, true);
            yield "')\">
                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 collapsible-header";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_group"], "id", [], "any", false, false, false, 100), "html", null, true);
            yield " group/item show\">
                                                <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                                <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                                ";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_group"], "date_start", [], "any", false, false, false, 103), "Y-m-d"), "html", null, true);
            yield " to ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_group"], "date_end", [], "any", false, false, false, 103), "Y-m-d"), "html", null, true);
            yield "
                                            </td>
                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_group"], "remarks", [], "any", false, false, false, 106), "html", null, true);
            yield "
                                            </td>
                                        </tr>
                                        <tr class=\"collapsible-content";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_group"], "id", [], "any", false, false, false, 109), "html", null, true);
            yield " hidden\">
                                            <td colspan=\"2\">
                                                <table class=\"w-full mx-5 mb-5\">
                                                    <thead class=\"ltr:text-left rtl:text-right\">
                                                        <tr>
                                                            <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Employee Code</th>
                                                            <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Name</th>
                                                            <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Basic Salary</th>
                                                            <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Overtime Salary</th>
                                                            <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Total Salary</th>
                                                            <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Total Deduction</th>
                                                            <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Net Salary</th>
                                                            <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Status</th>
                                                            <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_group"], "emp_payrolls", [], "any", false, false, false, 126));
            foreach ($context['_seq'] as $context["_key"] => $context["emp_payroll"]) {
                // line 127
                yield "                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    <a href=\"";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_profile", ["employee_code" => CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "emp_code", [], "any", false, false, false, 128)]), "html", null, true);
                yield "\" class=\"transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600\">
                                                                        ";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "emp_code", [], "any", true, true, false, 129)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "emp_code", [], "any", false, false, false, 129), "N/A")) : ("N/A")), "html", null, true);
                yield "
                                                                    </a>
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    ";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "emp_name", [], "any", false, false, false, 133), "html", null, true);
                yield "
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    ₱";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "basic_salary", [], "any", true, true, false, 136)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "basic_salary", [], "any", false, false, false, 136), "0.00")) : ("0.00")), 2, ".", ","), "html", null, true);
                yield "
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    ₱";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "overtime_salary", [], "any", true, true, false, 139)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "overtime_salary", [], "any", false, false, false, 139), "0.00")) : ("0.00")), 2, ".", ","), "html", null, true);
                yield "
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    ₱";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "total_salary", [], "any", true, true, false, 142)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "total_salary", [], "any", false, false, false, 142), "0.00")) : ("0.00")), 2, ".", ","), "html", null, true);
                yield "
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    ₱";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "total_deduction", [], "any", true, true, false, 145)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "total_deduction", [], "any", false, false, false, 145), "0.00")) : ("0.00")), 2, ".", ","), "html", null, true);
                yield "
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    ₱";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "net_salary", [], "any", true, true, false, 148)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "net_salary", [], "any", false, false, false, 148), "0.00")) : ("0.00")), 2, ".", ","), "html", null, true);
                yield "
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    Pending
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 flex items-center gap-2\">
                                                                    ";
                // line 155
                yield "                                                                    <form action=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_payslip");
                yield "\" method=\"POST\" target=\"_blank\">
                                                                        <input type=\"hidden\" name=\"payroll_id\" value=\"";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 156), "html", null, true);
                yield "\">
                                                                        <button type=\"submit\" class=\"add-payroll px-2 py-1.5 text-xs text-white btn bg-sky-500 border-sky-500 hover:text-white hover:bg-sky-600 focus:text-white focus:bg-sky-600 focus:ring focus:ring-sky-100 active:text-white active:bg-sky-600 active:border-sky-600 active:ring active:ring-sky-100 dark:ring-sky-400/20\">
                                                                            <i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> 
                                                                            <span class=\"align-middle\">Generate Payslip</span>
                                                                        </button>
                                                                    </form>
                                                                    <div class=\"relative dropdown\">
                                                                        <button type=\"button\" id=\"employeeAction";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 163), "html", null, true);
                yield "\" data-bs-toggle=\"dropdown\" class=\"flex action-payroll items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                        <ul class=\"absolute z-50 py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"employeeAction";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 164), "html", null, true);
                yield "\">
                                                                            <li>
                                                                                <a data-modal-target=\"updateSalaryAdjustment";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 166), "html", null, true);
                yield "\" class=\"block edit-payroll block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\"><i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Salary Adjustment</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp_payroll'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            yield "                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr> 
                                         
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payroll_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "                                </tbody>
                            </table>
                        </div>
                        ";
        // line 213
        yield "                    </div>
                </div>

";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["payroll_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payroll_group"]) {
            // line 218
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_group"], "emp_payrolls", [], "any", false, false, false, 218));
            foreach ($context['_seq'] as $context["_key"] => $context["emp_payroll"]) {
                // line 219
                yield "        <div id=\"updateSalaryAdjustment";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 219), "html", null, true);
                yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
            <div class=\"w-screen lg:w-[75rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                    <h5 class=\"text-16\">Update Salary Adjustment</h5>
                    <button data-modal-close=\"updateSalaryAdjustment";
                // line 223
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 223), "html", null, true);
                yield "\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                </div>
                <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                    <form action=\"";
                // line 226
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_salary_adjustment");
                yield "\" method=\"POST\">
                        <input type=\"hidden\" id=\"employee_id";
                // line 227
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 227), "html", null, true);
                yield "\" name=\"employee_id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "emp_id", [], "any", false, false, false, 227), "html", null, true);
                yield "\">
                        <input type=\"hidden\" id=\"employee_code\" name=\"employee_code\" value=\"";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "emp_code", [], "any", false, false, false, 228), "html", null, true);
                yield "\">
                        <input type=\"hidden\" id=\"payroll_id";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 229), "html", null, true);
                yield "\" name=\"payroll_id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 229), "html", null, true);
                yield "\">

                        <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                            <div class=\"xl:col-span-6 h-[calc(100vh_-_320px)] max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto\">
                                <div class=\"mb-3\">
                                    <label for=\"\" class=\"inline-block mb-2 text-base font-medium\">Salary Adjustment ";
                // line 234
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 234), "html", null, true);
                yield "</label>
                                </div>
                                <!-- Salary Adjustment Inputs -->
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_regular_ndot_hours\" class=\"inline-block mb-2 text-base font-medium\">Regular NDOT Hours</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI(";
                // line 239
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 239), "html", null, true);
                yield ")\" name=\"sal_adj_regular_ndot_hours\" id=\"sal_adj_regular_ndot_hours";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 239), "html", null, true);
                yield "\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_regular_ndot_pay\" class=\"inline-block mb-2 text-base font-medium\">Regular NDOT Pay</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI(";
                // line 243
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 243), "html", null, true);
                yield ")\" name=\"sal_adj_regular_ndot_pay\" id=\"sal_adj_regular_ndot_pay";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 243), "html", null, true);
                yield "\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_ot_meal_subsidy_days\" class=\"inline-block mb-2 text-base font-medium\">OT Meal Subsidy (Days/8pm Onwards)</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI(";
                // line 247
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 247), "html", null, true);
                yield ")\" name=\"sal_adj_ot_meal_subsidy_days\" id=\"sal_adj_ot_meal_subsidy_days";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 247), "html", null, true);
                yield "\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_ot_meal_subsidy_amount\" class=\"inline-block mb-2 text-base font-medium\">OT Meal Subsidy Amount</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI(";
                // line 251
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 251), "html", null, true);
                yield ")\" name=\"sal_adj_ot_meal_subsidy_amount\" id=\"sal_adj_ot_meal_subsidy_amount";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 251), "html", null, true);
                yield "\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>

                                <!-- New Inputs for Remaining Columns -->
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_4hrs_more_weekend_holiday\" class=\"inline-block mb-2 text-base font-medium\">4 HRS or MORE during SAT./SUN./LEG. HOL.</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI(";
                // line 257
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 257), "html", null, true);
                yield ")\" name=\"sal_adj_4hrs_more_weekend_holiday\" id=\"sal_adj_4hrs_more_weekend_holiday";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 257), "html", null, true);
                yield "\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_amount\" class=\"inline-block mb-2 text-base font-medium\">Amount</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI(";
                // line 261
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 261), "html", null, true);
                yield ")\" name=\"sal_adj_amount\" id=\"sal_adj_amount";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 261), "html", null, true);
                yield "\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_temp_allowance\" class=\"inline-block mb-2 text-base font-medium\">Temporary Allowance Amount</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI(";
                // line 265
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 265), "html", null, true);
                yield ")\" name=\"sal_adj_temp_allowance\" id=\"sal_adj_temp_allowance";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 265), "html", null, true);
                yield "\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_wellness\" class=\"inline-block mb-2 text-base font-medium\">Wellness</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI(";
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 269), "html", null, true);
                yield ")\" name=\"sal_adj_wellness\" id=\"sal_adj_wellness";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 269), "html", null, true);
                yield "\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_amount\" class=\"inline-block mb-2 text-base font-medium\">Salary Adjustment</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI(";
                // line 273
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 273), "html", null, true);
                yield ")\" name=\"sal_adj_amount\" id=\"sal_adj_amount";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 273), "html", null, true);
                yield "\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_total_nontax_salary\" class=\"inline-block mb-2 text-base font-medium\">Total Non-Taxable Salary Adjustment</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI(";
                // line 277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 277), "html", null, true);
                yield ")\" name=\"sal_adj_total_nontax_salary\" id=\"sal_adj_total_nontax_salary";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 277), "html", null, true);
                yield "\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_total_tax_salary\" class=\"inline-block mb-2 text-base font-medium\">Total Taxable Salary Adjustment</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI(";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 281), "html", null, true);
                yield ")\" name=\"sal_adj_total_tax_salary\" id=\"sal_adj_total_tax_salary";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 281), "html", null, true);
                yield "\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_total_salary\" class=\"inline-block mb-2 text-base font-medium\">Total Salary Adjustment</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI(";
                // line 285
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 285), "html", null, true);
                yield ")\" name=\"sal_adj_total_salary\" id=\"sal_adj_total_salary";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 285), "html", null, true);
                yield "\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                            </div>
                            <div class=\"xl:col-span-6\">
                                <div class=\"\">
                                    <label for=\"\" class=\"inline-block mb-2 text-base font-medium\">Previous</label>
                                </div>
                                <div class=\"border-dashed border-2 border-black-500 rounded-md p-5\">
                                    <!-- Salary Adjustment Inputs -->
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"comp_sal_adj_regular_ndot_hours_prev\" class=\"inline-block mb-2 text-base font-bold\">Previous Total Salary</label>
                                        <span id=\"comp_sal_adj_regular_ndot_hours_prev\" class=\"inline-block mb-2 text-base font-medium\">₱ ";
                // line 296
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "total_salary", [], "any", true, true, false, 296)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "total_salary", [], "any", false, false, false, 296), "0.00")) : ("0.00")), 2, ".", ","), "html", null, true);
                yield "</span>
                                    </div>
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"sal_adj_regular_ndot_pay_prev\" class=\"inline-block mb-2 text-base font-bold\">Previous Total Deductions</label>
                                        <span id=\"comp_sal_adj_regular_ndot_pay_prev\" class=\"inline-block mb-2 text-base font-medium\">₱ ";
                // line 300
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "total_deduction", [], "any", true, true, false, 300)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "total_deduction", [], "any", false, false, false, 300), "0.00")) : ("0.00")), 2, ".", ","), "html", null, true);
                yield "</span>
                                    </div>
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"sal_adj_ot_meal_subsidy_days_prev\" class=\"inline-block mb-2 text-base font-bold\">Previous Net Salary</label>
                                        <span id=\"comp_sal_adj_ot_meal_subsidy_days_prev\" class=\"inline-block mb-2 text-base font-medium\">₱ ";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "net_salary", [], "any", true, true, false, 304)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "net_salary", [], "any", false, false, false, 304), "0.00")) : ("0.00")), 2, ".", ","), "html", null, true);
                yield "</span>
                                    </div>
                                </div>
                                <div class=\"mt-5\">
                                    <label for=\"\" class=\"inline-block mb-2 text-base font-medium\">Updated</label>
                                </div>
                                <div class=\"border-dashed border-2 border-black-500 rounded-md p-5\">
                                    <!-- New Inputs for Remaining Columns -->
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"comp_sal_adj_regular_ndot_hours_preview";
                // line 313
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 313), "html", null, true);
                yield "\" class=\"inline-block mb-2 text-base font-bold\">Updated Total Salary</label>
                                        <span id=\"comp_sal_adj_regular_ndot_hours_preview";
                // line 314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 314), "html", null, true);
                yield "\" class=\"inline-block mb-2 text-base font-medium\">₱ 0</span>
                                    </div>
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"comp_sal_adj_regular_ndot_pay_preview";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 317), "html", null, true);
                yield "\" class=\"inline-block mb-2 text-base font-bold\">Updated Total Deductions</label>
                                        <span id=\"comp_sal_adj_regular_ndot_pay_preview";
                // line 318
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 318), "html", null, true);
                yield "\" class=\"inline-block mb-2 text-base font-medium\">₱ 0</span>
                                    </div>
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"comp_sal_adj_ot_meal_subsidy_days_preview";
                // line 321
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 321), "html", null, true);
                yield "\" class=\"inline-block mb-2 text-base font-bold\">Updated Net Salary</label>
                                        <span id=\"comp_sal_adj_ot_meal_subsidy_days_preview";
                // line 322
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 322), "html", null, true);
                yield "\" class=\"inline-block mb-2 text-base font-medium\">₱ 0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class=\"flex justify-end gap-2 mt-4\">
                            <button type=\"reset\" id=\"close-modal\" data-modal-close=\"updateSalaryAdjustment";
                // line 330
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_payroll"], "id", [], "any", false, false, false, 330), "html", null, true);
                yield "\" class=\"text-red-500 bg-white btn\">Cancel</button>
                            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp_payroll'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payroll_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        yield "


<div id=\"generatePayroll\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\">Generate Payroll</h5>
            <button data-modal-close=\"generatePayroll\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 349
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_all_employees_payroll");
        yield "\" method=\"POST\">
                ";
        // line 354
        yield "                
                <!-- Date input -->
                <div class=\"mb-3\">
                    <label for=\"payroll_date_range\" class=\"inline-block mb-2 text-base font-medium\">Date</label>
                    <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\" id=\"worker_log_date\" required>
                </div>
                
                <!-- Set Salary Adjustment toggle -->
                ";
        // line 369
        yield "
                <!-- Salary Adjustment Inputs -->
                ";
        // line 387
        yield "
                <!-- New Inputs for Remaining Columns -->
                ";
        // line 421
        yield "
                <!-- Submit Button -->
                <div class=\"mt-6\">
                    <button type=\"submit\" class=\"btn bg-custom-500 text-white hover:bg-custom-600 w-full\">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 433
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 434
        yield "
<!-- App js -->
<script src=\"";
        // line 436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 438
        yield "<script>
    \$(document).ready(function() {
        var startYear = 2015;
        var selectedYear = \$('#yearPicker').data('selected-year'); // Get the selected year from the data attribute

        for (var i = new Date().getFullYear(); i >= startYear; i--) {
            var option = \$('<option />').val(i).html(i);
            if (i == selectedYear) {
                option.prop('selected', true); // Set the option as selected if it matches the data-selected-year
            }
            \$('#yearPicker').append(option);
        }

        // Handle input event on number inputs
        \$(document).on('input', 'input[type=\"number\"]', function() {
            // Get current value
            let value = \$(this).val();
            
            // If value contains negative sign, remove it
            if (value.includes('-')) {
            value = value.replace(/-/g, '');
            \$(this).val(value);
            }
        });
        
        // Prevent typing the minus key
        \$(document).on('keydown', 'input[type=\"number\"]', function(e) {
            if (e.keyCode === 189 || e.key === '-') {
            e.preventDefault();
            return false;
            }
        });
        
        // Process existing inputs on page load
        \$('input[type=\"number\"]').each(function() {
            let value = \$(this).val();
            if (value.includes('-')) {
            \$(this).val(value.replace(/-/g, ''));
            }
        });
    });

    function collapseComponentV2(\$id) {
        const collapsibleHeader = document.querySelector('.collapsible-header'+\$id);
        const collapsibleContent = document.querySelector('.collapsible-content'+\$id);
        
        collapsibleContent.classList.toggle('hidden');
        collapsibleHeader.classList.toggle('show');
    }

    // Call this function to show comparision of previous and updated Payroll
    // This doesnt affect the payroll it just computes the data but it will not update the payroll 
    async function updateSalaryAdjustmentUI(payroll_id) {
        // Retrieve values from the form using jQuery
        var employee_id = \$(\"#employee_id\"+payroll_id).val();

        var salaryAdjustmentData = {
            \"employee_id\"                        : employee_id,
            \"payroll_id\"                         : payroll_id,
            \"salary_adjustment\"                  : true,
            \"sal_adj_regular_ndot_hours\"         : \$(\"#sal_adj_regular_ndot_hours\"+payroll_id).val() || 0,
            \"sal_adj_regular_ndot_pay\"           : \$(\"#sal_adj_regular_ndot_pay\"+payroll_id).val() || 0,
            \"sal_adj_ot_meal_subsidy_days\"       : \$(\"#sal_adj_ot_meal_subsidy_days\"+payroll_id).val() || 0,
            \"sal_adj_ot_meal_subsidy_amount\"     : \$(\"#sal_adj_ot_meal_subsidy_amount\"+payroll_id).val() || 0,
            \"sal_adj_4hrs_more_weekend_holiday\"  : \$(\"#sal_adj_4hrs_more_weekend_holiday\"+payroll_id).val() || 0,
            \"sal_adj_amount\"                     : \$(\"#sal_adj_amount\"+payroll_id).val() || 0,
            \"sal_adj_temp_allowance\"             : \$(\"#sal_adj_temp_allowance\"+payroll_id).val() || 0,
            \"sal_adj_wellness\"                   : \$(\"#sal_adj_wellness\"+payroll_id).val() || 0,
            \"sal_adj_total_nontax_salary\"        : \$(\"#sal_adj_total_nontax_salary\"+payroll_id).val() || 0,
            \"sal_adj_total_tax_salary\"           : \$(\"#sal_adj_total_tax_salary\"+payroll_id).val() || 0,
            \"sal_adj_total_salary\"               : \$(\"#sal_adj_total_salary\"+payroll_id).val() || 0,
        };

        // Logging employee and payroll ID
        console.log(\"Employee ID:\", employee_id);
        console.log(\"Payroll ID:\", payroll_id);

        // Logging payload data
        console.log(\"Payload Data:\", salaryAdjustmentData);

        try {
            var payroll_preview = await apiCall('POST', 'api/view-salary-adjustment', salaryAdjustmentData);
            // Log API response
            console.log(\"API Response:\", payroll_preview);
            console.log(\"API Response:\", payroll_preview.data.total_salary);

            \$(`#comp_sal_adj_regular_ndot_hours_preview\${payroll_id}`).text(\"₱ \" + payroll_preview.data.total_salary || 0);
            \$(`#comp_sal_adj_regular_ndot_pay_preview\${payroll_id}`).text(\"₱ \" + payroll_preview.data.total_deduction || 0);
            \$(`#comp_sal_adj_ot_meal_subsidy_days_preview\${payroll_id}`).text(\"₱ \" + payroll_preview.data.net_salary || 0);

        } catch (error) {
            // Log error if the API call fails
            console.error(\"Error occurred during API call:\", error);
        }
    }

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
        return "payroll/apps-hr-payroll-employee.html.twig";
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
        return array (  671 => 438,  667 => 436,  663 => 434,  656 => 433,  638 => 421,  634 => 387,  630 => 369,  620 => 354,  616 => 349,  604 => 339,  586 => 330,  575 => 322,  571 => 321,  565 => 318,  561 => 317,  555 => 314,  551 => 313,  539 => 304,  532 => 300,  525 => 296,  509 => 285,  500 => 281,  491 => 277,  482 => 273,  473 => 269,  464 => 265,  455 => 261,  446 => 257,  435 => 251,  426 => 247,  417 => 243,  408 => 239,  400 => 234,  390 => 229,  386 => 228,  380 => 227,  376 => 226,  370 => 223,  362 => 219,  357 => 218,  353 => 217,  348 => 213,  343 => 179,  332 => 173,  319 => 166,  314 => 164,  310 => 163,  300 => 156,  295 => 155,  286 => 148,  280 => 145,  274 => 142,  268 => 139,  262 => 136,  256 => 133,  249 => 129,  245 => 128,  242 => 127,  238 => 126,  218 => 109,  212 => 106,  204 => 103,  198 => 100,  193 => 99,  189 => 98,  184 => 95,  180 => 92,  170 => 79,  157 => 68,  153 => 66,  145 => 56,  133 => 46,  126 => 42,  119 => 38,  112 => 34,  105 => 30,  93 => 22,  88 => 12,  79 => 6,  76 => 5,  69 => 4,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "payroll/apps-hr-payroll-employee.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\payroll\\apps-hr-payroll-employee.html.twig");
    }
}
