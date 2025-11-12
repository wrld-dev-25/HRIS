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

/* payroll/apps-hr-employee-payslip.html.twig */
class __TwigTemplate_2f16f2e679787aa4e7fd84270e8875a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payroll/apps-hr-employee-payslip.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payroll/apps-hr-employee-payslip.html.twig"));

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

        yield "Payslip";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "
            ";
        // line 6
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Employee's Payroll", "title" => "Payslip"]);
        yield "
                ";
        // line 8
        yield "                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card print:shadow-none print:border-none\">
                            <div class=\"card-body print:hidden\">
                                <div class=\"flex flex-col gap-5 md:items-center md:flex-row\">
                                    ";
        // line 20
        yield "                                    <div class=\"flex items-center gap-2 shrink-0\">
                                        ";
        // line 22
        yield "                                        <button onclick=\"window.print()\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"save\" class=\"inline-block size-4 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Save & Print</span></button>
                                        ";
        // line 34
        yield "                                    </div>
                                </div>
                            </div>
                            <div class=\"!pt-0 card-body\">
                                <div class=\"p-5 border rounded-md md:p-8 border-slate-200 dark:border-zink-500 print:p-0\">
                                    <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12 pl-5\">
                                        <div class=\"text-center xl:col-span-8 ltr:xl:text-left rtl:xl:text-right\">
                                            <p class=\"mb-1 text-slate-500 dark:text-zink-200\">Date Covered: <span class=\"font-semibold\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 41, $this->source); })()), "date_start", [], "any", false, false, false, 41), "m-d-Y"), "html", null, true);
        yield " TO ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 41, $this->source); })()), "date_end", [], "any", false, false, false, 41), "m-d-Y"), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zink-200\"><span class=\"font-semibold\">WRLD CAPITAL HOLDINGS INC.</span></p>
                                            <p class=\"mb-1 truncate text-slate-500 dark:text-zink-200\"><span class=\"font-semibold\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 43, $this->source); })()), "employee_payroll_profile", [], "any", false, false, false, 43), "emp_code", [], "any", false, false, false, 43), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 43, $this->source); })()), "employee_payroll_profile", [], "any", false, false, false, 43), "emp_name", [], "any", false, false, false, 43), "html", null, true);
        yield "</span></p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">Daily Rate: <span class=\"font-semibold\"> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 44, $this->source); })()), "employee_payroll_profile", [], "any", false, false, false, 44), "daily_rate", [], "any", false, false, false, 44), "html", null, true);
        yield " </span></p>
                                        </div><!--end col-->
                                    </div><!--end grid-->

                                    <div class=\"grid grid-cols-1 gap-5 mt-8 md:grid-cols-3\">
                                        <div class=\"pl-5\">
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\"><span class=\"font-semibold\"></span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">SSS : <span class=\"font-semibold\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 51, $this->source); })()), "employee_payroll_profile", [], "any", false, false, false, 51), "sss_num", [], "any", false, false, false, 51), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">PhilHealth : <span class=\"font-semibold\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 52, $this->source); })()), "employee_payroll_profile", [], "any", false, false, false, 52), "philhealth_num", [], "any", false, false, false, 52), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Pag-Ibig : <span class=\"font-semibold\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 53, $this->source); })()), "employee_payroll_profile", [], "any", false, false, false, 53), "pagibig_num", [], "any", false, false, false, 53), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">TIN: <span class=\"font-semibold\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 54, $this->source); })()), "employee_payroll_profile", [], "any", false, false, false, 54), "tax_num", [], "any", false, false, false, 54), "html", null, true);
        yield "</span></p>
                                        </div>
                                        <div>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\"><span class=\"font-semibold\"></span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">SSS: <span class=\"font-semibold\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 58, $this->source); })()), "sss_share", [], "any", false, false, false, 58), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">PhilHealth : <span class=\"font-semibold\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 59, $this->source); })()), "philhealth_share", [], "any", false, false, false, 59), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Pag-Ibig : <span class=\"font-semibold\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 60, $this->source); })()), "hdmf_contribution", [], "any", false, false, false, 60), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">With. Tax : <span class=\"font-semibold\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 61, $this->source); })()), "tax_contribution", [], "any", false, false, false, 61), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                        </div>
                                        <div>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\"><span class=\"font-semibold\">Loan Balance</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Cash Advance: <span class=\"font-semibold\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 65, $this->source); })()), "cash_advance", [], "any", false, false, false, 65), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">SSS Calamity Loan : <span class=\"font-semibold\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 66, $this->source); })()), "sss_calamity_loan", [], "any", false, false, false, 66), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">SSS Loan: <span class=\"font-semibold\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 67, $this->source); })()), "sss_loan", [], "any", false, false, false, 67), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">HDMF Loan: <span class=\"font-semibold\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 68, $this->source); })()), "hdmf_loan", [], "any", false, false, false, 68), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                        </div>
                                    </div>

                                    <div class=\"grid grid-cols-1 gap-5 mt-8 md:grid-cols-3\">
                                        <div class=\"my-5 pl-5\">
                                            <p class=\"mb-2 text-sm uppercase text-slate-500 dark:text-zink-200\"><h6>Year To Date Details</h6></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD Total Gross Income: <span class=\"font-semibold\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 75, $this->source); })()), "year_to_date", [], "any", false, false, false, 75), "ytdGrossIncome", [], "any", false, false, false, 75), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD SSS: <span class=\"font-semibold\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 76, $this->source); })()), "year_to_date", [], "any", false, false, false, 76), "ytdSSS", [], "any", false, false, false, 76), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD PhilHeath: <span class=\"font-semibold\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 77, $this->source); })()), "year_to_date", [], "any", false, false, false, 77), "ytdPhilHealth", [], "any", false, false, false, 77), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD PagIbig: <span class=\"font-semibold\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 78, $this->source); })()), "year_to_date", [], "any", false, false, false, 78), "ytdPagIbig", [], "any", false, false, false, 78), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD Tax With.: <span class=\"font-semibold\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 79, $this->source); })()), "year_to_date", [], "any", false, false, false, 79), "ytdTax", [], "any", false, false, false, 79), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD Net Pay: <span class=\"font-semibold\"><b>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 80, $this->source); })()), "year_to_date", [], "any", false, false, false, 80), "ytdNetPay", [], "any", false, false, false, 80), 2, ".", ","), "html", null, true);
        yield "</b></span></p>
                                        </div>
                                        <div class=\"pl-5\">
                                            <p class=\"mb-2 text-sm uppercase text-slate-500 dark:text-zink-200\"><h6>Payslip Details</h6></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Total Gross Income: <span class=\"font-semibold\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 84, $this->source); })()), "total_salary", [], "any", false, false, false, 84), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Total Deductions: <span class=\"font-semibold\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 85, $this->source); })()), "total_deduction", [], "any", false, false, false, 85), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Net Pay: <span class=\"font-semibold\"><b>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["payroll"]) || array_key_exists("payroll", $context) ? $context["payroll"] : (function () { throw new RuntimeError('Variable "payroll" does not exist.', 86, $this->source); })()), "net_salary", [], "any", false, false, false, 86), 2, ".", ","), "html", null, true);
        yield "</b></span></p>
                                        </div>
                                        <div class=\"my-5 pl-5\">
                                            <p class=\"mb-2 text-sm uppercase text-slate-500 dark:text-zink-200\"><h6>Signature ____________________</h6></p>
                                        </div>
                                    </div>

                                    

                                    <div class=\"flex gap-5 px-4 py-3 text-sm border rounded-md md:items-center\">
                                        <p><span class=\"font-bold\"></span> I hereby acknowledge to have receive the sum as fullpayment of my service rendered.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 105
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

        // line 106
        yield "<style>
";
        // line 126
        yield "</style>
<!-- App js -->
<script src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 130
        yield "
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
        return "payroll/apps-hr-employee-payslip.html.twig";
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
        return array (  301 => 130,  297 => 128,  293 => 126,  290 => 106,  277 => 105,  248 => 86,  244 => 85,  240 => 84,  233 => 80,  229 => 79,  225 => 78,  221 => 77,  217 => 76,  213 => 75,  203 => 68,  199 => 67,  195 => 66,  191 => 65,  184 => 61,  180 => 60,  176 => 59,  172 => 58,  165 => 54,  161 => 53,  157 => 52,  153 => 51,  143 => 44,  137 => 43,  130 => 41,  121 => 34,  118 => 22,  115 => 20,  108 => 8,  104 => 6,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Payslip{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: \"Employee's Payroll\", title: 'Payslip' }) }}
                {# {{ dump(payroll) }} #}
                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card print:shadow-none print:border-none\">
                            <div class=\"card-body print:hidden\">
                                <div class=\"flex flex-col gap-5 md:items-center md:flex-row\">
                                    {# <div class=\"grow\">
                                        <h6 class=\"mb-1 text-16\">#TW15090257</h6>
                                        <ul class=\"flex items-center gap-3\">
                                            <li class=\"text-slate-500\">Create: 10 July, 2023</li>
                                            <li class=\"text-slate-500\">Due: 10 July, 2023</li>
                                        </ul>
                                    </div> #}
                                    <div class=\"flex items-center gap-2 shrink-0\">
                                        {# <button type=\"button\" class=\"text-white bg-purple-500 border-purple-500 btn hover:text-white hover:bg-purple-600 hover:border-purple-600 focus:text-white focus:bg-purple-600 focus:border-purple-600 focus:ring focus:ring-purple-100 active:text-white active:bg-purple-600 active:border-purple-600 active:ring active:ring-purple-100 dark:ring-purple-400/10\">Download</button> #}
                                        <button onclick=\"window.print()\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"save\" class=\"inline-block size-4 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Save & Print</span></button>
                                        {# <div class=\"relative dropdown\">
                                            <button class=\"flex items-center justify-center w-[38.39px] h-[38.39px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"categoryNotes1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-4\"></i></button>
                                            <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"categoryNotes1\">
                                                <li>
                                                    <a class=\"block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"apps-invoice-add-new\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 mr-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                </li>
                                                <li>
                                                    <a data-modal-target=\"deleteModal\" class=\"block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 mr-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                </li>
                                            </ul>
                                        </div> #}
                                    </div>
                                </div>
                            </div>
                            <div class=\"!pt-0 card-body\">
                                <div class=\"p-5 border rounded-md md:p-8 border-slate-200 dark:border-zink-500 print:p-0\">
                                    <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12 pl-5\">
                                        <div class=\"text-center xl:col-span-8 ltr:xl:text-left rtl:xl:text-right\">
                                            <p class=\"mb-1 text-slate-500 dark:text-zink-200\">Date Covered: <span class=\"font-semibold\">{{payroll.date_start|date('m-d-Y')}} TO {{payroll.date_end|date('m-d-Y')}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zink-200\"><span class=\"font-semibold\">WRLD CAPITAL HOLDINGS INC.</span></p>
                                            <p class=\"mb-1 truncate text-slate-500 dark:text-zink-200\"><span class=\"font-semibold\">{{payroll.employee_payroll_profile.emp_code}} {{payroll.employee_payroll_profile.emp_name}}</span></p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">Daily Rate: <span class=\"font-semibold\"> {{payroll.employee_payroll_profile.daily_rate}} </span></p>
                                        </div><!--end col-->
                                    </div><!--end grid-->

                                    <div class=\"grid grid-cols-1 gap-5 mt-8 md:grid-cols-3\">
                                        <div class=\"pl-5\">
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\"><span class=\"font-semibold\"></span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">SSS : <span class=\"font-semibold\">{{payroll.employee_payroll_profile.sss_num}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">PhilHealth : <span class=\"font-semibold\">{{payroll.employee_payroll_profile.philhealth_num}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Pag-Ibig : <span class=\"font-semibold\">{{payroll.employee_payroll_profile.pagibig_num}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">TIN: <span class=\"font-semibold\">{{payroll.employee_payroll_profile.tax_num}}</span></p>
                                        </div>
                                        <div>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\"><span class=\"font-semibold\"></span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">SSS: <span class=\"font-semibold\">{{payroll.sss_share|number_format(2, '.', ',')}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">PhilHealth : <span class=\"font-semibold\">{{payroll.philhealth_share|number_format(2, '.', ',')}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Pag-Ibig : <span class=\"font-semibold\">{{payroll.hdmf_contribution|number_format(2, '.', ',')}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">With. Tax : <span class=\"font-semibold\">{{payroll.tax_contribution|number_format(2, '.', ',')}}</span></p>
                                        </div>
                                        <div>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\"><span class=\"font-semibold\">Loan Balance</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Cash Advance: <span class=\"font-semibold\">{{payroll.cash_advance|number_format(2, '.', ',')}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">SSS Calamity Loan : <span class=\"font-semibold\">{{payroll.sss_calamity_loan|number_format(2, '.', ',')}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">SSS Loan: <span class=\"font-semibold\">{{payroll.sss_loan|number_format(2, '.', ',')}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">HDMF Loan: <span class=\"font-semibold\">{{payroll.hdmf_loan|number_format(2, '.', ',')}}</span></p>
                                        </div>
                                    </div>

                                    <div class=\"grid grid-cols-1 gap-5 mt-8 md:grid-cols-3\">
                                        <div class=\"my-5 pl-5\">
                                            <p class=\"mb-2 text-sm uppercase text-slate-500 dark:text-zink-200\"><h6>Year To Date Details</h6></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD Total Gross Income: <span class=\"font-semibold\">{{payroll.year_to_date.ytdGrossIncome|number_format(2, '.', ',')}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD SSS: <span class=\"font-semibold\">{{payroll.year_to_date.ytdSSS|number_format(2, '.', ',')}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD PhilHeath: <span class=\"font-semibold\">{{payroll.year_to_date.ytdPhilHealth|number_format(2, '.', ',')}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD PagIbig: <span class=\"font-semibold\">{{payroll.year_to_date.ytdPagIbig|number_format(2, '.', ',')}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD Tax With.: <span class=\"font-semibold\">{{payroll.year_to_date.ytdTax|number_format(2, '.', ',')}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD Net Pay: <span class=\"font-semibold\"><b>{{payroll.year_to_date.ytdNetPay|number_format(2, '.', ',')}}</b></span></p>
                                        </div>
                                        <div class=\"pl-5\">
                                            <p class=\"mb-2 text-sm uppercase text-slate-500 dark:text-zink-200\"><h6>Payslip Details</h6></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Total Gross Income: <span class=\"font-semibold\">{{payroll.total_salary|number_format(2, '.', ',')}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Total Deductions: <span class=\"font-semibold\">{{payroll.total_deduction|number_format(2, '.', ',')}}</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Net Pay: <span class=\"font-semibold\"><b>{{payroll.net_salary|number_format(2, '.', ',')}}</b></span></p>
                                        </div>
                                        <div class=\"my-5 pl-5\">
                                            <p class=\"mb-2 text-sm uppercase text-slate-500 dark:text-zink-200\"><h6>Signature ____________________</h6></p>
                                        </div>
                                    </div>

                                    

                                    <div class=\"flex gap-5 px-4 py-3 text-sm border rounded-md md:items-center\">
                                        <p><span class=\"font-bold\"></span> I hereby acknowledge to have receive the sum as fullpayment of my service rendered.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
{% endblock %}
    
{% block javascripts %}
<style>
{# @media print {
    .grid {
        display: grid !important;
        grid-template-columns: repeat(3, 1fr); /* Adjust for your layout */
        gap: 1rem;
    }

    .md\\:grid-cols-3 {
        grid-template-columns: repeat(3, 1fr) !important;
    }

    .xl\\:grid-cols-12 {
        grid-template-columns: repeat(12, 1fr) !important;
    }

    .xl\\:col-span-12 {
        grid-column: span 12 / span 12 !important;
    }
} #}
</style>
<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

{% endblock %}", "payroll/apps-hr-employee-payslip.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\payroll\\apps-hr-employee-payslip.html.twig");
    }
}
