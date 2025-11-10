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

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_5c5cff19a8fb7124afccf87dc8eb4066 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        // line 1
        yield "<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
        yield "\" class=\"sf-minitoolbar\" data-no-turbolink data-turbo=\"false\">
    <button type=\"button\" title=\"Show Symfony toolbar\" id=\"sfToolbarMiniToggler-";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
        yield "\" accesskey=\"D\" aria-expanded=\"false\" aria-controls=\"sfToolbarMainContent-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 4
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/symfony.svg");
        yield "
    </button>
</div>
<div id=\"sfToolbarClearer-";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
        yield "\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
        yield "\" class=\"sf-toolbarreset notranslate clear-fix\" data-no-turbolink data-turbo=\"false\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["templates"] ?? null));
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
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 11
            yield "        ";
            if (            $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 11)->unwrap()->hasBlock("toolbar", $context)) {
                // line 12
                yield "            ";
                $__internal_compile_0 = $context;
                $__internal_compile_1 = ["collector" => ((                // line 13
($context["profile"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "getcollector", [$context["name"]], "method", false, false, false, 13)) : (null)), "profiler_url" =>                 // line 14
($context["profiler_url"] ?? null), "token" => ((                // line 15
$context["token"]) ?? (((($context["profile"] ?? null)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "token", [], "any", false, false, false, 15)) : (null)))), "name" =>                 // line 16
$context["name"], "profiler_markup_version" =>                 // line 17
($context["profiler_markup_version"] ?? null), "csp_script_nonce" =>                 // line 18
($context["csp_script_nonce"] ?? null), "csp_style_nonce" =>                 // line 19
($context["csp_style_nonce"] ?? null)];
                if (!is_iterable($__internal_compile_1)) {
                    throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 13, $this->getSourceContext());
                }
                $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
                $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                // line 21
                yield "                ";
                yield from                 $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 21)->unwrap()->yieldBlock("toolbar", $context);
                yield "
            ";
                $context = $__internal_compile_0;
                // line 23
                yield "        ";
            }
            // line 24
            yield "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "    ";
        if (($context["full_stack"] ?? null)) {
            // line 26
            yield "        <div class=\"sf-full-stack sf-toolbar-block sf-toolbar-block-full-stack sf-toolbar-status-red sf-toolbar-block-right\">
            <div class=\"sf-toolbar-icon\">
                <span class=\"sf-toolbar-value\">Using symfony/symfony is NOT supported</span>
            </div>
            <div class=\"sf-toolbar-info sf-toolbar-status-red\">
                <p>This project is using Symfony via the \"symfony/symfony\" package.</p>
                <p>This is NOT supported anymore since Symfony 4.0.</p>
                <p>Even if it seems to work well, it has some important limitations with no workarounds.</p>
                <p>Using this package also makes your project slower.</p>

                <strong>Please, stop using this package and replace it with individual packages instead.</strong>
            </div>
            <div></div>
        </div>
    ";
        }
        // line 41
        yield "
    <button class=\"hide-button\" type=\"button\" id=\"sfToolbarHideButton-";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
        yield "\" title=\"Close Toolbar\" accesskey=\"D\" aria-expanded=\"true\" aria-controls=\"sfToolbarMainContent-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["token"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 43
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/close.svg");
        yield "
    </button>
</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
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
        return array (  157 => 43,  151 => 42,  148 => 41,  131 => 26,  128 => 25,  114 => 24,  111 => 23,  105 => 21,  98 => 19,  97 => 18,  96 => 17,  95 => 16,  94 => 15,  93 => 14,  92 => 13,  89 => 12,  86 => 11,  69 => 10,  65 => 9,  60 => 7,  54 => 4,  48 => 3,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@WebProfiler/Profiler/toolbar.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\toolbar.html.twig");
    }
}
