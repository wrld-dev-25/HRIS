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

/* holiday/apps-holiday.html.twig */
class __TwigTemplate_91a25b313481762e1baee03ba80de7e0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "holiday/apps-holiday.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "holiday/apps-holiday.html.twig"));

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

        yield "Holidays";
        
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
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Holidays", "title" => ""]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Holidays Configuration</h6>
                                <div>
                                    <ul class=\"flex flex-wrap w-full text-sm font-medium text-center border-b border-slate-200 dark:border-zink-500 nav-tabs\">
                                        ";
        // line 21
        yield "                                        <li class=\"group active\">
                                            <a href=\"javascript:void(0);\" data-tab-toggle data-target=\"standardHolidays\" class=\"inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-custom-500 -mb-[1px]\">Standard Holidays</a>
                                        </li>
                                        <li class=\"group\">
                                            <a href=\"javascript:void(0);\" data-tab-toggle data-target=\"yearlyConfiguration\" class=\"inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-custom-500 -mb-[1px]\">Yearly Configuration</a>
                                        </li>
                                    </ul>
                        
                                    <div class=\"mt-5 tab-content\">
                                        <div class=\"block tab-pane\" id=\"standardHolidays\">
                                            <div class=\"card\" id=\"holidaysTable\">
                                                <div class=\"card-body\">
                                                    <div class=\"flex items-center\">
                                                        <h6 class=\"text-15 grow\">Standard Holidays List</h6>
                                                        <div class=\"shrink-0\">
                                                            <button data-modal-target=\"addHolidayConfig\" type=\"button\" class=\"add-holiday_config text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Add Holiday</span></button>
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
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold name\" data-sort=\"name\">Holiday</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold date\" data-sort=\"date\">Date</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold multiplierRegular\" data-sort=\"multiplierRegular\">Multiplier (Regular)</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold multiplierOt\" data-sort=\"multiplierOt\">Multiplier (OT)</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class=\"list\">
                                                            ";
        // line 64
        yield "                                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["standardHolidays"]) || array_key_exists("standardHolidays", $context) ? $context["standardHolidays"] : (function () { throw new RuntimeError('Variable "standardHolidays" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["standard"]) {
            // line 65
            yield "                                                                        <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 name\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "name", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 date\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "date", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 multiplierRegular\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "multiplier_regular", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 multiplierOt\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "multiplier_overtime", [], "any", false, false, false, 69), "html", null, true);
            yield "</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                                                <div class=\"action-holiday_config relative dropdown\">
                                                                                    <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                                    <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                                        <li>
                                                                                            <a data-modal-target=\"editHolidayConfig";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "id", [], "any", false, false, false, 75), "html", null, true);
            yield "\" class=\"edit-holiday_config block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a data-modal-target=\"deleteHolidayConfig";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "id", [], "any", false, false, false, 78), "html", null, true);
            yield "\" class=\"delete-holiday_config block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['standard'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                                                            </tbody>
                                                        </table>
                                                        <div class=\"noresult\" style=\"display: none\">
                                                            <div class=\"py-6 text-center\">
                                                                <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                                                <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                                                ";
        // line 92
        yield "                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end card-->
                                        </div>
                                        <div class=\"hidden tab-pane\" id=\"yearlyConfiguration\">
                                            <div class=\"card\" id=\"yearlyTable\">
                                                <div class=\"card-body\">
                                                    <div class=\"flex items-center\">
                                                        <h6 class=\"text-15 grow\">Standard Holidays Adjustment List</h6>
                                                        <div class=\"shrink-0\">
                                                            <button data-modal-target=\"bulkAddHolidays\" type=\"button\" class=\"add-holiday_config text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Bulk Add Holidays</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                                    <form action=\"#!\">
                                                        ";
        // line 123
        yield "                                                    </form>
                                                </div>
                                                <div class=\"card-body\">
                                                    <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                                        <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                                            <thead class=\"text-left\">
                                                                <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold name\" data-sort=\"name\">Holiday</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold date\" data-sort=\"date\">Date</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold multiplierRegular\" data-sort=\"multiplierRegular\">Multiplier (Regular)</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold multiplierOt\" data-sort=\"multiplierOt\">Multiplier (OT)</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class=\"list\">
                                                            ";
        // line 139
        yield "                                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["yearlyConfiguration"]) || array_key_exists("yearlyConfiguration", $context) ? $context["yearlyConfiguration"] : (function () { throw new RuntimeError('Variable "yearlyConfiguration" does not exist.', 139, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["yearly"]) {
            // line 140
            yield "                                                                        <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 name\">";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["yearly"], "holiday_name", [], "any", false, false, false, 141), "html", null, true);
            yield "</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 date\">";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["yearly"], "date", [], "any", false, false, false, 142), "html", null, true);
            yield "</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 multiplierRegular\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["yearly"], "holiday_multiplier_regular", [], "any", false, false, false, 143), "html", null, true);
            yield "</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 multiplierOt\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["yearly"], "holiday_multiplier_ot", [], "any", false, false, false, 144), "html", null, true);
            yield "</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                                                <div class=\"action-holiday_config relative dropdown\">
                                                                                    <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                                    <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                                        <li>
                                                                                            <a data-modal-target=\"editYearlyHolidayConfig";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["yearly"], "id", [], "any", false, false, false, 150), "html", null, true);
            yield "\" class=\"edit-holiday_config block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a data-modal-target=\"deleteYearlyHolidayConfig";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["yearly"], "id", [], "any", false, false, false, 153), "html", null, true);
            yield "\" class=\"delete-holiday_config block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['yearly'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        yield "                                                            </tbody>
                                                        </table>
                                                        <div class=\"noresult\" style=\"display: none\">
                                                            <div class=\"py-6 text-center\">
                                                                <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                                                <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                                                ";
        // line 167
        yield "                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!--end card-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->


<div id=\"addHolidayConfig\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Holiday Config</h5>
            <button data-modal-close=\"addHolidayConfig\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 188
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_holidays_config");
        yield "\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <label for=\"holiday_name\" class=\"inline-block mb-2 text-base font-medium\">Holiday Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"holiday_name\" name=\"holiday_name\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Holiday\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"holiday_date\" class=\"inline-block mb-2 text-base font-medium\">Date</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"holiday_date\" name=\"holiday_date\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Enter Date\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"multiplier_regular\" class=\"inline-block mb-2 text-base font-medium\">Multiplier (Regular)</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" step=\"0.01\" id=\"multiplier_regular\" name=\"multiplier_regular\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Monthly Cap\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"multiplier_ot\" class=\"inline-block mb-2 text-base font-medium\">Multiplier (Overtime)</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" step=\"0.01\" id=\"multiplier_ot\" name=\"multiplier_ot\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Monthly Cap\" required>
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" id=\"close-modal\" data-modal-close=\"addHolidayConfig\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--end add user-->
";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["standardHolidays"]) || array_key_exists("standardHolidays", $context) ? $context["standardHolidays"] : (function () { throw new RuntimeError('Variable "standardHolidays" does not exist.', 222, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["standard"]) {
            // line 223
            yield "<div id=\"editHolidayConfig";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "id", [], "any", false, false, false, 223), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Holiday Config</h5>
            <button data-modal-close=\"editHolidayConfig";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "id", [], "any", false, false, false, 227), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
            // line 230
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_holidays_config");
            yield "\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <input type=\"hidden\" name=\"holiday_id\" value=";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "id", [], "any", false, false, false, 232), "html", null, true);
            yield ">
                <div class=\"xl:col-span-12\">
                    <label for=\"holiday_name\" class=\"inline-block mb-2 text-base font-medium\">Holiday Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"holiday_name\" name=\"holiday_name\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Holiday\" value=";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "name", [], "any", false, false, false, 236), "html", null, true);
            yield " required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"holiday_date\" class=\"inline-block mb-2 text-base font-medium\">Date</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"holiday_date\" name=\"holiday_date\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Enter Date\" value=";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "date", [], "any", false, false, false, 241), "html", null, true);
            yield " required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"multiplier_regular\" class=\"inline-block mb-2 text-base font-medium\">Multiplier (Regular)</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" step=\"0.01\" id=\"multiplier_regular\" name=\"multiplier_regular\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "multiplier_regular", [], "any", false, false, false, 246), "html", null, true);
            yield " placeholder=\"EnterMultiplier (Regular)\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"multiplier_ot\" class=\"inline-block mb-2 text-base font-medium\">Multiplier (Overtime)</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" step=\"0.01\" id=\"multiplier_ot\" name=\"multiplier_ot\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Multiplier (Overtime)\" value=";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "multiplier_overtime", [], "any", false, false, false, 251), "html", null, true);
            yield " required>
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" id=\"close-modal\" data-modal-close=\"editHolidayConfig";
            // line 255
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "id", [], "any", false, false, false, 255), "html", null, true);
            yield "\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id=\"deleteHolidayConfig";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "id", [], "any", false, false, false, 263), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deletepagibigConfig\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"";
            // line 269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/delete.png"), "html", null, true);
            yield "\" alt=\"\" class=\"block h-12 mx-auto\">
            <form action=\"";
            // line 270
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_holidays_config");
            yield "\" method=\"post\">
                <input type=\"hidden\" name=\"holiday_id\" value=\"";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "id", [], "any", false, false, false, 271), "html", null, true);
            yield "\">
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
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['standard'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        yield "
<!--end add user-->
";
        // line 287
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["yearlyConfiguration"]) || array_key_exists("yearlyConfiguration", $context) ? $context["yearlyConfiguration"] : (function () { throw new RuntimeError('Variable "yearlyConfiguration" does not exist.', 287, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["yearly"]) {
            // line 288
            yield "<div id=\"editYearlyHolidayConfig";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["yearly"], "id", [], "any", false, false, false, 288), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Holiday Config</h5>
            <button data-modal-close=\"editYearlyHolidayConfig";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["yearly"], "id", [], "any", false, false, false, 292), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
            // line 295
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_yearly_holidays_config");
            yield "\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <input type=\"hidden\" name=\"yearly_holiday_id\" value=";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["yearly"], "id", [], "any", false, false, false, 297), "html", null, true);
            yield ">
                <div class=\"xl:col-span-12\">
                    <label for=\"holiday_config_id\" class=\"inline-block mb-2 text-base font-medium\">Holiday Name</label>
                    <span class=\"text-red-500\">*</span>
                    <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"choices-single-default\" name=\"holiday_config_id\">
                        ";
            // line 302
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["standardHolidays"]) || array_key_exists("standardHolidays", $context) ? $context["standardHolidays"] : (function () { throw new RuntimeError('Variable "standardHolidays" does not exist.', 302, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["standard"]) {
                // line 303
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "id", [], "any", false, false, false, 303), "html", null, true);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "id", [], "any", false, false, false, 303) == CoreExtension::getAttribute($this->env, $this->source, $context["yearly"], "holiday_config_id", [], "any", false, false, false, 303))) {
                    yield "selected";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["standard"], "name", [], "any", false, false, false, 303), "html", null, true);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['standard'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            yield "                    </select>
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" id=\"close-modal\" data-modal-close=\"editYearlyHolidayConfig";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["yearly"], "id", [], "any", false, false, false, 309), "html", null, true);
            yield "\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id=\"deleteYearlyHolidayConfig";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["yearly"], "id", [], "any", false, false, false, 317), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deleteYearlyHolidayConfig";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["yearly"], "id", [], "any", false, false, false, 321), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/delete.png"), "html", null, true);
            yield "\" alt=\"\" class=\"block h-12 mx-auto\">
            <form action=\"";
            // line 324
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_yearly_holidays_config");
            yield "\" method=\"post\">
                <input type=\"hidden\" name=\"yearly_holiday_id\" value=\"";
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["yearly"], "id", [], "any", false, false, false, 325), "html", null, true);
            yield "\">
                <div class=\"mt-5 text-center\">
                    <h5 class=\"mb-1\">Are you sure?</h5>
                    <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                    <div class=\"flex justify-center gap-2 mt-6\">
                        <button type=\"reset\" data-modal-close=\"deleteYearlyHolidayConfig";
            // line 330
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["yearly"], "id", [], "any", false, false, false, 330), "html", null, true);
            yield "\" class=\"bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10\">Cancel</button>
                        <button type=\"submit\" class=\"text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Yes, Delete It!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['yearly'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        yield "
<div id=\"bulkAddHolidays\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Holiday Config</h5>
            <button data-modal-close=\"bulkAddHolidays\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 347
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bulk_add_holidays");
        yield "\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <label for=\"holiday_name\" class=\"inline-block mb-2 text-base font-medium\">Year</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"year\" name=\"year\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Year\" required>
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" id=\"close-modal\" data-modal-close=\"bulkAddHolidays\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 366
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

        // line 367
        yield "
<script src=\"";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-list-init.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
<script src=\"";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 375
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
})
</script>

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
        return "holiday/apps-holiday.html.twig";
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
        return array (  665 => 375,  661 => 373,  655 => 370,  651 => 369,  647 => 368,  644 => 367,  631 => 366,  602 => 347,  592 => 339,  577 => 330,  569 => 325,  565 => 324,  561 => 323,  556 => 321,  549 => 317,  538 => 309,  532 => 305,  517 => 303,  513 => 302,  505 => 297,  500 => 295,  494 => 292,  486 => 288,  482 => 287,  478 => 285,  458 => 271,  454 => 270,  450 => 269,  441 => 263,  430 => 255,  423 => 251,  415 => 246,  407 => 241,  399 => 236,  392 => 232,  387 => 230,  381 => 227,  373 => 223,  369 => 222,  332 => 188,  309 => 167,  301 => 160,  288 => 153,  282 => 150,  273 => 144,  269 => 143,  265 => 142,  261 => 141,  258 => 140,  253 => 139,  236 => 123,  216 => 92,  208 => 85,  195 => 78,  189 => 75,  180 => 69,  176 => 68,  172 => 67,  168 => 66,  165 => 65,  160 => 64,  116 => 21,  104 => 6,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Holidays{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Holidays', title: '' }) }}

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Holidays Configuration</h6>
                                <div>
                                    <ul class=\"flex flex-wrap w-full text-sm font-medium text-center border-b border-slate-200 dark:border-zink-500 nav-tabs\">
                                        {# <li class=\"group grow active\">
                                            <a href=\"javascript:void(0);\" data-tab-toggle data-target=\"standardHolidays\" class=\"inline-block px-4 py-2 text-base w-full transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]\">Standard Holidays</a>
                                        </li>
                                        <li class=\"group grow\">
                                            <a href=\"javascript:void(0);\" data-tab-toggle data-target=\"yearlyConfiguration\" class=\"inline-block px-4 py-2 text-base w-full transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]\">Yearly Configuration</a>
                                        </li> #}
                                        <li class=\"group active\">
                                            <a href=\"javascript:void(0);\" data-tab-toggle data-target=\"standardHolidays\" class=\"inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-custom-500 -mb-[1px]\">Standard Holidays</a>
                                        </li>
                                        <li class=\"group\">
                                            <a href=\"javascript:void(0);\" data-tab-toggle data-target=\"yearlyConfiguration\" class=\"inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-custom-500 -mb-[1px]\">Yearly Configuration</a>
                                        </li>
                                    </ul>
                        
                                    <div class=\"mt-5 tab-content\">
                                        <div class=\"block tab-pane\" id=\"standardHolidays\">
                                            <div class=\"card\" id=\"holidaysTable\">
                                                <div class=\"card-body\">
                                                    <div class=\"flex items-center\">
                                                        <h6 class=\"text-15 grow\">Standard Holidays List</h6>
                                                        <div class=\"shrink-0\">
                                                            <button data-modal-target=\"addHolidayConfig\" type=\"button\" class=\"add-holiday_config text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Add Holiday</span></button>
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
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold name\" data-sort=\"name\">Holiday</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold date\" data-sort=\"date\">Date</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold multiplierRegular\" data-sort=\"multiplierRegular\">Multiplier (Regular)</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold multiplierOt\" data-sort=\"multiplierOt\">Multiplier (OT)</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class=\"list\">
                                                            {# {{ dump(pagibigConfigs) }} #}
                                                                {% for standard in standardHolidays %}
                                                                        <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 name\">{{ standard.name }}</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 date\">{{ standard.date }}</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 multiplierRegular\">{{ standard.multiplier_regular }}</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 multiplierOt\">{{ standard.multiplier_overtime }}</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                                                <div class=\"action-holiday_config relative dropdown\">
                                                                                    <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                                    <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                                        <li>
                                                                                            <a data-modal-target=\"editHolidayConfig{{standard.id}}\" class=\"edit-holiday_config block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a data-modal-target=\"deleteHolidayConfig{{standard.id}}\" class=\"delete-holiday_config block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                                        </li>
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
                                        </div>
                                        <div class=\"hidden tab-pane\" id=\"yearlyConfiguration\">
                                            <div class=\"card\" id=\"yearlyTable\">
                                                <div class=\"card-body\">
                                                    <div class=\"flex items-center\">
                                                        <h6 class=\"text-15 grow\">Standard Holidays Adjustment List</h6>
                                                        <div class=\"shrink-0\">
                                                            <button data-modal-target=\"bulkAddHolidays\" type=\"button\" class=\"add-holiday_config text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Bulk Add Holidays</span></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                                    <form action=\"#!\">
                                                        {# <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                                                            <div class=\"relative xl:col-span-2\">
                                                                <div class=\"flex flex-row gap-3\">
                                                                    <p class=\"mb-0\">Calendar Year</p>
                                                                    <select id=\"selectLimit\" class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                                                        <option value=\"2027\">2027</option>
                                                                        <option value=\"2026\">2026</option>
                                                                        <option value=\"2025\">2025</option>
                                                                        <option value=\"2024\">2024</option>
                                                                    </select>
                                                                </div>
                                                            </div><!--end col-->
                                                        </div><!--end grid--> #}
                                                    </form>
                                                </div>
                                                <div class=\"card-body\">
                                                    <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                                        <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                                            <thead class=\"text-left\">
                                                                <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold name\" data-sort=\"name\">Holiday</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold date\" data-sort=\"date\">Date</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold multiplierRegular\" data-sort=\"multiplierRegular\">Multiplier (Regular)</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold multiplierOt\" data-sort=\"multiplierOt\">Multiplier (OT)</th>
                                                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class=\"list\">
                                                            {# {{ dump(pagibigConfigs) }} #}
                                                                {% for yearly in yearlyConfiguration %}
                                                                        <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 name\">{{ yearly.holiday_name }}</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 date\">{{ yearly.date }}</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 multiplierRegular\">{{ yearly.holiday_multiplier_regular }}</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 multiplierOt\">{{ yearly.holiday_multiplier_ot }}</td>
                                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                                                <div class=\"action-holiday_config relative dropdown\">
                                                                                    <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                                    <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                                        <li>
                                                                                            <a data-modal-target=\"editYearlyHolidayConfig{{yearly.id}}\" class=\"edit-holiday_config block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a data-modal-target=\"deleteYearlyHolidayConfig{{yearly.id}}\" class=\"delete-holiday_config block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                                        </li>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->


<div id=\"addHolidayConfig\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Holiday Config</h5>
            <button data-modal-close=\"addHolidayConfig\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"{{ path('create_holidays_config') }}\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <label for=\"holiday_name\" class=\"inline-block mb-2 text-base font-medium\">Holiday Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"holiday_name\" name=\"holiday_name\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Holiday\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"holiday_date\" class=\"inline-block mb-2 text-base font-medium\">Date</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"holiday_date\" name=\"holiday_date\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Enter Date\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"multiplier_regular\" class=\"inline-block mb-2 text-base font-medium\">Multiplier (Regular)</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" step=\"0.01\" id=\"multiplier_regular\" name=\"multiplier_regular\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Monthly Cap\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"multiplier_ot\" class=\"inline-block mb-2 text-base font-medium\">Multiplier (Overtime)</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" step=\"0.01\" id=\"multiplier_ot\" name=\"multiplier_ot\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Monthly Cap\" required>
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" id=\"close-modal\" data-modal-close=\"addHolidayConfig\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!--end add user-->
{% for standard in standardHolidays %}
<div id=\"editHolidayConfig{{standard.id}}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Holiday Config</h5>
            <button data-modal-close=\"editHolidayConfig{{standard.id}}\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"{{ path('update_holidays_config') }}\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <input type=\"hidden\" name=\"holiday_id\" value={{standard.id}}>
                <div class=\"xl:col-span-12\">
                    <label for=\"holiday_name\" class=\"inline-block mb-2 text-base font-medium\">Holiday Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"holiday_name\" name=\"holiday_name\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Holiday\" value={{standard.name}} required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"holiday_date\" class=\"inline-block mb-2 text-base font-medium\">Date</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"holiday_date\" name=\"holiday_date\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Enter Date\" value={{standard.date}} required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"multiplier_regular\" class=\"inline-block mb-2 text-base font-medium\">Multiplier (Regular)</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" step=\"0.01\" id=\"multiplier_regular\" name=\"multiplier_regular\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value={{standard.multiplier_regular}} placeholder=\"EnterMultiplier (Regular)\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"multiplier_ot\" class=\"inline-block mb-2 text-base font-medium\">Multiplier (Overtime)</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" step=\"0.01\" id=\"multiplier_ot\" name=\"multiplier_ot\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Multiplier (Overtime)\" value={{standard.multiplier_overtime}} required>
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" id=\"close-modal\" data-modal-close=\"editHolidayConfig{{standard.id}}\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id=\"deleteHolidayConfig{{standard.id}}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deletepagibigConfig\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"{{asset('assets/images/delete.png')}}\" alt=\"\" class=\"block h-12 mx-auto\">
            <form action=\"{{ path('delete_holidays_config') }}\" method=\"post\">
                <input type=\"hidden\" name=\"holiday_id\" value=\"{{standard.id}}\">
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
{% endfor %}

<!--end add user-->
{% for yearly in yearlyConfiguration %}
<div id=\"editYearlyHolidayConfig{{yearly.id}}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Holiday Config</h5>
            <button data-modal-close=\"editYearlyHolidayConfig{{yearly.id}}\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"{{ path('update_yearly_holidays_config') }}\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <input type=\"hidden\" name=\"yearly_holiday_id\" value={{yearly.id}}>
                <div class=\"xl:col-span-12\">
                    <label for=\"holiday_config_id\" class=\"inline-block mb-2 text-base font-medium\">Holiday Name</label>
                    <span class=\"text-red-500\">*</span>
                    <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"choices-single-default\" name=\"holiday_config_id\">
                        {% for standard in standardHolidays %}
                            <option value=\"{{standard.id}}\" {% if standard.id == yearly.holiday_config_id %}selected{% endif %}>{{standard.name}}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" id=\"close-modal\" data-modal-close=\"editYearlyHolidayConfig{{yearly.id}}\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id=\"deleteYearlyHolidayConfig{{yearly.id}}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deleteYearlyHolidayConfig{{yearly.id}}\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"{{asset('assets/images/delete.png')}}\" alt=\"\" class=\"block h-12 mx-auto\">
            <form action=\"{{ path('delete_yearly_holidays_config') }}\" method=\"post\">
                <input type=\"hidden\" name=\"yearly_holiday_id\" value=\"{{yearly.id}}\">
                <div class=\"mt-5 text-center\">
                    <h5 class=\"mb-1\">Are you sure?</h5>
                    <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                    <div class=\"flex justify-center gap-2 mt-6\">
                        <button type=\"reset\" data-modal-close=\"deleteYearlyHolidayConfig{{yearly.id}}\" class=\"bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10\">Cancel</button>
                        <button type=\"submit\" class=\"text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Yes, Delete It!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{% endfor %}

<div id=\"bulkAddHolidays\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Holiday Config</h5>
            <button data-modal-close=\"bulkAddHolidays\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"{{ path('bulk_add_holidays') }}\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <label for=\"holiday_name\" class=\"inline-block mb-2 text-base font-medium\">Year</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"year\" name=\"year\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Year\" required>
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" id=\"close-modal\" data-modal-close=\"bulkAddHolidays\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
})
</script>

{% endblock %}", "holiday/apps-holiday.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\holiday\\apps-holiday.html.twig");
    }
}
