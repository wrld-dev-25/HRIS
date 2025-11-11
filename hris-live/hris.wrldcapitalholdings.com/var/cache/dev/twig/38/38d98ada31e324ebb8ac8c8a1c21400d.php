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

/* components/breadcrumb.html.twig */
class __TwigTemplate_c0e38b9a071e08b167a47eb172b2d7e9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/breadcrumb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/breadcrumb.html.twig"));

        // line 1
        yield "<!-- start page title -->
<div class=\"flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden\">
    <div class=\"grow\">
        <h5 class=\"text-16\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "</h5>
    </div>
    <ul class=\"flex items-center gap-2 text-sm font-normal shrink-0\">
        <li class=\"relative before:content-['\\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200\">
            <a href=\"";
        // line 8
        (((isset($context["pageLink"]) || array_key_exists("pageLink", $context) ? $context["pageLink"] : (function () { throw new RuntimeError('Variable "pageLink" does not exist.', 8, $this->source); })())) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageLink"]) || array_key_exists("pageLink", $context) ? $context["pageLink"] : (function () { throw new RuntimeError('Variable "pageLink" does not exist.', 8, $this->source); })()), "html", null, true)) : (yield "#"));
        yield "\" class=\"text-slate-400 dark:text-zink-200\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pagetitle"]) || array_key_exists("pagetitle", $context) ? $context["pagetitle"] : (function () { throw new RuntimeError('Variable "pagetitle" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "</a>
        </li>
        <li class=\"text-slate-700 dark:text-zink-100\">
            ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "
        </li>
    </ul>
</div>
<!-- end page title -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/breadcrumb.html.twig";
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
        return array (  64 => 11,  56 => 8,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- start page title -->
<div class=\"flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden\">
    <div class=\"grow\">
        <h5 class=\"text-16\">{{ title }}</h5>
    </div>
    <ul class=\"flex items-center gap-2 text-sm font-normal shrink-0\">
        <li class=\"relative before:content-['\\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200\">
            <a href=\"{{ pageLink ? pageLink : '#' }}\" class=\"text-slate-400 dark:text-zink-200\">{{ pagetitle }}</a>
        </li>
        <li class=\"text-slate-700 dark:text-zink-100\">
            {{ title }}
        </li>
    </ul>
</div>
<!-- end page title -->", "components/breadcrumb.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\components\\Breadcrumb.html.twig");
    }
}
