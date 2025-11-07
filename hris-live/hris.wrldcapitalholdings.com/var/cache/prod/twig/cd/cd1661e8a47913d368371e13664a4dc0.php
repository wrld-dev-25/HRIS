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

/* pages-offline.html.twig */
class __TwigTemplate_fedbed6cb51f8b642d094cbf89492a49 extends Template
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
        $this->parent = $this->loadTemplate("partials/without-nav.html.twig", "pages-offline.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Offline";
        return; yield '';
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "

<body class=\"flex items-center justify-center min-h-screen py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark font-public\">

    <div class=\"mb-0 border-none shadow-none lg:w-[500px] card bg-white/70 dark:bg-zink-500/70\">
        <div class=\"!px-10 !py-12 card-body\">
            <a href=\"index\">
                <img src=\"assets/images/logo-light.png\" alt=\"\" class=\"hidden h-6 mx-auto dark:block\">
                <img src=\"assets/images/logo-dark.png\" alt=\"\" class=\"block h-6 mx-auto dark:hidden\">
            </a>
            
            <div class=\"mt-10\">
                <img src=\"assets/images/auth/offline.png\" alt=\"\" class=\"mx-auto h-72\">
            </div>
            <div class=\"mt-8 text-center\">
                <h4 class=\"mb-2 text-purple-500\">We're Temporarily Offline</h4>
                <p class=\"mb-6 text-slate-500 dark:text-zink-200\">We can't display these images as you're currently not connected to the internet. Once you're back online, please refresh the page or click the button below.</p>
                <button onclick=\"window.location.href=window.location.href\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"refresh-ccw\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Refresh</span></button>
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
        return "pages-offline.html.twig";
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
        return array (  56 => 4,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages-offline.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/pages-offline.html.twig");
    }
}
