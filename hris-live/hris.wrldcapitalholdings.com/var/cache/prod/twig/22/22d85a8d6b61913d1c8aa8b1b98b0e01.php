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

/* super_admin/roles_permission.html.twig */
class __TwigTemplate_b3c1f3b0436d72339791fd4e06b3c085 extends Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "super_admin/roles_permission.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "User Roles and Permission";
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
        yield $this->extensions['Symfony\UX\TwigComponent\Twig\ComponentExtension']->render("breadcrumb", ["pagetitle" => "User Roles and Permission", "title" => "User Roles and Permission"]);
        yield "

                <div class=\"grid grid-cols-1 gap-x-5 xl:grid-cols-12\">
                    <div class=\"xl:col-span-12\">
                        <div class=\"card\" id=\"divisionTable\">
                            <div class=\"card-body\">
                                <div class=\"flex items-center\">
                                    <h6 class=\"text-15 grow\">User Roles List</h6>
                                    <div class=\"shrink-0\">
                                        <button data-modal-target=\"addUserRoleModal\" type=\"button\" class=\"text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\"><i data-lucide=\"plus\" class=\"inline-block size-4\"></i> <span class=\"align-middle\">Add User Role</span></button>
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
                            <div class=\"card-body\">
                                <div class=\"-mx-5 -mb-5 overflow-x-auto\">
                                    <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                                        <thead class=\"text-left\">
                                            <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"username\">Name</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"dbname\">Code</th>
                                                <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold\">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"list\">
                                        ";
        // line 41
        yield "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["user_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user_types_item"]) {
            // line 42
            yield "                                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "user_code", [], "any", false, false, false, 42) != "")) {
                // line 43
                yield "                                                    <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 username\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "name", [], "any", false, false, false, 44), "html", null, true);
                yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 dbname\">";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "user_code", [], "any", false, false, false, 45), "html", null, true);
                yield "</td>
                                                        <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5\">
                                                            <div class=\"relative dropdown\">
                                                                <button class=\"flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20\" id=\"usersAction1\" data-bs-toggle=\"dropdown\"><i data-lucide=\"more-horizontal\" class=\"size-3\"></i></button>
                                                                <ul class=\"absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600\" aria-labelledby=\"usersAction1\">
                                                                    <li>
                                                                        <a data-modal-target=\"editPermission";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "id", [], "any", false, false, false, 51), "html", null, true);
                yield "\" class=\"block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"file-edit\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Edit Permission</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <a data-modal-target=\"deleteModal";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "id", [], "any", false, false, false, 54), "html", null, true);
                yield "\" class=\"block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200\" href=\"#!\"><i data-lucide=\"trash-2\" class=\"inline-block size-3 ltr:mr-1 rtl:ml-1\"></i> <span class=\"align-middle\">Delete</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                ";
            }
            // line 61
            yield "                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_types_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
                                ";
        // line 109
        yield "                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end grid-->

        

<div id=\"addUserRoleModal\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Add User Role</h5>
            <button data-modal-close=\"addUserRoleModal\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_user_roles");
        yield "\" method=\"post\">
            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                    <label for=\"name\" class=\"inline-block mb-2 text-base font-medium\">Name</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"name\" name=\"name\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter Name\" required>
                </div>
                <div class=\"xl:col-span-12\">
                    <label for=\"code\" class=\"inline-block mb-2 text-base font-medium\">Code</label>
                    <span class=\"text-red-500\">*</span>
                    <input type=\"text\" id=\"code\" name=\"code\" class=\"form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200\" placeholder=\"Enter code\" required>
                </div>
            </div>
                <div class=\"flex justify-end gap-2 mt-4\">
                    <button type=\"reset\" id=\"close-modal\" data-modal-close=\"addUserRoleModal\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                    <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
                </div>
            </form>
        </div>
    </div>
</div><!--end add user-->

";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["user_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user_types_item"]) {
            // line 146
            yield "<div id=\"editPermission";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "id", [], "any", false, false, false, 146), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show \">
    <div class=\"w-screen md:w-[40rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"flex items-center justify-between p-4 border-b dark:border-zink-300/20\">
            <h5 class=\"text-16\">Edit Permission</h5>
            <button data-modal-close=\"editPermission";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "id", [], "any", false, false, false, 150), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-400 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
        </div>
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto\">
            <form action=\"";
            // line 153
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_role_access");
            yield "\" method=\"post\">
            ";
            // line 154
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "main_module", [], "any", false, false, false, 154)) {
                // line 155
                yield "                <input type=\"hidden\" name=\"module_id\" id=\"module_id\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "main_module", [], "any", false, false, false, 155), "id", [], "any", false, false, false, 155), "html", null, true);
                yield "\">
            ";
            } else {
                // line 157
                yield "                <input type=\"hidden\" name=\"module_id\" id=\"module_id\" value=\"\">
            ";
            }
            // line 159
            yield "            <div class=\"grid grid-cols-1 gap-4 xl:grid-cols-12\">
                <div class=\"xl:col-span-12\">
                ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "main_module", [], "any", false, false, false, 161));
            foreach ($context['_seq'] as $context["main_module_key"] => $context["main_module_val"]) {
                // line 162
                yield "                    ";
                if ((($context["main_module_key"] != "id") && ($context["main_module_key"] != "submodule"))) {
                    // line 163
                    yield "                        <table class=\"w-full border-separate table-custom border-spacing-y-1 whitespace-nowrap\">
                            <thead class=\"text-left\">
                                ";
                    // line 165
                    $context["main_module_names"] = ["administration" => "Administration", "humanres" => "Human Resources", "project" => "Project Management", "payroll" => "Payroll Administration", "emp_leaves" => "Leave Administration"];
                    // line 172
                    yield "
                                <tr class=\"relative rounded-md bg-slate-100 dark:bg-zink-600 after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort\" data-sort=\"username\">";
                    // line 174
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, ($context["main_module_names"] ?? null), $context["main_module_key"], [], "array", true, true, false, 174) &&  !(null === (($__internal_compile_0 = ($context["main_module_names"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["main_module_key"]] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["main_module_names"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["main_module_key"]] ?? null) : null)) : ($context["main_module_key"])), "html", null, true);
                    yield "</th>
                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort text-center\" data-sort=\"dbname\">View<br>
                                        <input type=\"checkbox\" class=\"main-checkbox view-checkbox\" data-module=\"";
                    // line 176
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                    yield "\" name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                    yield "_can_view\" id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                    yield "_can_view\" ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["main_module_val"], "can_view", [], "any", false, false, false, 176)) {
                        yield "checked";
                    }
                    yield ">
                                    </th>
                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort text-center\" data-sort=\"dbname\">Add<br>
                                        <input type=\"checkbox\" class=\"main-checkbox add-checkbox\" data-module=\"";
                    // line 179
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                    yield "\" name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                    yield "_can_add\" id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                    yield "_can_add\" ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["main_module_val"], "can_add", [], "any", false, false, false, 179)) {
                        yield "checked";
                    }
                    yield ">
                                    </th>
                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort text-center\" data-sort=\"dbname\">Edit<br>
                                        <input type=\"checkbox\" class=\"main-checkbox edit-checkbox\" data-module=\"";
                    // line 182
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                    yield "\" name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                    yield "_can_edit\" id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                    yield "_can_edit\" ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["main_module_val"], "can_edit", [], "any", false, false, false, 182)) {
                        yield "checked";
                    }
                    yield ">
                                    </th>
                                    <th class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 font-semibold sort text-center\" data-sort=\"dbname\">Delete<br>
                                        <input type=\"checkbox\" class=\"main-checkbox delete-checkbox\" data-module=\"";
                    // line 185
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                    yield "\" name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                    yield "_can_delete\" id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                    yield "_can_delete\" ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["main_module_val"], "can_delete", [], "any", false, false, false, 185)) {
                        yield "checked";
                    }
                    yield ">
                                    </th>
                                </tr>
                            </thead>
                            <tbody class=\"list\">
                                    ";
                    // line 190
                    $context["submodule_id"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "main_module", [], "any", false, false, false, 190), "submodule", [], "any", false, false, false, 190), "id", [], "any", false, false, false, 190);
                    // line 191
                    yield "                                    ";
                    $context["submodule_names"] = ["daily_time_record" => "Daily Time Record", "subdivision" => "Subdivision", "division" => "Division", "department" => "Department", "phase" => "Phase", "owner" => "Owner", "models" => "Models", "model_types" => "Model Types", "projects" => "Projects", "emp_project" => "Employee Projects", "emp_settings" => "User Settings", "emp_list" => "Employees", "shifts" => "Shifts", "sss_config" => "SSS Config", "pagibig_config" => "Pagibig Config", "bir_config" => "BIR Config", "philhealth_config" => "PhilHealth Config", "payroll" => "Payroll", "payroll_reports" => "Payroll Reports", "leave_policy" => "Leave Policy", "emp_leaves" => "Employee Leaves", "holiday_config" => "Holiday Config", "leave_request" => "Leave Request", "leave_calendar" => "Leave Calendar"];
                    // line 218
                    yield "
                                    ";
                    // line 219
                    if (($context["main_module_key"] === "project")) {
                        // line 220
                        yield "                                    ";
                        $context["allowed_projects_submodules"] = ["projects", "emp_project"];
                        // line 221
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "main_module", [], "any", false, false, false, 221), "submodule", [], "any", false, false, false, 221));
                        foreach ($context['_seq'] as $context["submodule_key"] => $context["submodule_val"]) {
                            // line 222
                            yield "                                            ";
                            if (CoreExtension::inFilter($context["submodule_key"], ($context["allowed_projects_submodules"] ?? null))) {
                                // line 223
                                yield "                                            <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 username\">";
                                // line 224
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = ($context["submodule_names"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["submodule_key"]] ?? null) : null), "html", null, true);
                                yield "</td>
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                    <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 226
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_view\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_view\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_view\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_view", [], "any", false, false, false, 226)) {
                                    yield "checked";
                                }
                                yield ">
                                                </td>
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                    <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 229
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_add\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_add\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_add\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_add", [], "any", false, false, false, 229)) {
                                    yield "checked";
                                }
                                yield ">
                                                </td>
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                    <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 232
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_edit\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_edit\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_edit\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_edit", [], "any", false, false, false, 232)) {
                                    yield "checked";
                                }
                                yield ">
                                                </td>
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                    <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 235
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_delete\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_delete\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_delete\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_delete", [], "any", false, false, false, 235)) {
                                    yield "checked";
                                }
                                yield ">
                                                </td>
                                            </tr>
                                            ";
                            }
                            // line 239
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['submodule_key'], $context['submodule_val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 240
                        yield "                                    ";
                    }
                    // line 241
                    yield "
                                    ";
                    // line 242
                    if (($context["main_module_key"] === "humanres")) {
                        // line 243
                        yield "                                    ";
                        $context["allowed_humanres_submodules"] = ["emp_list", "daily_time_record"];
                        // line 244
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "main_module", [], "any", false, false, false, 244), "submodule", [], "any", false, false, false, 244));
                        foreach ($context['_seq'] as $context["submodule_key"] => $context["submodule_val"]) {
                            // line 245
                            yield "                                            ";
                            if (CoreExtension::inFilter($context["submodule_key"], ($context["allowed_humanres_submodules"] ?? null))) {
                                // line 246
                                yield "                                            <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 username\">";
                                // line 247
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_3 = ($context["submodule_names"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["submodule_key"]] ?? null) : null), "html", null, true);
                                yield "</td>
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                    <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 249
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_view\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_view\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_view\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_view", [], "any", false, false, false, 249)) {
                                    yield "checked";
                                }
                                yield ">
                                                </td>
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                    <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 252
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_add\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_add\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_add\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_add", [], "any", false, false, false, 252)) {
                                    yield "checked";
                                }
                                yield ">
                                                </td>
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                    <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 255
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_edit\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_edit\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_edit\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_edit", [], "any", false, false, false, 255)) {
                                    yield "checked";
                                }
                                yield ">
                                                </td>
                                                <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                    <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 258
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_delete\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_delete\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_delete\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_delete", [], "any", false, false, false, 258)) {
                                    yield "checked";
                                }
                                yield ">
                                                </td>
                                            </tr>
                                            ";
                            }
                            // line 262
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['submodule_key'], $context['submodule_val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 263
                        yield "                                    ";
                    }
                    // line 264
                    yield "
                                    ";
                    // line 265
                    if (($context["main_module_key"] === "administration")) {
                        // line 266
                        yield "                                        ";
                        $context["allowed_admin_submodules"] = ["subdivision", "division", "department", "phase", "owner", "models", "model_types", "emp_settings", "shifts"];
                        // line 267
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "main_module", [], "any", false, false, false, 267), "submodule", [], "any", false, false, false, 267));
                        foreach ($context['_seq'] as $context["submodule_key"] => $context["submodule_val"]) {
                            // line 268
                            yield "                                            ";
                            if (CoreExtension::inFilter($context["submodule_key"], ($context["allowed_admin_submodules"] ?? null))) {
                                // line 269
                                yield "                                                <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 username\">
                                                        ";
                                // line 271
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_4 = ($context["submodule_names"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[$context["submodule_key"]] ?? null) : null), "html", null, true);
                                yield "
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                        <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 274
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_view\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_view\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_view\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_view", [], "any", false, false, false, 274)) {
                                    yield "checked";
                                }
                                yield ">
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                        <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 277
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_add\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_add\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_add\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_add", [], "any", false, false, false, 277)) {
                                    yield "checked";
                                }
                                yield ">
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                        <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 280
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_edit\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_edit\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_edit\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_edit", [], "any", false, false, false, 280)) {
                                    yield "checked";
                                }
                                yield ">
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                        <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 283
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_delete\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_delete\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_delete\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_delete", [], "any", false, false, false, 283)) {
                                    yield "checked";
                                }
                                yield ">
                                                    </td>
                                                </tr>
                                            ";
                            }
                            // line 287
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['submodule_key'], $context['submodule_val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 288
                        yield "                                    ";
                    }
                    // line 289
                    yield "                                    
                                    ";
                    // line 290
                    if (($context["main_module_key"] === "payroll")) {
                        // line 291
                        yield "                                        ";
                        $context["allowed_payroll_submodules"] = ["sss_config", "pagibig_config", "bir_config", "philhealth_config", "payroll", "payroll_reports"];
                        // line 292
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "main_module", [], "any", false, false, false, 292), "submodule", [], "any", false, false, false, 292));
                        foreach ($context['_seq'] as $context["submodule_key"] => $context["submodule_val"]) {
                            // line 293
                            yield "                                            ";
                            if (CoreExtension::inFilter($context["submodule_key"], ($context["allowed_payroll_submodules"] ?? null))) {
                                // line 294
                                yield "                                                <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 username\">
                                                        ";
                                // line 296
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_5 = ($context["submodule_names"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["submodule_key"]] ?? null) : null), "html", null, true);
                                yield "
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                        <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 299
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_view\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_view\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_view\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_view", [], "any", false, false, false, 299)) {
                                    yield "checked";
                                }
                                yield ">
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                        <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 302
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_add\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_add\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_add\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_add", [], "any", false, false, false, 302)) {
                                    yield "checked";
                                }
                                yield ">
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                        <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 305
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_edit\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_edit\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_edit\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_edit", [], "any", false, false, false, 305)) {
                                    yield "checked";
                                }
                                yield ">
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                        <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 308
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_delete\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_delete\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_delete\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_delete", [], "any", false, false, false, 308)) {
                                    yield "checked";
                                }
                                yield ">
                                                    </td>
                                                </tr>
                                            ";
                            }
                            // line 312
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['submodule_key'], $context['submodule_val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 313
                        yield "                                    ";
                    }
                    // line 314
                    yield "
                                    ";
                    // line 315
                    if (($context["main_module_key"] === "emp_leaves")) {
                        // line 316
                        yield "                                        ";
                        $context["allowed_leaves_submodules"] = ["leave_policy", "emp_leaves", "holiday_config", "leave_request", "leave_calendar"];
                        // line 317
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "main_module", [], "any", false, false, false, 317), "submodule", [], "any", false, false, false, 317));
                        foreach ($context['_seq'] as $context["submodule_key"] => $context["submodule_val"]) {
                            // line 318
                            yield "                                            ";
                            if (CoreExtension::inFilter($context["submodule_key"], ($context["allowed_leaves_submodules"] ?? null))) {
                                // line 319
                                yield "                                                <tr class=\"relative rounded-md after:absolute ltr:after:border-l-2 rtl:after:border-r-2 ltr:after:left-0 rtl:after:right-0 after:top-0 after:bottom-0 after:border-transparent [&.active]:after:border-custom-500 [&.active]:bg-slate-100 dark:[&.active]:bg-zink-600\">
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 username\">
                                                        ";
                                // line 321
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_6 = ($context["submodule_names"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[$context["submodule_key"]] ?? null) : null), "html", null, true);
                                yield "
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                        <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 324
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_view\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_view\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_view\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_view", [], "any", false, false, false, 324)) {
                                    yield "checked";
                                }
                                yield ">
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                        <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 327
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_add\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_add\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_add\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_add", [], "any", false, false, false, 327)) {
                                    yield "checked";
                                }
                                yield ">
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                        <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 330
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_edit\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_edit\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_edit\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_edit", [], "any", false, false, false, 330)) {
                                    yield "checked";
                                }
                                yield ">
                                                    </td>
                                                    <td class=\"px-3.5 py-2.5 first:pl-5 last:pr-5 text-center dbname\">
                                                        <input type=\"checkbox\" class=\"sub-checkbox ";
                                // line 333
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["main_module_key"], "html", null, true);
                                yield "_delete\" name=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_delete\" id=\"";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["submodule_key"], "html", null, true);
                                yield "_can_delete\" ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["submodule_val"], "can_delete", [], "any", false, false, false, 333)) {
                                    yield "checked";
                                }
                                yield ">
                                                    </td>
                                                </tr>
                                            ";
                            }
                            // line 337
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['submodule_key'], $context['submodule_val'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 338
                        yield "                                    ";
                    }
                    // line 339
                    yield "                            </tbody>
                        </table>
                    ";
                }
                // line 342
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['main_module_key'], $context['main_module_val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            yield "                </div>
                </div>
            </div>
            <div class=\"flex justify-end gap-2 mt-4 p-4\">
                <button type=\"reset\" id=\"close-modal\" data-modal-close=\"editPermission";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "id", [], "any", false, false, false, 347), "html", null, true);
            yield "\" class=\"text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10\">Cancel</button>
                <button type=\"submit\" class=\"text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20\">Save</button>
            </div>
        </div>
        </form>
</div><!--end add user-->

<div id=\"deleteModal";
            // line 354
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "id", [], "any", false, false, false, 354), "html", null, true);
            yield "\" modal-center class=\"fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show\">
    <div class=\"w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600\">
        <div class=\"max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8\">
            <div class=\"float-right\">
                <button data-modal-close=\"deleteModal";
            // line 358
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "id", [], "any", false, false, false, 358), "html", null, true);
            yield "\" class=\"transition-all duration-200 ease-linear text-slate-500 hover:text-red-500\"><i data-lucide=\"x\" class=\"size-5\"></i></button>
            </div>
            <img src=\"";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/delete.png"), "html", null, true);
            yield "\" alt=\"\" class=\"block h-12 mx-auto\">
            <form action=\"";
            // line 361
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user_roles");
            yield "\" method=\"post\">
            <div class=\"mt-5 text-center\">
                <input type=\"hidden\" name=\"user_types_item_id\" value=\"";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "id", [], "any", false, false, false, 363), "html", null, true);
            yield "\">
                <h5 class=\"mb-1\">Are you sure?</h5>
                <p class=\"text-slate-500 dark:text-zink-200\">Are you certain you want to delete this record?</p>
                <div class=\"flex justify-center gap-2 mt-6\">
                    <button type=\"reset\" data-modal-close=\"deleteModal";
            // line 367
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user_types_item"], "id", [], "any", false, false, false, 367), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user_types_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 376
        yield "
";
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["status"], "method", false, false, false, 377));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 378
            yield "    <div class=\"hidden\" id=\"status\" data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 380
        yield "
";
        return; yield '';
    }

    // line 383
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 384
        yield "
<script src=\"";
        // line 385
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.js/list.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 386
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/list.pagination.js/list.pagination.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/pages/apps-list-init.js"), "html", null, true);
        yield "\"></script>

<!-- App js -->
<script src=\"";
        // line 390
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
";
        // line 392
        yield "<script>
\$(document).ready(function () {

    const status = \$('#status');
    if (status.length) {
        if (status.data('status') == 'success') {
            // The element exists
            Toastify({
                newWindow: true,
                text: 'Division added successfully',
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
                text: 'Division not added, something went wrong.',
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

    \$('input.main-checkbox').on('change', function () {
        var module = \$(this).data('module');
        var isChecked = \$(this).is(':checked');

        // Check/uncheck all related sub-checkboxes based on action type
        if (\$(this).hasClass('view-checkbox')) {
            \$('input.sub-checkbox.' + module + '_view').prop('checked', isChecked);
        } else if (\$(this).hasClass('add-checkbox')) {
            \$('input.sub-checkbox.' + module + '_add').prop('checked', isChecked);
        } else if (\$(this).hasClass('edit-checkbox')) {
            \$('input.sub-checkbox.' + module + '_edit').prop('checked', isChecked);
        } else if (\$(this).hasClass('delete-checkbox')) {
            \$('input.sub-checkbox.' + module + '_delete').prop('checked', isChecked);
        }
    });
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
        return "super_admin/roles_permission.html.twig";
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
        return array (  896 => 392,  892 => 390,  886 => 387,  882 => 386,  878 => 385,  875 => 384,  871 => 383,  865 => 380,  856 => 378,  852 => 377,  849 => 376,  834 => 367,  827 => 363,  822 => 361,  818 => 360,  813 => 358,  806 => 354,  796 => 347,  790 => 343,  784 => 342,  779 => 339,  776 => 338,  770 => 337,  755 => 333,  741 => 330,  727 => 327,  713 => 324,  707 => 321,  703 => 319,  700 => 318,  695 => 317,  692 => 316,  690 => 315,  687 => 314,  684 => 313,  678 => 312,  663 => 308,  649 => 305,  635 => 302,  621 => 299,  615 => 296,  611 => 294,  608 => 293,  603 => 292,  600 => 291,  598 => 290,  595 => 289,  592 => 288,  586 => 287,  571 => 283,  557 => 280,  543 => 277,  529 => 274,  523 => 271,  519 => 269,  516 => 268,  511 => 267,  508 => 266,  506 => 265,  503 => 264,  500 => 263,  494 => 262,  479 => 258,  465 => 255,  451 => 252,  437 => 249,  432 => 247,  429 => 246,  426 => 245,  421 => 244,  418 => 243,  416 => 242,  413 => 241,  410 => 240,  404 => 239,  389 => 235,  375 => 232,  361 => 229,  347 => 226,  342 => 224,  339 => 223,  336 => 222,  331 => 221,  328 => 220,  326 => 219,  323 => 218,  320 => 191,  318 => 190,  302 => 185,  288 => 182,  274 => 179,  260 => 176,  255 => 174,  251 => 172,  249 => 165,  245 => 163,  242 => 162,  238 => 161,  234 => 159,  230 => 157,  224 => 155,  222 => 154,  218 => 153,  212 => 150,  204 => 146,  200 => 145,  175 => 123,  159 => 109,  147 => 62,  141 => 61,  131 => 54,  125 => 51,  116 => 45,  112 => 44,  109 => 43,  106 => 42,  101 => 41,  64 => 6,  61 => 5,  57 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "super_admin/roles_permission.html.twig", "C:\\xampp\\htdocs\\HRIS\\hris-live\\hris.wrldcapitalholdings.com\\templates\\super_admin\\roles_permission.html.twig");
    }
}
