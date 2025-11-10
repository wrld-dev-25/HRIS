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

/* project_management/subdivision-wizard.html.twig */
class __TwigTemplate_f4bf1c1bda625a1b6fc3c91bc01bfb59 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "project_management/subdivision-wizard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Subdivision Wizard";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Subdivision", "title" => "Subdivision Wizard"]);
        yield "

            <div class=\"grid grid-cols-1 2xl:grid-cols-12\">
                <div class=\"col-span-12 2xl:col-start-3 2xl:col-span-8\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <ul class=\"grid grid-cols-1 gap-3 lg:grid-cols-4 nav-tabs form-wizard\">
                                <li class=\"group/item active\">
                                    <a href=\"#!\" data-target=\"subdivisionDetails\" data-tab-id=\"1\" class=\"block px-4 py-5 text-center rounded-md text-slate-500 bg-slate-50 dark:text-zink-200 dark:bg-zink-600 group-[.active]/item:bg-custom-500 group-[.active]/item:text-custom-50\">
                                        <i data-lucide=\"rocket\" class=\"block h-6 mx-auto fill-slate-200 dark:fill-zink-400 group-[.active]/item:fill-slate-200 dark:group-[.active]/item:fill-custom-500\"></i>
                                        <span class=\"block mt-3 font-medium text-15\">1. Subdivision Details</span>
                                    </a>
                                </li>
                                <li class=\"group/item\">
                                    <a href=\"#!\" data-target=\"categoryDetails\" data-tab-id=\"2\" class=\"block px-4 py-5 text-center rounded-md text-slate-500 bg-slate-50 dark:text-zink-200 dark:bg-zink-600 group-[.active]/item:bg-custom-500 group-[.active]/item:text-custom-50\">
                                        <i data-lucide=\"map-pin\" class=\"block h-6 mx-auto fill-slate-200 dark:fill-zink-400 group-[.active]/item:fill-slate-200 dark:group-[.active]/item:fill-custom-500\"></i>
                                        <span class=\"block mt-3 font-medium text-15\">2. Category Details</span>
                                    </a>
                                </li>
                                <li class=\"group/item\">
                                    <a href=\"#!\" data-target=\"projectDetails\" data-tab-id=\"3\" class=\"block px-4 py-5 text-center rounded-md text-slate-500 bg-slate-50 dark:text-zink-200 dark:bg-zink-600 group-[.active]/item:bg-custom-500 group-[.active]/item:text-custom-50\">
                                        <i data-lucide=\"user-2\" class=\"block h-6 mx-auto fill-slate-200 dark:fill-zink-400 group-[.active]/item:fill-slate-200 dark:group-[.active]/item:fill-custom-500\"></i>
                                        <span class=\"block mt-3 font-medium text-15\">3. Project Details</span>
                                    </a>
                                </li>
                                
                                ";
        // line 38
        yield "                            </ul>

                            <div class=\"mt-5 tab-content\">
                            <form action=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("wizard_project");
        yield "\" method=\"post\">
                                <div class=\"block tab-pane\" data-tab-id=\"1\" id=\"subdivisionDetails\">
                                    <h5 class=\"mb-3\">Subdivision Details</h5>
                                        ";
        // line 45
        yield "                                        ";
        // line 70
        yield "                                        <!--end grid-->
                                        <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2\">
                                            <div>
                                                <label for=\"subcode\" data-subcode=\"\" id=\"label_subcode\" class=\"inline-block mb-2 text-base font-medium\">Subdivision (Code : Name)<span class=\"text-red-500\">*</span></label>
                                                <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-subid-code\" name=\"subid_code\">
                                                    <option value=\"\">Select Subdivision</option>
                                                    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subdivisions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subdivisionItem"]) {
            // line 77
            yield "                                                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "id", [], "any", false, false, false, 77), "html", null, true);
            yield "\" data-subcode=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "subdivisionCode", [], "any", false, false, false, 77), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "subdivisionCode", [], "any", false, false, false, 77), "html", null, true);
            yield " : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "name", [], "any", false, false, false, 77), "html", null, true);
            yield "</option>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subdivisionItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                                                </select>
                                                <div id=\"nameError\" class=\"text-red-500\"></div>

                                            </div>
                                            ";
        // line 93
        yield "                                            <div>
                                                <label for=\"sublocation\" class=\"inline-block mb-2 text-base font-medium\">Location<span class=\"text-red-500\">*</span></label>
                                                <input type=\"text\" id=\"sublocation\" name=\"sublocation\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter subdivision location\" disabled>
                                                <div id=\"usernameError\" class=\"text-red-500\"></div>
                                            </div>
                                            <div>
                                                <label for=\"subdescription\" class=\"inline-block mb-2 text-base font-medium\">Description<span class=\"text-red-500\">*</span></label>
                                                <input type=\"text\" id=\"subdescription\" name=\"subdescription\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter subdivision description\" disabled>
                                                <div id=\"usernameError\" class=\"text-red-500\"></div>
                                            </div>
                                            <div>
                                                <label for=\"subphase\" class=\"inline-block mb-2 text-base font-medium\">Phase<span class=\"text-red-500\">*</span></label>
                                                <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"subphase\" name=\"subphase\" >
                                                <option value=\"\"></option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for=\"phaseblocks\" class=\"inline-block mb-2 text-base font-medium\">Total Blocks<span class=\"text-red-500\">*</span></label>
                                                <input type=\"text\" id=\"phaseblocks\" name=\"phaseblocks\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Total Blocks\" disabled>
                                                <div id=\"usernameError\" class=\"text-red-500\"></div>
                                            </div>
                                            <div>
                                                <label for=\"phaselot\" class=\"inline-block mb-2 text-base font-medium\">Total Lots<span class=\"text-red-500\">*</span></label>
                                                <input type=\"text\" id=\"phaselot\" name=\"phaselot\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Total Lots\" disabled>
                                                <div id=\"usernameError\" class=\"text-red-500\"></div>
                                            </div>
                                        </div>
                                        <!--end grid-->
                                </div>
                                <div class=\"block tab-pane hidden\" data-tab-id=\"2\" id=\"categoryDetails\">
                                    <h5 class=\"mb-3\">Category Details</h5>
                                        <div class=\"mb-3\">
                                            <label for=\"darkDefaultSwitch\" class=\"inline-block mb-2 text-base font-medium\">Overhead</label>
                                            <div class=\"relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2\">
                                                <input type=\"checkbox\" name=\"category_overhead\" id=\"category_overhead\" class=\"absolute block size-5 transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer border-slate-200 dark:border-zink-500 bg-white/80 dark:bg-zink-400 peer/published checked:bg-white dark:checked:bg-white ltr:checked:right-0 rtl:checked:left-0 checked:bg-none checked:border-slate-700 dark:checked:border-slate-700 arrow-none\" checked>
                                                <label for=\"category_overhead\" class=\"block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-slate-700 peer-checked/published:border-slate-700\"></label>
                                            </div>
                                        </div>
                                        <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2\">
                                            <div>
                                                <label for=\"categorymodel\" class=\"inline-block mb-2 text-base font-medium\">Category model<span class=\"text-red-500\">*</span></label>
                                                <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"categorymodel\" name=\"categorymodel\" >
                                                <option value=\"\"></option>
                                                ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["models"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["modelItem"]) {
            // line 137
            yield "                                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modelItem"], "id", [], "any", false, false, false, 137), "html", null, true);
            yield "\" data-type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["modelItem"], "model_type", [], "any", false, false, false, 137), "code", [], "any", false, false, false, 137), "html", null, true);
            yield "\" data-option=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["modelItem"], "model_type", [], "any", false, false, false, 137), "add_option", [], "any", false, false, false, 137), "html", null, true);
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modelItem"], "name", [], "any", false, false, false, 137), "html", null, true);
            yield "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modelItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        yield "                                                </select>
                                            </div>
                                            <div hidden>
                                                <label for=\"categorycode\" class=\"inline-block mb-2 text-base font-medium\">Code<span class=\"text-red-500\">*</span></label>
                                                <input type=\"text\" id=\"categorycode\" name=\"categorycode\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter category code\">
                                                <div id=\"nameError\" class=\"text-red-500\"></div>
                                            </div>
                                            <div>
                                                <label for=\"categorydesc\" class=\"inline-block mb-2 text-base font-medium\">Description</label>
                                                <input type=\"text\" id=\"categorydesc\" name=\"categorydesc\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter category description\">
                                                <div id=\"usernameError\" class=\"text-red-500\"></div>
                                            </div>
                                            <div>
                                                <label for=\"categoryblock\" class=\"inline-block mb-2 text-base font-medium\">Block</label>
                                                <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"categoryblock\" name=\"categoryblock\">
                                                <option value=\"\"></option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for=\"categorylot\" class=\"inline-block mb-2 text-base font-medium\">Lot</label>
                                                <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"categorylot\" name=\"categorylot\">
                                                <option value=\"\"></option>
                                                </select>
                                            </div>
                                            <div>
                                                <label for=\"category_owner\" class=\"inline-block mb-2 text-base font-medium\">Owner</label>
                                                <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" name=\"category_owner\">
                                                <option value=\"\"></option>
                                                ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["owner"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ownerItem"]) {
            // line 168
            yield "                                                    <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ownerItem"], "id", [], "any", false, false, false, 168), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ownerItem"], "firstname", [], "any", false, false, false, 168), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ownerItem"], "lastname", [], "any", false, false, false, 168), "html", null, true);
            yield "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ownerItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        yield "                                                </select>
                                            </div>
                                            
                                        </div>
                                        <!--end grid-->
                                </div>
                                <div class=\"block tab-pane hidden\" data-tab-id=\"3\" id=\"projectDetails\">
                                    <h5 class=\"mb-3\">Project Details</h5>
                                        <div class=\"grid grid-cols-1 gap-4 md:grid-cols-2\">
                                            <div>
                                                <label for=\"projectcode\" class=\"inline-block mb-2 text-base font-medium\">Project code<span class=\"text-red-500\">*</span></label>
                                                <input type=\"text\" id=\"projectcode\" name=\"projectcode\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter project code\" >
                                                <div id=\"nameError\" class=\"text-red-500\"></div>

                                            </div>
                                            <div>
                                                <label for=\"projectname\" class=\"inline-block mb-2 text-base font-medium\">Project name<span class=\"text-red-500\">*</span></label>
                                                <input type=\"text\" id=\"projectname\" name=\"projectname\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter project name\" >
                                                <div id=\"usernameError\" class=\"text-red-500\"></div>
                                            </div>
                                            <div>
                                                <label for=\"projectdesc\" class=\"inline-block mb-2 text-base font-medium\">Project Description<span class=\"text-red-500\">*</span></label>
                                                <input type=\"text\" id=\"projectdesc\" name=\"projectdesc\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter project name\" >
                                                <div id=\"usernameError\" class=\"text-red-500\"></div>
                                            </div>
                                        </div>
                                        <!--end grid-->
                                </div>
                                
                                ";
        // line 206
        yield "                            
                            </div>
                            <div class=\"flex justify-between gap-2 mt-5\">
                                <button type=\"button\" data-action=\"prev\" class=\"invisible text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50\"><i data-lucide=\"move-left\" class=\"inline-block h-4 mr-1\"></i> <span class=\"align-middle\">Previous</span></button>
                                <button type=\"button\" data-action=\"next\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><span class=\"align-middle\">Next</span> <i data-lucide=\"move-right\" class=\"inline-block h-4 ml-1\"></i></button>
                                <button type=\"submit\" data-action=\"finish\" class=\"hidden text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><span class=\"align-middle\">Finish</span> <i data-lucide=\"move-right\" class=\"inline-block h-4 ml-1\"></i></button>
                            </div>
                            </form>
                        </div>
                    </div><!--end card-->
                </div>
            </div>

";
        return; yield '';
    }

    // line 221
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 222
        yield ((array_key_exists("javascriptSnippet", $context)) ? (Twig\Extension\CoreExtension::default(($context["javascriptSnippet"] ?? null), "")) : (""));
        yield "
<script src=\"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/form-wizard.init.js"), "html", null, true);
        yield "\"></script>
<!-- App js -->
<script src=\"";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 227
        yield "<script>
        \$(document).ready(function () {
            // Function to show toast message
            function showToast(message, className) {
                Toastify({
                    newWindow: true,
                    text: message,
                    gravity: 'top',
                    position: 'right',
                    className: className,
                    stopOnFocus: true,
                    offset: {
                        x: 0, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                        y: 0, // vertical axis - can be a number or a string indicating unity. eg: '2em'
                    },
                    duration: 3000,
                    close: true,
                }).showToast();
            }

            // Listen for form submission
            \$('form').on('submit', function (event) {
                var isValid = true;
                var firstInvalidElement = null;

                const subdivision_code = \$('#choices-subid-code').val();
                const phase = \$('#subphase').val();
                const category_model = \$('#categorymodel').val();
                const proj_code = \$('#projectcode').val();
                const proj_name = \$('#projectname').val();
                const proj_desc = \$('#projectdesc').val();


                if(!subdivision_code || subdivision_code == ''){
                    showToast('Please select a subdivision code', 'bg-red-500');
                    isValid = false;
                    firstInvalidElement = \$('#choices-subid-code');
                    event.preventDefault();
                }

                if(!phase || phase == ''){
                    showToast('Please select a phase', 'bg-red-500');
                    isValid = false;
                    firstInvalidElement = \$('#subphase');
                    event.preventDefault();
                }

                if(!category_model || category_model == ''){
                    showToast('Please select a category model', 'bg-red-500');
                    isValid = false;
                    firstInvalidElement = \$('#categorymodel');
                    event.preventDefault();
                }

                if(!proj_code || proj_code == ''){
                    showToast('Please enter a project code', 'bg-red-500');
                    isValid = false;
                    firstInvalidElement = \$('#projectcode');
                    event.preventDefault();
                }

                if(!proj_name || proj_name == ''){
                    showToast('Please enter a project name', 'bg-red-500');
                    isValid = false;
                    firstInvalidElement = \$('#projectname');
                    event.preventDefault();
                }

                if(!proj_desc || proj_desc == ''){
                    showToast('Please enter a project description', 'bg-red-500');
                    isValid = false;
                    firstInvalidElement = \$('#projectdesc');
                    event.preventDefault();
                }
            });
        });

        // Function to check if Choices.js is already initialized on an element
        function initializeChoices(selector) {
            var \$element = \$(selector);
            if (!\$element.length || \$element.hasClass('choices__input')) {
                console.log(\"initialized\")
                return; // Choices.js already initialized on this element

            }
            return new Choices(\$element[0]);
        }

        // Initialize Choices.js on the select elements
        var subNameSelect = initializeChoices('select[name=\"subid_name\"]');
        var subIdCodeSelect = initializeChoices('select[name=\"subid_code\"]');
        //var subphaseSelect = initializeChoices('select[name=\"subphase\"]');

        console.log('Sub Name Select:', subNameSelect);
        console.log('Sub ID Code Select:', subIdCodeSelect);
        //console.log('Sub Phase Select:', subphaseSelect);

        // Function to update total blocks and total lots based on selected phase
        function updateTotals(phaseId) {
            // Find the phase object based on phaseId
            var phaseObj = phase.phase.find(function(phase) {
                return phase.id == phaseId;
            });

            // If phaseObj exists
            if (phaseObj) {
                var totalBlocks = phaseObj.total_blocks;
                var totalLots = phaseObj.total_lots;

                // Update total blocks and total lots values
                \$('#phaseblocks').val(totalBlocks);
                \$('#phaselot').val(totalLots);
            }
        }

        // Function to update location value and choices in subNameSelect based on selected subdivision code
        function updateSubdivisionFields(subdivisionId) {
            // Find the subdivision object based on subdivisionId
            var subdivisionObj = subdivision.subdivisions.find(function(subdiv) {
                return subdiv.id == subdivisionId;
            });

            // If subdivisionObj exists
            if (subdivisionObj) {
                var location = subdivisionObj.location;
                var description = subdivisionObj.description;
                // Update location input field value using jQuery
                \$('#sublocation').val(location);
                \$('#subdescription').val(description);

                // Check if subNameSelect is defined
                if (subNameSelect) {
                    // Update the subNameSelect choices with subdivisions corresponding to the selected subdivision code
                    var subdivisionOptions = subdivisionObj.phases.map(function(phase) {
                        return { value: phase.id, label: phase.name };
                    });
                    subNameSelect.setChoices(subdivisionOptions, 'value', 'label', true);
                } else {
                    console.log(\"subNameSelect is not defined\");
                }
            } else {
                \$('#sublocation').val(\"\");
                \$('#subdescription').val(\"\");
                console.log(\"Subdivision not found\");
            }
        }

        function updatePhase(subdivisionId){
            var subdivisionObj = subdivision.subdivisions.find(function(subdiv) {
                return subdiv.id == subdivisionId;
            });

            // If subdivisionObj exists
            if (subdivisionObj) {
                // Get the phases for the selected subdivision
                var phases = subdivisionObj.phases;
                var subcode = subdivisionObj.subdivisionCode

                console.log(subcode + \"This is subcode\")
                \$('#label_subcode').attr('data-subcode', subcode);

                // Get the phase select element
                var phaseSelect = document.getElementById('subphase');
                // Clear existing options
                phaseSelect.innerHTML = '';
                console.log(\"phases: \", phases)
                // Add a default option
                var defaultOption = document.createElement('option');
                defaultOption.value = '';
                defaultOption.text = 'Select Phase';
                phaseSelect.appendChild(defaultOption);

                // Add options for each phase
                phases.forEach(function(phase) {
                    var option = document.createElement('option');
                    option.value = phase.id;
                    option.text = phase.name;
                    option.setAttribute('data-phasecode', phase.code);
                    phaseSelect.appendChild(option);
                });
            } else {
                phaseSelect.innerHTML = '';
                console.log(\"Subdivision not found\");
            }
        }

        function updateSelectBlocks(subdivisionId, phaseId) {
            // Find the subdivision object by its ID
            var subdivisionObj = subdivision.subdivisions.find(function(subdivision) {
                return subdivision.id == subdivisionId;
            });

            // Log the subdivision object to debug
            console.log('Subdivision Object:', subdivisionObj);

            if (subdivisionObj) {
                // Find the phase object within the found subdivision
                var phaseObj = subdivisionObj.phases.find(function(phase) {
                    return phase.id == phaseId;
                });

                // Log the phase object to debug
                console.log('Phase Object:', phaseObj);

                if (phaseObj && phaseObj.blocks_list) {
                    var blocks_list = phaseObj.blocks_list;
                    var selectBlock = \$('#categoryblock');
                    var selectLot = \$('#categorylot');
                    selectBlock.empty();
                    selectLot.empty();

                    // Log blocks_list to debug
                    console.log('Blocks List:', blocks_list);
                    selectBlock.append('<option value=\"\"></option>');
                    // Update options for blocks
                    blocks_list.forEach(function(block) {
                        selectBlock.append('<option value=\"' + block.id + '\">' + block.block_name + '</option>');
                    });

                    // Update options for lots based on the selected block
                    selectBlock.on('change', async function() {
                        var selectedBlockId = \$(this).val();
                        console.log(\"selected block id\" + selectedBlockId)
                        var selectedBlock = blocks_list.find(function(block) {
                            return block.id == selectedBlockId;
                        });

                        if (selectedBlock) {
                            selectLot.empty();
                            /*for (var i = 1; i <= selectedBlock.total_lots; i++) {
                                selectLot.append('<option value=\"' + i + '\">Lot ' + i + '</option>');
                            }*/
                            var response = await apiCall('GET', 'api/blocks/' + selectedBlockId, \"\");
                            console.log('API Call Response:', response);
                            selectLot.append('<option value=\"\"></option>');
                            response.blocks.lots.forEach(function(lot) {
                                selectLot.append('<option value=\"' + lot.id + '\">' + lot.lot_name + '</option>');
                            });
                        }
                        else{
                            console.error('Selected block is undefined');
                        }
                    });

                    // Trigger change event to populate lots for the first block initially
                    selectBlock.trigger('change');
                } else {
                    console.error('Phase Object or Blocks List is undefined');
                }
            } else {
                console.error('Subdivision Object is undefined');
            }
        }

        // Listen for change in the phase input field
        \$(document).on('change', 'select[name=\"subphase\"]', function() {
            // Get the selected phase ID
            var subdivisionId = \$('#choices-subid-code').val();
            var phaseId = \$(this).val();
            console.log('subid:', subdivisionId);
            // Call the function to update total blocks and total lots
            updateTotals(phaseId);
            updateSelectBlocks(subdivisionId,phaseId);
        });

        // Listen for change in the select element for subdivision code
        \$(document).on('change', 'select[name=\"subid_code\"]', function() {
            // Get the selected subdivision code
            var subdivisionId = \$(this).val();
            console.log('Subdivision changed:', subdivisionId);
            // Call the function to update location value and choices in subNameSelect
            updateSubdivisionFields(subdivisionId);
            updatePhase(subdivisionId);
        });

        \$(document).on('change', 'select[name=\"subid_name\"]', function() {
            // Get the selected subdivision code
            var subdivisionId = \$(this).val();
            console.log('Subdivision changed:', subdivisionId);
            // Call the function to update location value and choices in subNameSelect
            updateSubdivisionFields(subdivisionId);
            updatePhase(subdivisionId);
        });

        ";
        // line 517
        yield "        function updateDescription() {
            var model = \$('select[name=\"categorymodel\"] option:selected').text().trim();
            var block = \$('select[name=\"categoryblock\"] option:selected').text().trim();
            var lot = \$('select[name=\"categorylot\"] option:selected').text().trim();
            var owner = \$('select[name=\"category_owner\"] option:selected').text().trim();
            var isOverheadChecked = \$('input[name=\"category_overhead\"]').is(':checked');

            var blockAndLot = block + \" \" + lot;
            var descriptionParts = [];
            if(model != \"\"){
                console.log('model')
                descriptionParts.push(model);
            }

            if(block != \"\" && lot != \"\"){
                console.log('block')
                descriptionParts.push(blockAndLot);
            }

            if (owner != \"\") {
                console.log('owner')
                descriptionParts.push(owner);
            }

            if (isOverheadChecked) {
                descriptionParts.push(\"OVERHEAD\");
            }

            if(descriptionParts.length > 1){
                console.log(descriptionParts)
                var description = descriptionParts.join(\" \");
            }
            else{
                var description = descriptionParts
            }

            \$('#categorydesc').val(description);
        }

        function updateCategoryVisibility() {
            var selectedOption = \$('select[name=\"categorymodel\"]').find('option:selected');
            var model_type = selectedOption.data('option');
            console.log('option')
            console.log(selectedOption)

            if(model_type == \"1\"){
                \$('select[name=\"categoryblock\"]').closest('div').show();
                \$('select[name=\"categorylot\"]').closest('div').show();
                \$('select[name=\"category_owner\"]').closest('div').show();
            }
            else{
                \$('select[name=\"categoryblock\"]').closest('div').hide();
                \$('select[name=\"categoryblock\"]').val('');  // Unset the selected option
                \$('select[name=\"categorylot\"]').closest('div').hide();
                \$('select[name=\"categorylot\"]').val('');  // Unset the selected option
                \$('select[name=\"category_owner\"]').closest('div').hide();
                \$('select[name=\"category_owner\"]').val('');  // Unset the selected option
            }
        }

        function updateProjectCode(){
            var projectcode = \"\";
            var sub_code =  \$('#label_subcode').attr('data-subcode');
            var phase_code = \$('select[name=\"subphase\"] option:selected').attr('data-phasecode');
            var model = \$('select[name=\"categorymodel\"] option:selected').text().trim().substring(0, 3);
            var block = \$('select[name=\"categoryblock\"] option:selected').text().trim();
            var lot = \$('select[name=\"categorylot\"] option:selected').text().trim(); //.match(/\\d+/)

            console.log('project code')
            console.log('project code ' + phase_code)

            var projectCodeParts = [sub_code,phase_code];
            
            if(block != \"\"){
                console.log('block code: ' + block)
                projectCodeParts.push('B'+block.match(/\\d+/));
            }

            if(lot != \"\"){
                console.log('lot code: ' + lot)
                projectCodeParts.push('L'+lot.match(/\\d+/));
            }

            if(model != \"\"){
                projectCodeParts.push(model);
            }

            if(projectCodeParts.length > 1){
                projectcode = projectCodeParts.join(\"\");
            }
            else{
                projectcode = descriptionParts
            }
            console.log('project code: ' + projectcode)
            \$('#projectcode').val(projectcode);
        }

        //update functions if input/select value is changed
        \$('select[name=\"categorymodel\"]').on('change', updateCategoryVisibility);
        \$('input[name=\"category_overhead\"]').on('change',updateDescription);
        \$('select[name=\"categorymodel\"]').on('change', updateDescription);
        \$('select[name=\"categoryblock\"]').on('change', updateDescription);
        \$('select[name=\"categorylot\"]').on('change', updateDescription);
        \$('select[name=\"category_owner\"]').on('change', updateDescription);
        //update project code
        ";
        // line 623
        yield "        \$('select[name=\"sub_code\"]').on('change', updateProjectCode);
        \$('select[name=\"categorymodel\"]').on('change', updateProjectCode);
        \$('select[name=\"categorymodel\"]').on('change', updateProjectCode);
        \$('select[name=\"categoryblock\"]').on('change', updateProjectCode);
        \$('select[name=\"categorylot\"]').on('change', updateProjectCode);
        
</script>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "project_management/subdivision-wizard.html.twig";
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
        return array (  709 => 623,  602 => 517,  316 => 227,  312 => 225,  307 => 223,  303 => 222,  299 => 221,  281 => 206,  250 => 170,  237 => 168,  233 => 167,  203 => 139,  188 => 137,  184 => 136,  139 => 93,  133 => 79,  118 => 77,  114 => 76,  106 => 70,  104 => 45,  98 => 41,  93 => 38,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project_management/subdivision-wizard.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\project_management\\subdivision-wizard.html.twig");
    }
}
