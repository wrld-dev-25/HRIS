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

/* @WebProfiler/Profiler/results.html.twig */
class __TwigTemplate_39ab8bc081c00fb8d2ce05715e02a612 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'summary' => [$this, 'block_summary'],
            'sidebar_search_css_class' => [$this, 'block_sidebar_search_css_class'],
            'sidebar_shortcuts_links' => [$this, 'block_sidebar_shortcuts_links'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/results.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/results.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 10
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        #search-results td {
            font-family: var(--font-family-system);
            vertical-align: middle;
        }

        #search-results .sf-search {
            visibility: hidden;
            margin-left: 2px;
        }
        #search-results tr:hover .sf-search {
            visibility: visible;
        }
        #search-results .sf-search svg {
            stroke-width: 3;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 31
    public function block_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summary"));

        // line 32
        yield "    <div class=\"status\">
        <h2>Profile Search</h2>
    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 37
    public function block_sidebar_search_css_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_search_css_class"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 38
    public function block_sidebar_shortcuts_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_shortcuts_links"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 40
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        yield "    <div class=\"sf-tabs\" data-processed=\"true\">
        <div class=\"tab-navigation\" role=\"tablist\">
            <button class=\"tab-control ";
        // line 43
        yield ((("request" == ($context["profile_type"] ?? null))) ? ("active") : (""));
        yield "\" role=\"tab\" ";
        yield ((("request" == ($context["profile_type"] ?? null))) ? ("aria-selected=\"true\"") : ("tabindex=\"-1\""));
        yield " >
                <a href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => "empty", "limit" => 10]), "html", null, true);
        yield "\">
                    HTTP Requests
                </a>
            </button>
            <button class=\"tab-control ";
        // line 48
        yield ((("command" == ($context["profile_type"] ?? null))) ? ("active") : (""));
        yield "\" role=\"tab\" ";
        yield ((("command" == ($context["profile_type"] ?? null))) ? ("aria-selected=\"true\"") : ("tabindex=\"-1\""));
        yield ">
                <a href=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => "empty", "limit" => 10, "type" => "command"]), "html", null, true);
        yield "\">
                    Console Commands
                </a>
            </button>
        </div>
    </div>

    <h2>";
        // line 56
        ((($context["tokens"] ?? null)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["tokens"] ?? null)), "html", null, true)) : (yield "No"));
        yield " results found</h2>

    ";
        // line 58
        if (($context["tokens"] ?? null)) {
            // line 59
            yield "        <table id=\"search-results\">
            <thead>
                <tr>
                    <th scope=\"col\" class=\"text-center\">
                        ";
            // line 63
            if (("command" == ($context["profile_type"] ?? null))) {
                // line 64
                yield "                            Exit code
                        ";
            } else {
                // line 66
                yield "                            Status
                        ";
            }
            // line 68
            yield "                    </th>
                    <th scope=\"col\">
                        ";
            // line 70
            if (("command" == ($context["profile_type"] ?? null))) {
                // line 71
                yield "                            Application
                        ";
            } else {
                // line 73
                yield "                            IP
                        ";
            }
            // line 75
            yield "                    </th>
                    <th scope=\"col\">
                        ";
            // line 77
            if (("command" == ($context["profile_type"] ?? null))) {
                // line 78
                yield "                            Mode
                        ";
            } else {
                // line 80
                yield "                            Method
                        ";
            }
            // line 82
            yield "                    </th>
                    <th scope=\"col\">
                        ";
            // line 84
            if (("command" == ($context["profile_type"] ?? null))) {
                // line 85
                yield "                            Command
                        ";
            } else {
                // line 87
                yield "                            URL
                        ";
            }
            // line 89
            yield "                    </th>
                    <th scope=\"col\">Time</th>
                    <th scope=\"col\">Token</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tokens"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 96
                yield "                    ";
                if (("command" == ($context["profile_type"] ?? null))) {
                    // line 97
                    yield "                        ";
                    $context["css_class"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, false, 97) == 113)) ? ("status-warning") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, false, 97) > 0)) ? ("status-error") : ("status-success"))));
                    // line 98
                    yield "                    ";
                } else {
                    // line 99
                    yield "                        ";
                    $context["css_class"] = (((((CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", true, true, false, 99)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, false, 99), 0)) : (0)) > 399)) ? ("status-error") : ((((((CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", true, true, false, 99)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, false, 99), 0)) : (0)) > 299)) ? ("status-warning") : ("status-success"))));
                    // line 100
                    yield "                    ";
                }
                // line 101
                yield "
                    <tr>
                        <td class=\"text-center\">
                            <span class=\"label ";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["css_class"] ?? null), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", true, true, false, 104)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "status_code", [], "any", false, false, false, 104), "n/a")) : ("n/a")), "html", null, true);
                yield "</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "ip", [], "any", false, false, false, 107), "html", null, true);
                yield " ";
                yield CoreExtension::callMacro($macros["_self"], "macro_profile_search_filter", [($context["request"] ?? null), $context["result"], "ip"], 107, $context, $this->getSourceContext());
                yield "</span>
                        </td>
                        <td>
                            <span class=\"nowrap\">";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "method", [], "any", false, false, false, 110), "html", null, true);
                yield " ";
                yield CoreExtension::callMacro($macros["_self"], "macro_profile_search_filter", [($context["request"] ?? null), $context["result"], "method"], 110, $context, $this->getSourceContext());
                yield "</span>
                        </td>
                        <td class=\"break-long-words\">
                            ";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "url", [], "any", false, false, false, 113), "html", null, true);
                yield "
                            ";
                // line 114
                yield CoreExtension::callMacro($macros["_self"], "macro_profile_search_filter", [($context["request"] ?? null), $context["result"], "url"], 114, $context, $this->getSourceContext());
                yield "
                        </td>
                        <td class=\"text-small\">
                            <time data-convert-to-user-timezone data-render-as-date datetime=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, false, 117), "c"), "html", null, true);
                yield "\">
                                ";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, false, 118), "d-M-Y"), "html", null, true);
                yield "
                            </time>
                            <time class=\"newline\" data-convert-to-user-timezone data-render-as-time datetime=\"";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, false, 120), "c"), "html", null, true);
                yield "\">
                                ";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "time", [], "any", false, false, false, 121), "H:i:s"), "html", null, true);
                yield "
                            </time>
                        </td>
                        <td class=\"nowrap\"><a href=\"";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, $context["result"], "token", [], "any", false, false, false, 124)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["result"], "token", [], "any", false, false, false, 124), "html", null, true);
                yield "</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            yield "            </tbody>
        </table>
    ";
        } else {
            // line 130
            yield "        <div class=\"empty empty-panel\">
            <p>The query returned no result.</p>
        </div>
    ";
        }
        // line 134
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function macro_profile_search_filter($__request__ = null, $__result__ = null, $__property__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "request" => $__request__,
            "result" => $__result__,
            "property" => $__property__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "profile_search_filter"));

            // line 4
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "hasSession", [], "any", false, false, false, 4)) {
                // line 5
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", Twig\Extension\CoreExtension::merge(Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "query", [], "any", false, false, false, 5), "all", [], "any", false, false, false, 5), ["token" => CoreExtension::getAttribute($this->env, $this->source, ($context["result"] ?? null), "token", [], "any", false, false, false, 5)]), [($context["property"] ?? null) => (($__internal_compile_0 = ($context["result"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["property"] ?? null)] ?? null) : null)])), "html", null, true);
                yield "\" title=\"Search\"><span title=\"Search\" class=\"sf-icon sf-search\">";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/search.svg");
                yield "</span></a>";
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
        return "@WebProfiler/Profiler/results.html.twig";
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
        return array (  378 => 5,  376 => 4,  359 => 3,  350 => 134,  344 => 130,  339 => 127,  328 => 124,  322 => 121,  318 => 120,  313 => 118,  309 => 117,  303 => 114,  299 => 113,  291 => 110,  283 => 107,  275 => 104,  270 => 101,  267 => 100,  264 => 99,  261 => 98,  258 => 97,  255 => 96,  251 => 95,  243 => 89,  239 => 87,  235 => 85,  233 => 84,  229 => 82,  225 => 80,  221 => 78,  219 => 77,  215 => 75,  211 => 73,  207 => 71,  205 => 70,  201 => 68,  197 => 66,  193 => 64,  191 => 63,  185 => 59,  183 => 58,  178 => 56,  168 => 49,  162 => 48,  155 => 44,  149 => 43,  145 => 41,  138 => 40,  125 => 38,  112 => 37,  101 => 32,  94 => 31,  65 => 10,  58 => 9,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/results.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\results.html.twig");
    }
}
