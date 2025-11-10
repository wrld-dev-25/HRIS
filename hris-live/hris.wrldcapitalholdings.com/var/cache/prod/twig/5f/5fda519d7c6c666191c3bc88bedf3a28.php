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

/* leave_request/apps-leave-calendar.html.twig */
class __TwigTemplate_6b40605f4eca3e6a0afb8fd0849dac72 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "leave_request/apps-leave-calendar.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Calendar";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Apps", "title" => "Calendar"]);
        yield "


                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div cursor-pointerid='calendar-container'>
                                    <button type=\"hidden\" id=\"calendarBtn\" data-modal-target=\"event-modal\"></button>
                                    <div id='calendar'></div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    ";
        // line 76
        yield "                </div><!--end grid-->


<div id=\"event-modal\"  modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-500\">
            <h5 class=\"text-16\" id=\"modal-title\">Event</h5>
            <button data-modal-close=\"event-modal\" id=\"eventModal-close\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form class=\"needs-validation\" name=\"event-form\" id=\"form-event\" autocomplete=\"off\">
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <label for=\"event-title\" class=\"inline-block mb-2 text-base font-medium\">Event Name</label>
                        <input type=\"text\" id=\"event-title\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Event name\" required disabled>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"event-status\" class=\"inline-block mb-2 text-base font-medium\">Status</label>
                        <input type=\"text\" id=\"event-status\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Event Status\" required disabled>
                    </div>
                    ";
        // line 107
        yield "                </div>
                ";
        // line 113
        yield "            </form>
        </div>
    </div>
</div>
<!-- end event modal -->
";
        return; yield '';
    }

    // line 120
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        yield "
<script>
    const holidays = ";
        // line 123
        yield json_encode(($context["holidays"] ?? null));
        yield ";
    const employeeLeaves = ";
        // line 124
        yield json_encode(($context["employeeLeaves"] ?? null));
        yield ";
</script>


<!-- calendar min js -->
<script src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/fullcalendar/index.global.min.js"), "html", null, true);
        yield "\"></script>

<script src=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-calendar.init.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
<script src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "leave_request/apps-leave-calendar.html.twig";
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
        return array (  148 => 134,  142 => 131,  137 => 129,  129 => 124,  125 => 123,  121 => 121,  117 => 120,  107 => 113,  104 => 107,  82 => 76,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "leave_request/apps-leave-calendar.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\leave_request\\apps-leave-calendar.html.twig");
    }
}
