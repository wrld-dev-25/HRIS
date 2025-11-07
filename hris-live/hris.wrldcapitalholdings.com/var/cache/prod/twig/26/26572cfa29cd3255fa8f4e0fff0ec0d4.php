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

/* administration/empShifts.html.twig */
class __TwigTemplate_500dcf9933bfe28c66183fc15258c576 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "administration/empShifts.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Work Shifts";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Work Shifts", "title" => "Work Shifts"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"divisionTable\">
                            <div class=\"card-body\">
                                <div class=\"flex items-center\">
                                    <h6 class=\"text-15 grow\">Shift List</h6>
                                    <div class=\"shrink-0\">
                                        <button data-modal-target=\"addShift\" type=\"button\" class=\"add-shifts text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Add Work Shifts</span></button>
                                    </div>
                                </div>
                            </div>
                            <div class=\"!py-3.5 card-body border-y border-dashed border-slate-200 dark:border-zink-500\">
                                <form action=\"#!\">
                                    <div class=\"grid grid-cols-1 gap-5 xl:grid-cols-12\">
                                        <div class=\"relative xl:col-span-2\">
                                            <input type=\"text\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search for code, name, description etc...\" autocomplete=\"off\">
                                            <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                </form>
                            </div>

                            ";
        // line 30
        $context["dayMapping"] = [1 => "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        // line 39
        yield "
                            <div class=\"card-body\">
                                <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                    <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                        <thead class=\"text-left\">
                                            <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"name\">Name</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"shift\">Shift</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"daysofweek\">Days of Week</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"lunch_break\">Lunch Break</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"total_shift_hr\">Total Shift Hours</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["shiftList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shiftItem"]) {
            // line 55
            yield "                                                    <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 name\">";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "name", [], "any", false, false, false, 56), "html", null, true);
            yield " </td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 shift\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "start_time", [], "any", false, false, false, 57), "g:i A"), "html", null, true);
            yield " to ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "end_time", [], "any", false, false, false, 57), "g:i A"), "html", null, true);
            yield " </td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                            ";
            // line 60
            yield "                                                            ";
            $context["days"] = ((CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "days_of_week", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "days_of_week", [], "any", false, false, false, 60), [])) : ([]));
            // line 61
            yield "                                                            ";
            $context["dayNames"] = [];
            // line 62
            yield "                                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["days"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dayNumber"]) {
                // line 63
                yield "                                                                ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["dayMapping"] ?? null), $context["dayNumber"], [], "array", true, true, false, 63)) {
                    // line 64
                    yield "                                                                    ";
                    $context["dayNames"] = Twig\Extension\CoreExtension::merge(($context["dayNames"] ?? null), [(($__internal_compile_0 = ($context["dayMapping"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["dayNumber"]] ?? null) : null)]);
                    // line 65
                    yield "                                                                ";
                }
                // line 66
                yield "                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayNumber'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "                                                            
                                                            ";
            // line 69
            yield "                                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["dayNames"] ?? null), ", "), "html", null, true);
            yield "
                                                        </td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 lunch_break\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "lunch_duration", [], "any", false, false, false, 71), "html", null, true);
            yield " minutes</td>
                                                        ";
            // line 73
            yield "                                                        ";
            $context["totalMinutes"] = CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "total_hours", [], "any", false, false, false, 73);
            // line 74
            yield "                                                        ";
            $context["hours"] = (int) floor((($context["totalMinutes"] ?? null) / 60));
            // line 75
            yield "                                                        ";
            $context["minutes"] = (($context["totalMinutes"] ?? null) % 60);
            // line 76
            yield "                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 total_shift_hr\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["hours"] ?? null), "html", null, true);
            yield " hour/s ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["minutes"] ?? null), "html", null, true);
            yield " minutes</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                            <div class=\"action-shifts relative dropdown\">
                                                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                    <li>
                                                                        <a data-modal-target=\"editShift";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "id", [], "any", false, false, false, 82), "html", null, true);
            yield "\" class=\"edit-shifts block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-modal-target=\"deleteShift";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "id", [], "any", false, false, false, 85), "html", null, true);
            yield "\" class=\"delete-shifts block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shiftItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "                                        </tbody>
                                    </table>
                                    <div class=\"noresult\" style=\"display: none\">
                                        <div class=\"py-6 text-center\">
                                            <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                            <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                            <p class=\"mb-0 text-slate-500 dark:text-zink-200\">We've searched more than 199+ users We did not find any users for you search.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->


<div id=\"addShift\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Work Shifts</h5>
            <button data-modal-close=\"addShift\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_shifts");
        yield "\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <label for=\"shift_name\" class=\"inline-block mb-2 text-base font-medium\">Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"shift_name\" name=\"shift_name\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Work Shifts Name\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"shift_start\" class=\"inline-block mb-2 text-base font-medium\">Start</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"shift_start\" name=\"shift_start\"  class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"timepickr\" data-time-basic=\"true\" placeholder=\"Select Time\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"shift_end\" class=\"inline-block mb-2 text-base font-medium\">End</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"shift_end\" name=\"shift_end\"  class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"timepickr\" data-time-basic=\"true\" placeholder=\"Select Time\" required>     
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"week_sched\" class=\"inline-block mb-2 text-base font-medium\">Select Days of the Week</label>
                    <span class=\"text-red-500\">*</span>
                    <select name=\"week_sched[]\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices multiple data-choices-sorting-false id=\"week_sched\" required>
                        <option value=\"1\">Monday</option>
                        <option value=\"2\">Tuesday</option>
                        <option value=\"3\">Wednesday</option>
                        <option value=\"4\">Thursday</option>
                        <option value=\"5\">Friday</option>
                        <option value=\"6\">Saturday</option>
                    </select>    
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"shift_lunch_duration\" class=\"inline-block mb-2 text-base font-medium\">Lunch Break Duration (in minutes)</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" id=\"shift_lunch_duration\" name=\"shift_lunch_duration\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Lunch Break Duration\" min=\"0\" required>
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"button\" id=\"close-modal\" data-modal-close=\"addShift\" class=\"clear-form text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div><!--end add user-->

";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["shiftList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shiftItem"]) {
            // line 160
            yield "<div id=\"editShift";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "id", [], "any", false, false, false, 160), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add Work Shifts</h5>
            <button data-modal-close=\"editShift";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "id", [], "any", false, false, false, 164), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
            // line 167
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_shifts");
            yield "\" method=\"post\">
            <input type=\"hidden\" name=\"shift_id\" value=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "id", [], "any", false, false, false, 168), "html", null, true);
            yield "\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <label for=\"shift_name\" class=\"inline-block mb-2 text-base font-medium\">Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"shift_name\" name=\"shift_name\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Work Shifts Name\" value=\"";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "name", [], "any", false, false, false, 173), "html", null, true);
            yield "\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"shift_start\" class=\"inline-block mb-2 text-base font-medium\">Start</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"shift_start\" name=\"shift_start\"  class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"timepickr\" data-time-basic=\"true\" value=\"";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "start_time", [], "any", false, false, false, 178), "html", null, true);
            yield "\" placeholder=\"Select Time\">
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"shift_end\" class=\"inline-block mb-2 text-base font-medium\">End</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"shift_end\" name=\"shift_end\"  class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"timepickr\" data-time-basic=\"true\" value=\"";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "end_time", [], "any", false, false, false, 183), "html", null, true);
            yield "\" placeholder=\"Select Time\">     
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"week_sched\" class=\"inline-block mb-2 text-base font-medium\">Select Days of the Week</label>
                    <span class=\"text-red-500\">*</span>
                    ";
            // line 189
            yield "                    <select name=\"week_sched[]\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-choices multiple data-choices-sorting-false id=\"week_sched\" required>
                        <option value=\"1\" ";
            // line 190
            if (CoreExtension::inFilter(1, CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "days_of_week", [], "any", false, false, false, 190))) {
                yield "selected";
            }
            yield ">Monday</option>
                        <option value=\"2\" ";
            // line 191
            if (CoreExtension::inFilter(2, CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "days_of_week", [], "any", false, false, false, 191))) {
                yield "selected";
            }
            yield ">Tuesday</option>
                        <option value=\"3\" ";
            // line 192
            if (CoreExtension::inFilter(3, CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "days_of_week", [], "any", false, false, false, 192))) {
                yield "selected";
            }
            yield ">Wednesday</option>
                        <option value=\"4\" ";
            // line 193
            if (CoreExtension::inFilter(4, CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "days_of_week", [], "any", false, false, false, 193))) {
                yield "selected";
            }
            yield ">Thursday</option>
                        <option value=\"5\" ";
            // line 194
            if (CoreExtension::inFilter(5, CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "days_of_week", [], "any", false, false, false, 194))) {
                yield "selected";
            }
            yield ">Friday</option>
                        <option value=\"6\" ";
            // line 195
            if (CoreExtension::inFilter(6, CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "days_of_week", [], "any", false, false, false, 195))) {
                yield "selected";
            }
            yield ">Saturday</option>
                        <option value=\"7\" ";
            // line 196
            if (CoreExtension::inFilter(7, CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "days_of_week", [], "any", false, false, false, 196))) {
                yield "selected";
            }
            yield ">Sunday</option>
                    </select>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"shift_lunch_duration\" class=\"inline-block mb-2 text-base font-medium\">Lunch Break Duration (in minutes)</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"number\" id=\"shift_lunch_duration\" name=\"shift_lunch_duration\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Lunch Break Duration\" min=\"0\" value=\"";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "lunch_duration", [], "any", false, false, false, 202), "html", null, true);
            yield "\" required>
                </div>
                
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"button\" id=\"close-modal\" data-modal-close=\"editShift";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "id", [], "any", false, false, false, 207), "html", null, true);
            yield "\" class=\"clear-form text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div><!--end add user-->

<div id=\"deleteShift";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "id", [], "any", false, false, false, 215), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deleteShift";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "id", [], "any", false, false, false, 219), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/delete.png"), "html", null, true);
            yield "\" alt=\"\" class=\"block h-12 mx-auto\">
            <form action=\"";
            // line 222
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("archive_shifts");
            yield "\" method=\"post\">
                <input type=\"hidden\" name=\"shift_id\" value=\"";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "id", [], "any", false, false, false, 223), "html", null, true);
            yield "\">
                <div class=\"mt-5 text-center\">
                    <h5 class=\"mb-1\">Are you sure?</h5>
                    <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                    <div class=\"flex justify-center gap-2 mt-6\">
                        <button type=\"reset\" data-modal-close=\"deleteShift";
            // line 228
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["shiftItem"], "id", [], "any", false, false, false, 228), "html", null, true);
            yield "\" class=\"bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10\">Cancel</button>
                        <button type=\"submit\" class=\"text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20\">Yes, Delete It!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shiftItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        yield "

";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["status"], "method", false, false, false, 239));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 240
            yield "    <div class=\"hidden\" id=\"status\" data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        yield "
";
        return; yield '';
    }

    // line 245
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 246
        yield "
<script src=\"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 248
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-list-init.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
<script src=\"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 254
        yield "<script>
\$(document).ready(function () {

    document.getElementById(\"close-modal\").addEventListener(\"click\", function () {
        // Clear text and number inputs individually.
        document.getElementById(\"shift_name\").value = \"\";
        document.getElementById(\"shift_start\").value = \"\";
        document.getElementById(\"shift_end\").value = \"\";
        document.getElementById(\"shift_lunch_duration\").value = \"\";

        // For the multi-select enhanced by Choices.js,
        // clear only the active selections without removing the choices.
        const weekSched = document.getElementById(\"week_sched\");
        if (weekSched && weekSched.choices) {
            // Use removeActiveItems() to clear current selections without removing options.
            weekSched.choices.removeActiveItems();
        } else {
            // Fallback for a native select element.
            week_sched.selectedIndex = -1;
        }
    });

    const status = \$('#status');

    console.log(status.data('status'));

    if (status.length) {
        if (status.data('status') == 'success') {
            // The element exists
            Toastify({
                newWindow: true,
                text: 'Work Shifts added successfully',
                gravity: 'top',
                position: 'right',
                className: \"bg-green-500\",
                stopOnFocus: true,
                offset: {
                    x: 0, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                    y: 0, // vertical axis - can be a number or a string indicating unity. eg: '2em'
                },
                duration: 3000,
                close: true,
            }).showToast();
        } else {
            Toastify({
                newWindow: true,
                text: 'Work Shifts not added, something went wrong.',
                gravity: 'top',
                position: 'right',
                className: \"bg-red-500\",
                stopOnFocus: true,
                offset: {
                    x: 0, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                    y: 0, // vertical axis - can be a number or a string indicating unity. eg: '2em'
                },
                duration: 3000,
                close: true,
            }).showToast();
        }
    }
})
</script>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "administration/empShifts.html.twig";
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
        return array (  493 => 254,  489 => 252,  483 => 249,  479 => 248,  475 => 247,  472 => 246,  468 => 245,  462 => 242,  453 => 240,  449 => 239,  445 => 237,  430 => 228,  422 => 223,  418 => 222,  414 => 221,  409 => 219,  402 => 215,  391 => 207,  383 => 202,  372 => 196,  366 => 195,  360 => 194,  354 => 193,  348 => 192,  342 => 191,  336 => 190,  333 => 189,  325 => 183,  317 => 178,  309 => 173,  301 => 168,  297 => 167,  291 => 164,  283 => 160,  279 => 159,  232 => 115,  207 => 92,  194 => 85,  188 => 82,  176 => 76,  173 => 75,  170 => 74,  167 => 73,  163 => 71,  157 => 69,  154 => 67,  148 => 66,  145 => 65,  142 => 64,  139 => 63,  134 => 62,  131 => 61,  128 => 60,  121 => 57,  117 => 56,  114 => 55,  110 => 54,  93 => 39,  91 => 30,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "administration/empShifts.html.twig", "/var/www/hris.wrldcapitalholdings.com/templates/administration/empShifts.html.twig");
    }
}
