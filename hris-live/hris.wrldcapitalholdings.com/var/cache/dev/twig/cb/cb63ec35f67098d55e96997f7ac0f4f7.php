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

/* partials/_title-meta.html.twig */
class __TwigTemplate_20e5ef015d7378d437662b35e701adbb extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_title-meta.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_title-meta.html.twig"));

        // line 1
        yield "<meta charset=\"utf-8\">
<title><?= (\$title) ? \$title : '' ?> | Tailwick - Admin & Dashboard Template</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
<meta content=\"Minimal Admin & Dashboard Template\" name=\"description\">
<meta content=\"Themesdesign\" name=\"author\">
<!-- App favicon -->
<link rel=\"shortcut icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        yield "\">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_title-meta.html.twig";
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
        return array (  56 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<meta charset=\"utf-8\">
<title><?= (\$title) ? \$title : '' ?> | Tailwick - Admin & Dashboard Template</title>
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no\">
<meta content=\"Minimal Admin & Dashboard Template\" name=\"description\">
<meta content=\"Themesdesign\" name=\"author\">
<!-- App favicon -->
<link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.ico') }}\">
{# <link rel=\"shortcut icon\" href=\"assets/images/favicon.ico\"> #}", "partials/_title-meta.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\partials\\_title-meta.html.twig");
    }
}
