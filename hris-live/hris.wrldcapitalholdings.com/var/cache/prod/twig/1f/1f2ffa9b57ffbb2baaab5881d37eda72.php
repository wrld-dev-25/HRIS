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

/* plugins-sweetalert.html.twig */
class __TwigTemplate_33d07a940822d297925464123f6a884a extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "plugins-sweetalert.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Sweetalert";
        return; yield '';
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <!-- Sweet Alert css-->
    <link href=\"assets/libs/sweetalert2/sweetalert2.min.css\" rel=\"stylesheet\" type=\"text/css\">
";
        return; yield '';
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "
            ";
        // line 9
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Plugins", "title" => "Sweetalert"]);
        yield "

                <div>
                    <div class=\"grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-3\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Basic Message</h6>
                                <button id=\"sa-basic\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Click Me</button>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Title</h6>
                                <button id=\"sa-title\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Click Me</button>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Success Message!</h6>
                                <button id=\"sa-success\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Click Me</button>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Error Message!</h6>
                                <button id=\"sa-error\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Click Me</button>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Long Content</h6>
                                <button id=\"sa-longcontent\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Click Me</button>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Warning Message</h6>
                                <button id=\"sa-warning\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Click Me</button>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Parameter</h6>
                                <button id=\"sa-params\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Click Me</button>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Custom Images</h6>
                                <button id=\"sa-image\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Click Me</button>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Auto Close Timer</h6>
                                <button id=\"sa-close\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Click Me</button>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Custom HTML Alert</h6>
                                <button id=\"custom-html-alert\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Click Me</button>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Dialog Three Buttons</h6>
                                <button id=\"sa-dialog-three-btn\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Click Me</button>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Position</h6>
                                <button id=\"sa-position\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Click Me</button>
                            </div>
                        </div><!--end card-->
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Ajax Content</h6>
                                <button id=\"ajax-alert\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Click Me</button>
                            </div>
                        </div><!--end card-->

                    </div><!--end grid-->
                </div>
            

";
        return; yield '';
    }

    // line 98
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        yield "
<!-- Sweet Alerts js -->
<script src=\"assets/libs/sweetalert2/sweetalert2.min.js\"></script>

<!--sweet alert init js-->
<script src=\"assets/js/pages/sweetalert.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 109
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "plugins-sweetalert.html.twig";
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
        return array (  186 => 109,  182 => 107,  172 => 99,  168 => 98,  75 => 9,  72 => 8,  68 => 7,  58 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plugins-sweetalert.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/plugins-sweetalert.html.twig");
    }
}
