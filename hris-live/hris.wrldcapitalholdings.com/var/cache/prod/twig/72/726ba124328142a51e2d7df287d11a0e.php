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

/* plugins-simplebar.html.twig */
class __TwigTemplate_4f0256326f6844731b9184c8de2505df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("partials/base.html.twig", "plugins-simplebar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Simplebar";
        return; yield '';
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    
";
        return; yield '';
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "
            ";
        // line 8
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Plugins", "title" => "Simplebar"]);
        yield "

                <div>
                    <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-3\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Default Scroll</h6>
                                <div data-simplebar style=\"max-height: 220px;\" class=\"pr-2 text-slate-500 dark:text-zink-200\">
                                    <p class=\"mb-2\">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing</p>
                                    <p class=\"mb-2\">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                                    <p class=\"mb-2\">The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                                    <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                                </div>
                            </div>
                        </div><!--end card-->

                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Auto Hide False</h6>
                                <div data-simplebar data-simplebar-auto-hide=\"false\" style=\"max-height: 220px;\" class=\"pr-2 text-slate-500 dark:text-zink-200\">
                                    <p class=\"mb-2\">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing</p>
                                    <p class=\"mb-2\">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                                    <p class=\"mb-2\">The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                                    <p class=\"mb-0\">Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                                </div>
                            </div>
                        </div><!--end card-->

                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">RTL Direction</h6>
                                <div data-simplebar data-simplebar-direction=\"rtl\" style=\"max-height: 220px;\" class=\"pl-2 text-gray-400 dark:text-zink-200\">
                                    <p class=\"mb-2\">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing</p>
                                    <p class=\"mb-2\">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                                    <p class=\"mb-2\">The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                                    <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                                </div>
                            </div>
                        </div><!--end card-->

                    </div>

                    <h5 class=\"mb-4 underline\">Simplebar Track Color:</h5>

                    <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-3\">

                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Custom Track</h6>
                                <div data-simplebar data-simplebar-track=\"custom\" style=\"max-height: 220px;\" class=\"pr-2 text-slate-500 dark:text-zink-200\" >
                                    <p class=\"mb-2\">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing</p>
                                    <p class=\"mb-2\">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                                    <p class=\"mb-2\">The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                                    <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                                </div>
                            </div>
                        </div><!--end card-->

                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Green Track</h6>
                                <div data-simplebar data-simplebar-track=\"green\" style=\"max-height: 220px;\" class=\"pr-2 text-slate-500 dark:text-zink-200\">
                                    <p class=\"mb-2\">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing</p>
                                    <p class=\"mb-2\">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                                    <p class=\"mb-2\">The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                                    <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                                </div>
                            </div>
                        </div><!--end card-->

                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Orange Track</h6>
                                <div data-simplebar data-simplebar-track=\"orange\" style=\"max-height: 220px;\" class=\"pr-2 text-slate-500 dark:text-zink-200\">
                                    <p class=\"mb-2\">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing</p>
                                    <p class=\"mb-2\">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                                    <p class=\"mb-2\">The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                                    <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                                </div>
                            </div>
                        </div><!--end card-->

                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Sky Track</h6>
                                <div data-simplebar data-simplebar-track=\"sky\" style=\"max-height: 220px;\" class=\"pr-2 text-slate-500 dark:text-zink-200\">
                                    <p class=\"mb-2\">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing</p>
                                    <p class=\"mb-2\">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                                    <p class=\"mb-2\">The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                                    <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                                </div>
                            </div>
                        </div><!--end card-->

                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Yellow Track</h6>
                                <div data-simplebar data-simplebar-track=\"yellow\" style=\"max-height: 220px;\" class=\"pr-2 text-slate-500 dark:text-zink-200\">
                                    <p class=\"mb-2\">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing</p>
                                    <p class=\"mb-2\">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                                    <p class=\"mb-2\">The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                                    <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                                </div>
                            </div>
                        </div><!--end card-->

                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Red Track</h6>
                                <div data-simplebar data-simplebar-track=\"red\" style=\"max-height: 220px;\" class=\"pr-2 text-slate-500 dark:text-zink-200\">
                                    <p class=\"mb-2\">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing</p>
                                    <p class=\"mb-2\">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                                    <p class=\"mb-2\">The languages only differ in their grammar, their pronunciation and their most common words. Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                                    <p>Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                                </div>
                            </div>
                        </div><!--end card-->

                    </div><!--end grid-->
                </div>

";
        return; yield '';
    }

    // line 131
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 132
        yield "
<!-- App js -->
<script src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 136
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "plugins-simplebar.html.twig";
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
        return array (  213 => 136,  209 => 134,  205 => 132,  201 => 131,  74 => 8,  71 => 7,  67 => 6,  58 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plugins-simplebar.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/plugins-simplebar.html.twig");
    }
}
