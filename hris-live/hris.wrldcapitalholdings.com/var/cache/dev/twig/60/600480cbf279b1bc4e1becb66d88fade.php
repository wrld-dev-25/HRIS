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

/* forms-multi-select.html.twig */
class __TwigTemplate_ec8833b55f530efed9b42b2095455ea0 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-multi-select.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-multi-select.html.twig"));

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

        yield "Multi Select";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    <?php includeFileWithVariables('partials/title-meta', array('title' => 'Multi Select')); ?>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "
            ";
        // line 8
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("breadcrumb", ["pagetitle" => "Forms", "title" => "Multi Select"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                    <div class=\"border-slate-200 card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Basic Example</h6>
                            <form>
                                <select required multiple=\"multiple\" name=\"favorite_fruits\" id=\"multiselect-basic\">
                                    <option selected>Apple</option>
                                    <option>Banana</option>
                                    <option selected>Blueberry</option>
                                    <option selected>Cherry</option>
                                    <option>Coconut</option>
                                    <option>Grapefruit</option>
                                    <option>Kiwi</option>
                                    <option>Lemon</option>
                                    <option>Lime</option>
                                    <option>Mango</option>
                                    <option>Orange</option>
                                    <option>Papaya</option>
                                </select>
                            </form>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Headers Multi Select</h6>
                            <form>
                                <select required multiple=\"multiple\" name=\"favorite_cars\" id=\"multiselect-header\">
                                    <option>Chevrolet</option>
                                    <option>Fiat</option>
                                    <option>Ford</option>
                                    <option>Honda</option>
                                    <option selected>Hyundai</option>
                                    <option>Kia</option>
                                    <option>Mahindra</option>
                                    <option>Maruti</option>
                                    <option>Mitsubishi</option>
                                    <option>MG</option>
                                    <option>Nissan</option>
                                    <option>Renault</option>
                                    <option selected>Skoda</option>
                                    <option selected>Tata</option>
                                    <option selected>Toyato</option>
                                    <option>Volkswagen</option>
                                </select>
                            </form>
                        </div>
                    </div><!--end card-->

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Option Groups</h6>
                            <form>
                                <select multiple=\"multiple\" name=\"favorite_cars\" id=\"multiselect-optiongroup\">
                                    <optgroup label=\"Skoda\">
                                        <option>Kushaq</option>
                                        <option>Superb</option>
                                        <option>Octavia</option>
                                        <option>Rapid</option>
                                    </optgroup>
                                    <optgroup label=\"Volkswagen\">
                                        <option>Polo</option>
                                        <option>Taigun</option>
                                        <option>Vento</option>
                                    </optgroup>
                                </select>
                            </form>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 82
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

        // line 83
        yield "
<script src=\"assets/libs/multi.js/multi.min.js\"></script>

<script src=\"assets/js/pages/form-multi-select.init.js\"></script>

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
        return "forms-multi-select.html.twig";
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
        return array (  239 => 91,  235 => 89,  227 => 83,  214 => 82,  130 => 8,  127 => 7,  114 => 6,  102 => 4,  89 => 3,  66 => 2,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% block title %}Multi Select{% endblock %}
{% block stylesheets %}
    <?php includeFileWithVariables('partials/title-meta', array('title' => 'Multi Select')); ?>
{% endblock %}
{% block content %}

            {{ component('breadcrumb', { pagetitle: 'Forms', title: 'Multi Select' }) }}

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                    <div class=\"border-slate-200 card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Basic Example</h6>
                            <form>
                                <select required multiple=\"multiple\" name=\"favorite_fruits\" id=\"multiselect-basic\">
                                    <option selected>Apple</option>
                                    <option>Banana</option>
                                    <option selected>Blueberry</option>
                                    <option selected>Cherry</option>
                                    <option>Coconut</option>
                                    <option>Grapefruit</option>
                                    <option>Kiwi</option>
                                    <option>Lemon</option>
                                    <option>Lime</option>
                                    <option>Mango</option>
                                    <option>Orange</option>
                                    <option>Papaya</option>
                                </select>
                            </form>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Headers Multi Select</h6>
                            <form>
                                <select required multiple=\"multiple\" name=\"favorite_cars\" id=\"multiselect-header\">
                                    <option>Chevrolet</option>
                                    <option>Fiat</option>
                                    <option>Ford</option>
                                    <option>Honda</option>
                                    <option selected>Hyundai</option>
                                    <option>Kia</option>
                                    <option>Mahindra</option>
                                    <option>Maruti</option>
                                    <option>Mitsubishi</option>
                                    <option>MG</option>
                                    <option>Nissan</option>
                                    <option>Renault</option>
                                    <option selected>Skoda</option>
                                    <option selected>Tata</option>
                                    <option selected>Toyato</option>
                                    <option>Volkswagen</option>
                                </select>
                            </form>
                        </div>
                    </div><!--end card-->

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Option Groups</h6>
                            <form>
                                <select multiple=\"multiple\" name=\"favorite_cars\" id=\"multiselect-optiongroup\">
                                    <optgroup label=\"Skoda\">
                                        <option>Kushaq</option>
                                        <option>Superb</option>
                                        <option>Octavia</option>
                                        <option>Rapid</option>
                                    </optgroup>
                                    <optgroup label=\"Volkswagen\">
                                        <option>Polo</option>
                                        <option>Taigun</option>
                                        <option>Vento</option>
                                    </optgroup>
                                </select>
                            </form>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

{% endblock %}
    
{% block javascripts %}

<script src=\"assets/libs/multi.js/multi.min.js\"></script>

<script src=\"assets/js/pages/form-multi-select.init.js\"></script>

<!-- App js -->
<script src=\"{{ asset('assets/js/app.js') }}\"></script>
{# <script src=\"assets/js/app.js\"></script> #}

{% endblock %}", "forms-multi-select.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\forms-multi-select.html.twig");
    }
}
