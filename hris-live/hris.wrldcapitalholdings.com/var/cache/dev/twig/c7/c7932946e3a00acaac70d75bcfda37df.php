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
class __TwigTemplate_db70efbefa311abff28db5a41a102f55 extends Template
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

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "leave_policy/leave_policy.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "leave_policy/leave_policy.html.twig", 1);
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

        yield "Leave Policy";
        
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["leave_policies"]) || array_key_exists("leave_policies", $context) ? $context["leave_policies"] : (function () { throw new RuntimeError('Variable "leave_policies" does not exist.', 64, $this->source); })()));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["departments"]) || array_key_exists("departments", $context) ? $context["departments"] : (function () { throw new RuntimeError('Variable "departments" does not exist.', 134, $this->source); })()));
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["leave_policies"]) || array_key_exists("leave_policies", $context) ? $context["leave_policies"] : (function () { throw new RuntimeError('Variable "leave_policies" does not exist.', 211, $this->source); })()));
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
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["departments"]) || array_key_exists("departments", $context) ? $context["departments"] : (function () { throw new RuntimeError('Variable "departments" does not exist.', 238, $this->source); })()));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 312, $this->source); })()), "flashes", ["status"], "method", false, false, false, 312));
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 318
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
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
        return array (  557 => 327,  553 => 325,  547 => 322,  543 => 321,  539 => 320,  536 => 319,  526 => 318,  514 => 315,  505 => 313,  501 => 312,  496 => 309,  483 => 302,  478 => 299,  469 => 284,  463 => 283,  457 => 282,  451 => 281,  438 => 273,  432 => 272,  426 => 271,  420 => 270,  413 => 265,  407 => 252,  398 => 246,  391 => 241,  376 => 239,  372 => 238,  362 => 231,  353 => 225,  345 => 220,  341 => 219,  335 => 216,  327 => 212,  323 => 211,  311 => 201,  308 => 195,  283 => 161,  267 => 137,  256 => 135,  252 => 134,  230 => 116,  212 => 99,  204 => 92,  194 => 87,  189 => 82,  182 => 77,  180 => 75,  178 => 73,  176 => 72,  172 => 69,  167 => 68,  163 => 66,  160 => 65,  156 => 64,  153 => 63,  151 => 57,  148 => 56,  145 => 50,  140 => 46,  138 => 45,  136 => 43,  134 => 41,  132 => 40,  130 => 39,  126 => 36,  94 => 6,  91 => 5,  81 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Leave Policy{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Leave Administration', title: 'Leave Policy' }) }}

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
                                                {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Year</th> #}
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Description</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employee_share\">Days</th>
                                                {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Calendar Color</th> #}
                                                {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Type</th> #}
                                                {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employee_share\">Department</th> #}
                                                {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Gender</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Marital</th> #}
                                                {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Increment amount</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Years before increment</th> #}
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

                                            {% for leave_policy in leave_policies %}
                                                    <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">{{ leave_policy.name }} </td>
                                                        {# <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">{{ leave_policy.year }} </td> #}
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">{{ leave_policy.description }}</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">{{ leave_policy.days }} </td>
                                                        {# <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">{{ leave_policy.calendar_color }} </td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">{{ leave_policy.type }}</td> #}
                                                        {# <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">{{ leave_policy.department }} </td> #}
                                                        {# <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">{{ gender_labels[leave_policy.gender] }} </td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">{{ marital_labels[leave_policy.marital] }} </td> #}
                                                        {# <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">{{ leave_policy.increment_amount }} </td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">{{ leave_policy.years_before_increment }} </td> #}
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                            <div class=\"action-leave_policy relative dropdown\">
                                                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                    <li>
                                                                        <a data-modal-target=\"editLeavePolicy{{leave_policy.id}}\" class=\"edit-leave_policy block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                    </li>
                                                                    {# <li>
                                                                        <a data-modal-target=\"deletepagibigConfig{{leave_policy.id}}\" class=\"delete-leave_policy block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                    </li> #}
                                                                </ul>
                                                            </div>
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


<div id=\"addLeavePolicy\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Leave Policy</h5>
            <button data-modal-close=\"addLeavePolicy\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
        {# app_leave_policy_create #}
            <form action=\"{{ path('app_leave_policy_create') }}\" method=\"post\"> 
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
                            {% for department in departments %}
                                <option value=\"{{ department.id }}\">{{ department.name }}</option>
                            {% endfor %}
                        </select>
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

                    {# <div class=\"xl:col-span-12\">
                        <label for=\"calendar_color\" class=\"inline-block mb-2 text-base font-medium\">Calendar Color</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"color\" id=\"calendar_color\" name=\"calendar_color\" class=\"form-input\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"type\" class=\"inline-block mb-2 text-base font-medium\">Type</label>
                        <input type=\"text\" id=\"type\" name=\"type\" class=\"form-input\" placeholder=\"Enter Type (optional)\">
                    </div> #}

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

                    {# <div class=\"xl:col-span-12\">
                        <label for=\"increment_amount\" class=\"inline-block mb-2 text-base font-medium\">Increment Amount</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"increment_amount\" name=\"increment_amount\" class=\"form-input\" placeholder=\"Enter Increment Amount\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"years_before_increment\" class=\"inline-block mb-2 text-base font-medium\">Years Before Increment</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"years_before_increment\" name=\"years_before_increment\" class=\"form-input\" placeholder=\"Enter Years Before Increment\" required>
                    </div> #}

                    {# <div class=\"xl:col-span-12\">
                        <label for=\"is_carried_over\" class=\"inline-block mb-2 text-base font-medium\">Carried Over</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"checkbox\" id=\"is_carried_over\" name=\"is_carried_over\" class=\"form-checkbox\">
                    </div> #}
                </div>
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"addLeavePolicy\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Save</button>
        </div>
    </form>
    </div>
</div>

{% for leave_policy in leave_policies %}
<div id=\"editLeavePolicy{{ leave_policy.id }}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Leave Policy</h5>
            <button data-modal-close=\"editLeavePolicy{{ leave_policy.id }}\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"{{ path('app_leave_policy_update') }}\" method=\"post\">
                <input type=\"hidden\" name=\"leave_policy_id\" value=\"{{leave_policy.id}}\">
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <label for=\"name\" class=\"inline-block mb-2 text-base font-medium\">Name</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-input\" value=\"{{ leave_policy.name }}\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"year\" class=\"inline-block mb-2 text-base font-medium\">Year</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"year\" name=\"year\" class=\"form-input numbers-only max-length-year\" value=\"{{ leave_policy.year }}\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"department\" class=\"inline-block mb-2 text-base font-medium\">Department</label>
                        <select id=\"department\" name=\"department\" class=\"form-input\">
                            <option value=\"0\">All</option>
                            {% for department in departments %}
                                <option value=\"{{ department.id }}\" {% if department.name == leave_policy.department %}selected{% endif %}>{{ department.name }}</option>
                            {% endfor %}
                        </select>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"description\" class=\"inline-block mb-2 text-base font-medium\">Description</label>
                        <textarea id=\"description\" name=\"description\" class=\"form-input\">{{ leave_policy.description }}</textarea>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"days\" class=\"inline-block mb-2 text-base font-medium\">Days</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"days\" name=\"days\" class=\"form-input numbers-only\" value=\"{{ leave_policy.days }}\" required>
                    </div>

                    {# <div class=\"xl:col-span-12\">
                        <label for=\"calendar_color\" class=\"inline-block mb-2 text-base font-medium\">Calendar Color</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"color\" id=\"calendar_color\" name=\"calendar_color\" class=\"form-input\" value=\"{{ leave_policy.calendar_color }}\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"type\" class=\"inline-block mb-2 text-base font-medium\">Type</label>
                        <input type=\"text\" id=\"type\" name=\"type\" class=\"form-input\" value=\"{{ leave_policy.type }}\">
                    </div> #}

                    <div class=\"xl:col-span-12\">
                        <label for=\"gender\" class=\"inline-block mb-2 text-base font-medium\">Gender</label>
                        <span class=\"text-red-500\">*</span>
                        <select id=\"gender\" name=\"gender\" class=\"form-input\" required>
                            <option value=\"0\" {% if leave_policy.gender == \"0\" %}selected{% endif %}>All</option>
                            <option value=\"1\" {% if leave_policy.gender == \"1\" %}selected{% endif %}>Male</option>
                            <option value=\"2\" {% if leave_policy.gender == \"2\" %}selected{% endif %}>Female</option>
                            <option value=\"3\" {% if leave_policy.gender == \"3\" %}selected{% endif %}>Other</option>
                        </select>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"marital\" class=\"inline-block mb-2 text-base font-medium\">Marital Status</label>
                        <span class=\"text-red-500\">*</span>
                        <select id=\"marital\" name=\"marital\" class=\"form-input\" required>
                            <option value=\"0\" {% if leave_policy.marital == 0 %}selected{% endif %}>All</option>
                            <option value=\"1\" {% if leave_policy.marital == 1 %}selected{% endif %}>Single</option>
                            <option value=\"2\" {% if leave_policy.marital == 2 %}selected{% endif %}>Married</option>
                            <option value=\"3\" {% if leave_policy.marital == 3 %}selected{% endif %}>Widowed</option>
                        </select>
                    </div>

                    {# <div class=\"xl:col-span-12\">
                        <label for=\"increment_amount\" class=\"inline-block mb-2 text-base font-medium\">Increment Amount</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"increment_amount\" name=\"increment_amount\" class=\"form-input\" value=\"{{ leave_policy.increment_amount }}\" required>
                    </div>

                    <div class=\"xl:col-span-12\">
                        <label for=\"years_before_increment\" class=\"inline-block mb-2 text-base font-medium\">Years Before Increment</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" id=\"years_before_increment\" name=\"years_before_increment\" class=\"form-input\" value=\"{{ leave_policy.years_before_increment }}\" required>
                    </div> #}
                </div>                
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"editLeavePolicy{{ leave_policy.id }}\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Save</button>
        </div>
    </form>
    </div>
</div>
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

{% endblock %}", "leave_policy/leave_policy.html.twig", "C:\\Users\\SUNIT226\\Desktop\\Repos\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\leave_policy\\leave_policy.html.twig");
    }
}
