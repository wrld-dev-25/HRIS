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

/* manpower/apps-employees.html.twig */
class __TwigTemplate_97ae55dee2cf7c4339581b841bb59ce8 extends Template
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
        // line 2
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("partials/base.html.twig", "manpower/apps-employees.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Employee List";
        return; yield '';
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/@popperjs/core/umd/popper.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/common.js"), "html", null, true);
        yield "\"></script>
    ";
        // line 9
        yield "    <style>
        .loader {
            background-color: #ededed;
            height: 1.5rem;
            width: 100%;
            border-radius: 0.25rem;
        }
        div .loader {
            background-color: #ededed;
            background: linear-gradient(100deg, 
            rgba(255, 255, 255, 0) 40%,
            rgba(255, 255, 255, .5) 50%,
            rgba(255, 255, 255, 0) 60%) #ededed;
            background-size: 200% 100%;
            background-position-x: 180%;
            animation: 1s loading ease-in-out infinite
        }
        @keyframes loading {
            to {
                background-position-x: -30%
            }
        }
    </style>
    ";
        return; yield '';
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        yield "            ";
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Employees", "title" => "Employees"]);
        yield "
                <div class=\"card\" id=\"employeeTable\">
                    <div class=\"card-body\">
                        <div class=\"flex items-center gap-3 mb-4\">
                            <h6 class=\"text-15 grow\">Employee List</h6>
                            <div class=\"add-emp_list xl:col-span-3 xl:col-start-10\">
                                <div class=\"flex gap-2 xl:justify-end\">
                                    <div>
                                        <button type=\"button\" class=\"add-emp bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20\" data-modal-target=\"importCSV\"><i data-lucide=\"download\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Import</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"add-emp_list shrink-0\">
                                <a href=\"#!\" id=\"addEmployee\" data-modal-target=\"addEmployeeModal\" type=\"button\" class=\"add-emp text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 add-employee\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Add Employee</span></a>
                            </div>
                        </div>
                        <div class=\"!py-3.5 border-y border-dashed border-slate-200 dark:border-zink-500\">
                            <div class=\"flex flex-row gap-x-2 justify-between\">
                                <div class=\"flex gap-x-2\">
                                    <div class=\"relative\">
                                        <select id=\"selectLimit\" class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                            ";
        // line 57
        yield "                                            <option value=\"50\">50</option>
                                            <option value=\"100\">100</option>
                                        </select>
                                    </div><!--end col-->
                                    <div style=\"min-width: 100px;\">
                                        <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"filter_status\" data-choices data-choices-removeItem name=\"filter_status\" placeholder=\"Filter by status\" multiple>
                                            <option value=\"active\" selected>Active</option>
                                            <option value=\"not_active\">Not Active</option>
                                        </select>
                                    </div><!--end col-->
                                    <div class=\"relative\">
                                        <input type=\"text\" id=\"employeeSearch\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search for code, name, description etc...\" autocomplete=\"off\" name=\"search\">
                                        <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                    </div><!--end col-->
                                    <div class=\"relative\">
                                        <button href=\"#!\" id=\"searchButton\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 add-employee\"><span class=\"align-middle\">Search</span></button>
                                    </div><!--end col-->
                                </div>
                                <div class=\"edit-emp_list flex gap-x-2\">
                                    <div class=\"relative\">
                                        <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"bulkActionSelect\">
                                            <option selected disabled>Choose Action</option>
                                            <option value=\"is_project\">Assignable to project</option>
                                            <option value=\"remove_project\">Remove assignable to project</option>
                                            <option value=\"is_worker\">Assign as worker</option>
                                            <option value=\"remove_worker\">Remove assign as worker</option>
                                        </select>
                                    </div><!--end col-->
                                    <div class=\"relative\">
                                        <button id=\"bulkActionBtn\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 add-employee\"><span class=\"align-middle\">Bulk Action</span></button>
                                    </div><!--end col-->
                                </div>
                            </div>
                            <!--end grid-->
                        </div>
                        <div class=\"-mx-5 overflow-x-auto\">
                            <table class=\"w-full whitespace-nowrap\">
                                <thead class=\"ltr:text-left rtl:text-right\">
                                    <tr class=\"bg-slate-100 dark:bg-zink-600\">
                                        <th class=\"edit-emp_list px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 employeeCode\"><input type=\"checkbox\" name=\"selectAll\" id=\"selectAll\" class=\"\" ></th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 employeeCode\">Employee Code</th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 name\">Name</th>
                                        ";
        // line 100
        yield "                                        ";
        // line 101
        yield "                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 division\">Division</th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 department\">Department</th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 position\">Position</th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 employmentType\">Employment Type</th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 dateHired\">Date Hired</th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 Action\">Action</th>
                                    </tr>
                                </thead>
                                <tbody class=\"list\" id=\"employeeList\">
                                    ";
        // line 111
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["employees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 112
            yield "                                        <tr>
                                            <td class=\"edit-emp_list  px-5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 position\"><input type=\"checkbox\" name=\"rowCheckbox\" id=\"rowCheckbox\" class=\"rowCheckbox\"></td>
                                            <td class=\"hidden\" id=\"employeeData\" data-value=\"";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode($context["employee"]), "html", null, true);
            yield "\"></td>
                                            <td class=\"hidden\" id=\"employeeId\" data-value=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 115), "html", null, true);
            yield "\"></td>
                                            ";
            // line 117
            yield "                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 employeeCode\"><h6 class=\"grow\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "employee_code", [], "any", false, false, false, 117), "html", null, true);
            yield "</h6></td>
                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 name\">
                                                <div class=\"flex items-center gap-3\">
                                                    <div class=\"size-6 rounded-full shrink-0 bg-slate-100\">
                                                        <img src=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/user-dummy-img.jpg"), "html", null, true);
            yield "\" alt=\"\" class=\"h-6 rounded-full\">
                                                    </div>
                                                    <h6 class=\"grow\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "last_name", [], "any", false, false, false, 123), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "first_name", [], "any", false, false, false, 123), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "middle_name", [], "any", false, false, false, 123), "html", null, true);
            yield "</h6>
                                                </div>
                                            </td>
                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 division\" data-tooltip=\"default\" data-tooltip-content=\"";
            // line 126
            ((CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "division", [], "any", false, false, false, 126)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "division", [], "any", false, false, false, 126), "name", [], "any", false, false, false, 126), "html", null, true)) : (yield ""));
            yield "\" data-tooltip-placement=\"top-start\" data-tooltip-arrow=\"false\">";
            ((CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "division", [], "any", false, false, false, 126)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "division", [], "any", false, false, false, 126), "code", [], "any", false, false, false, 126), "html", null, true)) : (yield ""));
            yield "</td>
                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 department\" data-tooltip=\"default\" data-tooltip-content=\"";
            // line 127
            ((CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "department", [], "any", false, false, false, 127)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "department", [], "any", false, false, false, 127), "name", [], "any", false, false, false, 127), "html", null, true)) : (yield ""));
            yield "\" data-tooltip-placement=\"top-start\" data-tooltip-arrow=\"false\">";
            ((CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "department", [], "any", false, false, false, 127)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "department", [], "any", false, false, false, 127), "code", [], "any", false, false, false, 127), "html", null, true)) : (yield ""));
            yield "</td>
                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 position\">";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "position", [], "any", false, false, false, 128), "html", null, true);
            yield "</td>
                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 employmentType\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "employment_type", [], "any", false, false, false, 129), "html", null, true);
            yield "</td>
                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 dateHired\">";
            // line 130
            ((CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "date_hired", [], "any", false, false, false, 130)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "date_hired", [], "any", false, false, false, 130), "d M, Y"), "html", null, true)) : (yield "<span class=\"italic\">N/A</span>"));
            yield "</td>
                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action\">
                                                <div class=\"edit-emp_list relative dropdown\">
                                                    <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                    <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                        <li>
                                                            <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_profile", ["employee_code" => CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "employee_code", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\" class=\"block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">View</span></a>
                                                        </li>
                                                        <li>
                                                            <a data-modal-target=\"editEmployeeModal\" id=\"editEmployee\" class=\"edit-emp block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" style=\"position: relative; z-index: 10;\"><i data-lucide=\"pencil\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                        </li>   
                                                        <li>
                                                            <a data-modal-target=\"contactDetailsModal\" id=\"contactEmployee\" class=\"block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" style=\"position: relative; z-index: 10;\"><i data-lucide=\"phone\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Contact</span></a>
                                                        </li>        
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "                                </tbody>
                            </table>
                            <div class=\"noresult\" style=\"display: none\">
                                <div class=\"py-6 text-center\">
                                    <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                    <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                    <p class=\"mb-0 text-slate-500 dark:text-zink-200\">We've searched more than 199+ users We did not find any users for you search.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"flex flex-col items-center gap-4 px-4 mt-4 md:flex-row\" id=\"pagination-element\">
                            <div class=\"grow\">
                                <p class=\"text-slate-500 dark:text-zink-200\">Showing <b class=\"showing\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["limit"] ?? null), "html", null, true);
        yield "</b> of <b class=\"total-records\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalEmployees"] ?? null), "html", null, true);
        yield "</b> Results</p>
                            </div>
                            <div id=\"currentPage\" class=\"hidden\" data-page=\"";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentPage"] ?? null), "html", null, true);
        yield "\"></div>
                            <div id=\"pageLimit\" class=\"hidden\" data-limit=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["limit"] ?? null), "html", null, true);
        yield "\"></div>
                            <div class=\"col-sm-auto mt-sm-0 flex flex-cols flex-wrap gap-2 pagination-container\">
                                ";
        // line 166
        if ((($context["currentPage"] ?? null) > 1)) {
            // line 167
            yield "                                    <a id=\"pagination-first\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-prev \" ";
            yield "href=\"javascript:void(0)\" data-page=\"1\" data-limit=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["limit"] ?? null), "html", null, true);
            yield "\">
                                        <i class=\"size-4 mr-1 rtl:rotate-180\" data-lucide=\"chevrons-left\"></i> First
                                    </a>
                                ";
        }
        // line 171
        yield "
                                <ul class=\"listjs-pagination flex flex-wrap items-center gap-2\">
                                    ";
        // line 173
        if ((($context["totalPages"] ?? null) > 0)) {
            // line 174
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 175
                yield "                                            <li id=\"pagination-nav-wrapper\" class=\"";
                yield (((($context["currentPage"] ?? null) == $context["i"])) ? ("active") : (""));
                yield "\">
                                                <a id=\"pagination-nav\" ";
                // line 176
                yield " href=\"javascript:void(0)\" class=\"page\" data-page=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "\" data-limit=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["limit"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                yield "</a>
                                            </li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            yield "                                    ";
        }
        // line 180
        yield "                                </ul>
                                ";
        // line 181
        if ((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) {
            // line 182
            yield "                                    <a id=\"pagination-last\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-next\" ";
            yield "href=\"javascript:void(0)\" data-page=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
            yield "\" data-limit=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["limit"] ?? null), "html", null, true);
            yield "\">
                                        Last <i class=\"size-4 ml-1 rtl:rotate-180\" data-lucide=\"chevrons-right\"></i>
                                    </a>
                                ";
        }
        // line 186
        yield "                            </div>
                        </div>
                    </div>
                </div>

<div id=\"importCSV\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Import CSV</h5>
            <button data-modal-close=\"importCSV\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("import_csv");
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
                <div>
                    <input type=\"file\" class=\"cursor-pointer form-file form-file-sm border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500\" placeholder=\"Employee CSV\" name=\"csv_file\" accept=\".csv\">
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" data-modal-close=\"importCSV\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end add user-->
<div id=\"addEmployeeModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen lg:w-[55rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
        
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\" id=\"addEmployeeLabel\">Add Employee</h5>
            <button data-modal-close=\"addEmployeeModal\" id=\"addEmployee\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form class=\"create-form\" id=\"create-form\" action=\"";
        // line 219
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_employee");
        yield "\" method=\"POST\">
                ";
        // line 223
        yield "                <div id=\"alert-error-msg\" class=\"hidden px-4 py-3 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-500/20\"></div>
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-6\">
                        <label for=\"is_assignable\" class=\"inline-block mb-2 text-base font-medium\">Assignable to Projects</label>
                        <div class=\"relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2\">
                            <input type=\"checkbox\" name=\"is_assignable\" id=\"is_assignable\" class=\"absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-500 bg-white/80 dark:bg-zink-400 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-slate-700 dark:checked:border-slate-700 arrow-none\" >
                            <label for=\"is_assignable\" class=\"block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointer transition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-slate-700 peer-checked/published:border-slate-700\"></label>
                        </div>
                    </div>
                    <div class=\"xl:col-span-6\">
                        <label for=\"is_worker\" class=\"inline-block mb-2 text-base font-medium\">Worker</label>
                        <div class=\"relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2\">
                            <input type=\"checkbox\" name=\"is_worker\" id=\"is_worker\" class=\"absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-500 bg-white/80 dark:bg-zink-400 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-slate-700 dark:checked:border-slate-700 arrow-none\" >
                            <label for=\"is_worker\" class=\"block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointer transition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-slate-700 peer-checked/published:border-slate-700\"></label>
                        </div>
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"firstName\" class=\"inline-block mb-2 text-base font-medium\">First Name </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"firstName\" name=\"firstName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter First Name\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"middleName\" class=\"inline-block mb-2 text-base font-medium\">Middle Name</label>
                        <input type=\"text\" id=\"middleName\" name=\"middleName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Middle Name\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"lastName\" class=\"inline-block mb-2 text-base font-medium\">Last Name </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"lastName\" name=\"lastName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Last Name\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"extension\" class=\"inline-block mb-2 text-base font-medium\">Ext.</label>
                        <input type=\"text\" id=\"extension\" name=\"extension\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Extension\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"employeeCode\" class=\"inline-block mb-2 text-base font-medium\">Employee Code </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"employeeCode\" name=\"employeeCode\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Employee Code\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"birthDate\" class=\"inline-block mb-2 text-base font-medium\">Birth Date </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"birthDate\" name=\"birthDate\" class=\"form-input add-birth-date border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"birthPlace\" class=\"inline-block mb-2 text-base font-medium\">Birth Place </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"birthPlace\" name=\"birthPlace\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Birth Place\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"age\" class=\"inline-block mb-2 text-base font-medium\">Age </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"age\" name=\"age\" min=\"0\" class=\"form-input age border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Age\">
                    </div>
                    <div class=\"xl:col-span-6\">
                        <label for=\"gender\" class=\"inline-block mb-2 text-base font-medium\">Gender </label>
                        <span class=\"text-red-500\">*</span>
                        <select name=\"gender\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices data-choices-sorting-false id=\"gender\">
                            <option value=\"\">Select Gender</option>
                            <option value=\"Male\">Male</option>
                            <option value=\"Female\">Female</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-6\">
                        <label for=\"civilStatus\" class=\"inline-block mb-2 text-base font-medium\">Civil Status </label>
                        <span class=\"text-red-500\">*</span>
                        <select name=\"civilStatus\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices data-choices-sorting-false id=\"civilStatus\">
                            <option value=\"\">Select Civil Status</option>
                            <option value=\"Single\">Single</option>
                            <option value=\"Married\">Married</option>
                            <option value=\"Widowed\">Widowed</option>
                            <option value=\"Legally Separated\">Legally Separated</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-12\">
                    </div>
                    <div class=\"xl:col-span-4\">
                        <label for=\"emailAddress\" class=\"inline-block mb-2 text-base font-medium\">Email Address </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"email\" id=\"emailAddress\" name=\"emailAddress\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Email Address\">
                    </div>
                    <div class=\"xl:col-span-4\">
                        <label for=\"zipCode\" class=\"inline-block mb-2 text-base font-medium\">Zip Code </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"zipCode\" name=\"zipCode\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Zip Code\">
                    </div>
                    <div class=\"xl:col-span-4\" id=\"provinceContainer\">
                        <label for=\"province\" class=\"inline-block mb-2 text-base font-medium\">Province </label>
                        <span class=\"text-red-500\">*</span>
                        <select name=\"province\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"province\">
                            <option value=\"\">Select Province</option>
                        ";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["provinces"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["province"]) {
            // line 315
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["province"], "name", [], "any", false, false, false, 315), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["province"], "name", [], "any", false, false, false, 315), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['province'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        yield "                        </select>
                    </div>
                    <div class=\"xl:col-span-6\">
                        <label for=\"telephoneNumber\" class=\"inline-block mb-2 text-base font-medium\">Telephone No.</label>
                        <input type=\"text\" id=\"telephoneNumber\" name=\"telephoneNumber\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Telephone Number\">
                    </div>
                    <div class=\"xl:col-span-6\">
                        <label for=\"cellphoneNumber\" class=\"inline-block mb-2 text-base font-medium\">Cellphone No.</label>
                        <input type=\"text\" id=\"cellphoneNumber\" name=\"cellphoneNumber\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Cellphone Number\">
                    </div>
                    <div class=\"xl:col-span-12\">
                        <span class=\"inline-block mb-2 text-base font-medium\">Present Address</span>
                    </div>
                    <div class=\"xl:col-span-5\">
                        <label for=\"presentBarangay\" class=\"inline-block mb-2 text-base font-medium\">Street/Barangay </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"presentBarangay\" name=\"presentBarangay\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Street/Barangay\">
                    </div>
                    <div class=\"xl:col-span-5\">
                        <label for=\"presentCity\" class=\"inline-block mb-2 text-base font-medium\">Town/City </label>
                        <span class=\"text-red-500\">*</span>
                        <div class=\"hidden\" id=\"cityList\" data-value=\"";
        // line 338
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["townCities"] ?? null)), "html", null, true);
        yield "\"></div>
                        <select name=\"presentCity\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"presentCity\">
                            <option value=\"\">Select Town/City</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-2 flex items-center gap-2 mt-8\">
                        <input id=\"sameAddress\" name=\"sameAddress\" class=\"size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400\" value=\"false\" type=\"checkbox\">
                        <label for=\"sameAddress\">Same Address</label>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <span class=\"inline-block mb-2 text-base font-medium\">Permanent Address</span>
                    </div>
                    <div class=\"xl:col-span-5\">
                        <label for=\"permanentBarangay\" class=\"inline-block mb-2 text-base font-medium\">Street/Barangay </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"permanentBarangay\" name=\"permanentBarangay\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Street/Barangay\">
                    </div>
                    <div class=\"xl:col-span-5\">
                        <label for=\"permanentCity\" class=\"inline-block mb-2 text-base font-medium\">Town/City </label>
                        <span class=\"text-red-500\">*</span>
                        <select name=\"permanentCity\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"permanentCity\">
                            <option value=\"\">Select Town/City</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-12\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"company\" class=\"inline-block mb-2 text-base font-medium\">Company/Agency</label>
                        <div class=\"hidden\" id=\"companylist\" data-value=\"";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["affiliated_companies"] ?? null)), "html", null, true);
        yield "\"></div>
                        ";
        // line 368
        yield "                        <select name=\"company\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" ";
        yield " id=\"company\">
                            <option value=\"\">Select Company/Agency</option>
                            ";
        // line 373
        yield "                        </select>
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"division\" class=\"inline-block mb-2 text-base font-medium\">Division </label>
                        <div class=\"hidden\" id=\"divisionList\" data-value=\"";
        // line 377
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["divisions"] ?? null)), "html", null, true);
        yield "\"></div>
                        ";
        // line 379
        yield "                        <select name=\"division\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" ";
        yield " id=\"division\">
                            <option value=\"\">Select Division</option>
                            ";
        // line 384
        yield "                        </select>
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"department\" class=\"inline-block mb-2 text-base font-medium\">Department </label>
                        ";
        // line 389
        yield "                        <select name=\"department\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\"id=\"department\">
                            <option value=\"\">Select Division First</option>
                            ";
        // line 394
        yield "                        </select>
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"position\" class=\"inline-block mb-2 text-base font-medium\">Position </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"position\" name=\"position\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Position\" required>
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"employmentType\" class=\"inline-block mb-2 text-base font-medium\">Employment Type </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"employmentType\" name=\"employmentType\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Employment Type\" required>
                    </div>
                    <div class=\"xl:col-span-4\">
                        <label for=\"dateHired\" class=\"inline-block mb-2 text-base font-medium\">Date Hired </label>
                        <input type=\"text\" id=\"dateHired\" name=\"dateHired\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\">
                    </div>
                    <div class=\"xl:col-span-4\">
                        <label for=\"employeeStatus\" class=\"inline-block mb-2 text-base font-medium\">Employee Status</label>
                        <span class=\"text-red-500\">*</span>
                        <select name=\"employeeStatus\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices data-choices-sorting-false id=\"employeeStatus\">
                            <option value=\"\">Select Status</option>
                            <option value=\"Active\">Active</option>
                            <option value=\"Terminated\">Terminated</option>
                            <option value=\"Resigned\">Resigned</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-4\">
                        <label for=\"contractExpiryDate\" class=\"inline-block mb-2 text-base font-medium\">Contract Expiry Date</label>
                        <input type=\"text\" id=\"contractExpiryDate\" name=\"contractExpiryDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\">
                    </div>
                    <div class=\"xl:col-span-4\">
                        <label for=\"dateSeparated\" class=\"inline-block mb-2 text-base font-medium\">Date Separated (Terminated)</label>
                        <input type=\"text\" id=\"dateSeparated\" name=\"dateSeparated\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\">
                    </div>
                    ";
        // line 432
        yield "                    <div class=\"xl:col-span-4\">
                        <label for=\"regularizationDate\" class=\"inline-block mb-2 text-base font-medium\">Regularization Date</label>
                        <input type=\"text\" id=\"regularizationDate\" name=\"regularizationDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\">
                    </div>
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"button\" id=\"close-modal\" data-modal-close=\"addEmployeeModal\" class=\"text-red-500 reset-form bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" id=\"addNew\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 \">Save</button>
                </div>
            </form>
        </div>
    </div>
</div><!--end add Employee-->

<div id=\"deleteModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
            <button data-modal-close=\"deleteModal\" id=\"deleteRecord-close\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"";
        // line 452
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/delete.png"), "html", null, true);
        yield "\" alt=\"\" class=\"block h-12 mx-auto\">
            <div class=\"mt-5 text-center\">
                <h5 class=\"mb-1\">Are you sure?</h5>
                <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                <div class=\"flex justify-center gap-2 mt-6\">
                    <button type=\"reset\" data-modal-close=\"deleteModal\" class=\"bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10\">Cancel</button>
                    <button type=\"submit\" id=\"delete-record\" class=\"text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Yes, Delete It!</button>
                </div>
            </div>
        </div>
    </div>
</div><!--end delete modal-->
<div id=\"editEmployeeModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen lg:w-[55rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
        
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\" id=\"editEmployeeLabel\">Edit Employee</h5>
            <button data-modal-close=\"editEmployeeModal\" id=\"editEmployeeClose\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form class=\"create-form editEmployeeForm\" id=\"create-form\" action=\"";
        // line 472
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_employee");
        yield "\" method=\"POST\">
                ";
        // line 475
        yield "                <input type=\"hidden\" name=\"employeeId\" id=\"employeeId\">
                <div id=\"alert-error-msg\" class=\"hidden px-4 py-3 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-500/20\"></div>
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-6\">
                        <label for=\"is_assignable\" class=\"inline-block mb-2 text-base font-medium\">Assignable to Projects</label>
                        <div class=\"relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2\">
                            <input type=\"checkbox\" name=\"is_assignable\" id=\"is_assignable2\" class=\"absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-500 bg-white/80 dark:bg-zink-400 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-slate-700 dark:checked:border-slate-700 arrow-none\" >
                            <label for=\"is_assignable\" class=\"block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointer transition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-slate-700 peer-checked/published:border-slate-700\"></label>
                        </div>
                    </div>
                    <div class=\"xl:col-span-6\">
                        <label for=\"is_worker\" class=\"inline-block mb-2 text-base font-medium\">Worker</label>
                        <div class=\"relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2\">
                            <input type=\"checkbox\" name=\"is_worker\" id=\"is_worker2\" class=\"absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-500 bg-white/80 dark:bg-zink-400 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-slate-700 dark:checked:border-slate-700 arrow-none\" >
                            <label for=\"is_worker\" class=\"block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointer transition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-slate-700 peer-checked/published:border-slate-700\"></label>
                        </div>
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"firstName\" class=\"inline-block mb-2 text-base font-medium\">First Name </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"firstName\" name=\"firstName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter First Name\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"middleName\" class=\"inline-block mb-2 text-base font-medium\">Middle Name</label>
                        <input type=\"text\" id=\"middleName\" name=\"middleName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Middle Name\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"lastName\" class=\"inline-block mb-2 text-base font-medium\">Last Name </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"lastName\" name=\"lastName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Last Name\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"extension\" class=\"inline-block mb-2 text-base font-medium\">Ext.</label>
                        <input type=\"text\" id=\"extension\" name=\"extension\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Extension\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"employeeCode\" class=\"inline-block mb-2 text-base font-medium\">Employee Code </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"employeeCode\" name=\"employeeCode\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Employee Code\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"birthDate\" class=\"inline-block mb-2 text-base font-medium\">Birth Date </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"birthDate\" name=\"birthDate\" class=\"form-input edit-birth-date border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"birthPlace\" class=\"inline-block mb-2 text-base font-medium\">Birth Place </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"birthPlace\" name=\"birthPlace\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Birth Place\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"age\" class=\"inline-block mb-2 text-base font-medium\">Age </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"age\" name=\"age\" class=\"form-input age border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Age\">
                    </div>
                    <div class=\"xl:col-span-6\">
                        <label for=\"gender\" class=\"inline-block mb-2 text-base font-medium\">Gender </label>
                        <span class=\"text-red-500\">*</span>
                        <select name=\"gender\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"gender\">
                            <option value=\"\">Select Gender</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-6\">
                        <label for=\"civilStatus\" class=\"inline-block mb-2 text-base font-medium\">Civil Status </label>
                        <span class=\"text-red-500\">*</span>
                        <select name=\"civilStatus\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"civilStatus\">
                            <option value=\"\">Select Civil Status</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-12\">
                    </div>
                    <div class=\"xl:col-span-4\">
                        <label for=\"emailAddress\" class=\"inline-block mb-2 text-base font-medium\">Email Address </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"email\" id=\"emailAddress\" name=\"emailAddress\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Email Address\">
                    </div>
                    <div class=\"xl:col-span-4\">
                        <label for=\"zipCode\" class=\"inline-block mb-2 text-base font-medium\">Zip Code </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"zipCode\" name=\"zipCode\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Zip Code\">
                    </div>
                    <div class=\"xl:col-span-4\" id=\"provinceContainer\">
                        <label for=\"province\" class=\"inline-block mb-2 text-base font-medium\">Province </label>
                        <span class=\"text-red-500\">*</span>
                        <div class=\"hidden\" id=\"provinceList\" data-value=\"";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["provinces"] ?? null)), "html", null, true);
        yield "\"></div>
                        <select name=\"province\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"province\">
                            <option value=\"\">Select Province</option>
                        ";
        // line 565
        yield "                        </select>
                    </div>
                    <div class=\"xl:col-span-6\">
                        <label for=\"telephoneNumber\" class=\"inline-block mb-2 text-base font-medium\">Telephone No.</label>
                        <input type=\"text\" id=\"telephoneNumber\" name=\"telephoneNumber\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Telephone Number\">
                    </div>
                    <div class=\"xl:col-span-6\">
                        <label for=\"cellphoneNumber\" class=\"inline-block mb-2 text-base font-medium\">Cellphone No.</label>
                        <input type=\"text\" id=\"cellphoneNumber\" name=\"cellphoneNumber\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Cellphone Number\">
                    </div>
                    <div class=\"xl:col-span-12\">
                        <span class=\"inline-block mb-2 text-base font-medium\">Present Address</span>
                    </div>
                    <div class=\"xl:col-span-5\">
                        <label for=\"presentBarangay\" class=\"inline-block mb-2 text-base font-medium\">Street/Barangay </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"presentBarangay\" name=\"presentBarangay\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Street/Barangay\">
                    </div>
                    <div class=\"xl:col-span-5\">
                        <label for=\"presentCity\" class=\"inline-block mb-2 text-base font-medium\">Town/City </label>
                        <span class=\"text-red-500\">*</span>
                        <div class=\"hidden\" id=\"cityList\" data-value=\"";
        // line 586
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["townCities"] ?? null)), "html", null, true);
        yield "\"></div>
                        <select name=\"presentCity\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"presentCity\">
                            <option value=\"\">Select Town/City</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-2 flex items-center gap-2 mt-8\">
                        <input id=\"sameAddress\" name=\"sameAddress\" class=\"size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400\" type=\"checkbox\">
                        <label for=\"sameAddress\">Same Address</label>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <span class=\"inline-block mb-2 text-base font-medium\">Permanent Address</span>
                    </div>
                    <div class=\"xl:col-span-5\">
                        <label for=\"permanentBarangay\" class=\"inline-block mb-2 text-base font-medium\">Street/Barangay </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"permanentBarangay\" name=\"permanentBarangay\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Street/Barangay\">
                    </div>
                    <div class=\"xl:col-span-5\">
                        <label for=\"permanentCity\" class=\"inline-block mb-2 text-base font-medium\">Town/City </label>
                        <span class=\"text-red-500\">*</span>
                        <select name=\"permanentCity\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"permanentCity\">
                            <option value=\"\">Select Town/City</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-12\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"company2\" class=\"inline-block mb-2 text-base font-medium\">Company/Agency </label>
                        <div class=\"hidden\" id=\"companyList\" data-value=\"";
        // line 614
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["affiliated_companies"] ?? null)), "html", null, true);
        yield "\"></div>
                        ";
        // line 616
        yield "                        <select name=\"company2\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" ";
        yield " id=\"company2\">
                            <option value=\"\">Select Company/Agency</option>
                            ";
        // line 621
        yield "                        </select>
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"division2\" class=\"inline-block mb-2 text-base font-medium\">Division </label>
                        <div class=\"hidden\" id=\"divisionList\" data-value=\"";
        // line 625
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["divisions"] ?? null)), "html", null, true);
        yield "\"></div>
                        ";
        // line 627
        yield "                        <select name=\"division2\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" ";
        yield " id=\"division2\">
                            <option value=\"\">Select Division</option>
                            ";
        // line 632
        yield "                        </select>
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"department2\" class=\"inline-block mb-2 text-base font-medium\">Department </label>
                        ";
        // line 637
        yield "                        <select name=\"department2\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\"id=\"department2\">
                            <option value=\"\">Select Department</option>
                            ";
        // line 642
        yield "                        </select>
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"position\" class=\"inline-block mb-2 text-base font-medium\">Position </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"position\" name=\"position\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Position\" required>
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"employmentType\" class=\"inline-block mb-2 text-base font-medium\">Employment Type </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"employmentType\" name=\"employmentType\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Employment Type\" >
                    </div>
                    <div class=\"xl:col-span-4\">
                        <label for=\"dateHired\" class=\"inline-block mb-2 text-base font-medium\">Date Hired </label>
                        <input type=\"text\" id=\"dateHired\" name=\"dateHired\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\">
                    </div>
                    <div class=\"xl:col-span-4\">
                        <label for=\"employeeStatus\" class=\"inline-block mb-2 text-base font-medium\">Employee Status</label>
                        <span class=\"text-red-500\">*</span>
                        <select name=\"employeeStatus\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"employeeStatus\">
                            <option value=\"\">Select Status</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-4\">
                        <label for=\"contractExpiryDate\" class=\"inline-block mb-2 text-base font-medium\">Contract Expiry Date</label>
                        <input type=\"text\" id=\"contractExpiryDate\" name=\"contractExpiryDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\">
                    </div>
                    <div class=\"xl:col-span-4\">
                        <label for=\"dateSeparated\" class=\"inline-block mb-2 text-base font-medium\">Date Separated (Terminated)</label>
                        <input type=\"text\" id=\"dateSeparated\" name=\"dateSeparated\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\">
                    </div>
                    ";
        // line 677
        yield "                    <div class=\"xl:col-span-4\">
                        <label for=\"regularizationDate\" class=\"inline-block mb-2 text-base font-medium\">Regularization Date</label>
                        <input type=\"text\" id=\"regularizationDate\" name=\"regularizationDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\">
                    </div>
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"button\" id=\"closeEditModal\" data-modal-close=\"editEmployeeModal\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" id=\"updateEmployee\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 \">Update</button>
                </div>
            </form>
        </div>
    </div>
</div><!--end add Employee-->
<div id=\"contactDetailsModal\" modal-top class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col\">
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\">Contact Details</h5>
            <button data-modal-close=\"contactDetailsModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <div class=\"flex flex-col gap-2 items-center justify-center\">
                <h5 class=\"text-16\">Email Address</h5>
                <span class=\"flex gap-2\">
                    <i data-lucide=\"mail\" class=\"inline-block size-5 text-custom-500 fill-custom-100 dark:fill-custom-500/20\"></i>
                    <p class=\"text-slate-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"Click to send email\" data-tooltip-placement=\"right\"><a href=\"\" id=\"modalEmail\" class=\"text-blue-500 hover:underline-offset-4\"></a></p>
                </span>
                <h5 class=\"text-16\">Cellphone Number</h5>
                <span class=\"flex gap-2\">
                    <i data-lucide=\"phone\" class=\"inline-block size-5 text-custom-500 fill-custom-100 dark:fill-custom-500/20\"></i>
                    <p class=\"text-slate-500 dark:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"Click to call\" data-tooltip-placement=\"right\"><a href=\"\" id=\"modalCellphone\" class=\"text-blue-500 hover:underline-offset-4\"></a></p>
                </span>
            </div>
        </div>
    </div>
</div><!--end contacts-->

";
        // line 713
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["status"], "method", false, false, false, 713));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 714
            yield "    <div class=\"hidden\" id=\"empStatus\" data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 716
        yield "
";
        return; yield '';
    }

    // line 719
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 720
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 721
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 722
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 723
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-hr-employee.init.js"), "html", null, true);
        yield "\"></script>
";
        // line 724
        yield " 
<script src=\"https://unpkg.com/zipcodes-ph@1.1.2/build/index.umd.js\"></script>
<script src=\"";
        // line 726
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/pages-employees.js"), "html", null, true);
        yield "\"></script>

<script>
    \$(document).ready(function () {});
</script>

<!-- App js -->
";
        // line 734
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>

";
        // line 736
        yield ((array_key_exists("javascriptSnippet", $context)) ? (Twig\Extension\CoreExtension::default(($context["javascriptSnippet"] ?? null), "")) : (""));
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "manpower/apps-employees.html.twig";
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
        return array (  997 => 736,  991 => 734,  981 => 726,  977 => 724,  973 => 723,  969 => 722,  965 => 721,  960 => 720,  956 => 719,  950 => 716,  941 => 714,  937 => 713,  899 => 677,  866 => 642,  862 => 637,  856 => 632,  851 => 627,  847 => 625,  841 => 621,  836 => 616,  832 => 614,  801 => 586,  778 => 565,  772 => 559,  686 => 475,  682 => 472,  659 => 452,  637 => 432,  601 => 394,  597 => 389,  591 => 384,  586 => 379,  582 => 377,  576 => 373,  571 => 368,  567 => 366,  536 => 338,  513 => 317,  502 => 315,  498 => 314,  405 => 223,  401 => 219,  377 => 198,  363 => 186,  352 => 182,  350 => 181,  347 => 180,  344 => 179,  330 => 176,  325 => 175,  320 => 174,  318 => 173,  314 => 171,  305 => 167,  303 => 166,  298 => 164,  294 => 163,  287 => 161,  273 => 149,  254 => 136,  245 => 130,  241 => 129,  237 => 128,  231 => 127,  225 => 126,  215 => 123,  210 => 121,  202 => 117,  198 => 115,  194 => 114,  190 => 112,  185 => 111,  174 => 101,  172 => 100,  128 => 57,  103 => 34,  99 => 33,  71 => 9,  67 => 6,  62 => 5,  58 => 4,  50 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "manpower/apps-employees.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\manpower\\apps-employees.html.twig");
    }
}
