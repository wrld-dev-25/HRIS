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

/* forms-clipboard.html.twig */
class __TwigTemplate_99257ab0d7e47be80f329dc4a6cf25b4 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "forms-clipboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Clipboard";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Forms", "title" => "Clipboard"]);
        yield "

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Basic Clipboard Copy</h6>
                        <div class=\"flex\">
                            <input type=\"text\" id=\"clipboard\" value=\"Welcome to Tailwick😊\" aria-describedby=\"button-addon2\" class=\"ltr:rounded-r-none rtl:rounded-l-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"\">
                            <button type=\"button\" id=\"copyButton\" data-clipboard-action=\"copy\" data-clipboard-target=\"#clipboard\" class=\"flex items-center justify-center w-[39px] h-[39px] ltr:rounded-l-none rtl:rounded-r-none p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50\">
                                <i data-lucide=\"clipboard-list\" class=\"inline-block size-4\"></i>
                            </button>
                        </div>
                    </div>
                </div><!--end card-->
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h6 class=\"mb-4 text-15\">Basic Clipboard Cut</h6>
                        <div class=\"flex\">
                            <input type=\"text\" id=\"clipboard1\" value=\"Welcome to Tailwick😊\" aria-describedby=\"button-addon\" class=\"ltr:rounded-r-none rtl:rounded-l-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"\">
                            <button type=\"button\" id=\"cutButton\" data-clipboard-action=\"cut\" data-clipboard-target=\"#clipboard1\" class=\"flex items-center justify-center w-[39px] h-[39px] ltr:rounded-l-none rtl:rounded-r-none p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50\">
                                <i data-lucide=\"scissors\" class=\"inline-block size-4\"></i>
                            </button>
                        </div>
                    </div>
                </div><!--end card-->

";
        return; yield '';
    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        yield "
<script src=\"assets/libs/clipboard/clipboard.min.js\"></script>
<script src=\"assets/js/pages/clipbord.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 41
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "forms-clipboard.html.twig";
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
        return array (  110 => 41,  106 => 39,  99 => 34,  95 => 33,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forms-clipboard.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\forms-clipboard.html.twig");
    }
}
