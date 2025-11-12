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

/* partials/_notification-area.html.twig */
class __TwigTemplate_572c7cd319f7d58c3d6dc42f829206ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_notification-area.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_notification-area.html.twig"));

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
        $context["notifications"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "session", [], "any", false, false, false, 15), "get", ["notification_message"], "method", false, false, false, 15);
        // line 16
        yield "                ";
        if (is_iterable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 16, $this->source); })()))) {
            // line 17
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 17, $this->source); })()));
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
                $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 33, $this->source); })()), "diff", [(isset($context["notificationDate"]) || array_key_exists("notificationDate", $context) ? $context["notificationDate"] : (function () { throw new RuntimeError('Variable "notificationDate" does not exist.', 33, $this->source); })())], "method", false, false, false, 33);
                // line 34
                yield "                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 34, $this->source); })()), "y", [], "any", false, false, false, 34) > 0)) {
                    // line 35
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 35, $this->source); })()), "y", [], "any", false, false, false, 35), "html", null, true);
                    yield " year";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 35, $this->source); })()), "y", [], "any", false, false, false, 35) > 1)) ? ("s") : (""));
                    yield "
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 36
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 36, $this->source); })()), "m", [], "any", false, false, false, 36) > 0)) {
                    // line 37
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 37, $this->source); })()), "m", [], "any", false, false, false, 37), "html", null, true);
                    yield " month";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 37, $this->source); })()), "m", [], "any", false, false, false, 37) > 1)) ? ("s") : (""));
                    yield "
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 38
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 38, $this->source); })()), "d", [], "any", false, false, false, 38) > 0)) {
                    // line 39
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 39, $this->source); })()), "d", [], "any", false, false, false, 39), "html", null, true);
                    yield " day";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 39, $this->source); })()), "d", [], "any", false, false, false, 39) > 1)) ? ("s") : (""));
                    yield "
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 40
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 40, $this->source); })()), "h", [], "any", false, false, false, 40) > 0)) {
                    // line 41
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 41, $this->source); })()), "h", [], "any", false, false, false, 41), "html", null, true);
                    yield " hour";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 41, $this->source); })()), "h", [], "any", false, false, false, 41) > 1)) ? ("s") : (""));
                    yield "
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 42
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 42, $this->source); })()), "i", [], "any", false, false, false, 42) > 0)) {
                    // line 43
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 43, $this->source); })()), "i", [], "any", false, false, false, 43), "html", null, true);
                    yield " minute";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 43, $this->source); })()), "i", [], "any", false, false, false, 43) > 1)) ? ("s") : (""));
                    yield "
                                ";
                } else {
                    // line 45
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 45, $this->source); })()), "s", [], "any", false, false, false, 45), "html", null, true);
                    yield " second";
                    yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 45, $this->source); })()), "s", [], "any", false, false, false, 45) > 1)) ? ("s") : (""));
                    yield "
                                ";
                }
                // line 47
                yield "                            </div>
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent']);
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/_notification-area.html.twig";
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
        return array (  173 => 53,  169 => 51,  166 => 50,  158 => 47,  150 => 45,  142 => 43,  140 => 42,  133 => 41,  131 => 40,  124 => 39,  122 => 38,  115 => 37,  113 => 36,  106 => 35,  103 => 34,  100 => 33,  97 => 32,  95 => 31,  87 => 26,  79 => 23,  76 => 22,  73 => 18,  68 => 17,  65 => 16,  63 => 15,  59 => 13,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"relative flex items-center dropdown h-header\">
    <button type=\"button\" class=\"inline-flex justify-center relative items-center p-0 text-topbar-item transition-all size-[37.5px] duration-200 ease-linear bg-topbar rounded-md dropdown-toggle btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[topbar=dark]:dark:text-zink-200 group-data-[topbar=dark]:text-topbar-item-dark\" id=\"notificationDropdown\" data-bs-toggle=\"dropdown\">
        <i data-lucide=\"bell-ring\" class=\"inline-block size-5 stroke-1 fill-slate-100 group-data-[topbar=dark]:fill-topbar-item-bg-hover-dark group-data-[topbar=brand]:fill-topbar-item-bg-hover-brand\"></i>
        <span class=\"absolute top-0 right-0 flex size-1.5\">
            <span class=\"absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-sky-400\"></span>
            <span class=\"relative inline-flex size-1.5 rounded-full bg-sky-500\"></span>
        </span>
    </button>
    <div class=\"absolute z-50 hidden ltr:text-left rtl:text-right bg-white rounded-md shadow-md !top-4 dropdown-menu min-w-[20rem] lg:min-w-[26rem] dark:bg-zink-600\" aria-labelledby=\"notificationDropdown\">
        {# <div id=\"_notification-area\">
            {{ dump(app.session.get('notification_message')) }}
        </div> #}
        <div data-simplebar class=\"max-h-[350px]\">
            <div class=\"flex flex-col gap-1\" id=\"notification-list\">
                {% set notifications = app.session.get('notification_message') %}
                {% if notifications is iterable %}
                    {% for notification in notifications %}
                        <a href=\"#!\" class=\"flex gap-3 p-4 product-item hover:bg-slate-50 dark:hover:bg-zink-500\">
                            {# <div class=\"size-10 rounded-md shrink-0 bg-slate-100\">
                                <img src=\"{{ asset('assets/images/users/avatar-3.png') }}\" alt=\"\" class=\"rounded-md\">
                            </div> #}
                            <div class=\"grow\">
                                <h6 class=\"mb-1 font-medium\"><b>{{ notification.sender_fullname }}</b> {{ notification.action }}</h6>
                                <p class=\"mb-0 text-sm text-slate-500 dark:text-zink-300\">
                                    <i data-lucide=\"clock\" class=\"inline-block size-3.5 mr-1\"></i>
                                    <span class=\"align-middle\">{{ notification.datetime|date('l h:i A') }}</span>
                                </p>
                            </div>
                            <div class=\"flex items-center self-start gap-2 text-xs text-slate-500 shrink-0 dark:text-zink-300\">
                                <div class=\"size-1.5 bg-custom-500 rounded-full\"></div> 
                                {% set now = date() %}
                                {% set notificationDate = date(notification.datetime) %}
                                {% set diff = now.diff(notificationDate) %}
                                {% if diff.y > 0 %}
                                    {{ diff.y }} year{{ diff.y > 1 ? 's' : '' }}
                                {% elseif diff.m > 0 %}
                                    {{ diff.m }} month{{ diff.m > 1 ? 's' : '' }}
                                {% elseif diff.d > 0 %}
                                    {{ diff.d }} day{{ diff.d > 1 ? 's' : '' }}
                                {% elseif diff.h > 0 %}
                                    {{ diff.h }} hour{{ diff.h > 1 ? 's' : '' }}
                                {% elseif diff.i > 0 %}
                                    {{ diff.i }} minute{{ diff.i > 1 ? 's' : '' }}
                                {% else %}
                                    {{ diff.s }} second{{ diff.s > 1 ? 's' : '' }}
                                {% endif %}
                            </div>
                        </a>
                    {% endfor %}
                {% else %}
                    <p>No notifications available.</p>
                {% endif %}
            </div>
        </div>
    </div>
</div>", "partials/_notification-area.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\partials\\_notification-area.html.twig");
    }
}
