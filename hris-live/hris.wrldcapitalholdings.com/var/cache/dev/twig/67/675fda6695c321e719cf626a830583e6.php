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

/* leave_request/apps-leave-request.html.twig */
class __TwigTemplate_8a0fb8a620f798fb8e118f6a7b972f73 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leave_request/apps-leave-request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leave_request/apps-leave-request.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "leave_request/apps-leave-request.html.twig", 1);
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

        yield "Leave Request";
        
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Leave Request", "title" => ""]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"divisionTable\">
                            <div class=\"card-body\">
                                <div class=\"flex items-center\">
                                    <h6 class=\"text-15 grow\">Leave Requests</h6>
                                    <div class=\"shrink-0\">
                                        <button data-modal-target=\"addLeaveRequest\" type=\"button\" class=\"add-model_types text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Make a Leave Request</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                <form action=\"#!\">
                                    <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                                        <div class=\"relative xl:col-span-2\">
                                            <input type=\"text\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search for code, name, description etc...\" autocomplete=\"off\">
                                            <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                        </div><!--end col-->
                                        ";
        // line 37
        yield "                                    </div><!--end grid-->
                                </form>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                    <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                        <thead class=\"text-left\">
                                            <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employee_share\">Employee Name</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Policy Name</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Request Date</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Is Half Day</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Total Leave Days</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Status</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Reason</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Updated By</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                        ";
        // line 57
        $context["holiday_status"] = ["Pending", "Approved", "Rejected"];
        // line 62
        yield "                                        ";
        // line 63
        yield "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["leaveRequests"]) || array_key_exists("leaveRequests", $context) ? $context["leaveRequests"] : (function () { throw new RuntimeError('Variable "leaveRequests" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["leave"]) {
            // line 64
            yield "                                                    <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "emp_name", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "selected_leave_policy_name", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "date_start", [], "any", false, false, false, 67), "Y-m-d"), "html", null, true);
            yield " to ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "date_end", [], "any", false, false, false, 67), "Y-m-d"), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 68
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "is_half_day", [], "any", false, false, false, 68)) ? ("Yes") : ("No"));
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "total_days_requested", [], "any", false, false, false, 69), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["holiday_status"]) || array_key_exists("holiday_status", $context) ? $context["holiday_status"] : (function () { throw new RuntimeError('Variable "holiday_status" does not exist.', 70, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "status", [], "any", false, false, false, 70), [], "array", false, false, false, 70), "html", null, true);
            yield "</td> 
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "reason", [], "any", false, false, false, 71), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "updated_by_name", [], "any", false, false, false, 72), "html", null, true);
            yield "</td>
                                                        ";
            // line 73
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "status", [], "any", false, false, false, 73) == 0)) {
                // line 74
                yield "                                                            <td class=\"px-3.5 py-2.5\">
                                                                <div class=\"flex gap-2\">
                                                                    ";
                // line 79
                yield "                                                                    <a data-modal-target=\"approveLeaveRequest";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 79), "html", null, true);
                yield "\" class=\"edit-model_types flex items-center justify-center size-8 text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500\">
                                                                        <i data-lucide=\"check\" class=\"size-4\"></i>
                                                                    </a>
                                                                    <a data-modal-target=\"rejectLeaveRequest";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 82), "html", null, true);
                yield "\" data-modal-target=\"deleteModal\" class=\"edit-model_types flex items-center justify-center size-8 text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500\">
                                                                        <i data-lucide=\"x\" class=\"size-4\"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        ";
            }
            // line 88
            yield "                                                    </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "                                        </tbody>
                                    </table>
                                    <div class=\"noresult\" style=\"display: none\">
                                        <div class=\"py-6 text-center\">
                                            <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                            <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                            ";
        // line 97
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->


<div id=\"addLeaveRequest\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Leave Request</h5>
            <button data-modal-close=\"addLeaveRequest\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_leave_request");
        yield "\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <label for=\"emp_record_id\" class=\"inline-block mb-2 text-base font-medium\">Employee</label>
                    <span class=\"text-red-500\">*</span>
                    <select id=\"emp_record_id\" name=\"emp_record_id\" class=\"form-input\">
                        <option value=\"\"></option>
                        ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["employees"]) || array_key_exists("employees", $context) ? $context["employees"] : (function () { throw new RuntimeError('Variable "employees" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["employee"]) {
            // line 121
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "emp_id", [], "any", false, false, false, 121), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["employee"], "emp_fullname", [], "any", false, false, false, 121), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        yield "                    </select>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"leave_policy\" class=\"inline-block mb-2 text-base font-medium\">Leave</label>
                    <select id=\"leave_policy\" name=\"leave_policy\" class=\"form-input\">
                           
                        ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["leave_policies"]) || array_key_exists("leave_policies", $context) ? $context["leave_policies"] : (function () { throw new RuntimeError('Variable "leave_policies" does not exist.', 130, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["leave_policy"]) {
            // line 131
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "id", [], "any", false, false, false, 131), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "name", [], "any", false, false, false, 131), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave_policy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        yield "                    </select>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"date_start\" class=\"inline-block mb-2 text-base font-medium\">Date Start</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"date_start\" name=\"date_start\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-required=\"true\" readonly=\"readonly\" placeholder=\"Enter Date Start\" required>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"date_end\" class=\"inline-block mb-2 text-base font-medium\">Date End</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"date_end\" name=\"date_end\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Enter Date End\" required>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"is_half_day\" class=\"inline-block mb-2 text-base font-medium\">Half Day</label>
                    <select id=\"is_half_day\" name=\"is_half_day\" class=\"form-input\">
                        <option value=\"True\">Yes</option>
                        <option value=\"False\">No</option>
                    </select>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"year\" class=\"inline-block mb-2 text-base font-medium\">Year</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" id=\"year\" name=\"year\" class=\"form-input numbers-only max-length-year\" placeholder=\"Enter Year\" required>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"reason\" class=\"inline-block mb-2 text-base font-medium\">Reason</label>
                    <textarea id=\"reason\" name=\"reason\" class=\"form-input\" placeholder=\"Enter Reason (optional)\"></textarea>
                </div>
            </div>
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"addLeaveRequest\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Save</button>
        </div>
    </form>
    </div>
</div><!--end add user-->

";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["leaveRequests"]) || array_key_exists("leaveRequests", $context) ? $context["leaveRequests"] : (function () { throw new RuntimeError('Variable "leaveRequests" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["leave"]) {
            // line 177
            yield "<div id=\"approveLeaveRequest";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 177), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Update Leave Request</h5>
            <button data-modal-close=\"approveLeaveRequest";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 181), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <h5 class=\"mb-3 text-16\">Approve Leave?</h5>
            <p class=\"text-slate-500 dark:text-zink-200\">Are you sure you want to approve this leave request?</p>
            <form action=\"";
            // line 186
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("approve_leave_request");
            yield "\" method=\"post\">
            <input type=\"hidden\" name=\"leave_request_id\" value=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 187), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"status\" value=\"1\">
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"approveLeaveRequest";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 191), "html", null, true);
            yield "\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Update</button>
        </div>
    </form>
    </div>
</div>

<div id=\"rejectLeaveRequest";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 198), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Update Leave Request</h5>
            <button data-modal-close=\"rejectLeaveRequest";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 202), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <h5 class=\"mb-3 text-16\">Reject Leave?</h5>
            <p class=\"text-slate-500 dark:text-zink-200\">Are you sure you want to reject this leave request?</p>
            <form action=\"";
            // line 207
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("approve_leave_request");
            yield "\" method=\"post\">
            <input type=\"hidden\" name=\"leave_request_id\" value=\"";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 208), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"status\" value=\"2\">
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"rejectLeaveRequest";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "id", [], "any", false, false, false, 212), "html", null, true);
            yield "\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Update</button>
        </div>
    </form>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        yield "
";
        // line 278
        yield "

";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 280, $this->source); })()), "flashes", ["status"], "method", false, false, false, 280));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 281
            yield "    <div class=\"hidden\" id=\"status\" data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 286
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 287
        yield "
<script src=\"";
        // line 288
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 289
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 290
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-list-init.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
<script src=\"";
        // line 293
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 295
        yield "<script>
\$(document).ready(function () {

    const status = \$('#status');

    console.log(status.data('status'));

    if (status.length) {
        if (status.data('status') == 'success') {
            // The element exists
            Toastify({
                newWindow: true,
                text: 'Model Type added successfully',
                gravity: 'top',
                position: 'right',
                className: \"bg-green-500\",
                stopOnFocus: true,
                offset: {
                    x: 0, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                    y: 0, // vertical axis - can be a number or a string indicating unity. eg: '2em'
                },
                duration: 3000,
                close: true,
            }).showToast();
        } else {
            Toastify({
                newWindow: true,
                text: 'Model Type not added, something went wrong.',
                gravity: 'top',
                position: 'right',
                className: \"bg-red-500\",
                stopOnFocus: true,
                offset: {
                    x: 0, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                    y: 0, // vertical axis - can be a number or a string indicating unity. eg: '2em'
                },
                duration: 3000,
                close: true,
            }).showToast();
        }
    }

    \$('.max-length-year').on('input', function () {
        if (\$(this).val().length > 4) {
            \$(this).val(\$(this).val().slice(0, 4)); // Trim the value to 4 characters
        }
    });

    // validate add leave request form
    \$('#addLeaveRequest').on('submit', function (e) {
        var emp_record_id = \$('#emp_record_id').val();
        var leave_policy = \$('#leave_policy').val();
        var date_start = \$('#date_start').val();
        var date_end = \$('#date_end').val();
        var year = \$('#year').val();

        if (emp_record_id == '' || leave_policy == '' || date_start == '' || date_end == '' || year == '') {
            e.preventDefault(); // Prevent form submission
            showToast('Please fill in all required fields.', 'bg-red-500');
        }
    });
})
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
        return "leave_request/apps-leave-request.html.twig";
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
        return array (  477 => 295,  473 => 293,  467 => 290,  463 => 289,  459 => 288,  456 => 287,  446 => 286,  434 => 283,  425 => 281,  421 => 280,  417 => 278,  414 => 219,  401 => 212,  394 => 208,  390 => 207,  382 => 202,  375 => 198,  365 => 191,  358 => 187,  354 => 186,  346 => 181,  338 => 177,  334 => 176,  289 => 133,  278 => 131,  274 => 130,  265 => 123,  254 => 121,  250 => 120,  240 => 113,  222 => 97,  214 => 90,  207 => 88,  198 => 82,  191 => 79,  187 => 74,  185 => 73,  181 => 72,  177 => 71,  173 => 70,  169 => 69,  165 => 68,  159 => 67,  155 => 66,  151 => 65,  148 => 64,  143 => 63,  141 => 62,  139 => 57,  117 => 37,  94 => 6,  91 => 5,  81 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Leave Request{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Leave Request', title: '' }) }}

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"divisionTable\">
                            <div class=\"card-body\">
                                <div class=\"flex items-center\">
                                    <h6 class=\"text-15 grow\">Leave Requests</h6>
                                    <div class=\"shrink-0\">
                                        <button data-modal-target=\"addLeaveRequest\" type=\"button\" class=\"add-model_types text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Make a Leave Request</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                <form action=\"#!\">
                                    <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                                        <div class=\"relative xl:col-span-2\">
                                            <input type=\"text\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search for code, name, description etc...\" autocomplete=\"off\">
                                            <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                        </div><!--end col-->
                                        {# <div class=\"relative xl:col-span-2\">
                                            <div class=\"flex flex-row gap-3\">
                                                <p class=\"mb-0\">Calendar Year</p>
                                                <select id=\"selectLimit\" class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                                    <option value=\"2027\">2027</option>
                                                    <option value=\"2026\">2026</option>
                                                    <option value=\"2025\">2025</option>
                                                    <option value=\"2024\">2024</option>
                                                </select>
                                            </div>
                                        </div><!--end col--> #}
                                    </div><!--end grid-->
                                </form>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                    <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                        <thead class=\"text-left\">
                                            <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employee_share\">Employee Name</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Policy Name</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Request Date</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Is Half Day</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Total Leave Days</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Status</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Reason</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Updated By</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                        {% set holiday_status = {
                                            0: 'Pending',
                                            1: 'Approved',
                                            2: 'Rejected'
                                        } %}
                                        {# {{ dump(pagibigConfigs) }} #}
                                            {% for leave in leaveRequests %}
                                                    <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">{{ leave.emp_name }}</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">{{ leave.selected_leave_policy_name }}</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">{{ leave.date_start|date('Y-m-d') }} to {{ leave.date_end|date('Y-m-d') }}</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">{{ leave.is_half_day ? 'Yes' : 'No' }}</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">{{ leave.total_days_requested }}</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">{{ holiday_status[leave.status] }}</td> 
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">{{ leave.reason }}</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">{{ leave.updated_by_name }}</td>
                                                        {% if leave.status == 0 %}
                                                            <td class=\"px-3.5 py-2.5\">
                                                                <div class=\"flex gap-2\">
                                                                    {# <a data-modal-target=\"editLeaveRequest{{ leave.id }}\" class=\"flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500\">
                                                                        <i data-lucide=\"pencil\" class=\"size-4\"></i>
                                                                    </a> #}
                                                                    <a data-modal-target=\"approveLeaveRequest{{ leave.id }}\" class=\"edit-model_types flex items-center justify-center size-8 text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500\">
                                                                        <i data-lucide=\"check\" class=\"size-4\"></i>
                                                                    </a>
                                                                    <a data-modal-target=\"rejectLeaveRequest{{ leave.id }}\" data-modal-target=\"deleteModal\" class=\"edit-model_types flex items-center justify-center size-8 text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500\">
                                                                        <i data-lucide=\"x\" class=\"size-4\"></i>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        {% endif %}
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


<div id=\"addLeaveRequest\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Leave Request</h5>
            <button data-modal-close=\"addLeaveRequest\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"{{ path('create_leave_request') }}\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <label for=\"emp_record_id\" class=\"inline-block mb-2 text-base font-medium\">Employee</label>
                    <span class=\"text-red-500\">*</span>
                    <select id=\"emp_record_id\" name=\"emp_record_id\" class=\"form-input\">
                        <option value=\"\"></option>
                        {% for employee in employees %}
                            <option value=\"{{ employee.emp_id }}\">{{ employee.emp_fullname }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"leave_policy\" class=\"inline-block mb-2 text-base font-medium\">Leave</label>
                    <select id=\"leave_policy\" name=\"leave_policy\" class=\"form-input\">
                           
                        {% for leave_policy in leave_policies %}
                            <option value=\"{{ leave_policy.id }}\">{{ leave_policy.name }}</option>
                        {% endfor %}
                    </select>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"date_start\" class=\"inline-block mb-2 text-base font-medium\">Date Start</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"date_start\" name=\"date_start\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" data-required=\"true\" readonly=\"readonly\" placeholder=\"Enter Date Start\" required>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"date_end\" class=\"inline-block mb-2 text-base font-medium\">Date End</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"date_end\" name=\"date_end\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Enter Date End\" required>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"is_half_day\" class=\"inline-block mb-2 text-base font-medium\">Half Day</label>
                    <select id=\"is_half_day\" name=\"is_half_day\" class=\"form-input\">
                        <option value=\"True\">Yes</option>
                        <option value=\"False\">No</option>
                    </select>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"year\" class=\"inline-block mb-2 text-base font-medium\">Year</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" id=\"year\" name=\"year\" class=\"form-input numbers-only max-length-year\" placeholder=\"Enter Year\" required>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"reason\" class=\"inline-block mb-2 text-base font-medium\">Reason</label>
                    <textarea id=\"reason\" name=\"reason\" class=\"form-input\" placeholder=\"Enter Reason (optional)\"></textarea>
                </div>
            </div>
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"addLeaveRequest\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Save</button>
        </div>
    </form>
    </div>
</div><!--end add user-->

{% for leave in leaveRequests %}
<div id=\"approveLeaveRequest{{ leave.id }}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Update Leave Request</h5>
            <button data-modal-close=\"approveLeaveRequest{{ leave.id }}\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <h5 class=\"mb-3 text-16\">Approve Leave?</h5>
            <p class=\"text-slate-500 dark:text-zink-200\">Are you sure you want to approve this leave request?</p>
            <form action=\"{{ path('approve_leave_request') }}\" method=\"post\">
            <input type=\"hidden\" name=\"leave_request_id\" value=\"{{ leave.id }}\">
            <input type=\"hidden\" name=\"status\" value=\"1\">
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"approveLeaveRequest{{ leave.id }}\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Update</button>
        </div>
    </form>
    </div>
</div>

<div id=\"rejectLeaveRequest{{ leave.id }}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Update Leave Request</h5>
            <button data-modal-close=\"rejectLeaveRequest{{ leave.id }}\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <h5 class=\"mb-3 text-16\">Reject Leave?</h5>
            <p class=\"text-slate-500 dark:text-zink-200\">Are you sure you want to reject this leave request?</p>
            <form action=\"{{ path('approve_leave_request') }}\" method=\"post\">
            <input type=\"hidden\" name=\"leave_request_id\" value=\"{{ leave.id }}\">
            <input type=\"hidden\" name=\"status\" value=\"2\">
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"rejectLeaveRequest{{ leave.id }}\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Update</button>
        </div>
    </form>
    </div>
</div>
{% endfor %}

{# {% for leave in leaveRequests %}
<div id=\"editPagibigConfig{{leave.id}}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Model Type</h5>
            <button data-modal-close=\"editPagibigConfig{{leave.id}}\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"{{ path('app_pagibig_config_edit') }}\" method=\"post\">
            <input type=\"hidden\" name=\"pagibig_config_id\" value=\"{{leave.id}}\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <label for=\"model_type_name\" class=\"inline-block mb-2 text-base font-medium\">Employee Share</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"model_type_name\" name=\"employee_share\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Employee Share\" value=\"{{leave.employee_share}}\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"model_type_code\" class=\"inline-block mb-2 text-base font-medium\">Employer Share</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"model_type_code\" name=\"employer_share\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Employer Share\" value=\"{{leave.employer_share}}\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"monthly_compensation_cap\" class=\"inline-block mb-2 text-base font-medium\">Monthly Compensation Cap</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"monthly_compensation_cap\" name=\"monthly_compensation_cap\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Monthly Cap\" value=\"{{leave.monthly_compensation_cap}}\" required>
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" id=\"close-modal\" data-modal-close=\"editPagibigConfig{{leave.id}}\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div><!--end add user-->

<div id=\"deletepagibigConfig{{leave.id}}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deletepagibigConfig\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"{{asset('assets/images/delete.png')}}\" alt=\"\" class=\"block h-12 mx-auto\">
            <form action=\"{{ path('app_pagibig_config_delete') }}\" method=\"post\">
                <input type=\"hidden\" name=\"pagibig_config_id\" value=\"{{leave.id}}\">
                <div class=\"mt-5 text-center\">
                    <h5 class=\"mb-1\">Are you sure?</h5>
                    <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                    <div class=\"flex justify-center gap-2 mt-6\">
                        <button type=\"reset\" data-modal-close=\"deletepagibigConfig\" class=\"bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10\">Cancel</button>
                        <button type=\"submit\" class=\"text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Yes, Delete It!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{% endfor %} #}


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
\$(document).ready(function () {

    const status = \$('#status');

    console.log(status.data('status'));

    if (status.length) {
        if (status.data('status') == 'success') {
            // The element exists
            Toastify({
                newWindow: true,
                text: 'Model Type added successfully',
                gravity: 'top',
                position: 'right',
                className: \"bg-green-500\",
                stopOnFocus: true,
                offset: {
                    x: 0, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                    y: 0, // vertical axis - can be a number or a string indicating unity. eg: '2em'
                },
                duration: 3000,
                close: true,
            }).showToast();
        } else {
            Toastify({
                newWindow: true,
                text: 'Model Type not added, something went wrong.',
                gravity: 'top',
                position: 'right',
                className: \"bg-red-500\",
                stopOnFocus: true,
                offset: {
                    x: 0, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                    y: 0, // vertical axis - can be a number or a string indicating unity. eg: '2em'
                },
                duration: 3000,
                close: true,
            }).showToast();
        }
    }

    \$('.max-length-year').on('input', function () {
        if (\$(this).val().length > 4) {
            \$(this).val(\$(this).val().slice(0, 4)); // Trim the value to 4 characters
        }
    });

    // validate add leave request form
    \$('#addLeaveRequest').on('submit', function (e) {
        var emp_record_id = \$('#emp_record_id').val();
        var leave_policy = \$('#leave_policy').val();
        var date_start = \$('#date_start').val();
        var date_end = \$('#date_end').val();
        var year = \$('#year').val();

        if (emp_record_id == '' || leave_policy == '' || date_start == '' || date_end == '' || year == '') {
            e.preventDefault(); // Prevent form submission
            showToast('Please fill in all required fields.', 'bg-red-500');
        }
    });
})
</script>

{% endblock %}", "leave_request/apps-leave-request.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\leave_request\\apps-leave-request.html.twig");
    }
}
