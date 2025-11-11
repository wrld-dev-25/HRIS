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

/* forms-colorpicker.html.twig */
class __TwigTemplate_86e4099daa5e7ea64cc9fcd7c565c5b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms-colorpicker.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "forms-colorpicker.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Color Picker";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 5
        yield "
            ";
        // line 6
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Forms", "title" => "Color Picker"]);
        yield "


                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Monolith Demo</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">monolith-colorpicker</code> class to set monolith colorpicker.</p>
                            
                            <div class=\"monolith-colorpicker\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Classic Demo</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">classic-colorpicker</code> class to set classic colorpicker.</p>
                            
                            <div class=\"classic-colorpicker\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Nano Demo</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">nano-colorpicker</code> class to set nano colorpicker.</p>
                    
                            <div class=\"nano-colorpicker\"></div>
                        </div>
                    </div><!--end card-->

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Option Demo</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">colorpicker-demo</code> class to set demo option colorpicker.</p>
                    
                            <div class=\"colorpicker-demo\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Switches</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">colorpicker-switch</code> class to set switch colorpicker.</p>
                    
                            <div class=\"colorpicker-switch\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Picker with Opacity & Hue</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">colorpicker-opacity-hue</code> class to set colorpicker with opacity & hue.</p>
                    
                            <div class=\"colorpicker-opacity-hue\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Picker with Input</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">colorpicker-input</code> class to set colorpicker with input.</p>
                    
                            <div class=\"colorpicker-input\"></div>
                        </div>
                    </div><!--end card-->
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h6 class=\"mb-1 text-gray-800 text-15 dark:text-white\">Color Format</h6>
                            <p class=\"mb-4\">Use <code class=\"text-xs text-pink-500 select-all\">colorpicker-format</code> class to set colorpicker with format option.</p>
                    
                            <div class=\"colorpicker-format\"></div>
                        </div>
                    </div><!--end card-->
                </div><!--end grid-->

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 79
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        yield "
<!-- Modern colorpicker bundle -->
<script src=\"assets/libs/@simonwep/pickr/pickr.min.js\"></script>

<!-- colorpickr init js -->

<script src=\"assets/js/pages/form-colorpicker.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 91
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "forms-colorpicker.html.twig";
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
        return array (  181 => 91,  177 => 89,  166 => 80,  159 => 79,  79 => 6,  76 => 5,  69 => 4,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "forms-colorpicker.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\forms-colorpicker.html.twig");
    }
}
