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

/* administration/owner.html.twig */
class __TwigTemplate_4fdb99adabb671595e5d0a15a3c8a43a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/owner.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "administration/owner.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "administration/owner.html.twig", 1);
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

        yield "Owner";
        
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Owner", "title" => "Owner"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"divisionTable\">
                            <div class=\"card-body\">
                                <div class=\"flex items-center\">
                                    <h6 class=\"text-15 grow\">Owners List</h6>
                                    <div class=\"shrink-0\">
                                        <button data-modal-target=\"addOwnerModal\" type=\"button\" class=\"add-owner text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Add Owner</span></button>
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
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"fullname\">Fullname</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"block_lot\">Block & Lot</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"email\">Email</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"contact\">Contact No.</th>
                                                ";
        // line 39
        yield "                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["owners"]) || array_key_exists("owners", $context) ? $context["owners"] : (function () { throw new RuntimeError('Variable "owners" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["owner_item"]) {
            // line 43
            yield "                                                    <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 fullname\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "firstname", [], "any", false, false, false, 44), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "lastname", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>

                                                        ";
            // line 46
            if (( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "block", [], "any", false, false, false, 46)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "lot_no", [], "any", false, false, false, 46)))) {
                yield "    
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 block_lot\">Block ";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "block", [], "any", false, false, false, 47), "html", null, true);
                yield " Lot ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "lot_no", [], "any", false, false, false, 47), "html", null, true);
                yield "</td>
                                                        ";
            } else {
                // line 49
                yield "                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 block_lot\"></td>
                                                        ";
            }
            // line 51
            yield "
                                                        ";
            // line 52
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "email", [], "any", false, false, false, 52))) {
                yield "    
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 email\">";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "email", [], "any", false, false, false, 53), "html", null, true);
                yield "</td>
                                                        ";
            } else {
                // line 55
                yield "                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 email\"></td>
                                                        ";
            }
            // line 57
            yield "
                                                        ";
            // line 58
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "contact_no", [], "any", false, false, false, 58))) {
                yield "    
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 contact\">";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "contact_no", [], "any", false, false, false, 59), "html", null, true);
                yield "</td>
                                                        ";
            } else {
                // line 61
                yield "                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 contact\"></td>
                                                        ";
            }
            // line 63
            yield "                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                            <div class=\"relative dropdown\">
                                                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                    <li>
                                                                        <a data-modal-target=\"editOwnerModal";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "id", [], "any", false, false, false, 68), "html", null, true);
            yield "\" class=\"block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-modal-target=\"deleteModal";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "id", [], "any", false, false, false, 71), "html", null, true);
            yield "\" class=\"block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
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
                                ";
        // line 125
        yield "                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->

        

<div id=\"addOwnerModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Owner</h5>
            <button data-modal-close=\"addOwnerModal\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_owner");
        yield "\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-6\">
                    <label for=\"owner_fname\" class=\"inline-block mb-2 text-base font-medium\">First Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"owner_fname\" name=\"owner_fname\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter owner first name\" required>
                </div>
                <div class=\"xl:col-span-6\">
                    <label for=\"owner_lname\" class=\"inline-block mb-2 text-base font-medium\">Last Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"owner_lname\" name=\"owner_lname\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter owner last name\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"owner_block\" class=\"inline-block mb-2 text-base font-medium\">Block No.</label>
                    <input type=\"number\" id=\"owner_block\" name=\"owner_block\" min=\"0\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Block\" oninput=\"this.value = Math.abs(this.value)\">
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"owner_lot\" class=\"inline-block mb-2 text-base font-medium\">Lot No.</label>
                    
                    <input type=\"number\" id=\"owner_lot\" name=\"owner_lot\" min=\"0\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Lot\" oninput=\"this.value = Math.abs(this.value)\">
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"owner_email\" class=\"inline-block mb-2 text-base font-medium\">Email</label>
                    
                    <input type=\"text\" id=\"owner_email\" name=\"owner_email\" class=\"form-input email-validator border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Owner Email\">
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"owner_contact\" class=\"inline-block mb-2 text-base font-medium\">Contact Number</label>
                    
                    <input type=\"text\" id=\"owner_contact\" name=\"owner_contact\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Owner Contact Number\">
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"button\" id=\"close-modal\" data-modal-close=\"addOwnerModal\" class=\"text-red-500 reset-form bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end add user-->

";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["owners"]) || array_key_exists("owners", $context) ? $context["owners"] : (function () { throw new RuntimeError('Variable "owners" does not exist.', 181, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["owner_item"]) {
            // line 182
            yield "<div id=\"editOwnerModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "id", [], "any", false, false, false, 182), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Owner</h5>
            <button data-modal-close=\"editOwnerModal";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "id", [], "any", false, false, false, 186), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
            // line 189
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_owner");
            yield "\" method=\"post\" onsubmit=\"return validateEmail('editOwnerModal";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "id", [], "any", false, false, false, 189), "html", null, true);
            yield "', 'edit_owner_email";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "id", [], "any", false, false, false, 189), "html", null, true);
            yield "')\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <input type=\"hidden\" name=\"owner_id\" value=\"";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "id", [], "any", false, false, false, 191), "html", null, true);
            yield "\">
                <div class=\"xl:col-span-6\">
                    <label for=\"owner_fname\" class=\"inline-block mb-2 text-base font-medium\">First Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"owner_fname\" name=\"owner_fname\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter owner first name\" value=\"";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "firstname", [], "any", false, false, false, 195), "html", null, true);
            yield "\" required>
                </div>
                <div class=\"xl:col-span-6\">
                    <label for=\"owner_lname\" class=\"inline-block mb-2 text-base font-medium\">Last Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"owner_lname\" name=\"owner_lname\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter owner last name\" value=\"";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "lastname", [], "any", false, false, false, 200), "html", null, true);
            yield "\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"owner_block\" class=\"inline-block mb-2 text-base font-medium\">Block No.</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" id=\"owner_block\" name=\"owner_block\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Block\" min=\"1\" value=\"";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "block", [], "any", false, false, false, 205), "html", null, true);
            yield "\" oninput=\"this.value = Math.abs(this.value)\">
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"owner_lot\" class=\"inline-block mb-2 text-base font-medium\">Lot No.</label>
                    
                    <input type=\"number\" id=\"owner_lot\" name=\"owner_lot\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Lot\" min=\"1\" value=\"";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "lot_no", [], "any", false, false, false, 210), "html", null, true);
            yield "\" oninput=\"this.value = Math.abs(this.value)\">
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"edit_owner_email\" class=\"inline-block mb-2 text-base font-medium\">Email</label>
                    
                    <input type=\"text\" id=\"edit_owner_email";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "id", [], "any", false, false, false, 215), "html", null, true);
            yield "\" name=\"owner_email\" class=\"form-input email-validator border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\"  value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "email", [], "any", false, false, false, 215), "html", null, true);
            yield "\" placeholder=\"Enter Owner Email\">
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"owner_contact\" class=\"inline-block mb-2 text-base font-medium\">Contact Number</label>
                    
                    <input type=\"text\" id=\"owner_contact\" name=\"owner_contact\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "contact_no", [], "any", false, false, false, 220), "html", null, true);
            yield "\" placeholder=\"Enter Owner Contact Number\">
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"button\" id=\"close-modal\" data-modal-close=\"editOwnerModal";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "id", [], "any", false, false, false, 224), "html", null, true);
            yield "\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id=\"deleteModal";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "id", [], "any", false, false, false, 232), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deleteModal";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "id", [], "any", false, false, false, 236), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/delete.png"), "html", null, true);
            yield "\" alt=\"\" class=\"block h-12 mx-auto\">
            <div class=\"mt-5 text-center\">
                <h5 class=\"mb-1\">Are you sure?</h5>
                <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                <form action=\"";
            // line 242
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_owner");
            yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"owner_id\" value=\"";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "id", [], "any", false, false, false, 243), "html", null, true);
            yield "\">
                    <div class=\"flex justify-center gap-2 mt-6\">
                        <button type=\"button\" data-modal-close=\"deleteModal";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["owner_item"], "id", [], "any", false, false, false, 245), "html", null, true);
            yield "\" class=\"bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10\">Cancel</button>
                        <button type=\"submit\" class=\"text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Yes, Delete It!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        yield "
";
        // line 255
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 255, $this->source); })()), "flashes", ["status"], "method", false, false, false, 255));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 256
            yield "    <div class=\"hidden\" id=\"status\" data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 261
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 262
        yield "
<script src=\"";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-list-init.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
<script src=\"";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 270
        yield "<script>
\$(document).ready(function () {

    const status = \$('#status');

    console.log(status.data('status'));

    document.addEventListener('DOMContentLoaded', function () {
        const numberInputs = document.querySelectorAll('input[type=\"number\"]');

        numberInputs.forEach(input => {
            input.addEventListener('keydown', function (e) {
                if (e.key === '-') {
                    e.preventDefault();
                }
            });
        });
    });

    if (status.length) {
        if (status.data('status') == 'success') {
            // The element exists
            Toastify({
                newWindow: true,
                text: 'Owner added successfully',
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
                text: 'Owner not added, something went wrong.',
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

    // add validation for email input in add and edit owner modal when submit button is clicked
    \$('#addOwnerModal').on('submit', function (e) {
        var email = \$('#owner_email').val();
        var emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
        if (!emailPattern.test(email)) {
            e.preventDefault(); // Prevent form submission
            //use toastify to show error message
            Toastify({
                newWindow: true,
                text: 'Please enter a valid email address.',
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
});

function validateEmail(formId, emailInputId) {
    console.log('Validating email...'); // Debugging line
    const email = document.getElementById(emailInputId).value;
    const emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;

    if (!emailPattern.test(email)) {
        // Prevent form submission
        event.preventDefault();

        // Use Toastify to show an error message
        Toastify({
            newWindow: true,
            text: 'Please enter a valid email address.',
            gravity: 'top',
            position: 'right',
            className: \"bg-red-500\",
            stopOnFocus: true,
            offset: {
                x: 0, // horizontal axis
                y: 0, // vertical axis
            },
            duration: 3000,
            close: true,
        }).showToast();

        return false; // Return false to prevent form submission
    }

    return true; // Return true if the email is valid
}
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
        return "administration/owner.html.twig";
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
        return array (  490 => 270,  486 => 268,  480 => 265,  476 => 264,  472 => 263,  469 => 262,  459 => 261,  447 => 258,  438 => 256,  434 => 255,  431 => 254,  416 => 245,  411 => 243,  407 => 242,  400 => 238,  395 => 236,  388 => 232,  377 => 224,  370 => 220,  360 => 215,  352 => 210,  344 => 205,  336 => 200,  328 => 195,  321 => 191,  312 => 189,  306 => 186,  298 => 182,  294 => 181,  249 => 139,  233 => 125,  221 => 78,  208 => 71,  202 => 68,  195 => 63,  191 => 61,  186 => 59,  182 => 58,  179 => 57,  175 => 55,  170 => 53,  166 => 52,  163 => 51,  159 => 49,  152 => 47,  148 => 46,  141 => 44,  138 => 43,  134 => 42,  129 => 39,  94 => 6,  91 => 5,  81 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Owner{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Owner', title: 'Owner' }) }}

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"divisionTable\">
                            <div class=\"card-body\">
                                <div class=\"flex items-center\">
                                    <h6 class=\"text-15 grow\">Owners List</h6>
                                    <div class=\"shrink-0\">
                                        <button data-modal-target=\"addOwnerModal\" type=\"button\" class=\"add-owner text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Add Owner</span></button>
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
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"fullname\">Fullname</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"block_lot\">Block & Lot</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"email\">Email</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"contact\">Contact No.</th>
                                                {# <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th> #}
                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                            {% for owner_item in owners %}
                                                    <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 fullname\">{{ owner_item.firstname }} {{ owner_item.lastname }}</td>

                                                        {% if owner_item.block is not null and owner_item.lot_no is not null %}    
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 block_lot\">Block {{ owner_item.block }} Lot {{ owner_item.lot_no }}</td>
                                                        {% else %}
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 block_lot\"></td>
                                                        {% endif %}

                                                        {% if owner_item.email is not empty %}    
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 email\">{{ owner_item.email }}</td>
                                                        {% else %}
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 email\"></td>
                                                        {% endif %}

                                                        {% if owner_item.contact_no is not empty %}    
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 contact\">{{ owner_item.contact_no }}</td>
                                                        {% else %}
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 contact\"></td>
                                                        {% endif %}
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                            <div class=\"relative dropdown\">
                                                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                    <li>
                                                                        <a data-modal-target=\"editOwnerModal{{ owner_item.id }}\" class=\"block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-modal-target=\"deleteModal{{ owner_item.id }}\" class=\"block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
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
                                            <p class=\"mb-0 text-slate-500 dark:text-zink-200\">We've searched more than 199+ users We did not find any users for you search.</p>
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

        

<div id=\"addOwnerModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Owner</h5>
            <button data-modal-close=\"addOwnerModal\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"{{ path('submit_owner') }}\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-6\">
                    <label for=\"owner_fname\" class=\"inline-block mb-2 text-base font-medium\">First Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"owner_fname\" name=\"owner_fname\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter owner first name\" required>
                </div>
                <div class=\"xl:col-span-6\">
                    <label for=\"owner_lname\" class=\"inline-block mb-2 text-base font-medium\">Last Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"owner_lname\" name=\"owner_lname\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter owner last name\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"owner_block\" class=\"inline-block mb-2 text-base font-medium\">Block No.</label>
                    <input type=\"number\" id=\"owner_block\" name=\"owner_block\" min=\"0\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Block\" oninput=\"this.value = Math.abs(this.value)\">
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"owner_lot\" class=\"inline-block mb-2 text-base font-medium\">Lot No.</label>
                    
                    <input type=\"number\" id=\"owner_lot\" name=\"owner_lot\" min=\"0\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Lot\" oninput=\"this.value = Math.abs(this.value)\">
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"owner_email\" class=\"inline-block mb-2 text-base font-medium\">Email</label>
                    
                    <input type=\"text\" id=\"owner_email\" name=\"owner_email\" class=\"form-input email-validator border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Owner Email\">
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"owner_contact\" class=\"inline-block mb-2 text-base font-medium\">Contact Number</label>
                    
                    <input type=\"text\" id=\"owner_contact\" name=\"owner_contact\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Owner Contact Number\">
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"button\" id=\"close-modal\" data-modal-close=\"addOwnerModal\" class=\"text-red-500 reset-form bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end add user-->

{% for owner_item in owners %}
<div id=\"editOwnerModal{{ owner_item.id }}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Owner</h5>
            <button data-modal-close=\"editOwnerModal{{ owner_item.id }}\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"{{ path('update_owner') }}\" method=\"post\" onsubmit=\"return validateEmail('editOwnerModal{{ owner_item.id }}', 'edit_owner_email{{ owner_item.id }}')\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <input type=\"hidden\" name=\"owner_id\" value=\"{{ owner_item.id }}\">
                <div class=\"xl:col-span-6\">
                    <label for=\"owner_fname\" class=\"inline-block mb-2 text-base font-medium\">First Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"owner_fname\" name=\"owner_fname\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter owner first name\" value=\"{{owner_item.firstname}}\" required>
                </div>
                <div class=\"xl:col-span-6\">
                    <label for=\"owner_lname\" class=\"inline-block mb-2 text-base font-medium\">Last Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"owner_lname\" name=\"owner_lname\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter owner last name\" value=\"{{owner_item.lastname}}\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"owner_block\" class=\"inline-block mb-2 text-base font-medium\">Block No.</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" id=\"owner_block\" name=\"owner_block\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Block\" min=\"1\" value=\"{{owner_item.block}}\" oninput=\"this.value = Math.abs(this.value)\">
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"owner_lot\" class=\"inline-block mb-2 text-base font-medium\">Lot No.</label>
                    
                    <input type=\"number\" id=\"owner_lot\" name=\"owner_lot\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Lot\" min=\"1\" value=\"{{owner_item.lot_no}}\" oninput=\"this.value = Math.abs(this.value)\">
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"edit_owner_email\" class=\"inline-block mb-2 text-base font-medium\">Email</label>
                    
                    <input type=\"text\" id=\"edit_owner_email{{ owner_item.id }}\" name=\"owner_email\" class=\"form-input email-validator border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\"  value=\"{{owner_item.email}}\" placeholder=\"Enter Owner Email\">
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"owner_contact\" class=\"inline-block mb-2 text-base font-medium\">Contact Number</label>
                    
                    <input type=\"text\" id=\"owner_contact\" name=\"owner_contact\" class=\"form-input numbers-only border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"{{owner_item.contact_no}}\" placeholder=\"Enter Owner Contact Number\">
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"button\" id=\"close-modal\" data-modal-close=\"editOwnerModal{{ owner_item.id }}\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id=\"deleteModal{{ owner_item.id }}\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deleteModal{{ owner_item.id }}\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"{{ asset(\"assets/images/delete.png\") }}\" alt=\"\" class=\"block h-12 mx-auto\">
            <div class=\"mt-5 text-center\">
                <h5 class=\"mb-1\">Are you sure?</h5>
                <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                <form action=\"{{ path('delete_owner') }}\" method=\"post\">
                    <input type=\"hidden\" name=\"owner_id\" value=\"{{ owner_item.id }}\">
                    <div class=\"flex justify-center gap-2 mt-6\">
                        <button type=\"button\" data-modal-close=\"deleteModal{{ owner_item.id }}\" class=\"bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10\">Cancel</button>
                        <button type=\"submit\" class=\"text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Yes, Delete It!</button>
                    </div>
                </form>
            </div>
        </div>
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

    document.addEventListener('DOMContentLoaded', function () {
        const numberInputs = document.querySelectorAll('input[type=\"number\"]');

        numberInputs.forEach(input => {
            input.addEventListener('keydown', function (e) {
                if (e.key === '-') {
                    e.preventDefault();
                }
            });
        });
    });

    if (status.length) {
        if (status.data('status') == 'success') {
            // The element exists
            Toastify({
                newWindow: true,
                text: 'Owner added successfully',
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
                text: 'Owner not added, something went wrong.',
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

    // add validation for email input in add and edit owner modal when submit button is clicked
    \$('#addOwnerModal').on('submit', function (e) {
        var email = \$('#owner_email').val();
        var emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
        if (!emailPattern.test(email)) {
            e.preventDefault(); // Prevent form submission
            //use toastify to show error message
            Toastify({
                newWindow: true,
                text: 'Please enter a valid email address.',
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
});

function validateEmail(formId, emailInputId) {
    console.log('Validating email...'); // Debugging line
    const email = document.getElementById(emailInputId).value;
    const emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;

    if (!emailPattern.test(email)) {
        // Prevent form submission
        event.preventDefault();

        // Use Toastify to show an error message
        Toastify({
            newWindow: true,
            text: 'Please enter a valid email address.',
            gravity: 'top',
            position: 'right',
            className: \"bg-red-500\",
            stopOnFocus: true,
            offset: {
                x: 0, // horizontal axis
                y: 0, // vertical axis
            },
            duration: 3000,
            close: true,
        }).showToast();

        return false; // Return false to prevent form submission
    }

    return true; // Return true if the email is valid
}
</script>

{% endblock %}", "administration/owner.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\administration\\owner.html.twig");
    }
}
