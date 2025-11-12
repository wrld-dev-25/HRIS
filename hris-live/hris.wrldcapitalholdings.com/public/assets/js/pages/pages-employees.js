$(document).ready(function () {
    const divisionList = $('#divisionList').data('value');
    const divisionSelector = $('#division, #division2');
    const empStatus = $('#empStatus');
    // for affiliated company
    const companyList = $('#companyList').data('value');
    const companySelector = $('#company, #company2');
    let paginated = false;

    // Add employee division select initialization
    var division = $('#division')[0]; 
    var divisionChoices = new Choices(division, {
        removeItemButton: false,
        allowHTML: true,
        placeholder: true,
        placeholderValue: null,
    });

    // Edit employee division select initialization
    var division2 = $('#division2')[0]; 
    var divisionChoices2 = new Choices(division2, {
        removeItemButton: false,
        allowHTML: true,
        placeholder: true,
        placeholderValue: null,
    });

    // Add employee division select initialization
    var company = $('#company')[0]; 
    var companyChoices = new Choices(company, {
        removeItemButton: false,
        allowHTML: true,
        placeholder: true,
        placeholderValue: null,
    });

    // Edit employee division select initialization
    var company2 = $('#company2')[0]; 
    var companyChoices2 = new Choices(company2, {
        removeItemButton: false,
        allowHTML: true,
        placeholder: true,
        placeholderValue: null,
    });

    // Add employee department select initialization
    var departmentSelector = $('#department')[0];
    var departmentChoices = new Choices(departmentSelector, {
        removeItemButton: false,
        allowHTML: true,
        placeholder: true,
        placeholderValue: null,
    });

    // Edit employee department select initialization
    var departmentSelector2 = $('#department2')[0];
    var departmentChoices2 = new Choices(departmentSelector2, {
        removeItemButton: false,
        allowHTML: true,
        placeholder: true,
        placeholderValue: null,
    });

    divisionOptions = [];
    $.each(divisionList, function (key, value) { //Iterate each division
        divisionOptions.push({value: value.code, label: value.name});
    });

    //for company
    companyOptions = [];
    $.each(companyList, function (key, value) { //Iterate each division
        companyOptions.push({value: value.code, label: value.name});
    });

    // Clear exsting options
    divisionChoices.clearChoices();
    divisionChoices2.clearChoices();
    companyChoices.clearChoices(); // for company
    companyChoices2.clearChoices();// for company

    // Add new options
    divisionChoices.setChoices(divisionOptions, 'value', 'label', false);
    divisionChoices2.setChoices(divisionOptions, 'value', 'label', false);
    companyChoices.setChoices(companyOptions, 'value', 'label', false); // for company
    companyChoices2.setChoices(companyOptions, 'value', 'label', false);// for company

    //console.log(divisionObject);
    $('#addEmployee, #editEmployee').on('click', function () {
        divisionOptions = [];
        $.each(divisionList, function (key, value) { //Iterate each division
            divisionOptions.push({value: value.code, label: value.name});
        });

        //for company
        companyOptions = [];
        $.each(companyList, function (key, value) { //Iterate each division
            companyOptions.push({value: value.code, label: value.name});
        });
        console.log(companyOptions);

        // Clear exsting options
        divisionChoices.clearChoices();
        divisionChoices2.clearChoices();
        companyChoices.clearChoices(); // for company
        companyChoices2.clearChoices();// for company
        // Add new options
        divisionChoices.setChoices(divisionOptions, 'value', 'label', false);
        divisionChoices2.setChoices(divisionOptions, 'value', 'label', false);
        companyChoices.setChoices(companyOptions, 'value', 'label', false); // for company
        companyChoices2.setChoices(companyOptions, 'value', 'label', false);// for company

    });

    //Get values passed from controller to divisionList container
    var divisionObject = {};
    $.each(divisionList, function (key, val) { //Iterate each division
        var departmentArray = [];

        $.each(val.departments, function (k, v) { //Iterate each department
            var deptObj = {};
            deptObj = {value: v.code, label: v.name};
            departmentArray.push(deptObj)
        })
        // Push items to divisionObject
        divisionObject[val.code] = departmentArray;
    });

    divisionSelector.on('change', function() { //Change department options when division is changed
        var selectedValue = $(this).val();
        var newOptions = divisionObject[selectedValue] || [];

        // Clear exsting options
        departmentChoices.clearChoices();
        departmentChoices2.clearChoices();
        // Add new options
        departmentChoices.setChoices(newOptions, 'value', 'label', false);
        departmentChoices2.setChoices(newOptions, 'value', 'label', false);
        //console.log(newOptions);
    });

    /* Gender select initilization */
    var genderSelect = $('#editEmployeeModal #gender')[0];
    var genderChoices = new Choices(genderSelect, {
        removeItemButton: false,
        allowHTML: true,
        shouldSort: false,
        placeholder: true,
        placeholderValue: null,
    });
    genderChoices.setChoices([
        {value: 'Male', label: 'Male'},
        {value: 'Female', label: 'Female'},
    ], 'value', 'label', false);
    /* Gender select end */

    /* Civil Status select initilization */
    var civilStatusSelect = $('#editEmployeeModal #civilStatus')[0];
    var civilStatusChoices = new Choices(civilStatusSelect, {
        removeItemButton: false,
        allowHTML: true,
        shouldSort: false,
        placeholder: true,
        placeholderValue: null,
    });
    civilStatusChoices.setChoices([
        {value: 'Single', label: 'Single'},
        {value: 'Married', label: 'Married'},
        {value: 'Widowed', label: 'Widowed'},
        {value: 'Legally Separated', label: 'Legally Separated'},
    ], 'value', 'label', false);
    /* Civil Status select end */

    /* Province select initilization */
    var provinceSelect = $('#editEmployeeModal #province')[0];
    var provinceChoices = new Choices(provinceSelect, {
        removeItemButton: false,
        allowHTML: true,
        shouldSort: true,
        placeholder: true,
        placeholderValue: null,
    });
    var provinceList = $('#provinceList').data('value');
    var provinceArray = [];
    $.each(provinceList, function (key, val) { //Iterate each province
        // Push items to provinceObject
        provinceArray.push({value: val.name, label: val.name});
    });

    provinceChoices.setChoices(provinceArray, 'value', 'label', false);
    /* Province select end */

    /* Add Employee Present Town/City select initilization */
    var presentAddCitySelect = $('#addEmployeeModal #presentCity')[0];
    var presentAddCityChoices = new Choices(presentAddCitySelect, {
        removeItemButton: false,
        allowHTML: true,
        shouldSort: true,
        placeholder: true,
        placeholderValue: null,
    });
    var cityList = $('#cityList').data('value');
    var presentAddCityArray = [];
    $.each(cityList, function (key, val) { //Iterate each province
        // Push items to presentCityeObject
        presentAddCityArray.push({value: val.name, label: val.name});
    });

    presentAddCityChoices.setChoices(presentAddCityArray, 'value', 'label', false);
    /* Add Employee Present Town/City select end */

    /* Add Employee Permanent Town/City select initilization */
    var permanentAddCity = $('#addEmployeeModal #permanentCity')[0];
    var permanentAddCityChoices = new Choices(permanentAddCity, {
        removeItemButton: false,
        allowHTML: true,
        shouldSort: true,
        placeholder: true,
        placeholderValue: null,
    });
    var permanentAddCityArray = [];
    $.each(cityList, function (key, val) { //Iterate each province
        // Push items to permanentCityObject
        permanentAddCityArray.push({value: val.name, label: val.name});
    });

    permanentAddCityChoices.setChoices(permanentAddCityArray, 'value', 'label', false);
    /* Add Employee Permanent Town/City select end */

    /* Town/City select initilization */
    var presentCitySelect = $('#editEmployeeModal #presentCity')[0];
    var presentCityChoices = new Choices(presentCitySelect, {
        removeItemButton: false,
        allowHTML: true,
        shouldSort: true,
        placeholder: true,
        placeholderValue: null,
    });
    var cityList = $('#cityList').data('value');
    var presentCityArray = [];
    $.each(cityList, function (key, val) { //Iterate each province
        // Push items to presentCityeObject
        presentCityArray.push({value: val.name, label: val.name});
    });

    presentCityChoices.setChoices(presentCityArray, 'value', 'label', false);
    /* Town/City select end */

    /* Town/City select initilization */
    var permanentCity = $('#editEmployeeModal #permanentCity')[0];
    var permanentCityChoices = new Choices(permanentCity, {
        removeItemButton: false,
        allowHTML: true,
        shouldSort: true,
        placeholder: true,
        placeholderValue: null,
    });
    var permanentCityArray = [];
    $.each(cityList, function (key, val) { //Iterate each province
        // Push items to permanentCityObject
        permanentCityArray.push({value: val.name, label: val.name});
    });

    permanentCityChoices.setChoices(permanentCityArray, 'value', 'label', false);
    /* Town/City select end */

    /* Employment Status select initilization */
    var employmentStatusSelect = $('#editEmployeeModal #employeeStatus')[0];
    var employmentStatusChoices = new Choices(employmentStatusSelect, {
        removeItemButton: false,
        allowHTML: true,
        shouldSort: false,
        placeholder: true,
        placeholderValue: null,
    });
    employmentStatusChoices.setChoices([
        {value: 'Active', label: 'Active'},
        {value: 'Terminated', label: 'Terminated'},
        {value: 'Resigned', label: 'Resigned'}
    ], 'value', 'label', false);
    /* Employment Status select end */

    $('#employeeTable').on('click', '#editEmployee', function () {
        $row = $(this).closest('tr');

        var employeeData = $row.find('#employeeData').data('value'); // Get row values from employeeData container
        paginated == true ? employeeData = JSON.parse(decodeURIComponent(employeeData)) : employeeData;
        //console.log(employeeData);

        if(employeeData.user.is_assignable_proj){
            $('#is_assignable2').prop('checked', true);
        }
        else{
            $('#is_assignable2').prop('checked', false);
        }

        if(employeeData.user.is_worker){
            $('#is_worker2').prop('checked', true);
        }
        else{
            $('#is_worker2').prop('checked', false);
        }

        $('#editEmployeeModal #employeeId').val(employeeData.id);
        $('#editEmployeeModal #firstName').val(employeeData.first_name);
        $('#editEmployeeModal #middleName').val(employeeData.middle_name);
        $('#editEmployeeModal #lastName').val(employeeData.last_name);
        $('#editEmployeeModal #extension').val(employeeData.extension);
        $('#editEmployeeModal #employeeCode').val(employeeData.employee_code);
        if (employeeData.birthdate != null) { // check if date is not set
            var birthDate = formatDate(employeeData.birthdate);
            $('#editEmployeeModal #birthDate').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(birthDate);
        }
        $('#editEmployeeModal #birthPlace').val(employeeData.birth_place);
        $('#editEmployeeModal #age').val(employeeData.age);
        genderChoices.setChoiceByValue(employeeData.gender);
        $('#editEmployeeModal #emailAddress').val(employeeData.email);
        $('#editEmployeeModal #zipCode').val(employeeData.zip_code);
        civilStatusChoices.setChoiceByValue(employeeData.civil_status);
        provinceChoices.setChoiceByValue(employeeData.area);
        $('#editEmployeeModal #telephoneNumber').val(employeeData.telephone);
        $('#editEmployeeModal #cellphoneNumber').val(employeeData.cellphone);
        $('#editEmployeeModal #presentBarangay').val(employeeData.present_barangay);
        presentCityChoices.setChoiceByValue(employeeData.present_city);
        $('#editEmployeeModal #sameAddress').val(employeeData.same_address);
        if (employeeData.same_address === true) {
            $('#editEmployeeModal #sameAddress').prop('checked', true);
            $('#editEmployeeModal #permanentBarangay').prop('disabled', true);
            permanentCityChoices.setChoiceByValue(employeeData.permanent_city);
            permanentCityChoices.disable();
        } else {
            $('#editEmployeeModal #sameAddress').prop('checked', false);
        }
        $('#editEmployeeModal #permanentBarangay').val(employeeData.permanent_barangay);

        //divisionChoices2.removeActiveItems();
        var divCode = employeeData.division ? employeeData.division.code : null;
        if ( divCode != null ) {
            divisionChoices2.setChoiceByValue(employeeData.division.code);
            divisionSelector.trigger('change');
        }

        var companyCode = employeeData.affiliated_company ? employeeData.affiliated_company.code : null;
        if ( companyCode != null ) {
            companyChoices2.setChoiceByValue(employeeData.affiliated_company.code);
            companySelector.trigger('change');
        }
        
        //departmentChoices2.removeActiveItems();
        var deptCode = employeeData.department ? employeeData.department.code : null;
        if ( deptCode != null ) {
            departmentChoices2.setChoiceByValue(employeeData.department.code);
        }

        $('#editEmployeeModal #position').val(employeeData.position);
        $('#editEmployeeModal #employmentType').val(employeeData.employment_type);
        if (employeeData.date_hired != null) { // check if date is not set
            var dateHired = formatDate(employeeData.date_hired);
            $('#editEmployeeModal #dateHired').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(dateHired);
        }

        // Set the employee status
        let statusValue = employeeData.employee_status;
        if (statusValue === 'inactive') {
            statusValue = 'Terminated';
        } else if (statusValue === 'suspended') {
            statusValue = 'Resigned';
        }
        else{
            statusValue = employeeData.employee_status;
        }
        employmentStatusChoices.setChoiceByValue(statusValue);

        if (employeeData.contract_expiry_date != null && !employeeData.contract_expiry_date.startsWith("0000") && !employeeData.contract_expiry_date.startsWith("1970")) { // check if date is not set
            console.log("set contract expiry date");
            console.log(employeeData.contract_expiry_date);
            var contractExpiryDate = formatDate(employeeData.contract_expiry_date);
            $('#editEmployeeModal #contractExpiryDate').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(contractExpiryDate);
        }
        if (employeeData.date_separated != null && !employeeData.date_separated.startsWith("0000") && !employeeData.date_separated.startsWith("1970")) { // check if date is not set
            var dateSeparated = formatDate(employeeData.date_separated);
            $('#editEmployeeModal #dateSeparated').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(dateSeparated);
        }
        // if (employeeData.probationary_date != null && !employeeData.probationary_date.startsWith("0000") && !employeeData.probationary_date.startsWith("1970")) { // check if date is not set
        //     var probationaryDate = formatDate(employeeData.probationary_date);
        //     $('#editEmployeeModal #probationaryDate').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(probationaryDate);
        // }
        if (employeeData.regularization_date != null && !employeeData.regularization_date.startsWith("0000") && !employeeData.regularization_date.startsWith("1970")) { // check if date is not set
            var regularizationDate = formatDate(employeeData.regularization_date);
            $('#editEmployeeModal #regularizationDate').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(regularizationDate);
        }
    });

    // Event listener for presentBarangay change
    $('#addEmployeeModal #presentBarangay, #editEmployeeModal #presentBarangay').on('change', function() {
        $('#addEmployeeModal #permanentBarangay').val($(this).val().trim());
        $('#editEmployeeModal #permanentBarangay').val($(this).val().trim());
    });

    // Event listener for presentCity change
    $('#addEmployeeModal #presentCity').on('change', function() {
        var addPermanentCity = $(this).val();
        permanentAddCityChoices.setChoiceByValue($(this).val());
    });

    // Event listener for edit presentCity change
    $('#editEmployeeModal #presentCity').on('change', function() {
        permanentCityChoices.setChoiceByValue($(this).val());
    });

    $('#addEmployeeModal #sameAddress').on('change', function () {
        const presentBarangay = $('#addEmployeeModal #presentBarangay');
        const permanentBarangay = $('#addEmployeeModal #permanentBarangay');
        const presentCity = $('#addEmployeeModal #presentCity');
        if (this.checked) {
            $(this).val('true');
            permanentBarangay.prop('disabled', true);
            permanentBarangay.prop('required', false);
            permanentBarangay.val(presentBarangay.val().trim());
            permanentAddCityChoices.setChoiceByValue(presentCity.val());
            permanentAddCityChoices.disable();
        } else {
            $(this).val('false');
            permanentBarangay.prop('disabled', false);
            permanentBarangay.prop('required', true);
            permanentBarangay.val('');
            permanentAddCityChoices.setChoiceByValue('');
            permanentAddCityChoices.enable();
        }   
    });

    $('#editEmployeeModal #sameAddress').on('change', function () {
        const presentBarangay = $('#editEmployeeModal #presentBarangay');
        const permanentBarangay = $('#editEmployeeModal #permanentBarangay');
        const presentCity = $('#editEmployeeModal #presentCity');
        if (this.checked) {
            $(this).val('true');
            permanentBarangay.prop('disabled', true);
            permanentBarangay.prop('required', false);
            permanentBarangay.val(presentBarangay.val().trim());
            permanentCityChoices.setChoiceByValue(presentCity.val());
            permanentCityChoices.disable();
        } else {
            $(this).val('false');
            permanentBarangay.prop('disabled', false);
            permanentBarangay.prop('required', true);
            permanentBarangay.val('');
            permanentCityChoices.setChoiceByValue('');
            permanentCityChoices.enable();
        }   
    });

    $('#employeeTable').on('click', '#contactEmployee', function () {
        $row = $(this).closest('tr');

        var employeeData = $row.find('#employeeData').data('value'); // Get row values from employeeData container
        paginated == true ? employeeData = JSON.parse(decodeURIComponent(employeeData)) : employeeData;
        //console.log(employeeData);

        var email = employeeData.email;
        var cellphone = removeSpacesAndDashes(employeeData.cellphone);

        // Empty fields
        $('#modalEmail').attr('href', 'javascript:void(0)').text('');
        $('#modalCellphone').attr('href', 'javascript:void(0)').text('');

        email === "" ? $('#modalEmail').text('No email address provided.') : $('#modalEmail').attr('href', 'mailto:' + email).text(email);
        cellphone === "" ? $('#modalCellphone').text('No cellphone number provided.') : $('#modalCellphone').attr('href', 'tel:' + cellphone).text(cellphone);
    })

    // Perform bulk action on selected rows
    $('#bulkActionBtn').on('click', async function() {
        var employeeUserIdArray = [];
        var selectedAction = $('#bulkActionSelect').val();
        
        $('.rowCheckbox:checked').each(function() {
            var row = $(this).closest('tr');

            
            if (paginated == true) {
                var employeeData = JSON.parse(decodeURIComponent(row.find('td:nth-child(2)').data('value')));
                console.log(employeeData);
            } else {
                var employeeData = row.find('td:nth-child(2)').data('value');
                console.log(employeeData);
            }
            var employeeUserId = employeeData.user.id;

            employeeUserIdArray.push(employeeUserId);
        });

        var search = $('#employeeSearch').val();
        var page = $('#currentPage').data('page'); // Get data-page attribute value
        var limit = $('#pageLimit').data('limit');

        $('#employeeList tr td').each(function() {
            $(this).empty(); // Empty the content of each <td> element
            $(this).html('<div class="loader"></div>');
        });

        if (selectedAction !== null) {
            if (employeeUserIdArray.length > 0) {

                // Perform your bulk action with employeeUserIdArray data
                console.log(selectedAction + " " + employeeUserIdArray);
                
                // Example: send the selected data to a server using AJAX
                var jsonObject = {
                    action: selectedAction,
                    employeeUserIds: employeeUserIdArray
                }
                var bulkUpdateRes = await apiCall('POST', 'api/employee/bulk_update', jsonObject);
                var status = bulkUpdateRes.status;
                
                if (status == 'success') {
                    await loadEmployees(search, page, limit);
                    showToast('Employee/s updated successfully.', 'bg-green-500');
                } else {
                    await loadEmployees(search, page, limit);
                    showToast('Employee/s update failed, something went wrong.', 'bg-red-500')
                }

            } else {
                showToast('No rows selected.', 'bg-red-500')
            }
        } else {
            showToast('Choose action to perform.', 'bg-red-500')
        }
    });

    /* Asynchronous Pagination start */
    $('.pagination-prev').on('click', async function(event) {
        event.preventDefault(); // Prevent default link behavior
        console.log(paginated);

        var page = $(this).data('page'); // Get data-page attribute value
        var limit = $(this).data('limit');
        var search = $('#employeeSearch').val().trim();

        $('#employeeList tr td').each(function() {
            $(this).empty(); // Empty the content of each <td> element
            $(this).html('<div class="loader"></div>');
        });
        await loadEmployees(search, page, limit);
    });

    $('.pagination-next').on('click', async function(event) {
        event.preventDefault(); // Prevent default link behavior
        console.log(paginated);

        var page = $(this).data('page'); // Get data-page attribute value
        var limit = $(this).data('limit');
        var search = $('#employeeSearch').val().trim();

        $('#employeeList tr td').each(function() {
            $(this).empty(); // Empty the content of each <td> element
            $(this).html('<div class="loader"></div>');
        });
        await loadEmployees(search, page, limit);
    });

    $('.page').on('click', async function(event) {
        event.preventDefault(); // Prevent default link behavior
        console.log(paginated);

        var page = $(this).data('page'); // Get data-page attribute value
        var limit = $(this).data('limit');
        var search = $('#employeeSearch').val().trim();

        $('#employeeList tr td').each(function() {
            $(this).empty(); // Empty the content of each <td> element
            $(this).html('<div class="loader"></div>');
        });
        await loadEmployees(search, page, limit);
    });

    $('#selectLimit').on('change', async function () {
        console.log(paginated);

        var page = $('#currentPage').data('page'); // Get data-page attribute value
        var limit = $(this).val();
        var search = $('#employeeSearch').val().trim();

        console.log(page, limit);

        $('#employeeList tr td').each(function() {
            $(this).empty(); // Empty the content of each <td> element
            $(this).html('<div class="loader"></div>');
        });
        await loadEmployees(search, page, limit);
    });

    /* Search Employees */
    $('#searchButton').on('click', async function() {
        var search = $('#employeeSearch').val();
        var page = $('#currentPage').data('page'); // Get data-page attribute value
        var limit = $('#pageLimit').data('limit');

        console.log(search);

        $('#employeeList tr td').each(function() {
            $(this).empty(); // Empty the content of each <td> element
            $(this).html('<div class="loader"></div>');
        });

        await loadEmployees(search, page, limit);
    });
    /* Search Employees End */

    async function loadEmployees(search = null, page, limit){
        const empTable = $('#employeeList');
        var newTr = '';
        var currentPage = page;

        const filterStatus = $('#filter_status').val();

        var jsonObject = {
            "page": page,
            "limit": limit,
            "search": search,
            "filter_status": filterStatus,
        };
        //console.log(jsonObject);

        //get paginated employee list
        var empListPaginated = await apiCall('POST', 'api/emp_paginated', jsonObject);
        //console.log('Employee List: '+empListPaginated)

        var empList = empListPaginated.employees;
        var totalPages = Math.ceil(empListPaginated.totalEmployees / limit); //set total pages
        var totalEmployees = empListPaginated.totalEmployees; //set total employees

        $.each(empList, async function name(key, employee) {
            //console.log(employee);
            var employeeData = encodeURIComponent(JSON.stringify(employee));
            //console.log(employeeData);
            newTr += `
                <tr>
                    <td class="edit-emp_list px-5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 position"><input type="checkbox" name="rowCheckbox" id="rowCheckbox" class="rowCheckbox"></td>
                    <td class="hidden" id="employeeData" data-value="${employeeData}"></td>
                    <td class="hidden" id="employeeId" data-value="${employee.id}"></td>
                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 company">${ employee.affiliated_company.code }</td>
                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 employeeCode"><h6 class="grow">${employee.employee_code}</h6></td>
                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 name">
                        <div class="flex items-center gap-3">
                            <div class="size-6 rounded-full shrink-0 bg-slate-100">
                                <img src="../../assets/images/users/user-dummy-img.jpg" alt="" class="h-6 rounded-full">
                            </div>
                            <h6 class="grow">${ employee.last_name }, ${ employee.first_name } ${ employee.middle_name}</h6>
                        </div>
                    </td>
                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 division" data-tooltip="default" data-tooltip-content="${ employee.division ? employee.division.name : '' }" data-tooltip-placement="top-start" data-tooltip-arrow="false">${ employee.division ? employee.division.code : '' }</td>
                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 department" data-tooltip="default" data-tooltip-content="${ employee.department ? employee.department.name : '' }" data-tooltip-placement="top-start" data-tooltip-arrow="false">${ employee.department ? employee.department.code : '' }</td>
                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 position">${ employee.position }</td>
                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 employmentType">${ employee.employment_type }</td>
                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 dateHired">${ formatDate(employee.date_hired) }</td>
                    <td class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500 Action">
                        <div class="edit-emp_list relative dropdown">
                            <button class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="usersAction1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-3"></i></button>
                            <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="usersAction1">
                                <li>
                                    <a href="/employee/profile/${employee.employee_code}" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="eye" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">View</span></a>
                                </li>
                                <li>
                                    <a data-modal-target="editEmployeeModal" id="editEmployee" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!" style="position: relative; z-index: 10;"><i data-lucide="pencil" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Edit</span></a>
                                </li>   
                                <li>
                                    <a data-modal-target="contactDetailsModal" id="contactEmployee" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!" style="position: relative; z-index: 10;"><i data-lucide="phone" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Contact</span></a>
                                </li>        
                            </ul>
                        </div>
                    </td>
                </tr>
            `;
        });
        paginated = true;
        empTable.empty(); //remove loader and previous table data
        empTable.html(newTr); //create new table data

        console.log(paginated);

        lucide.createIcons(); //load icons
        refreshCallBack(); //reload tailwick.bundle.js dropdown and modal
        refreshPagination(page, limit, totalPages, totalEmployees); // reloads the pagination
        applyPermissionsToDOM();
        $('#currentPage').data('page', currentPage); // set current page 
        $('#pageLimit').data('limit', limit); // set current limit
        $('#selectLimit').val(limit);
        $('.showing').text(empList.length); // set updated showing text
        $('.total-records').text(empList.totalEmployees); // set updated total records text
    }

    function refreshPagination(currentPage, limit, totalPages, totalEmployees) {
        const paginationContainer = $('.pagination-container');
        var newNav = '';
        
        if (currentPage > 1) {
            newNav += `<a id="pagination-first" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-prev " href="javascript:void(0)" data-page="1" data-limit="${ limit }">
                <i class="size-4 mr-1 rtl:rotate-180" data-lucide="chevrons-left"></i> First
            </a>
            `;
        }

        newNav += `<ul class="listjs-pagination flex flex-wrap items-center gap-2">`;
        for (let i = 1; i <= totalPages; i++) {
            newNav += `<li id="pagination-nav-wrapper" class="${currentPage == i ? 'active' : ''}">
                <a id="pagination-nav" href="javascript:void(0)" class="page" data-page="${i}" data-limit="${limit}">${i}</a>
            </li>
            `;
        }
        newNav += `</ul>`;

        if (currentPage < totalPages) {
            newNav += `<a id="pagination-last" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-next" href="javascript:void(0)" data-page="${totalPages}" data-limit="${ limit }">
                    Last <i class="size-4 ml-1 rtl:rotate-180" data-lucide="chevrons-right"></i>
                </a>
            `;    
        }

        //console.log(newNav);
        paginationContainer.empty(); //remove pagination
        paginationContainer.html(newNav); //append the new navigation
        lucide.createIcons(); //load icons
        
        $('.pagination-prev').on('click', async function(event) {
            event.preventDefault(); // Prevent default link behavior
            console.log(paginated);

            var page = $(this).data('page'); // Get data-page attribute value
            var limit = $(this).data('limit');
            var search = $('#employeeSearch').val().trim();

            $('#employeeList tr td').each(function() {
                $(this).empty(); // Empty the content of each <td> element
                $(this).html('<div class="loader"></div>');
            });
            await loadEmployees(search, page, limit);
        });

        $('.pagination-next').on('click', async function(event) {
            event.preventDefault(); // Prevent default link behavior
            console.log(paginated);

            var page = $(this).data('page'); // Get data-page attribute value
            var limit = $(this).data('limit');
            var search = $('#employeeSearch').val().trim();

            $('#employeeList tr td').each(function() {
                $(this).empty(); // Empty the content of each <td> element
                $(this).html('<div class="loader"></div>');
            });
            await loadEmployees(search, page, limit);
        });
        
        $('.page').on('click', async function(event) {
            event.preventDefault(); // Prevent default link behavior
            console.log(paginated);

            var page = $(this).data('page'); // Get data-page attribute value
            var limit = $(this).data('limit');
            var search = $('#employeeSearch').val().trim();

            $('#employeeList tr td').each(function() {
                $(this).empty(); // Empty the content of each <td> element
                $(this).html('<div class="loader"></div>');
            });
            await loadEmployees(search, page, limit);
        });
    }
    /* Asynchronous Pagination End */

    /* Bulk Action Assignment  */
    $('#selectAll').on('change', function() {
        if (this.checked) {
            $('.rowCheckbox').prop('checked', true);
        } else {
            $('.rowCheckbox').prop('checked', false);
        }
    });

    function refreshCallBack() {
        var dropdownElem = document.querySelectorAll('.dropdown');
        var dropupElem = document.querySelectorAll('.dropup');
        var dropStartElem = document.querySelectorAll('.dropstart');
        var dropendElem = document.querySelectorAll('.dropend');
        var isShowDropMenu = false;
        var isMenuInside = false;
        // dropdown event
        dropdownEvent(dropdownElem, 'bottom-start');
        // dropup event
        dropdownEvent(dropupElem, 'top-start');
        // dropstart event
        dropdownEvent(dropStartElem, 'left-start');
        // dropend event
        dropdownEvent(dropendElem, 'right-start');

        function dropdownEvent(elem, place) {
            Array.from(elem).forEach(function (item) {
                item.querySelectorAll(".dropdown-toggle").forEach(function (subitem) {
                    subitem.addEventListener("click", function (event) {
                        subitem.classList.toggle("show");
                        var popper = Popper.createPopper(subitem, item.querySelector(".dropdown-menu"), {
                            placement: place
                        });

                        if (subitem.classList.contains("show") != true) {
                            item.querySelector(".dropdown-menu").classList.remove("block")
                            item.querySelector(".dropdown-menu").classList.add("hidden")
                        } else {
                            dismissDropdownMenu()
                            item.querySelector(".dropdown-menu").classList.add("block")
                            item.querySelector(".dropdown-menu").classList.remove("hidden")
                            if (item.querySelector(".dropdown-menu").classList.contains("block")) {
                                subitem.classList.add("show")
                            } else {
                                subitem.classList.remove("show")
                            }
                            event.stopPropagation();
                        }

                        isMenuInside = false;
                    });
                });
            });
        }

        function dismissDropdownMenu() {
            Array.from(document.querySelectorAll(".dropdown-menu")).forEach(function (item) {
                item.classList.remove("block")
                item.classList.add("hidden")
            });
            Array.from(document.querySelectorAll(".dropdown-toggle")).forEach(function (item) {
                item.classList.remove("show")
            });
            isShowDropMenu = false;
        }

        // dropdown form
        Array.from(document.querySelectorAll(".dropdown-menu")).forEach(function (item) {
            if (item.querySelectorAll("form")) {
                Array.from(item.querySelectorAll("form")).forEach(function (subitem) {
                    subitem.addEventListener("click", function (event) {
                        if (!isShowDropMenu) {
                            isShowDropMenu = true;
                        }
                    })
                });
            }
        });

        // data-tw-auto-close
        Array.from(document.querySelectorAll(".dropdown-toggle")).forEach(function (item) {
            var elem = item.parentElement
            if (item.getAttribute('data-tw-auto-close') == 'outside') {
                elem.querySelector(".dropdown-menu").addEventListener("click", function () {
                    if (!isShowDropMenu) {
                        isShowDropMenu = true;
                    }
                });
            } else if (item.getAttribute('data-tw-auto-close') == 'inside') {
                item.addEventListener("click", function () {
                    isShowDropMenu = true;
                    isMenuInside = true;
                });
                elem.querySelector(".dropdown-menu").addEventListener("click", function () {
                    isShowDropMenu = false;
                    isMenuInside = false;
                });
            }
        });

        window.addEventListener('click', function (e) {
            if (!isShowDropMenu && !isMenuInside) {
                if (!e.target.closest('.dropdown-menu')) {
                    dismissDropdownMenu();
                }
            }
            isShowDropMenu = false;
        });

        const allDrawerButtons = document.querySelectorAll('[data-drawer-target]');
        const allDrawerCloseButtons = document.querySelectorAll('[data-drawer-close]');
        const allModalButtons = document.querySelectorAll('[data-modal-target]');
        const allModalCloseButtons = document.querySelectorAll('[data-modal-close]');
        const bodyElement = document.body;       
        
        let openDrawerId = null;
        let openModalId = null;
        if(document.getElementById("backDropDiv")) {
            var backDropOverlay = document.getElementById("backDropDiv");
        } else {
            var backDropOverlay = document.createElement('div');
            backDropOverlay.className = 'fixed inset-0 bg-slate-900/40 dark:bg-zink-800/70 z-[1049] backdrop-overlay hidden';
            backDropOverlay.id = 'backDropDiv';
        }
        if (allModalButtons.length > 0 || allDrawerButtons.length > 0)
            document.body.appendChild(backDropOverlay);

        // Function to toggle the state of drawers and modals
        function toggleElementState(elementId, show, delay) {
            const element = document.getElementById(elementId);
            if (element) {
                if (!show) {
                    element.classList.add('show');
                    backDropOverlay.classList.add('hidden');
                    setTimeout(() => {
                        element.classList.add("hidden");
                    }, 350);
                } else {
                    element.classList.remove("hidden");
                    setTimeout(() => {
                        element.classList.remove('show');
                        backDropOverlay.classList.remove('hidden');
                    }, delay);
                }
                bodyElement.classList.toggle('overflow-hidden', show);
                if (show) {
                    openDrawerId = elementId;
                    openModalId = elementId;
                } else {
                    openDrawerId = null;
                    openModalId = null;
                }
            }
        }

        // Attach click event listeners to drawer buttons
        allDrawerButtons.forEach(element => {
            const drawerId = element.getAttribute('data-drawer-target');
            if (drawerId) {
                element.addEventListener('click', function () {
                    toggleElementState(drawerId, true, 0);
                });
            }
        });

        // Attach click event listeners to drawer close buttons
        allDrawerCloseButtons.forEach(element => {
            const drawerId = element.getAttribute('data-drawer-close');
            if (drawerId) {
                element.addEventListener('click', function () {
                    toggleElementState(drawerId, false, 0);
                });
            }
        });

        // Attach click event listeners to modal buttons
        allModalButtons.forEach(element => {
            const modalId = element.getAttribute('data-modal-target');
            if (modalId) {
                element.addEventListener('click', function () {
                    toggleElementState(modalId, true, 200);
                });
            }
        });

        // Attach click event listeners to modal close buttons
        allModalCloseButtons.forEach(element => {
            const modalId = element.getAttribute('data-modal-close');
            if (modalId) {
                element.addEventListener('click', function () {
                    toggleElementState(modalId, false, 200);
                });
            }
        });

        // Attach click event listener to backdrop-overlay
        backDropOverlay?.addEventListener('click', function () {
            if (openDrawerId) {
                toggleElementState(openDrawerId, false, 0);
            }
            if (openModalId) {
                toggleElementState(openModalId, false, 200);
            }
        });
        
        const allTooltipButtons = document.querySelectorAll('[data-tooltip]');

        allTooltipButtons.forEach(element => {
            const tooltipContent = element.getAttribute('data-tooltip-content');

            const tippyOptions = {
                content: tooltipContent,
                allowHTML: true,
            };

            if (element.getAttribute('data-tooltip-placement'))
                tippyOptions.placement = element.getAttribute('data-tooltip-placement');
            if (element.getAttribute('data-tooltip-content'))
                tippyOptions.content = element.getAttribute('data-tooltip-content');
            if (element.getAttribute('data-tooltip-arrow'))
                tippyOptions.arrow = element.getAttribute('data-tooltip-arrow') === "false" ? false : element.getAttribute('data-tooltip-arrow') === "true" ? true : element.getAttribute('data-tooltip-arrow');
            if (element.getAttribute('data-tooltip-duration'))
                tippyOptions.duration = element.getAttribute('data-tooltip-duration');
            if (element.getAttribute('data-tooltip-animation'))
                tippyOptions.animation = element.getAttribute('data-tooltip-animation');
            if (element.getAttribute('data-tooltip-trigger'))
                tippyOptions.trigger = element.getAttribute('data-tooltip-trigger');
            if (element.getAttribute('data-tooltip-follow-cursor'))
                tippyOptions.followCursor = element.getAttribute('data-tooltip-follow-cursor');
            if (element.getAttribute('data-tooltip-theme'))
                tippyOptions.theme = element.getAttribute('data-tooltip-theme');

            tippy(element, tippyOptions);
        });
    }

    if (empStatus.length) {
        if (empStatus.data('status') == 'success') {
            // The element exists
            showToast('Employee added successfully.', 'bg-green-500');
        } else {
            showToast('Employee not added, something went wrong.', 'bg-red-500')
        }
    }

    // Function to format date
    function formatDate(inputDateTime) {
        if (!inputDateTime) {
            return ''; // Return a default value if input is null or undefined
        }
        const inputDate = inputDateTime.slice(0, 10);
        var date = new Date(inputDate);
        if (isNaN(date.getTime())) {
            return ''; // Return a default value if the date is invalid
        }
        var day = date.getDate();
        var month = date.toLocaleString('default', { month: 'short' });
        var year = date.getFullYear();
        
        return day + ' ' + month + ', ' + year;
    }

    function removeSpacesAndDashes(input) {
        return input.replace(/[\s-]/g, '');
    }

    // Update ZIP code when presentCity changes in Edit Employee Modal
    $('#editEmployeeModal #presentCity').on('change', function () {
        var selectedCity = $(this).val();
        var cityList = $('#cityList').data('value');
        var found = cityList.find(function(city) {
            return city.name === selectedCity;
        });
        // Use local zipCode if available
        if (zipcodesPH) {
            // Fallback to usePostalPH if available
            const zipcode = zipcodesPH.default.reverse(found.name);
            if (zipcode && zipcode.length) {
                $('#editEmployeeModal #zipCode').val(zipcode);
                console.log('ZIP code found for the selected city:', zipcode);
            } else {
                $('#editEmployeeModal #zipCode').val('');
                console.log('No ZIP code found for the selected city:', found.name);
            }
        } else {
            $('#editEmployeeModal #zipCode').val('');
            console.log('No ZIP code found for the selected city:', selectedCity);
        }
    });

    // Repeat for Add Employee Modal
    $('#addEmployeeModal #presentCity').on('change', function () {
        var selectedCity = $(this).val();
        var cityList = $('#cityList').data('value');
        var found = cityList.find(function(city) {
            return city.name === selectedCity;
        });
        // Use local zipCode if available
        if (zipcodesPH) {
            // Fallback to usePostalPH if available
            const zipcode = zipcodesPH.default.reverse(found.name);
            if (zipcode && zipcode.length) {
                $('#addEmployeeModal #zipCode').val(zipcode);
                console.log('ZIP code found for the selected city:', zipcode);
            } else {
                $('#addEmployeeModal #zipCode').val('');
                console.log('No ZIP code found for the selected city:', found.name);
            }
        } else {
            $('#addEmployeeModal #zipCode').val('');
            console.log('No ZIP code found for the selected city:', selectedCity);
        }
    });

})