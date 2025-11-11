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

/* @TwigComponent/Collector/twig_component.html.twig */
class __TwigTemplate_ec8662e26feedccff0de3cc0e6a73de2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'table_components' => [$this, 'block_table_components'],
            'table_renders' => [$this, 'block_table_renders'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TwigComponent/Collector/twig_component.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@TwigComponent/Collector/twig_component.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 0
        yield "Twig Components";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "
    <style>
        .twig-component-dump {
            display: block;
            background: rgba(0, 0, 0, .15);
            --font-size-monospace: 12px;
            font-weight: 400;
            border-radius: 4px;
            padding: 5px;
        }
        .twig-component-metrics {
            margin-block-end: 3rem;
        }

        .twig-component-component {
            margin-block-end: 3rem;
        }
        .twig-component-component th:first-child,
        .twig-component-component td:first-child {
            width: 25%;
        }
        .twig-component-component thead th {
            font-weight: 200;
            vertical-align: middle;
            padding: .75rem 1rem;
        }
        .twig-component-component thead strong {
            font-weight: 600;
            display: block;
        }
        .twig-component-component td {
            vertical-align: middle;
            padding: .75rem 1rem;
        }
        .twig-component-component tbody td.metric {
            text-align: right;
        }
        .twig-component-component thead small,
        .twig-component-component thead strong {
            display: block;
        }
        .twig-component-component .cell-right {
            width: 4rem;
            text-align: right;
        }

        .twig-component-renders {
            margin-bottom: 2rem;
        }
        .twig-component-render {
            margin-left: calc(var(--render-depth) * .5rem);
            width: calc(100% - calc(var(--render-depth) * .5rem));
        }
        .twig-component-render thead th {
            text-align: left;
            border-bottom: none;
            vertical-align: middle;
        }
        .twig-component-render thead tr {
            vertical-align: middle;
            opacity: .9;
        }
        .twig-component-render thead tr:hover {
            opacity: 1;
            cursor: pointer;
        }
        .twig-component-render .sf-toggle .toggle-button {
            color: inherit;
        }
        .twig-component-render .sf-toggle-on .toggle-button {
            transform: rotate(0deg);
            opacity: 1;
            transition: all 150ms ease-in-out;
        }
        .twig-component-render .sf-toggle-off .toggle-button {
            transform: rotate(90deg);
            opacity: .85;
            transition: all 250ms ease-in-out;
        }
        .twig-component-render th:first-child,
        .twig-component-render tr:first-child {
            width: 25%;
        }
        .twig-component-render th,
        .twig-component-render tbody th {
            font-weight: normal;
        }
        .twig-component-render th:first-child {
            font-weight: bolder;
        }
        .twig-component-render th:first-child svg {
            transform: rotate(45deg);
            transform-origin: inherit;
            transform-style: initial;
            width: 1.25rem;
            vertical-align: inherit;
        }
        .twig-component-render th:last-child {
            width: 2rem;
        }
        .twig-component-render th.renderTime {
            width: 4rem;
            font-weight: initial;
        }
        .twig-component-render tbody.sf-toggle-visible {
            display: table-row-group;
            width: inherit;
        }
        .twig-component-render tbody th {
            font-weight: normal !important;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 120
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 121
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "renderCount", [], "any", false, false, false, 121)) {
            // line 122
            yield "
        ";
            // line 123
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 124
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@TwigComponent/Collector/icon.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 125
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "renderCount", [], "any", false, false, false, 125), "html", null, true);
                yield "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">in</span>
                <span class=\"sf-toolbar-value\">";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "renderTime", [], "any", false, false, false, 128)), "html", null, true);
                yield "</span>
                <span class=\"sf-toolbar-label\">ms</span>
            </span>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 132
            yield "
        ";
            // line 133
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 134
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "components", [], "any", false, false, false, 134));
                foreach ($context['_seq'] as $context["_key"] => $context["_component"]) {
                    // line 135
                    yield "                <div class=\"sf-toolbar-info-piece\">
                    <b class=\"label\">";
                    // line 136
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["_component"], "name", [], "any", false, false, false, 136), "html", null, true);
                    yield "</b>
                    <span class=\"sf-toolbar-status\">";
                    // line 137
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["_component"], "render_count", [], "any", false, false, false, 137), "html", null, true);
                    yield "</span>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_component'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 140
                yield "        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 141
            yield "
        ";
            // line 142
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            yield "

    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 147
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 148
        yield "    <span class=\"label";
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "components", [], "any", false, false, false, 148))) ? (" disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 149
        yield Twig\Extension\CoreExtension::source($this->env, "@TwigComponent/Collector/icon.svg");
        yield "</span>
        <strong>Twig Components</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 154
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 155
        yield "    <h2>Components</h2>
    ";
        // line 156
        if ( !((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "componentCount", [], "any", true, true, false, 156)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "componentCount", [], "any", false, false, false, 156))) : (""))) {
            // line 157
            yield "        <div class=\"empty empty-panel\">
            <p>No component were rendered for this request.</p>
        </div>
    ";
        } else {
            // line 161
            yield "        <section class=\"twig-component-metrics metrics\">
            <div class=\"metric-group\">
                ";
            // line 163
            yield CoreExtension::callMacro($macros["_self"], "macro_metric", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "componentCount", [], "any", false, false, false, 163), "Twig Components"], 163, $context, $this->getSourceContext());
            yield "
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric-group\">
                ";
            // line 167
            yield CoreExtension::callMacro($macros["_self"], "macro_metric", [CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "renderCount", [], "any", false, false, false, 167), "Render Count"], 167, $context, $this->getSourceContext());
            yield "
                ";
            // line 168
            yield CoreExtension::callMacro($macros["_self"], "macro_metric", [Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "renderTime", [], "any", false, false, false, 168)), "Render Time", "ms"], 168, $context, $this->getSourceContext());
            yield "
            </div>
            <div class=\"metric-divider\"></div>
            <div class=\"metric-group\">
                ";
            // line 172
            yield CoreExtension::callMacro($macros["_self"], "macro_metric", [$this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "peakMemoryUsage", [], "any", false, false, false, 172) / 1024) / 1024), 1), "Memory Usage", "MiB"], 172, $context, $this->getSourceContext());
            yield "
            </div>
        </section>
        <section class=\"twig-component-components\">
            <h3>Components</h3>
            ";
            // line 177
            yield from             $this->unwrap()->yieldBlock("table_components", $context, $blocks);
            yield "
        </section>
        <section class=\"twig-component-renders\">
            <h3>Render calls</h3>
            ";
            // line 181
            yield from             $this->unwrap()->yieldBlock("table_renders", $context, $blocks);
            yield "
        </section>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 200
    public function block_table_components($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_components"));

        // line 201
        yield "    <table class=\"twig-component-component\">
        <thead>
        <tr>
            <th class=\"key\">
                <strong>Name</strong>
            </th>
            <th>
                <strong>Metadata</strong>
            </th>
            <th class=\"cell-right\">
                <small>Render</small>
                <strong>Count</strong>
            </th>
            <th class=\"cell-right\">
                <small>Render</small>
                <strong>Time</strong>
            </th>
        </tr>
        </thead>
        <tbody>
            ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "components", [], "any", false, false, false, 221));
        foreach ($context['_seq'] as $context["_key"] => $context["component"]) {
            // line 222
            yield "                <tr>
                    <td>";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["component"], "name", [], "any", false, false, false, 223), "html", null, true);
            yield "</td>
                    <td>
                        ";
            // line 225
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["component"], "class", [], "any", false, false, false, 225) == "Symfony\\UX\\TwigComponent\\AnonymousComponent")) {
                // line 226
                yield "                            <pre class=\"sf-dump\"><span class=\"text-muted\">[Anonymous]</span></pre>
                        ";
            } else {
                // line 228
                yield "                            ";
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["component"], "class_stub", [], "any", false, false, false, 228));
                yield "
                        ";
            }
            // line 230
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["component"], "template_path", [], "any", false, false, false, 230)) {
                // line 231
                yield "                            <a class=text-muted\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, $context["component"], "template_path", [], "any", false, false, false, 231), 1), "html", null, true);
                yield "\">";
                // line 232
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["component"], "template", [], "any", false, false, false, 232), "html", null, true);
                // line 233
                yield "</a>
                        ";
            } else {
                // line 235
                yield "                            <span class=text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["component"], "template", [], "any", false, false, false, 235), "html", null, true);
                yield "</span>
                        ";
            }
            // line 237
            yield "                    </td>
                    <td class=\"cell-right\">";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["component"], "render_count", [], "any", false, false, false, 238), "html", null, true);
            yield "</td>
                    <td class=\"cell-right\">";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["component"], "render_time", [], "any", false, false, false, 240), 2), "html", null, true);
            // line 241
            yield "<span class=\"text-muted text-small\">ms</span>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['component'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 245
        yield "        </tbody>
    </table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 249
    public function block_table_renders($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_renders"));

        // line 250
        yield "    <div class=\"twig-component-renders\">
        ";
        // line 251
        $context["_memory"] = null;
        // line 252
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "renders", [], "any", false, false, false, 252));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["render"]) {
            // line 253
            yield "            <table class=\"twig-component-render\" style=\"--render-depth:";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["render"], "depth", [], "any", false, false, false, 253), "html", null, true);
            yield ";\">
                <thead
                    class=\"sf-toggle ";
            // line 255
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 255) == 1)) ? ("sf-toggle-on") : ("sf-toggle-off"));
            yield "\"
                   data-toggle-selector=\"#render-";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 256), "html", null, true);
            yield "--details\"
                   data-toggle-initial=\"";
            // line 257
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 257) == 1)) ? ("display") : (""));
            yield "\"
                >
                    <tr>
                        <th class=\"key\">";
            // line 260
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["render"], "depth", [], "any", false, false, false, 260)) ? (Twig\Extension\CoreExtension::source($this->env, "@TwigComponent/Collector/chevron-down.svg")) : (""));
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["render"], "name", [], "any", false, false, false, 260), "html", null, true);
            yield "</th>
                        <th>
                            ";
            // line 262
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["render"], "class", [], "any", false, false, false, 262) == "Symfony\\UX\\TwigComponent\\AnonymousComponent")) {
                // line 263
                yield "                                <pre class=\"sf-dump\"><span class=\"text-muted\">[Anonymous]</span></pre>
                            ";
            } else {
                // line 265
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["render"], "class", [], "any", false, false, false, 265), "html", null, true);
                yield "
                            ";
            }
            // line 267
            yield "                        </th>
                        <th class=\"cell-right renderTime\">
                            ";
            // line 269
            $context["_render_memory"] = ((((CoreExtension::getAttribute($this->env, $this->source, $context["render"], "render_memory", [], "any", true, true, false, 269)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["render"], "render_memory", [], "any", false, false, false, 269), 0)) : (0)) / 1024) / 1024);
            // line 270
            yield "                            <span class=\"";
            yield (((($context["_render_memory"] ?? null) == ($context["_memory"] ?? null))) ? ("text-muted") : (""));
            yield "\">";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(($context["_render_memory"] ?? null), 1), "html", null, true);
            // line 272
            yield "</span>
                            <span class=\"text-muted text-small\">MiB</span>
                            ";
            // line 274
            $context["_memory"] = ($context["_render_memory"] ?? null);
            // line 275
            yield "                        </th>
                        <th class=\"cell-right renderTime\">
                            ";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["render"], "render_time", [], "any", false, false, false, 277), 2), "html", null, true);
            yield "
                            <span class=\"text-muted text-small\">ms</span>
                        </th>
                        <th class=\"cell-right\">
                            <button class=\"btn btn-link toggle-button\" type=\"button\" aria-label=\"Toggle details\">
                                ";
            // line 282
            yield Twig\Extension\CoreExtension::source($this->env, "@TwigComponent/Collector/chevron-down.svg");
            yield "
                            </button>
                        </th>
                    </tr>
                </thead>
                <tbody id=\"render-";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 287), "html", null, true);
            yield "--details\">
                    <tr class=\"";
            // line 288
            yield (( !((CoreExtension::getAttribute($this->env, $this->source, $context["render"], "input_props", [], "any", true, true, false, 288)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["render"], "input_props", [], "any", false, false, false, 288))) : (""))) ? ("opacity-50") : (""));
            yield "\">
                        <th scope=\"row\">Input props</th>
                        <td colspan=\"3\">";
            // line 290
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["render"], "input_props", [], "any", false, false, false, 290));
            yield "</td>
                    </tr>
                    <tr class=\"";
            // line 292
            yield (( !((CoreExtension::getAttribute($this->env, $this->source, $context["render"], "attributes", [], "any", true, true, false, 292)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["render"], "attributes", [], "any", false, false, false, 292))) : (""))) ? ("opacity-50") : (""));
            yield "\">
                        <th scope=\"row\">Attributes</th>
                        <td colspan=\"3\">";
            // line 294
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["render"], "attributes", [], "any", false, false, false, 294));
            yield "</td>
                    </tr>
                    <tr>
                        <th scope=\"row\">Component</th>
                        <td colspan=\"3\">";
            // line 298
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["render"], "component", [], "any", false, false, false, 298));
            yield "</td>
                    </tr>
                </tbody>
            </table>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['render'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        yield "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 186
    public function macro_metric($__value__ = null, $__label__ = null, $__unit__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "label" => $__label__,
            "unit" => $__unit__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "metric"));

            // line 187
            yield "    <div class=\"metric\">
        <span class=\"value\">
            ";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["value"] ?? null), "html", null, true);
            yield "
            ";
            // line 190
            if (($context["unit"] ?? null)) {
                // line 191
                yield "                <span class=\"unit text-small\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["unit"] ?? null), "html", null, true);
                yield "</span>
            ";
            }
            // line 193
            yield "        </span>
        <span class=\"label\">";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["label"] ?? null), "html", null, true);
            // line 196
            yield "</span>
    </div>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@TwigComponent/Collector/twig_component.html.twig";
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
        return array (  672 => 196,  670 => 195,  667 => 193,  661 => 191,  659 => 190,  655 => 189,  651 => 187,  634 => 186,  625 => 303,  606 => 298,  599 => 294,  594 => 292,  589 => 290,  584 => 288,  580 => 287,  572 => 282,  564 => 277,  560 => 275,  558 => 274,  554 => 272,  552 => 271,  548 => 270,  546 => 269,  542 => 267,  536 => 265,  532 => 263,  530 => 262,  524 => 260,  518 => 257,  514 => 256,  510 => 255,  504 => 253,  486 => 252,  484 => 251,  481 => 250,  474 => 249,  464 => 245,  455 => 241,  453 => 240,  449 => 238,  446 => 237,  440 => 235,  436 => 233,  434 => 232,  430 => 231,  427 => 230,  421 => 228,  417 => 226,  415 => 225,  410 => 223,  407 => 222,  403 => 221,  381 => 201,  374 => 200,  362 => 181,  355 => 177,  347 => 172,  340 => 168,  336 => 167,  329 => 163,  325 => 161,  319 => 157,  317 => 156,  314 => 155,  307 => 154,  295 => 149,  290 => 148,  283 => 147,  271 => 142,  268 => 141,  264 => 140,  255 => 137,  251 => 136,  248 => 135,  243 => 134,  241 => 133,  238 => 132,  230 => 128,  224 => 125,  219 => 124,  217 => 123,  214 => 122,  211 => 121,  204 => 120,  82 => 6,  75 => 5,  67 => 0,  60 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@TwigComponent/Collector/twig_component.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\vendor\\symfony\\ux-twig-component\\templates\\Collector\\twig_component.html.twig");
    }
}
