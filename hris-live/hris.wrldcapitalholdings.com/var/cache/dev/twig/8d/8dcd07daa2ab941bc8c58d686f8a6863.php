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

/* partials/_notification-area.html.twig */
class __TwigTemplate_a5cb5256b0d83364e5f092102f6f55d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_notification-area.html.twig"));

        // line 1
        yield "<div class=\"relative flex items-center dropdown h-header\">
    <button type=\"button\" class=\"inline-flex justify-center relative items-center p-0 text-topbar-item transition-all size-[37.5px] duration-200 ease-linear bg-topbar rounded-md dropdown-toggle btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[topbar=dark]:dark:text-zink-200 group-data-[topbar=dark]:text-topbar-item-dark\" id=\"notificationDropdown\" data-bs-toggle=\"dropdown\">
        <i data-lucide=\"bell-ring\" class=\"inline-block size-5 stroke-1 fill-slate-100 group-data-[topbar=dark]:fill-topbar-item-bg-hover-dark group-data-[topbar=brand]:fill-topbar-item-bg-hover-brand\"></i>
        <span class=\"absolute top-0 right-0 flex size-1.5\">
            <span class=\"absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-sky-400\"></span>
            <span class=\"relative inline-flex size-1.5 rounded-full bg-sky-500\"></span>
        </span>
    </button>
    <div class=\"absolute z-50 hidden ltr:text-left rtl:text-right bg-white rounded-md shadow-md !top-4 dropdown-menu min-w-[20rem] lg:min-w-[26rem] dark:bg-zink-600\" aria-labelledby=\"notificationDropdown\">
        ";
        // line 13
        yield "        <div data-simplebar class=\"max-h-[350px]\">
            <div class=\"flex flex-col gap-1\" id=\"notification-list\">
                ";
        // line 15
        $context["notifications"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 15), "get", ["notification_message"], "method", false, false, false, 15);
        // line 16
        yield "                ";
        if (is_iterable(($context["notifications"] ?? null))) {
            // line 17
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["notifications"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 18
                yield "                        <a href=\"#!\" class=\"flex gap-3 p-4 product-item hover:bg-slate-50 dark:hover:bg-zink-500\">
                            ";
                // line 22
                yield "                            <div class=\"grow\">
                                <h6 class=\"mb-1 font-medium\"><b>";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "sender_fullname", [], "any", false, false, false, 23), "html", null, true);
                yield "</b> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "action", [], "any", false, false, false, 23), "html", null, true);
                yield "</h6>
                                <p class=\"mb-0 text-sm text-slate-500 dark:text-zink-300\">
                                    <i data-lucide=\"clock\" class=\"inline-block size-3.5 mr-1\"></i>
                                    <span class=\"align-middle\">";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "datetime", [], "any", false, false, false, 26), "l h:i A"), "html", null, true);
                yield "</span>
                                </p>
                            </div>
                            <div class=\"flex items-center self-start gap-2 text-xs text-slate-500 shrink-0 dark:text-zink-300\">
                                <div class=\"size-1.5 bg-custom-500 rounded-full\"></div> 
                                ";
                // line 31
                $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate();
                // line 32
                yield "                                ";
                $context["notificationDate"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "datetime", [], "any", false, false, false, 32));
                // line 33
                yield "                                ";
                $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, ($context["now"] ?? null), "diff", [($context["notificationDate"] ?? null)], "method", false, false, false, 33);
                // line 34
                yield "                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["diff"] ?? null), "y", [], "any", false, false, false, 34) > 0)) {
                    // line 35
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["diff"] ?? null), "y", [], "any", false, false, false, 35), "html", null, true);
                    yield " year";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["diff"] ?? null), "y", [], "any", false, false, false, 35) > 1)) ? ("s") : (""));
                    yield "
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 36
($context["diff"] ?? null), "m", [], "any", false, false, false, 36) > 0)) {
                    // line 37
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["diff"] ?? null), "m", [], "any", false, false, false, 37), "html", null, true);
                    yield " month";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["diff"] ?? null), "m", [], "any", false, false, false, 37) > 1)) ? ("s") : (""));
                    yield "
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 38
($context["diff"] ?? null), "d", [], "any", false, false, false, 38) > 0)) {
                    // line 39
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["diff"] ?? null), "d", [], "any", false, false, false, 39), "html", null, true);
                    yield " day";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["diff"] ?? null), "d", [], "any", false, false, false, 39) > 1)) ? ("s") : (""));
                    yield "
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 40
($context["diff"] ?? null), "h", [], "any", false, false, false, 40) > 0)) {
                    // line 41
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["diff"] ?? null), "h", [], "any", false, false, false, 41), "html", null, true);
                    yield " hour";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["diff"] ?? null), "h", [], "any", false, false, false, 41) > 1)) ? ("s") : (""));
                    yield "
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 42
($context["diff"] ?? null), "i", [], "any", false, false, false, 42) > 0)) {
                    // line 43
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["diff"] ?? null), "i", [], "any", false, false, false, 43), "html", null, true);
                    yield " minute";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["diff"] ?? null), "i", [], "any", false, false, false, 43) > 1)) ? ("s") : (""));
                    yield "
                                ";
                } else {
                    // line 45
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["diff"] ?? null), "s", [], "any", false, false, false, 45), "html", null, true);
                    yield " second";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["diff"] ?? null), "s", [], "any", false, false, false, 45) > 1)) ? ("s") : (""));
                    yield "
                                ";
                }
                // line 47
                yield "                            </div>
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "                ";
        } else {
            // line 51
            yield "                    <p>No notifications available.</p>
                ";
        }
        // line 53
        yield "            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_notification-area.html.twig";
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
        return array (  166 => 53,  162 => 51,  159 => 50,  151 => 47,  143 => 45,  135 => 43,  133 => 42,  126 => 41,  124 => 40,  117 => 39,  115 => 38,  108 => 37,  106 => 36,  99 => 35,  96 => 34,  93 => 33,  90 => 32,  88 => 31,  80 => 26,  72 => 23,  69 => 22,  66 => 18,  61 => 17,  58 => 16,  56 => 15,  52 => 13,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/_notification-area.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\partials\\_notification-area.html.twig");
    }
}
