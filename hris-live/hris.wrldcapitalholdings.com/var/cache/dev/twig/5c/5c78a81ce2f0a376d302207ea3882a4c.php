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

/* leave_policy/employee_leave.html.twig */
class __TwigTemplate_781e805a35fd037dcd6cf7c1bfb17895 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leave_policy/employee_leave.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leave_policy/employee_leave.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "leave_policy/employee_leave.html.twig", 1);
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

        yield "Employee Leaves";
        
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Leave Administration", "title" => "Employee Leaves"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"divisionTable\">
                            <div class=\"card-body\">
                                <div class=\"flex items-center\">
                                    <h6 class=\"text-15 grow\">Employee Leaves List</h6>
                                    ";
        // line 17
        yield "                                </div>
                            </div>
                            <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                <form action=\"#!\">
                                    <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                                        <div class=\"relative xl:col-span-2\">
                                            <select id=\"year_selector\" class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(2024, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y")));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 25
            yield "                                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
            yield "\" ";
            if (($context["year"] == $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"))) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
            yield "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "                                            </select>
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </form>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                    <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                        <thead class=\"text-left\">
                                            <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employee_name\">Name</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"selected_years\">Policies</th>
                                                ";
        // line 40
        yield "                                                ";
        // line 41
        yield "                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                        ";
        // line 45
        yield "
                                            ";
        // line 46
        $context["gender_labels"] = ["All", "Male", "Female", "Other"];
        // line 52
        yield "
                                            ";
        // line 53
        $context["marital_labels"] = ["All", "Single", "Married", "Widowed"];
        // line 59
        yield "
                                            ";
        // line 61
        yield "                                            ";
        // line 62
        yield "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["emp_leaves"]) || array_key_exists("emp_leaves", $context) ? $context["emp_leaves"] : (function () { throw new RuntimeError('Variable "emp_leaves" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employee_leave"]) {
            // line 63
            yield "                                                    <tr onclick=\"collapseComponentV2('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee_leave"], "emp_id", [], "any", false, false, false, 63), "html", null, true);
            yield "')\" class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee_leave"], "emp_fullname", [], "any", false, false, false, 64), "html", null, true);
            yield " </td>
                                                        ";
            // line 65
            $context["policy_names"] = [];
            // line 66
            yield "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["employee_leave"], "employee_leaves", [], "any", false, false, false, 66));
            foreach ($context['_seq'] as $context["_key"] => $context["leave_item"]) {
                // line 67
                yield "                                                            ";
                $context["policy_names"] = Twig\Extension\CoreExtension::merge((isset($context["policy_names"]) || array_key_exists("policy_names", $context) ? $context["policy_names"] : (function () { throw new RuntimeError('Variable "policy_names" does not exist.', 67, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "leave_policy_name", [], "any", false, false, false, 67)]);
                // line 68
                yield "                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["policy_names"]) || array_key_exists("policy_names", $context) ? $context["policy_names"] : (function () { throw new RuntimeError('Variable "policy_names" does not exist.', 69, $this->source); })()), ", "), "html", null, true);
            yield "</td>
                                                        ";
            // line 71
            yield "                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                            <div class=\"action-emp_leaves relative dropdown\">
                                                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                    <li>
                                                                        <a data-modal-target=\"editEmployeeLeave";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee_leave"], "emp_id", [], "any", false, false, false, 76), "html", null, true);
            yield "\" class=\"edit-emp_leaves block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Update Leave</span></a>
                                                                    </li>
                                                                    ";
            // line 81
            yield "                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class=\"collapsible-content";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee_leave"], "emp_id", [], "any", false, false, false, 85), "html", null, true);
            yield " hidden\">
                                                        <td colspan=\"2\">
                                                            <table class=\"w-full mx-5 mb-5\">
                                                                <thead class=\"ltr:text-left rtl:text-right\">
                                                                    <tr>
                                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Leave Type</th>
                                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">No. of days</th>
                                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Used Days</th>
                                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Carried Over Days</th>
                                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Total Usable Days</th>
                                                                        ";
            // line 97
            yield "                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["employee_leave"], "employee_leaves", [], "any", false, false, false, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["leave_item"]) {
                // line 101
                yield "                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                                ";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "leave_policy_name", [], "any", false, false, false, 102), "html", null, true);
                yield "
                                                                            </td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                                ";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "no_of_days", [], "any", false, false, false, 105), "html", null, true);
                yield "
                                                                            </td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                                ";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "used_days", [], "any", false, false, false, 108), "html", null, true);
                yield "
                                                                            </td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                                ";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "carried_over_days", [], "any", false, false, false, 111), "html", null, true);
                yield "
                                                                            </td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                                ";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "no_of_days", [], "any", false, false, false, 114) + CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "carried_over_days", [], "any", false, false, false, 114)) - CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "used_days", [], "any", false, false, false, 114)), "html", null, true);
                yield "
                                                                            </td>
                                                                            ";
                // line 122
                yield "                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 flex items-center gap-2\">
                                                                                <input type=\"hidden\" name=\"emp_leave_id\" value=\"";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "emp_leave_id", [], "any", false, false, false, 123), "html", null, true);
                yield "\">
                                                                                <div class=\"relative dropdown\">
                                                                                    <button id=\"employeeAction";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "emp_leave_id", [], "any", false, false, false, 125), "html", null, true);
                yield "\" data-bs-toggle=\"dropdown\" class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                                    <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"employeeAction";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "emp_leave_id", [], "any", false, false, false, 126), "html", null, true);
                yield "\">
                                                                                        <li>
                                                                                            <button data-modal-target=\"editEmpLeavePolicy";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "emp_leave_id", [], "any", false, false, false, 128), "html", null, true);
                yield "\" class=\"block  px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\"><i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Update</button></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            yield "                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr> 
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee_leave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        yield "                                        </tbody>
                                    </table>
                                    <div class=\"noresult\" style=\"display: none\">
                                        <div class=\"py-6 text-center\">
                                            <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                            <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                            ";
        // line 147
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->


<div id=\"addEmpLeaves\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Update Employee Leaves</h5>
            <button data-modal-close=\"addEmpLeaves\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
        ";
        // line 164
        yield "            <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_policy_create");
        yield "\" method=\"post\"> 
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <label for=\"name\" class=\"inline-block mb-2 text-base font-medium\">Year</label>
                        <span class=\"text-red-500\">*</span>
                        <select id=\"yearPicker\" name=\"yearPicker\" data-selected-year=\"2024\" class=\"form-input yearPicker border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                            <!-- Add more options as needed -->
                        </select>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"marital\" class=\"inline-block mb-2 text-base font-medium\">Selected Leave Policies</label>
                        <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-multiple-remove-button\" data-choices data-choices-removeItem name=\"selected_leave_policy\" multiple>
                            ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["leave_policies"]) || array_key_exists("leave_policies", $context) ? $context["leave_policies"] : (function () { throw new RuntimeError('Variable "leave_policies" does not exist.', 177, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["leave_policy"]) {
            // line 178
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "id", [], "any", false, false, false, 178), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "name", [], "any", false, false, false, 178), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave_policy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        yield "                        </select>
                    </div>
                </div>
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"button\" data-modal-close=\"addEmpLeaves\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white reset-form btn bg-custom-500\">Save</button>
        </div>
    </form>
    </div>
</div>

";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["emp_leaves"]) || array_key_exists("emp_leaves", $context) ? $context["emp_leaves"] : (function () { throw new RuntimeError('Variable "emp_leaves" does not exist.', 192, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employee_leave"]) {
            // line 193
            yield "<div id=\"editEmployeeLeave";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee_leave"], "emp_id", [], "any", false, false, false, 193), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        ";
            // line 195
            $context["selected_leave_policy_ids"] = [];
            // line 196
            yield "
        ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["employee_leave"], "employee_leaves", [], "any", false, false, false, 197));
            foreach ($context['_seq'] as $context["_key"] => $context["leave"]) {
                // line 198
                yield "            ";
                $context["selected_leave_policy_ids"] = Twig\Extension\CoreExtension::merge((isset($context["selected_leave_policy_ids"]) || array_key_exists("selected_leave_policy_ids", $context) ? $context["selected_leave_policy_ids"] : (function () { throw new RuntimeError('Variable "selected_leave_policy_ids" does not exist.', 198, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "leave_policy_id", [], "any", false, false, false, 198)]);
                // line 199
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            yield "
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Employee Leaves</h5>
            <button data-modal-close=\"editEmployeeLeave";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee_leave"], "emp_id", [], "any", false, false, false, 203), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
            // line 206
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_leave_update");
            yield "\" method=\"post\">
                <input type=\"hidden\" name=\"employee_record_id\" value=\"";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee_leave"], "emp_id", [], "any", false, false, false, 207), "html", null, true);
            yield "\">
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <label for=\"name\" class=\"inline-block mb-2 text-base font-medium\">Year</label>
                        <span class=\"text-red-500\">*</span>
                        <select id=\"yearPicker\" name=\"yearPicker\" data-selected-year=\"";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
            yield "\" class=\"form-input yearPicker border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                            <!-- Add more options as needed -->
                        </select>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"marital\" class=\"inline-block mb-2 text-base font-medium\">Selected Leave Policies</label>
                        <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-multiple-remove-button\" data-choices data-choices-removeItem name=\"selected_leave_policy[]\" multiple>
                            ";
            // line 220
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["leave_policies"]) || array_key_exists("leave_policies", $context) ? $context["leave_policies"] : (function () { throw new RuntimeError('Variable "leave_policies" does not exist.', 220, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["leave_policy"]) {
                // line 221
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "id", [], "any", false, false, false, 221), "html", null, true);
                yield "\" ";
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "id", [], "any", false, false, false, 221), (isset($context["selected_leave_policy_ids"]) || array_key_exists("selected_leave_policy_ids", $context) ? $context["selected_leave_policy_ids"] : (function () { throw new RuntimeError('Variable "selected_leave_policy_ids" does not exist.', 221, $this->source); })()))) {
                    yield "selected";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "name", [], "any", false, false, false, 221), "html", null, true);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave_policy'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            yield "                        </select>
                    </div>
                </div>                
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"button\" data-modal-close=\"editEmployeeLeave";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee_leave"], "emp_id", [], "any", false, false, false, 228), "html", null, true);
            yield "\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white reset-form btn bg-custom-500\">Save</button>
        </div>
    </form>
    </div>
</div>

";
            // line 235
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["employee_leave"], "employee_leaves", [], "any", false, false, false, 235));
            foreach ($context['_seq'] as $context["_key"] => $context["leave_item"]) {
                // line 236
                yield "<div id=\"editEmpLeavePolicy";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "emp_leave_id", [], "any", false, false, false, 236), "html", null, true);
                yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        ";
                // line 238
                $context["selected_leave_policy_ids"] = [];
                // line 239
                yield "
        ";
                // line 240
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["employee_leave"], "employee_leaves", [], "any", false, false, false, 240));
                foreach ($context['_seq'] as $context["_key"] => $context["leave"]) {
                    // line 241
                    yield "            ";
                    $context["selected_leave_policy_ids"] = Twig\Extension\CoreExtension::merge((isset($context["selected_leave_policy_ids"]) || array_key_exists("selected_leave_policy_ids", $context) ? $context["selected_leave_policy_ids"] : (function () { throw new RuntimeError('Variable "selected_leave_policy_ids" does not exist.', 241, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "leave_policy_id", [], "any", false, false, false, 241)]);
                    // line 242
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 243
                yield "
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Employee Leaves</h5>
            <button data-modal-close=\"editEmpLeavePolicy";
                // line 246
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "emp_leave_id", [], "any", false, false, false, 246), "html", null, true);
                yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
                // line 249
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_selected_leave");
                yield "\" method=\"post\">
                <input type=\"hidden\" name=\"employee_leave_id\" value=\"";
                // line 250
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee_leave"], "emp_id", [], "any", false, false, false, 250), "html", null, true);
                yield "\">
                <input type=\"hidden\" name=\"selected_leave_id\" value=\"";
                // line 251
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "selected_leave_id", [], "any", false, false, false, 251), "html", null, true);
                yield "\">
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <label for=\"no_of_days\" class=\"inline-block mb-2 text-base font-medium\">No of days</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"no_of_days\" name=\"no_of_days\" class=\"form-input numbers-only\" value=\"";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "no_of_days", [], "any", false, false, false, 256), "html", null, true);
                yield "\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"used_days\" class=\"inline-block mb-2 text-base font-medium\">Used days</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"used_days\" name=\"used_days\" class=\"form-input numbers-only\" value=\"";
                // line 262
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "used_days", [], "any", false, false, false, 262), "html", null, true);
                yield "\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"carried_over_days\" class=\"inline-block mb-2 text-base font-medium\">Carried Over Days</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"carried_over_days\" name=\"carried_over_days\" class=\"form-input numbers-only\" value=\"";
                // line 268
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "carried_over_days", [], "any", false, false, false, 268), "html", null, true);
                yield "\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"marital\" class=\"inline-block mb-2 text-base font-medium\">Carried Over Type</label>
                        <select id=\"carry_over_policy\" name=\"carry_over_policy\" class=\"form-input\" required>
                            <option value=\"0\" ";
                // line 274
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "carry_over_policy", [], "any", false, false, false, 274) == "0")) {
                    yield "selected";
                }
                yield ">Not Carried Over</option>
                            <option value=\"1\" ";
                // line 275
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "carry_over_policy", [], "any", false, false, false, 275) == "1")) {
                    yield "selected";
                }
                yield ">Carried Over</option>
                            <option value=\"2\" ";
                // line 276
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "carry_over_policy", [], "any", false, false, false, 276) == "2")) {
                    yield "selected";
                }
                yield ">Non Carried over but Cashble</option>
                            <option value=\"3\" ";
                // line 277
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "carry_over_policy", [], "any", false, false, false, 277) == "3")) {
                    yield "selected";
                }
                yield ">Not Carried over and Cashble</option>
                        </select>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"marital\" class=\"inline-block mb-2 text-base font-medium\">Status</label>
                        <select id=\"status\" name=\"status\" class=\"form-input\" required>
                            <option value=\"0\" ";
                // line 284
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "status", [], "any", false, false, false, 284) == "0")) {
                    yield "selected";
                }
                yield ">Enabled</option>
                            <option value=\"1\" ";
                // line 285
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "status", [], "any", false, false, false, 285) == "1")) {
                    yield "selected";
                }
                yield ">Disabled</option>
                        </select>
                    </div>
                </div>                
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"button\" data-modal-close=\"editEmpLeavePolicy";
                // line 291
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_item"], "emp_leave_id", [], "any", false, false, false, 291), "html", null, true);
                yield "\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white reset-form btn bg-custom-500\">Save</button>
        </div>
    </form>
    </div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 298
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee_leave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        yield "


";
        // line 303
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 303, $this->source); })()), "flashes", ["status"], "method", false, false, false, 303));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 304
            yield "    <div class=\"hidden\" id=\"status\" data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 309
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 310
        yield "
<script src=\"";
        // line 311
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-list-init.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
<script src=\"";
        // line 316
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 318
        yield "<script>
\$(document).ready(function() {
    var startYear = 2015;
    var currentYear = new Date().getFullYear();

    // Select all elements with the class 'yearPicker'
    \$('select.yearPicker').each(function() {
        var \$select = \$(this);
        var selectedYear = \$select.data('selected-year'); // Get the selected year from the data attribute for each select
        // Populate the select element with options from currentYear down to startYear
        for (var i = currentYear; i >= startYear; i--) {
            var option = \$('<option />').val(i).html(i);
            if (i == selectedYear) {
                option.prop('selected', true); // Set the option as selected if it matches the data-selected-year
            }
            \$select.append(option);
        }
    });
});



function collapseComponentV2(\$id) {
    const collapsibleHeader = document.querySelector('.collapsible-header'+\$id);
    const collapsibleContent = document.querySelector('.collapsible-content'+\$id);
    
    collapsibleContent.classList.toggle('hidden');
    collapsibleHeader.classList.toggle('show');
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
        return "leave_policy/employee_leave.html.twig";
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
        return array (  696 => 318,  692 => 316,  686 => 313,  682 => 312,  678 => 311,  675 => 310,  665 => 309,  653 => 306,  644 => 304,  640 => 303,  635 => 300,  628 => 298,  615 => 291,  604 => 285,  598 => 284,  586 => 277,  580 => 276,  574 => 275,  568 => 274,  559 => 268,  550 => 262,  541 => 256,  533 => 251,  529 => 250,  525 => 249,  519 => 246,  514 => 243,  508 => 242,  505 => 241,  501 => 240,  498 => 239,  496 => 238,  490 => 236,  486 => 235,  476 => 228,  469 => 223,  454 => 221,  450 => 220,  439 => 212,  431 => 207,  427 => 206,  421 => 203,  416 => 200,  410 => 199,  407 => 198,  403 => 197,  400 => 196,  398 => 195,  392 => 193,  388 => 192,  374 => 180,  363 => 178,  359 => 177,  342 => 164,  324 => 147,  316 => 140,  306 => 135,  293 => 128,  288 => 126,  284 => 125,  279 => 123,  276 => 122,  271 => 114,  265 => 111,  259 => 108,  253 => 105,  247 => 102,  244 => 101,  240 => 100,  235 => 97,  222 => 85,  216 => 81,  211 => 76,  204 => 71,  199 => 69,  193 => 68,  190 => 67,  185 => 66,  183 => 65,  179 => 64,  174 => 63,  169 => 62,  167 => 61,  164 => 59,  162 => 53,  159 => 52,  157 => 46,  154 => 45,  149 => 41,  147 => 40,  133 => 27,  118 => 25,  114 => 24,  105 => 17,  94 => 6,  91 => 5,  81 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Employee Leaves{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Leave Administration', title: 'Employee Leaves' }) }}

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"divisionTable\">
                            <div class=\"card-body\">
                                <div class=\"flex items-center\">
                                    <h6 class=\"text-15 grow\">Employee Leaves List</h6>
                                    {# <div class=\"shrink-0\">
                                        <button data-modal-target=\"addEmpLeaves\" type=\"button\" class=\"add-emp_leaves text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Add Employee Leaves</span></button>
                                    </div> #}
                                </div>
                            </div>
                            <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                <form action=\"#!\">
                                    <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                                        <div class=\"relative xl:col-span-2\">
                                            <select id=\"year_selector\" class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                                {% for year in range(2024, \"now\"|date(\"Y\")) %}
                                                    <option value=\"{{ year }}\" {% if year == \"now\"|date(\"Y\") %}selected{% endif %}>{{ year }}</option>
                                                {% endfor %}
                                            </select>
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </form>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                    <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                        <thead class=\"text-left\">
                                            <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employee_name\">Name</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"selected_years\">Policies</th>
                                                {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Year</th> #}
                                                {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th> #}
                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                        {# {{ dump(pagibigConfigs) }} #}

                                            {% set gender_labels = {
                                                0: 'All',
                                                1: 'Male',
                                                2: 'Female',
                                                3: 'Other'
                                            } %}

                                            {% set marital_labels = {
                                                0: 'All',
                                                1: 'Single',
                                                2: 'Married',
                                                3: 'Widowed'
                                            } %}

                                            {# {{ dump(emp_leaves) }} #}
                                            {# {{ dump(leave_policies) }} #}
                                            {% for employee_leave in emp_leaves %}
                                                    <tr onclick=\"collapseComponentV2('{{ employee_leave.emp_id }}')\" class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">{{ employee_leave.emp_fullname }} </td>
                                                        {% set policy_names = [] %}
                                                        {% for leave_item in employee_leave.employee_leaves %}
                                                            {% set policy_names = policy_names|merge([leave_item.leave_policy_name]) %}
                                                        {% endfor %}
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">{{ policy_names|join(', ') }}</td>
                                                        {# <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">{{ employee_leave.year }}</td> #}
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                            <div class=\"action-emp_leaves relative dropdown\">
                                                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                    <li>
                                                                        <a data-modal-target=\"editEmployeeLeave{{employee_leave.emp_id}}\" class=\"edit-emp_leaves block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Update Leave</span></a>
                                                                    </li>
                                                                    {# <li>
                                                                        <a data-modal-target=\"deletepagibigConfig{{leave_policy.id}}\" class=\"delete-emp_leaves block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                    </li> #}
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class=\"collapsible-content{{employee_leave.emp_id}} hidden\">
                                                        <td colspan=\"2\">
                                                            <table class=\"w-full mx-5 mb-5\">
                                                                <thead class=\"ltr:text-left rtl:text-right\">
                                                                    <tr>
                                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Leave Type</th>
                                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">No. of days</th>
                                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Used Days</th>
                                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Carried Over Days</th>
                                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Total Usable Days</th>
                                                                        {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Carry Over Type</th>
                                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold border-b border-slate-200 dark:border-zink-500\">Action</th> #}
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    {% for leave_item in employee_leave.employee_leaves %}
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                                {{ leave_item.leave_policy_name }}
                                                                            </td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                                {{ leave_item.no_of_days }}
                                                                            </td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                                {{ leave_item.used_days }}
                                                                            </td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                                {{ leave_item.carried_over_days }}
                                                                            </td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                                {{ (leave_item.no_of_days + leave_item.carried_over_days) - leave_item.used_days }}
                                                                            </td>
                                                                            {# <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                                {{ leave_item.carry_over_policy }}
                                                                            </td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500\">
                                                                                {{ leave_item.status }}
                                                                            </td> #}
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 flex items-center gap-2\">
                                                                                <input type=\"hidden\" name=\"emp_leave_id\" value=\"{{ leave_item.emp_leave_id }}\">
                                                                                <div class=\"relative dropdown\">
                                                                                    <button id=\"employeeAction{{ leave_item.emp_leave_id }}\" data-bs-toggle=\"dropdown\" class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                                    <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"employeeAction{{ leave_item.emp_leave_id }}\">
                                                                                        <li>
                                                                                            <button data-modal-target=\"editEmpLeavePolicy{{leave_item.emp_leave_id}}\" class=\"block  px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\"><i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Update</button></a>
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
                                    <div class=\"noresult\" style=\"display: none\">
                                        <div class=\"py-6 text-center\">
                                            <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                            <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                            {# <p class=\"mb-0 text-slate-500 dark:text-zink-200\">We've searched more than 199+ users We did not find any users for you search.</p> #}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->


<div id=\"addEmpLeaves\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Update Employee Leaves</h5>
            <button data-modal-close=\"addEmpLeaves\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
        {# app_leave_policy_create #}
            <form action=\"{{ path('app_leave_policy_create') }}\" method=\"post\"> 
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <label for=\"name\" class=\"inline-block mb-2 text-base font-medium\">Year</label>
                        <span class=\"text-red-500\">*</span>
                        <select id=\"yearPicker\" name=\"yearPicker\" data-selected-year=\"2024\" class=\"form-input yearPicker border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                            <!-- Add more options as needed -->
                        </select>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"marital\" class=\"inline-block mb-2 text-base font-medium\">Selected Leave Policies</label>
                        <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-multiple-remove-button\" data-choices data-choices-removeItem name=\"selected_leave_policy\" multiple>
                            {% for leave_policy in leave_policies %}
                                <option value=\"{{leave_policy.id}}\">{{ leave_policy.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"button\" data-modal-close=\"addEmpLeaves\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white reset-form btn bg-custom-500\">Save</button>
        </div>
    </form>
    </div>
</div>

{% for employee_leave in emp_leaves %}
<div id=\"editEmployeeLeave{{ employee_leave.emp_id }}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        {% set selected_leave_policy_ids = [] %}

        {% for leave in employee_leave.employee_leaves %}
            {% set selected_leave_policy_ids = selected_leave_policy_ids | merge([leave.leave_policy_id]) %}
        {% endfor %}

        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Employee Leaves</h5>
            <button data-modal-close=\"editEmployeeLeave{{ employee_leave.emp_id }}\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"{{ path('employee_leave_update') }}\" method=\"post\">
                <input type=\"hidden\" name=\"employee_record_id\" value=\"{{employee_leave.emp_id}}\">
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <label for=\"name\" class=\"inline-block mb-2 text-base font-medium\">Year</label>
                        <span class=\"text-red-500\">*</span>
                        <select id=\"yearPicker\" name=\"yearPicker\" data-selected-year=\"{{ \"now\"|date(\"Y\") }}\" class=\"form-input yearPicker border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                            <!-- Add more options as needed -->
                        </select>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"marital\" class=\"inline-block mb-2 text-base font-medium\">Selected Leave Policies</label>
                        <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-multiple-remove-button\" data-choices data-choices-removeItem name=\"selected_leave_policy[]\" multiple>
                            {% for leave_policy in leave_policies %}
                                <option value=\"{{leave_policy.id}}\" {% if leave_policy.id in selected_leave_policy_ids %}selected{% endif %}>{{ leave_policy.name }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>                
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"button\" data-modal-close=\"editEmployeeLeave{{ employee_leave.emp_id }}\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white reset-form btn bg-custom-500\">Save</button>
        </div>
    </form>
    </div>
</div>

{% for leave_item in employee_leave.employee_leaves %}
<div id=\"editEmpLeavePolicy{{ leave_item.emp_leave_id }}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        {% set selected_leave_policy_ids = [] %}

        {% for leave in employee_leave.employee_leaves %}
            {% set selected_leave_policy_ids = selected_leave_policy_ids | merge([leave.leave_policy_id]) %}
        {% endfor %}

        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Employee Leaves</h5>
            <button data-modal-close=\"editEmpLeavePolicy{{ leave_item.emp_leave_id }}\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"{{path('update_selected_leave')}}\" method=\"post\">
                <input type=\"hidden\" name=\"employee_leave_id\" value=\"{{employee_leave.emp_id}}\">
                <input type=\"hidden\" name=\"selected_leave_id\" value=\"{{leave_item.selected_leave_id}}\">
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <label for=\"no_of_days\" class=\"inline-block mb-2 text-base font-medium\">No of days</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"no_of_days\" name=\"no_of_days\" class=\"form-input numbers-only\" value=\"{{ leave_item.no_of_days }}\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"used_days\" class=\"inline-block mb-2 text-base font-medium\">Used days</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"used_days\" name=\"used_days\" class=\"form-input numbers-only\" value=\"{{ leave_item.used_days }}\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"carried_over_days\" class=\"inline-block mb-2 text-base font-medium\">Carried Over Days</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"carried_over_days\" name=\"carried_over_days\" class=\"form-input numbers-only\" value=\"{{ leave_item.carried_over_days }}\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"marital\" class=\"inline-block mb-2 text-base font-medium\">Carried Over Type</label>
                        <select id=\"carry_over_policy\" name=\"carry_over_policy\" class=\"form-input\" required>
                            <option value=\"0\" {% if leave_item.carry_over_policy == \"0\" %}selected{% endif %}>Not Carried Over</option>
                            <option value=\"1\" {% if leave_item.carry_over_policy == \"1\" %}selected{% endif %}>Carried Over</option>
                            <option value=\"2\" {% if leave_item.carry_over_policy == \"2\" %}selected{% endif %}>Non Carried over but Cashble</option>
                            <option value=\"3\" {% if leave_item.carry_over_policy == \"3\" %}selected{% endif %}>Not Carried over and Cashble</option>
                        </select>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"marital\" class=\"inline-block mb-2 text-base font-medium\">Status</label>
                        <select id=\"status\" name=\"status\" class=\"form-input\" required>
                            <option value=\"0\" {% if leave_item.status == \"0\" %}selected{% endif %}>Enabled</option>
                            <option value=\"1\" {% if leave_item.status == \"1\" %}selected{% endif %}>Disabled</option>
                        </select>
                    </div>
                </div>                
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"button\" data-modal-close=\"editEmpLeavePolicy{{ leave_item.emp_leave_id }}\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white reset-form btn bg-custom-500\">Save</button>
        </div>
    </form>
    </div>
</div>
{% endfor %}

{% endfor %}



{% for flash_message in app.flashes('status') %}
    <div class=\"hidden\" id=\"status\" data-status=\"{{ flash_message }}\"></div>
{% endfor %}

{% endblock %}
    
{% block javascripts %}

<script src=\"{{ asset('assets/libs/list.js/list.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/list.pagination.js/list.pagination.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/pages/apps-list-init.js') }}\"></script>

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}
<script>
\$(document).ready(function() {
    var startYear = 2015;
    var currentYear = new Date().getFullYear();

    // Select all elements with the class 'yearPicker'
    \$('select.yearPicker').each(function() {
        var \$select = \$(this);
        var selectedYear = \$select.data('selected-year'); // Get the selected year from the data attribute for each select
        // Populate the select element with options from currentYear down to startYear
        for (var i = currentYear; i >= startYear; i--) {
            var option = \$('<option />').val(i).html(i);
            if (i == selectedYear) {
                option.prop('selected', true); // Set the option as selected if it matches the data-selected-year
            }
            \$select.append(option);
        }
    });
});



function collapseComponentV2(\$id) {
    const collapsibleHeader = document.querySelector('.collapsible-header'+\$id);
    const collapsibleContent = document.querySelector('.collapsible-content'+\$id);
    
    collapsibleContent.classList.toggle('hidden');
    collapsibleHeader.classList.toggle('show');
} 
</script>

{% endblock %}", "leave_policy/employee_leave.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\leave_policy\\employee_leave.html.twig");
    }
}
