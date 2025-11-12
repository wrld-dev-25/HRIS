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
class __TwigTemplate_859acd1332705d013b62a1b3c3761bfc extends Template
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

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payroll/apps-hr-payroll-employee.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "payroll/apps-hr-payroll-employee.html.twig", 1);
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

        yield "Payroll";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salary_totals"]) || array_key_exists("salary_totals", $context) ? $context["salary_totals"] : (function () { throw new RuntimeError('Variable "salary_totals" does not exist.', 12, $this->source); })()), "total_pay_per_year", [], "array", false, false, false, 12), 2, ".", ","), "html", null, true);
        yield "<small class=\"font-normal text-slate-500 dark:text-zink-200\">/ year</small></h5>
                                <p class=\"text-slate-500 dark:text-zink-200\">Excluding mandatories and other deductions</p>
                                ";
        // line 22
        yield "                                <p>The salary for all employees is ₱";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salary_totals"]) || array_key_exists("salary_totals", $context) ? $context["salary_totals"] : (function () { throw new RuntimeError('Variable "salary_totals" does not exist.', 22, $this->source); })()), "total_pay_per_year", [], "array", false, false, false, 22), 2, ".", ","), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salary_totals"]) || array_key_exists("salary_totals", $context) ? $context["salary_totals"] : (function () { throw new RuntimeError('Variable "salary_totals" does not exist.', 30, $this->source); })()), "total_basic_salary_per_month", [], "array", false, false, false, 30), 2, ".", ","), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent\">Overall Tax Shield per Month</td>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent font-semibold\">₱";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salary_totals"]) || array_key_exists("salary_totals", $context) ? $context["salary_totals"] : (function () { throw new RuntimeError('Variable "salary_totals" does not exist.', 34, $this->source); })()), "total_taxshield_per_month", [], "array", false, false, false, 34), 2, ".", ","), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent\">Overall Basic Salary per Year</td>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent font-semibold\">₱";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salary_totals"]) || array_key_exists("salary_totals", $context) ? $context["salary_totals"] : (function () { throw new RuntimeError('Variable "salary_totals" does not exist.', 38, $this->source); })()), "total_basic_salary_per_year", [], "array", false, false, false, 38), 2, ".", ","), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent\">Overall Tax Shield per Year</td>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent font-semibold\">₱";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salary_totals"]) || array_key_exists("salary_totals", $context) ? $context["salary_totals"] : (function () { throw new RuntimeError('Variable "salary_totals" does not exist.', 42, $this->source); })()), "total_taxshield_per_year", [], "array", false, false, false, 42), 2, ".", ","), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent\">Total Pay</td>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent font-semibold\">₱";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["salary_totals"]) || array_key_exists("salary_totals", $context) ? $context["salary_totals"] : (function () { throw new RuntimeError('Variable "salary_totals" does not exist.', 46, $this->source); })()), "total_pay_per_year", [], "array", false, false, false, 46), 2, ".", ","), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedYear"]) || array_key_exists("selectedYear", $context) ? $context["selectedYear"] : (function () { throw new RuntimeError('Variable "selectedYear" does not exist.', 68, $this->source); })()), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payroll_groups"]) || array_key_exists("payroll_groups", $context) ? $context["payroll_groups"] : (function () { throw new RuntimeError('Variable "payroll_groups" does not exist.', 98, $this->source); })()));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payroll_groups"]) || array_key_exists("payroll_groups", $context) ? $context["payroll_groups"] : (function () { throw new RuntimeError('Variable "payroll_groups" does not exist.', 217, $this->source); })()));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 433
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
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
        return array (  692 => 438,  688 => 436,  684 => 434,  674 => 433,  653 => 421,  649 => 387,  645 => 369,  635 => 354,  631 => 349,  619 => 339,  601 => 330,  590 => 322,  586 => 321,  580 => 318,  576 => 317,  570 => 314,  566 => 313,  554 => 304,  547 => 300,  540 => 296,  524 => 285,  515 => 281,  506 => 277,  497 => 273,  488 => 269,  479 => 265,  470 => 261,  461 => 257,  450 => 251,  441 => 247,  432 => 243,  423 => 239,  415 => 234,  405 => 229,  401 => 228,  395 => 227,  391 => 226,  385 => 223,  377 => 219,  372 => 218,  368 => 217,  363 => 213,  358 => 179,  347 => 173,  334 => 166,  329 => 164,  325 => 163,  315 => 156,  310 => 155,  301 => 148,  295 => 145,  289 => 142,  283 => 139,  277 => 136,  271 => 133,  264 => 129,  260 => 128,  257 => 127,  253 => 126,  233 => 109,  227 => 106,  219 => 103,  213 => 100,  208 => 99,  204 => 98,  199 => 95,  195 => 92,  185 => 79,  172 => 68,  168 => 66,  160 => 56,  148 => 46,  141 => 42,  134 => 38,  127 => 34,  120 => 30,  108 => 22,  103 => 12,  94 => 6,  91 => 5,  81 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Payroll{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Payroll Administration', title: 'Payroll' }) }}

                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"grid grid-cols-1 gap-5 2xl:grid-cols-12\">
                            <div class=\"2xl:col-span-5\">
                                <h5 class=\"mb-1\">₱{{salary_totals['total_pay_per_year']|number_format(2, '.', ',')}}<small class=\"font-normal text-slate-500 dark:text-zink-200\">/ year</small></h5>
                                <p class=\"text-slate-500 dark:text-zink-200\">Excluding mandatories and other deductions</p>
                                {# <div class=\"mt-6 mb-4\">
                                    <div class=\"flex w-full h-10 rounded-md bg-slate-200 dark:bg-zink-600\">
                                        <div class=\"flex items-center justify-center h-10 text-white bg-custom-500 ltr:last:rounded-r-md rtl:last:rounded-l-md ltr:first:rounded-l-md rtl:first:rounded-r-md\" style=\"width: 20%\">20%</div>
                                        <div class=\"flex items-center justify-center h-10 text-white bg-green-500 ltr:last:rounded-r-md rtl:last:rounded-l-md ltr:first:rounded-l-md rtl:first:rounded-r-md\" style=\"width: 15%\">15%</div>
                                        <div class=\"flex items-center justify-center h-10 text-white bg-purple-500 ltr:last:rounded-r-md rtl:last:rounded-l-md ltr:first:rounded-l-md rtl:first:rounded-r-md\" style=\"width: 35%\">35%</div>
                                        <div class=\"flex items-center justify-center h-10 text-white bg-orange-500 ltr:last:rounded-r-md rtl:last:rounded-l-md ltr:first:rounded-l-md rtl:first:rounded-r-md\" style=\"width: 30%\">30%</div>
                                    </div>
                                </div> #}
                                <p>The salary for all employees is ₱{{salary_totals['total_pay_per_year']|number_format(2, '.', ',')}} per year.</p>
                            </div><!--end col-->
                            <div class=\"2xl:col-span-5 2xl:col-start-8\">
                                <div class=\"overflow-x-auto\">
                                    <table class=\"w-full\">
                                        <tbody>
                                            <tr>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent\">Overall Basic Salary per Month</td>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent font-semibold\">₱{{salary_totals['total_basic_salary_per_month']|number_format(2, '.', ',')}}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent\">Overall Tax Shield per Month</td>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent font-semibold\">₱{{salary_totals['total_taxshield_per_month']|number_format(2, '.', ',')}}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent\">Overall Basic Salary per Year</td>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent font-semibold\">₱{{salary_totals['total_basic_salary_per_year']|number_format(2, '.', ',')}}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent\">Overall Tax Shield per Year</td>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent font-semibold\">₱{{salary_totals['total_taxshield_per_year']|number_format(2, '.', ',')}}</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent\">Total Pay</td>
                                                <td class=\"px-3.5 first:pl-0 last:pr-0 py-2 border-y border-transparent font-semibold\">₱{{salary_totals['total_pay_per_year']|number_format(2, '.', ',')}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end col-->
                        </div><!--end grid-->
                    </div>
                </div><!--end card-->
                {# {{ dump(payroll_groups) }} #}
                <form action=\"{{path('view_employee_payroll')}}\" method=\"post\">
                <div class=\"card\" id=\"employeeTable\">
                    <div class=\"card-body\">
                        <div class=\"grid grid-cols-1 gap-4 mb-5 lg:grid-cols-12 xl:grid-cols-12\">
                            {# <div class=\"lg:col-span-3 xl:col-span-3\">
                                <div class=\"relative\">
                                    <input type=\"text\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search for ...\" autocomplete=\"off\">
                                    <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                </div>
                            </div><!--end col--> #}
                            
                                <div class=\"lg:col-span-3 xl:col-span-2\">
                                    <select id=\"yearPicker\" name=\"yearPicker\" data-selected-year=\"{{selectedYear}}\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                        <!-- Add more options as needed -->
                                    </select>
                                </div><!--end col-->
                                <div class=\"relative\">
                                    <button href=\"#!\" id=\"searchButton\" type=\"submit\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 add-employee\"><span class=\"align-middle\">Search</span></button>
                                </div><!--end col-->
                            </form>
                            <div class=\"lg:col-start-10 lg:col-span-3 xl:col-span-2 xl:col-start-11\">
                                <div class=\"lg:ltr:text-right lg:rtl:text-left\">
                                    {# <a href=\"apps-hr-payroll-create-payslip\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Generate Payroll</span></a> #}
                                    <button data-modal-target=\"generatePayroll\" type=\"button\" class=\"add-philhealth_config text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Generate Payroll</button>
                                </div>
                            </div>
                        </div><!--col grid-->
                        <div class=\"-mx-5 overflow-x-auto\">
                            <table class=\"w-full whitespace-nowrap\">
                                <thead class=\"ltr:text-left rtl:text-right\">
                                    <tr class=\"bg-slate-100 dark:bg-zink-600\">
                                        {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Employee Code</th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Name</th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Monthly Salary</th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Daily Salary</th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Action</th> #}
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Payroll Date Range</th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Remarks</th>
                                        {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Action</th> #}
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for payroll_group in payroll_groups %}
                                        <tr onclick=\"collapseComponentV2('{{ payroll_group.id }}')\">
                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 collapsible-header{{payroll_group.id}} group/item show\">
                                                <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                                <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                                {{ payroll_group.date_start|date('Y-m-d') }} to {{ payroll_group.date_end|date('Y-m-d') }}
                                            </td>
                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                {{ payroll_group.remarks }}
                                            </td>
                                        </tr>
                                        <tr class=\"collapsible-content{{payroll_group.id}} hidden\">
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
                                                        {% for emp_payroll in payroll_group.emp_payrolls %}
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    <a href=\"{{ path('employee_profile', parameters = {'employee_code': emp_payroll.emp_code}) }}\" class=\"transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600\">
                                                                        {{ emp_payroll.emp_code|default('N/A') }}
                                                                    </a>
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    {{ emp_payroll.emp_name }}
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    ₱{{ emp_payroll.basic_salary|default('0.00')|number_format(2, '.', ',') }}
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    ₱{{ emp_payroll.overtime_salary|default('0.00')|number_format(2, '.', ',') }}
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    ₱{{ emp_payroll.total_salary|default('0.00')|number_format(2, '.', ',') }}
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    ₱{{ emp_payroll.total_deduction|default('0.00')|number_format(2, '.', ',') }}
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    ₱{{ emp_payroll.net_salary|default('0.00')|number_format(2, '.', ',') }}
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                    Pending
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 flex items-center gap-2\">
                                                                    {# <a href=\"apps-hr-payroll-payslip\" class=\"px-2 py-1.5 text-xs text-white btn bg-sky-500 border-sky-500 hover:text-white hover:bg-sky-600 focus:text-white focus:bg-sky-600 focus:ring focus:ring-sky-100 active:text-white active:bg-sky-600 active:border-sky-600 active:ring active:ring-sky-100 dark:ring-sky-400/20\">Generate Slip</a> #}
                                                                    <form action=\"{{ path('generate_payslip') }}\" method=\"POST\" target=\"_blank\">
                                                                        <input type=\"hidden\" name=\"payroll_id\" value=\"{{ emp_payroll.id }}\">
                                                                        <button type=\"submit\" class=\"add-payroll px-2 py-1.5 text-xs text-white btn bg-sky-500 border-sky-500 hover:text-white hover:bg-sky-600 focus:text-white focus:bg-sky-600 focus:ring focus:ring-sky-100 active:text-white active:bg-sky-600 active:border-sky-600 active:ring active:ring-sky-100 dark:ring-sky-400/20\">
                                                                            <i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> 
                                                                            <span class=\"align-middle\">Generate Payslip</span>
                                                                        </button>
                                                                    </form>
                                                                    <div class=\"relative dropdown\">
                                                                        <button type=\"button\" id=\"employeeAction{{ emp_payroll.id }}\" data-bs-toggle=\"dropdown\" class=\"flex action-payroll items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                        <ul class=\"absolute z-50 py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"employeeAction{{ emp_payroll.id }}\">
                                                                            <li>
                                                                                <a data-modal-target=\"updateSalaryAdjustment{{emp_payroll.id}}\" class=\"block edit-payroll block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\"><i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Salary Adjustment</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        {% endfor %}
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr> 
                                         
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                        {# <div class=\"flex flex-col items-center mt-5 md:flex-row\">
                            <div class=\"mb-4 grow md:mb-0\">
                                <p class=\"text-slate-500 dark:text-zink-200\">Showing <b>10</b> of <b>46</b> Results</p>
                            </div>
                            <ul class=\"flex flex-wrap items-center gap-2 shrink-0\">
                                <li>
                                    <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\"><i class=\"size-4 rtl:rotate-180\" data-lucide=\"chevrons-left\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\"><i class=\"size-4 rtl:rotate-180\" data-lucide=\"chevron-left\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\">1</a>
                                </li>
                                <li>
                                    <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\">2</a>
                                </li>
                                <li>
                                    <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active\">3</a>
                                </li>
                                <li>
                                    <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\">4</a>
                                </li>
                                <li>
                                    <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\"><i class=\"size-4 rtl:rotate-180\" data-lucide=\"chevron-right\"></i></a>
                                </li>
                                <li>
                                    <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\"><i class=\"size-4 rtl:rotate-180\" data-lucide=\"chevrons-right\"></i></a>
                                </li>
                            </ul>
                        </div> #}
                    </div>
                </div>

{# Modal for payrolls #}
{% for payroll_group in payroll_groups %}
    {% for emp_payroll in payroll_group.emp_payrolls %}
        <div id=\"updateSalaryAdjustment{{emp_payroll.id}}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
            <div class=\"w-screen lg:w-[75rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                    <h5 class=\"text-16\">Update Salary Adjustment</h5>
                    <button data-modal-close=\"updateSalaryAdjustment{{emp_payroll.id}}\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                </div>
                <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                    <form action=\"{{ path('update_salary_adjustment') }}\" method=\"POST\">
                        <input type=\"hidden\" id=\"employee_id{{ emp_payroll.id }}\" name=\"employee_id\" value=\"{{ emp_payroll.emp_id }}\">
                        <input type=\"hidden\" id=\"employee_code\" name=\"employee_code\" value=\"{{ emp_payroll.emp_code }}\">
                        <input type=\"hidden\" id=\"payroll_id{{ emp_payroll.id }}\" name=\"payroll_id\" value=\"{{ emp_payroll.id }}\">

                        <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                            <div class=\"xl:col-span-6 h-[calc(100vh_-_320px)] max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto\">
                                <div class=\"mb-3\">
                                    <label for=\"\" class=\"inline-block mb-2 text-base font-medium\">Salary Adjustment {{emp_payroll.id}}</label>
                                </div>
                                <!-- Salary Adjustment Inputs -->
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_regular_ndot_hours\" class=\"inline-block mb-2 text-base font-medium\">Regular NDOT Hours</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI({{ emp_payroll.id }})\" name=\"sal_adj_regular_ndot_hours\" id=\"sal_adj_regular_ndot_hours{{ emp_payroll.id }}\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_regular_ndot_pay\" class=\"inline-block mb-2 text-base font-medium\">Regular NDOT Pay</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI({{ emp_payroll.id }})\" name=\"sal_adj_regular_ndot_pay\" id=\"sal_adj_regular_ndot_pay{{ emp_payroll.id }}\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_ot_meal_subsidy_days\" class=\"inline-block mb-2 text-base font-medium\">OT Meal Subsidy (Days/8pm Onwards)</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI({{ emp_payroll.id }})\" name=\"sal_adj_ot_meal_subsidy_days\" id=\"sal_adj_ot_meal_subsidy_days{{ emp_payroll.id }}\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_ot_meal_subsidy_amount\" class=\"inline-block mb-2 text-base font-medium\">OT Meal Subsidy Amount</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI({{ emp_payroll.id }})\" name=\"sal_adj_ot_meal_subsidy_amount\" id=\"sal_adj_ot_meal_subsidy_amount{{ emp_payroll.id }}\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>

                                <!-- New Inputs for Remaining Columns -->
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_4hrs_more_weekend_holiday\" class=\"inline-block mb-2 text-base font-medium\">4 HRS or MORE during SAT./SUN./LEG. HOL.</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI({{ emp_payroll.id }})\" name=\"sal_adj_4hrs_more_weekend_holiday\" id=\"sal_adj_4hrs_more_weekend_holiday{{ emp_payroll.id }}\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_amount\" class=\"inline-block mb-2 text-base font-medium\">Amount</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI({{ emp_payroll.id }})\" name=\"sal_adj_amount\" id=\"sal_adj_amount{{ emp_payroll.id }}\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_temp_allowance\" class=\"inline-block mb-2 text-base font-medium\">Temporary Allowance Amount</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI({{ emp_payroll.id }})\" name=\"sal_adj_temp_allowance\" id=\"sal_adj_temp_allowance{{ emp_payroll.id }}\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_wellness\" class=\"inline-block mb-2 text-base font-medium\">Wellness</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI({{ emp_payroll.id }})\" name=\"sal_adj_wellness\" id=\"sal_adj_wellness{{ emp_payroll.id }}\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_amount\" class=\"inline-block mb-2 text-base font-medium\">Salary Adjustment</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI({{ emp_payroll.id }})\" name=\"sal_adj_amount\" id=\"sal_adj_amount{{ emp_payroll.id }}\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_total_nontax_salary\" class=\"inline-block mb-2 text-base font-medium\">Total Non-Taxable Salary Adjustment</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI({{ emp_payroll.id }})\" name=\"sal_adj_total_nontax_salary\" id=\"sal_adj_total_nontax_salary{{ emp_payroll.id }}\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_total_tax_salary\" class=\"inline-block mb-2 text-base font-medium\">Total Taxable Salary Adjustment</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI({{ emp_payroll.id }})\" name=\"sal_adj_total_tax_salary\" id=\"sal_adj_total_tax_salary{{ emp_payroll.id }}\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_total_salary\" class=\"inline-block mb-2 text-base font-medium\">Total Salary Adjustment</label>
                                    <input type=\"number\" min=\"0\" oninput=\"updateSalaryAdjustmentUI({{ emp_payroll.id }})\" name=\"sal_adj_total_salary\" id=\"sal_adj_total_salary{{ emp_payroll.id }}\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
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
                                        <span id=\"comp_sal_adj_regular_ndot_hours_prev\" class=\"inline-block mb-2 text-base font-medium\">₱ {{ emp_payroll.total_salary|default('0.00')|number_format(2, '.', ',') }}</span>
                                    </div>
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"sal_adj_regular_ndot_pay_prev\" class=\"inline-block mb-2 text-base font-bold\">Previous Total Deductions</label>
                                        <span id=\"comp_sal_adj_regular_ndot_pay_prev\" class=\"inline-block mb-2 text-base font-medium\">₱ {{ emp_payroll.total_deduction|default('0.00')|number_format(2, '.', ',') }}</span>
                                    </div>
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"sal_adj_ot_meal_subsidy_days_prev\" class=\"inline-block mb-2 text-base font-bold\">Previous Net Salary</label>
                                        <span id=\"comp_sal_adj_ot_meal_subsidy_days_prev\" class=\"inline-block mb-2 text-base font-medium\">₱ {{ emp_payroll.net_salary|default('0.00')|number_format(2, '.', ',') }}</span>
                                    </div>
                                </div>
                                <div class=\"mt-5\">
                                    <label for=\"\" class=\"inline-block mb-2 text-base font-medium\">Updated</label>
                                </div>
                                <div class=\"border-dashed border-2 border-black-500 rounded-md p-5\">
                                    <!-- New Inputs for Remaining Columns -->
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"comp_sal_adj_regular_ndot_hours_preview{{emp_payroll.id}}\" class=\"inline-block mb-2 text-base font-bold\">Updated Total Salary</label>
                                        <span id=\"comp_sal_adj_regular_ndot_hours_preview{{emp_payroll.id}}\" class=\"inline-block mb-2 text-base font-medium\">₱ 0</span>
                                    </div>
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"comp_sal_adj_regular_ndot_pay_preview{{emp_payroll.id}}\" class=\"inline-block mb-2 text-base font-bold\">Updated Total Deductions</label>
                                        <span id=\"comp_sal_adj_regular_ndot_pay_preview{{emp_payroll.id}}\" class=\"inline-block mb-2 text-base font-medium\">₱ 0</span>
                                    </div>
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"comp_sal_adj_ot_meal_subsidy_days_preview{{emp_payroll.id}}\" class=\"inline-block mb-2 text-base font-bold\">Updated Net Salary</label>
                                        <span id=\"comp_sal_adj_ot_meal_subsidy_days_preview{{emp_payroll.id}}\" class=\"inline-block mb-2 text-base font-medium\">₱ 0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Submit Button -->
                        <div class=\"flex justify-end gap-2 mt-4\">
                            <button type=\"reset\" id=\"close-modal\" data-modal-close=\"updateSalaryAdjustment{{emp_payroll.id}}\" class=\"text-red-500 bg-white btn\">Cancel</button>
                            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    {% endfor %}
{% endfor %}



<div id=\"generatePayroll\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\">Generate Payroll</h5>
            <button data-modal-close=\"generatePayroll\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"{{ path('generate_all_employees_payroll') }}\" method=\"POST\">
                {#  
                <input type=\"hidden\" name=\"employee_id\" value=\"{{ employeeData.id }}\">
                <input type=\"hidden\" name=\"employee_code\" value=\"{{ employeeData.employee_code }}\">
                #}
                
                <!-- Date input -->
                <div class=\"mb-3\">
                    <label for=\"payroll_date_range\" class=\"inline-block mb-2 text-base font-medium\">Date</label>
                    <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\" id=\"worker_log_date\" required>
                </div>
                
                <!-- Set Salary Adjustment toggle -->
                {# <div class=\"xl:col-span-6\">
                    <label for=\"salary_adjustment\" class=\"inline-block mb-2 text-base font-medium\">Set Salary Adjustment</label>
                    <div class=\"relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2\">
                        <input type=\"checkbox\" name=\"salary_adjustment\" id=\"salary_adjustment\" class=\"absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-500 bg-white/80 dark:bg-zink-400 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-slate-700 dark:checked:border-slate-700 arrow-none\">
                        <label for=\"salary_adjustment\" class=\"block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer transition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-slate-700 peer-checked/published:border-slate-700\"></label>
                    </div>
                </div> #}

                <!-- Salary Adjustment Inputs -->
                {# <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_regular_ndot_hours\" class=\"inline-block mb-2 text-base font-medium\">Regular NDOT Hours</label>
                    <input type=\"text\" name=\"sal_adj_regular_ndot_hours\" id=\"sal_adj_regular_ndot_hours\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_regular_ndot_pay\" class=\"inline-block mb-2 text-base font-medium\">Regular NDOT Pay</label>
                    <input type=\"text\" name=\"sal_adj_regular_ndot_pay\" id=\"sal_adj_regular_ndot_pay\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_ot_meal_subsidy_days\" class=\"inline-block mb-2 text-base font-medium\">OT Meal Subsidy (Days/8pm Onwards)</label>
                    <input type=\"text\" name=\"sal_adj_ot_meal_subsidy_days\" id=\"sal_adj_ot_meal_subsidy_days\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_ot_meal_subsidy_amount\" class=\"inline-block mb-2 text-base font-medium\">OT Meal Subsidy Amount</label>
                    <input type=\"text\" name=\"sal_adj_ot_meal_subsidy_amount\" id=\"sal_adj_ot_meal_subsidy_amount\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div> #}

                <!-- New Inputs for Remaining Columns -->
                {# <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_4hrs_more_weekend_holiday\" class=\"inline-block mb-2 text-base font-medium\">4 HRS or MORE during SAT./SUN./LEG. HOL.</label>
                    <input type=\"text\" name=\"sal_adj_4hrs_more_weekend_holiday\" id=\"sal_adj_4hrs_more_weekend_holiday\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_amount\" class=\"inline-block mb-2 text-base font-medium\">Amount</label>
                    <input type=\"text\" name=\"sal_adj_amount\" id=\"sal_adj_amount\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_temp_allowance\" class=\"inline-block mb-2 text-base font-medium\">Temporary Allowance Amount</label>
                    <input type=\"text\" name=\"sal_adj_temp_allowance\" id=\"sal_adj_temp_allowance\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_wellness\" class=\"inline-block mb-2 text-base font-medium\">Wellness</label>
                    <input type=\"text\" name=\"sal_adj_wellness\" id=\"sal_adj_wellness\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_amount\" class=\"inline-block mb-2 text-base font-medium\">Salary Adjustment</label>
                    <input type=\"text\" name=\"sal_adj_amount\" id=\"sal_adj_amount\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_total_nontax_salary\" class=\"inline-block mb-2 text-base font-medium\">Total Non-Taxable Salary Adjustment</label>
                    <input type=\"text\" name=\"sal_adj_total_nontax_salary\" id=\"sal_adj_total_nontax_salary\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_total_tax_salary\" class=\"inline-block mb-2 text-base font-medium\">Total Taxable Salary Adjustment</label>
                    <input type=\"text\" name=\"sal_adj_total_tax_salary\" id=\"sal_adj_total_tax_salary\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_total_salary\" class=\"inline-block mb-2 text-base font-medium\">Total Salary Adjustment</label>
                    <input type=\"text\" name=\"sal_adj_total_salary\" id=\"sal_adj_total_salary\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div> #}

                <!-- Submit Button -->
                <div class=\"mt-6\">
                    <button type=\"submit\" class=\"btn bg-custom-500 text-white hover:bg-custom-600 w-full\">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

{% endblock %}
    
{% block javascripts %}

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}
<script>
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


{% endblock %}", "payroll/apps-hr-payroll-employee.html.twig", "C:\\Users\\SUNIT226\\Desktop\\Repos\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\payroll\\apps-hr-payroll-employee.html.twig");
    }
}
