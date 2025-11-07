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

/* project_management/worker-assignment-modal.html.twig */
class __TwigTemplate_5f2ea6767ea4aaf270aaf2b8bf5c4e40 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div id=\"assignWorkers\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\" style=\"width: 100%;min-width: 90vw;\">
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\" id=\"addEmployeeLabel\">Assign Projects & Workers</h5>
            <button data-modal-close=\"assignWorkers\" id=\"addEmployee\" class=\"close-modal-assign-workers transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto assign-projects-div\" style=\"min-height: 20vh; display:none;\">
            
            <form class=\"create-form\" id=\"create-form\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("assign_workers_to_projects");
        yield "\" method=\"POST\">
                <div id=\"alert-error-msg\" class=\"hidden px-4 py-3 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-500/20\"></div>
                <div class=\"grid grid-cols-2 gap-2 md:grid-cols-2 dynamic-projects\">
                    <!-- Worker Select -->
                    <div>
                        <label for=\"workerSelect\" class=\"inline-block mb-2 text-base font-medium\">Worker/s</label>
                        <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"workerSelect\" name=\"assignments[workers][]\" placeholder=\"Select Worker/s\" multiple style=\"max-height: 10rem; overflow-y: auto;\">
                        </select>
                    </div>
                    <!-- Project Select -->
                    <div>
                        <label for=\"projectSelect\" class=\"inline-block mb-2 text-base font-medium\">Project/s</label>
                        <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"projectSelect\" name=\"assignments[projects][]\" placeholder=\"Select Project/s\" multiple style=\"max-height: 10rem; overflow-y: auto;\">
                        </select>
                    </div>
                </div>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto assign-projects-spinner\" style=\"min-height: 20vh;\">
            <div id=\"page-loader\" class=\"flex min-h-screen group-data-[sidebar-size=sm]:min-h-sm bg-white-500\">
                <div class=\"pw-loader\"></div>
            </div>
        </div>
        <div class=\"flex justify-end gap-2 mt-4 p-4\">
            <button type=\"button\" id=\"close-modal-assign-workers\" data-modal-close=\"assignWorkers\" class=\"text-red-500 reset-form bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10 close-modal-assign-workers\">Cancel</button>
            <button type=\"submit\" id=\"addNew\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 \">Save</button>
        </div>
        </form>
    </div>
</div>
<!--end Assign Projects & Workers-->

<div id=\"selectedProject\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\" style=\"width: 100%;min-width: 90vw;\">
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\" id=\"addEmployeeLabel\">Assign Projects & Workers</h5>
            <button data-modal-close=\"selectedProject\" id=\"addEmployee\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500 close-modal-selectedProject\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto selected-project-div\" style=\"min-height: 20vh; display:none;\">
            <form class=\"create-form\" id=\"selectedProjectForm\" action=\"";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("assign_workers_to_projects");
        yield "\" method=\"POST\">
                ";
        // line 52
        yield "                <div id=\"alert-error-msg\" class=\"hidden px-4 py-3 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-500/20\"></div>
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12 selected-dynamic-projects\">
                    <div class=\"xl:col-span-3\">
                        <label for=\"assignedProject\" class=\"inline-block mb-2 text-base font-medium\">Project</label>
                        <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"assignedProject\" name=\"assignments[projects][]\" placeholder=\"Select Project/s\" disabled style=\"max-height: 10rem; overflow-y: auto;\">
                        </select>
                    </div>
                    <div class=\"xl:col-span-3\">
                        <label for=\"assignedProject\" class=\"inline-block mb-2 text-base font-medium\">Date</label>
                        <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\" id=\"worker_log_date\">
                    </div>
                    <div class=\"xl:col-span-6\">
                        <label for=\"projectWorkers\" class=\"inline-block mb-2 text-base font-medium\">Worker/s</label>
                        <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"projectWorkers\"  name=\"assignments[workers][]\" placeholder=\"Select Worker/s\" multiple style=\"max-height: 10rem; overflow-y: auto;\">
                        </select>
                    </div>
                </div>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto selected-project-spinner\" style=\"min-height: 20vh;\">
            <div id=\"page-loader\" class=\"flex min-h-screen group-data-[sidebar-size=sm]:min-h-sm bg-white-500\">
                <div class=\"pw-loader\"></div>
            </div>
        </div>
        <div class=\"flex justify-end gap-2 mt-4 p-4\">
            <button type=\"button\" id=\"close-modal-selectedProject\" data-modal-close=\"selectedProject\" class=\"text-red-500 reset-form bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10 close-modal-selectedProject\">Cancel</button>
            <button type=\"submit\" id=\"updateSelectedProject\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 \">Save</button>
        </div>
        </form>
    </div>
</div><!--end Assign Projects & Workers-->";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "project_management/worker-assignment-modal.html.twig";
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
        return array (  94 => 52,  90 => 48,  49 => 10,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "project_management/worker-assignment-modal.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/project_management/worker-assignment-modal.html.twig");
    }
}
