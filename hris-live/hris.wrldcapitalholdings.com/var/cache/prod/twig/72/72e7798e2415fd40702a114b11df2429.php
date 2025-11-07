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

/* apps-hr-create-leave.html.twig */
class __TwigTemplate_75ce91e920ecd23b275ce4d6fa2f8c29 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "apps-hr-create-leave.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Add Leave (HR)";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Leaves Manage", "title" => "Add Leave (HR)"]);
        yield "


                <div class=\"grid grid-cols-1 xl:grid-cols-12 gap-x-5\">
                    <div class=\"xl:col-span-9\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15 grow\">Add Leave</h6>
                                <form action=\"#!\">
                                    <div class=\"grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-12\">
                                        <div class=\"xl:col-span-6\">
                                            <div>
                                                <label for=\"employeeName\" class=\"inline-block mb-2 text-base font-medium\">Employee</label>
                                                <select class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices data-choices-search-false name=\"employeeName\" id=\"employeeName\">
                                                    <option value=\"\">Select Employee</option>
                                                    <option value=\"Willie Torres\">Willie Torres</option>
                                                    <option value=\"Patricia Garcia\">Patricia Garcia</option>
                                                    <option value=\"Juliette Fecteau\">Juliette Fecteau</option>
                                                    <option value=\"Thomas Hatfield\">Thomas Hatfield</option>
                                                    <option value=\"Willie Torres\">Willie Torres</option>
                                                    <option value=\"Juliette Fecteau\">Juliette Fecteau</option>
                                                    <option value=\"Nancy Reynolds\">Nancy Reynolds</option>
                                                    <option value=\"Holly Kavanaugh\">Holly Kavanaugh</option>
                                                    <option value=\"Jonas Frederiksen\">Jonas Frederiksen</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->
                                        <div class=\"xl:col-span-6\">
                                            <div>
                                                <label for=\"employeeId\" class=\"inline-block mb-2 text-base font-medium\">Employee ID</label>
                                                <input type=\"text\" id=\"employeeId\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"#TWE1001501\" disabled>
                                            </div>
                                        </div><!--end col-->
                                        <div class=\"xl:col-span-6\">
                                            <div>
                                                <label for=\"leaveType\" class=\"inline-block mb-2 text-base font-medium\">Leave Type</label>
                                                <select class=\"form-input border-slate-200 focus:outline-none focus:border-custom-500\" data-choices data-choices-search-false name=\"leaveType\" id=\"leaveType\">
                                                    <option value=\"\">Select Leave Type</option>
                                                    <option value=\"Medical Leave\">Medical Leave</option>
                                                    <option value=\"Casual Leave\">Casual Leave</option>
                                                    <option value=\"Sick Leave\">Sick Leave</option>
                                                    <option value=\"Annual Leave\">Annual Leave</option>
                                                </select>
                                            </div>
                                        </div><!--end col-->
                                        <div class=\"xl:col-span-6\">
                                            <div>
                                                <label for=\"remainingLeaves\" class=\"inline-block mb-2 text-base font-medium\">Remaining Leaves</label>
                                                <input type=\"text\" id=\"remainingLeaves\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"18\" disabled>
                                            </div>
                                        </div><!--end col-->
                                        <div class=\"xl:col-span-6\">
                                            <label for=\"fromInput\" class=\"inline-block mb-2 text-base font-medium\">Form</label>
                                            <input type=\"text\" id=\"fromInput\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\">
                                        </div>
                                        <div class=\"xl:col-span-6\">
                                            <label for=\"toInput\" class=\"inline-block mb-2 text-base font-medium\">To</label>
                                            <input type=\"text\" id=\"toInput\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Select date\" data-provider=\"flatpickr\" data-date-format=\"d M, Y\">
                                        </div>
                                        <div class=\"xl:col-span-6\">
                                            <div>
                                                <label for=\"numberOfDayLeaves\" class=\"inline-block mb-2 text-base font-medium\">Number of Days</label>
                                                <input type=\"text\" id=\"numberOfDayLeaves\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" value=\"01\" disabled>
                                            </div>
                                        </div>
                                        <div class=\"xl:col-span-6\">
                                            <label for=\"leaveDayInput\" class=\"inline-block mb-2 text-base font-medium\">Leave Day</label>
                                            <select class=\"form-input border-slate-200 focus:outline-none focus:border-custom-500\" data-choices data-choices-search-false name=\"leaveDayInput\" id=\"leaveDayInput\">
                                                <option value=\"\">Select Leave Day</option>
                                                <option value=\"Full Day\">Full Day</option>
                                                <option value=\"Half Day\">Half Day</option>
                                            </select>
                                        </div>
                                        <div class=\"md:col-span-2 xl:col-span-12\">
                                            <div>
                                                <label for=\"reasonInput\" class=\"inline-block mb-2 text-base font-medium\">Reason</label>
                                                <textarea class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" id=\"reasonInput\" rows=\"3\"></textarea>
                                            </div>
                                        </div>
                                    </div><!--end grid-->
                                    <div class=\"flex justify-end gap-2 mt-4\">
                                        <button type=\"reset\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Reset</button>
                                        <button type=\"submit\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Add Leave</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!--end col-->
                    <div class=\"xl:col-span-3\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h6 class=\"mb-4 text-15\">Leave Information (2023)</h6>
                                <div>
                                    <table class=\"w-full mb-0\">
                                        <tbody>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Medical Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">04</th>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Casual Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">08</th>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Sick Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">03</th>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Annual Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">12</th>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Use Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">09</th>
                                            </tr>
                                            <tr>
                                                <td class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">Remaining Leave</td>
                                                <th class=\"px-3.5 py-2.5 first:pl-0 last:pr-0 border-y border-transparent\">18</th>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->

         

";
        return; yield '';
    }

    // line 137
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        yield "
<!-- App js -->
<script src=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 142
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "apps-hr-create-leave.html.twig";
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
        return array (  211 => 142,  207 => 140,  203 => 138,  199 => 137,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "apps-hr-create-leave.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/apps-hr-create-leave.html.twig");
    }
}
