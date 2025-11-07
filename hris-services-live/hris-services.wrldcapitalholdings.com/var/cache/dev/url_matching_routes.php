<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/accountability_records/list' => [[['_route' => 'delete_accountability_recordlist_accountability_records', '_controller' => 'App\\Controller\\AccountabilityRecordsController::list'], null, ['DELETE' => 0, 'GET' => 1], null, false, false, null]],
        '/api/accountability_records/create' => [[['_route' => 'delete_accountability_recordcreate_accountability_record', '_controller' => 'App\\Controller\\AccountabilityRecordsController::create'], null, ['DELETE' => 0, 'POST' => 1], null, false, false, null]],
        '/api/affiliated-companies/create' => [[['_route' => 'create_affiliated_company', '_controller' => 'App\\Controller\\AffiliatedCompanyController::createAffiliatedCompany'], null, ['POST' => 0], null, false, false, null]],
        '/api/affiliated-companies/list' => [[['_route' => 'get_affiliated_companies', '_controller' => 'App\\Controller\\AffiliatedCompanyController::getAffiliatedCompanies'], null, ['GET' => 0], null, false, false, null]],
        '/api/attendance-types' => [[['_route' => 'get_attendance_types', '_controller' => 'App\\Controller\\AttendanceController::getAttendanceTypes'], null, ['GET' => 0], null, false, false, null]],
        '/api/taxconfig/create' => [[['_route' => 'create_taxconfig', '_controller' => 'App\\Controller\\BIRController::createTaxConfig'], null, ['POST' => 0], null, false, false, null]],
        '/api/taxconfig/list' => [[['_route' => 'list_taxconfig', '_controller' => 'App\\Controller\\BIRController::listTaxConfig'], null, ['GET' => 0], null, false, false, null]],
        '/api/taxconfig/import' => [[['_route' => 'import_taxconfig', '_controller' => 'App\\Controller\\BIRController::importTaxConfig'], null, ['POST' => 0], null, false, false, null]],
        '/api/blocks' => [[['_route' => 'view_blocks_list', '_controller' => 'App\\Controller\\BlocksController::viewBlocksList'], null, ['GET' => 0], null, false, false, null]],
        '/check/emp/dtr' => [[['_route' => 'app_check_emp_dtr', '_controller' => 'App\\Controller\\CheckEmpDtrController::check_dtr'], null, null, null, false, false, null]],
        '/api/contract-types/list' => [[['_route' => 'contract_types_list', '_controller' => 'App\\Controller\\ContractTypesController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/contract-types/create' => [[['_route' => 'contract_types_create', '_controller' => 'App\\Controller\\ContractTypesController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/dtr-adjustments/list' => [[['_route' => 'dtr_adjustments_list', '_controller' => 'App\\Controller\\DTRAdjustmentsController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/dtr-adjustments/create' => [[['_route' => 'dtr_adjustments_create', '_controller' => 'App\\Controller\\DTRAdjustmentsController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/dtr/count' => [[['_route' => 'app_dtr_count', '_controller' => 'App\\Controller\\DTRController::countDTR'], null, null, null, false, false, null]],
        '/api/dtr-filter-by-task' => [[['_route' => 'dtr_filter_by_task', '_controller' => 'App\\Controller\\DTRReportController::getRequiredData'], null, ['POST' => 0], null, false, false, null]],
        '/api/dtr-filter-by-project' => [[['_route' => 'dtr_filter_by_project', '_controller' => 'App\\Controller\\DTRReportController::filterDTRByProject'], null, ['POST' => 0], null, false, false, null]],
        '/api/dtr-filter-by-activity' => [[['_route' => 'dtr_filter_by_activity', '_controller' => 'App\\Controller\\DTRReportController::filterDTRByTask'], null, ['POST' => 0], null, false, false, null]],
        '/api/dtr-filter-by-emp' => [[['_route' => 'dtr_filter_by_emp', '_controller' => 'App\\Controller\\DTRReportController::filterDTRByEmployee'], null, ['POST' => 0], null, false, false, null]],
        '/api/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::dashboardModulesCount'], null, null, null, false, false, null]],
        '/api/employee-leaves/list' => [[['_route' => 'app_employee_leaves', '_controller' => 'App\\Controller\\EmployeeLeavesController::view_employee_leaves_list'], null, null, null, false, false, null]],
        '/api/employee-leaves/create' => [[['_route' => 'app_create_employee_leaves', '_controller' => 'App\\Controller\\EmployeeLeavesController::create_employee_leaves'], null, null, null, false, false, null]],
        '/api/employee-leaves/update' => [[['_route' => 'app_update_employee_leaves', '_controller' => 'App\\Controller\\EmployeeLeavesController::update_employee_leaves'], null, ['PUT' => 0], null, false, false, null]],
        '/api/overtime_requests/list' => [[['_route' => 'list_overtime_requests', '_controller' => 'App\\Controller\\EmployeeOvertimeRequestController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/overtime_requests/create' => [[['_route' => 'create_overtime_request', '_controller' => 'App\\Controller\\EmployeeOvertimeRequestController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/employee-payroll' => [
            [['_route' => 'create_employee_payroll', '_controller' => 'App\\Controller\\EmployeePayrollController::createEmployeePayroll'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'list_employee_payrolls', '_controller' => 'App\\Controller\\EmployeePayrollController::listEmployeePayrolls'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/employees-payroll' => [[['_route' => 'api_employees_payroll_list', '_controller' => 'App\\Controller\\EmployeePayrollController::listEmployeesPayroll'], null, ['GET' => 0], null, false, false, null]],
        '/api/employee-payroll-profile/save' => [[['_route' => 'save_employee_payroll_profile', '_controller' => 'App\\Controller\\EmployeePayrollProfileController::saveEmployeePayrollProfile'], null, ['POST' => 0, 'PUT' => 1], null, false, false, null]],
        '/api/employee-payroll-profile/create' => [[['_route' => 'create_employee_payroll_profile', '_controller' => 'App\\Controller\\EmployeePayrollProfileController::createEmployeePayrollProfile'], null, ['POST' => 0], null, false, false, null]],
        '/api/employee/records' => [[['_route' => 'app_employee_records', '_controller' => 'App\\Controller\\EmployeeRecordsController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/employee/additional_record' => [[['_route' => 'view_employee_additional_records', '_controller' => 'App\\Controller\\EmployeeRecordsController::view'], null, ['GET' => 0], null, false, false, null]],
        '/api/employee/upload_attachment' => [[['_route' => 'upload_attachment', '_controller' => 'App\\Controller\\EmployeeRecordsController::uploadAttachment'], null, ['POST' => 0], null, false, false, null]],
        '/api/employee/view_attachment' => [[['_route' => 'view_attachment', '_controller' => 'App\\Controller\\EmployeeRecordsController::viewAttachment'], null, ['GET' => 0], null, false, false, null]],
        '/api/employee/delete_attachment' => [[['_route' => 'delete_attachment', '_controller' => 'App\\Controller\\EmployeeRecordsController::deleteAttachment'], null, ['POST' => 0], null, false, false, null]],
        '/api/holiday/config/list' => [[['_route' => 'app_holiday_config_list', '_controller' => 'App\\Controller\\HolidayConfigController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/holiday/config/create' => [[['_route' => 'app_holiday_config_create', '_controller' => 'App\\Controller\\HolidayConfigController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/holiday-config/create-holidays' => [[['_route' => 'create_multiple_holidays', '_controller' => 'App\\Controller\\HolidayConfigController::createYearlyHolidays'], null, ['POST' => 0], null, false, false, null]],
        '/api/leave-policy/list' => [[['_route' => 'app_leavepolicy_index', '_controller' => 'App\\Controller\\LeavePolicyController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/leave-policy/create' => [[['_route' => 'app_leavepolicy_create', '_controller' => 'App\\Controller\\LeavePolicyController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/leave-policy/update-list' => [[['_route' => 'app_leavepolicy_updatelist', '_controller' => 'App\\Controller\\LeavePolicyController::updateList'], null, ['PUT' => 0], null, false, false, null]],
        '/api/leave/request/list' => [[['_route' => 'app_leave_request_list', '_controller' => 'App\\Controller\\LeaveRequestController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/leave/request/list-approved' => [[['_route' => 'app_leave_request_list_approved', '_controller' => 'App\\Controller\\LeaveRequestController::approvedList'], null, ['GET' => 0], null, false, false, null]],
        '/api/leave/request/create' => [[['_route' => 'app_leave_request_create', '_controller' => 'App\\Controller\\LeaveRequestController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login', '_controller' => 'App\\Controller\\LoginController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/revalidate-session' => [[['_route' => 'api_revalidate_session', '_controller' => 'App\\Controller\\LoginController::revalidateSession'], null, ['POST' => 0], null, false, false, null]],
        '/signup' => [[['_route' => 'api_signup', '_controller' => 'App\\Controller\\LoginController::signup'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/api/usertype/create' => [[['_route' => 'create_usertype', '_controller' => 'App\\Controller\\LoginController::createUsertype'], null, ['POST' => 0], null, false, false, null]],
        '/api/forget_password' => [[['_route' => 'forget_password', '_controller' => 'App\\Controller\\LoginController::forgetPassword'], null, ['POST' => 0], null, false, false, null]],
        '/api/validate_reset_token' => [[['_route' => 'validate_reset_token', '_controller' => 'App\\Controller\\LoginController::validateResetToken'], null, ['POST' => 0], null, false, false, null]],
        '/api/reset_password' => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\LoginController::resetPassword'], null, ['POST' => 0], null, false, false, null]],
        '/api/employee201/create' => [[['_route' => 'create_emp201', '_controller' => 'App\\Controller\\ManpowerController::createEmp201'], null, ['POST' => 0], null, false, false, null]],
        '/api/employee201/create_list' => [[['_route' => 'create_emp201_list', '_controller' => 'App\\Controller\\ManpowerController::createEmp201List'], null, ['POST' => 0], null, false, false, null]],
        '/api/employee201/update' => [[['_route' => 'update_emp201', '_controller' => 'App\\Controller\\ManpowerController::updateEmp201'], null, ['PUT' => 0], null, false, false, null]],
        '/api/employee/bulk_update' => [[['_route' => 'bulk_update', '_controller' => 'App\\Controller\\ManpowerController::bulkUpdateEmployee'], null, ['POST' => 0], null, false, false, null]],
        '/api/employee/bulk_update_v2' => [[['_route' => 'bulk_update_v2', '_controller' => 'App\\Controller\\ManpowerController::bulkUpdateEmployeeV2'], null, ['POST' => 0], null, false, false, null]],
        '/api/employee/archive' => [[['_route' => 'archive_employee', '_controller' => 'App\\Controller\\ManpowerController::archiveEmployee'], null, ['POST' => 0], null, false, false, null]],
        '/api/division' => [[['_route' => 'view_division', '_controller' => 'App\\Controller\\ManpowerController::viewDivision'], null, ['GET' => 0], null, false, false, null]],
        '/api/department' => [[['_route' => 'view_department', '_controller' => 'App\\Controller\\ManpowerController::viewDepartment'], null, ['GET' => 0], null, false, false, null]],
        '/api/department/create' => [[['_route' => 'create_department', '_controller' => 'App\\Controller\\ManpowerController::createDepartment'], null, ['POST' => 0], null, false, false, null]],
        '/api/division/create' => [[['_route' => 'create_division', '_controller' => 'App\\Controller\\ManpowerController::createDivision'], null, ['POST' => 0], null, false, false, null]],
        '/api/division/list' => [[['_route' => 'get_division_list', '_controller' => 'App\\Controller\\ManpowerController::getDivision'], null, ['GET' => 0], null, false, false, null]],
        '/api/employee201' => [[['_route' => 'list_emp201', '_controller' => 'App\\Controller\\ManpowerController::listEmp201'], null, ['GET' => 0], null, false, false, null]],
        '/api/employee201/assignable' => [[['_route' => 'list_assignable_emp201', '_controller' => 'App\\Controller\\ManpowerController::listAssignableEmp201'], null, ['GET' => 0], null, false, false, null]],
        '/api/emp_paginated' => [[['_route' => 'list_emp_paginated', '_controller' => 'App\\Controller\\ManpowerController::empPaginated'], null, ['POST' => 0], null, false, false, null]],
        '/api/worker' => [[['_route' => 'view_worker_list', '_controller' => 'App\\Controller\\ManpowerController::viewWorker'], null, ['GET' => 0], null, false, false, null]],
        '/api/employee/profile' => [[['_route' => 'employee_profile', '_controller' => 'App\\Controller\\ManpowerController::getEmployee'], null, ['GET' => 0], null, false, false, null]],
        '/api/worker_logs' => [[['_route' => 'view_worker_logs', '_controller' => 'App\\Controller\\ManpowerController::viewAllWorkerLogs'], null, ['POST' => 0], null, false, false, null]],
        '/api/employee-projects' => [[['_route' => 'view_employee_projects', '_controller' => 'App\\Controller\\ManpowerController::viewEmployeeProjects'], null, ['GET' => 0], null, false, false, null]],
        '/api/employee-projects/filter' => [[['_route' => 'view_filter_employee_projects', '_controller' => 'App\\Controller\\ManpowerController::viewFilterEmployeeProjects'], null, ['POST' => 0], null, false, false, null]],
        '/api/emp-tasks-list' => [[['_route' => 'view_emp_tasks_list', '_controller' => 'App\\Controller\\ManpowerController::viewListEmpTasks'], null, ['GET' => 0], null, false, false, null]],
        '/api/emp-tasks-emp-id' => [[['_route' => 'view_emp_tasks_emp_id', '_controller' => 'App\\Controller\\ManpowerController::viewEmpTasksUsingEmpId'], null, ['POST' => 0], null, false, false, null]],
        '/api/emp-tasks-dtr/create' => [[['_route' => 'create_emp_dtr_task', '_controller' => 'App\\Controller\\ManpowerController::createDTREmpTask'], null, ['POST' => 0], null, false, false, null]],
        '/api/worker_logs/create' => [[['_route' => 'create_worker_logs', '_controller' => 'App\\Controller\\ManpowerController::createWorkerLogs'], null, ['POST' => 0], null, false, false, null]],
        '/api/model-types' => [
            [['_route' => 'view_model_types', '_controller' => 'App\\Controller\\ModelControllersController::viewModelTypes'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'create_model_types', '_controller' => 'App\\Controller\\ModelControllersController::createModelTypes'], null, ['POST' => 0], null, false, false, null],
        ],
        '/api/notifications/list' => [[['_route' => 'list_notifications', '_controller' => 'App\\Controller\\NotificationsController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/notifications/create' => [[['_route' => 'create_notification', '_controller' => 'App\\Controller\\NotificationsController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/pagibigconfig/create' => [[['_route' => 'create_pagibigconfig', '_controller' => 'App\\Controller\\PagibigController::createPagibigConfig'], null, ['POST' => 0], null, false, false, null]],
        '/api/pagibigconfig/list' => [[['_route' => 'list_pagibigconfig', '_controller' => 'App\\Controller\\PagibigController::listPagibigConfig'], null, ['GET' => 0], null, false, false, null]],
        '/api/generate-payroll' => [[['_route' => 'generate_payroll', '_controller' => 'App\\Controller\\PayrollGenerationController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/generate-payroll-for-all-employees' => [[['_route' => 'generate_all_payroll', '_controller' => 'App\\Controller\\PayrollGenerationController::createPayrollPerEmployee'], null, ['POST' => 0], null, false, false, null]],
        '/api/update-payroll-deduction' => [[['_route' => 'update_payroll_deduction', '_controller' => 'App\\Controller\\PayrollGenerationController::createSalaryAdjustmentAndUpdatePayroll'], null, ['POST' => 0], null, false, false, null]],
        '/api/view-salary-adjustment' => [[['_route' => 'view_salary_adjustment', '_controller' => 'App\\Controller\\PayrollGenerationController::viewSalaryAdjustmentAndPayroll'], null, ['POST' => 0], null, false, false, null]],
        '/api/payroll-groups/create' => [[['_route' => 'payroll_groups_create', '_controller' => 'App\\Controller\\PayrollGroupsController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/all-employee-payroll' => [[['_route' => 'api_employee_payroll_data', '_controller' => 'App\\Controller\\PayrollReportsController::getEmployeePayrollProfiles'], null, ['GET' => 0], null, false, false, null]],
        '/api/timesheet' => [[['_route' => 'get_timesheet_data', '_controller' => 'App\\Controller\\PayrollReportsController::getAllWorkerLogs'], null, ['GET' => 0], null, false, false, null]],
        '/api/payrollsheet' => [[['_route' => 'get_all_employee_payroll_profiles', '_controller' => 'App\\Controller\\PayrollReportsController::getEmployeePayrolls'], null, ['GET' => 0], null, false, false, null]],
        '/api/payrollsheet-with-taxshield' => [[['_route' => 'get_all_employee_payroll_profiles_with_taxshield', '_controller' => 'App\\Controller\\PayrollReportsController::getEmployeePayrollsWithTaxShield'], null, ['GET' => 0], null, false, false, null]],
        '/api/payrollsheet-with-cash-advances' => [[['_route' => 'get_all_employee_payroll_profiles_with_cash_advances', '_controller' => 'App\\Controller\\PayrollReportsController::getEmployeePayrollsWithCashAdvances'], null, ['GET' => 0], null, false, false, null]],
        '/api/payrollsheet-with-salary-adjustment' => [[['_route' => 'get_all_employee_payroll_profiles_with_salary_adjustment', '_controller' => 'App\\Controller\\PayrollReportsController::getEmployeewithSalaryAdjustment'], null, ['GET' => 0], null, false, false, null]],
        '/api/gov-total-dues' => [[['_route' => 'get_gov_dues', '_controller' => 'App\\Controller\\PayrollReportsController::getEmployeePayrollsTotalGovDues'], null, ['GET' => 0], null, false, false, null]],
        '/api/company-gov-total-dues' => [[['_route' => 'get_company_gov_dues', '_controller' => 'App\\Controller\\PayrollReportsController::getCompanyEmployeePayrollsTotalGovDues'], null, ['GET' => 0], null, false, false, null]],
        '/api/get-payroll-summary' => [[['_route' => 'get_payroll_summary', '_controller' => 'App\\Controller\\PayrollReportsController::getPayrollSummaryData'], null, ['GET' => 0], null, false, false, null]],
        '/api/payslip' => [[['_route' => 'app_payslip', '_controller' => 'App\\Controller\\PayslipController::getPayroll'], null, ['POST' => 0], null, false, false, null]],
        '/api/permission' => [[['_route' => 'app_permission', '_controller' => 'App\\Controller\\PermissionController::index'], null, null, null, false, false, null]],
        '/api/philhealthconfig/create' => [[['_route' => 'create_philhealthconfig', '_controller' => 'App\\Controller\\PhilHealthController::createPhilHealthConfig'], null, ['POST' => 0], null, false, false, null]],
        '/api/philhealthconfig/list' => [[['_route' => 'list_philhealthconfig', '_controller' => 'App\\Controller\\PhilHealthController::listPhilHealthConfig'], null, ['GET' => 0], null, false, false, null]],
        '/api/wizard/create' => [[['_route' => 'create_wizard', '_controller' => 'App\\Controller\\ProjectController::createWizard'], null, ['POST' => 0], null, false, false, null]],
        '/api/subdivision' => [[['_route' => 'view_subdivision', '_controller' => 'App\\Controller\\ProjectController::viewSubdivision'], null, ['GET' => 0], null, false, false, null]],
        '/api/subdivision/create' => [[['_route' => 'create_subdivision', '_controller' => 'App\\Controller\\ProjectController::createSubdivision'], null, ['POST' => 0], null, false, false, null]],
        '/api/subdivision/update' => [[['_route' => 'update_subdivision', '_controller' => 'App\\Controller\\ProjectController::updateSubdivision'], null, ['POST' => 0], null, false, false, null]],
        '/api/project/subdivision/update' => [[['_route' => 'project_update_subdivision', '_controller' => 'App\\Controller\\ProjectController::projectUpdateSubdivision'], null, ['POST' => 0], null, false, false, null]],
        '/api/subdivision/delete' => [[['_route' => 'delete_subdivision', '_controller' => 'App\\Controller\\ProjectController::deleteSubdivision'], null, ['POST' => 0], null, false, false, null]],
        '/api/project' => [[['_route' => 'view_project', '_controller' => 'App\\Controller\\ProjectController::viewProject'], null, ['GET' => 0], null, false, false, null]],
        '/api/project/summary' => [[['_route' => 'view_project_summary', '_controller' => 'App\\Controller\\ProjectController::viewProjectSummary'], null, ['GET' => 0], null, false, false, null]],
        '/api/project/create' => [[['_route' => 'create_project', '_controller' => 'App\\Controller\\ProjectController::createProject'], null, ['POST' => 0], null, false, false, null]],
        '/api/project/update' => [[['_route' => 'update_project', '_controller' => 'App\\Controller\\ProjectController::updateProject'], null, ['POST' => 0], null, false, false, null]],
        '/api/project/delete' => [[['_route' => 'delete_project', '_controller' => 'App\\Controller\\ProjectController::deleteProject'], null, ['POST' => 0], null, false, false, null]],
        '/api/category' => [[['_route' => 'view_category', '_controller' => 'App\\Controller\\ProjectController::viewCategory'], null, ['GET' => 0], null, false, false, null]],
        '/api/category/create' => [[['_route' => 'create_category', '_controller' => 'App\\Controller\\ProjectController::createCategory'], null, ['POST' => 0], null, false, false, null]],
        '/api/category/update' => [[['_route' => 'update_category', '_controller' => 'App\\Controller\\ProjectController::updateCategory'], null, ['POST' => 0], null, false, false, null]],
        '/api/category/delete' => [[['_route' => 'delete_category', '_controller' => 'App\\Controller\\ProjectController::deleteCategory'], null, ['POST' => 0], null, false, false, null]],
        '/api/owner' => [[['_route' => 'view_owner', '_controller' => 'App\\Controller\\ProjectController::viewOwner'], null, ['GET' => 0], null, false, false, null]],
        '/api/owner/create' => [[['_route' => 'create_owner', '_controller' => 'App\\Controller\\ProjectController::createOwner'], null, ['POST' => 0], null, false, false, null]],
        '/api/model' => [[['_route' => 'view_model', '_controller' => 'App\\Controller\\ProjectController::viewModel'], null, ['GET' => 0], null, false, false, null]],
        '/api/model/create' => [[['_route' => 'create_model', '_controller' => 'App\\Controller\\ProjectController::createModel'], null, ['POST' => 0], null, false, false, null]],
        '/api/phase' => [[['_route' => 'view_phase', '_controller' => 'App\\Controller\\ProjectController::viewPhase'], null, ['GET' => 0], null, false, false, null]],
        '/api/phase/create' => [[['_route' => 'create_phase', '_controller' => 'App\\Controller\\ProjectController::createPhase'], null, ['POST' => 0], null, false, false, null]],
        '/api/phase/update' => [[['_route' => 'update_phase', '_controller' => 'App\\Controller\\ProjectController::updatePhase'], null, ['POST' => 0], null, false, false, null]],
        '/api/phase/delete' => [[['_route' => 'delete_phase', '_controller' => 'App\\Controller\\ProjectController::deletePhase'], null, ['POST' => 0], null, false, false, null]],
        '/api/subdivision_profile/select' => [[['_route' => 'select_subdivision_profile', '_controller' => 'App\\Controller\\ProjectController::getSubdivisionProfile'], null, ['POST' => 0], null, false, false, null]],
        '/api/project/assign-workers' => [[['_route' => 'assign_workers', '_controller' => 'App\\Controller\\ProjectController::assignWorkersToProjects'], null, ['POST' => 0], null, false, false, null]],
        '/api/project/assign-workers-with-status' => [[['_route' => 'assign_workers_with_status', '_controller' => 'App\\Controller\\ProjectController::assignWorkersWithTaskStatus'], null, ['POST' => 0], null, false, false, null]],
        '/api/sssconfig/create' => [[['_route' => 'create_sssconfig', '_controller' => 'App\\Controller\\SSSController::createSSSConfig'], null, ['POST' => 0], null, false, false, null]],
        '/api/sssconfig/list' => [[['_route' => 'list_sssconfig', '_controller' => 'App\\Controller\\SSSController::listSSSConfig'], null, ['GET' => 0], null, false, false, null]],
        '/api/sssconfig/import' => [[['_route' => 'import_sssconfig', '_controller' => 'App\\Controller\\SSSController::importSSSConfig'], null, ['POST' => 0], null, false, false, null]],
        '/api/salary/adjustment' => [[['_route' => 'app_salary_adjustment_create', '_controller' => 'App\\Controller\\SalaryAdjustmentController::create'], null, ['POST' => 0], null, false, false, null]],
        '/salary/adjustments' => [[['_route' => 'app_salary_adjustment_list', '_controller' => 'App\\Controller\\SalaryAdjustmentController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/selected-employee-leaves/create' => [[['_route' => 'selected_employee_leaves_create', '_controller' => 'App\\Controller\\SelectedEmployeeLeavesController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/selected-employee-leaves/list' => [[['_route' => 'selected_employee_leaves_list', '_controller' => 'App\\Controller\\SelectedEmployeeLeavesController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/shifts' => [[['_route' => 'view_shifts', '_controller' => 'App\\Controller\\ShiftsController::viewShifts'], null, ['GET' => 0], null, false, false, null]],
        '/api/create/shifts' => [[['_route' => 'add_shift', '_controller' => 'App\\Controller\\ShiftsController::addShift'], null, ['POST' => 0], null, false, false, null]],
        '/api/super_admin/connections' => [[['_route' => 'app_super_admin', '_controller' => 'App\\Controller\\SuperAdminController::viewConnections'], null, ['GET' => 0], null, false, false, null]],
        '/api/user-types-permission' => [[['_route' => 'api_user_types', '_controller' => 'App\\Controller\\SuperAdminController::getAllUserTypes'], null, ['GET' => 0], null, false, false, null]],
        '/api/user-types' => [
            [['_route' => 'create_user_type', '_controller' => 'App\\Controller\\SuperAdminController::createUserType'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'view_user_types', '_controller' => 'App\\Controller\\UsersController::viewUserTypes'], null, ['GET' => 0], null, false, false, null],
        ],
        '/api/main-modules' => [[['_route' => 'create_main_modules', '_controller' => 'App\\Controller\\SuperAdminController::createMainModules'], null, ['POST' => 0], null, false, false, null]],
        '/api/sub-modules' => [[['_route' => 'create_sub_modules', '_controller' => 'App\\Controller\\SuperAdminController::createSubModules'], null, ['POST' => 0], null, false, false, null]],
        '/sync/worker' => [[['_route' => 'app_sync_worker', '_controller' => 'App\\Controller\\SyncWorkerController::syncLogs'], null, null, null, false, false, null]],
        '/tax_shield' => [[['_route' => 'app_tax_shield_create', '_controller' => 'App\\Controller\\TaxShieldController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/yearly-holiday/create-list' => [[['_route' => 'yearly_holiday_create', '_controller' => 'App\\Controller\\YearlyHolidayController::create'], null, ['POST' => 0], null, false, false, null]],
        '/api/yearly-holiday/list' => [[['_route' => 'yearly_holiday_list', '_controller' => 'App\\Controller\\YearlyHolidayController::list'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|a(?'
                        .'|ccountability_records/(?'
                            .'|find\\-by\\-emp/([^/]++)(*:101)'
                            .'|update/([^/]++)(*:124)'
                            .'|archive/([^/]++)(*:148)'
                        .')'
                        .'|ffiliated\\-companies/(?'
                            .'|find/([^/]++)(*:194)'
                            .'|update/([^/]++)(*:217)'
                            .'|delete/([^/]++)(*:240)'
                        .')'
                        .'|ttendance(?'
                            .'|\\-types/([^/]++)(*:277)'
                            .'|/update/([^/]++)(*:301)'
                        .')'
                    .')'
                    .'|get\\-taxconfig/([^/]++)(*:334)'
                    .'|taxconfig/(?'
                        .'|update/([^/]++)(*:370)'
                        .'|delete/([^/]++)(*:393)'
                    .')'
                    .'|blocks/(?'
                        .'|([^/]++)(*:420)'
                        .'|update(*:434)'
                    .')'
                    .'|c(?'
                        .'|ontract\\-types/(?'
                            .'|find/([^/]++)(*:478)'
                            .'|update/([^/]++)(*:501)'
                            .'|delete/([^/]++)(*:524)'
                        .')'
                        .'|ategory/subdivision/([^/]++)(*:561)'
                    .')'
                    .'|d(?'
                        .'|tr\\-adjustments/(?'
                            .'|find/([^/]++)(*:606)'
                            .'|update/([^/]++)(*:629)'
                            .'|delete/([^/]++)(*:652)'
                        .')'
                        .'|epartment/(?'
                            .'|update/([^/]++)(*:689)'
                            .'|archive/([^/]++)(*:713)'
                        .')'
                        .'|ivision/(?'
                            .'|update/([^/]++)(*:748)'
                            .'|archive/([^/]++)(*:772)'
                        .')'
                    .')'
                    .'|emp(?'
                        .'|loyee(?'
                            .'|\\-(?'
                                .'|leaves/find/([^/]++)(*:821)'
                                .'|p(?'
                                    .'|ayroll(?'
                                        .'|/([^/]++)(?'
                                            .'|(*:854)'
                                        .')'
                                        .'|\\-profile/(?'
                                            .'|update/([^/]++)(*:891)'
                                            .'|find/([^/]++)(*:912)'
                                        .')'
                                    .')'
                                    .'|rojects(?'
                                        .'|/(?'
                                            .'|([^/]++)(*:944)'
                                            .'|create(*:958)'
                                            .'|u(?'
                                                .'|pdate(*:975)'
                                                .'|nassign(*:990)'
                                            .')'
                                            .'|archive/([^/]++)(*:1015)'
                                        .')'
                                        .'|\\-list/([^/]++)(*:1040)'
                                    .')'
                                .')'
                            .')'
                            .'|/profile_photo_add/([^/]++)(*:1079)'
                            .'|201/emp_proj/([^/]++)(*:1109)'
                        .')'
                        .'|\\-tasks/(?'
                            .'|([^/]++)(*:1138)'
                            .'|create(*:1153)'
                            .'|update/([^/]++)(*:1177)'
                            .'|a(?'
                                .'|djust/([^/]++)(*:1204)'
                                .'|rchive/([^/]++)(*:1228)'
                                .'|pprove/([^/]++)(*:1252)'
                            .')'
                            .'|deny/([^/]++)(*:1275)'
                        .')'
                    .')'
                    .'|o(?'
                        .'|vertime_requests/(?'
                            .'|find\\-by\\-emp/([^/]++)(*:1332)'
                            .'|update(?'
                                .'|/([^/]++)(*:1359)'
                                .'|\\-status/([^/]++)(*:1385)'
                            .')'
                            .'|delete/([^/]++)(*:1410)'
                        .')'
                        .'|wner/(?'
                            .'|update/([^/]++)(*:1443)'
                            .'|archive/([^/]++)(*:1468)'
                        .')'
                    .')'
                    .'|holiday/config/(?'
                        .'|find/([^/]++)(*:1510)'
                        .'|update/([^/]++)(*:1534)'
                        .'|delete/([^/]++)(*:1558)'
                    .')'
                    .'|leave(?'
                        .'|\\-policy/(?'
                            .'|find/([^/]++)(*:1601)'
                            .'|update/([^/]++)(*:1625)'
                            .'|delete/([^/]++)(*:1649)'
                        .')'
                        .'|/request/(?'
                            .'|find/([^/]++)(?'
                                .'|(*:1687)'
                            .')'
                            .'|approve/([^/]++)(*:1713)'
                            .'|delete/([^/]++)(*:1737)'
                        .')'
                    .')'
                    .'|worker(?'
                        .'|_id/([^/]++)(*:1769)'
                        .'|/([^/]++)(*:1787)'
                        .'|logs/get\\-latest\\-time/([^/]++)(*:1827)'
                        .'|\\-overtime/(?'
                            .'|approve/([^/]++)(*:1866)'
                            .'|deny/([^/]++)(*:1888)'
                            .'|update_attendance/([^/]++)(*:1923)'
                        .')'
                    .')'
                    .'|m(?'
                        .'|odel(?'
                            .'|\\-types/(?'
                                .'|([^/]++)(*:1964)'
                                .'|archive/([^/]++)(*:1989)'
                            .')'
                            .'|/(?'
                                .'|delete/([^/]++)(?'
                                    .'|(*:2021)'
                                    .'|(*:2030)'
                                .')'
                                .'|update/([^/]++)(*:2055)'
                            .')'
                        .')'
                        .'|ain\\-modules/([^/]++)(*:2087)'
                    .')'
                    .'|notifications/(?'
                        .'|find\\-by\\-employee/([^/]++)(*:2141)'
                        .'|update/([^/]++)(*:2165)'
                        .'|delete/([^/]++)(*:2189)'
                    .')'
                    .'|p(?'
                        .'|a(?'
                            .'|gibigconfig/(?'
                                .'|find/([^/]++)(*:2235)'
                                .'|update/([^/]++)(*:2259)'
                                .'|delete/([^/]++)(*:2283)'
                            .')'
                            .'|yroll\\-groups/(?'
                                .'|list/([^/]++)(*:2323)'
                                .'|find/([^/]++)(*:2345)'
                                .'|update/([^/]++)(*:2369)'
                                .'|delete/([^/]++)(*:2393)'
                            .')'
                        .')'
                        .'|h(?'
                            .'|ilhealthconfig/(?'
                                .'|find/([^/]++)(*:2439)'
                                .'|update/([^/]++)(*:2463)'
                                .'|delete/([^/]++)(*:2487)'
                            .')'
                            .'|ase/subdivision/([^/]++)(*:2521)'
                        .')'
                        .'|roject\\-emp/([^/]++)(*:2551)'
                    .')'
                    .'|s(?'
                        .'|ssconfig/(?'
                            .'|find/([^/]++)(*:2590)'
                            .'|update/([^/]++)(*:2614)'
                            .'|delete/([^/]++)(*:2638)'
                        .')'
                        .'|elected\\-employee\\-leaves/(?'
                            .'|find/([^/]++)(*:2690)'
                            .'|update/([^/]++)(*:2714)'
                            .'|delete/([^/]++)(*:2738)'
                        .')'
                        .'|hifts/(?'
                            .'|([^/]++)(*:2765)'
                            .'|archive/([^/]++)(*:2790)'
                        .')'
                        .'|traight_time/([^/]++)(*:2821)'
                    .')'
                    .'|user(?'
                        .'|\\-types/(?'
                            .'|delete/([^/]++)(*:2864)'
                            .'|([^/]++)(?'
                                .'|(*:2884)'
                                .'|/archive(*:2901)'
                            .')'
                        .')'
                        .'|/update/([^/]++)(*:2928)'
                    .')'
                    .'|yearly\\-holiday/(?'
                        .'|find/([^/]++)(*:2970)'
                        .'|update/([^/]++)(*:2994)'
                        .'|delete/([^/]++)(*:3018)'
                    .')'
                .')'
                .'|/salary/adjustment/([^/]++)(?'
                    .'|(*:3059)'
                .')'
                .'|/tax_shield/([^/]++)(?'
                    .'|(*:3092)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        101 => [[['_route' => 'delete_accountability_recordshow_accountability_record', '_controller' => 'App\\Controller\\AccountabilityRecordsController::showByEmpId'], ['id'], ['DELETE' => 0, 'GET' => 1], null, false, true, null]],
        124 => [[['_route' => 'delete_accountability_recordupdate_accountability_record', '_controller' => 'App\\Controller\\AccountabilityRecordsController::update'], ['id'], ['DELETE' => 0, 'PUT' => 1], null, false, true, null]],
        148 => [[['_route' => 'delete_accountability_recorddelete_accountability_record', '_controller' => 'App\\Controller\\AccountabilityRecordsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        194 => [[['_route' => 'get_affiliated_company', '_controller' => 'App\\Controller\\AffiliatedCompanyController::getAffiliatedCompany'], ['id'], ['GET' => 0], null, false, true, null]],
        217 => [[['_route' => 'update_affiliated_company', '_controller' => 'App\\Controller\\AffiliatedCompanyController::updateAffiliatedCompany'], ['id'], ['PUT' => 0], null, false, true, null]],
        240 => [[['_route' => 'delete_affiliated_company', '_controller' => 'App\\Controller\\AffiliatedCompanyController::deleteAffiliatedCompany'], ['id'], ['DELETE' => 0], null, false, true, null]],
        277 => [[['_route' => 'get_attendance_type', '_controller' => 'App\\Controller\\AttendanceController::getAttendanceType'], ['id'], ['GET' => 0], null, false, true, null]],
        301 => [[['_route' => 'update_attendance', '_controller' => 'App\\Controller\\AttendanceController::updateAttendance'], ['id'], ['PUT' => 0], null, false, true, null]],
        334 => [[['_route' => 'get_taxconfig', '_controller' => 'App\\Controller\\BIRController::getTaxConfig'], ['id'], ['GET' => 0], null, false, true, null]],
        370 => [[['_route' => 'update_taxconfig', '_controller' => 'App\\Controller\\BIRController::updateTaxConfig'], ['id'], ['PUT' => 0], null, false, true, null]],
        393 => [[['_route' => 'delete_taxconfig', '_controller' => 'App\\Controller\\BIRController::deleteTaxConfig'], ['id'], ['DELETE' => 0], null, false, true, null]],
        420 => [[['_route' => 'view_blocks', '_controller' => 'App\\Controller\\BlocksController::viewBlocks'], ['block_id'], ['GET' => 0], null, false, true, null]],
        434 => [[['_route' => 'update_blocks', '_controller' => 'App\\Controller\\ProjectController::updateBlocks'], [], ['POST' => 0], null, false, false, null]],
        478 => [[['_route' => 'contract_types_show', '_controller' => 'App\\Controller\\ContractTypesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        501 => [[['_route' => 'contract_types_update', '_controller' => 'App\\Controller\\ContractTypesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        524 => [[['_route' => 'contract_types_delete', '_controller' => 'App\\Controller\\ContractTypesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        561 => [[['_route' => 'filter_view_category', '_controller' => 'App\\Controller\\ProjectController::filterViewCategory'], ['subdivision_id'], ['GET' => 0], null, false, true, null]],
        606 => [[['_route' => 'dtr_adjustments_show', '_controller' => 'App\\Controller\\DTRAdjustmentsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        629 => [[['_route' => 'dtr_adjustments_update', '_controller' => 'App\\Controller\\DTRAdjustmentsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        652 => [[['_route' => 'dtr_adjustments_delete', '_controller' => 'App\\Controller\\DTRAdjustmentsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        689 => [[['_route' => 'update_department', '_controller' => 'App\\Controller\\ManpowerController::updateDepartment'], ['id'], ['PUT' => 0], null, false, true, null]],
        713 => [[['_route' => 'archive_department', '_controller' => 'App\\Controller\\ManpowerController::archiveDepartment'], ['id'], ['PATCH' => 0], null, false, true, null]],
        748 => [[['_route' => 'update_division', '_controller' => 'App\\Controller\\ManpowerController::updateDivision'], ['id'], ['PUT' => 0], null, false, true, null]],
        772 => [[['_route' => 'archive_division', '_controller' => 'App\\Controller\\ManpowerController::archiveDivision'], ['id'], ['PATCH' => 0], null, false, true, null]],
        821 => [[['_route' => 'find_employee_leaves', '_controller' => 'App\\Controller\\EmployeeLeavesController::view_employee_leaves'], ['id'], null, null, false, true, null]],
        854 => [
            [['_route' => 'get_employee_payroll', '_controller' => 'App\\Controller\\EmployeePayrollController::getEmployeePayroll'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_employee_payroll', '_controller' => 'App\\Controller\\EmployeePayrollController::updateEmployeePayroll'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'delete_employee_payroll', '_controller' => 'App\\Controller\\EmployeePayrollController::deleteEmployeePayroll'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        891 => [[['_route' => 'update_employee_payroll_profile', '_controller' => 'App\\Controller\\EmployeePayrollProfileController::updateEmployeePayrollProfile'], ['id'], ['PUT' => 0], null, false, true, null]],
        912 => [[['_route' => 'get_employee_payroll_profile', '_controller' => 'App\\Controller\\EmployeePayrollProfileController::getEmployeePayrollProfile'], ['id'], ['GET' => 0], null, false, true, null]],
        944 => [[['_route' => 'view_employee_projects_id', '_controller' => 'App\\Controller\\ManpowerController::viewEmployeeProjectsId'], ['id'], ['GET' => 0], null, false, true, null]],
        958 => [[['_route' => 'create_employee_projects', '_controller' => 'App\\Controller\\ManpowerController::createEmployeeProjects'], [], ['POST' => 0], null, false, false, null]],
        975 => [[['_route' => 'update_employee_projects', '_controller' => 'App\\Controller\\ManpowerController::updateEmployeeProjects'], [], ['POST' => 0], null, false, false, null]],
        990 => [[['_route' => 'unassign_employee_projects', '_controller' => 'App\\Controller\\ManpowerController::unassignEmployeeProjects'], [], ['POST' => 0], null, false, false, null]],
        1015 => [[['_route' => 'archive_employee_projects', '_controller' => 'App\\Controller\\ManpowerController::archiveEmployeeProjects'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1040 => [[['_route' => 'view_employee_projects_list_id', '_controller' => 'App\\Controller\\ManpowerController::viewEmployeeProjectsList'], ['id'], ['POST' => 0], null, false, true, null]],
        1079 => [[['_route' => 'profile_photo_add', '_controller' => 'App\\Controller\\EmployeeRecordsController::addProfilePhoto'], ['empId'], ['POST' => 0], null, false, true, null]],
        1109 => [[['_route' => 'list_emp201_filtered', '_controller' => 'App\\Controller\\ManpowerController::listEmp201Filtered'], ['id'], ['GET' => 0], null, false, true, null]],
        1138 => [[['_route' => 'view_emp_tasks', '_controller' => 'App\\Controller\\ManpowerController::viewEmpTasks'], ['emp_proj_id'], ['GET' => 0], null, false, true, null]],
        1153 => [[['_route' => 'create_emp_task', '_controller' => 'App\\Controller\\ManpowerController::createEmpTask'], [], ['POST' => 0], null, false, false, null]],
        1177 => [[['_route' => 'update_emp_task', '_controller' => 'App\\Controller\\ManpowerController::updateEmpTask'], ['id'], ['POST' => 0], null, false, true, null]],
        1204 => [[['_route' => 'adjust_emp_task', '_controller' => 'App\\Controller\\ManpowerController::adjustEmpTaskHours'], ['id'], ['POST' => 0], null, false, true, null]],
        1228 => [[['_route' => 'archive_emp_task', '_controller' => 'App\\Controller\\ManpowerController::archiveEmpTask'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1252 => [[['_route' => 'approve_emp_task', '_controller' => 'App\\Controller\\ManpowerController::approveEmpTask'], ['id'], ['POST' => 0], null, false, true, null]],
        1275 => [[['_route' => 'deny_emp_task', '_controller' => 'App\\Controller\\ManpowerController::denyEmpTask'], ['id'], ['POST' => 0], null, false, true, null]],
        1332 => [[['_route' => 'show_overtime_request', '_controller' => 'App\\Controller\\EmployeeOvertimeRequestController::showByEmpId'], ['id'], ['GET' => 0], null, false, true, null]],
        1359 => [[['_route' => 'update_overtime_request', '_controller' => 'App\\Controller\\EmployeeOvertimeRequestController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        1385 => [[['_route' => 'update_overtime_request_status', '_controller' => 'App\\Controller\\EmployeeOvertimeRequestController::updateStatus'], ['id'], ['PUT' => 0], null, false, true, null]],
        1410 => [[['_route' => 'delete_overtime_request', '_controller' => 'App\\Controller\\EmployeeOvertimeRequestController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1443 => [[['_route' => 'update_owner', '_controller' => 'App\\Controller\\ProjectController::updateOwner'], ['id'], ['PUT' => 0], null, false, true, null]],
        1468 => [[['_route' => 'archive_owner', '_controller' => 'App\\Controller\\ProjectController::archiveOwner'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1510 => [[['_route' => 'app_holiday_config_show', '_controller' => 'App\\Controller\\HolidayConfigController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1534 => [[['_route' => 'app_holiday_config_update', '_controller' => 'App\\Controller\\HolidayConfigController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        1558 => [[['_route' => 'app_holiday_config_delete', '_controller' => 'App\\Controller\\HolidayConfigController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1601 => [[['_route' => 'app_leavepolicy_show', '_controller' => 'App\\Controller\\LeavePolicyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1625 => [[['_route' => 'app_leavepolicy_update', '_controller' => 'App\\Controller\\LeavePolicyController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        1649 => [[['_route' => 'app_leavepolicy_delete', '_controller' => 'App\\Controller\\LeavePolicyController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1687 => [
            [['_route' => 'find_emp_leave_request', '_controller' => 'App\\Controller\\LeaveRequestController::findEmployeeLeave'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_leave_request_show', '_controller' => 'App\\Controller\\LeaveRequestController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        1713 => [[['_route' => 'app_leave_request_update', '_controller' => 'App\\Controller\\LeaveRequestController::approveLeaveRequest'], ['id'], ['PUT' => 0], null, false, true, null]],
        1737 => [[['_route' => 'app_leave_request_delete', '_controller' => 'App\\Controller\\LeaveRequestController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1769 => [[['_route' => 'view_worker_id', '_controller' => 'App\\Controller\\ManpowerController::viewWorkerId'], ['id'], ['GET' => 0], null, false, true, null]],
        1787 => [[['_route' => 'view_worker_logs_id', '_controller' => 'App\\Controller\\ManpowerController::viewWorkerLogs'], ['id'], ['POST' => 0], null, false, true, null]],
        1827 => [[['_route' => 'get_latest_log_time', '_controller' => 'App\\Controller\\ManpowerController::getLatestLogTime'], ['id'], ['GET' => 0], null, false, true, null]],
        1866 => [[['_route' => 'approve_worker_ot', '_controller' => 'App\\Controller\\WorkersController::approveWorkerOvertime'], ['id'], ['PATCH' => 0], null, false, true, null]],
        1888 => [[['_route' => 'deny_worker_ot', '_controller' => 'App\\Controller\\WorkersController::denyWorkerOvertime'], ['id'], ['PATCH' => 0], null, false, true, null]],
        1923 => [[['_route' => 'update_worker_attendance', '_controller' => 'App\\Controller\\WorkersController::updateWorkerLogsByAttendance'], ['id'], ['POST' => 0], null, false, true, null]],
        1964 => [[['_route' => 'update_model_types', '_controller' => 'App\\Controller\\ModelControllersController::updateModelTypes'], ['id'], ['PUT' => 0], null, false, true, null]],
        1989 => [[['_route' => 'archive_model_types', '_controller' => 'App\\Controller\\ModelControllersController::archiveModelTypes'], ['id'], ['PATCH' => 0], null, false, true, null]],
        2021 => [[['_route' => 'app_model_type', '_controller' => 'App\\Controller\\ModelTypeController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2030 => [[['_route' => 'delete_model', '_controller' => 'App\\Controller\\ProjectController::deleteModel'], ['model_id'], ['POST' => 0], null, false, true, null]],
        2055 => [[['_route' => 'update_model', '_controller' => 'App\\Controller\\ProjectController::updateModel'], ['model_id'], ['POST' => 0], null, false, true, null]],
        2087 => [[['_route' => 'update_main_modules', '_controller' => 'App\\Controller\\SuperAdminController::updateMainModules'], ['id'], ['PUT' => 0], null, false, true, null]],
        2141 => [[['_route' => 'find_notification', '_controller' => 'App\\Controller\\NotificationsController::findByEmployee'], ['userId'], ['GET' => 0], null, false, true, null]],
        2165 => [[['_route' => 'update_notification', '_controller' => 'App\\Controller\\NotificationsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        2189 => [[['_route' => 'delete_notification', '_controller' => 'App\\Controller\\NotificationsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2235 => [[['_route' => 'get_pagibigconfig', '_controller' => 'App\\Controller\\PagibigController::getPagibigConfig'], ['id'], ['GET' => 0], null, false, true, null]],
        2259 => [[['_route' => 'update_pagibigconfig', '_controller' => 'App\\Controller\\PagibigController::updatePagibigConfig'], ['id'], ['PUT' => 0], null, false, true, null]],
        2283 => [[['_route' => 'delete_pagibigconfig', '_controller' => 'App\\Controller\\PagibigController::deletePagibigConfig'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2323 => [[['_route' => 'payroll_groups_list', '_controller' => 'App\\Controller\\PayrollGroupsController::list'], ['year'], ['GET' => 0], null, false, true, null]],
        2345 => [[['_route' => 'payroll_groups_show', '_controller' => 'App\\Controller\\PayrollGroupsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2369 => [[['_route' => 'payroll_groups_update', '_controller' => 'App\\Controller\\PayrollGroupsController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        2393 => [[['_route' => 'payroll_groups_delete', '_controller' => 'App\\Controller\\PayrollGroupsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2439 => [[['_route' => 'get_philhealthconfig', '_controller' => 'App\\Controller\\PhilHealthController::getPhilHealthConfig'], ['id'], ['GET' => 0], null, false, true, null]],
        2463 => [[['_route' => 'update_philhealthconfig', '_controller' => 'App\\Controller\\PhilHealthController::updatePhilHealthConfig'], ['id'], ['PUT' => 0], null, false, true, null]],
        2487 => [[['_route' => 'delete_philhealthconfig', '_controller' => 'App\\Controller\\PhilHealthController::deletePhilHealthConfig'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2521 => [[['_route' => 'filtered_view_phase', '_controller' => 'App\\Controller\\ProjectController::filterViewPhase'], ['subdivision_id'], ['GET' => 0], null, false, true, null]],
        2551 => [[['_route' => 'view_project-emp', '_controller' => 'App\\Controller\\ProjectController::viewProjectwithEmpRecord'], ['id'], ['GET' => 0], null, false, true, null]],
        2590 => [[['_route' => 'get_sssconfig', '_controller' => 'App\\Controller\\SSSController::getSSSConfig'], ['id'], ['GET' => 0], null, false, true, null]],
        2614 => [[['_route' => 'update_sssconfig', '_controller' => 'App\\Controller\\SSSController::updateSSSConfig'], ['id'], ['PUT' => 0], null, false, true, null]],
        2638 => [[['_route' => 'delete_sssconfig', '_controller' => 'App\\Controller\\SSSController::deleteSSSConfig'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2690 => [[['_route' => 'selected_employee_leaves_read', '_controller' => 'App\\Controller\\SelectedEmployeeLeavesController::read'], ['id'], ['GET' => 0], null, false, true, null]],
        2714 => [[['_route' => 'selected_employee_leaves_update', '_controller' => 'App\\Controller\\SelectedEmployeeLeavesController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        2738 => [[['_route' => 'selected_employee_leaves_delete', '_controller' => 'App\\Controller\\SelectedEmployeeLeavesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2765 => [[['_route' => 'update_shift', '_controller' => 'App\\Controller\\ShiftsController::updateShift'], ['id'], ['PUT' => 0], null, false, true, null]],
        2790 => [[['_route' => 'archive_shift', '_controller' => 'App\\Controller\\ShiftsController::archiveShift'], ['id'], ['PATCH' => 0], null, false, true, null]],
        2821 => [[['_route' => 'straight_time', '_controller' => 'App\\Controller\\WorkersController::addLunchBreakTimeToRendered'], ['id'], ['PATCH' => 0], null, false, true, null]],
        2864 => [[['_route' => 'delete_user_type', '_controller' => 'App\\Controller\\SuperAdminController::deleteUserType'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2884 => [[['_route' => 'update_user_type', '_controller' => 'App\\Controller\\UsersController::updateUserType'], ['id'], ['PUT' => 0], null, false, true, null]],
        2901 => [[['_route' => 'archive_user_type', '_controller' => 'App\\Controller\\UsersController::archiveUserType'], ['id'], ['PATCH' => 0], null, false, false, null]],
        2928 => [[['_route' => 'update_user', '_controller' => 'App\\Controller\\UsersController::updateUser'], ['id'], null, null, false, true, null]],
        2970 => [[['_route' => 'yearly_holiday_read', '_controller' => 'App\\Controller\\YearlyHolidayController::read'], ['id'], ['GET' => 0], null, false, true, null]],
        2994 => [[['_route' => 'yearly_holiday_update', '_controller' => 'App\\Controller\\YearlyHolidayController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        3018 => [[['_route' => 'yearly_holiday_delete', '_controller' => 'App\\Controller\\YearlyHolidayController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        3059 => [
            [['_route' => 'app_salary_adjustment_show', '_controller' => 'App\\Controller\\SalaryAdjustmentController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_salary_adjustment_update', '_controller' => 'App\\Controller\\SalaryAdjustmentController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_salary_adjustment_delete', '_controller' => 'App\\Controller\\SalaryAdjustmentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        3092 => [
            [['_route' => 'app_tax_shield_read', '_controller' => 'App\\Controller\\TaxShieldController::read'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_tax_shield_update', '_controller' => 'App\\Controller\\TaxShieldController::update'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'app_tax_shield_delete', '_controller' => 'App\\Controller\\TaxShieldController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
