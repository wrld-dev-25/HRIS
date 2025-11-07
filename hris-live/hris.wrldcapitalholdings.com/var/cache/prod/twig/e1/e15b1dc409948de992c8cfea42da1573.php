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

/* apps-calendar-multi-month-stack.html.twig */
class __TwigTemplate_a8a1637ecb2b63a57cfd03e08eaefc9b extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "apps-calendar-multi-month-stack.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Monthly Calendar";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Calendar", "title" => "Monthly Calendar"]);
        yield "

            <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <button type=\"hidden\" id=\"calendarBtn\" data-modal-target=\"event-modal\"></button>
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end grid-->



<div id=\"event-modal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-500\">
            <h5 class=\"text-16\" id=\"modal-title\">Add Event</h5>
            <button data-modal-close=\"event-modal\" id=\"eventModal-close\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form class=\"needs-validation\" name=\"event-form\" id=\"form-event\" autocomplete=\"off\">
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <label for=\"event-title\" class=\"inline-block mb-2 text-base font-medium\">Event Name</label>
                        <input type=\"text\" id=\"event-title\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Event name\" required>
                    </div>
                    <div class=\"xl:col-span-12\">
                        <label for=\"event-category\" class=\"inline-block mb-2 text-base font-medium\">Category</label>
                        <select required class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" name=\"event-category\" id=\"event-category\">
                            <option>Select Category</option>
                            <option selected value=\"fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event transition-all w-[100%] text-custom-500 !bg-custom-100 dark:!bg-custom-500/20 border-none rounded-md py-1.5 px-3\">Primary</option>
                            <option value=\"fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event text-green-500 w-[100%] !bg-green-100 dark:!bg-green-500/20 border-none rounded-md py-1.5 px-3\">Success</option>
                            <option value=\"fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event text-sky-500 w-[100%] !bg-sky-100 dark:!bg-sky-500/20 border-none rounded-md py-1.5 px-3\">Info</option>
                            <option value=\"fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event text-yellow-500 w-[100%] !bg-yellow-100 dark:!bg-yellow-500/20 border-none rounded-md py-1.5 px-3\">Warning</option>
                            <option value=\"fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event w-[100%] text-purple-500 !bg-purple-100 dark:!bg-purple-500/20 border-none rounded-md py-1.5 px-3\">Purple</option>
                        </select>
                    </div>
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" data-modal-close=\"event-modal\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"reset\" id=\"btn-delete-event\" data-modal-close=\"event-modal\" class=\"hidden text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Delete</button>
                    <button type=\"submit\" id=\"btn-save-event\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Add Order</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end event modal -->
";
        return; yield '';
    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        yield "

<!-- calendar min js -->
<script src=\"assets/libs/fullcalendar/index.global.min.js\"></script>
<script src=\"assets/js/pages/apps-calendar-multi-month-stack.init.js\"></script>
<!-- App js -->
<script src=\"";
        // line 65
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
        return "apps-calendar-multi-month-stack.html.twig";
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
        return array (  132 => 65,  124 => 59,  120 => 58,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "apps-calendar-multi-month-stack.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/apps-calendar-multi-month-stack.html.twig");
    }
}
