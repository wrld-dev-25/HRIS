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

/* employee201/forms-validation.html.twig */
class __TwigTemplate_6e6a42fd4611382b2e40108919438c66 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "employee201/forms-validation.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Forms Validation";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Forms", "title" => "Forms Validation"]);
        yield "


                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Browser Default</h6>
                        <form action=\"#!\">
                            <div class=\"grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3\">
                                <div class=\"mb-4\">
                                    <label for=\"firstNameInput2\" class=\"inline-block mb-2 text-base font-medium\">First Name <span class=\"text-red-500\">*</span></label>
                                    <input type=\"text\" id=\"firstNameInput2\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter First Name\" value=\"Sophia\" required>
                                </div>
                                <div class=\"mb-4\">
                                    <label for=\"lastNameInput2\" class=\"inline-block mb-2 text-base font-medium\">Last Name <span class=\"text-red-500\">*</span></label>
                                    <input type=\"text\" id=\"lastNameInput2\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Last Name\" value=\"Bethany\" required>
                                </div>
                                <div class=\"mb-4\">
                                    <label for=\"UsernameInput\" class=\"inline-block mb-2 text-base font-medium\">Username <span class=\"text-red-500\">*</span></label>
                                    <input type=\"text\" id=\"UsernameInput\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Username\" required>
                                </div>
                                <div class=\"mb-4\">
                                    <label for=\"cityInput\" class=\"inline-block mb-2 text-base font-medium\">City <span class=\"text-red-500\">*</span></label>
                                    <input type=\"text\" id=\"cityInput\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter city\" required>
                                </div>
                                <div class=\"mb-4\">
                                    <label for=\"stateInput\" class=\"inline-block mb-2 text-base font-medium\">State <span class=\"text-red-500\">*</span></label>
                                    <select class=\"form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"stateInput\" required>
                                        <option selected=\"\" disabled=\"\" value=\"\">Choose...</option>
                                        <option>Name</option>
                                    </select>
                                </div>
                                <div class=\"mb-4\">
                                    <label for=\"zipInput\" class=\"inline-block mb-2 text-base font-medium\">Zip <span class=\"text-red-500\">*</span></label>
                                    <input type=\"number\" id=\"zipInput\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter zip code\" required>
                                </div>
                            </div>
                            <div class=\"flex justify-end gap-2\">
                                <button type=\"button\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\"><i data-lucide=\"x\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Cancel</span></button>
                                <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100\">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Sign Up Form</h6>

                        <div class=\"mx-auto md:max-w-lg\">
                            <form action=\"#!\" id=\"signUp\">
                                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                                    <div class=\"mb-4\">
                                        <label for=\"firstNameInput\" class=\"inline-block mb-2 text-base font-medium\">First Name <span class=\"text-red-500\">*</span></label>
                                        <input type=\"text\" id=\"firstNameInput\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter firstname\">
                                        <p id=\"firstNameError\" class=\"mt-1 text-sm text-red-500\"></p>
                                    </div>
                                    <div class=\"mb-4\">
                                        <label for=\"lastNameInput\" class=\"inline-block mb-2 text-base font-medium\">Last Name <span class=\"text-red-500\">*</span></label>
                                        <input type=\"text\" id=\"lastNameInput\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter lastname\">
                                        <p id=\"lastNameError\" class=\"mt-1 text-sm text-red-500\"></p>
                                    </div>
                                </div><!--end grid-->
                                <div class=\"mb-4\">
                                    <label for=\"emailInput\" class=\"inline-block mb-2 text-base font-medium\">Email Address <span class=\"text-red-500\">*</span></label>
                                    <input type=\"email\" id=\"emailInput\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"example@gmail.com\">
                                    <p id=\"emailError\" class=\"mt-1 text-sm text-red-500\"></p>
                                </div>
                                <div class=\"mb-4\">
                                    <label for=\"phoneNumberInput\" class=\"inline-block mb-2 text-base font-medium\">Phone Number <span class=\"text-red-500\">*</span></label>
                                    <input type=\"number\" id=\"phoneNumberInput\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"+(254) 0123 456 789\">
                                    <p id=\"phoneNumberError\" class=\"mt-1 text-sm text-red-500\"></p>
                                </div>
                                ";
        // line 83
        yield "                                <div class=\"flex justify-end gap-2 mt-5\">
                                    <button type=\"button\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\"><i data-lucide=\"x\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Cancel</span></button>
                                    <button type=\"submit\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div><!--end card-->

          

";
        return; yield '';
    }

    // line 97
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        yield "
<script src=\"assets/js/pages/form-validation.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 104
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "employee201/forms-validation.html.twig";
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
        return array (  170 => 104,  166 => 102,  160 => 98,  156 => 97,  139 => 83,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "employee201/forms-validation.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\employee201\\forms-validation.html.twig");
    }
}
