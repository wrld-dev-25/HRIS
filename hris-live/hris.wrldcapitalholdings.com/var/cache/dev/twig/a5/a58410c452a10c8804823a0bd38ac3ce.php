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

/* forms-multi-select.html.twig */
class __TwigTemplate_a8d823f1d8e086e00116a153605ebdde extends Template
{
    private $source;
    private $macros = [];

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

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-multi-select.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-multi-select.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "forms-multi-select.html.twig", 1);
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

        yield "Multi Select";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
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

        return; yield '';
    }

    // line 6
    public function block_content($context, array $blocks = [])
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Forms", "title" => "Multi Select"]);
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

        return; yield '';
    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
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

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "forms-multi-select.html.twig";
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
        return array (  223 => 91,  219 => 89,  211 => 83,  201 => 82,  117 => 8,  114 => 7,  104 => 6,  92 => 4,  82 => 3,  62 => 2,  39 => 1,);
    }

    public function getSourceContext()
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

{% endblock %}", "forms-multi-select.html.twig", "C:\\Users\\SUNIT226\\Desktop\\Repos\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\forms-multi-select.html.twig");
    }
}
