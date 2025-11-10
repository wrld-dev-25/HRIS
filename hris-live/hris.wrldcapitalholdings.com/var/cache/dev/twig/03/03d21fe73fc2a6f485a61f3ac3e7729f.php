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

/* partials/_vendor-scripts.html.twig */
class __TwigTemplate_85761995dc4f380106ac0eb706640092 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_vendor-scripts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_vendor-scripts.html.twig"));

        // line 11
        yield "<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/choices.js/public/assets/scripts/choices.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/@popperjs/core/umd/popper.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/tippy.js/tippy-bundle.umd.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/simplebar/simplebar.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/prismjs/prism.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/lucide/umd/lucide.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/tailwick.bundle.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/flatpickr/flatpickr.min.js"), "html", null, true);
        yield "\"></script>
<!-- jQuery -->
<script src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
<!-- Toastr -->
<script src=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/toastify-js/src/toastify.js"), "html", null, true);
        yield "\"></script>
<!-- Flatpickr -->
<script src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/flatpickr/flatpickr.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/api.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/permission.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/global_functions.js"), "html", null, true);
        yield "\"></script>
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
        return "partials/_vendor-scripts.html.twig";
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
        return array (  100 => 27,  96 => 26,  92 => 25,  88 => 24,  83 => 22,  78 => 20,  73 => 18,  69 => 17,  65 => 16,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  44 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{# <script src='assets/libs/choices.js/public/assets/scripts/choices.min.js'></script>
<script src=\"{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}\"></script>
    {# <script src=\"assets/js/common.js\"></script>
    {# <script src=\"assets/libs/@popperjs/core/umd/popper.min.js\"></script> #}
{# <script src=\"assets/libs/tippy.js/tippy-bundle.umd.min.js\"></script>
<script src=\"assets/libs/simplebar/simplebar.min.js\"></script>
<script src=\"assets/libs/prismjs/prism.js\"></script>
<script src=\"assets/libs/lucide/umd/lucide.js\"></script>
<script src=\"assets/js/tailwick.bundle.js\"></script>
<script src=\"assets/libs/flatpickr/flatpickr.min.js\"></script> #}
<script src=\"{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/tippy.js/tippy-bundle.umd.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/simplebar/simplebar.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/prismjs/prism.js') }}\"></script>
<script src=\"{{ asset('assets/libs/lucide/umd/lucide.js') }}\"></script>
<script src=\"{{ asset('assets/js/tailwick.bundle.js') }}\"></script>
<script src=\"{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}\"></script>
<!-- jQuery -->
<script src=\"{{ asset('assets/js/jquery/jquery-3.7.1.min.js') }}\"></script>
<!-- Toastr -->
<script src=\"{{ asset('assets/libs/toastify-js/src/toastify.js') }}\"></script>
<!-- Flatpickr -->
<script src=\"{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/api.js') }}\"></script>
<script src=\"{{ asset('assets/js/permission.js') }}\"></script>
<script src=\"{{ asset('assets/js/global_functions.js') }}\"></script>
", "partials/_vendor-scripts.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\partials\\_vendor-scripts.html.twig");
    }
}
