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

/* administration/overtime_request.html.twig */
class __TwigTemplate_e74fe4ba99058d789075593abde2951d extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "administration/overtime_request.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Overtime Request";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Overtime Request", "title" => ""]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"divisionTable\">
                            ";
        // line 19
        yield "                            <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
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
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Reason</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Overtime Hours Requested</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Status</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Updated By</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                        ";
        // line 54
        $context["holiday_status"] = ["Pending", "Approved", "Rejected"];
        // line 59
        yield "                                        ";
        // line 60
        yield "                                            ";
        if (($context["overtimeRequest"] ?? null)) {
            // line 61
            yield "                                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["overtimeRequest"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ot_request"]) {
                // line 62
                yield "                                                    <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 worker_logs_date\">";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "worker_logs_date", [], "any", false, false, false, 63), "Y-m-d"), "html", null, true);
                yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 reason\">";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "reason", [], "any", false, false, false, 64), "html", null, true);
                yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 hours_requested\">
                                                            ";
                // line 67
                yield "                                                            ";
                $context["timeParts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "hours_requested", [], "any", false, false, false, 67), ":");
                // line 68
                yield "                                                            ";
                $context["hours"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["timeParts"] ?? null), 0, [], "array", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_0 = ($context["timeParts"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), 0)) : (0)), 0, ".", "");
                // line 69
                yield "                                                            ";
                $context["minutes"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["timeParts"] ?? null), 1, [], "array", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_1 = ($context["timeParts"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), 0)) : (0)), 0, ".", "");
                // line 70
                yield "                                                            ";
                (((($context["hours"] ?? null) > 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["hours"] ?? null) . " hour/s"), "html", null, true)) : (yield ""));
                yield ((((($context["hours"] ?? null) > 0) && (($context["minutes"] ?? null) > 0))) ? (" and ") : (""));
                (((($context["minutes"] ?? null) > 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["minutes"] ?? null) . " min/s"), "html", null, true)) : (yield ""));
                yield "
                                                        </td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 status\">";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = ($context["holiday_status"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "status", [], "any", false, false, false, 72)] ?? null) : null), "html", null, true);
                yield "</td> 
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "approved_by", [], "any", false, false, false, 73), "html", null, true);
                yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                            <div class=\"action-model_types relative dropdown\">
                                                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                    <li>
                                                                        <a data-modal-target=\"editOvertimeRequest";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 79), "html", null, true);
                yield "\" class=\"edit-model_types block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-modal-target=\"approveOvertimeRequest";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 82), "html", null, true);
                yield "\" class=\"edit-model_types block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Approve</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-modal-target=\"rejectOvertimeRequest";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 85), "html", null, true);
                yield "\" class=\"edit-model_types block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Reject</span></a>
                                                                    </li>
                                                                    ";
                // line 90
                yield "                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ot_request'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield "                                            ";
        }
        // line 96
        yield "                                        </tbody>
                                    </table>
                                    <div class=\"noresult\" style=\"display: none\">
                                        <div class=\"py-6 text-center\">
                                            <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                            <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                            ";
        // line 103
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->


";
        // line 181
        yield "
";
        // line 225
        yield "
";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["overtimeRequest"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ot_request"]) {
            // line 227
            yield "<div id=\"approveOvertimeRequest";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 227), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Update Overtime Request</h5>
            <button data-modal-close=\"approveOvertimeRequest";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 231), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <h5 class=\"mb-3 text-16\">Approve Overtime?</h5>
            <p class=\"text-slate-500 dark:text-zink-200\">Are you sure you want to approve this overtime request?</p>
            <form action=\"";
            // line 236
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_overtime_request_status");
            yield "\" method=\"post\">
            <input type=\"hidden\" name=\"ot_request_id\" value=\"";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 237), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"status\" value=\"1\">
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"approveOvertimeRequest";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 241), "html", null, true);
            yield "\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Approve</button>
        </div>
    </form>
    </div>
</div>

<div id=\"rejectOvertimeRequest";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 248), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Update Overtime Request</h5>
            <button data-modal-close=\"rejectOvertimeRequest";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 252), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <h5 class=\"mb-3 text-16\">Reject Overtime?</h5>
            <p class=\"text-slate-500 dark:text-zink-200\">Are you sure you want to reject this overtime request?</p>
            <form action=\"";
            // line 257
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_overtime_request_status");
            yield "\" method=\"post\">
            <input type=\"hidden\" name=\"ot_request_id\" value=\"";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 258), "html", null, true);
            yield "\">
            <input type=\"hidden\" name=\"status\" value=\"2\">
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"rejectOvertimeRequest";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 262), "html", null, true);
            yield "\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Reject</button>
        </div>
    </form>
    </div>
</div>

<div id=\"editOvertimeRequest";
            // line 269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 269), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Overtime Request</h5>
            <button data-modal-close=\"editOvertimeRequest";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 273), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
            // line 276
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_overtime_request_v2");
            yield "\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <input type=\"hidden\" name=\"ot_request_id\" value=\"";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 279), "html", null, true);
            yield "\">
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"date_start\" class=\"inline-block mb-2 text-base font-medium\">Overtime hour/s</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"ot_hours\" name=\"ot_hours\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"timepickr\" data-time-hrs=\"true\"  data-default-time=\"";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "hours_requested", [], "any", false, false, false, 285), "html", null, true);
            yield "\" placeholder=\"Add Time\" value=\"\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"reason\" class=\"inline-block mb-2 text-base font-medium\">Reason</label>
                    <textarea id=\"reason\" name=\"reason\" class=\"form-input\" placeholder=\"Enter Reason (optional)\">";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "reason", [], "any", false, false, false, 289), "html", null, true);
            yield "</textarea>
                </div>
            </div>
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"editOvertimeRequest";
            // line 294
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 294), "html", null, true);
            yield "\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Save</button>
        </div>
    </form>
    </div>
</div><!--end add user-->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ot_request'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 301
        yield "

";
        // line 303
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["status"], "method", false, false, false, 303));
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
        return; yield '';
    }

    // line 309
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "administration/overtime_request.html.twig";
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
        return array (  390 => 318,  386 => 316,  380 => 313,  376 => 312,  372 => 311,  369 => 310,  365 => 309,  359 => 306,  350 => 304,  346 => 303,  342 => 301,  329 => 294,  321 => 289,  314 => 285,  305 => 279,  299 => 276,  293 => 273,  286 => 269,  276 => 262,  269 => 258,  265 => 257,  257 => 252,  250 => 248,  240 => 241,  233 => 237,  229 => 236,  221 => 231,  213 => 227,  209 => 226,  206 => 225,  203 => 181,  192 => 103,  184 => 96,  181 => 95,  171 => 90,  166 => 85,  160 => 82,  154 => 79,  145 => 73,  141 => 72,  133 => 70,  130 => 69,  127 => 68,  124 => 67,  119 => 64,  115 => 63,  112 => 62,  107 => 61,  104 => 60,  102 => 59,  100 => 54,  81 => 37,  72 => 19,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "administration/overtime_request.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/administration/overtime_request.html.twig");
    }
}
