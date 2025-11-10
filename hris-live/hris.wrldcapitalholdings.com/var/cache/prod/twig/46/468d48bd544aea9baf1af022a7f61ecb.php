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

/* phil_health_config/philhealth_config.html.twig */
class __TwigTemplate_2ab1eb04d4ab5fbdecd07b8faf8ace7e extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "phil_health_config/philhealth_config.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Model Type";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "PhilHealth", "title" => "PhilHealth Configuration"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"divisionTable\">
                            ";
        // line 12
        yield "                            ";
        if (Twig\Extension\CoreExtension::testEmpty(($context["philhealthConfigs"] ?? null))) {
            // line 13
            yield "                                <div class=\"card-body\">
                                    <div class=\"flex items-center\">
                                        <h6 class=\"text-15 grow\">PhilHealth Configuration List</h6>
                                        <div class=\"shrink-0\">
                                            <button data-modal-target=\"addPhilHealthConfig\" type=\"button\" class=\"add-philhealth_config text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Add PhilHealth Config</span></button>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 22
        yield "                            
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
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employee_share\">Base Rate</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employee_share\">Employee Share</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Employer Share</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employee_share\">Minimum Cap</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Maximum Cap</th>
                                                ";
        // line 44
        yield "                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                        ";
        // line 48
        yield "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["philhealthConfigs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["philHealthItem"]) {
            // line 49
            yield "                                                    <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "base_rate", [], "any", false, false, false, 50), "html", null, true);
            yield " %</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "employee_share", [], "any", false, false, false, 51), "html", null, true);
            yield " %</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "employer_share", [], "any", false, false, false, 52), "html", null, true);
            yield " %</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "minimum_cap", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "maximum_cap", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                            <div class=\"action-philhealth_config relative dropdown\">
                                                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                    <li>
                                                                        <a data-modal-target=\"editPhilHealthConfig";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "id", [], "any", false, false, false, 60), "html", null, true);
            yield "\" class=\"edit-philhealth_config block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                    </li>
                                                                    ";
            // line 65
            yield "                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['philHealthItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "                                        </tbody>
                                    </table>
                                    <div class=\"noresult\" style=\"display: none\">
                                        <div class=\"py-6 text-center\">
                                            <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                            <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                            ";
        // line 77
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->


<div id=\"addPhilHealthConfig\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add PhilHealth Configuration</h5>
            <button data-modal-close=\"addPhilHealthConfig\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_phil_create_health_config");
        yield "\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <label for=\"base_rate\" class=\"inline-block mb-2 text-base font-medium\">Base Rate</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" min=\"0\" id=\"base_rate\" name=\"base_rate\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Employee Share\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"employee_share\" class=\"inline-block mb-2 text-base font-medium\">Employee Share</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" min=\"0\" id=\"employee_share\" name=\"employee_share\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Employee Share\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"employer_share\" class=\"inline-block mb-2 text-base font-medium\">Employer Share</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" min=\"0\" id=\"employer_share\" name=\"employer_share\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Employer Share\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"minimum_cap\" class=\"inline-block mb-2 text-base font-medium\">Minimum Cap</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" min=\"0\" id=\"minimum_cap\" name=\"minimum_cap\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Minimum Cap\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"maximum_cap\" class=\"inline-block mb-2 text-base font-medium\">Maximum Cap</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" min=\"0\" id=\"maximum_cap\" name=\"maximum_cap\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Maximum Cap\" required>
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" id=\"close-modal\" data-modal-close=\"addPhilHealthConfig\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div><!--end add user-->

";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["philhealthConfigs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["philHealthItem"]) {
            // line 131
            yield "<div id=\"editPhilHealthConfig";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "id", [], "any", false, false, false, 131), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Model Type</h5>
            <button data-modal-close=\"editPhilHealthConfig";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "id", [], "any", false, false, false, 135), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
            // line 138
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_phil_update_health_config");
            yield "\" method=\"post\">
            <input type=\"hidden\" name=\"philhealth_config_id\" value=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "id", [], "any", false, false, false, 139), "html", null, true);
            yield "\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <label for=\"base_rate\" class=\"inline-block mb-2 text-base font-medium\">Base Rate</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" min=\"0\" id=\"base_rate\" name=\"base_rate\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Employee Share\" value=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "base_rate", [], "any", false, false, false, 144), "html", null, true);
            yield "\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"employee_share\" class=\"inline-block mb-2 text-base font-medium\">Employee Share</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" min=\"0\" id=\"employee_share\" name=\"employee_share\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Employee Share\" value=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "employee_share", [], "any", false, false, false, 149), "html", null, true);
            yield "\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"employer_share\" class=\"inline-block mb-2 text-base font-medium\">Employer Share</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" min=\"0\" id=\"employer_share\" name=\"employer_share\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Employer Share\" value=\"";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "employer_share", [], "any", false, false, false, 154), "html", null, true);
            yield "\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"minimum_cap\" class=\"inline-block mb-2 text-base font-medium\">Minimum Cap</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" min=\"0\" id=\"minimum_cap\" name=\"minimum_cap\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Minimum Cap\" value=\"";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "minimum_cap", [], "any", false, false, false, 159), "html", null, true);
            yield "\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"maximum_cap\" class=\"inline-block mb-2 text-base font-medium\">Maximum Cap</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" min=\"0\" id=\"maximum_cap\" name=\"maximum_cap\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Maximum Cap\" value=\"";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "maximum_cap", [], "any", false, false, false, 164), "html", null, true);
            yield "\" required>
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" id=\"close-modal\" data-modal-close=\"editPhilHealthConfig";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "id", [], "any", false, false, false, 168), "html", null, true);
            yield "\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div><!--end add user-->

<div id=\"deletePhilHealthConfig";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "id", [], "any", false, false, false, 176), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deletePhilHealthConfig\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/delete.png"), "html", null, true);
            yield "\" alt=\"\" class=\"block h-12 mx-auto\">
            <form action=\"";
            // line 183
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_phil_delete_health_config");
            yield "\" method=\"post\">
                <input type=\"hidden\" name=\"philhealth_config_id\" value=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["philHealthItem"], "id", [], "any", false, false, false, 184), "html", null, true);
            yield "\">
                <div class=\"mt-5 text-center\">
                    <h5 class=\"mb-1\">Are you sure?</h5>
                    <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                    <div class=\"flex justify-center gap-2 mt-6\">
                        <button type=\"reset\" data-modal-close=\"deletePhilHealthConfig\" class=\"bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10\">Cancel</button>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['philHealthItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        yield "

";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["status"], "method", false, false, false, 200));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 201
            yield "    <div class=\"hidden\" id=\"status\" data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        yield "
";
        return; yield '';
    }

    // line 206
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 207
        yield "
<script src=\"";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-list-init.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
<script src=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 215
        yield "<script>
\$(document).ready(function () {

              // Handle input event on number inputs
    \$(document).on('input', 'input[type=\"number\"]', function() {
        // Get current value
        let value = \$(this).val();
        
        // If value contains negative sign, remove it
        if (value.includes('-')) {
        value = value.replace(/-/g, '');
        \$(this).val(value);
        }
    });
    
    // Prevent typing the minus key
    \$(document).on('keydown', 'input[type=\"number\"]', function(e) {
        if (e.keyCode === 189 || e.key === '-') {
        e.preventDefault();
        return false;
        }
    });
    
    // Process existing inputs on page load
    \$('input[type=\"number\"]').each(function() {
        let value = \$(this).val();
        if (value.includes('-')) {
        \$(this).val(value.replace(/-/g, ''));
        }
    });

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
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "phil_health_config/philhealth_config.html.twig";
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
        return array (  393 => 215,  389 => 213,  383 => 210,  379 => 209,  375 => 208,  372 => 207,  368 => 206,  362 => 203,  353 => 201,  349 => 200,  345 => 198,  325 => 184,  321 => 183,  317 => 182,  308 => 176,  297 => 168,  290 => 164,  282 => 159,  274 => 154,  266 => 149,  258 => 144,  250 => 139,  246 => 138,  240 => 135,  232 => 131,  228 => 130,  188 => 93,  170 => 77,  162 => 70,  152 => 65,  147 => 60,  138 => 54,  134 => 53,  130 => 52,  126 => 51,  122 => 50,  119 => 49,  114 => 48,  109 => 44,  86 => 22,  75 => 13,  72 => 12,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "phil_health_config/philhealth_config.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\phil_health_config\\philhealth_config.html.twig");
    }
}
