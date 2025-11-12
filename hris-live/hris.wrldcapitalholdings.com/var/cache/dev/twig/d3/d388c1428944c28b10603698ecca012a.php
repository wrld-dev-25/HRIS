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

/* payroll_reports/payroll_reports_generation.html.twig */
class __TwigTemplate_b0f9f8689bba422f05a66b5609d2404c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payroll_reports/payroll_reports_generation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payroll_reports/payroll_reports_generation.html.twig"));

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

        yield "Payroll Generation & Reports";
        
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
        yield "  ";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Payroll Administration", "title" => "Payroll Reports"]);
        yield "

  <div class=\"grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4\">

    ";
        // line 10
        yield "    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Timesheet</a></h5>
        </div>
        <form action=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_mandatories_report");
        yield "\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"gen_timesheet\" placeholder=\"Select Date\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_timesheet\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\">
              <option value=\"\">All Companies / Agencies</option>
              ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companyList"]) || array_key_exists("companyList", $context) ? $context["companyList"] : (function () { throw new RuntimeError('Variable "companyList" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["companyItem"]) {
            // line 25
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "name", [], "any", false, false, false, 25), "html", null, true);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['companyItem'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    ";
        // line 37
        yield "    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Payroll Sheet</a></h5>
        </div>
        <form action=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_payroll_sheet");
        yield "\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"payroll_sheet_range\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_payrollsheet\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\">
              <option value=\"\">All Companies / Agencies</option>
              ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companyList"]) || array_key_exists("companyList", $context) ? $context["companyList"] : (function () { throw new RuntimeError('Variable "companyList" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["companyItem"]) {
            // line 52
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "id", [], "any", false, false, false, 52), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "name", [], "any", false, false, false, 52), "html", null, true);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['companyItem'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    ";
        // line 64
        yield "    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Payroll Register Report</a></h5>
        </div>
        <form action=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_payroll_register");
        yield "\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"payroll_register_range\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_payrollregister\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\">
              <option value=\"\">All Companies / Agencies</option>
              ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companyList"]) || array_key_exists("companyList", $context) ? $context["companyList"] : (function () { throw new RuntimeError('Variable "companyList" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["companyItem"]) {
            // line 79
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "id", [], "any", false, false, false, 79), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "name", [], "any", false, false, false, 79), "html", null, true);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['companyItem'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    ";
        // line 91
        yield "    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Payroll Summary</a></h5>
        </div>
        <form action=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_payrollsummary");
        yield "\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"payroll_summary_range\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_payrollsummary\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\">
              <option value=\"\">All Companies / Agencies</option>
              ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companyList"]) || array_key_exists("companyList", $context) ? $context["companyList"] : (function () { throw new RuntimeError('Variable "companyList" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["companyItem"]) {
            // line 106
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "id", [], "any", false, false, false, 106), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "name", [], "any", false, false, false, 106), "html", null, true);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['companyItem'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    ";
        // line 118
        yield "    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Salary Adjustment Report</a></h5>
        </div>
        <form action=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_salaryadjustment_report");
        yield "\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"salary_adjustment_range\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_salaryadjustment\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\">
              <option value=\"\">All Companies / Agencies</option>
              ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companyList"]) || array_key_exists("companyList", $context) ? $context["companyList"] : (function () { throw new RuntimeError('Variable "companyList" does not exist.', 132, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["companyItem"]) {
            // line 133
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "id", [], "any", false, false, false, 133), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "name", [], "any", false, false, false, 133), "html", null, true);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['companyItem'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    ";
        // line 145
        yield "    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Tax Shield Report</a></h5>
        </div>
        <form action=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_taxshield_report");
        yield "\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"taxshield_range\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_taxshield\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\">
              <option value=\"\">All Companies / Agencies</option>
              ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companyList"]) || array_key_exists("companyList", $context) ? $context["companyList"] : (function () { throw new RuntimeError('Variable "companyList" does not exist.', 159, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["companyItem"]) {
            // line 160
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "id", [], "any", false, false, false, 160), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "name", [], "any", false, false, false, 160), "html", null, true);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['companyItem'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        yield "            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    ";
        // line 172
        yield "    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Cash Advance Report</a></h5>
        </div>
        <form action=\"";
        // line 177
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_cashadvance_report");
        yield "\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"cashadvance_range\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_cashadvance\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\">
              <option value=\"\">All Companies / Agencies</option>
              ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companyList"]) || array_key_exists("companyList", $context) ? $context["companyList"] : (function () { throw new RuntimeError('Variable "companyList" does not exist.', 186, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["companyItem"]) {
            // line 187
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "id", [], "any", false, false, false, 187), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "name", [], "any", false, false, false, 187), "html", null, true);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['companyItem'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        yield "            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    ";
        // line 199
        yield "    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Government Dues Report</a></h5>
        </div>
        <form action=\"";
        // line 204
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_govdues");
        yield "\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"govdues_total_range\" required>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    ";
        // line 218
        yield "    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Government Dues per Company Report</a></h5>
        </div>
        <form action=\"";
        // line 223
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_company_govdues");
        yield "\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"govdues_company_range\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_govdues_company\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\" required>
              ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["companyList"]) || array_key_exists("companyList", $context) ? $context["companyList"] : (function () { throw new RuntimeError('Variable "companyList" does not exist.', 231, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["companyItem"]) {
            // line 232
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "id", [], "any", false, false, false, 232), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["companyItem"], "name", [], "any", false, false, false, 232), "html", null, true);
            yield "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['companyItem'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        yield "            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
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

    // line 246
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

        // line 247
        yield "  <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
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
        return "payroll_reports/payroll_reports_generation.html.twig";
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
        return array (  514 => 247,  501 => 246,  480 => 234,  469 => 232,  465 => 231,  454 => 223,  447 => 218,  431 => 204,  424 => 199,  413 => 189,  402 => 187,  398 => 186,  386 => 177,  379 => 172,  368 => 162,  357 => 160,  353 => 159,  341 => 150,  334 => 145,  323 => 135,  312 => 133,  308 => 132,  296 => 123,  289 => 118,  278 => 108,  267 => 106,  263 => 105,  251 => 96,  244 => 91,  233 => 81,  222 => 79,  218 => 78,  206 => 69,  199 => 64,  188 => 54,  177 => 52,  173 => 51,  161 => 42,  154 => 37,  143 => 27,  132 => 25,  128 => 24,  116 => 15,  109 => 10,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Payroll Generation & Reports{% endblock %}

{% block content %}
  {{ component('breadcrumb', { pagetitle: 'Payroll Administration', title: 'Payroll Reports' }) }}

  <div class=\"grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-4\">

    {# Generate Timesheet #}
    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Timesheet</a></h5>
        </div>
        <form action=\"{{ path('generate_mandatories_report') }}\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"gen_timesheet\" placeholder=\"Select Date\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_timesheet\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\">
              <option value=\"\">All Companies / Agencies</option>
              {% for companyItem in companyList %}
                <option value=\"{{ companyItem.id }}\">{{ companyItem.name }}</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    {# Generate Payroll Sheet #}
    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Payroll Sheet</a></h5>
        </div>
        <form action=\"{{ path('generate_payroll_sheet') }}\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"payroll_sheet_range\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_payrollsheet\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\">
              <option value=\"\">All Companies / Agencies</option>
              {% for companyItem in companyList %}
                <option value=\"{{ companyItem.id }}\">{{ companyItem.name }}</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    {# Payroll Register Report #}
    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Payroll Register Report</a></h5>
        </div>
        <form action=\"{{ path('generate_payroll_register') }}\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"payroll_register_range\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_payrollregister\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\">
              <option value=\"\">All Companies / Agencies</option>
              {% for companyItem in companyList %}
                <option value=\"{{ companyItem.id }}\">{{ companyItem.name }}</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    {# Generate Payroll Summary #}
    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Payroll Summary</a></h5>
        </div>
        <form action=\"{{ path('generate_payrollsummary') }}\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"payroll_summary_range\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_payrollsummary\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\">
              <option value=\"\">All Companies / Agencies</option>
              {% for companyItem in companyList %}
                <option value=\"{{ companyItem.id }}\">{{ companyItem.name }}</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    {# Generate Salary Adjustment Report #}
    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Salary Adjustment Report</a></h5>
        </div>
        <form action=\"{{ path('generate_salaryadjustment_report') }}\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"salary_adjustment_range\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_salaryadjustment\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\">
              <option value=\"\">All Companies / Agencies</option>
              {% for companyItem in companyList %}
                <option value=\"{{ companyItem.id }}\">{{ companyItem.name }}</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    {# Generate Tax Shield Report #}
    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Tax Shield Report</a></h5>
        </div>
        <form action=\"{{ path('generate_taxshield_report') }}\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"taxshield_range\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_taxshield\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\">
              <option value=\"\">All Companies / Agencies</option>
              {% for companyItem in companyList %}
                <option value=\"{{ companyItem.id }}\">{{ companyItem.name }}</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    {# Generate Cash Advance Report #}
    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Cash Advance Report</a></h5>
        </div>
        <form action=\"{{ path('generate_cashadvance_report') }}\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"cashadvance_range\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_cashadvance\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\">
              <option value=\"\">All Companies / Agencies</option>
              {% for companyItem in companyList %}
                <option value=\"{{ companyItem.id }}\">{{ companyItem.name }}</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    {# ✅ Generate Government Dues (TOTAL) — no dropdown now #}
    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Government Dues Report</a></h5>
        </div>
        <form action=\"{{ path('generate_govdues') }}\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"govdues_total_range\" required>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

    {# Generate Government Dues PER COMPANY #}
    <div class=\"card view-payroll_reports\">
      <div class=\"card-body\">
        <div class=\"mt-4 text-center\">
          <h5 class=\"mb-1 text-16\"><a href=\"#!\">Generate Government Dues per Company Report</a></h5>
        </div>
        <form action=\"{{ path('generate_company_govdues') }}\" method=\"POST\" target=\"_blank\">
          <div class=\"mt-4\">
            <label class=\"inline-block mb-2 text-base font-medium\">Date Range</label>
            <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\"
                   data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-range-date=\"true\" placeholder=\"Select Date\" id=\"govdues_company_range\" required>
          </div>
          <div class=\"mt-4\">
            <select id=\"company_id_govdues_company\" name=\"company_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 dark:bg-zink-700 dark:text-zink-100\" required>
              {% for companyItem in companyList %}
                <option value=\"{{ companyItem.id }}\">{{ companyItem.name }}</option>
              {% endfor %}
            </select>
          </div>
          <div class=\"flex gap-2 mt-5\">
            <button type=\"submit\" class=\"bg-white text-custom-500 btn border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:bg-zink-700 dark:hover:bg-custom-500 dark:ring-custom-400/20 dark:focus:bg-custom-500 grow\">Generate</button>
          </div>
        </form>
      </div>
    </div>

  </div>
{% endblock %}

{% block javascripts %}
  <script src=\"{{ asset('assets/js/app.js') }}\"></script>
{% endblock %}
", "payroll_reports/payroll_reports_generation.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\payroll_reports\\payroll_reports_generation.html.twig");
    }
}
