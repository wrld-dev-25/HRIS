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

/* employee_profile/apps-employee-profile.html.twig */
class __TwigTemplate_22600fef6e9d8e3aa08e1a81c82d77a1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee_profile/apps-employee-profile.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "employee_profile/apps-employee-profile.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Account";
        
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
        yield "                ";
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Employee Profile", "title" => "Employee Profile"]);
        yield "
                <div class=\"px-5 mt-1 rounded-md card\">
                    <div class=\"card-body !px-2.5\">
                        <div class=\"grid grid-cols-1 gap-5 lg:grid-cols-12 2xl:grid-cols-12 relative\">
                            <button data-modal-target=\"editEmployeeModal\" type=\"button\" class=\"edit-emp_list absolute top-0 right-0 flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30\" id=\"editEmployee\">
                                <i data-lucide=\"pencil\" class=\"size-4\"></i>
                            </button>
                            <div class=\"lg:col-span-2 2xl:col-span-1\">
                                <div class=\"relative inline-block size-20 rounded-full shadow-md bg-slate-100 profile-user xl:size-28\">
                                    <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "profile_photo_path", [], "any", false, false, false, 14)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "profile_photo_path", [], "any", false, false, false, 14))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/user-dummy-img.jpg"))), "html", null, true);
        yield "\" alt=\"\" class=\"object-cover border-0 rounded-full img-thumbnail user-profile-image\">
                                    ";
        // line 16
        yield "                                    <div class=\"absolute bottom-0 flex items-center justify-center size-8 rounded-full ltr:right-0 rtl:left-0 profile-photo-edit\">
                                        <input id=\"profile-img-file-input\" type=\"file\" class=\"hidden profile-img-file-input\">
                                        <label for=\"profile-img-file-input\" class=\"flex items-center justify-center size-8 bg-white rounded-full shadow-lg cursor-pointer dark:bg-zink-600 profile-photo-edit\">
                                            <i data-lucide=\"image-plus\" class=\"size-4 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500\"></i>
                                        </label>
                                    </div>
                                    <div class=\"mt-2\">
                                        <h5 class=\"text-16 font-semibold text-center\" id=\"empCode\" data-value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 23), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 23), "html", null, true);
        yield "</h5>
                                        <input type=\"hidden\" name=\"empId\" id=\"empId\" data-value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "id", [], "any", false, false, false, 24), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "id", [], "any", false, false, false, 24), "html", null, true);
        yield "\">
                                        <input type=\"hidden\" name=\"employeeRecordCode\" id=\"employeeRecordCode\" data-value=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 25), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 25), "html", null, true);
        yield "\">
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class=\"lg:col-span-10 2xl:col-span-9\">
                                <h5 class=\"mb-1 px-5\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "last_name", [], "any", false, false, false, 30), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "first_name", [], "any", false, false, false, 30), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "middle_name", [], "any", false, false, false, 30), "html", null, true);
        yield "</h5>
                                <ul class=\"flex flex-wrap gap-3 mt-4 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse\">
                                    <li class=\"px-5\">
                                        <h6>";
        // line 33
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "division", [], "any", false, false, false, 33)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "division", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true)) : (yield "<span class=\"italic\">Not Available</span>"));
        yield "</h6>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Division</p>
                                    </li>
                                    <li class=\"px-5\">
                                        <h6>";
        // line 37
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "department", [], "any", false, false, false, 37)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "department", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true)) : (yield "<span class=\"italic\">Not Available</span>"));
        yield "</h6>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Department</p>
                                    </li>
                                    <li class=\"px-5\">
                                        <h6>";
        // line 41
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "position", [], "any", false, false, false, 41)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "position", [], "any", false, false, false, 41), "html", null, true)) : (yield "<span class=\"italic\">Not Available</span>"));
        yield "</h6>
                                        <p class=\"text-slate-500 dark:text-zink-200\">Position</p>
                                    </li>
                                </ul>
                                <ul class=\"flex flex-wrap gap-3 text-center\">
                                    <li class=\"px-5\">
                                        <p class=\"mt-4 text-slate-500 dark:text-zink-200\">
                                            <i data-lucide=\"phone\" class=\"mr-2 inline-block size-5 text-custom-500 fill-custom-100 dark:fill-custom-500/20\"></i>
                                            ";
        // line 49
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "cellphone", [], "any", false, false, false, 49)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "cellphone", [], "any", false, false, false, 49), "html", null, true)) : (yield "<span class=\"italic\">Not Available</span>"));
        yield "
                                        </p>
                                    </li>
                                    <li class=\"px-5\">
                                        <p class=\"mt-4 text-slate-500 dark:text-zink-200\">
                                            <i data-lucide=\"mail\" class=\"mr-2 inline-block size-4 text-custom-500 fill-custom-100 dark:fill-custom-500/20\"></i>
                                            ";
        // line 55
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "email", [], "any", false, false, false, 55)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "email", [], "any", false, false, false, 55), "html", null, true)) : (yield "<span class=\"italic\">Not Available</span>"));
        yield "
                                        </p>
                                    </li>
                                </ul>
                                <p class=\"mt-4 text-slate-500 dark:text-zink-200\"></p>
                                ";
        // line 61
        yield "                                ";
        // line 62
        yield "                            </div>
                        </div><!--end grid-->
                    </div>

                    ";
        // line 66
        $context["main_module_access"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 66), "get", ["main_module_access"], "method", false, false, false, 66);
        // line 67
        yield "
                    <div class=\"card-body !px-2.5 !py-0\">
                        <ul class=\"flex flex-wrap w-full text-sm font-medium text-center nav-tabs\">
                            <li class=\"group active\">
                                <a href=\"javascript:void(0);\" data-tab-toggle data-target=\"overviewTabs\" class=\"inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]\">Overview</a>
                            </li>
                            <li class=\"group\">
                                <a href=\"javascript:void(0);\" data-tab-toggle data-target=\"documentsTabs\" class=\"inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]\">Documents</a>
                            </li>
                            <li class=\"group\">
                                <a href=\"javascript:void(0);\" data-tab-toggle data-target=\"projectsTabs\" class=\"inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]\">Projects</a>
                            </li>
                            ";
        // line 79
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["main_module_access"] ?? null), "payroll", [], "any", false, false, false, 79)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["main_module_access"] ?? null), "payroll", [], "any", false, false, false, 79), "can_view", [], "any", false, false, false, 79) === true))) {
            // line 80
            yield "                                <li class=\"group\">
                                    <a href=\"javascript:void(0);\" data-tab-toggle data-target=\"payrollTabs\" class=\"inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]\">Payroll</a>
                                </li>
                            ";
        }
        // line 84
        yield "                            <li class=\"group\">
                                <a href=\"javascript:void(0);\" data-tab-toggle data-target=\"leaveRequestTabs\" class=\"inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]\">Leave Request</a>
                            </li>
                            <li class=\"group\">
                                <a href=\"javascript:void(0);\" data-tab-toggle data-target=\"dailyTimeRecords\" class=\"inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]\">Daily Time Records</a>
                            </li>
                            <li class=\"group\">
                                <a href=\"javascript:void(0);\" data-tab-toggle data-target=\"overtimeRequestTabs\" class=\"inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]\">Overtime Request</a>
                            </li>
                            <li class=\"group\">
                                <a href=\"javascript:void(0);\" data-tab-toggle data-target=\"accountabilityRecordsTabs\" class=\"inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]\">Accountability Records</a>
                            </li>
                        </ul>
                    </div>
                </div><!--end card-->

                <div class=\"tab-content\">
                    <div class=\"block tab-pane\" id=\"overviewTabs\">
                        <div class=\"flex items-center gap-3 mb-4\">
                            <h5 class=\"underline grow py-2\">Overview</h5>
                        </div>
                        <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-12\">
                            <div class=\"lg:col-span-3\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h6 class=\"mb-4 text-15\">Personal Information</h6>
                                        <div class=\"overflow-x-auto\">
                                            <table class=\"w-full ltr:text-left rtl:ext-right\">
                                                <tbody>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Gender</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 capitalize\">";
        // line 115
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "gender", [], "any", false, false, false, 115)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "gender", [], "any", false, false, false, 115)), "html", null, true)) : (yield "<span class=\"italic\">N/A</span>"));
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Civil Status</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200\">";
        // line 119
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "civil_status", [], "any", false, false, false, 119)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "civil_status", [], "any", false, false, false, 119), "html", null, true)) : (yield "<span class=\"italic\">N/A</span>"));
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Birthdate</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200\">";
        // line 123
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "birthdate", [], "any", false, false, false, 123)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "birthdate", [], "any", false, false, false, 123), "d M, Y"), "html", null, true)) : (yield "<span class=\"italic\">N/A</span>"));
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Birth Place</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200\">";
        // line 127
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "birth_place", [], "any", false, false, false, 127)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "birth_place", [], "any", false, false, false, 127), "html", null, true)) : (yield "<span class=\"italic\">N/A</span>"));
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Date Hired</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200\">";
        // line 131
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "date_hired", [], "any", false, false, false, 131)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "date_hired", [], "any", false, false, false, 131), "d M, Y"), "html", null, true)) : (yield "<span class=\"italic\">N/A</span>"));
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Address</th>
                                                        ";
        // line 135
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "present_barangay", [], "any", false, false, false, 135) || CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "present_city", [], "any", false, false, false, 135)) || CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "area", [], "any", false, false, false, 135))) {
            // line 136
            yield "                                                            <td class=\"py-2 text-right text-slate-500 dark:text-zink-200\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "present_barangay", [], "any", false, false, false, 136) . (((true &&  !(null === ", "))) ? (", ") : (""))) . CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "present_city", [], "any", false, false, false, 136)) . (((true &&  !(null === ", "))) ? (", ") : (""))) . (((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "area", [], "any", true, true, false, 136) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "area", [], "any", false, false, false, 136)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "area", [], "any", false, false, false, 136)) : (""))), "html", null, true);
            yield "</td>
                                                        ";
        } else {
            // line 138
            yield "                                                            <td class=\"py-2 text-right text-slate-500 dark:text-zink-200\"><span class=\"italic\">N/A</span></td>
                                                        ";
        }
        // line 140
        yield "                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Telephone no.</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200\">";
        // line 143
        ((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "telephone", [], "any", false, false, false, 143)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "telephone", [], "any", false, false, false, 143), "html", null, true)) : (yield "<span class=\"italic\">N/A</span>"));
        yield "</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!--end card-->
                            </div><!--end col-->
                            <div class=\"lg:col-span-9\">
                                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                                    <div class=\"xl:col-span-12\">
                                        <div class=\"card\">
                                            <div class=\"card-body rounded-t-md border-b-2 border-dashed dark:bg-zink-600 flex justify-between items-center\">
                                                <h6 class=\"text-15\">
                                                    Additional Information
                                                </h6>
                                                <div class=\"flex flex-row gap-2\">
                                                    <button type=\"button\" class=\"edit-emp_list flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-hidden\" id=\"editButton\">
                                                        <i data-lucide=\"pencil\" class=\"size-4\"></i>
                                                    </button>
                                                    <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-hidden hidden\" id=\"saveButton\">
                                                        <i data-lucide=\"save\" class=\"size-4\"></i>
                                                    </button>
                                                    <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 toggle-hidden hidden\" id=\"cancelButton\">
                                                        <i data-lucide=\"x\" class=\"size-4\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class=\"card-body\">
                                                <form class=\"create-form\" id=\"additional-info-form\" action=\"#\" method=\"POST\">
                                                    <div class=\"grid grid-cols-12 gap-x-5\" id=\"additionalInfo\">
                                                        <div class=\"overflow-x-auto col-span-12 md:col-span-6\">
                                                            <table class=\"w-full\">
                                                                <tr class=\"flex justify-between py-2\">
                                                                    <td class=\"font-semibold\">School Graduated</td>
                                                                    <td class=\"text-slate-500 dark:text-zink-200 toggle-hidden td-school-graduated\" data-value>";
        // line 178
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "school_graduated", [], "any", true, true, false, 178) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "school_graduated", [], "any", false, false, false, 178)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "school_graduated", [], "any", false, false, false, 178), "html", null, true)) : (yield "(not set)"));
        yield "</td>
                                                                    <td class=\"w-full toggle-hidden hidden input-school-graduated\">
                                                                        <input type=\"text\" id=\"schoolGraduated\" name=\"schoolGraduated\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter School Graduated\">
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"flex justify-between py-2\">
                                                                    <td class=\"font-semibold\">Course</td>
                                                                    <td class=\"text-slate-500 dark:text-zink-200 toggle-hidden td-course\" data-value>";
        // line 185
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "course", [], "any", true, true, false, 185) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "course", [], "any", false, false, false, 185)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "course", [], "any", false, false, false, 185), "html", null, true)) : (yield "(not set)"));
        yield "</td>
                                                                    <td class=\"w-full toggle-hidden hidden input-course\">
                                                                        <input type=\"text\" id=\"course\" name=\"course\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Course\">
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"flex justify-between py-2\">
                                                                    <td class=\"font-semibold\">Career Band and Level</td>
                                                                    <td class=\"text-slate-500 dark:text-zink-200 toggle-hidden td-career-band-level\" data-value>";
        // line 192
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "career_band_level", [], "any", true, true, false, 192) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "career_band_level", [], "any", false, false, false, 192)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "career_band_level", [], "any", false, false, false, 192), "html", null, true)) : (yield "(not set)"));
        yield "</td>
                                                                    <td class=\"w-full toggle-hidden hidden input-career-band-level\">
                                                                        <input type=\"text\" id=\"careerBandLevel\" name=\"careerBandLevel\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-tooltip=\"default\" data-tooltip-content=\"Please enter values separated by comma<br><span class='italic'>(e.g. P-02, Professional)\" placeholder=\"Enter Career Band and Level\">
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"flex justify-between py-2\">
                                                                    <td class=\"font-semibold\">Career Global Grade</td>
                                                                    <td class=\"text-slate-500 dark:text-zink-200 toggle-hidden td-career-global-grade\" data-value>";
        // line 199
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "career_global_grade", [], "any", true, true, false, 199) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "career_global_grade", [], "any", false, false, false, 199)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "career_global_grade", [], "any", false, false, false, 199), "html", null, true)) : (yield "(not set)"));
        yield "</td>
                                                                    <td class=\"w-full toggle-hidden hidden input-career-global-grade\">
                                                                        <input type=\"text\" id=\"careerGlobalGrade\" name=\"careerGlobalGrade\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Career Global Grade\">
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"flex justify-between py-2\">
                                                                    <td class=\"font-semibold\">Cash Card Number</td>
                                                                    <td class=\"text-slate-500 dark:text-zink-200 toggle-hidden td-cash-card-number\" data-value>";
        // line 206
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "cash_card_number", [], "any", true, true, false, 206) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "cash_card_number", [], "any", false, false, false, 206)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "cash_card_number", [], "any", false, false, false, 206), "html", null, true)) : (yield "(not set)"));
        yield "</td>
                                                                    <td class=\"w-full toggle-hidden hidden input-cash-card-number\">
                                                                        <input type=\"text\" id=\"cashCardNumber\" name=\"cashCardNumber\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Cash Card Number\">
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                        <div class=\"overflow-x-auto col-span-12 md:col-span-6\">
                                                            <table class=\"w-full\">
                                                                <tr class=\"flex justify-between py-2\">
                                                                    <td class=\"font-semibold\">HMO Account</td>
                                                                    <td class=\"text-slate-500 dark:text-zink-200 toggle-hidden td-hmo-account\" data-value>";
        // line 217
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "hmo_account", [], "any", true, true, false, 217) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "hmo_account", [], "any", false, false, false, 217)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "hmo_account", [], "any", false, false, false, 217), "html", null, true)) : (yield "(not set)"));
        yield "</td>
                                                                    <td class=\"w-full toggle-hidden hidden input-hmo-account\">
                                                                        <input type=\"text\" id=\"hmoAccount\" name=\"hmoAccount\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter HMO Account\">
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"flex justify-between py-2\">
                                                                    <td class=\"font-semibold\">SSS Number</td>
                                                                    <td class=\"text-slate-500 dark:text-zink-200 toggle-hidden td-sss-number\" data-value>";
        // line 224
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "sss_number", [], "any", true, true, false, 224) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "sss_number", [], "any", false, false, false, 224)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "sss_number", [], "any", false, false, false, 224), "html", null, true)) : (yield "(not set)"));
        yield "</td>
                                                                    <td class=\"w-full toggle-hidden hidden input-sss-number\">
                                                                        <input type=\"text\" id=\"sssNumber\" name=\"sssNumber\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter SSS Number\">
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"flex justify-between py-2\">
                                                                    <td class=\"font-semibold\">PHILHealth Number</td>
                                                                    <td class=\"text-slate-500 dark:text-zink-200 toggle-hidden td-philhealth-number\" data-value>";
        // line 231
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "philhealth_number", [], "any", true, true, false, 231) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "philhealth_number", [], "any", false, false, false, 231)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "philhealth_number", [], "any", false, false, false, 231), "html", null, true)) : (yield "(not set)"));
        yield "</td>
                                                                    <td class=\"w-full toggle-hidden hidden input-philhealth-number\">
                                                                        <input type=\"text\" id=\"philhealthNumber\" name=\"philhealthNumber\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter PHILHealth Number\">
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"flex justify-between py-2\">
                                                                    <td class=\"font-semibold\">Pag IBIG Number</td>
                                                                    <td class=\"text-slate-500 dark:text-zink-200 toggle-hidden td-pagibig-number\" data-value>";
        // line 238
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "pagibig_number", [], "any", true, true, false, 238) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "pagibig_number", [], "any", false, false, false, 238)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "pagibig_number", [], "any", false, false, false, 238), "html", null, true)) : (yield "(not set)"));
        yield "</td>
                                                                    <td class=\"w-full toggle-hidden hidden input-pagibig-number\">
                                                                        <input type=\"text\" id=\"pagibigNumber\" name=\"pagibigNumber\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Pag IBIG Number\">
                                                                    </td>
                                                                </tr>
                                                                <tr class=\"flex justify-between py-2\">
                                                                    <td class=\"font-semibold\">TIN Number</td>
                                                                    <td class=\"text-slate-500 dark:text-zink-200 toggle-hidden td-tin-number\" data-value>";
        // line 245
        (((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "tin_number", [], "any", true, true, false, 245) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "tin_number", [], "any", false, false, false, 245)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "tin_number", [], "any", false, false, false, 245), "html", null, true)) : (yield "(not set)"));
        yield "</td>
                                                                    <td class=\"w-full toggle-hidden hidden input-tin-number\">
                                                                        <input type=\"number\" min=\"0\" id=\"tinNumber\" name=\"tinNumber\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter TIN Number\">
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end grid-->
                            </div><!--end col-->
                        </div><!--end grid-->
                        <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-12\">
                            <div class=\"collapsible col-span-12 card\">
                                <div class=\"card-body flex justify-between text-white collapsible-header group/item rounded-md bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 show\">
                                    <h6 class=\"text-15 text-white\">Dependents</h6>
                                    <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                                        <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                        <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                    </div>
                                </div>
                                <div class=\"mt-2 mb-0 collapsible-content card\">
                                    <form class=\"create-form\" id=\"dependent-form\" action=\"#\" method=\"POST\">
                                        <div class=\"card-body\">
                                            <div class=\"hidden\" id=\"dependentCivilStatus\" data-status=\"";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "civil_status", [], "any", false, false, false, 272), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "civil_status", [], "any", false, false, false, 272), "html", null, true);
        yield "</div>
                                            <div class=\"border rounded-md border-dashed p-5 mb-5\">
                                                <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 mb-4\">
                                                    <div class=\"col-span-12 flex justify-between\">
                                                        <h6 class=\"font-semibold\">Family Background</h6>
                                                        <div class=\"flex flex-row gap-2\">
                                                            <button type=\"button\" class=\"edit-emp_list flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-hidden-dependent\" id=\"editDependent\">
                                                                <i data-lucide=\"pencil\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-hidden-dependent hidden\" id=\"saveDependent\">
                                                                <i data-lucide=\"save\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 toggle-hidden-dependent hidden\" id=\"cancelDependent\">
                                                                <i data-lucide=\"x\" class=\"size-4\"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 mb-2\">
                                                    <div class=\"lg:col-span-3\">
                                                        <label for=\"spouseName\" class=\"inline-block mb-2 text-base font-medium\">Spouse Name</label>
                                                        <input type=\"text\" id=\"spouseName\" name=\"spouseName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Spouse Name\" value=\"";
        // line 293
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 293), "spouse_name", [], "any", true, true, false, 293) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 293), "spouse_name", [], "any", false, false, false, 293)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 293), "spouse_name", [], "any", false, false, false, 293), "html", null, true)) : (yield ""));
        yield "\" disabled>
                                                    </div>
                                                    <div class=\"lg:col-span-3\">
                                                        <label for=\"spouseOccupation\" class=\"inline-block mb-2 text-base font-medium\">Occupation</label>
                                                        <input type=\"text\" id=\"spouseOccupation\" name=\"spouseOccupation\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Occupation\" value=\"";
        // line 297
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 297), "spouse_occupation", [], "any", true, true, false, 297) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 297), "spouse_occupation", [], "any", false, false, false, 297)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 297), "spouse_occupation", [], "any", false, false, false, 297), "html", null, true)) : (yield ""));
        yield "\" disabled>
                                                    </div>
                                                    <div class=\"lg:col-span-3\">
                                                        <label for=\"spouseCompany\" class=\"inline-block mb-2 text-base font-medium\">Company</label>
                                                        <input type=\"text\" id=\"spouseCompany\" name=\"spouseCompany\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Company\" value=\"";
        // line 301
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 301), "spouse_company", [], "any", true, true, false, 301) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 301), "spouse_company", [], "any", false, false, false, 301)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 301), "spouse_company", [], "any", false, false, false, 301), "html", null, true)) : (yield ""));
        yield "\" disabled>
                                                    </div>
                                                </div>
                                                <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 mb-2\">
                                                    <div class=\"lg:col-span-3\">
                                                        <label for=\"fatherName\" class=\"inline-block mb-2 text-base font-medium\">Father's Name</label>
                                                        <input type=\"text\" id=\"fatherName\" name=\"fatherName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Father's Name\" value=\"";
        // line 307
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 307), "father_name", [], "any", true, true, false, 307) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 307), "father_name", [], "any", false, false, false, 307)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 307), "father_name", [], "any", false, false, false, 307), "html", null, true)) : (yield ""));
        yield "\" disabled>
                                                    </div>
                                                    <div class=\"lg:col-span-3\">
                                                        <label for=\"fatherOccupation\" class=\"inline-block mb-2 text-base font-medium\">Occupation</label>
                                                        <input type=\"text\" id=\"fatherOccupation\" name=\"fatherOccupation\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Occupation\" value=\"";
        // line 311
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 311), "father_occupation", [], "any", true, true, false, 311) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 311), "father_occupation", [], "any", false, false, false, 311)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 311), "father_occupation", [], "any", false, false, false, 311), "html", null, true)) : (yield ""));
        yield "\" disabled>
                                                    </div>
                                                    <div class=\"lg:col-span-3 flex gap-2 items-end\">
                                                        <label for=\"fatherDeceased\" class=\"inline-block mb-2 text-base font-medium\">Deceased?</label>
                                                        <input id=\"fatherDeceased\" name=\"fatherDeceased\" class=\"size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400 mb-3\" type=\"checkbox\" value=\"";
        // line 315
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 315), "father_deceased", [], "any", true, true, false, 315) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 315), "father_deceased", [], "any", false, false, false, 315)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 315), "father_deceased", [], "any", false, false, false, 315), "html", null, true)) : (yield "false"));
        yield "\" disabled>
                                                    </div>
                                                </div>
                                                <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 mb-2\">
                                                    <div class=\"lg:col-span-3\">
                                                        <label for=\"motherName\" class=\"inline-block mb-2 text-base font-medium\">Mother's Name</label>
                                                        <input type=\"text\" id=\"motherName\" name=\"motherName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Father's Name\" value=\"";
        // line 321
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 321), "mother_name", [], "any", true, true, false, 321) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 321), "mother_name", [], "any", false, false, false, 321)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 321), "mother_name", [], "any", false, false, false, 321), "html", null, true)) : (yield ""));
        yield "\" disabled>
                                                    </div>
                                                    <div class=\"lg:col-span-3\">
                                                        <label for=\"motherOccupation\" class=\"inline-block mb-2 text-base font-medium\">Occupation</label>
                                                        <input type=\"text\" id=\"motherOccupation\" name=\"motherOccupation\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Occupation\" value=\"";
        // line 325
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 325), "mother_occupation", [], "any", true, true, false, 325) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 325), "mother_occupation", [], "any", false, false, false, 325)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 325), "mother_occupation", [], "any", false, false, false, 325), "html", null, true)) : (yield ""));
        yield "\" disabled>
                                                    </div>
                                                    <div class=\"lg:col-span-3\">
                                                        <label for=\"motherMaidenName\" class=\"inline-block mb-2 text-base font-medium\">Mother's Maiden Name</label>
                                                        <input type=\"text\" id=\"motherMaidenName\" name=\"motherMaidenName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Mother's Maiden Name\" value=\"";
        // line 329
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 329), "mother_maiden_name", [], "any", true, true, false, 329) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 329), "mother_maiden_name", [], "any", false, false, false, 329)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 329), "mother_maiden_name", [], "any", false, false, false, 329), "html", null, true)) : (yield ""));
        yield "\" disabled>
                                                    </div>
                                                    <div class=\"lg:col-span-3 flex gap-2 items-end\">
                                                        <label for=\"motherDeceased\" class=\"inline-block mb-2 text-base font-medium\">Deceased?</label>
                                                        <input id=\"motherDeceased\" name=\"motherDeceased\" class=\"size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400 mb-3\" type=\"checkbox\" value=\"";
        // line 333
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 333), "mother_deceased", [], "any", true, true, false, 333) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 333), "mother_deceased", [], "any", false, false, false, 333)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 333), "mother_deceased", [], "any", false, false, false, 333), "html", null, true)) : (yield "false"));
        yield "\" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"grid gap-4 grid-cols-12 flex items-start\">
                                                <div class=\"grid gap-x-4 grid-cols-12 col-span-12 md:col-span-8 border rounded-md border-dashed p-5\">
                                                    <div class=\"grid gap-4 grid-cols-12 col-span-12 mb-2\">
                                                        <div class=\"col-span-8\">
                                                            <span class=\"inline-block mb-2 text-base font-medium\">Name</span>
                                                        </div>
                                                        <div class=\"col-span-4\">
                                                            <span class=\"inline-block mb-2 text-base font-medium\">Birthdate</span>
                                                        </div>
                                                    </div>
                                                    ";
        // line 347
        if (( !(null === ($context["employeeAdditionalRecord"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["employeeAdditionalRecord"] ?? null)))) {
            // line 348
            yield "                                                        <div class=\"grid gap-4 grid-cols-12 col-span-12 mb-2 dependents-wrapper\">
                                                            ";
            // line 349
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, false, false, 349), "dependents", [], "any", false, false, false, 349));
            foreach ($context['_seq'] as $context["_key"] => $context["dependent"]) {
                // line 350
                yield "                                                                <div class=\"grid gap-4 grid-cols-12 col-span-12 dependents-container\">
                                                                    <div class=\"col-span-12 flex justify-end toggle-hidden-dependent hidden\">
                                                                        <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delDependent\">
                                                                            <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"col-span-8\">
                                                                        <input type=\"text\" id=\"dependentName\" name=\"dependentName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 357
                (((CoreExtension::getAttribute($this->env, $this->source, $context["dependent"], "name", [], "any", true, true, false, 357) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["dependent"], "name", [], "any", false, false, false, 357)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dependent"], "name", [], "any", false, false, false, 357), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-4\">
                                                                        <input type=\"text\" id=\"dependentBirthdate\" name=\"dependentBirthdate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" value=\"";
                // line 360
                (((CoreExtension::getAttribute($this->env, $this->source, $context["dependent"], "birthdate", [], "any", true, true, false, 360) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["dependent"], "birthdate", [], "any", false, false, false, 360)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dependent"], "birthdate", [], "any", false, false, false, 360), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                </div>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 364
            yield "                                                        </div>
                                                    ";
        } else {
            // line 366
            yield "                                                        <div class=\"grid gap-4 grid-cols-12 col-span-12 mb-2 dependents-wrapper\">
                                                            <div class=\"grid gap-4 grid-cols-12 col-span-12 dependents-container\">
                                                                <div class=\"col-span-12 flex justify-end toggle-hidden-dependent hidden\">
                                                                    <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delDependent\">
                                                                        <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                    </button>
                                                                </div>
                                                                <div class=\"col-span-8\">
                                                                    <input type=\"text\" id=\"dependentName\" name=\"dependentName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-4\">
                                                                    <input type=\"text\" id=\"dependentBirthdate\" name=\"dependentBirthdate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
        }
        // line 382
        yield "                                                    <div class=\"grid gap-4 grid-cols-12 col-span-12 mb-2 add-dependent-wrapper hidden\">
                                                        <div class=\"col-span-12 flex justify-end items-center\">
                                                            <i data-lucide=\"plus\" class=\"size-4 text-custom-500\"></i>
                                                            <a href=\"javascript:void(0)\" id=\"addDependent\" class=\"text-custom-500 underline underline-offset-5\"> Add Dependent</a>
                                                        </div>
                                                    </div>
                                                    <div class=\"grid gap-4 grid-cols-12 col-span-12 mb-2\">
                                                        <div class=\"col-span-8\">
                                                            <label for=\"otherDependentName\" class=\"inline-block mb-2 text-base font-medium\">Other Dependent's Name</label>
                                                            <input type=\"text\" id=\"otherDependentName\" name=\"otherDependentName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
        // line 391
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 391), "other_dependent_name", [], "any", true, true, false, 391) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 391), "other_dependent_name", [], "any", false, false, false, 391)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 391), "other_dependent_name", [], "any", false, false, false, 391), "html", null, true)) : (yield ""));
        yield "\" disabled>
                                                        </div>
                                                        <div class=\"col-span-4\">
                                                            <label for=\"otherDependentBirthdate\" class=\"inline-block mb-2 text-base font-medium\">Other Dependent's Birthdate</label>
                                                            <input type=\"text\" id=\"otherDependentBirthdate\" name=\"otherDependentBirthdate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" value=\"";
        // line 395
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 395), "other_dependent_birthdate", [], "any", true, true, false, 395) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 395), "other_dependent_birthdate", [], "any", false, false, false, 395)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 395), "other_dependent_birthdate", [], "any", false, false, false, 395), "html", null, true)) : (yield ""));
        yield "\" disabled>
                                                        </div>
                                                    </div>
                                                    <div class=\"grid gap-4 grid-cols-12 col-span-12 mb-2\">
                                                        <div class=\"col-span-8\">
                                                            <label for=\"otherDependentRelationship\" class=\"inline-block mb-2 text-base font-medium\">Relationship</label>
                                                            <input type=\"text\" id=\"otherDependentRelationship\" name=\"otherDependentRelationship\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
        // line 401
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 401), "other_dependent_relationship", [], "any", true, true, false, 401) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 401), "other_dependent_relationship", [], "any", false, false, false, 401)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 401), "other_dependent_relationship", [], "any", false, false, false, 401), "html", null, true)) : (yield ""));
        yield "\" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"grid gap-4 grid-cols-12 col-span-12 md:col-span-4 border rounded-md border-dashed p-5\">
                                                    <div class=\"col-span-12\">
                                                        <h6 class=\"font-semibold\">In Case of Emergency Please Contact</h6>
                                                    </div>
                                                    <div class=\"col-span-12\">
                                                        <label for=\"emergencyContactName\" class=\"inline-block mb-2 text-base font-medium\">Name</label>
                                                        <input type=\"text\" id=\"emergencyContactName\" name=\"emergencyContactName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
        // line 411
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 411), "emergency_contact_name", [], "any", true, true, false, 411) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 411), "emergency_contact_name", [], "any", false, false, false, 411)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 411), "emergency_contact_name", [], "any", false, false, false, 411), "html", null, true)) : (yield ""));
        yield "\" disabled>
                                                    </div>
                                                    <div class=\"col-span-12\">
                                                        <label for=\"emergencyAddress\" class=\"inline-block mb-2 text-base font-medium\">Address</label>
                                                        <input type=\"text\" id=\"emergencyAddress\" name=\"emergencyAddress\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
        // line 415
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 415), "emergency_address", [], "any", true, true, false, 415) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 415), "emergency_address", [], "any", false, false, false, 415)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 415), "emergency_address", [], "any", false, false, false, 415), "html", null, true)) : (yield ""));
        yield "\" disabled>
                                                    </div>
                                                    <div class=\"col-span-12\">
                                                        <label for=\"emergencyTelephone\" class=\"inline-block mb-2 text-base font-medium\">Telephone no.</label>
                                                        <input type=\"number\" min=\"0\" id=\"emergencyTelephone\" name=\"emergencyTelephone\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
        // line 419
        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 419), "emergency_telephone", [], "any", true, true, false, 419) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 419), "emergency_telephone", [], "any", false, false, false, 419)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "dependents", [], "any", false, true, false, 419), "emergency_telephone", [], "any", false, false, false, 419), "html", null, true)) : (yield ""));
        yield "\" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-12\">
                            <div class=\"collapsible col-span-12 card\">
                                <div class=\"card-body flex justify-between text-white collapsible-header group/item rounded-md bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 show\">
                                    <h6 class=\"text-15 text-white\">Past Employment Record</h6>
                                    <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                                        <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                        <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                    </div>
                                </div>
                                <div class=\"mt-2 mb-0 collapsible-content card\">
                                    <form class=\"create-form\" id=\"past-employment-form\" action=\"#\" method=\"POST\">
                                        <div class=\"card-body\">
                                            <div class=\"\">
                                                <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 mb-4\">
                                                    <div class=\"col-span-12 flex justify-end\">
                                                        <div class=\"flex flex-row gap-2\">
                                                            <button type=\"button\" class=\"edit-emp_list flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-hidden-employment-history\" id=\"editPastEmployment\">
                                                                <i data-lucide=\"pencil\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-hidden-employment-history hidden\" id=\"savePastEmployment\">
                                                                <i data-lucide=\"save\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 toggle-hidden-employment-history hidden\" id=\"cancelPastEmployment\">
                                                                <i data-lucide=\"x\" class=\"size-4\"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                ";
        // line 456
        if ((( !(null === ($context["employeeAdditionalRecord"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["employeeAdditionalRecord"] ?? null))) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "past_employment_record", [], "any", false, false, false, 456)) > 0))) {
            // line 457
            yield "                                                    <div class=\"w-full past-employment-wrapper\">
                                                        ";
            // line 458
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "past_employment_record", [], "any", false, false, false, 458));
            foreach ($context['_seq'] as $context["_key"] => $context["per"]) {
                // line 459
                yield "                                                            <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 rounded-md border border-dashed mb-4 p-5 past-employment-container\">
                                                                <div class=\"col-span-12 flex justify-end toggle-hidden-employment-history hidden\">
                                                                    <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delPastEmployment\">
                                                                        <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                    </button>
                                                                </div>
                                                                <div class=\"grid gap-x-4 grid-cols-12 col-span-12\">
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <label for=\"perCompanyName\" class=\"inline-block mb-2 text-base font-medium\">Company Name</label>
                                                                        <input type=\"text\" id=\"perCompanyName\" name=\"perCompanyName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 468
                (((CoreExtension::getAttribute($this->env, $this->source, $context["per"], "company_name", [], "any", true, true, false, 468) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["per"], "company_name", [], "any", false, false, false, 468)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["per"], "company_name", [], "any", false, false, false, 468), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <label for=\"perDateHired\" class=\"inline-block mb-2 text-base font-medium\">Date Hired</label>
                                                                        <input type=\"text\" id=\"perDateHired\" name=\"perDateHired\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" value=\"";
                // line 472
                (((CoreExtension::getAttribute($this->env, $this->source, $context["per"], "date_hired", [], "any", true, true, false, 472) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["per"], "date_hired", [], "any", false, false, false, 472)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["per"], "date_hired", [], "any", false, false, false, 472), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <label for=\"perFirstPosition\" class=\"inline-block mb-2 text-base font-medium\">First Position</label>
                                                                        <input type=\"text\" id=\"perFirstPosition\" name=\"perFirstPosition\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 476
                (((CoreExtension::getAttribute($this->env, $this->source, $context["per"], "first_position", [], "any", true, true, false, 476) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["per"], "first_position", [], "any", false, false, false, 476)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["per"], "first_position", [], "any", false, false, false, 476), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <label for=\"perLastPosition\" class=\"inline-block mb-2 text-base font-medium\">Last Position</label>
                                                                        <input type=\"text\" id=\"perLastPosition\" name=\"perLastPosition\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 480
                (((CoreExtension::getAttribute($this->env, $this->source, $context["per"], "last_position", [], "any", true, true, false, 480) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["per"], "last_position", [], "any", false, false, false, 480)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["per"], "last_position", [], "any", false, false, false, 480), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class=\"grid gap-x-4 grid-cols-12 col-span-12\">
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <label for=\"perReason\" class=\"inline-block mb-2 text-base font-medium\">Reason for Leaving</label>
                                                                        <input type=\"text\" id=\"perReason\" name=\"perReason\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 486
                (((CoreExtension::getAttribute($this->env, $this->source, $context["per"], "reason", [], "any", true, true, false, 486) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["per"], "reason", [], "any", false, false, false, 486)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["per"], "reason", [], "any", false, false, false, 486), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <label for=\"perSalary\" class=\"inline-block mb-2 text-base font-medium\">Salary</label>
                                                                        <input type=\"text\" id=\"perSalary\" name=\"perSalary\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 490
                (((CoreExtension::getAttribute($this->env, $this->source, $context["per"], "salary", [], "any", true, true, false, 490) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["per"], "salary", [], "any", false, false, false, 490)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["per"], "salary", [], "any", false, false, false, 490), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <label for=\"perLengthStay\" class=\"inline-block mb-2 text-base font-medium\">Length of Stay (Year)</label>
                                                                        <input type=\"text\" id=\"perLengthStay\" name=\"perLengthStay\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 494
                (((CoreExtension::getAttribute($this->env, $this->source, $context["per"], "length_stay", [], "any", true, true, false, 494) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["per"], "length_stay", [], "any", false, false, false, 494)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["per"], "length_stay", [], "any", false, false, false, 494), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <label for=\"perDateTerminated\" class=\"inline-block mb-2 text-base font-medium\">Date Terminated</label>
                                                                        <input type=\"text\" id=\"perDateTerminated\" name=\"perDateTerminated\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" value=\"";
                // line 498
                (((CoreExtension::getAttribute($this->env, $this->source, $context["per"], "date_terminated", [], "any", true, true, false, 498) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["per"], "date_terminated", [], "any", false, false, false, 498)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["per"], "date_terminated", [], "any", false, false, false, 498), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 503
            yield "                                                    </div>
                                                ";
        } else {
            // line 505
            yield "                                                    <div class=\"w-full past-employment-wrapper\">
                                                        <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 rounded-md border border-dashed mb-4 p-5 past-employment-container\">
                                                            <div class=\"col-span-12 flex justify-end toggle-hidden-employment-history hidden\">
                                                                <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delPastEmployment\">
                                                                    <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                </button>
                                                            </div>
                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12\">
                                                                <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                    <label for=\"perCompanyName\" class=\"inline-block mb-2 text-base font-medium\">Company Name</label>
                                                                    <input type=\"text\" id=\"perCompanyName\" name=\"perCompanyName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                    <label for=\"perDateHired\" class=\"inline-block mb-2 text-base font-medium\">Date Hired</label>
                                                                    <input type=\"text\" id=\"perDateHired\" name=\"perDateHired\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                    <label for=\"perFirstPosition\" class=\"inline-block mb-2 text-base font-medium\">First Position</label>
                                                                    <input type=\"text\" id=\"perFirstPosition\" name=\"perFirstPosition\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                    <label for=\"perLastPosition\" class=\"inline-block mb-2 text-base font-medium\">Last Position</label>
                                                                    <input type=\"text\" id=\"perLastPosition\" name=\"perLastPosition\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                            </div>
                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12\">
                                                                <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                    <label for=\"perReason\" class=\"inline-block mb-2 text-base font-medium\">Reason for Leaving</label>
                                                                    <input type=\"text\" id=\"perReason\" name=\"perReason\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                    <label for=\"perSalary\" class=\"inline-block mb-2 text-base font-medium\">Salary</label>
                                                                    <input type=\"text\" id=\"perSalary\" name=\"perSalary\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                    <label for=\"perLengthStay\" class=\"inline-block mb-2 text-base font-medium\">Length of Stay (Year)</label>
                                                                    <input type=\"text\" id=\"perLengthStay\" name=\"perLengthStay\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                    <label for=\"perDateTerminated\" class=\"inline-block mb-2 text-base font-medium\">Date Terminated</label>
                                                                    <input type=\"text\" id=\"perDateTerminated\" name=\"perDateTerminated\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
        }
        // line 551
        yield "                                                <div class=\"grid gap-x-4 grid-cols-12 col-span-12 add-record-wrapper hidden\">
                                                    <div class=\"col-span-12 flex justify-end items-center\">
                                                        <i data-lucide=\"plus\" class=\"size-4 text-custom-500\"></i>
                                                         <a href=\"javascript:void(0)\" id=\"addRecord\" class=\"text-custom-500 underline underline-offset-5\"> Add Record</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-12\">
                            <div class=\"collapsible col-span-12 card\">
                                <div class=\"card-body flex justify-between text-white collapsible-header group/item rounded-md bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 show\">
                                    <h6 class=\"text-15 text-white\">Educational Background / Seminars and Trainings / Assessments and Exams</h6>
                                    <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                                        <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                        <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                    </div>
                                </div>
                                <div class=\"mt-2 mb-0 collapsible-content card\">
                                    <form class=\"create-form\" id=\"educational-form\" action=\"#\" method=\"POST\">
                                        <div class=\"card-body\">
                                            <div class=\"\">
                                                <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 mb-4\">
                                                    <div class=\"col-span-12 flex justify-end\">
                                                        <div class=\"flex flex-row gap-2\">
                                                            <button type=\"button\" class=\"edit-emp_list flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-hidden-educational\" id=\"editEducational\">
                                                                <i data-lucide=\"pencil\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-hidden-educational hidden\" id=\"saveEducational\">
                                                                <i data-lucide=\"save\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 toggle-hidden-educational hidden\" id=\"cancelEducational\">
                                                                <i data-lucide=\"x\" class=\"size-4\"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 rounded-md border border-dashed mb-4 p-5\">
                                                    <h6 class=\"col-span-12 mb-4 text-15\">Educational Background</h6>
                                                    <div class=\"grid gap-x-4 grid-cols-12 col-span-12\">
                                                        <div class=\"col-span-12 md:col-span-2\">
                                                            <label for=\"educationalBackgroundLevel\" class=\"inline-block text-base font-medium\">Level</label>
                                                        </div>
                                                        <div class=\"col-span-12 md:col-span-4\">
                                                            <label for=\"educationalBackgroundSchool\" class=\"inline-block text-base font-medium\">School</label>
                                                        </div>
                                                        <div class=\"col-span-12 md:col-span-4\">
                                                            <label for=\"educationalBackgroundCourse\" class=\"inline-block text-base font-medium\">Course</label>
                                                        </div>
                                                        <div class=\"col-span-12 md:col-span-2\">
                                                            <label for=\"educationalBackgroundYear\" class=\"inline-block text-base font-medium\">Year</label>
                                                        </div>
                                                    </div>
                                                    ";
        // line 607
        if ((( !(null === ($context["employeeAdditionalRecord"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["employeeAdditionalRecord"] ?? null))) && (CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "educational_background", [], "any", false, false, false, 607) > 0))) {
            // line 608
            yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 educational-background-wrapper\">
                                                            ";
            // line 609
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "educational_background", [], "any", false, false, false, 609));
            foreach ($context['_seq'] as $context["_key"] => $context["education"]) {
                // line 610
                yield "                                                                <div class=\"grid gap-x-4 grid-cols-12 col-span-12 educational-background-container\">
                                                                    <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-educational hidden\">
                                                                        <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delEducational\">
                                                                            <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                        <input type=\"text\" id=\"educationalBackgroundLevel\" name=\"educationalBackgroundLevel\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 617
                (((CoreExtension::getAttribute($this->env, $this->source, $context["education"], "level", [], "any", true, true, false, 617) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["education"], "level", [], "any", false, false, false, 617)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["education"], "level", [], "any", false, false, false, 617), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                        <input type=\"text\" id=\"educationalBackgroundSchool\" name=\"educationalBackgroundSchool\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 620
                (((CoreExtension::getAttribute($this->env, $this->source, $context["education"], "school", [], "any", true, true, false, 620) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["education"], "school", [], "any", false, false, false, 620)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["education"], "school", [], "any", false, false, false, 620), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                        <input type=\"text\" id=\"educationalBackgroundCourse\" name=\"educationalBackgroundCourse\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 623
                (((CoreExtension::getAttribute($this->env, $this->source, $context["education"], "course", [], "any", true, true, false, 623) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["education"], "course", [], "any", false, false, false, 623)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["education"], "course", [], "any", false, false, false, 623), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                        <input type=\"number\" min=\"0\" id=\"educationalBackgroundYear\" name=\"educationalBackgroundYear\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 626
                (((CoreExtension::getAttribute($this->env, $this->source, $context["education"], "year", [], "any", true, true, false, 626) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["education"], "year", [], "any", false, false, false, 626)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["education"], "year", [], "any", false, false, false, 626), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                </div>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['education'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 630
            yield "                                                        </div>
                                                    ";
        } else {
            // line 632
            yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 educational-background-wrapper\">
                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 educational-background-container\">
                                                                <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-educational hidden\">
                                                                    <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delEducational\">
                                                                        <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                    </button>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                    <input type=\"text\" id=\"educationalBackgroundLevel\" name=\"educationalBackgroundLevel\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                    <input type=\"text\" id=\"educationalBackgroundSchool\" name=\"educationalBackgroundSchool\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                    <input type=\"text\" id=\"educationalBackgroundCourse\" name=\"educationalBackgroundCourse\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                    <input type=\"number\" min=\"0\" id=\"educationalBackgroundYear\" name=\"educationalBackgroundYear\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
        }
        // line 654
        yield "                                                    <div class=\"grid gap-x-4 grid-cols-12 col-span-12 add-educational-background-wrapper hidden\">
                                                        <div class=\"col-span-12 flex justify-end items-center\">
                                                            <i data-lucide=\"plus\" class=\"size-4 text-custom-500\"></i>
                                                            <a href=\"javascript:void(0)\" id=\"addEducation\" class=\"text-custom-500 underline underline-offset-5\"> Add Education</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"grid grid-cols-12 gap-4 flex items-start\">
                                                    <div class=\"grid grid-cols-12 col-span-4 gap-4 rounded-md border border-dashed p-5\">
                                                        <h6 class=\"col-span-12 mb-4 text-15\">Seminars and Trainings</h6>
                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 seminar-training-container\">
                                                            <div class=\"col-span-12 md:col-span-8\">
                                                                <label for=\"seminar\" class=\"inline-block text-base font-medium\">Seminar</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-4\">
                                                                <label for=\"seminarDate\" class=\"inline-block text-base font-medium\">Date</label>
                                                            </div>
                                                        </div>
                                                        ";
        // line 672
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "seminars_trainings", [], "any", true, true, false, 672) && (CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "seminars_trainings", [], "any", false, false, false, 672) > 0))) {
            // line 673
            yield "                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 seminar-training-wrapper\">
                                                            ";
            // line 674
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "seminars_trainings", [], "any", false, false, false, 674));
            foreach ($context['_seq'] as $context["_key"] => $context["seminar"]) {
                // line 675
                yield "                                                                <div class=\"grid gap-x-4 grid-cols-12 col-span-12 seminar-training-container\">
                                                                    <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-educational hidden\">
                                                                        <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delSeminar\">
                                                                            <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-8 mb-2\">
                                                                        <input type=\"text\" id=\"seminar\" name=\"seminar\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 682
                (((CoreExtension::getAttribute($this->env, $this->source, $context["seminar"], "seminar", [], "any", true, true, false, 682) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["seminar"], "seminar", [], "any", false, false, false, 682)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seminar"], "seminar", [], "any", false, false, false, 682), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                        <input type=\"text\" id=\"seminarDate\" name=\"seminarDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" value=\"";
                // line 685
                (((CoreExtension::getAttribute($this->env, $this->source, $context["seminar"], "seminar_date", [], "any", true, true, false, 685) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["seminar"], "seminar_date", [], "any", false, false, false, 685)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["seminar"], "seminar_date", [], "any", false, false, false, 685), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                </div>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seminar'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 689
            yield "                                                            </div>
                                                        ";
        } else {
            // line 691
            yield "                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 seminar-training-wrapper\">
                                                                <div class=\"grid gap-x-4 grid-cols-12 col-span-12 seminar-training-container\">
                                                                    <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-educational hidden\">
                                                                        <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delSeminar\">
                                                                            <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-8 mb-2\">
                                                                        <input type=\"text\" id=\"seminar\" name=\"seminar\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                        <input type=\"text\" id=\"seminarDate\" name=\"seminarDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" disabled>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        ";
        }
        // line 707
        yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 add-seminar-training-wrapper hidden\">
                                                            <div class=\"col-span-12 flex justify-end items-center\">
                                                                <i data-lucide=\"plus\" class=\"size-4 text-custom-500\"></i>
                                                                <a href=\"javascript:void(0)\" id=\"addSeminar\" class=\"text-custom-500 underline underline-offset-5\"> Add Seminar</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"grid grid-cols-12 col-span-8 gap-4 rounded-md border border-dashed p-5\">
                                                        <h6 class=\"col-span-12 mb-4 text-15\">Assessments and Exams</h6>
                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12\">
                                                            <div class=\"col-span-12 md:col-span-4\">
                                                                <label for=\"exam\" class=\"inline-block text-base font-medium\">Exam</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-4\">
                                                                <label for=\"score\" class=\"inline-block text-base font-medium\">Score</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-4\">
                                                                <label for=\"notes\" class=\"inline-block text-base font-medium\">Notes</label>
                                                            </div>
                                                        </div>
                                                        ";
        // line 727
        if ((( !(null === ($context["employeeAdditionalRecord"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["employeeAdditionalRecord"] ?? null))) && (CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "assessments_exams", [], "any", false, false, false, 727) > 0))) {
            // line 728
            yield "                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 assessment-exam-wrapper\">
                                                                ";
            // line 729
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "assessments_exams", [], "any", false, false, false, 729));
            foreach ($context['_seq'] as $context["_key"] => $context["assessment"]) {
                // line 730
                yield "                                                                    <div class=\"grid gap-x-4 grid-cols-12 col-span-12 assessment-exam-container\">
                                                                        <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-educational hidden\">
                                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delAssessments\">
                                                                                <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                            <input type=\"text\" id=\"exam\" name=\"exam\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 737
                (((CoreExtension::getAttribute($this->env, $this->source, $context["assessment"], "exam", [], "any", true, true, false, 737) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["assessment"], "exam", [], "any", false, false, false, 737)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["assessment"], "exam", [], "any", false, false, false, 737), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                            <input type=\"number\" min=\"0\" id=\"score\" name=\"score\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 740
                (((CoreExtension::getAttribute($this->env, $this->source, $context["assessment"], "score", [], "any", true, true, false, 740) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["assessment"], "score", [], "any", false, false, false, 740)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["assessment"], "score", [], "any", false, false, false, 740), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                            <input type=\"text\" id=\"notes\" name=\"notes\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 743
                (((CoreExtension::getAttribute($this->env, $this->source, $context["assessment"], "notes", [], "any", true, true, false, 743) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["assessment"], "notes", [], "any", false, false, false, 743)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["assessment"], "notes", [], "any", false, false, false, 743), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                    </div>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 747
            yield "                                                            </div>
                                                        ";
        } else {
            // line 749
            yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 assessment-exam-wrapper\">
                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 assessment-exam-container\">
                                                                <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-educational hidden\">
                                                                    <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delAssessments\">
                                                                        <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                    </button>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                    <input type=\"text\" id=\"exam\" name=\"exam\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                    <input type=\"number\" min=\"0\" id=\"score\" name=\"score\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                    <input type=\"text\" id=\"notes\" name=\"notes\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        ";
        }
        // line 768
        yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 add-assessment-exam-wrapper hidden\">
                                                            <div class=\"col-span-12 flex justify-end items-center\">
                                                                <i data-lucide=\"plus\" class=\"size-4 text-custom-500\"></i>
                                                                <a href=\"javascript:void(0)\" id=\"addAssessmentExam\" class=\"text-custom-500 underline underline-offset-5\"> Add Assessment or Exam</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-12\">
                            <div class=\"collapsible col-span-12 card\">
                                <div class=\"card-body flex justify-between text-white collapsible-header group/item rounded-md bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 show\">
                                    <h6 class=\"text-15 text-white\">Skills / Awards / Licenses</h6>
                                    <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                                        <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                        <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                    </div>
                                </div>
                                <div class=\"mt-2 mb-0 collapsible-content card\">
                                    <form class=\"create-form\" id=\"skill-award-license-form\" action=\"#\" method=\"POST\">
                                        <div class=\"card-body\">
                                            <div class=\"\">
                                                <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 mb-4\">
                                                    <div class=\"col-span-12 flex justify-end\">
                                                        <div class=\"flex flex-row gap-2\">
                                                            <button type=\"button\" class=\"edit-emp_list flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-hidden-SAL\" id=\"editSAL\">
                                                                <i data-lucide=\"pencil\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-hidden-SAL hidden\" id=\"saveSAL\">
                                                                <i data-lucide=\"save\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 toggle-hidden-SAL hidden\" id=\"cancelSAL\">
                                                                <i data-lucide=\"x\" class=\"size-4\"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"grid grid-cols-12 gap-4\">
                                                    <div class=\"grid grid-cols-12 col-span-4 gap-4 rounded-md border border-dashed p-5\">
                                                        <h6 class=\"col-span-12 mb-4 text-15\">Skills</h6>
                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 skill-container\">
                                                            <div class=\"col-span-12 md:col-span-4\">
                                                                <label for=\"skillCode\" class=\"inline-block text-base font-medium\">Code</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-4\">
                                                                <label for=\"skillDescription\" class=\"inline-block text-base font-medium\">Description</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-4\">
                                                                <label for=\"skillPriority\" class=\"inline-block text-base font-medium\">Priority (Numeric)</label>
                                                            </div>
                                                        </div>
                                                        ";
        // line 824
        if ((( !(null === ($context["employeeAdditionalRecord"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["employeeAdditionalRecord"] ?? null))) && (CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "skills", [], "any", false, false, false, 824) > 0))) {
            // line 825
            yield "                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 skill-wrapper\">
                                                                ";
            // line 826
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "skills", [], "any", false, false, false, 826));
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 827
                yield "                                                                    <div class=\"grid gap-x-4 grid-cols-12 col-span-12 skill-container\">
                                                                        <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-SAL hidden\">
                                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delSkill\">
                                                                                <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                            <input type=\"text\" id=\"skillCode\" name=\"skillCode\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 834
                (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "skill_code", [], "any", true, true, false, 834) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "skill_code", [], "any", false, false, false, 834)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "skill_code", [], "any", false, false, false, 834), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                            <input type=\"text\" id=\"skillDescription\" name=\"skillDescription\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 837
                (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "skill_description", [], "any", true, true, false, 837) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "skill_description", [], "any", false, false, false, 837)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "skill_description", [], "any", false, false, false, 837), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                            <input type=\"text\" id=\"skillPriority\" name=\"skillPriority\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 840
                (((CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "skill_priority", [], "any", true, true, false, 840) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "skill_priority", [], "any", false, false, false, 840)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["skill"], "skill_priority", [], "any", false, false, false, 840), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                    </div>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 844
            yield "                                                            </div>
                                                        ";
        } else {
            // line 846
            yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 skill-wrapper\">
                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 skill-container\">
                                                                <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-SAL hidden\">
                                                                    <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delSkill\">
                                                                        <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                    </button>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                    <input type=\"text\" id=\"skillCode\" name=\"skillCode\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                    <input type=\"text\" id=\"skillDescription\" name=\"skillDescription\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                    <input type=\"text\" id=\"skillPriority\" name=\"skillPriority\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        ";
        }
        // line 865
        yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 add-skill-wrapper hidden\">
                                                            <div class=\"col-span-12 flex justify-end items-center\">
                                                                <i data-lucide=\"plus\" class=\"size-4 text-custom-500\"></i>
                                                                <a href=\"javascript:void(0)\" id=\"addSkill\" class=\"text-custom-500 underline underline-offset-5\"> Add Skill</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"grid grid-cols-12 col-span-4 gap-4 rounded-md border border-dashed p-5\">
                                                        <h6 class=\"col-span-12 mb-4 text-15\">Awards</h6>
                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 award-container\">
                                                            <div class=\"col-span-12 md:col-span-4\">
                                                                <label for=\"awardDate\" class=\"inline-block text-base font-medium\">Date</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-4\">
                                                                <label for=\"awardCode\" class=\"inline-block text-base font-medium\">Code</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-4\">
                                                                <label for=\"awardDescription\" class=\"inline-block text-base font-medium\">Description</label>
                                                            </div>
                                                        </div>
                                                        ";
        // line 885
        if ((( !(null === ($context["employeeAdditionalRecord"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["employeeAdditionalRecord"] ?? null))) && (CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "awards", [], "any", false, false, false, 885) > 0))) {
            // line 886
            yield "                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 award-wrapper\">
                                                                ";
            // line 887
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "awards", [], "any", false, false, false, 887));
            foreach ($context['_seq'] as $context["_key"] => $context["award"]) {
                // line 888
                yield "                                                                    <div class=\"grid gap-x-4 grid-cols-12 col-span-12 award-container\">
                                                                        <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-SAL hidden\">
                                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delAward\">
                                                                                <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                            <input type=\"text\" id=\"awardDate\" name=\"awardDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" value=\"";
                // line 895
                (((CoreExtension::getAttribute($this->env, $this->source, $context["award"], "award_date", [], "any", true, true, false, 895) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["award"], "award_date", [], "any", false, false, false, 895)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["award"], "award_date", [], "any", false, false, false, 895), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                            <input type=\"text\" id=\"awardCode\" name=\"awardCode\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 898
                (((CoreExtension::getAttribute($this->env, $this->source, $context["award"], "award_code", [], "any", true, true, false, 898) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["award"], "award_code", [], "any", false, false, false, 898)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["award"], "award_code", [], "any", false, false, false, 898), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                            <input type=\"text\" id=\"awardDescription\" name=\"awardDescription\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 901
                (((CoreExtension::getAttribute($this->env, $this->source, $context["award"], "award_description", [], "any", true, true, false, 901) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["award"], "award_description", [], "any", false, false, false, 901)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["award"], "award_description", [], "any", false, false, false, 901), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                    </div>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['award'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 905
            yield "                                                            </div>
                                                        ";
        } else {
            // line 907
            yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 award-wrapper\">
                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 award-container\">
                                                                <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-SAL hidden\">
                                                                    <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delAward\">
                                                                        <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                    </button>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                    <input type=\"text\" id=\"awardDate\" name=\"awardDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                    <input type=\"text\" id=\"awardCode\" name=\"awardCode\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                    <input type=\"text\" id=\"awardDescription\" name=\"awardDescription\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        ";
        }
        // line 926
        yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 add-award-wrapper hidden\">
                                                            <div class=\"col-span-12 flex justify-end items-center\">
                                                                <i data-lucide=\"plus\" class=\"size-4 text-custom-500\"></i>
                                                                <a href=\"javascript:void(0)\" id=\"addAward\" class=\"text-custom-500 underline underline-offset-5\"> Add Award</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"grid grid-cols-12 col-span-4 gap-4 rounded-md border border-dashed p-5\">
                                                        <h6 class=\"col-span-12 mb-4 text-15\">Licenses</h6>
                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 license-container\">
                                                            <div class=\"col-span-12 md:col-span-4\">
                                                                <label for=\"licenseDate\" class=\"inline-block text-base font-medium\">Date</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-4\">
                                                                <label for=\"license\" class=\"inline-block text-base font-medium\">License</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-4\">
                                                                <label for=\"licenseRemarks\" class=\"inline-block text-base font-medium\">Remarks</label>
                                                            </div>
                                                        </div>
                                                        ";
        // line 946
        if ((( !(null === ($context["employeeAdditionalRecord"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["employeeAdditionalRecord"] ?? null))) && (CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "licenses", [], "any", false, false, false, 946) > 0))) {
            // line 947
            yield "                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 license-wrapper\">
                                                                ";
            // line 948
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "licenses", [], "any", false, false, false, 948));
            foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
                // line 949
                yield "                                                                    <div class=\"grid gap-x-4 grid-cols-12 col-span-12 license-container\">
                                                                        <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-SAL hidden\">
                                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delLicense\">
                                                                                <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                            </button>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                            <input type=\"text\" id=\"licenseDate\" name=\"licenseDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" value=\"";
                // line 956
                (((CoreExtension::getAttribute($this->env, $this->source, $context["license"], "license_date", [], "any", true, true, false, 956) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["license"], "license_date", [], "any", false, false, false, 956)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["license"], "license_date", [], "any", false, false, false, 956), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                            <input type=\"text\" id=\"license\" name=\"license\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 959
                (((CoreExtension::getAttribute($this->env, $this->source, $context["license"], "license", [], "any", true, true, false, 959) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["license"], "license", [], "any", false, false, false, 959)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["license"], "license", [], "any", false, false, false, 959), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                            <input type=\"text\" id=\"licenseRemarks\" name=\"licenseRemarks\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 962
                (((CoreExtension::getAttribute($this->env, $this->source, $context["license"], "license_remarks", [], "any", true, true, false, 962) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["license"], "license_remarks", [], "any", false, false, false, 962)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["license"], "license_remarks", [], "any", false, false, false, 962), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                    </div>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 966
            yield "                                                            </div>
                                                        ";
        } else {
            // line 968
            yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 license-wrapper\">
                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 license-container\">
                                                                <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-SAL hidden\">
                                                                    <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delLicense\">
                                                                        <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                    </button>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                    <input type=\"text\" id=\"licenseDate\" name=\"licenseDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                    <input type=\"text\" id=\"license\" name=\"license\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-4 mb-2\">
                                                                    <input type=\"text\" id=\"licenseRemarks\" name=\"licenseRemarks\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        ";
        }
        // line 987
        yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 add-license-wrapper hidden\">
                                                            <div class=\"col-span-12 flex justify-end items-center\">
                                                                <i data-lucide=\"plus\" class=\"size-4 text-custom-500\"></i>
                                                                <a href=\"javascript:void(0)\" id=\"addLicense\" class=\"text-custom-500 underline underline-offset-5\"> Add License</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-12\">
                            <div class=\"collapsible col-span-12 card\">
                                <div class=\"card-body flex justify-between text-white collapsible-header group/item rounded-md bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 show\">
                                    <h6 class=\"text-15 text-white\">Violations</h6>
                                    <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                                        <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                        <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                    </div>
                                </div>
                                <div class=\"mt-2 mb-0 collapsible-content card\">
                                    <form class=\"create-form\" id=\"violation-form\" action=\"#\" method=\"POST\">
                                        <div class=\"card-body\">
                                            <div class=\"\">
                                                <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 mb-4\">
                                                    <div class=\"col-span-12 flex justify-end\">
                                                        <div class=\"flex flex-row gap-2\">
                                                            <button type=\"button\" class=\"edit-emp_list flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-hidden-violation\" id=\"editViolation\">
                                                                <i data-lucide=\"pencil\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-hidden-violation hidden\" id=\"saveViolation\">
                                                                <i data-lucide=\"save\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 toggle-hidden-violation hidden\" id=\"cancelViolation\">
                                                                <i data-lucide=\"x\" class=\"size-4\"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 rounded-md border border-dashed mb-4 p-5\">
                                                    <div class=\"grid gap-x-4 grid-cols-12 col-span-12\">
                                                        <div class=\"col-span-12 md:col-span-3\">
                                                            <label for=\"violationDate\" class=\"inline-block text-base font-medium\">Date</label>
                                                        </div>
                                                        <div class=\"col-span-12 md:col-span-3\">
                                                            <label for=\"violationCode\" class=\"inline-block text-base font-medium\">Violation Code</label>
                                                        </div>
                                                        <div class=\"col-span-12 md:col-span-3\">
                                                            <label for=\"violationDaySuspension\" class=\"inline-block text-base font-medium\">Days of Suspension</label>
                                                        </div>
                                                        <div class=\"col-span-12 md:col-span-3\">
                                                            <label for=\"violationRemark\" class=\"inline-block text-base font-medium\">Remarks</label>
                                                        </div>
                                                    </div>
                                                    ";
        // line 1044
        if ((( !(null === ($context["employeeAdditionalRecord"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["employeeAdditionalRecord"] ?? null))) && (CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "violations", [], "any", false, false, false, 1044) > 0))) {
            // line 1045
            yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 violation-wrapper\">
                                                            ";
            // line 1046
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "violations", [], "any", false, false, false, 1046));
            foreach ($context['_seq'] as $context["_key"] => $context["violation"]) {
                // line 1047
                yield "                                                                <div class=\"grid gap-x-4 grid-cols-12 col-span-12 violation-container\">
                                                                    <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-violation hidden\">
                                                                        <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delViolation\">
                                                                            <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <input type=\"text\" id=\"violationDate\" name=\"violationDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" value=\"";
                // line 1054
                (((CoreExtension::getAttribute($this->env, $this->source, $context["violation"], "violation_date", [], "any", true, true, false, 1054) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["violation"], "violation_date", [], "any", false, false, false, 1054)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["violation"], "violation_date", [], "any", false, false, false, 1054), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <input type=\"text\" id=\"violationCode\" name=\"violationCode\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 1057
                (((CoreExtension::getAttribute($this->env, $this->source, $context["violation"], "violation_code", [], "any", true, true, false, 1057) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["violation"], "violation_code", [], "any", false, false, false, 1057)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["violation"], "violation_code", [], "any", false, false, false, 1057), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <input type=\"text\" id=\"violationDaySuspension\" name=\"violationDaySuspension\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 1060
                (((CoreExtension::getAttribute($this->env, $this->source, $context["violation"], "violation_day_suspension", [], "any", true, true, false, 1060) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["violation"], "violation_day_suspension", [], "any", false, false, false, 1060)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["violation"], "violation_day_suspension", [], "any", false, false, false, 1060), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <input type=\"text\" id=\"violationRemark\" name=\"violationRemark\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 1063
                (((CoreExtension::getAttribute($this->env, $this->source, $context["violation"], "violation_remark", [], "any", true, true, false, 1063) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["violation"], "violation_remark", [], "any", false, false, false, 1063)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["violation"], "violation_remark", [], "any", false, false, false, 1063), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                </div>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['violation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1067
            yield "                                                        </div>
                                                    ";
        } else {
            // line 1069
            yield "                                                    <div class=\"grid gap-x-4 grid-cols-12 col-span-12 violation-wrapper\">
                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 violation-container\">
                                                            <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-violation hidden\">
                                                                <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delViolation\">
                                                                    <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                </button>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                <input type=\"text\" id=\"violationDate\" name=\"violationDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" disabled>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                <input type=\"text\" id=\"violationCode\" name=\"violationCode\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                <input type=\"text\" id=\"violationDaySuspension\" name=\"violationDaySuspension\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                <input type=\"text\" id=\"violationRemark\" name=\"violationRemark\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ";
        }
        // line 1091
        yield "                                                </div>
                                                <div class=\"grid gap-x-4 grid-cols-12 col-span-12 add-violation-wrapper hidden\">
                                                    <div class=\"col-span-12 flex justify-end items-center\">
                                                        <i data-lucide=\"plus\" class=\"size-4 text-custom-500\"></i>
                                                         <a href=\"javascript:void(0)\" id=\"addViolation\" class=\"text-custom-500 underline underline-offset-5\"> Add Violation</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-12\">
                            <div class=\"collapsible col-span-12 card\">
                                <div class=\"card-body flex justify-between text-white collapsible-header group/item rounded-md bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 show\">
                                    <h6 class=\"text-15 text-white\">Medical/Drug Tests</h6>
                                    <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                                        <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                        <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                    </div>
                                </div>
                                <div class=\"mt-2 mb-0 collapsible-content card\">
                                    <form class=\"create-form\" id=\"medical-form\" action=\"#\" method=\"POST\">
                                        <div class=\"card-body\">
                                            <div class=\"\">
                                                <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 mb-4\">
                                                    <div class=\"col-span-12 flex justify-end\">
                                                        <div class=\"flex flex-row gap-2\">
                                                            <button type=\"button\" class=\"edit-emp_list flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-hidden-medical\" id=\"editMedical\">
                                                                <i data-lucide=\"pencil\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-hidden-medical hidden\" id=\"saveMedical\">
                                                                <i data-lucide=\"save\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 toggle-hidden-medical hidden\" id=\"cancelMedical\">
                                                                <i data-lucide=\"x\" class=\"size-4\"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 rounded-md border border-dashed mb-4 p-5\">
                                                    <div class=\"grid gap-x-4 grid-cols-12 col-span-12 medical-container\">
                                                        <div class=\"col-span-12 md:col-span-3\">
                                                            <label for=\"medicalDate\" class=\"inline-block text-base font-medium\">Date</label>
                                                        </div>
                                                        <div class=\"col-span-12 md:col-span-3\">
                                                            <label for=\"medicalResult\" class=\"inline-block text-base font-medium\">Result and Findings</label>
                                                        </div>
                                                        <div class=\"col-span-12 md:col-span-3\">
                                                            <label for=\"medicalCenter\" class=\"inline-block text-base font-medium\">Medical Center</label>
                                                        </div>
                                                        <div class=\"col-span-12 md:col-span-3\">
                                                            <label for=\"medicalRemark\" class=\"inline-block text-base font-medium\">Remarks</label>
                                                        </div>
                                                    </div>
                                                    ";
        // line 1147
        if ((( !(null === ($context["employeeAdditionalRecord"] ?? null)) &&  !Twig\Extension\CoreExtension::testEmpty(($context["employeeAdditionalRecord"] ?? null))) && (CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "medical_drug_tests", [], "any", false, false, false, 1147) > 0))) {
            // line 1148
            yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 medical-wrapper\">
                                                            ";
            // line 1149
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeAdditionalRecord"] ?? null), "medical_drug_tests", [], "any", false, false, false, 1149));
            foreach ($context['_seq'] as $context["_key"] => $context["medical"]) {
                // line 1150
                yield "                                                                <div class=\"grid gap-x-4 grid-cols-12 col-span-12 medical-container\">
                                                                    <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-medical hidden\">
                                                                        <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delMedical\">
                                                                            <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                        </button>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <input type=\"text\" id=\"medicalDate\" name=\"medicalDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" value=\"";
                // line 1157
                (((CoreExtension::getAttribute($this->env, $this->source, $context["medical"], "medical_date", [], "any", true, true, false, 1157) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["medical"], "medical_date", [], "any", false, false, false, 1157)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["medical"], "medical_date", [], "any", false, false, false, 1157), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <input type=\"text\" id=\"medicalResult\" name=\"medicalResult\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 1160
                (((CoreExtension::getAttribute($this->env, $this->source, $context["medical"], "medical_result", [], "any", true, true, false, 1160) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["medical"], "medical_result", [], "any", false, false, false, 1160)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["medical"], "medical_result", [], "any", false, false, false, 1160), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <input type=\"text\" id=\"medicalCenter\" name=\"medicalCenter\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 1163
                (((CoreExtension::getAttribute($this->env, $this->source, $context["medical"], "medical_center", [], "any", true, true, false, 1163) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["medical"], "medical_center", [], "any", false, false, false, 1163)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["medical"], "medical_center", [], "any", false, false, false, 1163), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                    <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                        <input type=\"text\" id=\"medicalRemark\" name=\"medicalRemark\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 1166
                (((CoreExtension::getAttribute($this->env, $this->source, $context["medical"], "medical_remark", [], "any", true, true, false, 1166) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["medical"], "medical_remark", [], "any", false, false, false, 1166)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["medical"], "medical_remark", [], "any", false, false, false, 1166), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                    </div>
                                                                </div>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medical'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1170
            yield "                                                        </div>
                                                    ";
        } else {
            // line 1172
            yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 medical-wrapper\">
                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 medical-container\">
                                                                <div class=\"col-span-12 flex justify-end mb-2 toggle-hidden-medical hidden\">
                                                                    <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delMedical\">
                                                                        <i data-lucide=\"trash\" class=\"size-4\"></i>
                                                                    </button>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                    <input type=\"text\" id=\"medicalDate\" name=\"medicalDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                    <input type=\"text\" id=\"medicalResult\" name=\"medicalResult\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                    <input type=\"text\" id=\"medicalCenter\" name=\"medicalCenter\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                    <input type=\"text\" id=\"medicalRemark\" name=\"medicalRemark\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
        }
        // line 1194
        yield "                                                </div>
                                                <div class=\"grid gap-x-4 grid-cols-12 col-span-12 add-medical-wrapper hidden\">
                                                    <div class=\"col-span-12 flex justify-end items-center\">
                                                        <i data-lucide=\"plus\" class=\"size-4 text-custom-500\"></i>
                                                         <a href=\"javascript:void(0)\" id=\"addMedical\" class=\"text-custom-500 underline underline-offset-5\"> Add Medical/ Drug Test</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        ";
        // line 1292
        yield "
                    </div><!--end tab pane-->
                    <div class=\"hidden tab-pane\" id=\"documentsTabs\">
                        <div class=\"flex items-center gap-3 mb-4\">
                            <h5 class=\"underline grow\">Documents</h5>
                            <div class=\"shrink-0 edit-emp_list\">
                                <button data-modal-target=\"addDocuments\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Add Document</button>
                            </div>
                        </div>
                        <div class=\"overflow-x-auto\">
                            <table class=\"w-full align-middle border-separate whitespace-nowrap border-spacing-y-1\">
                                <thead class=\"text-left bg-white dark:bg-zink-700\">
                                    <tr>
                                        <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Documents Type</th>
                                        <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Documents Name</th>
                                        <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">File Size</th>
                                        <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Date Modified</th>
                                        <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Original Filename</th>
                                        <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Action</th>
                                    </tr>
                                </thead>
                                <tbody id=\"attachment-table\">
                                    ";
        // line 1314
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["employeeAttachment"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
            // line 1315
            yield "                                        <tr class=\"bg-white dark:bg-zink-700\">
                                            <td class=\"hidden\" id=\"employeeCode\" data-empcode=\"";
            // line 1316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 1316), "html", null, true);
            yield "\"></td>
                                            <td class=\"hidden\" id=\"attachmentId\" data-attachmentid=\"";
            // line 1317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "id", [], "any", false, false, false, 1317), "html", null, true);
            yield "\"></td>
                                            <td class=\"px-3.5 py-2.5 border-y border-transparent\">
                                                <span class=\"px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent\">";
            // line 1319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "type", [], "any", false, false, false, 1319)), "html", null, true);
            yield "</span>
                                            </td>
                                            <td class=\"px-3.5 py-2.5 border-y border-transparent\">";
            // line 1321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "attachment_name", [], "any", false, false, false, 1321), "html", null, true);
            yield "</td>
                                            <td class=\"px-3.5 py-2.5 border-y border-transparent\">";
            // line 1322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "attachment_size", [], "any", false, false, false, 1322) / 1024) / 1024), 2, ".", ",") . " MB"), "html", null, true);
            yield "</td>
                                            <td class=\"px-3.5 py-2.5 border-y border-transparent\">";
            // line 1323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "date_uploaded", [], "any", false, false, false, 1323), "d M, Y"), "html", null, true);
            yield "</td>
                                            <td class=\"px-3.5 py-2.5 border-y border-transparent\">";
            // line 1324
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "original_file_name", [], "any", false, false, false, 1324), "html", null, true);
            yield "</td>
                                            <td class=\"px-3.5 py-2.5 border-y border-transparent\">
                                                <div class=\"flex items-center justify-end gap-2\">
                                                    ";
            // line 1329
            yield "                                                    <a target=\"_blank\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_attachment", ["employee_code" => CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 1329), "file" => CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "original_file_name", [], "any", false, false, false, 1329)]), "html", null, true);
            yield "\" class=\"flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500\"><i data-lucide=\"arrow-down-to-line\" class=\"size-3\"></i></a>
                                                    <a data-modal-target=\"deleteAttachmentModal\" id=\"delAttachment\" href=\"#\" class=\"flex items-center justify-center size-8 transition-all duration-150 ease-linear rounded-md bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500\"><i data-lucide=\"trash-2\" class=\"size-3\"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1335
        yield "                                </tbody>
                            </table>
                        </div>
                        ";
        // line 1369
        yield "                    </div><!--end tab pane-->
                    <div class=\"hidden tab-pane\" id=\"projectsTabs\">
                        <div class=\"flex items-center gap-3 mb-4\">
                            <h5 class=\"underline grow\">Projects</h5>
                            ";
        // line 1376
        yield "                        </div>
                        <div class=\"grid grid-cols-1 gap-x-5 md:grid-cols-2 2xl:grid-cols-4\">
                        ";
        // line 1379
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["projects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 1380
            yield "                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"flex\">
                                            <div class=\"grow\">
                                                ";
            // line 1385
            yield "                                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "employee_assigned", [], "any", false, false, false, 1385) === true)) {
                // line 1386
                yield "                                                    <h6 id=\"assignment";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 1386), "html", null, true);
                yield "\" class=\"mb-1 text-16\"><a href=\"#!\" class=\"text-green-500\">Assigned</a></h6>
                                                ";
            } else {
                // line 1388
                yield "                                                    <h6 id=\"assignment";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 1388), "html", null, true);
                yield "\" class=\"mb-1 text-16\"><a href=\"#!\">Unassigned</a></h6>
                                                ";
            }
            // line 1390
            yield "
                                                
                                                ";
            // line 1392
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "employee_assigned", [], "any", false, false, false, 1392) === true)) {
                // line 1393
                yield "                                                    ";
                $context["assign_btn"] = "style=display:none";
                // line 1394
                yield "                                                    ";
                $context["unassign_btn"] = "";
                // line 1395
                yield "                                                ";
            } else {
                // line 1396
                yield "                                                    ";
                $context["unassign_btn"] = "style=display:none";
                // line 1397
                yield "                                                    ";
                $context["assign_btn"] = "";
                // line 1398
                yield "                                                ";
            }
            // line 1399
            yield "                                            </div>
                                            <div class=\"shrink-0\">
                                                <div class=\"edit-emp_list relative dropdown\">
                                                
                                                    <button id=\"dropdown_btn";
            // line 1403
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 1403), "html", null, true);
            yield "\" class=\"flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50\" id=\"projectDropdownmenu1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-4\"></i></button>
                                                    <ul class=\"absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]\" aria-labelledby=\"projectDropdownmenu1\">
                                                        ";
            // line 1408
            yield "                                                        <li>
                                                            <a data-proj-id=\"";
            // line 1409
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 1409), "html", null, true);
            yield "\" data-emp-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "id", [], "any", false, false, false, 1409), "html", null, true);
            yield "\" class=\"assignButton block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500\" href=\"#!\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["assign_btn"] ?? null), "html", null, true);
            yield "><i data-lucide=\"file-edit\" class=\"inline-block size-3 mr-1\"></i>Assign</a>
                                                        </li>
                                                        <li>
                                                            <a data-proj-id=\"";
            // line 1412
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 1412), "html", null, true);
            yield "\" data-emp-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "id", [], "any", false, false, false, 1412), "html", null, true);
            yield "\" class=\"unassignButton block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500\" href=\"#!\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unassign_btn"] ?? null), "html", null, true);
            yield "><i data-lucide=\"trash-2\" class=\"inline-block size-3 mr-1\"></i>Unassign</a>
                                                        </li>
                                                        ";
            // line 1417
            yield "                                                    </ul>
                                                
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"mt-4\">
                                            <h6 class=\"mb-1 text-16\"><a href=\"#!\">";
            // line 1424
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 1424), "html", null, true);
            yield "</a></h6>
                                            <p class=\"text-slate-500 dark:text-zink-200\">";
            // line 1425
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "description", [], "any", false, false, false, 1425), "html", null, true);
            yield "</p>
                                        </div>
                                        ";
            // line 1440
            yield "                                    </div>
                                </div><!--end card & col-->
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1443
        yield "                            
                        </div><!--end grid-->
                        ";
        // line 1482
        yield "                    </div><!--end tab pane-->
                    ";
        // line 1484
        yield "                    <div class=\"hidden tab-pane\" id=\"payrollTabs\">
                        <div class=\"flex items-center gap-3 mb-4\">
                            <h5 class=\"underline grow\">Payroll</h5>
                            ";
        // line 1490
        yield "                            ";
        // line 1493
        yield "                        </div>
                    
                        ";
        // line 1496
        yield "                        <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-12\">
                            ";
        // line 1498
        yield "                            <div class=\"lg:col-span-3\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"card-body rounded-t-md border-b-2 dark:bg-zink-600 flex justify-between items-center\">
                                            <h6 class=\"mb-4 text-15\">Payroll Configuration</h6>
                                            <div class=\"shrink-0\">
                                                <div class=\"flex flex-row gap-2\">
                                                    <button type=\"button\" class=\"edit-payroll flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-payroll-hidden\" id=\"editPayrollButton\">
                                                    <i data-lucide=\"pencil\" class=\"size-4\"></i>
                                                    </button>
                                                    <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-payroll-hidden hidden\" id=\"savePayrollButton\">
                                                        <i data-lucide=\"save\" class=\"size-4\"></i>
                                                    </button>
                                                    <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 toggle-payroll-hidden hidden\" id=\"cancelPayrollButton\">
                                                        <i data-lucide=\"x\" class=\"size-4\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class=\"overflow-x-auto\">
                                            <table class=\"w-full ltr:text-left rtl:ext-right\">
                                                <tbody>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Basic Salary per Month</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 capitalize toggle-payroll-hidden td-basicSalary\" data-value=\"";
        // line 1523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "monthly_salary", [], "any", true, true, false, 1523)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "monthly_salary", [], "any", false, false, false, 1523), "")) : ("")), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "monthly_salary", [], "any", false, false, false, 1523), 2, ".", ","), 0), "html", null, true);
        yield "</td>
                                                        <td class=\"w-full toggle-payroll-hidden hidden input-basicSalary\">
                                                            <input type=\"text\" id=\"basicSalary\" name=\"basicSalary\" class=\"form-input input-float text-right border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"\" value=\"";
        // line 1525
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "monthly_salary", [], "any", true, true, false, 1525)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "monthly_salary", [], "any", false, false, false, 1525), 0)) : (0)), "html", null, true);
        yield "\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Allowance per Month (taxable)</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 capitalize toggle-payroll-hidden td-allowance\" data-value=\"";
        // line 1530
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "allowance", [], "any", true, true, false, 1530)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "allowance", [], "any", false, false, false, 1530), "")) : ("")), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "allowance", [], "any", false, false, false, 1530), 2, ".", ","), 0), "html", null, true);
        yield "</td>
                                                        <td class=\"w-full toggle-payroll-hidden hidden input-allowance\">
                                                            <input type=\"text\" id=\"allowance\" name=\"allowance\" class=\"form-input input-float text-right border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"\" value=\"";
        // line 1532
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "allowance", [], "any", true, true, false, 1532)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "allowance", [], "any", false, false, false, 1532), 0)) : (0)), "html", null, true);
        yield "\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Monthly Tax Shield</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 capitalize toggle-payroll-hidden td-tax_shield\" data-value=\"";
        // line 1537
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "tax_shield", [], "any", true, true, false, 1537)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "tax_shield", [], "any", false, false, false, 1537), 0)) : (0)), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "tax_shield", [], "any", false, false, false, 1537), 2, ".", ","), 0), "html", null, true);
        yield "</td>
                                                        <td class=\"w-full toggle-payroll-hidden hidden input-taxShield\">
                                                            <input type=\"text\" id=\"taxShield\" name=\"taxShield\" class=\"form-input input-float text-right border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"\" value=\"";
        // line 1539
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "tax_shield", [], "any", true, true, false, 1539)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "tax_shield", [], "any", false, false, false, 1539), 0)) : (0)), "html", null, true);
        yield "\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Daily Rate (taxable)</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 capitalize toggle-payroll-hidden td-dailyRate\" data-value=\"";
        // line 1544
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "daily_rate", [], "any", true, true, false, 1544)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "daily_rate", [], "any", false, false, false, 1544), "")) : ("")), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "daily_rate", [], "any", false, false, false, 1544), 2, ".", ","), 0), "html", null, true);
        yield "</td>
                                                        <td class=\"w-full toggle-payroll-hidden hidden input-dailyRate\">
                                                            <input type=\"text\" id=\"dailyRate\" name=\"dailyRate\" class=\"form-input input-float text-right border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"\" value=\"";
        // line 1546
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "daily_rate", [], "any", true, true, false, 1546)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "daily_rate", [], "any", false, false, false, 1546), 0)) : (0)), "html", null, true);
        yield "\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Daily Tax Shield</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 capitalize toggle-payroll-hidden td-daily_tax_shield\" data-value=\"";
        // line 1551
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "daily_tax_shield", [], "any", true, true, false, 1551)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "daily_tax_shield", [], "any", false, false, false, 1551), "")) : ("")), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "daily_tax_shield", [], "any", false, false, false, 1551), 2, ".", ","), 0), "html", null, true);
        yield "</td>
                                                        <td class=\"w-full toggle-payroll-hidden hidden input-dailyTaxShield\">
                                                            <input type=\"text\" id=\"dailyTaxShield\" name=\"dailyTaxShield\" class=\"form-input input-float text-right border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"\" value=\"";
        // line 1553
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "daily_tax_shield", [], "any", true, true, false, 1553)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "daily_tax_shield", [], "any", false, false, false, 1553), 0)) : (0)), "html", null, true);
        yield "\">
                                                        </td>
                                                    </tr>
                                                    ";
        // line 1563
        yield "                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Overtime Rate per Hour</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 toggle-payroll-hidden td-overtimeRate\" data-value=\"";
        // line 1565
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "overtime_rate", [], "any", true, true, false, 1565)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "overtime_rate", [], "any", false, false, false, 1565), "")) : ("")), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "overtime_rate", [], "any", false, false, false, 1565), 2, ".", ","), 0), "html", null, true);
        yield "</td>
                                                        <td class=\"w-full toggle-payroll-hidden hidden input-overtimeRate\">
                                                            <input type=\"text\" id=\"overtimeRate\" name=\"overtimeRate\" class=\"form-input input-float text-right border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"\" value=\"";
        // line 1567
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "overtime_rate", [], "any", true, true, false, 1567)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "overtime_rate", [], "any", false, false, false, 1567), 0)) : (0)), "html", null, true);
        yield "\">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Undertime Rate per Hour</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 toggle-payroll-hidden td-undertimeRate\" data-value=\"";
        // line 1572
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "late_rate", [], "any", true, true, false, 1572)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "late_rate", [], "any", false, false, false, 1572), "")) : ("")), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "late_rate", [], "any", false, false, false, 1572), 2, ".", ","), 0), "html", null, true);
        yield "</td>
                                                        <td class=\"w-full toggle-payroll-hidden hidden input-undertimeRate\">
                                                            <input type=\"text\" id=\"undertimeRate\" name=\"undertimeRate\" class=\"form-input input-float text-right border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"\" value=\"";
        // line 1574
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "late_rate", [], "any", true, true, false, 1574)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "late_rate", [], "any", false, false, false, 1574), 0)) : (0)), "html", null, true);
        yield "\">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!--end card-->
                            </div><!--end col-->

                            <div class=\"lg:col-span-3\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"card-body rounded-t-md border-b-2 dark:bg-zink-600 flex justify-between items-center\">
                                            <h6 class=\"mb-4 text-15\">13th Month Pay Configuration</h6>
                                        </div>
                                        
                                        <div class=\"overflow-x-auto\">
                                            <table class=\"w-full ltr:text-left rtl:ext-right\">
                                                <tbody>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Include Salary Adjustment</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 toggle-payroll-hidden td-include_sal_adjustment\" data-value=\"";
        // line 1596
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "included_sal_adjustment", [], "any", false, false, false, 1596)) ? ("Yes") : ("No"));
        yield "\">
                                                            ";
        // line 1597
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "included_sal_adjustment", [], "any", false, false, false, 1597)) ? ("Yes") : ("No"));
        yield "
                                                        </td>
                                                        <td class=\"w-full toggle-payroll-hidden hidden input-include_sal_adjustment\">
                                                            <div class=\"relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2\">
                                                                <input type=\"checkbox\" name=\"include_sal_adjustment\" id=\"include_sal_adjustment\" class=\"absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-500 bg-white/80 dark:bg-zink-400 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-slate-700 dark:checked:border-slate-700 arrow-none\" ";
        // line 1601
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "included_sal_adjustment", [], "any", false, false, false, 1601)) ? ("checked") : (""));
        yield ">
                                                                <label for=\"include_sal_adjustment\" class=\"block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer transition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-slate-700 peer-checked/published:border-slate-700\"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Include Salary</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 toggle-payroll-hidden td-include_salary\" data-value=\"";
        // line 1608
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "included_salary", [], "any", false, false, false, 1608)) ? ("Yes") : ("No"));
        yield "\">
                                                            ";
        // line 1609
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "included_salary", [], "any", false, false, false, 1609)) ? ("Yes") : ("No"));
        yield "
                                                        </td>
                                                        <td class=\"w-full toggle-payroll-hidden hidden input-include_salary\">
                                                            <div class=\"relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2\">
                                                                <input type=\"checkbox\" name=\"include_salary\" id=\"include_salary\" class=\"absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-500 bg-white/80 dark:bg-zink-400 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-slate-700 dark:checked:border-slate-700 arrow-none\" ";
        // line 1613
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "included_salary", [], "any", false, false, false, 1613)) ? ("checked") : (""));
        yield ">
                                                                <label for=\"include_salary\" class=\"block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer transition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-slate-700 peer-checked/published:border-slate-700\"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Include Tax Shield</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 toggle-payroll-hidden td-include_taxshield\" data-value=\"";
        // line 1620
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "included_taxshield", [], "any", false, false, false, 1620)) ? ("Yes") : ("No"));
        yield "\">
                                                            ";
        // line 1621
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "included_taxshield", [], "any", false, false, false, 1621)) ? ("Yes") : ("No"));
        yield "
                                                        </td>
                                                        <td class=\"w-full toggle-payroll-hidden hidden input-include_taxshield\">
                                                            <div class=\"relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2\">
                                                                <input type=\"checkbox\" name=\"include_taxshield\" id=\"include_taxshield\" class=\"absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-500 bg-white/80 dark:bg-zink-400 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-slate-700 dark:checked:border-slate-700 arrow-none\" ";
        // line 1625
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "included_taxshield", [], "any", false, false, false, 1625)) ? ("checked") : (""));
        yield ">
                                                                <label for=\"include_taxshield\" class=\"block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer transition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-slate-700 peer-checked/published:border-slate-700\"></label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div><!--end card-->
                            </div>
                            
                            ";
        // line 1639
        yield "                            ";
        // line 1726
        yield "                            <!--end col-->

                            ";
        // line 1729
        yield "                            ";
        // line 1786
        yield "                            <!--end col-->

                            ";
        // line 1789
        yield "                            <div class=\"lg:col-span-3\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"card-body rounded-t-md border-b-2 dark:bg-zink-600 flex justify-between items-center\">
                                            <h6 class=\"mb-4 text-15\">Employee's Mandatories Summary</h6>
                                        </div>
                                        
                                        <div class=\"overflow-x-auto\">
                                            <table class=\"w-full ltr:text-left rtl:ext-right\">
                                                <tbody>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">SSS Contribution per Month</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 td-sss_deduction capitalize\">";
        // line 1801
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "sss_deduction", [], "any", false, false, false, 1801), 2, ".", ","), 0), "html", null, true);
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">PhilHealth Contribution per Month</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 td-philhealth_deduction capitalize\">";
        // line 1805
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "philhealth_deduction", [], "any", false, false, false, 1805), 2, ".", ","), 0), "html", null, true);
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">Pag-Ibig Contribution per Month</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 td-pagibig_deduction capitalize\">";
        // line 1809
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "pagibig_deduction", [], "any", false, false, false, 1809), 2, ".", ","), 0), "html", null, true);
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">BIR Deduction per Month</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 td-tax_deduction capitalize\">";
        // line 1813
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "tax_deduction", [], "any", false, false, false, 1813), 2, ".", ","), 0), "html", null, true);
        yield "</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!--end card-->
                            </div>

                            <div class=\"lg:col-span-3\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <div class=\"card-body rounded-t-md border-b-2 dark:bg-zink-600 flex justify-between items-center\">
                                            <h6 class=\"mb-4 text-15\">Employer's Mandatories Summary</h6>
                                        </div>
                                        
                                        <div class=\"overflow-x-auto\">
                                            <table class=\"w-full ltr:text-left rtl:ext-right\">
                                                <tbody>
                                                    ";
        // line 1833
        yield "                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">SSS Contribution per Month</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 td-employer_sss_contribution capitalize\">";
        // line 1835
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "employer_sss_contribution", [], "any", false, false, false, 1835), 2, ".", ","), 0), "html", null, true);
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">PhilHealth Contribution per Month</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 td-employer_philhealth_contribution capitalize\">";
        // line 1839
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "employer_philhealth_contribution", [], "any", false, false, false, 1839), 2, ".", ","), 0), "html", null, true);
        yield "</td>
                                                    </tr>
                                                    <tr>
                                                        <th class=\"py-2 font-semibold ps-0\" scope=\"row\">HDMF Contribution per Month</th>
                                                        <td class=\"py-2 text-right text-slate-500 dark:text-zink-200 td-employer_pagibig_contribution capitalize\">";
        // line 1843
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "employer_pagibig_contribution", [], "any", false, false, false, 1843), 2, ".", ","), 0), "html", null, true);
        yield "</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!--end card-->
                            </div>

                            ";
        // line 1853
        yield "                            ";
        // line 1889
        yield "                        </div><!--end grid-->

                        ";
        // line 1892
        yield "                        <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-12\">
                            <div class=\"collapsible col-span-12 card\">
                                <div class=\"card-body flex justify-between text-white collapsible-header group/item rounded-md bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 show\">
                                    <h6 class=\"text-15 text-white\">SSS Loans</h6>
                                    <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                                        <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                        <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                    </div>
                                </div>
                                <div class=\"mt-2 mb-0 collapsible-content card\">
                                    <form class=\"create-form\" id=\"sss-form\" action=\"#\" method=\"POST\">
                                        <div class=\"card-body\">
                                            <div class=\"\">
                                                <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 mb-4\">
                                                    <div class=\"col-span-12 flex justify-end\">
                                                        <div class=\"flex flex-row gap-2\">
                                                            <button type=\"button\" class=\"edit-payroll flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-sss-hidden\" id=\"edit-sss-btn\">
                                                                <i data-lucide=\"pencil\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-sss-hidden hidden\" id=\"save-sss-btn\">
                                                                <i data-lucide=\"save\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 toggle-sss-hidden hidden\" id=\"cancel-sss-btn\">
                                                                <i data-lucide=\"x\" class=\"size-4\"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"grid grid-cols-1 gap-4\">
                                                    <div class=\"grid grid-cols-1 col-span-4 gap-4 rounded-md border border-dashed p-5\">
                                                        <h6 class=\"col-span-1 mb-4 text-15\">SSS Loans</h6>
                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 sss-container\">
                                                            <div class=\"col-span-12 md:col-span-2\">
                                                                <label for=\"skillCode\" class=\"inline-block text-base font-medium\">Date</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-2 text-right\">
                                                                <label for=\"skillDescription\" class=\"inline-block font-medium\">Amount</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-2 text-right\">
                                                                <label for=\"skillPriority\" class=\"inline-block font-medium\">Deduction per paycut</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-2\">
                                                                <label for=\"skillPriority\" class=\"inline-block font-medium\">Status</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-2\">
                                                                <label for=\"skillPriority\" class=\"inline-block text-base font-medium\">Remarks</label>
                                                            </div>
                                                        </div>
                                                        ";
        // line 1940
        if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "sss_loan_array", [], "any", false, false, false, 1940)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "sss_loan_array", [], "any", false, false, false, 1940))) && (CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "sss_loan_array", [], "any", false, false, false, 1940) > 0))) {
            // line 1941
            yield "                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 sss-wrapper\">
                                                                ";
            // line 1942
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "sss_loan_array", [], "any", false, false, false, 1942));
            foreach ($context['_seq'] as $context["_key"] => $context["sss_loan"]) {
                // line 1943
                yield "                                                                    <div class=\"grid gap-x-4 grid-cols-12 col-span-12 sss-container\">
                                                                        ";
                // line 1949
                yield "                                                                        <input type=\"hidden\" name=\"sss_id\" value=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_loan"], "id", [], "any", false, false, false, 1949), "html", null, true);
                yield ">
                                                                        <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                            <input type=\"text\" id=\"sss_date\" name=\"sss_date\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" value=\"";
                // line 1951
                (((CoreExtension::getAttribute($this->env, $this->source, $context["sss_loan"], "date", [], "any", true, true, false, 1951) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["sss_loan"], "date", [], "any", false, false, false, 1951)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_loan"], "date", [], "any", false, false, false, 1951), "html", null, true)) : (yield ""));
                yield "\" disabled>

                                                                            ";
                // line 1954
                yield "                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                            <input type=\"number\" min=\"0\" id=\"sss_amount\" name=\"sss_amount\" class=\"form-input input-float text-right border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 1956
                (((CoreExtension::getAttribute($this->env, $this->source, $context["sss_loan"], "amount", [], "any", true, true, false, 1956) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["sss_loan"], "amount", [], "any", false, false, false, 1956)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_loan"], "amount", [], "any", false, false, false, 1956), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                            <input type=\"number\" min=\"0\" id=\"sss_deduction\" name=\"sss_deduction\" class=\"form-input input-float text-right border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 1959
                (((CoreExtension::getAttribute($this->env, $this->source, $context["sss_loan"], "deduction", [], "any", true, true, false, 1959) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["sss_loan"], "deduction", [], "any", false, false, false, 1959)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_loan"], "deduction", [], "any", false, false, false, 1959), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                            <select id=\"sss_status\" name=\"sss_status\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                                <option value=\"0\" ";
                // line 1963
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sss_loan"], "enabled", [], "any", false, false, false, 1963) == 0)) {
                    yield "selected";
                }
                yield ">Disabled</option>
                                                                                <option value=\"1\" ";
                // line 1964
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sss_loan"], "enabled", [], "any", false, false, false, 1964) == 1)) {
                    yield "selected";
                }
                yield ">Enabled</option>
                                                                                <!-- Add more options as needed -->
                                                                            </select>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                            ";
                // line 1970
                yield "                                                                            <select id=\"sss_remarks\" name=\"sss_remarks\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                                <option value=\"sss_loan\" ";
                // line 1971
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sss_loan"], "remarks", [], "any", false, false, false, 1971) == "sss_loan")) {
                    yield "selected";
                }
                yield ">SSS Loan</option>
                                                                                <option value=\"sss_calamity\" ";
                // line 1972
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sss_loan"], "remarks", [], "any", false, false, false, 1972) == "sss_calamity")) {
                    yield "selected";
                }
                yield ">SSS Calamity Loan</option>
                                                                                <!-- Add more options as needed -->
                                                                            </select>

                                                                        </div>
                                                                    </div>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sss_loan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1979
            yield "                                                            </div>
                                                        ";
        } else {
            // line 1981
            yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 sss-wrapper\">
                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 sss-container\">
                                                                                                                                <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                    <input type=\"text\" id=\"sss_date\" name=\"sss_date\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                    <input type=\"number\" min=\"0\" id=\"sss_amount\" name=\"sss_amount\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                    <input type=\"number\" min=\"0\" id=\"sss_deduction\" name=\"sss_deduction\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                    <select id=\"sss_status\" name=\"sss_status\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                        <option value=\"0\">Disabled</option>
                                                                        <option value=\"1\">Enabled</option>
                                                                        <!-- Add more options as needed -->
                                                                    </select>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                                                                                        <select id=\"sss_remarks\" name=\"sss_remarks\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                        <option value=\"sss_loan\" >SSS Loan</option>
                                                                        <option value=\"sss_calamity\">SSS Calamity Loan</option>
                                                                        <!-- Add more options as needed -->
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        ";
        }
        // line 2015
        yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 add-sss-wrapper hidden\">
                                                            <div class=\"col-span-12 flex justify-end items-center\">
                                                                <i data-lucide=\"plus\" class=\"size-4 text-custom-500\"></i>
                                                                <a href=\"javascript:void(0)\" id=\"addSSS\" class=\"text-custom-500 underline underline-offset-5\"> Add SSS</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        ";
        // line 2031
        yield "                        <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-12\">
                            <div class=\"collapsible col-span-12 card\">
                                <div class=\"card-body flex justify-between text-white collapsible-header group/item rounded-md bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 show\">
                                    <h6 class=\"text-15 text-white\">Pagibig Loans</h6>
                                    <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                                        <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                        <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                    </div>
                                </div>
                                <div class=\"mt-2 mb-0 collapsible-content card\">
                                    <form class=\"create-form\" id=\"pagibig-form\" action=\"#\" method=\"POST\">
                                        <div class=\"card-body\">
                                            <div class=\"\">
                                                <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 mb-4\">
                                                    <div class=\"col-span-12 flex justify-end\">
                                                        <div class=\"flex flex-row gap-2\">
                                                            <button type=\"button\" class=\"edit-payroll flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-pagibig-hidden\" id=\"edit-pagibig-btn\">
                                                                <i data-lucide=\"pencil\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-pagibig-hidden hidden\" id=\"save-pagibig-btn\">
                                                                <i data-lucide=\"save\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 toggle-pagibig-hidden hidden\" id=\"cancel-pagibig-btn\">
                                                                <i data-lucide=\"x\" class=\"size-4\"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"grid grid-cols-1 gap-4\">
                                                    <div class=\"grid grid-cols-1 col-span-4 gap-4 rounded-md border border-dashed p-5\">
                                                        <h6 class=\"col-span-1 mb-4 text-15\">Pagibig Loans</h6>
                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 pagibig-container\">
                                                            <div class=\"col-span-12 md:col-span-2\">
                                                                <label for=\"skillCode\" class=\"inline-block text-base font-medium\">Date</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-2 text-right\">
                                                                <label for=\"skillDescription\" class=\"inline-block font-medium\">Amount</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-2 text-right\">
                                                                <label for=\"skillPriority\" class=\"inline-block font-medium\">Deduction per paycut</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-2 text-right\">
                                                                <label for=\"skillPriority\" class=\"inline-block font-medium\">Status</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-2\">
                                                                <label for=\"skillPriority\" class=\"inline-block text-base font-medium\">Remarks</label>
                                                            </div>
                                                        </div>
                                                        ";
        // line 2079
        if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "pagibig_loan_array", [], "any", false, false, false, 2079)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "pagibig_loan_array", [], "any", false, false, false, 2079))) && (CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "pagibig_loan_array", [], "any", false, false, false, 2079) > 0))) {
            // line 2080
            yield "                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 pagibig-wrapper\">
                                                                ";
            // line 2081
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "pagibig_loan_array", [], "any", false, false, false, 2081));
            foreach ($context['_seq'] as $context["_key"] => $context["pagibig_loan"]) {
                // line 2082
                yield "                                                                    <div class=\"grid gap-x-4 grid-cols-12 col-span-12 pagibig-container\">
                                                                        ";
                // line 2088
                yield "                                                                        <input type=\"hidden\" name=\"pagibig_id\" value=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pagibig_loan"], "id", [], "any", false, false, false, 2088), "html", null, true);
                yield ">
                                                                        <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                            <input type=\"text\" id=\"pagibig_date\" name=\"pagibig_date\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" value=\"";
                // line 2090
                (((CoreExtension::getAttribute($this->env, $this->source, $context["pagibig_loan"], "date", [], "any", true, true, false, 2090) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["pagibig_loan"], "date", [], "any", false, false, false, 2090)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pagibig_loan"], "date", [], "any", false, false, false, 2090), "html", null, true)) : (yield ""));
                yield "\" disabled>

                                                                            ";
                // line 2093
                yield "                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                            <input type=\"number\" min=\"0\" id=\"pagibig_amount\" name=\"pagibig_amount\" class=\"form-input input-float text-right border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 2095
                (((CoreExtension::getAttribute($this->env, $this->source, $context["pagibig_loan"], "amount", [], "any", true, true, false, 2095) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["pagibig_loan"], "amount", [], "any", false, false, false, 2095)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pagibig_loan"], "amount", [], "any", false, false, false, 2095), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                            <input type=\"number\" min=\"0\" id=\"pagibig_deduction\" name=\"pagibig_deduction\" class=\"form-input input-float text-right border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 2098
                (((CoreExtension::getAttribute($this->env, $this->source, $context["pagibig_loan"], "deduction", [], "any", true, true, false, 2098) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["pagibig_loan"], "deduction", [], "any", false, false, false, 2098)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pagibig_loan"], "deduction", [], "any", false, false, false, 2098), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                            <select id=\"pagibig_status\" name=\"pagibig_status\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                                <option value=\"0\" ";
                // line 2102
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["pagibig_loan"], "enabled", [], "any", false, false, false, 2102) == 0)) {
                    yield "selected";
                }
                yield ">Disabled</option>
                                                                                <option value=\"1\" ";
                // line 2103
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["pagibig_loan"], "enabled", [], "any", false, false, false, 2103) == 1)) {
                    yield "selected";
                }
                yield ">Enabled</option>
                                                                                <!-- Add more options as needed -->
                                                                            </select>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                            <select id=\"pagibig_remarks\" name=\"pagibig_remarks\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                                <option value=\"hdmf_loan\" ";
                // line 2109
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pagibig_loan"], "remarks", [], "any", false, false, false, 2109) == "hdmf_loan")) ? ("selected") : (""));
                yield ">HDMF Loan</option>
                                                                                <option value=\"hdmf_calamity\" ";
                // line 2110
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pagibig_loan"], "remarks", [], "any", false, false, false, 2110) == "hdmf_calamity")) ? ("selected") : (""));
                yield ">HDMF Calamity Loan</option>
                                                                                <option value=\"hdmf_mp2\" ";
                // line 2111
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["pagibig_loan"], "remarks", [], "any", false, false, false, 2111) == "hdmf_mp2")) ? ("selected") : (""));
                yield ">HDMF MP2</option>
                                                                                <!-- Add more options as needed -->
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagibig_loan'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2117
            yield "                                                            </div>
                                                        ";
        } else {
            // line 2119
            yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 pagibig-wrapper\">
                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 pagibig-container\">
                                                                                                                                <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                    <input type=\"text\" id=\"pagibig_date\" name=\"pagibig_date\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                    <input type=\"number\" min=\"0\" id=\"pagibig_amount\" name=\"pagibig_amount\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                    <input type=\"number\" min=\"0\" id=\"pagibig_deduction\" name=\"pagibig_deduction\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                    <select id=\"pagibig_status\" name=\"pagibig_status\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                        <option value=\"0\">Disabled</option>
                                                                        <option value=\"1\">Enabled</option>
                                                                        <!-- Add more options as needed -->
                                                                    </select>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                    <select id=\"pagibig_remarks\" name=\"pagibig_remarks\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                        <option value=\"hdmf_loan\" >HDMF Loan</option>
                                                                        <option value=\"hdmf_calamity\">HDMF Calamity Loan</option>
                                                                        <option value=\"hdmf_mp2\">HDMF MP2</option>
                                                                        <!-- Add more options as needed -->
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        ";
        }
        // line 2153
        yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 add-pagibig-wrapper hidden\">
                                                            <div class=\"col-span-12 flex justify-end items-center\">
                                                                <i data-lucide=\"plus\" class=\"size-4 text-custom-500\"></i>
                                                                <a href=\"javascript:void(0)\" id=\"addPagibig\" class=\"text-custom-500 underline underline-offset-5\"> Add Pagibig</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        ";
        // line 2169
        yield "                        <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-12\">
                            <div class=\"collapsible col-span-12 card\">
                                <div class=\"card-body flex justify-between text-white collapsible-header group/item rounded-md bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 show\">
                                    <h6 class=\"text-15 text-white\">Cash Advance</h6>
                                    <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                                        <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                        <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                    </div>
                                </div>
                                <div class=\"mt-2 mb-0 collapsible-content card\">
                                    <form class=\"create-form\" id=\"ca-form\" action=\"#\" method=\"POST\">
                                        <div class=\"card-body\">
                                            <div class=\"\">
                                                <div class=\"grid grid-cols-1 gap-4 lg:grid-cols-12 mb-4\">
                                                    <div class=\"col-span-12 flex justify-end\">
                                                        <div class=\"flex flex-row gap-2\">
                                                            <button type=\"button\" class=\"edit-payroll flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-ca-hidden\" id=\"editCAButton\">
                                                                <i data-lucide=\"pencil\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30 toggle-ca-hidden hidden\" id=\"saveCAButton\">
                                                                <i data-lucide=\"save\" class=\"size-4\"></i>
                                                            </button>
                                                            <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 toggle-ca-hidden hidden\" id=\"cancelCAButton\">
                                                                <i data-lucide=\"x\" class=\"size-4\"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"grid grid-cols-1 gap-4\">
                                                    <div class=\"grid grid-cols-1 col-span-4 gap-4 rounded-md border border-dashed p-5\">
                                                        <h6 class=\"col-span-1 mb-4 text-15\">Cash Advance</h6>
                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 ca-container\">
                                                            <div class=\"col-span-12 md:col-span-2\">
                                                                <label for=\"skillCode\" class=\"inline-block text-base font-medium\">Date</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-2 text-right\">
                                                                <label for=\"skillDescription\" class=\"inline-block font-medium\">Amount</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-2 text-right\">
                                                                <label for=\"skillPriority\" class=\"inline-block font-medium\">Deduction per paycut</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-2\">
                                                                <label for=\"skillPriority\" class=\"inline-block text-base font-medium\">Status</label>
                                                            </div>
                                                            <div class=\"col-span-12 md:col-span-2\">
                                                                <label for=\"skillPriority\" class=\"inline-block text-base font-medium\">Remarks</label>
                                                            </div>
                                                        </div>
                                                        ";
        // line 2217
        if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "cash_advance_array", [], "any", false, false, false, 2217)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "cash_advance_array", [], "any", false, false, false, 2217))) && (CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "cash_advance_array", [], "any", false, false, false, 2217) > 0))) {
            // line 2218
            yield "                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 ca-wrapper\">
                                                                ";
            // line 2219
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "cash_advance_array", [], "any", false, false, false, 2219));
            foreach ($context['_seq'] as $context["_key"] => $context["cash_advance"]) {
                // line 2220
                yield "                                                                    <div class=\"grid gap-x-4 grid-cols-12 col-span-12 ca-container\">
                                                                        ";
                // line 2226
                yield "                                                                        <input type=\"hidden\" name=\"ca_id\" value=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cash_advance"], "id", [], "any", false, false, false, 2226), "html", null, true);
                yield ">
                                                                        <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                            <input type=\"text\" id=\"ca_date\" name=\"ca_date\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" value=\"";
                // line 2228
                (((CoreExtension::getAttribute($this->env, $this->source, $context["cash_advance"], "date_start", [], "any", true, true, false, 2228) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["cash_advance"], "date_start", [], "any", false, false, false, 2228)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cash_advance"], "date_start", [], "any", false, false, false, 2228), "html", null, true)) : (yield ""));
                yield "\" disabled>

                                                                            ";
                // line 2231
                yield "                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                            <input type=\"number\" min=\"0\" id=\"ca_amount\" name=\"ca_amount\" class=\"form-input input-float text-right border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 2233
                (((CoreExtension::getAttribute($this->env, $this->source, $context["cash_advance"], "cash_advance_amount", [], "any", true, true, false, 2233) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["cash_advance"], "cash_advance_amount", [], "any", false, false, false, 2233)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cash_advance"], "cash_advance_amount", [], "any", false, false, false, 2233), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                            <input type=\"number\" min=\"0\" id=\"ca_deduction\" name=\"ca_deduction\" class=\"form-input input-float text-right border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 2236
                (((CoreExtension::getAttribute($this->env, $this->source, $context["cash_advance"], "cash_advance_deduction", [], "any", true, true, false, 2236) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["cash_advance"], "cash_advance_deduction", [], "any", false, false, false, 2236)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cash_advance"], "cash_advance_deduction", [], "any", false, false, false, 2236), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                            <select id=\"ca_status\" name=\"ca_status\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                                <option value=\"0\" ";
                // line 2240
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["cash_advance"], "enabled", [], "any", false, false, false, 2240) == 0)) {
                    yield "selected";
                }
                yield ">Disabled</option>
                                                                                <option value=\"1\" ";
                // line 2241
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["cash_advance"], "enabled", [], "any", false, false, false, 2241) == 1)) {
                    yield "selected";
                }
                yield ">Enabled</option>
                                                                                <!-- Add more options as needed -->
                                                                            </select>
                                                                        </div>
                                                                        <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                            <input type=\"text\" id=\"ca_remarks\" name=\"ca_remarks\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 2246
                (((CoreExtension::getAttribute($this->env, $this->source, $context["cash_advance"], "remarks", [], "any", true, true, false, 2246) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["cash_advance"], "remarks", [], "any", false, false, false, 2246)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cash_advance"], "remarks", [], "any", false, false, false, 2246), "html", null, true)) : (yield ""));
                yield "\" disabled>
                                                                        </div>
                                                                    </div>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cash_advance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2250
            yield "                                                            </div>
                                                        ";
        } else {
            // line 2252
            yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 ca-wrapper\">
                                                            <div class=\"grid gap-x-4 grid-cols-12 col-span-12 ca-container\">
                                                                                                                                <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                    <input type=\"text\" id=\"ca_date\" name=\"ca_date\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                    <input type=\"number\" min=\"0\" id=\"ca_amount\" name=\"ca_amount\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                    <input type=\"number\" min=\"0\" id=\"ca_deduction\" name=\"ca_deduction\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-2 mb-2\">
                                                                    <select id=\"ca_status\" name=\"ca_status\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                        <option value=\"0\">Disabled</option>
                                                                        <option value=\"1\">Enabled</option>
                                                                        <!-- Add more options as needed -->
                                                                    </select>
                                                                </div>
                                                                <div class=\"col-span-12 md:col-span-3 mb-2\">
                                                                    <input type=\"text\" id=\"ca_remarks\" name=\"ca_remarks\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        ";
        }
        // line 2281
        yield "                                                        <div class=\"grid gap-x-4 grid-cols-12 col-span-12 add-ca-wrapper hidden\">
                                                            <div class=\"col-span-12 flex justify-end items-center\">
                                                                <i data-lucide=\"plus\" class=\"size-4 text-custom-500\"></i>
                                                                <a href=\"javascript:void(0)\" id=\"addCA\" class=\"text-custom-500 underline underline-offset-5\"> Add Cash Advance</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        ";
        // line 2297
        yield "                        <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-12\">
                            <div class=\"collapsible col-span-12 card\">
                                <div class=\"card-body flex justify-between text-white collapsible-header group/item rounded-md bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 show\">
                                    <h6 class=\"text-15 text-white\">Payroll History</h6>
                                    <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                                        <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                        <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                    </div>
                                </div>
                                <div class=\"mt-2 mb-0 collapsible-content card\">

                                    <table class=\"w-full align-middle border-separate whitespace-nowrap border-spacing-y-1\">
                                        <thead class=\"text-left bg-white dark:bg-zink-700\">
                                            <tr>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Payroll Date</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Basic Salary per month</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Rendered Days/Mandays</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Approved Overtime Amount</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Undertime Amount</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Total Salary</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Total Deduction</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Net Salary</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Action</th>
                                        </thead>
                                        <tbody id=\"attachment-table\">
                                        ";
        // line 2323
        yield "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "employee_payrolls", [], "any", false, false, false, 2323));
        foreach ($context['_seq'] as $context["_key"] => $context["payroll_item"]) {
            // line 2324
            yield "                                                <tr class=\"bg-white dark:bg-zink-700\">
                                                    <td class=\"hidden\" id=\"employeeCode\" data-empcode=\"";
            // line 2325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 2325), "html", null, true);
            yield "\"></td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">
                                                        ";
            // line 2327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "date_start", [], "any", false, false, false, 2327), "Y-m-d"), "html", null, true);
            yield " to ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "date_end", [], "any", false, false, false, 2327), "Y-m-d"), "html", null, true);
            yield "
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            // line 2329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "basic_salary", [], "any", false, false, false, 2329), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            // line 2330
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "total_rendered_days", [], "any", false, false, false, 2330), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            // line 2331
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "overtime_salary", [], "any", false, false, false, 2331), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            // line 2332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "undertime_deduction", [], "any", false, false, false, 2332), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            // line 2333
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "total_salary", [], "any", false, false, false, 2333), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            // line 2334
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "total_deduction", [], "any", false, false, false, 2334), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            // line 2335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "net_salary", [], "any", false, false, false, 2335), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">
                                                        <div class=\"relative dropdown\">
                                                            <button id=\"employeeAction";
            // line 2338
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 2338), "html", null, true);
            yield "\" data-bs-toggle=\"dropdown\" class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                            <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"employeeAction\">
                                                                <li>
                                                                    <a data-modal-target=\"updateSalaryAdjustment";
            // line 2341
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 2341), "html", null, true);
            yield "\" class=\"block  px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\"><i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Update Salary Adjustment</span></a>
                                                                </li>
                                                                <li>
                                                                    <form action=\"";
            // line 2344
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_payslip");
            yield "\" method=\"POST\" target=\"_blank\">
                                                                        <input type=\"hidden\" name=\"payroll_id\" value=\"";
            // line 2345
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 2345), "html", null, true);
            yield "\">
                                                                        <button type=\"submit\" class=\"block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500\">
                                                                            <i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> 
                                                                            <span class=\"align-middle\">Generate Payslip</span>
                                                                        </button>
                                                                    </form>
                                                                </li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payroll_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2358
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        ";
        // line 2365
        yield "                        <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-12\">
                            <div class=\"collapsible col-span-12 card\">
                                <div class=\"card-body flex justify-between text-white collapsible-header group/item rounded-md bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 show\">
                                    <h6 class=\"text-15 text-white\">SSS Loan History</h6>
                                    <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                                        <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                        <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                    </div>
                                </div>
                                <div class=\"mt-2 mb-0 collapsible-content card\">
                                    <table class=\"w-full align-middle border-separate whitespace-nowrap border-spacing-y-1\">
                                        <thead class=\"text-left bg-white dark:bg-zink-700\">
                                            <tr>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Date Generated</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Previous Amount</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Deduction</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Current Amount</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Remark</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"attachment-table\">
                                            ";
        // line 2386
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "sss_loan_history", [], "any", false, false, false, 2386));
        foreach ($context['_seq'] as $context["_key"] => $context["loan_item"]) {
            // line 2387
            yield "                                                <tr class=\"bg-white dark:bg-zink-700\">
                                                    <td class=\"hidden\" id=\"employeeCode\" data-empcode=\"";
            // line 2388
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 2388), "html", null, true);
            yield "\"></td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">
                                                        ";
            // line 2390
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "date", [], "any", false, false, false, 2390), "Y-m-d"), "html", null, true);
            yield "
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            // line 2392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "previous_amount", [], "any", false, false, false, 2392), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            // line 2393
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "deduction", [], "any", false, false, false, 2393), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            // line 2394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "current_amount", [], "any", false, false, false, 2394), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">
                                                        ";
            // line 2396
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "remark", [], "any", false, false, false, 2396) == "sss_loan")) {
                // line 2397
                yield "                                                            SSS Loan
                                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 2398
$context["loan_item"], "remark", [], "any", false, false, false, 2398) == "sss_calamity")) {
                // line 2399
                yield "                                                            Calamity Loan
                                                        ";
            } else {
                // line 2401
                yield "                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "remark", [], "any", false, false, false, 2401), "html", null, true);
                yield "
                                                        ";
            }
            // line 2403
            yield "                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loan_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2406
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        ";
        // line 2413
        yield "                        <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-12\">
                            <div class=\"collapsible col-span-12 card\">
                                <div class=\"card-body flex justify-between text-white collapsible-header group/item rounded-md bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 show\">
                                    <h6 class=\"text-15 text-white\">Pagibig Loan History</h6>
                                    <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                                        <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                        <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                    </div>
                                </div>
                                <div class=\"mt-2 mb-0 collapsible-content card\">
                                    <table class=\"w-full align-middle border-separate whitespace-nowrap border-spacing-y-1\">
                                        <thead class=\"text-left bg-white dark:bg-zink-700\">
                                            <tr>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Date Generated</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Previous Amount</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Deduction</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Current Amount</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Remark</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"attachment-table\">
                                            ";
        // line 2434
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "pagibig_loan_history", [], "any", false, false, false, 2434));
        foreach ($context['_seq'] as $context["_key"] => $context["loan_item"]) {
            // line 2435
            yield "                                                <tr class=\"bg-white dark:bg-zink-700\">
                                                    <td class=\"hidden\" id=\"employeeCode\" data-empcode=\"";
            // line 2436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 2436), "html", null, true);
            yield "\"></td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">
                                                        ";
            // line 2438
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "date", [], "any", false, false, false, 2438), "Y-m-d"), "html", null, true);
            yield "
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            // line 2440
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "previous_amount", [], "any", false, false, false, 2440), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            // line 2441
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "deduction", [], "any", false, false, false, 2441), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            // line 2442
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "current_amount", [], "any", false, false, false, 2442), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">
                                                        ";
            // line 2444
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "remark", [], "any", false, false, false, 2444) == "hdmf_loan")) {
                // line 2445
                yield "                                                            HDMF Loan
                                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 2446
$context["loan_item"], "remark", [], "any", false, false, false, 2446) == "hdmf_calamity")) {
                // line 2447
                yield "                                                            HDMF Calamity Loan
                                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 2448
$context["loan_item"], "remark", [], "any", false, false, false, 2448) == "hdmf_mp2")) {
                // line 2449
                yield "                                                            HDMF MP2
                                                        ";
            } else {
                // line 2451
                yield "                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "remark", [], "any", false, false, false, 2451), "html", null, true);
                yield "
                                                        ";
            }
            // line 2453
            yield "                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loan_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2456
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        ";
        // line 2463
        yield "                        <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-12\">
                            <div class=\"collapsible col-span-12 card\">
                                <div class=\"card-body flex justify-between text-white collapsible-header group/item rounded-md bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 show\">
                                    <h6 class=\"text-15 text-white\">Cash Advance Loan History</h6>
                                    <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                                        <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                        <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                    </div>
                                </div>
                                <div class=\"mt-2 mb-0 collapsible-content card\">
                                    <table class=\"w-full align-middle border-separate whitespace-nowrap border-spacing-y-1\">
                                        <thead class=\"text-left bg-white dark:bg-zink-700\">
                                            <tr>
                                                ";
        // line 2477
        yield "                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Previous Amount</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Deduction</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent text-right\">Current Amount</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Remark</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"attachment-table\">
                                            ";
        // line 2484
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "cash_advance_history", [], "any", false, false, false, 2484));
        foreach ($context['_seq'] as $context["_key"] => $context["loan_item"]) {
            // line 2485
            yield "                                                <tr class=\"bg-white dark:bg-zink-700\">
                                                    <td class=\"hidden\" id=\"employeeCode\" data-empcode=\"";
            // line 2486
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 2486), "html", null, true);
            yield "\"></td>
                                                    ";
            // line 2490
            yield "                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "previous_amount", [], "any", false, false, false, 2490), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            // line 2491
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "deduction", [], "any", false, false, false, 2491), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent text-right\">";
            // line 2492
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "current_amount", [], "any", false, false, false, 2492), 2, ".", ","), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-transparent\">";
            // line 2493
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loan_item"], "remarks", [], "any", false, false, false, 2493), "html", null, true);
            yield "</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loan_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2496
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!--end tab pane-->
                    <div class=\"hidden tab-pane\" id=\"leaveRequestTabs\">
                        <div class=\"flex items-center gap-3 mb-4\">
                            <h5 class=\"underline grow\">Leave Request</h5>
                            <div class=\"shrink-0 edit-emp_list\">
                                <button data-modal-target=\"addLeaveRequest\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">File a Leave</button>
                            </div>
                        </div>
                        <div class=\"overflow-x-auto grid grid-cols-1 xl:grid-cols-12 gap-x-5\">
                            <div class=\"xl:col-span-3\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h6 class=\"mb-4 text-15\">Leave Entitlements</h6>
                                        <div>
                                            <table class=\"w-full mb-0\">
                                                <tbody>
                                                    ";
        // line 2523
        yield "                                                    ";
        if (($context["leave_entitlements"] ?? null)) {
            // line 2524
            yield "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["leave_entitlements"] ?? null), "employee_leaves", [], "any", false, false, false, 2524));
            foreach ($context['_seq'] as $context["_key"] => $context["leave"]) {
                // line 2525
                yield "                                                            <tr>
                                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">";
                // line 2526
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "leave_policy_name", [], "any", false, false, false, 2526), "html", null, true);
                yield "</td>
                                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">";
                // line 2527
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "no_of_days", [], "any", false, false, false, 2527) + CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "carried_over_days", [], "any", false, false, false, 2527)) - CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "used_days", [], "any", false, false, false, 2527)), "html", null, true);
                yield "</th>
                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2530
            yield "                                                    ";
        }
        // line 2531
        yield "                                                    ";
        // line 2555
        yield "                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class=\"xl:col-span-9\">
                               <div class=\"card\" id=\"historyTable\">
                                    <div class=\"card-body\">
                                        <div class=\"flex items-center\">
                                            <h6 class=\"text-15 grow\">Leave History</h6>
                                            <div class=\"shrink-0\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                        <form action=\"#!\">
                                            ";
        // line 2585
        yield "                                        </form>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                            ";
        // line 2589
        $context["holiday_status"] = ["Pending", "Approved", "Rejected"];
        // line 2594
        yield "                                            <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                                <thead class=\"text-left\">
                                                    <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold name\" data-sort=\"name\">Policy Name</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold date\" data-sort=\"date\">Request Date</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold remainingDays\" data-sort=\"remainingDays\">Total Leave Day/s</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold status\" data-sort=\"status\">Status</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold reason\" data-sort=\"reason\">Reason</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold updatedBy\" data-sort=\"updatedBy\">Updated By</th>
                                                        ";
        // line 2604
        yield "                                                    </tr>
                                                </thead>
                                                <tbody class=\"list\">
                                                    ";
        // line 2608
        yield "                                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["leave_request"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["leave"]) {
            // line 2609
            yield "                                                        <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 2610
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "selected_leave_policy_name", [], "any", false, false, false, 2610), "html", null, true);
            yield "</td>
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 2611
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "date_start", [], "any", false, false, false, 2611), "Y-m-d"), "html", null, true);
            yield " to ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "date_end", [], "any", false, false, false, 2611), "Y-m-d"), "html", null, true);
            yield "</td>
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 2612
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "total_days_requested", [], "any", false, false, false, 2612), "html", null, true);
            yield "</td>
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 2613
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = ($context["holiday_status"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "status", [], "any", false, false, false, 2613)] ?? null) : null), "html", null, true);
            yield "</td> 
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 2614
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "reason", [], "any", false, false, false, 2614), "html", null, true);
            yield "</td>
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 2615
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave"], "updated_by_name", [], "any", false, false, false, 2615), "html", null, true);
            yield "</td>
                                                            ";
            // line 2629
            yield "                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2631
        yield "                                                </tbody>
                                            </table>
                                            <div class=\"noresult\" style=\"display: none\">
                                                <div class=\"py-6 text-center\">
                                                    <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                                    <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                                    ";
        // line 2638
        yield "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-->
                            </div><!--end col-->
                            ";
        // line 2677
        yield "                        </div>
                    </div><!--end tab pane-->
                    <div class=\"hidden tab-pane\" id=\"dailyTimeRecords\">
                        <div class=\"overflow-x-auto grid grid-cols-1 xl:grid-cols-16 gap-x-5\">
                            <div class=\"xl:col-span-9\">
                               <div class=\"card\" id=\"historyTable\">
                                    <div class=\"card-body\">
                                        <div class=\"flex items-center\">
                                            <h6 class=\"text-15 grow\">DTR History</h6>
                                            <div class=\"shrink-0\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                        <form action=\"#!\">
                                            <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                                                <div class=\"relative col-span-4 gap-2\">
                                                    <div class=\"col-span-10 flex flex-row items-center gap-2\">
                                                        <p class=\"text-slate-500 w-40 dark:text-zink-200\">As of</p>
                                                        <select id=\"year_selector\" class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                                            ";
        // line 2697
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(2024, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y")));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 2698
            yield "                                                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["year"], "html", null, true);
            yield "</option>
                                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2700
        yield "                                                        </select>
                                                        <select id=\"cut_off_dd\" onchange=\"findDTR()\" class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                                        </select>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end grid-->
                                        </form>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                            ";
        // line 2710
        $context["holiday_status"] = ["Pending", "Approved", "Rejected"];
        // line 2715
        yield "                                            <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                                <thead class=\"text-left\">
                                                    <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold worker_logs_date\" data-sort=\"name\">Date</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold reason\" data-sort=\"date\">Time In</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold remainingDays\" data-sort=\"remainingDays\">Time Out</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold status\" data-sort=\"status\">Rendered Hours</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold updatedBy\" data-sort=\"updatedBy\">Undertime</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold updatedBy\" data-sort=\"updatedBy\">Overtime</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold updatedBy\" data-sort=\"updatedBy\">Overtime Status</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class=\"list\" id=\"worker_logs\">
                                                    ";
        // line 2748
        yield "                                                </tbody>
                                            </table>
                                            <div class=\"noresult\" style=\"display: none\">
                                                <div class=\"py-6 text-center\">
                                                    <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                                    <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                                    ";
        // line 2755
        yield "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-->
                            </div><!--end col-->
                            ";
        // line 2794
        yield "                        </div>
                    </div><!--end tab pane-->
                    <div class=\"hidden tab-pane\" id=\"overtimeRequestTabs\">
                        <div class=\"overflow-x-auto grid grid-cols-1 xl:grid-cols-16 gap-x-5\">
                            <div class=\"xl:col-span-9\">
                               <div class=\"card\" id=\"historyTable\">
                                    <div class=\"card-body\">
                                        <div class=\"flex items-center\">
                                            <h6 class=\"text-15 grow\">Request History</h6>
                                            <div class=\"shrink-0\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                        <form action=\"#!\">
                                            ";
        // line 2822
        yield "                                        </form>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                            ";
        // line 2826
        $context["holiday_status"] = ["Pending", "Approved", "Rejected"];
        // line 2831
        yield "                                            <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                                <thead class=\"text-left\">
                                                    <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold worker_logs_date\" data-sort=\"name\">Date</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold reason\" data-sort=\"date\">Reason</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold remainingDays\" data-sort=\"remainingDays\">Overtime Hours Requested</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold status\" data-sort=\"status\">Status</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold updatedBy\" data-sort=\"updatedBy\">Updated By</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class=\"list\">
                                                    ";
        // line 2844
        yield "                                                    ";
        if (($context["emp_overtime_request"] ?? null)) {
            // line 2845
            yield "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["emp_overtime_request"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ot_request"]) {
                // line 2846
                yield "                                                            <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 worker_logs_date\">";
                // line 2847
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "worker_logs_date", [], "any", false, false, false, 2847), "Y-m-d"), "html", null, true);
                yield "</td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 reason\">";
                // line 2848
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "reason", [], "any", false, false, false, 2848), "html", null, true);
                yield "</td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 hours_requested\">
                                                                    ";
                // line 2851
                yield "                                                                    ";
                $context["timeParts"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "hours_requested", [], "any", false, false, false, 2851), ":");
                // line 2852
                yield "                                                                    ";
                $context["hours"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["timeParts"] ?? null), 0, [], "array", true, true, false, 2852)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_1 = ($context["timeParts"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), 0)) : (0)), 0, ".", "");
                // line 2853
                yield "                                                                    ";
                $context["minutes"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["timeParts"] ?? null), 1, [], "array", true, true, false, 2853)) ? (Twig\Extension\CoreExtension::default((($__internal_compile_2 = ($context["timeParts"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), 0)) : (0)), 0, ".", "");
                // line 2854
                yield "                                                                    ";
                (((($context["hours"] ?? null) > 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["hours"] ?? null) . " hour/s"), "html", null, true)) : (yield ""));
                yield ((((($context["hours"] ?? null) > 0) && (($context["minutes"] ?? null) > 0))) ? (" and ") : (""));
                (((($context["minutes"] ?? null) > 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["minutes"] ?? null) . " min/s"), "html", null, true)) : (yield ""));
                yield "
                                                                </td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 status\">";
                // line 2856
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = ($context["holiday_status"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "status", [], "any", false, false, false, 2856)] ?? null) : null), "html", null, true);
                yield "</td> 
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
                // line 2857
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "approved_by", [], "any", false, false, false, 2857), "html", null, true);
                yield "</td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                                    <div class=\"action-model_types relative dropdown\">
                                                                        <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                        <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                            <li>
                                                                                <a data-modal-target=\"editOvertimeRequest";
                // line 2863
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 2863), "html", null, true);
                yield "\" class=\"edit-model_types block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                            </li>
                                                                            ";
                // line 2868
                yield "                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ot_request'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2873
            yield "                                                    ";
        }
        // line 2874
        yield "                                                    
                                                </tbody>
                                            </table>
                                            <div class=\"noresult\" style=\"display: none\">
                                                <div class=\"py-6 text-center\">
                                                    <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                                    <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                                    ";
        // line 2882
        yield "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-->
                            </div><!--end col-->
                            ";
        // line 2921
        yield "                        </div>
                    </div><!--end tab pane-->

                    <div class=\"hidden tab-pane\" id=\"accountabilityRecordsTabs\">
                        <div class=\"overflow-x-auto grid grid-cols-1 xl:grid-cols-16 gap-x-5\">
                            <div class=\"xl:col-span-9\">
                               <div class=\"card\" id=\"historyTable\">
                                    <div class=\"card-body\">
                                        <div class=\"flex items-center\">
                                            <h6 class=\"text-15 grow\">Accountability Records</h6>
                                            <div class=\"shrink-0 edit-emp_list\">
                                                <button data-modal-target=\"addAccountabilityRecords\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Add Record</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                            ";
        // line 2938
        $context["accountability_status"] = ["Assigned", "Returned", "Lost"];
        // line 2943
        yield "                                            <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                                <thead class=\"text-left\">
                                                    <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold worker_logs_date\" data-sort=\"name\">Item Name</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold reason\" data-sort=\"date\">Item Count</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold remainingDays\" data-sort=\"remainingDays\">Status</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class=\"list\">
                                                    ";
        // line 2953
        if ((($context["accountability_records"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["accountability_records"] ?? null)) > 0))) {
            // line 2954
            yield "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["accountability_records"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["accountability_item"]) {
                // line 2955
                yield "                                                            <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 reason\">";
                // line 2956
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accountability_item"], "item_name", [], "any", false, false, false, 2956), "html", null, true);
                yield "</td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
                // line 2957
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accountability_item"], "item_count", [], "any", false, false, false, 2957), "html", null, true);
                yield "</td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 status\">";
                // line 2958
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = ($context["accountability_status"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[CoreExtension::getAttribute($this->env, $this->source, $context["accountability_item"], "status", [], "any", false, false, false, 2958)] ?? null) : null), "html", null, true);
                yield "</td>
                                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                                    <div class=\"action-model_types relative dropdown\">
                                                                        <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                        <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                            <li>
                                                                                <a data-modal-target=\"editAccountabilityRecords";
                // line 2964
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accountability_item"], "id", [], "any", false, false, false, 2964), "html", null, true);
                yield "\" class=\"edit-model_types block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accountability_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 2971
            yield "                                                    ";
        }
        // line 2972
        yield "                                                </tbody>
                                            </table>
                                            <div class=\"noresult\" style=\"display: none\">
                                                <div class=\"py-6 text-center\">
                                                    <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                                    <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                                    ";
        // line 2979
        yield "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-->
                            </div><!--end col-->
                        </div>
                    </div><!--end tab pane-->
                </div><!--end tab content-->
";
        // line 2989
        yield "<span class=\"hidden\" id=\"employeeData\" data-value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["employeeData"] ?? null)), "html", null, true);
        yield "\"></span>
<span class=\"hidden\" id=\"employeeId\" data-value=\"";
        // line 2990
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "id", [], "any", false, false, false, 2990), "html", null, true);
        yield "\"></span>
<!-- Edit Employee Modal -->
<div id=\"editEmployeeModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen lg:w-[55rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
        
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\" id=\"editEmployeeLabel\">Edit Employee</h5>
            <button data-modal-close=\"editEmployeeModal\" id=\"editEmployeeClose\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form class=\"create-form editEmployeeForm\" id=\"create-form\" action=\"";
        // line 3000
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_employee");
        yield "\" method=\"POST\">
                ";
        // line 3003
        yield "                <input type=\"hidden\" name=\"employeeId\" id=\"employeeId\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "id", [], "any", false, false, false, 3003), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"action\" id=\"action\" value=\"update_employee\">
                <div id=\"alert-error-msg\" class=\"hidden px-4 py-3 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-500/20\"></div>
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
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
                        <input type=\"text\" id=\"birthDate\" name=\"birthDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"birthPlace\" class=\"inline-block mb-2 text-base font-medium\">Birth Place </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"text\" id=\"birthPlace\" name=\"birthPlace\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Birth Place\">
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"age\" class=\"inline-block mb-2 text-base font-medium\">Age </label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" min=\"0\" id=\"age\" name=\"age\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Age\">
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
                        <input type=\"text\" id=\"zipCode\" name=\"zipCode\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Zip Code\">
                    </div>
                    <div class=\"xl:col-span-4\" id=\"provinceContainer\">
                        <label for=\"province\" class=\"inline-block mb-2 text-base font-medium\">Province </label>
                        <span class=\"text-red-500\">*</span>
                        <div class=\"hidden\" id=\"provinceList\" data-value=\"";
        // line 3074
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["provinces"] ?? null)), "html", null, true);
        yield "\"></div>
                        <select name=\"province\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"province\">
                            <option value=\"\">Select Province</option>
                        ";
        // line 3080
        yield "                        </select>
                    </div>
                    <div class=\"xl:col-span-6\">
                        <label for=\"telephoneNumber\" class=\"inline-block mb-2 text-base font-medium\">Telephone No.</label>
                        <input type=\"text\" id=\"telephoneNumber\" name=\"telephoneNumber\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Telephone Number\">
                    </div>
                    <div class=\"xl:col-span-6\">
                        <label for=\"cellphoneNumber\" class=\"inline-block mb-2 text-base font-medium\">Cellphone No.</label>
                        <input type=\"text\" id=\"cellphoneNumber\" name=\"cellphoneNumber\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Cellphone Number\">
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
        // line 3101
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
                        <label for=\"division2\" class=\"inline-block mb-2 text-base font-medium\">Division </label>
                        <div class=\"hidden\" id=\"divisionList\" data-value=\"";
        // line 3129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["divisions"] ?? null)), "html", null, true);
        yield "\"></div>
                        ";
        // line 3131
        yield "                        <select name=\"division2\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"division2\">
                            <option value=\"\">Select Division</option>
                            ";
        // line 3136
        yield "                        </select>
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"department2\" class=\"inline-block mb-2 text-base font-medium\">Department </label>
                        ";
        // line 3141
        yield "                        <select name=\"department2\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\"id=\"department2\">
                            <option value=\"\">Select Department</option>
                            ";
        // line 3146
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
                        <span class=\"text-red-500\">*</span>
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
                    <div class=\"xl:col-span-4\">
                        <label for=\"probationaryDate\" class=\"inline-block mb-2 text-base font-medium\">Probationary Date</label>
                        <input type=\"text\" id=\"probationaryDate\" name=\"probationaryDate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\">
                    </div>
                    <div class=\"xl:col-span-4\">
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
<!--Add Documents Modal-->
<div id=\"addDocuments\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\">Add Document</h5>
            <button data-modal-close=\"addDocuments\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 3203
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upload_attachment");
        yield "\" method=\"POST\" enctype=\"multipart/form-data\" id=\"file-upload-form\">
                <input type=\"hidden\" name=\"empCode\" value=\"";
        // line 3204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 3204), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"fileSize\" value=\"25\">
                <div class=\"mb-3\">
                    <label for=\"documentName\" class=\"inline-block mb-2 text-base font-medium\">Documents Name</label>
                    <input type=\"text\" name=\"documentName\" id=\"documentName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter File Name\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"documentType\" class=\"inline-block mb-2 text-base font-medium\">Type</label>
                    <select name=\"documentType\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices data-choices-sorting-false id=\"documentType\">
                        <option value=\"\">Documents Type</option>
                        <option value=\"doc\">Document</option>
                        <option value=\"pdf\">PDF</option>
                        <option value=\"csv\">CSV</option>
                        <option value=\"jpg\">Image</option>
                        ";
        // line 3222
        yield "                    </select>
                </div>
                <div class=\"mb-3\">
                    <label for=\"attachment\" class=\"inline-block mb-2 text-base font-medium\">Attachment</label>
                    <input type=\"file\" class=\"cursor-pointer form-file border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500\" placeholder=\"Choose file\" name=\"attachment\" id=\"attachment\" required>
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button data-modal-close=\"addDocuments\" class=\"text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20\">Cancel</button>
                    <button type=\"submit\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Add Document</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        // line 3237
        yield "<div id=\"updatePayrollProfile\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\">Update Payroll</h5>
            <button data-modal-close=\"updatePayrollProfile\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 3244
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employee_payroll_profile_save");
        yield "\" method=\"POST\">
                <input type=\"hidden\" name=\"employee_record_id\" value=\"";
        // line 3245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "id", [], "any", false, false, false, 3245), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"employee_code\" value=\"";
        // line 3246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 3246), "html", null, true);
        yield "\">
                <div class=\"mb-3\">
                    <label for=\"monthly_salary\" class=\"inline-block mb-2 text-base font-medium\">Monthly Salary</label>
                    <input type=\"text\" name=\"monthly_salary\" id=\"monthly_salary\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Monthly Salary\" value=\"";
        // line 3249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "monthly_salary", [], "any", true, true, false, 3249)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "monthly_salary", [], "any", false, false, false, 3249), "")) : ("")), "html", null, true);
        yield "\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"allowance\" class=\"inline-block mb-2 text-base font-medium\">Allowance</label>
                    <input type=\"text\" name=\"allowance\" id=\"allowance\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Allowance\" value=\"";
        // line 3253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "allowance", [], "any", true, true, false, 3253)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "allowance", [], "any", false, false, false, 3253), "")) : ("")), "html", null, true);
        yield "\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"overtime_rate\" class=\"inline-block mb-2 text-base font-medium\">OT Rate</label>
                    <input type=\"text\" name=\"overtime_rate\" id=\"overtime_rate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter OT Rate\" value=\"";
        // line 3257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "overtime_rate", [], "any", true, true, false, 3257)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "overtime_rate", [], "any", false, false, false, 3257), "")) : ("")), "html", null, true);
        yield "\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"late_rate\" class=\"inline-block mb-2 text-base font-medium\">Late Rate</label>
                    <input type=\"text\" name=\"late_rate\" id=\"late_rate\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Late Rate\" value=\"";
        // line 3261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "late_rate", [], "any", true, true, false, 3261)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "late_rate", [], "any", false, false, false, 3261), "")) : ("")), "html", null, true);
        yield "\" required>
                </div>
                ";
        // line 3279
        yield "        </div>
        <div class=\"flex justify-end gap-2 mt-4 p-4\">
            <button data-modal-close=\"addDocuments\" class=\"text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Update Payroll</button>
        </div>
    </form>
    </div>
</div>
";
        // line 3332
        yield "<div id=\"generatePayroll\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\">Generate Payroll</h5>
            <button data-modal-close=\"generatePayroll\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 3339
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_payroll");
        yield "\" method=\"POST\">
                <input type=\"hidden\" name=\"employee_id\" value=\"";
        // line 3340
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "id", [], "any", false, false, false, 3340), "html", null, true);
        yield "\">
                <input type=\"hidden\" name=\"employee_code\" value=\"";
        // line 3341
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 3341), "html", null, true);
        yield "\">
                
                <!-- Date input -->
                <div class=\"mb-3\">
                    <label for=\"payroll_date_range\" class=\"inline-block mb-2 text-base font-medium\">Date</label>
                    <input type=\"text\" name=\"payroll_date_range\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\" id=\"worker_log_date\" required>
                </div>
                
                <!-- Set Salary Adjustment toggle -->
                <div class=\"xl:col-span-6\">
                    <label for=\"salary_adjustment\" class=\"inline-block mb-2 text-base font-medium\">Set Salary Adjustment</label>
                    <div class=\"relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2\">
                        <input type=\"checkbox\" name=\"salary_adjustment\" id=\"salary_adjustment\" class=\"absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-500 bg-white/80 dark:bg-zink-400 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-slate-700 dark:checked:border-slate-700 arrow-none\">
                        <label for=\"salary_adjustment\" class=\"block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer transition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-slate-700 peer-checked/published:border-slate-700\"></label>
                    </div>
                </div>

                <!-- Salary Adjustment Inputs -->
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_regular_ndot_hours\" class=\"inline-block mb-2 text-base font-medium\">Regular NDOT Hours</label>
                    <input type=\"text\" name=\"sal_adj_regular_ndot_hours\" id=\"sal_adj_regular_ndot_hours\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_regular_ndot_pay\" class=\"inline-block mb-2 text-base font-medium\">Regular NDOT Pay</label>
                    <input type=\"text\" name=\"sal_adj_regular_ndot_pay\" id=\"sal_adj_regular_ndot_pay\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_ot_meal_subsidy_days\" class=\"inline-block mb-2 text-base font-medium\">OT Meal Subsidy (Days/8pm Onwards)</label>
                    <input type=\"text\" name=\"sal_adj_ot_meal_subsidy_days\" id=\"sal_adj_ot_meal_subsidy_days\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_ot_meal_subsidy_amount\" class=\"inline-block mb-2 text-base font-medium\">OT Meal Subsidy Amount</label>
                    <input type=\"text\" name=\"sal_adj_ot_meal_subsidy_amount\" id=\"sal_adj_ot_meal_subsidy_amount\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>

                <!-- New Inputs for Remaining Columns -->
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_4hrs_more_weekend_holiday\" class=\"inline-block mb-2 text-base font-medium\">4 HRS or MORE during SAT./SUN./LEG. HOL.</label>
                    <input type=\"text\" name=\"sal_adj_4hrs_more_weekend_holiday\" id=\"sal_adj_4hrs_more_weekend_holiday\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_amount\" class=\"inline-block mb-2 text-base font-medium\">Amount</label>
                    <input type=\"text\" name=\"sal_adj_amount\" id=\"sal_adj_amount\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_temp_allowance\" class=\"inline-block mb-2 text-base font-medium\">Temporary Allowance Amount</label>
                    <input type=\"text\" name=\"sal_adj_temp_allowance\" id=\"sal_adj_temp_allowance\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_wellness\" class=\"inline-block mb-2 text-base font-medium\">Wellness</label>
                    <input type=\"text\" name=\"sal_adj_wellness\" id=\"sal_adj_wellness\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_amount\" class=\"inline-block mb-2 text-base font-medium\">Salary Adjustment</label>
                    <input type=\"text\" name=\"sal_adj_amount\" id=\"sal_adj_amount\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_total_nontax_salary\" class=\"inline-block mb-2 text-base font-medium\">Total Non-Taxable Salary Adjustment</label>
                    <input type=\"text\" name=\"sal_adj_total_nontax_salary\" id=\"sal_adj_total_nontax_salary\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_total_tax_salary\" class=\"inline-block mb-2 text-base font-medium\">Total Taxable Salary Adjustment</label>
                    <input type=\"text\" name=\"sal_adj_total_tax_salary\" id=\"sal_adj_total_tax_salary\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>
                <div class=\"mb-3 salary-adjustment-inputs\">
                    <label for=\"sal_adj_total_salary\" class=\"inline-block mb-2 text-base font-medium\">Total Salary Adjustment</label>
                    <input type=\"text\" name=\"sal_adj_total_salary\" id=\"sal_adj_total_salary\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>

                <!-- Submit Button -->
                <div class=\"mt-6\">
                    <button type=\"submit\" class=\"btn bg-custom-500 text-white hover:bg-custom-600 w-full\">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        // line 3418
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["payrollProfile"] ?? null), "employee_payrolls", [], "any", false, false, false, 3418));
        foreach ($context['_seq'] as $context["_key"] => $context["payroll_item"]) {
            // line 3419
            yield "<div id=\"updateSalaryAdjustment";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3419), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen lg:w-[75rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\">Update Salary Adjustment</h5>
            <button data-modal-close=\"updateSalaryAdjustment";
            // line 3423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3423), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
            // line 3426
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_salary_adjustment");
            yield "\" method=\"POST\">
                <input type=\"hidden\" id=\"payroll_employee_id";
            // line 3427
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3427), "html", null, true);
            yield "\" name=\"payroll_employee_id";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3427), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "id", [], "any", false, false, false, 3427), "html", null, true);
            yield "\">
                <input type=\"hidden\" id=\"employee_code";
            // line 3428
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3428), "html", null, true);
            yield "\" name=\"employee_code\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 3428), "html", null, true);
            yield "\">
                <input type=\"hidden\" id=\"payroll_id";
            // line 3429
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3429), "html", null, true);
            yield "\" name=\"payroll_id";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3429), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3429), "html", null, true);
            yield "\">
                
                <!-- Date input -->
                ";
            // line 3436
            yield "                
                <!-- Set Salary Adjustment toggle -->
                ";
            // line 3445
            yield "                <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                            <div class=\"xl:col-span-6 h-[calc(100vh_-_320px)] max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto\">
                                <div class=\"mb-3\">
                                    <label for=\"\" class=\"inline-block mb-2 text-base font-medium\">Salary Adjustment</label>
                                </div>
                                <!-- Salary Adjustment Inputs -->
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_regular_ndot_hours\" class=\"inline-block mb-2 text-base font-medium\">Regular NDOT Hours</label>
                                    <input type=\"text\" oninput=\"updateSalaryAdjustmentUI(";
            // line 3453
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3453), "html", null, true);
            yield ")\" name=\"sal_adj_regular_ndot_hours\" id=\"sal_adj_regular_ndot_hours";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3453), "html", null, true);
            yield "\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_regular_ndot_pay\" class=\"inline-block mb-2 text-base font-medium\">Regular NDOT Pay</label>
                                    <input type=\"text\" oninput=\"updateSalaryAdjustmentUI(";
            // line 3457
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3457), "html", null, true);
            yield ")\" name=\"sal_adj_regular_ndot_pay\" id=\"sal_adj_regular_ndot_pay";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3457), "html", null, true);
            yield "\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_ot_meal_subsidy_days\" class=\"inline-block mb-2 text-base font-medium\">OT Meal Subsidy (Days/8pm Onwards)</label>
                                    <input type=\"text\" oninput=\"updateSalaryAdjustmentUI(";
            // line 3461
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3461), "html", null, true);
            yield ")\" name=\"sal_adj_ot_meal_subsidy_days\" id=\"sal_adj_ot_meal_subsidy_days";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3461), "html", null, true);
            yield "\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_ot_meal_subsidy_amount\" class=\"inline-block mb-2 text-base font-medium\">OT Meal Subsidy Amount</label>
                                    <input type=\"text\" oninput=\"updateSalaryAdjustmentUI(";
            // line 3465
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3465), "html", null, true);
            yield ")\" name=\"sal_adj_ot_meal_subsidy_amount\" id=\"sal_adj_ot_meal_subsidy_amount";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3465), "html", null, true);
            yield "\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>

                                <!-- New Inputs for Remaining Columns -->
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_4hrs_more_weekend_holiday\" class=\"inline-block mb-2 text-base font-medium\">4 HRS or MORE during SAT./SUN./LEG. HOL.</label>
                                    <input type=\"text\" oninput=\"updateSalaryAdjustmentUI(";
            // line 3471
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3471), "html", null, true);
            yield ")\" name=\"sal_adj_4hrs_more_weekend_holiday\" id=\"sal_adj_4hrs_more_weekend_holiday";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3471), "html", null, true);
            yield "\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_amount\" class=\"inline-block mb-2 text-base font-medium\">Amount</label>
                                    <input type=\"text\" oninput=\"updateSalaryAdjustmentUI(";
            // line 3475
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3475), "html", null, true);
            yield ")\" name=\"sal_adj_amount\" id=\"sal_adj_amount";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3475), "html", null, true);
            yield "\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_temp_allowance\" class=\"inline-block mb-2 text-base font-medium\">Temporary Allowance Amount</label>
                                    <input type=\"text\" oninput=\"updateSalaryAdjustmentUI(";
            // line 3479
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3479), "html", null, true);
            yield ")\" name=\"sal_adj_temp_allowance\" id=\"sal_adj_temp_allowance";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3479), "html", null, true);
            yield "\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_wellness\" class=\"inline-block mb-2 text-base font-medium\">Wellness</label>
                                    <input type=\"text\" oninput=\"updateSalaryAdjustmentUI(";
            // line 3483
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3483), "html", null, true);
            yield ")\" name=\"sal_adj_wellness\" id=\"sal_adj_wellness";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3483), "html", null, true);
            yield "\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_amount\" class=\"inline-block mb-2 text-base font-medium\">Salary Adjustment</label>
                                    <input type=\"text\" oninput=\"updateSalaryAdjustmentUI(";
            // line 3487
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3487), "html", null, true);
            yield ")\" name=\"sal_adj_amount\" id=\"sal_adj_amount";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3487), "html", null, true);
            yield "\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_total_nontax_salary\" class=\"inline-block mb-2 text-base font-medium\">Total Non-Taxable Salary Adjustment</label>
                                    <input type=\"text\" oninput=\"updateSalaryAdjustmentUI(";
            // line 3491
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3491), "html", null, true);
            yield ")\" name=\"sal_adj_total_nontax_salary\" id=\"sal_adj_total_nontax_salary";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3491), "html", null, true);
            yield "\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_total_tax_salary\" class=\"inline-block mb-2 text-base font-medium\">Total Taxable Salary Adjustment</label>
                                    <input type=\"text\" oninput=\"updateSalaryAdjustmentUI(";
            // line 3495
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3495), "html", null, true);
            yield ")\" name=\"sal_adj_total_tax_salary\" id=\"sal_adj_total_tax_salary";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3495), "html", null, true);
            yield "\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <label for=\"sal_adj_total_salary\" class=\"inline-block mb-2 text-base font-medium\">Total Salary Adjustment</label>
                                    <input type=\"text\" oninput=\"updateSalaryAdjustmentUI(";
            // line 3499
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3499), "html", null, true);
            yield ")\" name=\"sal_adj_total_salary\" id=\"sal_adj_total_salary";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3499), "html", null, true);
            yield "\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                                </div>
                            </div>
                            <div class=\"xl:col-span-6\">
                                <div class=\"\">
                                    <label for=\"\" class=\"inline-block mb-2 text-base font-medium\">Previous</label>
                                </div>
                                <div class=\"border-dashed border-2 border-black-500 rounded-md p-5\">
                                    <!-- Salary Adjustment Inputs -->
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"comp_sal_adj_regular_ndot_hours_prev\" class=\"inline-block mb-2 text-base font-bold\">Previous Total Salary</label>
                                        <span id=\"comp_sal_adj_regular_ndot_hours_prev\" class=\"inline-block mb-2 text-base font-medium\">₱ ";
            // line 3510
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "total_salary", [], "any", true, true, false, 3510)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "total_salary", [], "any", false, false, false, 3510), "0.00")) : ("0.00")), 2, ".", ","), "html", null, true);
            yield "</span>
                                    </div>
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"sal_adj_regular_ndot_pay_prev\" class=\"inline-block mb-2 text-base font-bold\">Previous Total Deductions</label>
                                        <span id=\"comp_sal_adj_regular_ndot_pay_prev\" class=\"inline-block mb-2 text-base font-medium\">₱ ";
            // line 3514
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "total_deduction", [], "any", true, true, false, 3514)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "total_deduction", [], "any", false, false, false, 3514), "0.00")) : ("0.00")), 2, ".", ","), "html", null, true);
            yield "</span>
                                    </div>
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"sal_adj_ot_meal_subsidy_days_prev\" class=\"inline-block mb-2 text-base font-bold\">Previous Net Salary</label>
                                        <span id=\"comp_sal_adj_ot_meal_subsidy_days_prev\" class=\"inline-block mb-2 text-base font-medium\">₱ ";
            // line 3518
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "net_salary", [], "any", true, true, false, 3518)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "net_salary", [], "any", false, false, false, 3518), "0.00")) : ("0.00")), 2, ".", ","), "html", null, true);
            yield "</span>
                                    </div>
                                </div>
                                <div class=\"mt-5\">
                                    <label for=\"\" class=\"inline-block mb-2 text-base font-medium\">Updated</label>
                                </div>
                                <div class=\"border-dashed border-2 border-black-500 rounded-md p-5\">
                                    <!-- New Inputs for Remaining Columns -->
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"comp_sal_adj_regular_ndot_hours_preview";
            // line 3527
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3527), "html", null, true);
            yield "\" class=\"inline-block mb-2 text-base font-bold\">Updated Total Salary</label>
                                        <span id=\"comp_sal_adj_regular_ndot_hours_preview";
            // line 3528
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3528), "html", null, true);
            yield "\" class=\"inline-block mb-2 text-base font-medium\">₱ 0</span>
                                    </div>
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"comp_sal_adj_regular_ndot_pay_preview";
            // line 3531
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3531), "html", null, true);
            yield "\" class=\"inline-block mb-2 text-base font-bold\">Updated Total Deductions</label>
                                        <span id=\"comp_sal_adj_regular_ndot_pay_preview";
            // line 3532
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3532), "html", null, true);
            yield "\" class=\"inline-block mb-2 text-base font-medium\">₱ 0</span>
                                    </div>
                                    <div class=\"mb-3 flex flex-row justify-between\">
                                        <label for=\"comp_sal_adj_ot_meal_subsidy_days_preview";
            // line 3535
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3535), "html", null, true);
            yield "\" class=\"inline-block mb-2 text-base font-bold\">Updated Net Salary</label>
                                        <span id=\"comp_sal_adj_ot_meal_subsidy_days_preview";
            // line 3536
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3536), "html", null, true);
            yield "\" class=\"inline-block mb-2 text-base font-medium\">₱ 0</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                ";
            // line 3593
            yield "
                <!-- Submit Button -->
                ";
            // line 3598
            yield "                <!-- Submit Button -->
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" id=\"close-modal\" data-modal-close=\"updateSalaryAdjustment";
            // line 3600
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payroll_item"], "id", [], "any", false, false, false, 3600), "html", null, true);
            yield "\" class=\"text-red-500 bg-white btn\">Cancel</button>
                    <button type=\"submit\" class=\"text-white btn bg-custom-500\">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payroll_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3608
        yield "
<div id=\"deleteAttachmentModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
            <button data-modal-close=\"deleteAttachmentModal\" id=\"deleteRecord-close\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"";
        // line 3615
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/delete.png"), "html", null, true);
        yield "\" alt=\"\" class=\"block h-12 mx-auto\">
            <div class=\"mt-5 text-center\">
                <h5 class=\"mb-1\">Are you sure?</h5>
                <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this document?</p>
                <div class=\"flex justify-center gap-2 mt-6\">
                    <button data-modal-close=\"deleteAttachmentModal\" class=\"bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10\">Cancel</button>
                    <a href=\"#\" id=\"delAttachmentButton\" class=\"text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Yes, Delete It!</a>
                </div>
            </div>
        </div>
    </div>
</div><!--end delete modal-->

<div id=\"addLeaveRequest\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Leave Request</h5>
            <button data-modal-close=\"addLeaveRequest\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 3635
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_leave_request_profile");
        yield "\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <input type=\"hidden\" name=\"emp_record_id\" value=\"";
        // line 3638
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["employee_id"] ?? null), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"empCode\" value=\"";
        // line 3639
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 3639), "html", null, true);
        yield "\">
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"leave_policy\" class=\"inline-block mb-2 text-base font-medium\">Leave</label>
                    <select id=\"leave_policy\" name=\"leave_policy\" class=\"form-input\">
                           
                        ";
        // line 3646
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["leave_policies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["leave_policy"]) {
            // line 3647
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "id", [], "any", false, false, false, 3647), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["leave_policy"], "name", [], "any", false, false, false, 3647), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leave_policy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 3649
        yield "                    </select>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"date_start\" class=\"inline-block mb-2 text-base font-medium\">Date Start</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"date_start\" name=\"date_start\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Enter Date Start\" required>
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
                    <input type=\"number\" min=\"0\" id=\"year\" name=\"year\" class=\"form-input\" placeholder=\"Enter Year\" required>
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
        // line 3692
        if (($context["emp_overtime_request"] ?? null)) {
            // line 3693
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["emp_overtime_request"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["ot_request"]) {
                // line 3694
                yield "<div id=\"editOvertimeRequest";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 3694), "html", null, true);
                yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Overtime Request</h5>
            <button data-modal-close=\"editOvertimeRequest";
                // line 3698
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 3698), "html", null, true);
                yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
                // line 3701
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_overtime_request");
                yield "\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <input type=\"hidden\" name=\"emp_record_id\" value=\"";
                // line 3704
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["employee_id"] ?? null), "html", null, true);
                yield "\">
                    <input type=\"hidden\" name=\"empCode\" value=\"";
                // line 3705
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 3705), "html", null, true);
                yield "\">
                    <input type=\"hidden\" name=\"ot_request_id\" value=\"";
                // line 3706
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 3706), "html", null, true);
                yield "\">
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"date_start\" class=\"inline-block mb-2 text-base font-medium\">Overtime hour/s</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"ot_hours\" name=\"ot_hours\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"timepickr\" data-time-hrs=\"true\"  data-default-time=\"";
                // line 3712
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "hours_requested", [], "any", false, false, false, 3712), "html", null, true);
                yield "\" placeholder=\"Add Time\" value=\"\" required>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"reason\" class=\"inline-block mb-2 text-base font-medium\">Reason</label>
                    <textarea id=\"reason\" name=\"reason\" class=\"form-input\" placeholder=\"Enter Reason (optional)\">";
                // line 3717
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "reason", [], "any", false, false, false, 3717), "html", null, true);
                yield "</textarea>
                </div>
            </div>
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"editOvertimeRequest";
                // line 3722
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ot_request"], "id", [], "any", false, false, false, 3722), "html", null, true);
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
        }
        // line 3730
        yield "
";
        // line 3732
        yield "<div id=\"addOvertimeRequest\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Overtime Request</h5>
            <button data-modal-close=\"addOvertimeRequest\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 3739
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_overtime_request");
        yield "\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <input type=\"hidden\" name=\"emp_record_id\" value=\"";
        // line 3742
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["employee_id"] ?? null), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"empCode\" value=\"";
        // line 3743
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 3743), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"worker_logs_id\" value=\"\">
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"date_start\" class=\"inline-block mb-2 text-base font-medium\">Overtime hour/s</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"ot_hours\" name=\"ot_hours\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"timepickr\" data-time-hrs=\"true\"  data-default-time=\"\" placeholder=\"Add Time\" value=\"\" required>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"reason\" class=\"inline-block mb-2 text-base font-medium\">Reason</label>
                    <textarea id=\"reason\" name=\"reason\" class=\"form-input\" placeholder=\"Enter Reason (optional)\"></textarea>
                </div>
            </div>
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"addOvertimeRequest\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Apply OT Request</button>
        </div>
    </form>
    </div>
</div><!--end add user-->

";
        // line 3768
        yield "<div id=\"addAccountabilityRecords\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Accountability Records</h5>
            <button data-modal-close=\"addAccountabilityRecords\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 3775
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_new_accountability_record");
        yield "\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <input type=\"hidden\" name=\"emp_record_id\" value=\"";
        // line 3778
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["employee_id"] ?? null), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"empCode\" value=\"";
        // line 3779
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 3779), "html", null, true);
        yield "\">
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"date_start\" class=\"inline-block mb-2 text-base font-medium\">Item Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" name=\"item_name\" id=\"item_name\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"reason\" class=\"inline-block mb-2 text-base font-medium\">Item Count</label>
                    <input type=\"number\" min=\"0\" name=\"item_count\" id=\"add_item_count\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" required>
                </div>

                <div class=\"xl:col-span-12\">
                    <label for=\"reason\" class=\"inline-block mb-2 text-base font-medium\">Status</label>
                    <select id=\"acc_records_status\" name=\"acc_records_status\" class=\"form-input\">     
                        <option value=\"0\">Assigned</option>
                        <option value=\"1\">Returned</option>
                        <option value=\"2\">Lost</option>
                    </select>
                </div>
            </div>
        </div>
        <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
            <button type=\"reset\" data-modal-close=\"addAccountabilityRecords\" class=\"text-red-500 bg-white btn\">Cancel</button>
            <button type=\"submit\" class=\"text-white btn bg-custom-500\">Add Record</button>
        </div>
    </form>
    </div>
</div><!--end add user-->

";
        // line 3811
        if ((($context["accountability_records"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["accountability_records"] ?? null)) > 0))) {
            // line 3812
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["accountability_records"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["accountability_item"]) {
                // line 3813
                yield "        ";
                // line 3814
                yield "        <div id=\"editAccountabilityRecords";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accountability_item"], "id", [], "any", false, false, false, 3814), "html", null, true);
                yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
            <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
                <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
                    <h5 class=\"text-16\">Edit Accountability Records</h5>
                    <button data-modal-close=\"editAccountabilityRecords";
                // line 3818
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accountability_item"], "id", [], "any", false, false, false, 3818), "html", null, true);
                yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                </div>
                <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                    <form action=\"";
                // line 3821
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_accountability_record");
                yield "\" method=\"post\">
                    <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                        <div class=\"xl:col-span-12\">
                            <input type=\"hidden\" name=\"emp_record_id\" value=\"";
                // line 3824
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["employee_id"] ?? null), "html", null, true);
                yield "\">
                            <input type=\"hidden\" name=\"empCode\" value=\"";
                // line 3825
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["employeeData"] ?? null), "employee_code", [], "any", false, false, false, 3825), "html", null, true);
                yield "\">
                            <input type=\"hidden\" name=\"acc_record_id\" value=\"";
                // line 3826
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accountability_item"], "id", [], "any", false, false, false, 3826), "html", null, true);
                yield "\">
                        </div>

                        <div class=\"xl:col-span-12\">
                            <label for=\"date_start\" class=\"inline-block mb-2 text-base font-medium\">Item Name</label>
                            <span class=\"text-red-500\">*</span>
                            <input type=\"text\" name=\"item_name\" id=\"item_name\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 3832
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accountability_item"], "item_name", [], "any", false, false, false, 3832), "html", null, true);
                yield "\" required>
                        </div>

                        <div class=\"xl:col-span-12\">
                            <label for=\"reason\" class=\"inline-block mb-2 text-base font-medium\">Item Count</label>
                            <input type=\"number\" min=\"0\" name=\"item_count\" id=\"item_count\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
                // line 3837
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accountability_item"], "item_count", [], "any", false, false, false, 3837), "html", null, true);
                yield "\" required>
                        </div>

                        <div class=\"xl:col-span-12\">
                            <label for=\"acc_records_status\" class=\"inline-block mb-2 text-base font-medium\">Status</label>
                            <select id=\"acc_records_status\" name=\"acc_records_status\" class=\"form-input\">
                                <option value=\"0\" ";
                // line 3843
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["accountability_item"], "status", [], "any", false, false, false, 3843) == 0)) {
                    yield "selected";
                }
                yield ">Assigned</option>
                                <option value=\"1\" ";
                // line 3844
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["accountability_item"], "status", [], "any", false, false, false, 3844) == 1)) {
                    yield "selected";
                }
                yield ">Returned</option>
                                <option value=\"2\" ";
                // line 3845
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["accountability_item"], "status", [], "any", false, false, false, 3845) == 2)) {
                    yield "selected";
                }
                yield ">Lost</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div class=\"flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                    <button type=\"reset\" data-modal-close=\"editAccountabilityRecords";
                // line 3852
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accountability_item"], "id", [], "any", false, false, false, 3852), "html", null, true);
                yield "\" class=\"text-red-500 bg-white btn\">Cancel</button>
                    <button type=\"submit\" class=\"text-white btn bg-custom-500\">Update Record</button>
                </div>
            </form>
            </div>
        </div><!--end add user-->
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accountability_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 3860
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3863
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 3864
        yield "
<!-- apexcharts js -->
<script src=\"";
        // line 3866
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/apexcharts/apexcharts.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 3868
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/dropzone/dropzone-min.js"), "html", null, true);
        yield "\"></script>
";
        // line 3870
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/pages-account-setting.init.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 3871
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/pages-employee-profile.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
<script src=\"";
        // line 3874
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>

<script>

</script>

<script>
\$(document).ready(function () {
    console.log('Initializing hyphen prevention for number inputs');
    
    // Prevent hyphen from being typed in number inputs
    \$(document).on('keydown', 'input[type=\"number\"]', function(e) {
        // Prevent hyphen key (both main keyboard and numpad)
        if (e.key === '-' || e.keyCode === 189 || e.keyCode === 109) {
            console.log('Blocked hyphen key in number input');
            e.preventDefault();
            return false;
        }
    });
    
    // Clean any existing hyphens (for pasted content or initial values)
    function cleanAllNumberInputs() {
        \$('input[type=\"number\"]').each(function() {
            const \$input = \$(this);
            const value = \$input.val();
            
            // Check direct DOM value for hyphen
            const rawValue = this.value;
            console.log('Checking input:', this, 'jQuery value:', value, 'Raw DOM value:', rawValue);
            
            if (rawValue && rawValue.indexOf('-') !== -1) {
                const cleanedValue = rawValue.replace(/-/g, '');
                \$input.val(cleanedValue);
                console.log('Cleaned hyphen, new value:', cleanedValue);
            }
        });
    }
    
    // Run on page load
    cleanAllNumberInputs();
    
    // Handle paste events separately
    \$(document).on('paste', 'input[type=\"number\"]', function() {
        const \$input = \$(this);
        // Use setTimeout to let the paste complete
        setTimeout(function() {
            const value = \$input.val();
            if (value && value.indexOf('-') !== -1) {
                \$input.val(value.replace(/-/g, ''));
            }
        }, 10);
    });
    
    // Check modal opening
    \$(document).on('click', '[data-modal-target], [data-modal-toggle]', function() {
        setTimeout(cleanAllNumberInputs, 100);
    });
    
    // For your specific modal
    \$(document).on('click', '[data-modal-close=\"addAccountabilityRecords\"]', function() {
        setTimeout(cleanAllNumberInputs, 100);
    });

    function clearInputs(form) {
        \$(form).find('input').not(':input[type=button], :input[type=submit], :input[type=reset], select').val('');
    }

    // Event listener for the \"Cancel\" button
    \$('[data-modal-close=\"addDocuments\"]').click(function () {
        clearInputs('#file-upload-form');
    });

    \$('.assignButton').click( function(event) {
        event.preventDefault(); // Prevent default anchor click behavior
        
        
        var projId = \$(this).data('proj-id'); // Get project ID from button data attributes
        var empId = \$(this).data('emp-id'); // Get project ID from button data attributes
        var data = {
            proj_id: projId, // Fetch project ID dynamically
            employee_id: [\$(this).data('emp-id')] // Fetch employee IDs dynamically
        };
        console.log(data);
        //var \$button = \$('#assignButton'+projId); // Store reference to the clicked button
        var button = \$(this)
        var unassignButton = \$('.unassignButton[data-proj-id=\"' + projId + '\"][data-emp-id=\"' + empId + '\"]'); // Find the corresponding \"Unassign\" button
        // AJAX request
        \$.ajax({
            url: '/form/add-employee',
            type: 'POST',
            data: data,
            success: function(response) {
                // Handle success
                // alert('Employees successfully assigned!');
                // console.log(response);

                // Hide the specific button that was clicked
                button.hide(); // Hides the button that triggered the click event
                unassignButton.show(); 
                // Update the <h6> element
                \$('#assignment' + projId).find('a').text('Assigned').removeClass('text-red-500').addClass('text-green-500');
            },
            error: function(xhr, status, error) {
                // Handle error
                // alert('An error occurred: ' + error);
                console.log(xhr.responseText);
            }
        });
    });

    \$('.unassignButton').click(function(event) {
        event.preventDefault(); // Prevent default anchor click behavior
        
        
        var projId = \$(this).data('proj-id'); // Get project ID from button data attributes
        var empId = \$(this).data('emp-id');
        var data = {
            proj_id: projId, // Fetch project ID dynamically
            employee_id: [\$(this).data('emp-id')] // Fetch employee IDs dynamically
        };
        console.log(data);
        //var \$button = \$('#assignButton'+projId); // Store reference to the clicked button
        var button = \$(this);
        var assignButton = \$('.assignButton[data-proj-id=\"' + projId + '\"][data-emp-id=\"' + empId + '\"]'); // Find the corresponding \"Unassign\" button
        // AJAX request
        \$.ajax({
            url: '/form/unassign-employee',
            type: 'POST',
            data: data,
            success: function(response) {
                // Handle success
                // alert('Employees successfully assigned!');
                // console.log(response);

                // Hide the specific button that was clicked
                button.hide(); // Hides the button that triggered the click event
                assignButton.show(); 
                // Update the <h6> element
                \$('#assignment' + projId).find('a').text('Unassigned').removeClass('text-green-500').addClass('');
            },
            error: function(xhr, status, error) {
                // Handle error
                // alert('An error occurred: ' + error);
                console.log(xhr.responseText);
            }
        });
    });
    /*
    // Function to format input with commas
    function formatInputWithCommas(input) {
        let value = input.value.replace(/,/g, ''); // Remove any existing commas
        if (!isNaN(value) && value !== '') {
            let parts = value.split('.'); // Split into whole number and decimal parts
            parts[0] = parseFloat(parts[0]).toLocaleString(); // Format the whole number part with commas
            input.value = parts.join('.'); // Rejoin the whole number and decimal parts
        }
    }

    // Real-time formatting when typing
    document.querySelectorAll('.input-float').forEach(function(input) {
        input.addEventListener('input', function() {
            formatInputWithCommas(this);
        });
    });

    // Trigger formatting when \"editPayrollButton\" is clicked
    document.getElementById('editPayrollButton').addEventListener('click', function() {
        document.querySelectorAll('.input-float').forEach(function(input) {
            formatInputWithCommas(input); // Apply formatting to all inputs with the class 'input-float'
        });
    });
    */
    
    // Initially hide all divs with the class 'salary-adjustment-inputs'
    \$('.salary-adjustment-inputs').hide();

    // Listen for changes on the salary adjustment checkbox
    \$('#salary_adjustment').on('change', function() {
        if (\$(this).is(':checked')) {
            // Show the divs when the checkbox is checked
            \$('.salary-adjustment-inputs').slideDown();
        } else {
            // Hide the divs when the checkbox is unchecked
            \$('.salary-adjustment-inputs').slideUp();
        }
    });

    //Trigger populateCutoffOptions when this value change
    \$('#year_selector').change(function() {
        populateCutOffOptions();
    });

});

document.addEventListener('DOMContentLoaded', function () {
    const otHoursInput = document.getElementById('ot_hours');
    
    if (otHoursInput) {
        otHoursInput.addEventListener('input', function () {
            const maxOvertime = parseInt(this.dataset.maxOvertime, 10); // Get the maximum overtime allowed
            const enteredMinutes = convertTimeToMinutes(this.value); // Convert HH:mm to total minutes
            
            if (enteredMinutes > maxOvertime) {
                this.setCustomValidity(`Overtime cannot exceed \${maxOvertime} minutes.`);
            } else {
                this.setCustomValidity('');
            }
        });
    }
});

async function updateSalaryAdjustmentUI(payroll_id) {
    // Retrieve values from the form using jQuery
    var payroll_employee_id_element = \$(\"#payroll_employee_id\" + payroll_id);
    if (payroll_employee_id_element.length) {
        var payroll_employee_id = payroll_employee_id_element.val();
    } else {
        console.error(\"Element with ID #payroll_employee_id\" + payroll_id + \" not found.\");
        return;
    }

    var salaryAdjustmentData = {
        \"employee_id\"                        : payroll_employee_id,
        \"payroll_id\"                         : payroll_id,
        \"salary_adjustment\"                  : true,
        \"sal_adj_regular_ndot_hours\"         : \$(\"#sal_adj_regular_ndot_hours\"+payroll_id).val() || 0,
        \"sal_adj_regular_ndot_pay\"           : \$(\"#sal_adj_regular_ndot_pay\"+payroll_id).val() || 0,
        \"sal_adj_ot_meal_subsidy_days\"       : \$(\"#sal_adj_ot_meal_subsidy_days\"+payroll_id).val() || 0,
        \"sal_adj_ot_meal_subsidy_amount\"     : \$(\"#sal_adj_ot_meal_subsidy_amount\"+payroll_id).val() || 0,
        \"sal_adj_4hrs_more_weekend_holiday\"  : \$(\"#sal_adj_4hrs_more_weekend_holiday\"+payroll_id).val() || 0,
        \"sal_adj_amount\"                     : \$(\"#sal_adj_amount\"+payroll_id).val() || 0,
        \"sal_adj_temp_allowance\"             : \$(\"#sal_adj_temp_allowance\"+payroll_id).val() || 0,
        \"sal_adj_wellness\"                   : \$(\"#sal_adj_wellness\"+payroll_id).val() || 0,
        \"sal_adj_total_nontax_salary\"        : \$(\"#sal_adj_total_nontax_salary\"+payroll_id).val() || 0,
        \"sal_adj_total_tax_salary\"           : \$(\"#sal_adj_total_tax_salary\"+payroll_id).val() || 0,
        \"sal_adj_total_salary\"               : \$(\"#sal_adj_total_salary\"+payroll_id).val() || 0,
    };

    // Logging employee and payroll ID
    console.log(\"Employee ID:\", payroll_employee_id);
    console.log(\"Payroll ID:\", payroll_id);

    // Logging payload data
    console.log(\"Payload Data:\", salaryAdjustmentData);

    try {
        var payroll_preview = await apiCall('POST', 'api/view-salary-adjustment', salaryAdjustmentData);
        // Log API response
        console.log(\"API Response:\", payroll_preview);
        console.log(\"API Response:\", payroll_preview.data.total_salary);

        \$(`#comp_sal_adj_regular_ndot_hours_preview\${payroll_id}`).text(\"₱ \" + payroll_preview.data.total_salary || 0);
        \$(`#comp_sal_adj_regular_ndot_pay_preview\${payroll_id}`).text(\"₱ \" + payroll_preview.data.total_deduction || 0);
        \$(`#comp_sal_adj_ot_meal_subsidy_days_preview\${payroll_id}`).text(\"₱ \" + payroll_preview.data.net_salary || 0);

    } catch (error) {
        // Log error if the API call fails
        console.error(\"Error occurred during API call:\", error);
    }
}

function convertTimeToMinutes(time) {
    const [hours, minutes] = time.split(':').map(Number);
    return (hours * 60) + minutes;
}


function formatDateText(date) {
    const options = { year: 'numeric', month: 'short', day: 'numeric' };
    const formattedDate = new Intl.DateTimeFormat('en-US', options).format(date);
    return formattedDate;
}

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

function populateCutOffOptions() {
    let select = document.getElementById('cut_off_dd');
    let today = new Date();
    let year = \$('#year_selector').val();
    let currentMonth = today.getMonth() + 1;
    let currentDay = today.getDate();

    // Clear existing options
    select.innerHTML = '';

    // Determine the limit for the month loop based on the selected year
    let monthLimit = (year == today.getFullYear()) ? currentMonth : 12;

    // Loop through each month of the selected year
    for (let month = 1; month <= monthLimit; month++) {
        let ranges = getSemiMonthlyRanges(year, month);

        // Create options for the first half of the month
        let firstHalfOption = document.createElement('option');
        let firstHalfStart = new Date(ranges.firstHalf.start);
        let firstHalfEnd = new Date(ranges.firstHalf.end);
        firstHalfOption.value = `\${formatDateText(firstHalfStart)} - \${formatDateText(firstHalfEnd)}`;
        firstHalfOption.text = `\${formatDateText(firstHalfStart)} - \${formatDateText(firstHalfEnd)}`;
        select.appendChild(firstHalfOption);

        // Create options for the second half of the month
        let secondHalfOption = document.createElement('option');
        let secondHalfStart = new Date(ranges.secondHalf.start);
        let secondHalfEnd = new Date(ranges.secondHalf.end);
        secondHalfOption.value = `\${formatDateText(secondHalfStart)} - \${formatDateText(secondHalfEnd)}`;
        secondHalfOption.text = `\${formatDateText(secondHalfStart)} - \${formatDateText(secondHalfEnd)}`;
        select.appendChild(secondHalfOption);

        // Check if current date falls within the range of this option
        if (year == today.getFullYear()) {
            if (today >= firstHalfStart && today <= firstHalfEnd && currentDay <= 15) {
            firstHalfOption.selected = true;
            } else if (today >= secondHalfStart && today <= secondHalfEnd && currentDay > 15) {
            secondHalfOption.selected = true;
            }
        }
    }
}

function getCurrentHalfRange() {
    // Get the selected value from the dropdown
    let selectDate = \$('#cut_off_dd').val();
    console.log('selected date '+ selectDate)
    // Split the selected date range into start and end dates
    let dates = selectDate.split(' - ');
    let startDate = new Date(dates[0].trim());
    let endDate = new Date(dates[1].trim());

    // Extract year and month from the start date
    let year = startDate.getFullYear();
    let month = startDate.getMonth() + 1; // Months are zero indexed, so +1 to get the current month

    // Get semi-monthly ranges for the selected month
    let ranges = getSemiMonthlyRanges(year, month);

    // Determine the current half based on the end date of the selected range
    let day = endDate.getDate();
    if (day <= 15) {
        return { half: 'firstHalf', range: ranges.firstHalf };
    } else {
        return { half: 'secondHalf', range: ranges.secondHalf };
    }
}

function triggerModal(workerLogsId, overtimeMinutes) {
    // Get the modal element
    const modalElement = document.getElementById('addOvertimeRequest');
    if (!modalElement) {
        console.error(\"Modal element with ID 'addOvertimeRequest' not found in the DOM.\");
        return;
    }

    // Set the worker_logs_id hidden input
    const hiddenInput = modalElement.querySelector('input[name=\"worker_logs_id\"]');
    if (!hiddenInput) {
        console.error(\"Hidden input with name 'worker_logs_id' not found inside the modal.\");
        return;
    }
    hiddenInput.value = workerLogsId;

    // Set the maximum overtime allowed as a data attribute on the ot_hours input
    const otHoursInput = modalElement.querySelector('input[name=\"ot_hours\"]');
    if (!otHoursInput) {
        console.error(\"Input with name 'ot_hours' not found inside the modal.\");
        return;
    }
    otHoursInput.dataset.maxOvertime = overtimeMinutes;

    // Reset input value
    otHoursInput.value = '';

    // Show the modal (assuming you have a modal display function)
    modalElement.classList.remove('hidden');
}



// Function to populate worker logs into the dynamically created tbody
function populateWorkerLogs(workerLogs) {
    let tableBody = document.getElementById(\"worker_logs\");

    // Clear any existing rows
    tableBody.innerHTML = \"\";

    workerLogs.forEach(log => {
        let row = document.createElement(\"tr\");
        row.classList.add(\"relative\", \"rounded-md\");

        let overtimeStatus = \"\";

        if (!log.overtime) {
            overtimeStatus = \"No overtime\";
        } else if (log.overtime_approved === null) {
            overtimeStatus = \"Pending\";
        } else if (log.overtime_approved === 0) {
            overtimeStatus = \"Rejected\";
        } else if (log.overtime_approved === 1) {
            overtimeStatus = \"Approved\";
        }

        row.innerHTML = `
            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 worker_logs_date\">\${formatDate(log.loginDate)}</td>
            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 reason\">\${formatTime(log.loginDate)}</td>
            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 status\">\${formatTime(log.logoutDate)}</td>
            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">\${convertMinutesToHours(log.rendered_hours)}</td>
            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">\${convertMinutesToHours(log.undertime)}</td>
            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">\${convertMinutesToHours(log.overtime)}</td>
            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">\${overtimeStatus}</td>
        `;

        // Add the dropdown if overtime exists
        if (!log.overtime) {
            const actionCell = `
                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 Action\">
                    <div class=\"flex gap-3\">
                        <button onclick=\"triggerModal(\${log.id}, \${log.overtime || 0})\" data-modal-target=\"addOvertimeRequest\" class=\"open-modal flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 text-slate-500 hover:text-custom-500 hover:bg-custom-100 dark:bg-zink-600 dark:text-zink-200 dark:hover:bg-custom-500/20 dark:hover:text-custom-500\">
                            <i data-lucide=\"file\" class=\"inline-block size-3\"></i>
                        </button>
                    </div>
                </td>
            `;
            row.innerHTML += actionCell;
        }

        refreshCallBack();
        tableBody.appendChild(row);
    });
}



// Utility functions
function formatDate(dateStr) {
    let date = new Date(dateStr);
    return date.toLocaleDateString(); // Customize as needed
}

function formatTime(dateStr) {
    let date = new Date(dateStr);
    return date.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
}

function convertMinutesToHours(minutes) {
    let hours = Math.floor(minutes / 60);
    let mins = minutes % 60;
    return `\${hours} hour(s) and \${mins} min(s)`;
}

// Clear the table when no logs are available
function clearWorkerLogsTable() {
    let tableBody = document.getElementById(\"worker_logs\");
    tableBody.innerHTML = `<tr><td colspan=\"8\" class=\"text-center\">No worker logs available</td></tr>`;
}

async function findDTR() {
    // Safe validation for worker_id
    const workerId = ";
        // line 4362
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("worker_id", $context)) ? (Twig\Extension\CoreExtension::default(($context["worker_id"] ?? null), "null")) : ("null")), "html", null, true);
        yield ";
    
    if (!workerId || workerId === 'null') {
        console.error(\"Worker ID is missing or invalid\");
        return;
    }

    // Get the current cutoff range
    let currentHalf = getCurrentHalfRange();
    let jsonObjectDate = {
        \"start_date\": currentHalf.range.start,
        \"end_date\": currentHalf.range.end
    };

    try {
        // Call the API and fetch worker logs
        let response = await apiCall('POST', 'api/worker/' + workerId, jsonObjectDate);

        console.log('API Call Response:', response);

        // Ensure the response contains worker_logs
        if (response && response.worker_logs && Array.isArray(response.worker_logs)) {
            if (response.worker_logs.length > 0) {
                // Populate the table if logs are available
                populateWorkerLogs(response.worker_logs);
                // refreshCallBack();
                lucide.createIcons();
            } else {
                console.log(\"No worker logs found.\");
                clearWorkerLogsTable(); // Optional: Clear table if no data
            }
        } else {
            console.error(\"Unexpected response format:\", response);
        }
    } catch (error) {
        console.error(\"Error fetching worker logs:\", error);
    }
}

function refreshCallBack() {
    //console.log('refresh')
    var dropdownElem = document.querySelectorAll('.dropdown');
    var dropupElem = document.querySelectorAll('.dropup');
    var dropStartElem = document.querySelectorAll('.dropstart');
    var dropendElem = document.querySelectorAll('.dropend');
    var isShowDropMenu = false;
    var isMenuInside = false;

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
                openDrawerId    = elementId;
                openModalId     = elementId;
            } else {
                openDrawerId    = null;
                openModalId     = null;
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

populateCutOffOptions()
findDTR()
</script>

";
        // line 4512
        yield ((array_key_exists("javascriptSnippet", $context)) ? (Twig\Extension\CoreExtension::default(($context["javascriptSnippet"] ?? null), "")) : (""));
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "employee_profile/apps-employee-profile.html.twig";
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
        return array (  5356 => 4512,  5203 => 4362,  4712 => 3874,  4706 => 3871,  4701 => 3870,  4697 => 3868,  4692 => 3866,  4688 => 3864,  4681 => 3863,  4672 => 3860,  4658 => 3852,  4646 => 3845,  4640 => 3844,  4634 => 3843,  4625 => 3837,  4617 => 3832,  4608 => 3826,  4604 => 3825,  4600 => 3824,  4594 => 3821,  4588 => 3818,  4580 => 3814,  4578 => 3813,  4573 => 3812,  4571 => 3811,  4536 => 3779,  4532 => 3778,  4526 => 3775,  4517 => 3768,  4490 => 3743,  4486 => 3742,  4480 => 3739,  4471 => 3732,  4468 => 3730,  4454 => 3722,  4446 => 3717,  4438 => 3712,  4429 => 3706,  4425 => 3705,  4421 => 3704,  4415 => 3701,  4409 => 3698,  4401 => 3694,  4397 => 3693,  4395 => 3692,  4350 => 3649,  4339 => 3647,  4335 => 3646,  4325 => 3639,  4321 => 3638,  4315 => 3635,  4292 => 3615,  4283 => 3608,  4269 => 3600,  4265 => 3598,  4261 => 3593,  4252 => 3536,  4248 => 3535,  4242 => 3532,  4238 => 3531,  4232 => 3528,  4228 => 3527,  4216 => 3518,  4209 => 3514,  4202 => 3510,  4186 => 3499,  4177 => 3495,  4168 => 3491,  4159 => 3487,  4150 => 3483,  4141 => 3479,  4132 => 3475,  4123 => 3471,  4112 => 3465,  4103 => 3461,  4094 => 3457,  4085 => 3453,  4075 => 3445,  4071 => 3436,  4061 => 3429,  4055 => 3428,  4047 => 3427,  4043 => 3426,  4037 => 3423,  4029 => 3419,  4025 => 3418,  3945 => 3341,  3941 => 3340,  3937 => 3339,  3928 => 3332,  3918 => 3279,  3913 => 3261,  3906 => 3257,  3899 => 3253,  3892 => 3249,  3886 => 3246,  3882 => 3245,  3878 => 3244,  3869 => 3237,  3853 => 3222,  3836 => 3204,  3832 => 3203,  3773 => 3146,  3769 => 3141,  3763 => 3136,  3759 => 3131,  3755 => 3129,  3724 => 3101,  3701 => 3080,  3695 => 3074,  3620 => 3003,  3616 => 3000,  3603 => 2990,  3598 => 2989,  3587 => 2979,  3579 => 2972,  3576 => 2971,  3563 => 2964,  3554 => 2958,  3550 => 2957,  3546 => 2956,  3543 => 2955,  3538 => 2954,  3536 => 2953,  3524 => 2943,  3522 => 2938,  3503 => 2921,  3495 => 2882,  3486 => 2874,  3483 => 2873,  3473 => 2868,  3468 => 2863,  3459 => 2857,  3455 => 2856,  3447 => 2854,  3444 => 2853,  3441 => 2852,  3438 => 2851,  3433 => 2848,  3429 => 2847,  3426 => 2846,  3421 => 2845,  3418 => 2844,  3404 => 2831,  3402 => 2826,  3396 => 2822,  3379 => 2794,  3371 => 2755,  3363 => 2748,  3347 => 2715,  3345 => 2710,  3333 => 2700,  3322 => 2698,  3318 => 2697,  3296 => 2677,  3288 => 2638,  3280 => 2631,  3273 => 2629,  3269 => 2615,  3265 => 2614,  3261 => 2613,  3257 => 2612,  3251 => 2611,  3247 => 2610,  3244 => 2609,  3239 => 2608,  3234 => 2604,  3223 => 2594,  3221 => 2589,  3215 => 2585,  3196 => 2555,  3194 => 2531,  3191 => 2530,  3182 => 2527,  3178 => 2526,  3175 => 2525,  3170 => 2524,  3167 => 2523,  3144 => 2496,  3135 => 2493,  3131 => 2492,  3127 => 2491,  3122 => 2490,  3118 => 2486,  3115 => 2485,  3111 => 2484,  3102 => 2477,  3087 => 2463,  3079 => 2456,  3071 => 2453,  3065 => 2451,  3061 => 2449,  3059 => 2448,  3056 => 2447,  3054 => 2446,  3051 => 2445,  3049 => 2444,  3044 => 2442,  3040 => 2441,  3036 => 2440,  3031 => 2438,  3026 => 2436,  3023 => 2435,  3019 => 2434,  2996 => 2413,  2988 => 2406,  2980 => 2403,  2974 => 2401,  2970 => 2399,  2968 => 2398,  2965 => 2397,  2963 => 2396,  2958 => 2394,  2954 => 2393,  2950 => 2392,  2945 => 2390,  2940 => 2388,  2937 => 2387,  2933 => 2386,  2910 => 2365,  2902 => 2358,  2883 => 2345,  2879 => 2344,  2873 => 2341,  2867 => 2338,  2861 => 2335,  2857 => 2334,  2853 => 2333,  2849 => 2332,  2845 => 2331,  2841 => 2330,  2837 => 2329,  2830 => 2327,  2825 => 2325,  2822 => 2324,  2817 => 2323,  2790 => 2297,  2773 => 2281,  2747 => 2252,  2743 => 2250,  2733 => 2246,  2723 => 2241,  2717 => 2240,  2710 => 2236,  2704 => 2233,  2700 => 2231,  2695 => 2228,  2689 => 2226,  2686 => 2220,  2682 => 2219,  2679 => 2218,  2677 => 2217,  2627 => 2169,  2610 => 2153,  2579 => 2119,  2575 => 2117,  2563 => 2111,  2559 => 2110,  2555 => 2109,  2544 => 2103,  2538 => 2102,  2531 => 2098,  2525 => 2095,  2521 => 2093,  2516 => 2090,  2510 => 2088,  2507 => 2082,  2503 => 2081,  2500 => 2080,  2498 => 2079,  2448 => 2031,  2431 => 2015,  2401 => 1981,  2397 => 1979,  2382 => 1972,  2376 => 1971,  2373 => 1970,  2363 => 1964,  2357 => 1963,  2350 => 1959,  2344 => 1956,  2340 => 1954,  2335 => 1951,  2329 => 1949,  2326 => 1943,  2322 => 1942,  2319 => 1941,  2317 => 1940,  2267 => 1892,  2263 => 1889,  2261 => 1853,  2249 => 1843,  2242 => 1839,  2235 => 1835,  2231 => 1833,  2209 => 1813,  2202 => 1809,  2195 => 1805,  2188 => 1801,  2174 => 1789,  2170 => 1786,  2168 => 1729,  2164 => 1726,  2162 => 1639,  2146 => 1625,  2139 => 1621,  2135 => 1620,  2125 => 1613,  2118 => 1609,  2114 => 1608,  2104 => 1601,  2097 => 1597,  2093 => 1596,  2068 => 1574,  2061 => 1572,  2053 => 1567,  2046 => 1565,  2042 => 1563,  2036 => 1553,  2029 => 1551,  2021 => 1546,  2014 => 1544,  2006 => 1539,  1999 => 1537,  1991 => 1532,  1984 => 1530,  1976 => 1525,  1969 => 1523,  1942 => 1498,  1939 => 1496,  1935 => 1493,  1933 => 1490,  1928 => 1484,  1925 => 1482,  1921 => 1443,  1913 => 1440,  1908 => 1425,  1904 => 1424,  1895 => 1417,  1886 => 1412,  1876 => 1409,  1873 => 1408,  1868 => 1403,  1862 => 1399,  1859 => 1398,  1856 => 1397,  1853 => 1396,  1850 => 1395,  1847 => 1394,  1844 => 1393,  1842 => 1392,  1838 => 1390,  1832 => 1388,  1826 => 1386,  1823 => 1385,  1817 => 1380,  1812 => 1379,  1808 => 1376,  1802 => 1369,  1797 => 1335,  1784 => 1329,  1778 => 1324,  1774 => 1323,  1770 => 1322,  1766 => 1321,  1761 => 1319,  1756 => 1317,  1752 => 1316,  1749 => 1315,  1745 => 1314,  1721 => 1292,  1706 => 1194,  1682 => 1172,  1678 => 1170,  1668 => 1166,  1662 => 1163,  1656 => 1160,  1650 => 1157,  1641 => 1150,  1637 => 1149,  1634 => 1148,  1632 => 1147,  1574 => 1091,  1550 => 1069,  1546 => 1067,  1536 => 1063,  1530 => 1060,  1524 => 1057,  1518 => 1054,  1509 => 1047,  1505 => 1046,  1502 => 1045,  1500 => 1044,  1441 => 987,  1420 => 968,  1416 => 966,  1406 => 962,  1400 => 959,  1394 => 956,  1385 => 949,  1381 => 948,  1378 => 947,  1376 => 946,  1354 => 926,  1333 => 907,  1329 => 905,  1319 => 901,  1313 => 898,  1307 => 895,  1298 => 888,  1294 => 887,  1291 => 886,  1289 => 885,  1267 => 865,  1246 => 846,  1242 => 844,  1232 => 840,  1226 => 837,  1220 => 834,  1211 => 827,  1207 => 826,  1204 => 825,  1202 => 824,  1144 => 768,  1123 => 749,  1119 => 747,  1109 => 743,  1103 => 740,  1097 => 737,  1088 => 730,  1084 => 729,  1081 => 728,  1079 => 727,  1057 => 707,  1039 => 691,  1035 => 689,  1025 => 685,  1019 => 682,  1010 => 675,  1006 => 674,  1003 => 673,  1001 => 672,  981 => 654,  957 => 632,  953 => 630,  943 => 626,  937 => 623,  931 => 620,  925 => 617,  916 => 610,  912 => 609,  909 => 608,  907 => 607,  849 => 551,  801 => 505,  797 => 503,  786 => 498,  779 => 494,  772 => 490,  765 => 486,  756 => 480,  749 => 476,  742 => 472,  735 => 468,  724 => 459,  720 => 458,  717 => 457,  715 => 456,  675 => 419,  668 => 415,  661 => 411,  648 => 401,  639 => 395,  632 => 391,  621 => 382,  603 => 366,  599 => 364,  589 => 360,  583 => 357,  574 => 350,  570 => 349,  567 => 348,  565 => 347,  548 => 333,  541 => 329,  534 => 325,  527 => 321,  518 => 315,  511 => 311,  504 => 307,  495 => 301,  488 => 297,  481 => 293,  455 => 272,  425 => 245,  415 => 238,  405 => 231,  395 => 224,  385 => 217,  371 => 206,  361 => 199,  351 => 192,  341 => 185,  331 => 178,  293 => 143,  288 => 140,  284 => 138,  278 => 136,  276 => 135,  269 => 131,  262 => 127,  255 => 123,  248 => 119,  241 => 115,  208 => 84,  202 => 80,  200 => 79,  186 => 67,  184 => 66,  178 => 62,  176 => 61,  168 => 55,  159 => 49,  148 => 41,  141 => 37,  134 => 33,  124 => 30,  114 => 25,  108 => 24,  102 => 23,  93 => 16,  89 => 14,  76 => 5,  69 => 4,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "employee_profile/apps-employee-profile.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\employee_profile\\apps-employee-profile.html.twig");
    }
}
