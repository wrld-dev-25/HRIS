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

/* ui-collapse.html.twig */
class __TwigTemplate_ee08d5691b520cff3a69714890317771 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "ui-collapse.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Collapse";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "UI Elements", "title" => "Collapse"]);
        yield "

                <div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Default</h6>
                            <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2\">
                                <div class=\"collapsible\">
                                    <button class=\"flex text-white collapsible-header group/item btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">
                                        Collapsible Button
                                        <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                                            <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                            <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                        </div>
                                    </button>
                                    <div class=\"hidden mt-2 mb-0 collapsible-content card\">
                                        <div class=\"card-body\">
                                            <p>For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live. You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to combine font styles that are different but complementary, like sans serif with serif, short with tall, or decorative with simple. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class=\"collapsible\">
                                    <button class=\"flex text-white collapsible-header group/item btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">
                                        Collapsible Button
                                        <div class=\"ltr:ml-2 rtl:mr-2 shrink-0\">
                                            <i data-lucide=\"chevron-down\" class=\"hidden size-4 group-[.show]/item:inline-block\"></i>
                                            <i data-lucide=\"chevron-up\" class=\"inline-block size-4 group-[.show]/item:hidden\"></i>
                                        </div>
                                    </button>
                                    <div class=\"hidden mt-2 mb-0 collapsible-content card\">
                                        <div class=\"card-body\">
                                            <p>For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live. You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to combine font styles that are different but complementary, like sans serif with serif, short with tall, or decorative with simple. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Link Collapse</h6>
                            <div class=\"collapsible\">
                                <a href=\"#!\" class=\"flex bg-white border-white collapsible-header group/item text-custom-500 btn hover:text-custom-700 focus:text-custom-700 active:text-custom-700 dark:bg-zink-700 dark:border-zink-700\">
                                    Collapsible Link
                                </a>
                                <div class=\"hidden mt-2 mb-0 collapsible-content card\">
                                    <div class=\"card-body\">
                                        <p>For that very reason, I went on a quest and spoke to many different professional graphic designers and asked them what graphic design tips they live. You've probably heard that opposites attract. The same is true for fonts. Don't be afraid to combine font styles that are different but complementary, like sans serif with serif, short with tall, or decorative with simple. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

";
        return; yield '';
    }

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        yield "
<!-- App js -->
<script src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 70
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ui-collapse.html.twig";
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
        return array (  139 => 70,  135 => 68,  131 => 66,  127 => 65,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ui-collapse.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\ui-collapse.html.twig");
    }
}
