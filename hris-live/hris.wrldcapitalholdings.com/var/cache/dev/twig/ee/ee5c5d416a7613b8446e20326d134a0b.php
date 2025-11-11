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

/* plugins-scroll-hint.html.twig */
class __TwigTemplate_5cea76204b4e57d472f3083c23383ddc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plugins-scroll-hint.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "plugins-scroll-hint.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Scroll Hint";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    <link rel=\"stylesheet\" href=\"https://unpkg.com/scroll-hint@latest/css/scroll-hint.css\">
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        yield "
            ";
        // line 8
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Plugins", "title" => "Scroll Hint"]);
        yield "


                <div>
                    <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-2\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Simple Scroll Hint</h6>
                                <div class=\"overflow-x-auto js-scrollable\">
                                    <table class=\"w-full flex-nowrap\">
                                        <thead class=\"ltr:text-left rtl:text-right\">
                                            <tr>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">ID</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Name</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Position</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Office</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Age</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Start date</th>
                                                <th class=\"px-3.5 py-2.5 whitespace-nowrap font-semibold border-b border-slate-200 dark:border-zink-500\">Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">1</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Tiger Nixon</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">System Architect</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Edinburgh</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">61</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2011-04-25</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$320,800</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Garrett Winters</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Accountant</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Tokyo</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">63</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2011-07-25</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$170,750</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">3</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Ashton Cox</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Junior Technical Author</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">San Francisco</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">66</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2009-01-12</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$86,000</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">4</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Cedric Kelly</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Senior Javascript Developer</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Edinburgh</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">22</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2012-03-29</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$433,060</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">5</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Airi Satou</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Accountant</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Tokyo</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">33</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2008-11-28</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$162,700</td>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">6</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Brielle Williamson</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">Integration Specialist</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">New York</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">61</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">2012-12-02</td>
                                                <td class=\"px-3.5 py-2.5 whitespace-nowrap border-y border-slate-200 dark:border-zink-500\">\$372,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end grid-->
                </div>
            

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        yield "<script src=\"assets/libs/scroll-hint/js/scroll-hint.min.js\"></script>
<script src=\"assets/js/pages/plugins-scroll-hint.init.js\"></script>

<!-- App js -->
<script src=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 102
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
        return "plugins-scroll-hint.html.twig";
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
        return array (  207 => 102,  203 => 100,  197 => 96,  190 => 95,  96 => 8,  93 => 7,  86 => 6,  77 => 4,  70 => 3,  56 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "plugins-scroll-hint.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\plugins-scroll-hint.html.twig");
    }
}
