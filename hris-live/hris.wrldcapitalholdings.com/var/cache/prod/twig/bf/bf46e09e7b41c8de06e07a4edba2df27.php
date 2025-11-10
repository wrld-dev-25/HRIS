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

/* manpower/apps-attendance.html.twig */
class __TwigTemplate_c48c3049a07c9902edb5cbaefd787518 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "manpower/apps-attendance.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "Daily Time Records";
        return; yield '';
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "Daily Time Records", "title" => "Daily Time Records"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5\">
                    ";
        // line 44
        yield "                    <div class=\"xl:col-span-9 lg:col-span-12\">
                        <div class=\"card\" id=\"manpowerTable\">
                            <div class=\"card-body\">
                                <div class=\"grid grid-cols-1 gap-4 mb-5 lg:grid-cols-2 xl:grid-cols-12\">
                                    <div class=\"xl:col-span-3\">
                                        <div class=\"relative\">
                                            <input type=\"text\" id=\"searchInput\" class=\"ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Search for ...\" autocomplete=\"off\">
                                            <i data-lucide=\"search\" class=\"inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600\"></i>
                                        </div>
                                    </div><!--end col-->
                                    <div class=\"xl:col-span-3\">
                                        <div>
                                            <input type=\"text\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\" id=\"worker_log_date\">
                                        </div>
                                    </div><!--end col-->
                                    <div class=\"flex justify-end gap-2 text-right lg:col-span-2 xl:col-span-4 xl:col-start-10\">
                                        <button type=\"button\" class=\"add-daily_time_record bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20\" data-modal-target=\"importCSV\"><i data-lucide=\"upload\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Import DTR</span></button>
                                        <button type=\"button\" class=\"add-daily_time_record text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\" data-modal-target=\"exportCSV\"><i data-lucide=\"download\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Export Manpower Monitoring</span></button>
                                    </div>
                                </div><!--end grid-->
                                <div class=\"overflow-x-auto\">
                                    <table class=\"w-full whitespace-nowrap\">
                                        <thead class=\"ltr:text-left rtl:text-right bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600\">
                                            <tr>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Employee Code</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Employee Name</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Date</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Check In</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Check Out</th>
                                                <th class=\"px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500\">Rendered Hours</th>
                                                ";
        // line 75
        yield "                                            </tr>
                                        </thead>
                                        <tbody id=\"tbody_worker_logs\">
                                            ";
        // line 92
        yield "                                        </tbody>
                                    </table>
                                    <div class=\"noresult\" id=\"noresult\">
                                        <div class=\"py-6 text-center\">
                                            <i data-lucide=\"search\" class=\"size-6 mx-auto text-sky-500 fill-sky-100 dark:fill-sky-500/20\"></i>
                                            <h5 class=\"mt-2\">Sorry! No Result Found</h5>
                                            <p class=\"mb-0 text-slate-500 dark:text-zink-200\"</p>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 119
        yield "                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end grid-->

<div id=\"importCSV\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Import CSV</h5>
            <button data-modal-close=\"importCSV\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("import_dtr");
        yield "\" method=\"post\" enctype=\"multipart/form-data\">
                <div>
                    <input type=\"file\" class=\"cursor-pointer form-file form-file-sm border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500\" placeholder=\"Employee CSV\" name=\"csv_file\" accept=\".csv\">
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" data-modal-close=\"importCSV\" class=\"text-red-500 transition-all duration-200 ease-linear bg-white border-white btn hover:text-red-600 focus:text-red-600 active:text-red-600 dark:bg-zink-500 dark:border-zink-500\">Cancel</button>
                    <button type=\"submit\" class=\"add-daily_time_record text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div id=\"exportCSV\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[40rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full\">
        <div class=\"flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500\">
            <h5 class=\"text-16\">Export Manpower Monitoring</h5>
            <button data-modal-close=\"exportCSV\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form id=\"export-form\" action=\"#\" method=\"post\">
                <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\" id=\"export-form-container\">
                    <div class=\"xl:col-span-12\">
                    ";
        // line 154
        yield "                        <label for=\"filter\" class=\"inline-block mb-2 text-base font-medium\">Filter By</label>
                        <select name=\"filter\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" ";
        // line 155
        yield " id=\"filter\">
                            <option value=\"project\">Project</option>
                            <option value=\"task_activity\">Task/Activity</option>
                            <option value=\"employee\">Employee</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-12 active\" id=\"project-container\">
                        <label for=\"project\" class=\"inline-block mb-2 text-base font-medium\">Projects</label>
                        <select name=\"project\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" ";
        // line 163
        yield " id=\"project\">
                            <option value=\"all\">All Projects</option>
                            ";
        // line 165
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["projects"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["projects"] ?? null)) > 0))) {
            // line 166
            yield "                               ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["projects"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 167
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 167), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 167), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            yield " 
                            ";
        }
        // line 170
        yield "                        </select>
                    </div>
                    <div class=\"xl:col-span-12 hidden\" id=\"task-activity-container\">
                        <label for=\"task_activity\" class=\"inline-block mb-2 text-base font-medium\">Tasks/Activities</label>
                        <select name=\"task_activity\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" ";
        // line 174
        yield " id=\"task_activity\">
                            <option value=\"all\">All Tasks/Activities</option>
                        </select>
                    </div>
                    <div class=\"xl:col-span-12 hidden\" id=\"employee-container\">
                        <label for=\"employee\" class=\"inline-block mb-2 text-base font-medium\">Employees</label>
                        <select name=\"employee\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" ";
        // line 180
        yield " id=\"employee\">
                            ";
        // line 181
        if (( !Twig\Extension\CoreExtension::testEmpty(($context["employee_list"] ?? null)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["employee_list"] ?? null)) > 0))) {
            // line 182
            yield "                               ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["employee_list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["emp_item"]) {
                // line 183
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_item"], "id", [], "any", false, false, false, 183), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_item"], "last_name", [], "any", false, false, false, 183), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["emp_item"], "first_name", [], "any", false, false, false, 183), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emp_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            yield " 
                            ";
        }
        // line 186
        yield "                        </select>
                    </div>
                    <div class=\"xl:col-span-12\" id=\"date-container\">
                        <label for=\"date\" class=\"inline-block mb-2 text-base font-medium\">Date Selection</label>
                        <input type=\"text\" id=\"date\" name=\"date\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" data-provider=\"flatpickr\" data-date-format=\"Y-m-d\" readonly=\"readonly\" placeholder=\"Select Date\" data-range-date=\"true\">
                    </div>
                </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"button\" id=\"close-modal\" data-modal-close=\"exportCSV\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"delete-daily_time_record text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>
";
        return; yield '';
    }

    // line 203
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 204
        yield "
<!-- App js -->
<script src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 207
        yield ((array_key_exists("javascriptSnippet", $context)) ? (Twig\Extension\CoreExtension::default(($context["javascriptSnippet"] ?? null), "")) : (""));
        yield "
";
        // line 209
        yield "<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const tableBody = document.getElementById('tbody_worker_logs');

        searchInput.addEventListener('input', function () {
            const filter = searchInput.value.toLowerCase();
            const rows = tableBody.getElementsByTagName('tr');

            Array.from(rows).forEach(row => {
                const cells = row.getElementsByTagName('td');
                let match = false;

                Array.from(cells).forEach(cell => {
                    if (cell.textContent.toLowerCase().includes(filter)) {
                        match = true;
                    }
                });

                if (match) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });

            // Show or hide the no result message
            const noResult = document.getElementById('noresult');
            const visibleRows = Array.from(rows).filter(row => row.style.display !== 'none');
            if (visibleRows.length === 0) {
                noResult.style.display = 'block';
            } else {
                noResult.style.display = 'none';
            }
        });
    });

    \$(document).ready(function() {
        const attendanceUrl = \"/manpower/attendance/\";
        //console.log(attendanceUrl);
        var selectedWorker = \$('#select_worker');
        
        var today = new Date();
        var fullname = '';
        var position = '';
        // Get the year, month, and day
        var year = today.getFullYear();
        var month = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-based, so add 1
        var day = String(today.getDate()).padStart(2, '0');
        var formattedDate = year + '-' + month + '-' + day;
        var jsonObject = {
            \"start_date\": formattedDate,
            \"end_date\": formattedDate
        };
        var dateWorker = \$('#worker_log_date').val(formattedDate);
        
        //console.log(jsonObject)
        selectedWorker.on('change', async function() {
            dateWorker.val('');
            //console.log('populate table')
            var selectedWorkerId = \$(this).val();
            if(!selectedWorkerId){
                const tableBody = \$(\"#tbody_worker_logs\");
                tableBody.empty(); // Clear existing rows
                \$('#emp_profile').hide();
                \$('#default_card').show();
                \$('#noresult').show();
            }
            else{
                \$('#emp_profile').show();
                \$('#default_card').hide();

                var worker_log_reposnse = await apiCall('POST', 'api/worker/' + selectedWorkerId, jsonObject);
                //console.log('API Call Response:', worker_log_reposnse);

                if (!worker_log_reposnse || Object.keys(worker_log_reposnse).length === 0) {
                    // Check if response is falsy or an empty object
                    \$('#noresult').show(); // Show your element indicating no data or error
                } else {
                    \$('#noresult').hide(); // Show your element
                    populateTable(worker_log_reposnse.worker_logs); // Populate table with received data
                }

                
                var worker_profile = await apiCall('GET', 'api/worker_logs', '');
                //console.log('API Call Response Worker Profile:', );

                fullname = worker_profile.workers[0].emp_record.first_name + \" \" + worker_profile.workers[0].emp_record.last_name
                position = worker_profile.workers[0].position;

                updateWorkerDetails(worker_profile.workers[0].empcode, '5 years', '2020-01-01', '5', '218.4 Hrs', '172 Hrs', '24 Hrs', '22.40 Hrs', fullname, position);
            }
            
        });

        dateWorker.on('change', async function() {
            
            var selectDate = \$(this).val();
            console.log(selectDate)
            //console.log(selectDate);
            var dates = selectDate.split(' to ');
        
            var startDate, endDate;
            
            if (dates.length === 2) {
                // If both start and end dates are provided
                startDate = dates[0].trim();
                endDate = dates[1].trim();
            } else {
                // If only start date is provided or invalid format
                startDate = dates[0].trim();
                endDate = startDate;
            }
            
            // Log the start and end dates
            //console.log('Start Date:', startDate);
            //console.log('End Date:', endDate);

            //var selectedWorkerId = \$('#select_worker').val();
            var jsonObject = {
                \"start_date\": startDate,
                \"end_date\": endDate
            };
            //console.log(selectDate)
            var worker_log_reposnse = await apiCall('POST', 'api/worker_logs', jsonObject);
            //console.log('API Call Response:', worker_log_reposnse);

            if (!worker_log_reposnse || Object.keys(worker_log_reposnse.worker_logs).length === 0) {
                // Check if response is falsy or an empty object
                \$('#noresult').show(); // Show your element indicating no data or error
            } else {
                \$('#noresult').hide(); // Show your element
                populateTable(worker_log_reposnse.worker_logs); // Populate table with received data
            }
            
        });

        /* Exporting of DTR CSV Handler */
        const firstOption = \$('#project option:first').clone();        

        \$('#filter').on('change', function () {
            var filter = \$(this).val();
            const formContainer = \$('#export-form-container');

            \$('#project-container, #task-activity-container, #employee-container').removeClass('active').addClass('hidden');

            switch (filter) {
                case 'task_activity':
                    \$('#project-container').removeClass('hidden').addClass('active');
                    \$('#task-activity-container').removeClass('hidden').addClass('active');
                    // Remove the first option
                    \$('#project option:first').remove();
                    break;
                case 'employee':
                    \$('#employee-container').removeClass('hidden').addClass('active');
                    // Add the stored option back as the first option
                    \$('#project').prepend(firstOption);
                    break;
            
                default:
                    \$('#project-container').removeClass('hidden').addClass('active');
                    // Add the stored option back as the first option
                    \$('#project').prepend(firstOption);
                    break;
            }
        });

        \$('#export-form').on('submit', function (e) {
            e.preventDefault();
            var filter = \$('#filter').val();
            var project = \$('#project').val();
            var task_activity = \$('#task_activity').val();
            var employee = \$('#employee').val();
            var date = \$('#date').val();

            \$.ajax({
                url: '/manpower/export_xls',
                method: 'POST',
                data: {
                    filter: filter,
                    project: project,
                    task_activity: task_activity,
                    employee: employee,
                    date: date
                },
                xhrFields: {
                    responseType: 'blob'
                },
                success: function(data) {
                    var a = document.createElement('a');
                    var url = window.URL.createObjectURL(data);
                    a.href = url;
                    a.download = 'timesheet.xlsx';
                    document.body.append(a);
                    a.click();
                    a.remove();
                    window.URL.revokeObjectURL(url);
                },
                error: function(xhr, status, error) {
                    console.error('Error exporting timesheet:', status, error);
                }
            });
        })
        /* Exporting of DTR CSV Handler End */

        function updateWorkerDetails(employeeId, experience, joiningDate, totalHoursYears, totalHours, regularHours, overtime, holiday, fullname, position) {
            // Update each <td> element with the provided values
            \$('#employeeId').text(employeeId);
            \$('#emp_name').text(fullname);
            \$('#emp_position').text(position);
            /*\$('#experience').text(experience);
            \$('#joiningDate').text(joiningDate);
            \$('#totalHoursYears').text(totalHoursYears);
            \$('#totalHours').text(totalHours);
            \$('#regularHours').text(regularHours);
            \$('#overtime').text(overtime);
            \$('#holiday').text(holiday);*/
        }

        // Function to populate the table
        function populateTable(data) {
            //console.log('populate tables')
            const tableBody = \$(\"#tbody_worker_logs\");
            tableBody.empty(); // Clear existing rows
            var total_hours_month = 0;
            var fullname = '';
            data.forEach(item => {
                var loginDate = '';
                var logoutDate = '';
                var empLink = attendanceUrl + item.user.id + \"/\" + item.user.emp_record.employee_code;
                //console.log(data.user)
                fullname = item.user.emp_record.last_name + ', ' + item.user.emp_record.first_name;
                // Parse login and logout dates
                if(item.loginDate){
                    loginDate = new Date(item.loginDate.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                    loginDate = new Date(loginDate.toLocaleString(\"en-US\", {timeZone: \"Asia/Manila\"}));
                }
                if(item.logoutDate){
                    logoutDate = new Date(item.logoutDate.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                    logoutDate = new Date(logoutDate.toLocaleString(\"en-US\", {timeZone: \"Asia/Manila\"}));
                }
                
                

                // Function to format time in 12-hour format with AM/PM
                function formatTime(date) {
                    const hours = date.getHours();
                    const minutes = date.getMinutes();
                    const ampm = hours >= 12 ? 'PM' : 'AM';
                    const formattedHours = hours % 12 || 12; // Convert 24-hour to 12-hour format
                    const formattedMinutes = minutes < 10 ? '0' + minutes : minutes;
                    return formattedHours + ':' + formattedMinutes + ' ' + ampm;
                }
                
                function formatDate(dateString) {
                    dateString = new Date(dateString.replace(/-/g, '/').replace('T', ' ').replace(/\\+.*/, ''));
                    dateString = new Date(dateString.toLocaleString(\"en-US\", {timeZone: \"Asia/Manila\"}));
                    //const date = new Date(dateString);
                    const options = { day: 'numeric', month: 'short', year: 'numeric', timeZone: \"Asia/Manila\" };
                    return dateString.toLocaleDateString('en-US', options);
                }
                //console.log('start date sample ')
                //console.log('start date sample '+ formatDate(item.loginDate))
                //format day
                const date = new Date(item.loginDate);
                const days = [\"Sun\", \"Mon\", \"Tue\", \"Wed\", \"Thu\", \"Fri\", \"Sat\"];
                const day = days[date.getUTCDay()];

                // Format login and logout times
                var loginTime = '';
                var logoutTime = '';
                if(loginDate){
                    loginTime = formatTime(loginDate);
                }
                if(logoutDate){
                    logoutTime = formatTime(logoutDate);
                }
                
                // Calculate difference in hours
                var diffMilliseconds = Math.abs(logoutDate - loginDate);
                var diffHours = 0;
                if(logoutDate && loginDate){
                    diffMilliseconds = Math.abs(logoutDate - loginDate);
                    diffHours = diffMilliseconds / (1000 * 60 * 60);
                }
                
                // Example row construction (adjust as per your table structure)
                const row = `
                    <tr>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\"><a class=\"text-custom-500\" href=\"\${empLink}\">\${item.user.emp_record.employee_code}</a></td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${fullname}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">
                            \${formatDate(item.loginDate)} <span class=\"px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-white border-slate-400 text-slate-500 dark:bg-zink-700 dark:border-zink-400 dark:text-zink-200 ltr:ml-1 rtl:mr-1 align-middle\">\${day}</span>
                        </td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${loginTime}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${logoutTime}</td>
                        <td class=\"px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500\">\${diffHours.toFixed(2)}</td>
                        ";
        // line 512
        yield "                    </tr>
                `;
                total_hours_month += parseFloat(diffHours.toFixed(2));
                tableBody.append(row);
            });
            \$('#total_hours_per_month').text('');
            \$('#total_hours_per_month').text(total_hours_month);
        }

        // Event listener for project selection change
        \$('#project').on('change', async function () {
            var project_id = \$(this).val();
            var jsonObject = { \"project_id\": project_id };

            // Call API to get tasks for selected project
            var response = await apiCall('POST', 'api/dtr-filter-by-task', jsonObject);

            // Get the select element and clear existing options
            var \$taskSelect = \$('#task_activity');
            \$taskSelect.empty(); // Clear existing options

            // Add default option
            \$taskSelect.append('<option value=\"all\">All Tasks/Activities</option>');

            // Check if response is not empty and contains tasks
            if (Array.isArray(response) && response.length) {
                response.forEach(task => {
                    // Assuming response contains an array of task objects with id and description
                    \$taskSelect.append(`<option value=\"\${task.description}\">\${task.description}</option>`);
                });
            } else {
                // Optionally, handle the case where no tasks are available
                \$taskSelect.append('<option value=\"\">No tasks available</option>');
            }
        });

        dateWorker.trigger('change');
    });
</script>
<script>
    var options = {
        valueNames: [
            'date',
            'check_in',
            'check_out',
            'work_hours',
        ],
        page: 10,
        pagination: true,
        plugins: [
            ListPagination({
                left: 2,
                right: 2,
            }),
        ],
    };

    var employeeTable = new List(\"manpowerTable\", options).on(\"updated\", function (list) {
        // noresult show or hidden
        if (document.getElementsByClassName(\"noresult\") && document.getElementsByClassName(\"noresult\")[0]) {
            list.matchingItems.length == 0 ?
                (document.getElementsByClassName(\"noresult\")[0].style.display = \"block\") :
                (document.getElementsByClassName(\"noresult\")[0].style.display = \"none\");

            if (list.matchingItems.length > 0) {
                document.getElementsByClassName(\"noresult\")[0].style.display = \"none\";
            } else {
                document.getElementsByClassName(\"noresult\")[0].style.display = \"block\";
            }
        }

        // length get of list
        var isFirst = list.i == 1;
        var isLast = list.i > list.matchingItems.length - list.page;

        // make the Prev and Nex buttons disabled on first and last pages accordingly
        document.querySelector(\".pagination-prev.disabled\") ?
            document.querySelector(\".pagination-prev.disabled\").classList.remove(\"disabled\") : \"\";
        document.querySelector(\".pagination-next.disabled\") ?
            document.querySelector(\".pagination-next.disabled\").classList.remove(\"disabled\") : \"\";
        // pagination code
        if (isFirst) {
            document.querySelector(\".pagination-prev\").classList.add(\"disabled\");
        }
        if (isLast) {
            document.querySelector(\".pagination-next\").classList.add(\"disabled\");
        }
        // show total numbers of records
        const totalEmploysElement = document.querySelector(\".total-Employs\");
        const totalRecordsElement = employeeTable.listContainer.querySelector(\".total-records\");
        const showingElement = employeeTable.listContainer.querySelector(\".showing\");

        if (totalEmploysElement) totalEmploysElement.innerHTML = employeeTable.items.length;
        if (totalRecordsElement) totalRecordsElement.innerHTML = employeeTable.items.length;

        if (showingElement) showingElement.innerHTML = employeeTable.visibleItems.length;
        document.querySelector(\".pagination-next\").addEventListener(\"click\", function () {
            document.querySelector(\".pagination.listjs-pagination\") ?
                document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\") && document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\").nextElementSibling != null ?
                    document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\").nextElementSibling.children[0].click() : \"\" : \"\";
        });

        document.querySelector(\".pagination-prev\").addEventListener(\"click\", function () {
            document.querySelector(\".pagination.listjs-pagination\") ?
                document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\") && document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\").previousSibling != null ?
                    document.querySelector(\".pagination.listjs-pagination\").querySelector(\".active\").previousSibling.children[0].click() : \"\" : \"\";
        });
        // end pagination code

        //lode js in package
        lucide.createIcons();
        
        //collapseComponent();
        //refreshCallbacks();
    });
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "manpower/apps-attendance.html.twig";
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
        return array (  581 => 512,  282 => 209,  278 => 207,  274 => 206,  270 => 204,  266 => 203,  246 => 186,  242 => 184,  229 => 183,  224 => 182,  222 => 181,  219 => 180,  211 => 174,  205 => 170,  201 => 168,  190 => 167,  185 => 166,  183 => 165,  179 => 163,  169 => 155,  166 => 154,  141 => 131,  127 => 119,  115 => 92,  110 => 75,  78 => 44,  72 => 8,  69 => 7,  65 => 6,  58 => 3,  50 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "manpower/apps-attendance.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\manpower\\apps-attendance.html.twig");
    }
}
