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

/* apps-hr-create-leave.html.twig */
class __TwigTemplate_b75e83aad0381c00ddb3b6adf49dedf5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apps-hr-create-leave.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "apps-hr-create-leave.html.twig"));

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

        yield "Add Leave (HR)";
        
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
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Leaves Manage", "title" => "Add Leave (HR)"]);
        yield "


                <div class=\"grid grid-cols-1 xl:grid-cols-12 gap-x-5\">
                    <div class=\"xl:col-span-9\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15 grow\">Add Leave</h6>
                                <form action=\"#!\">
                                    <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-12\">
                                        <div class=\"xl:col-span-6\">
                                            <div>
                                                <label for=\"employeeName\" class=\"inline-block mb-2 text-base font-medium\">Employee</label>
                                                <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices data-choices-search-false name=\"employeeName\" id=\"employeeName\">
                                                    <option value=\"\">Select Employee</option>
                                                    <option value=\"Willie Torres\">Willie Torres</option>
                                                    <option value=\"Patricia Garcia\">Patricia Garcia</option>
                                                    <option value=\"Juliette Fecteau\">Juliette Fecteau</option>
                                                    <option value=\"Thomas Hatfield\">Thomas Hatfield</option>
                                                    <option value=\"Willie Torres\">Willie Torres</option>
                                                    <option value=\"Juliette Fecteau\">Juliette Fecteau</option>
                                                    <option value=\"Nancy Reynolds\">Nancy Reynolds</option>
                                                    <option value=\"Holly Kavanaugh\">Holly Kavanaugh</option>
                                                    <option value=\"Jonas Frederiksen\">Jonas Frederiksen</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->
                                        <div class=\"xl:col-span-6\">
                                            <div>
                                                <label for=\"employeeId\" class=\"inline-block mb-2 text-base font-medium\">Employee ID</label>
                                                <input type=\"text\" id=\"employeeId\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"#TWE1001501\" disabled>
                                            </div>
                                        </div><!--end col-->
                                        <div class=\"xl:col-span-6\">
                                            <div>
                                                <label for=\"leaveType\" class=\"inline-block mb-2 text-base font-medium\">Leave Type</label>
                                                <select class=\"form-input border-slate-200 focus:outline-none focus:border-custom-500\" data-choices data-choices-search-false name=\"leaveType\" id=\"leaveType\">
                                                    <option value=\"\">Select Leave Type</option>
                                                    <option value=\"Medical Leave\">Medical Leave</option>
                                                    <option value=\"Casual Leave\">Casual Leave</option>
                                                    <option value=\"Sick Leave\">Sick Leave</option>
                                                    <option value=\"Annual Leave\">Annual Leave</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->
                                        <div class=\"xl:col-span-6\">
                                            <div>
                                                <label for=\"remainingLeaves\" class=\"inline-block mb-2 text-base font-medium\">Remaining Leaves</label>
                                                <input type=\"text\" id=\"remainingLeaves\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"18\" disabled>
                                            </div>
                                        </div><!--end col-->
                                        <div class=\"xl:col-span-6\">
                                            <label for=\"fromInput\" class=\"inline-block mb-2 text-base font-medium\">Form</label>
                                            <input type=\"text\" id=\"fromInput\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\">
                                        </div>
                                        <div class=\"xl:col-span-6\">
                                            <label for=\"toInput\" class=\"inline-block mb-2 text-base font-medium\">To</label>
                                            <input type=\"text\" id=\"toInput\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\">
                                        </div>
                                        <div class=\"xl:col-span-6\">
                                            <div>
                                                <label for=\"numberOfDayLeaves\" class=\"inline-block mb-2 text-base font-medium\">Number of Days</label>
                                                <input type=\"text\" id=\"numberOfDayLeaves\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"01\" disabled>
                                            </div>
                                        </div>
                                        <div class=\"xl:col-span-6\">
                                            <label for=\"leaveDayInput\" class=\"inline-block mb-2 text-base font-medium\">Leave Day</label>
                                            <select class=\"form-input border-slate-200 focus:outline-none focus:border-custom-500\" data-choices data-choices-search-false name=\"leaveDayInput\" id=\"leaveDayInput\">
                                                <option value=\"\">Select Leave Day</option>
                                                <option value=\"Full Day\">Full Day</option>
                                                <option value=\"Half Day\">Half Day</option>
                                            </select>
                                        </div>
                                        <div class=\"md:col-span-2 xl:col-span-12\">
                                            <div>
                                                <label for=\"reasonInput\" class=\"inline-block mb-2 text-base font-medium\">Reason</label>
                                                <textarea class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"reasonInput\" rows=\"3\"></textarea>
                                            </div>
                                        </div>
                                    </div><!--end grid-->
                                    <div class=\"flex justify-end gap-2 mt-4\">
                                        <button type=\"reset\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Reset</button>
                                        <button type=\"submit\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Add Leave</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class=\"xl:col-span-3\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Leave Information (2023)</h6>
                                <div>
                                    <table class=\"w-full mb-0\">
                                        <tbody>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Medical Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">04</th>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Casual Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">08</th>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Sick Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">03</th>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Annual Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">12</th>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Use Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">09</th>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Remaining Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">18</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->

         

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 137
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

        // line 138
        yield "
<!-- App js -->
<script src=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 142
        yield "
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
        return "apps-hr-create-leave.html.twig";
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
        return array (  266 => 142,  262 => 140,  258 => 138,  245 => 137,  104 => 6,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Add Leave (HR){% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Leaves Manage', title: 'Add Leave (HR)' }) }}


                <div class=\"grid grid-cols-1 xl:grid-cols-12 gap-x-5\">
                    <div class=\"xl:col-span-9\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15 grow\">Add Leave</h6>
                                <form action=\"#!\">
                                    <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-12\">
                                        <div class=\"xl:col-span-6\">
                                            <div>
                                                <label for=\"employeeName\" class=\"inline-block mb-2 text-base font-medium\">Employee</label>
                                                <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices data-choices-search-false name=\"employeeName\" id=\"employeeName\">
                                                    <option value=\"\">Select Employee</option>
                                                    <option value=\"Willie Torres\">Willie Torres</option>
                                                    <option value=\"Patricia Garcia\">Patricia Garcia</option>
                                                    <option value=\"Juliette Fecteau\">Juliette Fecteau</option>
                                                    <option value=\"Thomas Hatfield\">Thomas Hatfield</option>
                                                    <option value=\"Willie Torres\">Willie Torres</option>
                                                    <option value=\"Juliette Fecteau\">Juliette Fecteau</option>
                                                    <option value=\"Nancy Reynolds\">Nancy Reynolds</option>
                                                    <option value=\"Holly Kavanaugh\">Holly Kavanaugh</option>
                                                    <option value=\"Jonas Frederiksen\">Jonas Frederiksen</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->
                                        <div class=\"xl:col-span-6\">
                                            <div>
                                                <label for=\"employeeId\" class=\"inline-block mb-2 text-base font-medium\">Employee ID</label>
                                                <input type=\"text\" id=\"employeeId\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"#TWE1001501\" disabled>
                                            </div>
                                        </div><!--end col-->
                                        <div class=\"xl:col-span-6\">
                                            <div>
                                                <label for=\"leaveType\" class=\"inline-block mb-2 text-base font-medium\">Leave Type</label>
                                                <select class=\"form-input border-slate-200 focus:outline-none focus:border-custom-500\" data-choices data-choices-search-false name=\"leaveType\" id=\"leaveType\">
                                                    <option value=\"\">Select Leave Type</option>
                                                    <option value=\"Medical Leave\">Medical Leave</option>
                                                    <option value=\"Casual Leave\">Casual Leave</option>
                                                    <option value=\"Sick Leave\">Sick Leave</option>
                                                    <option value=\"Annual Leave\">Annual Leave</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->
                                        <div class=\"xl:col-span-6\">
                                            <div>
                                                <label for=\"remainingLeaves\" class=\"inline-block mb-2 text-base font-medium\">Remaining Leaves</label>
                                                <input type=\"text\" id=\"remainingLeaves\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"18\" disabled>
                                            </div>
                                        </div><!--end col-->
                                        <div class=\"xl:col-span-6\">
                                            <label for=\"fromInput\" class=\"inline-block mb-2 text-base font-medium\">Form</label>
                                            <input type=\"text\" id=\"fromInput\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\">
                                        </div>
                                        <div class=\"xl:col-span-6\">
                                            <label for=\"toInput\" class=\"inline-block mb-2 text-base font-medium\">To</label>
                                            <input type=\"text\" id=\"toInput\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\">
                                        </div>
                                        <div class=\"xl:col-span-6\">
                                            <div>
                                                <label for=\"numberOfDayLeaves\" class=\"inline-block mb-2 text-base font-medium\">Number of Days</label>
                                                <input type=\"text\" id=\"numberOfDayLeaves\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"01\" disabled>
                                            </div>
                                        </div>
                                        <div class=\"xl:col-span-6\">
                                            <label for=\"leaveDayInput\" class=\"inline-block mb-2 text-base font-medium\">Leave Day</label>
                                            <select class=\"form-input border-slate-200 focus:outline-none focus:border-custom-500\" data-choices data-choices-search-false name=\"leaveDayInput\" id=\"leaveDayInput\">
                                                <option value=\"\">Select Leave Day</option>
                                                <option value=\"Full Day\">Full Day</option>
                                                <option value=\"Half Day\">Half Day</option>
                                            </select>
                                        </div>
                                        <div class=\"md:col-span-2 xl:col-span-12\">
                                            <div>
                                                <label for=\"reasonInput\" class=\"inline-block mb-2 text-base font-medium\">Reason</label>
                                                <textarea class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"reasonInput\" rows=\"3\"></textarea>
                                            </div>
                                        </div>
                                    </div><!--end grid-->
                                    <div class=\"flex justify-end gap-2 mt-4\">
                                        <button type=\"reset\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Reset</button>
                                        <button type=\"submit\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Add Leave</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class=\"xl:col-span-3\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Leave Information (2023)</h6>
                                <div>
                                    <table class=\"w-full mb-0\">
                                        <tbody>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Medical Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">04</th>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Casual Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">08</th>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Sick Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">03</th>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Annual Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">12</th>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Use Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">09</th>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Remaining Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">18</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->

         

{% endblock %}
    
{% block javascripts %}

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

{% endblock %}", "apps-hr-create-leave.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\apps-hr-create-leave.html.twig");
    }
}
