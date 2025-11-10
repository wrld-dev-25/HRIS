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

/* plugins-video-player.html.twig */
class __TwigTemplate_74140eea3bb57bc18b18f1c31d291ab4 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "plugins-video-player.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Video Player";
        return; yield '';
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <link rel=\"stylesheet\" href=\"assets/libs/plyr/plyr.css\">
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Plugins", "title" => "Video Player"]);
        yield "

                <div>
                    <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-gray-800 text-15 dark:text-white\">Preview Video Player</h6>
                            
                                <div class=\"plyr__video-embed\" id=\"player\">
                                    <iframe src=\"https://www.youtube.com/embed/qYgogv4R8zg?si=_YxUDmc2fDgHyPae\" allowfullscreen allowtransparency allow=\"autoplay\"></iframe>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end grid-->
                </div>
         
";
        return; yield '';
    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield "<script src=\"assets/libs/plyr/plyr.min.js\"></script>
<script src=\"assets/js/pages/plugins-video-player.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 33
        yield "    
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "plugins-video-player.html.twig";
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
        return array (  110 => 33,  106 => 31,  100 => 27,  96 => 26,  74 => 8,  71 => 7,  67 => 6,  58 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plugins-video-player.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\plugins-video-player.html.twig");
    }
}
