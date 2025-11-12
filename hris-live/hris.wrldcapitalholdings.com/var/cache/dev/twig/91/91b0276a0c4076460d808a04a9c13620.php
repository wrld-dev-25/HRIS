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

/* forms-colorpicker.html.twig */
class __TwigTemplate_86e554c0762d61d542268c67e1af1e7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-colorpicker.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-colorpicker.html.twig"));

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

        yield "Color Picker";
        
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
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Forms", "title" => "Color Picker"]);
        yield "


                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Monolith Demo</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">monolith-colorpicker</code> class to set monolith colorpicker.</p>
                            
                            <div class=\"monolith-colorpicker\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Classic Demo</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">classic-colorpicker</code> class to set classic colorpicker.</p>
                            
                            <div class=\"classic-colorpicker\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Nano Demo</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">nano-colorpicker</code> class to set nano colorpicker.</p>
                    
                            <div class=\"nano-colorpicker\"></div>
                        </div>
                    </div><!--end card-->

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Option Demo</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">colorpicker-demo</code> class to set demo option colorpicker.</p>
                    
                            <div class=\"colorpicker-demo\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Switches</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">colorpicker-switch</code> class to set switch colorpicker.</p>
                    
                            <div class=\"colorpicker-switch\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Picker with Opacity & Hue</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">colorpicker-opacity-hue</code> class to set colorpicker with opacity & hue.</p>
                    
                            <div class=\"colorpicker-opacity-hue\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Picker with Input</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">colorpicker-input</code> class to set colorpicker with input.</p>
                    
                            <div class=\"colorpicker-input\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Color Format</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">colorpicker-format</code> class to set colorpicker with format option.</p>
                    
                            <div class=\"colorpicker-format\"></div>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
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

        // line 80
        yield "
<!-- Modern colorpicker bundle -->
<script src=\"assets/libs/@simonwep/pickr/pickr.min.js\"></script>

<!-- colorpickr init js -->

<script src=\"assets/js/pages/form-colorpicker.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 91
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
        return "forms-colorpicker.html.twig";
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
        return array (  215 => 91,  211 => 89,  200 => 80,  187 => 79,  104 => 6,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Color Picker{% endblock %}

{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Forms', title: 'Color Picker' }) }}


                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Monolith Demo</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">monolith-colorpicker</code> class to set monolith colorpicker.</p>
                            
                            <div class=\"monolith-colorpicker\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Classic Demo</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">classic-colorpicker</code> class to set classic colorpicker.</p>
                            
                            <div class=\"classic-colorpicker\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Nano Demo</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">nano-colorpicker</code> class to set nano colorpicker.</p>
                    
                            <div class=\"nano-colorpicker\"></div>
                        </div>
                    </div><!--end card-->

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Option Demo</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">colorpicker-demo</code> class to set demo option colorpicker.</p>
                    
                            <div class=\"colorpicker-demo\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Switches</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">colorpicker-switch</code> class to set switch colorpicker.</p>
                    
                            <div class=\"colorpicker-switch\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Picker with Opacity & Hue</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">colorpicker-opacity-hue</code> class to set colorpicker with opacity & hue.</p>
                    
                            <div class=\"colorpicker-opacity-hue\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Picker with Input</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">colorpicker-input</code> class to set colorpicker with input.</p>
                    
                            <div class=\"colorpicker-input\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Color Format</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">colorpicker-format</code> class to set colorpicker with format option.</p>
                    
                            <div class=\"colorpicker-format\"></div>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

{% endblock %}
    
{% block javascripts %}

<!-- Modern colorpicker bundle -->
<script src=\"assets/libs/@simonwep/pickr/pickr.min.js\"></script>

<!-- colorpickr init js -->

<script src=\"assets/js/pages/form-colorpicker.init.js\"></script>

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

{% endblock %}", "forms-colorpicker.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\forms-colorpicker.html.twig");
    }
}
