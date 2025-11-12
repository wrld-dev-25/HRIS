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

/* forms-select.html.twig */
class __TwigTemplate_17185535223770bc7b3556cab872ebf8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-select.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-select.html.twig"));

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

        yield "Form Select";
        
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
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Forms", "title" => "Form Select"]);
        yield "

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Default Select</h6>
                        <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3\">
                            <div>
                                <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                    <option selected>Open this select menu</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                            </div>
                            <div>
                                <select class=\"rounded-full form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                    <option selected>Open this select menu</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                            </div>
                            <div>
                                <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                    <option selected>Open this select menu</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Select Size</h6>

                        <div class=\"grid items-center grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3\">
                            <div>
                                <select class=\"py-1 pl-3 text-xs pr-7 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                    <option selected>Open this select menu</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                            </div>
                            <div>
                                <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                    <option selected>Open this select menu</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                            </div>
                            <div>
                                <select class=\"py-3 pl-5 pr-8 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 text-15\">
                                    <option selected>Open this select menu</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->

                <h5 class=\"mb-5 underline\">Choices</h5>

                <div class=\"grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Default Single Select</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices</code> attribute to set a default single select.</p>
                            <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices name=\"choices-single-default\" id=\"choices-single-default\">
                                <option value=\"\">This is a placeholder</option>
                                <option value=\"Choice 1\">Choice 1</option>
                                <option value=\"Choice 2\">Choice 2</option>
                                <option value=\"Choice 3\">Choice 3</option>
                            </select>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Option Groups</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-groups</code> attribute to set option group.</p>
                            <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-single-groups\" data-choices data-choices-groups data-placeholder=\"Select City\" name=\"choices-single-groups\">
                                <option value=\"\">Choose a city</option>
                                <optgroup label=\"UK\">
                                    <option value=\"London\">London</option>
                                    <option value=\"Manchester\">Manchester</option>
                                    <option value=\"Liverpool\">Liverpool</option>
                                </optgroup>
                                <optgroup label=\"FR\">
                                    <option value=\"Paris\">Paris</option>
                                    <option value=\"Lyon\">Lyon</option>
                                    <option value=\"Marseille\">Marseille</option>
                                </optgroup>
                                <optgroup label=\"DE\" disabled>
                                    <option value=\"Hamburg\">Hamburg</option>
                                    <option value=\"Munich\">Munich</option>
                                    <option value=\"Berlin\">Berlin</option>
                                </optgroup>
                                <optgroup label=\"US\">
                                    <option value=\"New York\">New York</option>
                                    <option value=\"Washington\" disabled>Washington</option>
                                    <option value=\"Michigan\">Michigan</option>
                                </optgroup>
                                <optgroup label=\"SP\">
                                    <option value=\"Madrid\">Madrid</option>
                                    <option value=\"Barcelona\">Barcelona</option>
                                    <option value=\"Malaga\">Malaga</option>
                                </optgroup>
                                <optgroup label=\"CA\">
                                    <option value=\"Montreal\">Montreal</option>
                                    <option value=\"Toronto\">Toronto</option>
                                    <option value=\"Vancouver\">Vancouver</option>
                                </optgroup>
                            </select>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Options added via config with no search</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-search-false data-choices-removeItem</code></p>
                            <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-single-no-search\" name=\"choices-single-no-search\" data-choices data-choices-search-false data-choices-removeItem>
                                <option value=\"Zero\">Zero</option>
                                <option value=\"One\">One</option>
                                <option value=\"Two\">Two</option>
                                <option value=\"Three\">Three</option>
                                <option value=\"Four\">Four</option>
                                <option value=\"Five\">Five</option>
                                <option value=\"Six\">Six</option>
                            </select>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Options added via config with no sorting</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-sorting-false</code> attribute.</p>
                            <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-single-no-sorting\" name=\"choices-single-no-sorting\" data-choices data-choices-sorting-false>
                                <option value=\"Madrid\">Madrid</option>
                                <option value=\"Toronto\">Toronto</option>
                                <option value=\"Vancouver\">Vancouver</option>
                                <option value=\"London\">London</option>
                                <option value=\"Manchester\">Manchester</option>
                                <option value=\"Liverpool\">Liverpool</option>
                                <option value=\"Paris\">Paris</option>
                                <option value=\"Malaga\">Malaga</option>
                                <option value=\"Washington\" disabled>Washington</option>
                                <option value=\"Lyon\">Lyon</option>
                                <option value=\"Marseille\">Marseille</option>
                                <option value=\"Hamburg\">Hamburg</option>
                                <option value=\"Munich\">Munich</option>
                                <option value=\"Barcelona\">Barcelona</option>
                                <option value=\"Berlin\">Berlin</option>
                                <option value=\"Montreal\">Montreal</option>
                                <option value=\"New York\">New York</option>
                                <option value=\"Michigan\">Michigan</option>
                            </select>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Default Multiple Select</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices multiple</code> attribute.</p>
                            <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-multiple-default\" data-choices name=\"choices-multiple-default\" multiple>
                                <option value=\"Choice 1\" selected>Choice 1</option>
                                <option value=\"Choice 2\">Choice 2</option>
                                <option value=\"Choice 3\">Choice 3</option>
                                <option value=\"Choice 4\" disabled>Choice 4</option>
                            </select>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">With Remove Button</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-removeItem multiple</code> attribute.</p>
                            <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-multiple-remove-button\" data-choices data-choices-removeItem name=\"choices-multiple-remove-button\" multiple>
                                <option value=\"Choice 1\" selected>Choice 1</option>
                                <option value=\"Choice 2\">Choice 2</option>
                                <option value=\"Choice 3\">Choice 3</option>
                                <option value=\"Choice 4\">Choice 4</option>
                            </select>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Option Groups Multiple</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-multiple-groups=\"true\" multiple</code> attribute.</p>
                            <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-multiple-groups\" name=\"choices-multiple-groups\" data-choices data-choices-multiple-groups=\"true\" multiple>
                                <option value=\"\">Choose a city</option>
                                <optgroup label=\"UK\">
                                    <option value=\"London\">London</option>
                                    <option value=\"Manchester\">Manchester</option>
                                    <option value=\"Liverpool\">Liverpool</option>
                                </optgroup>
                                <optgroup label=\"FR\">
                                    <option value=\"Paris\">Paris</option>
                                    <option value=\"Lyon\">Lyon</option>
                                    <option value=\"Marseille\">Marseille</option>
                                </optgroup>
                                <optgroup label=\"DE\" disabled>
                                    <option value=\"Hamburg\">Hamburg</option>
                                    <option value=\"Munich\">Munich</option>
                                    <option value=\"Berlin\">Berlin</option>
                                </optgroup>
                                <optgroup label=\"US\">
                                    <option value=\"New York\">New York</option>
                                    <option value=\"Washington\" disabled>Washington</option>
                                    <option value=\"Michigan\">Michigan</option>
                                </optgroup>
                                <optgroup label=\"SP\">
                                    <option value=\"Madrid\">Madrid</option>
                                    <option value=\"Barcelona\">Barcelona</option>
                                    <option value=\"Malaga\">Malaga</option>
                                </optgroup>
                                <optgroup label=\"CA\">
                                    <option value=\"Montreal\">Montreal</option>
                                    <option value=\"Toronto\">Toronto</option>
                                    <option value=\"Vancouver\">Vancouver</option>
                                </optgroup>
                            </select>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Set limit values with remove button</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-limit=\"Required Limit\" data-choices-removeItem</code> attribute.</p>
                            <input class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-text-remove-button\" data-choices data-choices-limit=\"3\" data-choices-removeItem type=\"text\" value=\"Task-1\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Unique values only, no pasting</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-text-unique-true</code> attribute.</p>
                            <input class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-text-unique-values\" data-choices data-choices-text-unique-true type=\"text\" value=\"Project-A, Project-B\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Disabled</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-text-disabled-true</code> attribute.</p>
                            <input class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-text-disabled\" data-choices data-choices-text-disabled-true type=\"text\" value=\"josh@joshuajohnson.co.uk, joe@bloggs.co.uk\">
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 256
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

        // line 257
        yield "
<!-- App js -->
<script src=\"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 261
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
        return "forms-select.html.twig";
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
        return array (  385 => 261,  381 => 259,  377 => 257,  364 => 256,  104 => 6,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Form Select{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Forms', title: 'Form Select' }) }}

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Default Select</h6>
                        <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3\">
                            <div>
                                <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                    <option selected>Open this select menu</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                            </div>
                            <div>
                                <select class=\"rounded-full form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                    <option selected>Open this select menu</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                            </div>
                            <div>
                                <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" disabled>
                                    <option selected>Open this select menu</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Select Size</h6>

                        <div class=\"grid items-center grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3\">
                            <div>
                                <select class=\"py-1 pl-3 text-xs pr-7 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                    <option selected>Open this select menu</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                            </div>
                            <div>
                                <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\">
                                    <option selected>Open this select menu</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                            </div>
                            <div>
                                <select class=\"py-3 pl-5 pr-8 form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 text-15\">
                                    <option selected>Open this select menu</option>
                                    <option value=\"1\">One</option>
                                    <option value=\"2\">Two</option>
                                    <option value=\"3\">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->

                <h5 class=\"mb-5 underline\">Choices</h5>

                <div class=\"grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Default Single Select</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices</code> attribute to set a default single select.</p>
                            <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices name=\"choices-single-default\" id=\"choices-single-default\">
                                <option value=\"\">This is a placeholder</option>
                                <option value=\"Choice 1\">Choice 1</option>
                                <option value=\"Choice 2\">Choice 2</option>
                                <option value=\"Choice 3\">Choice 3</option>
                            </select>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Option Groups</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-groups</code> attribute to set option group.</p>
                            <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-single-groups\" data-choices data-choices-groups data-placeholder=\"Select City\" name=\"choices-single-groups\">
                                <option value=\"\">Choose a city</option>
                                <optgroup label=\"UK\">
                                    <option value=\"London\">London</option>
                                    <option value=\"Manchester\">Manchester</option>
                                    <option value=\"Liverpool\">Liverpool</option>
                                </optgroup>
                                <optgroup label=\"FR\">
                                    <option value=\"Paris\">Paris</option>
                                    <option value=\"Lyon\">Lyon</option>
                                    <option value=\"Marseille\">Marseille</option>
                                </optgroup>
                                <optgroup label=\"DE\" disabled>
                                    <option value=\"Hamburg\">Hamburg</option>
                                    <option value=\"Munich\">Munich</option>
                                    <option value=\"Berlin\">Berlin</option>
                                </optgroup>
                                <optgroup label=\"US\">
                                    <option value=\"New York\">New York</option>
                                    <option value=\"Washington\" disabled>Washington</option>
                                    <option value=\"Michigan\">Michigan</option>
                                </optgroup>
                                <optgroup label=\"SP\">
                                    <option value=\"Madrid\">Madrid</option>
                                    <option value=\"Barcelona\">Barcelona</option>
                                    <option value=\"Malaga\">Malaga</option>
                                </optgroup>
                                <optgroup label=\"CA\">
                                    <option value=\"Montreal\">Montreal</option>
                                    <option value=\"Toronto\">Toronto</option>
                                    <option value=\"Vancouver\">Vancouver</option>
                                </optgroup>
                            </select>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Options added via config with no search</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-search-false data-choices-removeItem</code></p>
                            <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-single-no-search\" name=\"choices-single-no-search\" data-choices data-choices-search-false data-choices-removeItem>
                                <option value=\"Zero\">Zero</option>
                                <option value=\"One\">One</option>
                                <option value=\"Two\">Two</option>
                                <option value=\"Three\">Three</option>
                                <option value=\"Four\">Four</option>
                                <option value=\"Five\">Five</option>
                                <option value=\"Six\">Six</option>
                            </select>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Options added via config with no sorting</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-sorting-false</code> attribute.</p>
                            <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-single-no-sorting\" name=\"choices-single-no-sorting\" data-choices data-choices-sorting-false>
                                <option value=\"Madrid\">Madrid</option>
                                <option value=\"Toronto\">Toronto</option>
                                <option value=\"Vancouver\">Vancouver</option>
                                <option value=\"London\">London</option>
                                <option value=\"Manchester\">Manchester</option>
                                <option value=\"Liverpool\">Liverpool</option>
                                <option value=\"Paris\">Paris</option>
                                <option value=\"Malaga\">Malaga</option>
                                <option value=\"Washington\" disabled>Washington</option>
                                <option value=\"Lyon\">Lyon</option>
                                <option value=\"Marseille\">Marseille</option>
                                <option value=\"Hamburg\">Hamburg</option>
                                <option value=\"Munich\">Munich</option>
                                <option value=\"Barcelona\">Barcelona</option>
                                <option value=\"Berlin\">Berlin</option>
                                <option value=\"Montreal\">Montreal</option>
                                <option value=\"New York\">New York</option>
                                <option value=\"Michigan\">Michigan</option>
                            </select>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Default Multiple Select</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices multiple</code> attribute.</p>
                            <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-multiple-default\" data-choices name=\"choices-multiple-default\" multiple>
                                <option value=\"Choice 1\" selected>Choice 1</option>
                                <option value=\"Choice 2\">Choice 2</option>
                                <option value=\"Choice 3\">Choice 3</option>
                                <option value=\"Choice 4\" disabled>Choice 4</option>
                            </select>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">With Remove Button</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-removeItem multiple</code> attribute.</p>
                            <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-multiple-remove-button\" data-choices data-choices-removeItem name=\"choices-multiple-remove-button\" multiple>
                                <option value=\"Choice 1\" selected>Choice 1</option>
                                <option value=\"Choice 2\">Choice 2</option>
                                <option value=\"Choice 3\">Choice 3</option>
                                <option value=\"Choice 4\">Choice 4</option>
                            </select>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Option Groups Multiple</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-multiple-groups=\"true\" multiple</code> attribute.</p>
                            <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-multiple-groups\" name=\"choices-multiple-groups\" data-choices data-choices-multiple-groups=\"true\" multiple>
                                <option value=\"\">Choose a city</option>
                                <optgroup label=\"UK\">
                                    <option value=\"London\">London</option>
                                    <option value=\"Manchester\">Manchester</option>
                                    <option value=\"Liverpool\">Liverpool</option>
                                </optgroup>
                                <optgroup label=\"FR\">
                                    <option value=\"Paris\">Paris</option>
                                    <option value=\"Lyon\">Lyon</option>
                                    <option value=\"Marseille\">Marseille</option>
                                </optgroup>
                                <optgroup label=\"DE\" disabled>
                                    <option value=\"Hamburg\">Hamburg</option>
                                    <option value=\"Munich\">Munich</option>
                                    <option value=\"Berlin\">Berlin</option>
                                </optgroup>
                                <optgroup label=\"US\">
                                    <option value=\"New York\">New York</option>
                                    <option value=\"Washington\" disabled>Washington</option>
                                    <option value=\"Michigan\">Michigan</option>
                                </optgroup>
                                <optgroup label=\"SP\">
                                    <option value=\"Madrid\">Madrid</option>
                                    <option value=\"Barcelona\">Barcelona</option>
                                    <option value=\"Malaga\">Malaga</option>
                                </optgroup>
                                <optgroup label=\"CA\">
                                    <option value=\"Montreal\">Montreal</option>
                                    <option value=\"Toronto\">Toronto</option>
                                    <option value=\"Vancouver\">Vancouver</option>
                                </optgroup>
                            </select>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Set limit values with remove button</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-limit=\"Required Limit\" data-choices-removeItem</code> attribute.</p>
                            <input class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-text-remove-button\" data-choices data-choices-limit=\"3\" data-choices-removeItem type=\"text\" value=\"Task-1\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Unique values only, no pasting</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-text-unique-true</code> attribute.</p>
                            <input class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-text-unique-values\" data-choices data-choices-text-unique-true type=\"text\" value=\"Project-A, Project-B\">
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-15\">Disabled</h6>
                            <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Set <code class=\"text-xs text-pink-500 select-all\">data-choices data-choices-text-disabled-true</code> attribute.</p>
                            <input class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"choices-text-disabled\" data-choices data-choices-text-disabled-true type=\"text\" value=\"josh@joshuajohnson.co.uk, joe@bloggs.co.uk\">
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

{% endblock %}
    
{% block javascripts %}

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

{% endblock %}", "forms-select.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\forms-select.html.twig");
    }
}
