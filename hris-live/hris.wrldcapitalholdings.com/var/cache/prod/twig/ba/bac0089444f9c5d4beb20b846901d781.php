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

/* forms-editor-inline.html.twig */
class __TwigTemplate_91994868adb5f86602055d4870ca37cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "forms-editor-inline.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Inline Editor";
        return; yield '';
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "
            ";
        // line 6
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Forms", "title" => "Inline Editor"]);
        yield "

                <div class=\"p-3 mb-4 text-sm text-red-500 border border-transparent rounded-md bg-red-50\">
                    Notes: <a href=\"https://ckeditor.com/docs/ckeditor5/latest/examples/builds/inline-editor\" class=\"font-medium underline\">https://ckeditor.com/docs/ckeditor5/latest/examples/builds/inline-editor</a> more details
                </div>

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Classic Ckeditor</h6>
                        <div class=\"ckeditor-inline\">
                            <p>Like all the great things on earth traveling teaches us by example. Here are some of the most precious lessons I’ve learned over the years of traveling.</p>
                            <p><br data-cke-filler=\"true\"></p>

                            <h4>Appreciation of diversity</h4>
                            <p>Getting used to an entirely different culture can be challenging. While it’s also nice to learn about cultures online or from books, nothing comes close to experiencing cultural diversity in person. You learn to appreciate each and every single one of the differences while you become more culturally fluid.</p>
                            <p><br data-cke-filler=\"true\"></p>
                            <p>Life doesn't allow us to execute every single plan perfectly. This especially seems to be the case when you travel. You plan it down to every minute with a big checklist. But when it comes to executing it, something always comes up and you’re left with your improvising skills. You learn to adapt as you go. Here’s how my travel checklist looks now:</p>
                            <p><br data-cke-filler=\"true\"></p>
                            <ul>
                                <li>buy the ticket</li>
                                <li><i>start your adventure</i></li>
                            </ul>
                        </div>
                    </div>
                </div><!--end card-->


";
        return; yield '';
    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        yield "
<script src=\"assets/libs/@ckeditor/ckeditor5-build-inline/build/ckeditor.js\"></script>

<script src=\"assets/js/pages/form-editor-inline.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 44
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "forms-editor-inline.html.twig";
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
        return array (  113 => 44,  109 => 42,  101 => 36,  97 => 35,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forms-editor-inline.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\forms-editor-inline.html.twig");
    }
}
