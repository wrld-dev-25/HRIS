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

/* project_management/apps-phase.html.twig */
class __TwigTemplate_f18d955b8dfa14943d0e77ae54e23a63 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project_management/apps-phase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project_management/apps-phase.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "project_management/apps-phase.html.twig", 1);
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

        yield "Phase";
        
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Phase", "title" => "Phase"]);
        yield "
                <style>
                    /* Hide the spinner */
                    input[type=\"number\"]::-webkit-inner-spin-button,
                    input[type=\"number\"]::-webkit-outer-spin-button {
                        -webkit-appearance: none;
                        margin: 0;
                    }
                    input[type=\"number\"] {
                        -moz-appearance: textfield; /* Firefox */
                    }
                </style>
                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"usersTable\">
                            <div class=\"card-body\">
                                <div class=\"flex items-center\">
                                    <h6 class=\"text-15 grow\">Phase List</h6>
                                    <div class=\"shrink-0\">
                                        <button data-modal-target=\"addPhaseModal\" type=\"button\" class=\"add-phase text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Add Phase</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                <form action=\"#!\">
                                    <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                                        <div class=\"relative xl:col-span-2\">
                                            <input type=\"text\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search for name, email, phone number etc...\" autocomplete=\"off\">
                                            <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                        </div><!--end col-->
                                        ";
        // line 45
        yield "                                        <!--end col-->
                                        ";
        // line 54
        yield "                                        <!--end col-->
                                    </div><!--end grid-->
                                </form>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                    <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                        <thead class=\"text-left\">
                                            <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                ";
        // line 68
        yield "                                                ";
        // line 69
        yield "                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"name\">Name</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"name\">Subdivision</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"name\">Code</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"name\">Total Blocks</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"name\">Total Lots</th>
                                                ";
        // line 75
        yield "                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                            ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["phase"]) || array_key_exists("phase", $context) ? $context["phase"] : (function () { throw new RuntimeError('Variable "phase" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["phaseItem"]) {
            // line 80
            yield "                                                <tr class=\"relative  rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 location text-custom-500 clickable-row\" data-target=\"#blockTable";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "id", [], "any", false, false, false, 81), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "name", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 location\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "subdivision_name", [], "any", false, false, false, 82), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 location\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "code", [], "any", false, false, false, 83), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 location\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "total_blocks", [], "any", false, false, false, 84), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 location\">";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "total_lots", [], "any", false, false, false, 85), "html", null, true);
            yield "</td>
                                                    ";
            // line 87
            yield "                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                        <div class=\"action-phase relative dropdown\">
                                                            <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                            <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                ";
            // line 94
            yield "                                                                <li>
                                                                    <a data-modal-target=\"editPhaseModal";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "id", [], "any", false, false, false, 95), "html", null, true);
            yield "\" class=\"edit-phase block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                </li>
                                                                <li>
                                                                    <a data-modal-target=\"deleteModal";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "id", [], "any", false, false, false, 98), "html", null, true);
            yield "\" class=\"delete-phase block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" style=\"position: relative; z-index: 10;\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr id=\"blockTable";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "id", [], "any", false, false, false, 105), "html", null, true);
            yield "\" hidden>
                                                    <td colspan=\"1\">
                                                        <div class=\"\">
                                                            <table class=\"w-full mx-5 mb-5\">
                                                                <thead class=\"ltr:text-left rtl:text-right\">
                                                                    <tr>
                                                                        <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Block Name</th>
                                                                        <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Total Lots</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    ";
            // line 116
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "blocks", [], "any", false, false, false, 116))) {
                // line 117
                yield "                                                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "blocks", [], "any", false, false, false, 117));
                foreach ($context['_seq'] as $context["_key"] => $context["blockItem"]) {
                    // line 118
                    yield "                                                                        <tr>
                                                                            <input type=\"hidden\" name=\"total_block";
                    // line 119
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "id", [], "any", false, false, false, 119), "html", null, true);
                    yield "\" id=\"total_block";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "id", [], "any", false, false, false, 119), "html", null, true);
                    yield "\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "total_lots", [], "any", false, false, false, 119), "html", null, true);
                    yield "\">
                                                                            <input type=\"hidden\" name=\"block_id";
                    // line 120
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "id", [], "any", false, false, false, 120), "html", null, true);
                    yield "\" id=\"block_id";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "id", [], "any", false, false, false, 120), "html", null, true);
                    yield "\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "id", [], "any", false, false, false, 120), "html", null, true);
                    yield "\">
                                                                            <input type=\"hidden\" name=\"phase_id";
                    // line 121
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "id", [], "any", false, false, false, 121), "html", null, true);
                    yield "\" id=\"phase_id";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "id", [], "any", false, false, false, 121), "html", null, true);
                    yield "\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "id", [], "any", false, false, false, 121), "html", null, true);
                    yield "\">
                                                                            <input type=\"hidden\" name=\"totallots";
                    // line 122
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "id", [], "any", false, false, false, 122), "html", null, true);
                    yield "\" id=\"totallots";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "id", [], "any", false, false, false, 122), "html", null, true);
                    yield "\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "total_lots", [], "any", false, false, false, 122), "html", null, true);
                    yield "\">
                                                                            <td class=\"px-3.5 py-2.5 border-y border-transparent\">";
                    // line 123
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "block_name", [], "any", false, false, false, 123), "html", null, true);
                    yield "</td>
                                                                            <td class=\"edit-phase px-3.5 py-2.5 border-y border-transparent editable-cell\">";
                    // line 124
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "total_lots", [], "any", false, false, false, 124), "html", null, true);
                    yield "</td>
                                                                        </tr>
                                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                yield "                                                                    ";
            }
            // line 128
            yield "                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phaseItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "                                        </tbody>
                                    </table>
                                    <div class=\"noresult\" style=\"display: none\">
                                        <div class=\"py-6 text-center\">
                                            <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                            <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                            ";
        // line 141
        yield "                                        </div>
                                    </div>
                                </div>
                                ";
        // line 181
        yield "                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->

        

<div id=\"addPhaseModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Phase</h5>
            <button data-modal-close=\"addPhaseModal\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <form action=\"";
        // line 194
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_phase_form");
        yield "\" method=\"post\">
            <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                <div class=\"mb-3\">
                    <label for=\"subdivision\" class=\"inline-block mb-2 text-base font-medium\">Subdivsion</label>
                    <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"subdivisionSelect\" name=\"subdivision\">
                        ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["subdivisions"]) || array_key_exists("subdivisions", $context) ? $context["subdivisions"] : (function () { throw new RuntimeError('Variable "subdivisions" does not exist.', 199, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subdivisionItem"]) {
            // line 200
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "id", [], "any", false, false, false, 200), "html", null, true);
            yield "\" data-remaining-lots=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "remaining_lots", [], "any", false, false, false, 200), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "subdivisionCode", [], "any", false, false, false, 200), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "name", [], "any", false, false, false, 200), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subdivisionItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        yield "                    </select>
                </div>
                ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["subdivisions"]) || array_key_exists("subdivisions", $context) ? $context["subdivisions"] : (function () { throw new RuntimeError('Variable "subdivisions" does not exist.', 204, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subdivisionItem"]) {
            // line 205
            yield "                    <input type=\"hidden\" class=\"remaining-lots\" data-subdivision-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "id", [], "any", false, false, false, 205), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "remaining_lots", [], "any", false, false, false, 205), "html", null, true);
            yield "\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subdivisionItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        yield "                <div class=\"mb-3\">
                    <label for=\"name\" class=\"inline-block mb-2 text-base font-medium\">Name</label>
                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter phase name\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"code\" class=\"inline-block mb-2 text-base font-medium\">Code</label>
                    <input type=\"text\" id=\"code\" name=\"code\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter phase name\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"total_blocks\" class=\"inline-block mb-2 text-base font-medium\">Total Blocks</label>
                    <input type=\"number\" id=\"total_blocks\" name=\"total_blocks\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter total blocks\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"total_lot\" class=\"inline-block mb-2 text-base font-medium\">Total Lots</label>
                    <input type=\"number\" id=\"total_lot\" name=\"total_lots\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter total lots\" required>
                </div>
            </div>
            <div class=\"flex justify-end gap-2 mt-4 p-4\">
                <button type=\"button\" data-modal-close=\"addPhaseModal\" class=\"text-red-500 transition-all reset-form duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                <button type=\"submit\" id=\"add_submit\" class=\"text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50\" disabled>Submit</button>
                ";
        // line 228
        yield "                
            </div>
        </form>
    </div>
</div>
<!--end add user-->

";
        // line 235
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["phase"]) || array_key_exists("phase", $context) ? $context["phase"] : (function () { throw new RuntimeError('Variable "phase" does not exist.', 235, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["phaseItem"]) {
            // line 236
            yield "<div id=\"editPhaseModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "id", [], "any", false, false, false, 236), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Phase</h5>
            <button data-modal-close=\"editPhaseModal";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "id", [], "any", false, false, false, 240), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <form action=\"";
            // line 242
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_phase_form");
            yield "\" method=\"post\">
            <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                <div class=\"mb-3\">
                    <input type=\"hidden\" name=\"phase_id\" value=\"";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "id", [], "any", false, false, false, 245), "html", null, true);
            yield "\">
                    <input type=\"hidden\" name=\"sub_id\" value=\"";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "subdivision_id", [], "any", false, false, false, 246), "html", null, true);
            yield "\">
                    <label for=\"subdivision\" class=\"inline-block mb-2 text-base font-medium\">Subdivsion</label>
                    <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"choices-single-default\" name=\"subdivision\" disabled>
                        ";
            // line 249
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["subdivisions"]) || array_key_exists("subdivisions", $context) ? $context["subdivisions"] : (function () { throw new RuntimeError('Variable "subdivisions" does not exist.', 249, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["subdivisionItem"]) {
                // line 250
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "subdivision_id", [], "any", false, false, false, 250) == CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "id", [], "any", false, false, false, 250))) {
                    // line 251
                    yield "                                <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "id", [], "any", false, false, false, 251), "html", null, true);
                    yield "\" selected>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "subdivisionCode", [], "any", false, false, false, 251), "html", null, true);
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "name", [], "any", false, false, false, 251), "html", null, true);
                    yield "</option>
                            ";
                } else {
                    // line 253
                    yield "                                <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "id", [], "any", false, false, false, 253), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "subdivisionCode", [], "any", false, false, false, 253), "html", null, true);
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "name", [], "any", false, false, false, 253), "html", null, true);
                    yield "</option>
                            ";
                }
                // line 255
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subdivisionItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 256
            yield "                    </select>
                </div>
                <div class=\"mb-3\">
                    <label for=\"name\" class=\"inline-block mb-2 text-base font-medium\">Name</label>
                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter subdivision name\" value=\"";
            // line 260
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "name", [], "any", false, false, false, 260), "html", null, true);
            yield "\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"code\" class=\"inline-block mb-2 text-base font-medium\">Code</label>
                    <input type=\"text\" id=\"code\" name=\"code\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter subdivision name\" value=\"";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "code", [], "any", false, false, false, 264), "html", null, true);
            yield "\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"total_blocks\" class=\"inline-block mb-2 text-base font-medium\">Total Blocks</label>
                    <input type=\"number\" id=\"total_blocks\" name=\"total_blocks\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter total blocks\" value=\"";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "total_blocks", [], "any", false, false, false, 268), "html", null, true);
            yield "\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"total_lots\" class=\"inline-block mb-2 text-base font-medium\">Total Lots</label>
                    <input type=\"number\" id=\"total_lots\" name=\"total_lots\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter subdivision name\" value=\"";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "total_lots", [], "any", false, false, false, 272), "html", null, true);
            yield "\" required>
                </div>
            </div>
            <div class=\"flex justify-end gap-2 mt-4 p-4\">
                <button type=\"button\" data-modal-close=\"editPhaseModal";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "id", [], "any", false, false, false, 276), "html", null, true);
            yield "\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Submit</button>
            </div>
        </form>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phaseItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        yield "<!--end edit user-->

";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["phase"]) || array_key_exists("phase", $context) ? $context["phase"] : (function () { throw new RuntimeError('Variable "phase" does not exist.', 285, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["phaseItem"]) {
            // line 286
            yield "<div id=\"deleteModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "id", [], "any", false, false, false, 286), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deleteModal";
            // line 290
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "id", [], "any", false, false, false, 290), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/delete.png"), "html", null, true);
            yield "\" alt=\"\" class=\"block h-12 mx-auto\">
            <div class=\"mt-5 text-center\">
                <h5 class=\"mb-1\">Are you sure?</h5>
                <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                <div class=\"flex justify-center gap-2 mt-6\">
                <form action=\"";
            // line 297
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_phase_form");
            yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"phase_id\" value=\"";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "id", [], "any", false, false, false, 298), "html", null, true);
            yield "\">
                    <button type=\"button\" data-modal-close=\"deleteModal";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "id", [], "any", false, false, false, 299), "html", null, true);
            yield "\" class=\"bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Yes, Delete It!</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phaseItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 310
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 311
        yield "
<script src=\"";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-user-list.init.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
<script src=\"";
        // line 317
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 371
        yield "


<script>
\$(document).ready(function() {
    //showToast('test','bg-yellow-500')
    // Click event handler for editable cells
    \$('.clickable-row').on('click', function() {
        var target = \$(this).data('target');
        \$(target).toggle();
    });

    // Disable submit button after form submission
    \$('form').on('submit', function () {
       var \$submitButton = \$(this).find('button[type=\"submit\"]');
        \$submitButton.prop('disabled', true);
        \$submitButton.css({
            'background-color': '#d1d5db', // Gray background
            'border-color': '#d1d5db', // Gray border
            'color': '#9ca3af', // Gray text
            'cursor': 'not-allowed' // Not-allowed cursor
        });
    });

    \$(document).on('click', '.editable-cell', function() {
        var \$td = \$(this);
        console.log('tr value'+\$td.text())
        var phaseId = \$td.closest('tr').find('input[name^=\"phase_id\"]').val();
        var blockId = \$td.closest('tr').find('input[name^=\"block_id\"]').val();
        var totalLots = parseInt(\$td.closest('tr').find('input[name^=\"totallots\"]').val());
        var originalValue = \$td.closest('tr').find('input[name^=\"total_block\"]').val();
        var tdVal = parseInt(\$td.text());
        var blockTotalLots = calculateTotalLots(phaseId);
        //console.log(blockTotalLots)

        // Create input field for editing
        var \$input = \$('<input type=\"number\" min=\"0\" style=\"width: 50px;\" class=\"px-3 py-1 text-xs form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"' + tdVal + '\" />');
        \$td.html(\$input);
        \$input.focus();

        // Handle focusout event to save the edited value and perform validation
        \$input.on('focusout', function() {
            var newValue = parseInt(\$(this).val());
            console.log(\"new value\"+newValue)
            \$td.html(newValue) // Add class for styling
            if (newValue >= 0 && calculateTotalLots(phaseId) <= totalLots) {
                // Update cell content with new value and apply green color
                \$td.html(newValue).removeClass('text-red-500 font-semibold');
                \$td.closest('tr').find('input[name^=\"total_block\"]').val(newValue);
                // Perform AJAX request to update total lots
                \$.ajax({
                    type: \"POST\",
                    url: \"/blocks/update_blocks\",
                    data: {
                        phase_id: phaseId,
                        block_id: blockId,
                        total_lots: newValue,
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            } else {
                // If newValue is not valid, revert back to original value and apply red color
                \$td.html(tdVal) // Add class for styling
                alert('Total Lots must be a non-negative number and less than ' + totalLots); // Display alert or handle validation message
            }
        });
    });

    /*\$('#subdivisionSelect').change(function() {
        var selectedOption = \$(this).find('option:selected');
        var subdivisionId = selectedOption.val();
        var remainingLots = \$('.remaining-lots[data-subdivision-id=\"' + subdivisionId + '\"]').val();

        console.log('Remaining Lots:', remainingLots);

        // Example validation logic
        if (parseInt(remainingLots) < 10) {
            alert('Warning: Low remaining lots!');
        }
    });*/

    \$('#total_lot').change(function() {
        var selectedOption = \$(\"#subdivisionSelect\").find('option:selected');
        var subdivisionId = selectedOption.val();
        var remainingLots = \$('.remaining-lots[data-subdivision-id=\"' + subdivisionId + '\"]').val();
        var total_lots = \$(this).val();

        console.log('Remaining Lots:', remainingLots);
        console.log('Total Lots:', total_lots);
        // Example validation logic
        if (parseInt(remainingLots) < parseInt(total_lots)) {
            Toastify({
                newWindow: true,
                text: 'Inputed lots is greater than remaining lots.',
                gravity: 'top',
                position: 'right',
                className: \"bg-yellow-500\",
                stopOnFocus: true,
                offset: {
                    x: 0, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                    y: 0, // vertical axis - can be a number or a string indicating unity. eg: '2em'
                },
                duration: 3000,
                close: true,
            }).showToast();
            \$('#add_submit').prop('true', false);
            \$('#add_submit').removeClass('text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50');

            \$('#add_submit').removeClass('text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20');

            \$('#add_submit').addClass('text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50');

        }
        else{
            \$('#add_submit').prop('disabled', false);
            \$('#add_submit').removeClass('text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50');

            \$('#add_submit').removeClass('text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20');
            
            \$('#add_submit').addClass('text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20');
        }
    });


    function calculateTotalLots(phaseId) {
        let total = 0;
        // Iterate through each tr in the table
        \$('#blockTable'+phaseId+' tbody tr').each(function() {
            // Find the td element with class .editable-cell within the current tr
            let totalLotsCell = \$(this).find('td.editable-cell');
            // Get the text content of the td element and parse as integer
            let totalLots = parseInt(totalLotsCell.text().trim()) || 0;
            total += totalLots;
            console.log(totalLots)
        });
        return total;
    }
});
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
        return "project_management/apps-phase.html.twig";
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
        return array (  603 => 371,  599 => 317,  593 => 314,  589 => 313,  585 => 312,  582 => 311,  572 => 310,  548 => 299,  544 => 298,  540 => 297,  532 => 292,  527 => 290,  519 => 286,  515 => 285,  511 => 283,  498 => 276,  491 => 272,  484 => 268,  477 => 264,  470 => 260,  464 => 256,  458 => 255,  448 => 253,  438 => 251,  435 => 250,  431 => 249,  425 => 246,  421 => 245,  415 => 242,  410 => 240,  402 => 236,  398 => 235,  389 => 228,  367 => 207,  356 => 205,  352 => 204,  348 => 202,  333 => 200,  329 => 199,  321 => 194,  306 => 181,  301 => 141,  293 => 134,  282 => 128,  279 => 127,  270 => 124,  266 => 123,  258 => 122,  250 => 121,  242 => 120,  234 => 119,  231 => 118,  226 => 117,  224 => 116,  210 => 105,  200 => 98,  194 => 95,  191 => 94,  185 => 87,  181 => 85,  177 => 84,  173 => 83,  169 => 82,  163 => 81,  160 => 80,  156 => 79,  150 => 75,  143 => 69,  141 => 68,  130 => 54,  127 => 45,  94 => 6,  91 => 5,  81 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Phase{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Phase', title: 'Phase' }) }}
                <style>
                    /* Hide the spinner */
                    input[type=\"number\"]::-webkit-inner-spin-button,
                    input[type=\"number\"]::-webkit-outer-spin-button {
                        -webkit-appearance: none;
                        margin: 0;
                    }
                    input[type=\"number\"] {
                        -moz-appearance: textfield; /* Firefox */
                    }
                </style>
                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"usersTable\">
                            <div class=\"card-body\">
                                <div class=\"flex items-center\">
                                    <h6 class=\"text-15 grow\">Phase List</h6>
                                    <div class=\"shrink-0\">
                                        <button data-modal-target=\"addPhaseModal\" type=\"button\" class=\"add-phase text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Add Phase</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                <form action=\"#!\">
                                    <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                                        <div class=\"relative xl:col-span-2\">
                                            <input type=\"text\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search for name, email, phone number etc...\" autocomplete=\"off\">
                                            <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                        </div><!--end col-->
                                        {# <div class=\"xl:col-span-2\">
                                            <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"choices-single-default\">
                                                <option value=\"\">Select Status</option>
                                                <option value=\"Verified\">Verified</option>
                                                <option value=\"Waiting\">Waiting</option>
                                                <option value=\"Rejected\">Rejected</option>
                                                <option value=\"Hidden\">Hidden</option>
                                            </select>
                                        </div> #}
                                        <!--end col-->
                                        {# <div class=\"xl:col-span-3 xl:col-start-10\">
                                            <div class=\"flex gap-2 xl:justify-end\">
                                                <div>
                                                    <button type=\"button\" class=\"bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20\"><i data-lucide=\"download\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Import</span></button>
                                                </div>
                                                <button class=\"flex items-center justify-center size-[37.5px] p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\"><i data-lucide=\"sliders-horizontal\" class=\"size-4\"></i></button>
                                            </div>
                                        </div> #}
                                        <!--end col-->
                                    </div><!--end grid-->
                                </form>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                    <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                        <thead class=\"text-left\">
                                            <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">
                                                    <div class=\"flex items-center h-full\">
                                                        <input id=\"CheckboxAll\" class=\"size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800 cursor-pointer\" type=\"checkbox\">
                                                    </div>
                                                </th> #}
                                                {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"user-id\">User ID</th> #}
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"name\">Name</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"name\">Subdivision</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"name\">Code</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"name\">Total Blocks</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"name\">Total Lots</th>
                                                {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"lots\">Remaining Lots</th> #}
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                            {% for phaseItem in phase %}
                                                <tr class=\"relative  rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 location text-custom-500 clickable-row\" data-target=\"#blockTable{{ phaseItem.id }}\">{{ phaseItem.name }}</td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 location\">{{ phaseItem.subdivision_name }}</td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 location\">{{ phaseItem.code }}</td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 location\">{{ phaseItem.total_blocks }}</td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 location\">{{ phaseItem.total_lots }}</td>
                                                    {# <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 location\">{{ phaseItem.remaining_lots }}</td> #}
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                        <div class=\"action-phase relative dropdown\">
                                                            <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                            <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                {# <li>
                                                                    <a class=\"block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"pages-account\"><i data-lucide=\"eye\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Overview</span></a>
                                                                </li> #}
                                                                <li>
                                                                    <a data-modal-target=\"editPhaseModal{{phaseItem.id}}\" class=\"edit-phase block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                </li>
                                                                <li>
                                                                    <a data-modal-target=\"deleteModal{{phaseItem.id}}\" class=\"delete-phase block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" style=\"position: relative; z-index: 10;\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    
                                                </tr>
                                                <tr id=\"blockTable{{phaseItem.id}}\" hidden>
                                                    <td colspan=\"1\">
                                                        <div class=\"\">
                                                            <table class=\"w-full mx-5 mb-5\">
                                                                <thead class=\"ltr:text-left rtl:text-right\">
                                                                    <tr>
                                                                        <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Block Name</th>
                                                                        <th class=\"px-3.5 py-2.5 font-semibold border-b border-transparent\">Total Lots</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    {% if phaseItem.blocks is not empty %}
                                                                        {% for blockItem in phaseItem.blocks %}
                                                                        <tr>
                                                                            <input type=\"hidden\" name=\"total_block{{blockItem.id}}\" id=\"total_block{{blockItem.id}}\" value=\"{{blockItem.total_lots}}\">
                                                                            <input type=\"hidden\" name=\"block_id{{blockItem.id}}\" id=\"block_id{{blockItem.id}}\" value=\"{{blockItem.id}}\">
                                                                            <input type=\"hidden\" name=\"phase_id{{blockItem.id}}\" id=\"phase_id{{blockItem.id}}\" value=\"{{phaseItem.id}}\">
                                                                            <input type=\"hidden\" name=\"totallots{{blockItem.id}}\" id=\"totallots{{blockItem.id}}\" value=\"{{phaseItem.total_lots}}\">
                                                                            <td class=\"px-3.5 py-2.5 border-y border-transparent\">{{blockItem.block_name}}</td>
                                                                            <td class=\"edit-phase px-3.5 py-2.5 border-y border-transparent editable-cell\">{{blockItem.total_lots}}</td>
                                                                        </tr>
                                                                        {% endfor %}
                                                                    {% endif %}
                                                                </tbody>
                                                            </table>
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
                                {# <div class=\"flex flex-col items-center mt-8 md:flex-row\">
                                    <div class=\"mb-4 grow md:mb-0\">
                                        <p class=\"text-slate-500 dark:text-zink-200\">Showing <b>10</b> of <b>57</b> Results</p>
                                    </div>
                                    <ul class=\"flex flex-wrap items-center gap-2\">
                                        <li>
                                            <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\"><i class=\"size-4 rtl:rotate-180\" data-lucide=\"chevrons-left\"></i></a>
                                        </li>
                                        <li>
                                            <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\"><i class=\"size-4 rtl:rotate-180\" data-lucide=\"chevron-left\"></i></a>
                                        </li>
                                        <li>
                                            <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\">1</a>
                                        </li>
                                        <li>
                                            <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\">2</a>
                                        </li>
                                        <li>
                                            <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active\">3</a>
                                        </li>
                                        <li>
                                            <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\">4</a>
                                        </li>
                                        <li>
                                            <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\">5</a>
                                        </li>
                                        <li>
                                            <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\">6</a>
                                        </li>
                                        <li>
                                            <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\"><i class=\"size-4 rtl:rotate-180\" data-lucide=\"chevron-right\"></i></a>
                                        </li>
                                        <li>
                                            <a href=\"#!\" class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto\"><i class=\"size-4 rtl:rotate-180\" data-lucide=\"chevrons-right\"></i></a>
                                        </li>
                                    </ul>
                                </div> #}
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->

        

<div id=\"addPhaseModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Phase</h5>
            <button data-modal-close=\"addPhaseModal\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <form action=\"{{ path('submit_phase_form') }}\" method=\"post\">
            <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                <div class=\"mb-3\">
                    <label for=\"subdivision\" class=\"inline-block mb-2 text-base font-medium\">Subdivsion</label>
                    <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"subdivisionSelect\" name=\"subdivision\">
                        {% for subdivisionItem in subdivisions %}
                            <option value=\"{{subdivisionItem.id}}\" data-remaining-lots=\"{{ subdivisionItem.remaining_lots }}\">{{subdivisionItem.subdivisionCode}} - {{subdivisionItem.name}}</option>
                        {% endfor %}
                    </select>
                </div>
                {% for subdivisionItem in subdivisions %}
                    <input type=\"hidden\" class=\"remaining-lots\" data-subdivision-id=\"{{ subdivisionItem.id }}\" value=\"{{ subdivisionItem.remaining_lots }}\">
                {% endfor %}
                <div class=\"mb-3\">
                    <label for=\"name\" class=\"inline-block mb-2 text-base font-medium\">Name</label>
                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter phase name\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"code\" class=\"inline-block mb-2 text-base font-medium\">Code</label>
                    <input type=\"text\" id=\"code\" name=\"code\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter phase name\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"total_blocks\" class=\"inline-block mb-2 text-base font-medium\">Total Blocks</label>
                    <input type=\"number\" id=\"total_blocks\" name=\"total_blocks\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter total blocks\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"total_lot\" class=\"inline-block mb-2 text-base font-medium\">Total Lots</label>
                    <input type=\"number\" id=\"total_lot\" name=\"total_lots\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter total lots\" required>
                </div>
            </div>
            <div class=\"flex justify-end gap-2 mt-4 p-4\">
                <button type=\"button\" data-modal-close=\"addPhaseModal\" class=\"text-red-500 transition-all reset-form duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                <button type=\"submit\" id=\"add_submit\" class=\"text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50\" disabled>Submit</button>
                {# <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Submit</button> #}
                
            </div>
        </form>
    </div>
</div>
<!--end add user-->

{% for phaseItem in phase %}
<div id=\"editPhaseModal{{phaseItem.id}}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Phase</h5>
            <button data-modal-close=\"editPhaseModal{{phaseItem.id}}\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <form action=\"{{ path('update_phase_form') }}\" method=\"post\">
            <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                <div class=\"mb-3\">
                    <input type=\"hidden\" name=\"phase_id\" value=\"{{phaseItem.id}}\">
                    <input type=\"hidden\" name=\"sub_id\" value=\"{{phaseItem.subdivision_id}}\">
                    <label for=\"subdivision\" class=\"inline-block mb-2 text-base font-medium\">Subdivsion</label>
                    <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"choices-single-default\" name=\"subdivision\" disabled>
                        {% for subdivisionItem in subdivisions %}
                            {% if phaseItem.subdivision_id == subdivisionItem.id %}
                                <option value=\"{{subdivisionItem.id}}\" selected>{{subdivisionItem.subdivisionCode}} - {{subdivisionItem.name}}</option>
                            {% else %}
                                <option value=\"{{subdivisionItem.id}}\">{{subdivisionItem.subdivisionCode}} - {{subdivisionItem.name}}</option>
                            {% endif %}
                        {% endfor %}
                    </select>
                </div>
                <div class=\"mb-3\">
                    <label for=\"name\" class=\"inline-block mb-2 text-base font-medium\">Name</label>
                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter subdivision name\" value=\"{{phaseItem.name}}\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"code\" class=\"inline-block mb-2 text-base font-medium\">Code</label>
                    <input type=\"text\" id=\"code\" name=\"code\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter subdivision name\" value=\"{{phaseItem.code}}\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"total_blocks\" class=\"inline-block mb-2 text-base font-medium\">Total Blocks</label>
                    <input type=\"number\" id=\"total_blocks\" name=\"total_blocks\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter total blocks\" value=\"{{phaseItem.total_blocks}}\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"total_lots\" class=\"inline-block mb-2 text-base font-medium\">Total Lots</label>
                    <input type=\"number\" id=\"total_lots\" name=\"total_lots\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter subdivision name\" value=\"{{phaseItem.total_lots}}\" required>
                </div>
            </div>
            <div class=\"flex justify-end gap-2 mt-4 p-4\">
                <button type=\"button\" data-modal-close=\"editPhaseModal{{phaseItem.id}}\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Submit</button>
            </div>
        </form>
    </div>
</div>
{% endfor %}
<!--end edit user-->

{% for phaseItem in phase %}
<div id=\"deleteModal{{phaseItem.id}}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deleteModal{{phaseItem.id}}\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"{{asset('assets/images/delete.png')}}\" alt=\"\" class=\"block h-12 mx-auto\">
            <div class=\"mt-5 text-center\">
                <h5 class=\"mb-1\">Are you sure?</h5>
                <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                <div class=\"flex justify-center gap-2 mt-6\">
                <form action=\"{{path('delete_phase_form')}}\" method=\"post\">
                    <input type=\"hidden\" name=\"phase_id\" value=\"{{ phaseItem.id }}\">
                    <button type=\"button\" data-modal-close=\"deleteModal{{phaseItem.id}}\" class=\"bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Yes, Delete It!</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% endfor %}
{% endblock %}
    
{% block javascripts %}

<script src=\"{{ asset('assets/libs/list.js/list.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/list.pagination.js/list.pagination.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/pages/apps-user-list.init.js') }}\"></script>

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}
{# <script>
    \$(document).ready(function() {
        \$('.clickable-row').on('click', function() {
            var target = \$(this).data('target');
            \$(target).toggle();
        });

        \$(document).on('click', '.editable', function() {
            var \$td = \$(this);
            var phaseId = \$td.closest('tr').find('input[name^=\"phase_id\"]').val();
            var blockId = \$td.closest('tr').find('input[name^=\"block_id\"]').val();
            var totalblock = \$td.closest('tr').find('input[name^=\"totalblock\"]').val();
            var originalValue = \$td.closest('tr').find('input[name^=\"total_block\"]').val();
            
            var \$input = \$('<input type=\"number\" style=\"width:20% !important\" class=\"px-3 py-1 text-xs form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"' + originalValue + '\" />');
            //var \$saveButton = \$('<button class=\"px-2 py-1 ml-2 text-xs font-semibold text-white bg-blue-500 rounded save-button\">Save</button>');
            \$td.html(\$input);
            //\$td.append(\$saveButton);
            \$input.focus();

            // Store the original value when input field is focused
            \$input.data('original', originalValue);
            console.log(originalValue)
            \$input.on('blur', function() {
                var newValue = \$(this).val();
                \$td.html(newValue);
                // Optionally, you can save the new value to the server via an AJAX call here
                \$.ajax({
                    type: \"POST\",
                    url: \"/blocks/update_blocks\",
                    data: {
                        // Add any data you want to send to the server
                        phase_id: phaseId,
                        block_id: blockId,
                        total_lots:newValue,
                    },
                    success: function(response) {
                        // Handle the response from the server
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        // Handle errors
                        console.error(error);
                    }
                });
            });

            
        });
    });

</script> #}



<script>
\$(document).ready(function() {
    //showToast('test','bg-yellow-500')
    // Click event handler for editable cells
    \$('.clickable-row').on('click', function() {
        var target = \$(this).data('target');
        \$(target).toggle();
    });

    // Disable submit button after form submission
    \$('form').on('submit', function () {
       var \$submitButton = \$(this).find('button[type=\"submit\"]');
        \$submitButton.prop('disabled', true);
        \$submitButton.css({
            'background-color': '#d1d5db', // Gray background
            'border-color': '#d1d5db', // Gray border
            'color': '#9ca3af', // Gray text
            'cursor': 'not-allowed' // Not-allowed cursor
        });
    });

    \$(document).on('click', '.editable-cell', function() {
        var \$td = \$(this);
        console.log('tr value'+\$td.text())
        var phaseId = \$td.closest('tr').find('input[name^=\"phase_id\"]').val();
        var blockId = \$td.closest('tr').find('input[name^=\"block_id\"]').val();
        var totalLots = parseInt(\$td.closest('tr').find('input[name^=\"totallots\"]').val());
        var originalValue = \$td.closest('tr').find('input[name^=\"total_block\"]').val();
        var tdVal = parseInt(\$td.text());
        var blockTotalLots = calculateTotalLots(phaseId);
        //console.log(blockTotalLots)

        // Create input field for editing
        var \$input = \$('<input type=\"number\" min=\"0\" style=\"width: 50px;\" class=\"px-3 py-1 text-xs form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"' + tdVal + '\" />');
        \$td.html(\$input);
        \$input.focus();

        // Handle focusout event to save the edited value and perform validation
        \$input.on('focusout', function() {
            var newValue = parseInt(\$(this).val());
            console.log(\"new value\"+newValue)
            \$td.html(newValue) // Add class for styling
            if (newValue >= 0 && calculateTotalLots(phaseId) <= totalLots) {
                // Update cell content with new value and apply green color
                \$td.html(newValue).removeClass('text-red-500 font-semibold');
                \$td.closest('tr').find('input[name^=\"total_block\"]').val(newValue);
                // Perform AJAX request to update total lots
                \$.ajax({
                    type: \"POST\",
                    url: \"/blocks/update_blocks\",
                    data: {
                        phase_id: phaseId,
                        block_id: blockId,
                        total_lots: newValue,
                    },
                    success: function(response) {
                        console.log(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            } else {
                // If newValue is not valid, revert back to original value and apply red color
                \$td.html(tdVal) // Add class for styling
                alert('Total Lots must be a non-negative number and less than ' + totalLots); // Display alert or handle validation message
            }
        });
    });

    /*\$('#subdivisionSelect').change(function() {
        var selectedOption = \$(this).find('option:selected');
        var subdivisionId = selectedOption.val();
        var remainingLots = \$('.remaining-lots[data-subdivision-id=\"' + subdivisionId + '\"]').val();

        console.log('Remaining Lots:', remainingLots);

        // Example validation logic
        if (parseInt(remainingLots) < 10) {
            alert('Warning: Low remaining lots!');
        }
    });*/

    \$('#total_lot').change(function() {
        var selectedOption = \$(\"#subdivisionSelect\").find('option:selected');
        var subdivisionId = selectedOption.val();
        var remainingLots = \$('.remaining-lots[data-subdivision-id=\"' + subdivisionId + '\"]').val();
        var total_lots = \$(this).val();

        console.log('Remaining Lots:', remainingLots);
        console.log('Total Lots:', total_lots);
        // Example validation logic
        if (parseInt(remainingLots) < parseInt(total_lots)) {
            Toastify({
                newWindow: true,
                text: 'Inputed lots is greater than remaining lots.',
                gravity: 'top',
                position: 'right',
                className: \"bg-yellow-500\",
                stopOnFocus: true,
                offset: {
                    x: 0, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                    y: 0, // vertical axis - can be a number or a string indicating unity. eg: '2em'
                },
                duration: 3000,
                close: true,
            }).showToast();
            \$('#add_submit').prop('true', false);
            \$('#add_submit').removeClass('text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50');

            \$('#add_submit').removeClass('text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20');

            \$('#add_submit').addClass('text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50');

        }
        else{
            \$('#add_submit').prop('disabled', false);
            \$('#add_submit').removeClass('text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50');

            \$('#add_submit').removeClass('text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20');
            
            \$('#add_submit').addClass('text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20');
        }
    });


    function calculateTotalLots(phaseId) {
        let total = 0;
        // Iterate through each tr in the table
        \$('#blockTable'+phaseId+' tbody tr').each(function() {
            // Find the td element with class .editable-cell within the current tr
            let totalLotsCell = \$(this).find('td.editable-cell');
            // Get the text content of the td element and parse as integer
            let totalLots = parseInt(totalLotsCell.text().trim()) || 0;
            total += totalLots;
            console.log(totalLots)
        });
        return total;
    }
});
</script>
{% endblock %}", "project_management/apps-phase.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\project_management\\apps-phase.html.twig");
    }
}
