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

/* ui-progress-bar.html.twig */
class __TwigTemplate_f375116373f6b62bad1c5c8bbf0b3489 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-progress-bar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-progress-bar.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "ui-progress-bar.html.twig", 1);
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

        yield "Progressbar";
        
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "UI Elements", "title" => "Progressbar"]);
        yield "

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Default & Color Variants</h6>
                        <div class=\"grid grid-cols-1 gap-x-4 xl:grid-cols-2\">
                            <div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-custom-500 h-2.5 rounded-full\" style=\"width: 25%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-green-500 h-2.5 rounded-full\" style=\"width: 50%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-orange-500 h-2.5 rounded-full\" style=\"width: 75%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 dark:bg-zink-600\">
                                    <div class=\"bg-sky-500 h-2.5 rounded-full\" style=\"width: 100%\"></div>
                                </div>
                            </div>
                            <div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-yellow-500 h-2.5 rounded-full\" style=\"width: 25%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-red-500 h-2.5 rounded-full\" style=\"width: 50%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-purple-500 h-2.5 rounded-full\" style=\"width: 75%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 dark:bg-zink-600\">
                                    <div class=\"bg-slate-500 dark:bg-zink-200 h-2.5 rounded-full\" style=\"width: 100%\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->

                <div class=\"grid grid-cols-1 gap-x-4 xl:grid-cols-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Progress with Label</h6>
                            <div class=\"pt-2\">
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-7 dark:bg-zink-600\">
                                    <div class=\"bg-custom-500 h-2.5 rounded-full animate-progress relative\" style=\"width: 25%\"><div class=\"absolute ltr:right-0 rtl:left-0 inline-block px-2 py-0.5 text-[10px] text-white bg-custom-500 rounded -top-6 after:absolute after:border-4 ltr:after:right-1/2 rtl:after:left-1/2 after:-bottom-2 after:border-transparent after:border-t-custom-500\">15%</div></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-7 dark:bg-zink-600\">
                                    <div class=\"bg-green-500 h-2.5 rounded-full animate-progress relative\" style=\"width: 70%\"><div class=\"absolute ltr:right-0 rtl:left-0 inline-block px-2 py-0.5 text-[10px] text-white bg-green-500 rounded -top-6 after:absolute after:border-4 ltr:after:right-1/2 rtl:after:left-1/2 after:-bottom-2 after:border-transparent after:border-t-green-500\">70%</div></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-0 dark:bg-zink-600\">
                                    <div class=\"bg-orange-500 h-2.5 rounded-full animate-progress relative\" style=\"width: 40%\"><div class=\"absolute ltr:right-0 rtl:left-0 inline-block px-2 py-0.5 text-[10px] text-white bg-orange-500 rounded -top-6 after:absolute after:border-4 ltr:after:right-1/2 rtl:after:left-1/2 after:-bottom-2 after:border-transparent after:border-t-orange-500\">40%</div></div>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Animated Progress</h6>
                            <div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-yellow-500 h-2.5 rounded-full animate-progress\" style=\"width: 25%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-red-500 h-2.5 rounded-full animate-progress\" style=\"width: 50%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-purple-500 h-2.5 rounded-full animate-progress\" style=\"width: 75%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 dark:bg-zink-600\">
                                    <div class=\"bg-slate-500 dark:bg-zink-200 h-2.5 rounded-full animate-progress\" style=\"width: 100%\"></div>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Progress Sizes</h6>
                        <div class=\"w-full h-1.5 mb-4 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-1.5 rounded-full bg-custom-500\" style=\"width: 25%\"></div>
                        </div>
                        <div class=\"w-full h-2 mb-4 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-2 rounded-full bg-custom-500\" style=\"width: 25%\"></div>
                        </div>
                        <div class=\"w-full h-3 mb-4 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-3 rounded-full bg-custom-500\" style=\"width: 25%\"></div>
                        </div>
                        <div class=\"w-full h-3.5 mb-4 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-3.5 rounded-full bg-custom-500\" style=\"width: 25%\"></div>
                        </div>
                        <div class=\"w-full h-5 mb-4 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-5 rounded-full bg-custom-500\" style=\"width: 25%\"></div>
                        </div>
                        <div class=\"w-full h-6 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-6 rounded-full bg-custom-500\" style=\"width: 25%\"></div>
                        </div>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Progress with Content</h6>
                        <div>
                            <div class=\"flex items-center justify-between mb-2\">
                                <h6 class=\"mb-0\">Tailwick - Admin & Dashboard</h6>
                                <h6 class=\"mb-0 text-custom-500\">24%</h6>
                            </div>
                            <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                <div class=\"bg-custom-500 h-2.5 rounded-full\" style=\"width: 24%\"></div>
                            </div>
                        </div>
                        <div>
                            <div class=\"flex items-center justify-between mb-2\">
                                <h6 class=\"mb-0\">Nazox - Admin & Dashboard</h6>
                                <h6 class=\"mb-0 text-green-500\">66%</h6>
                            </div>
                            <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                <div class=\"bg-green-500 h-2.5 rounded-full\" style=\"width: 66%\"></div>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">With Label Inside</h6>
                        <div class=\"w-full h-3 mb-4 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"bg-custom-500 h-3 rounded-full text-[8px] text-white text-center\" style=\"width: 24%\">24%</div>
                        </div>
                        <div class=\"w-full h-3.5 mb-4 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-3.5 rounded-full bg-custom-500 text-[10px] text-center text-white\" style=\"width: 25%\">25%</div>
                        </div>
                        <div class=\"w-full h-5 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-5 text-xs text-center text-white rounded-full bg-custom-500\" style=\"width: 25%\">25%</div>
                        </div>
                    </div>
                </div><!--end card-->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 147
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 148
        yield "
<!-- App js -->
<script src=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 152
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
        return "ui-progress-bar.html.twig";
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
        return array (  263 => 152,  259 => 150,  255 => 148,  245 => 147,  94 => 6,  91 => 5,  81 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Progressbar{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'UI Elements', title: 'Progressbar' }) }}

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Default & Color Variants</h6>
                        <div class=\"grid grid-cols-1 gap-x-4 xl:grid-cols-2\">
                            <div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-custom-500 h-2.5 rounded-full\" style=\"width: 25%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-green-500 h-2.5 rounded-full\" style=\"width: 50%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-orange-500 h-2.5 rounded-full\" style=\"width: 75%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 dark:bg-zink-600\">
                                    <div class=\"bg-sky-500 h-2.5 rounded-full\" style=\"width: 100%\"></div>
                                </div>
                            </div>
                            <div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-yellow-500 h-2.5 rounded-full\" style=\"width: 25%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-red-500 h-2.5 rounded-full\" style=\"width: 50%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-purple-500 h-2.5 rounded-full\" style=\"width: 75%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 dark:bg-zink-600\">
                                    <div class=\"bg-slate-500 dark:bg-zink-200 h-2.5 rounded-full\" style=\"width: 100%\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->

                <div class=\"grid grid-cols-1 gap-x-4 xl:grid-cols-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Progress with Label</h6>
                            <div class=\"pt-2\">
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-7 dark:bg-zink-600\">
                                    <div class=\"bg-custom-500 h-2.5 rounded-full animate-progress relative\" style=\"width: 25%\"><div class=\"absolute ltr:right-0 rtl:left-0 inline-block px-2 py-0.5 text-[10px] text-white bg-custom-500 rounded -top-6 after:absolute after:border-4 ltr:after:right-1/2 rtl:after:left-1/2 after:-bottom-2 after:border-transparent after:border-t-custom-500\">15%</div></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-7 dark:bg-zink-600\">
                                    <div class=\"bg-green-500 h-2.5 rounded-full animate-progress relative\" style=\"width: 70%\"><div class=\"absolute ltr:right-0 rtl:left-0 inline-block px-2 py-0.5 text-[10px] text-white bg-green-500 rounded -top-6 after:absolute after:border-4 ltr:after:right-1/2 rtl:after:left-1/2 after:-bottom-2 after:border-transparent after:border-t-green-500\">70%</div></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-0 dark:bg-zink-600\">
                                    <div class=\"bg-orange-500 h-2.5 rounded-full animate-progress relative\" style=\"width: 40%\"><div class=\"absolute ltr:right-0 rtl:left-0 inline-block px-2 py-0.5 text-[10px] text-white bg-orange-500 rounded -top-6 after:absolute after:border-4 ltr:after:right-1/2 rtl:after:left-1/2 after:-bottom-2 after:border-transparent after:border-t-orange-500\">40%</div></div>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Animated Progress</h6>
                            <div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-yellow-500 h-2.5 rounded-full animate-progress\" style=\"width: 25%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-red-500 h-2.5 rounded-full animate-progress\" style=\"width: 50%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                    <div class=\"bg-purple-500 h-2.5 rounded-full animate-progress\" style=\"width: 75%\"></div>
                                </div>
                                <div class=\"w-full bg-slate-200 rounded-full h-2.5 dark:bg-zink-600\">
                                    <div class=\"bg-slate-500 dark:bg-zink-200 h-2.5 rounded-full animate-progress\" style=\"width: 100%\"></div>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Progress Sizes</h6>
                        <div class=\"w-full h-1.5 mb-4 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-1.5 rounded-full bg-custom-500\" style=\"width: 25%\"></div>
                        </div>
                        <div class=\"w-full h-2 mb-4 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-2 rounded-full bg-custom-500\" style=\"width: 25%\"></div>
                        </div>
                        <div class=\"w-full h-3 mb-4 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-3 rounded-full bg-custom-500\" style=\"width: 25%\"></div>
                        </div>
                        <div class=\"w-full h-3.5 mb-4 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-3.5 rounded-full bg-custom-500\" style=\"width: 25%\"></div>
                        </div>
                        <div class=\"w-full h-5 mb-4 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-5 rounded-full bg-custom-500\" style=\"width: 25%\"></div>
                        </div>
                        <div class=\"w-full h-6 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-6 rounded-full bg-custom-500\" style=\"width: 25%\"></div>
                        </div>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Progress with Content</h6>
                        <div>
                            <div class=\"flex items-center justify-between mb-2\">
                                <h6 class=\"mb-0\">Tailwick - Admin & Dashboard</h6>
                                <h6 class=\"mb-0 text-custom-500\">24%</h6>
                            </div>
                            <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                <div class=\"bg-custom-500 h-2.5 rounded-full\" style=\"width: 24%\"></div>
                            </div>
                        </div>
                        <div>
                            <div class=\"flex items-center justify-between mb-2\">
                                <h6 class=\"mb-0\">Nazox - Admin & Dashboard</h6>
                                <h6 class=\"mb-0 text-green-500\">66%</h6>
                            </div>
                            <div class=\"w-full bg-slate-200 rounded-full h-2.5 mb-4 dark:bg-zink-600\">
                                <div class=\"bg-green-500 h-2.5 rounded-full\" style=\"width: 66%\"></div>
                            </div>
                        </div>
                    </div>
                </div><!--end card-->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">With Label Inside</h6>
                        <div class=\"w-full h-3 mb-4 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"bg-custom-500 h-3 rounded-full text-[8px] text-white text-center\" style=\"width: 24%\">24%</div>
                        </div>
                        <div class=\"w-full h-3.5 mb-4 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-3.5 rounded-full bg-custom-500 text-[10px] text-center text-white\" style=\"width: 25%\">25%</div>
                        </div>
                        <div class=\"w-full h-5 rounded-full bg-slate-200 dark:bg-zink-600\">
                            <div class=\"h-5 text-xs text-center text-white rounded-full bg-custom-500\" style=\"width: 25%\">25%</div>
                        </div>
                    </div>
                </div><!--end card-->

{% endblock %}
    
{% block javascripts %}

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

{% endblock %}", "ui-progress-bar.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\ui-progress-bar.html.twig");
    }
}
