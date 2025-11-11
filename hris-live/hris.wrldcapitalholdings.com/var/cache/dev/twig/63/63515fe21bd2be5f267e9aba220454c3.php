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

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_8a28efb8186dffd29ebb4e48bd85d7d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        .empty-query-post-files {
            display: flex;
            justify-content: space-between;
        }
        .empty-query-post-files > div {
            flex: 1;
        }
        .empty-query-post-files > div + div {
            margin-left: 30px;
        }
        .empty-query-post-files h3 {
            margin-top: 0;
        }
        .empty-query-post-files .empty {
            margin-bottom: 0;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 26
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 27
        yield "    ";
        $context["request_handler"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 28
            yield "        ";
            yield CoreExtension::callMacro($macros["_self"], "macro_set_handler", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "controller", [], "any", false, false, false, 28)], 28, $context, $this->getSourceContext());
            yield "
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 30
        yield "
    ";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 31)) {
            // line 32
            yield "        ";
            $context["redirect_handler"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 33
                yield "            ";
                yield CoreExtension::callMacro($macros["_self"], "macro_set_handler", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 33), "controller", [], "any", false, false, false, 33), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 33), "route", [], "any", false, false, false, 33), ((("GET" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 33), "method", [], "any", false, false, false, 33))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 33), "method", [], "any", false, false, false, 33)) : (""))], 33, $context, $this->getSourceContext());
                yield "
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 35
            yield "    ";
        }
        // line 36
        yield "
    ";
        // line 37
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 37)) {
            // line 38
            yield "        ";
            $context["forward_profile"] = CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "childByToken", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 38)], "method", false, false, false, 38);
            // line 39
            yield "        ";
            $context["forward_handler"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 40
                yield "            ";
                yield CoreExtension::callMacro($macros["_self"], "macro_set_handler", [((($context["forward_profile"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["forward_profile"] ?? null), "collector", ["request"], "method", false, false, false, 40), "controller", [], "any", false, false, false, 40)) : ("n/a"))], 40, $context, $this->getSourceContext());
                yield "
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 42
            yield "    ";
        }
        // line 43
        yield "
    ";
        // line 44
        $context["request_status_code_color"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 44) >= 400)) ? ("red") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 44) >= 300)) ? ("yellow") : ("green"))));
        // line 45
        yield "
    ";
        // line 46
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 47
            yield "        <span class=\"sf-toolbar-status sf-toolbar-status-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["request_status_code_color"] ?? null), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 47), "html", null, true);
            yield "</span>
        ";
            // line 48
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 48)) {
                // line 49
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 49)) {
                    yield "<span class=\"sf-toolbar-request-icon\">";
                    yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/redirect.svg");
                    yield "</span>";
                }
                // line 50
                yield "            ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 50)) {
                    yield "<span class=\"sf-toolbar-request-icon\">";
                    yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/forward.svg");
                    yield "</span>";
                }
                // line 51
                yield "            <span class=\"sf-toolbar-label\">";
                ((("GET" != CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 51))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 51), "html", null, true)) : (yield ""));
                yield " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 52), "html", null, true);
                yield "</span>
        ";
            }
            // line 54
            yield "    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        yield "
    ";
        // line 56
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 57
            yield "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 60), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statustext", [], "any", false, false, false, 60), "html", null, true);
            yield "</span>
            </div>

            ";
            // line 63
            if (("GET" != CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 63))) {
                // line 64
                yield "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 66), "html", null, true);
                yield "</span>
                </div>";
            }
            // line 69
            yield "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["request_handler"] ?? null), "html", null, true);
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", true, true, false, 77)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 77), "n/a")) : ("n/a")), "html", null, true);
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
            // line 82
            if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 82))) {
                yield "yes";
            } else {
                yield "no";
            }
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Stateless Check</b>
                <span>";
            // line 87
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statelesscheck", [], "any", false, false, false, 87)) {
                yield "yes";
            } else {
                yield "no";
            }
            yield "</span>
            </div>
        </div>

        ";
            // line 91
            if (array_key_exists("redirect_handler", $context)) {
                // line 92
                yield "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 95), "status_code", [], "any", false, false, false, 95), "html", null, true);
                yield "</span>
                        Redirect from
                    </b>
                    <span>
                        ";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["redirect_handler"] ?? null), "html", null, true);
                yield "
                        (<a href=\"";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 100), "token", [], "any", false, false, false, 100)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 100), "token", [], "any", false, false, false, 100), "html", null, true);
                yield "</a>)
                    </span>
                </div>
            </div>
        ";
            }
            // line 105
            yield "
        ";
            // line 106
            if (array_key_exists("forward_handler", $context)) {
                // line 107
                yield "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        ";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["forward_handler"] ?? null), "html", null, true);
                yield "
                        (<a href=\"";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 112)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 112), "html", null, true);
                yield "</a>)
                    </span>
                </div>
            </div>
        ";
            }
            // line 117
            yield "    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 118
        yield "
    ";
        // line 119
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 122
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 123
        yield "    <span class=\"label\">
        <span class=\"icon\">";
        // line 124
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/request.svg");
        yield "</span>
        <strong>Request / Response</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 129
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 130
        yield "    ";
        $context["controller_name"] = CoreExtension::callMacro($macros["_self"], "macro_set_handler", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "controller", [], "any", false, false, false, 130)], 130, $context, $this->getSourceContext());
        // line 131
        yield "    <h2>
        ";
        // line 132
        ((CoreExtension::inFilter("n/a", ($context["controller_name"] ?? null))) ? (yield "Request / Response") : (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["controller_name"] ?? null), "html", null, true)));
        yield "
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                ";
        // line 140
        $context["has_no_query_post_or_files"] = ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", [], "any", false, false, false, 140), "all", [], "any", false, false, false, 140)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", [], "any", false, false, false, 140), "all", [], "any", false, false, false, 140))) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestfiles", [], "any", false, false, false, 140)));
        // line 141
        yield "                ";
        if (($context["has_no_query_post_or_files"] ?? null)) {
            // line 142
            yield "                    <div class=\"empty-query-post-files\" style=\"display: flex; align-items: stretch\">
                        <div>
                            <h3>GET Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>POST Parameters</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                        <div>
                            <h3>Uploaded Files</h3>
                            <div class=\"empty\"><p>None</p></div>
                        </div>
                    </div>
                ";
        } else {
            // line 157
            yield "                    <h3>GET Parameters</h3>

                    ";
            // line 159
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", [], "any", false, false, false, 159), "all", [], "any", false, false, false, 159))) {
                // line 160
                yield "                        <div class=\"empty\">
                            <p>No GET parameters</p>
                        </div>
                    ";
            } else {
                // line 164
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", [], "any", false, false, false, 164), "maxDepth" => 1], false);
                yield "
                    ";
            }
            // line 166
            yield "
                    <h3>POST Parameters</h3>

                    ";
            // line 169
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", [], "any", false, false, false, 169), "all", [], "any", false, false, false, 169))) {
                // line 170
                yield "                        <div class=\"empty\">
                            <p>No POST parameters</p>
                        </div>
                    ";
            } else {
                // line 174
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", [], "any", false, false, false, 174), "maxDepth" => 1], false);
                yield "
                    ";
            }
            // line 176
            yield "
                    <h4>Uploaded Files</h4>

                    ";
            // line 179
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestfiles", [], "any", false, false, false, 179))) {
                // line 180
                yield "                        <div class=\"empty\">
                            <p>No files were uploaded</p>
                        </div>
                    ";
            } else {
                // line 184
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestfiles", [], "any", false, false, false, 184), "maxDepth" => 1], false);
                yield "
                    ";
            }
            // line 186
            yield "                ";
        }
        // line 187
        yield "
                <h3>Request Attributes</h3>

                ";
        // line 190
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestattributes", [], "any", false, false, false, 190), "all", [], "any", false, false, false, 190))) {
            // line 191
            yield "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 195
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestattributes", [], "any", false, false, false, 195)], false);
            yield "
                ";
        }
        // line 197
        yield "
                <h3>Request Headers</h3>
                ";
        // line 199
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestheaders", [], "any", false, false, false, 199), "labels" => ["Header", "Value"], "maxDepth" => 1], false);
        yield "

                <h3>Request Content</h3>

                ";
        // line 203
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "content", [], "any", false, false, false, 203) == false)) {
            // line 204
            yield "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source,         // line 207
($context["collector"] ?? null), "content", [], "any", false, false, false, 207)) {
            // line 208
            yield "                    <div class=\"sf-tabs\">
                        ";
            // line 209
            $context["prettyJson"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "isJsonRequest", [], "any", false, false, false, 209)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "prettyJson", [], "any", false, false, false, 209)) : (null));
            // line 210
            yield "                        ";
            if ( !(null === ($context["prettyJson"] ?? null))) {
                // line 211
                yield "                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Pretty</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\" style=\"max-height: 500px; overflow-y: auto;\">
                                    <pre class=\"break-long-words\">";
                // line 215
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["prettyJson"] ?? null), "html", null, true);
                yield "</pre>
                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 220
            yield "
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Raw</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\">
                                    <pre class=\"break-long-words\">";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "content", [], "any", false, false, false, 225), "html", null, true);
            yield "</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 231
            yield "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 235
        yield "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 244
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "responseheaders", [], "any", false, false, false, 244), "labels" => ["Header", "Value"], "maxDepth" => 1], false);
        yield "
            </div>
        </div>

        <div class=\"tab ";
        // line 248
        yield (((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, false, 248), "all", [], "any", false, false, false, 248)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, false, 248), "all", [], "any", false, false, false, 248)))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                ";
        // line 254
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, false, 254), "all", [], "any", false, false, false, 254))) {
            // line 255
            yield "                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                ";
        } else {
            // line 259
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, false, 259)], false);
            yield "
                ";
        }
        // line 261
        yield "
                <h3>Response Cookies</h3>

                ";
        // line 264
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, false, 264), "all", [], "any", false, false, false, 264))) {
            // line 265
            yield "                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                ";
        } else {
            // line 269
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, false, 269)], true);
            yield "
                ";
        }
        // line 271
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 274
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 274))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Session";
        // line 275
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 275))) {
            yield " <span class=\"badge\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 275)), "html", null, true);
            yield "</span>";
        }
        yield "</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 280
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 280))) {
            // line 281
            yield "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 285
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 285)], false);
            yield "
                ";
        }
        // line 287
        yield "
                <h3>Session Attributes</h3>

                ";
        // line 290
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionattributes", [], "any", false, false, false, 290))) {
            // line 291
            yield "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 295
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionattributes", [], "any", false, false, false, 295), "labels" => ["Attribute", "Value"]], false);
            yield "
                ";
        }
        // line 297
        yield "
                <h3>Session Usage</h3>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 302)), "html", null, true);
        yield "</span>
                        <span class=\"label\">Usages</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 307
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "statelesscheck", [], "any", false, false, false, 307)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                        <span class=\"label\">Stateless check enabled</span>
                    </div>
                </div>

                ";
        // line 312
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 312))) {
            // line 313
            yield "                    <div class=\"empty\">
                        <p>Session not used.</p>
                    </div>
                ";
        } else {
            // line 317
            yield "                    <table class=\"session_usages\">
                        <thead>
                        <tr>
                            <th class=\"full-width\">Usage</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
            // line 325
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 325));
            foreach ($context['_seq'] as $context["key"] => $context["usage"]) {
                // line 326
                yield "                            <tr>
                                <td class=\"font-normal\">";
                // line 328
                $context["link"] = $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "file", [], "any", false, false, false, 328), CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "line", [], "any", false, false, false, 328));
                // line 329
                if (($context["link"] ?? null)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 329), "html", null, true);
                    yield "\">";
                } else {
                    yield "<span title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 329), "html", null, true);
                    yield "\">";
                }
                // line 330
                yield "                                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 330), "html", null, true);
                // line 331
                if (($context["link"] ?? null)) {
                    yield "</a>";
                } else {
                    yield "</span>";
                }
                // line 332
                yield "                                    <div class=\"text-small font-normal\">
                                        ";
                // line 333
                $context["usage_id"] = ("session-usage-trace-" . $context["key"]);
                // line 334
                yield "                                        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["usage_id"] ?? null), "html", null, true);
                yield "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
                                    </div>
                                    <div id=\"";
                // line 336
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["usage_id"] ?? null), "html", null, true);
                yield "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                        ";
                // line 337
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["usage"], "trace", [], "any", false, false, false, 337), 2);
                yield "
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['usage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 342
            yield "                        </tbody>
                    </table>
                ";
        }
        // line 345
        yield "            </div>
        </div>

        <div class=\"tab ";
        // line 348
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, false, 348))) ? ("disabled") : (""));
        yield "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 354
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, false, 354))) {
            // line 355
            yield "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 359
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, false, 359)], false);
            yield "
                ";
        }
        // line 361
        yield "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                ";
        // line 369
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "dotenvvars", [], "any", false, false, false, 369)], false);
        yield "

                <h4>Defined as regular env variables</h4>
                ";
        // line 372
        $context["requestserver"] = [];
        // line 373
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "requestserver", [], "any", false, false, false, 373), function ($_____, $__key__) use ($context, $macros) { $context["_"] = $_____; $context["key"] = $__key__; return !CoreExtension::inFilter($context["key"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "dotenvvars", [], "any", false, false, false, 373), "keys", [], "any", false, false, false, 373)); }));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 374
            yield "                    ";
            $context["requestserver"] = Twig\Extension\CoreExtension::merge(($context["requestserver"] ?? null), [$context["key"] => $context["value"]]);
            // line 375
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 376
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => ($context["requestserver"] ?? null)], false);
        yield "
            </div>
        </div>

        ";
        // line 380
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 380)) {
            // line 381
            yield "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 386), "token", [], "any", false, false, false, 386)]), "html", null, true);
            yield "\">Return to parent request</a>
                    <small>(token = ";
            // line 387
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 387), "token", [], "any", false, false, false, 387), "html", null, true);
            yield ")</small>
                </h3>

                ";
            // line 390
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 390), "getcollector", ["request"], "method", false, false, false, 390), "requestattributes", [], "any", false, false, false, 390)], false);
            yield "
            </div>
        </div>
        ";
        }
        // line 394
        yield "
        ";
        // line 395
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 395))) {
            // line 396
            yield "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 397
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 397)), "html", null, true);
            yield "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 400
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 400));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 401
                yield "                    <h3>
                        ";
                // line 402
                yield CoreExtension::callMacro($macros["_self"], "macro_set_handler", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getcollector", ["request"], "method", false, false, false, 402), "controller", [], "any", false, false, false, 402)], 402, $context, $this->getSourceContext());
                yield "
                        <small>(token = <a href=\"";
                // line 403
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 403)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 403), "html", null, true);
                yield "</a>)</small>
                    </h3>

                    ";
                // line 406
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "getcollector", ["request"], "method", false, false, false, 406), "requestattributes", [], "any", false, false, false, 406)], false);
                yield "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 408
            yield "            </div>
        </div>
        ";
        }
        // line 411
        yield "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 414
    public function macro_set_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 415
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, false, 415)) {
                // line 416
                if (((array_key_exists("method", $context)) ? (Twig\Extension\CoreExtension::default(($context["method"] ?? null), false)) : (false))) {
                    yield "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["method"] ?? null), "html", null, true);
                    yield "</span>";
                }
                // line 417
                $context["link"] = $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, false, 417), CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "line", [], "any", false, false, false, 417));
                // line 418
                if (($context["link"] ?? null)) {
                    yield "<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
                    yield "\" title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 418), "html", null, true);
                    yield "\">";
                } else {
                    yield "<span title=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 418), "html", null, true);
                    yield "\">";
                }
                // line 420
                if (((array_key_exists("route", $context)) ? (Twig\Extension\CoreExtension::default(($context["route"] ?? null), false)) : (false))) {
                    // line 421
                    yield "@";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["route"] ?? null), "html", null, true);
                } else {
                    // line 423
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::striptags($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 423), "html", null, true))), "html", null, true);
                    // line 424
                    ((CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 424)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((" :: " . CoreExtension::getAttribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 424)), "html", null, true)) : (yield ""));
                }
                // line 427
                if (($context["link"] ?? null)) {
                    yield "</a>";
                } else {
                    yield "</span>";
                }
            } else {
                // line 429
                yield "<span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("route", $context)) ? (Twig\Extension\CoreExtension::default(($context["route"] ?? null), ($context["controller"] ?? null))) : (($context["controller"] ?? null))), "html", null, true);
                yield "</span>";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
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
        return array (  973 => 429,  966 => 427,  963 => 424,  961 => 423,  957 => 421,  955 => 420,  943 => 418,  941 => 417,  935 => 416,  932 => 415,  915 => 414,  906 => 411,  901 => 408,  893 => 406,  885 => 403,  881 => 402,  878 => 401,  874 => 400,  868 => 397,  865 => 396,  863 => 395,  860 => 394,  853 => 390,  847 => 387,  843 => 386,  836 => 381,  834 => 380,  826 => 376,  820 => 375,  817 => 374,  812 => 373,  810 => 372,  804 => 369,  794 => 361,  788 => 359,  782 => 355,  780 => 354,  771 => 348,  766 => 345,  761 => 342,  750 => 337,  746 => 336,  740 => 334,  738 => 333,  735 => 332,  729 => 331,  726 => 330,  714 => 329,  712 => 328,  709 => 326,  705 => 325,  695 => 317,  689 => 313,  687 => 312,  679 => 307,  671 => 302,  664 => 297,  658 => 295,  652 => 291,  650 => 290,  645 => 287,  639 => 285,  633 => 281,  631 => 280,  619 => 275,  615 => 274,  610 => 271,  604 => 269,  598 => 265,  596 => 264,  591 => 261,  585 => 259,  579 => 255,  577 => 254,  568 => 248,  561 => 244,  550 => 235,  544 => 231,  535 => 225,  528 => 220,  520 => 215,  514 => 211,  511 => 210,  509 => 209,  506 => 208,  504 => 207,  499 => 204,  497 => 203,  490 => 199,  486 => 197,  480 => 195,  474 => 191,  472 => 190,  467 => 187,  464 => 186,  458 => 184,  452 => 180,  450 => 179,  445 => 176,  439 => 174,  433 => 170,  431 => 169,  426 => 166,  420 => 164,  414 => 160,  412 => 159,  408 => 157,  391 => 142,  388 => 141,  386 => 140,  375 => 132,  372 => 131,  369 => 130,  362 => 129,  350 => 124,  347 => 123,  340 => 122,  330 => 119,  327 => 118,  323 => 117,  313 => 112,  309 => 111,  303 => 107,  301 => 106,  298 => 105,  288 => 100,  284 => 99,  277 => 95,  272 => 92,  270 => 91,  259 => 87,  247 => 82,  239 => 77,  231 => 72,  226 => 69,  221 => 66,  217 => 64,  215 => 63,  207 => 60,  202 => 57,  200 => 56,  197 => 55,  193 => 54,  188 => 52,  183 => 51,  176 => 50,  169 => 49,  167 => 48,  160 => 47,  158 => 46,  155 => 45,  153 => 44,  150 => 43,  147 => 42,  140 => 40,  137 => 39,  134 => 38,  132 => 37,  129 => 36,  126 => 35,  119 => 33,  116 => 32,  114 => 31,  111 => 30,  104 => 28,  101 => 27,  94 => 26,  64 => 4,  57 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/request.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\request.html.twig");
    }
}
