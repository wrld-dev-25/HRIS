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
class __TwigTemplate_b329041ded1bc27f7d1478e1ea9ec923 extends Template
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
        // line 1
        yield "<!-- start page title -->
<div class=\"flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden\">
    <div class=\"grow\">
        <h5 class=\"text-16\">";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h5>
    </div>
    <ul class=\"flex items-center gap-2 text-sm font-normal shrink-0\">
        <li class=\"relative before:content-['\\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200\">
            <a href=\"";
        // line 8
        ((($context["pageLink"] ?? null)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pageLink"] ?? null), "html", null, true)) : (yield "#"));
        yield "\" class=\"text-slate-400 dark:text-zink-200\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pagetitle"] ?? null), "html", null, true);
        yield "</a>
        </li>
        <li class=\"text-slate-700 dark:text-zink-100\">
            ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "
        </li>
    </ul>
</div>
<!-- end page title -->";
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
        return array (  58 => 11,  50 => 8,  43 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/breadcrumb.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/components/breadcrumb.html.twig");
    }
}
