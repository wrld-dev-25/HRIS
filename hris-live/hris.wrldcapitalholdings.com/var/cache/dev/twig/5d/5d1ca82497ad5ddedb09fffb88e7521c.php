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

/* ui-spinners.html.twig */
class __TwigTemplate_ba6ef250bc7201e75b9f8a62d3fbf8db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-spinners.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ui-spinners.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "ui-spinners.html.twig", 1);
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

        yield "Spinner";
        
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "UI Elements", "title" => "Spinner"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-4 xl:grid-cols-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"mb-4 text-15\">Default Spinner</h5>
                            <div class=\"flex flex-wrap items-center gap-2\">
                                <div class=\"inline-block size-8 border-2 rounded-full animate-spin border-l-transparent border-custom-500\"></div>
                                <div class=\"inline-block size-8 border-2 border-green-500 rounded-full animate-spin border-l-transparent\"></div>
                                <div class=\"inline-block size-8 border-2 border-orange-500 rounded-full animate-spin border-l-transparent\"></div>
                                <div class=\"inline-block size-8 border-2 rounded-full animate-spin border-l-transparent border-sky-500\"></div>
                                <div class=\"inline-block size-8 border-2 border-yellow-500 rounded-full animate-spin border-l-transparent\"></div>
                                <div class=\"inline-block size-8 border-2 border-red-500 rounded-full animate-spin border-l-transparent\"></div>
                                <div class=\"inline-block size-8 border-2 border-purple-500 rounded-full animate-spin border-l-transparent\"></div>
                                <div class=\"inline-block size-8 border-2 rounded-full animate-spin border-l-transparent border-slate-400 dark:border-zink-500 dark:border-l-transparent\"></div>
                                <div class=\"inline-block size-8 border-2 rounded-full animate-spin border-l-transparent border-slate-900 dark:border-zink-200 dark:border-l-transparent\"></div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
        
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"mb-4 text-15\">Ping Animation</h5>
                            <div class=\"flex flex-wrap items-center gap-5 px-3 py-2\">
                                <div class=\"inline-flex size-4 rounded-full opacity-75 animate-ping bg-custom-500\"></div>
                                <div class=\"inline-flex size-4 bg-green-400 rounded-full opacity-75 animate-ping\"></div>
                                <div class=\"inline-flex size-4 bg-orange-400 rounded-full opacity-75 animate-ping\"></div>
                                <div class=\"inline-flex size-4 rounded-full opacity-75 animate-ping bg-sky-400\"></div>
                                <div class=\"inline-flex size-4 bg-yellow-400 rounded-full opacity-75 animate-ping\"></div>
                                <div class=\"inline-flex size-4 bg-red-400 rounded-full opacity-75 animate-ping\"></div>
                                <div class=\"inline-flex size-4 bg-purple-400 rounded-full opacity-75 animate-ping\"></div>
                                <div class=\"inline-flex size-4 rounded-full opacity-75 animate-ping bg-slate-400\"></div>
                                <div class=\"inline-flex size-4 rounded-full opacity-75 animate-ping bg-slate-900 dark:bg-zink-300\"></div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Bounce Animation</h5>
                        <div class=\"flex flex-wrap items-center gap-5\">
                            <div class=\"inline-flex size-6 rounded-full opacity-75 animate-bounce bg-custom-500\"></div>
                            <div class=\"inline-flex size-6 bg-green-400 rounded-full opacity-75 animate-bounce\"></div>
                            <div class=\"inline-flex size-6 bg-orange-400 rounded-full opacity-75 animate-bounce\"></div>
                            <div class=\"inline-flex size-6 rounded-full opacity-75 animate-bounce bg-sky-400\"></div>
                            <div class=\"inline-flex size-6 bg-yellow-400 rounded-full opacity-75 animate-bounce\"></div>
                            <div class=\"inline-flex size-6 bg-red-400 rounded-full opacity-75 animate-bounce\"></div>
                            <div class=\"inline-flex size-6 bg-purple-400 rounded-full opacity-75 animate-bounce\"></div>
                            <div class=\"inline-flex size-6 rounded-full opacity-75 animate-bounce bg-slate-400\"></div>
                            <div class=\"inline-flex size-6 rounded-full opacity-75 animate-bounce bg-slate-900 dark:bg-zink-300\"></div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Sizes Animation</h5>
                        <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-3\">
                            <div class=\"flex flex-wrap items-center gap-5\">
                                <div class=\"inline-block size-4 border-2 rounded-full animate-spin border-l-transparent border-custom-500\"></div>
                                <div class=\"inline-block size-6 border-2 rounded-full animate-spin border-l-transparent border-custom-500\"></div>
                                <div class=\"inline-block size-8 border-2 rounded-full animate-spin border-l-transparent border-custom-500\"></div>
                                <div class=\"inline-block size-10 border-2 rounded-full animate-spin border-l-transparent border-custom-500\"></div>
                            </div>
                            <div class=\"flex flex-wrap items-center gap-6\">
                                <div class=\"inline-flex size-4 rounded-full opacity-75 animate-bounce bg-custom-500\"></div>
                                <div class=\"inline-flex size-6 rounded-full opacity-75 animate-bounce bg-custom-500\"></div>
                                <div class=\"inline-flex size-8 rounded-full opacity-75 animate-bounce bg-custom-500\"></div>
                                <div class=\"inline-flex size-10 rounded-full opacity-75 animate-bounce bg-custom-500\"></div>
                            </div>
                            <div class=\"flex flex-wrap items-center gap-6\">
                                <div class=\"inline-flex size-2 rounded-full opacity-75 animate-ping bg-custom-500\"></div>
                                <div class=\"inline-flex size-4 rounded-full opacity-75 animate-ping bg-custom-500\"></div>
                                <div class=\"inline-flex size-6 rounded-full opacity-75 animate-ping bg-custom-500\"></div>
                                <div class=\"inline-flex size-8 rounded-full opacity-75 animate-ping bg-custom-500\"></div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 88
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
        yield "
<!-- App js -->
<script src=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 93
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
        return "ui-spinners.html.twig";
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
        return array (  204 => 93,  200 => 91,  196 => 89,  186 => 88,  94 => 6,  91 => 5,  81 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Spinner{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'UI Elements', title: 'Spinner' }) }}

                <div class=\"grid grid-cols-1 gap-x-4 xl:grid-cols-2\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"mb-4 text-15\">Default Spinner</h5>
                            <div class=\"flex flex-wrap items-center gap-2\">
                                <div class=\"inline-block size-8 border-2 rounded-full animate-spin border-l-transparent border-custom-500\"></div>
                                <div class=\"inline-block size-8 border-2 border-green-500 rounded-full animate-spin border-l-transparent\"></div>
                                <div class=\"inline-block size-8 border-2 border-orange-500 rounded-full animate-spin border-l-transparent\"></div>
                                <div class=\"inline-block size-8 border-2 rounded-full animate-spin border-l-transparent border-sky-500\"></div>
                                <div class=\"inline-block size-8 border-2 border-yellow-500 rounded-full animate-spin border-l-transparent\"></div>
                                <div class=\"inline-block size-8 border-2 border-red-500 rounded-full animate-spin border-l-transparent\"></div>
                                <div class=\"inline-block size-8 border-2 border-purple-500 rounded-full animate-spin border-l-transparent\"></div>
                                <div class=\"inline-block size-8 border-2 rounded-full animate-spin border-l-transparent border-slate-400 dark:border-zink-500 dark:border-l-transparent\"></div>
                                <div class=\"inline-block size-8 border-2 rounded-full animate-spin border-l-transparent border-slate-900 dark:border-zink-200 dark:border-l-transparent\"></div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
        
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"mb-4 text-15\">Ping Animation</h5>
                            <div class=\"flex flex-wrap items-center gap-5 px-3 py-2\">
                                <div class=\"inline-flex size-4 rounded-full opacity-75 animate-ping bg-custom-500\"></div>
                                <div class=\"inline-flex size-4 bg-green-400 rounded-full opacity-75 animate-ping\"></div>
                                <div class=\"inline-flex size-4 bg-orange-400 rounded-full opacity-75 animate-ping\"></div>
                                <div class=\"inline-flex size-4 rounded-full opacity-75 animate-ping bg-sky-400\"></div>
                                <div class=\"inline-flex size-4 bg-yellow-400 rounded-full opacity-75 animate-ping\"></div>
                                <div class=\"inline-flex size-4 bg-red-400 rounded-full opacity-75 animate-ping\"></div>
                                <div class=\"inline-flex size-4 bg-purple-400 rounded-full opacity-75 animate-ping\"></div>
                                <div class=\"inline-flex size-4 rounded-full opacity-75 animate-ping bg-slate-400\"></div>
                                <div class=\"inline-flex size-4 rounded-full opacity-75 animate-ping bg-slate-900 dark:bg-zink-300\"></div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div>
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Bounce Animation</h5>
                        <div class=\"flex flex-wrap items-center gap-5\">
                            <div class=\"inline-flex size-6 rounded-full opacity-75 animate-bounce bg-custom-500\"></div>
                            <div class=\"inline-flex size-6 bg-green-400 rounded-full opacity-75 animate-bounce\"></div>
                            <div class=\"inline-flex size-6 bg-orange-400 rounded-full opacity-75 animate-bounce\"></div>
                            <div class=\"inline-flex size-6 rounded-full opacity-75 animate-bounce bg-sky-400\"></div>
                            <div class=\"inline-flex size-6 bg-yellow-400 rounded-full opacity-75 animate-bounce\"></div>
                            <div class=\"inline-flex size-6 bg-red-400 rounded-full opacity-75 animate-bounce\"></div>
                            <div class=\"inline-flex size-6 bg-purple-400 rounded-full opacity-75 animate-bounce\"></div>
                            <div class=\"inline-flex size-6 rounded-full opacity-75 animate-bounce bg-slate-400\"></div>
                            <div class=\"inline-flex size-6 rounded-full opacity-75 animate-bounce bg-slate-900 dark:bg-zink-300\"></div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Sizes Animation</h5>
                        <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-3\">
                            <div class=\"flex flex-wrap items-center gap-5\">
                                <div class=\"inline-block size-4 border-2 rounded-full animate-spin border-l-transparent border-custom-500\"></div>
                                <div class=\"inline-block size-6 border-2 rounded-full animate-spin border-l-transparent border-custom-500\"></div>
                                <div class=\"inline-block size-8 border-2 rounded-full animate-spin border-l-transparent border-custom-500\"></div>
                                <div class=\"inline-block size-10 border-2 rounded-full animate-spin border-l-transparent border-custom-500\"></div>
                            </div>
                            <div class=\"flex flex-wrap items-center gap-6\">
                                <div class=\"inline-flex size-4 rounded-full opacity-75 animate-bounce bg-custom-500\"></div>
                                <div class=\"inline-flex size-6 rounded-full opacity-75 animate-bounce bg-custom-500\"></div>
                                <div class=\"inline-flex size-8 rounded-full opacity-75 animate-bounce bg-custom-500\"></div>
                                <div class=\"inline-flex size-10 rounded-full opacity-75 animate-bounce bg-custom-500\"></div>
                            </div>
                            <div class=\"flex flex-wrap items-center gap-6\">
                                <div class=\"inline-flex size-2 rounded-full opacity-75 animate-ping bg-custom-500\"></div>
                                <div class=\"inline-flex size-4 rounded-full opacity-75 animate-ping bg-custom-500\"></div>
                                <div class=\"inline-flex size-6 rounded-full opacity-75 animate-ping bg-custom-500\"></div>
                                <div class=\"inline-flex size-8 rounded-full opacity-75 animate-ping bg-custom-500\"></div>
                            </div>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->

{% endblock %}
    
{% block javascripts %}

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

{% endblock %}", "ui-spinners.html.twig", "C:\\Users\\SUNIT226\\Desktop\\Repos\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\ui-spinners.html.twig");
    }
}
