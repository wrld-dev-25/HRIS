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

/* leave_policy/leave_policy.html.twig */
class __TwigTemplate_d74342b67961b00bdb1b285199bd4f3a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leave_policy/leave_policy.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "leave_policy/leave_policy.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Leave Policy";
        
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Leave Administration", "title" => "Leave Policy"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"divisionTable\">
                            <div class=\"card-body\">
                                <div class=\"flex items-center\">
                                    <h6 class=\"text-15 grow\">Leave Policy List</h6>
                                    <div class=\"shrink-0\">
                                        <button data-modal-target=\"addLeavePolicy\" type=\"button\" class=\"add-leave_policy text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Add Leave Policy</span></button>
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
                                    </div><!--end grid-->
                                </form>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                    <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                        <thead class=\"text-left\">
                                            <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employee_share\">Name</th>
                                                ";
        // line 36
        yield "                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Description</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employee_share\">Days</th>
                                                ";
        // line 39
        yield "                                                ";
        // line 40
        yield "                                                ";
        // line 41
        yield "                                                ";
        // line 43
        yield "                                                ";
        // line 45
        yield "                                                ";
        // line 46
        yield "                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                        ";
        // line 50
        yield "                                            ";
        $context["gender_labels"] = ["All", "Male", "Female", "Other"];
        // line 56
        yield "
                                            ";
        // line 57
        $context["marital_labels"] = ["All", "Single", "Married", "Widowed"];
        // line 63
        yield "
                                            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["leave_policies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["leave_policy"]) {
            // line 65
            yield "                                                    <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "name", [], "any", false, false, false, 66), "html", null, true);
            yield " </td>
                                                        ";
            // line 68
            yield "                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "description", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "days", [], "any", false, false, false, 69), "html", null, true);
            yield " </td>
                                                        ";
            // line 72
            yield "                                                        ";
            // line 73
            yield "                                                        ";
            // line 75
            yield "                                                        ";
            // line 77
            yield "                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                            <div class=\"action-leave_policy relative dropdown\">
                                                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                    <li>
                                                                        <a data-modal-target=\"editLeavePolicy";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "id", [], "any", false, false, false, 82), "html", null, true);
            yield "\" class=\"edit-leave_policy block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                    </li>
                                                                    ";
            // line 87
            yield "                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave_policy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "                                        </tbody>
                                    </table>
                                    <div class=\"noresult\" style=\"display: none\">
                                        <div class=\"py-6 text-center\">
                                            <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                            <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                            ";
        // line 99
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->


<div id=\"addLeavePolicy\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Leave Policy</h5>
            <button data-modal-close=\"addLeavePolicy\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
        ";
        // line 116
        yield "            <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_policy_create");
        yield "\" method=\"post\"> 
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <label for=\"name\" class=\"inline-block mb-2 text-base font-medium\">Name</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-input\" placeholder=\"Enter Policy Name\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"year\" class=\"inline-block mb-2 text-base font-medium\">Year</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"year\" name=\"year\" class=\"form-input numbers-only max-length-year\" placeholder=\"Enter Year\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"department\" class=\"inline-block mb-2 text-base font-medium\">Department</label>
                        <select id=\"department\" name=\"department\" class=\"form-input\">
                            <option value=\"0\">All</option>
                            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["departments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 135
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 135), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 135), "html", null, true);
            yield "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        yield "                        </select>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"description\" class=\"inline-block mb-2 text-base font-medium\">Description</label>
                        <textarea id=\"description\" name=\"description\" class=\"form-input\" placeholder=\"Enter Description (optional)\"></textarea>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"days\" class=\"inline-block mb-2 text-base font-medium\">Days</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"days\" name=\"days\" class=\"form-input numbers-only\" placeholder=\"Enter Number of Days\" required>
                    </div>

                    ";
        // line 161
        yield "
                    <div class=\"xl:col-span-12\">
                        <label for=\"gender\" class=\"inline-block mb-2 text-base font-medium\">Gender</label>
                        <span class=\"text-red-500\">*</span>
                        <select id=\"gender\" name=\"gender\" class=\"form-input\" required>
                            <option value=\"0\">All</option>
                            <option value=\"1\">Male</option>
                            <option value=\"2\">Female</option>
                            <option value=\"3\">Other</option>
                        </select>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"marital\" class=\"inline-block mb-2 text-base font-medium\">Marital Status</label>
                        <span class=\"text-red-500\">*</span>
                        <select id=\"marital\" name=\"marital\" class=\"form-input\" required>
                            <option value=\"0\">All</option>
                            <option value=\"1\">Single</option>
                            <option value=\"2\">Married</option>
                            <option value=\"3\">Widowed</option>
                        </select>
                    </div>

                    ";
        // line 195
        yield "
                    ";
        // line 201
        yield "                </div>
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"addLeavePolicy\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Save</button>
        </div>
    </form>
    </div>
</div>

";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["leave_policies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["leave_policy"]) {
            // line 212
            yield "<div id=\"editLeavePolicy";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "id", [], "any", false, false, false, 212), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Leave Policy</h5>
            <button data-modal-close=\"editLeavePolicy";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "id", [], "any", false, false, false, 216), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
            // line 219
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_leave_policy_update");
            yield "\" method=\"post\">
                <input type=\"hidden\" name=\"leave_policy_id\" value=\"";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "id", [], "any", false, false, false, 220), "html", null, true);
            yield "\">
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <label for=\"name\" class=\"inline-block mb-2 text-base font-medium\">Name</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-input\" value=\"";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "name", [], "any", false, false, false, 225), "html", null, true);
            yield "\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"year\" class=\"inline-block mb-2 text-base font-medium\">Year</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"year\" name=\"year\" class=\"form-input numbers-only max-length-year\" value=\"";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "year", [], "any", false, false, false, 231), "html", null, true);
            yield "\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"department\" class=\"inline-block mb-2 text-base font-medium\">Department</label>
                        <select id=\"department\" name=\"department\" class=\"form-input\">
                            <option value=\"0\">All</option>
                            ";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["departments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 239
                yield "                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["department"], "id", [], "any", false, false, false, 239), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 239) == CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "department", [], "any", false, false, false, 239))) {
                    yield "selected";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["department"], "name", [], "any", false, false, false, 239), "html", null, true);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            yield "                        </select>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"description\" class=\"inline-block mb-2 text-base font-medium\">Description</label>
                        <textarea id=\"description\" name=\"description\" class=\"form-input\">";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "description", [], "any", false, false, false, 246), "html", null, true);
            yield "</textarea>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"days\" class=\"inline-block mb-2 text-base font-medium\">Days</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"days\" name=\"days\" class=\"form-input numbers-only\" value=\"";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "days", [], "any", false, false, false, 252), "html", null, true);
            yield "\" required>
                    </div>

                    ";
            // line 265
            yield "
                    <div class=\"xl:col-span-12\">
                        <label for=\"gender\" class=\"inline-block mb-2 text-base font-medium\">Gender</label>
                        <span class=\"text-red-500\">*</span>
                        <select id=\"gender\" name=\"gender\" class=\"form-input\" required>
                            <option value=\"0\" ";
            // line 270
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "gender", [], "any", false, false, false, 270) == "0")) {
                yield "selected";
            }
            yield ">All</option>
                            <option value=\"1\" ";
            // line 271
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "gender", [], "any", false, false, false, 271) == "1")) {
                yield "selected";
            }
            yield ">Male</option>
                            <option value=\"2\" ";
            // line 272
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "gender", [], "any", false, false, false, 272) == "2")) {
                yield "selected";
            }
            yield ">Female</option>
                            <option value=\"3\" ";
            // line 273
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "gender", [], "any", false, false, false, 273) == "3")) {
                yield "selected";
            }
            yield ">Other</option>
                        </select>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"marital\" class=\"inline-block mb-2 text-base font-medium\">Marital Status</label>
                        <span class=\"text-red-500\">*</span>
                        <select id=\"marital\" name=\"marital\" class=\"form-input\" required>
                            <option value=\"0\" ";
            // line 281
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "marital", [], "any", false, false, false, 281) == 0)) {
                yield "selected";
            }
            yield ">All</option>
                            <option value=\"1\" ";
            // line 282
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "marital", [], "any", false, false, false, 282) == 1)) {
                yield "selected";
            }
            yield ">Single</option>
                            <option value=\"2\" ";
            // line 283
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "marital", [], "any", false, false, false, 283) == 2)) {
                yield "selected";
            }
            yield ">Married</option>
                            <option value=\"3\" ";
            // line 284
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "marital", [], "any", false, false, false, 284) == 3)) {
                yield "selected";
            }
            yield ">Widowed</option>
                        </select>
                    </div>

                    ";
            // line 299
            yield "                </div>                
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"editLeavePolicy";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "id", [], "any", false, false, false, 302), "html", null, true);
            yield "\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Save</button>
        </div>
    </form>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave_policy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        yield "


";
        // line 312
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["status"], "method", false, false, false, 312));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 313
            yield "    <div class=\"hidden\" id=\"status\" data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 315
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 318
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 319
        yield "
<script src=\"";
        // line 320
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 322
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-list-init.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
<script src=\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 327
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

    // validate add leave policy form and all of its input which is required
    \$('#addLeavePolicy').on('submit', function (e) {
        var isValid = true;
        \$(this).find('input[required], select[required]').each(function () {
            if (\$(this).val() === '') {
                isValid = false;
                \$(this).addClass('border-red-500');
            } else {
                \$(this).removeClass('border-red-500');
            }
        });
        if (!isValid) {
            e.preventDefault(); // Prevent form submission if validation fails
            Toastify({
                newWindow: true,
                text: 'Please fill in all required fields.',
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
    });


})
</script>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "leave_policy/leave_policy.html.twig";
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
        return array (  536 => 327,  532 => 325,  526 => 322,  522 => 321,  518 => 320,  515 => 319,  508 => 318,  499 => 315,  490 => 313,  486 => 312,  481 => 309,  468 => 302,  463 => 299,  454 => 284,  448 => 283,  442 => 282,  436 => 281,  423 => 273,  417 => 272,  411 => 271,  405 => 270,  398 => 265,  392 => 252,  383 => 246,  376 => 241,  361 => 239,  357 => 238,  347 => 231,  338 => 225,  330 => 220,  326 => 219,  320 => 216,  312 => 212,  308 => 211,  296 => 201,  293 => 195,  268 => 161,  252 => 137,  241 => 135,  237 => 134,  215 => 116,  197 => 99,  189 => 92,  179 => 87,  174 => 82,  167 => 77,  165 => 75,  163 => 73,  161 => 72,  157 => 69,  152 => 68,  148 => 66,  145 => 65,  141 => 64,  138 => 63,  136 => 57,  133 => 56,  130 => 50,  125 => 46,  123 => 45,  121 => 43,  119 => 41,  117 => 40,  115 => 39,  111 => 36,  79 => 6,  76 => 5,  69 => 4,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "leave_policy/leave_policy.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\leave_policy\\leave_policy.html.twig");
    }
}
