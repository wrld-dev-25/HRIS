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

/* @WebProfiler/Profiler/_command_summary.html.twig */
class __TwigTemplate_7d89114b4cbd942a72a33b78b807def3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/_command_summary.html.twig"));

        // line 1
        $context["status_code"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "statuscode", [], "any", true, true, false, 1)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "statuscode", [], "any", false, false, false, 1), 0)) : (0));
        // line 2
        $context["interrupted"] = (((($context["command_collector"] ?? null) === false)) ? (null) : (CoreExtension::getAttribute($this->env, $this->source, ($context["command_collector"] ?? null), "interruptedBySignal", [], "any", false, false, false, 2)));
        // line 3
        $context["css_class"] = ((((($context["status_code"] ?? null) == 113) ||  !(null === ($context["interrupted"] ?? null)))) ? ("status-warning") : ((((($context["status_code"] ?? null) > 0)) ? ("status-error") : ("status-success"))));
        // line 4
        yield "
<div class=\"terminal status ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["css_class"] ?? null), "html", null, true);
        yield "\">
    <div class=\"container\">
        <h2>
            <span class=\"status-request-method\">
                ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "method", [], "any", false, false, false, 9)), "html", null, true);
        yield "
            </span>

            <span class=\"status-command\">
                ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "url", [], "any", false, false, false, 13), "html", null, true);
        yield "
            </span>
        </h2>

        <dl class=\"metadata\">
            ";
        // line 18
        if (($context["interrupted"] ?? null)) {
            // line 19
            yield "                <span class=\"status-response-status-code\">Interrupted</span>
                <dt>Signal</dt>
                <dd class=\"status-response-status-text\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["interrupted"] ?? null), "html", null, true);
            yield "</dd>

                <dt>Exit code</dt>
                <dd class=\"status-response-status-text\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["status_code"] ?? null), "html", null, true);
            yield "</dd>
            ";
        } elseif ((        // line 25
($context["status_code"] ?? null) == 0)) {
            // line 26
            yield "                <span class=\"status-response-status-code\">Success</span>
            ";
        } elseif ((        // line 27
($context["status_code"] ?? null) > 0)) {
            // line 28
            yield "                <span class=\"status-response-status-code\">Error</span>
                <dt>Exit code</dt>
                <dd class=\"status-response-status-text\"><span class=\"status-response-status-code\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["status_code"] ?? null), "html", null, true);
            yield "</span></dd>
            ";
        }
        // line 32
        yield "
            ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestserver", [], "any", false, false, false, 33), "has", ["SYMFONY_CLI_BINARY_NAME"], "method", false, false, false, 33)) {
            // line 34
            yield "                <dt>Symfony CLI</dt>
                <dd>v";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestserver", [], "any", false, false, false, 35), "get", ["SYMFONY_CLI_VERSION"], "method", false, false, false, 35), "html", null, true);
            yield "</dd>
            ";
        }
        // line 37
        yield "
            <dt>Application</dt>
            <dd>
                <a href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => ($context["token"] ?? null), "limit" => 10, "ip" => CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, false, 40), "type" => "command"]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "ip", [], "any", false, false, false, 40), "html", null, true);
        yield "</a>
            </dd>

            <dt>Profiled on</dt>
            <dd><time data-convert-to-user-timezone data-render-as-datetime datetime=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, false, 44), "c"), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "time", [], "any", false, false, false, 44), "r"), "html", null, true);
        yield "</time></dd>

            <dt>Token</dt>
            <dd>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "token", [], "any", false, false, false, 47), "html", null, true);
        yield "</dd>
        </dl>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/_command_summary.html.twig";
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
        return array (  139 => 47,  131 => 44,  122 => 40,  117 => 37,  112 => 35,  109 => 34,  107 => 33,  104 => 32,  99 => 30,  95 => 28,  93 => 27,  90 => 26,  88 => 25,  84 => 24,  78 => 21,  74 => 19,  72 => 18,  64 => 13,  57 => 9,  50 => 5,  47 => 4,  45 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/_command_summary.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\_command_summary.html.twig");
    }
}
