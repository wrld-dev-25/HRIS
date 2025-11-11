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

/* @WebProfiler/Profiler/_request_summary.html.twig */
class __TwigTemplate_8f688821e193227cc6ab608f57f46d5c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/_request_summary.html.twig"));

        // line 1
        $context["status_code"] = ((($context["request_collector"] ?? null)) ? (((CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", false, false, false, 1), 0)) : (0))) : (0));
        // line 2
        $context["css_class"] = (((($context["status_code"] ?? null) > 399)) ? ("status-error") : ((((($context["status_code"] ?? null) > 299)) ? ("status-warning") : ("status-success"))));
        // line 3
        yield "
";
        // line 4
        if ((($context["request_collector"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "redirect", [], "any", false, false, false, 4))) {
            // line 5
            yield "    ";
            $context["redirect"] = CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "redirect", [], "any", false, false, false, 5);
            // line 6
            yield "    ";
            $context["link_to_source_code"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, true, false, 6), "class", [], "any", true, true, false, 6)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, false, false, 6), "file", [], "any", false, false, false, 6), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, false, false, 6), "line", [], "any", false, false, false, 6))) : (""));
            // line 7
            yield "    ";
            $context["redirect_route_name"] = ("@" . CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "route", [], "any", false, false, false, 7));
            // line 8
            yield "
    <div class=\"status status-compact status-warning\">
        <span class=\"icon icon-redirect\">";
            // line 10
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/redirect.svg");
            yield "</span>

        <span class=\"status-response-status-code\">";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "status_code", [], "any", false, false, false, 12), "html", null, true);
            yield "</span> redirect from

        <span class=\"status-request-method\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "method", [], "any", false, false, false, 14), "html", null, true);
            yield "</span>

        ";
            // line 16
            if (($context["link_to_source_code"] ?? null)) {
                // line 17
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link_to_source_code"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, false, false, 17), "file", [], "any", false, false, false, 17), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["redirect_route_name"] ?? null), "html", null, true);
                yield "</a>
        ";
            } else {
                // line 19
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["redirect_route_name"] ?? null), "html", null, true);
                yield "
        ";
            }
            // line 21
            yield "
        (<a href=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "token", [], "any", false, false, false, 22), "panel" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 22), "get", ["panel", "request"], "method", false, false, false, 22)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["redirect"] ?? null), "token", [], "any", false, false, false, 22), "html", null, true);
            yield "</a>)
    </div>
";
        }
        // line 25
        yield "
<div class=\"status ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["css_class"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 27
        if ((($context["status_code"] ?? null) > 399)) {
            // line 28
            yield "        <p class=\"status-error-details\">
            <span class=\"icon\">";
            // line 29
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/alert-circle.svg");
            yield "</span>
            <span class=\"status-response-status-code\">Error ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["status_code"] ?? null), "html", null, true);
            yield "</span>
            <span class=\"status-response-status-text\">";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "statusText", [], "any", false, false, false, 31), "html", null, true);
            yield "</span>
        </p>
    ";
        }
        // line 34
        yield "
    <h2>
        <span class=\"status-request-method\">
            ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "method", [], "any", false, false, false, 37)), "html", null, true);
        yield "
        </span>

        ";
        // line 40
        $context["profile_title"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 40)) < 160)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 40)) : ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 40), 0, 160) . "…")));
        // line 41
        yield "        ";
        if (CoreExtension::inFilter(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "method", [], "any", false, false, false, 41)), ["GET", "HEAD"])) {
            // line 42
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 42), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["profile_title"] ?? null), "html", null, true);
            yield "</a>
        ";
        } else {
            // line 44
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["profile_title"] ?? null), "html", null, true);
            yield "
        ";
        }
        // line 46
        yield "    </h2>

    <dl class=\"metadata\">
        ";
        // line 49
        if ((($context["status_code"] ?? null) < 400)) {
            // line 50
            yield "            <dt>Response</dt>
            <dd>
                <span class=\"status-response-status-code\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["status_code"] ?? null), "html", null, true);
            yield "</span>
                <span class=\"status-response-status-text\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "statusText", [], "any", false, false, false, 53), "html", null, true);
            yield "</span>
            </dd>
        ";
        }
        // line 56
        yield "
        ";
        // line 57
        $context["referer"] = ((($context["request_collector"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestheaders", [], "any", false, false, false, 57), "get", ["referer"], "method", false, false, false, 57)) : (null));
        // line 58
        yield "        ";
        if (($context["referer"] ?? null)) {
            // line 59
            yield "            <dt></dt>
            <dd>
                <span class=\"icon icon-referer\">";
            // line 61
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/referrer.svg");
            yield "</span>
                <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["referer"] ?? null), "html", null, true);
            yield "\" class=\"referer\">Browse referrer URL</a>
            </dd>
        ";
        }
        // line 65
        yield "
        <dt>IP</dt>
        <dd>
            <a href=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => ($context["token"] ?? null), "limit" => 10, "ip" => CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, false, 68)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, false, 68), "html", null, true);
        yield "</a>
        </dd>

        <dt>Profiled on</dt>
        <dd><time data-convert-to-user-timezone data-render-as-datetime datetime=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, false, 72), "c"), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, false, 72), "r"), "html", null, true);
        yield "</time></dd>

        <dt>Token</dt>
        <dd>";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "token", [], "any", false, false, false, 75), "html", null, true);
        yield "</dd>
    </dl>
</div>

";
        // line 79
        if ((($context["request_collector"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 79))) {
            // line 80
            $context["forward_profile"] = CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "childByToken", [CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 80)], "method", false, false, false, 80);
            // line 81
            yield "    ";
            $context["controller"] = ((($context["forward_profile"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["forward_profile"] ?? null), "collector", ["request"], "method", false, false, false, 81), "controller", [], "any", false, false, false, 81)) : ("n/a"));
            // line 82
            yield "    <div class=\"status status-compact status-compact-forward\">
        <span class=\"icon icon-forward\">";
            // line 83
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/forward.svg");
            yield "</span>

        Forwarded to

        ";
            // line 87
            $context["link"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", true, true, false, 87)) ? ($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, false, 87), CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "line", [], "any", false, false, false, 87))) : (null));
            // line 88
            if (($context["link"] ?? null)) {
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, false, 88), "html", null, true);
                yield "\">";
            }
            // line 89
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, false, 89)) {
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 90), "html", null, true))), "html", null, true);
                // line 91
                ((CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 91)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((" :: " . CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 91)), "html", null, true)) : (yield ""));
            } else {
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["controller"] ?? null), "html", null, true);
            }
            // line 95
            if (($context["link"] ?? null)) {
                yield "</a>";
            }
            // line 96
            yield "        (<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "forwardtoken", [], "any", false, false, false, 96), "html", null, true);
            yield "</a>)

    </div>";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/_request_summary.html.twig";
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
        return array (  276 => 96,  272 => 95,  269 => 93,  266 => 91,  264 => 90,  262 => 89,  254 => 88,  252 => 87,  245 => 83,  242 => 82,  239 => 81,  237 => 80,  235 => 79,  228 => 75,  220 => 72,  211 => 68,  206 => 65,  200 => 62,  196 => 61,  192 => 59,  189 => 58,  187 => 57,  184 => 56,  178 => 53,  174 => 52,  170 => 50,  168 => 49,  163 => 46,  157 => 44,  149 => 42,  146 => 41,  144 => 40,  138 => 37,  133 => 34,  127 => 31,  123 => 30,  119 => 29,  116 => 28,  114 => 27,  110 => 26,  107 => 25,  99 => 22,  96 => 21,  90 => 19,  80 => 17,  78 => 16,  73 => 14,  68 => 12,  63 => 10,  59 => 8,  56 => 7,  53 => 6,  50 => 5,  48 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/_request_summary.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\_request_summary.html.twig");
    }
}
