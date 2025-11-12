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

/* ui-drawer.html.twig */
class __TwigTemplate_8a4a52a1632a0ee087c91d72a43469a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-drawer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-drawer.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "ui-drawer.html.twig", 1);
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

        yield "Drawer";
        
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "UI Elements", "title" => "Drawer"]);
        yield "

                <div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Default</h6>
                            <div class=\"flex flex-wrap gap-2\">
                                <button data-drawer-target=\"drawerEnd\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">End Button</button>
                                <div id=\"drawerEnd\" drawer-end class=\"fixed inset-y-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow ltr:right-0 rtl:left-0 md:w-80 z-drawer show dark:bg-zink-600\">
                                    <div class=\"flex items-center justify-between p-4 border-b card-body border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Heading</h6>
                                        <button data-drawer-close=\"drawerEnd\"><i data-lucide=\"x\" class=\"size-4 transition-all duration-200 ease-linear text-slate-500 hover:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50\"></i></button>
                                    </div>
                                    <div class=\"h-full p-4 overflow-y-auto\">
                                        <div class=\"card-body\">
                                            <h6 class=\"mb-4 text-15\">Drawer Content</h6>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-between p-4 border-t border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Footer</h6>
                                    </div>
                                </div>
                                
                                <button data-drawer-target=\"drawerStart\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Start Drawer</button>
                                <div id=\"drawerStart\" drawer-start class=\"fixed inset-y-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow ltr:left-0 rtl:right-0 md:w-80 z-drawer show dark:bg-zink-600\">
                                    <div class=\"flex items-center justify-between p-4 border-b card-body border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Heading</h6>
                                        <button data-drawer-close=\"drawerEnd\"><i data-lucide=\"x\" class=\"size-4 transition-all duration-200 ease-linear text-slate-500 hover:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50\"></i></button>
                                    </div>
                                    <div class=\"h-full p-4 overflow-y-auto\">
                                        <div class=\"card-body\">
                                            <h6 class=\"mb-4 text-15\">Drawer Content</h6>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-between p-4 border-t border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Footer</h6>
                                    </div>
                                </div>
                                
                                <button data-drawer-target=\"drawerBottom\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Bottom Drawer</button>
                                <div id=\"drawerBottom\" drawer-bottom class=\"fixed bottom-0 left-0 right-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow md:h-80 z-drawer show dark:bg-zink-600\">
                                    <div class=\"flex items-center justify-between p-4 border-b card-body border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Heading</h6>
                                        <button data-drawer-close=\"drawerEnd\"><i data-lucide=\"x\" class=\"size-4 transition-all duration-200 ease-linear text-slate-500 hover:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50\"></i></button>
                                    </div>
                                    <div class=\"h-full p-4 overflow-y-auto\">
                                        <div class=\"card-body\">
                                            <h6 class=\"mb-4 text-15\">Drawer Content</h6>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-between p-4 border-t border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Footer</h6>
                                    </div>
                                </div>
                                
                                <button data-drawer-target=\"drawerTop\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Top Drawer</button>
                                <div id=\"drawerTop\" drawer-top class=\"fixed top-0 left-0 right-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow md:h-80 z-drawer show dark:bg-zink-600\">
                                    <div class=\"flex items-center justify-between p-4 border-b card-body border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Heading</h6>
                                        <button data-drawer-close=\"drawerEnd\"><i data-lucide=\"x\" class=\"size-4 transition-all duration-200 ease-linear text-slate-500 hover:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50\"></i></button>
                                    </div>
                                    <div class=\"h-full p-4 overflow-y-auto\">
                                        <div class=\"card-body\">
                                            <h6 class=\"mb-4 text-15\">Drawer Content</h6>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-between p-4 border-t border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Footer</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                    
                </div>
            

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 89
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        yield "
<!-- App js -->
<script src=\"";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 94
        yield "
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
        return "ui-drawer.html.twig";
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
        return array (  205 => 94,  201 => 92,  197 => 90,  187 => 89,  94 => 6,  91 => 5,  81 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Drawer{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'UI Elements', title: 'Drawer' }) }}

                <div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Default</h6>
                            <div class=\"flex flex-wrap gap-2\">
                                <button data-drawer-target=\"drawerEnd\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">End Button</button>
                                <div id=\"drawerEnd\" drawer-end class=\"fixed inset-y-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow ltr:right-0 rtl:left-0 md:w-80 z-drawer show dark:bg-zink-600\">
                                    <div class=\"flex items-center justify-between p-4 border-b card-body border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Heading</h6>
                                        <button data-drawer-close=\"drawerEnd\"><i data-lucide=\"x\" class=\"size-4 transition-all duration-200 ease-linear text-slate-500 hover:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50\"></i></button>
                                    </div>
                                    <div class=\"h-full p-4 overflow-y-auto\">
                                        <div class=\"card-body\">
                                            <h6 class=\"mb-4 text-15\">Drawer Content</h6>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-between p-4 border-t border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Footer</h6>
                                    </div>
                                </div>
                                
                                <button data-drawer-target=\"drawerStart\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Start Drawer</button>
                                <div id=\"drawerStart\" drawer-start class=\"fixed inset-y-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow ltr:left-0 rtl:right-0 md:w-80 z-drawer show dark:bg-zink-600\">
                                    <div class=\"flex items-center justify-between p-4 border-b card-body border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Heading</h6>
                                        <button data-drawer-close=\"drawerEnd\"><i data-lucide=\"x\" class=\"size-4 transition-all duration-200 ease-linear text-slate-500 hover:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50\"></i></button>
                                    </div>
                                    <div class=\"h-full p-4 overflow-y-auto\">
                                        <div class=\"card-body\">
                                            <h6 class=\"mb-4 text-15\">Drawer Content</h6>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-between p-4 border-t border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Footer</h6>
                                    </div>
                                </div>
                                
                                <button data-drawer-target=\"drawerBottom\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Bottom Drawer</button>
                                <div id=\"drawerBottom\" drawer-bottom class=\"fixed bottom-0 left-0 right-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow md:h-80 z-drawer show dark:bg-zink-600\">
                                    <div class=\"flex items-center justify-between p-4 border-b card-body border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Heading</h6>
                                        <button data-drawer-close=\"drawerEnd\"><i data-lucide=\"x\" class=\"size-4 transition-all duration-200 ease-linear text-slate-500 hover:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50\"></i></button>
                                    </div>
                                    <div class=\"h-full p-4 overflow-y-auto\">
                                        <div class=\"card-body\">
                                            <h6 class=\"mb-4 text-15\">Drawer Content</h6>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-between p-4 border-t border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Footer</h6>
                                    </div>
                                </div>
                                
                                <button data-drawer-target=\"drawerTop\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Top Drawer</button>
                                <div id=\"drawerTop\" drawer-top class=\"fixed top-0 left-0 right-0 flex flex-col w-full transition-transform duration-300 ease-in-out transform bg-white shadow md:h-80 z-drawer show dark:bg-zink-600\">
                                    <div class=\"flex items-center justify-between p-4 border-b card-body border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Heading</h6>
                                        <button data-drawer-close=\"drawerEnd\"><i data-lucide=\"x\" class=\"size-4 transition-all duration-200 ease-linear text-slate-500 hover:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50\"></i></button>
                                    </div>
                                    <div class=\"h-full p-4 overflow-y-auto\">
                                        <div class=\"card-body\">
                                            <h6 class=\"mb-4 text-15\">Drawer Content</h6>
                                            <p class=\"text-slate-500 dark:text-zink-200\">They all have something to say beyond the words on the page. They can come across as casual or neutral, exotic or graphic.</p>
                                        </div>
                                    </div>
                                    <div class=\"flex items-center justify-between p-4 border-t border-slate-200 dark:border-zink-500\">
                                        <h6 class=\"text-15\">Drawer Footer</h6>
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

{% endblock %}", "ui-drawer.html.twig", "C:\\Users\\SUNIT226\\Desktop\\Repos\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\ui-drawer.html.twig");
    }
}
