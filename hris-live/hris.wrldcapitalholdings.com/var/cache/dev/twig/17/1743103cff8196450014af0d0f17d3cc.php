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

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_f3718d8fe0f7a88fade9c03e711d7400 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/form.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        yield "    ";
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 4), "nb_errors", [], "any", false, false, false, 4) > 0) || Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 4), "forms", [], "any", false, false, false, 4)))) {
            // line 5
            yield "        ";
            $context["status_color"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 5), "nb_errors", [], "any", false, false, false, 5)) ? ("red") : (""));
            // line 6
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 7
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/form.svg");
                yield "
            <span class=\"sf-toolbar-value\">
                ";
                // line 9
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 9), "nb_errors", [], "any", false, false, false, 9)) ?: (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 9), "forms", [], "any", false, false, false, 9)))), "html", null, true);
                yield "
            </span>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            yield "
        ";
            // line 13
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 14
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 16), "forms", [], "any", false, false, false, 16)), "html", null, true);
                yield "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 20
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 20), "nb_errors", [], "any", false, false, false, 20) > 0)) ? ("red") : (""));
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 20), "nb_errors", [], "any", false, false, false, 20), "html", null, true);
                yield "</span>
            </div>
        ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            yield "
        ";
            // line 24
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            yield "
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 28
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        yield "    <span class=\"label label-status-";
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 29), "nb_errors", [], "any", false, false, false, 29)) ? ("error") : (""));
        yield " ";
        yield ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 29), "forms", [], "any", false, false, false, 29))) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">";
        // line 30
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/form.svg");
        yield "</span>
        <strong>Forms</strong>
        ";
        // line 32
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 32), "nb_errors", [], "any", false, false, false, 32) > 0)) {
            // line 33
            yield "            <span class=\"count\">
                <span>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 34), "nb_errors", [], "any", false, false, false, 34), "html", null, true);
            yield "</span>
            </span>
        ";
        }
        // line 37
        yield "    </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 40
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 41
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "

    <style>
        .form-type-class {
            font-size: var(--font-size-body);
            display: flex;
            margin: 0 0 15px;
        }
        .form-type-class-label {
            margin-right: 4px;
        }
        .form-type-class pre.sf-dump {
            font-family: var(--font-family-system) !important;
            font-size: var(--font-size-body) !important;
            margin-left: 5px;
        }
        .form-type-class .sf-dump .sf-dump-str {
            color: var(--color-link) !important;
            text-decoration: underline;
        }
        .form-type-class .sf-dump .sf-dump-str:hover {
            text-decoration: none;
        }

        #tree-menu {
            float: left;
            padding-right: 10px;
            width: 220px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            box-shadow: none !important;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid var(--table-border-color);
            margin-left: 230px;
            padding-left: 20px;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
        }
        .closed .toggle-icon, .closed.toggle-icon {
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .tree .toggle-button {
            width: 16px;
            height: 16px;
            margin-left: -18px;
            display: inline-grid;
            place-content: center;
            background: none;
            border: none;
            transition: transform 200ms;
        }
        .tree .toggle-button.closed svg {
            transform: rotate(-90deg);
        }
        .tree .toggle-button svg {
            transform: rotate(0deg);
            width: 16px;
            height: 16px;
        }
        .tree .toggle-icon.empty {
            width: 5px;
            height: 5px;
            position: absolute;
            top: 50%;
            margin-top: -2px;
            margin-left: -13px;
        }
        .tree .tree-inner {
            border-radius: 4px;
        }
        .tree ul ul .tree-inner {
            padding-left: 32px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 48px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 64px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 72px;
        }
        .tree .tree-inner:hover {
            background: var(--gray-200);
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: var(--tree-active-background);
            font-weight: bold;
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .badge-error {
            float: right;
            background: var(--background-error);
            color: #FFF;
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .has-error {
            color: var(--color-error);
        }
        .errors h3 {
            color: var(--color-error);
        }
        .errors th {
            background: var(--background-error);
            color: #FFF;
        }
        .errors .toggle-icon {
            background-color: var(--background-error);
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 197
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 198
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

    <script>
        window.addEventListener('DOMContentLoaded', () => {
            new SymfonyProfilerFormPanel();
        });

        class SymfonyProfilerFormPanel {
            #activeTreeItem;
            #activeTreePanel;
            #storage;
            #storageKey = 'sf_toggle_data';
            #togglerStates = {};

            constructor() {
                this.#storage = sessionStorage;
                this.#initTrees();
                this.#initTogglerButtons();
            }

            #initTrees() {
                const treeItems = document.querySelectorAll('.tree .tree-inner');
                treeItems.forEach((treeItem) => {
                    var targetId = treeItem.getAttribute('data-tab-target-id');
                    const target = document.getElementById(targetId);

                    if (!target) {
                        throw `Tab target \${targetId} does not exist`;
                    }

                    treeItem.addEventListener('click', (e) => {
                        this.#selectTreeItem(treeItem);

                        e.stopPropagation();
                        return false;
                    });

                    target.classList.add('hidden');
                });

                if (treeItems.length > 0) {
                    this.#selectTreeItem(treeItems[0]);
                }
            };

            #selectTreeItem(treeItem) {
                const treePanelId = treeItem.getAttribute('data-tab-target-id');
                const treePanel = document.getElementById(treePanelId);

                if (!treePanel) {
                    throw `The tree panel \${treePanelId} does not exist`;
                }

                if (this.#activeTreeItem) {
                    this.#activeTreeItem.classList.remove('active');
                }

                if (this.#activeTreePanel) {
                    this.#activeTreePanel.classList.add('hidden');
                }

                treeItem.classList.add('active');
                treePanel.classList.remove('hidden');

                this.#activeTreeItem = treeItem;
                this.#activeTreePanel = treePanel;
            }

            #initTogglerButtons() {
                this.#togglerStates = this.#getTogglerStates();
                if (!this.#isObject(this.#togglerStates)) {
                    this.#togglerStates = {};
                }

                const buttons = document.querySelectorAll('.toggle-button');
                buttons.forEach((button) => {
                    const targetId = button.getAttribute('data-toggle-target-id');
                    const target = document.getElementById(targetId);

                    if (!target) {
                        throw `Toggle target \${targetId} does not exist`;
                    }

                    // correct the initial state of the button
                    if (target.classList.contains('hidden')) {
                        button.classList.add('closed');
                    }

                    button.addEventListener('click', (e) => {
                        this.#toggleToggler(button);

                        e.stopPropagation();
                        return false;
                    });

                    if (this.#togglerStates.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === this.#togglerStates[targetId]) {
                            this.#collapseToggler(button);
                        } else {
                            this.#expandToggler(button);
                        }
                    }
                });
            };

            #isTogglerCollapsed(button) {
                return button.classList.contains('closed');
            }

            #isTogglerExpanded(button) {
                return !this.#isTogglerCollapsed(button);
            }

            #expandToggler(button) {
                const targetId = button.getAttribute('data-toggle-target-id');
                const target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (this.#isTogglerCollapsed(button)) {
                    button.classList.remove('closed');
                    target.classList.remove('hidden');

                    this.#togglerStates[targetId] = 1;
                    this.#saveTogglerStates();
                }
            }

            #collapseToggler(button) {
                const targetId = button.getAttribute('data-toggle-target-id');
                const target = document.getElementById(targetId);

                if (!target) {
                    throw `Toggle target \${targetId} does not exist`;
                }

                if (this.#isTogglerExpanded(button)) {
                    button.classList.add('closed');
                    target.classList.add('hidden');

                    this.#togglerStates[targetId] = 0;
                    this.#saveTogglerStates();
                }
            }

            #toggleToggler(button) {
                if (button.classList.contains('closed')) {
                    this.#expandToggler(button);
                } else {
                    this.#collapseToggler(button);
                }
            }

            #saveTogglerStates() {
                this.#storage.setItem(this.#storageKey, JSON.stringify(this.#togglerStates));
            }

            #getTogglerStates() {
                const data = this.#storage.getItem(this.#storageKey);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return {};
            }

            #isObject(variable) {
                return null !== variable && 'object' === typeof variable && !Array.isArray(variable);
            }
        }
    </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 378
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 379
        yield "    <h2>Forms</h2>

    ";
        // line 381
        if (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 381), "forms", [], "any", false, false, false, 381))) {
            // line 382
            yield "        <div id=\"tree-menu\" class=\"tree\">
            <ul>
            ";
            // line 384
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 384), "forms", [], "any", false, false, false, 384));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 385
                yield "                ";
                yield CoreExtension::callMacro($macros["_self"], "macro_form_tree_entry", [$context["formName"], $context["formData"], true], 385, $context, $this->getSourceContext());
                yield "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 387
            yield "            </ul>
        </div>

        <div id=\"tree-details-container\">
            ";
            // line 391
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 391), "forms", [], "any", false, false, false, 391));
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
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 392
                yield "                ";
                yield CoreExtension::callMacro($macros["_self"], "macro_form_tree_details", [$context["formName"], $context["formData"], CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, false, false, 392), "forms_by_hash", [], "any", false, false, false, 392), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 392)], 392, $context, $this->getSourceContext());
                yield "
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
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 394
            yield "        </div>
    ";
        } else {
            // line 396
            yield "        <div class=\"empty empty-panel\">
            <p>No forms were submitted.</p>
        </div>
    ";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 402
    public function macro_form_tree_entry($__name__ = null, $__data__ = null, $__is_root__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "is_root" => $__is_root__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_entry"));

            // line 403
            yield "    ";
            $context["has_error"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 403) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 403)) > 0));
            // line 404
            yield "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 405
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 405), "html", null, true);
            yield "-details\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("name", $context)) ? (Twig\Extension\CoreExtension::default(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            yield "\">
            ";
            // line 406
            if (($context["has_error"] ?? null)) {
                // line 407
                yield "                <div class=\"badge-error\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 407)), "html", null, true);
                yield "</div>
            ";
            }
            // line 409
            yield "
            ";
            // line 410
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, false, 410))) {
                // line 411
                yield "                <button class=\"toggle-button\" data-toggle-target-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 411), "html", null, true);
                yield "-children\">
                    ";
                // line 412
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/chevron-down.svg");
                yield "
                </button>
            ";
            } else {
                // line 415
                yield "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 417
            yield "
            <span ";
            // line 418
            if ((($context["has_error"] ?? null) || ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, false, 418)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", false, false, false, 418), false)) : (false)))) {
                yield "class=\"has-error\"";
            }
            yield ">
                ";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("name", $context)) ? (Twig\Extension\CoreExtension::default(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            yield "
            </span>
        </div>

        ";
            // line 423
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, false, 423))) {
                // line 424
                yield "            <ul id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 424), "html", null, true);
                yield "-children\" ";
                if (( !($context["is_root"] ?? null) &&  !((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, false, 424)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", false, false, false, 424), false)) : (false)))) {
                    yield "class=\"hidden\"";
                }
                yield ">
                ";
                // line 425
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, false, 425));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 426
                    yield "                    ";
                    yield CoreExtension::callMacro($macros["_self"], "macro_form_tree_entry", [$context["childName"], $context["childData"], false], 426, $context, $this->getSourceContext());
                    yield "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 428
                yield "            </ul>
        ";
            }
            // line 430
            yield "    </li>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 433
    public function macro_form_tree_details($__name__ = null, $__data__ = null, $__forms_by_hash__ = null, $__show__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "forms_by_hash" => $__forms_by_hash__,
            "show" => $__show__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_details"));

            // line 434
            yield "    <div class=\"tree-details";
            if ( !((array_key_exists("show", $context)) ? (Twig\Extension\CoreExtension::default(($context["show"] ?? null), false)) : (false))) {
                yield " hidden";
            }
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", true, true, false, 434)) {
                yield "id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 434), "html", null, true);
                yield "-details\"";
            }
            yield ">
        <h2>";
            // line 435
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("name", $context)) ? (Twig\Extension\CoreExtension::default(($context["name"] ?? null), "(no name)")) : ("(no name)")), "html", null, true);
            yield "</h2>
        ";
            // line 436
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "type_class", [], "any", true, true, false, 436)) {
                // line 437
                yield "            <div class=\"form-type-class\">
                <span class=\"form-type-class-label\">Form type:</span>
                ";
                // line 439
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "type_class", [], "any", false, false, false, 439));
                yield "
            </div>
        ";
            }
            // line 442
            yield "
        ";
            // line 443
            $context["form_has_errors"] =  !Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 443) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 443)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 443)) : ([])));
            // line 444
            yield "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 445
            yield ((($context["form_has_errors"] ?? null)) ? ("active") : ("disabled"));
            yield "\">
                <h3 class=\"tab-title\">Errors</h3>

                <div class=\"tab-content\">
                    ";
            // line 449
            yield CoreExtension::callMacro($macros["_self"], "macro_render_form_errors", [($context["data"] ?? null)], 449, $context, $this->getSourceContext());
            yield "
                </div>
            </div>

            <div class=\"tab ";
            // line 453
            yield (( !($context["form_has_errors"] ?? null)) ? ("active") : (""));
            yield "\">
                <h3 class=\"tab-title\">Default Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 457
            yield CoreExtension::callMacro($macros["_self"], "macro_render_form_default_data", [($context["data"] ?? null)], 457, $context, $this->getSourceContext());
            yield "
                </div>
            </div>

            <div class=\"tab ";
            // line 461
            yield ((Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", true, true, false, 461) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 461)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 461)) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Submitted Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 465
            yield CoreExtension::callMacro($macros["_self"], "macro_render_form_submitted_data", [($context["data"] ?? null)], 465, $context, $this->getSourceContext());
            yield "
                </div>
            </div>

            <div class=\"tab ";
            // line 469
            yield ((Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, false, 469) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 469)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 469)) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Passed Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 473
            yield CoreExtension::callMacro($macros["_self"], "macro_render_form_passed_options", [($context["data"] ?? null)], 473, $context, $this->getSourceContext());
            yield "
                </div>
            </div>

            <div class=\"tab ";
            // line 477
            yield ((Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, false, 477) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 477)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 477)) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Resolved Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 481
            yield CoreExtension::callMacro($macros["_self"], "macro_render_form_resolved_options", [($context["data"] ?? null)], 481, $context, $this->getSourceContext());
            yield "
                </div>
            </div>

            <div class=\"tab ";
            // line 485
            yield ((Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, false, 485) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 485)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 485)) : ([])))) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">View Vars</h3>

                <div class=\"tab-content\">
                    ";
            // line 489
            yield CoreExtension::callMacro($macros["_self"], "macro_render_form_view_variables", [($context["data"] ?? null)], 489, $context, $this->getSourceContext());
            yield "
                </div>
            </div>
        </div>
    </div>

    ";
            // line 495
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "children", [], "any", false, false, false, 495));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 496
                yield "        ";
                yield CoreExtension::callMacro($macros["_self"], "macro_form_tree_details", [$context["childName"], $context["childData"], ($context["forms_by_hash"] ?? null)], 496, $context, $this->getSourceContext());
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 500
    public function macro_render_form_errors($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_errors"));

            // line 501
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, false, 501) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 501)) > 0))) {
                // line 502
                yield "        <div class=\"errors\">
            <table id=\"";
                // line 503
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", false, false, false, 503), "html", null, true);
                yield "-errors\">
                <thead>
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 512
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, false, 512));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 513
                    yield "                    <tr>
                        <td>";
                    // line 514
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 514), "html", null, true);
                    yield "</td>
                        <td>
                            ";
                    // line 516
                    if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 516))) {
                        // line 517
                        yield "                                <em>This form.</em>
                            ";
                    } elseif ( !CoreExtension::getAttribute($this->env, $this->source,                     // line 518
($context["forms_by_hash"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 518), [], "array", true, true, false, 518)) {
                        // line 519
                        yield "                                <em>Unknown.</em>
                            ";
                    } else {
                        // line 521
                        yield "                                ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = ($context["forms_by_hash"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[CoreExtension::getAttribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, false, 521)] ?? null) : null), "name", [], "any", false, false, false, 521), "html", null, true);
                        yield "
                            ";
                    }
                    // line 523
                    yield "                        </td>
                        <td>
                            ";
                    // line 525
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, false, 525)) {
                        // line 526
                        yield "                                <span class=\"newline\">Caused by:</span>
                                ";
                        // line 527
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, false, 527));
                        foreach ($context['_seq'] as $context["_key"] => $context["stacked"]) {
                            // line 528
                            yield "                                    ";
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["stacked"]);
                            yield "
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stacked'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 530
                        yield "                            ";
                    } else {
                        // line 531
                        yield "                                <em>Unknown.</em>
                            ";
                    }
                    // line 533
                    yield "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 536
                yield "                </tbody>
            </table>
        </div>
    ";
            } else {
                // line 540
                yield "        <div class=\"empty\">
            <p>This form has no errors.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 546
    public function macro_render_form_default_data($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_default_data"));

            // line 547
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", true, true, false, 547)) {
                // line 548
                yield "        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 559
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, false, 559), "model", [], "any", true, true, false, 559)) {
                    // line 560
                    yield "                        ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, false, false, 560), "seek", ["model"], "method", false, false, false, 560));
                    yield "
                    ";
                } else {
                    // line 562
                    yield "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 564
                yield "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 568
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, false, false, 568), "seek", ["norm"], "method", false, false, false, 568));
                yield "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 573
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, false, 573), "view", [], "any", true, true, false, 573)) {
                    // line 574
                    yield "                        ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, false, false, 574), "seek", ["view"], "method", false, false, false, 574));
                    yield "
                    ";
                } else {
                    // line 576
                    yield "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 578
                yield "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 583
                yield "        <div class=\"empty\">
            <p>This form has default data defined.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 589
    public function macro_render_form_submitted_data($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_submitted_data"));

            // line 590
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 590), "norm", [], "any", true, true, false, 590)) {
                // line 591
                yield "        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 602
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 602), "view", [], "any", true, true, false, 602)) {
                    // line 603
                    yield "                        ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 603), "seek", ["view"], "method", false, false, false, 603));
                    yield "
                    ";
                } else {
                    // line 605
                    yield "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 607
                yield "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 611
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 611), "seek", ["norm"], "method", false, false, false, 611));
                yield "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 616
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, false, 616), "model", [], "any", true, true, false, 616)) {
                    // line 617
                    yield "                        ";
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, false, 617), "seek", ["model"], "method", false, false, false, 617));
                    yield "
                    ";
                } else {
                    // line 619
                    yield "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 621
                yield "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 626
                yield "        <div class=\"empty\">
            <p>This form was not submitted.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 632
    public function macro_render_form_passed_options($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_passed_options"));

            // line 633
            yield "    ";
            if ( !Twig\Extension\CoreExtension::testEmpty((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, false, 633) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 633)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 633)) : ([])))) {
                // line 634
                yield "        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Option</th>
                <th>Passed Value</th>
                <th>Resolved Value</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 643
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, false, 643));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 644
                    yield "                <tr>
                    <th>";
                    // line 645
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                    yield "</th>
                    <td>";
                    // line 646
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                    yield "</td>
                    <td>
                        ";
                    // line 649
                    yield "                        ";
                    $context["option_value"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["value"], "value", [], "any", true, true, false, 649)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, false, 649), $context["value"])) : ($context["value"]));
                    // line 650
                    yield "                        ";
                    $context["resolved_option_value"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, true, false, 650), $context["option"], [], "array", false, true, false, 650), "value", [], "any", true, true, false, 650)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, true, false, 650), $context["option"], [], "array", false, true, false, 650), "value", [], "any", false, false, false, 650), (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 650)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["option"]] ?? null) : null))) : ((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 650)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["option"]] ?? null) : null)));
                    // line 651
                    yield "                        ";
                    if ((($context["resolved_option_value"] ?? null) == ($context["option_value"] ?? null))) {
                        // line 652
                        yield "                            <em class=\"font-normal text-muted\">same as passed value</em>
                        ";
                    } else {
                        // line 654
                        yield "                            ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 654), "seek", [$context["option"]], "method", false, false, false, 654));
                        yield "
                        ";
                    }
                    // line 656
                    yield "                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 659
                yield "            </tbody>
        </table>
    ";
            } else {
                // line 662
                yield "        <div class=\"empty\">
            <p>No options were passed when constructing this form.</p>
        </div>
    ";
            }
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 668
    public function macro_render_form_resolved_options($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_resolved_options"));

            // line 669
            yield "    <table>
        <thead>
        <tr>
            <th style=\"width: 180px\">Option</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 677
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, false, 677) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 677)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, false, 677)) : ([])));
            foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                // line 678
                yield "            <tr>
                <th scope=\"row\">";
                // line 679
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["option"], "html", null, true);
                yield "</th>
                <td>";
                // line 680
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 683
            yield "        </tbody>
    </table>
";
            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 687
    public function macro_render_form_view_variables($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_view_variables"));

            // line 688
            yield "    <table>
        <thead>
        <tr>
            <th style=\"width: 180px\">Variable</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 696
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((((CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, false, 696) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 696)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, false, 696)) : ([])));
            foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                // line 697
                yield "            <tr>
                <th scope=\"row\">";
                // line 698
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["variable"], "html", null, true);
                yield "</th>
                <td>";
                // line 699
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $context["value"]);
                yield "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 702
            yield "        </tbody>
    </table>
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
        return "@WebProfiler/Collector/form.html.twig";
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
        return array (  1376 => 702,  1367 => 699,  1363 => 698,  1360 => 697,  1356 => 696,  1346 => 688,  1331 => 687,  1320 => 683,  1311 => 680,  1307 => 679,  1304 => 678,  1300 => 677,  1290 => 669,  1275 => 668,  1262 => 662,  1257 => 659,  1249 => 656,  1243 => 654,  1239 => 652,  1236 => 651,  1233 => 650,  1230 => 649,  1225 => 646,  1221 => 645,  1218 => 644,  1214 => 643,  1203 => 634,  1200 => 633,  1185 => 632,  1172 => 626,  1165 => 621,  1161 => 619,  1155 => 617,  1153 => 616,  1145 => 611,  1139 => 607,  1135 => 605,  1129 => 603,  1127 => 602,  1114 => 591,  1111 => 590,  1096 => 589,  1083 => 583,  1076 => 578,  1072 => 576,  1066 => 574,  1064 => 573,  1056 => 568,  1050 => 564,  1046 => 562,  1040 => 560,  1038 => 559,  1025 => 548,  1022 => 547,  1007 => 546,  994 => 540,  988 => 536,  980 => 533,  976 => 531,  973 => 530,  964 => 528,  960 => 527,  957 => 526,  955 => 525,  951 => 523,  945 => 521,  941 => 519,  939 => 518,  936 => 517,  934 => 516,  929 => 514,  926 => 513,  922 => 512,  910 => 503,  907 => 502,  904 => 501,  889 => 500,  873 => 496,  869 => 495,  860 => 489,  853 => 485,  846 => 481,  839 => 477,  832 => 473,  825 => 469,  818 => 465,  811 => 461,  804 => 457,  797 => 453,  790 => 449,  783 => 445,  780 => 444,  778 => 443,  775 => 442,  769 => 439,  765 => 437,  763 => 436,  759 => 435,  746 => 434,  728 => 433,  718 => 430,  714 => 428,  705 => 426,  701 => 425,  692 => 424,  690 => 423,  683 => 419,  677 => 418,  674 => 417,  670 => 415,  664 => 412,  659 => 411,  657 => 410,  654 => 409,  648 => 407,  646 => 406,  640 => 405,  637 => 404,  634 => 403,  617 => 402,  605 => 396,  601 => 394,  584 => 392,  567 => 391,  561 => 387,  552 => 385,  548 => 384,  544 => 382,  542 => 381,  538 => 379,  531 => 378,  343 => 198,  336 => 197,  172 => 41,  165 => 40,  156 => 37,  150 => 34,  147 => 33,  145 => 32,  140 => 30,  133 => 29,  126 => 28,  115 => 24,  112 => 23,  103 => 20,  96 => 16,  92 => 14,  90 => 13,  87 => 12,  80 => 9,  74 => 7,  71 => 6,  68 => 5,  65 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Collector/form.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\form.html.twig");
    }
}
