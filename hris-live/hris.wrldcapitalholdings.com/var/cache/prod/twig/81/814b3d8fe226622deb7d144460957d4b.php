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

/* payroll/apps-hr-employee-payslip.html.twig */
class __TwigTemplate_ccedcf9773551cb942e5ab03877ca349 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "payroll/apps-hr-employee-payslip.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Payslip";
        return; yield '';
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "
            ";
        // line 6
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Employee's Payroll", "title" => "Payslip"]);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "date_start", [], "any", false, false, false, 41), "m-d-Y"), "html", null, true);
        yield " TO ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "date_end", [], "any", false, false, false, 41), "m-d-Y"), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zink-200\"><span class=\"font-semibold\">WRLD CAPITAL HOLDINGS INC.</span></p>
                                            <p class=\"mb-1 truncate text-slate-500 dark:text-zink-200\"><span class=\"font-semibold\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "employee_payroll_profile", [], "any", false, false, false, 43), "emp_code", [], "any", false, false, false, 43), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "employee_payroll_profile", [], "any", false, false, false, 43), "emp_name", [], "any", false, false, false, 43), "html", null, true);
        yield "</span></p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">Daily Rate: <span class=\"font-semibold\"> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "employee_payroll_profile", [], "any", false, false, false, 44), "daily_rate", [], "any", false, false, false, 44), "html", null, true);
        yield " </span></p>
                                        </div><!--end col-->
                                    </div><!--end grid-->

                                    <div class=\"grid grid-cols-1 gap-5 mt-8 md:grid-cols-3\">
                                        <div class=\"pl-5\">
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\"><span class=\"font-semibold\"></span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">SSS : <span class=\"font-semibold\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "employee_payroll_profile", [], "any", false, false, false, 51), "sss_num", [], "any", false, false, false, 51), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">PhilHealth : <span class=\"font-semibold\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "employee_payroll_profile", [], "any", false, false, false, 52), "philhealth_num", [], "any", false, false, false, 52), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Pag-Ibig : <span class=\"font-semibold\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "employee_payroll_profile", [], "any", false, false, false, 53), "pagibig_num", [], "any", false, false, false, 53), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">TIN: <span class=\"font-semibold\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "employee_payroll_profile", [], "any", false, false, false, 54), "tax_num", [], "any", false, false, false, 54), "html", null, true);
        yield "</span></p>
                                        </div>
                                        <div>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\"><span class=\"font-semibold\"></span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">SSS: <span class=\"font-semibold\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "sss_share", [], "any", false, false, false, 58), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">PhilHealth : <span class=\"font-semibold\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "philhealth_share", [], "any", false, false, false, 59), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Pag-Ibig : <span class=\"font-semibold\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "hdmf_contribution", [], "any", false, false, false, 60), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">With. Tax : <span class=\"font-semibold\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "tax_contribution", [], "any", false, false, false, 61), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                        </div>
                                        <div>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\"><span class=\"font-semibold\">Loan Balance</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Cash Advance: <span class=\"font-semibold\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "cash_advance", [], "any", false, false, false, 65), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">SSS Calamity Loan : <span class=\"font-semibold\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "sss_calamity_loan", [], "any", false, false, false, 66), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">SSS Loan: <span class=\"font-semibold\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "sss_loan", [], "any", false, false, false, 67), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">HDMF Loan: <span class=\"font-semibold\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "hdmf_loan", [], "any", false, false, false, 68), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                        </div>
                                    </div>

                                    <div class=\"grid grid-cols-1 gap-5 mt-8 md:grid-cols-3\">
                                        <div class=\"my-5 pl-5\">
                                            <p class=\"mb-2 text-sm uppercase text-slate-500 dark:text-zink-200\"><h6>Year To Date Details</h6></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD Total Gross Income: <span class=\"font-semibold\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "year_to_date", [], "any", false, false, false, 75), "ytdGrossIncome", [], "any", false, false, false, 75), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD SSS: <span class=\"font-semibold\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "year_to_date", [], "any", false, false, false, 76), "ytdSSS", [], "any", false, false, false, 76), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD PhilHeath: <span class=\"font-semibold\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "year_to_date", [], "any", false, false, false, 77), "ytdPhilHealth", [], "any", false, false, false, 77), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD PagIbig: <span class=\"font-semibold\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "year_to_date", [], "any", false, false, false, 78), "ytdPagIbig", [], "any", false, false, false, 78), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD Tax With.: <span class=\"font-semibold\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "year_to_date", [], "any", false, false, false, 79), "ytdTax", [], "any", false, false, false, 79), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">YTD Net Pay: <span class=\"font-semibold\"><b>";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "year_to_date", [], "any", false, false, false, 80), "ytdNetPay", [], "any", false, false, false, 80), 2, ".", ","), "html", null, true);
        yield "</b></span></p>
                                        </div>
                                        <div class=\"pl-5\">
                                            <p class=\"mb-2 text-sm uppercase text-slate-500 dark:text-zink-200\"><h6>Payslip Details</h6></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Total Gross Income: <span class=\"font-semibold\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "total_salary", [], "any", false, false, false, 84), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Total Deductions: <span class=\"font-semibold\">";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "total_deduction", [], "any", false, false, false, 85), 2, ".", ","), "html", null, true);
        yield "</span></p>
                                            <p class=\"mb-1 text-slate-500 dark:text-zinc-200\">Net Pay: <span class=\"font-semibold\"><b>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payroll"] ?? null), "net_salary", [], "any", false, false, false, 86), 2, ".", ","), "html", null, true);
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
        return; yield '';
    }

    // line 105
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "payroll/apps-hr-employee-payslip.html.twig";
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
        return array (  246 => 130,  242 => 128,  238 => 126,  235 => 106,  231 => 105,  208 => 86,  204 => 85,  200 => 84,  193 => 80,  189 => 79,  185 => 78,  181 => 77,  177 => 76,  173 => 75,  163 => 68,  159 => 67,  155 => 66,  151 => 65,  144 => 61,  140 => 60,  136 => 59,  132 => 58,  125 => 54,  121 => 53,  117 => 52,  113 => 51,  103 => 44,  97 => 43,  90 => 41,  81 => 34,  78 => 22,  75 => 20,  68 => 8,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "payroll/apps-hr-employee-payslip.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/payroll/apps-hr-employee-payslip.html.twig");
    }
}
