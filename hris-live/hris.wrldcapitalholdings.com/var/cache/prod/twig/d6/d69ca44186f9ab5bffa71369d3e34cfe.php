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

/* forms-multi-select.html.twig */
class __TwigTemplate_520ed6981e5171dfd378be86fdfc4429 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "forms-multi-select.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Multi Select";
        return; yield '';
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "    <?php includeFileWithVariables('partials/title-meta', array('title' => 'Multi Select')); ?>
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Forms", "title" => "Multi Select"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                    <div class=\"border-slate-200 card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Basic Example</h6>
                            <form>
                                <select required multiple=\"multiple\" name=\"favorite_fruits\" id=\"multiselect-basic\">
                                    <option selected>Apple</option>
                                    <option>Banana</option>
                                    <option selected>Blueberry</option>
                                    <option selected>Cherry</option>
                                    <option>Coconut</option>
                                    <option>Grapefruit</option>
                                    <option>Kiwi</option>
                                    <option>Lemon</option>
                                    <option>Lime</option>
                                    <option>Mango</option>
                                    <option>Orange</option>
                                    <option>Papaya</option>
                                </select>
                            </form>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Headers Multi Select</h6>
                            <form>
                                <select required multiple=\"multiple\" name=\"favorite_cars\" id=\"multiselect-header\">
                                    <option>Chevrolet</option>
                                    <option>Fiat</option>
                                    <option>Ford</option>
                                    <option>Honda</option>
                                    <option selected>Hyundai</option>
                                    <option>Kia</option>
                                    <option>Mahindra</option>
                                    <option>Maruti</option>
                                    <option>Mitsubishi</option>
                                    <option>MG</option>
                                    <option>Nissan</option>
                                    <option>Renault</option>
                                    <option selected>Skoda</option>
                                    <option selected>Tata</option>
                                    <option selected>Toyato</option>
                                    <option>Volkswagen</option>
                                </select>
                            </form>
                        </div>
                    </div><!--end card-->

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-4 text-15\">Option Groups</h6>
                            <form>
                                <select multiple=\"multiple\" name=\"favorite_cars\" id=\"multiselect-optiongroup\">
                                    <optgroup label=\"Skoda\">
                                        <option>Kushaq</option>
                                        <option>Superb</option>
                                        <option>Octavia</option>
                                        <option>Rapid</option>
                                    </optgroup>
                                    <optgroup label=\"Volkswagen\">
                                        <option>Polo</option>
                                        <option>Taigun</option>
                                        <option>Vento</option>
                                    </optgroup>
                                </select>
                            </form>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

";
        return; yield '';
    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        yield "
<script src=\"assets/libs/multi.js/multi.min.js\"></script>

<script src=\"assets/js/pages/form-multi-select.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 91
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "forms-multi-select.html.twig";
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
        return array (  168 => 91,  164 => 89,  156 => 83,  152 => 82,  74 => 8,  71 => 7,  67 => 6,  58 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forms-multi-select.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\forms-multi-select.html.twig");
    }
}
