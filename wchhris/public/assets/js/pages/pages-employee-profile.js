$(document).ready(function () {

    const divisionList = $('#divisionList').data('value');
    const divisionSelector = $('#division, #division2');
    const empStatus = $('#empStatus');
    let paginated = false;

    // Add employee division select initialization
    /* var division = $('#division')[0]; 
    var divisionChoices = new Choices(division, {
        removeItemButton: false,
        allowHTML: true,
        placeholder: true,
        placeholderValue: null,
    }); */

    // Edit employee division select initialization
    var division2 = $('#division2')[0]; 
    var divisionChoices2 = new Choices(division2, {
        removeItemButton: false,
        allowHTML: true,
        placeholder: true,
        placeholderValue: null,
    });

    // Add employee department select initialization
    /* var departmentSelector = $('#department')[0];
    var departmentChoices = new Choices(departmentSelector, {
        removeItemButton: false,
        allowHTML: true,
        placeholder: true,
        placeholderValue: null,
    }); */

    // Edit employee department select initialization
    var departmentSelector2 = $('#department2')[0];
    var departmentChoices2 = new Choices(departmentSelector2, {
        removeItemButton: false,
        allowHTML: true,
        placeholder: true,
        placeholderValue: null,
    });

    //console.log(divisionObject);
    $('#addEmployee, #editEmployee').on('click', function () {
        divisionOptions = [];
        $.each(divisionList, function (key, value) { //Iterate each division
            divisionOptions.push({value: value.code, label: value.name});
        });
        //console.log(divisionOptions);

        // Clear exsting options
        //divisionChoices.clearChoices();
        divisionChoices2.clearChoices();
        // Add new options
        //divisionChoices.setChoices(divisionOptions, 'value', 'label', false);
        divisionChoices2.setChoices(divisionOptions, 'value', 'label', false);
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
        //departmentChoices.clearChoices();
        departmentChoices2.clearChoices();
        // Add new options
        //departmentChoices.setChoices(newOptions, 'value', 'label', false);
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
    /* var presentAddCitySelect = $('#addEmployeeModal #presentCity')[0];
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

    presentAddCityChoices.setChoices(presentAddCityArray, 'value', 'label', false); */
    /* Add Employee Present Town/City select end */

    /* Add Employee Permanent Town/City select initilization */
    /* var permanentAddCity = $('#addEmployeeModal #permanentCity')[0];
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

    permanentAddCityChoices.setChoices(permanentAddCityArray, 'value', 'label', false); */
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
        {value: 'Inactive', label: 'Inactive'},
        {value: 'Suspended', label: 'Suspended'}
    ], 'value', 'label', false);
    /* Employment Status select end */

    $('#editEmployee').on('click', function () {
        //$row = $(this).closest('tr');

        var employeeData = $('#employeeData').data('value'); // Get row values from employeeData container
        paginated == true ? employeeData = JSON.parse(decodeURIComponent(employeeData)) : employeeData;
        console.log(employeeData);
        //console.log(paginated);

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
        divisionChoices2.setChoiceByValue(employeeData.division.code);
        divisionSelector.trigger('change');
        departmentChoices2.setChoiceByValue(employeeData.department.code);
        $('#editEmployeeModal #position').val(employeeData.position);
        $('#editEmployeeModal #employmentType').val(employeeData.employment_type);
        if (employeeData.date_hired != null) { // check if date is not set
            var dateHired = formatDate(employeeData.date_hired);
            $('#editEmployeeModal #dateHired').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(dateHired);
        }
        employmentStatusChoices.setChoiceByValue(employeeData.employee_status);
        if (employeeData.contract_expiry_date != null) { // check if date is not set
            var contractExpiryDate = formatDate(employeeData.contract_expiry_date);
            $('#editEmployeeModal #contractExpiryDate').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(contractExpiryDate);
        }
        if (employeeData.date_separated != null) { // check if date is not set
            var dateSeparated = formatDate(employeeData.date_separated);
            $('#editEmployeeModal #dateSeparated').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(dateSeparated);
        }
        if (employeeData.probationary_date != null) { // check if date is not set
            var probationaryDate = formatDate(employeeData.probationary_date);
            $('#editEmployeeModal #probationaryDate').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(probationaryDate);
        }
        if (employeeData.regularization_date != null) { // check if date is not set
            var regularizationDate = formatDate(employeeData.regularization_date);
            $('#editEmployeeModal #regularizationDate').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(regularizationDate);
        }
    });

    // Event listener for presentBarangay change
    $('#editEmployeeModal #presentBarangay').on('change', function() {
        $('#editEmployeeModal #permanentBarangay').val($(this).val().trim());
    });

    // Event listener for edit presentCity change
    $('#editEmployeeModal #presentCity').on('change', function() {
        permanentCityChoices.setChoiceByValue($(this).val());
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

    const empCode = $('#empCode').data('value');
    const dependentCivilStatus = $('#dependentCivilStatus').data('value');
    var action = "";

    /* Additional Information Form Handler */
    var schoolGraduated = $('.td-school-graduated').text().trim();
    var course = $('.td-course').text().trim();
    var careerBandLevel = $('.td-career-band-level').text().trim();
    var careerGlobalGrade = $('.td-career-global-grade').text().trim();
    var cashCardNumber = $('.td-cash-card-number').text().trim();
    var hmoAccount = $('.td-hmo-account').text().trim();
    var sssNumber = $('.td-sss-number').text().trim();
    var philhealthNumber = $('.td-philhealth-number').text().trim();
    var pagibigNumber = $('.td-pagibig-number').text().trim();
    var tinNumber = $('.td-tin-number').text().trim();

    const inputSchoolGraduated = $('.input-school-graduated #schoolGraduated');
    const inputCourse = $('.input-course #course');
    const inputCareerBandLevel = $('.input-career-band-level #careerBandLevel');
    const inputCareerGlobalGrade = $('.input-career-global-grade #careerGlobalGrade');
    const inputCashCardNumber = $('.input-cash-card-number #cashCardNumber');
    const inputHmoAccount = $('.input-hmo-account #hmoAccount');
    const inputSssNumber = $('.input-sss-number #sssNumber');
    const inputPhilhealthNumber = $('.input-philhealth-number #philhealthNumber');
    const inputPagibigNumber = $('.input-pagibig-number #pagibigNumber');
    const inputTinNumber = $('.input-tin-number #tinNumber');

    $('#editButton').on('click', function () {
        $('.toggle-hidden').toggleClass('hidden');

        inputSchoolGraduated.val($('.td-school-graduated').attr('data-value')  === '' ? schoolGraduated : $('.td-school-graduated').data('value'));
        inputCourse.val($('.td-course').attr('data-value') === '' ? course : $('.td-course').data('value'));
        inputCareerBandLevel.val($('.td-career-band-level').attr('data-value') === '' ? careerBandLevel : $('.td-career-band-level').data('value'));
        inputCareerGlobalGrade.val($('.td-career-global-grade').attr('data-value') === '' ? careerGlobalGrade : $('.td-career-global-grade').data('value'));
        inputCashCardNumber.val($('.td-cash-card-number').attr('data-value') === '' ? cashCardNumber : $('.td-cash-card-number').data('value'));
        inputHmoAccount.val($('.td-hmo-account').attr('data-value') === '' ? hmoAccount : $('.td-hmo-account').data('value'));
        inputSssNumber.val($('.td-sss-number').attr('data-value') === '' ? sssNumber : $('.td-sss-number').data('value'));
        inputPhilhealthNumber.val($('.td-philhealth-number').attr('data-value') === '' ? philhealthNumber : $('.td-philhealth-number').data('value'));
        inputPagibigNumber.val($('.td-pagibig-number').attr('data-value') === '' ? pagibigNumber : $('.td-pagibig-number').data('value'));
        inputTinNumber.val($('.td-tin-number').attr('data-value') === '' ? tinNumber : $('.td-tin-number').data('value'));
    });

    $('#cancelButton').on('click', function () {
        $('.toggle-hidden').toggleClass('hidden');
    });

    $('#saveButton').on('click', async function () {
        $('#saveButton').prop('disabled', true); // disable buttons
        $('#cancelButton').prop('disabled', true);

        var jsonObj = {};
        action = "update_additional";
        jsonObj = {
            employee_code: empCode,
            action: action,
            school_graduated: inputSchoolGraduated.val(),
            course: inputCourse.val(),
            career_band_level: inputCareerBandLevel.val(),
            career_global_grade: inputCareerGlobalGrade.val(),
            cash_card_number: inputCashCardNumber.val(),
            hmo_account: inputHmoAccount.val(),
            sss_number: inputSssNumber.val(),
            philhealth_number: inputPhilhealthNumber.val(),
            pagibig_number: inputPagibigNumber.val(),
            tin_number: inputTinNumber.val()
        };

        var empRecords = await updateProfile(jsonObj);

        if (empRecords === false) { // cancel operation if update fails
            return;
        }

        // Update Fields
        schoolGraduated = $('.td-school-graduated').text(empRecords.school_graduated).attr('data-value', empRecords.school_graduated);
        course = $('.td-course').text(empRecords.course).attr('data-value', empRecords.course);
        careerBandLevel = $('.td-career-band-level').text(empRecords.career_band_level).attr('data-value', empRecords.career_band_level);
        careerGlobalGrade = $('.td-career-global-grade').text(empRecords.career_global_grade).attr('data-value', empRecords.career_global_grade);
        cashCardNumber = $('.td-cash-card-number').text(empRecords.cash_card_number).attr('data-value', empRecords.cash_card_number);
        hmoAccount = $('.td-hmo-account').text(empRecords.hmo_account).attr('data-value', empRecords.hmo_account);
        sssNumber = $('.td-sss-number').text(empRecords.sss_number).attr('data-value', empRecords.sss_number);
        philhealthNumber = $('.td-philhealth-number').text(empRecords.philhealth_number).attr('data-value', empRecords.philhealth_number);
        pagibigNumber = $('.td-pagibig-number').text(empRecords.pagibig_number).attr('data-value', empRecords.pagibig_number);
        tinNumber = $('.td-tin-number').text(empRecords.tin_number).attr('data-value', empRecords.tin_number);

        $('#saveButton').prop('disabled', false); // enable buttons
        $('#cancelButton').prop('disabled', false);
        $('.toggle-hidden').toggleClass('hidden');
    });
    /* Additional Information Form Handler End */

    /* Dependents Form Handler */
    $('#fatherDeceased').val() == 'true' ? $('#fatherDeceased').prop('checked', true) : $('#fatherDeceased').prop('checked', false);
    $('#motherDeceased').val() == 'true' ? $('#motherDeceased').prop('checked', true) : $('#motherDeceased').prop('checked', false);

    $('#editDependent').on('click', function () {
        //enable input fields
        $('.toggle-hidden-dependent').toggleClass('hidden');
        $('.add-dependent-wrapper').toggleClass('hidden');
        $('#dependent-form input:disabled').prop('disabled', false);
    });

    $('#cancelDependent').on('click', function () {
        //disable input fields
        $('.toggle-hidden-dependent').toggleClass('hidden');
        $('.add-dependent-wrapper').toggleClass('hidden');
        $('#dependent-form input').prop('disabled', true);
    });

    $('#fatherDeceased').on('click', function () {
        if ($(this).is(':checked')) {
            $(this).val(true);
        } else {
            $(this).val(false);
        }
    });

    $('#motherDeceased').on('click', function () {
        if ($(this).is(':checked')) {
            $(this).val(true);
        } else {
            $(this).val(false);
        }
    });

    $('#saveDependent').on('click', async function () {
        $('#saveDependent').prop('disabled', true); // enable buttons
        $('#cancelDependent').prop('disabled', true);

        var jsonObj = {};
        action = "update_dependent";
        let dependentsObj = [];
        let dependents = [];
        var newFields = '';

        $('.dependents-container').each(function() { //get names and birthdays from each input fields
            let name = $(this).find('input[name="dependentName"]').val();
            let birthdate = $(this).find('input[name="dependentBirthdate"]').val();

            dependents.push({ //populate the array
                name: name,
                birthdate: birthdate
            });
        });

        // set values from the form input
        dependentsObj = {
            spouse_name: $('#spouseName').val(),
            spouse_occupation: $('#spouseOccupation').val(),
            spouse_company: $('#spouseCompany').val(),
            father_name: $('#fatherName').val(),
            father_occupation: $('#fatherOccupation').val(),
            father_deceased: $('#fatherDeceased').val() ?? false,
            mother_name: $('#motherName').val(),
            mother_occupation: $('#motherOccupation').val(),
            mother_maiden_name: $('#motherMaidenName').val(),
            mother_deceased: $('#motherDeceased').val() ?? false,
            dependents: dependents,
            other_dependent_name: $('#otherDependentName').val(),
            other_dependent_birthdate: $('#otherDependentBirthdate').val(),
            other_dependent_relationship: $('#otherDependentRelationship').val(),
            emergency_contact_name: $('#emergencyContactName').val(),
            emergency_address: $('#emergencyAddress').val(),
            emergency_telephone: $('#emergencyTelephone').val(),
        };

        //console.log(dependentsObj);

        jsonObj = {
            employee_code: empCode,
            action: action,
            dependents: dependentsObj,
        };

        var empRecords = await updateProfile(jsonObj);

        if (empRecords === false) { // cancel operation if update fails
            return;
        }

        $('#saveDependent').prop('disabled', true); // disable buttons
        $('#cancelDependent').prop('disabled', true);

        $('#spouseName').val(empRecords.dependents.spouse_name);
        $('#spouseOccupation').val(empRecords.dependents.spouse_occupation);
        $('#spouseCompany').val(empRecords.dependents.spouse_company);
        $('#fatherName').val(empRecords.dependents.father_name);
        $('#fatherOccupation').val(empRecords.dependents.father_occupation);
        $('#fatherDeceased').val(empRecords.dependents.father_deceased);
        $('#motherName').val(empRecords.dependents.mother_name);
        $('#motherOccupation').val(empRecords.dependents.mother_occupation);
        $('#motherMaidenName').val(empRecords.dependents.mother_maiden_name);
        $('#motherDeceased').val(empRecords.dependents.mother_deceased);
        $('#otherDependentName').val(empRecords.dependents.other_dependent_name);
        $('#otherDependentBirthdate').val(empRecords.dependents.other_dependent_birthdate);
        $('#otherDependentRelationship').val(empRecords.dependents.other_dependent_relationship);
        $('#emergencyContactName').val(empRecords.dependents.emergency_contact_name);
        $('#emergencyAddress').val(empRecords.dependents.emergency_address);
        $('#emergencyTelephone').val(empRecords.dependents.emergency_telephone);

        $('.dependents-wrapper').html(''); //empty dependent fields
        
        $(empRecords.dependents.dependents).each(function(key, val) {
            newFields = `
                <div class="grid gap-4 grid-cols-12 col-span-12 mb-2 dependents-container">
                    <div class="col-span-12 flex justify-end toggle-hidden-dependent">
                        <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delDependent">
                            <i data-lucide="trash" class="size-4"></i>
                        </button>
                    </div>
                    <div class="col-span-8">
                        <input type="text" id="dependentName" name="dependentName" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.name}">
                    </div>
                    <div class="col-span-4">
                        <input type="text" id="dependentBirthdate" name="dependentBirthdate" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                    </div>
                </div>
            `;
            var $newElement = $(newFields).appendTo('.dependents-wrapper');
            $newElement.find('[data-provider="flatpickr"]').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(val.birthdate);
        });

        $('#saveDependent').prop('disabled', false); // enable buttons
        $('#cancelDependent').prop('disabled', false);
        $('.add-dependent-wrapper').toggleClass('hidden');
        $('#dependent-form input').prop('disabled', true);
        $('.toggle-hidden-dependent').toggleClass('hidden');
        lucide.createIcons(); //load icons
    });

    // Adds new dependent fields
    $('#addDependent').click(function() {
        let newDependents = `
            <div class="grid gap-4 grid-cols-12 col-span-12 mb-2 dependents-container">
                <div class="col-span-12 flex justify-end toggle-hidden-dependent">
                    <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delDependent">
                        <i data-lucide="trash" class="size-4"></i>
                    </button>
                </div>
                <div class="col-span-8">
                    <input type="text" id="dependentName" name="dependentName" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-4">
                    <input type="text" id="dependentBirthdate" name="dependentBirthdate" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                </div>
            </div>`;
        $(newDependents).insertAfter('.dependents-wrapper:last');
        refreshCallBack();
        lucide.createIcons(); //load icons
    });

    $(document).on('click', '.delDependent', function() { //remove selected row
        $(this).closest('.dependents-container').remove();
    });
    /* Dependents Form Handler End */

    /* Past Employment Record Form Handler */
    $('#editPastEmployment').on('click', function () {
        //enable input fields
        $('.toggle-hidden-employment-history').toggleClass('hidden');
        $('.add-record-wrapper').toggleClass('hidden');
        $('#past-employment-form input:disabled').prop('disabled', false);
    });

    $('#cancelPastEmployment').on('click', function () {
        //disable input fields
        $('.toggle-hidden-employment-history').toggleClass('hidden');
        $('.add-record-wrapper').toggleClass('hidden');
        $('#past-employment-form input').prop('disabled', true);
    });

    $('#savePastEmployment').on('click', async function () {
        var jsonObj = {};
        action = "update_past_employment";
        let pastEmploymentObj = [];
        var newFields = '';

        $('.past-employment-container').each(function() { //get names and birthdays from each input fields
            let company_name = $(this).find('input[name="perCompanyName"]').val();
            let date_hired = $(this).find('input[name="perDateHired"]').val();
            let first_position = $(this).find('input[name="perFirstPosition"]').val();
            let last_position = $(this).find('input[name="perLastPosition"]').val();
            let reason = $(this).find('input[name="perReason"]').val();
            let salary = $(this).find('input[name="perSalary"]').val();
            let length_stay = $(this).find('input[name="perLengthStay"]').val();
            let date_terminated = $(this).find('input[name="perDateTerminated"]').val();

            pastEmploymentObj.push({ //populate the array
                company_name: company_name,
                date_hired: date_hired,
                first_position: first_position,
                last_position: last_position,
                reason: reason,
                salary: salary,
                length_stay: length_stay,
                date_terminated: date_terminated
            });
        });

        jsonObj = {
            employee_code: empCode,
            action: action,
            past_employment_record: pastEmploymentObj,
        };

        var empRecords = await updateProfile(jsonObj);
        //console.log(empRecords);

        if (empRecords === false) { // cancel operation if update fails
            return;
        }

        $('.past-employment-wrapper').html(''); //empty past employment fields

        $(empRecords.past_employment_record).each(function (key, val) {
            newFields = `
                <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 rounded-md border border-dashed mb-4 p-5 past-employment-container">
                    <div class="col-span-12 flex justify-end toggle-hidden-employment-history">
                        <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delPastEmployment">
                            <i data-lucide="trash" class="size-4"></i>
                        </button>
                    </div>
                    <div class="grid gap-x-4 grid-cols-12 col-span-12">
                        <div class="col-span-12 md:col-span-3 mb-2">
                            <label for="perCompanyName" class="inline-block mb-2 text-base font-medium">Company Name</label>
                            <input type="text" id="perCompanyName" name="perCompanyName" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.company_name}">
                        </div>
                        <div class="col-span-12 md:col-span-3 mb-2">
                            <label for="perDateHired" class="inline-block mb-2 text-base font-medium">Date Hired</label>
                            <input type="text" id="perDateHired" name="perDateHired" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                        </div>
                        <div class="col-span-12 md:col-span-3 mb-2">
                            <label for="perFirstPosition" class="inline-block mb-2 text-base font-medium">First Position</label>
                            <input type="text" id="perFirstPosition" name="perFirstPosition" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.first_position}">
                        </div>
                        <div class="col-span-12 md:col-span-3 mb-2">
                            <label for="perLastPosition" class="inline-block mb-2 text-base font-medium">Last Position</label>
                            <input type="text" id="perLastPosition" name="perLastPosition" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.last_position}">
                        </div>
                    </div>
                    <div class="grid gap-x-4 grid-cols-12 col-span-12">
                        <div class="col-span-12 md:col-span-3 mb-2">
                            <label for="perReason" class="inline-block mb-2 text-base font-medium">Reason for Leaving</label>
                            <input type="text" id="perReason" name="perReason" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.reason}">
                        </div>
                        <div class="col-span-12 md:col-span-3 mb-2">
                            <label for="perSalary" class="inline-block mb-2 text-base font-medium">Salary</label>
                            <input type="text" id="perSalary" name="perSalary" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.salary}">
                        </div>
                        <div class="col-span-12 md:col-span-3 mb-2">
                            <label for="perLengthStay" class="inline-block mb-2 text-base font-medium">Length of Stay (Year)</label>
                            <input type="text" id="perLengthStay" name="perLengthStay" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.length_stay}">
                        </div>
                        <div class="col-span-12 md:col-span-3 mb-2">
                            <label for="perDateTerminated" class="inline-block mb-2 text-base font-medium">Date Terminated</label>
                            <input type="text" id="perDateTerminated" name="perDateTerminated" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                        </div>
                    </div>
                </div>
            `;

            var $newElement = $(newFields).appendTo('.past-employment-wrapper');
            $newElement.find('input[name="perDateHired"]').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(val.date_hired);
            $newElement.find('input[name="perDateTerminated"]').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(val.date_terminated);
        });

        $('#savePastEmployment').prop('disabled', false); // enable buttons
        $('#cancelPastEmployment').prop('disabled', false);
        $('#past-employment-form input').prop('disabled', true);
        $('.toggle-hidden-employment-history').toggleClass('hidden');
        $('.add-record-wrapper').toggleClass('hidden');
        lucide.createIcons();
    });

    $('#addRecord').click(function () {
        let newPastEmploymentRecord = `
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-12 rounded-md border border-dashed mb-4 p-5 past-employment-container">
                <div class="col-span-12 flex justify-end toggle-hidden-employment-history">
                    <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delPastEmployment">
                        <i data-lucide="trash" class="size-4"></i>
                    </button>
                </div>
                <div class="grid gap-x-4 grid-cols-12 col-span-12">
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <label for="perCompanyName" class="inline-block mb-2 text-base font-medium">Company Name</label>
                        <input type="text" id="perCompanyName" name="perCompanyName" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                    </div>
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <label for="perDateHired" class="inline-block mb-2 text-base font-medium">Date Hired</label>
                        <input type="text" id="perDateHired" name="perDateHired" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                    </div>
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <label for="perFirstPosition" class="inline-block mb-2 text-base font-medium">First Position</label>
                        <input type="text" id="perFirstPosition" name="perFirstPosition" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                    </div>
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <label for="perLastPosition" class="inline-block mb-2 text-base font-medium">Last Position</label>
                        <input type="text" id="perLastPosition" name="perLastPosition" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                    </div>
                </div>
                <div class="grid gap-x-4 grid-cols-12 col-span-12">
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <label for="perReason" class="inline-block mb-2 text-base font-medium">Reason for Leaving</label>
                        <input type="text" id="perReason" name="perReason" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                    </div>
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <label for="perSalary" class="inline-block mb-2 text-base font-medium">Salary</label>
                        <input type="text" id="perSalary" name="perSalary" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                    </div>
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <label for="perLengthStay" class="inline-block mb-2 text-base font-medium">Length of Stay (Year)</label>
                        <input type="text" id="perLengthStay" name="perLengthStay" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                    </div>
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <label for="perDateTerminated" class="inline-block mb-2 text-base font-medium">Date Terminated</label>
                        <input type="text" id="perDateTerminated" name="perDateTerminated" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                    </div>
                </div>
            </div>
        `;
        if ($('.past-employment-wrapper').children().length > 0) {
            $(newPastEmploymentRecord).insertAfter('.past-employment-container:last');
        } else {
            $(newPastEmploymentRecord).appendTo('.past-employment-wrapper');
        }

        refreshCallBack();
        lucide.createIcons();
    });

    $(document).on('click', '.delPastEmployment', function() { //remove selected row
        $(this).closest('.past-employment-container').remove();
    });
    /* Past Employment Record Form Handler End */

    /* Educational Background / Seminars and Trainings / Assessments and Exams Form Handler */
    $('#editEducational').on('click', function () {
        //enable input fields
        $('.toggle-hidden-educational').toggleClass('hidden');
        $('.add-educational-background-wrapper').toggleClass('hidden');
        $('.add-seminar-training-wrapper').toggleClass('hidden');
        $('.add-assessment-exam-wrapper').toggleClass('hidden');
        $('#educational-form input:disabled').prop('disabled', false);
    });

    $('#cancelEducational').on('click', function () {
        //disable input fields
        $('.toggle-hidden-educational').toggleClass('hidden');
        $('.add-educational-background-wrapper').toggleClass('hidden');
        $('.add-seminar-training-wrapper').toggleClass('hidden');
        $('.add-assessment-exam-wrapper').toggleClass('hidden');
        $('#educational-form input').prop('disabled', true);
    });

    $('#saveEducational').on('click', async function () {
        $('#saveEducational').prop('disabled', true);
        $('#cancelEducational').prop('disabled', true);

        var jsonObj = {};
        action = "update_education";
        let educationalBackgroundObj = [];
        let seminarTrainingObj = [];
        let assessmentExamObj = [];
        var newEduc = '';
        var newSem = '';
        var newAss = '';

        $('.educational-background-container').each(function() { //get names and birthdays from each input fields
            let level = $(this).find('input[name="educationalBackgroundLevel"]').val();
            let school = $(this).find('input[name="educationalBackgroundSchool"]').val();
            let course = $(this).find('input[name="educationalBackgroundCourse"]').val();
            let year = $(this).find('input[name="educationalBackgroundYear"]').val();

            if (level || school || course || year) { //check if any of the fields has value
                educationalBackgroundObj.push({ //populate the array
                    level: level,
                    school: school,
                    course: course,
                    year: year,
                });
            }
        });

        $('.seminar-training-container').each(function() { //get names and birthdays from each input fields
            let seminar = $(this).find('input[name="seminar"]').val();
            let seminar_date = $(this).find('input[name="seminarDate"]').val();

            if (seminar) { //check if any of the fields has value
                seminarTrainingObj.push({ //populate the array
                    seminar: seminar,
                    seminar_date: seminar_date,
                });
            }
        });

        $('.assessment-exam-container').each(function() { //get names and birthdays from each input fields
            let exam = $(this).find('input[name="exam"]').val();
            let score = $(this).find('input[name="score"]').val();
            let notes = $(this).find('input[name="notes"]').val();

            if (exam || score || notes) { //check if any of the fields has value
                assessmentExamObj.push({ //populate the array
                    exam: exam,
                    score: score,
                    notes: notes,
                });
            }
        });

        jsonObj = {
            employee_code: empCode,
            action: action,
            educational_background: educationalBackgroundObj,
            seminars_trainings: seminarTrainingObj,
            assessments_exams: assessmentExamObj, 
        };

        var empRecords = await updateProfile(jsonObj);

        if (empRecords === false) { // cancel operation if update fails
            return;
        }

        $('.educational-background-wrapper').html(''); // remove existing elements
        $('.seminar-training-wrapper').html('');
        $('.assessment-exam-wrapper').html('');

        $(empRecords.educational_background).each(function (key, val) {
            newEduc = `
                <div class="grid gap-x-4 grid-cols-12 col-span-12 educational-background-container">
                    <div class="col-span-12 flex justify-end mb-2 toggle-hidden-educational">
                        <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delEducational">
                            <i data-lucide="trash" class="size-4"></i>
                        </button>
                    </div>
                    <div class="col-span-12 md:col-span-2 mb-2">
                        <input type="text" id="educationalBackgroundLevel" name="educationalBackgroundLevel" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.level}">
                    </div>
                    <div class="col-span-12 md:col-span-4 mb-2">
                        <input type="text" id="educationalBackgroundSchool" name="educationalBackgroundSchool" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.school}">
                    </div>
                    <div class="col-span-12 md:col-span-4 mb-2">
                        <input type="text" id="educationalBackgroundCourse" name="educationalBackgroundCourse" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.course}">
                    </div>
                    <div class="col-span-12 md:col-span-2 mb-2">
                        <input type="number" min="0" id="educationalBackgroundYear" name="educationalBackgroundYear" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.year}">
                    </div>
                </div>
            `;

            //$(newEduc).insertAfter('.educational-background-wrapper:last');
            $('.educational-background-wrapper').append(newEduc);
            lucide.createIcons();
        });

        $(empRecords.seminars_trainings).each(function (key, val) {
            newSem = `
                <div class="grid gap-x-4 grid-cols-12 col-span-12 seminar-training-container">
                    <div class="col-span-12 flex justify-end mb-2 toggle-hidden-educational">
                        <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delSeminar">
                            <i data-lucide="trash" class="size-4"></i>
                        </button>
                    </div>
                    <div class="col-span-12 md:col-span-8 mb-2">
                        <input type="text" id="seminar" name="seminar" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.seminar}">
                    </div>
                    <div class="col-span-12 md:col-span-4 mb-2">
                        <input type="text" id="seminarDate" name="seminarDate" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                    </div>
                </div>
            `;

            var $newElement = $(newSem).appendTo('.seminar-training-wrapper');
            $newElement.find('[data-provider="flatpickr"]').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(val.seminar_date);
            lucide.createIcons();
        });

        $(empRecords.assessments_exams).each(function (key, val) {
            newAss = `
                <div class="grid gap-x-4 grid-cols-12 col-span-12 assessment-exam-container">
                    <div class="col-span-12 flex justify-end mb-2 toggle-hidden-educational">
                        <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delAssessments">
                            <i data-lucide="trash" class="size-4"></i>
                        </button>
                    </div>
                    <div class="col-span-12 md:col-span-4 mb-2">
                        <input type="text" id="exam" name="exam" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.exam}">
                    </div>
                    <div class="col-span-12 md:col-span-4 mb-2">
                        <input type="number" min="0" id="score" name="score" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.score}">
                    </div>
                    <div class="col-span-12 md:col-span-4 mb-2">
                        <input type="text" id="notes" name="notes" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.notes}">
                    </div>
                </div>
            `;

            var $newElement = $(newAss).appendTo('.assessment-exam-wrapper');
            lucide.createIcons();
        });

        $('#saveEducational').prop('disabled', false);
        $('#cancelEducational').prop('disabled', false);
        $('.toggle-hidden-educational').toggleClass('hidden');
        $('.add-educational-background-wrapper').toggleClass('hidden');
        $('.add-seminar-training-wrapper').toggleClass('hidden');
        $('.add-assessment-exam-wrapper').toggleClass('hidden');
        $('#educational-form input').prop('disabled', true);
        lucide.createIcons();
    });

    $('#addEducation').click(function () {
        let newEducationalBackground = `
            <div class="grid gap-x-4 grid-cols-12 col-span-12 educational-background-container">
                <div class="col-span-12 flex justify-end mb-2 toggle-hidden-educational">
                    <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delEducational">
                        <i data-lucide="trash" class="size-4"></i>
                    </button>
                </div>
                <div class="col-span-12 md:col-span-2 mb-2">
                    <input type="text" id="educationalBackgroundLevel" name="educationalBackgroundLevel" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-4 mb-2">
                    <input type="text" id="educationalBackgroundSchool" name="educationalBackgroundSchool" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-4 mb-2">
                    <input type="text" id="educationalBackgroundCourse" name="educationalBackgroundCourse" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-2 mb-2">
                    <input type="number" min="0" id="educationalBackgroundYear" name="educationalBackgroundYear" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
            </div>
        `;

        if ($('.educational-background-wrapper').children().length > 0) {
            $(newEducationalBackground).insertAfter('.educational-background-container:last');
        } else {
            $(newEducationalBackground).appendTo('.educational-background-wrapper');
        }
        
        refreshCallBack();
        lucide.createIcons();
    });

    $(document).on('click', '.delEducational', function() { //remove selected row
        $(this).closest('.educational-background-container').remove();
    });

    $('#addSeminar').click(function () {
        let newSeminar = `
            <div class="grid gap-x-4 grid-cols-12 col-span-12 seminar-training-container">
                <div class="col-span-12 flex justify-end mb-2 toggle-hidden-educational">
                    <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delSeminar">
                        <i data-lucide="trash" class="size-4"></i>
                    </button>
                </div>
                <div class="col-span-12 md:col-span-8 mb-2">
                    <input type="text" id="seminar" name="seminar" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-4 mb-2">
                    <input type="text" id="seminarDate" name="seminarDate" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                </div>
            </div>
        `;

        if ($('.seminar-training-wrapper').children().length > 0) {
            $(newSeminar).insertAfter('.seminar-training-container:last');
        } else {
            $(newSeminar).appendTo('.seminar-training-wrapper');
        }
        refreshCallBack();
        lucide.createIcons();
    });

    $(document).on('click', '.delSeminar', function() { //remove selected row
        $(this).closest('.seminar-training-container').remove();
    });

    $('#addAssessmentExam').click(function () {
        let newAssessmentExam = `
            <div class="grid gap-x-4 grid-cols-12 col-span-12 assessment-exam-container">
                <div class="col-span-12 flex justify-end mb-2 toggle-hidden-educational">
                    <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delAssessments">
                        <i data-lucide="trash" class="size-4"></i>
                    </button>
                </div>
                <div class="col-span-12 md:col-span-4 mb-2">
                    <input type="text" id="exam" name="exam" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-4 mb-2">
                    <input type="number" min="0" id="score" name="score" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-4 mb-2">
                    <input type="text" id="notes" name="notes" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
            </div>
        `;
        
        if ($('.assessment-exam-wrapper').children().length > 0) {
            $(newAssessmentExam).insertAfter('.assessment-exam-container:last');
        } else {
            $(newAssessmentExam).appendTo('.assessment-exam-wrapper');
        }
        refreshCallBack();
        lucide.createIcons();
    });

    $(document).on('click', '.delAssessments', function() { //remove selected row
        $(this).closest('.assessment-exam-container').remove();
    });
    /* Educational Background / Seminars and Trainings / Assessments and Exams Form Handler End*/

    /* Skills / Awards/ Licenses Form Handler */
    $('#editSAL').on('click', function () {
        //enable input fields
        $('.toggle-hidden-SAL').toggleClass('hidden');
        $('.add-skill-wrapper').toggleClass('hidden');
        $('.add-award-wrapper').toggleClass('hidden');
        $('.add-license-wrapper').toggleClass('hidden');
        $('#skill-award-license-form input:disabled').prop('disabled', false);

    });

    $('#cancelSAL').on('click', function () {
        //disable input fields
        $('.toggle-hidden-SAL').toggleClass('hidden');
        $('.add-skill-wrapper').toggleClass('hidden');
        $('.add-award-wrapper').toggleClass('hidden');
        $('.add-license-wrapper').toggleClass('hidden');
        $('#skill-award-license-form input').prop('disabled', true);
    });

    $('#saveSAL').on('click', async function () {
        $('#saveSAL').prop('disabled', true);
        $('.cancelSAL').prop('disabled', true);

        var jsonObj = {};
        action = "update_sal";
        let skillObj = [];
        let awardObj = [];
        let licenseObj = [];
        var newSki = '';
        var newAwa = '';
        var newLic = '';

        $('.skill-container').each(function() { //get names and birthdays from each input fields
            let skill_code = $(this).find('input[name="skillCode"]').val();
            let skill_description = $(this).find('input[name="skillDescription"]').val();
            let skill_priority = $(this).find('input[name="skillPriority"]').val();

            if (skill_code || skill_description || skill_priority) { //check if any of the fields has value
                skillObj.push({ //populate the array
                    skill_code: skill_code,
                    skill_description: skill_description,
                    skill_priority: skill_priority,
                });
            }
        });

        $('.award-container').each(function() { //get names and birthdays from each input fields
            let award_date = $(this).find('input[name="awardDate"]').val();
            let award_code = $(this).find('input[name="awardCode"]').val();
            let award_description = $(this).find('input[name="awardDescription"]').val();

            if (award_date || award_code || award_description) { //check if any of the fields has value
                awardObj.push({ //populate the array
                    award_date: award_date,
                    award_code: award_code,
                    award_description: award_description
                });
            }
        });

        $('.license-container').each(function() { //get names and birthdays from each input fields
            let license_date = $(this).find('input[name="licenseDate"]').val();
            let license = $(this).find('input[name="license"]').val();
            let license_remarks = $(this).find('input[name="licenseRemarks"]').val();

            if (license_date || license || license_remarks) { //check if any of the fields has value
                licenseObj.push({ //populate the array
                    license_date: license_date,
                    license: license,
                    license_remarks: license_remarks,
                });
            }
        });

        jsonObj = {
            employee_code: empCode,
            action: action,
            skills: skillObj,
            awards: awardObj,
            licenses: licenseObj, 
        };

        var empRecords = await updateProfile(jsonObj);

        if (empRecords === false) { // cancel operation if update fails
            return;
        }

        $('.skill-wrapper').html(''); // remove existing elements
        $('.award-wrapper').html('');
        $('.license-wrapper').html('');

        $(empRecords.skills).each(function (key, val) {
            newSki = `
                <div class="grid gap-x-4 grid-cols-12 col-span-12 skill-container">
                    <div class="col-span-12 flex justify-end mb-2 toggle-hidden-SAL">
                        <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delSkill">
                            <i data-lucide="trash" class="size-4"></i>
                        </button>
                    </div>
                    <div class="col-span-12 md:col-span-4 mb-2">
                        <input type="text" id="skillCode" name="skillCode" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.skill_code}">
                    </div>
                    <div class="col-span-12 md:col-span-4 mb-2">
                        <input type="text" id="skillDescription" name="skillDescription" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.skill_description}">
                    </div>
                    <div class="col-span-12 md:col-span-4 mb-2">
                        <input type="text" id="skillPriority" name="skillPriority" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.skill_priority}">
                    </div>
                </div>
            `;

            $(newSki).appendTo('.skill-wrapper');
            lucide.createIcons();
        });

        $(empRecords.awards).each(function (key, val) {
            newAwa = `
                <div class="grid gap-x-4 grid-cols-12 col-span-12 award-container">
                    <div class="col-span-12 flex justify-end mb-2 toggle-hidden-SAL">
                        <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delAward">
                            <i data-lucide="trash" class="size-4"></i>
                        </button>
                    </div>
                    <div class="col-span-12 md:col-span-4 mb-2">
                        <input type="text" id="awardDate" name="awardDate" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                    </div>
                    <div class="col-span-12 md:col-span-4 mb-2">
                        <input type="text" id="awardCode" name="awardCode" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.award_code}">
                    </div>
                    <div class="col-span-12 md:col-span-4 mb-2">
                        <input type="text" id="awardDescription" name="awardDescription" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.award_description}">
                    </div>
                </div>
            `;

            var $newElement = $(newAwa).appendTo('.award-wrapper');
            $newElement.find('[data-provider="flatpickr"]').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(val.award_date);
            lucide.createIcons();
        });

        $(empRecords.licenses).each(function (key, val) {
            newLic = `
                <div class="grid gap-x-4 grid-cols-12 col-span-12 license-container">
                    <div class="col-span-12 flex justify-end mb-2 toggle-hidden-SAL">
                        <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delLicense">
                            <i data-lucide="trash" class="size-4"></i>
                        </button>
                    </div>
                    <div class="col-span-12 md:col-span-4 mb-2">
                        <input type="text" id="licenseDate" name="licenseDate" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                    </div>
                    <div class="col-span-12 md:col-span-4 mb-2">
                        <input type="text" id="license" name="license" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.license}">
                    </div>
                    <div class="col-span-12 md:col-span-4 mb-2">
                        <input type="text" id="licenseRemarks" name="licenseRemarks" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.license_remarks}">
                    </div>
                </div>
            `;

            var $newElement = $(newLic).appendTo('.license-wrapper');
            $newElement.find('[data-provider="flatpickr"]').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(val.license_date);
            lucide.createIcons();
        });

        $('#saveSAL').prop('disabled', false);
        $('.cancelSAL').prop('disabled', false);
        $('.toggle-hidden-SAL').toggleClass('hidden');
        $('.add-skill-wrapper').toggleClass('hidden');
        $('.add-award-wrapper').toggleClass('hidden');
        $('.add-license-wrapper').toggleClass('hidden');
        $('#skill-award-license-form input').prop('disabled', true);
    });

    $('#addSkill').click(function () {
        let newSkill = `
            <div class="grid gap-x-4 grid-cols-12 col-span-12 skill-container">
                <div class="col-span-12 flex justify-end mb-2 toggle-hidden-SAL">
                    <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delSkill">
                        <i data-lucide="trash" class="size-4"></i>
                    </button>
                </div>
                <div class="col-span-12 md:col-span-4 mb-2">
                    <input type="text" id="skillCode" name="skillCode" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-4 mb-2">
                    <input type="text" id="skillDescription" name="skillDescription" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-4 mb-2">
                    <input type="text" id="skillPriority" name="skillPriority" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
            </div>
        `;

        if ($('.skill-wrapper').children().length > 0) {
            $(newSkill).insertAfter('.skill-container:last');
        } else {
            $(newSkill).appendTo('.skill-wrapper');
        }
        refreshCallBack();
        lucide.createIcons();
    });

    $(document).on('click', '.delSkill', function() { //remove selected row
        $(this).closest('.skill-container').remove();
    });

    $('#addAward').click(function () {
        let newAward = `
            <div class="grid gap-x-4 grid-cols-12 col-span-12 award-container">
                <div class="col-span-12 flex justify-end mb-2 toggle-hidden-SAL">
                    <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delAward">
                        <i data-lucide="trash" class="size-4"></i>
                    </button>
                </div>
                <div class="col-span-12 md:col-span-4 mb-2">
                    <input type="text" id="awardDate" name="awardDate" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                </div>
                <div class="col-span-12 md:col-span-4 mb-2">
                    <input type="text" id="awardCode" name="awardCode" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-4 mb-2">
                    <input type="text" id="awardDescription" name="awardDescription" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
            </div>
        `;

        if ($('.award-wrapper').children().length > 0) {
            $(newAward).insertAfter('.award-container:last');
        } else {
            $(newAward).appendTo('.award-wrapper');
        }
        refreshCallBack();
        lucide.createIcons();
    });

    $(document).on('click', '.delAward', function() { //remove selected row
        $(this).closest('.award-container').remove();
    });

    $('#addLicense').click(function () {
        let newLicense = `
            <div class="grid gap-x-4 grid-cols-12 col-span-12 license-container">
                <div class="col-span-12 flex justify-end mb-2 toggle-hidden-SAL">
                    <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delLicense">
                        <i data-lucide="trash" class="size-4"></i>
                    </button>
                </div>
                <div class="col-span-12 md:col-span-4 mb-2">
                    <input type="text" id="licenseDate" name="licenseDate" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                </div>
                <div class="col-span-12 md:col-span-4 mb-2">
                    <input type="text" id="license" name="license" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-4 mb-2">
                    <input type="text" id="licenseRemarks" name="licenseRemarks" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
            </div>
        `;
        
        if ($('.license-wrapper').children().length > 0) {
            $(newLicense).insertAfter('.license-container:last');
        } else {
            $(newLicense).appendTo('.license-wrapper');
        }
        refreshCallBack();
        lucide.createIcons();
    });

    $(document).on('click', '.delLicense', function() { //remove selected row
        $(this).closest('.license-container').remove();
    });
    /* Skills / Awards/ Licenses Form Handler */

    /* Violations Form Handler */
    $('#editViolation').on('click', function () {
        //enable input fields
        $('.toggle-hidden-violation').toggleClass('hidden');
        $('.add-violation-wrapper').toggleClass('hidden');
        $('#violation-form input:disabled').prop('disabled', false);

    });

    $('#cancelViolation').on('click', function () {
        //disable input fields
        $('.toggle-hidden-violation').toggleClass('hidden');
        $('.add-violation-wrapper').toggleClass('hidden');
        $('#violation-form input').prop('disabled', true);
    });

    $('#saveViolation').on('click', async function () {
        $('#saveViolation').prop('disabled', true);
        $('.cancelViolation').prop('disabled', true);
        var jsonObj = {};
        action = "update_violation";
        let violationObj = [];
        var newVio = '';

        $('.violation-container').each(function() { //get names and birthdays from each input fields
            let violation_date = $(this).find('input[name="violationDate"]').val();
            let violation_code = $(this).find('input[name="violationCode"]').val();
            let violation_day_suspension = $(this).find('input[name="violationDaySuspension"]').val();
            let violation_remark = $(this).find('input[name="violationRemark"]').val();

            if (violation_date || violation_code || violation_day_suspension || violation_remark) { //check if any of the fields has value
                violationObj.push({ //populate the array
                    violation_date: violation_date,
                    violation_code: violation_code,
                    violation_day_suspension: violation_day_suspension,
                    violation_remark: violation_remark,
                });
            }
        });

        jsonObj = {
            employee_code: empCode,
            action: action,
            violations: violationObj,
        };

        var empRecords = await updateProfile(jsonObj);

        if (empRecords === false) { // cancel operation if update fails
            return;
        }

        $('.violation-wrapper').html(''); // remove existing elements
        
        $(empRecords.violations).each(function (key, val) {
            newVio = `
                <div class="grid gap-x-4 grid-cols-12 col-span-12 violation-container">
                    <div class="col-span-12 flex justify-end mb-2 toggle-hidden-violation">
                        <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delViolation">
                            <i data-lucide="trash" class="size-4"></i>
                        </button>
                    </div>
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <input type="text" id="violationDate" name="violationDate" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                    </div>
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <input type="text" id="violationCode" name="violationCode" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.violation_code}">
                    </div>
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <input type="text" id="violationDaySuspension" name="violationDaySuspension" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.violation_day_suspension}">
                    </div>
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <input type="text" id="violationRemark" name="violationRemark" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.violation_remark}">
                    </div>
                </div>
            `;
        
            var $newElement = $(newVio).appendTo('.violation-wrapper');
            $newElement.find('[data-provider="flatpickr"]').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(val.violation_date);
        });

        $('#saveViolation').prop('disabled', false);
        $('.cancelViolation').prop('disabled', false);
        $('.toggle-hidden-violation').toggleClass('hidden');
        $('.add-violation-wrapper').toggleClass('hidden');
        $('#violation-form input').prop('disabled', true);
        lucide.createIcons();
    });

    $('#addViolation').click(function () {
        let newViolation = `
            <div class="grid gap-x-4 grid-cols-12 col-span-12 violation-container">
                <div class="col-span-12 flex justify-end mb-2 toggle-hidden-violation">
                    <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delViolation">
                        <i data-lucide="trash" class="size-4"></i>
                    </button>
                </div>
                <div class="col-span-12 md:col-span-3 mb-2">
                        <input type="text" id="violationDate" name="violationDate" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                </div>
                <div class="col-span-12 md:col-span-3 mb-2">
                    <input type="text" id="violationCode" name="violationCode" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-3 mb-2">
                    <input type="text" id="violationDaySuspension" name="violationDaySuspension" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-3 mb-2">
                    <input type="text" id="violationRemark" name="violationRemark" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
            </div>
        `;
        
        if ($('.violation-wrapper').children().length > 0) {
            $(newViolation).insertAfter('.violation-container:last');
        } else {
            $(newViolation).appendTo('.violation-wrapper');
        }

        refreshCallBack();
        lucide.createIcons();
    });

    $(document).on('click', '.delViolation', function() { //remove selected row
        $(this).closest('.violation-container').remove();
    });
    /* Violations Form Handler End */

    /* Medical/Durg Tests Form Handler */
    $('#editMedical').on('click', function () {
        //enable input fields
        $('.toggle-hidden-medical').toggleClass('hidden');
        $('.add-medical-wrapper').toggleClass('hidden');
        $('#medical-form input:disabled').prop('disabled', false);

    });

    $('#cancelMedical').on('click', function () {
        //disable input fields
        $('.toggle-hidden-medical').toggleClass('hidden');
        $('.add-medical-wrapper').toggleClass('hidden');
        $('#medical-form input').prop('disabled', true);
    });

    $('#saveMedical').on('click', async function () {
        $('#saveMedical').prop('disabled', true);
        $('#cancelMedical').prop('disabled', true);

        var jsonObj = {};
        action = "update_medical";
        let medicalObj = [];
        var newMed = '';

        $('.medical-container').each(function() { //get names and birthdays from each input fields
            let medical_date = $(this).find('input[name="medicalDate"]').val();
            let medical_result = $(this).find('input[name="medicalResult"]').val();
            let medical_center = $(this).find('input[name="medicalCenter"]').val();
            let medical_remark = $(this).find('input[name="medicalRemark"]').val();

            if (medical_date || medical_result || medical_center || medical_remark) { //check if any of the fields has value
                medicalObj.push({ //populate the array
                    medical_date: medical_date,
                    medical_result: medical_result,
                    medical_center: medical_center,
                    medical_remark: medical_remark,
                });
            }
        });

        jsonObj = {
            employee_code: empCode,
            action: action,
            medical_drug_tests: medicalObj,
        };

        var empRecords = await updateProfile(jsonObj);

        if (empRecords === false) { // cancel operation if update fails
            return;
        }

        $('.medical-wrapper').html(''); // remove existing elements

        $(empRecords.medical_drug_tests).each(function (key, val) {
            newMed = `
                <div class="grid gap-x-4 grid-cols-12 col-span-12 medical-container">
                    <div class="col-span-12 flex justify-end mb-2 toggle-hidden-medical">
                        <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delMedical">
                            <i data-lucide="trash" class="size-4"></i>
                        </button>
                    </div>
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <input type="text" id="medicalDate" name="medicalDate" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                    </div>
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <input type="text" id="medicalResult" name="medicalResult" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.medical_result}">
                    </div>
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <input type="text" id="medicalCenter" name="medicalCenter" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.medical_center}">
                    </div>
                    <div class="col-span-12 md:col-span-3 mb-2">
                        <input type="text" id="medicalRemark" name="medicalRemark" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" value="${val.medical_remark}">
                    </div>
                </div>
            `;
        
            var $newElement = $(newMed).appendTo('.medical-wrapper');
            $newElement.find('[data-provider="flatpickr"]').flatpickr({enableTime: false, dateFormat: "d M, Y"}).setDate(val.medical_date);
        });

        $('#saveMedical').prop('disabled', false);
        $('#cancelMedical').prop('disabled', false);
        $('.toggle-hidden-medical').toggleClass('hidden');
        $('.add-medical-wrapper').toggleClass('hidden');
        $('#medical-form input').prop('disabled', true);
        lucide.createIcons();
    });

    $('#addMedical').click(function () {
        let newMedical = `
            <div class="grid gap-x-4 grid-cols-12 col-span-12 medical-container">
                <div class="col-span-12 flex justify-end mb-2 toggle-hidden-medical">
                    <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delMedical">
                        <i data-lucide="trash" class="size-4"></i>
                    </button>
                </div>
                <div class="col-span-12 md:col-span-3 mb-2">
                    <input type="text" id="medicalDate" name="medicalDate" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-altFormat="d M, Y">
                </div>
                <div class="col-span-12 md:col-span-3 mb-2">
                    <input type="text" id="medicalResult" name="medicalResult" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-3 mb-2">
                    <input type="text" id="medicalCenter" name="medicalCenter" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-3 mb-2">
                    <input type="text" id="medicalRemark" name="medicalRemark" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
            </div>
        `;
        
        if ($('.medical-wrapper').children().length > 0) {
            $(newMedical).insertAfter('.medical-container:last');
        } else {
            $(newMedical).appendTo('.medical-wrapper');
        }
        refreshCallBack();
        lucide.createIcons();
    });

    $(document).on('click', '.delMedical', function() { //remove selected row
        $(this).closest('.medical-container').remove();
    });
    /* Medical/Durg Tests Form Handler End */

    /* Delete Attachment */
    $('#attachment-table').on('click', '#delAttachment', function () {
        $row = $(this).closest('tr');
        var empCode = $row.find('#employeeCode').data('empcode');
        var attachmentId = $row.find('#attachmentId').data('attachmentid');

        
        var deleteUrl = "/delete/attachment/" + empCode + "/" + attachmentId;

        // Assuming you want to set the href of the clicked button or another element
        $('#delAttachmentButton').attr('href', deleteUrl);
    });
    /* Delete Attachment End */

    async function updateProfile(jsonObj) {

        var employeeProfileUpdate = await apiCall('POST', 'api/employee/records', jsonObj);

        if (employeeProfileUpdate.action){
            switch (employeeProfileUpdate.action) {
                case 'update_additional':
                    if (employeeProfileUpdate.status === 'updated') {
                        // The element exists
                        showToast('Additional Information Updated!', 'bg-green-500');
                    } else {
                        showToast('Update Additional Information Failed, something went wrong.', 'bg-red-500')
                    }
                break;

                case 'update_dependent':
                    if (employeeProfileUpdate.status === 'updated') {
                        // The element exists
                        showToast('Dependents Updated!', 'bg-green-500');
                    } else {
                        showToast('Update Dependents Failed, something went wrong.', 'bg-red-500')
                    }
                break;

                case 'update_past_employment':
                    if (employeeProfileUpdate.status === 'updated') {
                        // The element exists
                        showToast('Past Employment Records Updated!', 'bg-green-500');
                    } else {
                        showToast('Update Past Employment Records Failed, something went wrong.', 'bg-red-500')
                    }
                    break;
                    
                case 'update_education':
                    if (employeeProfileUpdate.status === 'updated') {
                        // The element exists
                        showToast('Educational Background / Seminars and Trainings / Assessments and Exams Updated!', 'bg-green-500');
                    } else {
                        showToast('Update Educational Background / Seminars and Trainings / Assessments and Exams Failed, something went wrong.', 'bg-red-500')
                    }
                    break;
                    
                case 'update_sal':
                    if (employeeProfileUpdate.status === 'updated') {
                        // The element exists
                        showToast('Skills / Awards / Licenses Updated!', 'bg-green-500');
                    } else {
                        showToast('Update Skills / Awards / Licenses Failed, something went wrong.', 'bg-red-500')
                    }
                    break;
                    
                case 'update_violation':
                    if (employeeProfileUpdate.status === 'updated') {
                        // The element exists
                        showToast('Violations Updated!', 'bg-green-500');
                    } else {
                        showToast('Update Violations Failed, something went wrong.', 'bg-red-500')
                    }
                    break;

                case 'update_medical':
                    if (employeeProfileUpdate.status === 'updated') {
                        // The element exists
                        showToast('Medical / Drug Tests Updated!', 'bg-green-500');
                    } else {
                        showToast('Update Medical / Drug Tests Failed, something went wrong.', 'bg-red-500')
                    }
                    break;

                /* case 'update_employment_history':
                    if (employeeProfileUpdate.status === 'updated') {
                        // The element exists
                        showToast('Employment History Updated!', 'bg-green-500');
                    } else {
                        showToast('Update Employment History Failed, something went wrong.', 'bg-red-500')
                    }
                    break; */

                default:
                    showToast('Update Failed, something went wrong.', 'bg-red-500')
                    break;
            }

            return employeeProfileUpdate.employeeAdditionalRecords;

        } else {
            showToast('Update Failed, something went wrong.', 'bg-red-500')
            return false;
        }
    }

    function refreshCallBack() {
        // flatpickr
        var flatpickrExamples = document.querySelectorAll("[data-provider]");
        Array.from(flatpickrExamples).forEach(function (item) {
            if (item.getAttribute("data-provider") == "flatpickr") {
                var dateData = {};
                var isFlatpickerVal = item.attributes;
                if (isFlatpickerVal["data-date-format"])
                    dateData.dateFormat = isFlatpickerVal["data-date-format"].value.toString();
                if (isFlatpickerVal["data-enable-time"]) {
                    (dateData.enableTime = true),
                        (dateData.dateFormat = isFlatpickerVal["data-date-format"].value.toString() + " H:i");
                }
                if (isFlatpickerVal["data-altFormat"]) {
                    (dateData.altInput = true),
                        (dateData.altFormat = isFlatpickerVal["data-altFormat"].value.toString());
                }
                if (isFlatpickerVal["data-minDate"]) {
                    dateData.minDate = isFlatpickerVal["data-minDate"].value.toString();
                    dateData.dateFormat = isFlatpickerVal["data-date-format"].value.toString();
                }
                if (isFlatpickerVal["data-maxDate"]) {
                    dateData.maxDate = isFlatpickerVal["data-maxDate"].value.toString();
                    dateData.dateFormat = isFlatpickerVal["data-date-format"].value.toString();
                }
                if (isFlatpickerVal["data-default-date"]) {
                    dateData.defaultDate = isFlatpickerVal["data-default-date"].value.toString();
                    dateData.dateFormat = isFlatpickerVal["data-date-format"].value.toString();
                }
                if (isFlatpickerVal["data-multiple-date"]) {
                    dateData.mode = "multiple";
                    dateData.dateFormat = isFlatpickerVal["data-date-format"].value.toString();
                }
                if (isFlatpickerVal["data-range-date"]) {
                    dateData.mode = "range";
                    dateData.dateFormat = isFlatpickerVal["data-date-format"].value.toString();
                }
                if (isFlatpickerVal["data-inline-date"]) {
                    (dateData.inline = true),
                        (dateData.defaultDate = isFlatpickerVal["data-default-date"].value.toString());
                    dateData.dateFormat = isFlatpickerVal["data-date-format"].value.toString();
                }
                if (isFlatpickerVal["data-disable-date"]) {
                    var dates = [];
                    dates.push(isFlatpickerVal["data-disable-date"].value);
                    dateData.disable = dates.toString().split(",");
                }
                if (isFlatpickerVal["data-week-number"]) {
                    var dates = [];
                    dates.push(isFlatpickerVal["data-week-number"].value);
                    dateData.weekNumbers = true
                }
                flatpickr(item, dateData);
            }
        });
    }

    // Function to format date
    function formatDate(inputDateTime) {
        const inputDate = inputDateTime.slice(0, 10);
        var date = new Date(inputDate);
        var day = date.getDate();
        var month = date.toLocaleString('default', { month: 'short' });
        var year = date.getFullYear();
        
        return day + ' ' + month + ', ' + year;
    }

    function removeSpacesAndDashes(input) {
        return input.replace(/[\s-]/g, '');
    }

    // Employee Record ID
    const empId = $('#empId').data('value');

    // Payroll Information Form Handler
    var basicSalary = $('.td-basicSalary').attr('data-value') ? $.trim($('.td-basicSalary').attr('data-value')) : '';
    var allowance = $('.td-allowance').attr('data-value') ? $.trim($('.td-allowance').attr('data-value')) : '';
    // var dailyRate = $('.td-dailyRate').attr('data-value') ? $.trim($('.td-dailyRate').attr('data-value')) : '';
    // var hourlyRate = $('.td-hourlyRate').attr('data-value') ? $.trim($('.td-hourlyRate').attr('data-value')) : '';
    var overtimeRate = $('.td-overtimeRate').attr('data-value') ? $.trim($('.td-overtimeRate').attr('data-value')) : '';
    var undertimeRate = $('.td-undertimeRate').attr('data-value') ? $.trim($('.td-undertimeRate').attr('data-value')) : '';

    //for 13th month pay
    var included_sal_adjustment = $('.td-include_sal_adjustment').attr('data-value') ? $.trim($('.td-include_sal_adjustment').attr('data-value')) : '';
    var included_salary = $('.td-include_salary').attr('data-value') ? $.trim($('.td-include_salary').attr('data-value')) : '';
    var included_taxshield = $('.td-include_taxshield').attr('data-value') ? $.trim($('.td-include_taxshield').attr('data-value')) : '';

    // New code for edit-cancel-save for Payroll
    $('#editPayrollButton').on('click', function () {
        // Toggle hidden class on input fields and buttons
        $('.toggle-payroll-hidden').toggleClass('hidden');
        
        // Populate the input fields with the corresponding values from the variables
        $('#basicSalary').val(basicSalary);
        $('#allowance').val(allowance);
        // $('#dailyRate').val(dailyRate);
        // $('#hourlyRate').val(hourlyRate);
        $('#overtimeRate').val(overtimeRate);
        $('#undertimeRate').val(undertimeRate);
        //For 13th monthpay
        $('#include_sal_adjustment').val(included_sal_adjustment);
        $('#include_salary').val(included_salary);
        $('#include_taxshield').val(included_taxshield);
    });
    
    $('#cancelPayrollButton').on('click', function () {
        $('.toggle-payroll-hidden').toggleClass('hidden');
    });

    // Remove commas and unnecessary characters from float numbers
    function cleanNumber(value) {
        if (typeof value === 'string') {
            return parseFloat(value.replace(/,/g, '')) || 0; // Remove commas and parse as float, default to 0 if NaN
        }
        return value;
    }

    // Format float numbers with commas for display
    function formatNumberWithCommas(value) {
        if (typeof value === 'number') {
            return value.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
        }
        return value;
    }


    async function savePayrollProfile() {
        let cashAdvanceObj  = [];
        let sssLoansObj     = [];
        let pagibigLoansObj = [];

        $('.ca-container').each(function() {
            // let ca_date = $('#ca_date').val();
            // let ca_amount = $('#ca_amount').val();
            // let ca_deduction = $('#ca_deduction').val();
            let ca_id = $(this).find('input[name="ca_id"]').val() || '';
            let ca_date = $(this).find('input[name="ca_date"]').val();
            let ca_amount = $(this).find('input[name="ca_amount"]').val();
            let ca_deduction = $(this).find('input[name="ca_deduction"]').val();
            let ca_remarks = $(this).find('input[name="ca_remarks"]').val();
            let ca_status = $(this).find('input[name="ca_status"]').val();

            if (ca_date || ca_amount || ca_deduction) { //check if any of the fields has value
                cashAdvanceObj.push({ //populate the array
                    id: ca_id,
                    date_start: ca_date,
                    cash_advance_amount: cleanNumber(ca_amount),
                    cash_advance_deduction: cleanNumber(ca_deduction),
                    cash_remarks: ca_remarks,
                    cash_status: ca_status,
                });
            }
        });

        $('.sss-container').each(function() {
            // let ca_date = $('#ca_date').val();
            // let ca_amount = $('#ca_amount').val();
            // let ca_deduction = $('#ca_deduction').val();
            let sss_id = $(this).find('input[name="sss_id"]').val() || '';
            let sss_date = $(this).find('input[name="sss_date"]').val();
            let sss_amount = $(this).find('input[name="sss_amount"]').val();
            let sss_deduction = $(this).find('input[name="sss_deduction"]').val();
            // let sss_remarks = $(this).find('input[name="sss_remarks"]').val();
            let sss_remarks = $(this).find('select[name="sss_remarks"]').val();
            let sss_status = $(this).find('select[name="sss_status"]').val();

            if (sss_date || sss_amount || sss_deduction) { //check if any of the fields has value
                sssLoansObj.push({ //populate the array
                    id: sss_id,
                    date_start: sss_date,
                    sss_amount: cleanNumber(sss_amount),
                    sss_deduction: cleanNumber(sss_deduction),
                    remarks: sss_remarks,
                    sss_status: sss_status,
                });
            }
        });

        $('.pagibig-container').each(function() {
            // let ca_date = $('#ca_date').val();
            // let ca_amount = $('#ca_amount').val();
            // let ca_deduction = $('#ca_deduction').val();
            let pagibig_id = $(this).find('input[name="pagibig_id"]').val() || '';
            let pagibig_date = $(this).find('input[name="pagibig_date"]').val();
            let pagibig_amount = $(this).find('input[name="pagibig_amount"]').val();
            let pagibig_deduction = $(this).find('input[name="pagibig_deduction"]').val();
            //let pagibig_remarks = $(this).find('input[name="pagibig_remarks"]').val();
            let pagibig_remarks = $(this).find('select[name="pagibig_remarks"]').val();
            let pagibig_status = $(this).find('select[name="pagibig_status"]').val();

            if (pagibig_date || pagibig_amount || pagibig_deduction) { //check if any of the fields has value
                pagibigLoansObj.push({ //populate the array
                    id: pagibig_id,
                    date_start: pagibig_date,
                    pagibig_amount: cleanNumber(pagibig_amount),
                    pagibig_deduction: cleanNumber(pagibig_deduction),
                    remarks: pagibig_remarks,
                    pagibig_status: pagibig_status,
                });
            }
        });

        console.log('Included Salary Adjustment:',$('#include_sal_adjustment').is(':checked'))

        // Create the JSON object and clean the float values
        var jsonObj = {
            employee_record_id: empId,
            monthly_salary: cleanNumber($('#basicSalary').val()),
            daily_rate: cleanNumber($('#dailyRate').val()),
            daily_tax_shield: cleanNumber($('#dailyTaxShield').val()),
            allowance: cleanNumber($('#allowance').val()),
            tax_shield: cleanNumber($('#taxShield').val()),
            overtime_rate: cleanNumber($('#overtimeRate').val()),
            late_rate: cleanNumber($('#undertimeRate').val()),
            sss_loan: cleanNumber($('#sssLoan').val()),
            sss_loan_deduction: cleanNumber($('#sssLoanDeduction').val()),
            hdmf_loan: cleanNumber($('#hdmfLoan').val()),
            hdmf_loan_deduction: cleanNumber($('#hdmfLoanDeduction').val()),
            cash_advance: cleanNumber($('#cashAdvance').val()),
            cash_advance_deduction: cleanNumber($('#cashAdvanceDeduction').val()),
            other_loans: cleanNumber($('#otherLoans').val()),
            other_loans_deduction: cleanNumber($('#otherLoansDeduction').val()),
            employer_sss_contribution: 0,
            employer_pagibig_contribution: 0,
            employer_philhealth_contribution: 0,
            accident_insurance: 0,
            thirteenth_month_pay: 0,
            cash_advance_array : cashAdvanceObj,
            sss_loan_array : sssLoansObj,
            pagibig_loan_array : pagibigLoansObj,
            include_sal_adjustment: $('#include_sal_adjustment').is(':checked'),
            include_salary: $('#include_salary').is(':checked'),
            include_taxshield: $('#include_taxshield').is(':checked'),
        };
    
        console.log('Cleaned JSON object:', jsonObj);
        
        // Update payroll profile using the API
        var payrollProfile = await updatePayrollProfile(jsonObj, empId);
    
        if (payrollProfile === false) {
            // Cancel operation if update fails
            $('#savePayrollButton').prop('disabled', false);
            $('#cancelPayrollButton').prop('disabled', false);
            return;
        }
    
        console.log('Updated payroll profile:', payrollProfile);
    
        // Update fields with formatted numbers (with commas)
        $('.td-basicSalary').text(formatNumberWithCommas(payrollProfile.monthly_salary)).attr('data-value', payrollProfile.monthly_salary);
        $('.td-allowance').text(formatNumberWithCommas(payrollProfile.allowance)).attr('data-value', payrollProfile.allowance);
        $('.td-tax_shield').text(formatNumberWithCommas(payrollProfile.tax_shield)).attr('data-value', payrollProfile.tax_shield);
        $('.td-dailyRate').text(formatNumberWithCommas(payrollProfile.daily_rate)).attr('data-value', payrollProfile.daily_rate);
        $('.td-daily_tax_shield').text(formatNumberWithCommas(payrollProfile.daily_tax_shield)).attr('data-value', payrollProfile.daily_tax_shield);
        $('.td-hourlyRate').text(formatNumberWithCommas(payrollProfile.hourly_rate)).attr('data-value', payrollProfile.hourly_rate);
        $('.td-overtimeRate').text(formatNumberWithCommas(payrollProfile.overtime_rate)).attr('data-value', payrollProfile.overtime_rate);
        $('.td-undertimeRate').text(formatNumberWithCommas(payrollProfile.late_rate)).attr('data-value', payrollProfile.late_rate);

        $('.td-sssLoan').text(formatNumberWithCommas(payrollProfile.sss_loan)).attr('data-value', payrollProfile.sss_loan);
        $('.td-sssLoanDeduction').text(formatNumberWithCommas(payrollProfile.sss_loan_deduction)).attr('data-value', payrollProfile.sss_loan_deduction);
        $('.td-hdmfLoan').text(formatNumberWithCommas(payrollProfile.hdmf_loan)).attr('data-value', payrollProfile.hdmf_loan);
        $('.td-hdmfLoanDeduction').text(formatNumberWithCommas(payrollProfile.hdmf_loan_deduction)).attr('data-value', payrollProfile.hdmf_loan_deduction);
        $('.td-cashAdvance').text(formatNumberWithCommas(payrollProfile.cash_advance)).attr('data-value', payrollProfile.cash_advance);
        $('.td-cashAdvanceDeduction').text(formatNumberWithCommas(payrollProfile.cash_advance_deduction)).attr('data-value', payrollProfile.cash_advance_deduction);
        $('.td-otherLoans').text(formatNumberWithCommas(payrollProfile.other_loans)).attr('data-value', payrollProfile.other_loans);
        $('.td-otherLoansDeduction').text(formatNumberWithCommas(payrollProfile.other_loans_deduction)).attr('data-value', payrollProfile.other_loans_deduction);

        // Update Deductions/Mandatory UI
        $('.td-sss_deduction').text(formatNumberWithCommas(payrollProfile.sss_deduction));
        $('.td-philhealth_deduction').text(formatNumberWithCommas(payrollProfile.philhealth_deduction));
        $('.td-pagibig_deduction').text(formatNumberWithCommas(payrollProfile.pagibig_deduction));
        $('.td-tax_deduction').text(formatNumberWithCommas(payrollProfile.tax_deduction));

        // Update Deductions/Mandatory UI
        $('.td-employer_sss_contribution').text(formatNumberWithCommas(payrollProfile.employer_sss_contribution));
        $('.td-employer_philhealth_contribution').text(formatNumberWithCommas(payrollProfile.employer_philhealth_contribution));
        $('.td-employer_pagibig_contribution').text(formatNumberWithCommas(payrollProfile.employer_pagibig_contribution));

        // For 13th month pay config update
        $('.td-include_sal_adjustment')
            .text(payrollProfile.included_sal_adjustment ? 'Yes' : 'No')
            .attr('data-value', payrollProfile.included_sal_adjustment ? 'Yes' : 'No');

        $('.td-include_salary')
            .text(payrollProfile.included_salary ? 'Yes' : 'No')
            .attr('data-value', payrollProfile.included_salary ? 'Yes' : 'No');

        $('.td-include_taxshield')
            .text(payrollProfile.included_taxshield ? 'Yes' : 'No')
            .attr('data-value', payrollProfile.included_taxshield ? 'Yes' : 'No');

        // Enable buttons after processing
        $('#savePayrollButton').prop('disabled', false);
        $('#cancelPayrollButton').prop('disabled', false);
    }
    
    
    $('#savePayrollButton').on('click', async function () {
        savePayrollProfile();
        $('.toggle-payroll-hidden').toggleClass('hidden');
        $('#savePayrollButton').prop('disabled', false);
        $('#cancelPayrollButton').prop('disabled', false);
    });

    // Loan Information Form Handler
    var sssLoan = $('.td-sssLoan').attr('data-value') ? $.trim($('.td-sssLoan').attr('data-value')) : '';
    var sssLoanDeduction = $('.td-sssLoanDeduction').attr('data-value') ? $.trim($('.td-sssLoanDeduction').attr('data-value')) : '';
    var hdmfLoan = $('.td-hdmfLoan').attr('data-value') ? $.trim($('.td-hdmfLoan').attr('data-value')) : '';
    var hdmfLoanDeduction = $('.td-hdmfLoanDeduction').attr('data-value') ? $.trim($('.td-hdmfLoanDeduction').attr('data-value')) : '';
    var cashAdvance = $('.td-cashAdvance').attr('data-value') ? $.trim($('.td-cashAdvance').attr('data-value')) : '';
    var cashAdvanceDeduction = $('.td-cashAdvanceDeduction').attr('data-value') ? $.trim($('.td-cashAdvanceDeduction').attr('data-value')) : '';
    var otherLoans = $('.td-otherLoans').attr('data-value') ? $.trim($('.td-otherLoans').attr('data-value')) : '';
    var otherLoansDeduction = $('.td-otherLoansDeduction').attr('data-value') ? $.trim($('.td-otherLoansDeduction').attr('data-value')) : '';

    // Button to Edit Loan Information
    $('#editLoanButton').on('click', function () {
        // Toggle hidden class on loan-related input fields and the text display
        $('.toggle-loan-hidden').toggleClass('hidden');
        
        // Populate the input fields with corresponding values from the variables
        $('#sssLoan').val(sssLoan);
        $('#sssLoanDeduction').val(sssLoanDeduction);
        $('#hdmfLoan').val(hdmfLoan);
        $('#hdmfLoanDeduction').val(hdmfLoanDeduction);
        $('#cashAdvance').val(cashAdvance);
        $('#cashAdvanceDeduction').val(cashAdvanceDeduction);
        $('#otherLoans').val(otherLoans);
        $('#otherLoansDeduction').val(otherLoansDeduction);
    });

    // Button to Save Loan Information
    $('#saveLoanButton').on('click', function () {
        savePayrollProfile();
        $('.toggle-loan-hidden').toggleClass('hidden');
    });

    // Button to Cancel Loan Edit
    $('#cancelLoanButton').on('click', function () {
        // Toggle back the input fields and display the original text
        $('.toggle-loan-hidden').toggleClass('hidden');
    });

    async function updatePayrollProfile(jsonObj, id) {

        var empPayrollProfileUpdate = await apiCall('POST', 'api/employee-payroll-profile/save', jsonObj);
        if (empPayrollProfileUpdate.error == ''){
            showToast('Additional Information Updated!', 'bg-green-500');
            var empPayrollProfileData = await apiCall('GET', 'api/employee-payroll-profile/find/' + id, []);
            return empPayrollProfileData;

        } else {
            showToast('Update Failed, something went wrong.', 'bg-red-500')
            return false;
        }
    }

    // Button to Edit Cash Advance Information
    $('#editCAButton').on('click', function () {
        // Toggle hidden class on loan-related input fields and the text display
        $('.toggle-ca-hidden').toggleClass('hidden');
        $('.add-ca-wrapper').toggleClass('hidden');
        $('#ca-form input:disabled, #ca-form select:disabled').prop('disabled', false);
    });

    // Button to Cash Advance Information
    $('#saveCAButton').on('click', function () {
        $('.toggle-ca-hidden').toggleClass('hidden');
        $('#ca-form input, #ca-form select').prop('disabled', true);
        savePayrollProfile();
    });

    // Button to Cash Advance cancel
    $('#cancelCAButton').on('click', function () {
        // Toggle back the input fields and display the original text
        $('.toggle-ca-hidden').toggleClass('hidden');
        $('#ca-form input').prop('disabled', true);
    });

    $('#addCA').click(function () {
        let newCA = `
            <div class="grid gap-x-4 grid-cols-12 col-span-12 ca-container">
                <div class="col-span-12 flex justify-end mb-2 toggle-ca-hidden">
                    <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delSkill">
                        <i data-lucide="trash" class="size-4"></i>
                    </button>
                </div>
                <div class="col-span-12 md:col-span-2 mb-2">
                    <input type="text" id="ca_date" name="ca_date" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-provider="flatpickr" data-date-format="Y-m-d" readonly="readonly" placeholder="Select Date">
                </div>
                <div class="col-span-12 md:col-span-2 mb-2">
                    <input type="number" min="0" id="ca_amount" name="ca_amount" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-2 mb-2">
                    <input type="number" min="0" id="ca_deduction" name="ca_deduction" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-2 mb-2">
                    <select id="ca_status" name="ca_status" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" disabled>
                        <option value="0">Disabled</option>
                        <option value="1">Enabled</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="col-span-12 md:col-span-3 mb-2">
                    <input type="text" id="ca_remarks" name="ca_remarks" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
            </div>
        `;
        console.log('working')
        if ($('.ca-wrapper').children().length > 0) {
            $(newCA).insertAfter('.ca-container:last');
        } else {
            $(newCA).appendTo('.ca-wrapper');
        }
        refreshCallBack();
        lucide.createIcons();
    });

    // SSS Loan

    // Button to Edit Cash Advance Information
    $('#edit-sss-btn').on('click', function () {
        // Toggle hidden class on loan-related input fields and the text display
        $('.toggle-sss-hidden').toggleClass('hidden');
        $('.add-sss-wrapper').toggleClass('hidden');
        $('#sss-form input:disabled, #sss-form select:disabled').prop('disabled', false);
    });

    // Button to Cash Advance Information
    $('#save-sss-btn').on('click', function () {
        $('.toggle-sss-hidden').toggleClass('hidden');
        $('#sss-form input, #sss-form select').prop('disabled', true);
        savePayrollProfile();
    });

    // Button to Cash Advance cancel
    $('#cancel-sss-btn').on('click', function () {
        // Toggle back the input fields and display the original text
        $('.toggle-sss-hidden').toggleClass('hidden');
        $('#sss-form input, #sss-form select').prop('disabled', true);
    });

    $('#addSSS').click(function () {
        let newSSS = `
            <div class="grid gap-x-4 grid-cols-12 col-span-12 sss-container">
                <div class="col-span-12 flex justify-end mb-2 toggle-sss-hidden hidden">
                    <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delSkill">
                        <i data-lucide="trash" class="size-4"></i>
                    </button>
                </div>
                <div class="col-span-12 md:col-span-2 mb-2">
                    <input type="text" id="sss_date" name="sss_date" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-provider="flatpickr" data-date-format="Y-m-d" readonly="readonly" placeholder="Select Date">
                </div>
                <div class="col-span-12 md:col-span-2 mb-2">
                    <input type="number" min="0" id="sss_amount" name="sss_amount" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" >
                </div>
                <div class="col-span-12 md:col-span-2 mb-2">
                    <input type="number" min="0" id="sss_deduction" name="sss_deduction" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                </div>
                <div class="col-span-12 md:col-span-2 mb-2">
                    <select id="sss_status" name="sss_status" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" disabled>
                        <option value="0">Disabled</option>
                        <option value="1">Enabled</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="col-span-12 md:col-span-3 mb-2">
                    <select id="sss_remarks" name="sss_remarks" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                        <option value="sss_loan">SSS Loan</option>
                        <option value="sss_calamity">SSS Calamity Loan</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
            </div>
        `;
        //<input type="text" id="sss_remarks" name="sss_remarks" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
        console.log('working')
        if ($('.sss-wrapper').children().length > 0) {
            $(newSSS).insertAfter('.sss-container:last');
        } else {
            $(newSSS).appendTo('.sss-wrapper');
        }
        refreshCallBack();
        lucide.createIcons();
    });
    
    // Pagibig Loan

    // Button to Edit Cash Advance Information
    $('#edit-pagibig-btn').on('click', function () {
        // Toggle hidden class on loan-related input fields and the text display
        $('.toggle-pagibig-hidden').toggleClass('hidden');
        $('.add-pagibig-wrapper').toggleClass('hidden');
        $('#pagibig-form input:disabled, #pagibig-form select:disabled').prop('disabled', false);
    });

    // Button to Cash Advance Information
    $('#save-pagibig-btn').on('click', function () {
        $('.toggle-pagibig-hidden').toggleClass('hidden');
        $('#pagibig-form input, #pagibig-form select').prop('disabled', true);
        savePayrollProfile();
    });

    // Button to Cash Advance cancel
    $('#cancel-pagibig-btn').on('click', function () {
        // Toggle back the input fields and display the original text
        $('.toggle-pagibig-hidden').toggleClass('hidden');
        $('#pagibig-form input, #pagibig-form select').prop('disabled', true);
    });

    $('#addPagibig').click(function () {
        let newPagibig = `
            <div class="grid gap-x-4 grid-cols-12 col-span-12 pagibig-container">
                <div class="col-span-12 flex justify-end mb-2 toggle-pagibig-hidden hidden">
                    <button type="button" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-8 text-red-500 bg-red-100 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30 delSkill">
                        <i data-lucide="trash" class="size-4"></i>
                    </button>
                </div>
                <div class="col-span-12 md:col-span-2 mb-2">
                    <input type="text" id="pagibig_date" name="pagibig_date" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-provider="flatpickr" data-date-format="Y-m-d" readonly="readonly" placeholder="Select Date" >
                </div>
                <div class="col-span-12 md:col-span-2 mb-2">
                    <input type="number" min="0" id="pagibig_amount" name="pagibig_amount" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" >
                </div>
                <div class="col-span-12 md:col-span-2 mb-2">
                    <input type="number" min="0" id="pagibig_deduction" name="pagibig_deduction" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" >
                </div>
                <div class="col-span-12 md:col-span-2 mb-2">
                    <select id="pagibig_status" name="pagibig_status" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" disabled>
                        <option value="0">Disabled</option>
                        <option value="1">Enabled</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
                <div class="col-span-12 md:col-span-3 mb-2">
                    <select id="pagibig_remarks" name="pagibig_remarks" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                        <option value="hdmf_loan" {{ pagibig_loan.remarks == 'hdmf_loan' ? 'selected' : '' }}>HDMF Loan</option>
                        <option value="hdmf_calamity" {{ pagibig_loan.remarks == 'hdmf_calamity' ? 'selected' : '' }}>HDMF Calamity Loan</option>
                        <option value="hdmf_mp2" {{ pagibig_loan.remarks == 'hdmf_mp2' ? 'selected' : '' }}>HDMF MP2</option>
                        <!-- Add more options as needed -->
                    </select>
                </div>
            </div>
        `;
        //<input type="text" id="pagibig_remarks" name="pagibig_remarks" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" >
        console.log('working')
        if ($('.pagibig-wrapper').children().length > 0) {
            $(newPagibig).insertAfter('.pagibig-container:last');
        } else {
            $(newPagibig).appendTo('.pagibig-wrapper');
        }
        refreshCallBack();
        lucide.createIcons();
    });
});
