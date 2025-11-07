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

/* ui-modal.html.twig */
class __TwigTemplate_d376557d55dff37ab6ded4b35640bb73 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "ui-modal.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Modal";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "UI Elements", "title" => "Modal"]);
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
        return; yield '';
    }

    // line 199
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ui-modal.html.twig";
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
        return array (  273 => 204,  269 => 202,  265 => 200,  261 => 199,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ui-modal.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/ui-modal.html.twig");
    }
}
