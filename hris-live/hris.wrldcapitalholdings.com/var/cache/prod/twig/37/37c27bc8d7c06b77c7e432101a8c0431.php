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

/* auth-verify-email-cover.html.twig */
class __TwigTemplate_ad9f61e8c46198064c3192f9c36330fd extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/without-nav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("partials/without-nav.html.twig", "auth-verify-email-cover.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Verify Email";
        return; yield '';
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "
<body class=\"flex items-center justify-center min-h-screen py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark dark:text-zink-100 font-public\">

    <div class=\"mb-0 border-none lg:w-[500px] card bg-white/70 shadow-none dark:bg-zink-500/70\">
        <div class=\"!px-10 !py-12 card-body\">
            <a href=\"index\">
                <img src=\"assets/images/logo-light.png\" alt=\"\" class=\"hidden h-6 mx-auto dark:block\">
                <img src=\"assets/images/logo-dark.png\" alt=\"\" class=\"block h-6 mx-auto dark:hidden\">
            </a>

            <div class=\"mt-8 text-center\">
                <h4 class=\"mb-1 text-custom-500 dark:text-custom-500\">Verify Email</h4>
                <p class=\"mb-4 text-slate-500 dark:text-zink-200\">Did you not receive an email? Please <a href=\"index\" class=\"text-custom-500\">try again</a></p>
                <a href=\"index\" class=\"px-2 py-1.5 text-xs text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100\">Skip Now</a>
            </div>
            
            <div class=\"pt-10 text-center\">
                <img src=\"assets/images/auth-email.png\" alt=\"\" class=\"block w-2/3 mx-auto\">
            </div>
        </div>
    </div>


";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "auth-verify-email-cover.html.twig";
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
        return array (  56 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth-verify-email-cover.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\auth-verify-email-cover.html.twig");
    }
}
