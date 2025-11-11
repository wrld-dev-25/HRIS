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

/* @WebProfiler/Collector/mailer.html.twig */
class __TwigTemplate_43e7776dc5c305bc3e21c00fbcd3e1a9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/mailer.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/mailer.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "

    <style>
        :root {
            --mailer-email-table-wrapper-background: var(--gray-100);
            --mailer-email-table-active-row-background: #dbeafe;
            --mailer-email-table-active-row-color: var(--color-text);
        }
        .theme-dark {
            --mailer-email-table-wrapper-background: var(--gray-900);
            --mailer-email-table-active-row-background: var(--gray-300);
            --mailer-email-table-active-row-color: var(--gray-800);
        }

        .mailer-email-summary-table-wrapper {
            background: var(--mailer-email-table-wrapper-background);
            border-bottom: 4px double var(--table-border-color);
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            margin: 0 -9px 10px -9px;
            padding-bottom: 10px;
            transform: translateY(-9px);
            max-height: 265px;
            overflow-y: auto;
        }
        .mailer-email-summary-table,
        .mailer-email-summary-table tr,
        .mailer-email-summary-table td {
            border: 0;
            border-radius: inherit;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            box-shadow: none;
        }
        .mailer-email-summary-table th {
            color: var(--color-muted);
            font-size: 13px;
            padding: 4px 10px;
        }
        .mailer-email-summary-table tr td,
        .mailer-email-summary-table tr:last-of-type td {
            border: solid var(--table-border-color);
            border-width: 1px 0;
        }
        .mailer-email-summary-table-row {
            margin: 5px 0;
        }
        .mailer-email-summary-table-row:hover {
            cursor: pointer;
        }
        .mailer-email-summary-table-row.active {
            background: var(--mailer-email-table-active-row-background);
            color: var(--mailer-email-table-active-row-color);
        }
        .mailer-email-summary-table-row td {
            font-family: var(--font-family-system);
            font-size: inherit;
        }
        .mailer-email-details {
            display: none;
        }
        .mailer-email-details.active {
            display: block;
        }
        .mailer-transport-information {
            border-bottom: 1px solid var(--form-input-border-color);
            padding-bottom: 5px;
            font-size: var(--font-size-body);
            margin: 5px 0 10px 5px;
        }
        .mailer-transport-information .badge {
            font-size: inherit;
            font-weight: inherit;
        }
        .mailer-message-subject {
            font-size: 21px;
            font-weight: bold;
            margin: 5px;
        }
        .mailer-message-headers {
            margin-bottom: 10px;
        }
        .mailer-message-headers p {
            font-size: var(--font-size-body);
            margin: 2px 5px;
        }
        .mailer-message-header-secondary {
            color: var(--color-muted);
        }
        .mailer-message-attachments-title {
            align-items: center;
            display: flex;
            font-size: var(--font-size-body);
            font-weight: 600;
            margin-bottom: 10px;
        }
        .mailer-message-attachments-title svg {
            color: var(--color-muted);
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-title span {
            font-weight: normal;
            margin-left: 4px;
        }
        .mailer-message-attachments-list {
            list-style: none;
            margin: 0 0 5px 20px;
            padding: 0;
        }
        .mailer-message-attachments-list li {
            align-items: center;
            display: flex;
        }
        .mailer-message-attachments-list li svg {
            margin-right: 5px;
            height: 18px;
            width: 18px;
        }
        .mailer-message-attachments-list li a {
            margin-left: 5px;
        }
        .mailer-email-body {
            margin: 0;
            padding: 6px 8px;
        }
        .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23e5e5e5' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
            border-radius: 6px;
            color: var(--color-muted);
            margin: 1em 0 0;
            padding: .5em 1em;
        }
        .theme-dark .mailer-empty-email-body {
            background-image: url(\"data:image/svg+xml,%3csvg width='100%25' height='100%25' xmlns='http://www.w3.org/2000/svg'%3e%3crect width='100%25' height='100%25' fill='none' stroke='%23737373' stroke-width='4' stroke-dasharray='6%2c 14' stroke-dashoffset='0' stroke-linecap='square'/%3e%3c/svg%3e\");
        }
        .mailer-empty-email-body p {
            font-size: var(--font-size-body);
            margin: 0;
            padding: 0.5em 0;
        }

        .mailer-message-download-raw {
            align-items: center;
            display: flex;
            padding: 5px 0 0 5px;
        }
        .mailer-message-download-raw svg {
            height: 18px;
            width: 18px;
            margin-right: 3px;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 161
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 162
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            new SymfonyProfilerMailerPanel();
        });

        class SymfonyProfilerMailerPanel {
            constructor() {
                this.#initializeEmailsTable();
            }

            #initializeEmailsTable() {
                const emailRows = document.querySelectorAll('.mailer-email-summary-table-row');

                emailRows.forEach((emailRow) => {
                    emailRow.addEventListener('click', () => {
                        emailRows.forEach((row) => row.classList.remove('active'));
                        emailRow.classList.add('active');

                        document.querySelectorAll('.mailer-email-details').forEach((emailDetails) => emailDetails.style.display = 'none');
                        document.querySelector(emailRow.getAttribute('data-target')).style.display = 'block';
                    });
                });
            }
        }
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 191
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 192
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 192);
        // line 193
        yield "
    ";
        // line 194
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 194))) {
            // line 195
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 196
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/mailer.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 197)), "html", null, true);
                yield "</span>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 199
            yield "
        ";
            // line 200
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 201
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Queued messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 203), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 203); })), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Sent messages</b>
                <span class=\"sf-toolbar-status\">";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 207), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 207); })), "html", null, true);
                yield "</span>
            </div>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 210
            yield "
        ";
            // line 211
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 215
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 216
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 216);
        // line 217
        yield "
    <span class=\"label ";
        // line 218
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 218))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 219
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/mailer.svg");
        yield "</span>

        <strong>Emails</strong>
        ";
        // line 222
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 222)) > 0)) {
            // line 223
            yield "            <span class=\"count\">
                <span>";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 224)), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 227
        yield "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 230
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 231
        yield "    ";
        $context["events"] = CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 231);
        // line 232
        yield "    <h2>Emails</h2>

    ";
        // line 234
        if ( !Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "messages", [], "any", false, false, false, 234))) {
            // line 235
            yield "        <div class=\"empty empty-panel\">
            <p>No emails were sent.</p>
        </div>
    ";
        } else {
            // line 239
            yield "        <div class=\"metrics\">
            <div class=\"metric-group\">
                <div class=\"metric\">
                    <span class=\"value\">";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 242), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 242); })), "html", null, true);
            yield "</span>
                    <span class=\"label\">Queued</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "events", [], "any", false, false, false, 247), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return  !CoreExtension::getAttribute($this->env, $this->source, ($context["e"] ?? null), "isQueued", [], "method", false, false, false, 247); })), "html", null, true);
            yield "</span>
                    <span class=\"label\">Sent</span>
                </div>
            </div>
        </div>
    ";
        }
        // line 253
        yield "
    ";
        // line 254
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 254)) > 1)) {
            // line 255
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 255));
            foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
                // line 256
                yield "            <h2><code>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["transport"], "html", null, true);
                yield "</code> transport</h2>
            ";
                // line 257
                yield CoreExtension::callMacro($macros["_self"], "macro_render_transport_details", [($context["collector"] ?? null), $context["transport"]], 257, $context, $this->getSourceContext());
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 259
            yield "    ";
        } elseif ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 259))) {
            // line 260
            yield "        ";
            yield CoreExtension::callMacro($macros["_self"], "macro_render_transport_details", [($context["collector"] ?? null), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "transports", [], "any", false, false, false, 260)), true], 260, $context, $this->getSourceContext());
            yield "
    ";
        }
        // line 262
        yield "
    ";
        // line 317
        yield "
    ";
        // line 501
        yield "
    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 263
    public function macro_render_transport_details($__collector__ = null, $__transport__ = null, $__show_transport_name__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collector" => $__collector__,
            "transport" => $__transport__,
            "show_transport_name" => $__show_transport_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_transport_details"));

            // line 264
            yield "        <div class=\"card\">
            ";
            // line 265
            $context["num_emails"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 265), "events", [($context["transport"] ?? null)], "method", false, false, false, 265));
            // line 266
            yield "            ";
            if ((($context["num_emails"] ?? null) > 1)) {
                // line 267
                yield "                <div class=\"mailer-email-summary-table-wrapper\">
                    <table class=\"mailer-email-summary-table\">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject</th>
                                <th>To</th>
                                <th class=\"visually-hidden\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
                // line 278
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 278), "events", [($context["transport"] ?? null)], "method", false, false, false, 278));
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
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 279
                    yield "                                <tr class=\"mailer-email-summary-table-row ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 279)) ? ("active") : (""));
                    yield "\" data-target=\"#email-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 279), "html", null, true);
                    yield "\">
                                    <td>";
                    // line 280
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 280), "html", null, true);
                    yield "</td>
                                    <td>
                                        ";
                    // line 282
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 282), "subject", [], "any", true, true, false, 282)) {
                        // line 283
                        yield "                                            ";
                        (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 283), "getSubject", [], "method", true, true, false, 283) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 283), "getSubject", [], "method", false, false, false, 283)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 283), "getSubject", [], "method", false, false, false, 283), "html", null, true)) : (yield "(No subject)"));
                        yield "
                                        ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 284
$context["event"], "message", [], "any", false, false, false, 284), "headers", [], "any", false, false, false, 284), "has", ["subject"], "method", false, false, false, 284)) {
                        // line 285
                        yield "                                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 285), "headers", [], "any", false, true, false, 285), "get", ["subject"], "method", false, true, false, 285), "bodyAsString", [], "method", true, true, false, 285)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 285), "headers", [], "any", false, true, false, 285), "get", ["subject"], "method", false, true, false, 285), "bodyAsString", [], "method", false, false, false, 285), "(No subject)")) : ("(No subject)")), "html", null, true);
                        yield "
                                        ";
                    } else {
                        // line 287
                        yield "                                            (No subject)
                                        ";
                    }
                    // line 289
                    yield "                                    </td>
                                    <td>
                                        ";
                    // line 291
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 291), "to", [], "any", true, true, false, 291)) {
                        // line 292
                        yield "                                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 292), "getTo", [], "method", false, false, false, 292), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return CoreExtension::getAttribute($this->env, $this->source, ($context["addr"] ?? null), "toString", [], "method", false, false, false, 292); }), ", "), "(empty)"), "html", null, true);
                        yield "
                                        ";
                    } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 293
$context["event"], "message", [], "any", false, false, false, 293), "headers", [], "any", false, false, false, 293), "has", ["to"], "method", false, false, false, 293)) {
                        // line 294
                        yield "                                            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 294), "headers", [], "any", false, true, false, 294), "get", ["to"], "method", false, true, false, 294), "bodyAsString", [], "method", true, true, false, 294)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, true, false, 294), "headers", [], "any", false, true, false, 294), "get", ["to"], "method", false, true, false, 294), "bodyAsString", [], "method", false, false, false, 294), "(empty)")) : ("(empty)")), "html", null, true);
                        yield "
                                        ";
                    } else {
                        // line 296
                        yield "                                            (empty)
                                        ";
                    }
                    // line 298
                    yield "                                    </td>
                                    <td class=\"visually-hidden\"><button class=\"mailer-email-summary-table-row-button\" data-target=\"#email-";
                    // line 299
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 299), "html", null, true);
                    yield "\">View email details</button></td>
                                </tr>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 302
                yield "                        </tbody>
                    </table>
                </div>

                ";
                // line 306
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 306), "events", [($context["transport"] ?? null)], "method", false, false, false, 306));
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
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 307
                    yield "                    <div class=\"mailer-email-details ";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 307)) ? ("active") : (""));
                    yield "\" id=\"email-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 307), "html", null, true);
                    yield "\">
                        ";
                    // line 308
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_email_details", [($context["collector"] ?? null), ($context["transport"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 308), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "isQueued", [], "any", false, false, false, 308), ($context["show_transport_name"] ?? null)], 308, $context, $this->getSourceContext());
                    yield "
                    </div>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 311
                yield "            ";
            } else {
                // line 312
                yield "                ";
                $context["event"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 312), "events", [($context["transport"] ?? null)], "method", false, false, false, 312));
                // line 313
                yield "                ";
                yield CoreExtension::callMacro($macros["_self"], "macro_render_email_details", [($context["collector"] ?? null), ($context["transport"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "message", [], "any", false, false, false, 313), CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "isQueued", [], "any", false, false, false, 313), ($context["show_transport_name"] ?? null)], 313, $context, $this->getSourceContext());
                yield "
            ";
            }
            // line 315
            yield "        </div>
    ";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 318
    public function macro_render_email_details($__collector__ = null, $__transport__ = null, $__message__ = null, $__message_is_queued__ = null, $__show_transport_name__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collector" => $__collector__,
            "transport" => $__transport__,
            "message" => $__message__,
            "message_is_queued" => $__message_is_queued__,
            "show_transport_name" => $__show_transport_name__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_email_details"));

            // line 319
            yield "        ";
            if (($context["show_transport_name"] ?? null)) {
                // line 320
                yield "            <p class=\"mailer-transport-information\">
                <strong>Status:</strong> <span class=\"badge badge-";
                // line 321
                yield ((($context["message_is_queued"] ?? null)) ? ("warning") : ("success"));
                yield "\">";
                yield ((($context["message_is_queued"] ?? null)) ? ("Queued") : ("Sent"));
                yield "</span>
                &bull;
                <strong>Transport:</strong> <code>";
                // line 323
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["transport"] ?? null), "html", null, true);
                yield "</code>
            </p>
        ";
            }
            // line 326
            yield "
        ";
            // line 327
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", true, true, false, 327)) {
                // line 328
                yield "            ";
                // line 329
                yield "            <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 329)], "method", false, false, false, 329), "html", null, true);
                yield "\" download=\"email.eml\">
                ";
                // line 330
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/download.svg");
                yield "
                Download as EML file
            </a>

            <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 334
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 334), "html", null, true);
                yield "</pre>
        ";
            } else {
                // line 336
                yield "            <div class=\"sf-tabs\">
                <div class=\"tab\">
                    <h3 class=\"tab-title\">Email contents</h3>
                    <div class=\"tab-content\">
                        <div class=\"card-block\">
                            <p class=\"mailer-message-subject\">
                                ";
                // line 342
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "subject", [], "any", true, true, false, 342)) {
                    // line 343
                    yield "                                    ";
                    (((CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", true, true, false, 343) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 343)))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getSubject", [], "method", false, false, false, 343), "html", null, true)) : (yield "(No subject)"));
                    yield "
                                ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 344
($context["message"] ?? null), "headers", [], "any", false, false, false, 344), "has", ["subject"], "method", false, false, false, 344)) {
                    // line 345
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 345), "get", ["subject"], "method", false, true, false, 345), "bodyAsString", [], "method", true, true, false, 345)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 345), "get", ["subject"], "method", false, true, false, 345), "bodyAsString", [], "method", false, false, false, 345), "(No subject)")) : ("(No subject)")), "html", null, true);
                    yield "
                                ";
                } else {
                    // line 347
                    yield "                                    (No subject)
                                ";
                }
                // line 349
                yield "                            </p>
                            <div class=\"mailer-message-headers\">
                                <p>
                                    <strong>From:</strong>
                                    ";
                // line 353
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "from", [], "any", true, true, false, 353)) {
                    // line 354
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getFrom", [], "method", false, false, false, 354), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return CoreExtension::getAttribute($this->env, $this->source, ($context["addr"] ?? null), "toString", [], "method", false, false, false, 354); }), ", "), "(empty)"), "html", null, true);
                    yield "
                                    ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 355
($context["message"] ?? null), "headers", [], "any", false, false, false, 355), "has", ["from"], "method", false, false, false, 355)) {
                    // line 356
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 356), "get", ["from"], "method", false, true, false, 356), "bodyAsString", [], "method", true, true, false, 356)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 356), "get", ["from"], "method", false, true, false, 356), "bodyAsString", [], "method", false, false, false, 356), "(empty)")) : ("(empty)")), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 358
                    yield "                                        (empty)
                                    ";
                }
                // line 360
                yield "                                </p>
                                <p>
                                    <strong>To:</strong>
                                    ";
                // line 363
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "to", [], "any", true, true, false, 363)) {
                    // line 364
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "getTo", [], "method", false, false, false, 364), function ($__addr__) use ($context, $macros) { $context["addr"] = $__addr__; return CoreExtension::getAttribute($this->env, $this->source, ($context["addr"] ?? null), "toString", [], "method", false, false, false, 364); }), ", "), "(empty)"), "html", null, true);
                    yield "
                                    ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 365
($context["message"] ?? null), "headers", [], "any", false, false, false, 365), "has", ["to"], "method", false, false, false, 365)) {
                    // line 366
                    yield "                                        ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 366), "get", ["to"], "method", false, true, false, 366), "bodyAsString", [], "method", true, true, false, 366)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, true, false, 366), "get", ["to"], "method", false, true, false, 366), "bodyAsString", [], "method", false, false, false, 366), "(empty)")) : ("(empty)")), "html", null, true);
                    yield "
                                    ";
                } else {
                    // line 368
                    yield "                                        (empty)
                                    ";
                }
                // line 370
                yield "                                </p>
                                ";
                // line 371
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "headers", [], "any", false, false, false, 371), "all", [], "any", false, false, false, 371), function ($__header__) use ($context, $macros) { $context["header"] = $__header__; return !CoreExtension::inFilter(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", true, true, false, 371) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 371)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["header"], "name", [], "any", false, false, false, 371)) : (""))), ["subject", "from", "to"]); }));
                foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                    // line 372
                    yield "                                    <p class=\"mailer-message-header-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "toString", [], "any", false, false, false, 372), "html", null, true);
                    yield "</p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 374
                yield "                            </div>
                        </div>

                        ";
                // line 377
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", true, true, false, 377) && CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 377))) {
                    // line 378
                    yield "                            <div class=\"card-block\">
                                ";
                    // line 379
                    $context["num_of_attachments"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 379));
                    // line 380
                    yield "                                ";
                    $context["total_attachments_size_in_bytes"] = Twig\Extension\CoreExtension::reduce($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 380), function ($__total_size__, $__attachment__) use ($context, $macros) { $context["total_size"] = $__total_size__; $context["attachment"] = $__attachment__; return (($context["total_size"] ?? null) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["attachment"] ?? null), "body", [], "any", false, false, false, 380))); }, 0);
                    // line 381
                    yield "                                <p class=\"mailer-message-attachments-title\">
                                    ";
                    // line 382
                    yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/attachment.svg");
                    yield "
                                    Attachments <span>(";
                    // line 383
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["num_of_attachments"] ?? null), "html", null, true);
                    yield " file";
                    yield (((($context["num_of_attachments"] ?? null) > 1)) ? ("s") : (""));
                    yield " / ";
                    yield CoreExtension::callMacro($macros["_self"], "macro_render_file_size_humanized", [($context["total_attachments_size_in_bytes"] ?? null)], 383, $context, $this->getSourceContext());
                    yield ")</span>
                                </p>

                                <ul class=\"mailer-message-attachments-list\">
                                    ";
                    // line 387
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "attachments", [], "any", false, false, false, 387));
                    foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                        // line 388
                        yield "                                        <li>
                                            ";
                        // line 389
                        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/file.svg");
                        yield "

                                            ";
                        // line 391
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 391)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 391))) : (""))) {
                            // line 392
                            yield "                                                ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 392), "html", null, true);
                            yield "
                                            ";
                        } else {
                            // line 394
                            yield "                                                <em>(no filename)</em>
                                            ";
                        }
                        // line 396
                        yield "
                                            (";
                        // line 397
                        yield CoreExtension::callMacro($macros["_self"], "macro_render_file_size_humanized", [Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "body", [], "any", false, false, false, 397))], 397, $context, $this->getSourceContext());
                        yield ")

                                            <a href=\"data:";
                        // line 399
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", true, true, false, 399)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "contentType", [], "any", false, false, false, 399), "application/octet-stream")) : ("application/octet-stream")), "html", null, true);
                        yield ";base64,";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "body", [], "any", false, false, false, 399)], "method", false, false, false, 399), "html", null, true);
                        yield "\" download=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", true, true, false, 399)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["attachment"], "filename", [], "any", false, false, false, 399), "attachment")) : ("attachment")), "html", null, true);
                        yield "\">Download</a>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 402
                    yield "                                </ul>
                            </div>
                        ";
                }
                // line 405
                yield "
                        <div class=\"card-block\">
                            <div class=\"sf-tabs sf-tabs-sm\">
                            ";
                // line 408
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "any", true, true, false, 408)) {
                    // line 409
                    yield "                                ";
                    $context["textBody"] = CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "textBody", [], "any", false, false, false, 409);
                    // line 410
                    yield "                                ";
                    $context["htmlBody"] = CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlBody", [], "any", false, false, false, 410);
                    // line 411
                    yield "                                <div class=\"tab ";
                    yield (( !($context["textBody"] ?? null)) ? ("disabled") : (""));
                    yield " ";
                    yield ((($context["textBody"] ?? null)) ? ("active") : (""));
                    yield "\">
                                    <h3 class=\"tab-title\">Text content</h3>
                                    <div class=\"tab-content\">
                                        ";
                    // line 414
                    if (($context["textBody"] ?? null)) {
                        // line 415
                        yield "                                            <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                        // line 416
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "textCharset", [], "method", false, false, false, 416)) {
                            // line 417
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding(($context["textBody"] ?? null), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "textCharset", [], "method", false, false, false, 417)), "html", null, true);
                        } else {
                            // line 419
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["textBody"] ?? null), "html", null, true);
                        }
                        // line 421
                        yield "</pre>
                                        ";
                    } else {
                        // line 423
                        yield "                                            <div class=\"mailer-empty-email-body\">
                                                <p>The text body is empty.</p>
                                            </div>
                                        ";
                    }
                    // line 427
                    yield "                                    </div>
                                </div>

                                ";
                    // line 430
                    if (($context["htmlBody"] ?? null)) {
                        // line 431
                        yield "                                    <div class=\"tab\">
                                        <h3 class=\"tab-title\">HTML preview</h3>
                                        <div class=\"tab-content\">
                                            <pre class=\"prewrap\" style=\"max-height: 600px\"><iframe src=\"data:text/html;charset=utf-8;base64,";
                        // line 434
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [($context["htmlBody"] ?? null)], "method", false, false, false, 434), "html", null, true);
                        yield "\" style=\"height: 80vh;width: 100%;\"></iframe>
                                            </pre>
                                        </div>
                                    </div>
                                ";
                    }
                    // line 439
                    yield "
                                <div class=\"tab ";
                    // line 440
                    yield (( !($context["htmlBody"] ?? null)) ? ("disabled") : (""));
                    yield " ";
                    yield ((( !($context["textBody"] ?? null) && ($context["htmlBody"] ?? null))) ? ("active") : (""));
                    yield "\">
                                    <h3 class=\"tab-title\">HTML content</h3>
                                    <div class=\"tab-content\">
                                        ";
                    // line 443
                    if (($context["htmlBody"] ?? null)) {
                        // line 444
                        yield "                                            <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                        // line 445
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlCharset", [], "method", false, false, false, 445)) {
                            // line 446
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::convertEncoding(($context["htmlBody"] ?? null), "UTF-8", CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "htmlCharset", [], "method", false, false, false, 446)), "html", null, true);
                        } else {
                            // line 448
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["htmlBody"] ?? null), "html", null, true);
                        }
                        // line 450
                        yield "</pre>
                                        ";
                    } else {
                        // line 452
                        yield "                                            <div class=\"mailer-empty-email-body\">
                                                <p>The HTML body is empty.</p>
                                            </div>
                                        ";
                    }
                    // line 456
                    yield "                                    </div>
                                </div>
                            ";
                } else {
                    // line 459
                    yield "                                ";
                    $context["body"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "body", [], "any", false, false, false, 459)) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "body", [], "any", false, false, false, 459), "toString", [], "method", false, false, false, 459)) : (null));
                    // line 460
                    yield "                                <div class=\"tab ";
                    yield (( !($context["body"] ?? null)) ? ("disabled") : (""));
                    yield " ";
                    yield ((($context["body"] ?? null)) ? ("active") : (""));
                    yield "\">
                                    <h3 class=\"tab-title\">Content</h3>
                                    <div class=\"tab-content\">
                                        ";
                    // line 463
                    if (($context["body"] ?? null)) {
                        // line 464
                        yield "                                            <pre class=\"mailer-email-body prewrap\" style=\"max-height: 600px\">";
                        // line 465
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["body"] ?? null), "html", null, true);
                        yield "
                                            </pre>
                                        ";
                    } else {
                        // line 468
                        yield "                                            <div class=\"mailer-empty-email-body\">
                                                <p>The body is empty.</p>
                                            </div>
                                        ";
                    }
                    // line 472
                    yield "                                    </div>
                                </div>
                            ";
                }
                // line 475
                yield "                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">MIME parts</h3>
                    <div class=\"tab-content\">
                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 483
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "body", [], "method", false, false, false, 483), "asDebugString", [], "method", false, false, false, 483), "html", null, true);
                yield "</pre>
                    </div>
                </div>

                <div class=\"tab\">
                    <h3 class=\"tab-title\">Raw Message</h3>
                    <div class=\"tab-content\">
                        <a class=\"mailer-message-download-raw\" href=\"data:application/octet-stream;base64,";
                // line 490
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "base64Encode", [CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 490)], "method", false, false, false, 490), "html", null, true);
                yield "\" download=\"email.eml\">
                            ";
                // line 491
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/download.svg");
                yield "
                            Download as EML file
                        </a>

                        <pre class=\"prewrap\" style=\"max-height: 600px; margin-left: 5px\">";
                // line 495
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["message"] ?? null), "toString", [], "method", false, false, false, 495), "html", null, true);
                yield "</pre>
                    </div>
                </div>
            </div>
        ";
            }
            // line 500
            yield "    ";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 502
    public function macro_render_file_size_humanized($__bytes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_file_size_humanized"));

            // line 503
            if ((($context["bytes"] ?? null) < 1000)) {
                // line 504
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($context["bytes"] ?? null) . " bytes"), "html", null, true);
            } elseif ((            // line 505
($context["bytes"] ?? null) < (1000 ** 2))) {
                // line 506
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($context["bytes"] ?? null) / 1000), 2) . " kB"), "html", null, true);
            } else {
                // line 508
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((($context["bytes"] ?? null) / (1000 ** 2)), 2) . " MB"), "html", null, true);
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
        return "@WebProfiler/Collector/mailer.html.twig";
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
        return array (  1116 => 508,  1113 => 506,  1111 => 505,  1109 => 504,  1107 => 503,  1092 => 502,  1083 => 500,  1075 => 495,  1068 => 491,  1064 => 490,  1054 => 483,  1044 => 475,  1039 => 472,  1033 => 468,  1027 => 465,  1025 => 464,  1023 => 463,  1014 => 460,  1011 => 459,  1006 => 456,  1000 => 452,  996 => 450,  993 => 448,  990 => 446,  988 => 445,  986 => 444,  984 => 443,  976 => 440,  973 => 439,  965 => 434,  960 => 431,  958 => 430,  953 => 427,  947 => 423,  943 => 421,  940 => 419,  937 => 417,  935 => 416,  933 => 415,  931 => 414,  922 => 411,  919 => 410,  916 => 409,  914 => 408,  909 => 405,  904 => 402,  891 => 399,  886 => 397,  883 => 396,  879 => 394,  873 => 392,  871 => 391,  866 => 389,  863 => 388,  859 => 387,  848 => 383,  844 => 382,  841 => 381,  838 => 380,  836 => 379,  833 => 378,  831 => 377,  826 => 374,  817 => 372,  813 => 371,  810 => 370,  806 => 368,  800 => 366,  798 => 365,  793 => 364,  791 => 363,  786 => 360,  782 => 358,  776 => 356,  774 => 355,  769 => 354,  767 => 353,  761 => 349,  757 => 347,  751 => 345,  749 => 344,  744 => 343,  742 => 342,  734 => 336,  729 => 334,  722 => 330,  717 => 329,  715 => 328,  713 => 327,  710 => 326,  704 => 323,  697 => 321,  694 => 320,  691 => 319,  672 => 318,  662 => 315,  656 => 313,  653 => 312,  650 => 311,  633 => 308,  626 => 307,  609 => 306,  603 => 302,  586 => 299,  583 => 298,  579 => 296,  573 => 294,  571 => 293,  566 => 292,  564 => 291,  560 => 289,  556 => 287,  550 => 285,  548 => 284,  543 => 283,  541 => 282,  536 => 280,  529 => 279,  512 => 278,  499 => 267,  496 => 266,  494 => 265,  491 => 264,  474 => 263,  465 => 501,  462 => 317,  459 => 262,  453 => 260,  450 => 259,  442 => 257,  437 => 256,  432 => 255,  430 => 254,  427 => 253,  418 => 247,  410 => 242,  405 => 239,  399 => 235,  397 => 234,  393 => 232,  390 => 231,  383 => 230,  374 => 227,  368 => 224,  365 => 223,  363 => 222,  357 => 219,  353 => 218,  350 => 217,  347 => 216,  340 => 215,  329 => 211,  326 => 210,  319 => 207,  312 => 203,  308 => 201,  306 => 200,  303 => 199,  297 => 197,  292 => 196,  289 => 195,  287 => 194,  284 => 193,  281 => 192,  274 => 191,  237 => 162,  230 => 161,  65 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/mailer.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\mailer.html.twig");
    }
}
