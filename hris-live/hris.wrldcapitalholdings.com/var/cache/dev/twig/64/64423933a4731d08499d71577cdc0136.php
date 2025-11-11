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

/* pages-contact-us.html.twig */
class __TwigTemplate_17cce10994355abb57c53ea81b1ff283 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages-contact-us.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages-contact-us.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Contact Us";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        yield "                ";
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Pages", "title" => "Contact Us"]);
        yield "

                <div class=\"mx-auto mb-16 text-center xl:w-2/5\">
                    <h4 class=\"mb-2\">Contact Us</h4>
                    <p class=\"text-slate-500 dark:text-zink-200\">Fill out the form and a member from our sales team will get back to you within 2 working days, or scroll down for more ways to get in touch.</p>
                </div>

                <div class=\"grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-4\">
                    <div class=\"card\">
                        <div class=\"!px-6 card-body flex flex-col h-full\">
                            <div class=\"flex items-center justify-center size-16 mx-auto text-xl bg-white rounded-full shadow dark:bg-zink-600 -mt-14\">
                                <i data-lucide=\"map-pin\" class=\"text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                            </div>
                            <div class=\"mt-5 text-center\">
                                <h6 class=\"mb-2 text-16\">Our Main Office</h6>
                                <p class=\"mb-5 text-slate-500 dark:text-zink-200\">501, Powell Ave, Clarks Summit, Pennsylvania, United States - 18411</p>

                            </div>
                            <div class=\"mt-auto text-center\">
                                <a href=\"#!\" class=\"transition-all duration-200 ease-linear text-custom-500 hover:text-custom-800 dark:hover:text-custom-400\">Visit Website <i data-lucide=\"move-right\" class=\"inline-block size-4 ltr:ml-1 rtl:mr-1 rtl:rotate-180\"></i></a>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"!px-6 card-body flex flex-col h-full\">
                            <div class=\"flex items-center justify-center size-16 mx-auto text-xl bg-white rounded-full shadow dark:bg-zink-600 -mt-14\">
                                <i data-lucide=\"shopping-bag\" class=\"text-purple-500 fill-purple-100 dark:fill-purple-500/20\"></i>
                            </div>
                            <div class=\"mt-5 text-center\">
                                <h6 class=\"mb-2 text-16\">Sales Team Support</h6>
                                <p class=\"mb-5 text-slate-500 dark:text-zink-200\">tailwick@sales.com</p>

                            </div>
                            <div class=\"mt-auto text-center\">
                                <a href=\"#!\" class=\"transition-all duration-200 ease-linear text-custom-500 hover:text-custom-800 dark:hover:text-custom-400\">Sales Support <i data-lucide=\"move-right\" class=\"inline-block size-4 ltr:ml-1 rtl:mr-1 rtl:rotate-180\"></i></a>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"!px-6 card-body flex flex-col h-full\">
                            <div class=\"flex items-center justify-center size-16 mx-auto text-xl bg-white rounded-full shadow dark:bg-zink-600 -mt-14\">
                                <i data-lucide=\"compass\" class=\"text-orange-500 fill-orange-100 dark:fill-orange-500/20\"></i>
                            </div>
                            <div class=\"mt-5 text-center\">
                                <h6 class=\"mb-2 text-16\">Help & Support</h6>
                                <p class=\"mb-1 text-slate-500 dark:text-zink-200\">tailwick@support.com</p>
                                <p class=\"mb-5 text-slate-500 dark:text-zink-200\">www.tailwick.com</p>

                            </div>
                            <div class=\"mt-auto text-center\">
                                <a href=\"#!\" class=\"transition-all duration-200 ease-linear text-custom-500 hover:text-custom-800 dark:hover:text-custom-400\">Contact Support <i data-lucide=\"move-right\" class=\"inline-block size-4 ltr:ml-1 rtl:mr-1 rtl:rotate-180\"></i></a>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"!px-6 card-body flex flex-col h-full\">
                            <div class=\"flex items-center justify-center size-16 mx-auto text-xl bg-white rounded-full shadow dark:bg-zink-600 -mt-14\">
                                <i data-lucide=\"user-square\" class=\"text-custom-500 fill-custom-100 dark:fill-custom-500/20\"></i>
                            </div>
                            <div class=\"mt-5 text-center\">
                                <h6 class=\"mb-2 text-16\">Email & Phone</h6>
                                <p class=\"mb-1 text-slate-500 dark:text-zink-200\">tailwick@email.com</p>
                                <p class=\"mb-5 text-slate-500 dark:text-zink-200\">(570) 586 2588</p>

                            </div>
                            <div class=\"mt-auto text-center\">
                                <a href=\"#!\" class=\"transition-all duration-200 ease-linear text-custom-500 hover:text-custom-800 dark:hover:text-custom-400\">Visit Portfolio <i data-lucide=\"move-right\" class=\"inline-block size-4 ltr:ml-1 rtl:mr-1 rtl:rotate-180\"></i></a>
                            </div>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                            <div class=\"xl:col-span-3 bg-custom-900 card !mb-0 dark:bg-custom-950\">
                                <div class=\"flex flex-col h-full card-body\">
                                    <div class=\"mb-6\">
                                        <h5 class=\"mb-2 text-white\">Reach out to our business solution support team for assistance</h5>
                                        <p class=\"text-custom-200\">Are you an existing customer or do you require further assistance with support for <b>additional inquiries</b>?</p>
                                    </div>
                                    <div class=\"mt-auto\">
                                        <ul class=\"flex flex-wrap items-center justify-center gap-2\">
                                            <li>
                                                <a href=\"#!\" class=\"flex items-center justify-center size-10 transition-all duration-200 ease-linear rounded-md bg-custom-800/50 text-custom-300 hover:text-white dark:bg-custom-900/50\">
                                                    <i data-lucide=\"facebook\" class=\"size-5\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#!\" class=\"flex items-center justify-center size-10 transition-all duration-200 ease-linear rounded-md bg-custom-800/50 text-custom-300 hover:text-white dark:bg-custom-900/50\">
                                                    <i data-lucide=\"twitter\" class=\"size-5\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#!\" class=\"flex items-center justify-center size-10 transition-all duration-200 ease-linear rounded-md bg-custom-800/50 text-custom-300 hover:text-white dark:bg-custom-900/50\">
                                                    <i data-lucide=\"mail\" class=\"size-5\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#!\" class=\"flex items-center justify-center size-10 transition-all duration-200 ease-linear rounded-md bg-custom-800/50 text-custom-300 hover:text-white dark:bg-custom-900/50\">
                                                    <i data-lucide=\"globe\" class=\"size-5\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#!\" class=\"flex items-center justify-center size-10 transition-all duration-200 ease-linear rounded-md bg-custom-800/50 text-custom-300 hover:text-white dark:bg-custom-900/50\">
                                                    <i data-lucide=\"instagram\" class=\"size-5\"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#!\" class=\"flex items-center justify-center size-10 transition-all duration-200 ease-linear rounded-md bg-custom-800/50 text-custom-300 hover:text-white dark:bg-custom-900/50\">
                                                    <i data-lucide=\"youtube\" class=\"size-5\"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class=\"xl:col-span-9\">
                                <form action=\"#!\">
                                    <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2\">
                                        <div>
                                            <label for=\"inputFirstName\" class=\"inline-block mb-2 text-base font-medium\">First Name</label>
                                            <input type=\"text\" id=\"inputFirstName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter your First Name\" required>
                                        </div>
                                        <div>
                                            <label for=\"inputLastName\" class=\"inline-block mb-2 text-base font-medium\">Last Name</label>
                                            <input type=\"text\" id=\"inputLastName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter your Last Name\" required>
                                        </div>
                                        <div>
                                            <label for=\"inputEmail\" class=\"inline-block mb-2 text-base font-medium\">Email</label>
                                            <input type=\"email\" id=\"inputEmail\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter your Email\" required>
                                        </div>
                                        <div>
                                            <label for=\"inputPhone\" class=\"inline-block mb-2 text-base font-medium\">Phone</label>
                                            <input type=\"number\" id=\"inputPhone\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Phone no\" required>
                                        </div>
                                        <div>
                                            <label for=\"inputCompanyName\" class=\"inline-block mb-2 text-base font-medium\">Company Name</label>
                                            <input type=\"text\" id=\"inputCompanyName\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Company name\" required>
                                        </div>
                                        <div>
                                            <label for=\"inputSubject\" class=\"inline-block mb-2 text-base font-medium\">Subject</label>
                                            <input type=\"text\" id=\"inputSubject\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Subject\" required>
                                        </div>
                                        <div class=\"md:col-span-2\">
                                            <label for=\"inputSubject\" class=\"inline-block mb-2 text-base font-medium\">Comments</label>
                                            <textarea name=\"\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"\" rows=\"5\" id=\"inputSubject\" placeholder=\"Enter comments\"></textarea>
                                        </div>
                                    </div>
                                    <div class=\"mt-5 ltr:text-right rtl:text-left\">
                                        <button type=\"submit\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div><!--end grid-->
                    </div>
                </div><!--end card-->

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 165
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 166
        yield "
<!-- App js -->
<script src=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 170
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages-contact-us.html.twig";
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
        return array (  259 => 170,  255 => 168,  251 => 166,  244 => 165,  76 => 5,  69 => 4,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages-contact-us.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\pages-contact-us.html.twig");
    }
}
