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

/* @WebProfiler/Collector/command.html.twig */
class __TwigTemplate_e9264c7e88486d219ab329a69db52c56 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/command.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/command.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 4
        yield "    <span class=\"label\">
        <span class=\"icon\">";
        // line 5
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/command.svg");
        yield "</span>
        <strong>Console Command</strong>
    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 10
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 11
        yield "    <h2>
        ";
        // line 12
        $context["command"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "command", [], "any", false, false, false, 12);
        // line 13
        yield "        <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->getFileLink(CoreExtension::getAttribute($this->env, $this->source, ($context["command"] ?? null), "file", [], "any", false, false, false, 13), CoreExtension::getAttribute($this->env, $this->source, ($context["command"] ?? null), "line", [], "any", false, false, false, 13)), "html", null, true);
        yield "\">
            ";
        // line 14
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["command"] ?? null), "executor", [], "any", true, true, false, 14)) {
            // line 15
            yield "                ";
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->abbrMethod($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["command"] ?? null), "executor", [], "any", false, false, false, 15), "html", null, true));
            yield "
            ";
        } else {
            // line 17
            yield "                ";
            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Profiler\CodeExtension']->abbrClass($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["command"] ?? null), "class", [], "any", false, false, false, 17), "html", null, true));
            yield "
            ";
        }
        // line 19
        yield "        </a>
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Command</h3>

            <div class=\"tab-content\">
                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 29), "html", null, true);
        yield "</span>
                        <span class=\"label\">Duration</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "maxMemoryUsage", [], "any", false, false, false, 34), "html", null, true);
        yield "</span>
                        <span class=\"label\">Peak Memory Usage</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "verbosityLevel", [], "any", false, false, false, 39), "html", null, true);
        yield "</span>
                        <span class=\"label\">Verbosity Level</span>
                    </div>
                </div>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 46
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "signalable", [], "any", false, false, false, 46))) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                        <span class=\"label\">Signalable</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 51
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "interactive", [], "any", false, false, false, 51)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                        <span class=\"label\">Interactive</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 56
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "validateInput", [], "any", false, false, false, 56)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                        <span class=\"label\">Validate Input</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 61
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "enabled", [], "any", false, false, false, 61)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                        <span class=\"label\">Enabled</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 66
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "visible", [], "any", false, false, false, 66)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                        <span class=\"label\">Visible</span>
                    </div>
                </div>

                <h3>Arguments</h3>

                ";
        // line 73
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "arguments", [], "any", false, false, false, 73))) {
            // line 74
            yield "                    <div class=\"empty\">
                        <p>No arguments were set</p>
                    </div>
                ";
        } else {
            // line 78
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "arguments", [], "any", false, false, false, 78), "labels" => ["Argument", "Value"], "maxDepth" => 2], false);
            yield "
                ";
        }
        // line 80
        yield "
                <h3>Options</h3>

                ";
        // line 83
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "options", [], "any", false, false, false, 83))) {
            // line 84
            yield "                    <div class=\"empty\">
                        <p>No options were set</p>
                    </div>
                ";
        } else {
            // line 88
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "options", [], "any", false, false, false, 88), "labels" => ["Option", "Value"], "maxDepth" => 2], false);
            yield "
                ";
        }
        // line 90
        yield "
                ";
        // line 91
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "interactive", [], "any", false, false, false, 91)) {
            // line 92
            yield "                    <h3>Interactive Inputs</h3>

                    <p class=\"help\">
                        The values which have been set interactively.
                    </p>

                    ";
            // line 98
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "interactiveInputs", [], "any", false, false, false, 98))) {
                // line 99
                yield "                        <div class=\"empty\">
                            <p>No inputs were set</p>
                        </div>
                    ";
            } else {
                // line 103
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "interactiveInputs", [], "any", false, false, false, 103), "labels" => ["Input", "Value"], "maxDepth" => 2], false);
                yield "
                    ";
            }
            // line 105
            yield "                ";
        }
        // line 106
        yield "
                <h3>Application inputs</h3>

                ";
        // line 109
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "applicationInputs", [], "any", false, false, false, 109))) {
            // line 110
            yield "                    <div class=\"empty\">
                        <p>No application inputs are set</p>
                    </div>
                ";
        } else {
            // line 114
            yield "                    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "applicationInputs", [], "any", false, false, false, 114), "labels" => ["Input", "Value"], "maxDepth" => 2], false);
            yield "
                ";
        }
        // line 116
        yield "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Input / Output</h3>

            <div class=\"tab-content\">
                <table>
                    <tr>
                        <td class=\"font-normal\">Input</td>
                        <td class=\"font-normal\">";
        // line 126
        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "input", [], "any", false, false, false, 126));
        yield "</td>
                    </tr>
                    <tr>
                        <td class=\"font-normal\">Output</td>
                        <td class=\"font-normal\">";
        // line 130
        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "output", [], "any", false, false, false, 130));
        yield "</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Helper Set</h3>

            <div class=\"tab-content\">
                ";
        // line 140
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "helperSet", [], "any", false, false, false, 140))) {
            // line 141
            yield "                    <div class=\"empty\">
                        <p>No helpers</p>
                    </div>
                ";
        } else {
            // line 145
            yield "                    <table class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("class", $context)) ? (Twig\Extension\CoreExtension::default(($context["class"] ?? null), "")) : ("")), "html", null, true);
            yield "\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Helpers</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "helperSet", [], "any", false, false, false, 152)));
            foreach ($context['_seq'] as $context["_key"] => $context["helper"]) {
                // line 153
                yield "                            <tr>
                                <td>";
                // line 154
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["helper"]);
                yield "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['helper'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "                        </tbody>
                    </table>
                ";
        }
        // line 160
        yield "            </div>
        </div>

        <div class=\"tab\">
            ";
        // line 164
        $context["request_collector"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, false, false, 164), "request", [], "any", false, false, false, 164);
        // line 165
        yield "            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                ";
        // line 169
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "dotenvvars", [], "any", false, false, false, 169)], false);
        yield "

                <h4>Defined as regular env variables</h4>
                ";
        // line 172
        $context["requestserver"] = [];
        // line 173
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "requestserver", [], "any", false, false, false, 173), function ($_____, $__key__) use ($context, $macros) { $context["_"] = $_____; $context["key"] = $__key__; return !CoreExtension::inFilter($context["key"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["request_collector"] ?? null), "dotenvvars", [], "any", false, false, false, 173), "keys", [], "any", false, false, false, 173)); }));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 174
            yield "                    ";
            $context["requestserver"] = Twig\Extension\CoreExtension::merge(($context["requestserver"] ?? null), [$context["key"] => $context["value"]]);
            // line 175
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => ($context["requestserver"] ?? null)], false);
        yield "
            </div>
        </div>

        ";
        // line 180
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "signalable", [], "any", false, false, false, 180))) {
            // line 181
            yield "            <div class=\"tab\">
                <h3 class=\"tab-title\">Signals</h3>

                <div class=\"tab-content\">
                    <h3>Subscribed signals</h3>
                    ";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "signalable", [], "any", false, false, false, 186), ", "), "html", null, true);
            yield "

                    <h3>Handled signals</h3>
                    ";
            // line 189
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "handledSignals", [], "any", false, false, false, 189))) {
                // line 190
                yield "                        <div class=\"empty\">
                            <p>No signals handled</p>
                        </div>
                    ";
            } else {
                // line 194
                yield "                        <table>
                            <thead>
                                <tr>
                                    <th>Signal</th>
                                    <th>Times handled</th>
                                    <th>Total execution time</th>
                                    <th>Memory peak</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "handledSignals", [], "any", false, false, false, 204));
                foreach ($context['_seq'] as $context["signal"] => $context["data"]) {
                    // line 205
                    yield "                                    <tr>
                                        <td>";
                    // line 206
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["signal"], "html", null, true);
                    yield "</td>
                                        <td>";
                    // line 207
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "handled", [], "any", false, false, false, 207), "html", null, true);
                    yield "</td>
                                        <td>";
                    // line 208
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "duration", [], "any", false, false, false, 208), "html", null, true);
                    yield " ms</td>
                                        <td>";
                    // line 209
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "memory", [], "any", false, false, false, 209), "html", null, true);
                    yield " MiB</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['signal'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                yield "                            </tbody>
                        </table>
                    ";
            }
            // line 215
            yield "                </div>
            </div>
        ";
        }
        // line 218
        yield "
        ";
        // line 219
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 219)) {
            // line 220
            yield "            <div class=\"tab\">
                <h3 class=\"tab-title\">Parent Command</h3>

                <div class=\"tab-content\">
                    <h3>
                        <a href=\"";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 225), "token", [], "any", false, false, false, 225)]), "html", null, true);
            yield "\">Return to parent command</a>
                        <small>(token = ";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 226), "token", [], "any", false, false, false, 226), "html", null, true);
            yield ")</small>
                    </h3>

                    ";
            // line 229
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 229), "url", [], "any", false, false, false, 229), "html", null, true);
            yield "
                </div>
            </div>
        ";
        }
        // line 233
        yield "
        ";
        // line 234
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 234))) {
            // line 235
            yield "            <div class=\"tab\">
                <h3 class=\"tab-title\">Sub Commands <span class=\"badge\">";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 236)), "html", null, true);
            yield "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 239
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 239));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 240
                yield "                        <h3>
                            ";
                // line 241
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "url", [], "any", false, false, false, 241), "html", null, true);
                yield "
                            <small>(token = <a href=\"";
                // line 242
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 242)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 242), "html", null, true);
                yield "</a>)</small>
                        </h3>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 245
            yield "                </div>
            </div>
        ";
        }
        // line 248
        yield "    </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/command.html.twig";
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
        return array (  528 => 248,  523 => 245,  512 => 242,  508 => 241,  505 => 240,  501 => 239,  495 => 236,  492 => 235,  490 => 234,  487 => 233,  480 => 229,  474 => 226,  470 => 225,  463 => 220,  461 => 219,  458 => 218,  453 => 215,  448 => 212,  439 => 209,  435 => 208,  431 => 207,  427 => 206,  424 => 205,  420 => 204,  408 => 194,  402 => 190,  400 => 189,  394 => 186,  387 => 181,  385 => 180,  377 => 176,  371 => 175,  368 => 174,  363 => 173,  361 => 172,  355 => 169,  349 => 165,  347 => 164,  341 => 160,  336 => 157,  327 => 154,  324 => 153,  320 => 152,  309 => 145,  303 => 141,  301 => 140,  288 => 130,  281 => 126,  269 => 116,  263 => 114,  257 => 110,  255 => 109,  250 => 106,  247 => 105,  241 => 103,  235 => 99,  233 => 98,  225 => 92,  223 => 91,  220 => 90,  214 => 88,  208 => 84,  206 => 83,  201 => 80,  195 => 78,  189 => 74,  187 => 73,  177 => 66,  169 => 61,  161 => 56,  153 => 51,  145 => 46,  135 => 39,  127 => 34,  119 => 29,  107 => 19,  101 => 17,  95 => 15,  93 => 14,  88 => 13,  86 => 12,  83 => 11,  76 => 10,  64 => 5,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/command.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\command.html.twig");
    }
}
