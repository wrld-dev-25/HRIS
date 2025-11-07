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

/* project_management/apps-project.html.twig */
class __TwigTemplate_ae4bcd765f10eae427057a5f268b0b5c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "project_management/apps-project.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Projects";
        return; yield '';
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "<style>
.loader {
    background-color: #ededed;
    height: 1.5rem;
    width: 100%;
    border-radius: 0.25rem;
}
div .loader {
    background-color: #ededed;
    background: linear-gradient(100deg, 
    rgba(255, 255, 255, 0) 40%,
    rgba(255, 255, 255, .5) 50%,
    rgba(255, 255, 255, 0) 60%) #ededed;
    background-size: 200% 100%;
    background-position-x: 180%;
    animation: 1s loading ease-in-out infinite
}
@keyframes loading {
    to {
        background-position-x: -30%
    }
}

</style>
";
        return; yield '';
    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "            ";
        yield from         $this->loadTemplate("project_management/worker-assignment-modal.html.twig", "project_management/apps-project.html.twig", 30)->unwrap()->yield($context);
        // line 31
        yield "            ";
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Subdvisions", "title" => "Subdivisions"]);
        yield "
                <div class=\"grid grid-cols-12 2xl:grid-cols-12 gap-x-5\">
                    <div class=\"col-span-12 md:order-4 lg:col-span-6 2xl:col-span-3 card flex flex-col justify-center\">
                        <div class=\"card-body\">
                            <div class=\"grid grid-cols-12 items-between\">
                                <div class=\"col-span-8 md:col-span-9\">
                                    <p class=\"text-slate-500 dark:text-slate-200 text-lg\">Number of Subdivisions</p>
                                </div>
                                <div class=\"col-span-4 md:col-span-3\">
                                    <h5 class=\"text-green-500 text-2xl\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["subdivisions"] ?? null)), "html", null, true);
        yield "</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-span-12 md:order-4 lg:col-span-6 2xl:col-span-3 card flex flex-col justify-center\">
                        <div class=\"card-body\">
                            <div class=\"grid grid-cols-12\">
                                <div class=\"col-span-8 md:col-span-9\">
                                    <p class=\"text-slate-500 dark:text-slate-200 text-lg\">On-Going Projects</p>
                                </div>
                                <div class=\"col-span-4 md:col-span-3\">
                                    <h5 class=\"text-purple-500 text-2xl\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["projects"] ?? null)), "html", null, true);
        yield "</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"add-projects col-span-12 md:order-4 lg:col-span-6 2xl:col-span-3 card flex flex-col justify-center\">
                        <div class=\"card-body\">
                            <div class=\"flex items-center\">
                                <p class=\"text-slate-500 dark:text-slate-200 text-lg grow\">Create New Project</p>
                                  <div class=\"shrink-0\">
                                    <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("subwizard");
        yield "\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Add Project</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"add-projects col-span-12 md:order-4 lg:col-span-6 2xl:col-span-3 card flex flex-col justify-center\">
                        <div class=\"card-body\">
                            <div class=\"flex items-center\">
                                <p class=\"text-slate-500 dark:text-slate-200 text-lg grow\">Assign Worker/s</p>
                                  <div class=\"shrink-0\">
                                    <a data-modal-target=\"assignWorkers\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Assign</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-3 items-start\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">
                                Subdivision Details
                            </h6>
                            <div class=\"text-slate-500 indent-4\" id=\"profileName\"><span class=\"text-slate-500 font-bold\">Name: </span>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = ($context["subProfile"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "name", [], "any", false, false, false, 85), "html", null, true);
        yield "</div>
                            <div class=\"grid grid-cols-12 gap-5\">
                                <div class=\"col-span-8 text-slate-500 indent-4\" id=\"profileLocation\"><span class=\"text-slate-500 font-bold\">Location: </span>";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = ($context["subProfile"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "location", [], "any", false, false, false, 87), "html", null, true);
        yield "</div>
                                <div class=\"col-span-4 text-slate-500 indent-4\" id=\"profileNumberPhases\"><span class=\"text-slate-500 font-bold\">Phase: </span>";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = ($context["subProfile"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "total_phases", [], "any", false, false, false, 88), "html", null, true);
        yield "</div>
                            </div>
                            <div class=\"flex justify-center mt-2 mb-4\">
                                <img class=\"rounded-t-md border\" src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/support.png"), "html", null, true);
        yield "\" alt=\"Image\">
                            </div>
                            <div>
                                <div class=\"overflow-x-auto\">
                                    <table class=\"w-full\">
                                        <thead class=\"ltr:text-left rtl:text-right\">
                                            <tr>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 text-center\">Phase</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 text-center\">Number of Blocks</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 text-center\">Number of Lots</th>
                                            </tr>
                                        </thead>
                                        <tbody id=\"profileDetailsBlock\">
                                        ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subProfile"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
            // line 105
            yield "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["sub"], "phases", [], "any", false, false, false, 105));
            foreach ($context['_seq'] as $context["_key"] => $context["phase"]) {
                // line 106
                yield "                                                <tr>
                                                    <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-center\" id=\"profilePhases\">";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phase"], "name", [], "any", false, false, false, 107), "html", null, true);
                yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-center\" id=\"profileBlocks\">";
                // line 108
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phase"], "totalBlocks", [], "any", false, false, false, 108), "html", null, true);
                yield "</td>
                                                    <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-center\" id=\"profileLots\">";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["phase"], "totalLots", [], "any", false, false, false, 109), "html", null, true);
                yield "</td>
                                                </tr>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phase'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "                                        </tbody>
                                    </table>
                                </div>
                                ";
        // line 121
        yield "                            </div>
                        </div>
                    </div>

                    <div class=\"lg:col-span-2\">
                        <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                            <div class=\"xl:col-span-12\">
                                ";
        // line 128
        $context["active"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 128), "get", ["t"], "method", false, false, false, 128);
        // line 129
        yield "                                ";
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["active"] ?? null)) && (($context["active"] ?? null) == "pl"))) {
            // line 130
            yield "                                    <div class=\"card border-2 rounded-md border-custom-500\" id=\"onGoingProjectsTable\">
                                ";
        } else {
            // line 131
            yield " 
                                    <div class=\"card\" id=\"onGoingProjectsTable\">
                                ";
        }
        // line 133
        yield "                              
                                    <div class=\"card-body\">
                                        <div class=\"flex items-center\">
                                            <h6 class=\"text-15 grow\">On-Going Projects List</h6>
                                        </div>
                                    </div>
                                    <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                        <form action=\"#!\">
                                            <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                                                <div class=\"relative xl:col-span-4\">
                                                    <input type=\"text\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search for code, name, subdivision etc...\" autocomplete=\"off\">
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
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"code\">Code</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"name\">Name</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"subdivision\">Subdivision</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"phase\">Phase</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"description\">Description</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"location\">Location</th>
                                                    </tr>
                                                </thead>
                                                <tbody class=\"list\">
                                                    ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["projects"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["projectItem"]) {
            // line 164
            yield "                                                        <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                                <div class=\"flex items-center gap-2\">
                                                                    <div class=\"grow\">
                                                                        ";
            // line 176
            yield "                                                                        <h6 class=\"mb-1\"><a style=\"cursor: pointer\" data-modal-target=\"selectedProject\" data-project-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "id", [], "any", false, false, false, 176), "html", null, true);
            yield "\" class=\"text-custom-500 code\">
                                                                        
                                                                            ";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "code", [], "any", false, false, false, 178), "html", null, true);
            yield "
                                                                            ";
            // line 182
            yield "                                                                            </a>
                                                                        </h6>
                                                                         
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 name\">
                                                                ";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "name", [], "any", false, false, false, 189), "html", null, true);
            yield "
                                                            </td>
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 subdivision\">
                                                                ";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "subdivision", [], "any", false, false, false, 192), "name", [], "any", false, false, false, 192), "html", null, true);
            yield "
                                                            </td>
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 phase\">
                                                                ";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "subdivision", [], "any", false, true, false, 195), "phase", [], "any", false, true, false, 195), 0, [], "array", false, true, false, 195), "name", [], "any", true, true, false, 195)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "subdivision", [], "any", false, true, false, 195), "phase", [], "any", false, true, false, 195), 0, [], "array", false, true, false, 195), "name", [], "any", false, false, false, 195), "")) : ("")), "html", null, true);
            yield "
                                                            </td>
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 subdivision\">
                                                                ";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "description", [], "any", true, true, false, 198)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "description", [], "any", false, false, false, 198), "No description available")) : ("No description available")), "html", null, true);
            yield "
                                                            </td>
                                                            ";
            // line 201
            yield "                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 location\">
                                                                ";
            // line 202
            if ((( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "category", [], "any", false, false, false, 202)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "category", [], "any", false, false, false, 202)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "blocks", [], "any", false, false, false, 202))) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "category", [], "any", false, false, false, 202)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), "lots", [], "any", false, false, false, 202)))) {
                // line 203
                yield "                                                                    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "category", [], "any", false, false, false, 203)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null), "blocks", [], "any", false, false, false, 203), "name", [], "any", false, false, false, 203), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, $context["projectItem"], "category", [], "any", false, false, false, 203)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null), "lots", [], "any", false, false, false, 203), "name", [], "any", false, false, false, 203), "html", null, true);
                yield "
                                                                ";
            }
            // line 205
            yield "                                                            </td>
                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projectItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        yield "                                                </tbody>
                                            </table>
                                            <div class=\"noresult-onGoingProject\" style=\"display: none\">
                                                <div class=\"py-6 text-center\">
                                                    <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                                    <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                                    <p class=\"mb-0 text-slate-500 dark:text-zink-200\">We did not find any users for you search.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"flex flex-col items-center gap-4 px-4 mt-8 md:flex-row\" id=\"pagination-element\">
                                            <div class=\"grow\">
                                                <p class=\"text-slate-500 dark:text-zink-200\">Showing <b class=\"showing\">10</b> of <b class=\"total-records\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["projects"] ?? null)), "html", null, true);
        yield "</b> Results</p>
                                            </div>
                                        
                                            <div class=\"col-sm-auto mt-sm-0\">
                                                <div class=\"flex gap-2 pagination-wrap justify-content-center\">
                                                    <a class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-prev \" href=\"javascript:void(0)\">
                                                        <i class=\"size-4 mr-1 rtl:rotate-180\" data-lucide=\"chevron-left\"></i> Prev
                                                    </a>
                                                    <ul class=\"flex flex-wrap items-center gap-2 pagination listjs-pagination\">
                                                    </ul>
                                                    <a class=\"inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-next\" href=\"javascript:void(0)\">
                                                        Next <i class=\"size-4 ml-1 rtl:rotate-180\" data-lucide=\"chevron-right\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-->
                            </div><!--end col-->
                        </div><!--end grid-->
                        <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                            <div class=\"xl:col-span-12\">
                                <div class=\"card view-subdivision\" id=\"subdivisionTable\">
                                    <div class=\"card-body\">
                                        <div class=\"flex items-center\">
                                            <h6 class=\"text-15 grow\">Subdivisions List</h6>
                                            ";
        // line 249
        yield "                                        </div>
                                    </div>
                                    <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                        <form action=\"#!\">
                                            <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                                                <div class=\"relative xl:col-span-4\">
                                                    <input type=\"text\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search for code, name, location etc...\" autocomplete=\"off\">
                                                    <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                                </div><!--end col-->
                                            </div><!--end grid-->
                                        </form>
                                    </div>
                                    <div class=\"card-body\">
                                        <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                            <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\" id=\"subTable\">
                                                <thead class=\"text-left\">
                                                    <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"code\">Code</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"name\">Name</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"location\">Location</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"phaseNumber\">No. of Phases</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"lot\">Total No. of Lots</th>
                                                        <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class=\"list\">
                                                    ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subdivisions"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["subdivisionItem"]) {
            // line 276
            yield "                                                        <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                            <td class=\"hidden id\" data-key=\"id\" data-value=\"";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "id", [], "any", false, false, false, 277), "html", null, true);
            yield "\"></td>
                                                            <td class=\"hidden\" data-key=\"code\" data-value=\"";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "subdivisionCode", [], "any", false, false, false, 278), "html", null, true);
            yield "\"></td>
                                                            <td class=\"hidden description\" data-key=\"description\" data-value=\"";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "description", [], "any", false, false, false, 279), "html", null, true);
            yield "\"></td>
                                                            ";
            // line 283
            yield "                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 cursor-pointer code\" data-key=\"subdivisionCode\" data-value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "subdivisionCode", [], "any", false, false, false, 283), "html", null, true);
            yield "\">
                                                                <div class=\"flex items-center gap-2\">
                                                                    <div class=\"grow\">
                                                                        <h6 class=\"mb-1\"><a href=\"javascript:void(0)\" class=\"text-custom-500 code\">
                                                                            ";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "subdivisionCode", [], "any", false, false, false, 287), "html", null, true);
            yield "
                                                                            ";
            // line 291
            yield "                                                                            </a>
                                                                        </h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 name\" data-key=\"name\" data-value=\"";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "name", [], "any", false, false, false, 296), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "name", [], "any", false, false, false, 296), "html", null, true);
            yield "</td>
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 location\" data-key=\"location\" data-value=\"";
            // line 297
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "location", [], "any", false, false, false, 297), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "location", [], "any", false, false, false, 297), "html", null, true);
            yield "</td>
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 phase\" data-key=\"total_phases\" data-value=\"";
            // line 298
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "total_phases", [], "any", false, false, false, 298), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "total_phases", [], "any", false, false, false, 298), "html", null, true);
            yield "</td>
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 lot\" data-key=\"total_lots\" data-value=\"";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "total_lots", [], "any", false, false, false, 299), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "total_lots", [], "any", false, false, false, 299), "html", null, true);
            yield "</td>
                                                            <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                                <div class=\"action-subdivision relative dropdown\">
                                                                    <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                    <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                        <li>
                                                                            <a data-modal-target=\"editSubdivisionModal\" id=\"editSubdivision\" class=\"edit-subdivision block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                        </li>
                                                                        <li>
                                                                            <a data-modal-target=\"deleteSubdivisionModal\" id=\"deleteSubdivision\" class=\"delete-subdivision block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['subdivisionItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 315
        yield "                                                </tbody>
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
                    </div>
                </div>
        
<div id=\"editSubdivisionModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Subdivision</h5>
            <button data-modal-close=\"editSubdivisionModal\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 339
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_update_subdivision_form");
        yield "\" method=\"post\">
                ";
        // line 344
        yield "                <input type=\"hidden\" id=\"id\" name=\"subdivision_id\" value=\"\">
                <div class=\"mb-3\">
                    <label for=\"code\" class=\"inline-block mb-2 text-base font-medium\">Subdivision code</label>
                    <input type=\"text\" id=\"code\" name=\"code\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter code\" value=\"\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"name\" class=\"inline-block mb-2 text-base font-medium\">Subdivsion Name</label>
                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter subdivision name\" value=\"\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"description\" class=\"inline-block mb-2 text-base font-medium\">Description</label>
                    <input type=\"text\" id=\"description\" name=\"description\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter subdivision description\" value=\"\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"location\" class=\"inline-block mb-2 text-base font-medium\">Location</label>
                    <input type=\"text\" id=\"location\" name=\"location\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter subdivision location\" value=\"\" required>
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" data-modal-close=\"editSubdivisionModal\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end add user-->


<div id=\"deleteSubdivisionModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deleteSubdivisionModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/delete.png"), "html", null, true);
        yield "\" alt=\"\" class=\"block h-12 mx-auto\">
            <div class=\"mt-5 text-center\">
                <h5 class=\"mb-1\">Are you sure?</h5>
                <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                <div class=\"flex justify-center gap-2 mt-6\">
                <form action=\"";
        // line 383
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_delete_subdivision_form");
        yield "\" method=\"post\">
                    <input type=\"hidden\" name=\"subdivision_id\" id=\"delId\" value=\"\">
                    <button type=\"reset\" data-modal-close=\"deleteSubdivisionModal\" class=\"bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Yes, Delete It!</button>
                </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"addProjectModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Project</h5>
            <button data-modal-close=\"addProjectModal\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 401
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_project_form");
        yield "\" method=\"post\">
                <div class=\"mb-3\">
                    <label for=\"subdivision\" class=\"inline-block mb-2 text-base font-medium\">Subdivsion Name</label>
                    <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices id=\"choices-single-default\" name=\"subdivision\">
                        ";
        // line 405
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subdivisions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subdivisionItem"]) {
            // line 406
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "id", [], "any", false, false, false, 406), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "subdivisionCode", [], "any", false, false, false, 406), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subdivisionItem"], "name", [], "any", false, false, false, 406), "html", null, true);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subdivisionItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 408
        yield "                    </select>
                </div>
                <div class=\"mb-3\">
                    <label for=\"code\" class=\"inline-block mb-2 text-base font-medium\">Project Code</label>
                    <input type=\"text\" id=\"code\" name=\"code\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter code\" value=\"\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"name\" class=\"inline-block mb-2 text-base font-medium\">Project Name</label>
                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter name\" value=\"\" required>
                </div>
                <div class=\"mb-3\">
                    <label for=\"desc\" class=\"inline-block mb-2 text-base font-medium\">Project Description</label>
                    <input type=\"text\" id=\"desc\" name=\"desc\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter description\" value=\"\" required>
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"button\" data-modal-close=\"addProjectModal\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Add Project</button>
                </div>
            </form>
        </div>
    </div>
</div>


";
        // line 500
        yield "
";
        // line 501
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["status"], "method", false, false, false, 501));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 502
            yield "    <div class=\"hidden\" id=\"status\" data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 504
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["info"], "method", false, false, false, 504));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 505
            yield "    <div class=\"hidden\" id=\"info\" data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 507
        yield "
";
        return; yield '';
    }

    // line 510
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 511
        yield "<!-- App js -->
<script src=\"";
        // line 512
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 513
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 514
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 515
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-list-init.js"), "html", null, true);
        yield "\"></script>

";
        // line 517
        yield ((array_key_exists("javascriptSnippet", $context)) ? (Twig\Extension\CoreExtension::default(($context["javascriptSnippet"] ?? null), "")) : (""));
        yield "
";
        // line 519
        yield "
<script>
\$(document).ready(function () {
    const profileDetailsBlock = \$('#profileDetailsBlock');
    const profileName = \$('#profileName');
    const profileLocation = \$('#profileLocation');
    const profileNumberPhases = \$('#profileNumberPhases');
    const profilePhases = \$('#profilePhases');
    const profileBlocks = \$('#profileBlocks');
    const profileLots = \$('#profileLots');

    \$('#subTable').on('click', '.code', function () {
        \$tr = \$(this).closest('tr'); // Select table row item

        var data = [];

        var subId;

        \$tr.children(\"td\").each(function (index) { // Get values from data attribute of each table data
            var key = \$(this).data('key');
            var value = \$(this).data('value');
            if (key == 'code') {
                subId = value;
            }
        });

        // Make AJAX request
        filter_task(subId);
    });

    function filter_task(subId){
        \$.ajax({
            url: '";
        // line 551
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("select_subdivision_profile");
        yield "',
            type: 'POST',
            data: {
                subdivisionCode: subId
            },
            beforeSend: function() {
                profileName.html('<div class=\"loader mb-2\"></div>');
                profileLocation.html('<div class=\"loader\"></div>');
                profileNumberPhases.html('<div class=\"loader\"></div>');

                profileDetailsBlock.children(\"tr\").each(function () {
                    \$(this).children(\"td\").each(function () {
                        \$(this).html('<div class=\"loader\"></div>');
                    })
                })
            },
            
            success: function(data) {
                //console.log(data);
                var newHtml = '';
                var subName = data.subProfile.subdivisions[0].name;
                var subLocation = data.subProfile.subdivisions[0].location;
                var total_phases = data.subProfile.subdivisions[0].total_phases;
                var phases = data.subProfile.subdivisions[0].phases;
                profileDetailsBlock.html(''); // Clear html
                profileName.html('<span class=\"text-slate-500 font-bold\">Name: </span>' + subName); // Set Subdivision Name
                profileLocation.html('<span class=\"text-slate-500 font-bold\">Location: </span>' + subLocation); // Set Subdivision Location
                profileNumberPhases.html('<span class=\"text-slate-500 font-bold\">Phases: </span>' + total_phases); // Set Number of Phases

                if (phases === null) { //if phases is not set display no result
                    newHtml += '<tr>';
                    newHtml += '<td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-center col-span-3\" id=\"profilePhases\">No Available Phases</td>';
                    newHtml += '</tr>';
                } else {
                    phases.forEach(function(val, index, array) { // loop through available phases and prints out Phase, Blocks, Lots
                        newHtml += '<tr>';
                        newHtml += '<td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-center\" id=\"profilePhases\">' + val['name'] + '</td>';
                        newHtml += '<td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-center\" id=\"profileBlocks\">' + val['totalBlocks'] + '</td>';
                        newHtml += '<td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-center\" id=\"profileLots\">' + val['totalLots'] + '</td>';
                        newHtml += '</tr>';
                    });
                    profileDetailsBlock.html(newHtml);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
                alert('There was an error processing your request.');
            }
        });
    }

    // Edit Modal Data handling
    \$('#subTable').on('click', '#editSubdivision', function () {
        var \$row = \$(this).closest('tr');
        var id = \$row.find('.id').data('value');
        var code = \$row.find('.code').data('value');
        var name = \$row.find('.name').data('value');
        var description = \$row.find('.description').data('value');
        var location = \$row.find('.location').data('value');
        
        \$('#editSubdivisionModal #id').val(id);
        \$('#editSubdivisionModal #code').val(code);
        \$('#editSubdivisionModal #name').val(name);
        \$('#editSubdivisionModal #description').val(description);
        \$('#editSubdivisionModal #location').val(location);
    });

    // Delete Modal Data handling
    \$('#subTable').on('click', '#deleteSubdivision', function () {
        var \$row = \$(this).closest('tr');
        var id = \$row.find('.id').data('value');
        
        \$('#deleteSubdivisionModal #delId').val(id);
    });

    // Toaster message
    const status = \$('#status');
    const info = \$('#info').data('status');
    // console.log(status.data('status'));
    if (status.length) {
        if (status.data('status') == 'success') {
            // The element exists
            var message = 'Subdivision '+info+' successfully';
            var color = 'bg-green-500';
            showToast(message, color);
        } else {
            var message = 'Subdivision not'+info+', something went wrong';
            var color = 'bg-red-500';
            showToast(message, color);
        }
    }

    function addCollapsibleSection(projectName, projectId) {
        // Create a new collapsible section template
        const collapsibleTemplate = `
            <div data-project-id=\"\${projectId}\" class=\"collapsible col-span-12 card collapsible-\${projectId}\">
                <div class=\"card-body flex justify-between text-white collapsible-header group/item rounded-md bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 show\">
                    <h6 class=\"text-15 text-white\">\${projectName}</h6>
                    <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                        <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                        <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                    </div>
                </div>
                <div class=\"mt-2 mb-0 collapsible-content card workers-card\">
                </div>
            </div>
        `;
        // Append the new collapsible section to the container
        \$('.dynamic-projects').append(collapsibleTemplate);
    }

    // Listen for changes in the projectSelect dropdown
    \$('#projectSelect').on('change', function () {
        const selectedProjects = \$(this).find('option:selected');
        const selectedProjectIds = selectedProjects.map(function () {
            return \$(this).val();
        }).get();

        // Remove collapsibles that are no longer selected
        \$('.collapsible').each(function () {
            const collapsibleId = \$(this).attr('class').match(/collapsible-(\\d+)/);
            if (collapsibleId && !selectedProjectIds.includes(collapsibleId[1])) {
                \$(this).remove(); // Remove the collapsible if its projectId is not in the selected list
            }
        });

        // Add a collapsible for each selected project
        selectedProjects.each(function () {
            const projectName = \$(this).text();
            const projectId = \$(this).val();

            // Check if the collapsible already exists
            if (\$(`.collapsible-\${projectId}`).length === 0) {
                // Create a new collapsible section for the selected project
                addCollapsibleSection(projectName, projectId);

                // Automatically add selected workers to the new project
                const selectedWorkers = \$('#workerSelect').find('option:selected');
                selectedWorkers.each(function () {
                    const workerName = \$(this).text();
                    const workerId = \$(this).val();

                    // Append a new worker card to the project
                    \$(`.collapsible-\${projectId} .workers-card`).append(createWorkerCard(workerName, workerId, projectId));
                });

                lucide.createIcons(); // Reinitialize Lucide icons for the new elements
            }
        });
    });

    \$('#workerSelect, #projectWorkers').on('change', function () {
        const selectedWorkers = \$(this).find('option:selected');
        const selectedWorkerIds = selectedWorkers.map(function () {
            return \$(this).val();
        }).get(); // Get an array of selected worker IDs

        // Iterate over each collapsible
        \$('.collapsible').each(function () {
            const collapsible = \$(this);
            const projectId = collapsible.data('project-id'); // Get the project ID from the collapsible
            // Remove worker cards that are no longer selected
            collapsible.find('.worker-card').each(function () {
                const workerCardId = \$(this).data('worker-id');
                if (!selectedWorkerIds.includes(workerCardId.toString())) {
                    \$(this).remove(); // Remove the worker card if its workerId is not in the selected list
                }
            });

            // Add worker cards for newly selected workers
            selectedWorkers.each(function () {
                const workerName = \$(this).text();
                const workerId = \$(this).val();

                // Check if the worker card already exists
                if (collapsible.find(`.worker-card[data-worker-id=\"\${workerId}\"]`).length === 0) {
                    // Append a new worker card
                    collapsible.find('.workers-card').append(createWorkerCard(workerName, workerId, projectId, 'add'));
                    lucide.createIcons(); // Reinitialize Lucide icons for the new elements
                }
            });
        });
    });

    // Function to create a worker card
    function createWorkerCard(workerName, workerId, projectId, action) {
        return `
            <div class=\"card-body worker-card\" data-worker-id=\"\${workerId}\">
                <div class=\"grid gap-4 grid-cols-6 flex items-start\">
                    <span class=\"inline-block mb-2 text-base font-medium\">\${workerName}</span>
                    <div class=\"grid gap-x-4 grid-cols-12 col-span-12 md:col-span-12 border rounded-md border-dashed p-5\">
                        <div class=\"grid gap-4 grid-cols-12 col-span-12 mb-2\">
                            <div class=\"col-span-4\">
                                <span class=\"inline-block mb-2 text-base font-medium\">Task</span>
                            </div>
                            <div class=\"col-span-4\">
                                <span class=\"inline-block mb-2 text-base font-medium\">Date</span>
                            </div>
                            <div class=\"col-span-4\">
                                <span class=\"inline-block mb-2 text-base font-medium\">Assigned Time</span>
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][workerId]\" value=\"\${workerId}\">
                        <input type=\"hidden\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][projectId]\" value=\"\${projectId}\">
                        <input type=\"hidden\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][action]\" value=\"\${action}\">
                        <div class=\"grid gap-4 grid-cols-12 col-span-12 mb-2 dependents-wrapper\">
                            <!-- Task containers will be appended here -->
                        </div>
                        <div class=\"grid gap-4 grid-cols-12 col-span-12 mb-2 add-dependent-wrapper\">
                            <div class=\"col-span-12 flex justify-end items-center\">
                                <i data-lucide=\"plus\" class=\"size-4 text-custom-500\"></i>
                                <a href=\"javascript:void(0)\" class=\"text-custom-500 addTask underline underline-offset-5\" data-worker-id=\"\${workerId}\" data-project-id=\"\${projectId}\"> Add Task</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    // Function to create a new task container
    function createTaskContainer(workerId, projectId, taskIndex) {
        return `
            <div class=\"grid gap-4 grid-cols-12 col-span-12 dependents-container\">
                <div class=\"col-span-12 flex justify-end toggle-hidden-dependent\">
                    <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delDependent\" data-worker-id=\"\${workerId}\">
                        <i data-lucide=\"trash\" class=\"size-4\"></i>
                    </button>
                </div>
                <input type=\"hidden\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][tasks][\${taskIndex}][status]\" value=\"add\">
                <input type=\"hidden\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][tasks][\${taskIndex}][task_id]\" value=\"\">
                <div class=\"col-span-4\">
                    <input type=\"text\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][tasks][\${taskIndex}][task]\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Task Name\">
                </div>
                <div class=\"col-span-4\">
                    <input type=\"text\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][tasks][\${taskIndex}][date]\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\">
                </div>
                <div class=\"col-span-4\">
                    <input type=\"text\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][tasks][\${taskIndex}][time]\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Time (Hours:Minutes)\" data-provider=\"timepickr\" data-time-hrs=\"true\">
                </div>
            </div>
        `;
    }

        // Function to create a new task container
    function recreateTaskWithData(workerId, projectId, taskIndex, taskName, taskDate, taskTime) {
        return `
            <div class=\"grid gap-4 grid-cols-12 col-span-12 dependents-container\">
                <div class=\"col-span-12 flex justify-end toggle-hidden-dependent\">
                    <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delDependent\" data-worker-id=\"\${workerId}\">
                        <i data-lucide=\"trash\" class=\"size-4\"></i>
                    </button>
                </div>
                <div class=\"col-span-4\">
                    <input type=\"text\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][tasks][\${taskIndex}][task]\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"\${taskName}\" placeholder=\"Enter Task Name\">
                </div>
                <div class=\"col-span-4\">
                    <input type=\"text\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][tasks][\${taskIndex}][date]\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"\${taskDate}\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\">
                </div>
                <div class=\"col-span-4\">
                    <input type=\"text\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][tasks][\${taskIndex}][time]\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"\${taskTime}\" placeholder=\"Enter Time (Hours:Minutes)\" data-provider=\"timepickr\" data-time-hrs=\"true\">
                </div>
            </div>
        `;
    }

    // Event listener for the \"Add Task\" button
    \$(document).on('click', '.addTask', function (e) {
        e.preventDefault();

        // Get the workerId and projectId from the button's data attributes
        const workerId = \$(this).data('worker-id');
        const projectId = \$(this).data('project-id');

        // Find the specific dependents-wrapper for this worker and project
        const dependentsWrapper = \$(`.collapsible-\${projectId} .worker-card[data-worker-id=\"\${workerId}\"] .dependents-wrapper`);

        // Determine the next task index
        const taskIndex = dependentsWrapper.children('.dependents-container').length;

        // Append a new task container to the specific dependents-wrapper
        dependentsWrapper.append(createTaskContainer(workerId, projectId, taskIndex));
        lucide.createIcons(); // Reinitialize Lucide icons for the new elements
        reinitializeFlatpickr(); // Reinitialize Flatpickr for the new date input
        reinitializeTimepickr(); // Reinitialize Timepickr for the new time input
    });



    // Event listener for the \"Delete Task\" button
    \$(document).on('click', '.delDependent', function (e) {
        e.preventDefault();

        // Remove the specific task container
        \$(this).closest('.dependents-container').remove();
    });



    async function loadData() {
        // Fetch project and employee data
        const projectListResponse = await apiCall('GET', 'api/project/summary', []);
        const employeeListResponse = await apiCall('GET', 'api/employee201/assignable', []);

        //console.log(projectListResponse);
        //console.log(employeeListResponse);

        // Extract the projects and employees from the response
        const projectList = projectListResponse.projects || [];
        const employeeList = Object.values(employeeListResponse.employees || {});

        // Select elements
        const projectSelect = \$('#projectSelect');
        const workerSelect = \$('#workerSelect');

        // Clear existing options
        projectSelect.empty();
        workerSelect.empty();

        // Populate project select options
        projectList.forEach(project => {
            const option = \$('<option></option>').val(project.id).text(project.code);
            projectSelect.append(option);
        });

        // Populate worker select options
        employeeList.forEach(employee => {
            const fullName = `\${employee.first_name} \${employee.middle_name || ''} \${employee.last_name}`.trim();
            const option = \$('<option></option>').val(employee.id).text(fullName);
            workerSelect.append(option);
        });

        // Reload Choices.js for both selects
        if (window.Choices) {
            // Destroy existing Choices instances if they exist
            if (projectSelect.data('choices')) {
                projectSelect.data('choices').destroy();
                projectSelect.removeData('choices');
            }
            if (workerSelect.data('choices')) {
                workerSelect.data('choices').destroy();
                workerSelect.removeData('choices');
            }

            // Initialize new Choices instances with multiple selection enabled
            const projectChoices = new Choices('#projectSelect', {
                searchEnabled: true,
                removeItemButton: true, // Enables the remove button for multiple selections
                allowHTML: true,
                multiple: true // Enable multiple selection for workers
            });
            const workerChoices = new Choices('#workerSelect', {
                searchEnabled: true,
                removeItemButton: true,
                allowHTML: true,
                multiple: true // Enable multiple selection for workers
            });

            // Store the Choices instances for later use
            projectSelect.data('choices', projectChoices);
            workerSelect.data('choices', workerChoices);

            \$('.assign-projects-div').show();
            \$('.assign-projects-spinner').hide();
        }
    }
    // load project and employee/s data on page load
    loadData();

    // Send form data to the controller
    \$('#create-form').on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Serialize the form data
        const formData = \$(this).serialize();

        // Make the AJAX request
        \$.ajax({
            url: '";
        // line 929
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("assign_workers_to_projects");
        yield "', // Symfony route
            type: 'POST',
            data: formData,
            beforeSend: function () {
                // Optional: Show a loader or disable the submit button
                \$('#addNew').prop('disabled', true).text('Submitting...');
            },
            success: function (response) {
                // Handle success response
                console.log('Response:', response);
                if (response.status === 'success') {
                    showToast(response.message, 'bg-green-500'); // Show success toast
                } else {
                    showToast('Something went wrong!', 'bg-red-500'); // Show error toast
                }
            },
            error: function (xhr, status, error) {
                // Handle error response
                console.error('Error:', error);
                showToast('Failed to submit data. Please try again.', 'bg-red-500');
            },
            complete: function () {
                // Optional: Re-enable the submit button
                \$('#addNew').prop('disabled', false).text('Save');
            }
        });
    });

        // Send form data to the controller
    \$('#selectedProjectForm').on('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        // Serialize the form data
        const formData = \$(this).serialize();

        // Make the AJAX request
        /*
        \$.ajax({
            url: '";
        // line 967
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("assign_workers_to_projects");
        yield "', // Symfony route
            type: 'POST',
            data: formData,
            beforeSend: function () {
                // Optional: Show a loader or disable the submit button
                \$('#addNew').prop('disabled', true).text('Submitting...');
            },
            success: function (response) {
                // Handle success response
                console.log('Response:', response);
                if (response.status === 'success') {
                    showToast(response.message, 'bg-green-500'); // Show success toast
                } else {
                    showToast('Something went wrong!', 'bg-red-500'); // Show error toast
                }
            },
            error: function (xhr, status, error) {
                // Handle error response
                console.error('Error:', error);
                showToast('Failed to submit data. Please try again.', 'bg-red-500');
            },
            complete: function () {
                // Optional: Re-enable the submit button
                \$('#addNew').prop('disabled', false).text('Save');
            }
        });*/
    });
})
</script>

<script>
\$(document).on('click', '[data-modal-target=\"selectedProject\"]', function () {
    const projectId = \$(this).data('project-id'); // Get the project ID from the button's data attribute

    // Open the modal
    \$('#selectedProject').removeClass('hidden').addClass('flex');

    // Fetch data from the controller
    \$.ajax({
        url: '";
        // line 1006
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_emp_project_json", ["id" => "PROJECT_ID"]);
        yield "'.replace('PROJECT_ID', projectId), // Symfony route
        type: 'GET',
        beforeSend: function () {
            // Show a loader or placeholder content
            \$('#selectedProjectContent').html('<p>Loading...</p>');
        },
        success: function (response) {
            if (response.status === 'success') {
                // Populate the project select input
                if(window.choices){
                    // Destroy existing Choices instances if they exist
                    if (projectSelect.data('choices')) {
                        projectSelect.data('choices').destroy();
                        projectSelect.removeData('choices');
                    }
                    if (workerSelect.data('choices')) {
                        workerSelect.data('choices').destroy();
                        workerSelect.removeData('choices');
                    }
                }
                const projectSelect = \$('#assignedProject');
                projectSelect.empty(); // Clear existing options
                projectSelect.append(`<option value=\"\${projectId}\" selected>\${response.employee_project_id.code}</option>`);

                // Populate the worker select input
                const workerSelect = \$('#projectWorkers');
                workerSelect.empty(); // Clear existing options

                // Create a Set to track added worker IDs (to avoid duplicates)
                const addedWorkerIds = new Set();

                // Add workers from employeeProjects
                //console.log('employee projects', response.employee_project_id.employeeProjects)
                //console.log('employee added workers', addedWorkerIds)
                response.employee_project_id.employeeProjects.forEach(employeeProject => {
                    const employee = employeeProject.employee;
                    const fullName = `\${employee.first_name} \${employee.middle_name || ''} \${employee.last_name}`.trim();

                    if (employeeProject.is_assigned) {
                        // Add workers with is_assigned = true
                        workerSelect.append(`<option value=\"\${employee.id}\" selected>\${fullName}</option>`);
                        addedWorkerIds.add(employee.id); // Track the added worker ID
                    } else {
                        // Add workers with is_assigned = false
                        if (!addedWorkerIds.has(employee.id)) { // Avoid duplicates
                            workerSelect.append(`<option value=\"\${employee.id}\">\${fullName}</option>`);
                            addedWorkerIds.add(employee.id); // Track the added worker ID
                        }
                    }
                });

                // Add additional workers from employees_list, avoiding duplicates
                const employeesArray = Object.values(response.employees_list);
                employeesArray.forEach(employee => {
                    if (!addedWorkerIds.has(employee.id)) { // Only add if not already added
                        const fullName = `\${employee.first_name} \${employee.middle_name || ''} \${employee.last_name}`.trim();
                        workerSelect.append(`<option value=\"\${employee.id}\">\${fullName}</option>`);
                    }
                });

                // Reinitialize Choices.js for both selects
                if (window.Choices) {
                    
                    // Initialize new Choices instances
                    const projectChoices = new Choices('#assignedProject', {
                        searchEnabled: true,
                        removeItemButton: true,
                        allowHTML: true,
                        multiple: false // Single selection for projects
                    });
                    const workerChoices = new Choices('#projectWorkers', {
                        searchEnabled: true,
                        removeItemButton: true,
                        allowHTML: true,
                        multiple: true // Multiple selection for workers
                    });

                    // Store the Choices instances for later use
                    projectSelect.data('choices', projectChoices);
                    workerSelect.data('choices', workerChoices);

                    \$('.selected-project-div').show();
                    \$('.selected-project-spinner').hide();
                }

                // Recreate collapsible sections
                recreateCollapsibleSections(projectId, response.employee_project_id.name, response.employee_project_id.employeeProjects);
                // console.log('employee projects', response.employee_project_id)
            } else {
                \$('#selectedProjectContent').html('<p>Failed to load data. Please try again.</p>');
            }
        },
        error: function (xhr, status, error) {
            // Handle errors
            \$('#selectedProjectContent').html('<p>Error loading data. Please try again.</p>');
            console.error('Error:', error);
        }
    });

// Function to recreate collapsible sections
    function recreateCollapsibleSections(projectId, projectName, employeeProjects) {
        // Remove existing collapsible section for the project
        \$(`.collapsible-\${projectId}`).remove();

        // Create a new collapsible section
        const collapsibleTemplate = `
            <div data-project-id=\"\${projectId}\" class=\"collapsible col-span-12 card collapsible-\${projectId}\">
                <div class=\"card-body flex justify-between text-white collapsible-header group/item rounded-md bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 show\">
                    <h6 class=\"text-15 text-white\">\${projectName}</h6>
                    <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                        <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                        <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                    </div>
                </div>
                <div class=\"mt-2 mb-0 collapsible-content card workers-card\">
                    \${employeeProjects
                    .filter(employeeProject => employeeProject.is_assigned) // Only include assigned workers
                    .map(employeeProject => createWorkerCard(employeeProject, projectId))
                    .join('')}
                </div>
            </div>
        `;

        // Append the new collapsible section to the container
        \$('.selected-dynamic-projects').append(collapsibleTemplate);
        lucide.createIcons(); // Reinitialize Lucide icons for the new elements
        filterTasksByDateRange(); // Call the function to filter tasks by date range
    }

    // Function to create a worker card with tasks
    function createWorkerCard(employeeProject, projectId, action) {
        const employee = employeeProject.employee;
        const fullName = `\${employee.first_name} \${employee.middle_name || ''} \${employee.last_name}`.trim();

        // Filter tasks where archived is not true
        const filteredTasks = employeeProject.empTasks.filter(task => task.archived !== true);

        return `
            <div class=\"card-body worker-card\" data-worker-id=\"\${employee.id}\">
                <div class=\"grid gap-4 grid-cols-6 flex items-start\">
                    <span class=\"inline-block mb-2 text-base font-medium\">\${fullName}</span>
                    <div class=\"grid gap-x-4 grid-cols-12 col-span-12 md:col-span-12 border rounded-md border-dashed p-5\">
                        <div class=\"grid gap-4 grid-cols-12 col-span-12 mb-2\">
                            <div class=\"col-span-4\">
                                <span class=\"inline-block mb-2 text-base font-medium\">Task</span>
                            </div>
                            <div class=\"col-span-4\">
                                <span class=\"inline-block mb-2 text-base font-medium\">Date</span>
                            </div>
                            <div class=\"col-span-4\">
                                <span class=\"inline-block mb-2 text-base font-medium\">Assigned Time</span>
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"assignments[projects][\${projectId}][workers][\${employee.id}][workerId]\" value=\"\${employee.id}\">
                        <input type=\"hidden\" name=\"assignments[projects][\${projectId}][workers][\${employee.id}][projectId]\" value=\"\${projectId}\">
                        <input type=\"hidden\" name=\"assignments[projects][\${projectId}][workers][\${employee.id}][action]\" value=\"\${action}\">
                        <div class=\"grid gap-4 grid-cols-12 col-span-12 mb-2 dependents-wrapper\">
                        </div>
                        <div class=\"grid gap-4 grid-cols-12 col-span-12 mb-2 add-dependent-wrapper\">
                            <div class=\"col-span-12 flex justify-end items-center\">
                                <i data-lucide=\"plus\" class=\"size-4 text-custom-500\"></i>
                                <a href=\"javascript:void(0)\" class=\"text-custom-500 addTask underline underline-offset-5\" data-worker-id=\"\${employee.id}\" data-project-id=\"\${projectId}\"> Add Task</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }

    // Function to create a task container
    function createTaskContainer(workerId, projectId, taskIndex, taskName, taskDate, taskTime, taskId) {

        // Format the taskDate to \"20 Jan, 2025\"
        const formattedDate = new Date(taskDate).toLocaleDateString('en-GB', {
            day: '2-digit',
            month: 'short',
            year: 'numeric',
            timeZone: 'UTC' // Force UTC to avoid timezone shifts
        });

        console.log(formattedDate)
        return `
            <div class=\"grid gap-4 grid-cols-12 col-span-12 dependents-container\">
                <div class=\"col-span-12 flex justify-end toggle-hidden-dependent\">
                    <button type=\"button\" class=\"flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delTask\" data-worker-id=\"\${workerId}\">
                        <i data-lucide=\"trash\" class=\"size-4\"></i>
                    </button>
                </div>
                <input type=\"hidden\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][tasks][\${taskIndex}][status]\" value=\"update\">
                <input type=\"hidden\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][tasks][\${taskIndex}][task_id]\" value=\"\${taskId}\">
                <div class=\"col-span-4\">
                    <input type=\"text\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][tasks][\${taskIndex}][task]\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"\${taskName}\" placeholder=\"Enter Task Name\">
                </div>
                <div class=\"col-span-4\">
                    <input type=\"text\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][tasks][\${taskIndex}][date]\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"\${formattedDate}\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\" data-altFormat=\"d M, Y\">
                </div>
                <div class=\"col-span-4\">
                    <input type=\"text\" name=\"assignments[projects][\${projectId}][workers][\${workerId}][tasks][\${taskIndex}][time]\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"\${taskTime}\" placeholder=\"Enter Time (Hours:Minutes)\" data-provider=\"timepickr\" data-time-hrs=\"true\">
                </div>
            </div>
        `;
    }

    \$('#worker_log_date').flatpickr({
        mode: \"range\",
        dateFormat: \"Y-m-d\",
        onChange: function(selectedDates, dateStr, instance) {
            filterTasksByDateRange();
        }
    });

    // Event listener for the \"Delete Task\" button
    \$(document).on('click', '.delTask', function (e) {
        e.preventDefault();

        // Find the specific task container
        const taskContainer = \$(this).closest('.dependents-container');

        // Update the status input value to \"delete\"
        taskContainer.find('input[name^=\"assignments\"][name\$=\"[status]\"]').val('delete');

        // Hide the task container
        taskContainer.hide();
    });

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

    function getCurrentHalfRange() {
        //let today = new Date();
        let today = new Date();
        let year = today.getFullYear();
        let month = today.getMonth() + 1; // Months are zero indexed, so +1 to get the current month

        let ranges = getSemiMonthlyRanges(year, month);
        let day = today.getDate();

        if (day <= 15) {
            return { half: 'firstHalf', range: ranges.firstHalf };
        } else {
            return { half: 'secondHalf', range: ranges.secondHalf };
        }
    }

    function initialize_date_start() {
        const dateRange = getCurrentHalfRange().range.start + ' to ' + getCurrentHalfRange().range.end;
        console.log(dateRange);
        \$('#worker_log_date').val(dateRange);
    }

    initialize_date_start();

    function filterTasksByDateRange() {
        const dateRange = \$('#worker_log_date').val().split(' to ');
        const projectId = \$('#assignedProject').val(); // Get the selected project ID from the modal

        // Ensure both start_date and end_date are present
        const startDate = dateRange[0] || null;
        const endDate = dateRange[1] || dateRange[0] || null; // Use start_date if end_date is missing

        if (!startDate) {
            console.error('Start date is missing.');
            return; // Exit the function if start_date is missing
        }

        // Collect all promises for API calls
        const promises = [];

        // Iterate over each worker card in the collapsible sections
        \$('.worker-card').each(function () {
            const workerId = \$(this).data('worker-id');
            const dependentsWrapper = \$(this).find('.dependents-wrapper');
            dependentsWrapper.html(''); // Clear existing tasks

            // Prepare the request payload
            const jsonObject = {
                start_date: startDate,
                end_date: endDate,
                project_id: projectId,
                employee_id: workerId
            };

            // Create a promise for the API call
            const promise = apiCall('POST', 'api/employee-projects/filter', jsonObject)
                .then(response => {
                    if (response && response.tasks && response.tasks.length > 0) {
                        let tasksHtml = '';

                        // Filter and map tasks
                        response.tasks.forEach((task, index) => {
                            if (!task.archived) {
                                const totalMinutes = task.assigned_hours;
                                const hours = Math.floor(totalMinutes / 60);
                                const minutes = totalMinutes % 60;

                                tasksHtml += createTaskContainer(
                                    workerId,
                                    projectId,
                                    index,
                                    task.task_desc,
                                    task.date,
                                    `\${hours}:\${minutes}`,
                                    task.id
                                );
                            }
                        });

                        // Append the generated tasks to the worker's dependents-wrapper
                        dependentsWrapper.html(tasksHtml);
                        lucide.createIcons(); // Reinitialize Lucide icons
                        reinitializeFlatpickr(); // Reinitialize Flatpickr for date inputs
                        reinitializeTimepickr(); // Reinitialize Timepickr for time inputs
                    }
                })
                .catch(error => {
                    console.error(`Error fetching tasks for worker \${workerId}:`, error);
                });

            // Add the promise to the array
            promises.push(promise);
        });

        // Wait for all API calls to complete
        Promise.all(promises)
            .then(() => {
                console.log('All tasks have been loaded.');
            })
            .catch(error => {
                console.error('Error loading tasks:', error);
            });
    }
});

function resetModal(modalId) {
    const modal = \$(`#\${modalId}`);

    // Clear dynamically added HTML inside the modal
    modal.find('.collapsible').html('');

    // Reset all input fields and selects to their default state
    modal.find('input, select').each(function () {
        if (\$(this).is('select')) {
            // Clear select options
            \$(this).empty();

            // Reset Choices.js if initialized
            if (\$(this).data('choices')) {
                \$(this).data('choices').destroy();
                \$(this).removeData('choices');
            }
        } else if (\$(this).is('input[type=\"text\"]')) {
            // Clear text inputs
            \$(this).val('');
        }
    });

    // Reset any error messages or alerts
    modal.find('#alert-error-msg').addClass('hidden').text('');

    // Hide the modal
    modal.addClass('hidden').removeClass('flex');
}

function unselectChoices(){
    // Reset projectSelect
    const projectSelect = \$('#projectSelect');
    if (projectSelect.data('choices')) {
        projectSelect.data('choices').removeActiveItems(); // Unselect all options
    }

    // Reset workerSelect
    const workerSelect = \$('#workerSelect');
    if (workerSelect.data('choices')) {
        workerSelect.data('choices').removeActiveItems(); // Unselect all options
    }
}

function clearCollapsiblesInModal(modalId) {
    const modal = \$(`#\${modalId}`);

    // Remove all elements with the 'collapsible' class inside the modal
    modal.find('.collapsible').remove();
}

// Reset the modal when the close button is clicked
\$(document).on('click', '.close-modal-assign-workers', function () {
    const modalId = \$(this).data('modal-close');
    console.log('triggered: ', modalId);
    clearCollapsiblesInModal(modalId); // Clear collapsibles
    unselectChoices(); // Clear selected choices
});

\$(document).on('submit', '#selectedProjectForm', function (e) {
    e.preventDefault(); // Prevent the default form submission
    const formData = \$(this).serialize();
    console.log(formData); // Debugging log
    // Your form submission logic here
    // Make the AJAX request
    \$.ajax({
        url: '";
        // line 1437
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_selected_project_workers");
        yield "', // Symfony route
        type: 'POST',
        data: formData,
        beforeSend: function () {
            // Optional: Show a loader or disable the submit button
            \$('#updateSelectedProject').prop('disabled', true).text('Submitting...');
        },
        success: function (response) {
            // Handle success response
            console.log('Response:', response);
            if (response.status === 'success') {
                showToast(response.message, 'bg-green-500'); // Show success toast
            } else {
                showToast('Something went wrong!', 'bg-red-500'); // Show error toast
            }
        },
        error: function (xhr, status, error) {
            // Handle error response
            console.error('Error:', error);
            showToast('Failed to submit data. Please try again.', 'bg-red-500');
        },
        complete: function () {
            // Optional: Re-enable the submit button
            \$('#updateSelectedProject').prop('disabled', false).text('Save');
        }
    });
});

// Reset the modal when the close button is clicked
\$(document).on('click', '.close-modal-selectedProject', function () {
    const modalId = \$(this).data('modal-close');
    clearCollapsiblesInModal(modalId); // Clear collapsibles
    resetModal(modalId); // Reset the modal to its default state
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
        return "project_management/apps-project.html.twig";
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
        return array (  1654 => 1437,  1220 => 1006,  1178 => 967,  1137 => 929,  756 => 551,  722 => 519,  718 => 517,  713 => 515,  709 => 514,  705 => 513,  701 => 512,  698 => 511,  694 => 510,  688 => 507,  679 => 505,  675 => 504,  666 => 502,  662 => 501,  659 => 500,  633 => 408,  620 => 406,  616 => 405,  609 => 401,  588 => 383,  580 => 378,  544 => 344,  540 => 339,  514 => 315,  490 => 299,  484 => 298,  478 => 297,  472 => 296,  465 => 291,  461 => 287,  453 => 283,  449 => 279,  445 => 278,  441 => 277,  438 => 276,  434 => 275,  406 => 249,  377 => 220,  363 => 208,  355 => 205,  347 => 203,  345 => 202,  342 => 201,  337 => 198,  331 => 195,  325 => 192,  319 => 189,  310 => 182,  306 => 178,  300 => 176,  294 => 164,  290 => 163,  258 => 133,  253 => 131,  249 => 130,  246 => 129,  244 => 128,  235 => 121,  230 => 113,  224 => 112,  215 => 109,  211 => 108,  207 => 107,  204 => 106,  199 => 105,  195 => 104,  179 => 91,  173 => 88,  169 => 87,  164 => 85,  138 => 62,  125 => 52,  110 => 40,  97 => 31,  94 => 30,  90 => 29,  58 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project_management/apps-project.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/project_management/apps-project.html.twig");
    }
}
