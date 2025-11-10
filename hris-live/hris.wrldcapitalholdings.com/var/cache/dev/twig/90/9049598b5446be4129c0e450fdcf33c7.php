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

/* partials/_head-css.html.twig */
class __TwigTemplate_278adaeeb3120844042e977774780d1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_head-css.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_head-css.html.twig"));

        // line 1
        yield "<!-- Layout config Js -->
<script src=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/layout.js"), "html", null, true);
        yield "\"></script>
<!-- Icons CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        yield "\">
<!-- Flatpickr -->
<link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/flatpickr/flatpickr.min.css"), "html", null, true);
        yield "\">
<!-- Choices -->
<link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/choices.js/public/assets/styles/choices.min.css"), "html", null, true);
        yield "\">
<!-- Tailwind CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/tailwind2.css"), "html", null, true);
        yield "\">
<!-- Page Loader Animation CSS -->
<link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/page-loader.css"), "html", null, true);
        yield "\">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_head-css.html.twig";
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
        return array (  72 => 12,  67 => 10,  62 => 8,  57 => 6,  52 => 4,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Layout config Js -->
<script src=\"{{ asset('assets/js/layout.js') }}\"></script>
<!-- Icons CSS -->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/icons.css') }}\">
<!-- Flatpickr -->
<link rel=\"stylesheet\" href=\"{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}\">
<!-- Choices -->
<link rel=\"stylesheet\" href=\"{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}\">
<!-- Tailwind CSS -->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/tailwind2.css') }}\">
<!-- Page Loader Animation CSS -->
<link rel=\"stylesheet\" href=\"{{ asset('assets/css/page-loader.css') }}\">
", "partials/_head-css.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\partials\\_head-css.html.twig");
    }
}
