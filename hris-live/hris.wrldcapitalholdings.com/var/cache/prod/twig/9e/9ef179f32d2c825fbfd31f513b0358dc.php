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

/* administration/user_settings.html.twig */
class __TwigTemplate_f4b1cba74d33d51308d87c0aa04befa1 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "administration/user_settings.html.twig", 2);
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
                        </div>
                        <div class=\"!py-3.5 border-y border-dashed border-slate-200 dark:border-zink-500\">
                            <div class=\"flex flex-row gap-x-2 justify-between\">
                                <div class=\"flex gap-x-2\">
                                    <div class=\"relative\">
                                        <select id=\"selectLimit\" class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                            <option value=\"50\">50</option>
                                            <option value=\"100\">100</option>
                                        </select>
                                    </div><!--end col-->
                                    <div class=\"relative\">
                                        <input type=\"text\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search for code, name, description etc...\" autocomplete=\"off\">
                                        <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                    </div><!--end col-->
                                </div><!--end grid-->

                                <div class=\"edit-emp_list flex gap-x-2\">
                                    <div class=\"relative\">
                                        <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"bulkActionSelect\">
                                            <option selected disabled>Choose Action</option>
                                            <option value=\"is_project\">Assignable to Projects</option>
                                            <option value=\"remove_project\">Remove assignable to project</option>
                                            <option value=\"activate_acc\">Activate Account</option>
                                            <option value=\"deactivate_acc\">Deactivate Account</option>
                                        </select>
                                    </div><!--end col-->
                                    <div class=\"relative\">
                                        <button id=\"bulkActionBtn\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 add-employee\"><span class=\"align-middle\">Bulk Action</span></button>
                                    </div><!--end col-->
                                </div>
                            </div>
                        </div>
                        <div class=\"-mx-5 overflow-x-auto\">
                            <table class=\"w-full whitespace-nowrap\">
                                <thead class=\"ltr:text-left rtl:text-right\">
                                    <tr class=\"bg-slate-100 dark:bg-zink-600\">
                                        <th class=\"edit-emp_list px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 employeeCode\"><input type=\"checkbox\" name=\"selectAll\" id=\"selectAll\" class=\"\" ></th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 employeeCode\">Employee Code</th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 name\">Name</th>
                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 role\">Role</th>
                                        ";
        // line 80
        yield "                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500 Action\">Action</th>
                                    </tr>
                                </thead>
                                <tbody class=\"list\" id=\"employeeList\">
                                ";
        // line 85
        yield "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["employees"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 86
            yield "                                        <tr>
                                            <td class=\"hidden\" id=\"employeeData\" data-value=\"";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode($context["employee"]), "html", null, true);
            yield "\"></td>
                                            <td class=\"hidden\" id=\"employeeId\" data-value=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "id", [], "any", false, false, false, 88), "html", null, true);
            yield "\"></td>
                                            <td class=\"edit-emp_list  px-5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 position\"><input type=\"checkbox\" name=\"rowCheckbox\" id=\"rowCheckbox\" class=\"rowCheckbox\"></td>
                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 employeeCode\"><a href=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_profile", ["employee_code" => CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "employee_code", [], "any", false, false, false, 90)]), "html", null, true);
            yield "\" class=\"transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "employee_code", [], "any", false, false, false, 90), "html", null, true);
            yield "</a></td>
                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 name\">
                                                <a href=\"#!\" class=\"flex items-center gap-3\">
                                                    <div class=\"size-6 rounded-full shrink-0 bg-slate-100\">
                                                        <img src=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/user-dummy-img.jpg"), "html", null, true);
            yield "\" alt=\"\" class=\"h-6 rounded-full\">
                                                    </div>
                                                    <h6 class=\"grow\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "last_name", [], "any", false, false, false, 96), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "first_name", [], "any", false, false, false, 96), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "middle_name", [], "any", false, false, false, 96), "html", null, true);
            yield "</h6>
                                                </a>
                                            </td>
                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 cursor-pointer division\" data-tooltip=\"default\" data-tooltip-content=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "user", [], "any", false, false, false, 99), "user_type", [], "any", false, false, false, 99), "name", [], "any", false, false, false, 99), "html", null, true);
            yield "\" data-tooltip-placement=\"top-start\" data-tooltip-arrow=\"false\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "user", [], "any", false, false, false, 99), "user_type", [], "any", false, false, false, 99), "name", [], "any", false, false, false, 99), "html", null, true);
            yield "</td>
                                            
                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action\">
                                                <div class=\"action-emp_settings relative dropdown\">
                                                    <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                    <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                        ";
            // line 108
            yield "                                                        <li>
                                                            <a data-modal-target=\"editEmployeeModal\" id=\"editEmployee\" class=\"edit-emp_settings block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" style=\"position: relative; z-index: 10;\"><i data-lucide=\"pencil\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                        </li>   
                                                        ";
            // line 114
            yield "                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
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
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["limit"] ?? null), "html", null, true);
        yield "</b> of <b class=\"total-records\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalEmployees"] ?? null), "html", null, true);
        yield "</b> Results</p>
                            </div>
                            <div id=\"cp\" data-page=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentPage"] ?? null), "html", null, true);
        yield "\"></div>
                            <div id=\"currentPage\" class=\"hidden\" data-page=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentPage"] ?? null), "html", null, true);
        yield "\"></div>
                            <div id=\"pageLimit\" class=\"hidden\" data-limit=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["limit"] ?? null), "html", null, true);
        yield "\"></div>
                            <div class=\"col-sm-auto mt-sm-0 flex flex-cols flex-wrap gap-2 pagination-container\">
                                ";
        // line 137
        if ((($context["currentPage"] ?? null) > 1)) {
            // line 138
            yield "                                    <a id=\"pagination-first\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-prev \" ";
            yield "href=\"javascript:void(0)\" data-page=\"1\" data-limit=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["limit"] ?? null), "html", null, true);
            yield "\">
                                        <i class=\"size-4 mr-1 rtl:rotate-180\" data-lucide=\"chevrons-left\"></i> First
                                    </a>
                                ";
        }
        // line 142
        yield "
                                <ul class=\"listjs-pagination flex flex-wrap items-center gap-2\">
                                    ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["totalPages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 145
            yield "                                        <li id=\"pagination-nav-wrapper\" class=\"";
            yield (((($context["currentPage"] ?? null) == $context["i"])) ? ("active") : (""));
            yield "\">
                                            <a id=\"pagination-nav\" ";
            // line 146
            yield "href=\"javascript:void(0)\" class=\"page\" data-page=\"";
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
        // line 149
        yield "                                </ul>

                                ";
        // line 151
        if ((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) {
            // line 152
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
        // line 156
        yield "                            </div>
                        </div>
                    </div>
                </div>

<div id=\"editEmployeeModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen lg:w-[55rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
        
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\" id=\"editEmployeeLabel\">Edit Employee</h5>
            <button data-modal-close=\"editEmployeeModal\" id=\"editEmployeeClose\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\" style=\"min-height:200px!important;\">
            <form id=\"create-form\" action=\"";
        // line 169
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_emp_setting");
        yield "\" method=\"POST\">
                ";
        // line 172
        yield "                <input type=\"hidden\" name=\"employeeId\" id=\"employeeId\">
                <input type=\"hidden\" name=\"userId\" id=\"userId\">
                <div id=\"alert-error-msg\" class=\"hidden px-4 py-3 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-500/20\"></div>
                <div class=\"mb-3\">
                    <label for=\"is_assignable\" class=\"inline-block mb-2 text-base font-medium\">Assignable to Projects</label>
                    <div class=\"relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2\">
                        <input type=\"checkbox\" name=\"is_assignable\" id=\"is_assignable\" class=\"absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-500 bg-white/80 dark:bg-zink-400 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-slate-700 dark:checked:border-slate-700 arrow-none\" >
                        <label for=\"is_assignable\" class=\"block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-slate-700 peer-checked/published:border-slate-700\"></label>
                    </div>
                </div>
                ";
        // line 189
        yield "                <div class=\"mb-3\">
                    <label for=\"is_active\" class=\"inline-block mb-2 text-base font-medium\">Is Active Account</label>
                    <div class=\"relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2\">
                        <input type=\"checkbox\" name=\"is_active\" id=\"is_active\" class=\"absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-500 bg-white/80 dark:bg-zink-400 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-slate-700 dark:checked:border-slate-700 arrow-none\">
                        <label for=\"is_active\" class=\"block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-slate-700 peer-checked/published:border-slate-700\"></label>
                    </div>
                </div>
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"hidden\" id=\"userTypeList\" data-value=\"";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["user_types"] ?? null)), "html", null, true);
        yield "\"></div>
                        <label for=\"user_type_id\" class=\"inline-block mb-2 text-base font-medium\">User Role</label>
                        <span class=\"text-red-500\">*</span>
                        <select name=\"user_type_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"user_type_id\">
                            <option value=\"\">Select Role</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <div class=\"hidden\" id=\"shiftList\" data-value=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["shift_list"] ?? null)), "html", null, true);
        yield "\"></div>
                        <label for=\"shift_id\" class=\"inline-block mb-2 text-base font-medium\">Employee Shift</label>
                        <span class=\"text-red-500\">*</span>
                        <select name=\"shift_id\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"shift_id\">
                            <option value=\"\">Select Shift</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"emp_password\" class=\"inline-block mb-2 text-base font-medium\">Change password</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"password\" id=\"emp_password\" name=\"emp_password\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"New Password\">
                    </div>
                </div>
                
        </div>
        <div class=\"flex justify-end p-4 gap-2 mt-4\">
            <button type=\"button\" id=\"closeEditModal\" data-modal-close=\"editEmployeeModal\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
            <button type=\"submit\" id=\"updateEmployee\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 \">Update</button>
        </div>
        </form>
    </div>
</div><!--end add Employee-->

";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["status"], "method", false, false, false, 229));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 230
            yield "    <div class=\"hidden\" id=\"empStatus\" data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        yield "
";
        return; yield '';
    }

    // line 235
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 236
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/sweetalert2/sweetalert2.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 237
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 238
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 239
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-hr-employee.init.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
";
        // line 243
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>

";
        // line 245
        yield ((array_key_exists("javascriptSnippet", $context)) ? (Twig\Extension\CoreExtension::default(($context["javascriptSnippet"] ?? null), "")) : (""));
        yield "

<script>
\$(document).ready(function () {
    const divisionList = \$('#divisionList').data('value');
    const userTypeList = \$('#userTypeList').data('value');
    const userTypeSelector = \$('#user_type_id');
    const shiftList = \$('#shiftList').data('value');
    const shiftSelector = \$('#shift_id');
    const empStatus = \$('#empStatus');
    let paginated = false;

    // Edit employee division select initialization
    var userType = \$('#user_type_id')[0]; 
    var userTypeChoices = new Choices(userType, {
        removeItemButton: false,
        allowHTML: true,
        placeholder: true,
        placeholderValue: null,
    });

    var shift = \$('#shift_id')[0]; 
    var shiftChoices = new Choices(shift, {
        removeItemButton: false,
        allowHTML: true,
        placeholder: true,
        placeholderValue: null,
    });

        //console.log(divisionObject);
    /*\$('#editEmployee').on('click', function () {
        
    });*/

    function initializeChoices(){
        console.log('userTypeList')
        console.log(userTypeList)
        userTypeOption = [];
        \$.each(userTypeList, function (key, value) { //Iterate each division
            userTypeOption.push({value: value.id, label: value.name});
        });
        //console.log(userTypeOption);
        shiftOption = [];
        shiftOption.push({value: \"\", label: \"\"});
        console.log(shiftList)
        \$.each(shiftList, function (key, value) { //Iterate each division
            shiftOption.push({value: value.id, label: value.name});
        });

        // Clear exsting options
        userTypeChoices.clearChoices();
        shiftChoices.clearChoices();

        // Add new options
        userTypeChoices.setChoices(userTypeOption, 'value', 'label', false);
        shiftChoices.setChoices(shiftOption, 'value', 'label', false);
    }

    /* Employment Status select end */

    \$('#employeeTable').on('click', '#editEmployee', function () {
        initializeChoices()
        \$row = \$(this).closest('tr');
        var employeeData = \$row.find('#employeeData').data('value'); // Get row values from employeeData container
        paginated == true ? employeeData = JSON.parse(decodeURIComponent(employeeData)) : employeeData;
        console.log(employeeData.user);
        //console.log(paginated);
        console.log('here');
        \$('#editEmployeeModal #employeeId').val(employeeData.id);
        \$('#editEmployeeModal #userId').val(employeeData.user.id);
        userTypeChoices.setChoiceByValue(employeeData.user.user_type.id);
        userTypeSelector.trigger('change');

        if(employeeData.user.is_assignable_proj){
            \$('#is_assignable').prop('checked', true);
        }
        else{
            \$('#is_assignable').prop('checked', false);
        }

        /*if(employeeData.user.is_straight_time){
            \$('#is_straight_time').prop('checked', true);
        }
        else{
            \$('#is_straight_time').prop('checked', false);
        }*/
        console.log(employeeData.user.is_active);
        if(employeeData.user.is_active){
            \$('#is_active').prop('checked', true);
        }
        else{
            \$('#is_active').prop('checked', false);
        }

        if(employeeData.user.emp_shift){
            shiftChoices.setChoiceByValue(employeeData.user.emp_shift.id);
            
        }
        else{
            shiftChoices.setChoiceByValue('');
            
        }

        shiftSelector.trigger('change');
        console.log(employeeData.user.id)
        /*\$('#editEmployeeModal #firstName').val(employeeData.first_name);
        \$('#editEmployeeModal #middleName').val(employeeData.middle_name);
        \$('#editEmployeeModal #lastName').val(employeeData.last_name);
        \$('#editEmployeeModal #extension').val(employeeData.extension);
        \$('#editEmployeeModal #employeeCode').val(employeeData.employee_code);
        if (employeeData.birthdate != null) { // check if date is not set
            var birthDate = formatDate(employeeData.birthdate);
            \$('#editEmployeeModal #birthDate').flatpickr({enableTime: false, dateFormat: \"d M, Y\"}).setDate(birthDate);
        }
        \$('#editEmployeeModal #birthPlace').val(employeeData.birth_place);
        \$('#editEmployeeModal #age').val(employeeData.age);
        genderChoices.setChoiceByValue(employeeData.gender);
        \$('#editEmployeeModal #emailAddress').val(employeeData.email);
        \$('#editEmployeeModal #zipCode').val(employeeData.zip_code);
        civilStatusChoices.setChoiceByValue(employeeData.civil_status);
        provinceChoices.setChoiceByValue(employeeData.area);
        \$('#editEmployeeModal #telephoneNumber').val(employeeData.telephone);
        \$('#editEmployeeModal #cellphoneNumber').val(employeeData.cellphone);
        \$('#editEmployeeModal #presentBarangay').val(employeeData.present_barangay);
        presentCityChoices.setChoiceByValue(employeeData.present_city);
        \$('#editEmployeeModal #sameAddress').val(employeeData.same_address);
        if (employeeData.same_address === true) {
            \$('#editEmployeeModal #sameAddress').prop('checked', true);
            \$('#editEmployeeModal #permanentBarangay').prop('disabled', true);
            permanentCityChoices.setChoiceByValue(employeeData.permanent_city);
            permanentCityChoices.disable();
        } else {
            \$('#editEmployeeModal #sameAddress').prop('checked', false);
        }
        \$('#editEmployeeModal #permanentBarangay').val(employeeData.permanent_barangay);
        divisionChoices2.setChoiceByValue(employeeData.division.code);
        divisionSelector.trigger('change');
        departmentChoices2.setChoiceByValue(employeeData.department.code);
        \$('#editEmployeeModal #position').val(employeeData.position);
        \$('#editEmployeeModal #employmentType').val(employeeData.employment_type);
        if (employeeData.date_hired != null) { // check if date is not set
            var dateHired = formatDate(employeeData.date_hired);
            \$('#editEmployeeModal #dateHired').flatpickr({enableTime: false, dateFormat: \"d M, Y\"}).setDate(dateHired);
        }
        employmentStatusChoices.setChoiceByValue(employeeData.employee_status);
        if (employeeData.contract_expiry_date != null) { // check if date is not set
            var contractExpiryDate = formatDate(employeeData.contract_expiry_date);
            \$('#editEmployeeModal #contractExpiryDate').flatpickr({enableTime: false, dateFormat: \"d M, Y\"}).setDate(contractExpiryDate);
        }
        if (employeeData.date_separated != null) { // check if date is not set
            var dateSeparated = formatDate(employeeData.date_separated);
            \$('#editEmployeeModal #dateSeparated').flatpickr({enableTime: false, dateFormat: \"d M, Y\"}).setDate(dateSeparated);
        }
        if (employeeData.probationary_date != null) { // check if date is not set
            var probationaryDate = formatDate(employeeData.probationary_date);
            \$('#editEmployeeModal #probationaryDate').flatpickr({enableTime: false, dateFormat: \"d M, Y\"}).setDate(probationaryDate);
        }
        if (employeeData.regularization_date != null) { // check if date is not set
            var regularizationDate = formatDate(employeeData.regularization_date);
            \$('#editEmployeeModal #regularizationDate').flatpickr({enableTime: false, dateFormat: \"d M, Y\"}).setDate(regularizationDate);
        }*/
    });

    // Event listener for presentBarangay change
    \$('#addEmployeeModal #presentBarangay, #editEmployeeModal #presentBarangay').on('change', function() {
        \$('#addEmployeeModal #permanentBarangay').val(\$(this).val().trim());
        \$('#editEmployeeModal #permanentBarangay').val(\$(this).val().trim());
    });

    // Event listener for presentCity change
    \$('#addEmployeeModal #presentCity').on('change', function() {
        var addPermanentCity = \$(this).val();
        permanentAddCityChoices.setChoiceByValue(\$(this).val());
    });

    // Event listener for edit presentCity change
    \$('#editEmployeeModal #presentCity').on('change', function() {
        permanentCityChoices.setChoiceByValue(\$(this).val());
    });

    /* Asynchronous Pagination start */
    \$('.pagination-prev').on('click', async function(event) {
        event.preventDefault(); // Prevent default link behavior
        console.log(paginated);

        var page = \$(this).data('page'); // Get data-page attribute value
        var limit = \$(this).data('limit');

        \$('#employeeList tr td').each(function() {
            \$(this).empty(); // Empty the content of each <td> element
            \$(this).html('<div class=\"loader\"></div>');
        });
        await loadEmployees(page, limit);
    });

    \$('.pagination-next').on('click', async function(event) {
        event.preventDefault(); // Prevent default link behavior
        console.log(paginated);

        var page = \$(this).data('page'); // Get data-page attribute value
        var limit = \$(this).data('limit');

        \$('#employeeList tr td').each(function() {
            \$(this).empty(); // Empty the content of each <td> element
            \$(this).html('<div class=\"loader\"></div>');
        });
        await loadEmployees(page, limit);
    });

    \$('.page').on('click', async function(event) {
        event.preventDefault(); // Prevent default link behavior
        console.log(paginated);

        var page = \$(this).data('page'); // Get data-page attribute value
        var limit = \$(this).data('limit');

        \$('#employeeList tr td').each(function() {
            \$(this).empty(); // Empty the content of each <td> element
            \$(this).html('<div class=\"loader\"></div>');
        });
        await loadEmployees(page, limit);
    });

    let searchTimeout = null;

    \$('.search').on('input', function () {
        clearTimeout(searchTimeout);
        const search = \$(this).val().trim();
        const page = 1;
        const limit = \$('#selectLimit').val();

        // Optional: show loader here

        searchTimeout = setTimeout(function () {
            loadEmployees(page, limit, search);
        }, 400); // 400ms debounce delay
    });

    \$('#selectLimit').on('change', async function () {
        console.log(paginated);

        var page = \$('#cp').data('page'); // Get data-page attribute value
        var limit = \$(this).val();

        console.log(page, limit);

        \$('#employeeList tr td').each(function() {
            \$(this).empty(); // Empty the content of each <td> element
            \$(this).html('<div class=\"loader\"></div>');
        });
        await loadEmployees(page, limit);
    });

    function refreshPagination(currentPage, limit, totalPages, totalEmployees) {
        const paginationContainer = \$('.pagination-container');
        var newNav = '';
        
        if (currentPage > 1) {
            newNav += `<a id=\"pagination-first\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-prev \" href=\"javascript:void(0)\" data-page=\"1\" data-limit=\"\${ limit }\">
                <i class=\"size-4 mr-1 rtl:rotate-180\" data-lucide=\"chevrons-left\"></i> First
            </a>
            `;
        }

        newNav += `<ul class=\"listjs-pagination flex flex-wrap items-center gap-2\">`;
        for (let i = 1; i <= totalPages; i++) {
            newNav += `<li id=\"pagination-nav-wrapper\" class=\"\${currentPage == i ? 'active' : ''}\">
                <a id=\"pagination-nav\" href=\"javascript:void(0)\" class=\"page\" data-page=\"\${i}\" data-limit=\"\${limit}\">\${i}</a>
            </li>
            `;
        }
        newNav += `</ul>`;

        if (currentPage < totalPages) {
            newNav += `<a id=\"pagination-last\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-next\" href=\"javascript:void(0)\" data-page=\"\${totalPages}\" data-limit=\"\${ limit }\">
                    Last <i class=\"size-4 ml-1 rtl:rotate-180\" data-lucide=\"chevrons-right\"></i>
                </a>
            `;    
        }

        //console.log(newNav);
        paginationContainer.empty(); //remove pagination
        paginationContainer.html(newNav); //append the new navigation
        lucide.createIcons(); //load icons
        
        \$('.pagination-prev').on('click', async function(event) {
            event.preventDefault(); // Prevent default link behavior
            console.log(paginated);

            var page = \$(this).data('page'); // Get data-page attribute value
            var limit = \$(this).data('limit');

            \$('#employeeList tr td').each(function() {
                \$(this).empty(); // Empty the content of each <td> element
                \$(this).html('<div class=\"loader\"></div>');
            });
            await loadEmployees(page, limit);
        });

        \$('.pagination-next').on('click', async function(event) {
            event.preventDefault(); // Prevent default link behavior
            console.log(paginated);

            var page = \$(this).data('page'); // Get data-page attribute value
            var limit = \$(this).data('limit');

            \$('#employeeList tr td').each(function() {
                \$(this).empty(); // Empty the content of each <td> element
                \$(this).html('<div class=\"loader\"></div>');
            });
            await loadEmployees(page, limit);
        });
        
        \$('.page').on('click', async function(event) {
            event.preventDefault(); // Prevent default link behavior
            console.log(paginated);

            var page = \$(this).data('page'); // Get data-page attribute value
            var limit = \$(this).data('limit');
            var search = \$('#employeeSearch').val();
            console.log('Limit: ' + limit);
            console.log('Page: ' + page);   
            console.log('Search: ' + search);

            \$('#employeeList tr td').each(function() {
                \$(this).empty(); // Empty the content of each <td> element
                \$(this).html('<div class=\"loader\"></div>');
            });
            await loadEmployees(page, limit);
        });
    }

    function refreshCallBack() {
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

    /* Asynchronous Pagination End */
    if (empStatus.length) {
        if (empStatus.data('status') == 'success') {
            // The element exists
            showToast('Employee added successfully.', 'bg-green-500');
        } else {
            showToast('Employee not added, something went wrong.', 'bg-red-500')
        }
    }

    // Function to format date
    function formatDate(inputDateTime) {
        const inputDate = inputDateTime.slice(0, 10);
        var date = new Date(inputDate);
        var day = date.getDate();
        var month = date.toLocaleString('default', { month: 'short' });
        var year = date.getFullYear();
        
        return day + ' ' + month + ', ' + year;
    }

    function removeSpacesAndDashes(input) {
        return input.replace(/[\\s-]/g, '');
    }

    
    /*async function loadEmployees(page, limit){
        const empTable = \$('#employeeList');
        var newTr = '';
        var currentPage = page;

        var jsonObject = {
            \"page\": page,
            \"limit\": limit
        };
        //console.log(jsonObject);

        //get paginated employee list
        var empListPaginated = await apiCall('POST', 'api/emp_paginated', jsonObject);
        //console.log('Employee List: '+empListPaginated)

        var empList = empListPaginated.employees;
        var totalPages = empListPaginated.totalEmployees / limit; //set total pages
        var totalEmployees = empListPaginated.totalEmployees; //set total employees
        //console.log(totalEmployees);

        \$.each(empList, async function name(key, employee) {
            //console.log(employee);
            var employeeData = encodeURIComponent(JSON.stringify(employee));
            //console.log(employeeData);
            newTr += `
                <tr>
                    <td class=\"hidden\" id=\"employeeData\" data-value=\"\${employeeData}\"></td>
                    <td class=\"hidden\" id=\"employeeId\" data-value=\"\${employee.id}\"></td>
                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 employeeCode\"><a href=\"/employee/profile/\${employee.employee_code}\" class=\"transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600\">\${employee.employee_code}</a></td>
                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 name\">
                        <a href=\"#!\" class=\"flex items-center gap-3\">
                            <div class=\"size-6 rounded-full shrink-0 bg-slate-100\">
                                <img src=\"";
        // line 832
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/user-dummy-img.jpg"), "html", null, true);
        yield "\" alt=\"\" class=\"h-6 rounded-full\">
                            </div>
                            <h6 class=\"grow\">\${ employee.first_name } \${ employee.last_name }</h6>
                        </a>
                    </td>
                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 cursor-pointer division\" data-tooltip=\"default\" data-tooltip-content=\"\${ employee.user.user_type.name }\" data-tooltip-placement=\"top-start\" data-tooltip-arrow=\"false\">\${ employee.user.user_type.name }</td>
                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action\">
                        <div class=\"relative dropdown\">
                            <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                            <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                ";
        // line 845
        yield "                                <li>
                                    <a data-modal-target=\"editEmployeeModal\" id=\"editEmployee\" class=\"block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" style=\"position: relative; z-index: 10;\"><i data-lucide=\"pencil\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                </li>   
                                ";
        // line 851
        yield "                            </ul>
                        </div>
                    </td>
                </tr>
            `;
        });
        paginated = true;
        empTable.empty(); //remove loader and previous table data
        empTable.html(newTr); //create new table data

        console.log(paginated);

        lucide.createIcons(); //load icons
        refreshCallBack(); //reload tailwick.bundle.js dropdown and modal
        refreshPagination(page, limit, totalPages, totalEmployees); // reloads the pagination

        \$('#cp').data('page', currentPage); //set current page 
        \$('#selectLimit').val(limit);  
        \$('.showing').text(empList.length); //set updated showing text
    }*/

    // Perform bulk action on selected rows
    \$('#bulkActionBtn').on('click', async function() {
        var employeeUserIdArray = [];
        var selectedAction = \$('#bulkActionSelect').val();
        
        \$('.rowCheckbox:checked').each(function() {
            var row = \$(this).closest('tr');

            
            if (paginated == true) {
                var employeeData = JSON.parse(decodeURIComponent(row.find('td:nth-child(1)').data('value')));
                console.log(employeeData);
            } else {
                var employeeData = row.find('td:nth-child(1)').data('value');
                console.log(employeeData);
            }
            var employeeUserId = employeeData.user.id;

            employeeUserIdArray.push(employeeUserId);
        });

        var search = \$('#employeeSearch').val();
        var page = \$('#currentPage').data('page'); // Get data-page attribute value
        var limit = \$('#pageLimit').data('limit');

        \$('#employeeList tr td').each(function() {
            \$(this).empty(); // Empty the content of each <td> element
            \$(this).html('<div class=\"loader\"></div>');
        });

        if (selectedAction !== null) {
            if (employeeUserIdArray.length > 0) {

                // Perform your bulk action with employeeUserIdArray data
                console.log(selectedAction + \" \" + employeeUserIdArray);
                
                // Example: send the selected data to a server using AJAX
                var jsonObject = {
                    action: selectedAction,
                    employeeUserIds: employeeUserIdArray
                }
                var bulkUpdateRes = await apiCall('POST', 'api/employee/bulk_update_v2', jsonObject);
                var status = bulkUpdateRes.status;
                
                if (status == 'success') {
                    await loadEmployees(page, limit, search);
                    showToast('Employee/s updated successfully.', 'bg-green-500');
                } else {
                    await loadEmployees(page, limit, search);
                    showToast('Employee/s update failed, something went wrong.', 'bg-red-500')
                }
                await loadEmployees(page, limit, search);
            } else {
                showToast('No rows selected.', 'bg-red-500')
            }
        } else {
            showToast('Choose action to perform.', 'bg-red-500')
        }
    });

    function refreshPagination(currentPage, limit, totalPages, totalEmployees) {
        const paginationContainer = \$('.pagination-container');
        var newNav = '';
        
        if (currentPage > 1) {
            newNav += `<a id=\"pagination-first\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-prev \" href=\"javascript:void(0)\" data-page=\"1\" data-limit=\"\${ limit }\">
                <i class=\"size-4 mr-1 rtl:rotate-180\" data-lucide=\"chevrons-left\"></i> First
            </a>
            `;
        }

        newNav += `<ul class=\"listjs-pagination flex flex-wrap items-center gap-2\">`;
        for (let i = 1; i <= totalPages; i++) {
            newNav += `<li id=\"pagination-nav-wrapper\" class=\"\${currentPage == i ? 'active' : ''}\">
                <a id=\"pagination-nav\" href=\"javascript:void(0)\" class=\"page\" data-page=\"\${i}\" data-limit=\"\${limit}\">\${i}</a>
            </li>
            `;
        }
        newNav += `</ul>`;

        if (currentPage < totalPages) {
            newNav += `<a id=\"pagination-last\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-next\" href=\"javascript:void(0)\" data-page=\"\${totalPages}\" data-limit=\"\${ limit }\">
                    Last <i class=\"size-4 ml-1 rtl:rotate-180\" data-lucide=\"chevrons-right\"></i>
                </a>
            `;    
        }

        //console.log(newNav);
        paginationContainer.empty(); //remove pagination
        paginationContainer.html(newNav); //append the new navigation
        lucide.createIcons(); //load icons
        
        \$('.pagination-prev').on('click', async function(event) {
            event.preventDefault(); // Prevent default link behavior
            console.log(paginated);

            var page = \$(this).data('page'); // Get data-page attribute value
            var limit = \$(this).data('limit');
            var search = \$('#employeeSearch').val().trim();

            \$('#employeeList tr td').each(function() {
                \$(this).empty(); // Empty the content of each <td> element
                \$(this).html('<div class=\"loader\"></div>');
            });
            await loadEmployees(page, limit, search);
        });

        \$('.pagination-next').on('click', async function(event) {
            event.preventDefault(); // Prevent default link behavior
            console.log(paginated);

            var page = \$(this).data('page'); // Get data-page attribute value
            var limit = \$(this).data('limit');
            var search = \$('#employeeSearch').val().trim();

            \$('#employeeList tr td').each(function() {
                \$(this).empty(); // Empty the content of each <td> element
                \$(this).html('<div class=\"loader\"></div>');
            });
            await loadEmployees(page, limit, search);
        });
        
        \$('.page').on('click', async function(event) {
            event.preventDefault(); // Prevent default link behavior
            console.log(paginated);

            var page = \$(this).data('page'); // Get data-page attribute value
            var limit = \$(this).data('limit');
            var search = \$('#employeeSearch').val();

            console.log('Limit: ' + limit);
            console.log('Page: ' + page);
            console.log('Search: ' + search);

            \$('#employeeList tr td').each(function() {
                \$(this).empty(); // Empty the content of each <td> element
                \$(this).html('<div class=\"loader\"></div>');
            });
            await loadEmployees(page, limit, search);
        });
    }
    /* Asynchronous Pagination End */

    async function loadEmployees(page, limit, search = null){
        const empTable = \$('#employeeList');
        var newTr = '';
        var currentPage = page;

        var jsonObject = {
            \"page\": page,
            \"limit\": limit,
            \"search\": search,
        };
        //console.log(jsonObject);

        //get paginated employee list
        var empListPaginated = await apiCall('POST', 'api/emp_paginated', jsonObject);
        //console.log('Employee List: '+empListPaginated)

        var empList = empListPaginated.employees;
        var totalPages = Math.ceil(empListPaginated.totalEmployees / limit); //set total pages
        var totalEmployees = empListPaginated.totalEmployees; //set total employees
        //console.log(totalEmployees);

        \$.each(empList, async function name(key, employee) {
            //console.log(employee);
            var employeeData = encodeURIComponent(JSON.stringify(employee));
            //console.log(employeeData);
            newTr += `
                <tr>
                    <td class=\"hidden\" id=\"employeeData\" data-value=\"\${employeeData}\"></td>
                    <td class=\"hidden\" id=\"employeeId\" data-value=\"\${employee.id}\"></td>
                    <td class=\"edit-emp_list px-5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 position\"><input type=\"checkbox\" name=\"rowCheckbox\" id=\"rowCheckbox\" class=\"rowCheckbox\"></td>
                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 employeeCode\"><a href=\"/employee/profile/\${employee.employee_code}\" class=\"transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600\">\${employee.employee_code}</a></td>
                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 name\">
                        <div class=\"flex items-center gap-3\">
                            <div class=\"size-6 rounded-full shrink-0 bg-slate-100\">
                                <img src=\"../../assets/images/users/user-dummy-img.jpg\" alt=\"\" class=\"h-6 rounded-full\">
                            </div>
                            <h6 class=\"grow\">\${ employee.last_name }, \${ employee.first_name } \${ employee.middle_name}</h6>
                        </div>
                    </td>
                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 division\" data-tooltip=\"default\" data-tooltip-content=\"\${ employee.user ? employee.user.user_type.name : '' }\" data-tooltip-placement=\"top-start\" data-tooltip-arrow=\"false\">\${ employee.user ? employee.user.user_type.name : '' }</td>
                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action\">
                        <div class=\"edit-emp_list relative dropdown\">
                            <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                            <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                <li>
                                    <a data-modal-target=\"editEmployeeModal\" id=\"editEmployee\" class=\"edit-emp_settings block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" style=\"position: relative; z-index: 10;\"><i data-lucide=\"pencil\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                </li>         
                            </ul>
                        </div>
                    </td>
                </tr>
            `;
        });
        paginated = true;
        empTable.empty(); //remove loader and previous table data
        empTable.html(newTr); //create new table data

        console.log(paginated);

        lucide.createIcons(); //load icons
        refreshCallBack(); //reload tailwick.bundle.js dropdown and modal
        refreshPagination(page, limit, totalPages, totalEmployees); // reloads the pagination
        applyPermissionsToDOM();
        \$('#currentPage').data('page', currentPage); // set current page 
        \$('#pageLimit').data('limit', limit); // set current limit
        \$('#selectLimit').val(limit);
        \$('.showing').text(empList.length); // set updated showing text
        \$('.total-records').text(empList.totalEmployees); // set updated total records text
    }

    \$('#selectAll').on('change', function() {
        if (this.checked) {
            \$('.rowCheckbox').prop('checked', true);
        } else {
            \$('.rowCheckbox').prop('checked', false);
        }
    });

})
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "administration/user_settings.html.twig";
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
        return array (  1049 => 851,  1044 => 845,  1031 => 832,  441 => 245,  435 => 243,  429 => 239,  425 => 238,  421 => 237,  416 => 236,  412 => 235,  406 => 232,  397 => 230,  393 => 229,  367 => 206,  356 => 198,  345 => 189,  333 => 172,  329 => 169,  314 => 156,  303 => 152,  301 => 151,  297 => 149,  283 => 146,  278 => 145,  274 => 144,  270 => 142,  261 => 138,  259 => 137,  254 => 135,  250 => 134,  246 => 133,  239 => 131,  225 => 119,  215 => 114,  210 => 108,  199 => 99,  189 => 96,  184 => 94,  175 => 90,  170 => 88,  166 => 87,  163 => 86,  158 => 85,  152 => 80,  103 => 34,  99 => 33,  71 => 9,  67 => 6,  62 => 5,  58 => 4,  50 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "administration/user_settings.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\administration\\user_settings.html.twig");
    }
}
