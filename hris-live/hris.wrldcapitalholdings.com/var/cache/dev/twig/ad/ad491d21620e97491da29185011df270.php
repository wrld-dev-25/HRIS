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

/* ui-modal.html.twig */
class __TwigTemplate_06ec8feb73a5027d0e9d409a877263c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-modal.html.twig"));

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

        yield "Modal";
        
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
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "UI Elements", "title" => "Modal"]);
        yield "

                <div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Default</h6>
                            <div class=\"flex flex-wrap gap-2\">
                                <button data-modal-target=\"defaultModal\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Default Modal</button>
                                <div id=\"defaultModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
                                    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"defaultModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <button data-modal-target=\"topModal\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Top Modal</button>
                                <div id=\"topModal\" modal-top class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 show\">
                                    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"topModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <button data-modal-target=\"bottomModal\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Bottom Modal</button>
                                <div id=\"bottomModal\" modal-bottom class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 show\">
                                    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"bottomModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Modal Sizes</h6>
                            
                            <div class=\"flex flex-wrap gap-2\">
                                <button data-modal-target=\"extraSmallModal\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Extra Small Modal</button>
                                <div id=\"extraSmallModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
                                    <div class=\"w-screen md:w-[20rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"extraSmallModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <button data-modal-target=\"smallModal\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Small Modal</button>
                                <div id=\"smallModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
                                    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"smallModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <button data-modal-target=\"defaultModal2\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Default Modal</button>
                                <div id=\"defaultModal2\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
                                    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"defaultModal2\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <button data-modal-target=\"largeModal\" type=\"button\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:focus:ring-custom-400/20\">Large Modal</button>
                                <div id=\"largeModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
                                    <div class=\"w-screen md:w-[40rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"largeModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <button data-modal-target=\"extraLargeModal\" type=\"button\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:focus:ring-custom-400/20\">Extra Large Modal</button>
                                <div id=\"extraLargeModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
                                    <div class=\"w-screen lg:w-[55rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"extraLargeModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <button data-modal-target=\"fullScreenModal\" type=\"button\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:focus:ring-custom-400/20\">Extra Large Modal</button>
                                <div id=\"fullScreenModal\" modal-center class=\"fixed inset-0 flex flex-col hidden transition-all duration-300 ease-in-out z-drawer show\">
                                    <div class=\"flex flex-col w-full h-full bg-white dark:bg-zink-600\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"fullScreenModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"p-4\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                    </div><!--end card-->
                </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 199
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

        // line 200
        yield "
<!-- App js -->
<script src=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 204
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
        return "ui-modal.html.twig";
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
        return array (  328 => 204,  324 => 202,  320 => 200,  307 => 199,  104 => 6,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Modal{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'UI Elements', title: 'Modal' }) }}

                <div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Default</h6>
                            <div class=\"flex flex-wrap gap-2\">
                                <button data-modal-target=\"defaultModal\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Default Modal</button>
                                <div id=\"defaultModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
                                    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"defaultModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <button data-modal-target=\"topModal\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Top Modal</button>
                                <div id=\"topModal\" modal-top class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 show\">
                                    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"topModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <button data-modal-target=\"bottomModal\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Bottom Modal</button>
                                <div id=\"bottomModal\" modal-bottom class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 show\">
                                    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"bottomModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Modal Sizes</h6>
                            
                            <div class=\"flex flex-wrap gap-2\">
                                <button data-modal-target=\"extraSmallModal\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Extra Small Modal</button>
                                <div id=\"extraSmallModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
                                    <div class=\"w-screen md:w-[20rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"extraSmallModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <button data-modal-target=\"smallModal\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Small Modal</button>
                                <div id=\"smallModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
                                    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"smallModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <button data-modal-target=\"defaultModal2\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Default Modal</button>
                                <div id=\"defaultModal2\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
                                    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"defaultModal2\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <button data-modal-target=\"largeModal\" type=\"button\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:focus:ring-custom-400/20\">Large Modal</button>
                                <div id=\"largeModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
                                    <div class=\"w-screen md:w-[40rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"largeModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <button data-modal-target=\"extraLargeModal\" type=\"button\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:focus:ring-custom-400/20\">Extra Large Modal</button>
                                <div id=\"extraLargeModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
                                    <div class=\"w-screen lg:w-[55rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"extraLargeModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <button data-modal-target=\"fullScreenModal\" type=\"button\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:focus:ring-custom-400/20\">Extra Large Modal</button>
                                <div id=\"fullScreenModal\" modal-center class=\"fixed inset-0 flex flex-col hidden transition-all duration-300 ease-in-out z-drawer show\">
                                    <div class=\"flex flex-col w-full h-full bg-white dark:bg-zink-600\">
                                        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Heading</h5>
                                            <button data-modal-close=\"fullScreenModal\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
                                        </div>
                                        <div class=\"p-4\">
                                            <h5 class=\"mb-3 text-16\">Modal Content</h5>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                        <div class=\"flex items-center justify-between p-4 mt-auto border-t border-slate-200 dark:border-zink-500\">
                                            <h5 class=\"text-16\">Modal Footer</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                        </div>
                    </div><!--end card-->
                </div>

{% endblock %}
    
{% block javascripts %}

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

{% endblock %}", "ui-modal.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\ui-modal.html.twig");
    }
}
