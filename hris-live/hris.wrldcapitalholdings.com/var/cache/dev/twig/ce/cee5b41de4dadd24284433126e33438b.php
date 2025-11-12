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

/* manpower/apps-emp-project.html.twig */
class __TwigTemplate_204e0a0715dfdc8e117dfced8ebcbe88 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manpower/apps-emp-project.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "manpower/apps-emp-project.html.twig"));

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

        yield "Project";
        
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
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Project", "title" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["employee_project_id"] ?? null), "name", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee_project_id"]) || array_key_exists("employee_project_id", $context) ? $context["employee_project_id"] : (function () { throw new RuntimeError('Variable "employee_project_id" does not exist.', 6, $this->source); })()), "name", [], "any", false, false, false, 6), "Project")) : ("Project"))]);
        yield "
                <style>
                    /* Hide the spinner */
                    input[type=\"number\"]::-webkit-inner-spin-button,
                    input[type=\"number\"]::-webkit-outer-spin-button {
                        -webkit-appearance: none;
                        margin: 0;
                    }
                    input[type=\"number\"] {
                        -moz-appearance: textfield; /* Firefox */
                    }
                </style>
                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"usersTable\">
                            <div class=\"card-body\">
                                <div class=\"flex items-center\">
                                    <h6 class=\"text-15 grow\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["employee_project_id"] ?? null), "name", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee_project_id"]) || array_key_exists("employee_project_id", $context) ? $context["employee_project_id"] : (function () { throw new RuntimeError('Variable "employee_project_id" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "")) : ("")), "html", null, true);
        yield "</h6>
                                    ";
        // line 24
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["employee_project_id"]) || array_key_exists("employee_project_id", $context) ? $context["employee_project_id"] : (function () { throw new RuntimeError('Variable "employee_project_id" does not exist.', 24, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "                                        <div class=\"add-emp_project shrink-0\">
                                            <button data-modal-target=\"AddEmployee\" type=\"button\" class=\"add-emp-project text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Assign Employee</span></button>
                                        </div>
                                    ";
        }
        // line 28
        yield " 
                                </div>
                            </div>
                            <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                <form action=\"#!\">
                                    <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                                        <div class=\"relative xl:col-span-2\">
                                            <input type=\"text\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search\" autocomplete=\"off\">
                                            <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                        </div>
                                        <div class=\"xl:col-span-3\">
                                            <div>
                                                <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\" id=\"worker_log_date\">
                                            </div>
                                        </div>
                                    <!--end col-->
                                        ";
        // line 55
        yield "                                        <!--end col-->
                                        ";
        // line 66
        yield "                                    <!--end col-->
                                    </div><!--end grid-->
                                </form>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                ";
        // line 73
        yield "                                    <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                        <thead class=\"text-left\">
                                            <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                ";
        // line 81
        yield "                                                ";
        // line 82
        yield "                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-2 font-semibold sort emp_code\" data-sort=\"emp_code\">Employee Code</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-2 font-semibold sort emp_name\" data-sort=\"emp_name\">Employee Name</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                        ";
        // line 89
        yield "                                        <input type=\"hidden\" name=\"project_id\" id=\"project_id\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee_project_id"]) || array_key_exists("employee_project_id", $context) ? $context["employee_project_id"] : (function () { throw new RuntimeError('Variable "employee_project_id" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89), "html", null, true);
        yield "\">
                                        ";
        // line 90
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["employee_project_id"]) || array_key_exists("employee_project_id", $context) ? $context["employee_project_id"] : (function () { throw new RuntimeError('Variable "employee_project_id" does not exist.', 90, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "                                            ";
            // line 92
            yield "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee_project_id"]) || array_key_exists("employee_project_id", $context) ? $context["employee_project_id"] : (function () { throw new RuntimeError('Variable "employee_project_id" does not exist.', 92, $this->source); })()), "employeeProjects", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["emp_prod_item"]) {
                // line 93
                yield "                                                ";
                if ((($tmp =  !(CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "archived", [], "any", false, false, false, 93) === true)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 94
                    yield "                                                    ";
                    // line 95
                    yield "                                                    
                                                    <tr class=\"employee-row relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\" data-employee-id=\"";
                    // line 96
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "employee", [], "any", false, false, false, 96), "id", [], "any", false, false, false, 96), "html", null, true);
                    yield "\">
                                                        <td style=\"cursor: pointer;\" class=\"text-custom-500 px-3.5 py-2.5 first:pl-5 last:pr-5 emp_code clickable-row\" data-target=\"#blockTable";
                    // line 97
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "id", [], "any", false, false, false, 97), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "employee", [], "any", false, false, false, 97), "employee_code", [], "any", false, false, false, 97), "html", null, true);
                    yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 emp_name\">";
                    // line 98
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "employee", [], "any", false, false, false, 98), "extension", [], "any", false, false, false, 98), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "employee", [], "any", false, false, false, 98), "last_name", [], "any", false, false, false, 98), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "employee", [], "any", false, false, false, 98), "first_name", [], "any", false, false, false, 98), "html", null, true);
                    yield "</td>

                                                        ";
                    // line 100
                    if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "employee", [], "any", false, false, false, 100), "user", [], "any", false, false, false, 100), "emp_shift", [], "any", false, false, false, 100))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 101
                        yield "                                                            ";
                        // line 102
                        yield "                                                            ";
                        $context["totalHoursMinusLunch"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "employee", [], "any", false, false, false, 102), "user", [], "any", false, false, false, 102), "emp_shift", [], "any", false, false, false, 102), "total_hours_minus_lunch", [], "any", false, false, false, 102);
                        // line 103
                        yield "                                                        ";
                    } else {
                        // line 104
                        yield "                                                            ";
                        $context["totalHoursMinusLunch"] = 0;
                        // line 105
                        yield "                                                            ";
                        // line 106
                        yield "                                                        ";
                    }
                    // line 107
                    yield "
                                                        ";
                    // line 108
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "is_assigned", [], "any", false, false, false, 108) === false)) {
                        // line 109
                        yield "                                                            ";
                        $context["is_task_hidden"] = "Style=display:none";
                        // line 110
                        yield "                                                        ";
                    } else {
                        // line 111
                        yield "                                                            ";
                        $context["is_task_hidden"] = "";
                        // line 112
                        yield "                                                        ";
                    }
                    // line 113
                    yield "                                                        
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                            <div class=\"action-emp_project relative dropdown\">
                                                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                    <li>
                                                                        <a data-modal-target=\"addEmpTask";
                    // line 119
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "id", [], "any", false, false, false, 119), "html", null, true);
                    yield "\" data-emp-time=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalHoursMinusLunch"]) || array_key_exists("totalHoursMinusLunch", $context) ? $context["totalHoursMinusLunch"] : (function () { throw new RuntimeError('Variable "totalHoursMinusLunch" does not exist.', 119, $this->source); })()), "html", null, true);
                    yield "\"  class=\"add-emp_project addEmpTask block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["is_task_hidden"]) || array_key_exists("is_task_hidden", $context) ? $context["is_task_hidden"] : (function () { throw new RuntimeError('Variable "is_task_hidden" does not exist.', 119, $this->source); })()), "html", null, true);
                    yield "><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Add Task</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-modal-target=\"deleteModal";
                    // line 122
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "id", [], "any", false, false, false, 122), "html", null, true);
                    yield "\" class=\"delete-emp_project block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" style=\"position: relative; z-index: 10;\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr id=\"blockTable";
                    // line 129
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "id", [], "any", false, false, false, 129), "html", null, true);
                    yield "\" hidden>
                                                        <td colspan=\"3\">
                                                            <div class=\"overflow-x-auto\" style=\"max-height:300px !important\">
                                                                <table class=\"w-full mx-5 mb-5\">
                                                                    <thead class=\"ltr:text-left rtl:text-right\">
                                                                        <tr>
                                                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Task Description</th>
                                                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Date</th>
                                                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Assigned Time (in hours & minutes)</th>
                                                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Approval Status</th>
                                                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id=\"blockBody";
                    // line 142
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "employee", [], "any", false, false, false, 142), "id", [], "any", false, false, false, 142), "html", null, true);
                    yield "\">
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                ";
                }
                // line 149
                yield "                                                
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['emp_prod_item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "                                        ";
        }
        // line 152
        yield "                                        </tbody>
                                    </table>
                                    ";
        // line 154
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["employee_project_id"]) || array_key_exists("employee_project_id", $context) ? $context["employee_project_id"] : (function () { throw new RuntimeError('Variable "employee_project_id" does not exist.', 154, $this->source); })()))) {
            // line 155
            yield "                                        <div class=\"noresult\">
                                            <div class=\"py-6 text-center\">
                                                <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                                <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                            </div>
                                        </div>
                                    ";
        }
        // line 162
        yield "                                </div>
                                ";
        // line 200
        yield "                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->
     
";
        // line 206
        yield "<div id=\"AddEmployee\" modal-center  class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Assign Employee</h5>
        </div>
        <form action=\"";
        // line 211
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_emp_proj");
        yield "\" method=\"post\">
            <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                <input type=\"hidden\" name=\"proj_id\" value=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee_project_id"]) || array_key_exists("employee_project_id", $context) ? $context["employee_project_id"] : (function () { throw new RuntimeError('Variable "employee_project_id" does not exist.', 213, $this->source); })()), "id", [], "any", false, false, false, 213), "html", null, true);
        yield "\">
                <div class=\"mb-3 z-99999\" style=\"height:300px\">
                    <label for=\"employee\" class=\"inline-block mb-2 text-base font-medium\">Employee</label>
                    <select class=\" z-999 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices multiple id=\"employee_id\" name=\"employee_id[]\">
                        ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["employees_list"]) || array_key_exists("employees_list", $context) ? $context["employees_list"] : (function () { throw new RuntimeError('Variable "employees_list" does not exist.', 217, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["empItem"]) {
            // line 218
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["empItem"], "id", [], "any", false, false, false, 218), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["empItem"], "employee_code", [], "any", false, false, false, 218), "html", null, true);
            yield " : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["empItem"], "last_name", [], "any", false, false, false, 218), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["empItem"], "first_name", [], "any", false, false, false, 218), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['empItem'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        yield "                    </select>
                </div>
            </div>
            <div class=\"flex justify-end gap-2 mt-4 p-4\">
                <button type=\"button\" data-modal-close=\"AddEmployee\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                <button type=\"submit\" id=\"add_submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Submit</button>
            </div>
        </form>
    </div>
</div>
<!--end add user-->

";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee_project_id"]) || array_key_exists("employee_project_id", $context) ? $context["employee_project_id"] : (function () { throw new RuntimeError('Variable "employee_project_id" does not exist.', 232, $this->source); })()), "employeeProjects", [], "any", false, false, false, 232));
        foreach ($context['_seq'] as $context["_key"] => $context["emp_prod_item"]) {
            // line 233
            yield "<div id=\"addEmpTask";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "id", [], "any", false, false, false, 233), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Create New Task</h5>
            <button data-modal-close=\"addEmpTask";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "id", [], "any", false, false, false, 237), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <form action=\"";
            // line 239
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_emp_task");
            yield "\" method=\"post\">
            <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                <input type=\"hidden\" name=\"emp_project\" value=\"";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "id", [], "any", false, false, false, 241), "html", null, true);
            yield "\">
                <input type=\"hidden\" name=\"proj_id\" value=\"";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee_project_id"]) || array_key_exists("employee_project_id", $context) ? $context["employee_project_id"] : (function () { throw new RuntimeError('Variable "employee_project_id" does not exist.', 242, $this->source); })()), "id", [], "any", false, false, false, 242), "html", null, true);
            yield "\">
                <div class=\"mb-3\">
                    <label for=\"task_desc\" class=\"inline-block mb-2 text-base font-medium\">Task Description</label>
                    <input type=\"text\" id=\"task_desc\" name=\"task_desc\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter task description\" value=\"\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"task_date\" class=\"inline-block mb-2 text-base font-medium\">Task Date</label>
                    <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\" id=\"task_date\" name=\"task_date\" placeholder=\"\" value=\"\">
                </div>
                <div class=\"mb-3\">
                    ";
            // line 253
            yield "                    ";
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "employee", [], "any", false, false, false, 253), "user", [], "any", false, false, false, 253), "emp_shift", [], "any", false, false, false, 253))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 254
                yield "                        ";
                // line 255
                yield "                        ";
                $context["totalHoursMinusLunch"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "employee", [], "any", false, false, false, 255), "user", [], "any", false, false, false, 255), "emp_shift", [], "any", false, false, false, 255), "total_hours_minus_lunch", [], "any", false, false, false, 255);
                // line 256
                yield "                    ";
            } else {
                // line 257
                yield "                        ";
                $context["totalHoursMinusLunch"] = 0;
                // line 258
                yield "                        ";
                // line 259
                yield "                    ";
            }
            // line 260
            yield "                    ";
            $context["totalMinutes"] = (isset($context["totalHoursMinusLunch"]) || array_key_exists("totalHoursMinusLunch", $context) ? $context["totalHoursMinusLunch"] : (function () { throw new RuntimeError('Variable "totalHoursMinusLunch" does not exist.', 260, $this->source); })());
            // line 261
            yield "                    ";
            $context["hours"] = (int) floor(((isset($context["totalMinutes"]) || array_key_exists("totalMinutes", $context) ? $context["totalMinutes"] : (function () { throw new RuntimeError('Variable "totalMinutes" does not exist.', 261, $this->source); })()) / 60));
            // line 262
            yield "                    ";
            $context["minutes"] = ((isset($context["totalMinutes"]) || array_key_exists("totalMinutes", $context) ? $context["totalMinutes"] : (function () { throw new RuntimeError('Variable "totalMinutes" does not exist.', 262, $this->source); })()) % 60);
            // line 263
            yield "
                    <label for=\"assigned_hours\" class=\"inline-block mb-2 text-base font-medium\">Assigned Time (in hours & minutes)</label>
                    <input type=\"number\" id=\"assigned_hours\" data-provider=\"timepickr\" data-time-hrs=\"true\" name=\"assigned_hours\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 flatpickr-input active\" placeholder=\"Enter rendered hours\" data-default-time=\"";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hours"]) || array_key_exists("hours", $context) ? $context["hours"] : (function () { throw new RuntimeError('Variable "hours" does not exist.', 265, $this->source); })()), "html", null, true);
            yield ":";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["minutes"]) || array_key_exists("minutes", $context) ? $context["minutes"] : (function () { throw new RuntimeError('Variable "minutes" does not exist.', 265, $this->source); })()), "html", null, true);
            yield "\" value=\"\" required>
                </div>
            </div>
            <div class=\"flex justify-end gap-2 mt-4 p-4\">
                <button type=\"reset\" data-modal-close=\"addEmpTask";
            // line 269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "id", [], "any", false, false, false, 269), "html", null, true);
            yield "\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Submit</button>
            </div>
        </form>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['emp_prod_item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        yield "<!--end edit user-->

";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee_project_id"]) || array_key_exists("employee_project_id", $context) ? $context["employee_project_id"] : (function () { throw new RuntimeError('Variable "employee_project_id" does not exist.', 278, $this->source); })()), "employeeProjects", [], "any", false, false, false, 278));
        foreach ($context['_seq'] as $context["_key"] => $context["emp_prod_item"]) {
            // line 279
            yield "<div id=\"deleteModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "id", [], "any", false, false, false, 279), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deleteModal";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "id", [], "any", false, false, false, 283), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/delete.png"), "html", null, true);
            yield "\" alt=\"\" class=\"block h-12 mx-auto\">
            <div class=\"mt-5 text-center\">
                <h5 class=\"mb-1\">Are you sure?</h5>
                <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                <div class=\"flex justify-center gap-2 mt-6\">
                <form action=\"";
            // line 290
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("archive_emp_proj");
            yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"emp_proj_id\" value=\"";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "id", [], "any", false, false, false, 291), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"proj_id\" value=\"";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["employee_project_id"]) || array_key_exists("employee_project_id", $context) ? $context["employee_project_id"] : (function () { throw new RuntimeError('Variable "employee_project_id" does not exist.', 292, $this->source); })()), "id", [], "any", false, false, false, 292), "html", null, true);
            yield "\">
                    <button type=\"reset\" data-modal-close=\"deleteModal";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "id", [], "any", false, false, false, 293), "html", null, true);
            yield "\" class=\"bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Yes, Delete It!</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['emp_prod_item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 304
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

        // line 305
        yield "
<script src=\"";
        // line 306
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 307
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-user-list.init.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
<script src=\"";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 313
        yield "
<script>
\$(document).ready(function() {
    //showToast('test','bg-yellow-500')
    // Click event handler for editable cells
    \$('.clickable-row').on('click', function() {
        var target = \$(this).data('target');
        \$(target).toggle();
    });

    \$(document).on('click', '.edit-input', function() {
        var taskId = \$(this).data('edit');
        var inputField = \$('#rendered_hour' + taskId);
        var textParagraph = \$('#rendered_hour_text' + taskId);

        if (inputField.is(':visible')) {
            inputField.hide();
            textParagraph.show();
            \$('.save-input[data-edit=\"' + taskId + '\"]').hide();
            \$('.delete-input[data-edit=\"' + taskId + '\"]').hide();
            \$('.approve-input[data-edit=\"' + taskId + '\"]').show();
            \$('.deny-input[data-edit=\"' + taskId + '\"]').show();
        } else {
            inputField.show();
            textParagraph.hide();
            \$('.save-input[data-edit=\"' + taskId + '\"]').show();
            \$('.delete-input[data-edit=\"' + taskId + '\"]').show();
            \$('.approve-input[data-edit=\"' + taskId + '\"]').hide();
            \$('.deny-input[data-edit=\"' + taskId + '\"]').hide();
        }
    });

    \$(document).on('click', '.save-input', async function() {
        var taskId = \$(this).data('edit');
        console.log(taskId)
        var inputField = \$('#rendered_hour' + taskId);
        var rendered_hour = inputField.val();
        //convert time to valid time format
        var timeParts = rendered_hour.split(':');
        var hours = parseInt(timeParts[0], 10);
        var minutes = parseInt(timeParts[1], 10);
        var totalMinutes = (hours * 60) + minutes;

        var textParagraph = \$('#rendered_hour_text' + taskId);
        var jsonObject = {
            \"assigned_hours\": totalMinutes
            //assigned_hours
        };
        
        var save_task_rendered_hours = await apiCall('POST', 'api/emp-tasks/update/' + taskId, jsonObject);
        console.log('API Call Response:', save_task_rendered_hours);

        if(save_task_rendered_hours){
            inputField.hide();
            textParagraph.text(hours + ' hour/s ' + minutes + ' minutes');
            textParagraph.show()
            \$('.save-input[data-edit=\"' + taskId + '\"]').hide();
            \$('.delete-input[data-edit=\"' + taskId + '\"]').hide();
            \$('.approve-input[data-edit=\"' + taskId + '\"]').show();
            \$('.deny-input[data-edit=\"' + taskId + '\"]').show();
        }

        /*if (inputField.is(':visible')) {
            inputField.hide();
            textParagraph.show();
            \$('.save-input[data-edit=\"' + taskId + '\"]').hide();
            \$('.delete-input[data-edit=\"' + taskId + '\"]').hide();
        } else {
            inputField.show();
            textParagraph.hide();
            \$('.save-input[data-edit=\"' + taskId + '\"]').show();
            \$('.delete-input[data-edit=\"' + taskId + '\"]').show();
        }*/
    });

    \$(document).on('click', '.delete-input', async function() {
        var taskId = \$(this).data('edit');
        console.log(taskId);

        // Perform the API call
        var save_task_rendered_hours = await apiCall('DELETE', 'api/emp-tasks/archive/' + taskId, []);
        console.log('API Call Response:', save_task_rendered_hours.status);

        // Check if the response status indicates success
        if (save_task_rendered_hours) {
            // Remove the closest parent <tr> element
            \$(this).closest('tr').remove();
        } else {
            console.error('Failed to archive task. Status:', save_task_rendered_hours.status);
        }
    });

    \$(document).on('click', '.approve-input', async function() {
        var taskId = \$(this).data('edit');
        var emp_task_status = \$('#emp_task_status' + taskId);
        console.log(taskId);

        // Perform the API call
        var save_task_rendered_hours = await apiCall('POST', 'api/emp-tasks/approve/' + taskId, []);
        console.log('API Call Response:', save_task_rendered_hours.status);
        if(save_task_rendered_hours){
            emp_task_status.text('Approved')
        }
    });

    \$(document).on('click', '.deny-input', async function() {
        var taskId = \$(this).data('edit');
        var emp_task_status = \$('#emp_task_status' + taskId);
        console.log(taskId);

        // Perform the API call
        var save_task_rendered_hours = await apiCall('POST', 'api/emp-tasks/deny/' + taskId, []);
        console.log('API Call Response:', save_task_rendered_hours.status);
        if(save_task_rendered_hours){
            emp_task_status.text('No Attendance')
        }
    });

    \$('#worker_log_date').flatpickr({
        mode: \"range\",
        dateFormat: \"Y-m-d\",
        onChange: function(selectedDates, dateStr, instance) {
            filterTasksByDateRange();
        }
    });

    /*function filterTasksByDateRange() {
        var dateRange = \$('#worker_log_date').val().split(' to ');
        console.log(dateRange)
        if (dateRange.length === 1) {
            var selectedDate = new Date(dateRange[0]);
            \$('.task-row').each(function() {
                var taskDateStr = \$(this).data('task-date');
                var taskDate = new Date(taskDateStr);

                if (taskDate.getTime() === selectedDate.getTime()) {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });
        } else if (dateRange.length === 2) {
            var startDate = new Date(dateRange[0]);
            var endDate = new Date(dateRange[1]);

            // Loop through each task and filter based on the date range
            \$('.task-row').each(function() {
                var taskDateStr = \$(this).data('task-date');
                var taskDate = new Date(taskDateStr);

                if (taskDate >= startDate && taskDate <= endDate) {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });
        }
    }*/

    function filterTasksByDateRange() {
        var dateRange = \$('#worker_log_date').val().split(' to ');
        var projectId = \$('#project_id').val();

        // Ensure both start_date and end_date are present
        var startDate = dateRange[0] || null;
        var endDate = dateRange[1] || dateRange[0] || null; // Use start_date if end_date is missing

        if (!startDate) {
            console.error('Start date is missing.');
            return; // Exit the function if start_date is missing
        }
        
        \$('.employee-row').each(async function() {
            var employeeId = \$(this).data('employee-id');
            \$('#blockBody'+employeeId).html('');
            if (dateRange.length >= 1) {
                var selectedDate = new Date(dateRange[0]);
                var jsonObject = {
                    \"start_date\": startDate,
                    \"end_date\": endDate,
                    \"project_id\": projectId,
                    \"employee_id\": employeeId
                };
                
                var response = await apiCall('POST', 'api/employee-projects/filter', jsonObject);

                if (response && response.tasks && response.tasks.length > 0) {
                    var tasksHtml = '';

                    response.tasks.forEach(function(task_item) {
                        if (!task_item.archived) {
                            var totalMinutes = task_item.assigned_hours;
                            var hours = Math.floor(totalMinutes / 60);
                            var minutes = totalMinutes % 60;

                            var taskStatus = 'No Attendance';
                            if (task_item.approved === true) {
                                taskStatus = 'Approved';
                            } else if (task_item.approved === null) {
                                taskStatus = 'Pending';
                            }
                            editBtn = '';
                            if(taskStatus == 'No Attendance' ||  taskStatus == 'Pending'){
                                editBtn = `<div class=\"edit\">
                                                <button class=\"edit-emp_project flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20 edit-input\" id=\"edit\" data-bs-toggle=\"dropdown\" data-edit=\"\${task_item.id}\"><i data-lucide=\"pencil\" class=\"size-3\"></i></button>
                                            </div>`;
                            }

                            tasksHtml += `
                                <tr class=\"task-row\" data-task-date=\"\${new Date(task_item.date).toISOString().split('T')[0]}\">
                                    <input type=\"hidden\" name=\"task_id\${task_item.id}\" id=\"task_id\${task_item.id}\" value=\"\${task_item.id}\">
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent \">\${task_item.task_desc}</td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">\${new Date(task_item.date).toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' })}</td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">
                                        <p id=\"rendered_hour_text\${task_item.id}\">\${hours} hour/s \${minutes} minutes</p>
                                        <input type=\"text\" data-provider=\"timepickr\" data-time-hrs=\"true\" style=\"width: 100px; display:none;\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 flatpickr-input active\" id=\"rendered_hour\${task_item.id}\" value=\"\${hours}:\${minutes}\">
                                    </td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent \">
                                        <p id=\"emp_task_status\${task_item.id}\">\${taskStatus}</p>
                                    </td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">
                                        <div class=\"flex gap-2\">
                                            \${editBtn}
                                            <div class=\"save\">
                                                <button style=\"display:none;\" class=\"edit-emp_project flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20 save-input\" id=\"usersAction1\" data-bs-toggle=\"dropdown\" data-edit=\"\${task_item.id}\"><i data-lucide=\"save\" class=\"size-3\"></i></button>
                                            </div>
                                            <div class=\"remove\">
                                                <button style=\"display:none;\" class=\"delete-emp_project flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20 delete-input\" id=\"usersAction1\" data-bs-toggle=\"dropdown\" data-edit=\"\${task_item.id}\"><i data-lucide=\"trash-2\" class=\"size-3\"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`;
                        }
                    });
                    // Append the generated HTML to the appropriate table body
                    \$('#blockBody'+employeeId).html(tasksHtml);
                    lucide.createIcons();
                }
            }
        });
    }


    /*function calculateTotalLots(phaseId) {
        let total = 0;
        // Iterate through each tr in the table
        \$('#blockTable'+phaseId+' tbody tr').each(function() {
            // Find the td element with class .editable-cell within the current tr
            let totalLotsCell = \$(this).find('td.editable-cell');
            // Get the text content of the td element and parse as integer
            let totalLots = parseInt(totalLotsCell.text().trim()) || 0;
            total += totalLots;
            console.log(totalLots)
        });
        return total;
    }*/

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

    function getCurrentHalfRange() {
        //let today = new Date();
        let today = new Date();
        let year = today.getFullYear();
        let month = today.getMonth() + 1; // Months are zero indexed, so +1 to get the current month

        let ranges = getSemiMonthlyRanges(year, month);
        let day = today.getDate();

        if (day <= 15) {
            return { half: 'firstHalf', range: ranges.firstHalf };
        } else {
            return { half: 'secondHalf', range: ranges.secondHalf };
        }
    }

    function initialize_date_start(){
        console.log('here')
        console.log(getCurrentHalfRange().range.start)
        var date_range = getCurrentHalfRange().range.start + ' to ' + getCurrentHalfRange().range.end
        \$('#worker_log_date').val(date_range);
        filterTasksByDateRange();
    }

    \$(document).on('click', '.addEmpTask', function() {
        var empShiftTime = \$(this).data('emp-time');
        console.log(empShiftTime)
        //\$('#assigned_hours').val();
    });

    initialize_date_start();
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
        return "manpower/apps-emp-project.html.twig";
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
        return array (  589 => 313,  585 => 311,  579 => 308,  575 => 307,  571 => 306,  568 => 305,  555 => 304,  531 => 293,  527 => 292,  523 => 291,  519 => 290,  511 => 285,  506 => 283,  498 => 279,  494 => 278,  490 => 276,  477 => 269,  468 => 265,  464 => 263,  461 => 262,  458 => 261,  455 => 260,  452 => 259,  450 => 258,  447 => 257,  444 => 256,  441 => 255,  439 => 254,  436 => 253,  423 => 242,  419 => 241,  414 => 239,  409 => 237,  401 => 233,  397 => 232,  383 => 220,  368 => 218,  364 => 217,  357 => 213,  352 => 211,  345 => 206,  338 => 200,  335 => 162,  326 => 155,  324 => 154,  320 => 152,  317 => 151,  310 => 149,  300 => 142,  284 => 129,  274 => 122,  264 => 119,  256 => 113,  253 => 112,  250 => 111,  247 => 110,  244 => 109,  242 => 108,  239 => 107,  236 => 106,  234 => 105,  231 => 104,  228 => 103,  225 => 102,  223 => 101,  221 => 100,  212 => 98,  206 => 97,  202 => 96,  199 => 95,  197 => 94,  194 => 93,  189 => 92,  187 => 91,  185 => 90,  180 => 89,  172 => 82,  170 => 81,  165 => 73,  157 => 66,  154 => 55,  136 => 28,  130 => 25,  128 => 24,  124 => 23,  104 => 6,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Project{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Project', title: employee_project_id.name|default('Project') }) }}
                <style>
                    /* Hide the spinner */
                    input[type=\"number\"]::-webkit-inner-spin-button,
                    input[type=\"number\"]::-webkit-outer-spin-button {
                        -webkit-appearance: none;
                        margin: 0;
                    }
                    input[type=\"number\"] {
                        -moz-appearance: textfield; /* Firefox */
                    }
                </style>
                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"usersTable\">
                            <div class=\"card-body\">
                                <div class=\"flex items-center\">
                                    <h6 class=\"text-15 grow\">{{ employee_project_id.name|default('') }}</h6>
                                    {% if employee_project_id is not empty %}
                                        <div class=\"add-emp_project shrink-0\">
                                            <button data-modal-target=\"AddEmployee\" type=\"button\" class=\"add-emp-project text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Assign Employee</span></button>
                                        </div>
                                    {% endif %} 
                                </div>
                            </div>
                            <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                <form action=\"#!\">
                                    <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                                        <div class=\"relative xl:col-span-2\">
                                            <input type=\"text\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search\" autocomplete=\"off\">
                                            <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                        </div>
                                        <div class=\"xl:col-span-3\">
                                            <div>
                                                <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\" id=\"worker_log_date\">
                                            </div>
                                        </div>
                                    <!--end col-->
                                        {# 
                                        <div class=\"xl:col-span-2\">
                                            <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"choices-single-default\">
                                                <option value=\"\">Select Status</option>
                                                <option value=\"Verified\">Verified</option>
                                                <option value=\"Waiting\">Waiting</option>
                                                <option value=\"Rejected\">Rejected</option>
                                                <option value=\"Hidden\">Hidden</option>
                                            </select>
                                        </div> 
                                        #}
                                        <!--end col-->
                                        {# 
                                        <div class=\"xl:col-span-3 xl:col-start-10\">
                                            <div class=\"flex gap-2 xl:justify-end\">
                                                <div>
                                                    <button type=\"button\" class=\"bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20\"><i data-lucide=\"download\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Import</span></button>
                                                </div>
                                                <button class=\"flex items-center justify-center size-[37.5px] p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\"><i data-lucide=\"sliders-horizontal\" class=\"size-4\"></i></button>
                                            </div>
                                        </div>
                                         #}
                                    <!--end col-->
                                    </div><!--end grid-->
                                </form>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                {# {{ dump(employee_project_id) }} #}
                                    <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                        <thead class=\"text-left\">
                                            <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">
                                                    <div class=\"flex items-center h-full\">
                                                        <input id=\"CheckboxAll\" class=\"size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800 cursor-pointer\" type=\"checkbox\">
                                                    </div>
                                                </th> #}
                                                {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"user-id\">User ID</th> #}
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-2 font-semibold sort emp_code\" data-sort=\"emp_code\">Employee Code</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-2 font-semibold sort emp_name\" data-sort=\"emp_name\">Employee Name</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                        {# {{ dump(employee_project_id) }} #}
                                        <input type=\"hidden\" name=\"project_id\" id=\"project_id\" value=\"{{employee_project_id.id}}\">
                                        {% if employee_project_id is not empty %}
                                            {# {{ dump(employee_project_id.employeeProjects) }} #}
                                            {% for emp_prod_item in employee_project_id.employeeProjects %}
                                                {% if emp_prod_item.archived is not same as(true) %}
                                                    {# check emp shift is existing #}
                                                    
                                                    <tr class=\"employee-row relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\" data-employee-id=\"{{ emp_prod_item.employee.id }}\">
                                                        <td style=\"cursor: pointer;\" class=\"text-custom-500 px-3.5 py-2.5 first:pl-5 last:pr-5 emp_code clickable-row\" data-target=\"#blockTable{{ emp_prod_item.id }}\">{{ emp_prod_item.employee.employee_code}}</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 emp_name\">{{ emp_prod_item.employee.extension }} {{ emp_prod_item.employee.last_name }}, {{ emp_prod_item.employee.first_name }}</td>

                                                        {% if emp_prod_item.employee.user.emp_shift is not null %}
                                                            {# The property exists and is not null #}
                                                            {% set totalHoursMinusLunch = emp_prod_item.employee.user.emp_shift.total_hours_minus_lunch %}
                                                        {% else %}
                                                            {% set totalHoursMinusLunch = 0 %}
                                                            {# Handle the case where the property is null or does not exist #}
                                                        {% endif %}

                                                        {% if emp_prod_item.is_assigned is same as(false) %}
                                                            {% set is_task_hidden = 'Style=display:none' %}
                                                        {% else %}
                                                            {% set is_task_hidden = '' %}
                                                        {% endif %}
                                                        
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                            <div class=\"action-emp_project relative dropdown\">
                                                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                    <li>
                                                                        <a data-modal-target=\"addEmpTask{{emp_prod_item.id}}\" data-emp-time=\"{{totalHoursMinusLunch}}\"  class=\"add-emp_project addEmpTask block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" {{is_task_hidden}}><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Add Task</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-modal-target=\"deleteModal{{emp_prod_item.id}}\" class=\"delete-emp_project block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" style=\"position: relative; z-index: 10;\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr id=\"blockTable{{emp_prod_item.id}}\" hidden>
                                                        <td colspan=\"3\">
                                                            <div class=\"overflow-x-auto\" style=\"max-height:300px !important\">
                                                                <table class=\"w-full mx-5 mb-5\">
                                                                    <thead class=\"ltr:text-left rtl:text-right\">
                                                                        <tr>
                                                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Task Description</th>
                                                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Date</th>
                                                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Assigned Time (in hours & minutes)</th>
                                                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Approval Status</th>
                                                                            <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id=\"blockBody{{emp_prod_item.employee.id}}\">
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                {% endif %}
                                                
                                            {% endfor %}
                                        {% endif %}
                                        </tbody>
                                    </table>
                                    {% if employee_project_id is empty %}
                                        <div class=\"noresult\">
                                            <div class=\"py-6 text-center\">
                                                <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                                <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                            </div>
                                        </div>
                                    {% endif %}
                                </div>
                                {# <div class=\"flex flex-col items-center mt-8 md:flex-row\">
                                    <div class=\"mb-4 grow md:mb-0\">
                                        <p class=\"text-slate-500 dark:text-zink-200\">Showing <b>10</b> of <b>57</b> Results</p>
                                    </div>
                                    <ul class=\"flex flex-wrap items-center gap-2\">
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
                                            <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\">5</a>
                                        </li>
                                        <li>
                                            <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\">6</a>
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
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->
     
{# {{ dump(employee_project_id.employeeProjects) }} #}
<div id=\"AddEmployee\" modal-center  class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Assign Employee</h5>
        </div>
        <form action=\"{{ path('add_emp_proj') }}\" method=\"post\">
            <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                <input type=\"hidden\" name=\"proj_id\" value=\"{{employee_project_id.id}}\">
                <div class=\"mb-3 z-99999\" style=\"height:300px\">
                    <label for=\"employee\" class=\"inline-block mb-2 text-base font-medium\">Employee</label>
                    <select class=\" z-999 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices multiple id=\"employee_id\" name=\"employee_id[]\">
                        {% for empItem in employees_list %}
                            <option value=\"{{empItem.id}}\">{{empItem.employee_code}} : {{empItem.last_name }}, {{empItem.first_name}}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            <div class=\"flex justify-end gap-2 mt-4 p-4\">
                <button type=\"button\" data-modal-close=\"AddEmployee\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                <button type=\"submit\" id=\"add_submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Submit</button>
            </div>
        </form>
    </div>
</div>
<!--end add user-->

{% for emp_prod_item in employee_project_id.employeeProjects %}
<div id=\"addEmpTask{{emp_prod_item.id}}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Create New Task</h5>
            <button data-modal-close=\"addEmpTask{{emp_prod_item.id}}\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <form action=\"{{ path('submit_emp_task') }}\" method=\"post\">
            <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                <input type=\"hidden\" name=\"emp_project\" value=\"{{emp_prod_item.id}}\">
                <input type=\"hidden\" name=\"proj_id\" value=\"{{employee_project_id.id}}\">
                <div class=\"mb-3\">
                    <label for=\"task_desc\" class=\"inline-block mb-2 text-base font-medium\">Task Description</label>
                    <input type=\"text\" id=\"task_desc\" name=\"task_desc\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter task description\" value=\"\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"task_date\" class=\"inline-block mb-2 text-base font-medium\">Task Date</label>
                    <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\" id=\"task_date\" name=\"task_date\" placeholder=\"\" value=\"\">
                </div>
                <div class=\"mb-3\">
                    {# get assigned time using shifts #}
                    {% if emp_prod_item.employee.user.emp_shift is not null %}
                        {# The property exists and is not null #}
                        {% set totalHoursMinusLunch = emp_prod_item.employee.user.emp_shift.total_hours_minus_lunch %}
                    {% else %}
                        {% set totalHoursMinusLunch = 0 %}
                        {# Handle the case where the property is null or does not exist #}
                    {% endif %}
                    {% set totalMinutes = totalHoursMinusLunch %}
                    {% set hours = totalMinutes // 60 %}
                    {% set minutes = totalMinutes % 60 %}

                    <label for=\"assigned_hours\" class=\"inline-block mb-2 text-base font-medium\">Assigned Time (in hours & minutes)</label>
                    <input type=\"number\" id=\"assigned_hours\" data-provider=\"timepickr\" data-time-hrs=\"true\" name=\"assigned_hours\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 flatpickr-input active\" placeholder=\"Enter rendered hours\" data-default-time=\"{{hours}}:{{minutes}}\" value=\"\" required>
                </div>
            </div>
            <div class=\"flex justify-end gap-2 mt-4 p-4\">
                <button type=\"reset\" data-modal-close=\"addEmpTask{{emp_prod_item.id}}\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Submit</button>
            </div>
        </form>
    </div>
</div>
{% endfor %}
<!--end edit user-->

{% for emp_prod_item in employee_project_id.employeeProjects %}
<div id=\"deleteModal{{emp_prod_item.id}}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deleteModal{{emp_prod_item.id}}\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"{{asset('assets/images/delete.png')}}\" alt=\"\" class=\"block h-12 mx-auto\">
            <div class=\"mt-5 text-center\">
                <h5 class=\"mb-1\">Are you sure?</h5>
                <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                <div class=\"flex justify-center gap-2 mt-6\">
                <form action=\"{{path('archive_emp_proj')}}\" method=\"post\">
                    <input type=\"hidden\" name=\"emp_proj_id\" value=\"{{ emp_prod_item.id }}\">
                    <input type=\"hidden\" name=\"proj_id\" value=\"{{employee_project_id.id}}\">
                    <button type=\"reset\" data-modal-close=\"deleteModal{{emp_prod_item.id}}\" class=\"bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Yes, Delete It!</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endfor %}
{% endblock %}
    
{% block javascripts %}

<script src=\"{{ asset('assets/libs/list.js/list.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/list.pagination.js/list.pagination.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/pages/apps-user-list.init.js') }}\"></script>

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

<script>
\$(document).ready(function() {
    //showToast('test','bg-yellow-500')
    // Click event handler for editable cells
    \$('.clickable-row').on('click', function() {
        var target = \$(this).data('target');
        \$(target).toggle();
    });

    \$(document).on('click', '.edit-input', function() {
        var taskId = \$(this).data('edit');
        var inputField = \$('#rendered_hour' + taskId);
        var textParagraph = \$('#rendered_hour_text' + taskId);

        if (inputField.is(':visible')) {
            inputField.hide();
            textParagraph.show();
            \$('.save-input[data-edit=\"' + taskId + '\"]').hide();
            \$('.delete-input[data-edit=\"' + taskId + '\"]').hide();
            \$('.approve-input[data-edit=\"' + taskId + '\"]').show();
            \$('.deny-input[data-edit=\"' + taskId + '\"]').show();
        } else {
            inputField.show();
            textParagraph.hide();
            \$('.save-input[data-edit=\"' + taskId + '\"]').show();
            \$('.delete-input[data-edit=\"' + taskId + '\"]').show();
            \$('.approve-input[data-edit=\"' + taskId + '\"]').hide();
            \$('.deny-input[data-edit=\"' + taskId + '\"]').hide();
        }
    });

    \$(document).on('click', '.save-input', async function() {
        var taskId = \$(this).data('edit');
        console.log(taskId)
        var inputField = \$('#rendered_hour' + taskId);
        var rendered_hour = inputField.val();
        //convert time to valid time format
        var timeParts = rendered_hour.split(':');
        var hours = parseInt(timeParts[0], 10);
        var minutes = parseInt(timeParts[1], 10);
        var totalMinutes = (hours * 60) + minutes;

        var textParagraph = \$('#rendered_hour_text' + taskId);
        var jsonObject = {
            \"assigned_hours\": totalMinutes
            //assigned_hours
        };
        
        var save_task_rendered_hours = await apiCall('POST', 'api/emp-tasks/update/' + taskId, jsonObject);
        console.log('API Call Response:', save_task_rendered_hours);

        if(save_task_rendered_hours){
            inputField.hide();
            textParagraph.text(hours + ' hour/s ' + minutes + ' minutes');
            textParagraph.show()
            \$('.save-input[data-edit=\"' + taskId + '\"]').hide();
            \$('.delete-input[data-edit=\"' + taskId + '\"]').hide();
            \$('.approve-input[data-edit=\"' + taskId + '\"]').show();
            \$('.deny-input[data-edit=\"' + taskId + '\"]').show();
        }

        /*if (inputField.is(':visible')) {
            inputField.hide();
            textParagraph.show();
            \$('.save-input[data-edit=\"' + taskId + '\"]').hide();
            \$('.delete-input[data-edit=\"' + taskId + '\"]').hide();
        } else {
            inputField.show();
            textParagraph.hide();
            \$('.save-input[data-edit=\"' + taskId + '\"]').show();
            \$('.delete-input[data-edit=\"' + taskId + '\"]').show();
        }*/
    });

    \$(document).on('click', '.delete-input', async function() {
        var taskId = \$(this).data('edit');
        console.log(taskId);

        // Perform the API call
        var save_task_rendered_hours = await apiCall('DELETE', 'api/emp-tasks/archive/' + taskId, []);
        console.log('API Call Response:', save_task_rendered_hours.status);

        // Check if the response status indicates success
        if (save_task_rendered_hours) {
            // Remove the closest parent <tr> element
            \$(this).closest('tr').remove();
        } else {
            console.error('Failed to archive task. Status:', save_task_rendered_hours.status);
        }
    });

    \$(document).on('click', '.approve-input', async function() {
        var taskId = \$(this).data('edit');
        var emp_task_status = \$('#emp_task_status' + taskId);
        console.log(taskId);

        // Perform the API call
        var save_task_rendered_hours = await apiCall('POST', 'api/emp-tasks/approve/' + taskId, []);
        console.log('API Call Response:', save_task_rendered_hours.status);
        if(save_task_rendered_hours){
            emp_task_status.text('Approved')
        }
    });

    \$(document).on('click', '.deny-input', async function() {
        var taskId = \$(this).data('edit');
        var emp_task_status = \$('#emp_task_status' + taskId);
        console.log(taskId);

        // Perform the API call
        var save_task_rendered_hours = await apiCall('POST', 'api/emp-tasks/deny/' + taskId, []);
        console.log('API Call Response:', save_task_rendered_hours.status);
        if(save_task_rendered_hours){
            emp_task_status.text('No Attendance')
        }
    });

    \$('#worker_log_date').flatpickr({
        mode: \"range\",
        dateFormat: \"Y-m-d\",
        onChange: function(selectedDates, dateStr, instance) {
            filterTasksByDateRange();
        }
    });

    /*function filterTasksByDateRange() {
        var dateRange = \$('#worker_log_date').val().split(' to ');
        console.log(dateRange)
        if (dateRange.length === 1) {
            var selectedDate = new Date(dateRange[0]);
            \$('.task-row').each(function() {
                var taskDateStr = \$(this).data('task-date');
                var taskDate = new Date(taskDateStr);

                if (taskDate.getTime() === selectedDate.getTime()) {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });
        } else if (dateRange.length === 2) {
            var startDate = new Date(dateRange[0]);
            var endDate = new Date(dateRange[1]);

            // Loop through each task and filter based on the date range
            \$('.task-row').each(function() {
                var taskDateStr = \$(this).data('task-date');
                var taskDate = new Date(taskDateStr);

                if (taskDate >= startDate && taskDate <= endDate) {
                    \$(this).show();
                } else {
                    \$(this).hide();
                }
            });
        }
    }*/

    function filterTasksByDateRange() {
        var dateRange = \$('#worker_log_date').val().split(' to ');
        var projectId = \$('#project_id').val();

        // Ensure both start_date and end_date are present
        var startDate = dateRange[0] || null;
        var endDate = dateRange[1] || dateRange[0] || null; // Use start_date if end_date is missing

        if (!startDate) {
            console.error('Start date is missing.');
            return; // Exit the function if start_date is missing
        }
        
        \$('.employee-row').each(async function() {
            var employeeId = \$(this).data('employee-id');
            \$('#blockBody'+employeeId).html('');
            if (dateRange.length >= 1) {
                var selectedDate = new Date(dateRange[0]);
                var jsonObject = {
                    \"start_date\": startDate,
                    \"end_date\": endDate,
                    \"project_id\": projectId,
                    \"employee_id\": employeeId
                };
                
                var response = await apiCall('POST', 'api/employee-projects/filter', jsonObject);

                if (response && response.tasks && response.tasks.length > 0) {
                    var tasksHtml = '';

                    response.tasks.forEach(function(task_item) {
                        if (!task_item.archived) {
                            var totalMinutes = task_item.assigned_hours;
                            var hours = Math.floor(totalMinutes / 60);
                            var minutes = totalMinutes % 60;

                            var taskStatus = 'No Attendance';
                            if (task_item.approved === true) {
                                taskStatus = 'Approved';
                            } else if (task_item.approved === null) {
                                taskStatus = 'Pending';
                            }
                            editBtn = '';
                            if(taskStatus == 'No Attendance' ||  taskStatus == 'Pending'){
                                editBtn = `<div class=\"edit\">
                                                <button class=\"edit-emp_project flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20 edit-input\" id=\"edit\" data-bs-toggle=\"dropdown\" data-edit=\"\${task_item.id}\"><i data-lucide=\"pencil\" class=\"size-3\"></i></button>
                                            </div>`;
                            }

                            tasksHtml += `
                                <tr class=\"task-row\" data-task-date=\"\${new Date(task_item.date).toISOString().split('T')[0]}\">
                                    <input type=\"hidden\" name=\"task_id\${task_item.id}\" id=\"task_id\${task_item.id}\" value=\"\${task_item.id}\">
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent \">\${task_item.task_desc}</td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">\${new Date(task_item.date).toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' })}</td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">
                                        <p id=\"rendered_hour_text\${task_item.id}\">\${hours} hour/s \${minutes} minutes</p>
                                        <input type=\"text\" data-provider=\"timepickr\" data-time-hrs=\"true\" style=\"width: 100px; display:none;\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 flatpickr-input active\" id=\"rendered_hour\${task_item.id}\" value=\"\${hours}:\${minutes}\">
                                    </td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent \">
                                        <p id=\"emp_task_status\${task_item.id}\">\${taskStatus}</p>
                                    </td>
                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">
                                        <div class=\"flex gap-2\">
                                            \${editBtn}
                                            <div class=\"save\">
                                                <button style=\"display:none;\" class=\"edit-emp_project flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20 save-input\" id=\"usersAction1\" data-bs-toggle=\"dropdown\" data-edit=\"\${task_item.id}\"><i data-lucide=\"save\" class=\"size-3\"></i></button>
                                            </div>
                                            <div class=\"remove\">
                                                <button style=\"display:none;\" class=\"delete-emp_project flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20 delete-input\" id=\"usersAction1\" data-bs-toggle=\"dropdown\" data-edit=\"\${task_item.id}\"><i data-lucide=\"trash-2\" class=\"size-3\"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`;
                        }
                    });
                    // Append the generated HTML to the appropriate table body
                    \$('#blockBody'+employeeId).html(tasksHtml);
                    lucide.createIcons();
                }
            }
        });
    }


    /*function calculateTotalLots(phaseId) {
        let total = 0;
        // Iterate through each tr in the table
        \$('#blockTable'+phaseId+' tbody tr').each(function() {
            // Find the td element with class .editable-cell within the current tr
            let totalLotsCell = \$(this).find('td.editable-cell');
            // Get the text content of the td element and parse as integer
            let totalLots = parseInt(totalLotsCell.text().trim()) || 0;
            total += totalLots;
            console.log(totalLots)
        });
        return total;
    }*/

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

    function getCurrentHalfRange() {
        //let today = new Date();
        let today = new Date();
        let year = today.getFullYear();
        let month = today.getMonth() + 1; // Months are zero indexed, so +1 to get the current month

        let ranges = getSemiMonthlyRanges(year, month);
        let day = today.getDate();

        if (day <= 15) {
            return { half: 'firstHalf', range: ranges.firstHalf };
        } else {
            return { half: 'secondHalf', range: ranges.secondHalf };
        }
    }

    function initialize_date_start(){
        console.log('here')
        console.log(getCurrentHalfRange().range.start)
        var date_range = getCurrentHalfRange().range.start + ' to ' + getCurrentHalfRange().range.end
        \$('#worker_log_date').val(date_range);
        filterTasksByDateRange();
    }

    \$(document).on('click', '.addEmpTask', function() {
        var empShiftTime = \$(this).data('emp-time');
        console.log(empShiftTime)
        //\$('#assigned_hours').val();
    });

    initialize_date_start();
});
</script>
{% endblock %}", "manpower/apps-emp-project.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\manpower\\apps-emp-project.html.twig");
    }
}
