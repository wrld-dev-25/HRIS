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

/* plugins-swiper-slider.html.twig */
class __TwigTemplate_dd79f075f190aa64c0e178bf4f021c63 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "plugins-swiper-slider.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Swiper Slider";
        return; yield '';
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <!-- Swiper Slider css-->
    <link href=\"assets/libs/swiper/swiper-bundle.min.css\" rel=\"stylesheet\" type=\"text/css\">
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Plugins", "title" => "Swiper Slider"]);
        yield "

                <div class=\"px-4 py-3 mb-5 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-400/20\">
                    The <a href=\"https://swiperjs.com/\" class=\"font-semibold underline\" target=\"_blank\">Swiper.js documentation</a> provides even more options and customization possibilities for creating engaging carousels. Remember to adjust image URLs and content according to your project.
                </div>

                <div class=\"grid grid-cols-1 gap-x-5 lg:grid-cols-2 2xl:grid-cols-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Default</h6>

                            <!-- Swiper -->
                            <div class=\"swiper mySwiper\">
                                <div class=\"swiper-wrapper\">
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-2.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-3.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-4.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-5.jpg\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Navigation</h6>
                    
                            <!-- Swiper -->
                            <div class=\"swiper navigation-swiper\">
                                <div class=\"swiper-wrapper\">
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-6.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-7.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-8.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-9.jpg\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"swiper-button-next after:hidden text-custom-500\"><i data-lucide=\"chevron-right\"></i></div>
                                <div class=\"swiper-button-prev after:hidden text-custom-500\"><i data-lucide=\"chevron-left\"></i></div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Pagination</h6>
                    
                            <!-- Swiper -->
                            <div class=\"swiper pagination-slider\">
                                <div class=\"swiper-wrapper\">
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-6.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-7.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-8.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-9.jpg\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"swiper-pagination\"></div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Pagination Dynamic</h6>
                    
                            <!-- Swiper -->
                            <div class=\"swiper pagination-dynamic\">
                                <div class=\"swiper-wrapper\">
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-10.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-11.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-12.jpg\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"swiper-pagination\"></div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Vertical</h6>
                    
                            <!-- Swiper -->
                            <div class=\"swiper vertical-slider\" style=\"height: 327px;\">
                                <div class=\"swiper-wrapper\">
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-1.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-2.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-3.jpg\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"swiper-pagination\"></div>
                            </div>
                        </div>
                    </div><!--end card-->

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Pagination progress</h6>
                    
                            <!-- Swiper -->
                            <div class=\"swiper pagination-progress\">
                                <div class=\"swiper-wrapper\">
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-4.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-5.jpg\" alt=\"\">
                                    </div>
                                    <div class=\"swiper-slide\">
                                        <img src=\"assets/images/small/img-6.jpg\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"swiper-button-next after:hidden text-custom-500\"><i data-lucide=\"chevron-right\"></i></div>
                                <div class=\"swiper-button-prev after:hidden text-custom-500\"><i data-lucide=\"chevron-left\"></i></div>
                                <div class=\"swiper-pagination\"></div>
                            </div>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

";
        return; yield '';
    }

    // line 158
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 159
        yield "
<script src=\"assets/libs/swiper/swiper-bundle.min.js\"></script>

<script src=\"assets/js/pages/swiper.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 167
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "plugins-swiper-slider.html.twig";
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
        return array (  244 => 167,  240 => 165,  232 => 159,  228 => 158,  75 => 9,  72 => 8,  68 => 7,  58 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plugins-swiper-slider.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\plugins-swiper-slider.html.twig");
    }
}
