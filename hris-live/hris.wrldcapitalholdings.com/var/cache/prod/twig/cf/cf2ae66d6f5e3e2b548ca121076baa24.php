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

/* project_management/apps-category.html.twig */
class __TwigTemplate_846abd63393e436685bd45cdc3bdfec1 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "project_management/apps-category.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Category";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Category", "title" => "Category"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"usersTable\">
                            ";
        // line 19
        yield "                            <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                <form action=\"#!\">
                                    <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                                        <div class=\"relative xl:col-span-2\">
                                            <input type=\"text\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search for name, email, phone number etc...\" autocomplete=\"off\">
                                            <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                        </div><!--end col-->
                                        ";
        // line 35
        yield "                                        <!--end col-->
                                        ";
        // line 44
        yield "                                        <!--end col-->
                                    </div>
                                    <!--end grid-->
                                </form>
                            </div>
                            <div class=\"card-body\">
                                <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                    <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                        <thead class=\"text-left\">
                                            <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                ";
        // line 59
        yield "                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"name\">Project</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"name\">Code</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"location\">Location</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"email\">Description</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryItem"]) {
            // line 68
            yield "                                                <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                        <div class=\"flex items-center gap-2\">
                                                            <div class=\"grow\">
                                                                <h6 class=\"mb-1\"><a href=\"#!\" class=\"name\">
                                                                    ";
            // line 73
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "project", [], "any", false, false, false, 73))) {
                // line 74
                yield "                                                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "project", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74), "html", null, true);
                yield "
                                                                    ";
            }
            // line 76
            yield "                                                                    </a>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 location\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "code", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 email\">Block ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "block", [], "any", false, false, false, 82), "html", null, true);
            yield " Lot ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "lot", [], "any", false, false, false, 82), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 email\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "description", [], "any", false, false, false, 83), "html", null, true);
            yield "</td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                        <div class=\"relative dropdown\">
                                                            <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                            <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                ";
            // line 91
            yield "                                                                ";
            // line 94
            yield "                                                                <li>
                                                                    <a data-modal-target=\"deleteModal";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "id", [], "any", false, false, false, 95), "html", null, true);
            yield "\" class=\"block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\" style=\"position: relative; z-index: 10;\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "                                            
                                        </tbody>
                                    </table>
                                    <div class=\"noresult\" style=\"display: none\">
                                        <div class=\"py-6 text-center\">
                                            <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                            <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                            <p class=\"mb-0 text-slate-500 dark:text-zink-200\">We've searched more than 199+ users We did not find any users for you search.</p>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 150
        yield "                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->

        

<div id=\"addCategoryModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Category</h5>
            <button data-modal-close=\"addCategoryModal\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 164
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_category_form");
        yield "\" method=\"post\">
                <div class=\"mb-3\">
                    <label for=\"subdivision\" class=\"inline-block mb-2 text-base font-medium\">Project</label>
                    <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"choices-single-default\" name=\"project\">
                        ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["projects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["projectItem"]) {
            // line 169
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "id", [], "any", false, false, false, 169), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "code", [], "any", false, false, false, 169), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "name", [], "any", false, false, false, 169), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projectItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        yield "                    </select>
                </div>
                <div class=\"mb-3\">
                    <label for=\"subdivision\" class=\"inline-block mb-2 text-base font-medium\">Model</label>
                    <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"choices-single-default\" name=\"model\">
                        ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["models"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["modelItem"]) {
            // line 177
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modelItem"], "id", [], "any", false, false, false, 177), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modelItem"], "name", [], "any", false, false, false, 177), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modelItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "                    </select>
                </div>
                <div class=\"mb-3\">
                    <label for=\"code\" class=\"inline-block mb-2 text-base font-medium\">Code</label>
                    <input type=\"text\" id=\"code\" name=\"code\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter code\" value=\"\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"desc\" class=\"inline-block mb-2 text-base font-medium\">Description</label>
                    <input type=\"text\" id=\"desc\" name=\"desc\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter description\" value=\"\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"desc\" class=\"inline-block mb-2 text-base font-medium\">Location</label>
                    <input type=\"text\" id=\"desc\" name=\"desc\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter description\" value=\"\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"block\" class=\"inline-block mb-2 text-base font-medium\">Category block</label>
                    <input type=\"text\" id=\"block\" name=\"block\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter block\" value=\"\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"lot\" class=\"inline-block mb-2 text-base font-medium\">Category lot</label>
                    <input type=\"text\" id=\"lot\" name=\"lot\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter lot\" value=\"\" required>
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"button\" data-modal-close=\"addCategoryModal\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Add Category</button>
                </div>
            </form>
        </div>
    </div>
</div>


";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryItem"]) {
            // line 212
            yield "<div id=\"editCategoryModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "id", [], "any", false, false, false, 212), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Category</h5>
            <button data-modal-close=\"editCategoryModal";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "id", [], "any", false, false, false, 216), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
            // line 219
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_category_form");
            yield "\" method=\"post\">
                <input type=\"hidden\" name=\"category_id\" value=\"";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "id", [], "any", false, false, false, 220), "html", null, true);
            yield "\">
                <input type=\"hidden\" id=\"categoryLot\" value=\"";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "lot", [], "any", false, false, false, 221), "html", null, true);
            yield "\" />
                <div class=\"mb-3\">
                    <label for=\"subdivision\" class=\"inline-block mb-2 text-base font-medium\">Project</label>
                    <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"choices-single-default\" name=\"project\">
                        ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["projects"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["projectItem"]) {
                // line 226
                yield "                            ";
                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "project", [], "any", false, false, false, 226)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "project", [], "any", false, false, false, 226), "id", [], "any", false, false, false, 226) == CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "id", [], "any", false, false, false, 226)))) {
                    // line 227
                    yield "                               <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "id", [], "any", false, false, false, 227), "html", null, true);
                    yield "\" selected>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "code", [], "any", false, false, false, 227), "html", null, true);
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "name", [], "any", false, false, false, 227), "html", null, true);
                    yield "</option>
                            ";
                } else {
                    // line 229
                    yield "                               <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "id", [], "any", false, false, false, 229), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "code", [], "any", false, false, false, 229), "html", null, true);
                    yield " - ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "name", [], "any", false, false, false, 229), "html", null, true);
                    yield "</option>
                            ";
                }
                // line 231
                yield "                            
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projectItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            yield "                    </select>
                </div>
                <div class=\"mb-3\">
                    <label for=\"subdivision\" class=\"inline-block mb-2 text-base font-medium\">Model</label>
                    <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"choices-single-default\" name=\"model\">
                        ";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["models"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["modelItem"]) {
                // line 239
                yield "                            <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modelItem"], "id", [], "any", false, false, false, 239), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["modelItem"], "name", [], "any", false, false, false, 239), "html", null, true);
                yield "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modelItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            yield "                    </select>
                </div>
                <div class=\"mb-3\">
                    <label for=\"code\" class=\"inline-block mb-2 text-base font-medium\">Category Code</label>
                    <input type=\"text\" id=\"code\" name=\"code\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter code\" value=\"";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "code", [], "any", false, false, false, 245), "html", null, true);
            yield "\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"block\" class=\"inline-block mb-2 text-base font-medium\">Block</label>
                    <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" onchange=\"updateLots(this)\" data-choices id=\"block\" name=\"block\">
                        ";
            // line 250
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["phase"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["phaseItem"]) {
                // line 251
                yield "                            ";
                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "phase", [], "any", false, false, false, 251)) && (CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "id", [], "any", false, false, false, 251) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "phase", [], "any", false, false, false, 251), "id", [], "any", false, false, false, 251)))) {
                    // line 252
                    yield "                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "blocks", [], "any", false, false, false, 252));
                    foreach ($context['_seq'] as $context["_key"] => $context["blockItem"]) {
                        // line 253
                        yield "                                    ";
                        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "id", [], "any", false, false, false, 253)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "blocks", [], "any", false, false, false, 253)))) {
                            // line 254
                            yield "                                        <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "id", [], "any", false, false, false, 254), "html", null, true);
                            yield "\" data-total-lots=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "total_lots", [], "any", false, false, false, 254), "html", null, true);
                            yield "\" ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "id", [], "any", false, false, false, 254) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "blocks", [], "any", false, false, false, 254), "id", [], "any", false, false, false, 254))) {
                                yield "selected";
                            }
                            yield ">
                                            ";
                            // line 255
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "block_name", [], "any", false, false, false, 255), "html", null, true);
                            yield "
                                        </option>
                                    ";
                        }
                        // line 258
                        yield "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 259
                    yield "                            ";
                }
                // line 260
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phaseItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            yield "                    </select>
                </div>
                <div class=\"mb-3\">
                    <label for=\"lot\" class=\"inline-block mb-2 text-base font-medium\">Category Lot<span class=\"text-red-500\">*</span></label>
                    <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"lot\" name=\"lot\" required>
                    ";
            // line 266
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["phase"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["phaseItem"]) {
                // line 267
                yield "                        ";
                if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "phase", [], "any", false, false, false, 267)) && (CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "id", [], "any", false, false, false, 267) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "phase", [], "any", false, false, false, 267), "id", [], "any", false, false, false, 267)))) {
                    // line 268
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["phaseItem"], "blocks", [], "any", false, false, false, 268));
                    foreach ($context['_seq'] as $context["_key"] => $context["blockItem"]) {
                        // line 269
                        yield "                                ";
                        if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "blocks", [], "any", false, false, false, 269)) && (CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "id", [], "any", false, false, false, 269) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "blocks", [], "any", false, false, false, 269), "id", [], "any", false, false, false, 269)))) {
                            // line 270
                            yield "                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["blockItem"], "total_lots", [], "any", false, false, false, 270)));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                // line 271
                                yield "                                        <option value=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                                yield "\" ";
                                if (($context["i"] == CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "lot", [], "any", false, false, false, 271))) {
                                    yield " selected ";
                                }
                                yield ">
                                            Lot ";
                                // line 272
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                                yield "
                                        </option>
                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 275
                            yield "                                ";
                        }
                        // line 276
                        yield "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 277
                    yield "                        ";
                }
                // line 278
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phaseItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 279
            yield "                    </select>
                </div>
                
                <div class=\"mb-3\">
                    <label for=\"desc\" class=\"inline-block mb-2 text-base font-medium\">Category Description</label>
                    <input type=\"text\" id=\"desc\" name=\"desc\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter description\" value=\"";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "description", [], "any", false, false, false, 284), "html", null, true);
            yield "\" required>
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"button\" data-modal-close=\"editCategoryModal";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "id", [], "any", false, false, false, 287), "html", null, true);
            yield "\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        yield "<!--end add user-->

";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categoryItem"]) {
            // line 298
            yield "<div id=\"deleteModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "id", [], "any", false, false, false, 298), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deleteModal";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "id", [], "any", false, false, false, 302), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/delete.png"), "html", null, true);
            yield "\" alt=\"\" class=\"block h-12 mx-auto\">
            <div class=\"mt-5 text-center\">
                <h5 class=\"mb-1\">Are you sure?</h5>
                <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                <div class=\"flex justify-center gap-2 mt-6\">
                <form action=\"";
            // line 309
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_category_form");
            yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"category_id\" value=\"";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "id", [], "any", false, false, false, 310), "html", null, true);
            yield "\">
                    <button type=\"reset\" data-modal-close=\"deleteModal";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categoryItem"], "id", [], "any", false, false, false, 311), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoryItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 320
        yield "
";
        return; yield '';
    }

    // line 323
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 324
        yield "
<script src=\"";
        // line 325
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 326
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-user-list.init.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
<script src=\"";
        // line 330
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 332
        yield "<script>
\$(document).ready(function() {
    function updateLots() {
        var \$lotSelect = \$('#lot');
        var selectedBlock = \$('#block').val(); // Get the selected block ID
        var totalLots = \$('#block option:selected').data('total-lots'); // Get total lots for selected block
        var categoryLot = \$('#categoryLot').val(); // Get categoryItem.lot from hidden input

        // Clear current lot options
        \$lotSelect.empty().append('<option value=\"\">Select Lot</option>');

        // Generate new lot options
        if (totalLots) {
            for (var i = 1; i <= totalLots; i++) {
                var option = \$('<option>', {
                    value: i,
                    text: 'Lot ' + i
                });

                // Select the option based on categoryItem.lot
                if (i == categoryLot) {
                    option.attr('selected', 'selected');
                }

                \$lotSelect.append(option);
            }
        }
    }
});
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "project_management/apps-category.html.twig";
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
        return array (  600 => 332,  596 => 330,  590 => 327,  586 => 326,  582 => 325,  579 => 324,  575 => 323,  569 => 320,  554 => 311,  550 => 310,  546 => 309,  538 => 304,  533 => 302,  525 => 298,  521 => 297,  517 => 295,  503 => 287,  497 => 284,  490 => 279,  484 => 278,  481 => 277,  475 => 276,  472 => 275,  463 => 272,  454 => 271,  449 => 270,  446 => 269,  441 => 268,  438 => 267,  434 => 266,  427 => 261,  421 => 260,  418 => 259,  412 => 258,  406 => 255,  395 => 254,  392 => 253,  387 => 252,  384 => 251,  380 => 250,  372 => 245,  366 => 241,  355 => 239,  351 => 238,  344 => 233,  337 => 231,  327 => 229,  317 => 227,  314 => 226,  310 => 225,  303 => 221,  299 => 220,  295 => 219,  289 => 216,  281 => 212,  277 => 211,  243 => 179,  232 => 177,  228 => 176,  221 => 171,  208 => 169,  204 => 168,  197 => 164,  181 => 150,  168 => 102,  155 => 95,  152 => 94,  150 => 91,  142 => 83,  136 => 82,  132 => 81,  125 => 76,  119 => 74,  117 => 73,  110 => 68,  106 => 67,  96 => 59,  84 => 44,  81 => 35,  72 => 19,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project_management/apps-category.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\project_management\\apps-category.html.twig");
    }
}
