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

/* ui-video.html.twig */
class __TwigTemplate_39c0c267fb472d90d3dbe3d067a21bd4 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "ui-video.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Video";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "UI Elements", "title" => "Video"]);
        yield "

            
                <div class=\"grid grid-cols-1 gap-x-4 xl:grid-cols-2\">
                    <div>
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Basic</h6>
                                <iframe class=\"w-full rounded-md aspect-video\" src=\"https://www.youtube.com/embed/1y_kfWUCFDQ\"></iframe>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Square</h6>
                                <iframe class=\"w-full rounded-md aspect-square\" src=\"https://www.youtube.com/embed/1y_kfWUCFDQ\"></iframe>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Video - 1/1</h6>
                                <iframe class=\"w-full rounded-md aspect-1/1\" src=\"https://www.youtube.com/embed/1y_kfWUCFDQ\"></iframe>
                            </div>
                        </div><!--end card-->
                    </div>
                    <div>
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Auto</h6>
                                <iframe class=\"w-full rounded-md aspect-auto\" src=\"https://www.youtube.com/embed/1y_kfWUCFDQ\"></iframe>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Video - 4/3</h6>
                                <iframe class=\"w-full rounded-md aspect-4/3\" src=\"https://www.youtube.com/embed/1y_kfWUCFDQ\"></iframe>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Video - 16/9</h6>
                                <iframe class=\"w-full rounded-md aspect-16/9\" src=\"https://www.youtube.com/embed/1y_kfWUCFDQ\"></iframe>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Video - 16/9</h6>
                                <iframe class=\"w-full rounded-md aspect-21/9\" src=\"https://www.youtube.com/embed/1y_kfWUCFDQ\"></iframe>
                            </div>
                        </div><!--end card-->
                    </div>
                </div>

";
        return; yield '';
    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        yield "
<!-- App js -->
<script src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 65
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ui-video.html.twig";
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
        return array (  134 => 65,  130 => 63,  126 => 61,  122 => 60,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ui-video.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\ui-video.html.twig");
    }
}
