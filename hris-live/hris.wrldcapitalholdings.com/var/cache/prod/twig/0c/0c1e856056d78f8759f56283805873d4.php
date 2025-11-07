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

/* manpower/apps-emp-project.html.twig */
class __TwigTemplate_406d4c00b4b04a7f48c67794ff8e03dc extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "manpower/apps-emp-project.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Project";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Project", "title" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["employee_project_id"] ?? null), "name", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["employee_project_id"] ?? null), "name", [], "any", false, false, false, 6), "Project")) : ("Project"))]);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["employee_project_id"] ?? null), "name", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["employee_project_id"] ?? null), "name", [], "any", false, false, false, 23), "")) : ("")), "html", null, true);
        yield "</h6>
                                    ";
        // line 24
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["employee_project_id"] ?? null))) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employee_project_id"] ?? null), "id", [], "any", false, false, false, 89), "html", null, true);
        yield "\">
                                        ";
        // line 90
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["employee_project_id"] ?? null))) {
            // line 91
            yield "                                            ";
            // line 92
            yield "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["employee_project_id"] ?? null), "employeeProjects", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["emp_prod_item"]) {
                // line 93
                yield "                                                ";
                if ( !(CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "archived", [], "any", false, false, false, 93) === true)) {
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
                    if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "employee", [], "any", false, false, false, 100), "user", [], "any", false, false, false, 100), "emp_shift", [], "any", false, false, false, 100))) {
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
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalHoursMinusLunch"] ?? null), "html", null, true);
                    yield "\"  class=\"add-emp_project addEmpTask block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["is_task_hidden"] ?? null), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp_prod_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            yield "                                        ";
        }
        // line 152
        yield "                                        </tbody>
                                    </table>
                                    ";
        // line 154
        if (Twig\Extension\CoreExtension::testEmpty(($context["employee_project_id"] ?? null))) {
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employee_project_id"] ?? null), "id", [], "any", false, false, false, 213), "html", null, true);
        yield "\">
                <div class=\"mb-3 z-99999\" style=\"height:300px\">
                    <label for=\"employee\" class=\"inline-block mb-2 text-base font-medium\">Employee</label>
                    <select class=\" z-999 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices multiple id=\"employee_id\" name=\"employee_id[]\">
                        ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["employees_list"] ?? null));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empItem'], $context['_parent'], $context['loop']);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["employee_project_id"] ?? null), "employeeProjects", [], "any", false, false, false, 232));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employee_project_id"] ?? null), "id", [], "any", false, false, false, 242), "html", null, true);
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
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["emp_prod_item"], "employee", [], "any", false, false, false, 253), "user", [], "any", false, false, false, 253), "emp_shift", [], "any", false, false, false, 253))) {
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
            $context["totalMinutes"] = ($context["totalHoursMinusLunch"] ?? null);
            // line 261
            yield "                    ";
            $context["hours"] = (int) floor((($context["totalMinutes"] ?? null) / 60));
            // line 262
            yield "                    ";
            $context["minutes"] = (($context["totalMinutes"] ?? null) % 60);
            // line 263
            yield "
                    <label for=\"assigned_hours\" class=\"inline-block mb-2 text-base font-medium\">Assigned Time (in hours & minutes)</label>
                    <input type=\"number\" id=\"assigned_hours\" data-provider=\"timepickr\" data-time-hrs=\"true\" name=\"assigned_hours\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 flatpickr-input active\" placeholder=\"Enter rendered hours\" data-default-time=\"";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hours"] ?? null), "html", null, true);
            yield ":";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["minutes"] ?? null), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp_prod_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        yield "<!--end edit user-->

";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["employee_project_id"] ?? null), "employeeProjects", [], "any", false, false, false, 278));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employee_project_id"] ?? null), "id", [], "any", false, false, false, 292), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp_prod_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        return; yield '';
    }

    // line 304
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "manpower/apps-emp-project.html.twig";
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
        return array (  534 => 313,  530 => 311,  524 => 308,  520 => 307,  516 => 306,  513 => 305,  509 => 304,  491 => 293,  487 => 292,  483 => 291,  479 => 290,  471 => 285,  466 => 283,  458 => 279,  454 => 278,  450 => 276,  437 => 269,  428 => 265,  424 => 263,  421 => 262,  418 => 261,  415 => 260,  412 => 259,  410 => 258,  407 => 257,  404 => 256,  401 => 255,  399 => 254,  396 => 253,  383 => 242,  379 => 241,  374 => 239,  369 => 237,  361 => 233,  357 => 232,  343 => 220,  328 => 218,  324 => 217,  317 => 213,  312 => 211,  305 => 206,  298 => 200,  295 => 162,  286 => 155,  284 => 154,  280 => 152,  277 => 151,  270 => 149,  260 => 142,  244 => 129,  234 => 122,  224 => 119,  216 => 113,  213 => 112,  210 => 111,  207 => 110,  204 => 109,  202 => 108,  199 => 107,  196 => 106,  194 => 105,  191 => 104,  188 => 103,  185 => 102,  183 => 101,  181 => 100,  172 => 98,  166 => 97,  162 => 96,  159 => 95,  157 => 94,  154 => 93,  149 => 92,  147 => 91,  145 => 90,  140 => 89,  132 => 82,  130 => 81,  125 => 73,  117 => 66,  114 => 55,  96 => 28,  90 => 25,  88 => 24,  84 => 23,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "manpower/apps-emp-project.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/manpower/apps-emp-project.html.twig");
    }
}
