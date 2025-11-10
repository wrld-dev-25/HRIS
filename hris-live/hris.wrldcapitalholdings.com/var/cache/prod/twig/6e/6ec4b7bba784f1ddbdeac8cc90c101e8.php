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

/* sss_config/sss_config.html.twig */
class __TwigTemplate_d573c7fd72950443111e767f3dba378a extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "sss_config/sss_config.html.twig", 1);
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "SSS", "title" => "SSS Configuration"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"divisionTable\">
                            <div class=\"card-body\">
                                <div class=\"flex items-center\">
                                    <h6 class=\"text-15 grow\">SSS Configuration List</h6>
                                    <div class=\"shrink-0 mx-5\">
                                        <button data-modal-target=\"importCSV\" type=\"button\" class=\"add-sss_config text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Import SSS Table</span></button>
                                    </div>

                                    <div class=\"shrink-0\">
                                        <button data-modal-target=\"addSSSConfig\" type=\"button\" class=\"add-sss_config text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Add SSS Config</span></button>
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
                                                <th rowspan=\"2\" class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employee_share\">Range of Compensation</th>
                                                <th colspan=\"2\" class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort text-center\" data-sort=\"employer_share\">Monthly Salary Credit</th>
                                                <th colspan=\"2\" class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort text-center\" data-sort=\"employer_share\">Regular SS</th>
                                                <th colspan=\"2\" class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort text-center\" data-sort=\"employer_share\">EC</th>
                                                <th colspan=\"2\" class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort text-center\" data-sort=\"employer_share\">WISP</th>
                                                <th colspan=\"2\" class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort text-center\" data-sort=\"employer_share\">Total</th>
                                                <th rowspan=\"2\" class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employee_share\">Action</th>
                                                ";
        // line 46
        yield "                                            </tr>
                                            <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">Regular SS</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">WISP</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">ER</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">EE</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">ER</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">EE</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">ER</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">EE</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">ER</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"employer_share\">EE</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                        ";
        // line 62
        yield "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["sss_config"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sss_config"]) {
            // line 63
            yield "                                                    <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config"], "range_start", [], "any", false, false, false, 64), "html", null, true);
            yield " to ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config"], "range_end", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config"], "msc_ec", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config"], "msc_wisp", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config"], "contribution_regular_er", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config"], "contribution_regular_ee", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config"], "contribution_ec_er", [], "any", false, false, false, 69), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config"], "contribution_ec_ee", [], "any", false, false, false, 70), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config"], "contribution_wisp_er", [], "any", false, false, false, 71), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config"], "contribution_wisp_ee", [], "any", false, false, false, 72), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employer_share\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config"], "contribution_total_er", [], "any", false, false, false, 73), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 employee_share\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config"], "contribution_total_ee", [], "any", false, false, false, 74), "html", null, true);
            yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                            <div class=\"action-sss_config relative dropdown\">
                                                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                    <li>
                                                                        <a data-modal-target=\"editModelType";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config"], "id", [], "any", false, false, false, 80), "html", null, true);
            yield "\" class=\"edit-sss_config block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-modal-target=\"deleteSSSConfig";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config"], "id", [], "any", false, false, false, 83), "html", null, true);
            yield "\" class=\"delete-sss_config block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sss_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "                                        </tbody>
                                    </table>
                                    <div class=\"noresult\" style=\"display: none\">
                                        <div class=\"py-6 text-center\">
                                            <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                            <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                            <p class=\"mb-0 text-slate-500 dark:text-zink-200\">We've searched more than 199+ users We did not find any users for you search.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->


<div id=\"addSSSConfig\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add SSS Configuration</h5>
            <button data-modal-close=\"addSSSConfig\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\">
                <i data-lucide=\"x\" class=\"size-5\"></i>
            </button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sss_create_config");
        yield "\" method=\"post\">
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <label for=\"range_start\" class=\"inline-block mb-2 text-base font-medium\">Range Start</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"range_start\" name=\"range_start\" class=\"form-input numbers-only\" placeholder=\"Enter Range Start\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"range_end\" class=\"inline-block mb-2 text-base font-medium\">Range End</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"range_end\" name=\"range_end\" class=\"form-input numbers-only\" placeholder=\"Enter Range End\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"msc_ec\" class=\"inline-block mb-2 text-base font-medium\">MSC EC</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"msc_ec\" name=\"msc_ec\" class=\"form-input numbers-only\" placeholder=\"Enter MSC EC\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"msc_wisp\" class=\"inline-block mb-2 text-base font-medium\">MSC WISP</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"msc_wisp\" name=\"msc_wisp\" class=\"form-input numbers-only\" placeholder=\"Enter MSC WISP\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"msc_total\" class=\"inline-block mb-2 text-base font-medium\">MSC Total</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"msc_total\" name=\"msc_total\" class=\"form-input numbers-only\" placeholder=\"Enter MSC Total\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_regular_er\" class=\"inline-block mb-2 text-base font-medium\">Contribution Regular ER</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_regular_er\" name=\"contribution_regular_er\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution Regular ER\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_regular_ee\" class=\"inline-block mb-2 text-base font-medium\">Contribution Regular EE</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_regular_ee\" name=\"contribution_regular_ee\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution Regular EE\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_ec_er\" class=\"inline-block mb-2 text-base font-medium\">Contribution EC ER</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_ec_er\" name=\"contribution_ec_er\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution EC ER\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_ec_ee\" class=\"inline-block mb-2 text-base font-medium\">Contribution EC EE</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_ec_ee\" name=\"contribution_ec_ee\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution EC EE\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_wisp_er\" class=\"inline-block mb-2 text-base font-medium\">Contribution WISP ER</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_wisp_er\" name=\"contribution_wisp_er\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution WISP ER\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_wisp_ee\" class=\"inline-block mb-2 text-base font-medium\">Contribution WISP EE</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_wisp_ee\" name=\"contribution_wisp_ee\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution WISP EE\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_total_er\" class=\"inline-block mb-2 text-base font-medium\">Contribution Total ER</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_total_er\" name=\"contribution_total_er\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution Total ER\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_total_ee\" class=\"inline-block mb-2 text-base font-medium\">Contribution Total EE</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_total_ee\" name=\"contribution_total_ee\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution Total EE\" required>
                    </div>
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" id=\"close-modal\" data-modal-close=\"addSSSConfig\" class=\"text-red-500 bg-white btn\">Cancel</button>
                    <button type=\"submit\" class=\"text-white btn bg-custom-500\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id=\"importCSV\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Import SSS Tables</h5>
            <button data-modal-close=\"importCSV\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sss_import_config");
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
                <div>
                    <input type=\"file\" class=\"cursor-pointer form-file form-file-sm border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500\" placeholder=\"Employee CSV\" name=\"csv_file\" accept=\".csv\" required>
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" data-modal-close=\"importCSV\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>

";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["sss_config"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sss_config_item"]) {
            // line 213
            yield "<div id=\"editModelType";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "id", [], "any", false, false, false, 213), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit SSS Configuration</h5>
            <button data-modal-close=\"editModelType";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "id", [], "any", false, false, false, 217), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\">
                <i data-lucide=\"x\" class=\"size-5\"></i>
            </button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
            // line 222
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sss_update_config");
            yield "\" method=\"post\">
                <input type=\"hidden\" name=\"sss_config_id\" value=\"";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "id", [], "any", false, false, false, 223), "html", null, true);
            yield "\">
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <label for=\"range_start\" class=\"inline-block mb-2 text-base font-medium\">Range Start</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"range_start\" name=\"range_start\" class=\"form-input numbers-only\" placeholder=\"Enter Range Start\" value=\"";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "range_start", [], "any", false, false, false, 228), "html", null, true);
            yield "\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"range_end\" class=\"inline-block mb-2 text-base font-medium\">Range End</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"range_end\" name=\"range_end\" class=\"form-input numbers-only\" placeholder=\"Enter Range End\" value=\"";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "range_end", [], "any", false, false, false, 233), "html", null, true);
            yield "\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"msc_ec\" class=\"inline-block mb-2 text-base font-medium\">MSC EC</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"msc_ec\" name=\"msc_ec\" class=\"form-input numbers-only\" placeholder=\"Enter MSC EC\" value=\"";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "msc_ec", [], "any", false, false, false, 238), "html", null, true);
            yield "\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"msc_wisp\" class=\"inline-block mb-2 text-base font-medium\">MSC WISP</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"msc_wisp\" name=\"msc_wisp\" class=\"form-input numbers-only\" placeholder=\"Enter MSC WISP\" value=\"";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "msc_wisp", [], "any", false, false, false, 243), "html", null, true);
            yield "\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"msc_total\" class=\"inline-block mb-2 text-base font-medium\">MSC Total</label>
                        <span class=\"text-red-500\">*</span>
                        <input type=\"number\" step=\"0.01\" id=\"msc_total\" name=\"msc_total\" class=\"form-input numbers-only\" placeholder=\"Enter MSC Total\" value=\"";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "msc_total", [], "any", false, false, false, 248), "html", null, true);
            yield "\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_regular_er\" class=\"inline-block mb-2 text-base font-medium\">Contribution Regular ER</label>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_regular_er\" name=\"contribution_regular_er\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution Regular ER\" value=\"";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "contribution_regular_er", [], "any", false, false, false, 252), "html", null, true);
            yield "\">
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_regular_ee\" class=\"inline-block mb-2 text-base font-medium\">Contribution Regular EE</label>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_regular_ee\" name=\"contribution_regular_ee\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution Regular EE\" value=\"";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "contribution_regular_ee", [], "any", false, false, false, 256), "html", null, true);
            yield "\">
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_ec_er\" class=\"inline-block mb-2 text-base font-medium\">Contribution EC ER</label>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_ec_er\" name=\"contribution_ec_er\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution EC ER\" value=\"";
            // line 260
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "contribution_ec_er", [], "any", false, false, false, 260), "html", null, true);
            yield "\">
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_ec_ee\" class=\"inline-block mb-2 text-base font-medium\">Contribution EC EE</label>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_ec_ee\" name=\"contribution_ec_ee\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution EC EE\" value=\"";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "contribution_ec_ee", [], "any", false, false, false, 264), "html", null, true);
            yield "\">
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_wisp_er\" class=\"inline-block mb-2 text-base font-medium\">Contribution WISP ER</label>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_wisp_er\" name=\"contribution_wisp_er\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution WISP ER\" value=\"";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "contribution_wisp_er", [], "any", false, false, false, 268), "html", null, true);
            yield "\">
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_wisp_ee\" class=\"inline-block mb-2 text-base font-medium\">Contribution WISP EE</label>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_wisp_ee\" name=\"contribution_wisp_ee\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution WISP EE\" value=\"";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "contribution_wisp_ee", [], "any", false, false, false, 272), "html", null, true);
            yield "\">
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_total_er\" class=\"inline-block mb-2 text-base font-medium\">Contribution Total ER</label>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_total_er\" name=\"contribution_total_er\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution Total ER\" value=\"";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "contribution_total_er", [], "any", false, false, false, 276), "html", null, true);
            yield "\">
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"contribution_total_ee\" class=\"inline-block mb-2 text-base font-medium\">Contribution Total EE</label>
                        <input type=\"number\" step=\"0.01\" id=\"contribution_total_ee\" name=\"contribution_total_ee\" class=\"form-input numbers-only\" placeholder=\"Enter Contribution Total EE\" value=\"";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "contribution_total_ee", [], "any", false, false, false, 280), "html", null, true);
            yield "\">
                    </div>
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" id=\"close-modal\" data-modal-close=\"editModelType";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "id", [], "any", false, false, false, 284), "html", null, true);
            yield "\" class=\"text-red-500 bg-white btn\">Cancel</button>
                    <button type=\"submit\" class=\"text-white btn bg-custom-500\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id=\"deleteSSSConfig";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "id", [], "any", false, false, false, 292), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deleteSSSConfig\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/delete.png"), "html", null, true);
            yield "\" alt=\"\" class=\"block h-12 mx-auto\">
            <form action=\"";
            // line 299
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sss_delete_config");
            yield "\" method=\"post\">
                <input type=\"hidden\" name=\"sss_config_id\" value=\"";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sss_config_item"], "id", [], "any", false, false, false, 300), "html", null, true);
            yield "\">
                <div class=\"mt-5 text-center\">
                    <h5 class=\"mb-1\">Are you sure?</h5>
                    <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                    <div class=\"flex justify-center gap-2 mt-6\">
                        <button type=\"reset\" data-modal-close=\"deleteSSSConfig\" class=\"bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10\">Cancel</button>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sss_config_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        yield "

";
        // line 316
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["status"], "method", false, false, false, 316));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 317
            yield "    <div class=\"hidden\" id=\"status\" data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 319
        yield "
";
        return; yield '';
    }

    // line 322
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 323
        yield "
<script src=\"";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-list-init.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
<script src=\"";
        // line 329
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 331
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
        return "sss_config/sss_config.html.twig";
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
        return array (  554 => 331,  550 => 329,  544 => 326,  540 => 325,  536 => 324,  533 => 323,  529 => 322,  523 => 319,  514 => 317,  510 => 316,  506 => 314,  486 => 300,  482 => 299,  478 => 298,  469 => 292,  458 => 284,  451 => 280,  444 => 276,  437 => 272,  430 => 268,  423 => 264,  416 => 260,  409 => 256,  402 => 252,  395 => 248,  387 => 243,  379 => 238,  371 => 233,  363 => 228,  355 => 223,  351 => 222,  343 => 217,  335 => 213,  331 => 212,  315 => 199,  228 => 115,  201 => 90,  188 => 83,  182 => 80,  173 => 74,  169 => 73,  165 => 72,  161 => 71,  157 => 70,  153 => 69,  149 => 68,  145 => 67,  141 => 66,  137 => 65,  131 => 64,  128 => 63,  123 => 62,  106 => 46,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sss_config/sss_config.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\sss_config\\sss_config.html.twig");
    }
}
