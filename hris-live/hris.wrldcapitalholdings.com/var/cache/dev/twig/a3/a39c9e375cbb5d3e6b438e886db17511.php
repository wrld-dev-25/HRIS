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

/* partials/_page-title.html.twig */
class __TwigTemplate_738499d2f47f7fabee2c80f0dfa22d95 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_page-title.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_page-title.html.twig"));

        yield "<div class=\"flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden\">
    <div class=\"grow\">
        <h5 class=\"text-16\"><?= (\$title) ? \$title : '' ?></h5>
    </div>
    <ul class=\"flex items-center gap-2 text-sm font-normal shrink-0\">
        <li class=\"relative before:content-['\\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200\">
            <a href=\"#!\" class=\"text-slate-400 dark:text-zink-200\"><?= (\$pagetitle) ? \$pagetitle : '' ?></a>
        </li>
        <li class=\"text-slate-700 dark:text-zink-100\">
            <?= (\$title) ? \$title : '' ?>
        </li>
    </ul>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_page-title.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden\">
    <div class=\"grow\">
        <h5 class=\"text-16\"><?= (\$title) ? \$title : '' ?></h5>
    </div>
    <ul class=\"flex items-center gap-2 text-sm font-normal shrink-0\">
        <li class=\"relative before:content-['\\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200\">
            <a href=\"#!\" class=\"text-slate-400 dark:text-zink-200\"><?= (\$pagetitle) ? \$pagetitle : '' ?></a>
        </li>
        <li class=\"text-slate-700 dark:text-zink-100\">
            <?= (\$title) ? \$title : '' ?>
        </li>
    </ul>
</div>", "partials/_page-title.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\partials\\_page-title.html.twig");
    }
}
