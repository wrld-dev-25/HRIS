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

/* payroll/apps-hr-payroll-payslip.html.twig */
class __TwigTemplate_907c024a7aae62f3c4ebe4bd2c56cb32 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payroll/apps-hr-payroll-payslip.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "payroll/apps-hr-payroll-payslip.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Payslip";
        
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Payroll", "title" => "Payslip"]);
        yield "

                <div class=\"grid grid-cols-1 2xl:grid-cols-12\">
                    <div class=\"relative card 2xl:col-span-8 2xl:col-start-3\">
                        <div class=\"p-8\">
                            ";
        // line 14
        yield "                            <div class=\"text-center\">
                                <h5 class=\"relative before:absolute before:h-[1px] before:inset-x-0 before:-bottom-2.5 inline-block before:bg-gradient-to-r before:from-white dark:before:from-zink-700 before:via-custom-500 before:to-white dark:before:to-zink-700 dark:before:via-custom-500\">Salary Slip</h5>
                            </div>
                            
                            <div class=\"mt-16\">
                                <p class=\"mb-2 text-slate-500 dark:text-zink-200\">Employee ID: <span class=\"font-semibold text-slate-800 dark:text-zink-50\">#TWE1001524</span></p>
                                <p class=\"mb-2 text-slate-500 dark:text-zink-200\">Employee Name: <span class=\"font-semibold text-slate-800 dark:text-zink-50\">Patricia Garcia</span></p>
                                <p class=\"mb-2 text-slate-500 dark:text-zink-200\">Experience: <span class=\"font-semibold text-slate-800 dark:text-zink-50\">2 Year</span></p>
                                <p class=\"text-slate-500 dark:text-zink-200\">Create Date: <span class=\"font-semibold text-slate-800 dark:text-zink-50\">08 Oct 2023</span></p>
                            </div>

                            <div class=\"mt-10 overflow-x-auto\">
                                <table class=\"w-full whitespace-nowrap\">
                                    <thead class=\"ltr:text-left rtl:text-right bg-slate-100 dark:bg-zink-600\">
                                        <tr>
                                            <th class=\"px-3.5 py-2.5 font-semibold border border-transparent\">Month</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border border-transparent\">Salary Amount</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border border-transparent\">Deductions(TDS)</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border border-transparent\">Professional Tax</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border border-transparent\">Provident Fund</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border border-transparent\">Net Payable</th>
                                            <th class=\"px-3.5 py-2.5 font-semibold border border-transparent\">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">Oct, 2023</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">₱25,000</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">₱800</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">₱150</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">₱500</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">₱23,550</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\"><span class=\"px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-green-100 border-green-200 text-green-500 dark:bg-green-500/20 dark:border-green-500/20\">Paid</span></td>
                                        </tr>
                                        <tr>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">Nov, 2023</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">₱25,000</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">₱800</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">₱150</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">₱500</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">₱23,550</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\"><span class=\"px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-green-100 border-green-200 text-green-500 dark:bg-green-500/20 dark:border-green-500/20\">Paid</span></td>
                                        </tr>
                                        <tr>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">Dec, 2023</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">₱25,000</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">₱800</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">₱150</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">₱500</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\">₱23,550</td>
                                            <td class=\"px-3.5 py-2.5 border border-transparent\"><span class=\"px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-green-100 border-green-200 text-green-500 dark:bg-green-500/20 dark:border-green-500/20\">Paid</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            ";
        // line 81
        yield "                        </div>
                    </div>
                </div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 87
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        yield "
<!-- App js -->
<script src=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 92
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "payroll/apps-hr-payroll-payslip.html.twig";
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
        return array (  171 => 92,  167 => 90,  163 => 88,  156 => 87,  144 => 81,  87 => 14,  79 => 6,  76 => 5,  69 => 4,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "payroll/apps-hr-payroll-payslip.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\payroll\\apps-hr-payroll-payslip.html.twig");
    }
}
