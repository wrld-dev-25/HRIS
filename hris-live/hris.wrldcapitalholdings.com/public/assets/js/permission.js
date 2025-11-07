document.addEventListener('DOMContentLoaded', function () {
    applyPermissionsToDOM();
});

function applyPermissionsToDOM() {
    var main_permissions = JSON.parse(document.body.getAttribute('data-user-permissions'));
    var sub_permissions = JSON.parse(document.body.getAttribute('data-user-sub-permission'));
    
    console.log(sub_permissions);

    // Utility function to hide elements or remove classes
    function hideOrModifyElements(selector, modifyClass) {
        document.querySelectorAll(selector).forEach(function (element) {
            if (modifyClass) {
                element.classList.remove(modifyClass); // Remove the specified class
            } else {
                element.style.display = 'none'; // Hide the element
            }
        });
    }

    // Helper function to apply permissions
    function applyPermissions(permissions, moduleName) {
        if (permissions[moduleName]) {
            const canView = permissions[moduleName].can_view;
            const canEdit = permissions[moduleName].can_edit;
            const canAdd = permissions[moduleName].can_add;
            const canDelete = permissions[moduleName].can_delete;

            if (!canView) {
                hideOrModifyElements(`.view-${moduleName}`);
            }
            if (!canEdit) {
                if (moduleName === 'phase') {
                    hideOrModifyElements(`.edit-${moduleName}`, 'editable-cell'); // Remove editable-cell class
                } else {
                    hideOrModifyElements(`.edit-${moduleName}`);
                }
            }
            if (!canAdd) {
                hideOrModifyElements(`.add-${moduleName}`);
            }
            if (!canDelete) {
                hideOrModifyElements(`.delete-${moduleName}`);
            }

            // Hide action elements if both edit and add permissions are false
            if (!canEdit && !canAdd) {
                hideOrModifyElements(`.action-${moduleName}`);
            }

            // Hide action elements if both edit and delete permissions are false
            if (!canEdit && !canDelete) {
                hideOrModifyElements(`.action-${moduleName}`);
            }
        }
    }

    // Check main module permissions
    if (main_permissions) {
        ['project', 'humanres', 'administration'].forEach(module => {
            applyPermissions(main_permissions, module);
        });
    }

    // Check sub-module permissions
    if (sub_permissions) {
        const subModules = [
            'daily_time_record', 'subdivision', 'division', 'department',
            'phase', 'owner', 'models', 'model_types', 'emp_settings',
            'shifts', 'projects', 'emp_project', 'emp_list','sss_config' ,'pagibig_config',
            'bir_config', 'philhealth_config', 'payroll', 'payroll_reports' ,'leave_policy',
            'emp_leaves', 'holiday_config', 'leave_request', 'leave_calendar',
        ];

        subModules.forEach(subModule => {
            applyPermissions(sub_permissions, subModule);
        });

        // Division specific handling
        if (sub_permissions.division && !sub_permissions.division.can_view) {
            hideOrModifyElements('.division-item'); // Replace with the appropriate class or selector
        }
    }

    console.log('Permissions applied');
}
